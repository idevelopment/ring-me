<div class="row">
  <div class="col-md-4 col-sm-4 text-left">
    {!! $chart->render() !!}
  </div>

  <div class="col-md-4 col-sm-4 text-left">
    {!! $overdue->render() !!}
  </div>

<div class="col-lg-4 col-sm-4 text-left">
  {!! $assigned->render() !!}
</div>
</div>
