<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../styles/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<title>Portifólio</title>
</head>
<body class="bg-gray-950 text-white">
	<header>
		<?php include '../components/Nav.html'; ?>
	</header>

	<main class="mt-20">
		<section class="flex flex-col items-center justify-center">
			<h1 class="text-4xl text-center">Hello World, I'm <br><span class="text-cyan-300 font-bold">Daniel França Segatto</span></h1>
		</section>
		<section class="flex flex-col items-center justify-center gap-4 mt-4 pl-8 pr-8">
			<h2 class="text-2xl font-bold mt-10">Sobre</h2>
				<p class="text-lg text-justify">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
				</p>
				<div class="flex flex-row items-center justify-center gap-4 mt-4">
					<i class="whatsapp-icon text-3xl text-cyan-300 border-2 border-cyan-300 rounded-full pl-2 pr-2 pt-1 pb-1">
						<a href="https://wa.me/5549988283312" target="_blank">
							<i class="fab fa-whatsapp"></i>
						</a>
					</i>
					<i class="linkedin-icon text-3xl text-cyan-300 border-2 border-cyan-300 rounded-full pl-2 pr-2 pt-1 pb-1">
						<a href="https://www.linkedin.com/in/daniel-fran%C3%A7a-segatto-03969a190/" target="_blank">
							<i class="fab fa-linkedin"></i>
						</a>
					</i>
					<i class="github-icon text-3xl text-cyan-300 border-2 border-cyan-300 rounded-full pl-2 pr-2 pt-1 pb-1">
						<a href="https://github.com/DFSegatto" target="_blank">
							<i class="fab fa-github"></i>
						</a>
					</i>
				</div>
			<button class="bg-cyan-300 text-1xl text-gray-950 font-bold border-2 border-cyan-300 rounded-full pl-5 pr-5 pt-2 pb-2 hover:bg-cyan-400 hover:border-cyan-400 cursor-pointer" onclick="window.open('https://drive.google.com/file/d/1-_0000000000000000000000000000000000000000000000000000000000000000/view?usp=sharing', '_blank')">
				Download CV
			</button>
		</section>
		<section class="flex flex-col items-center justify-center p-4 mt-10 shadow-xl/30 shadow-white rounded-lg">
			<div class="mb-8">
				<h2 class="text-2xl text-center font-bold mb-10">Tecnologias</h2>
				<div class="grid grid-cols-5 text-center gap-4">
					<div>
						<i class="fab fa-html5 text-3xl text-cyan-300 border-2 border-cyan-300 rounded-full pl-2 pr-2 pt-1 pb-1"></i>
						<p>HTML5</p>
					</div>
					<div>
						<i class="fab fa-css3-alt text-3xl text-cyan-300 border-2 border-cyan-300 rounded-full pl-2 pr-2 pt-1 pb-1 "></i>
						<p>CSS3</p>
					</div>
					<div>
						<i class="fab fa-js text-3xl text-cyan-300 border-2 border-cyan-300 rounded-full pl-2 pr-2 pt-1 pb-1"></i>
						<p>JavaScript</p>
					</div>
					<div>
						<i class="fab fa-php text-3xl text-cyan-300 border-2 border-cyan-300 rounded-full pl-2 pr-2 pt-1 pb-1"></i>
						<p>PHP</p>
					</div>
					<div>
						<i class="fab fa-react text-3xl text-cyan-300 border-2 border-cyan-300 rounded-full pl-2 pr-2 pt-1 pb-1"></i>
						<p>React</p>
					</div>
				</div>
				<div class="grid grid-cols-4 text-center gap-4 mt-4">
					<div>
						<i class="fab fa-wordpress text-3xl text-cyan-300 border-2 border-cyan-300 rounded-full pl-2 pr-2 pt-1 pb-1"></i>
						<p>WordPress</p>
					</div>
					<div>
						<i class="fa-solid fa-database text-3xl text-cyan-300 border-2 border-cyan-300 rounded-full pl-2 pr-2 pt-1 pb-1"></i>
						<p>MySQL</p>
					</div>
					<div>
						<i class="fa-brands fa-bootstrap text-3xl text-cyan-300 border-2 border-cyan-300 rounded-full pl-2 pr-2 pt-1 pb-1"></i>
						<p>Bootstrap</p>
					</div>
					<div>
						<i src="../../public/assets/images/tailwind.png" class="text-3xl text-cyan-300 border-2 border-cyan-300 rounded-full pl-2 pr-2 pt-1 pb-1"></i>
						<p>Tailwind</p>
					</div>
				</div>
			</div>
		</section>
		<section class="flex flex-col items-center justify-center mt-4 pl-8 pr-8">
			<h2 class="text-2xl">Projetos</h2>
			<div class="grid grid-cols-1 gap-4 mt-6">
				<div class="bg-gray-800 h-130 w-120 pl-6 pr-6 pt-4 pb-4 text-center rounded-lg relative ">
					<h3 class="font-bold">Desenvolvimento de site para a empresa Web FS</h3>
					<p class="text-sm">Criação de um site dinâmico e responsivo.</p>
					<img src="../../public/assets/images/webfs-1.png" alt="Imagem Home Page Cabecalho Web FS" class="w-50 h-50 absolute top-30 left-10 z-0 shadow-xl/30 shadow-white border-1 border-cyan-300 rounded-lg">
					<img src="../../public/assets/images/webfs-2.png" alt="Imagem Home Page Serviços Web FS" class="w-50 h-50 absolute top-50 left-30 z-1 shadow-xl/30 shadow-white border-1 border-cyan-300 rounded-lg">
					<img src="../../public/assets/images/webfs-3.png" alt="Imagem Contato Web FS" class="w-50 h-50 absolute top-20 left-60 z-2 shadow-xl/30 shadow-white border-1 border-cyan-300 rounded-lg">
					<button class="bg-cyan-300 text-1xl text-gray-950 font-bold border-2 border-cyan-300 rounded-full pl-5 pr-5 pt-2 pb-2 mt-95 hover:bg-cyan-400 hover:border-cyan-400 cursor-pointer" onclick="window.open('https://www.webfs.com.br/', '_blank')">
						Detalhes
					</button>
				</div>		
			</div>
		</section>
	</main>
	<?php include '../components/Footer.html'; ?>
</body>
</html>