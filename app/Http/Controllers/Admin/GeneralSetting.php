<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\BasicSetting;
use App\User;
use App\Models\Faq;
use App\Models\Social;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use File;
use Image;

class GeneralSetting extends Controller
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

    public function manageLogo()
    {
       
        return view('admin.setting.logo');
    }

     public function updateLogo(Request $request)
    {
        $this->validate($request, [
            'logo' => 'mimes:png',
            'logo' => 'mimes:jpg',

        ]);
        
        if ($request->hasFile('favicon')) {
            $image = $request->file('favicon');
            $filename = 'favicon.png';
            $dest =public_path('template/images/logo');
            $image->move($dest,$filename);
        }
       
        return back()->with('success','Successfully logo uploaded');
    }

    
    public function manageFooter()
    {
         $data['basic'] = BasicSetting::first();
       
        return view('admin.setting.footer',$data);
    }
    public function updateFooter(Request $request)
    {
        $basic = BasicSetting::first();
        $this->validate($request,[
            'copyright' => 'required',
            'sitename_en' => 'required',
            'sitename_sp' => 'required',
        ]);
        $in = Input::except('_method','_token');
        $basic->fill($in)->save();
        return back()->with('success','Footer Updated Successfully');
       
    }

    public function manageContact()
    {
        $data['basic'] = BasicSetting::first();
       
        return view('admin.setting.contact',$data);
    }

    public function updateContact(Request $request)
    {
        $basic = BasicSetting::first();
        $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'address_en' => 'required',
            'address_sp' => 'required',
            
            
        ]);
        $in = Input::except('_method','_token');
        $basic->fill($in)->save();
        
        return back()->with('success','Contact  Updated Successfully.');
    }

   

    public function manageAbout()
    {
        $data['basic'] = BasicSetting::first();
        return view('admin.setting.about',$data);
    }
    public function updateAbout(Request $request)
    {
        $basic = BasicSetting::first();
        $this->validate($request,[
            'about_en' => 'required',
            'about_sp' => 'required',
            'vission_en' =>'required',
            'vission_sp' =>'required',
            'mission_en' =>'required',
            'mission_sp' =>'required',
        ]);
        $basic->about_en = $request->about_en;
        $basic->about_sp = $request->about_sp;
        $basic->vission_en = $request->vission_en;
        $basic->vission_sp = $request->vission_sp;
        $basic->mission_en = $request->mission_en;
        $basic->mission_sp = $request->mission_sp;
        $basic->save();

        return back()->with('success','About Page Updated Successfully.');
    }
}
