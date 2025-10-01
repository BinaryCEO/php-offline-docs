<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: List of php.ini directives - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ini.list.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ini.list.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ini.list.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ini.php">
 <link rel="prev" href="https://www.php.net/manual/en/ini.php">
 <link rel="next" href="https://www.php.net/manual/en/ini.sections.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ini.list.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ini.list.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ini.list.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ini.list.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ini.list.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ini.list.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ini.list.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ini.list.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ini.list.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ini.list.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ini.list.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="List of php.ini directives" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: List of php.ini directives - Manual" />
<meta name="twitter:description" content="List of php.ini directives" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: List of php.ini directives - Manual" />
<meta itemprop="description" content="List of php.ini directives" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="List of php.ini directives" />

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
        <a href="ini.sections.php">
          List of php.ini sections &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ini.php">
          &laquo; php.ini directives        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='ini.php'>php.ini directives</a></li>      </ul>
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
            <option value='en/ini.list.php' selected="selected">English</option>
            <option value='de/ini.list.php'>German</option>
            <option value='es/ini.list.php'>Spanish</option>
            <option value='fr/ini.list.php'>French</option>
            <option value='it/ini.list.php'>Italian</option>
            <option value='ja/ini.list.php'>Japanese</option>
            <option value='pt_BR/ini.list.php'>Brazilian Portuguese</option>
            <option value='ru/ini.list.php'>Russian</option>
            <option value='tr/ini.list.php'>Turkish</option>
            <option value='uk/ini.list.php'>Ukrainian</option>
            <option value='zh/ini.list.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ini.list" class="section">
  <h2 class="title">List of <var class="filename">php.ini</var> directives</h2>
  <p class="para">
   This list includes the <var class="filename">php.ini</var> directives that can be used to configure PHP.
  </p>
  <p class="para">
   The &quot;Changeable&quot; column shows the modes determining when and where a directive may be set.
   See the <a href="configuration.changes.modes.php" class="link">Changeable mode values</a> section for their definitions.
  </p>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Configuration options</strong></caption>
    
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
       <td><a href="filesystem.configuration.php#ini.allow-url-fopen" class="link">allow_url_fopen</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="filesystem.configuration.php#ini.allow-url-include" class="link">allow_url_include</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td>Deprecated as of PHP 7.4.0.</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.arg-separator.input" class="link">arg_separator.input</a></td>
       <td><code class="literal">&quot;&amp;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.arg-separator.output" class="link">arg_separator.output</a></td>
       <td><code class="literal">&quot;&amp;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.assert.active" class="link">assert.active</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.assert.bail" class="link">assert.bail</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.assert.callback" class="link">assert.callback</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.assert.exception" class="link">assert.exception</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.assert.quiet-eval" class="link">assert.quiet_eval</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td>Removed as of PHP 8.0.0</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.assert.warning" class="link">assert.warning</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.auto-append-file" class="link">auto_append_file</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="filesystem.configuration.php#ini.auto-detect-line-endings" class="link">auto_detect_line_endings</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.auto-globals-jit" class="link">auto_globals_jit</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.auto-prepend-file" class="link">auto_prepend_file</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
     <td><a href="bc.configuration.php#ini.bcmath.scale" class="link">bcmath.scale</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

      <tr>
       <td><a href="misc.configuration.php#ini.browscap" class="link">browscap</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.cgi.check-shebang-line" class="link">cgi.check_shebang_line</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.cgi.discard-path" class="link">cgi.discard_path</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.cgi.fix-pathinfo" class="link">cgi.fix_pathinfo</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.cgi.force-redirect" class="link">cgi.force_redirect</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.cgi.nph" class="link">cgi.nph</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.cgi.redirect-status-env" class="link">cgi.redirect_status_env</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.cgi.rfc2616-headers" class="link">cgi.rfc2616_headers</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="apache.configuration.php#ini.child-terminate" class="link">child_terminate</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
      <td><a href="readline.configuration.php#ini.cli.pager" class="link">cli.pager</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="readline.configuration.php#ini.cli.prompt" class="link">cli.prompt</a></td>
      <td>&quot;\\b \\&gt; &quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
        <td><a href="features.commandline.ini.php#ini.cli-server.color" class="link">cli_server.color</a></td>
        <td>&quot;0&quot;</td>
        <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
        <td class="empty">&nbsp;</td>
       </tr>

      <tr>
     <td><a href="com.configuration.php#ini.com.allow-dcom" class="link">com.allow_dcom</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="com.configuration.php#ini.com.autoregister-typelib" class="link">com.autoregister_typelib</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="com.configuration.php#ini.com.autoregister-verbose" class="link">com.autoregister_verbose</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="com.configuration.php#ini.com.autoregister-casesensitive" class="link">com.autoregister_casesensitive</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="com.configuration.php#ini.com.code-page" class="link">com.code_page</a></td>
     <td>&quot;&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="com.configuration.php#ini.com.dotnet-version" class="link">com.dotnet_version</a></td>
     <td>&quot;&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td>As of PHP 8.0.0</td>
    </tr>
<tr>
     <td><a href="com.configuration.php#ini.com.typelib-file" class="link">com.typelib_file</a></td>
     <td>&quot;&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

      <tr>
      <td><a href="curl.configuration.php#ini.curl.cainfo" class="link">curl.cainfo</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
      <td><a href="datetime.configuration.php#ini.date.default-latitude" class="link">date.default_latitude</a></td>
      <td>&quot;31.7667&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="datetime.configuration.php#ini.date.default-longitude" class="link">date.default_longitude</a></td>
      <td>&quot;35.2333&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="datetime.configuration.php#ini.date.sunrise-zenith" class="link">date.sunrise_zenith</a></td>
      <td>&quot;90.833333&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Prior to PHP 8.0.0, the default was &quot;90.583333&quot;</td>
     </tr>
