<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return response()->json($categories);
    }

    public function activeCategories()
    {
        $categories = Category::where('is_active', true)->get();

        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = $this->validateCategory($request);

        if ($errors)
            return $errors;

        $category = Category::create($request->all());

        return response()->json($category, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);

        if (!$category)
            return response()->json(["name" => ["The category with the given id was not found!"]], 404);

        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category)
            return response()->json(["name" => ["The category with the given id was not found!"]], 404);

        $errors = $this->validateCategory($request);

        if ($errors)
            return $errors;

        $category = Category::where('id', $id)->update($request->all());
        $category = Category::find($id);

        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category)
            return response()->json(["name" => ["The category with the given id was not found!"]], 404);

        Category::destroy($id);

        return response()->json($category);
    }

    public function validateCategory(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:3|max:255',
            'is_active' => 'boolean'
        ];

        $validation = Validator::make($request->all(), $rules);

        if ($validation->fails()) {
            return response()->json($validation->errors(), 400);
        }
    }
}
