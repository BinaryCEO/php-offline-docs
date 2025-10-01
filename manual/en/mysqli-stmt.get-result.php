<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli_stmt::get_result - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli-stmt.get-result.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli-stmt.get-result.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-stmt.get-result.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli-stmt.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli-stmt.free-result.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli-stmt.get-warnings.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-stmt.get-result.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli-stmt.get-result.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli-stmt.get-result.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli-stmt.get-result.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli-stmt.get-result.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli-stmt.get-result.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli-stmt.get-result.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli-stmt.get-result.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli-stmt.get-result.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli-stmt.get-result.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli-stmt.get-result.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets a result set from a prepared statement as a mysqli_result object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli_stmt::get_result - Manual" />
<meta name="twitter:description" content="Gets a result set from a prepared statement as a mysqli_result object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli_stmt::get_result - Manual" />
<meta itemprop="description" content="Gets a result set from a prepared statement as a mysqli_result object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets a result set from a prepared statement as a mysqli_result object" />

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
        <a href="mysqli-stmt.get-warnings.php">
          mysqli_stmt::get_warnings &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli-stmt.free-result.php">
          &laquo; mysqli_stmt::free_result        </a>
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
            <option value='en/mysqli-stmt.get-result.php' selected="selected">English</option>
            <option value='de/mysqli-stmt.get-result.php'>German</option>
            <option value='es/mysqli-stmt.get-result.php'>Spanish</option>
            <option value='fr/mysqli-stmt.get-result.php'>French</option>
            <option value='it/mysqli-stmt.get-result.php'>Italian</option>
            <option value='ja/mysqli-stmt.get-result.php'>Japanese</option>
            <option value='pt_BR/mysqli-stmt.get-result.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli-stmt.get-result.php'>Russian</option>
            <option value='tr/mysqli-stmt.get-result.php'>Turkish</option>
            <option value='uk/mysqli-stmt.get-result.php'>Ukrainian</option>
            <option value='zh/mysqli-stmt.get-result.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli-stmt.get-result" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli_stmt::get_result</h1>
  <h1 class="refname">mysqli_stmt_get_result</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli_stmt::get_result</span> -- <span class="refname">mysqli_stmt_get_result</span> &mdash; <span class="dc-title">Gets a result set from a prepared statement as a <span class="classname"><a href="class.mysqli-result.php" class="classname">mysqli_result</a></span> object</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli-stmt.get-result-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli_stmt::get_result</strong></span>(): <span class="type"><span class="type"><a href="class.mysqli-result.php" class="type mysqli_result">mysqli_result</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_stmt_get_result</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli-stmt.php" class="type mysqli_stmt">mysqli_stmt</a></span> <code class="parameter">$statement</code></span>): <span class="type"><span class="type"><a href="class.mysqli-result.php" class="type mysqli_result">mysqli_result</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
    Retrieves a result set from a prepared statement as a
    <span class="classname"><a href="class.mysqli-result.php" class="classname">mysqli_result</a></span> object. The data will be fetched from
    the MySQL server to PHP. This method should be called only for
    queries which produce a result set.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Available only with <a href="book.mysqlnd.php" class="link">mysqlnd</a>.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function cannot be used together
    with <span class="function"><a href="mysqli-stmt.store-result.php" class="function">mysqli_stmt_store_result()</a></span>. Both of these functions
    retrieve the full result set from the MySQL server.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli-stmt.get-result-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">statement</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli-stmt.php" class="classname">mysqli_stmt</a></span> object
returned by <span class="function"><a href="mysqli.stmt-init.php" class="function">mysqli_stmt_init()</a></span>.</p></dd>
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli-stmt.get-result-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure. For successful queries which produce a result set, such as <code class="literal">SELECT, SHOW, DESCRIBE</code> or
   <code class="literal">EXPLAIN</code>, <span class="function"><strong>mysqli_stmt_get_result()</strong></span> will return
   a <span class="classname"><a href="class.mysqli-result.php" class="classname">mysqli_result</a></span> object. For other successful queries, <span class="function"><strong>mysqli_stmt_get_result()</strong></span> will
   return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. The <span class="function"><a href="mysqli-stmt.errno.php" class="function">mysqli_stmt_errno()</a></span> function can be
   used to distinguish between the two reasons for <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>; due to a bug, prior to PHP 7.4.13,
   <span class="function"><a href="mysqli.errno.php" class="function">mysqli_errno()</a></span> had to be used for this purpose.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-mysqli-stmt.get-result-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If mysqli error reporting is enabled (<strong><code><a href="mysqli.constants.php#constant.mysqli-report-error">MYSQLI_REPORT_ERROR</a></code></strong>) and the requested operation fails,
