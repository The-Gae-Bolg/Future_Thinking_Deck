<?php 

//Datos dinámicos - NO SE TOCAN -
$slab_ids = getSlabIds();
$slab_progress = getSlabsData("slab_progress"); 
$slab_act1 = getSlabsData("act_1");
$slab_act2 = getSlabsData("act_2");
$slab_act3 = getSlabsData("act_3");



//-- Nombre del deck --
$deckTitle = "Diseñar futuros. Un paso por delante";

//-- Características --
$duration = "16 horas";
$level = "Básico";
$focus = "Metodología activa";
$learningExp = "Autodirigido";
$requirements = "computadora con acceso a internet. Cuenta en Miro.com";

//-- Experto --
$exp_name = "";
$exp_desc = "";
$exp_position = "";
$exp_linkedin = "";
$exp_has_linkedin = false;
$exp_portfolio = "";
$exp_has_portfolio = false;


// -- Imagen Home --
/*
   FORMATO:
   * Ruta del archivo -> img/nombre-del-archivo
 */
$homeImage = "img/iStock-1305960650.jpg";

//-- Inicio --
$deckIntro = "<strong>Diseñar futuros. Un paso por delante</strong> es un programa de 16 horas de aprendizaje en línea.<br><br>
A través de sus actividades, contenidos temáticos y momentos de valoración se ha creado para ti una experiencia de aprendizaje que te permitirá fortalecer la competencia:<br><br> 
<strong>Desarrollo de futuros probables para generar estrategias que permitan dar ventajas competitivas en el crecimiento de negocios y diseño de soluciones.</strong> <br><br>
Un programa con las características como el que estás a punto de iniciar te ofrece las herramientas necesarias para responder a los más altos estándares en tu desempeño.
";

//-- Bienvenida --
$deckWelcome = "¡Recibe la más cordial bienvenida!";

//-- Portadas de slabs -- 
/* 
   FORMATO:
   * Ruta del archivo -> img/topics/nombre-del-archivo
*/
$slabImages = [
    "img/topics/tec_iStock-969226140.png", //Slab 1
    "img/topics/tec_iStock-941094678.png", //Slab 2
    "img/topics/tec_iStock-1364054930.png", //Slab 3
    "img/topics/tec_iStock-1306213905.png", //Slab 4
    "img/topics/tec_iStock-1351342481.png", //Slab 5
    "img/topics/tec_iStock-1313312188.png", //Slab 6
    "img/topics/tec_iStock-1363060601.png", //Slab 7
    "img/topics/tec_iStock-931693472.png", //Slab 8
    "img/topics/tec_iStock-817578374.png", //Slab 9
    "img/topics/tec_iStock-1347652268.png" //Slab 10
];

//-- Títulos de slabs (Index) --
$slabHeadings = [
    "¿Qué es el diseño de futuros?", //Slab 1
    "Señales. ¿Qué nos dice el mundo?", //Slab 2
    "Patrones. ¿Cómo identificarlos?", //Slab 3
    "Información cuantitativa. ¿Cuántos?", //Slab 4
    "Información cualitativa. Calidad no siempre es cantidad", //Slab 5
    "#SocialListening. Atrapando la red", //Slab 6
    "Mega, macro, micro. Las tendencias y su impacto", //Slab 7
    "Insights. Hallazgos relevantes", //Slab 8
    "Escenarios. ¿Qué es posible, plausible y probable?", //Slab 9
    "Estrategias. ¿Cómo hacemos que el futuro suceda?" //Slab 10
];

// -- Nombre de slabs --
$slabTitles = [
    "¿Qué es el diseño de futuros?", //Slab 1
    "Señales. ¿Qué nos dice el mundo?", //Slab 2
    "Patrones. ¿Cómo identificarlos?", //Slab 3
    "Información cuantitativa. ¿Cuántos?", //Slab 4
    "Información cualitativa. Calidad no siempre es cantidad", //Slab 5
    "#SocialListening. Atrapando la red", //Slab 6
    "Mega, macro, micro. Las tendencias y su impacto", //Slab 7
    "Insights. Hallazgos relevantes", //Slab 8
    "Escenarios. ¿Qué es posible, plausible y probable?", //Slab 9
    "Estrategias. ¿Cómo hacemos que el futuro suceda?" //Slab 10
];

//-- Metas de aprendizaje --
$slabGoals = [
    "Conozco el objetivo del pensamiento de futuros como herramienta de diseño en un proyecto de innovación.",
    "Comprendo qué es una señal y el uso de las herramientas para identificarlas dentro del contexto de un proyecto, para precisar sucesos que puedan ser relevantes.",
    "Detecto patrones a través de la relación entre señales para identificar posibles tendencias que estén por surgir en el contexto del proyecto.",
    "Aplico diversas herramientas para obtener información cuantitativa en el contexto del proyecto.",
    "Aplico diversas herramientas para obtener información cualitativa en el contexto del proyecto.",
    "Investigo las publicaciones actuales para obtener información actual sobre las perspectivas actuales en la red.",
    "Investigo los tipos de tendencias para entender su repercusión, relevancia e impacto en el contexto geográfico y del tiempo.",
    "Obtengo hallazgos para identificar puntos accionables en la creación de posibles futuros",
    "Diseño posibles contextos para determinar su factibilidad en el desarrollo de futuros.",
    "Explico los elementos necesarios para elaborar una estrategia en pensamiento de diseño de futuros."
];

$imgGoals = [
    "img/act/iStock-969226140.jpg", //Slab 1
    "img/act/iStock-941094678.jpg", //Slab 2
    "img/act/iStock-1364054930.jpg", //Slab 3
    "img/act/iStock-1306213905.jpg",  //Slab 4
    "img/act/iStock-1351342481.jpg",  //Slab 5
    "img/act/iStock-1313312188.jpg", //Slab 6
    "img/act/iStock-1363060601.jpg", //Slab 7
    'img/act/iStock-931693472.jpg', //Slab 8
    'img/act/iStock-817578374.jpg',  //Slab 9
    'img/act/iStock-1347652268.jpg'   //Slab 10
];

//-- Tipos de introducción --
/* 
   FORMATO:
   * Indicar tipo de introducción -> video o texto
*/ 
$slabIntroType = [
    "video", //Slab 1
    "audio", //Slab 2
    "text", //Slab 3
    "video", //Slab 4
    "audio", //Slab 5
    "text", //Slab 6
    "video", //Slab 7
    "audio", //Slab 8
    "text", //Slab 9
    "text" //Slab 10
];

//Material de introducción
/* 
   FORMATO: 
   * Ruta del archivo -> assets/videos/
*/ 
$slabIntro = [
/*Slab 1*/  [
                'assets/videos/FutureThinking_1_intro.mp4'
            ],
/*Slab 2*/  [
                '<iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/8b511e22-cd8d-4102-9f45-1edda9dbc63c?dark=false"></iframe>'
            ], 
/*Slab 3*/  [
                'Bienvenido al Slab Patrones. <i>¿Cómo identificarlos?</i> donde descubrirás cómo es que puedes relacionar los elementos del contexto para identificar patrones.<br><br>
                Encontrarás una herramienta para precisar qué acciones se repiten, a través de un reto que te hará ser más sensible de lo que ocurre a tu alrededor ¡Iniciemos!
                '
            ],
/*Slab 4*/  [
                'assets/videos/FutureThinking_4_intro.mp4'
            ],                
/*Slab 5*/  [
                '<iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/ce6de8a8-f0e6-4fa8-879e-0270c0c8192f?dark=false"></iframe>'
            ],
/*Slab 6*/  [
                '¡Hola aprendedor! En el Slab <i>#SocialListening</i>. Atrapando la red aprenderás la importancia del sentir de las personas en las redes sociales para entender su perspectiva en el contexto de un proyecto.<br><br>
                Encontrarás información sobre cómo realizarlo y una introducción a una plataforma que te permitirá ejecutar un Social Listening en el reto ¡Comencemos!
                '
            ],
/*Slab 7*/  [
                'assets/videos/FutureThinking_7_intro.mp4'
            ],
/*Slab 8*/  [
                '<iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/a9a7cf8f-ef4d-4235-b1fa-2d865c445145?dark=false"></iframe>'
            ],
/*Slab 9*/  [
                'Bienvenido al Slab <i>Escenarios. ¿Qué es posible, plausible y probable?</i> en el cual aprenderás sobre las diferencias entre los escenarios para evaluar la factibilidad de lo que puede o no suceder en el futuro.<br><br>
                Encontrarás una herramienta que te permitirá identificarlos y ordenarlos de acuerdo al contexto en el que sucederá el futuro<br><br>
                ¡No esperes más!
                '
            ],
/*Slab 10*/ [
                'Qué gusto tenerte en el Slab <i>Estrategias. ¿Cómo hacemos que el futuro suceda?</i> Dónde aprenderás que es un OKR para establecer objetivos que permitan cumplir una estrategia a futuro.<br><br>
                Encontrarás información que te permitirá conocer cómo crearlos dentro de una estrategia ¡Vamos a comenzar!
                '
            ]
];

//-- Banner --
/* 
   FORMATO: 
   * Ruta del archivo -> assets/img/act/
*/ 
$banner = [
    
];

//-- Numero de Materiales --
/* 
   FORMATO: 
   * Indicar numero de material total
*/
$materialTotal = [
    2, //Slab 1
    4, //Slab 2
    3, //Slab 3
    3, //Slab 4
    3, //Slab 5
    2, //Slab 6
    3, //Slab 7
    3, //Slab 8
    3, //Slab 9
    3 //Slab 10
];

//Videos Imagen
/* 
   FORMATO: 
   * Ruta del archivo pre-load -> img/pre-load/pre-load-1.png
   * Titulo de la Imagen -> Clase 1 Microsoft Excel 2010 - Introduccion
   * Link -> assets/videos/0_Introduccion.mp4
*/
$materialImg = [
   [    //slab 1
        [
            'img/pre-load/pre-load-1.png',
            'Elliot P Montgomery',
            'img/material/Elliot P Montgomery.jpeg',
            'Elliot P Montgomery.jpeg'
        ]
    ],
    null,   //slab 2
    null,   //slab 3
    null,   //slab 4
    null,   //slab 5
    null,   //slab 6
    [   //slab 7
        [
            'img/pre-load/pre-load-17.png',
            'Mega, macro, micro and trend',
            'img/material/mega-macro-micro-trend.jpg',
            'mega-macro-micro-trend.jpg'
        ],
        [
            'img/pre-load/pre-load-18.png',
            'The diagram classifying the trends in the matrix of their interactions',
            'img/material/The-diagram-classifying-the-trends-in-the-matrix-of-their-interactions_Q640.jpeg',
            'The-diagram-classifying-the-trends-in-the-matrix-of-their-interactions_Q640.jpeg'
        ]
    ],   
    null,   //slab 8
    [   //slab 9
        [
            'img/pre-load/pre-load-23.png',
            'Cono de futuros',
            'img/material/cono de futuros.jpeg',
            'cono de futuros.jpeg'
        ],
    ],   

];

//Videos YouTube
/* 
   FORMATO: 
   * Ruta del archivo pre-load -> img/pre-load/pre-load-1.png
   * Titulo del vídeo -> Clase 1 Microsoft Excel 2010 - Introduccion
   * Link -> https://www.youtube.com/embed/0hGS45mbBRg
*/
$materialYoutube = [
   
];

//Páginas web
/* 
   FORMATO: 
   * Ruta del archivo pre-load -> img/pre-load/pre-load-2.png
   * Titulo del archivo -> Introducción a Excel
   * Link -> https://blogdeuninformatico.com/estilos-y-formatos-de-celda-en-excel/
*/
$materialPage = [
    
];

//PDF descargable
$materialPdf = [
    null,
    [   //Slab 2
        [
            'img/pre-load/pre-load-3.png',
            'Forces Signals Change',
            'assets/docs/tools/Forces-Signals-Change.pdf',
            'Forces-Signals-Change.pdf'
        ], 
        [
            'img/pre-load/pre-load-4.png',
            'Señales tarjeta digital',
            'assets/docs/tools/señales tarjeta digital.pdf',
            'señales tarjeta digital.pdf'
        ],
        [
            'img/pre-load/pre-load-5.png',
            'Señales tarjeta impresión',
            'assets/docs/tools/señales tarjeta impresión.pdf',
            'señales tarjeta impresión.pdf'
        ]
    ], 
    [   //Slab 3
        [
            'img/pre-load/pre-load-7.png',
            'Digital 2022 Top Takeaways Guide',
            'assets/docs/tools/Digital2022TopTakeaways_Guide_en.pdf',
            'Digital2022TopTakeaways_Guide_en.pdf'
        ], 
        [
            'img/pre-load/pre-load-8.png',
            'Patrones tarjeta digital',
            'assets/docs/tools/patrones tarjeta digital.pdf',
            'patrones tarjeta digital.pdf'
        ],
        [
            'img/pre-load/pre-load-9.png',
            'Patrones tarjeta impresion',
            'assets/docs/tools/patrones tarjeta impresion.pdf',
            'patrones tarjeta impresion.pdf'
        ]
    ],
    [   //Slab 4
        [
            'img/pre-load/pre-load-10.png',
            'Intro to Research',
            'assets/docs/tools/Intro to Research (MIDI) 20-21.pdf',
            'Intro to Research (MIDI) 20-21.pdf'
        ]
    ],
    [   //Slab 5
        [
            'img/pre-load/pre-load-13.png',
            'GRAMS',
            'assets/docs/tools/GRAMS.pdf',
            'GRAMS.pdf'
        ],
        [
            'img/pre-load/pre-load-10.png',
            'Intro to Research',
            'assets/docs/tools/Intro to Research (MIDI) 20-21.pdf',
            'Intro to Research (MIDI) 20-21.pdf'
        ]
    ]  
];

//Vídeo
$materialVideo = [
    [   //Slab 1
        [
            'img/pre-load/pre-load-2.png',
            'Introducción al Diseño de futuros',
            'assets/videos/Masterclass Introducción al Diseño de futuros (Lourdes Rodríguez).mp4',
            'Masterclass Introducción al Diseño de futuros (Lourdes Rodríguez).mp4'
        ]
    ],
    [   //Slab 2
        [
            'img/pre-load/pre-load-6.png',
            'Secrets of a Fashion Trend Forecaster and Analyst',
            'assets/videos/Secrets of a Fashion Trend Forecaster and Analyst.mp4',
            'Secrets of a Fashion Trend Forecaster and Analyst.mp4'
        ],
    ],
    null, //Slab 3
    [   //Slab 4
        [
            'img/pre-load/pre-load-11.png',
            '¿Cómo hacer mejores encuestas para proyectos?',
            'assets/videos/¿Cómo hacer mejores encuestas para proyectos_.mp4',
            '¿Cómo hacer mejores encuestas para proyectos_.mp4'
        ],
        [
            'img/pre-load/pre-load-12.png',
            'Qué es la investigación cuantitativa y cómo te puede ayudar en tu negocio',
            'assets/videos/Hotmart Tips  Qué es la investigación cuantitativa y cómo te puede ayudar en tu negocio_1080p.mp4',
            'Hotmart Tips  Qué es la investigación cuantitativa y cómo te puede ayudar en tu negocio_1080p.mp4'
        ],
    ],
    [   //Slab 5
        [
            'img/pre-load/pre-load-14.png',
            'Gary van Broekhoven on helping you get to the why behind your customers',
            'assets/videos/GRAMS  Gary van Broekhoven on helping you get to the why behind your customers_360p.mp4',
            'GRAMS  Gary van Broekhoven on helping you get to the why behind your customers_360p.mp4'
        ]
    ],
    [   //Slab 6
        [
            'img/pre-load/pre-load-15.png',
            'Social Listening Tutorial How to get started in 3 steps',
            'assets/videos/Social Listening Tutorial_ How to get started in 3 steps (1).mp4',
            'Social Listening Tutorial_ How to get started in 3 steps (1).mp4'
        ],
        [
            'img/pre-load/pre-load-16.png',
            'What is Social Listening',
            'assets/videos/What is Social Listening_.mp4',
            'What is Social Listening_.mp4'
        ],
    ],
    [   //Slab 7
        [
            'img/pre-load/pre-load-19.png',
            'Alison Sander Megatrends - the art and science of trend tracking',
            'assets/videos/Alison Sander_ Megatrends - the art and science of trend tracking.mp4',
            'Alison Sander_ Megatrends - the art and science of trend tracking.mp4'
        ]
    ],
    [   //Slab 8
        [
            'img/pre-load/pre-load-20.png',
            'Insight, Innovation, Change Considerations from the field',
            'assets/videos/Insight, Innovation, Change_ Considerations from the field _ Gerry Power _ TEDxDCU.mp4',
            'Insight, Innovation, Change_ Considerations from the field _ Gerry Power _ TEDxDCU.mp4'
        ],
        [
            'img/pre-load/pre-load-21.png',
            'Insights vs. Observations! Difference between Observation and Insight with Simple Real Life Example',
            'assets/videos/Insights vs. Observations! Difference between Observation and Insight with Simple Real Life Example.mp4',
            'Insights vs. Observations! Difference between Observation and Insight with Simple Real Life Example.mp4'
        ],
        [
            'img/pre-load/pre-load-22.png',
            'Qué es insight en publicidad',
            'assets/videos/Qué es insight en publicidad  (✅Ejemplos) (1).mp4',
            'Qué es insight en publicidad  (✅Ejemplos) (1).mp4'
        ],
    ],
    [   //Slab 9
        [
            'img/pre-load/pre-load-24.png',
            'Facing Uncertainty A Futures Thinking Now Conversation',
            'assets/videos/Facing Uncertainty_ A Futures Thinking Now Conversation.mp4',
            'Facing Uncertainty_ A Futures Thinking Now Conversation.mp4'
        ],
        [
            'img/pre-load/pre-load-25.png',
            'What is the Cone of Plausibility',
            'assets/videos/What is the Cone of Plausibility_1080p.mp4',
            'What is the Cone of Plausibility_1080p.mp4'
        ],
    ],
    [   //Slab 10
        [
            'img/pre-load/pre-load-26.png',
            'OKR in 7 Simple Steps Secrets From a Successful Serial Founder',
            'assets/videos/OKR in 7 Simple Steps Secrets From a Successful Serial Founder_1080p.mp4',
            'OKR in 7 Simple Steps Secrets From a Successful Serial Founder_1080p.mp4'
        ],
        [
            'img/pre-load/pre-load-27.png',
            'Qué es la metodología OKR Objetivos y trabajo en equipo',
            'assets/videos/Qué es la metodología OKR Objetivos y trabajo en equipo_1080p.mp4',
            'Qué es la metodología OKR Objetivos y trabajo en equipo_1080p.mp4'
        ],
        [
            'img/pre-load/pre-load-28.png',
            'Qué son los OKR y cómo plantearlos  Ejemplos por área',
            'assets/videos/Qué son los OKR y cómo plantearlos  Ejemplos por área_1080p.mp4',
            'Qué son los OKR y cómo plantearlos  Ejemplos por área_1080p.mp4'
        ]
    ],
];

//-- Transcripciones --
/* 
   FORMATO:
   * Texto de la transcripción (en caso de haber)
*/ 
$slabTranscriptions = [
    
];

//-- Referencias --
/* 
   FORMATO:
   * Texto de la transcripción (en caso de haber)
*/ 
$slabReferencias = [
/*Slab1*/   [
                'Walls, A. J. (2022, 14 febrero). <i>Lead the Future: An Introduction to Futures Design - Predict. Medium.</i><br> <a href="https://medium.com/predict/lead-the-future-an-introduction-to-futures-design-96c1fd1f34a2" class="estilo-ref" target="_blank">https://medium.com/predict/lead-the-future-an-introduction-to-futures-design-96c1fd1f34a2</a>', 
                'Roselló, E. (2021, 14 abril). <i>Diseño de futuros: ¿el futuro, como realidad de un presente futuro, se diseña?</i> Postfuturear. <br> <a href="https://www.postfuturear.com/diseno-de-futuro/" class="estilo-ref" target="_blank">https://www.postfuturear.com/diseno-de-futuro/</a>',
                'Rodríguez, L. [Mr.  Marcel School]. (2020, 29 septiembre). <i>#DiseñodeFuturos | Masterclass Introducción al Diseño de futuros (Lourdes Rodríguez)</i> [Video]. YouTube.<br> <a href="https://www.youtube.com/watch?v=IMrhC6rsrzQ" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=IMrhC6rsrzQ</a>'
            ],
/*Slab2*/   [
                'Dufva, M. (2019, 9 enero). <i>What is a weak signal?</i> Sitra. <br> <a href="https://www.sitra.fi/en/articles/what-is-a-weak-signal/" class="estilo-ref" target="_blank">https://www.sitra.fi/en/articles/what-is-a-weak-signal/</a>', 
                'Hiltunen, E. (2010, 14 junio). <i>The Institution of Engineering and Technology.</i> E&T.<br> <a href="https://eandt.theiet.org/content/articles/2010/06/forecasting-the-future-through-weak-signals/" class="estilo-ref" target="_blank">https://eandt.theiet.org/content/articles/2010/06/forecasting-the-future-through-weak-signals/</a>',
                'Howard, S. (2021, 28 junio). <i>Drivers and Signals: How Are They Different?</i> IFTF. <br> <a href="https://www.iftf.org/future-now/article-detail/drivers-and-signals-how-are-they-different" class="estilo-ref" target="_blank">https://www.iftf.org/future-now/article-detail/drivers-and-signals-how-are-they-different</a>',
                'Institute for the future. (s. f.). <i>Signals. Innovations + Disruptions.</i> IFTF. <br> <a href="https://www.iftf.org/what-we-do/foresight-tools/signals" class="estilo-ref" target="_blank">https://www.iftf.org/what-we-do/foresight-tools/signals</a>',
                'Raymond, M. (2010). <i>The Trend Forecaster’s Handbook: Second Edition</i> (English Edition) (01 ed.). Laurence King Publishing.',
                'Yoshioka, F. (2012, 5 junio). <i>Secrets of a Fashion Trend Forecaster and Analyst</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=12l-4Vw2j7E" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=12l-4Vw2j7E</a>',
            ],
/*Slab3*/   [
                'Asselin, C. (2022, 13 enero). <i>TikTok: cifras y estadísticas clave en España, Latam y el mundo 2022.</i> Digimind. <br> <a href="https://blog.digimind.com/es/agencias/tiktok-cifras-y-estadisticas-2020#:%7E:text=en%20el%20mundo-,1.,millones%20provienen%20de%20Estados%20Unidos." class="estilo-ref" target="_blank">https://blog.digimind.com/es/agencias/tiktok-cifras-y-estadisticas-2020#:%7E:text=en%20el%20mundo-,1.,millones%20provienen%20de%20Estados%20Unidos.</a>', 
                'Galeano, S. (2022, 28 enero). <i>Cuáles son las redes sociales con más usuarios del mundo</i> (2022). Marketing 4 Ecommerce - Tu revista de marketing online para e-commerce. <br> <a href="https://marketing4ecommerce.net/cuales-redes-sociales-con-mas-usuarios-mundo-ranking/" class="estilo-ref" target="_blank">https://marketing4ecommerce.net/cuales-redes-sociales-con-mas-usuarios-mundo-ranking/</a>',
                'Hootsuite. (2022). <i>The Global State of Digital 2022.</i> Hootsuit. <br> <a href="https://www.hootsuite.com/resources/digital-trends" class="estilo-ref" target="_blank">https://www.hootsuite.com/resources/digital-trends</a>',
                'Smith, K. (2019, 29 abril). <i>46 estadísticas fascinantes sobre YouTube.</i> Brandwatch. <br> <a href="https://www.brandwatch.com/es/blog/46-estadisticas-youtube/#:%7E:text=Cada%20minuto%20se%20suben%20400,dura%20m%C3%A1s%20de%2040%20minutos." class="estilo-ref" target="_blank">https://www.brandwatch.com/es/blog/46-estadisticas-youtube/#:%7E:text=Cada%20minuto%20se%20suben%20400,dura%20m%C3%A1s%20de%2040%20minutos.</a>'
            ],
/*Slab4*/   [
                'Bevacqua, F. (2021, 17 febrero). <i>¿Qué es una investigación cuantitativa? 5 simples pasos para ponerla en práctica.</i> Hotmart. <br> <a href="https://hotmart.com/es/blog/investigacion-cuantitativa" class="estilo-ref" target="_blank">https://hotmart.com/es/blog/investigacion-cuantitativa</a>', 
                'Hotmart - español. (2021, 17 febrero). <i>Hotmart Tips | ¿Qué es la investigación cuantitativa y cómo te puede ayudar en tu negocio?</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=h90jkmB3tZ8" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=h90jkmB3tZ8</a>',
                'Méndez, A. (2020, 7 septiembre). <i>Cómo hacer mejores encuestas para proyectos de Diseño Industrial</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=W_iWEldmBsI&feature=youtu.be" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=W_iWEldmBsI&feature=youtu.be</a>',
                'Ortega, C. (2022, 24 febrero). <i>Investigación cuantitativa. Qué es y cómo realizarla.</i> QuestionPro. <br> <a href="https://www.questionpro.com/blog/es/que-es-la-investigacion-cuantitativa/" class="estilo-ref" target="_blank">https://www.questionpro.com/blog/es/que-es-la-investigacion-cuantitativa/</a>',
                'Qualtrics. (s. f.). <i>Investigación cuantitativa.</i> <br> <a href="https://www.qualtrics.com/es/gestion-de-la-experciencia/investigacion/investigacion-cuantitativa/" class="estilo-ref" target="_blank">https://www.qualtrics.com/es/gestion-de-la-experciencia/investigacion/investigacion-cuantitativa/</a>'
            ],
/*Slab5*/   [
                '<i>Investigación cualitativa: definición y procedimiento. (2022, 10 mayo).</i> Qualtrics. <br> <a href="https://www.qualtrics.com/es/gestion-de-la-experciencia/investigacion/investigacion-cualitativa/" class="estilo-ref" target="_blank">https://www.qualtrics.com/es/gestion-de-la-experciencia/investigacion/investigacion-cualitativa/</a>', 
                '<i>Investigación cualitativa | QuestionPro. (s.f.).</i> QuestionPro. <br> <a href="https://www.questionpro.com/es/investigacion-cualitativa.html" class="estilo-ref" target="_blank">https://www.questionpro.com/es/investigacion-cualitativa.html</a>',
                'NuForm Digital. (2020, 27 noviembre). <i>GRAMS - Gary van Broekhoven on helping you get to the «why» behind your customers.</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=BH_I4h16_rg" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=BH_I4h16_rg</a>',
            ], 
/*Slab6*/   [
                'Brand24. (2021, 10 noviembre). <i>What is Social Listening?</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=3MBj10HVCec" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=3MBj10HVCec</a>',
                'Escobar, C. (2018, 27 febrero). <i>¿Qué es el social listening y cómo usarlo?</i> Sprout Social. <br> <a href="https://sproutsocial.com/es/insights/que-es-el-social-listening-en-redes-y-como-usarlo/" class="estilo-ref" target="_blank">https://sproutsocial.com/es/insights/que-es-el-social-listening-en-redes-y-como-usarlo/</a>',
                'Hootsuite Labs. (2021, 14 octubre). <i>Social Listening Tutorial: How to get started in 3 steps</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=qCAKH9SaWnc" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=qCAKH9SaWnc</a>',
                'Newberry, C. (2022, 9 mayo). <i>Qué es la escucha social, por qué es importante y 10 herramientas para hacerla más fácil.</i> Hootsuite. <br> <a href="https://blog.hootsuite.com/es/escucha-social/" class="estilo-ref" target="_blank">https://blog.hootsuite.com/es/escucha-social/</a>',
            ],
/*Slab7*/   [
                'Beninatto, R. [Smartcat]. (2021, 21 junio). <i>«Micro, Macro, and Mega Trends. What do they mean to you?» - Renato Beninatto, Nimdzi</i> [Video]. YouTube.  <br> <a href="https://www.youtube.com/watch?v=HjfwBUH7RJA" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=HjfwBUH7RJA</a>',
                'Foxwell, B. (2020, 27 febrero). <i>A Guide to Social Media Influencers: Mega, Macro, Micro, and Nano.</i> Iconosquare Blog. <br> <a href="https://blog.iconosquare.com/guide-to-social-media-influencers/" class="estilo-ref" target="_blank">https://blog.iconosquare.com/guide-to-social-media-influencers/</a>',
                'Globaltrendspotter. (2017, 24 marzo). <i>General Classification And Explanation Of The Different Type Of Trends.</i> Global Trendspotting. <br> <a href="https://globaltrendspotter.wordpress.com/2017/03/24/categorizing-trends-what-are-the-different-types-of-trends/" class="estilo-ref" target="_blank">https://globaltrendspotter.wordpress.com/2017/03/24/categorizing-trends-what-are-the-different-types-of-trends/</a>',    
                'Sander, A. [TED Institute]. (2014, 22 diciembre). <i>Alison Sander: Megatrends - the art and science of trend tracking</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=7boVGRUJ0w0" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=7boVGRUJ0w0</a>',
                '<i>Trends analysis.</i> (2020, 3 noviembre). Jisc. <br> <a href="https://www.jisc.ac.uk/guides/vision-and-strategy-toolkit/trends-analysis" class="estilo-ref" target="_blank">https://www.jisc.ac.uk/guides/vision-and-strategy-toolkit/trends-analysis</a>',
            ],
/*Slab8*/   [
                'Dalton, J. (2016, 28 marzo). <i>What Is Insight? The 5 Principles of Insight Definition.</i> Thrive.  <br> <a href="https://thrivethinking.com/2016/03/28/what-is-insight-definition/" class="estilo-ref" target="_blank">https://thrivethinking.com/2016/03/28/what-is-insight-definition/</a>',
                'MatShoreInnovation. (2016, 13 mayo). <i>Insights vs. Observations! Difference between Observation and Insight with Simple Real Life Example</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=VmvMHCx0yM8" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=VmvMHCx0yM8</a>',
                'Paez, L. (2021, 31 agosto). <i>¿Qué es un insight? Descubre los secretos de los consumidores y mejora tu estrategia.</i> Crehana. <br> <a href="https://www.crehana.com/blog/marketing-digital/que-es-un-insight/" class="estilo-ref" target="_blank">https://www.crehana.com/blog/marketing-digital/que-es-un-insight/</a>',
                'Power, G. [TEDx Talks]. (2017, 18 enero). <i>Insight, Innovation, Change: Considerations from the field | Gerry Power | TEDxDCU</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=58Y6iTBEKvI" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=58Y6iTBEKvI</a>',
                'Ramírez Ceballos, J. [Crehana]. (2020, 17 agosto). <i>Qué es insight en publicidad</i> (✅Ejemplos) [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=hbiOXDxMlhE&t=93s" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=hbiOXDxMlhE&t=93s</a>',
            ],
/*Slab9*/   [
                'Hbgelatt, H. (2017, 28 enero). <i>PLAUSIBLE - PROBABLE - POSSIBLE. Positive Uncertainty.</i> <br> <a href="https://hbgelatt.wordpress.com/2017/01/28/plausible-probable-possible/" class="estilo-ref" target="_blank">https://hbgelatt.wordpress.com/2017/01/28/plausible-probable-possible/</a>',
                'King, K. (2020, 27 abril). <i>Futures Thinking Now: Facing Uncertainty.</i> KnowledgeWorks. <br> <a href="https://knowledgeworks.org/resources/futures-thinking-now-facing-uncertainty/" class="estilo-ref" target="_blank">https://knowledgeworks.org/resources/futures-thinking-now-facing-uncertainty/</a>',
                'King, K. [KnowledgeWorks]. (2020, 9 julio). <i>Facing Uncertainty: A Futures Thinking Now Conversation</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=NJsdhD9K804" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=NJsdhD9K804</a>',
                'Swanson, J. [KnowledgeWorks]. (2021, 9 febrero). <i>What is the Cone of Plausibility?</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=0WGWWSDnkTU" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=0WGWWSDnkTU</a>',
                'Swanson, J. (2021, 24 febrero). <i>A Tool for Exploring Plausible, Probable, Possible and Preferred Futures. Students at the Center</i> HUB. <br> <a href="https://studentsatthecenterhub.org/resource/tool-exploring-plausible-probable-possible-preferred-futures/" class="estilo-ref" target="_blank">https://studentsatthecenterhub.org/resource/tool-exploring-plausible-probable-possible-preferred-futures/</a>',
                'Roselló, E. (2020, 15 noviembre). <i>Varios tipos de futuros. El glosario que buscabas.</i> Postfuturear. <br> <a href="https://www.postfuturear.com/varios-tipos-de-futuros-el-glosario-que-buscabas/" class="estilo-ref" target="_blank">https://www.postfuturear.com/varios-tipos-de-futuros-el-glosario-que-buscabas/</a>',
            ],
/*Slab10*/   [
                'Acsendo. (2021, 20 enero). 🎯 <i>Qué son los OKR y cómo plantearlos ✅ Ejemplos por área</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=ZMml62uRD00" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=ZMml62uRD00</a>',
                'Cyberclick - Marketing Digital. (2019, 5 febrero). <i>¿Qué es la metodología OKR? Objetivos y trabajo en equipo</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=rf0inv6xeAo" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=rf0inv6xeAo</a>',
                'Marr, B. (2021, 13 julio). <i>What are OKRs? A Super Simple Explanation Of The Objectives & Key Results Management Tool.</i> Bernard Marr & Co. <br> <a href="https://bernardmarr.com/what-are-okrs-a-super-simple-explanation-of-the-objectives-key-results-management-tool/" class="estilo-ref" target="_blank">https://bernardmarr.com/what-are-okrs-a-super-simple-explanation-of-the-objectives-key-results-management-tool/</a>',
                'Martins, J. (2020, 5 agosto). <i>¿Qué son los OKR? Guía para entender los objetivos y resultados clave •.</i> Asana. <br> <a href="https://asana.com/es/resources/okr-meaning" class="estilo-ref" target="_blank">https://asana.com/es/resources/okr-meaning</a>',
                'Panchadsaram, R. (s. f.). <i>What is an OKR? Definition and Examples.</i> What Matters. <br> <a href="https://www.whatmatters.com/faqs/okr-meaning-definition-example" class="estilo-ref" target="_blank">https://www.whatmatters.com/faqs/okr-meaning-definition-example</a>',
                'S. (2022, 15 marzo). <i>Metodología OKR: cómo aplicarla en tu empresa | Worky blog.</i> Worky.  <br> <a href="https://blog.worky.mx/metodologia-okr" class="estilo-ref" target="_blank">https://blog.worky.mx/metodologia-okr</a>',
            ],
];

/* 
   FORMATO:
   * Ruta del archivo -> assets/docs/transcripts/nombre-del-archivo
 */
$slabTranscriptionDoc = [
    "assets/docs/transcripts/SCRUM_S1.pdf",
    "assets/docs/transcripts/SCRUM_S2.pdf",
    "assets/docs/transcripts/SCRUM_S3.pdf",
    "assets/docs/transcripts/SCRUM_S4.pdf",
    "assets/docs/transcripts/SCRUM_S5.pdf",
    "assets/docs/transcripts/SCRUM_S6.pdf",
    "assets/docs/transcripts/SCRUM_S7.pdf",
    "assets/docs/transcripts/SCRUM_S8.pdf",
    "assets/docs/transcripts/SCRUM_S9.pdf",
    "assets/docs/transcripts/SCRUM_S10.pdf"

]; 

// ** ACTIVIDADES **

//-- Instrucciones Descubre --
$act1_Instructions = [
    //Slab 1 
    [  
        "Completa los espacios en blanco para descubrir los conceptos clave sobre <strong>la introducción al diseño de futuros.</strong>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 2 
    [     
        "Completa los espacios en blanco para descubrir los conceptos clave sobre <strong>señales.</strong>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 3
    [   
        "Identifica y ordena  el proceso para <strong>identificar patrones.</strong>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante.",
    ],
    //Slab 4
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre <strong>información cuantitativa.</strong>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 5
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre <strong>Información cualitativa.</strong>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante.",
    ],
    //Slab 6
    [   
        "Lee atentamente los conceptos clave sobre <strong>Social Listening</strong> y relaciónalo con la definición correcta.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante.",
    ],
    //Slab 7
    [   
        "Lee atentamente los conceptos clave sobre <strong>mega, macro, micro tendencias</strong> y relaciónalo con la definición correcta. ",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 8
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre <i><strong>insights.</strong></i>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 9
    [   
        "Lee atentamente los conceptos clave sobre <strong>posible, plausible y probable</strong> y relaciónalo con la definición correcta. ",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante.",
    ],
    //Slab 10
    [   
        "Lee atentamente los conceptos clave sobre los <strong>OKR</strong> y relaciónalos con la definición correcta.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ]
];

//-- Herramientas Actividad Descubre --
$act1_tools = [
/* Slab 1 */'<iframe src="https://lxlab.h5p.com/content/1291716120835144078/embed" aria-label="Slab1 - ¿Qué es el diseño de futuros?" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 2 */'<iframe src="https://lxlab.h5p.com/content/1291716123801053588/embed" aria-label="Slab2 - Señales. ¿Qué nos dice el mundo?" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 3 */'<iframe src="https://lxlab.h5p.com/content/1291716126145440568/embed" aria-label="Slab3 - Patrones. ¿Cómo identificarlos?" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 4 */'<iframe src="https://lxlab.h5p.com/content/1291716178430422688/embed" aria-label="Salb4 - Información Cuantitativa. ¿Cuántos?" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 5 */'<iframe src="https://lxlab.h5p.com/content/1291716180983192528/embed" aria-label="Slab5 - Información cualitativa. Calidad no siempre es cantidad" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 6 */'<iframe src="https://lxlab.h5p.com/content/1291716804337412898/embed" aria-label="Slab6 - #SocialListening. Atrapando la red" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 7 */'<iframe src="https://lxlab.h5p.com/content/1291716809298452298/embed" aria-label="Slab7 - Mega, macro, micro. Las tendencias y su impacto" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 8 */'<iframe src="https://lxlab.h5p.com/content/1291716186524171858/embed" aria-label="Slab8 - Insights. Hallazgos relevantes" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 9 */'<iframe src="https://lxlab.h5p.com/content/1291716812952235528/embed" aria-label="Slab9 - Escenarios. ¿Qué es posible, plausible y probable?" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 10*/'<iframe src="https://lxlab.h5p.com/content/1291716826775155508/embed" aria-label="Slab10 - Estrategias. ¿Cómo hacemos que el futuro suceda?" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>'
];

//-- Instrucciones Actividad Demuestra --
/*
    FORMATO:
   * Cada paso completo es un arreglo
   * Un paso está compuesto por:
        * "instruction" -> La instrucción principal
        * "list" -> (Opcional) Una lista compuesta por items 
                 ->  Es un arreglo de arreglos de "item"
        * "subinstruction_list" -> (Opcional) Lista de subpasos individuales
                                -> Cada subaso es un arreglo, que tiene un elemento "subinstruction"
                                -> (Opcional) Los subpasos pueden tener extras, como botones o enlaces, marcados como "subinstruction_extra"
        * "instruction_extra" -> (Opcional) Enlaces, botones, imágenes o videos
                              -> Se necesita agregar el elemento HTML completo
                              -> Cada "instruction_extra" que se agregue necesitará la clase "tracker" como atributo
                              -> Si el "instruction_extra" es un botón, necesitará la clase "btn btn-outline-primary"
                              -> Si el botón es imagen, necesita especificar la ruta -> img/logos/nombre-del-archivo
    
 */
$act2_instructions = [
    //SLAB 1
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre <strong>el diseño de futuros.</strong>",
            ],
            //Paso 2
            [
                "instruction" => "Investiga en fuentes de información confiables, sobre:<br>
                <strong>
                <ol type='a'>
                    <li>Antecedentes del diseño de futuros. Cuándo y cómo surgió.</li>
                    <li>Significado de “futuro”. Cómo lo interpreta la sociedad.</li>
                    <li>Objetivos del diseño de futuros. Para qué sirve.</li>
                    <li>Métodos que intervienen en el diseño de futuros. Cuáles son los métodos que se utilizan.</li>
                </ol>
                </strong>",
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/Infografía.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para elaborar una infografía</a>'
            ],
            //Paso 4
            [
                "instruction" => "No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el Generador de referencias en formato APA.",
                "instruction_extra" =>  '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'
            ],
            //Paso 5
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar Canva.",
                "instruction_extra" =>  '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad.",
            ]
        ],
    ],
    //SLAB 2
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente texto sobre <strong>señales.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el reto que se te plantea."
            ],
            //Paso 3
            [
                "case_title" => "¿Qué está sucediendo con Facebook y las redes sociales?",
                "img" => "img/act/iStock-1302552899.jpg",
                "text" => "<div>En 2022 Facebook, una de las redes sociales más importantes a nivel mundial, por primera vez en su historia tuvo un crecimiento negativo, con la pérdida de más usuarios que los suscritos a la plataforma.
                    <br><br>
                    Actualmente la mayoría de los nuevos usuarios son mayores de 24 años, mientras que los menores de 20 optan por otras redes sociales.
                    <br><br>
                    Esto nos lleva a reflexionar: ¿Qué acontecimientos actuales podemos ligar a este suceso? ¿Cuáles son los pequeños sucesos que pasan alrededor de las redes sociales? ¿Qué es lo que está pasando con estas nuevas generaciones?
                    <br><br>
                    Las últimas noticias nos hablan de Meta, dueña de Facebook y de otras redes sociales (Instagram, WhatsApp), quien ha invertido en la realidad virtual a través de Oculus, lo que nos lleva una vez más a plantearnos las preguntas: ¿Qué señales da el contexto actual referente a este tema? ¿Qué señales están dando las personas hacia los productos que tiene Meta actualmente?  
                    <br><br>
                    Las empresas en el mundo, para seguir creciendo, están en busca de la siguiente gran tendencia pero, ¿qué señales empiezan a emerger y podemos observar? ¿Qué acciones podrán repercutir en el futuro de las redes sociales y su concepción actual?
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Reto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Descarga la ficha de señales: versión digital o versión impresión). Puedes usar el archivo para imprimir o usar la imagen en alguna plataforma digital como Word, Miro, etc.
                    <br>
                    <div class='d-flex justify-content-around logo-tools align-items-center'>
                        <a href='assets/docs/tools/demuestra/señales tarjeta digital.pdf' class='tracker btn btn-outline-primary' target='_blank'>versión digital</a>
                        <a href='assets/docs/tools/demuestra/señales tarjeta impresión.pdf' class='tracker btn btn-outline-primary' target='_blank'>versión impresión</a>
                    </div>"],
                    ["subinstruction" => "Toma conciencia de los sucesos presentes relacionados con el reto y vacía esa información en las tarjetas."],
                    ["subinstruction" => "Navega en las redes sociales que creas relevantes, de manera consciente sensibilízate de los pequeños detalles que puedan considerarse como una señal. Pon esa información en las tarjetas."],
                    ["subinstruction" => "Reúne entre treinta y cincuenta señales que creas son relevantes para el proyecto."],
                    ["subinstruction" => "Coloca todas las tarjetas de señales sobre un lienzo que te permita visualizarlas de manera sencilla."],
                    ["subinstruction" => "Toma una imagen del lienzo con las tarjetas."],
                    ["subinstruction" => "Guarda la imagen, ya que la compartirás más adelante."],
                ],
            ]
        ],
    ],
    //SLAB 3
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente texto sobre <strong>Patrones.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el reto que se te plantea."
            ],
            //Paso 3
            [
                "case_title" => "Descubre las pistas",
                "img" => "img/act/iStock-1322305216.jpg",
                "text" => "<div>En 2022, Facebook sigue siendo la red social más utilizada a nivel mundial, acompañada de WhatsApp e Instagram, que también son parte de Meta. Sin embargo, no son las que más crecen.
                    <br><br>
                    En segundo lugar se encuentra Youtube con una reproducción aproximada de mil millones de horas al día, que es más que las plataformas de streaming como Netflix, Disney+ combinadas.
                    <br><br>
                    Sin embargo, Tik Tok es la red social con mayor crecimiento en los últimos años. Actualmente, con más de 1000 millones de usuarios, ha tenido un crecimiento anual del 42%.
                    <br><br>
                    Podemos cuestionarnos: ¿Qué ha ocasionado que las tres redes sociales de Meta hayan crecido menos que su competencia? ¿Qué han hecho las redes sociales que han tenido un mayor crecimiento? ¿Quiénes son los nuevos usuarios?  
                    <br><br>
                    Qué elementos puedes observar que las redes sociales en crecimiento comparten, en contra de las que han desacelerado su crecimiento.
                    <br><br>
                    Las personas, la ubicación geográfica, el tipo de contenido, la dinámica, las herramientas son, entre otros, factores que juegan un importante papel en el desarrollo de la problemática.
                    <br>
                    Identificar las señales repetidas y relacionadas ayudará a reconocer patrones.
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Reto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Descarga el formato Tarjetas de patrones: opción para imprimir o digital.
                    <br>
                    <div class='d-flex justify-content-around logo-tools align-items-center'>
                        <a href='assets/docs/tools/demuestra/patrones tarjeta digital.pdf' class='tracker btn btn-outline-primary' target='_blank'>versión digital</a>
                        <a href='assets/docs/tools/demuestra/patrones tarjeta impresion.pdf' class='tracker btn btn-outline-primary' target='_blank'>versión impresión</a>
                    </div>"],
                    ["subinstruction" => "Organiza las señales obtenidas relacionadas al reto. (Se recomienda haber cursado el Slab: <i>Señales. ¿Qué nos dice el mundo?</i>, para una mejor ejecución del reto)."],
                    ["subinstruction" => "Relaciona las señales que tengan características y /o elementos parecidos entre ellas para generar patrones."],
                    ["subinstruction" => "Llena la tarjeta de patrones con la información requerida."],
                    ["subinstruction" => "Define los patrones identificados."],
                    ["subinstruction" => "Recaba la información en un documento en línea y guarda el enlace del mismo, ya que lo compartirás más adelante."],
                ],
            ]
        ],
    ],
    //SLAB 4
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente texto sobre <strong>información cuantitativa.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el reto que se te plantea."
            ],
            //Paso 3
            [
                "case_title" => "Encuestas y datos cuantitativos",
                "img" => "img/act/iStock-1169692106.jpg",
                "text" => "<div>Si bien Facebook no es la red social más de moda, la cantidad de usuarios ronda los 2900 millones de usuarios, que equivalen a más de la mitad de personas con acceso a internet a nivel mundial.  Seguido de Youtube, WhatsApp e Instagram (estas dos últimas pertenecientes a Meta que también es dueña de Facebook).
                    <br><br>
                    Actualmente las nuevas redes sociales cuentan con un crecimiento mucho mayor y tienen un mayor auge que las redes sociales ya establecidas. TikTok, con más de mil millones de usuarios y un crecimiento anual del 45%, se coloca a la cabeza de las redes sociales con mayor crecimiento.
                    <br><br>
                    ¿Cuáles son las redes sociales que ocupan tus amigos? ¿Cuál es su favorita? ¿Cuánto tiempo le destinan? Las respuestas a estas preguntas te darán datos importantes para entender el panorama actual; pero no solo importan los datos de tus amigos, sino de todas aquellas personas a las que puedas llegar con una encuesta.
                    <br><br>
                    Estos datos cuantitativos te ayudarán a entender cómo se está formando el futuro.  
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Reto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Revisa el video ¿Cómo hacer mejores encuestas para proyectos?
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <button type='button' class='btn btn-outline-primary video-btn' data-toggle='modal' data-src='assets/videos/¿Cómo hacer mejores encuestas para proyectos_.mp4' data-target='#myModal'>
                            Reproducir <i class='bi bi-box-arrow-up-right'></i>
                        </button>
                    </div>"],
                    ["subinstruction" => "Define los datos que quieres obtener para realizar una encuesta (con base en tu perspectiva del contexto de la lectura planteada), sigue los pasos y recomendaciones del video."],
                    ["subinstruction" => "Relaciona las señales que tengan características y /o elementos parecidos entre ellas para generar patrones."],
                    ["subinstruction" => "Crea un diagrama en papel o en alguna herramienta digital como Miro de los bloques y secuencia de las preguntas.
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='https://miro.com/es/' class='tracker text-center' target='_blank'><img src='img/logos/miro.png' alt='Logo miro'/></a>
                    </div>"],
                    ["subinstruction" => "De las preguntas realizadas en el diagrama, crea una encuesta nueva en Google Forms con la información del paso anterior.
                    <br>
                    <div class='d-flex justify-content-around logo-tools align-items-center'>
                        <a href='https://docs.google.com/forms/u/0/' class='tracker btn btn-outline-primary' target='_blank'>Formularios</a>
                    </div>"],
                    ["subinstruction" => "Envía tu encuesta a conocidos y pídeles que la reenvíen a más contactos."],
                    ["subinstruction" => "Analiza los resultados obtenidos."],
                    ["subinstruction" => "En un documento en línea, recaba la encuesta y sus resultados."],
                    ["subinstruction" => "Guarda el enlace del documento, ya que lo compartirás más adelante."],
                ],
            ]
        ],
    ],
    //SLAB 5
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente texto sobre <strong>Información cualitativa.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el reto que se te plantea."
            ],
            //Paso 3
            [
                "case_title" => "Entender a las personas con las preguntas correctas",
                "img" => "img/act/iStock-1128967599.jpg",
                "text" => "<div>Si bien Facebook no es la red social más de moda, la cantidad de usuarios ronda los 2.9 mil millones de usuarios, que equivale a más de la mitad de personas con acceso a internet a nivel mundial. Seguido de Youtube, WhatsApp e Instagram (estas dos últimas pertenecientes a Meta que también es dueña de facebook).
                    <br><br>
                    Para finales de 2021, niños y adolescentes promediaron 91 minutos diarios consumiendo TikTok y 56 minutos viendo videos en YouTube. Importante: en 2019 eran 48 minutos promedio de YouTube y 38 minutos de TikTok. En el caso de las plataformas de streaming, Disney+ estaría logrando un promedio de 47 minutos y Netflix de 45 minutos.
                    <br><br>
                    Es importante conocer qué es lo que piensan las personas. Platicar con ellas y entender cuáles son sus objetivos, sus frustraciones, lo que les gusta, ayudará a contar con información acerca de ¿Por qué prefieren una red social a otra? ¿Qué es lo que buscan? ¿Qué es lo que los hace felices?
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Reto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Descarga la plantilla del método GRAMS para entrevista.
                    <br>
                    <div class='d-flex justify-content-center logo-tools align-items-center'>
                        <a href='assets/docs/tools/demuestra/GRAMS.pdf' class='tracker btn btn-outline-primary' target='_blank'>Método GRAMS</a>
                    </div>"],
                    ["subinstruction" => "Selecciona una persona conocida que consideres pueda darte información valiosa acerca del contexto del reto planteado en la lectura anterior."],
                    ["subinstruction" => "Ponte en contacto con ella y programa una entrevista. Puede ser presencial o en línea con herramientas como Zoom, Google Meets o WhatsApp."],
                    ["subinstruction" => "Define las preguntas que vas a realizar."],
                    ["subinstruction" => "Realiza la entrevista. Apóyate en la plantilla del método GRAMS."],
                    ["subinstruction" => "Realiza un resumen con el análisis de las respuestas a las preguntas elaboradas, en un documento en línea."],
                    ["subinstruction" => "Guarda el enlace del documento,  ya que lo compartirás más adelante."],
                ],
            ]
        ],
    ],
    //SLAB 6
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente texto sobre <strong>Social Listening.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el reto que se te plantea."
            ],
            //Paso 3
            [
                "case_title" => "Stalkeando a Facebook en redes sociales",
                "img" => "img/act/iStock-1326239979.jpg",
                "text" => "<div>Facebook es la red social más utilizada en el mundo, con una cantidad de usuarios que supera los 2500 millones.
                    <br>
                    Sin embargo, 2022 ha sido el primer año desde su fundación (en 2004) que presenta un crecimiento negativo en su número de usuarios.
                    <br>
                    En esta etapa de crecimiento, Facebook adquirió Instagram y WhatsApp, así aumentó su alcance y dio pie a la creación de Meta. Esta empresa engloba a las tres redes y a otras compañías.
                    <br><br>
                    Como estrategia de crecimiento y diversificación, en 2021 Meta presentó su metaverso, se unió a esta tendencia y a lo largo de los años ha comprado otras empresas y ha lanzado nuevos productos como Oculus. Sin embargo, otras redes sociales como TikTok han aumentado su crecimiento anual y posicionamiento en los nuevos usuarios.
                    <br><br>
                    Investiga en la red ¿Qué dice la gente de Facebook?
                    <br>
                    ¿Ya no les gusta? ¿Es aburrido? ¿Quiénes lo usan? ¿Por qué lo dejaron? ¿Qué dicen de otras redes sociales? ¿Qué les parece atractivo de su competencia? Obtén datos sobre cómo se sienten las personas acerca de Facebook, Meta (si es que lo ubican), Instagram, WA, Twitter, TikTok y otras redes sociales, para poder entender dónde se encuentra parado Facebook contra su competencia y cómo la gente ve su presente y cómo visualiza su futuro.
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Reto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Revisa los videos sobre Social Listening que puedes encontrar en la sección de materiales de este Slab."],
                    ["subinstruction" => "Regístrate en Hootsuite y haz una cuenta gratuita.
                    <br>
                    <div class='d-flex justify-content-center align-items-center'>
                        <a href='https://signup.hootsuite.com/selfserve-na-youtube-inbound-marketing/?utm_source=youtube&utm_medium=referral&utm_campaign=inbound-video&utm_id=qCAKH9SaWnc&utm_content=sociallistening' class='tracker text-center' target='_blank'><img src='img/logos/Hootsuite.png' alt='Logo canva'/></a>
                    </div>"],
                    ["subinstruction" => "Realiza un monitoreo en redes sociales con las palabras claves que definas de acuerdo al contexto del reto, planteado en la lectura anterior."],
                    ["subinstruction" => "Redacta tus observaciones y conclusiones con base en los resultados obtenidos en un documento en línea."],
                    ["subinstruction" => "Guarda el enlace del documento,  ya que lo compartirás más adelante."],
                ],
            ]
        ],
    ],
    //SLAB 7
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre <strong>mega, macro, micro tendencias.</strong>",
            ],
            //Paso 2
            [
                "instruction" => "Investiga en fuentes de información confiables, sobre:<br>
                <strong>
                <ol type='a'>
                    <li>Elementos temporales y geográficos que categorizan a las tendencias.</li>
                    <li>Alcance de las megatendencias.</li>
                    <li>Alcance de las macrotendencias.</li>
                    <li>Alcance de las microtendencias.</li>
                    <li>Ejemplos de mega, macro y micro tendencias actuales en las redes sociales.</li>
                </ol>
                </strong>",
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/Infografía.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para elaborar una infografía</a>'
            ],
            //Paso 4
            [
                "instruction" => "No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el Generador de referencias en formato APA.",
                "instruction_extra" =>  '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'
            ],
            //Paso 5
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar Canva.",
                "instruction_extra" =>  '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad, ya que lo compartirás más adelante.",
            ]
        ],
    ],
    //SLAB 8
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre <strong>insights.</strong>",
            ],
            //Paso 2
            [
                "instruction" => "Investiga en fuentes de información confiables, sobre:<br>
                <strong>
                <ol type='a'>
                    <li>Diferencias entre insight y observaciones.</li>
                    <li>Qué es lo que hace que un insight lo sea.</li>
                    <li>Ejemplos de insights acerca de la actualidad de las redes sociales.</li>
                </ol>
                </strong>",
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/Infografía.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para elaborar una infografía</a>'
            ],
            //Paso 4
            [
                "instruction" => "No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el Generador de referencias en formato APA.",
                "instruction_extra" =>  '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'
            ],
            //Paso 5
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar Canva.",
                "instruction_extra" =>  '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad, ya que lo compartirás más adelante.",
            ]
        ],
        /*"extra_element" => 
        [
            "extra_intro" => "<strong>Nota.</strong> Para realizar esta actividad, es necesario que conozcas previamente las dos fases anteriores del método Design Thinking.",
            "extra_instruction_list" => 
            [
        
            ]
        ]*/
    ],
    //SLAB 9
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente texto sobre <strong>información cuantitativa.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el reto que se te plantea."
            ],
            //Paso 3
            [
                "case_title" => "Los “14 millones de futuros” de META",
                "img" => "img/act/iStock-1289140807.jpg",
                "text" => "<div>Facebook es la red social más utilizada en el mundo, con una cantidad de usuarios que supera los 2500 millones.
                    <br><br>
                    Fundada en 2004, su crecimiento ha sido positivo hasta el año 2022, en el cuál registró por primera vez en su historia un crecimiento negativo.
                    <br>
                    En 2021 y después de adquirir otras redes sociales como Instagram por 1000 millones de dólares en 2012 y WhatsApp en 2014 por 22 000 millones de dólares, así como otras empresas de tecnología como Oculus en el mismo año por 2000 millones de dólares; Facebook se convierte en META, la empresa matriz que controla a todo el grupo.
                    <br><br>
                    Para poner en el horizonte los posibles futuros de Meta y Facebook, reflexiona en las siguientes preguntas
                    <br>
                    ¿Por qué Facebook habrá cambiado su estructura?
                    <br>
                    ¿Cuál es su beneficio de cara al futuro?
                    <br>
                    Comprará otras redes sociales o empresas?
                    <br>
                    ¿Cómo podrá competir?
                    <br>
                    ¿Seguirá creciendo?
                    <br>
                    ¿Desaparecerá?
                    <br>
                    ¿Mutará?
                    <br>
                    ¿Cuál es el futuro posible de META?
                    <br>
                    ¿Cuál es el futuro plausible de META?
                    <br>
                    ¿Cuál es el futuro probable de META?
                    <br><br>
                    Expresa cuales son los futuros que visualizas. 
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Reto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Descarga la plantilla Cono de futuros.
                    <br>
                    <div class='d-flex justify-content-around logo-tools align-items-center'>
                        <a href='assets/docs/tools/demuestra/Cono de futuros.jpeg' class='tracker btn btn-outline-primary' download='Cono de futuros.jpeg'>Cono de futuros</a>
                    </div>"],
                    ["subinstruction" => "Analiza el presente de la compañía. Para este Slab te recomendamos haber cursado los Slabs 2, 7 y 8 de este Deck."],
                    ["subinstruction" => "Crea escenarios relacionados al contexto del proyecto."],
                    ["subinstruction" => "Clasifica y ordena los escenarios de acuerdo a su factibilidad en el cono de futuros."],
                    ["subinstruction" => "Define los escenarios posibles, plausibles y probables."],
                    ["subinstruction" => "Sube la  imagen del cono de futuros con los escenarios definidos en un documento en línea."],
                    ["subinstruction" => "Guarda el enlace del documento, ya que lo compartirás más adelante."],
                ],
            ]
        ],
    ],
    //SLAB 10
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre <strong>elementos necesarios para elaborar una estrategia basada en los OKR en el Diseño de Futuros.</strong>",
            ],
            //Paso 2
            [
                "instruction" => "Investiga en fuentes de información confiables, sobre:<br>
                <strong>
                <ol type='a'>
                    <li>¿Qué es un OKR?</li>
                    <li>¿Para qué sirve crear los OKR?</li>
                    <li>¿Cuáles son los elementos que contiene OKR?</li>
                    <li>Diferencias entre OKR y KPI.</li>
                </ol>
                </strong>",
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/Infografía.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para elaborar una infografía</a>'
            ],
            //Paso 4
            [
                "instruction" => "No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el Generador de referencias en formato APA.",
                "instruction_extra" =>  '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'
            ],
            //Paso 5
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar Canva.",
                "instruction_extra" =>  '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad, ya que lo compartirás más adelante.",
            ]
        ],
    ],
];


//-- Instrucciones Actividad Autovaloración --
/*
    FORMATO:
   * Cada paso completo es un arreglo
   * "introduction" -> Un párrafo de introducción a la actividad (opcional)
   * "text" -> Determina si el texto es normal o negritas
   * "type" -> Determina el tipo de inciso (letra o número)
   * "extra" -> Agrega un hipervínculo después del paso
   * "extra_element" -> Agreaga una lista extra de instrucciones
   *                 -> Está compuesta de los siguientes elementos:
   *                    -> "extra_intro" -> Introducción a la sección
   *                    -> "extra_instruction_list" -> Lista de instrucciones
   *                    -> "extra_instruction" -> Instrucción extra
   
*/
$act3_instructions = [
    //Slab 1
    [   
        //Type: nada o letter
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
            
        ],
        
        
    ],
    //Slab 2
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 2
        [   
            
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
        
    ],
    //Slab 3
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
    ],
    //Slab 4
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
    ],
    //Slab 5
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
    ],
    //Slab 6
    [   
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
        
        
    ],
    //Slab 7
    [   
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
        
        
    ],
    //Slab 8
    [   //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
    ],
    //Slab 9
    [   
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
        
    ],
    //Slab 10
    [   //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
    ],
];

//-- Herramientas autovaloración --
/* 
   FORMATO:   
   * "type" -> Indica la visualización de las herramientas:
        * "row" -> Visualización simple. La herramienta se muestra con botón
        * "col" -> Visualización alternativa. La herramienta se muestra con imagen  

   * "tool" -> Indica el link o la ruta de la herramienta
        * Ruta del archivo -> assets/docs/tools/autoval/nombre-del-archivo

   * "img" -> Indica la ruta de la imagen
        * Ruta del archivo -> img/act/nombre-del-archivo

   * "instruction" -> Breve indicación de la imagen
    */
$act3_finalization = 
[
    //Slab 1
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/FUTURE_THINKING_Slab1_AV.pdf',
    ],
    //Slab 2
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/FUTURE_THINKING_Slab2_AV.pdf',
    ],
    //Slab 3
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/FUTURE_THINKING_Slab3_AV.pdf',
    ],
    //Slab 4
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/FUTURE_THINKING_Slab4_AV.pdf',
    ],
    //Slab 5
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/FUTURE_THINKING_Slab5_AV.pdf',
    ],
    //Slab 6
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/FUTURE_THINKING_Slab6_AV.pdf',
    ],
    //Slab 7
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/FUTURE_THINKING_Slab7_AV.pdf',
    ],
    //Slab 8
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/FUTURE_THINKING_Slab8_AV.pdf',
    ],
    //Slab 9
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/FUTURE_THINKING_Slab9_AV.pdf',
    ],
    //Slab 10
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/FUTURE_THINKING_Slab10_AV.pdf',
    ],
    
];



//-- Formulario autoevaluación --
/* 
   FORMATO:
   * Agregar el código embebido del formulario
*/
$act3_forms = 
[
/* Slab1 */    '<div data-tf-widget="S4ca0XHF" data-tf-iframe-props="title=Formulario_FT_S1" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab2 */    '<div data-tf-widget="Ghld7FMw" data-tf-iframe-props="title=Formulario_FT_S2" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab3 */    '<div data-tf-widget="CzNPZ3EH" data-tf-iframe-props="title=Formulario_FT_S3" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab4 */    '<div data-tf-widget="UagP0PpO" data-tf-iframe-props="title=Formulario_FT_S4" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab5 */    '<div data-tf-widget="oui3cblo" data-tf-iframe-props="title=Formulario_FT_S5" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab6 */    '<div data-tf-widget="yUCNYsbR" data-tf-iframe-props="title=Formulario_FT_S6" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab7 */    '<div data-tf-widget="YQgic739" data-tf-iframe-props="title=Formulario_FT_S7" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab8 */    '<div data-tf-widget="cxNoQT6A" data-tf-iframe-props="title=Formulario_FT_S8" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab9 */    '<div data-tf-widget="mxB6mab6" data-tf-iframe-props="title=Formulario_FT_S9" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab10 */   '<div data-tf-widget="iKnJtSmI" data-tf-iframe-props="title=Formulario_FT_S10" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>'
];

//-- Cierre SLAB --
$act3_final_message = 
[
    "¡Felicidades aprendedor! Has terminado con éxito este Slab, donde conociste acerca de <highlight>Diseño de futuros.</highlight>",
    "¡Lo lograste! Has completado esta experiencia de aprendizaje sobre <highlight>Señales.</highlight>",
    "¡Lo lograste! Has completado esta experiencia de aprendizaje sobre <highlight>Patrones.</highlight>",
    "¡Un paso más rumbo al éxito! Ahora sabes sobre <highlight>información cuantitativa.</highlight> Sigue aprendiendo.",
    "¡Slab finalizado! Recuerda que practicar lo aprendido sobre <highlight>información cualitativa</highlight> es crucial para dominarlo.",
    "¡Felicidades aprendedor! Has aprendido sobre <highlight>Social Listening.</highlight> El éxito se obtiene sumando Slabs ¡Sigue esforzándote!",
    "¡Felicidades aprendedor! Has terminado con éxito este Slab, donde conociste acerca de <highlight>mega, macro, micro tendencias.</highlight>",
    "¡Lo has hecho muy bien! Si quieres repasar cómo obtener un <highlight>insight,</highlight> puedes regresar al Slab las veces que desees.",
    "¡Un paso más rumbo al éxito! Ahora sabes sobre escenarios <highlight>posibles, plausibles y probables.</highlight> Sigue aprendiendo.",
    "¡Te felicitamos por terminar este Slab! Ahora conoces más sobre <highlight>estrategia con OKRs.</highlight>",
];

//-- Cierre Deck --
$Diagnostic_message = 'Has concluido con éxito el Deck <highlight>Diseñar futuros. Un paso por delante.</highlight>
    <br><br>
    Esperamos que las actividades realizadas en esta experiencia de aprendizaje hayan contribuido al desarrollo de la competencia: <highlight>Desarrollo de futuros probables para generar estrategias que permitan dar ventajas competitivas en el crecimiento de negocios y diseño de soluciones.</highlight>
    <br><br>
    Estamos seguros de que lo aprendido será de gran ayuda para tu éxito y crecimiento.'
?>