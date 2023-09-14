<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\SaksiResource;
use App\Models\Saksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $resultSaveData = [
        //     "message" => "Data saksi berhasil disimpan",
        //     "status" => true,
        //     "token" => 'token'
        // ];
        // dd($request->all());
      

        // $dataSaksi = new User();
        // $dataSaksi->name = $request->nama;
        // $dataSaksi->email = $request->email;
        // $dataSaksi->password = Hash::make($request->password);
        // $dataSaksi->save();

        // $resultSaveData = [
        //     "message" => "Data saksi berhasil disimpan",
        //     "status" => true,
        //     "token" => $dataSaksi->createToken('api-saksi')->plainTextToken
        // ];

        $dataSaksi = new Saksi();
        $dataSaksi->nik = $request->nik;
        $dataSaksi->nama = $request->nama;
        $dataSaksi->nohp = $request->nohp;
        $dataSaksi->email = $request->email;
        $dataSaksi->save();

        $resultSaveData = [
            "message" => "Data saksi berhasil disimpan",
            "status" => true,
            "token" => $dataSaksi->createToken('api-saksi')->plainTextToken
        ];

        return (new SaksiResource($resultSaveData))->response()->setStatusCode(201);
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
