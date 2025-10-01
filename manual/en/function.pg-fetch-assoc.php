<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pg_fetch_assoc - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pg-fetch-assoc.php">
 <link rel="shorturl" href="https://www.php.net/pg-fetch-assoc">
 <link rel="alternate" href="https://www.php.net/pg-fetch-assoc" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pgsql.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pg-fetch-array.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pg-fetch-object.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pg-fetch-assoc.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pg-fetch-assoc.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pg-fetch-assoc.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pg-fetch-assoc.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pg-fetch-assoc.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pg-fetch-assoc.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pg-fetch-assoc.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pg-fetch-assoc.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pg-fetch-assoc.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pg-fetch-assoc.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pg-fetch-assoc.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetch a row as an associative array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pg_fetch_assoc - Manual" />
<meta name="twitter:description" content="Fetch a row as an associative array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pg_fetch_assoc - Manual" />
<meta itemprop="description" content="Fetch a row as an associative array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetch a row as an associative array" />

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
        <a href="function.pg-fetch-object.php">
          pg_fetch_object &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pg-fetch-array.php">
          &laquo; pg_fetch_array        </a>
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
            <option value='en/function.pg-fetch-assoc.php' selected="selected">English</option>
            <option value='de/function.pg-fetch-assoc.php'>German</option>
            <option value='es/function.pg-fetch-assoc.php'>Spanish</option>
            <option value='fr/function.pg-fetch-assoc.php'>French</option>
            <option value='it/function.pg-fetch-assoc.php'>Italian</option>
            <option value='ja/function.pg-fetch-assoc.php'>Japanese</option>
            <option value='pt_BR/function.pg-fetch-assoc.php'>Brazilian Portuguese</option>
            <option value='ru/function.pg-fetch-assoc.php'>Russian</option>
            <option value='tr/function.pg-fetch-assoc.php'>Turkish</option>
            <option value='uk/function.pg-fetch-assoc.php'>Ukrainian</option>
            <option value='zh/function.pg-fetch-assoc.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pg-fetch-assoc" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pg_fetch_assoc</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pg_fetch_assoc</span> &mdash; <span class="dc-title">Fetch a row as an associative array</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.pg-fetch-assoc-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pg_fetch_assoc</strong></span>(<span class="methodparam"><span class="type"><a href="class.pgsql-result.php" class="type PgSql\Result">PgSql\Result</a></span> <code class="parameter">$result</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$row</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>pg_fetch_assoc()</strong></span> returns an associative array that
   corresponds to the fetched row (records).
  </p>
  <p class="para">
   <span class="function"><strong>pg_fetch_assoc()</strong></span> is equivalent to calling
   <span class="function"><a href="function.pg-fetch-array.php" class="function">pg_fetch_array()</a></span> with <strong><code><a href="pgsql.constants.php#constant.pgsql-assoc">PGSQL_ASSOC</a></code></strong> as the
   optional third parameter. It only returns an associative array.
   If you need the numeric indices, use 
   <span class="function"><a href="function.pg-fetch-row.php" class="function">pg_fetch_row()</a></span>.  
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function sets NULL fields to
the PHP <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> value.</span></p></blockquote>
  <p class="para">
   <span class="function"><strong>pg_fetch_assoc()</strong></span> is NOT significantly
   slower than using <span class="function"><a href="function.pg-fetch-row.php" class="function">pg_fetch_row()</a></span>, and
   is significantly easier to use.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.pg-fetch-assoc-parameters">
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
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pg-fetch-assoc-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An <span class="type"><a href="language.types.array.php" class="type array">array</a></span> indexed associatively (by field name).
   Each value in the <span class="type"><a href="language.types.array.php" class="type array">array</a></span> is represented as a 
   <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.  Database <code class="literal">NULL</code>
   values are returned as <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
  </p>
  <p class="para">
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned if <code class="parameter">row</code> exceeds the number
   of rows in the set, there are no more rows, or on any other error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.pg-fetch-assoc-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.pg-fetch-assoc-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2060">
    <p><strong>Example #1 <span class="function"><strong>pg_fetch_assoc()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php <br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"dbname=publisher"</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />  echo </span><span style="color: #DD0000">"An error occurred.\n"</span><span style="color: #007700">;<br />  exit;<br />}<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT id, author, email FROM authors"</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$result</span><span style="color: #007700">) {<br />  echo </span><span style="color: #DD0000">"An error occurred.\n"</span><span style="color: #007700">;<br />  exit;<br />}<br /><br />while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_fetch_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)) {<br />  echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br />  echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'author'</span><span style="color: #007700">];<br />  echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'email'</span><span style="color: #007700">];<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.pg-fetch-assoc-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pg-fetch-row.php" class="function" rel="rdfs-seeAlso">pg_fetch_row()</a> - Get a row as an enumerated array</span></li>
    <li><span class="function"><a href="function.pg-fetch-array.php" class="function" rel="rdfs-seeAlso">pg_fetch_array()</a> - Fetch a row as an array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pgsql/functions/pg-fetch-assoc.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pg-fetch-assoc%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pg-fetch-assoc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-fetch-assoc.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108957">  <div class="votes">
    <div id="Vu108957">
    <a href="/manual/vote-note.php?id=108957&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108957">
    <a href="/manual/vote-note.php?id=108957&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108957" title="76% like this...">
    13
    </div>
  </div>
  <a href="#108957" class="name">
  <strong class="user"><em>slurppp at hotmail dot fr</em></strong></a><a class="genanchor" href="#108957"> &para;</a><div class="date" title="2012-06-08 02:37"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108957">
