function subscribers() {
		$.ajax({
		    url: "/api/subscribers", 
		    success:
		        function(retour){
		        	//alert(retour);
		       $('#sub').text(retour);
		    }

		});
		setTimeout(subscribers, 1000)
 
}
subscribers();
