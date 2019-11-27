var actpopup;
var actDate;
var i=0;
var actReservedPlaces="";
var actReservedRoomId;
var days;
var actRoom;

function getData(){
	
	
}


function calendar(){
	var d = new Date();
	var year= d.getFullYear();
	var month = d.getMonth();
	var text = year;
	switch(month){
case 0:
case 2:
case 4:
case 6:
case 7:
case 9:
case 11:
default :
	days=31;
	break;
case 3:
case 5:
case 8:
case 10:
	days=30;
	break;
case 1:
	days=28;
	break;
	}
	makeCalendar(year,days,d.getDate());
}


function makeCalendar(year,days,actday){
	var text;
	text="<table aligne=\"center\" class=\"calendar\" oncopy=\"return false\" oncut=\"return false\" onpaste=\"return false\"><tr>";
	for (var i = 1; i <= days; i++) {
		if (i == actday) {
			text+="<td style=\"color:red;\" id=\"" + i + "\" onclick=\"doSomething(this)\">"+i+"</td>";
		}else{
			text+="<td onclick=\"doSomething(this)\" id=\"" + i +"\">"+i+"</td>";
		}
		if (i%7 == 0) {
			text+="</tr><tr>";
		}
	}
	text+="</table>";
	document.write(text);
}

function makePlaces(places){
	var arr = [];
	//console.log(places);
	while(places.length>0){
		arr.push(places.substr(0,2));
		//console.log(places.substr(0,2));
		places=places.substr(2);

	}
	//console.log(arr);
	text="<table aligne=\"center\" class=\"places\" oncopy=\"return false\" oncut=\"return false\" onpaste=\"return false\"><tr>";
	for (var i = 1; i <= 9; i++) {
		for (var j = 1; j <= 9; j++) {
			
			if(arr.includes((i*10+j).toString())){
				//console.log(i*10+j);
				text+="<td style=\"background-color:#ff0040;\" id=\"p" + i+j + "\" onclick=\"reserve(this)\">"+i+"</td>";
			}else{
				text+="<td onclick=\"reserve(this)\" id=\"p" + i+j +"\">"+i+"</td>";
			}
		}
		text+="</tr><tr>";
	}
	text+="</table>";
	text+="<button class=\"foglalgomb\" onclick=\"placesReserved()\">Lefoglal</button>";
	text+="<button class=\"visszagomb\" onclick=\"back()\">Vissza</button>";

	document.write(text);
}
function back(){
	document.getElementById(actRoom).style.display = "none";
}

function placesReserved(){
	console.log("hello");
	var d = new Date();
	var year= d.getFullYear();
	var month = d.getMonth();
	month+=1;
	//var filmid=actReservedRoomId.substring(1,actReservedRoomId.search("_"));;
	var room = actReservedRoomId.parentElement.nextSibling.nextSibling.innerHTML.substr(7,2);
	var place = actReservedPlaces;
	var id = actReservedRoomId.parentElement.parentElement.id;
	var date = id.substr(id.search("_")+1,id.length);
	var dateid = year+"-"+month+"-"+date+":00.000000";
	//console.log();
	console.log(dateid);
	//document.getElementById(actReservedRoomId).style.display = "none";
	actReservedRoomId.parentElement.parentElement.style.display = "none";
	$.ajax({
		url: "filmek/beszur.php",
		type: "POST",
		data: {
			date: dateid,
			room: room,
			places: place
		},
		cache: false,
		success:function(data){
            //alert(data);
        }
	});
}


