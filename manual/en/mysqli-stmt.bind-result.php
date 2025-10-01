<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli_stmt::bind_result - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli-stmt.bind-result.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli-stmt.bind-result.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-stmt.bind-result.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli-stmt.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli-stmt.bind-param.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli-stmt.close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-stmt.bind-result.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli-stmt.bind-result.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli-stmt.bind-result.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli-stmt.bind-result.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli-stmt.bind-result.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli-stmt.bind-result.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli-stmt.bind-result.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli-stmt.bind-result.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli-stmt.bind-result.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli-stmt.bind-result.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli-stmt.bind-result.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binds variables to a prepared statement for result storage" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli_stmt::bind_result - Manual" />
<meta name="twitter:description" content="Binds variables to a prepared statement for result storage" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli_stmt::bind_result - Manual" />
<meta itemprop="description" content="Binds variables to a prepared statement for result storage" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binds variables to a prepared statement for result storage" />

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
        <a href="mysqli-stmt.close.php">
          mysqli_stmt::close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli-stmt.bind-param.php">
          &laquo; mysqli_stmt::bind_param        </a>
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
            <option value='en/mysqli-stmt.bind-result.php' selected="selected">English</option>
            <option value='de/mysqli-stmt.bind-result.php'>German</option>
            <option value='es/mysqli-stmt.bind-result.php'>Spanish</option>
            <option value='fr/mysqli-stmt.bind-result.php'>French</option>
            <option value='it/mysqli-stmt.bind-result.php'>Italian</option>
            <option value='ja/mysqli-stmt.bind-result.php'>Japanese</option>
            <option value='pt_BR/mysqli-stmt.bind-result.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli-stmt.bind-result.php'>Russian</option>
            <option value='tr/mysqli-stmt.bind-result.php'>Turkish</option>
            <option value='uk/mysqli-stmt.bind-result.php'>Ukrainian</option>
            <option value='zh/mysqli-stmt.bind-result.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli-stmt.bind-result" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli_stmt::bind_result</h1>
  <h1 class="refname">mysqli_stmt_bind_result</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli_stmt::bind_result</span> -- <span class="refname">mysqli_stmt_bind_result</span> &mdash; <span class="dc-title">Binds variables to a prepared statement for result storage</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli-stmt.bind-result-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli_stmt::bind_result</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&$var</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&...$vars</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_stmt_bind_result</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli-stmt.php" class="type mysqli_stmt">mysqli_stmt</a></span> <code class="parameter">$statement</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&$var</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&...$vars</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Binds columns in the result set to variables.
  </p>
  <p class="para">
   When <span class="function"><a href="mysqli-stmt.fetch.php" class="function">mysqli_stmt_fetch()</a></span> is called to fetch data, the
   MySQL client/server protocol places the data for the bound columns into
   the specified variables <code class="parameter">var</code>/<code class="parameter">vars</code>.
  </p>
  <p class="para">
   A column can be bound or rebound at any time, even after a result set has
   been partially retrieved. The new binding takes effect the next time 
   <span class="function"><a href="mysqli-stmt.fetch.php" class="function">mysqli_stmt_fetch()</a></span> is called.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    All columns must be bound after 
    <span class="function"><a href="mysqli-stmt.execute.php" class="function">mysqli_stmt_execute()</a></span> and prior to calling
    <span class="function"><a href="mysqli-stmt.fetch.php" class="function">mysqli_stmt_fetch()</a></span>.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Depending on column types bound variables can silently change to the
    corresponding PHP type.
   </p>
  </p></blockquote>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="para">
    This function is useful for simple results. To retrieve iterable result
    set, or fetch each row as an array or object,
    use <span class="function"><a href="mysqli-stmt.get-result.php" class="function">mysqli_stmt_get_result()</a></span>.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli-stmt.bind-result-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">statement</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli-stmt.php" class="classname">mysqli_stmt</a></span> object
returned by <span class="function"><a href="mysqli.stmt-init.php" class="function">mysqli_stmt_init()</a></span>.</p></dd>
    
     <dt><code class="parameter">var</code></dt>
     <dd>
      <p class="para">
       The first variable to be bound.
      </p>
     </dd>
    
    
     <dt><code class="parameter">vars</code></dt>
     <dd>
      <p class="para">
       Further variables to be bound.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli-stmt.bind-result-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli-stmt.bind-result-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1622">
   <p><strong>Example #1 Object-oriented style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* prepare statement */<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT Code, Name FROM Country ORDER BY Name LIMIT 5"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* bind variables to prepared statement */<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$col1</span><span style="color: #007700">, </span><span style="color: #0000BB">$col2</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* fetch values */<br /></span><span style="color: #007700">while (</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">()) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$col1</span><span style="color: #007700">, </span><span style="color: #0000BB">$col2</span><span style="color: #007700">);<br />}</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-1623">
   <p><strong>Example #2 Procedural style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* prepare statement */<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT Code, Name FROM Country ORDER BY Name LIMIT 5"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">mysqli_stmt_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* bind variables to prepared statement */<br /></span><span style="color: #0000BB">mysqli_stmt_bind_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">$col1</span><span style="color: #007700">, </span><span style="color: #0000BB">$col2</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* fetch values */<br /></span><span style="color: #007700">while (</span><span style="color: #0000BB">mysqli_stmt_fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$col1</span><span style="color: #007700">, </span><span style="color: #0000BB">$col2</span><span style="color: #007700">);<br />}</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">AFG Afghanistan
