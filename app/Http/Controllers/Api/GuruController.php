<?php

namespace App\Http\Controllers\Api;

use Exception;
use Throwable;
use App\Models\Guru;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Throw_;
use App\Http\Controllers\Controller;
use App\Http\Resources\GuruResource;
use App\Http\Requests\Guru\GuruStoreRequest;
use App\Http\Requests\Guru\GuruUpdateRequest;

class GuruController extends Controller
{

    public function index()
    {
        return GuruResource::collection(Guru::all());
    }


    public function store(GuruStoreRequest $request)
    {
        Guru::create($request->validated());
        return response()->json([
            'message' => 'guru is updated'
        ]);
    }


    public function show(Guru $guru)
    {
        return new GuruResource($guru);
    }


    public function update(GuruUpdateRequest $request, Guru $guru)
    {
        $guru->update($request->validated());
    }


    public function destroy(Guru $guru)
    {
        $guru->delete();
        return response()->json([
            'message' => 'guru is deleted'
        ]);
    }
}
