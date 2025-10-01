<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Runtime Configuration - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/seaslog.configuration.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/seaslog.configuration.php">
 <link rel="alternate" href="https://www.php.net/manual/en/seaslog.configuration.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/seaslog.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/seaslog.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/seaslog.resources.php">

 <link rel="alternate" href="https://www.php.net/manual/en/seaslog.configuration.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/seaslog.configuration.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/seaslog.configuration.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/seaslog.configuration.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/seaslog.configuration.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/seaslog.configuration.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/seaslog.configuration.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/seaslog.configuration.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/seaslog.configuration.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/seaslog.configuration.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/seaslog.configuration.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Runtime Configuration" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Runtime Configuration - Manual" />
<meta name="twitter:description" content="Runtime Configuration" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Runtime Configuration - Manual" />
<meta itemprop="description" content="Runtime Configuration" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Runtime Configuration" />

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
        <a href="seaslog.resources.php">
          Resource Types &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="seaslog.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.seaslog.php'>Seaslog</a></li>      <li><a href='seaslog.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/seaslog.configuration.php' selected="selected">English</option>
            <option value='de/seaslog.configuration.php'>German</option>
            <option value='es/seaslog.configuration.php'>Spanish</option>
            <option value='fr/seaslog.configuration.php'>French</option>
            <option value='it/seaslog.configuration.php'>Italian</option>
            <option value='ja/seaslog.configuration.php'>Japanese</option>
            <option value='pt_BR/seaslog.configuration.php'>Brazilian Portuguese</option>
            <option value='ru/seaslog.configuration.php'>Russian</option>
            <option value='tr/seaslog.configuration.php'>Turkish</option>
            <option value='uk/seaslog.configuration.php'>Ukrainian</option>
            <option value='zh/seaslog.configuration.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="seaslog.configuration" class="section">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>Seaslog Configure Options</strong></caption>
   
    <thead>
     <tr>
      <th>Name</th>
      <th>Default</th>
      <th>Changeable</th>
      <th>Changelog</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.appender" class="link">seaslog.appender</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.appender-retry" class="link">seaslog.appender_retry</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.level" class="link">seaslog.level</a></td>
      <td>8</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.remote-host" class="link">seaslog.remote_host</a></td>
      <td>127.0.0.1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.remote-port" class="link">seaslog.remote_port</a></td>
      <td>514</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.remote-timeout" class="link">seaslog.remote_timeout</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td></td>
     </tr>
        
     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.default-basepath" class="link">seaslog.default_basepath</a></td>
      <td>/var/log/www</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.default-logger" class="link">seaslog.default_logger</a></td>
      <td>default</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.default-template" class="link">seaslog.default_template</a></td>
      <td>%T | %L | %P | %Q | %t | %M</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.default-datetime-format" class="link">seaslog.default_datetime_format</a></td>
      <td>Y-m-d H:i:s</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.trace-error" class="link">seaslog.trace_error</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.trace-exception" class="link">seaslog.trace_exception</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.trace-notice" class="link">seaslog.trace_notice</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.trace-warning" class="link">seaslog.trace_warning</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.use-buffer" class="link">seaslog.use_buffer</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.buffer-size" class="link">seaslog.buffer_size</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.buffer-disabled-in-cli" class="link">seaslog.buffer_disabled_in_cli</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.disting-type" class="link">seaslog.disting_type</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.disting-folder" class="link">seaslog.disting_folder</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.disting-by-hour" class="link">seaslog.disting_by_hour</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.recall-depth" class="link">seaslog.recall_depth</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.trim-wrap" class="link">seaslog.trim_wrap</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.ignore-warning" class="link">seaslog.ignore_warning</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

     <tr>
      <td><a href="seaslog.configuration.php#ini.seaslog.throw-exception" class="link">seaslog.throw_exception</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

    </tbody>
   
  </table>

 </p>

 <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>

 <p class="para">
  <dl>
   
     <dt id="ini.seaslog.appender">
      <code class="parameter">seaslog.appender</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Switch the Record Log Data Store. 1File 2TCP 3UDP (Switch default 1)
      </p>
      <p class="para">
        SeasLog will send log to  tcp://remote_host:remote_port or udp://remote_host:remote_port server, 
       when <em>seaslog.appender</em> configured to <code class="literal">2 (TCP)</code> or <code class="literal">3 (UDP)</code>.
      </p>
      <p class="para">
        When <em>SeasLog</em> send log to TCP/UDP，style follow RFC5424.
       The <code class="literal">{logInfo}</code> affected by  <em>seaslog.default_template</em>.
      </p>
      <div class="example-contents screen">
    <div class="cdata"><pre>
