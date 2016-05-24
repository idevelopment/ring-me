@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{-- Pagination --}}
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{!!url('/')!!}">{{ Lang::get('app.home') }}</a></li>
                    <li class="active">{{ Lang::get('app.roles') }}</li>
                </ul>
            </div>
        </div>
        {{-- END pagination --}}


{{-- Search panel --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Lang::get('roles.search') }}</div>
                    <div class="panel-body">
                        <form action="" method="get" class="form-horizontal">
                           <div class="form-group">
                            <label for="name" class="col-md-3 control-label">{{ Lang::get('roles.name') }}</label>
                             <div class="col-md-4">
                              <input type="text" id="name" name="name" class="form-control">
                            </div>
                           </div>
                           

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">&nbsp;</label>
                                        <div class="col-md-6">
                                            <button type="submit" name="search" id="search" class="btn btn-sm btn-primary">{{ Lang::get('app.search') }}</button>
                                            <button type="button" onclick="location.href='';" class="btn btn-sm btn-default">{{ Lang::get('roles.new') }}</button>
                                        </div>
                                    </div>
                         </form>
                        </div>
                       </div>
                    </div>
                </div>
 
        {{-- END search panel --}}
        {{-- Employees panel --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Lang::get('roles.name') }}</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ Lang::get('roles.name') }}</th>
                                        <th>{{ Lang::get('roles.created') }}</th>
                                        <th>{{ Lang::get('roles.updated') }}</th>
                                        <th></th> {{-- Reserved for functions --}}
                                    </tr>
                                </thead>
                                <tbody>
@foreach($roles as $role_item)
  <tr>
    <td>RL{{ $role_item->id }}</td>
    <td>{{ $role_item->name }}</td>
    <td>{{ $role_item->created_at }}</td>   
    <td>{{ $role_item->updated_at }}</td>
    <td>
       <a href="{{ url('roles/edit', $role_item->id)}}"><i class="fa fa-search"></i></a>
       <a href="{{ url('roles/remove', $role_item->id)}}"><i class="fa fa-times"></i></a>
    </td>
   </tr>
   @endforeach
                                </tbody>
                            </table>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection