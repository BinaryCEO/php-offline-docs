<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SQLite3Result::fetchArray - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/sqlite3result.fetcharray.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/sqlite3result.fetcharray.php">
 <link rel="alternate" href="https://www.php.net/manual/en/sqlite3result.fetcharray.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.sqlite3result.php">
 <link rel="prev" href="https://www.php.net/manual/en/sqlite3result.construct.php">
 <link rel="next" href="https://www.php.net/manual/en/sqlite3result.finalize.php">

 <link rel="alternate" href="https://www.php.net/manual/en/sqlite3result.fetcharray.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/sqlite3result.fetcharray.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/sqlite3result.fetcharray.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/sqlite3result.fetcharray.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/sqlite3result.fetcharray.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/sqlite3result.fetcharray.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/sqlite3result.fetcharray.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/sqlite3result.fetcharray.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/sqlite3result.fetcharray.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/sqlite3result.fetcharray.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/sqlite3result.fetcharray.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetches a result row as an associative or numerically indexed array or both" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SQLite3Result::fetchArray - Manual" />
<meta name="twitter:description" content="Fetches a result row as an associative or numerically indexed array or both" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SQLite3Result::fetchArray - Manual" />
<meta itemprop="description" content="Fetches a result row as an associative or numerically indexed array or both" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetches a result row as an associative or numerically indexed array or both" />

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
        <a href="sqlite3result.finalize.php">
          SQLite3Result::finalize &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="sqlite3result.construct.php">
          &laquo; SQLite3Result::__construct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.sqlite3.php'>SQLite3</a></li>      <li><a href='class.sqlite3result.php'>SQLite3Result</a></li>      </ul>
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
            <option value='en/sqlite3result.fetcharray.php' selected="selected">English</option>
            <option value='de/sqlite3result.fetcharray.php'>German</option>
            <option value='es/sqlite3result.fetcharray.php'>Spanish</option>
            <option value='fr/sqlite3result.fetcharray.php'>French</option>
            <option value='it/sqlite3result.fetcharray.php'>Italian</option>
            <option value='ja/sqlite3result.fetcharray.php'>Japanese</option>
            <option value='pt_BR/sqlite3result.fetcharray.php'>Brazilian Portuguese</option>
            <option value='ru/sqlite3result.fetcharray.php'>Russian</option>
            <option value='tr/sqlite3result.fetcharray.php'>Turkish</option>
            <option value='uk/sqlite3result.fetcharray.php'>Ukrainian</option>
            <option value='zh/sqlite3result.fetcharray.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="sqlite3result.fetcharray" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SQLite3Result::fetchArray</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SQLite3Result::fetchArray</span> &mdash; <span class="dc-title">
   Fetches a result row as an associative or numerically indexed array or both
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-sqlite3result.fetcharray-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><strong>SQLite3Result::fetchArray</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = <strong><code><a href="sqlite3.constants.php#constant.sqlite3-both">SQLITE3_BOTH</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Fetches a result row as an associative or numerically indexed array or both.
   By default, fetches as both.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-sqlite3result.fetcharray-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       Controls how the next row will be returned to the caller. This value
       must be one of either <strong><code><a href="sqlite3.constants.php#constant.sqlite3-assoc">SQLITE3_ASSOC</a></code></strong>,
       <strong><code><a href="sqlite3.constants.php#constant.sqlite3-num">SQLITE3_NUM</a></code></strong>, or <strong><code><a href="sqlite3.constants.php#constant.sqlite3-both">SQLITE3_BOTH</a></code></strong>.
       <ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          <strong><code><a href="sqlite3.constants.php#constant.sqlite3-assoc">SQLITE3_ASSOC</a></code></strong>: returns an array indexed by column
          name as returned in the corresponding result set
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="sqlite3.constants.php#constant.sqlite3-num">SQLITE3_NUM</a></code></strong>: returns an array indexed by column
          number as returned in the corresponding result set, starting at
          column 0
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="sqlite3.constants.php#constant.sqlite3-both">SQLITE3_BOTH</a></code></strong>: returns an array indexed by both
          column name and number as returned in the corresponding result set,
          starting at column 0
         </p>
        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-sqlite3result.fetcharray-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a result row as an associatively or numerically indexed array or
   both. Alternately will return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if there are no more rows.
  </p>
  <p class="para">
   The types of the values of the returned array are mapped from SQLite3 types
   as follows: integers are mapped to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> if they fit into the
   range <strong><code><a href="reserved.constants.php#constant.php-int-min">PHP_INT_MIN</a></code></strong>..<strong><code><a href="reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></code></strong>, and
   to <span class="type"><a href="language.types.string.php" class="type string">string</a></span> otherwise. Floats are mapped to <span class="type"><a href="language.types.float.php" class="type float">float</a></span>,
   <code class="literal">NULL</code> values are mapped to <span class="type"><a href="language.types.null.php" class="type null">null</a></span>, and strings
   and blobs are mapped to <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sqlite3/sqlite3result/fetcharray.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsqlite3result.fetcharray%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=sqlite3result.fetcharray&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sqlite3result.fetcharray.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115856">  <div class="votes">
    <div id="Vu115856">
    <a href="/manual/vote-note.php?id=115856&amp;page=sqlite3result.fetcharray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115856">
    <a href="/manual/vote-note.php?id=115856&amp;page=sqlite3result.fetcharray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115856" title="68% like this...">
    19
    </div>
  </div>
  <a href="#115856" class="name">
  <strong class="user"><em>Jason</em></strong></a><a class="genanchor" href="#115856"> &para;</a><div class="date" title="2014-10-03 10:21"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115856">
