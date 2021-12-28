<?php

namespace Database\Seeders;

use App\Models\Pages;
use Illuminate\Database\Seeder;

class StaticPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                "title" => 'АВТО- И ВЕЛОВЛАДЕЛЬЦАМ',
                "slug" => 'parking-level',
                'content' => ['description' => '<p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"><b>На автомобиле за покупками</b> – что может быть лучше!</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"><b>Для Вас предусмотрено:</b></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">· крытая парковка на 90 мест (на 0 уровне ТЦ)</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">· информационное табло о количестве свободных мест</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"><b>Прайс внутренней парковки:</b></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Для посетителей по тарифу разовой <b>«Паркинг-карты»</b> составляет:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- первые 3 часа – 30 (тридцать) рублей (если посетитель пользуется парковкой менее предоставляемого времени, оплата уменьшению и возврату не подлежит);</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- 4-й и каждый последующий час – по 60 (шестьдесят) рублей (если посетитель пользуется парковкой менее предоставляемого времени, оплата уменьшению и возврату не подлежит);</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Для посетителей по тарифу <b>«Абонентской Паркинг-карты»</b> составляет:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- 1 месяц аренды одного машина-места – 4500 (четыре тысячи пятьсот) рублей (если посетитель пользуется парковкой менее предоставляемого времени, оплата уменьшению и возврату не подлежит).</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"><b>Режим работы парковок</b></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Парковка работает ежедневно без выходных и праздничных дней, без перерывов на обед.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Въезд с <b>9:00 до 21:30</b></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Выезд с <b>9:00 до 22:00</b></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">По истечении рабочего времени Парковок автовладельцы обязаны освободить территории Парковок от своего автотранспорта.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Просим учитывать, что Администрация ТЦ и Сотрудники службы охраны, <b>лишены технической возможности выдачи автомобилей</b> (Тех/условия ОВО УМВД по г. Иваново), оставленных на внутренней Парковке <b>после завершения ее работы - после 22:00</b>.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Вы сможете забрать свой автомобиль с внутренней парковки ТЦ <b>только на следующий день с 9:00</b>.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Оплата парковки производится в паркоматах, расположенных при выходе из торгового центра на парковку. А велосипедистов около каждого входа в торговый центр ждет велопарковка, где можно оставить свой двухколесный транспорт.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">ВСЕ ПРЕТЕНЗИИ И ПОЖЕЛАНИЯ ПО РАБОТЕ ПАРКОВКИ МОЖНО НАПРАВЛЯТЬ НА nikolskiy.adm@yandex.ru</p>']
            ],
            [
                "title" => 'ПРАВИЛА ПОЛЬЗОВАНИЯ ПАРКОВКОЙ',
                "slug" => 'parking-rules',
                'content' => ['description' => '<p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Уважаемые посетители торгового центра "Никольский"!</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Просим внимательно ознакомиться с правилами пользования парковками!</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">1. ТЕРМИНЫ</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">1.1. Настоящие правила (далее по тексту – "Правила") устанавливают порядок пользования внутренней парковкой Торгового центра "Никольский" (г. Иваново, прт. Ленина, д.57А, далее по тексту – "ТЦ"), посетителями, приезжающими в ТЦ на автотранспортных средствах, а также общие требования к безопасности на территории парковок, стоимость услуг паркинга и ответственность за нарушение настоящих Правил.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">1.2. Для целей настоящих Правил используются следующие основные термины:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">1.2.1. "Парковка" – места для временного размещения автотранспортных средств, расположенные в здании ТЦ "Никольский" (0 уровень – внутренняя парковка).</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">1.2.2. "Паркомат" - специальное оборудование, расположенное на въезде на парковку и предназначенное для выдачи паркинг-карт.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">1.2.3. "PARKING-КАРТА" – пластиковая карта, разрешающая въезд, выезд и временное размещение автотранспортного средства на Парковку, используемая для учета времени нахождения на Парковке автотранспортного средства.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">1.2.4. "PARKING-АБОНЕМЕНТ" – пластиковая карта с предоплаченным тарифом, разрешающая въезд, выезд и временное размещение автотранспортного средства на Парковке в определенной зоне парковок.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">1.2.5. "Терминал оплаты парковки" - специальный платежный терминал для оплаты услуг паркинга.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">1.2.6. "Автовладелец" – лицо, владеющее (управляющее) автотранспортным средством, на праве собственности или ином праве.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">1.2.7. "Администрация" - представители и работники ИП Яковлева Л.В., уполномоченные осуществлять оперативное управление Парковкой.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">1.2.8. "Сотрудники службы охраны" - представители охранных предприятий, осуществляющих защиту охраняемого объекта от противоправных посягательств, в рамках комплекса мероприятий, направленных на обеспечение общественного порядка.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">2. ОСНОВНЫЕ ПОЛОЖЕНИЯ</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">2.1. Будьте взаимовежливы! Проявляйте уважение к другим посетителям Торгового центра, водителям и пешеходам.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">2.2. Соблюдайте обозначенный скоростной режим (не более 5 км/ч), требования разметки, знаков и указателей, Правил дорожного движения.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">2.3. Въезд на территорию парковки и выезд с нее производится с помощью специальных паркинг-карт.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">2.4. Парковка автомобиля разрешена только на специально обозначенных разметкой парковочных местах (окрашены в белый цвет).</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">2.5. В целях безопасности посетителей, а также, во избежание повреждения имущества посетителей, Торгового центра Никольский, ИП Яковлевой Л.В., ИП Яковлевой М.Н., третьих лиц по причине специальных строительных характеристик территории Парковки и технических особенностей и возможностей оборудования,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">ЗАПРЕЩЕН ВЪЕЗД на территорию внутренней Парковки следующим транспортным средствам:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- в аварийном состоянии, со значительными видимыми кузовными повреждениями, на буксире, а также при наличии явных технических неисправностей, исключающих нормальное движение транспортного средства;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- мототранспортным средствам (мопедам, мотоциклам, скутерам и т.п.);</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- велосипедам (парковка рекомендуется на специальных бесплатных велосипедных парковках, расположенных перед входными группами ТЦ "Никольский");</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- максимальная разрешённая масса которых превышает 3,5 тонны, длиной борта более 5 метров и/или имеющих более восьми сидячих мест, помимо сиденья водителя;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- с прицепами, составам транспортных средств.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Дополнительные ограничения для въезда на внутреннюю парковку транспортным средствам:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- максимальные габариты которых превышают 1,9 метра по высоте;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- имеющим газовое оборудование, в чрезмерно загрязненном и/или в заснеженном состоянии.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">2.6. НА ТЕРРИТОРИИ ПАРКОВОК ЗАПРЕЩАЕТСЯ:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- создавать препятствия движению транспорта на проездных путях и пешеходных участках, в том числе: главные проезды, участки выезда, въезда, места под шлагбаумом парковать и/или останавливать автотранспорт, а также разгружать/загружать тележки;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- парковать транспортное средство занимая сразу два/три парковочных места (если габариты автомобиля позволяют парковку в рамках одного парковочного места);</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- производить заправку транспортных средств из различных емкостей, ремонт и мойку автотранспортных средств, чистку салона автомобиля (в том числе, вытряхивать песок и/или выливать воду с ковриков салона на парковку), счищать снег с транспортных средств, устранять неисправности механизмов транспортного средства, монтаж/демонтаж навесного оборудования и автомобильных аксессуаров, производить замену ламп, шиномонтаж, тонировать автотранспорт.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- проводить коммерческие/рекламно-пропагандистские мероприятия, собрания, митинги, маркетинговые акции, анкетирование и сбор информации, в том числе расклеивать (устанавливать) плакаты, афиши, объявления, без письменного разрешения Администрации.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- передвигаться по парковке на роликовых коньках, скейтбордах, велосипедах,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- присутствие на территории парковок бездомных, сборщиков пожертвований, распространителей листовок.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">2.7. Сотрудники службы охраны и представители Администрации Торгового центра имеют право остановить, предупредить или удалить с территории нарушителей настоящих Правил. Нарушители будут нести ответственность согласно действующему законодательству РФ и условиям настоящих Правил.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">2.8. Получение паркинг-карты и въезд на парковку считается согласием на заключение договора оказания услуг паркинга на условиях, установленных настоящими Правилами, тарифами, а также с установленной ими ответственностью, и свидетельствуют о заключении договора (п.3 ст. 438 ГК РФ).</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">2.9. Размещение транспортного средства на парковке не является заключением договора хранения.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">2.10. Администрация, Служба охраны ни при каких обстоятельствах не берет на себя ответственность за сохранность транспортных средств и/или любого иного имущества, оставленного на территории Парковки, а также за повреждения транспортного средства или имущества, причиненные, в том числе, по вине третьих лиц и/или по неосторожности, непредусмотрительности самого автовладельца.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">2.11. Парковочные места для автотранспортных средств инвалидов отмечены специальными знаками и табличками. Инвалиды, а также лица, их перевозящие (в тех случаях, когда инвалиды имеют противопоказания к управлению автотранспортом), пользуются местами для парковки бесплатно. По возникающим вопросам нужно обратиться к сотруднику парковки через кнопку вызова, расположенную на стойке шлагбаума.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Автотранспортные средства инвалидов, использующих для передвижения кресла-коляски, могут занимать два парковочных места для автотранспортных средств инвалидов.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">3. РЕЖИМ РАБОТЫ ПАРКОВКИ</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">3.1. Парковка работает ежедневно без выходных и праздничных дней, без перерывов на обед. Парковка открыта:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">ВЪЕЗД С 09:00 ДО 21:30 ЧАСОВ ВЫЕЗД С 08:00 ДО 22:00 ЧАСОВ</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">3.2. По истечении рабочего времени Парковки автовладельцы обязаны освободить территории Парковок от своего автотранспорта.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Автовладелец должен учитывать, что ИП Яковлева Л.В., ИП Яковлева М.Н., Служба охраны, лишены технической возможности выдачи автомобилей (Тех/условия ОВО УМВД по г. Иваново), оставленных на внутренней Парковке после завершения ее работы и ВОЗМОЖНОСТЬ ЗАБРАТЬ СВОЙ АВТОМОБИЛЬ С ВНУТРЕННЕЙ ПАРКОВКИ ТЦ У НЕГО БУДЕТ ТОЛЬКО НА СЛЕДУЮЩИЙ ДЕНЬ ПОСЛЕ ОТКРЫТИЯ ПАРКОВКИ В 08:00 ЧАСОВ!</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">При нарушении указанной обязанности посетителем, ему будет предъявлено требование об уплате штрафа за нарушение режима работы Парковок в порядке, установленном настоящими Правилами.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Информация о предельном времени выезда с парковки, которая может быть указана в чеке, выдаваемом при оплате "PARKING-КАРТЫ" носит</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">исключительно технический, а не информационный характер! ПОСЕТИТЕЛИ И АДМИНИСТРАЦИЯ ТЦ В ЛЮБОМ СЛУЧАЕ ДОЛЖНЫ РУКОВОДСТВОВАТЬСЯ П. 6.3 НАСТОЯЩИХ ПРАВИЛ, РЕГЛАМЕНТИРУЮЩИМ ВРЕМЯ ВЫЕЗДА С ПАРКОВКИ ПОСЛЕ ПРОИЗВЕДЕННОЙ ПОСЕТИТЕЛЕМ ОПЛАТЫ.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">3.3. В условиях возникновения чрезвычайных ситуаций или реальной угрозы их наступления (пожар, авария инженерных сетей, нарушение общественного порядка, ухудшение погодных условий и прочих) по решению Администрации, Службы охраны доступ на территорию Парковки может быть прекращен, а Парковка временно закрыта.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">4. КОМПЛЕКС УСЛУГ ПАРКИНГА ВКЛЮЧАЕТ В СЕБЯ:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- гарантированное обеспечение Автовладельца, желающего воспользоваться услугами паркинга, свободным парковочным местом;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- обеспечение и оснащение территорий парковки знаками, указателями, разметкой;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- осуществление контроля за исправностью оборудования парковки, поддержание его в рабочем состоянии;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- осуществление охраны оборудования, уборки территории парковки от снега и льда, бытового мусора;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- информирование пользователей о правилах, действующих на парковке и оказания им содействия при пользовании оборудованием, в том числе терминалами оплаты;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- помощь при паркинге;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- контроль за соблюдением водителями настоящих Правил, за движением и парковкой транспортных средств, в соответствии с графиком работы, требованиями знаков, указателей и разметки;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- контроль за соблюдением пользователями Парковки правил пожарной безопасности;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- не допущение случаев использования оборудования не по назначению.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">5. СТОИМОСТЬ УСЛУГ ПАРКИНГА</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">5.1. Стоимость паркинга на территории внутренней Парковки по тарифу "PARKING-КАРТА" составляет:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- первые 3 часа – 30 (тридцать) рублей (если посетитель пользуется парковкой менее предоставляемого времени, оплата уменьшению и возврату не подлежит);</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- 4-й и каждый последующий час – по 60 (шестьдесят) рублей (если посетитель пользуется парковкой менее предоставляемого времени, оплата уменьшению и возврату не подлежит);</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">5.2. Стоимость паркинга на территории внутренней Парковки по тарифу "PARKING-АБОНЕМЕНТ" составляет:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">1 месяц аренды одного машина-места – 4500 (четыре тысячи пятьсот) рублей.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">5.3. Время пользования услугами парковки отсчитывается с момента выдачи/прикладывания PARKING-КАРТЫ/PARKING-АБОНЕМЕНТА.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Оплата начисляется с первой минуты каждого последующего часа как за полный час.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">5.4. В случае утери или порчи PARKING-КАРТЫ/PARKING-АБОНЕМЕНТА:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- при наличии технической возможности время пользования услугами парковки устанавливается Сторонами совместно, при этом оплата времени пользования Парковкой осуществляется согласно тарифам парковки.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- при отсутствии технической возможности установить время пользования услугами парковки посетитель уплачивает штраф за утерю PARKING-КАРТЫ/PARKING-АБОНЕМЕНТА в порядке, установленном настоящими Правилами (см. п. 8.3., п. 8.4). При этом услуга парковки отсчитывается с первого часа работы парковки текущего дня (если не установлен момент въезда), и до момента выезда с территории Парковки, с учетом положений Правил.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">В случае утери или порчи PARKING-КАРТЫ/PARKING-АБОНЕМЕНТА оплата времени пользования Парковкой осуществляется на основании штрафной паркинг-карты (с учетом ее стоимости, указанной на PARKING-КАРТЕ), которая выдается Администрацией.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">5.5. Оплата услуг паркинга (погашение PARKING-КАРТЫ) производится в Терминалах оплаты парковки, где можно оплатить услуги паркинга как наличными денежными средствами, так и по банковской карте, или через системы Mir Pay, Samsung Pay, Android Pay, Apple Pay.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Пополнение/Продление PARKING-АБОНЕМЕНТА производится в Администрации ТЦ "Никольский" расположенная на 4 уровне ТЦ (кабинет Администрации).</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">5.6. Терминалы оплаты PARKING-КАРТ парковки в ТЦ расположены:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">- на внутренней парковке 0-го этажа возле входов в Торговый центр.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6. ПОРЯДОК ПОЛЬЗОВАНИЯ ПАРКОВКАМИ</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.1. Въезд и выезд с парковок осуществляется только по PARKING-КАРТАМ/PARKING-АБОНЕМЕНТАМ.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.2. Выезд автотранспортного средства с территории Парковок осуществляется только после оплаты услуг паркинга (погашения PARKING-КАРТЫ) в Терминалах оплаты парковки.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.3. После оплаты услуг паркинга автовладельцам предоставляется 15 минут для того, чтобы вернуться к своему автомобилю и выехать с территории парковки.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.4. Парковочные места, имеющие высоту менее 1,9 м, обозначены специальными желтыми указателями-табличками, где указана точная высота парковочного места, которые Администрация просит учитывать при выборе парковочного места. Ответственность (в т.ч. материальную) за выбор парковочного места несет Автовладелец.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5. Последовательность действий автовладельца при пользовании парковкой для тарифа PARKING-КАРТА:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">При въезде на парковку:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5.1. Подъехать к въездной стойке,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5.2. Нажать на кнопку, расположенную на лицевой панели въездной стойки,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5.3. Получить парковочную карту,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5.4. После открытия шлагбаума, проехать на парковку и припарковаться в соответствии с разметкой, знаками и указателями.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Перед выездом с парковки:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5.5. Подойти к ближайшему Терминалу оплаты парковки и оплатить услуги паркинга.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">При оплате в Терминале оплаты парковки услуг паркинга</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5.6. Вставить PARKING-КАРТУ в приемное окно PARKING-КАРТА, расположенное на двери автомата (карта затягивается внутрь автомата),</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5.7. После расчета стоимости услуг паркинга на табло автомата появится информация о ее величине и номиналах банкнот, допускаемых к приему,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5.8. Провести оплату,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5.9. Получить PARKING-КАРТУ, чек и при необходимости сдачу.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">При выезде с парковки</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5.10. Подъехать к выездной стойке не позднее чем через 15 минут после совершения оплаты,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5.11. Вставить парковочную карту в приемное гнездо выездной стойки,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.5.12. После открытия шлагбаума, выехать с парковки.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.6. Последовательность действий автовладельца при пользовании парковкой для тарифа PARKING-АБОНЕМЕНТ:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">При въезде на парковку:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.6.1. Подъехать к въездной стойке,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.6.2. Приложить PARKING-АБОНЕМЕНТ к лицевой панели въездной стойки, к месту, где изображён желтый круг с подсветкой,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.6.3. После открытия шлагбаума, проехать на парковку и припарковаться в соответствии с разметкой, знаками и указателями.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">При выезде с парковки:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.6.4. Подъехать к выездной стойке,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.6.5. Приложить PARKING-АБОНЕМЕНТ к лицевой панели выездной стойки, к месту, где изображён желтый круг с подсветкой,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.6.6. На дисплее высветится баланс карты до въезда на парковку и срок действия карты,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.6.7. Произойдет списание средств,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.6.8. После открытия шлагбаума выехать с парковки.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.7. При аварийной остановке (поломке) автомобиля, в случае дорожно-транспортного происшествия, так же при наступлении иных ситуаций, угрожающих жизни, здоровью людей или имуществу, посетитель обязан предпринять все необходимые меры, в том числе, предусмотренные Правилами дорожного движения, а также незамедлительно уведомить об этом Администрацию или Службу охраны личным обращением или по телефону +7 (960) 503-11-99;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">+7 (930) 355 95 04, либо воспользоваться дистанционной связью расположенной на стойке въезда и выезда на парковку.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">6.8. При отказе посетителя от услуг паркинга он обязан незамедлительно - НЕ ОТЪЕЗЖАЯ ОТ ВЪЕЗДНОГО ШЛАГБАУМА - сообщить о своем отказе</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">представителю Администрации и с его помощью немедленно покинуть территорию парковки. Во всех остальных случаях въезд на территорию и получение паркинг-карты считаются согласием на заключение договора оказания услуг паркинга на условиях, установленных настоящими Правилами, тарифами, а также с установленной ими ответственностью, и свидетельствуют о заключении договора в соответствии со статьей 438 Гражданского кодекса РФ.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">7. ОБЩИЕ ТРЕБОВАНИЯ БЕЗОПАСНОСТИ</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">7.1. На территории Парковки категорически запрещено:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">7.1.1. курение (в том числе, внутри автомобиля), распитие спиртных напитков (в том числе, внутри автомобиля), а также напитков в стеклянной таре;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">7.1.2. пользование открытым огнем;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">7.1.3. провоз (пронос) на территорию Парковки (хранение, перелив, разлив на пол) топлива, иных горюче-смазочных материалов, газовых баллонов, взрывчатых, химически активных веществ и пиротехнических материалов;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">7.1.4. стоянка более 5 минут на внутренней Парковке с работающим двигателем;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">7.1.5. безнадзорное передвижение и нахождение на территории Парковки несовершеннолетних детей и домашних животных;</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">7.1.6. любое пешеходное движение по въездному, выездному пандусам, расположенным на территории внутренней Парковки.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">7.2. Автовладелец вправе оставить автотранспортное средство на парковке при условии, если были приняты все необходимые меры, исключающие самопроизвольное движение автотранспортного средства (стояночный тормоз) или использование его в отсутствие автовладельца посторонними лицами (запертые двери, противоугонные средства, средства сигнализации, блокировка руля и т.п.).</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">7.3. В случае обнаружения на территории внутренней Парковки подозрительных предметов, которые могут оказаться взрывными устройствами, следует немедленно сообщить о находке сотруднику Администрации или Службы охраны либо сотруднику полиции. Не пытаться трогать, вскрывать, передвигать, совершать иные самостоятельные действия в отношении находки.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">8. ОТВЕТСТВЕННОСТЬ. ШТРАФЫ</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">8.1. При невыполнении требований Правил, представитель Администрации действует следующим образом:</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">8.1.1. Нарушитель предупреждается о недопустимости нарушения, о возможном применении в отношении его мер судебно-принудительного характера, в том числе штрафных санкций. Нарушителю предлагается незамедлительно прекратить (устранить) нарушение и его последствия.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">8.1.2. В случае отказа нарушителя устранить нарушение и его последствия, представителями Администрации и нарушителем составляется и подписывается Акт о нарушении (Приложение №1), с указанием данных составителя, нарушителя, а равно марки, модели, государственного номерного знака автотранспорта, даты,</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">времени и места нарушения, а также установочных данных лиц, являющихся очевидцами данного нарушения.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">8.1.3. В случае отказа кого-либо из лиц, чьи установочные данные внесены в Акт, поставить личную подпись, в Акт вносится соответствующая запись об отказе от подписи.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">8.1.4. До нарушителя доводится сумма штрафа за нарушение, способы, время и место оплаты.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">8.2. Штраф за нарушение требований Правил, указанных в пунктах/подпунктах: 2.4, 2.5, 2.6, 3.2, 7.1, 7.2. Правил – 1000 (одна тысяча) рублей 00 копеек.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">8.3. Штраф за утерю или порчу PARKING-КАРТЫ – 250 (двести пятьдесят) рублей 00 копеек.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">8.4. Штраф за утерю или порчу PARKING-АБОНЕМЕНТА – 250 (двести пятьдесят) рублей 00 копеек.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">8.5. Штраф за самовольное поднятие въездного или выездного шлагбаума – 10 000 (десять тысяч) рублей 00 копеек.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">8.6. Штраф оплачивается в Терминалах оплаты на основании Акта о нарушении, по штрафной карте, выданной Администрацией.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">При отсутствии возможности своевременно оплатить штраф допускается его оплата в течение трех рабочих дней, о чем делается запись в Акте о нарушении.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">8.7. Квитанция об оплате штрафа, выданная Терминалом с приложением копии Акта о нарушении, выданная Администрацией, является основанием для возврата оплаченного штрафа – в случае возврата утерянной карты, за вычетом платы за пользование платными парковками ТЦ.</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;"></p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">ВСЕ ПРЕТЕНЗИИ И ПОЖЕЛАНИЯ ПО РАБОТЕ ПАРКОВКИ МОЖНО НАПРАВЛЯТЬ НА nikolskiy.adm@yandex.ru</p><p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium;">Тел: +7 (960) 503-11-99</p>']
            ],
            [
                "title" => 'Работа на общий успех: интервью с управляющим торгового центра «Никольский»',
                "slug" => 'renters',
                'content' => ['description' => '<table class="table table-bordered"><tbody><tr><td><p><img src="http://176.99.11.26/storage/pages/SbKZykHYtduUXP2TsFcKrYZ5k1SUyqAHFJ96MOl4.jpg" style="width: 25%;"><br></p></td><td><p><b>Юрий ДУНАЕНКО,</b></p><p><span style="background-color: transparent; color: inherit; font-size: 1rem;">управляющий партнер ТЦ «Никольский»</span></p></td></tr></tbody></table>
<div><p><b><i>- ТЦ «Никольский» расположен в самом центре г. Иваново и является ядром исторически сложившейся торговой зоны Промышленного района.</i></b></p></div>
<div><p><b><i>- Юрий Валерьевич, а в чём, по Вашему мнению, основные преимущества данного торгового центра? – спрашиваем мы у Ю.В. Дунаенко, управляющего партнера ТЦ «Никольский».</i></b></p></div>
<div><p>- На мой взгляд, прежде всего, это высокая транспортная доступность. В шаге от ТЦ расположен крупный пересадочный узел городской и межмуниципальной транспортной сети ост. Станционная. Для удобства посетителей с личным транспортом, в ТЦ имеются две бесплатные парковки: подземная 1500 м2 (95 м/мест) и наземная 600 м2 (30 м/мест).</p><p>Также несомненным плюсом ТЦ «Никольский» является приближенность к центру города и пограничное расположение крупных жилых микрорайонов, представленных современными 5-22 этажными зданиями.</p><p>Еще одно преимущество ТЦ «Никольский» – это близкое расположение любимого места проведения досуга ивановцев, центрального парка города: <b>парк им. Степанова</b>.</p><p>Все это дает нам стабильный круглогодичный поток покупателей, численностью – более 255 000 человек в месяц.</p></div>
<div><p><b><i>- Какие условия готова предложить администрация ТЦ «Никольский», приглашая к сотрудничеству арендаторов? Здесь я имею в виду торговые фирмы и предпринимателей, заинтересованных в стабильном развитии своего бизнеса.</i></b></p></div>
<div><p>- Прежде всего, это невысокая арендная ставка, позволяющая нашим арендаторам сохранять конкурентоспособность на рынке товаров и услуг, тем самым уменьшая финансовую нагрузку на конечного покупателя.</p><p>Мы предлагаем довольно солидный райдер. Общая площадь GBA — 19 000 кв. м., арендная площадь GLA — 11 500 кв. м. Высота нашего центра - 4 этажа плюс подземный паркинг.</p><p>Кроме того, для удобства арендаторов и комфортного пребывания посетителей ТЦ «Никольский» оснащен всеми необходимыми современными системами:</p><ul><li>охранно-пожарная сигнализация, система оповещения о пожаре, система автоматического пожаротушения, система дымоудаления, система видеонаблюдения;</li><li>посты охраны внутри и снаружи здания (24 часа);</li><li>лифты и эскалаторы для удобства покупателей;</li><li>разгрузочно-погрузочная зона, грузовые лифты для арендаторов;</li><li>теплоснабжение (своя газовая котельная);</li><li>электричество (своя электроподстанция 1,2 МВт.);</li><li>возможность установки телефона и подключения к сети Интернет;</li><li>приточно-вытяжная вентиляция и кондиционирование.</li></ul><p></p></div>
<div><p><b><i>- Что ж, впечатляет. А какую задачу ставит себе администрация ТЦ «Никольский» в плане работы с арендаторами?</i></b></p></div>
<div><p>- Вопросам стратегии подбора арендаторов мы уделяем особое внимание. Основная задача - объединить в себе деловую, торговую и развлекательную сферу, направленную на комфорт и удобство для наших посетителей. Именно это позволяет обеспечить широкий ассортимент товаров и услуг для потребителей. Мы всегда стараемся создать комфортные условия для своих арендаторов. Наша главная задача — не просто сдать в аренду торговые площади, а помочь нашим партнерам (арендаторам) добиться финансовой стабильности и новых высот в развитии собственного бизнеса, что повысит экономическую привлекательность и конкурентоспособность ТЦ «Никольский» на рынке коммерческой недвижимости г. Иваново.</p></div>
<div><p><b><i>- Что же, благодарим Вас за содержательное интервью, желаем процветания и успешного развития ТЦ «Никольский», на благо жителей города.</i></b></p></div>']
            ],
            [
                "title" => 'ПОЛИТИКА В ОТНОШЕНИИ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ',
                "slug" => 'personal-data-policy',
                'content' => ['description' => '<p style="margin-bottom: 0cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="700, serif"><font style="font-size: 10pt"><b>1.
Введение</b></font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">1.1
Настоящий документ определяет политику
в ИП Яковлева Л.В. - ТЦ "Никольский"&nbsp;(далее
— Компания) в отношении обработки
персональных данных (далее — ПДн).</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">1.2
Компания является оператором ПДн в
соответствии с законодательством
Российской Федерации о ПДн.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">1.3
Настоящая Политика разработана в
соответствии с действующим законодательством
Российской Федерации о ПДн:</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">Федеральный
закон Российской Федерации от 27.07.2006 г.
№ 152-ФЗ "О персональных данных"
(далее — 152-ФЗ, ФЗ "О персональных
данных"), устанавливающий основные
принципы и условия обработки ПДн, права,
обязанности и ответственность участников
отношений, связанных с обработкой ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">Постановление
Правительства Российской Федерации от
01.11.2012 г. № 1119 "Об утверждении требований
к защите персональных данных при их
обработке в информационных системах
персональных данных";</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">Постановление
Правительства Российской Федерации от
15.09.2008 г. № 687 "Об утверждении Положения
об особенностях обработки персональных
данных, осуществляемой без использования
средств автоматизации".</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">1.4
Действие настоящей Политики распространяется
на любое действие (операцию) или
совокупность действий (операций),
совершаемых с использованием средств
автоматизации или без использования
таких средств с ПДн, включая сбор, запись,
систематизацию, накопление, хранение,
уточнение (обновление, изменение),
извлечение, использование, передачу
(распространение, предоставление,
доступ), обезличивание, блокирование,
удаление, уничтожение ПДн.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">1.5
Настоящая Политика подлежит пересмотру
и, при необходимости, актуализации в
случае изменений в законодательстве
Российской Федерации о ПДн.</font></font></font></p><p style="margin-bottom: 0cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="700, serif"><font style="font-size: 10pt"><b>2.
Принципы обработки ПДн</b></font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">Обработка
ПДн осуществляется на основе следующих
принципов:</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">1)
обработка ПДн осуществляется на законной
и справедливой основе;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">2)
обработка ПДн ограничивается достижением
конкретных, заранее определенных и
законных целей;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3)
обработка ПДн, несовместимая с целями
сбора ПДн, не допускается;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">4)
не допускается объединение баз данных,
содержащих ПДн, обработка которых
осуществляется в целях, несовместимых
между собой;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">5)
содержание и объем обрабатываемых ПДн
соответствуют заявленным целям обработки.
Обрабатываемые ПДн не являются избыточными
по отношению к заявленным целям обработки;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">6)
при обработке ПДн обеспечивается
точность ПДн и их достаточность, в
случаях необходимости и актуальность
ПДн по отношению к заявленным целям их
обработки;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">7)
хранение ПДн осуществляется в форме,
позволяющей определить субъекта ПДн
не дольше, чем этого требуют цели
обработки ПДн, если срок хранения ПДн
не установлен федеральным законом,
договором, стороной которого,
выгодоприобретателем или поручителем
по которому является субъект ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">8)
обрабатываемые ПДн подлежат уничтожению
или обезличиванию по достижению целей
обработки или в случае утраты необходимости
в достижении этих целей, если иное не
предусмотрено федеральным законом.</font></font></font></p><p style="margin-bottom: 0cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="700, serif"><font style="font-size: 10pt"><b>3.
Условия обработки ПДн</b></font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3.1
Обработка ПДн осуществляется с соблюдением
принципов и правил, установленных ФЗ
"О персональных данных". Обработка
ПДн осуществляется в следующих случаях:</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">1)
обработка ПДн осуществляется с согласия
субъекта ПДн на обработку его ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">2)
обработка ПДн необходима для достижения
целей, предусмотренных международным
договором Российской Федерации или
законом, для осуществления и выполнения
возложенных законодательством Российской
Федерации на оператора функций, полномочий
и обязанностей;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3)
обработка ПДн необходима для исполнения
договора, стороной которого либо
выгодоприобретателем или поручителем
по которому является субъект ПДн, а
также для заключения договора по
инициативе субъекта ПДн или договора,
по которому субъект ПДн будет являться
выгодоприобретателем или поручителем;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">4)
обработка ПДн необходима для защиты
жизни, здоровья или иных жизненно важных
интересов субъекта ПДн, если получение
согласия субъекта ПДн невозможно;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">5)
обработка ПДн необходима для осуществления
прав и законных интересов оператора
или третьих лиц либо для достижения
общественно значимых целей при условии,
что при этом не нарушаются права и
свободы субъекта ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">6)
обработка ПДн осуществляется в
статистических или иных исследовательских
целях, при условии обязательного
обезличивания ПДн. Исключение составляет
обработка ПДн в целях продвижения
товаров, работ, услуг на рынке путем
осуществления прямых контактов с
потенциальным потребителем с помощью
средств связи;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">7)
осуществляется обработка ПДн, доступ
неограниченного круга лиц, к которым
предоставлен субъектом ПДн либо по его
просьбе.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3.2
Компания может включать ПДн субъектов
в общедоступные источники ПДн, при этом
Компания берет письменное согласие
субъекта на обработку его ПДн.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3.3
Компания может осуществлять обработку
данных о состоянии здоровья субъекта
ПДн в следующих случаях:</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">1)
в соответствии с законодательством о
государственной социальной помощи,
трудовым законодательством,
законодательством Российской Федерации
о пенсиях по государственному пенсионному
обеспечению, о трудовых пенсиях;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">2)
для защиты жизни, здоровья или иных
жизненно важных интересов работника
либо для защиты жизни, здоровья или иных
жизненно важных интересов других лиц
и получение согласия субъекта ПДн
невозможно;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3)
для установления или осуществления
прав работника или третьих лиц, а равно
и в связи с осуществлением правосудия;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">4)
в соответствии с законодательством об
обязательных видах страхования, со
страховым законодательством.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3.4
Компания осуществляет трансграничную
передачу ПДн только на территорию
иностранных государств, обеспечивающих
адекватную защиту прав субъектов ПДн.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3.5
Принятие на основании исключительно
автоматизированной обработки ПДн
решений, порождающих юридические
последствия в отношении субъекта ПДн
или иным образом затрагивающих его
права и законные интересы, не осуществляется.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3.6
Компания может осуществлять обработку
ПДн по поручению оператора на основании
заключенного договора между Компанией
и оператором.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3.7
При отсутствии необходимости письменного
согласия субъекта на обработку его ПДн
согласие субъекта может быть дано
субъектом ПДн или его представителем
в любой позволяющей получить факт его
получения форме.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3.8
При поручении обработки ПДн другому
лицу Компания заключает договор (далее
— поручение оператора) с этим лицом и
получает согласие субъекта ПДн, если
иное не предусмотрено федеральным
законом. При этом Компания в поручении
оператора обязует лицо, осуществляющее
обработку ПДн по поручению Компании,
соблюдать принципы и правила обработки
ПДн, предусмотренные ФЗ "О персональных
данных".</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3.9
В случаях, когда Компания поручает
обработку ПДн другому лицу, ответственность
перед субъектом ПДн за действия указанного
лица несет Компания. Лицо, осуществляющее
обработку ПДн по поручению Компании,
несет ответственность перед Компанией.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3.10
Компания обязуется и обязует иные лица,
получившие доступ к ПДн, не раскрывать
третьим лицам и не распространять ПДн
без согласия субъекта ПДн, если иное не
предусмотрено федеральным законом.</font></font></font></p><p style="margin-bottom: 0cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="700, serif"><font style="font-size: 10pt"><b>4.
Обязанности Компании</b></font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">В
соответствии с требованиями Федерального
закона № 152-ФЗ "О персональных данных"
Компания обязана:</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">1)
предоставлять субъекту ПДн по его
запросу информацию, касающуюся обработки
его ПДн, либо на законных основаниях
предоставить отказ в течение тридцати
дней с даты получения запроса субъекта
ПДн или его представителя;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">2)
по требованию субъекта ПДн уточнять,
блокировать или удалять обрабатываемые
ПДн, если ПДн являются неполными,
устаревшими, неточными, незаконно
полученными или не являются необходимыми
для заявленной цели обработки в срок,
не превышающий семи рабочих дней со дня
предоставления субъектом ПДн или его
представителем сведений, подтверждающих
эти факты;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3)
вести Журнал учета обращений субъектов
ПДн, в котором должны фиксироваться
запросы субъектов ПДн на получение ПДн,
а также факты предоставления ПДн по
этим запросам;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">4)
уведомлять субъекта ПДн об обработке
ПДн в том случае, если ПДн были получены
не от субъекта ПДн. Исключение составляют
следующие случаи:</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">субъект
ПДн уведомлен об осуществлении обработки
Компанией его ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">ПДн
получены Компанией в связи с исполнением
договора, стороной которого либо
выгодоприобретателем или поручителем
по которому является субъект ПДн или
на основании федерального закона;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">ПДн
сделаны общедоступными субъектом ПДн
или получены из общедоступного источника;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">Компания
осуществляет обработку ПДн для
статистических или иных исследовательских
целей, если при этом не нарушаются права
и законные интересы субъекта ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">предоставление
субъекту ПДн сведений, содержащихся в
Уведомлении об обработке ПДн, нарушает
права и законные интересы третьих лиц;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">5)
в случае достижения цели обработки ПДн
незамедлительно прекратить обработку
ПДн и уничтожить соответствующие ПДн
в срок, не превышающий тридцати дней с
даты достижения цели обработки ПДн,
если иное не предусмотрено договором,
стороной которого, выгодоприобретателем
или поручителем по которому является
субъект ПДн, иным соглашением между
Компанией и субъектом ПДн либо если
Компания не вправе осуществлять обработку
ПДн без согласия субъекта ПДн на
основаниях, предусмотренных № 152-ФЗ "О
персональных данных" или другими
федеральными законами;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">6)
в случае отзыва субъектом ПДн согласия
на обработку своих ПДн прекратить
обработку ПДн и уничтожить ПДн в срок,
не превышающий тридцати дней с даты
поступления указанного отзыва, если
иное не предусмотрено соглашением между
Компанией и субъектом ПДн. Об уничтожении
ПДн Компания обязана уведомить субъекта
ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">7)
в случае поступления требования субъекта
ПДн о прекращении обработки ПДн,
полученных в целях продвижения товаров,
работ, услуг на рынке, немедленно
прекратить обработку ПДн.</font></font></font></p><p style="margin-bottom: 0cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="700, serif"><font style="font-size: 10pt"><b>5.
Меры по обеспечению безопасности ПДн
при их обработке</b></font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">5.1
При обработке ПДн Компания применяет
необходимые правовые, организационные
и технические меры для защиты ПДн от
неправомерного или случайного доступа
к ним, уничтожения, изменения, блокирования,
копирования, предоставления, распространения
ПДн, а также от иных неправомерных
действий в отношении ПДн.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">5.2
Обеспечение безопасности ПДн достигается
следующими мерами:</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">1)
определение угроз безопасности ПДн при
их обработке в информационных системах
ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">2)
применение организационных и технических
мер по обеспечению безопасности ПДн
при их обработке в информационных
системах ПДн, необходимых для выполнения
требований к защите ПДн, исполнение
которых обеспечивает установленные
Правительством Российской Федерации
уровни защищенности ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3)
применение прошедших в установленном
порядке процедур оценки соответствия
средств защиты информации;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">4)
оценка эффективности принимаемых мер
по обеспечению безопасности ПДн до
ввода в эксплуатацию информационной
системы ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">5)
учет машинных носителей ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">6)
обнаружение фактов несанкционированного
доступа к ПДн и принятие мер;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">7)
восстановление ПДн, модифицированных
или уничтоженных вследствие
несанкционированного доступа к ним;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">8)
установление правил доступа к ПДн,
обрабатываемым в информационной системе
ПДн, а также обеспечение регистрации и
учета всех действий, совершаемых с ПДн
в информационной системе ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">9)
контроль за принимаемыми мерами по
обеспечению безопасности ПДн и уровня
защищенности информационных систем
ПДн.</font></font></font></p><p style="margin-bottom: 0cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="700, serif"><font style="font-size: 10pt"><b>6.
Права субъекта ПДн</b></font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">В
соответствии с ФЗ "О персональных
данных" субъект ПДн имеет право:</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">1)
получить сведения, касающиеся обработки
ПДн Компанией, а именно:</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">подтверждение
факта обработки ПДн Компанией;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">правовые
основания и цели обработки ПДн Компанией;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">применяемые
Компанией способы обработки ПДн;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">наименование
и место нахождения Компании, сведения
о лицах (за исключением работников
Компании), которые имеют доступ к ПДн
или которым могут быть раскрыты ПДн на
основании договора с оператором или на
основании федерального закона;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">обрабатываемые
ПДн, относящиеся к соответствующему
субъекту ПДн, источник их получения,
если иной порядок представления таких
данных не предусмотрен федеральным
законом;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">сроки
обработки ПДн Компанией, в том числе
сроки их хранения;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">порядок
осуществления субъектом ПДн прав,
предусмотренных ФЗ «О персональных
данных»;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">информацию
об осуществленной или предполагаемой
трансграничной передаче данных;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">наименование
или фамилию, имя, отчество и адрес лица,
осуществляющего обработку ПДн по
поручению Компании, если обработка
поручена или будет поручена такому
лицу;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a">— <font face="Arial, serif"><font style="font-size: 10pt">иные
сведения, предусмотренные ФЗ "О
персональных данных" или другими
федеральными законами;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">2)
потребовать от Компании уточнения его
ПДн, их блокирования или уничтожения в
случае, если ПДн являются неполными,
устаревшими, неточными, незаконно
полученными или не являются необходимыми
для заявленной цели обработки;</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">3)
отозвать согласие на обработку ПДн в
предусмотренных законом случаях.</font></font></font></p><p style="margin-bottom: 0cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="700, serif"><font style="font-size: 10pt"><b>7.
Порядок осуществления прав</b></font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">7.1
Обращение субъекта ПДн к оператору в
целях реализации его прав, установленных
ФЗ "О персональных данных",
осуществляется в письменном виде по
установленной форме при личном визите
в Компанию субъекта ПДн или его
представителя. (Здесь и далее по тексту
под субъектами ПДн понимается как сам
субъект ПДн, так и его законный
представитель: родитель, опекун,
попечитель и иные лица, полномочия
которых установлены 152-ФЗ либо иным
законом Российской Федерации).</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">7.2
Форма обращения выдается субъекту ПДн
или его представителю работником ресепшн
и заполняется субъектом ПДн или его
представителем с проставлением
собственноручной подписи в присутствии
указанного работника.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">7.3
Работник ресепшн, получив обращение по
установленной форме, сверяет указанные
в нем сведения об основном документе,
удостоверяющем личность субъекта ПДн,
основания, по которым лицо выступает в
качестве представителя субъекта ПДн,
и представленные при обращении оригиналы
данного документа.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">7.4
Ответ на обращение отправляется субъекту
ПДн в письменном виде по почте на адрес,
указанный в обращении.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">7.5
Срок формирования ответа и передачи в
почтовое отделение для отправки не
может превышать тридцати дней с даты
получения оператором обращения.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">7.6
Срок внесения необходимых изменений в
ПДн, являющиеся неполными, неточными
или неактуальными, не может превышать
семи рабочих дней со дня предоставления
субъектом ПДн или его представителем
сведений, подтверждающих, что ПДн
являются неполными, неточными или
неактуальными.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">7.7
Срок уничтожения ПДн, являющихся
незаконно полученными или не являющихся
необходимыми для заявленной цели
обработки, не может превышать семи
рабочих дней со дня предоставления
субъектом ПДн или его представителем
сведений, подтверждающих, что ПДн
являются незаконно полученными или не
являются необходимыми для заявленной
цели обработки.</font></font></font></p><p style="margin-bottom: 0cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="700, serif"><font style="font-size: 10pt"><b>8.
Ограничения прав субъектов ПДн</b></font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">8.1
Право субъекта ПДн на доступ к своим
ПДн ограничивается в случае, если
предоставление ПДн нарушает права и
законные интересы других лиц.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">8.2
В случае если сведения, касающиеся
обработки ПДн, а также обрабатываемые
ПДн были предоставлены для ознакомления
субъекту ПДн по его запросу, субъект
ПДн вправе направить повторный запрос
в целях получения сведений, касающихся
обработки ПДн, и ознакомления с такими
ПДн не ранее чем через тридцать дней
после направления первоначального
запроса, если более короткий срок не
установлен федеральным законом, принятым
в соответствии с ним нормативным правовым
актом или договором, стороной которого
либо выгодоприобретателем или поручителем
по которому является субъект ПДн.</font></font></font></p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">8.3
Субъект ПДн вправе направить Компании
повторный запрос в целях получения
сведений, касающихся обработки ПДн, а
также в целях ознакомления с обрабатываемыми
ПДн до истечения срока, указанного в п.
8.2 в случае, если такие сведения и (или)
обрабатываемые ПДн не были предоставлены
ему для ознакомления в полном объеме
по результатам рассмотрения первоначального
запроса. Повторный запрос должен
содержать обоснование направления
повторного запроса.</font></font></font></p><p align="center" style="margin-top: 0.79cm; margin-bottom: 0cm; line-height: 1.32cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">

</p><p style="margin-bottom: 0.4cm; line-height: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
<font color="#1a1a1a"><font face="Arial, serif"><font style="font-size: 10pt">8.4
Компания вправе отказать субъекту ПДн
в выполнении повторного запроса, не
соответствующего условиям, предусмотренным
пп. 8.2 и 8.3.</font></font></font></p>']
            ]
        ];

        foreach ($pages as $page) {
            if (!Pages::where('slug', $page['slug'])->first()) {
                Pages::create($page);
            }
        }


    }
}
