<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scuola Italiana di Montevideo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Merriweather Sans', Arial, sans-serif;
            overflow-x: hidden;
            background: white;
        }

        /* CMS Classes */
        body.loading-cms-content #original-content {
            display: none !important;
        }

        body.loading-cms-content #cms-root {
            display: block !important;
        }

        #cms-root {
            margin: 0;
            padding: 0;
            position: relative;
            top: 0;
            display: none;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 80px;
            background: rgba(10, 36, 82, 0.5);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 5%;
            max-width: 1200px;
            margin: 0 auto;
            height: 100%;
        }

        .nav-logo {
            position: relative;
            height: 100%;
            overflow: visible;
        }

        .nav-logo img {
            height: 120px;
            width: auto;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .nav-menu-button {
            display: flex;
            flex-direction: column;
            cursor: pointer;
            padding: 8px;
            transition: all 0.3s ease;
        }

        .nav-menu-button span {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 3px 0;
            transition: 0.3s;
            border-radius: 2px;
        }

        .nav-menu-button:hover span {
            background-color: #F39C12;
        }

        /* Header */
        .header {
            position: relative;
            height: 100vh;
            background: url('fotosPrincipales/portada1.jpg') center/cover;
            display: flex;
            align-items: center;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(rgba(10, 36, 82, 0.3), transparent);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding-left: 5%;
            max-width: 600px;
        }

        .hero-title {
            color: white;
            font-size: 48px;
            font-weight: 400;
            line-height: 1.2;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 1);
            margin-bottom: 30px;
        }

        .admissions-btn {
            background: #DC343C;
            border-radius: 20px;
            padding: 20px 40px;
            color: white;
            font-size: 36px;
            text-decoration: none;
            display: inline-block;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
        }

        .admissions-btn:hover {
            transform: translateY(-2px);
        }

        /* Education Levels */
        .education-levels {
            display: flex;
            height: 500px;
        }

        .level-card {
            flex: 1;
            position: relative;
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .level-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0.5;
        }

        .inicial {
            background-image: url('fotosPrincipales/inicial1.jpg');
        }
        .inicial::before { background: #049B4C; }

        .primaria {
            background-image: url('fotosPrincipales/primaria1.jpg');
        }
        .primaria::before { background: #D9D9D9; }

        .secundaria {
            background-image: url('fotosPrincipales/secundaria1.jpg');
        }
        .secundaria::before { background: #DC343C; }

        .level-content {
            position: relative;
            z-index: 2;
        }

        .level-title {
            font-size: 48px;
            font-weight: 400;
            margin-bottom: 10px;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 1);
        }

        .level-age {
            font-size: 20px;
            margin-bottom: 30px;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 1);
        }

        .level-btn {
            padding: 15px 30px;
            border-radius: 10px;
            color: white;
            font-size: 36px;
            text-decoration: none;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 1);
            transition: transform 0.3s ease;
        }

        .level-btn:hover {
            transform: scale(1.05);
        }

        .btn-green { background: #049B4C; }
        .btn-gray { background: #D9D9D9; }
        .btn-red { background: #DC343C; }

        /* Color Stripes */
        .color-stripes {
            height: 20px;
            display: flex;
            flex-direction: column;
        }

        .stripe {
            height: 5px;
        }

        .stripe-blue { background: #0A2452; }
        .stripe-green { background: #049B4C; }
        .stripe-white { background: white; }
        .stripe-red { background: #DC343C; }

        /* About Section */
        .about-section {
            padding: 80px 5%;
            display: flex;
            align-items: center;
            gap: 50px;
            background: white;
        }

        .about-image {
            flex: 1;
            max-width: 442px;
        }

        .about-image img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.25);
        }

        .about-content {
            flex: 1.5;
            max-width: 739px;
        }

        .section-title-small {
            color: #00B143;
            font-size: 32px;
            font-weight: 800;
            letter-spacing: 0.5px;
            margin-bottom: 30px;
            text-align: center;
        }

        .about-text {
            color: #1D1A1A;
            font-size: 25px;
            line-height: 30px;
            letter-spacing: 2px;
            margin-bottom: 40px;
        }

        .read-more-btn {
            background: #EC221F;
            color: #FEE9E7;
            padding: 12px 24px;
            border: 1px solid #C00F0C;
            border-radius: 8px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
        }

        /* Quality Section */
        .quality-section {
            background: white;
            padding: 100px 5%;
            text-align: center;
            position: relative;
        }

        .quality-section::before {
            display: none;
        }

        .quality-content {
            position: relative;
            z-index: 2;
        }

        .main-title {
            color: #0A2452;
            font-size: 96px;
            font-weight: 400;
            margin-bottom: 50px;
        }

        .quality-grid-new {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: 40px;
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .quality-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
            flex: 1;
            max-width: 250px;
        }

        .quality-item-new {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .quality-item-new:hover {
            transform: translateY(-5px);
        }

        .quality-item-new a {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            text-decoration: none;
            color: inherit;
        }

        .quality-icon-new {
            width: 50px;
            height: 50px;
            background: #DC343C;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .quality-icon-new i {
            font-size: 20px;
            color: white;
        }

        .quality-text-new {
            flex: 1;
            font-size: 16px;
            font-weight: 600;
            color: #333;
            line-height: 1.4;
        }

        .center-video {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            flex: 0 0 400px;
        }

        .video-container {
            position: relative;
            width: 350px;
            height: 250px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .video-thumbnail {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .italian-quote {
            text-align: center;
            max-width: 300px;
        }

        .italian-quote p {
            font-size: 16px;
            font-style: italic;
            color: #0A2452;
            line-height: 1.6;
        }

        /* Projects Section */
        .projects-section {
            background: #0A2452;
            padding: 100px 5%;
            text-align: center;
        }

        .projects-title {
            color: #F4BC1C;
            font-size: 96px;
            font-weight: 400;
            margin-bottom: 80px;
        }

        .projects-grid {
            display: flex;
            flex-direction: column;
            gap: 50px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .project-item {
            background: #D9D9D9;
            border-radius: 50px 0 0 50px;
            display: flex;
            align-items: center;
            min-height: 344px;
            overflow: hidden;
        }

        .project-item:nth-child(even) {
            border-radius: 0 50px 50px 0;
            flex-direction: row-reverse;
        }

        .project-content {
            flex: 1;
            padding: 40px;
            text-align: center;
        }

        .project-title {
            color: #E5151C;
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .project-description {
            color: black;
            font-size: 16px;
            font-weight: 700;
            line-height: 25px;
            margin-bottom: 30px;
        }

        .project-btn {
            background: #B00900;
            color: white;
            padding: 8px 45px;
            border-radius: 23px;
            border: 1px solid #B00900;
            font-size: 12px;
            text-decoration: none;
        }

        .project-image {
            flex: 1;
            height: 344px;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* News Section */
        .news-section {
            padding: 140px 5% 180px 5%;
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
            height: 100%;
            background: #004ECC;
            transition: width 2.5s ease;
            z-index: 1;
        }

        .news-section.animate::after {
            width: 50%;
        }

        .news-header {
            text-align: right;
            margin-bottom: 50px;
            padding-right: 10%;
            position: relative;
            z-index: 2;
        }

        .news-title {
            color: white;
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .news-subtitle {
            color: #E3A412;
            font-size: 36px;
            font-weight: 400;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .news-card {
            background: #006326;
            border-radius: 27px;
            overflow: hidden;
            text-align: center;
            color: white;
        }

        .news-card img {
            width: 100%;
            height: 238px;
            object-fit: cover;
        }

        .news-card-content {
            padding: 30px 15px;
        }

        .news-card-text {
            font-size: 16px;
            font-weight: 700;
            line-height: 25px;
            margin-bottom: 30px;
        }

        .news-card-btn {
            background: #B00900;
            color: white;
            padding: 8px 45px;
            border-radius: 23px;
            border: 1px solid #B00900;
            font-size: 12px;
            text-decoration: none;
        }

        /* Footer Links */
        .footer-links {
            background: white;
            padding: 80px 5%;
            margin-top: 80px;
            margin-bottom: 80px;
            text-decoration: none;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .footer-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            height: 257px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            font-size: 32px;
            font-weight: 400;
            text-decoration: none;
            transition: transform 0.3s ease;
        }

        .footer-card:hover {
            transform: scale(1.05);
        }

        .footer-card img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .footer-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0.25;
        }

        .footer-card-content {
            position: relative;
            z-index: 2;
            color: white;
        }

        .footer-card.blue::before { background: #2C4C84; }
        .footer-card.red::before { background: #DC343C; }
        .footer-card.yellow::before { background: #FDB813; }
        .footer-card.green::before { background: #049B4C; }
        .footer-card.dark-blue::before { background: #0A2452; }

        /* Footer Bottom */
        .footer-bottom-new {
            background: #1B4F72;
            color: white;
            padding: 0;
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
            .hero-title { font-size: 24px; }
            .admissions-btn { font-size: 18px; padding: 15px 30px; }
            .education-levels { flex-direction: column; height: auto; }
            .level-card { height: 200px; margin: 10px; }
            .about-section { flex-direction: column; }
            .quality-grid-new { flex-direction: column; }
            .projects-title, .main-title { font-size: 48px; }
            .news-grid { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: repeat(2, 1fr); }
            .footer-container { flex-direction: column; gap: 20px; text-align: center; }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div id="cms-root"></div>
    
    <div id="original-content">
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

        <!-- Header Section -->
        <header class="header">
            <div class="hero-content">
                <h1 class="hero-title">Una nueva visión de la educación.<br>La Scuola aperta al mondo</h1>
                <a href="popap.php" class="admissions-btn">Admisiones</a>
            </div>
        </header>

        <!-- Color Stripes -->
        <div class="color-stripes">
            <div class="stripe stripe-blue"></div>
            <div class="stripe stripe-green"></div>
            <div class="stripe stripe-white"></div>
            <div class="stripe stripe-red"></div>
        </div>

        <!-- Education Levels Section -->
        <section class="education-levels">
            <div class="level-card inicial">
                <div class="level-content">
                    <h2 class="level-title">Inicial</h2>
                    <p class="level-age">3 meses a 5 años</p>
                    <a href="menuInicial.php" class="level-btn btn-green">Ver mas</a>
                </div>
            </div>
            <div class="level-card primaria">
                <div class="level-content">
                    <h2 class="level-title">Primaria</h2>
                    <p class="level-age">6 a 12 años</p>
                    <a href="Primaria.php" class="level-btn btn-gray">Ver Mas</a>
                </div>
            </div>
            <div class="level-card secundaria">
                <div class="level-content">
                    <h2 class="level-title">Secundaria</h2>
                    <p class="level-age">12 a 18 años</p>
                    <a href="menuSecundaria.php" class="level-btn btn-red">Ver mas</a>
                </div>
            </div>
                    </section>
        </div>

        <!-- Color Stripes -->
        <div class="color-stripes">
            <div class="stripe stripe-blue"></div>
            <div class="stripe stripe-green"></div>
            <div class="stripe stripe-gray"></div>
            <div class="stripe stripe-red"></div>
        </div>

        <!-- About Section -->
        <section class="about-section">
            <div class="about-image">
                <img src="fotosPrincipales/estructura.jpg" alt="Sobre nosotros">
            </div>
            <div class="about-content">
                <h2 class="section-title-small">SOBRE NOSOTROS</h2>
                <p class="about-text">La Scuola Italiana di Montevideo desarrolla un programa educativo nacional e internacional que abre las puertas a un mundo plurilingüe y multicultural.</p>
                <a href="verMas.php" class="read-more-btn">Leer Mas -></a>
            </div>
        </section>

        <!-- Quality Section -->
        <section class="quality-section">
            <div class="quality-content">
                <h2 class="main-title">Vivir la scuola</h2>
                
                <div class="quality-grid-new">
                    <!-- Columna izquierda -->
                    <div class="quality-column left">
                        <div class="quality-item-new">
                            <a href="CursosIdioma.php">
                                <div class="quality-icon-new">
                                    <i class="fas fa-paint-brush"></i>
                                </div>
                                <p class="quality-text-new">Cursos extracurriculares</p>
                            </a>
                        </div>
                        
                        <div class="quality-item-new">
                            <a href="Voluntariado.php">
                                <div class="quality-icon-new">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                                <p class="quality-text-new">Voluntariado</p>
                            </a>
                        </div>
                        
                        <div class="quality-item-new">
                            <a href="idiomas.php">
                                <div class="quality-icon-new">
                                    <i class="fas fa-language"></i>
                                </div>
                                <p class="quality-text-new">Idiomas</p>
                            </a>
                        </div>
                        
                        <div class="quality-item-new">
                            <a href="PropuestaEcologica.php">
                                <div class="quality-icon-new">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <p class="quality-text-new">Propuesta<br>ecológica</p>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Centro - Video -->
                    <div class="center-video">
                        <div class="video-container">
                            <video class="video-thumbnail" controls poster="fotosPrincipales/scuola.jpg">
                                <source src="fotosPrincipales/scuola.mp4" type="video/mp4">
                            </video>
                        </div>
                        
                        <div class="italian-quote">
                            <p>"La meta dell'educazione deve essere stimolare il naturale desiderio di imparare."</p>
                        </div>
                    </div>
                    
                    <!-- Columna derecha -->
                    <div class="quality-column right">
                        <div class="quality-item-new">
                            <a href="convivencia.php">
                                <div class="quality-icon-new">
                                    <i class="fas fa-users"></i>
                                </div>
                                <p class="quality-text-new">Convivencia<br>en el colegio</p>
                            </a>
                        </div>
                        
                        <div class="quality-item-new">
                            <a href="menudeportes.php">
                                <div class="quality-icon-new">
                                    <i class="fas fa-running"></i>
                                </div>
                                <p class="quality-text-new">Deportes</p>
                            </a>
                        </div>
                        
                        <div class="quality-item-new">
                            <a href="Arte.php">
                                <div class="quality-icon-new">
                                    <i class="fas fa-atom"></i>
                                </div>
                                <p class="quality-text-new">Arte, ciencia<br>y tecnología</p>
                            </a>
                        </div>
                        
                        <div class="quality-item-new">
                            <a href="menuIntercambio.php">
                                <div class="quality-icon-new">
                                    <i class="fas fa-exchange-alt"></i>
                                </div>
                                <p class="quality-text-new">Intercambios</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

        <!-- Projects Section -->
        <section class="projects-section">
            <h2 class="projects-title">Nuestros Proyectos</h2>
            
            <div class="projects-grid">
                <div class="project-item">
                    <div class="project-content">
                        <h3 class="project-title">Arcimboldo</h3>
                        <p class="project-description">Se trata de una propuesta multidisciplinaria dirigida a estudiantes de 6º año de Ciencias Biológicas y Social-Económico, integrando contenidos de italiano, matemática, literatura, biología y química.</p>
                        <a href="arcimboldo.php" class="project-btn">Ver mas</a>
                    </div>
                    <div class="project-image">
                        <img src="fotosPrincipales/archimboldo.jpg" alt="Arcimboldo">
                    </div>
                </div>
                
                <div class="project-item">
                    <div class="project-content">
                        <h3 class="project-title">Heliopolis</h3>
                        <p class="project-description">En el marco del proyecto "Heliópolis" cuyo objetivo es investigar sobre la figura de Francisco Piria y sus conexiones con la alquimia y el estudio de la astronomía los alumnos visitan la ciudad de Piriápolis.</p>
                        <a href="heliopolis.php" class="project-btn">Ver Mas</a>
                    </div>
                    <div class="project-image">
                        <img src="fotosPrincipales/heliopolis.jpg" alt="Heliopolis">
                    </div>
                </div>
                
                <div class="project-item">
                    <div class="project-content">
                        <h3 class="project-title">Scuola paradiso ecologico</h3>
                        <p class="project-description">Consiste en un gran plan pluridisciplinar pensado, planificado y elaborado por los propios alumnos con la guía de sus docentes, que prevé la construcción y/o recuperación de diferentes espacios, reforestación, huertas orgánicas, etc., en base a principios ecológicos respetuosos del medio ambiente.</p>
                        <a href="paradiso.php" class="project-btn">Ver mas</a>
                    </div>
                    <div class="project-image">
                        <img src="fotosPrincipales/paradiso.jpg" alt="Scuola paradiso">
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section class="news-section" id="news-animate">
            <div class="news-header">
                <h2 class="news-title">Noticias</h2>
                <p class="news-subtitle">Destacadas</p>
            </div>
            
            <div class="news-grid">
                <div class="news-card">
                    <img src="fotosPrincipales/arcimboldo4.jpg" alt="Noticia 1">
                    <div class="news-card-content">
                        <p class="news-card-text">Consiste en un gran plan pluridisciplinar pensado, planificado y elaborado por los propios alumnos con la guía de sus docentes, que prevé la construcción y/o recuperación de diferentes espacios, reforestación, huertas orgánicas, etc., en base a principios ecológicos respetuosos del medio ambiente.</p>
                        <a href="noticiaDestacada1.php" class="news-card-btn">Ver mas</a>
                    </div>
                </div>
                
                <div class="news-card">
                    <img src="fotosPrincipales/PrimerDia4.jpg.png" alt="Noticia 2">
                    <div class="news-card-content">
                        <p class="news-card-text">Consiste en un gran plan pluridisciplinar pensado, planificado y elaborado por los propios alumnos con la guía de sus docentes, que prevé la construcción y/o recuperación de diferentes espacios, reforestación, huertas orgánicas, etc., en base a principios ecológicos respetuosos del medio ambiente.</p>
                        <a href="noticiaDestacada2.php" class="news-card-btn">Ver mas</a>
                    </div>
                </div>
                
                <div class="news-card">
                    <img src="fotosPrincipales/Comunidad.jpg" alt="Noticia 3">
                    <div class="news-card-content">
                        <p class="news-card-text">Consiste en un gran plan pluridisciplinar pensado, planificado y elaborado por los propios alumnos con la guía de sus docentes, que prevé la construcción y/o recuperación de diferentes espacios, reforestación, huertas orgánicas, etc., en base a principios ecológicos respetuosos del medio ambiente.</p>
                        <a href="noticiaDestacada3.php" class="news-card-btn">Ver mas</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Links -->
        <section class="footer-links">
            <div class="footer-grid">
                <a href="acceso-familia.php" class="footer-card blue">
                    <img src="fotosSeccion/familia.jpg" alt="Acceso a familia">
                    <div class="footer-card-content">Acceso a<br>familia</div>
                </a>
                
                <a href="comunidad-exalumnos.php" class="footer-card red">
                    <img src="fotosPrincipales/Comunidad.jpg" alt="Comunidad Exalumnos">
                    <div class="footer-card-content">Comunidad<br>Exalumnos</div>
                </a>
                
                <a href="scuola-club.php" class="footer-card yellow">
                    <img src="fotosSeccion/scuolaClub.png" alt="Scuola Club">
                    <div class="footer-card-content">Scuola Club</div>
                </a>
                
                <a href="noticias.php" class="footer-card green">
                    <img src="fotosPrincipales/ejemplo5.jpg" alt="Noticias">
                    <div class="footer-card-content">Noticias</div>
                </a>
                
                <a href="CursosIdioma.php" class="footer-card dark-blue">
                    <img src="fotosClases/bachillerato3.jpg" alt="Cursos de idioma">
                    <div class="footer-card-content">Cursos de<br>idioma</div>
                </a>
                
                <a href="trabaja-con-nosotros.php" class="footer-card red">
                    <img src="fotosSeccion/trabaja.jpg" alt="Trabaja con nosotros">
                    <div class="footer-card-content">Trabaja con<br>nosotros</div>
                </a>
            </div>
        </section>

        <!-- Footer Bottom -->
        <footer class="footer-bottom-new">
            <div class="footer-container">
                <div class="footer-left">
                    <div class="footer-logo">
                        <img src="fotosPrincipales/logo2.png" alt="Scuola Italiana di Montevideo">
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
    </div>

    <!-- Scripts -->
    <script>
        // Navbar hide/show on scroll
        let lastScrollTop = 0;
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (!navbar) return;
            
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                navbar.style.transform = 'translateY(-100%)';
                navbar.style.opacity = '0';
            } else {
                navbar.style.transform = 'translateY(0)';
                navbar.style.opacity = '1';
            }
            
            lastScrollTop = scrollTop;
        });

        // News section animation observer
        function startNewsObserver() {
            const newsSection = document.getElementById('news-animate');
            if (!newsSection) return;
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        setTimeout(function() {
                            entry.target.classList.add('animate');
                        }, 500);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.4,
                rootMargin: '0px 0px -100px 0px'
            });
            
            observer.observe(newsSection);
        }

        // Initialize on page load
        window.addEventListener('load', function() {
            window.scrollTo(0, 0);
            startNewsObserver();
        });

        document.addEventListener('DOMContentLoaded', function() {
            window.scrollTo(0, 0);
            startNewsObserver();
        });
    </script>

    
        <script src="cms-admin.js"></script>
    </body>
    </html>
  