a warning is generated. If, in addition, the mode is set to <strong><code><a href="mysqli.constants.php#constant.mysqli-report-strict">MYSQLI_REPORT_STRICT</a></code></strong>,
a <span class="classname"><a href="class.mysqli-sql-exception.php" class="classname">mysqli_sql_exception</a></span> is thrown instead.</p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli-stmt.get-result-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1638">
   <p><strong>Example #1 Object-oriented style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT Name, Population, Continent FROM Country WHERE Continent=? ORDER BY Name LIMIT 1"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_param</span><span style="color: #007700">(</span><span style="color: #DD0000">"s"</span><span style="color: #007700">, </span><span style="color: #0000BB">$continent</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$continentList </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'Europe'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Africa'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Asia'</span><span style="color: #007700">, </span><span style="color: #DD0000">'North America'</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$continentList </span><span style="color: #007700">as </span><span style="color: #0000BB">$continent</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get_result</span><span style="color: #007700">();<br />    while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_NUM</span><span style="color: #007700">)) {<br />        foreach (</span><span style="color: #0000BB">$row </span><span style="color: #007700">as </span><span style="color: #0000BB">$r</span><span style="color: #007700">) {<br />            print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$r</span><span style="color: #DD0000"> "</span><span style="color: #007700">;<br />        }<br />        print </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-1639">
   <p><strong>Example #2 Procedural style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT Name, Population, Continent FROM Country WHERE Continent=? ORDER BY Name LIMIT 1"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">mysqli_stmt_bind_param</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #DD0000">"s"</span><span style="color: #007700">, </span><span style="color: #0000BB">$continent</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$continentList</span><span style="color: #007700">= array(</span><span style="color: #DD0000">'Europe'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Africa'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Asia'</span><span style="color: #007700">, </span><span style="color: #DD0000">'North America'</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$continentList </span><span style="color: #007700">as </span><span style="color: #0000BB">$continent</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">mysqli_stmt_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_stmt_get_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br />    while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">, </span><span style="color: #0000BB">MYSQLI_NUM</span><span style="color: #007700">)) {<br />        foreach (</span><span style="color: #0000BB">$row </span><span style="color: #007700">as </span><span style="color: #0000BB">$r</span><span style="color: #007700">) {<br />            print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$r</span><span style="color: #DD0000"> "</span><span style="color: #007700">;<br />        }<br />        print </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Albania 3401200 Europe 
Algeria 31471000 Africa 
Afghanistan 22720000 Asia 
Anguilla 8000 North America</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli-stmt.get-result-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli.prepare.php" class="function" rel="rdfs-seeAlso">mysqli_prepare()</a> - Prepares an SQL statement for execution</span></li>
    <li><span class="function"><a href="mysqli-stmt.result-metadata.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_result_metadata()</a> - Returns result set metadata from a prepared statement</span></li>
    <li><span class="function"><a href="mysqli-stmt.fetch.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_fetch()</a> - Fetch results from a prepared statement into the bound variables</span></li>
    <li><span class="function"><a href="mysqli-result.fetch-array.php" class="function" rel="rdfs-seeAlso">mysqli_fetch_array()</a> - Fetch the next row of a result set as an associative, a numeric array, or both</span></li>
    <li><span class="function"><a href="mysqli-stmt.store-result.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_store_result()</a> - Stores a result set in an internal buffer</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli_stmt/get-result.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli-stmt.get-result%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli-stmt.get-result&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-stmt.get-result.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113398">  <div class="votes">
    <div id="Vu113398">
    <a href="/manual/vote-note.php?id=113398&amp;page=mysqli-stmt.get-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113398">
    <a href="/manual/vote-note.php?id=113398&amp;page=mysqli-stmt.get-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113398" title="79% like this...">
    48
    </div>
  </div>
  <a href="#113398" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#113398"> &para;</a><div class="date" title="2013-10-06 08:39"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113398">
