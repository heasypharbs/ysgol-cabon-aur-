<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreeventRequest;
use App\Http\Requests\UpdateeventRequest;
use Illuminate\Http\Request;
class EventController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function SubmitEvent(Request $request)
    // {
    //    $event = event::Create([
    //     'body'=>$request->body,
    //     'title'=>$request->title
    //    ]);

    //    return redirect()->route('events.index');


    // }
    // public function create()
    // {
    //     return view('events.create');
    // }
    public function index()
    { 

       // $events = event::orderby('created_at','desc')->all();
       $events = DB::table('events')->orderby('created_at','desc') ->paginate(6);
    
        return view('events.index', [
            'events'=>$events 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreeventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request ->validate([
                'image' =>'mimes:jpg,png,jpeg|max:5048',
                'title' => 'required|unique:events',
                'body' => 'required',
            ]);

$newImageName = time() . '-' . $request->title . '.' . $request->image->extension();

$request->image->move(public_path('/uploads'), $newImageName);
   
$event = event::create([
        'title' => $request ->input ('title'),
        'body' => $request ->input ('body'),
        'image_path'=>$newImageName,
        'user_id' => Auth()->user()->id
    ]);
       return redirect('/events')->with('success', 'Your post has been created successfully');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function shows($id)
    {   
        $event = event::where('id',$id)->first();
        //dd($event);
        return view('events.shows',['event'=>$event]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edits($id)
    {        
       $event = event::where('id',$id)->first();
       return view('events.edits', ['event'=>$event]);

          }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateeventRequest  $request
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $newImageName = time() . '-' . $request->title . '.' . $request->image->extension();

$request->image->move(public_path('/uploads'), $newImageName);
   
        $events = DB::table('events')->where('id', $id)
        
        ->update([
            'title' => $request ->input ('title'),
            'body' => $request ->input ('body'),
            'image_path'=>$newImageName
            
          ]);
           return redirect('/events');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
         $event->delete();
        return redirect('/events');
    }


//     public function show($id){
//         $events = self::all();
        
//             foreach($events as $event){
//                 if($event['id'] ==$id){
//                     return $event;
//                 }
//         }
//         return view('events.show');
//         }



//         public function homeshow($id){
//             $events = DB::table('events')->orderby('created_at','desc')->get();
       
//             return view('/', [
//                 'events'=>$events
//             ]);
//         }
// 
}