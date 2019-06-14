$(document).ready(function() {
	$('#showPassword').click(function(){
		if ($('#password').attr('type') == 'password')
		{
			$('#password').attr('type', 'text');
			$('#label').html('Hide Password')
		} else {
			$('#password').attr('type', 'password');
			$('#label').html('Show Password');
		}
	});

	$('.btn-modal').click(function() {
		$('.box-modal').fadeToggle('fast');
	});
	$('.btn-close').click(function() {
		$('.box-modal').fadeOut('fast');
	});
});