<tr>
      <td><a href="datetime.configuration.php#ini.date.sunset-zenith" class="link">date.sunset_zenith</a></td>
      <td>&quot;90.833333&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Prior to PHP 8.0.0, the default was &quot;90.583333&quot;</td>
     </tr>
<tr>
      <td><a href="datetime.configuration.php#ini.date.timezone" class="link">date.timezone</a></td>
      <td>&quot;UTC&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>From PHP 8.2, a warning is emitted when setting this to an invalid
      value or an empty string.</td>
     </tr>

      <tr>
       <td>
        <a href="dba.configuration.php#ini.dba.default_handler" class="link">dba.default_handler</a>
       </td>
       <td>DBA_DEFAULT</td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td></td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.default-charset" class="link">default_charset</a></td>
       <td><code class="literal">&quot;UTF-8&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.input-encoding" class="link">input_encoding</a></td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.output-encoding" class="link">output_encoding</a></td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.internal-encoding" class="link">internal_encoding</a></td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.default-mimetype" class="link">default_mimetype</a></td>
       <td><code class="literal">&quot;text/html&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="filesystem.configuration.php#ini.default-socket-timeout" class="link">default_socket_timeout</a></td>
       <td><code class="literal">&quot;60&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.disable-classes" class="link">disable_classes</a></td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><var class="filename">php.ini</var> only</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.disable-functions" class="link">disable_functions</a></td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><var class="filename">php.ini</var> only</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.display-errors" class="link">display_errors</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.display-startup-errors" class="link">display_startup_errors</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td>
        Prior to PHP 8.0.0, the default value was <code class="literal">&quot;0&quot;</code>.
       </td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.docref-ext" class="link">docref_ext</a></td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.docref-root" class="link">docref_root</a></td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.doc-root" class="link">doc_root</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.enable-dl" class="link">enable_dl</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td>This deprecated feature <em>will</em>
certainly be <em>removed</em> in the future.</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.enable-post-data-reading" class="link">enable_post_data_reading</a></td>
       <td><code class="literal">&quot;On&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="apache.configuration.php#ini.engine" class="link">engine</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.error-append-string" class="link">error_append_string</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.error-log" class="link">error_log</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.error-log-mode" class="link">error_log_mode</a></td>
       <td><code class="literal">0o644</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td>Available as of PHP 8.2.0</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.error-prepend-string" class="link">error_prepend_string</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.error-reporting" class="link">error_reporting</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
     <td><a href="exif.configuration.php#ini.exif.encode-unicode" class="link">exif.encode_unicode</a></td>
     <td>&quot;ISO-8859-15&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="exif.configuration.php#ini.exif.decode-unicode-motorola" class="link">exif.decode_unicode_motorola</a></td>
     <td>&quot;UCS-2BE&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="exif.configuration.php#ini.exif.decode-unicode-intel" class="link">exif.decode_unicode_intel</a></td>
     <td>&quot;UCS-2LE&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="exif.configuration.php#ini.exif.encode-jis" class="link">exif.encode_jis</a></td>
     <td>&quot;&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="exif.configuration.php#ini.exif.decode-jis-motorola" class="link">exif.decode_jis_motorola</a></td>
     <td>&quot;JIS&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="exif.configuration.php#ini.exif.decode-jis-intel" class="link">exif.decode_jis_intel</a></td>
     <td>&quot;JIS&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

      <tr>
       <td><a href="ini.core.php#ini.exit-on-timeout" class="link">exit_on_timeout</a></td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
      <td><a href="expect.configuration.php#ini.expect.timeout" class="link">expect.timeout</a></td>
      <td>&quot;10&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="expect.configuration.php#ini.expect.loguser" class="link">expect.loguser</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="expect.configuration.php#ini.expect.logfile" class="link">expect.logfile</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="expect.configuration.php#ini.expect.match-max" class="link">expect.match_max</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
       <td><a href="ini.core.php#ini.expose-php" class="link">expose_php</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><var class="filename">php.ini</var> only</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.extension" class="link">extension</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><var class="filename">php.ini</var> only</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.extension-dir" class="link">extension_dir</a></td>
       <td><code class="literal">&quot;/path/to/php&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.fastcgi.impersonate" class="link">fastcgi.impersonate</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.fastcgi.logging" class="link">fastcgi.logging</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.file-uploads" class="link">file_uploads</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
      <td><a href="filter.configuration.php#ini.filter.default" class="link">filter.default</a></td>
      <td>&quot;unsafe_raw&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
      <td>Deprecated as of PHP 8.1.0.</td>
     </tr>
