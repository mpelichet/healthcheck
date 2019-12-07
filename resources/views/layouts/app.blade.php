<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Healthcheck</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://s3.ca-central-1.amazonaws.com/tjxcanada/public/shards.min.css"> -->
    <!-- <link rel="stylesheet" href="https://s3.ca-central-1.amazonaws.com/tjxcanada/public/shards-extras.min.css">
    <link rel="stylesheet" href="https://s3.ca-central-1.amazonaws.com/tjxcanada/public/shards.css"> -->

    <style>

    footer {
      bottom:0px;
      position:fixed;
      width:100%;
      font-family:  'Lato', sans-serif;
    }
html, body {
                background-color: #222;

                color: white;
                font-family:  'Lato', sans-serif;
                /* font-weight: 100; */
                height: 100vh;
                margin: 0;
                
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            
            .container{
              max-width: 1280px;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                color: #A40D13;
            }

            .title {
                font-size: 44px;
            }

            .links > a {
                color: #A40D13;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: lowercase;
                font-family: 'Montserrat', sans-serif;

            }

            .button {
                background-color: #A40D13;
                border: none;
                color: white;
                padding: 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                width:200px;

            }
            .button4 {border-radius: 50%;}
            .m-b-md {
                margin-bottom: 20px;
            }
            .navbar{
              padding: 0.0rem 1.5rem;
              background-color: #375a7f !important;  
            }
            .navbar-navbar-expand-lg-navbar-light{
              background-color: #f5f5f5 !important; 
            }

        .fa-btn {
            margin-right: 6px;
        }

        h3{ 
          font-size: 18.73px;
          margin-top: 15px !important;
          display: inline-block;
          padding-left: 50px;
        }

        h4 { 
          font-size: 2rem;
          line-height: 5rem;
        }

        h5{
          font-size: 1.1rem;
          font-weight: 100;
        }

        .navbar-brand{
          display:inline-block;
          margin: 0px; 
          position: absolute; 
          padding-top: 10px;
        }

        .navbar-brand img{
          display:inline-block;
          margin: 0px; 
          width: 32px; 
          height: 27px;
        }
        .welcome-button{
          padding-left: 15px;
          color: rgba(255,255,255,.6); 
        }

        .welcome-button:hover{
          color: white;
        }

        .action-button{
          background-color: #375a7f;
          padding: 8px 15px;
          border: none;
          margin-top: 20px;
          border-radius: 2px;
          font-weight: 500;
        }

        .action-button-2{
          background-color: white;
          color: #375a7f;
          padding: 8px 20px;
          border: none;
          margin-top: 20px;
          border-radius: 2px;
          font-weight: 500;

        }

        .panel-heading{
          background-color: #303030;
          padding-bottom: 20px;
        }

        .panel-heading-2{
          background-color: #303030;
          padding-bottom: 20px;
          height: 100%; 
        }

        blog section section-invert py-6{
          background: none; 
          color: white; 
        }

        .buttonload {
          background-color: transparent;
          border: none;
          color: #00bc8c;
          padding: 12px 24px;
          font-size: 1.1rem;
          font-weight: 100;
        }

        .synced-text{
          color: #00bc8c;
        }


        .table thead th{
          background-color: #444444;
          padding: 25px;
          border: none !important; 
          border-bottom: none !important;
        }

        .table td{
          padding: 1.5rem;
        }

      
        .table-striped tbody tr:hover{
          background-color: #444444 !important;
          z-index: 1000;
        }

        td{
          background-color:#303030;
          border-top: none !important;
          border-bottom: 2px solid #444444;
          padding:20px;
        } 

        td:hover{
          z-index: -1000;
        } 

        .fa-check:before {
          color: #4bce4b;
        }

        .fa-remove:before {
          color: #c64545;
        }

        .modal-body{
          background-color: #303030;
        }

        .btn-outline-info{
          border: none; 
          color: white;
        }

        .btn-outline-info.focus, .btn-outline-info:focus{
          box-shadow: none;
        }

        .btn-outline-info:hover{
          border: none; 
          background: none !important;
          color: rgba(255,255,255, 0.8);
        }

        .table-text{
          font-size: 14;
          font-weight: 400;
        }

        



    </style>

</head>

<body id="app-layout">
        @guest

        @else
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #001029;">
          <a class="navbar-brand" href="{{ url('/') }}"> <img src="https://smallimg.pngkey.com/png/small/235-2350323_white-icon-office-365-png-white-icon-azure.png" width=150 height=100 class="mr-2" href="{{ url('/') }}"></a>
                    <h3 class="section-title text-center m-7">
                      <b><font color = "white">Fabrikam Health Compliance</font></b>
                  </h3>
                  </nav>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">


      <?php
      $loggedrole = Auth::user()->role;
      if ($loggedrole == 'Merchant') {
      ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/add') }}">Add Products</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('/edit') }}">My Products</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reports
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/createreport') }}">Create a Report</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('/reports') }}">View Reports</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/analytics') }}">Analytics</a>
      </li>
      </ul>


      <span class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ffffff">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>My Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </span>

      <?php } else { ?>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/reports') }}">My Reports</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/analytics') }}">Analytics</a>
        </li>
    </ul>

    <span class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ffffff">
        {{ Auth::user()->name }}
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ url('/profile') }}">
          <i class="fa fa-btn fa-user"></i>My Profile
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="fa fa-btn fa-sign-out"></i>Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>


      </div>
    </span>

    <?php } ?>
    <div class="columns download">
          <p>
             <a href= "{{ asset('/UserManual.pdf') }}" target="_blank" ><i class="fa fa-question-circle" style="font-size:32px;color:white;float:right;"></i></a>
          </p>
        </div>
  </div>
</nav>


@endif
@yield('content')

      <!-- JavaScript Dependencies -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
