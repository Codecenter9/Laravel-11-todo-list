@extends('layout')
@section('content')
    
@if (session('success'))
{
<div class="alert alert-success">
{{ session('success') }}
</div>
}
    
@endif
<section class="bg-secondary-subtle p-5 image">

   <div class="container">
    <div class="header-text">
        <h1>Learning Laravel: The Esiest way</h1>
        <p> This is our To-dolist app!<br/>
            This app is Built using Laravel4 framework!</p>
    </div>
</div> 
</section>

    <section class="container">

        <div class="header-text  text-center">
            <h2>Our To-Do List</h2>
        </div>

        @if ($tasks->isEmpty())
        <p> Currently, there is no any task!</p>
        <a href="/create" class="btn btn-info">Create Task</a>
        @else
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Finish</th>
              </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
              <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->body }}</td>
                <td>{{ $task->done ? 'Yes' : 'No' }}</td>
                <td><a href="{{ url('edit', $task->id) }}">
                  <span class="btn btn-info">Edit</span>
                  <td><a href="{{ url("delete", $task->id) }}">
                    <span class="btn btn-info">Delete</span>
                </a></td>
              </tr>
              @endforeach
             
            </tbody>
          </table>
        @endif

    </section>


@endsection

<style>
  .image {
    background-image: url('{{ asset('image/img1.jpg') }}');
    background-size: cover;
    background-position: center;
   height:300px;
    color:white;
    font-weight:800px;
    border-radius:0px 0px 50% 50%;
}
.Yes{
  text-decoration: :line-through;
}
</style>
