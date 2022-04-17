<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Problem;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.problem.index')->with([
            'problems'  => Problem::latest()->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.problem.create')->with([
            'categories'    => Category::orderBy('name','ASC')->get(),
            'tags'          => Tag::orderBy('name','ASC')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => ['required','string','max:255'],
            'visibility'    => ['required','not_in:none'],
            'category_id'    => ['required','not_in:none'],
        ]);


            $problem        =  Problem::create([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name),
            'description'   => $request->description,
            'visibility'    => $request->visibility,
            'user_id'       => Auth::id(),
            'category_id'   => $request->category_id
            ]);

            $problem->tags()->attach($request->tags);


        return redirect()->route('problem.index')->with('success','Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function show(Problem $problem)
    {
        return view('admin.problem.show')->with([
            'problem'=>$problem
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function edit(Problem $problem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Problem $problem)
    {
        return redirect()->route('problem.index')->with('succcess','Problem Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Problem $problem)
    {
        $problem->delete();
        return redirect()->route('problem.index')->with('succcess','Problem Deleted');
    }
}
