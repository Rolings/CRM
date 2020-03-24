<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pagesCategory =
            [
                [
                    'uk' => ['name' => "Каталог"],
                    'child'=>[
                        [
                            'ru' => ['name' => "Смартфоны и телефоны",],
                            'en' => ['name' => "Smartphones & Phones",],
                            'uk' => ['name' => "Смартфони и телефоны",],
                            'category_image' => 'prod10.png',
                            'image' => 'phone_small.svg',
                            'child' => [
                                [
                                    'ru' => ['name' => "Смартфоны"],
                                    'en' => ['name' => "Smartphones"],
                                    'uk' => ['name' => "Cмартфони"],
                                    'category_image' => 'prod10.png',
                                ],
                                [
                                    'ru' => ['name' => "Телефоны"],
                                    'en' => ['name' => "Phones"],
                                    'uk' => ['name' => "Телефони"],
                                    'category_image' => 'prod11.png',
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Мобильные телефоны"],
                                            'en' => ['name' => "Mobile phones"],
                                            'uk' => ['name' => "Мобільні телефони"],
                                            'category_image' => 'prod11.png',
                                        ],
                                        [
                                            'ru' => ['name' => "Беспроводные телефоны"],
                                            'en' => ['name' => "Cordless phones"],
                                            'uk' => ['name' => "Бездротові телефони"],
                                            'category_image' => 'prod23.png',
                                        ],
                                        [
                                            'ru' => ['name' => "Проводные телефоны"],
                                            'en' => ['name' => "Corded Phones"],
                                            'uk' => ['name' => "Дротяні телефони"],
                                            'category_image' => 'prod25.png',
                                        ],
                                        [
                                            'ru' => ['name' => "Факсы"],
                                            'en' => ['name' => "Faxes"],
                                            'uk' => ['name' => "Факси"],
                                            'category_image' => 'prod24.png',
                                        ],
                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Аксессуары"],
                                    'en' => ['name' => "Accessories"],
                                    'uk' => ['name' => "Аксесуари"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Чехлы для телефонов"],
                                            'en' => ['name' => "Phone Cases"],
                                            'uk' => ['name' => "Чохли для телефонів"],
                                        ],
                                        [
                                            'ru' => ['name' => "Защитные стекла для телефонов"],
                                            'en' => ['name' => "Safety glass for phones"],
                                            'uk' => ['name' => "Скло захисне для телефонів"],
                                        ],
                                        [
                                            'ru' => ['name' => "Универсальные мобильные батареи (Powerbank)"],
                                            'en' => ['name' => "Universal Mobile Batteries (Powerbank)"],
                                            'uk' => ['name' => "Універсальні мобільні батареї (Powerbank)"],
                                        ],
                                        [
                                            'ru' => ['name' => "Карты памяти"],
                                            'en' => ['name' => "Memory cards"],
                                            'uk' => ['name' => "Карти пам'яті"],
                                        ],
                                        [
                                            'ru' => ['name' => "Bluetooth-гарнитуры"],
                                            'en' => ['name' => "Bluetooth headset"],
                                            'uk' => ['name' => "Bluetooth-гарнітури"],
                                        ],
                                        [
                                            'ru' => ['name' => "Моноподы для селфи"],
                                            'en' => ['name' => "Monopods for a selfie"],
                                            'uk' => ['name' => "Моноподи для Селфі"],
                                        ],
                                        [
                                            'ru' => ['name' => "Зарядные устройства для смартфонов"],
                                            'en' => ['name' => "Smartphone Chargers"],
                                            'uk' => ['name' => "Зарядні пристрої для смартфонів"],
                                        ],
                                        [
                                            'ru' => ['name' => "Кабели и переходники для телефонов"],
                                            'en' => ['name' => "Cables and Adapters for Phones"],
                                            'uk' => ['name' => "Кабелі та перехідники для телефонів"],
                                        ],
                                        [
                                            'ru' => ['name' => "Держатели для мобильного устройства"],
                                            'en' => ['name' => "Mobile device holders"],
                                            'uk' => ['name' => "Тримачі для мобільного пристрою"],
                                        ],
                                        [
                                            'ru' => ['name' => "Вспышки для смартфонов"],
                                            'en' => ['name' => "Smartphone flashes"],
                                            'uk' => ['name' => "Спалахи для смартфонів"],
                                        ],
                                        [
                                            'ru' => ['name' => "Стилусы"],
                                            'en' => ['name' => "Stylus pens"],
                                            'uk' => ['name' => "Стелсі"],
                                        ],
                                        [
                                            'ru' => ['name' => "Усилители для наушников"],
                                            'en' => ['name' => "Headphone Amplifiers"],
                                            'uk' => ['name' => "Підсилювачі для навушників"],
                                        ],
                                        [
                                            'ru' => ['name' => "Перчатки для сенсорных экранов"],
                                            'en' => ['name' => "Gloves for touch screens    "],
                                            'uk' => ['name' => "Рукавички для сенсорних екранів"],
                                        ],
                                        [
                                            'ru' => ['name' => "Стартовые пакеты"],
                                            'en' => ['name' => "Starter packs"],
                                            'uk' => ['name' => "Стартові пакети"],
                                        ],
                                        [
                                            'ru' => ['name' => "Наушники"],
                                            'en' => ['name' => "Headphones"],
                                            'uk' => ['name' => "Навушники"],
                                        ],
                                    ]
                                ],
                            ]
                        ],
                        [
                            'ru' => ['name' => "Ноутбуки, планшеты, компьютеры"],
                            'en' => ['name' => "Laptops, tablets, computers",],
                            'uk' => ['name' => "Ноутбуки, планшети, комп'ютери",],
                            'image' => 'computers_small.svg',
                            'child' => [
                                [
                                    'ru' => ['name' => "Ноутбуки"],
                                    'en' => ['name' => "Laptops",],
                                    'uk' => ['name' => "Ноутбуки"],
                                ],
                                [
                                    'ru' => ['name' => "Компьютеры и комплектующие"],
                                    'en' => ['name' => "Computers and accessories",],
                                    'uk' => ['name' => "Комп'ютери та комплектуючі"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Компьютеры (ПК)"],
                                            'en' => ['name' => "Комп'ютери (ПК)",],
                                            'uk' => ['name' => "Computers (PC)"],
                                        ],
                                        [
                                            'ru' => ['name' => "Мониторы"],
                                            'en' => ['name' => "Монітори",],
                                            'uk' => ['name' => "Monitors"],
                                        ],
                                        [
                                            'ru' => ['name' => "Мыши компьютерные"],
                                            'en' => ['name' => "Миші комп'ютерні",],
                                            'uk' => ['name' => "Computer mice"],
                                        ],
                                        [
                                            'ru' => ['name' => "Клавиатуры"],
                                            'en' => ['name' => "Клавіатури",],
                                            'uk' => ['name' => "Keyboards"],
                                        ],

                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Планшеты"],
                                    'en' => ['name' => "Tablets",],
                                    'uk' => ['name' => "Електронні книги"],
                                ],
                                [
                                    'ru' => ['name' => "Электронные книги"],
                                    'en' => ['name' => "Electronic books",],
                                    'uk' => ['name' => "Мультимедіа"],
                                ],
                                [
                                    'ru' => ['name' => "Мультимедиа"],
                                    'en' => ['name' => "Multimedia",],
                                    'uk' => ['name' => "МФУ, принтери і сканери"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Веб-камеры"],
                                            'en' => ['name' => "Webcams",],
                                            'uk' => ['name' => "Веб-камери"],
                                        ],
                                        [
                                            'ru' => ['name' => "Гарнитуры"],
                                            'en' => ['name' => "Headsets",],
                                            'uk' => ['name' => "Гарнітури"],
                                        ],
                                        [
                                            'ru' => ['name' => "Компьютерная акустика"],
                                            'en' => ['name' => "Computer acoustics",],
                                            'uk' => ['name' => "Комп'ютерна акустика"],
                                        ],
                                        [
                                            'ru' => ['name' => "Геймпады, джойстики, рули"],
                                            'en' => ['name' => "Gamepads, joysticks, wheels",],
                                            'uk' => ['name' => "Геймпади, джойстики, керма"],
                                        ],
                                        [
                                            'ru' => ['name' => "Микрофоны для компьютера"],
                                            'en' => ['name' => "Microphones for computer",],
                                            'uk' => ['name' => "Мікрофони для комп'ютера"],
                                        ],
                                    ]
                                ],
                                [
                                    'ru' => ['name' => "МФУ, принтеры и сканеры"],
                                    'en' => ['name' => "MFPs, printers and scanners",],
                                    'uk' => ['name' => "МФУ, принтери і сканери"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Принтеры и МФУ"],
                                            'en' => ['name' => "Printers and MFPs",],
                                            'uk' => ['name' => "Принтери і БФП"],
                                        ],
                                        [
                                            'ru' => ['name' => "Сканеры"],
                                            'en' => ['name' => "Scanners",],
                                            'uk' => ['name' => "Сканери"],
                                        ],
                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Сетевое оборудование"],
                                    'en' => ['name' => "Network hardware",],
                                    'uk' => ['name' => "Мережеве обладнаннят"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "IP-телефоны"],
                                            'en' => ['name' => "IP Phones",],
                                            'uk' => ['name' => "IP-телефони "],
                                        ],
                                        [
                                            'ru' => ['name' => "Маршрутизаторы интернет"],
                                            'en' => ['name' => "Internet routers",],
                                            'uk' => ['name' => "Маршрутизатор інтернет"],
                                        ],
                                        [
                                            'ru' => ['name' => "Маршрутизаторы ADSL"],
                                            'en' => ['name' => "ADSL Routers",],
                                            'uk' => ['name' => "Маршрутизатор ADSL"],
                                        ],
                                        [
                                            'ru' => ['name' => "Модемы 3G"],
                                            'en' => ['name' => "3G modems",],
                                            'uk' => ['name' => "Модеми 3G"],
                                        ],
                                        [
                                            'ru' => ['name' => "Сетевые карты LAN"],
                                            'en' => ['name' => "Scanners",],
                                            'uk' => ['name' => "Мережеві карти LAN"],
                                        ],
                                        [
                                            'ru' => ['name' => "IP-камеры"],
                                            'en' => ['name' => "IP cameras",],
                                            'uk' => ['name' => "IP-камери"],
                                        ],
                                        [
                                            'ru' => ['name' => "Адаптеры и сплиттеры"],
                                            'en' => ['name' => "Adapters and Splitters",],
                                            'uk' => ['name' => "Адаптери і сплітери"],
                                        ],
                                        [
                                            'ru' => ['name' => "Антенны и кабели"],
                                            'en' => ['name' => "Antennas and Cables",],
                                            'uk' => ['name' => "Антени та кабелі"],
                                        ],
                                        [
                                            'ru' => ['name' => "Коммутаторы локальной сети (Switch)"],
                                            'en' => ['name' => "LAN Switches (Switch)",],
                                            'uk' => ['name' => "Комутатори локальної мережі (Switch)"],
                                        ],
                                        [
                                            'ru' => ['name' => "Точки доступа"],
                                            'en' => ['name' => "Access points",],
                                            'uk' => ['name' => "Точки доступу"],
                                        ],
                                        [
                                            'ru' => ['name' => "Сетевые хранилища (NAS)"],
                                            'en' => ['name' => "Network Attached Storage (NAS)",],
                                            'uk' => ['name' => "Мережеві сховища (NAS)"],
                                        ],
                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Сетевая защита"],
                                    'en' => ['name' => "Network protection",],
                                    'uk' => ['name' => "Мережева захист"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Аккумуляторы для ИБП"],
                                            'en' => ['name' => "UPS batteries",],
                                            'uk' => ['name' => "Акумулятори для ДБЖ"],
                                        ],
                                        [
                                            'ru' => ['name' => "Инверторы для ноутбука автомобильные"],
                                            'en' => ['name' => "Inverters for laptop automobile",],
                                            'uk' => ['name' => "Інвертори для ноутбука автомобільні"],
                                        ],
                                        [
                                            'ru' => ['name' => "Источники бесперебойного питания"],
                                            'en' => ['name' => "Uninterruptible power supplies",],
                                            'uk' => ['name' => "Джерела безперебійного живлення"],
                                        ],
                                        [
                                            'ru' => ['name' => "Сетевые фильтры"],
                                            'en' => ['name' => "Network filters",],
                                            'uk' => ['name' => "Мережеві фільтри"],
                                        ],
                                        [
                                            'ru' => ['name' => "Стабилизатор напряжения"],
                                            'en' => ['name' => "Voltage regulator",],
                                            'uk' => ['name' => "Стабілізатор напруги"],
                                        ],
                                        [
                                            'ru' => ['name' => "Удлинители"],
                                            'en' => ['name' => "Extension cords",],
                                            'uk' => ['name' => "Подовжувачі"],
                                        ],
                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Аксессуары для ПК и ноутбуков"],
                                    'en' => ['name' => "Accessories for PC and laptops",],
                                    'uk' => ['name' => "Аксесуари для ПК і ноутбуків"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => 'Сумки для ноутбуков'],
                                            'en' => ['name' => 'Notebook bags'],
                                            'uk' => ['name' => 'Сумки для ноутбуків'],
                                        ],

                                        [
                                            'ru' => ['name' => 'Вентилятор USB'],
                                            'en' => ['name' => 'USB fan'],
                                            'uk' => ['name' => 'Вентилятор USB'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Коврики для мыши'],
                                            'en' => ['name' => 'Mouse pads'],
                                            'uk' => ['name' => 'Килимки для миші'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Подставки под ноутбуки'],
                                            'en' => ['name' => 'Laptop Stands'],
                                            'uk' => ['name' => 'Підставки під ноутбуки'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Кабели и переходники для ПК'],
                                            'en' => ['name' => 'Cables and Adapters for PC'],
                                            'uk' => ['name' => 'Кабелі та перехідники для ПК'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Фанари для ноутбуков'],
                                            'en' => ['name' => 'Fanari for laptops'],
                                            'uk' => ['name' => 'Фанарі для ноутбуків']
                                        ],
                                        [
                                            'ru' => ['name' => 'Чистящие средста для дисплеев'],
                                            'en' => ['name' => 'Display Cleaners'],
                                            'uk' => ['name' => 'Чистячі средста для дисплеїв'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Программное обеспечение'],
                                            'en' => ['name' => 'Software'],
                                            'uk' => ['name' => 'Програмне забезпечення'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Чернила для заправки картриджа'],
                                            'en' => ['name' => 'Cartridge refill ink'],
                                            'uk' => ['name' => 'Чорнило для заправки картриджа'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Картриджи, тонеры для принтеров и МФУ'],
                                            'en' => ['name' => 'Cartridges, toners for printers and MFPs'],
                                            'uk' => ['name' => 'Картриджі, тонери для принтерів і МФУ'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Флеш USB'],
                                            'en' => ['name' => 'USB flash'],
                                            'uk' => ['name' => 'флеш USB'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Автомобильные инверторы'],
                                            'en' => ['name' => 'Car Inverters'],
                                            'uk' => ['name' => 'автомобільні інвертори'],
                                        ],
                                        [
                                            'ru' => ['name' => 'SSD-накопители'],
                                            'en' => ['name' => 'SSDs'],
                                            'uk' => ['name' => 'SSD-накопичувачі'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Чехлы для жестких дисков'],
                                            'en' => ['name' => 'Hard drive cases'],
                                            'uk' => ['name' => 'Чохли для жорстких дисків'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Кардридеры'],
                                            'en' => ['name' => 'Card readers'],
                                            'uk' => ['name' => 'Кардрідери'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Хабы'],
                                            'en' => ['name' => 'Hubs'],
                                            'uk' => ['name' => 'хаби'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Жесткие диски'],
                                            'en' => ['name' => 'Hard disks'],
                                            'uk' => ['name' => 'Жорсткі диски'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Зарядные устройства для ноутбуков'],
                                            'en' => ['name' => 'Laptop Chargers'],
                                            'uk' => ['name' => 'Зарядні пристрої для ноутбуків'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Интерактивная панель'],
                                            'en' => ['name' => 'Interactive panel'],
                                            'uk' => ['name' => 'Інтерактивна панель'],
                                        ]
                                    ]
                                ],

                                [
                                    'ru' => ['name' => "Аксессуары к планшетам и книгам"],
                                    'en' => ['name' => "Accessories for tablets and books",],
                                    'uk' => ['name' => "Аксесуари до планшетів та книгам"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => 'Чехлы для планшетов'],
                                            'en' => ['name' => 'Tablet cases'],
                                            'uk' => ['name' => 'Чохли для планшетів'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Защитные пленки для планшетов'],
                                            'en' => ['name' => 'Tablet Screen Protectors'],
                                            'uk' => ['name' => 'Захисні плівки для планшетів'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Чехлы для электронных книг'],
                                            'en' => ['name' => 'Covers for e-books'],
                                            'uk' => ['name' => 'Чохли для електронних книг'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Клавиатуры для планшетов'],
                                            'en' => ['name' => 'Keyboards for tablets'],
                                            'uk' => ['name' => 'Клавіатури для планшетів'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Стилусы'],
                                            'en' => ['name' => 'Stylus pens'],
                                            'uk' => ['name' => 'Стелсі'],
                                        ],
                                    ]
                                ],
                            ]
                        ],
                        [
                            'ru' => ['name' => "Телевизоры, фото и видео",],
                            'en' => ['name' => "TVs, photos and videos",],
                            'uk' => ['name' => "Телевізори, фото и відео",],
                            'image' => 'tv_small.svg',
                            'child' => [
                                [
                                    'ru' => ['name' => 'Телевизоры'],
                                    'en' => ['name' => 'TV sets'],
                                    'uk' => ['name' => 'Телевізори'],
                                ],
                                [
                                    'ru' => ['name' => 'Фотокамеры'],
                                    'en' => ['name' => 'Cameras'],
                                    'uk' => ['name' => 'Фотокамери'],
                                    'child' => [
                                        [
                                            'ru' => ['name' => 'Фотоаппараты'],
                                            'en' => ['name' => 'Cameras',],
                                            'uk' => ['name' => 'Фотоапарати'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Объективы'],
                                            'en' => ['name' => 'The lenses',],
                                            'uk' => ['name' => 'об`єктиви'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Фотовспышки'],
                                            'en' => ['name' => 'Flash units',],
                                            'uk' => ['name' => 'фотоспалахи'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Аккамуляторы для фотокамер'],
                                            'en' => ['name' => 'Batteries for cameras',],
                                            'uk' => ['name' => 'Аккамулятор для фотокамер'],
                                        ]
                                    ]
                                ],
                                [
                                    'ru' => ['name' => 'Видеокамеры'],
                                    'en' => ['name' => 'Camcorders'],
                                    'uk' => ['name' => 'Відеокамери'],
                                    'child' => [
                                        [
                                            'ru' => ['name' => 'Экшн-камеры'],
                                            'en' => ['name' => 'Action cameras',],
                                            'uk' => ['name' => 'Екшн-камери'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Стедикамы'],
                                            'en' => ['name' => 'Steadicam',],
                                            'uk' => ['name' => 'стедікама'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Камеры 360'],
                                            'en' => ['name' => '360 cameras',],
                                            'uk' => ['name' => 'камери 360'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Портативные видеокамеры'],
                                            'en' => ['name' => 'Portable camcorders',],
                                            'uk' => ['name' => 'Портативні відеокамери'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Камеры для виделнаблюдения'],
                                            'en' => ['name' => 'Security cameras',],
                                            'uk' => ['name' => 'Камери для віделнаблюденія'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Комплекты для видеонаблюдения'],
                                            'en' => ['name' => 'Video Surveillance Kits',],
                                            'uk' => ['name' => 'Комплекти для відеоспостереження'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Видеорегистраторы DVR'],
                                            'en' => ['name' => 'DVR DVRs',],
                                            'uk' => ['name' => 'відеореєстратори DVR'],
                                        ]
                                    ]
                                ],
                                [
                                    'ru' => ['name' => 'Проекторы и экраны'],
                                    'en' => ['name' => 'Projectors and screens'],
                                    'uk' => ['name' => 'Проектори та екрани'],
                                    'child' => [
                                        [
                                            'ru' => ['name' => 'Проекторы'],
                                            'en' => ['name' => 'Projectors',],
                                            'uk' => ['name' => 'Проектори'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Проекционные экраны'],
                                            'en' => ['name' => 'Projection screens',],
                                            'uk' => ['name' => 'Проекційні екрани'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Крепления для проекторов'],
                                            'en' => ['name' => 'Projector Mounts',],
                                            'uk' => ['name' => 'Кріплення для проекторів'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Аксессуары к проекторам'],
                                            'en' => ['name' => 'Projector Accessories',],
                                            'uk' => ['name' => 'Аксесуари до проекторів'],
                                        ],

                                    ]
                                ],
                                [
                                    'ru' => ['name' => 'Аксессуары для ТВ'],
                                    'en' => ['name' => 'TV accessories'],
                                    'uk' => ['name' => 'Аксесуари для ТВ'],
                                    'child' => [
                                        [
                                            'ru' => ['name' => 'Крепления для телевизоров'],
                                            'en' => ['name' => 'TV mounts'],
                                            'uk' => ['name' => 'Кріплення для телевізорів'],

                                        ],
                                        [
                                            'ru' => ['name' => 'Маршрутизаторы интернет'],
                                            'en' => ['name' => 'Internet routers',],
                                            'uk' => ['name' => 'Маршрутизатор інтернет'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Антенны и тюнеры'],
                                            'en' => ['name' => 'Antennas and Tuners',],
                                            'uk' => ['name' => 'Антени та тюнери'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Кабели и переходники для ТВ'],
                                            'en' => ['name' => 'Cables and Adapters for TV',],
                                            'uk' => ['name' => 'Кабелі та перехідники для ТВ'],

                                        ],
                                        [
                                            'ru' => ['name' => 'Сетевые фильтры'],
                                            'en' => ['name' => 'Network filters',],
                                            'uk' => ['name' => 'Мережеві фільтри'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Чистящие средства для экранов'],
                                            'en' => ['name' => 'Screen Cleaners',],
                                            'uk' => ['name' => 'Чистячі засоби для екранів'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Универсальные пульты ДУ'],
                                            'en' => ['name' => 'Universal Remote Controls',],
                                            'uk' => ['name' => 'Універсальні пульти ДУ'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Чехлы для пультов ДУ'],
                                            'en' => ['name' => 'Covers for remote controls',],
                                            'uk' => ['name' => 'Чохли для пультів ДУ'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Аксеcсуары к Smart TV'],
                                            'en' => ['name' => 'Accessories for Smart TV',],
                                            'uk' => ['name' => 'Аксеcсуари до Smart TV'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Микрофоны'],
                                            'en' => ['name' => 'Microphones',],
                                            'uk' => ['name' => 'мікрофони'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Удлинители'],
                                            'en' => ['name' => 'Extension cords',],
                                            'uk' => ['name' => 'подовжувачі'],
                                        ]
                                    ]
                                ],
                                [
                                    'ru' => ['name' => 'Аксессуары для видеокамер'],
                                    'en' => ['name' => 'Camcorder Accessories'],
                                    'uk' => ['name' => 'Аксесуари для відеокамер'],
                                    'child' => [
                                        [
                                            'ru' => ['name' => 'Защитные боксы для экшн-камер'],
                                            'en' => ['name' => 'Protective boxes for action cameras',],
                                            'uk' => ['name' => 'Захисні бокси для екшн-камер'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Крепления для экшн-камер'],
                                            'en' => ['name' => 'Action Camera Mounts',],
                                            'uk' => ['name' => 'Кріплення для екшн-камер'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Пульты ДУ для фото и экшн-камер'],
                                            'en' => ['name' => 'Remote controls for photo and action cameras',],
                                            'uk' => ['name' => 'Пульти ДУ для фото і екшн-камер'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Аксессуары к экшн-камерам'],
                                            'en' => ['name' => 'Action Camera Accessories',],
                                            'uk' => ['name' => 'Аксесуари до екшн-камер'],
                                        ]

                                    ]
                                ],
                                [
                                    'ru' => ['name' => 'Аксессуары для фотоаппаратов'],
                                    'en' => ['name' => 'Camera Accessories'],
                                    'uk' => ['name' => 'Аксесуари для фотоапаратів'],
                                    'child' => [
                                        [
                                            'ru' => ['name' => 'Светофильтры'],
                                            'en' => ['name' => 'Light filters',],
                                            'uk' => ['name' => 'світлофільтри'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Сумки и чехлы для фотокамер'],
                                            'en' => ['name' => 'Bags and cases for cameras',],
                                            'uk' => ['name' => 'Сумки й чохли для фотокамер'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Штативы'],
                                            'en' => ['name' => 'Tripods',],
                                            'uk' => ['name' => 'штативи'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Чистящие средства для фототехники'],
                                            'en' => ['name' => 'Cleaning products for photographic equipment',],
                                            'uk' => ['name' => 'Чистячі засоби для фототехніки'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Сменные площадки для крепления'],
                                            'en' => ['name' => 'Interchangeable mountings',],
                                            'uk' => ['name' => 'Змінні майданчики для кріплення'],
                                        ],
                                        [
                                            'ru' => ['name' => 'Зарядные устройства'],
                                            'en' => ['name' => 'Charging device',],
                                            'uk' => ['name' => 'Зарядні пристрої'],

                                        ],
                                        [
                                            'ru' => ['name' => 'Чистящие средства'],
                                            'en' => ['name' => 'Cleaning products',],
                                            'uk' => ['name' => 'Чистячі засоби'],
                                        ]
                                    ]
                                ],
                            ]
                        ],
                        [
                            'ru' => ['name' => "Бытовая техника",],
                            'en' => ['name' => "Appliances",],
                            'uk' => ['name' => "Побутова техніка",],
                            'image' => 'washer_small.svg',
                            'child' => [
                                [
                                    'ru' => ['name' => "Климатическая техника"],
                                    'en' => ['name' => "Air conditioning equipment"],
                                    'uk' => ['name' => "Кліматична техніка"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Кондиционеры"],
                                            'en' => ['name' => "Air conditioners"],
                                            'uk' => ['name' => "Кондиціонери"]
                                        ],
                                        [
                                            'ru' => ['name' => "Вентиляторы"],
                                            'en' => ['name' => "Fans"],
                                            'uk' => ['name' => "Вентилятори"]
                                        ],
                                        [
                                            'ru' => ['name' => "Увлажнители воздуха"],
                                            'en' => ['name' => "Humidifiers"],
                                            'uk' => ['name' => "Зволожувачі повітря"]
                                        ],
                                        [
                                            'ru' => ['name' => "Очистители воздуха"],
                                            'en' => ['name' => "Air purifiers"],
                                            'uk' => ['name' => "Oчищувачі повітря"]
                                        ],
                                        [
                                            'ru' => ['name' => "Водонагреватели"],
                                            'en' => ['name' => "Water heaters"],
                                            'uk' => ['name' => "Водонагрівачі"]
                                        ],
                                        [
                                            'ru' => ['name' => "Обогреватели и конвекторы"],
                                            'en' => ['name' => "Heaters and convectors"],
                                            'uk' => ['name' => "Обігрівачі і конвектори"]
                                        ],
                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Встраиваемая техника"],
                                    'en' => ['name' => "Built-in appliances"],
                                    'uk' => ['name' => "Вбудована техніка"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Варочные панели"],
                                            'en' => ['name' => "Hob"],
                                            'uk' => ['name' => "Варильні панелі"]
                                        ],
                                        [
                                            'ru' => ['name' => "Духовые шкафы"],
                                            'en' => ['name' => "Ovens"],
                                            'uk' => ['name' => "Духові шафи"]
                                        ],
                                        [
                                            'ru' => ['name' => "Измельчители пищевых отходов"],
                                            'en' => ['name' => "Food waste shredders"],
                                            'uk' => ['name' => "Подрібнювачі харчових відходів"]
                                        ],

                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Крупная техника"],
                                    'en' => ['name' => "Large equipment"],
                                    'uk' => ['name' => "Велика техніка"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Холодильники"],
                                            'en' => ['name' => "Refrigerators"],
                                            'uk' => ['name' => "Холодильники"]
                                        ],
                                        [
                                            'ru' => ['name' => "Морозильные камеры и лари"],
                                            'en' => ['name' => "Freezers and chests"],
                                            'uk' => ['name' => "Морозильні камери і лари"]
                                        ],
                                        [
                                            'ru' => ['name' => "Стиральные машины"],
                                            'en' => ['name' => "Washing machines"],
                                            'uk' => ['name' => "Пральні машини"]
                                        ],
                                        [
                                            'ru' => ['name' => "Сушильные машины"],
                                            'en' => ['name' => "Tumble dryers"],
                                            'uk' => ['name' => "Сушильні машини"]
                                        ],
                                        [
                                            'ru' => ['name' => "Вытяжки"],
                                            'en' => ['name' => "Hoods"],
                                            'uk' => ['name' => "Витяжки"]
                                        ],
                                        [
                                            'ru' => ['name' => "Плиты"],
                                            'en' => ['name' => "Slabs"],
                                            'uk' => ['name' => "Плити"]
                                        ],
                                        [
                                            'ru' => ['name' => "Настольные плиты"],
                                            'en' => ['name' => "Tabletop plates"],
                                            'uk' => ['name' => "Настільні плити"]
                                        ],
                                        [
                                            'ru' => ['name' => "Винные шкафы"],
                                            'en' => ['name' => "Wine racks"],
                                            'uk' => ['name' => "Винні шафи"]
                                        ],
                                        [
                                            'ru' => ['name' => "Микроволновые печи"],
                                            'en' => ['name' => "Microwaves"],
                                            'uk' => ['name' => "Мікрохвильові печі"]
                                        ],
                                        [
                                            'ru' => ['name' => "Посудомоечные машины"],
                                            'en' => ['name' => "Dishwashers"],
                                            'uk' => ['name' => "Посудомийні машини"]
                                        ],
                                        [
                                            'ru' => ['name' => "Электрические печи"],
                                            'en' => ['name' => "Electric ovens"],
                                            'uk' => ['name' => "Електричні печі"]
                                        ],
                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Мелкая техника для кухни"],
                                    'en' => ['name' => "Small kitchen appliances"],
                                    'uk' => ['name' => "Дрібна техніка для кухні"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Мультиварки"],
                                            'en' => ['name' => "Slow cookers"],
                                            'uk' => ['name' => "Мультиварки"]
                                        ],
                                        [
                                            'ru' => ['name' => "Блендеры"],
                                            'en' => ['name' => "Blenders"],
                                            'uk' => ['name' => "Блендери"]
                                        ],
                                        [
                                            'ru' => ['name' => "Грили-барбекю"],
                                            'en' => ['name' => "Barbecue grills"],
                                            'uk' => ['name' => "Грилі-барбекю"]
                                        ],
                                        [
                                            'ru' => ['name' => "Миксеры"],
                                            'en' => ['name' => "Mixers"],
                                            'uk' => ['name' => "Міксери"]
                                        ],
                                        [
                                            'ru' => ['name' => "Чайники электрические и термопоты"],
                                            'en' => ['name' => "Electric kettles and thermopots"],
                                            'uk' => ['name' => "Чайники електричні і Термопоти"]
                                        ],
                                        [
                                            'ru' => ['name' => "Мясорубки"],
                                            'en' => ['name' => "Meat mincers"],
                                            'uk' => ['name' => "М'ясорубки"]
                                        ],
                                        [
                                            'ru' => ['name' => "Хлебопечи"],
                                            'en' => ['name' => "Bread makers"],
                                            'uk' => ['name' => "Хлібопекарні"]
                                        ],
                                        [
                                            'ru' => ['name' => "Соковыжималки и цитрус-прессы"],
                                            'en' => ['name' => "Juicers and Citrus Presses"],
                                            'uk' => ['name' => "Соковижималки і цитрус-преси"]
                                        ],
                                        [
                                            'ru' => ['name' => "Измельчители"],
                                            'en' => ['name' => "Choppers"],
                                            'uk' => ['name' => "Подрібнювачі"]
                                        ],
                                        [
                                            'ru' => ['name' => "Кухонные машины и комбайны"],
                                            'en' => ['name' => "Kitchen machines and combines"],
                                            'uk' => ['name' => "Кухонні машини і комбайни"]
                                        ],
                                        [
                                            'ru' => ['name' => "Весы кухонные"],
                                            'en' => ['name' => "Kitchen Scales"],
                                            'uk' => ['name' => "Ваги кухонні"]
                                        ],
                                        [
                                            'ru' => ['name' => "Тостеры"],
                                            'en' => ['name' => "Toasters"],
                                            'uk' => ['name' => "Тостери"]
                                        ],
                                        [
                                            'ru' => ['name' => "Йогуртницы"],
                                            'en' => ['name' => "Yogurt makers"],
                                            'uk' => ['name' => "Йогуртниці"]
                                        ],
                                        [
                                            'ru' => ['name' => "Сушилки для фруктов"],
                                            'en' => ['name' => "Fruit Dryers"],
                                            'uk' => ['name' => "Сушарки для фруктів"]
                                        ],
                                        [
                                            'ru' => ['name' => "Пароварки"],
                                            'en' => ['name' => "Double boiler"],
                                            'uk' => ['name' => "Пароварки"]
                                        ],
                                        [
                                            'ru' => ['name' => "Бутербродницы"],
                                            'en' => ['name' => "Sandwiches"],
                                            'uk' => ['name' => "Бутербродниці"]
                                        ],
                                        [
                                            'ru' => ['name' => "Аэрогрили"],
                                            'en' => ['name' => "Air grills"],
                                            'uk' => ['name' => "Аерогрилі"]
                                        ],
                                        [
                                            'ru' => ['name' => "Попкорницы"],
                                            'en' => ['name' => "Popcorn"],
                                            'uk' => ['name' => "Попкорница"]
                                        ],
                                        [
                                            'ru' => ['name' => "Блинницы"],
                                            'en' => ['name' => "Crepe makers"],
                                            'uk' => ['name' => "Блинниці"]
                                        ],
                                        [
                                            'ru' => ['name' => "Вафельницы"],
                                            'en' => ['name' => "Waffle Makers"],
                                            'uk' => ['name' => "Вафельниці"]
                                        ],
                                        [
                                            'ru' => ['name' => "Ломтерезки"],
                                            'en' => ['name' => "Slicer"],
                                            'uk' => ['name' => "Скиборізки"]
                                        ],
                                        [
                                            'ru' => ['name' => "Мороженицы"],
                                            'en' => ['name' => "Ice cream makers"],
                                            'uk' => ['name' => "Морозивниці"]
                                        ],
                                        [
                                            'ru' => ['name' => "Фритюрницы"],
                                            'en' => ['name' => "Deep fryers"],
                                            'uk' => ['name' => "Фритюрниці"]
                                        ],
                                        [
                                            'ru' => ['name' => "Электрошашлычницы"],
                                            'en' => ['name' => "Electric skewers"],
                                            'uk' => ['name' => "Електрошашличниці"]
                                        ],
                                        [
                                            'ru' => ['name' => "Яйцеварки"],
                                            'en' => ['name' => "Egg cookers"],
                                            'uk' => ['name' => "Яйцеварки"]
                                        ],
                                        [
                                            'ru' => ['name' => "Вакууматоры"],
                                            'en' => ['name' => "Vacuum"],
                                            'uk' => ['name' => "Вакууматора"]
                                        ],
                                        [
                                            'ru' => ['name' => "Су вид"],
                                            'en' => ['name' => "Soo view"],
                                            'uk' => ['name' => "Су вид"]
                                        ],
                                        [
                                            'ru' => ['name' => "Льдогенераторы"],
                                            'en' => ['name' => "Ice makers"],
                                            'uk' => ['name' => "Льодогенератори"]
                                        ],
                                        [
                                            'ru' => ['name' => "Электрический ВОК"],
                                            'en' => ['name' => "Electric wok"],
                                            'uk' => ['name' => "Електричний ВОК"]
                                        ],
                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Все для кофе"],
                                    'en' => ['name' => "Everything for coffee"],
                                    'uk' => ['name' => "Все для кави"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Кофемашины"],
                                            'en' => ['name' => "Coffee machines"],
                                            'uk' => ['name' => "Кавові машини"]
                                        ],
                                        [
                                            'ru' => ['name' => "Кофемолки"],
                                            'en' => ['name' => "Coffee grinders"],
                                            'uk' => ['name' => "Кавомолки"]
                                        ],
                                        [
                                            'ru' => ['name' => "Капучинаторы"],
                                            'en' => ['name' => "Cappuccinators"],
                                            'uk' => ['name' => "Капучинатори"]
                                        ],
                                        [
                                            'ru' => ['name' => "Кофеварки"],
                                            'en' => ['name' => "Coffee makers"],
                                            'uk' => ['name' => "Кавоварки"]
                                        ],
                                        [
                                            'ru' => ['name' => "Кофе"],
                                            'en' => ['name' => "Coffee"],
                                            'uk' => ['name' => "Кава"]
                                        ],
                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Мелкая техника для дома"],
                                    'en' => ['name' => "Small home appliances"],
                                    'uk' => ['name' => "Дрібна техніка для дому"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Пылесосы"],
                                            'en' => ['name' => "Vacuum cleaners"],
                                            'uk' => ['name' => "Пилососи"]
                                        ],
                                        [
                                            'ru' => ['name' => "Утюги"],
                                            'en' => ['name' => "Irons"],
                                            'uk' => ['name' => "Праски"]
                                        ],
                                        [
                                            'ru' => ['name' => "Минимойки"],
                                            'en' => ['name' => "Minisinks"],
                                            'uk' => ['name' => "Мінімийки"]
                                        ],
                                        [
                                            'ru' => ['name' => "Пароочистители"],
                                            'en' => ['name' => "Steam cleaners"],
                                            'uk' => ['name' => "Пароочищувачі"]
                                        ],
                                        [
                                            'ru' => ['name' => "Стеклоочистители"],
                                            'en' => ['name' => "Windscreen wipers"],
                                            'uk' => ['name' => "Склоочисники"]
                                        ],
                                        [
                                            'ru' => ['name' => "Швейные машины и оверлоки"],
                                            'en' => ['name' => "Sewing machines and overlocks"],
                                            'uk' => ['name' => "Швейні машини і оверлоки"]
                                        ],
                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Красота и здоровье"],
                                    'en' => ['name' => "Health and beauty"],
                                    'uk' => ['name' => "Краса і здоров'я"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Эпиляторы"],
                                            'en' => ['name' => "Epilators"],
                                            'uk' => ['name' => "Епілятори"]
                                        ],
                                        [
                                            'ru' => ['name' => "Фотоэпиляторы"],
                                            'en' => ['name' => "Photoepilators"],
                                            'uk' => ['name' => "Фотоепилятори"]
                                        ],
                                        [
                                            'ru' => ['name' => "Фены"],
                                            'en' => ['name' => "Hair dryers"],
                                            'uk' => ['name' => "Фени"]
                                        ],
                                        [
                                            'ru' => ['name' => "Выпрямители волос"],
                                            'en' => ['name' => "Hair straighteners"],
                                            'uk' => ['name' => "Випрямлячі волосся"]
                                        ],
                                        [
                                            'ru' => ['name' => "Плойки и стайлеры"],
                                            'en' => ['name' => "Curling irons and stylers"],
                                            'uk' => ['name' => "Плойки і стайлери"]
                                        ],
                                        [
                                            'ru' => ['name' => "Бритвы электрические"],
                                            'en' => ['name' => "Electric shavers"],
                                            'uk' => ['name' => "Бритви електричні"]
                                        ],
                                        [
                                            'ru' => ['name' => "Машинки для стрижки"],
                                            'en' => ['name' => "Trimmers"],
                                            'uk' => ['name' => "Машинки для стрижки"]
                                        ],
                                        [
                                            'ru' => ['name' => "Триммеры"],
                                            'en' => ['name' => "Trimmers"],
                                            'uk' => ['name' => "Триммери"]
                                        ],
                                        [
                                            'ru' => ['name' => "Расходные материалы для электробритв"],
                                            'en' => ['name' => "Consumables for electric shavers"],
                                            'uk' => ['name' => "Витратні матеріали для електробритв"]
                                        ],
                                        [
                                            'ru' => ['name' => "Маникюрные наборы"],
                                            'en' => ['name' => "Manicure sets"],
                                            'uk' => ['name' => "Манікюрні набори"]
                                        ],
                                        [
                                            'ru' => ['name' => "Косметические зеркала"],
                                            'en' => ['name' => "Cosmetic mirrors"],
                                            'uk' => ['name' => "Косметичні дзеркала"]
                                        ],
                                        [
                                            'ru' => ['name' => "Сауны для лица"],
                                            'en' => ['name' => "Facial saunas"],
                                            'uk' => ['name' => "Сауни для обличчя "]
                                        ],
                                        [
                                            'ru' => ['name' => "Зубные щетки и насадки"],
                                            'en' => ['name' => "Toothbrushes and nozzles"],
                                            'uk' => ['name' => "Зубні щітки та насадки"]
                                        ],
                                        [
                                            'ru' => ['name' => "Весы напольные"],
                                            'en' => ['name' => "Floor scales"],
                                            'uk' => ['name' => "Ваги підлогові"]
                                        ],
                                        [
                                            'ru' => ['name' => "Массажеры"],
                                            'en' => ['name' => "Massagers"],
                                            'uk' => ['name' => "Масажери"]
                                        ],
                                        [
                                            'ru' => ['name' => "Электроодеяла"],
                                            'en' => ['name' => "Electric blankets"],
                                            'uk' => ['name' => "Електроковдри"]
                                        ],
                                        [
                                            'ru' => ['name' => "Термобигуди"],
                                            'en' => ['name' => "Termo curlers"],
                                            'uk' => ['name' => "Термо бігуді"]
                                        ],
                                        [
                                            'ru' => ['name' => "Стерилизатор"],
                                            'en' => ['name' => "Sterilizer"],
                                            'uk' => ['name' => "Стерилізатор"]
                                        ],
                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Аксессуары для бытовой технике"],
                                    'en' => ['name' => "Accessories for household appliances"],
                                    'uk' => ['name' => "Аксесуари для побутової техніки"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Аксессуары для холодильников"],
                                            'en' => ['name' => "Refrigerator Accessories"],
                                            'uk' => ['name' => "Аксесуари для холодильників"]
                                        ],
                                        [
                                            'ru' => ['name' => "Аксессуары к климатической технике"],
                                            'en' => ['name' => "Accessories for HVAC equipment"],
                                            'uk' => ['name' => "Аксесуари до кліматичній техніці"]
                                        ],
                                        [
                                            'ru' => ['name' => "Аксессуары для стиральных машин"],
                                            'en' => ['name' => "Accessories for washing machines"],
                                            'uk' => ['name' => "Аксесуари для пральних машин"]
                                        ],
                                        [
                                            'ru' => ['name' => "Бытовая химия"],
                                            'en' => ['name' => "Household chemicals"],
                                            'uk' => ['name' => "Побутова хімія"]
                                        ],
                                        [
                                            'ru' => ['name' => "Аксессуары к бойлерам"],
                                            'en' => ['name' => "Boiler Accessories"],
                                            'uk' => ['name' => "Аксесуари до бойлерів"]
                                        ],
                                        [
                                            'ru' => ['name' => "Аксессуары к микроволновой печи"],
                                            'en' => ['name' => "Microwave Accessories"],
                                            'uk' => ['name' => "Аксесуари до мікрохвильової печі"]
                                        ],
                                        [
                                            'ru' => ['name' => "Аксессуары для вытяжки"],
                                            'en' => ['name' => "Hood Accessories"],
                                            'uk' => ['name' => "Аксесуари для витяжки"]
                                        ],
                                        [
                                            'ru' => ['name' => "Кухонные аксессуары"],
                                            'en' => ['name' => "Kitchen accessories"],
                                            'uk' => ['name' => "Кухонні аксесуари"]
                                        ],

                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Фильтры для воды"],
                                    'en' => ['name' => "Water filters"],
                                    'uk' => ['name' => "Фільтри для води"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Системы обратного осмоса"],
                                            'en' => ['name' => "Reverse osmosis systems"],
                                            'uk' => ['name' => "Системи зворотного осмосу"]
                                        ],
                                        [
                                            'ru' => ['name' => "Проточные фильтры"],
                                            'en' => ['name' => "Flow filters"],
                                            'uk' => ['name' => "Проточні фільтри"]
                                        ],
                                        [
                                            'ru' => ['name' => "Катриджи для фильтров"],
                                            'en' => ['name' => "Filter cartridges"],
                                            'uk' => ['name' => "Катриджи для фільтрів"]
                                        ],
                                    ]
                                ],
                            ]
                        ],
                        [
                            'ru' => ['name' => "Гаджеты",],
                            'en' => ['name' => "Gadgets",],
                            'uk' => ['name' => "Гаджети",],
                            'image' => 'gadgets_small.svg',
                            'child' => [
                                [
                                    'ru' => ['name' => "Смарт-часы"],
                                    'en' => ['name' => "Smart watch"],
                                    'uk' => ['name' => "Смарт-годинник"]
                                ],
                                [
                                    'ru' => ['name' => "Фитнес-браслеты"],
                                    'en' => ['name' => "Fitness bracelets"],
                                    'uk' => ['name' => "Фітнес-браслети"],
                                ],
                                [
                                    'ru' => ['name' => "Квадрокоптеры, роботы и конструкторы"],
                                    'en' => ['name' => "Quadrocopters, robots and designers"],
                                    'uk' => ['name' => "Квадрокоптера, роботи і конструктори"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Квадрокоптеры"],
                                            'en' => ['name' => "Quadcopters"],
                                            'uk' => ['name' => "Квадрокоптера"],
                                        ],
                                        [
                                            'ru' => ['name' => "Роботы"],
                                            'en' => ['name' => "Robots"],
                                            'uk' => ['name' => "Роботи"],
                                        ],
                                        [
                                            'ru' => ['name' => "Программированные конструкторы"],
                                            'en' => ['name' => "Programmed Constructors"],
                                            'uk' => ['name' => "Програмовані конструктори"],
                                        ]

                                    ]
                                ],
                                [
                                    'ru' => ['name' => "3D–ручки, принтеры и сканеры"],
                                    'en' => ['name' => "3D pens, printers and scanners"],
                                    'uk' => ['name' => "3D-ручки, принтери і сканери"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "3D-ручки"],
                                            'en' => ['name' => "3D pens"],
                                            'uk' => ['name' => "3D-ручки"],
                                        ],
                                        [
                                            'ru' => ['name' => "3D-принтеры"],
                                            'en' => ['name' => "3D printers"],
                                            'uk' => ['name' => "3D-принтери"],
                                        ],
                                        [
                                            'ru' => ['name' => "3D-сканеры"],
                                            'en' => ['name' => "3D scanners"],
                                            'uk' => ['name' => "3D-сканери"],
                                        ],
                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Игровая зона"],
                                    'en' => ['name' => "Game Zone"],
                                    'uk' => ['name' => "Ігрова зона"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Игровые приставки"],
                                            'en' => ['name' => "Gaming consoles"],
                                            'uk' => ['name' => "Ігрові приставки"],
                                        ],
                                        [
                                            'ru' => ['name' => "Очки виртуальной реальности"],
                                            'en' => ['name' => "Virtual reality glasses"],
                                            'uk' => ['name' => "Окуляри віртуальної реальності"],
                                        ],
                                        [
                                            'ru' => ['name' => "Геймпады и контроллеры"],
                                            'en' => ['name' => "Gamepads and controllers"],
                                            'uk' => ['name' => "Геймпади і контролери"],
                                        ],
                                        [
                                            'ru' => ['name' => "Гарнитуры для приставок"],
                                            'en' => ['name' => "Headsets for consoles"],
                                            'uk' => ['name' => "Гарнітури для приставок"],
                                        ],
                                        [
                                            'ru' => ['name' => "Аксессуары для игровых приставок"],
                                            'en' => ['name' => "Accessories for game consoles"],
                                            'uk' => ['name' => "Аксесуари для ігрових приставок"],
                                        ],
                                        [
                                            'ru' => ['name' => "Игры для приставок"],
                                            'en' => ['name' => "Games for consoles"],
                                            'uk' => ['name' => "Ігри для приставок"],
                                        ],

                                    ]
                                ],
                                [
                                    'ru' => ['name' => "Аксессуары для гаджетов"],
                                    'en' => ['name' => "Gadget Accessories"],
                                    'uk' => ['name' => "Аксесуари для гаджетів"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Ремешки для смарт-часов"],
                                            'en' => ['name' => "Smart Watch Straps"],
                                            'uk' => ['name' => "Ремінці для смарт-годин"],
                                        ],
                                        [
                                            'ru' => ['name' => "Ремешки для фитнес-браслетов"],
                                            'en' => ['name' => "Straps for fitness bracelets"],
                                            'uk' => ['name' => "Ремінці для фітнес-браслетів"],
                                        ],
                                        [
                                            'ru' => ['name' => "З/устройство для смарт-часов и фитнес-браслетов"],
                                            'en' => ['name' => "Z / device for smart watches and fitness bracelets"],
                                            'uk' => ['name' => "З / пристрій для смарт-годин і фітнес-браслетів"],
                                        ],
                                        [
                                            'ru' => ['name' => "Аксессуары для квадрокоптеров"],
                                            'en' => ['name' => "Accessories for quadrocopters"],
                                            'uk' => ['name' => "Аксесуари для квадрокоптера"],
                                        ],
                                        [
                                            'ru' => ['name' => "Комплектующие для роботов"],
                                            'en' => ['name' => "Accessories for robots"],
                                            'uk' => ['name' => "Комплектуючі для роботів"],
                                        ],
                                        [
                                            'ru' => ['name' => "Расходные материалы к 3D-принтерам и ручкам"],
                                            'en' => ['name' => "Supplies for 3D printers and pens"],
                                            'uk' => ['name' => "Витратні матеріали до 3D-принтерів і ручкам"],
                                        ]
                                    ]
                                ],
                            ]
                        ],
                        [
                            'ru' => ['name' => "Товары для умного дома",],
                            'en' => ['name' => "Smart Home Products",],
                            'uk' => ['name' => "Товари для розумного будинку",],
                            'image' => 'smart_house_small.svg',
                            'child' => [
                                [
                                    'ru' => ['name' => "Умные лампы"],
                                    'en' => ['name' => "Smart lamps"],
                                    'uk' => ['name' => "Розумні лампи"],
                                ],
                                [
                                    'ru' => ['name' => "Умные розетки"],
                                    'en' => ['name' => "Smart sockets"],
                                    'uk' => ['name' => "Розумні розетки"],
                                ],
                                [
                                    'ru' => ['name' => "Умные цветочные горшки"],
                                    'en' => ['name' => "Smart flower pots"],
                                    'uk' => ['name' => "Розумні квіткові горщики"],
                                ],
                                [
                                    'ru' => ['name' => "Умные сирены и сигнализации"],
                                    'en' => ['name' => "Smart sirens and alarms"],
                                    'uk' => ['name' => "Розумні сирени і сигналізації"],
                                ],
                                [
                                    'ru' => ['name' => "Датчики безопасности"],
                                    'en' => ['name' => "Safety sensors"],
                                    'uk' => ['name' => "Датчики безпеки"],
                                ],
                                [
                                    'ru' => ['name' => "Станции управления приборами"],
                                    'en' => ['name' => "Instrument Control Stations"],
                                    'uk' => ['name' => "Станції управління приладами"],
                                ],
                                [
                                    'ru' => ['name' => "Датчики температуры и влажности"],
                                    'en' => ['name' => "Temperature and humidity sensors"],
                                    'uk' => ['name' => "Датчики температури і вологості"],
                                ],
                                [
                                    'ru' => ['name' => "Роботы-пылесосы"],
                                    'en' => ['name' => "Vacuum cleaning robots"],
                                    'uk' => ['name' => "Роботи-пилососи"],
                                ],
                                [
                                    'ru' => ['name' => "Видеокамеры"],
                                    'en' => ['name' => "Camcorders"],
                                    'uk' => ['name' => "Відеокамери"],
                                ],
                                [
                                    'ru' => ['name' => "Аксессуары для товаров умного дома"],
                                    'en' => ['name' => "Smart Home Accessories"],
                                    'uk' => ['name' => "Аксесуари для товарів розумного будинку"],
                                ],
                            ]
                        ],
                        [
                            'ru' => ['name' => "Электротранспорт",],
                            'en' => ['name' => "Electric transport",],
                            'uk' => ['name' => "Eлектро транспорт",],
                            'image' => 'giro_small.svg',
                            'child' => [
                                [
                                    'ru' => ['name' => "Электроролики"],
                                    'en' => ['name' => "Electric rollers"],
                                    'uk' => ['name' => "Електроролікі"],
                                ],
                                [
                                    'ru' => ['name' => "Электросамокаты"],
                                    'en' => ['name' => "Electric scooters"],
                                    'uk' => ['name' => "Електросамокати"],
                                ],
                                [
                                    'ru' => ['name' => "Гироборды"],
                                    'en' => ['name' => "Gyroboards"],
                                    'uk' => ['name' => "Гіроборди"],
                                ],
                                [
                                    'ru' => ['name' => "Гироскутеры"],
                                    'en' => ['name' => "Gyro scooters"],
                                    'uk' => ['name' => "Гіроскутери"],
                                ],
                                [
                                    'ru' => ['name' => "Моноколеса"],
                                    'en' => ['name' => "Mono wheels"],
                                    'uk' => ['name' => "Моноколеса"],
                                ],
                                [
                                    'ru' => ['name' => "Электроскейты"],
                                    'en' => ['name' => "Electro skates"],
                                    'uk' => ['name' => "Електроскейт"],
                                ],
                                [
                                    'ru' => ['name' => "Электровелосипеды"],
                                    'en' => ['name' => "Electric bicycles"],
                                    'uk' => ['name' => "Електровелосипеди"],
                                ],
                                [
                                    'ru' => ['name' => "Электроскутеры"],
                                    'en' => ['name' => "Electric scooters"],
                                    'uk' => ['name' => "Електроскутери"],
                                ],
                                [
                                    'ru' => ['name' => "Аксессуары к электротранспорт"],
                                    'en' => ['name' => "Accessories for electric vehicles"],
                                    'uk' => ['name' => "Аксесуари до електротранспорту"],
                                ],
                            ]
                        ],
                        [
                            'ru' => ['name' => "Аудио",],
                            'en' => ['name' => "Audio",],
                            'uk' => ['name' => "Аудіо",],
                            'image' => 'headphones_small.svg',
                            'child' => [
                                [
                                    'ru' => ['name' => "Музыкальные центры"],
                                    'en' => ['name' => "Musical centers"],
                                    'uk' => ['name' => "Музичні центри"],
                                ],
                                [
                                    'ru' => ['name' => "Домашние кинотеатры"],
                                    'en' => ['name' => "Home theaters"],
                                    'uk' => ['name' => "Домашні кінотеатри"],
                                ],
                                [
                                    'ru' => ['name' => "Портативная акустика"],
                                    'en' => ['name' => "Portable acoustics"],
                                    'uk' => ['name' => "Портативна акустика"],
                                ],
                                [
                                    'ru' => ['name' => "Медиаплееры"],
                                    'en' => ['name' => "Media players"],
                                    'uk' => ['name' => "Медіаплеєри"],
                                ],
                                [
                                    'ru' => ['name' => "MP3-плееры"],
                                    'en' => ['name' => "MP3 players"],
                                    'uk' => ['name' => "MP3-плеєри"],
                                ],
                                [
                                    'ru' => ['name' => "Док-станции"],
                                    'en' => ['name' => "Docking stations"],
                                    'uk' => ['name' => "Док-станції"],
                                ],
                                [
                                    'ru' => ['name' => "Наушники"],
                                    'en' => ['name' => "Headphones"],
                                    'uk' => ['name' => "Навушники"],
                                ],
                                [
                                    'ru' => ['name' => "Диктофоны"],
                                    'en' => ['name' => "Voice recorders"],
                                    'uk' => ['name' => "Диктофони"],
                                ],
                                [
                                    'ru' => ['name' => "Микрофоны"],
                                    'en' => ['name' => "Microphones"],
                                    'uk' => ['name' => "Mікрофони"],
                                ],
                                [
                                    'ru' => ['name' => "Мультимедийный стол"],
                                    'en' => ['name' => "Multimedia table"],
                                    'uk' => ['name' => "Мультимедійний стіл"],
                                ],
                            ]
                        ],
                        [
                            'ru' => ['name' => "Инструменты и расходники",],
                            'en' => ['name' => "Tools and consumables",],
                            'uk' => ['name' => "Інструменти і витратні матеріали"],
                            'image' => 'tools_small.svg',
                            'child' => [
                                [
                                    'ru' => ['name' => "Электроинструменты"],
                                    'en' => ['name' => "Power tools"],
                                    'uk' => ['name' => "Електроінструменти"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Шуруповерты"],
                                            'en' => ['name' => "Screwdrivers"],
                                            'uk' => ['name' => "Шуруповерти"]
                                        ], [
                                            'ru' => ['name' => "Дрели"],
                                            'en' => ['name' => "Drills"],
                                            'uk' => ['name' => "Дрилі"]
                                        ], [
                                            'ru' => ['name' => "Болгарки"],
                                            'en' => ['name' => "Grinders"],
                                            'uk' => ['name' => "Болгарки"]
                                        ], [
                                            'ru' => ['name' => "Штроборезы"],
                                            'en' => ['name' => "Stroboreza"],
                                            'uk' => ['name' => "Штроборізи"]
                                        ], [
                                            'ru' => ['name' => "Перфораторы"],
                                            'en' => ['name' => "Rotary hammers"],
                                            'uk' => ['name' => "Перфоратори"]
                                        ], [
                                            'ru' => ['name' => "Шлифовальные машины"],
                                            'en' => ['name' => "Grinders"],
                                            'uk' => ['name' => "Шліфувальні машини"]
                                        ], [
                                            'ru' => ['name' => "Многофункциональный инструмент"],
                                            'en' => ['name' => "Multi tool"],
                                            'uk' => ['name' => "Багатофункціональний інструмент"]
                                        ], [
                                            'ru' => ['name' => "Сабельные пилы"],
                                            'en' => ['name' => "Reciprocating Saws"],
                                            'uk' => ['name' => "Шабельні пили"]
                                        ], [
                                            'ru' => ['name' => "Торцовочные пилы"],
                                            'en' => ['name' => "Miter Saws"],
                                            'uk' => ['name' => "Торцювальні пили"]
                                        ], [
                                            'ru' => ['name' => "Дисковые пилы"],
                                            'en' => ['name' => "Circular Saws"],
                                            'uk' => ['name' => "Дискові пили"]
                                        ], [
                                            'ru' => ['name' => "Строительные фены"],
                                            'en' => ['name' => "Building hair dryers"],
                                            'uk' => ['name' => "Будівельні фени"]
                                        ], [
                                            'ru' => ['name' => "Электролобзики"],
                                            'en' => ['name' => "Jigsaws"],
                                            'uk' => ['name' => "Електролобзики"]
                                        ], [
                                            'ru' => ['name' => "Электрорубанки"],
                                            'en' => ['name' => "Electric planers"],
                                            'uk' => ['name' => "Електрорубанки"]
                                        ], [
                                            'ru' => ['name' => "Краскопульты"],
                                            'en' => ['name' => "Spray guns"],
                                            'uk' => ['name' => "Фарбопульти"]
                                        ], [
                                            'ru' => ['name' => "Лобзики"],
                                            'en' => ['name' => "Jigsaws"],
                                            'uk' => ['name' => "Лобзики"]
                                        ], [
                                            'ru' => ['name' => "Отбойные молотки"],
                                            'en' => ['name' => "Jackhammers"],
                                            'uk' => ['name' => "Відбійні молотки"]
                                        ], [
                                            'ru' => ['name' => "Строительные миксеры"],
                                            'en' => ['name' => "Construction mixers"],
                                            'uk' => ['name' => "Будівельні міксери"]
                                        ], [
                                            'ru' => ['name' => "Фрезеры"],
                                            'en' => ['name' => "Milling cutters"],
                                            'uk' => ['name' => "Фрезер"]
                                        ], [
                                            'ru' => ['name' => "Паяльник для пластиковых труб"],
                                            'en' => ['name' => "Soldering iron for plastic pipes"],
                                            'uk' => ['name' => "Паяльник для пластикових труб"]
                                        ], [
                                            'ru' => ['name' => "Измерительные приборы"],
                                            'en' => ['name' => "Measuring instruments"],
                                            'uk' => ['name' => "Вимірювальні прилади"]
                                        ], [
                                            'ru' => ['name' => "Степлеры (скобозабиватели, гвоздезабиватели)"],
                                            'en' => ['name' => "Staplers (staplers, nailers)"],
                                            'uk' => ['name' => "Степлери (Скобозабивачі, гвоздезабівателі)"]
                                        ], [
                                            'ru' => ['name' => "Аккумуляторы и зарядные устройства для инструмента"],
                                            'en' => ['name' => "Batteries and Chargers for Tools"],
                                            'uk' => ['name' => "Акумулятори та зарядні пристрої для інструменту"]
                                        ], [
                                            'ru' => ['name' => "Клеевые пистолеты"],
                                            'en' => ['name' => "Glue guns"],
                                            'uk' => ['name' => "Клейові пістолети"]
                                        ], [
                                            'ru' => ['name' => "Станки для заточки"],
                                            'en' => ['name' => "Sharpening machines"],
                                            'uk' => ['name' => "Верстати для заточування"]

                                        ],
                                    ],
                                ],
                                [
                                    'ru' => ['name' => "Ручной инструмент"],
                                    'en' => ['name' => "Hand tool"],
                                    'uk' => ['name' => "Ручний інструмент"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Ключи"],
                                            'en' => ['name' => "The keys"],
                                            'uk' => ['name' => "Ключі"]
                                        ], [
                                            'ru' => ['name' => "Молотки"],
                                            'en' => ['name' => "Hammers"],
                                            'uk' => ['name' => "Молотки"]
                                        ], [
                                            'ru' => ['name' => "Мультитулы"],
                                            'en' => ['name' => "Multitools"],
                                            'uk' => ['name' => "Мультитули"]
                                        ], [
                                            'ru' => ['name' => "Напильники"],
                                            'en' => ['name' => "Files"],
                                            'uk' => ['name' => "Напилки"]
                                        ], [
                                            'ru' => ['name' => "Ножи строительные"],
                                            'en' => ['name' => "Building Knives"],
                                            'uk' => ['name' => "Ножі будівельні"]
                                        ], [
                                            'ru' => ['name' => "Ножницы по металлу"],
                                            'en' => ['name' => "Scissors for metal"],
                                            'uk' => ['name' => "Ножиці по металу"]
                                        ], [
                                            'ru' => ['name' => "Наборы инструментов"],
                                            'en' => ['name' => "Tool kits"],
                                            'uk' => ['name' => "Набори інструментів"]
                                        ], [
                                            'ru' => ['name' => "Отвертки"],
                                            'en' => ['name' => "Screwdrivers"],
                                            'uk' => ['name' => "Викрутки"]
                                        ], [
                                            'ru' => ['name' => "Плоскогубцы"],
                                            'en' => ['name' => "Pliers"],
                                            'uk' => ['name' => "Плоскогубці"]
                                        ], [
                                            'ru' => ['name' => "Уровни"],
                                            'en' => ['name' => "Staplers"],
                                            'uk' => ['name' => "Рівні"]
                                        ], [
                                            'ru' => ['name' => "Степлеры"],
                                            'en' => ['name' => "Staplers"],
                                            'uk' => ['name' => "Степлери"]
                                        ], [
                                            'ru' => ['name' => "Тиски и струбцины"],
                                            'en' => ['name' => "Vise and clamp"],
                                            'uk' => ['name' => "Лещата і струбцини"]
                                        ], [
                                            'ru' => ['name' => "Рулетки"],
                                            'en' => ['name' => "Roulettes"],
                                            'uk' => ['name' => "Рулетки"]
                                        ], [
                                            'ru' => ['name' => "Рубанки"],
                                            'en' => ['name' => "Planers"],
                                            'uk' => ['name' => "Рубанки"]
                                        ], [
                                            'ru' => ['name' => "Ручные пилы"],
                                            'en' => ['name' => "Hand saws"],
                                            'uk' => ['name' => "Ручні пилки"]
                                        ], [
                                            'ru' => ['name' => "Столярные стамески"],
                                            'en' => ['name' => "Joiner Chisels"],
                                            'uk' => ['name' => "Столярні стамески"]

                                        ]
                                    ],
                                ],
                                [
                                    'ru' => ['name' => "Расходные материалы"],
                                    'en' => ['name' => "Expendable materials"],
                                    'uk' => ['name' => "Витратні матеріали"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Биты"],
                                            'en' => ['name' => "Bits"],
                                            'uk' => ['name' => "Біти"]
                                        ], [
                                            'ru' => ['name' => "Заклепки"],
                                            'en' => ['name' => "Rivets"],
                                            'uk' => ['name' => "Заклепки"]
                                        ], [
                                            'ru' => ['name' => "Клеевые стержни"],
                                            'en' => ['name' => "Glue sticks"],
                                            'uk' => ['name' => "Клейові стрижні"]
                                        ], [
                                            'ru' => ['name' => "Лезвия"],
                                            'en' => ['name' => "Blades"],
                                            'uk' => ['name' => "Леза"]
                                        ], [
                                            'ru' => ['name' => "Сверла и буры"],
                                            'en' => ['name' => "Drills and drills"],
                                            'uk' => ['name' => "Свердла і бури"]
                                        ], [
                                            'ru' => ['name' => "Ящики для инструментов"],
                                            'en' => ['name' => "Tool boxes"],
                                            'uk' => ['name' => "Ящики для інструментів"]
                                        ], [
                                            'ru' => ['name' => "Скобы"],
                                            'en' => ['name' => "Staples"],
                                            'uk' => ['name' => "Скоби"]
                                        ], [
                                            'ru' => ['name' => "Меловой порошок"],
                                            'en' => ['name' => "Chalk powder"],
                                            'uk' => ['name' => "Крейдяний порошок"]
                                        ], [
                                            'ru' => ['name' => "Насадки для реноваторов"],
                                            'en' => ['name' => "Nozzles for renovators"],
                                            'uk' => ['name' => "Насадки для РЕНОВАТОР"]
                                        ], [
                                            'ru' => ['name' => "Полотна для пил и лобзиков"],
                                            'en' => ['name' => "Saw and jigsaw blades"],
                                            'uk' => ['name' => "Полотна для пив і лобзиків"]
                                        ], [
                                            'ru' => ['name' => "Диски алмазные, шлифовальные, отрезные"],
                                            'en' => ['name' => "Diamond, grinding, cutting wheels"],
                                            'uk' => ['name' => "Диски алмазні, шліфувальні, відрізні"]
                                        ], [
                                            'ru' => ['name' => "Шлифовальные расходные материалы"],
                                            'en' => ['name' => "Grinding Supplies"],
                                            'uk' => ['name' => "Шліфувальні витратні матеріали"]

                                        ]
                                    ],
                                ],
                                [
                                    'ru' => ['name' => "Садовые техника"],
                                    'en' => ['name' => "Gardening equipment"],
                                    'uk' => ['name' => "Садові техніка"],
                                    'child' => [
                                        [
                                            'ru' => ['name' => "Аэраторы"],
                                            'en' => ['name' => "Aerators"],
                                            'uk' => ['name' => "Фератори"]
                                        ], [
                                            'ru' => ['name' => "Газонокосилки"],
                                            'en' => ['name' => "Lawn mowers"],
                                            'uk' => ['name' => "Газонокосарки"]
                                        ], [
                                            'ru' => ['name' => "Кусторезы"],
                                            'en' => ['name' => "Brush cutters"],
                                            'uk' => ['name' => "Кущорізи"]
                                        ], [
                                            'ru' => ['name' => "Газонокосилки"],
                                            'en' => ['name' => "Lawn mowers"],
                                            'uk' => ['name' => "Газонокосарки"]
                                        ], [
                                            'ru' => ['name' => "Садовые пылесосы"],
                                            'en' => ['name' => "Garden vacuum cleaners"],
                                            'uk' => ['name' => "Садові пилососи"]
                                        ], [
                                            'ru' => ['name' => "Опрыскиватели ручные"],
                                            'en' => ['name' => "Hand Sprayers"],
                                            'uk' => ['name' => "Обприскувачі ручні"]
                                        ], [
                                            'ru' => ['name' => "Кусторезы"],
                                            'en' => ['name' => "Brush cutters"],
                                            'uk' => ['name' => "Кущорізи"]
                                        ], [
                                            'ru' => ['name' => "Культиваторы"],
                                            'en' => ['name' => "Cultivators"],
                                            'uk' => ['name' => "Культиватори"]
                                        ], [
                                            'ru' => ['name' => "Снегоуборочные машины"],
                                            'en' => ['name' => "Snow machines"],
                                            'uk' => ['name' => "Снігоприбиральні машини"]
                                        ], [
                                            'ru' => ['name' => "Высоторез"],
                                            'en' => ['name' => "Height cutter"],
                                            'uk' => ['name' => "Висоторіз"]
                                        ], [
                                            'ru' => ['name' => "Мотокосы"],
                                            'en' => ['name' => "Motokosa"],
                                            'uk' => ['name' => "Мотокоси"]
                                        ], [
                                            'ru' => ['name' => "Мотоблоки"],
                                            'en' => ['name' => "Motoblocks"],
                                            'uk' => ['name' => "Мотоблоки"]
                                        ], [
                                            'ru' => ['name' => "Электрокосы"],
                                            'en' => ['name' => "Electric braids"],
                                            'uk' => ['name' => "Електрокоси"]
                                        ]
                                    ],
                                ],
                            ]
                        ],
                        [
                            'ru' => ['name' => "Игрушки",],
                            'en' => ['name' => "іграшки",],
                            'uk' => ['name' => "Toys",],
                            'image' => 'toys_small.svg',
                            'child' => [
                                [
                                    'ru' => ['name' => "Детские конструкторы"],
                                    'en' => ['name' => "Children`s designers"],
                                    'uk' => ['name' => "Дитячі конструктори"],
                                ],
                                [
                                    'ru' => ['name' => "Интерактивные игрушки"],
                                    'en' => ['name' => "Interactive toys"],
                                    'uk' => ['name' => "Інтерактивні іграшки"],
                                ],
                                [
                                    'ru' => ['name' => "Настольные игры"],
                                    'en' => ['name' => "Table games"],
                                    'uk' => ['name' => "Настільні ігри"],
                                ],
                                [
                                    'ru' => ['name' => "Творчество"],
                                    'en' => ['name' => "Creation"],
                                    'uk' => ['name' => "Творчість"],
                                ],
                                [
                                    'ru' => ['name' => "Игровые наборы"],
                                    'en' => ['name' => "Game sets"],
                                    'uk' => ['name' => "Ігрові набори"],
                                ],
                                [
                                    'ru' => ['name' => "Радиоуправляемые игрушки"],
                                    'en' => ['name' => "Radio-controlled toys"],
                                    'uk' => ['name' => "Радіокеровані іграшки"],
                                ],
                                [
                                    'ru' => ['name' => "Куклы"],
                                    'en' => ['name' => "Dolls"],
                                    'uk' => ['name' => "Ляльки"],
                                ],
                                [
                                    'ru' => ['name' => "Игрушки для малышей"],
                                    'en' => ['name' => "Toys for babies"],
                                    'uk' => ['name' => "Іграшки для малюків"],
                                ],
                                [
                                    'ru' => ['name' => "Мягкие игрушки"],
                                    'en' => ['name' => "Stuffed Toys"],
                                    'uk' => ['name' => "М'які іграшки"],
                                ],
                                [
                                    'ru' => ['name' => "Игрушечные машинки и техника"],
                                    'en' => ['name' => "Toy cars and equipment"],
                                    'uk' => ['name' => "Іграшкові машинки і техніка"],
                                ],
                                [
                                    'ru' => ['name' => "Игрушечное оружие"],
                                    'en' => ['name' => "Toy weapon"],
                                    'uk' => ['name' => "Іграшкова зброя"],
                                ],
                                [
                                    'ru' => ['name' => "Радионяни"],
                                    'en' => ['name' => "Baby monitors"],
                                    'uk' => ['name' => "Няньки"],
                                ],
                            ]
                        ],
                    ]
                ],
            ];

        $i = 1;
        foreach ($pagesCategory as $page) {

            $data = [
                "name" =>  $page['uk']['name'],
                "alias" => Str::slug($page['uk']['name']),
                "parent_id" => 0,
                'image'=>null,
                "fa-icon" => null,
                "order" => $i++
            ];
            $parent1 = Category::create($data);

            if (isset($page['child'])){
                $j=1;
                foreach ($page['child'] as $child) {
                    $data = [
                        "name" =>  $child['uk']['name'],
                        "alias" => Str::slug($child['uk']['name']),
                        "parent_id" => $parent1->id,
                        'image'=>null,
                        "fa-icon" => null,
                        "order" => $j++
                    ];
                    $parent2 = Category::create($data);
                    if (isset($child['child'])){
                        $j=1;
                        foreach ($child['child'] as $child2) {
                            $n=1;
                            $data = [
                                "name" =>  $child2['uk']['name'],
                                "alias" => Str::slug($child2['uk']['name']),
                                "parent_id" => $parent2->id,
                                'image'=>null,
                                "fa-icon" => null,
                                "order" => $n++
                            ];
                            Category::create($data);
                        }
                    }
                }
            }
        }
    }
}
