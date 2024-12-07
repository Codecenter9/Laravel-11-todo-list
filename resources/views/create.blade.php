@extends('layout')
@section('content')

<section class="header section-padding">
    <div class="background">&nbsp;</div>
    <div class="container">
    <div class="header-text">
    <h1>Create</h1>
    <p>
    Create tasks page
     </p>
     </div>
    </div>
</section>

<section class="container">

    <div class="form-group">


<form action="/create" method="post" class="form">

    @csrf
<label for="title">Title:</label>
    <input type="text" name="title" id="title" class="form-control border border-primary">
    <label for="body">Body:</label>
   <textarea name="body" id="body" cols="30" rows="10" class="form-control border border-primary"></textarea>
   <input type="submit" value="Add Task" class="btn btn-info">
</form>
    </div>

</section>


@endsection