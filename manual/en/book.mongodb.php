<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MongoDB - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.mongodb.php">
 <link rel="shorturl" href="https://www.php.net/mongodb">
 <link rel="alternate" href="https://www.php.net/mongodb" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.database.vendors.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.db2-tables.php">
 <link rel="next" href="https://www.php.net/manual/en/mongodb.setup.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.mongodb.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.mongodb.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.mongodb.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.mongodb.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.mongodb.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.mongodb.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.mongodb.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.mongodb.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.mongodb.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.mongodb.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.mongodb.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="MongoDB Extension" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MongoDB - Manual" />
<meta name="twitter:description" content="MongoDB Extension" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MongoDB - Manual" />
<meta itemprop="description" content="MongoDB Extension" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="MongoDB Extension" />

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
        <a href="mongodb.setup.php">
          Installing/Configuring &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.db2-tables.php">
          &laquo; db2_tables        </a>
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
            <option value='en/book.mongodb.php' selected="selected">English</option>
            <option value='de/book.mongodb.php'>German</option>
            <option value='es/book.mongodb.php'>Spanish</option>
            <option value='fr/book.mongodb.php'>French</option>
            <option value='it/book.mongodb.php'>Italian</option>
            <option value='ja/book.mongodb.php'>Japanese</option>
            <option value='pt_BR/book.mongodb.php'>Brazilian Portuguese</option>
            <option value='ru/book.mongodb.php'>Russian</option>
            <option value='tr/book.mongodb.php'>Turkish</option>
            <option value='uk/book.mongodb.php'>Ukrainian</option>
            <option value='zh/book.mongodb.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.mongodb" class="book">
 
 <h1 class="title">MongoDB Extension</h1>
 

 <div class="info">
  <div class="abstract">
   <p class="simpara">
    This extension is developed atop the
    <a href="https://github.com/mongodb/mongo-c-driver" class="link external">&raquo;&nbsp;libmongoc</a> and
    <a href="https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson" class="link external">&raquo;&nbsp;libbson</a> libraries.
    It provides a minimal API for core driver functionality:
    <a href="class.mongodb-driver-command.php" class="link">commands</a>,
    <a href="class.mongodb-driver-query.php" class="link">queries</a>,
    <a href="class.mongodb-driver-bulkwrite.php" class="link">writes</a>,
    <a href="class.mongodb-driver-manager.php" class="link">connection management</a>,
    and <a href="mongodb.bson.php" class="link">BSON serialization</a>.
   </p>
   <p class="simpara">
    Userland PHP libraries that depend on this extension may provide higher
    level APIs, such as query builders, individual command helper methods, and
    GridFS. Application developers should consider using this extension in
    conjunction with the
    <a href="https://github.com/mongodb/mongo-php-library" class="link external">&raquo;&nbsp;MongoDB PHP library</a>, which
    implements the same higher level APIs found in MongoDB drivers for other
    languages. This separation of concerns allows the extension to focus on
    essential features for which an extension implementation is paramount for
    performance.
   </p>
  </div>
 </div>

  






  






  


 




  






  







  


 

  


 

  


 

  


 

