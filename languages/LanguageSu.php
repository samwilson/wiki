<?php
/** Sundanese language file (Basa Sunda)
  *
  * Source: http://su.wikipedia.org/
  *
  * @package MediaWiki
  * @subpackage Language
  */

require_once( 'LanguageUtf8.php' );

/* private */ $wgNamespaceNamesEn = array(
	NS_MEDIA			=> 'Média',
	NS_SPECIAL			=> 'Husus',
	NS_MAIN				=> '',
	NS_TALK				=> 'Obrolan',
	NS_USER				=> 'Pamaké',
	NS_USER_TALK		=> 'Obrolan_pamaké',
	NS_PROJECT			=> $wgMetaNamespace,
	NS_PROJECT_TALK		=> 'Obrolan_' . $wgMetaNamespace,
	NS_IMAGE			=> 'Gambar',
	NS_IMAGE_TALK		=> 'Obrolan_gambar',
	NS_MEDIAWIKI		=> 'MediaWiki',
	NS_MEDIAWIKI_TALK	=> 'Obrolan_MediaWiki',
	NS_TEMPLATE			=> 'Citakan',
	NS_TEMPLATE_TALK	=> 'Obrolan_citakan',
	NS_HELP				=> 'Pitulung',
	NS_HELP_TALK		=> 'Obrolan_pitulung',
	NS_CATEGORY			=> 'Kategori',
	NS_CATEGORY_TALK	=> 'Obrolan_kategori',
);

