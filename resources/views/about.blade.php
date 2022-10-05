@extends('layout.layout')
<title>Sobre</title>

@section('conteudo')
    
  
    <div class=" lg:pb-4">
 
   
   
      <div class="mt-12 mx-auto max-w-4xl"> 
        
      <div class="px-4  text-green-400 text-base md:text-lg font-extrabold uppercase tracking-wide mb-3 ">Sobre este site</div>
        
        <div class="p-4  text-gray-200 text-base ">
            
              
            -> Esse projeto foi desenvolvido a partir do consumo da API <a href="https://developers.themoviedb.org/3/getting-started/introduction" target="_blank" class="font-bold underline">TMDB</a> (The Movie Database API) de filmes, séries e programas de TV.
            <br><br>-> Na construção desse projeto, foi utilizado no back-end o PHP Laravel e no front-end Tailwind CSS e JavaScript para criar o menu mobile.
            <br><br>
            -> Deploy feito no Heroku.

          

            <br><br><br>
            <div class="text-gray-300 text-sm">
                <span class="font-bold">Obs:</span> Na parte de pesquisa de filmes foi filtrado para apenas exibir os filmes com pontuação maior que 6.6 estrelas.
            </div>
        
        </div>

        <div class="px-4 text-indigo-400 text-base md:text-base font-extrabold uppercase tracking-wide mt-4 ">Desenvolvedor</div>

        <div class="p-4 text-gray-200 text-xs sm:text-base">
           <div class="uppercase mb-4">Vitor de Lucca</div> 
           <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
              </svg>
              
            vitor_delucca@hotmail.com
            </div> 

            <div class="flex items-center mt-2">
                <a href="https://github.com/vitordl" target="_blank" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                    </svg>                 
                  github.com/vitordl
                </a>
            </div> 
        </div>

    </div>
   
    
    
</div>
    
    
    @endsection









     