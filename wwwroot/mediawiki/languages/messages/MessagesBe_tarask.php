<?php
/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 *
 * @ingroup Language
 * @file
 *
 * @author EugeneZelenko
 * @author Siebrand
 * @author Red Winged Duck
 * @author Jim-by
 */

$skinNames = array(
	'standard'    => 'Клясычнае',
	'nostalgia'   => 'Настальгія',
	'cologneblue' => 'Кёльнскі смутак',
	'monobook'    => 'Монакніга',
	'myskin'      => 'MySkin',
	'chick'       => 'Цыпа',
	'simple'      => 'Простае',
	'modern'      => 'Сучаснае',
);

$bookstoreList = array(
	'OZ.by' => 'http://oz.by/search.phtml?what=books&isbn=$1',
	'Amazon.com' => 'http://www.amazon.com/exec/obidos/ISBN=$1'
);

$datePreferences = array(
	'default',
	'dmy',
	'ISO 8601',
);

$defaultDateFormat = 'dmy';

$dateFormats = array(
	'dmy time' => 'H:i',
	'dmy date' => 'j xg Y',
	'dmy both' => 'H:i, j xg Y',
);

$magicWords = array(
	'redirect'               => array( 0,    '#перанакіраваньне', '#redirect' ),
	'notoc'                  => array( 0,    '__NOTOC__', '__БЯЗЬ_ЗЬМЕСТУ__' ),
	'nogallery'              => array( 0,    '__NOGALLERY__', '__БЕЗ_ГАЛЕРЭІ__' ),
	'forcetoc'               => array( 0,    '__FORCETOC__', '__ЗЬМЕСТ_ПРЫМУСАМ__' ),
	'toc'                    => array( 0,    '__TOC__', '__ЗЬМЕСТ__' ),
	'noeditsection'          => array( 0,    '__NOEDITSECTION__', '__БЕЗ_РЭДАГАВАНЬНЯ_СЭКЦЫІ__' ),
	'currentmonth'           => array( 1,    'CURRENTMONTH', 'БЯГУЧЫ_МЕСЯЦ' ),
	'currentmonthname'       => array( 1,    'CURRENTMONTHNAME', 'НАЗВА_БЯГУЧАГА_МЕСЯЦА' ),
	'currentmonthnamegen'    => array( 1,    'CURRENTMONTHNAMEGEN', 'НАЗВА_БЯГУЧАГА_МЕСЯЦА_Ў_РОДНЫМ_СКЛОНЕ' ),
	'currentmonthabbrev'     => array( 1,    'CURRENTMONTHABBREV', 'СКАРОЧАНАЯ_НАЗВА_БЯГУЧАГА_МЕСЯЦА' ),
	'currentday'             => array( 1,    'CURRENTDAY', 'БЯГУЧЫ_ДЗЕНЬ' ),
	'currentday2'            => array( 1,    'CURRENTDAY2', 'БЯГУЧЫ_ДЗЕНЬ_2' ),
	'currentdayname'         => array( 1,    'CURRENTDAYNAME', 'НАЗВА_БЯГУЧАГА_ДНЯ' ),
	'currentyear'            => array( 1,    'CURRENTYEAR', 'БЯГУЧЫ_ГОД' ),
	'currenttime'            => array( 1,    'CURRENTTIME', 'БЯГУЧЫ_ЧАС' ),
	'currenthour'            => array( 1,    'CURRENTHOUR', 'БЯГУЧАЯ_ГАДЗІНА' ),
	'localmonth'             => array( 1,    'LOCALMONTH', 'ЛЯКАЛЬНЫ_МЕСЯЦ' ),
	'localmonthname'         => array( 1,    'LOCALMONTHNAME', 'НАЗВА_ЛЯКАЛЬНАГА_МЕСЯЦА' ),
	'localmonthnamegen'      => array( 1,    'LOCALMONTHNAMEGEN', 'НАЗВА_ЛЯКАЛЬНАГА_МЕСЯЦА_Ў_РОДНЫМ_СКЛОНЕ' ),
	'localmonthabbrev'       => array( 1,    'LOCALMONTHABBREV', 'СКАРОЧАНАЯ_НАЗВА_ЛЯКАЛЬНАГА_МЕСЯЦА' ),
	'localday'               => array( 1,    'LOCALDAY', 'ЛЯКАЛЬНЫ_ДЗЕНЬ' ),
	'localday2'              => array( 1,    'LOCALDAY2', 'ЛЯКАЛЬНЫ_ДЗЕНЬ_2' ),
	'localdayname'           => array( 1,    'LOCALDAYNAME', 'НАЗВА_ЛЯКАЛЬНАГА_ДНЯ' ),
	'localyear'              => array( 1,    'LOCALYEAR', 'ЛЯКАЛЬНЫ_ГОД' ),
	'localtime'              => array( 1,    'LOCALTIME', 'ЛЯКАЛЬНЫ_ЧАС' ),
	'localhour'              => array( 1,    'LOCALHOUR', 'ЛЯКАЛЬНАЯ_ГАДЗІНА' ),
	'numberofpages'          => array( 1,    'NUMBEROFPAGES', 'КОЛЬКАСЬЦЬ_СТАРОНАК' ),
	'numberofarticles'       => array( 1,    'NUMBEROFARTICLES', 'КОЛЬКАСЬЦЬ_АРТЫКУЛАЎ' ),
	'numberoffiles'          => array( 1,    'NUMBEROFFILES', 'КОЛЬКАСЬЦЬ_ФАЙЛАЎ' ),
	'numberofusers'          => array( 1,    'NUMBEROFUSERS', 'КОЛЬКАСЬЦЬ_УДЗЕЛЬНІКАЎ' ),
	'numberofedits'          => array( 1,    'NUMBEROFEDITS', 'КОЛЬКАСЬЦЬ_РЭДАГАВАНЬНЯЎ' ),
	'pagename'               => array( 1,    'PAGENAME', 'НАЗВА_СТАРОНКІ' ),
	'pagenamee'              => array( 1,    'PAGENAMEE', 'НАЗВА_СТАРОНКІ_2' ),
	'namespace'              => array( 1,    'NAMESPACE', 'ПРАСТОРА_НАЗВАЎ' ),
	'namespacee'             => array( 1,    'NAMESPACEE', 'ПРАСТОРА_НАЗВАЎ_2' ),
	'talkspace'              => array( 1,    'TALKSPACE', 'ПРАСТОРА_НАЗВАЎ_АБМЕРКАВАНЬНЯ' ),
	'talkspacee'             => array( 1,    'TALKSPACEE', 'ПРАСТОРА_НАЗВАЎ_АБМЕРКАВАНЬНЯ_2' ),
	'subjectspace'           => array( 1,    'SUBJECTSPACE', 'ARTICLESPACE', 'ПРАСТОРА_НАЗВАЎ_ПРАДМЕТУ', 'ПРАСТОРА_НАЗВАЎ_АРТЫКУЛА' ),
	'subjectspacee'          => array( 1,    'SUBJECTSPACEE', 'ARTICLESPACEE', 'ПРАСТОРА_НАЗВАЎ_ПРАДМЕТУ_2', 'ПРАСТОРА_НАЗВАЎ_АРТЫКУЛА_2' ),
	'fullpagename'           => array( 1,    'FULLPAGENAME', 'ПОЎНАЯ_НАЗВА_СТАРОНКІ' ),
	'fullpagenamee'          => array( 1,    'FULLPAGENAMEE', 'ПОЎНАЯ_НАЗВА_СТАРОНКІ_2' ),
	'subpagename'            => array( 1,    'SUBPAGENAME', 'НАЗВА_ПАДСТАРОНКІ' ),
	'subpagenamee'           => array( 1,    'SUBPAGENAMEE', 'НАЗВА_ПАДСТАРОНКІ_2' ),
	'basepagename'           => array( 1,    'BASEPAGENAME', 'НАЗВА_БАЗАВАЙ_СТАРОНКІ' ),
	'basepagenamee'          => array( 1,    'BASEPAGENAMEE', 'НАЗВА_БАЗАВАЙ_СТАРОНКІ_2' ),
	'talkpagename'           => array( 1,    'TALKPAGENAME', 'НАЗВА_СТАРОНКІ_АБМЕРКАВАНЬНЯ' ),
	'talkpagenamee'          => array( 1,    'TALKPAGENAMEE', 'НАЗВА_СТАРОНКІ_АБМЕРКАВАНЬНЯ_2' ),
	'subjectpagename'        => array( 1,    'SUBJECTPAGENAME', 'ARTICLEPAGENAME', 'НАЗВА_СТАРОНКІ_ПРАДМЕТУ', 'НАЗВА_СТАРОНКІ_АРТЫКУЛА' ),
	'subjectpagenamee'       => array( 1,    'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE', 'НАЗВА_СТАРОНКІ_ПРАДМЕТУ_2', 'НАЗВА_СТАРОНКІ_АРТЫКУЛА_2' ),
	'msg'                    => array( 0,    'MSG:', 'ПАВЕДАМЛЕНЬНЕ:' ),
	'subst'                  => array( 0,    'SUBST:', 'ПАДСТАНОЎКА:' ),
	'msgnw'                  => array( 0,    'MSGNW:', 'ПАВЕДАМЛЕНЬНЕ_БЯЗЬ_ВІКІ:' ),
	'img_thumbnail'          => array( 1,    'thumbnail', 'thumb', 'значак', 'міні' ),
	'img_manualthumb'        => array( 1,    'thumbnail=$1', 'thumb=$1', 'значак=$1', 'міні=$1' ),
	'img_right'              => array( 1,    'right', 'справа' ),
	'img_left'               => array( 1,    'left', 'зьлева' ),
	'img_none'               => array( 1,    'none', 'няма' ),
	'img_width'              => array( 1,    '$1px', '$1пкс' ),
	'img_center'             => array( 1,    'center', 'centre', 'цэнтар' ),
	'img_framed'             => array( 1,    'framed', 'enframed', 'frame', 'рамка' ),
	'img_page'               => array( 1,    'page=$1', 'page $1', 'старонка=$1', 'старонка $1' ),
	'img_top'                => array( 1,    'top', 'зьверху' ),
	'img_middle'             => array( 1,    'middle', 'пасярэдзіне' ),
	'img_bottom'             => array( 1,    'bottom', 'зьнізу' ),
	'sitename'               => array( 1,    'SITENAME', 'НАЗВА_САЙТУ' ),
	'ns'                     => array( 0,    'NS:', 'ПН:' ),
	'localurl'               => array( 0,    'LOCALURL:', 'ЛЯКАЛЬНЫ_АДРАС:' ),
	'localurle'              => array( 0,    'LOCALURLE:', 'ЛЯКАЛЬНЫ_АДРАС_2:' ),
	'server'                 => array( 0,    'SERVER', 'СЭРВЭР' ),
	'servername'             => array( 0,    'SERVERNAME', 'НАЗВА_СЭРВЭРА' ),
	'scriptpath'             => array( 0,    'SCRIPTPATH', 'ШЛЯХ_ДА_СКРЫПТА' ),
	'grammar'                => array( 0,    'GRAMMAR:', 'ГРАМАТЫКА:' ),
	'notitleconvert'         => array( 0,    '__NOTITLECONVERT__', '__NOTC__', '__НЕ_КАНВЭРТАВАЦЬ_НАЗВУ__' ),
	'nocontentconvert'       => array( 0,    '__NOCONTENTCONVERT__', '__NOCC__', '__НЕ_КАНВЭРТАВАЦЬ_ТЭКСТ__' ),
	'currentweek'            => array( 1,    'CURRENTWEEK', 'БЯГУЧЫ_ТЫДЗЕНЬ' ),
	'currentdow'             => array( 1,    'CURRENTDOW', 'БЯГУЧЫ_ДЗЕНЬ_ТЫДНЯ' ),
	'localweek'              => array( 1,    'LOCALWEEK', 'ЛЯКАЛЬНЫ_ТЫДЗЕНЬ' ),
	'localdow'               => array( 1,    'LOCALDOW', 'ЛЯКАЛЬНЫ_ДЗЕНЬ_ТЫДНЯ' ),
	'revisionid'             => array( 1,    'REVISIONID', 'ID_ВЭРСІІ' ),
	'revisionday'            => array( 1,    'REVISIONDAY', 'ДЗЕНЬ_ВЭРСІІ' ),
	'revisionday2'           => array( 1,    'REVISIONDAY2', 'ДЗЕНЬ_ВЭРСІІ_2' ),
	'revisionmonth'          => array( 1,    'REVISIONMONTH', 'МЕСЯЦ_ВЭРСІІ' ),
	'revisionyear'           => array( 1,    'REVISIONYEAR', 'ГОД_ВЭРСІІ' ),
	'revisiontimestamp'      => array( 1,    'REVISIONTIMESTAMP', 'МОМАНТ_ЧАСУ_ВЭРСІІ' ),
	'plural'                 => array( 0,    'PLURAL:', 'МНОЖНЫ_ЛІК:'),
	'fullurl'                => array( 0,    'FULLURL:', 'ПОЎНЫ_АДРАС:' ),
	'fullurle'               => array( 0,    'FULLURLE:', 'ПОЎНЫ_АДРАС_2:' ),
	'lcfirst'                => array( 0,    'LCFIRST:', 'ПЕРШАЯ_ЛІТАРА_МАЛАЯ:' ),
	'ucfirst'                => array( 0,    'UCFIRST:', 'ПЕРШАЯ_ЛІТАРА_ВЯЛІКАЯ:' ),
	'lc'                     => array( 0,    'LC:', 'МАЛЫМІ_ЛІТАРАМІ:' ),
	'uc'                     => array( 0,    'UC:', 'ВЯЛІКІМІ_ЛІТАРАМІ:' ),
	'raw'                    => array( 0,    'RAW:', 'НЕАПРАЦАВАНЫ:' ),
	'displaytitle'           => array( 1,    'DISPLAYTITLE', 'ПАКАЗВАЦЬ_НАЗВУ' ),
	'rawsuffix'              => array( 1,    'R', 'Н' ),
	'newsectionlink'         => array( 1,    '__NEWSECTIONLINK__', '__СПАСЫЛКА_НА_НОВУЮ_СЭКЦЫЮ__' ),
	'currentversion'         => array( 1,    'CURRENTVERSION', 'БЯГУЧАЯ_ВЭРСІЯ' ),
	'currenttimestamp'       => array( 1,    'CURRENTTIMESTAMP', 'МОМАНТ_ЧАСУ' ),
	'localtimestamp'         => array( 1,    'LOCALTIMESTAMP', 'ЛЯКАЛЬНЫ_МОМАНТ_ЧАСУ' ),
	'directionmark'          => array( 1,    'DIRECTIONMARK', 'DIRMARK', 'СЫМБАЛЬ_НАПРАМКУ_ПІСЬМА' ),
	'language'               => array( 0,    '#LANGUAGE:', '#МОВА:' ),
	'contentlanguage'        => array( 1,    'CONTENTLANGUAGE', 'CONTENTLANG', 'МОВА_ЗЬМЕСТУ' ),
	'pagesinnamespace'       => array( 1,    'PAGESINNAMESPACE:', 'PAGESINNS:', 'КОЛЬКАСЬЦЬ_СТАРОНАК_У_ПРАСТОРЫ_НАЗВАЎ:' ),
	'numberofadmins'         => array( 1,    'NUMBEROFADMINS', 'КОЛЬКАСЬЦЬ_АДМІНІСТРАТАРАЎ' ),
	'formatnum'              => array( 0,    'FORMATNUM', 'ФАРМАТАВАЦЬ_ЛІК' ),
	'defaultsort'            => array( 1,    'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:',
	                                         'САРТЫРОЎКА_ПА_ЗМОЎЧВАНЬНІ:', 'КЛЮЧ_САРТЫРОЎКІ_ПА_ЗМОЎЧВАНЬНІ:',
	                                         'САРТЫРОЎКА_Ў_КАТЭГОРЫІ_ПА_ЗМОЎЧВАНЬНІ:' ),
	'filepath'               => array( 0,    'FILEPATH:', 'ШЛЯХ_ДА_ФАЙЛА:' ),
	'tag'                    => array( 0,    'tag', 'тэг' ),
);

$namespaceNames = array(
	NS_MEDIA          => 'Мэдыя',
	NS_SPECIAL        => 'Спэцыяльныя',
	NS_MAIN           => '',
	NS_TALK           => 'Абмеркаваньне',
	NS_USER           => 'Удзельнік',
	NS_USER_TALK      => 'Гутаркі_ўдзельніка',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK   => 'Абмеркаваньне_$1',
	NS_IMAGE          => 'Выява',
	NS_IMAGE_TALK     => 'Абмеркаваньне_выявы',
	NS_MEDIAWIKI      => 'MediaWiki',
	NS_MEDIAWIKI_TALK => 'Абмеркаваньне_MediaWiki',
	NS_TEMPLATE       => 'Шаблён',
	NS_TEMPLATE_TALK  => 'Абмеркаваньне_шаблёну',
	NS_HELP           => 'Дапамога',
	NS_HELP_TALK      => 'Абмеркаваньне_дапамогі',
	NS_CATEGORY       => 'Катэгорыя',
	NS_CATEGORY_TALK  => 'Абмеркаваньне_катэгорыі'
);

