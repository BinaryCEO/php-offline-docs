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

 <link rel="canonical" href="https://www.php.net/manual/en/network.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/network.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/network.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/network.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.network.php">

 <link rel="alternate" href="https://www.php.net/manual/en/network.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/network.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/network.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/network.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/network.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/network.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/network.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/network.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/network.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/network.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/network.constants.php" hreflang="zh">

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
        <a href="ref.network.php">
          Network Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="network.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.network.php'>Network</a></li>      </ul>
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
            <option value='en/network.constants.php' selected="selected">English</option>
            <option value='de/network.constants.php'>German</option>
            <option value='es/network.constants.php'>Spanish</option>
            <option value='fr/network.constants.php'>French</option>
            <option value='it/network.constants.php'>Italian</option>
            <option value='ja/network.constants.php'>Japanese</option>
            <option value='pt_BR/network.constants.php'>Brazilian Portuguese</option>
            <option value='ru/network.constants.php'>Russian</option>
            <option value='tr/network.constants.php'>Turkish</option>
            <option value='uk/network.constants.php'>Ukrainian</option>
            <option value='zh/network.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="network.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are always available as part of the PHP core.
</p>

 <dl>
  <strong class="title">
   Available <code class="parameter">flags</code> for
   <span class="function"><a href="function.openlog.php" class="function">openlog()</a></span>
  </strong>

  
   <dt id="constant.log-cons">
    <strong><code><a href="network.constants.php#constant.log-cons">LOG_CONS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     If there is an error while sending data to the system logger,
     write directly to the system console.
    </span>
   </dd>
  

  
   <dt id="constant.log-ndelay">
    <strong><code><a href="network.constants.php#constant.log-ndelay">LOG_NDELAY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Open the connection to the logger immediately.
    </span>
   </dd>
  

  
   <dt id="constant.log-odelay">
    <strong><code><a href="network.constants.php#constant.log-odelay">LOG_ODELAY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Delay opening the connection until the first message is logged.
     This is the default behaviour.
    </span>
   </dd>
  

  
   <dt id="constant.log-nowait">
    <strong><code><a href="network.constants.php#constant.log-nowait">LOG_NOWAIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  

  
   <dt id="constant.log-perror">
    <strong><code><a href="network.constants.php#constant.log-perror">LOG_PERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Additionally log messages to <strong><code><a href="reserved.constants.php#constant.stderr">STDERR</a></code></strong>.
    </span>
   </dd>
  

  
   <dt id="constant.log-pid">
    <strong><code><a href="network.constants.php#constant.log-pid">LOG_PID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Include the PID with each log message.
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">
   Available <code class="parameter">facility</code> for
   <span class="function"><a href="function.openlog.php" class="function">openlog()</a></span>
  </strong>

  
   <dt id="constant.log-auth">
    <strong><code><a href="network.constants.php#constant.log-auth">LOG_AUTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     For security/authorization messages.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      Use <strong><code><a href="network.constants.php#constant.log-authpriv">LOG_AUTHPRIV</a></code></strong> instead when available.
     </span>
    </p></blockquote>
   </dd>
  

  
   <dt id="constant.log-authpriv">
    <strong><code><a href="network.constants.php#constant.log-authpriv">LOG_AUTHPRIV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     For private security/authorization messages.
    </span>
   </dd>
  

  
   <dt id="constant.log-cron">
    <strong><code><a href="network.constants.php#constant.log-cron">LOG_CRON</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     For clock daemon messages.
     For example <strong class="command">cron</strong> or <strong class="command">at</strong>.
    </span>
   </dd>
  

  
   <dt id="constant.log-daemon">
    <strong><code><a href="network.constants.php#constant.log-daemon">LOG_DAEMON</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     For system daemon messages.
    </span>
   </dd>
  

  
   <dt id="constant.log-kern">
    <strong><code><a href="network.constants.php#constant.log-kern">LOG_KERN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     For kernel messages.
    </span>
   </dd>
  

  
   <dt id="constant.log-local0">
    <strong><code><a href="network.constants.php#constant.log-local0">LOG_LOCAL0</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Reserved for local use.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Not available on Windows.
     </p>
    </div>
   </dd>
  

  
   <dt id="constant.log-local1">
    <strong><code><a href="network.constants.php#constant.log-local1">LOG_LOCAL1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Reserved for local use.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Not available on Windows.
     </p>
    </div>
   </dd>
  

  
   <dt id="constant.log-local2">
    <strong><code><a href="network.constants.php#constant.log-local2">LOG_LOCAL2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Reserved for local use.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Not available on Windows.
     </p>
    </div>
   </dd>
  

  
   <dt id="constant.log-local3">
    <strong><code><a href="network.constants.php#constant.log-local3">LOG_LOCAL3</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Reserved for local use.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Not available on Windows.
     </p>
    </div>
   </dd>
  

  
   <dt id="constant.log-local4">
    <strong><code><a href="network.constants.php#constant.log-local4">LOG_LOCAL4</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Reserved for local use.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Not available on Windows.
     </p>
    </div>
   </dd>
  

  
   <dt id="constant.log-local5">
    <strong><code><a href="network.constants.php#constant.log-local5">LOG_LOCAL5</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Reserved for local use.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Not available on Windows.
     </p>
    </div>
   </dd>
  

  
   <dt id="constant.log-local6">
    <strong><code><a href="network.constants.php#constant.log-local6">LOG_LOCAL6</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Reserved for local use.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Not available on Windows.
     </p>
    </div>
   </dd>
  

  
   <dt id="constant.log-local7">
    <strong><code><a href="network.constants.php#constant.log-local7">LOG_LOCAL7</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Reserved for local use.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Not available on Windows.
     </p>
    </div>
   </dd>
  

  
   <dt id="constant.log-lpr">
    <strong><code><a href="network.constants.php#constant.log-lpr">LOG_LPR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     For messages from the line printer subsystem.
    </span>
   </dd>
  

  
   <dt id="constant.log-mail">
    <strong><code><a href="network.constants.php#constant.log-mail">LOG_MAIL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     For messages from the mail subsystem.
    </span>
   </dd>
  

  
   <dt id="constant.log-news">
    <strong><code><a href="network.constants.php#constant.log-news">LOG_NEWS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     For messages from the USENET news subsystem.
    </span>
   </dd>
  

  
   <dt id="constant.log-syslog">
    <strong><code><a href="network.constants.php#constant.log-syslog">LOG_SYSLOG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     For messages generated internally by <strong class="command">syslogd</strong>.
    </span>
   </dd>
  

  
   <dt id="constant.log-user">
    <strong><code><a href="network.constants.php#constant.log-user">LOG_USER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     For generic user-level messages.
    </span>
   </dd>
  

  
   <dt id="constant.log-uucp">
    <strong><code><a href="network.constants.php#constant.log-uucp">LOG_UUCP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     For messages from the UUCP subsystem.
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">
   Available <code class="parameter">priority</code> for
   <span class="function"><a href="function.syslog.php" class="function">syslog()</a></span>
  </strong>

  <p class="simpara">
   The priority constants are listed from urgent, to debug messages.
  </p>

  
   <dt id="constant.log-emerg">
    <strong><code><a href="network.constants.php#constant.log-emerg">LOG_EMERG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Emergency, the system is unusable.
     This corresponds to a panic condition.
     Usually broadcast to all processes.
    </span>
   </dd>
  

  
   <dt id="constant.log-alert">
    <strong><code><a href="network.constants.php#constant.log-alert">LOG_ALERT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alert, immediate action is required.
     For example, a corrupted system database.
    </span>
   </dd>
  

  
   <dt id="constant.log-crit">
    <strong><code><a href="network.constants.php#constant.log-crit">LOG_CRIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Critical, action is required.
     For example, a hard device errors.
    </span>
   </dd>
  

  
   <dt id="constant.log-err">
    <strong><code><a href="network.constants.php#constant.log-err">LOG_ERR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Errors messages.
    </span>
   </dd>
  

  
   <dt id="constant.log-warning">
    <strong><code><a href="network.constants.php#constant.log-warning">LOG_WARNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Warning messages.
    </span>
   </dd>
  

  
   <dt id="constant.log-notice">
    <strong><code><a href="network.constants.php#constant.log-notice">LOG_NOTICE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Notice messages, corresponds to conditions that are not error conditions,
     but that may require special handling.
    </span>
   </dd>
  

  
   <dt id="constant.log-info">
    <strong><code><a href="network.constants.php#constant.log-info">LOG_INFO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Informational messages.
    </span>
   </dd>
  

  
   <dt id="constant.log-debug">
    <strong><code><a href="network.constants.php#constant.log-debug">LOG_DEBUG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Debugging messages that contain information normally of use only when
     debugging a program.
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">
   Available <code class="parameter">type</code>s for
   <span class="function"><a href="function.dns-get-record.php" class="function">dns_get_record()</a></span>
  </strong>


  
   <dt id="constant.dns-any">
    <strong><code><a href="network.constants.php#constant.dns-any">DNS_ANY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Any Resource Record.
     On most systems this returns all resource records,
     however due to eccentricities in the performance of
     <code class="literal">libresolv</code> between platforms this is not guaranteed.
    </span>
    <span class="simpara">
     The slower <strong><code><a href="network.constants.php#constant.dns-all">DNS_ALL</a></code></strong> will collect all records more reliably.
    </span>
   </dd>
  

  
   <dt id="constant.dns-all">
    <strong><code><a href="network.constants.php#constant.dns-all">DNS_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Iteratively query the name server for each available record type.
    </span>
   </dd>
  

  
   <dt id="constant.dns-a">
    <strong><code><a href="network.constants.php#constant.dns-a">DNS_A</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     IPv4 Address Resource.
    </span>
   </dd>
  

  
   <dt id="constant.dns-aaaa">
    <strong><code><a href="network.constants.php#constant.dns-aaaa">DNS_AAAA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     IPv6 Address Resource.
    </span>
   </dd>
  

  
   <dt id="constant.dns-a6">
    <strong><code><a href="network.constants.php#constant.dns-a6">DNS_A6</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Defined as part of early IPv6, but downgraded to historic by
     <a href="https://datatracker.ietf.org/doc/html/rfc6563" class="link external">&raquo;&nbsp;RFC 6563</a>.
    </span>
   </dd>
  

  
   <dt id="constant.dns-caa">
    <strong><code><a href="network.constants.php#constant.dns-caa">DNS_CAA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Certification Authority Authorization Resource.
     Available as of PHP 7.0.16 and 7.1.2.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Not available on Windows.
     </p>
    </div>
   </dd>
  

  
   <dt id="constant.dns-cname">
    <strong><code><a href="network.constants.php#constant.dns-cname">DNS_CNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias (Canonical Name) Resource.
    </span>
   </dd>
  

  
   <dt id="constant.dns-hinfo">
    <strong><code><a href="network.constants.php#constant.dns-hinfo">DNS_HINFO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Host Info Resource.
     For more explanations and meanings of these values, visit IANA&#039;s page on
     <a href="http://www.iana.org/assignments/operating-system-names" class="link external">&raquo;&nbsp;Operating System Names</a>.
    </span>
   </dd>
  

  
   <dt id="constant.dns-mx">
    <strong><code><a href="network.constants.php#constant.dns-mx">DNS_MX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Mail Exchanger Resource.
    </span>
   </dd>
  

  
   <dt id="constant.dns-naptr">
    <strong><code><a href="network.constants.php#constant.dns-naptr">DNS_NAPTR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Naming Authority Pointer.
    </span>
   </dd>
  

  
   <dt id="constant.dns-ns">
    <strong><code><a href="network.constants.php#constant.dns-ns">DNS_NS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Authoritative Name Server Resource.
    </span>
   </dd>
  

  
   <dt id="constant.dns-ptr">
    <strong><code><a href="network.constants.php#constant.dns-ptr">DNS_PTR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Pointer Resource.
    </span>
   </dd>
  

  
   <dt id="constant.dns-soa">
    <strong><code><a href="network.constants.php#constant.dns-soa">DNS_SOA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Start of Authority Resource.
    </span>
   </dd>
  

  
   <dt id="constant.dns-srv">
    <strong><code><a href="network.constants.php#constant.dns-srv">DNS_SRV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Service locator.
    </span>
   </dd>
  

  
   <dt id="constant.dns-txt">
    <strong><code><a href="network.constants.php#constant.dns-txt">DNS_TXT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Text Resource.
    </span>
   </dd>
  
 </dl>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/network/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fnetwork.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=network.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/network.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122827">  <div class="votes">
    <div id="Vu122827">
    <a href="/manual/vote-note.php?id=122827&amp;page=network.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122827">
    <a href="/manual/vote-note.php?id=122827&amp;page=network.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122827" title="57% like this...">
    1
    </div>
  </div>
  <a href="#122827" class="name">
  <strong class="user"><em>arash dot dalir at gmail dot com</em></strong></a><a class="genanchor" href="#122827"> &para;</a><div class="date" title="2018-06-12 08:29"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122827">
