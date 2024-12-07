@extends('layout')
@section('content')
    
<section class="headersection-padding">
  <div class="background">&nbsp;</div>
  <div class="container">
  <div class="header-text ext-center">
  <h1 class="">Delete</h1>
   <p>
   Delete tasks page
   </p>
   </div>
   </div>
   </section>  
  

   <section>
    <div class="container">
        <h3>do you want to delete {{$task->id}}?</h3>
        <form action="{{ route('task.delete',$task->id) }}" method="post">
        
            @csrf
            @method('delete')
            <input type="hidden" name="" value="{{ $task->id }}">
            <input type="submit" value="Yes" class="btn btn-danger">
            <a href="/" class="btn btn-primary">No</a>
        </form>
    </div>
   </section>

   @endsection