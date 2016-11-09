//function click barraFiltro
$('main.listagem .barraTop .right li.filtrar').click(function(){
	$('.barraFiltro').show();
	$('.maskBarraFiltro').show();

	$('.scroll-pane').jScrollPane();
});


/* ===Interna perfil=== */
//click show fone
$('.sidebarPerfil .telefoneContato i').click(function(){
	$(this).hide();
	$('.telefoneContato').addClass('telefoneContatoShow');
});

$('.barraFiltro .btnClose, .maskBarraFiltro').click(function(){
	$('.barraFiltro').hide();
	$('.maskBarraFiltro').hide();
});

//Expand marcas perfil model
$('.sidebarPerfil .moreListTrabalhos').click(function(){
	$('.sidebarPerfil .listTrabalhos li').show();
	$(this).hide();
});


/* ===PRECOS=== */
//click planos
$('main.precos .collRight .container .ctn .planos li').click(function(){
	$('main.precos .collRight .container .ctn .planos li').removeClass('active');
	$(this).addClass('active');
});


/* === MODAL LOGIN === */
$('.btn-entrar').click(function(){
	$('.modalLogin, .maskModalLogin').fadeIn();
});

$('.maskModalLogin').click(function(){
	$('.modalLogin, .maskModalLogin').fadeOut();
});


 /* MASK TELEFONE */
// jQuery("input[name='telefone'], input[name='celular']")
// .mask("(99) 9999-9999?9")
// .focusout(function (event) {  
//     var target, phone, element;  
//     target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
//     phone = target.value.replace(/\D/g, '');
//     element = $j(target);  
//     element.unmask();  
//     if(phone.length > 10) {  
//         element.mask("(99) 99999-999?9");
//     } else {  
//         element.mask("(99) 9999-9999?9");
//     }  
// });


$('select').each(function(){

    var $this = $(this), numberOfOptions = $(this).children('option').length;
    
    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
        
    if($this.find('option[selected]').val()){
        $styledSelect.text($this.children('option[selected]').text());
    }else{
        $styledSelect.text($this.children('option').eq(0).text());
    }
    
    
    
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
    
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }
    
    var $listItems = $list.children('li');
    
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });
    
    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        var index = $(this).index();

        $(this).parent().parent().find('option').attr('selected', false);
        $(this).parent().parent().find('option').eq(index).attr('selected', 'selected');
        
        var tipo = $(this).parent().parent().find('select').attr('name');
        
    });
    
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});

$(window).bind("scroll", function() {

	// //function fixed barraFiltro
	// if ($(this).scrollTop() > 60) {
	// 	$('.barraFiltro').css({'position': 'fixed', 'top': '0'});
	// }else{
	// 	$('.barraFiltro').css({'position': 'absolute', 'top': '58px'});
	// }

	// //sidebarPerfil
	// if ($(this).scrollTop() > 100) {
	// 	$('.sidebarPerfil').css({'position': 'fixed', 'top': '10px'});
	// }else{
	// 	$('.sidebarPerfil').css({'position': 'initial', 'top': '10px'});
	// }

});