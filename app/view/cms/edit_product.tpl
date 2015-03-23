<div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Product wijzigen</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/edit_product_post?id={$product->getId()}" method="post" role="form">
						<div class="form-group">
							<label for="categorie">Categorie</label>
							<select class="form-control" id="categorie_id" name="categorie_id" required>
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
							<input type="text" class="form-control" id="prijs" value="{$product->getPrijs()}" name="prijs" placeholder="Prijs" required />
						</div>
						<div class="form-group">
							<label for="korte_beschrijving">Korte beschrijving</label>
							<input type="text" class="form-control" id="beschrijving_kort" value="{$product->getBeschrijvingKort()}" name="beschrijving_kort" placeholder="Korte beschrijving" required />
						</div>
						<div class="form-group">
							<label for="lange_beschrijving">Lange beschrijving</label>
							<textarea type="text" class="form-control" id="beschrijving_lang" name="beschrijving_lang" placeholder="Lange beschrijving" required>{$product->getBeschrijving()}</textarea>
						</div>
						<div class="form-group">
							<label for="voorraad">Voorraad</label>
							<input type="text" class="form-control" id="voorraad" value="{$product->getVoorraad()}" name="voorraad" placeholder="Voorraad" required />
						</div>
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