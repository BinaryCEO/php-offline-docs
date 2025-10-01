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

 <link rel="canonical" href="https://www.php.net/manual/en/reserved.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reserved.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reserved.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reserved.php">
 <link rel="prev" href="https://www.php.net/manual/en/reserved.classes.php">
 <link rel="next" href="https://www.php.net/manual/en/reserved.other-reserved-words.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reserved.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reserved.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reserved.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reserved.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reserved.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reserved.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reserved.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reserved.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reserved.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reserved.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reserved.constants.php" hreflang="zh">

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
        <a href="reserved.other-reserved-words.php">
          List of other reserved words &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reserved.classes.php">
          &laquo; Predefined Classes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='reserved.php'>List of Reserved Words</a></li>      </ul>
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
            <option value='en/reserved.constants.php' selected="selected">English</option>
            <option value='de/reserved.constants.php'>German</option>
            <option value='es/reserved.constants.php'>Spanish</option>
            <option value='fr/reserved.constants.php'>French</option>
            <option value='it/reserved.constants.php'>Italian</option>
            <option value='ja/reserved.constants.php'>Japanese</option>
            <option value='pt_BR/reserved.constants.php'>Brazilian Portuguese</option>
            <option value='ru/reserved.constants.php'>Russian</option>
            <option value='tr/reserved.constants.php'>Turkish</option>
            <option value='uk/reserved.constants.php'>Ukrainian</option>
            <option value='zh/reserved.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reserved.constants" class="sect1">
  <h2 class="title">Predefined Constants</h2>
  

