@extends ('layouts.app')

@section('content')


@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="/">
                <span data-feather="home"></span>
                HOME <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/view_table">
                <span data-feather="file"></span>
                VIEW TABLE  
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logs">
                <span data-feather="shopping-cart"></span>
                LOGS
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/account_settings">
                <span data-feather="users"></span>
                ACCOUNT SETTINGS
              </a>
            </li>
          </ul>
        </div>
      </nav>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">ITEM LISTINGS</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
          </div>
        </div>

        <div class="container">         
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Item No.</th>
                  <th>Equipment No.</th>
                  <th>Equipment Type</th>
                  <th>Date Tested</th>
                  <th>Remarks</th>
                  <th>Tested by</th>
                  <th>Location</th>
                  <th>User</th>
                  <th>Date Added</th>
                </tr>
              </thead>
              @foreach($inventory as $row)
              <tr>
                <td>{{$row['id']}}</td>
                <td>{{$row['equipment_no']}}</td>
                <td>{{$row['equipment_type']}}</td>
                <td>{{$row['date_tested']}}</td>
                <td>{{$row['remarks']}}</td>
                <td>{{$row['tested_by']}}</td>
                <td>{{$row['location']}}</td>
                <td>{{$row['user']}}</td>
                <td>{{$row['created_at']}}</td>


              </tr>
              @endforeach
            </table>
          </div>
          
@endsection