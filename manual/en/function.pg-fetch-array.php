<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pg_fetch_array - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pg-fetch-array.php">
 <link rel="shorturl" href="https://www.php.net/pg-fetch-array">
 <link rel="alternate" href="https://www.php.net/pg-fetch-array" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pgsql.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pg-fetch-all-columns.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pg-fetch-assoc.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pg-fetch-array.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pg-fetch-array.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pg-fetch-array.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pg-fetch-array.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pg-fetch-array.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pg-fetch-array.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pg-fetch-array.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pg-fetch-array.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pg-fetch-array.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pg-fetch-array.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pg-fetch-array.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetch a row as an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pg_fetch_array - Manual" />
<meta name="twitter:description" content="Fetch a row as an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pg_fetch_array - Manual" />
<meta itemprop="description" content="Fetch a row as an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetch a row as an array" />

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
        <a href="function.pg-fetch-assoc.php">
          pg_fetch_assoc &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pg-fetch-all-columns.php">
          &laquo; pg_fetch_all_columns        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.pgsql.php'>PostgreSQL</a></li>      <li><a href='ref.pgsql.php'>PostgreSQL Functions</a></li>      </ul>
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
            <option value='en/function.pg-fetch-array.php' selected="selected">English</option>
            <option value='de/function.pg-fetch-array.php'>German</option>
            <option value='es/function.pg-fetch-array.php'>Spanish</option>
            <option value='fr/function.pg-fetch-array.php'>French</option>
            <option value='it/function.pg-fetch-array.php'>Italian</option>
            <option value='ja/function.pg-fetch-array.php'>Japanese</option>
            <option value='pt_BR/function.pg-fetch-array.php'>Brazilian Portuguese</option>
            <option value='ru/function.pg-fetch-array.php'>Russian</option>
            <option value='tr/function.pg-fetch-array.php'>Turkish</option>
            <option value='uk/function.pg-fetch-array.php'>Ukrainian</option>
            <option value='zh/function.pg-fetch-array.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pg-fetch-array" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pg_fetch_array</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pg_fetch_array</span> &mdash; <span class="dc-title">Fetch a row as an array</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.pg-fetch-array-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pg_fetch_array</strong></span>(<span class="methodparam"><span class="type"><a href="class.pgsql-result.php" class="type PgSql\Result">PgSql\Result</a></span> <code class="parameter">$result</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$row</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = <strong><code><a href="pgsql.constants.php#constant.pgsql-both">PGSQL_BOTH</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>pg_fetch_array()</strong></span> returns an array that
   corresponds to the fetched row (record).
  </p>
  <p class="para">
   <span class="function"><strong>pg_fetch_array()</strong></span> is an extended version of
   <span class="function"><a href="function.pg-fetch-row.php" class="function">pg_fetch_row()</a></span>.  In addition to storing the
   data in the numeric indices (field number) to the result array, it
   can also store the data using associative indices (field name).
   It stores both indices by default.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function sets NULL fields to
the PHP <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> value.</span></p></blockquote>
  <p class="para">
   <span class="function"><strong>pg_fetch_array()</strong></span> is NOT significantly
   slower than using <span class="function"><a href="function.pg-fetch-row.php" class="function">pg_fetch_row()</a></span>, and
   is significantly easier to use.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.pg-fetch-array-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">result</code></dt>
     <dd>
      <p class="para">An <span class="classname"><a href="class.pgsql-result.php" class="classname">PgSql\Result</a></span> instance, returned by <span class="function"><a href="function.pg-query.php" class="function">pg_query()</a></span>,
<span class="function"><a href="function.pg-query-params.php" class="function">pg_query_params()</a></span> or <span class="function"><a href="function.pg-execute.php" class="function">pg_execute()</a></span>(among others).</p>
     </dd>
    
    
     <dt><code class="parameter">row</code></dt>
     <dd>
      <p class="para">
       Row number in result to fetch. Rows are numbered from 0 upwards. If
       omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the next row is fetched.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
