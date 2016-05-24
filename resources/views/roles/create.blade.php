@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/staff') }}">Staff</a></li>
            <li class="active">Edit</li>
        </ul>


{{-- create role panel --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Lang::get('roles.new') }}</div>
                    <div class="panel-body">
                        <form action="{{ url('roles/create') }}" method="post" class="form-horizontal">
                           <div class="form-group form-sep">
                            <label for="name" class="col-md-3 control-label">{{ Lang::get('roles.name') }}</label>
                             <div class="col-md-6">
                              <input type="text" id="name" name="name" class="form-control">
                            </div>
                           </div>

                           <div class="form-group">
                            <label for="permissions" class="col-md-3 control-label">{{ Lang::get('roles.permissions') }}</label>
                             <div class="col-md-6">
                              <div id="pickList"></div>
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
 
 <script type="text/javascript">
 $(document).ready(function ()
 {

(function($) {

  $.fn.pickList = function(options) {

    var opts = $.extend({}, $.fn.pickList.defaults, options);

    this.fill = function() {
      var option = '';

      $.each(opts.data, function(key, val) {
        option += '<option id=' + val.id + '>' + val.text + '</option>';
      });
      this.find('#pickData').append(option);
    };
    this.controll = function() {
      var pickThis = this;

      $("#pAdd").on('click', function() {
        var p = pickThis.find("#pickData option:selected");
        p.clone().appendTo("#pickListResult");
        p.remove();
      });

      $("#pAddAll").on('click', function() {
        var p = pickThis.find("#pickData option");
        p.clone().appendTo("#pickListResult");
        p.remove();
      });

      $("#pRemove").on('click', function() {
        var p = pickThis.find("#pickListResult option:selected");
        p.clone().appendTo("#pickData");
        p.remove();
      });

      $("#pRemoveAll").on('click', function() {
        var p = pickThis.find("#pickListResult option");
        p.clone().appendTo("#pickData");
        p.remove();
      });
    };
    this.getValues = function() {
      var objResult = [];
      this.find("#pickListResult option").each(function() {
        objResult.push({
          id: this.id,
          text: this.text
        });
      });
      return objResult;
    };
    this.init = function() {
      var pickListHtml =
        "<div class='row'>" +
        "  <div class='col-sm-5'>" +
        "	 <select class='form-control pickListSelect' id='pickData' multiple></select>" +
        " </div>" +
        " <div class='col-sm-2 pickListButtons'>" +
        "	<button id='pAdd' class='btn btn-primary btn-sm'>" + opts.add + "</button>" +
        "      <button id='pAddAll' class='btn btn-primary btn-sm'>" + opts.addAll + "</button>" +
        "	<button id='pRemove' class='btn btn-primary btn-sm'>" + opts.remove + "</button>" +
        "	<button id='pRemoveAll' class='btn btn-primary btn-sm'>" + opts.removeAll + "</button>" +
        " </div>" +
        " <div class='col-sm-5'>" +
        "    <select class='form-control pickListSelect' id='pickListResult' multiple></select>" +
        " </div>" +
        "</div>";

      this.append(pickListHtml);

      this.fill();
      this.controll();
    };

    this.init();
    return this;
  };

  $.fn.pickList.defaults = {
    add: 'Add',
    addAll: 'Add All',
    remove: 'Remove',
    removeAll: 'Remove All'
  };


}(jQuery));


var val = {
  01: {
    id: 01,
    text: 'Isis'
  },
  02: {
    id: 02,
    text: 'Sophia'
  },
  03: {
    id: 03,
    text: 'Alice'
  },
  04: {
    id: 04,
    text: 'Isabella'
  },
  05: {
    id: 05,
    text: 'Manuela'
  },
  06: {
    id: 06,
    text: 'Laura'
  },
  07: {
    id: 07,
    text: 'Luiza'
  },
  08: {
    id: 08,
    text: 'Valentina'
  },
  09: {
    id: 09,
    text: 'Giovanna'
  },
  10: {
    id: 10,
    text: 'Maria Eduarda'
  },
  11: {
    id: 11,
    text: 'Helena'
  },
  12: {
    id: 12,
    text: 'Beatriz'
  },
  13: {
    id: 13,
    text: 'Maria Luiza'
  },
  14: {
    id: 14,
    text: 'Lara'
  },
  15: {
    id: 15,
    text: 'Julia'
  }
};

var pick = $("#pickList").pickList({
  data: val
});

$("#getSelected").click(function() {
  console.log(pick.getValues());
});



});
 	

 </script>
        {{-- END create role panel --}}

@endsection