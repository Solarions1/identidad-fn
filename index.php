<!-- 

Este sitio web está diseñado para Identidad
No se permite la distribución del mismo




-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#e30062" />
    <title>Identidad</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Raleway:wght@400;700;800&family=Roboto:wght@100;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" type="text/css" href="./css/navbar.css" />
    <link rel="stylesheet" type="text/css" href="./css/index.css" />
  </head>

  <body>
    <div class="first-screen">
      <header>
        <div class="hamburger">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>

        <nav class="main-nav">
          <ul class="nav-menu">
            
            <li>
              <a
                class="home-tab nav-element"
                href="#"
              >
                Inicio
              </a>
            </li>
            <li>
              <a
                class="nav-element active-tab"
                href="/ventas"
              >
                Ventas
              </a>
            </li>
            <li>
              <a
                class="nav-element active-tab"
                href="/identidad"
              >
                Identidad
              </a>
            </li>
          </ul>
        </nav>
      </header>

      <div class="heading-handles-container">
        <span class="welcome-text">
          <h2>
            <span class="welcome">Bienveni@</span>
            <span class="to-the">a</span>
          </h2>
          <h1>
            <span>Identidad</span>
          </h1>
          <div class="handles-container">
            <a
              href="/ventas"
              target="_blank"
              class="social-handles"
              id="vengas"
            >
              Sistema de ventas
            </a>

            <span class="link-seperators">&vert;</span>
            <span class="seperators">&bull;</span>

            <a
              href="/identidad"
              target="_blank"
              class="social-handles"
              id="Inventario"
            >
              Identidad/ Coral Azul inventario
              
            </a>

            
          </div>
        </span>
        <img
          class="welcome-image"
          src="img/index-page/welcome-image.png"
          alt="Welcome_Image"
        />
      </div>

   
      </section>

    <footer>
      <p class="info-repo" style="color: white;">
        Coral Azul es una sub-marca de Identidad
      </p>
    </footer>

    <script type="module" src="./js/login.js"></script>
    <script type="module" src="./js/navbar.js"></script>
    <script src="js/darkmode.js"></script>
  </body>
</html>
