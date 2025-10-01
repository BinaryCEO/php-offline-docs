<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: win32_start_service_ctrl_dispatcher - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.win32-start-service-ctrl-dispatcher.php">
 <link rel="shorturl" href="https://www.php.net/win32-start-service-ctrl-dispatcher">
 <link rel="alternate" href="https://www.php.net/win32-start-service-ctrl-dispatcher" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.win32service.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.win32-start-service.php">
 <link rel="next" href="https://www.php.net/manual/en/function.win32-stop-service.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.win32-start-service-ctrl-dispatcher.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.win32-start-service-ctrl-dispatcher.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.win32-start-service-ctrl-dispatcher.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.win32-start-service-ctrl-dispatcher.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.win32-start-service-ctrl-dispatcher.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.win32-start-service-ctrl-dispatcher.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.win32-start-service-ctrl-dispatcher.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.win32-start-service-ctrl-dispatcher.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.win32-start-service-ctrl-dispatcher.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.win32-start-service-ctrl-dispatcher.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.win32-start-service-ctrl-dispatcher.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Registers the script with the SCM, so that it can act as the service with the given name" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: win32_start_service_ctrl_dispatcher - Manual" />
<meta name="twitter:description" content="Registers the script with the SCM, so that it can act as the service with the given name" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: win32_start_service_ctrl_dispatcher - Manual" />
<meta itemprop="description" content="Registers the script with the SCM, so that it can act as the service with the given name" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Registers the script with the SCM, so that it can act as the service with the given name" />

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
        <a href="function.win32-stop-service.php">
          win32_stop_service &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.win32-start-service.php">
          &laquo; win32_start_service        </a>
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
            <option value='en/function.win32-start-service-ctrl-dispatcher.php' selected="selected">English</option>
            <option value='de/function.win32-start-service-ctrl-dispatcher.php'>German</option>
            <option value='es/function.win32-start-service-ctrl-dispatcher.php'>Spanish</option>
            <option value='fr/function.win32-start-service-ctrl-dispatcher.php'>French</option>
            <option value='it/function.win32-start-service-ctrl-dispatcher.php'>Italian</option>
            <option value='ja/function.win32-start-service-ctrl-dispatcher.php'>Japanese</option>
            <option value='pt_BR/function.win32-start-service-ctrl-dispatcher.php'>Brazilian Portuguese</option>
            <option value='ru/function.win32-start-service-ctrl-dispatcher.php'>Russian</option>
            <option value='tr/function.win32-start-service-ctrl-dispatcher.php'>Turkish</option>
            <option value='uk/function.win32-start-service-ctrl-dispatcher.php'>Ukrainian</option>
            <option value='zh/function.win32-start-service-ctrl-dispatcher.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.win32-start-service-ctrl-dispatcher" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">win32_start_service_ctrl_dispatcher</h1>
  <p class="verinfo">(PECL win32service &gt;=0.1.0)</p><p class="refpurpose"><span class="refname">win32_start_service_ctrl_dispatcher</span> &mdash; <span class="dc-title">Registers the script with the SCM, so that it can act as the service with the given name</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.win32-start-service-ctrl-dispatcher-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>win32_start_service_ctrl_dispatcher</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$gracefulMode</code><span class="initializer"> = true</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


  <p class="para rdfs-comment">
   When launched via the Service Control Manager, a service process is
   required to &quot;check-in&quot; with it to establish service monitoring and
   communication facilities.  This function performs the check-in by spawning
   a thread to handle the lower-level communication with the service control
   manager.
  </p>
  <p class="para">
   Once started, the service process should do 2 things. The first is to tell
   the Service Control Manager that the service is running. This is achieved
   by calling <span class="function"><a href="function.win32-set-service-status.php" class="function">win32_set_service_status()</a></span> with the
   <strong><code><a href="win32service.constants.php#constant.win32-service-running">WIN32_SERVICE_RUNNING</a></code></strong> constant. If you need to perform
   some lengthy process before the service is actually running, then you can
   use the <strong><code><a href="win32service.constants.php#constant.win32-service-start-pending">WIN32_SERVICE_START_PENDING</a></code></strong> constant. The
   second is to continue to check-in with the service control manager so that
   it can determine if it should terminate. This is achieved by periodically
   calling <span class="function"><a href="function.win32-get-last-control-message.php" class="function">win32_get_last_control_message()</a></span> and handling the
   return code appropriately.
  </p>

  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    Since version 0.2.0, this function work only in &quot;cli&quot; SAPI. On other SAPI 
    this function is disabled.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.win32-start-service-ctrl-dispatcher-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">name</code></dt>
     <dd>
      <p class="para">
       The short-name of the service, as registered by
       <span class="function"><a href="function.win32-create-service.php" class="function">win32_create_service()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">gracefulMode</code></dt>
     <dd>
      <p class="para">
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> for exit graceful. <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> for exit with error. See 
       <span class="function"><a href="function.win32-set-service-exit-mode.php" class="function">win32_set_service_exit_mode()</a></span> for more details.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.win32-start-service-ctrl-dispatcher-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
  <p class="para">
    Prior to version 1.0.0, returned <strong><code><a href="win32service.constants.php#constant.win32-no-error">WIN32_NO_ERROR</a></code></strong> on success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if there is a problem with the parameters or a <a href="win32service.constants.php#win32service.constants.errors" class="link">Win32 Error Code</a> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.win32-start-service-ctrl-dispatcher-errors">
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


 <div class="refsect1 changelog" id="refsect1-function.win32-start-service-ctrl-dispatcher-changelog">
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
       <td>PECL win32service 0.4.0</td>
       <td>
        The parameter <code class="parameter">gracefulMode</code> has been added.
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


 <div class="refsect1 examples" id="refsect1-function.win32-start-service-ctrl-dispatcher-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5754">
    <p><strong>Example #1 A <span class="function"><strong>win32_start_service_ctrl_dispatcher()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     Check if the service is runnig under the SCM.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">win32_start_service_ctrl_dispatcher</span><span style="color: #007700">(</span><span style="color: #DD0000">'dummyphp'</span><span style="color: #007700">)) {<br />  die(</span><span style="color: #DD0000">"I'm probably not running under the service control manager"</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">win32_set_service_status</span><span style="color: #007700">(</span><span style="color: #0000BB">WIN32_SERVICE_START_PENDING</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Some lengthy process to get this service up and running.<br /><br /></span><span style="color: #0000BB">win32_set_service_status</span><span style="color: #007700">(</span><span style="color: #0000BB">WIN32_SERVICE_RUNNING</span><span style="color: #007700">);<br /><br />while (</span><span style="color: #0000BB">WIN32_SERVICE_CONTROL_STOP </span><span style="color: #007700">!= </span><span style="color: #0000BB">win32_get_last_control_message</span><span style="color: #007700">()) {<br />  </span><span style="color: #FF8000"># do some work here, trying not to take more than around 30 seconds<br />  # before coming back into the loop again<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.win32-start-service-ctrl-dispatcher-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.win32-set-service-status.php" class="function" rel="rdfs-seeAlso">win32_set_service_status()</a> - Update the service status</span></li>
    <li><span class="function"><a href="function.win32-get-last-control-message.php" class="function" rel="rdfs-seeAlso">win32_get_last_control_message()</a> - Returns the last control message that was sent to this service</span></li>
    <li><span class="function"><a href="function.win32-set-service-exit-mode.php" class="function" rel="rdfs-seeAlso">win32_set_service_exit_mode()</a> - Define or return the exit mode for the current running service</span></li>
    <li><span class="function"><a href="function.win32-set-service-exit-code.php" class="function" rel="rdfs-seeAlso">win32_set_service_exit_code()</a> - Define or return the exit code for the current running service</span></li>
    <li><a href="win32service.constants.php#win32service.constants.errors" class="link">Win32 Error Codes</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/win32service/functions/win32-start-service-ctrl-dispatcher.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.win32-start-service-ctrl-dispatcher%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.win32-start-service-ctrl-dispatcher&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.win32-start-service-ctrl-dispatcher.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93975">  <div class="votes">
    <div id="Vu93975">
    <a href="/manual/vote-note.php?id=93975&amp;page=function.win32-start-service-ctrl-dispatcher&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93975">
    <a href="/manual/vote-note.php?id=93975&amp;page=function.win32-start-service-ctrl-dispatcher&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93975" title="50% like this...">
    0
    </div>
  </div>
  <a href="#93975" class="name">
  <strong class="user"><em>andrea</em></strong></a><a class="genanchor" href="#93975"> &para;</a><div class="date" title="2009-10-09 03:07"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93975">
