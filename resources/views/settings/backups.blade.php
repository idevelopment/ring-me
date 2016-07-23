@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{-- Pagination --}}
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{!!url('/')!!}">{{ Lang::get('app.home') }}</a></li>
                    <li><a href="{!!url('#')!!}">{{ Lang::get('app.settings') }}</a></li>
                    <li class="active">{{ Lang::get('app.backups') }}</li>
                </ul>
            </div>
        </div>
        {{-- END pagination --}}


{{-- general settings panel --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Lang::get('app.general') }}</div>
                    <div class="panel-body">
                     <form action="" method="post" class="form-horizontal">
                     {!! csrf_field() !!}

<form action="{{ route('settings.saveBackup') }}" method="post" class="form-horizontal">
    {{-- CSRF field --}}
    {{ csrf_field() }}

   <div class="form-group form-sep">
<label for="database" class="col-sm-2 control-label">{{ Lang::get('settings.backup_db') }}</label>
<div class="col-sm-6">
 <select name="database" id="database" class="form-control">
  <option value="mysql">Mysql</option> 
 </select>
<span id="helpBlock" class="help-block">{{Lang::get('settings.backup_db_helper')}}</span>
 </div>
 </div>

<div class="form-group form-sep {{ $errors->has('keepAllBackupsForDaysAll') ? ' has-error' : '' }}">
 <label for="keepAllBackupsForDays" class="col-sm-2 control-label">Store all backups</label>
  <div class="col-sm-6">
   <input type="number" name="keepAllBackupsForDaysAll" value="{{ $StoreAllBackups }}" id="keepAllBackupsForDays" class="form-control">

      @if ($errors->has('keepAllBackupsForDaysAll'))
          <span class="help-block">
              <strong>{{ $errors->first('keepAllBackupsForDaysAll') }}</strong>
          </span>
      @else
          <span id="helpBlock" class="help-block">{{ Lang::get('settings.backup_store_all_helper') }}</span>
      @endif
  </div>
 </div>

 <div class="form-group form-sep {{ $errors->has('keepAllBackupsForDays') ? ' has-error' : '' }}">
 <label for="keepAllBackupsForDays" class="col-sm-2 control-label">keep Daily Backups</label>
  <div class="col-sm-6">
   <input type="number" name="keepAllBackupsForDays" value="{{ $KeepDailyBackups }}" id="keepAllBackupsForDays" class="form-control">

      @if ($errors->has('keepAllBackupsForDays'))
          <span class="help-block">
              <strong>{{ $errors->first('keepAllBackupsForDays') }}</strong>
          </span>
      @else
          <span id="helpBlock" class="help-block">{{ Lang::get('settings.backup_store_all_helper') }}</span>
      @endif

  </div>
 </div>

 <div class="form-group form-sep {{ $errors->has('keepWeeklyBackupsForWeeks') ? ' has-error' : '' }}">
 <label for="keepWeeklyBackupsForWeeks" class="col-sm-2 control-label">{{ trans('settings.backup_keepWeeklyBackupsForWeeks') }}</label>
  <div class="col-sm-6">
   <input type="number" name="keepWeeklyBackupsForWeeks" value="{{ $WeeklyBackups }}" id="keepWeeklyBackupsForWeeks" class="form-control">

      @if ($errors->has('keepWeeklyBackupsForWeeks'))
          <span class="help-block">
              <strong>{{ $errors->first('keepWeeklyBackupsForWeeks') }}</strong>
          </span>
      @else
          <span id="helpBlock" class="help-block">{{ Lang::get('settings.backup_keepWeeklyBackupsForWeeksHelper') }}</span>
      @endif

  </div>
 </div>

  <div class="form-group form-sep {{ $errors->has('keepMonthlyBackupsForWeeks') ? ' has-error' : '' }}">
 <label for="keepMonthlyBackupsForWeeks" class="col-sm-2 control-label">{{ trans('settings.backup_keepMonthlyBackupsForWeeks') }}</label>
  <div class="col-sm-6">
   <input type="number" name="keepMonthlyBackupsForWeeks" value="{{ $MonthlyBackups }}" id="keepMonthlyBackupsForWeeks" class="form-control">

      @if ($errors->has('keepMonthlyBackupsForWeeks'))
          <span class="help-block">
              <strong>{{ $errors->first('keepMonthlyBackupsForWeeks') }}</strong>
          </span>
      @else
          <span id="helpBlock" class="help-block">{{ Lang::get('settings.backup_store_all_helper') }}</span>
      @endif

  </div>
 </div>

  <div class="form-group {{ $errors->has('keepAllBackupsYearly') ? ' has-error' : '' }}">
 <label for="keepAllBackupsForDays" class="col-sm-2 control-label">keep Yearly Backups</label>
  <div class="col-sm-6">
   <input type="number" name="keepAllBackupsYearly" value="{{ $KeepYearlyBackups }}" id="keepAllBackupsForDays" class="form-control">

      @if ($errors->has('keepAllBackupsYearly'))
          <span class="help-block">
              <strong>{{ $errors->first('keepAllBackupsYearly') }}</strong>
          </span>
      @else
          <span id="helpBlock" class="help-block">{{ Lang::get('settings.backup_store_all_helper') }}</span>
      @endif

  </div>
 </div>

  <div class="row">
    <div class="form-group">
      <label class="col-sm-2 control-label"></label>
       <div class="col-md-6">
      <button type="submit" class="btn btn-primary">{{ Lang::get('app.save') }}</button>
      <button type="reset" class="btn btn-danger">{{ Lang::get('app.cancel') }}</button>
    </div> 
   </div>
   </div>

</form>

@endsection