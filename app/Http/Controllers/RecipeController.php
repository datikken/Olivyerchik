<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecipeCollection;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class RecipeController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/recipes",
     *     description="Get all recipes we got.",
     *     @OA\Response(response="default", description="Recipes page")
     * )
     */
    /**
     * @SWG\Get(
     *     path="/api/recipes",
     *     summary="Get list of recipes",
     *     tags={"Recipes"},
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Recipe")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Unauthorized user",
     *     ),
     * )
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(new RecipeCollection(Recipe::all()), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @SWG\Get(
     *     path="/api/recipes/{recipe_id}",
     *     summary="Get recipe by id",
     *     tags={"Recipes"},
     *     description="Get recipe by id",
     *     @SWG\Parameter(
     *         name="recipe_id",
     *         in="path",
     *         description="Recipe id",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(ref="#/definitions/Recipe"),
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Unauthorized user",
     *     ),
     *     @SWG\Response(
     *         response="404",
     *         description="Post is not found",
     *     )
     * )
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
