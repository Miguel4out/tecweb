
function getDatos()
{
    var nombre = prompt("Nombre: ", "");

    var edad = prompt("Edad: ", 0);

    var div1 = document.getElementById('nombre');
    div1.innerHTML = '<h3> Nombre: '+nombre+'</h3>';

    var div2 = document.getElementById('edad');
    div2.innerHTML = '<h3> Edad: '+edad+'</h3>';
}

function getHola_Mundo(){
    var frase= 'Hola Mundo';
    var divHM = document.getElementById('frase');

    divHM.innerHTML = '<h3> ' + frase + '</h3>';
}

function getEje2_Pag6(){
    var nombre = "Juan";
    var edad = 10;
    var altura = 1.92;
    var casado = false;
    var divEJ2 = document.getElementById('Eje2_P6');
    divEJ2.innerHTML = '<h3> Nombre ' + nombre + '<br>' + 'Edad ' + edad + '<br>' + "Altura " + altura + '<br>' + "Casado (SI/NO) "+ casado + '</h3>'
}


function getEje2_Pag12(){
    var nombre = prompt("Ingresa tu nombre: ", "");
    var edad =prompt("Ingresa tu edad: ", "");
    var divEJ12 = document.getElementById('Eje2_P12');
    divEJ12.innerHTML = '<h3> Hola  ' + nombre + " así que tienes " + edad + " años" + '</h3>'
}

function getEje3_Pag8(){
    var nombre = prompt("Ingresa tu nombre:", "");
    var nota =  prompt("Ingresa tu nota:", "");

    if (nota>=4) {
        var div = document.getElementById('Eje3_P8');
        div.innerHTML = nombre+ " esta aprobado con un " +nota;
    }
}

function  getEje3_Pag3(){
    var valor1 = prompt("Introducir primer número:", "");
    var valor2 = prompt("Introducir segundo número", "");
    var suma = parseInt(valor1)+parseInt(valor2);
    var producto = parseInt(valor1)*parseInt(valor2);
    var div = document.getElementById('Eje3_P3');
    div.innerHTML =" La suma es  " + suma + '<br>' + " y el producto es " + producto;
}

function getEje3_Pag11(){
    var num1,num2;
    num1 = prompt("Ingresa el primer número:", );
    num2 = prompt("Ingresa el segundo número:", "");
    num1 = parseInt(num1);
    num2 = parseInt(num2);
    var div = document.getElementById('Eje3_P11');
    if (num1>num2) {
    div.innerHTML = "el mayor es "+num1;
    }
    else {
    div.innerHTML = "el mayor es "+num2;
    }
}

function getEje3_Pag15(){
    var nota1,nota2,nota3;

    nota1 = prompt("Ingresa 1ra. nota:", "");
    nota2 = prompt("Ingresa 2da. nota:", "");
    nota3 = prompt("Ingresa 3ra. nota:", "");

    //Convertimos los 3 string en enteros
    nota1 = parseInt(nota1);
    nota2 = parseInt(nota2);
    nota3 = parseInt(nota3);

    var pro;
    pro = (nota1+nota2+nota3)/3;

    var div = document.getElementById('Eje3_P15');
    if (pro>=7) {
        div.innerHTML ="aprobado";
    }
    else {
        if (pro>=4) {
            div.innerHTML = "regular";
        }
            else {
                div.innerHTML= "reprobado";
            }
    }
}

function getEje3_Pag18(){
    var valor;
    valor = prompt("Ingresar un valor comprendido entre 1 y 5:", "" );
    //Convertimos a entero
    valor = parseInt(valor);
     var div = document.getElementById('Eje3_P18');
    switch (valor) {
        case 1: div.innerHTML =" uno" ;

        break;

        case 2: div.innerHTML = "dos";

        break;

        case 3: div.innerHTML = "tres";

        break;

        case 4: div.innerHTML ="cuatro ";

        break;

        case 5: div.innerHTML ="cinco";

        break;

        default:div.innerHTML ="debe ingresar un valor comprendido entre 1 y 5.";
    }
}

