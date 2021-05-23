<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Auth;
class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('UserDashboard.services');
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
        // $request->validate([
        //     'date' => ['required', 'string', 'max:255'],
        //     'location' => ['required', 'string', 'max:255'],
        //     'service' => ['required', 'string', 'max:255'],
        //     'NoFcleaner' => ['required', 'string', 'max:255']
        // ]);
        // dd($request->all());

        $services = new Service();
        $services->userId = Auth::user()->id;
        $services->date = $request->date;
        $services->location = $request->location;
        $services->service = implode(',', $request->service);
        $services->NoFcleaner = $request->NoFcleaner;

        // dd($service);

        $services->save();
        return redirect()->route('userdashbaord')->with('success','successfully booked.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
        $data = Service::all();
        return view('/AdminDashboard_Layout.booked',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = User::find($id);
        dd($order);  
        return view('AdminDashboard_Layout.booked');    
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
        $service=Service::find($id);
        $service->delete();
        return redirect()->route('allservices');
    }
}
