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
          <section class="hero-gallery editable-image" style="background-image: url('fotosPrincipales/heliopolis3.jpg'); background-size: cover; background-position: center;">
              <div class="hero-overlay"></div>
              <div class="hero-content-gallery">
                  <h1 class="hero-title-gallery editable-text">Noticias Scuola Italiana</h1>
                  <p class="hero-subtitle-gallery editable-text">Mantente informado sobre las últimas novedades de nuestra institución</p>
              </div>
          </section>

          <!-- Main Content -->
          <main class="main-gallery">
              <div class="container">
                  <!-- Gallery Description -->
                  <section class="gallery-intro">
                      <h2 class="gallery-title editable-text">Últimas Noticias</h2>
                      <p class="gallery-description editable-text">Descubre las actividades más recientes, eventos destacados y logros de nuestra comunidad educativa. Cada noticia refleja el compromiso y la excelencia que caracteriza a la Scuola Italiana di Montevideo.</p>
                  </section>

                  <!-- News Carousel -->
                  <section class="news-carousel">
                      <div class="carousel-container">
                          <div class="carousel-track" id="carouselTrack">
                              <div class="carousel-slide">
                                  <div class="news-card">
                                      <div class="news-image">
                                          <img class="editable-image" src="fotosPrincipales/arcimboldo2.jpg" alt="Noticia 1">
                                      </div>
                                      <div class="news-content">
                                          <span class="news-date">15 Septiembre 2025</span>
                                          <h3 class="news-title editable-text">Ceremonia de Graduación 2025</h3>
                                          <p class="news-excerpt editable-text">Celebramos con orgullo a nuestros graduados de bachillerato en una emotiva ceremonia que marcó el fin de su etapa escolar.</p>
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="carousel-slide">
                                  <div class="news-card">
                                      <div class="news-image">
                                          <img class="editable-image" src="fotosPrincipales/arcimboldo3.jpg" alt="Noticia 2">
                                      </div>
                                      <div class="news-content">
                                          <span class="news-date">10 Septiembre 2025</span>
                                          <h3 class="news-title editable-text">Intercambio Cultural con Italia</h3>
                                          <p class="news-excerpt editable-text">Estudiantes de secundaria participaron en un enriquecedor programa de intercambio con colegios de Roma y Milán.</p>
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="carousel-slide">
                                  <div class="news-card">
                                      <div class="news-image">
                                          <img class="editable-image" src="fotosPrincipales/arcimboldo4.jpg" alt="Noticia 3">
                                      </div>
                                      <div class="news-content">
                                          <span class="news-date">5 Septiembre 2025</span>
                                          <h3 class="news-title editable-text">Festival de Ciencias 2025</h3>
                                          <p class="news-excerpt editable-text">Los proyectos científicos de nuestros alumnos destacaron por su innovación y creatividad en el festival anual.</p>
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="carousel-slide">
                                  <div class="news-card">
                                      <div class="news-image">
                                          <img class="editable-image" src="fotosPrincipales/arcimboldo5.jpg" alt="Noticia 4">
                                      </div>
                                      <div class="news-content">
                                          <span class="news-date">1 Septiembre 2025</span>
                                          <h3 class="news-title editable-text">Torneo Deportivo Interescolar</h3>
                                          <p class="news-excerpt editable-text">Nuestros equipos de fútbol y básquet obtuvieron destacadas posiciones en el campeonato regional.</p>
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="carousel-slide">
                                  <div class="news-card">
                                      <div class="news-image">
                                          <img class="editable-image" src="fotosPrincipales/arcimboldo.jpg" alt="Noticia 5">
                                      </div>
                                      <div class="news-content">
                                          <span class="news-date">25 Agosto 2025</span>
                                          <h3 class="news-title editable-text">Concurso de Arte y Literatura</h3>
                                          <p class="news-excerpt editable-text">Premiamos la creatividad de nuestros estudiantes en el concurso anual de expresión artística y literaria.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                          <button class="carousel-btn prev-btn" onclick="moveSlide(-1)">‹</button>
                          <button class="carousel-btn next-btn" onclick="moveSlide(1)">›</button>
                      </div>
                      
                      <div class="carousel-dots">
                          <span class="dot active" onclick="currentSlide(1)"></span>
                          <span class="dot" onclick="currentSlide(2)"></span>
                          <span class="dot" onclick="currentSlide(3)"></span>
                          <span class="dot" onclick="currentSlide(4)"></span>
                          <span class="dot" onclick="currentSlide(5)"></span>
                      </div>
                  </section>

                  <!-- Gallery Footer Text -->
                  <section class="gallery-footer-text">
                      <div class="footer-text-container">
                          <h2 class="footer-text-title editable-text">Mantente conectado</h2>
                          <p class="footer-text-content editable-text">Sigue nuestras redes sociales y suscríbete a nuestro boletín para no perderte ninguna novedad de la Scuola Italiana. Juntos construimos una comunidad educativa sólida y comprometida.</p>
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

          /* News Carousel */
          .news-carousel { margin-bottom: 50px; }
          .carousel-container { position: relative; overflow: hidden; border-radius: 15px; }
          .carousel-track { display: flex; transition: transform 0.5s ease-in-out; }
          .carousel-slide { min-width: 100%; }
          
          .news-card { background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); overflow: hidden; margin: 0 20px; }
          .news-image { height: 300px; overflow: hidden; }
          .news-image img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease; }
          .news-card:hover .news-image img { transform: scale(1.05); }
          
          .news-content { padding: 30px; }
          .news-date { display: inline-block; background: #049B4C; color: white; padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; margin-bottom: 15px; }
          .news-title { font-size: 1.5rem; color: #1B2F6F; margin-bottom: 15px; font-weight: 600; }
          .news-excerpt { color: #666; line-height: 1.6; }
          
          .carousel-btn { position: absolute; top: 50%; transform: translateY(-50%); background: rgba(27, 47, 111, 0.8); color: white; border: none; width: 50px; height: 50px; border-radius: 50%; font-size: 24px; cursor: pointer; transition: all 0.3s ease; z-index: 10; }
          .carousel-btn:hover { background: #1B2F6F; transform: translateY(-50%) scale(1.1); }
          .prev-btn { left: -25px; }
          .next-btn { right: -25px; }
          
          .carousel-dots { display: flex; justify-content: center; gap: 10px; margin-top: 30px; }
          .dot { width: 12px; height: 12px; border-radius: 50%; background: #ddd; cursor: pointer; transition: background 0.3s ease; }
          .dot.active, .dot:hover { background: #1B2F6F; }

          /* Gallery Footer Text */
          .gallery-footer-text { background: #f8f9fa; padding: 40px; border-radius: 15px; }
          .footer-text-container { text-align: center; max-width: 800px; margin: 0 auto; }
          .footer-text-title { font-size: 1.6rem; color: #1B2F6F; margin-bottom: 15px; }
          .footer-text-content { color: #555; line-height: 1.7; }

          /* Footer */
          .footer { background: #1B2F6F; color: white; padding: 40px 0; text-align: center; }
          .footer-logo { height: 60px; margin-bottom: 15px; }

          @media (max-width: 768px) {
              .carousel-btn { display: none; }
              .news-card { margin: 0 10px; }
              .news-title { font-size: 1.3rem; }
              .news-content { padding: 20px; }
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

<script>
let slideIndex = 0;
const slides = document.querySelectorAll('.carousel-slide');
const dots = document.querySelectorAll('.dot');
const track = document.getElementById('carouselTrack');

function moveSlide(direction) {
    slideIndex += direction;
    
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }
    
    updateCarousel();
}

function currentSlide(index) {
    slideIndex = index - 1;
    updateCarousel();
}

function updateCarousel() {
    const translateX = -slideIndex * 100;
    track.style.transform = `translateX(${translateX}%)`;
    
    // Update dots
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === slideIndex);
    });
}

// Auto-slide functionality
setInterval(() => {
    moveSlide(1);
}, 5000);

// Initialize
updateCarousel();
</script>

<script src="cms-admin.js"></script>
</body>
</html>