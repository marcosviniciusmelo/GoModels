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