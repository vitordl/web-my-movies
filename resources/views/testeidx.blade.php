@extends('layout.layout')
<title>Filmes</title>

@section('conteudo')
    



<div class="uppercase text-3xl text-center mb-10 text-white mt-10">Filmes</div>

<div class="text-white p-5 flex  border border-red-400">
   
    <div class="max-w-4xl mx-auto text-center">
  
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($filmes as $filme)
            <div class="my-2">
                <div class="IMAGEM bg-gray-300">
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/w500/{{ $filme['poster_path'] }}" alt="filmes" class="">
                    </a> 
                    {{-- bom dia............... --}}
               </div>

                <div class="mt-1  font-bold text-white">{{ $filme['title'] }}</div>

                <div class=" flex text-sm items-center justify-center">{{ $filme['vote_average'] }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-yellow-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                      </svg>
                      
                </div>

                <div class="flex justify-center text-sm text-gray-200">
               
                    
                    @for ($i=0; $i < count($filme['genre_ids']); $i++)
                        @for ($x=0; $x < count($generos); $x++)
                            @if ($generos[$x]['id'] == $filme['genre_ids'][$i])
                                {{ $generos[$x]['name'] }}
                            @endif
                        @endfor
                    @endfor 
                      
                </div>
                
            

                


            </div>
        @endforeach
    </div>
</div>
</div>













<div class="h-96"></div>
<div class="h-96"></div>

<div class="CONTAINER max-w-5xl h-screen mt-10 flex mx-auto ">

    {{-- border border border-gray-purple-500 --}}
<div class="FILMES w-full  text-center">
    {{-- <div class="flex mx-auto text-center border border-green-200">
        border
        bom dia
     </div> --}}
    <div class="font-bold uppercase text-xl text-center mb-5 text-white  ">FILMES</div>
    <div class="">
    <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4  lg:gap-6 ">
        {{-- border border border-yellow-300--}}
    @foreach ($filmes as $filme)
      
        <div class="text-white mx-auto text-center my-4 ">  
            {{-- border  border border-red-500--}}
            <div class="">

                <a href="#">
                <img src="https://image.tmdb.org/t/p/w500/{{ $filme['poster_path'] }}" alt="filmes" width="175" class="">
                </a> 

                <div class="mt-1  font-bold text-white">{{ $filme['title'] }}</div>

                <div class=" flex text-sm items-center justify-center">{{ $filme['vote_average'] }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-yellow-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                      </svg>
                      
                </div>

                <div class="text-sm text-gray-200">
               
                    
                    @for ($i=0; $i < count($filme['genre_ids']); $i++)
                        @for ($x=0; $x < count($generos); $x++)
                            @if ($generos[$x]['id'] == $filme['genre_ids'][$i])
                                {{ $generos[$x]['name'] }}
                            @endif
                        @endfor
                           
                    @endfor 
                      
                </div>
                
               </div>
        
        </div>
        
    @endforeach

    <div class="text-lg text-red-500">
        {{ count($generos) }}<br>
        {{ count($filme['genre_ids']) }}
    </div>

</div> {{--  fim --}}
</div>
</div>

@endsection

</div>






     