<div class="phpcode"><code><span class="html">Note that all pg_fetch_* function ignoring the original type of the data and always return strings. (for numbers too)</span></code></div>
  </div>
 </div>
  <div class="note" id="90981">  <div class="votes">
    <div id="Vu90981">
    <a href="/manual/vote-note.php?id=90981&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90981">
    <a href="/manual/vote-note.php?id=90981&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90981" title="100% like this...">
    3
    </div>
  </div>
  <a href="#90981" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#90981"> &para;</a><div class="date" title="2009-05-19 08:24"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90981">
<div class="phpcode"><code><span class="html">Beware!  If your query returns multiple columns with the same names, only the right-most one will be contained in the result array.  This can cause problems if you are using a combination of joins:<br /><br />For example:<br /><span class="default">&lt;?php<br /></span><span class="comment">// Let's say that 'pkey' is the primary-key colum for tables a and b (primary keys are never null)<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">pg_query</span><span class="keyword">(</span><span class="string">"Select a.pkey, b.* FROM a LEFT JOIN b using (pkey)"</span><span class="keyword">);<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">pg_fetch_assoc</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'pkey'</span><span class="keyword">]) </span><span class="comment">// Is actually b.pkey, may be NULL!<br /></span><span class="default">?&gt;<br /></span><br />Both tables contain a column named 'pkey'.  Now table 'b' is on the optional side of a LEFT JOIN, so b.pkey (implicitly included via 'b.*') may be NULL.<br /><br />The problem arises when you use pg_fetch_assoc(), there are two columns named 'pkey' but the result array can only contain one value per key -- in this case it will pick the one from table B instead of the one from table A, and since B is on the optional side of the left-join, $data['pkey'] may be NULL.  So if you're expecting to retrieve the column from table A, you need to use a different pg_fetch() or rewrite your query to avoid ambiguity.</span></code></div>
  </div>
 </div>
  <div class="note" id="57055">  <div class="votes">
    <div id="Vu57055">
    <a href="/manual/vote-note.php?id=57055&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57055">
    <a href="/manual/vote-note.php?id=57055&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57055" title="72% like this...">
    5
    </div>
  </div>
  <a href="#57055" class="name">
  <strong class="user"><em>Luke</em></strong></a><a class="genanchor" href="#57055"> &para;</a><div class="date" title="2005-09-22 06:34"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57055">
<div class="phpcode"><code><span class="html">Note:<br /><br />PostgreSQL boolean values set to TRUE are returned as the string "t"<br /><br />PostgreSQL boolean values set to FALSE are returned as the string "f"</span></code></div>
  </div>
 </div>
  <div class="note" id="66510">  <div class="votes">
    <div id="Vu66510">
    <a href="/manual/vote-note.php?id=66510&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66510">
    <a href="/manual/vote-note.php?id=66510&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66510" title="60% like this...">
    1
    </div>
  </div>
  <a href="#66510" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#66510"> &para;</a><div class="date" title="2006-05-24 12:59"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66510">
<div class="phpcode"><code><span class="html">If you request a row that does not exist, it just fails, rather than simply returning false.</span></code></div>
  </div>
 </div>
  <div class="note" id="33296">  <div class="votes">
    <div id="Vu33296">
    <a href="/manual/vote-note.php?id=33296&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33296">
    <a href="/manual/vote-note.php?id=33296&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33296" title="60% like this...">
    1
    </div>
  </div>
  <a href="#33296" class="name">
  <strong class="user"><em>ninja (whorl) thinkninja (stop) com</em></strong></a><a class="genanchor" href="#33296"> &para;</a><div class="date" title="2003-06-21 08:29"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33296">
