<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Main extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apikey = config('services.tmdb.key');
        // $search = 'velozes';
        //$apikey = API_KEY;
       
        

        $url = Http::get("https://api.themoviedb.org/3/movie/popular?api_key={$apikey}&language=en-US&page=1")
        ->json()['results'];

        $generos = Http::get("https://api.themoviedb.org/3/genre/movie/list?api_key={$apikey}&language=en-US&page=1")
        ->json()['genres'];

  

        return view('index', ['filmes'=>$url], ['generos' => $generos]);

    
        }
    

    public function series(){
        $apikey = config('services.tmdb.key');

        echo "<h1>aqui irão entrar as series se tiver</h1>";

    }

    public function pesquisa(Request $request){
        $apikey = config('services.tmdb.key');

        $search = $request->input('search');


        $pesquisa_url = Http::get("https://api.themoviedb.org/3/search/movie?api_key={$apikey}&query={$search}")
        ->json()['results'];

        $generos = Http::get("https://api.themoviedb.org/3/genre/movie/list?api_key={$apikey}&language=en-US&page=1")
        ->json()['genres'];

        return view('pesquisa', ['pesquisa_url' => $pesquisa_url, 'generos' => $generos]);

    }




   
    public function show($id)
    {
        $apikey = config('services.tmdb.key');

        $filmes_id = Http::get("https://api.themoviedb.org/3/movie/{$id}?api_key={$apikey}&language=en-US&append_to_response=credits,videos,images&include_image_language=en,null?include_video_language=en")->json();

        $generos = Http::get("https://api.themoviedb.org/3/genre/movie/list?api_key={$apikey}&language=en-US&page=1")
        ->json()['genres'];
       
        return view('show', ['filme' => $filmes_id, 'generos' => $generos]);
    }

    
}
