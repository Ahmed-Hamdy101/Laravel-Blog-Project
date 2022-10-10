@extends('layouts.main')

@section('content')


<form action="/posts/{{$post->id}}" class="form" method="POST">
     @csrf
     @method('PUT')
<fieldset class="fieldset">
 
 <legend class="text-primary"> <h1> Update Post </h1></legend>
 <hr>
<div class="form-group">
<Label class="form-label text-primary" for="title">Title </Label>
<input type="text" name="title" class="form-control" id="title" value=" {{ $post->title}}" >
</div>

<div class="form-group">
  <Label class="form-label text-primary" for="texthere">Content </Label>
  <textarea  name="content" class="form-control" placeholder="hold on type it ...." style="resize: none"  cols="10" rows="5"   id="texthere" > {{ $post->content}} </textarea>
</div>

<div class="form-group">
   <label class="form-label text-primary" for="content">content</label>
  <select name="category_id" id="content" class="form-control" >
    @foreach (  $categories as $category )
    @if ($category->id == $post->category_id)
    
    <option value="{{$category->id}}" selected> {{$category->name}}</option>
      
    @else
    
    <option value="{{$category->id}}" > {{$category->name}}</option>
      
    @endif
    @endforeach
    
  </select>
</div>
<br>
<button class="btn btn-sm btn-primary" type="submit"  > Edit  <i style="font-size:16px;" class='bi bi-journal-text'> </i> </button>
</fieldset>

</form>

@endsection