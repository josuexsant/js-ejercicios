class Empresa {
  constructor(name,maxAge){
    this.name = name;
    this.maxAge = maxAge;
  }

  isAceptable(persona){
    if(persona.age <= this.maxAge)
      return true;
    return false;
  }

}