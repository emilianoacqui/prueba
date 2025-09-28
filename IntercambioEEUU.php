<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <!-- Navigation -->
          <nav class="navbar">
              <div class="nav-container">
                  <div class="nav-logo">
                      <img src="fotosPrincipales/logo2.png" alt="Scuola Italiana di Montevideo">
                  </div>
                  <div class="nav-menu-button" onclick="window.location.href='menuScuola.php'">
                      <span></span>
                      <span></span>
                      <span></span>
                  </div>
              </div>
          </nav>

          <!-- Hero Section -->
          <section class="hero-centered editable-image" style="background-image: url('fotosIntercambio/EEUU.jpg'); background-size: cover; background-position: center;">
              <div class="hero-overlay"></div>
              <div class="hero-content-center">
                  <h1 class="hero-title-center editable-text">Estados Unidos</h1>
                  <p class="hero-subtitle-center editable-text">Intercambio scuola italiana</p>
              </div>
          </section>

          <!-- Main Content -->
          <main class="main-centered">
              <div class="container">
                  <!-- Full Width Text -->
                  <section class="full-text">
                      <div class="text-container">
                          <h2 class="centered-title editable-text">Encabezado Principal</h2>
                          <p class="centered-text editable-text">Este es un párrafo centrado con contenido principal. Aquí puedes escribir información extensa sobre el tema que deseas presentar. El diseño centrado ayuda a enfocar la atención del lector en el contenido más importante.</p>
                      </div>
                  </section>

                  <!-- Quote Section -->
                  <section class="quote-section">
                      <div class="quote-container">
                          <blockquote class="main-quote editable-text">"Una cita o frase destacada que resuma la esencia del contenido que estás presentando en tu página web."</blockquote>
                          <cite class="quote-author editable-text">- Autor de la cita</cite>
                      </div>
                  </section>

                  <!-- Two Column Text -->
                  <section class="two-columns">
                      <div class="columns-container">
                          <div class="column">
                              <h3 class="column-title editable-text">Primera columna</h3>
                              <p class="column-text editable-text">Contenido de la primera columna. Puedes usar este espacio para desarrollar un aspecto específico del tema principal.</p>
                          </div>
                          <div class="column">
                              <h3 class="column-title editable-text">Segunda columna</h3>
                              <p class="column-text editable-text">Contenido de la segunda columna. Este espacio es ideal para información complementaria o contrastante.</p>
                          </div>
                      </div>
                  </section>

                  <!-- Final Text Section -->
                  <section class="final-text">
                      <div class="text-container">
                          <h2 class="centered-title editable-text">Sección de cierre</h2>
                          <p class="centered-text editable-text">Párrafo final donde puedes resumir los puntos clave o hacer un llamado a la acción para tus lectores.</p>
                      </div>
                  </section>

                  <section>
  <div class="boton-imagenes">
  <a href="EEUUFotos.php" class="intercambio-btn">
    Ver Fotos
  </a>
</div>
</section>

<style>
.boton-imagenes {
    text-align: center; /* centra el botón en la sección */
    margin: 40px 0;
}

.boton-imagenes button {
    background-color: #DC343C;   /* rojo */
    color: white;               /* texto blanco */
    border: none;               /* sin borde */
    padding: 12px 24px;         /* espacio interno */
    border-radius: 6px;         /* esquinas redondeadas */
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
}

