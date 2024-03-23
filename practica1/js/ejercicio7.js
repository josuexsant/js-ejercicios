let personas = [
  new Persona("Viris", 21),
  new Persona("Mariel", 21),
  new Persona("Fer", 22),
  new Persona("josue", 23),
];

let maxAge = 0;
let nombres = [];
personas.forEach((persona) => {
  if (persona.age > maxAge) {
    maxAge = persona.age;
    nombres = [persona.name];
  } else if (persona.edad === maxAge) {
    nombres.push(persona.name);
  }
});

let resultado = "";
if (nombres.length === 1) {
  resultado = `La persona de mayor edad es: ${nombres[0]}`;
} else {
  resultado = `Las personas de mayor edad son: ${nombres.join(", ")}`;
}

document.getElementById("result").innerText = resultado;