<div class="phpcode"><code><span class="html">If you are moving between different versions of PHP, this might be handy:<br /><br />if (!function_exists('pg_fetch_assoc')) {<br />    function pg_fetch_assoc ($result)<br />    {<br />      return @pg_fetch_array($result, NULL, PGSQL_ASSOC);<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="124729">  <div class="votes">
    <div id="Vu124729">
    <a href="/manual/vote-note.php?id=124729&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124729">
    <a href="/manual/vote-note.php?id=124729&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124729" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124729" class="name">
  <strong class="user"><em>artem.eroshin  gmail  com</em></strong></a><a class="genanchor" href="#124729"> &para;</a><div class="date" title="2020-02-17 04:17"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124729">
<div class="phpcode"><code><span class="html">Converts 't' and 'f' to PHP Boolean<br /><br />$result = pg_query($_db, $sql);<br /><br />while ( $row = pg_fetch_assoc( $result ) )<br />{<br />    fixBooleans($result, $row);<br /><br />    //some other code<br />}<br /><br />function fixBooleans($result, &amp;$row)<br />{<br /><br />    for ($fld_i = 0; $fld_i &lt; pg_num_fields($result); $fld_i++)<br />    {<br />        $fld_name = pg_field_name($result, $fld_i);<br /><br />        if( pg_field_type($result, $fld_i) == 'bool' )<br />        {<br />            if( $row[ $fld_name ] == 't' )<br />            {<br />                $row[ $fld_name ] = true;<br />            }<br />            elseif($row[ $fld_name ] == 'f')<br />            {<br />                $row[ $fld_name ] = false;<br />            }<br />        }<br />    }<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="117159">  <div class="votes">
    <div id="Vu117159">
    <a href="/manual/vote-note.php?id=117159&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117159">
    <a href="/manual/vote-note.php?id=117159&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117159" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117159" class="name">
  <strong class="user"><em>huntfalow at yahoo dot com</em></strong></a><a class="genanchor" href="#117159"> &para;</a><div class="date" title="2015-04-23 08:46"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117159">
<div class="phpcode"><code><span class="html">&lt;html&gt;<br />&lt;head&gt;<br />&lt;script&gt;<br />function waarde(){<br />    var text = document.getElementById("optVakken").value;<br />    document.getElementById("txthidden").value = text;<br />    document.forms["hiddenform"].submit();<br />}<br />&lt;/script&gt;<br /><span class="default">&lt;?php<br /></span><span class="comment">// keuzemenu met alle leerkrachten<br /></span><span class="keyword">function </span><span class="default">leerkrachten</span><span class="keyword">(</span><span class="default">$aName</span><span class="keyword">){<br />    include(</span><span class="string">"includes/connect.php"</span><span class="keyword">);<br />    <br />}<br /></span><span class="comment">// keuzemenu met alle vakken<br /></span><span class="keyword">function </span><span class="default">vakken</span><span class="keyword">(</span><span class="default">$aID</span><span class="keyword">){<br />    include(</span><span class="string">"includes/connect.php"</span><span class="keyword">);<br />    </span><span class="default">$SelectVakkenQuery </span><span class="keyword">= </span><span class="string">"SELECT * FROM vakken"</span><span class="keyword">;<br />    </span><span class="default">$SelectVakkenResult </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$SelectVakkenQuery</span><span class="keyword">);<br />    </span><span class="default">$Choice </span><span class="keyword">= </span><span class="string">"&lt;select id='</span><span class="default">$aID</span><span class="string">' onchange=waarde()&gt;&lt;option&gt;Kies een vak&lt;/option&gt;"</span><span class="keyword">;<br />    <br />        while(</span><span class="default">$rij2 </span><span class="keyword">= </span><span class="default">$SelectVakkenResult</span><span class="keyword">-&gt;</span><span class="default">fetch_assoc</span><span class="keyword">()){<br />        </span><span class="default">$VakID </span><span class="keyword">= </span><span class="default">$rij2</span><span class="keyword">[</span><span class="string">'vakid'</span><span class="keyword">];<br />        </span><span class="default">$Vaknaam </span><span class="keyword">= </span><span class="default">$rij2</span><span class="keyword">[</span><span class="string">'voluit'</span><span class="keyword">];<br />        </span><span class="default">$Choice </span><span class="keyword">.= </span><span class="string">"&lt;option value='</span><span class="default">$VakID</span><span class="string">'&gt;</span><span class="default">$Vaknaam</span><span class="string">&lt;/option&gt;"</span><span class="keyword">;<br />    }<br />    </span><span class="default">$Choice </span><span class="keyword">.= </span><span class="string">"&lt;/select&gt;"</span><span class="keyword">;<br />    return </span><span class="default">$Choice</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>&lt;title&gt;Remediëringsoefening&lt;/title&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br /><span class="default">&lt;?php<br /></span><span class="keyword">include(</span><span class="string">"includes/connect.php"</span><span class="keyword">);<br /></span><span class="comment">// aanmaken van keuzemenus<br /><br />// eerste keuzemenu<br /></span><span class="keyword">echo </span><span class="default">vakken</span><span class="keyword">(</span><span class="string">"optVakken"</span><span class="keyword">).</span><span class="string">"&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br /><br /></span><span class="comment">// tweede keuzemenu<br /></span><span class="keyword">if(!isset(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'txthidden'</span><span class="keyword">])){<br /></span><span class="default">$SelectLeerkrachtenQuery </span><span class="keyword">= </span><span class="string">"SELECT * FROM leerkrachten"</span><span class="keyword">;<br /></span><span class="default">$SelectLeerkrachtResult </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$SelectLeerkrachtenQuery</span><span class="keyword">);<br />    <br /></span><span class="default">$Choice </span><span class="keyword">= </span><span class="string">"&lt;select&gt;"</span><span class="keyword">;<br />while(</span><span class="default">$rij</span><span class="keyword">=</span><span class="default">$SelectLeerkrachtResult</span><span class="keyword">-&gt;</span><span class="default">fetch_assoc</span><span class="keyword">()){<br />    </span><span class="default">$Voornaam </span><span class="keyword">= </span><span class="default">$rij</span><span class="keyword">[</span><span class="string">'voornaam'</span><span class="keyword">];<br />    </span><span class="default">$Naam </span><span class="keyword">= </span><span class="default">$rij</span><span class="keyword">[</span><span class="string">'naam'</span><span class="keyword">];<br />    </span><span class="default">$LKID </span><span class="keyword">= </span><span class="default">$rij</span><span class="keyword">[</span><span class="string">'leerkrachtid'</span><span class="keyword">];<br />    </span><span class="default">$Volledig </span><span class="keyword">= </span><span class="default">$Voornaam </span><span class="keyword">. </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$Naam</span><span class="keyword">;<br />    </span><span class="default">$Choice </span><span class="keyword">.= </span><span class="string">"&lt;option value='</span><span class="default">$LKID</span><span class="string">'&gt;</span><span class="default">$Volledig</span><span class="string">&lt;/option&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">$Choice </span><span class="keyword">.= </span><span class="string">"&lt;/select&gt;&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br />echo </span><span class="default">$Choice</span><span class="keyword">;<br />}else{<br />    </span><span class="default">$vakid </span><span class="keyword">= </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'txthidden'</span><span class="keyword">];<br />    </span><span class="default">$SelectLeerkrachtenQuery </span><span class="keyword">= </span><span class="string">"SELECT * FROM leerkrachten JOIN leerkrachtpervak ON leerkrachten.leerkrachtid = leerkrachtpervak.leerkrachtid WHERE vakid = '</span><span class="default">$vakid</span><span class="string">'"</span><span class="keyword">;<br />    </span><span class="default">$SelectLeerkrachtResult </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$SelectLeerkrachtenQuery</span><span class="keyword">);<br />    </span><span class="default">$Choice </span><span class="keyword">= </span><span class="string">"&lt;select&gt;"</span><span class="keyword">;<br />    while(</span><span class="default">$row3</span><span class="keyword">=</span><span class="default">$SelectLeerkrachtResult</span><span class="keyword">-&gt;</span><span class="default">fetch_assoc</span><span class="keyword">()){<br />        </span><span class="default">$Voornaam </span><span class="keyword">= </span><span class="default">$row3</span><span class="keyword">[</span><span class="string">'voornaam'</span><span class="keyword">];<br />        </span><span class="default">$Naam </span><span class="keyword">= </span><span class="default">$row3</span><span class="keyword">[</span><span class="string">'naam'</span><span class="keyword">];<br />        </span><span class="default">$Volledig </span><span class="keyword">= </span><span class="default">$Voornaam </span><span class="keyword">. </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$Naam</span><span class="keyword">;<br />        </span><span class="default">$Choice </span><span class="keyword">.= </span><span class="string">"&lt;option&gt;</span><span class="default">$Volledig</span><span class="string">&lt;/option&gt;"</span><span class="keyword">;<br />    }<br />    </span><span class="default">$Choice </span><span class="keyword">.= </span><span class="string">"&lt;/select&gt;&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br />    echo </span><span class="default">$Choice</span><span class="keyword">;<br />}<br /></span><span class="comment">// onzichtbaar textbox voor JS<br /></span><span class="keyword">echo </span><span class="string">"&lt;form method='post' id='hiddenform'&gt;&lt;input type='hidden' name='txthidden' id='txthidden'&gt;&lt;/form&gt;"</span><span class="keyword">;<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="96661">  <div class="votes">
    <div id="Vu96661">
    <a href="/manual/vote-note.php?id=96661&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96661">
    <a href="/manual/vote-note.php?id=96661&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96661" title="50% like this...">
    0
    </div>
  </div>
  <a href="#96661" class="name">
  <strong class="user"><em>Alexey Loktionov (error at pochta dot ru)</em></strong></a><a class="genanchor" href="#96661"> &para;</a><div class="date" title="2010-03-10 04:54"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96661">
<div class="phpcode"><code><span class="html">Here is much powerful pg_parse_array() variant, based on FSM: for any dimension Postgres arrays (its string representation must be well-formed), with quotation rules checks, complexity O(N), where N is a length of string representation of Postgres array:<br /><br /><span class="default">&lt;?php<br /><br />define</span><span class="keyword">(</span><span class="string">'STATE_BEGIN'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'STATE_INARRAY'</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'STATE_OUTARRAY'</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'STATE_INSLASH'</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'STATE_INQUOTES'</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);<br /><br />function </span><span class="default">pg_parse_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) {<br />        </span><span class="default">$resultArray </span><span class="keyword">= </span><span class="default">$indexArray </span><span class="keyword">= array(); </span><span class="default">$level </span><span class="keyword">= </span><span class="default">$index </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$ptr </span><span class="keyword">= &amp;</span><span class="default">$resultArray</span><span class="keyword">;<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++){<br />            switch(</span><span class="default">$level</span><span class="keyword">){<br />                case </span><span class="default">1</span><span class="keyword">:<br />                    if(</span><span class="default">$index </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">){<br />                        </span><span class="default">$ptr </span><span class="keyword">= &amp; </span><span class="default">$ptr</span><span class="keyword">[</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$ptr</span><span class="keyword">)];<br />                    }<br />                    </span><span class="default">$indexArray</span><span class="keyword">[++</span><span class="default">$index</span><span class="keyword">] = &amp; </span><span class="default">$ptr</span><span class="keyword">;<br />                    break;<br />                case -</span><span class="default">1</span><span class="keyword">:<br />                    </span><span class="default">$ptr </span><span class="keyword">= &amp; </span><span class="default">$indexArray</span><span class="keyword">[--</span><span class="default">$index</span><span class="keyword">];<br />                    break;<br />            }<br />            </span><span class="default">$level </span><span class="keyword">= </span><span class="default">processFSM</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">}, </span><span class="default">$ptr</span><span class="keyword">);<br />        }<br />        return </span><span class="default">$resultArray</span><span class="keyword">;<br />    }<br />    <br />    function </span><span class="default">processFSM</span><span class="keyword">(</span><span class="default">$chr</span><span class="keyword">, &amp;</span><span class="default">$result</span><span class="keyword">){<br />        static </span><span class="default">$state </span><span class="keyword">= </span><span class="default">STATE_BEGIN</span><span class="keyword">, </span><span class="default">$index </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$level </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        switch(</span><span class="default">true</span><span class="keyword">){<br />            case </span><span class="default">$chr </span><span class="keyword">== </span><span class="string">'{' </span><span class="keyword">&amp;&amp; </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$state</span><span class="keyword">, array(</span><span class="default">STATE_BEGIN</span><span class="keyword">,</span><span class="default">STATE_INARRAY</span><span class="keyword">,</span><span class="default">STATE_OUTARRAY</span><span class="keyword">), </span><span class="default">true</span><span class="keyword">):<br />                </span><span class="default">$state </span><span class="keyword">= </span><span class="default">STATE_INARRAY</span><span class="keyword">;<br />                </span><span class="default">$index </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />                </span><span class="default">$level </span><span class="keyword">= +</span><span class="default">1</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">$chr </span><span class="keyword">== </span><span class="string">'}' </span><span class="keyword">&amp;&amp; </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$state</span><span class="keyword">, array(</span><span class="default">STATE_INARRAY</span><span class="keyword">,</span><span class="default">STATE_OUTARRAY</span><span class="keyword">), </span><span class="default">true</span><span class="keyword">):<br />                </span><span class="default">$state </span><span class="keyword">= </span><span class="default">STATE_OUTARRAY</span><span class="keyword">;<br />                </span><span class="default">$level </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />                break;<br />            case </span><span class="default">$chr </span><span class="keyword">== </span><span class="string">'\\' </span><span class="keyword">&amp;&amp; </span><span class="default">$state </span><span class="keyword">!== </span><span class="default">STATE_BEGIN</span><span class="keyword">:<br />                </span><span class="default">$state </span><span class="keyword">= </span><span class="default">$state </span><span class="keyword">=== </span><span class="default">STATE_INSLASH </span><span class="keyword">? </span><span class="default">STATE_INQUOTES </span><span class="keyword">: </span><span class="default">STATE_INSLASH</span><span class="keyword">;<br />                break;<br />            <br />            case </span><span class="default">$chr </span><span class="keyword">== </span><span class="string">'"' </span><span class="keyword">&amp;&amp; !</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$state</span><span class="keyword">, array(</span><span class="default">STATE_BEGIN</span><span class="keyword">,</span><span class="default">STATE_INSLASH</span><span class="keyword">), </span><span class="default">true</span><span class="keyword">):<br />                </span><span class="default">$state </span><span class="keyword">= </span><span class="default">$state </span><span class="keyword">=== </span><span class="default">STATE_INQUOTES </span><span class="keyword">? </span><span class="default">STATE_INARRAY </span><span class="keyword">: </span><span class="default">STATE_INQUOTES</span><span class="keyword">;<br />                break;<br />            <br />            case </span><span class="default">$chr </span><span class="keyword">== </span><span class="string">',' </span><span class="keyword">&amp;&amp; </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$state</span><span class="keyword">, array(</span><span class="default">STATE_INARRAY</span><span class="keyword">,</span><span class="default">STATE_OUTARRAY</span><span class="keyword">), </span><span class="default">true</span><span class="keyword">):<br />                </span><span class="default">$index </span><span class="keyword">= </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br />                break;<br />            <br />            case </span><span class="default">$state </span><span class="keyword">!== </span><span class="default">STATE_BEGIN</span><span class="keyword">:<br />                </span><span class="default">$state </span><span class="keyword">= </span><span class="default">$state </span><span class="keyword">=== </span><span class="default">STATE_INSLASH </span><span class="keyword">? </span><span class="default">STATE_INQUOTES </span><span class="keyword">: </span><span class="default">$state</span><span class="keyword">;<br />                isset(</span><span class="default">$result</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]) or </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">] = </span><span class="string">''</span><span class="keyword">;<br />                </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">] .= </span><span class="default">$chr</span><span class="keyword">;<br />                break;<br />        }<br />        return </span><span class="default">$level</span><span class="keyword">;<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95693">  <div class="votes">
    <div id="Vu95693">
    <a href="/manual/vote-note.php?id=95693&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95693">
    <a href="/manual/vote-note.php?id=95693&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95693" title="50% like this...">
    0
    </div>
  </div>
  <a href="#95693" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#95693"> &para;</a><div class="date" title="2010-01-16 03:16"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95693">
<div class="phpcode"><code><span class="html">Be aware that if one of your result fields is an array, it will be output as a string using the general format of '{value1,value2, ... }' in accordance with postgres's behavior with SQL arrays.<br /><a href="http://www.postgresql.org/docs/8.4/static/arrays.html#ARRAYS-IO" rel="nofollow" target="_blank">http://www.postgresql.org/docs/8.4/static/arrays.html#ARRAYS-IO</a><br /><br />So, here is a function to convert simple (one-dimensional) SQL arrays to PHP arrays:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">pg_parse_array</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">)<br /></span><span class="comment">/*<br /> * Converts a simple SQL array field to its PHP equivalent.  e.g:<br /> *<br /> *    {null}              --&gt; Array(null);<br /> *    {"null"}            --&gt; Array("null");<br /> *    {foo,bar}           --&gt; Array("foo", "bar"); <br /> *    {"foo,bar"}         --&gt; Array("foo,bar");<br /> *    {"Hello \"World\""} --&gt; Array('Hello "World"');<br /> *       <br /> */  <br /></span><span class="keyword">{<br />  </span><span class="comment">// NULL fields are always NULL<br />  </span><span class="keyword">if (!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">)) return </span><span class="default">$field</span><span class="keyword">;<br /><br />  </span><span class="comment">// Check for curly braces which may indicate an SQL array field<br />  </span><span class="keyword">if (</span><span class="default">$field</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] != </span><span class="string">'{' </span><span class="keyword">or </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">) != </span><span class="string">'}'</span><span class="keyword">) return </span><span class="default">$field</span><span class="keyword">;<br />  </span><span class="default">$field </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">));<br /><br />  </span><span class="default">$array </span><span class="keyword">= Array();<br />  <br />  </span><span class="comment">// Break up the string into the following:<br />  //  - quoted text that MAY have special chars escaped by a backslash<br />  //  - unquoted text that may NOT have special chars<br />  </span><span class="default">$search </span><span class="keyword">= </span><span class="string">'/(")?+((?(1)(?:\\\\.|[^"])*|[^,]+))(?(1)\\1)/'</span><span class="keyword">;<br />  </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$search</span><span class="keyword">, </span><span class="default">$field</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">, </span><span class="default">PREG_SET_ORDER</span><span class="keyword">);<br />  <br />  foreach(</span><span class="default">$matches </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">)<br />  {<br />    if (</span><span class="default">$value</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])<br />    {<br />      </span><span class="comment">// Quoted element, with backslash used to escape chars<br />      </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'#\\\\(.)#'</span><span class="keyword">, </span><span class="string">'$1'</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />    }<br />    else<br />    {<br />      </span><span class="comment">// Unquoted element<br />      </span><span class="default">$value</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />      if (</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]) == </span><span class="string">'null'</span><span class="keyword">) </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">null</span><span class="keyword">; </span><span class="comment">// NULL<br />      </span><span class="keyword">else </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">$value</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />    }  <br />  }<br />  return </span><span class="default">$array</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Some tests to demonstrate this function<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">pg_parse_array</span><span class="keyword">(</span><span class="string">'{null}'</span><span class="keyword">); </span><span class="comment">// Output is Array(null);<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">pg_parse_array</span><span class="keyword">(</span><span class="string">'{foo,bar}'</span><span class="keyword">); </span><span class="comment">// Output is Array('foo', 'bar');<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">pg_parse_array</span><span class="keyword">(</span><span class="string">'{"null"}'</span><span class="keyword">); </span><span class="comment">// Output is Array('null');<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86336">  <div class="votes">
    <div id="Vu86336">
    <a href="/manual/vote-note.php?id=86336&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86336">
    <a href="/manual/vote-note.php?id=86336&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86336" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86336" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#86336"> &para;</a><div class="date" title="2008-10-13 05:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86336">
