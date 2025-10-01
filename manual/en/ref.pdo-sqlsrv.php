<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MS SQL Server PDO Driver - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.pdo-sqlsrv.php">
 <link rel="shorturl" href="https://www.php.net/pdo-sqlsrv">
 <link rel="alternate" href="https://www.php.net/pdo-sqlsrv" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/pdo.drivers.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdo-mysql.getwarningcount.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.pdo-sqlsrv.connection.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.pdo-sqlsrv.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.pdo-sqlsrv.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.pdo-sqlsrv.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.pdo-sqlsrv.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.pdo-sqlsrv.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.pdo-sqlsrv.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.pdo-sqlsrv.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.pdo-sqlsrv.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.pdo-sqlsrv.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.pdo-sqlsrv.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.pdo-sqlsrv.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Microsoft SQL Server PDO Driver (PDO_SQLSRV)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MS SQL Server PDO Driver - Manual" />
<meta name="twitter:description" content="Microsoft SQL Server PDO Driver (PDO_SQLSRV)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MS SQL Server PDO Driver - Manual" />
<meta itemprop="description" content="Microsoft SQL Server PDO Driver (PDO_SQLSRV)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Microsoft SQL Server PDO Driver (PDO_SQLSRV)" />

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
        <a href="ref.pdo-sqlsrv.connection.php">
          PDO_SQLSRV DSN &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdo-mysql.getwarningcount.php">
          &laquo; Pdo\Mysql::getWarningCount        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      <li><a href='pdo.drivers.php'>PDO Drivers</a></li>      </ul>
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
            <option value='en/ref.pdo-sqlsrv.php' selected="selected">English</option>
            <option value='de/ref.pdo-sqlsrv.php'>German</option>
            <option value='es/ref.pdo-sqlsrv.php'>Spanish</option>
            <option value='fr/ref.pdo-sqlsrv.php'>French</option>
            <option value='it/ref.pdo-sqlsrv.php'>Italian</option>
            <option value='ja/ref.pdo-sqlsrv.php'>Japanese</option>
            <option value='pt_BR/ref.pdo-sqlsrv.php'>Brazilian Portuguese</option>
            <option value='ru/ref.pdo-sqlsrv.php'>Russian</option>
            <option value='tr/ref.pdo-sqlsrv.php'>Turkish</option>
            <option value='uk/ref.pdo-sqlsrv.php'>Ukrainian</option>
            <option value='zh/ref.pdo-sqlsrv.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.pdo-sqlsrv" class="reference">
 
  <h1 class="title">Microsoft SQL Server PDO Driver (PDO_SQLSRV)</h1>
  
  <div class="partintro">

   <div class="section" id="pdo-sqlsrv.intro">
   <h2 class="title">Introduction</h2>
    <p class="para">
     PDO_SQLSRV is a driver that implements the <a href="intro.pdo.php" class="link">PHP
     Data Objects (PDO) interface</a>
     to enable access from PHP to MS SQL Server (starting with SQL Server 2005)
     and SQL Azure databases.
    </p>
   </div>
   

<div class="section" id="ref.pdo-sqlsrv.installation">
 <h2 class="title">Installation</h2>
 <p class="para">
  The most recent version of the driver is available for download here:
  <a href="http://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx" class="link external">&raquo;&nbsp;SQLSRV download</a>.
  The driver sources are hosted in a <a href="https://github.com/microsoft/msphpsql" class="link external">&raquo;&nbsp;public repository</a>.
 </p>
 <p class="para">
  For more information about system requirements, see 
  <a href="http://msdn.microsoft.com/en-us/library/cc296170.aspx" class="link external">&raquo;&nbsp;SQLSRV System Requirements</a>.
 </p>
 <p class="para">
  On Windows the PDO_SQLSRV extension is enabled by downloading and adding
  appropriate DLL files to the PHP extension directory and the corresponding
  entry to the <var class="filename">php.ini</var> file.
 </p>
 <p class="para">
  On Linux and macOS, the PDO_SQLSRV extension can be installed using
  <a href="https://pecl.php.net/" class="link external">&raquo;&nbsp;PECL</a>.
  See the <a href="https://docs.microsoft.com/en-us/sql/connect/php/installation-tutorial-linux-mac" class="link external">&raquo;&nbsp;installation tutorial</a>
  for details.
 </p>
</div>



   

<div class="section" id="pdo-sqlsrv.constants">
 <h2 class="title">Predefined Constants</h2>
 <p class="simpara">The constants below are defined by
