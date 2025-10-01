<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MySQL - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/set.mysqlinfo.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/set.mysqlinfo.php">
 <link rel="alternate" href="https://www.php.net/manual/en/set.mysqlinfo.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.database.vendors.php">
 <link rel="prev" href="https://www.php.net/manual/en/mongodb.exceptions.tree.php">
 <link rel="next" href="https://www.php.net/manual/en/mysql.php">

 <link rel="alternate" href="https://www.php.net/manual/en/set.mysqlinfo.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/set.mysqlinfo.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/set.mysqlinfo.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/set.mysqlinfo.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/set.mysqlinfo.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/set.mysqlinfo.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/set.mysqlinfo.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/set.mysqlinfo.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/set.mysqlinfo.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/set.mysqlinfo.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/set.mysqlinfo.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="MySQL Drivers and Plugins" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MySQL - Manual" />
<meta name="twitter:description" content="MySQL Drivers and Plugins" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MySQL - Manual" />
<meta itemprop="description" content="MySQL Drivers and Plugins" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="MySQL Drivers and Plugins" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="mysql.php">
          Overview of the MySQL PHP drivers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mongodb.exceptions.tree.php">
          &laquo; Class Tree        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/set.mysqlinfo.php' selected="selected">English</option>
            <option value='de/set.mysqlinfo.php'>German</option>
            <option value='es/set.mysqlinfo.php'>Spanish</option>
            <option value='fr/set.mysqlinfo.php'>French</option>
            <option value='it/set.mysqlinfo.php'>Italian</option>
            <option value='ja/set.mysqlinfo.php'>Japanese</option>
            <option value='pt_BR/set.mysqlinfo.php'>Brazilian Portuguese</option>
            <option value='ru/set.mysqlinfo.php'>Russian</option>
            <option value='tr/set.mysqlinfo.php'>Turkish</option>
            <option value='uk/set.mysqlinfo.php'>Ukrainian</option>
            <option value='zh/set.mysqlinfo.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="set.mysqlinfo" class="set">
 <h1 class="title">MySQL Drivers and Plugins</h1>
 

 <div class="info">
  <div class="abstract">
   <p class="para">
    PHP offers several MySQL drivers and plugins for accessing and
    handling MySQL.
   </p>
   <p class="para">
    The differences and functionality of the MySQL extensions are described
    within the overview of this section.
   </p>
   <p class="para">
    The extensions listed support the MySQL protocol.
    Examples of compatible database servers are
    <a href="http://www.mariadb.org/" class="link external">&raquo;&nbsp;MariaDB Server</a>,
    <a href="http://www.mysql.com/" class="link external">&raquo;&nbsp;MySQL Server</a>,
    <a href="https://www.percona.com/mysql/software/percona-server-for-mysql" class="link external">&raquo;&nbsp;Percona Server for MySQL</a>,
    and
    <a href="https://www.pingcap.com/tidb/" class="link external">&raquo;&nbsp;TiDB</a>.
   </p>
  </div>
 </div>

 

 




 






 





 






