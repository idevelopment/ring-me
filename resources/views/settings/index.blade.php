@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{-- Pagination --}}
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{!!url('/')!!}">{{ Lang::get('app.home') }}</a></li>
                    <li class="active">{{ Lang::get('app.settings') }}</li>
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
                       <label for="sitename" class="col-md-3 control-label">Site name <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                         <input type="text" id="sitename" name="sitename" value="{!! config('general.name') !!}" class="form-control">
                        </div>
                      </div>

                      <div class="form-group form-sep">
                       <label for="email" class="col-md-3 control-label">Email from <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                         <input type="text" id="email" name="email" value="{!! config('general.email_from') !!}" class="form-control">
                        </div>
                      </div>

                      <div class="form-group form-sep">
                       <label for="sortEmployees" class="col-md-3 control-label">Sort employees per row</label>
                        <div class="col-md-6">
                         <input type="number" id="sortEmployees" name="sortEmployees" value="{!! config('general.agents_row') !!}" class="form-control">                        </div>
                      </div>

                        <div class="form-group">
                         <label class="col-md-3 control-label">&nbsp;</label>
                          <div class="col-md-7">
                           <button type="submit" name="search" id="search" class="btn btn-sm btn-primary">{{ Lang::get('app.save') }}</button>
                          </div>
                         </div>

                     </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
{{-- End general settings panel --}}
@endsection
