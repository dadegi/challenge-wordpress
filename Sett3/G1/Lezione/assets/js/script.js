var titolo = document.getElementById("titolo");
var addBtn = document.getElementById("aggiungi");
var elenco = document.getElementById("elenco");

titolo.innerHTML = "Titolo";

addBtn.addEventListener("click", function () {
	let studente = document.getElementById("studente").value;
	elenco.innerHTML += `<li>${studente}</li>`;
});

var addTask = document.getElementById("inserisci");
var task = document.getElementById("task");
var lista = document.getElementById("lista");
var arrayTask = [];

addTask.addEventListener("click", function () {
	if (task.value != "") {
		arrayTask.push(task.value);
		creaLista(task.value);
	}
});

function creaLista(item) {
	lista.innerHTML = "";
	for (i = 0; i < arrayTask.length; i++) {
		lista.innerHTML += `<li><button type="button" id="elimina" onclick="elimina(${i});">X</button>${arrayTask[i]}</li>`;
	}
	task.value = "";
}

function elimina(id) {
	arrayTask.splice(id, 1);
	creaLista();
}
