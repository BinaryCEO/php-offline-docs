<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli_stmt::store_result - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli-stmt.store-result.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli-stmt.store-result.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-stmt.store-result.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli-stmt.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli-stmt.sqlstate.php">
 <link rel="next" href="https://www.php.net/manual/en/class.mysqli-result.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-stmt.store-result.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli-stmt.store-result.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli-stmt.store-result.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli-stmt.store-result.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli-stmt.store-result.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli-stmt.store-result.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli-stmt.store-result.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli-stmt.store-result.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli-stmt.store-result.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli-stmt.store-result.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli-stmt.store-result.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Stores a result set in an internal buffer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli_stmt::store_result - Manual" />
<meta name="twitter:description" content="Stores a result set in an internal buffer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli_stmt::store_result - Manual" />
<meta itemprop="description" content="Stores a result set in an internal buffer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Stores a result set in an internal buffer" />

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
        <a href="class.mysqli-result.php">
          mysqli_result &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli-stmt.sqlstate.php">
          &laquo; mysqli_stmt::$sqlstate        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      <li><a href='class.mysqli-stmt.php'>mysqli_stmt</a></li>      </ul>
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
            <option value='en/mysqli-stmt.store-result.php' selected="selected">English</option>
            <option value='de/mysqli-stmt.store-result.php'>German</option>
            <option value='es/mysqli-stmt.store-result.php'>Spanish</option>
            <option value='fr/mysqli-stmt.store-result.php'>French</option>
            <option value='it/mysqli-stmt.store-result.php'>Italian</option>
            <option value='ja/mysqli-stmt.store-result.php'>Japanese</option>
            <option value='pt_BR/mysqli-stmt.store-result.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli-stmt.store-result.php'>Russian</option>
            <option value='tr/mysqli-stmt.store-result.php'>Turkish</option>
            <option value='uk/mysqli-stmt.store-result.php'>Ukrainian</option>
            <option value='zh/mysqli-stmt.store-result.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli-stmt.store-result" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli_stmt::store_result</h1>
  <h1 class="refname">mysqli_stmt_store_result</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli_stmt::store_result</span> -- <span class="refname">mysqli_stmt_store_result</span> &mdash; <span class="dc-title">Stores a result set in an internal buffer</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli-stmt.store-result-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli_stmt::store_result</strong></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_stmt_store_result</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli-stmt.php" class="type mysqli_stmt">mysqli_stmt</a></span> <code class="parameter">$statement</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   This function should be called for queries that successfully 
   produce a result set (e.g. <code class="literal">SELECT, SHOW, DESCRIBE, EXPLAIN</code>)
   only if the complete result set needs to be buffered in PHP. Each subsequent
   <span class="function"><a href="mysqli-stmt.fetch.php" class="function">mysqli_stmt_fetch()</a></span> call will return buffered data.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    It is unnecessary to call <span class="function"><strong>mysqli_stmt_store_result()</strong></span> for other queries,
    but if you do, it will not harm or cause any notable performance loss in all cases.
    You can detect whether the query produced a result set by checking if
    <span class="function"><a href="mysqli-stmt.result-metadata.php" class="function">mysqli_stmt_result_metadata()</a></span> returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli-stmt.store-result-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">statement</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli-stmt.php" class="classname">mysqli_stmt</a></span> object
returned by <span class="function"><a href="mysqli.stmt-init.php" class="function">mysqli_stmt_init()</a></span>.</p></dd>
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli-stmt.store-result-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-mysqli-stmt.store-result-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If mysqli error reporting is enabled (<strong><code><a href="mysqli.constants.php#constant.mysqli-report-error">MYSQLI_REPORT_ERROR</a></code></strong>) and the requested operation fails,
a warning is generated. If, in addition, the mode is set to <strong><code><a href="mysqli.constants.php#constant.mysqli-report-strict">MYSQLI_REPORT_STRICT</a></code></strong>,
a <span class="classname"><a href="class.mysqli-sql-exception.php" class="classname">mysqli_sql_exception</a></span> is thrown instead.</p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli-stmt.store-result-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1650">
   <p><strong>Example #1 Object-oriented style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT Name, CountryCode FROM City ORDER BY Name LIMIT 20"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* store the result in an internal buffer */<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">store_result</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Number of rows: %d.\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">num_rows</span><span style="color: #007700">);</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-1651">
   <p><strong>Example #2 Procedural style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT Name, CountryCode FROM City ORDER BY Name LIMIT 20"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">mysqli_stmt_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* store the result in an internal buffer */<br /></span><span style="color: #0000BB">mysqli_stmt_store_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Number of rows: %d.\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">mysqli_stmt_num_rows</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">));</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Number of rows: 20.</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli-stmt.store-result-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli.prepare.php" class="function" rel="rdfs-seeAlso">mysqli_prepare()</a> - Prepares an SQL statement for execution</span></li>
    <li><span class="function"><a href="mysqli-stmt.result-metadata.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_result_metadata()</a> - Returns result set metadata from a prepared statement</span></li>
    <li><span class="function"><a href="mysqli-stmt.fetch.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_fetch()</a> - Fetch results from a prepared statement into the bound variables</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli_stmt/store-result.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli-stmt.store-result%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli-stmt.store-result&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-stmt.store-result.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117546">  <div class="votes">
    <div id="Vu117546">
    <a href="/manual/vote-note.php?id=117546&amp;page=mysqli-stmt.store-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117546">
    <a href="/manual/vote-note.php?id=117546&amp;page=mysqli-stmt.store-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117546" title="73% like this...">
    14
    </div>
  </div>
  <a href="#117546" class="name">
  <strong class="user"><em>kitlum AT ukr DOT net</em></strong></a><a class="genanchor" href="#117546"> &para;</a><div class="date" title="2015-06-26 10:18"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117546">