ALB Albania
DZA Algeria
ASM American Samoa
AND Andorra</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli-stmt.bind-result-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli-stmt.get-result.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_get_result()</a> - Gets a result set from a prepared statement as a mysqli_result object</span></li>
    <li><span class="function"><a href="mysqli-stmt.bind-param.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_bind_param()</a> - Binds variables to a prepared statement as parameters</span></li>
    <li><span class="function"><a href="mysqli-stmt.execute.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_execute()</a> - Executes a prepared statement</span></li>
    <li><span class="function"><a href="mysqli-stmt.fetch.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_fetch()</a> - Fetch results from a prepared statement into the bound variables</span></li>
    <li><span class="function"><a href="mysqli.prepare.php" class="function" rel="rdfs-seeAlso">mysqli_prepare()</a> - Prepares an SQL statement for execution</span></li>
    <li><span class="function"><a href="mysqli-stmt.prepare.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_prepare()</a> - Prepares an SQL statement for execution</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli_stmt/bind-result.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli-stmt.bind-result%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli-stmt.bind-result&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-stmt.bind-result.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="85470">  <div class="votes">
    <div id="Vu85470">
    <a href="/manual/vote-note.php?id=85470&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85470">
    <a href="/manual/vote-note.php?id=85470&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85470" title="85% like this...">
    58
    </div>
  </div>
  <a href="#85470" class="name">
  <strong class="user"><em>hamidhossain at gmail dot com</em></strong></a><a class="genanchor" href="#85470"> &para;</a><div class="date" title="2008-09-01 07:07"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85470">
<div class="phpcode"><code><span class="html">lot of people don't like how bind_result works with prepared statements! it requires you to pass long list of parameters which will be loaded with column value when the function being called.
<br />
<br />To solve this, i used call_user_func_array function and result_metadata functions. which make easy and automatically returns an array of all columns results stored in an array with column names.
<br />
<br />please don't forget to change setting variables with your own credentials:
<br />
<br /><span class="default">&lt;?php
<br />$host </span><span class="keyword">= </span><span class="string">'localhost'</span><span class="keyword">;
<br /></span><span class="default">$user </span><span class="keyword">= </span><span class="string">'root'</span><span class="keyword">;
<br /></span><span class="default">$pass </span><span class="keyword">= </span><span class="string">'1234'</span><span class="keyword">;
<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="string">'test'</span><span class="keyword">;
<br />
<br /></span><span class="default">$mysqli </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);
<br /></span><span class="comment">/* check connection */
<br /></span><span class="keyword">if (</span><span class="default">mysqli_connect_errno</span><span class="keyword">()) {
<br />    </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Connect failed: %s\n"</span><span class="keyword">, </span><span class="default">mysqli_connect_error</span><span class="keyword">());
<br />    exit();
<br />}
<br />
<br />if (</span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT * FROM sample WHERE t2 LIKE ?"</span><span class="keyword">)) {
<br />    </span><span class="default">$tt2 </span><span class="keyword">= </span><span class="string">'%'</span><span class="keyword">;
<br />    
<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">"s"</span><span class="keyword">, </span><span class="default">$tt2</span><span class="keyword">);
<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();
<br />
<br />    </span><span class="default">$meta </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">result_metadata</span><span class="keyword">();
<br />    while (</span><span class="default">$field </span><span class="keyword">= </span><span class="default">$meta</span><span class="keyword">-&gt;</span><span class="default">fetch_field</span><span class="keyword">())
<br />    {
<br />        </span><span class="default">$params</span><span class="keyword">[] = &amp;</span><span class="default">$row</span><span class="keyword">[</span><span class="default">$field</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">];
<br />    }
<br />
<br />    </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">'bind_result'</span><span class="keyword">), </span><span class="default">$params</span><span class="keyword">);
<br />
<br />    while (</span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()) {
<br />        foreach(</span><span class="default">$row </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$c</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$c</span><span class="keyword">;
<br />    }
<br />    
<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br />}
<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102179">  <div class="votes">
    <div id="Vu102179">
    <a href="/manual/vote-note.php?id=102179&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102179">
    <a href="/manual/vote-note.php?id=102179&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102179" title="78% like this...">
    34
    </div>
  </div>
  <a href="#102179" class="name">
  <strong class="user"><em>nieprzeklinaj at gmail dot com</em></strong></a><a class="genanchor" href="#102179"> &para;</a><div class="date" title="2011-02-01 01:02"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102179">
<div class="phpcode"><code><span class="html">I wrote a function that fetches all rows from a result set - either normal or prepared.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fetch</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)<br />{    <br />    </span><span class="default">$array </span><span class="keyword">= array();<br />    <br />    if(</span><span class="default">$result </span><span class="keyword">instanceof </span><span class="default">mysqli_stmt</span><span class="keyword">)<br />    {<br />        </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">();<br />        <br />        </span><span class="default">$variables </span><span class="keyword">= array();<br />        </span><span class="default">$data </span><span class="keyword">= array();<br />        </span><span class="default">$meta </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">result_metadata</span><span class="keyword">();<br />        <br />        while(</span><span class="default">$field </span><span class="keyword">= </span><span class="default">$meta</span><span class="keyword">-&gt;</span><span class="default">fetch_field</span><span class="keyword">())<br />            </span><span class="default">$variables</span><span class="keyword">[] = &amp;</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$field</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">]; </span><span class="comment">// pass by reference<br />        <br />        </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$result</span><span class="keyword">, </span><span class="string">'bind_result'</span><span class="keyword">), </span><span class="default">$variables</span><span class="keyword">);<br />        <br />        </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        while(</span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">())<br />        {<br />            </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = array();<br />            foreach(</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">)<br />                </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;<br />            </span><span class="default">$i</span><span class="keyword">++;<br />            <br />            </span><span class="comment">// don't know why, but when I tried $array[] = $data, I got the same one result in all rows<br />        </span><span class="keyword">}<br />    }<br />    elseif(</span><span class="default">$result </span><span class="keyword">instanceof </span><span class="default">mysqli_result</span><span class="keyword">)<br />    {<br />        while(</span><span class="default">$row </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetch_assoc</span><span class="keyword">())<br />            </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">$row</span><span class="keyword">;<br />    }<br />    <br />    return </span><span class="default">$array</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Simply call it passing a result set or executed statement and you'll get all rows fetched.</span></code></div>
  </div>
 </div>
  <div class="note" id="57564">  <div class="votes">
    <div id="Vu57564">
    <a href="/manual/vote-note.php?id=57564&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57564">
    <a href="/manual/vote-note.php?id=57564&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57564" title="86% like this...">
    16
    </div>
  </div>
  <a href="#57564" class="name">
  <strong class="user"><em>andrey at php dot net</em></strong></a><a class="genanchor" href="#57564"> &para;</a><div class="date" title="2005-10-07 05:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57564">
<div class="phpcode"><code><span class="html">If you select LOBs use the following order of execution or you risk mysqli allocating more memory that actually used
<br />
<br />1)prepare()
<br />2)execute()
<br />3)store_result()
<br />4)bind_result()
<br />
<br />If you skip 3) or exchange 3) and 4) then mysqli will allocate memory for the maximal length of the column which is 255 for tinyblob, 64k for blob(still ok), 16MByte for MEDIUMBLOB - quite a lot and 4G for LONGBLOB (good if you have so much memory). Queries which use this order a bit slower when there is a LOB but this is the price of not having memory exhaustion in seconds.</span></code></div>
  </div>
 </div>
  <div class="note" id="101543">  <div class="votes">
    <div id="Vu101543">
    <a href="/manual/vote-note.php?id=101543&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101543">
    <a href="/manual/vote-note.php?id=101543&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101543" title="88% like this...">
    7
    </div>
  </div>
  <a href="#101543" class="name">
  <strong class="user"><em>quano</em></strong></a><a class="genanchor" href="#101543"> &para;</a><div class="date" title="2010-12-23 04:19"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101543">
