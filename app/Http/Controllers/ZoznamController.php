<?php

namespace App\Http\Controllers;

use App\Zoznam;
use App\Order;
use App\Customer;
use App\Service;
use App\ServiceCategory;
use App\ServicePrice;
use App\Paper;
use App\PaperFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ZoznamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $Orders=Order::all();
            $Customers=Customer::all();
            $Sluzby=Service::all();
            $ServiceCategories=ServiceCategory::all();
            $ServicePrices=ServicePrice::all();
            $Papers=Paper::all();
            $PaperFormats=PaperFormat::all();

            return view('zoznam', [
                'zakazky' => $Orders, 
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
     * @param  \App\Zoznam  $zoznam
     * @return \Illuminate\Http\Response
     */
    public function show(Zoznam $zoznam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zoznam  $zoznam
     * @return \Illuminate\Http\Response
     */
    public function edit(Zoznam $zoznam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zoznam  $zoznam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zoznam $zoznam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zoznam  $zoznam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zoznam $zoznam)
    {
        //
    }
}
