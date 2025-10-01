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

 <link rel="canonical" href="https://www.php.net/manual/en/info.configuration.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/info.configuration.php">
 <link rel="alternate" href="https://www.php.net/manual/en/info.configuration.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/info.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/info.setup.php">
 <link rel="next" href="https://www.php.net/manual/en/info.constants.php">

 <link rel="alternate" href="https://www.php.net/manual/en/info.configuration.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/info.configuration.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/info.configuration.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/info.configuration.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/info.configuration.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/info.configuration.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/info.configuration.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/info.configuration.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/info.configuration.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/info.configuration.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/info.configuration.php" hreflang="zh">

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
        <a href="info.constants.php">
          Predefined Constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="info.setup.php">
          &laquo; Installing/Configuring        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.info.php'>PHP Options/Info</a></li>      <li><a href='info.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/info.configuration.php' selected="selected">English</option>
            <option value='de/info.configuration.php'>German</option>
            <option value='es/info.configuration.php'>Spanish</option>
            <option value='fr/info.configuration.php'>French</option>
            <option value='it/info.configuration.php'>Italian</option>
            <option value='ja/info.configuration.php'>Japanese</option>
            <option value='pt_BR/info.configuration.php'>Brazilian Portuguese</option>
            <option value='ru/info.configuration.php'>Russian</option>
            <option value='tr/info.configuration.php'>Turkish</option>
            <option value='uk/info.configuration.php'>Ukrainian</option>
            <option value='zh/info.configuration.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="info.configuration" class="section">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>PHP Options/Info Configuration Options</strong></caption>
   
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
     <td><a href="info.configuration.php#ini.assert.active" class="link">assert.active</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>
      Deprecated as of PHP 8.3.0
     </td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.assert.bail" class="link">assert.bail</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>
      Deprecated as of PHP 8.3.0
     </td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.assert.warning" class="link">assert.warning</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>
      Deprecated as of PHP 8.3.0
     </td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.assert.callback" class="link">assert.callback</a></td>
     <td>NULL</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>
      Deprecated as of PHP 8.3.0
     </td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.assert.quiet-eval" class="link">assert.quiet_eval</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Removed as of PHP 8.0.0</td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.assert.exception" class="link">assert.exception</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>
      Prior to PHP 8.0.0, defaults to <code class="literal">&quot;0&quot;</code>.
      Deprecated as of PHP 8.3.0
     </td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.enable-dl" class="link">enable_dl</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td>This deprecated feature <em>will</em>
certainly be <em>removed</em> in the future.</td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.max-execution-time" class="link">max_execution_time</a></td>
     <td>&quot;30&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.max-input-time" class="link">max_input_time</a></td>
     <td>&quot;-1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.max-input-nesting-level" class="link">max_input_nesting_level</a></td>
     <td>&quot;64&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.max-input-vars" class="link">max_input_vars</a></td>
     <td>1000</td>
     <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.zend.enable-gc" class="link">zend.enable_gc</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.zend.max-allowed-stack-size" class="link">zend.max_allowed_stack_size</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td>Available as of PHP 8.3.0.</td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.zend.reserved-stack-size" class="link">zend.reserved_stack_size</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td>Available as of PHP 8.3.0.</td>
    </tr>

    <tr>
     <td><a href="info.configuration.php#ini.fiber.stack-size" class="link">fiber.stack_size</a></td>
     <td class="empty">&nbsp;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Available as of PHP 8.1.0.</td>
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
   
    <dt id="ini.assert.active">
     <code class="parameter">assert.active</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enable <span class="function"><a href="function.assert.php" class="function">assert()</a></span> evaluation.
      <a href="ini.core.php#ini.zend.assertions" class="link">zend.assertions</a> should be
      used instead to control the behaviour of <span class="function"><a href="function.assert.php" class="function">assert()</a></span>.
     </p>
     <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This feature has been
<em>DEPRECATED</em> as of PHP 8.3.0. Relying on this feature
is highly discouraged.</p></div>
    </dd>
   

   
    <dt id="ini.assert.bail">
     <code class="parameter">assert.bail</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Terminate script execution on failed assertions.
     </p>
     <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This feature has been
