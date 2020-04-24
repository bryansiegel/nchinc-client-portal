<?php

namespace App\Http\Controllers;

use App\Document;
use App\Form;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $documents = Document::latest()->take(2)->get();
        $forms = Form::latest()->take(2)->get();
        return view('dashboard', compact(['documents', 'forms']));
    }
}