<tr>
      <td><a href="filter.configuration.php#ini.filter.default-flags" class="link">filter.default_flags</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
       <td><a href="filesystem.configuration.php#ini.from" class="link">from</a></td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
      <td><a href="image.configuration.php#ini.gd.jpeg-ignore-warning" class="link">gd.jpeg_ignore_warning</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
            <td><a href="geoip.configuration.php#ini.geoip.custom-directory" class="link">geoip.custom_directory</a></td>
            <td>&quot;&quot;</td>
            <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
            <td></td>
          </tr>

      <tr>
       <td>hard_timeout</td>
       <td><code class="literal">&quot;2&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td>Available as of PHP 7.1.0.</td>
      </tr>

      <tr>
       <td><a href="misc.configuration.php#ini.syntax-highlighting" class="link">highlight.comment</a></td>
       <td><code class="literal">&quot;#FF8000&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="misc.configuration.php#ini.syntax-highlighting" class="link">highlight.default</a></td>
       <td><code class="literal">&quot;#0000BB&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="misc.configuration.php#ini.syntax-highlighting" class="link">highlight.html</a></td>
       <td><code class="literal">&quot;#000000&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="misc.configuration.php#ini.syntax-highlighting" class="link">highlight.keyword</a></td>
       <td><code class="literal">&quot;#007700&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="misc.configuration.php#ini.syntax-highlighting" class="link">highlight.string</a></td>
       <td><code class="literal">&quot;#DD0000&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.html-errors" class="link">html_errors</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
     <td><a href="ibase.configuration.php#ini.ibase.allow-persistent" class="link">ibase.allow_persistent</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="ibase.configuration.php#ini.ibase.max-persistent" class="link">ibase.max_persistent</a></td>
     <td>&quot;-1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="ibase.configuration.php#ini.ibase.max-links" class="link">ibase.max_links</a></td>
     <td>&quot;-1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="ibase.configuration.php#ini.ibase.default-db" class="link">ibase.default_db</a></td>
     <td>NULL</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="ibase.configuration.php#ini.ibase.default-user" class="link">ibase.default_user</a></td>
     <td>NULL</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="ibase.configuration.php#ini.ibase.default-password" class="link">ibase.default_password</a></td>
     <td>NULL</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="ibase.configuration.php#ini.ibase.default-charset" class="link">ibase.default_charset</a></td>
     <td>NULL</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="ibase.configuration.php#ini.ibase.timestampformat" class="link">ibase.timestampformat</a></td>
     <td>&quot;%Y-%m-%d %H:%M:%S&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="ibase.configuration.php#ini.ibase.dateformat" class="link">ibase.dateformat</a></td>
     <td>&quot;%Y-%m-%d&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="ibase.configuration.php#ini.ibase.timeformat" class="link">ibase.timeformat</a></td>
     <td>&quot;%H:%M:%S&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

      <tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.binmode" class="link">ibm_db2.binmode</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-all-pconnect" class="link">ibm_db2.i5_all_pconnect</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.6.5.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-allow-commit" class="link">ibm_db2.i5_allow_commit</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.4.9.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-blank-userid" class="link">ibm_db2.i5_blank_userid</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.9.7.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-char-trim" class="link">ibm_db2.i5_char_trim</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 2.1.0.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-dbcs-alloc" class="link">ibm_db2.i5_dbcs_alloc</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.5.0.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-guard-profile" class="link">ibm_db2.i5_guard_profile</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.9.7.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-ignore-userid" class="link">ibm_db2.i5_ignore_userid</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.8.0.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-job-sort" class="link">ibm_db2.i5_job_sort</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.8.4.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-log-verbose" class="link">ibm_db2.i5_log_verbose</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.9.7.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-max-pconnect" class="link">ibm_db2.i5_max_pconnect</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.9.7.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-override-ccsid" class="link">ibm_db2.i5_override_ccsid</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.9.7.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-servermode-subsystem" class="link">ibm_db2.i5_servermode_subsystem</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.9.7.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.i5-sys-naming" class="link">ibm_db2.i5_sys_naming</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.9.7.</td>
     </tr>
<tr>
      <td><a href="ibm-db2.configuration.php#ini.ibm-db2.instance-name" class="link">ibm_db2.instance_name</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of ibm_db2 1.0.2.</td>
     </tr>

      <tr>
      <td><a href="iconv.configuration.php#ini.iconv.input-encoding" class="link">iconv.input_encoding</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Deprecated in PHP 5.6.0.</td>
     </tr>
<tr>
      <td><a href="iconv.configuration.php#ini.iconv.output-encoding" class="link">iconv.output_encoding</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Deprecated in PHP 5.6.0.</td>
     </tr>
<tr>
      <td><a href="iconv.configuration.php#ini.iconv.internal-encoding" class="link">iconv.internal_encoding</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Deprecated in PHP 5.6.0.</td>
     </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.ignore-repeated-errors" class="link">ignore_repeated_errors</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.ignore-repeated-source" class="link">ignore_repeated_source</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="misc.configuration.php#ini.ignore-user-abort" class="link">ignore_user_abort</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="outcontrol.configuration.php#ini.implicit-flush" class="link">implicit_flush</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.include-path" class="link">include_path</a></td>
       <td><code class="literal">&quot;.:/path/to/php/pear&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
      <td><a href="intl.configuration.php#ini.intl.default-locale" class="link">intl.default_locale</a></td>
      <td class="empty">&nbsp;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="intl.configuration.php#ini.intl.error-level" class="link">intl.error_level</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="intl.configuration.php#ini.intl.use-exceptions" class="link">intl.use_exceptions</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available since PECL 3.0.0a1</td>
     </tr>

      <tr>
       <td><a href="apache.configuration.php#ini.last-modified" class="link">last_modified</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
     <td><a href="ldap.configuration.php#ini.ldap.max_links" class="link">ldap.max_links</a></td>
     <td>&quot;-1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.log-errors" class="link">log_errors</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.log-errors-max-len" class="link">log_errors_max_len</a></td>
       <td><code class="literal">&quot;1024&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="mail.configuration.php#ini.mail.add-x-header" class="link">mail.add_x_header</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td>mail.force_extra_parameters</td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="mail.configuration.php#ini.mail.log" class="link">mail.log</a></td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.max-execution-time" class="link">max_execution_time</a></td>
       <td><code class="literal">&quot;30&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.max-input-nesting-level" class="link">max_input_nesting_level</a></td>
       <td><code class="literal">&quot;64&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.max-input-vars" class="link">max_input_vars</a></td>
       <td><code class="literal">1000</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.max-input-time" class="link">max_input_time</a></td>
       <td><code class="literal">&quot;-1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.language" class="link">mbstring.language</a></td>
      <td>&quot;neutral&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.detect-order" class="link">mbstring.detect_order</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.http-input" class="link">mbstring.http_input</a></td>
      <td>&quot;pass&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Deprecated</td>
     </tr>
<tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.http-output" class="link">mbstring.http_output</a></td>
      <td>&quot;pass&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Deprecated</td>
     </tr>
<tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.internal-encoding" class="link">mbstring.internal_encoding</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Deprecated</td>
     </tr>
<tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.substitute-character" class="link">mbstring.substitute_character</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.func-overload" class="link">mbstring.func_overload</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>
       Deprecated as of PHP 7.2.0; removed as of PHP 8.0.0.
      </td>
     </tr>
<tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.encoding-translation" class="link">mbstring.encoding_translation</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.http-output-conv-mimetypes" class="link">mbstring.http_output_conv_mimetypes</a></td>
      <td>&quot;^(text/|application/xhtml\+xml)&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.strict-detection" class="link">mbstring.strict_detection</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.regex-retry-limit" class="link">mbstring.regex_retry_limit</a></td>
      <td>&quot;1000000&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 7.4.0.</td>
     </tr>
<tr>
      <td><a href="mbstring.configuration.php#ini.mbstring.regex-stack-limit" class="link">mbstring.regex_stack_limit</a></td>
      <td>&quot;100000&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 7.3.5.</td>
     </tr>

      <tr>
     <td><a href="mcrypt.configuration.php#ini.mcrypt.algorithms-dir" class="link">mcrypt.algorithms_dir</a></td>
     <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="mcrypt.configuration.php#ini.mcrypt.modes-dir" class="link">mcrypt.modes_dir</a></td>
     <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

      <tr>
      <td><a href="memcache.ini.php#ini.memcache.allow-failover" class="link">memcache.allow_failover</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available since memcache 2.0.2.</td>
     </tr>
<tr>
      <td><a href="memcache.ini.php#ini.memcache.max-failover-attempts" class="link">memcache.max_failover_attempts</a></td>
      <td>&quot;20&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available since memcache 2.1.0.</td>
     </tr>
<tr>
      <td><a href="memcache.ini.php#ini.memcache.chunk-size" class="link">memcache.chunk_size</a></td>
      <td>&quot;8192&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available since memcache 2.0.2.</td>
     </tr>
<tr>
      <td><a href="memcache.ini.php#ini.memcache.default-port" class="link">memcache.default_port</a></td>
      <td>&quot;11211&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available since memcache 2.0.2.</td>
     </tr>
<tr>
      <td><a href="memcache.ini.php#ini.memcache.hash-strategy" class="link">memcache.hash_strategy</a></td>
      <td>&quot;standard&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available since memcache 2.2.0.</td>
     </tr>
<tr>
      <td><a href="memcache.ini.php#ini.memcache.hash-function" class="link">memcache.hash_function</a></td>
      <td>&quot;crc32&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available since memcache 2.2.0.</td>
     </tr>
<tr>
      <td><a href="memcache.ini.php#ini.memcache.protocol" class="link">memcache.protocol</a></td>
      <td>ascii</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Supported since memcache 3.0.0</td>
     </tr>
<tr>
      <td><a href="memcache.ini.php#ini.memcache.redundancy" class="link">memcache.redundancy</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Supported since memcache 3.0.0</td>
     </tr>
<tr>
      <td><a href="memcache.ini.php#ini.memcache.session-redundancy" class="link">memcache.session_redundancy</a></td>
      <td>2</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Supported since memcache 3.0.0</td>
     </tr>
<tr>
      <td><a href="memcache.ini.php#ini.memcache.compress-threshold" class="link">memcache.compress_threshold</a></td>
      <td>20000</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Supported since memcache 3.0.3</td>
     </tr>
<tr>
      <td><a href="memcache.ini.php#ini.memcache.lock-timeout" class="link">memcache.lock_timeout</a></td>
      <td>15</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Supported since memcache 3.0.4</td>
     </tr>

      <tr>
       <td><a href="ini.core.php#ini.memory-limit" class="link">memory_limit</a></td>
       <td><code class="literal">&quot;128M&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
      <td><a href="mysql.configuration.php#ini.mysql.allow-local-infile" class="link">mysql.allow_local_infile</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysql.configuration.php#ini.mysql.allow-persistent" class="link">mysql.allow_persistent</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysql.configuration.php#ini.mysql.max-persistent" class="link">mysql.max_persistent</a></td>
      <td>&quot;-1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysql.configuration.php#ini.mysql.max-links" class="link">mysql.max_links</a></td>
      <td>&quot;-1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysql.configuration.php#ini.mysql.trace-mode" class="link">mysql.trace_mode</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysql.configuration.php#ini.mysql.default-port" class="link">mysql.default_port</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysql.configuration.php#ini.mysql.default-socket" class="link">mysql.default_socket</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysql.configuration.php#ini.mysql.default-host" class="link">mysql.default_host</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysql.configuration.php#ini.mysql.default-user" class="link">mysql.default_user</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysql.configuration.php#ini.mysql.default-password" class="link">mysql.default_password</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysql.configuration.php#ini.mysql.connect-timeout" class="link">mysql.connect_timeout</a></td>
      <td>&quot;60&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
      <td><a href="mysqli.configuration.php#ini.mysqli.allow-local-infile" class="link">mysqli.allow_local_infile</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Before PHP 7.2.16 and 7.3.3 the default was &quot;1&quot;.</td>
     </tr>
<tr>
      <td><a href="mysqli.configuration.php#ini.mysqli.local-infile-directory" class="link">mysqli.local_infile_directory</a></td>
      <td class="empty">&nbsp;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.1.0.</td>
     </tr>
