<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;

use App\Models\Project;
use Illuminate\Http\Request;
use  DataTables;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    private array $breadcrumb;

    public function __construct()
    {

        $this->breadcrumb = [
            'subTitle' => "İstanbul'un Kaybolan Yılları",
            'viewTitle' => "İstanbul'un Kaybolan Yılları"
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {



        if ($request->ajax()) {
            $data = Project::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '  <a class="btn btn-sm btn-icon btn-primary" href="' . route("admin.project.edit", $row->id) . '" title="Güncelle"><i class="bi bi-pencil-square fs-3"></i></a>   <a href="' . route("admin.project.delete", $row->id) . '">  <button class="btn btn-sm btn-icon btn-danger"><i class="bi bi-trash fs-3"></i></button>  </a>  ';

                    return $btn;
                })
                ->addColumn('image', function ($row) {

                    $column = '<img width="100" height="100" src="' . asset($row->image) . '"/>';

                    return $column;
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == 1) {
                        $column = '<span class="badge badge-pill badge-success">Aktif</span>';
                    } else {
                        $column = '<span class="badge badge-pill badge-danger">Pasif</span>';
                    }

                    return $column;
                })
                ->rawColumns(['action', 'image', 'status'])
                ->make(true);
        }
        return view('backoffice.pages.project.index', (['breadcrumb' => $this->breadcrumb]));
    }
    public function delete($id)
    {
        $project = Project::find($id);
        $project->delete();
        session()->flash('status', 'success');
        session()->flash('title', 'Başarıyla silindi!');
        session()->flash('message', $project->title . ' adlı proje silindi!');
        return redirect()->route('admin.project.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backoffice.pages.project.create', (['breadcrumb' => $this->breadcrumb]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $project = new Project();
     


        if ($request->hasFile('image')) {

            $file_name = uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('data/uploads/project/'), $file_name);
            $image = $file_name;

            $project->fill([
                'image' =>  'data/uploads/project/' . $image,
            ]);
        }



        $project->fill([



            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'highlighted' => $request->highlighted,
            'sort' => $request->sort,


        ]);

 
        $project->save();

        if ($project) {
            session()->flash('status', 'success');
            session()->flash('title', 'Proje başarıyla eklendi!');
            session()->flash('message',  'Proje sisteme eklendi!');
            return redirect()->route('admin.project.index');
        } else {
            session()->flash('status', 'error');
            session()->flash('title', 'Proje eklenmedi!');
            session()->flash('message', 'Proje eklenirken bir hata oluştu!');
        }
        return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {



        return view('backoffice.pages.project.edit', (['project' => $project, 'breadcrumb' => $this->breadcrumb]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
     
        if ($request->hasFile('image')) {

            $file_name = uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('data/uploads/project'), $file_name);
            $image = $file_name;

            $project->fill([


                'image' =>  'data/uploads/project/' . $image,

            ]);
        }
  



        $project->fill([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'highlighted' => $request->highlighted,
            'status' => $request->status,
            'sort' => $request->sort,


        ]);

        $project->save();

        if ($project) {
            session()->flash('status', 'success');
            session()->flash('title', 'Kişi başarıyla güncellendi!');
            session()->flash('message',  'Kişi başarıyla güncellendi!');
            return redirect()->route('admin.project.index');
        } else {
            session()->flash('status', 'error');
            session()->flash('title', 'Kişi eklenmedi!');
            session()->flash('message', 'Kişi eklenirken bir hata oluştu!');
        }

        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {

        $project->delete();
        session()->flash('status', 'success');
        session()->flash('title', 'Başarıyla silindi!');
        session()->flash('message', $project->id . ' numaralı Kişi silindi!');
        return redirect()->route('admin.project.index');
    }
}
