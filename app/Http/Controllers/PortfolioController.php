<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use App\Models\PortfolioImages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('backend.portfolio_list');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('backend.portfolio_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequest $request)
    {
        $status = 0;
        if (isset($request->status) && $request->status == 'on')
        {
            $status = 1;
        }
        $portfolio=Portfolio::create([
            'title'=>$request->title,
            'tags'=>$request->tags,
            'about'=>$request->about,
            'keywords'=>$request->keywords,
            'description'=>$request->description,
            'website'=>$request->website,
            'status'=>$status,
        ]);

        if ($request->file('images'))
        {

            $sayac=0;
            foreach ($request->file('images')as $image)
            {
                $extension = $image->getClientOriginalExtension();
                $name =$image->getClientOriginalName();
                $slugName= Str::slug($name,'-').'_'.rand(0,2222).'.'.$extension;
                $image ->move(public_path('public/portfolio'),$name);


                PortfolioImages::create([
                    'portfolio_id'=>$portfolio->id,
                    'image'=>$slugName,
                    'featured'=>$sayac == 0 ? 1 : 0,
                    'status'=>1

                ]);
                $sayac =1;

            }
        }
        alert()->success('Başarılı','Portfolio Bilgisi Eklendş')->showConfirmButton('Tamam','#3885d6')->persistent(true,true);

        return redirect()->route('portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