$namespaceAliases = array(
	'Удзельніца'          => NS_USER,
	'Гутаркі_ўдзельніцы'  => NS_USER_TALK,
);

$specialPageAliases = array(
	'DoubleRedirects'           => array( 'Двайныя_перанакіраваньні' ),
	'BrokenRedirects'           => array( 'Некарэктныя_перанакіраваньні' ),
	'Disambiguations'           => array( 'Неадназначнасьці' ),
	'CreateAccount'             => array( 'Стварыць_рахунак' ),
	'Watchlist'                 => array( 'Сьпіс_назіраньня' ),
	'Recentchanges'             => array( 'Апошнія_зьмены' ),
	'Upload'                    => array( 'Загрузка' ),
	'Imagelist'                 => array( 'Сьпіс_файлаў' ),
	'Newimages'                 => array( 'Новыя_файлы' ),
	'Listusers'                 => array( 'Сьпіс_удзельнікаў' ),
	'Statistics'                => array( 'Статыстыка' ),
	'Randompage'                => array( 'Выпадковая_старонка' ),
	'Lonelypages'               => array( 'Старонкі-сіраціны' ),
	'Uncategorizedpages'        => array( 'Некатэгарызаваныя_старонкі' ),
	'Uncategorizedcategories'   => array( 'Некатэгарызаваныя_катэгорыі' ),
	'Uncategorizedimages'       => array( 'Некатэгарызаваныя_файлы' ),
	'Uncategorizedtemplates'    => array( 'Некатэгарызаваныя_шаблёны' ),
	'Wantedpages'               => array( 'Запатрабаваныя_старонкі', 'Некарэктныя_спасылкі' ),
	'Wantedcategories'          => array( 'Запатрабаваныя_катэгорыі' ),
	'Shortpages'                => array( 'Кароткія_старонкі' ),
	'Longpages'                 => array( 'Доўгія_старонкі' ),
	'Newpages'                  => array( 'Новыя_старонкі' ),
	'Ancientpages'              => array( 'Найстарэйшыя_старонкі' ),
	'Deadendpages'              => array( 'Тупіковыя_старонкі' ),
	'Protectedpages'            => array( 'Абароненыя_старонкі' ),
	'Protectedtitles'           => array( 'Забароненыя_старонкі' ),
	'Allpages'                  => array( 'Усе_старонкі' ),
	'Specialpages'              => array( 'Спэцыяльныя_старонкі' ),
	'Contributions'             => array( 'Унёсак' ),
	'Emailuser'                 => array( 'Даслаць_ліст' ),
	'Whatlinkshere'             => array( 'Спасылкі_на_старонку' ),
	'Categories'                => array( 'Катэгорыі' ),
	'Export'                    => array( 'Экспарт' ),
	'Version'                   => array( 'Вэрсія' ),
	'Allmessages'               => array( 'Сыстэмныя_паведамленьні' ),
	'Log'                       => array( 'Журналы_падзей' ),
	'Blockip'                   => array( 'Блякаваньне' ),
	'Import'                    => array( 'Імпарт' ),
	'Listredirects'             => array( 'Сьпіс_перанакіраваньняў' ),
	'Randomredirect'            => array( 'Выпадковае_перанакіраваньне' ),
	'Mypage'                    => array( 'Мая_старонка' ),
	'Mytalk'                    => array( 'Мае_размовы' ),
	'Mycontributions'           => array( 'Мой_унёсак' ),
	'Listadmins'                => array( 'Сьпіс_адміністратараў' ),
	'Listbots'                  => array( 'Сьпіс_робатаў' ),
	'Popularpages'              => array( 'Папулярныя_старонкі' ),
	'Search'                    => array( 'Пошук' ),
	'MergeHistory'              => array( 'Гісторыя_аб\'яднаньняў' ),
	'Filepath'                  => array( 'Шлях_да_файла' ),
);

$separatorTransformTable = array(',' => '.', '.' => ',' );

$linkTrail = '/^([абвгґджзеёжзійклмнопрстуўфхцчшыьэюяćčłńśšŭźža-z]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline'               => 'Падкрэсьліваць спасылкі:',
'tog-highlightbroken'         => 'Фарматаваць няісныя спасылкі <a href="" class="new">такім чынам</a> (інакш: такім чынам<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Выраўноўваць тэкст па шырыні старонкі',
'tog-hideminor'               => 'Хаваць дробныя зьмены ў сьпісе апошніх зьменаў',
'tog-extendwatchlist'         => 'Пашырыць сьпіс назіраньня, каб ён паказваў усе адпаведныя зьмены',
'tog-usenewrc'                => 'Удасканалены сьпіс апошніх зьменаў (патрабуе JavaScript)',
'tog-numberheadings'          => 'Аўтаматычная нумарацыя загалоўкаў',
'tog-showtoolbar'             => 'Паказваць панэль інструмэнтаў рэдагаваньня (патрабуе JavaScript)',
'tog-editondblclick'          => 'Рэдагаваць старонкі па падвойным шчоўканьні (JavaScript)',
'tog-editsection'             => 'Дазволіць рэдагаваньне асобных сэкцыяў па спасылках [рэдагаваць]',
'tog-editsectiononrightclick' => 'Рэдагаваць сэкцыі па правым шчоўканьні мышкай на загалоўку (JavaScript)',
'tog-showtoc'                 => 'Паказваць зьмест (для старонак з колькасьцю сэкцый болей за 3)',
'tog-rememberpassword'        => 'Запомніць мяне на гэтым кампутары',
'tog-editwidth'               => 'Поле рэдагаваньня ў поўную шырыню',
'tog-watchcreations'          => 'Дадаваць у мой сьпіс назіраньня старонкі, якія я буду ствараць',
'tog-watchdefault'            => 'Дадаваць у мой сьпіс назіраньня старонкі, якія я буду рэдагаваць',
'tog-watchmoves'              => 'Дадаваць у мой сьпіс назіраньня старонкі, якія я буду пераносіць',
'tog-watchdeletion'           => 'Дадаваць у мой сьпіс назіраньня старонкі, якія я буду выдаляць',
'tog-minordefault'            => 'Па змоўчаньні пазначаць усе зьмены дробнымі',
'tog-previewontop'            => 'Паказваць папярэдні прагляд артыкула над полем рэдагаваньня',
'tog-previewonfirst'          => 'Папярэдні прагляд пры першым рэдагаваньні',
'tog-nocache'                 => 'Адключыць кэшаваньне старонак',
'tog-enotifwatchlistpages'    => 'Паведамляць праз электронную пошту пра зьмены старонак ў маім сьпісе назіраньня',
'tog-enotifusertalkpages'     => 'Паведамляць праз электронную пошту пра зьмены маёй старонкі размоваў',
'tog-enotifminoredits'        => 'Паведамляць праз электронную пошту таксама пра дробныя зьмены старонак',
'tog-enotifrevealaddr'        => 'Не хаваць мой адрас электроннай пошты ў паведамленьнях',
'tog-shownumberswatching'     => 'Паказваць колькасьць назіральнікаў',
'tog-fancysig'                => 'Просты подпіс (без аўтаматычнай спасылкі)',
'tog-externaleditor'          => 'Па змоўчаньні выкарыстоўваць вонкавы рэдактар',
'tog-externaldiff'            => 'Выкарыстоўваць па змоўчаньні вонкавую праграму параўнаньня вэрсіяў',
'tog-showjumplinks'           => 'Актываваць дапаможныя спасылкі «перайсьці да»',
'tog-uselivepreview'          => 'Выкарыстоўваць хуткі папярэдні прагляд (JavaScript, экспэрымэнтальны)',
'tog-forceeditsummary'        => 'Папярэджваць пра адсутнасьць кароткага апісаньня зьменаў',
'tog-watchlisthideown'        => 'Хаваць мае праўкі ў сьпісе назіраньня',
'tog-watchlisthidebots'       => 'Хаваць праўкі робатаў у сьпісе назіраньня',
'tog-watchlisthideminor'      => 'Хаваць дробныя праўкі ў сьпісе назіраньня',
'tog-ccmeonemails'            => 'Дасылаць мне копіі лістоў, якія я дасылаю іншым удзельнікам і ўдзельніцам',
'tog-diffonly'                => 'Не паказваць зьмест старонкі пад параўнаньнем зьменаў',

'underline-always'  => 'Заўсёды',
'underline-never'   => 'Ніколі',
'underline-default' => 'Як у браўзэры',

'skinpreview' => '(Прагляд)',

# Dates
'sunday'        => 'нядзеля',
'monday'        => 'панядзелак',
'tuesday'       => 'аўторак',
'wednesday'     => 'серада',
'thursday'      => 'чацьвер',
'friday'        => 'пятніца',
'saturday'      => 'субота',
'sun'           => 'Нд',
'mon'           => 'Пн',
'tue'           => 'Аў',
'wed'           => 'Ср',
'thu'           => 'Чц',
'fri'           => 'Пт',
'sat'           => 'Сб',
'january'       => 'студзень',
'february'      => 'люты',
'march'         => 'сакавік',
'april'         => 'красавік',
'may_long'      => 'травень',
'june'          => 'чэрвень',
'july'          => 'ліпень',
'august'        => 'жнівень',
'september'     => 'верасень',
'october'       => 'кастрычнік',
'november'      => 'лістапад',
'december'      => 'сьнежань',
'january-gen'   => 'студзеня',
'february-gen'  => 'лютага',
'march-gen'     => 'сакавіка',
'april-gen'     => 'красавіка',
'may-gen'       => 'траўня',
'june-gen'      => 'чэрвеня',
'july-gen'      => 'ліпеня',
'august-gen'    => 'жніўня',
'september-gen' => 'верасьня',
'october-gen'   => 'кастрычніка',
'november-gen'  => 'лістапада',
'december-gen'  => 'сьнежня',
'jan'           => '01',
'feb'           => '02',
'mar'           => '03',
'apr'           => '04',
'may'           => '05',
'jun'           => '06',
'jul'           => '07',
'aug'           => '08',
'sep'           => '09',
'oct'           => '10',
'nov'           => '11',
'dec'           => '12',

# Bits of text used by many pages
'categories'            => 'Катэгорыі',
'pagecategories'        => '{{PLURAL:$1|Катэгорыя|Катэгорыі|Катэгорыі}}',
'category_header'       => 'Старонкі ў катэгорыі «$1»',
'subcategories'         => 'Падкатэгорыі',
'category-media-header' => 'Файлы ў катэгорыі «$1»',
'category-empty'        => "''Гэтая катэгорыя ня ўтрымлівае ні старонак, ні файлаў.''",

'mainpagetext'      => "<big>'''MediaWiki пасьпяхова ўсталяваная.'''</big>",
'mainpagedocfooter' => 'Глядзіце [http://meta.wikimedia.org/wiki/Help:Contents дапаможнік карыстальніка] для атрыманьня інфармацыі па карыстаньні вікі-праграмамі.

