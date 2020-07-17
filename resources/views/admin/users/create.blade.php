@extends('admin.index')
@section('content')
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('user.create_user') }}</div>
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
                        <form action="{{ route('store_users') }}" class="card-body card-block" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ trans('user.name') }}</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="username">{{ trans('user.username') }}</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ trans('user.email') }}</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">{{ trans('user.phone') }}</label>
                                <input type="text" class="form-control" id="phone" name="phone" >
                            </div>

                            <div class="form-group">
                                <label for="address">{{ trans('user.address') }}</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">{{ trans('user.gender') }}</label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="gender1">
                                        <input class="form-check-input" type="radio" name="gender" value="1" id="gender1">{{ trans('user.men') }}
                                    </label>

                                    <label class="form-check-label" for="gender2">
                                        <input class="form-check-input" type="radio" name="gender" value="0" id="gender2">{{ trans('user.women') }}
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="birthday">{{ trans('user.birthday') }}</label>
                                <input type="date" name="birthday" id="birthday" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="facebook">{{ trans('user.facebook') }}</label>
                                <input type="text" name="facebook" id="facebook" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="password">{{ trans('user.password') }}</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="pw_confirm">{{ trans('user.pw_confirm') }}</label>
                                <input type="password" name="password_confirmation" id="pw_confirm" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="avatar">{{ trans('user.avatar') }}</label>
                                <input type="file" class="form-control-file" id="avatar">
                            </div>

                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-plus"></i>{{ trans('user.create') }}
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ route('manage_users') }}" class="btn btn-danger">
                                        <i class="fa fa-mail-reply"></i> {{ trans('user.cancel') }}
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
