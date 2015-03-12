<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<h3 class="panel-title">Assortiment</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Categorie&euml;n</h3>
				</div>
				<ul class="list-group">
					<li class="list-group-item active-link"><a href="#">Alle artikelen</a></li>		
					{foreach $categories as $cat} 
						<li class="list-group-item"><a href="?categorie={$cat->getId()}">{$cat->getNaam()}</a></li>
					{/foreach} 
				</ul>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						{$category}
					</h3>
				</div>
				<div class="panel-body">
				
				</div>
			</div>
		</div>
	</div>
</div>