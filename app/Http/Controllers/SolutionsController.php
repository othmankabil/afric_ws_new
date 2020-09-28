<?php

namespace App\Http\Controllers;

use App\Http\Requests\Solution\CreateSolutionRequest;
use App\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SolutionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('roles:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.solutions. index')->with('solutions',Solution::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.solutions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSolutionRequest $request)
    {
        $ext = ($request->file('location')->extension());
        if($ext == 'pdf')
        {
            $pdf_file_location = $request->file('location')->store('pdf_files');
            Solution::create([
                    'name' => $request->name ,
                    'location'=> $pdf_file_location
                ]
            );
            return redirect(route('solutions.create'));
        }return response('please upload a pdf file',415);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Solution $solution)
    {
      // return view('admin.solutions.show')->withsolution($solution);
        return response()->file(($solution->location));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
