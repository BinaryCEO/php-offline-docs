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

 <link rel="canonical" href="https://www.php.net/manual/en/wincache.configuration.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/wincache.configuration.php">
 <link rel="alternate" href="https://www.php.net/manual/en/wincache.configuration.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/wincache.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/wincache.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/wincache.stats.php">

 <link rel="alternate" href="https://www.php.net/manual/en/wincache.configuration.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/wincache.configuration.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/wincache.configuration.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/wincache.configuration.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/wincache.configuration.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/wincache.configuration.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/wincache.configuration.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/wincache.configuration.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/wincache.configuration.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/wincache.configuration.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/wincache.configuration.php" hreflang="zh">

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
        <a href="wincache.stats.php">
          WinCache Statistics Script &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="wincache.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.wincache.php'>WinCache</a></li>      <li><a href='wincache.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/wincache.configuration.php' selected="selected">English</option>
            <option value='de/wincache.configuration.php'>German</option>
            <option value='es/wincache.configuration.php'>Spanish</option>
            <option value='fr/wincache.configuration.php'>French</option>
            <option value='it/wincache.configuration.php'>Italian</option>
            <option value='ja/wincache.configuration.php'>Japanese</option>
            <option value='pt_BR/wincache.configuration.php'>Brazilian Portuguese</option>
            <option value='ru/wincache.configuration.php'>Russian</option>
            <option value='tr/wincache.configuration.php'>Turkish</option>
            <option value='uk/wincache.configuration.php'>Ukrainian</option>
            <option value='zh/wincache.configuration.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="wincache.configuration" class="section">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
  The following table lists and explains the configuration settings 
  provided by the WinCache extension:
 </p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>WinCache configuration options</strong></caption>
   
    <thead>
     <tr>
      <th>Name</th>
      <th>Default</th>
      <th>Minimum</th>
      <th>Maximum</th>
      <th>Changeable</th>
      <th>Changelog</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.fcenabled" class="link">wincache.fcenabled</a></td>
      <td>&quot;1&quot;</td>
      <td>&quot;0&quot;</td>
      <td>&quot;1&quot;</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of WinCache 1.0.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.fcenabledfilter" class="link">wincache.fcenabledfilter</a></td>
      <td>&quot;NULL&quot;</td>
      <td>&quot;NULL&quot;</td>
      <td>&quot;NULL&quot;</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.0.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.fcachesize" class="link">wincache.fcachesize</a></td>
      <td>&quot;24&quot;</td>
      <td>&quot;5&quot;</td>
      <td>&quot;255&quot;</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.0.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.fcndetect" class="link">wincache.fcndetect</a></td>
      <td>&quot;1&quot;</td>
      <td>&quot;0&quot;</td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.1.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.maxfilesize" class="link">wincache.maxfilesize</a></td>
      <td>&quot;256&quot;</td>
      <td>&quot;10&quot;</td>
      <td>&quot;2048&quot;</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.0.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.ocenabled" class="link">wincache.ocenabled</a></td>
      <td>&quot;1&quot;</td>
      <td>&quot;0&quot;</td>
      <td>&quot;1&quot;</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of WinCache 1.0.0. Removed as of 2.0.0.0</td>
     </tr>
 
     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.ocenabledfilter" class="link">wincache.ocenabledfilter</a></td>
      <td>&quot;NULL&quot;</td>
      <td>&quot;NULL&quot;</td>
      <td>&quot;NULL&quot;</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.0.0. Removed as of 2.0.0.0</td>
     </tr>
     
     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.ocachesize" class="link">wincache.ocachesize</a></td>
      <td>&quot;96&quot;</td>
      <td>&quot;15&quot;</td>
      <td>&quot;255&quot;</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.0.0. Removed as of 2.0.0.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.filecount" class="link">wincache.filecount</a></td>
      <td>&quot;4096&quot;</td>
      <td>&quot;1024&quot;</td>
      <td>&quot;16384&quot;</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.0.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.chkinterval" class="link">wincache.chkinterval</a></td>
      <td>&quot;30&quot;</td>
      <td>&quot;0&quot;</td>
      <td>&quot;300&quot;</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.0.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.ttlmax" class="link">wincache.ttlmax</a></td>
      <td>&quot;1200&quot;</td>
      <td>&quot;0&quot;</td>
      <td>&quot;7200&quot;</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.0.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.enablecli" class="link">wincache.enablecli</a></td>
      <td>0</td>
      <td>0</td>
      <td>1</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.0.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.ignorelist" class="link">wincache.ignorelist</a></td>
      <td>NULL</td>
      <td>NULL</td>
      <td>NULL</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of WinCache 1.0.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.namesalt" class="link">wincache.namesalt</a></td>
      <td>NULL</td>
      <td>NULL</td>
      <td>NULL</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.0.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.ucenabled" class="link">wincache.ucenabled</a></td>
      <td>1</td>
      <td>0</td>
      <td>1</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.1.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.ucachesize" class="link">wincache.ucachesize</a></td>
      <td>8</td>
      <td>5</td>
      <td>85</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.1.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.scachesize" class="link">wincache.scachesize</a></td>
      <td>8</td>
      <td>5</td>
      <td>85</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.1.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.rerouteini" class="link">wincache.rerouteini</a></td>
      <td>NULL</td>
      <td>NULL</td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.2.0. Removed as of 1.3.7</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.reroute_enabled" class="link">wincache.reroute_enabled</a></td>
      <td>1</td>
      <td>0</td>
      <td>1</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong>|<strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
      <td>Available as of WinCache 1.3.7</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.srwlocks" class="link">wincache.srwlocks</a></td>
      <td>1</td>
      <td>0</td>
      <td>1</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.3.6.3. Removed as of 2.0.0.0</td>
     </tr>

     <tr>
      <td><a href="wincache.configuration.php#ini.wincache.filemapdir" class="link">wincache.filemapdir</a></td>
      <td>NULL</td>
      <td>NULL</td>
      <td>NULL</td>      
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of WinCache 1.3.7.4</td>
     </tr>

    </tbody>
   
  </table>

  For further details and definitions of the
