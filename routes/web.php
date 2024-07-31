<?php

use Illuminate\Support\Facades\Route;
/* use App\Http\Middleware\Bouncer;
use App\Http\Middleware\Milk; */
use App\Http\Controllers\StudentControler;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubjectController;


/* Route::get('/', function () {     //note that '/' is a path and a path is anything that comes after the domain name
    return view('welcome');
}); */
  

  //Creating a route handler 
  //note that these set of handlers are static
/* Route::get('/hello', function(){
    return "hi sir/m'am";
}); */

/* Route::get('/hi',function(){
    return "Welcome back";
}); */

//route parameters 

//note that these sets are for dynamic methods. the dynamic method means that the the user can input details like "ID" and it will take effect

/* Route::get('/students/{id}',function(string $id){
    return "<hi>Student Name is Kofi. ID is : {$id} </h1>";
});
 */
/* Route::get('/students/{id}/{name}',function(string $id,$name){
    return "<hi>Student Name: {$name}. ID is : {$id} </h1>";
}); */


//applying middleware 
/* 
Route::get('/students',function()
{
    return "<hi>Student Name : Kofi  </h1>";
})->middleware(Bouncer::class); */

//middleware if the name doesnt start with A

/* Route::get('/students',function()
{
    return "<hi>Student Name : Aba  </h1>";
})->middleware(Milk::class); */


// Controllers 

// Route::get('/hello', [StudentControler::class,'sayHello']);

// Route::get('/students', [StudentControler::class,'studentLogin']);


//RESOURCES 

 Route::get('/students',[StudentControler::class, 'index'])->name('students.index'); 
Route::get('/students/create',[StudentControler::class, 'create'])->name('students.create'); //note that this had to come first because laravel uses a 'cascading' method. this is because they both have get functions. 
Route::get('/students/{id}',[StudentControler::class, 'show'])->name('students.show'); 
Route::post('/students',[StudentControler::class, 'store'])->name('students.store'); 
Route::patch('/students{id}',[StudentControler::class, 'update'])->name('students.update'); 
Route::delete('/students{id}',[StudentControler::class, 'destroy'])->name('students.destroy'); 
Route::get('/students/{id)/edit',[StudentControler::class, 'edit'])->name('students.edit'); 

//homepage 

Route::get('/homepage',function ()
  {
    return view('homepage');
  }

);


Route::get('/homepage', function(Request $request)
    { 
        $name = $request->query('name');
        $age = $request->query('age');
        $number = $request->query('number');

        return view('homepage',
         [
            'name'=> $name,
            'age' => $age,
            'number'=> $number
         ]);

})->name('students.homepage');


//Login Page

Route::get('/login', [AuthController::class, 'getLoginPage'])->name('auth.login');


//list of Students page 
// Route::get('/students',[AuthController::class, 'getIndexPage'])->name('students.index'); 




//Route::get('/course',[AuthController::class, 'getCoursePage'])->name('courses.login'); 





//Route::get('/subject',[AuthController::class, 'getSubjectPage'])->name('subjects.login');


Route::get('/course',function ()
  {
    return view('course');
  }

);


Route::get('/courses',[CourseController::class, 'index'])->name('courses.index'); //note that this had to come first because laravel uses a 'cascading' method. this is because they both have get functions. 
Route::get('/courses/create',[CourseController::class, 'create'])->name('courses.create'); 
Route::get('/courses/{id}',[CourseController::class, 'show'])->name('courses.show'); 
Route::post('/courses',[CourseController::class, 'store'])->name('courses.store'); 
Route::patch('/courses{id}',[CourseController::class, 'update'])->name('courses.update'); 
Route::delete('/courses{id}',[CourseController::class, 'destroy'])->name('courses.destroy'); 
Route::get('/courses/{id)/edit',[CourseController::class, 'edit'])->name('courses.edit'); 



// Route::resource('course',CourseController::class);



Route::get('/subject',function ()
  {
    return view('subject');
  }

);


Route::get('/subjects',[SubjectController::class, 'index'])->name('subjects.index'); //note that this had to come first because laravel uses a 'cascading' method. this is because they both have get functions. 
Route::get('/subjects/create',[SubjectController::class, 'create'])->name('subjects.create'); 
Route::get('/subjects/{id}',[SubjectController::class, 'show'])->name('subjects.show'); 
Route::post('/subjects',[SubjectController::class, 'store'])->name('subjects.store'); 
Route::patch('/subjects{id}',[SubjectController::class, 'update'])->name('subjects.update'); 
Route::delete('/subjects{id}',[SubjectController::class, 'destroy'])->name('subjects.destroy'); 
Route::get('/subjects/{id)/edit',[SubjectController::class, 'edit'])->name('subjects.edit'); 




Route::resource('subject',SubjectController::class);

// Route::resource('courses',SubjectController::class);





