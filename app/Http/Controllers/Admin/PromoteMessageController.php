<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PromoteMessage;

class PromoteMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promote = PromoteMessage::paginate(10);
        return view("admin.promote.list",compact("promote"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $promote = new PromoteMessage();
        $promote->title_en     =$request->title_en;
        $promote->title_sp     =$request->title_sp;
        $promote->desc_en         =$request->desc_en;
        $promote->desc_sp         =$request->desc_sp;
        
        $promote->save();
        return redirect('admin/promote')->with('success','Successful Promote Message Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promote = PromoteMessage::find($id);
        return view("admin.promote.view",compact("promote"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promote = PromoteMessage::find($id);
        return view("admin.promote.edit",compact("promote"));
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
        $promote =PromoteMessage::find($id);
        $promote->title_en     =$request->title_en;
        $promote->title_sp     =$request->title_sp;
        $promote->desc_en      =$request->desc_en;
        $promote->desc_sp      =$request->desc_sp;        
        $promote->save();
        $promote->update($request->all());

        return redirect('admin/promote')->with('success','Successful Promote Message Updateds.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PromoteMessage::destroy($id);
        return back()->with('success','Successful Deleted.');
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
      
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
      
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
      
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
        
             $dest =public_path('images/ckeditor');
            //Upload File
            $request->file('upload')->move($dest, $filenametostore);
 
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/ckeditor/'.$filenametostore); 
            $msg = 'Image successfully uploaded'; 
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
             
            // Render HTML output 
            @header('Content-type: text/html; charset=utf-8'); 
            echo $re;
        }
    }
}
