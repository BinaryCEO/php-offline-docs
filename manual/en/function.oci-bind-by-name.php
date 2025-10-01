<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: oci_bind_by_name - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.oci-bind-by-name.php">
 <link rel="shorturl" href="https://www.php.net/oci-bind-by-name">
 <link rel="alternate" href="https://www.php.net/oci-bind-by-name" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.oci8.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.oci-bind-array-by-name.php">
 <link rel="next" href="https://www.php.net/manual/en/function.oci-cancel.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.oci-bind-by-name.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.oci-bind-by-name.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.oci-bind-by-name.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.oci-bind-by-name.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.oci-bind-by-name.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.oci-bind-by-name.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.oci-bind-by-name.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.oci-bind-by-name.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.oci-bind-by-name.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.oci-bind-by-name.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.oci-bind-by-name.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binds a PHP variable to an Oracle placeholder" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: oci_bind_by_name - Manual" />
<meta name="twitter:description" content="Binds a PHP variable to an Oracle placeholder" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: oci_bind_by_name - Manual" />
<meta itemprop="description" content="Binds a PHP variable to an Oracle placeholder" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binds a PHP variable to an Oracle placeholder" />

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
        <a href="function.oci-cancel.php">
          oci_cancel &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.oci-bind-array-by-name.php">
          &laquo; oci_bind_array_by_name        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.oci8.php'>OCI8</a></li>      <li><a href='ref.oci8.php'>OCI8 Functions</a></li>      </ul>
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
            <option value='en/function.oci-bind-by-name.php' selected="selected">English</option>
            <option value='de/function.oci-bind-by-name.php'>German</option>
            <option value='es/function.oci-bind-by-name.php'>Spanish</option>
            <option value='fr/function.oci-bind-by-name.php'>French</option>
            <option value='it/function.oci-bind-by-name.php'>Italian</option>
            <option value='ja/function.oci-bind-by-name.php'>Japanese</option>
            <option value='pt_BR/function.oci-bind-by-name.php'>Brazilian Portuguese</option>
            <option value='ru/function.oci-bind-by-name.php'>Russian</option>
            <option value='tr/function.oci-bind-by-name.php'>Turkish</option>
            <option value='uk/function.oci-bind-by-name.php'>Ukrainian</option>
            <option value='zh/function.oci-bind-by-name.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.oci-bind-by-name" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">oci_bind_by_name</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL OCI8 &gt;= 1.1.0)</p><p class="refpurpose"><span class="refname">oci_bind_by_name</span> &mdash; <span class="dc-title">Binds a PHP variable to an Oracle placeholder</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.oci-bind-by-name-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>oci_bind_by_name</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$statement</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$param</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&$var</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$max_length</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Binds a PHP variable <code class="parameter">var</code> to the Oracle
   bind variable placeholder <code class="parameter">param</code>.  Binding
   is important for Oracle database performance and also as a way to
   avoid SQL Injection security issues.
  </p>

  <p class="para">
    Binding allows the database to reuse the statement context and
    caches from previous executions of the statement, even if another
    user or process originally executed it.  Binding reduces SQL
    Injection concerns because the data associated with a bind
    variable is never treated as part of the SQL statement.  It does
    not need quoting or escaping.
  </p>

  <p class="para">
    PHP variables that have been bound can be changed and the
    statement re-executed without needing to re-parse the statement or
    re-bind.
  </p>

  <p class="para">
    In Oracle, bind variables are commonly divided
    into <code class="literal">IN</code> binds for values that are passed into
    the database, and <code class="literal">OUT</code> binds for values that are
    returned to PHP.  A bind variable may be
    both <code class="literal">IN</code> and <code class="literal">OUT</code>.  Whether a
    bind variable will be used for input or output is determined at
    run-time.
  </p>

  <p class="para">
    You must specify <code class="parameter">max_length</code> when using
    an <code class="literal">OUT</code> bind so that PHP allocates enough memory
    to hold the returned value.
  </p>

  <p class="para">
    For <code class="literal">IN</code> binds it is recommended to set
    the <code class="parameter">max_length</code> length if the statement is
    re-executed multiple times with different values for the PHP
    variable.  Otherwise Oracle may truncate data to the length of the
    initial PHP variable value.  If you don&#039;t know what the maximum
    length will be, then re-call <span class="function"><strong>oci_bind_by_name()</strong></span>
    with the current data size prior to
    each <span class="function"><a href="function.oci-execute.php" class="function">oci_execute()</a></span> call. Binding an
    unnecessarily large length will have an impact on process memory
    in the database.
  </p>

  <p class="para">
    A bind call tells Oracle which memory address to read data from.
    For <code class="literal">IN</code> binds that address needs to contain
    valid data when <span class="function"><a href="function.oci-execute.php" class="function">oci_execute()</a></span> is called.  This
    means that the variable bound must remain in scope until
    execution.  If it doesn&#039;t, unexpected results or errors such as
    &quot;ORA-01460: unimplemented or unreasonable conversion requested&quot;
    may occur.  For <code class="literal">OUT</code> binds one symptom is no
    value being set in the PHP variable.
  </p>

  <p class="para">
    For a statement that is repeatedly executed, binding values that
    never change may reduce the ability of the Oracle optimizer to
    choose the best statement execution plan.  Long running statements
    that are rarely re-executed may not benefit from binding.  However
    in both cases, binding might be safer than joining strings into a
    SQL statement, as this can be a security risk if unfiltered user
    text is concatenated.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.oci-bind-by-name-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">statement</code></dt>
     <dd>
      <p class="para">
       A valid OCI8 statement identifier.
      </p>
     </dd>
    
    
     <dt><code class="parameter">param</code></dt>
     <dd>
      <p class="para">
       The colon-prefixed bind variable placeholder used in the
       statement.  The colon is optional
       in <code class="parameter">param</code>. Oracle does not use question
       marks for placeholders.
      </p>
     </dd>
    
    
     <dt><code class="parameter">var</code></dt>
     <dd>
      <p class="para">
       The PHP variable to be associated with <code class="parameter">param</code>
      </p>
     </dd>
    
    
     <dt><code class="parameter">max_length</code></dt>
     <dd>
      <p class="para">
       Sets the maximum length for the data. If you set it to -1, this
       function will use the current length
       of <code class="parameter">var</code> to set the maximum
       length. In this case the <code class="parameter">var</code> must
       exist and contain data
       when <span class="function"><strong>oci_bind_by_name()</strong></span> is called.
      </p>
     </dd>
    
    
     <dt><code class="parameter">type</code></dt>
     <dd>
      <p class="para">
       The datatype that Oracle will treat the data as.  The
       default <code class="parameter">type</code> used
       is <strong><code><a href="oci8.constants.php#constant.sqlt-chr">SQLT_CHR</a></code></strong>. Oracle will convert the data
       between this type and the database column (or PL/SQL variable
       type), when possible.
      </p>
      <p class="para">
       If you need to bind an abstract datatype (LOB/ROWID/BFILE) you
       need to allocate it first using the
       <span class="function"><a href="function.oci-new-descriptor.php" class="function">oci_new_descriptor()</a></span> function. The
       <code class="parameter">length</code> is not used for abstract datatypes
       and should be set to -1.
      </p>
      <p class="para">
       Possible values for <code class="parameter">type</code> are:
       <ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-bfilee">SQLT_BFILEE</a></code></strong> or <strong><code><a href="oci8.constants.php#constant.oci-b-bfile">OCI_B_BFILE</a></code></strong>
           - for BFILEs;
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-cfilee">SQLT_CFILEE</a></code></strong> or <strong><code><a href="oci8.constants.php#constant.oci-b-cfilee">OCI_B_CFILEE</a></code></strong>
          - for CFILEs;
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-clob">SQLT_CLOB</a></code></strong> or <strong><code><a href="oci8.constants.php#constant.oci-b-clob">OCI_B_CLOB</a></code></strong>
          - for CLOBs;
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-blob">SQLT_BLOB</a></code></strong> or <strong><code><a href="oci8.constants.php#constant.oci-b-blob">OCI_B_BLOB</a></code></strong>
          - for BLOBs;
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-rdd">SQLT_RDD</a></code></strong> or <strong><code><a href="oci8.constants.php#constant.oci-b-rowid">OCI_B_ROWID</a></code></strong>
          - for ROWIDs;
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-nty">SQLT_NTY</a></code></strong> or <strong><code><a href="oci8.constants.php#constant.oci-b-nty">OCI_B_NTY</a></code></strong>
          - for named datatypes;
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-int">SQLT_INT</a></code></strong> or <strong><code><a href="oci8.constants.php#constant.oci-b-int">OCI_B_INT</a></code></strong> - for integers;
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-chr">SQLT_CHR</a></code></strong> - for VARCHARs;
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-bin">SQLT_BIN</a></code></strong> or <strong><code><a href="oci8.constants.php#constant.oci-b-bin">OCI_B_BIN</a></code></strong>
          - for RAW columns;
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-lng">SQLT_LNG</a></code></strong> - for LONG columns;
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-lbi">SQLT_LBI</a></code></strong> - for LONG RAW columns;
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-rset">SQLT_RSET</a></code></strong> - for cursors created
          with <span class="function"><a href="function.oci-new-cursor.php" class="function">oci_new_cursor()</a></span>;
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="oci8.constants.php#constant.sqlt-bol">SQLT_BOL</a></code></strong> or <strong><code><a href="oci8.constants.php#constant.oci-b-bol">OCI_B_BOL</a></code></strong>
          - for PL/SQL BOOLEANs (Requires Oracle Database 12c)
         </p>
        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.oci-bind-by-name-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.oci-bind-by-name-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1942">
    <p><strong>Example #1 Inserting data with <span class="function"><strong>oci_bind_by_name()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Create the table with:<br />//   CREATE TABLE mytab (id NUMBER, text VARCHAR2(40));<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$m </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">,</span><span style="color: #DD0000">"INSERT INTO mytab (id, text) VALUES(:id_bv, :text_bv)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$id </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$text </span><span style="color: #007700">= </span><span style="color: #DD0000">"Data to insert     "</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":id_bv"</span><span style="color: #007700">, </span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":text_bv"</span><span style="color: #007700">, </span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Table now contains: 1, 'Data to insert     '<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   <div class="example" id="example-1943">
    <p><strong>Example #2 Binding once for multiple executions</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Create the table with:<br />//   CREATE TABLE mytab (id NUMBER);<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$m </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">3</span><span style="color: #007700">,</span><span style="color: #0000BB">5</span><span style="color: #007700">,</span><span style="color: #0000BB">7</span><span style="color: #007700">,</span><span style="color: #0000BB">11</span><span style="color: #007700">);  </span><span style="color: #FF8000">// data to insert<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'INSERT INTO mytab (id) VALUES (:bv)'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':bv'</span><span style="color: #007700">, </span><span style="color: #0000BB">$v</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$a </span><span style="color: #007700">as </span><span style="color: #0000BB">$v</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$r </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_DEFAULT</span><span style="color: #007700">);  </span><span style="color: #FF8000">// don't auto commit<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">oci_commit</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">); </span><span style="color: #FF8000">// commit everything at once<br /><br />// Table contains five rows: 1, 3, 5, 7, 11<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   <div class="example" id="example-1944">
    <p><strong>Example #3 Binding with a <code class="literal">foreach</code> loop</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$m </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT * FROM departments WHERE department_name = :dname AND location_id = :loc'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$ba </span><span style="color: #007700">= array(</span><span style="color: #DD0000">':dname' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'IT Support'</span><span style="color: #007700">, </span><span style="color: #DD0000">':loc' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1700</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$ba </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br /><br />    </span><span style="color: #FF8000">// oci_bind_by_name($stid, $key, $val) does not work<br />    // because it binds each placeholder to the same location: $val<br />    // instead use the actual location of the data: $ba[$key]<br />    </span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">$key</span><span style="color: #007700">, </span><span style="color: #0000BB">$ba</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />}<br /><br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">+</span><span style="color: #0000BB">OCI_RETURN_NULLS</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$row </span><span style="color: #007700">as </span><span style="color: #0000BB">$item</span><span style="color: #007700">) {<br />    print </span><span style="color: #0000BB">$item</span><span style="color: #007700">.</span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   <div class="example" id="example-1945">
    <p><strong>Example #4 Binding in a WHERE clause</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"hr"</span><span style="color: #007700">, </span><span style="color: #DD0000">"hrpwd"</span><span style="color: #007700">, </span><span style="color: #DD0000">"localhost/XE"</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$m </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT last_name FROM employees WHERE department_id = :didbv ORDER BY last_name'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$didbv </span><span style="color: #007700">= </span><span style="color: #0000BB">60</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':didbv'</span><span style="color: #007700">, </span><span style="color: #0000BB">$didbv</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">)) != </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'LAST_NAME'</span><span style="color: #007700">] .</span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Output is<br />//    Austin<br />//    Ernst<br />//    Hunold<br />//    Lorentz<br />//    Pataballa<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   <div class="example" id="example-1946">
    <p><strong>Example #5 Binding with a LIKE clause</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$m </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Find all cities that begin with 'South'<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT city FROM locations WHERE city LIKE :bv"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$city </span><span style="color: #007700">= </span><span style="color: #DD0000">'South%'</span><span style="color: #007700">;  </span><span style="color: #FF8000">// '%' is a wildcard in SQL<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":bv"</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_fetch_all</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">$res</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$res</span><span style="color: #007700">[</span><span style="color: #DD0000">'CITY'</span><span style="color: #007700">] as </span><span style="color: #0000BB">$c</span><span style="color: #007700">) {<br />    print </span><span style="color: #0000BB">$c </span><span style="color: #007700">. </span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #FF8000">// Output is<br />//   South Brunswick<br />//   South San Francisco<br />//   Southlake<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   <div class="example" id="example-1947">
    <p><strong>Example #6 Binding with REGEXP_LIKE</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$m </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Find all cities that contain 'ing'<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT city FROM locations WHERE REGEXP_LIKE(city, :bv)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$city </span><span style="color: #007700">= </span><span style="color: #DD0000">'.*ing.*'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":bv"</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_fetch_all</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">$res</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$res</span><span style="color: #007700">[</span><span style="color: #DD0000">'CITY'</span><span style="color: #007700">] as </span><span style="color: #0000BB">$c</span><span style="color: #007700">) {<br />    print </span><span style="color: #0000BB">$c </span><span style="color: #007700">. </span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #FF8000">// Output is<br />//   Beijing<br />//   Singapore<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
    For a small, fixed number of IN clause conditions, use individual
    bind variables. Values unknown at run time can be set to NULL.
    This allows a single statement to be used by all application
    users, maximizing Oracle DB cache efficiency.
  </p>

  <p class="para">
   <div class="example" id="example-1948">
    <p><strong>Example #7 Binding Multiple Values in an IN Clause</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$m </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT last_name FROM employees WHERE employee_id in (:e1, :e2, :e3)'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mye1 </span><span style="color: #007700">= </span><span style="color: #0000BB">103</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$mye2 </span><span style="color: #007700">= </span><span style="color: #0000BB">104</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$mye3 </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">; </span><span style="color: #FF8000">// pretend we were not given this value<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':e1'</span><span style="color: #007700">, </span><span style="color: #0000BB">$mye1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':e2'</span><span style="color: #007700">, </span><span style="color: #0000BB">$mye2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':e3'</span><span style="color: #007700">, </span><span style="color: #0000BB">$mye3</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_fetch_all</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">$res</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$res</span><span style="color: #007700">[</span><span style="color: #DD0000">'LAST_NAME'</span><span style="color: #007700">] as </span><span style="color: #0000BB">$name</span><span style="color: #007700">) {<br />    print </span><span style="color: #0000BB">$name </span><span style="color: #007700">.</span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Output is<br />//   Ernst<br />//   Hunold<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   <div class="example" id="example-1949">
    <p><strong>Example #8 Binding a ROWID returned by a query</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Create the table with:<br />//   CREATE TABLE mytab (id NUMBER, salary NUMBER, name VARCHAR2(40));<br />//   INSERT INTO mytab (id, salary, name) VALUES (1, 100, 'Chris');<br />//   COMMIT;<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$m </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT ROWID, name FROM mytab WHERE id = :id_bv FOR UPDATE'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$id </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':id_bv'</span><span style="color: #007700">, </span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">+</span><span style="color: #0000BB">OCI_RETURN_NULLS</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$rid </span><span style="color: #007700">= </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'ROWID'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'NAME'</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">// Change name to upper case &amp; save the changes<br /></span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'UPDATE mytab SET name = :n_bv WHERE ROWID = :r_bv'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':n_bv'</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':r_bv'</span><span style="color: #007700">, </span><span style="color: #0000BB">$rid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_B_ROWID</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The table now contains 1, 100, CHRIS<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   <div class="example" id="example-1950">
    <p><strong>Example #9 Binding a ROWID on INSERT</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// This example inserts an id &amp; name, and then updates the salary<br />// Create the table with:<br />//   CREATE TABLE mytab (id NUMBER, salary NUMBER, name VARCHAR2(40));<br />//<br />// Based on original ROWID example by thies at thieso dot net (980221)<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$m </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO mytab (id, name) VALUES(:id_bv, :name_bv)<br />        RETURNING ROWID INTO :rid"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$ins_stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$rowid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_new_descriptor</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_D_ROWID</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$ins_stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":id_bv"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$id</span><span style="color: #007700">,    </span><span style="color: #0000BB">10</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$ins_stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":name_bv"</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">,  </span><span style="color: #0000BB">32</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$ins_stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":rid"</span><span style="color: #007700">,     </span><span style="color: #0000BB">$rowid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_B_ROWID</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE mytab SET salary = :salary WHERE ROWID = :rid"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$upd_stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$upd_stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":rid"</span><span style="color: #007700">, </span><span style="color: #0000BB">$rowid</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_B_ROWID</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$upd_stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":salary"</span><span style="color: #007700">, </span><span style="color: #0000BB">$salary</span><span style="color: #007700">,   </span><span style="color: #0000BB">32</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// ids and names to insert<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1111 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Larry"</span><span style="color: #007700">,<br />              </span><span style="color: #0000BB">2222 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Bill"</span><span style="color: #007700">,<br />              </span><span style="color: #0000BB">3333 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Jim"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Salary of each person<br /></span><span style="color: #0000BB">$salary </span><span style="color: #007700">= </span><span style="color: #0000BB">10000</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Insert and immediately update each row<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$data </span><span style="color: #007700">as </span><span style="color: #0000BB">$id </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$name</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$ins_stid</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$upd_stid</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$rowid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">free</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$upd_stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$ins_stid</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Show the new rows<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT * FROM mytab"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br />while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">+</span><span style="color: #0000BB">OCI_RETURN_NULLS</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   <div class="example" id="example-1951">
    <p><strong>Example #10 Binding for a PL/SQL stored function</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">//  Before running the PHP program, create a stored function in<br />//  SQL*Plus or SQL Developer:<br />//<br />//  CREATE OR REPLACE FUNCTION myfunc(p IN NUMBER) RETURN NUMBER AS<br />//  BEGIN<br />//      RETURN p * 3;<br />//  END;<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$p </span><span style="color: #007700">= </span><span style="color: #0000BB">8</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'begin :r := myfunc(:p); end;'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':p'</span><span style="color: #007700">, </span><span style="color: #0000BB">$p</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The return value is an OUT bind. The default type will be a string<br />// type so binding a length 40 means that at most 40 digits will be<br />// returned.<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':r'</span><span style="color: #007700">, </span><span style="color: #0000BB">$r</span><span style="color: #007700">, </span><span style="color: #0000BB">40</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br />print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$r</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;   </span><span style="color: #FF8000">// prints 24<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
  <div class="example" id="example-1952">
   <p><strong>Example #11 Binding parameters for a PL/SQL stored procedure</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">//  Before running the PHP program, create a stored procedure in<br />//  SQL*Plus or SQL Developer:<br />//<br />//  CREATE OR REPLACE PROCEDURE myproc(p1 IN NUMBER, p2 OUT NUMBER) AS<br />//  BEGIN<br />//      p2 := p1 * 2;<br />//  END;<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$p1 </span><span style="color: #007700">= </span><span style="color: #0000BB">8</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'begin myproc(:p1, :p2); end;'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':p1'</span><span style="color: #007700">, </span><span style="color: #0000BB">$p1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The second procedure parameter is an OUT bind. The default type<br />// will be a string type so binding a length 40 means that at most 40<br />// digits will be returned.<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':p2'</span><span style="color: #007700">, </span><span style="color: #0000BB">$p2</span><span style="color: #007700">, </span><span style="color: #0000BB">40</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br />print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$p2</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;   </span><span style="color: #FF8000">// prints 16<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
  <div class="example" id="example-1953">
   <p><strong>Example #12 Binding a CLOB column</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Before running, create the table:<br />//     CREATE TABLE mytab (mykey NUMBER, myclob CLOB);<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$mykey </span><span style="color: #007700">= </span><span style="color: #0000BB">12343</span><span style="color: #007700">;  </span><span style="color: #FF8000">// arbitrary key for this example;<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO mytab (mykey, myclob)<br />        VALUES (:mykey, EMPTY_CLOB())<br />        RETURNING myclob INTO :myclob"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$clob </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_new_descriptor</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_D_LOB</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":mykey"</span><span style="color: #007700">, </span><span style="color: #0000BB">$mykey</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":myclob"</span><span style="color: #007700">, </span><span style="color: #0000BB">$clob</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_B_CLOB</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_DEFAULT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$clob</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #DD0000">"A very long string"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">oci_commit</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Fetching CLOB data<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT myclob FROM mytab WHERE mykey = :mykey'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse </span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">":mykey"</span><span style="color: #007700">, </span><span style="color: #0000BB">$mykey</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br />print </span><span style="color: #DD0000">'&lt;table border="1"&gt;'</span><span style="color: #007700">;<br />while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">+</span><span style="color: #0000BB">OCI_RETURN_LOBS</span><span style="color: #007700">)) {<br />    print </span><span style="color: #DD0000">'&lt;tr&gt;&lt;td&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'MYCLOB'</span><span style="color: #007700">].</span><span style="color: #DD0000">'&lt;/td&gt;&lt;/tr&gt;'</span><span style="color: #007700">;<br />    </span><span style="color: #FF8000">// In a loop, freeing the large variable before the 2nd fetch reduces PHP's peak memory usage<br />    </span><span style="color: #007700">unset(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);  <br />}<br />print </span><span style="color: #DD0000">'&lt;/table&gt;'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  </p>

  <p class="para">
  <div class="example" id="example-1954">
   <p><strong>Example #13 Binding a PL/SQL BOOLEAN</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$plsql </span><span style="color: #007700">= <br />  </span><span style="color: #DD0000">"begin<br />    :output1 := true;<br />    :output2 := false;<br />   end;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$s </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">, </span><span style="color: #0000BB">$plsql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$s</span><span style="color: #007700">, </span><span style="color: #DD0000">':output1'</span><span style="color: #007700">, </span><span style="color: #0000BB">$output1</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_B_BOL</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$s</span><span style="color: #007700">, </span><span style="color: #DD0000">':output2'</span><span style="color: #007700">, </span><span style="color: #0000BB">$output2</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_B_BOL</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$s</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$output1</span><span style="color: #007700">);  </span><span style="color: #FF8000">// true<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$output2</span><span style="color: #007700">);  </span><span style="color: #FF8000">// false<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  </p>

 </div>


 <div class="refsect1 notes" id="refsect1-function.oci-bind-by-name-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Do not use <span class="function"><a href="function.addslashes.php" class="function">addslashes()</a></span>
    and <span class="function"><strong>oci_bind_by_name()</strong></span> simultaneously as no
    quoting is needed. Any magically applied quotes will be written
    into your database because <span class="function"><strong>oci_bind_by_name()</strong></span>
    inserts data verbatim and does not remove quotes or escape
    characters.
   </p>
  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If you bind a string to a <code class="literal">CHAR</code> column in
    a <code class="literal">WHERE</code> clause, remember that Oracle uses
    blank-padded comparison semantics for <code class="literal">CHAR</code>
    columns.  Your PHP variable should be blank padded to the same
    width as the column for the <code class="literal">WHERE</code> clause to
    succeed.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
     The PHP <code class="parameter">var</code> argument is a reference.  Some
     forms of loops do not work as expected:
   </p>
   <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$myarray </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">)  {<br />    </span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">$key</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

   </div>
   <p class="para">
     This binds each key to the location of $value, so all bound
     variables end up pointing to the last loop iteration&#039;s
     value. Instead use the following:
   </p>
   <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$myarray </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">$key</span><span style="color: #007700">, </span><span style="color: #0000BB">$myarray</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

   </div>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.oci-bind-by-name-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.oci-bind-array-by-name.php" class="function" rel="rdfs-seeAlso">oci_bind_array_by_name()</a> - Binds a PHP array to an Oracle PL/SQL array parameter</span></li>
    <li><span class="function"><a href="function.oci-parse.php" class="function" rel="rdfs-seeAlso">oci_parse()</a> - Prepares an Oracle statement for execution</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/oci8/functions/oci-bind-by-name.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.oci-bind-by-name%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.oci-bind-by-name&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.oci-bind-by-name.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">18 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="105911">  <div class="votes">
    <div id="Vu105911">
    <a href="/manual/vote-note.php?id=105911&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105911">
    <a href="/manual/vote-note.php?id=105911&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105911" title="100% like this...">
    6
    </div>
  </div>
  <a href="#105911" class="name">
  <strong class="user"><em>abiyi2000 at yahoo dot com</em></strong></a><a class="genanchor" href="#105911"> &para;</a><div class="date" title="2011-09-24 08:03"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105911">
