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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqlnd.config.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqlnd.config.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqlnd.config.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.mysqlnd.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqlnd.install.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqlnd.incompatibilities.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqlnd.config.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqlnd.config.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqlnd.config.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqlnd.config.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqlnd.config.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqlnd.config.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqlnd.config.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqlnd.config.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqlnd.config.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqlnd.config.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqlnd.config.php" hreflang="zh">

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
        <a href="mysqlnd.incompatibilities.php">
          Incompatibilities &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqlnd.install.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqlnd.php'>Mysqlnd</a></li>      </ul>
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
            <option value='en/mysqlnd.config.php' selected="selected">English</option>
            <option value='de/mysqlnd.config.php'>German</option>
            <option value='es/mysqlnd.config.php'>Spanish</option>
            <option value='fr/mysqlnd.config.php'>French</option>
            <option value='it/mysqlnd.config.php'>Italian</option>
            <option value='ja/mysqlnd.config.php'>Japanese</option>
            <option value='pt_BR/mysqlnd.config.php'>Brazilian Portuguese</option>
            <option value='ru/mysqlnd.config.php'>Russian</option>
            <option value='tr/mysqlnd.config.php'>Turkish</option>
            <option value='uk/mysqlnd.config.php'>Ukrainian</option>
            <option value='zh/mysqlnd.config.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqlnd.config" class="chapter">

  <h1 class="title">Runtime Configuration</h1>

  <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>

  <p class="para">
  <table id="mysqlnd.config.options" class="doctable table">
   <caption><strong>MySQL Native Driver Configuration Options</strong></caption>
   
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

    </tbody>
   
  </table>

  For further details and definitions of the
INI_* modes, see the <a href="configuration.changes.modes.php" class="xref">Where a configuration setting may be set</a>.
 </p>

  <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>

  <p class="para">
  <dl>
   
    <dt id="ini.mysqlnd.collect-statistics">
     <code class="parameter">mysqlnd.collect_statistics</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enables the collection of various client statistics which can be
      accessed through <span class="function"><a href="function.mysqli-get-client-stats.php" class="function">mysqli_get_client_stats()</a></span>,
      <span class="function"><a href="mysqli.get-connection-stats.php" class="function">mysqli_get_connection_stats()</a></span>,
      and are shown in
      <code class="literal">mysqlnd</code> section of the output of the
      <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> function as well.
     </p>
     <p class="para">
      This configuration setting enables all
      <a href="mysqlnd.stats.php" class="link">MySQL Native Driver
      statistics</a> except those relating to memory management.
     </p>
    </dd>
   
   
    <dt id="ini.mysqlnd.collect-memory-statistics">
     <code class="parameter">mysqlnd.collect_memory_statistics</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enable the collection of various memory statistics which can be
      accessed through <span class="function"><a href="function.mysqli-get-client-stats.php" class="function">mysqli_get_client_stats()</a></span>,
      <span class="function"><a href="mysqli.get-connection-stats.php" class="function">mysqli_get_connection_stats()</a></span>,
      and are shown in
      <code class="literal">mysqlnd</code> section of the output of the
      <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> function as well.
     </p>
     <p class="para">
      This configuration setting enables the memory management
      statistics within the overall set of
      <a href="mysqlnd.stats.php" class="link">MySQL Native Driver
      statistics</a>.
     </p>
    </dd>
   
   
    <dt id="ini.mysqlnd.debug">
     <code class="parameter">mysqlnd.debug</code> <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Records communication from all extensions using
      <code class="literal">mysqlnd</code> to the specified log file.
     </p>
     <p class="para">
      The format of the directive is <code class="literal">mysqlnd.debug =
      &quot;option1[,parameter_option1][:option2[,parameter_option2]]&quot;</code>.
     </p>
     <p class="para">
      The options for the format string are as follows:
     </p>
     <ul class="itemizedlist">
      <li class="listitem">
       <p class="para">
        A[,file] - Appends trace output to specified file. Also ensures
        that data is written after each write. This is done by closing
        and reopening the trace file (this is slow). It helps ensure a
        complete log file should the application crash.
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        a[,file] - Appends trace output to the specified file.
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        d - Enables output from DBUG_&lt;N&gt; macros for the current
        state. May be followed by a list of keywords which selects
        output only for the DBUG macros with that keyword. An empty list
        of keywords implies output for all macros.
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        f[,functions] - Limits debugger actions to the specified list of
        functions. An empty list of functions implies that all functions
        are selected.
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        F - Marks each debugger output line with the name of the source
        file containing the macro causing the output.
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        i - Marks each debugger output line with the PID of the current
        process.
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        L - Marks each debugger output line with the name of the source
        file line number of the macro causing the output.
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        n - Marks each debugger output line with the current function
        nesting depth
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        o[,file] - Similar to a[,file] but overwrites old file, and does
        not append.
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        O[,file] - Similar to A[,file] but overwrites old file, and does
        not append.
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        t[,N] - Enables function control flow tracing. The maximum
        nesting depth is specified by N, and defaults to 200.
       </p>
      </li>
      <li class="listitem">
       <p class="para">
        x - This option activates profiling.
       </p>
      </li>
       <li class="listitem">
       <p class="para">
        m - Trace memory allocation and deallocation related calls.
       </p>
      </li>
     </ul>
     <p class="para">
      Example:
     </p>
