// Crea 3 o más variables de distintos tipos

const name = "Paulus Linschoten Framis";
const age = 28;
const isDev = true;
const hobbies = ["Music", "Coding", "Fitness"];

const Car = {
	brand: "Toyota",
	model: "Celica",
	year: 1994,
	power: 175
};

const Persona = {
	fname: "Paulus",
	lname: "Framis",
	isDeveloper: true
};


function displayPerson(persona) {
	console.log("-- DISPLAYING PERSONA --\n");
	console.log("First Name: ", persona.fname);
	console.log("Last Name: ", persona.lname);
	console.log("Is a dev? ", persona.isDeveloper);
}


function displayCar(car) {
	console.log("-- DISPLAYING CAR --\n");
	console.log("Brand: ", car.brand);
	console.log("Model: ", car.model);
	console.log("Year: ", car.year);
	console.log("Power: ", car.power);
}

const car = new Car();
displayCar(car);

const me = new Persona();
displayPerson(me)