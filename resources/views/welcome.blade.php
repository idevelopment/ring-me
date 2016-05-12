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
       <img src="http://placemi.com/200x230" class="img-responsive">
      </div>
       <h1>Marrie Doi</h1>
       <h2>Technical</h2>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
       <p class="text-center"><button class="btn btn-success">Bel mij</button></p>
     </div>
    
     <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
      <div class="img-box">
       <img src="http://placemi.com/200x230" class="img-responsive">
              </div>
              <h1>Christopher Di</h1>
              <h2>Technical</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="text-center"><button class="btn btn-success">Bel mij</button></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="http://placemi.com/200x230" class="img-responsive">
              </div>
              <h1>Heather H</h1>
              <h2>Technical</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="text-center"><button class="btn btn-success">Bel mij</button></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="http://placemi.com/200x230" class="img-responsive">
              </div>
              <h1>Nancy Doe</h1>
              <h2>Designer</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="text-center">
               <button class="btn btn-danger" disabled="">{{ trans('welcome.unavailable') }}</button>
              </p>
            </div>
        </section>

              </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
