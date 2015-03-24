<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">{$title}</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/edit_category_post?id={$categorie->getId()}" method="post" role="form">
						<div class="form-group">
							<label for="naam">Naam</label>
							<input type="text" class="form-control" id="naam" value="{$categorie->getNaam()}" name="naam" placeholder="Naam" required />
						</div>
						
						{if isset($parent_categories)}
						<div class="form-group">
							<label for="categorie">Hoofd Categorie</label>
							<select class="form-control" id="categorie_id" name="categorie_id" required>
								{foreach $parent_categories as $cat}
								{if $cat->getId() == $categorie->getCategorieParent()}
								<option value="{$cat->getId()}" selected>{$cat->getNaam()}</option>
								{else}
								<option value="{$cat->getId()}">{$cat->getNaam()}</option>
								{/if}
								{/foreach}
							</select>
						</div>
						{/if}
						
						<div class="pull-right">
							<button type="submit" class="btn btn-default">Wijzigen</button>
							<a href="/cms/categories" class="btn btn-default">Annuleren</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>