function doSomething(e){
	//console.log(actpopup);
	//e.style.color = "red";
	/*var cumulativeOffset = function(e) {
	    var top = 0, left = 0;
	    do {
	        top += e.offsetTop  || 0;
	        left += e.offsetLeft || 0;
	        e = e.offsetParent;
	    } while(e);

	    return {
	        top: top,
	        left: left
	    };
	};*/
	/*console.log(i);*/
	i++;
	var a;
	/*var b = document.getElementById("avangers4");*/
	var parent = e.parentElement.parentElement.parentElement.parentElement.parentElement.id;
	/*console.log(parent);*/
	/*if(parent == "Bosszúállók: Végjáték"){
a = document.getElementById("a");
	}*/
	/*var p = document.getElementsByClassName("popup");*/
	var movieid;
	switch(parent){
		case "Bosszúállók: Végjáték": 
			movieid = 1;
			break;
		case "Pókember: Idegenben": 
			movieid = 2;
			break;
		case "aladin": 
			movieid = 3;
			break;
		case "oroszlánkirály": 
			movieid = 4;
			break;
	}
	
	//var movieid = getMovie("2_23");
	var popupid = movieid+"_"+e.id;
	//console.log(e);
	//console.log(popupid);
	a = document.getElementById(popupid);
	/*switch(parent){
		case "Bosszúállók: Végjáték": 
			a = document.getElementById("1_1");
			break;
		case "Pókember: Idegenben": 
			a = document.getElementById("2_23");
			break;
		case "aladin": 
			a = document.getElementById("3_12");
			break;
		case "oroszlánkirály": 
			a = document.getElementById("4_8");
			break;
	}*/


	/*if (acttime) {
console.log(actpop.id);
actpop.display = "none";
	}*/
	/*console.log(p.length);
	for (var i = 0; i <= p.length - 1; i++) {
if (p[i].id !== a.id) {
	p[i].style.display="none";
	/*console.log(p[i].id);
}
	}*/



	/*if (actpopup) {
console.log(actpopup.id+" disabled");
actpopup.style.display = "none";
actpopup = "";
actDate = "";
console.log(actpopup);
	}*/
	//console.log(e);


	if (actpopup) {
		actpopup.style.display = "none";
		actpopup = "";
	}

	
	
	if ((!a) || (actDate) && (actDate.id == e.id)) {
		actDate = "";
	}else if (a) {
		a.style.display = "block";
		var rect = e.getBoundingClientRect();
		a.style.left = rect.left + e.offsetWidth + "px";
		if (document.body.offsetHeight > window.pageYOffset + a.offsetHeight + rect.top) {
			a.style.top = rect.top + e.offsetHeight + window.pageYOffset + "px";
		}else{
			a.style.top = rect.top + window.pageYOffset - a.offsetHeight + "px";
		}
		/*if(document.body.offsetWidth > a.style.left + a.offsetWidth){
			//a.style.left = rect.left + e.offsetWidth + "px";
		}else{
			console.log("asd");
			//a.style.backgroundColor="red";
			//a.style.left = rect.left - a.offsetwidth + "px";
			a.style.left = rect.left - a.offsetWidth + "px";
		}*/
		//a.style.left = rect.left - a.offsetWidth + "px";

		/*console.log(rect.left);
		console.log(a.offsetWidth);
		console.log(a);*/
		/*console.log(document.body.offsetWidth > a.offsetWidth + a.style.left);
		console.log(document.body.offsetWidth);
		console.log(a.offsetWidth + a.style.left);
		console.log(a.style.left);
		console.log(window.innerWidth);*/
		
		a.style.backgroundColor = "white";
		actpopup = a;
		actDate = e;

	}
	/*console.log(document.body.offsetWidth);
	console.log(window.pageXOffset + a.offsetWidth + rect.right);
	console.log(window.pageXOffset);
	console.log(a.offsetWidth);
	console.log(rect.right);*/
	/*var body = document.body,
	    html = document.documentElement;

	var height = Math.max( body.scrollHeight, body.offsetHeight, 
	                       html.clientHeight, html.scrollHeight, html.offsetHeight );*/
	//console.log(window.pageYOffset + a.offsetHeight + rect.top);
	//console.log(window.pageYOffset);
	//console.log(a.offsetHeight);
	//console.log(document.body.offsetHeight);
	//console.log(height);
	//console.log("asd");
	

	//console.log(actpopup);

	/*if ((actDate) && ((actDate.id!== e.id) || (actpopup.id !== a.id))) {

console.log(actpopup.id);
a.style.display = "block";
actpop = a;
acttime = e;
var rect = e.getBoundingClientRect();
console.log(document.body.scrollTop, window.pageYOffset);
a.style.left = rect.left + e.offsetWidth + "px";
a.style.top = rect.top + e.offsetHeight + window.pageYOffset + "px";
a.style.backgroundColor = "white";
	}else{
console.log("nincs értelmezve");
if (actpopup) {
	console.log(actpopup.id);
}
if (a) {
	console.log(a.id);
}

actpopup = a;
actDate = e;
	}*/




	
	
	/*if ((!actpop) || (actpop.id !== a.id) || (acttime.id !== e.id)) {
a.style.display = "block";
actpop = a;
acttime = e;
var rect = e.getBoundingClientRect();
console.log(document.body.scrollTop, window.pageYOffset);
a.style.left = rect.left + e.offsetWidth + "px";
a.style.top = rect.top + e.offsetHeight + window.pageYOffset + "px";
a.style.backgroundColor = "white";
	}else{
actpop = "";
	}*/

}
function popupDisable(name){
	actpopup.style.display = "none";
	actpopup = "";
	actDate = "";
	var id=name.parentElement.id;
	var content = name.textContent;
	//console.log("v"+id+" "+content);
	actRoom = "v"+id+" "+content;
	document.getElementById(actRoom).style.display = "flex";
	//document.querySelector('.grayBackground').style.display = "flex";
	//var arr = [12,23];
	//makePlaces(arr);
}
function reserve(element){
	var divId = element.parentElement.parentElement.parentElement.parentElement.id;
	actReservedRoomId = element.parentElement.parentElement;
	//document.getElementById(divId).style.display = "flex";
	//console.log(element.id);
	//console.log(element.style.backgroundColor);
	if ((element.style.backgroundColor !== "rgb(255, 0, 64)") && (element.style.backgroundColor !== "rgb(75, 238, 0)")) {
		element.style.backgroundColor = "rgb(75, 238, 0)";
		actReservedPlaces+=element.id.substr(1,2);
		//console.log("set");
	}
	/*if ((element.style.backgroundColor != "#ff0040") || (element.style.backgroundColor != "#00FF00")) {
		
	}*/
	//console.log(actReservedPlaces);
}
function filmKeresese(e){
	var element = document.getElementById("keresesi_mezo");
	var value = element.value;
	/*console.log(value);
	console.log("elindult");
	alert("submited");*/
	var filmek = document.getElementsByClassName("kartyak");
	for (var i = 0; i < filmek.length; i++) {
if ((value) && (sameMovies(filmek[i].id,value))) {
	filmek[i].style.display="none";
}else{
	filmek[i].style.display="block";
}


/*console.log(value,fi);*/
	}




	return false;
}

