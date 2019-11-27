var active_film_id;
var active_rate;

function countFilms(n){
	film_count = n;
	console.log("number of films: ", film_count);
}

function chbg(color,id) {
	var path;
	if(color=="yellow") path = "url('ertekeles/sarga_csillag.png')";
	else if(color=="white") path = "url('ertekeles/feher_csillag.png')"
	//var num = this.id.substr(this.id.length - 1);
	var num=id;
	for(i = 1; i<= num; i++){
		var id = "popupstar".concat(String(i));
		document.getElementById(id).style.backgroundImage = path;
	}
}

window.onload = function() {
	var childs = document.getElementById("content").childNodes;
	for (i = 0; i < childs.length; i++) {
		childs[i].addEventListener('click', doSomething);
	}
	for (i = 1; i <= 5; i++) {
		var id = "star".concat(String(i));
		document.getElementById(id).addEventListener('click', rateFilm);
	}
}

function doSomething() {
	document.getElementById("popup").style.display = "block";
	active_film_id = this.id;
}

function rateFilm() {
	document.getElementById("popup").style.display = "none";
	var num = this.id.substr(this.id.length - 1);
	active_rate = num;
	console.log("rated the film: " , active_film_id , "for: ",num," out of 5 stars");
	insertFunction();
}

function insertFunction() {
	var id=parseInt(active_film_id);
	var rate = active_rate;
	$.ajax({
		url: "ertekeles/insert.php",
		type: "POST",
		data: {
			id: id,
			rate: rate
		},
		cache: false,
		success:function(data){
            //alert(data);
        }
	});
}
