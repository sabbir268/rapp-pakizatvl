<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

use App\Queary; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    public function contact()
    {
        return view('frontent.contact');
    }
    public function queary()
    {
        return view('frontent.queary');
    }

    public function quearyStore(Request $request)
    {
        $validatedData = $request->validate([
            'name'             => 'required',
            'email'              => 'required|email',
            'subject'              => 'required',
            'queary'              => 'required',
        ]);
        $data = $request->all();
        $Queary = new Queary();
        $Queary->name = $data['name'];
        $Queary->email = $data['email'];
        $Queary->subject = $data['subject'];
        $Queary->queary = $data['queary'];
        if($Queary->save())
        {
            return redirect()
            ->back()
            ->with('alert.status', 'warning')
            ->with('alert.message', 'Send Succesfully');
        }

        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontent.index');
    }

    public function all($slug)
    {
        $Contents = Content::where('type',$slug)->get();
        return view('frontent.content_all',compact('Contents','slug'));
    }
    public function view($slug,$id)
    {
        $ContentView = Content::find($id);
        return view('frontent.content',compact('ContentView','slug'));
    }
}
