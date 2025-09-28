<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scuola Italiana di Montevideo</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Merriweather Sans', sans-serif;
        }

        body {
            font-family: 'Merriweather Sans', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        html, body {
            width: 100%;
            max-width: 100vw;
            overflow-x: hidden;
            font-size: 16px;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            padding: 0 20px;
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
            transition: all 0.3s ease, transform 0.3s ease, opacity 0.3s ease;
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

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-top: 80px;
            background-size: cover;
            background-position: center;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            color: white;
            animation: fadeInUp 1s ease-out;
        }

        .hero-title {
            font-size: clamp(3rem, 8vw, 6rem);
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
            opacity: 0.9;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        /* Main Content */
        .main-content {
            position: relative;
            z-index: 10;
        }

        /* Text Introduction Section */
        .text-intro {
            padding: 100px 0;
            background: white;
        }

        .intro-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .intro-text h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #3B69BA;
            margin-bottom: 30px;
            line-height: 1.2;
        }

        .intro-description {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .visual-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .visual-card:hover {
            transform: translateY(-10px);
        }

        .visual-card img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        /* Features Section */
        .features {
            padding: 100px 0;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: #3B69BA;
            margin-bottom: 60px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .feature-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border-top: 4px solid transparent;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-top-color: #f31212;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        .feature-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #3B69BA;
            margin-bottom: 15px;
        }

        .feature-card p {
            color: #666;
            line-height: 1.6;
            font-size: 1rem;
        }

        /* Content Section */
        .content-section {
            padding: 100px 0;
            background: white;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .content-text h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #3B69BA;
            margin-bottom: 30px;
            line-height: 1.2;
        }

        .content-text p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .content-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
        }

        /* Footer */
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

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .intro-grid,
            .content-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .intro-text h2,
            .content-text h2,
            .section-title {
                font-size: 2rem;
            }

            .footer-container {
                flex-direction: column;
                gap: 30px;
                text-align: center;
            }
            
            .footer-Aleft {
                flex-direction: column;
                gap: 10px;
            }
            
            .footer-center,
            .footer-right {
                padding: 0;
                width: 100%;
            }
        }
    </style>
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
    <section class="hero editable-image" style="background-image: url('fotosPrincipales/arte.jpg'); margin-top: 0px;">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title editable-text">Arte, Ciencia y tecnologia</h1>
            <p class="hero-subtitle editable-text">Descubre todo lo que hace especial a la Scuola Italiana di Montevideo</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
            <section class="features">
                <div class="container">
                    <h2 class="section-title editable-text">Nuestras cualidades</h2>
                    <div class="features-grid">
                        <div class="feature-card">
                            <h3 class="editable-text">Arte</h3>
                            <p class="editable-text">Desarrollamos todas las dimensiones de nuestros estudiantes: intelectual, física, emocional y social, preparándolos para enfrentar los desafíos del futuro con confianza y determinación.</p>
                        </div>
                        <div class="feature-card">
                            <h3 class="editable-text">Ciencia</h3>
                            <p class="editable-text">Mantenemos viva la herencia italiana mientras abrazamos la diversidad cultural, creando un ambiente donde todas las tradiciones son valoradas y respetadas.</p>
                        </div>
                        <div class="feature-card">
                            <h3 class="editable-text">Tecnologia</h3>
                            <p class="editable-text">Nuestros programas académicos de alta calidad preparan a los estudiantes para ingresar a las mejores universidades del mundo, con un enfoque en el pensamiento crítico y la innovación.</p>
                        </div>
                    </div>
                </div>
            </section>
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
    </script>
<script src="cms-admin.js"></script>
</body>
</html>