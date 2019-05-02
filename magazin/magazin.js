musicalButton = document.querySelector('#musical-button');
stuffedButton = document.querySelector('#stuffed-button');
bathroomButton = document.querySelector('#bathroom-button');
musical = document.querySelector('.musical');
stuffed = document.querySelector('.stuffed');
bathroom = document.querySelector('.bathroom');

musicalButton.addEventListener('click', function(event){
	musical.style.display = 'block';
	stuffed.style.display = 'none';
	bathroom.style.display = 'none';
});

stuffedButton.addEventListener('click', function(event){
	musical.style.display = 'none';
	stuffed.style.display = 'block';
	bathroom.style.display = 'none';
});

bathroomButton.addEventListener('click', function(event){
	musical.style.display = 'none';
	stuffed.style.display = 'none';
	bathroom.style.display = 'block';
});