.boton-imagenes button:hover {
    background-color: #a50000;  /* rojo más oscuro al pasar el mouse */
    transform: scale(1.05);     /* efecto zoom suave */
}
</style>

              </div>
          </main>
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
          body { font-family: 'Merriweather Sans', sans-serif; line-height: 1.6; color: #333; }
          .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
 
          .navbar { position: relative; background: rgba(10, 36, 82, 0.5); z-index: 1000; height: 80px; }
          .nav-container { display: flex; justify-content: space-between; align-items: center; padding: 15px 5%; max-width: 1200px; margin: 0 auto;  height: 100%; }
          .nav-logo img { height: 120px; width: auto; }
          .nav-menu-button { display: flex; flex-direction: column; cursor: pointer; padding: 8px; }
          .nav-menu-button span { width: 25px; height: 3px; background: white; margin: 3px 0; border-radius: 2px; }

            /* Navigation */
          .hero-centered { 
    position: relative;
    top: -80px;
    height: calc(70vh + 80px); 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    margin-bottom: -80px;
}         

          .hero-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(27, 47, 111, 0.3); }
          .hero-content-center { text-align: center; color: white; z-index: 2; position: relative; max-width: 800px; padding: 0 20px; }
          .hero-title-center { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
          .hero-subtitle-center { font-size: 1.3rem; opacity: 0.95; }

          /* Main Content Centered */
          .main-centered { padding: 80px 0; }
          
          .full-text, .final-text { margin: 60px 0; }
          .text-container { max-width: 800px; margin: 0 auto; text-align: center; }
          .centered-title { font-size: 2.2rem; color: #1B2F6F; margin-bottom: 30px; }
          .centered-text { font-size: 1.1rem; color: #555; line-height: 1.8; }

          /* Quote Section */
          .quote-section { background: #f8f9fa; padding: 60px 0; margin: 60px 0; }
          .quote-container { max-width: 700px; margin: 0 auto; text-align: center; }
          .main-quote { font-size: 1.5rem; font-style: italic; color: #1B2F6F; line-height: 1.6; border: none; margin-bottom: 20px; }
          .quote-author { font-size: 1rem; color: #DC343C; font-weight: 600; }

          /* Two Columns */
          .two-columns { margin: 60px 0; }
          .columns-container { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; max-width: 900px; margin: 0 auto; }
          .column-title { font-size: 1.4rem; color: #1B2F6F; margin-bottom: 20px; }
          .column-text { color: #555; line-height: 1.7; }

          /* Footer */
          .footer { background: #1B2F6F; color: white; padding: 40px 0; text-align: center; }
          .footer-logo { height: 60px; margin-bottom: 15px; }

          @media (max-width: 768px) {
              .columns-container { grid-template-columns: 1fr; gap: 40px; }
              .hero-title-center { font-size: 2.5rem; }
          }
        </style>
        <footer class="footer-bottom-new">
    <div class="footer-container">
        <div class="footer-left">
            <div class="footer-logo">
                <img src="fotos/logo.png" alt="Scuola Italiana di Montevideo" style="height: 60px;">
            </div>
            <div class="footer-subtitle">
                <p>AMC Scuola Italiana di Montevideo</p>
            </div>
        </div>
        
        <div class="footer-center">
            <div class="footer-section">
                <h4>Contacto</h4>
                <p>Av. Brasil 3149, Montevideo</p>
                <p>(+598) 2621 4822 / 2622 1422</p>
                <p>info@scuolaitaliana.edu.uy</p>
            </div>
        </div>
        
        <div class="footer-right">
            <div class="footer-section">
                <h4>Enlaces útiles</h4>
                <p>Política de privacidad</p>
                <p>Requisitos técnicos</p>
                <p>Accesibilidad</p>
            </div>
        </div>
    </div>
    
    <div class="footer-info-bar">
        <p>Desarrollado por el equipo SGE | Proyecto de apoyo 2002 - EE Informática</p>
    </div>
</footer>

<style>
.footer-bottom-new {
    background: #1B4F72;
    color: white;
    padding: 0;
    margin: 0;
}

.footer-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 30px 5%;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-left {
    flex: 1;
    display: flex;
    align-items: center;
    gap: 20px;
}

.footer-logo img {
    height: 60px;
    width: auto;
}

.footer-subtitle p {
    margin: 0;
    font-size: 14px;
    color: #E8E8E8;
}

.footer-center,
.footer-right {
    flex: 1;
    padding: 0 20px;
}

.footer-section h4 {
    color: white;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
    border-bottom: 1px solid rgba(255,255,255,0.2);
    padding-bottom: 5px;
}

.footer-section p {
    margin: 8px 0;
    font-size: 14px;
    color: #E8E8E8;
    line-height: 1.4;
}

.footer-info-bar {
    background: #154360;
    text-align: center;
    padding: 15px 5%;
    border-top: 1px solid rgba(255,255,255,0.1);
}

.footer-info-bar p {
    margin: 0;
    font-size: 12px;
    color: #BDC3C7;
}

/* Responsive */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        gap: 30px;
        text-align: center;
    }
    
    .footer-left {
        flex-direction: column;
        gap: 10px;
    }
    
    .footer-center,
    .footer-right {
        padding: 0;
        width: 100%;
    }
    
    .footer-section {
        margin-bottom: 20px;
    }
}
/* MEJORAS PARA VIVIR LA SCUOLA */
.quality-icon {
    transition: all 0.3s ease;
    cursor: pointer;
}

.quality-icon:hover {
    background: #049B4C !important;
    transform: scale(1.1);
}

.quality-icon i {
    font-size: 40px;
    color: white;
}

.quality-item a {
    text-decoration: none;
}



/* MEJORAR LA SEPARACIÓN Y ANIMACIÓN DE NOTICIAS */
.projects-section {
    background: #1B2F6F;
    padding: 200px 5% 150px 5%;
    text-align: center;
    margin-bottom: 120px;
}

.news-section {
    padding: 140px 5% 100px 5%;
    background: #0A2452;
    position: relative;
    overflow: hidden;
}

.news-section::after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 0%;
    height: 870px;
    background: #004ECC;
    transition: width 2.5s cubic-bezier(1, 0.46, 0.45, 0.94);
    

    
    z-index: 1;
}

.news-section.animate::after {
    width: 50%;
}

.news-header, 
.news-grid {
    position: relative;
    z-index: 2;
}


</style>

<script src="cms-admin.js"></script>
</body>
</html>