<div class="phpcode"><code><span class="html">bytea columns are returned escaped.<br />you need to call pg-unescape-bytea() on them to get the original binary back.</span></code></div>
  </div>
 </div>
  <div class="note" id="86335">  <div class="votes">
    <div id="Vu86335">
    <a href="/manual/vote-note.php?id=86335&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86335">
    <a href="/manual/vote-note.php?id=86335&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86335" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86335" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#86335"> &para;</a><div class="date" title="2008-10-13 04:03"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86335">
<div class="phpcode"><code><span class="html">regarding the optional int parameter<br /><br />requesting a row number that is not present in the result set is an error. don't do it.<br /><br />check with pg_num_rows() beforehand, or  just use the default behavior which returns the rows in order and false after returning the last row it returns false immediately if no rows were returned.</span></code></div>
  </div>
 </div>
  <div class="note" id="78191">  <div class="votes">
    <div id="Vu78191">
    <a href="/manual/vote-note.php?id=78191&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78191">
    <a href="/manual/vote-note.php?id=78191&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78191" title="50% like this...">
    0
    </div>
  </div>
  <a href="#78191" class="name">
  <strong class="user"><em>javier dot vilarroig at gmail dot com</em></strong></a><a class="genanchor" href="#78191"> &para;</a><div class="date" title="2007-10-02 09:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78191">
