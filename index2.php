
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <title>
        Proyecto Grupo 7 ReDonate
    </title>
    
</head>


<body class="bodycompleto">
    <!--Barra en el principio-->
    <header class="site_header">
        <h1 style="background-color: bisque; margin-left: 25%; margin-right: 25%;">ReDonate</h1>
        <div class="barra">
            <nav class = "navegacion">
                <!-- botones de navegación-->
                <a style="background-color: bisque; text-align: left; vertical-align: middle;" class="boton" href="admin.php">Admin</a>
            
            </nav>
            <img src="ImagenesBDD\g12.png" alt="logo">
        </div>
    </header>

<!--Desc proyect-->
    <div class="accordion" >
        <button type="button" class ="accordion__button"> 
            <h2>Descripcion del Proyecto</h2>
        </button>
            <div class="accordion__content">
                <h4>
                <p>Nuestro proyecto busca atacar el problema de la gran cantidad de alimentos que se desperdician por los supermercados al encontrarse cercanos a su fecha de vencimiento, mal rotulados o con defectos de empaque.  

                    Frente a esta problemática, hemos decidido crear una redistribución de estos recursos alimenticios, con el objetivo de acercarnos al menos en este ámbito a la producción y consumo sostenible que nos invita el ODS seleccionado.   
                    
                    Esto lo llevaremos a cabo a través de un sistema que va a unir al supermercado con la ONG que requiere el producto del cual el primero se debe o desea deshacerse; considerando que los alimentos pueden ser utilizados con tres distintos propósitos, los cuales son alimentación de personas, preparación de alimento para animales y como última opción la realización de compost agrícola.  </p>
                <img src="ImagenesBDD\comidafondo.jpeg" alt="comidaenbasura">
                </h4>
            </div>
            
    </div>

<!-- Inscripcion empresa-->
    <div class="accordion">
        <button type="button" class ="accordion__button"> 
            <h1>Inscripcion de Empresas</h1>
        </button>
            <div class="accordion__content">
                <h3>
                    <a class="button" href="#popup1">Inscriba su empresa</a>
                </h3>
                <div id="popup1" class="overlay">
                    <div class="popup"><h2>Por favor llenar el formulario con los datos correspondientes (trabajo en proceso)</h2>
                        <a class="close" href="#">&times;</a>
                        <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dolore explicabo ad repudiandae voluptatibus tempora distinctio cumque recusandae omnis excepturi, pariatur nemo repellat fugit enim ipsum praesentium dolorem, voluptate fugiat?</div>
                    </div>
                </div>
                <h4>
                    <p>Te invitamos a inscribir tu empresa en el link disponible, para hacerte parte del proyecto y donar alimentos que no puedes vender por diferentes razones, para que sean utilizados por Organizaciones que lo necesitan. </p>
                    <img src="ImagenesBDD\business people.jpg" alt="basedatosfoto">
                    </h4>
            </div>
    </div>


    <div class="accordion">
        <button type="button" class ="accordion__button"> 
            <h1>Inscripcion de ONG</h1>
        </button>
            <div class="accordion__content">
                <h3>
                    <a class="button" href="#popup2">Inscriba su ONG</a>
                </h3>
                <div id="popup2" class="overlay">
                    <div class="popup"><h2>Por favor llenar el formulario con los datos correspondientes (trabajo en proceso)</h2>
                        <a class="close" href="#">&times;</a>
                        <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dolore explicabo ad repudiandae voluptatibus tempora distinctio cumque recusandae omnis excepturi, pariatur nemo repellat fugit enim ipsum praesentium dolorem, voluptate fugiat?</div>
                    </div>
                </div>
                <h4>
                    <p>Si tu ONG requiere utilizar alimentos o insumos básicos para su funcionamiento, o nos puedes ayudar en la redistribución de ellos, te invitamos a inscribir tu organización y formar parte de nuestro proyecto. </p>
                    <img src="ImagenesBDD\ong.jpg" alt="ongfoto">
                     </h4>
            </div>

    </div>

<!--Integrantes-->
    <div class="accordion">
        <button type="button" class ="accordion__button"> 
            <h2>Nuestro Equipo</h2>
        </button>
            <div class="accordion__content" class="contenedor">
                <div class="equipo">
                    <section class="persona">
                        <h3>
                            <img src="ImagenesBDD\nopic.png" alt="nopic">
                        </h3>
                        <h1>Allan Sifri</h1>
                        <h1>Estudiante</h1>
                        <h4>
                         <ul>
                            <li>Carrera: Civil Informática</li>
                            <li><a href="#">Red Social</a></li>
                        </ul>
                        <p>Interesado en el medioambiente con la esperanza de que todavía podemos salvar al planeta</p>
                        </h4>
                    </section>
                    <section class="persona">
                        <h3>
                            <img src="ImagenesBDD\nopic.png" alt="nopic">
                        </h3>
                        <h1>Constanza Anabalon</h1>
                        <h1>Estudiante</h1>
                        <H4>
                         <ul>
                            <li>Carrera: Civil Industrial</li>
                            <li><a href="#">Red Social</a></li>
                        </ul>
                        <p>Interesada en el área social y medioambiental, me apasiona trabajar por el bien de la comunidad y ayudar para mejorar su calidad de vida.</p>
                        </H4>
                    </section>
                    <section class="persona">
                        <h3>
                            <img src="ImagenesBDD\nopic.png" alt="nopic">
                        </h3>
                        <h1>Pablo Veloz</h1>
                        <h1>Estudiante</h1>
                        <H4>
                         <ul>
                            <li>Carrera: Civil Industrial</li>
                            <li><a href="#">Red Social</a></li>
                        </ul>
                        <p>Interesado en el medioambiente y como aprovechar nuestros recursos, me gusta trabajar para mejorar el estilo de vida de nuestro país, reducir brechas para ser un país mejor.</p>
                        </H4>
                    </section>
                </div>
            </div>
    </div>
<!--Fin Cuerpo-->
</body>


<!--seccion javascript-->
<script>
    document.querySelectorAll(".accordion__button").forEach(button =>{
        button.addEventListener('click', () =>{
            const accordionContent = button.nextElementSibling;
            button.classList.toggle('accordion__button--active');
            if(button.classList.contains('accordion__button--active')){
                accordionContent.style.maxHeight=accordionContent.scrollHeight +'px';
            }
            else{
                accordionContent.style.maxHeight =0;
            }
        });
    });
</script>


<!--Inscripción ONG-->

<!-- Fin programa-->
</html>