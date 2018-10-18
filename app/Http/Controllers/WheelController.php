<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wheel;

class WheelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wheels = Wheel::with(['brand:id,name'])->get();

        $columns = [
          'id',
          'model',
          'description',
          'diameter',
          'rotation',
          'torque',
          'brushless_motor',
          'resolution',
          'brand_id',
          'drive_id',
          'created_at',
          'updated_at',
          'deleted_at',
        ];

        return response()->json($wheels);
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
        $wheel = Wheel::create($request->all());

        return response()->json($wheel);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wheel = Wheel::find($id);

        return response()->json($wheel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wheel = Wheel::find($id);

        $wheel->update($request->all());

        return response()->json($wheel);
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
        Wheel::find($id)->delete();

        return response()->json([], 204);
    }
}
