@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form action="{{ route('staff.store') }}" method="POST" class="form-horizontal" role="form">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{trans('staff.fname')}} <span class="text-danger">*</span></label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">

                                    @if ($errors->has('fname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{trans('staff.name')}} <span class="text-danger">*</span></label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{trans('staff.email')}} <span class="text-danger">*</span></label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">
                                    Department <span class="text-danger">*</span>
                                </label>

                                <div class="col-md-6">
                                    <select name="department" class="form-control">
                                        <option value="" selected="">Select the department</option>
                                        @foreach($departments as $department)
                                            <option value="{!! $department->id !!}">{!! $department->name !!}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('biography') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">{{trans('staff.bio')}} <span class="text-danger">*</span></label>

                                <div class="col-md-6">
                                    <textarea name="biography" class="form-control"></textarea>

                                    @if ($errors->has('biography'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('biography') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        {{ trans('app.save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
