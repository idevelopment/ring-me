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

<form action="" method="post" class="form-horizontal">
   <div class="form-group form-sep">
<label for="database" class="col-sm-2 control-label">{{ Lang::get('settings.backup_db') }}</label>
<div class="col-sm-6">
 <select name="database" id="database" class="form-control">
  <option value="mysql">Mysql</option> 
 </select>
<span id="helpBlock" class="help-block">{{Lang::get('settings.backup_db_helper')}}</span>
 </div>
 </div>

<div class="form-group form-sep">
 <label for="keepAllBackupsForDays" class="col-sm-2 control-label">Store all backups</label>
  <div class="col-sm-6">
   <input type="number" name="keepAllBackupsForDays" value="" id="keepAllBackupsForDays" class="form-control">
    <span id="helpBlock" class="help-block">{{ Lang::get('settings.backup_store_all_helper') }}</span>
  </div>
 </div>

 <div class="form-group form-sep">
 <label for="keepAllBackupsForDays" class="col-sm-2 control-label">keep Daily Backups</label>
  <div class="col-sm-6">
   <input type="number" name="keepAllBackupsForDays" value="" id="keepAllBackupsForDays" class="form-control">
    <span id="helpBlock" class="help-block">{{ Lang::get('settings.backup_store_all_helper') }}</span>
  </div>
 </div>

 <div class="form-group form-sep">
 <label for="keepWeeklyBackupsForWeeks" class="col-sm-2 control-label">{{ trans('settings.backup_keepWeeklyBackupsForWeeks') }}</label>
  <div class="col-sm-6">
   <input type="number" name="keepWeeklyBackupsForWeeks" value="" id="keepWeeklyBackupsForWeeks" class="form-control">
    <span id="helpBlock" class="help-block">{{ Lang::get('settings.backup_keepWeeklyBackupsForWeeksHelper') }}</span>
  </div>
 </div>

  <div class="form-group form-sep">
 <label for="keepMonthlyBackupsForWeeks" class="col-sm-2 control-label">{{ trans('settings.backup_keepMonthlyBackupsForWeeks') }}</label>
  <div class="col-sm-6">
   <input type="number" name="keepMonthlyBackupsForWeeks" value="" id="keepMonthlyBackupsForWeeks" class="form-control">
    <span id="helpBlock" class="help-block">{{ Lang::get('settings.backup_store_all_helper') }}</span>
  </div>
 </div>

  <div class="form-group">
 <label for="keepAllBackupsForDays" class="col-sm-2 control-label">keep Yearly Backups</label>
  <div class="col-sm-6">
   <input type="number" name="keepAllBackupsForDays" value="" id="keepAllBackupsForDays" class="form-control">
    <span id="helpBlock" class="help-block">{{ Lang::get('settings.backup_store_all_helper') }}</span>
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