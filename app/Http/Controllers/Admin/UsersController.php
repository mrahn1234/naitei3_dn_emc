<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRegister;
use App\Http\Requests\AdminUpdate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Config;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate_number = Config::get('app._PAGINATION');
        $users = DB::table('users')->select('id', 'name','username', 'email', 'created_at')->paginate($paginate_number);
        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.users.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRegister $request)
    {
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'avatar' => $request->avatar,
            'address' => $request->address,
            'gender' => $request->gender,
            'facebook' => $request->facebook,
            'role' => $request->role,
        ]);
        $paginate_number = Config::get('app._PAGINATION');
        $users = User::paginate($paginate_number);
        $message = "success";
        return view('admin.users.create', compact('message', 'users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->findUser($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->findUser($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUpdate $request, $id)
    {
        $user = $this->findUser($id);
        $user->update([
            'name' => $request->name,
            'birthday' => $request->birthday,
            'gender' => $request->gender !== "null" ? boolval($request->gender) : null,
            'address' => $request->address,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
        ]);
        return redirect()->route('show_users', $user->id);
    }

    public function findUser($id){

        return User::findOrFail($id);
    }

    public function destroy($id)
    {
        $this->findUser($id)->delete();
        return redirect()->route('manage_users');
    }
}
