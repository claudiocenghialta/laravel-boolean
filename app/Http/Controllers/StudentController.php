<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function __construct(){
        $data = Student::all();
    }
    public function studenti(){
        $data = Student::all();
        return view('studenti', compact('data') );
    }
    public function show($id){
        $student =Student::find($id);
        return view('show', compact('student'));
    }
     public function slug($slug){
         $student =Student::where('slug',$slug)->get();

        return view('slug',compact('student'));
    }
    // protected $studenti;

    // public function __construct(){
    //     $this->getAllStudents();
    // }

    // public function getAllStudents(){
    //     $this->studenti = config('students');
    // }

    // public function studenti(){
    //     $data = $this->studenti ;
    //     return view('studenti', compact('data') );
    // }
    // public function show($id){
    //     if(!array_key_exists($id, $this->studenti)){
    //         abort(404);
    //     }
    //     $student = $this->studenti[$id];
    //     return view('show', compact('student'));
    // }

    // public function slug($nome){
    //     $trovato = false;
    //     foreach ($this->studenti as $studente) {
    //        if($studente['slug'] == $nome)  {
    //            $student = $studente;
    //            $trovato= true;
    //        }
    //     };
    //     if ($trovato){
    //         return view('slug',compact('student'));
    //     }
    //     else {
    //         abort(404);
    //     }
    // }
    
}
