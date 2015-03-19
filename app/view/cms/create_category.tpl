<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">{$title}</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/create_category_post" method="post" role="form">
					    <div class="form-group">
					     	<label for="naam">Naam:</label>
					      	<input type="text" class="form-control" id="naam" name="naam" placeholder="Naam" required />
					    </div>
						
						<div class="pull-right">
							<button type="submit" class="btn btn-default">Toevoegen</button>
							<a href="/cms/dashboard" class="btn btn-default">Annuleren</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>