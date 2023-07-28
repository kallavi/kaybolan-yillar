<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $breadcrumb;
    public function __construct()
    {
        $this->breadcrumb = [
            'subTitle' => 'Hoşgeldiniz'
        ];
    }

    public function index()
    {
        $this->breadcrumb['viewTitle'] = "İstanbul'un İstanbul'un Kaybolan Yıllarıı";

       

        return view('backoffice.dashboard', ['breadcrumb' => $this->breadcrumb ]);
    }
}