<div class="phpcode"><code><span class="html">I unfortunately spent the whole day trying to make this work as part of OCI bind_by_name insert:
<br />
<br /><span class="default">&lt;?php
<br />      </span><span class="keyword">if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$v2</span><span class="keyword">)){
<br />        </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmth</span><span class="keyword">, </span><span class="default">$bvar</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">,  -</span><span class="default">1</span><span class="keyword">, </span><span class="default">OCI_B_INT</span><span class="keyword">);
<br />      }else{
<br />        </span><span class="default">$v2 </span><span class="keyword">= (string) </span><span class="default">$v2</span><span class="keyword">;
<br />        </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmth</span><span class="keyword">, </span><span class="default">$bvar</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">SQLT_CHR</span><span class="keyword">);
<br />      }
<br /></span><span class="default">?&gt;
<br /></span>
<br />The string field is always inserting correctly w/o any truncation. The string field is a  varchar2(160) CHAR, but the data used to populate it is 40 chars in length.
<br />
<br />The numeric part is of Type Number in the database which is being used to store unix time (10 digit seconds since 1970/01/01.
<br />
<br />The problem, the insert was truncating to 9 digits with some bogus value not even related to the input i.e., it's not just a matter of dropping the leftmost or rightmost digit, it'll just insert a 9 digit bogus number.
<br />
<br />The only way I was able to resolve this for the numeric field was to set the maxlength to 8 (not 10 which is the number of digits in the input): 
<br />
<br /><span class="default">&lt;?php
<br />      </span><span class="keyword">if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$v2</span><span class="keyword">)){
<br />        </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmth</span><span class="keyword">, </span><span class="default">$bvar</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">,  </span><span class="default">8</span><span class="keyword">, </span><span class="default">OCI_B_INT</span><span class="keyword">);
<br />      }else{
<br />        </span><span class="default">$v2 </span><span class="keyword">= (string) </span><span class="default">$v2</span><span class="keyword">;
<br />        </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmth</span><span class="keyword">, </span><span class="default">$bvar</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">SQLT_CHR</span><span class="keyword">);
<br />      }
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hopefully you'll see this soon before you expend a lot of time repeating the same problem I had.</span></code></div>
  </div>
 </div>
  <div class="note" id="119783">  <div class="votes">
    <div id="Vu119783">
    <a href="/manual/vote-note.php?id=119783&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119783">
    <a href="/manual/vote-note.php?id=119783&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119783" title="90% like this...">
    8
    </div>
  </div>
  <a href="#119783" class="name">
  <strong class="user"><em>martin dot abbrent at ufz dot de</em></strong></a><a class="genanchor" href="#119783"> &para;</a><div class="date" title="2016-08-24 11:21"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119783">
