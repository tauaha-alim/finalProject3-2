<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project::latest()->paginate(10);
        return view('admin.project.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
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

            'project_name' => 'required',
            'total_price' => 'required',
            'start_time' => 'required',
            'project_expanse' => 'required',
           
            'project_income' => 'required',
        ]);


        $courses = new Project();
        $courses->project_name = $request->project_name ;
        $courses->total_price = $request->total_price ;
        $courses->start_time = $request->start_time ;
        $courses->end_time = $request->end_time;
        $courses->project_expanse = $request->project_expanse;
        $courses->amount = $request->project_income;
        $courses->save();

        $notification = array(
            'ttitle' => 'Investor Details Successfully Added',
            'tmsg' => 'You have added a Investor Details',
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
        $data = Project::find($id);
        return view('admin.project.edit',compact('data'));
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

        $this->validate($request,[

            'project_name' => 'required',
            'total_price' => 'required',
            'start_time' => 'required',
            'project_expanse' => 'required',
            'project_income' => 'required',
        ]);


        $courses = Project::find($id);
        $courses->project_name = $request->project_name ;
        $courses->total_price = $request->total_price ;
        $courses->start_time = $request->start_time ;
        $courses->end_time = $request->end_time;
        $courses->project_expanse = $request->project_expanse;
        $courses->amount = $request->project_income;
        $courses->save();

        $notification = array(
            'ttitle' => 'Project Details Successfully Added',
            'tmsg' => 'You have added a Project Details',
            'ticon' => 'success',
        );
        return back()->with($notification);


    }


    public function deleteProject(Request $request){
        Project::find ( $request->id )->delete ();
        return response ()->json ();
    }

     public function projectSearch()
    {
       
         $q = Input::get ( 'q' );
    if($q != ""){
    $data = Project::
       
    where(function ($search) {
    $search->where ( 'project_name', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
    ->orwhere ( 'start_time', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
    ->orwhere ( 'end_time', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
    
;
    
    
})->paginate (10)->setPath ( '' );
    $pagination = $data->appends ( array (
                'q' => Input::get ( 'q' ) 
        ) );
   if (count ( $data ) > 0)
        return view ( 'admin.project.index' )->withDetails ( $data )->withQuery ( $q );
    }
        return view ( 'admin.project.index')->withMessage ( 'No Details found. Try to search again !' );
    }
}
