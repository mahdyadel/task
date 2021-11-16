@extends('layouts.dashboard.app')
@section('content')

<h2>Dashboard</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Dashboard</li>
   
  </ol>
</nav>

  

  <div class="row">

    

        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-list fa-3x"></i>
                <div class="info">
                    <h4>Tasks</h4>
                    <p><b>{{ $tasks_count }} </b></p>
                </div>
            </div>
        </div><!-- end of col -->

       


  </div>

@endsection
