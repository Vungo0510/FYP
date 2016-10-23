<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;


class LibraryController extends Controller{

    #showing individual student's library
    public function $show_library($student){

        if ($student->email =="abc@gmail.com" && $student->deviceUID == "002724"){
            $lib = new Library();
            $books = $lib->$get_books();

            return $books
        }

        return null;


    }

    #showing the entire library of epitrain
    public function $show_library(){
        $lib = new Library();
        $books = $lib->$get_books();
    }



?>