== З чаго пачаць ==
* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Сьпіс парамэтраў канфігурацыі]
* [http://www.mediawiki.org/wiki/Manual:FAQ Частыя пытаньні MediaWiki]
* [http://lists.wikimedia.org/mailman/listinfo//mediawiki-announce Рассылка паведамленьняў пра зьяўленьне новых вэрсіяў MediaWiki]',

'about'          => 'Пра',
'article'        => 'Артыкул',
'newwindow'      => '(адчыняецца ў новым акне)',
'cancel'         => 'Адмяніць',
'qbfind'         => 'Знайсьці',
'qbbrowse'       => 'Праглядзець',
'qbedit'         => 'Рэдагаваць',
'qbpageoptions'  => 'Гэтая старонка',
'qbpageinfo'     => 'Інфармацыя пра старонку',
'qbmyoptions'    => 'Мае старонкі',
'qbspecialpages' => 'Спэцыяльныя старонкі',
'moredotdotdot'  => 'Далей…',
'mypage'         => 'Мая старонка',
'mytalk'         => 'Мае размовы',
'anontalk'       => 'Гутаркі для гэтага IP-адраса',
'navigation'     => 'Навігацыя',
'and'            => 'і',

# Metadata in edit box
'metadata_help' => 'Мэтазьвесткі:',

'errorpagetitle'    => 'Памылка',
'returnto'          => 'Вярнуцца да $1.',
'tagline'           => 'Зьвесткі зь {{GRAMMAR:родны|{{SITENAME}}}}',
'help'              => 'Дапамога',
'search'            => 'Пошук',
'searchbutton'      => 'Пошук',
'go'                => 'Старонка',
'searcharticle'     => 'Старонка',
'history'           => 'Гісторыя старонкі',
'history_short'     => 'Гісторыя',
'updatedmarker'     => 'абноўлена з часу майго апошняга наведваньня',
'info_short'        => 'Інфармацыя',
'printableversion'  => 'Вэрсія для друку',
'permalink'         => 'Сталая спасылка',
'print'             => 'Друкаваць',
'edit'              => 'Рэдагаваць',
'editthispage'      => 'Рэдагаваць гэтую старонку',
'delete'            => 'Выдаліць',
'deletethispage'    => 'Выдаліць гэтую старонку',
'undelete_short'    => 'Аднавіць $1 {{PLURAL:$1|рэдагаваньне|рэдагаваньні|рэдагаваньняў}}',
'protect'           => 'Абараніць',
'protect_change'    => 'зьмяніць узровень абароны',
'protectthispage'   => 'Абараніць гэтую старонку',
'unprotect'         => 'Зьняць абарону',
'unprotectthispage' => 'Зьняць абарону з гэтай старонкі',
'newpage'           => 'Новая старонка',
'talkpage'          => 'Абмеркаваць гэтую старонку',
'talkpagelinktext'  => 'гутаркі',
'specialpage'       => 'Спэцыяльная старонка',
'personaltools'     => 'Асабістыя прылады',
'postcomment'       => 'Пракамэнтаваць',
'articlepage'       => 'Паказаць артыкул',
'talk'              => 'Гутаркі',
'views'             => 'Прагляды',
'toolbox'           => 'Інструмэнты',
'userpage'          => 'Паказаць старонку ўдзельніка',
'projectpage'       => 'Паказаць старонку праекту',
'imagepage'         => 'Паказаць старонку мэдыя-файла',
'mediawikipage'     => 'Паказаць старонку паведамленьня',
'templatepage'      => 'Паказаць старонку шаблёну',
'viewhelppage'      => 'Паказаць старонку дапамогі',
'categorypage'      => 'Паказаць старонку катэгорыі',
'viewtalkpage'      => 'Паказаць абмеркаваньне',
'otherlanguages'    => 'На іншых мовах',
'redirectedfrom'    => '(Перанакіраваная з $1)',
'redirectpagesub'   => 'Старонка-перанакіраваньне',
'lastmodifiedat'    => 'Гэтая старонка апошні раз рэдагавалася $2, $1.', # $1 date, $2 time
'viewcount'         => 'Гэтую старонку праглядалі $1 {{PLURAL:$1|раз|разы|разоў}}.',
'protectedpage'     => 'Абароненая старонка',
'jumpto'            => 'Перайсьці да:',
'jumptonavigation'  => 'навігацыя',
'jumptosearch'      => 'пошук',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'Пра {{GRAMMAR:вінавальны|{{SITENAME}}}}',
'aboutpage'         => 'Project:Пра {{GRAMMAR:вінавальны|{{SITENAME}}}}',
'bugreports'        => 'Паведамленьні пра памылкі',
'bugreportspage'    => 'Project:Паведамленьні пра памылкі',
'copyright'         => 'Зьмест старонкі падпадае пад ліцэнзію $1.',
'copyrightpagename' => 'Аўтарскія правы {{GRAMMAR:родны|{{SITENAME}}}}',
'copyrightpage'     => '{{ns:project}}:Аўтарскія правы',
'currentevents'     => 'Бягучыя падзеі',
'currentevents-url' => 'Project:Бягучыя падзеі',
'disclaimers'       => 'Адмова ад адказнасьці',
'disclaimerpage'    => 'Project:Адмова ад адказнасьці',
'edithelp'          => 'Дапамога ў рэдагаваньні',
'edithelppage'      => 'Help:Рэдагаваньне',
'faq'               => 'Частыя пытаньні',
'faqpage'           => 'Project:Частыя пытаньні',
'helppage'          => 'Help:Зьмест',
'mainpage'          => 'Галоўная старонка',
'policy-url'        => 'Project:Правілы',
'portal'            => 'Суполка',
'portal-url'        => 'Project:Суполка',
'privacy'           => 'Правілы адносна прыватнасьці',
'privacypage'       => 'Project:Правілы адносна прыватнасьці',
'sitesupport'       => 'Ахвяраваньні',
'sitesupport-url'   => 'Project:Ахвяраваньні',

'badaccess'        => 'Памылка: не адпаведны ўзровень правоў',
'badaccess-group0' => 'Вам не дазволена выканаць запытанае Вамі дзеяньне.',
'badaccess-group1' => 'Запытанае Вамі дзеяньне дазволенае толькі ўдзельнікам з групы $1.',
'badaccess-group2' => 'Запытанае Вамі дзеяньне дазволенае толькі ўдзельнікам адной з групаў $1.',
'badaccess-groups' => 'Запытанае Вамі дзеяньне дазволенае толькі ўдзельнікам адной з групаў $1.',

'versionrequired'     => 'Патрабуецца MediaWiki вэрсіі $1',
'versionrequiredtext' => 'Для карыстаньня гэтай старонкай патрабуецца MediaWiki вэрсіі $1. Глядзіце [[Special:Version|інфармацыю пра вэрсію]].',

'ok'                      => 'Добра',
'pagetitle'               => '$1 — {{SITENAME}}',
'retrievedfrom'           => 'Атрымана з «$1»',
'youhavenewmessages'      => 'Вы маеце $1 ($2).',
'newmessageslink'         => 'новыя паведамленьні',
'newmessagesdifflink'     => 'апошняя зьмена',
'youhavenewmessagesmulti' => 'Вы атрымалі новыя паведамленьні на $1',
'editsection'             => 'рэдагаваць',
'editold'                 => 'рэдагаваць',
'editsectionhint'         => 'Рэдагаваць сэкцыю «$1»',
'toc'                     => 'Зьмест',
'showtoc'                 => 'паказаць',
'hidetoc'                 => 'схаваць',
'thisisdeleted'           => 'Праглядзець ці аднавіць $1?',
'viewdeleted'             => 'Паказаць $1?',
'restorelink'             => '$1 {{PLURAL:$1|выдаленую зьмену|выдаленыя зьмены|выдаленых зьменаў}}',
'feedlinks'               => 'Стужка:',
'feed-invalid'            => 'Памылковы тып стужкі.',
'feed-unavailable'        => 'Стужкі не працуюць ў {{GRAMMAR:месны|{{SITENAME}}}}',
'site-rss-feed'           => '$1 — RSS-стужка',
'site-atom-feed'          => '$1 — Atom-стужка',
'page-rss-feed'           => '«$1» — RSS-стужка',
'page-atom-feed'          => '«$1» — Atom-стужка',
'red-link-title'          => '$1 (яшчэ не напісаны)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Старонка',
'nstab-user'      => 'Старонка ўдзельніка/ўдзельніцы',
'nstab-media'     => 'Мэдыя',
'nstab-special'   => 'Спэцыяльная',
'nstab-project'   => 'Старонка праекту',
'nstab-image'     => 'Файл',
'nstab-mediawiki' => 'Паведамленьне',
'nstab-template'  => 'Шаблён',
'nstab-help'      => 'Старонка дапамогі',
'nstab-category'  => 'Катэгорыя',

# Main script and global functions
'nosuchaction'      => 'Няма такога дзеяньня',
'nosuchactiontext'  => 'Дзеяньне, пазначанае ў радку URL, не распазнанае праграмным забесьпячэньнем {{GRAMMAR:родны|{{SITENAME}}}}',
'nosuchspecialpage' => 'Такой спэцыяльнай старонкі не існуе',
'nospecialpagetext' => "<big>'''Вы зьвярнуліся на няслушную спэцыяльную старонку.'''</big>

Сьпіс дзейных спэцыяльных старонак ёсьць на [[Special:Specialpages|{{int:specialpages}}]].",

# General errors
'error'                => 'Памылка',
'databaseerror'        => 'Памылка базы зьвестак',
'dberrortext'          => 'Выяўлена памылка сынтаксісу ў звароце да базы зьвестак.
Магчыма гэта памылка праграмнага забесьпячэньня.
Апошні запыт да базы:
<blockquote><tt>$1</tt></blockquote>
адбыўся з функцыі «<tt>$2</tt>».
MySQL вярнуў памылку «<tt>$3: $4</tt>».',
'dberrortextcl'        => 'Выяўлена памылка сынтаксісу ў звароце да базы зьвестак.
Апошні запыт да базы:
«$1»
адбыўся з функцыі «$2».
MySQL вярнуў памылку «$3: $4»',
'noconnect'            => 'Прабачце, {{SITENAME}} мае тэхнічныя цяжкасьці і ня можа далучыцца да сэрвэра базы зьвестак.<br />
$1',
'nodb'                 => 'Немагчыма выбраць базу зьвестак $1',
'cachederror'          => 'Наступнае — кэшаваная копія запытанай старонкі; магчыма, яна ўжо не адпавядае рэчаіснасьці.',
'laggedslavemode'      => 'Увага: старонка можа ня ўтрымліваць апошніх зьменаў.',
'readonly'             => 'База зьвестак заблякаваная',
'enterlockreason'      => 'Пазначце прычыну блякаваньня і вызначаны час разблякаваньня',
'readonlytext'         => 'База зьвестак заблякаваная для дадаваньня новых старонак і іншых зьменаў, верагодна з прычыны тэхнічнага абслугоўваньня, пасьля якога будзе адноўлена звычайная праца.

Адміністратар, які заблякаваў базу зьвестак, пакінуў наступнае тлумачэньне: $1',
'missingarticle'       => 'База зьвестак не знайшла тэксту старонкі «$1», якая павінна быць у базе.

Звычайна гэта адбываецца ў выніку звароту па састарэлай спасылцы ў журнале зьменаў, ці адрозьненьняў выдаленай старонкі.

Калі праблема ня ў гэтым, магчыма Вы знайшлі памылку ў праграмным забесьпячэньні.
Калі ласка, паведаміце пра гэта адміністратару, далучыўшы да паведамленьня URL.',
'readonly_lag'         => 'База зьвестак была аўтаматычна заблякаваная да выкананьня сынхранізацыі паміж першасным і другаснымі базамі зьвестак',
'internalerror'        => 'Унутраная памылка',
'internalerror_info'   => 'Унутраная памылка: $1',
'filecopyerror'        => 'Немагчыма cкапіяваць файл «$1» у «$2».',
'filerenameerror'      => 'Немагчыма перайменаваць файл «$1» у «$2».',
'filedeleteerror'      => 'Немагчыма выдаліць файл «$1».',
'directorycreateerror' => 'Немагчыма стварыць дырэкторыю «$1».',
'filenotfound'         => 'Немагчыма знайсьці файл «$1».',
'fileexistserror'      => 'Немагчыма запісаць у файл «$1»: файл існуе',
'unexpected'           => 'Нечаканае значэньне: «$1»=«$2».',
'formerror'            => 'Памылка: не атрымалася падаць форму',
'badarticleerror'      => 'Гэтае дзеяньне немагчыма выканаць на гэтай старонцы.',
'cannotdelete'         => 'Немагчыма выдаліць указаную старонку альбо выяву. (Магчыма, яна ўжо выдаленая кімсьці іншым.)',
'badtitle'             => 'Некарэктная назва',
'badtitletext'         => 'Запытаная назва старонкі няслушная ці пустая, альбо няслушна ўказаная міжмоўная ці міжвікі назва. Яна можа ўтрымліваць сымбалі, якія нельга ўжываць у назвах.',
'perfdisabled'         => 'Прабачце! Гэтая магчымасьць часова заблякаваная, у сувязі зь перагружанасьцю сэрвэра {{GRAMMAR:родны|{{SITENAME}}}}.',
'perfcached'           => 'Наступныя зьвесткі кэшаваныя і могуць быць састарэлымі.',
'perfcachedts'         => 'Наступныя зьвесткі кэшаваныя і апошні раз былі абноўленыя $1.',
'querypage-no-updates' => 'Абнаўленьні гэтай старонкі цяпер адключаныя. Зьвесткі ня будуць абнаўляцца.',
'wrong_wfQuery_params' => 'Няслушныя парамэтры для wfQuery()<br />
Функцыя: $1<br />
Запыт: $2',
'viewsource'           => 'Паказаць крыніцу',
'viewsourcefor'        => 'для $1',
'actionthrottled'      => 'Дзеяньне прытрыманае',
'actionthrottledtext'  => 'У межах барацьбы са спамам, Вы абмежаваныя ў выкананьні гэтага дзеяньня надта часта ў кароткі прамежак часу, і Вы перавысілі гэты ліміт. Калі ласка, паспрабуйце яшчэ раз празь некалькі хвілінаў.',
'protectedpagetext'    => 'Рэдагаваньне гэтай старонкі забароненае.',
'viewsourcetext'       => 'Вы можаце праглядаць і капіяваць пачатковы тэкст гэтай старонкі:',
'protectedinterface'   => 'Гэтая старонка ўтрымлівае інтэрфэйснае паведамленьне праграмнага забесьпячэньня, і яе зьмена забаронена.',
'editinginterface'     => "'''Увага:''' Вы рэдагуеце старонку, якая ўтрымлівае сыстэмнае паведамленьне MediaWiki.
Яе зьмена паўплывае на вонкавы выгляд інтэрфэйсу іншых карыстальнікаў.
Калі ласка, выкарыстоўвайце [http://translatewiki.net/wiki/Main_Page?setlang=be-tarask Betawiki] — праект для лякалізацыі MediaWiki.",
'sqlhidden'            => '(SQL-запыт схаваны)',
'cascadeprotected'     => 'Гэтая старонка абароненая ад рэдагаваньня, таму што яна ўключаная ў {{PLURAL:$1|наступную $1 старонку, якая была абароненая|наступныя $1 старонкі, якія былі абароненыя|наступныя $1 старонкі, якія былі абароненыя}} з актывізаванай «каскаднай» опцыяй:
$2',
'namespaceprotected'   => "Вы ня маеце правоў на рэдагаваньне старонак у прасторы назваў '''$1'''.",
'customcssjsprotected' => 'Вам забаронена рэдагаваць гэтую старонку, таму што яна ўтрымлівае пэрсанальныя ўстаноўкі іншага ўдзельніка.',
'ns-specialprotected'  => 'Немагчыма рэдагаваць спэцыяльныя старонкі.',
'titleprotected'       => "Стварэньне старонкі з такой назвай было забароненае ўдзельнікам [[User:$1|$1]].
Прычына забароны: ''$2''.",

# Login and logout pages
'logouttitle'                => 'Выхад з сыстэмы',
'logouttext'                 => '<strong>Вы выйшлі з сыстэмы.</strong>

Вы можаце працягваць працу ў {{GRAMMAR:месны|{{SITENAME}}}} ананімна, альбо можаце ўвайсьці ў сыстэму як той жа ці іншы карыстальнік.
Але некаторыя старонкі могуць адлюстроўвацца як быццам Вы ўсё яшчэ ў сыстэме. Каб гэтага пазьбегнуць трэба ачысьціць кэш браўзэра.',
'welcomecreation'            => '== Вітаем, $1! ==
Ваш рахунак быў створаны.
Не забудзьце зьмяніць Вашы [[Special:Preferences|ўстаноўкі]] ў {{GRAMMAR:месны|{{SITENAME}}}}.',
'loginpagetitle'             => 'Уваход у сыстэму',
'yourname'                   => 'Імя ўдзельніка/ўдзельніцы:',
'yourpassword'               => 'Пароль:',
'yourpasswordagain'          => 'Паўтарыце пароль:',
'remembermypassword'         => 'Запомніць мяне на гэтым кампутары',
'yourdomainname'             => 'Ваш дамэн:',
'externaldberror'            => 'Магчыма, адбылася памылка аўтэнтыфікацыі з дапамогай вонкавай базы зьвестак, ці Вам недазволена абнаўляць свой рахунак.',
'loginproblem'               => '<b>Узьнікла праблема пры ўваходзе ў сыстэму.</b><br />Паспрабуйце яшчэ раз!',
'login'                      => 'Увайсьці',
'loginprompt'                => 'Вы павінны дазволіць cookie для ўваходу ў {{GRAMMAR:вінавальны|{{SITENAME}}}}.',
'userlogin'                  => 'Стварэньне рахунку ці ўваход',
'logout'                     => 'Выйсьці',
'userlogout'                 => 'Выйсьці',
'notloggedin'                => 'Вы не ўвайшлі ў сыстэму',
'nologin'                    => 'Ня маеце рахунку? $1.',
'nologinlink'                => 'Стварыце рахунак',
'createaccount'              => 'Стварыць новы рахунак',
'gotaccount'                 => 'Ужо маеце рахунак? $1.',
'gotaccountlink'             => 'Увайдзіце',
'createaccountmail'          => 'па электроннай пошце',
'badretype'                  => 'Уведзеныя Вамі паролі не супадаюць.',
'userexists'                 => 'Выбранае Вамі імя ўдзельніка/ўдзельніцы ўжо выкарыстоўваецца кімсьці іншым. Калі ласка, выберыце іншае імя.',
'youremail'                  => 'Адрас электроннай пошты:',
'username'                   => 'Імя ўдзельніка/ўдзельніцы:',
'uid'                        => 'ID удзельніка/удзельніцы:',
'yourrealname'               => 'Сапраўднае імя:',
'yourlanguage'               => 'Мова інтэрфэйсу:',
'yournick'                   => 'Подпіс:',
'badsig'                     => 'Няслушны неапрацаваны подпіс; праверце HTML-тэгі.',
'badsiglength'               => 'Мянушка занадта доўгая; мусіць быць не даўжэй за $1 сымбаляў.',
'email'                      => 'Электронная пошта',
'prefs-help-realname'        => 'Сапраўднае імя паведамляць неабавязкова.
Калі Вы яго пазначыце, яно будзе выкарыстоўвацца для пазначэньня Вашай працы.',
'loginerror'                 => 'Памылка ўваходу',
'prefs-help-email'           => 'Адрас электроннай пошты — неабавязковы, але ён дазваляе іншым зьвязвацца з Вамі
праз старонкі ўдзельніка безь неабходнасьці раскрыцьця Вашых асабістых зьвестак.',
'prefs-help-email-required'  => 'Патрабуецца адрас электроннай пошты.',
'nocookiesnew'               => 'Рахунак быў створаны, але ў сыстэму Вы не ўвайшлі.
{{SITENAME}} выкарыстоўвае cookie для ўваходу ў сыстэму.
У Вашым браўзэры cookies адключаныя.
Калі ласка, дазвольце іх, а потым ўвайдзіце з новым іменем карыстальніка і паролем.',
'nocookieslogin'             => '{{SITENAME}} выкарыстоўвае cookie для ўваходу ў сыстэму.
У Вашым браўзэры cookie адключаныя.
Калі ласка, дазвольце іх і паспрабуйце яшчэ раз.',
'noname'                     => 'Вы пазначылі няслушнае імя ўдзельніка.',
'loginsuccesstitle'          => 'Пасьпяховы ўваход у сыстэму',
'loginsuccess'               => "'''Цяпер Вы ўвайшлі ў {{GRAMMAR:вінавальны|{{SITENAME}}}} як «$1».'''",
'nosuchuser'                 => 'Не існуе ўдзельніка ці ўдзельніцы «$1».
Праверце напісаньне, альбо выкарыстайце форму ніжэй, каб стварыць новы рахунак ўдзельніка ці ўдзельніцы.',
'nosuchusershort'            => 'Не існуе ўдзельніка ці ўдзельніцы «<nowiki>$1</nowiki>». Праверце напісаньне.',
'nouserspecified'            => 'Вы мусіце пазначыць імя ўдзельніка.',
'wrongpassword'              => 'Уведзены няслушны пароль. Калі ласка, паспрабуйце яшчэ раз.',
'wrongpasswordempty'         => 'Быў уведзены пусты пароль. Калі ласка, паспрабуйце яшчэ раз.',
'passwordtooshort'           => 'Ваш пароль недапушчальны альбо занадта кароткі.
Ён павінен утрымліваць ня меней за $1 {{PLURAL:$1|сымбаль|сымбалі|сымбаляў}} і адрозьнівацца ад імя ўдзельніка.',
'mailmypassword'             => 'Даслаць мне пароль',
'passwordremindertitle'      => 'Новы часовы пароль для {{GRAMMAR:родны|{{SITENAME}}}}',
'passwordremindertext'       => 'Нехта (магчыма Вы, з IP-адрасу $1) запытаў нас даслаць новы пароль для {{GRAMMAR:родны|{{SITENAME}}}} ($4).
Пароль для ўдзельніка «$2» цяпер «$3».
Вам патрэбна ўвайсьці ў сыстэму і адразу зьмяніць пароль.

Калі гэты запыт адправіў нехта іншы, альбо Вы ўспомнілі свой пароль і ўжо не хаціце яго зьмяніць, Вы можаце праігнараваць гэтае паведамленьне і працягваць карыстацца старым паролем.',
'noemail'                    => 'Удзельнік «$1» не пазначыў ніякага адрасу электроннай пошты.',
'passwordsent'               => 'Новы пароль быў дасланы на адрас электроннай пошты ўдзельніка «$1».
Калі ласка, увайдзіце ў сыстэму пасьля яго атрыманьня.',
'blocked-mailpassword'       => 'З Вашага IP-адраса забароненыя рэдагаваньні, а таму таксама не даступная функцыя аднаўленьня паролю дзеля прадухіленьня шкоды.',
'eauthentsent'               => 'Пацьверджаньне было дасланае на пазначаны адрас электроннай пошты.
У лісьце ўтрымліваюцца інструкцыі, па выкананьні якіх, Вы зможаце пацьвердзіць, што адрас сапраўды належыць Вам, і на гэты адрас будзе дасылацца пошта адсюль.',
'throttled-mailpassword'     => 'Напамін паролю ўжо быў дасланы на працягу {{PLURAL:$1|апошняй $1 гадзіны|апошніх $1 гадзінаў|апошніх $1 гадзінаў}}.
Для прадухіленьня злоўжываньняў, напамін будзе дасылацца не часьцей аднаго разу за $1 {{PLURAL:$1|гадзіну|гадзіны|гадзінаў}}.',
'mailerror'                  => 'Памылка пры адпраўцы электроннай пошты: $1',
'acct_creation_throttle_hit' => 'На жаль, Вы ўжо стварылі $1 {{PLURAL:$1|рахунак|рахункі|рахункаў}}. Болей нельга.',
'emailauthenticated'         => 'Ваш адрас электроннай пошты быў пацьверджаны $1.',
'emailnotauthenticated'      => 'Ваш адрас электроннай пошты яшчэ не пацьверджаны.
Электронная пошта для наступных магчымасьцяў дасылацца не будзе.',
'noemailprefs'               => 'Вы павінны пазначыць адрас электроннай пошты, каб актывізаваць гэтыя магчымасьці.',
'emailconfirmlink'           => 'Пацьвердзіць Ваш адрас электроннай пошты',
'invalidemailaddress'        => 'Уведзены адрас электроннай пошты не адпавядае фармату адрасоў электроннай пошты.
Калі ласка, увядзіце слушны адрас электроннай пошты ці ачысьціце гэтае поле.',
'accountcreated'             => 'Рахунак створаны',
'accountcreatedtext'         => 'Рахунак удзельніка для $1 быў створаны.',
'createaccount-title'        => 'Стварэньне рахунку ў {{GRAMMAR:месны|{{SITENAME}}}}',
'createaccount-text'         => 'Нехта стварыў рахунак «$2» у {{GRAMMAR:месны|{{SITENAME}}}} ($4) для Вашага адраса электроннай пошты. Пароль для гэтага рахунку — «$3». Вам трэба ўвайсьці і зьмяніць Ваш пароль зараз.

Вы можаце праігнараваць гэтае паведамленьне, калі гэты рахунак быў створаны памылкова.',
'loginlanguagelabel'         => 'Мова: $1',

# Password reset dialog
'resetpass'               => 'Выдаліць пароль рахунку',
'resetpass_announce'      => 'Вы ўвайшлі з дапамогай часовага паролю, дасланага праз электронную пошту.
Для завяршэньня ўваходу ў сыстэму Вы мусіце ўвесьці тут новы пароль:',
'resetpass_header'        => 'Сьцерці пароль',
'resetpass_submit'        => 'Наставіць пароль і увайсьці',
'resetpass_success'       => 'Ваш пароль быў пасьпяхова зьменены! Выконваецца ўваход у сыстэму…',
'resetpass_bad_temporary' => 'Няслушны часовы пароль.
Магчыма Вы ўжо зьмянілі пароль альбо запыталі новы часовы пароль.',
'resetpass_forbidden'     => 'Пароль ня можа быць зьменены ў {{GRAMMAR:месны|{{SITENAME}}}}',
'resetpass_missing'       => 'Няма зьвестак ў форме.',

# Edit page toolbar
'bold_sample'     => 'Тлусты тэкст',
'bold_tip'        => 'Тлусты тэкст',
'italic_sample'   => 'Курсіўны тэкст',
'italic_tip'      => 'Курсіўны тэкст',
'link_sample'     => 'Загаловак спасылкі',
'link_tip'        => 'Унутраная спасылка',
'extlink_sample'  => 'http://www.example.com загаловак спасылкі',
'extlink_tip'     => 'Вонкавая спасылка (не забывайцеся пачынаць з http:// )',
'headline_sample' => 'Тэкст загалоўку',
'headline_tip'    => 'Загаловак 2-га ўзроўню',
'math_sample'     => 'Зьмясьціце тут формулу',
'math_tip'        => 'Матэматычная формула (LaTeX)',
'nowiki_sample'   => 'Пішыце сюды нефарматаваны тэкст',
'nowiki_tip'      => 'Ігнараваць вікі-фарматаваньне',
'image_sample'    => 'Прыклад.jpg',
'image_tip'       => 'Укладзены файл',
'media_sample'    => 'Прыклад.ogg',
'media_tip'       => 'Спасылка на файл',
'sig_tip'         => 'Ваш подпіс і момант часу',
'hr_tip'          => 'Гарызантальная лінія (не выкарыстоўвайце часта)',

# Edit pages
'summary'                   => 'Кароткае апісаньне зьменаў',
'subject'                   => 'Тэма/назва',
'minoredit'                 => 'Гэта дробная праўка',
'watchthis'                 => 'Назіраць за гэтай старонкай',
'savearticle'               => 'Захаваць старонку',
'preview'                   => 'Прагляд',
'showpreview'               => 'Праглядзець',
'showlivepreview'           => 'Хуткі папярэдні прагляд',
'showdiff'                  => 'Паказаць зьмены',
'anoneditwarning'           => "'''Папярэджаньне:''' Вы не ўвайшлі. Ваш IP-адрас будзе запісаны ў гісторыі гэтай старонкі.",
'missingsummary'            => "'''Напамін:''' Вы не пазначылі кароткае апісаньне зьменаў.
Калі Вы націсьніце кнопку «Запісаць» яшчэ раз, Вашае рэдагаваньне будзе запісанае без апісаньня.",
'missingcommenttext'        => 'Калі ласка, увядзіце камэнтар ніжэй.',
'missingcommentheader'      => "'''Напамін:''' Вы не пазначылі тэмы гэтага камэнтара.
Калі Вы націсьніце кнопку «Захаваць» яшчэ раз, Ваш камэнтар захаваецца бяз тэмы.",
'summary-preview'           => 'Папярэдні прагляд апісаньня',
'subject-preview'           => 'Папярэдні прагляд загалоўку',
'blockedtitle'              => 'Удзельнік заблякаваны',
'blockedtext'               => "<big>'''Ваш рахунак ўдзельніка ці IP-адрас быў заблякаваны $1.'''</big>

Прычына гэтага: ''$2''.

Блякіроўка пачалася $8 і дзейнічае да $6 і выкарыстоўваецца супраць дзеяньняў $7.

Вы можаце скантактавацца з $1 ці адным зь іншых [[{{MediaWiki:Grouppage-sysop}}|адміністратараў]], каб абмеркаваць блякаваньне. Заўважце, што Вы ня зможаце ўжыць мажлівасьць «даслаць ліст па электроннай пошце», пакуль не пазначыце сапраўдны адрас электроннай пошты ў Вашых [[Special:Preferences|устаноўках]], што Вам не забаронена. Ваш IP-адрас — $3, ідэнтыфікатар блякіроўкі — #$5. Калі ласка, улучайце гэтую інфармацыю ва ўсе запыты, што Вы будзеце рабіць.",
'autoblockedtext'           => "Ваш IP-адрас быў аўтаматычна заблякаваны, таму што ён ужываўся іншым удзельнікам, які быў заблякаваны $1.

Прычына гэтага: ''$2''.

Блякіроўка пачалася $8 і дзейнічае да $6.

Вы можаце скантактавацца з $1 ці з адным зь іншых [[{{MediaWiki:Grouppage-sysop}}|адміністратараў]], каб абмеркаваць блякаваньне.

Заўважце, што Вы ня зможаце ужываць мажлівасьць «даслаць ліст праз электронную пошту», пакуль ня будзе пазначаны дзейны адрас электроннай пошты ў вашых [[Special:Preferences|устаноўках удзельніка]], што Вам не забаронена.

ID вашага блякаваньня — #$5. Калі ласка, улучайце гэты ID ва ўсе запыты, якія Вы робіце.",
'blockednoreason'           => 'прычына не пададзена',
'blockedoriginalsource'     => "Крыніца '''$1''' паказана ніжэй:",
'blockededitsource'         => "Тэкст '''Вашых зьменаў''' у '''$1''' паказаны ніжэй:",
'whitelistedittitle'        => 'Для рэдагаваньня патрабуецца ўваход у сыстэму',
'whitelistedittext'         => 'Вам трэба $1, каб рэдагаваць старонкі.',
'whitelistreadtitle'        => 'Для прагляду патрабуецца ўваход у сыстэму',
'whitelistreadtext'         => 'Вы павінны [[Special:Userlogin|ўвайсьці ў сыстэму]] для прагляду старонак.',
'whitelistacctitle'         => 'Вам не дазволена ствараць рахунак',
'whitelistacctext'          => 'Для стварэньня рахунку ў {{GRAMMAR:месны|{{SITENAME}}}} Вам трэба [[Special:Userlogin|зарэгістравацца]] і мець адпаведныя правы.',
'confirmedittitle'          => 'Для рэдагаваньня патрэбнае пацьверджаньне адрасу электроннай пошты',
'confirmedittext'           => 'Вы мусіце пацьвердзіць Ваш адрас электроннай пошты перад рэдагаваньнем старонак. Калі ласка, пазначце і пацьвердзіце адрас электроннай пошты праз Вашы [[Special:Preferences|ўстаноўкі]].',
'nosuchsectiontitle'        => 'Такой сэкцыі не існуе',
'nosuchsectiontext'         => 'Вы спрабуеце рэдагаваць сэкцыю, якой не існуе.
Паколькі сэкцыі $1 не існуе, няма куды захоўваць Вашыя рэдагаваньні.',
'loginreqtitle'             => 'Патрабуецца ўваход у сыстэму',
'loginreqlink'              => 'ўвайсьці',
'loginreqpagetext'          => 'Вы мусіце $1, каб праглядаць іншыя старонкі.',
'accmailtitle'              => 'Пароль адасланы.',
'accmailtext'               => 'Пароль для «$1» быў адасланы на адрас $2.',
'newarticle'                => '(Новы)',
'newarticletext'            => "Вы прыйшлі па спасылцы на старонку, якая яшчэ не існуе.
Каб стварыць яе, напішыце тэкст у полі ніжэй (глядзіце [[{{MediaWiki:Helppage}}|старонку дапамогі]] дзеля дадатковай інфармацыі).
Калі Вы трапілі сюды памылкова, націсьніце '''назад''' у вашым браўзэры.",
'anontalkpagetext'          => "----''Гэта старонка гутарак ананімнага ўдзельніка, які яшчэ не стварыў сабе рахунак ці не ўжывае яго. Таму мы вымушаныя ўжываць лічбавы IP-адрас дзеля ягонай ідэнтыфікацыі. Адзін IP-адрас можа выкарыстоўвацца некалькімі ўдзельнікамі. Калі Вы — ананімны ўдзельнік і лічыце, што атрымалі не прызначаныя Вам камэнтары, калі ласка, [[Special:Userlogin|зарэгіструйцеся ці ўвайдзіце ў сыстэму]], каб у будучыні пазьбегнуць магчымай блытаніны зь іншымі ананімнымі ўдзельнікамі.''

''This is the discussion page for an anonymous user who has not created an account yet or who does not use it. We therefore have to use the numerical IP address to identify him/her. Such an IP address can be shared by several users. If you are an anonymous user and feel that irrelevant comments have been directed at you, please [[Special:Userlogin|create an account or log in]] to avoid future confusion with other anonymous users.''",
'noarticletext'             => 'Зараз тэкст на гэтай старонцы адсутнічае. Вы можаце [[Special:Search/{{PAGENAME}}|пашукаць гэтую назву]] ў іншых старонках альбо [{{fullurl:{{NAMESPACE}}:{{PAGENAME}}|action=edit}} рэдагаваць гэтую старонку].',
'userpage-userdoesnotexist' => 'Рахунак удзельніка «$1» не зарэгістраваны. Калі ласка, удакладніце, ці жадаеце Вы стварыць/рэдагаваць гэтую старонку.',
'clearyourcache'            => "'''Заўвага:''' Каб пабачыць зьмены пасьля захаваньня, Вам можа спатрэбіцца ацысьціць кэш Вашага браўзэра. '''Mozilla / Firefox / Safari:''' трымайце ''Shift'' і націсьніце ''Reload'', ці націсьніце ''Ctrl-Shift-R'' (''Cmd-Shift-R'' на Apple Mac); '''IE:''' трымайце ''Ctrl'' і націсьніце ''Refresh'', ці націсьніце ''Ctrl-F5''; '''Konqueror:''': проста націсьніце кнопку ''Reload'', ці націсьніце ''F5''; карыстальнікам '''Opera''' можа спатрэбіцца цалкам ачысьціць кэш праз ''Tools→Preferences''.",
'usercssjsyoucanpreview'    => '<strong>Падказка:</strong> выкарыстоўвайце кнопку «Папярэдні прагляд», каб паспрабаваць новы код CSS/JS перад тым як яго запісаць.',
'usercsspreview'            => "'''Памятайце, што гэта толькі папярэдні прагляд Вашага CSS, ён яшчэ не запісаны!'''",
'userjspreview'             => "'''Памятайце, што гэта толькі папярэдні прагляд Вашага JavaScript, ён яшчэ не запісаны!'''",
'userinvalidcssjstitle'     => "'''Увага:''' няма тэмы афармленьня «$1».
Памятайце, што ўласныя старонкі .css і .js павінны мець назву, якая складаецца з малых літараў, напрыклад, {{ns:user}}:Хтосьці/monobook.css, а не {{ns:user}}:Хтосьці/Monobook.css.",
'updated'                   => '(Абноўлена)',
'note'                      => '<strong>Заўвага: </strong>',
'previewnote'               => '<strong>Гэта толькі папярэдні прагляд і зьмены яшчэ не былі захаваныя!</strong>',
'previewconflict'           => 'Гэта папярэдні прагляд тэксту зь верхняга вакна рэдагаваньня, так ён будзе выглядаць, калі Вы вырашыце яго захаваць.',
'session_fail_preview'      => '<strong>Выбачайце! Не атрымалася захаваць Вашую праўку праз тое, што былі страчаныя зьвесткі пра сэсію.
Калі ласка, паспрабуйце яшчэ раз. Калі памылка ня зьнікне, паспрабуйце выйсьці з сыстэмы і ўвайсьці ізноў.</strong>',
'session_fail_preview_html' => "<strong>Выбачайце! Не атрымалася захаваць Вашую праўку праз тое, што былі страчаныя зьвесткі пра сэсію.</strong>

''Таму што ў {{GRAMMAR:месны|{{SITENAME}}}} дазволена выкарыстоўваць чысты HTML, папярэдні прагляд быў адключаны для засьцярогі ад атакаў праз JavaScript.''

<strong>Калі гэта сапраўдная спроба рэдагаваньня, калі ласка, паспрабуйце яшчэ раз. Калі гэта не дапамагае, паспрабуйце выйсьці з сыстэмы і ўвайсьці ізноў.</strong>",
'token_suffix_mismatch'     => '<strong>Вашае рэдагаваньне было адхіленае, таму што Ваш кліент ня можа апрацоўваць знакі пунктуацыі ў акне рэдагаваньня.
Рэдагаваньне было скасаванае для таго, каб пазьбегнуць зьнішчэньня тэксту старонкі.
Такія памылкі здараюцца, калі Вы выкарыстоўваеце ананімны проксі-сэрвэр, які ўтрымлівае памылкі.</strong>',
'editing'                   => 'Рэдагаваньне: $1',
'editingsection'            => 'Рэдагаваньне: $1 (сэкцыя)',
'editingcomment'            => 'Рэдагаваньне: $1 (камэнтар)',
'editconflict'              => 'Канфлікт рэдагаваньня: $1',
'explainconflict'           => "Нехта зьмяніў старонку падчас Вашага рэдагаваньня.
У верхнім тэкставым акне знаходзіцца цяперашні зьмест старонкі.
Вашыя зьмены паказаныя ў ніжнім акне.
Вам трэба перанесьці Вашыя зьмены ў цяперашні тэкст.
Калі Вы націсьніце «Захаваць зьмены», будзе захаваны '''толькі''' тэкст верхняга вакна.",
'yourtext'                  => 'Ваш тэкст',
'storedversion'             => 'Захаваная вэрсія',
'nonunicodebrowser'         => '<strong>ПАПЯРЭДЖАНЬНЕ: Ваш браўзэр не працуе з кадаваньнем UTF-8 (Unicode).
У выніку гэтага ўсе сымбалі ня ўключаныя ў ASCII будуць замененыя на іх шаснаццаткавыя коды.</strong>',
'editingold'                => '<strong>ПАПЯРЭДЖАНЬНЕ: Вы рэдагуеце састарэлую вэрсію гэтай старонкі.
Калі Вы паспрабуеце захаваць яе, любыя зьмены, зробленыя пасьля гэтай вэрсіі, будуць страчаныя.</strong>',
'yourdiff'                  => 'Адрозьненьні',
'copyrightwarning'          => 'Калі ласка, зьвярніце ўвагу на тое, што ўсе дадаткі і зьмены ў {{GRAMMAR:месны|{{SITENAME}}}} разглядаюцца як выдадзеныя ў адпаведнасьці з умовамі ліцэнзіі $2 (глядзіце падрабязнасьці на $1). Калі Вы супраць таго, каб Вашыя матэрыялы неабмежавана рэдагавалася і распаўсюджвалася, не дадавайце іх.<br />
Вы таксама абавязуецеся, што Ваш матэрыял напісаны асабіста Вамі або ўзяты з грамадзкай уласнасьці альбо падобных вольных крыніцаў.
<strong>НЕЛЬГА БЕЗ ДАЗВОЛУ ДАДАВАЦЬ МАТЭРЫЯЛЫ, АБАРОНЕНЫЯ АЎТАРСКІМ ПРАВАМ!</strong>',
'copyrightwarning2'         => 'Калі ласка, заўважце, што ўвесь унёсак ў {{GRAMMAR:вінавальны|{{SITENAME}}}} можа рэдагавацца, зьмяняцца і выдаляцца іншымі ўдзельнікамі.
Калі Вы з гэтым ня згодныя, калі ласка, не зьмяшчайце сюды Вашыя тэксты.<br />
Разьмяшчэньнем тут тэкстаў, Вы дэкляруеце, што Вы зьяўляецеся іх аўтарам, ці Вы скапіявалі іх з крыніцы, якая дазваляе вольнае выкарыстаньне сваіх тэкстаў (дзеля падрабязнасьцяў глядзіце $1).

<strong>КАЛІ ЛАСКА, НЕ ЗЬМЯШЧАЙЦЕ ТУТ БЕЗ ДАЗВОЛУ МАТЭРЫЯЛЫ, ЯКІЯ АХОЎВАЮЦЦА АЎТАРСКІМ ПРАВАМ!</strong>',
'longpagewarning'           => "<strong>ПАПЯРЭДЖАНЬНЕ: Гэтая старонка утрымлівае $1 {{PLURAL:$1|кілябайт|кілябайты|кілябайтаў}}; некаторыя браўзэры могуць мець праблемы пры адлюстраваньні старонак аб'ёмам болей 32кб.
Калі гэта магчыма, паспрабуйце падзяліць зьмест старонкі на больш дробныя часткі.</strong>",
'longpageerror'             => "<strong>ПАМЫЛКА: Аб'ём тэксту, які Вы спрабуеце запісаць складае $1 {{PLURAL:$1|кілябайт|кілябайты|кілябайтаў}}. Аб'ём старонкі ня можа перавышаць $2 {{PLURAL:$2|кілябайт|кілябайты|кілябайтаў}}. Старонка ня можа быць захаваная.</strong>",
'readonlywarning'           => '<strong>ПАПЯРЭДЖАНЬНЕ: База зьвестак была заблякаваная для тэхнічнага абслугоўваньня, таму немагчыма зараз захаваць Вашыя зьмены.

Паспрабуйце захаваць тэкст на Вашым кампутары, а потым захаваць сюды.</strong>',
'protectedpagewarning'      => '<strong>ПАПЯРЭДЖАНЬНЕ: Гэтая старонка была абароненая, таму толькі адміністратары могуць рэдагаваць яе.</strong>',
'semiprotectedpagewarning'  => "'''Заўвага:''' Гэтая старонка была абароненая і рэдагаваць яе могуць толькі зарэгістраваныя ўдзельнікі.",
'cascadeprotectedwarning'   => "'''Папярэджаньне:''' Гэтая старонка абароненая, толькі ўдзельнікі з правамі адміністратараў могуць рэдагаваць яе, таму што яна ўключаная ў {{PLURAL:$1|наступную каскадна-абароненую старонку|наступныя каскадна-абароненыя старонкі}}:",
'titleprotectedwarning'     => '<strong>ПАПЯРЭДЖАНЬНЕ: Гэтая старонка была абароненая і стварыць яе могуць толькі зарэгістраваныя ўдзельнікі.</strong>',
'templatesused'             => 'На гэтай старонцы выкарыстаныя наступныя шаблёны:',
'templatesusedpreview'      => 'У гэтым праглядзе выкарыстаныя наступныя шаблёны:',
'templatesusedsection'      => 'У гэтай сэкцыі выкарыстаныя наступныя шаблёны:',
'template-protected'        => '(абаронены)',
'template-semiprotected'    => '(часткова абароненая)',
'nocreatetitle'             => 'Стварэньне старонак абмежаванае',
'nocreatetext'              => 'У {{GRAMMAR:месны|{{SITENAME}}}} абмежаванае стварэньне новых старонак.
Вы можаце вярнуцца і рэдагаваць існуючую старонку, альбо [[Special:Userlogin|ўвайсьці ў сыстэму ці стварыць рахунак]].',
'nocreate-loggedin'         => 'Вы ня маеце дазволу ствараць новыя старонкі ў {{GRAMMAR:месны|{{SITENAME}}}}.',
'permissionserrors'         => 'Памылкі дазволаў',
'permissionserrorstext'     => 'Вы ня маеце дазволу на гэтае дзеяньне па {{PLURAL:$1|наступнай прычыне|наступных прычынах}}:',
'recreate-deleted-warn'     => "'''ПАПЯРЭДЖАНЬНЕ: Вы ствараеце старонку, якая раней была выдаленая.'''

Упэўніцеся, што стварэньне гэтай старонкі неабходнае.
Ніжэй знаходзіцца журнал выдаленьняў гэтай старонкі:",

# "Undo" feature
'undo-success' => 'Рэдагаваньне можа быць адмененае. Калі ласка, параўнайце адрозьненьні паміж вэрсіямі, каб упэўніцца, што гэта адпаведныя зьмены, а потым запішыце зьмены для сканчэньня рэдагаваньня.',
'undo-failure' => 'Рэдагаваньне ня можа быць скасаванае праз канфлікт паміж папярэднімі рэдагаваньнямі.',
'undo-summary' => 'Скасаваньне праўкі $1 удзельніка [[Special:Contributions/$2|$2]] ([[User talk:$2|гутаркі]])',

# Account creation failure
'cantcreateaccounttitle' => 'Немагчыма стварыць рахунак',
'cantcreateaccount-text' => "Стварэньне рахункаў з гэтага IP-адрасу ('''$1''') было заблякаванае [[User:$3|$3]].

Прычына блякаваньня пададзеная $3: ''$2''",

# History pages
'viewpagelogs'        => 'Паказаць журналы падзей для гэтай старонкі',
'nohistory'           => 'Гісторыя зьменаў для гэтай старонкі адсутнічае.',
'revnotfound'         => 'Вэрсія ня знойдзеная',
'revnotfoundtext'     => 'Ранейшая вэрсія гэтай старонкі ня знойдзеная. Праверце спасылку, празь якую Вы спрабавалі перайсьці на гэтую старонку.',
'loadhist'            => 'Загрузка гісторыі старонкі',
'currentrev'          => 'Бягучая вэрсія',
'revisionasof'        => 'Вэрсія ад $1',
'revision-info'       => 'Вэрсія ад $1, аўтар $2',
'previousrevision'    => '←Папярэдняя вэрсія',
'nextrevision'        => 'Наступная вэрсія→',
'currentrevisionlink' => 'Бягучая вэрсія',
'cur'                 => 'бяг',
'next'                => 'наступная',
'last'                => 'папярэдняя',
'orig'                => 'арыг',
'page_first'          => 'першая',
'page_last'           => 'апошняя',
'histlegend'          => 'Параўнаньне: пазначце кропкамі дзьве вэрсіі для параўнаньня і націсьніце enter альбо кнопку ўнізе.<br />
Тлумачэньне: (бяг) = адрозьненьні ад бягучай вэрсіі, (папярэдняя) = адрозьненьні ад папярэдняй вэрсіі, д = дробная праўка.',
'deletedrev'          => '[выдаленая]',
'histfirst'           => 'найстарэйшыя',
'histlast'            => 'найнавейшыя',
'historysize'         => '($1 {{PLURAL:$1|байт|байты|байтаў}})',
'historyempty'        => '(пуста)',

# Revision feed
'history-feed-title'          => 'Гісторыя зьменаў',
'history-feed-description'    => 'Гісторыя зьменаў гэтай старонкі',
'history-feed-item-nocomment' => '$1 у $2', # user at time
'history-feed-empty'          => 'Запатрабаванай старонкі не існуе.
Магчыма яна выдалена альбо яе перанесьлі.
Паспрабуйце [[{{ns:special}}:Search|пашукаць]] гэтую старонку.',

# Revision deletion
'rev-deleted-comment'         => '(камэнтар выдалены)',
'rev-deleted-user'            => '(імя ўдзельніка выдаленае)',
'rev-deleted-event'           => '(запіс з журнала падзей выдалены)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks">
Гэтая вэрсія старонкі была выдаленая з агульнадаступных архіваў.
Магчыма, падрабязнасьці могуць быць знойдзеныя ў [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} журнале выдаленьняў].</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks">
Гэтая вэрсія старонкі была выдаленая з агульнадаступных архіваў.
Вы маеце магчымасьць яе прагляду, таму што зьяўляецеся адміністратарам {{GRAMMAR:родны|{{SITENAME}}}}.
Магчыма, падрабязнасьці могуць быць знойдзеныя ў [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} журнале выдаленьняў].</div>',
'rev-delundel'                => 'паказаць/схаваць',
'revisiondelete'              => 'Выдаліць/аднавіць вэрсіі',

# Merge log
'mergelog' => "Журнал аб'яднаньняў",

# Diffs
'history-title'           => 'Гісторыя зьменаў старонкі «$1»',
'difference'              => '(Адрозьненьні паміж вэрсіямі)',
'lineno'                  => 'Радок $1:',
'compareselectedversions' => 'Параўнаць выбраныя вэрсіі',
'editundo'                => 'адмяніць',
'diff-multi'              => '($1 {{PLURAL:$1|прамежная вэрсія не паказаная|прамежныя вэрсіі не паказаныя|прамежных вэрсіяў не паказаныя}}.)',

# Search results
'searchresults'    => 'Вынікі пошуку',
'searchresulttext' => 'Для атрыманьня больш падрабязнай інфармацыі пра пошук у {{GRAMMAR:месны|{{SITENAME}}}}, глядзіце [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'noexactmatch'     => "'''Старонкі з гэткай назвай не існуе.''' Вы можаце '''[[:$1|стварыць гэтую старонку]]'''.",
'prevn'            => 'папярэднія $1',
'nextn'            => 'наступныя $1',
'viewprevnext'     => 'Паказаць ($1) ($2) ($3)',
'showingresults'   => "Ніжэй {{PLURAL:$1|паданы|паданыя|паданыя}} да '''$1''' {{PLURAL:$1|выніку|вынікаў|вынікаў}}, пачынаючы з #<b>$2</b>.",
'powersearch'      => 'Пошук',

# Preferences page
'preferences'             => 'Устаноўкі',
'mypreferences'           => 'Мае ўстаноўкі',
'prefs-edits'             => 'Колькасьць рэдагаваньняў:',
'prefsnologin'            => 'Вы не ўвайшлі ў сыстэму',
'qbsettings-none'         => 'Не паказваць',
'qbsettings-fixedleft'    => 'Замацаваная зьлева',
'qbsettings-fixedright'   => 'Замацаваная справа',
'qbsettings-floatingleft' => 'Рухомая зьлева',
'changepassword'          => 'Зьмяніць пароль',
'skin'                    => 'Афармленьне',
'dateformat'              => 'Фармат даты',
'datetime'                => 'Дата і час',
'math_unknown_error'      => 'невядомая памылка',
'math_unknown_function'   => 'невядомая функцыя',
'math_syntax_error'       => 'сынтаксычная памылка',
'prefs-rc'                => 'Апошнія зьмены',
'prefs-watchlist'         => 'Сьпіс назіраньня',
'prefs-misc'              => 'Рознае',
'saveprefs'               => 'Захаваць',
'resetprefs'              => 'Скінуць',
'oldpassword'             => 'Стары пароль:',
'newpassword'             => 'Новы пароль:',
'retypenew'               => 'Паўтарыце новы пароль:',
'textboxsize'             => 'Рэдагаваньне',
'rows'                    => 'Радкоў:',
'columns'                 => 'Слупкоў:',
'searchresultshead'       => 'Пошук',
'resultsperpage'          => 'Колькасьць вынікаў на старонцы:',
'contextlines'            => 'Колькасьць радкоў для паказу:',
'contextchars'            => 'Колькасьць сымбаляў на радок:',
'savedprefs'              => 'Вашыя ўстаноўкі былі захаваныя.',
'timezonelegend'          => 'Часавы пояс',
'localtime'               => 'Мясцовы час',
'servertime'              => 'Бягучы час на сэрвэры',
'guesstimezone'           => 'Запоўніць з браўзэра',
'allowemail'              => 'Дазволіць атрыманьне лістоў ад іншых удзельнікаў і ўдзельніц',
'defaultns'               => 'Па змоўчаньні, шукаць у наступных прасторах назваў:',
'default'                 => 'па змоўчаньні',
'files'                   => 'Файлы',

# User rights
'userrights-user-editname'      => 'Увядзіце імя ўдзельніка:',
'editusergroup'                 => 'Рэдагаваць групы ўдзельнікаў і ўдзельніц',
'saveusergroups'                => 'Захаваць групы ўдзельнікаў і ўдзельніц',
'userrights-reason'             => 'Прычына зьмены:',
'userrights-available-add'      => 'Вы можаце дадаваць удзельнікаў і ўдзельніц у {{PLURAL:$2|групу|||групы}}: $1.',
'userrights-available-add-self' => 'Вы можаце дадаваць сябе ў {{PLURAL:$2|групу|групы}}: $1.',

# Groups
'group'            => 'Група:',
'group-bot'        => 'Робаты',
'group-sysop'      => 'Адміністрацыя',
'group-bureaucrat' => 'Бюракраты',
'group-all'        => '(усе)',

'group-bot-member'        => 'Робат',
'group-sysop-member'      => 'Адміністратар/Адміністратарка',
'group-bureaucrat-member' => 'Бюракрат',

'grouppage-bot'   => '{{ns:project}}:Робаты',
'grouppage-sysop' => '{{ns:project}}:Адміністрацыя',

# User rights log
'rightslog' => 'Журнал правоў удзельнікаў',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|зьмена|зьмены|зьменаў}}',
'recentchanges'                     => 'Апошнія зьмены',
'recentchangestext'                 => 'Сачыце за апошнімі зьменамі ў {{GRAMMAR:месны|{{SITENAME}}}} на гэтай старонцы.',
'recentchanges-feed-description'    => 'Сачыць за апошнімі зьменамі ў {{GRAMMAR:месны|{{SITENAME}}}} праз гэтую стужку.',
'rcnote'                            => "Ніжэй {{PLURAL:$1|пададзена '''$1''' апошняя зьмена|пададзеныя '''$1''' апошнія зьмены|пададзеныя '''$1''' апошніх зьменаў}} за {{PLURAL:$2|апошні '''$2''' дзень|апошнія '''$2''' дні|апошнія '''$2''' дзён}}, па стане на $3.",
'rcnotefrom'                        => "Ніжэй знаходзяцца зьмены з '''$2''' (да '''$1''' на старонку).",
'rclistfrom'                        => 'Паказаць зьмены з $1',
'rcshowhideminor'                   => '$1 дробныя праўкі',
'rcshowhidebots'                    => '$1 робатаў',
'rcshowhideliu'                     => '$1 зарэгістраваных',
'rcshowhideanons'                   => '$1 ананімаў',
'rcshowhidepatr'                    => '$1 патруляваныя праўкі',
'rcshowhidemine'                    => '$1 мае праўкі',
'rclinks'                           => 'Паказаць апошнія $1 зьменаў за мінулыя $2 дзён<br />$3',
'diff'                              => 'розьн',
'hist'                              => 'гіст',
'hide'                              => 'схаваць',
'show'                              => 'паказаць',
'minoreditletter'                   => 'д',
'newpageletter'                     => 'Н',
'boteditletter'                     => 'р',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|назіральнік|назіральнікі|назіральнікаў}}]',
'newsectionsummary'                 => '/* $1 */ новая сэкцыя',

# Recent changes linked
'recentchangeslinked'          => 'Зьвязаныя праўкі',
'recentchangeslinked-title'    => 'Зьвязаныя праўкі для «$1»',
'recentchangeslinked-noresult' => 'Не было ніякіх зьменаў на зьвязаных старонках за вызначаны пэрыяд.',

# Upload
'upload'               => 'Загрузіць файл',
'uploadbtn'            => 'Загрузіць файл',
'reupload'             => 'Загрузіць зноў',
'reuploaddesc'         => 'Адмяніць загрузку і вярнуцца да формы загрузкі',
'uploadnologin'        => 'Вы не ўвайшлі ў сыстэму',
'uploadtext'           => "'''Перад тым, як загрузіць файл:'''

* Азнаёмцеся з '''[[{{MediaWiki:Policy-url}}|правіламі выкарыстаньня файлаў]]'''.
* Праверце з дапамогай '''[[Special:Imagelist|сьпісу файлаў]]''', ці не загружаны гэты файл з іншай назвай.
* Выкарыстоўвайце наступныя '''фарматы''': JPG — для фотаздымкаў; GIF — для анімацыі; PNG — для іншых выяваў; OGG — для аўдыёфайлаў.
* Давайце файлам '''зразумелыя назвы''', якія адлюстроўваюць іх зьмест. Напрыклад: ''Janka Kupala, 1910.jpg'' замест ''JK1.jpg''. Назву файла '''немагчыма''' зьмяніць пасьля загрузкі.
* Пытайцеся '''дазволу''' на публікацыю фотаздымка ва ўсіх людзей, якія там прысутнічаюць.

'''Пасьля таго, як выява загружаная:'''

* '''Абавязкова''' дадайце:
** '''дэталёвае апісаньне зьместу''';
** '''крыніцу''': файл створаны Вамі; адсканаваны з кнігі ''X''; узяты з Інтэрнэт па адрасу ''Y'';
** для файлаў, якія зроблены '''ня''' Вамі, укажыце, ці атрымалі Вы '''дазвол''' на выкарыстаньне гэтага файла ў {{GRAMMAR:месны|{{SITENAME}}}};
** '''ліцэнзіі''', згодна ўмоваў якіх магчыма распаўсюджваць файл.
* '''Выкарыстоўвайце файл''' у артыкуле(ах). Напрыклад: <code><nowiki>[[</nowiki>{{ns:image}}:file.jpg<nowiki>]]</nowiki></code> ці <code><nowiki>[[</nowiki>{{ns:image}}:file.jpg<nowiki>|thumb|200px|Апісаньне]]</nowiki></code> — для выяваў; <code><nowiki>[[</nowiki>{{ns:media}}:file.ogg<nowiki>]]</nowiki></code> — для аўдыёфайлаў.",
'upload-permitted'     => 'Дазволеныя тыпы файлаў: $1.',
'upload-prohibited'    => 'Забароненыя тыпы файлаў: $1.',
'uploadlog'            => 'журнал загрузак',
'uploadlogpage'        => 'Журнал загрузак',
'uploadlogpagetext'    => 'Сьпіс апошніх загружаных файлаў.',
'filename'             => 'Назва файла',
'filedesc'             => 'Апісаньне',
'fileuploadsummary'    => 'Апісаньне:',
'filesource'           => 'Крыніца',
'uploadedfiles'        => 'Загружаныя файлы',
'ignorewarning'        => 'Праігнараваць папярэджаньне і захаваць файл',
'ignorewarnings'       => 'Ігнараваць усе папярэджаньні',
'illegalfilename'      => 'Назва файла «$1» зьмяшчае сымбалі, якія нельга выкарыстоўваць у назвах старонак. Калі ласка, зьмяніце назву файла і паспрабуйце загрузіць яго зноў.',
'badfilename'          => 'Назва файла была зьмененая на «$1».',
'filetype-banned-type' => "'''«.$1»''' — забаронены тып файлаў. Дазволеныя тыпы файлаў: $2.",
'filetype-missing'     => 'Файл ня мае пашырэньня (напрыклад, «.jpg»).',
'fileexists-thumb'     => "<center>'''Існуючы файл'''</center>",
'savefile'             => 'Захаваць файл',
'uploadedimage'        => 'загружаная «[[$1]]»',
'overwroteimage'       => 'загружаная новая вэрсія «[[$1]]»',
'uploaddisabled'       => 'Загрузка файлаў забароненая',
'uploaddisabledtext'   => 'Загрузка файлаў забароненая ў {{GRAMMAR:месны|{{SITENAME}}}}.',
'uploadvirus'          => 'Файл утрымлівае вірус! Падрабязнасьці: $1',
'watchthisupload'      => 'Назіраць за гэтай старонкай',
'filename-bad-prefix'  => 'Назва файла, які Вы загружаеце, пачынаецца з <strong>«$1»</strong>. Падобныя бессэнсоўныя назвы звычайна ствараюцца аўтаматычна лічбавымі фотаапаратамі. Калі ласка, абярыце больш зразумелую назву для Вашага файла.',

'upload-file-error' => 'Унутраная памылка',
'upload-misc-error' => 'Невядомая памылка загрузкі',

'license'            => 'Ліцэнзія',
'nolicense'          => 'Не выбраная',
'license-nopreview'  => '(Прагляд недаступны)',
'upload_source_file' => ' (файл на Вашым кампутары)',

# Image list
'imagelist'                 => 'Сьпіс файлаў',
'imagelisttext'             => "Ніжэй пададзены сьпіс з '''$1''' {{PLURAL:$1|файла|файлаў|файлаў}}, адсартаваных $2.",
'getimagelist'              => 'атрыманьне сьпісу файлаў',
'ilsubmit'                  => 'Шукаць',
'showlast'                  => 'Паказаць $1 апошніх файлаў адсартаваных $2.',
'byname'                    => 'па назьве',
'bydate'                    => 'па даце',
'bysize'                    => 'па памеры',
'imgdelete'                 => 'выдаліць',
'imgdesc'                   => 'апісаньне',
'imgfile'                   => 'файл',
'filehist'                  => 'Гісторыя файла',
'filehist-help'             => 'Націсьніце на дату/час каб паглядзець, як тады выглядаў файл.',
'filehist-deleteall'        => 'выдаліць усе',
'filehist-deleteone'        => 'выдаліць',
'filehist-revert'           => 'вярнуць',
'filehist-current'          => 'бягучая',
'filehist-datetime'         => 'Дата і час',
'filehist-user'             => 'Удзельнік',
'filehist-dimensions'       => 'Памеры',
'filehist-filesize'         => 'Памер файла',
'filehist-comment'          => 'Камэнтар',
'imagelinks'                => 'Спасылкі',
'linkstoimage'              => 'Наступныя старонкі спасылаюцца на гэты файл:',
'nolinkstoimage'            => 'Ніводная старонка не спасылаецца на гэты файл.',
'sharedupload'              => 'Гэты файл зьяўляецца агульным і можа выкарыстоўвацца іншымі праектамі.',
'shareduploadwiki-linktext' => 'старонка апісаньня файла',
'noimage'                   => 'Няма файла з такой назвай, Вы можаце $1.',
'noimage-linktext'          => 'загрузіць яго',
'uploadnewversion-linktext' => 'Загрузіць новую вэрсію гэтага файла',
'imagelist_date'            => 'Дата',
'imagelist_name'            => 'Назва',
'imagelist_user'            => 'Удзельнік',
'imagelist_size'            => 'Памер',
'imagelist_description'     => 'Апісаньне',

# File reversion
'filerevert'                => 'Вярнуць $1',
'filerevert-comment'        => 'Камэнтар:',
'filerevert-defaultcomment' => 'Вернутая вэрсія ад $2, $1',
'filerevert-submit'         => 'Вярнуць',

# File deletion
'filedelete'                  => 'Выдаліць $1',
'filedelete-legend'           => 'Выдаліць файл',
'filedelete-intro'            => "Вы выдаляеце '''[[Media:$1|$1]]'''.",
'filedelete-comment'          => 'Прычына выдаленьня:',
'filedelete-submit'           => 'Выдаліць',
'filedelete-success'          => "'''$1''' выдалены.",
'filedelete-otherreason'      => 'Іншая/дадатковая прычына:',
'filedelete-reason-otherlist' => 'Іншая прычына',

# MIME search
'mimesearch' => 'Пошук па MIME',
'mimetype'   => 'Тып MIME:',

# Unwatched pages
'unwatchedpages' => 'Старонкі, за якімі ніхто не назірае',

# List redirects
'listredirects' => 'Сьпіс перанакіраваньняў',

# Unused templates
'unusedtemplates'    => 'Шаблёны, якія не выкарыстоўваюцца',
'unusedtemplateswlh' => 'іншыя спасылкі',

# Random page
'randompage'         => 'Выпадковая старонка',
'randompage-nopages' => 'У гэтай прасторы назваў няма старонак.',

# Random redirect
'randomredirect' => 'Выпадковае перанакіраваньне',

# Statistics
'statistics'    => 'Статыстыка',
'sitestats'     => 'Статыстыка {{GRAMMAR:родны|{{SITENAME}}}}',
'userstats'     => 'Статыстыка ўдзелу',
'userstatstext' => "Тут {{PLURAL:$1|зарэгістраваны|зарэгістраваныя|зарэгістраваныя}} '''$1''' [[Special:Listusers|{{PLURAL:$1|удзельнік|удзельнікі|удзельнікаў}}]], зь якіх '''$2''' (ці '''$4%''') {{PLURAL:$2|мае|маюць|маюць}} правы $5.",

'disambiguations'     => 'Старонкі-неадназначнасьці',
'disambiguationspage' => 'Шаблён:Неадназначнасьць',

'doubleredirects' => 'Двайныя перанакіраваньні',

'brokenredirects'        => 'Некарэктныя перанакіраваньні',
'brokenredirectstext'    => 'Наступныя перанакіраваньні спасылаюцца на неіснуючыя старонкі:',
'brokenredirects-edit'   => '(рэдагаваць)',
'brokenredirects-delete' => '(выдаліць)',

'withoutinterwiki'        => 'Старонкі без спасылак на іншыя моўныя вэрсіі',
'withoutinterwiki-submit' => 'Паказаць',

'fewestrevisions' => 'Старонкі з найменшай колькасьцю рэдагаваньняў',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|байт|байты|байтаў}}',
'ncategories'             => '$1 {{PLURAL:$1|катэгорыя|катэгорыі|катэгорый}}',
'nlinks'                  => '$1 {{PLURAL:$1|спасылка|спасылкі|спасылак}}',
'nmembers'                => '$1 {{PLURAL:$1|элемэнт|элемэнты|элемэнтаў}}',
'nrevisions'              => '$1 {{PLURAL:$1|вэрсія|вэрсіі|вэрсій}}',
'nviews'                  => '$1 {{PLURAL:$1|прагляд|прагляды|праглядаў}}',
'specialpage-empty'       => 'Гэтая старонка — пустая.',
'lonelypages'             => 'Старонкі-сіраціны',
'uncategorizedpages'      => 'Некатэгарызаваныя старонкі',
'uncategorizedcategories' => 'Некатэгарызаваныя катэгорыі',
'uncategorizedimages'     => 'Некатэгарызаваныя файлы',
'uncategorizedtemplates'  => 'Некатэгарызаваныя шаблёны',
'unusedcategories'        => 'Катэгорыі, якія не выкарыстоўваюцца',
'unusedimages'            => 'Файлы, якія не выкарыстоўваюцца',
'popularpages'            => 'Папулярныя старонкі',
'wantedcategories'        => 'Запатрабаваныя катэгорыі',
'wantedpages'             => 'Запатрабаваныя старонкі',
'mostlinked'              => 'Старонкі, на якія найчасьцей спасылаюцца',
'mostlinkedcategories'    => 'Катэгорыі з найбольшай колькасьцю артыкулаў',
'mostlinkedtemplates'     => 'Шаблёны, якія найчасьцей выкарыстоўваюцца',
'mostcategories'          => 'Старонкі з найбольшай колькасьцю катэгорый',
'mostimages'              => 'Файлы, на якія найчасьцей спасылаюцца',
'mostrevisions'           => 'Старонкі з найбольшай колькасьцю рэдагаваньняў',
'allpages'                => 'Усе старонкі',
'prefixindex'             => 'Пошук старонак па пачатку назвы',
'shortpages'              => 'Кароткія старонкі',
'longpages'               => 'Доўгія старонкі',
'deadendpages'            => 'Тупіковыя старонкі',
'protectedpages'          => 'Абароненыя старонкі',
'protectedtitles'         => 'Забароненыя старонкі',
'protectedtitlestext'     => 'Стварэньне наступных старонак забароненае',
'listusers'               => 'Сьпіс удзельнікаў і ўдзельніц',
'specialpages'            => 'Спэцыяльныя старонкі',
'spheading'               => 'Спэцыяльныя старонкі для ўсіх удзельнікаў і ўдзельніц',
'restrictedpheading'      => 'Спэцыяльныя старонкі з абмежаваным доступам',
'newpages'                => 'Новыя старонкі',
'newpages-username'       => 'Імя ўдзельніка/ўдзельніцы:',
'ancientpages'            => 'Найстарэйшыя старонкі',
'move'                    => 'Перанесьці',
'movethispage'            => 'Перанесьці гэтую старонку',

# Book sources
'booksources'               => 'Пошук кніг',
'booksources-search-legend' => 'Пошук кніг',
'booksources-go'            => 'Паказаць',
'booksources-text'          => 'Ніжэй знаходзіцца сьпіс спасылак на іншыя сайты, якія прадаюць новыя і патрыманыя кнігі, і могуць таксама мець інфармацыю пра кнігі, якія Вы шукаеце:',

'categoriespagetext' => 'У {{GRAMMAR:месны|{{SITENAME}}}} існуюць наступныя катэгорыі:',
'data'               => 'Зьвесткі',
'alphaindexline'     => 'ад $1 да $2',
'version'            => 'Вэрсія',

# Special:Log
'specialloguserlabel'  => 'Удзельнік/удзельніца:',
'speciallogtitlelabel' => 'Назва:',
'log'                  => 'Журналы падзей',
'all-logs-page'        => 'Усе журналы падзей',
'alllogstext'          => 'Сумесны паказ журналаў загрузкі, выдаленьня, абароны, блякаваньня і адміністраваньня.
Вы можаце адфільтраваць вынікі па тыпе журналу, удзельніку ці старонцы.',

# Special:Allpages
'nextpage'          => 'Наступная старонка ($1)',
'prevpage'          => 'Папярэдняя старонка ($1)',
'allpagesfrom'      => 'Паказаць старонкі, пачынаючы з:',
'allarticles'       => 'Усе старонкі',
'allinnamespace'    => 'Усе старонкі (прастора назваў: $1)',
'allnotinnamespace' => 'Усе старонкі (не ў прасторы назваў $1)',
'allpagesprev'      => 'Папярэднія',
'allpagesnext'      => 'Наступныя',
'allpagessubmit'    => 'Паказаць',
'allpagesprefix'    => 'Паказаць старонкі, назвы якіх пачынаюцца з:',
'allpagesbadtitle'  => 'Пададзеная назва старонкі была няслушная ці пачыналася зь міжмоўнай ці міжвікі спасылкі. Яна яшчэ можа ўтрымліваць сымбалі, якія ня могуць ужывацца ў назвах.',
'allpages-bad-ns'   => '{{SITENAME}} ня мае прасторы назваў «$1».',

# Special:Listusers
'listusers-submit' => 'Паказаць',

# E-mail user
'emailuser'       => 'Даслаць ліст',
'emailpage'       => 'Даслаць ліст ўдзельніку ці ўдзельніцы па электроннай пошце',
'defemailsubject' => 'Электронная пошта {{GRAMMAR:родны|{{SITENAME}}}}',
'noemailtitle'    => 'Адрас электроннай пошты адсутнічае',
'emailfrom'       => 'Ад',
'emailto'         => 'Каму',
'emailsubject'    => 'Тэма',
'emailmessage'    => 'Паведамленьне',
'emailsend'       => 'Даслаць',

# Watchlist
'watchlist'            => 'Мой сьпіс назіраньня',
'mywatchlist'          => 'Мой сьпіс назіраньня',
'watchlistfor'         => "(для '''$1''')",
'nowatchlist'          => 'Ваш сьпіс назіраньня — пусты.',
'watchnologin'         => 'Вы не ўвайшлі ў сыстэму',
'addedwatch'           => 'Дададзеная ў сьпіс назіраньня',
'addedwatchtext'       => "Артыкул «$1» быў дададзены да Вашага [[Special:Watchlist|сьпісу назіраньня]].
Наступныя зьмены ў гэтым артыкуле і зьвязанай зь ім старонцы абмеркаваньняў будуць бачныя там, і старонка будзе выглядаць '''тлустай''' на [[Special:Recentchanges|старонцы са сьпісам апошніх зьменаў]], каб зьмены было лягчэй заўважыць.

Калі Вы захочаце выдаліць артыкул са сьпісу назіраньня, націсьніце «не назіраць» у спэцыяльным радку зьверху артыкула.",
'removedwatch'         => 'Выдаленая са сьпісу назіраньня',
'removedwatchtext'     => 'Старонка «[[:$1]]» была выдаленая з Вашага сьпісу назіраньня.',
'watch'                => 'Назіраць',
'watchthispage'        => 'Назіраць за гэтай старонкай',
'unwatch'              => 'Не назіраць',
'unwatchthispage'      => 'Перастаць назіраць',
'notanarticle'         => 'Не артыкул',
'watchlist-details'    => 'У сьпісе назіраньня $1 {{PLURAL:$1|старонка|старонкі|старонак}} за выключэньнем старонак абмеркаваньня.',
'watchlistcontains'    => 'Ваш сьпіс назіраньня зьмяшчае $1 {{PLURAL:$1|старонка|старонкі|старонак}}.',
'wlshowlast'           => 'Паказваць за апошнія $1 гадзінаў $2 дзён $3',
'watchlist-show-bots'  => 'паказаць праўкі робатаў',
'watchlist-hide-bots'  => 'схаваць праўкі робатаў',
'watchlist-show-own'   => 'паказаць мае праўкі',
'watchlist-hide-own'   => 'схаваць мае праўкі',
'watchlist-show-minor' => 'паказаць дробныя праўкі',
'watchlist-hide-minor' => 'схаваць дробныя праўкі',

# Displayed when you click the "watch" button and it's in the process of watching
'watching'   => 'Дадаецца ў сьпіс назіраньня...',
'unwatching' => 'Выдаляецца са сьпісу назіраньня...',

'enotif_newpagetext' => 'Гэта новая старонка.',
'changed'            => 'зьмененая',
'created'            => 'створаная',
'enotif_anon_editor' => 'ананімны ўдзельнік $1',

# Delete/protect/revert
'deletepage'                  => 'Выдаліць старонку',
'confirm'                     => 'Пацьверджаньне',
'excontent'                   => 'колішні зьмест: «$1»',
'exblank'                     => 'старонка была пустая',
'delete-confirm'              => 'Выдаліць «$1»',
'delete-legend'               => 'Выдаліць',
'historywarning'              => 'Папярэджаньне: у старонкі, якую Вы зьбіраецеся выдаліць, ёсьць гісторыя:',
'confirmdeletetext'           => 'Зараз Вы выдаліце старонку разам з усёй гісторыяй зьменаў. Калі ласка, пацьвердзіце, што Вы зьбіраецеся гэта зрабіць і што Вы разумееце ўсе наступствы, а таксама рабіце гэта ў адпаведнасьці з [[{{MediaWiki:policy-url}}]].',
'actioncomplete'              => 'Дзеяньне завершанае',
'deletedtext'                 => '«<nowiki>$1</nowiki>» была выдаленая.
Глядзіце журнал выдаленьняў у $2.',
'deletedarticle'              => 'выдаленая «[[$1]]»',
'dellogpage'                  => 'Журнал выдаленьняў',
'dellogpagetext'              => 'Сьпіс апошніх выдаленьняў.',
'deletionlog'                 => 'журнал выдаленьняў',
'deletecomment'               => 'Прычына выдаленьня:',
'deleteotherreason'           => 'Іншая/дадатковая прычына:',
'deletereasonotherlist'       => 'Іншая прычына',
'deletereason-dropdown'       => '* Агульныя прычыны выдаленьня
** Запыт аўтара/аўтаркі
** Парушэньне аўтарскіх правоў
** Вандалізм',
'rollback'                    => 'Адмяніць рэдагаваньні',
'rollbacklink'                => 'адкат',
'cantrollback'                => 'Немагчыма скасаваць зьмену; апошні рэдактар — адзіны аўтар гэтай старонкі.',
'alreadyrolled'               => 'Немагчыма скасаваць апошнюю зьмену [[:$1]], якую зрабіў [[User:$2|$2]] ([[User talk:$2|гутаркі]]); нехта іншы ўжо зьмяніў артыкул ці скасаваў зьмены.

Апошнія зьмены зробленыя [[User:$3|$3]] ([[User talk:$3|гутаркі]]).',
'editcomment'                 => 'Камэнтар рэдагаваньня быў: «<i>$1</i>».', # only shown if there is an edit comment
'protectlogpage'              => 'Журнал абаронаў',
'protectedarticle'            => 'абароненая «[[$1]]»',
'protectsub'                  => '(Абарона «$1»)',
'confirmprotect'              => 'Пацьверджаньне абароны',
'protectcomment'              => 'Камэнтар:',
'protectexpiry'               => 'Сканчаецца:',
'protect_expiry_invalid'      => 'Няслушны час сканчэньня абароны.',
'protect_expiry_old'          => 'Тэрмін абароны прайшоў.',
'protect-unchain'             => 'Дазволіць пераносы',
'protect-text'                => 'Тут можна паглядзець і зьмяніць узровень абароны старонкі <strong><nowiki>$1</nowiki></strong>.',
'protect-locked-access'       => 'Вы ня маеце правоў для зьмены ўзроўню абароны старонкі.
Цяперашнія наладкі старонкі <strong>$1</strong>:',
'protect-cascadeon'           => 'Гэтая старонка часова абароненая, таму што яна ўключаная ў {{PLURAL:$1|наступную старонку, якая абароненая|наступныя старонкі, якія абароненыя|наступныя старонкі, якія абароненыя}} каскаднай абаронай.
Вы можаце зьмяніць узровень абароны, але гэта не паўплывае на каскадную абарону.',
'protect-default'             => '(па змоўчаньні)',
'protect-fallback'            => 'Патрэбны дазвол «$1»',
'protect-level-autoconfirmed' => 'Абараніць ад ананімных і новых удзельнікаў',
'protect-level-sysop'         => 'Толькі адміністратары',
'protect-summary-cascade'     => 'каскадная',
'protect-expiring'            => 'сканчаецца $1 (UTC)',
'protect-cascade'             => 'Абараняць старонкі, якія ўключаныя ў гэтую старонку (каскадная абарона)',
'protect-cantedit'            => 'Вы ня можаце зьмяніць узровень абароны гэтай старонкі, таму што Вы ня маеце дазволу на яе рэдагаваньне.',
'restriction-type'            => 'Дазвол:',
'restriction-level'           => 'Узровень абмежаваньня:',
'minimum-size'                => 'Мінімальны памер',
'maximum-size'                => 'Максымальны памер:',
'pagesize'                    => '(у байтах)',

# Restrictions (nouns)
'restriction-edit'   => 'Рэдагаваньне',
'restriction-move'   => 'Перанос',
'restriction-create' => 'Стварэньне',

# Restriction levels
'restriction-level-sysop'         => 'поўнасьцю абароненая',
'restriction-level-autoconfirmed' => 'часткова абароненая',

# Undelete
'undelete'               => 'Прагляд выдаленых старонак',
'undeletepage'           => 'Прагляд і аднаўленьне выдаленых старонак',
'viewdeletedpage'        => 'Паказаць выдаленыя старонкі',
'undeletebtn'            => 'Аднавіць',
'undeletelink'           => 'аднавіць',
'undeletecomment'        => 'Камэнтар:',
'undeletedarticle'       => 'адноўленая «[[$1]]»',
'undeletedrevisions'     => '{{PLURAL:$1|адноўленая $1 вэрсія|адноўленыя $1 вэрсіі|адноўленыя $1 вэрсій}}',
'undeletedfiles'         => '{{PLURAL:$1|адноўлены $1 файл|адноўленыя $1 файлы|адноўленыя $1 файлаў}}',
'cannotundelete'         => 'Аднаўленьне не адбылося; нехта іншы мог пасьпець аднавіць старонку раней.',
'undelete-search-box'    => 'Пошук выдаленых старонак',
'undelete-search-prefix' => 'Паказаць старонкі, назвы якіх пачынаюцца з:',
'undelete-search-submit' => 'Паказаць',

# Namespace form on various pages
'namespace'      => 'Прастора назваў:',
'invert'         => 'Адваротны выбар',
'blanknamespace' => 'Артыкул',

# Contributions
'contributions' => 'Унёсак',
'mycontris'     => 'Мой унёсак',
'contribsub2'   => 'Для $1 ($2)',
'uctop'         => ' (апошняя)',
'month'         => 'Ад месяца (і раней):',
'year'          => 'Ад году (і раней):',

'sp-contributions-newbies-sub' => 'Унёсак пачынаючых',
'sp-contributions-blocklog'    => 'журнал блякаваньняў',
'sp-contributions-username'    => 'IP-адрас альбо імя ўдзельніка/ўдзельніцы:',

# What links here
'whatlinkshere'       => 'Спасылкі на старонку',
'whatlinkshere-title' => 'Старонкі, якія спасылаюцца на $1',
'whatlinkshere-page'  => 'Старонка:',
'linklistsub'         => '(Сьпіс спасылак)',
'linkshere'           => "Наступныя старонкі спасылаюцца на '''[[:$1]]''':",
'nolinkshere'         => "Ніводная старонка не спасылаецца на '''[[:$1]]'''.",
'nolinkshere-ns'      => "Ніводная старонка не спасылаецца на '''[[:$1]]''' з выбранай прасторы назваў.",
'isredirect'          => 'старонка-перанакіраваньне',
'istemplate'          => 'уключэньне',
'whatlinkshere-prev'  => '{{PLURAL:$1|папярэдняя|папярэднія|папярэднія}} $1',
'whatlinkshere-next'  => '{{PLURAL:$1|наступная|наступныя|наступныя}} $1',
'whatlinkshere-links' => '← спасылкі',

# Block/unblock
'blockip'                     => 'Блякаваньне ўдзельніка ці ўдзельніцы',
'blockiptext'                 => 'Ужывайце форму ніжэй, каб заблякаваць доступ для запісу з пэўнага IP-адрасу ці імя ўдзельніка. Гэта трэба рабіць толькі прадухіленьня вандалізму і згодна з [[{{MediaWiki:Policy-url}}|правіламі]]. Запоўніце ніжэй пэўную прычыну (напрыклад, пералічыце асобныя старонкі, на якіх былі парушэньні).',
'ipaddress'                   => 'IP-адрас:',
'ipadressorusername'          => 'IP-адрас альбо імя ўдзельніка/ўдзельніцы:',
'ipbexpiry'                   => 'Тэрмін:',
'ipbreason'                   => 'Прычына:',
'ipbreasonotherlist'          => 'Іншая прычына',
'ipbanononly'                 => 'Блякаваць толькі ананімаў',
'ipbcreateaccount'            => 'Забараніць стварэньне рахункаў',
'ipbother'                    => 'Іншы тэрмін:',
'ipboptions'                  => '2 гадзіны:2 hours,1 дзень:1 day,3 дні:3 days,1 тыдзень:1 week,2 тыдні:2 weeks,1 месяц:1 month,3 месяцы:3 months,6 месяцаў:6 months,1 год:1 year,назаўсёды:infinite', # display1:time1,display2:time2,...
'ipbotheroption'              => 'іншы',
'badipaddress'                => 'Некарэктны IP-адрас',
'blockipsuccesssub'           => 'Блякаваньне пасьпяховае',
'blockipsuccesstext'          => '[[Special:Contributions/$1|$1]] быў заблякаваны/была заблякаваная.
<br />Глядзіце [[Special:Ipblocklist|сьпіс заблякаваных IP-адрасоў]] дзеля перагляду блякаваньняў.',
'ipb-edit-dropdown'           => 'Рэдагаваць прычыны блякіровак',
'ipb-unblock-addr'            => 'Разблякаваць $1',
'ipb-unblock'                 => 'Разблякаваць рахунак ўдзельніка ці IP-адрас',
'ipb-blocklist-addr'          => 'Паказаць існуючыя блякаваньні для $1',
'ipb-blocklist'               => 'Паказаць існуючыя блякаваньні',
'ipusubmit'                   => 'Разблякаваць гэты IP-адрас',
'ipblocklist'                 => 'Сьпіс заблякаваных IP-адрасоў і імёнаў удзельнікаў',
'blocklistline'               => '$1, $2 заблякаваў $3 ($4)',
'infiniteblock'               => 'назаўсёды',
'anononlyblock'               => 'толькі ананімаў',
'createaccountblock'          => 'стварэньне рахунку заблякаванае',
'blocklink'                   => 'заблякаваць',
'unblocklink'                 => 'разблякаваць',
'contribslink'                => 'унёсак',
'autoblocker'                 => "Вы аўтаматычна заблякаваныя, таму што Ваш IP-адрас нядаўна ўжываўся «[[User:$1|$1]]». Прычына блякаваньня $1 наступная: «'''$2'''»",
'blocklogpage'                => 'Журнал блякаваньняў',
'blocklogentry'               => 'заблякаваны [[$1]] на тэрмін: $2 $3',
'blocklogtext'                => 'Гэта журнал уліку блякаваньняў і разблякаваньняў удзельнікаў. Аўтаматычна заблякаваныя IP-адрасы не пазначаныя. Глядзіце [[Special:Ipblocklist|сьпіс заблякаваных IP-адрасоў]], каб пабачыць дзейныя ў гэты момант блякаваньні.',
'unblocklogentry'             => 'разблякаваны $1',
'block-log-flags-anononly'    => 'толькі ананімныя ўдзельнікі',
'block-log-flags-nocreate'    => 'стварэньне рахункаў забароненае',
'block-log-flags-noautoblock' => 'аўтаматычнае блякаваньне адключанае',
'block-log-flags-noemail'     => 'электронная пошта заблякаваная',
'ipb_already_blocked'         => '«$1» ужо заблякаваны',
'ip_range_invalid'            => 'Некарэктны дыяпазон IP-адрасоў.',
'blockme'                     => 'Заблякуйце мяне',

# Move page
'movepage'                => 'Перанесьці старонку',
'movepagetext'            => "З дапамогай гэтай формы Вы можаце зьмяніць назву і гісторыю старонкі.
Старая назва будзе перанакіроўваць на новую.
Спасылкі на старую назву ня будуць зьмененыя;
упэўніцеся ў адсутнасьці падвойных ці няслушных перанакіраваньняў.
Адказнасьць за дакладнасьць спасылак ляжыць на тым, хто перанёс старонку.

Заўважце, што старонка '''ня будзе''' перанесеная, калі пад новай назвай ужо існуе іншая старонка, за выключэньнем выпадкаў, калі яна пустая альбо зьяўляецца перанакіраваньнем і ня мае гісторыі рэдагаваньняў. Гэта азначае, што існуе магчымасьць адмяніць зьмену назвы, калі Вы памыліліся, але не магчыма выдаліць існуючую старонку.

'''ПАПЯРЭДЖАНЬНЕ!'''
Зьмена назвы можа прывесьці да нечаканых зьменаў папулярных старонак;
калі ласка, упэўніцеся, што Вы разумееце наступствы такіх зьменаў.",
'movepagetalktext'        => "Старонка абмеркаваньня будзе перанесеная разам з асноўнай старонкай, '''за выключэньнем:'''
* Не пустая старонка абмеркаваньня ўжо існуе пад новай назвай, альбо
* Вы не паставілі адзнаку ў полі ніжэй.

У такіх выпадках, Вы можаце перанесьці ці аб'яднаць старонку абмеркаваньня самастойна.",
'movearticle'             => 'Перанесьці старонку:',
'movenologin'             => 'Вы не ўвайшлі ў сыстэму',
'newtitle'                => 'Новая назва:',
'move-watch'              => 'Назіраць за гэтай старонкай',
'movepagebtn'             => 'Перанесьці старонку',
'pagemovedsub'            => 'Пасьпяховы перанос',
'movepage-moved'          => "<big>'''«$1» перанесеная ў «$2»'''</big>", # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => 'Старонка з такой назвай ужо існуе, альбо абраная Вамі назва недапушчальная. Калі ласка, абярыце іншую назву.',
'talkexists'              => "'''Старонка пасьпяхова перанесеная, але не атрымалася перанесьці старонку абмеркаваньня, таму што старонка з такой назвай ужо існуе. Калі ласка, аб'яднайце тэксты самастойна.'''",
'movedto'                 => 'перанесеная ў',
'movetalk'                => 'Перанесьці таксама старонку абмеркаваньня.',
'talkpagemoved'           => 'Адпаведная старонка абмеркаваньня таксама перанесеная.',
'talkpagenotmoved'        => 'Адпаведная старонка абмеркаваньня <strong>не</strong> перанесеная.',
'1movedto2'               => '[[$1]] перанесеная ў [[$2]]',
'1movedto2_redir'         => '[[$1]] перанесеная ў [[$2]] з выдаленьнем перанакіраваньня',
'movelogpage'             => 'Журнал пераносаў',
'movereason'              => 'Прычына:',
'revertmove'              => 'адкат',
'delete_and_move'         => 'Выдаліць і перанесьці',
'delete_and_move_confirm' => 'Так, выдаліць старонку',

# Export
'export'            => 'Экспартаваць старонкі',
'exportcuronly'     => 'Экспартаваць толькі бягучую вэрсію, бяз поўнай гісторыі',
'export-addcattext' => 'Дадаць старонкі з катэгорыі:',
'export-addcat'     => 'Дадаць',

# Namespace 8 related
'allmessages'               => 'Сыстэмныя паведамленьні',
'allmessagesname'           => 'Назва',
'allmessagesdefault'        => 'Тэкст па змоўчаньні',
'allmessagescurrent'        => 'Бягучы тэкст',
'allmessagestext'           => 'Сьпіс усіх сыстэмных паведамленьняў, якія існуюць у прасторы назваў MediaWiki.',
'allmessagesnotsupportedDB' => "'''{{ns:special}}:AllMessages''' не падтрымліваецца, таму што адключанае '''\$wgUseDatabaseMessages'''.",
'allmessagesfilter'         => 'Фільтар рэгулярных выразаў:',
'allmessagesmodified'       => 'Паказаць толькі зьмененыя',

# Thumbnails
'thumbnail-more'  => 'Павялічыць',
'thumbnail_error' => 'Памылка стварэньня мініятуры: $1',

# Special:Import
'import'                => 'Імпартаваць старонкі',
'importstart'           => 'Імпартаваньне старонак...',
'import-revision-count' => '$1 {{PLURAL:$1|вэрсія|вэрсіі|вэрсій}}',
'importfailed'          => 'Немагчыма імпартаваць: $1',
'importsuccess'         => 'Імпартаваньне скончанае!',

# Import log
'importlogpage'                    => 'Журнал імпартаваньняў',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|вэрсія|вэрсіі|вэрсій}}',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|вэрсія|вэрсіі|вэрсій}} з $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Мая старонка ўдзельніка',
'tooltip-pt-mytalk'               => 'Мая старонка размоваў',
'tooltip-pt-preferences'          => 'Мае ўстаноўкі',
'tooltip-pt-watchlist'            => 'Сьпіс старонак, за зьменамі якіх Вы назіраеце',
'tooltip-pt-mycontris'            => 'Мой унёсак',
'tooltip-pt-login'                => 'Вас запрашаюць увайсьці, хаця гэта і неабавязкова.',
'tooltip-pt-logout'               => 'Выйсьці',
'tooltip-ca-talk'                 => 'Абмеркаваньне зьместу старонкі',
'tooltip-ca-edit'                 => 'Вы можаце рэдагаваць гэтую старонку. Калі ласка, ужывайце кнопку прагляду перад захаваньнем.',
'tooltip-ca-addsection'           => 'Дадаць камэнтар да гэтага абмеркаваньня.',
'tooltip-ca-viewsource'           => 'Гэтая старонка абароненая. Але можна паглядзець яе крынічны тэкст.',
'tooltip-ca-protect'              => 'Абараніць гэтую старонку',
'tooltip-ca-delete'               => 'Выдаліць гэтую старонку',
'tooltip-ca-move'                 => 'Перанесьці гэтую старонку',
'tooltip-ca-watch'                => 'Дадаць гэтую старонку ў Ваш сьпіс назіраньня',
'tooltip-ca-unwatch'              => 'Выдаліць гэтую старонку з Вашага сьпісу назіраньня',
'tooltip-search'                  => 'Шукаць у {{GRAMMAR:месны|{{SITENAME}}}}',
'tooltip-search-go'               => 'Перайсьці да старонкі з гэтай назвай, калі старонка існуе',
'tooltip-search-fulltext'         => 'Шукаць гэты тэкст на старонках',
'tooltip-p-logo'                  => 'Галоўная старонка',
'tooltip-n-mainpage'              => 'Наведаць галоўную старонку',
'tooltip-n-portal'                => 'Пра праект, што Вы можаце зрабіць, дзе што знайсьці',
'tooltip-n-currentevents'         => 'Атрымаць інфармацыю пра бягучыя падзеі',
'tooltip-n-recentchanges'         => 'Сьпіс апошніх зьменаў у {{GRAMMAR:месны|{{SITENAME}}}}.',
'tooltip-n-randompage'            => 'Паказаць выпадковую старонку',
'tooltip-n-help'                  => 'Месца, каб пра ўсё даведацца.',
'tooltip-n-sitesupport'           => 'Падтрымайце нас',
'tooltip-t-whatlinkshere'         => 'Сьпіс усіх старонак, якія спасылаюцца на гэтую',
'tooltip-t-contributions'         => 'Паказаць унёсак гэтага удзельніка/гэтай удзельніцы',
'tooltip-t-emailuser'             => 'Даслаць ліст гэтаму ўдзельніку/гэтай удзельніцы па электроннай пошце',
'tooltip-t-upload'                => 'Загрузіць файл',
'tooltip-t-specialpages'          => 'Сьпіс усіх спэцыяльных старонак',
'tooltip-t-print'                 => 'Вэрсія гэтай старонкі для друку',
'tooltip-t-permalink'             => 'Сталая спасылка на гэтую вэрсію старонкі',
'tooltip-ca-nstab-user'           => 'Паказаць старонку ўдзельніка',
'tooltip-ca-nstab-project'        => 'Паказаць старонку праекту',
'tooltip-ca-nstab-image'          => 'Паказаць старонку файла',
'tooltip-ca-nstab-template'       => 'Паказаць шаблён',
'tooltip-ca-nstab-help'           => 'Паказаць старонку дапамогі',
'tooltip-ca-nstab-category'       => 'Паказаць старонку катэгорыі',
'tooltip-minoredit'               => 'Пазначыць гэтую зьмену як дробную',
'tooltip-save'                    => 'Захаваць Вашы зьмены',
'tooltip-preview'                 => 'Праглядзець Вашы зьмены. Калі ласка, выкарыстоўвайце гэтую магчымасьць перад тым, як захаваць старонку!',
'tooltip-diff'                    => 'Паказаць зробленыя Вамі зьмены ў тэксьце.',
'tooltip-compareselectedversions' => 'Пабачыць розьніцу паміж дзьвюма абранымі вэрсіямі гэтай старонкі.',
'tooltip-watch'                   => 'Дадаць гэтую старонку ў Ваш сьпіс назіраньня',

