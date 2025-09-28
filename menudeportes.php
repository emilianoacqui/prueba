<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scuola Italiana - Deportes</title>

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    
    body {
  font-family: 'Arial', sans-serif;
  background: #f5f5f5;
  overflow-x: hidden;
}
* {
  box-sizing: border-box;
}

html, body {
  overflow-x: hidden !important;
  width: 100% !important;
  max-width: 100vw !important;
  font-family: 'Arial', sans-serif;
  background: #f5f5f5;
}

/* Contenedor principal del editor - GLOBAL */
.template-container {
  position: relative;
  background: white;
  overflow: hidden !important; /* CAMBIO CRÍTICO */
  padding: 20px;
  max-width: 100% !important;
  width: 100% !important;
  box-sizing: border-box;
}

/* Frame de la plantilla - GLOBAL */
.template-frame {
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden !important; /* CAMBIO CRÍTICO */
  background: white;
  position: relative;
  width: 100% !important;
  max-width: 100% !important;
  height: 600px;
  margin-bottom: 20px;
  box-sizing: border-box;
}

/* Elementos editables - GLOBAL */
.editable-text,
.editable-image {
  max-width: 100% !important;
  word-wrap: break-word;
  overflow-wrap: break-word;
  box-sizing: border-box;
}

/* Contenedores de plantillas - GLOBAL */
.container,
.exchange-page,
.photos-page {
  max-width: 100% !important;
  width: 100% !important;
  margin: 0 auto;
  padding: 0 20px;
  box-sizing: border-box;
  overflow: hidden !important;
}

/* Hero sections - GLOBAL */
.hero {
  max-height: 500px;
  width: 100% !important;
  max-width: 100% !important;
  overflow: hidden !important;
}

/* Imágenes responsivas - GLOBAL */
img,
.editable-image,
.bg-main,
.banner,
.main-photo,
.gallery-img {
  max-width: 100% !important;
  height: auto;
  object-fit: cover;
  box-sizing: border-box;
}

/* Grids responsivos - GLOBAL */
.template-grid,
.features-grid,
.gallery-grid {
  width: 100% !important;
  max-width: 100% !important;
  overflow: hidden !important;
}

    .main-container {
      width: 100%;
      min-height: 100vh;
      position: relative;
      background: white;
    }

    .bg-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(10, 36, 82, 0.75);
      z-index: 2;
    }

    .header {
      position: relative;
      z-index: 10;
      width: 100%;
      height: 200px;
      background: rgba(10, 36, 82, 0.5);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 40px;
    }

    .logo {
      width: 294px;
      height: auto;
    }

    .menu-icon {
      width: 72px;
      height: 75px;
    }

    .content {
      position: relative;
      z-index: 5;
      padding: 60px 20px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .sport-card {
      display: block;
      width: 800px;
      height: 150px;
      position: relative;
      border-radius: 40px;
      margin-bottom: 50px;
      text-decoration: none;
      overflow: hidden;
      transition: transform 0.2s;
    }

    .sport-card:hover { transform: translateY(-5px); }

    .sport-card.left { margin-left: 0; margin-right: auto; }
    .sport-card.right { margin-left: auto; margin-right: 0; }

    .sport-bg {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 40px;
    }

    .sport-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0.50;
      border-radius: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .sport-title {
      color: black;
      font-size: 64px;
      font-weight: 400;
      text-align: center;
      padding: 0 20px;
    }

    /* Colores específicos */
    .futbol { height: 148px; }
    .futbol .sport-overlay { background: #049B4C; }
    
    .handball .sport-overlay { background: white; }
    .hockey .sport-overlay { background: #DC343C; }
    .voley .sport-overlay { background: #049B4C; }
    .gimnasia .sport-overlay { background: white; }
    .atletismo .sport-overlay { background: #DC343C; }

    .footer {
      width: 100%;
      height: 391px;
      background-image: url('https://placehold.co/1379x391');
      background-size: cover;
      background-position: center;
      position: relative;
      z-index: 10;
    }

    /* Responsive */
    @media (max-width: 1200px) {
      .content { padding: 50px 40px; }
      
      .sport-card {
        width: 90%;
        margin-left: auto !important;
        margin-right: auto !important;
      }
    }

    @media (max-width: 768px) {
      .header {
        height: 120px;
        padding: 0 20px;
      }
      
      .logo { width: 200px; }
      .menu-icon { width: 50px; height: 55px; }
      
      .content { padding: 40px 15px; }
      
      .sport-card {
        width: 100%;
        height: 120px;
        margin-bottom: 30px;
        border-radius: 20px;
      }
      
      .sport-bg { border-radius: 20px; }
      .sport-overlay { border-radius: 20px; }
      
      .sport-title { font-size: 40px; }
      
      .footer { height: 200px; }
    }

    @media (max-width: 480px) {
      .header {
        height: 100px;
        padding: 0 15px;
      }
      
      .logo { width: 150px; }
      .menu-icon { width: 40px; height: 45px; }
      
      .content { padding: 30px 10px; }
      
      .sport-card {
        height: 100px;
        margin-bottom: 20px;
        border-radius: 15px;
      }
      
      .sport-bg { border-radius: 15px; }
      .sport-overlay { border-radius: 15px; }
      
      .sport-title { font-size: 28px; }
      
      .footer { height: 150px; }
    }
  </style>
</head>

<script src="cms-admin.js"></script>
<body>
  <div class="main-container">
    <img class="bg-image" src="https://placehold.co/1410x2262" />
    <div class="overlay"></div>
    
    <div class="header">
      <img class="logo" src="https://placehold.co/294x104" />
      <img class="menu-icon" src="https://placehold.co/72x75" />
    </div>

    <div class="content">
      <a href="IntercambioArgentina.php" class="sport-card futbol left">
        <img class="sport-bg" src="https://placehold.co/800x148" />
        <div class="sport-overlay">
          <div class="sport-title">Futbol</div>
        </div>
      </a>

      <a href="handball.php" class="sport-card handball right">
        <img class="sport-bg" src="https://placehold.co/800x150" />
        <div class="sport-overlay">
          <div class="sport-title">Handball</div>
        </div>
      </a>

      <a href="hockey.php" class="sport-card hockey left">
        <img class="sport-bg" src="https://placehold.co/800x150" />
        <div class="sport-overlay">
          <div class="sport-title">Hockey</div>
        </div>
      </a>

      <a href="voley.php" class="sport-card voley right">
        <img class="sport-bg" src="https://placehold.co/800x150" />
        <div class="sport-overlay">
          <div class="sport-title">Voley</div>
        </div>
      </a>

      <a href="gimnasia.php" class="sport-card gimnasia left">
        <img class="sport-bg" src="https://placehold.co/800x150" />
        <div class="sport-overlay">
          <div class="sport-title">Gimnasia Artistica</div>
        </div>
      </a>

      <a href="atletismo.php" class="sport-card atletismo right">
        <img class="sport-bg" src="https://placehold.co/800x150" />
        <div class="sport-overlay">
          <div class="sport-title">Atletismo</div>
        </div>
      </a>
    </div>

    <img class="footer" src="https://placehold.co/1379x391" />
  </div>
</body>
</html>