$('.frm_addemployee').submit(function(e){
	e.preventDefault();
	var data = $(this).serialize()+'&key=add_employee';

	$.ajax({
		type: "POST",
		url: "../class/add/add.php",
		data: data
	})
	.done(function(data){
		console.log(data);

		if(data.slice(0,1) == 1){
			toastr.success('تمت الإضافة بنجاح.');
			table_user.ajax.reload(null,false);
			$('.user-side').toggle(effect, options, duration);
			$('.frm_addemployee').find('input select').val('');
		}else if(data == 2){
			toastr.warning('اسم الموظف أو رقم الفيزا موجود بالفعل.');
		}else if(data == 0){
			toastr.error('خطأ بالإضافة.');
		}

	});

});

$('.frm_addinsuranceemp').submit(function(e){
	e.preventDefault();
	var data = $(this).serialize()+'&key=add_insuranceemp';

	$.ajax({
		type: "POST",
		url: "../class/add/add.php",
		data: data
	})
	.done(function(data){
		console.log(data);
		if(data == 1){
			toastr.success('تمت الإضافة بنجاح.');
			table_user.ajax.reload(null,false);
			$('.user-side').toggle(effect, options, duration);
			$('.frm_addinsuranceemp').find('input select').val('');
		}else if(data == 2){
			toastr.warning('اسم الموظف أو رقم الفيزا موجود بالفعل.');
		}else if(data == 0){
			toastr.error('خطأ بالإضافة.');
		}

	});

});
