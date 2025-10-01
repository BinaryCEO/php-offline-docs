<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/win32service.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/win32service.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/win32service.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.win32service.php">
 <link rel="prev" href="https://www.php.net/manual/en/win32service.security.php">
 <link rel="next" href="https://www.php.net/manual/en/class.win32serviceexception.php">

 <link rel="alternate" href="https://www.php.net/manual/en/win32service.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/win32service.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/win32service.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/win32service.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/win32service.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/win32service.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/win32service.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/win32service.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/win32service.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/win32service.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/win32service.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="class.win32serviceexception.php">
          Win32ServiceException &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="win32service.security.php">
          &laquo; Security consideration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.windows.php'>Windows Only Extensions</a></li>      <li><a href='book.win32service.php'>win32service</a></li>      </ul>
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
            <option value='en/win32service.constants.php' selected="selected">English</option>
            <option value='de/win32service.constants.php'>German</option>
            <option value='es/win32service.constants.php'>Spanish</option>
            <option value='fr/win32service.constants.php'>French</option>
            <option value='it/win32service.constants.php'>Italian</option>
            <option value='ja/win32service.constants.php'>Japanese</option>
            <option value='pt_BR/win32service.constants.php'>Brazilian Portuguese</option>
            <option value='ru/win32service.constants.php'>Russian</option>
            <option value='tr/win32service.constants.php'>Turkish</option>
            <option value='uk/win32service.constants.php'>Ukrainian</option>
            <option value='zh/win32service.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="win32service.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>

  <table id="win32service.constants.servicetype" class="doctable table">
   <caption><strong>Win32Service Service Type Bitmasks</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.win32-service-win32-own-process">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-win32-own-process">WIN32_SERVICE_WIN32_OWN_PROCESS</a></code></strong></td>
      <td><code class="literal">0x00000010</code></td>
      <td>
       The service runs in its own process.
      </td>
     </tr>

     <tr id="constant.win32-service-interactive-process">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-interactive-process">WIN32_SERVICE_INTERACTIVE_PROCESS</a></code></strong></td>
      <td><code class="literal">0x00000100</code></td>
      <td>
       The service can interact with the desktop. This option is not available on Windows Vista or later.
      </td>
     </tr>

     <tr id="constant.win32-service-win32-own-process-interactive">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-win32-own-process-interactive">WIN32_SERVICE_WIN32_OWN_PROCESS_INTERACTIVE</a></code></strong></td>
      <td><code class="literal">0x00000110</code></td>
      <td>
       The service runs in its own process and can interact with the desktop. This option is not available on Windows Vista or later.
      </td>
     </tr>

    </tbody>
   
  </table>


  <table id="win32service.constants.servicestatus" class="doctable table">
   <caption><strong>Win32Service Service Status Constants</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.win32-service-continue-pending">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-continue-pending">WIN32_SERVICE_CONTINUE_PENDING</a></code></strong></td>
      <td><code class="literal">0x00000005</code></td>
      <td>
       The service continue is pending.
      </td>
     </tr>

     <tr id="constant.win32-service-pause-pending">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-pause-pending">WIN32_SERVICE_PAUSE_PENDING</a></code></strong></td>
      <td><code class="literal">0x00000006</code></td>
      <td>
       The service pause is pending.
      </td>
     </tr>

     <tr id="constant.win32-service-paused">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-paused">WIN32_SERVICE_PAUSED</a></code></strong></td>
      <td><code class="literal">0x00000007</code></td>
      <td>
       The service is paused.
      </td>
     </tr>

     <tr id="constant.win32-service-running">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-running">WIN32_SERVICE_RUNNING</a></code></strong></td>
      <td><code class="literal">0x00000004</code></td>
      <td>
       The service is running.
      </td>
     </tr>

     <tr id="constant.win32-service-start-pending">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-start-pending">WIN32_SERVICE_START_PENDING</a></code></strong></td>
      <td><code class="literal">0x00000002</code></td>
      <td>
       The service is starting.
      </td>
     </tr>

     <tr id="constant.win32-service-stop-pending">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-stop-pending">WIN32_SERVICE_STOP_PENDING</a></code></strong></td>
      <td><code class="literal">0x00000003</code></td>
      <td>
       The service is stopping.
      </td>
     </tr>

     <tr id="constant.win32-service-stopped">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-stopped">WIN32_SERVICE_STOPPED</a></code></strong></td>
      <td><code class="literal">0x00000001</code></td>
      <td>
       The service is not running.
      </td>
     </tr>

    </tbody>
   
  </table>


  <table id="win32service.constants.servicecontrol" class="doctable table">
   <caption><strong>Win32Service Service Control Message Constants</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.win32-service-control-continue">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-continue">WIN32_SERVICE_CONTROL_CONTINUE</a></code></strong></td>
      <td><code class="literal">0x00000003</code></td>
      <td>
       Notifies a paused service that it should resume.
      </td>
     </tr>

     <tr id="constant.win32-service-control-deviceevent">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-deviceevent">WIN32_SERVICE_CONTROL_DEVICEEVENT</a></code></strong></td>
      <td><code class="literal">0x0000000B</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-control-hardwareprofilechange">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-hardwareprofilechange">WIN32_SERVICE_CONTROL_HARDWAREPROFILECHANGE</a></code></strong></td>
      <td><code class="literal">0x0000000C</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-control-interrogate">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-interrogate">WIN32_SERVICE_CONTROL_INTERROGATE</a></code></strong></td>
      <td><code class="literal">0x00000004</code></td>
      <td>
       Notifies a service that it should report its current status information
       to the service control manager.
      </td>
     </tr>

     <tr id="constant.win32-service-control-netbindadd">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-netbindadd">WIN32_SERVICE_CONTROL_NETBINDADD</a></code></strong></td>
      <td><code class="literal">0x00000007</code></td>
      <td>
       Notifies a network service that there is a new component for binding.
      </td>
     </tr>

     <tr id="constant.win32-service-control-netbinddisable">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-netbinddisable">WIN32_SERVICE_CONTROL_NETBINDDISABLE</a></code></strong></td>
      <td><code class="literal">0x0000000A</code></td>
      <td>
       Notifies a network service that one of its bindings has been disabled.
      </td>
     </tr>

     <tr id="constant.win32-service-control-netbindenable">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-netbindenable">WIN32_SERVICE_CONTROL_NETBINDENABLE</a></code></strong></td>
      <td><code class="literal">0x00000009</code></td>
      <td>
       Notifies a network service that a disabled binding has been enabled.
      </td>
     </tr>

     <tr id="constant.win32-service-control-netbindremove">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-netbindremove">WIN32_SERVICE_CONTROL_NETBINDREMOVE</a></code></strong></td>
      <td><code class="literal">0x00000008</code></td>
      <td>
       Notifies a network service that a component for binding has been removed.
      </td>
     </tr>

     <tr id="constant.win32-service-control-paramchange">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-paramchange">WIN32_SERVICE_CONTROL_PARAMCHANGE</a></code></strong></td>
      <td><code class="literal">0x00000006</code></td>
      <td>
       Notifies a service that its startup parameters have changed.
      </td>
     </tr>

     <tr id="constant.win32-service-control-pause">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-pause">WIN32_SERVICE_CONTROL_PAUSE</a></code></strong></td>
      <td><code class="literal">0x00000002</code></td>
      <td>
       Notifies a service that it should pause.
      </td>
     </tr>

     <tr id="constant.win32-service-control-powerevent">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-powerevent">WIN32_SERVICE_CONTROL_POWEREVENT</a></code></strong></td>
      <td><code class="literal">0x0000000D</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-control-preshutdown">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-preshutdown">WIN32_SERVICE_CONTROL_PRESHUTDOWN</a></code></strong></td>
      <td><code class="literal">0x0000000F</code></td>
      <td>
       Notifies a service that the system will be shutting down. A service that
       handles this notification blocks system shutdown until the service stops
       or the preshutdown time-out interval expires. This value is not supported
       by Windows Server 2003 and Windows XP/2000.
      </td>
     </tr>

     <tr id="constant.win32-service-control-sessionchange">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-sessionchange">WIN32_SERVICE_CONTROL_SESSIONCHANGE</a></code></strong></td>
      <td><code class="literal">0x0000000E</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-control-shutdown">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-shutdown">WIN32_SERVICE_CONTROL_SHUTDOWN</a></code></strong></td>
      <td><code class="literal">0x00000005</code></td>
      <td>
       Notifies a service that the system is shutting down so the service can
       perform cleanup tasks. If a service accepts this control code, it must
       stop after it performs its cleanup tasks. After the SCM sends this
       control code, it will not send other control codes to the service.
      </td>
     </tr>

     <tr id="constant.win32-service-control-stop">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-control-stop">WIN32_SERVICE_CONTROL_STOP</a></code></strong></td>
      <td><code class="literal">0x00000001</code></td>
      <td>
       Notifies a service that it should stop.
      </td>
     </tr>

    </tbody>
   
  </table>


  <table id="win32service.constants.controlsaccepted" class="doctable table">
   <caption><strong>Win32Service Service Control Message Accepted Bitmasks</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.win32-service-accept-hardwareprofilechange">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-accept-hardwareprofilechange">WIN32_SERVICE_ACCEPT_HARDWAREPROFILECHANGE</a></code></strong></td>
      <td><code class="literal">0x00000020</code></td>
      <td>
        The service is notified when the computer&#039;s hardware profile has changed.
        This enables the system to send 
        <strong><code><a href="win32service.constants.php#constant.win32-service-control-hardwareprofilechange">WIN32_SERVICE_CONTROL_HARDWAREPROFILECHANGE</a></code></strong> 
        notifications to the service.
      </td>
     </tr>

     <tr id="constant.win32-service-accept-netbindchange">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-accept-netbindchange">WIN32_SERVICE_ACCEPT_NETBINDCHANGE</a></code></strong></td>
      <td><code class="literal">0x00000010</code></td>
      <td>
        The service is a network component that can accept changes in its 
        binding without being stopped and restarted.
        This control code allows the service to receive 
        <strong><code><a href="win32service.constants.php#constant.win32-service-control-netbindadd">WIN32_SERVICE_CONTROL_NETBINDADD</a></code></strong>, 
        <strong><code><a href="win32service.constants.php#constant.win32-service-control-netbindremove">WIN32_SERVICE_CONTROL_NETBINDREMOVE</a></code></strong>, 
        <strong><code><a href="win32service.constants.php#constant.win32-service-control-netbindenable">WIN32_SERVICE_CONTROL_NETBINDENABLE</a></code></strong>, and 
        <strong><code><a href="win32service.constants.php#constant.win32-service-control-netbinddisable">WIN32_SERVICE_CONTROL_NETBINDDISABLE</a></code></strong> notifications.
      </td>
     </tr>

     <tr id="constant.win32-service-accept-paramchange">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-accept-paramchange">WIN32_SERVICE_ACCEPT_PARAMCHANGE</a></code></strong></td>
      <td><code class="literal">0x00000008</code></td>
      <td>
        The service can reread its startup parameters without being stopped and restarted.
        This control code allows the service to receive 
        <strong><code><a href="win32service.constants.php#constant.win32-service-control-paramchange">WIN32_SERVICE_CONTROL_PARAMCHANGE</a></code></strong> notifications.
      </td>
     </tr>

     <tr id="constant.win32-service-accept-pause-continue">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-accept-pause-continue">WIN32_SERVICE_ACCEPT_PAUSE_CONTINUE</a></code></strong></td>
      <td><code class="literal">0x00000002</code></td>
      <td>
       The service can be paused and continued. This control code allows the
       service to receive <strong><code><a href="win32service.constants.php#constant.win32-service-control-pause">WIN32_SERVICE_CONTROL_PAUSE</a></code></strong> and
       <strong><code><a href="win32service.constants.php#constant.win32-service-control-continue">WIN32_SERVICE_CONTROL_CONTINUE</a></code></strong> notifications.
      </td>
     </tr>

     <tr id="constant.win32-service-accept-powerevent">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-accept-powerevent">WIN32_SERVICE_ACCEPT_POWEREVENT</a></code></strong></td>
      <td><code class="literal">0x00000040</code></td>
      <td>
        The service is notified when the computer&#039;s power status has changed.
        This enables the system to send 
        <strong><code><a href="win32service.constants.php#constant.win32-service-control-powerevent">WIN32_SERVICE_CONTROL_POWEREVENT</a></code></strong> notifications 
        to the service.
      </td>
     </tr>

     <tr id="constant.win32-service-accept-preshutdown">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-accept-preshutdown">WIN32_SERVICE_ACCEPT_PRESHUTDOWN</a></code></strong></td>
      <td><code class="literal">0x00000100</code></td>
      <td>
       The service can perform preshutdown tasks. This control code enables the
       service to receive <strong><code><a href="win32service.constants.php#constant.win32-service-control-preshutdown">WIN32_SERVICE_CONTROL_PRESHUTDOWN</a></code></strong>
       notifications. This value is not supported by Windows Server 2003 and
       Windows XP/2000.
      </td>
     </tr>

     <tr id="constant.win32-service-accept-sessionchange">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-accept-sessionchange">WIN32_SERVICE_ACCEPT_SESSIONCHANGE</a></code></strong></td>
      <td><code class="literal">0x00000080</code></td>
      <td>
        The service is notified when the computer&#039;s session status has changed.
        This enables the system to send 
        <strong><code><a href="win32service.constants.php#constant.win32-service-control-sessionchange">WIN32_SERVICE_CONTROL_SESSIONCHANGE</a></code></strong> notifications 
        to the service.
        Windows 2000:  This value is not supported
      </td>
     </tr>

     <tr id="constant.win32-service-accept-shutdown">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-accept-shutdown">WIN32_SERVICE_ACCEPT_SHUTDOWN</a></code></strong></td>
      <td><code class="literal">0x00000004</code></td>
      <td>
       The service is notified when system shutdown occurs. This control code
       allows the service to receive <strong><code><a href="win32service.constants.php#constant.win32-service-control-shutdown">WIN32_SERVICE_CONTROL_SHUTDOWN</a></code></strong>
       notifications.
      </td>
     </tr>

     <tr id="constant.win32-service-accept-stop">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-accept-stop">WIN32_SERVICE_ACCEPT_STOP</a></code></strong></td>
      <td><code class="literal">0x00000001</code></td>
      <td>
       The service can be stopped. This control code allows the service to
       receive <strong><code><a href="win32service.constants.php#constant.win32-service-control-stop">WIN32_SERVICE_CONTROL_STOP</a></code></strong> notifications.
      </td>
     </tr>

     <tr id="constant.win32-service-accept-timechange">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-accept-timechange">WIN32_SERVICE_ACCEPT_TIMECHANGE</a></code></strong></td>
      <td><code class="literal">0x00000200</code></td>
      <td>
        The service is notified when the system time has changed.
        This enables the system to send 
        <strong><code>WIN32_SERVICE_CONTROL_TIMECHANGE</code></strong> notifications to the service.
        Windows Server 2008, Windows Vista, Windows Server 2003, 
        and Windows XP/2000:  This control code is not supported.
      </td>
     </tr>

     <tr id="constant.win32-service-accept-triggerevent">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-accept-triggerevent">WIN32_SERVICE_ACCEPT_TRIGGEREVENT</a></code></strong></td>
      <td><code class="literal">0x00000400</code></td>
      <td>
        The service is notified when an event for which the service has registered occurs.
        This enables the system to send 
        <strong><code>WIN32_SERVICE_CONTROL_TRIGGEREVENT</code></strong> notifications to the service.
        Windows Server 2008, Windows Vista, Windows Server 2003, 
        and Windows XP/2000:  This control code is not supported.
      </td>
     </tr>

    </tbody>
   
  </table>


  <table id="win32service.constants.servicestarttype" class="doctable table">
   <caption><strong>Win32Service Service Start Type Constants</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.win32-service-boot-start">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-boot-start">WIN32_SERVICE_BOOT_START</a></code></strong></td>
      <td><code class="literal">0x00000000</code></td>
      <td>
       A device driver started by the system loader. This value is valid only for driver services.
      </td>
     </tr>

     <tr id="constant.win32-service-system-start">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-system-start">WIN32_SERVICE_SYSTEM_START</a></code></strong></td>
      <td><code class="literal">0x00000001</code></td>
      <td>
       A device driver started by the IoInitSystem function. This value is valid only for driver services.
      </td>
     </tr>

     <tr id="constant.win32-service-auto-start">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-auto-start">WIN32_SERVICE_AUTO_START</a></code></strong></td>
      <td><code class="literal">0x00000002</code></td>
      <td>
       A service started automatically by the service control manager during
       system startup.
      </td>
     </tr>

     <tr id="constant.win32-service-demand-start">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-demand-start">WIN32_SERVICE_DEMAND_START</a></code></strong></td>
      <td><code class="literal">0x00000003</code></td>
      <td>
       A service started by the service control manager when a process calls the
       StartService function.
      </td>
     </tr>

     <tr id="constant.win32-service-disabled">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-disabled">WIN32_SERVICE_DISABLED</a></code></strong></td>
      <td><code class="literal">0x00000004</code></td>
      <td>
       A service that cannot be started. Attempts to start the service result in
       the error code <strong><code><a href="win32service.constants.php#constant.win32-error-service-disabled">WIN32_ERROR_SERVICE_DISABLED</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>


  <table id="win32service.constants.errorcontrol" class="doctable table">
   <caption><strong>Win32Service Service Error Control Constants</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.win32-service-error-ignore">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-error-ignore">WIN32_SERVICE_ERROR_IGNORE</a></code></strong></td>
      <td><code class="literal">0x00000000</code></td>
      <td>
       The startup program ignores the error and continues the startup operation.
      </td>
     </tr>

     <tr id="constant.win32-service-error-normal">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-error-normal">WIN32_SERVICE_ERROR_NORMAL</a></code></strong></td>
      <td><code class="literal">0x00000001</code></td>
      <td>
       The startup program logs the error in the event log but continues the
       startup operation.
      </td>
     </tr>

     <tr id="constant.win32-service-error-severe">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-error-severe">WIN32_SERVICE_ERROR_SEVERE</a></code></strong></td>
      <td><code class="literal">0x00000002</code></td>
      <td>
       The startup program logs the error in the event log.
       If the last-known-good configuration is being started, the startup 
       operation continues. Otherwise, the system is restarted with the 
       last-known-good configuration.
      </td>
     </tr>

     <tr id="constant.win32-service-error-critical">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-error-critical">WIN32_SERVICE_ERROR_CRITICAL</a></code></strong></td>
      <td><code class="literal">0x00000003</code></td>
      <td>
       The startup program logs the error in the event log, if possible.
       If the last-known-good configuration is being started, the startup 
       operation fails. Otherwise, the system is restarted with the 
       last-known good configuration.
      </td>
     </tr>

    </tbody>
   
  </table>


  <table id="win32service.constants.serviceflag" class="doctable table">
   <caption><strong>Win32Service Service Flag Constants</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.win32-service-runs-in-system-process">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-runs-in-system-process">WIN32_SERVICE_RUNS_IN_SYSTEM_PROCESS</a></code></strong></td>
      <td><code class="literal">0x00000001</code></td>
      <td>
       The service runs in a system process that must always be running.
      </td>
     </tr>

    </tbody>
   
  </table>


  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    These constants are no longer in use as of Win32Service 1.0.0.
   </p>
  </p></blockquote>
  <table id="win32service.constants.errors" class="doctable table">
   <caption><strong>Win32 Error Codes</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.win32-error-access-denied">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-access-denied">WIN32_ERROR_ACCESS_DENIED</a></code></strong></td>
      <td><code class="literal">0x00000005</code></td>
      <td>
       The handle to the SCM database does not have the appropriate access rights.
      </td>
     </tr>

     <tr id="constant.win32-error-circular-dependency">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-circular-dependency">WIN32_ERROR_CIRCULAR_DEPENDENCY</a></code></strong></td>
      <td><code class="literal">0x00000423</code></td>
      <td>
       A circular service dependency was specified.
      </td>
     </tr>

     <tr id="constant.win32-error-database-does-not-exist">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-database-does-not-exist">WIN32_ERROR_DATABASE_DOES_NOT_EXIST</a></code></strong></td>
      <td><code class="literal">0x00000429</code></td>
      <td>
       The specified database does not exist.
      </td>
     </tr>

     <tr id="constant.win32-error-dependent-services-running">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-dependent-services-running">WIN32_ERROR_DEPENDENT_SERVICES_RUNNING</a></code></strong></td>
      <td><code class="literal">0x0000041B</code></td>
      <td>
       The service cannot be stopped because other running services are dependent
       on it.
      </td>
     </tr>

     <tr id="constant.win32-error-duplicate-service-name">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-duplicate-service-name">WIN32_ERROR_DUPLICATE_SERVICE_NAME</a></code></strong></td>
      <td><code class="literal">0x00000436</code></td>
      <td>
       The display name already exists in the service control manager database
       either as a service name or as another display name.
      </td>
     </tr>

     <tr id="constant.win32-error-failed-service-controller-connect">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-failed-service-controller-connect">WIN32_ERROR_FAILED_SERVICE_CONTROLLER_CONNECT</a></code></strong></td>
      <td><code class="literal">0x00000427</code></td>
      <td>
       This error is returned if the program is being run as a console application
       rather than as a service. If the program will be run as a console application
       for debugging purposes, structure it such that service-specific code is not
       called.
      </td>
     </tr>

     <tr id="constant.win32-error-insufficient-buffer">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-insufficient-buffer">WIN32_ERROR_INSUFFICIENT_BUFFER</a></code></strong></td>
      <td><code class="literal">0x0000007A</code></td>
      <td>
       The buffer is too small for the service status structure. Nothing was
       written to the structure.
      </td>
     </tr>

     <tr id="constant.win32-error-invalid-data">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-invalid-data">WIN32_ERROR_INVALID_DATA</a></code></strong></td>
      <td><code class="literal">0x0000000D</code></td>
      <td>
       The specified service status structure is invalid.
      </td>
     </tr>

     <tr id="constant.win32-error-invalid-handle">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-invalid-handle">WIN32_ERROR_INVALID_HANDLE</a></code></strong></td>
      <td><code class="literal">0x00000006</code></td>
      <td>
       The handle to the specified service control manager database is invalid.
      </td>
     </tr>

     <tr id="constant.win32-error-invalid-level">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-invalid-level">WIN32_ERROR_INVALID_LEVEL</a></code></strong></td>
      <td><code class="literal">0x0000007C</code></td>
      <td>
       The InfoLevel parameter contains an unsupported value.
      </td>
     </tr>

     <tr id="constant.win32-error-invalid-name">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-invalid-name">WIN32_ERROR_INVALID_NAME</a></code></strong></td>
      <td><code class="literal">0x0000007B</code></td>
      <td>
       The specified service name is invalid.
      </td>
     </tr>

     <tr id="constant.win32-error-invalid-parameter">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-invalid-parameter">WIN32_ERROR_INVALID_PARAMETER</a></code></strong></td>
      <td><code class="literal">0x00000057</code></td>
      <td>
       A parameter that was specified is invalid.
      </td>
     </tr>

     <tr id="constant.win32-error-invalid-service-account">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-invalid-service-account">WIN32_ERROR_INVALID_SERVICE_ACCOUNT</a></code></strong></td>
      <td><code class="literal">0x00000421</code></td>
      <td>
       The user account name specified in the <code class="parameter">user</code>
       parameter does not exist. See <span class="function"><a href="function.win32-create-service.php" class="function">win32_create_service()</a></span>.
      </td>
     </tr>

     <tr id="constant.win32-error-invalid-service-control">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-invalid-service-control">WIN32_ERROR_INVALID_SERVICE_CONTROL</a></code></strong></td>
      <td><code class="literal">0x0000041C</code></td>
      <td>
       The requested control code is not valid, or it is unacceptable to the service.
      </td>
     </tr>

     <tr id="constant.win32-error-path-not-found">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-path-not-found">WIN32_ERROR_PATH_NOT_FOUND</a></code></strong></td>
      <td><code class="literal">0x00000003</code></td>
      <td>
       The service binary file could not be found.
      </td>
     </tr>

     <tr id="constant.win32-error-service-already-running">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-already-running">WIN32_ERROR_SERVICE_ALREADY_RUNNING</a></code></strong></td>
      <td><code class="literal">0x00000420</code></td>
      <td>
       An instance of the service is already running.
      </td>
     </tr>

     <tr id="constant.win32-error-service-cannot-accept-ctrl">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-cannot-accept-ctrl">WIN32_ERROR_SERVICE_CANNOT_ACCEPT_CTRL</a></code></strong></td>
      <td><code class="literal">0x00000425</code></td>
      <td>
       The requested control code cannot be sent to the service because the state
       of the service is <strong><code><a href="win32service.constants.php#constant.win32-service-stopped">WIN32_SERVICE_STOPPED</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-start-pending">WIN32_SERVICE_START_PENDING</a></code></strong>, or
       <strong><code><a href="win32service.constants.php#constant.win32-service-stop-pending">WIN32_SERVICE_STOP_PENDING</a></code></strong>.
      </td>
     </tr>

     <tr id="constant.win32-error-service-database-locked">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-database-locked">WIN32_ERROR_SERVICE_DATABASE_LOCKED</a></code></strong></td>
      <td><code class="literal">0x0000041F</code></td>
      <td>
       The database is locked.
      </td>
     </tr>

     <tr id="constant.win32-error-service-dependency-deleted">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-dependency-deleted">WIN32_ERROR_SERVICE_DEPENDENCY_DELETED</a></code></strong></td>
      <td><code class="literal">0x00000433</code></td>
      <td>
       The service depends on a service that does not exist or has been marked
       for deletion.
      </td>
     </tr>

     <tr id="constant.win32-error-service-dependency-fail">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-dependency-fail">WIN32_ERROR_SERVICE_DEPENDENCY_FAIL</a></code></strong></td>
      <td><code class="literal">0x0000042C</code></td>
      <td>
       The service depends on another service that has failed to start.
      </td>
     </tr>

     <tr id="constant.win32-error-service-disabled">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-disabled">WIN32_ERROR_SERVICE_DISABLED</a></code></strong></td>
      <td><code class="literal">0x00000422</code></td>
      <td>
       The service has been disabled.
      </td>
     </tr>

     <tr id="constant.win32-error-service-does-not-exist">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-does-not-exist">WIN32_ERROR_SERVICE_DOES_NOT_EXIST</a></code></strong></td>
      <td><code class="literal">0x00000424</code></td>
      <td>
       The specified service does not exist as an installed service.
      </td>
     </tr>

     <tr id="constant.win32-error-service-exists">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-exists">WIN32_ERROR_SERVICE_EXISTS</a></code></strong></td>
      <td><code class="literal">0x00000431</code></td>
      <td>
       The specified service already exists in this database.
      </td>
     </tr>

     <tr id="constant.win32-error-service-logon-failed">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-logon-failed">WIN32_ERROR_SERVICE_LOGON_FAILED</a></code></strong></td>
      <td><code class="literal">0x0000042D</code></td>
      <td>
       The service did not start due to a logon failure. This error occurs if
       the service is configured to run under an account that does not have the
       &quot;Log on as a service&quot; right.
      </td>
     </tr>

     <tr id="constant.win32-error-service-marked-for-delete">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-marked-for-delete">WIN32_ERROR_SERVICE_MARKED_FOR_DELETE</a></code></strong></td>
      <td><code class="literal">0x00000430</code></td>
      <td>
       The specified service has already been marked for deletion.
      </td>
     </tr>

     <tr id="constant.win32-error-service-no-thread">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-no-thread">WIN32_ERROR_SERVICE_NO_THREAD</a></code></strong></td>
      <td><code class="literal">0x0000041E</code></td>
      <td>
       A thread could not be created for the service.
      </td>
     </tr>

     <tr id="constant.win32-error-service-not-active">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-not-active">WIN32_ERROR_SERVICE_NOT_ACTIVE</a></code></strong></td>
      <td><code class="literal">0x00000426</code></td>
      <td>
       The service has not been started.
      </td>
     </tr>

     <tr id="constant.win32-error-service-request-timeout">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-request-timeout">WIN32_ERROR_SERVICE_REQUEST_TIMEOUT</a></code></strong></td>
      <td><code class="literal">0x0000041D</code></td>
      <td>
       The process for the service was started, but it did not call
       StartServiceCtrlDispatcher, or the thread that called
       StartServiceCtrlDispatcher may be blocked in a control handler function.
      </td>
     </tr>

     <tr id="constant.win32-error-shutdown-in-progress">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-shutdown-in-progress">WIN32_ERROR_SHUTDOWN_IN_PROGRESS</a></code></strong></td>
      <td><code class="literal">0x0000045B</code></td>
      <td>
       The system is shutting down; this function cannot be called.
      </td>
     </tr>

     <tr id="constant.win32-error-service-specific-error">
      <td><strong><code><a href="win32service.constants.php#constant.win32-error-service-specific-error">WIN32_ERROR_SERVICE_SPECIFIC_ERROR</a></code></strong></td>
      <td><code class="literal">0x0000042A</code></td>
      <td>
       The service has returned a service-specific error code.
      </td>
     </tr>

     <tr id="constant.win32-no-error">
      <td><strong><code><a href="win32service.constants.php#constant.win32-no-error">WIN32_NO_ERROR</a></code></strong></td>
      <td><code class="literal">0x00000000</code></td>
      <td>
       No error.
      </td>
     </tr>

    </tbody>
   
  </table>


  <table id="win32service.constants.basepriorities" class="doctable table">
   <caption><strong>Win32 Base Priority Classes</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.win32-above-normal-priority-class">
      <td><strong><code><a href="win32service.constants.php#constant.win32-above-normal-priority-class">WIN32_ABOVE_NORMAL_PRIORITY_CLASS</a></code></strong></td>
      <td><code class="literal">0x00008000</code></td>
      <td>
       Process that has priority above WIN32_NORMAL_PRIORITY_CLASS but below
       WIN32_HIGH_PRIORITY_CLASS.
      </td>
     </tr>

     <tr id="constant.win32-below-normal-priority-class">
      <td><strong><code><a href="win32service.constants.php#constant.win32-below-normal-priority-class">WIN32_BELOW_NORMAL_PRIORITY_CLASS</a></code></strong></td>
      <td><code class="literal">0x00004000</code></td>
      <td>
       Process that has priority above WIN32_IDLE_PRIORITY_CLASS but below
       WIN32_NORMAL_PRIORITY_CLASS.
      </td>
     </tr>

     <tr id="constant.win32-high-priority-class">
      <td><strong><code><a href="win32service.constants.php#constant.win32-high-priority-class">WIN32_HIGH_PRIORITY_CLASS</a></code></strong></td>
      <td><code class="literal">0x00000080</code></td>
      <td>
       Process that performs time-critical tasks that must be executed
       immediately. The threads of the process preempt the threads of normal or
       idle priority class processes. An example is the Task List, which must
       respond quickly when called by the user, regardless of the load on the
       operating system. Use extreme care when using the high-priority class,
       because a high-priority class application can use nearly all available
       CPU time.
      </td>
     </tr>

     <tr id="constant.win32-idle-priority-class">
      <td><strong><code><a href="win32service.constants.php#constant.win32-idle-priority-class">WIN32_IDLE_PRIORITY_CLASS</a></code></strong></td>
      <td><code class="literal">0x00000040</code></td>
      <td>
       Process whose threads run only when the system is idle. The threads of the
       process are preempted by the threads of any process running in a higher
       priority class. An example is a screen saver. The idle-priority class is
       inherited by child processes.
      </td>
     </tr>

     <tr id="constant.win32-normal-priority-class">
      <td><strong><code><a href="win32service.constants.php#constant.win32-normal-priority-class">WIN32_NORMAL_PRIORITY_CLASS</a></code></strong></td>
      <td><code class="literal">0x00000020</code></td>
      <td>
       Process with no special scheduling needs.
      </td>
     </tr>

     <tr id="constant.win32-realtime-priority-class">
      <td><strong><code><a href="win32service.constants.php#constant.win32-realtime-priority-class">WIN32_REALTIME_PRIORITY_CLASS</a></code></strong></td>
      <td><code class="literal">0x00000100</code></td>
      <td>
       Process that has the highest possible priority. The threads of the
       process preempt the threads of all other processes, including operating
       system processes performing important tasks. For example, a real-time
       process that executes for more than a very brief interval can cause disk
       caches not to flush or cause the mouse to be unresponsive.
      </td>
     </tr>

    </tbody>
   
  </table>


  <table id="win32service.constants.recovery-action" class="doctable table">
   <caption><strong>Win32 Recovery action</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.win32-sc-action-none">
      <td><strong><code><a href="win32service.constants.php#constant.win32-sc-action-none">WIN32_SC_ACTION_NONE</a></code></strong></td>
      <td><code class="literal">0x00000000</code></td>
      <td>
       No action.
      </td>
     </tr>

     <tr id="constant.win32-sc-action-restart">
      <td><strong><code><a href="win32service.constants.php#constant.win32-sc-action-restart">WIN32_SC_ACTION_RESTART</a></code></strong></td>
      <td><code class="literal">0x00000001</code></td>
      <td>
       Restart the service.
      </td>
     </tr>

     <tr id="constant.win32-sc-action-reboot">
      <td><strong><code><a href="win32service.constants.php#constant.win32-sc-action-reboot">WIN32_SC_ACTION_REBOOT</a></code></strong></td>
      <td><code class="literal">0x00000002</code></td>
      <td>
       Restart the server.
      </td>
     </tr>

     <tr id="constant.win32-sc-action-run-command">
      <td><strong><code><a href="win32service.constants.php#constant.win32-sc-action-run-command">WIN32_SC_ACTION_RUN_COMMAND</a></code></strong></td>
      <td><code class="literal">0x00000003</code></td>
      <td>
       Run a command.
      </td>
     </tr>

    </tbody>
   
  </table>


  <table id="win32service.constants.serviceinfos" class="doctable table">
   <caption><strong>Win32 Service informations</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.win32-info-service">
      <td><strong><code><a href="win32service.constants.php#constant.win32-info-service">WIN32_INFO_SERVICE</a></code></strong></td>
      <td>&quot;service&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-info-display">
      <td><strong><code><a href="win32service.constants.php#constant.win32-info-display">WIN32_INFO_DISPLAY</a></code></strong></td>
      <td>&quot;display&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-info-user">
      <td><strong><code><a href="win32service.constants.php#constant.win32-info-user">WIN32_INFO_USER</a></code></strong></td>
      <td>&quot;user&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-info-password">
      <td><strong><code><a href="win32service.constants.php#constant.win32-info-password">WIN32_INFO_PASSWORD</a></code></strong></td>
      <td>&quot;password&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-info-path">
      <td><strong><code><a href="win32service.constants.php#constant.win32-info-path">WIN32_INFO_PATH</a></code></strong></td>
      <td>&quot;path&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-info-params">
      <td><strong><code><a href="win32service.constants.php#constant.win32-info-params">WIN32_INFO_PARAMS</a></code></strong></td>
      <td>&quot;params&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-info-description">
      <td><strong><code><a href="win32service.constants.php#constant.win32-info-description">WIN32_INFO_DESCRIPTION</a></code></strong></td>
      <td>&quot;description&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-info-start-type">
      <td><strong><code><a href="win32service.constants.php#constant.win32-info-start-type">WIN32_INFO_START_TYPE</a></code></strong></td>
      <td>&quot;start_type&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-load-order">
      <td><strong><code>WIN32_INFO_LOAD_ORDER</code></strong></td>
      <td>&quot;load_order&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-svc-type">
      <td><strong><code>WIN32_INFO_SVC_TYPE</code></strong></td>
      <td>&quot;svc_type&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-error-control">
      <td><strong><code>WIN32_INFO_ERROR_CONTROL</code></strong></td>
      <td>&quot;error_control&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-delayed-start">
      <td><strong><code>WIN32_INFO_DELAYED_START</code></strong></td>
      <td>&quot;delayed_start&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-base-priority">
      <td><strong><code>WIN32_INFO_BASE_PRIORITY</code></strong></td>
      <td>&quot;base_priority&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-dependencies">
      <td><strong><code>WIN32_INFO_DEPENDENCIES</code></strong></td>
      <td>&quot;dependencies&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-recovery-delay">
      <td><strong><code>WIN32_INFO_RECOVERY_DELAY</code></strong></td>
      <td>&quot;recovery_delay&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-recovery-action-1">
      <td><strong><code>WIN32_INFO_RECOVERY_ACTION_1</code></strong></td>
      <td>&quot;recovery_action_1&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-recovery-action-2">
      <td><strong><code>WIN32_INFO_RECOVERY_ACTION_2</code></strong></td>
      <td>&quot;recovery_action_2&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-recovery-action-3">
      <td><strong><code>WIN32_INFO_RECOVERY_ACTION_3</code></strong></td>
      <td>&quot;recovery_action_3&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-recovery-reset-period">
      <td><strong><code>WIN32_INFO_RECOVERY_RESET_PERIOD</code></strong></td>
      <td>&quot;recovery_reset_period&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-recovery-enabled">
      <td><strong><code>WIN32_INFO_RECOVERY_ENABLED</code></strong></td>
      <td>&quot;recovery_enabled&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-recovery-reboot-msg">
      <td><strong><code>WIN32_INFO_RECOVERY_REBOOT_MSG</code></strong></td>
      <td>&quot;recovery_reboot_msg&quot;</td>
      <td>
      </td>
     </tr>

     <tr id="constant.info-recovery-command">
      <td><strong><code>WIN32_INFO_RECOVERY_COMMAND</code></strong></td>
      <td>&quot;recovery_command&quot;</td>
      <td>
      </td>
     </tr>

    </tbody>
   
  </table>


  <table id="win32service.constants.rights" class="doctable table">
   <caption><strong>Win32 Service rights</strong></caption>
   
    <thead>
     <tr>
      <th>Constant</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.win32-service-all-access">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-all-access">WIN32_SERVICE_ALL_ACCESS</a></code></strong></td>
      <td><code class="literal">0x000F003F</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-change-config">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-change-config">WIN32_SERVICE_CHANGE_CONFIG</a></code></strong></td>
      <td><code class="literal">0x00000002</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-enumerate-dependents">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-enumerate-dependents">WIN32_SERVICE_ENUMERATE_DEPENDENTS</a></code></strong></td>
      <td><code class="literal">0x00000008</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-interrogate">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-interrogate">WIN32_SERVICE_INTERROGATE</a></code></strong></td>
      <td><code class="literal">0x00000080</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-pause-continue">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-pause-continue">WIN32_SERVICE_PAUSE_CONTINUE</a></code></strong></td>
      <td><code class="literal">0x00000040</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-query-config">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-query-config">WIN32_SERVICE_QUERY_CONFIG</a></code></strong></td>
      <td><code class="literal">0x00000001</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-query-status">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-query-status">WIN32_SERVICE_QUERY_STATUS</a></code></strong></td>
      <td><code class="literal">0x00000004</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-start">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-start">WIN32_SERVICE_START</a></code></strong></td>
      <td><code class="literal">0x00000010</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-stop">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-stop">WIN32_SERVICE_STOP</a></code></strong></td>
      <td><code class="literal">0x00000020</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-service-user-defined-control">
      <td><strong><code><a href="win32service.constants.php#constant.win32-service-user-defined-control">WIN32_SERVICE_USER_DEFINED_CONTROL</a></code></strong></td>
      <td><code class="literal">0x00000100</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-access-system-security">
      <td><strong><code><a href="win32service.constants.php#constant.win32-access-system-security">WIN32_ACCESS_SYSTEM_SECURITY</a></code></strong></td>
      <td><code class="literal">0x00001000</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-delete">
      <td><strong><code><a href="win32service.constants.php#constant.win32-delete">WIN32_DELETE</a></code></strong></td>
      <td><code class="literal">0x00010000</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-read-control">
      <td><strong><code><a href="win32service.constants.php#constant.win32-read-control">WIN32_READ_CONTROL</a></code></strong></td>
      <td><code class="literal">0x00020000</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-write-dac">
      <td><strong><code><a href="win32service.constants.php#constant.win32-write-dac">WIN32_WRITE_DAC</a></code></strong></td>
      <td><code class="literal">0x00040000</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-write-owner">
      <td><strong><code><a href="win32service.constants.php#constant.win32-write-owner">WIN32_WRITE_OWNER</a></code></strong></td>
      <td><code class="literal">0x00080000</code></td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-generic-read">
      <td><strong><code><a href="win32service.constants.php#constant.win32-generic-read">WIN32_GENERIC_READ</a></code></strong></td>
      <td>Include rights:
       <strong><code>WIN32_STANDARD_RIGHTS_READ</code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-query-config">WIN32_SERVICE_QUERY_CONFIG</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-query-status">WIN32_SERVICE_QUERY_STATUS</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-interrogate">WIN32_SERVICE_INTERROGATE</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-enumerate-dependents">WIN32_SERVICE_ENUMERATE_DEPENDENTS</a></code></strong>
      </td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-generic-write">
      <td><strong><code><a href="win32service.constants.php#constant.win32-generic-write">WIN32_GENERIC_WRITE</a></code></strong></td>
      <td>Include rights:
       <strong><code>WIN32_STANDARD_RIGHTS_WRITE</code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-change-config">WIN32_SERVICE_CHANGE_CONFIG</a></code></strong>
      </td>
      <td>
      </td>
     </tr>

     <tr id="constant.win32-generic-execute">
      <td><strong><code><a href="win32service.constants.php#constant.win32-generic-execute">WIN32_GENERIC_EXECUTE</a></code></strong></td>
      <td>Include rights:
       <strong><code>WIN32_STANDARD_RIGHTS_EXECUTE</code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-start">WIN32_SERVICE_START</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-stop">WIN32_SERVICE_STOP</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-pause-continue">WIN32_SERVICE_PAUSE_CONTINUE</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-user-defined-control">WIN32_SERVICE_USER_DEFINED_CONTROL</a></code></strong>
      </td>
      <td>
      </td>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/win32service/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fwin32service.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=win32service.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/win32service.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.win32service.php">win32service</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.win32service.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="win32service.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="win32service.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="class.win32serviceexception.php" title="Win32ServiceException">Win32ServiceException</a>
                        </li>
                                                <li class="">
                            <a href="class.win32service-rightinfo.php" title="Win32Service\RightInfo">Win32Service\RightInfo</a>
                        </li>
                                                <li class="">
                            <a href="win32service.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.win32service.php" title="win32service Functions">win32service Functions</a>
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