<div class="phpcode"><code><span class="html">If I have a longtext field in the result, the whole page will go blank, without giving me any errors what so ever. This is because PHP _crashes_. I've spent an entire morning figuring this out.<br /><br />Apparently, if you have longtext present, you HAVE to call store_result before using bind_result.<br /><br /><a href="http://bugs.php.net/bug.php?id=47928" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=47928</a></span></code></div>
  </div>
 </div>
  <div class="note" id="92505">  <div class="votes">
    <div id="Vu92505">
    <a href="/manual/vote-note.php?id=92505&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92505">
    <a href="/manual/vote-note.php?id=92505&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92505" title="84% like this...">
    13
    </div>
  </div>
  <a href="#92505" class="name">
  <strong class="user"><em>uramihsayibok, gmail, com</em></strong></a><a class="genanchor" href="#92505"> &para;</a><div class="date" title="2009-07-27 01:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92505">
<div class="phpcode"><code><span class="html">A note to people to want to return an array of results - that is, an array of all the results from the query, not just one at a time.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// blah blah...<br /></span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$mysqli_stmt_object</span><span class="keyword">, </span><span class="string">"bind_result"</span><span class="keyword">), </span><span class="default">$byref_array_for_fields</span><span class="keyword">);<br /><br /></span><span class="default">$results </span><span class="keyword">= array();<br />while (</span><span class="default">$mysqli_stmt_object</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()) {<br />    </span><span class="default">$results</span><span class="keyword">[] = </span><span class="default">$byref_array_for_fields</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span>This will NOT work. $results will have a bunch of arrays, but each one will have a reference to $byref.<br /><br />PHP is optimizing performance here: you aren't so much copying the $byref array into $results as you are *adding* it. That means $results will have a bunch of $byrefs - the same array repeated multiple times. (So what you see is that $results is all duplicates of the last item from the query.)<br /><br />hamidhossain (01-Sep-2008) shows how to get around that: inside the loop that fetches results you also have to loop through the list of fields, copying them as you go. In effect, copying everything individually.<br /><br />Personally, I'd rather use some kind of function that effectively duplicates an array than write my own code. Many of the built-in array functions don't work, apparently using references rather than copies, but a combination of array_map and create_function does.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// blah blah...<br /></span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$mysqli_stmt_object</span><span class="keyword">, </span><span class="string">"bind_result"</span><span class="keyword">), </span><span class="default">$byref_array_for_fields</span><span class="keyword">);<br /><br /></span><span class="comment">// returns a copy of a value<br /></span><span class="default">$copy </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$a'</span><span class="keyword">, </span><span class="string">'return $a;'</span><span class="keyword">);<br /><br /></span><span class="default">$results </span><span class="keyword">= array();<br />while (</span><span class="default">$mysqli_stmt_object</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()) {<br />    </span><span class="comment">// array_map will preserve keys when done here and this way<br />    </span><span class="default">$results</span><span class="keyword">[] = </span><span class="default">array_map</span><span class="keyword">(</span><span class="default">$copy</span><span class="keyword">, </span><span class="default">$byref_array_for_fields</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />All these problems would go away if they just implemented a fetch_assoc or even fetch_array for prepared statements...</span></code></div>
  </div>
 </div>
  <div class="note" id="90507">  <div class="votes">
    <div id="Vu90507">
    <a href="/manual/vote-note.php?id=90507&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90507">
    <a href="/manual/vote-note.php?id=90507&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90507" title="80% like this...">
    3
    </div>
  </div>
  <a href="#90507" class="name">
  <strong class="user"><em>atulkashyap1 at hotmail dot com</em></strong></a><a class="genanchor" href="#90507"> &para;</a><div class="date" title="2009-04-25 03:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90507">