INI_* modes, see the <a href="configuration.changes.modes.php" class="xref">Where a configuration setting may be set</a>.
 </p>
 
 <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
 
 <p class="para">
  <dl>
   
    <dt id="ini.wincache.fcenabled">
     <code class="parameter">wincache.fcenabled</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <span class="simpara">Enables or disables the file cache functionality.</span>
    </dd>
   
   
    <dt id="ini.wincache.fcenabledfilter">
     <code class="parameter">wincache.fcenabledfilter</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Defines a comma-separated list of IIS web site identifiers where file 
      cache should be enabled or disabled. This setting works in conjunction 
      with <code class="literal">wincache.fcenabled</code>: if <code class="literal">wincache.fcenabled</code> 
      is set to 1, then the sites listed in the <code class="literal">wincache.fcenabledfilter</code>
      will have the file cache turned off; if <code class="literal">wincache.fcenabled</code> 
      is set to 0, then the sites listed in the <code class="literal">wincache.fcenabledfilter</code> 
      will have the file cache turned on.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.fcachesize">
     <code class="parameter">wincache.fcachesize</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Defines the maximum memory size (in megabytes) that is allocated for the file cache. 
      If the total size of all the cached files exceeds the value specified in this setting, 
      then most stale files will be removed from the file cache.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.fcndetect">
     <code class="parameter">wincache.fcndetect</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Enables or disables the file change notification detection functionality. If file change 
      notification is supported then it will be used to refresh the opcode and file cache entries
      as soon as the corresponding files are modified on a file system. If file change notification 
      is not supported, for example when using network file shares, then wincache will poll for 
      file changes at regular time intervals specified by <code class="literal">wincache.chkinterval</code>.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.maxfilesize">
     <code class="parameter">wincache.maxfilesize</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Defines the maximum allowed size (in kilobytes) for a single file to be cached. 
      If a file size exceeds the specified value, the file will not be cached. 
      This setting applies to the file cache only.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.ocenabled">
     <code class="parameter">wincache.ocenabled</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This option has been <em>REMOVED</em> as of 2.0.0.0</p></div>
     <span class="simpara">Enables or disables the opcode cache functionality</span>
    </dd>
   
   
    <dt id="ini.wincache.ocenabledfilter">
     <code class="parameter">wincache.ocenabledfilter</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This option has been <em>REMOVED</em> as of 2.0.0.0</p></div>
     <span class="simpara">
      Defines a comma-separated list of IIS web site identifiers where opcode 
      cache should be enabled or disabled. This setting works in conjunction 
      with <code class="literal">wincache.ocenabled</code>: if <code class="literal">wincache.ocenabled</code> 
      is set to 1, then the sites listed in the <code class="literal">wincache.ocenabledfilter</code>
      will have the opcode cache turned off; if <code class="literal">wincache.ocenabled</code> 
      is set to 0, then the sites listed in the <code class="literal">wincache.ocenabledfilter</code> 
      will have the opcode cache turned on.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.ocachesize">
     <code class="parameter">wincache.ocachesize</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This option has been <em>REMOVED</em> as of 2.0.0.0</p></div>
     <span class="simpara">
      Defines the maximum memory size (in megabytes) that is allocated for the 
      opcode cache. If the cached opcode size exceeds the specified value, 
      then most stale opcode will be removed from the cache. Note that the opcode 
      cache size must be at least 3 times bigger than file cache size. 
      If that is not the case the opcode cache size will be automatically increased.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.filecount">
     <code class="parameter">wincache.filecount</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Defines how many files are expected to be cached by the extension, so that appropriate 
      memory size is allocated at the startup time. If the number of files exceeds the specified 
      value, the WinCache will re-allocate more memory as needed.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.chkinterval">
     <code class="parameter">wincache.chkinterval</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Defines how often (in seconds) the extension checks for file changes in order 
      to refresh the cache. Setting it to 0 will disable the refreshing of the cache. 
      The file changes will not be reflected in the cache unless the cache entry for 
      that file is removed by scavenger or IIS application pool is recycled or 
      wincache_refresh_if_changed function is called.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.ttlmax">
     <code class="parameter">wincache.ttlmax</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Defines the maximum time to live (in seconds) for a cached entry without being used. 
      Setting it to 0 will disable the cache scavenger, so the cached entries will never
      be removed from the cache during the lifetime of the IIS worker process.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.enablecli">
     <code class="parameter">wincache.enablecli</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Defines if caching is enabled when PHP is running in command line (CLI) mode.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.ignorelist">
     <code class="parameter">wincache.ignorelist</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Defines a list of files that should not be cached by the extension. 
      The files list is specified by using file names only, separated by 
      the pipe symbol - &quot;|&quot;.
      <div class="example" id="example-731">
       <p><strong>Example #1 <code class="literal">wincache.ignorelist</code> example</strong></p>
       <div class="example-contents">
