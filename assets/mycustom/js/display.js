var table_employee =  $('.table_employee').DataTable({
	"ajax":
		{
			"url": "../class/display/display.php",
			"type": "POST",
			"data": {
			"key": "display_employee"
			}
		},
		"columns":
		[
			{
				"data": [0],
				"className": "text-center"
			},
			{
				"data": [1],
				"className": "text-center"
			},
			{
				"data": [2],
				"className": "text-center"
			},
			{
				"data": [3],
				"className": "text-center"
			},
			{
				"data": [4],
				"className": "text-center"
			}
		],
		dom: "Bfrtip",
		buttons: [
			{
				extend: "copy",
				className: "btn-sm btn-success",
				exportOptions:{
					columns: [0,1]
				}
			},
			{
				extend: "csv",
				className: "btn-sm btn-success",
				exportOptions:{
					columns: [0,1]
				}
			},
			{
				extend: "excel",
				className: "btn-sm btn-success",
				exportOptions:{
					columns: [0,1]
				}
			},
			{
				extend: "pdfHtml5",
				className: "btn-sm btn-success",
				exportOptions:{
					columns: [0,1]
				}
			},
			{
				extend: "print",
				className: "btn-sm btn-success",
				exportOptions:{
					columns: [0,1]
				},
				message: '<img src="http://4.bp.blogspot.com/_5ydAHJv4lKc/TSm6Sr4vMWI/AAAAAAAAAAQ/B3oGPh3_26k/s1600/logo.png" height="100px" width="100px" style="position: absolute;top:0;left:80px;"><center><h4 style="margin-top:-40px;">REPUBLIC OF THE PHILIPPINES</h4>\
							<h5>CARLOS HILADO MEMORIAL STATE COLLEGE</h5>\
							<h6>DEPARTMENT OF INFORMATION SYSTEMS</h6>\
							</center>',
				customize: function ( win ) {
					$(win.document.body).find( 'table' ).append('<br<br/><br><br><br><h4 class="">Noted by:</h4><br><br><br><br><br><h4 class="">Prepared by:</h4>');
				}
			}
		]
});
