$(document).ready(function(){

	$('.estrela').click(function(){
		//$(this).hide();
		alert('vc clicou na estrela')
	});

	$('p').on({
         mouseenter: function(){
         	$(this).css('background-color', 'lightgray');

         },
         mouseleave: function(){
         	$(this).css('background-color', 'lightblue');
         	
         },
 		 click: function(){
         	$(this).css('background-color', 'orange');
         	
         }


	});
});