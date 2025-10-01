<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: win32_set_service_status - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.win32-set-service-status.php">
 <link rel="shorturl" href="https://www.php.net/win32-set-service-status">
 <link rel="alternate" href="https://www.php.net/win32-set-service-status" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.win32service.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.win32-set-service-pause-resume-state.php">
 <link rel="next" href="https://www.php.net/manual/en/function.win32-start-service.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.win32-set-service-status.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.win32-set-service-status.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.win32-set-service-status.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.win32-set-service-status.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.win32-set-service-status.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.win32-set-service-status.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.win32-set-service-status.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.win32-set-service-status.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.win32-set-service-status.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.win32-set-service-status.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.win32-set-service-status.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Update the service status" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: win32_set_service_status - Manual" />
<meta name="twitter:description" content="Update the service status" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: win32_set_service_status - Manual" />
<meta itemprop="description" content="Update the service status" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Update the service status" />

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
        <a href="function.win32-start-service.php">
          win32_start_service &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.win32-set-service-pause-resume-state.php">
          &laquo; win32_set_service_pause_resume_state        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.windows.php'>Windows Only Extensions</a></li>      <li><a href='book.win32service.php'>win32service</a></li>      <li><a href='ref.win32service.php'>win32service Functions</a></li>      </ul>
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
            <option value='en/function.win32-set-service-status.php' selected="selected">English</option>
            <option value='de/function.win32-set-service-status.php'>German</option>
            <option value='es/function.win32-set-service-status.php'>Spanish</option>
            <option value='fr/function.win32-set-service-status.php'>French</option>
            <option value='it/function.win32-set-service-status.php'>Italian</option>
            <option value='ja/function.win32-set-service-status.php'>Japanese</option>
            <option value='pt_BR/function.win32-set-service-status.php'>Brazilian Portuguese</option>
            <option value='ru/function.win32-set-service-status.php'>Russian</option>
            <option value='tr/function.win32-set-service-status.php'>Turkish</option>
            <option value='uk/function.win32-set-service-status.php'>Ukrainian</option>
            <option value='zh/function.win32-set-service-status.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.win32-set-service-status" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">win32_set_service_status</h1>
  <p class="verinfo">(PECL win32service &gt;=0.1.0)</p><p class="refpurpose"><span class="refname">win32_set_service_status</span> &mdash; <span class="dc-title">Update the service status</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.win32-set-service-status-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>win32_set_service_status</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$status</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$checkpoint</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   Informs the SCM of the current status of a running service.
   This call is only valid for a running service process.
  </p>
    
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    Since version 0.2.0, this function work only in &quot;cli&quot; SAPI. On other SAPI 
    this function is disabled.
   </p>
  </div>

 </div>

 <div class="refsect1 parameters" id="refsect1-function.win32-set-service-status-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">status</code></dt>
     <dd>
      <p class="para">
       The service status code, one of
       <strong><code><a href="win32service.constants.php#constant.win32-service-running">WIN32_SERVICE_RUNNING</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-stopped">WIN32_SERVICE_STOPPED</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-stop-pending">WIN32_SERVICE_STOP_PENDING</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-start-pending">WIN32_SERVICE_START_PENDING</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-continue-pending">WIN32_SERVICE_CONTINUE_PENDING</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-pause-pending">WIN32_SERVICE_PAUSE_PENDING</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-paused">WIN32_SERVICE_PAUSED</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">checkpoint</code></dt>
     <dd>
      <p class="para">
       The checkpoint value the service increments periodically to report its
       progress during a lengthy start, stop, pause, or continue operation.
       For example, the service should increment this value as it completes
       each step of its initialization when it is starting up.
      </p>
      <p class="para">
       The <code class="parameter">checkpoint</code> is only valid when the
       <code class="parameter">status</code> is one of
       <strong><code><a href="win32service.constants.php#constant.win32-service-stop-pending">WIN32_SERVICE_STOP_PENDING</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-start-pending">WIN32_SERVICE_START_PENDING</a></code></strong>,
       <strong><code><a href="win32service.constants.php#constant.win32-service-continue-pending">WIN32_SERVICE_CONTINUE_PENDING</a></code></strong> or
       <strong><code><a href="win32service.constants.php#constant.win32-service-pause-pending">WIN32_SERVICE_PAUSE_PENDING</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.win32-set-service-status-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
  <p class="para">
    Prior to version 1.0.0, returned <strong><code><a href="win32service.constants.php#constant.win32-no-error">WIN32_NO_ERROR</a></code></strong> on success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if there is a problem with the parameters or a <a href="win32service.constants.php#win32service.constants.errors" class="link">Win32 Error Code</a> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.win32-set-service-status-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Prior to version 1.0.0, if the SAPI is not <code class="literal">&quot;cli&quot;</code>, this function emits an 
<strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong> level error.
  </p>
   <p class="para">
    As of version 1.0.0, will throw a 
    <span class="classname"><a href="class.win32serviceexception.php" class="classname">Win32ServiceException</a></span> if SAPI is not 
    <code class="literal">&quot;cli&quot;</code>
   </p>
 </div>

 
 <div class="refsect1 changelog" id="refsect1-function.win32-set-service-status-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>PECL win32service 1.0.0</td>
       <td>
        Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> on invalid data in parameters,
        previously <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> was returned.
       </td>
      </tr>

      <tr>
       <td>PECL win32service 1.0.0</td>
       <td>
        Throws a <span class="classname"><a href="class.win32serviceexception.php" class="classname">Win32ServiceException</a></span> on error,
        previously a 
        <a href="win32service.constants.php#win32service.constants.errors" class="link">Win32 Error Code</a>
        was returned.
       </td>
      </tr>

      <tr>
       <td>PECL win32service 1.0.0</td>
       <td>
        The return type is now <span class="type"><span class="type"><a href="language.types.void.php" class="type void">void</a></span></span>, previously it was <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>.
       </td>
      </tr>

      <tr>
       <td>PECL win32service 0.2.0</td>
       <td>
        This function works only in the <code class="literal">&quot;cli&quot;</code> SAPI.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.win32-set-service-status-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.win32-start-service-ctrl-dispatcher.php" class="function" rel="rdfs-seeAlso">win32_start_service_ctrl_dispatcher()</a> - Registers the script with the SCM, so that it can act as the service with the given name</span></li>
    <li><span class="function"><a href="function.win32-get-last-control-message.php" class="function" rel="rdfs-seeAlso">win32_get_last_control_message()</a> - Returns the last control message that was sent to this service</span></li>
    <li><span class="function"><a href="function.win32-set-service-exit-mode.php" class="function" rel="rdfs-seeAlso">win32_set_service_exit_mode()</a> - Define or return the exit mode for the current running service</span></li>
    <li><span class="function"><a href="function.win32-set-service-exit-code.php" class="function" rel="rdfs-seeAlso">win32_set_service_exit_code()</a> - Define or return the exit code for the current running service</span></li>
    <li><a href="win32service.constants.php#win32service.constants.servicestatus" class="link">Win32Service Service Status Constants</a></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/win32service/functions/win32-set-service-status.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.win32-set-service-status%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.win32-set-service-status&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.win32-set-service-status.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83133">  <div class="votes">
    <div id="Vu83133">
    <a href="/manual/vote-note.php?id=83133&amp;page=function.win32-set-service-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83133">
    <a href="/manual/vote-note.php?id=83133&amp;page=function.win32-set-service-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83133" title="100% like this...">
    3
    </div>
  </div>
  <a href="#83133" class="name">
  <strong class="user"><em>m dot hald at surfto dot ch</em></strong></a><a class="genanchor" href="#83133"> &para;</a><div class="date" title="2008-05-12 04:16"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83133">