<div class="phpcode"><code><span class="html">I went through a lot of trouble on a server where mysqlnd wasn't available, and had a lot of headaches.<br /><br />If you don't have mysqlnd installed/loaded whatever, you will get an undefined reference when trying to call "mysqli_stmt_get_result()".<br /><br />I wrote my own mysqli_stmt_get_result() and a mysqli_result_fetch_array() to go with it.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">iimysqli_result<br /></span><span class="keyword">{<br />    public </span><span class="default">$stmt</span><span class="keyword">, </span><span class="default">$nCols</span><span class="keyword">;<br />}    <br /><br />function </span><span class="default">iimysqli_stmt_get_result</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">)<br />{<br />    </span><span class="comment">/**    EXPLANATION:<br />     * We are creating a fake "result" structure to enable us to have<br />     * source-level equivalent syntax to a query executed via<br />     * mysqli_query().<br />     *<br />     *    $stmt = mysqli_prepare($conn, "");<br />     *    mysqli_bind_param($stmt, "types", ...);<br />     *<br />     *    $param1 = 0;<br />     *    $param2 = 'foo';<br />     *    $param3 = 'bar';<br />     *    mysqli_execute($stmt);<br />     *    $result _mysqli_stmt_get_result($stmt);<br />     *        [ $arr = _mysqli_result_fetch_array($result);<br />     *            || $assoc = _mysqli_result_fetch_assoc($result); ]<br />     *    mysqli_stmt_close($stmt);<br />     *    mysqli_close($conn);<br />     *<br />     * At the source level, there is no difference between this and mysqlnd.<br />     **/<br />    </span><span class="default">$metadata </span><span class="keyword">= </span><span class="default">mysqli_stmt_result_metadata</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br />    </span><span class="default">$ret </span><span class="keyword">= new </span><span class="default">iimysqli_result</span><span class="keyword">;<br />    if (!</span><span class="default">$ret</span><span class="keyword">) return </span><span class="default">NULL</span><span class="keyword">;<br /><br />    </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">nCols </span><span class="keyword">= </span><span class="default">mysqli_num_fields</span><span class="keyword">(</span><span class="default">$metadata</span><span class="keyword">);<br />    </span><span class="default">$ret</span><span class="keyword">-&gt;</span><span class="default">stmt </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">;<br /><br />    </span><span class="default">mysqli_free_result</span><span class="keyword">(</span><span class="default">$metadata</span><span class="keyword">);<br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">iimysqli_result_fetch_array</span><span class="keyword">(&amp;</span><span class="default">$result</span><span class="keyword">)<br />{<br />    </span><span class="default">$ret </span><span class="keyword">= array();<br />    </span><span class="default">$code </span><span class="keyword">= </span><span class="string">"return mysqli_stmt_bind_result(\$result-&gt;stmt "</span><span class="keyword">;<br /><br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">nCols</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />    {<br />        </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">NULL</span><span class="keyword">;<br />        </span><span class="default">$code </span><span class="keyword">.= </span><span class="string">", \$ret['" </span><span class="keyword">.</span><span class="default">$i </span><span class="keyword">.</span><span class="string">"']"</span><span class="keyword">;<br />    };<br /><br />    </span><span class="default">$code </span><span class="keyword">.= </span><span class="string">");"</span><span class="keyword">;<br />    if (!eval(</span><span class="default">$code</span><span class="keyword">)) { return </span><span class="default">NULL</span><span class="keyword">; };<br /><br />    </span><span class="comment">// This should advance the "$stmt" cursor.<br />    </span><span class="keyword">if (!</span><span class="default">mysqli_stmt_fetch</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">stmt</span><span class="keyword">)) { return </span><span class="default">NULL</span><span class="keyword">; };<br /><br />    </span><span class="comment">// Return the array we built.<br />    </span><span class="keyword">return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="122869">  <div class="votes">
    <div id="Vu122869">
    <a href="/manual/vote-note.php?id=122869&amp;page=mysqli-stmt.get-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122869">
    <a href="/manual/vote-note.php?id=122869&amp;page=mysqli-stmt.get-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122869" title="89% like this...">
    23
    </div>
  </div>
  <a href="#122869" class="name">
  <strong class="user"><em>Anon</em></strong></a><a class="genanchor" href="#122869"> &para;</a><div class="date" title="2018-06-22 06:22"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122869">
