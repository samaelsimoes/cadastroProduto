(function ($) {
    $(function () {	        
    	$('.modal').modal();
        $('#modal').modal('close'); 
        
        $('.modal2').modal();
    	$('#modal2').modal('close'); 
    }); // end of document ready
})(jQuery); // end of jQuery name space

$('.button-collapse').sideNav({			
	menuWidth: 300, //Default is 300
	edge: 'left', //Choose the horizontal origin
	closeOnClick: false, //Closes side-nav on <a> clicks, useful for Angular/Meteor
	draggable: true //Choose whether you can drag to open on touch screens
});

$("a").click(function() {
    // id do elemento clicado
    id = $(this).attr( 'id' );
    // oculta load
    $('#search').removeClass('custom-search');
});