<?php

namespace App\Http\Controllers;

use App\ConsultantInfo;
use Illuminate\Http\Request;

class ConsultantInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultantInfos = ConsultantInfo::latest()->paginate(5);
        return view('consultantInfos.index',compact('consultantInfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consultantInfo = new ConsultantInfo();
        return view('consultantInfos.create',compact('consultantInfo'));
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
     * @param  \App\ConsultantInfo  $consultantInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ConsultantInfo $consultantInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConsultantInfo  $consultantInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(ConsultantInfo $consultantInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConsultantInfo  $consultantInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConsultantInfo $consultantInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConsultantInfo  $consultantInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsultantInfo $consultantInfo)
    {
        //
    }
}
