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
                          <tr>
                            <td>Fibernet XL</td>
                            <td>Internet Connection</td>
                            <td>19-09-2016 3:40</td>
                            <td>19-09-2016 3:40</td>
                          </tr>

                          <tr>
                            <td>iFiber</td>
                            <td>Internet Connection</td>
                            <td>19-09-2016 3:40</td>
                            <td>19-09-2016 3:40</td>
                          </tr>

                          <tr>
                            <td>Small</td>
                            <td>Webhosting</td>
                            <td>19-09-2016 3:40</td>
                            <td>19-09-2016 3:40</td>
                          </tr>

                          <tr>
                            <td>Medium</td>
                            <td>Webhosting</td>
                            <td>19-09-2016 3:40</td>
                            <td>19-09-2016 3:40</td>
                          </tr>

                          <tr>
                            <td>Large</td>
                            <td>Webhosting</td>
                            <td>19-09-2016 3:40</td>
                            <td>19-09-2016 3:40</td>
                          </tr>

                          <tr>
                            <td>Small Cloud</td>
                            <td>Pay-as-you-go</td>
                            <td>19-09-2016 3:40</td>
                            <td>19-09-2016 3:40</td>
                          </tr>

                          <tr>
                            <td>Medium Cloud</td>
                            <td>Pay-as-you-go</td>
                            <td>19-09-2016 3:40</td>
                            <td>19-09-2016 3:40</td>
                          </tr>

                          <tr>
                            <td>Large Cloud</td>
                            <td>Pay-as-you-go</td>
                            <td>19-09-2016 3:40</td>
                            <td>19-09-2016 3:40</td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="pull-right">
                        <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
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
      <form action="" method="post" class="form-horizontal">
      <div class="modal-body">

        <div class="form-group">
          <label for="category" class="control-label col-md-3">{{ trans('products.category') }} <span class="text-danger">*</span></label>
          <div class="col-md-9">
            <select name="category" id="category" class="form-control">
              <option selected="">{{ trans('app.select') }}</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="control-label col-md-3">{{ trans('products.name') }} <span class="text-danger">*</span></label>
          <div class="col-md-9">
            <input type="text" name="product" id="name" class="form-control">
          </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">{{ trans('app.close') }}</button>
        <button type="button" class="btn btn-primary">{{ trans('app.save') }}</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection
