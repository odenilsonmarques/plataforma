//1° identificar o clique no menu
//2º identificar a referencia do item que foi clicado, ou seja a quem esse item está fazendo ferencia
//3º verificar a distancia entre o alvo e o topo
//4º animar  o scroll até o alvo

$('nav a').click(function(e){
	e.preventDefault();
	var id = $(this).attr('href'),
			menuHeight = $('nav').innerHeight(),
			targetOffset = $(id).offset().top;
	$('html, body').animate({
		scrollTop: targetOffset - menuHeight
	}, 1000);
});

