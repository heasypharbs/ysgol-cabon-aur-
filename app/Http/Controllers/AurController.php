<?php

namespace App\Http\Controllers;

use App\Models\aur;
use App\Models\event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreaurRequest;
use App\Http\Requests\UpdateaurRequest;

class AurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    // public function SubmitEvent(Request $request)
    // {
    //    $event = event::Create([
    //     'body'=>$request->body,
    //     'title'=>$request->title
    //    ]);
       
    //    return "Saved";
    // }

    // public function create()
    // {
    //    return view ('events.create');
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function creates()
    // { 
    //     return view ('register');
    // }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreaurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaurRequest $request)
    {
        $request ->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'staff_id' => 'required|unique:users',
            'password' => 'required',
        ]);


        $event = event::create([
            'name' => $request ->input ('name'),
            'email' => $request ->input ('email'),   
            'staff_id' => $request ->input ('staff_id'),   
            'password' => Hash::make($password)
        ]);
        return redirect('/')->with('success', 'Your post has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aur  $aur
     * @return \Illuminate\Http\Response
     */
    public function show(aur $aur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aur  $aur
     * @return \Illuminate\Http\Response
     */
    public function edit(aur $aur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaurRequest  $request
     * @param  \App\Models\aur  $aur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaurRequest $request, aur $aur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aur  $aur
     * @return \Illuminate\Http\Response
     */
    public function destroy(aur $aur)
    {
        //
    }


    public function about()
    {
        return view('about');
    }

    public function classes()
    {
        return view('classes');
    }

    public function contact()
    {
        return view('contact');
    }

    public function teacher()
    {
        return view('teacher');
    }

    public function guide()
    {
        return view('guide');
    }
    public function policies()
    {
        return view('policies');
    }
    
    public function curriculum()
    {
        return view('curriculum');
    }
    public function admission()
    {
        return view('admission');
    }
 
    public function Registrations(Request $request)
    {
        if($request)
        {
         $reg =   User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'staff_id'=>$request->staff_id,
                'password'=> Hash::make($request->password)
            ]);

            if($reg)
            {
                return back()->with('success','Account Created Succcessfully');
            }
        }
    }

    public function register()
    {
        return view('register');
    }
}