<div class="phpcode"><code><span class="html">bind_ result can also be used to return an array of variables from a function,
<br />This took me a long time to figure out, so I would like to share this.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">extracting</span><span class="keyword">(){
<br />  </span><span class="default">$query</span><span class="keyword">=</span><span class="string">"SELECT topic, detail, date, tags
<br />    FROM updates
<br />    ORDER BY date DESC
<br />    LIMIT 5 "</span><span class="keyword">;
<br />  if(</span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">conn</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">)) {
<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();
<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_result</span><span class="keyword">(</span><span class="default">$updates</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$updates</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$updates</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">],</span><span class="default">$updates</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]);
<br />    </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    while(</span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()){
<br />      </span><span class="default">$i</span><span class="keyword">++;
<br />      </span><span class="default">$name</span><span class="keyword">=</span><span class="string">'t'</span><span class="keyword">.</span><span class="default">$i</span><span class="keyword">;
<br />      $</span><span class="default">$name </span><span class="keyword">= array(</span><span class="default">$updates</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$updates</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$updates</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">],</span><span class="default">$updates</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]);
<br />    }
<br />    return array(</span><span class="default">$t1</span><span class="keyword">,</span><span class="default">$t2</span><span class="keyword">,</span><span class="default">$t3</span><span class="keyword">,</span><span class="default">$t4</span><span class="keyword">,</span><span class="default">$t5</span><span class="keyword">,);
<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br />  }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116827">  <div class="votes">
    <div id="Vu116827">
    <a href="/manual/vote-note.php?id=116827&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116827">
    <a href="/manual/vote-note.php?id=116827&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116827" title="75% like this...">
    4
    </div>
  </div>
  <a href="#116827" class="name">
  <strong class="user"><em>kaspy at example dot com</em></strong></a><a class="genanchor" href="#116827"> &para;</a><div class="date" title="2015-03-05 06:31"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116827">
<div class="phpcode"><code><span class="html">For those of you trying to bind rows into array,<br /><span class="default">&lt;?php<br />$stmt </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT id, name, mail, phone, FROM contacts'</span><span class="keyword">);<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">();<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_result</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">], </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">], </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'mail'</span><span class="keyword">], </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'phone'</span><span class="keyword">]);<br />while (</span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()) {<br />    </span><span class="default">$outArr</span><span class="keyword">[] = </span><span class="default">$arr</span><span class="keyword">;<br />}<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />return </span><span class="default">$outArr</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>this will give you all the rows you asked for except that they would all be the same as the first one because of some gremlins in the background code (i've heard that PHP is trying to save memory here).<br /><br />But this one works:<br /><span class="default">&lt;?php<br />$stmt </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT id, name, mail, phone, FROM contacts'</span><span class="keyword">);<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">();<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_result</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">,</span><span class="default">$d</span><span class="keyword">);<br />while (</span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()) {<br />    </span><span class="default">$outArr</span><span class="keyword">[] = [</span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">$a</span><span class="keyword">, </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="default">$b</span><span class="keyword">, </span><span class="string">'mail' </span><span class="keyword">=&gt; </span><span class="default">$c</span><span class="keyword">, </span><span class="string">'phone' </span><span class="keyword">=&gt; </span><span class="default">$d</span><span class="keyword">];<br />}<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />return </span><span class="default">$outArr</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>Just don't use arrays to bind results :)</span></code></div>
  </div>
 </div>
  <div class="note" id="104452">  <div class="votes">
    <div id="Vu104452">
    <a href="/manual/vote-note.php?id=104452&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104452">
    <a href="/manual/vote-note.php?id=104452&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104452" title="66% like this...">
    1
    </div>
  </div>
  <a href="#104452" class="name">
  <strong class="user"><em>scragar at gmail dot com</em></strong></a><a class="genanchor" href="#104452"> &para;</a><div class="date" title="2011-06-16 12:02"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104452">
<div class="phpcode"><code><span class="html">To clarify for anyone having problems with arrays, PHP will automatically pass arrays as references, cloning the array if needed in the event of setting or unsetting a part of it, changing a referenced variable does not trigger cloning.<br /><br />This is done for efficiency, to clone an array containing this information you may either use a foreach loop, or set/unset a key. Techniques like array_values will also work provided you don't mind losing your keys.</span></code></div>
  </div>
 </div>
  <div class="note" id="99175">  <div class="votes">
    <div id="Vu99175">
    <a href="/manual/vote-note.php?id=99175&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99175">
    <a href="/manual/vote-note.php?id=99175&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99175" title="66% like this...">
    1
    </div>
  </div>
  <a href="#99175" class="name">
  <strong class="user"><em>pcc at pccglobal dot com</em></strong></a><a class="genanchor" href="#99175"> &para;</a><div class="date" title="2010-07-31 07:06"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99175">
