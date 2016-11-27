@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                  <form id="SignupForm" action="{{ url('/signup') }}" method="post" class="form-horizontal">
                   {!! csrf_field() !!}
                   <fieldset>
                    <legend>{{ trans('customers.basicInfo') }}</legend>
                      <div class="form-group form-sep {{ $errors->has('company') ? ' has-error' : '' }}">
                        <label for="company" class="col-md-3 control-label">{{trans('customers.segment')}} <span class="text-danger">*</span></label>
                         <div class="col-md-8">
                          <div class="radio">
                            <label>
                              <input name="segment" id="personal" type="radio" value="personal"> Personal
                            </label>
                          </div>

                          <div class="radio">
                            <label>
                              <input name="segment" id="organisation" type="radio" value="organisation"> Organisation
                            </label>
                          </div>
                        </div>
                      </div>

            <div class="companyDetails" style='display:none'>
                      <div class="form-group form-sep {{ $errors->has('company') ? ' has-error' : ''}}">
                        <label for="company" class="col-md-3 control-label">{{trans('customers.company')}} <span class="text-danger">*</span></label>
                         <div class="col-md-8">
                           <input type="text"name="company" id="company" value="{{ old('company') }}" class="form-control">
                         </div>
                       </div>

          <div class="form-group form-sep {{ $errors->has('vat') ? ' has-error' : '' }}">
              <label for="vat" class="col-md-3 control-label">{{trans('customers.vat')}} <span
                          class="text-danger">*</span></label>
              <div class="col-md-8">
                  <input type="text" name="vat" id="vat" value="{!! old('vat') !!}" class="form-control">
              </div>
          </div>
        </div>

          <div class="form-group form-sep {{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-3 control-label">
                  {{trans('customers.name')}}
                  <span class="text-danger">*</span>
              </label>
              <div class="col-md-8">
                  <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
              </div>
          </div>

          <div class="form-group form-sep {{ $errors->has('fname') ? ' has-error' : '' }}">
              <label for="firstname" class="col-md-3 control-label">
                  {{trans('customers.first_name')}}
                  <span class="text-danger">*</span>
              </label>
              <div class="col-md-8">
                  <input type="text" name="fname" id="firstname" value="{{ old('fname')}}" class="form-control">
              </div>
          </div>

          <div class="form-group form-sep {{ $errors->has('address') ? ' has-error' : '' }}">
              <label for="address" class="col-md-3 control-label">
                  {{trans('customers.address')}} <span class="text-danger">*</span>
              </label>
              <div class="col-md-8">
                  <input type="text" name="address" id="address" value="{{ old('address')  }}" class="form-control">
              </div>
          </div>

          <div class="form-group form-sep {{ $errors->has('zipcode') ? ' has-error' : '' }}">
              <label for="zipcode" class="col-md-3 control-label">
                  {{trans('customers.zipcode')}}
                  <span class="text-danger">*</span>
              </label>
              <div class="col-md-8">
                  <input type="text" name="zipcode" id="zipcode" value="{{ old('zipcode') }}" class="form-control">
              </div>
          </div>

          <div class="form-group form-sep {{ $errors->has('city') ? ' has-error' : '' }}">
              <label for="city" class="col-md-3 control-label">
                  {{trans('customers.city')}}
                  <span class="text-danger">*</span>
              </label>
              <div class="col-md-8">
                  <input type="text" name="city" id="city" value="{{ old('city') }}" class="form-control">
              </div>
          </div>

          <div class="form-group form-sep {{ $errors->has('country') ? ' has-error' : '' }}">
              <label for="country" class="col-md-3 control-label">
                  {{trans('customers.country')}}
                  <span class="text-danger">*</span>
              </label>
              <div class="col-md-8">
                <select id="country" name="country" class="form-control bfh-countries" data-country="BE"></select>
              </div>
          </div>

          <div class="form-group form-sep {{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="name" class="col-md-3 control-label">
                  {{trans('customers.email')}}
                  <span class="text-danger">*</span>
              </label>
              <div class="col-md-8">
                  <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control">
              </div>
          </div>

          <div class="form-group form-sep {{ $errors->has('phone') ? ' has-error' : '' }}">
              <label for="phone" class="col-md-3 control-label">
                  {{trans('customers.phone')}}
                  <span class="text-danger">*</span>
              </label>
              <div class="col-md-8">
                  <input type="text" name="phone" class="form-control bfh-phone" data-country="country">
              </div>
          </div>

          <div class="form-group form-sep {{ $errors->has('mobile') ? ' has-error' : '' }}">
              <label for="mobile" class="col-md-3 control-label">
                  {{trans('customers.mobile')}}
              </label>
              <div class="col-md-8">
                  <input type="text" name="mobile" id="mobile" class="form-control bfh-phone" data-country="country">
              </div>
          </div>
      </fieldset>

        <fieldset>
            <legend>{{ trans('customers.productsInfo') }}</legend>
            <table class="table table">
              @foreach($category as $item)
              <tr>
                <td colspan="3" style="background-color:#f1f1f1;">{!! $item["name"] !!}</td>
              </tr>
                @foreach($item["products"] as $product_item)
                <tr>
                  <td class="col-md-1"><input type="checkbox" name="product[]" value="{!! $product_item["id"] !!}"></td>
                  <td>{!! $product_item["name"] !!}</td>
                </tr>
                @endforeach
                @endforeach
              </table>
        </fieldset>

        <button id="SaveAccount" type="submit" class="btn btn-primary submit">{{ trans('app.save') }}</button>

    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
$("input[name='segment']").click(function () {
    $('#companyDetails').css('display', ($(this).val() === 'organisation') ? 'block':'none');
});

  $( function() {
        var $signupForm = $( '#SignupForm' );

        $signupForm.formToWizard({
                nextBtnName: '{{ trans('pagination.nextButton')}}',
                prevBtnName: '{{ trans('pagination.previousButton')}}',

                submitButton: 'SaveAccount',
                nextBtnClass: 'btn btn-primary next',
                prevBtnClass: 'btn btn-default prev',
                buttonTag:    'button',
                progress: function (i, count) {
                    $('#progress-complete').width(''+(i/count*100)+'%');
                }
            });
        });

        </script>

@endsection
