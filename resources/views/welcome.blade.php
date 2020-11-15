<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Styles -->
     <style type="text/css">
         .header{
            margin:0 auto;
            align-content: center;
            font-size: 50px;
            background-color: #EEEEEE;
            height: 200px;
            text-align: center;

        }
        .header label{
            margin-top: 50px;
        }

        nav{
            background-color: #EA6A5B;
        }
       
        .content{
            margin-top: 20px;
            margin: auto;
            width: 60%;
            padding: 10px;
        }
        img{
            height: 400px;
            width: 100%;
        }
        .details{
            margin-top: -50px;
        }

     </style>
    </head>
    <body>
        <div class="header">
                <label>JUAN'S AUTO PAINT</label>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-red">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/newpainitjob">NEW PAINT JOB <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/paintjob">PAINT JOBS</a>
      </li>
      
    </ul>
  </div>
</nav>

    <div class="content">
        <label style="margin-left:380px; font-size: 20px;"><b> New Paint Job </b></label> <br>

        <img  id="img"src="/color/gray.png"><br>
        </div>


<div class="details">
<label style="font-size: 20px;"><b>Car Detail </b></label>
<form method="post" action="/newpaint">
  @csrf
    <div class="form-row align-items-center">
   <div class="col-md-2">
     <label for="FirstName" style="margin-bottom:0rem !important;">Plate NO</label>
 </div>
 <div class="col-md-5">
    <input type="text" id="Plate" name="plate" class="form-control" val=""/>
  </div>
</div>
<Br>
 <div class="form-row align-items-center">
   <div class="col-md-2">
     <label for="FirstName" style="margin-bottom:0rem !important;">Current Color</label>
 </div>
 <div class="col-md-5">
     <select name="colord" class="form-control" >
            <option  value="gray" selected> Gray</option>
        </select>
  </div>
</div>
<Br>
 <div class="form-row align-items-center">
   <div class="col-md-2">
     <label for="FirstName" style="margin-bottom:0rem !important;">Target Color </label>
 </div>
 <div class="col-md-5">
   
    <select class="form-control md-5"  id="color" name="colorn">
        <option selected=""></option>
            <option value="0">RED</option>
             <option value="1">GREEN</option>
              <option value="2">BLUE</option>
        </select>
  </div>
</div>

<input type="submit" name="" value="submit" class="btn btn-danger" style="margin-left: 20px; width: 20%; margin-top: 20PX;"> 
</form>

    </div>
    </body>
</html>



<script type="text/javascript">
 var colorlist = [
    "http://127.0.0.1:8000/color/red.png",
    "http://127.0.0.1:8000/color/green.png",
    "http://127.0.0.1:8000/color/blue.png", ];

$(document).ready(function(){


$('#color').change(function () {
    var val = parseInt($('#color').val());
      $('#img').attr("src",colorlist[val]);
});

});


</script>