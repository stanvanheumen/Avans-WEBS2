$(document).ready(function(){
	if(location.pathname == '/home/account') {
		totalPrice();
	}
	
	$(".fancybox").fancybox({
        openEffect: 'none',
        closeEffect: 'none'
    });
	
	searchMonitor('.search-product-1', 1);
	searchMonitor('.search-product-2', 2);
	searchMonitor('.search-product-3', 3);
	
});

function searchMonitor(className, id) {
	$( className ).keyup(function() {
		searchProduct( className, $(this).val(), id );
	});
	
	$(document).click(function() {
		$( className + "-results" ).css('display', 'none');
	});
}

function searchProduct(className, value, id) {
	if(value.length == 0) {
		$( className + "-results" ).css('display', 'none');
		$( className + "-results" ).empty();
		return;
	}
	$.get( "/api/search?limit=5&filter=" + value, function( json ) {
		$( className + "-results" ).css('display', 'none');
		$( className + "-results" ).empty();
		
		for(var i = 0; i < json.length; i++) {
			var obj = json[i];
			$( className + "-results" ).append("<li class='text-center'><a class=\"dosearch-" + id + "\" href=\"#\" data-id=\"" + obj.id + "\"><img src='/" + obj.thumb_link + "' class='img-responsive center-block search-image'>" + obj.name + "</a></li>");
			if(i < json.length - 1) {
				$( className + "-results" ).append("<li role=\"presentation\" class=\"divider\"></li>");
			}
		}
		
		if(json.length > 0) {
			$( className + "-results" ).css('display', 'block');
			
			$('.dosearch-' + id).click(function(e){
				var productId = $(this).data('id');
				if($('.table').data('product-1') == productId || $('.table').data('product-2') == productId || $('.table').data('product-3') == productId) {
					alert('Je bent dit product al aan het vergelijken.');
					return;
				}
				
				$( ".table-responsive" ).slideUp( "slow", function() {
					$('.table').empty();
					$('.search-product-' + id).val('');
					$('.table').data('product-' + id, productId);
					compareProducts();
				});
				e.preventDefault();
			});
		}
	}, 'json');
}

function compareProducts() {
	$('.table').empty();
	
	var get = '?';
	if( $('.table').data('product1') ) {
		get += 'product1=';
		get += $('.table').data('product1');
		get += '&';
	} else {
		alert('Selecteer eerst een product aan de linkerkant!');
		return;
	}
	if( $('.table').data('product2') ) {
		get += 'product2=';
		get += $('.table').data('product2');
		get += '&';
	}
	if( $('.table').data('product3') ) {
		get += 'product3=';
		get += $('.table').data('product3');
		get += '&';
	}
	
	
	$.get( '/api/compareproduct' + get, function( json ) {
		for(var i = 0; i < json.length; i++) {
			if(i == 0) {
				// name...
				var names = json[i].names;
				
				var row = '<tr><th class="col-md-1 no-border"></th>';
				row += '<th class="text-center col-md-3 no-border">';
				if(names.product1) {
					row += names.product1;
				}
				row += '</th>';
				
				row += '<th class="text-center col-md-3 no-border">';
				if(names.product2) {
					row += names.product2;
				}
				row += '</th>';
				
				row += '<th class="text-center col-md-3 no-border">';
				if(names.product3) {
					row += names.product3;
				}
				row += '</th>';
				
				row += '</tr>';
				
				$( '.table' ).append(row);
			}
			if(i == 1) {
				// thumbnails...
				var thumbs = json[i].thumbnails;
				
				var row = '<tr><td class="no-border"></td>';
				row += '<td class="no-border">';
				if(thumbs.product1) {
					row += '<img src="/' + thumbs.product1 + '" class="img-responsive compare-image center-block">';
				}
				row += '</td>';
				
				row += '<td class="no-border">';
				if(thumbs.product2) {
					row += '<img src="/' + thumbs.product2 + '" class="img-responsive compare-image center-block">';
				}
				row += '</td>';
				
				row += '<td class="no-border">';
				if(thumbs.product3) {
					row += '<img src="/' + thumbs.product3 + '" class="img-responsive compare-image center-block">';
				}
				row += '</td>';
				
				row += '</tr>';
				
				$( '.table' ).append(row);
			}
			if(i == 2) {
				// prices
				var prices = json[i].prices;
				
				var row = '<tr><td class="col-md-1"><strong>Prijs</strong></td>';
				row += '<td class="text-center">';
				if(prices.product1) {
					row += '&euro; ' + prices.product1;
				}
				row += '</td>';
				
				row += '<td class="text-center">';
				if(prices.product2) {
					row += '&euro; ' + prices.product2;
				}
				row += '</td>';
				
				row += '<td class="text-center">';
				if(prices.product3) {
					row += '&euro; ' + prices.product3;
				}
				row += '</td>';
				
				row += '</tr>';
				
				$( '.table' ).append(row);
			}
		}
		
		$( ".table-responsive" ).slideDown( "slow", function() {
		
		});
	}, 'json')
}

function update(id, price) {
	var newPrice = price * $('#input' + id).val();
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