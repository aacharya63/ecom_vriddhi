<?php

namespace App\Http\Controllers;
use Alert;
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
        
        if ($request->isMethod('post')) {
            $data = $request->all();
            foreach($data['subcontentTitle'] as $key => $no)
            {
                $pcd = new PageCollapseData;
                $pcd->pageId = $id;
                
                $pcd->title = $data['subcontentTitle'][$key];
                $pcd->description = $data['subcontentDis'][$key];
                
                $pcd->save();
            }

            Alert::success('Collapse data stored successfully', 'Success Message');
            return redirect()->back();    
        }
        return view('admin.collapse.addCollapse')->with(compact('id'));
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
        return 'view';
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