<tr>
      <td><a href="mysqli.configuration.php#ini.mysqli.allow-persistent" class="link">mysqli.allow_persistent</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqli.configuration.php#ini.mysqli.max-persistent" class="link">mysqli.max_persistent</a></td>
      <td>&quot;-1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqli.configuration.php#ini.mysqli.max-links" class="link">mysqli.max_links</a></td>
      <td>&quot;-1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqli.configuration.php#ini.mysqli.default-port" class="link">mysqli.default_port</a></td>
      <td>&quot;3306&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqli.configuration.php#ini.mysqli.default-socket" class="link">mysqli.default_socket</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqli.configuration.php#ini.mysqli.default-host" class="link">mysqli.default_host</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqli.configuration.php#ini.mysqli.default-user" class="link">mysqli.default_user</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqli.configuration.php#ini.mysqli.default-pw" class="link">mysqli.default_pw</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqli.configuration.php#ini.mysqli.reconnect" class="link">mysqli.reconnect</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Removed as of PHP 8.2.0</td>
     </tr>
<tr>
      <td><a href="mysqli.configuration.php#ini.mysqli.rollback-on-cached-plink" class="link">mysqli.rollback_on_cached_plink</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
      <td><a href="mysqlnd.config.php#ini.mysqlnd.collect-statistics" class="link">mysqlnd.collect_statistics</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqlnd.config.php#ini.mysqlnd.collect-memory-statistics" class="link">mysqlnd.collect_memory_statistics</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqlnd.config.php#ini.mysqlnd.debug" class="link">mysqlnd.debug</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqlnd.config.php#ini.mysqlnd.log-mask" class="link">mysqlnd.log_mask</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqlnd.config.php#ini.mysqlnd.mempool-default-size" class="link">mysqlnd.mempool_default_size</a></td>
      <td>16000</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqlnd.config.php#ini.mysqlnd.net-read-timeout" class="link">mysqlnd.net_read_timeout</a></td>
      <td>&quot;86400&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>
       Before PHP 7.2.0 the default value was &quot;31536000&quot;
       and the changeability was <strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong>
      </td>
     </tr>
<tr>
      <td><a href="mysqlnd.config.php#ini.mysqlnd.net-cmd-buffer-size" class="link">mysqlnd.net_cmd_buffer_size</a></td>
      <td>&quot;4096&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqlnd.config.php#ini.mysqlnd.net-read-buffer-size" class="link">mysqlnd.net_read_buffer_size</a></td>
      <td>&quot;32768&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="mysqlnd.config.php#ini.mysqlnd.sha256-server-public-key" class="link">mysqlnd.sha256_server_public_key</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
       <td><a href="mysqlnd.config.php#ini.mysqlnd.trace-alloc" class="link">mysqlnd.trace_alloc</a></td>
       <td>&quot;&quot;</td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>
<tr>
      <td><a href="mysqlnd.config.php#ini.mysqlnd.fetch_data_copy" class="link">mysqlnd.fetch_data_copy</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Removed as of PHP 8.1.0</td>
     </tr>

      <tr>
         <td><a href="oci8.configuration.php#ini.oci8.connection-class" class="link">oci8.connection_class</a></td>
         <td>&quot;&quot;</td>
         <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
         <td class="empty">&nbsp;</td>
        </tr>
<tr>
         <td><a href="oci8.configuration.php#ini.oci8.default-prefetch" class="link">oci8.default_prefetch</a></td>
         <td>&quot;100&quot;</td>
         <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
         <td class="empty">&nbsp;</td>
        </tr>
<tr>
         <td><a href="oci8.configuration.php#ini.oci8.events" class="link">oci8.events</a></td>
         <td>Off</td>
         <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
         <td class="empty">&nbsp;</td>
        </tr>
<tr>
         <td><a href="oci8.configuration.php#ini.oci8.max-persistent" class="link">oci8.max_persistent</a></td>
         <td>&quot;-1&quot;</td>
         <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
         <td class="empty">&nbsp;</td>
        </tr>
<tr>
         <td><a href="oci8.configuration.php#ini.oci8.old-oci-close-semantics" class="link">oci8.old_oci_close_semantics</a></td>
         <td>Off</td>
         <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
         <td>Deprecated as of PHP 8.1.0.</td>
        </tr>
<tr>
         <td><a href="oci8.configuration.php#ini.oci8.persistent-timeout" class="link">oci8.persistent_timeout</a></td>
         <td>&quot;-1&quot;</td>
         <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
         <td class="empty">&nbsp;</td>
        </tr>
<tr>
         <td><a href="oci8.configuration.php#ini.oci8.ping-interval" class="link">oci8.ping_interval</a></td>
         <td>&quot;60&quot;</td>
         <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
         <td class="empty">&nbsp;</td>
        </tr>
<tr>
         <td><a href="oci8.configuration.php#ini.oci8.prefetch-lob-size" class="link">oci8.prefetch_lob_size</a></td>
         <td>&quot;0&quot;</td>
         <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
         <td>Available since PECL OCI8 3.2.</td>
        </tr>
<tr>
         <td><a href="oci8.configuration.php#ini.oci8.privileged-connect" class="link">oci8.privileged_connect</a></td>
         <td>Off</td>
         <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
         <td class="empty">&nbsp;</td>
        </tr>
