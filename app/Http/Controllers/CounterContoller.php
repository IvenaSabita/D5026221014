<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function index()
    {

        $currentCount = DB::table('counter')->value('jumlah');

        $newCount = $currentCount + 1;

        // Mengupdate data ke database
        DB::table('counter')->update(['jumlah' => $newCount]);

        // Mengirim data counter ke view index
        return view('indexcounter', ['counter' => $newCount]);
    }
}
