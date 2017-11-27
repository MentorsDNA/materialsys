	$(document).ready(function()
	{

		$(document).on('change','.llamar_empresa',function(){
			console.log("esta cambiando");

			var id=$(this).val();
			console.log(id);
			
			var div=$(this).parent ();
			console.log(div);

			var op=" ";

			$.ajax({
				type:'get',
				url:'{!!URL::to('hallarProveedor')!!}',
				data:{'id':id},
				success:function(data){
					console.log('success');
					console.log(data);

					//console.log(data.length);
					op+='<option selected disabled> Proveedores ...</option>'
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].nombres+'</option>';
					}
					div.find('#llamar_titular').html(" ");
					div.find('#llamar_titular').append(op);

				},
				error:function(){

				}

			});
		});

		
		$(document).on('change','.productname',function ()
			{
				var prod_id=$(this).val();
				var a=$(this).parent();
				//console.log(prod_id);
				var op="";

				$.ajax
				({
					type:'get',
					url:'{!!URL::to('findPrice')!!}',
					data:{'id':prod_id},
					dataType:'json',
					success:function(data){
						console.log("price");
						console.log("data.price");

						a.find('.prod_price').val(data.price);
					},
					error:function(){
					}
				});

			});



	});
 