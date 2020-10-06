let datos1 =[
    {Nombre:"Ana María Gómez", Punto:"1"},
    {Nombre:"Andrés Fajardo", Punto:"1"},
    {Nombre:"Andrés Patiño Criado ", Punto:"1"},
    {Nombre:"Aura Sandoval", Punto:"1"},
    {Nombre:"Catherine Martínez Díaz ", Punto:"1"},
    {Nombre:"Isabella Moreno Pinto", Punto:"1"},
    {Nombre:"Jorge Iván Urán", Punto:"1"},
    {Nombre:"Juan Manuel Márquez", Punto:"1"},
    {Nombre:"Juan Sebastián Ortiz Ramírez", Punto:"1"},
    {Nombre:"JULIAN ANGULO DIAZ", Punto:"1"},
    {Nombre:"Laura Valentina Castaño Lozano", Punto:"1"},
    {Nombre:"Libardo A. González Moreno", Punto:"1"},
    {Nombre:"Mario Lozano", Punto:"1"},
    {Nombre:"Miguel Caro", Punto:"1"},
    {Nombre:"Natalia Aguilar", Punto:"1"},
    {Nombre:"Natalia Gómez ", Punto:"1"},
    {Nombre:"Paula Tapia", Punto:"1"},
    {Nombre:"Paula Torres", Punto:"1"},
    {Nombre:"Ricardo Rodríguez Roldán", Punto:"1"},
    {Nombre:"Santiago Patiño Criado", Punto:"1"},
    {Nombre:"Yennifer Alejo ", Punto:"1"},
    {Nombre:"Sebastian Sierra Alarcon ", Punto:"1"}];

let datos2=[
    {Nombre:"Camila Camacho", Punto:"2"},
    {Nombre:"Camilo Arango", Punto:"2"},
    {Nombre:"Diego Arango ", Punto:"2"},
    {Nombre:"Javier Isaza De Larrañaga", Punto:"2"},
    {Nombre:"Johana Ortiz Romero", Punto:"2"},
    {Nombre:"Juan Camilo Fonseca", Punto:"2"},
    {Nombre:"Luis Torres", Punto:"2"},
    {Nombre:"Santiago Muñoz", Punto:"2"},
    {Nombre:"Nicolás Ramírez Aguilar", Punto:"2"}];

let datos3=[
    {Nombre:"Ailin Prado Falla", Punto:"3"},
    {Nombre:"Angela Bocanegra Linares", Punto:"3"},
    {Nombre:"Andrés Julián Rendón Sánchez", Punto:"3"},
    {Nombre:"Daniel Quintero Arias", Punto:"3"},
    {Nombre:"Daniel Santiago Cortés Ramírez", Punto:"3"},
    {Nombre:"David Alejandro González Rodríguez", Punto:"3"},
    {Nombre:"Juan Diego López", Punto:"3"},
    {Nombre:"Juan Triana", Punto:"3"},
    {Nombre:"Julián Organista", Punto:"3"}];

let datos4=[
    {Nombre:"Andres Felipe Torres Ramos", Punto:"4"},
    {Nombre:"Carlos Peñuela", Punto:"4"},
    {Nombre:"Daniel Ramirez Toledo", Punto:"4"},
    {Nombre:"Jorge Fernando Victoria Trujillo", Punto:"4"},
    {Nombre:"Lina María Montoya Salazar", Punto:"4"},
    {Nombre:"Luis González", Punto:"4"}];

function generateTableHead(table, data) {
    let thead = table.createTHead();
    let row = thead.insertRow();
    for (let key of data) {
        let th = document.createElement("th");
        let text = document.createTextNode(key);
        th.appendChild(text);
        row.appendChild(th);
    }
}

function generateTable(table, data) {
    for (let element of data) {
      let row = table.insertRow();
      for (key in element) {
        let cell = row.insertCell();
        let text = document.createTextNode(element[key]);
        cell.appendChild(text);
        }
    }
}

let table1 = document.getElementById("puntos1")
let data1 = Object.keys(datos1[0]);
generateTableHead(table1, data1);
generateTable(table1, datos1);

let table2 = document.getElementById("puntos2")
let data2 = Object.keys(datos2[0]);
generateTableHead(table2, data2);
generateTable(table2, datos2);

let table3 = document.getElementById("puntos3")
let data3 = Object.keys(datos3[0]);
generateTableHead(table3, data3);
generateTable(table3, datos3);

let table4 = document.getElementById("puntos4")
let data4 = Object.keys(datos4[0]);
generateTableHead(table4, data4);
generateTable(table4, datos4);

