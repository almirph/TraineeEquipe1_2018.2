<?php include "pagina_conexao.php"; ?>

<?php
$sql = "SELECT * FROM categoria";
$result = $db_connect->query($sql);
?>

<?php while ($row2 = $result->fetch_assoc()): ?>
	
	<a href="produtos.php?id_categoria=<?php echo $row2['id_categoria'];?>&pagina=1">
		<li class="list-group-item d-flex justify-content-between align-items-center lista-item">
			<?php echo $row2['nome_categoria'];?>
			<span class="badge badge-primary badge-pill nprodutos"></span>
		</li>
	</a>

	<?php endwhile; ?>