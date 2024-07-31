 <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->

<!-- firstname,lastname,email,phone, gender, dob, course id, student id -->
    <form class="container-sm" action="{{$action}}" method="POST">
  <div class="mb-3">
    <input type="text" name="firstname" class="form-control" placeholder = "enter first name" >
    <br>
    
    <div class="mb-3">
    <input type="text" name="lastname" class="form-control" placeholder = "enter last name" >
    <br>

    <div class="mb-3">
    <input type="email" name="email" class="form-control" placeholder = "enter email" >
    <br>

    <div class="mb-3">
    <input type="text" name="phone" class="form-control" placeholder = "enter phone number" >
    <br>

    <div class="mb-3">
    <!-- <label for="gender" class="form-label">Gender</label> -->
    <select name="gender" class="form-select" aria-label="Default select example">
      <option selected>Select gender</option>
      <option value="1">Male</option>
      <option value="2">Female</option>
    </select>
  </div>


    <div class="mb-3">
    <input type="date" name="dob" class="form-control" placeholder = "choose date of birth" >
    <br>

    <div class="mb-3">
    <input type="text" name="student_id" class="form-control" placeholder = "enter student ID" >
    <br>

    <!-- <div class="mb-3">
    <input type="text" name="course_id" class="form-control" placeholder = "enter course ID" >
    <br> -->

    <div class="mb-3">
                <select name="course_id" class="form-control">
                    <option value="">Select Course</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>

   

    
    
    
    
    
    
    
    
    
    
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
    
  </div>
  

  <x-texfield>
</form>

