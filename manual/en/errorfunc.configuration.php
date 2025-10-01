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

 <link rel="canonical" href="https://www.php.net/manual/en/errorfunc.configuration.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/errorfunc.configuration.php">
 <link rel="alternate" href="https://www.php.net/manual/en/errorfunc.configuration.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/errorfunc.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/errorfunc.setup.php">
 <link rel="next" href="https://www.php.net/manual/en/errorfunc.constants.php">

 <link rel="alternate" href="https://www.php.net/manual/en/errorfunc.configuration.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/errorfunc.configuration.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/errorfunc.configuration.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/errorfunc.configuration.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/errorfunc.configuration.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/errorfunc.configuration.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/errorfunc.configuration.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/errorfunc.configuration.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/errorfunc.configuration.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/errorfunc.configuration.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/errorfunc.configuration.php" hreflang="zh">

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
        <a href="errorfunc.constants.php">
          Predefined Constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="errorfunc.setup.php">
          &laquo; Installing/Configuring        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.errorfunc.php'>Error Handling</a></li>      <li><a href='errorfunc.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/errorfunc.configuration.php' selected="selected">English</option>
            <option value='de/errorfunc.configuration.php'>German</option>
            <option value='es/errorfunc.configuration.php'>Spanish</option>
            <option value='fr/errorfunc.configuration.php'>French</option>
            <option value='it/errorfunc.configuration.php'>Italian</option>
            <option value='ja/errorfunc.configuration.php'>Japanese</option>
            <option value='pt_BR/errorfunc.configuration.php'>Brazilian Portuguese</option>
            <option value='ru/errorfunc.configuration.php'>Russian</option>
            <option value='tr/errorfunc.configuration.php'>Turkish</option>
            <option value='uk/errorfunc.configuration.php'>Ukrainian</option>
            <option value='zh/errorfunc.configuration.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="errorfunc.configuration" class="section">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>Errors and Logging Configuration Options</strong></caption>
   
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
     <td><a href="errorfunc.configuration.php#ini.error-reporting" class="link">error_reporting</a></td>
     <td>NULL</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.display-errors" class="link">display_errors</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.display-startup-errors" class="link">display_startup_errors</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>
       Prior to PHP 8.0.0, the default value was <code class="literal">&quot;0&quot;</code>.
     </td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.log-errors" class="link">log_errors</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.log-errors-max-len" class="link">log_errors_max_len</a></td>
     <td>&quot;1024&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Had no effect as of PHP 8.0.0, removed as of PHP 8.1.0.</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.ignore-repeated-errors" class="link">ignore_repeated_errors</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.ignore-repeated-source" class="link">ignore_repeated_source</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.report-memleaks" class="link">report_memleaks</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.track-errors" class="link">track_errors</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Deprecated as of PHP 7.2.0, removed as of PHP 8.0.0.</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.html-errors" class="link">html_errors</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.xmlrpc-errors" class="link">xmlrpc_errors</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.xmlrpc-error-number" class="link">xmlrpc_error_number</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.docref-root" class="link">docref_root</a></td>
     <td>&quot;&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.docref-ext" class="link">docref_ext</a></td>
     <td>&quot;&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.error-prepend-string" class="link">error_prepend_string</a></td>
     <td>NULL</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.error-append-string" class="link">error_append_string</a></td>
     <td>NULL</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.error-log" class="link">error_log</a></td>
     <td>NULL</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.error-log-mode" class="link">error_log_mode</a></td>
     <td>0o644</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Available as of PHP 8.2.0</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.syslog.facility" class="link">syslog.facility</a></td>
     <td>&quot;LOG_USER&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td>Available as of PHP 7.3.0.</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.syslog.filter" class="link">syslog.filter</a></td>
     <td>&quot;no-ctrl&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Available as of PHP 7.3.0.</td>
    </tr>

    <tr>
     <td><a href="errorfunc.configuration.php#ini.syslog.ident" class="link">syslog.ident</a></td>
     <td>&quot;php&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td>Available as of PHP 7.3.0.</td>
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
   
    <dt id="ini.error-reporting">
     <code class="parameter">error_reporting</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Set the error reporting level. The parameter is either an integer
      representing a bit field, or named constants. The error_reporting
      levels and constants are described in
      <a href="errorfunc.constants.php" class="link">Predefined Constants</a>,
      and in <var class="filename">php.ini</var>. To set at runtime, use the
      <span class="function"><a href="function.error-reporting.php" class="function">error_reporting()</a></span> function. See also the
      <a href="errorfunc.configuration.php#ini.display-errors" class="link">display_errors</a> directive.
     </p>
     <p class="para">
      The default value is <strong><code><a href="errorfunc.constants.php#constant.e-all">E_ALL</a></code></strong>.
     </p>
     <p class="para">
      Prior to PHP 8.0.0, the default value was:
      <strong class="userinput"><code><strong><code><a href="errorfunc.constants.php#constant.e-all">E_ALL</a></code></strong> &amp;
       ~<strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong> &amp;
       ~<strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong> &amp;
       ~<strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong></code></strong>.
      This means diagnostics of level <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>,
      <strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong> and <strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong>
      were not shown.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <strong>PHP Constants outside of PHP</strong><br />
      <p class="para">
       Using PHP Constants outside of PHP, like in <var class="filename">httpd.conf</var>,
       will have no useful meaning so in such cases the <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> values 
       are required. And since error levels will be added over time, the maximum
       value (for <strong><code><a href="errorfunc.constants.php#constant.e-all">E_ALL</a></code></strong>) will likely change. So in place of
       <strong><code><a href="errorfunc.constants.php#constant.e-all">E_ALL</a></code></strong> consider using a larger value to cover all bit
       fields from now and well into the future, a numeric value like
       <code class="literal">2147483647</code> (includes all errors, not just
       <strong><code><a href="errorfunc.constants.php#constant.e-all">E_ALL</a></code></strong>).
      </p>
     </p></blockquote>
    </dd>
   

   
    <dt id="ini.display-errors">
     <code class="parameter">display_errors</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      This determines whether errors should be printed to the screen
      as part of the output or if they should be hidden from the user.
     </p>
     <p class="para">
      Value <code class="literal">&quot;stderr&quot;</code> sends the errors to <code class="literal">stderr</code>
      instead of <code class="literal">stdout</code>.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
      This is a feature to support your development and should never be used 
      on production systems (e.g. systems connected to the internet).
      </p>
     </p></blockquote>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       Although display_errors may be set at runtime (with <span class="function"><a href="function.ini-set.php" class="function">ini_set()</a></span>),
       it won&#039;t have any effect if the script has fatal errors.
       This is because the desired runtime action does not get executed.
      </p>
     </p></blockquote>
    </dd>
   

   
    <dt id="ini.display-startup-errors">
     <code class="parameter">display_startup_errors</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Even when display_errors is on, errors that occur during PHP&#039;s startup
      sequence are not displayed. It&#039;s strongly recommended to keep
      display_startup_errors off, except for debugging.
     </p>
    </dd>
   

   
    <dt id="ini.log-errors">
     <code class="parameter">log_errors</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Tells whether script error messages should be logged to the
      server&#039;s error log or <a href="errorfunc.configuration.php#ini.error-log" class="link">error_log</a>.
      This option is thus server-specific.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       You&#039;re strongly advised to use error logging in place of
       error displaying on production web sites.
      </p>
     </p></blockquote>
    </dd>
   

   
    <dt id="ini.log-errors-max-len">
     <code class="parameter">log_errors_max_len</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Set the maximum length of log_errors in bytes. In
      <a href="errorfunc.configuration.php#ini.error-log" class="link">error_log</a> information about
      the source is added. The default is 1024 and 0 allows to not apply
      any maximum length at all.
      This length is applied to logged errors, displayed errors and also to
      <var class="varname"><a href="reserved.variables.phperrormsg.php" class="classname">$php_errormsg</a></var>, but not to explicitly called functions
      such as <span class="function"><a href="function.error-log.php" class="function">error_log()</a></span>.
     </p>

     <span class="simpara">When an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> is used, the
