<?php

namespace App\Http\Controllers;

use App\Models\Masterperkiraan_model;
use Illuminate\Http\Request;

class MasterperkiraanController extends Controller
{

    public function index()
    {
       $perkiraan = Masterperkiraan_model::get();
       $data =[
        'perkiraan' => $perkiraan
       ];
       return view ('masterperkiraan.index', $data);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
