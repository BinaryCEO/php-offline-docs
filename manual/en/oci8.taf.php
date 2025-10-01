<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: OCI8 Transparent Application Failover (TAF) Support - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/oci8.taf.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/oci8.taf.php">
 <link rel="alternate" href="https://www.php.net/manual/en/oci8.taf.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.oci8.php">
 <link rel="prev" href="https://www.php.net/manual/en/oci8.fan.php">
 <link rel="next" href="https://www.php.net/manual/en/oci8.dtrace.php">

 <link rel="alternate" href="https://www.php.net/manual/en/oci8.taf.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/oci8.taf.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/oci8.taf.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/oci8.taf.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/oci8.taf.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/oci8.taf.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/oci8.taf.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/oci8.taf.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/oci8.taf.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/oci8.taf.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/oci8.taf.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="OCI8 Transparent Application Failover (TAF) Support" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: OCI8 Transparent Application Failover (TAF) Support - Manual" />
<meta name="twitter:description" content="OCI8 Transparent Application Failover (TAF) Support" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: OCI8 Transparent Application Failover (TAF) Support - Manual" />
<meta itemprop="description" content="OCI8 Transparent Application Failover (TAF) Support" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="OCI8 Transparent Application Failover (TAF) Support" />

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
        <a href="oci8.dtrace.php">
          OCI8 and DTrace Dynamic Tracing &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="oci8.fan.php">
          &laquo; OCI8 Fast Application Notification (FAN) Support        </a>
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
            <option value='en/oci8.taf.php' selected="selected">English</option>
            <option value='de/oci8.taf.php'>German</option>
            <option value='es/oci8.taf.php'>Spanish</option>
            <option value='fr/oci8.taf.php'>French</option>
            <option value='it/oci8.taf.php'>Italian</option>
            <option value='ja/oci8.taf.php'>Japanese</option>
            <option value='pt_BR/oci8.taf.php'>Brazilian Portuguese</option>
            <option value='ru/oci8.taf.php'>Russian</option>
            <option value='tr/oci8.taf.php'>Turkish</option>
            <option value='uk/oci8.taf.php'>Ukrainian</option>
            <option value='zh/oci8.taf.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="oci8.taf" class="chapter">
 <h1 class="title">OCI8 Transparent Application Failover (TAF) Support</h1>

 <p class="para">
  TAF is an Oracle Database feature that provides high availability.
  It enables PHP OCI8 applications to automatically reconnect to a
  preconfigured database when database connectivity fails due to
  instance or network failure.
 </p>
 <p class="para">
  In a configured Oracle Database system, TAF occurs when the PHP
  application detects that the database instance is down or
  unreachable. It establishes a connection to another node in an
  Oracle <a href="https://www.oracle.com/pls/topic/lookup?ctx=dblatest&id=GUID-DEF850F6-27E9-428E-B8FC-530230D78AD2" class="link external">&raquo;&nbsp;RAC</a>
  configuration, a hot standby database, or the same database
  instance
  itself. See <a href="https://www.oracle.com/pls/topic/lookup?ctx=dblatest&id=GUID-F7817CD2-4A2C-4D37-BD36-56DBABD4725F" class="link external">&raquo;&nbsp;Oracle
  Call Interface Programmer&#039;s Guide</a> for more information about
  OCI TAF.
 </p>
 <p class="para">
  An application callback can be registered
  with <span class="function"><a href="function.oci-register-taf-callback.php" class="function">oci_register_taf_callback()</a></span>. During
  failover, normal application processing stops and the registered
  callback is invoked.  The callback notifies the application of the
  failover events. If the failover succeeds, normal processing will
  be resumed. If the failover aborts, any following database
  operations in the application will fail due to no connection being
  available.
 </p>
 <p class="para">
  When a connection fails over to another database, the callback can
  reset any necessary connection state, for example replaying any
  necessary ALTER SESSION commands if the database service did not have
  -failover_restore enabled.
 </p>
 <p class="para">
  An application callback can be removed by calling <span class="function"><a href="function.oci-unregister-taf-callback.php" class="function">oci_unregister_taf_callback()</a></span>.
 </p>

 <div class="section">
  <h2 class="title">Configuring Transparent Application Failover</h2>
  <p class="para">
   TAF can be configured on the PHP OCI8 side or in the database
   configuration. If both are configured, database-side settings
   take precedence.
  </p>
  <p class="para">
   Configure TAF in PHP OCI8 (the client side) by including the
   FAILOVER_MODE parameter in the CONNECT_DATA portion of a
   connect descriptor. See Configuring Transparent Application
   Failover in <a href="https://www.oracle.com/pls/topic/lookup?ctx=dblatest&id=GUID-8F532535-C401-4B51-BE0B-04FD74BB0621" class="link external">&raquo;&nbsp;
   Oracle Database Net Services Administrator&#039;s Guide</a> for
   more information about client side configuration of TAF.
  </p>
  <p class="para">
   An example tnsnames.ora to configure TAF reconnecting to the
   same database instance:
  </p>
  <p class="para">
    <div class="informalexample">
     <div class="example-contents screen">
