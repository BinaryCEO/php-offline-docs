<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Overview - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.overview.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.overview.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.overview.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.mysqli.php">
 <link rel="prev" href="https://www.php.net/manual/en/intro.mysqli.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.quickstart.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.overview.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.overview.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.overview.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.overview.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.overview.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.overview.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.overview.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.overview.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.overview.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.overview.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.overview.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Overview" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Overview - Manual" />
<meta name="twitter:description" content="Overview" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Overview - Manual" />
<meta itemprop="description" content="Overview" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Overview" />

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
        <a href="mysqli.quickstart.php">
          Quick start guide &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="intro.mysqli.php">
          &laquo; Introduction        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      </ul>
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
            <option value='en/mysqli.overview.php' selected="selected">English</option>
            <option value='de/mysqli.overview.php'>German</option>
            <option value='es/mysqli.overview.php'>Spanish</option>
            <option value='fr/mysqli.overview.php'>French</option>
            <option value='it/mysqli.overview.php'>Italian</option>
            <option value='ja/mysqli.overview.php'>Japanese</option>
            <option value='pt_BR/mysqli.overview.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.overview.php'>Russian</option>
            <option value='tr/mysqli.overview.php'>Turkish</option>
            <option value='uk/mysqli.overview.php'>Ukrainian</option>
            <option value='zh/mysqli.overview.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.overview" class="chapter">

  <h1 class="title">Overview</h1>


  <p class="para">
    This section provides an introduction to the options available to
    you when developing a PHP application that needs to interact with a
    MySQL database.
  </p>

  <p class="para">
    <strong>What is an API?</strong>
  </p>

  <p class="para">
    An Application Programming Interface, or API, defines the classes,
    methods, functions and variables that your application will need to
    call in order to carry out its desired task. In the case of PHP
    applications that need to communicate with databases the necessary
    APIs are usually exposed via PHP extensions.
  </p>

  <p class="para">
    APIs can be procedural or object-oriented. With a procedural API, you
    call functions to carry out tasks, with the object-oriented API you
    instantiate classes and then call methods on the resulting objects.
    Of the two, the latter is usually the preferred interface, as it is
    more modern and leads to better-organized code.
  </p>

  <p class="para">
    When writing PHP applications that need to connect to the MySQL
    server there are several API options available. This document
    discusses what is available and how to select the best solution for
    your application.
  </p>

  <p class="para">
    <strong>What is a Connector?</strong>
  </p>

  <p class="para">
    In the MySQL documentation, the term <em>connector</em>
    refers to a piece of software that allows your application to
    connect to the MySQL database server. MySQL provides connectors for
    a variety of languages, including PHP.
  </p>

  <p class="para">
    If your PHP application needs to communicate with a database server
    you will need to write PHP code to perform such activities as
    connecting to the database server, querying the database, and other
    database-related functions. Software is required to provide the API
    that your PHP application will use, and also handle the
    communication between your application and the database server,
    possibly using other intermediate libraries where necessary. This
    software is known generically as a connector, as it allows your
    application to <em>connect</em> to a database server.
  </p>

  <p class="para">
    <strong>What is a Driver?</strong>
  </p>

  <p class="para">
    A driver is a piece of software designed to communicate with a
    specific type of database server. The driver may also call a
    library, such as the MySQL Client Library or the MySQL Native
    Driver. These libraries implement the low-level protocol used to
    communicate with the MySQL database server.
  </p>

  <p class="para">
    By way of an example, the <a href="mysqli.overview.php#mysqli.overview.pdo" class="link">PHP
    Data Objects (PDO)</a> database abstraction layer may use one of
    several database-specific drivers. One of the drivers it has
    available is the PDO MYSQL driver, which allows it to interface with
    the MySQL server.
  </p>

  <p class="para">
    Sometimes people use the terms connector and driver interchangeably,
    this can be confusing. In the MySQL-related documentation the term 
    <q class="quote">driver</q> is reserved for software that provides
    the database-specific part of a connector package.
  </p>

  <p class="para">
    <strong>What is an Extension?</strong>
  </p>

  <p class="para">
    In the PHP documentation you will come across another term -
    <em>extension</em>. The PHP code consists of a core,
    with optional extensions to the core functionality. PHP&#039;s
    MySQL-related extensions, such as the mysqli
    extension, and the PDO MySQL driver extension, are
    implemented using the PHP extension framework.
  </p>

  <p class="para">
    An extension typically exposes an API to the PHP programmer, to
    allow its facilities to be used programmatically. However, some
    extensions which use the PHP extension framework do not expose an
    API to the PHP programmer.
  </p>

  <p class="para">
    The PDO MySQL driver extension, for example, does not expose an API
    to the PHP programmer, but provides an interface to the PDO layer
    above it.
  </p>

  <p class="para">
    The terms API and extension should not be taken to mean the same
    thing, as an extension may not necessarily expose an API to the
    programmer.
  </p>

  <p class="para">
    <strong>What are the main PHP API offerings for using
    MySQL?</strong>
  </p>

  <p class="para">
    There are two main API options when considering connecting to a
    MySQL database server:
  </p>

  <ul class="itemizedlist">

    <li class="listitem">
      <p class="para">
        PHP&#039;s mysqli Extension
      </p>
    </li>

    <li class="listitem">
      <p class="para">
        PHP Data Objects (PDO)
      </p>
    </li>

  </ul>

  <p class="para">
    Each has its own advantages and disadvantages. The following
    discussion aims to give a brief introduction to the key aspects of
    each API.
  </p>

  <p class="para">
    <strong>What is PHP&#039;s mysqli Extension?</strong>
  </p>

  <p class="para">
    The <code class="literal">mysqli</code> extension, or as it is sometimes
    known, the MySQL <em>improved</em> extension, was
    developed to take advantage of new features found in MySQL systems
    versions 4.1.3 and newer. The <code class="literal">mysqli</code> extension is
    included with PHP versions 5 and later.
  </p>

  <p class="para">
    The <code class="literal">mysqli</code> extension has a number of benefits,
    the key enhancements over the <code class="literal">mysql</code> extension
    being:

    <ul class="itemizedlist">

      <li class="listitem">
        <p class="para">
          Object-oriented interface
        </p>
      </li>

      <li class="listitem">
        <p class="para">
          Support for Prepared Statements
        </p>
      </li>

      <li class="listitem">
        <p class="para">
          Support for Multiple Statements
        </p>
      </li>

      <li class="listitem">
        <p class="para">
          Support for Transactions
        </p>
      </li>

      <li class="listitem">
        <p class="para">
          Enhanced debugging capabilities
        </p>
      </li>

    </ul>
  </p>

  <p class="para">
    As well as the object-oriented interface the extension also provides
    a procedural interface.
  </p>

  <p class="para">
    The <code class="literal">mysqli</code> extension is built using the PHP
    extension framework, its source code is located in the directory
    <var class="filename">ext/mysqli</var>.
  </p>

  <p class="para">
    For further information on the <code class="literal">mysqli</code> extension,
    see <a href="book.mysqli.php" class="xref">MySQLi</a>.
  </p>

  <p class="para" id="mysqli.overview.pdo">
    <strong>What is PDO?</strong>
  </p>

  <p class="para">
    PHP Data Objects, or PDO, is a database abstraction layer
    specifically for PHP applications. PDO provides a consistent API for
    your PHP application regardless of the type of database server your
    application will connect to. In theory, if you are using the PDO
    API, you could switch the database server you used, from say
    Firebird to MySQL, and only need to make minor changes to your PHP
    code.
  </p>

  <p class="para">
    Other examples of database abstraction layers include JDBC for Java
    applications and DBI for Perl.
  </p>

  <p class="para">
    While PDO has its advantages, such as a clean, simple, portable API,
    its main disadvantage is that it doesn&#039;t allow you to use all of the
    advanced features that are available in the latest versions of MySQL
    server. For example, PDO does not allow you to use MySQL&#039;s support
    for Multiple Statements.
  </p>

  <p class="para">
    PDO is implemented using the PHP extension framework, its source
    code is located in the directory <var class="filename">ext/pdo</var>.
  </p>

  <p class="para">
    For further information on PDO, see the
    <a href="book.pdo.php" class="xref">PDO</a>.
  </p>

  <p class="para">
    <strong>What is the PDO MYSQL driver?</strong>
  </p>

  <p class="para">
    The PDO MYSQL driver is not an API as such, at least from the PHP
    programmer&#039;s perspective. In fact, the PDO MYSQL driver sits in the
    layer below PDO itself and provides MySQL-specific functionality.
    The programmer still calls the PDO API, but PDO uses the PDO MYSQL
    driver to carry out communication with the MySQL server.
  </p>

  <p class="para">
    The PDO MYSQL driver is one of several available PDO drivers. Other
    PDO drivers available include those for the Firebird and PostgreSQL
    database servers.
  </p>

  <p class="para">
    The PDO MYSQL driver is implemented using the PHP extension
    framework. Its source code is located in the directory
    <var class="filename">ext/pdo_mysql</var>. It does not expose an API to the
    PHP programmer.
  </p>

  <p class="para">
    For further information on the PDO MYSQL driver, see
    <a href="ref.pdo-mysql.php" class="xref">MySQL PDO Driver</a>.
  </p>

  <p class="para" id="mysqli.overview.mysqlnd">
    <strong>What is PHP&#039;s MySQL Native Driver?</strong>
  </p>

  <p class="para">
    In order to communicate with the MySQL database server, <code class="literal">mysqli</code> and
    the PDO MYSQL driver each use a low-level library that implements
    the required protocol. In the past, the only available library was
    the MySQL Client Library, otherwise known as
    <code class="literal">libmysqlclient</code>.
  </p>

  <p class="para">
    However, the interface presented by <code class="literal">libmysqlclient</code> was
    not optimized for communication with PHP applications, as
    <code class="literal">libmysqlclient</code> was originally designed with C
    applications in mind. For this reason, the MySQL Native Driver,
    <code class="literal">mysqlnd</code>, was developed as an alternative to
    <code class="literal">libmysqlclient</code> for PHP applications.
  </p>

  <p class="para">
    Both, the <code class="literal">mysqli</code> extension and the PDO MySQL driver can
    each be individually configured to use either
    <code class="literal">libmysqlclient</code> or <code class="literal">mysqlnd</code>. As
    <code class="literal">mysqlnd</code> is designed specifically to be utilised
    in the PHP system it has numerous memory and speed enhancements over
    <code class="literal">libmysqlclient</code>. You are strongly encouraged to take
    advantage of these improvements.
  </p>

  <p class="para">
    The MySQL Native Driver is implemented using the PHP extension
    framework. The source code is located in
    <var class="filename">ext/mysqlnd</var>. It does not expose an API to the
    PHP programmer.
  </p>



  <p class="para">
    <strong>Comparison of Features</strong>
  </p>

  <p class="para">
    The following table compares the functionality of the main
    methods of connecting to MySQL from PHP:
  </p>

  <table id="mysqli.overview.option.comparison" class="doctable table">
   <caption><strong>Comparison of MySQL API options for PHP</strong></caption>
    
      <col width="34*" />
      <col width="33*" />
      <col width="33*" />
      <thead>
        <tr>
          <th class="empty">&nbsp;</th>
          <th>PHP&#039;s mysqli Extension</th>
          <th>PDO (Using PDO MySQL Driver and MySQL Native Driver)</th>
        </tr>

      </thead>

      <tbody class="tbody">
        <tr>
          <td>PHP version introduced</td>
          <td>5.0</td>
          <td>5.0</td>
        </tr>

        <tr>
          <td>MySQL development status</td>
          <td>Active development</td>
          <td>Active development</td>
        </tr>

        <tr>
          <td>API supports Charsets</td>
          <td>Yes</td>
          <td>Yes</td>
        </tr>

        <tr>
          <td>API supports server-side Prepared Statements</td>
          <td>Yes</td>
          <td>Yes</td>
        </tr>

        <tr>
          <td>API supports client-side Prepared Statements</td>
          <td>No</td>
          <td>Yes</td>
        </tr>

        <tr>
          <td>API supports Stored Procedures</td>
          <td>Yes</td>
          <td>Yes</td>
        </tr>

        <tr>
          <td>API supports Multiple Statements</td>
          <td>Yes</td>
          <td>Most</td>
        </tr>

        <tr>
          <td>Supports all MySQL 4.1+ functionality</td>
          <td>Yes</td>
          <td>Most</td>
        </tr>

      </tbody>
    
  </table>


