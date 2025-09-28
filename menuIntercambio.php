<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intercambios - Scuola Italiana</title>
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
    <section class="hero">
        <div class="hero-background"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">INTERCAMBIOS</h1>
            <p class="hero-subtitle">Programas de intercambio estudiantil</p>
        </div>
    </section


    
    <main class="main-content">
        <div class="container">
            <div class="intercambios-grid">
                
                <!-- Italia -->
                <div class="intercambio-card">
                    <div class="card-icon">
                        <span class="country-icon">🇮🇹</span>
                    </div>
                    <h3>Italia</h3>
                    <p>Intercambio académico en colegios italianos. Duración de 6 meses con familias anfitrionas.</p>
                    <a href="IntercambioItalia.php" class="intercambio-btn" style="display: inline-block; text-decoration: none;">
    Ver programa
</a>
                </div>

                <!-- Argentina -->
                <div class="intercambio-card">
                    <div class="card-icon">
                        <span class="country-icon">🇦🇷</span>
                    </div>
                    <h3>Argentina</h3>
                    <p>Programa de intercambio cultural y académico. Experiencia de 4 meses en Buenos Aires.</p>
                    <a href="IntercambioArgentina.php" class="intercambio-btn" style="display: inline-block; text-decoration: none;">
    Ver programa
</a>
                </div>

                <!-- Estados Unidos -->
                <div class="intercambio-card">
                    <div class="card-icon">
                        <span class="country-icon">🇺🇸</span>
                    </div>
                    <h3>Estados Unidos</h3>
                    <p>Intercambio estudiantil en high schools americanas. Programa anual completo disponible.</p>
                    <a href="IntercambioEEUU.php" class="intercambio-btn" style="display: inline-block; text-decoration: none;">
    Ver programa
</a>
                </div>

            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer-bottom-new">
        <div class="footer-container">
            <div class="footer-left">
                <div class="footer-logo">
                    <img src="fotosPrincipales/logotipo.png" alt="Scuola Italiana di Montevideo" style="height: 60px;">
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
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Merriweather Sans', sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(10, 36, 82, 0.5);
            z-index: 1000;
            height: 80px;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%;
            max-width: 1200px;
            margin: 0 auto;
            height: 100%;
        }

        .nav-logo {
            height: 100%;
            display: flex;
            align-items: center;
        }

        .nav-logo img {
            height: 120px;
            width: auto;
            max-height: 120px;
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
            height: 60vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            position: relative; 
            margin-top: 0;
        }
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('fotosIntercambio/avion-fondo.jpg') center/cover;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }
        .hero-content { 
            text-align: center; 
            color: white; 
            z-index: 2; 
            position: relative; 
        }
        .hero-title { 
            font-size: 4rem; 
            font-weight: 700; 
            margin-bottom: 20px; 
            letter-spacing: 3px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .hero-subtitle { 
            font-size: 1.3rem; 
            opacity: 0.9; 
            font-weight: 300;
        }

        /* Main Content */
        .main-content { 
            padding: 80px 0; 
            background: #f8f9fa; 
        }
        .intercambios-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); 
            gap: 40px; 
            margin-top: 40px;
        }

        /* Card Styles */
        .intercambio-card { 
            background: white; 
            border-radius: 15px; 
            padding: 40px 30px; 
            text-align: center; 
            box-shadow: 0 8px 25px rgba(0,0,0,0.1); 
            transition: all 0.3s ease;
        }
        .intercambio-card:hover { 
            transform: translateY(-10px); 
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .card-icon { 
            width: 80px; 
            height: 80px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            margin: 0 auto 30px; 
            transition: 0.3s;
        }
        .country-icon {
            font-size: 4rem;
        }
        .intercambio-card:hover .card-icon {
            transform: scale(1.1);
        }

        .intercambio-card h3 { 
            font-size: 1.8rem; 
            color: #333; 
            margin-bottom: 20px; 
            font-weight: 600;
        }
        .intercambio-card p { 
            color: #666; 
            margin-bottom: 30px; 
            line-height: 1.6;
            font-size: 1rem;
        }

        .intercambio-btn { 
            background: #ed1c24; 
            color: white; 
            border: none; 
            padding: 15px 30px; 
            border-radius: 8px; 
            font-size: 1rem; 
            font-weight: 600; 
            cursor: pointer; 
            transition: all 0.3s ease;
            font-family: 'Merriweather Sans', sans-serif;
        }
        .intercambio-btn:hover { 
            background: #c41e3a; 
            transform: translateY(-2px);
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
            .hero-title { font-size: 2.5rem; }
            .intercambios-grid { grid-template-columns: 1fr; gap: 30px; }
            .intercambio-card { padding: 30px 20px; }
            .container { padding: 0 15px; }
            
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