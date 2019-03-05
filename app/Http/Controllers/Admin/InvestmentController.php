<?php

namespace App\Http\Controllers\Admin;

use App\Investment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investment = Investment::latest()->paginate(10);
        return view('admin.investment.index',compact('investment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('admin.investment.create');
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

            'name' => 'required',
            'amount' => 'required',
            'birthday' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'date' => 'required',
        ]);




        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/Investor'))
            {
                mkdir('uploads/Investor',0777,true);
            }
            $image->move('uploads/Investor',$imageName);
        }else{
            $imageName = "default.png";
        }



        $courses = new Investment();

        $courses->name = $request->name ;
        $courses->image = $imageName;
        $courses->birthday = $request->birthday ;
        $courses->phone = $request->phone ;
        $courses->email = $request->email;
        $courses->amount = $request->amount;
        $courses->present_address = $request->present_address;
        $courses->permanent_address = $request->permanent_address;
        $courses->date = $request->date;
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
        $data = Investment::find($id);
        return view('admin.investment.edit',compact('data'));
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

            'name' => 'required',
            'amount' => 'required',
            'birthday' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'date' => 'required',
        ]);



        $courses = Investment::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/Investor'))
            {
                mkdir('uploads/Investor',0777,true);
            }
            $image->move('uploads/Investor',$imageName);
        }else{
            $imageName = $courses->image;
        }




        $courses->name = $request->name ;
        $courses->image = $imageName;
        $courses->birthday = $request->birthday ;
        $courses->phone = $request->phone ;
        $courses->email = $request->email;
        $courses->amount = $request->amount;
        $courses->present_address = $request->present_address;
        $courses->permanent_address = $request->permanent_address;
        $courses->date = $request->date;
        $courses->save();
        $notification = array(
            'ttitle' => 'Investor Details Successfully Updated!',
            'tmsg' => 'You have Updated a Investor Details',
            'ticon' => 'success',
        );
        return back()->with($notification);






    }


    public function deleteInvestor(Request $request){
        Investment::find ( $request->id )->delete ();
        return response ()->json ();
    }
}
