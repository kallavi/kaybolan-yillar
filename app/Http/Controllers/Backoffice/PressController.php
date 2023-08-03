<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
 use App\Models\Press;
use Illuminate\Http\Request;
use  DataTables;
use Illuminate\Support\Str;

class PressController extends Controller
{
    private array $breadcrumb;

    public function __construct()
    {

        $this->breadcrumb = [
            'subTitle' => 'Basın Toplantısı',
            'viewTitle' => 'Basın Toplantısı'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index( )
    {


        $press= Press::where('id',1)->first();
        return view('backoffice.pages.press.index', (['press' => $press, 'breadcrumb' => $this->breadcrumb  ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
   

        $press= Press::where('id',1)->first();


        if ($request->hasFile('pdf')) {

            $file_name = uniqid() . '.' . $request->pdf->getClientOriginalExtension();
            $request->pdf->move(public_path('data/uploads/pdf'), $file_name);
            $pdf = $file_name;

            $press->fill([


                'pdf' =>  'data/uploads/pdf/' . $pdf,

            ]);
        }


        $press->fill([

 
            'tel'=>$request->tel,
            'video'=>$request->video,
         
            
           
 
        ]);

        $press->save();

        if ($press) {
            session()->flash('status', 'success');
            session()->flash('title', 'Basın başarıyla güncellendi!');
            session()->flash('message',  'Basın başarıyla güncellendi!');
            return redirect()->route('admin.press.index');
        } else {
            session()->flash('status', 'error');
            session()->flash('title', 'Basın eklenmedi!');
            session()->flash('message', 'Basın eklenirken bir hata oluştu!');
        }

        return redirect()->route('admin.press.index');
    }
 
}
