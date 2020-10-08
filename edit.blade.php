@extends('parentcrud')

@section('content')

 <div align="right">
  <a href="{{ route('task.index') }}" class="btn btn-danger">back</a>

 </div>
 <br/>

 <form method="post" action="{{ route('task.update','$data->id') }}"
   enctype="multipart/form-data">

     @csrf 
     @method('PATCH')
     <div class="form-group">
       <lable class="col-md-4 text-right">enter first name</lable>
       <div class="col-md-8">
         <input type="text" name="first_name" value="{{
             $data->first_name }}" class="form-control input-lg"/>
            </div>
            </div>
            <br/> 
        <br/> 
    <br/> 

    <div class="form-group">
       <lable class="col-md-4 text-right">enter last name</lable>
       <div class="col-md-8">
         <input type="text" name="last_name" value="{{
             $data->last_name }}" class="form-control input-lg"/>
            </div>
            </div>
            <br/> 
        <br/> 
    <br/> 
    <div class="form-group">
       <lable class="col-md-4 text-right">select profile image</lable>
       <div class="col-md-8">
         <input type="file" name="image"/>
         <img src="{{ URL::to('/') }}images/{{ $data->image }}"
         class="img-thumbnail" width="100"/>
         <input type="hidden" name="hidden_image" value="{{
             $data->image }}"/>
            </div>
            </div>
            <br/> 
        <br/> 
    <br/> 
    <div class="form-group text-center">
      <input type="submit" name="edit" class="btn btn-dark btn-dark
         input-lg" value="edit"/>
         </div>
</form>
@endsection