<?php

namespace App\Http\Controllers;

use App\Letak;
use App\Customer;
use App\Service;
use App\ServiceCategory;
use App\ServicePrice;
use App\Paper;
use App\PaperFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class KatalogController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $Customers=Customer::all();
            $Sluzby=Service::all();
            $ServiceCategories=ServiceCategory::all();
            $ServicePrices=ServicePrice::all();
            $Papers=Paper::all();
            $PaperFormats=PaperFormat::all();

            return view('katalog', [
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
}
