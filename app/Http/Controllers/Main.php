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
        // $x = Http::withToken('token')->get('');
        

        $url = Http::get("https://api.themoviedb.org/3/movie/popular?api_key={$apikey}&language=en-US&page=1")
        ->json()['results'];

        $generos = Http::get("https://api.themoviedb.org/3/genre/movie/list?api_key={$apikey}&language=en-US&page=1")
        ->json()['genres'];

  

        return view('index', ['filmes'=>$url], ['generos' => $generos]);



            
        }
    //FIM do INDEX METODO

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



    public function create()
    {
        //
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apikey = config('services.tmdb.key');

        $filmes_id = Http::get("https://api.themoviedb.org/3/movie/{$id}?api_key={$apikey}&language=en-US&append_to_response=credits,videos,images&include_image_language=en,null?include_video_language=en")->json();

        $generos = Http::get("https://api.themoviedb.org/3/genre/movie/list?api_key={$apikey}&language=en-US&page=1")
        ->json()['genres'];
       
        return view('show', ['filme' => $filmes_id, 'generos' => $generos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


// jogar isso em outro lugar , nos documentos

        //  foreach($url as $filmes){
        //     echo $filmes['title'];
        //     echo '<br>';
        //  }

        //  print_r($x['results'][0]['title']);
        //  echo $x['results'][0]['title'];
       //echo $x->results[1]->title;

        // echo $generos[6]['id'].'<br>';   
        //18   

        // echo $url[4]['genre_ids'][1].'<br>';
        //18
        // $generos_collect = collect($generos)->mapWithKeys(function ($gen){
        //     return [$gen['id'] => $gen['name']];
        // });


        
     

        // foreach ($generos_collect as $key) {
        //     echo $key.'<br>';
        // }

        // print_r($generos_collect);

        // echo "<hr>";
        // dump($generos_collect);
        // echo "<hr>";

        // echo $generos_collect[27];

        // echo "<hr>";
        // foreach ($url as $key) {
        //     for ($i=0; $i < count($key); $i++) { 
        //     //    echo $key[$i]['genre_ids'].'<br>';
        //     }
        // }
        


        //PENSANDO
        // foreach ($url as $filme) {
        //     echo $filme['title'].'<br>';
        //     //echo $filme['genre_ids'];
        // }

        // echo "<hr>";

        // for($i=0; $i<count($generos); $i++){
        //     echo $generos[$i]['id'].'<br>';
        // }

        // echo "Terceiro <hr>";
       
        // foreach ($url as $filme) {
        //     for($i=0; $i<count($filme); $i++){
        //         // echo $filme['genre_ids'][$i].'<br>';
        //         echo $i.'<br>';
        //     }
            // for ($i=0; $i < count($filme['genre_ids']) ; $i++) { 
            //    if ($filme['genre_ids'][$i] == $generos[$i]['id']){
            //             echo $generos[$i]['name'].'<br>';
            //    }
            // }
            
        // }



              // foreach($url as $film){
        //     foreach($film['genre_ids'] as $fgi){
        //         if($fgi == 28){
        //             echo "é o 28!";
        //         }
        //     }
        // }


        // foreach($generos as $g){
        //     if($g['id'] == 28){
        //         echo '<br>aqui é o 28 tbm!<br>e esse é o name do id 28 = '.$g['name'];
        //     }
        // }

        
        // echo "<hr>";

        // foreach($url as $film){
        //     for($i=0; $i<3; $i++){
        //         for($x=0; $x<10; $x++){
        //             if($x==9){
        //                 echo "<br>termino<br>";
        //             }
        //             echo '<br>'.$x;
        //         }
        //     }
        // }
      

        // foreach ($generos[] as $genero) {
        //     echo $genero;
        //     echo "<br>";
        // }

        // for ($i=0; $i < count($generos); $i++) { 
        //     echo $generos[$i]['id'].'<br>';
        // }
// echo $generos[1]['id']. '----';
// echo $generos[1]['name'].'----';
// echo count($generos);



    //    dump($generos);
    //    dump($url);

    //    echo "<h1>Aqui é o que conta</h1>";
    //    for ($i=0; $i < count($generos); $i++) { 
    //         echo "{$generos[$i]['id']}<br>";
    //         echo "{$generos[$i]['name']}<br>";
    //    }

    //    echo "<h1>Aqui é o que conta2</h1>";


    //    foreach ($url as  $filme) {
    //        for ($i=0; $i < count($filme['genre_ids']); $i++) { 
    //         if($filme['genre_ids'][$i] == $generos[$i]['id'])
    //            echo "{$generos[$i]['name']}<br>"; 
                            
    //         }

    //    }

//       
    //    for ($i=0; $i < count($url); $i++) { 
    //         echo "{$url[$i]['id']}<br>";
            
    //    }

        // $generos_collect = collect($generos)->mapWithKeys(function ($gen){
        //     return [$gen['id'] => $gen['name']];
        // });

       
        //https://api.themoviedb.org/3/genre/movie/list?api_key=<<api_key>>&language=en-US