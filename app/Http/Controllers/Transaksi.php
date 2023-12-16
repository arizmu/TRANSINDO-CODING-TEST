<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use App\Models\Mobil;
use App\Models\Transaksi as ModelsTransaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Transaksi extends Controller
{
    public function peminjaman() {
        $query = ModelsTransaksi::with('costumer', 'mobil')->where('status', 1);
        return view('pages.peminjaman-index', [
            'data' => $query->paginate()
        ]);
    }

    public function peminjaman_create() {
        $mobil = Mobil::where('status', 0)->get();
        $cs = Costumer::get();
        return view('pages.peminjaman-create', ['mobil' => $mobil, 'cs' => $cs]);
    }

    public function mobil($key) {
        $mobil = Mobil::find($key);
        return response()->json([
            'status' => 'ok',
            'tarif' => $mobil->tarif
        ]);
    }

    public function peminjaman_store(Request $request) {
        $query = ModelsTransaksi::create([
            'costumer_id' => $request->cs,
            'mulai' => Carbon::parse($request->mulai),
            'selesai' => Carbon::parse($request->selesai),
            'mobil_id' => $request->mobil,
            'tarif' => $request->tarif,
            'total' => $request->total_biaya,
            'hari' => $request->hari,
            'status' => true
        ]);

        if ($query) {
            $key = Mobil::find($request->mobil);
            $key->status = true;
            $key->save();
        }

        return to_route('peminjaman');
    }
}
