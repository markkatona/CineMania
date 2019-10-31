var actpopup;
var actDate;
var i=0;
function calendar(){
	var d = new Date();
	var year= d.getFullYear();
	var month = d.getMonth();
	var text = year;
	var days;
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
	text="<table oncopy=\"return false\" oncut=\"return false\" onpaste=\"return false\"><tr>";
	for (var i = 1; i <= days; i++) {
if (i == actday) {
	text+="<td style=\"background-color:red;\" id=\"" + i + "\" onclick=\"doSomething(this)\">"+i+"</td>";
}else{
	text+="<td onclick=\"doSomething(this)\" id=\"" + i +"\">"+i+"</td>";
}
if (i%7 == 0) {
	text+="</tr><tr>";
}
	}
	document.write(text);
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
	
	
	switch(parent){
case "Bosszúállók: Végjáték": 
	a = document.getElementById("a");
	break;
case "Pókember: Idegenben": 
	a = document.getElementById("b");
	break;
case "aladin": 
	a = document.getElementById("c");
	break;
case "oroszlánkirály": 
	a = document.getElementById("d");
	break;
	}

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

	

	if ((actDate) && (actDate.id == e.id)) {
actDate = "";
	}else {
a.style.display = "block";
var rect = e.getBoundingClientRect();
/*console.log(document.body.scrollTop, window.pageYOffset);*/
a.style.left = rect.left + e.offsetWidth + "px";
a.style.top = rect.top + e.offsetHeight + window.pageYOffset + "px";
a.style.backgroundColor = "white";
actpopup = a;
actDate = e;
	}


	

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
function popupDisable(){
	/*actpopup.style.display = "none";
	actpopup = "";
	actDate = "";
	console.log("popupDisable called");*/
}
function filmKeresese(e){
	var element = document.getElementById("keresesi mezo");
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