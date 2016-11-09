<?php include('header.php'); ?>

	<main class="cadastro">

		<div class="main">

			<h2 class="titulo">Cadastre-se agora</h2>

			
			<ul class="btnLogin">
				<li class="loginFace"><a href="">LOGAR COM <i class="icon-face"></i></a></li>
				<li class="loginPlus"><a href="">LOGAR COM <i class="icon-plus"></i></a></li>
			</ul>
			<div class="form">
				<form action="">
					<div class="field f-md">
						<label>Nome</label>
						<input type="text" name="nome">
					</div>
					<div class="field f-md">
						<label>Email</label>
						<input type="email" name="email">
					</div>
					<div class="field f-md">
						<label>Senha</label>
						<input type="password" name="senha">
					</div>
					<div class="field f-md">
						<label>Repita a senha</label>
						<input type="password" name="senha">
					</div>
					<div class="field f-md">
						<label>Telefone</label>
						<input type="text" name="telefone">
					</div>
					<div class="field f-pqn2">
						<label>Estado</label>
						<select name="uf" id="uf">
							<option value="">Selecione</option>
							<option value="AC">AC</option>
							<option value="AL">AL</option>
							<option value="AM">AM</option>
							<option value="AP">AP</option>
							<option value="BA">BA</option>
							<option value="CE">CE</option>
							<option value="DF">DF</option>
							<option value="ES">ES</option>
							<option value="GO">GO</option>
							<option value="MA">MA</option>
							<option value="MG">MG</option>
							<option value="MS">MS</option>
							<option value="MT">MT</option>
							<option value="PA">PA</option>
							<option value="PB">PB</option>
							<option value="PE">PE</option>
							<option value="PI">PI</option>
							<option value="PR">PR</option>
							<option value="RJ">RJ</option>
							<option value="RN">RN</option>
							<option value="RS">RS</option>
							<option value="RO">RO</option>
							<option value="RR">RR</option>
							<option value="SC">SC</option>
							<option value="SE">SE</option>
							<option value="SP">SP</option>
							<option value="TO">TO</option>
						 </select>
					</div>
					
					<div class="field f-pqn2">
						<label>Cidade</label>
						<input type="text" name="cidade">
					</div>
					<div class="field f-md">
						<label>Empresa</label>
						<input type="text" name="empresa">
					</div>
					<div class="field f-md">
						<input type="submit" value="ENTRAR">
					</div>
				</form>
			</div>


		</div>

	</main>

<?php include('footer.php'); ?>