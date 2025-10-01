<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: oci_fetch_array - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.oci-fetch-array.php">
 <link rel="shorturl" href="https://www.php.net/oci-fetch-array">
 <link rel="alternate" href="https://www.php.net/oci-fetch-array" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.oci8.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.oci-fetch-all.php">
 <link rel="next" href="https://www.php.net/manual/en/function.oci-fetch-assoc.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.oci-fetch-array.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.oci-fetch-array.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.oci-fetch-array.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.oci-fetch-array.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.oci-fetch-array.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.oci-fetch-array.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.oci-fetch-array.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.oci-fetch-array.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.oci-fetch-array.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.oci-fetch-array.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.oci-fetch-array.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the next row from a query as an associative or numeric array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: oci_fetch_array - Manual" />
<meta name="twitter:description" content="Returns the next row from a query as an associative or numeric array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: oci_fetch_array - Manual" />
<meta itemprop="description" content="Returns the next row from a query as an associative or numeric array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the next row from a query as an associative or numeric array" />

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
        <a href="function.oci-fetch-assoc.php">
          oci_fetch_assoc &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.oci-fetch-all.php">
          &laquo; oci_fetch_all        </a>
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
            <option value='en/function.oci-fetch-array.php' selected="selected">English</option>
            <option value='de/function.oci-fetch-array.php'>German</option>
            <option value='es/function.oci-fetch-array.php'>Spanish</option>
            <option value='fr/function.oci-fetch-array.php'>French</option>
            <option value='it/function.oci-fetch-array.php'>Italian</option>
            <option value='ja/function.oci-fetch-array.php'>Japanese</option>
            <option value='pt_BR/function.oci-fetch-array.php'>Brazilian Portuguese</option>
            <option value='ru/function.oci-fetch-array.php'>Russian</option>
            <option value='tr/function.oci-fetch-array.php'>Turkish</option>
            <option value='uk/function.oci-fetch-array.php'>Ukrainian</option>
            <option value='zh/function.oci-fetch-array.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.oci-fetch-array" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">oci_fetch_array</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL OCI8 &gt;= 1.1.0)</p><p class="refpurpose"><span class="refname">oci_fetch_array</span> &mdash; <span class="dc-title">Returns the next row from a query as an associative or numeric array
  </span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.oci-fetch-array-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>oci_fetch_array</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$statement</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = OCI_BOTH | OCI_RETURN_NULLS</span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Returns an array containing the next result-set row of a query.
   Each array entry corresponds to a column of the row.  This function
   is typically called in a loop until it returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, indicating
   no more rows exist.
  </p>
  <p class="para">
   If <code class="parameter">statement</code> corresponds to a PL/SQL block
   returning Oracle Database Implicit Result Sets, then rows from
   all sets are consecutively fetched. If
   <code class="parameter">statement</code> is returned
   by <span class="function"><a href="function.oci-get-implicit-resultset.php" class="function">oci_get_implicit_resultset()</a></span>, then only the
   subset of rows for one child query are returned.
  </p>
  <p class="para">For details on the data type mapping performed by
the OCI8 extension, see the <a href="oci8.datatypes.php" class="link">datatypes
supported by the driver</a></p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.oci-fetch-array-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">statement</code></dt>
     <dd>
       <p class="para">A valid OCI8 statement
