<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scuola Italiana di Montevideo - Lista</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Merriweather Sans', sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 1000px; margin: 0 auto; padding: 0 20px; }

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
        .hero-list { 
            position: relative;
            top: 0;
            height: 60vh; 
            display: flex; 
            align-items: center; 
            padding-left: 5%; 
            margin-top: 0px;
            background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'); 
            background-size: cover; 
            background-position: center;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.4);
            z-index: 1;
        }
        
        .hero-content-left { 
            position: relative; 
            color: white; 
            z-index: 2; 
            max-width: 600px; 
        }
        
        .hero-title-left { 
            font-size: 3rem; 
            font-weight: 700; 
            margin-bottom: 15px; 
        }
        
        .hero-subtitle-left { 
            font-size: 1.2rem; 
            opacity: 0.95; 
        }

        /* Main List Content */
        .main-list { 
            padding: 80px 0; 
        }
        
        .list-intro { 
            margin-bottom: 60px; 
            text-align: center; 
        }
        
        .intro-title { 
            font-size: 2rem; 
            color: #1B2F6F; 
            margin-bottom: 20px; 
        }
        
        .intro-text { 
            font-size: 1.1rem; 
            color: #555; 
            max-width: 700px; 
            margin: 0 auto; 
        }

        /* List Items */
        .main-list-section { 
            margin-bottom: 60px; 
        }
        
        .list-container { 
            max-width: 800px; 
            margin: 0 auto; 
        }
        
        .list-item { 
            display: flex; 
            margin-bottom: 40px; 
            padding: 30px; 
            background: white; 
            border-left: 4px solid #DC343C; 
            box-shadow: 0 5px 15px rgba(0,0,0,0.08); 
            border-radius: 8px; 
            position: relative;
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .list-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            margin-bottom: 120px; /* Hace espacio para el panel */
        }
        
        .item-number { 
            font-size: 2rem; 
            font-weight: 700; 
            color: #1B2F6F; 
            margin-right: 30px; 
            min-width: 60px; 
        }
        
        .item-content { 
            flex: 1; 
        }
        
        .item-title { 
            font-size: 1.3rem; 
            color: #1B2F6F; 
            margin-bottom: 10px; 
        }
        
        .item-description { 
            color: #555; 
            line-height: 1.7; 
        }

        /* Panel individual para cada elemento */
        .item-info-panel {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            height: 80px;
            background: #1B2F6F;
            color: white;
            padding: 20px 30px;
            border-radius: 0 0 8px 8px;
            transform: translateY(-80px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
            z-index: 10;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }

        .list-item:hover .item-info-panel {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .item-info-panel h4 {
            color: #F39C12;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .item-info-panel p {
            margin: 0;
            font-size: 14px;
            opacity: 0.9;
        }

        /* Conclusion */
        .list-conclusion { 
            text-align: center; 
        }
        
        .conclusion-box { 
            background: #ed1c24; 
            color: white; 
            padding: 40px; 
            border-radius: 15px; 
            max-width: 700px; 
            margin: 0 auto; 
        }
        
        .conclusion-title { 
            font-size: 1.8rem; 
            margin-bottom: 15px; 
        }
        
        .conclusion-text { 
            font-size: 1.1rem; 
            opacity: 0.95; 
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

        @media (max-width: 768px) {
            .list-item { 
                flex-direction: column; 
                text-align: center; 
            }
            
            .item-number { 
                margin-right: 0; 
                margin-bottom: 15px; 
            }
            
            .hero-title-left { 
                font-size: 2.2rem; 
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
    <section class="hero-list">
        <div class="hero-overlay"></div>
        <div class="hero-content-left">
            <h1 class="hero-title-left">Título de la Lista</h1>
            <p class="hero-subtitle-left">Una colección organizada de elementos o información</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-list">
        <div class="container">
            <!-- Introduction -->
            <section class="list-intro">
                <h2 class="intro-title">Introducción</h2>
                <p class="intro-text">Este párrafo introductorio explica el propósito de la lista que se presenta a continuación. Puedes usar este espacio para dar contexto o explicar la importancia de los elementos listados.</p>
            </section>

            <!-- Main List -->
            <section class="main-list-section">
                <div class="list-container">
                    <article class="list-item">
                        <div class="item-number">01</div>
                        <div class="item-content">
                            <h3 class="item-title">Primer elemento</h3>
                            <p class="item-description">Descripción detallada del primer elemento de la lista. Aquí puedes explicar las características importantes, beneficios o detalles relevantes.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Información adicional</h4>
                            <p>Aquí puedes agregar información específica para el primer elemento.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">02</div>
                        <div class="item-content">
                            <h3 class="item-title">Segundo elemento</h3>
                            <p class="item-description">Información sobre el segundo elemento. Mantén un estilo consistente en la longitud y tipo de información para cada elemento.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Detalles específicos</h4>
                            <p>Información adicional específica para el segundo elemento.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">03</div>
                        <div class="item-content">
                            <h3 class="item-title">Tercer elemento</h3>
                            <p class="item-description">Detalles del tercer elemento de tu lista. Puedes agregar más elementos siguiendo la misma estructura.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Más información</h4>
                            <p>Datos adicionales para el tercer elemento de la lista.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">04</div>
                        <div class="item-content">
                            <h3 class="item-title">Cuarto elemento</h3>
                            <p class="item-description">Descripción del cuarto elemento. La numeración automática mantiene el orden visual claro.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Información complementaria</h4>
                            <p>Detalles extra sobre el cuarto elemento.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">05</div>
                        <div class="item-content">
                            <h3 class="item-title">Quinto elemento</h3>
                            <p class="item-description">Información sobre el quinto y último elemento de esta lista de ejemplo.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Última información</h4>
                            <p>Datos finales para el quinto elemento de la lista.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">06</div>
                        <div class="item-content">
                            <h3 class="item-title">Quinto elemento</h3>
                            <p class="item-description">Información sobre el quinto y último elemento de esta lista de ejemplo.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Última información</h4>
                            <p>Datos finales para el quinto elemento de la lista.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">07</div>
                        <div class="item-content">
                            <h3 class="item-title">Quinto elemento</h3>
                            <p class="item-description">Información sobre el quinto y último elemento de esta lista de ejemplo.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Última información</h4>
                            <p>Datos finales para el quinto elemento de la lista.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">08</div>
                        <div class="item-content">
                            <h3 class="item-title">Quinto elemento</h3>
                            <p class="item-description">Información sobre el quinto y último elemento de esta lista de ejemplo.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Última información</h4>
                            <p>Datos finales para el quinto elemento de la lista.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">09</div>
                        <div class="item-content">
                            <h3 class="item-title">Quinto elemento</h3>
                            <p class="item-description">Información sobre el quinto y último elemento de esta lista de ejemplo.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Última información</h4>
                            <p>Datos finales para el quinto elemento de la lista.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">10</div>
                        <div class="item-content">
                            <h3 class="item-title">Quinto elemento</h3>
                            <p class="item-description">Información sobre el quinto y último elemento de esta lista de ejemplo.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Última información</h4>
                            <p>Datos finales para el quinto elemento de la lista.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">11</div>
                        <div class="item-content">
                            <h3 class="item-title">Quinto elemento</h3>
                            <p class="item-description">Información sobre el quinto y último elemento de esta lista de ejemplo.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Última información</h4>
                            <p>Datos finales para el quinto elemento de la lista.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">12</div>
                        <div class="item-content">
                            <h3 class="item-title">Quinto elemento</h3>
                            <p class="item-description">Información sobre el quinto y último elemento de esta lista de ejemplo.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Última información</h4>
                            <p>Datos finales para el quinto elemento de la lista.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">13</div>
                        <div class="item-content">
                            <h3 class="item-title">Quinto elemento</h3>
                            <p class="item-description">Información sobre el quinto y último elemento de esta lista de ejemplo.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Última información</h4>
                            <p>Datos finales para el quinto elemento de la lista.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">14</div>
                        <div class="item-content">
                            <h3 class="item-title">Quinto elemento</h3>
                            <p class="item-description">Información sobre el quinto y último elemento de esta lista de ejemplo.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Última información</h4>
                            <p>Datos finales para el quinto elemento de la lista.</p>
                        </div>
                    </article>

                    <article class="list-item">
                        <div class="item-number">15</div>
                        <div class="item-content">
                            <h3 class="item-title">Quinto elemento</h3>
                            <p class="item-description">Información sobre el quinto y último elemento de esta lista de ejemplo.</p>
                        </div>
                        <div class="item-info-panel">
                            <h4>Última información</h4>
                            <p>Datos finales para el quinto elemento de la lista.</p>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Conclusion -->
            <section class="list-conclusion">
                <div class="conclusion-box">
                    <h2 class="conclusion-title">Conclusión</h2>
                    <p class="conclusion-text">Párrafo de cierre que resume los puntos clave de la lista o proporciona una reflexión final sobre el tema tratado.</p>
                </div>
            </section>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="footer-bottom-new">
        <div class="footer-container">
            <div class="footer-Aleft">
                <div class="footer-logo">
                    <img src="https://via.placeholder.com/120x60/1B2F6F/white?text=SCUOLA" alt="Scuola Italiana di Montevideo" style="height: 60px;">
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
</body>
</html>