<div class="inicode"><pre class="inicode">wincache.ignorelist = &quot;index.php|misc.php|admin.php&quot;</pre>
</div>
       </div>

      </div>
     </p>
    </dd>
   
   
    <dt id="ini.wincache.namesalt">
     <code class="parameter">wincache.namesalt</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Defines a string that will be used when naming the extension 
      specific objects that are stored in shared memory. This is used 
      to avoid conflicts that may be caused if other applications within 
      an IIS worker process tries to access shared memory. The length of 
      the namesalt string cannot exceed 8 characters.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.ucenabled">
     <code class="parameter">wincache.ucenabled</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Enables or disables the user cache functionality.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.ucachesize">
     <code class="parameter">wincache.ucachesize</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Defines the maximum memory size in megabytes that is allocated for the user cache. If the total 
      size of variables stored in the user cache exceeds the specified value, then the most stale variables 
      will be removed from the cache.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.scachesize">
     <code class="parameter">wincache.scachesize</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Defines the maximum memory size in megabytes that is allocated for the session cache. If the total 
      size of data stored in the session cache exceeds the specified value, then the most stale data 
      will be removed from the cache.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.rerouteini">
     <code class="parameter">wincache.rerouteini</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <div class="warning"><strong class="warning">Warning</strong><p class="simpara">
      This option has been <em>REMOVED</em> as of 1.3.7.  See <code class="literal">wincache.reroute_enabled</code> for similar functionality as of 1.3.7.
      </p></div>
     <span class="simpara">
      Specifies an absolute or a relateve path to the reroute.ini file that contains the list of PHP functions 
      whose implementation should be replaced with the WinCache function equivalents. If a relative path is specified 
      then it is assumed to be relative to the location of php-cgi.exe file.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.reroute_enabled">
     <code class="parameter">wincache.reroute_enabled</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Enables or disables the rerouting of certain file I/O functions through the file cache.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.srwlocks">
     <code class="parameter">wincache.srwlocks</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This option has been <em>REMOVED</em> as of 2.0.0.0</p></div>
     <span class="simpara">
      Enables or disables the use of shared reader/writer locks.  Disabling is useful when troubleshooting deadlock conditions in WinCache.
     </span>
    </dd>
   
   
    <dt id="ini.wincache.filemapdir">
     <code class="parameter">wincache.filemapdir</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <span class="simpara">
      Specifies an absolute path to a directory where WinCache will store the temporary files used for shared memory segments.
     </span>
     <span class="simpara">
      This directory must be on the local machine and not on a networked file system.
     </span>
     <span class="simpara">
      If the directory is not specified, WinCache will use the Windows System Page File for all shared memory segments.
     </span>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/wincache/ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fwincache.configuration%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=wincache.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/wincache.configuration.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116641">  <div class="votes">
    <div id="Vu116641">
    <a href="/manual/vote-note.php?id=116641&amp;page=wincache.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116641">
    <a href="/manual/vote-note.php?id=116641&amp;page=wincache.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116641" title="66% like this...">
    3
    </div>
  </div>
  <a href="#116641" class="name">
  <strong class="user"><em>ericsten at php dot net</em></strong></a><a class="genanchor" href="#116641"> &para;</a><div class="date" title="2015-02-02 11:33"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116641">