identifier created by <span class="function"><a href="function.oci-parse.php" class="function">oci_parse()</a></span> and executed
by <span class="function"><a href="function.oci-execute.php" class="function">oci_execute()</a></span>, or a <code class="literal">REF
CURSOR</code> statement identifier.</p>
       <p class="para">
        Can also be a statement identifier returned by <span class="function"><a href="function.oci-get-implicit-resultset.php" class="function">oci_get_implicit_resultset()</a></span>.
       </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       An optional second parameter can be any combination of the following
       constants:
       <table class="doctable table">
        <caption><strong><span class="function"><strong>oci_fetch_array()</strong></span> Modes</strong></caption>
        
         <thead>
          <tr>
           <th>Constant</th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><strong><code><a href="oci8.constants.php#constant.oci-both">OCI_BOTH</a></code></strong></td>
           <td>Returns an array with both associative and numeric
            indices. This is the same
            as <strong><code><a href="oci8.constants.php#constant.oci-assoc">OCI_ASSOC</a></code></strong>
            + <strong><code><a href="oci8.constants.php#constant.oci-num">OCI_NUM</a></code></strong> and is the default
            behavior.</td>
          </tr>

          <tr>
           <td><strong><code><a href="oci8.constants.php#constant.oci-assoc">OCI_ASSOC</a></code></strong></td>
           <td>Returns an associative array.</td>
          </tr>

          <tr>
           <td><strong><code><a href="oci8.constants.php#constant.oci-num">OCI_NUM</a></code></strong></td>
           <td>Returns a numeric array.</td>
          </tr>

          <tr>
           <td><strong><code><a href="oci8.constants.php#constant.oci-return-nulls">OCI_RETURN_NULLS</a></code></strong></td>
           <td>Creates elements for <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> fields.  The element
             values will be a PHP <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="oci8.constants.php#constant.oci-return-lobs">OCI_RETURN_LOBS</a></code></strong></td>
           <td>Returns the contents of LOBs instead of the LOB
             descriptors.</td>
          </tr>

         </tbody>
        
       </table>

      </p>
      <p class="para">
       The default <code class="parameter">mode</code> is <strong><code><a href="oci8.constants.php#constant.oci-both">OCI_BOTH</a></code></strong>.
      </p>
      <p class="para">
       Use the addition operator &quot;+&quot; to specify more than
       one mode at a time.
      </p>
     </dd>
    
   </dl>

  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.oci-fetch-array-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array with associative and/or numeric indices. If there
   are no more rows in the <code class="parameter">statement</code> then
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned.
  </p>
  <p class="para">
    By default, <code class="literal">LOB</code> columns are returned as LOB descriptors.
  </p>
  <p class="para">
   <code class="literal">DATE</code> columns are returned as strings formatted
   to the current date format.  The default format can be changed with
   Oracle environment variables such as <code class="literal">NLS_LANG</code> or
   by a previously executed <code class="literal">ALTER SESSION SET
   NLS_DATE_FORMAT</code> command.
  </p>
  <p class="para">
   Oracle&#039;s default, non-case sensitive column names will have
   uppercase associative indices in the result array.  Case-sensitive
   column names will have array indices using the exact column case.
   Use <span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span> on the result array to verify the
   appropriate case to use for each query. 
  </p>
  <p class="para">
   The table name is not included in the array index.  If your query
   contains two different columns with the same name,
   use <strong><code><a href="oci8.constants.php#constant.oci-num">OCI_NUM</a></code></strong> or add a column alias to the query
   to ensure name uniqueness, see example #7. Otherwise only one
   column will be returned via PHP.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.oci-fetch-array-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1982">
    <p><strong>Example #1 <span class="function"><strong>oci_fetch_array()</strong></span> with <strong><code><a href="oci8.constants.php#constant.oci-both">OCI_BOTH</a></code></strong></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT department_id, department_name FROM departments'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_BOTH</span><span style="color: #007700">)) != </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// Use the uppercase column names for the associative array indices<br />    </span><span style="color: #007700">echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] . </span><span style="color: #DD0000">" and " </span><span style="color: #007700">. </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'DEPARTMENT_ID'</span><span style="color: #007700">]   . </span><span style="color: #DD0000">" are the same&lt;br&gt;\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] . </span><span style="color: #DD0000">" and " </span><span style="color: #007700">. </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'DEPARTMENT_NAME'</span><span style="color: #007700">] . </span><span style="color: #DD0000">" are the same&lt;br&gt;\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1983">
    <p><strong>Example #2 <span class="function"><strong>oci_fetch_array()</strong></span> with <strong><code><a href="oci8.constants.php#constant.oci-num">OCI_NUM</a></code></strong></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/*<br />  Before running, create the table:<br />      CREATE TABLE mytab (id NUMBER, description CLOB);<br />      INSERT INTO mytab (id, description) values (1, 'A very long string');<br />      COMMIT;<br />*/<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT id, description FROM mytab'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_NUM</span><span style="color: #007700">)) != </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] . </span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">read</span><span style="color: #007700">(</span><span style="color: #0000BB">11</span><span style="color: #007700">) . </span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// this will output first 11 bytes from DESCRIPTION<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #FF8000">// Output is:<br />//    1<br />//    A very long<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1984">
    <p><strong>Example #3 <span class="function"><strong>oci_fetch_array()</strong></span> with <strong><code><a href="oci8.constants.php#constant.oci-assoc">OCI_ASSOC</a></code></strong></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/*<br />  Before running, create the table:<br />      CREATE TABLE mytab (id NUMBER, description CLOB);<br />      INSERT INTO mytab (id, description) values (1, 'A very long string');<br />      COMMIT;<br />*/<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT id, description FROM mytab'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">)) != </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'ID'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'DESCRIPTION'</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">read</span><span style="color: #007700">(</span><span style="color: #0000BB">11</span><span style="color: #007700">) . </span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// this will output first 11 bytes from DESCRIPTION<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #FF8000">// Output is:<br />//    1<br />//    A very long<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1985">
    <p><strong>Example #4 <span class="function"><strong>oci_fetch_array()</strong></span> with <strong><code><a href="oci8.constants.php#constant.oci-return-nulls">OCI_RETURN_NULLS</a></code></strong></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT 1, null FROM dual'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array </span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">)) != </span><span style="color: #0000BB">false</span><span style="color: #007700">) { </span><span style="color: #FF8000">// Ignore NULLs<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">/*<br />The above code prints:<br />  array(1) {<br />    [1]=&gt;<br />    string(1) "1"<br />  }<br />*/<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT 1, null FROM dual'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array </span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">+</span><span style="color: #0000BB">OCI_RETURN_NULLS</span><span style="color: #007700">)) != </span><span style="color: #0000BB">false</span><span style="color: #007700">) { </span><span style="color: #FF8000">// Fetch NULLs<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">/*<br />The above code prints:<br />  array(2) {<br />    [1]=&gt;<br />    string(1) "1"<br />    ["NULL"]=&gt;<br />    NULL<br />  }<br />*/<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1986">
    <p><strong>Example #5 <span class="function"><strong>oci_fetch_array()</strong></span> with <strong><code><a href="oci8.constants.php#constant.oci-return-lobs">OCI_RETURN_LOBS</a></code></strong></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/*<br />  Before running, create the table:<br />      CREATE TABLE mytab (id NUMBER, description CLOB);<br />      INSERT INTO mytab (id, description) values (1, 'A very long string');<br />      COMMIT;<br />*/<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT id, description FROM mytab'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">+</span><span style="color: #0000BB">OCI_RETURN_LOBS</span><span style="color: #007700">)) != </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'ID'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'DESCRIPTION'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// this contains all of DESCRIPTION<br />    // In a loop, freeing the large variable before the 2nd fetch reduces PHP's peak memory usage<br />    </span><span style="color: #007700">unset(</span><span style="color: #0000BB">$row</span><span style="color: #007700">); <br />}<br /><br /></span><span style="color: #FF8000">// Output is:<br />//    1<br />//    A very long string<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1987">
    <p><strong>Example #6 <span class="function"><strong>oci_fetch_array()</strong></span> with case sensitive column names</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/*<br />   Before running, create the table:<br />      CREATE TABLE mytab ("Name" VARCHAR2(20), city VARCHAR2(20));<br />      INSERT INTO mytab ("Name", city) values ('Chris', 'Melbourne');<br />      COMMIT;<br />*/<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'select * from mytab'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">+</span><span style="color: #0000BB">OCI_RETURN_NULLS</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Because 'Name' was created as a case-sensitive column, that same<br />// case is used for the array index.  However uppercase 'CITY' must<br />// be used for the case-insensitive column index<br /></span><span style="color: #007700">print </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'Name'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;   </span><span style="color: #FF8000">//  prints Chris<br /></span><span style="color: #007700">print </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'CITY'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;   </span><span style="color: #FF8000">//  prints Melbourne<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1988">
    <p><strong>Example #7 <span class="function"><strong>oci_fetch_array()</strong></span> with columns having duplicate names</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/*<br />  Before running, create the tables:<br />      CREATE TABLE mycity (id NUMBER, name VARCHAR2(20));<br />      INSERT INTO mycity (id, name) values (1, 'Melbourne');<br />      CREATE TABLE mycountry (id NUMBER, name VARCHAR2(20));<br />      INSERT INTO mycountry (id, name) values (1, 'Australia');<br />      COMMIT;<br />*/<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT mycity.name, mycountry.name<br />        FROM mycity, mycountry<br />        WHERE mycity.id = mycountry.id'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output only contains one "NAME" entry:<br />//    array(1) {<br />//      ["NAME"]=&gt;<br />//      string(9) "Australia"<br />//    }<br /><br />// To query a repeated column name, use an SQL column alias like "AS ctnm":<br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT mycity.name AS ctnm, mycountry.name <br />        FROM mycity, mycountry <br />        WHERE mycity.id = mycountry.id'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Output now contains both columns selected:<br />//    array(2) {<br />//      ["CTNM"]=&gt;<br />//      string(9) "Melbourne"<br />//      ["NAME"]=&gt;<br />//      string(9) "Australia"<br />//    }<br /><br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1989">
    <p><strong>Example #8 <span class="function"><strong>oci_fetch_array()</strong></span> with <code class="literal">DATE</code> columns</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Set the date format for this connection.<br />// For performance reasons, consider changing the format<br />// in a trigger or with environment variables instead<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY-MM-DD'"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT hire_date FROM employees WHERE employee_id = 188'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'HIRE_DATE'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;  </span><span style="color: #FF8000">// prints 1997-06-14<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1990">
    <p><strong>Example #9 <span class="function"><strong>oci_fetch_array()</strong></span> with <code class="literal">REF CURSOR</code></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/*<br />  Create the PL/SQL stored procedure as:<br /><br />  CREATE OR REPLACE PROCEDURE myproc(p1 OUT SYS_REFCURSOR) AS<br />  BEGIN<br />    OPEN p1 FOR SELECT * FROM all_objects WHERE ROWNUM &lt; 5000;<br />  END;<br />*/<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'BEGIN myproc(:rc); END;'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$refcur </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_new_cursor</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':rc'</span><span style="color: #007700">, </span><span style="color: #0000BB">$refcur</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_B_CURSOR</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Execute the returned REF CURSOR and fetch from it like a statement identifier<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$refcur</span><span style="color: #007700">);  <br />echo </span><span style="color: #DD0000">"&lt;table border='1'&gt;\n"</span><span style="color: #007700">;<br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$refcur</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">+</span><span style="color: #0000BB">OCI_RETURN_NULLS</span><span style="color: #007700">)) != </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"&lt;tr&gt;\n"</span><span style="color: #007700">;<br />    foreach (</span><span style="color: #0000BB">$row </span><span style="color: #007700">as </span><span style="color: #0000BB">$item</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"    &lt;td&gt;"</span><span style="color: #007700">.(</span><span style="color: #0000BB">$item </span><span style="color: #007700">!== </span><span style="color: #0000BB">null </span><span style="color: #007700">? </span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">, </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">) : </span><span style="color: #DD0000">"&amp;nbsp;"</span><span style="color: #007700">).</span><span style="color: #DD0000">"&lt;/td&gt;\n"</span><span style="color: #007700">;<br />    }<br />    echo </span><span style="color: #DD0000">"&lt;/tr&gt;\n"</span><span style="color: #007700">;<br />}<br />echo </span><span style="color: #DD0000">"&lt;/table&gt;\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$refcur</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1991">
    <p><strong>Example #10 Pagination with <span class="function"><strong>oci_fetch_array()</strong></span> using a <code class="literal">LIMIT</code>-like query</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/XE'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Find the version of the database<br /></span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/Release ([0-9]+)\./'</span><span style="color: #007700">, </span><span style="color: #0000BB">oci_server_version</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">), </span><span style="color: #0000BB">$matches</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$oracleversion </span><span style="color: #007700">= </span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">// This is the query you want to "page" through<br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT city, postal_code FROM locations ORDER BY city'</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">$oracleversion </span><span style="color: #007700">&gt;= </span><span style="color: #0000BB">12</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// Make use of Oracle 12c OFFSET / FETCH NEXT syntax<br />    </span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #0000BB">$sql </span><span style="color: #007700">. </span><span style="color: #DD0000">' OFFSET :offset ROWS FETCH NEXT :numrows ROWS ONLY'</span><span style="color: #007700">;<br />} else {<br />    </span><span style="color: #FF8000">// Older Oracle versions need a nested query selecting a subset<br />    // from $sql.  Or, if the SQL statement is known at development<br />    // time, consider using a row_number() function instead of this<br />    // nested solution.  In production environments, be careful to<br />    // avoid SQL Injection issues with concatenation.<br />    </span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT * FROM (SELECT a.*, ROWNUM AS my_rnum<br />                           FROM (</span><span style="color: #0000BB">$sql</span><span style="color: #DD0000">) a<br />                           WHERE ROWNUM &lt;= :offset + :numrows)<br />            WHERE my_rnum &gt; :offset"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$offset  </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;  </span><span style="color: #FF8000">// skip this many rows<br /></span><span style="color: #0000BB">$numrows </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">;  </span><span style="color: #FF8000">// return 5 rows<br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':numrows'</span><span style="color: #007700">, </span><span style="color: #0000BB">$numrows</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_bind_by_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #DD0000">':offset'</span><span style="color: #007700">, </span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC </span><span style="color: #007700">+ </span><span style="color: #0000BB">OCI_RETURN_NULLS</span><span style="color: #007700">)) != </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'CITY'</span><span style="color: #007700">] . </span><span style="color: #DD0000">" " </span><span style="color: #007700">. </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'POSTAL_CODE'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"&lt;br&gt;\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Output is:<br />//    Beijing 190518<br />//    Bern 3095<br />//    Bombay 490231<br />//    Geneva 1730<br />//    Hiroshima 6823<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1992">
    <p><strong>Example #11 <span class="function"><strong>oci_fetch_array()</strong></span> with Oracle Database Implicit Result Sets</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'hr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'welcome'</span><span style="color: #007700">, </span><span style="color: #DD0000">'localhost/pdborcl'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_error</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">], </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">), </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Requires OCI8 2.0 (or later) and Oracle Database 12c (or later)<br />// Also see oci_get_implicit_resultset()<br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'DECLARE<br />           c1 SYS_REFCURSOR;<br />        BEGIN<br />           OPEN c1 FOR SELECT city, postal_code FROM locations WHERE ROWNUM &lt; 4 ORDER BY city;<br />           DBMS_SQL.RETURN_RESULT(c1);<br />           OPEN c1 FOR SELECT country_id FROM locations WHERE ROWNUM &lt; 4 ORDER BY city;<br />           DBMS_SQL.RETURN_RESULT(c1);<br />        END;'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stid </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Note: oci_fetch_all and oci_fetch() cannot be used in this manner<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"&lt;table&gt;\n"</span><span style="color: #007700">;<br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">oci_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">, </span><span style="color: #0000BB">OCI_ASSOC</span><span style="color: #007700">+</span><span style="color: #0000BB">OCI_RETURN_NULLS</span><span style="color: #007700">)) != </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"&lt;tr&gt;\n"</span><span style="color: #007700">;<br />    foreach (</span><span style="color: #0000BB">$row </span><span style="color: #007700">as </span><span style="color: #0000BB">$item</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"  &lt;td&gt;"</span><span style="color: #007700">.(</span><span style="color: #0000BB">$item</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">?</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">, </span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">|</span><span style="color: #0000BB">ENT_SUBSTITUTE</span><span style="color: #007700">):</span><span style="color: #DD0000">"&amp;nbsp;"</span><span style="color: #007700">).</span><span style="color: #DD0000">"&lt;/td&gt;\n"</span><span style="color: #007700">;<br />    }<br />    echo </span><span style="color: #DD0000">"&lt;/tr&gt;\n"</span><span style="color: #007700">;<br />}<br />echo </span><span style="color: #DD0000">"&lt;/table&gt;\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Output is:<br />//    Beijing 190518<br />//    Bern    3095<br />//    Bombay  490231<br />//    CN<br />//    CH<br />//    IN<br /><br /></span><span style="color: #0000BB">oci_free_statement</span><span style="color: #007700">(</span><span style="color: #0000BB">$stid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">oci_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.oci-fetch-array-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Associative array indices need to be in uppercase for standard
    Oracle columns that were created with case insensitive names.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">For
