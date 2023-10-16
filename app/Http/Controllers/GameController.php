<?php

namespace App\Http\Controllers;

use App\Http\Requests\Game\StoreRequest;
use App\Http\Requests\Game\UpdateRequest;
use App\Http\Resources\Game\GameResource;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Выводит список всех игр
     */
    public function index()
    {
        $games = Game::with('genre')->get();
        return GameResource::collection($games);
    }

    /**
     * Хранит новый ресурс в базе данных
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $game = Game::create($data);

        return GameResource::make($game);
    }

    /**
     * Отображает конкретный ресурс
     */
    public function show(Game $game)
    {
        return GameResource::make($game);
    }

    /**
     * Обновляет конкретный ресурс в базе данных
     */
    public function update(UpdateRequest $request, Game $game)
    {
        $data = $request->validated();
        $game->update($data);
        return GameResource::make($game);
    }

    /**
     * Удаляет конкретный ресурс из базы данных
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return response()->json([
            'message' => 'done'
        ]);
    }
}
