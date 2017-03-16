var el = document.getElementById('logo');
var ele = el.firstChild;

window.addEventListener("scroll", scrolldown);

function scrolldown(){

	var distance_from_top = document.body.scrollTop;

	if (distance_from_top === 0) {
		el.style.position = 'static';
		el.style.top = 'auto';
		ele.style.color = '#FFD700';
		ele.style.fontSize = '63px';
	}
	
	if(distance_from_top > 0) {
		el.style.position = 'fixed';
		el.style.top = '0px';
		el.style.left = '643px';
		el.style.zIndex = '30';
		ele.style.color = 'lightgreen';
		ele.style.fontSize = '45px';
	}
}

el.addEventListener("click", scrollup);
el.addEventListener("mouseover", hoverup);
el.addEventListener("mouseout", hoverdown);

function scrollup(){
	document.body.scrollTop = -1;
}
function hoverup(){
	ele.style.color = 'yellow';
}
function hoverdown(){
	ele.style.color = 'lightgreen';
	scrolldown();
}



