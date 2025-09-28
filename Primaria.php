<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa dei Bambini - Scuola Italiana di Montevideo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;700&family=Crimson+Pro:wght@400;600;900&display=swap" rel="stylesheet">
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

    <!-- Main Content -->
    <main class="main-content">
        <!-- Color Header Bands -->
        <div class="color-bands">
            <div class="green-band"></div>
            <div class="red-band"></div>
        </div>

        <!-- Hero Image -->
        <section class="hero-section">
            <img src="fotosClases/Primaria1.jpg" alt="Casa dei Bambini" class="hero-image">
        </section>

        <!-- Navigation Tabs -->
        <section class="tabs-navigation">
            <div class="tabs-container">
                <div class="tab-item">BBSIM</div>
                <div class="tab-item">Casa dei bambini</div>
                <div class="tab-item active">Primaria</div>
                <div class="tab-item">Secundaria</div>
                <div class="tab-item">BT</div>
            </div>
        </section>

        <!-- Title Section -->
        <section class="title-section">
            <h1 class="main-title">
                <span class="blue-text">Primaria </span>
                
            </h1>
            <p class="subtitle">
                Padres y maestros queremos para nuestros niños una escuela que les brinde opciones globales para su futuro <br>
                , en un ambiente de alto nivel académico y en el que todos tengan la oportunidad de aprender. <br>
                técnicos capacitados de manera constante y comprometidos con su vocación de enseñar.
            </p>
        </section>

        <!-- Content Sections -->
        <section class="content-sections">
            <!-- Section 1 -->
            <div class="content-row">
                <div class="text-content left">
                    <p>En Primaria somos un equipo de profesionales que trabaja formando personas capaces de interpelar y crear conciencia sobre el mundo que los rodea, enfrentados a los cambios que se perciben día a día en la sociedad.