<div class="phpcode"><code><span class="html">Please OH PLEASE.<br />I have been trying to get a result set from this function, and I had 0 luck completely, for nearly 3 hours!<br /><br />If you ARE using mysqli_stmt_get_results() to get a result set, in conjuction with mysqli_stmt_store_results in order to retrieve the number of rows returned, you are going to have some major trouble!<br /><br />PHP Documentation states that to retrieve the number of rows returned by a prepared select sql statement, one should call the following statements respectively:<br /><br />mysqli_stmt_execute($stmt);<br />mysqli_stmt_store_result($stmt);<br />$num_rows = mysqli_stmt_num_rows($stmt);<br /><br />THIS IS A MAJOR DEATH TRAP, IF YOU ARE USING mysqli_stmt_get_result() in conjunction!!!! Results of doing so vary depending which statements you call first, but in the end, you will NOT get the desired result.<br /><br />In conclusion, please, PLEASE, NEVER use mysqli_stmt_store_result(), then mysqli_ AND mysqli_stmt_get_result() at the the same time. This is a MAJOR death trap.<br /><br />SOLUTION:<br />If you are trying to get a result set, and you need the number of rows returned at the same time, use the following statements respectively instead:<br /><br />$result_set = mysqli_stmt_get_results($stmt);<br />$num_rows = mysqli_num_rows($result_set);<br /><br />Reflecting on my actions, this solution may seem fairly obvious. However, to someone new using PHP (like me) or someone who is not fully comfortable with prepared statements, it's very easy to get lost by using Google and learn on your own.<br /><br />Summary:<br />NEVER use mysqli_stmt_store_result($stmt) &amp; mysqli_stmt_num_rows($stmt) in conjunction with mysqli_stmt_get_result($stmt). You will regret it!! I have been stuck on this for hours, and Google offered me no answer!</span></code></div>
  </div>
 </div>
  <div class="note" id="105802">  <div class="votes">
    <div id="Vu105802">
    <a href="/manual/vote-note.php?id=105802&amp;page=mysqli-stmt.get-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105802">
    <a href="/manual/vote-note.php?id=105802&amp;page=mysqli-stmt.get-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105802" title="63% like this...">
    24
    </div>
  </div>
  <a href="#105802" class="name">
  <strong class="user"><em>jari dot wiklund at gmail dot com</em></strong></a><a class="genanchor" href="#105802"> &para;</a><div class="date" title="2011-09-16 01:03"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105802">
<div class="phpcode"><code><span class="html">Please note that this method requires the mysqlnd driver. Othervise you will get this error: Call to undefined method mysqli_stmt::get_result()</span></code></div>
  </div>
 </div>
  <div class="note" id="122897">  <div class="votes">
    <div id="Vu122897">
    <a href="/manual/vote-note.php?id=122897&amp;page=mysqli-stmt.get-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122897">
    <a href="/manual/vote-note.php?id=122897&amp;page=mysqli-stmt.get-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122897" title="77% like this...">
    5
    </div>
  </div>
  <a href="#122897" class="name">
  <strong class="user"><em>jeffspicer at gmail dot com</em></strong></a><a class="genanchor" href="#122897"> &para;</a><div class="date" title="2018-06-30 06:59"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122897">
<div class="phpcode"><code><span class="html">To prevent others from hours of screaming trying to figure out why this does not work when you have the native driver enabled.  It is because you need to make sure you enable both native drives mysqlnd and nd_mysqli on your server if you wish to use this functionality.<br /><br />Otherwise just enabling the mysqlnd native driver does include the mysqli_stmt_get_result function as this apparently resides in the nd_mysqli native driver.  Unfortunately, most documentation only ever talks about the mysqlnd native driver.<br /><br />Once you enable both native drivers this function works as documented.</span></code></div>
  </div>
 </div>
  <div class="note" id="120097">  <div class="votes">
    <div id="Vu120097">
    <a href="/manual/vote-note.php?id=120097&amp;page=mysqli-stmt.get-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120097">
    <a href="/manual/vote-note.php?id=120097&amp;page=mysqli-stmt.get-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120097" title="60% like this...">
    1
    </div>
  </div>
  <a href="#120097" class="name">
  <strong class="user"><em>Haravikk</em></strong></a><a class="genanchor" href="#120097"> &para;</a><div class="date" title="2016-10-28 01:43"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120097">
<div class="phpcode"><code><span class="html">For those interested, this function seems to always produce a stored result, making it equivalent to mysqli::store_result(), rather than fetching on demand as in the case of mysqli::use_result().<br /><br />This is important as it means that you cannot control the nature of the result as you would normally by calling mysqli_stmt::store_result() prior to fetching, as I had personally expected.<br /><br />So, if you want to emulate the behaviour of mysqli::use_result() you will still need to use mysqli_stmt::bind_param() and mysqli_stmt::fetch().</span></code></div>
  </div>
 </div>
  <div class="note" id="124074">  <div class="votes">
    <div id="Vu124074">
    <a href="/manual/vote-note.php?id=124074&amp;page=mysqli-stmt.get-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124074">
    <a href="/manual/vote-note.php?id=124074&amp;page=mysqli-stmt.get-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124074" title="57% like this...">
    1
    </div>
  </div>
  <a href="#124074" class="name">
  <strong class="user"><em>HeadlessDev</em></strong></a><a class="genanchor" href="#124074"> &para;</a><div class="date" title="2019-07-26 09:47"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124074">
