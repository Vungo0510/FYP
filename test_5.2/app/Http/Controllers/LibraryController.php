<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LibraryController extends Controller
{
    //$library = new Library();

    #showing individual student's library
    public function show_library(){
		/*		 $a_library;
        if ($student->email =="abc@gmail.com" && $student->deviceUID == "002724"){
            $books = $library->$get_books();
						$a_library = $books;
            #return $books;
        }*/
        echo 'this is lirary';
        //return \View::make('library', compact('a_library');
    }
}
