@extends('parent')

@section('main')
<div align="right">
  <a href="{{ route('task.create') }}" class="btn btn-primary
    btn-sm">Add</a>
</div>
@if($message = Session::post('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
   </div>
    @endif
   <table class="table table-bordered table-striped">
     <tr>
       <th width="10%">Image</th>
       <th width="35%"> First Name</th>
       <th width="35%">Last Name</th>
       <th width="30%">Action</th>
      </tr>
      @foreach ($data as $row)
      <tr>
        <td><img src="{{ URL::to('/') }}images/{{ $row->image }}"
           class="img-thumbnail" width="75"/></td>
          <td>{{ $row->first_name }}</td>
          <td>{{ $row->last_name }}</td>
          <td>{{ $row->last_name }}</td>
          <td>
            <a href="{{ route('task.show',$row->id) }}" class="btn btn-primary">
              show</a>
            <a href="{{ route('task.edit',$row->id) }}" class="btn btn-info">
              Edit</a>
              <form action="{{ route('task.destroy',$row->id) }}" method="post">
                @csrf 
                  @method('DELETE')
                  <button type="submit" class="btn btn-primary">
                     delete</button>
                </form>
        </td>
          </tr>
      @endforeach
   </table>
  {!! $data->links() !!}
@endsection