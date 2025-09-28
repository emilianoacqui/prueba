<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scuola Italiana di Montevideo</title>
    <style>

html, body {
  width: 100%;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
  scroll-behavior: smooth;
}


html {
  scroll-padding-top: 0;
  scroll-margin-top: 0;
}

body {
  scroll-padding-top: 0;
  scroll-margin-top: 0;
}


body.loading-cms-content #original-content {
  display: none !important;
}

body.loading-cms-content #cms-root {
  display: block !important;
}

body.loading-cms-content {
  margin: 0;
  padding: 0;
}

body.loading-cms-content .container {
  margin: 0 !important;
  padding: 0 !important;
  height: auto !important;
}

html, body {
  width: 100%;
  overflow-x: hidden;
}

body.loading-cms-content #original-content {
  display: none !important;
}

body.loading-cms-content #cms-root {
  display: block !important;
}
#cms-root {
  margin: 0 !important;
  padding: 0 !important;
  position: relative;
  top: 0;
}
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Merriweather Sans', Arial, sans-serif;
            overflow-x: auto;
            background: white;
        }

        .container {
            max-width: none;
            width: 100%;
            margin: 0;
            padding: 0;
            background: white;
            position: relative;
            top: 0;
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
}

.nav-logo img {
    height: 50px;
    width: auto;
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
            min-height: 800px;
            background: url('fotosPrincipales/portada1.jpg') center/cover;
            margin: 0;
            padding: 0;
            top: 0;
            left: 0;
        }

        .header-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 200px;
            background: rgba(10, 36, 82, 0.5);
        }

        .logo {
            position: absolute;
            top: 0px;
            left: 0%;
            width: 400px;
            height: 200px;
            
        }

        .user-icon {
            position: absolute;
            top: 64px;
            right: 5%;
            width: 75px;
            height: 75px;
            background: url('https://placehold.co/75x75') no-repeat;
        }

        .hero-content {
            position: absolute;
            top: 40%;
            left: 5%;
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
        }

        /* Education Levels Section */
        .education-levels {
            display: flex;
            height: 500px;
            margin-top: -50px;
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

        .inicial::before {
            background: #049B4C;
        }

        .primaria {
            background-image: url('fotosPrincipales/primaria1.jpg');
        }

        .primaria::before {
            background: #D9D9D9;
        }

        .secundaria {
            background-image: url('fotosPrincipales/secundaria1.jpg');
        }

        .secundaria::before {
            background: #DC343C;
        }

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
        }

        .btn-green { background: #049B4C; }
        .btn-gray { background: #D9D9D9; }
        .btn-red { background: #DC343C; }

        /* Color Stripes */
        .color-stripes {
            height: 57px;
            display: flex;
            flex-direction: column;
        }

        .stripe {
            flex: 1;
        }

        .stripe-blue { background: #0A2452; }
        .stripe-green { background: #049B4C; }
        .stripe-gray { background: #D9D9D9; }
        .stripe-red { background: #DC343C; }

        /* About Section */
        .about-section {
            padding: 80px 5%;
            display: flex;
            align-items: center;
            gap: 50px;
            min-height: 600px;
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

        /* Institutional Quality Section */
        .quality-section {
            background: rgba(10, 36, 82, 0.75);
            padding: 100px 5%;
            text-align: center;
            position: relative;
            background-image: url('fotosPrincipales/nuestro-colegio.jpg');
            background-size: cover;
            background-position: center;
        }

        .quality-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(10, 36, 82, 0.3); /* Menos opacidad */
            z-index: 1;
        }

        .quality-content {
            position: relative;
            z-index: 2;
        }

        .main-title {
            color: white;
            font-size: 96px;
            font-weight: 400;
            margin-bottom: 50px;
        }

        /* Nuevo diseÃ±o para Vivir la scuola */
        .quality-grid-new {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: 40px;
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
            width: 100%;
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
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .quality-item-new:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .quality-item-new a {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            text-decoration: none;
            color: inherit;
            width: 100%;
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
            margin-top: 2px;
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
            margin: 0;
            line-height: 1.4;
            text-align: left;
            vertical-align: top;
        }

        .arrow {
            color: #999;
            font-size: 18px;
            font-weight: bold;
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

        

        .play-button:hover {
            background: rgba(220, 52, 60, 1);
            transform: translate(-50%, -50%) scale(1.1);
        }

        .play-button i {
            font-size: 30px;
            color: white;
            margin-left: 5px;
        }

        .italian-quote {
            text-align: center;
            max-width: 300px;
        }

        .italian-quote p {
            font-size: 16px;
            font-style: italic;
            color: #ffffff;
            line-height: 1.6;
            margin: 0;
        }

        /* Projects Section */
        .projects-section {
    background: #1B2F6F;
    padding: 200px 5% 150px 5%;
    text-align: center;
    margin-bottom: 120px;
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
    padding: 140px 5% 180px 5%; /* CambiÃ© de 100px a 180px el padding inferior */
    background: #0A2452;
    position: relative;
    overflow: hidden;
}

        .news-header {
            text-align: right;
            margin-bottom: 50px;
            padding-right: 10%;
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
    background: #1D1A1A;
    padding: 80px 5%;
    margin-top: 120px; /* Agregar esta lÃ­nea */
    text-decoration: none;
}

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
            max-width: 1400px;
            margin: 0 auto;
            text-decoration: none;
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
            color: inherit;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
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

        /* Pantallas muy grandes */
        @media (min-width: 1920px) {
            .container {
                max-width: 100%;
                margin: 0 auto;
            }
            
            .quality-grid-new {
                max-width: 1600px;
                margin: 0 auto;
            }
            
            .header {
                background-size: cover;
                background-position: center;
            }
            
            .hero-title {
                font-size: clamp(48px, 4vw, 72px);
            }
            
            .admissions-btn {
                font-size: clamp(36px, 3vw, 48px);
                padding: clamp(20px, 2vw, 30px) clamp(40px, 3vw, 60px);
            }
            
            .main-title {
                font-size: clamp(96px, 8vw, 120px);
            }
        }

/* Responsive para Vivir la scuola */
@media (max-width: 768px) {
    .quality-grid-new {
        flex-direction: column;
        gap: 30px;
        padding: 20px 10px;
    }
    
    .quality-column {
        max-width: 100%;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .quality-item-new {
        flex: 1;
        min-width: 200px;
        max-width: 250px;
    }
    
    .center-video {
        order: -1;
        flex: none;
    }
    
    .video-container {
        width: 280px;
        height: 200px;
    }
    
    .play-button {
        width: 60px;
        height: 60px;
    }
    
    .play-button i {
        font-size: 24px;
    }
    
    .italian-quote {
        max-width: 250px;
    }
    
    .italian-quote p {
        font-size: 14px;
    }
}

/* RESPONSIVE DESIGN MEJORADO PARA MÃ“VILES */
@media (max-width: 480px) {
    .quality-section .main-title::before {
        font-size: 16px;
        color: #0A2452;
        text-indent: 0;
        
    }
    .container {
        width: 100%;
        max-width: 402px;
        margin: 0 auto;
        padding: 0;
    }
    
    /* Header mÃ³vil */
    .header {
        height: 453px;
        min-height: 453px;
        position: relative;
    }
    
    .header-overlay {
        height: 80px;
        background: rgba(10, 36, 82, 1);
    }
    
    .logo {
        width: 95px;
        height: 33px;
        top: 18px;
        left: 50%;
        transform: translateX(-50%);
    }
    
    .user-icon {
        width: 41px;
        height: 32px;
        top: 22px;
        right: 8px;
        left: auto;
    }
    
    .hero-content {
        position: absolute;
        top: 157px;
        left: 14px;
        right: 14px;
        max-width: none;
        width: calc(100% - 28px);
    }
    
    .hero-title {
        font-size: 20px;
        line-height: 1.2;
        margin-bottom: 20px;
        text-align: left;
    }
    
    .admissions-btn {
        width: 115px;
        height: 42px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        margin-left: 6px;
    }
    
    /* Secciones de educaciÃ³n - layout vertical */
    .education-levels {
        flex-direction: column;
        height: auto;
        margin-top: 0;
    }
    
    .level-card {
        height: 180px;
        margin: 5px 10px;
        border-radius: 10px;
        background-size: cover !important;
        background-position: center !important;
    }
    
    .level-title {
        font-size: 16px;
        margin-bottom: 5px;
    }
    
    .level-age {
        font-size: 10px;
        margin-bottom: 15px;
    }
    
    .level-btn {
        padding: 8px 16px;
        font-size: 12px;
        border-radius: 10px;
        width: auto;
        height: auto;
        display: inline-block;
    }
    
    /* Color stripes - mÃ¡s delgadas */
    .color-stripes {
        height: 23px;
    }
    
    .stripe {
        height: 6px;
    }
    
    /* About section - layout vertical */
    .about-section {
        flex-direction: column;
        padding: 40px 20px;
        gap: 20px;
        min-height: auto;
    }
    
    .about-image {
        max-width: 100%;
        order: 2;
    }
    
    .about-image img {
        height: 200px;
        width: 100%;
    }
    
    .about-content {
        max-width: 100%;
        order: 1;
    }
    
    .section-title-small {
        font-size: 16px;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .about-text {
        font-size: 11px;
        line-height: 22px;
        letter-spacing: 2px;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .read-more-btn {
        display: block;
        width: 60px;
        height: 17px;
        margin: 0 auto;
        padding: 0;
        font-size: 7px;
        border-radius: 7px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

/* Quality section mÃ³vil - Layout especÃ­fico como la imagen */
/* Quality section mÃ³vil - CORREGIDO */
.quality-section {
    padding: 40px 20px 80px 20px;
    background: white !important;
    background-image: none !important;
}

.quality-section::before {
    display: none !important;
}

.main-title {
    font-size: 16px;
    margin-bottom: 30px;
    text-align: center;
    color: #0A2452 !important;
}

/* Adaptar la estructura existente para mÃ³vil */
.quality-grid-new {
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 20px 10px;
    max-width: 350px;
    margin: 0 auto;
}

.quality-column {
    max-width: 100%;
    display: grid;
grid-template-columns: repeat(4, 1fr);
    gap: 15px;
}



.quality-item-new {
    min-width: auto;
    max-width: none;
    padding: 15px;
}

.quality-item-new a {
    flex-direction: column;
    gap: 10px;
    text-align: center;
}

.quality-icon-new {
    width: 30px;
    height: 30px;
    margin: 0 auto;
}

.quality-icon-new i {
    font-size: 14px;
}

.quality-text-new {
    font-size: 10px;
    line-height: 1.2;
    text-align: center;
}

.arrow {
    display: none;
}

.center-video {
    order: -1;
    flex: none;
    margin-bottom: 20px;
}

.video-container {
    width: 250px;
    height: 180px;
    margin: 0 auto;
}

.italian-quote p {
    font-size: 12px;
    color: #0A2452 !important;
}

/* Quote section - Cita italiana debajo */
.quality-section::after {
    content: '"La meta dell\'educazione debe essere stimolare il naturale desiderio di imparare."';
    display: block;
    text-align: center;
    color: #0A2452;
    font-size: 11px;
    margin-top: 220px;
    font-style: italic;
    max-width: 200px;
    margin-left: auto;
    margin-right: auto;
    font-family: 'Merriweather Sans', sans-serif;
    padding-top: 20px;
}

/* Projects section mÃ³vil - CORREGIDO */
.projects-section {
    padding: 40px 20px;
    text-align: center;
    background: white !important; /* Fondo blanco */
}

.projects-title {
    font-size: 16px;
    margin-bottom: 30px;
    color: #0A2452;
}

.projects-grid {
    flex-direction: column;
    gap: 20px;
    align-items: center;
}

.project-item {
    flex-direction: row !important;
    border-radius: 10px !important;
    background: #0A2452;
    min-height: 109px;
    max-width: 184px;
    width: 184px;
    margin: 0;
    position: relative;
    overflow: hidden;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.project-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 77px; /* Dejar espacio para la imagen */
    background: rgba(10, 36, 82, 0.95);
    padding: 10px;
    z-index: 2;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.project-title {
    font-size: 10px;
    color: white;
    margin-bottom: 5px;
    font-weight: 700;
    text-align: left;
}

.project-description {
    display: none; /* Ocultar en mÃ³vil */
}

.project-btn {
    font-size: 6px;
    padding: 4px 15px;
    border-radius: 23px;
    margin-top: 5px;
    align-self: flex-start;
}

.project-image {
    flex: none;
    height: 109px;
    width: 77px;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1;
}

.project-image img {
    width: 77px;
    height: 109px;
    object-fit: cover;
}

/* News section mÃ³vil - CORREGIDO */
/* News Section */
/* News Section */
.news-section {
    padding: 40px 20px 80px 20px; /* AumentÃ© el padding inferior de 20px a 80px */
    background: #0A2452;
    position: relative;
    overflow: hidden;
}

.news-section.animate::after {
    width: 50%;
}

.news-header, 
.news-grid {
    position: relative;
    z-index: 10;
}

.news-blue-animation {
    position: absolute;
    top: 0;
    right: 0;
    width: 0;
    height: 100%;
    background: #004ECC;
    transition: width 1.8s ease-out;
    z-index: 1;
}

.news-section.show-animation .news-blue-animation {
    width: 50%;
}

.news-header, .news-grid {
    position: relative;
    z-index: 2;
}

.news-header {
    text-align: center;
    margin-bottom: 30px;
    padding-right: 0;
}

.news-title {
    font-size: 16px;
    margin-bottom: 10px;
    color: white;
}

.news-subtitle {
    font-size: 16px;
    color: #E3A412;
}

.news-grid {
    grid-template-columns: 1fr;
    gap: 20px;
    max-width: 174px;
    margin: 0 auto;
}

.news-card {
    background: #049B4C;
    border-radius: 5px;
    height: 241px;
    box-shadow: none;
    overflow: hidden;
}

.news-card img {
    height: 92px;
    width: 148px;
    margin: 11px 13px;
    border-radius: 5px;
    object-fit: cover;
}

.news-card-content {
    padding: 10px 15px 20px;
}

.news-card-text {
    font-size: 8px;
    line-height: 12px;
    margin-bottom: 15px;
    color: white;
    text-align: center;
}

.news-card-btn {
    font-size: 6px;
    padding: 4px 15px;
    border-radius: 23px;
    background: #B00900;
    border: 1px solid #B00900;
}
    
    /* Footer Links mÃ³vil */
    .footer-links {
        padding: 40px 20px;
        background: #1D1A1A;
        text-decoration: none;
    }
    
    .footer-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        max-width: 358px;
        margin: 0 auto;
        text-decoration: none;
    }
    
    .footer-card {
        height: 103px;
        font-size: 10px;
        border-radius: 20px;
        position: relative;
    }
    
    .footer-card img {
        width: 100%;
        height: 100%;
        border-radius: 20px;
    }
    
    .footer-card-content {
        position: absolute;
        bottom: 8px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 3;
        font-size: 10px;
        color: white;
    }
    
    /* Footer bottom mÃ³vil */
    .footer-bottom-new {
        padding: 0;
    }
    
    .footer-container {
        flex-direction: column;
        gap: 20px;
        padding: 20px;
        text-align: center;
    }
    
    .footer-left {
        flex-direction: column;
        gap: 10px;
    }
    
    .footer-logo img {
        height: 28px;
        width: auto;
    }
    
    .footer-subtitle p {
        font-size: 12px;
    }
    
    .footer-center,
    .footer-right {
        padding: 0;
        width: 100%;
    }
    
    .footer-section h4 {
        font-size: 14px;
        margin-bottom: 8px;
    }
    
    .footer-section p {
        font-size: 12px;
        margin: 6px 0;
    }
    
    .footer-info-bar p {
        font-size: 10px;
        padding: 10px 0;
    }
    
    /* Logo final flotante */
    .footer-logo-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 26px;
        height: 28px;
        z-index: 1000;
        background: url('https://placehold.co/26x28') no-repeat;
        background-size: contain;
    }
}

/* Ajustes especÃ­ficos para pantallas muy pequeÃ±as */
@media (max-width: 360px) {
    .container {
        max-width: 360px;
    }
    
    .hero-content {
        left: 10px;
        right: 10px;
        width: calc(100% - 20px);
    }
    
    .about-text {
        font-size: 10px;
        letter-spacing: 1px;
    }
    
    .quality-text-mobile {
        font-size: 7px;
    }
    
    .news-grid,
    .projects-grid .project-item {
        max-width: 160px;
    }
}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>


<script>
// Asegurar que la pÃ¡gina se abra en la parte superior
window.addEventListener('load', function() {
    window.scrollTo(0, 0);
    document.documentElement.scrollTop = 0;
    document.body.scrollTop = 0;
    
    // Iniciar observador de animaciÃ³n
    startNewsObserver();
});

// TambiÃ©n ejecutar cuando el DOM estÃ© listo
document.addEventListener('DOMContentLoaded', function() {
    window.scrollTo(0, 0);
    document.documentElement.scrollTop = 0;
    document.body.scrollTop = 0;
    
    startNewsObserver();
});

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


</script>
</head>
<body>
    
        <div id="cms-root">
        <div id="original-content">
            
<!-- Header Section -->
<header class="header">
    <div class="hero-content">
        <h1 class="hero-title">Una nueva visiÃ³n de la educaciÃ³n.<br> La Scuola aperta al mondo</h1>
        <a href="popap.php" class="admissions-btn">Admisiones</a>
    </div>
</header>

            <!-- Education Levels Section -->
            <section class="education-levels">
                <div class="level-card inicial">
                    <div class="level-content">
                        <h2 class="level-title">Inicial</h2>
                        <p class="level-age">3 meses a 5 aÃ±os</p>
                        <a href="menuInicial.php" class="level-btn btn-green">Ver mas</a>
                    </div>
                </div>
                <div class="level-card primaria">
                    <div class="level-content">
                        <h2 class="level-title">Primaria</h2>
                        <p class="level-age">6 a 12 aÃ±os</p>
                        <a href="Primaria.php" class="level-btn btn-gray">Ver Mas</a>
                    </div>
                </div>
                <div class="level-card secundaria">
                    <div class="level-content">
                        <h2 class="level-title">Secundaria</h2>
                        <p class="level-age">12 a 18 aÃ±os</p>
                        <a href="menuSecundaria.php" class="level-btn btn-red">Ver mas</a>
                    </div>
                </div>
            </section>

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
                    <p class="about-text">La Scuola Italiana di Montevideo desarrolla un programa educativo nacional e internacional que abre las puertas a un mundo plurilingÃ¼e y multicultural.</p>
                    <a href="verMas.php" class="read-more-btn">Leer Mas -></a>
                </div>
            </section>

            <!-- Institutional Quality Section - NUEVA VERSION MODERNA -->
<section class="quality-section">
    <div class="quality-content">
        <h2 class="main-title">Vivir la scuola</h2>

        <!-- Vista desktop/tablet - Nuevo diseÃ±o moderno -->
        <div class="quality-grid-new">
            <!-- Columna izquierda -->
            <div class="quality-column left">
                <div class="quality-item-new">
                    <a href="CursosIdioma.php">
                        <div class="quality-icon-new">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <p class="quality-text-new">Cursos extracurriculares</p>
                        <div class="arrow">â†’</div>
                    </a>
                </div>
                
                <div class="quality-item-new">
                    <a href="Voluntariado.php">
                        <div class="quality-icon-new">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <p class="quality-text-new">voluntariado</p>
                        <div class="arrow">â†’</div>
                    </a>
                </div>
                
                <div class="quality-item-new">
                    <a href="idiomas.php">
                        <div class="quality-icon-new">
                            <i class="fas fa-language"></i>
                        </div>
                        <p class="quality-text-new">Idiomas</p>
                        <div class="arrow">â†’</div>
                    </a>
                </div>
                
                <div class="quality-item-new">
                    <a href="PropuestaEcologica.php">
                        <div class="quality-icon-new">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <p class="quality-text-new">Propuesta<br>ecolÃ³gica</p>
                        <div class="arrow">â†’</div>
                    </a>
                </div>
            </div>
            
            <!-- Centro - Video -->
            <div class="center-video">
                <div class="video-container">
                    <video class="video-thumbnail" controls poster="fotosPrincipales/scuola.jpg">
       <source src="fotosPrincipales/scuola.mp4" type="video/mp4">
   </video>
                    <div class="play-button">
                        <i class="fas fa-play"></i>
                    </div>
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
                        <div class="arrow">â†’</div>
                    </a>
                </div>
                
                <div class="quality-item-new">
                    <a href="menudeportes.php">
                        <div class="quality-icon-new">
                            <i class="fas fa-running"></i>
                        </div>
                        <p class="quality-text-new">Deportes</p>
                        <div class="arrow">â†’</div>
                    </a>
                </div>
                
                <div class="quality-item-new">
                    <a href="Arte.php">
                        <div class="quality-icon-new">
                            <i class="fas fa-atom"></i>
                        </div>
                        <p class="quality-text-new">Arte, ciencia<br>y tecnologÃ­a</p>
                        <div class="arrow">â†’</div>
                    </a>
                </div>
                
                <div class="quality-item-new">
                    <a href="menuIntercambio.php">
                        <div class="quality-icon-new">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <p class="quality-text-new">Intercambios</p>
                        <div class="arrow">â†’</div>
                    </a>
                </div>
            </div>
        </div>

       

            <!-- Projects Section -->
            <section class="projects-section">
                <h2 class="projects-title">Nuestros Proyectos</h2>
                
                <div class="projects-grid">
                    <div class="project-item">
                        <div class="project-content">
                            <h3 class="project-title">Arcimboldo</h3>
                            <p class="project-description">Se trata de una propuesta multidisciplinaria dirigida a estudiantes de 6o aÃ±o de Ciencias BiolÃ³gicas y Social-EconÃ³mico, integrando contenidos de italiano, matemÃ¡tica, literatura, biologÃ­a y quÃ­mica.</p>
                            <a href="arcimboldo.php" class="project-btn">Ver mas</a>
                        </div>
                        <div class="project-image">
                            <img src="fotosPrincipales/archimboldo.jpg" alt="Arcimboldo">
                        </div>
                    </div>
                    
                    <div class="project-item">
                        <div class="project-content">
                            <h3 class="project-title">Heliopolis</h3>
                            <p class="project-description">En el marco del proyecto "HeliÃ³polis" cuyo objetivo es investigar sobre la figura de Francisco Piria y sus conexiones con la alquimia y el estudio de la astronomÃ­a los alumnos visitan la ciudad de PiriÃ¡polis.</p>
                            <a href="heliopolis.php" class="project-btn">Ver Mas</a>
                        </div>
                        <div class="project-image">
                            <img src="fotosPrincipales/heliopolis.jpg" alt="Heliopolis">
                        </div>
                    </div>
                    
                    <div class="project-item">
                        <div class="project-content">
                            <h3 class="project-title">Scuola paradiso ecologico</h3>
                            <p class="project-description">Consiste en un gran plan pluridisciplinar pensado, planificado y elaborado por los propios alumnos con la guÃ­a de sus docentes, que prevÃ© la construcciÃ³n y/o recuperaciÃ³n de diferentes espacios, reforestaciÃ³n, huertas orgÃ¡nicas, etc., en base a principios ecolÃ³gicos respetuosos del medio ambiente.</p>
                            <a href="paradiso.php" class="project-btn">Ver mas</a>
                        </div>
                        <div class="project-image">
                            <img src="fotosPrincipales/paradiso.jpg" alt="Scuola paradiso">
                        </div>
                    </div>
                </div>
            </section>

            <!-- News Section -->
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
                <p class="news-card-text">Consiste en un gran plan pluridisciplinar pensado, planificado y elaborado por los propios alumnos con la guÃ­a de sus docentes, que prevÃ© la construcciÃ³n y/o recuperaciÃ³n de diferentes espacios, reforestaciÃ³n, huertas orgÃ¡nicas, etc., en base a principios ecolÃ³gicos respetuosos del medio ambiente.</p>
                <a href="noticiaDestacada1.php" class="news-card-btn">Ver mas</a>
            </div>
        </div>
        
        <div class="news-card">
            <img src="fotosPrincipales/PrimerDia4.jpg.png" alt="Noticia 2">
            <div class="news-card-content">
                <p class="news-card-text">Consiste en un gran plan pluridisciplinar pensado, planificado y elaborado por los propios alumnos con la guÃ­a de sus docentes, que prevÃ© la construcciÃ³n y/o recuperaciÃ³n de diferentes espacios, reforestaciÃ³n, huertas orgÃ¡nicas, etc., en base a principios ecolÃ³gicos respetuosos del medio ambiente.</p>
                <a href="noticiaDestacada2.php" class="news-card-btn">Ver mas</a>
            </div>
        </div>
        
        <div class="news-card">
            <img src="fotosPrincipales/Comunidad.jpg" alt="Noticia 3">
            <div class="news-card-content">
                <p class="news-card-text">Consiste en un gran plan pluridisciplinar pensado, planificado y elaborado por los propios alumnos con la guÃ­a de sus docentes, que prevÃ© la construcciÃ³n y/o recuperaciÃ³n de diferentes espacios, reforestaciÃ³n, huertas orgÃ¡nicas, etc., en base a principios ecolÃ³gicos respetuosos del medio ambiente.</p>
                <a href="noticiaDestacada3.php" class="news-card-btn">Ver mas</a>
            </div>
        </div>
    </div>
</section>
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

<!-- Footer completo -->
<footer class="footer-bottom-new">
    <div class="footer-container">
        <div class="footer-left">
            <div class="footer-logo">
                <img src="fotosPrincipales/logo2.png" alt="Scuola Italiana di Montevideo" style="height: 120px;">
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
                <h4>Enlaces Ãºtiles</h4>
                <p>PolÃ­tica de privacidad</p>
                <p>Requisitos tÃ©cnicos</p>
                <p>Accesibilidad</p>
            </div>
        </div>
    </div>
    
    <div class="footer-info-bar">
        <p>Desarrollado por el equipo SGE | Proyecto de apoyo 2002 - EE InformÃ¡tica</p>
    </div>
</footer>

        </div>
    </div>

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



/* MEJORAR LA SEPARACIÃ“N Y ANIMACIÃ“N DE NOTICIAS */
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
let lastScrollTop = 0;

window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (!navbar) return;
    
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > lastScrollTop && scrollTop > 100) {
        // Scrolling down y ya bajÃ³ mÃ¡s de 100px
        navbar.style.transform = 'translateY(-100%)';
        navbar.style.opacity = '0';
    } else {
        // Scrolling up o estÃ¡ en el top
        navbar.style.transform = 'translateY(0)';
        navbar.style.opacity = '1';
    }
    
    lastScrollTop = scrollTop;
});
</script>
<script>
// Debug temporal
console.log('ðŸ”„ PÃ¡gina cargada');
console.log('CMS Root:', document.getElementById('cms-root'));
</script>
<script src="cms-admin.js"></script>
</body>
</html>