<?php 
	$inventories = $inventories->inventory();
?>


<div class="mainContainer">
	<div class="clear"></div>
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold"><?=$_GET['inventorie']?></h4>
		</div>
		
		<div class="mainContent">
			<div class="row">
				<div class="col-lg-2 padd10 ">
					<a href="<?=URL?>/inventories/newEntry/?id=<?=$_GET['id']?>&inventorie=<?= $_GET['inventorie'] ?>" class="btn Blue s14">
						Nueva entrada
					</a>
					
				</div>
				
			</div>
			<div class="clear"></div>
			<div class="containerTable">
				<table id="tableCostumers">
					<thead>
						<tr>
							<td>ID</td>
							<td>Nombre</td>
							<td>Cantidad</td>
							
							<td>ACCIONES</td>
						</tr>
					</thead>	
					<tbody>
						<?php while($row = mysqli_fetch_array($inventories)){ ?>
						    <tr>
						      	<th><?= $row['id']; ?></th>
						      	<th>
						      		<a href="viewWork/<?= $row['id'];?>"><?= $row['name_product']; ?></a></th>
						      	<th><?= $row['quantity']; ?></th>
						      
						      	<th>
						      		
						      	
						      	</th>
						    </tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>