<?php include('header.php'); ?>

	<main class="precosPasso2">

		<form action="precos-passo3.php">
		
			<div class="coll">
				<div class="container">
					<div class="ctn">
						<span class="assinatura">assinatura mensal <b>59,90</b></span>
						<div class="form">
							<div class="field">
								<label>Nome</label>
								<input type="text" name="nome">
							</div>
							<div class="field">
								<label>Email</label>
								<input type="text" name="email">
							</div>
							<div class="field">
								<label>Telefone</label>
								<input type="text" name="telefone">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="coll">

				<div class="container">
					<div class="ctn">
						<h3>Dados do pagamento</h3>
						<div class="form">
							<div class="field f-checkbox">
								<label for="forma">Cartão de Crédito</label>
								<input type="radio" name="forma">
							</div>
							<div class="field f-checkbox">
								<label for="forma">Débito</label>
								<input type="radio" name="forma">
							</div>
							<div class="field f-checkbox mr-z">
								<label for="forma">Boleto</label>
								<input type="radio" name="forma">
							</div>
							<div class="field">
								<label>Nome do proprietário do cartão de crédito</label>
								<p>(como gravado no cartão)</p>
								<input type="text" name="nome">
							</div>
							<div class="field f-md2">
								<label>Número do cartão</label>
								<input type="text" name="numero">
							</div>
							<div class="field f-pqn mr-z">
								<label>Cód. segurança</label>
								<input type="password" name="cod">
							</div>
							<div class="field">
								<label>Vencimento</label>
								<input type="text" name="vencimento">
							</div>
							<div class="field">
								<input type="submit" value="CONTINUAR">
							</div>
						</div>
					</div>
				</div>
			</div>

		</form>

	</main>

<?php include('footer.php'); ?>