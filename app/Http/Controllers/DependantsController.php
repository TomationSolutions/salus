<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dependant;
use App\Hospital;
use App\Subscription;
use App\User;

class DependantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->user()->id;
        // dd($user);
        $dependants = Dependant::where('user_id', '=', $user)->get();
        return view('pages.dependant', compact('dependants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospitals = Hospital::all();
        $packages = Subscription::all();
        return view('pages.adddependants', compact('hospitals', 'packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'email' => ['required', 'email', 'unique:dependants'],
            'hospital' => 'required',
            'packages' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);

        Dependant::create($request->all());

        switch ($request->input('action')) {

            case 'submit':
                $user = Auth()->user()->id;
                // dd($user);
                $dependants = Dependant::where('user_id', '=', $user)->get();
                return view('pages.dependant', compact('dependants'))->with('success', 'New Dependants have added successful!');

                break;
    
            case 'save':

            $hospitals = Hospital::all();
            $packages = Subscription::all();
            return view('pages.adddependants', compact('hospitals', 'packages'))->with('success', 'New Dependants have added successful!');

                break;
    
        }

  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        //
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
