<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portafolio Brandon Nuila</title>
  <link rel="stylesheet" href="Css/styles.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

  <!-- ======= Navegación ======= -->
  <header>
    <nav class="navbar">
      <h1 class="logo">Brandon Nuila</h1>
      <ul>
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#sobre-mi">Sobre mí</a></li>
        <li><a href="#proyectos">Proyectos</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <!-- ======= Sección Inicio ======= -->
  <section id="inicio" class="hero fade-in">
    <h2>¡Hola! Soy Brandon Nuila</h2>
    <p>Desarrollador Web Jr. especializado en PHP, MySQL y sistemas personalizados</p>
    <a href="#proyectos" class="btn">Ver Proyectos</a>
  </section>

  <!-- ======= Sobre mí ======= -->
  <section id="sobre-mi" class="about fade-in">
    <h2>Sobre mí</h2>
    <p>Soy desarrollador web con experiencia en sistemas de biblioteca, control con QR y soluciones a medida.</p>
    <p>Manejo tecnologías como PHP, MySQL, JavaScript, Bootstrap, AdminLTE y librerías para QR y reportes PDF.</p>
    <a href="CV_BrandonNuila.pdf" class="btn" target="_blank">Descargar CV</a>
  </section>

  <!-- ======= Proyectos ======= -->
  <section id="proyectos" class="projects fade-in">
    <h2>Mis Proyectos</h2>

    <!-- Proyecto Sistema de Biblioteca -->
    <div class="project-card slide-up">
      <h3>Sistema de Biblioteca</h3>
      <p>Desarrollado con PHP, MySQL, Bootstrap y DataTables</p>
      <ul>
        <li>Gestión de libros, estudiantes y docentes</li>
        <li>Préstamos y devoluciones con control de inventario</li>
        <li>Generación de constancias y reportes PDF</li>
        <li>Reportes de libros desactivados y más prestados</li>
      </ul>
      <div class="gallery">
        <img src="img/biblioteca1.png" alt="Vista del Sistema de Biblioteca">
        <img src="img/biblioteca2.png" alt="Préstamos de libros">
      </div>
      <a href="https://github.com/tuusuario/sistema-biblioteca" class="btn" target="_blank">Ver en GitHub</a>
    </div>

    <!-- Proyecto Sistema QR -->
    <div class="project-card slide-up">
      <h3>Sistema de Control con QR</h3>
      <p>Desarrollado con PHP, MySQL, JavaScript y HTML5 QR Scanner</p>
      <ul>
        <li>Escaneo con celular para registrar entrada/salida de alumnos</li>
        <li>Registros en tiempo real: nombre, grado, puerta, hora y estado</li>
        <li>Botón “recoger” que elimina automáticamente el registro</li>
        <li>Pantalla duplicada para TV, estilo tablero tipo banco</li>
      </ul>
      <div class="gallery">
        <img src="img/qr1.png" alt="Vista del Sistema QR">
        <img src="img/qr2.png" alt="Pantalla duplicada en TV">
      </div>
      <a href="https://github.com/tuusuario/sistema-qr" class="btn" target="_blank">Ver en GitHub</a>
    </div>
  </section>

  <!-- ======= Contacto ======= -->
  <section id="contacto" class="contact fade-in">
    <h2>Contacto</h2>
    <form id="contactForm" action="Comple/contact.php" method="post">
      <input type="text" name="nombre" placeholder="Tu nombre" required>
      <input type="email" name="correo" placeholder="Tu correo" required>
      <textarea name="mensaje" placeholder="Escribe tu mensaje" required></textarea>
      <button type="submit">Enviar</button>
    </form>
    <p>O escríbeme directamente a 
      <a href="mailto:brandonnuila707@gmail.com">brandonnuila707@gmail.com</a></p>
  </section>

  <footer>
    <p>© 2025 Brandon Nuila | Portafolio</p>
  </footer>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="Js/main.js"></script>
</body>
</html>
