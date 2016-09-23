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
                            <form action="" method="post" class="form-inline">
                              <div class="departments-wrap">

                               @foreach($department as $department_item)
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                          <input type="radio" id="{!! $department_item['name'] !!}"> {!! $department_item['name'] !!}
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
                            <section class="team">
                              <div class="agents">
                                @foreach($agents as $agent_item)
                                @foreach($agent_item['departments'] as $department)
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile" data-id="stench-blossom" data-category="{!! $department['name'] !!}">
                                    <div class="img-box">
                                      @if(empty($agent_item['avatar']))
                                          <img src="{{asset('img/user-icon.png')}}"  max-width="300" height="230"/>
                                         @else
                                      <img src="{{ asset('avatars/' . $agent_item['avatar']) }}"  max-width="300" height="230"/>
                                  @endif

                                    </div>
                                    <h1>{!! $agent_item['fname'] !!}</h1>
                                    <h2>
                                       {!! $department['name'] !!}

                                    </h2>
                                    <p>{!! $agent_item['biography'] !!}</p>
                                    <p class="text-center">
                                      <button class="btn btn-success" data-toggle="modal" data-target="#myModal">{{ trans('app.available') }}</button>
                                    </p>
                                </div>
                              @endforeach
                        @endforeach
                      </div>

                            </section>

                      </div>
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
