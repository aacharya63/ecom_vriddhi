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
            Blog::where(['id'=>$id])->update(['title'=>$data['title'], 'url'=>$data['url'], 'slug'=>$data['slug'], 'description'=>$data['description'], 'image'=>$filename]);
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

            $blog               =   new Blog();
            $blog->title        =   $data['title'];
            $blog->url          =   $data['url'];
            $blog->slug         =   $data['slug'];
            
            
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
