<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Hash;
use Session;

session_start();
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

    public function leader()
    {
       $contents =  DB::table('leadership')
          ->get();

        return view('admin.leadership')->with('contents',$contents);
    }

    public function add_leader()
    {

        return view('admin.add_leadership');
    }

    public function save_leader(Request $request){

        $lead = array();

        $lead['name'] = $request->name;
        $lead['designation'] = $request->designation;
        $lead['description'] = $request->description;
        $lead['status'] = $request->status;
        if($request->status){
            $lead['status'] = $request->status;
        }else{
            $lead['status'] = 0;
        }

        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $lead['image'] = $image_url;
                DB::table('leadership')->insert($lead);
                Session::put('lead','success');
                return Redirect::to('/add-lead');
            }
        }

    }
    public function edit_leader($id)
    {
       $contents =  DB::table('leadership')
                    ->where('id',$id)
                    ->first();

        return view('admin.edit_leadership')->with('contents',$contents);
    }

    public function update_leader($id,Request $request)
    {

       $lead1 = array();

        $lead1['name'] = $request->name;
        $lead1['designation'] = $request->designation;
        $lead1['description'] = $request->description;
        $lead1['status'] = $request->status;
        if($request->status){
            $lead1['status'] = $request->status;
        }else{
            $lead1['status'] = 0;
        }

        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $lead1['image'] = $image_url;
                DB::table('leadership')->where('id',$id)->update($lead1);
                Session::put('l_s','success');
                return Redirect::to('/leadership');
            }
        }else{
                DB::table('leadership')->where('id',$id)->update($lead1);
                Session::put('l_s','success');
                return Redirect::to('/leadership');
        }
    }

    public function gallary()
    {
      $contents =  DB::table('gallary')
           ->join('gallary_category','gallary.category_id','=','gallary_category.id')
           ->select('gallary.*','gallary_category.category')
           ->get();

        return view('admin.gallary')->with('contents',$contents);
    }
    public function add_gallary()
    {

        return view('admin.add_gallary');
    }

    public function save_gallary(Request $request){

        $gallary = array();

        $gallary['category_id'] = $request->category_id;
        
        if($request->status){
            $gallary['status'] = $request->status;
        }else{
            $gallary['status'] = 0;
        }

        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $gallary['image'] = $image_url;
                DB::table('gallary')->insert($gallary);
                Session::put('gallary','success');
                return Redirect::to('/add/gallary');
            }
        }

    }

    public function edit_gallary($id)
    {
       $content =  DB::table('gallary')
                    ->where('id',$id)
                    ->first();

        return view('admin.edit_gallary')->with('content',$content);
    }

    public function update_gallary(Request $request,$id){
      
        $gallary = array();

        $gallary['category_id'] = $request->category_id;
        
        if($request->status){
            $gallary['status'] = $request->status;
        }else{
            $gallary['status'] = 0;
        }

        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $gallary['image'] = $image_url;
                DB::table('gallary')->where('id',$id)->update($gallary);
                Session::put('d_g','success');
                return Redirect::to('/gallary');
            }
        }else{
                DB::table('gallary')->where('id',$id)->update($gallary);
                Session::put('d_g','success');
                return Redirect::to('/gallary');
        }


    }

    public function delete_gallary($id){

         DB::table('gallary')
         ->where('id',$id)
         ->delete();
         Session::put('d_g','success');
         return Redirect::to('/gallary');

    }

    public function delete_category($id){

        DB::table('gallary_category')
        ->where('id',$id)
        ->delete();
        Session::put('g_c','success');
        return Redirect::to('/gallary/category');

   }

   public function delete_leader($id){

    DB::table('leadership')
    ->where('id',$id)
    ->delete();
    Session::put('l_s','success');
    return Redirect::to('/leadership');

   }

    public function add_category()
    {

        return view('admin.add_category');
    }
    public function gallary_category()
    {
       $contents = DB::table('gallary_category')
        ->get();
        return view('admin.gallary_category')->with('contents',$contents);
    }

    public function save_category(Request $request)
    {
        $category = array();
        $category['category'] = $request->c_name;
        if($request->status){
            $category['status'] = $request->status;
        }else{
            $category['status'] = 0;
        }
        
        DB::table('gallary_category')
          ->insert($category);
        Session::put('cat','Success');  
        return Redirect::to('/add/category');
    }
    public function edit_category($id)
    {
       $content =  DB::table('gallary_category')
                    ->where('id',$id)
                    ->first();

        return view('admin.edit_category')->with('content',$content);
    }

    public function update_category(Request $request,$id){
        $category = array();
        $category['category'] = $request->c_name;
        if($request->status){
            $category['status'] = $request->status;
        }else{
            $category['status'] = 0;
        }
        
        DB::table('gallary_category')
           ->where('id',$id)
          ->update($category);
        Session::put('g_c','Success');  
        return Redirect::to('/gallary/category');

    }

}
