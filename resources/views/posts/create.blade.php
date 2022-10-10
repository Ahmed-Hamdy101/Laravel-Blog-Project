@extends('layouts.main')

@section('content')


<form action="/posts" class="form" method="POST">
     @csrf

<fieldset class="fieldset">
 
 <legend class="text-primary"> <h1> Create Post </h1></legend>
 <hr>
<div class="form-group">
<Label class="form-label text-primary" for="title">Title </Label>
<input type="text" name="title" class="form-control" id="title" >
</div>

<div class="form-group">
<Label class="form-label text-primary" for="texthere">Content </Label>
<textarea  name="content" class="form-control" placeholder="hold on type it ...." style="resize: none"  cols="10" rows="5"   id="texthere" > </textarea>
</div>



<div class="form-group">
     <label class="form-label text-primary" for="content">content</label>
    <select name="category_id" id="content" class="form-control" >
      @foreach (  $categories as $category )
      
      <option value="{{$category->id}}" > {{$category->name}}</option>
       
      @endforeach
      
    </select>
  </div>

<br>
<button class="btn btn-sm btn-primary" type="submit"  > Add Post  <i style="font-size:16px;" class='bi bi-journal-text'> </i> </button>
</fieldset>

</form>

@endsection