<ul class="chunklist chunklist_book"><li><a href="mongodb.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="mongodb.requirements.php">Requirements</a></li><li><a href="mongodb.installation.php">Installation</a></li><li><a href="mongodb.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="mongodb.constants.php">Predefined Constants</a></li><li><a href="mongodb.tutorial.php">Tutorials</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="mongodb.tutorial.library.php">Using the PHP Library for MongoDB (PHPLIB)</a></li><li><a href="mongodb.tutorial.apm.php">Application Performance Monitoring (APM)</a></li></ul></li><li><a href="mongodb.architecture.php">Driver Architecture and Internals</a> — Explains the driver architecture, and special features<ul class="chunklist chunklist_book chunklist_children"><li><a href="mongodb.overview.php">Architecture</a> — Architecture Overview</li><li><a href="mongodb.connection-handling.php">Connections</a> — Connection handling and persistence</li><li><a href="mongodb.persistence.php">Persisting Data</a> — Serialization and deserialization of PHP variables into MongoDB</li></ul></li><li><a href="mongodb.security.php">Security</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="mongodb.security.request_injection.php">Request Injection Attacks</a></li><li><a href="mongodb.security.script_injection.php">Script Injection Attacks</a></li></ul></li><li><a href="mongodb.mongodb.php">MongoDB\Driver</a> — MongoDB Extension Classes<ul class="chunklist chunklist_book chunklist_children"><li><a href="class.mongodb-driver-manager.php">MongoDB\Driver\Manager</a> — The MongoDB\Driver\Manager class</li><li><a href="class.mongodb-driver-command.php">MongoDB\Driver\Command</a> — The MongoDB\Driver\Command class</li><li><a href="class.mongodb-driver-query.php">MongoDB\Driver\Query</a> — The MongoDB\Driver\Query class</li><li><a href="class.mongodb-driver-bulkwrite.php">MongoDB\Driver\BulkWrite</a> — The MongoDB\Driver\BulkWrite class</li><li><a href="class.mongodb-driver-bulkwritecommand.php">MongoDB\Driver\BulkWriteCommand</a> — The MongoDB\Driver\BulkWriteCommand class</li><li><a href="class.mongodb-driver-session.php">MongoDB\Driver\Session</a> — The MongoDB\Driver\Session class</li><li><a href="class.mongodb-driver-clientencryption.php">MongoDB\Driver\ClientEncryption</a> — The MongoDB\Driver\ClientEncryption class</li><li><a href="class.mongodb-driver-serverapi.php">MongoDB\Driver\ServerApi</a> — The MongoDB\Driver\ServerApi class</li><li><a href="class.mongodb-driver-writeconcern.php">MongoDB\Driver\WriteConcern</a> — The MongoDB\Driver\WriteConcern class</li><li><a href="class.mongodb-driver-readpreference.php">MongoDB\Driver\ReadPreference</a> — The MongoDB\Driver\ReadPreference class</li><li><a href="class.mongodb-driver-readconcern.php">MongoDB\Driver\ReadConcern</a> — The MongoDB\Driver\ReadConcern class</li><li><a href="class.mongodb-driver-cursor.php">MongoDB\Driver\Cursor</a> — The MongoDB\Driver\Cursor class</li><li><a href="class.mongodb-driver-cursorid.php">MongoDB\Driver\CursorId</a> — The MongoDB\Driver\CursorId class</li><li><a href="class.mongodb-driver-cursorinterface.php">MongoDB\Driver\CursorInterface</a> — The MongoDB\Driver\CursorInterface interface</li><li><a href="class.mongodb-driver-server.php">MongoDB\Driver\Server</a> — The MongoDB\Driver\Server class</li><li><a href="class.mongodb-driver-serverdescription.php">MongoDB\Driver\ServerDescription</a> — The MongoDB\Driver\ServerDescription class</li><li><a href="class.mongodb-driver-topologydescription.php">MongoDB\Driver\TopologyDescription</a> — The MongoDB\Driver\TopologyDescription class</li><li><a href="class.mongodb-driver-writeconcernerror.php">MongoDB\Driver\WriteConcernError</a> — The MongoDB\Driver\WriteConcernError class</li><li><a href="class.mongodb-driver-writeerror.php">MongoDB\Driver\WriteError</a> — The MongoDB\Driver\WriteError class</li><li><a href="class.mongodb-driver-writeresult.php">MongoDB\Driver\WriteResult</a> — The MongoDB\Driver\WriteResult class</li><li><a href="class.mongodb-driver-bulkwritecommandresult.php">MongoDB\Driver\BulkWriteCommandResult</a> — The MongoDB\Driver\BulkWriteCommandResult class</li></ul></li><li><a href="mongodb.bson.php">MongoDB\BSON</a> — MongoDB BSON Classes and Functions<ul class="chunklist chunklist_book chunklist_children"><li><a href="ref.bson.functions.php">Functions</a></li><li><a href="class.mongodb-bson-document.php">MongoDB\BSON\Document</a> — The MongoDB\BSON\Document class</li><li><a href="class.mongodb-bson-packedarray.php">MongoDB\BSON\PackedArray</a> — The MongoDB\BSON\PackedArray class</li><li><a href="class.mongodb-bson-iterator.php">MongoDB\BSON\Iterator</a> — The MongoDB\BSON\Iterator class</li><li><a href="class.mongodb-bson-binary.php">MongoDB\BSON\Binary</a> — The MongoDB\BSON\Binary class</li><li><a href="class.mongodb-bson-decimal128.php">MongoDB\BSON\Decimal128</a> — The MongoDB\BSON\Decimal128 class</li><li><a href="class.mongodb-bson-javascript.php">MongoDB\BSON\Javascript</a> — The MongoDB\BSON\Javascript class</li><li><a href="class.mongodb-bson-maxkey.php">MongoDB\BSON\MaxKey</a> — The MongoDB\BSON\MaxKey class</li><li><a href="class.mongodb-bson-minkey.php">MongoDB\BSON\MinKey</a> — The MongoDB\BSON\MinKey class</li><li><a href="class.mongodb-bson-objectid.php">MongoDB\BSON\ObjectId</a> — The MongoDB\BSON\ObjectId class</li><li><a href="class.mongodb-bson-regex.php">MongoDB\BSON\Regex</a> — The MongoDB\BSON\Regex class</li><li><a href="class.mongodb-bson-timestamp.php">MongoDB\BSON\Timestamp</a> — The MongoDB\BSON\Timestamp class</li><li><a href="class.mongodb-bson-utcdatetime.php">MongoDB\BSON\UTCDateTime</a> — The MongoDB\BSON\UTCDateTime class</li><li><a href="class.mongodb-bson-type.php">MongoDB\BSON\Type</a> — The MongoDB\BSON\Type interface</li><li><a href="class.mongodb-bson-persistable.php">MongoDB\BSON\Persistable</a> — The MongoDB\BSON\Persistable interface</li><li><a href="class.mongodb-bson-serializable.php">MongoDB\BSON\Serializable</a> — The MongoDB\BSON\Serializable interface</li><li><a href="class.mongodb-bson-unserializable.php">MongoDB\BSON\Unserializable</a> — The MongoDB\BSON\Unserializable interface</li><li><a href="class.mongodb-bson-binaryinterface.php">MongoDB\BSON\BinaryInterface</a> — The MongoDB\BSON\BinaryInterface interface</li><li><a href="class.mongodb-bson-decimal128interface.php">MongoDB\BSON\Decimal128Interface</a> — The MongoDB\BSON\Decimal128Interface interface</li><li><a href="class.mongodb-bson-javascriptinterface.php">MongoDB\BSON\JavascriptInterface</a> — The MongoDB\BSON\JavascriptInterface interface</li><li><a href="class.mongodb-bson-maxkeyinterface.php">MongoDB\BSON\MaxKeyInterface</a> — The MongoDB\BSON\MaxKeyInterface interface</li><li><a href="class.mongodb-bson-minkeyinterface.php">MongoDB\BSON\MinKeyInterface</a> — The MongoDB\BSON\MinKeyInterface interface</li><li><a href="class.mongodb-bson-objectidinterface.php">MongoDB\BSON\ObjectIdInterface</a> — The MongoDB\BSON\ObjectIdInterface interface</li><li><a href="class.mongodb-bson-regexinterface.php">MongoDB\BSON\RegexInterface</a> — The MongoDB\BSON\RegexInterface interface</li><li><a href="class.mongodb-bson-timestampinterface.php">MongoDB\BSON\TimestampInterface</a> — The MongoDB\BSON\TimestampInterface interface</li><li><a href="class.mongodb-bson-utcdatetimeinterface.php">MongoDB\BSON\UTCDateTimeInterface</a> — The MongoDB\BSON\UTCDateTimeInterface interface</li><li><a href="class.mongodb-bson-dbpointer.php">MongoDB\BSON\DBPointer</a> — The MongoDB\BSON\DBPointer class</li><li><a href="class.mongodb-bson-int64.php">MongoDB\BSON\Int64</a> — The MongoDB\BSON\Int64 class</li><li><a href="class.mongodb-bson-symbol.php">MongoDB\BSON\Symbol</a> — The MongoDB\BSON\Symbol class</li><li><a href="class.mongodb-bson-undefined.php">MongoDB\BSON\Undefined</a> — The MongoDB\BSON\Undefined class</li></ul></li><li><a href="mongodb.monitoring.php">MongoDB\Driver\Monitoring</a> — Monitoring classes and subscriber functions<ul class="chunklist chunklist_book chunklist_children"><li><a href="ref.monitoring.functions.php">Functions</a></li><li><a href="class.mongodb-driver-monitoring-commandfailedevent.php">MongoDB\Driver\Monitoring\CommandFailedEvent</a> — The MongoDB\Driver\Monitoring\CommandFailedEvent class</li><li><a href="class.mongodb-driver-monitoring-commandstartedevent.php">MongoDB\Driver\Monitoring\CommandStartedEvent</a> — The MongoDB\Driver\Monitoring\CommandStartedEvent class</li><li><a href="class.mongodb-driver-monitoring-commandsucceededevent.php">MongoDB\Driver\Monitoring\CommandSucceededEvent</a> — The MongoDB\Driver\Monitoring\CommandSucceededEvent class</li><li><a href="class.mongodb-driver-monitoring-serverchangedevent.php">MongoDB\Driver\Monitoring\ServerChangedEvent</a> — The MongoDB\Driver\Monitoring\ServerChangedEvent class</li><li><a href="class.mongodb-driver-monitoring-serverclosedevent.php">MongoDB\Driver\Monitoring\ServerClosedEvent</a> — The MongoDB\Driver\Monitoring\ServerClosedEvent class</li><li><a href="class.mongodb-driver-monitoring-serveropeningevent.php">MongoDB\Driver\Monitoring\ServerOpeningEvent</a> — The MongoDB\Driver\Monitoring\ServerOpeningEvent class</li><li><a href="class.mongodb-driver-monitoring-serverheartbeatfailedevent.php">MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent</a> — The MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent class</li><li><a href="class.mongodb-driver-monitoring-serverheartbeatstartedevent.php">MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent</a> — The MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent class</li><li><a href="class.mongodb-driver-monitoring-serverheartbeatsucceededevent.php">MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent</a> — The MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent class</li><li><a href="class.mongodb-driver-monitoring-topologychangedevent.php">MongoDB\Driver\Monitoring\TopologyChangedEvent</a> — The MongoDB\Driver\Monitoring\TopologyChangedEvent class</li><li><a href="class.mongodb-driver-monitoring-topologyclosedevent.php">MongoDB\Driver\Monitoring\TopologyClosedEvent</a> — The MongoDB\Driver\Monitoring\TopologyClosedEvent class</li><li><a href="class.mongodb-driver-monitoring-topologyopeningevent.php">MongoDB\Driver\Monitoring\TopologyOpeningEvent</a> — The MongoDB\Driver\Monitoring\TopologyOpeningEvent class</li><li><a href="class.mongodb-driver-monitoring-commandsubscriber.php">MongoDB\Driver\Monitoring\CommandSubscriber</a> — The MongoDB\Driver\Monitoring\CommandSubscriber interface</li><li><a href="class.mongodb-driver-monitoring-logsubscriber.php">MongoDB\Driver\Monitoring\LogSubscriber</a> — The MongoDB\Driver\Monitoring\LogSubscriber interface</li><li><a href="class.mongodb-driver-monitoring-sdamsubscriber.php">MongoDB\Driver\Monitoring\SDAMSubscriber</a> — The MongoDB\Driver\Monitoring\SDAMSubscriber interface</li><li><a href="class.mongodb-driver-monitoring-subscriber.php">MongoDB\Driver\Monitoring\Subscriber</a> — The MongoDB\Driver\Monitoring\Subscriber interface</li></ul></li><li><a href="mongodb.exceptions.php">MongoDB\Driver\Exception</a> — Exception classes<ul class="chunklist chunklist_book chunklist_children"><li><a href="class.mongodb-driver-exception-authenticationexception.php">MongoDB\Driver\Exception\AuthenticationException</a> — The MongoDB\Driver\Exception\AuthenticationException class</li><li><a href="class.mongodb-driver-exception-bulkwriteexception.php">MongoDB\Driver\Exception\BulkWriteException</a> — The MongoDB\Driver\Exception\BulkWriteException class</li><li><a href="class.mongodb-driver-exception-bulkwritecommandexception.php">MongoDB\Driver\Exception\BulkWriteCommandException</a> — The MongoDB\Driver\Exception\BulkWriteCommandException class</li><li><a href="class.mongodb-driver-exception-commandexception.php">MongoDB\Driver\Exception\CommandException</a> — The MongoDB\Driver\Exception\CommandException class</li><li><a href="class.mongodb-driver-exception-connectionexception.php">MongoDB\Driver\Exception\ConnectionException</a> — The MongoDB\Driver\Exception\ConnectionException class</li><li><a href="class.mongodb-driver-exception-connectiontimeoutexception.php">MongoDB\Driver\Exception\ConnectionTimeoutException</a> — The MongoDB\Driver\Exception\ConnectionTimeoutException class</li><li><a href="class.mongodb-driver-exception-encryptionexception.php">MongoDB\Driver\Exception\EncryptionException</a> — The MongoDB\Driver\Exception\EncryptionException class</li><li><a href="class.mongodb-driver-exception-exception.php">MongoDB\Driver\Exception\Exception</a> — The MongoDB\Driver\Exception\Exception interface</li><li><a href="class.mongodb-driver-exception-executiontimeoutexception.php">MongoDB\Driver\Exception\ExecutionTimeoutException</a> — The MongoDB\Driver\Exception\ExecutionTimeoutException class</li><li><a href="class.mongodb-driver-exception-invalidargumentexception.php">MongoDB\Driver\Exception\InvalidArgumentException</a> — The MongoDB\Driver\Exception\InvalidArgumentException class</li><li><a href="class.mongodb-driver-exception-logicexception.php">MongoDB\Driver\Exception\LogicException</a> — The MongoDB\Driver\Exception\LogicException class</li><li><a href="class.mongodb-driver-exception-runtimeexception.php">MongoDB\Driver\Exception\RuntimeException</a> — The MongoDB\Driver\Exception\RuntimeException class</li><li><a href="class.mongodb-driver-exception-serverexception.php">MongoDB\Driver\Exception\ServerException</a> — The MongoDB\Driver\Exception\ServerException class</li><li><a href="class.mongodb-driver-exception-sslconnectionexception.php">MongoDB\Driver\Exception\SSLConnectionException</a> — The MongoDB\Driver\Exception\SSLConnectionException class</li><li><a href="class.mongodb-driver-exception-unexpectedvalueexception.php">MongoDB\Driver\Exception\UnexpectedValueException</a> — The MongoDB\Driver\Exception\UnexpectedValueException class</li><li><a href="class.mongodb-driver-exception-writeexception.php">MongoDB\Driver\Exception\WriteException</a> — The MongoDB\Driver\Exception\WriteException class</li><li><a href="mongodb.exceptions.tree.php">Class Tree</a> — MongoDB Exception Class Tree</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mongodb/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.mongodb%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.mongodb&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.mongodb.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="123969">  <div class="votes">
    <div id="Vu123969">
    <a href="/manual/vote-note.php?id=123969&amp;page=book.mongodb&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123969">
    <a href="/manual/vote-note.php?id=123969&amp;page=book.mongodb&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123969" title="75% like this...">
    6
    </div>
  </div>
  <a href="#123969" class="name">
  <strong class="user"><em>mike at eastghost dot com</em></strong></a><a class="genanchor" href="#123969"> &para;</a><div class="date" title="2019-06-20 03:52"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123969">
<div class="phpcode"><code><span class="html">The 'high level' driver is here <br /><br /><a href="https://docs.mongodb.com/php-library/current/reference/" rel="nofollow" target="_blank">https://docs.mongodb.com/php-library/current/reference/</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.mongodb&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.mongodb.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
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
                                                <li class="current">
                            <a href="book.mongodb.php" title="MongoDB">MongoDB</a>
                        </li>
                                                <li class="">
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
