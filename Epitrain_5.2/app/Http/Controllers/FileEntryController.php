<?php

namespace App\Http\Controllers;

use Request;
use App\Fileentry;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Imagick;

class FileEntryController extends Controller
{
    public function index()
	{
		$entries = Fileentry::all();
 
		return view('fileentries.index', compact('entries'));
	}
 
	public function add() {
 
		$file = Request::file('filefield');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$entry = new Fileentry();
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename = $file->getFilename().'.'.$extension;
 
		$entry->save();
 
		return redirect('fileentry');
		
	}

	public function get($filename){
		//$im = new \Imagick( "" );
		$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
		$file = Storage::disk('local')->get($entry->filename);
 
		return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
	}

	public function delete($filename){
		//$im = new \Imagick( "" );
		$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();

		if($entry) {
			$file = Storage::disk('local')->delete($entry->filename);
			$entry->delete();
	 		return redirect('fileentry');
			// return (new Response("Delete Successfully", 200))
	  //             ->header('Content-Type', "text/html");
	          }else {
	          	return redirect('fileentry');
	          	// return (new Response("No such file", 200))
	           //    ->header('Content-Type', "text/html");
	          }
		
	}
}