An optional parameter that controls how the returned <span class="type"><a href="language.types.array.php" class="type array">array</a></span> is indexed.
<code class="parameter">mode</code> is a constant and can take the following values:
<strong><code><a href="pgsql.constants.php#constant.pgsql-assoc">PGSQL_ASSOC</a></code></strong>, <strong><code><a href="pgsql.constants.php#constant.pgsql-num">PGSQL_NUM</a></code></strong> and <strong><code><a href="pgsql.constants.php#constant.pgsql-both">PGSQL_BOTH</a></code></strong>.
Using <strong><code><a href="pgsql.constants.php#constant.pgsql-num">PGSQL_NUM</a></code></strong>, the function will return an array with numerical indices,
using <strong><code><a href="pgsql.constants.php#constant.pgsql-assoc">PGSQL_ASSOC</a></code></strong> it will return only associative indices
while <strong><code><a href="pgsql.constants.php#constant.pgsql-both">PGSQL_BOTH</a></code></strong> will return both numerical and associative indices.</p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pg-fetch-array-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An <span class="type"><a href="language.types.array.php" class="type array">array</a></span> indexed numerically (beginning with 0) or
   associatively (indexed by field name), or both.
   Each value in the <span class="type"><a href="language.types.array.php" class="type array">array</a></span> is represented as a 
   <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.  Database <code class="literal">NULL</code>
   values are returned as <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
  </p>
  <p class="para">
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned if <code class="parameter">row</code> exceeds the number
   of rows in the set, there are no more rows, or on any other error.
   Fetching from the result of a query other than SELECT will also return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.pg-fetch-array-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
 <td>8.1.0</td>
 <td>
  The <code class="parameter">result</code> parameter expects an <span class="classname"><a href="class.pgsql-result.php" class="classname">PgSql\Result</a></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.pg-fetch-array-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2059">
    <p><strong>Example #1 <span class="function"><strong>pg_fetch_array()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php <br /><br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_pconnect</span><span style="color: #007700">(</span><span style="color: #DD0000">"dbname=publisher"</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />  echo </span><span style="color: #DD0000">"An error occurred.\n"</span><span style="color: #007700">;<br />  exit;<br />}<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT author, email FROM authors"</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$result</span><span style="color: #007700">) {<br />  echo </span><span style="color: #DD0000">"An error occurred.\n"</span><span style="color: #007700">;<br />  exit;<br />}<br /><br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">PGSQL_NUM</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] . </span><span style="color: #DD0000">" &lt;- Row 1 Author\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] . </span><span style="color: #DD0000">" &lt;- Row 1 E-mail\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// The row parameter is optional; NULL can be passed instead,<br />// to pass a result_type.  Successive calls to pg_fetch_array<br />// will return the next row.<br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">, </span><span style="color: #0000BB">NULL</span><span style="color: #007700">, </span><span style="color: #0000BB">PGSQL_ASSOC</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">"author"</span><span style="color: #007700">] . </span><span style="color: #DD0000">" &lt;- Row 2 Author\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">"email"</span><span style="color: #007700">] . </span><span style="color: #DD0000">" &lt;- Row 2 E-mail\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">"author"</span><span style="color: #007700">] . </span><span style="color: #DD0000">" &lt;- Row 3 Author\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] . </span><span style="color: #DD0000">" &lt;- Row 3 E-mail\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.pg-fetch-array-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pg-fetch-row.php" class="function" rel="rdfs-seeAlso">pg_fetch_row()</a> - Get a row as an enumerated array</span></li>
    <li><span class="function"><a href="function.pg-fetch-object.php" class="function" rel="rdfs-seeAlso">pg_fetch_object()</a> - Fetch a row as an object</span></li>
    <li><span class="function"><a href="function.pg-fetch-result.php" class="function" rel="rdfs-seeAlso">pg_fetch_result()</a> - Returns values from a result instance</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pgsql/functions/pg-fetch-array.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pg-fetch-array%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pg-fetch-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-fetch-array.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="12185">  <div class="votes">
    <div id="Vu12185">
    <a href="/manual/vote-note.php?id=12185&amp;page=function.pg-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12185">
    <a href="/manual/vote-note.php?id=12185&amp;page=function.pg-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12185" title="63% like this...">
    3
    </div>
  </div>
  <a href="#12185" class="name">
  <strong class="user"><em>mkb at ele dot uri dot edu</em></strong></a><a class="genanchor" href="#12185"> &para;</a><div class="date" title="2001-03-27 04:52"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12185">
