<?php

namespace App\Http\Controllers;

use view;
use App\Models\task;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class taskcontroller extends Controller
{
   public function home(){
    $tasks = task::orderBy('created_at','desc')->get();
    return view('/home', compact('tasks'));
   }

   public function create(){
    return view('/create');
   }

   public function delete(Task $task){
    return view('/delete', compact('task'));
   }

   public function dodelete(Task $task){

      $task->delete();
 
  return Redirect('/');
   }
   public function contact(){
      return view('contact');
     }

   public function savecreate(Request $request){

      $request->validate([
         'title' => 'required|string',
         'body' => 'required|string',

   ]);
      
      Task::create([
         'title' => $request->title,
         'body' => $request->body,
   ]);
      

return Redirect('/');
   }

   public function edit(Task $task){
      
      return view('/edit',compact('task'));
     }
   public function doedit(Request $request, Task $task){

      $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'done' => 'nullable|boolean',
      ]);

      $task = Task::findOrFail($task->id );

      if(!$task){
         return redirect('/')->with('error', 'Task not found');
      }
      $task->title = $request->title;
      $task->body = $request->body;
      $task->done = $request->done;
      $task->save();

      return redirect('/')->with('success', 'Task updated successfully');

   }

 
}
