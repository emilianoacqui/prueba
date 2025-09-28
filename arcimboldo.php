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
                      <img src="fotosPrincipales/logo2.png" alt="Scuola Italiana di Montevideo" style="height: 120px;">
                  </div>
                  <div class="nav-menu-button" onclick="window.location.href='menuScuola.php'">
                      <span></span>
                      <span></span>
                      <span></span>
                  </div>
              </div>
          </nav>

          <!-- Hero Section -->
          <section class="hero-gallery editable-image" style="background-image: url('fotosPrincipales/arcimboldo.jpg'); background-size: cover; background-position: center;">
              <div class="hero-overlay"></div>
              <div class="hero-content-gallery">
                  <h1 class="hero-title-gallery editable-text">Arcimboldo</h1>
                  <p class="hero-subtitle-gallery editable-text">Una colección de imágenes organizadas visualmente</p>
              </div>
          </section>

          <!-- Main Content -->
          <main class="main-gallery">
              <div class="container">
                  <!-- Gallery Description -->
                  <section class="gallery-intro">
                      <h2 class="gallery-title editable-text">Nuestro evento de gradudados</h2>
                      <p class="gallery-description editable-text">Se trata de una propuesta multidisciplinaria dirigida a estudiantes de 6o año de Ciencias Biológicas y Social-Económico, integrando contenidos de italiano,
matemática, literatura, biología y química.
Partiendo de la obra del artista renacentista Giuseppe Arcimboldo, mediante la metodología CLIL (Content and Language Integrated Learning) los alumnos
trabajan contenidos curriculares con una miranda transversal sobre la nutrición, salud cardiovascular y hábitos alimentarios.</p>
                  </section>

                  <!-- Photo Grid -->
                  <section class="photo-grid">
                      <div class="grid-container">
                          <div class="photo-item large">
                              <img class="editable-image" src="fotosPrincipales/arcimboldo2.jpg" alt="Imagen principal">
                              <div class="photo-overlay">
                                  <h3 class="photo-title editable-text">Imagen destacada</h3>
                                  <p class="photo-caption editable-text">Descripción de la imagen principal</p>
                              </div>
                          </div>
                          
                          <div class="photo-item">
                              <img class="editable-image" src="fotosPrincipales/arcimboldo3.jpg" alt="Imagen 1">
                              <div class="photo-overlay">
                                  <h3 class="photo-title editable-text">Primera imagen</h3>
                              </div>
                          </div>
                          
                          <div class="photo-item">
                              <img class="editable-image" src="fotosPrincipales/arcimboldo4.jpg" alt="Imagen 2">
                              <div class="photo-overlay">
                                  <h3 class="photo-title editable-text">Segunda imagen</h3>
                              </div>
                          </div>
                          
                          <div class="photo-item">
                              <img class="editable-image" src="fotosPrincipales/arcimboldo5.jpg" alt="Imagen 3">
                              <div class="photo-overlay">
                                  <h3 class="photo-title editable-text">Tercera imagen</h3>
                              </div>
                          </div>
                          
                          <div class="photo-item">
                              <img class="editable-image" src="fotosPrincipales/arcimboldo.jpg" alt="Imagen 4">
                              <div class="photo-overlay">
                                  <h3 class="photo-title editable-text">Cuarta imagen</h3>
                              </div>
                          </div>
                          
                          <div class="photo-item">
                              <img class="editable-image" src="fotosPrincipales/arcimboldo2.jpg" alt="Imagen 5">
                              <div class="photo-overlay">
                                  <h3 class="photo-title editable-text">Quinta imagen</h3>
                              </div>
                          </div>
                      </div>
                  </section>

                  <!-- Gallery Footer Text -->
                  <section class="gallery-footer-text">
                      <div class="footer-text-container">
                          <h2 class="footer-text-title editable-text">Información adicional</h2>
                          <p class="footer-text-content editable-text">Espacio para agregar información adicional sobre las imágenes, créditos de fotografía, o cualquier contexto relevante que complemente la galería visual.</p>
                      </div>
                  </section>
              </div>
          </main>

        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
          body { font-family: 'Merriweather Sans', sans-serif; line-height: 1.6; color: #333; }
          .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
          
          .navbar { position: relative; background: rgba(10, 36, 82, 0.5); z-index: 1000; height: 80px; }
          .nav-container { display: flex; justify-content: space-between; align-items: center; padding: 15px 5%; max-width: 1200px; margin: 0 auto;  height: 100%; }
          .nav-logo img { height: 50px; width: auto; }
          .nav-menu-button { display: flex; flex-direction: column; cursor: pointer; padding: 8px; }
          .nav-menu-button span { width: 25px; height: 3px; background: white; margin: 3px 0; border-radius: 2px; }

          /* Navigation */
          .hero-gallery { 
    position: relative;
    top: -80px;
    height: calc(50vh + 80px); 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    margin-bottom: -80px;
}

          .hero-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(4, 155, 76, 0.5); }
          .hero-content-gallery { text-align: center; color: white; z-index: 2; position: relative; }
          .hero-title-gallery { font-size: 2.8rem; font-weight: 700; margin-bottom: 15px; }
          .hero-subtitle-gallery { font-size: 1.1rem; opacity: 0.95; }

          /* Main Gallery */
          .main-gallery { padding: 60px 0; }
          
          .gallery-intro { text-align: center; margin-bottom: 50px; }
          .gallery-title { font-size: 2rem; color: #1B2F6F; margin-bottom: 20px; }
          .gallery-description { font-size: 1.1rem; color: #555; max-width: 700px; margin: 0 auto; }

          /* Photo Grid */
          .grid-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 50px; }
          .photo-item { position: relative; border-radius: 10px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease; }
          .photo-item:hover { transform: scale(1.05); }
          .photo-item.large { grid-column: span 2; grid-row: span 2; }
          .photo-item img { width: 100%; height: 250px; object-fit: cover; }
          .photo-item.large img { height: 520px; }
          
          .photo-overlay { position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 20px; transform: translateY(100%); transition: transform 0.3s ease; }
          .photo-item:hover .photo-overlay { transform: translateY(0); }
          .photo-title { font-size: 1.1rem; font-weight: 600; margin-bottom: 5px; }
          .photo-caption { font-size: 0.9rem; opacity: 0.9; }

          /* Gallery Footer Text */
          .gallery-footer-text { background: #f8f9fa; padding: 40px; border-radius: 15px; }
          .footer-text-container { text-align: center; max-width: 800px; margin: 0 auto; }
          .footer-text-title { font-size: 1.6rem; color: #1B2F6F; margin-bottom: 15px; }
          .footer-text-content { color: #555; line-height: 1.7; }

          /* Footer */
          .footer { background: #1B2F6F; color: white; padding: 40px 0; text-align: center; }
          .footer-logo { height: 60px; margin-bottom: 15px; }

          @media (max-width: 768px) {
              .photo-item.large { grid-column: span 1; grid-row: span 1; }
              .photo-item.large img { height: 250px; }
              .grid-container { grid-template-columns: 1fr; }
          }
    
        </style>


        <footer class="footer-bottom-new">
    <div class="footer-container">
        <div class="footer-Aleft">
            <div class="footer-logo">
                <img src="fotosPrincipales/logotipo.png" alt="Scuola Italiana di Montevideo" style="height: 60px;">
            </div>
            <div class="footer-subtitle">
                <p>Scuola Italiana di Montevideo</p>
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