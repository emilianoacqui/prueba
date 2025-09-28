<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestor de Contenido - Scuola</title>
  <style>
    .template-frame * {
  zoom: 1 !important;
  transform: scale(1) !important;
}
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background: #f5f5f5;
      overflow-x: hidden;
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      left: 0;
      top: 0;
      width: 250px;
      height: 100vh;
      background: linear-gradient(135deg, #2c3e50, #34495e);
      color: white;
      z-index: 1000;
      transition: all 0.3s ease;
    }

    .logo-section {
      padding: 20px;
      text-align: center;
      border-bottom: 1px solid rgba(255,255,255,0.1);
    }

    .logo-circle {
      width: 60px;
      height: 60px;
      background: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 10px;
      font-size: 24px;
      font-weight: bold;
      color: #2c3e50;
    }

    .nav-menu {
      list-style: none;
      padding: 20px 0;
    }

    .nav-item {
      padding: 15px 25px;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .nav-item:hover, .nav-item.active {
      background: rgba(255,255,255,0.1);
      transform: translateX(5px);
    }

    .nav-icon {
      font-size: 18px;
    }

    /* Main Content */
    .main-content {
      margin-left: 250px;
      min-height: 100vh;
      background: white;
    }

    .content-area {
      padding: 30px;
      max-width: 1200px;
    }

    .page-header {
      background: linear-gradient(135deg, #3498db, #2980b9);
      color: white;
      padding: 20px 30px;
      margin: -30px -30px 30px -30px;
    }

    .page-title {
      font-size: 28px;
      font-weight: 300;
      margin-bottom: 10px;
    }

    .page-subtitle {
      opacity: 0.9;
      font-size: 14px;
    }
    /* Template Selection */
    .template-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .template-card {
      background: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      cursor: pointer;
      border: 2px solid transparent;
    }

    .template-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    }

    .template-card.selected {
      border-color: #3498db;
      box-shadow: 0 8px 30px rgba(52, 152, 219, 0.3);
    }

    .template-preview {
      width: 100%;
      height: 200px;
      background: #f8f9fa;
      position: relative;
      overflow: hidden;
    }

    .template-preview img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .template-info {
      padding: 20px;
    }

    .template-name {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 10px;
      color: #2c3e50;
    }

    .template-description {
      color: #7f8c8d;
      font-size: 14px;
      line-height: 1.5;
    }

    .template-actions {
      padding: 15px 20px;
      background: #f8f9fa;
      display: flex;
      gap: 10px;
    }

    .btn {
      padding: 8px 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
      text-align: center;
    }

    .btn-primary {
      background: #3498db;
      color: white;
    }

    .btn-primary:hover {
      background: #2980b9;
    }

    .btn-secondary {
      background: #95a5a6;
      color: white;
    }

    .btn-secondary:hover {
      background: #7f8c8d;
    }

    .btn-success {
      background: #27ae60;
      color: white;
      font-size: 16px;
      padding: 12px 30px;
    }

    .btn-danger {
      background: #e74c3c;
      color: white;
    }

    .btn-danger:hover {
      background: #c0392b;
    }

    .btn-small {
      padding: 6px 12px;
      font-size: 12px;
    }

    .btn-success:hover {
      background: #219a52;
    }

    /* Editor Area */
    .editor-container {
      display: none;
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    .editor-header {
      background: #34495e;
      color: white;
      padding: 15px 20px;
      display: flex;
      justify-content: between;
      align-items: center;
    }

    .editor-title {
      font-size: 18px;
      font-weight: 600;
    }

    .editor-actions {
      display: flex;
      gap: 10px;
    }

    .template-container {
      position: relative;
      background: white;
      overflow-y: auto;
      overflow-x: hidden;
      padding: 20px;
      max-width: 100%;
    }

    .template-frame {
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow-y: auto;
      overflow-x: hidden;
      background: white;
      position: relative;
      width: 100%;
      height: 600px;
      margin-bottom: 20px;
    }
    /* Estilos de edición - SOLO activos cuando está en modo edición */
    .cms-editing .editable-text {
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
    }

    .cms-editing .editable-text:hover {
        background: rgba(52, 152, 219, 0.1);
        outline: 2px dashed #3498db;
        outline-offset: 2px;
    }

    .cms-editing .editable-text.editing {
        background: rgba(52, 152, 219, 0.1);
        outline: 2px solid #3498db;
    }

    .cms-editing .editable-image {
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
    }

    .cms-editing .editable-image:hover {
        opacity: 0.8;
        outline: 3px dashed #3498db;
        outline-offset: 2px;
    }

    .cms-editing .hero-background-container:hover {
        opacity: 0.9;
        outline: 3px dashed #F39C12;
        outline-offset: -5px;
    }

    .cms-editing .edit-tooltip {
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
        background: #2c3e50;
        color: white;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 12px;
        opacity: 0;
        transition: opacity 0.3s ease;
        white-space: nowrap;
        z-index: 1000;
    }

    .cms-editing .editable-text:hover .edit-tooltip,
    .cms-editing .editable-image:hover .edit-tooltip {
        opacity: 1;
    }

    /* History Panel */
    .history-list {
      list-style: none;
      padding: 20px;
    }

    .history-item {
      background: white;
      padding: 15px;
      margin-bottom: 10px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      border-left: 4px solid #3498db;
    }

    .history-date {
      font-size: 12px;
      color: #7f8c8d;
    }

    .history-action {
      font-weight: 600;
      color: #2c3e50;
    }

    .history-detail {
      font-size: 14px;
      color: #7f8c8d;
      margin-top: 5px;
    }

    /* Modal for image upload */
    .modal {
      display: none;
      position: fixed;
      z-index: 2000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
    }

    .modal-content {
      background: white;
      margin: 10% auto;
      padding: 30px;
      width: 400px;
      border-radius: 12px;
      text-align: center;
    }

    .url-input {
      width: 100%;
      padding: 12px;
      border: 2px solid #ddd;
      border-radius: 6px;
      margin: 15px 0;
      font-size: 14px;
    }

    .url-input:focus {
      outline: none;
      border-color: #3498db;
    }

    /* Alert messages */
    .alert {
      padding: 15px;
      margin: 20px 0;
      border-radius: 8px;
      font-size: 14px;
    }

    .alert-success {
      background: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }

    .alert-info {
      background: #d1ecf1;
      color: #0c5460;
      border: 1px solid #bee5eb;
    }

    .btn.active {
      background: #2c3e50;
      color: white;
    }

    .btn-small.active {
      background: #2c3e50;
      color: white;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <nav class="sidebar">
    <div class="logo-section">
      <div class="logo-circle">G</div>
      <h3>Gestor</h3>
    </div>
    
    <ul class="nav-menu">
      <li class="nav-item active" data-section="agregar" onclick="showSection('agregar', event)">
        <span class="nav-icon">➕</span>
        <span>Agregar</span>
      </li>
      <li class="nav-item" data-section="editar" onclick="showSection('editar', event)">
        <span class="nav-icon">✏️</span>
        <span>Editar</span>
      </li>
      <li class="nav-item" data-section="visitas" onclick="showSection('visitas', event)">
        <span class="nav-icon">📊</span>
        <span>Visitas</span>
      </li>
      <li class="nav-item" data-section="historial" onclick="showSection('historial', event)">
        <span class="nav-icon">📜</span>
        <span>Historial</span>
      </li>
      <li class="nav-item" data-section="pagina" onclick="showSection('pagina', event)">
        <span class="nav-icon">👁️</span>
        <span>Página</span>
      </li>
    </ul>
  </nav>

  <!-- Main Content -->
  <main class="main-content">
    <!-- Agregar Contenido Section -->
    <section id="agregar" class="content-area">
      <div class="page-header">
        <h1 class="page-title">Agregar Contenido</h1>
        <p class="page-subtitle">Selecciona una plantilla y personalízala para tu página</p>
      </div>

      <div id="template-selection">
        <h3 style="margin-bottom: 20px; color: #2c3e50;">Seleccionar Plantilla</h3>
        
        <div class="template-grid">
          <div class="template-card" data-template="deportes" onclick="selectTemplate('deportes')">
            <div class="template-preview">
              <div style="background: linear-gradient(45deg, #DC343C, #049B4C); height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">🏃‍♂️</div>
            </div>
            <div class="template-info">
              <div class="template-name">Plantilla 1</div>
              <div class="template-description">Ideal para páginas de actividades deportivas, atletismo y actividades físicas del colegio.</div>
            </div>
            <div class="template-actions">
              <button class="btn btn-primary" onclick="selectTemplate('deportes')">Seleccionar</button>
              <button class="btn btn-secondary" onclick="previewTemplate('deportes')">Vista Previa</button>
            </div>
          </div>

          <div class="template-card" data-template="intercambio" onclick="selectTemplate('intercambio')">
            <div class="template-preview">
              <div style="background: linear-gradient(45deg, #0A2452, #DC343C); height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">🌍</div>
            </div>
            <div class="template-info">
              <div class="template-name">Plantilla 2</div>
              <div class="template-description">Perfecta para mostrar programas de intercambio estudiantil y actividades internacionales.</div>
            </div>
            <div class="template-actions">
              <button class="btn btn-primary" onclick="selectTemplate('intercambio')">Seleccionar</button>
              <button class="btn btn-secondary" onclick="previewTemplate('intercambio')">Vista Previa</button>
            </div>
          </div>

          <div class="template-card" data-template="general" onclick="selectTemplate('general')">
            <div class="template-preview">
              <div style="background: linear-gradient(45deg, #1B2F6F, #D9D9D9); height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">📄</div>
            </div>
            <div class="template-info">
              <div class="template-name">Plantilla 3</div>
              <div class="template-description">Diseño versátil para contenido general, noticias y información institucional.</div>
            </div>
            <div class="template-actions">
              <button class="btn btn-primary" onclick="selectTemplate('general')">Seleccionar</button>
              <button class="btn btn-secondary" onclick="previewTemplate('general')">Vista Previa</button>
            </div>
          </div>

          <div class="template-card" data-template="fotos" onclick="selectTemplate('fotos')">
            <div class="template-preview">
              <div style="background: linear-gradient(45deg, #0A2452, #2c3e50); height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px;">📸</div>
            </div>
            <div class="template-info">
              <div class="template-name">Plantilla Galería</div>
              <div class="template-description">Especial para mostrar galerías de fotos de eventos y actividades escolares.</div>
            </div>
            <div class="template-actions">
              <button class="btn btn-primary" onclick="selectTemplate('fotos')">Seleccionar</button>
              <button class="btn btn-secondary" onclick="previewTemplate('fotos')">Vista Previa</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Editor Container -->
      <div id="editor-container" class="editor-container">
        <div class="editor-header">
          <div class="editor-title">Editando: <span id="current-template-name"></span></div>
          <div class="editor-actions">
            <button class="btn btn-secondary" onclick="cancelEdit()">Cancelar</button>
            <button class="btn btn-success" onclick="savePage()">Agregar Página</button>
          </div>
        </div>
        <div class="page-name-section" style="padding: 15px 20px; background: #f8f9fa; border-bottom: 1px solid #ddd;">
  <label for="page-name-input" style="display: block; margin-bottom: 5px; font-weight: 600;">Nombre de la página:</label>
  <input type="text" id="page-name-input" placeholder="Ej: Mi página sobre..." style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
</div>
        
        <div class="template-container">
          <div id="template-frame" class="template-frame">
            <!-- Template content will be loaded here -->
          </div>
        </div>
      </div>
    </section>
    <!-- Other Sections -->
    <section id="editar" class="content-area" style="display: none;">
      <div class="page-header">
        <h1 class="page-title">Editar Contenido</h1>
        <p class="page-subtitle">Modifica o elimina el contenido existente de tus páginas</p>
      </div>
      
      <div id="pages-list-container">
        <h3 style="margin-bottom: 20px; color: #2c3e50;">Páginas Creadas</h3>
        <div style="margin-bottom: 20px;">
          <button class="btn btn-primary btn-small" onclick="setModo('editar')">✏️ Editar</button>
          <button class="btn btn-danger btn-small" onclick="setModo('eliminar')">🗑️ Eliminar</button>
          <div id="edit-page-btn-container" style="margin: 40px 0 20px 0; display: none;">
            <button class="btn btn-success" style="width: 100%; font-size: 16px;" onclick="goToIndexDirectly()">
              🌐 Ir a Sitio Principal
            </button>
          </div>
        </div>

        <div id="pages-list" class="template-grid">
          <!-- Pages will be loaded here -->
        </div>
        <div id="no-pages-message" class="alert alert-info">
          No tienes páginas creadas aún. Ve a la sección "Agregar" para crear tu primera página.
        </div>
      </div>
    </section>

    <section id="visitas" class="content-area" style="display: none;">
      <div class="page-header">
        <h1 class="page-title">Estadísticas de Visitas</h1>
        <p class="page-subtitle">Analiza el tráfico de tus páginas</p>
      </div>
      <div class="alert alert-info">
        Las estadísticas de visitas se implementarán con datos JSON como mencionaste.
      </div>
    </section>
    <section id="historial" class="content-area" style="display: none;">
      <div class="page-header">
        <h1 class="page-title">Historial de Cambios</h1>
        <p class="page-subtitle">Revisa todos los cambios realizados</p>
      </div>
      <ul id="history-list" class="history-list">
        <li class="history-item">
          <div class="history-date">17/09/2025 - 10:30</div>
          <div class="history-action">Sistema iniciado</div>
          <div class="history-detail">Gestor de contenido inicializado correctamente</div>
        </li>
      </ul>
    </section>

    <section id="pagina" class="content-area" style="display: none;">
    <div class="page-header">
        <h1 class="page-title">Vista del Sitio Web</h1>
        <p class="page-subtitle">Navega por tu sitio web principal</p>
    </div>
    
    <div style="margin-bottom: 20px;">
        <button class="btn btn-primary" onclick="refreshSiteView()">🔄 Actualizar Vista</button>
        <button class="btn btn-secondary" onclick="openSiteInNewTab()">🌐 Abrir en Nueva Pestaña</button>
    </div>
    
    <div class="site-view-container">
        <iframe id="site-frame" src="index.php" width="100%" height="600" 
                style="border: 1px solid #ddd; border-radius: 8px;"></iframe>
    </div>
</section>
  </main>

  <!-- Image URL Modal -->
  <div id="imageModal" class="modal">
    <div class="modal-content">
      <h3>Cambiar Imagen</h3>
      <p>Ingresa la URL de la nueva imagen:</p>
      <input type="text" id="imageUrl" class="url-input" placeholder="https://ejemplo.com/imagen.jpg">
      <div style="margin-top: 20px;">
        <button class="btn btn-primary" onclick="updateImage()">Actualizar</button>
        <button class="btn btn-secondary" onclick="closeImageModal()">Cancelar</button>
      </div>
    </div>
  </div>
  <script>
    let modoActual = "editar"; 
    let currentTemplate = null;
    let historyLog = [];
    let savedPages = [];
    let currentEditingImage = null;
    let editingPageId = null; 

    async function loadPagesFromServer() {
    try {
        console.log('🔄 Cargando páginas del servidor...');
        const response = await fetch('pages_manager.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'action=getAll'
        });
        
        if (!response.ok) {
            throw new Error('Error del servidor: ' + response.status);
        }
        
        const pages = await response.json();
        console.log('✅ Páginas cargadas:', pages);
        
        // 🔥 FILTRAR: Mostrar solo páginas creadas, no las existentes editadas
        return pages.filter(page => page.template !== 'existing_page');
        
    } catch (error) {
        console.error('Error cargando páginas:', error);
        const localPages = JSON.parse(localStorage.getItem('savedPages')) || [];
        // 🔥 Filtrar también en local
        return localPages.filter(page => page.template !== 'existing_page');
    }
}

// Función para guardar página en el servidor
async function savePageToServer(pageData) {
    try {
        console.log('💾 Guardando página en servidor...', pageData);
        const response = await fetch('pages_manager.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `action=save&pageData=${encodeURIComponent(JSON.stringify(pageData))}`
        });
        
        if (!response.ok) {
            throw new Error('Error del servidor: ' + response.status);
        }
        
        const result = await response.json();
        console.log('✅ Página guardada en servidor:', result);
        return result;
    } catch (error) {
        console.error('❌ Error guardando en servidor:', error);
        // Si falla, guarda en localStorage como respaldo
        const localPages = JSON.parse(localStorage.getItem('savedPages')) || [];
        localPages.push(pageData);
        //localStorage.setItem('savedPages', JSON.stringify(localPages));
        console.log('📦 Página guardada en localStorage como respaldo');
        return { success: false, message: 'Guardado local como respaldo' };
    }
}


    document.addEventListener('DOMContentLoaded', async function() {
    console.log('🚀 Gestor de contenido iniciado');
    
    // CARGAR PÁGINAS DEL SERVIDOR
    savedPages = await loadPagesFromServer();
    console.log('📂 Páginas disponibles:', savedPages);
    
    addToHistory('Sistema iniciado', 'Gestor de contenido cargado correctamente');
    
    // Inicializar modo activo
    setModo('editar');
    
    // Si estamos en la sección de editar, actualizar la lista
    if (document.getElementById('editar').style.display !== 'none') {
        loadPagesList();
    }
});

    function openInSite(pageId) {
      // Abrir la página específica en modo visualización
      window.open('index.php?cms_admin_token=true&page_id=' + pageId, '_blank');
    }

    function openFullPageEditor() {
      if (!editingPageId) {
        alert("Primero selecciona una página para editar.");
        return;
      }
      // Abrir el index con los parámetros para editar
      window.open('index.php?cms_admin_token=true&page_id=' + editingPageId, '_blank');
    }

    function setModo(modo) {
      modoActual = modo;
      loadPagesList(); // refrescar la lista
      
      // Actualizar texto de botones
      const editBtn = document.querySelector('[onclick="setModo(\'editar\')"]');
      const deleteBtn = document.querySelector('[onclick="setModo(\'eliminar\')"]');
      
      if (modo === "editar") {
        editBtn.classList.add('active');
        deleteBtn.classList.remove('active');
        document.getElementById('edit-page-btn-container').style.display = "block";
      } else {
        editBtn.classList.remove('active');
        deleteBtn.classList.add('active');
        document.getElementById('edit-page-btn-container').style.display = "none";
      }
    }
    const templates = {
       deportes: {
        name: 'Plantilla Columnas',
        html: `
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
          <section class="hero editable-image" style="background-image: url('https://images.unsplash.com/photo-1497486751825-1233686d5d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'); background-size: cover; background-position: center;">
              <div class="hero-overlay"></div>
              <div class="hero-content">
                  <h1 class="hero-title editable-text">Título Principal</h1>
                  <p class="hero-subtitle editable-text">Subtítulo descriptivo que explica el contenido de esta página</p>
              </div>
          </section>

          <!-- Main Content -->
          <main class="main-content">
              <div class="container">
                  <!-- Text Introduction -->
                  <section class="text-intro">
                      <div class="intro-grid">
                          <div class="intro-text">
                              <h2 class="editable-text">Encabezado de sección</h2>
                              <p class="intro-description editable-text">Este es un párrafo de introducción donde puedes escribir información detallada sobre el contenido que deseas presentar. Puedes incluir múltiples oraciones y desarrollar ideas completas.</p>
                              <p class="intro-description editable-text">Segundo párrafo para continuar desarrollando el tema o agregar información complementaria que consideres importante para tus visitantes.</p>
                          </div>
                          <div class="intro-visual">
                              <div class="visual-card">
                                  <img class="editable-image" src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Imagen de apoyo">
                              </div>
                          </div>
                      </div>
                  </section>

                  <!-- Features Section -->
                  <section class="features">
                      <div class="container">
                          <h2 class="section-title editable-text">Tres puntos importantes</h2>
                          <div class="features-grid">
                              <div class="feature-card">
                                  <h3 class="editable-text">Primer punto</h3>
                                  <p class="editable-text">Descripción detallada del primer aspecto importante que deseas destacar en tu contenido.</p>
                              </div>
                              <div class="feature-card">
                                  <h3 class="editable-text">Segundo punto</h3>
                                  <p class="editable-text">Información sobre el segundo elemento clave que quieres que los visitantes conozcan.</p>
                              </div>
                              <div class="feature-card">
                                  <h3 class="editable-text">Tercer punto</h3>
                                  <p class="editable-text">Detalles sobre el tercer aspecto relevante para completar la información principal.</p>
                              </div>
                          </div>
                      </div>
                  </section>

                  <!-- Content Section -->
                  <section class="content-section">
                      <div class="container">
                          <div class="content-grid">
                              <div class="content-text">
                                  <h2 class="editable-text">Sección adicional</h2>
                                  <p class="editable-text">Aquí puedes agregar más contenido textual. Este espacio está diseñado para información más extensa donde puedes desarrollar temas específicos, compartir detalles adicionales o proporcionar contexto importante.</p>
                                  <p class="editable-text">Puedes usar este párrafo para continuar con ideas relacionadas o introducir nuevos conceptos que complementen el tema principal de tu página.</p>
                              </div>
                              <div class="content-image">
                                  <img class="editable-image" src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Imagen complementaria">
                              </div>
                          </div>
                      </div>
                  </section>
              </div>
          </main>
        `,
        css: `
        html, body {
  width: 100%;
  max-width: 100vw;
  overflow-x: hidden;
  font-size: 16px;
  margin: 0;
  padding: 0;
}

* {
  max-width: 100%;
}

.container {
  max-width: 1200px;
  width: 100%;
  margin: 0 auto;
  padding: 0 20px;
}
          * {
              margin: 0;
              padding: 0;
              box-sizing: border-box;
          }

          body {
              font-family: 'Merriweather Sans', sans-serif;
              line-height: 1.6;
              color: #333;
              overflow-x: hidden;
          }

          .container {
              max-width: 1200px;
              margin: 0 auto;
              padding: 0 20px;
          }

          /* Navigation (NO EDITABLE) */
          .navbar {
              position: relative;
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

          /* Hero Section */
          .hero {
    position: relative;
    top: -80px;  /* Mover hacia arriba para compensar el header */
    height: calc(100vh + 80px);  /* Aumentar altura para compensar */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    margin-bottom: -80px;  /* Evitar espacio extra */
}

          .hero-background-container {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              z-index: 1;
          }

          .hero-overlay {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background: transparent;
              z-index: 2;
          }

          .hero-content {
              position: relative;
              z-index: 3;
              text-align: center;
              color: white;
              animation: fadeInUp 1s ease-out;
          }

          .hero-breadcrumb {
              font-size: 14px;
              margin-bottom: 20px;
              opacity: 0.9;
          }

          .hero-breadcrumb .current {
              color: #F39C12;
              font-weight: 600;
          }

          .hero-title {
              font-size: clamp(3rem, 8vw, 6rem);
              font-weight: 700;
              margin-bottom: 20px;
              font-family: 'Merriweather', serif;
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

          /* Sport Introduction */
          .sport-intro {
              padding: 100px 0;
              background: white;
          }

          .intro-grid {
              display: grid;
              grid-template-columns: 1fr 1fr;
              gap: 80px;
              align-items: center;
          }

          .section-tag {
              display: inline-block;
              background: linear-gradient(135deg, #3B69BA, #DC343C);
              color: white;
              padding: 8px 16px;
              border-radius: 20px;
              font-size: 12px;
              font-weight: 600;
              letter-spacing: 1px;
              margin-bottom: 20px;
          }

          .intro-text h2 {
              font-size: 2.5rem;
              font-weight: 700;
              color: #3B69BA;
              margin-bottom: 30px;
              font-family: 'Merriweather', serif;
              line-height: 1.2;
          }

          .intro-description {
              font-size: 1.1rem;
              color: #666;
              margin-bottom: 40px;
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

          .visual-overlay {
              position: absolute;
              top: 20px;
              right: 20px;
              width: 60px;
              height: 60px;
              background: rgba(243, 156, 18, 0.9);
              border-radius: 50%;
              display: flex;
              align-items: center;
              justify-content: center;
          }

          .visual-overlay i {
              color: white;
              font-size: 24px;
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
              font-family: 'Merriweather', serif;
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
              border-top-color: #F39C12;
              box-shadow: 0 20px 60px rgba(0,0,0,0.15);
          }

          .feature-icon {
              width: 80px;
              height: 80px;
              background: linear-gradient(135deg, #3B69BA, #DC343C);
              border-radius: 50%;
              display: flex;
              align-items: center;
              justify-content: center;
              margin: 0 auto 20px;
              transition: all 0.3s ease;
          }

          .feature-card:hover .feature-icon {
              transform: scale(1.1);
          }

          .feature-icon i {
              color: white;
              font-size: 32px;
          }

          .feature-card h3 {
              font-size: 1.3rem;
              font-weight: 600;
              color: #3B69BA;
              margin-bottom: 15px;
          }

          .feature-card p {
              color: #666;
              line-height: 1.6;
          }

          /* Gallery Section */
          .gallery {
              padding: 100px 0;
              background: white;
          }

          .gallery-grid {
              display: grid;
              grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
              gap: 20px;
          }

          .gallery-item {
              position: relative;
              border-radius: 15px;
              overflow: hidden;
              cursor: pointer;
              transition: all 0.3s ease;
          }

          .gallery-item.large {
              grid-column: span 2;
              grid-row: span 2;
          }

          .gallery-item:hover {
              transform: scale(1.02);
          }

          .gallery-item img {
              width: 100%;
              height: 250px;
              object-fit: cover;
              transition: all 0.3s ease;
          }

          .gallery-item.large img {
              height: 520px;
          }

          .gallery-overlay {
              position: absolute;
              bottom: 0;
              left: 0;
              right: 0;
              background: linear-gradient(transparent, rgba(0,0,0,0.8));
              color: white;
              padding: 30px 20px 20px;
              transform: translateY(100%);
              transition: all 0.3s ease;
          }

          .gallery-item:hover .gallery-overlay {
              transform: translateY(0);
          }

          .gallery-overlay h4 {
              font-size: 1.1rem;
              font-weight: 600;
              margin-bottom: 5px;
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
              .intro-grid {
                  grid-template-columns: 1fr;
                  gap: 40px;
              }

              .features-grid {
                  grid-template-columns: 1fr;
              }

              .gallery-item.large {
                  grid-column: span 1;
                  grid-row: span 1;
              }

              .gallery-item.large img {
                  height: 250px;
              }
          }

          @keyframes fadeIn {
              from { opacity: 0; }
              to { opacity: 1; }
          }

          /* Deshabilitar selección de texto para visitantes */
          * {
              user-select: none !important;
              -webkit-user-select: none !important;
              -moz-user-select: none !important;
          }

          input, textarea {
              user-select: text !important;
          }

          /* Asegurar que los enlaces sigan siendo funcionales */
          a {
              cursor: pointer;
          }
              
        `
      },
      intercambio: {
        name: 'Plantilla Centrada',
        html: `
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
          <section class="hero-centered editable-image" style="background-image: url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'); background-size: cover; background-position: center;">
              <div class="hero-overlay"></div>
              <div class="hero-content-center">
                  <h1 class="hero-title-center editable-text">Título Centrado</h1>
                  <p class="hero-subtitle-center editable-text">Descripción centrada del contenido principal</p>
              </div>
          </section>

          <!-- Main Content -->
          <main class="main-centered">
              <div class="container">
                  <!-- Full Width Text -->
                  <section class="full-text">
                      <div class="text-container">
                          <h2 class="centered-title editable-text">Encabezado Principal</h2>
                          <p class="centered-text editable-text">Este es un párrafo centrado con contenido principal. Aquí puedes escribir información extensa sobre el tema que deseas presentar. El diseño centrado ayuda a enfocar la atención del lector en el contenido más importante.</p>
                      </div>
                  </section>

                  <!-- Quote Section -->
                  <section class="quote-section">
                      <div class="quote-container">
                          <blockquote class="main-quote editable-text">"Una cita o frase destacada que resuma la esencia del contenido que estás presentando en tu página web."</blockquote>
                          <cite class="quote-author editable-text">- Autor de la cita</cite>
                      </div>
                  </section>

                  <!-- Two Column Text -->
                  <section class="two-columns">
                      <div class="columns-container">
                          <div class="column">
                              <h3 class="column-title editable-text">Primera columna</h3>
                              <p class="column-text editable-text">Contenido de la primera columna. Puedes usar este espacio para desarrollar un aspecto específico del tema principal.</p>
                          </div>
                          <div class="column">
                              <h3 class="column-title editable-text">Segunda columna</h3>
                              <p class="column-text editable-text">Contenido de la segunda columna. Este espacio es ideal para información complementaria o contrastante.</p>
                          </div>
                      </div>
                  </section>

                  <!-- Final Text Section -->
                  <section class="final-text">
                      <div class="text-container">
                          <h2 class="centered-title editable-text">Sección de cierre</h2>
                          <p class="centered-text editable-text">Párrafo final donde puedes resumir los puntos clave o hacer un llamado a la acción para tus lectores.</p>
                      </div>
                  </section>
              </div>
          </main>
        `,
        css: `
        
          * { margin: 0; padding: 0; box-sizing: border-box; }
          body { font-family: 'Merriweather Sans', sans-serif; line-height: 1.6; color: #333; }
          .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
 
          .navbar { position: relative; background: rgba(10, 36, 82, 0.5); z-index: 1000; height: 80px; }
          .nav-container { display: flex; justify-content: space-between; align-items: center; padding: 15px 5%; max-width: 1200px; margin: 0 auto;  height: 100%; }
          .nav-logo img { height: 50px; width: auto; }
          .nav-menu-button { display: flex; flex-direction: column; cursor: pointer; padding: 8px; }
          .nav-menu-button span { width: 25px; height: 3px; background: white; margin: 3px 0; border-radius: 2px; }

            /* Navigation */
          .hero-centered { 
    position: relative;
    top: -80px;
    height: calc(70vh + 80px); 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    margin-bottom: -80px;
}         

          .hero-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(27, 47, 111, 0.3); }
          .hero-content-center { text-align: center; color: white; z-index: 2; position: relative; max-width: 800px; padding: 0 20px; }
          .hero-title-center { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
          .hero-subtitle-center { font-size: 1.3rem; opacity: 0.95; }

          /* Main Content Centered */
          .main-centered { padding: 80px 0; }
          
          .full-text, .final-text { margin: 60px 0; }
          .text-container { max-width: 800px; margin: 0 auto; text-align: center; }
          .centered-title { font-size: 2.2rem; color: #1B2F6F; margin-bottom: 30px; }
          .centered-text { font-size: 1.1rem; color: #555; line-height: 1.8; }

          /* Quote Section */
          .quote-section { background: #f8f9fa; padding: 60px 0; margin: 60px 0; }
          .quote-container { max-width: 700px; margin: 0 auto; text-align: center; }
          .main-quote { font-size: 1.5rem; font-style: italic; color: #1B2F6F; line-height: 1.6; border: none; margin-bottom: 20px; }
          .quote-author { font-size: 1rem; color: #DC343C; font-weight: 600; }

          /* Two Columns */
          .two-columns { margin: 60px 0; }
          .columns-container { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; max-width: 900px; margin: 0 auto; }
          .column-title { font-size: 1.4rem; color: #1B2F6F; margin-bottom: 20px; }
          .column-text { color: #555; line-height: 1.7; }

          /* Footer */
          .footer { background: #1B2F6F; color: white; padding: 40px 0; text-align: center; }
          .footer-logo { height: 60px; margin-bottom: 15px; }

          @media (max-width: 768px) {
              .columns-container { grid-template-columns: 1fr; gap: 40px; }
              .hero-title-center { font-size: 2.5rem; }
          }
        `
      },
      general: {
        name: 'Plantilla Lista',
        html: `
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
          <section class="hero-list editable-image" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'); background-size: cover; background-position: center;">
              <div class="hero-overlay"></div>
              <div class="hero-content-left">
                  <h1 class="hero-title-left editable-text">Título de la Lista</h1>
                  <p class="hero-subtitle-left editable-text">Una colección organizada de elementos o información</p>
              </div>
          </section>

          <!-- Main Content -->
          <main class="main-list">
              <div class="container">
                  <!-- Introduction -->
                  <section class="list-intro">
                      <h2 class="intro-title editable-text">Introducción</h2>
                      <p class="intro-text editable-text">Este párrafo introductorio explica el propósito de la lista que se presenta a continuación. Puedes usar este espacio para dar contexto o explicar la importancia de los elementos listados.</p>
                  </section>

                  <!-- Main List -->
                  <section class="main-list-section">
                      <div class="list-container">
                          <article class="list-item">
                              <div class="item-number">01</div>
                              <div class="item-content">
                                  <h3 class="item-title editable-text">Primer elemento</h3>
                                  <p class="item-description editable-text">Descripción detallada del primer elemento de la lista. Aquí puedes explicar las características importantes, beneficios o detalles relevantes.</p>
                              </div>
                          </article>

                          <article class="list-item">
                              <div class="item-number">02</div>
                              <div class="item-content">
                                  <h3 class="item-title editable-text">Segundo elemento</h3>
                                  <p class="item-description editable-text">Información sobre el segundo elemento. Mantén un estilo consistente en la longitud y tipo de información para cada elemento.</p>
                              </div>
                          </article>

                          <article class="list-item">
                              <div class="item-number">03</div>
                              <div class="item-content">
                                  <h3 class="item-title editable-text">Tercer elemento</h3>
                                  <p class="item-description editable-text">Detalles del tercer elemento de tu lista. Puedes agregar más elementos siguiendo la misma estructura.</p>
                              </div>
                          </article>

                          <article class="list-item">
                              <div class="item-number">04</div>
                              <div class="item-content">
                                  <h3 class="item-title editable-text">Cuarto elemento</h3>
                                  <p class="item-description editable-text">Descripción del cuarto elemento. La numeración automática mantiene el orden visual claro.</p>
                              </div>
                          </article>

                          <article class="list-item">
                              <div class="item-number">05</div>
                              <div class="item-content">
                                  <h3 class="item-title editable-text">Quinto elemento</h3>
                                  <p class="item-description editable-text">Información sobre el quinto y último elemento de esta lista de ejemplo.</p>
                              </div>
                          </article>
                      </div>
                  </section>

                  <!-- Conclusion -->
                  <section class="list-conclusion">
                      <div class="conclusion-box">
                          <h2 class="conclusion-title editable-text">Conclusión</h2>
                          <p class="conclusion-text editable-text">Párrafo de cierre que resume los puntos clave de la lista o proporciona una reflexión final sobre el tema tratado.</p>
                      </div>
                  </section>
              </div>
          </main>
        `,
        css: `
          * { margin: 0; padding: 0; box-sizing: border-box; }
          body { font-family: 'Merriweather Sans', sans-serif; line-height: 1.6; color: #333; }
          .container { max-width: 1000px; margin: 0 auto; padding: 0 20px; }

          
          .nav-container { display: flex; justify-content: space-between; align-items: center; padding: 15px 5%; max-width: 1200px; margin: 0 auto; }
          .nav-logo img { height: 50px; width: auto; }
          .nav-menu-button { display: flex; flex-direction: column; cursor: pointer; padding: 8px; }
          .nav-menu-button span { width: 25px; height: 3px; background: white; margin: 3px 0; border-radius: 2px; }

          /* Navigation */
          .hero-list { 
    position: relative;
    top: -80px;
    height: calc(60vh + 80px); 
    display: flex; 
    align-items: center; 
    padding-left: 5%; 
    margin-bottom: -80px;
}
          .navbar { position: relative; background: rgba(10, 36, 82, 0.5); z-index: 1000; height: 80px; }
          .nav-container { display: flex; justify-content: space-between; align-items: center; padding: 15px 5%; max-width: 1200px; margin: 0 auto;  height: 100%; }
          .hero-content-left { position: relative; color: white; z-index: 2; max-width: 600px; }
          .hero-title-left { font-size: 3rem; font-weight: 700; margin-bottom: 15px; }
          .hero-subtitle-left { font-size: 1.2rem; opacity: 0.95; }

          /* Main List Content */
          .main-list { padding: 80px 0; }
          
          .list-intro { margin-bottom: 60px; text-align: center; }
          .intro-title { font-size: 2rem; color: #1B2F6F; margin-bottom: 20px; }
          .intro-text { font-size: 1.1rem; color: #555; max-width: 700px; margin: 0 auto; }

          /* List Items */
          .main-list-section { margin-bottom: 60px; }
          .list-container { max-width: 800px; margin: 0 auto; }
          .list-item { display: flex; margin-bottom: 40px; padding: 30px; background: white; border-left: 4px solid #DC343C; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border-radius: 8px; }
          .item-number { font-size: 2rem; font-weight: 700; color: #1B2F6F; margin-right: 30px; min-width: 60px; }
          .item-content { flex: 1; }
          .item-title { font-size: 1.3rem; color: #1B2F6F; margin-bottom: 10px; }
          .item-description { color: #555; line-height: 1.7; }

          /* Conclusion */
          .list-conclusion { text-align: center; }
          .conclusion-box { background: linear-gradient(135deg, #fd8b13, #049B4C); color: white; padding: 40px; border-radius: 15px; max-width: 700px; margin: 0 auto; }
          .conclusion-title { font-size: 1.8rem; margin-bottom: 15px; }
          .conclusion-text { font-size: 1.1rem; opacity: 0.95; }

          /* Footer */
          .footer { background: #1B2F6F; color: white; padding: 40px 0; text-align: center; }
          .footer-logo { height: 60px; margin-bottom: 15px; }

          @media (max-width: 768px) {
              .list-item { flex-direction: column; text-align: center; }
              .item-number { margin-right: 0; margin-bottom: 15px; }
              .hero-title-left { font-size: 2.2rem; }
          }
        `
      },
      fotos: {
        name: 'Plantilla Galería',
        html: `
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
          <section class="hero-gallery editable-image" style="background-image: url('https://images.unsplash.com/photo-1452587925148-ce544e77e70d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'); background-size: cover; background-position: center;">
              <div class="hero-overlay"></div>
              <div class="hero-content-gallery">
                  <h1 class="hero-title-gallery editable-text">Galería Visual</h1>
                  <p class="hero-subtitle-gallery editable-text">Una colección de imágenes organizadas visualmente</p>
              </div>
          </section>

          <!-- Main Content -->
          <main class="main-gallery">
              <div class="container">
                  <!-- Gallery Description -->
                  <section class="gallery-intro">
                      <h2 class="gallery-title editable-text">Descripción de la galería</h2>
                      <p class="gallery-description editable-text">Aquí puedes escribir una introducción sobre las imágenes que se muestran en esta galería. Explica el contexto, la temática o la importancia de estas fotografías.</p>
                  </section>

                  <!-- Photo Grid -->
                  <section class="photo-grid">
                      <div class="grid-container">
                          <div class="photo-item large">
                              <img class="editable-image" src="https://images.unsplash.com/photo-1523050854058-8df90110c9d1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Imagen principal">
                              <div class="photo-overlay">
                                  <h3 class="photo-title editable-text">Imagen destacada</h3>
                                  <p class="photo-caption editable-text">Descripción de la imagen principal</p>
                              </div>
                          </div>
                          
                          <div class="photo-item">
                              <img class="editable-image" src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Imagen 1">
                              <div class="photo-overlay">
                                  <h3 class="photo-title editable-text">Primera imagen</h3>
                              </div>
                          </div>
                          
                          <div class="photo-item">
                              <img class="editable-image" src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Imagen 2">
                              <div class="photo-overlay">
                                  <h3 class="photo-title editable-text">Segunda imagen</h3>
                              </div>
                          </div>
                          
                          <div class="photo-item">
                              <img class="editable-image" src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Imagen 3">
                              <div class="photo-overlay">
                                  <h3 class="photo-title editable-text">Tercera imagen</h3>
                              </div>
                          </div>
                          
                          <div class="photo-item">
                              <img class="editable-image" src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Imagen 4">
                              <div class="photo-overlay">
                                  <h3 class="photo-title editable-text">Cuarta imagen</h3>
                              </div>
                          </div>
                          
                          <div class="photo-item">
                              <img class="editable-image" src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Imagen 5">
                              <div class="photo-overlay">
                                  <h3 class="photo-title editable-text">Quinta imagen</h3>
                              </div>
                          </div>
                      </div>
                  </section>

                  <!-- Gallery Footer Text -->
                  <section class="gallery-footer-text">
                      <div class="footer-text-container">
                          <h2 class="footer-text-title editable-text">Información adicional</h2>
                          <p class="footer-text-content editable-text">Espacio para agregar información adicional sobre las imágenes, créditos de fotografía, o cualquier contexto relevante que complemente la galería visual.</p>
                      </div>
                  </section>
              </div>
          </main>

        `,
        css: `
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

          /* Photo Grid */
          .grid-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 50px; }
          .photo-item { position: relative; border-radius: 10px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease; }
          .photo-item:hover { transform: scale(1.05); }
          .photo-item.large { grid-column: span 2; grid-row: span 2; }
          .photo-item img { width: 100%; height: 250px; object-fit: cover; }
          .photo-item.large img { height: 520px; }
          
          .photo-overlay { position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 20px; transform: translateY(100%); transition: transform 0.3s ease; }
          .photo-item:hover .photo-overlay { transform: translateY(0); }
          .photo-title { font-size: 1.1rem; font-weight: 600; margin-bottom: 5px; }
          .photo-caption { font-size: 0.9rem; opacity: 0.9; }

          /* Gallery Footer Text */
          .gallery-footer-text { background: #f8f9fa; padding: 40px; border-radius: 15px; }
          .footer-text-container { text-align: center; max-width: 800px; margin: 0 auto; }
          .footer-text-title { font-size: 1.6rem; color: #1B2F6F; margin-bottom: 15px; }
          .footer-text-content { color: #555; line-height: 1.7; }

          /* Footer */
          .footer { background: #1B2F6F; color: white; padding: 40px 0; text-align: center; }
          .footer-logo { height: 60px; margin-bottom: 15px; }

          @media (max-width: 768px) {
              .photo-item.large { grid-column: span 1; grid-row: span 1; }
              .photo-item.large img { height: 250px; }
              .grid-container { grid-template-columns: 1fr; }
          }
        `
      }
    };
    // Navigation functions
    function showSection(sectionId, evt) {
      const sections = document.querySelectorAll('.content-area');
      sections.forEach(section => section.style.display = 'none');
      const navItems = document.querySelectorAll('.nav-item');
      navItems.forEach(item => item.classList.remove('active'));
      const sectionEl = document.getElementById(sectionId);
      if (sectionEl) sectionEl.style.display = 'block';
      if (sectionId === 'editar') loadPagesList();
      if (evt && evt.target) {
        const navItem = evt.target.closest('.nav-item');
        if (navItem) navItem.classList.add('active');
      } else {
        const navItem = document.querySelector(`.nav-item[data-section="${sectionId}"]`);
        if (navItem) navItem.classList.add('active');
      }
    }

    function selectTemplate(templateId) {
      currentTemplate = templateId;
      document.querySelectorAll('.template-card').forEach(card => card.classList.remove('selected'));
      document.querySelector(`[data-template="${templateId}"]`).classList.add('selected');
      loadTemplateEditor(templateId);
    }

    const footerHTML = `
<!-- Footer -->
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
</footer>`;

const footerCSS = `
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
}`;

    function loadTemplateEditor(templateId) {
      const template = templates[templateId];
      if (!template) { alert('Plantilla no encontrada: ' + templateId); cancelEdit(); return; }
      document.getElementById('template-selection').style.display = 'none';
      document.getElementById('editor-container').style.display = 'block';
      document.getElementById('current-template-name').textContent = template.name;
      const frame = document.getElementById('template-frame');
      
      // Agregar clase para centrar contenido en el editor
      frame.style.cssText = `
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow-y: auto;
  overflow-x: hidden;
  background: white;
  position: relative;
  width: 100%;
  height: 600px;
  margin: 0 auto;
  display: block;
  transform: scale(0.8);  // Cambiado de 1 a 0.8
  transform-origin: top left;
`;
      
      const responsiveCSS = `
html, body {
  width: 100% !important;
  max-width: 100% !important;
  overflow-x: hidden !important;
  font-size: 16px !important;
  margin: 0 !important;
  padding: 0 !important;
  zoom: 1 !important;
  transform: scale(1) !important;
}

* {
  max-width: 100% !important;
  box-sizing: border-box !important;
}
`;

if (editingPageId) {
  const page = savedPages.find(p => p.id === editingPageId);
  if (page) {
    frame.innerHTML = `
    <div style="width: 100%; margin: 0; padding: 0; zoom: 1; transform: scale(1);">
      <style>${responsiveCSS}${template.css}${footerCSS}</style>
      ${page.content}
    </div>`;
  }
} else {
  frame.innerHTML = `
  <div style="width: 100%; margin: 0; padding: 0; zoom: 1; transform: scale(1);">
    <style>${responsiveCSS}${template.css}${footerCSS}</style>
    ${template.html}${footerHTML}
  </div>`;
}
      setupEditableElements();
    }

    function setupEditableElements() {
      const frame = document.getElementById('template-frame');
      frame.classList.add('cms-editing');
      const editableTexts = frame.querySelectorAll('.editable-text');
      editableTexts.forEach(element => {
        const tooltip = document.createElement('span');
        tooltip.className = 'edit-tooltip';
        tooltip.textContent = 'Click para editar';
        element.appendChild(tooltip);
        element.addEventListener('click', function(e) { e.preventDefault(); editText(this); });
      });
      const editableImages = frame.querySelectorAll('.editable-image');
      editableImages.forEach(element => {
        const tooltip = document.createElement('span');
        tooltip.className = 'edit-tooltip';
        tooltip.textContent = 'Click para cambiar imagen';
        element.parentNode.insertBefore(tooltip, element.nextSibling);
        element.addEventListener('click', function(e) { e.preventDefault(); editImage(this); });
      });
    }

    function editImage(element) { currentEditingImage = element; document.getElementById('imageUrl').value = element.src; document.getElementById('imageModal').style.display = 'block'; }

    function updateImage() {
      const newUrl = document.getElementById('imageUrl').value;
      if (currentEditingImage && newUrl) {
        if (currentEditingImage.classList.contains('hero') || currentEditingImage.tagName === 'SECTION') {
          currentEditingImage.style.backgroundImage = `url("${newUrl}")`;
        } else { currentEditingImage.src = newUrl; }
        closeImageModal();
        addToHistory('Imagen actualizada', `Se cambió una imagen`);
      }
    }

    function closeImageModal() { document.getElementById('imageModal').style.display = 'none'; currentEditingImage = null; }
    function cancelEdit() { document.getElementById('template-selection').style.display = 'block'; document.getElementById('editor-container').style.display = 'none'; currentTemplate = null; document.querySelectorAll('.template-card').forEach(card => card.classList.remove('selected')); }

    // Resto de funciones...
    function savePage() { /* función completa anterior */ }
    function loadPagesList() { /* función completa anterior */ }
    function editPage(pageId) { /* función completa anterior */ }
    function deletePage(pageId, pageName) { /* función completa anterior */ }
    function addToHistory(action, detail) { /* función completa anterior */ }
    function goToIndexDirectly() { window.open('index.php?cms_admin_token=true', '_blank'); }

    // Event listeners
    window.addEventListener('click', function(e) { const modal = document.getElementById('imageModal'); if (e.target === modal) closeImageModal(); });
    window.addEventListener('message', (ev) => { if (ev.origin !== location.origin) return; const data = ev.data; if (data && data.type === 'cms_saved') { savedPages = JSON.parse(localStorage.getItem('savedPages')) || []; if (document.getElementById('pages-list')) loadPagesList(); } });


    function editText(element) {
      // Remove tooltip
      const tooltip = element.querySelector('.edit-tooltip');
      if (tooltip) tooltip.remove();
      
      // Get current text content without the tooltip
      const currentText = element.textContent.replace('Click para editar', '').trim();
      
      // Create input field
      const input = document.createElement('textarea');
      input.style.cssText = `
        width: 100%;
        height: auto;
        min-height: 100px;
        font-size: inherit;
        font-family: inherit;
        color: inherit;
        background: rgba(255,255,255,0.9);
        border: 2px solid #3498db;
        border-radius: 4px;
        padding: 10px;
        resize: vertical;
      `;
      input.value = currentText;
      
      // Replace element content
      const originalContent = element.innerHTML;
      element.innerHTML = '';
      element.appendChild(input);
      element.classList.add('editing');
      
      // Focus input
      input.focus();
      input.select();
      
      // Handle save
      const saveEdit = () => {
        const newText = input.value;
        const newTooltip = document.createElement('span');
        newTooltip.className = 'edit-tooltip';
        newTooltip.textContent = 'Click para editar';
        element.innerHTML = newText;
        element.appendChild(newTooltip);
        element.classList.remove('editing');
        
        addToHistory('Texto editado', `Se modificó el contenido de texto`);
      };
      const cancelEdit = () => {
        element.innerHTML = originalContent;
        element.classList.remove('editing');
      };
      
      // Event handlers
      input.addEventListener('blur', saveEdit);
      input.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' && e.ctrlKey) {
          saveEdit();
        } else if (e.key === 'Escape') {
          cancelEdit();
        }
      });
    }

    async function savePage() {
    if (!currentTemplate) return;

    const frame = document.getElementById('template-frame');
    
    // Limpiar todos los tooltips dinámicos y quitar clase de edición
    frame.querySelectorAll('.edit-tooltip').forEach(el => el.remove());
    frame.classList.remove('cms-editing');
    
    const templateContent = frame.innerHTML;
    const pageName = document.getElementById('page-name-input').value || templates[currentTemplate].name;

    let pageData;
    
    if (editingPageId) {
        // Actualizar página existente
        const pageIndex = savedPages.findIndex(p => p.id === editingPageId);
        if (pageIndex !== -1) {
            pageData = {
                ...savedPages[pageIndex],
                content: templateContent,
                name: pageName,
                lastModified: new Date().toLocaleString()
            };
            savedPages[pageIndex] = pageData;
        }
        addToHistory('Página actualizada', `Se actualizó la página: ${pageData.name}`);
        editingPageId = null;
    } else {
        // Crear nueva página
        pageData = {
            id: Date.now(),
            template: currentTemplate,
            name: pageName,
            content: templateContent,
            created: new Date().toLocaleString(),
            lastModified: new Date().toLocaleString()
        };
        savedPages.push(pageData);
        addToHistory('Página guardada', `Se agregó una nueva página: ${pageData.name}`);
    }

    // GUARDAR EN SERVIDOR (y localStorage como respaldo)
    const saveResult = await savePageToServer(pageData);
    
    // Guardar también en localStorage como respaldo
    localStorage.setItem('savedPages', JSON.stringify(savedPages));

    // Mensaje de confirmación
    const editorContainer = document.getElementById('editor-container');
    const alertHtml = `
        <div class="alert alert-success" style="margin: 20px 0;">
            ✅ ¡Página guardada correctamente! ${saveResult.success ? '(Servidor)' : '(Local como respaldo)'}
        </div>
    `;
    editorContainer.insertAdjacentHTML('afterbegin', alertHtml);
    
    setTimeout(() => {
        const alert = editorContainer.querySelector('.alert-success');
        if (alert) alert.remove();
    }, 3000);

    // Volver al selector
    setTimeout(() => {
        cancelEdit();
    }, 1500);
}

    function loadPagesList() {
      const pagesList = document.getElementById('pages-list');
      const noPages = document.getElementById('no-pages-message');
      
      if (savedPages.length === 0) {
        pagesList.style.display = 'none';
        noPages.style.display = 'block';
        return;
      }
      
      pagesList.style.display = 'grid';
      noPages.style.display = 'none';
      
      pagesList.innerHTML = savedPages.map(page => `
        <div class="template-card" data-page-id="${page.id}">
          <div class="template-preview">
            <div style="background: linear-gradient(45deg, #3498db, #2980b9); height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-size: 18px;">
              ${getTemplateIcon(page.template)}
            </div>
          </div>
          <div class="template-info">
            <div class="template-name">${page.name}</div>
            <div class="template-description">
              Creada: ${page.created}<br>
              Última modificación: ${page.lastModified}
            </div>
          </div>
          <div class="template-actions">
            <button class="btn btn-secondary btn-small" onclick="openInSite(${page.id})">🔗 Abrir en sitio</button>
            ${modoActual === "editar" 
              ? `<button class="btn btn-primary btn-small" onclick="editPage(${page.id})">Editar en gestor</button>`
              : `<button class="btn btn-danger btn-small" onclick="confirmDeletePage(${page.id}, '${page.name}')">Eliminar</button>`
            }
          </div>
        </div>
      `).join('');
    }

    function getTemplateIcon(template) {
      const icons = {
        deportes: '🏃‍♂️',
        intercambio: '🌍', 
        general: '📄',
        fotos: '📸'
      };
      return icons[template] || '📄';
    }

    function editPage(pageId) {
      const page = savedPages.find(p => p.id === pageId);
      if (!page) return;
      
      editingPageId = pageId;
      
      // Cambiar a sección "Agregar"
      showSection('agregar');
      
      // Marcar plantilla actual
      currentTemplate = page.template;
      const templateCard = document.querySelector(`[data-template="${page.template}"]`);
      if (templateCard) {
        templateCard.classList.add('selected');
      } else {
        console.error('Plantilla no encontrada:', page.template);
        return;
      }
      
      // Cargar editor con contenido de la página
      loadTemplateEditor(page.template);
    }

    function confirmDeletePage(pageId, pageName) {
      if (confirm(`¿Estás seguro de que quieres eliminar la página "${pageName}"?\n\nEsta acción no se puede deshacer.`)) {
        deletePage(pageId, pageName);
      }
    }

    async function deletePage(pageId, pageName) {
    try {
        console.log('🗑️ Eliminando página del servidor...', pageId);
        
        // Eliminar del servidor
        const response = await fetch('pages_manager.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `action=delete&pageId=${pageId}`
        });
        
        if (!response.ok) {
            throw new Error('Error HTTP: ' + response.status);
        }
        
        const result = await response.json();
        console.log('✅ Respuesta del servidor:', result);
        
        if (!result.success) {
            throw new Error(result.message || 'Error del servidor');
        }
        
    } catch (error) {
        console.error('❌ Error eliminando del servidor:', error);
        // Mostrar mensaje de error pero continuar con eliminación local
        const container = document.getElementById('pages-list-container');
        const errorHtml = `
            <div class="alert alert-info" style="margin: 20px 0;">
                ⚠️ Error del servidor: ${error.message}. Se eliminó localmente.
            </div>
        `;
        container.insertAdjacentHTML('afterbegin', errorHtml);
        setTimeout(() => {
            const alert = container.querySelector('.alert-info');
            if (alert) alert.remove();
        }, 5000);
    }
    
    // Eliminar del array local independientemente del resultado del servidor
    savedPages = savedPages.filter(page => page.id !== pageId);
    
    // Guardar cambios en localStorage
    localStorage.setItem('savedPages', JSON.stringify(savedPages));
    
    // Refrescar lista
    loadPagesList();
    
    // Agregar al historial
    addToHistory('Página eliminada', `Se eliminó la página: ${pageName}`);
    
    // Mensaje de confirmación
    const container = document.getElementById('pages-list-container');
    const successHtml = `
        <div class="alert alert-success" style="margin: 20px 0;">
            ✅ Página "${pageName}" eliminada correctamente.
        </div>
    `;
    container.insertAdjacentHTML('afterbegin', successHtml);
    
    setTimeout(() => {
        const alert = container.querySelector('.alert-success');
        if (alert) alert.remove();
    }, 3000);
}

    function addToHistory(action, detail) {
      const historyItem = {
        date: new Date().toLocaleString(),
        action: action,
        detail: detail
      };
      
      historyLog.unshift(historyItem);
      
      // Update history display
      updateHistoryDisplay();
    }

    function updateHistoryDisplay() {
      const historyList = document.getElementById('history-list');
      
      // Keep only last 50 items
      if (historyLog.length > 50) {
        historyLog = historyLog.slice(0, 50);
      }
      
      historyList.innerHTML = historyLog.map(item => `
        <li class="history-item">
          <div class="history-date">${item.date}</div>
          <div class="history-action">${item.action}</div>
          <div class="history-detail">${item.detail}</div>
        </li>
      `).join('');
    }

    function previewTemplate(templateId) {
      // For now, just select the template
      selectTemplate(templateId);
    }

    function editHeroBackground() {
      const heroSection = document.querySelector('.hero');
      if (heroSection) {
          currentEditingImage = heroSection;
          
          // Obtener la URL actual del background
          const currentBg = heroSection.style.backgroundImage;
          let currentUrl = '';
          if (currentBg) {
              const match = currentBg.match(/url\(["']?(.+?)["']?\)/);
              if (match) currentUrl = match[1];
          }
          
          document.getElementById('imageUrl').value = currentUrl;
          document.getElementById('imageModal').style.display = 'block';
      }
    }
    // Configurar campo de nombre de página
if (editingPageId) {
  const page = savedPages.find(p => p.id === editingPageId);
  if (page) {
    document.getElementById('page-name-input').value = page.name;
  }
} else {
  document.getElementById('page-name-input').value = '';
}

function refreshSiteView() {
    const frame = document.getElementById('site-frame');
    frame.src = frame.src; // Recargar el iframe
    addToHistory('Vista actualizada', 'Se recargó la vista del sitio web');
}

function openSiteInNewTab() {
    window.open('index.php', '_blank');
    addToHistory('Sitio abierto', 'Se abrió el sitio en nueva pestaña');
}
  </script>
</body>
</html>
