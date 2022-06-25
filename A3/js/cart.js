function addorder(ordername,furnprice){
	if(localStorage.getItem("selected_ordername")===null){
		var ordername_array = [];
		var furnprice_array = [];
		ordername_array.push(ordername);
		furnprice_array.push(furnprice);
		localStorage.setItem('selected_ordername', JSON.stringify(ordername_array));
		localStorage.setItem('selected_furnprice', JSON.stringify(furnprice_array));
	}else{
		var ordername_array=[];
		var furnprice_array=[];
		var ordername_array = JSON.parse(localStorage.getItem("selected_ordername"));
		var furnprice_array = JSON.parse(localStorage.getItem("selected_furnprice"));
		
		ordername_array.push(ordername);
		furnprice_array.push(furnprice);
		localStorage.setItem('selected_ordername', JSON.stringify(ordername_array));
		localStorage.setItem('selected_furnprice', JSON.stringify(furnprice_array));
	}
}

function displayorder(){
	var furn_array = JSON.parse(localStorage.getItem("selected_ordername"));
	var order_price = JSON.parse(localStorage.getItem("selected_furnprice"));
	
	var counter=0;
	var tablestring="<table><>"
	while (counter<furn_array.length){
		
		markup = "<tr><td>"+parseInt(counter+1)+"</td><td>" + furn_array[counter] +"</td><td><input type='number' value='1' class='quantity' id='quantity_item"
		+parseInt(counter+1)+"' onchange=changequantity("+parseInt(counter+1)+","+order_price[counter]+") name='quantity_item"+parseInt(counter+1)
		+"' min='1' step='1'>" + "</td><td><input type='text' readonly class='price' id='price_item"+parseInt(counter+1)+"' value='RM " + order_price[counter] 
		+ "' name='price_item"+parseInt(counter+1)+"'></td></tr>";
        $(".summary tbody").append(markup);
		counter++;
	}
}

function clearorder(){ 
	localStorage.clear();
}

$( document ).ready(function() {
	displayorder();
	
	$('.summary').DataTable( {
		columnDefs: [
		{
			targets: [0, 1, 2, 3] ,
			className: 'dt-body-center'
		}
	  ]
	} );
	calculatetotal();
});
var totalquantity=0;
function changequantity(index,furnprice){
	
	var price = Number($("#quantity_item"+index).val())*Number(furnprice);
	$("#price_item"+index).val('RM '+price.toFixed(2));
	calculatetotal();
}

function calculatetotal(){
	var subtotal=0;
	$('.price').each(function(){
		var totalprice=$(this).val();
		var price = $(this).val().replace('RM','');
		
		subtotal+=Number(price);
	});
	var totalquantity=0;
	$('.quantity').each(function(){
		var quantity = $(this).val();
		totalquantity += parseInt($(this).val());
	});

	if(totalquantity>=5&&totalquantity<=10){
		var discount=0.05;
		var discount_rate="5%";
	}else if(totalquantity>10){
		var discount=0.15;
		var discount_rate="15%";
	}else{
		var discount=0;
		var discount_rate="0%";
	}
	
	if (subtotal>100){
		var postage=0;
	}else{
		var postage=10;
	}
	
	var discount_price=subtotal*discount;
	var total=subtotal-discount_price+postage;
	$(".subtotal").html('RM '+subtotal.toFixed(2));
	$(".postage").html('RM '+postage.toFixed(2));
	$(".discount").html('RM '+discount_price.toFixed(2));
	$(".discount_rate").html('Discount ('+discount_rate+')');
	$(".total").html('RM '+total.toFixed(2));
}

function confirmorder(){
	clearorder();
	alert("Checked Out Successfully.");
	location.href="menu.html";
}