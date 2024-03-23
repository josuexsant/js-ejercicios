const empresa = new Empresa("Chedraui", 40);
let candidatesList = "";

function addPerson(name, age) {
  const person = new Persona(name, age);
  console.log(person.name);
  console.log(person.age);

  if (empresa.isAceptable(person)) {
    candidatesList += person.name + ",";
    console.log("esta en el rango")
    showCandidatesList();
  }else{
    alert(person.name + " rebasa el limite de edad")
  }
}

function showCandidatesList() {
  document.getElementById("candidatesList").innerText = candidatesList;
}
