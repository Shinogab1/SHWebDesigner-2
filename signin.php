<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="SH Web Designer, template per siti web professionali ed originali">
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap, SH web designer, SH , siti web, template web">
    <meta name="author" content="Gabriele Imparato">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - SH</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Shdesign.css">
    <link rel="shortcut icon" href="SH.png" type="image/x-icon">
  </head>
  <body>

    <div id="loader-gif"></div>

<div id="main-content">

    <nav class="navbar navbar-dark bg-yellow ">
      <img src="SH.png" class="logo" width="50px" height="50px">
      <a class="navbar-brand nav-color-title fl-left" href="index.php">Web Designer</a>
      <a href="#" class="fl-right godown"><img src="shopping-cart.png" class="logo" width="30px" height="30px"><small class="cartbox" >0</small> </a>
    </nav>
    <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="signin.php">Log In</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExample01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="template.php">Template</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contatti</a>
      </li>
      <li class="nav-item">
          <a class="nav-link " href="info.php">Info</a>
      </li>
      <li>
        <a href="signin.php">
          <button type="button"  class="btn btn-warning btn-padtop">Log in</button>
        </a>
      </li>
    </ul>
  </div>
</nav>

<form class="container-form">
  <div class="jumbotron">
  <fieldset>
    <legend><h3>Log In</h3></legend>
      <div class="form-group ">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-warning">Submit</button>
        <button type="submit" class="btn btn-dark btn-margin">Register Now</button>
        </fieldset>
      </div>
    </form>


<nav class="navbar navbar-expand-sm navbar-dark bg-footer-up" style="display: block!important;">
      <div class="  navbar-collapse" id="navbarCollapse" >
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active pd-left">
            <a class="nav-link" href="https://www.instagram.com/gabrieleshinobi/?hl=it"  target="_blank"><img src="instagram.png" alt="" width="30px" height="30px"> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active pd-left">
            <a class="nav-link" href="https://www.facebook.com/gabriele.imparato.9"  target="_blank"><img src="facebook.png" alt="" width="30px" height="30px"> <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
<footer class="footer bg-footer">
     <div class="container">
       <span class="text-muted">Copyright (c) 2020 Gabriele Imparato All Rights Reserved.</span>
     </div>
   </footer>

   </div>

   <script type="text/javascript">

   var loader;
   function loadNow(opacity){
     if(opacity<=0){
       displayContent();
     }else{
       loader.style.opacity = opacity;
       window.setTimeout(function(){
         loadNow(opacity - 0.04)
       }, 100);
     }
   }

   function displayContent(){
     loader.style.display = "none";
     document.getElementById('main-content').style.display = 'block';
   }

   document.addEventListener("DOMContentLoaded",function(){
     loader = document.getElementById('loader-gif');
     loadNow(1);
   });

   </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
