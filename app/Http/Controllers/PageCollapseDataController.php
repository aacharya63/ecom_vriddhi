<?php

namespace App\Http\Controllers;

use App\PageCollapseData;
use Illuminate\Http\Request;

class PageCollapseDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCollapse(Request $request, $id=null)
    {
        return "addAttribute";
        if ($request->isMethod('post')) {
        $this->validate($request,[
            'sku' => 'required|min:5|max:35',
            'size' => 'required|min:5|max:35',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ],[
            'sku.required' => 'The Product attribute stock keeping unit field is required.',
            'sku.min' => ' The Product attribute stock keeping unit must be at least 5 characters.',
            'sku.max' => ' The Product attribute stock keeping unit must be less than 35 characters.',
            'size.required' => 'The Product attribute size field is required.',
            'size.min' => ' The Product attribute size be at least 5 characters.',
            'size.max' => ' The Product attribute size must be less than 35 characters.',
            'price.required' => 'The Product attribute price field is required.',
            'price.numeric' => ' The Product attribute price must be numeric.',
            'stock.required' => ' The Product attribute stock must be required.',
            'stock.numeric' => 'The Product attribute stock field must be numeric.',
        ]);
            $data = $request->all();
            foreach ($data['sku'] as $key => $value) {
                if (!empty($value)) {
                    $atr_count_sku = ProductAttribute::where('sku', $value)->count();
                    if ($atr_count_sku>0) {
                        Alert::success('SKU already exist', 'Error Message');
                        return redirect('admin/addAttribute/'.$id)->with('fls_err', 'SKU already exist');
                    }
                    $atr_count_size = ProductAttribute::where(['product_id'=>$id, 'size'=>$data['size'][$key]])->count();
                    if ($atr_count_size>0) {
                        Alert::success(''.$data['size'][$key].'size already exist', 'Error Message');
                        return redirect('admin/addAttribute/'.$id)->with('fls_err', ''.$data['size'][$key].'size already exist');
                    }
                    $attribute = new ProductAttribute;
                    $attribute->product_id = $id;
                    $attribute->sku = $value;
                    $attribute->size = $data['size'][$key];
                    $attribute->price = $data['price'][$key];
                    $attribute->stock = $data['stock'][$key];
                    $attribute->save();
                }
            }
            Alert::success('Attributes saved successfully', 'Success Message');
            return redirect('admin/addAttribute/'.$id)->with('success_msg', 'Attributes saved successfully');
        }
        $product_data = Product::with('product_attributes')->where(['id'=>$id])->first();
        return view('admin.collapse.addCollapse')->with(compact('product_data'));
    }

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
     * @param  \App\PageCollapseData  $pageCollapseData
     * @return \Illuminate\Http\Response
     */
    public function show(PageCollapseData $pageCollapseData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageCollapseData  $pageCollapseData
     * @return \Illuminate\Http\Response
     */
    public function edit(PageCollapseData $pageCollapseData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageCollapseData  $pageCollapseData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageCollapseData $pageCollapseData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageCollapseData  $pageCollapseData
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageCollapseData $pageCollapseData)
    {
        //
    }
}