# Attribution
'anonymous'        => 'Ананімныя ўдзельнікі і ўдзельніцы {{GRAMMAR:родны|{{SITENAME}}}}',
'siteuser'         => 'Удзельнік/удзельніца {{GRAMMAR:родны|{{SITENAME}}}} $1',
'lastmodifiedatby' => 'Гэтую старонку апошні раз рэдагаваў $3 $2, $1.', # $1 date, $2 time, $3 user
'others'           => 'іншыя',
'creditspage'      => 'Падзякі',

# Spam protection
'spamprotectiontitle'    => 'Фільтар для абароны ад спаму',
'subcategorycount'       => 'У гэтай катэгорыі ёсьць $1 {{PLURAL:$1|падкатэгорыя|падкатэгорыі|падкатэгорый}}.',
'categoryarticlecount'   => 'У гэтай катэгорыі ёсьць $1 {{PLURAL:$1|старонка|старонкі|старонак}}.',
'category-media-count'   => 'У гэтай катэгорыі ёсьць $1 {{PLURAL:$1|файл|файлы|файлаў}}.',
'listingcontinuesabbrev' => ' (працяг)',

# Info page
'infosubtitle'   => 'Інфармацыя пра старонку',
'numedits'       => 'Колькасьць зьменаў (старонкі): $1',
'numtalkedits'   => 'Колькасьць зьменаў (старонкі абмеркаваньня): $1',
'numwatchers'    => 'Колькасьць назіральнікаў і назіральніц: $1',
'numauthors'     => 'Колькасьць розных аўтараў і аўтарак (старонкі): $1',
'numtalkauthors' => 'Колькасьць розных аўтараў і аўтарак (старонкі абмеркаваньня): $1',

