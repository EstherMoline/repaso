<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = Study::all();
        return view('study.index',['studies'=> $studies]);
        // return "lista de estudios";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('study.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'code'=>'required|unique:studies,code|max:6',
            'name'=>'required|max:100',
            'abreviation'=>'required|max:4'
        ];

        $this->validate($request, $rules);
        $study = Study::create($request->all());
        return redirect('/studies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $study = Study::find($id);
        return view('study.show',['study'=> $study]);
        // return "lista de estudios";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function edit(Study $study)
    {
        return view('study.edit',['study'=> $study]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Study $study)
    {
        $study->fill($request->all());
        $study->save();
        return redirect('/studies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function destroy(Study $study)
    {
        $study->delete();
        //Study::destroy($id);
        return back();
    }
}