this driver, and will only be available when the extension has been either
compiled into PHP or dynamically loaded at runtime. In addition, these
driver-specific constants should only be used if you are using this driver.
Using driver-specific attributes with another driver may result in
unexpected behaviour. <span class="function"><a href="pdo.getattribute.php" class="function">PDO::getAttribute()</a></span> may be used to
obtain the <strong><code><a href="pdo.constants.php#pdo.constants.attr-driver-name">PDO::ATTR_DRIVER_NAME</a></code></strong> attribute to check the
driver, if your code can run against multiple drivers.</p>
 <dl>
  
   <dt id="pdo.constants.sqlsrv-txn-read-uncommitted">
    <strong><code><a href="ref.pdo-sqlsrv.php#pdo.constants.sqlsrv-txn-read-uncommitted">PDO::SQLSRV_TXN_READ_UNCOMMITTED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation. 
     This constant sets the transaction isolation level for the connection to 
     Read Uncommitted.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.sqlsrv-txn-read-committed">
    <strong><code><a href="ref.pdo-sqlsrv.php#pdo.constants.sqlsrv-txn-read-committed">PDO::SQLSRV_TXN_READ_COMMITTED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation. 
     This constant sets the transaction isolation level for the connection to 
     Read Committed.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.sqlsrv-txn-repeatable-read">
    <strong><code><a href="ref.pdo-sqlsrv.php#pdo.constants.sqlsrv-txn-repeatable-read">PDO::SQLSRV_TXN_REPEATABLE_READ</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation. 
     This constant sets the transaction isolation level for the connection to 
     Repeateable Read.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.sqlsrv-txn-snapshot">
    <strong><code><a href="ref.pdo-sqlsrv.php#pdo.constants.sqlsrv-txn-snapshot">PDO::SQLSRV_TXN_SNAPSHOT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation. 
     This constant sets the transaction isolation level for the connection to Snapshot.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.sqlsrv-txn-serializable">
    <strong><code><a href="ref.pdo-sqlsrv.php#pdo.constants.sqlsrv-txn-serializable">PDO::SQLSRV_TXN_SERIALIZABLE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This constant is an acceptable value for the SQLSRV DSN key TransactionIsolation. 
     This constant sets the transaction isolation level for the connection to 
     Serializable.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.sqlsrv-encoding-binary">
    <strong><code><a href="ref.pdo-sqlsrv.php#pdo.constants.sqlsrv-encoding-binary">PDO::SQLSRV_ENCODING_BINARY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that data is sent/retrieved as a raw byte stream to/from the server 
     without performing encoding or translation. This constant can be passed to 
     PDOStatement::setAttribute, PDO::prepare, PDOStatement::bindColumn, and 
     PDOStatement::bindParam.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.sqlsrv-encoding-system">
    <strong><code><a href="ref.pdo-sqlsrv.php#pdo.constants.sqlsrv-encoding-system">PDO::SQLSRV_ENCODING_SYSTEM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that data is sent/retrieved to/from the server as 8-bit characters 
     as specified in the code page of the Windows locale that is set on the system. 
     Any multi-byte characters or characters that do not map into this code page 
     are substituted with a single byte question mark (?) character. This constant 
     can be passed to PDOStatement::setAttribute, PDO::setAttribute, PDO::prepare, 
     PDOStatement::bindColumn, and PDOStatement::bindParam.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.sqlsrv-encoding-utf8">
    <strong><code><a href="ref.pdo-sqlsrv.php#pdo.constants.sqlsrv-encoding-utf8">PDO::SQLSRV_ENCODING_UTF8</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that data is sent/retrieved to/from the server in UTF-8 encoding. 
     This is the default encoding. This constant can be passed to 
     PDOStatement::setAttribute, PDO::setAttribute, PDO::prepare, 
     PDOStatement::bindColumn, and PDOStatement::bindParam.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.sqlsrv-encoding-default">
    <strong><code><a href="ref.pdo-sqlsrv.php#pdo.constants.sqlsrv-encoding-default">PDO::SQLSRV_ENCODING_DEFAULT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that data is sent/retrieved to/from the server according to 
     PDO::SQLSRV_ENCODING_SYSTEM if specified during connection. The connection&#039;s 
     encoding is used if specified in a prepare statement. This constant can be 
     passed to PDOStatement::setAttribute, PDO::setAttribute, PDO::prepare, 
     PDOStatement::bindColumn, and PDOStatement::bindParam.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.sqlsrv-attr-query-timeout">
    <strong><code><a href="ref.pdo-sqlsrv.php#pdo.constants.sqlsrv-attr-query-timeout">PDO::SQLSRV_ATTR_QUERY_TIMEOUT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A non-negative integer representing the timeout period, in seconds. Zero (0) 
     is the default and means no timeout. This constant can be passed to 
     PDOStatement::setAttribute, PDO::setAttribute, and PDO::prepare.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.sqlsrv-attr-direct-query">
    <strong><code><a href="ref.pdo-sqlsrv.php#pdo.constants.sqlsrv-attr-direct-query">PDO::SQLSRV_ATTR_DIRECT_QUERY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates that a query should be executed directly, without being prepared. 
     This constant can be passed to PDO::setAttribute, and PDO::prepare. For more 
     information, see 
     <a href="http://msdn.microsoft.com/en-us/library/ff754356.aspx" class="link external">&raquo;&nbsp;Direct and Prepared Statement Execution</a>.
    </span>
   </dd>
  
 </dl>
