@extends('admin.index')
@section('content')
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('user.detail') }}</div>
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
                        <form action="" class="card-body card-block" method="GET">
                            @csrf
                            <div class="form-group">
                                <div class="col-sm-1 form-group">
                                    <label for="name">{{ trans('user.name') }}</label>
                                </div>
                                <div class="col-sm-11 form-group">
                                    <p id="name">{{$user->name}}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-1 form-group">
                                    <label for="username">{{ trans('user.username') }}</label>
                                </div>
                                <div class="col-sm-11 form-group">
                                    <p id="username">{{$user->username}}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-1 form-group">
                                    <label for="email">{{ trans('user.email') }}</label>
                                </div>
                                <div class="col-sm-11 form-group">
                                    <p id="email">{{$user->email}}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-1 form-group">
                                    <label for="address">{{ trans('user.address') }}</label>
                                </div>
                                <div class="col-sm-11 form-group">
                                    @if ($user->address!=null)
                                        <p id="address">{{$user->address}}</p>
                                    @else
                                        <p>{{ trans('user.not') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 form-group">
                                    <label for="phone">{{ trans('user.phone') }}</label>
                                </div>
                                <div class="col-sm-10 form-group">
                                    @if ($user->phone!=null)
                                        <p id="phone">{{$user->phone}}</p>
                                    @else
                                        <p>{{ trans('user.not') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-1 form-group">
                                    <label for="">{{ trans('user.gender') }}</label>
                                </div>
                                <div class="col-sm-11 form-group">
                                    @if ($user->gender == true)
                                        <p id="gender1">{{ trans('user.men') }}</p>
                                    @else
                                        <p id="gender1">{{ trans('user.women') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-1 form-group">
                                    <label for="birthday">{{ trans('user.birthday') }}</label>
                                </div>
                                <div class="col-sm-11 form-group">
                                    @if ($user->birthday!=null)
                                        <p id="birthday">{{$user->birthday}}</p>
                                    @else
                                        <p>{{ trans('user.not') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 form-group">
                                    <label for="facebook">{{ trans('user.facebook') }}</label>
                                </div>
                                <div class="col-sm-10 form-group">
                                    @if ($user->facebook!=null)
                                        <p id="facebook">{{$user->facebook}}</p>
                                    @else
                                        <p>{{ trans('user.not') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 form-group">
                                    <label for="avatar">{{ trans('user.avatar') }}</label>
                                </div>
                                <div class="col-sm-10 form-group">
                                    @if ($user->avatar!=null)
                                        <input type="image" id="avater">{{$user->avatar}}
                                    @else
                                        <p>{{ trans('user.not') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-1 form-group"></div>
                                <div class="col-sm-4 form-group">
                                    <a href="{{ route('edit_users', $user->id) }}" class="btn btn-primary">
                                        <i class="fa fa-pencil"></i>{{ trans('user.edit') }}
                                    </a>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <a href="{{ route('manage_users') }}" class="btn btn-danger">
                                        <i class="fa fa-mail-reply"></i>{{ trans('user.return') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
