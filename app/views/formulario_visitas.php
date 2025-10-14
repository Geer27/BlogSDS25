<?php include 'layout_header.php'; ?>

<section class="form-header">
    <h2><?php echo $titulo; ?></h2>
    <p>Deja un registro de tu visita a este blog</p>
</section>

<section class="content-section">
    <?php if(isset($exito)): ?>
        <div class="alert alert-success">
            <p><?php echo $exito; ?></p>
        </div>
    <?php endif; ?>

    <?php if(isset($error)): ?>
        <div class="alert alert-error">
            <p><?php echo $error; ?></p>
        </div>
    <?php endif; ?>

    <div class="card form-card">
        <form method="POST" action="/visitas/registrar" class="visita-form">
            <div class="form-group">
                <label for="nombre">Nombre Completo *</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre completo">
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico *</label>
                <input type="email" id="email" name="email" required placeholder="tu@email.com">
            </div>

            <div class="form-group">
                <label for="comentario">Comentario (Opcional)</label>
                <textarea id="comentario" name="comentario" rows="5" placeholder="Deja tu comentario sobre el blog..."></textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Registrar Visita</button>
                <a href="/" class="btn btn-secondary">Volver al Inicio</a>
            </div>
        </form>
    </div>

    <div class="card">
        <h3>¿Por qué registrar tu visita?</h3>
        <p>Tu registro nos ayuda a:</p>
        <ul>
            <li>Conocer el alcance y el impacto del blog</li>
            <li>Mejorar el contenido basado en los comentarios recibidos</li>
            <li>Mantener un registro de visitantes interesados en el evento</li>
            <li>Generar estadísticas de visitas al blog</li>
        </ul>
        <p class="note"><strong>Nota:</strong> Todos los campos marcados con * son obligatorios.</p>
    </div>
</section>

<?php include 'layout_footer.php'; ?>
