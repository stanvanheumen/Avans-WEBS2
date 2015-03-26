<div class="container">
	<div class="row cms vertical-offset-20">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Product toevoegen</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/create_product_post" method="post" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label for="categorie_id">Categorie</label>
							<select class="form-control" id="categorie_id" name="categorie_id">
							{foreach $categorie as $cat}
								<option value="{$cat->getId()}">{$cat->getNaam()}</option>
							{/foreach}
							</select>
						</div>
						<div class="form-group">
							<label for="productnaam">Productnaam</label>
							<input type="text" class="form-control" id="productnaam" name="productnaam" placeholder="Productnaam" required />
						</div>
						<div class="form-group">
							<label for="prijs">Prijs</label>
							<input type="text" class="form-control" id="prijs" name="prijs" placeholder="Prijs" required />
						</div>
						<div class="form-group">
							<label for="beschrijving_kort">Korte beschrijving</label>
							<input type="text" class="form-control" id="beschrijving_kort" name="beschrijving_kort" placeholder="Korte beschrijving" required />
						</div>
						<div class="form-group">
							<label for="beschrijving_lang">Lange beschrijving</label>
							<textarea class="form-control" id="beschrijving_lang" name="beschrijving_lang" placeholder="Lange beschrijving" required></textarea>
						</div>
						<div class="form-group">
							<label for="voorraad">Voorraad</label>
							<input type="text" class="form-control" id="voorraad" name="voorraad" placeholder="Voorraad" required />
						</div>
						<div class="form-group">
							<label for="image">Thumbnail</label>
							<input type="file" id="image" name="image" accept="image/*" />
						</div>
						<div class="form-group">
							<label>Afbeeldingen</label>
							<input type="file" id="images" name="images[]" multiple="multiple" accept="image/*" />
						</div>
						<div class="pull-right">
							<button type="submit" class="btn btn-default">Toevoegen</button>
							<a href="/cms/products" class="btn btn-default">Annuleren</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>