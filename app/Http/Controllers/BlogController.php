<?php

namespace App\Http\Controllers;
use Alert;
use App\Blog;
use Illuminate\Http\Request;
use Image;
use View;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $blog_data = Blog::get();
        return view('admin.blogs.viewBlog')->with(compact('blog_data'));
    }

    public function editBlog(Request $request, $get_id=null)
    {
        $id = decrypt($get_id);
        
        if ($request->isMethod('post')) {
            $data = $request->all();
            if ($request->hasfile('img')) {
                
                $blogImg = Blog::where('id',$id)->first();
                $imgPath = 'uploads/blogs/';
                if (file_exists($imgPath.$blogImg->image)) {
                    unlink($imgPath.$blogImg->image);
                }
                
                $img_tmp   =   Request('img');
                if ( $img_tmp->isValid() ) {
                    $extension  =   $img_tmp->getClientOriginalExtension();
                    $filename   =   rand(100,9999).'.'.$extension;
                    $img_path   =   'uploads/blogs/'.$filename;
                    Image::make($img_tmp)->resize(500,500)->save($img_path);
                }
            }
            else{
                $filename = $data['current_img'];
            }
            if (empty($data['description'])) {
                $data['description'] = '';
            }
            
            if ($request->hasfile('og_image')) {
                
                $blogImgo = Blog::where('id',$id)->first();
                $imgPatho = 'uploads/seo/blogs/';
                if (file_exists($imgPatho.$blogImgo->og_image)) {
                    unlink($imgPatho.$blogImgo->og_image);
                }
                
                $img_tmpo   =   Request('og_image');
                if ( $img_tmpo->isValid() ) {
                    $extensiono  =   $img_tmpo->getClientOriginalExtension();
                    $filenameo   =   rand(100,9999).'.'.$extensiono;
                    $img_patho   =   'uploads/seo/blogs/'.$filenameo;
                    Image::make($img_tmpo)->resize(500,500)->save($img_patho);
                }
            }
            else{
                $filenameo = $data['current_imgo'];
            }
            if (empty($data['seo_description'])) {
                $data['seo_description'] = '';
            }
            if (empty($data['og_description'])) {
                $data['og_description'] = '';
            }
            
            Blog::where(['id'=>$id])->update(['title'=>$data['title'], 'url'=>$data['url'], 'slug'=>$data['slug'], 'description'=>$data['description'], 'image'=>$filename, 'author'=>$data['author'], 'seo_description'=>$data['seo_description'], 'keywords'=>$data['Keyword'], 'og_title'=>$data['og_title'], 'og_description'=>$data['og_description'], 'og_type'=>$data['og_type'], 'og_url'=>$data['og_url'], 'og_image'=>$filenameo]);
            Alert::success('Blog updated successfully', 'Success Message');
            return redirect()->back();
        }
        
        
        $blog_data = Blog::find($id);
        return view('admin.blogs.editBlog')->with(compact('blog_data', 'get_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request,[
                'title' => 'required',
                'url' => 'required',
                'slug' => 'required',
                'description' => 'required',
                'img' => 'required',
            ],[
                'title.required' => 'The Blog title field is required.',
                'url.required' => 'The link url field is required.',
                'slug.required' => 'The Blog slug field is required.',
                'description.required' => 'The Blog description field is required.',
                'img.required' => 'Image must be uploaded',
            ]);

            $data   =   $request->all();
            // print "<pre>";
            // print_r($data);
            // die;

            $blog               =   new Blog();
            $blog->title        =   $data['title'];
            $blog->url          =   $data['url'];
            $blog->slug         =   $data['slug'];
            
            $blog->author   =   $data['author'];
            $blog->Keywords         =   $data['Keyword'];
            $blog->og_title         =   $data['og_title'];
            $blog->og_type         =   $data['og_type'];
            $blog->og_url         =   $data['og_url'];
            
            if (!empty($data['seo_description'])) {
                $blog->seo_description    =   $data['seo_description'];
            }else{
                $blog->seo_description    =   '';
            }

            if (!empty($data['og_description'])) {
                $blog->og_description    =   $data['og_description'];
            }else{
                $blog->og_description    =   '';
            }

            if ($request->hasfile('og_img')) {
                $og_img_tmp   =   Request('og_img');
                if ( $og_img_tmp->isValid() ) {
            
                
                $og_extension  =   $og_img_tmp->getClientOriginalExtension();
                $og_filename   =   rand(100,9999).'.'.$og_extension;
                $og_img_path   =   'uploads/seo/blogs/'.$og_filename;

                Image::make($og_img_tmp)->resize(500,500)->save($og_img_path);
                $blog->og_image   =   $og_filename;
                }
            }

            if (!empty($data['description'])) {
                $blog->description    =   $data['description'];
            }else{
                $blog->description    =   '';
            }
            if ($request->hasfile('img')) {
                $img_tmp   =   Request('img');
                if ( $img_tmp->isValid() ) {
            
                
                $extension  =   $img_tmp->getClientOriginalExtension();
                $filename   =   rand(100,9999).'.'.$extension;
                $img_path   =   'uploads/blogs/'.$filename;

                Image::make($img_tmp)->resize(500,500)->save($img_path);
                $blog->image   =   $filename;
                }
            }
            $blog->save();
            Alert::success('Blog saved successfully', 'Success Message');
            return redirect('/admin/viewBlog');
        }
        return view('admin.blogs.addBlog');
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
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function deleteBlog(Request $request, $id=null)
    {
        $id = decrypt($id);
        
        $blog_delete = Blog::where('id',$id)->first();
        $imgPath = 'uploads/blogs/';
        if (file_exists($imgPath.$blog_delete->image)) {
            unlink($imgPath.$blog_delete->image);
        }
        Blog::where('id',$id)->delete();
        Alert::success('Blog deleted successfully', 'Success Message');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