<div class="phpcode"><code><span class="html">Lost some hours to find out how to save multirows result of mysqli_stmt to array, when get_result prohibited.<br />Idea, which works is using store_result<br />            $stmt=$this-&gt;mysqli-&gt;prepare("SELECT surname, name, user_id, last_m_own, last_m_str, role FROM users WHERE referer_id=(?)");<br />                $stmt-&gt;bind_param('i',$referer_id);<br />                $stmt-&gt;execute();<br />                $stmt-&gt;store_result();<br />                $stmt-&gt;bind_result($ans['surname'], $ans['name'], $ans['user_id'], $ans['last_m_own'], $ans['last_m_str'], $ans['role']);<br />                $j=$stmt-&gt;num_rows;<br />                for ($i=0;$i&lt;$j;$i++){<br />                    $stmt-&gt;data_seek($i);<br />                    $stmt-&gt;fetch();<br />                    foreach ($ans as $key=&gt;$value){<br />                        $result[$i][$key]=$value;<br />                    }<br />                }<br />Hope will helpful for such newbies as me</span></code></div>
  </div>
 </div>
  <div class="note" id="99159">  <div class="votes">
    <div id="Vu99159">
    <a href="/manual/vote-note.php?id=99159&amp;page=mysqli-stmt.store-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99159">
    <a href="/manual/vote-note.php?id=99159&amp;page=mysqli-stmt.store-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99159" title="78% like this...">
    8
    </div>
  </div>
  <a href="#99159" class="name">
  <strong class="user"><em>pcc at pccglobal dot com</em></strong></a><a class="genanchor" href="#99159"> &para;</a><div class="date" title="2010-07-30 04:16"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99159">
