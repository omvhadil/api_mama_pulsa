<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProviderController extends Controller
{
    public function index(Request $request) // Get
    {
        // Provider::all() = fungsinya untuk mengambil semua data objek yang ada di table database
        $providers = Provider::all();
        return response()->json($providers);
    }

    public function create() // View Post
    {
        //
    }

    public function store(Request $request) //Post
    {
        $providers = new Provider;
        $providers->name=$request->name;
        $providers->active=$request->active;
        $result=$providers->save();
        if($result)
        {
            return ['result'=>'data berhasil ditambahkan'];
        }
        else{
            return ['result'=>'data gagal ditambahkan'];
        }
    }

    public function show(Provider $provider) // Get Detail
    {

        return response()->json($provider);
    }

    public function edit(Provider $provider) // View Put
    {
        //
    }

    public function update(Request $request, Provider $provider) // Put
    {
        $provider->name = $request->name;
        $provider->active = $request->active;
        $result=$provider->save();
        if($result)
        {
            return ['result'=>'data berhasil dirubah'];
        }
        else{
            return ['result'=>'data gagal dirubah'];
        }
    }

    public function destroy(Provider $provider) // Delete
    {
        $result = $provider->delete();

        if($result)
        {
            return ["result"=>'data berhasil di hapus'];
        }
        else{
            return ["result"=>'data gagal dihapus'];
        }
    }
}