<div class="phpcode"><code><span class="html">Is worth to know that when you query on multiple tables only the first row with each name is returned.<br /><br />That is, if you are joining to tables with a column called 'name' you will receive only one field called name in the array and it will correspond to the one on the first table.<br /><br />Is advisable to allways allias your columns in that stuation.</span></code></div>
  </div>
 </div>
  <div class="note" id="73566">  <div class="votes">
    <div id="Vu73566">
    <a href="/manual/vote-note.php?id=73566&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73566">
    <a href="/manual/vote-note.php?id=73566&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73566" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73566" class="name">
  <strong class="user"><em>johniskew</em></strong></a><a class="genanchor" href="#73566"> &para;</a><div class="date" title="2007-03-01 09:28"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73566">
<div class="phpcode"><code><span class="html">Here is another way to iterate a resultset and display all columns in very little code... might be faster than a foreach<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">print </span><span class="string">'&lt;table&gt;'</span><span class="keyword">;<br />while(</span><span class="default">$row</span><span class="keyword">=</span><span class="default">pg_fetch_assoc</span><span class="keyword">(</span><span class="default">$rs2</span><span class="keyword">)) print </span><span class="string">'&lt;tr&gt;&lt;td&gt;'</span><span class="keyword">.</span><span class="default">join</span><span class="keyword">(</span><span class="string">'&lt;/td&gt;&lt;td&gt;'</span><span class="keyword">,</span><span class="default">$row2</span><span class="keyword">).</span><span class="string">'&lt;/td&gt;&lt;/tr&gt;'</span><span class="keyword">;<br />print </span><span class="string">'&lt;/table&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50342">  <div class="votes">
    <div id="Vu50342">
    <a href="/manual/vote-note.php?id=50342&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50342">
    <a href="/manual/vote-note.php?id=50342&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50342" title="50% like this...">
    0
    </div>
  </div>
  <a href="#50342" class="name">
  <strong class="user"><em>petrus at bmail dot com dot au</em></strong></a><a class="genanchor" href="#50342"> &para;</a><div class="date" title="2005-02-24 07:22"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50342">
