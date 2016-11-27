@extends('layouts.app')
@section('content')

<style>
.team {
	clear: both;
	position: relative;
	text-align: center;
	background: #fafafa;
	margin-bottom: 20px;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
  border-left: 15px solid transparent;
	box-shadow: none;
}
.team-content {
	padding: 30px 20px;
	background: #ffffff;
	color: inherit;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
.team-content h4 {
	color: #36414d;
	font-weight: bold;
	line-height: 1.2;
}
.team-content small {
	color: inherit;
	font-size: 13px;
	font-weight: normal;
}

</style>
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
                  @if(session('message'))
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    {{session('message')}}
                  </div>
                  @endif

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <form action="" method="post" class="form-inline">
                              <div class="departments-wrap">

                               @foreach($department as $department_item)
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="department[]"  value="{!! $department_item['id'] !!}"> {!! $department_item['name'] !!}
                                        </label>
                                    </div>
                                </div>
                                &nbsp;
                                @endforeach
                                <div class="form-group">
                                  <button name="filter" id="filter" class="btn btn-sm btn-default">Filter</button>
                                </div>
                              </div>
                            </form>
                      </div>

                        <div class="panel-body">
                            <section class="  ">
                                @foreach($agents as $agent_item)
                                @foreach($agent_item['departments'] as $department)

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                  <div class="team">
                                    <figure class="effect-phoebe">
                                      @if(empty($agent_item['avatar']))
                                      <img src="{{asset('img/user-icon.png')}}"  max-width="300" height="230"/>
                                      @else
                                      <img src="{{ asset('avatars/' . $agent_item['avatar']) }}"  max-width="300" height="230"/>
                                      @endif

                          <figcaption>
                            <p> <a href="about-me.html"><i class="fa fa-link effect-3"></i></a>
                                <a class="nivo-lightbox" href="images/team/1.jpg"> <i class="fa fa-search effect-3"></i>
                                </a>
                           </p>
            </figcaption>
          </figure>
          <div class="clearfix"></div>
          <div class="team-content">
            <h4>{!! $agent_item['fname'] !!} {!! $agent_item['name'] !!}<br>
              <small>{!! $department['name'] !!}</small>
            </h4>
            <p>
              {!! $agent_item['biography'] !!}
            </p>
            <div class="clearfix"></div>
          </div>
          <!-- end .team-content -->
        </div>
        <!-- end .team -->
      </div>
      <!-- end .col-md-3 col-sm-6 col-xs-12 -->
@endforeach
@endforeach

                      </div>

                            </section>

                      </div>
                    </div>
                </div>
            </div>
        </div>


    {{-- Modal --}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-toggle="tooltip" data-placement="bottom"
                            title="{{ trans('app.close')}}" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Callback request</h4>
                </div>
                @if (Auth::guest())
                <div class="modal-body">
                  <div class="clearfix">&nbsp;</div>
                You need to be logged in before you can send us your request.
                <div class="clearfix">&nbsp;</div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
                @else


                <form method="post" action="{{url('callbacks')}}" class="form-horizontal">
                  {{csrf_field() }}
                  <input type="hidden" name="type" value="Administration">

                <div class="modal-body">
                        <div class="form-group">
                            <label for="product" class="col-sm-3 control-label">Product <strong class="text-danger">*</strong></label>
                            <div class="col-sm-7">
                              <select id='product' name="product" class="form-control">
                                  <option value="" selected>-- Please select your product --</option>
                                  <option value="business_fibernet">Business Fibernet</option>
                                  <option value="corporate_fibernet">Corporate Fibernet</option>
                                  <option value="ifiber">iFiber</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label">Question <strong class="text-danger">*</strong></label>
                            <div class="col-sm-7">
                                <textarea name="description" id="description" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                @endif
                </form>

            </div>
        </div>
    </div>
@endsection
