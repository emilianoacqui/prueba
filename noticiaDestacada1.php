<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Scuola Italiana di Montevideo</title>
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
          <section class="hero-gallery" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('fotosPrincipales/PrimerDia.jpg.png'); background-size: cover; background-position: center;">
              <div class="hero-overlay"></div>
              <div class="hero-content-gallery">
                  <h1 class="hero-title-gallery">Scuola Italiana di Montevideo</h1>
                  <p class="hero-subtitle-gallery">Primer día de clases - Momentos especiales de nuestra comunidad educativa</p>
              </div>
          </section>

          <!-- Student Cards Section -->
          <section class="student-cards-section">
              <div class="container">
                  <div class="section-header">
                      <h2 class="section-title">Nuestros Estudiantes en Acción</h2>
                      <p class="section-description">Una mirada a los momentos más especiales de nuestros estudiantes durante el primer día de clases, mostrando la alegría y compañerismo que caracteriza a nuestra institución.</p>
                  </div>
                  
                  <div class="student-grid">
                      <div class="student-card featured">
                          <div class="card-image">
                              <img src="fotosPrincipales/PrimerDia.jpg.png" alt="Estudiantes principales">
                              <div class="card-badge">Destacado</div>
                          </div>
                          <div class="card-content">
                              <h3>Compañerismo y Alegría</h3>
                              <p>Nuestros estudiantes demuestran los valores que nos caracterizan: amistad, respeto y alegría de aprender juntos.</p>
                          </div>
                      </div>
                      
                      <div class="student-card">
                          <div class="card-image">
                              <img src="fotosPrincipales/PrimerDia2.jpg.png" alt="Estudiantes en el patio">
                          </div>
                          <div class="card-content">
                              <h3>Recreos Activos</h3>
                              <p>Momentos de esparcimiento y socialización en nuestros espacios verdes.</p>
                          </div>
                      </div>
                      
                      <div class="student-card">
                          <div class="card-image">
                              <img src="fotosPrincipales/PrimerDia3.jpg.png" alt="Actividades grupales">
                          </div>
                          <div class="card-content">
                              <h3>Trabajo en Equipo</h3>
                              <p>Fomentamos la colaboración y el aprendizaje conjunto entre nuestros estudiantes.</p>
                          </div>
                      </div>
                      
                      <div class="student-card">
                          <div class="card-image">
                              <img src="fotosPrincipales/PrimerDia4.jpg.png" alt="Actividades deportivas">
                          </div>
                          <div class="card-content">
                              <h3>Deporte y Salud</h3>
                              <p>La actividad física es parte fundamental de nuestra propuesta educativa integral.</p>
                          </div>
                      </div>
                      
                      <div class="student-card">
                          <div class="card-image">
                              <img src="fotosPrincipales/PrimerDia5.jpg.png" alt="Momentos especiales">
                          </div>
                          <div class="card-content">
                              <h3>Tradiciones Escolares</h3>
                              <p>Celebramos nuestras tradiciones que fortalecen la identidad institucional.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <!-- Gallery Showcase -->
          <section class="gallery-showcase">
              <div class="container">
                  <div class="showcase-content">
                      <div class="showcase-text">
                          <h2>Una Educación Integral</h2>
                          <p>En la Scuola Italiana di Montevideo creemos en una educación que va más allá del aula. Nuestros estudiantes desarrollan habilidades sociales, emocionales y académicas en un ambiente de respeto mutuo y celebración de la diversidad.</p>
                          <div class="stats-grid">
                              <div class="stat-item">
                                  <span class="stat-number">100+</span>
                                  <span class="stat-label">Años de Historia</span>
                              </div>
                              <div class="stat-item">
                                  <span class="stat-number">500+</span>
                                  <span class="stat-label">Estudiantes</span>
                              </div>
                              <div class="stat-item">
                                  <span class="stat-number">50+</span>
                                  <span class="stat-label">Docentes</span>
                              </div>
                          </div>
                      </div>
                      <div class="showcase-image">
                          <img src="fotosPrincipales/PrimerDia.jpg.png" alt="Estudiantes de la Scuola">
                      </div>
                  </div>
              </div>
          </section>

        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
         body { font-family: 'Merriweather Sans', sans-serif; line-height: 1.6; color: #333; }
          .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
          
          .navbar { position: relative; background: rgba(10, 36, 82, 0.5); z-index: 1000; height: 80px; }
          .nav-container { display: flex; justify-content: space-between; align-items: center; padding: 15px 5%; max-width: 1200px; margin: 0 auto; height: 100%; }
          .nav-logo img { height: 50px; width: auto; }
          .nav-menu-button { display: flex; flex-direction: column; cursor: pointer; padding: 8px; }
          .nav-menu-button span { width: 25px; height: 3px; background: white; margin: 3px 0; border-radius: 2px; transition: all 0.3s ease; }
          .nav-menu-button:hover span { background: #049B4C; }

          /* Hero Section */
          .hero-gallery { 
              position: relative;
              top: -80px;
              height: calc(60vh + 80px); 
              display: flex; 
              align-items: center; 
              justify-content: center; 
              margin-bottom: -80px;
          }

          .hero-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(27, 47, 111, 0.4); }
          .hero-content-gallery { text-align: center; color: white; z-index: 2; position: relative; max-width: 800px; padding: 0 20px; }
          .hero-title-gallery { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); }
          .hero-subtitle-gallery { font-size: 1.3rem; opacity: 0.95; font-weight: 300; }

          /* Student Cards Section */
          .student-cards-section { padding: 100px 0 80px; background: #f8f9fa; }
          
          .section-header { text-align: center; margin-bottom: 60px; }
          .section-badge { 
              display: inline-block; 
              background: #049B4C; 
              color: white; 
              padding: 8px 20px; 
              border-radius: 25px; 
              font-size: 0.9rem; 
              font-weight: 600; 
              margin-bottom: 15px;
          }
          .section-title { 
              font-size: 2.5rem; 
              color: #1B2F6F; 
              margin-bottom: 20px; 
              font-weight: 700; 
          }
          .section-description { 
              font-size: 1.1rem; 
              color: #666; 
              max-width: 700px; 
              margin: 0 auto; 
              line-height: 1.8; 
          }

          /* Student Grid */
          .student-grid { 
              display: grid; 
              grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); 
              gap: 25px; 
              margin-bottom: 50px; 
          }
          
          .student-card { 
              background: white; 
              border-radius: 20px; 
              overflow: hidden; 
              box-shadow: 0 10px 30px rgba(0,0,0,0.1); 
              transition: all 0.4s ease; 
              cursor: pointer;
          }
          
          .student-card:hover { 
              transform: translateY(-10px); 
              box-shadow: 0 20px 40px rgba(0,0,0,0.15); 
          }
          
          .student-card.featured { 
              grid-column: span 2; 
              display: flex;
              flex-direction: row;
          }
          
          .card-image { 
              position: relative; 
              overflow: hidden;
              height: 250px;
          }
          
          .student-card.featured .card-image { 
              flex: 1;
              height: auto;
          }
          
          .card-image img { 
              width: 100%; 
              height: 100%; 
              object-fit: cover; 
              transition: transform 0.4s ease; 
          }
          
          .student-card:hover .card-image img { 
              transform: scale(1.1); 
          }
          
          .card-badge { 
              position: absolute; 
              top: 15px; 
              right: 15px; 
              background: #049B4C; 
              color: white; 
              padding: 5px 15px; 
              border-radius: 15px; 
              font-size: 0.8rem; 
              font-weight: 600; 
          }
          
          .card-content { 
              padding: 25px; 
          }
          
          .student-card.featured .card-content { 
              flex: 1;
              display: flex;
              flex-direction: column;
              justify-content: center;
          }
          
          .card-content h3 { 
              font-size: 1.4rem; 
              color: #1B2F6F; 
              margin-bottom: 12px; 
              font-weight: 600; 
          }
          
          .card-content p { 
              color: #666; 
              line-height: 1.6; 
              font-size: 1rem; 
          }

          /* Gallery Showcase */
          .gallery-showcase { 
              padding: 100px 0; 
              background: linear-gradient(135deg, #1B2F6F 0%, #1B2F6F 100%); 
              color: white; 
          }
          
          .showcase-content { 
              display: grid; 
              grid-template-columns: 1fr 1fr; 
              gap: 60px; 
              align-items: center; 
          }
          
          .showcase-text h2 { 
              font-size: 2.5rem; 
              margin-bottom: 25px; 
              font-weight: 700; 
          }
          
          .showcase-text p { 
              font-size: 1.2rem; 
              line-height: 1.8; 
              margin-bottom: 40px; 
              opacity: 0.95; 
          }
          
          .stats-grid { 
              display: grid; 
              grid-template-columns: repeat(3, 1fr); 
              gap: 30px; 
          }
          
          .stat-item { 
              text-align: center; 
          }
          
          .stat-number { 
              display: block; 
              font-size: 2.5rem; 
              font-weight: 700; 
              color: #FFD700; 
          }
          
          .stat-label { 
              font-size: 0.9rem; 
              opacity: 0.9; 
          }
          
          .showcase-image { 
              position: relative; 
          }
          
          .showcase-image img { 
              width: 100%; 
              border-radius: 20px; 
              box-shadow: 0 20px 40px rgba(0,0,0,0.3); 
          }

          /* Responsive Design */
          @media (max-width: 768px) {
              .hero-title-gallery { font-size: 2.5rem; }
              .hero-subtitle-gallery { font-size: 1.1rem; }
              
              .student-grid { grid-template-columns: 1fr; }
              .student-card.featured { 
                  flex-direction: column; 
                  grid-column: span 1; 
              }
              
              .showcase-content { 
                  grid-template-columns: 1fr; 
                  gap: 40px; 
              }
              
              .stats-grid { grid-template-columns: 1fr; gap: 20px; }
              
              .section-title { font-size: 2rem; }
              .showcase-text h2 { font-size: 2rem; }
          }
        </style>

        <footer class="footer-bottom-new">
    <div class="footer-container">
        <div class="footer-left">
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
</style>
<script src="cms-admin.js"></script>
</body>
</html>