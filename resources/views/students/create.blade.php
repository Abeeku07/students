<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->

@extends ('layout.master')
 @section ('title,Create New Student')

 @section ('content')

   @include ('students.form',['action'=>route('students.store')])

 @endsection