<em>DEPRECATED</em> as of PHP 8.3.0. Relying on this feature
is highly discouraged.</p></div>
    </dd>
   

   
    <dt id="ini.assert.warning">
     <code class="parameter">assert.warning</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Issue a PHP warning for each failed assertion.
     </p>
     <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This feature has been
<em>DEPRECATED</em> as of PHP 8.3.0. Relying on this feature
is highly discouraged.</p></div>
    </dd>
   

   
    <dt id="ini.assert.callback">
     <code class="parameter">assert.callback</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      User function to call on failed assertions.
     </p>
     <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This feature has been
<em>DEPRECATED</em> as of PHP 8.3.0. Relying on this feature
is highly discouraged.</p></div>
    </dd>
   

   
    <dt id="ini.assert.quiet-eval">
     <code class="parameter">assert.quiet_eval</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <div class="warning"><strong class="warning">Warning</strong>
<p class="simpara">This feature was <em>REMOVED</em> as of PHP 8.0.0.</p>
</div>
     <p class="para">
      Use the current setting of <span class="function"><a href="function.error-reporting.php" class="function">error_reporting()</a></span> during
      assertion expression evaluation. If enabled, no errors are shown
      (implicit error_reporting(0)) while evaluation. If disabled, errors are
      shown according to the settings of <span class="function"><a href="function.error-reporting.php" class="function">error_reporting()</a></span>
     </p>
    </dd>
   

   
    <dt id="ini.assert.exception">
     <code class="parameter">assert.exception</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Issue an <span class="classname"><a href="class.assertionerror.php" class="classname">AssertionError</a></span> exception for the failed
      assertion.
     </p>
     <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This feature has been
