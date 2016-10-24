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
						<select name="estado">
							<option selected="" value="">Selecione</option>
							<option value="Acre">Acre</option>
							<option value="Alagoas">Alagoas</option>
							<option value="Amapá">Amapá</option>
							<option value="Amazonas">Amazonas</option>
							<option value="Bahia">Bahia</option>
							<option value="Ceará">Ceará</option>
							<option value="Distrito Federal">Distrito Federal</option>
							<option value="Espírito Santo">Espírito Santo</option>
							<option value="Goiás">Goiás</option>
							<option value="Maranhão">Maranhão</option>
							<option value="Mato Grosso">Mato Grosso</option>
							<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
							<option value="Minas Gerais">Minas Gerais</option>
							<option value="Pará">Pará</option>
							<option value="Paraíba">Paraíba</option>
							<option value="Paraná">Paraná</option>
							<option value="Pernambuco">Pernambuco</option>
							<option value="Piauí">Piauí</option>
							<option value="Rio de Janeiro">Rio de Janeiro</option>
							<option value="Rio Grande do Sul">Rio Grande do Sul</option>
							<option value="Rio Grande do Norte">Rio Grande do Norte</option>
							<option value="Rondônia">Rondônia</option>
							<option value="Roraima">Roraima</option>
							<option value="Santa Catarina">Santa Catarina</option>
							<option value="São Paulo">São Paulo</option>
							<option value="Sergipe">Sergipe</option>
							<option value="Tocantins">Tocantins</option>
						</select>					</div>
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