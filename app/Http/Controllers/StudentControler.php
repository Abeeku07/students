<?php 

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class StudentControler extends Controller
// {
    //
    /* public function sayHello()
    {
        return "Hello from the Student Controller class";
    }

    public function studentLogin()
    {
        return "Student Login from Student Controller class is : "; 
    } */

 /*    public function index ()
    {
       return "This is to show index";
        /* [
        "name" => "Kofi",
        "age" => 24,
        "id" => 1002
        ];} */
     


  /*   public function show ()
    {
       return "this is to display show" ;
        /* [
            "name" => "Ama",
            "age" => 20,
            "id" => 1452
        ];} */
    
   

   /*  public function store ()
    {
       return "this is to display store";
       /*  [
            "name" => "Aba",
            "age" => 28,
            "id" => 2352
        ];} */
    


   /*  public function update ()
    {
       return 
        [
            "name" => "Kojo",
            "age" => 30,
            "id" => 8732
        ];
    
    } */

    /* public function destroy ()
    {
       return 
        [
            "name" => "Kwame",
            "age" => 19,
            "id" => 2345
        ];
    
    } */

    /* public function create(){
        $storeUrl = route('students.store');
    
        return 
        '<form method="post" action="'.$storeUrl.'" >
            <input type="text" name="name" id="" placeholder="Enter name">
            <br>
            <input type="text" name="class" id="" placeholder="Enter class">
            <br>
            <input type="hidden" name="_token" value="'. csrf_token() .'" />
            <input type="submit" value="Submit">
        </form>'; */
       
        



    //    "this is a create function";
        /* [
            "name" => "Ekua",
            "age" => 23,
            "id" => 8924
        ]; */
    
    // }

    /* public function edit ()
    {
       return 
        [
            "name" => "Baaba",
            "age" => 21,
            "id" => 9824
        ];
    
    } */


// }







namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;


class StudentControler extends Controller
{
    //
   public function index(){
    $students=Student::all();
    return view ('students.index',
    [
        
      "students"=> $students]); //change this view if you have an error
    
      //fetch all students and save into a variable, where students is the key and $students is the key because every associative array has a key and a variable. the key here is to be the same as the variable name in view
       /*  [
            "name" => "Kofi",
            "class" => 10,
            "id" => 10001
        ],
        [
            "name" => "Ama",
            "class" => 10,
            "id" => 10002
        ],
    ]; */


   }

   public function show(){
    return [
        'this is the show subject function'
    ];
   }

   public function create(){

    $courses = Course::all();

    return view('students.create', ['courses' => $courses]);



      // Retrieve all courses from the database
      $courses = Course::all();

      // Pass the courses to the view
      return view('students.create', ['courses' => $courses]);



  /*   $storeUrl = route('students.store');

    return 
    '<form method="post" action="'.$storeUrl.'" >
        <input type="text" name="name" id="" placeholder="Enter name">
        <br>
        <input type="text" name="class" id="" placeholder="Enter class">
        <br>
        <input type="hidden" name="_token" value="'. csrf_token() .'" />
        <input type="submit" value="Submit">
    </form>'; */
   }

   public function store(Request $request)
       {
           $data = $request->input();

          
            Student::create($data);
            return redirect()->route('students.index');

            

           
       }

   public function edit(){
    return "This is the edit function";
   }

   public function update(){
    return "This is the update function";
   }

   public function destroy(){
    return "This is the destroy function";
   }

}