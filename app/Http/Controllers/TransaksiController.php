<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all transaksi 
        $transaksi = Transaksi::join("providers", "providers.id", "transaksis.provider_id")
            ->select("transaksis.*", "providers.active", "providers.name as provider_name")
            ->where('no_hp', 'like', '%' . request()->search . '%')
            ->orWhere('providers.name', 'like', '%' . request()->search . '%')
            ->paginate(request()->per_page ?? 10 );
        // $transaksi = Transaksi::with("providers")->whereNot("provider_id")->get();
        // search transaksi
        // if (request()->search != '') {
        //     // $transaksi = Transaksi::where('no_hp', 'like', '%' . request()->search . '%')->get();
        // }

        return response()->json([
            'data' => $transaksi->items(),
                'total_data' => $transaksi->total(),
                'per_page' => $transaksi->perPage(),
                'total_page' => $transaksi->lastPage(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaksi = Transaksi::create($request->all());

        return response()->json($transaksi);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        return response()->json($transaksi);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $transaksi->update($request->all());

        return response()->json($transaksi);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //delete
        $result = $transaksi->delete();
        if ($result) {
            return ['result' => 'Data berhasil dihapus'];
        } else {
            return ['result' => 'Data gagal dihapus'];
        }
    }
}