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

<nav class="navbar navbar-expand-lg navbar-light">
  <div style="display:inline;padding: 16px;">
  <a class="navbar-brand" href="{{ url('/') }}"><img src="https://i.ibb.co/7XMQcwd/Vector.png" class="mr-2" href="{{ url('/') }}"></a>
            <h3 style="">Fabrikam Health Compliance</h3>
          <a href="{{ url('/') }}" class="welcome-button">Home</a>
</div>
</nav>

<div class="panel panel-default">
          <div class="panel-heading-2">
              <br/>
              <br/>
              <br/>
                        <h4><center><b>Welcome Natalia!</b></center></h4>
                           <!--<h5><center>Your connection to SQL.Azurestack.com is -->
                            <div id="x">
                             <center><button class="buttonload">
                              <i class="fa fa-spinner fa-spin"></i>Now connecting to SQL server: contosoDBhealth …. </button></center> 
                            </div>
                            <div style="display:none;" id="myDiv" class="animate-bottom">
                            <h5><center><span style="color: #00bc8c">Connected to: contosoDBhealth!</span></center></h5>
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
<div class="form-group">


</div>


          
          </div>

