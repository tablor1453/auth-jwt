<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\SaksiResource;
use Illuminate\Http\Request;

class SaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultSaveData = [
            "message" => "Data saksi berhasil disimpan",
            "status" => true,
            "token" => 'token'
        ];

        return (new SaksiResource($resultSaveData))->response()->setStatusCode(201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