# Math options
'mw_math_png'    => 'Заўсёды паказваць як PNG',
'mw_math_simple' => 'HTML у простых выпадках, інакш PNG',
'mw_math_html'   => 'HTML калі магчыма, інакш PNG',
'mw_math_source' => 'Пакідаць у выглядзе TeX (для тэкставых браўзэраў)',
'mw_math_modern' => 'Рэкамэндуецца для сучасных браўзэраў',
'mw_math_mathml' => 'MathML калі магчыма (экспэрымэнтальна)',

# Image deletion
'deletedrevision'       => 'Выдаленая старая вэрсія $1',
'filedeleteerror-short' => 'Памылка выдаленьня файла: $1',

# Browsing diffs
'previousdiff' => '← Перайсьці да папярэдняй зьмены',
'nextdiff'     => 'Перайсьці да наступнай зьмены →',

# Media information
'file-info'            => '(памер файла: $1, тып MIME: $2)',
'file-info-size'       => '($1 × $2 {{PLURAL:$2|піксэль|піксэлі|піксэляў}}, памер файла: $3, тып MIME: $4)',
'file-nohires'         => '<small>Няма вэрсіі зь лепшым разрозьненьнем.</small>',
'svg-long-desc'        => '(SVG-файл, намінальна $1 × $2 {{PLURAL:$2|піксэль|піксэлі|піксэляў}}, памер файла: $3).',
'show-big-image'       => 'Найлепшае разрозьненьне',
'show-big-image-thumb' => '<small>Памер пры папярэднім праглядзе: $1 × $2 {{PLURAL:$2|піксэль|піксэлі|піксэляў}}</small>',