<div class="phpcode"><code><span class="html">Would just like to point out for clarification that each call to fetchArray() returns the next result from SQLite3Result in an array, until there are no more results, whereupon the next fetchArray() call will return false.<br /><br />HOWEVER an additional call of fetchArray() at this point will reset back to the beginning of the result set and once again return the first result. This does not seem to explicitly documented, and caused me my own fair share of headaches for a while until I figured it out.<br /><br />For example:<br /><br /><span class="default">&lt;?php <br />        $returned_set </span><span class="keyword">= </span><span class="default">$database</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"select query or whatever"</span><span class="keyword">);<br />        <br />        </span><span class="comment">//Lets say the query returned 3 results<br />        //Normally the following while loop would run 3 times then, as $result wouldn't be false until the fourth call to fetchArray()<br />        </span><span class="keyword">while(</span><span class="default">$result </span><span class="keyword">= </span><span class="default">$returned_set</span><span class="keyword">-&gt;</span><span class="default">fetchArray</span><span class="keyword">()) {<br />                </span><span class="comment">//HOWEVER HAVING AN ADDITIONAL CALL IN THE LOOP WILL CAUSE THE LOOP TO RUN AGAIN<br />                </span><span class="default">$returned_set</span><span class="keyword">-&gt;</span><span class="default">fetchArray</span><span class="keyword">();<br />        }<br /></span><span class="default">?&gt;<br /></span><br />Basically, in the above code fetchArray will return:<br />1st call | 1st result from $returned_set (fetchArray() call from while condition)<br />2nd call | 2nd result  (fetchArray() call from while block)<br />3rd call | 3rd result  (fetchArray() call from while condition)<br />4th call |FALSE  (fetchArray() call from while block)<br />5th call | 1st result  (fetchArray() call from while condition)<br />....<br /><br />This will cause (at least in this case) the while loop to run infinitely.</span></code></div>
  </div>
 </div>
  <div class="note" id="120631">  <div class="votes">
    <div id="Vu120631">
    <a href="/manual/vote-note.php?id=120631&amp;page=sqlite3result.fetcharray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120631">
    <a href="/manual/vote-note.php?id=120631&amp;page=sqlite3result.fetcharray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120631" title="70% like this...">
    11
    </div>
  </div>
  <a href="#120631" class="name">
  <strong class="user"><em>paule-panke at example dot com</em></strong></a><a class="genanchor" href="#120631"> &para;</a><div class="date" title="2017-02-12 02:22"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120631">
