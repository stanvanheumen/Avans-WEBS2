<div class="container">
	{if isset($authenticated)}
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-success" role="alert">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{if $authenticated == 1 }
				U bent succesvol ingelogd!
				{elseif $authenticated == 2 }
				U ben uitgelogd!
				{elseif $authenticated == 3 }
				U bent succesvol geregistreerd!
				{/if}
			</div>
		</div>
	</div>
	{/if}
	<div class="row">
		{foreach $products as $product}
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-body featured">
					{foreach $product_images as $image}
					{if $image->getProductId() eq $product->getId()}
					<img src="/{$image->getLink()}" alt="temp" class="img-responsive center-block" />
					{/if}
					{/foreach}
				</div>
				<div class="panel-footer padding-none">
					<a class="btn btn-primary parent-size" href="/home/productdetails?product_id={$product->getId()}">{$product->getProductNaam()}</a>
				</div>
			</div>
		</div>
		{/foreach}
	</div>
</div>