# Special:Newimages
'newimages'    => 'Галерэя новых файлаў',
'showhidebots' => '($1 робатаў)',
'noimages'     => 'Выявы адсутнічаюць.',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds-abbrev' => 'с',
'minutes-abbrev' => 'хв',
'hours-abbrev'   => 'г',

# Bad image list
'bad_image_list' => 'Фармат наступны:

Разглядаюцца толькі элемэнты сьпісу (радкі, якія пачынаюцца з *). Першая спасылка ў радку мусіць быць спасылкай на кепскую выяву. Усе наступныя спасылкі ў тым жа радку будуць разглядацца як выключэньні, напрыклад, старонкі, дзе можа зьяўляцца выява.',

# Metadata
'metadata'          => 'Мэтазьвесткі',
'metadata-help'     => 'Гэты файл утрымлівае дадатковую інфармацыю, хутчэй за ўсё дададзеную зь лічбавай фотакамэры ці сканэра.
Калі файл рэдагаваўся пасьля стварэньня, то частка зьвестак можа не адпавядаць зьмененаму файлу.',
'metadata-expand'   => 'Паказаць падрабязнасьці',
'metadata-collapse' => 'Схаваць падрабязнасьці',
'metadata-fields'   => 'Палі мэтазьвестак EXIF гэтага сьпісу будуць адлюстраваныя на старонцы выявы, астатнія будуць схаваныя.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength', # Do not translate list items

