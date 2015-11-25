//@http://www.dacai.me

function dcalert(content, close) {
	$("#alert").remove();
	var top = $(window).height() / 2,
		width = $(window).width();
	var confirm = '<div id="alert" style="position:fixed; z-index:99999;display:none; width:100%;text-align:center; top: 0; left: 0px;"><p class="al-content">' + content + '</p></div>';
	
	$("body").eq(0).append(confirm);
	$("#alert").fadeIn();
	if (close) {
		$('.al-content').append('<small id="alx">x</small>');
		$("#alx").click(function() {
			$("#alert").fadeOut();
		});
	}
	setTimeout(function() {
		$("#alert").fadeOut();
	}, 2000);
}
