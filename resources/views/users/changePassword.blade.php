<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="{{asset('client/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!-- Bootstrap css -->
        <link href="{{asset('client/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!-- Main css -->
        <link rel="stylesheet" href="{{asset('client/css/fontawesome-all.css')}}">
        <!-- Font-Awesome-Icons-CSS -->
        <link href="{{asset('client/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!-- pop-up-box -->
        <link href="{{asset('client/css/menu.css')}}" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>
        <div class="form-group">
            @include('client.layouts.shared.topbar')
            @include('client.layouts.shared.control')
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>{{ trans('auth.Change Password') }}</h3>
                        </div>

                        <div class="panel-body">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            <form class="form-group" method="POST" action="{{ route('changePassword') }}">
                                @csrf
                                <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                    <label for="new-password" class="col-md-4 control-label">{{ trans('auth.current') }}</label>
                                    <input id="current-password" type="password" class="form-control" name="current-password" required>
                                        @if ($errors->has('current-password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('current-password') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                    <label for="new-password" class="col-md-4 control-label">{{ trans('auth.new_pw') }}</label>
                                    <input id="new-password" type="password" class="form-control" name="new-password" required>
                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('new-password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="new-password-confirm" class="col-md-4 control-label">{{ trans('auth.confirm_pass') }}</label>
                                    <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning">{{ trans('auth.Change Password') }}</button>
                                    <button type="reset" class="btn btn-primary">{{ trans('auth.reset') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

