let input = document.getElementById('input');

function addToScreen(value) {
	input.value += value;
}

function clearScreen() {
	input.value = '';
}

function calculate() {
	input.value = eval(input.value);
}