<div class="phpcode"><code><span class="html">If done properly, 'call_user_func_array()' works to bind variables to a result of multiple columns including BLOB columns. 
<br />
<br />EXAMPLE:
<br />
<br /><span class="default">&lt;?php
<br />$data </span><span class="keyword">= array() ; </span><span class="comment">// Array that accepts the data.
<br /></span><span class="default">$params </span><span class="keyword">= array() ; </span><span class="comment">// Parameter array passed to 'bind_result()'
<br /></span><span class="default">$column </span><span class="keyword">= array(</span><span class="string">"fidentity"</span><span class="keyword">, </span><span class="string">"fvarchar"</span><span class="keyword">, </span><span class="string">"fdate"</span><span class="keyword">, </span><span class="string">"ftinyblob"</span><span class="keyword">) ; </span><span class="comment">// The column names.
<br /></span><span class="keyword">foreach(</span><span class="default">$column </span><span class="keyword">as </span><span class="default">$col_name</span><span class="keyword">)
<br />{
<br />  </span><span class="comment">// 'fetch()' will assign fetched value to the variable '$data[$col_name]'
<br />  </span><span class="default">$params</span><span class="keyword">[] =&amp; </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$col_name</span><span class="keyword">] ;
<br />}
<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">"bind_result"</span><span class="keyword">), </span><span class="default">$params</span><span class="keyword">) ;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Here's the complete example.
<br />WARNING: When using 'prepare' to prepare a statement to retrieve LOBs the method order matters.
<br />Also, method 'store_result()' must be called and be called in correct order.
<br />Failure to observe this causes PHP/MySQLi to crash or return an erroneous value.
<br />The proper procedure order is: prepare -&gt; execute -&gt; store_result -&gt; bind -&gt; fetch
<br />
<br /><span class="default">&lt;?php
<br />$database </span><span class="keyword">= </span><span class="string">"test" </span><span class="keyword">;
<br /></span><span class="default">$table </span><span class="keyword">= </span><span class="string">"test" </span><span class="keyword">;
<br /></span><span class="default">$column </span><span class="keyword">= array(</span><span class="string">"fidentity"</span><span class="keyword">, </span><span class="string">"fvarchar"</span><span class="keyword">, </span><span class="string">"fdate"</span><span class="keyword">, </span><span class="string">"ftinyblob"</span><span class="keyword">) ;
<br /></span><span class="default">$select_set </span><span class="keyword">= </span><span class="string">"`fidentity`, `fvarchar`, `fdate`, `ftinyblob`" </span><span class="keyword">;
<br /></span><span class="default">$mysqli </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="string">"root"</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">$database</span><span class="keyword">);
<br /></span><span class="comment">// Proper procedure order: prepare -&gt; execute -&gt; store_result -&gt; bind -&gt; fetch
<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT </span><span class="default">$select_set</span><span class="string"> FROM `</span><span class="default">$table</span><span class="string">`"</span><span class="keyword">) ;
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">(); 
<br /></span><span class="default">$data </span><span class="keyword">= array() ; </span><span class="comment">// Array that accepts the data.
<br /></span><span class="default">$params </span><span class="keyword">= array() ; </span><span class="comment">// Parameter array passed to 'bind_result()'
<br /></span><span class="keyword">foreach(</span><span class="default">$column </span><span class="keyword">as </span><span class="default">$col_name</span><span class="keyword">)
<br />{
<br />  </span><span class="comment">// Assign the fetched value to the variable '$data[$name]'
<br />  </span><span class="default">$params</span><span class="keyword">[] =&amp; </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$col_name</span><span class="keyword">] ;
<br />}
<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">"bind_result"</span><span class="keyword">), </span><span class="default">$params</span><span class="keyword">) ;
<br />if(! </span><span class="default">$res</span><span class="keyword">)
<br />{
<br />  echo </span><span class="string">"bind_result() failed: " </span><span class="keyword">. </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">error </span><span class="keyword">. </span><span class="string">"\n" </span><span class="keyword">;
<br />}
<br />else
<br />{
<br />  </span><span class="default">$res </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">() ;
<br />  if(</span><span class="default">$res</span><span class="keyword">)
<br />  {
<br />      echo </span><span class="string">"&lt;pre&gt;" </span><span class="keyword">. </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">)) . </span><span class="string">"&lt;/pre&gt;\n" </span><span class="keyword">;
<br />  }
<br />  else
<br />  {
<br />    echo ((</span><span class="default">false </span><span class="keyword">!== </span><span class="default">$res</span><span class="keyword">) ? </span><span class="string">"End of data" </span><span class="keyword">: </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">) . </span><span class="string">"\n" </span><span class="keyword">;
<br />  }
<br />}
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">() ;
<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">() ;
<br />exit ;
<br /></span><span class="default">?&gt;
<br /></span>
<br />The above example should output:
<br />Array (
<br />  [fidentity] =&gt; 24
<br />  [fvarchar] =&gt; the rain in spain
<br />  [fdate] =&gt; 2010-07-31
<br />  [ftinyblob] =&gt; GIF89a...(more BLOB data)
<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="107595">  <div class="votes">
    <div id="Vu107595">
    <a href="/manual/vote-note.php?id=107595&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107595">
    <a href="/manual/vote-note.php?id=107595&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107595" title="63% like this...">
    5
    </div>
  </div>
  <a href="#107595" class="name">
  <strong class="user"><em>timchampion dot NOSPAM at gmail dot com</em></strong></a><a class="genanchor" href="#107595"> &para;</a><div class="date" title="2012-02-20 07:29"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107595">
<div class="phpcode"><code><span class="html">Just wanted to make sure that all were aware of get_result for those needing the result in array format.<br /><br />In the code sample, after execute(), perform a get_result() like this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// ... this document's example code:<br /><br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /><br />    </span><span class="comment">/* instead of bind_result: */<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">get_result</span><span class="keyword">();<br /><br />    </span><span class="comment">/* now you can fetch the results into an array - NICE */<br />    </span><span class="keyword">while (</span><span class="default">$myrow </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetch_assoc</span><span class="keyword">()) {<br />        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%s %s\n"</span><span class="keyword">, </span><span class="default">$myrow</span><span class="keyword">[</span><span class="string">'Code'</span><span class="keyword">], </span><span class="default">$myrow</span><span class="keyword">[</span><span class="string">'Name'</span><span class="keyword">]);<br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />This is much nicer when you have a dozen or more fields coming back from your query.  Hope this helps.  Also, as noted in the comments for get_result, it requires mysqlnd.</span></code></div>
  </div>
 </div>
  <div class="note" id="116728">  <div class="votes">
    <div id="Vu116728">
    <a href="/manual/vote-note.php?id=116728&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116728">
    <a href="/manual/vote-note.php?id=116728&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116728" title="62% like this...">
    2
    </div>
  </div>
  <a href="#116728" class="name">
  <strong class="user"><em>Masterkitano</em></strong></a><a class="genanchor" href="#116728"> &para;</a><div class="date" title="2015-02-20 03:53"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116728">
<div class="phpcode"><code><span class="html">for people who doesn't have the mysqlInd driver or for some reason just can't use the stmt-&gt;get_result, I've made this function which allows you to "mimic" the mysqli_result::fetch_assoc:<br /><br />function fetchAssocStatement($stmt)<br />    {<br />        if($stmt-&gt;num_rows&gt;0)<br />        {<br />            $result = array();<br />            $md = $stmt-&gt;result_metadata();<br />            $params = array();<br />            while($field = $md-&gt;fetch_field()) {<br />                $params[] = &amp;$result[$field-&gt;name];<br />            }<br />            call_user_func_array(array($stmt, 'bind_result'), $params);<br />            $stmt-&gt;fetch();<br />            return $result;<br />        }<br /><br />        return null;<br />    }<br /><br />you can use it in a while sentence to fetch and return an assoc array from the statement (as long as the statement is open):<br />usage:<br />$statement = $mysqli-&gt;prepare($query));<br />$statement.execute();<br />while($rowAssocArray = fetchAssocStatement($statement))<br />{<br />    //do something<br />}<br /><br />$statement.close();<br /><br />hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="126799">  <div class="votes">
    <div id="Vu126799">
    <a href="/manual/vote-note.php?id=126799&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126799">
    <a href="/manual/vote-note.php?id=126799&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126799" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126799" class="name">
  <strong class="user"><em>carloshritzmann at gmail dot com</em></strong></a><a class="genanchor" href="#126799"> &para;</a><div class="date" title="2022-01-25 12:16"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126799">
<div class="phpcode"><code><span class="html">From PHP 7.4+, you can use the spread operator (...) to easily automate the process of assigning variables to the query statement, and to fetch data when executing a SELECT request using prepared statements.<br /><br />However, the spread operator takes in consideration the size of the array. So it must be pre allocated before used in any context.<br /><br /><span class="default">&lt;?php  <br />    $link </span><span class="keyword">= </span><span class="comment">// Create DB Connection<br /><br />    </span><span class="default">$query_text </span><span class="keyword">= </span><span class="string">"SELECT mission, year, report FROM table WHERE id=? AND name=?;"</span><span class="keyword">;<br /><br />    </span><span class="comment">// Data to assign<br />    </span><span class="default">$types </span><span class="keyword">= </span><span class="string">"is"</span><span class="keyword">;<br />    </span><span class="default">$param </span><span class="keyword">= [</span><span class="default">0</span><span class="keyword">, </span><span class="string">"John Titor"</span><span class="keyword">];<br /><br />    </span><span class="comment">// Prepare and Execute Statement<br />    </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">mysqli_stmt_prepare</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">, </span><span class="default">$query_text</span><span class="keyword">);<br />    if (</span><span class="default">mysqli_stmt_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">)) {<br /><br />        </span><span class="comment">// We know we are going to retrieve 3 columns: Mission, Year and Report.<br />        </span><span class="default">$output </span><span class="keyword">= [</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">];<br /><br />        </span><span class="comment">// Behind the scenes, the spread operator gives this idea when used: <br />        // mysqli_stmt_bind_result($link, $output[0], $output[1], $output[2]);<br />        </span><span class="default">mysqli_stmt_bind_result</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, ...</span><span class="default">$output</span><span class="keyword">);<br /><br />        </span><span class="comment">// Fetch data<br />        </span><span class="keyword">while (</span><span class="default">mysqli_stmt_fetch</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">)) {<br />            echo </span><span class="string">"Mission: " </span><span class="keyword">. </span><span class="default">$output</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] . </span><span class="string">"\n"</span><span class="keyword">;<br />            echo </span><span class="string">"Year: " </span><span class="keyword">. </span><span class="default">$output</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] .</span><span class="string">"\n"</span><span class="keyword">;<br />            echo </span><span class="string">"Report: " </span><span class="keyword">. </span><span class="default">$output</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] . </span><span class="string">"\n"</span><span class="keyword">;<br />        }<br /><br />    } else {<br />        echo </span><span class="string">"Error: Wrong Timeline\n"</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// Close DB Connection<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105068">  <div class="votes">
    <div id="Vu105068">
    <a href="/manual/vote-note.php?id=105068&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105068">
    <a href="/manual/vote-note.php?id=105068&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105068" title="100% like this...">
    2
    </div>
  </div>
  <a href="#105068" class="name">
  <strong class="user"><em>dev+php at alepe dot com</em></strong></a><a class="genanchor" href="#105068"> &para;</a><div class="date" title="2011-07-25 10:31"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105068">
<div class="phpcode"><code><span class="html">According to the above documentation: 
<br />"Depending on column types bound variables can silently change to the corresponding PHP type. "
<br />
<br />if you specify a field as int (tinyint, mediumint, etc.) with zerofill property, it will be converted (silently) to PHP integer (erasing the leading zeros). In order to keep those leading zeros, one solution is to specify the field as decimal.
<br />
<br />Note that this only happens when using prepared statements and not when executing the query directly.</span></code></div>
  </div>
 </div>
  <div class="note" id="92287">  <div class="votes">
    <div id="Vu92287">
    <a href="/manual/vote-note.php?id=92287&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92287">
    <a href="/manual/vote-note.php?id=92287&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92287" title="100% like this...">
    1
    </div>
  </div>
  <a href="#92287" class="name">
  <strong class="user"><em>Miguel Hatrick</em></strong></a><a class="genanchor" href="#92287"> &para;</a><div class="date" title="2009-07-17 09:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92287">
<div class="phpcode"><code><span class="html">Took some cool code from here and made a little class for those object oriented kind of guys
<br />
<br />used like this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// execute prepared statement
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">();
<br />            
<br /></span><span class="comment">//custom class :D bind to Statement Result mambo jambo!
<br /></span><span class="default">$sr </span><span class="keyword">= new </span><span class="default">Statement_Result</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);
<br />            
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">();
<br /></span><span class="default">printf</span><span class="keyword">(</span><span class="string">"ID: %d\n"</span><span class="keyword">, </span><span class="default">$sr</span><span class="keyword">-&gt;</span><span class="default">Get</span><span class="keyword">(</span><span class="string">'id'</span><span class="keyword">) );
<br />
<br /></span><span class="comment">/////////////////////////////////
<br />
<br /></span><span class="keyword">class </span><span class="default">Statement_Result
<br /></span><span class="keyword">{
<br />    private </span><span class="default">$_bindVarsArray </span><span class="keyword">= array();
<br />    private </span><span class="default">$_results </span><span class="keyword">= array();
<br />
<br />    public function </span><span class="default">__construct</span><span class="keyword">(&amp;</span><span class="default">$stmt</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$meta </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">result_metadata</span><span class="keyword">();
<br />
<br />        while (</span><span class="default">$columnName </span><span class="keyword">= </span><span class="default">$meta</span><span class="keyword">-&gt;</span><span class="default">fetch_field</span><span class="keyword">())
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_bindVarsArray</span><span class="keyword">[] = &amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_results</span><span class="keyword">[</span><span class="default">$columnName</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">];
<br />
<br />        </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">'bind_result'</span><span class="keyword">), </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_bindVarsArray</span><span class="keyword">);
<br />        
<br />        </span><span class="default">$meta</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br />    }
<br />    
<br />    public function </span><span class="default">Get_Array</span><span class="keyword">()
<br />    {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_results</span><span class="keyword">;    
<br />    }
<br />    
<br />    public function </span><span class="default">Get</span><span class="keyword">(</span><span class="default">$column_name</span><span class="keyword">)
<br />    {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_results</span><span class="keyword">[</span><span class="default">$column_name</span><span class="keyword">];
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81350">  <div class="votes">
    <div id="Vu81350">
    <a href="/manual/vote-note.php?id=81350&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81350">
    <a href="/manual/vote-note.php?id=81350&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81350" title="100% like this...">
    1
    </div>
  </div>
  <a href="#81350" class="name">
  <strong class="user"><em>bb at servertje dot nl</em></strong></a><a class="genanchor" href="#81350"> &para;</a><div class="date" title="2008-02-23 03:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81350">
<div class="phpcode"><code><span class="html">Although inspired by an earlier post, this method could be added to any of your database objects. It's an object oriented implementation of an earlier post.
<br />
<br />The method returns an array with objects representing a row. Each property represents a column and its value.
<br /> 
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">private function </span><span class="default">getresult</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">)
<br />    {
<br />      </span><span class="default">$result </span><span class="keyword">= array();
<br />      
<br />      </span><span class="default">$metadata </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">result_metadata</span><span class="keyword">();
<br />      </span><span class="default">$fields </span><span class="keyword">= </span><span class="default">$metadata</span><span class="keyword">-&gt;</span><span class="default">fetch_fields</span><span class="keyword">();
<br />
<br />      for (;;)
<br />      {
<br />        </span><span class="default">$pointers </span><span class="keyword">= array();
<br />        </span><span class="default">$row </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">();
<br />        
<br />        </span><span class="default">$pointers</span><span class="keyword">[] = </span><span class="default">$stmt</span><span class="keyword">;
<br />        foreach (</span><span class="default">$fields </span><span class="keyword">as </span><span class="default">$field</span><span class="keyword">)
<br />        {
<br />          </span><span class="default">$fieldname </span><span class="keyword">= </span><span class="default">$field</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">;
<br />          </span><span class="default">$pointers</span><span class="keyword">[] = &amp;</span><span class="default">$row</span><span class="keyword">-&gt;</span><span class="default">$fieldname</span><span class="keyword">;
<br />        }
<br />        
<br />        </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">mysqli_stmt_bind_result</span><span class="keyword">, </span><span class="default">$pointers</span><span class="keyword">);
<br />        
<br />        if (!</span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">())
<br />          break;
<br />        
<br />        </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$row</span><span class="keyword">;
<br />      }
<br />      
<br />      </span><span class="default">$metadata</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();
<br />      
<br />      return </span><span class="default">$result</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="51173">  <div class="votes">
    <div id="Vu51173">
    <a href="/manual/vote-note.php?id=51173&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51173">
    <a href="/manual/vote-note.php?id=51173&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51173" title="50% like this...">
    0
    </div>
  </div>
  <a href="#51173" class="name">
  <strong class="user"><em>brad dot jackson at resiideo dot com</em></strong></a><a class="genanchor" href="#51173"> &para;</a><div class="date" title="2005-03-22 09:10"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51173">
<div class="phpcode"><code><span class="html">A potential problem exists in binding result parameters from a prepared statement which reference large datatypes like mediumblobs.  One of our database tables contains a table of binary image data.  Our largest image in this table is around 50Kb, but even so the column is typed as a mediumblob to allow for files larger than 64Kb.  I spent a frustrating hour trying to figure out why mysqli_stmt_bind_result choked while trying to allocate 16MB of memory for what should have been at most a 50Kb result, until I realized the function is checking the column type first to find out how big a result _might_ be retrieved, and attempting to allocate that much memory to contain it.  My solution was to use a more basic mysqli_result() query.  Another option might have been to retype the image data column as blob (64Kb limit).</span></code></div>
  </div>
 </div>
  <div class="note" id="57943">  <div class="votes">
    <div id="Vu57943">
    <a href="/manual/vote-note.php?id=57943&amp;page=mysqli-stmt.bind-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57943">
    <a href="/manual/vote-note.php?id=57943&amp;page=mysqli-stmt.bind-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57943" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#57943" class="name">
  <strong class="user"><em>thejkwhosaysni at gmail dot com</em></strong></a><a class="genanchor" href="#57943"> &para;</a><div class="date" title="2005-10-19 01:12"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57943">
<div class="phpcode"><code><span class="html">I've created these functions which will act like mysqli_fetch_array() and mysqli_fetch_object() but work with bound results.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">fetch_object</span><span class="keyword">() {
<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">mysqli_stmt_result_metadata</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stmt</span><span class="keyword">);
<br />        </span><span class="default">$count </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="comment">//start the count from 1. First value has to be a reference to stmt.
<br />        </span><span class="default">$fieldnames</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = &amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stmt</span><span class="keyword">;
<br />        </span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">;
<br />        while (</span><span class="default">$field </span><span class="keyword">= </span><span class="default">mysqli_fetch_field</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)) {
<br />            </span><span class="default">$fn </span><span class="keyword">= </span><span class="default">$field</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">; </span><span class="comment">//get all the feild names
<br />            </span><span class="default">$fieldnames</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">] = &amp;</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">$fn</span><span class="keyword">; </span><span class="comment">//load the fieldnames into an object..
<br />            </span><span class="default">$count</span><span class="keyword">++;
<br />        }
<br />        </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">mysqli_stmt_bind_result</span><span class="keyword">, </span><span class="default">$fieldnames</span><span class="keyword">);
<br />        </span><span class="default">mysqli_stmt_fetch</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stmt</span><span class="keyword">);
<br />        return </span><span class="default">$obj</span><span class="keyword">;
<br />    }
<br />
<br />    function </span><span class="default">fetch_array</span><span class="keyword">() {
<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">mysqli_stmt_result_metadata</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stmt</span><span class="keyword">);
<br />        </span><span class="default">$count </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="comment">//start the count from 1. First value has to be a reference to the stmt. because bind_param requires the link to $stmt as the first param.
<br />        </span><span class="default">$fieldnames</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = &amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stmt</span><span class="keyword">;
<br />        while (</span><span class="default">$field </span><span class="keyword">= </span><span class="default">mysqli_fetch_field</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)) {
<br />            </span><span class="default">$fieldnames</span><span class="keyword">[</span><span class="default">$count</span><span class="keyword">] = &amp;</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$field</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">]; </span><span class="comment">//load the fieldnames into an array.
<br />            </span><span class="default">$count</span><span class="keyword">++;
<br />        }
<br />        </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">mysqli_stmt_bind_result</span><span class="keyword">, </span><span class="default">$fieldnames</span><span class="keyword">);
<br />        </span><span class="default">mysqli_stmt_fetch</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stmt</span><span class="keyword">);
<br />        return </span><span class="default">$array</span><span class="keyword">;
<br />
<br />    }
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hope this helps some people, I was puzzled by this for a while.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli-stmt.bind-result&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-stmt.bind-result.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