<div class="phpcode"><code><span class="html">Example #7 only shows the binding of a small fixed number of values in an IN clause. There is also a way to bind multiple conditions with a variable number of values.<br /><br /><span class="default">&lt;?php<br />$ids </span><span class="keyword">= array(<br />    </span><span class="default">103</span><span class="keyword">,<br />    </span><span class="default">104<br /></span><span class="keyword">);<br /><br /></span><span class="default">$conn         </span><span class="keyword">= </span><span class="default">oci_pconnect</span><span class="keyword">(</span><span class="default">$user</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">, </span><span class="default">$tns</span><span class="keyword">);<br /></span><span class="comment">// Using ORACLE table() function to get the ids from the subquery<br /></span><span class="default">$sql          </span><span class="keyword">= </span><span class="string">'SELECT * FROM employees WHERE employee_id IN (SELECT column_value FROM table(:ids))'</span><span class="keyword">;<br /></span><span class="default">$stmt         </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="comment">// Create collection of numbers. Build in type for strings is ODCIVARCHAR2LIST, but you can also create own types.<br /></span><span class="default">$idCollection </span><span class="keyword">= </span><span class="default">oci_new_collection</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">'ODCINUMBERLIST'</span><span class="keyword">, </span><span class="string">'SYS'</span><span class="keyword">);<br /><br /></span><span class="comment">// Maximum length of collections of type ODCINUMBERLIST is 32767, maybe you should check that!<br /></span><span class="keyword">foreach (</span><span class="default">$ids </span><span class="keyword">as </span><span class="default">$id</span><span class="keyword">) {<br />    </span><span class="default">$idCollection</span><span class="keyword">-&gt;</span><span class="default">append</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">);<br />}<br /><br /></span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">':ids'</span><span class="keyword">, </span><span class="default">$idCollection</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">SQLT_NTY</span><span class="keyword">);<br /></span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="default">OCI_DEFAULT</span><span class="keyword">);<br /></span><span class="default">oci_fetch_all</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="default">$return</span><span class="keyword">);<br /></span><span class="default">oci_free_statement</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br /><br /></span><span class="default">oci_close</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124325">  <div class="votes">
    <div id="Vu124325">
    <a href="/manual/vote-note.php?id=124325&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124325">
    <a href="/manual/vote-note.php?id=124325&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124325" title="66% like this...">
    1
    </div>
  </div>
  <a href="#124325" class="name">
  <strong class="user"><em>asui dot dev dot null at gmail dot com</em></strong></a><a class="genanchor" href="#124325"> &para;</a><div class="date" title="2019-10-22 11:20"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124325">
