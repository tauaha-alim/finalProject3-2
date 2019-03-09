<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function liveChatPage(){

        return view('frontend.pages.liveChat');
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

            $data = new Customer();

            $data->name = $request->name;
            $data->username = $request->username;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);

            $data->save();
            return redirect()->back()->with('success','success');


    }


    public function LoginPassGate(Request $request)
    {
        $requestMail= $request->email;
        $requestPassword = $request->password;

        $user = Customer::where('email', '=', $requestMail)->first();

        if($user){
            if(Hash::check($requestPassword, $user->password) && $user->email == $requestMail){
                session()->put('loggedMan', 'loggedMan');
                return redirect()->back()->with('PassSuccess','success');
            }else{
                return redirect()->back()->with('msg','error');
            }
    }
        return redirect()->back()->with('msg','success');
    }


    public function loggedManDestroy()
    {
        session()->forget('loggedMan');
        return redirect()->route('index');
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
}
