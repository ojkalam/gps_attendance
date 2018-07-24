<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssignedTask;
use App\User;
use App\Batch;

class AssignedTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alltask = AssignedTask::all();

        return view('admin.show_assigned_class',compact('alltask'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $allbatch = Batch::all();
        $alluser = User::all();

       // dd($allbatch);

        return view('admin.assigned_class_to_teachers', compact(['allbatch','alluser']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $at = new AssignedTask;
            $this->validate($request,[
                   'user_id'=>'required',
                   'batch_id'=>'required',
                   'schedule_date'=>'required',
                ]);

           $at->user_id = $request->user_id;
           $at->batch_id = $request->batch_id;
           $at->schedule_date = $request->schedule_date;

           $at->save();        
        
        return redirect('/admin/assigned_class')->with('status', "Schedule Assigned to the Teacher !");
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
        $atask = AssignedTask::find($id);

        $atask->delete();

        return redirect('admin/assigned_class')->with('status', 'Assigned Task deleted Successfully !');
    }
}
