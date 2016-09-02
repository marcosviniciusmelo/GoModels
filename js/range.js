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
    
// // slider call
var minI = 34;
var maxI = 46;

//atualiza o input hidden
$('.range input[name="min"]').val( 36 );
$('.range input[name="max"]').val( 42 );

$('#rangeManequim').slider({
	range: true,
	min: minI,
	max: maxI,
	values: [ 36, 42 ],
	slide: function(event, ui) {
		
		$('.ui-slider-handle:eq(0) .price-range-min').html(ui.values[ 0 ]);
		if( ui.values[ 1 ] == maxI){
			$('.ui-slider-handle:eq(1) .price-range-max').html(ui.values[ 1 ] + '+' );
		}else{
			$('.ui-slider-handle:eq(1) .price-range-max').html(ui.values[ 1 ]);
		}
		$('.price-range-both').html('<i>' + ui.values[ 0 ] + ' - </i>' + ui.values[ 1 ] );

		//atualiza o input hidden
		$('.range input[name="min"]').val( ui.values[ 0 ] );
		$('.range input[name="max"]').val( ui.values[ 1 ] );
				
    if ( ui.values[0] == ui.values[1] ) {
      $('.price-range-both i').css('display', 'none');
    } else {
      $('.price-range-both i').css('display', 'inline');
    }
        		
		if (collision($('.price-range-min'), $('.price-range-max')) == true) {
			$('.price-range-min, .price-range-max').css('opacity', '0');	
			$('.price-range-both').css('display', 'block');		
		} else {
			$('.price-range-min, .price-range-max').css('opacity', '1');	
			$('.price-range-both').css('display', 'none');		
		}
		
	}
});

$('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#rangeManequim').slider('values', 0 ) + ' - </i>' + $('#rangeManequim').slider('values', 1 ) + '</span>');

$('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#rangeManequim').slider('values', 0 ) + '</span>');

$('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#rangeManequim').slider('values', 1 ) + '</span>');



