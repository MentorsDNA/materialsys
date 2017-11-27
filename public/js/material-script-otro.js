$('#llamar_empresa').change(event => {
	$.get(`proveedores/${event.target.value}`, function(res,sta){
		$("#llamar_titular").empty();
		$("#llamar_titular").append(`<option> Titular </option>`);
		res.forEach(element => {
			$("#llamar_titular").append(`<option value=${element.id}> ${element.nombres}  ${element.apellido_paterno}  ${element.apellido_materno} </option>`);
		});
	});
});

$('#llamar_empresa').change(event => {
	$.get(`proveedores/${event.target.value}`, function(res,sta){
		$("#deposito_cuenta_id").empty();
		$("#deposito_cuenta_id").append(`<option> Cuenta </option>`);
		res.forEach(element => {
			$("#deposito_cuenta_id").append(`<option value=${element.id}> ${element.nombres} ${element.numero_cuenta} </option>`);
		});
	});
});


	$(document).ready(function(){
		console.log("him its change");

		var = cat_id=$(this).val();
		//console.log("cat_id");

		var = op="";
		
		$.ajax({
			type:'get',
		})
	})




	$(document).on('change','productname',function () {

		var prod_id = $(this).val();

		var a=$(this).parent();
		console.log(prod_id);
		var op="";
		$.ajax({
			type:'get',
			url:'{!!URL::to('findPrice')!!}',
			data:{'id':prod_id},
			dataType:'json',//retorna los datos en json
			success:function(data){
				console.log("price");
				console.log(data.price);

			},
			error:function(){

			}
		});

		
