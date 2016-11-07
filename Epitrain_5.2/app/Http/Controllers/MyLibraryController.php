<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fileentry;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyLibraryController extends Controller
{
    public function index()
    {
        //
        $entries = Fileentry::all();
 
        return view('mylibrary.index', compact('entries'));
    }
}
