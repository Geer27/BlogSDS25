<?php include 'layout_header.php'; ?>

<section class="day-header">
    <h2><?php echo $titulo; ?></h2>
    <p class="date"><?php echo $fecha; ?></p>
</section>

<section class="content-section">
    <div class="card">
        <h3>Actividades del Día</h3>
        <ul class="activity-list">
            <?php foreach($actividades as $actividad): ?>
                <li><?php echo $actividad; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="card">
        <h3>Galería de Fotos</h3>
        <p class="info-text">A continuación se presentan las evidencias fotográficas del primer día de la Semana de Sistemas 2025.</p>

        <div class="gallery">
            <?php
            // Listar todas las imágenes del día 1
            $imagenes = [
                'IMG_20251013_090803641_HDR.jpg',
                'IMG_20251013_090821337.jpg',
                'IMG_20251013_092847604.jpg',
                'IMG_20251013_094251569.jpg',
                'IMG_20251013_095838318_HDR.jpg',
                'IMG_20251013_104833397.jpg',
                'IMG_20251013_110933912.jpg',
                'IMG_20251013_111203864.jpg',
                'IMG_20251013_112112578.jpg',
                'IMG_20251013_112625958.jpg',
                'IMG_20251013_120258667.jpg'
            ];

            foreach($imagenes as $imagen):
            ?>
                <div class="gallery-item">
                    <img src="/images/dia1/<?php echo $imagen; ?>" alt="Actividad del día 1" loading="lazy">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="card">
        <h3>Descripción de Actividades</h3>
        <div class="description-box">
            <h4>Inauguración</h4>
            <p>La jornada inició con la ceremonia de inauguración de la Semana de Sistemas 2025, con la participación de autoridades académicas y estudiantes.</p>

            <h4>Ponencias</h4>
            <p>Se llevaron a cabo diversas ponencias sobre temas relevantes en el campo de la tecnología y los sistemas informáticos.</p>

            <h4>Evidencia de Asistencia</h4>
            <p>Las fotografías adjuntas demuestran mi participación activa en las actividades del día, desde la inauguración hasta las diferentes sesiones programadas.</p>
        </div>
    </div>
</section>

<?php include 'layout_footer.php'; ?>
