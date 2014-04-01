function umce(){tinyMCE.triggerSave()};
function ut(){
	$.ajax({
		type:"POST",
		url:'save.php',
		data:"text="+encodeURIComponent($("#main_editor").val()),
		success:function(){$('.action').fadeIn(750).delay(3000).fadeOut(750)}
	});
    return false;
};