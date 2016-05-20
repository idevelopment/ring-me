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
            </div>

             <div class="col-md-9">
                 <div class="tab-content">
                     <div role="tabpanel" class="tab-pane active" style="padding: 0" id="profile">
                         <div class="panel panel-default">
                             <div class="panel-heading">Profile Settings</div>
                             <div class="panel-body">
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
                         </div>
                     </div>

                     {{-- API tokens --}}
                     <div role="tabpanel" class="tab-pane" style="padding: 0" id="tokens">

                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 New API token.
                             </div>
                             <div class="panel-body">
                                 <form action="" method="POST" class="form-horizontal">
                                     <div class="form-group">
                                         <label for="email" class="control-label col-sm-2">
                                             Service
                                             <span class="text-danger">*</span>
                                         </label>
                                         <div class="col-sm-3">
                                             <input type="text" id="email" name="email" class="form-control">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <div class="col-sm-3 col-sm-offset-2">
                                             <button class="btn btn-primary" type="submit">Add token</button>
                                             <button type="reset" class="btn btn-default">Cancel</button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>

                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 API tokens.
                             </div>
                             <div class="list-group">
                                 <div class="list-group-item">
                                     Service <br/>
                                     <span class="text-muted"><small>Created at: 10/02/2016</small></span>

                                     <div class="pull-right">
                                         <a href="" class="btn btn-xs btn-danger">Revoke</a>
                                         <a href="" class="btn btn-xs btn-danger">Delete</a>
                                         <a href="" class="btn btn-xs btn-success">Get token</a>
                                     </div>
                                 </div>
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
                                 <form action="" method="POST" class="form-horizontal">
                                     <div class="form-group form-sep">
                                         <label for="password" class="control-label col-sm-3">
                                             {{trans('staff.password')}}
                                             <span class="text-danger">*</span>
                                         </label>
                                         <div class="col-sm-8">
                                             <input type="password" placeholder="New password" name="password" id="password" class="form-control">
                                         </div>
                                     </div>

                                     <div class="form-group form-sep">
                                         <label for="confirm" class="control-label col-sm-3">
                                             Confirm password
                                             <span class="text-danger">*</span>
                                         </label>
                                         <div class="col-sm-8">
                                             <input type="password" placeholder="Password confirmation" name="password" id="confirm" class="form-control">
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
@endsection