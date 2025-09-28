(function() {
    // Detectar si es administrador
    const urlParams = new URLSearchParams(window.location.search);
    const isAdmin = urlParams.get('cms_admin_token') === 'true';
    const pageId = urlParams.get('page_id');
    

    // Permitir que visitantes también carguen contenido guardado
    
    // Prevenir redirecciones automáticas - VERSIÓN CORREGIDA
    window.addEventListener('beforeunload', function(e) {
        console.log('🚫 Intentando prevenir redirección automática');
        // NO prevenir la redirección, solo loggear
    });
    
    // 🔥 FUNCIÓN SIMPLIFICADA: Cargar contenido guardado al iniciar
async function loadSavedContent() {
    const currentUrl = window.location.pathname.split('/').pop() || 'index.php';
    const pageId = 'existing_' + md5(currentUrl);
    
    console.log('🔍 Buscando contenido para:', currentUrl, 'con ID:', pageId);
    
    const originalContent = document.getElementById('original-content');
    const cmsRoot = document.getElementById('cms-root');
    
    console.log('🔍 Elementos encontrados:', {
        originalContent: !!originalContent,
        cmsRoot: !!cmsRoot,
        cmsRootDisplay: cmsRoot ? cmsRoot.style.display : 'N/A'
    });
    
    let contentFound = false;
    
    try {
        // Intentar cargar del servidor primero
        const response = await fetch('load_page_content.php?pageUrl=' + encodeURIComponent(currentUrl));
        
        if (response.ok) {
            const result = await response.json();
            if (result.success && result.content && result.content.trim()) {
                console.log('✅ Contenido cargado del servidor');
                if (cmsRoot) {
                console.log('📝 Insertando contenido en cms-root:', result.content.length, 'caracteres');
                cmsRoot.innerHTML = result.content;
                cmsRoot.style.display = 'block';
                document.body.classList.add('loading-cms-content');
                contentFound = true;
                
                // Prevenir navegación automática
                setTimeout(() => {
                    console.log('🔍 Verificación - cms-root innerHTML length:', cmsRoot.innerHTML.length);
                    
                    // NO prevenir clics en enlaces - permitir navegación normal
                    console.log('✅ Contenido cargado correctamente');
                }, 100);
                }
            }
        }
    } catch (error) {
        console.log('ℹ️ No se pudo cargar del servidor, intentando localStorage...');
    }
    
    if (!contentFound) {
        // Fallback a localStorage
        const savedPages = JSON.parse(localStorage.getItem('savedPages')) || [];
        console.log('📋 Páginas guardadas:', savedPages.length);
        
        // Buscar por ID exacto primero, luego por URL
        let savedPage = savedPages.find(page => page.id === pageId);
        if (!savedPage) {
            savedPage = savedPages.find(page => page.url === currentUrl);
        }
        
        if (savedPage && savedPage.content && savedPage.content.trim()) {
            console.log('✅ Contenido cargado de localStorage:', savedPage.name);
            if (cmsRoot) {
                console.log('📝 Insertando contenido desde localStorage:', savedPage.content.length, 'caracteres');
                cmsRoot.innerHTML = savedPage.content;
                // ...cargar contenido CMS...
                document.body.classList.add('loading-cms-content');
                cmsRoot.style.display = 'block';
                originalContent.style.display = 'none';
                contentFound = true;
            }
        } else {
            // 🔥 Asegúrate de mostrar el contenido original si NO hay contenido guardado
            document.body.classList.remove('loading-cms-content');
            if (cmsRoot) cmsRoot.style.display = 'none';
            if (originalContent) originalContent.style.display = 'block';
        }
    }
    
    // Si no hay contenido guardado, mostrar contenido original
    if (!contentFound) {
        console.log('ℹ️ No se encontró contenido guardado, mostrando contenido original');
        document.body.classList.remove('loading-cms-content');
        
        if (cmsRoot) {
            cmsRoot.style.display = 'none';
        }
        if (originalContent) {
            originalContent.style.display = 'block';
        }
        
        // 🔥 FORZAR VISIBILIDAD DEL CONTENIDO ORIGINAL
        setTimeout(() => {
            if (originalContent) {
                originalContent.style.display = 'block';
                originalContent.style.visibility = 'visible';
                originalContent.style.opacity = '1';
            }
            if (cmsRoot) {
                cmsRoot.style.display = 'none';
            }
            document.body.classList.remove('loading-cms-content');
            console.log('✅ Contenido original forzado a ser visible');
        }, 100);
    } else {
        // Si hay contenido guardado, asegurar que se muestre correctamente
        if (originalContent) {
            originalContent.style.display = 'none';
        }
        if (cmsRoot) {
            cmsRoot.style.display = 'block';
        }
    }
}

// 🔥 FUNCIÓN MD5 simple para generar ID único - VERSIÓN CORREGIDA
function md5(str) {
    // Usar el mismo algoritmo que PHP para consistencia
    let hash = 0;
    if (str.length === 0) return hash.toString();
    for (let i = 0; i < str.length; i++) {
        const char = str.charCodeAt(i);
        hash = ((hash << 5) - hash) + char;
        hash = hash & hash; // Convert to 32-bit integer
    }
    return Math.abs(hash).toString();
}
function loadSpecificPage() {
    if (!pageId) return;
    
    // Ocultar contenido original inmediatamente
    document.body.classList.add('loading-cms-content');
    
    const savedPages = JSON.parse(localStorage.getItem('savedPages')) || [];
    const page = savedPages.find(p => p.id == pageId);
    
    if (page && page.content) {
        // Cargar contenido de la página
        const cmsRoot = document.getElementById('cms-root');
        if (cmsRoot) {
            cmsRoot.innerHTML = page.content;
            
            // Actualizar título
            document.title = page.name + ' - Scuola Italiana di Montevideo';
        }
    } else {
        // Si no hay página, mostrar contenido original
        document.body.classList.remove('loading-cms-content');
    }
}
    
    // Crear menú de administrador
    function createAdminMenu() {
        const adminMenu = document.createElement('div');
        adminMenu.id = 'cms-admin-menu';
        adminMenu.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 99999;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            overflow: hidden;
            font-family: Arial, sans-serif;
        `;
        
        adminMenu.innerHTML = `
            <div id="cms-menu-toggle" style="
                background: #3498db;
                color: white;
                padding: 12px 16px;
                cursor: pointer;
                font-weight: 600;
                user-select: none;
            ">⚙️ Administrador</div>
            <div id="cms-menu-content" style="
                display: none;
                padding: 16px;
                min-width: 200px;
            ">
                <button id="cms-gestor-btn" class="cms-btn" style="
                    display: block;
                    width: 100%;
                    padding: 8px 12px;
                    margin-bottom: 8px;
                    background: #e74c3c;
                    color: white;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                ">🏠 Ir al gestor</button>
                <button id="cms-index-btn" class="cms-btn" style="
                    display: block;
                    width: 100%;
                    padding: 8px 12px;
                    margin-bottom: 8px;
                    background: #27ae60;
                    color: white;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                ">🌐 Ir a inicio</button>
                <button id="cms-edit-btn" class="cms-btn" style="
                    display: block;
                    width: 100%;
                    padding: 8px 12px;
                    background: #f39c12;
                    color: white;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                ">✏️ Editar esta página</button>
            </div>
        `;
        
        document.body.appendChild(adminMenu);
        
        // Event listeners
        const toggle = document.getElementById('cms-menu-toggle');
        const content = document.getElementById('cms-menu-content');
        const gestorBtn = document.getElementById('cms-gestor-btn');
        const indexBtn = document.getElementById('cms-index-btn');
        const editBtn = document.getElementById('cms-edit-btn');
        
        toggle.addEventListener('click', () => {
            content.style.display = content.style.display === 'none' ? 'block' : 'none';
        });
        
        gestorBtn.addEventListener('click', () => {
            window.open('gestorCont.html', '_blank');
        });
        
        indexBtn.addEventListener('click', () => {
            window.open('index.html?cms_admin_token=true', '_blank');
        });
        
        editBtn.addEventListener('click', () => {
            enableEditMode();
        });
        
        // Cerrar menú al hacer click fuera
        document.addEventListener('click', (e) => {
            if (!adminMenu.contains(e.target)) {
                content.style.display = 'none';
            }
        });
    }
    
    // Sistema de edición
    let isEditingMode = false;
    let originalContent = '';
    
    function enableEditMode() {
        if (isEditingMode) return;
        
        isEditingMode = true;
        
        // MEJORADO: Buscar contenido editable en toda la página
        const cmsRoot = document.getElementById('cms-root');
        // Si cms-root está vacío, mover el contenido original dentro para editar todo
        if (cmsRoot && !cmsRoot.innerHTML.trim()) {
            const original = document.getElementById('original-content');
            if (original) {
                cmsRoot.innerHTML = original.innerHTML;
                document.body.classList.add('loading-cms-content');
            }
        }
        const searchArea = cmsRoot && cmsRoot.innerHTML.trim() ? cmsRoot : document.body;
        
        // Guardar contenido original
        originalContent = searchArea.innerHTML;
        
        // Buscar elementos editables existentes
        let editableTexts = searchArea.querySelectorAll('.editable-text');
        let editableImages = searchArea.querySelectorAll('.editable-image');
        
        // 🔥 MEJORADO: Si no hay elementos con clases editables, hacer editables elementos comunes
        if (editableTexts.length === 0 && editableImages.length === 0) {
            // 🎯 SELECTORES EXPANDIDOS para incluir todas las secciones importantes
            const textSelectors = [
                // Títulos generales
                'h1:not(a h1):not(a)', 'h2:not(a h2):not(a)', 'h3:not(a h3):not(a)', 
                'h4:not(a h4):not(a)', 'h5:not(a h5):not(a)', 'h6:not(a h6):not(a)', 
                'p:not(a p):not(a)', 
                
                // Sección Hero
                '.hero-title', 
                
                // Secciones específicas
                '.main-title', '.section-title-small',
                
                // 🔥 SOBRE NOSOTROS - Nuevos selectores
                '.about-text', '.about-content h2', '.about-content p',
                
                // 🔥 PROYECTOS - Nuevos selectores
                '.projects-title', '.project-title', '.project-description',
                '.projects-section h2', '.projects-section h3', '.projects-section p',
                
                // 🔥 NOTICIAS - Nuevos selectores
                '.news-title', '.news-subtitle', '.news-card-text',
                '.news-header h2', '.news-header p', '.news-card p',
                
                // Elementos existentes
                '.quality-text', '.level-title', '.level-age',
                '.quality-text-new', '.italian-quote p', '.footer-card-content',
                '.news-card-content p', '.project-content h3', '.project-content p'
            ];
            
            textSelectors.forEach(selector => {
                const elements = searchArea.querySelectorAll(selector);
                elements.forEach(el => {
                    // No hacer editables elementos dentro de enlaces a menos que sean imágenes
                    if (!el.closest('a') || el.tagName === 'IMG') {
                        el.classList.add('editable-text');
                    }
                });
            });
            
            // 🔥 IMÁGENES EXPANDIDAS - Hacer editables imágenes de todas las secciones
            const imageSelectors = [
                // Imágenes generales
                'img', '.bg-image', '.logo', '.menu-icon', '.sport-bg',
                
                // 🔥 SOBRE NOSOTROS - Imágenes específicas
                '.about-image img', '.about-section img',
                
                // 🔥 PROYECTOS - Imágenes específicas  
                '.project-image img', '.projects-section img',
                
                // 🔥 NOTICIAS - Imágenes específicas
                '.news-card img', '.news-section img', '.news-grid img',
                
                // Elementos existentes
                '.video-thumbnail', '.nav-logo img', '.footer-logo img',
                '.footer-card img', '.quality-section img'
            ];
            
            imageSelectors.forEach(selector => {
                const elements = searchArea.querySelectorAll(selector);
                elements.forEach(el => {
                    if (el.tagName === 'IMG' || el.style.backgroundImage || 
                        getComputedStyle(el).backgroundImage !== 'none') {
                        el.classList.add('editable-image');
                    }
                });
            });
            
            // 🔥 BOTONES Y ENLACES EDITABLES (solo el texto, no la funcionalidad)
            const buttonSelectors = [
                '.admissions-btn', '.level-btn', '.read-more-btn', 
                '.project-btn', '.news-card-btn', '.footer-card-content'
            ];
            
            buttonSelectors.forEach(selector => {
                const elements = searchArea.querySelectorAll(selector);
                elements.forEach(el => {
                    el.classList.add('editable-text');
                });
            });
            
            // Hacer editables textos dentro de enlaces (como títulos de deportes)
            const linkTexts = searchArea.querySelectorAll('a .sport-title, a h1, a h2, a h3, a h4, a h5, a h6');
            linkTexts.forEach(el => {
                el.classList.add('editable-text');
            });
            
            // Actualizar las listas
            editableTexts = searchArea.querySelectorAll('.editable-text');
            editableImages = searchArea.querySelectorAll('.editable-image');
        }
        
        // Configurar elementos editables
        editableTexts.forEach(el => {
            el.contentEditable = 'true';
            el.style.outline = '2px dashed #3498db';
            el.style.outlineOffset = '2px';
            el.style.cursor = 'text';
            
            // Prevenir navegación en enlaces cuando están en modo edición
            if (el.closest('a')) {
                el.addEventListener('click', (e) => {
                    if (isEditingMode) {
                        e.preventDefault();
                        e.stopPropagation();
                        el.focus();
                    }
                });
            }
            
            // Agregar tooltip usando atributo title en lugar de elemento DOM
            if (!el.hasAttribute('data-edit-tooltip')) {
                el.setAttribute('data-edit-tooltip', 'true');
                el.title = 'Click para editar texto';
                
                // Alternativamente, agregar clase CSS para mostrar tooltip
                el.classList.add('cms-editable-text');
            }
        });
        
        editableImages.forEach(img => {
            img.style.outline = '3px dashed #e74c3c';
            img.style.outlineOffset = '3px';
            img.style.cursor = 'pointer';
            img.addEventListener('click', handleImageEdit);
            
            // Prevenir navegación en enlaces cuando están en modo edición
            if (img.closest('a')) {
                img.addEventListener('click', (e) => {
                    if (isEditingMode) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                });
            }
            
            // Agregar tooltip usando atributo title
            if (!img.hasAttribute('data-edit-tooltip')) {
                img.setAttribute('data-edit-tooltip', 'true');
                img.title = 'Click para cambiar imagen';
                img.classList.add('cms-editable-image');
            }
        });
        
        showSaveControls();
        
        // Agregar CSS para tooltips mejorados
        addEditingCSS();
        
        alert(`Modo edición activado. Elementos editables: ${editableTexts.length} textos, ${editableImages.length} imágenes`);
    }
    
    function handleImageEdit(e) {
        e.preventDefault();
        e.stopPropagation();
        const img = e.target;
        const currentSrc = img.src || img.style.backgroundImage.replace(/url\(['"]?(.+?)['"]?\)/i, '$1');
        const newUrl = prompt('Ingresa la nueva URL de la imagen:', currentSrc);
        if (newUrl && newUrl.trim()) {
            if (img.tagName === 'IMG') {
                img.src = newUrl.trim();
            } else {
                img.style.backgroundImage = `url(${newUrl.trim()})`;
            }
        }
    }
    
    function addEditingCSS() {
        // Agregar CSS personalizado para el modo de edición
        if (!document.getElementById('cms-editing-styles')) {
            const style = document.createElement('style');
            style.id = 'cms-editing-styles';
            style.innerHTML = `
                .cms-editable-text:hover::after {
                    content: "✏️ Editable";
                    position: absolute;
                    bottom: -25px;
                    left: 0;
                    background: #3498db;
                    color: white;
                    padding: 2px 6px;
                    border-radius: 3px;
                    font-size: 10px;
                    z-index: 10000;
                    pointer-events: none;
                    white-space: nowrap;
                }
                
                .cms-editable-image:hover::after {
                    content: "🖼️ Cambiar imagen";
                    position: absolute;
                    bottom: -25px;
                    left: 0;
                    background: #e74c3c;
                    color: white;
                    padding: 2px 6px;
                    border-radius: 3px;
                    font-size: 10px;
                    z-index: 10000;
                    pointer-events: none;
                    white-space: nowrap;
                }
                
                /* Evitar que los enlaces naveguen en modo edición */
                body.cms-editing-mode a {
                    pointer-events: none;
                }
                
                body.cms-editing-mode .cms-editable-text,
                body.cms-editing-mode .cms-editable-image {
                    pointer-events: all;
                }
            `;
            document.head.appendChild(style);
        }
        
        // Agregar clase al body para modo edición
        document.body.classList.add('cms-editing-mode');
    }
    
    function showSaveControls() {
        const existingControls = document.getElementById('cms-save-controls');
        if (existingControls) existingControls.remove();
        
        const saveControls = document.createElement('div');
        saveControls.id = 'cms-save-controls';
        saveControls.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99998;
            display: flex;
            gap: 10px;
        `;
        
        saveControls.innerHTML = `
            <button id="cms-save" style="
                background: #27ae60;
                color: white;
                border: none;
                padding: 12px 20px;
                border-radius: 6px;
                cursor: pointer;
                font-weight: 600;
            ">💾 Guardar cambios</button>
            <button id="cms-cancel" style="
                background: #e74c3c;
                color: white;
                border: none;
                padding: 12px 20px;
                border-radius: 6px;
                cursor: pointer;
                font-weight: 600;
            ">❌ Cancelar</button>
        `;
        
        document.body.appendChild(saveControls);
        
        document.getElementById('cms-save').addEventListener('click', saveChanges);
        document.getElementById('cms-cancel').addEventListener('click', cancelEdit);
    }
    
    // 🔥 FUNCIÓN saveChanges MEJORADA - REEMPLAZAR LA ACTUAL
    async function saveChanges() {
    const cmsRoot = document.getElementById('cms-root');
    if (!cmsRoot) {
        alert('❌ Error: No se encuentra el contenedor CMS');
        return;
    }
    
    // Tomar el contenido completo: si cms-root está vacío, tomar original-content o body
    const searchAreaForSave = cmsRoot && cmsRoot.innerHTML.trim() ? cmsRoot : (document.getElementById('original-content') || document.body);
    const currentContent = searchAreaForSave.innerHTML;
    const currentUrl = window.location.pathname.split('/').pop() || 'index.php';
    const pageTitle = document.title;

    console.log('💾 Guardando contenido para:', currentUrl);
    console.log('Longitud del contenido:', currentContent.length);

    // 🔥 LIMPIAR contenido antes de guardar
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = currentContent;
    
    // Remover elementos del CMS
    tempDiv.querySelectorAll('#cms-admin-menu, #cms-save-controls').forEach(el => el.remove());
    
    // Limpiar atributos de edición
    tempDiv.querySelectorAll('*').forEach(el => {
        if (el.classList.contains('editable-text') || el.classList.contains('editable-image') || 
            el.classList.contains('cms-editable-text') || el.classList.contains('cms-editable-image')) {
            el.contentEditable = 'false';
            el.style.outline = '';
            el.style.outlineOffset = '';
            el.style.cursor = '';
            el.removeAttribute('data-edit-tooltip');
            el.removeAttribute('title');
        }
    });
    
    const cleanContent = tempDiv.innerHTML;
    // Asegurar que el cms-root tenga el contenido limpio
    try { if (cmsRoot) { cmsRoot.innerHTML = cleanContent; } } catch (e) {}

    // 🔥 GUARDAR EN SERVIDOR
    try {
        const formData = new FormData();
        formData.append('pageUrl', currentUrl);
        formData.append('content', cleanContent);
        formData.append('pageTitle', pageTitle);

        const response = await fetch('save_page_content.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();
        console.log('📡 Respuesta del servidor:', result);
        
        if (result.success) {
            alert('✅ Cambios guardados en el servidor!');
            updateLocalStorage(currentUrl, cleanContent, pageTitle);
        } else {
            throw new Error(result.message || 'Error del servidor');
        }
    } catch (error) {
        console.error('❌ Error guardando en servidor:', error);
        alert('⚠️ Error del servidor. Guardando localmente...');
        updateLocalStorage(currentUrl, cleanContent, pageTitle);
    }
    
    disableEditMode();
}

// 🔥 FUNCIÓN ÚNICA updateLocalStorage - VERSIÓN CORREGIDA
function updateLocalStorage(pageUrl, content, title) {
    let savedPages = JSON.parse(localStorage.getItem('savedPages')) || [];
    const pageId = 'existing_' + md5(pageUrl);
    
    // Buscar por ID o por URL para mayor compatibilidad
    const pageIndex = savedPages.findIndex(page => 
        page.id === pageId || page.url === pageUrl
    );
    
    if (pageIndex !== -1) {
        savedPages[pageIndex].content = content;
        savedPages[pageIndex].lastModified = new Date().toLocaleString();
        savedPages[pageIndex].name = title || savedPages[pageIndex].name;
        savedPages[pageIndex].id = pageId; // Asegurar ID consistente
    } else {
        savedPages.push({
            id: pageId,
            url: pageUrl,
            name: title || 'Página editada',
            content: content,
            lastModified: new Date().toLocaleString(),
            template: 'existing_page'
        });
    }
    
    localStorage.setItem('savedPages', JSON.stringify(savedPages));
    console.log('💾 Contenido guardado en localStorage con ID:', pageId);
}
    
    function saveAsNewPage(newPageId, currentUrl) {
        // Obtener el contenido actual
        const cmsRoot = document.getElementById('cms-root');
        const searchArea = cmsRoot && cmsRoot.innerHTML.trim() ? cmsRoot : document.body;
        const currentContent = searchArea.innerHTML;
        
        // Limpiar elementos del CMS antes de guardar
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = currentContent;
        
        // Remover elementos del CMS
        tempDiv.querySelectorAll('#cms-admin-menu, #cms-save-controls').forEach(el => el.remove());
        
        // Limpiar estilos y atributos de edición
        tempDiv.querySelectorAll('.editable-text, .editable-image, .cms-editable-text, .cms-editable-image').forEach(el => {
            el.contentEditable = 'false';
            el.style.outline = '';
            el.style.outlineOffset = '';
            el.style.cursor = '';
            el.removeAttribute('data-edit-tooltip');
            el.removeAttribute('title');
            el.classList.remove('cms-editable-text', 'cms-editable-image');
        });
        
        const cleanContent = tempDiv.innerHTML;
        
        // Crear nueva página
        const pageTitle = document.title || 'Página sin título';
        const pageData = {
            id: newPageId,
            template: 'custom',
            name: `${pageTitle.replace(' - Scuola Italiana di Montevideo', '')} (Editado)`,
            content: cleanContent,
            url: currentUrl,
            created: new Date().toLocaleString(),
            lastModified: new Date().toLocaleString()
        };
        
        // Guardar en localStorage
        let savedPages = JSON.parse(localStorage.getItem('savedPages')) || [];
        
        // Verificar si ya existe una versión de esta página
        const existingIndex = savedPages.findIndex(page => page.url === currentUrl);
        
        if (existingIndex !== -1) {
            // Actualizar página existente
            savedPages[existingIndex] = {
                ...savedPages[existingIndex],
                content: cleanContent,
                lastModified: new Date().toLocaleString()
            };
            alert('Página del index actualizada correctamente en el gestor.');
        } else {
            // Agregar nueva página
            savedPages.push(pageData);
            alert('Nueva versión del index guardada en el gestor.');
        }
        
        localStorage.setItem('savedPages', JSON.stringify(savedPages));
        
        // Notificar al gestor si está abierto
        try {
            if (window.opener && !window.opener.closed) {
                window.opener.postMessage({ type: 'cms_saved', id: newPageId }, window.location.origin);
            }
        } catch (e) {
            console.warn('No se pudo notificar al gestor:', e);
        }
        
        disableEditMode();
    }
    
    function cancelEdit() {
        if (confirm('¿Descartar todos los cambios?')) {
            location.reload(); // Recargar la página para restaurar el estado original
        }
    }
    
    function disableEditMode() {
        isEditingMode = false;
        
        // Remover clase de modo edición del body
        document.body.classList.remove('cms-editing-mode');
        
        const editableTexts = document.querySelectorAll('.editable-text');
        const editableImages = document.querySelectorAll('.editable-image');
        
        editableTexts.forEach(el => {
            el.contentEditable = 'false';
            el.style.outline = '';
            el.style.outlineOffset = '';
            el.style.cursor = '';
            el.removeAttribute('data-edit-tooltip');
            el.removeAttribute('title');
            el.classList.remove('cms-editable-text');
        });
        
        editableImages.forEach(img => {
            img.style.outline = '';
            img.style.outlineOffset = '';
            img.style.cursor = '';
            img.removeAttribute('data-edit-tooltip');
            img.removeAttribute('title');
            img.classList.remove('cms-editable-image');
            img.removeEventListener('click', handleImageEdit);
        });
        
        // Remover CSS de edición
        const editingStyles = document.getElementById('cms-editing-styles');
        if (editingStyles) editingStyles.remove();
        
        const saveControls = document.getElementById('cms-save-controls');
        if (saveControls) saveControls.remove();
    }
    
    // Auto-modificar enlaces para mantener token de admin
    function updateLinksWithToken() {
        const links = document.querySelectorAll('a[href]');
        links.forEach(link => {
            const href = link.getAttribute('href');
            if (href && !href.includes('://') && !href.startsWith('#') && !href.startsWith('mailto:') && !href.startsWith('tel:')) {
                const separator = href.includes('?') ? '&' : '?';
                if (!href.includes('cms_admin_token')) {
                    link.setAttribute('href', href + separator + 'cms_admin_token=true');
                }
            }
        });
    }
    
   
// 🔥 INICIALIZACIÓN CORREGIDA - REEMPLAZAR TODO ESTO:
// Inicializar cuando el DOM esté listo
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', async function() {
        // 🔥 PRIMERO: Para páginas específicas (creadas desde gestor)
        if (pageId) {
            loadSpecificPage();
        } 
        // 🔥 SEGUNDO: Para páginas existentes (index.php, acerca.php, etc.)
        else {
            await loadSavedContent();
        }
        
        // 🔥 LUEGO: Inicializar CMS si es admin
        if (isAdmin) {
            createAdminMenu();
            updateLinksWithToken();
        }
    });
} else {
    // Para cuando el DOM ya está cargado
    (async function() {
        // 🔥 PRIMERO: Para páginas específicas (creadas desde gestor)
        if (pageId) {
            loadSpecificPage();
        } 
        // 🔥 SEGUNDO: Para páginas existentes (index.php, acerca.php, etc.)
        else {
            await loadSavedContent();
        }
        
        // 🔥 LUEGO: Inicializar CMS si es admin
                if (isAdmin) {
            createAdminMenu();
            updateLinksWithToken();
        }
    })();
 }
})();