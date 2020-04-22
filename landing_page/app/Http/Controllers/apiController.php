<?php

namespace App\Http\Controllers;

use App\Sections;
use Request;

class apiController extends Controller
{
    public function loadPage() {
        return response()->json(
            Sections::orderBy('id', 'desc') -> get()
        );
    }
}
