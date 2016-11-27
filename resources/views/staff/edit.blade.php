@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{!!url('/')!!}">{{ Lang::get('app.home') }}</a></li>
            <li><a href="{!!url('/staff')!!}">{{ Lang::get('app.staff') }}</a></li>
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
                <form action="{{ route('staff.update', $query->id)}}" enctype="multipart/form-data" method="post" class="form-horizontal">
                  {{ method_field('PUT') }}
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value="{{$query->id}}">
                    <fieldset>
                        <div class="form-group form-sep">
                            <label for="avatar" class="control-label col-sm-2">User avatar</label>
                            <div class="col-sm-8">
                                <div class="thumbnail" style="width: 80px; height: 80px;">
                                  @if(empty($query->avatar))
                                      <img src="{{asset('img/user-icon.png')}}">
                                     @else
                                  <img src="{{ asset('avatars/' . $query->avatar) }}">
                              @endif
                            </div>
                                  <span class="btn btn-default btn-file">
                                   <input type="file" name="avatar" id="avatar"/>
                                  </span>
                            </div>
                        </div>

                        <div class="form-group form-sep">
                            <label for="fname" class="control-label col-sm-2">{{trans('staff.fname')}} <span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input id="fname" class="form-control" value="{{ $query->fname }}" type="text">
                            </div>
                        </div>

                        <div class="form-group form-sep">
                            <label for="name" class="control-label col-sm-2">{{trans('staff.name')}} <span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" id="name" name="name" value="{{ $query->name }}"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group form-sep">
                            <label for="email" class="control-label col-sm-2">{{trans('staff.email')}} <span
                                        class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" id="email" name="email" value="{{ $query->email }}"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group form-sep">
                            <label for="password" class="control-label col-sm-2">{{trans('staff.password')}}</label>
                            <div class="col-sm-8">
                                <input type="password" id="password" class="form-control" value="">
                                <span class="help-block">{{ trans('staff.passwordHelper') }}</span>
                                <input type="password" id="verify_password" name="verify_password" class="form-control">
                                <span class="help-block">{{ trans('staff.passwordConfirm') }}</span>
                            </div>
                        </div>

                        <div class="form-group form-sep">
                            <label for="biography" class="control-label col-sm-2">{{trans('staff.bio')}}</label>
                            <div class="col-sm-8">
                                <textarea name="biography" id="biography" class="form-control">{{ $query->biography  }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">{{ trans('app.update') }}</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
              </div>
              <div role="tabpanel" class="tab-pane" id="access">
               <form class="form-horizontal">
                <fieldset>
                 <div class="form-group form-sep">
                  <label for="department" class="col-md-3 control-label">{{ trans('staff.department') }}</label>
                  <div class="col-md-8">
                  <p class="form-control-static"><a href="#" id="department">Administration</a> </p>
                  </div>
                </div>

                 <div class="form-group form-sep">
                  <label for="role" class="col-md-3 control-label">{{ trans('staff.role') }}</label>
                  <div class="col-md-8">
                   <p class="form-control-static">
                    <a href="#" id="role"></a>
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
@endsection
