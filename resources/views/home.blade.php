@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Open Call Requests</div>

                <div class="panel-body">
                 <table class="table table-striped">
                  <thead>
                   <th>ID</th>
                   <th>Contact</th>
                   <th>Type</th>
                   <th>Queue time</th>
                   <th>Status</th>
                   <th class="col-md-1"></th>
                  </thead>
                  <tbody>
                   <tr>
                    <td>
                     <div class="ckbox">
                      <input type="checkbox" id="checkbox1">
                      <label for="checkbox1"></label>
                     </div>
                    </td>
                     <td><a href="javascript:;">Glenn Hermans</a></td>
                     <td>Callback</td>
                     <td><span class="text-danger">12 min</span></td>
                     <td><span class="badge bg-red">Waiting</span></td>
                     <td><a href="#"><i class="fa fa-info-circle fa-lg"></i></a></td>
                    </tr>

                   <tr>
                    <td>
                     <div class="ckbox">
                      <input type="checkbox" id="checkbox1">
                      <label for="checkbox1"></label>
                     </div>
                    </td>
                     <td><a href="javascript:;">Glenn Hermans</a></td>
                     <td>Callback</td>
                     <td><span class="text-success">2 min</span></td>
                     <td><span class="badge bg-green">Approved</span></td>
                     <td><a href="#"><i class="fa fa-info-circle fa-lg"></i></a></td>
                    </tr>                    
  
                           </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Open Requests</div>
                <div class="panel-body">
                 <ul class="notifications">
                  <li class="notification">
                   <div class="media">
                    <div class="media-left">
                     <div class="media-object">
            <img data-src="holder.js/50x50?bg=cccccc" class="img-circle" alt="Name">
          </div>
        </div>
        <div class="media-body">
          <strong class="notification-title"><a href="#">Dave Lister</a> ended call with <a href="#">iDevelopment</a></strong>
          <p class="notification-desc">I totally don't wanna do it. Rimmer can do it.</p>

          <div class="notification-meta">
            <small class="timestamp">27. 11. 2015, 15:00</small>
          </div>
        </div>
      </div>
  </li>

  <li class="notification">
      <div class="media">
        <div class="media-left">
          <div class="media-object">
            <img data-src="holder.js/50x50?bg=cccccc" class="img-circle" alt="Name">
          </div>
        </div>
        <div class="media-body">
          <strong class="notification-title"><a href="#">Nikola Tesla</a> resolved <a href="#">T-14 - Awesome stuff</a></strong>

          <p class="notification-desc">Resolution: Fixed, Work log: 4h</p>

          <div class="notification-meta">
            <small class="timestamp">27. 10. 2015, 08:00</small>
          </div>

        </div>
      </div>
  </li>

  <li class="notification">
      <div class="media">
        <div class="media-left">
          <div class="media-object">
            <img data-src="holder.js/50x50?bg=cccccc" class="img-circle" alt="Name">
          </div>
        </div>
        <div class="media-body">
          <strong class="notification-title"><a href="#">James Bond</a> resolved <a href="#">B-007 - Desolve Spectre organization</a></strong>

          <div class="notification-meta">
            <small class="timestamp">1. 9. 2015, 08:00</small>
          </div>

        </div>
      </div>
  </li>
  </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
