document.getElementById("form-name").addEventListener("submit", function(e) {
	e.preventDefault(); // Previene el envío normal del formulario

	const fname = document.getElementById("fname").value;
	const lname = document.getElementById("lname").value;
	console.log("Name: ", fname)
	console.log("Last name: ", lname)
});