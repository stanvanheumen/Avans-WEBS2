<div class="container">
	<div class="row">
		{foreach $products as $product}
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					{foreach $product_images as $image}
					{if $image->getProductId() eq $product->getId()}
					<img src="/{$image->getLink()}" alt="temp" class="img-responsive" />
					{/if}
					{/foreach}
				</div>
				<div class="panel-footer">
					<a href="/home/productdetails?product_id={$product->getId()}">{$product->getProductNaam()}</a>
				</div>
			</div>
		</div>
		{/foreach}
	</div>
</div>