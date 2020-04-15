<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Validator;
class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::where('display', 1)->paginate(5);
        return view('reviews', compact('reviews' ));
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
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:2|max:150',
            'review'=>'required|min:2|max:1000',
            'rating'=>'required'
        ]);
        if($validator->fails()){
            return redirect('/reviews')->withErrors($validator)->withInput();
        }
        $review = new Review();
        $review->name = $request->name;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->display = 0;
        $review->save();
        return redirect('/reviews')->with('success', 'Отзыв сохранен');

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
