const canvas = document.querySelector('#canvas');
const context = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// window.addEventListener('resize', function(event){
// 	canvas.width = window.innerWidth;
// 	canvas.height = window.innerHeight;
// })

let red = document.querySelector('.red');
red.addEventListener('click', function(){
	context.strokeStyle = 'red';
	context.fillStyle = 'red';
})

let green = document.querySelector('.green');
green.addEventListener('click', function(){
	context.strokeStyle = 'green';
	context.fillStyle = 'green';
})

let blue = document.querySelector('.blue');
blue.addEventListener('click', function(){
	context.strokeStyle = 'blue';
	context.fillStyle = 'blue';
})

let yellow = document.querySelector('.yellow');
yellow.addEventListener('click', function(){
	context.strokeStyle = 'yellow';
	context.fillStyle = 'yellow';
})

let pink = document.querySelector('.pink');
pink.addEventListener('click', function(){
	context.strokeStyle = 'pink';
	context.fillStyle = 'pink';
})

let orange = document.querySelector('.orange');
orange.addEventListener('click', function(){
	context.strokeStyle = 'orange';
	context.fillStyle = 'orange';
})

let purple = document.querySelector('.purple');
purple.addEventListener('click', function(){
	context.strokeStyle = 'purple';
	context.fillStyle = 'purple';
})

let black = document.querySelector('.black');
black.addEventListener('click', function(){
	context.strokeStyle = 'black';
	context.fillStyle = 'black';
})

context.lineWidth = 10;
let draw = false;

const drawLine = (event) => {
	if (draw) {
		context.lineTo(event.clientX, event.clientY);
		context.stroke();
		context.beginPath();
		// draw circle
		context.arc(event.clientX, event.clientY, 5, 0, Math.PI * 2);
		context.fill();
		context.beginPath();
		context.moveTo(event.clientX, event.clientY);
	}
	
}

canvas.addEventListener('mousedown', function(event) {
	draw = true;
	drawLine(event);
})

canvas.addEventListener('mousemove', drawLine);

canvas.addEventListener('mouseup', function(event) {
	draw = false;
	context.beginPath();
})