function sameMovies(first, second){
	var bool = first !== second;
	var tempfirst = first;
	var tempsecond = second;
	var haveToReplace = [":", ",", " "];
	for (var i = 0; i < haveToReplace.length; i++) {
while(first !== tempfirst.replace(haveToReplace[i],"")){
	first = tempfirst.replace(haveToReplace[i],"");
	tempfirst = first;
}
while(second !== tempsecond.replace(haveToReplace[i],"")){
	second = tempsecond.replace(haveToReplace[i],"");
	tempsecond = second;
}

	}
	first = first.toLowerCase();
	second = second.toLowerCase();
	/*console.log(first);
	console.log(second);*/

	bool = !first.includes(second);

	return bool;
}
function restoreAll(){
	/*var elements = document.getElementsByClassName("kartyak");
	for (var i = 0; i < elements.length; i++) {
	elements[i].style.display = "block";
	}*/
	/*
	var popups = document.getElementsByClassName("popup");
	for (var i = 0; i < popups.length; i++) {
	popups[i].style.display = "none";
	}*/
}
function getMovieByPopupId(id){
	var movie = id.substring(0,id.search("_"));
	console.log(movie);
	return movie;
}
function getMovieByName(name){
	var movieid;
	switch(name){
		case "Bosszúállók: Végjáték": 
			movieid = 1;
			break;
		case "Pókember: Idegenben": 
			movieid = 2;
			break;
		case "aladin": 
			movieid = 3;
			break;
		case "oroszlánkirály": 
			movieid = 4;
			break;
	}
	return movieid;
}
//setTerem("Bosszúállók: Végjáték","A3");

function setTerem(id, terem){
	//var terem = document.getElementsByClassName("terem");
	var parent = document.getElementById(id);
	var childs = parent.childNodes;
	var childschilds;

	for (var i = 0; i < childs.length; i++) {
		if(childs[i].className == "column3"){
			childschilds=childs[i].childNodes;
		}
	}
	for (var i = 0; i < childschilds.length; i++) {
		if(childschilds[i].className == "terem"){
			childschilds[i].innerHTML=terem;
		}
	}

}

function setColors(){
	var popups = document.getElementsByClassName("popup");
	var calendars = document.getElementsByClassName("calendar");
	var tr;
	var td;
	var element;
	var parent;
	
	for (var i = 0; i < calendars.length; i++) {
		tr = calendars[i].childNodes[0].childNodes
		for (var j = 0; j < tr.length; j++) {
			td = tr[j].childNodes;
			for (var k = 0; k < td.length; k++) {
				for (var l = 0; l < popups.length; l++) {
					parent = calendars[i].parentElement.parentElement.id;
					movieid = popups[l].id.substring(0,popups[l].id.search("_"));
					day = popups[l].id.substring(popups[l].id.search("_")+1,popups[l].id.length);
					if((getMovieByName(parent) == movieid)&&( day== td[k].id)){
						//console.log("bingo");
						td[k].style.backgroundColor = "lightgreen";
						//element = td[k];
					}
					//console.log(parent);
					//console.log(movieid);
					//console.log(day);
					//console.log(popups[l].id.substring(popups[l].id.search("_")+1,popups[l].id.length));
				}
				//console.log(td[k]);
			}
			
		}
		console.log(i);
	}
	//console.log(calendars.length);
}
/*
document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal1').style.display = "flex";
});

document.querySelector('.close1').addEventListener("click", function() {
	document.querySelector('.bg-modal1').style.display = "none";
});
*/
