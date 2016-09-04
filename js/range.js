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

// slider call
var minIManequim = 34;
var maxIManequim = 46;
//atualiza o input hidden
$('#rangeManequim').find('input[name="min"]').val( 36 );
$('#rangeManequim').find('input[name="max"]').val( 42 );

$('#rangeManequim').slider({
	range: true,
	min: minIManequim,
	max: maxIManequim,
	values: [ 36, 42 ],
	slide: function(event, ui) {
		
		$('#rangeManequim').find('.ui-slider-handle:eq(0) .price-range-min').html(ui.values[ 0 ]);

		if( ui.values[ 1 ] == maxIManequim){
			$('#rangeManequim').find('.ui-slider-handle:eq(1) .price-range-max').html(ui.values[ 1 ] + '+' );
		}else{
			$('#rangeManequim').find('.ui-slider-handle:eq(1) .price-range-max').html(ui.values[ 1 ]);
		}

		$('#rangeManequim').find('.price-range-both').html('<i>' + ui.values[ 0 ] + ' - </i>' + ui.values[ 1 ] );

		//atualiza o input hidden
		$('#rangeManequim').find('input[name="min"]').val( ui.values[ 0 ] );
		$('#rangeManequim').find('input[name="max"]').val( ui.values[ 1 ] );
				
	    if ( ui.values[0] == ui.values[1] ) {
	      $('#rangeManequim').find('.price-range-both i').css('display', 'none');
	    } else {
	      $('#rangeManequim').find('.price-range-both i').css('display', 'inline');
	    }
        		
		if (collision($('#rangeManequim').find('.price-range-min'), $('#rangeManequim').find('.price-range-max')) == true) {
			$('#rangeManequim').find('.price-range-min, .price-range-max').css('opacity', '0');	
			$('#rangeManequim').find('.price-range-both').css('display', 'block');		
		} else {
			$('#rangeManequim').find('.price-range-min, .price-range-max').css('opacity', '1');	
			$('#rangeManequim').find('.price-range-both').css('display', 'none');		
		}
		
	}
});


// slider call
var minIIdade = 12;
var maxIIdade = 60;
//atualiza o input hidden
$('#rangeIdade').find('input[name="min"]').val( 12 );
$('#rangeIdade').find('input[name="max"]').val( 60 );

$('#rangeIdade').slider({
	range: true,
	min: minIIdade,
	max: maxIIdade,
	values: [ 20, 42 ],
	slide: function(event, ui) {

		if( ui.values[ 0 ] == minIIdade){
			$('#rangeIdade').find('.ui-slider-handle:eq(0) .price-range-min').html( '-' + ui.values[ 0 ]);
		}else{
			$('#rangeIdade').find('.ui-slider-handle:eq(0) .price-range-min').html(ui.values[ 0 ]);	
		}
		if( ui.values[ 1 ] == maxIIdade){
			$('#rangeIdade').find('.ui-slider-handle:eq(1) .price-range-max').html(ui.values[ 1 ] + '+' );
		}else{
			$('#rangeIdade').find('.ui-slider-handle:eq(1) .price-range-max').html(ui.values[ 1 ]);
		}
		$('#rangeIdade').find('.price-range-both').html('<i>' + ui.values[ 0 ] + ' - </i>' + ui.values[ 1 ] );

		//atualiza o input hidden
		$('#rangeIdade').find('input[name="min"]').val( ui.values[ 0 ] );
		$('#rangeIdade').find('input[name="max"]').val( ui.values[ 1 ] );
				
	    if ( ui.values[0] == ui.values[1] ) {
	      $('#rangeIdade').find('.price-range-both i').css('display', 'none');
	    } else {
	      $('#rangeIdade').find('.price-range-both i').css('display', 'inline');
	    }
        		
		if (collision($('#rangeIdade').find('.price-range-min'), $('#rangeIdade').find('.price-range-max')) == true) {
			$('#rangeIdade').find('.price-range-min, .price-range-max').css('opacity', '0');	
			$('#rangeIdade').find('.price-range-both').css('display', 'block');		
		} else {
			$('#rangeIdade').find('.price-range-min, .price-range-max').css('opacity', '1');	
			$('#rangeIdade').find('.price-range-both').css('display', 'none');		
		}
	}
});	

$('#rangeManequim').find('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#rangeManequim').slider('values', 0 ) + ' - </i>' + $('#rangeManequim').slider('values', 1 ) + '</span>');
$('#rangeManequim').find('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#rangeManequim').slider('values', 0 ) + '</span>');
$('#rangeManequim').find('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#rangeManequim').slider('values', 1 ) + '</span>');

$('#rangeIdade').find('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#rangeIdade').slider('values', 0 ) + ' - </i>' + $('#rangeIdade').slider('values', 1 ) + '</span>');
$('#rangeIdade').find('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#rangeIdade').slider('values', 0 ) + '</span>');
$('#rangeIdade').find('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#rangeIdade').slider('values', 1 ) + '</span>');


