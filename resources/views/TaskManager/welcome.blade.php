<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task Manager</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
=       <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    </head>
<body style="font-family:Verdana;color:#aaaaaa;">

<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
  <h1>Task Manager</h1>
</div>

<div style="overflow:auto">
  <div class="menu" style="width: 20%;float: left;">
   <ul class="nav" style="border: 1px solid black;">
        <li>  <a style="padding: 8px; margin-top: 7px;" href="/TaskManager/welcome">Welcome </a></li>
        <li>  <a style="padding: 8px; margin-top: 7px;" href="/TaskManager/addCategory">create new Category </a></li>
        <li>  <a  style="padding: 8px; margin-top: 7px;" href="/TaskManager/addToDoTask">create new Todo Tasks </a></li>
        <li>  <a style="padding: 8px; margin-top: 7px;"  href="/TaskManager/masterDetials"> Master Detials</a></li>
    </ul>
  </div>

  <div class="main" style="float: left;width: 60%;padding: 0 20px;">
  <p>Welcome to Our website
  we need you to take a breath and try to interesting on manage your tasks 
  by our sweet site</p>
  </div>

</div>

</body>
</html>
