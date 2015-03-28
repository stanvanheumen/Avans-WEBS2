<div class="container">
	<div class="row cms vertical-offset-20">
		<div class="col-md-2 pull-right">
			<div class="panel panel-default">
				<div class="panel-body text-centered">
					<a class="btn btn-success" href="/cms/create_product"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row cms">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Producten</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-8">Naam</th>
						<th class="col-md-2">Prijs</th>
						<th class="col-md-2 text-centered">Opties</th>
					</tr>
					{foreach $products as $product}
					<tr>
						<td class="col-md-8">{$product->getProductNaam()}</td>
						<td class="col-md-2">&euro; {$product->getPrijs()}</td>
						<td class="col-md-2 text-centered">
							<a href="/home/productdetails?product_id={$product->getId()}" class="btn btn-primary"><span class="glyphicon glyphicon-sunglasses"></span></a>
							<a class="btn btn-warning" href="/cms/edit_product?id={$product->getId()}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?');" class="btn btn-danger" href="/cms/delete_product?id={$product->getId()}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					{/foreach}
				</table>
			</div>
		</div>
	</div>
	<div class="row cms">
		<div class="col-md-12">
			<nav class="pull-right">
				<ul class="pagination pagination-sm">
					{if $pages > 1}
					{if $current_page > 1}
						<li><a href="/cms/products?page={$current_page - 1}" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
					{else}
						<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
					{/if}
					{for $p=1 to $pages}
					{if $p == $current_page}
					<li class="active"><a href="/cms/products?page=$p">{$p}</a></li>
					{else}
					<li><a href="/cms/products?page={$p}">{$p}</a></li>
					{/if}
					{/for}
					{if $pages == $current_page}
					<li class="disabled"><a href="#">&raquo;</a></li>
					{else}
					<li><a href="/cms/products?page={$current_page + 1}">&raquo;</a></li>
					{/if}
					{/if}
				</ul>
			</nav>
		</div>
	</div>
</div>