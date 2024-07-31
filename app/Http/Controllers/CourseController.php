<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function getCoursePage()
    {
        return view ('courses.login');
    }


    
    public function index(){
        $courses=Course::all();
        return view ('courses.index',
        [
            "courses"=>$courses
        ]    
        );
        }
    
       public function show(){
        return [
            'this is to show the course show function'
        ];
       }
    
       public function create(){
        // $storeUrl = route('courses.store');
    
        return view('courses.create');
      
       }
    
       public function store(Request $request)
       {
           $data = $request->input();

           //method 1 using save()
       /*     $newCourse = new Course;
           $newCourse->name= $data['name'];
           $newCourse->save();
           return $newCourse;
 */
           //method 2 : using an array that can take mulitple entries into a table with multiple c

            Course::create($data);
            return redirect()->route('courses.index');


           
       }
    
       public function edit(){
        return "This is the course edit function";
       }
    
       public function update(){
        return "This is the update course function";
       }
    
       public function destroy(){
        return "This is the destroy course function";
       }




}
