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
    <!-- New Category Form -->
        <form action="/create_category" method="GET" class="form-horizontal">
            {{ csrf_field() }}
            <!-- Category Name -->
            <div class="form-group">
                <label for="category-name" class="col-sm-3 control-label">Category Name</label>

                <div class="col-sm-6">
                    <input type="text" name="category-name" id="category-name" class="form-control" required>
                </div>
            </div>
            <br/>
            <!-- Add Category Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Category
                    </button>
                </div>
            </div>
        </form>
  </div>

</div>

</body>
</html>
