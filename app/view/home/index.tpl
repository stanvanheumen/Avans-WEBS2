<div class="container">
	<div class="row">
		{foreach $products as $product}
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body test-panel">
				</div>
				<div class="panel-footer">
					<a href="/home/productdetails?product_id={$product->getId()}">{$product->getProductNaam()}</a>
				</div>
			</div>
		</div>
		{/foreach}
	</div>
</div>