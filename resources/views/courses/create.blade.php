
    <!-- When there is no desire, all things are at peace. - Laozi -->

 @extends ('layout.master')
 @section ('title,Create New Course')

 @section ('content')

   @include ('courses.form',['action'=>route('courses.store')])

 @endsection