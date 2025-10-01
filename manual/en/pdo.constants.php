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

 <link rel="canonical" href="https://www.php.net/manual/en/pdo.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdo.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdo.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.pdo.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdo.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/pdo.connections.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdo.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdo.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdo.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdo.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdo.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdo.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdo.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdo.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdo.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdo.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdo.constants.php" hreflang="zh">

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
        <a href="pdo.connections.php">
          Connections and Connection management &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdo.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      </ul>
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
            <option value='en/pdo.constants.php' selected="selected">English</option>
            <option value='de/pdo.constants.php'>German</option>
            <option value='es/pdo.constants.php'>Spanish</option>
            <option value='fr/pdo.constants.php'>French</option>
            <option value='it/pdo.constants.php'>Italian</option>
            <option value='ja/pdo.constants.php'>Japanese</option>
            <option value='pt_BR/pdo.constants.php'>Brazilian Portuguese</option>
            <option value='ru/pdo.constants.php'>Russian</option>
            <option value='tr/pdo.constants.php'>Turkish</option>
            <option value='uk/pdo.constants.php'>Ukrainian</option>
            <option value='zh/pdo.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdo.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <dl>
  
   <dt id="pdo.constants.param-bool">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-bool">PDO::PARAM_BOOL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Represents a boolean data type.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-null">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-null">PDO::PARAM_NULL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Represents the SQL NULL data type.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-int">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-int">PDO::PARAM_INT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Represents the SQL INTEGER data type.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-str">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-str">PDO::PARAM_STR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Represents the SQL CHAR, VARCHAR, or other string data type.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-str-natl">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-str-natl">PDO::PARAM_STR_NATL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Flag to denote a string uses the national character set.
    </span>
    <span class="simpara">
     Available since PHP 7.2.0
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-str-char">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-str-char">PDO::PARAM_STR_CHAR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Flag to denote a string uses the regular character set.
    </span>
    <span class="simpara">
     Available since PHP 7.2.0
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-lob">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-lob">PDO::PARAM_LOB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Represents the SQL large object data type.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-stmt">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-stmt">PDO::PARAM_STMT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Represents a recordset type.  Not currently supported by any drivers.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-input-output">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-input-output">PDO::PARAM_INPUT_OUTPUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that the parameter is an INOUT parameter for a stored
     procedure. You must bitwise-OR this value with an explicit
     PDO::PARAM_* data type.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-default">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-default">PDO::FETCH_DEFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that the default fetch mode shall be used. Available as of PHP 8.0.7.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-lazy">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-lazy">PDO::FETCH_LAZY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that the fetch method shall return each row as an object with
     property names that correspond to the column names returned in the result set.
     <strong><code><a href="pdo.constants.php#pdo.constants.fetch-lazy">PDO::FETCH_LAZY</a></code></strong> returns
     a <span class="classname"><a href="class.pdorow.php" class="classname">PDORow</a></span> object
     which creates the object property names as they are accessed.
     Not valid inside <span class="methodname"><a href="pdostatement.fetchall.php" class="methodname">PDOStatement::fetchAll()</a></span>.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-assoc">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-assoc">PDO::FETCH_ASSOC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that the fetch method shall return each row as an array indexed
     by column name as returned in the corresponding result set. If the result
     set contains multiple columns with the same name,
     <strong><code><a href="pdo.constants.php#pdo.constants.fetch-assoc">PDO::FETCH_ASSOC</a></code></strong> returns
     only a single value per column name.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-named">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-named">PDO::FETCH_NAMED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that the fetch method shall return each row as an array indexed
     by column name as returned in the corresponding result set. If the result
     set contains multiple columns with the same name,
     <strong><code><a href="pdo.constants.php#pdo.constants.fetch-named">PDO::FETCH_NAMED</a></code></strong> returns
     an array of values per column name.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-num">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-num">PDO::FETCH_NUM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that the fetch method shall return each row as an array indexed
     by column number as returned in the corresponding result set, starting at
     column 0.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-both">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-both">PDO::FETCH_BOTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that the fetch method shall return each row as an array indexed
     by both column name and number as returned in the corresponding result set,
     starting at column 0.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-obj">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-obj">PDO::FETCH_OBJ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that the fetch method shall return each row as an object with
     property names that correspond to the column names returned in the result
     set.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-bound">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-bound">PDO::FETCH_BOUND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that the fetch method shall return TRUE and assign the values of
     the columns in the result set to the PHP variables to which they were
     bound with the <span class="methodname"><a href="pdostatement.bindparam.php" class="methodname">PDOStatement::bindParam()</a></span> or
     <span class="methodname"><a href="pdostatement.bindcolumn.php" class="methodname">PDOStatement::bindColumn()</a></span> methods.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-column">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-column">PDO::FETCH_COLUMN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that the fetch method shall return only a single requested
     column from the next row in the result set.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-class">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-class">PDO::FETCH_CLASS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that the fetch method shall return a new instance of the
     requested class.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      The object is initialized by mapping the columns from the result set to
      properties in the class. This process occurs before the constructor is
      called, allowing the population of properties regardless of their
      visibility or whether they are marked as <code class="literal">readonly</code>. If
      a property does not exist in the class, the magic
      <a href="language.oop5.overloading.php#object.set" class="link">__set()</a>
      method will be invoked if it exists; otherwise, a dynamic public property
      will be created. However, when <strong><code><a href="pdo.constants.php#pdo.constants.fetch-props-late">PDO::FETCH_PROPS_LATE</a></code></strong>
      is also given, the constructor is called <em>before</em> the
      properties are populated.
     </span>
    </p></blockquote>
   </dd>
  
  
   <dt id="pdo.constants.fetch-into">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-into">PDO::FETCH_INTO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies that the fetch method shall update an existing instance of the
     requested class, mapping the columns to named properties in the class.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-func">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-func">PDO::FETCH_FUNC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Allows completely customize the way data is treated on the fly (only
     valid inside <span class="methodname"><a href="pdostatement.fetchall.php" class="methodname">PDOStatement::fetchAll()</a></span>).
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-group">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-group">PDO::FETCH_GROUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Group return by values. Usually combined with
     <strong><code><a href="pdo.constants.php#pdo.constants.fetch-column">PDO::FETCH_COLUMN</a></code></strong> or
     <strong><code><a href="pdo.constants.php#pdo.constants.fetch-key-pair">PDO::FETCH_KEY_PAIR</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-unique">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-unique">PDO::FETCH_UNIQUE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Fetch only the unique values.
    </span>
   </dd>
  

  
   <dt id="pdo.constants.fetch-key-pair">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-key-pair">PDO::FETCH_KEY_PAIR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Fetch a two-column result into an array where the first column is a key and the second column
      is the value.
    </span>
   </dd>
  

  
   <dt id="pdo.constants.fetch-classtype">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-classtype">PDO::FETCH_CLASSTYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Determine the class name from the value of first column.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-serialize">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-serialize">PDO::FETCH_SERIALIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     As <strong><code><a href="pdo.constants.php#pdo.constants.fetch-into">PDO::FETCH_INTO</a></code></strong> but object is provided as a serialized string.
     The class constructor is never called if this flag is set.
     Deprecated as of PHP 8.1.0.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-props-late">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-props-late">PDO::FETCH_PROPS_LATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Call the constructor before setting properties.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-autocommit">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-autocommit">PDO::ATTR_AUTOCOMMIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     If this value is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, PDO attempts to disable autocommit so that the
     connection begins a transaction.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-prefetch">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-prefetch">PDO::ATTR_PREFETCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Setting the prefetch size allows you to balance speed against memory
     usage for your application.  Not all database/driver combinations support
     setting of the prefetch size.  A larger prefetch size results in
     increased performance at the cost of higher memory usage.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-timeout">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-timeout">PDO::ATTR_TIMEOUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sets the timeout value in seconds for communications with the database.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-errmode">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-errmode">PDO::ATTR_ERRMODE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     See the <a href="pdo.error-handling.php" class="link">Errors and error
     handling</a> section for more information about this attribute.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-server-version">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-server-version">PDO::ATTR_SERVER_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This is a read only attribute; it will return information about the
     version of the database server to which PDO is connected.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-client-version">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-client-version">PDO::ATTR_CLIENT_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This is a read only attribute; it will return information about the
     version of the client libraries that the PDO driver is using.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-server-info">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-server-info">PDO::ATTR_SERVER_INFO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This is a read only attribute; it will return some meta information about the
     database server to which PDO is connected.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-connection-status">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-connection-status">PDO::ATTR_CONNECTION_STATUS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-case">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-case">PDO::ATTR_CASE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Force column names to a specific case specified by the <code class="literal">PDO::CASE_*</code>
     constants.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-cursor-name">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-cursor-name">PDO::ATTR_CURSOR_NAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Get or set the name to use for a cursor.  Most useful when using
     scrollable cursors and positioned updates.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-cursor">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-cursor">PDO::ATTR_CURSOR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Selects the cursor type.  PDO currently supports either
     <strong><code><a href="pdo.constants.php#pdo.constants.cursor-fwdonly">PDO::CURSOR_FWDONLY</a></code></strong> and
     <strong><code><a href="pdo.constants.php#pdo.constants.cursor-scroll">PDO::CURSOR_SCROLL</a></code></strong>. Stick with
     <strong><code><a href="pdo.constants.php#pdo.constants.cursor-fwdonly">PDO::CURSOR_FWDONLY</a></code></strong> unless you know that you need a
     scrollable cursor.
    </span>
   </dd>
  

  
   <dt id="pdo.constants.attr-driver-name">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-driver-name">PDO::ATTR_DRIVER_NAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returns the name of the driver.
    </span>
    <p class="para">
     <div class="example" id="example-1110"><p><strong>Example #1 using <strong><code><a href="pdo.constants.php#pdo.constants.attr-driver-name">PDO::ATTR_DRIVER_NAME</a></code></strong></strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_DRIVER_NAME</span><span style="color: #007700">) == </span><span style="color: #DD0000">'mysql'</span><span style="color: #007700">) {<br />  echo </span><span style="color: #DD0000">"Running on mysql; doing something mysql specific here\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     </div>
     </p>
   </dd>
  
  
   <dt id="pdo.constants.attr-oracle-nulls">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-oracle-nulls">PDO::ATTR_ORACLE_NULLS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Convert empty strings to SQL NULL values on data fetches.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-persistent">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-persistent">PDO::ATTR_PERSISTENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Request a persistent connection, rather than creating a new connection.
     See <a href="pdo.connections.php" class="link">Connections and Connection
     management</a> for more information on this attribute.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-statement-class">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-statement-class">PDO::ATTR_STATEMENT_CLASS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sets the class name of which statements are returned as.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-fetch-catalog-names">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-fetch-catalog-names">PDO::ATTR_FETCH_CATALOG_NAMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Prepend the containing catalog name to each column name returned in the
     result set. The catalog name and column name are separated by a decimal
     (.) character.  Support of this attribute is at the driver level; it may
     not be supported by your driver.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-fetch-table-names">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-fetch-table-names">PDO::ATTR_FETCH_TABLE_NAMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Prepend the containing table name to each column name returned in the
     result set. The table name and column name are separated by a decimal (.)
     character. Support of this attribute is at the driver level; it may not
     be supported by your driver.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-stringify-fetches">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-stringify-fetches">PDO::ATTR_STRINGIFY_FETCHES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Forces all fetched values (except <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>) to be treated as strings.
     <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> values remain unchanged unless <strong><code><a href="pdo.constants.php#pdo.constants.attr-oracle-nulls">PDO::ATTR_ORACLE_NULLS</a></code></strong>
     is set to <strong><code><a href="pdo.constants.php#pdo.constants.null-to-string">PDO::NULL_TO_STRING</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-max-column-len">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-max-column-len">PDO::ATTR_MAX_COLUMN_LEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sets the maximum column name length.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-default-fetch-mode">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-default-fetch-mode">PDO::ATTR_DEFAULT_FETCH_MODE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-emulate-prepares">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-emulate-prepares">PDO::ATTR_EMULATE_PREPARES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="pdo.constants.attr-default-str-param">
    <strong><code><a href="pdo.constants.php#pdo.constants.attr-default-str-param">PDO::ATTR_DEFAULT_STR_PARAM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sets the default string parameter type, this can be one of <strong><code><a href="pdo.constants.php#pdo.constants.param-str-natl">PDO::PARAM_STR_NATL</a></code></strong>
     and <strong><code><a href="pdo.constants.php#pdo.constants.param-str-char">PDO::PARAM_STR_CHAR</a></code></strong>.
    </span>
    <span class="simpara">
     Available since PHP 7.2.0.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.errmode-silent">
    <strong><code><a href="pdo.constants.php#pdo.constants.errmode-silent">PDO::ERRMODE_SILENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Do not raise an error or exception if an error occurs. The developer is
     expected to explicitly check for errors.  This is the default mode.
     See <a href="pdo.error-handling.php" class="link">Errors and error handling</a>
     for more information about this attribute.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.errmode-warning">
    <strong><code><a href="pdo.constants.php#pdo.constants.errmode-warning">PDO::ERRMODE_WARNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Issue a PHP <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> message if an error occurs.
     See <a href="pdo.error-handling.php" class="link">Errors and error handling</a>
     for more information about this attribute.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.errmode-exception">
    <strong><code><a href="pdo.constants.php#pdo.constants.errmode-exception">PDO::ERRMODE_EXCEPTION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Throw a <span class="classname"><a href="class.pdoexception.php" class="classname">PDOException</a></span> if an error occurs.
     See <a href="pdo.error-handling.php" class="link">Errors and error handling</a>
     for more information about this attribute.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.case-natural">
    <strong><code><a href="pdo.constants.php#pdo.constants.case-natural">PDO::CASE_NATURAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Leave column names as returned by the database driver.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.case-lower">
    <strong><code><a href="pdo.constants.php#pdo.constants.case-lower">PDO::CASE_LOWER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Force column names to lower case.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.case-upper">
    <strong><code><a href="pdo.constants.php#pdo.constants.case-upper">PDO::CASE_UPPER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Force column names to upper case.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.null-natural">
    <strong><code><a href="pdo.constants.php#pdo.constants.null-natural">PDO::NULL_NATURAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="pdo.constants.null-empty-string">
    <strong><code><a href="pdo.constants.php#pdo.constants.null-empty-string">PDO::NULL_EMPTY_STRING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="pdo.constants.null-to-string">
    <strong><code><a href="pdo.constants.php#pdo.constants.null-to-string">PDO::NULL_TO_STRING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-ori-next">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-ori-next">PDO::FETCH_ORI_NEXT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Fetch the next row in the result set. Valid only for scrollable cursors.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-ori-prior">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-ori-prior">PDO::FETCH_ORI_PRIOR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Fetch the previous row in the result set. Valid only for scrollable
     cursors.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-ori-first">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-ori-first">PDO::FETCH_ORI_FIRST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Fetch the first row in the result set. Valid only for scrollable cursors.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-ori-last">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-ori-last">PDO::FETCH_ORI_LAST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Fetch the last row in the result set. Valid only for scrollable cursors.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-ori-abs">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-ori-abs">PDO::FETCH_ORI_ABS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Fetch the requested row by row number from the result set. Valid only
     for scrollable cursors.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.fetch-ori-rel">
    <strong><code><a href="pdo.constants.php#pdo.constants.fetch-ori-rel">PDO::FETCH_ORI_REL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Fetch the requested row by relative position from the current position
     of the cursor in the result set. Valid only for scrollable cursors.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.cursor-fwdonly">
    <strong><code><a href="pdo.constants.php#pdo.constants.cursor-fwdonly">PDO::CURSOR_FWDONLY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Create a <span class="classname"><a href="class.pdostatement.php" class="classname">PDOStatement</a></span> object with a forward-only cursor.  This is the
     default cursor choice, as it is the fastest and most common data access
     pattern in PHP.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.cursor-scroll">
    <strong><code><a href="pdo.constants.php#pdo.constants.cursor-scroll">PDO::CURSOR_SCROLL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Create a <span class="classname"><a href="class.pdostatement.php" class="classname">PDOStatement</a></span> object with a scrollable cursor. Pass the
     <code class="literal">PDO::FETCH_ORI_*</code> constants to control the rows fetched from the result set.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.err-none">
    <strong><code><a href="pdo.constants.php#pdo.constants.err-none">PDO::ERR_NONE</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Corresponds to SQLSTATE &#039;00000&#039;, meaning that the SQL statement was
     successfully issued with no errors or warnings.  This constant is for
     your convenience when checking <span class="methodname"><a href="pdo.errorcode.php" class="methodname">PDO::errorCode()</a></span> or
     <span class="methodname"><a href="pdostatement.errorcode.php" class="methodname">PDOStatement::errorCode()</a></span> to determine if an error
     occurred.  You will usually know if this is the case by examining the
     return code from the method that raised the error condition anyway.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-evt-alloc">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-evt-alloc">PDO::PARAM_EVT_ALLOC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Allocation event
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-evt-free">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-evt-free">PDO::PARAM_EVT_FREE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Deallocation event
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-evt-exec-pre">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-evt-exec-pre">PDO::PARAM_EVT_EXEC_PRE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Event triggered prior to execution of a prepared statement.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-evt-exec-post">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-evt-exec-post">PDO::PARAM_EVT_EXEC_POST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Event triggered subsequent to execution of a prepared statement.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-evt-fetch-pre">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-evt-fetch-pre">PDO::PARAM_EVT_FETCH_PRE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Event triggered prior to fetching a result from a resultset.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-evt-fetch-post">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-evt-fetch-post">PDO::PARAM_EVT_FETCH_POST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Event triggered subsequent to fetching a result from a resultset.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.param-evt-normalize">
    <strong><code><a href="pdo.constants.php#pdo.constants.param-evt-normalize">PDO::PARAM_EVT_NORMALIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Event triggered during bound parameter registration
     allowing the driver to normalize the parameter name.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.sqlite-deterministic">
    <strong><code><a href="pdo.constants.php#pdo.constants.sqlite-deterministic">PDO::SQLITE_DETERMINISTIC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Specifies that a function created with <span class="methodname"><a href="pdo.sqlitecreatefunction.php" class="methodname">PDO::sqliteCreateFunction()</a></span>
      is deterministic, i.e. it always returns the same result given the same inputs within
      a single SQL statement. (Available as of PHP 7.1.4.)
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdo.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdo.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111212">  <div class="votes">
    <div id="Vu111212">
    <a href="/manual/vote-note.php?id=111212&amp;page=pdo.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111212">
    <a href="/manual/vote-note.php?id=111212&amp;page=pdo.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111212" title="56% like this...">
    20
    </div>
  </div>
  <a href="#111212" class="name">
  <strong class="user"><em>sam at xnet dot tk</em></strong></a><a class="genanchor" href="#111212"> &para;</a><div class="date" title="2013-01-26 07:37"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111212">
