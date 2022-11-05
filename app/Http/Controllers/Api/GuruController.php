<?php

namespace App\Http\Controllers\Api;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\GuruResource;

class GuruController extends Controller
{

    public function index()
    {
        $data = Guru::all();
        return response()->json(new GuruResource(true, 'success', $data), 200);
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $data = Guru::find($id);
        if ($data) {
            return response()->json(new GuruResource(true, 'success', $data), 200);
        }
        return response()->json(new GuruResource(true, 'not found', $data), 404);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $data = Guru::destroy($id);
        if($data) {
            return response()->json(new GuruResource(true, 'success', $data));
        }
        return response()->json(new GuruResource(false, 'error', $data), 404);
    }
}
