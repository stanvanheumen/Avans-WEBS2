$(document).ready(function(){
	if(location.pathname == '/home/account') {
		totalPrice();
	}
	
	$(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
	
	/*$( ".search-product-1" ).keyup(function() {
		searchProduct( $(this).val() );
	});
	
	$( ".search-product-1" ).focusout(function() {
		$(".search-product-1-results").css('display', 'none');
	});*/
	
	searchMonitor(".search-product-1");
	searchMonitor(".search-product-2");
	searchMonitor(".search-product-3");
});

function searchMonitor(className) {
	$( className ).keyup(function() {
		searchProduct( className, $(this).val() );
	});
	
	$( className ).focusout(function() {
		$( className + "-results" ).css('display', 'none');
	});
}

function searchProduct(className, $val) {
	if($val.length == 0) {
		$( className + "-results" ).css('display', 'none');
		$( className + "-results" ).empty();
		return;
	}
	$.get( "/api/search?limit=5&filter=" + $val, function( json ) {
		$( className + "-results" ).css('display', 'none');
		$( className + "-results" ).empty();
		
		for(var i = 0; i < json.length; i++) {
			var obj = json[i];
			$( className + "-results" ).append("<li class='text-center'><a href=\"#\"><img src='/" + obj.thumb_link + "' class='img-responsive center-block' style='display: block; max-height: 50px;'>" + obj.name + "</a></li>");
			if(i < json.length - 1) {
				$( className + "-results" ).append("<li role=\"presentation\" class=\"divider\"></li>");
			}
		}
		
		if(json.length > 0) {
			$( className + "-results" ).css('display', 'block');
		}
	}, "json");
}

function update(id, price) {
	var newPrice = price * $("#input" + id).val();
	newPrice = precise_round(newPrice, 2);
	$('#' + id).html("&#8364; " + newPrice);
	$('#' + id).data('price', newPrice);
	totalPrice();
}

function totalPrice() {
	var price = 0.0;
	$('.product-price').each(function() {
		price += parseFloat($(this).data('price'));
	});
	
	price = precise_round(price, 2);
	
	$('.total-price').html('<strong>Totaal: &#8364; ' + price + '</strong>');
}

function precise_round(num, decimals) {
	var t = Math.pow(10, decimals);   
	return (Math.round((num * t) + (decimals>0?1:0)*(Math.sign(num) * (10 / Math.pow(100, decimals)))) / t).toFixed(decimals);
}