<div class="phpcode"><code><span class="html">It should be noted that PDO::FETCH_CLASS will call the constructor *after* setting the values (or calling __set).</span></code></div>
  </div>
 </div>
  <div class="note" id="124274">  <div class="votes">
    <div id="Vu124274">
    <a href="/manual/vote-note.php?id=124274&amp;page=pdo.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124274">
    <a href="/manual/vote-note.php?id=124274&amp;page=pdo.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124274" title="68% like this...">
    6
    </div>
  </div>
  <a href="#124274" class="name">
  <strong class="user"><em>kevin at kevinlocke dot name</em></strong></a><a class="genanchor" href="#124274"> &para;</a><div class="date" title="2019-10-08 04:38"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124274">
<div class="phpcode"><code><span class="html">PDO::PARAM_STR_CHAR and PDO::PARAM_STR_NATL must be combined with PDO::PARAM_STR using bitwise-OR for parameter binding.<br /><br />These flags control value quoting (e.g. PDO::quote) and, in some situations (see below), parameter binding  (e.g. PDO::bindParam, PDO::bindValue) to prefix string literals with N'' as defined in SQL-92.  As of PHP 7.3, only dblib and mysql support these flags.  For the mysql driver, the flags only affect parameter binding when PDO::ATTR_EMULATE_PREPARES is true (the default).<br /><br />MySQL and MariaDB interpret string literals prefixed with N as being utf8 (not utf8mb4) regardless of `SET NAMES` or the charset parameter.  This can cause problems if the database/table/column charset is not utf8.  For example, in a database using utf8mb4, the query "SELECT * FROM table WHERE col = :param" and bindValue(":param", "\u{1F600}", PDO::PARAM_STR | PDO::PARAM_STR_NATL) will cause "PDOException: SQLSTATE[HY000]: General error: 1267 Illegal mix of collations (utf8mb4_general_ci,IMPLICIT) and (utf8_general_ci,COERCIBLE) for operation '='".  Using PDO::PARAM_STR without PDO::PARAM_STR_NATL and ensuring the charset DSN parameter is set correctly can avoid this issue.<br /><br />See:<br /><a href="https://wiki.php.net/rfc/extended-string-types-for-pdo" rel="nofollow" target="_blank">https://wiki.php.net/rfc/extended-string-types-for-pdo</a><br /><a href="https://mariadb.com/kb/en/library/string-literals/" rel="nofollow" target="_blank">https://mariadb.com/kb/en/library/string-literals/</a><br /><a href="https://dev.mysql.com/doc/refman/8.0/en/string-literals.html" rel="nofollow" target="_blank">https://dev.mysql.com/doc/refman/8.0/en/string-literals.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="119476">  <div class="votes">
    <div id="Vu119476">
    <a href="/manual/vote-note.php?id=119476&amp;page=pdo.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119476">
    <a href="/manual/vote-note.php?id=119476&amp;page=pdo.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119476" title="58% like this...">
    9
    </div>
  </div>
  <a href="#119476" class="name">
  <strong class="user"><em>Oleg Andreyev</em></strong></a><a class="genanchor" href="#119476"> &para;</a><div class="date" title="2016-06-16 11:35"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119476">