<div class="phpcode"><code><span class="html">Thanks to everyone that leaves notes, without them I would not be able to do what I do. I wrote this function with help from notes on this page and others.<br /><br />I did not have mysqlnd available to me, but wanted to be able to get_result() of a query as an object.<br /><br />PLEASE NOTE: I am not an expert at PHP<br /><br />Heres an example of using my get_result() to login users<br /><span class="default">&lt;?php<br />    </span><span class="comment">//Sanitize input before using this function<br />    </span><span class="keyword">function </span><span class="default">login</span><span class="keyword">(</span><span class="default">$email</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">){<br />        require </span><span class="string">'connect_db.php'</span><span class="keyword">;<br />        </span><span class="default">$query </span><span class="keyword">= </span><span class="default">$sql</span><span class="keyword">-&gt;</span><span class="default">stmt_init</span><span class="keyword">();<br />        if(</span><span class="default">$query</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT CustomerId, Password, Admin FROM users WHERE Email = ?"</span><span class="keyword">)){<br />            </span><span class="default">$query</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">"s"</span><span class="keyword">,</span><span class="default">$email</span><span class="keyword">);<br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="default">get_result</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">); </span><span class="comment">//USING FUNCTION  HERE<br />            </span><span class="keyword">if(</span><span class="default">$result </span><span class="keyword">!= </span><span class="default">NULL</span><span class="keyword">){<br />                </span><span class="default">$user </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />                if(</span><span class="default">password_verify</span><span class="keyword">(</span><span class="default">$password</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">Password</span><span class="keyword">)){<br />                    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'user_id'</span><span class="keyword">] = </span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">CustomerId</span><span class="keyword">;<br />                    if(</span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">Admin </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">){<br />                        </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'admin'</span><span class="keyword">] = </span><span class="default">true</span><span class="keyword">;<br />                    }<br />                    </span><span class="default">$sql</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />                    return </span><span class="default">true</span><span class="keyword">;<br />                }<br />            }<br />        }<br />        </span><span class="default">$sql</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />        </span><span class="comment">//If we get here they are not logged in<br />        </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">//Returns an array with each row as an object<br />    </span><span class="keyword">function </span><span class="default">get_result</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">){<br />        </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(); </span><span class="comment">//Execute query<br />        </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">(); </span><span class="comment">//Store the results<br />        </span><span class="default">$num_rows </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">num_rows</span><span class="keyword">; </span><span class="comment">//Get the number of results<br />        </span><span class="default">$results </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />        if(</span><span class="default">$num_rows </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">){<br />            </span><span class="comment">//Get metadata about the results<br />            </span><span class="default">$meta </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">result_metadata</span><span class="keyword">();<br />            </span><span class="comment">//Here we get all the column/field names and create the binding code<br />            </span><span class="default">$bind_code </span><span class="keyword">= </span><span class="string">"return mysqli_stmt_bind_result(\$stmt, "</span><span class="keyword">;<br />            while(</span><span class="default">$_field </span><span class="keyword">= </span><span class="default">$meta</span><span class="keyword">-&gt;</span><span class="default">fetch_field</span><span class="keyword">()){<br />                </span><span class="default">$bind_code </span><span class="keyword">.= </span><span class="string">"\$row[\""</span><span class="keyword">.</span><span class="default">$_field</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">.</span><span class="string">"\"], "</span><span class="keyword">;<br />            }<br />            </span><span class="comment">//Replace trailing ", " with ");"<br />            </span><span class="default">$bind_code </span><span class="keyword">= </span><span class="default">substr_replace</span><span class="keyword">(</span><span class="default">$bind_code</span><span class="keyword">,</span><span class="string">");"</span><span class="keyword">, -</span><span class="default">2</span><span class="keyword">);<br />           </span><span class="comment">//Run the code, if it doesn't work return NULL<br />            </span><span class="keyword">if(!eval(</span><span class="default">$bind_code</span><span class="keyword">)) { <br />                </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">(); <br />                return </span><span class="default">NULL</span><span class="keyword">;<br />            }<br />            </span><span class="comment">//This is where we create the object and add it to our final result array<br />            </span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$num_rows</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){<br />               </span><span class="comment">//Gets the row by index<br />                </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">data_seek</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />                </span><span class="comment">//Update bound variables used in $bind_code with new row values<br />                </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">();<br />                foreach(</span><span class="default">$row </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">){<br />                    </span><span class="comment">//Create array using the column/field name as the index<br />                    </span><span class="default">$_result</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                }<br />                </span><span class="comment">//Cast $_result to object and append to our final results<br />                </span><span class="default">$results</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = (object)</span><span class="default">$_result</span><span class="keyword">;<br />            }<br />        }<br />        </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">(); <br />        return </span><span class="default">$results</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli-stmt.get-result&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-stmt.get-result.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
