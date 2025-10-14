<?php include 'layout_header.php'; ?>

<section class="info-header">
    <h2><?php echo $titulo; ?></h2>
</section>

<section class="content-section">
    <div class="card profile-card">
        <div class="profile-content">
            <div class="profile-image">
                <img src="/images/perfil.jpg" alt="Foto de perfil" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22%3E%3Crect fill=%22%23ddd%22 width=%22200%22 height=%22200%22/%3E%3Ctext fill=%22%23999%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dy=%22.3em%22 font-size=%2220%22%3EFoto%3C/text%3E%3C/svg%3E'">
                <p class="note"></p>
            </div>

            <div class="profile-details">
                <h3>Información Personal</h3>

                <div class="info-item">
                    <strong>Nombre Completo:</strong>
                    <p><?php echo $nombre; ?></p>
                </div>

                <div class="info-item">
                    <strong>Carnet:</strong>
                    <p><?php echo $carnet; ?></p>
                </div>

                <div class="info-item">
                    <strong>Carrera:</strong>
                    <p><?php echo $carrera; ?></p>
                </div>

                <div class="info-item">
                    <strong>Universidad:</strong>
                    <p><?php echo $universidad; ?></p>
                </div>

                <div class="info-item">
                    <strong>Facultad:</strong>
                    <p><?php echo $facultad; ?></p>
                </div>

                <div class="info-item">
                    <strong>Email:</strong>
                    <p><?php echo $email; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <h3>Sobre este Blog</h3>
        <p>Este blog documenta mi participación en la Semana de Sistemas 2025, un evento organizado por la Facultad Multidisciplinaria Oriental de la Universidad de El Salvador.</p>
        <p>Cada sección del blog contiene evidencia fotográfica y descripciones detalladas de las actividades, ponencias y talleres realizados durante los cinco días del evento.</p>
    </div>
</section>

<?php include 'layout_footer.php'; ?>
