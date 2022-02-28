<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$user = auth()->id();         
        return view('/home/horizontal-index');
        //return view('home');
    }
    
    
    public function CRMDashboard()
    {
        //$user = auth()->id(); 
        //$clients = home::All();

        //dd($clients);
        return view('/crm/crm-dashboard');
    }

    public function SalesDashboard()
    {
        //$user = auth()->id(); 
        //$clients = home::All();

        //dd($clients);
        if (!Gate::allows('isManager')) {
            abort(403);  
        } 
        return view('/sales/sales-dashboard');
    }
    
}