value is measured in bytes. Shorthand notation, as described
in <a href="faq.using.php#faq.using.shorthandbytes" class="link">this FAQ</a>, may also be used.
</span>

    </dd>
   

   
    <dt id="ini.ignore-repeated-errors">
     <code class="parameter">ignore_repeated_errors</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Do not log repeated messages. Repeated errors must occur in the same
      file on the same line unless
      <a href="errorfunc.configuration.php#ini.ignore-repeated-source" class="link">ignore_repeated_source</a>
      is set true.
     </p>
    </dd>
   

   
    <dt id="ini.ignore-repeated-source">
     <code class="parameter">ignore_repeated_source</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Ignore source of message when ignoring repeated messages. When this setting
      is On you will not log errors with repeated messages from different files or
      sourcelines.
     </p>
    </dd>
   

   
    <dt id="ini.report-memleaks">
     <code class="parameter">report_memleaks</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      If this parameter is set to On (the default), this parameter will show a
      report of memory leaks detected by the Zend memory manager. This report
      will be sent to stderr on Posix platforms. On Windows, it will be sent
      to the debugger using OutputDebugString() and can be viewed with tools
      like <a href="http://technet.microsoft.com/en-us/sysinternals/bb896647" class="link external">&raquo;&nbsp;DbgView</a>.
      This parameter only has effect in a debug build and if
      error_reporting includes <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> in the allowed
      list.
     </p>
    </dd>
   

   
    <dt id="ini.track-errors">
     <code class="parameter">track_errors</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      If enabled, the last error message will always be present in the
      variable <var class="varname"><a href="reserved.variables.phperrormsg.php" class="classname">$php_errormsg</a></var>.
     </p>
    </dd>
   

   
    <dt id="ini.html-errors">
     <code class="parameter">html_errors</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      If enabled, error messages will include HTML tags. The format for HTML
      errors produces clickable messages that direct the user to a page
      describing the error or function in causing the error. These references
      are affected by
      <a href="errorfunc.configuration.php#ini.docref-root" class="link">docref_root</a> and
      <a href="errorfunc.configuration.php#ini.docref-ext" class="link">docref_ext</a>.
     </p>
     <p class="para">
      If disabled, error message will be solely plain text.
     </p>
    </dd>
   

   
    <dt id="ini.xmlrpc-errors">
     <code class="parameter">xmlrpc_errors</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      If enabled, turns off normal error reporting and formats errors as
      XML-RPC error message.
     </p>
    </dd>
   

   
    <dt id="ini.xmlrpc-error-number">
     <code class="parameter">xmlrpc_error_number</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Used as the value of the XML-RPC faultCode element.
     </p>
    </dd>
   

   
    <dt id="ini.docref-root">
     <code class="parameter">docref_root</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      The new error format contains a reference to a page describing the error or 
      function causing the error. In case of manual pages you can download the 
      manual in your language and set this ini directive to the URL of your local
      copy. If your local copy of the manual can be reached by <code class="literal">&quot;/manual/&quot;</code>
      you can simply use <strong class="userinput"><code>docref_root=/manual/</code></strong>. Additional you have 
      to set docref_ext to match the fileextensions of your copy 
      <strong class="userinput"><code>docref_ext=.html</code></strong>. It is possible to use external 
      references. For example you can use 
      <strong class="userinput"><code>docref_root=http://manual/en/</code></strong> or
      <strong class="userinput"><code>docref_root=&quot;http://landonize.it/?how=url&amp;theme=classic&amp;filter=Landon
      &amp;url=http%3A%2F%2Fwww.php.net%2F&quot;</code></strong>
     </p>
     <p class="para">
      Most of the time you want the docref_root value to end with a slash <code class="literal">&quot;/&quot;</code>.
      But see the second example above which does not have nor need it.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       This is a feature to support your development since it makes it easy to 
       lookup a function description. However it should never be used on 
       production systems (e.g. systems connected to the internet).
      </p>
     </p></blockquote>
    </dd>
   

   
    <dt id="ini.docref-ext">
     <code class="parameter">docref_ext</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      See <a href="errorfunc.configuration.php#ini.docref-root" class="link">docref_root</a>.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       The value of docref_ext must begin with a dot <code class="literal">&quot;.&quot;</code>.
      </p>
     </p></blockquote>
    </dd>
   

   
    <dt id="ini.error-prepend-string">
     <code class="parameter">error_prepend_string</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      String to output before an error message.
      Only used when the error message is displayed on screen. The main purpose
      is to be able to prepend additional HTML markup to the error message.
     </p>
    </dd>
   

   
    <dt id="ini.error-append-string">
     <code class="parameter">error_append_string</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      String to output after an error message.
      Only used when the error message is displayed on screen. The main purpose
      is to be able to append additional HTML markup to the error message.
     </p>
    </dd>
   

   
    <dt id="ini.error-log">
     <code class="parameter">error_log</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Name of the file where script errors should be logged. The file should
      be writable by the web server&#039;s user. If the
      special value <code class="literal">syslog</code> is used, the errors
      are sent to the system logger instead. On Unix, this means
      syslog(3) and on Windows it means the event log. See also:
      <span class="function"><a href="function.syslog.php" class="function">syslog()</a></span>.
      If this directive is not set, errors are sent to the SAPI error logger. 
      For example, it is an error log in Apache or <code class="literal">stderr</code>
      in CLI.
      See also <span class="function"><a href="function.error-log.php" class="function">error_log()</a></span>.
     </p>
    </dd>
   

   
    <dt id="ini.error-log-mode">
     <code class="parameter">error_log_mode</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      File mode for the file described set in
      <a href="errorfunc.configuration.php#ini.error-log" class="link">error_log</a>.
     </p>
    </dd>
   

   
    <dt id="ini.syslog.facility">
     <code class="parameter">syslog.facility</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Specifies what type of program is logging the message.
      Only effective if <a href="errorfunc.configuration.php#ini.error-log" class="link">error_log</a> is set to &quot;syslog&quot;.
     </p>
    </dd>
   

   
    <dt id="ini.syslog.filter">
     <code class="parameter">syslog.filter</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Specifies the filter type to filter the logged messages. Allowed
      characters are passed unmodified; all others are written in their
      hexadecimal representation prefixed with <code class="literal">\x</code>. 
      <ul class="itemizedlist">
       <li class="listitem">
        <span class="simpara"><code class="literal">all</code> – the logged string will be split 
         at newline characters, and all characters are passed unaltered
        </span>
       </li>
       <li class="listitem">
        <span class="simpara"><code class="literal">ascii</code> – the logged string will be split 
         at newline characters, and any non-printable 7-bit ASCII characters will be escaped
        </span>
       </li>
       <li class="listitem">
        <span class="simpara"><code class="literal">no-ctrl</code> – the logged string will be split 
         at newline characters, and any non-printable characters will be escaped
        </span>
       </li>
       <li class="listitem">
        <span class="simpara"><code class="literal">raw</code> – all characters are passed to the system 
         logger unaltered, without splitting at newlines (identical to PHP before 7.3)
        </span>
       </li>
      </ul>
      This setting will affect logging via <a href="errorfunc.configuration.php#ini.error-log" class="link">error_log</a> set to &quot;syslog&quot; and calls to <span class="function"><a href="function.syslog.php" class="function">syslog()</a></span>.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       The <code class="literal">raw</code> filter type is available as of PHP 7.3.8 and PHP 7.4.0.
      </p>
     </p></blockquote>
     <span class="simpara">
      This directive is not supported on Windows.
     </span>
    </dd>
   

   
    <dt id="ini.syslog.ident">
     <code class="parameter">syslog.ident</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Specifies the ident string which is prepended to every message.
      Only effective if <a href="errorfunc.configuration.php#ini.error-log" class="link">error_log</a> is set to &quot;syslog&quot;.
     </p>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/errorfunc/ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ferrorfunc.configuration%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=errorfunc.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/errorfunc.configuration.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="89648">  <div class="votes">
    <div id="Vu89648">
    <a href="/manual/vote-note.php?id=89648&amp;page=errorfunc.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89648">
    <a href="/manual/vote-note.php?id=89648&amp;page=errorfunc.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89648" title="53% like this...">
    22
    </div>
  </div>
  <a href="#89648" class="name">
  <strong class="user"><em>cjakeman at bcs dot org</em></strong></a><a class="genanchor" href="#89648"> &para;</a><div class="date" title="2009-03-17 01:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89648">
