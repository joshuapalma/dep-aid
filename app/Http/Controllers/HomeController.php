<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Schedule;
use App\Models\Patient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $patients = Patient::count();
        $schedule = Schedule::count();
        $inventory = [
            'cardiac-drugs' => Inventory::where('type', 'Cardiac Drugs')->count(),
            'antibiotics' => Inventory::where('type', 'Antibiotics')->count(),
            'ear-meds' => Inventory::where('type', 'Ear Meds')->count(),
            'topicals' => Inventory::where('type', 'Topicals')->count(),
            'anti-inflammatory' => Inventory::where('type', 'Anti-Inflammatory')->count(),
        ];

        $getTopMedicines = Inventory::orderBy('quantity', 'DESC')->select('medicine_name', 'quantity')->take(3)->get();

        return view('pages.dashboard')->with(['patients' => $patients, 'schedule' => $schedule, 'inventory' => $inventory, 'getTopMedicines' => $getTopMedicines]);
    }
}
