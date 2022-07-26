/*

CanvasGrayscale - InfinitySlider Extension
Version: 1.0
Author: Epeo
Website: demo.epeo.it/infinityslider

*/
function canvasGrayscale (valuecanvas, valuewidth, valueheight) {
	var canvas  = valuecanvas;
	var width = valuewidth;
	var height = valueheight;

	var context = canvas.getContext("2d");
	imageData = context.getImageData(0, 0, width, height);
	px = imageData.data;
	length = px.length;

	for (var i = 0; i < length; i += 4) {
	gray = px[i] * .3 + px[i + 1] * .59 + px[i + 2] * .11;
	px[i] = px[i + 1] = px[i + 2] = gray;
	}

	context.putImageData(imageData, 0, 0);
}