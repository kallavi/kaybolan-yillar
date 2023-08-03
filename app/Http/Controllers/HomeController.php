<?php

namespace App\Http\Controllers;

use App\Models\Press;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{



    public function index()
    {
        $highlighted = Project::where('status', 1)->where('highlighted', 'on')->orderByRaw('ISNULL(sort), sort ASC')->orderBy('title')->get();
        $press = Press::where('id', 1)->first();


        return view('pages.home.index', ['highlighted' => $highlighted, 'press' => $press]);
    }
    public function getProject(Request $request)
    {


        $card = '';
        $project = Project::where('status', 1)->where('highlighted', null)->orderByRaw('ISNULL(sort), sort ASC')->orderBy('title')->paginate($request->paginate);
        $count = 0;

        foreach ($project as $index => $item) {

            if ($index % 5 == 0) {
                $count = 0;
            }
            if ($project->currentPage() == 1) {


                $card .= '    <div class="card col wow animate__animated animate__fadeInUp" data-wow-delay="1.' . $count . 's" data-bs-toggle="modal" data-bs-target="#cardModal2" data-subtitle="' . $item->subtitle . '" data-image="' . $item->image . '"
                                data-description="' . $item->description . '">
                                <div class="card-body">
                                    <div class="imageFrame">
                                        <img src="' . asset($item->image) . '" alt="">
                                    </div>
                                    <div class="desc d-none">
                                        <span class="count">' . $item->subtitle  . '</span>
                                        <div class="tag"><span class="wrapWrapper"><span class="wrap1"><span class="wrap2">' . $item->title . '</span></span></span></div>
                                    </div>
                                </div>
                            </div>';
            } else {
                $card .= '    <div class="card col animate__animated animate__fadeInUp animate__delay-' . $index . 's"  data-bs-toggle="modal" data-bs-target="#cardModal2" data-subtitle="' . $item->subtitle . '" data-image="' . $item->image . '"
                data-description="' . $item->description . '">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="' . asset($item->image) . '" alt="">
                    </div>
                    <div class="desc d-none">
                        <span class="count">' . $item->subtitle  . '</span>
                        <div class="tag"><span class="wrapWrapper"><span class="wrap1"><span class="wrap2">' . $item->title . '</span></span></span></div>
                    </div>
                </div>
            </div>';
            }

            $count++;
            $count++;
        }




        return response()->json([
            'item' => $card,
            'hasMorePages' => $project->hasMorePages(),
            'currentPage' => $project->currentPage()
        ]);
    }
}
