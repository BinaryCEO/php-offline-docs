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

 <link rel="canonical" href="https://www.php.net/manual/en/pgsql.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pgsql.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pgsql.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.pgsql.php">
 <link rel="prev" href="https://www.php.net/manual/en/pgsql.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/pgsql.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pgsql.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pgsql.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pgsql.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pgsql.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pgsql.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pgsql.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pgsql.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pgsql.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pgsql.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pgsql.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pgsql.constants.php" hreflang="zh">

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
        <a href="pgsql.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pgsql.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.pgsql.php'>PostgreSQL</a></li>      </ul>
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
            <option value='en/pgsql.constants.php' selected="selected">English</option>
            <option value='de/pgsql.constants.php'>German</option>
            <option value='es/pgsql.constants.php'>Spanish</option>
            <option value='fr/pgsql.constants.php'>French</option>
            <option value='it/pgsql.constants.php'>Italian</option>
            <option value='ja/pgsql.constants.php'>Japanese</option>
            <option value='pt_BR/pgsql.constants.php'>Brazilian Portuguese</option>
            <option value='ru/pgsql.constants.php'>Russian</option>
            <option value='tr/pgsql.constants.php'>Turkish</option>
            <option value='uk/pgsql.constants.php'>Ukrainian</option>
            <option value='zh/pgsql.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pgsql.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>

 <dl>
  
   <dt id="constant.pgsql-libpq-version">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-libpq-version">PGSQL_LIBPQ_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Short libpq version that contains only numbers and dots.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-libpq-version-str">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-libpq-version-str">PGSQL_LIBPQ_VERSION_STR</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Prior to PHP 8.0.0, the long libpq version that includes compiler information.
     As of PHP 8.0.0, the value is identical to <strong><code><a href="pgsql.constants.php#constant.pgsql-libpq-version">PGSQL_LIBPQ_VERSION</a></code></strong>,
     and using <strong><code><a href="pgsql.constants.php#constant.pgsql-libpq-version-str">PGSQL_LIBPQ_VERSION_STR</a></code></strong> is deprecated.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-assoc">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-assoc">PGSQL_ASSOC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Passed to <span class="function"><a href="function.pg-fetch-array.php" class="function">pg_fetch_array()</a></span>. Return an associative array of field
      names and values.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-num">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-num">PGSQL_NUM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Passed to <span class="function"><a href="function.pg-fetch-array.php" class="function">pg_fetch_array()</a></span>. Return a numerically indexed array of field
      numbers and values.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-both">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-both">PGSQL_BOTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Passed to <span class="function"><a href="function.pg-fetch-array.php" class="function">pg_fetch_array()</a></span>. Return an array of field values
      that is both numerically indexed (by field number) and associated (by field name).
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-connect-force-new">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-connect-force-new">PGSQL_CONNECT_FORCE_NEW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Passed to <span class="function"><a href="function.pg-connect.php" class="function">pg_connect()</a></span> to force the creation of a new connection,
      rather than re-using an existing identical connection.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-connect-async">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-connect-async">PGSQL_CONNECT_ASYNC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Passed to <span class="function"><a href="function.pg-connect.php" class="function">pg_connect()</a></span> to create an asynchronous
      connection.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-connection-auth-ok">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-connection-auth-ok">PGSQL_CONNECTION_AUTH_OK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.pgsql-connection-awaiting-response">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-connection-awaiting-response">PGSQL_CONNECTION_AWAITING_RESPONSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.pgsql-connection-bad">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-connection-bad">PGSQL_CONNECTION_BAD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Returned by <span class="function"><a href="function.pg-connection-status.php" class="function">pg_connection_status()</a></span> indicating that the database
      connection is in an invalid state.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-connection-made">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-connection-made">PGSQL_CONNECTION_MADE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.pgsql-connection-ok">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-connection-ok">PGSQL_CONNECTION_OK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Returned by <span class="function"><a href="function.pg-connection-status.php" class="function">pg_connection_status()</a></span> indicating that the database
      connection is in a valid state.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-connection-setenv">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-connection-setenv">PGSQL_CONNECTION_SETENV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.pgsql-connection-ssl-startup">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-connection-ssl-startup">PGSQL_CONNECTION_SSL_STARTUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.pgsql-connection-started">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-connection-started">PGSQL_CONNECTION_STARTED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.pgsql-seek-set">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-seek-set">PGSQL_SEEK_SET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-lo-seek.php" class="function">pg_lo_seek()</a></span>. Seek operation is to begin
     from the start of the object.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-seek-cur">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-seek-cur">PGSQL_SEEK_CUR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-lo-seek.php" class="function">pg_lo_seek()</a></span>. Seek operation is to begin
     from the current position.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-seek-end">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-seek-end">PGSQL_SEEK_END</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-lo-seek.php" class="function">pg_lo_seek()</a></span>. Seek operation is to begin
     from the end of the object.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-empty-query">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-empty-query">PGSQL_EMPTY_QUERY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-result-status.php" class="function">pg_result_status()</a></span>. The string sent to the server
     was empty.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-command-ok">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-command-ok">PGSQL_COMMAND_OK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-result-status.php" class="function">pg_result_status()</a></span>. Successful completion of a
     command returning no data.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-tuples-ok">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-tuples-ok">PGSQL_TUPLES_OK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-result-status.php" class="function">pg_result_status()</a></span>. Successful completion of a command
     returning data (such as a <code class="literal">SELECT</code> or <code class="literal">SHOW</code>).
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-tuples-chunk">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-tuples-chunk">PGSQL_TUPLES_CHUNK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-result-status.php" class="function">pg_result_status()</a></span>.
     Indicates the successful completion of a command returning data in chunked mode.
     Returned for <code class="literal">SELECT</code> commands when
     <span class="function"><a href="function.pg-set-chunked-rows-size.php" class="function">pg_set_chunked_rows_size()</a></span> is set.
     The result set is divided into multiple chunks, each containing a predefined number of rows.
     Available as of PHP 8.4.0 and libpq 17.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-copy-out">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-copy-out">PGSQL_COPY_OUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-result-status.php" class="function">pg_result_status()</a></span>. Copy Out (from server) data
     transfer started.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-copy-in">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-copy-in">PGSQL_COPY_IN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-result-status.php" class="function">pg_result_status()</a></span>. Copy In (to server) data
     transfer started.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-bad-response">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-bad-response">PGSQL_BAD_RESPONSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-result-status.php" class="function">pg_result_status()</a></span>. The server&#039;s response
     was not understood.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-nonfatal-error">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-nonfatal-error">PGSQL_NONFATAL_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-result-status.php" class="function">pg_result_status()</a></span>. A nonfatal error
     (a notice or warning) occurred.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-fatal-error">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-fatal-error">PGSQL_FATAL_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-result-status.php" class="function">pg_result_status()</a></span>. A fatal error
     occurred.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-transaction-idle">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-transaction-idle">PGSQL_TRANSACTION_IDLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-transaction-status.php" class="function">pg_transaction_status()</a></span>. Connection is
     currently idle, not in a transaction.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-transaction-active">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-transaction-active">PGSQL_TRANSACTION_ACTIVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-transaction-status.php" class="function">pg_transaction_status()</a></span>. A command
     is in progress on the connection.  A query has been sent via the connection
     and not yet completed.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-transaction-intrans">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-transaction-intrans">PGSQL_TRANSACTION_INTRANS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-transaction-status.php" class="function">pg_transaction_status()</a></span>. The connection
     is idle, in a transaction block.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-transaction-inerror">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-transaction-inerror">PGSQL_TRANSACTION_INERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-transaction-status.php" class="function">pg_transaction_status()</a></span>. The connection
     is idle, in a failed transaction block.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-transaction-unknown">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-transaction-unknown">PGSQL_TRANSACTION_UNKNOWN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-transaction-status.php" class="function">pg_transaction_status()</a></span>. The connection
     is bad.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-severity">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-severity">PGSQL_DIAG_SEVERITY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-error-field.php" class="function">pg_result_error_field()</a></span>.
     The severity; the field contents are <code class="literal">ERROR</code>,
     <code class="literal">FATAL</code>, or <code class="literal">PANIC</code> (in an error message), or
     <code class="literal">WARNING</code>, <code class="literal">NOTICE</code>, <code class="literal">DEBUG</code>,
     <code class="literal">INFO</code>, or <code class="literal">LOG</code> (in a notice message), or a localized
     translation of one of these. Always present.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-sqlstate">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-sqlstate">PGSQL_DIAG_SQLSTATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-error-field.php" class="function">pg_result_error_field()</a></span>.
     The SQLSTATE code for the error. The SQLSTATE code identifies the type of error
     that has occurred; it can be used by front-end applications to perform specific
     operations (such as error handling) in response to a particular database error.
     This field is not localizable, and is always present.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-message-primary">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-message-primary">PGSQL_DIAG_MESSAGE_PRIMARY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-error-field.php" class="function">pg_result_error_field()</a></span>.
     The primary human-readable error message (typically one line). Always present.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-message-detail">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-message-detail">PGSQL_DIAG_MESSAGE_DETAIL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-error-field.php" class="function">pg_result_error_field()</a></span>.
     Detail: an optional secondary error message carrying more detail about the problem. May run to multiple lines.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-message-hint">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-message-hint">PGSQL_DIAG_MESSAGE_HINT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-error-field.php" class="function">pg_result_error_field()</a></span>.
     Hint: an optional suggestion what to do about the problem. This is intended to differ from detail in that it
     offers advice (potentially inappropriate) rather than hard facts. May run to multiple lines.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-statement-position">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-statement-position">PGSQL_DIAG_STATEMENT_POSITION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-error-field.php" class="function">pg_result_error_field()</a></span>.
     A string containing a decimal integer indicating an error cursor position as an index into the original
     statement string. The first character has index 1, and positions are measured in characters not bytes.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-internal-position">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-internal-position">PGSQL_DIAG_INTERNAL_POSITION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-error-field.php" class="function">pg_result_error_field()</a></span>.
     This is defined the same as the <strong><code>PG_DIAG_STATEMENT_POSITION</code></strong> field, but
     it is used when the cursor position refers to an internally generated
     command rather than the one submitted by the client. The
     <strong><code>PG_DIAG_INTERNAL_QUERY</code></strong> field will always appear when this
     field appears.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-internal-query">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-internal-query">PGSQL_DIAG_INTERNAL_QUERY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-error-field.php" class="function">pg_result_error_field()</a></span>.
     The text of a failed internally-generated command. This could be, for example, a
     SQL query issued by a PL/pgSQL function.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-context">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-context">PGSQL_DIAG_CONTEXT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-error-field.php" class="function">pg_result_error_field()</a></span>.
     An indication of the context in which the error occurred. Presently
     this includes a call stack traceback of active procedural language
     functions and internally-generated queries. The trace is one entry
     per line, most recent first.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-source-file">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-source-file">PGSQL_DIAG_SOURCE_FILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-error-field.php" class="function">pg_result_error_field()</a></span>.
     The file name of the PostgreSQL source-code location where the error
     was reported.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-source-line">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-source-line">PGSQL_DIAG_SOURCE_LINE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-error-field.php" class="function">pg_result_error_field()</a></span>.
     The line number of the PostgreSQL source-code location where the
     error was reported.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-source-function">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-source-function">PGSQL_DIAG_SOURCE_FUNCTION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-error-field.php" class="function">pg_result_error_field()</a></span>.
     The name of the PostgreSQL source-code function reporting the error.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-schema-name">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-schema-name">PGSQL_DIAG_SCHEMA_NAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available since PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-table-name">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-table-name">PGSQL_DIAG_TABLE_NAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available since PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-column-name">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-column-name">PGSQL_DIAG_COLUMN_NAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available since PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-datatype-name">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-datatype-name">PGSQL_DIAG_DATATYPE_NAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available since PHP 7.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-constraint-name">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-constraint-name">PGSQL_DIAG_CONSTRAINT_NAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available since PHP 7.3.0.
    </span>
   </dd>
  

  
   <dt id="constant.pgsql-errors-terse">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-errors-terse">PGSQL_ERRORS_TERSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-set-error-verbosity.php" class="function">pg_set_error_verbosity()</a></span>.
     Specified that returned messages include severity, primary text,
     and position only; this will normally fit on a single line.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-errors-default">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-errors-default">PGSQL_ERRORS_DEFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-set-error-verbosity.php" class="function">pg_set_error_verbosity()</a></span>.
     The default mode produces messages that include the above
     plus any detail, hint, or context fields (these may span
     multiple lines).
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-errors-verbose">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-errors-verbose">PGSQL_ERRORS_VERBOSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-set-error-verbosity.php" class="function">pg_set_error_verbosity()</a></span>.
     The verbose mode includes all available fields.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-errors-sqlstate">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-errors-sqlstate">PGSQL_ERRORS_SQLSTATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-set-error-verbosity.php" class="function">pg_set_error_verbosity()</a></span>.
     Includes only the error severity and the <code class="literal">SQLSTATE</code> error code.
     If no error code is available, the output is like
     <strong><code><a href="pgsql.constants.php#constant.pgsql-errors-terse">PGSQL_ERRORS_TERSE</a></code></strong> mode.
     Before PostgreSQL 11.1, the output is always the same
     as in <strong><code><a href="pgsql.constants.php#constant.pgsql-errors-terse">PGSQL_ERRORS_TERSE</a></code></strong> mode.
    </span>
   </dd>
  

  
   <dt id="constant.pgsql-notice-last">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-notice-last">PGSQL_NOTICE_LAST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Used by <span class="function"><a href="function.pg-last-notice.php" class="function">pg_last_notice()</a></span>.
     Available since PHP 7.1.0.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-notice-all">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-notice-all">PGSQL_NOTICE_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Used by <span class="function"><a href="function.pg-last-notice.php" class="function">pg_last_notice()</a></span>.
     Available since PHP 7.1.0.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-notice-clear">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-notice-clear">PGSQL_NOTICE_CLEAR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Used by <span class="function"><a href="function.pg-last-notice.php" class="function">pg_last_notice()</a></span>.
     Available since PHP 7.1.0.
    </span>
   </dd>
  

  
   <dt id="constant.pgsql-status-long">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-status-long">PGSQL_STATUS_LONG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-status.php" class="function">pg_result_status()</a></span>.  Indicates that
     numerical result code is desired.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-status-string">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-status-string">PGSQL_STATUS_STRING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-result-status.php" class="function">pg_result_status()</a></span>.  Indicates that
     textual result command tag is desired.
    </span>
   </dd>
  

  
   <dt id="constant.pgsql-conv-ignore-default">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-conv-ignore-default">PGSQL_CONV_IGNORE_DEFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-convert.php" class="function">pg_convert()</a></span>.
     Ignore default values in the table during conversion.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-conv-force-null">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-conv-force-null">PGSQL_CONV_FORCE_NULL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-convert.php" class="function">pg_convert()</a></span>.
     Use SQL <code class="literal">NULL</code> in place of an empty <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-conv-ignore-not-null">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-conv-ignore-not-null">PGSQL_CONV_IGNORE_NOT_NULL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-convert.php" class="function">pg_convert()</a></span>.
     Ignore conversion of <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> into SQL <code class="literal">NOT NULL</code> columns.
    </span>
   </dd>
  

  
   <dt id="constant.pgsql-dml-no-conv">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-no-conv">PGSQL_DML_NO_CONV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-insert.php" class="function">pg_insert()</a></span>, <span class="function"><a href="function.pg-select.php" class="function">pg_select()</a></span>,
     <span class="function"><a href="function.pg-update.php" class="function">pg_update()</a></span> and <span class="function"><a href="function.pg-delete.php" class="function">pg_delete()</a></span>.
     All parameters passed as is. Manual escape is required
     if parameters contain user supplied data. Use <span class="function"><a href="function.pg-escape-string.php" class="function">pg_escape_string()</a></span>
     for it.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-dml-exec">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-exec">PGSQL_DML_EXEC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-insert.php" class="function">pg_insert()</a></span>, <span class="function"><a href="function.pg-select.php" class="function">pg_select()</a></span>,
     <span class="function"><a href="function.pg-update.php" class="function">pg_update()</a></span> and <span class="function"><a href="function.pg-delete.php" class="function">pg_delete()</a></span>.
     Execute query by these functions.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-dml-async">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-async">PGSQL_DML_ASYNC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-insert.php" class="function">pg_insert()</a></span>, <span class="function"><a href="function.pg-select.php" class="function">pg_select()</a></span>,
     <span class="function"><a href="function.pg-update.php" class="function">pg_update()</a></span> and <span class="function"><a href="function.pg-delete.php" class="function">pg_delete()</a></span>.
     Execute asynchronous query by these functions.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-dml-string">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-string">PGSQL_DML_STRING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-insert.php" class="function">pg_insert()</a></span>, <span class="function"><a href="function.pg-select.php" class="function">pg_select()</a></span>,
     <span class="function"><a href="function.pg-update.php" class="function">pg_update()</a></span> and <span class="function"><a href="function.pg-delete.php" class="function">pg_delete()</a></span>.
     Return executed query string.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-dml-escape">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-escape">PGSQL_DML_ESCAPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Passed to <span class="function"><a href="function.pg-insert.php" class="function">pg_insert()</a></span>, <span class="function"><a href="function.pg-select.php" class="function">pg_select()</a></span>,
     <span class="function"><a href="function.pg-update.php" class="function">pg_update()</a></span> and <span class="function"><a href="function.pg-delete.php" class="function">pg_delete()</a></span>.
     Apply escape to all parameters instead of calling <span class="function"><a href="function.pg-convert.php" class="function">pg_convert()</a></span>
     internally. This option omits meta data look up. Query could be as fast as
     <span class="function"><a href="function.pg-query.php" class="function">pg_query()</a></span> and <span class="function"><a href="function.pg-send-query.php" class="function">pg_send_query()</a></span>.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-polling-failed">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-polling-failed">PGSQL_POLLING_FAILED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-connect-poll.php" class="function">pg_connect_poll()</a></span> to indicate that the
     connection attempt failed.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-polling-reading">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-polling-reading">PGSQL_POLLING_READING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-connect-poll.php" class="function">pg_connect_poll()</a></span> to indicate that the
     connection is waiting for the PostgreSQL socket to be readable.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-polling-writing">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-polling-writing">PGSQL_POLLING_WRITING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-connect-poll.php" class="function">pg_connect_poll()</a></span> to indicate that the
     connection is waiting for the PostgreSQL socket to be writable.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-polling-ok">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-polling-ok">PGSQL_POLLING_OK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-connect-poll.php" class="function">pg_connect_poll()</a></span> to indicate that the
     connection is ready to be used.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-polling-active">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-polling-active">PGSQL_POLLING_ACTIVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returned by <span class="function"><a href="function.pg-connect-poll.php" class="function">pg_connect_poll()</a></span> to indicate that the
     connection is currently active.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-diag-severity-nonlocalized">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-diag-severity-nonlocalized">PGSQL_DIAG_SEVERITY_NONLOCALIZED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    The severity; the field contents are ERROR, FATAL, or PANIC (in an error message), or WARNING, NOTICE, DEBUG, INFO, or LOG (in a notice message). This is identical to the PG_DIAG_SEVERITY field except that the contents are never localized. This is present only in versions 9.6 and later / PHP 7.3.0 and later.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-show-context-never">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-show-context-never">PGSQL_SHOW_CONTEXT_NEVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     To be used with <span class="function"><a href="function.pg-set-error-context-visibility.php" class="function">pg_set_error_context_visibility()</a></span>,
     the context is never shown.
     Available as of PHP 8.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-show-context-errors">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-show-context-errors">PGSQL_SHOW_CONTEXT_ERRORS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     To be used with <span class="function"><a href="function.pg-set-error-context-visibility.php" class="function">pg_set_error_context_visibility()</a></span>,
     the context&#039;s fields are included in error messages only.
     This is the default behaviour.
     Available as of PHP 8.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-show-context-always">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-show-context-always">PGSQL_SHOW_CONTEXT_ALWAYS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     To be used with <span class="function"><a href="function.pg-set-error-context-visibility.php" class="function">pg_set_error_context_visibility()</a></span>,
     the context&#039;s fields are included in error, notice and warning messages.
     Available as of PHP 8.3.0.
    </span>
   </dd>
  
  
   <dt id="constant.pgsql-trace-suppress-timestamps">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-trace-suppress-timestamps">PGSQL_TRACE_SUPPRESS_TIMESTAMPS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     To be used with <span class="function"><a href="function.pg-trace.php" class="function">pg_trace()</a></span>,
     the timestamp is not included in the trace&#039;s messages.
     Available as of PHP 8.3.0.
    </span>
   </dd>
   
  
   <dt id="constant.pgsql-trace-regress-mode">
    <strong><code><a href="pgsql.constants.php#constant.pgsql-trace-regress-mode">PGSQL_TRACE_REGRESS_MODE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     To be used with <span class="function"><a href="function.pg-trace.php" class="function">pg_trace()</a></span>,
     fields such as OIDs are included in the trace&#039;s messages.
     Available as of PHP 8.3.0.
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pgsql/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpgsql.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pgsql.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pgsql.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.pgsql.php">PostgreSQL</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.pgsql.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="pgsql.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="pgsql.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="pgsql.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.pgsql.php" title="PostgreSQL Functions">PostgreSQL Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.pgsql-connection.php" title="PgSql\Connection">PgSql\Connection</a>
                        </li>
                                                <li class="">
                            <a href="class.pgsql-result.php" title="PgSql\Result">PgSql\Result</a>
                        </li>
                                                <li class="">
                            <a href="class.pgsql-lob.php" title="PgSql\Lob">PgSql\Lob</a>
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
