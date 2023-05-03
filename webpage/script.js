const form = document.getElementById('survey-form');
const submitButton = document.getElementById('submit-button');

form.addEventListener('submit', (event) => {
	event.preventDefault();

	// Get form values
	const name = form.elements['name'].value;
	const email = form.elements['email'].value;
	const age = form.elements['age'].value;
	const gender = form.elements['gender'].value;
	const favoriteBook = form.elements['favorite-book'].value;
	const
