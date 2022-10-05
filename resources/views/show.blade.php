@extends('layout.layout')
<title>Filme - Detalhes</title>

@php
    //dump($filme);

@endphp

@section('conteudo')
    


    <div class="mt-2 mx-auto max-w-4xl lg:pb-16">          
       
        <div class="grid grid-cols-1 sm:grid-cols-2  p-4 ">  <!-- inicio grid -->
            <div class="cols-span-4 ">
                <div class="flex justify-center md:justify-start">
                    <img src="https://image.tmdb.org/t/p/w500/{{ $filme['poster_path'] }}" alt="" class="w-64 md:w-96 ">
                </div>
               
            </div>

            <div class="cols-span-8 text-white px-4 ">
                <div class="text-2xl uppercase font-bold mt-4">{{ $filme['title'] }}</div>
                <div class="mb-8 flex items-center text-sm text-gray-200 ">{{ round($filme['vote_average'], 1) }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-yellow-400">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                    </svg>
                    <span class="mx-2">|</span>


                    @for ($i=0; $i < count($filme['genres']); $i++)
                        @for ($x=0; $x < count($generos); $x++)
                            @if ($generos[$x]['id'] == $filme['genres'][$i]['id'])
                                {{ $filme['genres'][$i]['name'] }}
                            @endif
                        @endfor
                    @endfor 


                    <span class="mx-2">|</span>
                    
                    {{ \Carbon\Carbon::parse($filme['release_date'])->format('d M, Y') }}
                
                </div>
                <div class=" text-white mb-8"> {{ $filme['overview'] }} </div>

                <div class="flex mb-7 justify-center md:justify-start">
                <div class="grid grid-cols-2 gap-4">
                    @foreach ($filme['credits']['crew'] as $crew) 
                        @if ($loop->index < 4)
                        
                            <div class="mb-3 text-white p-2">
                                <div class="text-xs sm:text-sm md:text-base ">{{ $crew['name'] }}</div> 
                                <div class="text-xs mb-2 text-gray-400">{{ $crew['job'] }}</div> 
                            </div>
                        @endif                                                                  
                    @endforeach    
                </div>
            </div>

                <div class="flex justify-center md:justify-start">
                @foreach ($filme['videos']['results'] as $videos)
                    @if ($videos['type'] == 'Trailer')
                        
                        <a href="https://www.youtube.com/watch?v={{ $videos['key'] }}/" target="_blank" class="flex items-center w-64 sm:text-sm bg-orange-400 py-4 px-8 rounded-lg md:text-lg text-black shadow-lg font-medium ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex mx-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                            </svg>
                              
                            Play Trailer
                        
                        </a>

                        @break    
                   
                    @endif
                   
                @endforeach
                    </div>
                
                

            </div>


        </div>   <!-- fim grid -->


        <div class="text-center mt-16 mb-5">
            <span class="p-1.5 px-3 text-center text-lg border-b border-gray-400 text-white font-semibold">CAST</span>
        </div>
        <div class="flex justify-center text-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-4">
                    @foreach ($filme['credits']['cast'] as $cast) 
                    @if ($loop->index < 4)
                    
                        <div class="text-white p-2">
                            <div class="text-xs sm:text-sm md:text-base ">{{ $cast['name'] }}</div> 
                            <div class="text-xs mb-2 text-gray-400">{{ $cast['character'] }}</div> 
                            @if ($cast['profile_path'] == null)
                               <div class="w-36 sm:w-48 h-48 sm:h-72 rounded-lg bg-gray-500 bg-opacity-20 text-gray-400 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                  </svg>
                                  

                               </div>
                            @else
                                <img src="https://image.tmdb.org/t/p/w500/{{ $cast['profile_path'] }}" alt="" class="w-36 sm:w-48 rounded-lg">
                            @endif
                            
                        </div>
                    @endif                                                                  
                    @endforeach    
                
            </div>
        </div>



        <div class="text-center mt-14 mb-10">
            @foreach ($filme['images']['backdrops'] as $imgs)
            @if ($loop->index < 4)
            <span class="p-1.5 px-3 text-center text-xl border-b border-gray-400 text-white font-semibold">BACKDROPS</span>
            @break
            @endif
            @endforeach
        </div>
        <div class="flex justify-center text-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-2">
            
                @foreach ($filme['images']['backdrops'] as $imgs)
                @if ($loop->index < 4)
                    <img src="https://image.tmdb.org/t/p/w500/{{ $imgs['file_path'] }}" alt="" class="rounded-lg">
                @endif
                @endforeach
       
            </div>
        </div>


    </div> 
    
@endsection








    
    





     