<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use Illuminate\Validation\Rule;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(Request $request)
    {
    
        $brands = Brand::get('id');


    //     if($request->ajax()){
    //         return DataTables::of($brands)->make([true]);
    // }



        return view('dashboard.brands.index', compact('brands'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $article_data = [
            'en' => [
                'title'       => $request->input('en_title'),
                'description' => $request->input('en_description')
            ],
            'es' => [
                'title'       => $request->input('es_title'),
                'description' => $request->input('es_description')
            ],
        ];

        Brand::create($article_data); 
     
        return redirect()->route('dashboard.brands.index');

    }//end of store

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
   
        $task = Brand::find($id);
        $task->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.brands.index');
    }// end of destroy





    public function dataTable()
    {
        $brands = Brand::with([
            'brand'=>function($query){
                $query->where('locale' , 'en');
            }
        ])->get();
        
        return response()->json(['data'=>$brands]);

    }

}//end of controller 

