$(document).ready(function(){
	var formInputs = $('input[type="text"]');

	formInputs.focus(function() {
       $(this).parent().children('p.formLabel').addClass('formTop');

       $('div#formWrapper').addClass('darken-bg');
       $('div.logo').addClass('logo-active');

	});

	formInputs.focusout(function() {
		if ($.trim($(this).val()).length == 0){
			$(this).parent().children('p.formLabel').removeClass('formTop');
		}

		$('div#formWrapper').removeClass('darken-bg');
		$('div.logo').removeClass('logo-active');
		
	});

	$('p.formLabel').click(function(){
		 $(this).parent().children('.form-style').focus();
	});

	$('.form').submit(function() {
		var nama = $('#nama').val().length;
		var tahun = $('#tahun').val().length;
		var gender = $('#jenis_kelamin').val().length;
		var daerah = $('#daerah').val().length;
		if (nama == 0 && tahun == 0 ) {				
			window.alert('Silahkan isi form dengan lengkap!');
			return false;
		}
	});

});