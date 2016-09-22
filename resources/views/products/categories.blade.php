@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{-- Pagination --}}
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{!!url('/')!!}">{{ Lang::get('app.home') }}</a></li>
                    <li><a href="{!!url('/products')!!}">{{ Lang::get('app.products') }}</a></li>
                    <li class="active">{{ Lang::get('products.categories') }}</li>
                </ul>
            </div>
        </div>
        {{-- END pagination --}}

        @if(session('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          {{session('message')}}
        </div>
        @endif

        @if (count($errors) > 0)
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-md-12">
       <button data-toggle="modal" data-target="#newCategory" class="btn btn-primary">{{ trans('products.new_category') }}</button>
       <div class="clearfix">&nbsp;</div>

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('products.groups') }}</div>
            <div class="panel-body">
              <table class="table table-striped">
                <thead>
                  <th class="col-md-9">{{ trans('products.category') }}</th>
                  <th></th>
                </thead>
                <tbody>
                  @foreach($category as $item)
                  <tr>
                    <td>{{ $item["name"] }}</td>
                    <td class="text-right">
                      <a href="{{route('products.editCat', $item['id'])}}" class="btn btn-sm btn-default"><i class="fa fa-pencil"></i> {{trans('app.edit')}}</a>
                      <a href="{{route('products.removeCat', $item['id'])}}" class="btn btn-sm btn-default"><i class="fa fa-times"></i> {{trans('app.delete')}}</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>

<!-- New Category -->
<div class="modal fade" id="newCategory" tabindex="-1" role="dialog" aria-labelledby="newCategoryLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="newCategoryLabel">{{ trans('products.new_category') }}</h4>
      </div>
      <form action="{{url('/products/categories/save')}}" method="post" class="form-horizontal">
        {{ csrf_field() }}

      <div class="modal-body">

        <div class="form-group">
          <label for="name" class="control-label col-md-3">{{ trans('products.category') }} <span class="text-danger">*</span></label>
          <div class="col-md-9">
            <input type="text" name="name" id="name" class="form-control">
          </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">{{ trans('app.close') }}</button>
        <button type="submit" class="btn btn-primary">{{ trans('app.save') }}</button>
      </div>
    </form>
    </div>
  </div>
</div>

@endsection