<div class="cdata"><pre>
    ORCL =
      (DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST = 127.0.0.1)(PORT = 1521))
        (CONNECT_DATA =
          (SERVICE_NAME = orclpdb1)
          (FAILOVER_MODE =
            (TYPE = SELECT)
            (METHOD = BASIC)
            (RETRIES = 20)
            (DELAY = 15))))
 </pre></div>
     </div>
   </div>
  </p>
  <p class="para">
   Alternatively configure TAF on the database side by
   modifying the target service with
   <a href="https://www.oracle.com/pls/topic/lookup?ctx=dblatest&id=GUID-8DC4D5E0-CA9D-47BC-BAD0-8769405AFEC5" class="link external">&raquo;&nbsp;srvctl</a>
   (for RAC) or the
   <a href="https://www.oracle.com/pls/topic/lookup?ctx=dblatest&id=GUID-C11449DC-EEDE-4BB8-9D2C-0A45198C1928" class="link external">&raquo;&nbsp;
   DBMS_SERVICE.MODIFY_SERVICE</a> packaged procedure
   (for single instance databases).
  </p>
 </div>
 <div class="section">
  <h2 class="title">Using TAF Callbacks in OCI8</h2>
  <p class="para">
   A TAF callback is an application function that can be
   registered to be called during failover. It is called
   several times while re-establishing the application&#039;s connection.
  </p>
  <p class="para">
   Callback first occurs when a loss of connection is detected.
   This allows the application to act accordingly for the
   upcoming delay of the failover. If the failover is successful,
   the callback is invoked after connection is re-established
   and usable. At this time, the application can resynchronize
   session settings and take actions such as informing the user
   that failover occurred. If failover is unsuccessful, a
   callback occurs to inform the application that a failover did
   not take place and the connection is unusable.
  </p>
  <p class="para">
   The interface of a TAF user-defined callback function is as
   follows:
  </p>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>userCallbackFn</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$connection</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$event</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para">
   <dl>
    
     <dt><code class="parameter">connection</code></dt>
     <dd>
      <p class="para">
       The Oracle connection on which the TAF callback was
       registered via <span class="function"><a href="function.oci-register-taf-callback.php" class="function">oci_register_taf_callback()</a></span>.
       The connection is not valid until the
       failover completes successfully.
      </p>
     </dd>
    
    
     <dt><code class="parameter">event</code></dt>
     <dd>
      <p class="para">
       The failover event indicates the current status of
       the failover.
      </p>
      <p class="para">
       <ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.oci-fo-begin">OCI_FO_BEGIN</a></code></strong> indicates that
          failover has detected a lost connection and failover
          is starting.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.oci-fo-end">OCI_FO_END</a></code></strong> indicates successful
          completion of failover.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.oci-fo-abort">OCI_FO_ABORT</a></code></strong> indicates that
          failover was unsuccessful, and there is no option
          of retrying.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.oci-fo-error">OCI_FO_ERROR</a></code></strong> also indicates
          that failover was unsuccessful, but it gives the
          application the opportunity to handle the error
          and return OCI_FO_RETRY to retry failover.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
           <strong><code><a href="oci8.constants.php#constant.oci-fo-reauth">OCI_FO_REAUTH</a></code></strong> indicates
           that an Oracle user has been re-authenticated.
         </p>
        </li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">type</code></dt>
     <dd>
      <p class="para">
       The failover type. This lets the callback know what
       type of failover the application has requested. The
       usual values are as follows:
      </p>
      <p class="para">
       <ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.oci-fo-session">OCI_FO_SESSION</a></code></strong> indicates that
          the user has requested only session failover. For
          example, if a user&#039;s connection is lost, then a
          new session is automatically created for the user
          on the backup. This type of failover does not
          attempt to recover SELECTs.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.oci-fo-select">OCI_FO_SELECT</a></code></strong> indicates that
          the user has requested SELECT failover as well.
          It allows users with open cursors to continue
          fetching from them after failure.
         </p>
        </li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">return value</code></dt>
     <dd>
      <p class="para">
       <ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          <code class="literal">0</code> indicates the failover
          steps should continue normally.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.oci-fo-retry">OCI_FO_RETRY</a></code></strong> indicates that
          the failover should be attempted again by Oracle.
          In case of an error while failing over to a new
          connection, TAF is able to retry the failover.
          Typically, the application code should sleep for
          a while before returning OCI_FO_RETRY.
         </p>
        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
  <div class="example" id="example-1939">
   <p><strong>Example #1 Registering a TAF callback</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Define userspace callback<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyClass </span><span style="color: #007700">{<br />    public static </span><span style="color: #0000BB">$retry_count</span><span style="color: #007700">;<br />    public static function </span><span style="color: #0000BB">TAFCallback</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$event</span><span style="color: #007700">, </span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />    {<br />        switch (</span><span style="color: #0000BB">$event</span><span style="color: #007700">) {<br />            case </span><span style="color: #0000BB">OCI_FO_BEGIN</span><span style="color: #007700">:<br />                </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">" Failing Over ... Please stand by\n"</span><span style="color: #007700">);<br />                </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">" Failover type was found to be %s \n"</span><span style="color: #007700">,<br />                       ((</span><span style="color: #0000BB">$type</span><span style="color: #007700">==</span><span style="color: #0000BB">OCI_FO_SESSION</span><span style="color: #007700">) ? </span><span style="color: #DD0000">"SESSION"<br />                        </span><span style="color: #007700">:((</span><span style="color: #0000BB">$type</span><span style="color: #007700">==</span><span style="color: #0000BB">OCI_FO_SELECT</span><span style="color: #007700">) ? </span><span style="color: #DD0000">"SELECT" </span><span style="color: #007700">: </span><span style="color: #DD0000">"UNKNOWN!"</span><span style="color: #007700">)));<br />                </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$retry_count </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />                break;<br />            case </span><span style="color: #0000BB">OCI_FO_ABORT</span><span style="color: #007700">:<br />                </span><span style="color: #FF8000">// The application cannot continue using the database<br />                </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">" Failover aborted. Failover will not take place.\n"</span><span style="color: #007700">);<br />                break;<br />            case </span><span style="color: #0000BB">OCI_FO_END</span><span style="color: #007700">:<br />                </span><span style="color: #FF8000">// Failover completes successfully. Inform users a failover occurs.<br />                </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">" Failover ended ... resuming services\n"</span><span style="color: #007700">);<br />                break;<br />            case </span><span style="color: #0000BB">OCI_FO_REAUTH</span><span style="color: #007700">:<br />                </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">" Failed over user ... resuming services\n"</span><span style="color: #007700">);<br />                </span><span style="color: #FF8000">// Replay any ALTER SESSION commands associated with this connection<br />                // eg. oci_parse($conn, ‘ALTER SESSION …’) ;<br />                </span><span style="color: #007700">break;<br />            case </span><span style="color: #0000BB">OCI_FO_ERROR</span><span style="color: #007700">:<br />                </span><span style="color: #FF8000">// Stop retrying if we have already attempted for 20 times.<br />                </span><span style="color: #007700">if (</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$retry_count </span><span style="color: #007700">&gt;= </span><span style="color: #0000BB">20</span><span style="color: #007700">)<br />                    return </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />                </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">" Failover error received. Sleeping...\n"</span><span style="color: #007700">);<br />                </span><span style="color: #0000BB">sleep</span><span style="color: #007700">(</span><span style="color: #0000BB">10</span><span style="color: #007700">);<br />                </span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$retry_count</span><span style="color: #007700">++;<br />                return </span><span style="color: #0000BB">OCI_FO_RETRY</span><span style="color: #007700">; </span><span style="color: #FF8000">// retry failover<br />                </span><span style="color: #007700">break;<br />            default:<br />                </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Bad Failover Event: %d.\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />                break;<br />        }<br />        return </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$fn_name </span><span style="color: #007700">= </span><span style="color: #DD0000">'MyClass::TAFCallback'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'orcl'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sysconn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'system'</span><span style="color: #007700">, </span><span style="color: #DD0000">'oracle'</span><span style="color: #007700">, </span><span style="color: #DD0000">'orcl'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Use a privileged connection to construct a SQL statement that will initiate failover<br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= &lt;&lt;&lt; 'END'<br /></span><span style="color: #DD0000">select unique 'alter system disconnect session '''||sid||','||serial#||''''<br />from v$session_connect_info<br />where sid = sys_context('USERENV', 'SID')<br /></span><span style="color: #007700">END;<br /><br /></span><span style="color: #0000BB">$s </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$s</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$r </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$s</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$disconnectssql </span><span style="color: #007700">= </span><span style="color: #0000BB">$r</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br /><br /></span><span style="color: #0000BB">oci_register_taf_callback</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$fn_name</span><span style="color: #007700">); </span><span style="color: #FF8000">// Register TAFCallback to Oracle TAF<br /><br /></span><span style="color: #007700">print </span><span style="color: #DD0000">"Parsing user query\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"select systimestamp from dual"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// For example, if a connection loss occurs at this point, oci_execute() will<br />// detect the loss and failover begins. During failover, oci_execute() will<br />// invoke the TAF callback function several times. If the failover is successful,<br />// a new connection is transparently created and oci_execute() will continue as<br />// usual. The connection session settings can be reset in the TAF callback<br />// function. If the failover is aborted, oci_execute() will return an error<br />// because a valid connection is not available.<br /><br />// Disconnect the user, which initiates failover<br /></span><span style="color: #007700">print </span><span style="color: #DD0000">"Disconnecting the user\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$discsql </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$sysconn</span><span style="color: #007700">, </span><span style="color: #0000BB">$disconnectssql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$discsql</span><span style="color: #007700">);<br /><br />print </span><span style="color: #DD0000">"Executing user query\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$e</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$m </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #DD0000">"Could not execute statement: "</span><span style="color: #007700">. </span><span style="color: #0000BB">$m</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br />print </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// do other SQL statements with the new connection, if it is valid<br />// $stmt = oci_parse($conn,  . . .);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="section">
  <h2 class="title">See Also</h2>
  <ul class="simplelist">
   <li><span class="function"><a href="function.oci-register-taf-callback.php" class="function">oci_register_taf_callback()</a></span></li>
   <li><span class="function"><a href="function.oci-unregister-taf-callback.php" class="function">oci_unregister_taf_callback()</a></span></li>
  </ul>
 </div>


</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/oci8/taf.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Foci8.taf%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=oci8.taf&amp;repo=en&amp;redirect=https://www.php.net/manual/en/oci8.taf.php">＋<small>add a note</small></a></span>
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
                                                <li class="">
                            <a href="oci8.connection.php" title="OCI8 Connection Handling and Connection Pooling">OCI8 Connection Handling and Connection Pooling</a>
                        </li>
                                                <li class="">
                            <a href="oci8.fan.php" title="OCI8 Fast Application Notification (FAN) Support">OCI8 Fast Application Notification (FAN) Support</a>
                        </li>
                                                <li class="current">
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
