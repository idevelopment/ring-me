@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{-- Pagination --}}
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{!!url('/')!!}">{{ Lang::get('app.home') }}</a></li>
                    <li><a href="{!!url('/products')!!}">{{ Lang::get('app.products') }}</a></li>
                    <li><a href="{!!url('/products/categories')!!}">{{ Lang::get('products.categories') }}</a></li>
                    <li class="active">{{ Lang::get('products.edit_category') }}</li>
                </ul>
            </div>
        </div>
        {{-- END pagination --}}

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('products.edit_category') }}</div>
                    <div class="panel-body">
                      <form action="{{ route('products.save') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="name" class="control-label col-md-3">{{ trans('products.category') }} <span class="text-danger">*</span></label>
                          <div class="col-md-9">
                            <input type="text" name="name" id="name" value="{!! $category->name !!}" class="form-control">
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
          </div>

@endsection
