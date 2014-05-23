




/* change brighness and contracst value and then desatuating images*/
function desaturate(img) {
	if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){ //test for MSIE x.x;
		Pixastic.process(img, "desaturate");
		/*uncomment below to apply mouse out stats*/
		/*img2.onmouseout = function() {
			Pixastic.revert(this);
		}*/ 

	}
	else {
		var img2 = Pixastic.process(img, "brightness" , {brightness:30,contrast:0.2});
		Pixastic.process(img2, "desaturate");
	}
} 
function contrast(img) {
	var img2 = Pixastic.process(img, "brightness", {brightness:50,contrast:0.5});
	img2.onmouseout =function () {
		Pixastic.revert(this);
	}
}
