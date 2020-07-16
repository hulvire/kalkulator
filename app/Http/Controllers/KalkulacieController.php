<?php

namespace App\Http\Controllers;

use App\Kalkulacie;
use App\Customer;
use App\Service;
use App\ServiceCategory;
use App\ServicePrice;
use App\Paper;
use App\PaperFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class KalkulacieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $Kalkulacie=Kalkulacie::all();
            $Customers=Customer::all();
            $Sluzby=Service::all();
            $ServiceCategories=ServiceCategory::all();
            $ServicePrices=ServicePrice::all();
            $Papers=Paper::all();
            $PaperFormats=PaperFormat::all();

            return view('kalkulacie', [
                'kalkulacie' => $Kalkulacie, 
                'customers' => $Customers, 
                'sluzby' => $Sluzby, 
                'service_categories' => $ServiceCategories, 
                'service_prices' => $ServicePrices,
                'papers' => $Papers, 
                'paperformats' => $PaperFormats 
                ]);
        }else{
            return redirect('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kalkulacie  $kalkulacie
     * @return \Illuminate\Http\Response
     */
    public function show(Kalkulacie $kalkulacie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kalkulacie  $kalkulacie
     * @return \Illuminate\Http\Response
     */
    public function edit(Kalkulacie $kalkulacie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kalkulacie  $kalkulacie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kalkulacie $kalkulacie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kalkulacie  $kalkulacie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kalkulacie $kalkulacie)
    {
        //
    }
}
