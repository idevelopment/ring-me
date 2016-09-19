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
                          <th>{{ trans('products.name') }}</th>
                          <th>{{ trans('products.category') }}</th>
                          <th>{{ trans('products.created') }}</th>
                          <th>{{ trans('products.updated') }}</th>
                        </thead>
                        <tbody>
                          @foreach($products as $item)
                          <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="pull-right">
                        {{ $products->links() }}
                      </div>
                    </div>
                </div>
            </div>
       </div>


       <!-- New product -->
<div class="modal fade" id="newProduct" tabindex="-1" role="dialog" aria-labelledby="newProductLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="newProductLabel">{{ trans('products.new') }}</h4>
      </div>
      <form action="{{ route('products.save') }}" method="post" class="form-horizontal">
        {{ csrf_field() }}

      <div class="modal-body">

        <div class="form-group">
          <label for="category" class="control-label col-md-3">{{ trans('products.category') }} <span class="text-danger">*</span></label>
          <div class="col-md-9">
            <select name="category" id="category" class="form-control">
              <option value="" selected="">{{ trans('app.select') }}</option>

                @foreach($category as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
                @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="control-label col-md-3">{{ trans('products.name') }} <span class="text-danger">*</span></label>
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
