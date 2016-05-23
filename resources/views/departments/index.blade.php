@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{-- Pagination --}}
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Departments</li>
                </ul>
            </div>
        </div>
        {{-- END pagination --}}

        {{-- Search panel --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Search department</div>
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
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">&nbsp;</label>
                                        <div class="col-md-8">
                                            <button type="submit" name="search" id="search" class="btn btn-sm btn-primary">Search</button>
                                            <button type="button" onclick="location.href='';" class="btn btn-sm btn-default">New department</button>
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

        {{-- Departments panel --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Departments</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Manager</th>
                                        <th>Created:</th>
                                        <th>Last updated:</th>
                                        <th></th> {{-- Reserved for functions --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($query as $data)
                                        <tr>
                                            <td><code>#D{!! $data->id !!}</code></td>
                                            <td>{!! $data->name !!}</td>
                                            <td>
                                                @foreach($data->managers as $manager)
                                                    {!! $manager->fname !!} {!! $manager->name !!}
                                                @endforeach
                                            </td>
                                            <td>{!! $data->created_at !!}</td>
                                            <td>{!! $data->updated_at !!}</td>

                                            <td>
                                                <div class="btn-group btn-group-xs">
                                                    <a class="btn btn-link">
                                                        <span class="fa fa-info-circle"></span>
                                                    </a>
                                                    <a href="" class="btn btn-link">
                                                        <span class="fa fa-pencil"></span>
                                                    </a>
                                                    <a href="" class="btn btn-link">
                                                        <span class="fa fa-times"></span>
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
        {{-- End department panel --}}
    </div>
@endsection
