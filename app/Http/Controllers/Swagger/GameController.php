<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *      path="/api/games",
 *      summary="Создание игры",
 *      tags={"Game"},
 * 
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="name"),
 *                      @OA\Property(property="description", type="string", example="description"),
 *                      @OA\Property(property="genre_id", type="integer", example="2"),
 *                  )
 *              }
 *          )
 *      ),
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="name", type="string", example="name"),
 *              @OA\Property(property="description", type="string", example="description"),
 *              @OA\Property(property="genre_id", type="integer", example="2"),
 *          ), 
 *      ),
 * ),
 * 
 * 
 * @OA\Get(
 *      path="/api/games",
 *      summary="Список",
 *      tags={"Game"},
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="name", type="string", example="name"),
 *                  @OA\Property(property="description", type="string", example="description"),
 *                  @OA\Property(property="genre_id", type="id", example="42"),
 *                  @OA\Property(property="genre_name", type="string", example="genre_name"),
 *              )),
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/games/{game}",
 *      summary="Игра конкретная по ID",
 *      tags={"Game"},
 * 
 *      @OA\Parameter(
 *          description="ID",
 *          in="path",
 *          name="game",
 *          required=true,
 *          example=1,
 *      ),
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="id", type="id", example="id"),
 *              @OA\Property(property="name", type="string", example="name"),
 *              @OA\Property(property="description", type="string", example="description"),
 *              @OA\Property(property="genre_id", type="integer", example="2"),
 *          ), 
 *      ),
 *    
 * ),
 * 
 * 
 * @OA\Patch(
 *      path="/api/games/{game}",
 *      summary="Обновление",
 *      tags={"Game"},
 * 
 *      @OA\Parameter(
 *          description="ID",
 *          in="path",
 *          name="game",
 *          required=true,
 *          example=1,
 *      ),
 * 
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="for edit name"),
 *                      @OA\Property(property="description", type="string", example="description for edit"),
 *                      @OA\Property(property="genre_id", type="integer", example="2"),
 *                  )
 *              }
 *          )
 *      ),
 * 
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="name", type="string", example="name"),
 *              @OA\Property(property="description", type="string", example="description"),
 *              @OA\Property(property="genre_id", type="integer", example="2"),
 *          ), 
 *      ),
 *    
 * ),
 * 
 * 
 * @OA\Delete(
 *      path="/api/games/{game}",
 *      summary="Удаление",
 *      tags={"Game"},
 * 
 *      @OA\Parameter(
 *          description="ID",
 *          in="path",
 *          name="game",
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

class GameController extends Controller
{
}
