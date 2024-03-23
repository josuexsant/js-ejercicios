class Participante {
  constructor(nombre) {
    this.nombre = nombre;
    this.puntos = 0;
  }

  imprimir() {
    document.getElementById("info").innerHTML = "Nombre:" + this.nombre;
    
    document.getElementById("pts").innerHTML = "Puntos:" + this.puntos;
  }

  aumentarPuntos(cantidad) {
    this.puntos += cantidad;
  }

  verificarSiGano() {
    if (this.puntos > 1000) {
      alert("¡Felicidades, has ganado!");
    } else {
      alert("Sigue jugando para ganar más puntos");
    }
  }
}