<div class="phpcode"><code><span class="html">The column names if you use PGSQL_ASSOC or PGSQL_BOTH are always in lowercase, no matter what the name is in the database or in the query.</span></code></div>
  </div>
 </div>
  <div class="note" id="17535">  <div class="votes">
    <div id="Vu17535">
    <a href="/manual/vote-note.php?id=17535&amp;page=function.pg-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17535">
    <a href="/manual/vote-note.php?id=17535&amp;page=function.pg-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17535" title="57% like this...">
    3
    </div>
  </div>
  <a href="#17535" class="name">
  <strong class="user"><em>jesse at sokieserv dot dhs dot org</em></strong></a><a class="genanchor" href="#17535"> &para;</a><div class="date" title="2001-12-13 04:38"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17535">
<div class="phpcode"><code><span class="html">As of PHP 4.1.0, you can now use code such as the following to iterate through a result set:
<br />
<br />$conn = pg_connect("host=localhost dbname=whatever");
<br />$result = pg_exec($conn, "select * from table");
<br />while ($row = pg_fetch_array($result))
<br />{
<br />     echo "data: ".$row["data"];
<br />}
<br />
<br />Can be a nice little time saver, PHP with MySQL has supported this for a while but I'm glad to see it extended to PostgreSQL...</span></code></div>
  </div>
 </div>
  <div class="note" id="10422">  <div class="votes">
    <div id="Vu10422">
    <a href="/manual/vote-note.php?id=10422&amp;page=function.pg-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10422">
    <a href="/manual/vote-note.php?id=10422&amp;page=function.pg-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10422" title="60% like this...">
    2
    </div>
  </div>
  <a href="#10422" class="name">
  <strong class="user"><em>gherson at snet dot net</em></strong></a><a class="genanchor" href="#10422"> &para;</a><div class="date" title="2001-01-02 09:14"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10422">
