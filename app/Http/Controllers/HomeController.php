<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{



    public function index()
    {
        $highlighted = Project::where('status', 1)->where('highlighted', 'on')->orderByRaw('ISNULL(sort), sort ASC')->orderBy('title')->get();


        return view('pages.home.index', ['highlighted' => $highlighted]);
    }
    public function getProject(Request $request)
    {


        $card = '';
        $project = Project::where('status', 1)->orderByRaw('ISNULL(sort), sort ASC')->orderBy('title')->paginate($request->paginate);
        foreach ($project as $item) {


            $card .= '    <div class="card wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-bs-toggle="modal" data-bs-target="#cardModal" data-subtitle="'.$item->subtitle .'" data-image="' . $item->image . '"
                                data-description="' . $item->description . '">
                                <div class="card-body">
                                    <div class="imageFrame">
                                        <img src="' . asset($item->image) . '" alt="">
                                    </div>
                                    <div class="desc">
                                        <span class="count">' . $item->subtitle  . '</span>
                                        <div class="tag"><span class="wrapWrapper"><span class="wrap1"><span class="wrap2">' . $item->title . '</span></span></span></div>
                                    </div>
                                </div>
                            </div>';
        }




        return response()->json([
            'item' => $card,
            'hasMorePages' => $project->hasMorePages(),
            'currentPage' => $project->currentPage()
        ]);
    }
}
