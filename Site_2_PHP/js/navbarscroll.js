function Scroll() {
	var top = document.getElementById('myHeader');
	var ypos = window.pageYOffset;
	if(ypos > 200) {
		top.style.background-color = "rgba(255,255,255,1);
		top.style.position = "fixed";
		