<tr>
         <td><a href="oci8.configuration.php#ini.oci8.statement-cache-size" class="link">oci8.statement_cache_size</a></td>
         <td>&quot;20&quot;</td>
         <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
         <td class="empty">&nbsp;</td>
        </tr>

      <tr>
      <td><a href="odbc.configuration.php#ini.uodbc.allow-persistent" class="link">odbc.allow_persistent</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="odbc.configuration.php#ini.uodbc.check-persistent" class="link">odbc.check_persistent</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="odbc.configuration.php#ini.uodbc.max-persistent" class="link">odbc.max_persistent</a></td>
      <td>&quot;-1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="odbc.configuration.php#ini.uodbc.max-links" class="link">odbc.max_links</a></td>
      <td>&quot;-1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="odbc.configuration.php#ini.uodbc.defaultlrl" class="link">odbc.defaultlrl</a></td>
      <td>&quot;4096&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="odbc.configuration.php#ini.uodbc.defaultbinmode" class="link">odbc.defaultbinmode</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="odbc.configuration.php#ini.uodbc.defaultcursortype" class="link">odbc.default_cursortype</a></td>
      <td>&quot;3&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
      <td><a href="opcache.configuration.php#ini.opcache.enable" class="link">opcache.enable</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.enable-cli" class="link">opcache.enable_cli</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Between PHP 7.1.2 and 7.1.6 inclusive, the default was <code class="literal">1</code></td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.memory-consumption" class="link">opcache.memory_consumption</a></td>
      <td>128</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.interned-strings-buffer" class="link">opcache.interned_strings_buffer</a></td>
      <td>8</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.max-accelerated-files" class="link">opcache.max_accelerated_files</a></td>
      <td>10000</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.max-wasted-percentage" class="link">opcache.max_wasted_percentage</a></td>
      <td>5</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.use-cwd" class="link">opcache.use_cwd</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.validate-timestamps" class="link">opcache.validate_timestamps</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.revalidate-freq" class="link">opcache.revalidate_freq</a></td>
      <td>2</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.revalidate-path" class="link">opcache.revalidate_path</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.save-comments" class="link">opcache.save_comments</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.fast-shutdown" class="link">opcache.fast_shutdown</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Removed in PHP 7.2.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.enable-file-override" class="link">opcache.enable_file_override</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.optimization-level" class="link">opcache.optimization_level</a></td>
      <td>0x7FFEBFFF</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Changed from <code class="literal">0x7FFFBFFF</code> in PHP 7.3.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.inherited-hack" class="link">opcache.inherited_hack</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Removed in PHP 7.3.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.dups-fix" class="link">opcache.dups_fix</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.blacklist-filename" class="link">opcache.blacklist_filename</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.max-file-size" class="link">opcache.max_file_size</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.consistency-checks" class="link">opcache.consistency_checks</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Disabled as of 8.1.18 and 8.2.5. Removed as of PHP 8.3.0.</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.force-restart-timeout" class="link">opcache.force_restart_timeout</a></td>
      <td>180</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.error-log" class="link">opcache.error_log</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.log-verbosity-level" class="link">opcache.log_verbosity_level</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.record-warnings" class="link">opcache.record_warnings</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.preferred-memory-model" class="link">opcache.preferred_memory_model</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.protect-memory" class="link">opcache.protect_memory</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.mmap-base" class="link">opcache.mmap_base</a></td>
      <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Windows only.</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.restrict-api" class="link">opcache.restrict_api</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.file_update_protection" class="link">opcache.file_update_protection</a></td>
      <td>2</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.huge_code_pages" class="link">opcache.huge_code_pages</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.lockfile_path" class="link">opcache.lockfile_path</a></td>
      <td>&quot;/tmp&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.opt_debug_level" class="link">opcache.opt_debug_level</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 7.1.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.file-cache" class="link">opcache.file_cache</a></td>
      <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.file-cache-only" class="link">opcache.file_cache_only</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.file-cache-consistency-checks" class="link">opcache.file_cache_consistency_checks</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.file-cache-fallback" class="link">opcache.file_cache_fallback</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Windows only.</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.validate-permission" class="link">opcache.validate_permission</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 7.0.14</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.validate-root" class="link">opcache.validate_root</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 7.0.14</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.preload" class="link">opcache.preload</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 7.4.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.preload-user" class="link">opcache.preload_user</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 7.4.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.cache-id" class="link">opcache.cache_id</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Windows only. Available as of PHP 7.4.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit" class="link">opcache.jit</a></td>
      <td>&quot;tracing&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-buffer-size" class="link">opcache.jit_buffer_size</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-debug" class="link">opcache.jit_debug</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-bisect-limit" class="link">opcache.jit_bisect_limit</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-prof-threshold" class="link">opcache.jit_prof_threshold</a></td>
      <td>0.005</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-root-traces" class="link">opcache.jit_max_root_traces</a></td>
      <td>1024</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-side-traces" class="link">opcache.jit_max_side_traces</a></td>
      <td>128</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-exit-counters" class="link">opcache.jit_max_exit_counters</a></td>
      <td>8192</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-hot-loop" class="link">opcache.jit_hot_loop</a></td>
      <td>64</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-hot-func" class="link">opcache.jit_hot_func</a></td>
      <td>127</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-hot-return" class="link">opcache.jit_hot_return</a></td>
      <td>8</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-hot-side-exit" class="link">opcache.jit_hot_side_exit</a></td>
      <td>8</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-blacklist-root-trace" class="link">opcache.jit_blacklist_root_trace</a></td>
      <td>16</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-blacklist-side-trace" class="link">opcache.jit_blacklist_side_trace</a></td>
      <td>8</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-loop-unrolls" class="link">opcache.jit_max_loop_unrolls</a></td>
      <td>8</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-recursive-calls" class="link">opcache.jit_max_recursive_calls</a></td>
      <td>2</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-recursive-return" class="link">opcache.jit_max_recursive_returns</a></td>
      <td>2</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>
