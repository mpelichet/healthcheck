@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://nam06.safelinks.protection.outlook.com/?url=https%3A%2F%2Fcdnjs.cloudflare.com%2Fajax%2Flibs%2Ffont-awesome%2F4.7.0%2Fcss%2Ffont-awesome.min.css&amp;data=02%7C01%7CGarvita.Rai%40microsoft.com%7C3bef1a73b4594b61e1af08d7788ad09d%7C72f988bf86f141af91ab2d7cd011db47%7C1%7C0%7C637110409908428679&amp;sdata=4cvvYgpjtv%2B2feI1SkOJfAfcXHQcf2fxCk2QAaOIHQY%3D&amp;reserved=0">
<meta name="viewport" content="width=device-width, initial-scale=1"> <style>

.buttonload {
  background-color: #ffffff; /* Green background */
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
                           <!--<h5><center>Your connection to SQL.Azurestack.com is -->
                            <div id="x">
                             <center><button class="buttonload">
                              <i class="fa fa-spinner fa-spin"></i>Now connecting to SQL server: contosoDBhealth …. </button></center> 
                            </div>
                            <div style="display:none;" id="myDiv" class="animate-bottom">
                            <h5><center><span style="color: #32cd32">Connected to: contosoDBhealth!</span></center></h5>
                          </div>
                           <body onload="myFunction()" style="margin:0;">

                            
                            <script>
                            var myVar;

                            function myFunction() {
                              myVar = setTimeout(showPage, 3000);
                            }

                            function showPage() {
                              document.getElementById("x").style.display = "none";
                              document.getElementById("myDiv").style.display = "block"; } </script>

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
