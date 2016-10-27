<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Library;
/*class LibraryController extends Controller
{
    //$library = new Library();

    #showing individual student's library
    public function show_library(){
				 $a_library;
        if ($student->email =="abc@gmail.com" && $student->deviceUID == "002724"){
            $books = $library->$get_books();
						$a_library = $books;
            #return $books;
        }
        echo 'this is lirary';
        //return \View::make('library', compact('a_library');
    }
}

namespace App\Http\Controllers;*/

use App\User;
//use App\Http\Controllers\Controller;


class LibraryController extends Controller{

    #showing individual student's library
    public function show_library(Request $request){
        $student = $request->user();
        $library = new Library();
        if ($student->email =="vn@smu.edu.sg"){ //replace this with the logged in username to check
            $books = $library->get_books();

            echo "This is the library"; //to check if the app reaches here

            return $books;
        }
        return null;
    }

    #add books to library
    public function addBook($book){
        $library = new Library();
        $book= $library->$add_book($book);
        return $book;
    }
    #set books
    public function setBooks($books){
        $library = new Library();
        $library->$set_books($books);
    }

}

