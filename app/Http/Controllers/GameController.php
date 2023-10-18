<?php

namespace App\Http\Controllers;

use App\Http\Requests\Game\GameRequest;
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
        return response()->json($games);
    }

    /**
     * Хранит новый ресурс в базе данных или обновляет существующий
     */
    public function storeOrUpdate(GameRequest $request, Game $game)
    {
        $data = $request->validated();

         // Если ресурс существует, обновляем его. Если ресурса не существует, создаем новый
        if ($game) {
            $game->update($data);
        } 
        else {
            $game = Game::create($data);
        }

        return response()->json($game);
    }

    /**
     * Отображает конкретный ресурс
     */
    public function show(Game $game)
    {
        return response()->json($game);
    }

    /**
     * Удаляет конкретный ресурс из базы данных
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return response()->json(['message' => 'done']);
    }
}
