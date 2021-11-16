<?php

namespace App\Http\Controllers\Dashboard;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::whenSearch(request()->search)->orderBy('id', 'DESC')->paginate(4);
        
        return view('dashboard.tasks.index' , compact('tasks'));

    }// End Of Index

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tasks.create');

    }// End Of Create

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($reques/t->all());

            $this->validate($request , [
    
                'title'  => 'string|required',
                'photo'  => 'required',
    
            ]);// End Of Validateion
    
            //----------------------Upload Photo-----------------------------
            $request_data = $request->except([ 'photo' ]);

            if ($request->photo) {

                Image::make($request->photo)
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(public_path('uploads/' . $request->photo->hashName()));
    
                $request_data['photo'] = $request->photo->hashName();
    
            }//end of if
         
            //----------------------End Upload Photo-----------------------------



           $task = Task::create($request_data);
           session()->flash('success', __('site.deleted_successfully'));
    
            return redirect()->route('dashboard.tasks.index')->with('success' , 'Success');
    
    }// End of Store

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);

        return view('dashboard.tasks.edit' , compact('task'));
     
    }// End of Edit

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $task = Task::find($id);
        $this->validate($request , [
    
            'title'  => 'string|required',
            'photo'  => 'required',

        ]);// End Of Validateion

        //----------------------Upload Photo-----------------------------
        $request_data = $request->except([ 'photo' ]);

        if ($request->photo) {

            Image::make($request->photo)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/' . $request->photo->hashName()));

            $request_data['photo'] = $request->photo->hashName();

        }//end of if
     
        //----------------------End Upload Photo-----------------------------



       $task->update($request_data);


        return redirect()->route('dashboard.tasks.index')->with('success' , 'Success');
       session()->flash('success', __('site.updated_successfully'));


    }// End of update 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $task = task::find($id);
        $task->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.tasks.index');
    }// end of destroy

}//end of controller 