queries returning a large number of rows, performance can be
significantly improved by
increasing <a href="oci8.configuration.php#ini.oci8.default-prefetch" class="link">oci8.default_prefetch</a>
or using <span class="function"><a href="function.oci-set-prefetch.php" class="function">oci_set_prefetch()</a></span>.
</p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The function <span class="function"><strong>oci_fetch_array()</strong></span>
    is <em>insignificantly</em> slower than
    <span class="function"><a href="function.oci-fetch-assoc.php" class="function">oci_fetch_assoc()</a></span>
    or <span class="function"><a href="function.oci-fetch-row.php" class="function">oci_fetch_row()</a></span>, but is more flexible.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.oci-fetch-array-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.oci-fetch.php" class="function" rel="rdfs-seeAlso">oci_fetch()</a> - Fetches the next row from a query into internal buffers</span></li>
    <li><span class="function"><a href="function.oci-fetch-all.php" class="function" rel="rdfs-seeAlso">oci_fetch_all()</a> - Fetches multiple rows from a query into a two-dimensional array</span></li>
    <li><span class="function"><a href="function.oci-fetch-assoc.php" class="function" rel="rdfs-seeAlso">oci_fetch_assoc()</a> - Returns the next row from a query as an associative array</span></li>
    <li><span class="function"><a href="function.oci-fetch-object.php" class="function" rel="rdfs-seeAlso">oci_fetch_object()</a> - Returns the next row from a query as an object</span></li>
    <li><span class="function"><a href="function.oci-fetch-row.php" class="function" rel="rdfs-seeAlso">oci_fetch_row()</a> - Returns the next row from a query as a numeric array</span></li>
    <li><span class="function"><a href="function.oci-set-prefetch.php" class="function" rel="rdfs-seeAlso">oci_set_prefetch()</a> - Sets number of rows to be prefetched by queries</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/oci8/functions/oci-fetch-array.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.oci-fetch-array%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.oci-fetch-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.oci-fetch-array.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="24217">  <div class="votes">
    <div id="Vu24217">
    <a href="/manual/vote-note.php?id=24217&amp;page=function.oci-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24217">
    <a href="/manual/vote-note.php?id=24217&amp;page=function.oci-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24217" title="66% like this...">
    1
    </div>
  </div>
  <a href="#24217" class="name">
  <strong class="user"><em>Maxwell_Smart at ThePentagon dot com</em></strong></a><a class="genanchor" href="#24217"> &para;</a><div class="date" title="2002-08-09 12:29"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24217">
