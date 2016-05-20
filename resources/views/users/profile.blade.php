@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Profile</li>
        </ul>

        <div class="row">
            <div class="col-md-12">
             <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">General</a></li>
              <li role="presentation"><a href="#tokens" aria-controls="tokens" role="tab" data-toggle="tab">API tokens</a></li>
             </ul>

             <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
                              <form class="form-horizontal">
                    <fieldset>
                        <div class="form-group formSep">
                            <label for="avatar" class="control-label col-sm-2">User avatar</label>
                            <div class="col-sm-8">
                                <div class="thumbnail" style="width: 80px; height: 80px;">
                                    <img src="{{asset('img/user-icon.png')}}"/></div>
                                  <span class="btn btn-default btn-file">
                                   <input type="file" name="avatar" id="avatar"/>
                                  </span>
                            </div>
                        </div>

                        <div class="form-group formSep">
                            <label for="fname" class="control-label col-sm-2">{{trans('staff.fname')}} <span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input id="fname" class="form-control" value="{{ Auth::user()->fname }}" type="text">
                            </div>
                        </div>

                        <div class="form-group formSep">
                            <label for="name" class="control-label col-sm-2">{{trans('staff.name')}} <span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group formSep">
                            <label for="email" class="control-label col-sm-2">{{trans('staff.email')}} <span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" id="email" name="email" value="{{ Auth::user()->email }}"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group formSep">
                            <label for="password" class="control-label col-sm-2">{{trans('staff.password')}}</label>
                            <div class="col-sm-8">
                                <input type="password" id="password" class="form-control" value="password">
                                <span class="help-block">{{ trans('staff.passwordHelper') }}</span>
                                <input type="password" id="verify_password" name="verify_password" class="form-control">
                                <span class="help-block">{{ trans('staff.passwordConfirm') }}</span>
                            </div>
                        </div>

                        <div class="form-group formSep">
                            <label for="bio" class="control-label col-sm-2">{{trans('staff.bio')}}</label>
                            <div class="col-sm-8">
                                <textarea name="bio" id="bio"
                                          class="form-control">{{ Auth::user()->bio  }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">{{ trans('app.update') }}</button>
                                <button type="reset" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </fieldset>
                </form>                  
              </div>
              <div role="tabpanel" class="tab-pane" id="tokens">...</div>
            </div>


            </div>
        </div>
    </div>
@endsection