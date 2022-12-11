<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>MyMovies</title>
        <script src="https://cdn.tailwindcss.com"></script>

		<style>

			a.active{
				color: rgb(34,196,94);
				border-bottom: 4px solid rgb(34,196,94);
			}

			a.active-mobile{
				color: rgb(34,196,94);
				font-style: bold;
				
			}
		</style>
	</head>
	<body class="bg-gray-700">
		<!-- Navbar goes here -->
		<nav class="bg-gray-800 shadow-lg">
			<div class="max-w-6xl mx-auto px-4"> 
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="#" class="flex items-center py-4">
								
								<span class="font-semibold text-white text-lg flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-1">
										<path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125z" />
									  </svg>
									  
									  
									  
									MyMovies
								
								</span>
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1 menu">
							<a href="{{ route('index') }}" class=" py-4 px-2 text-gray-300 font-semibold hover:text-green-500 transition duration-300  {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
							<a href="{{ route('servicos') }}" class=" py-4 px-2 text-gray-300 font-semibold hover:text-green-500 transition duration-300 {{ (request()->is('servicos')) ? 'active' : '' }} " >Serviços</a>
							<a href="{{ route('sobre') }}" class="py-4 px-2 text-gray-300 font-semibold hover:text-green-500 transition duration-300  {{ (request()->is('sobre')) ? 'active' : '' }}" >Sobre</a>
							
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-1 ">
						
						<form action="{{ route('pesquisa') }}" method="post" class="mt-2">
							@csrf
							<input type="text" name="search" id="search" placeholder="pesquisar.." class="rounded-full bg-gray-700 px-3 py-1 w-32 outline-none" required>
							<input type="submit" value="ok" class=" bg-green-500 px-3 py-0.3 rounded-full">
						</form>
                       
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-300 hover:text-green-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
						</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li class="active"><a href="{{ route('index') }}" class="block text-sm px-2 py-4    hover:bg-green-400 hover:bg-opacity-50 text-gray-300
						{{ (request()->is('/')) ? 'active-mobile' : '' }}
						">Home</a></li>
					<li><a href="{{ route('servicos') }}" class="block text-sm px-2 py-4 hover:bg-green-400 hover:bg-opacity-50  text-gray-300
						{{ (request()->is('servicos')) ? 'active-mobile' : '' }}
						">Serviços</a></li>
					<li><a href="{{ route('sobre') }}" class="block text-sm px-2 py-4 hover:bg-green-400 hover:bg-opacity-50 text-gray-300
						{{ (request()->is('sobre')) ? 'active-mobile' : '' }}
						">Sobre</a></li>
					
				</ul>
			
		
				<form action="{{ route('pesquisa') }}" method="post" class="px-2 py-4">
					@csrf
					<input type="text" name="search" id="search" placeholder="pesquisar.." class="rounded-full bg-gray-700 px-3 py-1  outline-none" required>
					<input type="submit" value="ok" class=" bg-green-500 px-3 py-0.3 rounded-full ">
				</form>


			</div>
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
							
			</script>
		</nav>

        @yield('conteudo')
		
	</body>
</html>






