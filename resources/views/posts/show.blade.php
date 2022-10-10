
@extends('layouts.main')


<script type="text/javascript" rel="javascript" src="{{ asset('js/jquery.js') }}"></script>
@section('content')

<p class='alert alert-success' id="alert"> Success </p>

<h1> <a class="text-decoration-none" href="">   {{ $post->title }}  <i class="bi bi-journal"></i> </a></h1>

<textarea class="content" cols="60" rows="6" disabled class="form-control"  style="resize:none">
      {{ $post->content}}
     </textarea>

     <div class="col-sm-4 mb-5 p-3">
             
      <a href="{{$post->id}}/edit" class="btn btn-block btn-danger"> update </a>
      
</div>


@endsection


<script>

$(document).ready(function(){

// Fidein - FideOut  
$("#alert").fadeOut().Duration("55555");

alert("Hello Test ");


});
</script>


