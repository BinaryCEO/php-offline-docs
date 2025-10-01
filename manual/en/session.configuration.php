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

 <link rel="canonical" href="https://www.php.net/manual/en/session.configuration.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/session.configuration.php">
 <link rel="alternate" href="https://www.php.net/manual/en/session.configuration.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/session.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/session.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/session.constants.php">

 <link rel="alternate" href="https://www.php.net/manual/en/session.configuration.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/session.configuration.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/session.configuration.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/session.configuration.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/session.configuration.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/session.configuration.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/session.configuration.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/session.configuration.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/session.configuration.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/session.configuration.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/session.configuration.php" hreflang="zh">

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
        <a href="session.constants.php">
          Predefined Constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="session.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.session.php'>Session Extensions</a></li>      <li><a href='book.session.php'>Sessions</a></li>      <li><a href='session.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/session.configuration.php' selected="selected">English</option>
            <option value='de/session.configuration.php'>German</option>
            <option value='es/session.configuration.php'>Spanish</option>
            <option value='fr/session.configuration.php'>French</option>
            <option value='it/session.configuration.php'>Italian</option>
            <option value='ja/session.configuration.php'>Japanese</option>
            <option value='pt_BR/session.configuration.php'>Brazilian Portuguese</option>
            <option value='ru/session.configuration.php'>Russian</option>
            <option value='tr/session.configuration.php'>Turkish</option>
            <option value='uk/session.configuration.php'>Ukrainian</option>
            <option value='zh/session.configuration.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="session.configuration" class="section">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
 <table class="doctable table">
  <caption><strong>Session configuration options</strong></caption>
  
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
     <td><a href="session.configuration.php#ini.session.save-path" class="link">session.save_path</a></td>
     <td>&quot;&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.name" class="link">session.name</a></td>
     <td>&quot;PHPSESSID&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.save-handler" class="link">session.save_handler</a></td>
     <td>&quot;files&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.auto-start" class="link">session.auto_start</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.gc-probability" class="link">session.gc_probability</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.gc-divisor" class="link">session.gc_divisor</a></td>
     <td>&quot;100&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.gc-maxlifetime" class="link">session.gc_maxlifetime</a></td>
     <td>&quot;1440&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.serialize-handler" class="link">session.serialize_handler</a></td>
     <td>&quot;php&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.cookie-lifetime" class="link">session.cookie_lifetime</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.cookie-path" class="link">session.cookie_path</a></td>
     <td>&quot;/&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.cookie-domain" class="link">session.cookie_domain</a></td>
     <td>&quot;&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.cookie-secure" class="link">session.cookie_secure</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Prior to PHP 7.2.0, the default was <code class="literal">&quot;&quot;</code>.</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.cookie-httponly" class="link">session.cookie_httponly</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Prior to PHP 7.2.0, the default was <code class="literal">&quot;&quot;</code>.</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.cookie-samesite" class="link">session.cookie_samesite</a></td>
     <td>&quot;&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Available as of PHP 7.3.0.</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.use-cookies" class="link">session.use_cookies</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.use-only-cookies" class="link">session.use_only_cookies</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.referer-check" class="link">session.referer_check</a></td>
     <td>&quot;&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.cache-limiter" class="link">session.cache_limiter</a></td>
     <td>&quot;nocache&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.cache-expire" class="link">session.cache_expire</a></td>
     <td>&quot;180&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.use-trans-sid" class="link">session.use_trans_sid</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.trans-sid-tags" class="link">session.trans_sid_tags</a></td>
     <td>&quot;a=href,area=href,frame=src,form=&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Available as of PHP 7.1.0.</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.trans-sid-hosts" class="link">session.trans_sid_hosts</a></td>
     <td><code class="literal">$_SERVER[&#039;HTTP_HOST&#039;]</code></td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Available as of PHP 7.1.0.</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.sid-length" class="link">session.sid_length</a></td>
     <td>&quot;32&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Available as of PHP 7.1.0. Deprecated as of PHP 8.4.0.</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.sid-bits-per-character" class="link">session.sid_bits_per_character</a></td>
     <td>&quot;4&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Available as of PHP 7.1.0. Deprecated as of PHP 8.4.0.</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.upload-progress.enabled" class="link">session.upload_progress.enabled</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.upload-progress.cleanup" class="link">session.upload_progress.cleanup</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.upload-progress.prefix" class="link">session.upload_progress.prefix</a></td>
     <td>&quot;upload_progress_&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.upload-progress.name" class="link">session.upload_progress.name</a></td>
     <td>&quot;PHP_SESSION_UPLOAD_PROGRESS&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.upload-progress.freq" class="link">session.upload_progress.freq</a></td>
     <td>&quot;1%&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.upload-progress.min-freq" class="link">session.upload_progress.min_freq</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.lazy-write" class="link">session.lazy_write</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.hash-function" class="link">session.hash_function</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Removed as of PHP 7.1.0.</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.hash-bits-per-character" class="link">session.hash_bits_per_character</a></td>
     <td>&quot;4&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Removed as of PHP 7.1.0.</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.entropy-file" class="link">session.entropy_file</a></td>
     <td>&quot;&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Removed as of PHP 7.1.0.</td>
    </tr>

    <tr>
     <td><a href="session.configuration.php#ini.session.entropy-length" class="link">session.entropy_length</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Removed as of PHP 7.1.0.</td>
    </tr>

   </tbody>
  
 </table>

 For further details and definitions of the
INI_* modes, see the <a href="configuration.changes.modes.php" class="xref">Where a configuration setting may be set</a>.
 </p>
 <p class="para">
  The session management system supports a number of configuration
  options which you can place in your <var class="filename">php.ini</var> file. We will give a
  short overview.
 <dl>

  
   <dt id="ini.session.save-handler">
    <code class="parameter">session.save_handler</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.save_handler</code> defines the name of the
     handler which is used for storing and retrieving data
     associated with a session. Defaults to
     <code class="literal">files</code>. Note that individual extensions may register
     their own <code class="literal">save_handler</code>s; registered handlers can be
     obtained on a per-installation basis by referring to
     <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span>. See also
     <span class="function"><a href="function.session-set-save-handler.php" class="function">session_set_save_handler()</a></span>.
    </span>
   </dd>
  

  
   <dt id="ini.session.save-path">
    <code class="parameter">session.save_path</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.save_path</code> defines the argument which
     is passed to the save handler. If you choose the default files
     handler, this is the path where the files are created. See also
     <span class="function"><a href="function.session-save-path.php" class="function">session_save_path()</a></span>. 
    </span>
    <p class="para">
     There is an optional <code class="literal">N</code> argument to this directive that determines 
     the number of directory levels your session files will be spread
     around in.  For example, setting to <code class="literal">&#039;5;/tmp&#039;</code>
     may end up creating a session file and location like
     <code class="literal">/tmp/4/b/1/e/3/sess_4b1e384ad74619bd212e236e52a5a174If
     </code>.  In order to use <code class="literal">N</code> you must create all of these
     directories before use.  A small shell script exists in
     <var class="filename">ext/session</var> to do this, it&#039;s called
     <var class="filename">mod_files.sh</var>, with a Windows version called
     <var class="filename">mod_files.bat</var>.  Also note that if <code class="literal">N</code> is
     used and greater than 0 then automatic garbage collection will
     not be performed, see a copy of <var class="filename">php.ini</var> for further
     information.  Also, if you use <code class="literal">N</code>, be sure to surround
     <code class="literal">session.save_path</code> in  
     &quot;quotes&quot; because the separator (<code class="literal">;</code>) is
     also used for comments in <var class="filename">php.ini</var>.
    </p>
    <p class="para">
     The file storage module creates files using mode 600 by default.
     This default can be changed with the optional <code class="literal">MODE</code> argument:
     <code class="literal">N;MODE;/path</code> where <code class="literal">MODE</code> is the octal 
     representation of the mode. 
     Setting <code class="literal">MODE</code> does not affect the process umask.
    </p>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="para">
      If this is set to a world-readable directory, such as
      <var class="filename">/tmp</var> (the default), other users on the
      server may be able to hijack sessions by getting the list of
      files in that directory.
     </p>
    </div>
    <div class="caution"><strong class="caution">Caution</strong>
     <p class="para">
      When using the optional directory level argument <code class="literal">N</code>,
      as described above, note that using a value higher than 1 or 2 is
      inappropriate for most sites due to the large number of directories
      required: for example, a value of 3 implies that <code class="literal">(2 ** session.sid_bits_per_character) ** 3</code>
      directories exist on the filesystem, which can result in a lot of wasted
      space and inodes.
     </p>
     <p class="para">
      Only use <code class="literal">N</code> greater than 2 if you are absolutely
      certain that your site is large enough to require it.
     </p>
    </div>
   </dd>
  

  
   <dt id="ini.session.name">
    <code class="parameter">session.name</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.name</code> specifies the name of the
     session which is used as cookie name. It should only contain
     alphanumeric characters. Defaults to <code class="literal">PHPSESSID</code>.
     See also <span class="function"><a href="function.session-name.php" class="function">session_name()</a></span>.
    </span>
   </dd>
  
  
  
   <dt id="ini.session.auto-start">
    <code class="parameter">session.auto_start</code>
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.auto_start</code> specifies whether the
     session module starts a session automatically on request
     startup. Defaults to <code class="literal">0</code> (disabled).
    </span>
   </dd>
  

  
   <dt id="ini.session.serialize-handler">
    <code class="parameter">session.serialize_handler</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.serialize_handler</code> defines the name of
     the handler which is used to serialize/deserialize data. PHP
     serialize format (name <code class="literal">php_serialize</code>), PHP
     internal formats (name <code class="literal">php</code> and
     <code class="literal">php_binary</code>) and WDDX are supported (name
     <code class="literal">wddx</code>). WDDX is only available, if PHP is
     compiled with <a href="ref.wddx.php" class="link">WDDX
     support</a>. <code class="literal">php_serialize</code> uses plain
     serialize/unserialize function internally and does not have
     limitations that <code class="literal">php</code>
     and <code class="literal">php_binary</code> have. Older serialize handlers
     cannot store numeric index nor string index contains special
     characters (<code class="literal">|</code> and <code class="literal">!</code>) in
     $_SESSION. Use <code class="literal">php_serialize</code> to avoid numeric
     index or special character errors at script shutdown. Defaults
     to <code class="literal">php</code>.
    </span>
   </dd>
  

  
   <dt id="ini.session.gc-probability">
    <code class="parameter">session.gc_probability</code>
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.gc_probability</code> in conjunction with
     <code class="literal">session.gc_divisor</code> is used to manage probability
     that the gc (garbage collection) routine is started.
     Defaults to <code class="literal">1</code>. Must be greater than or equal to <code class="literal">0</code>. See <a href="session.configuration.php#ini.session.gc-divisor" class="link">session.gc_divisor</a> for details.
    </span>
   </dd>
  

  
   <dt id="ini.session.gc-divisor">
    <code class="parameter">session.gc_divisor</code>
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.gc_divisor</code> coupled with 
     <code class="literal">session.gc_probability</code> defines the probability 
     that the gc (garbage collection) process is started on every session 
     initialization.
     The probability is calculated by using gc_probability/gc_divisor,
     e.g. 1/100 means there is a 1% chance that the GC process starts
     on each request.
     <code class="literal">session.gc_divisor</code> defaults to <code class="literal">100</code>.
     Must be greater than <code class="literal">0</code>.
    </span>
   </dd>
  
  
  
   <dt id="ini.session.gc-maxlifetime">
    <code class="parameter">session.gc_maxlifetime</code>
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.gc_maxlifetime</code> specifies the number
     of seconds after which data will be seen as &#039;garbage&#039; and
     potentially cleaned up. Garbage collection may occur during session start
     (depending on <a href="session.configuration.php#ini.session.gc-probability" class="link">session.gc_probability</a> and
     <a href="session.configuration.php#ini.session.gc-divisor" class="link">session.gc_divisor</a>).
     Defaults to <code class="literal">1440</code> (24 minutes).
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      If different scripts have different values of
      <code class="literal">session.gc_maxlifetime</code> but share the same place for
      storing the session data then the script with the minimum value will be
      cleaning the data. In this case, use this directive together with <a href="session.configuration.php#ini.session.save-path" class="link">session.save_path</a>.
     </span>
    </p></blockquote>
   </dd>
  

  
   <dt id="ini.session.referer-check">
    <code class="parameter">session.referer_check</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.referer_check</code> contains the
     substring you want to check each HTTP Referer for. If the
     Referer was sent by the client and the substring was not
     found, the embedded session id will be marked as invalid.
     Defaults to the empty string.
    </span>
   </dd>
  

  
   <dt id="ini.session.entropy-file">
    <code class="parameter">session.entropy_file</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.entropy_file</code> gives a path to an
     external resource (file) which will be used as an additional
     entropy source in the session id creation process. Examples are
     <code class="literal">/dev/random</code> or <code class="literal">/dev/urandom</code>
     which are available on many Unix systems.
    </span>
    <span class="simpara">
     This feature is supported on Windows. Setting 
     <code class="literal">session.entropy_length</code> to a non zero value
     will make PHP use the Windows Random API as entropy source.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      Removed in PHP 7.1.0.
     </span>
     <span class="simpara">
      <code class="literal">session.entropy_file</code> defaults
      to <code class="literal">/dev/urandom</code> or <code class="literal">/dev/arandom</code>
      if it is available.
     </span>
    </p></blockquote>
   </dd>
  

  
   <dt id="ini.session.entropy-length">
    <code class="parameter">session.entropy_length</code>
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.entropy_length</code> specifies the number
     of bytes which will be read from the file specified
     above. Defaults to <code class="literal">32</code>.
    </span>
    <span class="simpara">
      Removed in PHP 7.1.0.
    </span>
   </dd>
  

  
   <dt id="ini.session.use-strict-mode">
    <code class="parameter">session.use_strict_mode</code>
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.use_strict_mode</code> specifies whether the
     module will use strict session id mode. If this mode is enabled,
     the module does not accept uninitialized session IDs. If an uninitialized
     session ID is sent from the browser, a new session ID is sent to the browser.
     Applications are protected from session fixation via session adoption
     with strict mode.
     Defaults to <code class="literal">0</code> (disabled).
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
     Enabling <code class="literal">session.use_strict_mode</code> is mandatory for
     general session security. All sites are advised to enable this. See 
     <span class="function"><a href="function.session-create-id.php" class="function">session_create_id()</a></span> example code for more details.
     </span>
    </p></blockquote>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="para">
      If a custom session handler registered via <span class="function"><a href="function.session-set-save-handler.php" class="function">session_set_save_handler()</a></span>
      does not implement <span class="methodname"><a href="sessionupdatetimestamphandlerinterface.validateid.php" class="methodname">SessionUpdateTimestampHandlerInterface::validateId()</a></span>,
      nor supplies the <code class="parameter">validate_sid</code> callback, respectively,
      strict session ID mode is effectively disabled, regardless of the value of this directive.
      Particularly note that <span class="classname"><a href="class.sessionhandler.php" class="classname">SessionHandler</a></span> does <em>not</em>
      implement <span class="methodname"><strong>SessionHandler::validateId()</strong></span>.
     </p>
    </div>
   </dd>
  

  
   <dt id="ini.session.use-cookies">
    <code class="parameter">session.use_cookies</code>
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.use_cookies</code> specifies whether the
     module will use cookies to store the session id on the client
     side. Defaults to <code class="literal">1</code> (enabled).
    </span>
   </dd>
  

  
   <dt id="ini.session.use-only-cookies">
    <code class="parameter">session.use_only_cookies</code>
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.use_only_cookies</code> specifies whether
     the module will <strong>only</strong> use
     cookies to store the session id on the client side.
     Enabling this setting prevents attacks that involve passing session
     IDs in URLs.
     Defaults to <code class="literal">1</code> (enabled).
    </span>
   </dd>
  


  
   <dt id="ini.session.cookie-lifetime">
    <code class="parameter">session.cookie_lifetime</code>
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.cookie_lifetime</code> specifies the lifetime of
     the cookie in seconds which is sent to the browser. The value 0
     means &quot;until the browser is closed.&quot; Defaults to
     <code class="literal">0</code>. See also
     <span class="function"><a href="function.session-get-cookie-params.php" class="function">session_get_cookie_params()</a></span> and
     <span class="function"><a href="function.session-set-cookie-params.php" class="function">session_set_cookie_params()</a></span>.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      The expiration timestamp is set relative to the server time, which is
      not necessarily the same as the time in the client&#039;s browser.
     </span>
    </p></blockquote> 
   </dd>
  

  
   <dt id="ini.session.cookie-path">
    <code class="parameter">session.cookie_path</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.cookie_path</code> specifies path to set
     in the session cookie. Defaults to <code class="literal">/</code>. See also
     <span class="function"><a href="function.session-get-cookie-params.php" class="function">session_get_cookie_params()</a></span> and
     <span class="function"><a href="function.session-set-cookie-params.php" class="function">session_set_cookie_params()</a></span>.
    </span>
   </dd>
  

  
   <dt id="ini.session.cookie-domain">
    <code class="parameter">session.cookie_domain</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.cookie_domain</code> specifies the domain to
     set in the session cookie. Default is none at all meaning the host name of
     the server which generated the cookie according to cookies specification.
     See also <span class="function"><a href="function.session-get-cookie-params.php" class="function">session_get_cookie_params()</a></span> and
     <span class="function"><a href="function.session-set-cookie-params.php" class="function">session_set_cookie_params()</a></span>.
    </span>
   </dd>
  

  
   <dt id="ini.session.cookie-secure">
    <code class="parameter">session.cookie_secure</code>
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.cookie_secure</code> specifies whether
     cookies should only be sent over secure connections. With this option set
     to <code class="literal">on</code>, sessions only work with HTTPS connections.
     If it is <code class="literal">off</code>, then sessions work with both HTTP and
     HTTPS connections. Defaults to <code class="literal">off</code>.
     See also
     <span class="function"><a href="function.session-get-cookie-params.php" class="function">session_get_cookie_params()</a></span> and
     <span class="function"><a href="function.session-set-cookie-params.php" class="function">session_set_cookie_params()</a></span>.
    </span>
   </dd>
  

  
   <dt id="ini.session.cookie-httponly">
    <code class="parameter">session.cookie_httponly</code>
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
   </dt>
   <dd>
    <span class="simpara">
     Marks the cookie as accessible only through the HTTP protocol. This means
     that the cookie won&#039;t be accessible by scripting languages, such as
     JavaScript. This setting can effectively help to reduce identity theft
     through XSS attacks (although it is not supported by all browsers).
    </span>
   </dd>
  

  
   <dt id="ini.session.cookie-samesite">
    <code class="parameter">session.cookie_samesite</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     Allows servers to assert that a cookie ought not to be sent along with
     cross-site requests. This assertion allows user agents to mitigate the risk
     of cross-origin information leakage, and provides some protection against
     cross-site request forgery attacks. Note that this is not supported by all
     browsers.
     An empty value means that no SameSite cookie attribute will be set.
     <code class="literal">Lax</code> and <code class="literal">Strict</code> mean that the cookie
     will not be sent cross-domain for POST requests; <code class="literal">Lax</code>
     will send the cookie for cross-domain GET requests, while <code class="literal">Strict</code>
     will not.
    </span>
   </dd>
  

  
   <dt id="ini.session.cache-limiter">
    <code class="parameter">session.cache_limiter</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.cache_limiter</code> specifies the cache
     control method used for session pages.
     It may be one of the following values:
     <code class="literal">nocache</code>, <code class="literal">private</code>, 
     <code class="literal">private_no_expire</code>, or <code class="literal">public</code>.
     Defaults to <code class="literal">nocache</code>. See also the
     <span class="function"><a href="function.session-cache-limiter.php" class="function">session_cache_limiter()</a></span> documentation for
     information about what these values mean.
    </span>
   </dd>
  


  
   <dt id="ini.session.cache-expire">
    <code class="parameter">session.cache_expire</code>
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.cache_expire</code> specifies time-to-live
     for cached session pages in minutes, this has no effect for
     nocache limiter. Defaults to <code class="literal">180</code>. See also
     <span class="function"><a href="function.session-cache-expire.php" class="function">session_cache_expire()</a></span>.
    </span>
   </dd>
  

  
   <dt id="ini.session.use-trans-sid">
    <code class="parameter">session.use_trans_sid</code>
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.use_trans_sid</code> whether transparent
     sid support is enabled or not. Defaults to
     <code class="literal">0</code> (disabled).
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      URL based session management has additional security risks
      compared to cookie based session management. Users may send
      a URL that contains an active session ID to their friends by
      email or users may save a URL that contains a session ID to
      their bookmarks and access your site with the same session ID
      always, for example.
     </span>
     <span class="simpara">
      Since PHP 7.1.0, full URL path, e.g. https://php.net/, is 
      handled by trans sid feature. Previous PHP handled relative
      URL path only. Rewrite target hosts are defined by <a href="session.configuration.php#ini.session.trans-sid-hosts" class="link">session.trans_sid_hosts</a>.
     </span>
    </p></blockquote>
   </dd>
  

  
   <dt id="ini.session.trans-sid-tags">
    <code class="parameter">session.trans_sid_tags</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.trans_sid_tags</code> specifies which HTML tags
     are rewritten to include session id when transparent sid support
     is enabled. Defaults to
     <code class="literal">a=href,area=href,frame=src,input=src,form=</code>
    </span>
    <span class="simpara">
     <code class="literal">form</code> is special tag. <code class="literal">&lt;input hidden=&quot;session_id&quot; name=&quot;session_name&quot;&gt;</code>
     is added as form variable.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      Before PHP 7.1.0, <a href="outcontrol.configuration.php#ini.url-rewriter.tags" class="link">url_rewriter.tags</a>
      was used for this purpose. Since PHP 7.1.0, <code class="literal">fieldset</code> 
      is no longer considered as special tag.
     </span>
    </p></blockquote>
   </dd>
  

  
   <dt id="ini.session.trans-sid-hosts">
    <code class="parameter">session.trans_sid_hosts</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.trans_sid_hosts</code> specifies which hosts
     are rewritten to include session id when transparent sid support
     is enabled. Defaults to <code class="literal">$_SERVER[&#039;HTTP_HOST&#039;]</code>
     Multiple hosts can be specified by &quot;,&quot;, no space is allowed
     between hosts. e.g. <code class="literal">php.net,wiki.php.net,bugs.php.net</code>
    </span>
   </dd>
  

  
   <dt id="ini.session.sid-length">
    <code class="parameter">session.sid_length</code>
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.sid_length</code> allows you to specify the
     length of session ID string. Session ID length can be between 22
     to 256.
    </span>
    <span class="simpara">
     The default is 32. If you need compatibility you may specify 32,
     40, etc. Longer session ID is harder to guess. At least 32 chars
     are recommended.
    </span>
    <div class="tip"><strong class="tip">Tip</strong>
     <p class="para">
      Compatibility Note: Use 32 instead of
      <code class="literal">session.hash_function</code>=0 (MD5) and
      <code class="literal">session.hash_bits_per_character</code>=4,
      <code class="literal">session.hash_function</code>=1 (SHA1) and
      <code class="literal">session.hash_bits_per_character</code>=6. Use 26 instead of
      <code class="literal">session.hash_function</code>=0 (MD5) and
      <code class="literal">session.hash_bits_per_character</code>=5. Use 22 instead of
      <code class="literal">session.hash_function</code>=0 (MD5) and
      <code class="literal">session.hash_bits_per_character</code>=6. You must
      configure INI values to have at least 128 bits in session ID. Do
      not forget to set an appropriate value for
      <code class="literal">session.sid_bits_per_character</code>, otherwise you
      will have weaker session ID.
     </p>
    </div> 
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      This setting is introduced in PHP 7.1.0.
     </span>
    </p></blockquote>
   </dd>
  

  
   <dt id="ini.session.sid-bits-per-character">
    <code class="parameter">session.sid_bits_per_character</code>
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.sid_bits_per_character</code> allows you to specify the
     number of bits in encoded session ID character. The possible values are 
     &#039;4&#039; (0-9, a-f), &#039;5&#039; (0-9, a-v), and &#039;6&#039; (0-9, a-z, A-Z, &quot;-&quot;, &quot;,&quot;).
    </span>
    <span class="simpara">
     The default is 4. The more bits results in stronger session ID. 5 is
     recommended value for most environments.
    </span>
    <p class="para">
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      This setting is introduced in PHP 7.1.0.
     </span>
    </p></blockquote>
   </dd>
  

  
   <dt id="ini.session.hash-function">
    <code class="parameter">session.hash_function</code>
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.hash_function</code> allows you to specify the hash
     algorithm used to generate the session IDs. &#039;0&#039; means MD5 (128 bits) and
     &#039;1&#039; means SHA-1 (160 bits).
    </span>
    <p class="para">
     It is also possible to specify any of the algorithms
     provided by the <a href="ref.hash.php" class="link">hash extension</a> (if it is
     available), like <code class="literal">sha512</code> or
     <code class="literal">whirlpool</code>. A complete list of supported algorithms can
     be obtained with the <span class="function"><a href="function.hash-algos.php" class="function">hash_algos()</a></span> function.
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      Removed in PHP 7.1.0.
     </span>
    </p></blockquote>
   </dd>
  

  
   <dt id="ini.session.hash-bits-per-character">
    <code class="parameter">session.hash_bits_per_character</code>
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.hash_bits_per_character</code> allows you to define
     how many bits are stored in each character when converting the binary
     hash data to something readable. The possible values are &#039;4&#039; (0-9, a-f),
     &#039;5&#039; (0-9, a-v), and &#039;6&#039; (0-9, a-z, A-Z, &quot;-&quot;, &quot;,&quot;).
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      Removed in PHP 7.1.0.
     </span>
    </p></blockquote>
   </dd>
  

  
   <dt id="ini.session.upload-progress.enabled">
    <code class="parameter">session.upload_progress.enabled</code>
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
   </dt>
   <dd>
    <span class="simpara">
     Enables upload progress tracking, populating the <var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION</a></var> variable.
     Defaults to 1, enabled.
    </span>
   </dd>
  

  
   <dt id="ini.session.upload-progress.cleanup">
    <code class="parameter">session.upload_progress.cleanup</code>
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
   </dt>
   <dd>
    <span class="simpara">
     Cleanup the progress information as soon as all POST data has been read
     (i.e. upload completed). Defaults to 1, enabled.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      It is highly recommended to keep this feature enabled.
     </span>
    </p></blockquote>
   </dd>
  

  
   <dt id="ini.session.upload-progress.prefix">
    <code class="parameter">session.upload_progress.prefix</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     A prefix used for the upload progress key in the <var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION</a></var>.
     This key will be concatenated with the value of
     <code class="literal">$_POST[ini_get(&quot;session.upload_progress.name&quot;)]</code> to
     provide a unique index.
    </span>
    <span class="simpara">
     Defaults to &quot;upload_progress_&quot;.
    </span>
   </dd>
  

  
   <dt id="ini.session.upload-progress.name">
    <code class="parameter">session.upload_progress.name</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <span class="simpara">
     The name of the key to be used in <var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION</a></var> storing
     the progress information. See also
     <a href="session.configuration.php#ini.session.upload-progress.prefix" class="link">session.upload_progress.prefix</a>.
    </span>
    <span class="simpara">
     If <code class="literal">$_POST[ini_get(&quot;session.upload_progress.name&quot;)]</code>
     is not passed or available, upload progressing will not be recorded.
    </span>
    <span class="simpara">
     Defaults to &quot;PHP_SESSION_UPLOAD_PROGRESS&quot;.
    </span>
   </dd>
  

  
   <dt id="ini.session.upload-progress.freq">
    <code class="parameter">session.upload_progress.freq</code>
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span>
   </dt>
   <dd>
    <span class="simpara">
     Defines how often the upload progress information should be updated.
     This can be defined in bytes (i.e. &quot;update progress information after every 100 bytes&quot;), or in percentages (i.e. &quot;update progress information after receiving every 1% of the whole filesize&quot;).
    </span>
    <span class="simpara">
     Defaults to &quot;1%&quot;.
    </span>
   </dd>
  

  
   <dt id="ini.session.upload-progress.min-freq">
    <code class="parameter">session.upload_progress.min_freq</code>
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   </dt>
   <dd>
    <span class="simpara">
     The minimum delay between updates, in seconds.
     Defaults to &quot;1&quot; (one second).
    </span>
   </dd>
  

  
   <dt id="ini.session.lazy-write">
    <code class="parameter">session.lazy_write</code>
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">session.lazy_write</code>, when set to 1, means that session
     data is only rewritten if it changes. Defaults to 1, enabled.
    </span>
   </dd>
  

 </dl>
 </p>

 <p class="para">
  Upload progress will not be registered unless
  session.upload_progress.enabled is enabled, and the
  $_POST[ini_get(&quot;session.upload_progress.name&quot;)] variable is set.
  See <a href="session.upload-progress.php" class="link">Session Upload Progress</a> for more details on this functionality.
 </p>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/session/ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsession.configuration%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=session.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/session.configuration.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">21 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128936">  <div class="votes">
    <div id="Vu128936">
    <a href="/manual/vote-note.php?id=128936&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128936">
    <a href="/manual/vote-note.php?id=128936&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128936" title="97% like this...">
    37
    </div>
  </div>
  <a href="#128936" class="name">
  <strong class="user"><em>Walerian Walawski - https://w87.eu/</em></strong></a><a class="genanchor" href="#128936"> &para;</a><div class="date" title="2023-10-08 01:23"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128936">
<div class="phpcode"><code><span class="html">Can't find mod_files.sh? Here it is:<br />▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬<br /><br />#!/usr/bin/env bash<br /><br />if [[ "$2" = "" ]] || [[ "$3" = "" ]]; then<br />       echo "Usage: $0 BASE_DIRECTORY DEPTH BITS_PER_CHAR"<br />       echo "BASE_DIRECTORY will be created if it doesn't exist"<br />       echo "DEPTH must be an integer number &gt;0"<br />       echo "BITS_PER_CHAR(session.sid_bits_per_character) should be one of 4, 5, or 6."<br />       # <a href="http://php.net/manual/en/session.configuration.php#ini.session.sid-bits-per-character" rel="nofollow" target="_blank">http://php.net/manual/en/session.configuration.php#ini.session.sid-bits-per-character</a><br />       exit 1<br />fi<br /><br />if [[ "$2" = "0" ]] &amp;&amp; [[ ! "$4" = "recurse" ]]; then<br />       echo "Can't create a directory tree with depth of 0, exiting."<br />fi<br /><br />if [[ "$2" = "0" ]]; then<br />       exit 0<br />fi<br /><br />directory="$1"<br />depth="$2"<br />bitsperchar="$3"<br /><br />hash_chars="0 1 2 3 4 5 6 7 8 9 a b c d e f"<br /><br />if [[ "$bitsperchar" -ge "5" ]]; then<br />       hash_chars="$hash_chars g h i j k l m n o p q r s t u v"<br />fi<br /><br />if [[ "$bitsperchar" -ge "6" ]]; then<br />       hash_chars="$hash_chars w x y z A B C D E F G H I J K L M N O P Q R S T U V W X Y Z - ,"<br />fi<br /><br />while [[ -d $directory ]] &amp;&amp; [[ $( ls $directory ) ]]; do<br />       echo "Directory $directory is not empty! What would you like to do?"<br /><br />       options="\"Delete directory contents\" \"Choose another directory\" \"Quit\""<br />       eval set $options<br />       select opt in "$@"; do<br /><br />              if [[ $opt = "Delete directory contents" ]]; then<br />                     echo "Deleting $directory contents... "<br />                     rm -rf $directory/*<br />              elif [[ $opt = "Choose another directory" ]]; then<br />                     echo "Which directory would you like to choose?"<br />                     read directory<br />              elif [[ $opt = "Quit" ]]; then<br />                     exit 0<br />              fi<br /><br />              break;<br />       done<br />done<br /><br />if [[ ! -d $directory ]]; then<br />       mkdir -p $directory<br />fi<br /><br />echo "Creating session path in $directory with a depth of $depth for session.sid_bits_per_character = $bitsperchar"<br /><br />for i in $hash_chars; do<br />       newpath="$directory/$i"<br />       mkdir $newpath || exit 1<br />       bash $0 $newpath `expr $depth - 1` $bitsperchar recurse<br />done</span></code></div>
  </div>
 </div>
  <div class="note" id="115842">  <div class="votes">
    <div id="Vu115842">
    <a href="/manual/vote-note.php?id=115842&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115842">
    <a href="/manual/vote-note.php?id=115842&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115842" title="68% like this...">
    78
    </div>
  </div>
  <a href="#115842" class="name">
  <strong class="user"><em>Christopher Kramer</em></strong></a><a class="genanchor" href="#115842"> &para;</a><div class="date" title="2014-10-02 01:22"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115842">
<div class="phpcode"><code><span class="html">On debian (based) systems, changing session.gc_maxlifetime at runtime has no real effect. Debian disables PHP's own garbage collector by setting session.gc_probability=0. Instead it has a cronjob running every 30 minutes (see /etc/cron.d/php5) that cleans up old sessions. This cronjob basically looks into your php.ini and uses the value of session.gc_maxlifetime there to decide which sessions to clean (see /usr/lib/php5/maxlifetime).<br /><br />You can adjust the global value in your php.ini (usually /etc/php5/apache2/php.ini). Or you can change the session.save_path so debian's cronjob will not clean up your sessions anymore. Then you need to either do your own garbage collection with your own cronjob or enable PHP's garbage collection (php then needs sufficient privileges on the save_path).<br /><br />Why does Debian not use PHP's garbarage collection?<br />For security reasons, they store session data in a place (/var/lib/php5) with very stringent permissions. With the sticky bit set, only root is allowed to rename or delete files there, so PHP itself cannot clean up old session data. See <a href="https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=267720" rel="nofollow" target="_blank">https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=267720</a> .</span></code></div>
  </div>
 </div>
  <div class="note" id="129114">  <div class="votes">
    <div id="Vu129114">
    <a href="/manual/vote-note.php?id=129114&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129114">
    <a href="/manual/vote-note.php?id=129114&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129114" title="85% like this...">
    5
    </div>
  </div>
  <a href="#129114" class="name">
  <strong class="user"><em>zch1</em></strong></a><a class="genanchor" href="#129114"> &para;</a><div class="date" title="2023-12-20 05:57"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129114">
<div class="phpcode"><code><span class="html">the pwd should be urlencode when it contanis special chars.<br />eg: <br /><br />save_handler:redis<br />save_path: tcp://127.0.0.1:6739?auth=urlencode('xxxxx')</span></code></div>
  </div>
 </div>
  <div class="note" id="129300">  <div class="votes">
    <div id="Vu129300">
    <a href="/manual/vote-note.php?id=129300&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129300">
    <a href="/manual/vote-note.php?id=129300&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129300" title="83% like this...">
    4
    </div>
  </div>
  <a href="#129300" class="name">
  <strong class="user"><em>theking2(at)king.ma</em></strong></a><a class="genanchor" href="#129300"> &para;</a><div class="date" title="2024-03-03 09:39"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129300">
<div class="phpcode"><code><span class="html">To prevent mitm-attacks you want to make sure the session cookie is only transmitted over a secure channel prefix it with the magic string "__Secure-". [1]<br /><br />Like :<br /><span class="default">&lt;?php<br />    session_start</span><span class="keyword">( [ </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'__Secure-Session-ID' </span><span class="keyword">] );<br /></span><span class="default">?&gt;<br /></span><br />The cookie will not be available on non-secure channel.<br /><br />(Putting this note it here probably goes unnoticed because of all the noise)<br /><br />[1]: <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#attributes" rel="nofollow" target="_blank">https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#attributes</a></span></code></div>
  </div>
 </div>
  <div class="note" id="129283">  <div class="votes">
    <div id="Vu129283">
    <a href="/manual/vote-note.php?id=129283&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129283">
    <a href="/manual/vote-note.php?id=129283&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129283" title="75% like this...">
    2
    </div>
  </div>
  <a href="#129283" class="name">
  <strong class="user"><em>theking2(at)king.ma</em></strong></a><a class="genanchor" href="#129283"> &para;</a><div class="date" title="2024-02-26 07:43"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129283">
<div class="phpcode"><code><span class="html">Please be careful with the 'sid_length' when setting 'sid_bits_per_character' to six. <br /><br />Setting sid_bits_per_character to 6 includes the character "," to the list of possible characters. A comma will be escaped and transmitted as "%2C" (tested on Chromium Version 119.0.6045.199) adding two extra characters for each comma to the SESSION_ID.</span></code></div>
  </div>
 </div>
  <div class="note" id="115913">  <div class="votes">
    <div id="Vu115913">
    <a href="/manual/vote-note.php?id=115913&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115913">
    <a href="/manual/vote-note.php?id=115913&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115913" title="65% like this...">
    18
    </div>
  </div>
  <a href="#115913" class="name">
  <strong class="user"><em>GreenReaper</em></strong></a><a class="genanchor" href="#115913"> &para;</a><div class="date" title="2014-10-14 12:56"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115913">
<div class="phpcode"><code><span class="html">We found a session.save_path depth of 3 led to excessive wastage of inodes and in fact disk space in storing the directory tree. dir_indexes option on ext2/3/4 makes larger directories more feasible anyway, so we decided to move to a depth of 2 instead.<br /><br />It took a little puzzling to figure out how to move the existing PHP sessions up one directory tree, but we ended up running this in the root sessions directory:<br /><br />#!/bin/sh<br />for a in ./* ; do<br />    cd ./$a<br />    pwd<br />    for b in ./* ; do<br />      cd ./$b<br />      pwd<br />      # Move existing sessions out<br />      find ./* -xdev -type f -print0 | xargs -0 mv -t .<br />      # Remove subdirectories<br />      find ./* -xdev -type d -print0 | xargs -0 rmdir<br />      cd ..<br />  done<br />  cd ..<br />done<br /><br />This script may not be the best way to do it, but it got the job done fast. You can modify it for different depths by adding or removing "for" loops.<br /><br />The documentation gives a depth of 5 as an example, but five is right out. If you're going beyond 2, you're at the scale where you may want to to look at a large memcached or redis instance instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="117668">  <div class="votes">
    <div id="Vu117668">
    <a href="/manual/vote-note.php?id=117668&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117668">
    <a href="/manual/vote-note.php?id=117668&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117668" title="61% like this...">
    16
    </div>
  </div>
  <a href="#117668" class="name">
  <strong class="user"><em>info at thimbleopensource dot com</em></strong></a><a class="genanchor" href="#117668"> &para;</a><div class="date" title="2015-07-19 07:39"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117668">
<div class="phpcode"><code><span class="html">I found out that if you need to set custom session settings, you only need to do it once when session starts. Then session maintains its settings, even if you use ini_set and change them, original session still will use it's original setting until it expires.<br /><br />Just thought it might be useful to someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="97979">  <div class="votes">
    <div id="Vu97979">
    <a href="/manual/vote-note.php?id=97979&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97979">
    <a href="/manual/vote-note.php?id=97979&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97979" title="58% like this...">
    10
    </div>
  </div>
  <a href="#97979" class="name">
  <strong class="user"><em>Wouter</em></strong></a><a class="genanchor" href="#97979"> &para;</a><div class="date" title="2010-05-19 03:14"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97979">
<div class="phpcode"><code><span class="html">When setting the session.cookie_lifetime directive in a .htaccess use string format like;<br /><br />php_value session.cookie_lifetime "123456"<br /><br />and not<br /><br />php_value session.cookie_lifetime 123456<br /><br />Using a integer as stated above dit not work in my case (Apache/2.2.11 (Ubuntu) PHP/5.2.6-3ubuntu4.5 with Suhosin-Patch mod_ssl/2.2.11 OpenSSL/0.9.8g)</span></code></div>
  </div>
 </div>
  <div class="note" id="111451">  <div class="votes">
    <div id="Vu111451">
    <a href="/manual/vote-note.php?id=111451&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111451">
    <a href="/manual/vote-note.php?id=111451&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111451" title="56% like this...">
    8
    </div>
  </div>
  <a href="#111451" class="name">
  <strong class="user"><em>jlevene at etisoftware dot com</em></strong></a><a class="genanchor" href="#111451"> &para;</a><div class="date" title="2013-02-21 01:29"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111451">
<div class="phpcode"><code><span class="html">Being unable to find an actual copy of mod_files.sh, and seeing lots of complaints/bug fix requests for it, here's one that works.  It gets all its parameters from PHP.INI, so you don't have the opportunity to mess up:<br /><br />#!/bin/bash<br />#<br /># Creates directories for PHP session storage.<br /># Replaces the one that "comes with" PHP, which (a) doesn't always come with it<br /># and (b) doesn't work so great.<br />#<br /># This version takes no parameters, and uses the values in PHP.INI (if it<br /># can find it).<br />#<br /># Works in OS-X and CentOS (and probably all other) Linux.<br />#<br /># Feb '13 by Jeff Levene.<br /><br />[[ $# -gt 0 ]] &amp;&amp; echo "$0 requires NO command-line parameters.<br />It gets does whatever is called for in the PHP.INI file (if it can find it).<br />" &amp;&amp; exit 1<br /><br /># Find the PHP.INI file, if possible:<br />phpIni=/usr/local/lib/php.ini                        # Default PHP.INI location<br />[[ ! -f "$phpIni" ]] &amp;&amp; phpIni=/etc/php.ini            # Secondary location<br />[[ ! -f "$phpIni" ]] &amp;&amp; phpIni=                        # Found it?<br /><br /># Outputs the given (as $1) parameter from the PHP.INI file:<br /># The "empty" brackets have a SPACE and a TAB in them.<br />#<br />PhpConfigParam() {<br />    [[ ! "$phpIni" ]] &amp;&amp; return<br />    # Get the line from the INI file:<br />    varLine=`grep "^[     ]*$1[     ]*=" "$phpIni"`<br /><br />    # Extract the value:<br />    value=`expr "$varLine" : ".*$1[     ]*=[     ]*['\"]*\([^'\"]*\)"`<br />    echo "$value"<br />    }<br /><br />if [[ "$phpIni" ]]<br />then<br />    savePath=`PhpConfigParam session.save_path`<br />    # If there's a number and semicolon at the front, remove them:<br />    dirDepth=`expr "$savePath" : '\([0-9]*\)'`<br />    [[ "$dirDepth" ]] &amp;&amp; savePath=`expr "$savePath" : '[0-9]*;\(.*\)'` || dirDepth=0<br />    bits=`PhpConfigParam session.hash_bits_per_character`<br />    case "x$bits" in<br />        x)    echo "hash_bits_per_character not defined.  Not running." ; exit 2 ;;<br />        x4) alphabet='0 1 2 3 4 5 6 7 8 9 a b c d e f' ;;<br />        x5) alphabet='0 1 2 3 4 5 6 7 8 9 a b c d e f g h i j k l m n o p q r s t u v' ;;<br />        x6) alphabet='0 1 2 3 4 5 6 7 8 9 a b c d e f g h i j k l m n o p q r s t u v'<br />            alphabet="$alphabet w x y z A B C D E F G H I J K L M N O P Q R S T U V W"<br />            alphabet="$alphabet X Y Z - ,"<br />            ;;<br />        *)    echo "unrecognized hash_bits_per_character.  Not running." ; exit 2 ;;<br />    esac<br />else<br />    echo "Cannot find the PHP.INI file.  Not running.  Sorry."<br />    exit 2<br />fi<br /><br /># The depth of directories to create is $1.  0 means just create the named<br /># directory.  Directory to start with is $2.<br />#<br /># Used recursively, so variables must be "local".<br /><br />doDir() {<br />    local dir="$2"<br />    if [[ -d "$dir" ]]<br />    then<br />        echo "Directory '$dir' already exists.  No problem."<br />    elif [[ -f "$dir" ]]<br />    then<br />        echo "FILE '$dir' exists.  Aborting." ; exit 2<br />    else<br />        if mkdir "$dir"<br />        then<br />            echo "Directory '$dir' created."<br />        else<br />            echo "Cannot create directory '$dir'.  Aborting." ; exit 2<br />        fi<br />    fi<br />    chmod a+rwx "$dir"<br />    if [[ $1 -gt 0 ]]<br />    then<br />        local depth=$(( $1 - 1 ))<br />        for letter in $alphabet<br />        do    doDir $depth "$dir/$letter"<br />        done<br />    fi<br />    }<br />    <br />    <br />echo "Running with savePath='$savePath', dirDepth=$dirDepth, and bitsPerCharacter=$bits."<br />sleep 3<br /><br />doDir $dirDepth "$savePath"<br /><br />exit 0</span></code></div>
  </div>
 </div>
  <div class="note" id="123598">  <div class="votes">
    <div id="Vu123598">
    <a href="/manual/vote-note.php?id=123598&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123598">
    <a href="/manual/vote-note.php?id=123598&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123598" title="55% like this...">
    3
    </div>
  </div>
  <a href="#123598" class="name">
  <strong class="user"><em>boan dot web at outlook dot com</em></strong></a><a class="genanchor" href="#123598"> &para;</a><div class="date" title="2019-02-10 12:43"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123598">
<div class="phpcode"><code><span class="html">session.cache_limiter may be empty string to disable cache headers entirely. <br /><br />Quote:<br />&gt; Setting the cache limiter to '' will turn off automatic sending of cache headers entirely.<br /><br /><a href="http://php.net/manual/en/function.session-cache-limiter.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.session-cache-limiter.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="107990">  <div class="votes">
    <div id="Vu107990">
    <a href="/manual/vote-note.php?id=107990&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107990">
    <a href="/manual/vote-note.php?id=107990&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107990" title="54% like this...">
    7
    </div>
  </div>
  <a href="#107990" class="name">
  <strong class="user"><em>hassankhodadadeh at NOSPAM dot gmail dot com</em></strong></a><a class="genanchor" href="#107990"> &para;</a><div class="date" title="2012-03-20 05:42"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107990">
<div class="phpcode"><code><span class="html">max value for "session.gc_maxlifetime" is 65535. values bigger than this may cause  php session stops working.</span></code></div>
  </div>
 </div>
  <div class="note" id="122042">  <div class="votes">
    <div id="Vu122042">
    <a href="/manual/vote-note.php?id=122042&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122042">
    <a href="/manual/vote-note.php?id=122042&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122042" title="54% like this...">
    3
    </div>
  </div>
  <a href="#122042" class="name">
  <strong class="user"><em>li-lingjie</em></strong></a><a class="genanchor" href="#122042"> &para;</a><div class="date" title="2017-12-19 09:20"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122042">
<div class="phpcode"><code><span class="html">Use SessionHandlerInterface interface Custom redis session, found the following:<br /><br />Use ini_set ('session.save_path', "tcp: //127.0.0.1: 6379? Auth = password"); will be reported:<br /><br />PHP Fatal error: session_start (): Failed to initialize storage module: user (path: tcp: //127.0.0.1: 6379? Auth = password);<br /><br />Using session_save_path ("tcp: //127.0.0.1: 6379? Auth = password") will not</span></code></div>
  </div>
 </div>
  <div class="note" id="99619">  <div class="votes">
    <div id="Vu99619">
    <a href="/manual/vote-note.php?id=99619&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99619">
    <a href="/manual/vote-note.php?id=99619&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99619" title="50% like this...">
    1
    </div>
  </div>
  <a href="#99619" class="name">
  <strong class="user"><em>Nicholas</em></strong></a><a class="genanchor" href="#99619"> &para;</a><div class="date" title="2010-08-26 11:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99619">
<div class="phpcode"><code><span class="html">Transient sessions do not appear to be working in 5.3.3<br /><br />E.g.<br /><br /><span class="default">&lt;?php<br />    ini_set</span><span class="keyword">(</span><span class="string">"session.use_cookies"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />    </span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">"session.use_trans_sid"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">session_start</span><span class="keyword">();<br />    <br />    if (isset(</span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"foo"</span><span class="keyword">])) {<br />        echo </span><span class="string">"Foo: " </span><span class="keyword">. </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"foo"</span><span class="keyword">];<br />    } else {<br />        </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">"foo"</span><span class="keyword">] = </span><span class="string">"Bar"</span><span class="keyword">;<br />        echo </span><span class="string">"&lt;a href=?" </span><span class="keyword">. </span><span class="default">session_name</span><span class="keyword">() . </span><span class="string">"=" </span><span class="keyword">. </span><span class="default">session_id</span><span class="keyword">() . </span><span class="string">"&gt;Begin test&lt;/a&gt;"</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />This works in 5.2.5, but not 5.3.3</span></code></div>
  </div>
 </div>
  <div class="note" id="121913">  <div class="votes">
    <div id="Vu121913">
    <a href="/manual/vote-note.php?id=121913&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121913">
    <a href="/manual/vote-note.php?id=121913&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121913" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#121913" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#121913"> &para;</a><div class="date" title="2017-11-25 04:06"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121913">
<div class="phpcode"><code><span class="html">You should take more care configuring session.gc_maxlifetime when virtual hosts share the same session-saving directory. One host's session data may be gc'ed when another host runs php.</span></code></div>
  </div>
 </div>
  <div class="note" id="84045">  <div class="votes">
    <div id="Vu84045">
    <a href="/manual/vote-note.php?id=84045&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84045">
    <a href="/manual/vote-note.php?id=84045&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84045" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#84045" class="name">
  <strong class="user"><em>00 at f00n dot com</em></strong></a><a class="genanchor" href="#84045"> &para;</a><div class="date" title="2008-06-25 06:36"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84045">
<div class="phpcode"><code><span class="html">After having many problems with garbage collection not clearing my sessions I have resolved it through the following.<br /><br />First I found this in the php.ini (not something i noticed as i use phpinfo(); to see my hosting ini).<br /><br />; NOTE: If you are using the subdirectory option for storing session files<br />;       (see session.save_path above), then garbage collection does *not*<br />;       happen automatically.  You will need to do your own garbage<br /><br />; collection through a shell script, cron entry, or some other method. ;       For example, the following script would is the equivalent of<br />;       setting session.gc_maxlifetime to 1440 (1440 seconds = 24 minutes):<br />;          cd /path/to/sessions; find -cmin +24 | xargs rm<br /><br />With this is mind there are options.<br /><br />1. dont use a custom save_path.<br />** This means if your isp hasnt defaulted your session temp to something safer than install default or you are using a shared directory for session data then you would be wise to use named sessions to keep your session from being viewable in other people's scripts.  Creating a unique_id name for this is the common method. **<br /><br />2. use your custom folder but write a garbage collection script.<br /><br />3. use a custom handler and a database</span></code></div>
  </div>
 </div>
  <div class="note" id="100855">  <div class="votes">
    <div id="Vu100855">
    <a href="/manual/vote-note.php?id=100855&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100855">
    <a href="/manual/vote-note.php?id=100855&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100855" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#100855" class="name">
  <strong class="user"><em>AskApache</em></strong></a><a class="genanchor" href="#100855"> &para;</a><div class="date" title="2010-11-10 10:00"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100855">
<div class="phpcode"><code><span class="html">This is how I set my session.save_path<br />session.save_path = "1;/home/askapache/tmp/s" <br />So to create the folder structure you can use this compatible shell script, if you want to create with 777 permissions change the umask to 0000;<br />sh -o braceexpand -c "umask 0077;mkdir -p s/{0..9}/{a..z} s/{a..z}/{0..9}"<br /><br />Then you can create a cronjob to clean the session folder by adding this to your crontab which deletes any session files older than an hour:<br />@daily find /home/askapache/tmp/s -type f -mmin +60 -exec rm -f {} \; &amp;&gt;/dev/null<br /><br />That will create sessions in folder like:<br /> /home/askapache/tmp/s/b/sess_b1aba5q6io4lv01bpc6t52h0ift227j6<br /><br />I don't think any non-mega site will need to go more than 1 levels deep.  Otherwise you create so many directories that it slows the performance gained by this.</span></code></div>
  </div>
 </div>
  <div class="note" id="88552">  <div class="votes">
    <div id="Vu88552">
    <a href="/manual/vote-note.php?id=88552&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88552">
    <a href="/manual/vote-note.php?id=88552&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88552" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#88552" class="name">
  <strong class="user"><em>mikaelkael at php dot net</em></strong></a><a class="genanchor" href="#88552"> &para;</a><div class="date" title="2009-01-28 12:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88552">
<div class="phpcode"><code><span class="html">Recently, I needed to change the session save_path in my program under Windows. With an ini_set('session.save_path', '../data/sessions'); (and session.gc_divisor = 1 for test), I always obtain 'Error #8 session_start(): ps_files_cleanup_dir: opendir(../data/sessions) failed: Result too large'.<br /><br />I corrected this by changing with ini_set('session.save_path', realpath('../data/sessions'));</span></code></div>
  </div>
 </div>
  <div class="note" id="122038">  <div class="votes">
    <div id="Vu122038">
    <a href="/manual/vote-note.php?id=122038&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122038">
    <a href="/manual/vote-note.php?id=122038&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122038" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#122038" class="name">
  <strong class="user"><em>white-gandalf at web dot de</em></strong></a><a class="genanchor" href="#122038"> &para;</a><div class="date" title="2017-12-18 05:50"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122038">
<div class="phpcode"><code><span class="html">session.use_strict_mode does very little to strengthen your security: only one very specific variant of attack is migitated by this (where the attacker hands an "empty" sid to the victim to adapt his own browser to that session later) - versus for example the case where he pre-opens a session, handing the sid of that one to the victim, so the victim gets adapted to the pre-opened session. In the latter case this flag does nothing to help. In every other scenario with other vulnerabilities where the session id gets leaked, the flag helps nigher.<br /><br />But this flag renders the php function session_id() useless in its parameterized variant, thus preventing any php functionality that builds upon this function.</span></code></div>
  </div>
 </div>
  <div class="note" id="99671">  <div class="votes">
    <div id="Vu99671">
    <a href="/manual/vote-note.php?id=99671&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99671">
    <a href="/manual/vote-note.php?id=99671&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99671" title="45% like this...">
    -4
    </div>
  </div>
  <a href="#99671" class="name">
  <strong class="user"><em>orbill</em></strong></a><a class="genanchor" href="#99671"> &para;</a><div class="date" title="2010-08-30 05:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99671">
<div class="phpcode"><code><span class="html">apparently the default value for session.use_only_cookies has changed in 5.3.3 from 0 to 1. If you haven't set this in your php.ini or your code to 0 transparent sessions won't work.</span></code></div>
  </div>
 </div>
  <div class="note" id="128544">  <div class="votes">
    <div id="Vu128544">
    <a href="/manual/vote-note.php?id=128544&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128544">
    <a href="/manual/vote-note.php?id=128544&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128544" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#128544" class="name">
  <strong class="user"><em>descartavel1+php at gmail dot com</em></strong></a><a class="genanchor" href="#128544"> &para;</a><div class="date" title="2023-05-16 09:11"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128544">
<div class="phpcode"><code><span class="html">You should set `session.name` to use either prefix `__Host-` or `__Secure-`. See <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#attributes" rel="nofollow" target="_blank">https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#attributes</a></span></code></div>
  </div>
 </div>
  <div class="note" id="126568">  <div class="votes">
    <div id="Vu126568">
    <a href="/manual/vote-note.php?id=126568&amp;page=session.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126568">
    <a href="/manual/vote-note.php?id=126568&amp;page=session.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126568" title="33% like this...">
    -5
    </div>
  </div>
  <a href="#126568" class="name">
  <strong class="user"><em>polygon dot co dot in at gmail dot com</em></strong></a><a class="genanchor" href="#126568"> &para;</a><div class="date" title="2021-11-07 08:04"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126568">
<div class="phpcode"><code><span class="html">In php.ini, session.save_handler defines the name of the handler which is used for storing and retrieving data associated with a session. [Defaults to files.]<br /><br />By default session.save_handler has support for below<br /><br />session.save_handler = files<br />session.save_handler = sqlite<br />session.save_handler = redis<br />session.save_handler = memcached<br /><br />These locks the session by default for any HTTP request using session.<br />Locking means, a user can't access session related pages until current request is completed.<br /><br />So, if you are thinking that switching to these will increase performance; the answer is NO! because of locking behaviour.<br /><br />To overcome/customise the session locking behaviour use as below.<br /><br />session.save_handler = user<br />This is for all (including list above) modes of session storage.<br /><br />For "user" type save_handler, we can ignore locks for better performance (as explained in function session_set_save_handler). But for this we need to take care to use sessions only for authenticity and not for passing data from one script to other.<br /><br />For passing data accross scripts use GET method to achieve the goal.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=session.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/session.configuration.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="session.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="session.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="">
                            <a href="session.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="current">
                            <a href="session.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
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
