<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortfolioRequest;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function index()
    {
        return view('backend.portfolio_list');
    }


    public function create()
    {
        return view('backend.portfolio_add');
    }


    public function store(Request $request)
    {
        dd($request->all());
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
