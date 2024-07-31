<!-- An unexamined life is not worth living. - Socrates -->

    @extends('layout.master')


<!-- this method works for only "one-liners" -->
@section('title','Subjects') 




@section('content')


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Subject ID</th>
      <th scope="col"> Subject Name</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($subjects as $subject)
    <tr>
    <th scope="row">{{$subject->id}}</th>
      <td>{{$subject->name}}</td>
      <td>
        <a href="{{route('subjects.show', $subject->id)}}" class="btn btn-outline-secondary">View</a>
        <a href="{{route('subjects.edit', $subject->id)}}"class="btn btn-outline-success">Edit</a>
<button type="button" class="btn btn-outline-danger">Delete</button>
      </td>
    </tr>
    @endforeach 
  </tbody>
  <a href="{{route('subjects.create')}}" class="btn btn-outline-secondary">Add Subject</a>
</table>




@endsection


