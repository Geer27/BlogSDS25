<?php include 'layout_header.php'; ?>

<section class="day-header">
    <h2><?php echo $titulo; ?></h2>
    <p class="date"><?php echo $fecha; ?></p>
</section>

<section class="content-section">

    <!-- Resumen del Día -->
    <div class="card">
        <h3>Resumen del Día</h3>
        <p class="info-text">El quinto y último día de la Semana de Sistemas 2025 cerró el evento con broche de oro, combinando diversión interactiva mediante el Gran Juego de Bingo y un emotivo acto de reconocimiento con la Ceremonia de Entrega de Diplomas. Esta jornada final celebró tanto el entretenimiento compartido como el esfuerzo y dedicación de todos los participantes del evento.</p>
    </div>

    <!-- JUEGO DE BINGO -->
    <div class="card ponencia-card">
        <div class="ponencia-number-badge">1</div>
        <h3>Gran Juego de Bingo Interactivo</h3>

        <h4>Introducción al Juego</h4>
        <p>El último día de la Semana de Sistemas comenzó con una actividad recreativa masiva que reunió a toda la comunidad estudiantil en una experiencia de juego compartida. El Gran Juego de Bingo utilizó tecnología web desarrollada por estudiantes, demostrando cómo el entretenimiento puede fusionarse con innovación tecnológica.</p>

        <h4>Plataforma Digital del Bingo</h4>

        <h5>1. Acceso a la Plataforma</h5>
        <div class="slide-image-container">
            <img src="/images/dia5/image_01.jpg" alt="Pantalla de inicio de sesión del Bingo" class="slide-image">
            <p class="image-caption">Interfaz de acceso a la plataforma de Bingo digital con opciones de registro e inicio de sesión para participantes</p>
        </div>
        <p>La plataforma de Bingo digital presentaba una interfaz web móvil accesible desde cualquier dispositivo. Los participantes podían registrarse como nuevos usuarios o iniciar sesión con cuentas existentes, permitiendo un acceso rápido y organizado al juego. Este sistema de autenticación aseguraba que cada jugador tuviera su propio perfil y pudiera mantener un historial de participación.</p>

        <h5>2. Selección de Cartones</h5>
        <div class="slide-image-container">
            <img src="/images/dia5/image_02.jpg" alt="Selección de cartones de Bingo" class="slide-image">
            <p class="image-caption">Pantalla "Mis Cartones" permitiendo a los jugadores seleccionar entre 1 y 4 cartones digitales para participar en el juego</p>
        </div>
        <p>Una vez dentro de la plataforma, los jugadores accedían a la sección "Mis Cartones" donde podían elegir entre 1 y 4 cartones digitales para jugar simultáneamente. Esta funcionalidad replicaba la experiencia tradicional del Bingo físico pero con la ventaja de la gestión digital: los números se marcaban automáticamente, eliminando errores humanos y permitiendo a los jugadores concentrarse en la emoción del juego sin preocuparse por marcar manualmente sus cartones.</p>

        <h5>3. Juego en Vivo - Primera Perspectiva</h5>
        <div class="slide-image-container">
            <img src="/images/dia5/image_03.jpg" alt="Evento de Bingo en el auditorio" class="slide-image">
            <p class="image-caption">Vista del auditorio durante el juego de Bingo con la interfaz proyectada mostrando cartones activos y el último número sorteado</p>
        </div>
        <p>El juego se realizó en el auditorio principal con la interfaz del Bingo proyectada en pantalla grande para que todos los asistentes pudieran seguir el desarrollo en tiempo real. La pantalla mostraba los cartones de los jugadores activos, los números que habían salido y el último número sorteado destacado en un círculo grande. Un presentador en el escenario conducía la actividad, anunciando cada número y manteniendo la energía del evento alta.</p>

        <p>La aplicación manejaba la sincronización en tiempo real entre los dispositivos móviles de cientos de participantes y la pantalla de proyección, demostrando robustez técnica en el manejo de concurrencia y actualización simultánea de estados. La interfaz mostraba claramente el progreso de cada jugador hacia el Bingo completo.</p>

        <h5>4. Ambiente del Evento</h5>
        <div class="slide-image-container">
            <img src="/images/dia5/image_04.jpg" alt="Perspectiva amplia del evento de Bingo" class="slide-image">
            <p class="image-caption">Toma amplia del escenario mostrando la decoración  y la audiencia participando activamente en el juego digital</p>
        </div>
        <p>El auditorio estaba decorado especialmente para el evento, La audiencia, compuesta por estudiantes de diferentes niveles académicos, participaba activamente desde sus asientos usando sus smartphones o tablets para jugar.</p>

        <p>El ambiente era festivo y competitivo a la vez. Los gritos de emoción cuando alguien estaba cerca de completar su cartón, los aplausos cuando se anunciaba un ganador, y la tensión compartida mientras se esperaba el siguiente número creaban una experiencia comunitaria memorable. Este tipo de actividades refuerza el sentido de pertenencia y crea recuerdos compartidos que perduran más allá de la vida universitaria.</p>

        <h4>Aspectos Técnicos del Sistema</h4>
        <p>El sistema de Bingo digital demostró competencias avanzadas en desarrollo web: arquitectura cliente-servidor con WebSockets para comunicación bidireccional en tiempo real, gestión de sesiones y autenticación de usuarios, validación automática de cartones ganadores, interfaz responsive adaptable a diferentes tamaños de pantalla, manejo de alta concurrencia con cientos de usuarios simultáneos, y sincronización perfecta entre múltiples dispositivos y la proyección principal.</p>

        <p>Este proyecto representa un caso de estudio excelente de cómo aplicar tecnologías modernas para crear experiencias interactivas masivas, habilidades directamente transferibles a aplicaciones empresariales de votación en tiempo real, sistemas de subasta, plataformas de colaboración en vivo y herramientas de participación en eventos.</p>
    </div>

    <!-- CEREMONIA DE ENTREGA DE DIPLOMAS -->
    <div class="card ponencia-card">
        <div class="ponencia-number-badge">2</div>
        <h3>Ceremonia de Entrega de Diplomas</h3>

        <h4>Clausura con Reconocimiento</h4>
        <p>La Semana de Sistemas 2025 concluyó con una emotiva Ceremonia de Entrega de Diplomas que reconoció la participación activa de estudiantes, organizadores, ponentes y colaboradores del evento. Este acto formal cerró cinco días intensos de aprendizaje, innovación y convivencia.</p>

        <h5>Momento de la Entrega</h5>
        <div class="slide-image-container">
            <video controls class="slide-image" style="width: 100%; max-width: 750px; height: auto;">
                <source src="/images/dia5/video_diplomas.mp4" type="video/mp4">
                Tu navegador no soporta la reproducción de video.
            </video>
            <p class="image-caption">Video de la ceremonia de entrega de diplomas mostrando a grupos de estudiantes recibiendo su reconocimiento por participar en la Semana de Sistemas 2025</p>
        </div>
        <p>estudiantes subían al escenario para recibir sus diplomas de participación. </p>

        <p>Cada grupo posaba para fotografías oficiales sosteniendo sus diplomas con orgullo, capturando un momento que documenta formalmente su participación en este importante evento académico. Las sonrisas y gestos de satisfacción reflejaban tanto el alivio de concluir exitosamente el evento como el orgullo por los logros alcanzados durante la semana.</p>

        <h4>Significado de los Diplomas</h4>
        <p>Aunque los diplomas de participación pueden parecer un detalle ceremonial, tienen un valor real para los estudiantes. Estos certificados documentan formalmente la asistencia a ponencias técnicas especializadas, participación en talleres prácticos, exposición de proyectos en la Feria de Logros, y compromiso con el desarrollo profesional continuo.</p>

        <p>Muchos estudiantes incluyen estos certificados en sus portafolios académicos y currículos profesionales, demostrando a futuros empleadores su iniciativa para participar en actividades extracurriculares de formación. Además, algunas universidades otorgan créditos académicos o reconocimientos especiales por participación en eventos de esta naturaleza.</p>

        <h4>Palabras de Clausura</h4>
        <p>Durante la ceremonia, las autoridades académicas pronunciaron palabras de agradecimiento y reconocimiento. Se destacó el esfuerzo del comité organizador estudiantil que trabajó durante meses planificando cada detalle del evento. Se agradeció a los ponentes invitados por compartir generosamente su conocimiento y experiencia. Se felicitó a los estudiantes que presentaron proyectos en la Feria de Logros por demostrar el alto nivel de formación que se alcanza en la facultad.</p>

        <p>También se enfatizó la importancia de eventos como la Semana de Sistemas para complementar la formación académica tradicional, exponer a los estudiantes a tecnologías emergentes, y crear espacios de networking entre estudiantes, docentes y profesionales de la industria. Se anunció el compromiso de continuar y mejorar este evento en futuras ediciones, incorporando las lecciones aprendidas y ampliando el alcance para beneficiar a más estudiantes.</p>

        <h4>Reflexión sobre el Evento Completo</h4>
        <p>La ceremonia de clausura invitó a todos los participantes a reflexionar sobre lo vivido durante los cinco días. Desde las ponencias técnicas sobre Bitcoin e Inteligencia Artificial del primer día, pasando por los talleres prácticos de análisis de datos y desarrollo con Laravel del segundo día, el torneo de fútbol cancelado por lluvias del tercer día, la impresionante Feria de Logros y la divertida pupuseada del cuarto día, hasta el Bingo interactivo y la ceremonia de diplomas del quinto día, cada jornada aportó experiencias únicas e inolvidables.</p>

        <p>La Semana de Sistemas 2025 demostró ser más que un simple evento académico: fue una celebración de la comunidad estudiantil de Ingeniería de Sistemas, un escaparate del talento local, una oportunidad de networking profesional, y un recordatorio de por qué elegimos esta apasionante carrera. Los vínculos creados, las ideas intercambiadas y las experiencias compartidas durante esta semana formarán parte del bagaje profesional y personal de cada participante.</p>
    </div>

    <!-- Reflexión Personal -->
    <div class="card">
        <h3>Reflexión Personal</h3>
        <p>El último día de la Semana de Sistemas fue agridulce. Por un lado, la emoción del Bingo interactivo nos permitió cerrar con una nota alegre y relajada, disfrutando de la tecnología que nosotros mismos podemos crear. Ver a cientos de compañeros jugando simultáneamente usando una aplicación desarrollada por estudiantes de nuestra propia facultad fue inspirador y demostró que el talento está aquí, solo necesita las oportunidades para brillar.</p>

        <p>La ceremonia de diplomas, aunque protocolar, tuvo un significado especial para mí. Recibir ese certificado no fue solo obtener un papel, sino un reconocimiento tangible de que invertí mi tiempo en crecer profesionalmente, que participé activamente en mi formación más allá del aula, y que formo parte de una comunidad de futuros ingenieros comprometidos con la excelencia.</p>

        <p>Al mirar hacia atrás a toda la semana, me doy cuenta de que los aprendizajes técnicos —aunque valiosos— fueron solo una parte de la experiencia. Aprendí sobre Bitcoin, Inteligencia Artificial, análisis de datos y frameworks modernos, pero también aprendí sobre perseverancia cuando el torneo se canceló por lluvia, sobre colaboración al trabajar en equipo durante los talleres, sobre comunicación al presentar proyectos en la feria, y sobre balance al disfrutar momentos de esparcimiento como la pupuseada y el Bingo.</p>

        <p>Esta semana reforzó mi convicción de que la ingeniería de sistemas es la carrera correcta para mí. No solo por la fascinación técnica con la tecnología, sino por la comunidad increíble de personas apasionadas, curiosas y talentosas que la conforman. Los amigos que hice, los contactos profesionales que establecí, y las experiencias compartidas son tesoros que llevaré conmigo mucho después de graduarme.</p>

        <p class="conclusion-final">La Semana de Sistemas 2025 terminó, pero su impacto perdurará. Las ideas sembradas germinarán en futuros proyectos. Las conexiones establecidas se convertirán en colaboraciones profesionales. Las experiencias vividas se transformarán en anécdotas que contaremos con nostalgia años después. Gracias a todos los que hicieron posible este evento extraordinario. Nos vemos en la Semana de Sistemas 2026, donde estoy seguro superaremos todo lo logrado este año.</p>
    </div>

</section>

<?php include 'layout_footer.php'; ?>
