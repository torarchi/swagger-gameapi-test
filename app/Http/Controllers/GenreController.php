<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genre\GenreRequest;
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
        return response()->json($genres);
    }

    /**
     * Хранит новый ресурс в базе данных
     */
    public function storeOrUpdate(GenreRequest $request, Genre $genre)
    {
        $data = $request->validated();
        
        //Если ресурс существует обновляем его. Если ресурса не существует создаем новый ресурс
        if($genre){
            $genre->update($data);
        }
        else{
            $genre = Genre::create($data);
        }

        return response()->json($genre);
    }

    /**
     * Отображает конкретный ресурс
     */
    public function show(Genre $genre)
    {
        return response()->json($genre);
    }

    /**
     * Удаляет конкретный ресурс из базы данных
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();

        return response()->json(['message' => 'done']);
    }
}
