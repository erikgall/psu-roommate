@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">

					{!! Form::open(['url' => 'register', 'class' => 'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('school_id') ? ' has-error' : '' }}">

					    {!! Form::label('school_id', 'University', ['class' => 'control-label col-sm-4']) !!}

                        <div class="col-sm-6">

							{!! Form::select('school_id', $schools, old('school'), ['class' => 'form-control']) !!}

                            @if ($errors->has('school_id'))
                                <span class="help-block">
					                <strong>{{ $errors->first('school_id') }}</strong>
					            </span>
                            @endif

					    </div>

					</div>
	
					<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

					    {!! Form::label('first_name', 'First Name', ['class' => 'control-label col-sm-4']) !!}

                        <div class="col-sm-6">

					        {!! Form::text('first_name', old('first_name'), ['class' => 'form-control']) !!}

                            @if ($errors->has('first_name'))
                                <span class="help-block">
					                <strong>{{ $errors->first('first_name') }}</strong>
					            </span>
                            @endif

					    </div>

					</div>

					<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

					    {!! Form::label('last_name', 'Last Name', ['class' => 'control-label col-sm-4']) !!}

                        <div class="col-sm-6">

					        {!! Form::text('last_name', old('last_name'), ['class' => 'form-control']) !!}

                            @if ($errors->has('last_name'))
                                <span class="help-block">
					                <strong>{{ $errors->first('last_name') }}</strong>
					            </span>
                            @endif

					    </div>

					</div>

                    <div class="form-group{{ $errors->has('academic_status_id') ? ' has-error' : '' }}">

                        {!! Form::label('academic_status_id', 'Academic Year', ['class' => 'control-label col-sm-4']) !!}

                        <div class="col-sm-6">

                            {!! Form::select('academic_status_id', $statuses, old('academic_status_id'), ['class' => 'form-control']) !!}


                            @if ($errors->has('academic_status_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('academic_status_id') }}</strong>
                                </span>
                            @endif

                        </div>

                    </div>

                    <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">

                        {!! Form::label('dob', 'Date of Birth', ['class' => 'control-label col-sm-4']) !!}

                        <div class="col-sm-2">

                            {!! Form::selectMonth('month', old('month'), ['class' => 'form-control']) !!}

                        </div>

                        <div class="col-sm-2">

                            {!! Form::selectRange('day', '1', '31', old('day'), ['class' => 'form-control']) !!}

                        </div>

                        <div class="col-sm-2">

                            {!! Form::selectYear('year', '1985', '2016', old('year'), ['class' => 'form-control']) !!}
                        </div>

                    </div>

					<div class="form-group{{ $errors->has('gender_id') ? ' has-error' : '' }}">

					    {!! Form::label('gender_id', 'Gender', ['class' => 'control-label col-sm-4']) !!}

                        <div class="col-sm-6">

							{!! Form::select('gender_id', $genders, old('gender_id'), ['class' => 'form-control']) !!}

                            @if ($errors->has('gender_id'))
                                <span class="help-block">
					                <strong>{{ $errors->first('gender_id') }}</strong>
					            </span>
                            @endif

					    </div>

					</div>

					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

					    {!! Form::label('email', 'Email', ['class' => 'control-label col-sm-4']) !!}

                        <div class="col-sm-6">

					        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}

                            @if ($errors->has('email'))
                                <span class="help-block">
					                <strong>{{ $errors->first('email') }}</strong>
					            </span>
                            @endif

					    </div>

					</div>

					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                        
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))

                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>

                                @endif
								
                            </div>
						
                        </div>

					<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
					
					    {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'control-label col-sm-4']) !!}

                        <div class="col-sm-6">
					
					        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
					                <strong>{{ $errors->first('password_confirmation') }}</strong>
					            </span>
                            @endif
					
					    </div>
					
					</div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
