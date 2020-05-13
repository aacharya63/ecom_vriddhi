<?php

namespace App\Http\Controllers;

use App\FrontPages;
use Illuminate\Http\Request;
use View;
use Image;
use Alert;
class FrontPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frontpage_data = FrontPages::all();
        return View::make('admin.pages.page')->with('frontpage_data', $frontpage_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
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
                'title' => 'required',
                'img'   =>  'required',
                'description'    => 'required|min:5|max:35',
            ],[
                'title.required' => ' The Product color field is required.',
                'description.required' => ' The Product discription field is required.',
                'description.min' => ' The Product discription must be at least 5 characters.',
                'description.max' => ' The Product discription may not be greater than 35 characters.',
                
                'img.required' => ' The Product image must be uploaded.',
                
            ]);
                $data   =   $request->all();
                

                $fp    =   new FrontPages();
                
                $fp->title  =   $data['title'];
            
                $fp->author  =   $data['author'];
                $fp->keywords  =   $data['Keyword'];
                $fp->og_title  =   $data['og_title'];
                $fp->og_type  =   $data['og_type'];
                $fp->og_url  =   $data['og_url'];

                // dddddddddddd
                if (!empty($data['og_description'])) {
                    $fp->og_description    =   $data['og_description'];
                }else{
                    $fp->og_description    =   '';
                }
                if (!empty($data['pgCon'])) {
                    $fp->pgCon    =   $data['pgCon'];
                }else{
                    $fp->pgCon    =   '';
                }
                if (!empty($data['seo_description'])) {
                    $fp->seo_description    =   $data['seo_description'];
                }else{
                    $fp->seo_description    =   '';
                }
                if ($request->hasfile('og_img')) {
                    $img_tmpo   =   Request('og_img');
                    if ( $img_tmpo->isValid() ) {
                        
                    
                    $extensiono  =   $img_tmpo->getClientOriginalExtension();
                    $filenameo   =   rand(100,9999).'.'.$extensiono;
                    $img_patho   =   'uploads/seo/frontPages/'.$filenameo;

                    Image::make($img_tmpo)->resize(1500,1500)->save($img_patho);
                    $fp->og_image   =   $filenameo;
                    }
                }
                // wwwwwwwwwww
                if (!empty($data['description'])) {
                    $fp->description    =   $data['description'];
                }else{
                    $fp->description    =   '';
                }
                if ($request->hasfile('img')) {
                    $img_tmp   =   Request('img');
                    if ( $img_tmp->isValid() ) {
                        
                    
                    $extension  =   $img_tmp->getClientOriginalExtension();
                    $filename   =   rand(100,9999).'.'.$extension;
                    $img_path   =   'uploads/frontPages/'.$filename;

                    Image::make($img_tmp)->resize(1500,1500)->save($img_path);
                    $fp->header_img   =   $filename;
                    }
                }
                $fp->save();
                Alert::success('Information store successfully', 'Success Message');
                return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FrontPages  $frontPages
     * @return \Illuminate\Http\Response
     */
    public function show(FrontPages $frontPages, $id=null)
    {
        $fp_data = FrontPages::where('id',$id)->first();

        return view('admin.pages.show',compact('fp_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FrontPages  $frontPages
     * @return \Illuminate\Http\Response
     */
    public function edit(FrontPages $frontPages, $id=null)
    {
        $fp_data = FrontPages::where('id',$id)->first();

        return view('admin.pages.edit',compact('fp_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FrontPages  $frontPages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrontPages $frontPages, $id=null)
    {
        // dddddddddddddddd
        $data = $request->all();
        // print "<pre>";
        // print_r($data);
        // die;
            if ($request->hasfile('img')) {
                
                $fp = FrontPages::where('id',$id)->first();
                $imgPath = 'uploads/frontPages/';
                if (file_exists($imgPath.$fp->header_img)) {
                    unlink($imgPath.$fp->header_img);
                }
                
                $img_tmp   =   Request('img');
                if ( $img_tmp->isValid() ) {
                    $extension  =   $img_tmp->getClientOriginalExtension();
                    $filename   =   rand(100,9999).'.'.$extension;
                    $img_path   =   'uploads/frontPages/'.$filename;
                    Image::make($img_tmp)->resize(1500,1500)->save($img_path);
                }
            }
            else{
                $filename = $data['current_img'];
            }
            if (empty($data['description'])) {
                $data['description'] = '';
            }

            // 
            if ($request->hasfile('og_img')) {
                
                $fpo = FrontPages::where('id',$id)->first();
                $imgPatho = 'uploads/seo/frontPages/';
                if (file_exists($imgPatho.$fpo->og_image)) {
                    unlink($imgPatho.$fpo->og_image);
                }
                
                $img_tmpo   =   Request('og_img');
                if ( $img_tmpo->isValid() ) {
                    $extensiono  =   $img_tmpo->getClientOriginalExtension();
                    $filenameo   =   rand(100,9999).'.'.$extensiono;
                    $img_patho   =   'uploads/seo/frontPages/'.$filenameo;
                    Image::make($img_tmpo)->resize(500,500)->save($img_patho);
                }
            }
            else{
                $filenameo = $data['current_imgp'];
            }
            if (empty($data['seo_description'])) {
                $data['seo_description'] = '';
            }
            if (empty($data['og_description'])) {
                $data['og_description'] = '';
            }
            // 

            FrontPages::where(['id'=>$id])->update(['title'=>$data['title'], 'pgCon'=>$data['pgCon'] ,'description'=>$data['description'], 'header_img'=>$filename, 'author'=>$data['author'], 'seo_description'=>$data['seo_description'], 'keywords'=>$data['Keyword'], 'og_title'=>$data['og_title'], 'og_description'=>$data['og_description'], 'og_type'=>$data['og_type'], 'og_url'=>$data['og_url'], 'og_image'=>$filenameo]);
            Alert::success('Page information updated successfully', 'Success Message');
            return redirect()->back();
        // ssssssssssss
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FrontPages  $frontPages
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrontPages $frontPages, $id=null)
    {
        $fp_delete = FrontPages::where('id',$id)->first();
        $imgPath = 'uploads/frontPages/';
        if (file_exists($imgPath.$fp_delete->header_img)) {
            unlink($imgPath.$fp_delete->header_img);
        }
        FrontPages::where('id',$id)->delete();
        Alert::success('Page information deleted successfully', 'Success Message');
        return redirect()->route('page.index');
    }

    public function ups(Request $request)
    {
        $fp = FrontPages::find($request->id);
        $fp->status = $request->status;
        $fp->save();
    
        return response()->json(['success'=>'Status change successfully.']);
    }
}
