<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: OCI8 Connection Handling and Connection Pooling - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/oci8.connection.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/oci8.connection.php">
 <link rel="alternate" href="https://www.php.net/manual/en/oci8.connection.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.oci8.php">
 <link rel="prev" href="https://www.php.net/manual/en/oci8.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/oci8.fan.php">

 <link rel="alternate" href="https://www.php.net/manual/en/oci8.connection.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/oci8.connection.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/oci8.connection.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/oci8.connection.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/oci8.connection.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/oci8.connection.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/oci8.connection.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/oci8.connection.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/oci8.connection.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/oci8.connection.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/oci8.connection.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="OCI8 Connection Handling and Connection Pooling" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: OCI8 Connection Handling and Connection Pooling - Manual" />
<meta name="twitter:description" content="OCI8 Connection Handling and Connection Pooling" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: OCI8 Connection Handling and Connection Pooling - Manual" />
<meta itemprop="description" content="OCI8 Connection Handling and Connection Pooling" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="OCI8 Connection Handling and Connection Pooling" />

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
        <a href="oci8.fan.php">
          OCI8 Fast Application Notification (FAN) Support &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="oci8.examples.php">
          &laquo; Examples        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.oci8.php'>OCI8</a></li>      </ul>
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
            <option value='en/oci8.connection.php' selected="selected">English</option>
            <option value='de/oci8.connection.php'>German</option>
            <option value='es/oci8.connection.php'>Spanish</option>
            <option value='fr/oci8.connection.php'>French</option>
            <option value='it/oci8.connection.php'>Italian</option>
            <option value='ja/oci8.connection.php'>Japanese</option>
            <option value='pt_BR/oci8.connection.php'>Brazilian Portuguese</option>
            <option value='ru/oci8.connection.php'>Russian</option>
            <option value='tr/oci8.connection.php'>Turkish</option>
            <option value='uk/oci8.connection.php'>Ukrainian</option>
            <option value='zh/oci8.connection.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="oci8.connection" class="chapter">
 <h1 class="title">OCI8 Connection Handling and Connection Pooling</h1>

 <div class="section">
  <h2 class="title">Connection Functions</h2>
  <p class="para">
   The OCI8 extension provides three different functions for
   connecting to Oracle.  The standard connection function
   is <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span>.  This creates a connection to
   an Oracle database and returns a resource used by subsequent
   database calls.
  </p>
  <p class="para">
   Connecting to an Oracle server is a reasonably expensive operation
   in terms of the time that it takes to complete.
   The <span class="function"><a href="function.oci-pconnect.php" class="function">oci_pconnect()</a></span> function uses a persistent
   cache of connections that can be re-used across different script
   requests.  This means that the connection overhead will typically
   only occur once per PHP process (or Apache child).
  </p>
  <p class="para">
   If the application connects to Oracle using a different set of database
   credentials for each web user, the persistent cache employed by
   <span class="function"><a href="function.oci-pconnect.php" class="function">oci_pconnect()</a></span> will become less useful as the
   number of concurrent users increases, to the point where it may
   start to adversely affect the overall performance of the Oracle
   server due to maintaining too many idle connections. If the
   application is structured in this way, it is recommended to either
   tune the application using
   the <a href="oci8.configuration.php#ini.oci8.max-persistent" class="link">oci8.max_persistent</a>
   and <a href="oci8.configuration.php#ini.oci8.persistent-timeout" class="link">oci8.persistent_timeout</a>
   configuration settings (these will give control over the persistent
   connection cache size and lifetime), use Oracle Database
   Resident Connection Pooling (in Oracle Database 11g or later), or use
   <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span> instead.
  </p>
  <p class="para">
   Both <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span>
   and <span class="function"><a href="function.oci-pconnect.php" class="function">oci_pconnect()</a></span> employ a connection cache; if
   multiple calls to
   <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span> use the same parameters in a given
   script, the second and subsequent calls return the existing
   connection handle.  The cache used
   by <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span> is cleaned up at the end of the
   script run, or when the connection handle is explicitly closed. The
   function <span class="function"><a href="function.oci-pconnect.php" class="function">oci_pconnect()</a></span> has similar behavior,
   although its cache is maintained separately and survives between
   HTTP requests.  
  </p>
  <p class="para">
   This caching feature means the two handles are not transactionally
   isolated (they are in fact the same connection handle, so there is
   no isolation of any kind).  If the application needs two separate,
   transactionally isolated connections, then
   use <span class="function"><a href="function.oci-new-connect.php" class="function">oci_new_connect()</a></span>.
  </p>
  <p class="para">
   The <span class="function"><a href="function.oci-pconnect.php" class="function">oci_pconnect()</a></span> cache is cleared and any
   database connections closed when the PHP process terminates, so
   effective use of persistent connections requires that PHP be an
   Apache module or used with FPM, or similar.  Persistent connections
   will not have any benefits over <span class="function"><a href="function.oci-connect.php" class="function">oci_connect()</a></span>
   when PHP is used with CGI or via the command-line.
  </p>
  <p class="para">
   The function <span class="function"><a href="function.oci-new-connect.php" class="function">oci_new_connect()</a></span> always creates a
   new connection to the Oracle server, regardless of what other
   connections might already exist.  High traffic web applications
   should avoid using
   <span class="function"><a href="function.oci-new-connect.php" class="function">oci_new_connect()</a></span>, especially in the busiest sections of
   the application.
  </p>
  <p class="para">
   Persistent connections can be
   closed by the user, allowing greater control over connection
   resource usage.  Persistent connections will now also be closed
   automatically when there is no PHP variable referencing them, such
   as at the end of scope of a PHP user function.  This will rollback
   any uncommitted transaction.  These changes to persistent
   connections make them behave similarly to non-persistent
   connections, simplifying the interface, allowing for greater
   application consistency and predictability.
   Use <a href="oci8.configuration.php#ini.oci8.old-oci-close-semantics" class="link">oci8.old_oci_close_semantics</a>
   set to
   <em>On</em> to retain the historical behavior.
  </p>
  <p class="para">
   The automatic re-establishment of PHP persistent connections after an Apache
   or FPM process respawns means Oracle Database <code class="literal">LOGON</code>
   triggers are only recommended for setting session attributes and not for
   per-application user connection requests.
  </p>
 </div>
 <div class="section">
  <h2 class="title">DRCP Connection Pooling</h2>
  <p class="para">
   PHP supports Oracle Database Resident
   Connection Pooling (DRCP).  DRCP allows more efficient use of
   database machine memory and provides high scalability.  No, or
   minimal, application changes are needed to use DRCP.
  </p>
  <p class="para">
   DRCP is suited for applications that connect using few database
   schemas and hold database connections open for a short period of
   time.  Other applications should use Oracle&#039;s
   default <code class="literal">Dedicated</code> database server processes, or
   use <code class="literal">Shared</code> servers.
  </p>
  <p class="para">
   DRCP benefits all three connection functions, but gives the highest
   scalability when connections are created
   with <span class="function"><a href="function.oci-pconnect.php" class="function">oci_pconnect()</a></span>.
  </p>
  <p class="para">
   For DRCP to be available in OCI8, Oracle client libraries used by
   PHP and the version of the Oracle Database must both be 11g or greater.
  </p>
  <p class="para">
   Documentation on DRCP is found in several Oracle manuals. For
   example,
   see <a href="https://docs.oracle.com/en/database/oracle/oracle-database/23/jjdbc/database-resident-connection-pooling.html" class="link external">&raquo;&nbsp;Configuring
   Database Resident Connection Pooling</a> in the Oracle
   documentation for usage information.
   A <a href="https://www.oracle.com/technetwork/topics/php/whatsnew/php-scalability-ha-twp-128842.pdf" class="link external">&raquo;&nbsp;DRCP
   white paper</a> contains background information on DRCP.
  </p>
  <p class="para">
   To use DRCP, install the OCI8 extension and Oracle 11g (or later)
   libraries and then follow these steps:
  </p>
  <p class="para">
   <ul class="itemizedlist">
    <li class="listitem">
     <p class="para">
      As a privileged database administrator, use a program like
      SQL*Plus to start the connection pool in the database:
     </p>
     <p class="para">
      <div class="informalexample">
       <div class="example-contents screen">
