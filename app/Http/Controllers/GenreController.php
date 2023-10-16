<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genre\StoreRequest;
use App\Http\Requests\Genre\UpdateRequest;
use App\Http\Resources\Genre\GenreResource;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Выводит список всех жанров
     */
    public function index()
    {
        $genres = Genre::all();
        return GenreResource::collection($genres);
    }


    /**
     * Хранит новый ресурс в базе данных
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $genre = Genre::create($data);

        return GenreResource::make($genre);
    }

    /**
     * Отображает конкретный ресурс
     */

    public function show(Genre $genre)
    {
        return GenreResource::make($genre);
    }

    /**
     * Обновляет конкретный ресурс в базе данных
     */
    public function update(UpdateRequest $request, Genre $genre)
    {
        $data = $request->validated();
        $genre->update($data);

        return GenreResource::make($genre);
    }

    /**
     * Удаляет конкретный ресурс из базы данных
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();

        return response()->json([
            'message' => 'done'
        ]);
    }
}
