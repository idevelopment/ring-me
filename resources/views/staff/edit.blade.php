@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{!!url('/')!!}">{{ Lang::get('app.home') }}</a></li>
            <li><a href="{!!url('/roles')!!}">{{ Lang::get('app.roles') }}</a></li>
            <li class="active">Edit</li>
        </ul>

        <div class="row">
         <div class="col-md-12">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">General</a></li>
              <li role="presentation"><a href="#access" aria-controls="access" role="tab" data-toggle="tab">Access</a></li>           
          </ul>

             <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
                <form class="form-horizontal">
                    <fieldset>
                        <div class="form-group form-sep">
                            <label for="avatar" class="control-label col-sm-2">User avatar</label>
                            <div class="col-sm-8">
                                <div class="thumbnail" style="width: 80px; height: 80px;">
                                    <img src="{{asset('img/user-icon.png')}}"/></div>
                                  <span class="btn btn-default btn-file">
                                   <input type="file" name="avatar" id="avatar"/>
                                  </span>
                            </div>
                        </div>

                        <div class="form-group form-sep">
                            <label for="fname" class="control-label col-sm-2">{{trans('staff.fname')}} <span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input id="fname" class="form-control" value="{{ Auth::user()->fname }}" type="text">
                            </div>
                        </div>

                        <div class="form-group form-sep">
                            <label for="name" class="control-label col-sm-2">{{trans('staff.name')}} <span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group form-sep">
                            <label for="email" class="control-label col-sm-2">{{trans('staff.email')}} <span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" id="email" name="email" value="{{ Auth::user()->email }}"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group form-sep">
                            <label for="password" class="control-label col-sm-2">{{trans('staff.password')}}</label>
                            <div class="col-sm-8">
                                <input type="password" id="password" class="form-control" value="password">
                                <span class="help-block">{{ trans('staff.passwordHelper') }}</span>
                                <input type="password" id="verify_password" name="verify_password" class="form-control">
                                <span class="help-block">{{ trans('staff.passwordConfirm') }}</span>
                            </div>
                        </div>

                        <div class="form-group form-sep">
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
              <div role="tabpanel" class="tab-pane" id="access">
               <form class="form-horizontal">
                <fieldset>
                 <div class="form-group form-sep">
                  <label for="firstname" class="col-md-3 control-label">{{ trans('staff.department') }}</label>
                  <div class="col-md-8">
                  <p class="form-control-static"><a href="#" id="department" data-type="select" data-pk="1" data-url="/update" data-title="Change type">Administration</a> </p>
                  </div>
                </div>

                 <div class="form-group form-sep">
                  <label for="firstname" class="col-md-3 control-label">{{ trans('staff.role') }}</label>
                  <div class="col-md-8">
                   <p class="form-control-static">
                    <a href="#" id="role" data-type="select" data-pk="1" data-url="{{ url('staff/edit/') }}" data-title="Change role">Administrator</a>
                   </p>
                  </div>
                </div>                
                   </fieldset>
                  </form>
              </div>
            </div>


            </div>
        </div>
    </div>

<script type="text/javascript">

        $(document).ready(function() {
        $.fn.editable.defaults.mode = 'inline';
        $('#department').editable({
        value: 1,
        source: "<?php echo url('staff/getdepartments'); ?>",
        sourceCache: false           
        });

        $('#role').editable({
        value: 1,
        source: "<?php echo url('staff/getroles'); ?>",
        sourceCache: false           
        });        
    });
</script>    
@endsection