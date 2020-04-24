<?php

namespace App\Http\Controllers;
Use Alert;
use App\Category;
use Illuminate\Http\Request;

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
            $data = $request->all();
            $category = new Category();
            $category->name = $data['category_name'];
            $category->url = $data['category_url'];
            $category->parentId = $data['parent_category'];
            $category->description = $data['category_description'];
            
            $category->save();
            return redirect('admin/addCategory')->with('flsSucCat', 'Category Added Successfully');
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
            
            if (empty($data['product_desciption'])) {
                $data['product_desciption'] = '';
            }
            Category::where(['id'=>$id])->update(['parentId'=>$data['parent_category'], 'name'=>$data['category_name'], 'url'=>$data['category_url'], 'description'=>$data['category_description'], 'status'=>$data['category_status']]);
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
