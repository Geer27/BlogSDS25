<?php include 'layout_header.php'; ?>

<section class="hero">
    <h2><?php echo $titulo; ?></h2>
    <p class="lead"><?php echo $subtitulo; ?></p>
</section>

<section class="content-section">
    <div class="card">
        <h3>Sobre el Evento</h3>
        <p><?php echo $descripcion; ?></p>
        <p>Durante los días 13 al 17 de octubre de 2025, la Facultad Multidisciplinaria Oriental de la Universidad de El Salvador celebra la Semana de Sistemas, un evento que reúne a estudiantes, docentes y profesionales del área de tecnología e informática.</p>
    </div>

    <div class="card">
        <h3>Actividades del Evento</h3>
        <ul class="activity-list">
            <li><strong>Ponencias:</strong> Charlas especializadas sobre temas de actualidad en tecnología</li>
            <li><strong>Talleres:</strong> Sesiones prácticas de aprendizaje en diversas herramientas y tecnologías</li>
            <li><strong>Actividades Recreativas:</strong> Momentos de integración y convivencia entre participantes</li>
            <li><strong>Networking:</strong> Oportunidades de conexión con profesionales del sector</li>
        </ul>
    </div>

    <div class="card">
        <h3>Navegación del Blog</h3>
        <p>Utiliza el menú superior para explorar:</p>
        <ul class="nav-list">
            <li><strong>Días 1-5:</strong> Documentación diaria de todas las actividades con fotos y videos</li>
            <li><strong>Mi Información:</strong> Datos del estudiante autor del blog</li>
            <li><strong>Registrar Visita:</strong> Deja tu comentario y registra tu visita al blog</li>
        </ul>
    </div>
</section>

<section class="days-grid">
    <h3>Días del Evento</h3>
    <div class="grid">
        <a href="/dia/1" class="day-card day-card-1">
            <div class="day-number">1</div>
            <h4>Día 1</h4>
            <p class="day-date">Lunes 13 Oct</p>
            <p class="day-activities">Inauguración y Conferencias</p>
            <span class="badge">Disponible</span>
        </a>
        <a href="/dia/2" class="day-card day-card-2">
            <div class="day-number">2</div>
            <h4>Día 2</h4>
            <p class="day-date">Martes 14 Oct</p>
            <p class="day-activities">Talleres y Workshops</p>
            <span class="badge">Disponible</span>
        </a>
        <a href="/dia/3" class="day-card day-card-3">
            <div class="day-number">3</div>
            <h4>Día 3</h4>
            <p class="day-date">Miércoles 15 Oct</p>
            <p class="day-activities">Evento Suspendido por Lluvia</p>
            <span class="badge">Disponible</span>
        </a>
        <a href="/dia/4" class="day-card day-card-4">
            <div class="day-number">4</div>
            <h4>Día 4</h4>
            <p class="day-date">Jueves 16 Oct</p>
            <p class="day-activities">Feria de Logros y Pupuseada</p>
            <span class="badge">Disponible</span>
        </a>
        <a href="/dia/5" class="day-card day-card-5">
            <div class="day-number">5</div>
            <h4>Día 5</h4>
            <p class="day-date">Viernes 17 Oct</p>
            <p class="day-activities">Bingo y Entrega de Diplomas</p>
            <span class="badge">Disponible</span>
        </a>
    </div>
</section>

<?php include 'layout_footer.php'; ?>