<div class="phpcode"><code><span class="html">PGSQL_BOTH is the default, meaning your array size will be doubled.  
<br />If you specify this field (result type), include no quotes around it or you won't get any data, not even an error.  
<br />Here's my wrapper function:
<br />function SQL_fetch_array($result_ndx, $row, $result_type=PGSQL_ASSOC) { 
<br />   return pg_fetch_array($result_ndx, $row, $result_type);</span></code></div>
  </div>
 </div>
  <div class="note" id="11769">  <div class="votes">
    <div id="Vu11769">
    <a href="/manual/vote-note.php?id=11769&amp;page=function.pg-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd11769">
    <a href="/manual/vote-note.php?id=11769&amp;page=function.pg-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V11769" title="60% like this...">
    1
    </div>
  </div>
  <a href="#11769" class="name">
  <strong class="user"><em>gherson at snet dot net</em></strong></a><a class="genanchor" href="#11769"> &para;</a><div class="date" title="2001-03-06 10:30"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom11769">
<div class="phpcode"><code><span class="html">In addition to returning "false if there are no more rows", pg_fetch_array will also trigger an E_WARNING.  You can temporarily turn that error reporting level off and suck out all your data like so:
<br />
<br /><span class="default">&lt;?php
<br />$errRptLvl </span><span class="keyword">= </span><span class="default">error_reporting</span><span class="keyword">(); 
<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">$errRptLvl </span><span class="keyword">&amp; ~(</span><span class="default">E_WARNING</span><span class="keyword">));
<br />       
<br />list(</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$j</span><span class="keyword">)=array(</span><span class="default">0</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">); 
<br />while (</span><span class="default">$selection</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">++] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fetchArray</span><span class="keyword">(</span><span class="default">$j</span><span class="keyword">++)); </span><span class="comment">// (fetchArray is a pg_fetch_array wrapper.)
<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">$errRptLvl</span><span class="keyword">); </span><span class="comment">// Restore error reporting level.
<br /></span><span class="keyword">unset(</span><span class="default">$selection</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">]); </span><span class="comment">// Delete the last, empty row.
<br /></span><span class="keyword">return </span><span class="default">$selection</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93104">  <div class="votes">
    <div id="Vu93104">
    <a href="/manual/vote-note.php?id=93104&amp;page=function.pg-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93104">
    <a href="/manual/vote-note.php?id=93104&amp;page=function.pg-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93104" title="55% like this...">
    1
    </div>
  </div>
  <a href="#93104" class="name">
  <strong class="user"><em>strata_ranger at hotmail dot com</em></strong></a><a class="genanchor" href="#93104"> &para;</a><div class="date" title="2009-08-23 01:53"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93104">
<div class="phpcode"><code><span class="html">Note that when using PGSQL_BOTH, numerically and associatively indexed fields are separate variables and treated as such:<br /><br /><span class="default">&lt;?php<br />$res </span><span class="keyword">= </span><span class="default">pg_query</span><span class="keyword">(</span><span class="string">"Select 'foo' as bar"</span><span class="keyword">);<br /><br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">pg_fetch_array</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">PGSQL_BOTH</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="comment">// Array(2)<br />// {<br />//   [0] =&gt; string(3) "foo"<br />//   ["bar"] =&gt; string(3) "foo"<br />// }<br /><br />// This won't affect $data['bar']<br /></span><span class="default">$data</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">'bar'</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="comment">// Array(2)<br />// {<br />//   [0] =&gt; string(3) "bar"<br />//   ["bar"] =&gt; string(3) "foo"<br />// }<br /></span><span class="default">?&gt;<br /></span><br />If you want to have reference binding between your numeric and associative indexes, you'll have to establish that yourself:<br /><br /><span class="default">&lt;?php<br /><br />$result </span><span class="keyword">= </span><span class="default">pg_query</span><span class="keyword">(</span><span class="string">"Select 'foo' as bar"</span><span class="keyword">);<br /><br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">pg_fetch_row</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /><br /></span><span class="comment">// Establish references between column name/number<br /></span><span class="default">$from </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">;<br />foreach(</span><span class="default">$from </span><span class="keyword">as </span><span class="default">$cx </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />{<br />    </span><span class="default">$key </span><span class="keyword">= </span><span class="default">pg_field_name</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$cx</span><span class="keyword">);<br />    if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)) </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] =&amp; </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$cx</span><span class="keyword">];<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="comment">// Array(2)<br />// {<br />//   [0] =&gt; &amp;string(3) "foo"<br />//   ["bar"] =&gt; &amp;string(3) "foo"<br />// }<br />// Note the reference binding between $data[0] and $data['bar']<br /><br /></span><span class="default">$data</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">'baz'</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="comment">// Array(2)<br />// {<br />//   [0] =&gt; &amp;string(3) "baz"<br />//   ["bar"] =&gt; &amp;string(3) "baz"<br />// }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="33136">  <div class="votes">
    <div id="Vu33136">
    <a href="/manual/vote-note.php?id=33136&amp;page=function.pg-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33136">
    <a href="/manual/vote-note.php?id=33136&amp;page=function.pg-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33136" title="100% like this...">
    1
    </div>
  </div>
  <a href="#33136" class="name">
  <strong class="user"><em>akm at e-nterart dot pl</em></strong></a><a class="genanchor" href="#33136"> &para;</a><div class="date" title="2003-06-17 09:45"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33136">
<div class="phpcode"><code><span class="html">(Timesaver) Be aware of the fact that keys in array returned by this function are (well, at least as of 4.2.3) of the same case as SQL column names (e.g. if your column name is ID then key name is also ID, not id or Id), and the keys in associative array are CASE SENSITIVE!!! So don't be surprised if you get unexpected results. Double check SQL column names and the key names.</span></code></div>
  </div>
 </div>
  <div class="note" id="49607">  <div class="votes">
    <div id="Vu49607">
    <a href="/manual/vote-note.php?id=49607&amp;page=function.pg-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49607">
    <a href="/manual/vote-note.php?id=49607&amp;page=function.pg-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49607" title="50% like this...">
    0
    </div>
  </div>
  <a href="#49607" class="name">
  <strong class="user"><em>devnull</em></strong></a><a class="genanchor" href="#49607"> &para;</a><div class="date" title="2005-02-02 01:59"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49607">
<div class="phpcode"><code><span class="html">In response to eth0's comment below about SELECT'ing from two tables where the tables have columns with the same names, you can get around this problem like this:<br /><br />"SELECT table1.foo AS foo1, table2.foo AS foo2 FROM table1, table2"<br /><br />In the associative array returned, the keys will be "foo1" and "foo2".</span></code></div>
  </div>
 </div>
  <div class="note" id="52829">  <div class="votes">
    <div id="Vu52829">
    <a href="/manual/vote-note.php?id=52829&amp;page=function.pg-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52829">
    <a href="/manual/vote-note.php?id=52829&amp;page=function.pg-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52829" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#52829" class="name">
  <strong class="user"><em>anonymous</em></strong></a><a class="genanchor" href="#52829"> &para;</a><div class="date" title="2005-05-13 02:21"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52829">
<div class="phpcode"><code><span class="html">Hopefully most people realize this on their own, but the examples below where people tried to get creative with getting numerical or associative (not both) keys in the result are rather pointless. See the pg_fetch_assoc() and pg_fetch_row() for the built in functions that do this automatically. It's generally a better idea to use one of these other functions unless you *need* to access fields by both collumn name *and* index.</span></code></div>
  </div>
 </div>
  <div class="note" id="35787">  <div class="votes">
    <div id="Vu35787">
    <a href="/manual/vote-note.php?id=35787&amp;page=function.pg-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35787">
    <a href="/manual/vote-note.php?id=35787&amp;page=function.pg-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35787" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#35787" class="name">
  <strong class="user"><em>enyo at www.red-link.com</em></strong></a><a class="genanchor" href="#35787"> &para;</a><div class="date" title="2003-09-14 06:55"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35787">
<div class="phpcode"><code><span class="html">Just because it is not really clear how to specify the result type, I poste this message.<br /><br />I wrote a wrapper function which looks like this:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">db_fetch_array </span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$row </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$result_type </span><span class="keyword">= </span><span class="default">PGSQL_ASSOC</span><span class="keyword">)<br />    {<br />        </span><span class="default">$return </span><span class="keyword">= @</span><span class="default">pg_fetch_array </span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$row</span><span class="keyword">, </span><span class="default">$result_type</span><span class="keyword">);<br />        return </span><span class="default">$return</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />I think this way it is quite comfortable to get the arrays you want.</span></code></div>
  </div>
 </div>
  <div class="note" id="15738">  <div class="votes">
    <div id="Vu15738">
    <a href="/manual/vote-note.php?id=15738&amp;page=function.pg-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd15738">
    <a href="/manual/vote-note.php?id=15738&amp;page=function.pg-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V15738" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#15738" class="name">
  <strong class="user"><em>eth0 at fins</em></strong></a><a class="genanchor" href="#15738"> &para;</a><div class="date" title="2001-09-28 11:15"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom15738">
<div class="phpcode"><code><span class="html">Please remember that if you have for example a table Customers with "cust_ID", "name" and "address" and another table Users with "u_ID","name" and "other" and then you SELECT WHERE cust_ID=u_ID then you'll get in the result array ONLY ONE "name" field, precisely the last one resulted from the select!!!</span></code></div>
  </div>
 </div>
  <div class="note" id="14220">  <div class="votes">
    <div id="Vu14220">
    <a href="/manual/vote-note.php?id=14220&amp;page=function.pg-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14220">
    <a href="/manual/vote-note.php?id=14220&amp;page=function.pg-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14220" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#14220" class="name">
  <strong class="user"><em>elliot at nospam dot rightnowtech dot com</em></strong></a><a class="genanchor" href="#14220"> &para;</a><div class="date" title="2001-07-22 09:50"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14220">
<div class="phpcode"><code><span class="html">Just remember when you 'or die' to close your table(s) or you may get a confused look from non-internet explorer users.</span></code></div>
  </div>
 </div>
  <div class="note" id="50238">  <div class="votes">
    <div id="Vu50238">
    <a href="/manual/vote-note.php?id=50238&amp;page=function.pg-fetch-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50238">
    <a href="/manual/vote-note.php?id=50238&amp;page=function.pg-fetch-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50238" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#50238" class="name">
  <strong class="user"><em>Dave O</em></strong></a><a class="genanchor" href="#50238"> &para;</a><div class="date" title="2005-02-22 09:52"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50238">
<div class="phpcode"><code><span class="html">I found this out through help from the mailing lists.  If you need to reset the internal counter, use the pg_result_seek, similar to:<br /><br />pg_result_seek($result, 0)<br /><br />...plagiarized from the comment on the function's doc page.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pg-fetch-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-fetch-array.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.pgsql.php">PostgreSQL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.pg-affected-rows.php" title="pg_&#8203;affected_&#8203;rows">pg_&#8203;affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-cancel-query.php" title="pg_&#8203;cancel_&#8203;query">pg_&#8203;cancel_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-client-encoding.php" title="pg_&#8203;client_&#8203;encoding">pg_&#8203;client_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-close.php" title="pg_&#8203;close">pg_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connect.php" title="pg_&#8203;connect">pg_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connect-poll.php" title="pg_&#8203;connect_&#8203;poll">pg_&#8203;connect_&#8203;poll</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connection-busy.php" title="pg_&#8203;connection_&#8203;busy">pg_&#8203;connection_&#8203;busy</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connection-reset.php" title="pg_&#8203;connection_&#8203;reset">pg_&#8203;connection_&#8203;reset</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-connection-status.php" title="pg_&#8203;connection_&#8203;status">pg_&#8203;connection_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-consume-input.php" title="pg_&#8203;consume_&#8203;input">pg_&#8203;consume_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-convert.php" title="pg_&#8203;convert">pg_&#8203;convert</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-copy-from.php" title="pg_&#8203;copy_&#8203;from">pg_&#8203;copy_&#8203;from</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-copy-to.php" title="pg_&#8203;copy_&#8203;to">pg_&#8203;copy_&#8203;to</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-dbname.php" title="pg_&#8203;dbname">pg_&#8203;dbname</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-delete.php" title="pg_&#8203;delete">pg_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-end-copy.php" title="pg_&#8203;end_&#8203;copy">pg_&#8203;end_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-escape-bytea.php" title="pg_&#8203;escape_&#8203;bytea">pg_&#8203;escape_&#8203;bytea</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-escape-identifier.php" title="pg_&#8203;escape_&#8203;identifier">pg_&#8203;escape_&#8203;identifier</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-escape-literal.php" title="pg_&#8203;escape_&#8203;literal">pg_&#8203;escape_&#8203;literal</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-escape-string.php" title="pg_&#8203;escape_&#8203;string">pg_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-execute.php" title="pg_&#8203;execute">pg_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-all.php" title="pg_&#8203;fetch_&#8203;all">pg_&#8203;fetch_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-all-columns.php" title="pg_&#8203;fetch_&#8203;all_&#8203;columns">pg_&#8203;fetch_&#8203;all_&#8203;columns</a>
                        </li>
                                                <li class="current">
                            <a href="function.pg-fetch-array.php" title="pg_&#8203;fetch_&#8203;array">pg_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-assoc.php" title="pg_&#8203;fetch_&#8203;assoc">pg_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-object.php" title="pg_&#8203;fetch_&#8203;object">pg_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-result.php" title="pg_&#8203;fetch_&#8203;result">pg_&#8203;fetch_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-fetch-row.php" title="pg_&#8203;fetch_&#8203;row">pg_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-is-null.php" title="pg_&#8203;field_&#8203;is_&#8203;null">pg_&#8203;field_&#8203;is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-name.php" title="pg_&#8203;field_&#8203;name">pg_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-num.php" title="pg_&#8203;field_&#8203;num">pg_&#8203;field_&#8203;num</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-prtlen.php" title="pg_&#8203;field_&#8203;prtlen">pg_&#8203;field_&#8203;prtlen</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-size.php" title="pg_&#8203;field_&#8203;size">pg_&#8203;field_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-table.php" title="pg_&#8203;field_&#8203;table">pg_&#8203;field_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-type.php" title="pg_&#8203;field_&#8203;type">pg_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-field-type-oid.php" title="pg_&#8203;field_&#8203;type_&#8203;oid">pg_&#8203;field_&#8203;type_&#8203;oid</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-flush.php" title="pg_&#8203;flush">pg_&#8203;flush</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-free-result.php" title="pg_&#8203;free_&#8203;result">pg_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-get-notify.php" title="pg_&#8203;get_&#8203;notify">pg_&#8203;get_&#8203;notify</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-get-pid.php" title="pg_&#8203;get_&#8203;pid">pg_&#8203;get_&#8203;pid</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-get-result.php" title="pg_&#8203;get_&#8203;result">pg_&#8203;get_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-host.php" title="pg_&#8203;host">pg_&#8203;host</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-insert.php" title="pg_&#8203;insert">pg_&#8203;insert</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-last-error.php" title="pg_&#8203;last_&#8203;error">pg_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-last-notice.php" title="pg_&#8203;last_&#8203;notice">pg_&#8203;last_&#8203;notice</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-last-oid.php" title="pg_&#8203;last_&#8203;oid">pg_&#8203;last_&#8203;oid</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-close.php" title="pg_&#8203;lo_&#8203;close">pg_&#8203;lo_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-create.php" title="pg_&#8203;lo_&#8203;create">pg_&#8203;lo_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-export.php" title="pg_&#8203;lo_&#8203;export">pg_&#8203;lo_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-import.php" title="pg_&#8203;lo_&#8203;import">pg_&#8203;lo_&#8203;import</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-open.php" title="pg_&#8203;lo_&#8203;open">pg_&#8203;lo_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-read.php" title="pg_&#8203;lo_&#8203;read">pg_&#8203;lo_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-read-all.php" title="pg_&#8203;lo_&#8203;read_&#8203;all">pg_&#8203;lo_&#8203;read_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-seek.php" title="pg_&#8203;lo_&#8203;seek">pg_&#8203;lo_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-tell.php" title="pg_&#8203;lo_&#8203;tell">pg_&#8203;lo_&#8203;tell</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-truncate.php" title="pg_&#8203;lo_&#8203;truncate">pg_&#8203;lo_&#8203;truncate</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-unlink.php" title="pg_&#8203;lo_&#8203;unlink">pg_&#8203;lo_&#8203;unlink</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-lo-write.php" title="pg_&#8203;lo_&#8203;write">pg_&#8203;lo_&#8203;write</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-meta-data.php" title="pg_&#8203;meta_&#8203;data">pg_&#8203;meta_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-num-fields.php" title="pg_&#8203;num_&#8203;fields">pg_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-num-rows.php" title="pg_&#8203;num_&#8203;rows">pg_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-options.php" title="pg_&#8203;options">pg_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-parameter-status.php" title="pg_&#8203;parameter_&#8203;status">pg_&#8203;parameter_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-pconnect.php" title="pg_&#8203;pconnect">pg_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-ping.php" title="pg_&#8203;ping">pg_&#8203;ping</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-port.php" title="pg_&#8203;port">pg_&#8203;port</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-prepare.php" title="pg_&#8203;prepare">pg_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-put-line.php" title="pg_&#8203;put_&#8203;line">pg_&#8203;put_&#8203;line</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-query.php" title="pg_&#8203;query">pg_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-query-params.php" title="pg_&#8203;query_&#8203;params">pg_&#8203;query_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-error.php" title="pg_&#8203;result_&#8203;error">pg_&#8203;result_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-error-field.php" title="pg_&#8203;result_&#8203;error_&#8203;field">pg_&#8203;result_&#8203;error_&#8203;field</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-memory-size.php" title="pg_&#8203;result_&#8203;memory_&#8203;size">pg_&#8203;result_&#8203;memory_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-seek.php" title="pg_&#8203;result_&#8203;seek">pg_&#8203;result_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-result-status.php" title="pg_&#8203;result_&#8203;status">pg_&#8203;result_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-select.php" title="pg_&#8203;select">pg_&#8203;select</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-send-execute.php" title="pg_&#8203;send_&#8203;execute">pg_&#8203;send_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-send-prepare.php" title="pg_&#8203;send_&#8203;prepare">pg_&#8203;send_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-send-query.php" title="pg_&#8203;send_&#8203;query">pg_&#8203;send_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-send-query-params.php" title="pg_&#8203;send_&#8203;query_&#8203;params">pg_&#8203;send_&#8203;query_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-set-chunked-rows-size.php" title="pg_&#8203;set_&#8203;chunked_&#8203;rows_&#8203;size">pg_&#8203;set_&#8203;chunked_&#8203;rows_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-set-client-encoding.php" title="pg_&#8203;set_&#8203;client_&#8203;encoding">pg_&#8203;set_&#8203;client_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-set-error-context-visibility.php" title="pg_&#8203;set_&#8203;error_&#8203;context_&#8203;visibility">pg_&#8203;set_&#8203;error_&#8203;context_&#8203;visibility</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-set-error-verbosity.php" title="pg_&#8203;set_&#8203;error_&#8203;verbosity">pg_&#8203;set_&#8203;error_&#8203;verbosity</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-socket.php" title="pg_&#8203;socket">pg_&#8203;socket</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-trace.php" title="pg_&#8203;trace">pg_&#8203;trace</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-transaction-status.php" title="pg_&#8203;transaction_&#8203;status">pg_&#8203;transaction_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-tty.php" title="pg_&#8203;tty">pg_&#8203;tty</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-unescape-bytea.php" title="pg_&#8203;unescape_&#8203;bytea">pg_&#8203;unescape_&#8203;bytea</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-untrace.php" title="pg_&#8203;untrace">pg_&#8203;untrace</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-update.php" title="pg_&#8203;update">pg_&#8203;update</a>
                        </li>
                                                <li class="">
                            <a href="function.pg-version.php" title="pg_&#8203;version">pg_&#8203;version</a>
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
