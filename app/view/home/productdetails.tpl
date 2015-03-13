<div class="container">
	<h1>{$product->getProductNaam()}</h1>
	<table class="table">
		<tr>
			<td>Productnaam<td>
			<td>{$product->getProductNaam()}</td>
		</tr>
		<tr>
			<td>Beschrijving<td>
			<td>{$product->getBeschrijving()}</td>
		</tr>
		<tr>
			<td>Prijs<td>
			<td>&euro; {$product->getPrijs()}</td>
		</tr>
		<tr>
			<td>Op voorraad<td>
			<td> 
			{if $product->getVoorraad() > 0}
			Ja
			{else}
			Nee
			{/if}
			</td>
		</tr>
	</table>
</div>