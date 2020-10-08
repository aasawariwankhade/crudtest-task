@extends('parent')

@section('main')

@if($error->any())
<div class="alert alert-danger">
  <ul>
   @foreach($errors->all() as $error)
     <li>{{ $error }}</li>
    @endforeach
   </ul>
   </div>
  @endif
  <div align="right">
  <a href="{{ route('task.index') }}" class="btn btn-primary
    btn-sm">back</a>
</div> 
<form action="{{ route('task.store') }}" enctype="
 multipart/form-data">

 @csrf 

 <div class="form-group">
       <lable class="col-md-4 text-right">enter first name</lable>
       <div class="col-md-8">
         <input type="text" name="first_name" class="
         form-control input-lg"/>
        </div>
     </div>
      <br/>
    <br/>
  <br/>
  <div class="form-group">
       <lable class="col-md-4 text-right">enter last name</lable>
       <div class="col-md-8">
         <input type="text" name="last_name" class="
         form-control input-lg"/>
        </div>
     </div>
     <br/>
    <br/>
  <br/>
  <div class="form-group">
       <lable class="col-md-4 text-right">select profile image</lable>
       <div class="col-md-8">
         <input type="file" name="image"/>
        </div>
     </div>
     <br/><br/><br/>
     <div clas="form-group text-center">
     <input type="submit" name="add" class="btn btn-danger
       input-lg" value="add"/>
   </div>
</form>
@endsection