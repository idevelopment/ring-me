@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{-- Pagination --}}
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{!!url('/')!!}">{{ Lang::get('app.home') }}</a></li>
                    <li class="active">{{ Lang::get('app.products') }}</li>
                </ul>
            </div>
        </div>
        {{-- END pagination --}}

        @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-md-12">
       <button data-toggle="modal" data-target="#newProduct" class="btn btn-sm btn-primary">{{ trans('products.new') }}</button>
       <div class="clearfix">&nbsp;</div>

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('products.index') }}</div>
            <div class="panel-body">
              <table class="table table-striped">
                <thead>
                  <th class="col-md-10">{{ trans('products.category') }}</th>
                  <th></th>
                </thead>
                <tbody>
                  @foreach($category as $item)
                  <tr>
                    <td>{{ $item["name"] }}</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                      <a href="#" class="btn btn-sm btn-default"><i class="fa fa-times"></i> Remove</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>

@endsection
