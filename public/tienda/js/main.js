jQuery(document).ready(function($){
	var cartWrapper = $('.cd-cart-container');
	//product id - you don't need a counter in your real project but you can use your real product id
	var productId = 0;
	var IDProducto=0;
	var md5 = $('body').attr('data-url');

	if( cartWrapper.length > 0 ) {
		//store jQuery objects
		var cartBody = cartWrapper.find('.body')
		var cartList = cartBody.find('ul').eq(0);
		var cartTotal = cartWrapper.find('.checkout').find('span');
		var cartTrigger = cartWrapper.children('.cd-cart-trigger');
		var cartCount = cartTrigger.children('.count')
		var addToCartBtn;
		var botontabpopup = $('.botontabpopup');
		var undo = cartWrapper.find('.undo');
		var undoTimeoutId;
		var urldata = $('.cd-add-to-cart').attr('data-url');
		var token = $('.cd-add-to-cart').attr('data-token');


		readCart();

		$('.cd-add-to-cart').on('click', function(event) {
			addToCartBtn = $(this);
		});
		//add product to cart
		$('.comprarPrd').on('click', function(event){
			if(!addToCartBtn){
				var dato = $('.tabs-modal-dialog').attr('data-nk');
				addToCartBtn = $('#'+dato);
			}
			console.log(addToCartBtn);
			$(this).attr('disabled',true);
			mythis = $(this);
			urldata = $('body').attr('data-myurl');
			IDProducto = $(addToCartBtn).attr('data-ides');
			var myaddToCartBtn = $(addToCartBtn);
			event.preventDefault();
			var data = {};
			data._token = $(addToCartBtn).attr('data-token');
			data.ides = IDProducto;
			data.md5 = md5;
			data.id_proyecto = $(addToCartBtn).attr('data-pry');

			$.ajax({
                type: "POST",
                url: $(addToCartBtn).attr('data-url')+'/ecomerce/compra',
                data: data,
                success: function(data){
                	//alert(data);
                	$(mythis).prop('disabled', false);
                	if(data){
						if(data=='-1'){
							alert('El producto ya fue agregado');
						}
						else {
							addToCart(addToCartBtn , data);
						}

                	}
					else{
						alert('El producto no esta disponible');
					}

                },
                error: function(){
                    alert('Error en la conexión');
                }
            });
		});
		//open/close cart
		cartTrigger.on('click', function(event){
			event.preventDefault();
			toggleCart();
		});

		//close cart when clicking on the .cd-cart-container::before (bg layer)
		cartWrapper.on('click', function(event){
			if( $(event.target).is($(this)) ) toggleCart(true);
		});

		//delete an item from the cart
		cartList.on('click', '.delete-item', function(event){
			event.preventDefault();

			IDProducto = $(this).attr('data-idprod');

			var data = {};
			data._token = token;
			data.idprod = IDProducto;
			$.ajax({
				type: "POST",
				url: urldata+'/ecomerce/removeitem',
				data: data,
				success: function(data){
					removeProduct($(event.target).parents('.product'));
				},
				error: function(){
					alert('Error en la conexión');
				}
			});


		});

		//update item quantity
		cartList.on('change', 'select', function(event){
			IDProducto = $(this).parent().attr('data-idprod');

			var data = {};
			data._token = token;
			data.idprod = IDProducto;
			data.cantidad = $(this).find('option:selected').val();

			$.ajax({
				type: "POST",
				url: urldata+'/ecomerce/updatecantidad',
				data: data,
				success: function(data){
					console.log(data);
					quickUpdateCart();
				},
				error: function(){
					alert('Error en la conexión');
				}
			});

		});

		//reinsert item deleted from the cart
		undo.on('click', 'a', function(event){
			clearInterval(undoTimeoutId);
			event.preventDefault();
			IDProducto = cartList.find('.deleted').attr('data-idprod');
			cartList.find('.deleted').addClass('undo-deleted').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				$(this).off('webkitAnimationEnd oanimationend msAnimationEnd animationend').removeClass('deleted undo-deleted').removeAttr('style');

				var data = {};
				data._token = token;
				data.ides = IDProducto;
				data.md5 = md5;
				data.id_proyecto = $(addToCartBtn).attr('data-pry');

				$.ajax({
					type: "POST",
					url: urldata+'/ecomerce/compra',
					data: data,
					success: function(data){
						quickUpdateCart();
						undo.removeClass('visible');
					},
					error: function(){
						alert('Error en la conexión');
					}
				});

			});

		});
	}

	function toggleCart(bool) {
		var cartIsOpen = ( typeof bool === 'undefined' ) ? cartWrapper.hasClass('cart-open') : bool;
		
		if( cartIsOpen ) {
			cartWrapper.removeClass('cart-open');
			//reset undo
			clearInterval(undoTimeoutId);
			undo.removeClass('visible');
			cartList.find('.deleted').remove();

			setTimeout(function(){
				cartBody.scrollTop(0);
				//check if cart empty to hide it
				if( Number(cartCount.find('li').eq(0).text()) == 0) cartWrapper.addClass('empty');
			}, 500);
		} else {
			cartWrapper.addClass('cart-open');
		}
	}

	function addToCart(trigger ,dataDb) {
		var cartIsEmpty = cartWrapper.hasClass('empty');
		//update cart product list
		addProduct(trigger, dataDb);
		//update number of items 
		updateCartCount(cartIsEmpty);
		//update total price
		updateCartTotal(dataDb['precio'], true);
		//show cart
		cartWrapper.removeClass('empty');
	}

	function addProduct(trigger, item) {
		//this is just a product placeholder
		//you should insert an item with the selected product info
		//replace productId, productName, price and url with your real product info
		productId = productId + 1;
		var html='';
		html = html + '<li class="product" data-idprod="'+item['id']+'"><div class="product-image"><img src="'+$(trigger).parent().parent().find('img').attr('src')+'" alt="placeholder" style="width: 95px;"></div><div class="product-details"><h3>'+item['item']+'</h3><span class="price">$'+item['precio']+'</span><div class="actions"><a href="#0" class="delete-item" data-idprod="'+item['id']+'">Eliminar</a><div class="quantity"><label for="cd-product-'+ item['id']
			+'">Cantidad </label><span class="select" data-idprod="'+item['id']
			+'"><select id="cd-product-'+ item['id'] +'" name="quantity[]">';
		for (i=1; i<10; i++)
		{
			if(item['cantidad']==i)
			{
				html = html + '<option value="'+i+'" selected>'+i+'</option>';
			}
			else
			{
				html = html + '<option value="'+i+'">'+i+'</option>';
			}

		}
		html = html + '</select></span></div></div></div><input type="hidden" name="idesprd[]" value="'+item['id']+'"></li>';
		var productAdded = $(html);
		cartList.prepend(productAdded);
	}

	function removeProduct(product) {
		clearInterval(undoTimeoutId);
		cartList.find('.deleted').remove();
		
		var topPosition = product.offset().top - cartBody.children('ul').offset().top ,
			productQuantity = Number(product.find('.quantity').find('select').val()),
			productTotPrice = Number(product.find('.price').text().replace('$', '')) * productQuantity;
		
		product.css('top', topPosition+'px').addClass('deleted');

		//update items count + total price
		updateCartTotal(productTotPrice, false);
		updateCartCount(true, -productQuantity);
		undo.addClass('visible');

		//wait 8sec before completely remove the item
		undoTimeoutId = setTimeout(function(){

			undo.removeClass('visible');
			cartList.find('.deleted').remove();

		}, 8000);
	}

	function quickUpdateCart() {
		var quantity = 0;
		var price = 0;
		
		cartList.children('li:not(.deleted)').each(function(){
			var singleQuantity = Number($(this).find('select').val());
			quantity = quantity + singleQuantity;
			price = price + singleQuantity*Number($(this).find('.price').text().replace('$', ''));
		});
		cartTotal.text(price.toFixed(2));
		cartCount.find('li').eq(0).text(quantity);
		cartCount.find('li').eq(1).text(quantity+1);
	}

	function updateCartCount(emptyCart, quantity) {
		if( typeof quantity === 'undefined' ) {
			var actual = Number(cartCount.find('li').eq(0).text()) + 1;
			var next = actual + 1;
			
			if( emptyCart ) {
				cartCount.find('li').eq(0).text(actual);
				cartCount.find('li').eq(1).text(next);
			} else {
				cartCount.addClass('update-count');

				setTimeout(function() {
					cartCount.find('li').eq(0).text(actual);
				}, 150);

				setTimeout(function() {
					cartCount.removeClass('update-count');
				}, 200);

				setTimeout(function() {
					cartCount.find('li').eq(1).text(next);
				}, 230);
			}
		} else {
			var actual = Number(cartCount.find('li').eq(0).text()) + quantity;
			var next = actual + 1;
			
			cartCount.find('li').eq(0).text(actual);
			cartCount.find('li').eq(1).text(next);
		}
	}

	function updateCartTotal(price, bool) {
		bool ? cartTotal.text( (Number(cartTotal.text()) + Number(price)).toFixed(2) )  : cartTotal.text( (Number(cartTotal.text()) - Number(price)).toFixed(2) );
	}

	function readCart(){

		var data = {};
		data._token = $('.cd-add-to-cart').attr('data-token');
		data.md5 = md5;

		$.ajax({
			type: "POST",
			url: urldata+'/ecomerce/readcart',
			data: data,
			success: function(data){
				$('.cd-cart-container').removeClass('cart-open');
				if(data!='')
				{
					$('.cd-cart-container').removeClass('empty');
					$.each(data, function(index) {
						addProduct($('#cd-add-to-cart'+ index), data[index]);
					});
					quickUpdateCart();

				}
				else{
					$('.cd-cart-container').addClass('empty');
				}

			},
			error: function(){
				alert('Error en la conexión');
			}
		});
	}

	/*$('.btn-pagos').on('click', function(event) {

		var data = {};
		data._token = $('.cd-add-to-cart').attr('data-token');
		data.md5 = md5;

		$.ajax({
			type: "POST",
			url: urldata+'/ecomerce/readcart',
			data: data,
			success: function(data){
				if(data)
				{
					var datos = {};
					datos._token = $('.cd-add-to-cart').attr('data-token');
					datos.carrito = data;
					datos.id_proyecto = $('#galeria_productos_id_proyecto').val();
					datos.md5 = md5;

					$.ajax({
						type: "POST",
						url: 'http://localhost:8080/mipagina/pasareladepagos/carrito',
						data: datos,
						success: function(data){
							location.href = "http://localhost:8080/mipagina/pasareladepagos/carritocompras/"+ md5;
						},
						error: function(){
							alert('Error en la conexión');
						}
					});
				}

			},
			error: function(){
				alert('Error en la conexión');
			}
		});

	});*/

});