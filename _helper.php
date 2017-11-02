<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html"; charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Update-Helfer</title>

	<style>
	body {font-size: 1.2em;
	line-height: 1.8em;}
	</style>
	
</head>

<body>




<section id="page">
	<header id="header">
		<h1>Update-Helfer</h1>
		<h3><a href="/" target="_blank">Seite aufrufen</a></h3>
	</header>
	<section>
			Unzip:
		<ul>
			<li><a href="/sites/all/modules/_unzip.php" target="_blank">Unzip Modules</a></li>
			<li><a href="/sites/all/libraries/_unzip.php" target="_blank">Unzip Libraries</a></li>
			<li><a href="/admin/config/development/performance" target="_blank">Leistung</a></li>
			<li><a href="/admin/config/system/backup_migrate" target="_blank">Backup</a></li>
			<li><a href="/sites/all/themes/custom/grunticon/preview.html" target="_blank">Grunticon-Icons</a></li>
			<li>Reload <a href="/sites/all/themes/custom/css/custom.css" target="_blank">custom.css</a>, <a href="/sites/all/themes/custom/css/custom-critical.css" target="_blank">custom-critical.css</a>, <a href="/sites/all/themes/myseven/css/myseven.css" target="_blank">myseven.css</a></li> </li> 
		</ul>
	</section>

	<section>
	<p><a href="#module">Erweiterungs-Liste der MODULE »</a> | <a href="/admin/modules/install" target="_blank">admin/modules/install »</a> | <a href="#abschluss">Nach der Installation »</a></p>
	<p><strong>Vor dem Restore:</strong>
		<ol>
			<li><a href="_download_core.php">_download_core.php</a></li>
			<li><a href="/install.php?profile=minimal" target="_blank">Drupal installieren</a></li>
			<li><a href="https://www.passwort-generator.com" target="_blank">Passwort generieren</a></li>
			<li><a href="/admin/config/media/file-system" target="_blank">Privates Verzeichnis</a> (admin/config/media/file-system) auf <b>sites/default/files/private</b> stellen<br>
			<li><a href="/admin/config/media/file-system" target="_blank">Temporäres Verzeichnis</a> (admin/config/media/file-system) vor dem Restore SPEICHERN und danach zurückstellen:<br>
			<input name="verzeichnis" type="text" size="100" value="/tmp"></li>
			
			<li><a href="/admin/modules#edit-modules-core-dashboard-enable" target="_blank">Database Logging deaktivieren</a></li>
			<li><a href="/admin/modules#edit-modules-other" target="_blank">Modul Backup-Migrate aktivieren</a></li>
			<li><a href="https://www.drupal.org/files/issues/backup_migrate-fix_constructor_for_future_version_php-2623598-5-7.x.patch" target="_blank">Fehlermeldung Deprecated: Methods</a></li>
			<li><a href="/admin/config/system/backup_migrate/backups" target="_blank">DEV-Datenbank hochladen</a><l/li>
		</ol>
	</p>
	</section>


	<nav id="navigation">
		Nach Update:
		<ol>
			<li><a href="/admin/config/media/file-system" target="_blank">ggf. temporäres Verzeichnis wiederherstellen (admin/config/media/file-system)</a></li>
			<li><a href="/admin/reports/status" target="_blank">admin/reports/status</a></li>
			<li><a href="/admin/content?type=patch" target="_blank">Patches löschen</a></li>
			<li><a href="/admin/structure/types/manage/patch/delete" target="_blank">Inhaltstyp Patch löschen</a></li>
			<li><a href="/admin/modules#edit-modules-development-devel-generate-enable" target="_blank">Modules Patch- / Unused- / Update Extended deaktivieren</a></li>
			<li><a href="/admin/modules/uninstall" target="_blank">ggf. Module deinstallieren</a></li>
			<li><a href="/admin/config/development/performance" target="_blank">Gesamten Cache löschen</a></li>
			<li><a href="/admin/config/system/backup_migrate" target="_blank">Backup</a></li>
			<li><a href="/admin/config/system/backup_migrate/backups" target="_blank">Altes Backup löschen</a></li>
			<li>FTP: sites/default/files/css und /js und <b>/styles</b> löschen</li>
			<li><a href="/_zip.php?dir=sites" target="_blank">zip & download sites</a></li>
			<li>Remove Trailing Slash from <a href="/robots.txt" target="_blank">robots.txt</a><br>
			<pre style="line-height: 1em; font-size: .8em;"># Paths (clean URLs without trailing slash)