<div class="phpcode"><code><span class="html">Check with SQLite3Result::numColumns() for an empty result before calling SQLite3Result::fetchArray().<br /><br />In contrast to the documentation SQLite3::query() always returns a SQLite3Result instance, not only for queries returning rows (SELECT, EXPLAIN). Each time SQLite3Result::fetchArray() is called on a result from a result-less query internally the query is executed again, which will most probably break your application.<br />For a framwork or API it's not possible to know in before whether or not a query will return rows (SQLite3 supports multi-statement queries). Therefore the argument "Don't execute query('CREATE ...')" is not valid.</span></code></div>
  </div>
 </div>
  <div class="note" id="99917">  <div class="votes">
    <div id="Vu99917">
    <a href="/manual/vote-note.php?id=99917&amp;page=sqlite3result.fetcharray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99917">
    <a href="/manual/vote-note.php?id=99917&amp;page=sqlite3result.fetcharray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99917" title="52% like this...">
    3
    </div>
  </div>
  <a href="#99917" class="name">
  <strong class="user"><em>alan at synergymx dot com</em></strong></a><a class="genanchor" href="#99917"> &para;</a><div class="date" title="2010-09-14 04:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99917">
<div class="phpcode"><code><span class="html">To loop through a record set: 
<br />
<br /><span class="default">&lt;?php
<br />        $db </span><span class="keyword">= new </span><span class="default">SQLite3</span><span class="keyword">(</span><span class="string">'auth.sqlite'</span><span class="keyword">);
<br />
<br />        </span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"SELECT user_id, username, opt_status FROM tbl_user"</span><span class="keyword">;
<br />
<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);</span><span class="comment">//-&gt;fetchArray(SQLITE3_ASSOC);
<br />
<br />        </span><span class="default">$row </span><span class="keyword">= array();
<br />
<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />
<br />         while(</span><span class="default">$res </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetchArray</span><span class="keyword">(</span><span class="default">SQLITE3_ASSOC</span><span class="keyword">)){
<br />
<br />             if(!isset(</span><span class="default">$res</span><span class="keyword">[</span><span class="string">'user_id'</span><span class="keyword">])) continue;
<br />
<br />              </span><span class="default">$row</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'user_id'</span><span class="keyword">] = </span><span class="default">$res</span><span class="keyword">[</span><span class="string">'user_id'</span><span class="keyword">];
<br />              </span><span class="default">$row</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'username'</span><span class="keyword">] = </span><span class="default">$res</span><span class="keyword">[</span><span class="string">'username'</span><span class="keyword">];
<br />              </span><span class="default">$row</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'opt_status'</span><span class="keyword">] = </span><span class="default">$res</span><span class="keyword">[</span><span class="string">'opt_status'</span><span class="keyword">];
<br />
<br />              </span><span class="default">$i</span><span class="keyword">++;
<br />
<br />          }
<br />
<br />          </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120404">  <div class="votes">
    <div id="Vu120404">
    <a href="/manual/vote-note.php?id=120404&amp;page=sqlite3result.fetcharray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120404">
    <a href="/manual/vote-note.php?id=120404&amp;page=sqlite3result.fetcharray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120404" title="52% like this...">
    1
    </div>
  </div>
  <a href="#120404" class="name">
  <strong class="user"><em>ghaith at cubicf dot net</em></strong></a><a class="genanchor" href="#120404"> &para;</a><div class="date" title="2017-01-03 09:59"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120404">
<div class="phpcode"><code><span class="html">// Open a new sqlite3 DB<br /><br />$db = new SQLite3('./DB_EHLH.db');<br /><br />// select all information from table "algorithm"<br /><br />$results= $db-&gt;query("select * from algorithm");<br /><br />//Create array to keep all results<br />$data= array();<br /><br />// Fetch Associated Array (1 for SQLITE3_ASSOC)<br />while ($res= $results-&gt;fetchArray(1))<br />{<br />//insert row into array<br />array_push($data, $res);<br /><br />}<br /><br />//you can return a JSON array<br />echo json_encode($data);<br /><br />//the output is a s follows<br />[<br />{"id":1,"algorithm":"GA"},<br />{"id":2,"algorithm":"PSO"},<br />{"id":3,"algorithm":"IWO"},<br />{"id":4,"algorithm":"OIWO"}<br />]</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=sqlite3result.fetcharray&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sqlite3result.fetcharray.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.sqlite3result.php">SQLite3Result</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="sqlite3result.columnname.php" title="columnName">columnName</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3result.columntype.php" title="columnType">columnType</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3result.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="current">
                            <a href="sqlite3result.fetcharray.php" title="fetchArray">fetchArray</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3result.finalize.php" title="finalize">finalize</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3result.numcolumns.php" title="numColumns">numColumns</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3result.reset.php" title="reset">reset</a>
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