<ul class="chunklist chunklist_set"><li><a href="mysql.php">Overview of the MySQL PHP drivers</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="mysqlinfo.intro.php">Introduction</a></li><li><a href="mysqlinfo.terminology.php">Terminology overview</a></li><li><a href="mysqlinfo.api.choosing.php">Choosing an API</a></li><li><a href="mysqlinfo.library.choosing.php">Choosing a library</a></li><li><a href="mysqlinfo.concepts.php">Concepts</a></li></ul></li><li><a href="book.mysqli.php">MySQLi</a> — MySQL Improved Extension<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.mysqli.php">Introduction</a></li><li><a href="mysqli.overview.php">Overview</a></li><li><a href="mysqli.quickstart.php">Quick start guide</a></li><li><a href="mysqli.setup.php">Installing/Configuring</a></li><li><a href="mysqli.persistconns.php">The mysqli Extension and Persistent Connections</a></li><li><a href="mysqli.constants.php">Predefined Constants</a></li><li><a href="mysqli.notes.php">Notes</a></li><li><a href="mysqli.summary.php">The MySQLi Extension Function Summary</a></li><li><a href="class.mysqli.php">mysqli</a> — The mysqli class</li><li><a href="class.mysqli-stmt.php">mysqli_stmt</a> — The mysqli_stmt class</li><li><a href="class.mysqli-result.php">mysqli_result</a> — The mysqli_result class</li><li><a href="class.mysqli-driver.php">mysqli_driver</a> — The mysqli_driver class</li><li><a href="class.mysqli-warning.php">mysqli_warning</a> — The mysqli_warning class</li><li><a href="class.mysqli-sql-exception.php">mysqli_sql_exception</a> — The mysqli_sql_exception class</li><li><a href="ref.mysqli.php">Aliases and deprecated Mysqli Functions</a></li><li><a href="changelog.mysqli.php">Changelog</a></li></ul></li><li><a href="book.mysql-xdevapi.php">Mysql_xdevapi</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.mysql-xdevapi.php">Introduction</a></li><li><a href="mysql-xdevapi.setup.php">Installing/Configuring</a></li><li><a href="mysql-xdevapi.constants.php">Predefined Constants</a></li><li><a href="changelog.mysql_xdevapi.php">Changelog</a></li><li><a href="mysql-xdevapi.examples.php">Examples</a></li><li><a href="ref.mysql-xdevapi.php">Mysql_xdevapi Functions</a></li><li><a href="class.mysql-xdevapi-baseresult.php">mysql_xdevapi\BaseResult</a> — BaseResult interface</li><li><a href="class.mysql-xdevapi-client.php">mysql_xdevapi\Client</a> — Client class</li><li><a href="class.mysql-xdevapi-collection.php">mysql_xdevapi\Collection</a> — Collection class</li><li><a href="class.mysql-xdevapi-collectionadd.php">mysql_xdevapi\CollectionAdd</a> — CollectionAdd class</li><li><a href="class.mysql-xdevapi-collectionfind.php">mysql_xdevapi\CollectionFind</a> — CollectionFind class</li><li><a href="class.mysql-xdevapi-collectionmodify.php">mysql_xdevapi\CollectionModify</a> — CollectionModify class</li><li><a href="class.mysql-xdevapi-collectionremove.php">mysql_xdevapi\CollectionRemove</a> — CollectionRemove class</li><li><a href="class.mysql-xdevapi-columnresult.php">mysql_xdevapi\ColumnResult</a> — ColumnResult class</li><li><a href="class.mysql-xdevapi-crudoperationbindable.php">mysql_xdevapi\CrudOperationBindable</a> — CrudOperationBindable interface</li><li><a href="class.mysql-xdevapi-crudoperationlimitable.php">mysql_xdevapi\CrudOperationLimitable</a> — CrudOperationLimitable interface</li><li><a href="class.mysql-xdevapi-crudoperationskippable.php">mysql_xdevapi\CrudOperationSkippable</a> — CrudOperationSkippable interface</li><li><a href="class.mysql-xdevapi-crudoperationsortable.php">mysql_xdevapi\CrudOperationSortable</a> — CrudOperationSortable interface</li><li><a href="class.mysql-xdevapi-databaseobject.php">mysql_xdevapi\DatabaseObject</a> — DatabaseObject interface</li><li><a href="class.mysql-xdevapi-docresult.php">mysql_xdevapi\DocResult</a> — DocResult class</li><li><a href="class.mysql-xdevapi-exception.php">mysql_xdevapi\Exception</a> — Exception class</li><li><a href="class.mysql-xdevapi-executable.php">mysql_xdevapi\Executable</a> — Executable interface</li><li><a href="class.mysql-xdevapi-executionstatus.php">mysql_xdevapi\ExecutionStatus</a> — ExecutionStatus class</li><li><a href="class.mysql-xdevapi-expression.php">mysql_xdevapi\Expression</a> — Expression class</li><li><a href="class.mysql-xdevapi-result.php">mysql_xdevapi\Result</a> — Result class</li><li><a href="class.mysql-xdevapi-rowresult.php">mysql_xdevapi\RowResult</a> — RowResult class</li><li><a href="class.mysql-xdevapi-schema.php">mysql_xdevapi\Schema</a> — Schema class</li><li><a href="class.mysql-xdevapi-schemaobject.php">mysql_xdevapi\SchemaObject</a> — SchemaObject interface</li><li><a href="class.mysql-xdevapi-session.php">mysql_xdevapi\Session</a> — Session class</li><li><a href="class.mysql-xdevapi-sqlstatement.php">mysql_xdevapi\SqlStatement</a> — SqlStatement class</li><li><a href="class.mysql-xdevapi-sqlstatementresult.php">mysql_xdevapi\SqlStatementResult</a> — SqlStatementResult class</li><li><a href="class.mysql-xdevapi-statement.php">mysql_xdevapi\Statement</a> — Statement class</li><li><a href="class.mysql-xdevapi-table.php">mysql_xdevapi\Table</a> — Table class</li><li><a href="class.mysql-xdevapi-tabledelete.php">mysql_xdevapi\TableDelete</a> — TableDelete class</li><li><a href="class.mysql-xdevapi-tableinsert.php">mysql_xdevapi\TableInsert</a> — TableInsert class</li><li><a href="class.mysql-xdevapi-tableselect.php">mysql_xdevapi\TableSelect</a> — TableSelect class</li><li><a href="class.mysql-xdevapi-tableupdate.php">mysql_xdevapi\TableUpdate</a> — TableUpdate class</li><li><a href="class.mysql-xdevapi-warning.php">mysql_xdevapi\Warning</a> — Warning class</li></ul></li><li><a href="book.mysql.php">MySQL (Original)</a> — Original MySQL API<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.mysql.php">Introduction</a></li><li><a href="mysql.setup.php">Installing/Configuring</a></li><li><a href="changelog.mysql.php">Changelog</a></li><li><a href="mysql.constants.php">Predefined Constants</a></li><li><a href="mysql.examples.php">Examples</a></li><li><a href="ref.mysql.php">MySQL Functions</a></li></ul></li><li><a href="book.mysqlnd.php">Mysqlnd</a> — MySQL Native Driver<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.mysqlnd.php">Introduction</a></li><li><a href="mysqlnd.overview.php">Overview</a></li><li><a href="mysqlnd.install.php">Installation</a></li><li><a href="mysqlnd.config.php">Runtime Configuration</a></li><li><a href="mysqlnd.incompatibilities.php">Incompatibilities</a></li><li><a href="mysqlnd.persist.php">Persistent Connections</a></li><li><a href="mysqlnd.stats.php">Statistics</a></li><li><a href="mysqlnd.notes.php">Notes</a></li><li><a href="mysqlnd.memory.php">Memory management</a></li><li><a href="mysqlnd.plugin.php">MySQL Native Driver Plugin API</a></li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqlinfo/set.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fset.mysqlinfo%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=set.mysqlinfo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/set.mysqlinfo.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.database.vendors.php">Vendor Specific Database Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.cubrid.php" title="CUBRID">CUBRID</a>
                        </li>
                                                <li class="">
                            <a href="book.dbase.php" title="dBase">dBase</a>
                        </li>
                                                <li class="">
                            <a href="book.ibase.php" title="Firebird/InterBase">Firebird/InterBase</a>
                        </li>
                                                <li class="">
                            <a href="book.ibm-db2.php" title="IBM DB2">IBM DB2</a>
                        </li>
                                                <li class="">
                            <a href="book.mongodb.php" title="MongoDB">MongoDB</a>
                        </li>
                                                <li class="current">
                            <a href="set.mysqlinfo.php" title="MySQL">MySQL</a>
                        </li>
                                                <li class="">
                            <a href="book.oci8.php" title="OCI8">OCI8</a>
                        </li>
                                                <li class="">
                            <a href="book.pgsql.php" title="PostgreSQL">PostgreSQL</a>
                        </li>
                                                <li class="">
                            <a href="book.sqlite3.php" title="SQLite3">SQLite3</a>
                        </li>
                                                <li class="">
                            <a href="book.sqlsrv.php" title="SQLSRV">SQLSRV</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