Disallow: /admin
Disallow: /comment/reply
Disallow: /filter/tips
Disallow: /node/add
Disallow: /search
Disallow: /user/register
Disallow: /user/password
Disallow: /user/login
Disallow: /user/logout
# Paths (no clean URLs)
Disallow: /?q=admin
Disallow: /?q=comment/reply
Disallow: /?q=filter/tips
Disallow: /?q=node/add
Disallow: /?q=search
Disallow: /?q=user/password
Disallow: /?q=user/register
Disallow: /?q=user/login
Disallow: /?q=user/logout</pre>

		</ol>
		
		Nach Neuanlage:
		<ol>
			<li><a href="/admin/people/create" target="_blank">Benutzer hinzufügen und Shortcut zuweisen</a></li>
			<li><a href="/admin/content" target="_blank">Inhalte Benutzer zuweisen</a></li>
			<li><a href="/admin/content/file" target="_blank">Dateien Benutzer zuweisen (außer Standards wie Logo o.ä.!)</a></li>
			<li><a href="/admin/config/system/site-information" target="_blank">admin/config/system/site-information (E-Mail kopieren)</a></li>
			<li><a href="/admin/config/content/webform" target="_blank">Webform Standard-E-Mail</a></li>
			<li><a href="/node/4/webform/emails/1" target="_blank">E-Mail Kontaktformular</a></li>
			<li><a href="/node/4/edit" target="_blank">Adresse: Kontakt (Adresse kopieren) und ggf. Google+ Schema ändern</a></li>
			<li><a href="/admin/structure/block/manage/block/5/configure" target="_blank">Adresse: Sidebar</a></li>
			<li><a href="/node/2/edit" target="_blank">Adresse: Impressum</a></li>
			<li><a href="/admin/structure/menu/item/236/edit" target="_blank">Menülink zur Startseite</a></li>	
		</ol>


		Gestaltung und Meta-Tags:
		<ol>
			<li><a href="/admin/appearance/settings/custom#edit-zen-html5-respond-meta" target="_blank">Responsive Design aktivieren</a></li>
			<li><a href="/admin/config/content/ckeditor/edit/Full#edit-width" target="_blank">CK-Editor-Breite ändern: Content-Breite + 45px</a></li>
			<li><a href="/admin/config/media/image-styles" target="_blank">admin/config/media/image-styles</a></li>
			<li><a href="/admin/config/search/metatags/config/" target="_blank">admin/config/search/metatags/config/</a></li>
		</ol>
	</nav>
	<section id="abschluss" name="abschluss">
		<strong>Nach Fertigstellung:</strong>
		<ol>
			<li><a href="http://realfavicongenerator.net" target="_blank">Favicon generieren (sites/all/themes/custom)</a></li>
			<li><a href="/admin/appearance/settings/custom" target="_blank">Turn off Rebuild theme registry on every page.</a></li>
			<li><a href="/admin/config/media/image-toolkit" target="_blank">Qualität Bild Toolkit überprüfen (Standard 80%)</a></li>
			<li><a href="/admin/structure/views/view/admin_views_node/edit" target="_blank">ggf. Inhalts-Tabelle anpassen</a></li>
			<li><a href="/admin/structure/views/nojs/display/blog/block/cache" target="_blank">ggf. Blog-Cache anpassen</a></li>
			<li><a href="/admin/config/search/xmlsitemap" target="_blank">XML-Sitemap aktualisieren</a></li>http://jens.schmedemann-ra.de/sitemap.xml
			<li><a href="/sitemap.xml" target="_blank">XML-Sitemap überprüfen</a></li>
			<li><a href="/admin/reports/prod-check" target="_blank">Production Check überprüfen</a></li>
			<li><a href="/_deactivate_lastmodules.php" target="_blank">_deactivate_lastmodules.php </a>Views & Field UI, Devel, BackupMigrate u.ä.<b>deinstallieren</b></li>
			<li><a href="/admin/modules" target="_blank">Module deaktivieren: </a>Views & Field UI, Devel, BackupMigrate u.ä.</li>
			<li><a href="/admin/modules#edit-modules-performance-and-scalability" target="_blank">Module aktivieren: </a>Boost, HTTPRL, Crawler</li>
			<li><a href="/admin/config/system/boost/htaccess" target="_blank">Boost einstellungen in die htaccess kopieren</a></li>
			<li><a href="/admin/reports/status" target="_blank">Status überprüfen</a></li>
			<li><a href="/admin/config/development/httprl" target="_blank">ggf. HTTPRL auf -1 setzen</a></li>
			<li><a href="/admin/config/development/performance/minifyjs" target="_blank">Minify Cache aufbauen</a></li>
			<li><a href="/admin/config/development/performance/advagg" target="_blank">Advagg mit "Render Cache" aktivieren</a></li>
			<li><a href="/admin/config/development/performance" target="_blank">Cache einschalten (ggf. $conf['block_cache_bypass_node_grants'] = TRUE; in settings.php)</a></li>
			<li><a href="/admin/config/development/logging" target="_blank">Fehlerlogging ausschalten</a></li>
			<li><a href="/admin/config/regional/translate/update" target="_blank">Übersetzungen kontrollieren</a></li>
			<li><a href="https://localize.drupal.org/translate/languages/de/export" target="_blank">ggf. fehlende Übersetzungen installieren</a></li>
			<li>Images komprimieren mit Image-Optim</li>
			<li>SVG komprimieren mit svgo-gui</li>

			<li>add SSL-script to htaccess after <em>RewriteEngine on</em>:<br />
				<pre style="line-height: 1em; font-size: .8em;">
  RewriteCond %{HTTPS} off
  # First rewrite to HTTPS:
  # Don't put www. here. If it is already there it will be included, if not
  # the subsequent rule will catch it.
  RewriteRule .* https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
				</pre>
			</li>

			<li>add script to htaccess:<br />
				<pre style="line-height: 1em; font-size: .8em;">
	//	Nur bei All-INKL: AddHandler php-fastcgi .php
	// 	AddHandler php53-cgi .php
	// Oder im KAS -> Domain -> PHP-Version umstellen auf CGI

	php_value max_execution_time        300
  	php_value memory_limit          256M
				</pre>
			</li>
			<li>Cronjob Strato: curl --silent --compressed   https://www.wortkind.de/cron.php?cron_key=v4WzGexwS-qHO5iBy56Ke0oGEDjIPdNGKFLnJm24W94</li>
		</ol>
	</section>
	
 



	
	



	<section id="module" name="module">
		
		Empfohlene Module:
		<a href="/admin/modules/install" target="_blank">Neues Modul installieren</a>
		<ul>
			<p><strong>Entwicklung:</strong></p>
			<li><a href="https://www.drupal.org/project/devel" target="_blank">Devel</a></li>
			<li><a href="https://www.drupal.org/project/devel_themer" target="_blank">Theme Developer, requires:</a></li>
			<li><a href="https://www.drupal.org/project/simplehtmldom" target="_blank">simplehtmldom 7.x <span style="color:red;">1.12  (!!!)</span></a></li>
			<li><a href="https://www.drupal.org/project/stcl" target="_blank">SQL Storage cleanup</a></li>
			<li><a href="https://www.drupal.org/project/lorempixel" target="_blank">Lorempixel</a></li>
			<li><a href="https://www.drupal.org/project/environment_indicator" target="_blank">Environment Indicator</a></li>
			<li><a href="https://www.drupal.org/project/multisite_wizard" target="_blank">Multisite wizard</a></li>
			<li><a href="https://www.drupal.org/project/virtual_site" target="_blank">Virtual Site</a></li>
			<li><a href="https://www.drupal.org/project/diff" target="_blank">Diff Tab</a></li>
			<li><a href="https://www.drupal.org/project/context_breakpoint" target="_blank">Context Breakpoint</a></li>
			<li><a href="https://www.drupal.org/project/prelaunch" target="_blank">Prelaunch</a></li>
			<li><a href="https://www.drupal.org/project/file_checker" target="_blank">File Checker</a></li>
			<li><a href="https://www.drupal.org/project/module_configure_links" target="_blank">Module configure links</a></li>
			<li><a href="https://www.drupal.org/project/setup" target="_blank">Setup</a></li>
			<li><a href="https://www.drupal.org/project/memory_profiler" target="_blank">Memory profiler</a></li>
			<li><a href="https://www.drupal.org/project/hide_site" target="_blank">Hide Site</a></li>
			<li><a href="https://www.drupal.org/project/configuration" target="_blank">Configuration Management</a></li>
			<li><a href="https://www.drupal.org/project/patch_manager" target="_blank">Patch Manager</a></li>
			<li><a href="https://www.drupal.org/project/coffee" target="_blank">Coffee (navigate through the Drupal admin menu)</a></li>
			<li><a href="https://www.drupal.org/project/phpfilter_usage_report" target="_blank">PHP Filter Usage Report</a></li>
			<li><a href="https://www.drupal.org/project/cookielock" target="_blank">Cookie Lock</a></li>
			<li><a href="https://www.drupal.org/project/enhanced_imagelist" target="_blank">Enhanced image style listings</a></li>
			<li><a href="https://www.drupal.org/project/sqlbuddy" target="_blank">SQL Buddy</a></li>
			<li><a href="https://www.drupal.org/project/traced" target="_blank">Traced (Tracy PHP debugger)</a></li>
			<li><a href="https://www.drupal.org/project/developer_docs" target="_blank">Developer Docs</a></li>
			<li><a href="https://www.drupal.org/project/ftg" target="_blank">Field Type Generator</a></li>
			<li><a href="https://www.drupal.org/project/query_coder" target="_blank">Query coder</a></li>
			<li><a href="https://www.drupal.org/project/querybuilder" target="_blank">QueryBuilder</a></li>
			<li><a href="https://www.drupal.org/project/client_error_trace" target="_blank">Client Error Trace</a></li>
			<li><a href="https://www.drupal.org/project/patch_status" target="_blank">Patch Status</a></li>
			<li><a href="https://www.drupal.org/project/single_page_site" target="_blank">Single Page Site</a></li>
			<li><a href="https://www.drupal.org/project/anchors_panels_navigation" target="_blank">Anchors Panels Navigation</a></li>
			<li><a href="https://www.drupal.org/project/mail_debugger" target="_blank">Mail Debugger</a></li>
			<li><a href="https://www.drupal.org/project/cts" target="_blank">Custom Template Suggestions (CTS)</a></li>
			<li><a href="https://www.drupal.org/project/css_editor" target="_blank">CSS Editor</a></li>
			<li><a href="https://www.drupal.org/project/view_modes_by_view" target="_blank">View Modes by View</a></li>
			<li><a href="https://www.drupal.org/project/site_deployment" target="_blank">Site Deployment (http://cgit.drupalcode.org/site_deployment)</a></li>
			<li><a href="https://www.drupal.org/project/realistic_dummy_content" target="_blank">Realistic Dummy Content</a></li>
			<li><a href="https://www.drupal.org/project/devel_image_provider" target="_blank">Devel Image Provider</a></li>
			<li><a href="https://www.drupal.org/project/dummyimage" target="_blank">Dummy Image</a></li>
			<li><a href="https://www.drupal.org/project/unused_modules" target="_blank">Unused Modules</a></li>
			<li><a href="https://www.drupal.org/project/adb" target="_blank">Access denied backtrace</a></li>
			<li><a href="https://www.drupal.org/project/multivariate" target="_blank">Multivariate (A/B Tests UI)</a></li>
			<li><a href="https://www.drupal.org/project/abtest" target="_blank">A/B test</a></li>
			<li><a href="https://www.drupal.org/project/module_missing_message_fixer" target="_blank">Module Missing Message Fixer</a></li>
			<li><a href="https://www.drupal.org/project/upgrade_status" target="_blank">Upgrade Status</a></li>
			<li><a href="https://www.drupal.org/project/rdrush" target="_blank">Remote Drush</a></li>
			<li><a href="https://www.drupal.org/project/field_inspector" target="_blank">Field inspector</a></li>
		</ul>
			
			<br/>
			<p><strong>Performance:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/advagg" target="_blank">Advanced CSS/JS Aggregation</a></li>
				<li><a href="https://www.drupal.org/project/css_delivery" target="_blank">CSS Delivery Optimizer (Permission: Websitekonfiguration verwalten)</a></li>
				<li><a href="https://www.drupal.org/project/magic" target="_blank">Magic (Caching)</a></li>
				<li><a href="/Users/tobbi/Websites/•DRUPAL/Skripte und Module/D7-Module/magic_fix" target="_blank">Magic Fix for Typekit (•DRUPAL-MODULE D7/CUSTOM/magic_fix)</a></li>
				<li><a href="https://www.drupal.org/project/boost_custom_expire_rules" target="_blank">Boost Custom Expire Rules</a></li>
				<li><a href="https://www.drupal.org/project/ecl" target="_blank">Entity Cache Loader</a></li>
				<li><a href="https://www.drupal.org/project/display_cache" target="_blank">Entity Display Cache</a></li>
				<li><a href="https://www.drupal.org/project/cache_heuristic" target="_blank">Cache Heuristic</a></li>
				<li><a href="https://www.drupal.org/project/apdqc" target="_blank">Asynchronous Prefetch Database Query Cache</a></li>
				<li><a href="https://www.drupal.org/project/cache_graceful" target="_blank">Cache Graceful</a></li>
				<li><a href="https://www.drupal.org/project/views_accelerator" target="_blank">Views Accelerator (Views using "no" fields)</a></li>
				<li><a href="https://www.drupal.org/project/views_row_cache" target="_blank">Views Row Cache</a></li>
				<li><a href="https://www.drupal.org/project/views_cache_bully" target="_blank">Views Cache Bully</a></li>
				<li><a href="https://www.drupal.org/project/shadow" target="_blank">Shadow - SQL queries / views optimization</a></li>			
				<li><a href="https://www.drupal.org/project/boost" target="_blank">Boost</a></li>
				<li><a href="https://www.drupal.org/project/recacher" target="_blank">Recacher</a></li>
				<li><a href="https://www.drupal.org/node/1986268/git-instructions/7.x-1.1" target="_blank">Boost Warmer</a></li>
				<li><a href="https://www.drupal.org/project/authcache" target="_blank">Authenticated User Page Caching (Authcache)</a></li>
				<li><a href="https://www.drupal.org/project/commerce_authcache" target="_blank">Commerce Authcache (s.a. <a href="https://www.drupal.org/node/2037015" taget="_blank">Tutorial</a></li>
				<li><a href="https://simplytest.me/project/2154011/feature/7.x-2.x/authcache" target="_blank">Authcache Feature for Commerce</a></li>
				<li><a href="https://www.drupal.org/project/authcache_boost" target="_blank">Authcache Boost Storage Backend</a></li>
				<li><a href="https://www.drupal.org/project/filecache" target="_blank">File Cache</a></li>
				<li><a href="https://www.drupal.org/project/db_maintenance/" target="_blank">DB Maintenance</a></li>
				<li><a href="https://www.drupal.org/project/optimizedb" target="_blank">OptimizeDB</a></li>
				<li><a href="https://www.drupal.org/project/variable_clean" target="_blank">DB Variable Cleaner</a></li>
				<li><a href="https://www.drupal.org/project/views_content_cache" target="_blank"><strong>Views Content Cache</strong></a></li>
				<li><a href="https://www.drupal.org/project/views_litepager" target="_blank"><strong>Views Litepager</strong></a></li>
				<li><a href="https://www.drupal.org/project/prod_check" target="_blank">Production check</a></li>
				<li><a href="https://www.drupal.org/project/performance" target="_blank">Performance Logging</a></li>
				<li><a href="https://www.drupal.org/project/css_emimage" target="_blank">CSS Emedded Images</a></li>
				<li><a href="https://www.drupal.org/project/lazyloader" target="_blank">Image Lazyloader</a></li>
				<li><a href="https://www.drupal.org/project/lazyloader_filter" target="_blank">Image Lazyloader Filter</a></li>
				<li><a href="https://www.drupal.org/project/defer_image" target="_blank">Defer Image</a></li>
				<li><a href="https://www.drupal.org/project/fastclick" target="_blank">FastClick</a></li>
				<li><a href="https://www.drupal.org/project/htaccess" target="_blank">htaccess</a></li>
				<li><a href="https://www.drupal.org/project/bootstrap_optimizer" target="_blank">Bootstrap optimizer</a></li>
				<li><a href="https://www.drupal.org/project/autocache" target="_blank">Autocache</a></li>
				<li><a href="https://www.drupal.org/project/adbc" target="_blank">Alternative Database Cache</a></li>
				<li><a href="https://www.drupal.org/project/apc" target="_blank">APC - Alternative PHP Cache</a></li>
				<li><a href="https://www.drupal.org/project/ua_cache_bypass" target="_blank">User-Agent Cache Bypass</a></li>
				<li><a href="https://www.drupal.org/project/taxonomy_orphanage" target="_blank">Taxonomy Orphanage</a></li>
				<li><a href="https://www.drupal.org/project/field_sql_norevisions" target="_blank">Field SQL norevisions</a></li>
				<li><a href="https://www.drupal.org/project/static_server" target="_blank">Static Server (CDN)</a></li>
				<li><a href="https://www.drupal.org/project/static" target="_blank">Static Generator</a></li>
				<li><a href="https://www.drupal.org/project/wget_static" target="_blank">Wget Static</a></li>
				<li><a href="https://www.drupal.org/project/post_render_cache" target="_blank">Post Render Cache</a></li>
				<li><a href="https://www.drupal.org/project/minihtml" target="_blank">Minify HTML</a></li>
				<li><a href="https://www.drupal.org/project/speedy" target="_blank">Speedy (Minified Core)</a></li>
				<li><a href="https://www.drupal.org/project/fast_cache" target="_blank">Yet Another Fast Cache</a></li>
				<li><a href="https://www.drupal.org/project/views_custom_cache" target="_blank">Views custom cache</a></li>
				<li><a href="https://www.drupal.org/project/field_index" target="_blank">Views Field index</a></li>
				<li><a href="https://www.drupal.org/project/amp" target="_blank">Accelerated Mobile Pages (Google AMP)</a></li>
				<li><a href="https://www.drupal.org/project/filecache" target="_blank">File Cache</a></li>
				<li><a href="https://www.drupal.org/project/blockcache_alter" target="_blank">Block Cache Alter</a></li>
			</ul>

			<br/>
			<p><strong>Images:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/picture" target="_blank">Picture</a></li>
				<li><a href="https://www.drupal.org/project/flexslider" target="_blank">Flexslider</a></li>
				<li><a href="https://www.drupal.org/project/jquery_update" target="_blank">Flexslider: jQuery Update</a></li>
				<li><a href="https://www.drupal.org/project/jqmulti" target="_blank">Flexslider: jQuery Multi</a></li> 
				<li><a href="https://www.drupal.org/project/slick" target="_blank">Slick Carousel</a></li>
				<li><a href="https://www.drupal.org/project/imagecache_actions" target="_blank">Image Cache Actions</a></li>
				<li><a href="https://www.drupal.org/project/focal_point" target="_blank">Focal Point</a></li>
				<li><a href="https://www.drupal.org/project/simplecrop" target="_blank">SimpleCrop</a></li>
				<li><a href="https://www.drupal.org/project/iek" target="_blank">Image Effect Kit</a></li>
				<li><a href="https://www.drupal.org/project/imageapi_optimize" target="_blank">Image Optimize</a></li>
				<li><a href="https://www.drupal.org/project/image_style_quality" target="_blank">Image Style Quality</a></li>
				<li><a href="https://www.drupal.org/project/imageinfo_cache" target="_blank">ImageInfo Cache</a></li>
				<li><a href="https://www.drupal.org/project/auto_image_style" target="_blank">Auto image style</a></li>
				<li><a href="https://www.drupal.org/project/image_combination_effects" target="_blank">Image Combination Effects (ICE)</a></li>
				<li><a href="https://www.drupal.org/project/photoswipe" target="_blank">PhotoSwipe</a></li>
				<li><a href="https://github.com/temoor-gilmutdinov/deepzoom" target="_blank">gitHub Deepzoom</a></li>
				<li><a href="https://www.drupal.org/project/image_formatter_link_to_image_style" target="_blank">Image formatter link to image style</a></li>
				<li><a href="https://www.drupal.org/project/image_resize_filter" target="_blank">Image Resize Filter</a></li>
				<li><a href="https://www.drupal.org/project/image_autosize" target="_blank">Image Autosize Filter</a></li>
				<li><a href="https://www.drupal.org/project/css_emimage" target="_blank">CSS Embedded Images</a></li>
				<li><a href="https://www.drupal.org/project/insert_image_with_text" target="_blank">Insert image with text (Caption)</a></li>
				<li><a href="https://www.drupal.org/project/jcaption" target="_blank">jCaption</a></li>
				<li><a href="https://www.drupal.org/project/image_field_caption" target="_blank">Image Field Caption</a></li>
				<li><a href="https://www.drupal.org/project/visual_select_file" target="_blank">Visual select file</a></li>
				<li><a href="https://www.drupal.org/project/filefield_sources_view" target="_blank">FileField Sources View</a></li>
				<li><a href="https://www.drupal.org/project/img_link_to_preset" target="_blank">Image link to preset</a></li>
				<li><a href="https://www.drupal.org/project/imagecache_proportions" target="_blank">Imagecache Proportions Formatter</a></li>
				<li><a href="https://www.drupal.org/project/collageformatter" target="_blank">Collage Formatter</a></li>
				<li><a href="https://www.drupal.org/sandbox/avitslv/2413017" target="_blank">Image Insane</a></li>
				<li><a href="https://www.drupal.org/project/epsacrop" target="_blank">EPSA Crop - Image Cropping</a></li>
				<li><a href="https://www.drupal.org/project/intense" target="_blank">Intense (Fullscreen Zoom)</a></li>
				<li><a href="https://www.drupal.org/project/easyzoom" target="_blank">Easy Zoom</a></li>
				<li><a href="https://www.drupal.org/project/auto_retina" target="_blank">Auto Retina</a></li>
				<li><a href="https://www.drupal.org/project/image_styles_info" target="_blank">Image Styles Info</a></li>
				<li><a href="https://www.drupal.org/project/ais" target="_blank">Adaptive Image Styles (ais)</a></li>
				<li><a href="https://www.drupal.org/project/derivative_generator" target="_blank">Derivative Generator (Image Styles)</a></li>
				<li><a href="https://www.drupal.org/project/image_widget_default_image" target="_blank">Image widget default image</a></li>
				<li><a href="https://www.drupal.org/project/image_styles_mapping" target="_blank">Image styles mapping</a></li>
				<li><a href="https://www.drupal.org/project/pdf_to_imagefield" target="_blank">PDF to ImageField</a></li>
				<li><a href="https://www.drupal.org/project/pdfpreview" target="_blank">PDFPreview</a></li>
				<li><a href="https://www.drupal.org/project/image_link_to_file" target="_blank">Image link to file</a></li>
				<li><a href="https://www.drupal.org/project/max_image_size" target="_blank">Max Image Size (on Save)</a></li>
				<li><a href="https://www.drupal.org/project/copyprevention" target="_blank">Copy Prevention</a></li>
				<li><a href="https://www.drupal.org/project/intense" target="_blank">Intense (Full Screen Image)</a></li>
			</ul>

			<br/>
			<p><strong>Forms:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/override_node_options" target="_blank">Override Node Options</a></li>
				<li><a href="https://www.drupal.org/project/jammer" target="_blank">Jammer</a></li>
				<li><a href="https://www.drupal.org/project/custom_search" target="_blank">Custom Search</a></li>
				<li><a href="https://www.drupal.org/project/finder" target="_blank">Finder Search</a></li>
				<li><a href="https://www.drupal.org/project/custom_meta" target="_blank">Custom Meta Tag</a></li>
				<li><a href="https://www.drupal.org/project/popular-tags" target="_blank">Popular Tags</a></li>
				<li><a href="https://www.drupal.org/project/search_autocomplete" target="_blank">Search Autocomplete</a></li>
				<li><a href="https://www.drupal.org/project/fuzzysearch" target="_blank">Fuzzy Search</a></li>
				<li><a href="https://www.drupal.org/project/maxlength" target="_blank">Maxlength</a></li>
				<li><a href="https://www.drupal.org/project/simplify" target="_blank">Simplify Forms</a></li>
				<li><a href="https://www.drupal.org/project/uniform" target="_blank">Form Uniform</a></li>
				<li><a href="https://www.drupal.org/project/custom_pub" target="_blank">Custom Publishing Option</a></li>
				<li><a href="https://www.drupal.org/project/config_builder" target="_blank">Configuration builder</a></li>
				<li><a href="https://www.drupal.org/project/parsley" target="_blank">Parsley Form Validation</a></li>
				<li><a href="https://www.lullabot.com/blog/article/entityreference-multiselectors" target="_blank">Entityreference Multiselectors(Lullabot)</a></li>
				<li><a href="http://www.bryanbraun.com/2013/08/31/8-ways-to-take-the-pain-out-of-drupals-admin-forms" target="_blank">Overview Multiselect</a></li>
				<li><a href="https://www.drupal.org/project/entityreference_autocomplete" target="_blank">Entity Reference Autocomplete</a></li>
				<li><a href="https://www.drupal.org/project/references_dialog" target="_blank">References dialog</a></li>
				<li><a href="https://www.drupal.org/project/chosen" target="_blank">Chosen (Multi-Select Alternative)</a></li>
				<li><a href="https://www.drupal.org/project/autocomplete_deluxe" target="_blank">Autocomplete Deluxe (Multi-Select Alternative)</a></li>
				<li><a href="https://www.drupal.org/project/select_or_other" target="_blank">Select or other</a></li>
				<li><a href="https://www.drupal.org/project/select_with_style" target="_blank">Select with Style</a></li>
				<li><a href="https://www.drupal.org/project/improved_multi_select" target="_blank">Improved Multi Select</a></li>
				<li><a href="https://www.drupal.org/project/asaf" target="_blank">Ajax submit for any form</a></li>
				<li><a href="https://www.drupal.org/project/combined_termref" target="_blank">Combined Termref</a></li>
				<li><a href="https://www.drupal.org/project/immoclient" target="_blank">OpenImmo Immoclient</a></li>
				<li><a href="https://www.drupal.org/project/content_menu" target="_blank">Content Menu</a></li>
				<li><a href="https://www.drupal.org/sandbox/biged/2007914" target="_blank">Age Verification</a></li>
				<li><a href="https://www.drupal.org/project/webform_accordion" target="_blank">Webform Accordion</a></li>
				<li><a href="https://www.drupal.org/project/webform_layout" target="_blank">Webform Layout</a></li
				<li><a href="https://www.drupal.org/project/webform_references" target="_blank">Webform References</a></li>
				<li><a href="https://www.drupal.org/project/webform_layout" target="_blank">Webform Layout</a></li>
				<li><a href="https://www.drupal.org/project/places_api_webform_autocomplete" target="_blank">Places API Webform Autocomplete</a></li>
				<li><a href="https://www.drupal.org/project/tgf" target="_blank">Taxonomy Group Fields</a></li>
				<li><a href="https://www.drupal.org/project/better_form" target="_blank">Better Form (HTML5)</a></li>
				<li><a href="https://www.drupal.org/project/elements" target="_blank">HTML5 Form Elements</a></li>
				<li><a href="https://www.drupal.org/project/field_placeholder" target="_blank">Field placeholder</a></li>
				<li><a href="https://www.drupal.org/project/In-Field-Labels" target="_blank">In Field Labels</a></li>
				<li><a href="https://www.drupal.org/project/local_storage" target="_blank">Local Storage</a></li>
				<li><a href="https://www.drupal.org/project/captcha_keypad" target="_blank">Captcha Keypad</a></li>
				<li><a href="https://www.drupal.org/project/human" target="_blank">Human Behavior</a></li>
				<li><a href="https://www.drupal.org/project/fancyselect" target="_blank">fancyselect</a></li>
				<li><a href="https://www.drupal.org/project/rcswitcher" target="_blank">rcSwitcher (Better Checkbox)</a></li>
				<li><a href="https://www.drupal.org/project/switch" target="_blank">Switcher (Checkbox iPhone-Style)</a></li>
				<li><a href="https://www.drupal.org/project/ocupload" target="_blank">One Click Upload</a></li>
				<li><a href="https://www.drupal.org/project/imagepicker" target="_blank">Image Picker (WordPress)</a></li>
				<li><a href="https://www.drupal.org/project/better_form_errors" target="_blank">Better Form Errors</a></li>
				<li><a href="https://www.drupal.org/project/visual_form_alter" target="_blank">Visual Form Alter</a></li>
				<li><a href="https://www.drupal.org/project/term_hierarchy" target="_blank">Term Hierarchy</a></li>
				<li><a href="https://www.drupal.org/project/shs" target="_blank">Simple hierarchical select</a></li>
				<li><a href="https://www.drupal.org/project/term_hierarchy" target="_blank">Term Hierarchy</a></li>
				<li><a href="https://www.drupal.org/project/radiogrid" target="_blank">RadioGrid</a></li>
				<li><a href="https://www.drupal.org/project/fgi" target="_blank">Field Group Image</a></li>
				<li><a href="https://www.drupal.org/project/gentleselect" target="_blank">Gentle Select Widget</a></li>
				<li><a href="https://www.drupal.org/project/checked" target="_blank">Checked input</a></li>
				<li><a href="https://www.drupal.org/project/formthemer" target="_blank">Form themer</a></li>
				<li><a href="https://www.drupal.org/project/entityform_null_storage" target="_blank">EntityForm Null Storage</a></li>
				<li><a href="https://www.drupal.org/project/fbip" target="_blank">Form Block IP (FBIp)</a></li>
				<li><a href="https://www.drupal.org/project/vertical_tabs_config" target="_blank">Vertical Tabs Config</a></li>
				<li><a href="https://www.drupal.org/project/vertical_tabs_responsive" target="_blank">Vertical Tabs Responsive</a></li>
				<li><a href="https://www.drupal.org/project/honeypot_entityform" target="_blank">Honeypot Entityform</a></li>
				<li><a href="https://www.drupal.org/project/markup" target="_blank">Markup (e.g. in node/edit forms)</a></li>
				<li><a href="https://www.drupal.org/project/prepopulate" target="_blank">Prepopulate</a></li>
				<li><a href="https://www.drupal.org/project/fea" target="_blank">Form Element Access (FEA)</a></li>
				<li><a href="https://www.drupal.org/project/vspfo" target="_blank">Views style plugin: Form options</a></li>
				<li><a href="https://www.drupal.org/project/no_table_drag" target="_blank">No Table Drag</a></li>
			</ul>


			<br/>
			<p><strong>Output:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/bricks" target="_blank">Bricks</a></li>
				<li><a href="https://www.drupal.org/project/boxes" target="_blank">Boxes</a></li>
				<li><a href="https://www.drupal.org/project/mini_blocks" target="_blank">Mini Blocks</a></li>
				<li><a href="https://www.drupal.org/project/element" target="_blank">Element</a></li>
				<li><a href="https://www.drupal.org/project/bean" target="_blank">Beans</a></li>
				<li><a href="/Users/tobbi/Websites/•DRUPAL/Skripte und Module/D7-Module/bean_revision" target="_blank">Beans remove revision (•DRUPAL-Ordner)</a></li>
				<li><a href="https://www.drupal.org/project/equalheights" target="_blank">Equalheights</a></li>
				<li><a href="https://www.drupal.org/project/breakpoints" target="_blank">Breakpoints</a></li>
				<li><a href="https://www.drupal.org/project/flatcomments" target="_blank">Flat Comments</a></li>
				<li><a href="https://www.drupal.org/project/fontyourface" target="_blank">Font Your Face</a></li>
				<li><a href="https://www.drupal.org/project/touch_icons" target="_blank">Apple Touch Icons</a></li>
				<li><a href="https://www.drupal.org/project/socialshareprivacy" target="_blank">Social Share Privacy</a></li>
				<li><a href="https://www.drupal.org/project/mobile_codes" target="_blank">Mobile Codes QR</a></li>
				<li><a href="https://www.drupal.org/project/ccl" target="_blank">Custom Contextual Links</a></li>
				<li><a href="https://www.drupal.org/project/page_throbber" target="_blank">Page Throbber</a></li>
				<li><a href="https://www.drupal.org/project/exclude_node_title" target="_blank">Exclude Node Title</a></li>
				<li><a href="https://www.drupal.org/project/hurricane" target="_blank">Hurricane Throbber</a></li>
				<li><a href="https://www.drupal.org/project/stringoverrides" target="_blank">String Overrides</a></li>
				<li><a href="https://www.drupal.org/project/ajax_links_api" target="_blank">Ajaxify Drupal</a></li>
				<li><a href="https://www.drupal.org/project/jquery_ajax_load" target="_blank">jQuery AJAX Load</a></li>
				<li><a href="https://www.drupal.org/project/content_callback" target="_blank">Content callback</a></li>
				<li><a href="https://www.drupal.org/project/layouter" target="_blank">Layouter - WYSIWYG layout templates</a></li>
				<li><a href="https://www.drupal.org/project/no_term_pages" target="_blank">No term pages (Taxonomy)</a></li>
				<li><a href="https://www.drupal.org/project/simpleads" target="_blank">SimpleAds</a></li>
				<li><a href="https://www.drupal.org/project/themekey" target="_blank">ThemeKey</a></li>
				<li><a href="https://www.drupal.org/project/domain_themekey" target="_blank">Domain ThemeKey</a></li>
				<li><a href="https://www.drupal.org/project/domain_menu_overview" target="_blank">Domain menu overview</a></li>
				<li><a href="https://www.drupal.org/project/attachment_links" target="_blank">Attachment Links</a></li>
				<li><a href="https://www.drupal.org/project/trimmed_popup_formatter" target="_blank">Trimmed Popup Formatter</a></li>
				<li><a href="https://www.drupal.org/project/dividize" target="_blank">Dividize - Converting table to DIV</a></li>
				<li><a href="https://www.drupal.org/project/notification_bar" target="_blank">Notification Bar</a></li>
				<li><a href="https://www.drupal.org/project/ouibounce_exit_modal" target="_blank">Ouibounce Exit Modal</a></li>
				<li><a href="https://www.drupal.org/project/html_title_trash" target="_blank">HTML Title Trash</a></li>
				<li><a href="https://www.drupal.org/project/slick" target="_blank">Slick Carousel</a></li>
				<li><a href="https://www.drupal.org/project/exposebox" target="_blank">Expose Box (Collapsible Box)</a></li>
				<li><a href="https://www.drupal.org/project/collapse_text" target="_blank">Collapse Text</a></li>
				<li><a href="https://www.drupal.org/project/menu_item_attach" target="_blank">Menu Item Attach</a></li>
				<li><a href="https://www.drupal.org/project/minimal_share" target="_blank">Minimal Share</a></li>
				<li><a href="https://www.drupal.org/project/simple_word_link" target="_blank">Simple Word Link</a></li>
				<li><a href="https://www.drupal.org/project/turnjs_magazines" target="_blank">Turn.js Magazines (Flip-Magazine)</a></li>
				<li><a href="https://www.drupal.org/project/autodialog" target="_blank">Auto-Dialog (Pop Up)</a></li>
				<li><a href="https://www.drupal.org/project/node_subpages" target="_blank">Node Subpages</a></li>
				<li><a href="https://www.drupal.org/project/icon" target="_blank">Icon API</a></li>
				<li><a href="https://www.drupal.org/project/submenutree" target="_blank">Submenu Tree</a></li>
			</ul>


			<br/>
			<p><strong>Blocks:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/quicktabs_xt" target="_blank">Quicktabs XT</a></li>
				<li><a href="https://www.drupal.org/project/blocks_per_menu" target="_blank">Blocks per menu</a></li>
				<li><a href="https://www.drupal.org/project/comment_block" target="_blank">Comments as Block</a></li>
				<li><a href="https://www.drupal.org/project/menu_attach_block" target="_blank">Menu Attach Block</a></li>
				<li><a href="https://www.drupal.org/project/menu_block" target="_blank">Menu block</a></li>
				<li><a href="https://www.drupal.org/project/logic_block" target="_blank">Logic block</a></li>
				<li><a href="https://www.drupal.org/project/block_display_control" target="_blank">Block display duration (in days)</a></li>
				<li><a href="https://www.drupal.org/project/block_date" target="_blank">Block by date</a></li>
				<li><a href="https://www.drupal.org/project/ajaxblocks" target="_blank">Ajax Blocks</a></li>
				<li><a href="https://www.drupal.org/project/blocks_by_page_path" target="_blank">Blocks By Page Path</a></li>
				<li><a href="https://www.drupal.org/project/block_attributes" target="_blank">Block Attributes</a></li>
				<li><a href="https://www.drupal.org/project/block_class" target="_blank">Block Class</a></li>
				<li><a href="https://www.drupal.org/project/block_class_styles" target="_blank">Block Class Styles</a></li>
				<li><a href="https://www.drupal.org/project/blocktheme" target="_blank">Block Theme</a></li>
				<li><a href="https://www.drupal.org/project/fieldblock" target="_blank">Field as Block</a></li>
				<li><a href="https://www.drupal.org/project/closeblock" target="_blank">Close Block</a></li>
				<li><a href="https://www.drupal.org/project/block_upload" target="_blank">Block Upload</a></li>
				<li><a href="https://www.drupal.org/project/bud" target="_blank">Block Up Down</a></li>
				<li><a href="https://www.drupal.org/project/floating_block" target="_blank">Floating block</a></li>
				<li><a href="https://www.drupal.org/project/simple_nodeblock" target="_blank">Simple nodeblock</a></li>
				<li><a href="https://www.drupal.org/project/node_level_blocks" target="_blank">Node-level Blocks</a></li>
				<li><a href="https://www.drupal.org/project/blockreference" target="_blank">Block reference</a></li>
				<li><a href="https://www.drupal.org/project/block_term" target="_blank">Block Visibility by Term</a></li>
				<li><a href="https://www.drupal.org/project/block_filter" target="_blank">Block Filter</a></li>
				<li><a href="https://www.drupal.org/project/eba" target="_blank">EBA: Entity Block Attachment</a></li>
				<li><a href="https://www.drupal.org/project/views_block_area" target="_blank">Views block area</a></li>
				<li><a href="https://www.drupal.org/project/similar" target="_blank">Similar Entries</a></li>
				<li><a href="https://www.drupal.org/project/featured_content" target="_blank">Featured Content</a></li>
			</ul>
			
			

			<br/>
			<p><strong>Mobile:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/footable" target="_blank">FooTable</a></li>
				<li><a href="https://www.drupal.org/project/table_trash" target="_blank">Table Trash</a></li>
				<li><a href="https://www.drupal.org/project/thumbnav" target="_blank">Thumbnav</a></li>
				<li><a href="https://www.drupal.org/project/quojs" target="_blank">Quo.js Gesture Detection</a></li>
				<li><a href="https://www.drupal.org/project/me" target="_blank">me aliases</a></li>
				<li><a href="https://www.drupal.org/project/admin_menu_navbar" target="_blank">Admin Menu Navbar</a></li>
				<li><a href="https://www.drupal.org/project/views_mobile" target="_blank">Views Mobile</a></li>
				<li><a href="https://www.drupal.org/project/zen_mobile_menu" target="_blank">Zen Mobile Menu</a></li>
				<li><a href="https://www.drupal.org/project/field_group_easy_responsive_tabs" target="_blank">Field Group: Easy Responsive Tabs to Accordion</a></li>
				<li><a href="https://www.drupal.org/project/mmenu" target="_blank">Mobile sliding menu</a></li>
				<li><a href="https://www.drupal.org/project/zurb_responsive_tables" target="_blank">Zurb Responsive Tables</a></li>
				<li><a href="https://www.drupal.org/project/footable" target="_blank">FooTable</a></li>
				<li><a href="https://www.drupal.org/project/date_popup_mobile" target="_blank">Date Popup Mobile</a></li>
				<li><a href="https://www.drupal.org/project/colorbox_swipe" target="_blank">Colorbox Swipe Gestures Support</a></li>
			</ul>


			<br/>
			<p><strong>Users and Permissions:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/menu_admin_per_menu" target="_blank">Menu Admin per Menu</a></li>
				<li><a href="https://www.drupal.org/project/admin_menu_source" target="_blank">Admin Menu Source</a></li>
				<li><a href="https://www.drupal.org/project/custom_menu_perms" target="_blank">Custom Menu Permissions</a></li>
				<li><a href="https://www.drupal.org/project/block_access" target="_blank">Block Access</a></li>
				<li><a href="https://www.drupal.org/project/abt" target="_blank">Access By Term</a></li>
				<li><a href="https://www.drupal.org/project/felix" target="_blank">Felix Block Access</a></li>
				<li><a href="https://www.drupal.org/project/shortcutperrole" target="_blank">Shortcut per Role</a></li>
				<li><a href="https://www.drupal.org/project/required_by_role" target="_blank">Required by role</a></li>
				<li><a href="https://www.drupal.org/project/eu_cookie_compliance" target="_blank">EU Cookie Compliance</a></li>
				<li><a href="https://www.drupal.org/project/divascookies" target="_blank">Divas Cookies</a></li>
				<li><a href="https://www.drupal.org/project/cookiecontrol" target="_blank">Cookie Control</a></li>
				<li><a href="https://www.drupal.org/project/cookiecuttr" target="_blank">CookieCuttr</a></li>
				<li><a href="https://www.drupal.org/project/content_tab" target="_blank">Content Tab</a></li>
				<li><a href="https://www.drupal.org/project/session_cookie_lifetime" target="_blank">Session cookie lifetime</a></li>
				<li><a href="https://www.drupal.org/project/passwordless" target="_blank">Passwordless</a></li>
				<li><a href="https://www.drupal.org/project/rpt" target="_blank">Registration Password Token</a></li>
				<li><a href="https://www.drupal.org/project/email_registration" target="_blank">Email Registration</a></li>
				<li><a href="https://www.drupal.org/project/feedback_reloaded" target="_blank">Feedback Reloaded</a></li>
				<li><a href="https://www.drupal.org/project/feedback_collect" target="_blank">Feedback Collect</a></li>
				<li><a href="https://www.drupal.org/project/save_draft" target="_blank">Save Draft</a></li>
				<li><a href="https://www.drupal.org/project/publishcontent" target="_blank">Publish Content</a></li>
				<li><a href="https://www.drupal.org/project/override_node_options" target="_blank">Override Node Options</a></li>
				<li><a href="https://www.drupal.org/project/password_reset_help" target="_blank">Password Reset Help</a></li>
				<li><a href="https://www.drupal.org/project/disable_field" target="_blank">Disable Field</a></li>
				<li><a href="https://www.drupal.org/project/permissions_helper" target="_blank">Permissions Helper (Show Machine Name)</a></li>
				<li><a href="https://www.drupal.org/project/soauth" target="_blank">Social Authorization</a></li>
				<li><a href="https://www.drupal.org/project/hybridauth" target="_blank">HybridAuth Social Login</a></li>
				<li><a href="https://www.drupal.org/project/xing_connect" target="_blank">Xing Connect</a></li>
				<li><a href="https://www.drupal.org/project/content_login" target="_blank">Content Login</a></li>
				<li><a href="https://www.drupal.org/project/redirect_after_logout" target="_blank">Redirect after logout</a></li>
				<li><a href="https://www.drupal.org/project/multiple_registration" target="_blank">Multiple Registration</a></li>
				<li><a href="https://www.drupal.org/project/user_picture_initials" target="_blank">User Picture Initials</a></li>
				<li><a href="https://www.drupal.org/project/email_login" target="_blank">Role based Email Login</a></li>
				<li><a href="https://www.drupal.org/project/drop_down_login" target="_blank">Drop Down Login</a></li>
				<li><a href="https://www.drupal.org/project/entity_legal" target="_blank">Entity Legal</a></li>
				<li><a href="https://www.drupal.org/project/roles_for_menu" target="_blank">Roles for menu</a></li>
				<li><a href="https://www.drupal.org/project/jeap" target="_blank">Just Enough Administrator Power</a></li>
				<li><a href="https://www.drupal.org/project/administrative_help" target="_blank">Administrative Help</a></li>
				<li><a href="https://www.drupal.org/project/sso_multi_domain" target="_blank">Single Sign On Multiple Domain</a></li>
				<li><a href="https://www.drupal.org/project/password_policy" target="_blank">Password Policy</a></li>
				<li><a href="https://www.drupal.org/project/internal_nodes" target="_blank">Internal Nodes</a></li>
				<li><a href="https://www.drupal.org/project/change_pwd_page" target="_blank">Password Separate Form</a></li>
				<li><a href="https://www.drupal.org/project/email_confirm" target="_blank">Email Change Confirmation</a></li>
				<li><a href="https://www.drupal.org/project/email_field_confirm" target="_blank">Email Field Confirm</a></li>
				<li><a href="https://www.drupal.org/project/auto_login_url_tokens" target="_blank">Auto Login URL Tokens</a></li>
				<li><a href="https://www.drupal.org/project/urllogin" target="_blank">urllogin</a></li>
				<li><a href="https://www.drupal.org/project/auto_login_url" target="_blank">Auto Login URL</a></li>
				<li><a href="https://www.drupal.org/project/login_one_time" target="_blank">Login one time</a></li>
				<li><a href="https://www.drupal.org/project/gplus_sync" target="_blank">Google+ synchronization (Login)</a></li>
				<li><a href="https://www.drupal.org/project/registration_invite" target="_blank">Registration invite</a></li>
				<li><a href="https://www.drupal.org/project/invite" target="_blank">Invite</a></li>
				<li><a href="https://www.drupal.org/project/registration" target="_blank">registration</a></li>
				<li><a href="https://www.drupal.org/project/regcode_simple" target="_blank">Registration code (simple)</a></li>
				<li><a href="https://www.drupal.org/project/access_code" target="_blank">Access Code</a></li>
				<li><a href="https://www.drupal.org/project/access_unpublished" target="_blank">Access Unpublished</a></li>
				<li><a href="https://www.drupal.org/project/rename_admin_paths" target="_blank">Rename Admin Paths</a></li>
				<li><a href="https://www.drupal.org/project/vppr" target="_blank">Vocabulary Permissions Per Role</a></li>
				<li><a href="https://www.drupal.org/project/user_role_field" target="_blank">User role field</a></li>
				<li><a href="https://www.drupal.org/project/join_role_with_password" target="_blank">Join role with password</a></li>
				<li><a href="https://www.drupal.org/project/regcode" target="_blank">Registration codes</a></li>
				<li><a href="https://www.drupal.org/project/cas" target="_blank">CAS (Central Authentication Service)</a></li>
				<li><a href="https://www.drupal.org/project/mailcontrol" target="_blank">Mailcontrol</a></li>
				<li><a href="https://www.drupal.org/project/required_by_role" target="_blank">(Field) Required by role</a></li>
				<li><a href="https://www.drupal.org/project/user_settings_access" target="_blank">User Settings Access</a></li>
				<li><a href="https://www.drupal.org/project/roleassign" target="_blank">Role Assign (Permission)</a></li> 
			</ul>

			<br/>
			<p><strong>Functions:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/pathologic" target="_blank">Pathologic</a></li>
				<li><a href="https://www.drupal.org/project/path_corrector" target="_blank">Path Corrector</a></li>
				<li><a href="https://www.drupal.org/project/intlinks" target="_blank">Internal Links</a></li>
				<li><a href="https://www.drupal.org/project/login_redirect" target="_blank">Login Redirect</a></li>
				<li><a href="https://www.drupal.org/project/genpass" target="_blank">Password Generator</a></li>
				<li><a href="https://www.drupal.org/project/user_alert" target="_blank">User Alert</a></li>
				<li><a href="https://www.drupal.org/project/logic_block" target="_blank">Logic Block</a></li>
				<li><a href="https://www.drupal.org/project/flag_expire" target="_blank">Flag expire</a></li>
				<li><a href="https://www.drupal.org/project/conditional_flags" target="_blank">Conditional Flags</a></li>
				<li><a href="https://www.drupal.org/project/context_get" target="_blank">Context Get</a></li>
				<li><a href="https://www.drupal.org/project/pdf_archive" target="_blank">PDF Archive</a></li>
				<li><a href="https://www.drupal.org/project/searchsynonyms" target="_blank">Search synonyms (Taxonomy)</a></li>
				<li><a href="https://www.drupal.org/project/util" target="_blank">Util</a></li>
				<li><a href="https://www.drupal.org/project/content_type_extras" target="_blank">Content Type Extras</a></li>
				<li><a href="https://www.drupal.org/project/owncloud" target="_blank">ownCloud Integration</a></li>
				<li><a href="https://www.drupal.org/project/flush_facebook_cache" target="_blank">Flush Facebook Cache</a></li>
				<li><a href="https://www.drupal.org/project/inside_iframe" target="_blank">Inside IFrame</a></li>
				<li><a href="https://www.drupal.org/project/waypoints_ui" target="_blank">Waypoints UI</a></li>
				<li><a href="https://www.drupal.org/project/simplenews_status_reset" target="_blank">Simplenews Status Reset</a></li>
				<li><a href="https://www.drupal.org/project/utm_source" target="_blank">utm filter (Simplenews Google Analytics)</a></li>
				<li><a href="https://www.drupal.org/project/fancy_file_delete" target="_blank">Fancy File Delete</a></li>
				<li><a href="https://www.drupal.org/project/organize_files" target="_blank">Organize Files</a></li>
				<li><a href="https://www.drupal.org/project/selective_tweets" target="_blank">Selective Tweets</a></li>
				<li><a href="https://www.drupal.org/project/jquery_oembed_all" target="_blank">jQuery oEmbed All (embed Tweets, Facebook posts)</a></li>
				<li><a href="https://www.drupal.org/project/device_detector" target="_blank">Device Detector</a></li>
				<li><a href="https://www.drupal.org/project/inline_styles_cleaner" target="_blank">Inline Styles Cleaner</a></li>
				<li><a href="https://www.drupal.org/project/ajax_throbber" target="_blank">Ajax throbber</a></li>
				<li><a href="https://www.drupal.org/project/prevnext" target="_blank">Prevnext</a></li>
				<li><a href="https://www.drupal.org/project/piwik_noscript" target="_blank">Piwik noscript</a></li>
				<li><a href="http://rodi.sk/misc/piwik-scroll-depth/" target="_blank">Piwik Scroll Depth</a></li>
				<li><a href="https://www.drupal.org/project/url_alias_restriction" target="_blank">URL alias restriction</a></li>
				<li><a href="https://www.drupal.org/project/comment_stats" target="_blank">Comment Stats</a></li>
				<li><a href="https://www.drupal.org/project/update_extended" target="_blank">Update Extended</a></li>
				<li><a href="https://www.drupal.org/project/protocol_relative_urls" target="_blank">Protocol Relative URLs</a></li>
				<li><a href="https://www.drupal.org/project/colorized_gmap" target="_blank">Colorized google maps block</a></li>
				<li><a href="https://www.drupal.org/project/entityform_email_confirmation" target="_blank">Entityform E-Mail Confirmation</a></li>
				<li><a href="https://www.drupal.org/project/update_external_links" target="_blank">Update External Links</a></li>
				<li><a href="https://www.drupal.org/project/gp" target="_blank">Google Places for Drupal</a></li>
				<li><a href="https://www.drupal.org/project/gmap_static" target="_blank">Google Map Static</a></li>
				<li><a href="https://www.drupal.org/project/votingapi_bayesian" target="_blank">VotingAPI Bayesian (Fivestar)</a></li>
				<li><a href="https://www.drupal.org/project/ajax_screen_lock" target="_blank">AJAX Screen Lock</a></li>
				<li><a href="https://www.drupal.org/project/publish_away" target="_blank">Publish Away Field (Facebook & Twitter)</a></li>
				<li><a href="https://www.drupal.org/project/backup_migrate_prune" target="_blank">Backup and migrate prune</a></li>
				<li><a href="https://www.drupal.org/project/fancy_file_delete" target="_blank">Fancy File Delete</a></li>
				<li><a href="https://www.drupal.org/project/drupal_sync" target="_blank">Drupal Sync</a></li>
				<li><a href="https://www.drupal.org/project/getlocations" target="_blank">Get Locations</a></li>
				<li><a href="https://www.drupal.org/project/token_request_params" target="_blank">Tokenize Request Parameters</a></li>
				<li><a href="https://www.drupal.org/project/subpathauto" target="_blank">Sub-pathauto (Sub-path URL Aliases)</a></li>
				<li><a href="https://www.drupal.org/project/path_alias_xt" target="_blank">Extended Path Aliases</a></li>
				<li><a href="https://www.drupal.org/project/cpn" target="_blank">Code per Node</a></li>
				<li><a href="https://www.drupal.org/project/inline_css_checker" target="_blank">Inline CSS Checker</a></li>
				<li><a href="https://www.drupal.org/project/jquery_stickem" target="_blank">jQuery Stick 'em</a></li>
			</ul>
			<br/>
			<p><strong>Entities:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/registration" target="_blank">Entity Registration</a></li>
				<li><a href="https://www.drupal.org/project/eck" target="_blank">Entity Construction Kit (ECK)</a></li>
				<li><a href="https://www.drupal.org/project/fe_paths" target="_blank">File Entity Path</a></li>
				<li><a href="https://www.drupal.org/project/file_entity_inline" target="_blank">File Entity Inline</a></li>
				<li><a href="https://www.drupal.org/project/cer" target="_blank">Corresponding Entity References</a></li>
				<li><a href="https://www.drupal.org/project/rabbit_hole" target="_blank">Rabbit Hole (Disable Entity Page View)</a></li>
				<li><a href="https://www.drupal.org/project/entityreference_embed_widget" target="_blank">Entity Reference Embed Widget</a></li>
				<li><a href="https://www.drupal.org/project/relation" target="_blank">Relation</a></li>
				<li><a href="https://www.drupal.org/project/modal_entities" target="_blank">Modal Entities</a></li>
				<li><a href="https://www.drupal.org/project/entity_view_mode_selector" target="_blank">Entity view mode selector</a></li>
				<li><a href="https://www.drupal.org/sandbox/nijk/2312801" target="_blank">View Mode Switch</a></li>
				<li><a href="https://www.drupal.org/project/view_mode_selector" target="_blank">View Mode Selector</a></li>
				<li><a href="https://www.drupal.org/project/contextual_view_modes" target="_blank">Contextual View Modes</a></li>
				<li><a href="https://www.drupal.org/project/inline_entity_display" target="_blank">Inline Entity Display</a></li>
				<li><a href="https://www.drupal.org/project/inline_entity_form_preview" target="_blank">Inline Entity Form Preview</a></li>
				<li><a href="https://www.drupal.org/project/entity_popup" target="_blank">Entity popup</a></li>
				<li><a href="https://www.drupal.org/project/bundle_clone" target="_blank">Bundle Clone</a></li>
				<li><a href="https://www.drupal.org/project/bundle_copy" target="_blank">Bundle Copy</a></li>
				<li><a href="https://www.drupal.org/project/entity_view_mode" target="_blank">Entity view modes</a></li>
				<li><a href="https://www.drupal.org/project/entity_display_field" target="_blank">Entity Display Field</a></li>
				<li><a href="https://www.drupal.org/project/entity_formatter" target="_blank">Entity Formatter</a></li>
				<li><a href="https://www.drupal.org/project/entityqueue" target="_blank">Entityqueue</a></li>
				<li><a href="https://www.drupal.org/project/aet" target="_blank">Advanced Entity Tokens</a></li>
			</ul>
			<p><strong>Fields:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/filefield_paths" target="_blank">FileField-Path</a></li>
				<li><a href="https://www.drupal.org/project/arrange_fields" target="_blank">Arrange Fields</a></li>
				<li><a href="https://www.drupal.org/project/collapser" target="_blank">Fieldset collapser</a></li>
				<li><a href="https://www.drupal.org/project/extended_file_field" target="_blank">Extended File Field</a></li>
				<li><a href="https://www.drupal.org/project/textformatter" target="_blank">Text- und List-Field-Formatter</a></li>
				<li><a href="https://www.drupal.org/project/conditional_fields" target="_blank">Conditional Fields</a></li>
				<li><a href="https://www.drupal.org/project/field_formatter_css_class" target="_blank">Field Formatter CSS Class</a></li>
				<li><a href="https://www.drupal.org/project/formatter_field" target="_blank">Formatter Field</a></li>
				<li><a href="https://www.drupal.org/project/field_jquery_tabs" target="_blank">jQuery Tabs Field</a></li>
				<li><a href="https://www.drupal.org/project/field_multiple_limit" target="_blank">Field multiple limit</a></li>
				<li><a href="https://www.drupal.org/project/ffc" target="_blank">Field formatter conditions</a></li>
				<li><a href="https://www.drupal.org/project/field_formatter_filter" target="_blank">Field Formatter Filter</a></li>
				<li><a href="https://www.drupal.org/project/field_formatter_class" target="_blank">Field Formatter Class</a></li>
				<li><a href="https://www.drupal.org/project/advanced_text_formatter" target="_blank">Advanced Text Formatter</a></li>
				<li><a href="https://www.drupal.org/sandbox/jpstrikesback/1860740" target="_blank">Field Injector QueryPath</a></li>
				<li><a href="https://www.drupal.org/project/linked_field" target="_blank">Linked Field</a></li>
				<li><a href="https://www.drupal.org/project/link" target="_blank">Link Field</a></li>
				<li><a href="https://www.drupal.org/project/iframe" target="_blank">iframe</a></li>
				<li><a href="https://www.drupal.org/project/field_delimiter" target="_blank">Field Delimiter</a></li>
				<li><a href="https://www.drupal.org/project/fieldscheduler" target="_blank">Fieldscheduler</a></li>
				<li><a href="https://www.drupal.org/project/semantic_fields" target="_blank">Semantic Fields</a></li>
				<li><a href="https://www.drupal.org/project/field_sql_norevisions" target="_blank">Field SQL NoRevisions</a></li>
				<li><a href="https://www.drupal.org/project/double_field" target="_blank">Double field</a></li>
				<li><a href="https://www.drupal.org/project/multiple_value_widget" target="_blank">Multiple Value Widget</a></li>
				<li><a href="https://www.drupal.org/project/multiupload_filefield_widget" target="_blank">Multiupload Filefield Widget</a></li>
				<li><a href="https://www.drupal.org/project/multiupload_imagefield_widget" target="_blank">One Click Upload</a></li>
				<li><a href="https://www.drupal.org/project/ocupload" target="_blank">Multiupload Imagefield Widget</a></li>
				<li><a href="https://www.drupal.org/project/nice_imagefield_widget" target="_blank">Nice ImageField Widget</a></li>
				<li><a href="https://www.drupal.org/project/upload_replace" target="_blank">Upload File Replace (for filefield CCK)</a></li>
				<li><a href="https://www.drupal.org/project/field_group_easy_responsive_tabs" target="_blank">Field Group Responsive Tabs</a></li>
				<li><a href="https://www.drupal.org/project/entityreference_view_widget" target="_blank">Entity Reference View Widget</a></li>
				<li><a href="https://www.drupal.org/project/entityreference_rendered_widget" target="_blank">Entityreference Rendered Widget</a></li>	
				<li><a href="https://www.drupal.org/project/reference_option_limit" target="_blank">Reference field option limit</a></li>
				<li><a href="https://www.drupal.org/project/field_validation" target="_blank">Field validation</a></li>
				<li><a href="https://www.drupal.org/project/multifield" target="_blank">Multifield (vgl. field collection)</a></li>
				<li><a href="https://www.drupal.org/project/field_collection_tabs" target="_blank">Field Collection Tab formatter</a>(<a href="https://www.drupal.org/node/2170195#comment-9276735" target="_blank">responsive</a>)</li>
				<li><a href="https://www.drupal.org/project/field_jquery_tabs" target="_blank">jQuery Tabs Field</a></li>
				<li><a href="https://www.drupal.org/project/skyfield" target="_blank">Sky Field - unique custom fields</a></li>
				<li><a href="https://www.drupal.org/project/css_field_formatters" target="_blank">CSS Field Formatters</a></li>
				<li><a href="https://www.drupal.org/project/field_formatter_css_class" target="_blank">Field Formatter CSS Class</a></li>
				<li><a href="https://www.drupal.org/project/serial" target="_blank">Serial Field</a></li>
				<li><a href="https://www.drupal.org/project/auto_tagging_suggestions" target="_blank">Auto tagging suggestions</a></li>
				<li><a href="https://www.drupal.org/project/file_dropzone" target="_blank">File Dropzone</a></li>
				<li><a href="https://www.drupal.org/project/file_chooser_field" target="_blank">File Chooser Field</a></li>
				<li><a href="https://www.drupal.org/project/wysiwyg_fields" target="_blank">Wysiwyg Fields</a></li>
				<li><a href="https://www.drupal.org/project/audiofield_audiojs" target="_blank">audio.js for Audiofield</a></li>
				<li><a href="https://www.drupal.org/project/embeddedviewfield" target="_blank">EmbeddedViewField</a></li>
				<li><a href="https://www.drupal.org/project/node_field_embed" target="_blank">Node Field Embed (for Nodes)</a></li>
				<li><a href="https://www.drupal.org/project/field_tokens" target="_blank">Field tokens</a></li>
				<li><a href="https://www.drupal.org/project/field_sections" target="_blank">Field Sections (Double Field Title + Text)</a></li>
				<li><a href="https://www.drupal.org/project/advanced_text_formatter" target="_blank">Advanced Text Formatter</a></li>
				<li><a href="https://www.drupal.org/project/date_fields" target="_blank">Date Fields</a></li>
				<li><a href="https://www.drupal.org/project/date_popup_timepicker" target="_blank">Date Popup Timepicker</a></li>
				<li><a href="https://www.drupal.org/project/date_multiselect" target="_blank">Date Multiselect</a></li>
				<li><a href="https://www.drupal.org/project/funky_date" target="_blank">Funky Date</a></li>
				<li><a href="https://www.drupal.org/project/date_ical" target="_blank">Date iCal</a></li>
				<li><a href="https://www.drupal.org/project/weekdays" target="_blank">Weekdays field (Date restrictions)</a></li>
				<li><a href="https://www.drupal.org/project/addtocal" target="_blank">Add to Cal</a></li>
				<li><a href="https://www.drupal.org/project/file_field_icons" target="_blank">File Field Icons</a></li>
				<li><a href="https://www.drupal.org/project/field_lock_multi_values" target="_blank">Field lock multi values</a></li>
				<li><a href="https://www.drupal.org/project/iban_field" target="_blank">Webform IBAN Field</a></li>
				<li><a href="https://www.drupal.org/project/field_readonly" target="_blank">Field Readonly</a></li>
				<li><a href="https://www.drupal.org/project/views_field_formatter" target="_blank">Views field formatter</a></li>
				<li><a href="https://www.drupal.org/project/file_resup" target="_blank">File Resumable Upload</a></li>
				<li><a href="https://www.drupal.org/project/field_count_formatter" target="_blank">Field Count Formatter</a></li>
				<li><a href="https://www.drupal.org/project/aggregated_field" target="_blank">Aggregated Field</a></li>
				<li><a href="https://www.drupal.org/project/file_image_formatters" target="_blank">File Image formatters</a></li>
				<li><a href="https://www.drupal.org/project/field_instance_sync" target="_blank">Field Instance Sync</a></li>
				<li><a href="https://www.drupal.org/project/advanced_text_formatter" target="_blank">Advanced Text Formatter</a></li>
				<li><a href="https://www.drupal.org/project/field_concat_display" target="_blank">Field Concat Display</a></li>
				<li><a href="https://www.drupal.org/project/filelist_formatter" target="_blank">File list formatter</a></li>
				<li><a href="https://www.drupal.org/project/simple_field_formatter" target="_blank">Simple Field Formatter</a></li>
				<li><a href="https://www.drupal.org/project/custom_formatters" target="_blank">Custom Formatters</a></li>
				<li><a href="https://www.drupal.org/sandbox/xandeadx/2128035" target="_blank">Address Field Extra</a></li>
				<li><a href="https://www.drupal.org/project/node_display_fields" target="_blank">Node Display Fields</a></li>
				<li><a href="https://www.drupal.org/project/field_tools" target="_blank">Field Tools</a></li>
				<li><a href="https://www.drupal.org/project/field_formatter_value_link" target="_blank">Field Value Link Formatter</a></li>
				<li><a href="https://www.drupal.org/project/sliderfield" target="_blank">SliderField</a></li>
				<li><a href="https://www.drupal.org/project/colorbox_field_formatter" target="_blank">Colorbox field formatter (for Text etc.)</a></li>
				<li><a href="https://www.drupal.org/project/video_embed_local" target="_blank">Video embed local</a></li>
				<li><a href="https://www.drupal.org/project/fitvids" target="_blank">FitVids (responsive Video)</a></li>
	
			</ul>

			<p><strong>Views:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/masonry" target="_blank">Masonry (Views and Fields vertical float)</a></li>
				<li><a href="https://www.drupal.org/project/views_field_view" target="_blank">Views Field View</a></li>
				<li><a href="https://www.drupal.org/project/views_ajax_fade" target="_blank">Views Ajax Fade</a></li>
				<li><a href="https://www.drupal.org/project/menu_views" target="_blank">Menu Views</a></li>
				<li><a href="https://www.drupal.org/project/views_quicksand" target="_blank">Views Quicksand</a></li>
				<li><a href="https://www.drupal.org/project/views_show_more" target="_blank">Views Show More</a></li>
				<li><a href="https://www.drupal.org/project/views_infinite_scroll" target="_blank">Views Infinite Scroll</a></li>
				<li><a href="https://www.drupal.org/project/views_load_more" target="_blank">Views Load More</a></li>
				<li><a href="https://www.drupal.org/project/views_grouped_table" target="_blank">Views Grouped Table</a></li>
				<li><a href="https://www.drupal.org/project/views_fields_combine" target="_blank">Views fields combine</a></li>
				<li><a href="https://www.drupal.org/project/viewsdisplaytabs" target="_blank">Views Display Tabs</a></li>
				<li><a href="https://www.drupal.org/project/vhfnioo" target="_blank">Multiple numeric filter for Views</a></li>
				<li><a href="https://www.drupal.org/project/views_list_effect" target="_blank">Views list effect</a></li>
				<li><a href="https://www.drupal.org/project/views_tabs_field" target="_blank">Views Tabs Field</a></li>
				<li><a href="https://www.drupal.org/project/views_photo_grid" target="_blank">Views Photo Grid</a></li>
				<li><a href="https://www.drupal.org/project/views_lazy_load" target="_blank">Views Lazy Load</a></li>
				<li><a href="https://www.drupal.org/project/views_css_tables" target="_blank">Views CSS Tables</a></li>
				<li><a href="https://www.drupal.org/project/views_ctools_dropbutton" target="_blank">Views Ctools Dropbutton</a></li>
				<li><a href="https://www.drupal.org/project/views_ef_fieldset" target="_blank">Views Exposed Form Fieldset</a></li>
				<li><a href="https://www.drupal.org/project/vefl" target="_blank">Views exposed form layout</a></li>
				<li><a href="https://www.drupal.org/project/views_parity_row" target="_blank">Views Parity Row</a></li>
				<li><a href="https://www.drupal.org/project/views_fast_forward" target="_blank">Views Fast Forward</a></li>
				<li><a href="https://www.drupal.org/project/views_slug_title" target="_blank">Views slug title</a></li>
				<li><a href="https://www.drupal.org/project/mixitup_views" target="_blank">MixItUp Views</a></li>
				<li><a href="https://www.drupal.org/project/views_get_parameter" target="_blank">Views Get Parameter</a></li>
				<li><a href="https://www.drupal.org/project/views_fast_field" target="_blank">Views Fast Field</a></li>
				<li><a href="https://www.drupal.org/project/booleancheckboxformatter" target="_blank">Boolean Checkbox Formatter</a></li>
				<li><a href="https://www.drupal.org/project/query_parameters_to_url" target="_blank">Query Parameters To URL</a></li>
				<li><a href="https://www.drupal.org/project/views_toggle_filter" target="_blank">Views Toggle Filter</a></li>
				<li><a href="https://www.drupal.org/project/views_evi" target="_blank">Views EVI (Exposed Value Injector)</a></li>
				<li><a href="https://www.drupal.org/project/views_negate" target="_blank">Views Negate</a></li>
				<li><a href="https://www.drupal.org/project/views_contextual_filters_or" target="_blank">Views Contextual Filters OR</a></li>
				<li><a href="https://www.drupal.org/project/filter_harmonizer" target="_blank">Views Filter Harmonizer (exposed vs context)</a></li>
				<li><a href="https://www.drupal.org/project/views_field_tooltip" target="_blank">Views Field Tooltip</a></li>
				<li><a href="https://www.drupal.org/project/menu_views" target="_blank">Menu Views</a></li>
				<li><a href="https://www.drupal.org/project/concat_field" target="_blank">Concat Field (Search Views exposed filter over several fields)</a></li>
				<li><a href="https://www.drupal.org/project/views_dependent_filters" target="_blank">Views Dependent Filters</a></li>
				<li><a href="https://www.drupal.org/project/views_grouped_table" target="_blank">Views Grouped Table (Group by reference)</a></li>
				<li><a href="https://www.drupal.org/project/views_aggregator" target="_blank">Views Aggregator Plus</a></li>
				<li><a href="https://www.drupal.org/project/views_ifempty" target="_blank">Views If Empty</a></li>
				<li><a href="https://www.drupal.org/project/views_dynamic_fields" target="_blank">Views Dynamic Fields</a></li>
				<li><a href="https://www.drupal.org/project/views_selective_filters" target="_blank">Views Selective Filters</a></li>
				<li><a href="https://www.drupal.org/project/views_filterfield" target="_blank">Views Filter Field</a></li>
				<li><a href="https://www.drupal.org/project/views_system" target="_blank">Views System</a></li>
				<li><a href="https://www.drupal.org/project/views_send" target="_blank">Views Send</a></li>
				<li><a href="https://www.drupal.org/project/views_conditional" target="_blank">Views Conditional</a></li>
				<li><a href="https://www.drupal.org/project/views_ui_basic" target="_blank">Views UI: Edit Basic Settings</a></li>
			</ul>
			
			<br/>
			<p><strong>Rules:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/rules_link" target="_blank">Rules Link</a></li>
				<li><a href="https://www.drupal.org/project/rules_conditional" target="_blank">Conditional Rules</a></li>
				<li><a href="https://www.drupal.org/project/rules_url_argument" target="_blank">Rules URL Argument</a></li>
				<li><a href="https://www.drupal.org/project/field_rules" target="_blank">Field Rules</a></li>
				<li><a href="https://www.drupal.org/project/views_rules" target="_blank">Views Rules</a></li>
				<li><a href="https://www.drupal.org/project/ultimate_cron_rules" target="_blank">Ultimate Cron Rules</a></li>
				<li><a href="https://www.drupal.org/project/rules_cookie" target="_blank">Rules Cookie</a></li>
				<li><a href="https://www.drupal.org/project/update_rules" target="_blank">Update Rules</a></li>
				<li><a href="https://www.drupal.org/project/rules_onceperday" target="_blank">Rules Once per Day</a></li>
				<li><a href="https://www.drupal.org/project/webform_rules" target="_blank">Webform Rules</a></li>
			</ul>


			<p><strong>Language:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/menu_link_sync" target="_blank">Menu Link Sync</a></li>
				<li><a href="https://www.drupal.org/project/translate_this" target="_blank">TranslateThis Button</a></li>
				<li><a href="https://www.drupal.org/project/menu_management_languages" target="_blank">Menu Management Languages</a></li>
				<li><a href="https://www.drupal.org/project/webform_localization" target="_blank">Webform Localization</a></li>
			</ul>

			
			<br/>
			<p><strong>SEO:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/seo_checklist" target="_blank">SEO Checklist</a></li>
				<li><a href="https://www.drupal.org/project/seo_friend" target="_blank">SEO Reports</a></li>
				<li><a href="https://www.drupal.org/project/seo_checker" target="_blank">SEO Keyword Checker</a></li>
				<li><a href="https://www.drupal.org/project/seo_preview" target="_blank">SEO MetaTags Preview</a></li>
				<li><a href="https://www.drupal.org/project/responsive_favicons" target="_blank">Responsive Favicons</a></li>
				<li><a href="https://www.drupal.org/project/hreflang" target="_blank">Alternate hreflang</a></li>
				<li><a href="https://www.drupal.org/project/yoast_seo" target="_blank">Yoast SEO</a></li>
				<li><a href="https://www.drupal.org/project/contentoptimizer" target="_blank">Content Optimizer</a></li>
				<li><a href="https://www.drupal.org/project/contentanalysis" target="_blank">Content Analysis</a></li>
				<li><a href="https://www.drupal.org/project/kwresearch" target="_blank">Keyword Research</a></li>
				<li><a href="https://www.drupal.org/project/structured_data" target="_blank">Structured Data Markup (Rich Snippets)</a></li>
				<li><a href="https://www.drupal.org/project/schemaorg" target="_blank">Schema.org</a></li>
				<li><a href="https://www.drupal.org/project/dynamic_internal_linking" target="_blank">Dynamic Internal Linking</a></li>
				<li><a href="https://www.drupal.org/project/metatag_taxonomy_facets" target="_blank">Metatag taxonomy facets</a></li>
				<li><a href="https://www.drupal.org/project/abjs" target="_blank">A/B Test JS</a></li>
			</ul>
			<br/>

			<p><strong>CKEditor:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/editor" target="_blank">Editor (D8 Backport)</a></li>
				<li><a href="https://www.drupal.org/project/ckeditor_link_file" target="_blank">CKEditor Link File</a></li>
				<li><a href="https://www.drupal.org/project/ckeditor_htmlbuttons" target="_blank">CKEditor HTML buttons</a></li>
				<li><a href="https://www.drupal.org/project/ck_autoembed" target="_blank">CKEditor AutoEmbed</a></li>
				<li><a href="https://www.drupal.org/project/ckeditor_upload" target="_blank">CKEditor Upload</a></li>
				<li><a href="https://www.drupal.org/project/ckeditor_plain_summary" target="_blank">CKeditor plain summary</a></li>
				<li><a href="https://www.drupal.org/project/media_ckeditor" target="_blank">Media CKEditor</a></li>
				<li><a href="https://www.drupal.org/project/ckeditor_widgets" target="_blank">CKeditor Widgets</a></li>
				<li><a href="https://www.drupal.org/project/ckeditor_kcfinder" target="_blank">CKEditor KCFinder</a></li>
				<li><a href="https://www.drupal.org/project/linkit" target="_blank">CKEditor Widgets</a></li>
				<li><a href="https://www.drupal.org/project/ckeditor_paragraph_paste_fix" target="_blank">Ckeditor Paragraph Paste Fix</a></li>
				<li><a href="https://www.drupal.org/project/ckeditor_quicktable" target="_blank">Ckeditor Quicktable</a></li>
				<li><a href="https://www.drupal.org/project/ckeditor_widgets" target="_blank">Ckeditor Widgets</a></li>
				<li><a href="https://www.drupal.org/project/ckeditor_insert" target="_blank">CKEditor Insert</a></li>
				<li><a href="https://www.drupal.org/project/token_insert" target="_blank">Token Insert</a></li>
				<li><a href="https://www.drupal.org/project/token_embed_views" target="_blank">Token Embed Views</a></li>
			</ul>



			<p><strong>Interface:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/workbench_moderation" target="_blank">Workbench</a></li>
				<li><a href="https://www.drupal.org/project/disclaimer" target="_blank">Disclaimer</a></li>
				<li><a href="https://www.drupal.org/project/signed_nodes" target="_blank">Signed Nodes</a></li>
				<li><a href="https://www.drupal.org/project/override_css" target="_blank">Override css</a></li>
				<li><a href="https://www.drupal.org/project/anonymous_login" target="_blank">Anonymous login</a></li>
				<li><a href="https://www.drupal.org/project/super_login" target="_blank">Super login</a></li>
				<li><a href="https://www.drupal.org/project/persistent_login" target="_blank">Persistent Login</a></li>
				<li><a href="https://www.drupal.org/project/super_login" target="_blank">Super Login</a></li>
				<li><a href="https://www.drupal.org/project/clean_comments" target="_blank">Clean Comments</a></li>
				<li><a href="https://www.drupal.org/project/contentment" target="_blank">Contentment</a></li>
				<li><a href="https://www.drupal.org/project/jquery_localscroll" target="_blank">jQuery LocalScroll</a></li>
				<li><a href="https://www.drupal.org/project/menu_badges" target="_blank">Menu Badges</a></li>
				<li><a href="https://www.drupal.org/project/keyboard_shortcut" target="_blank">Keyboard Shortcut Utility</a></li>
				<li><a href="https://www.drupal.org/project/insert_field" target="_blank">Insert Field</a></li>
				<li><a href="https://www.drupal.org/project/responsive_menu_combined" target="_blank">Responsive Menu Combined</a></li>
				<li><a href="https://www.drupal.org/project/mms" target="_blank">MMS - Multilinguism Made Simple</a></li>
				<li><a href="https://www.drupal.org/project/grouping_menu_items" target="_blank">Grouping menu items</a></li>
				<li><a href="https://www.drupal.org/project/filedepot" target="_blank">Filedepot</a></li>
				<li><a href="https://www.drupal.org/project/node_help_text" target="_blank">Node Help Text</a></li>
				<li><a href="https://www.drupal.org/project/okvideo" target="_blank">OKVideo (full-screen backgrounds)</a></li>
				<li><a href="https://www.drupal.org/project/background_image_formatter" target="_blank">Simple Background image formatter</a></li>
				<li><a href="https://www.drupal.org/project/scroll_button" target="_blank">Scroll button</a></li>
				<li><a href="https://www.drupal.org/project/personalize" target="_blank">Personalize</a></li>
				<li><a href="https://www.drupal.org/project/config_pages" target="_blank">Config Pages</a></li>
				<li><a href="https://www.drupal.org/project/node_display_title" target="_blank">Node Display Title</a></li>
				<li><a href="https://www.drupal.org/project/jquery_touchpunch" target="_blank">jQuery UI Touch Punch</a></li>
				<li><a href="https://www.drupal.org/project/menu_select" target="_blank">Menu Select</a></li>
				<li><a href="https://www.drupal.org/project/readmore_ajax" target="_blank">Read more ajax</a></li>
				<li><a href="https://www.drupal.org/project/menu_firstchild" target="_blank">Menu Firstchild</a></li>
				<li><a href="https://www.drupal.org/project/simple_modal_overlay" target="_blank">Simple modal overlay</a></li>
				<li><a href="https://www.drupal.org/project/ng_lightbox" target="_blank">NG Lightbox (form in modal)</a></li>
				<li><a href="https://www.drupal.org/project/view_mode_tab" target="_blank">View Mode Tab</a></li>
				<li><a href="https://www.drupal.org/project/node_display_field" target="_blank">Node Display Field</a></li>
				<li><a href="https://www.drupal.org/project/pace" target="_blank">PACE - Page load progress bar</a></li>
				<li><a href="https://www.drupal.org/project/no_autocomplete" target="_blank">No Autocomplete</a></li>
				<li><a href="https://www.drupal.org/project/pinterest_hover" target="_blank">Pinterest Hover button</a></li>
				<li><a href="https://www.drupal.org/project/quickedit_tab" target="_blank">Quick Edit Tab</a></li>
				<li><a href="https://www.drupal.org/project/multiple_fields_remove_button" target="_blank">Multiple Fields Remove Button</a></li>
				<li><a href="https://www.drupal.org/project/menuux" target="_blank">Menu Browser</a></li>
				<li><a href="https://www.drupal.org/project/bigmenu" target="_blank">Big Menu</a></li>
				<li><a href="https://www.drupal.org/project/menu_editor" target="_blank">Menu Editor</a></li>
				<li><a href="https://www.drupal.org/project/menu_token" target="_blank">Menu token</a></li>
				<li><a href="https://www.drupal.org/project/taxonomy_manager" target="_blank">Taxonomy Manager</a></li>
				<li><a href="https://www.drupal.org/project/term_merge" target="_blank">Term Merge</a></li>
				<li><a href="https://www.drupal.org/project/back_to_top" target="_blank">Back to top</a></li>
			</ul>

			<br/>
			<p><strong>Commerce:</strong></p>
			<ul>
				<li><a href="https://www.drupal.org/project/shopify" target="_blank">Shopify eCommerce</a></li>
				<li><a href="https://www.drupal.org/project/amazon" target="_blank">Amazon Product Advertisement APIe</a></li>
				<li><a href="https://www.drupal.org/project/bookit" target="_blank">Bookit</a></li>
				<li><a href="https://www.drupal.org/project/payment_webform" target="_blank">Payment for Webform</a></li>
				<li><a href="https://www.drupal.org/project/basic_cart" target="_blank">Basic Cart</a></li>	
				<li><a href="https://www.drupal.org/project/commerce_refund_line_item" target="_blank">Commerce Refund Line Item</a></li>	
				<li><a href="https://www.drupal.org/project/commerce_cartmessage" target="_blank">Commerce Cart Message</a></li>
				<li><a href="https://www.drupal.org/project/commerce_goodrelations" target="_blank">Commerce Goodrelations (schema.org)</a></li>
				<li><a href="https://www.drupal.org/project/commerce_schemaorg" target="_blank">Commerce Schema.org</a></li>
				<li><a href="https://www.drupal.org/project/commerce_cart_link" target="_blank">Commerce Cart Link</a></li>	
				<li><a href="https://www.drupal.org/project/commerce_responsive_ui" target="_blank">Commerce Responsive UI</a></li>
				<li><a href="https://www.drupal.org/project/commerce_cart_estimate" target="_blank">Commerce Cart Estimate</a></li>
				<li><a href="https://www.drupal.org/node/2196205" target="_blank">Commerce Piwik</a></li>
				<li><a href="https://www.drupal.org/project/commerce_addressbook_extra" target="_blank">Commerce Addressbook Extra</a></li>
				<li><a href="https://www.drupal.org/project/commerce_pc_field" target="_blank">Commerce pre-calculated price field</a></li>
				<li><a href="https://www.drupal.org/project/commerce_checkout_products_list" target="_blank">Commerce Checkout Product List</a></li>
				<li><a href="https://www.drupal.org/project/commerce_auto_checkout" target="_blank">Commerce Auto-Checkout</a></li>
				<li><a href="https://www.drupal.org/project/commerce_checkout_complete_registration" target="_blank">Commerce Checkout Complete Registration</a></li>
				<li><a href="https://www.drupal.org/project/commerce_customer_contact" target="_blank">Commerce Customer Contact</a></li>	
				<li><a href="https://www.drupal.org/project/commerce_dtc" target="_blank">Commerce Direct-to-Cart</a></li>
				<li><a href="https://www.drupal.org/project/commerce_panes_manager" target="_blank">Commerce Panes Manager</a></li>	
				<li><a href="https://www.drupal.org/project/commerce_fulfillment" target="_blank">Commerce Fulfillment</a></li>
				<li><a href="https://www.drupal.org/project/commerce_deploy" target="_blank">Commerce Deploy</a></li>
				<li><a href="https://www.drupal.org/project/commerce_reset" target="_blank">Commerce Reset</a></li>
				<li><a href="https://www.drupal.org/project/commerce_add_to_cart_extras" target="_blank">Commerce Add to Cart Extras</a></li>
				<li><a href="https://www.drupal.org/project/dc_ajax_add_cart" target="_blank">Commerce Ajax Add to Cart</a></li>
				<li><a href="https://www.drupal.org/project/2270819/git-instructions" target="_blank">Commerce Fast Ajax Add to Cart</a></li>
				<li><a href="https://www.drupal.org/sandbox/xandeadx/2621602" target="_blank">Commerce Ajax Cart Form</a></li>
				<li><a href="https://www.drupal.org/project/commerce_option" target="_blank">Commerce Product Option</a></li>
				<li><a href="https://www.drupal.org/project/commerce_options_as_images" target="_blank">Commerce options as images</a></li>	
				<li><a href="https://www.drupal.org/project/commerce_default_product_variant" target="_blank">Commerce Default Product Variant</a></li>	
				<li><a href="https://www.drupal.org/project/commerce_stocked_default" target="_blank">Commerce Stocked Default</a></li>
				<li><a href="https://www.drupal.org/project/commerce_checkout_paths" target="_blank">Commerce Checkout paths</a></li>
				<li><a href="https://www.drupal.org/project/commerce_packing_slip" target="_blank">Commerce Packing Slip (Lieferschein)</a></li>
				<li><a href="https://www.drupal.org/project/commerce_checkout_field_group" target="_blank">Commerce Checkout Field Group</a></li>
				<li><a href="https://www.drupal.org/project/product_specification" target="_blank">Product Specification</a></li>
				<li><a href="https://www.drupal.org/project/commerce_fancy_image_attributes" target="_blank">Commerce Fancy Image Attributes</a></li>
				<li><a href="https://www.drupal.org/project/commerce_cart_context" target="_blank">Commerce Cart Context</a></li>
				<li><a href="https://www.drupal.org/project/commerce_nocart" target="_blank">Commerce NoCart</a></li>
				<li><a href="https://www.drupal.org/project/commerce_checkout_multilane" target="_blank">Commerce Checkout Multilane</a></li>
				<li><a href="https://www.drupal.org/project/commerce_cart_expiration" target="_blank">Commerce Cart Expiration</a></li>
				<li><a href="https://www.drupal.org/project/commerce_order_cleanup" target="_blank">Commerce Order Cleanup</a></li>
				<li><a href="https://www.drupal.org/project/commerce_pricelist" target="_blank">Commerce Pricelist</a></li>	
				<li><a href="https://www.drupal.org/project/commerce_price_table" target="_blank">Commerce price table</a></li>	
				<li><a href="https://www.drupal.org/project/commerce_add_to_cart_confirmation" target="_blank">Commerce add to cart confirmation</a></li>
				<li><a href="https://www.drupal.org/project/commerce_shipping_quote_weight" target="_blank">Commerce Shipping Quote Weight</a></li>
				<li><a href="https://www.drupal.org/project/commerce_shipment" target="_blank">Commerce Shipment</a></li>	
				<li><a href="https://www.drupal.org/project/commerce_payment_simpleui" target="_blank">Commerce Payment Simple UI</a></li>
				<li><a href="https://www.drupal.org/project/commerce_cap" target="_blank">Commerce Checkout AJAX Pages</a></li>	
				<li><a href="https://www.drupal.org/project/erpal_invoice" target="_blank">ERPAL Invoice</a></li>
				<li><a href="https://www.drupal.org/project/commerce_order_types" target="_blank">Commerce Order Types</a></li>	
				<li><a href="https://www.drupal.org/project/field_slide_show_j360" target="_blank">field slide show j360</a></li>
				<li><a href="https://www.drupal.org/project/commerce_deploy" target="_blank">Commerce Deploy</a></li>
				<li><a href="https://www.drupal.org/project/commerce_search_api" target="_blank">Commerce Search API</a></li>
				<li><a href="https://www.drupal.org/project/commerce_product_bundle" target="_blank">Commerce Product Bundle</a></li>
				<li><a href="https://www.drupal.org/project/commerce_option" target="_blank">Commerce Product Option (vs. Variants)</a></li>
				<li><a href="https://www.drupal.org/project/commerce_feeds" target="_blank">Commerce Feeds</a></li>	
				<li><a href="https://www.drupal.org/project/commerce_saleprice" target="_blank">Commerce Sale Price</a></li>
				<li><a href="https://www.drupal.org/project/commerce_eu_vat" target="_blank">Commerce European Union VAT</a></li>
				<li><a href="https://www.drupal.org/project/commerce_checkout_progress" target="_blank">Commerce Checkout Progress</a></li>
				<li><a href="https://www.drupal.org/project/commerce_checkout_login" target="_blank">Commerce Checkout Login</a></li>
				<li><a href="https://www.drupal.org/project/commerce_checkout_redirect" target="_blank"><b>Commerce Checkout Redirect</b></a></li>
				<li><a href="https://www.drupal.org/project/commerce_checkout_complete_registration" target="_blank">Commerce Checkout Complete Registration</a></li>
				<li><a href="https://www.drupal.org/project/commerce_wishlist" target="_blank">Commerce Wishlist</a></li>
				<li><a href="https://www.drupal.org/project/commerce_add_to_cart_confirmation" target="_blank">Commerce add to cart confirmation</a></li>
				<li><a href="https://www.drupal.org/project/commerce_discount" target="_blank">Commerce Discount</a></li>
				<li><a href="https://www.drupal.org/project/commerce_buy_one_click" target="_blank">Commerce Buy One Click</a></li>
				<li><a href="https://www.drupal.org/project/commerce_authcache" target="_blank">Commerce Authcache (s.a. <a href="https://www.drupal.org/node/2037015" taget="_blank">Tutorial</a></li>
		</ul>
		

	</section>

	<section>
	<p>Development-Helper:
	<pre style="line-height: 1em; font-size: .8em;">dpm(get_defined_vars());</pre>
	</p>

	
</section> <!-- #page -->
	
</body>
</html>
