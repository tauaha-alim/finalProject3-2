<?php

namespace App\Http\Controllers\Admin;

use App\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::latest()->paginate(10);
        return view('admin.testimonial.index',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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

            'image' => 'required|image',
            'description' => 'required',
        ]);


        $image = $request->file('image');
        $slug = str_slug($request->file);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/testimonial'))
            {
                mkdir('uploads/testimonial',0777,true);
            }
            $image->move('uploads/testimonial',$imageName);
        }else{
            $imageName = "default.png";
        }








        $courses = new Testimonial();
        $courses->image = $imageName;
        $courses->description = $request->description ;
        $courses->overview_id = '1' ;
        $courses->save();

        $notification = array(
            'ttitle' => 'Testimonial  Successfully Added',
            'tmsg' => 'You have added a Testimonial',
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
        $data = Testimonial::find($id);
        return view('admin.testimonial.edit',compact('data'));
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
            'description' => 'required',
        ]);

        $courses = Testimonial::find($id);



        $image = $request->file('image');
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/testimonial'))
            {
                mkdir('uploads/testimonial',0777,true);
            }
            $image->move('uploads/testimonial',$imageName);
        }else{
            $imageName =$courses->image;
        }






        $courses->image = $imageName;
        $courses->description = $request->description ;
        $courses->overview_id = '1' ;
        $courses->save();

        $notification = array(
            'ttitle' => 'Project Details Successfully Added',
            'tmsg' => 'You have added a Project Details',
            'ticon' => 'success',
        );
        return back()->with($notification);


    }


    public function deletetestimonial(Request $request){
        Testimonial::find ( $request->id )->delete ();
        return response ()->json ();
    }
}