<div class="phpcode"><code><span class="html">When using prepare to prepare a statement to retrieve LOBs the method order matters.
<br />Also, method 'store_result()' must be called and be called in correct order.
<br />Failure to observe this causes PHP/MySQLi to crash or return an erroneous value.
<br />The proper procedure order is: prepare -&gt; execute -&gt; store_result -&gt; bind -&gt; fetch
<br />The following applies to a Windows SBS server running IIS/6.0 + PHP 5.2.1
<br />MySQL server version 5.0.26-community-nt, client version 5.0.51a
<br />
<br /><span class="default">&lt;?php
<br />$database </span><span class="keyword">= </span><span class="string">"test" </span><span class="keyword">;
<br /></span><span class="default">$table </span><span class="keyword">= </span><span class="string">"test" </span><span class="keyword">;
<br /></span><span class="default">$column </span><span class="keyword">= </span><span class="string">"flongblob" </span><span class="keyword">;
<br /></span><span class="default">$mysqli </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="string">"root"</span><span class="keyword">, </span><span class="string">"&lt;secret_password&gt;"</span><span class="keyword">, </span><span class="default">$database</span><span class="keyword">);
<br /></span><span class="comment">// Proper procedure order: prepare -&gt; execute -&gt; store_result -&gt; bind -&gt; fetch
<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT `</span><span class="default">$column</span><span class="string">` FROM `</span><span class="default">$table</span><span class="string">`"</span><span class="keyword">) ;
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">(); 
<br /></span><span class="comment">// Fetch a record. Bind the result to a variable called 'value' and fetch.
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_result</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) ;
<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">() ;
<br />if(</span><span class="default">$res</span><span class="keyword">)
<br />{
<br />  </span><span class="comment">// strlen($value) should have LOB length, not 1 or zero.
<br />  </span><span class="keyword">echo </span><span class="string">"</span><span class="default">$column</span><span class="string"> data length is " </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) . </span><span class="string">" bytes.\n" </span><span class="keyword">;
<br />}
<br />else
<br />{
<br />  echo ((</span><span class="default">false </span><span class="keyword">!== </span><span class="default">$res</span><span class="keyword">) ? </span><span class="string">"End of data" </span><span class="keyword">: </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">) . </span><span class="string">"\n" </span><span class="keyword">;
<br />  break ;
<br />}
<br /></span><span class="comment">// Fetch another record.
<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">() ;
<br />if(</span><span class="default">$res</span><span class="keyword">)
<br />{
<br />  </span><span class="comment">// strlen($value) should have LOB length, not 1 or zero.
<br />  </span><span class="keyword">echo </span><span class="string">"</span><span class="default">$column</span><span class="string"> data length is " </span><span class="keyword">. </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) . </span><span class="string">" bytes.\n" </span><span class="keyword">;
<br />}
<br />else
<br />{
<br />  echo ((</span><span class="default">false </span><span class="keyword">!== </span><span class="default">$res</span><span class="keyword">) ? </span><span class="string">"End of data" </span><span class="keyword">: </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">) . </span><span class="string">"\n" </span><span class="keyword">;
<br />  break ;
<br />}
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">() ;
<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">() ;
<br />exit ;
<br /></span><span class="default">?&gt;
<br /></span>
<br />The above example should output:
<br />  flongblob data length is 932353 bytes.
<br />  flongblob data length is 867300 bytes.
<br />
<br />If wrong procedure order MySQLi crashes or outputs:
<br />  flongblob data length is 0 bytes.
<br />  flongblob data length is 867300 bytes.</span></code></div>
  </div>
 </div>
  <div class="note" id="86670">  <div class="votes">
    <div id="Vu86670">
    <a href="/manual/vote-note.php?id=86670&amp;page=mysqli-stmt.store-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86670">
    <a href="/manual/vote-note.php?id=86670&amp;page=mysqli-stmt.store-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86670" title="62% like this...">
    4
    </div>
  </div>
  <a href="#86670" class="name">
  <strong class="user"><em>neromir at hotmail dot com</em></strong></a><a class="genanchor" href="#86670"> &para;</a><div class="date" title="2008-10-28 07:14"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86670">
<div class="phpcode"><code><span class="html">The wording above, in the initial description of the function, can be confusing (quoted below).  <br /><br />"You must call mysqli_stmt_store_result() for every query that successfully produces a result set (SELECT, SHOW, DESCRIBE, EXPLAIN), and only if you want to buffer the complete result set by the client, so that the subsequent mysqli_stmt_fetch() call returns buffered data. "<br /><br />I had initially understood the part saying "and only if you want to buffer..." to mean that it was only necessary to call this function if you wanted to buffer the result set.  This, however, is not the case, and the misunderstanding caused me quite a bit of grief.  <br /><br />So, to clarify for anyone suffering from the same misunderstanding, you ALWAYS must call this function for every query that produces a result set (as listed in the parentheses of the quote above), as far as I can tell.</span></code></div>
  </div>
 </div>
  <div class="note" id="62125">  <div class="votes">
    <div id="Vu62125">
    <a href="/manual/vote-note.php?id=62125&amp;page=mysqli-stmt.store-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62125">
    <a href="/manual/vote-note.php?id=62125&amp;page=mysqli-stmt.store-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62125" title="100% like this...">
    2
    </div>
  </div>
  <a href="#62125" class="name">
  <strong class="user"><em>UCFirefly (at) yahoo.com</em></strong></a><a class="genanchor" href="#62125"> &para;</a><div class="date" title="2006-02-20 12:25"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62125">
<div class="phpcode"><code><span class="html">fetch_fields() does not seem to be compatible with prepared statements like those used here. Makes things difficult if you're using a wildcard. I guess that's better for security in some obscure way.</span></code></div>
  </div>
 </div>
  <div class="note" id="71987">  <div class="votes">
    <div id="Vu71987">
    <a href="/manual/vote-note.php?id=71987&amp;page=mysqli-stmt.store-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71987">
    <a href="/manual/vote-note.php?id=71987&amp;page=mysqli-stmt.store-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71987" title="no votes...">
    0
    </div>
  </div>
  <a href="#71987" class="name">
  <strong class="user"><em>Typer85 at gmail dot com</em></strong></a><a class="genanchor" href="#71987"> &para;</a><div class="date" title="2006-12-27 03:58"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71987">
<div class="phpcode"><code><span class="html">In response to the note below me for the claim that mysqli_fetch_fields is not compatible with prepared statements.
<br />
<br />This is untrue, it is but you have to do a little extra work. I would recommend you use a wrapper function of some sort to take care of the dirty business for you but the basic idea is the same.
<br />
<br />Let's assume you have a prepared statement like so. I am going to use the procedural way for simplicity but the same idea can be done using the object oriented way:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">// Connect Blah Blah Blah.
<br />
<br /></span><span class="default">$connectionLink </span><span class="keyword">= </span><span class="default">mysqli_connect</span><span class="keyword">( .... );
<br />
<br /></span><span class="comment">// Query Blab Blah Blah.
<br />
<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">"Select `Id` From `Table` Where `Id` = ?"</span><span class="keyword">;
<br />
<br /></span><span class="comment">// Prepare Query.
<br />
<br /></span><span class="default">$prepareObject </span><span class="keyword">= </span><span class="default">mysqli_prepare</span><span class="keyword">( </span><span class="default">$connectionLink </span><span class="keyword">, </span><span class="default">$query </span><span class="keyword">);
<br />
<br /></span><span class="comment">// Bind Query.
<br />
<br /></span><span class="default">mysqli_stmt_bind_param</span><span class="keyword">( </span><span class="default">$prepareObject </span><span class="keyword">, </span><span class="string">'i' </span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">);
<br />
<br /></span><span class="comment">// Execute Query.
<br />
<br /></span><span class="default">mysqli_stmt_execute</span><span class="keyword">( </span><span class="default">$prepareObject </span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Now all the above is fine and dandy to anyone familiar with using prepared statements, but if I want to use mysqli_fetch_fields or any other function that fetches meta information about a result set but does not work on prepared statements?
<br />
<br />Enter the special function mysqli_stmt_result_metadata. It can be used as follows, assume the following code segment immediatley follows that of the above code segment.
<br />
<br /><span class="default">&lt;?php
<br />
<br />$metaData </span><span class="keyword">= </span><span class="default">mysqli_stmt_result_metadata</span><span class="keyword">( </span><span class="default">$prepareObject </span><span class="keyword">);
<br />
<br /></span><span class="comment">// I Can Now Call mysqli_fetch_fields using the variable
<br />// $metaData as an argument.
<br />
<br /></span><span class="default">$fieldInfo </span><span class="keyword">= </span><span class="default">mysqli_fetch_fields</span><span class="keyword">( </span><span class="default">$metaData </span><span class="keyword">);
<br />
<br /></span><span class="comment">// Or Even This.
<br />
<br /></span><span class="default">$fieldInfo </span><span class="keyword">= </span><span class="default">mysqli_num_fields</span><span class="keyword">( </span><span class="default">$metaData </span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Take a look at the Manual entry for mysqli_stmt_result_metatdata function for full details on how to expose it with prepared statements.
<br />
<br />Good Luck,</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli-stmt.store-result&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-stmt.store-result.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mysqli-stmt.php">mysqli_stmt</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli-stmt.affected-rows.php" title="$affected_&#8203;rows">$affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.attr-get.php" title="attr_&#8203;get">attr_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.attr-set.php" title="attr_&#8203;set">attr_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.bind-param.php" title="bind_&#8203;param">bind_&#8203;param</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.bind-result.php" title="bind_&#8203;result">bind_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.data-seek.php" title="data_&#8203;seek">data_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.errno.php" title="$errno">$errno</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.error.php" title="$error">$error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.error-list.php" title="$error_&#8203;list">$error_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.execute.php" title="execute">execute</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.fetch.php" title="fetch">fetch</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.field-count.php" title="$field_&#8203;count">$field_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.free-result.php" title="free_&#8203;result">free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.get-result.php" title="get_&#8203;result">get_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.get-warnings.php" title="get_&#8203;warnings">get_&#8203;warnings</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.insert-id.php" title="$insert_&#8203;id">$insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.more-results.php" title="more_&#8203;results">more_&#8203;results</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.next-result.php" title="next_&#8203;result">next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.num-rows.php" title="$num_&#8203;rows">$num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.param-count.php" title="$param_&#8203;count">$param_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.prepare.php" title="prepare">prepare</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.reset.php" title="reset">reset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.result-metadata.php" title="result_&#8203;metadata">result_&#8203;metadata</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.send-long-data.php" title="send_&#8203;long_&#8203;data">send_&#8203;long_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.sqlstate.php" title="$sqlstate">$sqlstate</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli-stmt.store-result.php" title="store_&#8203;result">store_&#8203;result</a>
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
