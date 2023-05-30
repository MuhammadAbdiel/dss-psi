<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Matrix;
use App\Http\Requests\StoreMatrixRequest;
use App\Http\Requests\UpdateMatrixRequest;
use Illuminate\Http\Request;

class MatrixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
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
     * @param  \App\Http\Requests\StoreMatrixRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMatrixRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matrix  $matrix
     * @return \Illuminate\Http\Response
     */
    public function show(Matrix $matrix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matrix  $matrix
     * @return \Illuminate\Http\Response
     */
    public function edit(Matrix $matrix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMatrixRequest  $request
     * @param  \App\Models\Matrix  $matrix
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMatrixRequest $request, Matrix $matrix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matrix  $matrix
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matrix $matrix)
    {
        //
    }
}