</p>
                </div>
                <div class="image-content right">
                    <img src="fotosClases/Primaria2.jpg" alt="Actividades Montessori">
                </div>
            </div>

            <!-- Section 2 -->
            <div class="content-row reverse">
                <div class="image-content left">
                    <img src="fotosClases/Primaria3.jpg" alt="Psicomotricidad">
                </div>
                <div class="text-content right">
                    <p>Renovamos año a año ese desafío con el convencimiento de ofrecer una enseñanza con altas expectativas hacia el logro de personas comprensivas y competentes, priorizando los valores humanos, actitudes y sentimientos de auténticos ciudadanos del mundo. La Educación constituye el principal motor de innovación tecnológica, de modernización y representa la mejora herramienta para construir un mundo mejor.</p>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="content-row">
                <div class="text-content left">
                    <p>“Sembrad en los niños ideas buenas, aunque no las entiendan: los años se encargarán de descifrarlas en su entendimiento y de hacerlas florecer en su corazón” M. Montessori</p>
                </div>
                <div class="image-content right">
                    <img src="fotosClases/Primaria4.jpeg" alt="Idiomas">
                </div>
            </div>

            <!-- Section 4 -->
            <div class="content-row reverse">
                <div class="image-content left">
                    <img src="fotosClases/Primaria5.jpg" alt="Italiano">
                </div>
                <div class="text-content right">
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="gallery-separator">
                <div class="line left-line"></div>
                <div class="gallery-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <div class="line right-line"></div>
            </div>
            <div class="gallery-grid">
                <img src="fotosClases/Primaria1.jpg" alt="Galería 1">
                <img src="fotosClases/Primaria2.jpg" alt="Galería 2">
                <img src="fotosClases/Primaria3.jpg" alt="Galería 3">
                <img src="fotosClases/Primaria4.jpeg" alt="Galería 4">
                <img src="fotosClases/Primaria5.jpg" alt="Galería 5">
                <img src="fotosClases/Primaria1.jpg" alt="Galería 6">
            </div>
        </section>

        <!-- Footer Image -->
    </main>

    <!-- Footer -->
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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Merriweather Sans', sans-serif;
            line-height: 1.6;
            color: #333;
            background: white;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(10, 36, 82, 0.5);
            z-index: 1000;
            transition: all 0.3s ease, transform 0.3s ease, opacity 0.3s ease;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%;
            max-width: 1200px;
            margin: 0 auto;
            height: 80px;
        }

        .nav-logo img {
            height: 120px;
            width: auto;
            position: relative;
            top: 0px;
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

        /* Main Content */
        .main-content {
            margin-top: 80px;
        }

        /* Color Bands */
        .color-bands {
            width: 100%;
            height: 600px;
            position: relative;
            overflow: hidden;
        }

        .green-band {
            width: 100%;
            height: 300px;
            background: #049B4C;
        }

        .red-band {
            width: 100%;
            height: 300px;
            background: #DC343C;
        }

        /* Hero Section */
        .hero-section {
            position: absolute;
            top: 290px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .hero-image {
            width: 1168px;
            max-width: 85vw;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        /* Navigation Tabs */
        .tabs-navigation {
            margin-top: 400px;
            padding: 0 5%;
        }

        .tabs-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            border-bottom: 1px solid #716E6E;
            position: relative;
        }

        .tab-item {
            padding: 15px 30px;
            font-family: 'Crimson Pro', serif;
            font-weight: 900;
            font-size: 15px;
            letter-spacing: 0.5px;
            color: #716E6E;
            cursor: pointer;
            transition: color 0.3s ease;
            text-align: center;
            min-width: 120px;
        }

        .tab-item.active {
            color: #DC343C;
            font-weight: 900;
        }

        .tab-item:hover {
            color: #DC343C;
        }

        /* Title Section */
        .title-section {
            text-align: center;
            padding: 80px 5%;
            max-width: 1000px;
            margin: 0 auto;
        }

        .main-title {
            font-size: 64px;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-bottom: 40px;
            line-height: 1.2;
        }

        .blue-text {
            color: #2E2C6B;
        }

        .red-text {
            color: #A11919;
        }

        .subtitle {
            color: #041E42;
            font-size: 16px;
            font-weight: 700;
            line-height: 25px;
            letter-spacing: 0.5px;
            max-width: 862px;
            margin: 0 auto;
        }

        /* Content Sections */
        .content-sections {
            padding: 0 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .content-row {
            display: flex;
            align-items: center;
            gap: 60px;
            margin-bottom: 120px;
        }

        .content-row.reverse {
            flex-direction: row-reverse;
        }

        .text-content {
            flex: 1;
        }

        .text-content p {
            color: #373737;
            font-size: 20px;
            font-weight: 700;
            line-height: 30px;
            letter-spacing: 0.5px;
        }

        .image-content {
            flex: 1;
        }

        .image-content img {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Gallery Section */
        .gallery-section {
            padding: 120px 5%;
            text-align: center;
        }

        .gallery-separator {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 80px;
        }

        .line {
            height: 1px;
            background: #716E6E;
            flex: 1;
            max-width: 400px;
        }

        .gallery-icon {
            margin: 0 30px;
            color: #716E6E;
            font-size: 40px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-grid img {
            width: 100%;
            height: 232px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .gallery-grid img:hover {
            transform: scale(1.05);
        }

        /* Footer Image */
        .footer-image {
            width: 100%;
            margin-top: 100px;
        }

        .footer-image img {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }

        /* Footer Styles */
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

        .footer-Aleft {
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

        /* Responsive Design */
        @media (max-width: 1200px) {
            .hero-image {
                width: 90vw;
            }

            .main-title {
                font-size: 48px;
            }

            .content-row {
                flex-direction: column;
                gap: 40px;
            }

            .content-row.reverse {
                flex-direction: column;
            }

            .text-content p {
                font-size: 18px;
            }
        }

        @media (max-width: 768px) {
            .nav-logo img {
                height: 80px;
                top: 10px;
            }

            .main-title {
                font-size: 36px;
            }

            .subtitle {
                font-size: 14px;
                line-height: 22px;
            }

            .tabs-container {
                flex-wrap: wrap;
                gap: 10px;
            }

            .tab-item {
                padding: 10px 20px;
                font-size: 13px;
            }

            .text-content p {
                font-size: 16px;
                line-height: 26px;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .content-row {
                gap: 30px;
            }
        }
    </style>

    <script>
        let lastScrollTop = 0;

        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
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

        // Tab functionality
        document.querySelectorAll('.tab-item').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.tab-item').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
    <script src="cms-admin.js"></script>
</body>
</html>