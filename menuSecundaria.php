<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicial - Scuola Italiana di Montevideo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
        <!-- Hero Section -->
        <section class="hero-inicial">
            <div class="hero-content">
                <h1 class="hero-title">Secundaria</h1>
            </div>
        </section>

        <!-- Programs Section -->
        <section class="programs-section">
            <div class="programs-container">
                <!-- Casa dei Bambini -->
                <div class="program-section">
                    <div class="program-image">
                        <img src="fotosClases/Primerciclo1.jpg" alt="Casa dei Bambini">
                    </div>
                    <div class="program-info">
                        <h3>Primer Ciclo</h3>
<p>                        En los primeros años de Secundaria se continúa el trabajo iniciado en Primaria con las prácticas reflexivas, autónomas y de creciente rigor académico que permitan, finalizado el ciclo, continuar los estudios superiores. 
</p>
                            <a href="primerCiclo.php" class="program-button" style="display: inline-block; text-decoration: none;">
    Ver programa
</a>
                        
                    </div>
                </div>

                <!-- BBSIM -->
                <div class="program-section">
                    <div class="program-image">
                        <img src="fotosClases/bachillerato1.jpg" alt="BBSIM">
                    </div>
                    <div class="program-info">
                        <h3>Bachillerato</h3>
                        <p>En el Segundo Ciclo de Secundaria se continúa el trabajo iniciado en Primer Ciclo, consolidando métodos de estudio autónomo, 
mecanismos de búsqueda e investigación. Nuestro objetivo es formar personas cultas, críticas y creativas, capaces de enfrentar con actitud
racional las situaciones y los problemas que se les presenten.</p>
                        
                            <a href="Bachillerato.php" class="program-button" style="display: inline-block; text-decoration: none;">
    Ver programa
</a>
                        
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

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            margin-top: 150px;
        }

        /* Hero Section */
        .hero-inicial {
            background: linear-gradient(135deg, #1B4F72 0%, #0A2452 100%);
            padding: 60px 5%;
            text-align: center;
            color: white;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 300;
            margin: 0;
            letter-spacing: 2px;
        }

        /* Programs Section */
        .programs-section {
            padding: 80px 5%;
            background: #f8f9fa;
        }

        .programs-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        }

        .program-section {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .program-section:hover {
            transform: translateY(-5px);
        }

        .program-image {
            height: 250px;
            overflow: hidden;
        }

        .program-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .program-info {
            padding: 30px;
        }

        .program-info h3 {
            color: #1B4F72;
            font-size: 1.5rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .program-info p {
            font-size: 0.95rem;
            color: #555;
            margin-bottom: 15px;
            line-height: 1.6;
            text-align: justify;
        }

        .program-button {
            background: linear-gradient(135deg, #1B4F72, #0A2452);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .program-button:hover {
            background: linear-gradient(135deg, #0A2452, #1B4F72);
            transform: translateX(5px);
        }

        .program-button i {
            transition: transform 0.3s ease;
        }

        .program-button:hover i {
            transform: translateX(3px);
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
        @media (max-width: 768px) {
            .nav-logo img {
                height: 80px;
            }

            .main-content {
                margin-top: 120px;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .programs-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .program-info {
                padding: 25px;
            }

            .program-info h3 {
                font-size: 1.3rem;
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
            
            .footer-section {
                margin-bottom: 20px;
            }
        }
    </style>

    <script>
        let lastScrollTop = 0;

        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scrolling down y ya bajó más de 100px
                navbar.style.transform = 'translateY(-100%)';
                navbar.style.opacity = '0';
            } else {
                // Scrolling up o está en el top
                navbar.style.transform = 'translateY(0)';
                navbar.style.opacity = '1';
            }
            
            lastScrollTop = scrollTop;
        });
    </script>
    <script src="cms-admin.js"></script>
</body>
</html>