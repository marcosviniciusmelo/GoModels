<?php include('header.php'); ?>

	<main class="passo2">

		<div class="containerCenter">
			<span class="titulo">QUAL O MANEQUIM?</span>
			<div class="icon-manequim"></div>
			<form action="listagem.php">
				<div class="range">
					<div id="rangeManequim"></div>
					<input type="hidden" value="" name="min">
					<input type="hidden" value="" name="max">
				</div>
				<button class="btnSeguir" type="submit"></button>	
			</form>
			<a href="./" class="linkVoltar">VOLTAR</a>
		</div>
			
	</main>

<?php include('footer.php'); ?>