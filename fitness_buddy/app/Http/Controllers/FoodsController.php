<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // Blocks unauthorized users for being able to edit any views that don't belong to them
    // Adopts auth middleware functions
     // exceptions allowing user to view individual page and index
    public function __construct()
    {
        $this->middleware('auth');/*, ['except' =>['index', 'show']]*/
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // all comments in this function are examples of different ways to take data //
        //Get all foods// $posts = Food::all();
        //SORT// return Food::where('food', 'Chicken')->get();
        //SQL SYNTAX// $posts = DB::('SELECT * FROM food');
        //take one// $posts = Food::orderBy('food', 'desc')->take(1)->get();*/
         $posts = Food::orderBy('created_at', 'desc')->paginate(5);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'meal' => 'required',
            'food' => 'required',
            'calories' => 'required',
            'macronutrients' => 'required'

        ]);
        //Create Post
        $post = new Food;
        $post->meal = $request->input('meal');
        $post->food = $request->input('food');
        $post->calories = $request->input('calories');
        $post->macronutrients = $request->input('macronutrients');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/dashboard')->with('success', 'Meal Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Food::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Food::find($id);
        // Check for Correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        return view('posts.edit')->with('post', $post);
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
        $this->validate($request,[
            'meal' => 'required',
            'food' => 'required',
            'calories' => 'required',
            'macronutrients' => 'required'

        ]);
        //Create Post
        $post = Food::find($id);

        //Check for Correct User
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

            $post->meal = $request->input('meal');
            $post->food = $request->input('food');
            $post->calories = $request->input('calories');
            $post->macronutrients = $request->input('macronutrients');
            $post->save();

        return redirect('/dashboard')->with('success', 'Meal Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Food::find($id);
        //Check for Correct User
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        $post->delete();
        return redirect('/dashboard')->with('success', 'Meal Deleted');
    }
}
