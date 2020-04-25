<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $contents = Content::where('type',$slug)->get();
        return view('admin.content.index',compact('slug','contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        return view('admin.content.create',compact('slug'));
    }

    public function edit($slug,$id)
    {
        $content = Content::find($id);
        return view('admin.content.edit',compact('slug','content'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$slug)
    {
        if($slug=='about')
        {
            $validatedData = $request->validate([
                'title'             => 'required',
                'summery'              => 'required',
                'details'              => 'required',
            ]);
        }elseif($slug=='products-solutions')
        {
            $validatedData = $request->validate([
                'title'             => 'required',
                'summery'              => 'required',
                'details'              => 'required',
                'image'              => 'required|image',
                'thumnail'              => 'required|image',
            ]);
        }else
        {
            $validatedData = $request->validate([
                'title'             => 'required',
                'summery'              => 'required',
                'details'              => 'required',
                'thumnail'              => 'required|image',
            ]);
        }
        

        $data = $request->all();

        if ($request->file('image'))
        {
            $file           = $request->file('image');
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
            $image = 'uploads/images/'.$file_name;
        }
        else
        {
            $image = null;
        }

        if ($request->file('thumnail'))
        {
            $file           = $request->file('thumnail');
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
            $thumnail = 'uploads/images/'.$file_name;
        }
        else
        {
            $thumnail = null;
        }
        if(isset($data['status']))
        {
            $status = 1;
        }else
        {
            $status = 0;
        }
        if(isset($data['type']))
        {
            $type = $data['type'];
        }else
        {
            $type = null;
        }

       
        $content = new Content();

        $content->title = $data['title'];
        $content->summery = $data['summery'];
        $content->details = $data['details'];
        $content->status = $status;
        $content->image = $image;
        $content->thumnail = $thumnail;
        $content->type = $slug;
        $content->sub_type = $type;
        if($content->save())
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

    public function update(Request $request,$slug)
    {
        if($slug=='about')
        {
            $validatedData = $request->validate([
                'type'             => 'required',
                'title'             => 'required',
                'summery'              => 'required',
                'details'              => 'required',
            ]);
        }elseif($slug=='products-solutions')
        {
            $validatedData = $request->validate([
                'title'             => 'required',
                'summery'              => 'required',
                'details'              => 'required',
                'image'              => 'image',
                'thumnail'              => 'image',
            ]);
        }else
        {
            $validatedData = $request->validate([
                'title'             => 'required',
                'summery'              => 'required',
                'details'              => 'required',
                'thumnail'              => 'image',
            ]);
        }
        

        $data = $request->all();
        $content = Content::find($data['id']);
        if ($request->file('image'))
        {
            $file           = $request->file('image');
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
            $content->image = 'uploads/images/'.$file_name;
        }

        if ($request->file('thumnail'))
        {
            $file           = $request->file('thumnail');
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
            $content->thumnail = 'uploads/images/'.$file_name;
        }

        if(isset($data['status']))
        {
            $status = 1;
        }else
        {
            $status = 0;
        }
        if(isset($data['type']))
        {
            $type = $data['type'];
        }else
        {
            $type = null;
        }



        

        $content->id = $data['id'];
        $content->title = $data['title'];
        $content->summery = $data['summery'];
        $content->details = $data['details'];
        $content->status = $status;
       
        $content->type = $slug;
        $content->sub_type = $type;
        if($content->Update())
        {
            return redirect()
            ->back()
            ->with('alert.status', 'success')
            ->with('alert.message', 'Update succesfully');
        }else
        {
            return redirect()
            ->back()
            ->with('alert.status', 'warning')
            ->with('alert.message', 'Update unsuccesfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function delete($slug,$id)
    {
        $content = Content::find($id);

        if($content->delete())
        {
            return redirect()
            ->back()
            ->with('alert.status', 'success')
            ->with('alert.message', 'Delete Succesfully');
        }else
        {
            return redirect()
            ->back()
            ->with('alert.status', 'warning')
            ->with('alert.message', 'Delete Unsuccesfully');
        }
    }
}