<div class="example-contents">
<div class="cdata"><pre>
d:t:x:O,/tmp/mysqlnd.trace
</pre></div>
</div>

     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       This feature is only available with a debug build of PHP.
      </p>
     </p></blockquote>
     <p class="para"/>
    </dd>
   
   
    <dt id="ini.mysqlnd.log-mask">
     <code class="parameter">mysqlnd.log_mask</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Defines which queries will be logged. The default 0, which disables logging.
      Define using an integer, and not with PHP constants. For example, a value of
      48 (16 + 32) will log slow queries which either use &#039;no good index&#039;
      (SERVER_QUERY_NO_GOOD_INDEX_USED = 16) or no index at all (SERVER_QUERY_NO_INDEX_USED = 32).
      A value of 2043 (1 + 2 + 8 + ... + 1024) will log all slow query types.
     </p>
     <p class="para">
      The types are as follows: SERVER_STATUS_IN_TRANS=1, SERVER_STATUS_AUTOCOMMIT=2,
      SERVER_MORE_RESULTS_EXISTS=8, SERVER_QUERY_NO_GOOD_INDEX_USED=16, SERVER_QUERY_NO_INDEX_USED=32,
      SERVER_STATUS_CURSOR_EXISTS=64, SERVER_STATUS_LAST_ROW_SENT=128, SERVER_STATUS_DB_DROPPED=256,
      SERVER_STATUS_NO_BACKSLASH_ESCAPES=512, and SERVER_QUERY_WAS_SLOW=1024.
     </p>
    </dd>
   
   
    <dt id="ini.mysqlnd.mempool-default-size">
     <code class="parameter">mysqlnd.mempool_default_size</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Default size of the mysqlnd memory pool, which is used by result sets.
     </p>
    </dd>
   
   
    <dt id="ini.mysqlnd.net-read-timeout">
     <code class="parameter">mysqlnd.net_read_timeout</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      <code class="literal">mysqlnd</code> and the MySQL Client Library,
      <code class="literal">libmysqlclient</code> use different networking APIs.
      <code class="literal">mysqlnd</code> uses PHP streams, whereas
      <code class="literal">libmysqlclient</code> uses its own wrapper around the
      operating level network calls. PHP, by default, sets a read
      timeout of 60s for streams. This is set via
      <var class="filename">php.ini</var>,
      <code class="literal">default_socket_timeout</code>. This default applies to
      all streams that set no other timeout value.
      <code class="literal">mysqlnd</code> does not set any other value and
      therefore connections of long running queries can be disconnected
      after <code class="literal">default_socket_timeout</code> seconds resulting
      in an error message <q class="quote">2006 - MySQL Server has gone
      away</q>. The MySQL Client Library sets a default timeout of
      24 * 3600 seconds (1 day) and waits for other timeouts to
      occur, such as TCP/IP timeouts. <code class="literal">mysqlnd</code> now
      uses the same very long timeout. The value is configurable through
      a new <var class="filename">php.ini</var> setting:
      <code class="literal">mysqlnd.net_read_timeout</code>.
      <code class="literal">mysqlnd.net_read_timeout</code> gets used by any
      extension (<code class="literal">ext/mysql</code>,
      <code class="literal">ext/mysqli</code>, <code class="literal">PDO_MySQL</code>) that
      uses <code class="literal">mysqlnd</code>. <code class="literal">mysqlnd</code> tells
      PHP Streams to use <code class="literal">mysqlnd.net_read_timeout</code>.
      Please note that there may be subtle differences between
      <code class="literal">MYSQL_OPT_READ_TIMEOUT</code> from the MySQL Client
      Library and PHP Streams, for example
      <code class="literal">MYSQL_OPT_READ_TIMEOUT</code> is documented to work
      only for TCP/IP connections and, prior to MySQL 5.1.2, only for
      Windows. PHP streams may not have this limitation. Please check
      the streams documentation, if in doubt.
     </p>
    </dd>
   
   
    <dt id="ini.mysqlnd.net-cmd-buffer-size">
     <code class="parameter">mysqlnd.net_cmd_buffer_size</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      <code class="literal">mysqlnd</code> allocates an internal command/network
      buffer of <code class="literal">mysqlnd.net_cmd_buffer_size</code> (in
      <var class="filename">php.ini</var>) bytes for every connection. If a
      MySQL Client Server protocol command, for example,
      <code class="literal">COM_QUERY</code> (<q class="quote">normal</q> query), does
      not fit into the buffer, <code class="literal">mysqlnd</code> will grow the
      buffer to the size required for sending the command. Whenever the
      buffer gets extended for one connection,
      <code class="literal">command_buffer_too_small</code> will be incremented by
      one.
     </p>
     <p class="para">
      If <code class="literal">mysqlnd</code> has to grow the buffer beyond its
      initial size of <code class="literal">mysqlnd.net_cmd_buffer_size</code>
      bytes for almost every connection, you should consider increasing
      the default size to avoid re-allocations.
     </p>
     <p class="para">
      The default buffer size is 4096 bytes, which is the smallest value possible.
     </p>
     <p class="para">
      The value can also be set using <code class="literal">mysqli_options(link,
      MYSQLI_OPT_NET_CMD_BUFFER_SIZE, size)</code>.
     </p>
    </dd>
   
   
    <dt id="ini.mysqlnd.net-read-buffer-size">
     <code class="parameter">mysqlnd.net_read_buffer_size</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Maximum read chunk size in bytes when reading the body of a MySQL
      command packet. The MySQL client server protocol encapsulates all
      its commands in packets. The packets consist of a small header and
      a body with the actual payload. The size of the body is encoded in
      the header. <code class="literal">mysqlnd</code> reads the body in chunks of
      <code class="literal">MIN(header.size, mysqlnd.net_read_buffer_size)</code>
      bytes. If a packet body is larger than
      <code class="literal">mysqlnd.net_read_buffer_size</code> bytes,
      <code class="literal">mysqlnd</code> has to call <code class="literal">read()</code>
      multiple times.
     </p>
     <p class="para">
      The value can also be set using <code class="literal">mysqli_options(link,
      MYSQLI_OPT_NET_READ_BUFFER_SIZE, size)</code>.
     </p>
    </dd>
   
   
    <dt id="ini.mysqlnd.sha256-server-public-key">
     <code class="parameter">mysqlnd.sha256_server_public_key</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      SHA-256 Authentication Plugin related. File with the MySQL server
      public RSA key.
     </p>
     <p class="para">
      Clients can either omit setting a public RSA key, specify the key through
      this PHP configuration setting or set the key at runtime using
      <span class="function"><a href="mysqli.options.php" class="function">mysqli_options()</a></span>. If not public RSA key file is
      given by the client, then the key will be exchanged as part of the
      standard SHA-256 Authentication Plugin authentication procedure.
     </p>
    </dd>
   
   
    <dt id="ini.mysqlnd.trace-alloc">
     <code class="parameter">mysqlnd.trace_alloc</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
     </p>
    </dd>
   
   
    <dt id="ini.mysqlnd.fetch_data_copy">
     <code class="parameter">mysqlnd.fetch_data_copy</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Enforce copying result sets from the internal
      result set buffers into PHP variables instead of using the default
      reference and copy-on-write logic. Please, see the
      <a href="mysqlnd.memory.php" class="link">memory management implementation notes</a>
      for further details.
     </p>
     <p class="para">
      Copying result sets instead of having PHP variables reference
      them allows releasing the memory occupied for the PHP variables earlier.
      Depending on the user API code, the actual database quries and the
      size of their result sets this may reduce the memory footprint
      of mysqlnd.
     </p>
     <p class="para">
       Do not set if using PDO_MySQL. PDO_MySQL has not yet been updated to support
       the new fetch mode.
     </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">Removed as of PHP 8.1.0</span>
    </p></blockquote>
    </dd>
   
  </dl>
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqlnd/config.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqlnd.config%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqlnd.config&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqlnd.config.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.mysqlnd.php">Mysqlnd</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.mysqlnd.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.overview.php" title="Overview">Overview</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.install.php" title="Installation">Installation</a>
                        </li>
                                                <li class="current">
                            <a href="mysqlnd.config.php" title="Runtime Configuration">Runtime Configuration</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.incompatibilities.php" title="Incompatibilities">Incompatibilities</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.persist.php" title="Persistent Connections">Persistent Connections</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.stats.php" title="Statistics">Statistics</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.notes.php" title="Notes">Notes</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.memory.php" title="Memory management">Memory management</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.plugin.php" title="MySQL Native Driver Plugin API">MySQL Native Driver Plugin API</a>
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
