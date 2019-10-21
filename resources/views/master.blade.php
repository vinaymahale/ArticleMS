<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <style>
      html, body {   
        height: 100%;
        position: relative;
      }

      footer {
        position: fixed ;
        left: 0;
        bottom: 0;
        height: 5%;
        width: 100%;
        text-align:center;
        background-color:black;
        color:white;
      }


        </style>
    </head>
    <!-- navbar navbar-expand-lg navbar-light bg-light -->
    
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="navbar navbar-brand">
      <a class="navbar-brand" href="#">ARTICLE</a>
    </div>
    </nav>
        @yield('content')

<footer class="footer">
      <p><strong>&copy 2019 Copyright @ VinayMahale</strong></p>
</footer>
        
    </body>
</html>
