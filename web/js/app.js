jQuery(document).ready(function ($) {

	$('.datepicker').datepicker({
		startDate: '0',
		
		autoclose:"true",
		todayBtn: "linked",
    	language: "fr",
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

})