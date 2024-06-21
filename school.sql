-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 21 2024 г., 13:26
-- Версия сервера: 5.7.39
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `school`
--

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `documents`
--

INSERT INTO `documents` (`id`, `title`, `description`, `document`, `created_at`, `updated_at`) VALUES
(4, 'Shohruh Ermanov', 'My main occupation is web programming. My experience in this field is high. I have also participated in major projects and StartUPs in my field. I can create websites, Frontend, Backend and desktop version of sites. For a while, I taught Frontend at IT Park. I have worked with many companies, teams and clients.', 'E:\\OSPanel\\userdata\\temp\\upload\\php9F4E.tmp', '2023-11-14 04:26:12', '2023-11-14 05:08:50'),
(6, 'gggggggggg', 'ggggggggggggg', 'E:\\OSPanel\\userdata\\temp\\upload\\phpC04.tmp', '2023-11-14 05:09:18', '2023-11-14 05:09:18');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '1699972538.jpg', '2023-11-13 14:36:30', '2023-11-14 11:35:38'),
(3, '1699972526.jpg', '2023-11-13 14:42:23', '2023-11-14 11:35:26'),
(4, '1699972553.jpg', '2023-11-14 11:35:53', '2023-11-14 11:35:53'),
(5, '1699972565.jpg', '2023-11-14 11:36:05', '2023-11-14 11:36:05'),
(6, '1699972584.jpg', '2023-11-14 11:36:24', '2023-11-14 11:36:24'),
(7, '1699972594.jpg', '2023-11-14 11:36:34', '2023-11-14 11:36:34'),
(8, '1699972605.jpg', '2023-11-14 11:36:45', '2023-11-14 11:36:45'),
(9, '1699972632.jpg', '2023-11-14 11:37:12', '2023-11-14 11:37:12');

-- --------------------------------------------------------

