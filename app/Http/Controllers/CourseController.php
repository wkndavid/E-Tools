<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
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
     * @param  \App\Models\ModelsCourse  $modelsCourse
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsCourse $modelsCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelsCourse  $modelsCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsCourse $modelsCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModelsCourse  $modelsCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsCourse $modelsCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelsCourse  $modelsCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsCourse $modelsCourse)
    {
        //
    }

    public function activies(){
        return view('description');
    }

    public function registerCourse(Request $request){
        dd($request);
    }
}
