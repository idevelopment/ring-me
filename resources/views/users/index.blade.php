@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{-- Pagination --}}
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{!!url('/')!!}">Home</a></li>
                    <li class="active">Staff</li>
                </ul>
            </div>
        </div>
        {{-- END pagination --}}


{{-- Search panel --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Search employee</div>
                    <div class="panel-body">
                        <form action="" method="get" class="form-horizontal">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="col-md-3 control-label">Name</label>
                                        <div class="col-md-8">
                                            <input type="text" id="name" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fname" class="col-md-3 control-label">Firstname</label>
                                        <div class="col-md-8">
                                            <input type="text" id="fname" name="fname" class="form-control">
                                        </div>
                                    </div> 
                                </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="department" class="col-md-3 control-label">Department</label>
                                        <div class="col-md-8">
                                            <select id="department" name="department" class="form-control"></select>
                                        </div>
                                    </div> 

                                      <div class="form-group">
                                        <label for="department" class="col-md-3 control-label">Email</label>
                                        <div class="col-md-8">
                                         <input type="email" id="email" name="email" class="form-control">
                                        </div>
                                    </div>  
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">&nbsp;</label>
                                        <div class="col-md-8">
                                            <button type="submit" name="search" id="search" class="btn btn-sm btn-primary">Search</button>
                                            <button type="button" onclick="location.href='{!! route('staff.create') !!}';" class="btn btn-sm btn-default">New employee</button>
                                        </div>
                                    </div>
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
                    <div class="panel-heading">Employees</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created:</th>
                                        <th>Last updated:</th>
                                        <th></th> {{-- Reserved for functions --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $data)
                                        <tr>
                                            <td><code>#U{!! $data->id !!}</code></td>
                                            <td>{!! $data->fname !!} {!! $data->name !!}</td>
                                            <td><a href="mailto:{!! $data->email !!}">{!! $data->email !!}</a></td>
                                            <td>{!! $data->created_at !!}</td>
                                            <td>{!! $data->updated_at !!}</td>

                                            <td>
                                                <div class="btn-group btn-group-xs">
                                                    <a href="{{url('staff/edit')}}/{!! $data->id !!}" class="btn btn-link">
                                                        <span class="fa fa-info-circle fa-lg"></span>
                                                    </a>
                                                    <a href="{{url('staff/destroy')}}/{!! $data->id !!}" class="btn btn-link">
                                                        <span class="fa fa-times fa-lg"></span>
                                                    </a>
                                                </div>
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
        {{-- End employees panel --}}
    </div>
@endsection