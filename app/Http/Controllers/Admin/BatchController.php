<?php

namespace App\Http\Controllers\Admin;

use App\Batch;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::latest()->paginate(12);
        return view('admin.batch.index',compact('batches'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course =Course::pluck('course_name','id');
        return view('admin.batch.create',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'batch_name'=>'required',
            'starting_date'=>'required',
            'ending_date'=>'required',
            'course_id'=>'required'


        ]);

       $class_name = $request->get('course_id');
        $group_sub = $request->get('batch_name');


        if($class_name!=null){
            $routine = Batch::select('id')
                ->where('course_id' , '=' , $class_name)
                ->where('batch_name', '=', $group_sub)
                ->get();
            if(count($routine)>0){
                return back()->withErrors(['batch_name'=>' Batch Already Token '])->withInput();
            }

        }
        $batches = new Batch();
        $batches->batch_name= $request->batch_name;
        $batches->starting_date = $request->starting_date;
        $batches->ending_date = $request->ending_date;
        $batches->course_id = $request->course_id;

        $batches->save();
        $notification = array(
            'ttitle' => 'Course Batch Successfully Added',
            'tmsg' => 'You have added a Course Batch',
            'ticon' => 'success',
        );
        return back()->with($notification);


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
        //
    }
    public function deleteBatch(Request $request){

        Batch::find ( $request->id )->delete ();

        return response ()->json ();

    }
}
