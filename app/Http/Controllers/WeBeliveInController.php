<?php

namespace App\Http\Controllers;

use App\WeBeliveIn;
use Illuminate\Http\Request;

class WeBeliveInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\WeBeliveIn  $weBeliveIn
     * @return \Illuminate\Http\Response
     */
    public function show(WeBeliveIn $weBeliveIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WeBeliveIn  $weBeliveIn
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $about = WeBeliveIn::find(1);
        return view('admin.about',compact('about','slug'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WeBeliveIn  $weBeliveIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$slug,$id)
    {
        $data = $request->all();

        $about = WeBeliveIn::find($id);
        if(isset($data['about'])){
           $about->about = $data['about']; 
        }
        if(isset($data['wbi1'])){
           $about->wbi1 = $data['wbi1']; 
        }
        if(isset($data['wbi2'])){
           $about->wbi2 = $data['wbi2']; 
        }
        if(isset($data['wbi3'])){
           $about->wbi3 = $data['wbi3']; 
        }
        if(isset($data['wbi4'])){
           $about->wbi4 = $data['wbi4']; 
        }
        if(isset($data['wbi5'])){
           $about->wbi5 = $data['wbi5']; 
        }
        if(isset($data['wbi6'])){
           $about->wbi6 = $data['wbi6']; 
        }
        if(isset($data['email'])){
           $about->email = $data['email']; 
        }
        if(isset($data['mobile'])){
           $about->mobile = $data['mobile']; 
        }
        if(isset($data['address'])){
           $about->address = $data['address']; 
        }
        if(isset($data['address2'])){
           $about->address2 = $data['address2']; 
        }
        if(isset($data['address3'])){
           $about->address3 = $data['address3']; 
        }
        if(isset($data['fb'])){
           $about->fb = $data['fb']; 
        }
        if(isset($data['tw'])){
           $about->tw = $data['tw']; 
        }
        if(isset($data['gl'])){
           $about->gl = $data['gl']; 
        }
        if(isset($data['lin'])){
           $about->lin = $data['lin']; 
        }
        if(isset($data['lat'])){
           $about->lat = $data['lat']; 
        }
        if(isset($data['lng'])){
           $about->lng = $data['lng']; 
        }
        
        if ($request->file('contact_image'))
        {
            $file           = $request->file('contact_image');
            $prefix         = 'product';
            $path           = 'uploads/images';
            // Retrieving file extension...
            $extension  = strtolower($file->getClientOriginalExtension());

            // Generating token value...
            $token = sha1(time().str_random(5));

            // Generating new file name...
            $file_name = $prefix."_".$token.".".$extension;
            // Uploading file...
            $file->move($path, $file_name);
            $about->contact_image = 'uploads/images/'.$file_name;
        }
        if ($request->file('about_image'))
        {
            $file           = $request->file('about_image');
            $prefix         = 'product';
            $path           = 'uploads/images';
            // Retrieving file extension...
            $extension  = strtolower($file->getClientOriginalExtension());

            // Generating token value...
            $token = sha1(time().str_random(5));

            // Generating new file name...
            $file_name = $prefix."_".$token.".".$extension;
            // Uploading file...
            $file->move($path, $file_name);
            $about->about_image = 'uploads/images/'.$file_name;
        }
        if ($request->file('product_image'))
        {
            $file           = $request->file('product_image');
            $prefix         = 'product';
            $path           = 'uploads/images';
            // Retrieving file extension...
            $extension  = strtolower($file->getClientOriginalExtension());

            // Generating token value...
            $token = sha1(time().str_random(5));

            // Generating new file name...
            $file_name = $prefix."_".$token.".".$extension;
            // Uploading file...
            $file->move($path, $file_name);
            $about->product_image = 'uploads/images/'.$file_name;
        }
        if ($request->file('brand_image'))
        {
            $file           = $request->file('brand_image');
            $prefix         = 'product';
            $path           = 'uploads/images';
            // Retrieving file extension...
            $extension  = strtolower($file->getClientOriginalExtension());

            // Generating token value...
            $token = sha1(time().str_random(5));

            // Generating new file name...
            $file_name = $prefix."_".$token.".".$extension;
            // Uploading file...
            $file->move($path, $file_name);
            $about->brand_image = 'uploads/images/'.$file_name;
        }
        if ($request->file('sister_image'))
        {
            $file           = $request->file('sister_image');
            $prefix         = 'product';
            $path           = 'uploads/images';
            // Retrieving file extension...
            $extension  = strtolower($file->getClientOriginalExtension());

            // Generating token value...
            $token = sha1(time().str_random(5));

            // Generating new file name...
            $file_name = $prefix."_".$token.".".$extension;
            // Uploading file...
            $file->move($path, $file_name);
            $about->sister_image = 'uploads/images/'.$file_name;
        }
        

        if($about->save())
        {
            return redirect()
            ->back()
            ->with('alert.status', 'success')
            ->with('alert.message', 'Save succesfully');
        }else
        {
            return redirect()
            ->back()
            ->with('alert.status', 'warning')
            ->with('alert.message', 'Save unsuccesfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WeBeliveIn  $weBeliveIn
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeBeliveIn $weBeliveIn)
    {
        //
    }
}
