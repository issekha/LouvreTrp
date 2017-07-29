jQuery(document).ready(function ($) {

	$('.datepicker').datepicker({
		startDate: '0',
		
		autoclose:"true",
		todayBtn: "linked",
    	language: "fr",
		todayHighlight: true,
    	daysOfWeekDisabled: "0",
		datesDisabled:[
			'01/01/yy',
			'01/05/yy',
			'08/05/yy',
			'17/07/yy',
			'15/08/yy',
			'01/11/yy',
			'11/11/yy',
			'25/12/yy'
		]
	});
	
	$(':checkbox').change(function() {
            var id = 'msg_' + $(this).attr('id');
            if ($(this).is(':checked')) {
                $(this).after('<p id="' + id + '"><i>Un justificatif (carte d\'étudiant, carte militaire etc...) vous sera demandé, le jour de votre visite.</i></p>')
            } else if (!($(this).is(':checked'))) {
                $('#' + id).remove();
            }
        });

})