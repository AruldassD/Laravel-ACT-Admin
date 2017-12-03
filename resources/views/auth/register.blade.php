@include('includes.header')
@include('includes.sidebar')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Add User</h1>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @if (session('user'))
                        <div class="alert alert-success">
                        <button type="button" class="close pull-right" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ session('user') }}
                        </div>
                    @endif
                    <div class="panel panel-default">
                        <div class="panel-heading">Register</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Employee Name">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

					            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label for="phone" class="col-md-4 control-label">Phone</label>
                                    <div class="col-md-6">
                                        <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone Number">
                                         @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

				                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
						
					            <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                    <label for="role" class="col-md-4 control-label">Role</label>
                                    <div class="col-md-6">
                                        <select name="role" class="form-control">
								           <option value="">Select Role</option>
								           <option value="EMP">Employee</option>
								           <option value="ADM">Admin</option>
								        </select>
                                        @if ($errors->has('role'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('role') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
						
					            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                    <label for="location" class="col-md-4 control-label">Location</label>
                                    <div class="col-md-6">
                                        <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" placeholder="Location">
                                        @if ($errors->has('location'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('location') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
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
<!-- /.content-wrapper -->
@include('includes.footer')