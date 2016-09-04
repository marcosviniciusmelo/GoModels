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
						<a href="single-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-liked"></i></div>
							<a href="single-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>

					<li class="itemModelo">
						<a href="single-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="single-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>
					<li class="itemModelo">
						<a href="single-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="single-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>
					<li class="itemModelo">
						<a href="single-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="single-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>
					<li class="itemModelo">
						<a href="single-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="single-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>
					<li class="itemModelo">
						<a href="single-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="single-modelo.php"><span class="name">Adriane Boff</span></a>
						</div>
					</li>
					<li class="itemModelo">
						<a href="single-modelo.php"><figure><img src="img/fotoModelo.jpg" alt=""></figure></a>
						<div class="bottom">
							<div class="iconLike"><i class="icon-like"></i></div>
							<a href="single-modelo.php"><span class="name">Adriane Boff</span></a>
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

			<div class="scroll-pane">
			
			<form action="">
				
				<div class="field">
					<label>Manequim</label>
					<div class="range">
						<div id="rangeManequim">
							<input type="hidden" value="" name="min">
							<input type="hidden" value="" name="max">
						</div>
					</div>
				</div>

				<div class="field">
					<label>Idade</label>
					<div class="range">
						<div id="rangeIdade">
							<input type="hidden" value="" name="min">
							<input type="hidden" value="" name="max">
						</div>
					</div>
				</div>

				<div class="field">
					<label>Localidade</label>
					<div class="fieldAutocomplete">
						<input type="text" name="local" placeholder="Digite o local">
						<button><i class="icon-plus"></i></button>
					</div>
				</div>

				<div class="field">
					<label>Cabelos</label>
					<div class="fieldCheckes">
						<div class="check">
							<input type="checkbox" name="cabelos">
							<span>Loiros</span>
						</div>
						<div class="check">
							<input type="checkbox" name="cabelos">
							<span>Pretos</span>
						</div>
						<div class="check">
							<input type="checkbox" name="cabelos">
							<span>Ruivos</span>
						</div>
						<div class="check">
							<input type="checkbox" name="cabelos">
							<span>Castanhos</span>
						</div>
					</div>
				</div>

				<div class="field">
					<label>Etinia</label>
					<div class="fieldCheckes">
						<div class="check">
							<input type="checkbox" name="etinia">
							<span>Branca</span>
						</div>
						<div class="check">
							<input type="checkbox" name="etinia">
							<span>Negra</span>
						</div>
						<div class="check">
							<input type="checkbox" name="etinia">
							<span>Parda</span>
						</div>
						<div class="check">
							<input type="checkbox" name="etinia">
							<span>Oriental</span>
						</div>
					</div>
				</div>

				<div class="field">
					<label>Olhos</label>
					<div class="fieldCheckes">
						<div class="check">
							<input type="checkbox" name="olhos">
							<span>Azuis</span>
						</div>
						<div class="check">
							<input type="checkbox" name="olhos">
							<span>Verdes</span>
						</div>
						<div class="check">
							<input type="checkbox" name="olhos">
							<span>Pretos</span>
						</div>
						<div class="check">
							<input type="checkbox" name="olhos">
							<span>Castanhos</span>
						</div>
					</div>
				</div>

				<div class="field">
					<label>Especialidade</label>
					<div class="fieldCheckes">
						<div class="check">
							<input type="checkbox" name="especialidade">
							<span>Passarela</span>
						</div>
						<div class="check">
							<input type="checkbox" name="especialidade">
							<span>Fotos</span>
						</div>
						<div class="check">
							<input type="checkbox" name="especialidade">
							<span>Eventos</span>
						</div>
					</div>
				</div>

				<div class="fieldBtns">
					<button class="btnCancelar" type="reset">CANCELAR</button>
					<button class="btnFiltrar" type="submit">FILTRAR</button>
				</div>

			</form>
			</div>
			
		</div>
		
	</div>
	<div class="maskBarraFiltro"></div>
	<!-- barra filtro -->

<?php include('footer.php'); ?>