<div class="phpcode"><code><span class="html">Insert value of params between " if the string have a space:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// First you need to create a service, you only need to do this once
<br />/*
<br />win32_create_service(array(
<br />    'service' =&gt; 'myphpservice',
<br />    'display' =&gt; 'My PHP Service',
<br />    'params' =&gt; '"c:\\my folder\myphpservice.php"',
<br />    'path' =&gt; 'c:\\PHP\\php.exe'));
<br />*/
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76421">  <div class="votes">
    <div id="Vu76421">
    <a href="/manual/vote-note.php?id=76421&amp;page=function.win32-start-service-ctrl-dispatcher&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76421">
    <a href="/manual/vote-note.php?id=76421&amp;page=function.win32-start-service-ctrl-dispatcher&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76421" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#76421" class="name">
  <strong class="user"><em>dylan at nopower dot org</em></strong></a><a class="genanchor" href="#76421"> &para;</a><div class="date" title="2007-07-14 07:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76421">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// First you need to create a service, you only need to do this once<br />/*<br />win32_create_service(array(<br />    'service' =&gt; 'myphpservice',<br />    'display' =&gt; 'My PHP Service',<br />    'params' =&gt; 'c:\\myphpservice.php',<br />    'path' =&gt; 'c:\\PHP\\php.exe'));<br />*/<br /><br /></span><span class="default">$myservicename </span><span class="keyword">= </span><span class="string">'myphpservice'</span><span class="keyword">;<br /><br /></span><span class="comment">// Connect to service dispatcher and notify that startup was successful<br /></span><span class="keyword">if (!</span><span class="default">win32_start_service_ctrl_dispatcher</span><span class="keyword">(</span><span class="default">$myservicename</span><span class="keyword">)) die(</span><span class="string">'Could not connect to service :'</span><span class="keyword">.</span><span class="default">$myservicename</span><span class="keyword">);<br /></span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_RUNNING</span><span class="keyword">);<br /><br /></span><span class="comment">// Main Server Loop<br /></span><span class="keyword">while (</span><span class="default">1</span><span class="keyword">) {<br />    switch (</span><span class="default">win32_get_last_control_message</span><span class="keyword">()) {<br />        case </span><span class="default">WIN32_SERVICE_CONTROL_CONTINUE</span><span class="keyword">: break; </span><span class="comment">// Continue server routine<br />        </span><span class="keyword">case </span><span class="default">WIN32_SERVICE_CONTROL_INTERROGATE</span><span class="keyword">: </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_NO_ERROR</span><span class="keyword">); break; </span><span class="comment">// Respond with status<br />        </span><span class="keyword">case </span><span class="default">WIN32_SERVICE_CONTROL_STOP</span><span class="keyword">: </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_STOPPED</span><span class="keyword">); exit; </span><span class="comment">// Terminate script<br />        </span><span class="keyword">default: </span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_ERROR_CALL_NOT_IMPLEMENTED</span><span class="keyword">); </span><span class="comment">// Add more cases to handle other service calls<br />    </span><span class="keyword">}<br />    <br />    </span><span class="comment">// Main script goes here<br />    <br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">); </span><span class="comment">// Run every 10 seconds<br /></span><span class="keyword">}<br /></span><span class="default">win32_set_service_status</span><span class="keyword">(</span><span class="default">WIN32_SERVICE_STOPPED</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76319">  <div class="votes">
    <div id="Vu76319">
    <a href="/manual/vote-note.php?id=76319&amp;page=function.win32-start-service-ctrl-dispatcher&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76319">
    <a href="/manual/vote-note.php?id=76319&amp;page=function.win32-start-service-ctrl-dispatcher&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76319" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#76319" class="name">
  <strong class="user"><em>Guibod</em></strong></a><a class="genanchor" href="#76319"> &para;</a><div class="date" title="2007-07-10 05:41"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76319">
<div class="phpcode"><code><span class="html">Don't try to call "win32_start_service_ctrl_dispatcher" too late in your code. You'd trigger a #2186 error : "The service is not responding to the control function." (from commande line) or a #1053 error : "The service did not respond to the start or control request in a timely fashion." (from services GUI).<br /><br />Try not to load a bunch of PEAR classes before to register php script as Service like I did.<br /><br />Another good hint, to get a verbose version of the return code, you can call "NET HELPMSG ###" from command line where ### is your error code.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.win32-start-service-ctrl-dispatcher&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.win32-start-service-ctrl-dispatcher.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.win32-set-service-status.php" title="win32_&#8203;set_&#8203;service_&#8203;status">win32_&#8203;set_&#8203;service_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.win32-start-service.php" title="win32_&#8203;start_&#8203;service">win32_&#8203;start_&#8203;service</a>
                        </li>
                                                <li class="current">
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
