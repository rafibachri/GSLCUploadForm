@extends('template')

@section('content')
<div class="container" style="width:400px">
  <form action="/" method = "post" enctype = "multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="upload" >Upload the file</label>
      <input type ="file" class = "form-control-file" id="upload" name="upload">
      @error('upload')
      <div class = "text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="button" style = "margin-top:20px">
      <button type="submit" class="btn btn-primary w-100">Submit</button>
    </div>
  </form>
</div>
@endsection