<div class="phpcode"><code><span class="html">$dbconn3 = pg_connect("host=127.0.0.1 port=5432 dbname=blah user=blah password=blah");<br />$result = pg_query($dbconn3, "SELECT * FROM Packages");<br /><br /> echo "&lt;HTML&gt;&lt;HEAD&gt;&lt;TITLE&gt;PostgreSQL Test Page&lt;/TITLE&gt;&lt;/HEAD&gt;&lt;BODY&gt;";<br /> echo "&lt;TABLE&gt;";<br /><br />$pkg = pg_fetch_assoc($result);<br />foreach ($pkg as $value) {<br />    echo "&lt;TR&gt;&lt;TD&gt;$value";<br />    echo "&lt;/TR&gt;&lt;/TD&gt;";<br /> }<br /><br />echo "&lt;/TABLE&gt;&lt;P&gt;";<br />echo "This package's full filename is: {$pkg['name']}-{$pkg['version']}{$pkg['extension']}";<br />echo "&lt;/BODY&gt;&lt;/HTML&gt;";<br /><br />For generating tables, this works, and personally I prefer foreach() to while loops because there's no danger of accidentally causing an infinite loop...foreach only works for as long as it has something to work with, and then stops.  I thought the echo down the bottom might come in handy, too...took me a bit to find that out.</span></code></div>
  </div>
 </div>
  <div class="note" id="36861">  <div class="votes">
    <div id="Vu36861">
    <a href="/manual/vote-note.php?id=36861&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36861">
    <a href="/manual/vote-note.php?id=36861&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36861" title="50% like this...">
    0
    </div>
  </div>
  <a href="#36861" class="name">
  <strong class="user"><em>spam at pasher dot org</em></strong></a><a class="genanchor" href="#36861"> &para;</a><div class="date" title="2003-10-24 06:35"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36861">