<div class="phpcode"><code><span class="html">If you are getting "ORA-01722: invalid number error" while inserting/updating a FLOAT value into a NUMBER column, please check the correctness of a binded value format according to the current locale settings. <br /><br />Default "american" locale assumes that value send to oracle will be a dot decimal separator (just like 4127.5). But with setlocale('pl_PL.UTF-8') your float number would be represented as 4127,5 and that form will be used while sending data do oracle causing a problem...<br />That was my case (8 hours of debugging).<br /><br />You can check your current locale with setlocale(LC_ALL, 0).<br /><br />What I can recommend as a solutions:<br />a) do not set locale, or set it to 'C' for a time of sending data;<br />b) convert float to a string format compatible with current oracle session NLS_NUMERIC_CHARACTERS parameter value. <br />For example: when NLS_NUMERIC_CHARACTERS = '.,' float value 4127.5 should be converted to '4127.5'.  Then oracle will catch it correctly even if current locale are set differently.</span></code></div>
  </div>
 </div>
  <div class="note" id="89074">  <div class="votes">
    <div id="Vu89074">
    <a href="/manual/vote-note.php?id=89074&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89074">
    <a href="/manual/vote-note.php?id=89074&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89074" title="66% like this...">
    1
    </div>
  </div>
  <a href="#89074" class="name">
  <strong class="user"><em>avenger at php dot net</em></strong></a><a class="genanchor" href="#89074"> &para;</a><div class="date" title="2009-02-20 03:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89074">
<div class="phpcode"><code><span class="html">Dont forget the 5th parameter: $type. It's will slowly your code some times. Eg:<br /><br /><span class="default">&lt;?php<br />$sql </span><span class="keyword">= </span><span class="string">"select * from (select * from b xxx) where rownum &lt; :rnum"</span><span class="keyword">;<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">OCIParse</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">,</span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="default">OCIBindByName</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">":rnum"</span><span class="keyword">, </span><span class="default">$NUM</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">OCIExecute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Below code was slow 5~6 time than not use bind value.Change the 3rd line to:<br /><br /><span class="default">&lt;?php<br />OCIBindByName</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">":rnum"</span><span class="keyword">, </span><span class="default">$NUM</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">SQLT_INT</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />will resloved this problem.<br /><br />This issue is also in the ADODB DB class(adodb.sf.net), you will be careful for use the SelectLimit method.</span></code></div>
  </div>
 </div>
  <div class="note" id="121775">  <div class="votes">
    <div id="Vu121775">
    <a href="/manual/vote-note.php?id=121775&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121775">
    <a href="/manual/vote-note.php?id=121775&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121775" title="100% like this...">
    2
    </div>
  </div>
  <a href="#121775" class="name">
  <strong class="user"><em>splintyg at gmail dot com</em></strong></a><a class="genanchor" href="#121775"> &para;</a><div class="date" title="2017-10-19 10:27"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121775">