<em>DEPRECATED</em> as of PHP 8.3.0. Relying on this feature
is highly discouraged.</p></div>
    </dd>
   

   
    <dt id="ini.enable-dl">
      <code class="parameter">enable_dl</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      This directive allows to turn dynamic loading of
      PHP extensions with <span class="function"><a href="function.dl.php" class="function">dl()</a></span> on and
      off.
     </p>
     <p class="para">
      The main reason for turning dynamic loading off is
      security. With dynamic loading, it&#039;s possible to ignore all
      <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a> restrictions.
      The default is to allow dynamic loading.
     </p>
    </dd>
   

   
    <dt id="ini.max-execution-time">
     <code class="parameter">max_execution_time</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      This sets the maximum time in seconds a script is allowed to
      run before it is terminated by the parser.  This helps
      prevent poorly written scripts from tying up the server. The
      default setting is <code class="literal">30</code>.  When running PHP
      from the <a href="features.commandline.php" class="link">command
      line</a> the default setting is <code class="literal">0</code>.
     </p>
     <p class="para">
      On non Windows systems, the maximum execution time is not affected by system calls,
      stream operations etc.  Please see the
      <span class="function"><a href="function.set-time-limit.php" class="function">set_time_limit()</a></span> function for more
      details.
     </p>
     <p class="para">
      Your web server can have other timeout configurations that may 
      also interrupt PHP execution. Apache has a 
      <code class="literal">Timeout</code> directive and IIS has a CGI timeout 
      function. Both default to 300 seconds. See your web server 
      documentation for specific details.
     </p>
    </dd>
   

   
    <dt id="ini.max-input-time">
     <code class="parameter">max_input_time</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      This sets the maximum time in seconds a script is allowed to
      parse input data, like POST and GET. Timing begins at the moment PHP
      is invoked at the server and ends when execution begins.
      The default setting is <code class="literal">-1</code>, which means that 
      <a href="info.configuration.php#ini.max-execution-time" class="link">max_execution_time</a>
      is used instead. Set to <code class="literal">0</code> to allow unlimited time.
     </p>
    </dd>
   

   
    <dt id="ini.max-input-nesting-level">
     <code class="parameter">max_input_nesting_level</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Sets the max nesting depth of
      <a href="language.variables.external.php" class="link">input variables</a> (i.e.
      <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET</a></var>, <var class="varname"><a href="reserved.variables.post.php" class="classname">$_POST</a></var>.)
     </p>
    </dd>
   

   
    <dt id="ini.max-input-vars">
     <code class="parameter">max_input_vars</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      How many <a href="language.variables.external.php" class="link">input
      variables</a> may be accepted (limit is applied to 
      $_GET, $_POST and $_COOKIE superglobal separately). Use of this directive 
      mitigates the possibility of denial of service attacks which use hash collisions.
      If there are more input variables than specified by this directive,
      an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is issued, and further input
      variables are truncated from the request.
     </p>
    </dd>
   

   
    <dt id="ini.zend.enable-gc">
     <code class="parameter">zend.enable_gc</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enables or disables the circular reference collector.
     </p>
    </dd>
   

   
    <dt id="ini.zend.max-allowed-stack-size">
     <code class="parameter">zend.max_allowed_stack_size</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The maximum native stack space that the operating system allows the
      program to consume.
      Trying to consume more than the operating system allows
      typically results in a hard crash with no easily available debugging
      information.
      To make debugging easier, the engine throws an
      <span class="classname"><a href="class.error.php" class="classname">Error</a></span>
      before it happens (when the program uses more than
      <a href="info.configuration.php#ini.zend.max-allowed-stack-size" class="link">zend.max_allowed_stack_size</a>-<a href="info.configuration.php#ini.zend.reserved-stack-size" class="link">zend.reserved_stack_size</a>
      bytes of stack).
     </p>
     <p class="para">
      Recursion in user-defined code does not consume native stack space.
      However, internal functions and magic methods do.
      Very deep recursion involving these functions can cause the program to
      exhaust all available native stack space.
     </p>
     <p class="para">
      Possible values for this parameter are:
      <ul class="simplelist">
       <li>
        <code class="literal">0</code>:
        Auto-detect the maximum native stack space that the operating system
        allows the program to consume.
        This is the default.
        When detection is not possible, a known system default is used.
       </li>
       <li>
        <code class="literal">-1</code>: Disables stack size checking in the engine.
       </li>
       <li>
        Positive integer: A fixed size, in bytes.
        Setting this value too high has the same effect as disabling stack size
        checking.
       </li>
      </ul>
     </p>
     <p class="para">
      As the stack size of
      <a href="language.fibers.php" class="link">fibers</a>
      is determined by
      <a href="info.configuration.php#ini.fiber.stack-size" class="link">fiber.stack_size</a>,
      the value of this parameter is used instead of
      <a href="info.configuration.php#ini.zend.max-allowed-stack-size" class="link">zend.max_allowed_stack_size</a>
      when checking stack usage during the execution of a Fiber.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       This is not related to stack <em>buffer</em> overflows, and is not a security
       feature.
      </p>
     </p></blockquote>
    </dd>
   

   
    <dt id="ini.zend.reserved-stack-size">
     <code class="parameter">zend.reserved_stack_size</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The reserved stack size, in bytes.
      This is subtracted from the
      <a href="info.configuration.php#ini.zend.max-allowed-stack-size" class="link">max allowed stack size</a>,
      as a buffer, when checking the stack size.
     </p>
     <p class="para">
      Possible values for this parameter are:
      <ul class="simplelist">
       <li>
        <code class="literal">0</code>: Auto-detect a sensible size.
       </li>
       <li>
        Positive integer: A fixed size, in bytes.
       </li>
      </ul>
     </p>
    </dd>
   

   
    <dt id="ini.fiber.stack-size">
     <code class="parameter">fiber.stack_size</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The native stack size, in bytes, allocated for each
      <a href="language.fibers.php" class="link">Fiber</a>.
     </p>
     <p class="para">
      The default value is 1MiB on systems with a pointer size lower than
      8 bytes, or 2MiB otherwise.
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
        <a href="https://github.com/php/doc-en/blob/master/reference/info/ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finfo.configuration%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=info.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/info.configuration.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="info.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="info.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
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
