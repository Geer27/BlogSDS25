<?php include 'layout_header.php'; ?>

<section class="day-header">
    <h2><?php echo $titulo; ?></h2>
    <p class="date"><?php echo $fecha; ?></p>
</section>

<section class="content-section">
    <div class="card construction">
        <h3>En Construcción</h3>
        <p class="construction-message"><?php echo $mensaje; ?></p>
        <p>Esta sección se actualizará con:</p>
        <ul>
            <li>Fotografías de las actividades del día</li>
            <li>Videos de ponencias y talleres</li>
            <li>Descripción detallada de las actividades</li>
            <li>Nombres de ponentes y temas tratados</li>
        </ul>
        <p class="note">Vuelve pronto para ver el contenido actualizado.</p>
    </div>
</section>

<?php include 'layout_footer.php'; ?>
