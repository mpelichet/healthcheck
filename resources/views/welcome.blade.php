@extends('layouts.app')

@section('content')
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0078d4;">
  <a class="navbar-brand" href="{{ url('/') }}"> <img src="https://image45.blob.core.windows.net/ignite/Picture1.png" class="mr-2" href="{{ url('/') }}"></a>
            <h3 class="section-title text-center m-7">
              <b><font color = "white"> Welcome to Healthcare Compliance!</font></b>
          </h3>
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
                 <h5><center>DB Connection: SQL.Azurestack.com</center></h5>
          
          <form action="{{ url('/create') }}" method="GET">
          <button type="submit" class="btn btn-outline-secondary btn-pill" style="background-color: #0078d4;" font color="red;"><font color = "white"><center>Check Compliance!</center></font></b></button>
        </form>
                    <form action="{{ url('/') }}" method="GET">
                    <button type="submit" class="btn btn-outline-secondary btn-pill" style="background-color: #0078d4;" font color="red;"><font color = "white"><center>Clear </center></font></b></button>
                  </form>
          <div class="blog section section-invert py-6">
          <br>

          </div>
          </div>
   

        <div class="panel-body">

          <div class="table-responsive">
            <table class="table table-striped task-table">
              <thead>
                <th>In Compliance</th>
                <th>Picture Identifier</th>
                <th>Text</th>
                <th>Description</th>
                <th>Timestamp</th>
                <th>Link</th>
                <th>Location</th>
                <th> Pic </th>
              </thead>
                <tbody>
                  @foreach ($report as $rep)
                <tr>
                  

                    @if ($rep->inCompliance == "Yes")
                    <td class="table-text" bgcolor="#2b942d"><center><div style="font-size:x-large"><i class="fa fa-check"></i></div></center></td>
                    @else
                    <td class="table-text" bgcolor= "#e63900"><center><div style="font-size:x-large"><i class="fa fa-remove"></i></div></center></td>
                    @endif
                  <td class="table-text"><div>{{$rep->identifier}}</div></td>
                  <td class="table-text"><div>{{$rep->text}}</div></td>
                  <td class="table-text"><div>{{$rep->description}}</div></td>
                  <td class="table-text"><div>{{$rep->timestamp}}</div></td>
                  <td class="table-text"><div>{{$rep->link}}</div></td>
                  <td class="table-text"><div>{{$rep->location}}</div></td>
                  
                  <td class="table-text"><div>
                  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#myModal-<?php echo $rep->id;?>"><i class="fa fa-camera"></i></button>
                  </td>
                  
                  <div id="myModal-<?php echo $rep->id;?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-body">
                         <button type="button" class="close" class="close" id="btnWidgetClose" style="font-size:30px;opacity:0.5;"></button>
                        <img class="img-responsive" style="max-width: 100%;" src="{{$rep->link}}"/> 
                        </div>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>