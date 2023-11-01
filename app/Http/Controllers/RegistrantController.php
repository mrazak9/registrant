<?php

namespace App\Http\Controllers;

use App\Models\Registrant;
use Illuminate\Http\Request;

class RegistrantController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->input('year', null);

        $registrants = Registrant::when($year, function ($query) use ($year) {
            return $query->where('year', $year);
        })->get();

        return view('registrants.index', compact('registrants', 'year'));
    }
}