<div class="phpcode"><code><span class="html">[Editor's note: fixed typo]
<br />
<br />Just a quick note about something I've discovered through debugging a recent WinCache issue:
<br />
<br />If you change the wincache.scachesize value, you MUST shutdown all php-cgi.exe instances and manually delete the wincache_session_*.tmp file. 
<br />
<br />The wincache_session_*.tmp file will in the directory specified by session.save_path in the php.ini file.
<br />
<br />An example session file name would look like: wincache_session_1_565779.tmp
<br />
<br />If you don't delete this file, you will run into corruption in cross-process shared memory segments for the WinCache session handler.  These will show up as 500 errors from your IIS server.
<br />
<br />Thx!
<br />
<br />    --E.</span></code></div>
  </div>
 </div>
  <div class="note" id="124675">  <div class="votes">
    <div id="Vu124675">
    <a href="/manual/vote-note.php?id=124675&amp;page=wincache.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124675">
    <a href="/manual/vote-note.php?id=124675&amp;page=wincache.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124675" title="no votes...">
    0
    </div>
  </div>
  <a href="#124675" class="name">
  <strong class="user"><em>software journalist</em></strong></a><a class="genanchor" href="#124675"> &para;</a><div class="date" title="2020-02-03 05:17"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124675">
<div class="phpcode"><code><span class="html">wincache.php showed in Session Cache Overview that the Available Memory was returning NAN B.  <br /><br />A Google search returned nothing specific to this.  <br /><br />Stopping the App Pool and Deleting the *session*.tmp file in the windows temp directory solved this issue. (Thanks to previous noter)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=wincache.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/wincache.configuration.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="wincache.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="wincache.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="">
                            <a href="wincache.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="current">
                            <a href="wincache.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
                        </li>
                                                <li class="">
                            <a href="wincache.stats.php" title="WinCache Statistics Script">WinCache Statistics Script</a>
                        </li>
                                                <li class="">
                            <a href="wincache.sessionhandler.php" title="WinCache Session Handler">WinCache Session Handler</a>
                        </li>
                                                <li class="">
                            <a href="wincache.reroutes.php" title="WinCache Functions Reroutes">WinCache Functions Reroutes</a>
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
