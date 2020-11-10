$(document).ready(function() {

	// $('#btn1').click(function(){
	// 	$('p').append(" <b>texto</b>.");
	// });

	// $("#btn2").click(function(){
	// 	$("ol").append("<li>item</li>")
	// })

	// $("#btn1").click(function(){
	// 	$("p").prepend("<b>texto</b> ")
	// })

	// $("#btn2").click(function(){
	// 	$("ol").prepend("<li><b>item</b></li>")
	// })

	// $("#before").click(function(){
	// 	$("p").before('<p><b>texto adicionado antes</b></p>')
	// })

	// $('#after').click(function(){
	// 	$('p').after("<p><b>texto adicionado depois</b></p>")
	// })

	//$("#clone").click(function(){
		//$("p").clone().appendTo("div")
		//$("p").clone().insertBefore("div")
		//$("p").clone().insertAfter("div")

	//})

	// $("#remover").click(function(){
	// 	$('p, div, span').remove()
	// })

	//$('#linpar').click(function(){
		//$("p").empty()
	//})

	// $("#btn-add-class").click(function(){

	// 	$("div").addClass("box-personalizado")
	// })

	// $('#btn-remove-class').click(function(){

	// 	$('div').removeClass("box-personalizado")
	// })

	// $('#btn-css').click(function(){

	// 	$("div").css({
	// 		'color'          :'blue',
	// 		'font-size'      :'30px',
	// 		'text-decoration':'underline'
	// 	})
	// })

	$('#btn').click(function(){

		//$('p').parent().css("background-color","blue")
		$('div').children("#p2").css("background-color","blue")

	})

})