</div>



  </div>

  

 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="ref.pdo-sqlsrv.connection.php">PDO_SQLSRV DSN</a> — Connecting to MS SQL Server and SQL Azure databases</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo_sqlsrv/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.pdo-sqlsrv%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.pdo-sqlsrv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-sqlsrv.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117123">  <div class="votes">
    <div id="Vu117123">
    <a href="/manual/vote-note.php?id=117123&amp;page=ref.pdo-sqlsrv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117123">
    <a href="/manual/vote-note.php?id=117123&amp;page=ref.pdo-sqlsrv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117123" title="54% like this...">
    10
    </div>
  </div>
  <a href="#117123" class="name">
  <strong class="user"><em>Peter</em></strong></a><a class="genanchor" href="#117123"> &para;</a><div class="date" title="2015-04-17 06:04"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117123">
<div class="phpcode"><code><span class="html">SQLSRV 3.2 is now available from Microsoft that supports PHP 5.6<br /><br /><a href="http://www.microsoft.com/en-us/download/details.aspx?id=20098" rel="nofollow" target="_blank">http://www.microsoft.com/en-us/download/details.aspx?id=20098</a></span></code></div>
  </div>
 </div>
  <div class="note" id="120103">  <div class="votes">
    <div id="Vu120103">
    <a href="/manual/vote-note.php?id=120103&amp;page=ref.pdo-sqlsrv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120103">
    <a href="/manual/vote-note.php?id=120103&amp;page=ref.pdo-sqlsrv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120103" title="54% like this...">
    6
    </div>
  </div>
  <a href="#120103" class="name">
  <strong class="user"><em>ian at helastel dot com</em></strong></a><a class="genanchor" href="#120103"> &para;</a><div class="date" title="2016-10-31 04:52"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120103">
<div class="phpcode"><code><span class="html">An updated driver compatible with both PHP 7.0 and Linux is available on the PHP-7.0-Linux branch of <a href="https://github.com/Microsoft/msphpsql/" rel="nofollow" target="_blank">https://github.com/Microsoft/msphpsql/</a><br /><br />This is more up to date and supports some additional features over the ODBC / DBLIB drivers.<br /><br />It is currently considered an 'Early Technical Preview' and hence has some limitations, but in my experience it has been stable.</span></code></div>
  </div>
 </div>
  <div class="note" id="116349">  <div class="votes">
    <div id="Vu116349">
    <a href="/manual/vote-note.php?id=116349&amp;page=ref.pdo-sqlsrv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116349">
    <a href="/manual/vote-note.php?id=116349&amp;page=ref.pdo-sqlsrv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116349" title="50% like this...">
    0
    </div>
  </div>
  <a href="#116349" class="name">
  <strong class="user"><em>John P</em></strong></a><a class="genanchor" href="#116349"> &para;</a><div class="date" title="2014-12-16 05:29"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116349">
<div class="phpcode"><code><span class="html">As of 12/12/2014, Microsoft has officially released Version 3.1.<br /><br />Support for 5.5 has 4 drivers<br />php_pdo_sqlsrv_55_nts.dll<br />php_pdo_sqlsrv_55_ts.dll<br />php_sqlsrv_55_nts.dll<br />php_sqlsrv_55_ts.dll<br /><br />Note: Version 3.1 now supports PHP 5.5 and requires Microsoft ODBC Driver 11 (or higher) <br /><br />You can downlod the new driver from <br /><a href="http://www.microsoft.com/en-us/download/details.aspx?id=20098" rel="nofollow" target="_blank">http://www.microsoft.com/en-us/download/details.aspx?id=20098</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.pdo-sqlsrv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-sqlsrv.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="pdo.drivers.php">PDO Drivers</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="ref.pdo-cubrid.php" title="CUBRID PDO Driver">CUBRID PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-dblib.php" title="MS SQL Server PDO Driver">MS SQL Server PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-dblib.php" title="Pdo\Dblib">Pdo\Dblib</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-firebird.php" title="Firebird PDO Driver">Firebird PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-firebird.php" title="Pdo\Firebird">Pdo\Firebird</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-ibm.php" title="IBM PDO Driver">IBM PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-informix.php" title="Informix PDO Driver">Informix PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-mysql.php" title="MySQL PDO Driver">MySQL PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-mysql.php" title="Pdo\Mysql">Pdo\Mysql</a>
                        </li>
                                                <li class="current">
                            <a href="ref.pdo-sqlsrv.php" title="MS SQL Server PDO Driver">MS SQL Server PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-oci.php" title="Oracle PDO Driver">Oracle PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-odbc.php" title="ODBC and DB2 PDO Driver">ODBC and DB2 PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-odbc.php" title="Pdo\Odbc">Pdo\Odbc</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-pgsql.php" title="PostgreSQL PDO Driver">PostgreSQL PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-pgsql.php" title="Pdo\Pgsql">Pdo\Pgsql</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-sqlite.php" title="SQLite PDO Driver">SQLite PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-sqlite.php" title="Pdo\Sqlite">Pdo\Sqlite</a>
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
