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

 <link rel="canonical" href="https://www.php.net/manual/en/sqlsrv.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/sqlsrv.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/sqlsrv.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.sqlsrv.php">
 <link rel="prev" href="https://www.php.net/manual/en/sqlsrv.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.sqlsrv.php">

 <link rel="alternate" href="https://www.php.net/manual/en/sqlsrv.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/sqlsrv.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/sqlsrv.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/sqlsrv.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/sqlsrv.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/sqlsrv.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/sqlsrv.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/sqlsrv.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/sqlsrv.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/sqlsrv.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/sqlsrv.constants.php" hreflang="zh">

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
        <a href="ref.sqlsrv.php">
          SQLSRV Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="sqlsrv.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.sqlsrv.php'>SQLSRV</a></li>      </ul>
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
            <option value='en/sqlsrv.constants.php' selected="selected">English</option>
            <option value='de/sqlsrv.constants.php'>German</option>
            <option value='es/sqlsrv.constants.php'>Spanish</option>
            <option value='fr/sqlsrv.constants.php'>French</option>
            <option value='it/sqlsrv.constants.php'>Italian</option>
            <option value='ja/sqlsrv.constants.php'>Japanese</option>
            <option value='pt_BR/sqlsrv.constants.php'>Brazilian Portuguese</option>
            <option value='ru/sqlsrv.constants.php'>Russian</option>
            <option value='tr/sqlsrv.constants.php'>Turkish</option>
            <option value='uk/sqlsrv.constants.php'>Ukrainian</option>
            <option value='zh/sqlsrv.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="sqlsrv.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <p class="para">
  <dl>
   
    <dt id="constant.sqlsrv-fetch-assoc">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-fetch-assoc">SQLSRV_FETCH_ASSOC</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Forces <span class="function"><a href="function.sqlsrv-fetch-array.php" class="function">sqlsrv_fetch_array()</a></span> to return an associative 
     array when passed as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-fetch-numeric">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-fetch-numeric">SQLSRV_FETCH_NUMERIC</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Forces <span class="function"><a href="function.sqlsrv-fetch-array.php" class="function">sqlsrv_fetch_array()</a></span> to return an array with 
     numeric when passed as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-fetch-both">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-fetch-both">SQLSRV_FETCH_BOTH</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Forces <span class="function"><a href="function.sqlsrv-fetch-array.php" class="function">sqlsrv_fetch_array()</a></span> to return an array with both 
     associative and numeric keys when passed as a parameter (the default behavior). 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-err-all">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-err-all">SQLSRV_ERR_ALL</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Forces <span class="function"><a href="function.sqlsrv-errors.php" class="function">sqlsrv_errors()</a></span> to return both errors and warings 
     when passed as a parameter (the default behavior). 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-err-errors">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-err-errors">SQLSRV_ERR_ERRORS</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Forces <span class="function"><a href="function.sqlsrv-errors.php" class="function">sqlsrv_errors()</a></span> to return errors only (no warnings) 
     when passed as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-err-warnings">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-err-warnings">SQLSRV_ERR_WARNINGS</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Forces <span class="function"><a href="function.sqlsrv-errors.php" class="function">sqlsrv_errors()</a></span> to return warnings only (no errors) 
     when passed as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-log-system-all">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-log-system-all">SQLSRV_LOG_SYSTEM_ALL</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Turns on logging of all subsystems when passed to 
     <span class="function"><a href="function.sqlsrv-configure.php" class="function">sqlsrv_configure()</a></span> as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-log-system-conn">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-log-system-conn">SQLSRV_LOG_SYSTEM_CONN</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Turns on logging of connection activity when passed to 
     <span class="function"><a href="function.sqlsrv-configure.php" class="function">sqlsrv_configure()</a></span> as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-log-system-init">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-log-system-init">SQLSRV_LOG_SYSTEM_INIT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Turns on logging of initialization activity when passed to 
     <span class="function"><a href="function.sqlsrv-configure.php" class="function">sqlsrv_configure()</a></span> as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-log-system-off">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-log-system-off">SQLSRV_LOG_SYSTEM_OFF</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Turns off logging of all subsystems when passed to 
     <span class="function"><a href="function.sqlsrv-configure.php" class="function">sqlsrv_configure()</a></span> as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-log-system-stmt">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-log-system-stmt">SQLSRV_LOG_SYSTEM_STMT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Turns on logging of statement activity when passed to 
     <span class="function"><a href="function.sqlsrv-configure.php" class="function">sqlsrv_configure()</a></span> as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-log-system-util">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-log-system-util">SQLSRV_LOG_SYSTEM_UTIL</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Turns on logging of error function activity when passed to 
     <span class="function"><a href="function.sqlsrv-configure.php" class="function">sqlsrv_configure()</a></span> as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-log-severity-all">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-log-severity-all">SQLSRV_LOG_SEVERITY_ALL</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies that errors, warnings, and notices will be logged 
     when passed to <span class="function"><a href="function.sqlsrv-configure.php" class="function">sqlsrv_configure()</a></span> as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-log-severity-error">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-log-severity-error">SQLSRV_LOG_SEVERITY_ERROR</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies that errors will be logged when passed to 
     <span class="function"><a href="function.sqlsrv-configure.php" class="function">sqlsrv_configure()</a></span> as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-log-severity-notice">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-log-severity-notice">SQLSRV_LOG_SEVERITY_NOTICE</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies that notices will be logged when passed to 
     <span class="function"><a href="function.sqlsrv-configure.php" class="function">sqlsrv_configure()</a></span> as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-log-severity-warning">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-log-severity-warning">SQLSRV_LOG_SEVERITY_WARNING</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies that warnings will be logged when passed to 
     <span class="function"><a href="function.sqlsrv-configure.php" class="function">sqlsrv_configure()</a></span> as a parameter. 
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-nullable-yes">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-nullable-yes">SQLSRV_NULLABLE_YES</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates that a column is nullable.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-nullable-no">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-nullable-no">SQLSRV_NULLABLE_NO</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates that a column is not nullable.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-nullable-unknown">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-nullable-unknown">SQLSRV_NULLABLE_UNKNOWN</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates that it is not known if a column is nullable.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-param-in">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-param-in">SQLSRV_PARAM_IN</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates an input parameter when passed to <span class="function"><a href="function.sqlsrv-query.php" class="function">sqlsrv_query()</a></span> 
     or <span class="function"><a href="function.sqlsrv-prepare.php" class="function">sqlsrv_prepare()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-param-inout">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-param-inout">SQLSRV_PARAM_INOUT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates a bidirectional parameter when passed to <span class="function"><a href="function.sqlsrv-query.php" class="function">sqlsrv_query()</a></span> 
     or <span class="function"><a href="function.sqlsrv-prepare.php" class="function">sqlsrv_prepare()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-param-out">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-param-out">SQLSRV_PARAM_OUT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates an output parameter when passed to <span class="function"><a href="function.sqlsrv-query.php" class="function">sqlsrv_query()</a></span> or 
     <span class="function"><a href="function.sqlsrv-prepare.php" class="function">sqlsrv_prepare()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-phptype-int">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-phptype-int">SQLSRV_PHPTYPE_INT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies an integer PHP data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc296208.aspx" class="link external">&raquo;&nbsp;How to: Specify PHP Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-phptype-datetime">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-phptype-datetime">SQLSRV_PHPTYPE_DATETIME</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies a datetime PHP data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc296208.aspx" class="link external">&raquo;&nbsp;How to: Specify PHP Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-phptype-float">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-phptype-float">SQLSRV_PHPTYPE_FLOAT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies a float PHP data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc296208.aspx" class="link external">&raquo;&nbsp;How to: Specify PHP Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-phptype-stream">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-phptype-stream">SQLSRV_PHPTYPE_STREAM</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies a PHP stream. This constant works like a function and accepts an 
     encoding constant. See the SQLSRV_ENC_* constants. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc296208.aspx" class="link external">&raquo;&nbsp;How to: Specify PHP Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-phptype-string">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-phptype-string">SQLSRV_PHPTYPE_STRING</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies a string PHP data type. This constant works like a function and 
     accepts an encoding constant. See the SQLSRV_ENC_* constants. For usage information, 
     see <a href="http://msdn.microsoft.com/en-us/library/cc296208.aspx" class="link external">&raquo;&nbsp;How to: Specify PHP Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-enc-binary">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-enc-binary">SQLSRV_ENC_BINARY</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies that data is returned as a raw byte stream from the server without 
     performing encoding or translation. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc296208.aspx" class="link external">&raquo;&nbsp;How to: Specify PHP Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-enc-char">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-enc-char">SQLSRV_ENC_CHAR</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Data is returned in 8-bit characters as specified in the code page of the 
     Windows locale that is set on the system. Any multi-byte characters or characters 
     that do not map into this code page are substituted with a single byte question 
     mark (?) character. This is the default encoding. For usage information, 
     see <a href="http://msdn.microsoft.com/en-us/library/cc296208.aspx" class="link external">&raquo;&nbsp;How to: Specify PHP Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-bigint">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-bigint">SQLSRV_SQLTYPE_BIGINT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the bigint SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-binary">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-binary">SQLSRV_SQLTYPE_BINARY</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the binary SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-bit">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-bit">SQLSRV_SQLTYPE_BIT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the bit SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-char">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-char">SQLSRV_SQLTYPE_CHAR</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the char SQL Server data type. This constant works like a function 
     and accepts a parameter indicating the number characters. For usage information, 
     see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-date">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-date">SQLSRV_SQLTYPE_DATE</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the date SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-datetime">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-datetime">SQLSRV_SQLTYPE_DATETIME</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the datetime SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-datetime2">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-datetime2">SQLSRV_SQLTYPE_DATETIME2</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the datetime2 SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-datetimeoffset">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-datetimeoffset">SQLSRV_SQLTYPE_DATETIMEOFFSET</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the datetimeoffset SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-decimal">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-decimal">SQLSRV_SQLTYPE_DECIMAL</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the decimal SQL Server data type. This constant works like a function 
     and accepts two parameters indicating (in order) precision and scale. For usage information, 
     see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-float">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-float">SQLSRV_SQLTYPE_FLOAT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the float SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-image">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-image">SQLSRV_SQLTYPE_IMAGE</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the image SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-int">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-int">SQLSRV_SQLTYPE_INT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the int SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-money">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-money">SQLSRV_SQLTYPE_MONEY</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the money SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-nchar">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-nchar">SQLSRV_SQLTYPE_NCHAR</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the nchar SQL Server data type. This constant works like a function 
     and accepts a single parameter indicating the character count. For usage information, 
     see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-numeric">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-numeric">SQLSRV_SQLTYPE_NUMERIC</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the numeric SQL Server data type. This constant works like a function 
     and accepts two parameter indicating (in order) precision and scale. For usage 
     information, see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-nvarchar">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-nvarchar">SQLSRV_SQLTYPE_NVARCHAR</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the nvarchar SQL Server data type. This constant works like a function 
     and accepts a single parameter indicating the character count. For usage 
     information, see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt>
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-nvarchar">SQLSRV_SQLTYPE_NVARCHAR</a></code></strong>(&#039;max&#039;)
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the nvarchar(MAX) SQL Server data type. For usage information, 
     see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-ntext">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-ntext">SQLSRV_SQLTYPE_NTEXT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the ntext SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-real">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-real">SQLSRV_SQLTYPE_REAL</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the real SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-smalldatetime">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-smalldatetime">SQLSRV_SQLTYPE_SMALLDATETIME</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the smalldatetime SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-smallint">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-smallint">SQLSRV_SQLTYPE_SMALLINT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the smallint SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-smallmoney">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-smallmoney">SQLSRV_SQLTYPE_SMALLMONEY</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the smallmoney SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-text">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-text">SQLSRV_SQLTYPE_TEXT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the text SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-time">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-time">SQLSRV_SQLTYPE_TIME</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the time SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-timestamp">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-timestamp">SQLSRV_SQLTYPE_TIMESTAMP</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the timestamp SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-tinyint">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-tinyint">SQLSRV_SQLTYPE_TINYINT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the tinyint SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-uniqueidentifier">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-uniqueidentifier">SQLSRV_SQLTYPE_UNIQUEIDENTIFIER</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the uniqueidentifier SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-udt">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-udt">SQLSRV_SQLTYPE_UDT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the UDT SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-varbinary">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-varbinary">SQLSRV_SQLTYPE_VARBINARY</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the varbinary SQL Server data type. This constant works like a function 
     and accepts a single parameter indicating the byte count. For usage information, 
     see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt>
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-varbinary">SQLSRV_SQLTYPE_VARBINARY</a></code></strong>(&#039;max&#039;)
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the varbinary(MAX) SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-varchar">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-varchar">SQLSRV_SQLTYPE_VARCHAR</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the varchar SQL Server data type. This constant works like a function 
     and accepts a single parameter indicating the character count. For usage information, 
     see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt>
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-varchar">SQLSRV_SQLTYPE_VARCHAR</a></code></strong>(&#039;max&#039;)
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the varchar(MAX) SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-sqltype-xml">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-sqltype-xml">SQLSRV_SQLTYPE_XML</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Describes the XML SQL Server data type. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">&raquo;&nbsp;How to: Specify SQL Types</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-txn-read-uncommitted">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-txn-read-uncommitted">SQLSRV_TXN_READ_UNCOMMITTED</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates a transaction isolation level of READ UNCOMMITTED. This value is 
     used to set the TransactionIsolation level in the $connectionOptions array 
     passed to <span class="function"><a href="function.sqlsrv-connect.php" class="function">sqlsrv_connect()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-txn-read-committed">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-txn-read-committed">SQLSRV_TXN_READ_COMMITTED</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates a transaction isolation level of READ COMMITTED. This value is 
     used to set the TransactionIsolation level in the $connectionOptions array 
     passed to <span class="function"><a href="function.sqlsrv-connect.php" class="function">sqlsrv_connect()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-txn-repeatable-read">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-txn-repeatable-read">SQLSRV_TXN_REPEATABLE_READ</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates a transaction isolation level of REPEATABLE READ. This value is 
     used to set the TransactionIsolation level in the $connectionOptions array 
     passed to <span class="function"><a href="function.sqlsrv-connect.php" class="function">sqlsrv_connect()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-txn-snapshot">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-txn-snapshot">SQLSRV_TXN_SNAPSHOT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates a transaction isolation level of SNAPSHOT. This value is used to 
     set the TransactionIsolation level in the $connectionOptions array passed 
     to <span class="function"><a href="function.sqlsrv-connect.php" class="function">sqlsrv_connect()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-txn-read-serializable">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-txn-read-serializable">SQLSRV_TXN_READ_SERIALIZABLE</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates a transaction isolation level of SERIALIZABLE. This value is used 
     to set the TransactionIsolation level in the $connectionOptions array passed 
     to <span class="function"><a href="function.sqlsrv-connect.php" class="function">sqlsrv_connect()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-cursor-forward">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-cursor-forward">SQLSRV_CURSOR_FORWARD</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates a forward-only cursor. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying a Cursor Type and Selecting Rows</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-cursor-static">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-cursor-static">SQLSRV_CURSOR_STATIC</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates a static cursor. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying a Cursor Type and Selecting Rows</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-dynamic">
     <strong><code>SQLSRV_CURSOR_DYNAMIC</code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates a dynamic cursor. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying a Cursor Type and Selecting Rows</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-cursor-keyset">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-cursor-keyset">SQLSRV_CURSOR_KEYSET</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Indicates a keyset cursor. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying a Cursor Type and Selecting Rows</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-cursor-buffered">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-cursor-buffered">SQLSRV_CURSOR_BUFFERED</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Creates a client-side cursor query. Lets you access rows in any order. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying a Cursor Type and Selecting Rows</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-scroll-next">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-scroll-next">SQLSRV_SCROLL_NEXT</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies which row to select in a result set. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying a Cursor Type and Selecting Rows</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-scroll-prior">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-scroll-prior">SQLSRV_SCROLL_PRIOR</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies which row to select in a result set. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying a Cursor Type and Selecting Rows</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-scroll-first">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-scroll-first">SQLSRV_SCROLL_FIRST</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies which row to select in a result set. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying a Cursor Type and Selecting Rows</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-scroll-last">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-scroll-last">SQLSRV_SCROLL_LAST</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies which row to select in a result set. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying a Cursor Type and Selecting Rows</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-scroll-absolute">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-scroll-absolute">SQLSRV_SCROLL_ABSOLUTE</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies which row to select in a result set. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying a Cursor Type and Selecting Rows</a>.
     </span>
    </dd>
   
   
    <dt id="constant.sqlsrv-scroll-relative">
     <strong><code><a href="sqlsrv.constants.php#constant.sqlsrv-scroll-relative">SQLSRV_SCROLL_RELATIVE</a></code></strong> 
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Specifies which row to select in a result set. For usage information, see 
     <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying a Cursor Type and Selecting Rows</a>.
     </span>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sqlsrv/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsqlsrv.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=sqlsrv.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sqlsrv.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.sqlsrv.php">SQLSRV</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.sqlsrv.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="sqlsrv.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="sqlsrv.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.sqlsrv.php" title="SQLSRV Functions">SQLSRV Functions</a>
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
