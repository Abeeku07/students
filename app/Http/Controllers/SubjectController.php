<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    //
    public function getSubjectPage()
    {
        return view ('subjects.login');
    }


    public function index(){
        
    $subjects=Subject::all();
    
        
        return view ('subjects.index',
        [
            "subjects"=>$subjects
        ]
        );
        }
    
       public function show(){
        return [
            'this is the show subject function'
        ];
       }
    
       public function create(){
      //  $storeUrl = route('students.store');
    
        return view('subjects.create');
       }
     /*    '<form method="post" action="'.$storeUrl.'" >
            <input type="text" name="name" id="" placeholder="Enter name">
            <br>
            <input type="text" name="class" id="" placeholder="Enter subject">
            <br>
            <input type="hidden" name="_token" value="'. csrf_token() .'" />
            <input type="submit" value="Submit">
        </form>'; */

        public function store(Request $request)
        {
        
            $data = $request->input();
            
            Subject::create($data);

            return redirect()->route('subjects.index');


       }
    
       public function edit(){
        return "This is the edit subject function";
       }
    
       public function update(){
        return "This is the update subject function";
       }
    
       public function destroy(){
        return "This is the destroy subject function";
       }

}