The log style finally formatted such as:
&lt;15&gt;1 2017-08-27T01:24:59+08:00 vagrant-ubuntu-trusty test/logger[27171]: 2016-06-25 00:59:43 | DEBUG | 21423 | 599157af4e937 | 1466787583.322 | this is a neeke debug
&lt;14&gt;1 2017-08-27T01:24:59+08:00 vagrant-ubuntu-trusty test/logger[27171]: 2016-06-25 00:59:43 | INFO | 21423 | 599157af4e937 | 1466787583.323 | this is a info log
&lt;13&gt;1 2017-08-27T01:24:59+08:00 vagrant-ubuntu-trusty test/logger[27171]: 2016-06-25 00:59:43 | NOTICE | 21423 | 599157af4e937 | 1466787583.324 | this is a notice log
    </pre></div>
      </div>
     </dd>
    
    
     <dt id="ini.seaslog.appender-retry">
      <code class="parameter">seaslog.appender_retry</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Record Log Retry Count.
       Default 0 (Do Not Retry)
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.buffer-disabled-in-cli">
      <code class="parameter">seaslog.buffer_disabled_in_cli</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Disable buffer in cli. 1-Y 0-N(Default)
      </p>
      <p class="para">
       Switch the configure buffer_disabled_in_cli on. 
       The buffer_disabled_in_cli switch default off. 
       If switch buffer_disabled_in_cli on, and running in cli, 
       seaslog.use_buffer setting will be discarded, 
       Seaslog write to the Data Store IMMEDIATELY.
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.buffer-size">
      <code class="parameter">seaslog.buffer_size</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Configure the buffer_size with 100. 
       The buffer_size default 0, it’s meaning don’t use buffer. 
       If buffer_size &gt; 0,SeasLog will rewritten down into the Data Store 
       when the prerecorded log in memory count &gt;= this buffer_size,and then refresh the memory poll.
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.default-basepath">
      <code class="parameter">seaslog.default_basepath</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Default Log Base Path. Defult &quot;/var/log/www&quot;.
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.default-datetime-format">
      <code class="parameter">seaslog.default_datetime_format</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       The DateTime Style.  Default &quot;Y-m-d H:i:s&quot;.
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.default-logger">
      <code class="parameter">seaslog.default_logger</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Default Logger Path. Default &quot;default&quot;.
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.disting-by-hour">
      <code class="parameter">seaslog.disting_by_hour</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Switch use the logger with hour. 1-Y 0-N(Default)
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
        <em>seaslog.disting_by_hour = 1</em> Switch use Logger DisTing by hour. 
        It’s  meaning SeasLog will create the file each one hour.
        </p>
      </p></blockquote>
     </dd>
    
    
     <dt id="ini.seaslog.disting-folder">
      <code class="parameter">seaslog.disting_folder</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Switch use the logger with folder. 1-Y(Default) 0-N
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
        <em>seaslog.disting_folder = 1</em> Switch use Logger DisTing by folder, 
        it’s meaning SeasLog will create the file deistic by folder, 
        and when this configure close SeasLog will create file 
        use underline connect Logger and Time like default_20180211.log.
        </p>
      </p></blockquote>
     </dd>
    
    
     <dt id="ini.seaslog.disting-type">
      <code class="parameter">seaslog.disting_type</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Switch use the logger with type. 1-Y 0-N(Default)
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
        <em>seaslog.disting_type = 1</em> Switch use Logger DisTing by type, 
        it’s meaning SeasLog will create the file deistic info\warn\error and the other type.
        </p>
      </p></blockquote>
     </dd>
    
    
     <dt id="ini.seaslog.ignore-warning">
      <code class="parameter">seaslog.ignore_warning</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Switch ignore SeasLog warning. 1-On(Default) 0-Off
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
        <em>seaslog.ignore_warning = 1</em> Open a warning to ignore SeasLog itself. 
        When directory permissions or receive server ports are blocked, they are ignored; 
        when closed, a warning is thrown.
        </p>
      </p></blockquote>
     </dd>
    
    
     <dt id="ini.seaslog.level">
      <code class="parameter">seaslog.level</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Record logger level. Default 8 (All of them).
       0-EMERGENCY 1-ALERT 2-CRITICAL 3-ERROR 4-WARNING 5-NOTICE 6-INFO 7-DEBUG 8-ALL
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
          Tips: The configuration item has changed since the 1.7.0 version.
          Before the 1.7.0 version, the smaller the value, the more logs are taken according to the level: 
          0-all 1-debug 2-info 3-notice 4-warning 5-error 6-critical 7-alert 8-emergency
          Before the 1.7.0 version, Default 0 (All of them).
        </p>
      </p></blockquote>
     </dd>
    
    
     <dt id="ini.seaslog.recall-depth">
      <code class="parameter">seaslog.recall_depth</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Log function recall depth.Will affected variable <code class="literal">LineNo</code> in <code class="literal">%F</code>.
       Default 0
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.remote-host">
      <code class="parameter">seaslog.remote_host</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       If you use  Record TCP or UDP, configure this remote ip. Default &quot;127.0.0.1&quot;
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.remote-port">
      <code class="parameter">seaslog.remote_port</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       If you use Record TCP or UDP, configure this remote port. Default 514
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.remote-timeout">
      <code class="parameter">seaslog.remote_timeout</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       If you use Record TCP or UDP, configure this remote timeout. Default 1 second
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.throw-exception">
      <code class="parameter">seaslog.throw_exception</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Switch throw SeasLog exception. 1-On(Default) 0-Off
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
        <em>seaslog.throw_exception = 1</em> Open an exception that throws the SeasLog to throw itself. 
        When the directory authority or the receive server port is blocked, 
        throw an exception; do not throw an exception when closed.
        </p>
      </p></blockquote>
     </dd>
    
    
     <dt id="ini.seaslog.trace-error">
      <code class="parameter">seaslog.trace_error</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Automatic Record final error with default logger. 1-Y(Default) 0-N
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.trace-exception">
      <code class="parameter">seaslog.trace_exception</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Automatic Record exception with default logger. 1-Y 0-N(Default)
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.trace-notice">
      <code class="parameter">seaslog.trace_notice</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Automatic Record notice with default logger. 1-Y 0-N(Default)
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.trace-warning">
      <code class="parameter">seaslog.trace_warning</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Automatic Record warning with default logger. 1-Y 0-N(Default)
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.trim-wrap">
      <code class="parameter">seaslog.trim_wrap</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Trim the \n and \r in log message. 1-On 0-Off(Default)
      </p>
     </dd>
    
    
     <dt id="ini.seaslog.use-buffer">
      <code class="parameter">seaslog.use_buffer</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Switch use the log buffer with memory. 1-Y 0-N(Default)
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
        <em>seaslog.use_buffer = 1</em> Switch the configure use_buffer on. 
        The use_buffer switch default off. 
        If switch use_buffer on, SeasLog prerecord the log with memory, 
        and them would be rewritten down into the Data Store by request shutdown 
        or php process exit (PHP RSHUTDOWN or PHP MSHUTDOWN).
        </p>
      </p></blockquote>
     </dd>
    
    
     <dt id="ini.seaslog.default-template">
      <code class="parameter">seaslog.default_template</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Default Log template. 
       Default &quot;%T | %L | %P | %Q | %t | %M&quot;.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
        The following default variables are provided, 
        which can be used directly in the log template and replaced as a corresponding value 
        when the log is eventually generated.
        </p>
        <p class="para">
        Default log template is: <code class="literal">seaslog.default_template = &quot;%T | %L | %P | %Q | %t | %M&quot;</code>,
        that&#039;s mean,default log style is: <code class="literal">{dateTime} | {level} | {pid} | {uniqid} | {timeStamp} | {logInfo}</code>
        </p>
        <p class="para">
         If you custom log template, such as: <code class="literal">seaslog.default_template = &quot;[%T]:%L %P %Q %t %M&quot;</code>,
         that&#039;s will mean,log style was custom as: <code class="literal">[{dateTime}]:{level} {pid} {uniqid} {timeStamp} {logInfo}</code>
        </p>
        <table class="doctable table">
          <caption><strong>Seaslog Default Variable Table</strong></caption>
          
            <thead>
              <tr>
                <th>Variable Name</th>
                <th>Description</th>
              </tr>

            </thead>

            <tbody class="tbody">
              <tr>
                <td>%L</td>
                <td>Level.</td>
              </tr>

              <tr>
                <td>%M</td>
                <td>Message.</td>
              </tr>

              <tr>
                <td>%T</td>
               <td>DateTime. Such as <code class="literal">2017-08-16 19:15:02</code>, affected by <code class="literal">seaslog.default_datetime_format</code>.</td>
              </tr>

              <tr>
                <td>%t</td>
               <td>Timestamp. Such as <code class="literal">1502882102.862</code>,accurate to milliseconds.</td>
              </tr>

              <tr>
                <td>%Q</td>
                <td>RequestId. To distinguish a single request, 
                 such as not invoking the <code class="literal">SeasLog::setRequestId($string)</code> function,
                 the unique value generated by the built-in <code class="literal">static char *get_uniqid ()</code> 
                function is used when the request is initialized.</td>
              </tr>

              <tr>
                <td>%H</td>
                <td>HostName.</td>
              </tr>

              <tr>
                <td>%P</td>
                <td>ProcessId.</td>
              </tr>

              <tr>
                <td>%D</td>
               <td>Domain:Port. Such as <code class="literal">www.cloudwise.com:80</code>; When Cli, Such as <code class="literal">cli</code>.</td>
              </tr>

              <tr>
                <td>%R</td>
               <td>Request URI. Such as <code class="literal">/app/user/signin</code>; 
                When Cli it&#039;s the index script, Such as <code class="literal">CliIndex.php</code>.</td>
              </tr>

              <tr>
                <td>%m</td>
               <td>Request Method. Such as <code class="literal">Get</code>; When Cli it&#039;s the command script, Such as <code class="literal">/bin/bash</code>.</td>
              </tr>

              <tr>
                <td>%I</td>
               <td>Client IP; When Cli it&#039;s <code class="literal">local</code>. 
                Priority value: HTTP_X_REAL_IP &gt; HTTP_X_FORWARDED_FOR &gt; REMOTE_ADDR</td>
              </tr>

              <tr>
                <td>%F</td>
               <td>FileName:LineNo. Such as <code class="literal">UserService.php:118</code>.</td>
              </tr>

              <tr>
                <td>%U</td>
               <td>MemoryUsage. byte. Call <code class="literal">zend_memory_usage</code>.</td>
              </tr>

              <tr>
                <td>%u</td>
               <td>PeakMemoryUsage. byte. Call <code class="literal">zend_memory_peak_usage</code>.</td>
              </tr>

              <tr>
                <td>%C</td>
               <td><code class="literal">TODO</code> Class::Action. Such as <code class="literal">UserService::getUserInfo</code></td>
              </tr>

            </tbody>
            
        </table>

      </p></blockquote>
     </dd>
    
  </dl>
 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/seaslog/ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fseaslog.configuration%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=seaslog.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/seaslog.configuration.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="seaslog.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="seaslog.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="current">
                            <a href="seaslog.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
                        </li>
                                                <li class="">
                            <a href="seaslog.resources.php" title="Resource Types">Resource Types</a>
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
