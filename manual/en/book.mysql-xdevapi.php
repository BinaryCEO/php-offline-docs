<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Mysql_xdevapi - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.mysql-xdevapi.php">
 <link rel="shorturl" href="https://www.php.net/mysql-xdevapi">
 <link rel="alternate" href="https://www.php.net/mysql-xdevapi" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/set.mysqlinfo.php">
 <link rel="prev" href="https://www.php.net/manual/en/changelog.mysqli.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.mysql-xdevapi.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.mysql-xdevapi.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.mysql-xdevapi.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.mysql-xdevapi.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.mysql-xdevapi.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.mysql-xdevapi.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.mysql-xdevapi.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.mysql-xdevapi.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.mysql-xdevapi.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.mysql-xdevapi.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.mysql-xdevapi.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.mysql-xdevapi.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Mysql_xdevapi" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Mysql_xdevapi - Manual" />
<meta name="twitter:description" content="Mysql_xdevapi" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Mysql_xdevapi - Manual" />
<meta itemprop="description" content="Mysql_xdevapi" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Mysql_xdevapi" />

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
        <a href="intro.mysql-xdevapi.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="changelog.mysqli.php">
          &laquo; Changelog        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      </ul>
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
            <option value='en/book.mysql-xdevapi.php' selected="selected">English</option>
            <option value='de/book.mysql-xdevapi.php'>German</option>
            <option value='es/book.mysql-xdevapi.php'>Spanish</option>
            <option value='fr/book.mysql-xdevapi.php'>French</option>
            <option value='it/book.mysql-xdevapi.php'>Italian</option>
            <option value='ja/book.mysql-xdevapi.php'>Japanese</option>
            <option value='pt_BR/book.mysql-xdevapi.php'>Brazilian Portuguese</option>
            <option value='ru/book.mysql-xdevapi.php'>Russian</option>
            <option value='tr/book.mysql-xdevapi.php'>Turkish</option>
            <option value='uk/book.mysql-xdevapi.php'>Ukrainian</option>
            <option value='zh/book.mysql-xdevapi.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.mysql-xdevapi" class="book">
 
 <h1 class="title">Mysql_xdevapi</h1>
 

 

 






 






 






 






 







 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 