</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/overview.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.overview%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.overview&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.overview.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113456">  <div class="votes">
    <div id="Vu113456">
    <a href="/manual/vote-note.php?id=113456&amp;page=mysqli.overview&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113456">
    <a href="/manual/vote-note.php?id=113456&amp;page=mysqli.overview&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113456" title="56% like this...">
    30
    </div>
  </div>
  <a href="#113456" class="name">
  <strong class="user"><em>guatebus at  dot gmail dot com</em></strong></a><a class="genanchor" href="#113456"> &para;</a><div class="date" title="2013-10-13 12:00"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113456">
<div class="phpcode"><code><span class="html">The text: "PDO does not allow you to use MySQL's support for Multiple Statements" is outdated.<br /><br />Since v5.3, PHP intoduced multiple statement support into PDO (by PDO_MYSQLND driver replacing the previous PDO_MYSQL).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli.overview&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.overview.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.mysqli.php">MySQLi</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.mysqli.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli.overview.php" title="Overview">Overview</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.php" title="Quick start guide">Quick start guide</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.persistconns.php" title="The mysqli Extension and Persistent Connections">The mysqli Extension and Persistent Connections</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.notes.php" title="Notes">Notes</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.summary.php" title="The MySQLi Extension Function Summary">The MySQLi Extension Function Summary</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli.php" title="mysqli">mysqli</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-stmt.php" title="mysqli_&#8203;stmt">mysqli_&#8203;stmt</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-result.php" title="mysqli_&#8203;result">mysqli_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-driver.php" title="mysqli_&#8203;driver">mysqli_&#8203;driver</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-warning.php" title="mysqli_&#8203;warning">mysqli_&#8203;warning</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-sql-exception.php" title="mysqli_&#8203;sql_&#8203;exception">mysqli_&#8203;sql_&#8203;exception</a>
                        </li>
                                                <li class="">
                            <a href="ref.mysqli.php" title="Aliases and deprecated Mysqli Functions">Aliases and deprecated Mysqli Functions</a>
                        </li>
                                                <li class="">
                            <a href="changelog.mysqli.php" title="Changelog">Changelog</a>
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