<div class="cdata"><pre>
    SQL&gt; execute dbms_connection_pool.start_pool;
</pre></div>
       </div>
      </div>
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Optionally
      use <code class="literal">dbms_connection_pool.alter_param()</code> to
      configure DRCP settings.  The current pool settings can be
      queried from the <code class="literal">DBA_CPOOL_INFO</code> view.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Update the connection strings used.  For PHP applications that
      currently connect using a Network Connect Name
      like <code class="literal">MYDB</code>:
     </p>
     <p class="para">
      <div class="informalexample">
       <div class="example-contents screen">
<div class="cdata"><pre>
    $c = oci_pconnect(&quot;myuser&quot;, &quot;mypassword&quot;, &quot;MYDB&quot;);
</pre></div>
       </div>
      </div>
     </p>
     <p class="para">
      modify the tnsnames.ora file and add
      a <code class="literal">(SERVER=POOLED)</code> clause, for example:
     </p>
     <p class="para">
      <div class="informalexample">
       <div class="example-contents screen">
<div class="cdata"><pre>
    MYDB = (DESCRIPTION=(ADDRESS=(PROTOCOL=tcp) (HOST=myhost.dom.com)
           (PORT=1521))(CONNECT_DATA=(SERVICE_NAME=sales)
           (SERVER=POOLED)))
