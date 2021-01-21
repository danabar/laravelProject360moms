<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
 /*

 */
  public function categories()
   {
    $categories = DB::table('categories')->get();
    
     $id =  0;
     $to_do_tasks = DB::table('to_do_task')->where('category_id',$id)->get();
    
     return view('TaskManager.masterDetials' ,compact('to_do_tasks' , 'categories'));
   }

    public function categoriesTasks( $category)
   {
    $categories = DB::table('categories')->get();
     $to_do_tasks = DB::table('to_do_task')->where('category_id',$category)->get();
    
     return view('TaskManager.masterDetials' ,compact('to_do_tasks' , 'categories'));
   }

   /**
    * Add A New Category view
    */
   public function addCategory()
   {
     return view('TaskManager.addCategory');
   }

   public function createCategories(Request $request)
   {
   $name = $request->input('category-name');
     DB::insert('insert into categories (name) values (?)', [$name]);
     return view('TaskManager.addCategory');
   }
   /**
     * Add A New toDoTasl view
    */
   public function addToDoTasks()
   {
     $categories = DB::table('categories')->get();
     return view('TaskManager.addToDoTask' ,compact('categories'));
   }

   public function createToDoTasks(Request $request)
   {
     $categories = DB::table('categories')->get();
     $title = $request->input('task-title');
     $description = $request->input('task-description');
     $date = $request->input('task-date');
     $tags = $request->input('task-tags');
     $category = $request->input('categories');
     DB::insert('insert into to_do_task (title, description, due_date, tags, category_id) values (? ,? ,? ,? , ?)', [$title , $description , $date,$tags , $category]);
     return view('TaskManager.addToDoTask' , compact('categories'));
   }

   public function delete_task($task)
    {   $categories = DB::table('categories')->get();
        DB::table('to_do_task')->where('to_do_task_id',$task)->delete();
        $category=0;
        $to_do_tasks = DB::table('to_do_task')->where('category_id',$category)->get();
        return view('TaskManager.masterDetials' ,compact('to_do_tasks' , 'categories'));
    }

    public function delete_category($category)
    {   
        DB::table('to_do_task')->where('category_id',$category)->delete();
        DB::table('categories')->where('category_id',$category)->delete();
        $categories = DB::table('categories')->get();
        $to_do_tasks = [];
        return view('TaskManager.masterDetials' ,compact('to_do_tasks' , 'categories'));
    }

}
