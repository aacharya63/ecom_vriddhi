<?php

namespace App\Http\Controllers;
use Alert;
use App\Category;
use Illuminate\Http\Request;
use Image;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
        $category = Category::get();
        return view('admin.category.viewCategory')->with(compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        if($request->isMethod('post')){
            // $this->validate($request,[
            //     'category_name' => 'required',
            //     'parent_category' => 'required',
            //     'category_url' => 'required',
            //     'category_description' => 'required',
            // ],[
            //     'category_name.required' => 'The category name field is required.',
            //     'parent_category.required' => 'The parent category field is required.',
            //     'category_url.required' => 'The category url field is required.',
            //     'category_description.required' => 'The category description field is required',
            // ]);
            $data = $request->all();
            
            $category = new Category();
            
            $category->name = $data['category_name'];
            $category->url = $data['category_url'];
            $category->parentId = $data['parent_category'];
            $category->description = $data['category_description'];

            $category->author = $data['author'];
            $category->seo_description = $data['seo_description'];
            $category->keywords = $data['Keyword'];
            $category->og_title = $data['og_title'];
            $category->og_description = $data['og_description'];
            $category->og_type = $data['og_type'];
            $category->og_url = $data['og_url'];
            
            // ssssssssssss
            if($request->hasfile('category_img')) {
                
                $cat_img_tmp   =   Request('category_img');
                if ( $cat_img_tmp->isValid() ) {
            
                
                $cat_extension  =   $cat_img_tmp->getClientOriginalExtension();
                $cat_filename   =   rand(100,9999).'.'.$cat_extension;
                $cat_img_path   =   'uploads/category/'.$cat_filename;

                Image::make($cat_img_tmp)->resize(500,500)->save($cat_img_path);
                $category->category_img   =   $cat_filename;
                }
            }

            if ($request->hasfile('og_img')) {
                $og_img_tmp   =   Request('og_img');
                if ( $og_img_tmp->isValid() ) {
            
                
                $og_extension  =   $og_img_tmp->getClientOriginalExtension();
                $og_filename   =   rand(100,9999).'.'.$og_extension;
                $og_img_path   =   'uploads/seo/category/'.$og_filename;

                Image::make($og_img_tmp)->resize(500,500)->save($og_img_path);
                $category->og_image   =   $og_filename;
                }
            }
            // wwwwwwwwwww
            
            $category->save();
            Alert::success('Category saved successfully', 'Success Message');
            return redirect('admin/viewCategory')->with('flsSucCat', 'Category Added Successfully');
        }
        $str = Category::where(['parentId'=>0])->get();
        return view('admin.category.addCategory')->with(compact('str'));
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id=null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            
            // llllllllllllllllllllllllllll
            if ($request->hasfile('category_img')) {
                
                $catImg = Category::where('id',$id)->first();
                $imgPath = 'uploads/category/';
                if (file_exists($imgPath.$catImg->category_img)) {
                    unlink($imgPath.$catImg->category_img);
                }
                
                $img_tmp   =   Request('category_img');
                if ( $img_tmp->isValid() ) {
                    $extension  =   $img_tmp->getClientOriginalExtension();
                    $filename   =   rand(100,9999).'.'.$extension;
                    $img_path   =   'uploads/category/'.$filename;
                    Image::make($img_tmp)->resize(500,500)->save($img_path);
                }
            }
            else{
                $filename = $data['current_img_cat'];
            }
            if (empty($data['category_description'])) {
                $data['category_description'] = '';
            }
            
            if ($request->hasfile('og_image')) {
                
                $catImgo = Category::where('id',$id)->first();
                $imgPatho = 'uploads/seo/category/';
                if (file_exists($imgPatho.$catImgo->og_image)) {
                    unlink($imgPatho.$catImgo->og_image);
                }
                
                $img_tmpo   =   Request('og_image');
                if ( $img_tmpo->isValid() ) {
                    $extensiono  =   $img_tmpo->getClientOriginalExtension();
                    $filenameo   =   rand(100,9999).'.'.$extensiono;
                    $img_patho   =   'uploads/seo/category/'.$filenameo;
                    Image::make($img_tmpo)->resize(500,500)->save($img_patho);
                }
            }
            else{
                $filenameo = $data['current_img_og'];
            }
            if (empty($data['seo_description'])) {
                $data['seo_description'] = '';
            }
            if (empty($data['og_description'])) {
                $data['og_description'] = '';
            }
            // llllllllllllllllllllllllllllll
            
            Category::where(['id'=>$id])->update
            (
                [
                    'parentId'=>$data['parent_category'],
                    'name'=>$data['category_name'],
                    'url'=>$data['category_url'],
                    'description'=>$data['category_description'],
                    'status'=>$data['category_status'],

                    'category_img'=>$filename,
                    'author'=>$data['author'],
                    'seo_description'=>$data['seo_description'],
                    'keywords'=>$data['Keyword'],
                    'og_title'=>$data['og_title'],
                    'og_description'=>$data['og_description'],
                    'og_type'=>$data['og_type'],
                    'og_url'=>$data['og_url'],
                    'og_image'=>$filenameo,
                ]
            );
            Alert::success('Category updated successfully', 'Success Message');
            return redirect('admin/viewCategory')->with('fls_suc_msg_ep', 'Category updated successfully');
        }
        $category_dtl =  Category::where(['id'=>$id])->first();
        $category = Category::where(['parentId'=>0])->get();
        $catDdl =   "<option value='' selected='selected' disabled='disabled'>--Select--</option>";
        foreach ($category as $cat) {
           if ($cat->id==$category_dtl->categoryId) {
               $selected = "selected";
           }else{
               $selected = "";
           }
           $catDdl.="<option value='".$cat->id."'".$selected.">".$cat->name."</option>";
        }
        $sc = Category::where(['parentId'=>$cat->id])->get();
        foreach ($sc as $s) {
            if ($cat->id==$category_dtl->categoryId) {
                $selected = "selected";
            }else{
                $selected = "";
            }
            $catDdl.="<option value='".$sc->id."'".$selected.">".$sc->name."</option>";
        }
        return view('admin.category.editCategory')->with(compact('category_dtl', 'catDdl', 'sc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id=null)
    {
        $category_delete = Category::where('id',$id)->delete();
        Alert::success('Category deleted successfully', 'Success Message');
        return redirect()->back()->with('fls_suc_msg_cat', 'Product deleted successfully');
    }
    public function ucs(Request $request)
    {
        $category = Category::find($request->id);
        $category->status = $request->status;
        $category->save();
    
        return response()->json(['success'=>'Category Status change successfully.']);
    }
}
