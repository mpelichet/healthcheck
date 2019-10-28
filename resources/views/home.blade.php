@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #001029;">
  <a class="navbar-brand" href="{{ url('/') }}"> <img src="https://image45.blob.core.windows.net/ignite/Internet-of-Things_The-Digital-Future-of-Value-based-Care.png" width=150 height=100 class="mr-2" href="{{ url('/') }}"></a>
            <h3 class="section-title text-center m-7">
              <b><font color = "white"> Welcome to HealthCheck Compliance</font></b>
          </h3>
          </nav>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>


<meta name= "viewport" content= "width=device-width, initial-scale=1">
<div class="container" overflow="auto">
  <div class="col">
  <div class="form-group">
</div>

<div class="panel panel-default">
          <div class="panel-heading">
                        <h4><center><b>Welcome Natalia!</b></center></h4>
                           <h5><center>Your connection to SQL.Azurestack.com is <span style="color: #32cd32">live!</span></center></h5>

           <form action="{{ url('/create') }}" method="GET">
          <button type="submit" class="btn btn-outline-secondary btn-pill pull-left" style="background-color: #0078d4;" font color="red;"><font color = "white"><center>Check Compliance</center></font></b></button>
        </form>
                    <form action="{{ url('/') }}" method="GET">
                    <button type="submit" class="btn btn-outline-secondary btn-pill pull-right" style="background-color: #0078d4;" font color="red;"><font color = "white"><center>Clear </center></font></b></button>
                  </form>
          <div class="blog section section-invert py-6">
          <br>

          </div>
          </div>

