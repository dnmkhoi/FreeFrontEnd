<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Storage;
use App\categories;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsCate = categories::paginate(10);
        return view('backend.categories.index')
        ->with('dsCate',$dsCate);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new categories();
        $cat->cat_name = $request->input('cat_name');
        $cat->save();
        Session::flash('alert-warning', 'Thêm mới thành công');
        return redirect()->route('categories.index');//
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
        $cat = categories::find($id);

        return view('backend.categories.edit')
            ->with('cat', $cat);
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
        $cat = categories::find($id);
        $cat->cat_name = $request->input('cat_name');
        $cat->save();
        Session::flash('alert-warning','Cập nhật thành công');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = categories::find($id);
        $cat->delete();
        Session::flash('alert-danger','Xóa thành công');
        return redirect()->route('categories.index');
    }
}
