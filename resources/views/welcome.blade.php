@extends('layouts.app')
@section('content')
<style>
.team-box {
	         margin-top:80px;
					 position: relative;padding: 30px;
	         padding-top: 5em;
					 background: #fff;
					 float: left;
					 width: 100%;
					 -webkit-box-shadow: 0px 0px 0px -1px rgba(0, 0, 0, 0.19);
					 -moz-box-shadow: 0px 0px 0px -1px rgba(0, 0, 0, 0.19);
					 -ms-box-shadow: 0px 0px 0px -1px rgba(0, 0, 0, 0.19);
					 -o-box-shadow: 0px 0px 0px -1px rgba(0, 0, 0, 0.19);
					 box-shadow: 0px 0px 0px -1px rgba(0, 0, 0, 0.19);
					 -webkit-border-radius: 5px;
					 -moz-border-radius: 5px;
					 -ms-border-radius: 5px;
					 border-radius: 5px;
				 }

@media screen and (max-width: 992px) {.team-box { margin-bottom: 110px;}}
.team-box .user {
	               position: absolute;
								 top: 0;
								 left: 50%;
								 margin-top: -73px;
								 margin-left: -73px;
								 width: 147px;
								 height: 147px;
							 }

.team-box .user img {
	                   width: 149px;
										 height: 149px;
										 -webkit-border-radius: 50%;
										 -moz-border-radius: 50%;
										 -ms-border-radius: 50%;
										 border-radius: 50%;
										 border: 5px solid #f2f2f2;
									 }
.team-box h3 {margin-bottom: 10px;font-weight: 700;font-size: 16px;text-transform: uppercase;}
.team-box .position {font-size: 16px; color: #8f989f; display: block;margin-bottom: 30px;}
.team-box .social-media {margin: 0;padding: 0;}
.team-box .social-media li {display: inline-block; margin: 0; padding: 0; font-size: 24px; margin-right: 10px;}
.team-box .social-media li a {color: #333;}
.team-box .social-media li a:hover, .team-box .social-media li a:focus, .team-box .social-media li a:active {text-decoration: none;color: #666;}


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
                            <section class="">
                                @foreach($agents as $agent_item)
                                @foreach($agent_item['departments'] as $department)
                                <div class="col-md-4 col-sm-4 col-xs-12">
																	<div class="team-box text-center">
																		<div class="user">
																			@if(empty($agent_item['avatar']))
                                      <img src="{{asset('img/user-icon.png')}}" class="img-reponsive"  max-width="300" height="230"/>
                                      @else
                                      <img src="{{ asset('avatars/' . $agent_item['avatar']) }}"  class="img-reponsive" max-width="300" height="230"/>
                                      @endif
																		</div>
																		 <h3>{!! $agent_item['fname'] !!} {!! $agent_item['name'] !!}</h3>
																		 <span class="position">{!! $department['name'] !!}</span>
																		 <p>{!! $agent_item['biography'] !!}</p>
																		  <div class="social-media">
																				<a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-success"><i class="fa fa-phone"></i> Please call me</a>
																			</div>
																	 </div>
																 </div>
																<!-- end .col-md-4 col-sm-4 col-xs-12 -->
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
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
