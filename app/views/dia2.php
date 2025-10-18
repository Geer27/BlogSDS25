<?php include 'layout_header.php'; ?>

<section class="day-header">
    <h2><?php echo $titulo; ?></h2>
    <p class="date"><?php echo $fecha; ?></p>
</section>

<section class="content-section">

    <!-- Resumen del Día -->
    <div class="card">
        <h3>Resumen del Día</h3>
        <p class="info-text">El segundo día de la Semana de Sistemas 2025 estuvo dedicado a talleres prácticos que demostraron la aplicación directa de tecnologías y metodologías modernas en el desarrollo profesional. Los participantes tuvieron la oportunidad de aprender sobre análisis de datos para decisiones estratégicas y desarrollo web ágil con herramientas contemporáneas.</p>
    </div>

    <!-- PRIMER TALLER: TOMA DE DECISIONES BASADAS EN DATOS -->
    <div class="card ponencia-card">
        <div class="ponencia-number-badge">1</div>
        <h3>Toma de Decisiones Estratégicas Basadas en Datos</h3>
        <p class="ponente-badge">Msc. Enrique Cortez</p>

        <h4>Introducción al Taller</h4>
        <p>El Msc. Enrique Cortez dirigió un taller fundamental que exploró cómo transformar datos crudos en información valiosa para la toma de decisiones estratégicas en organizaciones modernas. A través de ejemplos prácticos y casos reales, los participantes aprendieron a entender la diferencia crucial entre datos aislados, información organizada y conocimiento aplicable.</p>

        <h4>Contenido Desarrollado</h4>

        <h5>1. Fundamentos: Qué es un Dato y Cómo se Construye la Información</h5>
        <div class="slide-image-container">
            <img src="/images/dia2/image_04.png" alt="Jerarquía de datos a conocimiento" class="slide-image">
            <p class="image-caption">Representación visual mediante bloques de construcción que ilustra la progresión jerárquica desde un dato aislado hasta estructuras complejas de conocimiento, mostrando cómo la organización y agregación de datos genera información y eventualmente conocimiento aplicable</p>
        </div>
        <p>El taller inició con una explicación conceptual fundamental utilizando una metáfora visual altamente efectiva: bloques de construcción tipo Lego que representan la evolución progresiva de los datos. Esta analogía permitió a los participantes comprender de manera intuitiva un concepto técnicamente complejo.</p>
        <p>La presentación estableció cuatro niveles jerárquicos claramente diferenciados. El primer nivel muestra un bloque individual que representa un dato como unidad aislada, completamente descontextualizado y sin significado por sí mismo. Por ejemplo, el número 25 aislado no nos dice nada útil, podría ser una edad, una temperatura, un precio o cualquier otra medida. Este es el nivel más básico y fundamental de la información.</p>
        <p>El segundo nivel presenta diez bloques desordenados, representando datos sin organizar. Aquí vemos múltiples datos que existen pero carecen de estructura o relación aparente entre sí. Son datos recopilados pero no procesados. Siguiendo el ejemplo anterior, podríamos tener 25, Juan, octubre, temperatura sin ninguna conexión clara entre estos elementos.</p>
        <p>El tercer nivel muestra cien bloques ordenados que representan información estructurada. En este nivel crítico, los datos han sido organizados siguiendo criterios lógicos y significativos, transformándose en información útil. Los bloques ahora forman filas ordenadas, representando registros estructurados en tablas o bases de datos. Por ejemplo, Juan tiene 25 años y su temperatura corporal medida en octubre fue de 36.5 grados centígrados ya constituye información procesable.</p>
        <p>El cuarto nivel es el más avanzado: un castillo con bloques que representa conocimiento complejo. Aquí la información estructurada se combina, analiza y contextualiza para generar conocimiento aplicable que permite tomar decisiones estratégicas. Siguiendo nuestro ejemplo, el conocimiento sería: los pacientes menores de 30 años en octubre presentan menor incidencia de fiebres estacionales, lo que sugiere implementar campañas de vacunación enfocadas en grupos de mayor edad.</p>
        <p>Esta progresión ilustra la fórmula fundamental presentada en la diapositiva: Dato como unidad aislada conduce a Datos organizados que se convierten en información, y estos a su vez generan Estructuras complejas de conocimiento. El mensaje clave es que los datos por sí solos tienen valor limitado, su verdadero poder emerge cuando se organizan, procesan y contextualizan adecuadamente.</p>

        <h5>2. Datos Aplicados a Sucesos de la Vida Diaria</h5>
        <div class="slide-image-container">
            <img src="/images/dia2/image_03.png" alt="Aplicaciones prácticas de datos" class="slide-image">
            <p class="image-caption">Ejemplos concretos de cómo los datos organizados se aplican en situaciones cotidianas: seguimiento de actividad física mediante pasos diarios, optimización del consumo eléctrico en el hogar y control de gastos personales para mejorar finanzas</p>
        </div>
        <p>El Msc. Cortez continuó el taller conectando los conceptos teóricos con aplicaciones prácticas que todos los participantes podían relacionar con su vida cotidiana. Esta estrategia pedagógica demostró que el análisis de datos no es exclusivo de grandes corporaciones, sino una habilidad aplicable a nivel personal.</p>
        <p>Se presentaron tres casos de uso cotidianos que ilustran perfectamente cómo convertir datos en decisiones. El primero relacionado con pasos diarios para actividad física, donde las aplicaciones de salud y dispositivos wearables como smartwatches registran constantemente nuestros pasos diarios. Un dato aislado como 8500 pasos el lunes tiene valor limitado. Sin embargo, cuando recopilamos estos datos durante semanas y meses, podemos identificar patrones: quizás los lunes y martes caminamos más por nuestra rutina laboral, mientras que los fines de semana somos más sedentarios. Esta información nos permite tomar decisiones estratégicas personales: establecer metas realistas como aumentar nuestros pasos de fin de semana en un 30 por ciento o caminar 10000 pasos diarios. El histórico de datos transforma un número aislado en conocimiento accionable sobre nuestros hábitos de salud.</p>
        <p>El segundo caso abordó el consumo eléctrico y eficiencia energética. Los recibos de electricidad mensuales proporcionan datos sobre nuestro consumo en kilovatios-hora. Al analizar estos datos a lo largo del tiempo y correlacionarlos con nuestros hábitos, podemos identificar patrones de consumo problemáticos. Por ejemplo, podríamos descubrir que el consumo se dispara en julio-agosto por el uso intensivo de aire acondicionado, o que el consumo nocturno es anormalmente alto por electrodomésticos en modo stand-by. Esta información permite tomar decisiones concretas de ahorro: ajustar la temperatura del aire acondicionado dos grados más, desconectar aparatos innecesarios por la noche, o invertir en electrodomésticos más eficientes. El conocimiento derivado del análisis de datos se traduce directamente en ahorro económico mensurable.</p>
        <p>El tercer caso trató sobre gastos personales y gestión financiera. Aplicaciones de banca móvil y gestión financiera registran automáticamente cada transacción que realizamos. Un gasto individual de 3.50 dólares en café parece insignificante, pero al categorizar y analizar meses de transacciones, podemos detectar fugas financieras importantes: quizás gastamos 105 dólares mensuales en café, 80 dólares en suscripciones digitales que apenas usamos, o 200 dólares en comidas fuera de casa. Esta información organizada nos permite optimizar nuestro presupuesto mensual de forma estratégica: reducir gastos innecesarios, redirigir fondos hacia ahorros o inversiones, y establecer límites conscientes de gasto por categoría. Los datos transformados en conocimiento nos dan control real sobre nuestras finanzas personales.</p>
        <p>Estos ejemplos demostraron un principio fundamental: el análisis de datos no requiere software especializado de millones de dólares ni equipos de científicos de datos. Con herramientas básicas como hojas de cálculo, aplicaciones móviles gratuitas y disciplina para registrar información consistentemente, cualquier persona puede aplicar estos principios para mejorar aspectos concretos de su vida.</p>

        <h5>3. Caso de Estudio: Datos en la Educación Superior de El Salvador</h5>
        <div class="slide-image-container">
            <img src="/images/dia2/image_02.png" alt="Estadísticas educación superior" class="slide-image">
            <p class="image-caption">Gráfico de barras que compara la matrícula o cantidad de egresados en las cinco carreras universitarias más populares en El Salvador: Administración de Empresas lidera significativamente, seguida por Derecho, Sistemas e Informática, Salud e Ingeniería Industrial, según datos del MINED</p>
        </div>
        <p>Para demostrar la aplicación de análisis de datos en contextos más amplios y con implicaciones estratégicas para instituciones, el Msc. Cortez presentó un caso real del sector educativo salvadoreño, utilizando estadísticas oficiales del Ministerio de Educación.</p>
        <p>El gráfico de barras presentado revela información estratégicamente valiosa sobre las tendencias educativas en El Salvador. Los datos muestran las cinco áreas de estudio universitarias con mayor matrícula o número de egresados. Administración de Empresas domina claramente el panorama educativo con aproximadamente 28 a 30 unidades en la escala, que podría representar miles de estudiantes o porcentaje de matrícula total. Esta preferencia masiva refleja la percepción generalizada de que esta carrera ofrece versatilidad laboral y oportunidades en prácticamente cualquier sector económico.</p>
        <p>Derecho ocupa el segundo lugar con aproximadamente 21 unidades, demostrando el atractivo persistente de las profesiones tradicionales liberales en la cultura latinoamericana, donde los abogados mantienen prestigio social considerable. Sistemas e Informática aparece en tercer lugar con cerca de 16 unidades, un dato particularmente relevante para los asistentes a la Semana de Sistemas. Aunque es la tercera carrera más popular, la brecha con Administración de Empresas es significativa, lo que podría indicar una oportunidad de crecimiento en este campo tecnológico.</p>
        <p>Salud registra aproximadamente 14 unidades, reflejando la demanda constante de profesionales médicos, enfermería y carreras relacionadas, especialmente relevante en el contexto post-pandemia. Ingeniería Industrial cierra el top cinco con cerca de 10 unidades, mostrando menor popularidad relativa pero representando un campo técnico esencial para el desarrollo industrial del país.</p>
        <p>Este conjunto de datos, cuando se analiza estratégicamente, genera conocimiento accionable para múltiples actores. Las universidades pueden usar esta información para ajustar su oferta académica, identificando oportunidades en carreras con menor saturación pero alta demanda laboral. Los estudiantes pueden tomar decisiones más informadas considerando la competencia que enfrentarán en el mercado laboral. El gobierno puede identificar brechas entre la oferta educativa y las necesidades del mercado, diseñando políticas de incentivos para carreras estratégicas con baja matrícula pero alta demanda empresarial.</p>

        <h5>4. Ejercicio Práctico: Análisis de Datos de Farmacias</h5>
        <div class="slide-image-container">
            <img src="/images/dia2/image_01.png" alt="Dataset de transacciones farmacéuticas" class="slide-image">
            <p class="image-caption">Hoja de cálculo mostrando un dataset real de transacciones de múltiples farmacias, incluyendo fecha, ubicación, cliente, código de producto, tipo de medicamento, cantidad y precio, utilizado como ejercicio práctico para análisis de datos y toma de decisiones empresariales</p>
        </div>
        <p>El taller culminó con un ejercicio práctico altamente relevante que permitió a los participantes aplicar directamente todos los conceptos aprendidos. El Msc. Cortez presentó un dataset real de transacciones de una cadena de farmacias operando en diferentes ciudades de El Salvador.</p>
        <p>El conjunto de datos mostrado en la hoja de cálculo incluye información estructurada en columnas claramente definidas: fecha de transacción desde octubre 2024 hasta enero 2025, farmacia o sucursal como Farmacia Central, Farmacia Salud, Farmacia Oriente y Farmacia Popular, ubicación geográfica incluyendo La Unión, Usulután, San Miguel y Morazán, nombre del cliente, código de producto con identificadores numéricos de 4 a 5 dígitos, tipo de medicamento clasificado como Antihistamínico, Antibiótico, Antipirético, Analgésico o Antiinflamatorio, cantidad vendida por transacción típicamente entre 1 y 5 unidades, y precio o costo en dólares con rangos desde 2.55 hasta 24.81 dólares.</p>
        <p>El dataset, presentado con formato de filas alternas en verde claro para facilitar su lectura, contiene 23 registros visibles y representa exactamente el tipo de información con la que los gerentes de farmacias trabajan diariamente.</p>
        <p>El facilitador guió a los participantes a través de preguntas estratégicas que este dataset puede responder, demostrando la transformación de datos en conocimiento accionable. En el análisis de inventario y demanda, se puede determinar qué tipo de medicamento se vende más frecuentemente contando las categorías para identificar si los Antipiréticos o Antibióticos dominan las ventas, permitiendo optimizar el inventario. Calculando el promedio de la columna de precios, la gerencia puede establecer estrategias de pricing y promociones.</p>
        <p>En el análisis geográfico, sumando los precios por ubicación se puede identificar qué sucursal genera más ingresos, quizás La Unión genera más que Morazán, lo que justificaría inversión diferenciada en cada sucursal. También se pueden detectar diferencias en los tipos de medicamentos vendidos por región, tal vez en San Miguel se venden más Antibióticos mientras que en Usulután predominan los Analgésicos, sugiriendo necesidades de salud diferentes por zona.</p>
        <p>El análisis temporal permite comparar ventas de octubre 2024 versus enero 2025 para detectar patrones estacionales, como más Antipiréticos en temporada de lluvia, además de identificar qué días o meses tienen mayor actividad para optimizar la programación de personal.</p>
        <p>Finalmente, el análisis de rentabilidad determina cuál es el ticket promedio por cliente y qué productos generan más ingresos totales, información que guía qué productos promocionar y cuáles considerar descontinuar.</p>
        <p>Los participantes trabajaron en grupos pequeños analizando el dataset con herramientas básicas de hoja de cálculo, practicando funciones como suma, promedio, contar si, tablas dinámicas y gráficos. El ejercicio demostró que con datos bien estructurados y preguntas correctas, incluso herramientas simples pueden generar insights empresariales valiosos.</p>
    </div>

    <!-- SEGUNDO TALLER: CRUD CON LARAVEL Y FILAMENT -->
    <div class="card ponencia-card">
        <div class="ponencia-number-badge">2</div>
        <h3>Construyendo un CRUD en Minutos con Laravel y Filament</h3>
        <p class="ponente-badge">Ing. Gabriel Castillo</p>

        <h4>Introducción al Taller</h4>
        <p>El Ing. Gabriel Castillo condujo un taller técnico altamente práctico que demostró las capacidades del framework Laravel combinado con Filament, un panel de administración moderno que permite desarrollar sistemas CRUD completos en fracciones del tiempo que tomarían con desarrollo tradicional.</p>

        <h4>Tecnologías Presentadas</h4>
        <p><strong>Laravel:</strong> Framework de PHP reconocido mundialmente como uno de los más elegantes y potentes para desarrollo web. Proporciona herramientas robustas para routing, autenticación, migraciones de bases de datos y validación de formularios.</p>

        <p><strong>Filament:</strong> Conjunto de componentes para construir paneles de administración en Laravel con velocidad extraordinaria. Proporciona formularios funcionales, tablas de datos con búsqueda y filtrado, gestión de relaciones entre modelos, y una experiencia de usuario moderna.</p>

        <h4>Sistema Desarrollado en la Demostración</h4>

        <h5>1. Gestión de Usuarios</h5>
        <div class="slide-image-container">
            <img src="/images/dia2/image_05.png" alt="Formulario de creación de usuario" class="slide-image">
            <p class="image-caption">Interfaz del formulario de creación de usuarios en Filament con campos para nombre, correo electrónico, roles, verificación de email y contraseña</p>
        </div>
        <p>El Ing. Castillo mostró la funcionalidad de gestión de usuarios con un formulario que incluye campos para nombre completo, email con validación automática, selector de roles para control de acceso, y campo de contraseña con encriptación automática mediante bcrypt.</p>

        <h5>2. Sistema de Roles y Permisos</h5>
        <div class="slide-image-container">
            <img src="/images/dia2/image_06.png" alt="Lista de roles del sistema" class="slide-image">
            <p class="image-caption">Interfaz de gestión de roles mostrando el rol Super Admin con 11 permisos asignados y opciones para editar o eliminar</p>
        </div>
        <p>Se presentó el sistema de autorización basado en roles usando Filament Shield con Spatie Permission. La tabla muestra roles con sus permisos, guard name para autenticación, y controles para búsqueda y paginación.</p>

        <h5>3. Gestión de Productos</h5>
        <div class="slide-image-container">
            <img src="/images/dia2/image_07.png" alt="Lista de productos" class="slide-image">
            <p class="image-caption">Tabla de productos mostrando registros de Camisa Tipo Polo con nombre, descripción, precio, stock y tallas disponibles</p>
        </div>
        <p>El módulo central del sistema muestra cómo Filament genera automáticamente interfaces CRUD completas. La tabla incluye columnas para nombre, descripción, precio formateado como moneda, stock total calculado automáticamente, y tallas disponibles mostrando relaciones many-to-many.</p>

        <h5>4. Formulario de Creación de Productos</h5>
        <div class="slide-image-container">
            <img src="/images/dia2/image_08.png" alt="Formulario de creación de producto" class="slide-image">
            <p class="image-caption">Formulario para crear productos con campos para nombre, descripción, precio en dólares y selector de imagen</p>
        </div>
        <p>El formulario de creación incluye campos validados para nombre obligatorio, descripción opcional, precio con formato de moneda, y selector de imagen con manejo automático de subida de archivos y validación de tipos.</p>

        <h5>5. Módulo de Tallas e Inventario</h5>
        <div class="slide-image-container">
            <img src="/images/dia2/image_09.png" alt="Gestión de tallas" class="slide-image">
            <p class="image-caption">Interfaz de gestión de tallas con tabla para manejar variantes de productos por tamaño y cantidad en inventario</p>
        </div>
        <p>El módulo de Tallas permite gestionar inventario por variantes de tamaño. En lugar de crear productos separados para cada talla, el sistema maneja un producto base con múltiples registros de talla, facilitando reportes agregados y control granular de stock.</p>

        <h4>Conclusiones del Taller</h4>
        <p>El Ing. Gabriel Castillo demostró exitosamente cómo Laravel y Filament revolucionan el desarrollo web, reduciendo semanas de trabajo a minutos mediante configuración declarativa. El sistema completo incluye autenticación robusta, autorización con roles y permisos, gestión CRUD de entidades relacionadas, manejo de relaciones de base de datos, subida de archivos, validación comprehensiva, interfaces responsivas, búsqueda y filtrado en tiempo real.</p>

        <p>Los participantes apreciaron especialmente la rapidez del desarrollo, la calidad profesional de las interfaces generadas automáticamente, la seguridad integrada y la facilidad de personalización. El enfoque pragmático del taller permitió visualizar cómo aplicar estas herramientas en proyectos reales inmediatamente.</p>
    </div>

    <!-- Reflexión Personal -->
    <div class="card">
        <h3>Reflexión Personal</h3>
        <p>El segundo día de la Semana de Sistemas 2025 me brindó aprendizajes profundamente prácticos que complementan perfectamente las tecnologías del día anterior. La dualidad de talleres fue especialmente valiosa, abordando tanto la perspectiva analítica de datos como la implementación técnica de sistemas, dos pilares fundamentales del desarrollo profesional moderno.</p>

        <p>El taller del Msc. Enrique Cortez me hizo comprender que el valor real no reside en los datos mismos, sino en nuestra capacidad de transformarlos en conocimiento accionable. La progresión conceptual desde un dato aislado hasta estructuras complejas de conocimiento, ilustrada con la metáfora de bloques de construcción, cambió mi perspectiva sobre cómo abordar problemas empresariales. Ahora entiendo que antes de implementar cualquier solución tecnológica, debo identificar qué datos son relevantes, cómo organizarlos efectivamente y qué preguntas estratégicas pueden responder. El ejercicio práctico con el dataset de farmacias fue revelador porque demostró que no se necesitan herramientas sofisticadas de Business Intelligence para comenzar a extraer valor de los datos, basta con pensamiento analítico estructurado y herramientas básicas como hojas de cálculo.</p>

        <p>Por otro lado, el taller del Ing. Gabriel Castillo fue una revelación técnica. Como estudiante de sistemas, frecuentemente he sentido frustración por el tiempo que consume implementar funcionalidades básicas como autenticación, autorización y formularios CRUD. Ver cómo Laravel y Filament reducen semanas de desarrollo a minutos me mostró que la industria ha evolucionado hacia paradigmas de desarrollo que priorizan productividad sin sacrificar calidad. La demostración en vivo fue especialmente impactante porque no fue una presentación ensayada de diapositivas, sino código real funcionando, con todas sus complejidades de relaciones de bases de datos, validaciones y control de acceso. Me di cuenta de que dominar frameworks modernos ya no es opcional sino esencial para ser competitivo profesionalmente.</p>

        <p>La conexión entre ambos talleres también me resultó significativa. El sistema CRUD demostrado en el segundo taller generaría exactamente el tipo de datos estructurados que analizamos en el primer taller. Esto me hizo comprender el ciclo completo del trabajo con datos en aplicaciones empresariales: desarrollo de sistemas que capturan información correctamente, almacenamiento estructurado en bases de datos, y análisis posterior para toma de decisiones. Ambas competencias se complementan y fortalecen mutuamente.</p>

        <p class="conclusion-final">Este día me enseñó que el desarrollo de sistemas moderno requiere dos mentalidades complementarias: la del arquitecto que organiza y analiza información para generar valor estratégico, y la del ingeniero pragmático que utiliza herramientas modernas para construir soluciones eficientemente. Dominar ambas perspectivas es lo que distingue a un programador de un verdadero profesional de sistemas.</p>
    </div>

</section>

<?php include 'layout_footer.php'; ?>