function getEje3_Pag21(){
    var col;
    col = prompt("Ingresa el color con que quierar pintar el fondo dela ventana (rojo, verde, azul)", "" );
    switch (col) {
        case "rojo": document.bgColor="#ff0000";

        break;

        case "verde": document.bgColor="#00ff00";

        break;

        case "azul": document.bgColor="#0000ff";s
    break;

    }
}

function getEje4_Pag5(){
    var div = document.getElementById('Eje4_P5');
    var x;
    x=1;
    while (x<=100) {
        div.innerHTML += x ;
        div.innerHTML += "<br>";
        x=x+1;
    }
}

function getEje4_Pag6(){
    var div = document.getElementById('Eje4_P6');
    var x=1;
    var suma=0;
    var valor;
    while (x<=5){
    valor = prompt("Ingresa el valor:", "");
    valor = parseInt(valor);
    suma = suma+valor;
    x = x+1;
    }
    div.innerHTML("La suma de los valores es " +suma+"<br>");
}


function getEje4_Pag12(){
    var div = document.getElementById('Eje4_P12');
    var valor;
    do{
        valor = prompt("Ingresa un valor entre 0 y 999:","");
        valor = parseInt(valor);
        div.innerHTML += "El valor " +valor+" tiene ";
        if (valor<10)
            div.innerHTML += "Tiene 1 dígitos";
        else
        if (valor<100) {
            div.innerHTML += "Tiene 2 dígitos";
        }
        else {
            div.innerHTML += "Tiene 3 dígitos";
        }
            div.innerHTML += "<br>";
    }while(valor!=0);
}

function getEje4_Pag16(){
     var div = document.getElementById('Eje4_P16');
     var f;
    for(f=1; f<=10; f++)
    {
    div.innerHTML += f+" ";
}
}




function getEje5_Pag5(){
    var div = document.getElementById('Eje5_P5');
     div.innerHTML += "Ingresa tu documento correctamente<br>";
     div.innerHTML += "Cuidado<br>";
     div.innerHTML += "Ingresa tu documento correctamente<br>";
     div.innerHTML += "Cuidado<br>";
     div.innerHTML += "Ingresa tu documento correctamente<br>";
}


function getEje5_Pag6(){
    var div = document.getElementById('Eje5_P6');
    function mostrarMensaje() {
        let p = document.createElement("p");
        p.innerHTML = "Cuidado<br>Ingresa tu documento correctamente";
        div.append(p);
    }
    mostrarMensaje();
    mostrarMensaje();
    mostrarMensaje();
}

function getEje5_Pag10(){
    var div = document.getElementById('Eje5_P10');
    function mostrarRango(x1,x2) {
    var inicio;
    for(inicio=x1; inicio<=x2; inicio++) {
    div.innerHTML += inicio+"";

    }
    }
    var valor1,valor2;
    valor1 = prompt("Ingresa el valor inferior:", "");
    valor1 = parseInt(valor1);
    valor2 = prompt("Ingresa el valor superior:", "");
    valor2 = parseInt(valor2);
    mostrarRango(valor1,valor2);
}

function getEje5_Pag12(){
    var div = document.getElementById('Eje5_P12');
    function convertirCastellano(x) {
        if(x==1)
        return "uno";
        else
        if(x==2)
        return "dos";
        else
        if(x==3)
        return "tres";
        else
        if(x==4)
        return "cuatro";

        else

        if(x==5)
        return "cinco";
        else
        return "valor incorrecto";

        }
        var valor = prompt("Ingresa un valor entre 1 y 5","");
        valor = parseInt(valor);
        var r = convertirCastellano(valor);
        div.innerHTML = r;
}

function getEje5_Pag16(){
    var div = document.getElementById('Eje5_P16');
    var x = prompt("Ingrese el valor a convertir ", "");
    switch (x) {
        case "1":  div.innerHTML = "uno"; break;
        case "2":  div.innerHTML = "dos";  break;
        case "3":  div.innerHTML = "tres";  break;
        case "4":  div.innerHTML = "cuatro";  break;
        case "5":  div.innerHTML = "cinco"; break;
        default:  div.innerHTML = "valor incorrecto";  break;
    }
}