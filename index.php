<?php
session_start();


?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Alta Frecuencia</title>
  <link rel="stylesheet" href="styles.css"
</head>
<body>

<header class="header">
  <div class="barra-superior"></div>
  <div class="header-caja">
    <div class="logo-caja">
      <img src="logo.png" alt="Logo Alta Frecuencia">
    </div>

    <nav class="menu">
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Noticias</a></li>
        <li><a href="#">Sobre Nosotros</a></li>
      </ul>
    </nav>

    <form class="buscador" role="search">
      <label class="solo-lectura" for="q">Búsqueda</label>
      <input id="q" type="search" placeholder="Busqueda">
    </form>
  </div>
</header>

  <main>
    <section class="bienvenida">
      <div>
        <h1>Bienvenidos a Alta Frecuencia</h1>
        <p>
          En Alta Frecuencia exploramos los sonidos que marcan tendencias,
          las historias detrás de los artistas y las canciones que están
          cambiando la forma en que entendemos la música.
        </p>
        <p>
          Cada semana te traemos nuevos episodios con entrevistas exclusivas,
          análisis de lanzamientos, debates sobre géneros y cultura musical actual.
        </p>
        <button>Saber Más</button>
      </div>
    </section>

    <section>
      <article></article>
      <article></article>
      <article></article>
    </section>

    <section>
      <h2>¡Recién salidos del estudio!</h2>
      <p>Descubre los últimos episodios de Alta Frecuencia.</p>

      <div>
        <article>
          <span>Nuevo</span>
          <h3>El sonido del verano</h3>
          <p>
            Ritmos urbanos, electrónicos y hits que dominan las playlists.
          </p>
          <button>Escúchalo ahora</button>
        </article>

        <article>
          <h3>Travis Scott: más allá del trap</h3>
          <p>
            Analizamos su influencia en la cultura musical moderna.
          </p>
          <button>Reproducir episodio</button>
        </article>

        <article>
          <span>Nuevo</span>
          <h3>Productores que están cambiando el juego</h3>
          <p>
            Conversamos con los creadores detrás de los nuevos sonidos.
          </p>
          <button>Escuchar</button>
        </article>
      </div>
    </section>
  </main>

  <footer>
    <section>
      <p>
        Conecta, comparte y vive el pulso musical.
        Alta Frecuencia es tu espacio para descubrir nuevas culturas sonoras.
      </p>
    </section>

    <section>
      <h4>Explorar</h4>
      <ul>
        <li><a href="#">Últimos episodios</a></li>
        <li><a href="#">Entrevistas</a></li>
        <li><a href="#">Playlists</a></li>
        <li><a href="#">Artículos</a></li>
      </ul>
    </section>

    <section>
      <h4>Legal</h4>
      <ul>
        <li><a href="#">Política de privacidad</a></li>
        <li><a href="#">Aviso legal</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </section>

    <section>
      <form>
        <label for="correo">Recibe nuestro contenido</label>
        <input type="email" id="correo" placeholder="Ingresa tu correo electrónico">
        <button>Suscríbete ahora</button>
      </form>
    </section>
  </footer>

</body>
</html>