$wgAllMessagesSu = array(

# dates
'sunday' => 'Minggu',
'monday' => 'Senén',
'tuesday' => 'Salasa',
'wednesday' => 'Rebo',
'thursday' => 'Kemis',
'friday' => 'Jumaah',
'saturday' => 'Saptu',
'january' => 'Januari',
'february' => 'Pébruari',
'march' => 'Maret',
'april' => 'April',
'may' => 'Méi',
'may_long' => 'Méi',
'june' => 'Juni',
'july' => 'Juli',
'august' => 'Agustus',
'september' => 'Séptémber',
'october' => 'Oktober',
'november' => 'Nopémber',
'december' => 'Désémber',
'jan' => 'Jan',
'feb' => 'Péb',
'mar' => 'Mar',
'apr' => 'Apr',
'may' => 'Méi',
'jun' => 'Jun',
'jul' => 'Jul',
'aug' => 'Ags',
'sep' => 'Sép',
'oct' => 'Okt',
'nov' => 'Nop',
'dec' => 'Dés',

# other messages

'1movedto2' => 'mindahkeun $1 ka $2',
'1movedto2_redir' => '$1 dipindahkeun ka $2',
'Monobook.css' => ' /* édit koropak ieu pikeun nyaluyukeun kulit \'\'monobook\'\' pikeun sakabéh situs */',
'Monobook.js' => '/* tooltips and access keys */
ta = new Object();
ta[\'pt-userpage\'] = new Array(\'.\',\'Kaca pamaké kuring\');
ta[\'pt-anonuserpage\'] = new Array(\'.\',\'Kaca pamaké pikeun IP nu ku anjeun keur diédit\');
ta[\'pt-mytalk\'] = new Array(\'n\',\'Kaca obrolan kuring\');
ta[\'pt-anontalk\'] = new Array(\'n\',\'Sawala ngeunaan éditan ti alamat IP ieu\');
ta[\'pt-preferences\'] = new Array(\'\',\'Préferénsi kuring\');
ta[\'pt-watchlist\'] = new Array(\'l\',\'Daptar kaca nu diawaskeun ku anjeun parobahanana.\');
ta[\'pt-mycontris\'] = new Array(\'y\',\'Daptar kontribusi kuring\');
ta[\'pt-login\'] = new Array(\'o\',\'Anjeun leuwih hadé asup log, sanajan teu wajib.\');
ta[\'pt-anonlogin\'] = new Array(\'o\',\'Anjeun leuwih hadé asup log, sanajan teu wajib.\');
ta[\'pt-logout\'] = new Array(\'o\',\'Kaluar log\');
ta[\'ca-talk\'] = new Array(\'t\',\'Sawala ngeunaan eusi kaca\');
ta[\'ca-edit\'] = new Array(\'e\',\'Anjeun bisa ngédit kaca ieu. Mangga pigunakeun tombol sawangan saméméh nyimpen.\');
ta[\'ca-addsection\'] = new Array(\'+\',\'Tambihan koméntar kana sawala ieu.\');
ta[\'ca-viewsource\'] = new Array(\'e\',\'Kaca ieu dikonci, tapi anjeun masih bisa muka sumberna.\');
ta[\'ca-history\'] = new Array(\'h\',\'Vérsi heubeul kaca ieu.\');
ta[\'ca-protect\'] = new Array(\'=\',\'Konci kaca ieu\');
ta[\'ca-delete\'] = new Array(\'d\',\'Hapus kaca ieu\');
ta[\'ca-undelete\'] = new Array(\'d\',\'Simpen deui éditan kaca ieu nu geus dijieun saméméh dihapus\');
ta[\'ca-move\'] = new Array(\'m\',\'Pindahkeun kaca ieu\');
ta[\'ca-nomove\'] = new Array(\'\',\'Anjeun teu wenang mindahkeun kaca ieu\');
ta[\'ca-watch\'] = new Array(\'w\',\'Tambahkeun kaca ieu kana awaskeuneun kuring\');
ta[\'ca-unwatch\'] = new Array(\'w\',\'Kaluarkeun kaca ieu tina awaskeuneun kuring\');
ta[\'search\'] = new Array(\'f\',\'Téangan wiki ieu\');
ta[\'p-logo\'] = new Array(\'\',\'Tepas\');
ta[\'n-mainpage\'] = new Array(\'z\',\'Sindang ka Tepas\');
ta[\'n-portal\'] = new Array(\'\',\'Ngeunaan proyékna, naon nu bisa dipigawé, di mana néangan naon\');
ta[\'n-currentevents\'] = new Array(\'\',\'Panggihan iber ngeunaan naon baé nu keur lumangsung\');
ta[\'n-recentchanges\'] = new Array(\'r\',\'Daptar nu anyar robah na wiki.\');
ta[\'n-randompage\'] = new Array(\'x\',\'Muatkeun kaca naon baé\');
ta[\'n-help\'] = new Array(\'\',\'Tempat pikeun néangan.\');
ta[\'n-sitesupport\'] = new Array(\'\',\'Support us\');
ta[\'t-whatlinkshere\'] = new Array(\'j\',\'Daptar kaca-kaca wiki nu numbu ka dieu\');
ta[\'t-recentchangeslinked\'] = new Array(\'k\',\'Nu anyar robah na kaca-kaca nu numbu ka dieu\');
ta[\'feed-rss\'] = new Array(\'\',\'Asupan RSS pikeun kaca ieu\');
ta[\'feed-atom\'] = new Array(\'\',\'Asupan atom pikeun kaca ieu\');
ta[\'t-contributions\'] = new Array(\'\',\'Témbongkeun béréndélan kontribusi pamaké ieu\');
ta[\'t-emailuser\'] = new Array(\'\',\'Kirim surélék ka pamaké ieu\');
ta[\'t-upload\'] = new Array(\'u\',\'Muatkeun koropak gambar atawa média\');
ta[\'t-specialpages\'] = new Array(\'q\',\'Daptar sadaya kaca husus\');
ta[\'ca-nstab-main\'] = new Array(\'c\',\'Témbongkeun eusi kaca\');
ta[\'ca-nstab-user\'] = new Array(\'c\',\'Témbongkeun kaca pamaké\');
ta[\'ca-nstab-media\'] = new Array(\'c\',\'Témbongkeun kaca média\');
ta[\'ca-nstab-special\'] = new Array(\'\',\'Ieu kaca husus, anjeun teu bisa ngédit ku sorangan.\');
ta[\'ca-nstab-wp\'] = new Array(\'a\',\'Témbongkeun kaca proyék\');
ta[\'ca-nstab-image\'] = new Array(\'c\',\'Témbongkeun kaca gambar\');
ta[\'ca-nstab-mediawiki\'] = new Array(\'c\',\'Témbongkeun pesen sistim\');
ta[\'ca-nstab-template\'] = new Array(\'c\',\'Témbongkeun citakan\');
ta[\'ca-nstab-help\'] = new Array(\'c\',\'Témbongkeun kaca pitulung\');
ta[\'ca-nstab-category\'] = new Array(\'c\',\'Témbongkeun kaca kategori\');',
'about' => 'Ngeunaan',
'aboutpage' => 'Wikipédia:Ngeunaan',
'aboutsite' => 'Ngeunaan {{SITENAME}}',
'accmailtext' => 'Sandi keur \'$1\' geus dikirim ka $2.',
'accmailtitle' => 'Sandi geus dikirim.',
'acct_creation_throttle_hit' => 'Punten, anjeun geus nyieun $1 rekening, teu bisa nyieun deui.',
'actioncomplete' => 'Peta geus réngsé',
'addedwatch' => 'Geus ditambahkeun ka awaskeuneun',
'addedwatchtext' => 'Kaca "$1" geus ditambahkeun ka [[Special:Watchlist|awaskeuneun]] anjeun.
Jaga, parobahan na kaca ieu katut kaca obrolanana bakal dibéréndélkeun di dinya, sarta kacana bakal katémbong \'\'\'dikandelan\'\'\' dina kaca [[Special:Recentchanges|Nu anyar robah]] sangkan leuwih gampang ngawaskeunana.

<p>Mun jaga anjeun moal deui ngawaskeun parobahan na kaca éta, klik tumbu "Eureun ngawaskeun" na lajursisi.',
'addgroup' => 'Tambahkeun Golongan',
'administrators' => 'Wikipédia:Kuncén',
'allarticles' => 'Sadaya artikel',
'allinnamespace' => 'Sadaya kaca ($1 ngaranspasi)',
'alllogstext' => 'Témbongan gabungan log muatan, hapusan, koncian, peungpeukan, jeung kuncén. Bisa dipondokkeun ku cara milih tipe log, ngaran pamaké, atawa kaca nu dimaksud.',
'allmessages' => 'Sadaya pesen sistim',
'allmessagescurrent' => 'Téks kiwari',
'allmessagesdefault' => 'Téks ti dituna',
'allmessagesname' => 'Ngaran',
'allmessagesnotsupportedDB' => 'Special:AllMessages teu dirojong sabab wgUseDatabaseMessages pareum.',
'allmessagesnotsupportedUI' => 'Basa antarbeungeut anjeun kiwari <b>$1</b> teu dirojong ku Special:AllMessages na loka ieu.',
'allmessagestext' => 'Ieu mangrupa daptar sadaya pesen sistim nu aya na spasi ngaran MediaWiki:.',
'allnonarticles' => 'Sadaya nu lain artikel',
'allnotinnamespace' => 'Sadaya kaca (teu na $1 ngaranspasi)',
'allowemail' => 'Buka koropak pikeun nampa surélék ti nu séjén',
'allpages' => 'Sadaya kaca',
'allpagesfrom' => 'Pintonkeun kaca ti mimiti:',
'allpagesnext' => 'Salajengna',
'allpagesprev' => 'Saméméhna',
'allpagessubmit' => 'Jung',
'alphaindexline' => '$1 ka $2',
'already_bureaucrat' => 'Pamaké ieu geus boga kalungguhan birokrat',
'already_steward' => 'Pamaké ieu mémang geus jadi \'\'steward\'\'',
'already_sysop' => 'Pamaké ieu geus boga kalungguhan kuncén',
'alreadyloggedin' => '<font color=red><b>Pamaké $1, anjeun geus asup log!</b></font><br />',
'alreadyrolled' => 'Teu bisa mulangkeun édit ahir [[$1]] ku [[User:$2|$2]] ([[User talk:$2|Obrolan]]); geus aya nu ngédit atawa mulangkeun kacana. 

Édit ahir ku [[User:$3|$3]] ([[User talk:$3|Obrolan]]).',
'ancientpages' => 'Kaca pangheubeulna',
'and' => 'jeung',
'anontalk' => 'Obrolan pikeun IP ieu',
'anontalkpagetext' => '----\'\'Ieu mangrupa kaca sawala pikeun pamaké anonim nu can (henteu) nyieun rekening, kusabab kitu [[alamat IP]] dipaké dina hal ieu pikeun nyirikeun anjeunna. Alamat IP ieu bisa dipaké ku sababaraha urang. Mun anjeun salasahiji pamaké anonim sarta ngarasa aya koméntar nu teu pakait geus ditujukeun ka anjeun, leuwih hadé [[Special:Userlogin|nyieun rekening atawa asup log]] sangkan teu pahili jeung pamaké anonim séjén.\'\'',
'anonymous' => 'Pamaké anonim Wikipédia',
'article' => 'Kaca eusi',
'articleexists' => 'Kaca nu ngaranna kitu geus aya, atawa ngaran nu dipilih ku anjeun teu sah. Mangga pilih ngaran séjén.',
'articlepage' => 'Témbongkeun kaca eusi',
'autoblocker' => 'Otomatis dipeungpeuk sabab alamat IP anjeun sarua jeung "$1". Alesan "$2".',
'badaccesstext' => 'Peta nu dipundut diwates ukur pikeun pamaké nu mibanda idin "$2". Tempo $1.',
'badarticleerror' => 'Peta ieu teu bisa dipigawé na kaca ieu.',
'badfilename' => 'Ngaran gambar geus dirobah jadi "$1".',
'badfiletype' => '".$1" lain format koropak gambar nu dianjurkeun.',
'badipaddress' => 'Alamat IP teu sah',
'badquery' => 'Pamundut néang formatna salah',
'badquerytext' => 'Kami teu bisa ngolah \'\'query\'\' anjeun, biasana sabab anjeun nyoba néang kecap nu ukur hiji/dua aksara, nu mémang can dirojong; bisa ogé alatan anjeun salah ngetik. Mangga cobian deui.',
'badretype' => 'Sandi nu diasupkeun teu cocog.',
'badsig' => 'Parafna teu valid; pariksa tag HTML-na geura.',
'badtitle' => 'Judul goréng',
'badtitletext' => 'Judul kaca nu dipénta teu sah, kosong, atawa judul antarbasa atawa antarwikina salah tumbu.',
'blanknamespace' => '(Utama)',
'blockedtext' => 'Ngaran pamaké atawa alamat IP anjeun dipeungpeuk ku $1. Alesanana:<br />\'\'$2\'\'<p>Anjeun bisa nepungan $1 atawa salasahiji [[Wikipédia:Kuncén|Kuncén]] séjén pikeun nyawalakeun hal ieu.

Catet yén anjeun teu bisa maké fungsi "surélékan pamaké ieu" mun anjeun teu ngadaptarkeun alamat surélék nu sah kana [[Special:Preferences|préferénsi pamaké]] anjeun.

Alamat IP anjeun $3, lampirkeun alamat ieu dina unggal \'\'query\'\' anjeun.',
'blockedtitle' => 'Pamaké dipeungpeuk',
'blockip' => 'Peungpeuk pamaké',
'blockipsuccesssub' => 'Meungpeuk geus hasil',
'blockipsuccesstext' => '"$1" dipeungpeuk.
<br />Tempo [[Special:Ipblocklist|daptar peungpeuk IP]] pikeun nempoan deui peungpeuk.',
'blockiptext' => 'Paké formulir di handap pikeun meungpeuk aksés nulis ti alamat IP atawa ngaran pamaké husus. Ieu sakuduna ditujukeun pikeun nyegah vandalisme, sarta saluyu jeung [[Wikipédia:Kawijakan|kawijakan]]. Eusi alesan nu jéntré (misal, ngarujuk kaca tinangtu nu geus diruksak).',
'blocklink' => 'peungpeuk',
'blocklistline' => '$1, $2 dipeungpeuk $3 (kadaluwarsa $4)',
'blocklogentry' => 'dipeungpeuk "$1" nepi ka $2',
'blocklogpage' => 'Log_peungpeuk',
'blocklogtext' => 'Ieu mangrupa log peta meungpeuk jeung muka peungpeuk pamaké, teu kaasup alamat IP nu dipeungpeukna otomatis. Tempo [[Special:Ipblocklist|daptar peungpeuk IP]] pikeun daptar cegahan jeung peungpeuk.',
'bold_sample' => 'Téks kandel',
'bold_tip' => 'Téks kandel',
'booksources' => 'Sumber buku',
'booksourcetext' => 'Di handap ieu daptar tumbu ka situs séjén nu ngajual buku anyar tur urut, sarta bisa jadi boga iber ngeunaan buku nu ditéang. Wikipédia teu aya patalina jeung salasahiji bisnis ieu, sarta daptar ieu ulah dianggap salaku iklan.',
'brokenredirects' => 'Alihan buntu',
'brokenredirectstext' => 'Alihan di handap numbu ka kaca nu teu aya.',
'bugreports' => 'Laporan kutu',
'bugreportspage' => 'Project:Laporan_kutu',
'bureaucratlog' => 'Log_birokrat',
'bureaucratlogentry' => 'Hak pamaké "$1" sét "$2"',
'bydate' => 'dumasar titimangsa',
'byname' => 'dumasar ngaran',
'bysize' => 'dumasar ukuran',
'cachederror' => 'Kanggo kaca nu dipénta, di handap ieu mangrupa salinan ti nu aya, tiasa waé tos tinggaleun jaman.',
'cancel' => 'Bolay',
'cannotdelete' => 'Teu bisa ngahapus kaca atawa gambar nu dimaksud (bisa jadi geus aya nu ngahapus saméméhna).',
'cantrollback' => 'Éditan teu bisa dibalikkeun; kontribusi panungtung ngarupakeun hiji-hijina panulis kaca ieu.',
'categories' => 'Kategori',
'categories1' => 'Kategori',
'categoriespagetext' => 'Kategori-kategori di handap ieu aya na wiki.',
'category' => 'kategori',
'category_header' => 'Artikel-artikel na kategori "$1"',
'categoryarticlecount' => 'Aya $1 artikel na kategori ieu.',
'categoryarticlecount1' => 'Aya $1 artikel na kategori ieu.',
'changed' => 'geus robah',
'changepassword' => 'Robah sandi',
'changes' => 'robahan',
'cite' => 'Cutat',
'cite_article_link' => 'Cutat artikel ieu',
'cite_page' => 'Kaca:',
'cite_submit' => 'Cutat',
'cite_text' => '__NOTOC__
<div style="width: 90%; text-align: center; font-size: 85%; margin: 10px auto;">Eusi: [[#Gaya APA|APA]] | [[#Gaya MLA|MLA]] | [[#Gaya MHRA|MHRA]] | [[#Gaya Chicago|Chicago]] | [[#Gaya CBE/CSE|CSE]] | [[#Gaya Bluebook|Bluebook]] | [[#Éntri BibTeX|BibTeX]]</div>
<div style="border: 1px solid grey; background: #E6E8FA; width: 90%; padding: 15px 30px 15px 30px; margin: 10px auto;">

== Dadaran bibliografis pikeun "{{FULLPAGENAME}}" ==

* Ngaran kaca: {{FULLPAGENAME}}
* Ditulis ku: kontributor {{SITENAME}}
* Pamedal: \'\'{{SITENAME}}, {{int:sitesubtitle}}\'\'.
* Titimangsa révisi ahir: {{CURRENTDAY}} {{CURRENTMONTHNAME}} {{CURRENTYEAR}} {{CURRENTTIME}} UTC
* Titimangsa disalin: <citation>{{CURRENTDAY}} {{CURRENTMONTHNAME}} {{CURRENTYEAR}} {{CURRENTTIME}} UTC</citation>
* URL permanén: {{fullurl:{{FULLPAGENAME}}|oldid={{REVISIONID}}}}
* ID vérsi kaca: {{REVISIONID}}

Kadé pariksa rumpakana, luyukeun jeung kaperluan anjeun. Pikeun leuwih jéntré, mangga buka \'\'\'[[Wikipédia:Nyutat Wikipédia|Nyutat Wikipédia]]\'\'\'.

</div>
<div class="plainlinks" style="border: 1px solid grey; width: 90%; padding: 15px 30px 15px 30px; margin: 10px auto;"> 

== Gaya cutatan pikeun {{FULLPAGENAME}} ==
=== [[Gaya APA]] ===
{{FULLPAGENAME}}. ({{CURRENTYEAR}}, {{CURRENTMONTHNAME}} {{CURRENTDAY}}). \'\'{{SITENAME}}, {{int:sitesubtitle}}\'\'. Disalin <citation>{{CURRENTTIME}}, {{CURRENTMONTHNAME}} {{CURRENTDAY}}, {{CURRENTYEAR}}</citation> ti {{fullurl:{{FULLPAGENAME}}|oldid={{REVISIONID}}}}.
=== [[Manual gaya MLA|Gaya MLA]] ===
"{{FULLPAGENAME}}." \'\'{{SITENAME}}, {{int:sitesubtitle}}\'\'. {{CURRENTDAY}} {{CURRENTMONTHABBREV}} {{CURRENTYEAR}}, {{CURRENTTIME}} UTC. <citation>{{CURRENTDAY}} {{CURRENTMONTHABBREV}} {{CURRENTYEAR}}, {{CURRENTTIME}}</citation> &lt;{{fullurl:{{FULLPAGENAME}}|oldid={{REVISIONID}}}}&gt;. 
=== [[Tungtunan gaya MHRA|Gaya MHRA]] === 
Kontributor {{SITENAME}}, \'{{FULLPAGENAME}}\', \'\'{{SITENAME}}, {{int:sitesubtitle}},\'\' {{CURRENTDAY}} {{CURRENTMONTHNAME}} {{CURRENTYEAR}}, {{CURRENTTIME}} UTC, &lt;{{fullurl:{{FULLPAGENAME}}|oldid={{REVISIONID}}}}&gt; [diaksés <citation>{{CURRENTDAY}} {{CURRENTMONTHNAME}} {{CURRENTYEAR}}</citation>] 
=== [[Manuah gaya Chicago|Gaya Chicago]] === 
Kontributor {{SITENAME}}, "{{FULLPAGENAME}}," \'\'{{SITENAME}}, {{int:sitesubtitle}},\'\' {{fullurl:{{FULLPAGENAME}}|oldid={{REVISIONID}}}} (diaksés <citation>{{CURRENTMONTHNAME}} {{CURRENTDAY}}, {{CURRENTYEAR}}</citation>). 
=== [[Council of Science Editors|Gaya CBE/CSE]] === 
Kontributor {{SITENAME}}. {{FULLPAGENAME}} [Internét]. {{SITENAME}}, {{int:sitesubtitle}}; {{CURRENTYEAR}} {{CURRENTMONTHABBREV}} {{CURRENTDAY}}, {{CURRENTTIME}} UTC [dicutat <citation>{{CURRENTYEAR}} {{CURRENTMONTHABBREV}} {{CURRENTDAY}}</citation>]. Tiasa dibuka di: {{fullurl:{{FULLPAGENAME}}|oldid={{REVISIONID}}}}. 
=== [[Bluebook|Gaya Bluebook]] === 
{{FULLPAGENAME}}, {{fullurl:{{FULLPAGENAME}}|oldid={{REVISIONID}}}} (Panungtungan dibuka <citation>{{CURRENTMONTHNAME}} {{CURRENTDAY}}, {{CURRENTYEAR}}</citation>). 
=== Éntri [[BibTeX]] === 

  @misc{ wiki:xxx,
    author = "{{SITENAME}}",
    title = "{{FULLPAGENAME}} --- {{SITENAME}}{,} {{MediaWiki:Sitesubtitle}}",
    year = "{{CURRENTYEAR}}",
    url = "{{fullurl:{{FULLPAGENAME}}|oldid={{REVISIONID}}}}",
    note = "[Online; diaksés <citation>{{CURRENTDAY}}-{{CURRENTMONTHNAME}}-{{CURRENTYEAR}}</citation>]"
  }

Nalika migunakeun url pakét [[LaTeX]] (<code>\usepackage{url}</code> di mana waé dina pamuka) nu condong némbongkeun format alamat ramat nu alus, sigana mending nu di handap ieu:

  @misc{ wiki:xxx,
    author = "{{SITENAME}}",
    title = "{{FULLPAGENAME}} --- {{SITENAME}}{,} {{MediaWiki:Sitesubtitle}}",
    year = "{{CURRENTYEAR}}",
    url = "\'\'\'\url{\'\'\'{{fullurl:{{FULLPAGENAME}}|oldid={{REVISIONID}}}}\'\'\'}\'\'\'",
    note = "[Online; diaksés <citation>{{CURRENTDAY}}-{{CURRENTMONTHNAME}}-{{CURRENTYEAR}}</citation>]"
  }

</div> <!--closing "Citation styles" div-->',
'clearyourcache' => '\'\'\'Catetan:\'\'\' Sanggeus nyimpen, anjeun perlu ngosongkeun \'\'cache\'\' panyungsi anjeun pikeun nempo parobahanana:
\'\'\'Mozilla/Safari/Konqueror:\'\'\' pencét & tahan \'\'Shift\'\' bari ngaklik \'\'Reload\'\' (atawa pencét \'\'Ctrl-Shift-R\'\'), \'\'\'IE:\'\'\' pencét \'\'Ctrl-F5\'\', \'\'\'Opera:\'\'\' pencét \'\'F5\'\'.',
'columns' => 'Kolom',
'compareselectedversions' => 'Bandingkeun vérsi nu dipilih',
'confirm' => 'Konfirmasi',
'confirm_purge' => 'Hapus \'\'cache\'\' kaca ieu?

$1',
'confirm_purge_button' => 'Heug',
'confirmdelete' => 'Konfirmasi ngahapus',
'confirmdeletetext' => 'Anjeun rék ngahapus hiji kaca atawa gambar katut jujutanana tina database, mangga yakinkeun yén anjeun mémang niat midamel ieu, yén anjeun ngartos kana sagala konsékuénsina, sarta yén anjeun ngalakukeun ieu saluyu jeung [[Wikipédia:Kawijakan|kawijakan Wikipédia]].',
'confirmemail' => 'Konfirmasi alamat surélék',
'confirmemail_body' => 'Aya, sigana mah anjeun ti alamat IP $1, geus ngadaptarkeun rekening "$2" maké alamat surélék ieu na {{SITENAME}}.

Pikeun mastikeun yén rekening ieu mémang kagungan sarta ngakifkeun fitur surélék di {{SITENAME}}, buka tumbu di handap ieu kana panyungsi/\'\'browser\'\' anjeun:

$3

Mun ieu *lain* anjeun, tumbuna ulah dituturkeun. Sandi konfirmasi ieu bakal kadaluwarsa $4.',
'confirmemail_error' => 'Aya nu salah nalika nyimpen konfirmasi anjeun.',
'confirmemail_invalid' => 'Sandi konfirmasi salah, meureun alatan sandina geus kadaluwarsa.',
'confirmemail_loggedin' => 'Alamat surélék anjeun geus dikonfirmasi.',
'confirmemail_send' => 'Kirimkeun surat konfirmasi sandi',
'confirmemail_sendfailed' => 'Surat konfirmasi teu kakirim. Pariksa alamatna, bisi salah.',
'confirmemail_sent' => 'Surélék konfirmasi geus dikirim.',
'confirmemail_subject' => 'Konfirmasi alamat surélék {{SITENAME}}',
'confirmemail_success' => 'Alamat surélék anjeun geus dikonfirmasi, ayeuna anjeun geus bisa migunakeun wikina.',
'confirmemail_text' => 'Wiki ieu merlukeun anjeun sangkan méré konfirmasi alamat surélék saméméh migunakeun fitur surélék. Aktifkeun tombol di handap pikeun ngirimkeun surat konfirmasi ka alamat anjeun. Suratna ngandung tumbu nu ngandung sandina; muatkeun tumbuna kana panyungsi anjeun pikeun ngonfirmasi yén alamat surélék anjeun sah.',
'confirmprotect' => 'Konfirmasi ngonci',
'confirmprotecttext' => 'Naha anjeun leres hoyong ngonci kaca ieu?',
'confirmrecreate' => 'Pamaké [[User:$1|$1]] ([[User talk:$1|ngobrol]]) geus ngahapus artikel ieu nalika anjeun ngédit kalawan alesan:
: \'\'$2\'\'
mangga pastikeun yén anjeun rék nyieun deui artikel ieu.',
'confirmunprotect' => 'Konfirmasi muka konci',
'confirmunprotecttext' => 'Naha anjeun leres hoyong muka konci kaca ieu?',
'contextchars' => 'Karakter kontéks per baris',
'contextlines' => 'Jumlah baris sakali némbongan',
'contribs-showhideminor' => '$1 éditan minor',
'contribslink' => 'sumbang',
'contribsub' => 'Pikeun $1',
'contributions' => 'Kontribusi pamaké',
'copyright' => 'Sadaya kandungan ieu loka aya dina panangtayungan <a class=\'internal\' href="{{localurle:Wikipédia:Téks_Lisénsi Dokumén Bébas GNU}}">Lisénsi Dokumén Bébas GNU</a> (tingal <b><a class=\'internal\' href="{{localurle:Wikipédia:Hak cipta}}">Hak cipta</a></b> sangkan leuwih jéntré).<br />',
'copyrightpage' => 'Wikipédia:Hak cipta',
'copyrightpagename' => 'Hak cipta Wikipédia',
'copyrightwarning' => '<div id="editpage-specialchars" class="plainlinks" style="margin-top:15px;border-width:1px;border-style:solid;border-color:#aaaaaa;padding:2px;">
<small>
Asupkeun:
<charinsert> Á á É é Í í Ó ó Ú ú </charinsert> &nbsp;
<charinsert> À à È è Ì ì Ò ò Ù ù </charinsert> &nbsp;
<charinsert> Â â Ê ê Î î Ô ô Û û </charinsert> &nbsp;
<charinsert> Ä ä Ë ë Ï ï Ö ö Ü ü </charinsert> &nbsp;
<charinsert> ß </charinsert> &nbsp;
<charinsert> Ã ã Ñ ñ Õ õ </charinsert> &nbsp;
<charinsert> Ç ç Ģ ģ Ķ ķ Ļ ļ Ņ ņ Ŗ ŗ Ş ş Ţ ţ </charinsert> &nbsp;
<charinsert> Ć ć Ĺ ĺ Ń ń Ŕ ŕ Ś ś Ý ý Ź ź </charinsert> &nbsp;
<charinsert> Đ đ </charinsert> &nbsp;
<charinsert> Ů ů </charinsert> &nbsp;
<charinsert> Č č Ď ď Ľ ľ Ň ň Ř ř Š š Ť ť Ž ž </charinsert> &nbsp;
<charinsert> Ǎ ǎ Ě ě Ǐ ǐ Ǒ ǒ Ǔ ǔ </charinsert> &nbsp;
<charinsert> Ā ā Ē ē Ī ī Ō ō Ū ū </charinsert> &nbsp;
<charinsert> ǖ ǘ ǚ ǜ </charinsert> &nbsp;
<charinsert> Ĉ ĉ Ĝ ĝ Ĥ ĥ Ĵ ĵ Ŝ ŝ Ŵ ŵ Ŷ ŷ </charinsert> &nbsp;
<charinsert> Ă ă Ğ ğ Ŭ ŭ </charinsert> &nbsp;
<charinsert> Ċ ċ Ė ė Ġ ġ İ ı Ż ż </charinsert> &nbsp;
<charinsert> Ą ą Ę ę Į į Ų ų; </charinsert> &nbsp;
<charinsert> Ł ł </charinsert> &nbsp;
<charinsert> Ő ő Ű ű </charinsert> &nbsp;
<charinsert> Ŀ ŀ </charinsert> &nbsp;
<charinsert> Ħ ħ </charinsert> &nbsp;
<charinsert> Ð ð Þ þ </charinsert> &nbsp;
<charinsert> Œ œ </charinsert> &nbsp;
<charinsert> Æ æ Ø ø Å å </charinsert> &nbsp;
<charinsert> – — … </charinsert> &nbsp;
<charinsert> [+] [[+]] {{+}} </charinsert> &nbsp;
<charinsert> ~ | ° → </charinsert> &nbsp;
<charinsert> ± − × ¹ ² ³ </charinsert> &nbsp;
<charinsert> ‘ “ ’ ” </charinsert> &nbsp;
<charinsert> € </charinsert> &nbsp;
</small>
</div>
<div style="margin-top:2em">
<div style="font-weight: bold; font-size: 120%;">Parobahan jieunan anjeun bakal geuwat katémbong.</div>
* Pikeun nyoba-nyoba, mangga pigunakeun [[Wikipédia:Kotrétan|kotrétan]].
* Anjeun dirojong pisan pikeun nyieun, ngembangkeun, sarta ngaronjatkeun mutu artikel; tapi, éditan goréng bakal kaawaskeun sahingga bisa geuwat dihapus/diropéa deui.
* \'\'\'Mangga\'\' [[Wikipédia:Cutat rujukan|cutat rujukan anjeun]]\'\' sahingga nu séjén bisa mariksa karya anjeun.
----
Perhatikeun yén sadaya kontribusi ka MediaWiki dianggap medal dina panangtayungan Lisénsi Dokumén Bébas GNU (tempo $1 pikeun jéntréna). Mun anjeun teu miharep tulisan anjeun dirobah sarta disebarkeun deui, ulah dilebetkeun ka dieu.<br />
Anjeun ogé jangji yén tulisan ieu dijieun ku sorangan, atawa disalin ti \'\'domain\'\' umum atawa sumberdaya bébas séjénna. <strong>ULAH NGALEBETKEUN KARYA NU MIBANDA HAK CIPTA TANPA IDIN!</strong>',
'copyrightwarning2' => 'Catet yén sadaya kontribusi ka {{SITENAME}} bisa diédit, dirobah, atawa dihapus ku kontributor séjén. Mun anjeun teu miharep tulisan anjeun dirobah, ulah ngintunkeun ka dieu.<br />
Anjeun ogé mastikeun yén ieu téh pituin tulisan anjeun, atawa salinan ti domain umum atawa sumberdaya bébas séjénna (tempo $1 pikeun écésna).
<strong>ULAH NGINTUNKEUN KARYA NU MIBANDA HAK CIPTA TANPA WIDI!</strong>',
'couldntremove' => 'Teu bisa ngahapus \'$1\'...',
'createaccount' => 'Jieun rekening anyar',
'createaccountmail' => 'ku surélék',
'createarticle' => 'Jieun artikel',
'created' => 'geus dijieun',
'creditspage' => 'Pangajén kaca',
'cur' => 'kiw',
'currentevents' => 'Keur lumangsung',
'currentevents-url' => 'Keur lumangsung',
'currentrev' => 'Révisi kiwari',
'currentrevisionlink' => 'Témbongkeun révisi kiwari',
'databaseerror' => 'Kasalahan gudang data',
'datedefault' => 'Tanpa préferénsi',
'dateformat' => 'Format titimangsa',
'datetime' => 'Titimangsa jeung wanci',
'dberrortext' => 'Kasalahan rumpaka mundut databasis.
Ieu bisa nunjukkeun ayana kutu na parabot leuleusna.
Pamundut databasis nu panungtungan nyaéta:
<blockquote><tt>$1</tt></blockquote>
ti antara fungsi "<tt>$2</tt>".
Kasalahan MySQL nu mulang "<tt>$3: $4</tt>".',
'dberrortextcl' => 'Kasalahan rumpaka mundut databasis.
Pamuncut databasis nu panungtungan nyaéta:
"$1"
ti antara fungsi "$2".
Kasalahan MySQL nu mulang "$3: $4".',
'deadendpages' => 'Kaca buntu',
'default' => 'ti dituna',
'defaultns' => 'Téang ti antara spasingaran ieu luyu jeung ti dituna:',
'defemailsubject' => 'Surélék Wikipédia',
'delete' => 'Hapus',
'delete_and_move' => 'Hapus jeung pindahkeun',
'delete_and_move_reason' => 'Hapus sangkan bisa mindahkeun',
'delete_and_move_text' => '==Merlukeun hapusan==

Artikel nu dituju "[[$1]]" geus aya. Badé dihapus baé sangkan bisa mindahkeun?',
'deletecomment' => 'Alesan ngahapus',
'deletedarticle' => 'ngahapus "$1"',
'deletedrev' => '[dihapus]',
'deletedrevision' => 'Révisi heubeul nu dihapus $1.',
'deletedtext' => '"$1" geus dihapus. Tempo $2 pikeun rékaman hapusan anyaran ieu.',
'deletedwhileediting' => 'Awas: kaca ieu geus dihapus nalika anjeun ngédit!',
'deleteimg' => 'hap',
'deleteimgcompletely' => 'Hapus sadaya révisi',
'deletepage' => 'Hapus kaca',
'deletesub' => '(Ngahapus "$1")',
'deletethispage' => 'Hapus kaca ieu',
'deletionlog' => 'log hapusan',
'dellogpage' => 'Log_hapusan',
'dellogpagetext' => 'Di handap ieu daptar hapusan nu ahir-ahir, sakabéh wanci dumasar wanci server (UTC).
<ul>
</ul>',
'destfilename' => 'Ngaran koropak tujuan',
'developertext' => 'Peta nu dipénta ngan bisa dipigawé ku pamaké nu statusna "developer". Tempo $1.',
'developertitle' => 'Kudu ku developer',
'diff' => 'béda',
'difference' => '(Béda antarrévisi)',
'disambiguations' => 'Kaca disambiguasi',
'disambiguationspage' => 'Project:Tumbu_ka_kaca_disambiguasi',
'disambiguationstext' => 'Kaca ieu numbu ka <i>kaca disambiguasi</i>, nu sakuduna mah numbu ka kaca nu ditujul.<br />Hiji kaca dianggap salaku disambiguasi mun numbu ti $1.<br />Tumbu ti ngaranspasi séjén <i>teu</i> dibéréndélkeun di dieu.',
'disclaimerpage' => 'Wikipédia:Bantahan_umum',
'disclaimers' => 'Bantahan',
'doubleredirects' => 'Alihan ganda',
'doubleredirectstext' => 'Unggal baris ngandung tumbu ka pangalihan kahiji jeung kadua, kitu ogé téks dina baris kahiji pangalihan kadua, nu biasana méré kaca tujuan nu bener, nu sakuduna ditujul dina pangalihan kahiji.',
'eauthentsent' => 'Surélék konfirmasi geus dikirim ka alamat bieu. Méméh aya surat séjén asup ka rekeningna, anjeun kudu nuturkeun pituduh na surélékna pikeun ngonfirmasi yén rekening éta téh bener nu anjeun.',
'edit' => 'Édit',
'edit-externally' => 'Édit koropak ieu migunakeun aplikasi éksternal',
'edit-externally-help' => 'Tempo [http://meta.wikimedia.org/wiki/Help:External_editors setup instructions] pikeun émbaran leuwih jéntré.',
'editcomment' => 'Komentar ngéditna: "<i>$1</i>".',
'editconflict' => 'Konflik éditan: $1',
'editcurrent' => 'Édit vérsi kiwari kaca ieu',
'editgroup' => 'Édit Golongan',
'edithelp' => 'Pitulung ngédit',
'edithelppage' => 'Pitulung:Ngédit',
'editing' => 'Ngédit $1',
'editingcomment' => 'Ngédit $1 (pamanggih)',
'editingold' => '<strong>PERHATOSAN: Anjeun ngédit révisi kadaluwarsa kaca ieu. Mun ku anjeun disimpen, sagala parobahan nu dijieun sanggeus révisi ieu bakal leungit.</strong>',
'editingsection' => 'Ngédit $1 (bagian)',
'editsection' => 'édit',
'editthispage' => 'Édit kaca ieu',
'editusergroup' => 'Édit Golongan Pamaké',
'email' => 'Surélék',
'emailauthenticated' => 'Alamat surélék anjeun geus dioténtikasi $1.',
'emailconfirmlink' => 'Konfirmasi alamat surélék anjeun',
'emailforlost' => 'Widang nu ditandaan béntang (*) sipatna pilihan. Neundeun alamat surélék bisa dimangpaatkeun ku nu séjén pikeun nepungan anjeun ngaliwatan website tanpa kudu mikeun alamat surélék urang ka maranéhna, sarta bisa ogé dipaké pikeun nepikeun sandi anyar mun anjeun poho.<br /><br />Ngaran asli anjeun, mun anjeun milih nyadiakeun, bakal dipaké pikeun ngararangkénan anjeun ku karya-karya anjeun.',
'emailfrom' => 'Ti',
'emailmessage' => 'Pesen',
'emailnotauthenticated' => 'Alamat surélék anjeun <strong>can dioténtikasi</strong>. Moal aya surélék nu bakal dikirim pikeun fitur-fitur di handap ieu.',
'emailpage' => 'Surélékan pamaké',
'emailpagetext' => 'Mun pamaké ieu ngasupkeun alamat surélék nu sah na préferénsi pamakéna, formulir di handap bakal ngirimkeun hiji pesen. Alamat surélék nu ku anjeun diasupkeun kana préferénsi pamaké anjeun bakal katémbong salaku alamat "Ti" surélékna, sahingga nu dituju bisa ngabales.',
'emailsend' => 'Kirim',
'emailsent' => 'Surélék geus dikirim',
'emailsenttext' => 'Pesen surélék anjeun geus dikirim.',
'emailsubject' => 'Ngeunaan',
'emailto' => 'Ka',
'emailuser' => 'Surélékan pamaké ieu',
'emptyfile' => 'Koropak nu dimuatkeun ku anjeun jigana kosong. Hal ieu bisa jadi alatan sarupaning \'\'typo\'\' na ngaran koropakna. Mangga parios deui yén anjeun leres-leres hoyong ngamuat koropak éta.',
'enotif_body' => 'Sadérék $WATCHINGUSERNAME,

Kaca $PAGETITLE na {{SITENAME}} geus $CHANGEDORCREATED tanggal $PAGEEDITDATE ku $PAGEEDITOR. Mangga tingal {{SERVER}}{{localurl:$PAGETITLE_RAWURL}} pikeun vérsi kiwari.

$NEWPAGE

Ringkesan éditor: $PAGESUMMARY $PAGEMINOREDIT

Kontak éditor:
surat {{SERVER}}{{localurl:Special:Emailuser|target=$PAGEEDITOR_RAWURL}}
wiki {{SERVER}}{{localurl:User:$PAGEEDITOR_RAWURL}}

Mun anjeun teu sindang deui ka ieu kaca, parobahan salajengna moal diémbarkeun. Anjeun bisa ogé nyetél deui umbul-umbul pikeun sadaya kaca nu aya na daptar awaseun anjeun.

             Sistim émbaran {{SITENAME}} pikeun anjeun

--
Pikeun ngarobah setélan dabtar awaseun anjeun, sindang ka {{SERVER}}{{localurl:Special:Watchlist|edit=yes}}

Asupan jeung bantuan salajengna:
{{SERVER}}{{localurl:Wikipédia:Pitulung}}',
'enotif_lastvisited' => 'Tempo {{SERVER}}{{localurl:$PAGETITLE_RAWURL|diff=0&oldid=$OLDID}} pikeun sadaya parobahan ti saprak anjeun ninggalkeun ieu kaca.',
'enotif_mailer' => 'Surat Émbaran {{SITENAME}}',
'enotif_newpagetext' => 'Kaca ieu anyar.',
'enotif_reset' => 'Tandaan sadaya kaca nu geus dilongok',
'enotif_subject' => 'Kaca $PAGETITLE {{SITENAME}} geus $CHANGEDORCREATED ku $PAGEEDITOR',
'enterlockreason' => 'Asupkeun alesan pikeun ngonci, kaasup kira-kira iraha konci ieu rék dibuka',
'error' => 'Kasalahan',
'errorpagetitle' => 'Kasalahan',
'exbeforeblank' => 'eusi méméh dikosongkeun nyéta:',
'exblank' => 'kaca ieu kosong',
'excontent' => 'eusina nu heubeul:',
'excontentauthor' => 'eusina: \'$1\' (nu dikontribusi ku \'$2\' wungkul)',
'exif-artist' => 'Pangarang',
'explainconflict' => 'Aya nu geus ngarobah kaca ieu saprak anjeun mimiti ngédit. Téks béh luhur ngandung téks kaca nu aya kiwari, parobahan anjeun ditémbongkeun di béh handap. Anjeun kudu ngagabungkeun parobahan anjeun kana téks nu kiwari.
<b>Ngan</b> téks nu béh luhur nu bakal disimpen nalika anjeun mencét "Simpen".
<p>',
'export' => 'Ékspor kaca',
'exportcuronly' => 'Asupkeun ukur révisi kiwari, teu sakabéh jujutan',
'exporttext' => 'Anjeun bisa ngékspor téks sarta jujutan éditan ti kaca tinangtu atawa ti sababaraha kaca nu ngagunduk na sababaraha XML; ieu salajengna tiasa diimpor ka wiki séjén nu ngajalankeun software MediaWiki, ditransformasikeun, atawa ukur disimpen pikeun kaperluan anjeun pribadi.',
'extlink_sample' => 'Judul tumbu http://www.conto.com',
'extlink_tip' => 'Tumbu kaluar (inget awalan http://)',
'faq' => 'NLD',
'faqpage' => 'Wikipédia:NLD',
'feedlinks' => 'Asupan:',
'filecopyerror' => 'Teu bisa nyalin koropak "$1" ka "$2".',
'filedeleteerror' => 'Teu bisa ngahapus koropak "$1".',
'filedesc' => 'Ringkesna',
'fileexists' => 'Koropak nu ngaranna kieu geus aya, mangga parios $1 mun anjeun teu yakin rék ngaganti.',
'fileexists-forbidden' => 'Koropak nu ngaranna ieu geus aya; mangga balik deui sarta muatkeun koropakna maké ngaran nu béda. [[Image:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Koropak nu ngaranna ieu geus aya dina gudang koropak babagi (\'\'shared file repository\'\'); mangga balik deui sarta muatkeun koropak ieu maké ngaran nu béda. [[Image:$1|thumb|center|$1]]',
'filemissing' => 'Koropak leungit',
'filename' => 'Ngaran koropak',
'filenotfound' => 'Teu bisa manggihan koropak "$1".',
'filerenameerror' => 'Teu bisa ngaganti ngaran koropak "$1" jadi "$2".',
'files' => 'Koropak',
'filesource' => 'Sumber',
'filestatus' => 'Status hak cipta',
'fileuploaded' => 'Koropak "$1" geus réngsé dimuat. Tuturkeun tumbu ieu: $2 pikeun kaca dadaran sarta iber ngeunaan koropakna, kayaning ti mana asalna, dijieun iraha jeung ku saha, sarta nu séjénna nu anjeun nyaho.',
'fileuploadsummary' => 'Ringkesan:',
'formerror' => 'Kasalahan: teu bisa ngirim formulir',
'go' => 'Jung',
'googlesearch' => '<!-- SiteSearch Google -->
<FORM method=GET action="http://www.google.co.id/intl/su/search">
<TABLE bgcolor="#FFFFFF"><tr><td>
<A HREF="http://www.google.co.id/intl/su/">
<IMG SRC="http://www.google.co.id/logos/Logo_40wht.gif"
border="0" ALT="Google"></A>
</td>
<td>
<INPUT TYPE=text name=q size=31 maxlength=255 value="$1">
<INPUT type=submit name=btnG VALUE="Panyungsi Google">
<font size=-1>
<input type=hidden name=domains value="{{SERVER}}"><br /><input type=radio name=sitesearch value=""> WWW <input type=radio name=sitesearch value="{{SERVER}}" checked> {{SERVER}} <br />
<input type=\'hidden\' name=\'ie\' value=\'$2\'>
<input type=\'hidden\' name=\'oe\' value=\'$2\'>
</font>
</td></tr></TABLE>
</FORM>
<!-- SiteSearch Google -->',
'group-admin-desc' => 'Pamaké nu kapercaya bisa meungpeuk pamaké sarta ngahapus artikel',
'group-admin-name' => 'Kuncén',
'group-anon-desc' => 'Pamaké anonim',
'group-anon-name' => 'Anonim',
'group-bureaucrat-desc' => 'Grup birokrat wenang ngangkat kuncén',
'group-bureaucrat-name' => 'Birokrat',
'group-loggedin-name' => 'Pamaké',
'guesstimezone' => 'Eusian ti panyungsi',
'headline_sample' => 'Téks judul',
'headline_tip' => 'Judul tingkat 2',
'help' => 'Pitulung',
'helppage' => 'Wikipédia:Pitulung',
'hide' => 'sumputkeun',
'hidetoc' => 'sumputkeun',
'hist' => 'juj',
'histfirst' => 'Pangheubeulna',
'histlast' => 'Pangahirna',
'histlegend' => 'Pilihan béda: tandaan wadah buleud vérsina pikeun ngabandingkeun sarta pencét énter atawa tombol di handap.<br/>
Katerangan: (kiw) = bédana jeung vérsi kiwari,
(ahir) = bédana jeung vérsi nu harita, m = éditan minor.',
'history' => 'Jujutan kaca',
'history_short' => 'Jujutan',
'historywarning' => 'Perhatosan: Kaca nu rék dihapus mibanda jujutan:',
'hr_tip' => 'Garis horizontal (use sparingly)',
'ignorewarning' => 'Ulah diwaro, simpen baé koropakna.',
'illegalfilename' => 'Ngaran koropak "$1" ngandung aksara nu teu diwenangkeun pikeun judul kaca. Mangga gentos ngaranna tur cobi muatkeun deui.',
'ilsubmit' => 'Téang',
'image_sample' => 'Conto.jpg',
'imagelinks' => 'Tumbu gambar',
'imagelist' => 'Daptar gambar',
'imagelistall' => 'kabéh',
'imagelisttext' => 'Di handap ieu daptar $1 gambar nu disusun $2.',
'imagemaxsize' => 'Watesan gambar na kaca dadaran gambar nepi ka:',
'imagepage' => 'Témbongkeun kaca gambar',
'imagereverted' => 'Malikkeun deui ka vérsi nu saméméhna geus réngsé.',
'imgdelete' => 'hap',
'imgdesc' => 'dad',
'imghistlegend' => 'Katerangan: (kiw) = ieu salaku gambar kiwari, (hps) = hapus vérsi heubeul ieu, (blk) = balikkeun ka vérsi heubeul ieu.
<br /><i>Klik na titimangsa pikeun nempo gambar nu dimuat poé éta</i>.',
'imghistory' => 'Jujutan gambar',
'imglegend' => 'Katerangan: (desc) = témbongkeun/édit dadaran gambar.',
'immobile_namespace' => 'Judul nu dituju kaasup kana tipe husus, teu bisa mindahkeun kaca ka ngaranspasi kitu.',
'import' => 'Impor kaca',
'importfailed' => 'Ngimpor gagal: $1',
'importhistoryconflict' => 'Aya révisi jujutan nu béntrok (may have imported this page before)',
'importinterwiki' => 'Impor transwiki',
'importnotext' => 'Kosong atawa teu aya téks',
'importsuccess' => 'Ngimpor geus hasil!',
'importtext' => 'Mangga ékspor koropakna ti sumber nu dipaké ku wiki migunakeun fungsi Special:Export, simpen na piringan anjeun, teras muatkeun di dieu.',
'info_short' => 'Iber',
'infosubtitle' => 'Iber pikeun kaca',
'internalerror' => 'Kasalahan internal',
'intl' => 'Tumbu antarbasa',
'invalidemailaddress' => 'Alamat surélék teu bisa ditarima sabab formatna salah. Mangga lebetkeun alamat nu formatna bener atawa kosongkeun.',
'invert' => 'Balikkeun pilihan',
'ip_range_invalid' => 'Angka IP teu bener.',
'ipaddress' => 'Alamat IP/ngaran pamaké',
'ipadressorusername' => 'Alamat IP atawa ngaran pamaké',
'ipb_expiry_invalid' => 'Wanci daluwarsa teu bener.',
'ipbexpiry' => 'Kadaluarsa',
'ipblocklist' => 'Daptar alamat IP jeung ngaran pamaké nu dipeungpeuk',
'ipboptions' => '2 jam:2 jam,sapoé:sapoé,3 poé:3 poé,saminggu:saminggu,2 minggu:2 minggu,sabulan:sabulan,3 bulan:3 bulan,6 bulan:6 bulan,sataun:sataun,tanpa wates:tanpa wates',
'ipbother' => 'Waktu séjén',
'ipbotheroption' => 'séjénna',
'ipbreason' => 'Alesan',
'ipbsubmit' => 'Peungpeuk pamaké ieu',
'ipusubmit' => 'Buka peungpeuk pikeun pamaké ieu',
'ipusuccess' => '"$1" geus teu dipeungpeuk',
'isredirect' => 'Kaca alihan',
'italic_sample' => 'Tulisan déngdék',
'italic_tip' => 'Tulisan déngdék',
'iteminvalidname' => 'Masalah dina \'$1\', ngaran teu bener...',
'laggedslavemode' => 'Awas: kandungan kaca bisa baé teu mutahir.',
'largefile' => 'Dianjurkeun sangkan ukuran gambar teu leuwih ti 100k.',
'last' => 'ahir',
'lastmodified' => 'Kaca ieu panungtungan dirobah $1.

<!-- Start of StatCounter Code -->
<script type="text/javascript" language="javascript">
var sc_project=637758; 
var sc_partition=5; 
var sc_security="8b473cd8"; 
</script>

<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><a href="http://www.statcounter.com/" target="_blank"><img  src="http://c6.statcounter.com/counter.php?sc_project=637758&amp;java=0&amp;security=8b473cd8" alt="web page hit counter" border="0"></a> </noscript>
<!-- End of StatCounter Code -->',
'lastmodifiedby' => 'Kaca ieu panungtungan dirobah $1 ku $2.',
'lineno' => 'Baris ka-$1:',
'link_sample' => 'Judul tumbu',
'link_tip' => 'Tumbu internal',
'linklistsub' => '(Daptar tumbu)',
'linkshere' => 'Kaca di handap ieu numbu ka dieu:',
'linkstoimage' => 'Kaca nu numbu ka gambar ieu:',
'listform' => 'daptar',
'listingcontinuesabbrev' => ' (samb.)',
'listusers' => 'Daptar pamaké',
'loadhist' => 'Keur ngamuat jujutan kaca',
'loadingrev' => 'ngamuat béda révisi',
'localtime' => 'Témbongan wanci lokal',
'lockbtn' => 'Konci database',
'lockconfirm' => 'Leres pisan, simkuring hoyong ngonci database.',
'lockdb' => 'Konci database',
'lockdbsuccesssub' => 'Database geus hasil dikonci',
'lockdbsuccesstext' => 'Database dikonci.
<br />Ulah poho muka konci mun maintenance geus bérés.',
'lockdbtext' => 'Ngonci gudang data bakal numpurkeun kabisa sakabéh pamaké pikeun ngédit kaca, ngarobah préferénsina, ngédit awaskeuneunana, sarta hal séjén nu merlukeun parobahan na gudang data. Konfirmasikeun yén ieu nu dimaksud ku anjeun, sarta anjeun bakal muka konci gudang data nalika pangropéa anjeun geus réngsé.',
'locknoconfirm' => 'Anjeun teu nyontréngan kotak konfirmasi.',
'log' => 'Log',
'login' => 'Asup log',
'loginerror' => 'Kasalahan asup log',
'loginpagetitle' => 'Asup log pamaké',
'loginproblem' => '<b>Aya masalah na \'\'login\'\' anjeun.</b><br />Coba deui!',
'loginprompt' => 'Anjeun kudu boga \'\'cookies\'\' sangkan bisa asup log ka {{SITENAME}}.',
'loginreqlink' => 'asup log',
'loginreqpagetext' => 'Muné hayang muka kaca séjénna, Anjeun kudu $1.',
'loginreqtitle' => 'Kudu asup log',
'loginsuccess' => 'Anjeun ayeuna geus asup log ka Wikipédia salaku "$1".',
'loginsuccesstitle' => 'Asup log geus hasil',
'logout' => 'Kaluar log',
'logouttext' => 'Anjeun ayeuna geus kaluar log. Anjeun bisa neruskeun migunakeun Wikipédia bari anonim, atawa bisa asup log deui maké pamaké nu sarua atawa nu béda. Perlu dicatet yén sababaraha kaca bakal terus némbongan saolah-olah anjeun asup log kénéh nepi ka anjeun ngosongkeun \'\'cache\'\' panyungsi anjeun.',
'logouttitle' => 'Kaluar log pamaké',
'lonelypages' => 'Kaca-kaca nunggelis',
'longpages' => 'Kaca-kaca paranjang',
'longpagewarning' => 'PERHATOSAN: Kaca ieu panjangna $1 kilobytes; sababaraha panyungsi boga masalah dina ngédit kaca nu panjangna nepi ka 32kb. Please consider breaking the page into smaller sections.',
'mailerror' => 'Kasalahan ngirim surat: $1',
'mailmypassword' => 'Kirim sandi anyar ngaliwatan surélék',
'mailnologin' => 'Euweuh alamat ngirim',
'mailnologintext' => 'Anjeun kudu <a href="{{localurl:Special:Userlogin">asup log</a> sarta boga alamat surélék nu sah na <a href="{{localurl:Special:Preferences">préferénsi</a> anjeun sangkan bisa nyurélékan pamaké séjén.',
'mainpage' => 'Tepas',
'mainpagedocfooter' => 'Mangga tingal \'\'[http://meta.wikipedia.org/wiki/MediaWiki_i18n documentation on customizing the interface]\'\' jeung [http://meta.wikipedia.org/wiki/MediaWiki_User%27s_Guide Tungtunan Pamaké] pikeun pitulung maké jeung konfigurasi.',
'mainpagetext' => '\'\'Software\'\' Wiki geus diinstal.',
'maintenance' => 'Kaca pamiaraan',
'maintenancebacklink' => 'Balik ka kaca pamiaraan',
'maintnancepagetext' => 'Kaca ieu ngawengku sababaraha parabot praktis pikeun pamiaraan sapopoé. Sababaraha fungsina dimaksudkeun pikeun neken database, jadi punten ulah dimuat ulang (reload) unggal réngsé menerkeun \'\'item\'\' nu dikoréksi ;-)',
'makesysop' => 'Ngangkat pamaké jadi kuncén',
'makesysopfail' => '<b>Pamaké "$1" teu bisa dijadikeun kuncén. (Ngaran nu diasupkeun bener teu?)</b>',
'makesysopname' => 'Ngaran pamaké:',
'makesysopok' => '<b>Pamaké "$1" ayeuna geus jadi kuncén</b>',
'makesysopsubmit' => 'Angkat pamaké ieu jadi kuncén',
'makesysoptext' => 'Formulir ieu dipaké ku birokrat pikeun ngangkat pamaké biasa jadi kuncén. Ketik ngaran pamaké na kotak, terus pencét tombol pikeun ngangkat pamaké jadi kuncén.',
'makesysoptitle' => 'Ngangkat pamaké jadi kuncén',
'markaspatrolleddiff' => 'Tandaan salaku geus diriksa',
'markaspatrolledtext' => 'Tandaan artikel ieu salaku geus diriksa',
'markedaspatrolled' => 'Tandaan salaku geus diriksa',
'markedaspatrolledtext' => 'Révisi nu dipilih geus ditandaan salaku geus diriksa.',
'matchtotals' => '\'\'Query\'\' "$1" cocog jeung $2 judul kaca sarta tulisan na $3 kaca.',
'math_sample' => 'Asupkeun rumus di dieu',
'math_syntax_error' => 'Kasalahan rumpaka',
'math_tip' => 'Rumus matematis (LaTeX)',
'math_unknown_error' => 'Kasalahan teu kanyahoan',
'math_unknown_function' => 'fungsi teu kanyahoan',
'media_sample' => 'Conto.mp3',
'media_tip' => 'Tumbu koropak média',
'mimetype' => 'MIME type:',
'minlength' => 'Ngaran gambar sahenteuna kudu tilu aksara.',
'minoredit' => 'Ieu éditan minor',
'mispeelings' => 'Kaca nu ngandung salah éjah',
'mispeelingspage' => 'Daptar salah éjah nu ilahar',
'mispeelingstext' => 'Kaca di handap ieu ngandung salah éjah ilahar nu didaptarkeun na $1. Éjahan nu bener meureun geus disadiakeun (kawas kieu).',
'missingarticle' => 'Database teu manggihan téks kaca nu sakuduna aya, ngaranna "$1".

<p>This is usually caused by following an outdated diff or history link to a
page that has been deleted.

<p>Mun lain kitu masalahna, jigana anjeun geus manggihan kutu na \'\'software\'\'na. Mangga wartoskeun ka kuncén, dugikeun ogé URLna.',
'missingimage' => '<b>Gambar leungit</b><br /><i>$1</i>',
'missinglanguagelinks' => 'Tumbu Basa Leungit',
'missinglanguagelinksbutton' => 'Téangan tumbu basa nu leungit pikeun',
'missinglanguagelinkstext' => 'Kaca ieu <i>teu</i> numbu ka baturna na $1. Alihan jeung subkaca <i>henteu</i> ditémbongkeun.',
'moredotdotdot' => 'Deui...',
'move' => 'Pindahkeun',
'movearticle' => 'Pindahkeun kaca',
'movedto' => 'dipindahkeun ka',
'movelogpage' => 'Log mindahkeun',
'movelogpagetext' => 'Di handap ieu béréndélan kaca nu dipindahkeun.',
'movenologin' => 'Can asup log',
'movenologintext' => 'Anjeun kudu jadi pamaké nu kadaptar tur [[Special:Userlogin|asup log]] pikeun mindahkeun kaca.',
'movepage' => 'Pindahkeun kaca',
'movepagebtn' => 'Pindahkeun kaca',
'movepagetalktext' => 'Kaca obrolan nu patali, mun aya, bakal sacara otomatis kapindahkeun, \'\'\'iwal:\'\'\'
*Anjeun mindahkeun kacana meuntas spasingaran nu béda,
*Kaca obrolan dina ngaran nu anyar geus aya eusian, atawa
*Anjeun teu nyontréngan kotak di handap.

Dina kajadian kitu, mun hayang (jeung perlu) anjeun kudu mindahkeun atawa ngagabungkeun kacana sacara manual.',
'movepagetext' => 'Migunakeun formulir di handap bakal ngaganti ngaran hiji kaca, mindahkeun sadaya jujutanana ka ngaran anyar.
Judul nu heubeul bakal jadi kaca alihan ka judul nu anyar.
Tumbu ka judul kaca nu heubeul mola robah; pastikeun yén anjeun [[Special:Maintenance|marios]] alihan ganda atawa alihan nu buntu.
Anjeun tanggel waler pikeun mastikeun yén tumbu-tumbu tetep nujul ka tempat nu sakuduna dituju.

Catet yén kacana \'\'\'moal\'\'\' pindah mun geus aya kaca na judul nu anyar, iwal mun kosong atawa mangrupa alihan sarta teu mibanda jujutan éditan heubeul. Ieu ngandung harti yén anjeun bisa ngaganti ngaran hiji kaca balik deui ka nu cikénéh diganti ngaranna mun anjeun nyieun kasalahan, sarta anjeun teu bisa  nimpah kaca nu geus aya.

<b>AWAS!</b> This can be a drastic and unexpected change for a popular page;
please be sure you understand the consequences of this before
proceeding.',
'movereason' => 'Alesan',
'movetalk' => 'Mun bisa, kaca "obrolan" ogé pindahkeun.',
'movethispage' => 'Pindahkeun kaca ieu',
'mw_math_html' => 'Mun bisa HTML, mun henteu PNG',
'mw_math_mathml' => 'Mun bisa MathML (uji coba)',
'mw_math_modern' => 'Dianjurkeun pikeun panyungsi modérn',
'mw_math_simple' => 'Mun basajan HTML, mun henteu PNG',
'mw_math_source' => 'Antep salaku TeX (pikeun panyungsi tulisan)',
'mycontris' => 'Kontribusi kuring',
'mypage' => 'Kaca kuring',
'mytalk' => 'Obrolan kuring',
'namespace' => 'Ngaranspasi:',
'namespacesall' => 'kabéh',
'navigation' => 'Pituduh',
'nbytes' => '$1 bait',
'ncategories' => '$1 kategori',
'nchanges' => '$1 parobahan',
'newarticle' => '(Anyar)',
'newarticletext' => 'Anjeun geus nuturkeun tumbu ka kaca nu can aya.
Pikeun nyieun kaca, mimitian ku ngetik jeroeun kotak di handap 
(tempo [[Wikipédia:Pitulung|kaca pitulung]] pikeun leuwih écés).
Mun anjeun ka dieu teu ngahaja, klik baé tombol \'\'\'back\'\'\' na panyungsi anjeun.',
'newbies' => 'anyaran',
'newimages' => 'Galeri gambar anyar',
'newmessageslink' => 'pesen anyar',
'newpage' => 'Kaca anyar',
'newpageletter' => 'A',
'newpages' => 'Kaca anyar',
'newpassword' => 'Sandi anyar',
'newtitle' => 'Ka judul anyar',
'newuserloglog' => 'Pamaké anyar ([[User talk:$1|$2]] | [[Special:Contributions/$1|$3]] | [[Special:Block/$1|$4]])',
'newuserlogpage' => 'Log pamaké anyar',
'newuserlogpagetext' => 'Di handap ieu béréndélan pamaké nu kakara ngadaptar.',
'newusersonly' => ' (pamaké anyar wungkul)',
'newwindow' => '(buka na jandéla anyar)',
'next' => 'salajengna',
'nextdiff' => 'Ka béda salajengna, jung&rarr;',
'nextn' => '$1 salajengna',
'nextpage' => 'Kaca salajengna ($1)',
'nextrevision' => 'Révisi nu leuwih anyar&rarr;',
'nlinks' => '$1 tumbu',
'noarticletext' => '(Kiwari can aya téks na kaca ieu. Mun anjeun geus kungsi nyieun kaca ieu, mangga klik [{{SERVER}}{{localurl:{{NAMESPACE}}:{{PAGENAME}}|action=purge}} di dieu].)',
'noconnect' => 'Punten! Wiki ngalaman sababaraha kasusah téhnis sarta teu bisa ngontak server database.',
'nocontribs' => 'Taya robahan nu kapanggih cocog jeung patokan ieu.',
'nocookieslogin' => '{{SITENAME}} migunakeun \'\'cookies\'\' pikeun ngasupkeun pamaké kana log. Anjeun boga \'\'cookies\'\' nu ditumpurkeun. Mangga pungsikeun sarta cobian deui.',
'nocookiesnew' => 'Rekening pamaké geus dijieun, tapi anjeun can asup log. Wikipédia maké \'\'cookies\'\' pikeun ngasupkeun log pamaké. Anjeun boga \'\'cookies\'\' nu ditumpurkeun. Mangga fungsikeun, teras asup log migunakeun ngaran pamaké sarta sandi nu anyar.',
'nocredits' => 'Teu aya émbaran pangajén pikeun kaca ieu.',
'nodb' => 'Teu bisa milih database $1',
'noemail' => 'Teu aya alamat surélék karékam pikeun "$1".',
'noemailprefs' => '<strong>Teu aya alamat surélék</strong>, fitur di handap moal bisa jalan.',
'noemailtext' => 'Pamaké ieu teu méré alamat surélék nu sah atawa milih teu narima surélék ti pamaké séjén.',
'noemailtitle' => 'Teu aya alamat surélék',
'nogomatch' => '<span style="font-size: 135%; font-weight: bold; margin-left: .6em">Teu aya kaca nu judulna kitu</span>

<span style="display: block; margin: 1.5em 2em">
Coba saksrak na téks lengkep, atawa \'\'\'[[<nowiki>$1</nowiki>|nyieun artikel nu judulna kitu]]\'\'\' atawa [[Wikipédia:Artikel pamundut|mundut dijieunna éta artikel]].

<span style="display:block; font-size: 89%; margin-left:.2em">Mangga sungsi Wikipédia saméméh nyieun artikel anyar, pikeun ngahindarkeun artikel ganda nu ukur béda éjahan/ngaran.</span>
</span>',
'nohistory' => 'Teu aya jujutan édit pikeun kaca ieu.',
'noimages' => 'Taya nanaon.',
'nolinkshere' => 'Euweuh kaca nu numbu ka dieu.',
'nolinkstoimage' => 'Teu aya kaca nu numbu ka gambar ieu.',
'nologin' => 'Teu gaduh rekening? $1.',
'nologinlink' => 'Jieun rekening',
'noname' => 'Anjeun teu nuliskeun ngaran pamaké nu sah.',
'nonefound' => '<strong>Catetan</strong>: panéangan nu teu hasil mindeng disababkeun ku néang kecap umum kawas "ti" nu teu diasupkeun kana indéks, atawa alatan nangtukeun leuwih ti hiji istilah panéang (ngan kaca-kaca nu ngandung sakabéh istilah panéang nu bakal némbongan).',
'nonunicodebrowser' => '<strong>AWAS: Panyungsi anjeung teu maké unicode, mangga robah heula méméh ngédit artikel.</strong>',
'nospecialpagetext' => 'Anjeun geus ménta kaca husus nu teu dipikawanoh ku wiki.',
'nosuchaction' => 'Teu aya peta kitu',
'nosuchactiontext' => 'Peta nu diketik na URL teu dipikawanoh ku wiki',
'nosuchspecialpage' => 'Teu aya kaca husus nu kitu',
'nosuchuser' => 'Teu aya pamaké nu ngaranna "$1". Pariksa éjahanana, atawa paké formulir di handap pikeun nyieun rekening pamaké anyar.',
'nosuchusershort' => 'Taya pamaké nu ngaranna "$1", pariksa éjahanana!',
'notacceptable' => '\'\'Server\'\' wiki teu bisa nyadiakeun data dina format nu bisa dibaca ku klien anjeun.',
'notanarticle' => 'Sanés kaca eusi',
'notargettext' => 'Anjeun can nangtukeun hiji targét atawa pamaké pikeun migawé sangkan fungsi ieu jalan.',
'notargettitle' => 'Taya tujuleun',
'note' => '<strong>Catetan:</strong>',
'notextmatches' => 'Teu aya téks kaca nu cocog',
'notitlematches' => 'Teu aya judul kaca nu cocog',
'notloggedin' => 'Can asup log',
'nowatchlist' => 'Anjeun teu boga awaskeuneun.',
'nowiki_sample' => 'Asupkeun téks nu teu diformat di dieu',
'nowiki_tip' => 'Format wiki tong diwaro',
'nrevisions' => '$1 révisi',
'nstab-category' => 'Kategori',
'nstab-help' => 'Pitulung',
'nstab-image' => 'Gambar',
'nstab-main' => 'Artikel',
'nstab-media' => 'Média',
'nstab-mediawiki' => 'Pesen',
'nstab-special' => 'Husus',
'nstab-template' => 'Citakan',
'nstab-user' => 'Kaca pamaké',
'nstab-wp' => 'Ngeunaan',
'numauthors' => 'Jumlah pangarang nu béda (artikel): $1',
'number_of_watching_users_pageview' => '[$1 pamaké nu ngawaskeun]',
'numedits' => 'Jumlah éditan (artikel): $1',
'numtalkauthors' => 'Jumlah pangarang nu béda (kaca sawala): $1',
'numtalkedits' => 'Jumlah éditan (kaca sawala): $1',
'numwatchers' => 'Jumlah nu ngawaskeun: $1',
'nviews' => '$1 témbongan',
'ok' => 'Heug',
'oldpassword' => 'Sandi heubeul',
'orig' => 'asli',
'orphans' => 'Kaca nunggelis',
'othercontribs' => 'Dumasar karya $1.',
'otherlanguages' => 'Basa séjén',
'others' => 'Séjénna',
'pagemovedsub' => 'Mindahkeun geus hasil!',
'pagemovedtext' => 'Kaca "[[$1]]" dipindahkeun ka "[[$2]]".',
'pagetitle' => '$1 - Wikipédia',
'passwordremindertext' => 'Aya (jigana anjeun ti alamat IP $1) nu ménta sangkan dikiriman sandi anyar asup log Wikipédia. Sandi keur pamaké "$2" ayeuna nyaéta "$3". Anjeun kudu asup log sarta ngarobah sandi anjeun ayeuna.',
'passwordremindertitle' => 'Pangéling sandi ti Wikipédia',
'passwordsent' => 'Sandi anyar geus dikirim ka alamat surélék nu kadaptar pikeun "$1". Mangga asup log deui satutasna katarima.',
'passwordtooshort' => 'Sandi anjeun pondok teuing, sahanteuna kudu $1 karakter.',
'perfcached' => 'Data di handap ieu di-\'\'cache\'\' sarta meureun teu mutahir:',
'perfdisabled' => 'Punten! Fungsi ieu pikeun samentawis ditumpurkeun sabab ngahambat database nepi ka titik di mana teu saurang ogé bisa migunakeun wiki.',
'perfdisabledsub' => 'Ieu salaku salinan nu diteundeun ti $1:',
'permalink' => 'Tumbu permanén',
'personaltools' => 'Parabot pribadi',
'popularpages' => 'Kaca-kaca kawentar',
'portal' => 'Panglawungan',
'portal-url' => 'Wikipédia: Panglawungan',
'postcomment' => 'Kirim koméntar',
'poweredby' => 'Wikipédia dipatéakeun ku [http://www.mediawiki.org/ MédiaWiki], mesin wiki nembrak.',
'powersearch' => 'Téang',
'powersearchtext' => 'Téang na spasi-ngaran:<br />
$1<br />
$2 Daptarkeun alihan &nbsp; Téang $3 $9',
'preferences' => 'Préferénsi',
'prefs-help-email' => '* Surélék (pilihan): batur bisa ngontak anjeun tina kaca pamaké atawa obrolanana tanpa kudu nyebutkeun idéntitas anjeun.',
'prefs-help-email-enotif' => 'Alamat ieu ogé dipaké pikeun ngirim surélék iber, mun anjeun ngajalankeun pilihanana.',
'prefs-help-realname' => '* Ngaran asli (pilihan): mun anjeun milih ngeusian, bakal dipaké pikeun nandaan kontribusi anjeun.',
'prefs-misc' => 'Pangaturan rupa-rupa',
'prefs-personal' => 'Data pamaké',
'prefs-rc' => 'Panémbong robahan anyar jeung tukung',
'prefsnologin' => 'Can asup log',
'prefsnologintext' => 'Anjeun kudu [[Special:Userlogin|asup log]] pikeun ngatur préferénsi pamaké.',
'prefsreset' => 'Préferénsi geus disét ulang tina arsip.',
'preview' => 'Sawangan',
'previewconflict' => 'Sawangan ieu mangrupa eunteung pikeun téks na rohangan ngédit sakumaha bakal katémbong mun ku anjeun disimpen.',
'previewnote' => 'Inget yén ieu ukur sawangan, can disimpen!',
'previousdiff' => '&larr; Ka béda saméméhna',
'previousrevision' => '&larr;Révisi leuwih heubeul',
'prevn' => '$1 saméméhna',
'print' => 'Citak',
'printableversion' => 'Vérsi citakeun',
'printsubtitle' => '(Ti {{SITENAME}})',
'privacy' => 'Kawijakan privasi',
'privacypage' => 'Project:Kawijakan privasi',
'protect' => 'Konci',
'protectcomment' => 'Alesan ngonci',
'protectedarticle' => 'ngonci $1',
'protectedpage' => 'Kaca nu dikonci',
'protectedpagewarning' => '<strong>PERHATOSAN: Kaca ieu dikonci sahingga ngan bisa dirobah ku pamaké nu statusna kuncén. Pastikeun yén anjeun tumut kana [[Wikipédia:tungtunan_kaca_nu_dikonci\'|tungtunan kaca nu dikonci]].</strong>',
'protectedtext' => 'Kaca ieu dikonci tina ngédit; aya sababaraha alesan pangna dikonci, mangga tingal [[Wikipédia:Kaca nu dikonci|kaca nu dikonci]].

Anjeun bisa muka sarta nyalin sumber kaca ieu:',
'protectlogpage' => 'Log_koncian',
'protectlogtext' => 'Di handap ieu mangrupa daptar koncian kaca. Tempo [[Wikipédia:Kaca nu dikonci|kaca nu dikonci]] pikeun iber leuwih lengkep.',
'protectmoveonly' => 'Konci tina dipindahkeun wungkul',
'protectpage' => 'Konci kaca',
'protectsub' => '(Ngonci "$1")',
'protectthispage' => 'Konci kaca ieu',
'proxyblocker' => 'Pameungpeuk proxy',
'proxyblockreason' => 'Alamat IP anjeun dipeungpeuk sabab mangrupa proxy muka. Mangga tepungan \'\'Internet service provider\'\' atanapi \'\'tech support\'\' anjeun, béjakeun masalah serius ieu.',
'proxyblocksuccess' => 'Réngsé.',
'qbbrowse' => 'Sungsi',
'qbedit' => 'Édit',
'qbfind' => 'Panggihan',
'qbmyoptions' => 'Kaca kuring',
'qbpageinfo' => 'Kontéx',
'qbpageoptions' => 'Kaca ieu',
'qbspecialpages' => 'Kaca husus',
'randompage' => 'Kaca acak',
'randompage-url' => 'Special:Randompage',
'range_block_disabled' => 'Pangabisa kuncén pikeun nyieun sarupaning peungpeuk geus ditumpurkeun.',
'rchide' => 'na $4 formulir; $1 éditan minor; $2 spasingaran sékundér; $3 éditan multipel.',
'rclinks' => 'Témbongkeun $1 parobahan ahir dina $2 poé ahir<br />$3',
'rclistfrom' => 'Témbongkeun nu anyar robah nepi ka $1',
'rcliu' => '; $1 éditan ti pamaké nu geus asup log',
'rcloaderr' => 'Ngamuat nu anyar robah',
'rclsub' => '(ka kaca nu numbu ti "$1")',
'rcnote' => 'Di handap ieu <strong>$1</strong> parobahan ahir na <strong>$2</strong> poé ieu.',
'rcnotefrom' => 'Di handap ieu parobahan saprak <b>$2</b> (nu ditémbongkeun nepi ka <b>$1</b>).',
'rcpatroldisabled' => 'Ronda Nu Anyar Robah ditumpurkeun',
'rcpatroldisabledtext' => 'Fitur Ronda Nu Anyar Robah kiwari ditumpurkeun.',
'readonly' => 'Database dikonci',
'readonlytext' => 'database kiwar keur di konci pikeun éntri anyar sarta parobahan séjénna, meureun pikeun pangropéa database rutin, nu satutasna mah bakal normal deui. Kuncén nu ngonci ngécéskeun kieu:
<p>$1',
'readonlywarning' => 'PERHATOSAN: Database dikonci pikeun diropéa, anjeun moal bisa nyimpen éditan anjeun ayeuna. Cobi \'\'cut-n-paste\'\' téksna ka na koropak téks sarta simpen dina waktu séjén.',
'recentchanges' => 'Nu anyar robah',
'recentchangesall' => 'sadaya',
'recentchangescount' => 'Jumlah judul nu anyar robah',
'recentchangeslinked' => 'Parobahan nu patali',
'recentchangestext' => 'Lacak parobahan ka wiki panganyarna na kaca ieu.

[[en:Special:Recentchanges]]
[[id:Special:Recentchanges]]
[[jv:Special:Recentchanges]]
[[ms:Special:Recentchanges]]',
'redirectedfrom' => '(Dialihkeun ti $1)',
'remembermypassword' => 'Inget sandi kuring liwat sési.',
'removechecked' => 'Kaluarkeun nu dicontang tina awaskeuneun',
'removedwatch' => 'Dikaluarkeun ti awaskeuneun',
'removedwatchtext' => 'Kaca "$1" geus dikaluarkeun ti awaskeuneun anjeun.',
'removingchecked' => 'Ngaluarkeun kaca nu dipilih tina awaskeuneun...',
'resetprefs' => 'Sét ulang préferénsi',
'restorelink' => '$1 éditan dihapus',
'resultsperpage' => 'Hasil nu ditémbongkeun per kaca',
'retrievedfrom' => 'Disalin ti "$1"',
'returnto' => 'Balik deui ka $1.',
'retypenew' => 'Ketik ulang sandi',
'reupload' => 'Muat ulang',
'reuploaddesc' => 'Balik ka formulir muatan.',
'reverted' => 'Malikkeun ka révisi nu ti heula',
'revertimg' => 'blk',
'revertpage' => 'Malikkeun éditan $2, diganti deui ka vérsi ahir ku $1',
'revhistory' => 'Jujutan révisi',
'revisionasof' => 'Révisi nurutkeun $1',
'revisionasofwithlink' => 'Révisi nurutkeun $1; $2<br />$3 | $4',
'revnotfound' => 'Révisi teu kapanggih',
'revnotfoundtext' => 'Révisi heubeul kaca nu dipénta ku anjeun teu bisa kapanggih.
Please check the URL you used to access this page.',
'rights' => 'Hak:',
'rightslogtext' => 'Ieu mangrupa log parobahan hak-hak pamaké.',
'rollback' => 'Balikkeun éditan',
'rollback_short' => 'Balikkeun',
'rollbackfailed' => 'Gagal malikkeun',
'rollbacklink' => 'balikkeun',
'rows' => 'Baris',
'savearticle' => 'Simpen',
'savedprefs' => 'Préferénsi anjeun geus disimpen.',
'savefile' => 'Simpen koropak',
'savegroup' => 'Simpen Grup',
'saveprefs' => 'Simpen préferénsi',
'saveusergroups' => 'Simpen Grup Pamaké',
'search' => 'Téang',
'searchdisabled' => '<p style="margin: 1.5em 2em 1em">Punten! Néangan téks lengkep di Wikipédia kanggo samentawis ditumpurkeun pikeun alesan kinerja. Jalaran kitu, saheulaanan anjeun bisa nyungsi di Google di handap ieu.
<span style="font-size: 89%; display: block; margin-left: .2em">Catet yén indéxna ngeunaan eusi Wikipédia bisa jadi teu mutahir.</span></p>',
'searchnoresults' => 'Punten, taya nu ciples cocog sareng pamundut salira.',
'searchquery' => 'Pikeun pamundut "$1"',
'searchresults' => 'Hasil néangan',
'searchresultshead' => 'Aturan hasil néang',
'searchresulttext' => 'Pikeun iber nu leuwih lengkep ngeunaan nyaksrak di Wikipédia, buka [[Wikipédia:Nyaksrak|Nyaksrak Wikipédia]].',
'searchscore' => 'Relevansi: $1',
'searchsize' => '$1KB ($2 kecap)',
'selectnewerversionfordiff' => 'Pilih vérsi nu leuwih anyar pikeun babandingan',
'selectolderversionfordiff' => 'Pilih vérsi nu leuwih heubeul pikeun babandingan',
'selflinks' => 'Kaca-kaca nu numbu ka kacana sorangan',
'selflinkstext' => 'Kaca-kaca di handap ieu ngandung tumbu ka kacana sorangan, nu teu sakuduna.',
'selfmove' => 'Judul sumber jeung tujuanana sarua, lain gé mindahkeun atuh!',
'servertime' => 'Waktu server ayeuna',
'session_fail_preview' => '<strong>Punten! Kami teu bisa ngolah Sorryditan anjeun alatan leungitna data sési. Mangga cobian deui. Mun tetep teu bisa, cobi kaluar log lajeng lebet deui.</strong>',
'sessionfailure' => 'Sigana aya masalah jeung termin log anjeun; peta ieu geus dibolaykeun salaku pépéling pikeun ngalawan ayana pangbajak. Mangga pencét "back" jeung muat ulang ti kaca asal anjeun, lajeng cobaan deui.',
'set_rights_fail' => '<b>HAk pamaké pikeun "$1" teu bisa diatur. (Ngaran nu diasupkeun geus bener can?)</b>',
'set_user_rights' => 'Atur hak pamaké',
'setbureaucratflag' => 'Atur bandéra birokrat',
'sharedupload' => '<br clear=both>
{| align=center border=0 cellpadding=3 cellspacing=3 style="border: solid #aaa 1px; background: #f9f9f9; font-size: 100%;"
|- 
| [[Image:Commons without text.png|20px|Lambang Wikimedia Commons]]
|Koropak ieu asalna ti \'\'[[Commons:Main Page|Wikimedia Commons]]\'\'. Tempo \'\'\'[[Commons:Image:{{PAGENAME}}|kaca dadaranana]]\'\'\' pikeun leuwih jéntré.
|}
<br />',
'shareduploadwiki' => 'Mangga aos $1 pikeun émbaran leuwih jéntré.',
'shortpages' => 'Kaca-kaca parondok',
'show' => 'témbongkeun',
'showbigimage' => 'Buka vérsi résolusi alus ($1x$2, $3 KB)',
'showdiff' => 'Témbongkeun parobahan',
'showhideminor' => '$1 éditan minor | $2 bot | $3 pamaké nu asup log',
'showingresults' => 'Di handap ieu némbongkeun <b>$1</b> hasil tina #<b>$2</b>.',
'showingresultsnum' => 'Di handap ieu némbongkeun <b>$3</b> hasil tina #<b>$2</b>.',
'showlast' => 'Témbongkeun $1 gambar ahir dumasar $2.',
'showpreview' => 'Témbongkeun sawangan',
'showtoc' => 'témbongkeun',
'sig_tip' => 'Tawis leungeun anjeun tur cap wanci',
'sitematrix' => 'Béréndélan wiki Wikimédia',
'sitenotice' => '<div name="fundraising" id="fundraising" style="margin-top:5px;">\'\'\'\'\'[[Wikimedia:Wikimédia butuh pitulung anjeun|Wikimédia butuh pitulung anjeun]]\'\'\' dina pangumpulan dana ayeuna. Mangga tingal [[Wikimedia:Ngumpulkeun dana|kaca pangumpulan dana]] pikeun leuwih jéntré\'\'.</div>
[http://fundraising.wikimedia.org/2005q4/ <fundraising/>]</div><div style="font-size:90%">[[wikimedia:Fund drives/2005/Q4/Daily report|Laporan poéan]]</div>
</div>',
'sitestats' => 'Statistika Wikipédia',
'sitestatstext' => 'Jumlah-jamléh aya \'\'\'$1\'\'\' kaca na database, kaasup kaca "obrolan", kaca-kaca ngeunaan MédiaWiki, kaca "tukung", alihan, sarta nu séjénna nu meureun teu kaasup artikel. Lian ti nu éta, aya \'\'\'$2\'\'\' kaca nu dianggap artikel nu bener.

jumlah-jamléh geus aya \'\'\'$3\'\'\' kaca ulasan sarta \'\'\'$4\'\'\' éditan ti saprak Wiki ieu ngadeg. Jadi hartina aya rata-rata \'\'\'$5\'\'\' éditan per kaca sarta \'\'\'$6\'\'\' ulasan per édit.',
'sitesubtitle' => 'Énsiklopédi Bébas',
'sitesupport' => 'Sumbangan',
'sitesupport-url' => 'Project:Ngarojong loka',
'sitetitle' => 'Wikipédia',
'siteuser' => 'Pamaké $1 Wikipédia',
'siteusers' => 'Pamaké $1 Wikipédia',
'skin' => 'Kulit',
'speciallogtitlelabel' => 'Judul:',
'specialloguserlabel' => 'Pamaké:',
'specialpage' => 'Kaca Husus',
'specialpages' => 'Kaca husus',
'spheading' => 'Kaca husus pikeun sadaya pamaké',
'statistics' => 'Statistik',
'storedversion' => 'Vérsi nu disimpen',
'subcategories' => 'Subkategori',
'subcategorycount' => 'Aya $1 subkategori na kategori ieu.',
'subcategorycount1' => 'Aya $1 subkategori na kategori ieu.',
'subject' => 'Jejer/Judul',
'subjectpage' => 'Témbongkeun subjék',
'successfulupload' => 'Ngamuat geus hasil',
'summary' => 'Ringkesan',
'sysoptext' => 'Peta nu dipénta ku anjeun ngan bisa dipigawé ku pamaké nu statusna kuncén. Tempo $1.',
'sysoptitle' => 'Kudu ku kuncén',
'tableform' => 'tabel',
'tagline' => 'Ti Wikipédia Sunda, énsiklopédi bébas basa Sunda',
'talk' => 'Sawala',
'talkexists' => 'Kacana geus hasil dipindahkeun, ngan kaca obrolanana teu bisa dipindahkeun sabab geus aya nu anyar na judul anyar. Mangga gabungkeun sacara manual.',
'talkpage' => 'Sawalakeun kaca ieu',
'talkpagemoved' => 'Kaca obrolanana geus ogé dipindahkeun.',
'talkpagenotmoved' => 'Kaca obrolan nu patali <strong>teu</strong> dipindahkeun.',
'templatesused' => 'Citaka nu dipaké na kaca ieu:',
'textboxsize' => 'Ukuran kotak téks',
'textmatches' => 'Téks kaca nu cocog',
'thisisdeleted' => 'Témbongkeun atawa simpen deui $1?',
'thumbnail-more' => 'Gedéan',
'thumbsize' => 'Thumbnail size:',
'timezonelegend' => 'Wewengkon wanci',
'timezonetext' => 'Asupkeun sabaraha jam bédana antara wanci di tempat anjeun jeung wanci server (UTC).',
'titlematches' => 'Judul artikel nu cocog',
'toc' => 'Daptar eusi',
'tog-editondblclick' => 'Édit kaca ku klik ganda (JavaScript)',
'tog-fancysig' => 'Paraf kasar (tanpa tumbu otomatis)',
'tog-hideminor' => 'Sumputkeun éditan minor dina nu anyar robah',
'tog-justify' => 'Lempengkeun alinéa',
'tog-minordefault' => 'Tandaan sadaya éditan salaku minor luyu jeung ti dituna',
'tog-previewonfirst' => 'Témbongkeun sawangan dina éditan munggaran',
'tog-previewontop' => 'Témbongkeun sawangan méméh kotak édit (lain sanggeusna)',
'tog-rememberpassword' => 'Inget sandi liwat sési',
'tog-shownumberswatching' => 'Témbongkeun jumlah nu ngawaskeun',
'tog-showtoc' => 'Témbongkeun daptar eusi<br/>(pikeun kaca nu leuwih ti tilu subjudul)',
'tog-showtoolbar' => 'Témbongkeun \'\'toolbar\'\' édit (JavaScript)',
'tog-underline' => 'Garis-handapan tumbu',
'tog-watchdefault' => 'Tambahkeun kaca nu diédit ku anjeun kana awaskeuneun anjeun',
'toolbox' => 'Kotak parabot',
'tooltip-compareselectedversions' => 'Tempo béda antara dua vérsi kaca ieu nu dipilih [alt-v].',
'tooltip-diff' => 'Témbongkeun parobahan mana nu geus dijieun. [alt-d]',
'tooltip-minoredit' => 'Tandaan ieu salaku éditan minor [alt-i]',
'tooltip-preview' => 'Sawang heula robahan anjeun, pami tos leres mangga simpen! [alt-p]',
'tooltip-save' => 'Simpen parobahan anjeun [alt-s]',
'tooltip-search' => 'Téang wiki ieu [alt-f]',
'tooltip-watch' => 'Tambahkeun kaca ieu kana awaskeuneun kuring [alt-w]',
'uclinks' => 'Témbongkeun $1 parobahan ahir; témbongkeun $2 poé ahir.',
'ucnote' => 'Di handap ieu mangrupa parobahan ahir <b>$1</b> pamaké salila <b>$2</b> poé ahir.',
'uctop' => ' (tempo)',
'uid' => 'ID pamaké:',
'unblockip' => 'Buka peungpeuk pamaké',
'unblockiptext' => 'Paké formulir di handap pikeun mulangkeun aksés nulis ka alamat IP atawa ngaran pamaké nu saméméhna dipeungpeuk.',
'unblocklink' => 'buka peungpeuk',
'unblocklogentry' => 'peungpeuk dibuka "$1"',
'uncategorizedcategories' => 'Kategori nu can dikategorikeun',
'uncategorizedpages' => 'Kaca nu can dikategorikeun',
'undelete' => 'Simpen deui kaca nu dihapus',
'undelete_short' => 'Tong dihapus',
'undeletearticle' => 'Simpen deui kaca nu dihapus',
'undeletebtn' => 'Simpen deui!',
'undeletedarticle' => 'disimpen "$1"',
'undeletedrevisions' => '$1 révisi disimpen deui',
'undeletedtext' => '[[$1]] geus réngsé disimpen ulang. Tempo [[Special:Log/delete]] pikeun catetan hapusan jeung panyimpenan ulang anyar.',
'undeletehistory' => 'Mun anjeun nyimpen deui kacana, sadaya révisi bakal disimpen deui dina jujutan. Mun aya kaca anyar nu ngaranna sarua dijieun deui satutasna dihapus, révisi nu disimpen tadi bakal némbongan salaku jujutan nu ti heula, sarta révisi kiwari kaca nu hirup moal otomatis kaganti.',
'undeletehistorynoadmin' => 'Artikel ieu geus dihapus. Alesanana bisa dibaca dina katrangan di handap, katut saha waé nu geus ngédit ieu artikel saméméh dihapus. Téks aktual révisi nu geus dihapus ieu ngan bisa dibuka ku [[Wikipédia:Kuncén|kuncén]].',
'undeletepage' => 'Témbongkeun atawa simpen deui kaca nu geus dihapus',
'undeletepagetext' => 'Kaca di handap ieu geus dihapus tapi masih kénéh aya na arsip sarta bisa disimpen deui. Arsip aya kalana dibersihan.',
'undeleterevision' => 'Révisi nu dihapus sakumaha $1',
'undeleterevisions' => '$1 révisi diarsipkeun',
'underline-always' => 'Salawasna',
'underline-never' => 'Ulah',
'unlockbtn' => 'Buka konci database',
'unlockconfirm' => 'Muhun, kuring hayang muka konci database.',
'unlockdb' => 'Buka konci database',
'unlockdbsuccesssub' => 'Konci database geus dibuka',
'unlockdbsuccesstext' => 'Database geus teu dikonci.',
'unlockdbtext' => 'Muka konci database bakal mulangkeun kabisa sakabéh pamaké pikeun ngédit kaca, ngarobah préferénsina, ngédit awaskeuneunana, sarta hal-hal séjén nu merlukeun parobahan na database. Pastikeun yén ieu ngarupakeun hal nu diniatkeun ku anjeun.',
'unprotect' => 'Buka konci',
'unprotectcomment' => 'Alesan muka konci',
'unprotectedarticle' => 'muka konci $1',
'unprotectsub' => '(Muka konci "$1")',
'unprotectthispage' => 'Buka konci kaca ieu',
'unusedcategories' => 'Kategori nu teu kapaké',
'unusedcategoriestext' => 'Kaca kategori di handap ieu aya, tapi taya artikel nu diasupkeun kana kategori ieu.',
'unusedimages' => 'Gambar-gambar nu teu kapaké',
'unusedimagestext' => '<p>Perhatikeun yén jalaloka séjén bisa numbukeun ka hiji gambar ku URL langsung, sahingga masih didaptarkeun di dieu najan sabenerna dipaké.',
'unwatch' => 'Eureun ngawaskeun',
'unwatchthispage' => 'Eureun ngawaskeun',
'upload' => 'Muatkeun koropak',
'uploadbtn' => 'Muatkeun koropak',
'uploaddisabled' => 'Punten, ngamuat ayeuna ditumpurkeun.',
'uploadedfiles' => 'Koropak nu geus dimuat',
'uploadedimage' => '"$1" geus dimuat',
'uploaderror' => 'Kasalahan muat',
'uploadlink' => 'Muat gambar',
'uploadlog' => 'log muatan',
'uploadlogpage' => 'Log_muatan',
'uploadlogpagetext' => 'Di handap mangrupa daptar muatan koropak nu panganyarna. Titimangsa nu katémbong dumasar titimangsa server (UTC).
<ul>
</ul>',
'uploadnewversion' => '[$1 ngamuatkeun vérsi anyar koropak ieu]',
'uploadnologin' => 'Can asup log',
'uploadnologintext' => 'Anjeun kudu [[Special:Userlogin|asup log]] pikeun ngamuat koropak.',
'uploadscripted' => 'Koropak ieu ngandung kode HTML atawa skrip nu bisa dibaca ngaco ku panyungsi ramat (\'\'web browser\'\').',
'uploadtext' => '<strong>HEUP!</strong> Méméh anjeun ngamuat di dieu, pastikeun yén anjeun geus maca sarta tumut ka [[Special:Image_use_policy|kawijakan maké gambar]].
<p>Mun geus aya koropak na wiki nu ngaranna sarua jeung nu disebutkeun ku anjeun, koropak nu geus lila bakal diganti otomatis. Mangka, iwal ti pikeun ngaropéa hiji koropak, tangtu leuwih hadé mun anjeun mariksa heula bisi koropak nu sarupa geus aya.
<p>Pikeun némbongkeun atawa néang gambar-gambar nu pernah dimuat saméméhna, mangga lebet ka [[Special:Imagelist|daptar gambar nu dimuat]]. Muatan sarta hapusan kadaptar dina log [[{{ns:project}}:Upload_log|log muatan]].
</p><p>Paké formulir di handap pikeun ngamuat koropak gambar anyar pikeun ilustrasi kaca anjeun. Na kalolobaan panyungsi, anjeun bakal manggihan tombol "Sungsi/\'\'Browse\'\'...", nu bakal nganteur ka dialog muka-koropak nu baku na sistim operasi anjeun. Milih hiji koropak bakal ngeusian ngaran koropakna kana rohangan téks gigireun tombol nu tadi. Anjeun ogé kudu nyontréng kotak nu nandakeun yén anjeun teu ngarumpak hak cipta batur ku dimuatna ieu koropak. Pencét tombol "Muatkeun/\'\'Upload\'\'" pikeun ngeréngsékeun muatan. Prosés ieu bisa lila mun anjeun migunakeun sambungan internét nu lambat.
<p>Format nu dianjurkeun nyéta JPEG pikeun gambar fotografik, PNG pikeun hasil ngagambar sarta gambar séjénna, sarta OGG pikeun sora. Pilih ngaran koropak nu déskriptif sangkan teu ngalieurkeun. Pikeun ngasupkeun gambarna na kaca séjén, pigunakeun tumbu dina wujud <b>[[Image:file.jpg]]</b> atawa <b>[[Image:file.ogg]]</b> pikeun sora.
<p>Catet yén salaku kaca wiki, nu séjén bisa ngarobah atawa ngahapus muatan anjeun mun maranéhna nganggap ieu saluyu jeung kapentingan proyék, sarta anjeun bisa waé dipeungpeuk ti ngamuat koropak mun anjeun ngaruksak/ngaganggu sistim.',
'uploadvirus' => 'Koropakna ngandung virus! Katrangan: $1',
'uploadwarning' => 'Pépéling ngamuat',
'user_rights_set' => '<b>Hak pamaké pikeun "$1" geus dirobah</b>',
'usercssjsyoucanpreview' => '<strong>Tip:</strong> Pigunakeun tombol \'Témbongkeun sawangan\' pikeun nyoba css/js anyar anjeun méméh nyimpen.',
'usercsspreview' => '\'\'\'Inget yén anjeun ukur nyawang css pamaké anjeun, can disimpen!\'\'\'',
'userexists' => 'Ngaran pamaké nu diasupkeun ku anjeun geus aya nu maké. Mangga pilih ngaran nu séjén.',
'userjspreview' => '\'\'\'Inget yén anjeun ukur nguji/nyawang \'\'javascript\'\' pamaké anjeun, can disimpen!\'\'\'',
'userlogin' => 'Nyieun rekening atawa asup log',
'userlogout' => 'Kaluar log',
'username' => 'Landihan:',
'userpage' => 'Témbongkeun kaca pamaké',
'userrights-user-editname' => 'Enter a username:',
'userstats' => 'Statistik pamaké',
'userstatstext' => 'Aya \'\'\'$1\'\'\' pamaké nu kadaptar.
\'\'\'$2\'\'\' di antarana kuncén (tempo $3).',
'version' => 'Vérsi',
'viewcount' => 'Kaca ieu geus dibuka $1 kali.',
'viewdeletedpage' => 'Témbongkeun kaca nu dihapus',
'viewprevnext' => 'Témbongkeun ($1) ($2) ($3).',
'views' => 'Témbongan',
'viewsource' => 'Témbongkeun sumber',
'viewtalkpage' => 'Témbongkeun sawala',
'wantedcategories' => 'Kategori nu dipikabutuh',
'wantedpages' => 'Kaca nu dipikabutuh',
'watch' => 'Awaskeun',
'watchdetails' => '($1 kaca diawaskeun, teu kaasup kaca obrolan; jumlah-jamléh $2 kaca diédit saprak cutoff; $3...
[[\'$4\'|témbongkeun jeung édit daptar lengkepna]].)',
'watcheditlist' => 'Ieu daptar nurutkeun abjad kaca-kaca awaskeuneun anjeun. Contréng kotak kaca nu teu moal deui diawaskeun, teras klik tombol \'piceun nu dicontréng\' na dadasar layar.',
'watchlist' => 'Awaskeuneun',
'watchlistall1' => 'sadaya',
'watchlistall2' => 'sadaya',
'watchlistcontains' => 'Anjeun ngawaskeun $1 kaca.',
'watchlistsub' => '(pikeun pamaké "$1")',
'watchmethod-list' => 'mariksa nu anyar robah na kaca nu diawaskeun',
'watchmethod-recent' => 'mariksa nu anyar robah na kaca nu diawaskeun',
'watchnochange' => 'Sadaya awaseun anjeun taya nu diédit dina jangka wanci nu ditémbongkeun.',
'watchnologin' => 'Can asup log',
'watchnologintext' => 'Anjeun kudu [[Special:Userlogin|asup log]] pikeun ngarobah awaskeuneun.',
'watchthis' => 'Awaskeun kaca ieu',
'watchthispage' => 'Awaskeun kaca ieu',
'welcomecreation' => '<h2>Wilujeng sumping, $1!</h2><p>Rekening anjeun geus dijieun. Tong hilap ngarobih préferénsi Wikipédia anjeun.',
'whatlinkshere' => 'Nu numbu ka dieu',
'whitelistacctext' => 'Sangkan diwenangkeun nyieun rekening na wiki ieu, anjeun kudu asup [[Special:Userlogin|log]] sarta boga kawenangan nu cukup.',
'whitelistacctitle' => 'Anjeun teu diwenangkeun nyieun rekening',
'whitelistedittext' => 'Anjeun kudu asup [[Special:Userlogin|log]] sangkan bisa ngédit.',
'whitelistedittitle' => 'Perlu asup log sangkan bisa ngédit',
'whitelistreadtext' => 'Anjeun kudu asup \'\'[[Special:Userlogin|log]]\'\' sangkan bisa maca.',
'whitelistreadtitle' => 'Perlu asup log pikeun maca',
'wikipediapage' => 'Témbongkeun kaca proyék',
'wlheader-enotif' => '* Pangémbar surélék difungsikeun.',
'wlheader-showupdated' => '* Kaca nu robah ti panungtungan anjeun sindang ditémbongkeun kalawan \'\'\'kandel\'\'\'',
'wlhide' => 'Sumputkeun',
'wlhideshowbots' => '$1 éditan bot.',
'wlhideshowown' => '$1 éditan kuring.',
'wlnote' => 'Di handap ieu mangrupa $1 robahan ahir salila <b>$2</b> jam.',
'wlsaved' => 'Ieu mangrupa vérsi simpenan awaskeuneun anjeun.',
'wlshow' => 'Témbongkeun',
'wlshowlast' => 'Témbongkeun $1 jam $2 poé $3 ahir',
'wrongpassword' => 'Sandi nu diasupkeun teu cocog. Mangga cobian deui.',
'wrongpasswordempty' => 'Sandina can kaeusian. Cobaan deui!',
'youhavenewmessages' => 'Anjeun boga $1 ($2).',
'yourdiff' => 'Béda',
'yourdomainname' => 'Domain anjeun',
'youremail' => 'Surélék anjeun*',
'yourlanguage' => 'Basa antarbeungeut',
'yourname' => 'Ngaran pamaké anjeun',
'yournick' => 'Landihan anjeun (pikeun tawis leungeun)',
'yourpassword' => 'Sandi anjeun',
'yourpasswordagain' => 'Ketik deui sandi anjeun',
'yourrealname' => 'Ngaran anjeun*',
'yourtext' => 'Tulisan anjeun',
'yourvariant' => 'Varian basa',
);

class LanguageSu extends LanguageUtf8 {

    function getNamespaces() {
        global $wgNamespaceNamesSu;
        return $wgNamespaceNamesSu;
    }

    function getMessage( $key ) {
        global $wgAllMessagesSu, $wgAllMessagesEn;
        if( isset( $wgAllMessagesSu[$key] ) ) {
            return $wgAllMessagesSu[$key];
        } else {
            return parent::getMessage( $key );
        }
    }
}
?>