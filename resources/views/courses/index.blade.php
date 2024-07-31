<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->


    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->

    @extends('layout.master')


<!-- this method works for only "one-liners" -->
@section('title','Courses') 




@section('content')


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"> Course ID</th>
      <th scope="col">Course Name</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  @foreach ($courses as $course)
    <tr>
    <th scope="row">{{$course->id}}</th>
      <td>{{$course->name}}</td>
      <td>
        <a href="{{route('courses.show', $course->id)}}" class="btn btn-outline-secondary">View</a>
        <a href="{{route('courses.edit', $course->id)}}"class="btn btn-outline-success">Edit</a>
<button type="button" class="btn btn-outline-danger">Delete</button>
      </td>
    </tr>
    @endforeach 
  </tbody>
  <a href="{{route('courses.create')}}" class="btn btn-outline-secondary">Add Course</a>
</table>




@endsection


