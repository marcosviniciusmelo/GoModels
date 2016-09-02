<?php include('header.php'); ?>

	<main class="listagem">
		
		<div class="barraTop">
			<div class="main">
				<ul class="sessoes">
					<li class="active"><a href="">Mulher</a></li>
					<li><a href="">Homem</a></li>
					<li><a href="">Kids</a></li>
				</ul>

				<ul class="right">
					<li class="filtrar"><i class="icon-filtrar"></i></li>
					<li class="like"><i class="icon-liked"></i><span class="count">0</span></li>
					<li class="linkMenu"><i class="icon-menu"></i></li>
				</ul>
			</div>
		</div>

		<div class="containerListagem">
			<div class="main">
				<h3 class="encontrados">125 modelos encontradas</h3>
				<ul class="listaModelos">
					<!-- loop models -->
					<li class="itemModelo">
						<a href="interna-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="interna-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>

					<li class="itemModelo">
						<a href="interna-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="interna-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>
					<li class="itemModelo">
						<a href="interna-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="interna-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>
					<li class="itemModelo">
						<a href="interna-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="interna-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>
					<li class="itemModelo">
						<a href="interna-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="interna-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>
					<li class="itemModelo">
						<a href="interna-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="interna-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>
					<li class="itemModelo">
						<a href="interna-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="interna-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>
					<!-- loop models -->
				</ul>
			</div>
		</div>
			
	</main>

	<!-- barra filtro -->
	<div class="barraFiltro">

		<div class="btnClose"><i class="icon-close"></i></div>

		<div class="containBarra">
			<form action="">
				
				<div class="field">
					<label>Manequim</label>
					<div class="range">
						<div id="rangeManequim"></div>
						<input type="hidden" value="" name="min">
						<input type="hidden" value="" name="max">
					</div>
				</div>

				<div class="field">
					<label>Idade</label>
					<div class="range">
						<div id="rangeIdade"></div>
						<input type="hidden" value="" name="min">
						<input type="hidden" value="" name="max">
					</div>
				</div>

				<div class="field">
					<label>Localidade</label>
					<div class="fieldAutocomplete">
						<input type="text" name="local" placeholder="Digite o local">
						<button><i class="icon-plus"></i></button>
					</div>
				</div>



			</form>
			
		</div>
		
	</div>
	<!-- barra filtro -->

<?php include('footer.php'); ?>