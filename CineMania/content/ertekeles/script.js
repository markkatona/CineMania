var film_count;

function functionnn(n){
	film_count = n;
	console.log("YAY");
	console.log(film_count);
}

window.onload = function() {
	for (i = 0; i < film_count; i++) {
		var id = "link".concat(String(i));
		document.getElementById(id).addEventListener('click', doSomething);
	}
	function doSomething() {
		document.getElementById("popup").style.display = "block";
	}
	
}