<div class="phpcode"><code><span class="html">FYI, on windows, the vlaues for LOG_* "log-levels" are as followed:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">Test</span><span class="keyword">;<br /><br />include </span><span class="string">'vendor/autoload.php'</span><span class="keyword">;<br /><br />use </span><span class="default">Psr\Log\LogLevel</span><span class="keyword">;<br /><br /></span><span class="default">$log_levels </span><span class="keyword">= array(<br />    </span><span class="default">LogLevel</span><span class="keyword">::</span><span class="default">EMERGENCY </span><span class="keyword">=&gt; </span><span class="default">LOG_EMERG</span><span class="keyword">,<br />    </span><span class="default">LogLevel</span><span class="keyword">::</span><span class="default">ALERT </span><span class="keyword">=&gt; </span><span class="default">LOG_ALERT</span><span class="keyword">,<br />    </span><span class="default">LogLevel</span><span class="keyword">::</span><span class="default">CRITICAL </span><span class="keyword">=&gt; </span><span class="default">LOG_CRIT</span><span class="keyword">,<br />    </span><span class="default">LogLevel</span><span class="keyword">::</span><span class="default">ERROR </span><span class="keyword">=&gt; </span><span class="default">LOG_ERR</span><span class="keyword">,<br />    </span><span class="default">LogLevel</span><span class="keyword">::</span><span class="default">WARNING </span><span class="keyword">=&gt; </span><span class="default">LOG_WARNING</span><span class="keyword">,<br />    </span><span class="default">LogLevel</span><span class="keyword">::</span><span class="default">NOTICE </span><span class="keyword">=&gt; </span><span class="default">LOG_NOTICE</span><span class="keyword">,<br />    </span><span class="default">LogLevel</span><span class="keyword">::</span><span class="default">INFO </span><span class="keyword">=&gt; </span><span class="default">LOG_INFO</span><span class="keyword">,<br />    </span><span class="default">LogLevel</span><span class="keyword">::</span><span class="default">DEBUG </span><span class="keyword">=&gt; </span><span class="default">LOG_DEBUG</span><span class="keyword">,<br />);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$log_levels</span><span class="keyword">);<br /></span><span class="comment">/*<br />prints:<br /><br />Array<br />(<br />    [emergency] =&gt; 1<br />    [alert] =&gt; 1<br />    [critical] =&gt; 1<br />    [error] =&gt; 4<br />    [warning] =&gt; 5<br />    [notice] =&gt; 6<br />    [info] =&gt; 6<br />    [debug] =&gt; 6<br />)<br />*/</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=network.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/network.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.network.php">Network</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.network.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="network.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="network.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.network.php" title="Network Functions">Network Functions</a>
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
