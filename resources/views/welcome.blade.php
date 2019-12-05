<title>HealthCheck Compliance</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://nam06.safelinks.protection.outlook.com/?url=https%3A%2F%2Fcdnjs.cloudflare.com%2Fajax%2Flibs%2Ffont-awesome%2F4.7.0%2Fcss%2Ffont-awesome.min.css&amp;data=02%7C01%7CGarvita.Rai%40microsoft.com%7C3bef1a73b4594b61e1af08d7788ad09d%7C72f988bf86f141af91ab2d7cd011db47%7C1%7C0%7C637110409908428679&amp;sdata=4cvvYgpjtv%2B2feI1SkOJfAfcXHQcf2fxCk2QAaOIHQY%3D&amp;reserved=0">
<meta name="viewport" content="width=device-width, initial-scale=1"> <style>

.buttonload {
  background-color: #ffffff ; /* Green background */
  border: none; /* Remove borders */
  color: black; /* White text */
  padding: 12px 24px; /* Some padding */
  font-size: 16px; /* Set a font-size */ }

/* Add a right margin to each icon */
.fa {
  margin-left: -12px;
  margin-right: 8px;
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 }
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom {
  from{ bottom:-100px; opacity:0 }
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #001029;">
  <a class="navbar-brand" href="{{ url('/') }}"> <img src="https://image45.blob.core.windows.net/ignite/Internet-of-Things_The-Digital-Future-of-Value-based-Care.png" width=150 height=100 class="mr-2" href="{{ url('/') }}"></a>
            <h3 class="section-title text-center m-7">
              <b><font color = "white">Contoso Health Compliance</font></b>
          </h3>
          </nav>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d3d3d3;">
<a href="#" class="w3-bar-item w3-button">Home</a>
  <!-- <a href="#portfolio" class="w3-bar-item w3-button">Azure Stack Portal</a> -->
    <!-- <a href="#contact" class="w3-bar-item w3-button">Database Setup</a> -->
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
                           <h5><center>Your connection to contosohealthdb is <span style="color: #32cd32">live!</span></center></h5>
                           <h5><center>Aggregating data from 3 Azure Stack Edges.</center></h5>

          <form action="{{ url('/create') }}" method="GET">
          <button type="submit" class="btn btn-outline-secondary btn-pill pull-left" style="background-color: #0078d4;" font color="red;"><font color = "white"><center>Check Compliance</center></font></b></button>
        </form>
                    <form action="{{ url('/') }}" method="GET">
                    <button type="submit" class="btn btn-outline-secondary btn-pill pull-right" style="background-color: #0078d4;" font color="red;"><font color = "white"><center>Clear </center></font></b></button>
                  </form>

          <br></br>
          <div class="blog section section-invert py-6">
          <br>
          <body onload="myFunction()" style="margin:0;">
          <div id="x">
            <center><button class="buttonload">
              <i class="fa fa-spinner fa-spin"></i>Processing data from Azure Stack Edge 1 … </button></center> 
            <center><button class="buttonload">  
              <i class="fa fa-spinner fa-spin"></i>Processing data from Azure Stack Edge 2 … </button></center> 
            <center><button class="buttonload">  
              <i class="fa fa-spinner fa-spin"></i>Processing data from Azure Stack Edge 3 … </button></center> 
          </div>
          </div>
          </div>

        <div style="display:none;" id="myDiv" class="animate-bottom">
          <h5><center><span style="color: #32cd32">Azure Stack Edge 1 - Synced</span></center></h5>
          <h5><center><span style="color: #32cd32">Azure Stack Edge 2 - Synced</span></center></h5>
          <h5><center><span style="color: #32cd32">Azure Stack Edge 3 - Synced</span></center></h5>

        <div class="panel-body">

          <div class="table-responsive">
            <table class="table table-striped task-table">
              <thead>
                <th>In Compliance</th>
                <th>Picture Identifier</th>
                <th>Location</th>
                <th>Keywords</th>
                <th>Timestamp</th>
                <th>Filename</th>
                <th> Pic </th>
              </thead>
                <tbody>
                  @foreach ($report as $rep)
                <tr>


                    @if ($rep->compliant == 1)
                    <td class="table-text" bgcolor="#2b942d"><center><div style="font-size:x-large"><i class="fa fa-check"></i></div></center></td>
                    @else
                    <td class="table-text" bgcolor= "#e63900"><center><div style="font-size:x-large"><i class="fa fa-remove"></i></div></center></td>
                    @endif
                  <td class="table-text"><div>{{$rep->guid}}</div></td>
                  <td class="table-text"><div>{{$rep->location}}</div></td>
                  <td class="table-text"><div>{{$rep->keywords}}</div></td>
                  <td class="table-text"><div>{{$rep->timestamp}}</div></td>
                  <td class="table-text"><div>{{$rep->filename}}</div></td>

                  <td class="table-text"><div>
                  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#myModal-<?php echo $rep->guid;?>"><i class="fa fa-camera"></i></button>
                  </td>

                  <div id="myModal-<?php echo $rep->guid;?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-body">
                         <button type="button" class="close" class="close" id="btnWidgetClose" style="font-size:30px;opacity:0.5;"></button>
                        <img class="img-responsive" style="max-width: 100%;" src="{{$rep->url}}"/>
                        </div>
                </tr>
                @endforeach
              </tbody>
            </table>
            <script>
          var myVar;
          function myFunction() {
          myVar = setTimeout(showPage, 3000);
          }

          function showPage() {
          document.getElementById("x").style.display = "none";
          document.getElementById("myDiv").style.display = "block"; } 
        </script>
          </div>
          </div>
        </div>
