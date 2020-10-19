<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @group Category Endpoints
 *  
 * APIs for Category Management
 */
class CategoryController extends Controller
{
    /**
     * GET Category List
     *
     * @response
     * 
     * [
     *      {
     *          "id": 1,
     *          "name": "Men's Fashion",
     *          "is_active": 1,
     *          "created_at": "2020-09-20T06:56:21.000000Z",
     *          "updated_at": "2020-09-20T06:56:21.000000Z"
     *      },
     *      {
     *          "id": 1,
     *          "name": "Kids & Babies",
     *          "is_active": 0,
     *          "created_at": "2020-09-20T06:56:21.000000Z",
     *          "updated_at": "2020-09-20T06:56:21.000000Z"
     *      }
     * ]
     * 
     */
    public function index()
    {
        $categories = Category::all();

        return response()->json($categories);
    }

    /**
     * GET Active Category List
     *
     * @response
     * 
     * [
     *      {
     *          "id": 1,
     *          "name": "Men's Fashion",
     *          "is_active": 1,
     *          "created_at": "2020-09-20T06:56:21.000000Z",
     *          "updated_at": "2020-09-20T06:56:21.000000Z"
     *      }
     * ]
     * 
     */
    public function activeCategories()
    {
        $categories = Category::where('is_active', true)->get();

        return response()->json($categories);
    }

    /**
     * POST Category
     *
     * @request
     * 
     * [
     *      {
     *          "name": "Men's Fashion",
     *          "is_active": 1
     *      }
     * ]
     *
     * @response
     * 
     * [
     *      {
     *          "id": 1,
     *          "name": "Men's Fashion",
     *          "is_active": 1,
     *          "created_at": "2020-09-20T06:56:21.000000Z",
     *          "updated_at": "2020-09-20T06:56:21.000000Z"
     *      }
     * ]
     * 
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
     * GET Category
     *
     * @response
     * 
     * {
     *     "id": 1,
     *     "name": "Men's Fashion",
     *     "is_active": 1,
     *     "created_at": "2020-09-20T06:56:21.000000Z",
     *     "updated_at": "2020-09-20T06:56:21.000000Z"
     * }
     * 
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