<div class="phpcode"><code><span class="html">Guys, i've been looking for long time, how to pass clob to and get from procedure<br />CREATE OR REPLACE PROCEDURE myproc(p1 IN clob, p2 OUT clob);<br /><br />Here You are an answer:<br /><br /><span class="default">&lt;?php<br />        $conn </span><span class="keyword">= </span><span class="default">oci_connect</span><span class="keyword">(</span><span class="string">"TEST"</span><span class="keyword">, </span><span class="string">"html"</span><span class="keyword">, </span><span class="string">"//hostname"</span><span class="keyword">, </span><span class="string">"UTF8"</span><span class="keyword">);<br /><br />    </span><span class="default">$filename </span><span class="keyword">= </span><span class="string">"./clob.txt"</span><span class="keyword">;<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br />    </span><span class="default">$f </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">));<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br /><br />    </span><span class="default">$stid </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"begin myproc(:p1, :p2); end;"</span><span class="keyword">);<br />    </span><span class="default">$p1 </span><span class="keyword">= </span><span class="default">oci_new_descriptor</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">OCI_D_LOB</span><span class="keyword">);<br />    </span><span class="default">$p2 </span><span class="keyword">= </span><span class="default">oci_new_descriptor</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">OCI_D_LOB</span><span class="keyword">);<br />    <br />    </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="string">":p1"</span><span class="keyword">, </span><span class="default">$p1</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">OCI_B_CLOB</span><span class="keyword">);<br />    </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="string">":p2"</span><span class="keyword">, </span><span class="default">$p2</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">OCI_B_CLOB</span><span class="keyword">);<br />    </span><span class="default">$p1</span><span class="keyword">-&gt;</span><span class="default">writeTemporary</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="default">OCI_TEMP_BLOB</span><span class="keyword">);<br />    </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">); -- </span><span class="default">Figure out OCI_NO_AUTO_COMMIT<br />    oci_commit</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br />    echo </span><span class="default">$p2</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(); <br />    <br />    </span><span class="default">$p1    </span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />    </span><span class="default">$p2    </span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />    </span><span class="default">oci_free_statement</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">);<br />    </span><span class="default">oci_close</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />And perfect book about "PHP and Oracle" <br /><a href="http://www.oracle.com/technetwork/topics/php/underground-php-oracle-manual-098250.html" rel="nofollow" target="_blank">http://www.oracle.com/technetwork/topics/php/underground-php-oracle-manual-098250.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="129247">  <div class="votes">
    <div id="Vu129247">
    <a href="/manual/vote-note.php?id=129247&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129247">
    <a href="/manual/vote-note.php?id=129247&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129247" title="no votes...">
    0
    </div>
  </div>
  <a href="#129247" class="name">
  <strong class="user"><em>dub357 at gmail dot com</em></strong></a><a class="genanchor" href="#129247"> &para;</a><div class="date" title="2024-02-14 04:08"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129247">
<div class="phpcode"><code><span class="html">The note about the PHP var argument being a reference and some kinds of loops not working is very important here.  However, you can make a foreach loop work if you create a temporary variable, use that in the bind and then unset it.  For example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (</span><span class="default">$myarray </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">)  {<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />    </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />    unset(</span><span class="default">$value</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />This binds each key to the location of $value, but when you unset it after binding, it can be set and used again.<br /><br /><a href="https://www.php.net/manual/en/function.unset.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.unset.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="126261">  <div class="votes">
    <div id="Vu126261">
    <a href="/manual/vote-note.php?id=126261&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126261">
    <a href="/manual/vote-note.php?id=126261&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126261" title="no votes...">
    0
    </div>
  </div>
  <a href="#126261" class="name">
  <strong class="user"><em>charles dot fisher at arconic dot com</em></strong></a><a class="genanchor" href="#126261"> &para;</a><div class="date" title="2021-07-21 06:45"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126261">
<div class="phpcode"><code><span class="html">I am trying to rework ADOdb library calls to OCI, and I wrote this function today which is helping.<br /><br />function OraQry(&amp;$Results, $Query, $Binds = false) {<br />  global $xdb;<br /><br />  $Results = oci_parse($xdb, $Query);<br /><br />  if($Binds) foreach($Binds as $BindNm =&gt; $BindValJunk)<br />    oci_bind_by_name($Results, $BindNm, $Binds[$BindNm], -1);<br /><br />  oci_execute($Results, OCI_NO_AUTO_COMMIT);<br /><br />  return null;<br />}<br /><br />This also has similarity to PDO in passing an array of bind variables, with the added benefit that if they are named numerically (starting at zero), then the call to the array() function can be omitted:<br /><br />OraQry($rs,<br />  'select status from all_tables where owner=:0 and table_name=:1',<br />    [$owner, $table_name]);<br /><br />while($arr = oci_fetch_assoc($rs)) echo $arr['STATUS'] . "\n";</span></code></div>
  </div>
 </div>
  <div class="note" id="121776">  <div class="votes">
    <div id="Vu121776">
    <a href="/manual/vote-note.php?id=121776&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121776">
    <a href="/manual/vote-note.php?id=121776&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121776" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121776" class="name">
  <strong class="user"><em>splintyg at gmail dot com</em></strong></a><a class="genanchor" href="#121776"> &para;</a><div class="date" title="2017-10-19 10:28"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121776">
<div class="phpcode"><code><span class="html">Guys, i've been looking for long time, how to pass clob to and get from procedure<br />CREATE OR REPLACE PROCEDURE myproc(p1 IN clob, p2 OUT clob);<br /><br />Here You are an answer:<br /><br /><span class="default">&lt;?php<br />        $conn </span><span class="keyword">= </span><span class="default">oci_connect</span><span class="keyword">(</span><span class="string">"TEST"</span><span class="keyword">, </span><span class="string">"html"</span><span class="keyword">, </span><span class="string">"//hostname"</span><span class="keyword">, </span><span class="string">"UTF8"</span><span class="keyword">);<br /><br />    </span><span class="default">$filename </span><span class="keyword">= </span><span class="string">"./clob.txt"</span><span class="keyword">;<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br />    </span><span class="default">$f </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">));<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br /><br />    </span><span class="default">$stid </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"begin myproc(:p1, :p2); end;"</span><span class="keyword">);<br />    </span><span class="default">$p1 </span><span class="keyword">= </span><span class="default">oci_new_descriptor</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">OCI_D_LOB</span><span class="keyword">);<br />    </span><span class="default">$p2 </span><span class="keyword">= </span><span class="default">oci_new_descriptor</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">OCI_D_LOB</span><span class="keyword">);<br />    <br />    </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="string">":p1"</span><span class="keyword">, </span><span class="default">$p1</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">OCI_B_CLOB</span><span class="keyword">);<br />    </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="string">":p2"</span><span class="keyword">, </span><span class="default">$p2</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">OCI_B_CLOB</span><span class="keyword">);<br />    </span><span class="default">$p1</span><span class="keyword">-&gt;</span><span class="default">writeTemporary</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">, </span><span class="default">OCI_TEMP_BLOB</span><span class="keyword">);<br />    </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">); -- </span><span class="default">Figure out OCI_NO_AUTO_COMMIT<br />    oci_commit</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br />    echo </span><span class="default">$p2</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(); <br />    <br />    </span><span class="default">$p1    </span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />    </span><span class="default">$p2    </span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />    </span><span class="default">oci_free_statement</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">);<br />    </span><span class="default">oci_close</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />And perfect book about "PHP and Oracle" <br /><a href="http://www.oracle.com/technetwork/topics/php/underground-php-oracle-manual-098250.html" rel="nofollow" target="_blank">http://www.oracle.com/technetwork/topics/php/underground-php-oracle-manual-098250.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="121422">  <div class="votes">
    <div id="Vu121422">
    <a href="/manual/vote-note.php?id=121422&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121422">
    <a href="/manual/vote-note.php?id=121422&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121422" title="no votes...">
    0
    </div>
  </div>
  <a href="#121422" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#121422"> &para;</a><div class="date" title="2017-07-24 02:25"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121422">
<div class="phpcode"><code><span class="html">Bear in mind that you cannot use reserved words for bind variables. Otherwise you'll get ORA-01745: Invalid host/bind variable name error.</span></code></div>
  </div>
 </div>
  <div class="note" id="119073">  <div class="votes">
    <div id="Vu119073">
    <a href="/manual/vote-note.php?id=119073&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119073">
    <a href="/manual/vote-note.php?id=119073&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119073" title="no votes...">
    0
    </div>
  </div>
  <a href="#119073" class="name">
  <strong class="user"><em>marki at trash-mail dot com</em></strong></a><a class="genanchor" href="#119073"> &para;</a><div class="date" title="2016-03-28 09:11"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119073">
<div class="phpcode"><code><span class="html">Please note that in my earlier note about having oci_bind_by_name() in a function, this becomes a little more complicated when returning values like "UPDATE table SET bla='blubb' RETURNING id INTO :id". <br /><br />You can do it as follows:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">sql</span><span class="keyword">(</span><span class="default">$q</span><span class="keyword">, &amp;</span><span class="default">$vars_in</span><span class="keyword">=array(), &amp;</span><span class="default">$vars_out</span><span class="keyword">=array()) {<br />  ...<br />  </span><span class="default">$stid </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$q</span><span class="keyword">);<br />  ...<br />  </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$vars_in</span><span class="keyword">);<br />  do {<br />    if (</span><span class="default">current</span><span class="keyword">(</span><span class="default">$vars_in</span><span class="keyword">)===</span><span class="default">FALSE</span><span class="keyword">) {<br />      break;<br />    }<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="default">key</span><span class="keyword">(</span><span class="default">$vars_in</span><span class="keyword">), </span><span class="default">current</span><span class="keyword">(</span><span class="default">$vars_in</span><span class="keyword">));<br />    </span><span class="comment">// insert exception handling here<br />  </span><span class="keyword">} while (</span><span class="default">each</span><span class="keyword">(</span><span class="default">$vars_in</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">);<br /><br />  </span><span class="comment">// VARS TO RETURN<br />  // we'll fix this to integer type because for now we need this for index IDs<br />  </span><span class="keyword">foreach (</span><span class="default">$vars_out </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stid</span><span class="keyword">, </span><span class="default">$k</span><span class="keyword">, </span><span class="default">$vars_out</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">], -</span><span class="default">1</span><span class="keyword">, </span><span class="default">SQLT_INT</span><span class="keyword">);<br />    </span><span class="comment">// insert exception handling here<br />  </span><span class="keyword">}<br /><br />  ...<br />}<br /></span><span class="default">?&gt;<br /></span><br />Use like this:<br /><br /><span class="default">&lt;?php<br />$blubb </span><span class="keyword">= </span><span class="string">'blubb'</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= array(</span><span class="string">':bla' </span><span class="keyword">=&gt; </span><span class="default">$blubb</span><span class="keyword">);<br /></span><span class="default">$b_out </span><span class="keyword">= array(</span><span class="string">':id' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">); </span><span class="comment">// leave value empty<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">sql</span><span class="keyword">(</span><span class="default">$q</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$b_out</span><span class="keyword">);<br /></span><span class="default">$id </span><span class="keyword">= </span><span class="default">$b_out</span><span class="keyword">[</span><span class="string">':id'</span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span><br />(The point is: you would not be able to return anything into $b[':bla'] because $b[':bla'] becomes current($vars_in) inside sql() and cannot be written to.)</span></code></div>
  </div>
 </div>
  <div class="note" id="119063">  <div class="votes">
    <div id="Vu119063">
    <a href="/manual/vote-note.php?id=119063&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119063">
    <a href="/manual/vote-note.php?id=119063&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119063" title="no votes...">
    0
    </div>
  </div>
  <a href="#119063" class="name">
  <strong class="user"><em>marki at trash-mail dot com</em></strong></a><a class="genanchor" href="#119063"> &para;</a><div class="date" title="2016-03-26 07:53"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119063">
