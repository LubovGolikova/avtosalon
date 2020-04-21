<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Validator;
class ReviewsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $reviews = Review::where('parent_id', '=', null)->orderBy('created_at', 'DESC')->paginate(8);
        return view('admin.reviewsAdmin', compact('reviews' ));
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
        $review = Review::find($id);
        return view('admin.reviewsAdminEdit', compact('review' ));
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
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:2|max:150',
            'review'=>'required|min:2|max:1000',
            'rating'=>'required'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $review = Review::find($id);
        $review->name = $request->name;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->display = $request->display ? 1 : 0;
        $review->save();
        return back()->with('success', 'Отзыв сохранен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Review::find($id)->delete();
        return back();
    }

    public function answer(Request $request, $id){
        if($request->id){
            $review = Review::find($request->id);
        }
        else{
        $review = new Review();
        }
        $review->name = $request->name;
        $review->review = $request->answer;
        $review->rating = 0;
        $review->display = 1;
        $review->parent_id = $id;
        $review->save();
        return back()->with('success', 'Ответ сохранен');
    }
}
