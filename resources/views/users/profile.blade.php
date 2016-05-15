@extends('layouts.app')
@section('content')
<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">Profile</li>
    </ul>
			<form class="form-horizontal">
				<fieldset>
					<div class="form-group formSep">
						<label for="fileinput" class="control-label col-sm-2">User avatar</label>
						<div class="col-sm-8">
								<div class="thumbnail" style="width: 80px; height: 80px;">
								  <img src="{{asset('img/user-icon.png')}}" /></div>
								  <span class="btn btn-default btn-file">
								   <input type="file" />
								  </span>
							</div>
						</div>

					<div class="form-group formSep">
						<label for="fname" class="control-label col-sm-2">{{trans('staff.fname')}}</label>
						<div class="col-sm-8">
							<input id="fname" class="form-control" value="John" type="text">
						</div>
					</div>

					<div class="form-group formSep">
						<label for="name" class="control-label col-sm-2">{{trans('staff.name')}}</label>
						<div class="col-sm-8">
							<input type="text" id="name" name="name"  value="Smith" class="form-control">
						</div>
					</div>

					<div class="form-group formSep">
						<label for="email" class="control-label col-sm-2">{{trans('staff.email')}}</label>
						<div class="col-sm-8">
							<input type="text" id="email"  name="email" value="john.Smith@ringme.eu" class="form-control">
						</div>
					</div>
					<div class="form-group formSep">
						<label for="password" class="control-label col-sm-2">{{trans('staff.password')}}</label>
						<div class="col-sm-8">
								<input type="password" id="password" class="form-control" value="password">
								<span class="help-block">Enter your password</span>
							<input type="password" id="verify_password" name="verify_password" class="form-control">
							<span class="help-block">Repeat password</span>
						</div>
					</div>
					<div class="form-group formSep">
						<label for="bio" class="control-label col-sm-2">{{trans('staff.bio')}}:</label>
						<div class="col-sm-8">
							<textarea name="bio" id="bio" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<button class="btn btn-primary" type="submit">Save changes</button>
						<button type="reset" class="btn btn-default">Cancel</button>
						</div>
					</div>
				 </fieldset>					
			   </form>
			</div>
			@endsection