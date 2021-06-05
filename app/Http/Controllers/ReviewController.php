<?php

namespace App\Http\Controllers;
// use APP\Models\Review;
use App\Models\Review;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    protected $image_dir = "public/images";
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
        $review = new Review();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = base_path('Uploads');
            $image->move($destinationPath, $image_name);
            $review->image=$image_name;
        }
        $user = User::find(Auth::user()->id);
        $booking = $request->booking_id;
        $review->user_id = $user->name;
        $review->booking_id = $booking;
        $review->reviews = $request->reviews;
        $review->star = $request->star;
        $review->save();
        return redirect('/user_dashboard')->with('success','successfully booked.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
        $data = Review::all();
        return view('/AdminDashboard_Layout.review',['data'=>$data]);
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
        $review=Review::find($id);
        $review->delete();
        return redirect()->route('reviews');
    }
}
