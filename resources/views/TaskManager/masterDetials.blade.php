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
        <li>  <a  style="padding: 8px; margin-top: 7px;" href="/TaskManager/addToDoTask">create new Todo List </a></li>
        <li>  <a style="padding: 8px; margin-top: 7px;"  href="/TaskManager/masterDetials"> Master Detials</a></li>

    </ul>
  </div>

  <div class="main">

  <div style="float: left;width:20%;">
   <li> <label> Categories </label> 
      <ul>
        @forelse ($categories as $category)
                
            <li><a style="padding: 8px; margin-top: 7px;"  href="/TaskManager/masterDetials/{{$category->category_id}}"> {{ $category->name }} </a>
            <form action="/delete_category/{{$category->category_id}}" method="GET">
                       
                        @csrf

                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete Category</button>
           </form>
            </li>
                       
        @empty
            <p>No Categories</p>
        @endforelse
       </ul>
   </li>
   </div>
   <div style="float:right;width:50%">
    <li> <label> ToDo Tasks </label> 
        @forelse ($to_do_tasks as $task)
          <p>Title : {{$task->title}}</p>
          <p>Description: {{$task->description}}</p>
          <p>Due Date: {{$task->due_date}}</p>
          <p>Tags: {{$task->tags}}</p>
          <form action="/delete_task/{{$task->to_do_task_id}}" method="GET">
                       
                        @csrf

                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete Task</button>
           </form>
        @empty
            <p>No tasks</p>
        @endforelse
      
   </li>
   </div>
  </div>

</div>

</body>
</html>
