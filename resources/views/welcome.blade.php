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

navbar navbar-expand-lg-navbar-child"{
  background-color: #f5f5f5;
}

.form-button-container{
  text-align:center;
  margin: 0 auto;
  width: 100%;
  height: 30px;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light">
  <div style="display:inline;padding: 16px;">
  <a class="navbar-brand" href="{{ url('/') }}"><img src="https://i.ibb.co/7XMQcwd/Vector.png" class="mr-2" href="{{ url('/') }}"></a>
            <h3 style="">Fabrikam Health Compliance</h3>
          <a href="{{ url('/') }}" class="welcome-button">Home</a>
</div>
</nav>
  <!-- <nav class="navbar navbar-expand-lg-navbar-child" style="background-color: #d3d3d3;"> -->
<!-- <a href="#" class="w3-bar-item w3-button">Home</a> -->
  <!-- <a href="#portfolio" class="w3-bar-item w3-button">Azure Stack Portal</a> -->
    <!-- <a href="#contact" class="w3-bar-item w3-button">Database Setup</a> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav> -->

            <div class="panel panel-default">
              <div class="panel-heading">
                <br/>
              <h4><center><b>Welcome Natalia!</b></center></h4>
                <h5><center>Your connection to contosohealthdb is live!</center></h5>
                <h5><center>Aggregating data from 3 Azure Stack Edges.</center></h5>

                  <div class="form-button-container" style="text-align:center">

                    <form action="{{ url('/create') }}" method="GET" style="display:inline-block;padding: 5px;">
                    <button class="action-button" type="submit"><font color = "white"><center>Check Compliance</center></font></b></button>
                    </form>

                    <form action="{{ url('/') }}" method="GET" style="display:inline-block;padding: 5px">
                      <button class="action-button-2" type="submit" ><center>Clear </center></b></button>
                    </form>

                  </div>
            
            </div>
        
             </div>

<meta name= "viewport" content= "width=device-width, initial-scale=1">
<div class="container" overflow="auto">
  <div class="col">
    <br/>
    <br/>
        <div class="blog section section-invert py-6">
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
          <h5 class="synced-text"><center>Azure Stack Edge 1 - Synced</center></h5>
          <h5 class="synced-text"><center>Azure Stack Edge 2 - Synced</center></h5>
          <h5 class="synced-text"><center>Azure Stack Edge 3 - Synced</center></h5>
        <br/>

        <div class="panel-body">

          <div class="table-responsive">
            <table class="table table-striped task-table">
              <thead>
                <th>Compliance</th>
                <th>Identifier</th>
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
