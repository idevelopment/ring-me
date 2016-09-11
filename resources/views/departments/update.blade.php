@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{-- Pagination --}}
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('departments')}}">Departments</a></li>
                    <li class="active">Edit</li>
                </ul>
            </div>
        </div>
        {{-- END pagination --}}
      </div>

      <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <div class="panel panel-default">
                      <div class="panel-heading">Department Settings</div>
                      <div class="list-group">
                          <a class="list-group-item" href="#general" aria-controls="home" role="tab" data-toggle="tab">
                              <span class="fa fa-info-circle"></span> General
                          </a>
                          <a class="list-group-item" href="#employees" aria-controls="home" role="tab" data-toggle="tab">
                              <span class="fa fa-user"></span> Employees
                          </a>
                      </div>
                  </div>

                  <div class="panel panel-default">
                      <div class="list-group">
                          <a href="" class="list-group-item">
                              <span class="fa fa-trash"></span> Remove department
                          </a>
                      </div>
                  </div>
              </div>

               <div class="col-md-9">
                 <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" style="padding: 0" id="general">
                   <div class="panel panel-default">
                    <div class="panel-heading">General</div>
                    <div class="panel-body">

                    <form action="" method="post" class="form-horizontal" role="form">
                     <div class="form-group">
                       <label for="name" class="control-label col-md-3">Name <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                         <input type="text" name="name" id="name" value="{!! $query["name"] !!}" class="form-control">
                       </div>
                     </div>

                     <div class="form-group">
                       <label for="manager" class="control-label col-md-3">Manager <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                         <select name="manager" id="manager" class="form-control">
                           <option value="">-- Please select --</option>
                         </select>
                       </div>
                     </div>

                     <div class="clearfix">&nbsp;</div>
                     <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-8">
                          <button type="submit" name="save" class="btn btn-primary">Save settings</button>
                          <button type="reset" name="save" class="btn btn-danger">Cancel</button>
                        </div>
                     </div>
                    </form>
                  </div>
                </div>
                </div>

                <div role="tabpanel" class="tab-pane" style="padding: 0" id="employees">
                 <div class="panel panel-default">
                  <div class="panel-heading">Employees</div>
                  <div class="panel-body">
                   <p>
                    Glenn Hermans <span class="pull-right"><a href="#" class="btn btn-sm btn-default"><i class="fa fa-times text-danger"></i> Remove</a></span>
                   </p>
                    <div class="clearfix">&nbsp;</div>
                   <p>
                    Glenn Hermans <span class="pull-right"><a href="#" class="btn btn-sm btn-default"><i class="fa fa-times text-danger"></i> Remove</a></span>
                   </p>
                   <div class="clearfix">&nbsp;</div>
                   <p>
                    Glenn Hermans <span class="pull-right"><a href="#" class="btn btn-sm btn-default"><i class="fa fa-times text-danger"></i> Remove</a></span>
                   </p>
                   <div class="clearfix">&nbsp;</div>

                  </div>
                </div>
              </div>

              </div>
            </div>
          </div>
        </div>

@endsection