# EXIF tags
'exif-imagewidth'         => 'Шырыня',
'exif-imagelength'        => 'Вышыня',
'exif-imagedescription'   => 'Назва выявы',
'exif-make'               => 'Вытворца фотаапарата',
'exif-model'              => 'Мадэль фотаапарата',
'exif-exifversion'        => 'Вэрсія Exif',
'exif-lightsource'        => 'Крыніца сьвятла',
'exif-flash'              => 'Успышка',
'exif-focallength-format' => '$1 мм',
'exif-gpslatitude'        => 'Шырата',
'exif-gpslongitude'       => 'Даўгата',

'exif-lightsource-0' => 'Невядомая',
'exif-lightsource-4' => 'Успышка',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'паўночнай шыраты',
'exif-gpslatitude-s' => 'паўднёвай шыраты',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'усходняй даўгаты',
'exif-gpslongitude-w' => 'заходняй даўгаты',

# External editor support
'edit-externally'      => 'Рэдагаваць гэты файл з выкарыстаньнем вонкавай праграмы',
'edit-externally-help' => 'Глядзіце падрабязнасьці ў [http://meta.wikimedia.org/wiki/Help:External_editors інструкцыі па наладцы] (па-ангельску).',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'усе',
'imagelistall'     => 'усе',
'watchlistall2'    => 'усе',
'namespacesall'    => 'усе',
'monthsall'        => 'усе',

