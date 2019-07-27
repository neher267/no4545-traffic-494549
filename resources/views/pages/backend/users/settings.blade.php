@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Settings</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Change Password</div>

                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST" action="{{ route('profile.settings.pass.change') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('c_password') ? ' has-error' : '' }}">
                                            <label for="c_password" class="col-md-4 control-label">Current Password</label>

                                            <div class="col-md-6">
                                                <input id="c_password" type="password" class="form-control" name="c_password" required> @if ($errors->has('c_password'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('c_password') }}</strong>
                                        </span> @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="col-md-4 control-label">Password</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span> @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required> @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span> @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Change Password
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection