<?php

/**
 * Стартовый блок
 */
$mainBlock = [
    "name" => 'Группа компаний "' . SITE_BRAND_NAME . '"',
    "title" => "Строительство под ключ домов из кирпича и газоблока",
    "description" => "Построим вам дом из кирпича площадью 170 м<sup>2</sup> по цене 3.5 млн. руб. за 100 дней - или вернем деньги, если сорвем сроки",
];

/**
 * Услуги
 */
$servicesBlock = [
    "title" => "Наши услуги",
    "points" => [
        // Проектирование
        "designing" => [
            "classes" => "fadeInLeft",
            "img" => "/app/img/proekt.jpg",
            "name" => "Проектирование",
            "menu" => [
                "разработка дизайн проекта",
                "разработка рабочих проектов:" => [
                    "архитектурные решения",
                    "конструкционные решения",
                    "электроснабжение и освещение",
                    "водоснабжение и канализация",
                    "вентиляция и отопление",
                    "слаботочные сети",
                ]
            ],
            "link" => "/gallery/design/"
        ],
        // Строительство домов и коттеджей
        "building" => [
            "classes" => "fadeInLeft",
            "img" => "/app/img/zaghome.jpg",
            "name" => "Строительство домов и коттеджей",
            "menu" => [
                "устройство фундамента",
                "бетонные работы",
                "устройство стен из бетона, кирпича, газобетона",
                "устройство кровли из металлочерепицы",
                "устройство кровли из мягкой черепицы",
            ],
            "link" => "/gallery/building/"
        ],
        // Благоустройство
        "beautification" => [
            "classes" => "fadeInRight",
            "img" => "/app/img/ychastok.jpg",
            "name" => "Благоустройство",
            "menu" => [
                "устройство забора",
                "планировка участка по проектным отметками",
                "земляные работы",
                "устройство системы автоматического полива",
                "устройство дорожек из брусчатки",
                "завоз и планировка плодородного грунта",
            ],
            "link" => "/gallery/beautification/"
        ],
        // Проектирование и строительство бассейнов
        "pools" => [
            "classes" => "fadeInRight",
            "img" => "/app/img/pool.jpg",
            "name" => "Проектирование и строительство бассейнов",
            "menu" => [
                "разработка технологического проекта",
                "подборка и монтаж оборудования",
                "устройство чаши бассейна",
                "отделка чаши мозаикой, плиткой, пленкой",
                "эксплуатация и обслуживание",
            ],
            "link" => "/gallery/pools/"
        ],
        // Составление смет
        "estimate" => [
            "classes" => "fadeInLeft",
            "img" => "/app/img/smeta.jpg",
            "name" => "Составление смет",
            "menu" => [
                "предварительная оценка затрат",
                "составление итоговой сметы на строительство",
                "экономическое обоснование вариантов на этапе проектирования",
                "анализ проектно-сметной документации",
            ],
            "link" => ""
        ],
        // Монтажные работы
        "installation" => [
            "classes" => "fadeInLeft",
            "img" => "/app/img/montaj.jpg",
            "name" => "Монтажные работы",
            "menu" => [
                "монтаж черновой и чистовой электрики",
                "монтаж слаботочных систем",
                "монтаж системы водоснабжения и канализации",
                "монтаж отопления",
                "монтаж системы вентиляции и кондиционирования",
            ],
            "link" => ""
        ],
        // Отделка фасадов
        "decoration" => [
            "classes" => "fadeInRight",
            "img" => "/app/img/otdelka.jpg",
            "name" => "Отделка фасадов",
            "menu" => [
                "утепление фасада",
                "устройство вентилируемых фасадов",
                "облицовка фасада клинкерным кирпичем",
                "штукатурка и покраска",
                "отделка планкеном",
            ],
            "link" => ""
        ],
        // Внутренняя отделка
        "interior" => [
            "classes" => "fadeInRight",
            "img" => "/app/img/remont.jpg",
            "name" => "Внутренняя отделка",
            "menu" => [
                "устройство стяжки и штукатурки",
                "шпаклевка, окраска, обои",
                "укладка плитки, керамогранита, мозаики",
                "укладка ламината, инженерной доски, линолеума",
            ],
            "link" => "/gallery/repairs/"
        ]
    ]
];

/**
 * Блок акции и предложения
 */
$stocksBlock = [
    "title" => "Акции и спецпредложения",
    "img" => "/app/img/zaghome.jpg",
    "text" => "При заключении договора на строительство коттеджа или дома архитектурный проект в подарок!",
    "profit_title" => "Ваша выгода",
    "profit" => "50 000 <i class='fa fa-ruble'></i>"
];

/**
 * Блок преимущества
 */
$advantagesBlock = [
    "title_left" => "Проверенные решения -<br>предсказуемый<br>результат",
    "title" => "Почему мы?",
    "img" => "/app/img/proekt.jpg",
    "tasks" => [
        [
            "icon" => "<i class='fa fa-tasks'></i>",
            "primary" => "не стесняемся думать!",
            "secondary" => "Выполняя вашу задачу мы всегда найдем лучшее решение и предложим его"
        ],
        [
            "icon" => "<i class='fa fa-globe'></i>",
            "primary" => "полный комплекс работ",
            "secondary" => "Выполняем полный комплекс работ \"под ключ\""
        ],
        [
            "icon" => "<i class='fa fa-clock-o'></i>",
            "primary" => "Соблюдаем сроки",
            "secondary" => "Баню или дом (6х4, 8х6) строим за 2 месяца. Коттедж до 350м<sup>2</sup> - за 3 месяца"
        ],
        [
            "icon" => "<i class='fa fa-calendar-check-o'></i>",
            "primary" => "Поэтапная работа",
            "secondary" => "Делим работу на этапы и отчитываемся ежедневно"
        ],
        [
            "icon" => "<i class='fa fa-shield'></i>",
            "primary" => "Гарантия",
            "secondary" => "Работаем по договору. Гарантия на выполненные работы 2 года. Вернём деньги, если сорвём сроки."
        ],
        [
            "icon" => "<i class='fa fa-ruble'></i>",
            "primary" => "Цена не меняется",
            "secondary" => "При расчете учитываем все дополнительные и неочевидные для вас расходы. Поэтапное финансирование."
        ]
    ]
];

/**
 * Примеры работ
 */
$examplesBlock = [
    "title" => "Примеры наших работ",
    "description" => "Больше примеров работ можно посмотреть в галерее",
    "link" => "/gallery",
    "images" => [
        "/app/img/photos/cottage-velednikovo/13.jpg" => "Foto1",
        "/app/img/photos/cottage-velednikovo/12.jpg" => "Foto2",
        "/app/img/photos/cottage-velednikovo/14.jpg" => "Foto4",
    ]
];

/**
 * Этапы работы
 */
$stagesBlock = [
    "title" => "6 этапов нашей работы",
    "stages" => [
        [
            "classes" => "fadeInLeft",
            "delay" => "",
            "icon" => "<i class='fa fa-handshake-o'></i>",
            "header" => "Знакомимся",
            "description" => "После Вашего обращения организуем встречу для знакомства и обмена контактами. Получаем максимально полную информацию по имеющемуся объекту и детально уточняем перечень задач. Изучаем документацию и задаем вопросы."
        ],
        [
            "classes" => "fadeInRight",
            "delay" => "0.5s",
            "icon" => "<i class='fa fa-pencil'></i>",
            "header" => "Находим решение",
            "description" => "На основании изученной информации предлагаем на согласование несколько вариантов оптимального решения задачи с примерным расчетом стоимости затрат по каждому варианту. После выбора варианта заказчиком составляем подробное техническое задание на выполнение работ"
        ],
        [
            "classes" => "fadeInRight",
            "delay" => "1s",
            "icon" => "<i class='fa fa-pencil'></i>",
            "header" => "Подписание договора",
            "description" => "На основании согласованного технического задания готовим смету, согласовываем график производства работ, график финансирования. Подписываем договор подряда. Проводим организационные мероприятия для начала работ"
        ],
        [
            "classes" => "fadeInRight",
            "delay" => "1.5s",
            "icon" => "<i class='fa fa-pencil'></i>",
            "header" => "Черновая отделка",
            "description" => "Организуем условия для начала работ: временное освещение, водоснабжение, канализацию, помещение для складирования материалов. Закрепляем прораба за объектом. Закупаем и завозим материалы. Приступаем к черновой отделке. Ежедневно осуществляем фотофиксацию выполненных работ и отчитываемся перед заказчиком. Оформляем актами скрытые работы"
        ],
        [
            "classes" => "fadeInRight",
            "delay" => "2s",
            "icon" => "<i class='fa fa-pencil'></i>",
            "header" => "Чистовая отделка",
            "description" => "После приемки заказчиком черновых работ и полного утверждения чистовых материалов и уточнения графика их доставки, разрабатываем график производства работ. Особое внимаение обращаем на последовательность выполнения работ. Непрерывно контролируем качество работ и сдаем их заказчику"
        ],
        [
            "classes" => "fadeInRight",
            "delay" => "2.5s",
            "icon" => "<i class='fa fa-pencil'></i>",
            "header" => "Сдаем объект",
            "description" => "Выполняем уборку оюъекта и сдаем объект заказчику. Передаем исполнительную документацию и сертификаты на закупаемый материал. Подписываем окончательный акт завершения работ. Получаем окончательный расчет за выполненные работы"
        ],
    ]
];

/**
 * Отзывы
 */
$reviewsBlock = [
    "title" => "Отзывы о работе наших компаний",
    "reviews" => [
        [
            "title" => "Ермакович Евгений Владиславович",
            "small_title" => "(Реконструкция дома)",
            "stars" => 5,
            "text" => "Выражаю благодарность сотрудникам компании \"ИП Шевчук\" за оперативность и высокое качество выполняемых работ по реконструкции индивидуального жилого дома. За время сотрудничества организация проявила себя надежным и ответственным подрядчиком. Работа производилась на высоком профессиональном уровне. Особо хочется отметить эффективную организацию производственного процесса, компетентность специалистов компании, индивидуальный подход и гибкость в решении нестандартных задач.<br>Надеюсь на дальнейшее сотрудничество.",
            "full_link" => "/app/img/reviews/ermakov.pdf"
        ]
    ]
];

/**
 * Галерея
 */
$galleryBlock = [
    "title" => "Галерея",
    "gallery" => [
        [
            "img" => "/app/img/photos/design/1.jpg",
            "name" => "Проектирование",
            "link" => "/gallery/designing/"
        ],
        [
            "img" => "/app/img/photos/cottage-velednikovo/8.jpg",
            "name" => "Строительство домов и коттеджей",
            "link" => "/gallery/building/"
        ],
        [
            "img" => "/app/img/photos/cottage-velednikovo/13.jpg",
            "name" => "Благоустройство участка",
            "link" => "/gallery/beautification/"
        ],
        [
            "img" => "/app/img/photos/pools/1.jpg",
            "name" => "Проектирование и строительство бассейнов",
            "link" => "/gallery/pools/"
        ],
        [
            "img" => "/app/img/photos/cottage-velednikovo/10.jpg",
            "name" => "Внутренняя отделка и капитальный ремонт",
            "link" => "/gallery/repairs/"
        ],
        [
            "img" => "/app/img/photos/cottage/1.jpg",
            "name" => "Контроль качества работ строительства коттеджа",
            "link" => "/gallery/control-quality/"
        ],
        [
            "img" => "/app/img/photos/repair-for-fitness/2.jpg",
            "name" => "Ремонт помещения под размещение фитнес-клуба",
            "link" => "/gallery/repair-for-fitness/"
        ]
    ]
];

/**
 * Альбомы
 */
$galleryAlbum = [
    "/gallery/designing/" => [
        "name" => "Проектирование",
        "images" => [
            [
                "title" => "Визуализация бассейна",
                "link" => "/app/img/photos/design/1.jpg"
            ],
            [
                "title" => "Визуализация бассейна",
                "link" => "/app/img/photos/design/2.jpg"
            ],
            [
                "title" => "Визуализация холл фитнес-клуб",
                "link" => "/app/img/photos/design/3.png"
            ],
            [
                "title" => "Визуализация холл фитнес-клуб",
                "link" => "/app/img/photos/design/4.png"
            ],
            [
                "title" => "Визуализация кардио зона",
                "link" => "/app/img/photos/design/5.jpg"
            ],
            [
                "title" => "Визуализация холл фитнес-клуб",
                "link" => "/app/img/photos/design/6.jpg"
            ],
            [
                "title" => "Визуализация тренажерный зал",
                "link" => "/app/img/photos/design/9.jpg"
            ],
            [
                "title" => "Визуализация раздевалка",
                "link" => "/app/img/photos/design/10.jpg"
            ],
            [
                "title" => "Визуализация душевая",
                "link" => "/app/img/photos/design/13.jpg"
            ]
        ]
    ],
    "/gallery/building/" => [
        "name" => "Строительство домов и коттеджей",
        "images" => [
            [
                "title" => "Фундаментная плита коттеджа",
                "link" => "/app/img/photos/cottage-velednikovo/1.jpg"
            ],
            [
                "title" => "Устройство стен из газоблока",
                "link" => "/app/img/photos/cottage-velednikovo/3.jpg"
            ],
            [
                "title" => "Устройство стен из газоблока",
                "link" => "/app/img/photos/cottage-velednikovo/4.jpg"
            ],
            [
                "title" => "Устройство крыши из мягкой черепицы",
                "link" => "/app/img/photos/cottage-velednikovo/5.jpg"
            ],
            [
                "title" => "Отделка фасада коттеджа",
                "link" => "/app/img/photos/cottage-velednikovo/6.jpg"
            ],
            [
                "title" => "Благоустройство территории",
                "link" => "/app/img/photos/cottage-velednikovo/7.jpg"
            ],
            [
                "title" => "Отделка фасада коттеджа планкеном",
                "link" => "/app/img/photos/cottage-velednikovo/8.jpg"
            ],
            [
                "title" => "Покраска фасада",
                "link" => "/app/img/photos/cottage-velednikovo/11.jpg"
            ],
            [
                "title" => "Укладка гранитных плиток на балконе",
                "link" => "/app/img/photos/cottage-velednikovo/11.2.jpg"
            ],
            [
                "title" => "Окончание работ по строительству коттеджа",
                "link" => "/app/img/photos/cottage-velednikovo/12.jpg"
            ],
            [
                "title" => "Окончание работ по строительству коттеджа",
                "link" => "/app/img/photos/cottage-velednikovo/13.jpg"
            ],
            [
                "title" => "Окончание работ по строительству коттеджа",
                "link" => "/app/img/photos/cottage-velednikovo/14.jpg"
            ],
            [
                "title" => "Окончание работ по строительству коттеджа",
                "link" => "/app/img/photos/cottage-velednikovo/15.jpg"
            ],
            [
                "title" => "Отделка подпорной стенки искуственным камнем",
                "link" => "/app/img/photos/cottage-velednikovo/17.jpg"
            ],
            [
                "title" => "Отделка подпорной стенки искуственным камнем",
                "link" => "/app/img/photos/cottage-velednikovo/18.jpg"
            ]
        ]
    ],
    "/gallery/beautification/" => [
        "name" => "Благоустройство участка",
        "images" => [
            [
                "title" => "Благоустройство участка",
                "link" => "/app/img/photos/cottage-velednikovo/12.jpg"
            ],
            [
                "title" => "Благоустройство участка",
                "link" => "/app/img/photos/cottage-velednikovo/13.jpg"
            ],
            [
                "title" => "Благоустройство участка",
                "link" => "/app/img/photos/cottage-velednikovo/14.jpg"
            ],
        ]
    ],
    "/gallery/pools/" => [
        "name" => "Проектирование и строительство бассейнов",
        "images" => [
            [
                "title" => "Отделка бассейна мозаикой",
                "link" => "/app/img/photos/pools/1.jpg"
            ],
            [
                "title" => "Отделка бассейна мозаикой",
                "link" => "/app/img/photos/pools/2.jpg"
            ],
            [
                "title" => "Отделка бассейна мозаикой",
                "link" => "/app/img/photos/pools/3.jpg"
            ],
            [
                "title" => "Отделка бассейна мозаикой",
                "link" => "/app/img/photos/pools/4.jpg"
            ],
            [
                "title" => "Отделка бассейна мозаикой",
                "link" => "/app/img/photos/pools/5.jpg"
            ],
            [
                "title" => "Отделка бассейна мозаикой",
                "link" => "/app/img/photos/pools/6.jpg"
            ],
            [
                "title" => "Отделка бассейна мозаикой",
                "link" => "/app/img/photos/pools/7.jpg"
            ],
            [
                "title" => "Строительство хаммама",
                "link" => "/app/img/photos/pools/8.jpg"
            ],
            [
                "title" => "Строительство хаммама",
                "link" => "/app/img/photos/pools/9.jpg"
            ],
            [
                "title" => "Строительство хаммама",
                "link" => "/app/img/photos/pools/10.jpg"
            ],
            [
                "title" => "Строительство хаммама",
                "link" => "/app/img/photos/pools/11.jpg"
            ],
            [
                "title" => "Строительство хаммама",
                "link" => "/app/img/photos/pools/12.jpg"
            ]
        ]
    ],
    "/gallery/repairs/" => [
        "name" => "Внутренняя отделка и капитальный ремонт",
        "images" => [
            [
                "title" => "Подготовка стен комнаты",
                "link" => "/app/img/photos/cottage-velednikovo/9.jpg"
            ],
            [
                "title" => "Подготовка стен комнаты",
                "link" => "/app/img/photos/cottage-velednikovo/10.jpg"
            ],
            [
                "title" => "Подготовка стен комнаты",
                "link" => "/app/img/photos/cottage-velednikovo/11.1.jpg"
            ],
            [
                "title" => "Укладка плитки на стены",
                "link" => "/app/img/photos/cottage-velednikovo/11.3.jpg"
            ],
            [
                "title" => "Косметический ремонт салона красоты",
                "link" => "/app/img/photos/repair-for-spa/1.jpg"
            ],
            [
                "title" => "Косметический ремонт салона красоты",
                "link" => "/app/img/photos/repair-for-spa/2.jpg"
            ],
            [
                "title" => "Косметический ремонт салона красоты",
                "link" => "/app/img/photos/repair-for-spa/3.jpg"
            ],
            [
                "title" => "Косметический ремонт салона красоты",
                "link" => "/app/img/photos/repair-for-spa/4.jpg"
            ],
            [
                "title" => "Косметический ремонт салона красоты",
                "link" => "/app/img/photos/repair-for-spa/5.jpg"
            ],
            [
                "title" => "Косметический ремонт салона красоты",
                "link" => "/app/img/photos/repair-for-spa/6.jpg"
            ],
            [
                "title" => "Косметический ремонт салона красоты",
                "link" => "/app/img/photos/repair-for-spa/7.jpg"
            ]
        ]
    ],
    "/gallery/control-quality/" => [
        "name" => "Контроль качества работ строительства коттеджа",
        "images" => [
            [
                "title" => "Устройство плиты перекрытия",
                "link" => "/app/img/photos/cottage/1.jpg"
            ],
            [
                "title" => "Армирование плиты перекрытия",
                "link" => "/app/img/photos/cottage/2.jpg"
            ],
            [
                "title" => "Устройство кровли из черепицы",
                "link" => "/app/img/photos/cottage/3.1.jpg"
            ],
            [
                "title" => "Строительство коттеджа",
                "link" => "/app/img/photos/cottage/3.jpg"
            ],
            [
                "title" => "Устройство клинкерной кладки",
                "link" => "/app/img/photos/cottage/4.jpg"
            ],
            [
                "title" => "Устройство клинкерной кладки",
                "link" => "/app/img/photos/cottage/6.jpg"
            ],
            [
                "title" => "Устройство клинкерной кладки",
                "link" => "/app/img/photos/cottage/7.jpg"
            ],
            [
                "title" => "Устройство клинкерной кладки",
                "link" => "/app/img/photos/cottage/8.jpg"
            ],
            [
                "title" => "Устройство клинкерной кладки",
                "link" => "/app/img/photos/cottage/11.jpg"
            ],
            [
                "title" => "Отделка дымоходов",
                "link" => "/app/img/photos/cottage/12.jpg"
            ],
            [
                "title" => "Устройство ж/б лестничного марша",
                "link" => "/app/img/photos/cottage/14.jpg"
            ],
            [
                "title" => "Устройство ж/б лестничного марша",
                "link" => "/app/img/photos/cottage/15.jpg"
            ],
            [
                "title" => "Устройство ж/б лестничного марша",
                "link" => "/app/img/photos/cottage/16.jpg"
            ]
        ]
    ],
    "/gallery/repair-for-fitness/" => [
        "name" => "Ремонт помещения под размещение фитнес-клуба",
        "images" => [
            [
                "title" => "Устройство ж/б чаши бассейна",
                "link" => "/app/img/photos/repair-for-fitness/1.jpg"
            ],
            [
                "title" => "Отделка тренажерного зала",
                "link" => "/app/img/photos/repair-for-fitness/2.jpg"
            ],
            [
                "title" => "Отделка тренажерного зала",
                "link" => "/app/img/photos/repair-for-fitness/3.jpg"
            ],
            [
                "title" => "Отделка тренажерного зала",
                "link" => "/app/img/photos/repair-for-fitness/4.jpg"
            ],
            [
                "title" => "Отделка тренажерного зала",
                "link" => "/app/img/photos/repair-for-fitness/5.jpg"
            ],
            [
                "title" => "Отделка тренажерного зала",
                "link" => "/app/img/photos/repair-for-fitness/6.jpg"
            ],
            [
                "title" => "Отделка зала групповых занятий",
                "link" => "/app/img/photos/repair-for-fitness/8.jpg"
            ],
            [
                "title" => "Душевые",
                "link" => "/app/img/photos/repair-for-fitness/9.jpg"
            ],
            [
                "title" => "Душевые",
                "link" => "/app/img/photos/repair-for-fitness/10.jpg"
            ],
            [
                "title" => "Душевые",
                "link" => "/app/img/photos/repair-for-fitness/11.jpg"
            ],
            [
                "title" => "Душевые",
                "link" => "/app/img/photos/repair-for-fitness/12.jpg"
            ],
            [
                "title" => "Душевые",
                "link" => "/app/img/photos/repair-for-fitness/13.jpg"
            ]
        ]
    ]
];