<div class="phpcode"><code><span class="html">On my Machine (Win XP SP2) the function "win32_get_last_control_message" never returns 4 so i will have to reply to 0 also.<br /><br />finally after mixing several examples i now have a version working woithout filling my event log with errors:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/*<br /> * PHP SAMPLE TEMPLATE<br /> */<br /><br />/*<br /> * APP MAIN FUNCTION<br /> * Called each second after the function last time finished<br /> * Should not take longer than max 20 seconds to execute<br /> * ELSE you should call NTServiceResponder(); at least each 20 secs<br /> * WARNING: NTServiceResponder will exit; if there was a STOP request<br /> */<br /></span><span class="keyword">function </span><span class="default">Service_Main</span><span class="keyword">()<br />{<br />    </span><span class="comment">// YOU APPLICATION CODE HERE !!!<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">); </span><span class="comment">// dummy something<br /></span><span class="keyword">}<br /><br /></span><span class="comment">/********************************************************************<br /> *<br /> * SERVICE CONTROLLING<br /> *<br /> ********************************************************************/<br /><br /></span><span class="default">$SERVICE_NAME </span><span class="keyword">= </span><span class="string">"phptestservice"</span><span class="keyword">;<br /></span><span class="default">$SERVICE_DISPLAY </span><span class="keyword">= </span><span class="string">"Test Service with PHP"</span><span class="keyword">;<br /><br /></span><span class="comment">// so u can get: $SERVICE_PATH_PARTS["dirname"] $SERVICE_PATH_PARTS["basename"]  $SERVICE_PATH_PARTS["extension"]<br /></span><span class="default">$SERVICE_PATH_PARTS </span><span class="keyword">= </span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">);<br /><br /></span><span class="default">$SERVICE_PARAMS </span><span class="keyword">= </span><span class="string">" run"</span><span class="keyword">;<br /><br />    if (!isset(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]))<br />    {<br />        die(</span><span class="string">"this application need to be installed as a service.\n run with param install"</span><span class="keyword">);<br />    }<br /><br />    if (</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] == </span><span class="string">'install'</span><span class="keyword">)<br />    {<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">win32_create_service</span><span class="keyword">(array(<br />                                        </span><span class="string">'service' </span><span class="keyword">=&gt; </span><span class="default">$SERVICE_NAME</span><span class="keyword">,<br />                                        </span><span class="string">'display' </span><span class="keyword">=&gt; </span><span class="default">$SERVICE_DISPLAY</span><span class="keyword">,<br />                                        </span><span class="string">'params' </span><span class="keyword">=&gt;  </span><span class="default">__FILE__ </span><span class="keyword">. </span><span class="default">$SERVICE_PARAMS</span><span class="keyword">,<br />                                        </span><span class="comment">//'path' =&gt;  $SERVICE_PATH_PARTS["dirname"] . '\php.exe'<br />                                        </span><span class="keyword">));<br />        </span><span class="default">debug_zval_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);<br />        exit;<br />    }<br />    else if (</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] == </span><span class="string">'uninstall'</span><span class="keyword">)<br />    {<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">win32_delete_service</span><span class="keyword">(</span><span class="string">'dummyphp'</span><span class="keyword">);<br />        </span><span class="default">debug_zval_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);<br />        exit;<br />    }<br />    else if (</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] != </span><span class="string">'run'</span><span class="keyword">)<br />    {<br />        die(</span><span class="string">"bogus args, needs to run as service"</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">// Connect to service dispatcher and notify that startup was successful<br />    </span><span class="keyword">if (!</span><span class="default">win32_start_service_ctrl_dispatcher</span><span class="keyword">(</span><span class="default">$SERVICE_NAME</span><span class="keyword">)) die(</span><span class="string">'Could not connect to service :'</span><span class="keyword">.</span><span class="default">$SERVICE_NAME</span><span class="keyword">);<br />    </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_RUNNING</span><span class="keyword">);<br /><br />    </span><span class="comment">// Main Server Loop<br />    </span><span class="keyword">while (</span><span class="default">1</span><span class="keyword">)<br />    {<br />        </span><span class="default">NTServiceResponder</span><span class="keyword">();<br /><br />        </span><span class="comment">// Main script goes here<br />        </span><span class="default">Service_Main</span><span class="keyword">();<br /><br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">); </span><span class="comment">// at least 1 sec delay per loop<br />    </span><span class="keyword">}<br />    </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_STOPPED</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br /> * Response to NTServiceRequests<br /> */<br /></span><span class="keyword">function </span><span class="default">NTServiceResponder</span><span class="keyword">()<br />{<br /><br />    switch (</span><span class="default">win32_get_last_control_message</span><span class="keyword">())<br />    {<br />    case </span><span class="default">0</span><span class="keyword">: </span><span class="comment">// PATCH for: seems never to go to 4 (WIN32_SERVICE_CONTROL_INTERROGATE)<br />        </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_RUNNING</span><span class="keyword">);<br />        return </span><span class="default">TRUE</span><span class="keyword">;<br />        break;<br />    case </span><span class="default">WIN32_SERVICE_CONTROL_CONTINUE</span><span class="keyword">:<br />        return </span><span class="default">TRUE</span><span class="keyword">; </span><span class="comment">// "Continue"<br />    </span><span class="keyword">case </span><span class="default">WIN32_SERVICE_CONTROL_INTERROGATE</span><span class="keyword">:<br />        </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_RUNNING</span><span class="keyword">);<br />        return </span><span class="default">TRUE</span><span class="keyword">; </span><span class="comment">// Respond with status<br />    </span><span class="keyword">case </span><span class="default">WIN32_SERVICE_CONTROL_STOP</span><span class="keyword">:<br />        </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_STOPPED</span><span class="keyword">);<br />        exit; </span><span class="comment">// Terminate script<br />    </span><span class="keyword">default:<br />        </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_ERROR_CALL_NOT_IMPLEMENTED</span><span class="keyword">); </span><span class="comment">// Add more cases to handle other service calls<br />    </span><span class="keyword">}<br /><br />    return </span><span class="default">FALSE</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97883">  <div class="votes">
    <div id="Vu97883">
    <a href="/manual/vote-note.php?id=97883&amp;page=function.win32-set-service-status&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97883">
    <a href="/manual/vote-note.php?id=97883&amp;page=function.win32-set-service-status&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97883" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#97883" class="name">
  <strong class="user"><em>paul_nelson57071 at yahoo dot com</em></strong></a><a class="genanchor" href="#97883"> &para;</a><div class="date" title="2010-05-13 11:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97883">
<div class="phpcode"><code><span class="html">So after much searching I finally found all the peices to make a working windows service &amp; server including:<br />- Installing &amp; Uninstalling the service<br />- Starting &amp; Stopping the Service<br />- Actually running a basic Server<br />- Responding to windows Service to Stop/Start/Restart <br /><br />I hope you find this useful! I did this using PHP 5.2 and the PECL library for 5.2 (PHP 5.3 at the time does not have a PECL Library compiled for it)<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">//Service Settings<br />    </span><span class="default">$Service </span><span class="keyword">= </span><span class="string">'MyServiceFinal'</span><span class="keyword">;<br />    </span><span class="default">$Display </span><span class="keyword">= </span><span class="string">'My PHP Service'</span><span class="keyword">;<br />    <br />    </span><span class="comment">//Server Settings<br />    </span><span class="default">$host </span><span class="keyword">= </span><span class="string">'127.0.0.1'</span><span class="keyword">;        </span><span class="comment">//Bind to IP #<br />    </span><span class="default">$port </span><span class="keyword">= </span><span class="default">23</span><span class="keyword">;                            </span><span class="comment">//On port #<br />    </span><span class="default">$max </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">;                            </span><span class="comment">//Maximum Clients<br />    <br />    <br />    //Exit if no start-up argument is passed<br />    </span><span class="keyword">if (!isset(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])){</span><span class="default">ShowHelp</span><span class="keyword">(); exit;}<br />    <br />    </span><span class="comment">//Create Windows Service<br />    </span><span class="keyword">if (</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] == </span><span class="string">'install'</span><span class="keyword">) {                         <br />    </span><span class="default">$x </span><span class="keyword">= </span><span class="default">win32_create_service</span><span class="keyword">(array(<br />        </span><span class="string">'service' </span><span class="keyword">=&gt; </span><span class="default">$Service</span><span class="keyword">,<br />        </span><span class="string">'display' </span><span class="keyword">=&gt; </span><span class="default">$Service</span><span class="keyword">,<br />        </span><span class="string">'params' </span><span class="keyword">=&gt; </span><span class="default">__file__ </span><span class="keyword">. </span><span class="string">' run'</span><span class="keyword">,<br />        </span><span class="string">'path' </span><span class="keyword">=&gt; </span><span class="string">'c:\\php\\php.exe'</span><span class="keyword">,<br />    ));<br />    </span><span class="default">debug_zval_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);<br />    echo </span><span class="string">"Service Installed\n\n"</span><span class="keyword">;<br />    exit;<br />    <br />  </span><span class="comment">//Remove Windows Service<br />    </span><span class="keyword">} else if (</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] == </span><span class="string">'uninstall'</span><span class="keyword">) {<br />        </span><span class="default">$x </span><span class="keyword">= </span><span class="default">win32_delete_service</span><span class="keyword">(</span><span class="default">$Service</span><span class="keyword">);<br />        </span><span class="default">debug_zval_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);<br />        echo </span><span class="string">"Service Removed\n\n"</span><span class="keyword">;<br />        exit;<br />    <br />  </span><span class="comment">//Start Windows Service<br />    </span><span class="keyword">} elseif(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] == </span><span class="string">"start"</span><span class="keyword">) {<br />      </span><span class="default">$x </span><span class="keyword">= </span><span class="default">win32_start_service</span><span class="keyword">(</span><span class="default">$Service</span><span class="keyword">);<br />      </span><span class="default">debug_zval_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);<br />      echo </span><span class="string">"Service Started\n\n"</span><span class="keyword">;<br />      exit;<br />      <br />    </span><span class="comment">//Stop Windows Service<br />    </span><span class="keyword">} elseif(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] == </span><span class="string">"stop"</span><span class="keyword">) {<br />      </span><span class="default">$x </span><span class="keyword">= </span><span class="default">win32_stop_service</span><span class="keyword">(</span><span class="default">$Service</span><span class="keyword">);<br />      </span><span class="default">debug_zval_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);<br />      echo </span><span class="string">"Service Stopped\n\n"</span><span class="keyword">;<br />      exit;<br />      <br />    </span><span class="comment">//Unkown Command<br />    </span><span class="keyword">} else if (</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] != </span><span class="string">'run'</span><span class="keyword">) {<br />        </span><span class="default">ShowHelp</span><span class="keyword">(); exit();<br />    }<br /><br /></span><span class="comment">//Tell windows the service has started...<br /></span><span class="keyword">if (!</span><span class="default">win32_start_service_ctrl_dispatcher</span><span class="keyword">(</span><span class="default">$Service</span><span class="keyword">)) die(</span><span class="string">"Could not connect to service : </span><span class="default">$Service</span><span class="string">"</span><span class="keyword">);<br /></span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_RUNNING</span><span class="keyword">);<br /><br /></span><span class="comment">// No timeouts, flush content immediatly<br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">ob_implicit_flush</span><span class="keyword">();<br /><br /></span><span class="comment">//Server Loop<br /></span><span class="keyword">while (</span><span class="default">1</span><span class="keyword">) {<br />    </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">500</span><span class="keyword">);<br />    <br />    </span><span class="comment">//Handle Windows Service Request<br />    </span><span class="keyword">switch (</span><span class="default">win32_get_last_control_message</span><span class="keyword">()) {<br />        case </span><span class="default">WIN32_SERVICE_CONTROL_CONTINUE</span><span class="keyword">: break; </span><span class="comment">// Continue server routine<br />        </span><span class="keyword">case </span><span class="default">WIN32_SERVICE_CONTROL_INTERROGATE</span><span class="keyword">: </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_NO_ERROR</span><span class="keyword">); break; </span><span class="comment">// Respond with status<br />        </span><span class="keyword">case </span><span class="default">WIN32_SERVICE_CONTROL_STOP</span><span class="keyword">: </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_STOPPED</span><span class="keyword">); exit; </span><span class="comment">// Terminate script<br />        </span><span class="keyword">default: </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_ERROR_CALL_NOT_IMPLEMENTED</span><span class="keyword">); </span><span class="comment">// Add more cases to handle other service calls<br />    </span><span class="keyword">}<br />    </span><span class="comment">//Acutal Server Code<br /><br /></span><span class="keyword">}<br /><br /></span><span class="comment">//Clean up and Exit<br /></span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_STOPPED</span><span class="keyword">);<br />exit;<br /><br /></span><span class="comment">//*************** FUNCTIONS ***************<br /></span><span class="keyword">function </span><span class="default">ShowHelp</span><span class="keyword">(){<br />    echo </span><span class="string">"Usage:<br />    install:\t installs servce<br />    uninstall:\t deletes service<br />    start:\t\t Start the windows service<br />    stop:\t\t Stops the windows service<br />    run:\t\t called by CMS to run the service<br />    <br />For information on code numbers type 'net helpmsg xxxx'<br />EXAMPEL: 'net helpmsg 1072'<br />    <br />    "</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.win32-set-service-status&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.win32-set-service-status.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.win32service.php">win32service Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.win32-add-right-access-service.php" title="win32_&#8203;add_&#8203;right_&#8203;access_&#8203;service">win32_&#8203;add_&#8203;right_&#8203;access_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-add-service-env-var.php" title="win32_&#8203;add_&#8203;service_&#8203;env_&#8203;var">win32_&#8203;add_&#8203;service_&#8203;env_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-continue-service.php" title="win32_&#8203;continue_&#8203;service">win32_&#8203;continue_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-create-service.php" title="win32_&#8203;create_&#8203;service">win32_&#8203;create_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-delete-service.php" title="win32_&#8203;delete_&#8203;service">win32_&#8203;delete_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-get-last-control-message.php" title="win32_&#8203;get_&#8203;last_&#8203;control_&#8203;message">win32_&#8203;get_&#8203;last_&#8203;control_&#8203;message</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-get-service-env-vars.php" title="win32_&#8203;get_&#8203;service_&#8203;env_&#8203;vars">win32_&#8203;get_&#8203;service_&#8203;env_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-pause-service.php" title="win32_&#8203;pause_&#8203;service">win32_&#8203;pause_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-query-service-status.php" title="win32_&#8203;query_&#8203;service_&#8203;status">win32_&#8203;query_&#8203;service_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-read-all-rights-access-service.php" title="win32_&#8203;read_&#8203;all_&#8203;rights_&#8203;access_&#8203;service">win32_&#8203;read_&#8203;all_&#8203;rights_&#8203;access_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-read-right-access-service.php" title="win32_&#8203;read_&#8203;right_&#8203;access_&#8203;service">win32_&#8203;read_&#8203;right_&#8203;access_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-remove-right-access-service.php" title="win32_&#8203;remove_&#8203;right_&#8203;access_&#8203;service">win32_&#8203;remove_&#8203;right_&#8203;access_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-remove-service-env-var.php" title="win32_&#8203;remove_&#8203;service_&#8203;env_&#8203;var">win32_&#8203;remove_&#8203;service_&#8203;env_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-send-custom-control.php" title="win32_&#8203;send_&#8203;custom_&#8203;control">win32_&#8203;send_&#8203;custom_&#8203;control</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-set-service-exit-code.php" title="win32_&#8203;set_&#8203;service_&#8203;exit_&#8203;code">win32_&#8203;set_&#8203;service_&#8203;exit_&#8203;code</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-set-service-exit-mode.php" title="win32_&#8203;set_&#8203;service_&#8203;exit_&#8203;mode">win32_&#8203;set_&#8203;service_&#8203;exit_&#8203;mode</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-set-service-pause-resume-state.php" title="win32_&#8203;set_&#8203;service_&#8203;pause_&#8203;resume_&#8203;state">win32_&#8203;set_&#8203;service_&#8203;pause_&#8203;resume_&#8203;state</a>
                        </li>
                                                <li class="current">
                            <a href="function.win32-set-service-status.php" title="win32_&#8203;set_&#8203;service_&#8203;status">win32_&#8203;set_&#8203;service_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-start-service.php" title="win32_&#8203;start_&#8203;service">win32_&#8203;start_&#8203;service</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-start-service-ctrl-dispatcher.php" title="win32_&#8203;start_&#8203;service_&#8203;ctrl_&#8203;dispatcher">win32_&#8203;start_&#8203;service_&#8203;ctrl_&#8203;dispatcher</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-stop-service.php" title="win32_&#8203;stop_&#8203;service">win32_&#8203;stop_&#8203;service</a>
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
