var isCompatible=function(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;};var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/pt/load.php","apiScript":"/pt/api.php"},"common":{"loadScript":"https://slot1-images.wikia.nocookie.net/__load/-/","apiScript":"/pt/api.php"}});mw.loader.register([["site",1530651600,[],"site"],["noscript",1202225400,[],"noscript"],["startup",1552185000,[],"startup"],["user",1202225400,[],"user"],["user.groups",1202225400,[],"user"],["user.options",1552185000,[],"private"],["user.cssprefs",1552185000,["mediawiki.user"],"private"],["user.tokens",1202225400,[],"private"],["filepage",1202225400],["mediawiki.language.data",1536668100,["mediawiki.language.init"]],["skins.monobook",1551960000,[],null,"common"],["jquery",1551960000,[],null,"common"],["jquery.appear",1551960000,[],null,"common"],["jquery.arrowSteps",1551960000,[],null,"common"],[
"jquery.async",1551960000,[],null,"common"],["jquery.autoEllipsis",1551960000,["jquery.highlightText"],null,"common"],["jquery.byteLength",1551960000,[],null,"common"],["jquery.byteLimit",1551960000,["jquery.byteLength"],null,"common"],["jquery.checkboxShiftClick",1551960000,[],null,"common"],["jquery.client",1551960000,[],null,"common"],["jquery.collapsibleTabs",1551960000,[],null,"common"],["jquery.color",1551960000,["jquery.colorUtil"],null,"common"],["jquery.colorUtil",1551960000,[],null,"common"],["jquery.cookie",1551960000,[],null,"common"],["jquery.delayedBind",1551960000,[],null,"common"],["jquery.expandableField",1551960000,["jquery.delayedBind"],null,"common"],["jquery.farbtastic",1551960000,["jquery.colorUtil"],null,"common"],["jquery.footHovzer",1551960000,[],null,"common"],["jquery.form",1551960000,[],null,"common"],["jquery.getAttrs",1551960000,[],null,"common"],["jquery.highlightText",1551960000,[],null,"common"],["jquery.hoverIntent",1551960000,[],null,"common"],[
"jquery.json",1551960000,[],null,"common"],["jquery.localize",1551960000,[],null,"common"],["jquery.makeCollapsible",1551960000,[],null,"common"],["jquery.messageBox",1551960000,[],null,"common"],["jquery.mockjax",1551960000,[],null,"common"],["jquery.mw-jump",1551960000,[],null,"common"],["jquery.mwExtension",1551960000,[],null,"common"],["jquery.placeholder",1551960000,[],null,"common"],["jquery.qunit",1551960000,[],null,"common"],["jquery.qunit.completenessTest",1551960000,["jquery.qunit"],null,"common"],["jquery.spinner",1551960000,[],null,"common"],["jquery.suggestions",1551960000,["jquery.autoEllipsis"],null,"common"],["jquery.tabIndex",1551960000,[],null,"common"],["jquery.tablesorter",1551960000,["jquery.mwExtension"],null,"common"],["jquery.textSelection",1551960000,[],null,"common"],["jquery.validate",1551960000,[],null,"common"],["jquery.xmldom",1551960000,[],null,"common"],["jquery.tipsy",1551960000,[],null,"common"],["jquery.ui.core",1551960000,["jquery"],"jquery.ui",
"common"],["jquery.ui.widget",1551960000,[],"jquery.ui","common"],["jquery.ui.mouse",1551960000,["jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.position",1551960000,[],"jquery.ui","common"],["jquery.ui.draggable",1551960000,["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.droppable",1551960000,["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui","common"],["jquery.ui.resizable",1551960000,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.selectable",1551960000,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.sortable",1551960000,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.accordion",1551960000,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.autocomplete",1551960000,["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui","common"],[
"jquery.ui.button",1551960000,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.datepicker",1551960000,["jquery.ui.core"],"jquery.ui","common"],["jquery.ui.dialog",1551960000,["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui","common"],["jquery.ui.progressbar",1551960000,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.slider",1551960000,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.tabs",1551960000,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.effects.core",1551960000,["jquery"],"jquery.ui","common"],["jquery.effects.blind",1551960000,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.bounce",1551960000,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.clip",1551960000,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.drop",1551960000,[
"jquery.effects.core"],"jquery.ui","common"],["jquery.effects.explode",1551960000,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.fade",1551960000,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.fold",1551960000,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.highlight",1551960000,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.pulsate",1551960000,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.scale",1551960000,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.shake",1551960000,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.slide",1551960000,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.transfer",1551960000,["jquery.effects.core"],"jquery.ui","common"],["mediawiki",1551960000,[],null,"common"],["mediawiki.api",1551960000,["mediawiki.util"],null,"common"],["mediawiki.api.category",1551960000,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.edit",
1551960000,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.parse",1551960000,["mediawiki.api"],null,"common"],["mediawiki.api.titleblacklist",1551960000,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.watch",1551960000,["mediawiki.api","mediawiki.user"],null,"common"],["mediawiki.debug",1551960000,["jquery.footHovzer"],null,"common"],["mediawiki.debug.init",1551960000,["mediawiki.debug"],null,"common"],["mediawiki.feedback",1551960000,["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"],null,"common"],["mediawiki.htmlform",1551960000,[],null,"common"],["mediawiki.Title",1551960000,["jquery.byteLength","mediawiki.util"],null,"common"],["mediawiki.Uri",1551960000,[],null,"common"],["mediawiki.user",1551960000,["jquery.cookie"],null,"common"],["mediawiki.util",1551960000,["jquery.client","jquery.cookie","jquery.messageBox","jquery.mwExtension"],null,"common"],["mediawiki.action.edit",1551960000,["jquery.textSelection",
"jquery.byteLimit"],null,"common"],["mediawiki.action.view.redirect",1551960000,["jquery.client"],null,"common"],["mediawiki.action.history",1551960000,["jquery.ui.button"],"mediawiki.action.history","common"],["mediawiki.action.history.diff",1551960000,[],"mediawiki.action.history","common",["sass"]],["mediawiki.action.view.dblClickEdit",1551960000,["mediawiki.util","mediawiki.page.startup"],null,"common"],["mediawiki.action.view.metadata",1551960000,[],null,"common"],["mediawiki.action.view.rightClickEdit",1551960000,[],null,"common"],["mediawiki.action.watch.ajax",1551960000,["mediawiki.api.watch","mediawiki.util"],null,"common"],["mediawiki.language",1551960000,["mediawiki.language.data","mediawiki.cldr"],null,"common"],["mediawiki.cldr",1551960000,["mediawiki.libs.pluralruleparser"],null,"common"],["mediawiki.libs.pluralruleparser",1551960000,[],null,"common"],["mediawiki.language.init",1551960000,[],null,"common"],["mediawiki.jqueryMsg",1551960000,["mediawiki.util",
"mediawiki.language"],null,"common"],["mediawiki.language.months",1551960000,["mediawiki.language"],null,"common"],["mediawiki.language.names",1542137400,["mediawiki.language.init"]],["mediawiki.libs.jpegmeta",1551960000,[],null,"common"],["mediawiki.page.ready",1551960000,["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.mw-jump","mediawiki.util"],null,"common"],["mediawiki.page.startup",1551960000,["jquery.client","mediawiki.util"],null,"common"],["mediawiki.special",1551960000,[],null,"common"],["mediawiki.special.block",1551960000,["mediawiki.util"],null,"common"],["mediawiki.special.changeemail",1551960000,["mediawiki.util"],null,"common"],["mediawiki.special.changeslist",1551960000,["jquery.makeCollapsible"],null,"common"],["mediawiki.special.movePage",1551960000,["jquery.byteLimit"],null,"common"],["mediawiki.special.preferences",1551960000,[],null,"common"],["mediawiki.special.recentchanges",1551960000,["mediawiki.special"],null,"common"],["mediawiki.special.search"
,1551960000,[],null,"common"],["mediawiki.special.undelete",1551960000,[],null,"common"],["mediawiki.special.upload",1551960000,["mediawiki.libs.jpegmeta","mediawiki.util"],null,"common"],["mediawiki.special.javaScriptTest",1551960000,["jquery.qunit"],null,"common"],["test.sinonjs",1551960000,[],null,"common"],["mediawiki.tests.qunit.testrunner",1552185000,["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready","test.sinonjs"],null,"common"],["mediawiki.legacy.ajax",1551960000,["mediawiki.util","mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.commonPrint",1551960000,[],null,"common"],["mediawiki.legacy.config",1551960000,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.IEFixes",1551960000,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.mwsuggest",1551960000,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.preview",1551960000,["mediawiki.legacy.wikibits"],null,"common"],[
"mediawiki.legacy.protect",1551960000,["mediawiki.legacy.wikibits","jquery.byteLimit"],null,"common"],["mediawiki.legacy.shared",1551960000,[],null,"common"],["mediawiki.legacy.upload",1551960000,["jquery.spinner","mediawiki.util"],null,"common"],["mediawiki.legacy.wikibits",1551960000,["mediawiki.util","wikia.importScript"],null,"common"],["mediawiki.legacy.wikiprintable",1551960000,[],null,"common"],["amd",1551960000,[],null,"common"],["amd.shared",1202225400,["wikia.instantGlobals","wikia.cache","wikia.cookies","wikia.document","wikia.geo","wikia.fbLocale","wikia.loader","wikia.location","wikia.log","wikia.mw","wikia.nirvana","wikia.querystring","wikia.history","wikia.throbber","wikia.thumbnailer","wikia.tracker","wikia.window","wikia.abTest","underscore"],null,"common"],["wikia.window",1551960000,["amd"],null,"common"],["wikia.cache",1551960000,["amd","wikia.window"],null,"common"],["wikia.document",1551960000,["amd","wikia.window"],null,"common"],["wikia.location",1551960000,[
"amd","wikia.window"],null,"common"],["wikia.nirvana",1551960000,["amd"],null,"common"],["wikia.mw",1551960000,["amd","wikia.window"],null,"common"],["wikia.fbLocale",1551960000,["wikia.geo"],null,"common"],["wikia.loader",1551960000,["amd","wikia.window","wikia.mw","wikia.nirvana","wikia.fbLocale"],null,"common"],["wikia.querystring",1551960000,["amd","wikia.window"],null,"common"],["wikia.history",1551960000,["amd","wikia.window"],null,"common"],["wikia.cookies",1551960000,["amd","wikia.window"],null,"common"],["wikia.log",1551960000,["amd","wikia.querystring","wikia.cookies"],null,"common"],["wikia.abTest",1551960000,["amd","wikia.window"],null,"common"],["wikia.instantGlobals",1551960000,["amd","wikia.window"],null,"common"],["wikia.thumbnailer",1551960000,["amd"],null,"common"],["wikia.geo",1551960000,["amd","wikia.cookies","wikia.querystring"],null,"common"],["wikia.tracker",1551960000,["amd","wikia.window","wikia.log","wikia.tracker.stub"],null,"common"],["wikia.tracker.stub",
1551960000,["amd","wikia.window"],null,"common"],["wikia.throbber",1551960000,["amd"],null,"common"],["underscore",1551960000,["amd"],null,"common"],["wikia.aim",1551960000,["amd"],null,"common"],["wikia.uniqueId",1551960000,["amd"],null,"common"],["wikia.modernizr",1552185000,["amd","modernizr"],null,"common"],["wikia.mustache",1551960000,["amd"],null,"common"],["wikia.underscore",1551960000,["amd","wikia.window"],null,"common"],["wikia.stickyElement",1551960000,["amd","wikia.window","wikia.document","wikia.underscore"],null,"common"],["wikia.jquery.ui",1551960000,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse","jquery.ui.position","jquery.ui.draggable","jquery.ui.droppable","jquery.ui.sortable","jquery.ui.autocomplete","jquery.ui.slider","jquery.ui.tabs","jquery.ui.datepicker"],"jquery.ui","common"],["jquery.mustache",1551960000,["wikia.mustache"],null,"common"],["jquery.autocomplete",1551960000,[],null,"common"],["jquery.dataTables",1551960000,[],null,"common"],[
"jquery.timeago",1551960000,[],null,"common"],["wikia.yui",1551960000,[],"yui","common"],["wikia.importScript",1551960000,[],null,"common"],["wikia.article.edit",1551960000,["wikia.tracker"],null,"common"],["jquery.uls.data",1551960000],["jquery.i18n",1551960000,["mediawiki.libs.pluralruleparser"]],["ext.math.mathjax",1551960000,[],"ext.math.mathjax"],["ext.math.mathjax.enabler",1551960000],["ext.wikia.TimeAgoMessaging",1551960000,["jquery.timeago","mediawiki.jqueryMsg"]],["ext.designSystem",1202225400],["wikia.ext.instantGlobals",1552185000,[],null,"common"],["wikia.ext.instantGlobalsOverride",1551960000,[],null,"common"],["ext.bannerNotifications",1202225400],["ext.quickTools",1551960000,["mediawiki.user","mediawiki.util"]],["ext.createUserPage",1551960000,["mediawiki.user","mediawiki.util"]],["ext.quickAdopt",1551960000,["mediawiki.util","ext.createUserPage"]],["ext.wikia.authPreferences",1551960000],["ext.wikia.facebookTags",1551960000,[],null,"common"],["ext.wikia.multiLookup",
1551960000],["ext.wikia.ListGlobalUsers",1551960000],["ext.geshi.local",1202225400],["ext.siteWideMessages.anon",1551960000],["ext.scribunto",1551960000],["ext.scribunto.edit",1551960000,["ext.scribunto","mediawiki.api"]],["ext.wikia.InfoboxBuilder",1551960000,[],null,"local",["sass"]],["ext.categoryTree",1551960000],["ext.categoryTree.css",1551960000],["ext.checkUser",1551960000,["mediawiki.util"]],["ext.cite",1551960000,["jquery.tooltip"]],["jquery.tooltip",1551960000],["ext.wikia.ajaxpoll",1551960000,[],null,"local",["sass"]],["ext.wikia.WMU",1551960000,["wikia.yui","jquery.aim"]],["ext.wikia.LinkSuggest",1551960000,["jquery.ui.autocomplete"]],["ext.wikia.ListUsers",1551960000,["jquery.ui.autocomplete","jquery.dataTables"],null,"local",["sass"]],["ext.tabber",1551960000],["ext.nuke",1551960000],["ext.userLogin",1202225400],["ext.UserProfilePage.Lightbox",1551960000,["mediawiki.jqueryMsg"],null,"local",["sass"]],["ext.renameuser.modal",1551960000,["mediawiki.util"]],[
"ext.Chat2.ChatBanModal",1551960000],["ext.Chat2.ChatWidget",1202225400],["ext.Chat2.ChatBanList",1551960000,["jquery.dataTables","wikia.nirvana"],null,"local",["sass"]],["ext.Chat2",1202225400,["mediawiki.jqueryMsg"]],["ext.AdminDashboard",1202225400],["wikia.ext.abtesting",1550570400,[],null,"common"],["wikia.ext.abt3sting",1550570400,[],null,"common"],["wikia.ext.abtest",1551960000],["wikia.ext.abtesting.edit.styles",1551960000,[],null,"local",["sass"]],["wikia.ext.abtesting.edit",1551960000],["oojs",1551960000],["oojs-ui",1551960000,["oojs","oojs-ui.styles"]],["oojs-ui.styles",1551805200],["jquery.visibleText",1551960000],["Base64.js",1551960000],["easy-deflate.core",1551960000,["Base64.js"]],["easy-deflate.deflate",1551960000,["easy-deflate.core"]],["unicodejs",1551960000],["unicodejs.wordbreak",1202225400,["unicodejs"]],["papaparse",1551960000],["rangefix",1551960000],["ext.visualEditor.viewPageTarget.init",1551960000,["jquery.client","mediawiki.page.startup","mediawiki.Title",
"mediawiki.Uri","mediawiki.util","user.options","ext.visualEditor.track"]],["ext.visualEditor.viewPageTarget.noscript",1551960000],["ext.visualEditor.viewPageTarget",1551960000,["ext.visualEditor.base","ext.visualEditor.mediawiki","ext.visualEditor.core.desktop","jquery.placeholder","mediawiki.feedback","mediawiki.jqueryMsg","mediawiki.util"]],["ext.visualEditor.mobileViewTarget",1551960000,["ext.visualEditor.base","ext.visualEditor.mediawiki.mobile","ext.visualEditor.core.mobile","ext.visualEditor.mwimage.core"]],["ext.visualEditor.ve",1551960000],["ext.visualEditor.track",1551960000,["ext.visualEditor.ve"]],["ext.visualEditor.base",1551960000,["oojs","oojs-ui","unicodejs","rangefix","ext.visualEditor.ve"]],["ext.visualEditor.mediawiki",1551960000,["jquery.visibleText","jquery.byteLength","jquery.client","mediawiki.api","mediawiki.language","mediawiki.Title","mediawiki.Uri","mediawiki.user","mediawiki.util","easy-deflate.deflate","user.options","user.tokens","ext.visualEditor.base",
"ext.visualEditor.track"]],["ext.visualEditor.mediawiki.mobile",1551960000,["ext.visualEditor.mediawiki","ext.visualEditor.core.mobile"]],["ext.visualEditor.standalone",1551960000,["ext.visualEditor.base","jquery.i18n"]],["ext.visualEditor.data",1551960000,["ext.visualEditor.base"]],["ext.visualEditor.core",1551960000,["unicodejs","papaparse","jquery.uls.data","ext.visualEditor.base"]],["ext.visualEditor.core.desktop",1551960000,["ext.visualEditor.core"]],["ext.visualEditor.core.mobile",1551960000,["ext.visualEditor.core"]],["ext.visualEditor.mwcore",1551960000,["ext.visualEditor.core","mediawiki.Title","mediawiki.action.history.diff","mediawiki.user","mediawiki.util","mediawiki.jqueryMsg","jquery.autoEllipsis","jquery.byteLimit"]],["ext.visualEditor.mwformatting",1551960000,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwimage.core",1551960000,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwimage",1551960000,["ext.visualEditor.mwimage.core"]],["ext.visualEditor.mwlink",1551960000,
["ext.visualEditor.mwcore"]],["ext.visualEditor.mwmeta",1551960000,["ext.visualEditor.mwcore","ext.visualEditor.mwlink"]],["ext.visualEditor.mwreference.core",1551960000,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwreference",1551960000,["ext.visualEditor.mwreference.core","ext.visualEditor.mwtransclusion"]],["ext.visualEditor.mwtransclusion.core",1551960000,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwtransclusion",1551960000,["ext.visualEditor.mwtransclusion.core","mediawiki.jqueryMsg","mediawiki.language"]],["ext.visualEditor.language",1551960000,["ext.visualEditor.core","mediawiki.language.names"]],["ext.visualEditor.mwalienextension",1551960000,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwgallery",1551960000,["ext.visualEditor.mwcore"]],["ext.visualEditor.experimental",1202225400,["ext.visualEditor.language","ext.visualEditor.mwalienextension"]],["ext.visualEditor.wikia.viewPageTarget.init",1551960000,["jquery.client","jquery.byteLength","mediawiki.Title",
"mediawiki.Uri","mediawiki.util","user.options","ext.visualEditor.track"]],["ext.visualEditor.wikia.oasisViewPageTarget",1551960000,["ext.visualEditor.viewPageTarget"]],["ext.visualEditor.wikia.core",1551960000,["ext.visualEditor.core.desktop","ext.visualEditor.mwimage","ext.visualEditor.mwmeta"]],["ext.closeMyAccount",1551960000,[],null,"local",["sass"]],["ext.TwitterTag",1551960000],["ext.wikia.VKTag",1551960000],["ext.ArticleVideo.jw",1551960000],["ext.fandomComMigration",1202225400],["ext.wikia.CategoryPage3.categoryLayoutSelector.scripts",1551960000],["ext.maps.common",1551960000,[],"ext.maps"],["ext.maps.coord",1551960000,[],"ext.maps"],["ext.maps.resizable",1202225400,["jquery.ui.resizable"],"ext.maps"],["mapeditor",1551960000,["ext.maps.common","jquery.ui.autocomplete","jquery.ui.slider","jquery.ui.dialog"],"ext.maps"],["ext.maps.services",1551960000,["ext.maps.common","ext.maps.coord"],"ext.maps"],["ext.maps.googlemaps3",1551960000,["ext.maps.common"],"ext.maps"],[
"ext.maps.gm3.markercluster",1551960000,[],"ext.maps"],["ext.maps.gm3.markerwithlabel",1551960000,[],"ext.maps"],["ext.maps.gm3.geoxml",1551960000,[],"ext.maps/geoxml3"],["ext.maps.gm3.earth",1551960000,[],"ext.maps"],["ext.maps.openlayers",1551960000,["ext.maps.common"],"ext.maps"],["ext.maps.leaflet",1551960000,["ext.maps.common"],"ext.maps"],["ext.maps.leaflet.fullscreen",1551960000,["ext.maps.leaflet"],"ext.maps"],["ext.maps.leaflet.markercluster",1551960000,["ext.maps.leaflet"],"ext.maps"],["ext.maps.leaflet.providers",1551960000,["ext.maps.leaflet"],"ext.maps"]]);mw.config.set({"wgLoadScript":"/pt/load.php","debug":!1,"skin":"oasis","stylepath":"https://slot1-images.wikia.nocookie.net/__cb8200028200012/common/skins","wgUrlProtocols":"\\/\\/|ftp\\:\\/\\/|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|svn\\:\\/\\/|telnet\\:\\/\\/|worldwind\\:\\/\\/|xmpp\\:","wgArticlePath":"/pt/wiki/$1",
"wgScriptPath":"/pt","wgScriptExtension":".php","wgScript":"/pt/index.php","wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"https://mlp.fandom.com","wgUserLanguage":"pt","wgContentLanguage":"pt-br","wgVersion":"1.19.24","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgDefaultDateFormat":"dmy","wgMonthNames":["","janeiro","fevereiro","março","Abril","maio","junho","julho","Agosto","setembro","outubro","novembro","dezembro"],"wgMonthNamesShort":["","jan.","fev.","mar.","Abr","maio","jun.","jul.","Ago","set","out.","nov.","dez."],"wgMainPageTitle":"My Little Pony A Amizade é Mágica Wiki","wgFormattedNamespaces":{"-2":"Mídia","-1":"Especial","0":"","1":"Discussão","2":"Usuário","3":"Usuário Discussão","4":"My Little Pony A Amizade é Mágica Wiki","5":"My Little Pony A Amizade é Mágica Wiki Discussão","6":"Arquivo","7":"Arquivo Discussão","8":"MediaWiki","9":"MediaWiki Discussão","10":"Predefinição","11":"Predefinição Discussão","12":"Ajuda","13":
"Ajuda Discussão","14":"Categoria","15":"Categoria Discussão","110":"Forum","111":"Forum talk","500":"Blog de usuário","501":"Comentário de blog de usuário","502":"Blog","503":"Conversa de blog","828":"Módulo","829":"Módulo Discussão","1200":"Mural de mensagens","1201":"Conversa","1202":"Saudação no mural de mensagens","2000":"Quadro","2001":"Conversa no quadro","2002":"Tópico"},"wgNamespaceIds":{"mídia":-2,"especial":-1,"":0,"discussão":1,"usuário":2,"usuário_discussão":3,"my_little_pony_a_amizade_é_mágica_wiki":4,"my_little_pony_a_amizade_é_mágica_wiki_discussão":5,"arquivo":6,"arquivo_discussão":7,"mediawiki":8,"mediawiki_discussão":9,"predefinição":10,"predefinição_discussão":11,"ajuda":12,"ajuda_discussão":13,"categoria":14,"categoria_discussão":15,"forum":110,"forum_talk":111,"blog_de_usuário":500,"comentário_de_blog_de_usuário":501,"blog":502,"conversa_de_blog":503,"módulo":828,"módulo_discussão":829,"mural_de_mensagens":1200,"conversa":1201,
"saudação_no_mural_de_mensagens":1202,"quadro":2000,"conversa_no_quadro":2001,"tópico":2002,"imagem":6,"imagem_discussão":7,"ficheiro":6,"ficheiro_discussão":7,"usuária":2,"usuária_discussão":3,"message_wall":1200,"thread":1201,"message_wall_greeting":1202,"board":2000,"board_thread":2001,"topic":2002,"blog_talk":503,"user_blog":500,"user_blog_comment":501,"image":6,"image_talk":7,"media":-2,"special":-1,"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"file":6,"file_talk":7,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"module":828,"module_talk":829},"wgSiteName":"My Little Pony A Amizade é Mágica Wiki","wgFileExtensions":["png","gif","jpg","jpeg","ico","pdf","svg","odt","ods","odp","odg","odc","odf","odi","odm","ogg","ogv","oga"],"wgDBname":"ptmlp","wgFileCanRotate":!0,"wgAvailableSkins":{"oasis":"Oasis","wikiamobile":"WikiaMobile"},"wgExtensionAssetsPath":"/pt/extensions","wgCookiePrefix":
"wikicities","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$\x26\'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgSassParams":{"background-dynamic":"true","background-image":"https://vignette3.wikia.nocookie.net/mlp/images/5/50/Wiki-background/revision/20141116153842?path-prefix=pt","background-image-height":"801","background-image-width":"1423","color-body":"#a8eff1","color-body-middle":"#baf6f7","color-buttons":"#c9574c","color-community-header":"#c9574c","color-header":"#87c5e0","color-links":"#ec6456","color-page":"#eff5fe","oasisTypography":1,"page-opacity":"100","widthType":0},"wgWikiaBaseDomain":"wikia.com","wgWikiaBaseDomainRegex":"((wikia|fandom)\\.com|(wikia|fandom)-dev\\.(com|us|pl))","wgServicesExternalDomain":"https://services.fandom.com/","wgServicesExternalAlternativeDomain":"https://services.wikia.com/","wgRecommendedVideoABTestPlaylist":"","wgJSMessagesCB":"8200028200012.0.0","wgVisualEditorConfig":{"disableForAnons"
:!1,"preferenceModules":{"visualeditor-enable-experimental":"ext.visualEditor.experimental","visualeditor-enable-language":"ext.visualEditor.language"},"namespaces":[0,2,14,4],"pluginModules":["ext.visualEditor.wikia.core"],"defaultUserOptions":{"betatempdisable":0,"enable":1,"defaultthumbsize":180,"visualeditor-enable-experimental":0,"visualeditor-enable-language":0},"blacklist":{"msie":null,"android":[["\x3c",3]],"firefox":[["\x3c=",14]],"opera":[["\x3c",12]],"blackberry":null,"silk":null},"skins":["oasis"],"tabPosition":"before","tabMessages":{"edit":null,"editsource":"visualeditor-ca-classiceditor","create":null,"createsource":"visualeditor-ca-classiceditor","editlocaldescriptionsource":"visualeditor-ca-editlocaldescriptionsource","createlocaldescriptionsource":"visualeditor-ca-createlocaldescriptionsource","editsection":null,"editsectionsource":"visualeditor-ca-editsource-section","editappendix":null,"editsourceappendix":null,"createappendix":null,"createsourceappendix":null,
"editsectionappendix":null,"editsectionsourceappendix":null},"showBetaWelcome":!1,"enableTocWidget":!1},"wgCommunityPageDisableTopContributors":!1});mw.loader.state({"jquery":"ready"});window.preMwLdrSt&&mw.loader.state(window.preMwLdrSt);if(window.preMwLdrStA){for(var i=0;i<window.preMwLdrStA.length;i++)mw.loader.state(window.preMwLdrStA[i]);};};if(isCompatible()){document.write("\x3cscript src=\"https://slot1-images.wikia.nocookie.net/__load/-/debug%3Dfalse%26lang%3Dpt%26only%3Dscripts%26skin%3Doasis%26version%3D8200028200012-20190307T120000Z/jquery,mediawiki\"\x3e\x3c/script\x3e");}delete isCompatible;;

/* cache key: ptmlp:resourceloader:filter:minify-js:7:01609ca1aac988024dfa4494f89db792 */