<div class="phpcode"><code><span class="html">Default value for \PDO::ATTR_TIMEOUT is 30 seconds.<br />Ref.: <a href="https://github.com/php/php-src/blob/PHP-7.1.0/ext/pdo_mysql/mysql_driver.c#L600" rel="nofollow" target="_blank">https://github.com/php/php-src/blob/PHP-7.1.0/ext/pdo_mysql/mysql_driver.c#L600</a></span></code></div>
  </div>
 </div>
  <div class="note" id="129168">  <div class="votes">
    <div id="Vu129168">
    <a href="/manual/vote-note.php?id=129168&amp;page=pdo.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129168">
    <a href="/manual/vote-note.php?id=129168&amp;page=pdo.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129168" title="60% like this...">
    1
    </div>
  </div>
  <a href="#129168" class="name">
  <strong class="user"><em>happy dot job7348 at fastmail dot com</em></strong></a><a class="genanchor" href="#129168"> &para;</a><div class="date" title="2024-01-17 06:47"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129168">
<div class="phpcode"><code><span class="html">To bind a float, use PDO::PARAM_STR with bindValue. You can skip the PDO::PARAM_STR because it's the default option. Binding with bindParam will change the type of the bound variable to a string, which can lead to type errors.</span></code></div>
  </div>
 </div>
  <div class="note" id="125491">  <div class="votes">
    <div id="Vu125491">
    <a href="/manual/vote-note.php?id=125491&amp;page=pdo.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125491">
    <a href="/manual/vote-note.php?id=125491&amp;page=pdo.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125491" title="57% like this...">
    2
    </div>
  </div>
  <a href="#125491" class="name">
  <strong class="user"><em>Sbastien</em></strong></a><a class="genanchor" href="#125491"> &para;</a><div class="date" title="2020-11-06 12:37"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125491">
