@extends('layout')
@section('content')
    
@if (session('error'))
{
    <div class="alert alert-danger">
{{ session('error') }}
    </div>
}
    
@endif
<section class="header section-padding">
    <div class="background">&nbsp;</div>
    <div class="container">
    <div class="header-text">
    <h1>Edit</h1>
    <h2>
    Edit tasks page
    </h2>
    <h4>Edit task {{ $task->id }}</h4>
     </div>
    </div>
</section>

<section class="container">

    <div class="form-group">


<form action="{{ route('task.edit',$task->id)}}" method="post" class="form">

    @csrf
@method('put')
    <input type="hidden" name="id" value="{{ $task->id }}">
   <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $task->title }}" class="form-control border border-primary">
    <label for="body">Body:</label>
   <textarea name="body" id="body" cols="30" rows="10" class="form-control border border-primary">{{ $task->body }}</textarea>
   <input type="checkbox" name="done" id="checkbox" value="1" class="check-box border border-primary" {{ $task->done ? 'checked' : '' }}>
  <label for="done">Done</label>
  <input type="submit" value="Update Task" class="btn btn-info">

</form>
    </div>

</section>


@endsection