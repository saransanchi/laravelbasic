<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravelfirstapp- @yield('title')</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body class="container mt-4">
        
        

     <div class="content container">
            <div class ="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="teams">our team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact us</a>
      </li>
    </ul>
    <span class="navbar-text">
      Email us:-info@saransanchi.com
    </span>
  </div>
</nav>
            
 </div>
                
          <div class="container mt-4">
            @yield('content')
             </div>
                
           
        <div class="container mt-4">
        <div>
            <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">Copy right reserved by @saransanchi</a>
            </nav>
        </div>  
        </div>
    </div>
        
    
        
    </body>
</html>
