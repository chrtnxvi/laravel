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
          <h1 class="h2">LOGS</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
          </div>
        </div>
@endsection