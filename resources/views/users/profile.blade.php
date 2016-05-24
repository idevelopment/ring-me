@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Settings</div>
                    <div class="list-group">
                        <a class="list-group-item" href="#profile" aria-controls="home" role="tab" data-toggle="tab">
                            <span class="fa fa-user"></span> Profile
                        </a>
                        <a class="list-group-item" href="#security" aria-controls="home" role="tab" data-toggle="tab">
                            <span class="fa fa-info-circle"></span> Security
                        </a>
                        <a class="list-group-item" href="#tokens" aria-controls="home" role="tab" data-toggle="tab">
                            <span class="fa fa-cog"></span> API
                        </a>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="list-group">
                        <a href="https://ringme.readme.io" target="_blank" class="list-group-item">
                            <span class="fa fa-book"></span> {{ trans('profile.api') }}
                        </a>
                        <a href="" class="list-group-item">
                            <span class="fa fa-bug"></span> {{ trans('profile.bug') }}
                        </a>
                    </div>
                </div>
            </div>

             <div class="col-md-9">
                 <div class="tab-content">
                     <div role="tabpanel" class="tab-pane active" style="padding: 0" id="profile">
                         <div class="panel panel-default">
                             <div class="panel-heading">Profile Settings</div>
                             <div class="panel-body">
                                 <form method="POST" action="{!! route('profile.update.profile') !!}" class="form-horizontal">
                                     {!! csrf_field() !!}
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
                                             <label for="fname" class="control-label col-sm-2">
                                                 {{trans('staff.fname')}}<span class="text-danger">*</span></label>
                                             <div class="col-sm-8">
                                                 <input id="fname" name="fname" class="form-control" value="{{ Auth::user()->fname }}" type="text">
                                             </div>
                                         </div>

                                         <div class="form-group form-sep">
                                             <label for="name" class="control-label col-sm-2">
                                                 {{trans('staff.name')}}<span class="text-danger">*</span>
                                             </label>
                                             <div class="col-sm-8">
                                                 <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="form-control">
                                             </div>
                                         </div>

                                         <div class="form-group form-sep">
                                             <label for="email" class="control-label col-sm-2">{{trans('staff.email')}} <span class="text-danger">*</span></label>
                                             <div class="col-sm-8">
                                                 <input type="text" id="email" name="email" value="{{ Auth::user()->email }}"
                                                        class="form-control">
                                             </div>
                                         </div>

                                         <div class="form-group form-sep">
                                             <label for="bio" class="control-label col-sm-2">{{trans('staff.bio')}}</label>
                                             <div class="col-sm-8">
                                <textarea name="biography" id="bio"
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
                         </div>
                     </div>

                     {{-- API tokens --}}
                     <div role="tabpanel" class="tab-pane" style="padding: 0" id="tokens">

                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 {{trans('profile.newApi')}}
                             </div>
                             <div class="panel-body">
                                 <form action="{{ route('token.create') }}" method="POST" class="form-horizontal">
                                     {!! csrf_field() !!}
                                     <div class="form-group">
                                         <label for="email" class="control-label col-sm-2">
                                             {{trans('profile.service')}}
                                             <span class="text-danger">*</span>
                                         </label>
                                         <div class="col-sm-3">
                                             <input type="text" placeholder="{{trans('profile.serviceName   ')}}" id="email" name="service" class="form-control">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <div class="col-sm-3 col-sm-offset-2">
                                             <button class="btn btn-primary" type="submit">{{trans('profile.addToken')}}</button>
                                             <button type="reset" class="btn btn-default">Cancel</button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>

                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 {{trans('profile.apiTokens')}}
                             </div>
                             <div class="list-group">
                                 @foreach($tokens as $token)
                                     <div class="list-group-item">
                                         {!! $token->service !!}<br/>
                                         <span class="text-muted"><small>Created at: {!! $token->created_at !!}</small></span>

                                         <div class="pull-right">
                                             <button type="button" data-toggle="modal" data-target="#revoke" class="btn btn-xs btn-danger">Revoke</button>
                                             <button type="button" data-toggle="modal" data-target="#delete" class="btn btn-xs btn-danger">Delete</button>
                                             <a href="" class="btn btn-xs btn-success">Get token</a>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div>

                     </div>
                     {{-- END api tokens --}}

                     {{-- Security --}}
                     <div role="tabpanel" class="tab-pane" style="padding: 0" id="security">
                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 Security
                             </div>
                             <div class="panel-body">
                                 <form action="{!! route('profile.update.security') !!}" method="POST" class="form-horizontal">
                                     {!! csrf_field() !!}

                                     <div class="form-group form-sep {{ $errors->has('password') ? ' has-error' : '' }}">
                                         <label for="password" class="control-label col-sm-3">
                                             {{trans('staff.password')}}
                                             <span class="text-danger">*</span>
                                         </label>
                                         <div class="col-sm-8">
                                          <input type="password" placeholder="{{trans('profile.newPass')}}" name="password" id="password" class="form-control">
                                             @if ($errors->has('password'))
                                                 <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="form-group form-sep {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                         <label for="confirm" class="control-label col-sm-3">
                                             Confirm password
                                             <span class="text-danger">*</span>
                                         </label>
                                         <div class="col-sm-8">
                                             <input type="password" placeholder="{{trans('profile.confirmPass')}}" name="password_confirmation" id="confirm" class="form-control">
                                             @if ($errors->has('password'))
                                                 <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <div class="col-sm-8 col-sm-offset-3">
                                             <button class="btn btn-primary" type="submit">{{ trans('app.update') }}</button>
                                             <button type="reset" class="btn btn-default">Cancel</button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                     {{-- End security --}}
                 </div>
             </div>


            </div>
        </div>
    </div>

    {{-- MODALS--}}
    {{-- Revoke modal --}}
    <div class="modal fade" id="revoke" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Revoke token (Service name)</h4>
                </div>
                <div class="modal-body">
                    Are you sure you want to revoke this token? If revoked,
                    API requests that attempt to authenticate using this token will no longer be accepted.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">NO, GO BACK</button>
                    <button type="button" class="btn btn-danger">YES, REVOKE</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End revoke modal --}}

    {{-- Delete modal --}}
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete token (Service name)</h4>
                </div>
                <div class="modal-body">
                    Are you sure you want to deletee this token? If deleted,
                    API requests that attempt to authenticate using this token will no longer be accepted.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">NO, GO BACK</button>
                    <button type="button" class="btn btn-danger">YES, DELETE</button>
                </div>
            </div>
        </div>
    </div>
    {{-- END delete modal --}}
@endsection