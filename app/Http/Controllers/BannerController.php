<?php

namespace App\Http\Controllers;
use Image;
use App\Banner;
use Illuminate\Http\Request;
Use Alert;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ubs(Request $request)
    {
        $banner = Banner::find($request->id);
        $banner->status = $request->status;
        $banner->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request,[
                'banner_name' => 'required',
                'text_style' => 'required',
                'sort_order' => 'required|numeric',
                'banner_content' => 'required',
                'banner_link' => 'required',
                'banner_img' => 'required',
                
            ],[
                'banner_name.required' => ' The Banner name field is required.',
                // 'banner_name.min' => ' The Banner name must be at least 5 characters.',
                // 'banner_name.max' => ' The Banner name may not be greater than 35 characters.',
                
                'text_style.required' => ' The Banner text style field is required.',
                // 'text_style.min' => ' The Banner text style must be at least 5 characters.',
                // 'text_style.max' => ' The Banner text style may not be greater than 35 characters.',

                'sort_order.required' => ' The Banner sort order field is required.',
                'sort_order.numeric' => ' The Banner sort order must be numeric.',
                
                'banner_content.required' => ' The Banner content field is required.',
                // 'banner_content.min' => ' The Banner content must be at least 5 characters.',
                // 'banner_content.max' => ' The Banner content may not be greater than 35 characters.',

                'banner_link.required' => ' The Banner link field is required.',
                // 'banner_link.min' => ' The Banner link must be at least 5 characters.',
                // 'banner_link.max' => ' The Banner link may not be greater than 35 characters.',

                'banner_img.required' => ' The Banner image must be uploaded.',
                
            ]);
            $data = $request->all();
            $banner = new Banner;
            $banner->name = $data['banner_name'];
            $banner->text_style  = $data['text_style'];
            $banner->sort_order = $data['sort_order'];
            $banner->content = $data['banner_content'];
            $banner->link = $data['banner_link'];
            if ($request->hasFile('banner_img')) {
                $image_tmp = Request('banner_img');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999).'.'.$extension;
                    $banner_path = 'uploads/banner/'.$filename;
                    Image::make($image_tmp)->save($banner_path);
                    $banner->img = $filename;
                }
            }
            $banner->save();
            Alert::success('Banner Added successfully', 'Success Message');
            return redirect('/admin/banner')->with('fls_msg_suc_ban', 'Banner information saved successfully');
        }

        $banner_data = Banner::all();
        
        return view('admin.banner.banner')->with('banner_data', $banner_data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addBanner()
    {
        return view('admin.banner.addBanner');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id=null){
            if ($request->isMethod('post')) {
                $data = $request->all();
                if ($request->hasfile('banner_img')) {
                    echo $img_tmp   =   Request('banner_img');
                    if ( $img_tmp->isValid() ) {
                        $extension  =   $img_tmp->getClientOriginalExtension();
                        $filename   =   rand(100,9999).'.'.$extension;
                        $img_path   =   'uploads/banner/'.$filename;
                        Image::make($img_tmp)->resize(500,500)->save($img_path);
                    }
                }
                else{
                    $filename = $data['current_img'];
                }
                if (empty($data['banner_content'])) {
                    $data['banner_content'] = '';
                }
                Banner::where(['id'=>$id])->update(['name'=>$data['banner_name'], 'text_style'=>$data['text_style'], 'sort_order'=>$data['sort_order'], 'content'=>$data['banner_content'], 'link'=>$data['banner_link'], 'img'=>$filename]);
                return redirect('admin/banner')->with('fls_suc_msg_ban', 'Banner Data updated successfully');
            }
            $banner_dtl =  Banner::where(['id'=>$id])->first();
            
            return view('admin.banner.editBanner')->with(compact('banner_dtl'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id=null){
        $banner_delete = Banner::where('id',$id)->delete();
        Alert::success('Banner deleted successfully', 'Success Message');
        return redirect()->back()->with('fls_suc_msg_db', 'Banner deleted successfully');
    }
}
