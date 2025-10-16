<?php include 'layout_header.php'; ?>

<section class="day-header">
    <h2><?php echo $titulo; ?></h2>
    <p class="date"><?php echo $fecha; ?></p>
</section>

<section class="content-section">

    <!-- Resumen del Día -->
    <div class="card">
        <h3>📋 Resumen del Día</h3>
        <p class="info-text">El primer día de la Semana de Sistemas 2025 inauguró con gran éxito, presentando dos ponencias magistrales que abordaron tecnologías disruptivas del presente: Bitcoin y la Inteligencia Artificial Generativa.</p>
    </div>

    <!-- PRIMERA PONENCIA: BITCOIN -->
    <div class="card">
        <h3>💰 El ABC de Bitcoin</h3>
        <p class="ponente-badge">Ing. Luis Contreras | Fundación Misión PR</p>

        <div class="ponente-image-container">
            <img src="/images/dia1/IMG_20251013_090803641_HDR.jpg" alt="Ing. Luis Contreras presentando" class="ponente-image">
            <p class="image-caption">Ing. Luis Contreras durante su ponencia sobre Bitcoin en el escenario principal de la Semana de Sistemas 2025, presentando el curso introductorio a las criptomonedas</p>
        </div>

        <h4>Temario Desarrollado</h4>

        <h5>1. Introducción al Curso y Agenda</h5>
        <div class="slide-image-container">
            <img src="/images/dia1/IMG_20251013_090821337.jpg" alt="Agenda curso Bitcoin" class="slide-image">
            <p class="image-caption">Diapositiva de apertura mostrando la agenda completa del curso de introducción a Bitcoin patrocinado por la Fundación Misión PR, estructurado en cinco módulos fundamentales</p>
        </div>
        <p>El Ing. Luis Contreras inició su ponencia presentando un curso estructurado e integral sobre Bitcoin, diseñado para que los asistentes comprendieran desde los fundamentos económicos básicos hasta las aplicaciones prácticas de esta criptomoneda revolucionaria. La agenda del curso fue diseñada pedagógicamente para construir el conocimiento de manera progresiva:</p>
        <p>El curso abordó cinco módulos esenciales: primero, una exploración profunda sobre <strong>qué es el dinero</strong>, analizando su evolución histórica desde el trueque hasta las monedas fiduciarias modernas, sus funciones como medio de intercambio, unidad de cuenta y reserva de valor; segundo, un análisis crítico sobre <strong>por qué está roto el sistema actual</strong>, examinando problemas como la inflación descontrolada, la centralización del poder monetario y la pérdida de valor adquisitivo; tercero, una introducción conceptual a <strong>qué es Bitcoin</strong>, explicando su naturaleza como moneda digital descentralizada y su filosofía subyacente; cuarto, una explicación técnica de <strong>cómo funciona Bitcoin</strong>, incluyendo la tecnología blockchain, el proceso de minería y el sistema de verificación distribuida; y finalmente, una guía práctica sobre <strong>cómo usar Bitcoin</strong>, cubriendo aspectos como la adquisición, almacenamiento seguro y realización de transacciones.</p>

        <h5>2. La Crisis del Sistema Monetario Actual</h5>
        <div class="slide-image-container">
            <img src="/images/dia1/IMG_20251013_092847604.jpg" alt="Gráfico dólar" class="slide-image">
            <p class="image-caption">Gráfico histórico del poder adquisitivo del dólar estadounidense desde 1913 hasta 2017, mostrando la dramática devaluación del 96% desde la creación de la Reserva Federal</p>
        </div>
        <p>Se presentó uno de los datos más impactantes de la ponencia: un gráfico histórico revelador que documenta el poder adquisitivo del dólar estadounidense a lo largo de más de un siglo, específicamente entre 1913 y 2017. Este período es particularmente significativo porque coincide con la creación de la Reserva Federal en 1913, institución que cambió fundamentalmente el sistema monetario estadounidense y, por extensión, el sistema financiero global.</p>
        <p>Los datos presentados son alarmantes: desde la creación de la Reserva Federal en 1913, el dólar estadounidense ha perdido más del <strong>96% de su valor</strong>. Esto significa que lo que se podía comprar con un dólar en 1913, ahora requiere aproximadamente 25 dólares. Esta devaluación masiva no es accidental ni natural, sino el resultado directo de políticas monetarias basadas en la expansión continua de la oferta de dinero, comúnmente conocida como inflación monetaria.</p>
        <p>El ingeniero Contreras explicó que este fenómeno evidencia los problemas estructurales fundamentales del sistema monetario fiduciario moderno: la capacidad ilimitada de los bancos centrales para imprimir dinero sin respaldo tangible, la inflación sistemática que erosiona los ahorros de la población, y la transferencia de riqueza desde los ciudadanos comunes hacia las instituciones financieras y gobiernos que controlan la emisión monetaria. Esta contextualización histórica y económica estableció la base para entender por qué Bitcoin y otras criptomonedas descentralizadas representan una alternativa necesaria y revolucionaria al sistema actual.</p>

        <h5>3. Funcionamiento Técnico: Transacciones P2P y Blockchain</h5>
        <div class="slide-image-container">
            <img src="/images/dia1/IMG_20251013_094251569.jpg" alt="Diagrama P2P" class="slide-image">
            <p class="image-caption">Diagrama completo del proceso de transacciones entre pares (Peer-to-Peer) en la red Bitcoin, mostrando las seis etapas desde la solicitud inicial hasta la confirmación final en la blockchain</p>
        </div>
        <p>Se detalló minuciosamente el proceso técnico completo de cómo funciona una transacción en la red Bitcoin, utilizando el modelo revolucionario de transacciones entre pares o <strong>Peer-to-Peer (P2P)</strong>, que elimina la necesidad de intermediarios financieros tradicionales como bancos o procesadores de pago.</p>
        <p>El proceso fue explicado en seis pasos secuenciales claramente definidos:</p>
        <p><strong>Paso 1 - Solicitud de Transacción:</strong> Un usuario inicia el proceso solicitando transferir bitcoins a otro usuario. Esta solicitud incluye la dirección del destinatario, la cantidad a transferir y es firmada digitalmente con la clave privada del remitente para probar la propiedad de los fondos.</p>
        <p><strong>Paso 2 - Transmisión a la Red:</strong> La transacción solicitada se transmite instantáneamente a toda la red descentralizada de Bitcoin, llegando a miles de computadoras distribuidas globalmente conocidas como nodos. Estos nodos mantienen copias completas o parciales del historial de transacciones de Bitcoin.</p>
        <p><strong>Paso 3 - Verificación por Mineros:</strong> Los mineros, que son nodos especializados con alto poder computacional, recogen estas transacciones pendientes y verifican su validez. Esta verificación incluye confirmar que el remitente posee suficientes bitcoins, que no está intentando gastar los mismos bitcoins dos veces (problema del doble gasto), y que las firmas criptográficas son auténticas.</p>
        <p><strong>Paso 4 - Formación de Bloques:</strong> Las transacciones verificadas se agrupan junto con otras transacciones válidas para formar un nuevo bloque de datos. Los mineros compiten entre sí para resolver un complejo problema matemático (conocido como Proof of Work) que les da el derecho de agregar este nuevo bloque a la cadena.</p>
        <p><strong>Paso 5 - Adición a la Blockchain:</strong> El minero que primero resuelve el problema matemático añade el nuevo bloque a la cadena de bloques existente (blockchain). Este bloque queda permanentemente registrado y enlazado criptográficamente con todos los bloques anteriores, creando un registro inmutable y verificable públicamente.</p>
        <p><strong>Paso 6 - Transacción Completada:</strong> Una vez que el bloque es añadido a la blockchain y confirmado por múltiples nodos subsecuentes (típicamente se esperan 6 confirmaciones para considerar una transacción completamente segura), la transacción se considera finalizada de forma irreversible y transparente.</p>
        <p>Este sistema garantiza tres propiedades fundamentales: <strong>seguridad</strong> mediante criptografía avanzada y consenso distribuido, <strong>transparencia</strong> ya que todas las transacciones son públicamente verificables en la blockchain, e <strong>inmutabilidad</strong> porque una vez registrada, una transacción no puede ser alterada ni revertida, todo esto sin necesidad de confiar en una autoridad central.</p>

        <h5>4. Uso Práctico: Tipos de Wallets de Bitcoin</h5>
        <div class="slide-image-container">
            <img src="/images/dia1/IMG_20251013_095838318_HDR.jpg" alt="Wallets Bitcoin" class="slide-image">
            <p class="image-caption">Clasificación completa de los monederos de Bitcoin: Wallets Frías (almacenamiento offline en papel y hardware) versus Wallets Calientes (almacenamiento online en aplicaciones web y móviles), con ejemplos específicos de cada categoría</p>
        </div>
        <p>La ponencia concluyó con una sección práctica fundamental para cualquier persona interesada en usar Bitcoin: la explicación detallada de los diferentes tipos de monederos digitales o wallets disponibles para almacenar y gestionar criptomonedas de manera segura.</p>
        <p>Se presentó una clasificación binaria principal basada en el nivel de conectividad a internet, cada una con sus propias ventajas, desventajas y casos de uso recomendados:</p>
        <p><strong>Wallets Frías (Cold Wallets) - Almacenamiento Offline:</strong> Estas carteras mantienen las claves privadas completamente desconectadas de internet, ofreciendo el máximo nivel de seguridad contra hackers y malware. Incluyen dos subcategorías principales:</p>
        <p><em>Wallets de Papel:</em> Consisten en claves privadas y direcciones públicas impresas físicamente en papel, a menudo generadas mediante códigos QR. Son completamente inmunes a ataques digitales pero vulnerables a daños físicos como fuego, agua o simple pérdida. Se recomiendan para almacenamiento a muy largo plazo de cantidades que no se planea mover frecuentemente.</p>
        <p><em>Hardware Wallets:</em> Dispositivos físicos especializados diseñados específicamente para almacenar criptomonedas, como los populares Ledger Nano y Trezor. Estos dispositivos mantienen las claves privadas en un chip seguro que nunca expone las claves al exterior, incluso cuando se conectan a computadoras potencialmente comprometidas. Ofrecen el equilibrio óptimo entre seguridad máxima y usabilidad práctica.</p>
        <p>Las wallets frías son recomendadas enfáticamente para el <strong>almacenamiento de grandes cantidades</strong> de Bitcoin que se planean mantener a largo plazo como inversión o ahorro, siguiendo el principio "no en tu wallet, no tus bitcoins".</p>
        <p><strong>Wallets Calientes (Hot Wallets) - Almacenamiento Online:</strong> Estas carteras mantienen conexión constante o frecuente con internet, priorizando la conveniencia y rapidez de acceso sobre la seguridad absoluta. Se dividen en:</p>
        <p><em>Wallets Web:</em> Servicios accesibles mediante navegadores web, a menudo proporcionados por exchanges o plataformas de servicios Bitcoin. Ofrecen máxima conveniencia pero también mayor riesgo, ya que tanto tus claves como tus fondos están potencialmente expuestos a vulnerabilidades del servidor.</p>
        <p><em>Aplicaciones Móviles:</em> Software instalado en smartphones que permite gestionar Bitcoin sobre la marcha. Ejemplos populares mencionados incluyen Blink (enfocado en Lightning Network para transacciones instantáneas), Breez (wallet no custodial con funcionalidades avanzadas), y Muun (conocido por su interfaz simple y soporte multi-moneda). Estas aplicaciones son ideales para uso diario y pagos cotidianos.</p>
        <p>Las wallets calientes son apropiadas para <strong>transacciones frecuentes y cantidades menores</strong>, funcionando de manera similar a una billetera física que llevas en el bolsillo con dinero para gastos diarios, no con todos tus ahorros.</p>
        <p><strong>Advertencia Importante sobre Wallets Custodiadas:</strong> El Ing. Contreras advirtió específicamente sobre las wallets custodiadas ofrecidas por exchanges centralizados como Binance, Coinbase, Kraken y similares. Aunque estas plataformas son populares y convenientes, en realidad el usuario no controla directamente sus claves privadas, lo que significa que técnicamente no posee realmente sus bitcoins; la plataforma los posee en su nombre. Esto sacrifica completamente la filosofía fundamental de descentralización y soberanía financiera que Bitcoin representa. Como dice el famoso dicho en la comunidad cripto: "Not your keys, not your coins" (No son tus claves, no son tus monedas). Los exchanges deben usarse solo temporalmente para comprar o vender, nunca como solución de almacenamiento a largo plazo.</p>
    </div>

    <!-- SEGUNDA PONENCIA: IA GENERATIVA -->
    <div class="card">
        <h3>🤖 Inteligencia Artificial Generativa: De la Idea a la Acción</h3>
        <p class="ponente-badge">Rodrigo Pineda | Especialista en IA</p>

        <div class="ponente-image-container">
            <img src="/images/dia1/IMG_20251013_104833397.jpg" alt="Rodrigo Pineda presentando" class="ponente-image">
            <p class="image-caption">Rodrigo Pineda durante su presentación sobre Inteligencia Artificial Generativa en la Semana de Sistemas 2025</p>
        </div>

        <h4>Contenido Desarrollado</h4>

        <h5>1. Definiciones de Inteligencia Artificial</h5>
        <div class="slide-image-container">
            <img src="/images/dia1/IMG_20251013_110933912.jpg" alt="Definiciones IA" class="slide-image">
            <p class="image-caption">Diapositiva presentando las definiciones fundamentales de la Inteligencia Artificial según McCarthy (1956) y la Real Academia Española (2021)</p>
        </div>
        <p>La ponencia inició estableciendo los fundamentos conceptuales de la Inteligencia Artificial a través de dos definiciones clásicas que enmarcan el campo de estudio:</p>
        <p><strong>John McCarthy (1956):</strong> "Es la ciencia e ingeniería de hacer máquinas inteligentes, especialmente programas de cómputo inteligentes". Esta definición pionera estableció las bases del campo al enfocarse en la capacidad de crear sistemas computacionales que exhiban comportamiento inteligente.</p>
        <p><strong>Real Academia Española (2021):</strong> "Disciplina científica que se ocupa de crear programas informáticos que ejecutan operaciones comparables a las que realiza la mente humana, como el aprendizaje o el razonamiento lógico". Esta definición moderna amplía la perspectiva incluyendo específicamente las capacidades cognitivas como el aprendizaje y el razonamiento.</p>
        <p>Ambas definiciones convergen en un objetivo común: replicar las capacidades cognitivas humanas mediante sistemas computacionales, aunque difieren en el énfasis entre la ingeniería práctica y la emulación de procesos mentales.</p>

        <h5>2. Clasificación de la IA según su Capacidad</h5>
        <div class="slide-image-container">
            <img src="/images/dia1/IMG_20251013_111203864.jpg" alt="Clasificación IA" class="slide-image">
            <p class="image-caption">Esquema comparativo entre IA Débil (Narrow AI) e IA Fuerte (General AI), mostrando sus características y ejemplos actuales</p>
        </div>
        <p>Se presentó una clasificación fundamental que divide la Inteligencia Artificial en dos categorías principales según su alcance y capacidades:</p>
        <p><strong>IA Débil o IA Estrecha (Narrow AI):</strong> Representa los sistemas actuales diseñados para realizar tareas específicas y concretas dentro de dominios limitados. Estos sistemas son altamente eficientes en su área especializada pero carecen de la capacidad de transferir conocimientos a otros contextos. Ejemplos cotidianos incluyen asistentes virtuales como Alexa, Siri y Google Assistant, vehículos autónomos desarrollados por Tesla y Waymo, chatbots de atención al cliente, sistemas de recomendación utilizados por Netflix y Spotify, así como tecnologías de reconocimiento facial y de voz. Esta es la IA que interactuamos diariamente y que ha logrado avances significativos en los últimos años.</p>
        <p><strong>IA Fuerte o IA General (AGI - Artificial General Intelligence):</strong> Se refiere a sistemas hipotéticos capaces de realizar cualquier tarea intelectual que un ser humano puede hacer, con capacidades de comprensión contextual profunda, razonamiento abstracto, aprendizaje por transferencia entre dominios diversos, y potencialmente consciencia y autoconciencia, aunque esto último es objeto de intenso debate filosófico. Es importante destacar que la IA Fuerte aún no existe y permanece como un objetivo de investigación activa sin fecha estimada de logro. Lo que actualmente llamamos sistemas "inteligentes" son en realidad implementaciones muy sofisticadas de IA Estrecha.</p>

        <h5>3. Evolución Técnica: Machine Learning, Deep Learning y Foundation Models</h5>
        <div class="slide-image-container">
            <img src="/images/dia1/IMG_20251013_112112578.jpg" alt="ML DL FM" class="slide-image">
            <p class="image-caption">Diagrama de evolución del aprendizaje automático mostrando la progresión desde Machine Learning tradicional hasta los modernos Foundation Models, según Amazon Web Services (2022)</p>
        </div>
        <p>Se presentó un modelo comparativo desarrollado por Amazon Web Services (2022) que ilustra la evolución y diferencias entre tres generaciones de tecnologías de aprendizaje automático, clasificadas según la complejidad de sus entradas y salidas:</p>
        <p><strong>Machine Learning (ML):</strong> Primera generación caracterizada por procesar inputs simples para generar outputs simples. Ejemplos incluyen predicción de precios basada en variables limitadas, clasificación binaria de elementos, y modelos de regresión lineal. Estos sistemas requieren ingeniería manual de características y funcionan mejor con datos estructurados.</p>
        <p><strong>Deep Learning (DL):</strong> Segunda generación que revolucionó el campo al poder procesar inputs complejos (como millones de píxeles en imágenes o secuencias largas de texto) para producir outputs simples. Por ejemplo, puede analizar una fotografía completa para determinar "es un gato" o procesar un documento extenso para clasificarlo en categorías predefinidas. Utiliza redes neuronales profundas con múltiples capas de procesamiento.</p>
        <p><strong>Foundation Models (FM):</strong> Tercera y actual generación que representa la frontera tecnológica actual. Estos modelos pueden procesar inputs complejos y generar outputs igualmente complejos. Ejemplos prominentes incluyen GPT-4 (capaz de recibir prompts complejos y generar ensayos completos, código funcional o análisis detallados) y DALL-E (que transforma descripciones textuales en imágenes detalladas y artísticas). Estos modelos pre-entrenados masivos pueden adaptarse a múltiples tareas complejas mediante técnicas como el fine-tuning y el prompt engineering.</p>

        <h5>4. Redes Generativas Antagónicas (GANs)</h5>
        <div class="slide-image-container">
            <img src="/images/dia1/IMG_20251013_112625958.jpg" alt="GANs" class="slide-image">
            <p class="image-caption">Demostración visual del funcionamiento de las GANs: evolución progresiva desde un dibujo rudimentario hasta una imagen fotorrealista de un gato, ilustrando el proceso iterativo de mejora</p>
        </div>
        <p>Se explicó uno de los conceptos más fascinantes de la IA generativa: las Redes Generativas Antagónicas o GANs (Generative Adversarial Networks), introducidas por Ian Goodfellow en 2014.</p>
        <p>Las GANs operan mediante un sistema dual de redes neuronales que compiten entre sí en un proceso adversarial: el <strong>Generador</strong> crea contenido sintético (como imágenes, audio o texto) intentando que parezca auténtico, mientras que el <strong>Discriminador</strong> actúa como un crítico que intenta distinguir entre contenido real y contenido generado artificialmente.</p>
        <p>A través de millones de iteraciones en este proceso competitivo, el Generador mejora constantemente su capacidad de crear contenido cada vez más convincente, mientras que el Discriminador se vuelve más hábil en detectar falsificaciones. Este ciclo continúa hasta que el Generador produce contenido prácticamente indistinguible de la realidad. La demostración visual mostró esta progresión desde un dibujo simple y rudimentario de un gato hasta una fotografía hiperrealista generada completamente por IA.</p>
        <p>Las aplicaciones actuales de las GANs incluyen la generación de rostros humanos completamente ficticios (como en thispersondoesnotexist.com), creación de arte digital original, síntesis de voz realista para asistentes virtuales, generación de deepfakes (con importantes implicaciones éticas que requieren regulación), y aumento de conjuntos de datos para mejorar el entrenamiento de otros modelos de IA.</p>

        <h5>5. Aplicación Práctica: Agentes de IA Automatizados</h5>
        <div class="slide-image-container">
            <img src="/images/dia1/IMG_20251013_120258667.jpg" alt="AI Agent" class="slide-image">
            <p class="image-caption">Interfaz de configuración de un Agente de IA mostrando el flujo de trabajo basado en nodos, con integración de OpenAI Chat Model y Google Calendar Events</p>
        </div>
        <p>La ponencia culminó con una demostración práctica que llevó los conceptos teóricos a la implementación real: la construcción de un Agente de IA automatizado utilizando herramientas de desarrollo visual basadas en nodos.</p>
        <p>El sistema demostrado incluía varios componentes integrados: un <strong>OpenAI Chat Model</strong> que sirve como motor de procesamiento de lenguaje natural utilizando tecnología GPT, un <strong>Trigger</strong> configurado con la condición "When chat message receives" que activa el flujo de trabajo cuando llega un nuevo mensaje, integración directa con <strong>Google Calendar</strong> para acceder y manipular eventos y citas, y una lógica de flujo compleja que permite decisiones condicionales y procesamiento contextual de datos.</p>
        <p>El caso de uso presentado mostró un asistente virtual completamente funcional capaz de realizar múltiples tareas de manera autónoma: recibir consultas expresadas en lenguaje natural coloquial, consultar automáticamente Google Calendar para obtener información actualizada sobre eventos, procesar esta información considerando el contexto de la conversación, y responder ejecutando acciones concretas como crear nuevos eventos, modificar eventos existentes o eliminar citas, todo sin requerir intervención humana después de la configuración inicial del sistema.</p>
        <p>El mensaje clave de esta demostración fue contundente: Rodrigo enfatizó que la IA generativa ya no es ciencia ficción ni una tecnología exclusiva de grandes corporaciones con recursos ilimitados. Con la proliferación de herramientas no-code y low-code accesibles para desarrolladores de todos los niveles, cualquier profesional con conocimientos básicos de programación puede construir agentes inteligentes sofisticados que automaticen tareas complejas, pasando "de la idea a la acción" en cuestión de horas en lugar de meses de desarrollo tradicional.</p>
    </div>

    <!-- Reflexión Personal -->
    <div class="card">
        <h3>Reflexión Personal</h3>
        <p>El primer día de la Semana de Sistemas 2025 superó todas las expectativas. Las ponencias sobre Bitcoin e Inteligencia Artificial Generativa no solo fueron informativas, sino verdaderamente inspiradoras. La presentación del Ing. Luis Contreras me permitió comprender de manera profunda el funcionamiento técnico del blockchain y las transacciones entre pares, conceptos que antes solo conocía superficialmente. Ahora entiendo por qué Bitcoin representa una alternativa genuina al sistema monetario tradicional y cómo la descentralización puede cambiar fundamentalmente nuestra relación con el dinero.</p>

        <p>Por otro lado, la ponencia de Rodrigo Pineda sobre Inteligencia Artificial Generativa abrió mi perspectiva sobre las aplicaciones prácticas de la IA en el mundo actual. Me sorprendió especialmente la diferenciación clara entre IA Débil y IA Fuerte, así como la evolución progresiva desde Machine Learning tradicional hasta los modernos Foundation Models. La demostración del agente de IA automatizado fue reveladora, mostrándome que estas tecnologías ya no son exclusivas de grandes corporaciones sino accesibles para cualquier desarrollador con las herramientas adecuadas.</p>

        <p>También adquirí conocimiento práctico sobre las diferentes opciones de wallets de Bitcoin, entendiendo cuándo usar carteras frías para almacenamiento seguro a largo plazo versus carteras calientes para transacciones cotidianas. Este equilibrio entre seguridad y conveniencia es fundamental para cualquier persona que desee participar en el ecosistema de criptomonedas de manera responsable.</p>

        <p class="conclusion-final">Estamos viviendo una revolución tecnológica comparable a la invención de internet. Y como estudiantes de sistemas, tenemos el privilegio y la responsabilidad de ser protagonistas de esta transformación digital que está redefiniendo el futuro.</p>
    </div>

</section>

<?php include 'layout_footer.php'; ?>
