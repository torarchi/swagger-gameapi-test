<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *      path="/api/genres",
 *      summary="Создание жанра",
 *      tags={"Genre"},
 * 
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="id", type="integer", example="13"),
 *                      @OA\Property(property="genre_name", type="string", example="name"),
 *                      @OA\Property(property="description", type="string", example="description"),
 *                  )
 *              }
 *          )
 *      ),
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example="13"),
 *              @OA\Property(property="genre_name", type="string", example="name"),
 *              @OA\Property(property="description", type="string", example="description"),
 *          ), 
 *      ),
 * ),
 * 
 * 
 * @OA\Get(
 *      path="/api/genres",
 *      summary="Список жанров",
 *      tags={"Genre"},
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=12),
 *                  @OA\Property(property="genre_name", type="string", example="name"),
 *                  @OA\Property(property="description", type="string", example="description"),
 *              )),
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/genres/{genre}",
 *      summary="Жанр конкретный",
 *      tags={"Genre"},
 * 
 *      @OA\Parameter(
 *          description="ID поста",
 *          in="path",
 *          name="genre",
 *          required=true,
 *          example=1,
 *      ),
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example="13"),
 *              @OA\Property(property="genre_name", type="string", example="name"),
 *              @OA\Property(property="description", type="string", example="description"),
 *          ), 
 *      ),
 *    
 * ),
 * 
 * 
 * @OA\Patch(
 *      path="/api/genres/{genre}",
 *      summary="Обновление",
 *      tags={"Genre"},
 * 
 *      @OA\Parameter(
 *          description="ID поста",
 *          in="path",
 *          name="genre",
 *          required=true,
 *          example=1,
 *      ),
 * 
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="id", type="integer", example="2"),
 *                      @OA\Property(property="genre_name", type="string", example="for edit name"),
 *                      @OA\Property(property="description", type="string", example="description for edit"),
 *                  )
 *              }
 *          )
 *      ),
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example="13"),
 *              @OA\Property(property="genre_name", type="string", example="name"),
 *              @OA\Property(property="description", type="string", example="description"),
 *          ), 
 *      ),
 *    
 * ),
 * 
 * 
 * @OA\Delete(
 *      path="/api/genres/{genre}",
 *      summary="Удаление",
 *      tags={"Genre"},
 * 
 *      @OA\Parameter(
 *          description="ID поста",
 *          in="path",
 *          name="genre",
 *          required=true,
 *          example=1,
 *      ),
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="message", type="string", example="done"),
 *          ), 
 *      ),
 *    
 * ),
 * 

 */

class GenreController extends Controller
{
}
