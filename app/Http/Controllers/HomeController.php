<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Feedback;
use App\Models\ImageSlide;
use App\Models\Order;
use App\Models\Slide;
use App\Models\Treatments;
use App\Models\TypeTreatments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $typeTreat = TypeTreatments::count();
        $order = Order::where('status', '1')->count();

        return view('components.home', [
            'user' => Auth::user(),
            'typeTreat' => $typeTreat,
            'order' => $order,
        ]);
    }
}
