$(function(){
	$('.roboForm').roboForm()
	$(':file, select').styler();
	$(':file').change(function(){

		$.post('/saveFile', $(this).closest('form').serialize(), function(res){
			console.log(res);
		})

	})
})