<div class="phpcode"><code><span class="html">Using 
<br /><span class="default">&lt;?php ini_set</span><span class="keyword">(</span><span class="string">'display_errors'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); </span><span class="default">?&gt;</span> 
<br />at the top of your script will not catch any parse errors. A missing ")" or ";" will still lead to a blank page.
<br />
<br />This is because the entire script is parsed before any of it is executed. If you are unable to change php.ini and set
<br />
<br />display_errors On
<br />
<br />then there is a possible solution suggested under error_reporting:
<br />
<br /><span class="default">&lt;?php
<br /> error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);
<br /> </span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">"display_errors"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br /> include(</span><span class="string">"file_with_errors.php"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />
<br />[Modified by moderator]
<br />
<br />You should also consider setting error_reporting = -1 in your php.ini and display_errors = On if you are in development mode to see all fatal/parse errors or set error_log to your desired file to log errors instead of display_errors in production (this requires log_errors to be turned on).</span></code></div>
  </div>
 </div>
  <div class="note" id="120307">  <div class="votes">
    <div id="Vu120307">
    <a href="/manual/vote-note.php?id=120307&amp;page=errorfunc.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120307">
    <a href="/manual/vote-note.php?id=120307&amp;page=errorfunc.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120307" title="50% like this...">
    2
    </div>
  </div>
  <a href="#120307" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#120307"> &para;</a><div class="date" title="2016-12-09 12:57"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120307">
<div class="phpcode"><code><span class="html">If you set the error_log directive to a relative path, it is a path relative to the document root rather than php's containing folder.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=errorfunc.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/errorfunc.configuration.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="errorfunc.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="errorfunc.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
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
