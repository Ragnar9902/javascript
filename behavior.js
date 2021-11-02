document.addEventListener("DOMContentLoaded", function(event) {
	
	var yourImg = document.getElementById('hotdog');
	if(yourImg && yourImg.style) {
    	yourImg.style.height = '400px';
    	yourImg.style.width = '500px';
	}
	yourImg.addEventListener("click", function() {
  	// write here
		if(yourImg.style.height=='400px'){
	        yourImg.style.height = '200px';
	        yourImg.style.width = '200px';
		}else{
		yourImg.style.height = '400px';
                yourImg.style.width = '500px';
		}

	});	
});