<div class="phpcode"><code><span class="html">I had a query that was working properly at first sight, no errors on execute, nothing, but there were simply no results returned at runtime.<br /><br />Be careful when putting the database commands into a function and binding your variables there while using oci_fetch_xxx() outside the function.<br /><br />function sql($conn, $stmt, $var) {<br />  $stid = oci_parse($conn, $stmt);<br />  ...<br />  oci_bind_by_name($stid, ':val', $var);<br />  ...<br />}<br />sql($conn, $q, $var);<br />$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);<br /><br />As you see from the definition of oci_bind_by_name(), $var needs to be passed as reference, so your function has to have this reference ready like this:<br /><br />function sql($conn, $stmt, &amp;$var) {<br />  $stid = oci_parse($conn, $stmt);<br />  ...<br />  oci_bind_by_name($stid, ':val', $var);<br />  ...<br />}<br /><br />The background is that if you don't pass by reference (in which case $var inside the function is a copy of $var outside the function), then oci_bind_by_name() will work just fine at first glance.<br />However, since the oci_fetch statements that you use to actually get the data will reference the $var that has ceased to exist when the function finished. In fact, since the varbind seems to be a pointer, that pointer will point to an invalid location at that point and your variables won't be substitued in the SQL.<br /><br />All this also means that:<br /><br />1) You have to pass a variable, and not just a value<br /><br />This doesn't work:<br /><br />$stid = sql($conn, $q, array('bla'=&gt;'blubb'));<br /><br />This is better:<br /><br />$vars = array('bla'=&gt;'blubb');<br />$stid = sql($conn, $q, $vars);<br /><br />2) Even when passing as reference to your helper function you cannot use e.g. foreach:<br /><br />This doesn't work:<br /><br />function sql($conn, $q, $vars) {<br />  ...<br />  foreach ($vars as $k =&gt; $v) {<br />    oci_bind_by_name($stid, $k, $v);<br />  }<br />  ...<br />}<br /><br />Again, because $k and $v are local variables that will have disappeared once you perform an oci_fetch outside the function.<br /><br />Instead you have to work the array in a more low-level way like this:<br /><br />function sql($conn, $q, &amp;$vars) {<br />  ...<br />  $stid = oci_parse($conn, $q);<br />  ...<br />  reset($vars);<br />  do {<br />    if (current($vars)===FALSE) { // end of array<br />      break;<br />    }<br />    $b = oci_bind_by_name($stid, key($vars), current($vars));<br />    if ($b === FALSE) {<br />      DIE('Could not bind var');<br />    }<br />  } while (each($vars) !== FALSE);<br />}<br />$binds = array(':bla1' =&gt; 'blubb1',<br />               ':bla2' =&gt; 'blubb2');<br />$stid = sql($conn, $q, $binds);<br />$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);<br /><br />Wherever you oci_bind_by_name(), the pointer to the initial data has to exist from beginning to end.</span></code></div>
  </div>
 </div>
  <div class="note" id="115784">  <div class="votes">
    <div id="Vu115784">
    <a href="/manual/vote-note.php?id=115784&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115784">
    <a href="/manual/vote-note.php?id=115784&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115784" title="no votes...">
    0
    </div>
  </div>
  <a href="#115784" class="name">
  <strong class="user"><em>xorinox at gmx dot ch</em></strong></a><a class="genanchor" href="#115784"> &para;</a><div class="date" title="2014-09-23 02:54"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115784">
<div class="phpcode"><code><span class="html">Working with Oracle and raw types in and out worked like the following for me.<br /><br /><span class="default">&lt;?php<br />  </span><span class="comment">/*oracle procedure<br />  procedure open_session(<br />    i_instance_id in raw,<br />    o_session_id out raw,<br />    o_errcode out number,<br />    o_errmsg out varchar2<br />  );  <br />  */<br /><br />  //open database<br />  </span><span class="default">$conn </span><span class="keyword">= </span><span class="default">DBOpen</span><span class="keyword">( </span><span class="default">DB_DEV_USER </span><span class="keyword">);<br /><br />  </span><span class="comment">//get session id<br />  </span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"begin p_loader.open_session( hextoraw( :instance_id ), :session_id, :errcode, :errmsg ); end;"</span><span class="keyword">;<br />  </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">( </span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$sql </span><span class="keyword">);<br />  </span><span class="default">$instanceId </span><span class="keyword">= </span><span class="default">DB_INSTANCE_ID</span><span class="keyword">;<br />  </span><span class="default">oci_bind_by_name</span><span class="keyword">( </span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">":instance_id"</span><span class="keyword">, </span><span class="default">$instanceId</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">SQLT_CHR </span><span class="keyword">);<br />  </span><span class="default">oci_bind_by_name</span><span class="keyword">( </span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">":session_id"</span><span class="keyword">, </span><span class="default">$sessionId</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">, </span><span class="default">SQLT_BIN </span><span class="keyword">);<br />  </span><span class="default">oci_bind_by_name</span><span class="keyword">( </span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">":errcode"</span><span class="keyword">, </span><span class="default">$errcode</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">, </span><span class="default">SQLT_INT </span><span class="keyword">);<br />  </span><span class="default">oci_bind_by_name</span><span class="keyword">( </span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">":errmsg"</span><span class="keyword">, </span><span class="default">$errmsg</span><span class="keyword">, </span><span class="default">4000</span><span class="keyword">, </span><span class="default">SQLT_CHR </span><span class="keyword">);<br />  <br />  </span><span class="default">oci_execute</span><span class="keyword">( </span><span class="default">$stmt </span><span class="keyword">);<br />  </span><span class="default">$sessionId </span><span class="keyword">= </span><span class="default">bin2hex</span><span class="keyword">( </span><span class="default">$sessionId </span><span class="keyword">); </span><span class="comment">//now this is a hex string<br />  <br />  //close database<br />  </span><span class="default">DBClose</span><span class="keyword">( </span><span class="default">$conn </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83094">  <div class="votes">
    <div id="Vu83094">
    <a href="/manual/vote-note.php?id=83094&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83094">
    <a href="/manual/vote-note.php?id=83094&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83094" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83094" class="name">
  <strong class="user"><em>ajitsingh4u at gmail dot com</em></strong></a><a class="genanchor" href="#83094"> &para;</a><div class="date" title="2008-05-09 09:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83094">
<div class="phpcode"><code><span class="html">//Calling Oracle Stored Procedure<br />//I assume that you have a users table and three columns in users table i.e. id, user, email in oracle<br />// For example I made connection in constructor, you can modify as per your requirement.<br />//<a href="http://www.devshed.com/c/a/PHP/Understanding-Destructors-in-PHP-5/1/" rel="nofollow" target="_blank">http://www.devshed.com/c/a/PHP/Understanding-Destructors-in-PHP-5/1/</a><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Users</span><span class="keyword">{<br />    private </span><span class="default">$connection</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection </span><span class="keyword">= </span><span class="default">oci_connect</span><span class="keyword">(</span><span class="string">"scott"</span><span class="keyword">, </span><span class="string">"tiger"</span><span class="keyword">, </span><span class="default">$db</span><span class="keyword">); </span><span class="comment">// Establishes a connection to the Oracle server; <br />    </span><span class="keyword">}<br /><br />    public function </span><span class="default">selectUsers</span><span class="keyword">(</span><span class="default">$start_index</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">, </span><span class="default">$numbers_of_rows</span><span class="keyword">=</span><span class="default">20</span><span class="keyword">)<br />    {<br />        </span><span class="default">$sql </span><span class="keyword">=</span><span class="string">"BEGIN sp_users_select(:p_start_index, :p_numbers_of_rows, :p_cursor, :p_result); END;"</span><span class="keyword">;<br />        </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">);<br /><br />        </span><span class="comment">//Bind in parameter<br />        </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">':p_start_index'</span><span class="keyword">, </span><span class="default">$start_index</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">);<br />        </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">':p_numbers_of_rows'</span><span class="keyword">, </span><span class="default">$numbers_of_rows</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">);<br /><br />        </span><span class="comment">//Bind out parameter<br />        </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">':p_result'</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">); </span><span class="comment">// returns 0 if stored procedure succeessfully executed.<br /><br />        //Bind Cursor<br />        </span><span class="default">$p_cursor </span><span class="keyword">= </span><span class="default">oci_new_cursor</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">);<br />        </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">':p_cursor'</span><span class="keyword">, </span><span class="default">$p_cursor</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">OCI_B_CURSOR</span><span class="keyword">);<br /><br />        </span><span class="comment">// Execute Statement<br />        </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br />        </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$p_cursor</span><span class="keyword">, </span><span class="default">OCI_DEFAULT</span><span class="keyword">);<br /><br />        </span><span class="default">oci_fetch_all</span><span class="keyword">(</span><span class="default">$p_cursor</span><span class="keyword">, </span><span class="default">$cursor</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">OCI_FETCHSTATEMENT_BY_ROW</span><span class="keyword">);<br /><br />        echo </span><span class="default">$result</span><span class="keyword">;<br />        echo </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">); </span><span class="comment">// $cursor is an associative array so we can use print_r() to print this data.<br />        // you can return data from this function to use it at your user interface.<br />    </span><span class="keyword">}<br /><br />    public function </span><span class="default">deleteUser</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">)<br />    {<br />        </span><span class="default">$sql </span><span class="keyword">=</span><span class="string">"BEGIN sp_user_delete(:p_id, :p_result); END;"</span><span class="keyword">;<br />        </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">);<br /><br />        </span><span class="comment">// bind in and out variables<br />        </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">':p_id'</span><span class="keyword">, </span><span class="default">$id</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">);<br />        </span><span class="default">oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">':p_result'</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">);<br /><br />        </span><span class="comment">//Execute the statement<br />        </span><span class="default">$check </span><span class="keyword">= </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br /><br />        if(</span><span class="default">$check </span><span class="keyword">== </span><span class="default">true</span><span class="keyword">)<br />        </span><span class="default">$commit </span><span class="keyword">= </span><span class="default">oci_commit</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">);<br />        else<br />        </span><span class="default">$commit </span><span class="keyword">= </span><span class="default">oci_rollback</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">);<br /><br />        return </span><span class="default">$result</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="comment">// You can make function for insert ,update using above two functions<br /><br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75018">  <div class="votes">
    <div id="Vu75018">
    <a href="/manual/vote-note.php?id=75018&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75018">
    <a href="/manual/vote-note.php?id=75018&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75018" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75018" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#75018"> &para;</a><div class="date" title="2007-05-08 01:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75018">
<div class="phpcode"><code><span class="html">This is what the old OCI_B_* constants are now called:<br />(PHP 5.1.6 win32)<br /><br />OCI_B_NTY - SQLT_NTY<br />OCI_B_BFILE - SQLT_BFILEE<br />OCI_B_CFILEE - SQLT_CFILEE<br />OCI_B_CLOB - SQLT_CLOB<br />OCI_B_BLOB - SQLT_BLOB<br />OCI_B_ROWID - SQLT_RDD<br />OCI_B_CURSOR - SQLT_RSET<br />OCI_B_BIN - SQLT_BIN<br />OCI_B_INT - SQLT_INT<br />OCI_B_NUM - SQLT_NUM</span></code></div>
  </div>
 </div>
  <div class="note" id="72290">  <div class="votes">
    <div id="Vu72290">
    <a href="/manual/vote-note.php?id=72290&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72290">
    <a href="/manual/vote-note.php?id=72290&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72290" title="no votes...">
    0
    </div>
  </div>
  <a href="#72290" class="name">
  <strong class="user"><em>Chris Delcamp</em></strong></a><a class="genanchor" href="#72290"> &para;</a><div class="date" title="2007-01-11 08:48"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72290">
<div class="phpcode"><code><span class="html">This is an example of returning the primary key from an insert so that you can do inserts on other tables with foreign keys based on that value.  The date is just used to provied semi-unique data to be inserted.<br /><br />$conn = oci_connect("username", "password")<br />$stmt = oci_parse($conn, "INSERT INTO test (test_msg) values (:data) RETURN test_id INTO :RV");<br />$data = date("d-M-Y H:i:s");<br />oci_bind_by_name($stmt, ":RV", $rv, -1, SQLT_INT);<br />oci_bind_by_name($stmt, ":data", $data, 24);<br />oci_execute($stmt);<br />print $rv;</span></code></div>
  </div>
 </div>
  <div class="note" id="55895">  <div class="votes">
    <div id="Vu55895">
    <a href="/manual/vote-note.php?id=55895&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55895">
    <a href="/manual/vote-note.php?id=55895&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55895" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#55895" class="name">
  <strong class="user"><em>hfuecks at nospam dot org</em></strong></a><a class="genanchor" href="#55895"> &para;</a><div class="date" title="2005-08-16 01:12"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55895">
<div class="phpcode"><code><span class="html">Note that there have been some changes on the constant identifiers and the documentation is currently not entirely accurate.<br /><br />Running the following script;<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">get_defined_constants</span><span class="keyword">()) as </span><span class="default">$const</span><span class="keyword">) {<br />    if ( </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^OCI_B_/'</span><span class="keyword">, </span><span class="default">$const</span><span class="keyword">) ) {<br />        print </span><span class="string">"</span><span class="default">$const</span><span class="string">\n"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Under PHP 4.4.0 I get;<br /><br />OCI_B_SQLT_NTY &lt; renamed to OCI_B_NTY with PHP5<br />OCI_B_BFILE<br />OCI_B_CFILEE<br />OCI_B_CLOB<br />OCI_B_BLOB<br />OCI_B_ROWID<br />OCI_B_CURSOR<br />OCI_B_BIN<br /><br />Under PHP 5.0.4 I get;<br /><br />OCI_B_NTY<br />OCI_B_BFILE &lt; docs are wrong right now<br />OCI_B_CFILEE &lt; docs are wrong right now<br />OCI_B_CLOB<br />OCI_B_BLOB<br />OCI_B_ROWID<br />OCI_B_CURSOR<br />OCI_B_BIN &lt; it's a mystery</span></code></div>
  </div>
 </div>
  <div class="note" id="92334">  <div class="votes">
    <div id="Vu92334">
    <a href="/manual/vote-note.php?id=92334&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92334">
    <a href="/manual/vote-note.php?id=92334&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92334" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#92334" class="name">
  <strong class="user"><em>adrian dot crossley at hesa dot ac dot uk</em></strong></a><a class="genanchor" href="#92334"> &para;</a><div class="date" title="2009-07-20 06:14"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92334">
<div class="phpcode"><code><span class="html">Sometimes you get the error "ORA-01461: can bind a LONG value only for insert into a LONG column".  This error is highly misleading especially when you have no LONG columns or LONG values.<br /><br />From my testing it seems this error can be caused when the value of a bound variable exceeds the length allocated.<br /><br />To avoid this error make sure you specify lengths when binding varchars e.g. <br /><span class="default">&lt;?php<br />oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">,</span><span class="string">':string'</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">, </span><span class="default">256</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />And for numerics use the default length (-1) but tell oracle its an integer e.g. <br /><span class="default">&lt;?php<br />oci_bind_by_name</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">,</span><span class="string">':num'</span><span class="keyword">,</span><span class="default">$num</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">SQLT_INT</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114869">  <div class="votes">
    <div id="Vu114869">
    <a href="/manual/vote-note.php?id=114869&amp;page=function.oci-bind-by-name&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114869">
    <a href="/manual/vote-note.php?id=114869&amp;page=function.oci-bind-by-name&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114869" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#114869" class="name">
  <strong class="user"><em>jjeffman at cpovo.net</em></strong></a><a class="genanchor" href="#114869"> &para;</a><div class="date" title="2014-04-17 04:02"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114869">
<div class="phpcode"><code><span class="html">It is very important to set up the maxlength of the returning parameter (:r), even when it is returning a number, otherwise the ORA-01460 exception (unimplemented or unreasonable conversion requested) may be raised.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.oci-bind-by-name&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.oci-bind-by-name.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.oci8.php">OCI8 Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.oci-bind-array-by-name.php" title="oci_&#8203;bind_&#8203;array_&#8203;by_&#8203;name">oci_&#8203;bind_&#8203;array_&#8203;by_&#8203;name</a>
                        </li>
                                                <li class="current">
                            <a href="function.oci-bind-by-name.php" title="oci_&#8203;bind_&#8203;by_&#8203;name">oci_&#8203;bind_&#8203;by_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-cancel.php" title="oci_&#8203;cancel">oci_&#8203;cancel</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-client-version.php" title="oci_&#8203;client_&#8203;version">oci_&#8203;client_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-close.php" title="oci_&#8203;close">oci_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-commit.php" title="oci_&#8203;commit">oci_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-connect.php" title="oci_&#8203;connect">oci_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-define-by-name.php" title="oci_&#8203;define_&#8203;by_&#8203;name">oci_&#8203;define_&#8203;by_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-error.php" title="oci_&#8203;error">oci_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-execute.php" title="oci_&#8203;execute">oci_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-fetch.php" title="oci_&#8203;fetch">oci_&#8203;fetch</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-fetch-all.php" title="oci_&#8203;fetch_&#8203;all">oci_&#8203;fetch_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-fetch-array.php" title="oci_&#8203;fetch_&#8203;array">oci_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-fetch-assoc.php" title="oci_&#8203;fetch_&#8203;assoc">oci_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-fetch-object.php" title="oci_&#8203;fetch_&#8203;object">oci_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-fetch-row.php" title="oci_&#8203;fetch_&#8203;row">oci_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-is-null.php" title="oci_&#8203;field_&#8203;is_&#8203;null">oci_&#8203;field_&#8203;is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-name.php" title="oci_&#8203;field_&#8203;name">oci_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-precision.php" title="oci_&#8203;field_&#8203;precision">oci_&#8203;field_&#8203;precision</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-scale.php" title="oci_&#8203;field_&#8203;scale">oci_&#8203;field_&#8203;scale</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-size.php" title="oci_&#8203;field_&#8203;size">oci_&#8203;field_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-type.php" title="oci_&#8203;field_&#8203;type">oci_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-field-type-raw.php" title="oci_&#8203;field_&#8203;type_&#8203;raw">oci_&#8203;field_&#8203;type_&#8203;raw</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-free-descriptor.php" title="oci_&#8203;free_&#8203;descriptor">oci_&#8203;free_&#8203;descriptor</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-free-statement.php" title="oci_&#8203;free_&#8203;statement">oci_&#8203;free_&#8203;statement</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-get-implicit-resultset.php" title="oci_&#8203;get_&#8203;implicit_&#8203;resultset">oci_&#8203;get_&#8203;implicit_&#8203;resultset</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-lob-copy.php" title="oci_&#8203;lob_&#8203;copy">oci_&#8203;lob_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-lob-is-equal.php" title="oci_&#8203;lob_&#8203;is_&#8203;equal">oci_&#8203;lob_&#8203;is_&#8203;equal</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-new-collection.php" title="oci_&#8203;new_&#8203;collection">oci_&#8203;new_&#8203;collection</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-new-connect.php" title="oci_&#8203;new_&#8203;connect">oci_&#8203;new_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-new-cursor.php" title="oci_&#8203;new_&#8203;cursor">oci_&#8203;new_&#8203;cursor</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-new-descriptor.php" title="oci_&#8203;new_&#8203;descriptor">oci_&#8203;new_&#8203;descriptor</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-num-fields.php" title="oci_&#8203;num_&#8203;fields">oci_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-num-rows.php" title="oci_&#8203;num_&#8203;rows">oci_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-parse.php" title="oci_&#8203;parse">oci_&#8203;parse</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-password-change.php" title="oci_&#8203;password_&#8203;change">oci_&#8203;password_&#8203;change</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-pconnect.php" title="oci_&#8203;pconnect">oci_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-register-taf-callback.php" title="oci_&#8203;register_&#8203;taf_&#8203;callback">oci_&#8203;register_&#8203;taf_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-result.php" title="oci_&#8203;result">oci_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-rollback.php" title="oci_&#8203;rollback">oci_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-server-version.php" title="oci_&#8203;server_&#8203;version">oci_&#8203;server_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-action.php" title="oci_&#8203;set_&#8203;action">oci_&#8203;set_&#8203;action</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-call-timout.php" title="oci_&#8203;set_&#8203;call_&#8203;timeout">oci_&#8203;set_&#8203;call_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-client-identifier.php" title="oci_&#8203;set_&#8203;client_&#8203;identifier">oci_&#8203;set_&#8203;client_&#8203;identifier</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-client-info.php" title="oci_&#8203;set_&#8203;client_&#8203;info">oci_&#8203;set_&#8203;client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-db-operation.php" title="oci_&#8203;set_&#8203;db_&#8203;operation">oci_&#8203;set_&#8203;db_&#8203;operation</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-edition.php" title="oci_&#8203;set_&#8203;edition">oci_&#8203;set_&#8203;edition</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-module-name.php" title="oci_&#8203;set_&#8203;module_&#8203;name">oci_&#8203;set_&#8203;module_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-prefetch.php" title="oci_&#8203;set_&#8203;prefetch">oci_&#8203;set_&#8203;prefetch</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-set-prefetch-lob.php" title="oci_&#8203;set_&#8203;prefetch_&#8203;lob">oci_&#8203;set_&#8203;prefetch_&#8203;lob</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-statement-type.php" title="oci_&#8203;statement_&#8203;type">oci_&#8203;statement_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.oci-unregister-taf-callback.php" title="oci_&#8203;unregister_&#8203;taf_&#8203;callback">oci_&#8203;unregister_&#8203;taf_&#8203;callback</a>
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
