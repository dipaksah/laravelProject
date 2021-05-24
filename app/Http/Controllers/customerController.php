<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class customerController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
        $data = User::all();
        return view('/AdminDashboard_Layout.customers',['data'=>$data]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($user);
        $customer = User::find($id);
        // dd($customer);  
        return view('AdminDashboard_Layout.customers', compact('customer','id'));    
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $user = User::find($id);

        $user->name=request()->input('name');
        $user->email=request()->input('email');
        $user->phone=request()->input('phone');
             
        $user->update();

        // Session::flash('flash_message', 'Task successfully added!');
        return redirect()->route('customers')->with('success','data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletecustomer=User::find($id);
        $deletecustomer->delete();
        return redirect()->route('customers');
    }
}
