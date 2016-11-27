@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/staff') }}">Staff</a></li>
            <li class="active">Edit</li>
        </ul>


{{-- edit role panel --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Lang::get('app.general') }}</div>
                    <div class="panel-body">
                        <form action="" method="get" class="form-horizontal">
                           <div class="form-group form-sep">
                            <label for="name" class="col-md-3 control-label">{{ Lang::get('roles.name') }}</label>
                             <div class="col-md-6">
                              <input type="text" id="name" name="name" class="form-control">
                            </div>
                           </div>

                           <div class="form-group">
                            <label for="permissions" class="col-md-3 control-label">{{ Lang::get('roles.permissions') }}</label>
                             <div class="col-md-6">
                               <select multiple="multiple" size="10" name="permissions[]" id="element">
                                @foreach($permissions as $permission_item)
                                <option value="{!! $permission_item->id !!}">{!! $permission_item->name !!}</option>
                                 @endforeach
                               </select>
                            </div>
                           </div>


                           <div class="form-group">
                            <label class="col-md-3 control-label">&nbsp;</label>
                            <div class="col-md-7">
                             <button type="submit" name="search" id="search" class="btn btn-sm btn-primary">{{ Lang::get('app.save') }}</button>
                            </div>
                                    </div>
                         </form>
                        </div>
                       </div>
                    </div>
                </div>

        {{-- END edit role panel --}}
        <script>
        $("#element").bootstrapDualListbox({
    // see next for specifications
});
        </script>
@endsection