<div class="phpcode"><code><span class="html">An important thing to note (as of PHP 4.3.2):<br /><br />If you are used to using the "extended" comparision operators (=== and !==) to try to make your code easier to follow visually, this function will return NULL if the provided resource handle is invalid (as opposed to false). ie,<br /><br />$rs = @pg_query('SELECT * FROM fake_table');<br />while (false !== ($row = @pg_fetch_assoc($rs)))<br />{<br />    print_r($row);<br />}<br /><br />Obviously you should check to see if $rs === false before you start the while loop, but this example is used to illustrate a potential infinite loop problem if $rs IS false.</span></code></div>
  </div>
 </div>
  <div class="note" id="28241">  <div class="votes">
    <div id="Vu28241">
    <a href="/manual/vote-note.php?id=28241&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28241">
    <a href="/manual/vote-note.php?id=28241&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28241" title="50% like this...">
    0
    </div>
  </div>
  <a href="#28241" class="name">
  <strong class="user"><em>Brenton Strickler</em></strong></a><a class="genanchor" href="#28241"> &para;</a><div class="date" title="2003-01-06 05:53"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28241">
<div class="phpcode"><code><span class="html">At a glance, the syntax listed at the top of this page doesn't match the example.  The PGSQL_ASSOC flag isn't necessary.</span></code></div>
  </div>
 </div>
  <div class="note" id="85344">  <div class="votes">
    <div id="Vu85344">
    <a href="/manual/vote-note.php?id=85344&amp;page=function.pg-fetch-assoc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85344">
    <a href="/manual/vote-note.php?id=85344&amp;page=function.pg-fetch-assoc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85344" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#85344" class="name">
  <strong class="user"><em>strata_ranger at hotmail dot com</em></strong></a><a class="genanchor" href="#85344"> &para;</a><div class="date" title="2008-08-26 03:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85344">
<div class="phpcode"><code><span class="html">In a bit of follow-up to Luke's note about SQL booleans (this was a painful thing to learn the hard way), a relatively easy workaround is to typecase the boolean columns to integer inside the query, e.g:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Assuming 'foo' is a table column of type boolean<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">pg_query</span><span class="keyword">(</span><span class="string">"Select foo as foo1, foo::integer as foo2 from bar"</span><span class="keyword">);<br /><br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">pg_fetch_assoc</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);<br />if (</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'foo1'</span><span class="keyword">]) echo </span><span class="string">'foo1 = TRUE'</span><span class="keyword">; </span><span class="comment">// Doesn't work as expected (string 't' and string 'f' both evaluate as TRUE)<br /></span><span class="keyword">if (</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'foo2'</span><span class="keyword">]) echo </span><span class="string">'foo2 = TRUE'</span><span class="keyword">; </span><span class="comment">// Works as expected (string '0' evaluates as FALSE)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pg-fetch-assoc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-fetch-assoc.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.pg-fetch-array.php" title="pg_&#8203;fetch_&#8203;array">pg_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="current">
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