<div class="phpcode"><code><span class="html">When using OCI_RETURN_LOBS to get a BFILE (stored with a DIRECTORY) the user needs READ on the DIRECTORY.  (GRANT READ on DIRECTORY &lt;directory name&gt; TO &lt;user&gt;;) Otherwise, you'll get a cryptic error. Warning: OCILobFileOpen: ORA-22285: non-existent directory or file for FILEOPEN operation in ... on line ...
<br />&lt;BR&gt;
<br />The user that CREATEs the DIRECTORY is automatically GRANTed READ WITH THE GRANT OPTION.</span></code></div>
  </div>
 </div>
  <div class="note" id="9155">  <div class="votes">
    <div id="Vu9155">
    <a href="/manual/vote-note.php?id=9155&amp;page=function.oci-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd9155">
    <a href="/manual/vote-note.php?id=9155&amp;page=function.oci-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V9155" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#9155" class="name">
  <strong class="user"><em>junk at netburp dot com</em></strong></a><a class="genanchor" href="#9155"> &para;</a><div class="date" title="2000-10-19 02:39"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom9155">
<div class="phpcode"><code><span class="html">Here's a clue about rowid.
<br />
<br />Don't forget about the oracle functions:
<br />
<br />"rowidtochar" and "chartorowid"
<br />
<br />"select rowidtochar(rowid) as FOO from table ...." 
<br />
<br />When you want to pass the rowid in a form or link, that's 
<br />the only way to go.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.oci-fetch-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.oci-fetch-array.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.oci8.php">OCI8 Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.oci-bind-array-by-name.php" title="oci_&#8203;bind_&#8203;array_&#8203;by_&#8203;name">oci_&#8203;bind_&#8203;array_&#8203;by_&#8203;name</a>
                        </li>
                                                <li class="">
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
                                                <li class="current">
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
