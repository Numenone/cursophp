<?php

include_once 'php_action/db_connect.php';
include_once 'includes/header.php';
include_once 'includes/mensagem.php';
?>



<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Clientes </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Sobrenome:</th>
					<th>Email:</th>
					<th>Idade:</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM clientes";
				$resultado = mysqli_query($connect, $sql);

				if(mysqli_num_rows($resultado) > 0 ):
				while($dados = mysqli_fetch_array($resultado)):
					?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['sobrenome']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['idade']; ?></td>
					<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating cyan"><i class="material-icons">edit</i></a></td>
					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating cyan modal-trigger"><i class="material-icons">delete</i></a></td>

					<div id="modal<?php echo $dados['id']; ?>" class="modal z-depth-4" style="border-radius: 20px; overflow: hidden;">
  				  <div class="modal-content center">
    			    <h4 class="blue-text text-darken-2">Opa!</h4>
  				      <p class="grey-text text-darken-1">Tem certeza que deseja excluir esse cliente?</p>
  				  </div>
  				  <div class="modal-footer" style="display: flex; justify-content: center; gap: 15px; padding-bottom: 20px;">
   				     <a href="#!" class="modal-close waves-effect waves-light btn-flat grey-text text-darken-2">
 						           Cancelar
 				       </a>
  			      <form action="php_action/delete.php" method="POST" style="display: inline;">
  		          <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
 		           <button type="submit" name="btn-deletar" class="btn cyan lighten-1 waves-effect">
    		            Sim, desejo deletar!
  		          </button>
  		      </form>
  		 			 </div>
				</div>
					</div>
				</tr>
			<?php endwhile; 
		else:?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<?php
			endif;?>
			</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn">Adicionar cliente</a>
	</div>
</div>


<?php
include_once 'includes/footer.php';
?>