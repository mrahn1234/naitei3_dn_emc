@extends('admin.index')
@section('content')
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('user.edit_user') }}</div>
                </div>
                @if (isset ($message) )
                <div class="col-sm-12">
                    <div class="alert alert-success" role="alert">
                        <span class="badge badge-pill badge-success">{{ trans('user.success') }}</span> {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @elseif ($errors->any())
                    <div class="col-sm-12">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                <span class="badge badge-pill badge-danger">{{ trans('user.error') }}</span> {{ $error }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    </div>
                @endif
                <div class="panel-body panel panel-default">
                    <div class="position-center">
                        <form action="{{ route('update_users', $user->id) }}" class="card-body card-block" method="POST">
                            @csrf
                            <div class="col-md-12 form-group">
                                <label for="name">{{ trans('auth.name') }}</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" autocomplete="name" required>
                            </div>

                            <div class="col-md-12 form-group">
                            <label for="username">{{ trans('auth.username') }}</label>
                            <input type="text" name="username" id="username" class="form-control" value="{{$user->username}}" autocomplete="username" readonly required>
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="email">{{ trans('auth.email') }}</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" autocomplete="email" readonly required>
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="address">{{ trans('auth.address') }}</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{$user->address}}" autocomplete="address">
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="phone">{{ trans('auth.phone') }}</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{$user->phone}}" autocomplete="phone">
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="" class="col-sm-1">{{ trans('auth.gender') }}</label>
                                <div class="form-check form-check-inline col-sm-5">
                                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="1" {{$user->gender? "checked" : ""}}>
                                    <label class="form-check-label" for="gender1">{{ trans('auth.men') }}</label>
                                </div>

                                <div class="form-check form-check-inline col-sm-5">
                                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="0" {{!$user->gender? "checked" : ""}}>
                                    <label class="form-check-label" for="gender2">{{ trans('auth.women') }}</label>
                                </div>

                            </div>

                            <div class="col-md-12 form-group">
                                <label for="birthday">{{ trans('auth.birthday') }}</label>
                                <input type="date" name="birthday" id="birthday" class="form-control" value="{{$user->birthday}}">
                            </div>

                            <div class="form-group">
                                <label for="avatar">{{ trans('user.avatar') }}</label>
                                <input type="file" class="form-control-file" id="avatar">
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-danger">{{ trans('auth.save') }}</button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="reset" class="btn btn-primary">{{ trans('auth.reset') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