<div class="phpcode"><code><span class="html">PDO::FETCH_UNIQUE not only fetches the unique values, it also uses the first SQL column as array key result, what is very useful for create quickly an index, eg :<br /><br /><span class="default">&lt;?php<br /><br />$sql </span><span class="keyword">= &lt;&lt;&lt;SQL<br /></span><span class="string">    SELECT ALL<br />        c1, -- For result indexing<br />        c1, c2<br />    FROM (<br />        VALUES<br />            ROW('ID-1', 'Value 1'),<br />            ROW('ID-2', 'Value 2a'),<br />            ROW('ID-2', 'Value 2b'),<br />            ROW('ID-3', 'Value 3')<br />    ) AS t (c1, c2);<br /></span><span class="keyword">    SQL;<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_UNIQUE</span><span class="keyword">));<br /><br /></span><span class="comment">/*<br />Gives :<br />ID-1 =&gt; [c1 =&gt; ID-1,  c2 =&gt; Value 1]<br />ID-2 =&gt; [c1 =&gt; ID-2b, c2 =&gt; Value 2b]<br />ID-3 =&gt; [c1 =&gt; ID-3,  c2 =&gt; Value 3]<br />*/<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124663">  <div class="votes">
    <div id="Vu124663">
    <a href="/manual/vote-note.php?id=124663&amp;page=pdo.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124663">
    <a href="/manual/vote-note.php?id=124663&amp;page=pdo.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124663" title="53% like this...">
    1
    </div>
  </div>
  <a href="#124663" class="name">
  <strong class="user"><em>todd at toddwiggins dot com dot au</em></strong></a><a class="genanchor" href="#124663"> &para;</a><div class="date" title="2020-01-29 11:48"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124663">
