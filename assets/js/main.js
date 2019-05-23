// abrir e fechar o menu
$( ".navbar-header" ).click(function() {
	$( "body" ).toggleClass('menu-short menu-opened')
})
$( ".menu-close" ).click(function() {
	$( "body" ).toggleClass('menu-short menu-opened')
})

// abrir e fechar o submenu
$( ".left-menu .nav-item a" ).click(function(event) {
	if ($(this).parent().find('.sub-nav').length) {
		event.preventDefault()
		$(this).parent().toggleClass( 'opened' )
	}
})