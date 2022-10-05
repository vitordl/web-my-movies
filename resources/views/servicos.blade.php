@extends('layout.layout')
<title>Serviços</title>

@section('conteudo')

    <style>
      
    
    </style>
  
    <div class=" lg:pb-4">
 
   
   
      <div class="mt-12 mx-auto max-w-4xl"> 
        
      <div class="px-4  text-green-400 text-base md:text-lg font-extrabold uppercase tracking-wide mb-3 ">Serviços - Outros projetos</div>
        
        <div class="p-4  text-gray-200 text-base ">
            
        <span class="font-extrabold text-lg tracking-widest uppercase">QuickList</span> -  um projeto de lista de tarefas, trabalhando com todo o CRUD de banco de dados para gerenciar tarefas ou anotações. Por enquanto em modo público para qualquer usuário acessar, podendo ver as tarefas que os outros já criaram (se caso estas não foram excluídas).
        
        <div class="mt-7 ">
        <a class="text-lg underline " href="http://web-quick-list.herokuapp.com/" target="_blank">Confira aqui</a>
        </div>

    
        <a href="http://web-quick-list.herokuapp.com/" target="_blank">
        <img src="{{ asset('imgs/quick.JPG') }}" alt="" class="rounded-lg shadow-lg mt-2 opacity-70 transition duration-300 hover:scale-105">
        </a>  
  

        </div>

    </div>
   
    
    
</div>
    
    
    @endsection









     