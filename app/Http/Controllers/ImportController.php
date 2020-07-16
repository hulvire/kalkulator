<?php

namespace App\Http\Controllers;
use App\Service;
use App\ServicePrice;
use App\ServiceCategory;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function index(){
        //$file = public_path('csv/services.csv');
        //$file = public_path('csv/serviceprice.csv');
        $file = public_path('csv/servicecat.csv');

        $customerArr = $this->csvToArray($file);
    
        for ($i = 0; $i < count($customerArr); $i ++)
        {
            //Service::firstOrCreate($customerArr[$i]);
            //ServicePrice::firstOrCreate($customerArr[$i]);
            ServiceCategory::firstOrCreate($customerArr[$i]);
      }
    
        return 'Job done - CSV subor uspesne naimportovany ;)'; 
    }
    function csvToArray($filename = '', $delimiter = ';')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }
}
