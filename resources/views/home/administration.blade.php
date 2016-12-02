@extends('layouts.app')

@section('content')
    <div class="container">
      @widget('RecentCallbacksStats')


    <div class="clearfix">&nbsp;</div>
    @asyncWidget('RecentCallbacks')

    </div>
@endsection
