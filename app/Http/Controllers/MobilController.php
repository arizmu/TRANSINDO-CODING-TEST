<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index() {

        $data = Mobil::when(request()->search, function($query) {
            $query->where('merek', 'like', '%'. request()->search .'%')
            ->orWhere('plat', 'like', '%'. request()->search .'%')
            ->orWhere('model', 'like', '%'. request()->search .'%');
        })
        ->paginate(10);
        return view('pages.mobil-index', [
            'data' => $data
        ]);
    }

    public function create() {
        return view('pages.mobil-create');
    }

    public function store(Request $request) {
        Mobil::create($request->all());
        return to_route('mobil');
    }
}
