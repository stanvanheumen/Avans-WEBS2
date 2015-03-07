<?php 
	session_start();
	$_SESSION['title'] = 'Over ons';
	require_once 'inc/template/header.php'; 
?>
		
<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<h3 class="panel-title">Over ons</h3>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<p>
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
				totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
				explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit
			</p>
			<p>	
				sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia 
				dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
				dolore magnam aliquam quaerat voluptatem. 
			</p>
			<p>	
				Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
				suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea 
				voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
			</p>
		</div>
	</div>
</div>
		
<?php 
	require_once 'inc/template/footer.php'; 
?>