<div class="phpcode"><code><span class="html">Reference to all the PDO::MYSQL_* constants is available in MySQL's documentation for the driver here: <a href="https://dev.mysql.com/doc/connectors/en/apis-php-pdo-mysql.html" rel="nofollow" target="_blank">https://dev.mysql.com/doc/connectors/en/apis-php-pdo-mysql.html</a><br /><br />Such as the ones I was looking for PDO::MYSQL_ATTR_SSL_CA and PDO::MYSQL_ATTR_SSL_CAPATH which are not listed on this page.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdo.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.pdo.php">PDO</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.pdo.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="pdo.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="pdo.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="pdo.connections.php" title="Connections and Connection management">Connections and Connection management</a>
                        </li>
                                                <li class="">
                            <a href="pdo.transactions.php" title="Transactions and auto-&#8203;commit">Transactions and auto-&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="pdo.prepared-statements.php" title="Prepared statements and stored procedures">Prepared statements and stored procedures</a>
                        </li>
                                                <li class="">
                            <a href="pdo.error-handling.php" title="Errors and error handling">Errors and error handling</a>
                        </li>
                                                <li class="">
                            <a href="pdo.lobs.php" title="Large Objects (LOBs)">Large Objects (LOBs)</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo.php" title="PDO">PDO</a>
                        </li>
                                                <li class="">
                            <a href="class.pdostatement.php" title="PDOStatement">PDOStatement</a>
                        </li>
                                                <li class="">
                            <a href="class.pdorow.php" title="PDORow">PDORow</a>
                        </li>
                                                <li class="">
                            <a href="class.pdoexception.php" title="PDOException">PDOException</a>
                        </li>
                                                <li class="">
                            <a href="pdo.drivers.php" title="PDO Drivers">PDO Drivers</a>
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
