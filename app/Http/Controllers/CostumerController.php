<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public function register()
    {
        return view('pages.register');
    }

    public function re_store(Request $request)
    {
        try {
            Costumer::create($request->all());
            return $this->data();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function data()
    {
        $data = Costumer::get();
        return view('pages.costumers', ['data' => $data]);
    }
}
