@extends('layout.layout')
<title>Filmes</title>

@section('conteudo')
    
  
    <div class=" lg:pb-4">
 
   
   
      <div class="mt-12 mx-auto max-w-4xl"> 
        
      <div class="px-4  text-green-400 text-base md:text-lg font-extrabold uppercase tracking-wide mb-8 ">Filmes populares</div>
        
        <div class="p-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4  text-sm text-gray-700">
            
        @foreach ($filmes as $filme)
        
         <div class=" rounded p-2  text-center text-base">
            <div class="text-sm font-semibold ">
                <a href="{{ route('show', $filme['id']) }}">
                    <img src="https://image.tmdb.org/t/p/w500/{{ $filme['poster_path'] }}" alt="filmes" class="">
                </a> 
            </div>
            <div class="mt-1  font-bold text-white text-lg">{{ $filme['title'] }}</div>

            <div class=" flex text-sm items-center justify-center text-white">{{ $filme['vote_average'] }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-yellow-400">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
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
    
    
    @endsection









     