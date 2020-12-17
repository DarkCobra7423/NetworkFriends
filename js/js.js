/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function comprobarClave(){
    clave1 = document.f1.clave1.value
    clave2 = document.f1.clave2.value

    if (clave1 == clave2)
       alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo")
    else
       alert("Las dos claves son distintas...\nRealizaríamos las acciones del caso negativo")
}

function country(country){
    var select = document.getElementById(country);
select.addEventListener('change',
  function(){
    var selectedOption = this.options[select.selectedIndex];
    console.log(selectedOption.value + ': ' + selectedOption.text);
  });
}