<div class="sect2" id="reserved.constants.core">
 <h3 class="title">Core Predefined Constants</h3>
 <p class="simpara">
  These constants are defined by the PHP core. This includes PHP,
  the Zend engine, and SAPI modules.
 </p>
 <dl>
  
   <dt id="constant.php-version">
    <strong><code><a href="reserved.constants.php#constant.php-version">PHP_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The current PHP version as a string in
     &quot;major.minor.release[extra]&quot; notation.
    </span>
   </dd>
  
  
   <dt id="constant.php-major-version">
    <strong><code><a href="reserved.constants.php#constant.php-major-version">PHP_MAJOR_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The current PHP &quot;major&quot; version as an integer (e.g., int(5)
     from version &quot;5.2.7-extra&quot;).
    </span>
   </dd>
  
  
   <dt id="constant.php-minor-version">
    <strong><code><a href="reserved.constants.php#constant.php-minor-version">PHP_MINOR_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The current PHP &quot;minor&quot; version as an integer (e.g., int(2)
     from version &quot;5.2.7-extra&quot;).
    </span>
   </dd>
  
  
   <dt id="constant.php-release-version">
    <strong><code><a href="reserved.constants.php#constant.php-release-version">PHP_RELEASE_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The current PHP &quot;release&quot; version as an integer (e.g., int(7)
     from version &quot;5.2.7-extra&quot;).
    </span>
   </dd>
  
  
   <dt id="constant.php-version-id">
    <strong><code><a href="reserved.constants.php#constant.php-version-id">PHP_VERSION_ID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The current PHP version as an integer, useful for
     version comparisons (e.g., int(50207) from version &quot;5.2.7-extra&quot;).
    </span>
   </dd>
  
  
   <dt id="constant.php-extra-version">
    <strong><code><a href="reserved.constants.php#constant.php-extra-version">PHP_EXTRA_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The current PHP &quot;extra&quot; version as a string (e.g., &#039;-extra&#039;
     from version &quot;5.2.7-extra&quot;). Often used by distribution
     vendors to indicate a package version.
    </span>
   </dd>
  
  
   <dt id="constant.zend-thread-safe">
    <strong><code><a href="reserved.constants.php#constant.zend-thread-safe">ZEND_THREAD_SAFE</a></code></strong>
    (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates whether the current build of PHP is thread safe.
    </span>
   </dd>
  
  
   <dt id="constant.zend-debug-build">
    <strong><code><a href="reserved.constants.php#constant.zend-debug-build">ZEND_DEBUG_BUILD</a></code></strong>
    (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates whether the current build of PHP is a debug build.
    </span>
   </dd>
  
  
   <dt id="constant.php-zts">
    <strong><code><a href="reserved.constants.php#constant.php-zts">PHP_ZTS</a></code></strong>
    (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>)
    Alias of <strong><code><a href="reserved.constants.php#constant.zend-thread-safe">ZEND_THREAD_SAFE</a></code></strong>
   </dt>
   <dd>
    <span class="simpara">
     Indicates whether the current build of PHP is thread safe.
    </span>
   </dd>
  
  
   <dt id="constant.php-debug">
    <strong><code><a href="reserved.constants.php#constant.php-debug">PHP_DEBUG</a></code></strong>
    (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>)
    Alias of <strong><code><a href="reserved.constants.php#constant.zend-debug-build">ZEND_DEBUG_BUILD</a></code></strong>
   </dt>
   <dd>
    <span class="simpara">
     Indicates whether the current build of PHP is a debug build.
    </span>
   </dd>
  
  
   <dt id="constant.debug-backtrace-provide-object">
    <strong><code><a href="reserved.constants.php#constant.debug-backtrace-provide-object">DEBUG_BACKTRACE_PROVIDE_OBJECT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Populate the &quot;object&quot; index.
    </span>
   </dd>
  
  
   <dt id="constant.debug-backtrace-ignore-args">
    <strong><code><a href="reserved.constants.php#constant.debug-backtrace-ignore-args">DEBUG_BACKTRACE_IGNORE_ARGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Don&#039;t include the argument information for functions in the stack trace.
    </span>
   </dd>
  
  
   <dt id="constant.php-maxpathlen">
    <strong><code><a href="reserved.constants.php#constant.php-maxpathlen">PHP_MAXPATHLEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The maximum length of filenames (including path) supported
     by this build of PHP.
    </span>
   </dd>
  
  
   <dt id="constant.php-os">
    <strong><code><a href="reserved.constants.php#constant.php-os">PHP_OS</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The operating system PHP was built for.
    </span>
   </dd>
  
  
   <dt id="constant.php-os-family">
    <strong><code><a href="reserved.constants.php#constant.php-os-family">PHP_OS_FAMILY</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The operating system family PHP was built for. One of
     <code class="literal">&#039;Windows&#039;</code>, <code class="literal">&#039;BSD&#039;</code>,
     <code class="literal">&#039;Darwin&#039;</code>, <code class="literal">&#039;Solaris&#039;</code>,
     <code class="literal">&#039;Linux&#039;</code> or <code class="literal">&#039;Unknown&#039;</code>.
     Available as of PHP 7.2.0.
    </span>
   </dd>
  
  
   <dt id="constant.php-sapi">
    <strong><code><a href="reserved.constants.php#constant.php-sapi">PHP_SAPI</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The Server API for this build of PHP.
     See also <span class="function"><a href="function.php-sapi-name.php" class="function">php_sapi_name()</a></span>.
    </span>
   </dd>
  
  
   <dt id="constant.php-eol">
    <strong><code><a href="reserved.constants.php#constant.php-eol">PHP_EOL</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The correct &#039;End Of Line&#039; symbol for this platform.
    </span>
   </dd>
  
  
   <dt id="constant.php-int-max">
    <strong><code><a href="reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The largest integer supported in this build of PHP. Usually int(2147483647)
     in 32 bit systems and int(9223372036854775807) in 64 bit systems.
    </span>
   </dd>
  
  
   <dt id="constant.php-int-min">
    <strong><code><a href="reserved.constants.php#constant.php-int-min">PHP_INT_MIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The smallest integer supported in this build of PHP. Usually int(-2147483648) in 32 bit systems and
     int(-9223372036854775808) in 64 bit systems.
     Usually, PHP_INT_MIN === ~PHP_INT_MAX.
    </span>
   </dd>
  
  
   <dt id="constant.php-int-size">
    <strong><code><a href="reserved.constants.php#constant.php-int-size">PHP_INT_SIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The size of an integer in bytes in this build of PHP.
    </span>
   </dd>
  
  
   <dt id="constant.php-float-dig">
    <strong><code><a href="reserved.constants.php#constant.php-float-dig">PHP_FLOAT_DIG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Number of decimal digits that can be rounded into a float and back
     without precision loss.
     Available as of PHP 7.2.0.
    </span>
   </dd>
  
  
   <dt id="constant.php-float-epsilon">
    <strong><code><a href="reserved.constants.php#constant.php-float-epsilon">PHP_FLOAT_EPSILON</a></code></strong>
    (<span class="type"><a href="language.types.float.php" class="type float">float</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Smallest representable positive number x, so that <code class="literal">x + 1.0 !=
     1.0</code>.
     Available as of PHP 7.2.0.
    </span>
   </dd>
  
  
   <dt id="constant.php-float-min">
    <strong><code><a href="reserved.constants.php#constant.php-float-min">PHP_FLOAT_MIN</a></code></strong>
    (<span class="type"><a href="language.types.float.php" class="type float">float</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Smallest representable <em>positive</em> floating point number.
     If you need the smallest representable <em>negative</em> floating point number, use <code class="literal">- PHP_FLOAT_MAX</code>.
     Available as of PHP 7.2.0.
    </span>
   </dd>
  
  
   <dt id="constant.php-float-max">
    <strong><code><a href="reserved.constants.php#constant.php-float-max">PHP_FLOAT_MAX</a></code></strong>
    (<span class="type"><a href="language.types.float.php" class="type float">float</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Largest representable floating point number.
     Available as of PHP 7.2.0.
    </span>
   </dd>
  
  
   <dt id="constant.default-include-path">
    <strong><code><a href="reserved.constants.php#constant.default-include-path">DEFAULT_INCLUDE_PATH</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.pear-install-dir">
    <strong><code><a href="reserved.constants.php#constant.pear-install-dir">PEAR_INSTALL_DIR</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.pear-extension-dir">
    <strong><code><a href="reserved.constants.php#constant.pear-extension-dir">PEAR_EXTENSION_DIR</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.php-extension-dir">
    <strong><code><a href="reserved.constants.php#constant.php-extension-dir">PHP_EXTENSION_DIR</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The default directory where to look for dynamically loadable extensions
     (unless overridden by <a href="ini.core.php#ini.extension-dir" class="link">extension_dir</a>).
     Defaults to <strong><code><a href="reserved.constants.php#constant.php-prefix">PHP_PREFIX</a></code></strong> (or <code class="code">PHP_PREFIX . &quot;\\ext&quot;</code> on Windows).
    </span>
   </dd>
  
  
   <dt id="constant.php-prefix">
    <strong><code><a href="reserved.constants.php#constant.php-prefix">PHP_PREFIX</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The value <strong class="option configure">--prefix</strong> was set to at configure.
     On Windows, it is the value <strong class="option configure">--with-prefix</strong>
     was set to at configure.
    </span>
   </dd>
  
  
   <dt id="constant.php-bindir">
    <strong><code><a href="reserved.constants.php#constant.php-bindir">PHP_BINDIR</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The value <strong class="option configure">--bindir</strong> was set to at configure.
     On Windows, it is the value <strong class="option configure">--with-prefix</strong>
     was set to at configure.
    </span>
   </dd>
  
  
   <dt id="constant.php-sbindir">
    <strong><code><a href="reserved.constants.php#constant.php-sbindir">PHP_SBINDIR</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The value <strong class="option configure">--sbindir</strong> was set to at configure.
     On Windows, it is the value <strong class="option configure">--with-prefix</strong>
     was set to at configure. Available as of PHP 8.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.php-binary">
    <strong><code><a href="reserved.constants.php#constant.php-binary">PHP_BINARY</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies the PHP binary path during script execution.
    </span>
   </dd>
  
  
   <dt id="constant.php-mandir">
    <strong><code><a href="reserved.constants.php#constant.php-mandir">PHP_MANDIR</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Specifies where the manpages were installed into.
    </span>
   </dd>
  
  
   <dt id="constant.php-libdir">
    <strong><code><a href="reserved.constants.php#constant.php-libdir">PHP_LIBDIR</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.php-datadir">
    <strong><code><a href="reserved.constants.php#constant.php-datadir">PHP_DATADIR</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.php-sysconfdir">
    <strong><code><a href="reserved.constants.php#constant.php-sysconfdir">PHP_SYSCONFDIR</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.php-localstatedir">
    <strong><code><a href="reserved.constants.php#constant.php-localstatedir">PHP_LOCALSTATEDIR</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.php-config-file-path">
    <strong><code><a href="reserved.constants.php#constant.php-config-file-path">PHP_CONFIG_FILE_PATH</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.php-config-file-scan-dir">
    <strong><code><a href="reserved.constants.php#constant.php-config-file-scan-dir">PHP_CONFIG_FILE_SCAN_DIR</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.php-shlib-suffix">
    <strong><code><a href="reserved.constants.php#constant.php-shlib-suffix">PHP_SHLIB_SUFFIX</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The build-platform&#039;s shared library suffix, such as &quot;so&quot; (most Unixes)
     or &quot;dll&quot; (Windows).
    </span>
   </dd>
  
  
   <dt id="constant.php-fd-setsize">
    <strong><code><a href="reserved.constants.php#constant.php-fd-setsize">PHP_FD_SETSIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The maximum number of file descriptors for select system calls. Available
     as of PHP 7.1.0.
    </span>
   </dd>
  
  
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-parse">E_PARSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-core-error">E_CORE_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-core-warning">E_CORE_WARNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-compile-error">E_COMPILE_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-compile-warning">E_COMPILE_WARNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-user-error">E_USER_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-user-warning">E_USER_WARNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-user-notice">E_USER_NOTICE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-recoverable-error">E_RECOVERABLE_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-user-deprecated">E_USER_DEPRECATED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-all">E_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dt>
    <strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     <a href="errorfunc.constants.php" class="link">Error reporting constants</a>
    </span>
   </dd>
  
  
   <dt>
    <strong><code><a href="misc.constants.php#constant.compiler-halt-offset">__COMPILER_HALT_OFFSET__</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.true">
    <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
    (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     See <a href="language.types.boolean.php" class="link">Booleans</a>.
    </span>
   </dd>
  
  
   <dt id="constant.false">
    <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
    (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     See <a href="language.types.boolean.php" class="link">Booleans</a>.
    </span>
   </dd>
  
  
   <dt id="constant.null">
    <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>
    (<span class="type"><a href="language.types.null.php" class="type null">null</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     See <a href="language.types.null.php" class="link">Null</a>.
    </span>
   </dd>
  
  
   <dt id="constant.php-windows-event-ctrl-c">
    <strong><code><a href="reserved.constants.php#constant.php-windows-event-ctrl-c">PHP_WINDOWS_EVENT_CTRL_C</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A Windows
     <kbd class="keycombo">
      <kbd class="keycap">CTRL</kbd>
      +<kbd class="keycap">C</kbd>
     </kbd>
     event.
     Available as of PHP 7.4.0 (Windows only).
    </span>
   </dd>
  
  
   <dt id="constant.php-windows-event-ctrl-break">
    <strong><code><a href="reserved.constants.php#constant.php-windows-event-ctrl-break">PHP_WINDOWS_EVENT_CTRL_BREAK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A Windows
     <kbd class="keycombo">
      <kbd class="keycap">CTRL</kbd>
      +<kbd class="keycap">BREAK</kbd>
     </kbd>
     event.
     Available as of PHP 7.4.0 (Windows only).
    </span>
   </dd>
  
  
   <dt id="constant.php-cli-process-title">
    <strong><code><a href="reserved.constants.php#constant.php-cli-process-title">PHP_CLI_PROCESS_TITLE</a></code></strong>
    (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates whether the setting and getting of the process title is available.
     Available only under the CLI SAPI.
    </span>
   </dd>
  
  
   <dt id="constant.stderr">
    <strong><code><a href="reserved.constants.php#constant.stderr">STDERR</a></code></strong>
    (<span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     An already opened stream to <code class="literal">stderr</code>.
     Available only under the CLI SAPI.
    </span>
   </dd>
  
  
   <dt id="constant.stdin">
    <strong><code><a href="reserved.constants.php#constant.stdin">STDIN</a></code></strong>
    (<span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     An already opened stream to <code class="literal">stdin</code>.
     Available only under the CLI SAPI.
    </span>
   </dd>
  
  
   <dt id="constant.stdout">
    <strong><code><a href="reserved.constants.php#constant.stdout">STDOUT</a></code></strong>
    (<span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     An already opened stream to <code class="literal">stdout</code>.
     Available only under the CLI SAPI.
    </span>
   </dd>
  
 </dl>
 <p class="para">
  See also: <a href="language.constants.magic.php" class="link">Magic
  constants</a>.
 </p>
</div>


  


 <div class="sect2" id="reserved.constants.standard">
   <h3 class="title">Standard Predefined Constants</h3>
   <p class="simpara">
    All constants from <a href="extensions.membership.php#extensions.membership.core" class="link">core
    extensions</a> are defined in PHP by default.
   </p>
 </div>



 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/reserved.constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freserved.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reserved.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reserved.php">List of Reserved Words</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="reserved.keywords.php" title="List of Keywords">List of Keywords</a>
                        </li>
                                                <li class="">
                            <a href="reserved.classes.php" title="Predefined Classes">Predefined Classes</a>
                        </li>
                                                <li class="current">
                            <a href="reserved.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="reserved.other-reserved-words.php" title="List of other reserved words">List of other reserved words</a>
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