<tr>
      <td><a href="opcache.configuration.php#ini.opcache.jit-max-polymorphic-calls" class="link">opcache.jit_max_polymorphic_calls</a></td>
      <td>2</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Available as of PHP 8.0.0</td>
     </tr>

      <tr>
       <td><a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="outcontrol.configuration.php#ini.output-buffering" class="link">output_buffering</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="outcontrol.configuration.php#ini.output-handler" class="link">output_handler</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
      <td><a href="pcre.configuration.php#ini.pcre.backtrack-limit" class="link">pcre.backtrack_limit</a></td>
      <td>&quot;1000000&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="pcre.configuration.php#ini.pcre.recursion-limit" class="link">pcre.recursion_limit</a></td>
      <td>&quot;100000&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="pcre.configuration.php#ini.pcre.jit" class="link">pcre.jit</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
      <td><a href="pdo.configuration.php#ini.pdo.dsn" class="link">pdo.dsn.*</a></td>
      <td class="empty">&nbsp;</td>
      <td><var class="filename">php.ini</var> only</td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
      <td><a href="ref.pdo-odbc.php#ini.pdo-odbc.connection-pooling" class="link">pdo_odbc.connection_pooling</a></td>
      <td>&quot;strict&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="ref.pdo-odbc.php#ini.pdo-odbc.db2-instance-name" class="link">pdo_odbc.db2_instance_name</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>This deprecated feature <em>will</em>
certainly be <em>removed</em> in the future.</td>
     </tr>

      <tr>
     <td><a href="pgsql.configuration.php#ini.pgsql.allow-persistent" class="link">pgsql.allow_persistent</a></td>
     <td>&quot;1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="pgsql.configuration.php#ini.pgsql.max-persistent" class="link">pgsql.max_persistent</a></td>
     <td>&quot;-1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="pgsql.configuration.php#ini.pgsql.max-links" class="link">pgsql.max_links</a></td>
     <td>&quot;-1&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="pgsql.configuration.php#ini.pgsql.auto-reset-persistent" class="link">pgsql.auto_reset_persistent</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="pgsql.configuration.php#ini.pgsql.ignore-notice" class="link">pgsql.ignore_notice</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="pgsql.configuration.php#ini.pgsql.log-notice" class="link">pgsql.log_notice</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

      <tr>
      <td><a href="phar.configuration.php#ini.phar.readonly" class="link">phar.readonly</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="phar.configuration.php#ini.phar.require-hash" class="link">phar.require_hash</a></td>
      <td>&quot;1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="phar.configuration.php#ini.phar.cache-list" class="link">phar.cache_list</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
       <td><a href="ini.core.php#ini.post-max-size" class="link">post_max_size</a></td>
       <td><code class="literal">&quot;8M&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.precision" class="link">precision</a></td>
       <td><code class="literal">&quot;14&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.realpath-cache-size" class="link">realpath_cache_size</a></td>
       <td><code class="literal">&quot;16K&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.realpath-cache-ttl" class="link">realpath_cache_ttl</a></td>
       <td><code class="literal">&quot;120&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.register-argc-argv" class="link">register_argc_argv</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.report-memleaks" class="link">report_memleaks</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td>report_zend_debug</td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.request-order" class="link">request_order</a></td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
      <td><a href="runkit7.configuration.php#ini.runkit7.superglobal" class="link">runkit.superglobal</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="runkit7.configuration.php#ini.runkit7.internal-override" class="link">runkit.internal_override</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
       <td><a href="mail.configuration.php#ini.sendmail-from" class="link">sendmail_from</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="mail.configuration.php#ini.sendmail-path" class="link">sendmail_path</a></td>
       <td><code class="literal">&quot;/usr/sbin/sendmail -t -i&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.serialize-precision" class="link">serialize_precision</a></td>
       <td><code class="literal">&quot;-1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td>
        Prior to PHP 7.1.0, the default value was <code class="literal">17</code>.
       </td>
      </tr>

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

      <tr>
       <td><a href="ini.core.php#ini.short-open-tag" class="link">short_open_tag</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="mail.configuration.php#ini.smtp" class="link">SMTP</a></td>
       <td><code class="literal">&quot;localhost&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="mail.configuration.php#ini.smtp-port" class="link">smtp_port</a></td>
       <td><code class="literal">&quot;25&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
      <td><a href="soap.configuration.php#ini.soap.wsdl-cache-enabled" class="link">soap.wsdl_cache_enabled</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>
<tr>
      <td><a href="soap.configuration.php#ini.soap.wsdl-cache-dir" class="link">soap.wsdl_cache_dir</a></td>
      <td>/tmp</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>
<tr>
      <td><a href="soap.configuration.php#ini.soap.wsdl-cache-ttl" class="link">soap.wsdl_cache_ttl</a></td>
      <td>86400</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>
<tr>
      <td><a href="soap.configuration.php#ini.soap.wsdl-cache" class="link">soap.wsdl_cache</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>
<tr>
      <td><a href="soap.configuration.php#ini.soap.wsdl-cache-limit" class="link">soap.wsdl_cache_limit</a></td>
      <td>5</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td></td>
     </tr>

      <tr>
       <td><a href="ini.core.php#ini.sql.safe-mode" class="link">sql.safe_mode</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td>Removed as of PHP 7.2.0</td>
      </tr>

      <tr>
      <td><a href="sqlite3.configuration.php#ini.sqlite3.extension-dir" class="link">sqlite3.extension_dir</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="sqlite3.configuration.php#ini.sqlite3.defensive" class="link">sqlite3.defensive</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-user">INI_USER</a></code></strong></td>
      <td>
       Available as of PHP 7.2.17 and 7.3.4 for libsqlite ≥ 3.26.0.
       Prior to PHP 8.2.0 this setting was changeable only as
       <strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong>.
      </td>
     </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.syslog.facility" class="link">syslog.facility</a></td>
       <td><code class="literal">&quot;LOG_USER&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td>Available as of PHP 7.3.0.</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.syslog.filter" class="link">syslog.filter</a></td>
       <td><code class="literal">&quot;no-ctrl&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td>Available as of PHP 7.3.0.</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.syslog.ident" class="link">syslog.ident</a></td>
       <td><code class="literal">&quot;php&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td>Available as of PHP 7.3.0.</td>
      </tr>

      <tr>
       <td>sys_temp_dir</td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
     <td><a href="sem.configuration.php#ini.sysvshm.init-mem" class="link">sysvshm.init_mem</a></td>
     <td>10000</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

      <tr>
      <td><a href="tidy.configuration.php#ini.tidy.default-config" class="link">tidy.default_config</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="tidy.configuration.php#ini.tidy.clean-output" class="link">tidy.clean_output</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-user">INI_USER</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.track-errors" class="link">track_errors</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td>Deprecated as of PHP 7.2.0, removed as of PHP 8.0.0</td>
      </tr>

      <tr>
     <td><a href="var.configuration.php#ini.unserialize-callback-func" class="link">unserialize_callback_func</a></td>
     <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>
