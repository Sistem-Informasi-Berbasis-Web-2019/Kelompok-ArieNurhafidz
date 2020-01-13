
var modal = document.getElementById('simpleModal');

var modalBtn = document.getElementById('modalBtn');

var closeBtn = document.getElementsByClassName('closeBtn')[0];


modalBtn.addEventListener('click', openModal);
modalBtn.addEventListener('keyup', openModal); 

closeBtn.addEventListener('click', closeModal);


function openModal(e){
	e.preventDefault();
	modal.style.display = 'block';
}


function closeModal(){
	modal.style.display = 'none';
}