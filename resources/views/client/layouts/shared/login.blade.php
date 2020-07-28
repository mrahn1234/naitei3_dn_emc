<!-- log in -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">{{ trans('login.login') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{route('login')}}" method="post">
                @csrf
                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <span>{{ $error }}</>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label class="col-form-label">{{ trans('login.username') }}</label>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">{{ trans('login.pw') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Log in">
                    </div>
                    <div class="sub-w3l">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                            <label class="custom-control-label" for="customControlAutosizing">{{ trans('login.remember') }}</label>
                        </div>
                    </div>
                    <p class="text-center dont-do mt-3">{{ trans('login.noAccount') }}
                        <a href="#" data-toggle="modal" data-target="#exampleModal2">
                            {{ trans('login.register') }}</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