<tr>
     <td><a href="var.configuration.php#ini.unserialize-max-depth" class="link">unserialize_max_depth</a></td>
     <td>&quot;4096&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td>Available as of PHP 7.4.0.</td>
    </tr>

      <tr>
       <td>uploadprogress.file.filename_template</td>
       <td><code class="literal">&quot;/tmp/upt_%s.txt&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.upload-max-filesize" class="link">upload_max_filesize</a></td>
       <td><code class="literal">&quot;2M&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.max-file-uploads" class="link">max_file_uploads</a></td>
       <td><code class="literal">20</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.upload-tmp-dir" class="link">upload_tmp_dir</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="outcontrol.configuration.php#ini.url-rewriter.hosts" class="link">url_rewriter.hosts</a></td>
       <td><code class="literal">&quot;&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td>Available as of PHP 7.1.0.</td>
      </tr>

      <tr>
       <td><a href="outcontrol.configuration.php#ini.url-rewriter.tags" class="link">url_rewriter.tags</a></td>
       <td><code class="literal">&quot;form=&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td>
        Prior to PHP 7.1.0, the default value was
        <code class="literal">&quot;a=href,area=href,frame=src,form=,fieldset=&quot;</code>.
       </td>
      </tr>

      <tr>
       <td><a href="filesystem.configuration.php#ini.user-agent" class="link">user_agent</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.user-dir" class="link">user_dir</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.user-ini.cache-ttl" class="link">user_ini.cache_ttl</a></td>
       <td><code class="literal">&quot;300&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.user-ini.filename" class="link">user_ini.filename</a></td>
       <td><code class="literal">&quot;.user.ini&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="uopz.configuration.php#ini.uopz.disable" class="link">uopz.disable</a></td>
       <td>&quot;0&quot;</td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td>Available as of uopz 5.0.2</td>
      </tr>
<tr>
       <td><a href="uopz.configuration.php#ini.uopz.exit" class="link">uopz.exit</a></td>
       <td>&quot;0&quot;</td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td>Available as of uopz 6.0.1</td>
      </tr>
<tr>
       <td><a href="uopz.configuration.php#ini.uopz.overloads" class="link">uopz.overloads</a></td>
       <td>&quot;1&quot;</td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td>Available as of uopz 2.0.2. Removed as of uopz 5.0.0.</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.variables-order" class="link">variables_order</a></td>
       <td><code class="literal">&quot;EGPCS&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.windows-show-crt-warning" class="link">windows.show_crt_warning</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="apache.configuration.php#ini.xbithack" class="link">xbithack</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.xmlrpc-errors" class="link">xmlrpc_errors</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="errorfunc.configuration.php#ini.xmlrpc-error-number" class="link">xmlrpc_error_number</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td>yaz.keepalive</td>
       <td><code class="literal">&quot;120&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td>yaz.log_mask</td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td>Available as of yaz 1.0.3.</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.zend.assertions" class="link">zend.assertions</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.zend.detect-unicode" class="link">zend.detect_unicode</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.zend.enable-gc" class="link">zend.enable_gc</a></td>
       <td><code class="literal">&quot;1&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
      <td><a href="info.configuration.php#ini.zend.max-allowed-stack-size" class="link">zend.max_allowed_stack_size</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td>Available as of PHP 8.3.0</td>
      </tr>

      <tr>
      <td><a href="info.configuration.php#ini.fiber.stack-size" class="link">fiber.stack_size</a></td>
       <td class="empty">&nbsp;</td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td>Available as of PHP 8.1.0</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.zend.multibyte" class="link">zend.multibyte</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="info.configuration.php#ini.zend.reserved-stack-size" class="link">zend.reserved_stack_size</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td>Available as of PHP 8.3.0</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.zend.script-encoding" class="link">zend.script_encoding</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.zend.signal-check" class="link">zend.signal_check</a></td>
       <td><code class="literal">&quot;0&quot;</code></td>
       <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
       <td><a href="ini.core.php#ini.zend-extension" class="link">zend_extension</a></td>
       <td><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></td>
       <td><var class="filename">php.ini</var> only</td>
       <td class="empty">&nbsp;</td>
      </tr>

      <tr>
      <td><a href="zlib.configuration.php#ini.zlib.output-compression" class="link">zlib.output_compression</a></td>
      <td>&quot;0&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="zlib.configuration.php#ini.zlib.output-compression-level" class="link">zlib.output_compression_level</a></td>
      <td>&quot;-1&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>
<tr>
      <td><a href="zlib.configuration.php#ini.zlib.output-handler" class="link">zlib.output_handler</a></td>
      <td>&quot;&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     </tbody>
    
   </table>

  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/ini.list.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fini.list%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ini.list&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ini.list.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ini.php">php.ini directives</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="ini.list.php" title="List of php.ini directives">List of php.ini directives</a>
                        </li>
                                                <li class="">
                            <a href="ini.sections.php" title="List of php.ini sections">List of php.ini sections</a>
                        </li>
                                                <li class="">
                            <a href="ini.core.php" title="Description of core php.ini directives">Description of core php.ini directives</a>
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
