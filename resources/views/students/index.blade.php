    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->

    @extends('layout.master')


<!-- this method works for only "one-liners" -->
@section('title','Students') 




@section('content')


<table class="table table-hover">
  <thead>
  <a href="{{route('students.create')}}" class="btn btn-outline-secondary">Add Student</a>
    <tr>
      <th scope="col">StudentID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Course</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    
    <tr>
      <th scope="row">{{$student->student_id}}</th>
      <td>{{$student->firstname}}</td>
      <td>{{$student->lastname}}</td>
      <td>{{$student->gender}}</td>
      <td>{{$student->course->name}}</td>
      <td>
        <a href="{{route('students.show', $student->id)}}" class="btn btn-outline-secondary">View</a>
        <a href="{{route('students.edit', $student->id)}}"class="btn btn-outline-success">Edit</a>
        <a href="{{route('students.destroy', $student->id)}}" class="btn btn-outline-danger">Delete</a>
      </td>
    </tr>
   


  
    @endforeach
  </tbody>
  </table>

     

    




@endsection