--
-- Структура таблицы `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `holidays`
--

INSERT INTO `holidays` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Alsher Navoiy bobomizning 582-yiligi', '1699972816.jpg', 'Sayxunobod tumani 29-umum ta\'lim maktabida joriy yilning 8-fevral kuni Alsher Navoiy bobomizning 582-yiligiga bag\'ishlanib maktabimizda tadbir bo\'lib o\'tdi.', '2023-11-14 11:17:39', '2023-11-14 11:40:16');

-- --------------------------------------------------------

--
-- Структура таблицы `leaders`
--

CREATE TABLE `leaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acceptance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biografiya` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `majburiyatlar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `faoliyat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `leaders`
--

INSERT INTO `leaders` (`id`, `title`, `name`, `contact`, `acceptance`, `image`, `biografiya`, `majburiyatlar`, `faoliyat`, `created_at`, `updated_at`) VALUES
(2, '29-maktab Direktori', 'Umarqulov Shuhrat Ermanovich', '+998 (99) 479 59 82', 'Juma 10:00 dan 12:00 gacha', '1699956502.jpg', 'Tug‘ilgan yili: 17.07.1980  Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani  Millati: o‘zbek  Partiyaviyligi: yo‘q  Ma’lumoti: oliy  Tamomlagan: 2001-yil Guliston Davlat Universiteti Jismoniy tarbiya o\'qituvchisi  Ma’lumoti bo‘yicha mutaxassisligi: Jismoniy tarbiya o\'qituvchisi', 'Maktab ustavida belgilangan vakolatlar doirasida ta\'lim muassasasi va xodimlarni boshqarish va qaror qabul qilish; Xodimlar bilan mehnat, fuqarolik va boshqa shartnomalarni tuzish va bekor qilish; Ularning manfaatlarini himoya qilish va bunday uyushmalarga qo\'shilish uchun boshqa birlashmalar rahbarlari bilan birgalikda yaratish; Tashkilot egasi bilan kelishilgan holda belgilanadigan xodimlar uchun mehnat sharoitlarini tashkil etish; Xodimlarni rag\'batlantirish va ularga nisbatan intizomiy choralarni qo\'llash. Jamoa shartnomasida, ichki mehnat qoidalarida, mehnat shartnomalarida belgilangan muddatlarda ish haqini to\'liq to\'lash; Xodimlarni tibbiy va boshqa majburiy sug\'urtalash turlarini amalga oshirish; Belgilangan kvota doirasida nogironlar uchun ish o\'rinlari yaratish; Ish joylarini saqlab qolish bo\'yicha tadbirlarni o\'tkazish; Talabalar, o\'quvchilar va ishchilarning hayoti va sog\'lig\'ini muhofaza qilishni ta\'minlaydigan sharoitlarni yaratish, ularning jarohatlanish holatlarini oldini olish, xodimlarning xavfsizlik texnikasi yo\'riqnomalari, ishlab chiqarish sanitariyasi va gigienasi, yong\'in xavfsizligi qoidalari talablarini bilishi va bajarilishini nazorat qilish.', '1997-2001 yil - Guliston Davlat universiteti talabasi  2001-2002 yil - harbiy xizmatda  2008-2011 yil- Sayxunobod tumani Guliston QKKKhK Jismoni tarbiya o\'quvchisi bo\'lib ishlagan  2011-2016 yil - Sayxunobod tumani 29 - umumiy o\'rta ta\'lim maktabida MMIBD o\'rinbosari.  2016-yil - Sayxunobod tumanidagi 29-umumta\'lim maktab direktori', '2023-11-14 07:08:22', '2023-11-14 07:08:22'),
(3, '29-maktab O\'TIBDO\' direktor o\'rin bosari', 'Umarov Mahsudjon Abduvaidovich', '+998994795982', 'Dushanba - Juma, 9:00 - 18:00, Tushlik 13:00-14:00', '1699957100.jpg', 'Tug‘ilgan yili: 11.03.1988  Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani  Millati: o‘zbek  Partiyaviyligi: yo‘q  Ma’lumoti: oliy  Tamomlagan: 2013-yil Guliston davlat universiteti (kunduzgi)  Ma’lumoti bo‘yicha mutaxassisligi: Tarix fani o\'qituvchisi', 'Treningning uslubiy komponentini ta\'minlash. Bosh o\'qituvchi talabalar uchun o\'quv dasturlarini tuzishi, tasdiqlashi va kerak bo\'lganda tuzatishi shart. Muhim shart - bu ta\'lim muassasasidagi yoki mamlakatdagi vaziyatning o\'zgarishi bilan bog\'liq bo\'lishi mumkin bo\'lgan tuzatishning tezkorligi. Masalan, har qanday favqulodda vaziyat (terrorchilik harakati, tabiiy ofat va boshqalar) bilan bog\'liq qo\'shimcha darsni kiritishda. Pedagoglar jamoasining ishini muvofiqlashtirish. Direktor o\'rinbosari darslarda, to\'garaklar va mashg\'ulotlarda qatnashish huquqiga ega darsdan tashqari mashg\'ulotlar o\'qituvchining ishini nazorat qilish maqsadida. Bundan tashqari, u o\'qituvchilarni o\'z vaqtida attestatsiyadan o\'tkazish va ularning malakasini oshirish uchun ularning malakasini oshirish uchun javobgardir. Rejalashtirish. Gap joriy va istiqbolli rejalar haqida bormoqda, ular direktorning o\'quv va tarbiyaviy ishlar bo\'yicha o\'rinbosari tomonidan tuzilishi va muassasa direktori tomonidan tasdiqlanishi kerak.', '2011-2013 yil - Sayxunobod tumani 17-sonli umumiy o\'rta ta\'lim maktab tarix fani o\'qituchisi  2013-2013 yil - Sayxunobod tumani 22-sonli umumiy o\'rta ta\'lim maktab tarix fani o\'qituvchisi.  2013-2014 yil - Sayxunobod tumani 22-sonli umumiy o\'rta ta\'lim maktab amaliyotchi psixolog  2014-2015 yil - Sayxunobod tumani 22-sonli umumiy o\'rta ta\'lim maktab TIBD.  2015-2018 yil - Sayxunobod tunani 17-sonli umumiy o\'rta ta\'lim maktab tarix fani o\'qituchisi  2018-2019 yil - Majburiy izjro byurosi Sayxunobod tumani bo\'limi davlat izjrochisi.  2019 yil - sovuq mavsum - Sayhunobod tumani 29-sonli umumiy o\'rta ta\'lim maktabining o\'quv ishlari bo\'yicha direktor o\'rinbosari.', '2023-11-14 07:18:20', '2023-11-14 07:18:20'),
(4, '29-maktab Ma\'naviyat ishlar bo\'yicha direktor o\'rin bosari', 'Mamatqulov Asqarjon Qodirqulovich', '+998994795982', 'Juma 10:00 dan 12:00 gacha', '1699957303.jpg', 'Tug‘ilgan yili: 17.07.1980  Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani  Millati: o‘zbek  Partiyaviyligi: yo‘q  Ma’lumoti: oliy  Tamomlagan: 2001-yil Guliston Davlat Universiteti Jismoniy tarbiya o\'qituvchisi  Ma’lumoti bo‘yicha mutaxassisligi: Jismoniy tarbiya o\'qituvchisi', 'Maktab ustavida belgilangan vakolatlar doirasida ta\'lim muassasasi va xodimlarni boshqarish va qaror qabul qilish; Xodimlar bilan mehnat, fuqarolik va boshqa shartnomalarni tuzish va bekor qilish; Ularning manfaatlarini himoya qilish va bunday uyushmalarga qo\'shilish uchun boshqa birlashmalar rahbarlari bilan birgalikda yaratish; Tashkilot egasi bilan kelishilgan holda belgilanadigan xodimlar uchun mehnat sharoitlarini tashkil etish; Xodimlarni rag\'batlantirish va ularga nisbatan intizomiy choralarni qo\'llash. Jamoa shartnomasida, ichki mehnat qoidalarida, mehnat shartnomalarida belgilangan muddatlarda ish haqini to\'liq to\'lash; Xodimlarni tibbiy va boshqa majburiy sug\'urtalash turlarini amalga oshirish; Belgilangan kvota doirasida nogironlar uchun ish o\'rinlari yaratish; Ish joylarini saqlab qolish bo\'yicha tadbirlarni o\'tkazish; Talabalar, o\'quvchilar va ishchilarning hayoti va sog\'lig\'ini muhofaza qilishni ta\'minlaydigan sharoitlarni yaratish, ularning jarohatlanish holatlarini oldini olish, xodimlarning x', '1996-1997 yil - Sayxunobod tumani xalq banki nazoratchisi 1998-2000 yil -.Bo\'ston savxo\'ziida xisobchi  2000-2002 yil - Bo\'ston savxo\'zi oilaviy pudradchi  2002-2008 yil - \"Xo\'janazar bobo \" F/X rahbari  2008-2012 yil - Bo\'ston KVP da qorovul  2012-2015 yil - O\'rikzor MFY raisi.  2019 yil - sovuq mavsum - Sayhunobod tumani 29-sonli umumiy o\'rta ta\'lim maktabida xo\'jalik ishlar bo\'yicha direktor o\'rinbosari', '2023-11-14 07:21:43', '2023-11-14 07:21:43'),
(5, '29-maktab Psixolog', 'Mamatqulov Asrorjon Qodirqulovich', '+998994795982', 'Dushanba - Juma, 9:00 - 18:00, Tushlik 13:00-14:00', '1699957432.jpg', 'Tug‘ilgan yili: 23.01.1987  Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani  Millati: o‘zbek  Partiyaviyligi: yo‘q  Ma’lumoti: oliy  Tamomlagan: 2005-yil Sirdaryo Pedagogika kasb-hunar kulleji  Ma’lumoti bo‘yicha mutaxassisligi: Musiqa o\'qituvchisi', 'Psixologik xizmat haqida Nizom amaliyotchi psixolog o`z faoliyatida amal qiladigan asosiy hujjat hisoblanadi. Psixologik xizmat haqida Nizom Sobiq Ittifoqda 1989 yilda qabul qilingan. Ushbu Nizomga ko`ra psixologlar haftasiga 41 soat ishlashar edi. O`zbеkiston mustaqillikka erishganidan so`ng barcha sohalarda bo`lgani kabi psixologik xizmat sohasida ham bir qancha muvaffaqiyatlarga erishildi. Ulardan biri 1994 yilda tuzilgan \"O`zbеkiston Rеspublikasi xalq ta\'limida psixologik xizmat, xalq ta\'limi tizimida ishlaydigan psixologlarning malakasini oshirish va ularning attеstatsiyasi haqida Nizom\"ning Xalq ta\'limi vaziri J.G`.Yo`ldoshеv tomonidan tasdiqlanishi (1996 yil 5 aprеl) bo`ldi. 2001 yilda bu Nizomga o`zgartirish kiritildi. Nizomga yеttinchi bo`lim, kasb hunarga yo`naltirish bo`limi ham qo`shildi. Maktablarga maxsus kasb-hunarga yo`naltirish darslari kiritildi. Ushbu darslarni psixologlar o`ta boshlashdi. 2002 yilda Nizomga qayta o`zgartirish kiritildi. Bu o`zgarishning salbiy va ijobiy tomoni bo`ldi. Ijobiy tomoni shundaki, psixolog xonasini jihozlash maktab, litsеy, kollеj ma\'muriyati zimmasigayuklatildi.Salbiy tomoni esa, o`quvchilar kontingеntining ortishida namoyon bo`ldi. Maktabda o`quvchilar soni 1000 nafar va undan ortiq bo`lsa,bir shtat birligi psixolog ajratiladigan bo`ldi. Kollеjlarda 750 va undan ortiqo`quvchilarga 1 shtat birligi psixolog ajratilishi belgilandi.2010 yilda Nizomga qayta o`zgartirish kiritildi.', '2002-2005 yil. - Sirdaryo pedagogika kasb hunar kolleji talabasi  12005-2014 yil. - “Fayozbek Sa’dulla” Fermer xo‘jaligida ishchi  2017 yil. - Sirdaryo viloyati Sayxunobod tumanidagi 29-maktab Musiqa fani o\'quvchisi', '2023-11-14 07:23:52', '2023-11-14 07:23:52'),
(6, '29-maktab CHQBT rahbari', 'Nixalov Qaxramon Abriyevich', '+998994795982', 'Juma 10:00 dan 12:00 gacha', '1699957622.jpg', 'Tug‘ilgan yili: 16.11.1967  Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani  Millati: o‘zbek  Partiyaviyligi: yo‘q  Ma’lumoti: oliy  Tamomlagan: 1994-yil Guliston Davlat Universiteti (Kunduzgi)  Ma’lumoti bo‘yicha mutaxassisligi: Umim texnika fanlari va mexnat fani O\'qitvchisi', 'Ta’lim muassasasi direktori yoshlarning ChQBT va harbiy-vatanparvarlik ruhidagi tarbiyasini puxta tashkillashtirilishi, sifatli o‘tkazilishi, sohaga doir ijobiy natijalarga erishilishi, ta’lim muassasasi ixtiyoriga berilgan o‘quv qurol-yarog‘lari, kichik kalibrli va pnevmatik miltiqlar, ularda qo‘llaniladigan patronlar but saqlanishi uchun javob beradi. Ta’lim muassasasi direktori zimmasiga ChQBT sohasida quyidagi majburiyatlar yuklanadi: o‘quv-tarbiyaviy jarayonni o‘z vaqtida rejalashtirilishi, tashkil etilishi hamda ChQBT dasturini to‘liq va sifatli bajarilishini ta’minlash; ChQBT fani uchun xona, ushbu tayyorgarlikning amaliy masalalarini o‘tkazish uchun joy va maydonlar ajratish, shuningdek ushbu fanga oid o‘quv-moddiy bazani mazkur Nizom hamda ChQBT dasturida belgilangan talablarga muvofiq muntazam ravishda takomillashtirib borish choralarini ko‘rish; ta’lim muassasalarida “Shon-sharaf burchagi” yoki “Jasorat muzeyi”ni tashkil etish va ularning jihozlanishini qat’iy nazoratga olish; ta’lim muassasasi ixtiyoriga berilgan o‘quv qurol-yarog‘lar (kichik kalibrli va pnevmatik miltiqlar, ularda qo‘llaniladigan patronlar) hisobini tegishli yo‘riqnoma talablariga muvofiq yuritilishi, saqlanishi, ta’mirlanishi va hisobdan chiqarilishini tashkillashtirish, shuningdek har uch oyda bir marta ularning mavjudligi, hisobi to‘g‘ri yuritilayotgani, talab darajasida saqlanayotgani va texnik holatini shaxsan tekshirib borish; ChQBT fani rahbari va o‘qituvchisiga o‘quv-uslubiy jihatdan yordam berish, ushbu fanning boshqa fanlar bilan uzviyligini, shuningdek to‘garak ishlari tashkil etilishi va olib borilishini ta’minlash; ChQBT fani rahbari va o‘qituvchisi tomonidan o‘tkazilayotgan darslar va o‘quvchilarning o‘quv materiallarini o‘zlashtirishi sifatini muntazam tekshirib borish, ular bilan olib borilayotgan ChQBT va harbiy-vatanparvarlik ruhidagi tarbiyaviy ishlarning holatini o‘quv semestri davomida o‘tkaziladigan pedagoglar kengashlarda (yig‘ilish va majlislarda) muhokama etib borish;', '1988-1994 yil Guliston davlat universiteti talabasi.  1994-1997 yil Sayxunobod tumani 29 - umumiy o\'rta ta\'lim maktabida mehnat fani o\'qituvchisi.  1997-2003 yil Sayxunobod tumani 29 - umumiy o\'rta ta\'lim maktabida psixolog.  2003-2011 yil Sayxunobod 29 - umumiy o\'rta ta\'lim maktabida ma\'naviy- marifiy ishlar bo\'yicha direktor o\'rinbosari  2011-2015 yil Sayxunobod tumani 29 - umumiy o\'rta ta\'lim maktabi direktori  2015-2018 yil Sayxunobod tumani 29-umum talim maktabi mehnat fani o\'quvchisi  2018 yil- sovuq mavsum - Sayxunobod tumani 29-umum ta\'lim maktabida ChQBT rahbari.', '2023-11-14 07:27:02', '2023-11-14 07:27:02'),
(7, '29-maktab Xo\'jalik ishlar bo\'yicha direktor o\'rin bosari', 'Xodjanazarov Xudoynazar Sulaymonovich', '+998994795982', 'Juma 10:00 dan 12:00 gacha', '1699958030.jpg', 'Tug‘ilgan yili: 21.03.1971  Tug‘ilgan joyi: Sirdaryo viloyati, Sayxunobod tumani  Millati: o‘zbek  Partiyaviyligi: UzLDP Ma’lumoti: O\'rta maxsus', '...', '1996-1997 yil - Sayxunobod tumani xalq banki nazoratchisi 1998-2000 yil -.Bo\'ston savxo\'ziida xisobchi  2000-2002 yil - Bo\'ston savxo\'zi oilaviy pudradchi  2002-2008 yil - \"Xo\'janazar bobo \" F/X rahbari  2008-2012 yil - Bo\'ston KVP da qorovul  2012-2015 yil - O\'rikzor MFY raisi.  2019 yil - sovuq mavsum - Sayhunobod tumani 29-sonli umumiy o\'rta ta\'lim maktabida xo\'jalik ishlar bo\'yicha direktor o\'rinbosari', '2023-11-14 07:33:50', '2023-11-14 07:33:50');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `surname`, `contact`, `message`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'Ermanov', '+998940552101', 'wdadw', '2023-11-13 12:29:27', '2023-11-13 12:29:27'),
(2, 'Shohruh', 'Ermanov', '+998940552101', 'Salom', '2023-11-13 12:30:22', '2023-11-13 12:30:22');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_12_034545_create_statistics_table', 2),
(6, '2023_11_11_043933_create_teachers_table', 3),
(7, '2023_11_12_112552_create_sliders_table', 4),
(8, '2023_11_13_142728_create_pedagogicals_table', 5),
(9, '2023_11_13_151354_create_messages_table', 6),
(10, '2023_11_13_155856_create_posts_table', 7),
(11, '2023_11_13_164724_create_galleries_table', 8),
(12, '2023_11_14_065121_create_documents_table', 9),
(13, '2023_11_14_094408_create_leaders_table', 10),
(14, '2023_11_14_134548_create_holidays_table', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `pedagogicals`
--

CREATE TABLE `pedagogicals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pedagogicals`
--

INSERT INTO `pedagogicals` (`id`, `number`, `title`, `created_at`, `updated_at`) VALUES
(2, '3', 'Oliy toifali o\'qituvchilar', '2023-11-13 11:44:28', '2023-11-13 11:44:28'),
(3, '3', '1-toifali o\'qituvchil', '2023-11-13 11:44:50', '2023-11-13 11:44:50'),
(4, '7', '2-toifali o\'qituvchilar', '2023-11-13 11:45:08', '2023-11-13 11:45:08'),
(5, '14', 'Mutaxassis toifali', '2023-11-13 11:45:20', '2023-11-13 11:45:20');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Skills To Develop Your Child Memory', '1699893063.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,                             there live the blind texts.', '2023-11-13 13:31:03', '2023-11-13 13:31:03');

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btnName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `btnName`, `image`, `created_at`, `updated_at`) VALUES
(1, '29-SONLI UMUMIY O\'RTA TA\'LIM MAKTABI RASMIY SAYTI', 'Maktab haqida', '1699789506.jpg', '2023-11-12 08:45:06', '2023-11-12 08:52:16'),
(2, '29-SONLI UMUMIY O\'RTA TA\'LIM MAKTABI', 'Maktab haqida', '1699789999.jpg', '2023-11-12 08:53:19', '2023-11-12 08:53:19'),
(3, '29-SONLI UMUMIY O\'RTA TA\'LIM MAKTABIGA XUSH KELIBSIZ', 'Maktab haqida', '1699790040.jpg', '2023-11-12 08:54:00', '2023-11-12 08:54:00');

