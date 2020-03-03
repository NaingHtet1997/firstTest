<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Image;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blog']= Blog::orderByDesc('created_at')->paginate(5);
        return view('admin.blog.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'title_en' => 'required',
            'desc_en' =>'required',
                       
        ]);
        $blog=new Blog();
        $blog->title_en =$request->title_en;
        $blog->title_sp =$request->title_sp;
        $blog->subtitle_en =$request->subtitle_en;
        $blog->subtitle_sp =$request->subtitle_sp;
        $blog->author_en =$request->author_en;
        $blog->author_sp =$request->author_sp;
        $blog->desc_en =$request->desc_en;
        $blog->desc_sp =$request->desc_sp;
        $blog->created_by=auth()->user()->id;

          if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/blog');
            $img = Image::make($files)->resize(184, 138);
            $img->save($dest.'/'.$name);
            $files->move($dest,$name);
           $blog->image =$name;
        }


        $blog->save();

         // return back()->with('message','Successful Blog Added.');
          return redirect('admin/blog')->with('message','Successful Blog Added.');
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
         $data['blog'] =Blog::find($id);
        return view('admin.blog.edit',$data);
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

       
        $blog =Blog::find($id);
       


          if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/blog');
            $files->move($dest,$name);

           $blog->image =$name;
        }
        
        $blog->title_en=$request->title_en;
        $blog->title_sp=$request->title_sp;
        $blog->subtitle_en=$request->subtitle_en;
        $blog->subtitle_sp=$request->subtitle_sp;
        $blog->author_en =$request->author_en;
        $blog->author_sp =$request->author_sp;
        $blog->desc_en =$request->desc_en;
        $blog->desc_sp =$request->desc_sp;
      
        $blog->save();
         $blog->update($request->all());
         return redirect('admin/blog')->with('message','Successful Blog updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return back()->with('message','Successful delete blog');
    }
}
