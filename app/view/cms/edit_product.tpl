<div class="container">
	<div class="row cms vertical-offset-20">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Product wijzigen</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/edit_product_post?id={$product->getId()}" method="post" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label for="categorie_id">Categorie</label>
							<select class="form-control" id="categorie_id" name="categorie_id">
							{foreach $categorie as $cat}
								{if $product->getCategorieId() eq $cat->getId()}
								<option value="{$cat->getId()}" selected>{$cat->getNaam()}</option>
								{else}
								<option value="{$cat->getId()}">{$cat->getNaam()}</option>
								{/if}
							{/foreach}
							</select>
						</div>
						<div class="form-group">
							<label for="productnaam">Productnaam</label>
							<input type="text" class="form-control" id="productnaam" value="{$product->getProductNaam()}" name="productnaam" placeholder="Productnaam" required />
						</div>
						<div class="form-group">
							<label for="prijs">Prijs</label>
							<input type="number" min="1" step="0.01" class="form-control" id="prijs" value="{$product->getPrijs()}" name="prijs" placeholder="Prijs" required />
						</div>
						<div class="form-group">
							<label for="beschrijving_kort">Korte beschrijving</label>
							<input type="text" class="form-control" id="beschrijving_kort" value="{$product->getBeschrijvingKort()}" name="beschrijving_kort" placeholder="Korte beschrijving" required />
						</div>
						<div class="form-group">
							<label for="beschrijving_lang">Lange beschrijving</label>
							<textarea class="form-control" id="beschrijving_lang" name="beschrijving_lang" required>{$product->getBeschrijving()}</textarea>
						</div>
						<div class="form-group">
							<label for="voorraad">Voorraad</label>
							<input type="number" min="0" class="form-control" id="voorraad" value="{$product->getVoorraad()}" name="voorraad" placeholder="Voorraad" required />
						</div>
						<div class="form-group">
							<label for="image">Thumbnail</label>
							<input type="file" id="afbeelding" name="afbeelding" accept="image/*" />
						</div>
						<div class="form-group">
							<label>Afbeeldingen</label>
							<input type="file" id="afbeeldingen" name="afbeeldingen[]" multiple="multiple" accept="image/*" />
						</div>
						{foreach $images as $image}
						<label>{$image->getLink()}</label>
						<img src="/{$image->getLink()}" alt="img" width="100" class="img-responsive" />
						{/foreach}
						<div class="pull-right">
							<button type="submit" class="btn btn-default">Wijzigen</button>
							<a href="/cms/products" class="btn btn-default">Annuleren</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>