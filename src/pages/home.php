<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../styles/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<title>Portifólio</title>
</head>
<body class="bg-gray-950 text-white p-8">
	<header>
		<?php include '../components/Nav.html'; ?>
	</header>

	<main class="mt-20">
		<section class="flex flex-col items-center justify-center">
			<h1 class="text-4xl">Hello World, I'm <span class="text-cyan-300 font-bold">Daniel França Segatto</span></h1>
		</section>
		<section class="flex flex-col items-center justify-center gap-4 mt-4">
			<h2 class="text-2xl">Sobre</h2>
				<p class="text-lg">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
				</p>
				<div class="flex flex-row items-center justify-center gap-4">
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
		<section class="flex flex-col items-center justify-center">
			<h2 class="text-2xl">Projetos</h2>
			<p class="text-lg">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
			</p>
		</section>
	</main>
</body>
</html>