# E-mail address confirmation
'confirmemail'            => 'Пацьвердзіць адрас электроннай пошты',
'confirmemail_noemail'    => 'Вы не пазначылі слушны адрас электроннай пошты ў Вашых [[Special:Preferences|устаноўках удзельніка]].',
'confirmemail_text'       => '{{SITENAME}} патрабуе, каб Вы пацьвердзілі Ваш адрас электроннай пошты перад ўжываньнем мажлівасьцей электроннай пошты. Актывізуйце кнопку ніжэй, каб даслаць ліст з пацьверджаньнем на Ваш адрас. Ліст будзе ўтрымліваць спасылку з кодам; загрузіце спасылку ў Вашым браўзэры, каб пацьвердзіць, што Ваш адрас электроннай пошты зьяўляецца слушным.',
'confirmemail_pending'    => '<div class="error">
Код пацьверджаньня ужо быў дасланы Вам праз электронную пошту; калі Вы нядаўна стварылі рахунак, Вам варта пачакаць код некалькі хвілінаў перад спробай запыту новага коду.
</div>',
'confirmemail_send'       => 'Даслаць код пацьверджаньня',
'confirmemail_sent'       => 'Ліст для пацьверджаньня дасланы.',
'confirmemail_oncreate'   => 'Код пацьверджаньня быў адпраўлены на Ваш адрас электроннай пошты. Гэты код не патрэбны, каб увайсьці, але Вам трэба будзе падаць яго перад ужываньнем мажлівасьцей, заснаваных на электроннай пошце, у {{GRAMMAR:месны|{{SITENAME}}}}.',
'confirmemail_sendfailed' => 'Немагчыма даслаць пацьвярджальны ліст. Праверце адрас на наяўнасьць няслушных сымбаляў.

Адказ сэрвэра: $1',
'confirmemail_invalid'    => 'Няслушны код пацьверджаньня. Магчыма, скончыўся яго тэрмін дзеяньня.',
'confirmemail_needlogin'  => 'Вам трэба $1, каб пацьвердзіць Ваш адрас электроннай пошты.',
'confirmemail_success'    => 'Ваш адрас электроннай пошты быў пацьверджаны. Зараз Вы можаце ўвайсьці.',
'confirmemail_loggedin'   => 'Ваш адрас электроннай пошты быў пацьверджаны.',
'confirmemail_error'      => 'Нешта пайшло ня так у часе захаваньня вашага пацьверджаньня.',
'confirmemail_subject'    => '{{SITENAME}}: Пацьверджаньне адрасу электроннай пошты',
'confirmemail_body'       => 'Нехта, магчыма Вы, з IP-адрасу $1, стварыў рахунак «$2» з гэтым паштовым адрасам у праекце {{SITENAME}}.

Каб пацьвердзіць, што гэты рахунак належыць Вам актывізаваць магчымасьці электроннай пошты ў {{GRAMMAR:месны|{{SITENAME}}}}, адчыніце гэтую спасылку у Вашым браўзэры:

$3

Калі гэта ня Вы, не адчыняйце спасылку. Код дзейнічае да $4.',

# Delete conflict
'confirmrecreate' => "Удзельнік [[User:$1|$1]] ([[User talk:$1|гутаркі]]) выдаліў гэтую старонку, перад тым як Вы пачалі яе рэдагаваць, з прычыны:
: ''$2''
Калі ласка, пацьвердзіце, што Вы сапраўды жадаеце стварыць нанава гэтую старонку.",

'unit-pixel' => 'пкс',

# action=purge
'confirm_purge'        => 'Ачысьціць кэш гэтай старонкі?

$1',
'confirm_purge_button' => 'Так',

# AJAX search
'articletitles' => "Старонкі, якія пачынаюцца з ''$1''",
'hideresults'   => 'Схаваць вынікі',

# Multipage image navigation
'imgmultipageprev' => '← папярэдняя старонка',
'imgmultipagenext' => 'наступная старонка →',
'imgmultigotopre'  => 'Перайсьці да старонкі',

# Table pager
'table_pager_next'  => 'Наступная старонка',
'table_pager_prev'  => 'Папярэдняя старонка',
'table_pager_first' => 'Першая старонка',
'table_pager_last'  => 'Апошняя старонка',

# Auto-summaries
'autosumm-blank'   => 'Зьмест старонкі выдалены цалкам',
'autosumm-replace' => "Старонка замененая на '$1'",
'autoredircomment' => 'Перанакіроўвае на [[$1]]',
'autosumm-new'     => 'Новая старонка: $1',

# Size units
'size-bytes'     => '$1 б',
'size-kilobytes' => '$1 кб',
'size-megabytes' => '$1 Мб',
'size-gigabytes' => '$1 Гб',

# Live preview
'livepreview-loading' => 'Загрузка…',

# Watchlist editor
'watchlistedit-normal-title' => 'Рэдагаваць сьпіс назіраньня',
'watchlistedit-raw-titles'   => 'Назвы:',

# Watchlist editing tools
'watchlisttools-view' => 'Паказаць зьмены ў старонках зь сьпісу',
'watchlisttools-edit' => 'Праглядзець альбо рэдагаваць сьпіс назіраньня',
'watchlisttools-raw'  => 'Рэдагаваць як тэкст',

# Core parser functions
'unknown_extension_tag' => 'Невядомы тэг пашырэньня «$1»',

# Special:Version
'version-extensions'       => 'Усталяваныя пашырэньні',
'version-specialpages'     => 'Спэцыяльныя старонкі',
'version-other'            => 'Іншыя',
'version-version'          => 'Вэрсія',
'version-license'          => 'Ліцэнзія',
'version-software-version' => 'Вэрсія',

# Special:Filepath
'filepath'        => 'Шлях да файла',
'filepath-page'   => 'Файл:',
'filepath-submit' => 'Шлях',

);