@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="jumbotron">
<h2>Ring me</h2>
{{ trans("welcome.intro") }}
<div class="clearfix">&nbsp;</div>
  <ul>
   <li>{{trans('welcome.feature1')}}</li>
   <li>{{trans('welcome.feature2')}}</li>
  </ul>

</div>
  
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
<form class="form-inline">
  <div class="form-group">
<div class="radio">
  <label>
    <input type="radio" name="department[]" id="all" value="all" checked> All</label>
</div>
  </div>
&nbsp;
 <div class="form-group">
  <div class="radio">
  <label>
    <input type="radio" name="department[]" id="administration" value="administration"> Administration</label>
   </div>
  </div>
&nbsp;

  <div class="form-group">
   <div class="radio">
   <label>
    <input type="radio" name="department[]" id="technical" value="technical"> Technical</label>
   </div>
  </div>  
 </form>
</div>

  <div class="panel-body">
    <section class="team">
     <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
      <div class="img-box">
       <img src="{{ asset('img/user-icon.png') }}" width="200" height="230">
      </div>
       <h1>Marrie Doi</h1>
       <h2>Technical</h2>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
       <p class="text-center"><button class="btn btn-success" data-toggle="modal" data-target="#myModal">{{ trans('app.available') }}</button></p>
     </div>
    
     <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
      <div class="img-box">
       <img src="{{ asset('img/user-icon.png') }}" width="200" height="230">
              </div>
              <h1>Christopher Di</h1>
              <h2>Technical</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="text-center"><button class="btn btn-success" data-toggle="modal" data-target="#myModal">{{ trans('app.available') }}</button></p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{ asset('img/user-icon.png') }}" width="200" height="230">
              </div>
              <h1>Heather H</h1>
              <h2>Technical</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="text-center"><button class="btn btn-success" data-toggle="modal" data-target="#myModal">{{ trans('app.available') }}</button></p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{ asset('img/user-icon.png') }}" width="200" height="230">
              </div>
              <h1>Heather H</h1>
              <h2>Technical</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="text-center"><button class="btn btn-danger" data-toggle="modal" data-target="#myModal" disabled="">{{ trans('app.unavailable') }}</button></p>
            </div>
        </section>

              </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-toggle="tooltip" data-placement="bottom" title="{{ trans('app.close')}}" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" >&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Callback request</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
           <label for="customerType" class="col-md-3 control-label">Type <strong class="text-danger">*</strong></label>
            <div class="col-md-6">
             <select id='customerType' name="customerType" class="form-control">
                     <option value="" selected></option>
                     <option value="existing">I have a account</option>
                     <option value="new">Register</option>
                    </select>
                 </div>
                </div>

        <div style="display:none;" id="existing">

        <div class="form-group">
         <label for="account_number" class="col-sm-3 control-label">Customer number</label>
          <div class="col-sm-6">
           <input type="text" name="account_number" id="account_number" class="form-control">
          </div>
        </div>

        <div class="form-group">
         <label for="phone" class="col-sm-3 control-label">Phone</label>
          <div class="col-sm-6">
           <input type="text" name="phone" id="phone" class="form-control">
          </div>
        </div>

        <div class="form-group">
         <label for="email" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-6">
           <input type="email" name="email" id="email" class="form-control">
          </div>
        </div>       
       
        </div>

        <div style="display:none;" id="new">

        <div class="form-group">
         <label for="name" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-6">
           <input type="text" name="name" id="name" class="form-control">
          </div>
        </div>

        <div class="form-group">
         <label for="first_name" class="col-sm-3 control-label">First name</label>
          <div class="col-sm-6">
           <input type="text" name="first_name" id="first_name" class="form-control">
          </div>
        </div>

        <div class="form-group">
         <label for="email" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-6">
           <input type="email" name="email" id="email" class="form-control">
          </div>
        </div>

        <div class="form-group">
         <label for="phone" class="col-sm-3 control-label">Phone</label>
          <div class="col-sm-6">
           <input type="text" name="phone" id="phone" class="form-control">
          </div>
        </div>

        <div class="form-group">
         <label for="account_number" class="col-sm-3 control-label">Customer number</label>
          <div class="col-sm-6">
           <input type="text" name="account_number" id="account_number" class="form-control">
          </div>
        </div>

      </div>

        <div class="form-group">
         <label for="email" class="col-sm-3 control-label">Product</label>
          <div class="col-sm-6">
           <input type="email" name="email" id="email" class="form-control">
          </div>
        </div>

        <div class="form-group">
         <label for="description" class="col-sm-3 control-label">Question</label>
          <div class="col-sm-6">
           <textarea name="description" id="description" class="form-control"></textarea>
          </div>
        </div>        
     </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>

    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('#customerType').on('change', function() {
      if ( this.value == 'existing')
      {
        $("#new").hide();
        $("#existing").show();
      }
      else  if ( this.value == 'new')
      {
          $("#existing").hide();
        $("#new").show();
      } 
       else  
      {
        $("#existing").hide();
        $("#new").hide();
      }
    });
});
</script>
@endsection
