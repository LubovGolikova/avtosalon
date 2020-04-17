<?php

namespace App\Http\Controllers;
use App\SignUp;
use Illuminate\Http\Request;
use Validator;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
class SingUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/');
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
//            'phone'=>'required|regex:/(01)[0-9]{9}/'
        ]);
        if($validator->fails()){
            return redirect('/')->withErrors($validator)->withInput();
        }
        $signup = new SignUp();
        $signup->name = $request->name;
        $signup->phone = $request->phone;
        $signup->robot = $request->robot;
        $signup->save();
        Mail::to('lubovgolikova@gmail.com')->send(new OrderShipped($signup));
        return redirect('/')->with('success', 'Запись сохранена');
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
