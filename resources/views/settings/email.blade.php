@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{-- Pagination --}}
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{!!url('/')!!}">{{ Lang::get('app.home') }}</a></li>
                    <li><a href="{!!url('/settings')!!}">{{ Lang::get('app.settings') }}</a></li>
                    <li class="active">{{ Lang::get('app.email') }}</li>
                </ul>
            </div>
        </div>
        {{-- END pagination --}}


{{-- general settings panel --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Lang::get('app.general') }}</div>
                    <div class="panel-body">
                     <form action="" method="post" class="form-horizontal">
                     {!! csrf_field() !!}
                      <div class="form-group form-sep">
                       <label for="host" class="col-md-3 control-label">Outgoing mail server <span class="text-danger">*</span></label>
                       <div class="col-md-2">
                         <select class="form-control">
                           <option value="smtp" selected="">SMTP</option>
                           <option value="sendmail">Sendmail</option>
                         </select>
                       </div>
                        <div class="col-md-4">
                         <input type="text" id="host" name="host" value="{!! config('mail.host') !!}" class="form-control">
                        </div>
                      </div>

                      <div class="form-group form-sep">
                       <label for="from" class="col-md-3 control-label">Email adres <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                         <input type="text" id="from" name="from" value="{!! config('mail.from.address') !!}" class="form-control">
                        </div>
                      </div>

                      <div class="form-group form-sep">
                       <label for="username" class="col-md-3 control-label">Username <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                         <input type="text" id="username" name="username" value="{!! config('mail.username') !!}" class="form-control">
                        </div>
                      </div>

                      <div class="form-group form-sep">
                       <label for="password" class="col-md-3 control-label">Password <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                         <input type="password" id="password" name="password" value="" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-3">
                              <button type="submit" class="btn btn-sm btn-primary">
                                  {{ trans('app.save') }}
                              </button>
                          </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endsection
