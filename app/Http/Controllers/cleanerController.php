<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cleaner;

class cleanerController extends Controller
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
        // dd($request->all());
        $cleaner = new Cleaner();
        $cleaner->name = $request->name;
        $cleaner->save();
        return redirect()->route('cleaneradd')->with('success','successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
        $data = Cleaner::all();
        return view('/AdminDashboard_Layout.admin_dashboard',['data'=> $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cleaner = User::find($id);
        dd($cleaner);  
        return view('AdminDashboard_Layout.admin_dashboard');    
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
            'status' => 'required',
        ]);

        $cleaner = Cleaner::find($id);

        $cleaner->name=request()->input('name');
        $cleaner->status=request()->input('status');
             
        // dd($user);
        $cleaner->update();

        // Session::flash('flash_message', 'Task successfully added!');
        return redirect()->route('allcleaner')->with('success','data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletecleaner = Cleaner::find($id);
        $deletecleaner->delete();
        return redirect()->route('allcleaner');
    }
}