-- --------------------------------------------------------

--
-- Структура таблицы `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statistics`
--

INSERT INTO `statistics` (`id`, `icon`, `title`, `count`, `created_at`, `updated_at`) VALUES
(2, 'fas fa-chalkboard-teacher', 'O\'qituvchilar soni', 36, '2023-10-12 01:20:05', '2023-10-12 01:20:05'),
(3, 'fas fa-user-graduate', 'O\'quvchilar soni', 236, '2023-10-12 01:21:33', '2023-10-12 01:21:33'),
(4, 'fas fa-graduation-cap', 'Sinflar soni', 11, '2023-10-12 01:22:23', '2023-10-12 01:22:23'),
(5, 'fas fa-university', 'Talabalarimiz soni', 6, '2023-10-12 01:22:58', '2023-10-12 01:22:58');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instgram` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `job`, `description`, `image`, `telegram`, `facebook`, `instgram`, `created_at`, `updated_at`) VALUES
(2, 'Dushanova Zulayxo Sa\'dullayevna', 'Ona tili va Adabiyot', 'Sayxunobod tumanidagi 29-umum ta\'lim maktab Ona tili va Adabiyot o\'qituvchisi', '1699959534.jpg', '#!', '#!', '#!', '2023-11-12 08:17:29', '2023-11-14 07:58:54'),
(3, 'Rustamov Baxtiyor Nasrullayevich', 'Matematika', 'Sayxunobod tumanidagi 29-umum ta\'lim maktab Matematika o\'qituvchisi', '1699959752.JPG', '#!', '#!', '#!', '2023-11-14 08:02:32', '2023-11-14 08:02:32'),
(4, 'Bekmurodov Abror Abdukarimovich', 'Tarix', 'Sayxunobod tumanidagi 29-umum ta\'lim maktab Tarix o\'qituvchisi', '1699959829.jpg', '#!', '#!', '#!', '2023-11-14 08:03:49', '2023-11-14 08:03:49'),
(5, 'Xoliqulov Alisher Alimqulovich', 'Jismoniy tarbiya', 'Sayxunobod tumanidagi 29-umum ta\'lim maktab Jismoniy tarbiya o\'qituvchisi', '1699959935.jpg', '#!', '#!', '#!', '2023-11-14 08:05:35', '2023-11-14 08:05:35');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shohruh', 'shohruhermanov5@gmail.com', NULL, '$2y$10$hsOPNR7mZSQ9bdRRhlMMkOS/styy5ordhls6l6YesY./yA1IfOq1C', NULL, '2023-10-09 22:56:15', '2023-10-09 22:56:15');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `pedagogicals`
--
ALTER TABLE `pedagogicals`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `leaders`
--
ALTER TABLE `leaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `pedagogicals`
--
ALTER TABLE `pedagogicals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
