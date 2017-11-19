$('#llamar_empresa').change(event => {
	$.get(`proveedores/${event.target.value}`, function(res,sta){
		console.log(res);
		$("#llamar_titular").empty();
		res.forEach(element => {
			$("#llamar_titular").append(`<option value=${element.id}> ${element.nombres}</option>`);
		});
	});
});


$('#llamar_titular').change(event => {
	$.get(`cuentas/${event.target.value}`, function(res,sta){
		console.log(res);
		$("#deposito_cuenta_id").empty();
		res.forEach(element => {
			$("#deposito_cuenta_id").append(`<option value=${element.id}> ${element.numero_cuenta}</option>`);
		});
	});
});