<!DOCTYPE html>
<html>
<head>
	<title>Go Models</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

	<link rel='stylesheet prefetch' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

	<script>

		function collision($div1, $div2) {
			var x1 = $div1.offset().left;
			var w1 = 40;
			var r1 = x1 + w1;
			var x2 = $div2.offset().left;
			var w2 = 40;
			var r2 = x2 + w2;

			if (r1 < x2 || x1 > r2) return false;
			return true;
		}

		$('#slider').slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 75, 300 ],
			slide: function(event, ui) {
				
				$('.ui-slider-handle:eq(0) .price-range-min').html('$' + ui.values[ 0 ]);
				$('.ui-slider-handle:eq(1) .price-range-max').html('$' + ui.values[ 1 ]);
				$('.price-range-both').html('<i>$' + ui.values[ 0 ] + ' - </i>$' + ui.values[ 1 ] );
				
				//
				
				if ( ui.values[0] == ui.values[1] ) {
					$('.price-range-both i').css('display', 'none');
				} else {
					$('.price-range-both i').css('display', 'inline');
				}

		        //

		        if (collision($('.price-range-min'), $('.price-range-max')) == true) {
		        	$('.price-range-min, .price-range-max').css('opacity', '0');	
		        	$('.price-range-both').css('display', 'block');		
		        } else {
		        	$('.price-range-min, .price-range-max').css('opacity', '1');	
		        	$('.price-range-both').css('display', 'none');		
		        }

		    }
		});

		$('.ui-slider-range').append('<span class="price-range-both value"><i>$' + $('#slider').slider('values', 0 ) + ' - </i>' + $('#slider').slider('values', 1 ) + '</span>');

		$('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">$' + $('#slider').slider('values', 0 ) + '</span>');

		$('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">$' + $('#slider').slider('values', 1 ) + '</span>');
			
	</script>

</head>
<body>

	<header>
		<div class="main">
			<div class="logo"><img src="img/logo.png" alt=""></div>
			<a href=""><span class="btn-entrar">ENTRAR</span></a>
			<nav>
				<ul class="menu">
					<li><a href="">COMO FUNCIONA</a></li>
					<li><a href="">PREÇOS</a></li>
					<li><a href="">CONTATO</a></li>
				</ul>
			</nav>
		</div>
	</header>