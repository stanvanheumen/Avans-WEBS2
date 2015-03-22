$(document).ready(function(){
	if(location.pathname == '/home/account') {
		totalPrice();
	}
});

function update(id, price) {
	var newPrice = price * $("#input" + id).val();
	$('#' + id).html("&#8364; " + newPrice);
	$('#' + id).data('price', newPrice);
	totalPrice();
}

function totalPrice() {
	var price = 0.0;
	$('.product-price').each(function() {
		price += parseFloat($(this).data('price'));
	});
	
	$('.total-price').html('<strong>Totaal: &#8364; ' + price + '</strong>');
}