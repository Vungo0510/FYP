<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return \View::make('usermanage.updateInfo', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('usermanage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $email= $request->input('email');
        
        $user = User::find($id);
        $user->name = $name;
        $user->save();
        return Redirect::route('usermanage.updateInfo');
        //$validation = Validator::make($input, User::$rules);

        //if ($validation->passes())
        //{
           // $user = User::find($id);
            //$user->update($input);
            //return Redirect::route('usermanage.updateInfo', $id);
        //}
        //return Redirect::route('usermanage.updateInfo', $id)
          //  ->withInput()
            //->withErrors($validation)
            //->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
