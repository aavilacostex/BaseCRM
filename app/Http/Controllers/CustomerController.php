<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\HCust;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getBasicInfo($custNo){

        try {
            $basicCust = null;
            $basicCust =  HCust::getBasic($custNo);
            //var_dump($basicCust);
            //exit;
            dd($basicCust);
            //return view('customer.show', ['basicCust' => $basicCust]);
            return view('customer.show')->with(compact('basicCust'));

        } catch (\Throwable $th) {
            //throw $th;
        }
        

    }

}