<ul class="chunklist chunklist_book"><li><a href="intro.mysql-xdevapi.php">Introduction</a></li><li><a href="mysql-xdevapi.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi.requirements.php">Requirements</a></li><li><a href="mysql-xdevapi.installation.php">Installation</a></li><li><a href="mysql-xdevapi.configuration.php">Runtime Configuration</a></li><li><a href="mysql-xdevapi.build.php">Building / Compiling From Source</a></li></ul></li><li><a href="mysql-xdevapi.constants.php">Predefined Constants</a></li><li><a href="changelog.mysql_xdevapi.php">Changelog</a></li><li><a href="mysql-xdevapi.examples.php">Examples</a></li><li><a href="ref.mysql-xdevapi.php">Mysql_xdevapi Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.mysql-xdevapi-expression.php">expression</a> — Bind prepared statement variables as parameters</li><li><a href="function.mysql-xdevapi-getsession.php">getSession</a> — Connect to a MySQL server</li></ul></li><li><a href="class.mysql-xdevapi-baseresult.php">mysql_xdevapi\BaseResult</a> — BaseResult interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-baseresult.getwarnings.php">BaseResult::getWarnings</a> — Fetch warnings from last operation</li><li><a href="mysql-xdevapi-baseresult.getwarningscount.php">BaseResult::getWarningsCount</a> — Fetch warning count from last operation</li></ul></li><li><a href="class.mysql-xdevapi-client.php">mysql_xdevapi\Client</a> — Client class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-client.close.php">mysql_xdevapi\Client::close</a> — Close client</li><li><a href="mysql-xdevapi-client.construct.php">Client::__construct</a> — Client constructor</li><li><a href="mysql-xdevapi-client.getsession.php">Client::getClient</a> — Get client session</li></ul></li><li><a href="class.mysql-xdevapi-collection.php">mysql_xdevapi\Collection</a> — Collection class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-collection.add.php">Collection::add</a> — Add collection document</li><li><a href="mysql-xdevapi-collection.addorreplaceone.php">Collection::addOrReplaceOne</a> — Add or replace collection document</li><li><a href="mysql-xdevapi-collection.construct.php">Collection::__construct</a> — Collection constructor</li><li><a href="mysql-xdevapi-collection.count.php">Collection::count</a> — Get document count</li><li><a href="mysql-xdevapi-collection.createindex.php">Collection::createIndex</a> — Create collection index</li><li><a href="mysql-xdevapi-collection.dropindex.php">Collection::dropIndex</a> — Drop collection index</li><li><a href="mysql-xdevapi-collection.existsindatabase.php">Collection::existsInDatabase</a> — Check if collection exists in database</li><li><a href="mysql-xdevapi-collection.find.php">Collection::find</a> — Search for document</li><li><a href="mysql-xdevapi-collection.getname.php">Collection::getName</a> — Get collection name</li><li><a href="mysql-xdevapi-collection.getone.php">Collection::getOne</a> — Get one document</li><li><a href="mysql-xdevapi-collection.getschema.php">Collection::getSchema</a> — Get schema object</li><li><a href="mysql-xdevapi-collection.getsession.php">Collection::getSession</a> — Get session object</li><li><a href="mysql-xdevapi-collection.modify.php">Collection::modify</a> — Modify collection documents</li><li><a href="mysql-xdevapi-collection.remove.php">Collection::remove</a> — Remove collection documents</li><li><a href="mysql-xdevapi-collection.removeone.php">Collection::removeOne</a> — Remove one collection document</li><li><a href="mysql-xdevapi-collection.replaceone.php">Collection::replaceOne</a> — Replace one collection document</li></ul></li><li><a href="class.mysql-xdevapi-collectionadd.php">mysql_xdevapi\CollectionAdd</a> — CollectionAdd class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-collectionadd.construct.php">CollectionAdd::__construct</a> — CollectionAdd constructor</li><li><a href="mysql-xdevapi-collectionadd.execute.php">CollectionAdd::execute</a> — Execute the statement</li></ul></li><li><a href="class.mysql-xdevapi-collectionfind.php">mysql_xdevapi\CollectionFind</a> — CollectionFind class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-collectionfind.bind.php">CollectionFind::bind</a> — Bind value to query placeholder</li><li><a href="mysql-xdevapi-collectionfind.construct.php">CollectionFind::__construct</a> — CollectionFind constructor</li><li><a href="mysql-xdevapi-collectionfind.execute.php">CollectionFind::execute</a> — Execute the statement</li><li><a href="mysql-xdevapi-collectionfind.fields.php">CollectionFind::fields</a> — Set document field filter</li><li><a href="mysql-xdevapi-collectionfind.groupby.php">CollectionFind::groupBy</a> — Set grouping criteria</li><li><a href="mysql-xdevapi-collectionfind.having.php">CollectionFind::having</a> — Set condition for aggregate functions</li><li><a href="mysql-xdevapi-collectionfind.limit.php">CollectionFind::limit</a> — Limit number of returned documents</li><li><a href="mysql-xdevapi-collectionfind.lockexclusive.php">CollectionFind::lockExclusive</a> — Execute operation with EXCLUSIVE LOCK</li><li><a href="mysql-xdevapi-collectionfind.lockshared.php">CollectionFind::lockShared</a> — Execute operation with SHARED LOCK</li><li><a href="mysql-xdevapi-collectionfind.offset.php">CollectionFind::offset</a> — Skip given number of elements to be returned</li><li><a href="mysql-xdevapi-collectionfind.sort.php">CollectionFind::sort</a> — Set the sorting criteria</li></ul></li><li><a href="class.mysql-xdevapi-collectionmodify.php">mysql_xdevapi\CollectionModify</a> — CollectionModify class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-collectionmodify.arrayappend.php">CollectionModify::arrayAppend</a> — Append element to an array field</li><li><a href="mysql-xdevapi-collectionmodify.arrayinsert.php">CollectionModify::arrayInsert</a> — Insert element into an array field</li><li><a href="mysql-xdevapi-collectionmodify.bind.php">CollectionModify::bind</a> — Bind value to query placeholder</li><li><a href="mysql-xdevapi-collectionmodify.construct.php">CollectionModify::__construct</a> — CollectionModify constructor</li><li><a href="mysql-xdevapi-collectionmodify.execute.php">CollectionModify::execute</a> — Execute modify operation</li><li><a href="mysql-xdevapi-collectionmodify.limit.php">CollectionModify::limit</a> — Limit number of modified documents</li><li><a href="mysql-xdevapi-collectionmodify.patch.php">CollectionModify::patch</a> — Patch document</li><li><a href="mysql-xdevapi-collectionmodify.replace.php">CollectionModify::replace</a> — Replace document field</li><li><a href="mysql-xdevapi-collectionmodify.set.php">CollectionModify::set</a> — Set document attribute</li><li><a href="mysql-xdevapi-collectionmodify.skip.php">CollectionModify::skip</a> — Skip elements</li><li><a href="mysql-xdevapi-collectionmodify.sort.php">CollectionModify::sort</a> — Set the sorting criteria</li><li><a href="mysql-xdevapi-collectionmodify.unset.php">CollectionModify::unset</a> — Unset the value of document fields</li></ul></li><li><a href="class.mysql-xdevapi-collectionremove.php">mysql_xdevapi\CollectionRemove</a> — CollectionRemove class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-collectionremove.bind.php">CollectionRemove::bind</a> — Bind value to placeholder</li><li><a href="mysql-xdevapi-collectionremove.construct.php">CollectionRemove::__construct</a> — CollectionRemove constructor</li><li><a href="mysql-xdevapi-collectionremove.execute.php">CollectionRemove::execute</a> — Execute remove operation</li><li><a href="mysql-xdevapi-collectionremove.limit.php">CollectionRemove::limit</a> — Limit number of documents to remove</li><li><a href="mysql-xdevapi-collectionremove.sort.php">CollectionRemove::sort</a> — Set the sorting criteria</li></ul></li><li><a href="class.mysql-xdevapi-columnresult.php">mysql_xdevapi\ColumnResult</a> — ColumnResult class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-columnresult.construct.php">ColumnResult::__construct</a> — ColumnResult constructor</li><li><a href="mysql-xdevapi-columnresult.getcharactersetname.php">ColumnResult::getCharacterSetName</a> — Get character set</li><li><a href="mysql-xdevapi-columnresult.getcollationname.php">ColumnResult::getCollationName</a> — Get collation name</li><li><a href="mysql-xdevapi-columnresult.getcolumnlabel.php">ColumnResult::getColumnLabel</a> — Get column label</li><li><a href="mysql-xdevapi-columnresult.getcolumnname.php">ColumnResult::getColumnName</a> — Get column name</li><li><a href="mysql-xdevapi-columnresult.getfractionaldigits.php">ColumnResult::getFractionalDigits</a> — Get fractional digit length</li><li><a href="mysql-xdevapi-columnresult.getlength.php">ColumnResult::getLength</a> — Get column field length</li><li><a href="mysql-xdevapi-columnresult.getschemaname.php">ColumnResult::getSchemaName</a> — Get schema name</li><li><a href="mysql-xdevapi-columnresult.gettablelabel.php">ColumnResult::getTableLabel</a> — Get table label</li><li><a href="mysql-xdevapi-columnresult.gettablename.php">ColumnResult::getTableName</a> — Get table name</li><li><a href="mysql-xdevapi-columnresult.gettype.php">ColumnResult::getType</a> — Get column type</li><li><a href="mysql-xdevapi-columnresult.isnumbersigned.php">ColumnResult::isNumberSigned</a> — Check if signed type</li><li><a href="mysql-xdevapi-columnresult.ispadded.php">ColumnResult::isPadded</a> — Check if padded</li></ul></li><li><a href="class.mysql-xdevapi-crudoperationbindable.php">mysql_xdevapi\CrudOperationBindable</a> — CrudOperationBindable interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-crudoperationbindable.bind.php">CrudOperationBindable::bind</a> — Bind value to placeholder</li></ul></li><li><a href="class.mysql-xdevapi-crudoperationlimitable.php">mysql_xdevapi\CrudOperationLimitable</a> — CrudOperationLimitable interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-crudoperationlimitable.limit.php">CrudOperationLimitable::limit</a> — Set result limit</li></ul></li><li><a href="class.mysql-xdevapi-crudoperationskippable.php">mysql_xdevapi\CrudOperationSkippable</a> — CrudOperationSkippable interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-crudoperationskippable.skip.php">CrudOperationSkippable::skip</a> — Number of operations to skip</li></ul></li><li><a href="class.mysql-xdevapi-crudoperationsortable.php">mysql_xdevapi\CrudOperationSortable</a> — CrudOperationSortable interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-crudoperationsortable.sort.php">CrudOperationSortable::sort</a> — Sort results</li></ul></li><li><a href="class.mysql-xdevapi-databaseobject.php">mysql_xdevapi\DatabaseObject</a> — DatabaseObject interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-databaseobject.existsindatabase.php">DatabaseObject::existsInDatabase</a> — Check if object exists in database</li><li><a href="mysql-xdevapi-databaseobject.getname.php">DatabaseObject::getName</a> — Get object name</li><li><a href="mysql-xdevapi-databaseobject.getsession.php">DatabaseObject::getSession</a> — Get session name</li></ul></li><li><a href="class.mysql-xdevapi-docresult.php">mysql_xdevapi\DocResult</a> — DocResult class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-docresult.construct.php">DocResult::__construct</a> — DocResult constructor</li><li><a href="mysql-xdevapi-docresult.fetchall.php">DocResult::fetchAll</a> — Get all rows</li><li><a href="mysql-xdevapi-docresult.fetchone.php">DocResult::fetchOne</a> — Get one row</li><li><a href="mysql-xdevapi-docresult.getwarnings.php">DocResult::getWarnings</a> — Get warnings from last operation</li><li><a href="mysql-xdevapi-docresult.getwarningscount.php">DocResult::getWarningsCount</a> — Get warning count from last operation</li></ul></li><li><a href="class.mysql-xdevapi-exception.php">mysql_xdevapi\Exception</a> — Exception class</li><li><a href="class.mysql-xdevapi-executable.php">mysql_xdevapi\Executable</a> — Executable interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-executable.execute.php">Executable::execute</a> — Execute statement</li></ul></li><li><a href="class.mysql-xdevapi-executionstatus.php">mysql_xdevapi\ExecutionStatus</a> — ExecutionStatus class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-executionstatus.construct.php">ExecutionStatus::__construct</a> — ExecutionStatus constructor</li></ul></li><li><a href="class.mysql-xdevapi-expression.php">mysql_xdevapi\Expression</a> — Expression class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-expression.construct.php">Expression::__construct</a> — Expression constructor</li></ul></li><li><a href="class.mysql-xdevapi-result.php">mysql_xdevapi\Result</a> — Result class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-result.construct.php">Result::__construct</a> — Result constructor</li><li><a href="mysql-xdevapi-result.getaffecteditemscount.php">Result::getAffectedItemsCount</a> — Get affected row count</li><li><a href="mysql-xdevapi-result.getautoincrementvalue.php">Result::getAutoIncrementValue</a> — Get autoincremented value</li><li><a href="mysql-xdevapi-result.getgeneratedids.php">Result::getGeneratedIds</a> — Get generated ids</li><li><a href="mysql-xdevapi-result.getwarnings.php">Result::getWarnings</a> — Get warnings from last operation</li><li><a href="mysql-xdevapi-result.getwarningscount.php">Result::getWarningsCount</a> — Get warning count from last operation</li></ul></li><li><a href="class.mysql-xdevapi-rowresult.php">mysql_xdevapi\RowResult</a> — RowResult class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-rowresult.construct.php">RowResult::__construct</a> — RowResult constructor</li><li><a href="mysql-xdevapi-rowresult.fetchall.php">RowResult::fetchAll</a> — Get all rows from result</li><li><a href="mysql-xdevapi-rowresult.fetchone.php">RowResult::fetchOne</a> — Get row from result</li><li><a href="mysql-xdevapi-rowresult.getcolumncount.php">RowResult::getColumnsCount</a> — Get column count</li><li><a href="mysql-xdevapi-rowresult.getcolumnnames.php">RowResult::getColumnNames</a> — Get all column names</li><li><a href="mysql-xdevapi-rowresult.getcolumns.php">RowResult::getColumns</a> — Get column metadata</li><li><a href="mysql-xdevapi-rowresult.getwarnings.php">RowResult::getWarnings</a> — Get warnings from last operation</li><li><a href="mysql-xdevapi-rowresult.getwarningscount.php">RowResult::getWarningsCount</a> — Get warning count from last operation</li></ul></li><li><a href="class.mysql-xdevapi-schema.php">mysql_xdevapi\Schema</a> — Schema class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-schema.construct.php">Schema::__construct</a> — Schema constructor</li><li><a href="mysql-xdevapi-schema.createcollection.php">Schema::createCollection</a> — Add collection to schema</li><li><a href="mysql-xdevapi-schema.dropcollection.php">Schema::dropCollection</a> — Drop collection from schema</li><li><a href="mysql-xdevapi-schema.existsindatabase.php">Schema::existsInDatabase</a> — Check if exists in database</li><li><a href="mysql-xdevapi-schema.getcollection.php">Schema::getCollection</a> — Get collection from schema</li><li><a href="mysql-xdevapi-schema.getcollectionastable.php">Schema::getCollectionAsTable</a> — Get collection as a Table object</li><li><a href="mysql-xdevapi-schema.getcollections.php">Schema::getCollections</a> — Get all schema collections</li><li><a href="mysql-xdevapi-schema.getname.php">Schema::getName</a> — Get schema name</li><li><a href="mysql-xdevapi-schema.getsession.php">Schema::getSession</a> — Get schema session</li><li><a href="mysql-xdevapi-schema.gettable.php">Schema::getTable</a> — Get schema table</li><li><a href="mysql-xdevapi-schema.gettables.php">Schema::getTables</a> — Get schema tables</li></ul></li><li><a href="class.mysql-xdevapi-schemaobject.php">mysql_xdevapi\SchemaObject</a> — SchemaObject interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-schemaobject.getschema.php">SchemaObject::getSchema</a> — Get schema object</li></ul></li><li><a href="class.mysql-xdevapi-session.php">mysql_xdevapi\Session</a> — Session class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-session.close.php">Session::close</a> — Close session</li><li><a href="mysql-xdevapi-session.commit.php">Session::commit</a> — Commit transaction</li><li><a href="mysql-xdevapi-session.construct.php">Session::__construct</a> — Description constructor</li><li><a href="mysql-xdevapi-session.createschema.php">Session::createSchema</a> — Create new schema</li><li><a href="mysql-xdevapi-session.dropschema.php">Session::dropSchema</a> — Drop a schema</li><li><a href="mysql-xdevapi-session.generateuuid.php">Session::generateUUID</a> — Get new UUID</li><li><a href="mysql-xdevapi-session.getdefaultschema.php">Session::getDefaultSchema</a> — Get default schema name</li><li><a href="mysql-xdevapi-session.getschema.php">Session::getSchema</a> — Get a new schema object</li><li><a href="mysql-xdevapi-session.getschemas.php">Session::getSchemas</a> — Get the schemas</li><li><a href="mysql-xdevapi-session.getserverversion.php">Session::getServerVersion</a> — Get server version</li><li><a href="mysql-xdevapi-session.listclients.php">Session::listClients</a> — Get client list</li><li><a href="mysql-xdevapi-session.quotename.php">Session::quoteName</a> — Add quotes</li><li><a href="mysql-xdevapi-session.releasesavepoint.php">Session::releaseSavepoint</a> — Release set savepoint</li><li><a href="mysql-xdevapi-session.rollback.php">Session::rollback</a> — Rollback transaction</li><li><a href="mysql-xdevapi-session.rollbackto.php">Session::rollbackTo</a> — Rollback transaction to savepoint</li><li><a href="mysql-xdevapi-session.setsavepoint.php">Session::setSavepoint</a> — Create savepoint</li><li><a href="mysql-xdevapi-session.sql.php">Session::sql</a> — Create SQL query</li><li><a href="mysql-xdevapi-session.starttransaction.php">Session::startTransaction</a> — Start transaction</li></ul></li><li><a href="class.mysql-xdevapi-sqlstatement.php">mysql_xdevapi\SqlStatement</a> — SqlStatement class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-sqlstatement.bind.php">SqlStatement::bind</a> — Bind statement parameters</li><li><a href="mysql-xdevapi-sqlstatement.construct.php">SqlStatement::__construct</a> — Description constructor</li><li><a href="mysql-xdevapi-sqlstatement.execute.php">SqlStatement::execute</a> — Execute the operation</li><li><a href="mysql-xdevapi-sqlstatement.getnextresult.php">SqlStatement::getNextResult</a> — Get next result</li><li><a href="mysql-xdevapi-sqlstatement.getresult.php">SqlStatement::getResult</a> — Get result</li><li><a href="mysql-xdevapi-sqlstatement.hasmoreresults.php">SqlStatement::hasMoreResults</a> — Check for more results</li></ul></li><li><a href="class.mysql-xdevapi-sqlstatementresult.php">mysql_xdevapi\SqlStatementResult</a> — SqlStatementResult class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-sqlstatementresult.construct.php">SqlStatementResult::__construct</a> — Description constructor</li><li><a href="mysql-xdevapi-sqlstatementresult.fetchall.php">SqlStatementResult::fetchAll</a> — Get all rows from result</li><li><a href="mysql-xdevapi-sqlstatementresult.fetchone.php">SqlStatementResult::fetchOne</a> — Get single row</li><li><a href="mysql-xdevapi-sqlstatementresult.getaffecteditemscount.php">SqlStatementResult::getAffectedItemsCount</a> — Get affected row count</li><li><a href="mysql-xdevapi-sqlstatementresult.getcolumncount.php">SqlStatementResult::getColumnsCount</a> — Get column count</li><li><a href="mysql-xdevapi-sqlstatementresult.getcolumnnames.php">SqlStatementResult::getColumnNames</a> — Get column names</li><li><a href="mysql-xdevapi-sqlstatementresult.getcolumns.php">SqlStatementResult::getColumns</a> — Get columns</li><li><a href="mysql-xdevapi-sqlstatementresult.getgeneratedids.php">SqlStatementResult::getGeneratedIds</a> — Get generated ids</li><li><a href="mysql-xdevapi-sqlstatementresult.getlastinsertid.php">SqlStatementResult::getLastInsertId</a> — Get last insert id</li><li><a href="mysql-xdevapi-sqlstatementresult.getwarnings.php">SqlStatementResult::getWarnings</a> — Get warnings from last operation</li><li><a href="mysql-xdevapi-sqlstatementresult.getwarningcount.php">SqlStatementResult::getWarningsCount</a> — Get warning count from last operation</li><li><a href="mysql-xdevapi-sqlstatementresult.hasdata.php">SqlStatementResult::hasData</a> — Check if result has data</li><li><a href="mysql-xdevapi-sqlstatementresult.nextresult.php">SqlStatementResult::nextResult</a> — Get next result</li></ul></li><li><a href="class.mysql-xdevapi-statement.php">mysql_xdevapi\Statement</a> — Statement class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-statement.construct.php">Statement::__construct</a> — Description constructor</li><li><a href="mysql-xdevapi-statement.getnextresult.php">Statement::getNextResult</a> — Get next result</li><li><a href="mysql-xdevapi-statement.getresult.php">Statement::getResult</a> — Get result</li><li><a href="mysql-xdevapi-statement.hasmoreresults.php">Statement::hasMoreResults</a> — Check if more results</li></ul></li><li><a href="class.mysql-xdevapi-table.php">mysql_xdevapi\Table</a> — Table class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-table.construct.php">Table::__construct</a> — Table constructor</li><li><a href="mysql-xdevapi-table.count.php">Table::count</a> — Get row count</li><li><a href="mysql-xdevapi-table.delete.php">Table::delete</a> — Delete rows from table</li><li><a href="mysql-xdevapi-table.existsindatabase.php">Table::existsInDatabase</a> — Check if table exists in database</li><li><a href="mysql-xdevapi-table.getname.php">Table::getName</a> — Get table name</li><li><a href="mysql-xdevapi-table.getschema.php">Table::getSchema</a> — Get table schema</li><li><a href="mysql-xdevapi-table.getsession.php">Table::getSession</a> — Get table session</li><li><a href="mysql-xdevapi-table.insert.php">Table::insert</a> — Insert table rows</li><li><a href="mysql-xdevapi-table.isview.php">Table::isView</a> — Check if table is view</li><li><a href="mysql-xdevapi-table.select.php">Table::select</a> — Select rows from table</li><li><a href="mysql-xdevapi-table.update.php">Table::update</a> — Update rows in table</li></ul></li><li><a href="class.mysql-xdevapi-tabledelete.php">mysql_xdevapi\TableDelete</a> — TableDelete class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-tabledelete.bind.php">TableDelete::bind</a> — Bind delete query parameters</li><li><a href="mysql-xdevapi-tabledelete.construct.php">TableDelete::__construct</a> — TableDelete constructor</li><li><a href="mysql-xdevapi-tabledelete.execute.php">TableDelete::execute</a> — Execute delete query</li><li><a href="mysql-xdevapi-tabledelete.limit.php">TableDelete::limit</a> — Limit deleted rows</li><li><a href="mysql-xdevapi-tabledelete.orderby.php">TableDelete::orderby</a> — Set delete sort criteria</li><li><a href="mysql-xdevapi-tabledelete.where.php">TableDelete::where</a> — Set delete search condition</li></ul></li><li><a href="class.mysql-xdevapi-tableinsert.php">mysql_xdevapi\TableInsert</a> — TableInsert class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-tableinsert.construct.php">TableInsert::__construct</a> — TableInsert constructor</li><li><a href="mysql-xdevapi-tableinsert.execute.php">TableInsert::execute</a> — Execute insert query</li><li><a href="mysql-xdevapi-tableinsert.values.php">TableInsert::values</a> — Add insert row values</li></ul></li><li><a href="class.mysql-xdevapi-tableselect.php">mysql_xdevapi\TableSelect</a> — TableSelect class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-tableselect.bind.php">TableSelect::bind</a> — Bind select query parameters</li><li><a href="mysql-xdevapi-tableselect.construct.php">TableSelect::__construct</a> — TableSelect constructor</li><li><a href="mysql-xdevapi-tableselect.execute.php">TableSelect::execute</a> — Execute select statement</li><li><a href="mysql-xdevapi-tableselect.groupby.php">TableSelect::groupBy</a> — Set select grouping criteria</li><li><a href="mysql-xdevapi-tableselect.having.php">TableSelect::having</a> — Set select having condition</li><li><a href="mysql-xdevapi-tableselect.limit.php">TableSelect::limit</a> — Limit selected rows</li><li><a href="mysql-xdevapi-tableselect.lockexclusive.php">TableSelect::lockExclusive</a> — Execute EXCLUSIVE LOCK</li><li><a href="mysql-xdevapi-tableselect.lockshared.php">TableSelect::lockShared</a> — Execute SHARED LOCK</li><li><a href="mysql-xdevapi-tableselect.offset.php">TableSelect::offset</a> — Set limit offset</li><li><a href="mysql-xdevapi-tableselect.orderby.php">TableSelect::orderby</a> — Set select sort criteria</li><li><a href="mysql-xdevapi-tableselect.where.php">TableSelect::where</a> — Set select search condition</li></ul></li><li><a href="class.mysql-xdevapi-tableupdate.php">mysql_xdevapi\TableUpdate</a> — TableUpdate class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-tableupdate.bind.php">TableUpdate::bind</a> — Bind update query parameters</li><li><a href="mysql-xdevapi-tableupdate.construct.php">TableUpdate::__construct</a> — TableUpdate constructor</li><li><a href="mysql-xdevapi-tableupdate.execute.php">TableUpdate::execute</a> — Execute update query</li><li><a href="mysql-xdevapi-tableupdate.limit.php">TableUpdate::limit</a> — Limit update row count</li><li><a href="mysql-xdevapi-tableupdate.orderby.php">TableUpdate::orderby</a> — Set sorting criteria</li><li><a href="mysql-xdevapi-tableupdate.set.php">TableUpdate::set</a> — Add field to be updated</li><li><a href="mysql-xdevapi-tableupdate.where.php">TableUpdate::where</a> — Set search filter</li></ul></li><li><a href="class.mysql-xdevapi-warning.php">mysql_xdevapi\Warning</a> — Warning class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysql-xdevapi-warning.construct.php">Warning::__construct</a> — Warning constructor</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mysql_xdevapi/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.mysql-xdevapi%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.mysql-xdevapi&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.mysql-xdevapi.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="set.mysqlinfo.php">MySQL</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysql.php" title="Overview of the MySQL PHP drivers">Overview of the MySQL PHP drivers</a>
                        </li>
                                                <li class="">
                            <a href="book.mysqli.php" title="MySQLi">MySQLi</a>
                        </li>
                                                <li class="current">
                            <a href="book.mysql-xdevapi.php" title="Mysql_&#8203;xdevapi">Mysql_&#8203;xdevapi</a>
                        </li>
                                                <li class="">
                            <a href="book.mysql.php" title="MySQL (Original)">MySQL (Original)</a>
                        </li>
                                                <li class="">
                            <a href="book.mysqlnd.php" title="Mysqlnd">Mysqlnd</a>
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