</pre></div>
       </div>
      </div>
     </p>
     <p class="para">
      Alternatively, modify the Easy Connect syntax in PHP and add
      <code class="literal">:POOLED</code> after the service name:
     </p>
     <p class="para">
      <div class="informalexample">
       <div class="example-contents screen">
<div class="cdata"><pre>
    $c = oci_pconnect(&quot;myuser&quot;, &quot;mypassword&quot;, &quot;myhost.dom.com:1521/sales:POOLED&quot;);
</pre></div>
       </div>
      </div>
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Edit <var class="filename">php.ini</var> and choose a connection class name.  This name
      indicates a logical division of the connection pool and can be
      used to isolate pooling for separate applications.  Any PHP
      applications with the same user name and connection class value
      will be able to share connections in the pool, giving greater
      scalability.
     </p>
     <p class="para">
      <div class="informalexample">
       <div class="example-contents screen">
<div class="cdata"><pre>
    oci8.connection_class = &quot;MY_APPLICATION_NAME&quot;
</pre></div>
       </div>
      </div>
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      Run the application, connecting to the 11g (or later) database.
     </p>
    </li>
    </ul>
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Applications using Oracle Client libraries 10g that require the performance of
    persistent connections can reduce the amount of database server
    memory needed by using Oracle <code class="literal">Shared</code> servers
    (previously known as Multi Threaded Servers).  Refer to Oracle
    documentation for information.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
   Changing a password over DRCP connections will fail with the error
   <em>ORA-56609: Usage not supported with DRCP</em>.
   This is a documented restriction of Oracle Database 11g.
   </p>
  </p></blockquote>
 </div>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/oci8/connection.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Foci8.connection%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=oci8.connection&amp;repo=en&amp;redirect=https://www.php.net/manual/en/oci8.connection.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.oci8.php">OCI8</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.oci8.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="oci8.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="oci8.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="oci8.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="oci8.connection.php" title="OCI8 Connection Handling and Connection Pooling">OCI8 Connection Handling and Connection Pooling</a>
                        </li>
                                                <li class="">
                            <a href="oci8.fan.php" title="OCI8 Fast Application Notification (FAN) Support">OCI8 Fast Application Notification (FAN) Support</a>
                        </li>
                                                <li class="">
                            <a href="oci8.taf.php" title="OCI8 Transparent Application Failover (TAF) Support">OCI8 Transparent Application Failover (TAF) Support</a>
                        </li>
                                                <li class="">
                            <a href="oci8.dtrace.php" title="OCI8 and DTrace Dynamic Tracing">OCI8 and DTrace Dynamic Tracing</a>
                        </li>
                                                <li class="">
                            <a href="oci8.datatypes.php" title="Supported Datatypes">Supported Datatypes</a>
                        </li>
                                                <li class="">
                            <a href="ref.oci8.php" title="OCI8 Functions">OCI8 Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.ocicollection.php" title="OCICollection">OCICollection</a>
                        </li>
                                                <li class="">
                            <a href="class.ocilob.php" title="OCILob">OCILob</a>
                        </li>
                                                <li class="">
                            <a href="oldaliases.oci8.php" title="OCI8 Obsolete Aliases and Functions">OCI8 Obsolete Aliases and Functions</a>
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
