<!DOCTYPE html> <!-- Define el tipo de documento como HTML5 -->
<html lang="en"> <!-- Abre la etiqueta de apertura de HTML y especifica el idioma como inglés -->
<head> <!-- Comienza la sección de encabezado del documento -->
    <meta charset="UTF-8"> <!-- Especifica la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura la visualización en dispositivos móviles -->
    <title>Users</title> <!-- Establece el título de la página como "Users" -->
</head> <!-- Cierra la sección de encabezado del documento -->
<body> <!-- Comienza la sección de cuerpo del documento -->
    <form method="post" action="register.php" class="FM"> <!-- Abre un formulario que envía datos mediante el método POST a "register.php" -->
    <img src="../img/ussr.jpg" class="redonda"><!--eitqueta de img para insertar imagenes-->
            <h1>Nuevo Usuario</h1><br/><!--etiqueta h para insertar titulos-->
            <input type="number" class="con" id="id" name="id" required placeholder="id"><br> <!-- Crea un campo de entrada numérico para "id" -->
            <br> <!-- Salto de línea -->
            <input type="text" class="con" id="usrName" name="usrName" required placeholder="usrName"></br> <!-- Crea un campo de entrada de texto para "usrName" -->
            <br> <!-- Salto de línea -->
            <input class="con" type="password" id="usrPw" name="usrPw" required placeholder="usrPw"></br> <!-- Crea un campo de entrada de contraseña para "usrPw" -->
            <br> <!-- Salto de línea -->
            <input type="text" class="con" id="usrSex" name="usrSex" required placeholder="usrSex"> <!-- Crea un campo de entrada de texto para "usrSex" -->
            <br> <!-- Salto de línea -->
            <input type="submit" class="boton" value="ingresar" onclick="location.href='../login.php'">
            <input type="submit" class="boton" value="Registrar" title="Registrar XD"> <!-- Crea un botón de envío con el valor "Registrar" y un título "Registrar XD" -->
            <br> <!-- Salto de línea -->
            <button type="button" class="boton" onclick="location.href='select.php'"><!--Esta línea crea un botón de tipo botón con la 
            clase "boton" que al hacer clic redirecciona a la página 'views/v_register.php'.-->
            Mostrar
        </button>
        
    </form> <!-- Cierra el formulario -->
    <style>
    *{ /*El asterísco indíca todo nuestro html*/
    margin: 0;/*Con margin se estable un margen para los 4 lados*/
    padding: 0;/*Con padding se ajusta el relleno que se crea alrededor del contenido de un elemento 
    dentro de los bordes definidos*/
    box-sizing: border-box;/*esta función lo que hace es recalcular la medida del border*/
}
.redonda{ /*Insertamos la imagen a nuestro formulario*/
    width: 100px;/*Es la anchura de la imagen*/
    height: 100px;/*Es la altura de la imagen*/
    border-radius: 150px;/*Es el redondeo de las 4 esquinas del elemento*/
}
body{/*Aquí colocamos una imagen de fondo*/
    background-image: url("../img/fondoo.jpg");/*Este apartado es para colocar una imagen de fondo*/
}
.FM{/*Aquí creamos el formulario y ajustamos sus elementos*/
    width: 400px;/*Anchura del elemento*/
    background: #24303c.3;/*color del elemto*/
    padding: 25px;/*padding ajusta el relleno que se crea alrededor del contenido de un elemento 
    dentro de los bordes definidos*/
    margin: auto;/*Margen del elemento*/
    margin-top: 25px;/*Margen superior del elemento*/
    border-radius: 10px;/*Redondeo de las 4 esquinas del elemento*/
    font-family: 'calibri';/*Tipo de letra del texto*/
    color: white;/*Color de la letra del texto*/
    box-shadow: 7px 13px 37px #0026ff;/*Permite agregar una sombra del elemento*/
    text-align: center;
}
.FM h1{/*Aquí se le da estilo a los titulos*/
    margin-top: 50px;/*Margen superior del elemto*/
    color: #fff;/*Color del texto*/
    font-family: Verdana, Geneva, Tahoma, sans-serif;/*Tipo de letra del texto*/
    position: relative;/*posición relativa del elemento*/
    text-shadow: 1px 1px 2px white, 0 0 1em #0026ff, 0 0 0.2em #0026ff;/*Permite agregar sombra al texto*/
}
.FM h3{
    font-size: 22px;/*Tamaño de la letra*/
    margin-bottom: 20px;/*propiedad de un elemento que establece 
    el espacio requerido en la parte inferior de un elemento*/
}
.con{/*Aquí se le da estilo a todos los input*/
    width: 100%;/*Anchura del elemento*/
    background: #24303c;/*Color de fondo del elemto*/
    padding: 10px;/*padding ajusta el relleno que se crea alrededor del contenido de un elemento 
    dentro de los bordes definidos*/
    border-radius: 10px;/*Ajusta el borde de las 4 esquinas de un elemento*/
    margin-bottom: 16px;/*propiedad de un elemento que establece 
    el espacio requerido en la parte inferior de un elemento*/
    border: 1px solid #0026ff;/*Ajusta el tamaño del borde de un elemento*/
    font-family: 'calibri';/*Tipo de letra*/
    font-size: 18px;/*Tamaño de letra*/
    color:white;/*Color del texto*/
    box-shadow: 7px 13px 37px #0026ff;/*Permite agregar una sombra del elemento*/
}
.FM .boton{/*Aquií se le da estilo al botón*/
font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
width: 100%;/*Anchura del elemto*/
background: #4a7be6;/*Color de fondo*/
border-style:none;/*Ningunn borde*/
padding: 12px;/*padding ajusta el relleno que se crea alrededor del contenido de un elemento 
dentro de los bordes definidos*/
color: rgb(255, 255, 255);/*Color del texto*/
margin: 16px 0; /*Ajusta el margen del elemento*/
font-size: 20px; /*Ajuste del tamaño del texto*/
box-shadow: 7px 13px 37px #0026ff;/*Permite agregar una sombra del elemento*/
text-shadow: 1px 1px 2px #0026ff, 0 0 1em #0026ff, 0 0 0.2em #0026ff;/*Permite agregar sombra al texto*/
}
.err{
    color: red;
    font-size: 14px;
    margin-top: 10px;
    margin-bottom: 10px;
}
</style>
</body> <!-- Cierra la sección de cuerpo del documento -->
</html> <!-- Cierra la etiqueta de cierre de HTML -->