<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Siswa\StoreSiswaRequest;
use App\Http\Requests\Siswa\UpdateSiswaRequest;
use App\Http\Resources\SiswaResource;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    
    public function index()
    {
        return SiswaResource::collection(Siswa::all());
    }

    public function show(Siswa $siswa)
    {
        return new SiswaResource($siswa);
    }

    public function store(StoreSiswaRequest $request)
    {
        Siswa::create($request->validated());
        return response()->json([
            'message' => 'siswa is created'
        ]);
    }

    public function update(UpdateSiswaRequest $request, Siswa $siswa)
    {
        $siswa->update($request->validated());
        return response()->json([
            'message' => 'siswa is updated'
        ]);
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return response()->json([
            'message' => 'siswa is deleted'
        ]);
    }

}
