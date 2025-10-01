<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pg_send_query - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pg-send-query.php">
 <link rel="shorturl" href="https://www.php.net/pg-send-query">
 <link rel="alternate" href="https://www.php.net/pg-send-query" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pgsql.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pg-send-prepare.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pg-send-query-params.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pg-send-query.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pg-send-query.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pg-send-query.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pg-send-query.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pg-send-query.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pg-send-query.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pg-send-query.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pg-send-query.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pg-send-query.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pg-send-query.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pg-send-query.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sends asynchronous query" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pg_send_query - Manual" />
<meta name="twitter:description" content="Sends asynchronous query" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pg_send_query - Manual" />
<meta itemprop="description" content="Sends asynchronous query" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sends asynchronous query" />

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
        <a href="function.pg-send-query-params.php">
          pg_send_query_params &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pg-send-prepare.php">
          &laquo; pg_send_prepare        </a>
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
            <option value='en/function.pg-send-query.php' selected="selected">English</option>
            <option value='de/function.pg-send-query.php'>German</option>
            <option value='es/function.pg-send-query.php'>Spanish</option>
            <option value='fr/function.pg-send-query.php'>French</option>
            <option value='it/function.pg-send-query.php'>Italian</option>
            <option value='ja/function.pg-send-query.php'>Japanese</option>
            <option value='pt_BR/function.pg-send-query.php'>Brazilian Portuguese</option>
            <option value='ru/function.pg-send-query.php'>Russian</option>
            <option value='tr/function.pg-send-query.php'>Turkish</option>
            <option value='uk/function.pg-send-query.php'>Ukrainian</option>
            <option value='zh/function.pg-send-query.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pg-send-query" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pg_send_query</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pg_send_query</span> &mdash; <span class="dc-title">
   Sends asynchronous query
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.pg-send-query-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pg_send_query</strong></span>(<span class="methodparam"><span class="type"><a href="class.pgsql-connection.php" class="type PgSql\Connection">PgSql\Connection</a></span> <code class="parameter">$connection</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>pg_send_query()</strong></span> sends a query or queries asynchronously to the
   <code class="parameter">connection</code>. Unlike
   <span class="function"><a href="function.pg-query.php" class="function">pg_query()</a></span>, it can send multiple queries at once to
   PostgreSQL and get the results one by one using
   <span class="function"><a href="function.pg-get-result.php" class="function">pg_get_result()</a></span>.
  </p>
  <p class="para">
   Script execution is not blocked while the queries are executing. Use
   <span class="function"><a href="function.pg-connection-busy.php" class="function">pg_connection_busy()</a></span> to check if the connection is
   busy (i.e. the query is executing). Queries may be cancelled using
   <span class="function"><a href="function.pg-cancel-query.php" class="function">pg_cancel_query()</a></span>.
  </p>
  <p class="para">
   Although the user can send multiple queries at once, multiple queries
   cannot be sent over a busy connection. If a query is sent while
   the connection is busy, it waits until the last query is finished and
   discards all its results.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.pg-send-query-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">connection</code></dt>
     <dd>
      <p class="para">An <span class="classname"><a href="class.pgsql-connection.php" class="classname">PgSql\Connection</a></span> instance.</p>
     </dd>
    
    
     <dt><code class="parameter">query</code></dt>
     <dd>
      <p class="para">
       The SQL statement or statements to be executed.
      </p>
      <p class="para">
       Data inside the query should be <a href="function.pg-escape-string.php" class="link">properly escaped</a>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pg-send-query-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> or <code class="literal">0</code> on failure.  Use <span class="function"><a href="function.pg-get-result.php" class="function">pg_get_result()</a></span>
   to determine the query result.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.pg-send-query-changelog">
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
  The <code class="parameter">connection</code> parameter expects an <span class="classname"><a href="class.pgsql-connection.php" class="classname">PgSql\Connection</a></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>

 
 <div class="refsect1 examples" id="refsect1-function.pg-send-query-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2114">
    <p><strong>Example #1 <span class="function"><strong>pg_send_query()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />  $dbconn </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"dbname=publisher"</span><span style="color: #007700">) or die(</span><span style="color: #DD0000">"Could not connect"</span><span style="color: #007700">);<br /><br />  if (!</span><span style="color: #0000BB">pg_connection_busy</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbconn</span><span style="color: #007700">)) {<br />      </span><span style="color: #0000BB">pg_send_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbconn</span><span style="color: #007700">, </span><span style="color: #DD0000">"select * from authors; select count(*) from authors;"</span><span style="color: #007700">);<br />  }<br />  <br />  </span><span style="color: #0000BB">$res1 </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_get_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbconn</span><span style="color: #007700">);<br />  echo </span><span style="color: #DD0000">"First call to pg_get_result(): </span><span style="color: #0000BB">$res1</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />  </span><span style="color: #0000BB">$rows1 </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_num_rows</span><span style="color: #007700">(</span><span style="color: #0000BB">$res1</span><span style="color: #007700">);<br />  echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$res1</span><span style="color: #DD0000"> has </span><span style="color: #0000BB">$rows1</span><span style="color: #DD0000"> records\n\n"</span><span style="color: #007700">;<br />  <br />  </span><span style="color: #0000BB">$res2 </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_get_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbconn</span><span style="color: #007700">);<br />  echo </span><span style="color: #DD0000">"Second call to pg_get_result(): </span><span style="color: #0000BB">$res2</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />  </span><span style="color: #0000BB">$rows2 </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_num_rows</span><span style="color: #007700">(</span><span style="color: #0000BB">$res2</span><span style="color: #007700">);<br />  echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$res2</span><span style="color: #DD0000"> has </span><span style="color: #0000BB">$rows2</span><span style="color: #DD0000"> records\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">First call to pg_get_result(): Resource id #3
Resource id #3 has 3 records

Second call to pg_get_result(): Resource id #4
Resource id #4 has 1 records</pre>
</div>
    </div>
   </div> 
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.pg-send-query-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pg-query.php" class="function" rel="rdfs-seeAlso">pg_query()</a> - Execute a query</span></li>
    <li><span class="function"><a href="function.pg-cancel-query.php" class="function" rel="rdfs-seeAlso">pg_cancel_query()</a> - Cancel an asynchronous query</span></li>
    <li><span class="function"><a href="function.pg-get-result.php" class="function" rel="rdfs-seeAlso">pg_get_result()</a> - Get asynchronous query result</span></li>
    <li><span class="function"><a href="function.pg-connection-busy.php" class="function" rel="rdfs-seeAlso">pg_connection_busy()</a> - Get connection is busy or not</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pgsql/functions/pg-send-query.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pg-send-query%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pg-send-query&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-send-query.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92593">  <div class="votes">
    <div id="Vu92593">
    <a href="/manual/vote-note.php?id=92593&amp;page=function.pg-send-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92593">
    <a href="/manual/vote-note.php?id=92593&amp;page=function.pg-send-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92593" title="no votes...">
    0
    </div>
  </div>
  <a href="#92593" class="name">
  <strong class="user"><em>rw burgholzer is name  at  deq dot virginia dot gov</em></strong></a><a class="genanchor" href="#92593"> &para;</a><div class="date" title="2009-07-30 09:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92593">
<div class="phpcode"><code><span class="html">Regarding the failure to process them all now, then retrieve the results later, I found that all queries would return successfully if I added a further condition to your while loop in the "stack_query()" method.<br /><br />By adding:<br />&amp;&amp; (pg_transaction_status($conn) === PGSQL_TRANSACTION_IDLE ) )<br /><br />Every query executed with no errors.<br /><br /><span class="default">&lt;?php<br />$conn </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="string">"dbname=dbname host=localhost user=psql "</span><span class="keyword">);<br />if (</span><span class="default">$conn </span><span class="keyword">=== </span><span class="default">FALSE</span><span class="keyword">)<br />  exit(</span><span class="string">"Can't connect to db"</span><span class="keyword">);<br /><br /></span><span class="default">$q </span><span class="keyword">= array();<br /></span><span class="comment">// send some queries<br /></span><span class="keyword">foreach (</span><span class="default">range</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">) as </span><span class="default">$i</span><span class="keyword">)<br />  </span><span class="default">stack_query</span><span class="keyword">(</span><span class="default">$q</span><span class="keyword">, </span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"SELECT 'query </span><span class="default">$i</span><span class="string">' AS str;"</span><span class="keyword">);<br /></span><span class="comment">// receive them<br /></span><span class="keyword">while (</span><span class="default">true</span><span class="keyword">)<br />  {<br />    </span><span class="default">$left </span><span class="keyword">= </span><span class="default">stack_query</span><span class="keyword">(</span><span class="default">$q</span><span class="keyword">, </span><span class="default">$conn</span><span class="keyword">);<br />    echo </span><span class="string">"</span><span class="default">$left</span><span class="string"> left... "</span><span class="keyword">;<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">pg_get_result</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br />    if (</span><span class="default">$left </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$result </span><span class="keyword">=== </span><span class="default">FALSE</span><span class="keyword">)<br />      break;<br />    </span><span class="default">$row </span><span class="keyword">= </span><span class="default">pg_fetch_assoc</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br />    </span><span class="comment">// depending on race conditions, you wont get all your original queries here.<br />    </span><span class="keyword">echo </span><span class="string">"got </span><span class="default">$row</span><span class="keyword">[</span><span class="default">str</span><span class="keyword">]</span><span class="string">\n"</span><span class="keyword">;<br />  }<br /><br />function </span><span class="default">stack_query</span><span class="keyword">(&amp;</span><span class="default">$queries</span><span class="keyword">, </span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$sql </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">)<br />{<br />  if (</span><span class="default">$sql </span><span class="keyword">!== </span><span class="default">FALSE</span><span class="keyword">)<br />    </span><span class="default">$queries</span><span class="keyword">[] = </span><span class="default">$sql</span><span class="keyword">;<br />  while (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$queries</span><span class="keyword">) &amp;&amp; !</span><span class="default">pg_connection_busy</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">)  &amp;&amp; (</span><span class="default">pg_transaction_status</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">) === </span><span class="default">PGSQL_TRANSACTION_IDLE </span><span class="keyword">) )<br />    </span><span class="default">pg_send_query</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$queries</span><span class="keyword">));<br />  return </span><span class="default">count</span><span class="keyword">(</span><span class="default">$queries</span><span class="keyword">) + (</span><span class="default">pg_connection_busy</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">) ? </span><span class="default">1 </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="35487">  <div class="votes">
    <div id="Vu35487">
    <a href="/manual/vote-note.php?id=35487&amp;page=function.pg-send-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35487">
    <a href="/manual/vote-note.php?id=35487&amp;page=function.pg-send-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35487" title="50% like this...">
    0
    </div>
  </div>
  <a href="#35487" class="name">
  <strong class="user"><em>Mikewithme at yahoo dot com</em></strong></a><a class="genanchor" href="#35487"> &para;</a><div class="date" title="2003-09-02 02:28"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35487">
<div class="phpcode"><code><span class="html">Due to a bug, OLD API does not available with PHP 4.2.0 and 4.2.1.<br /><br />PHP 4.2.2 will support OLD API again and will be kept long enough.<br /><br />New API will be available PHP 4.2.0 to later versions. <br />yohgaki at php dot net<br />19-Jun-2002 04:00 <br />Due to a bug, PHP 4.2.0 and 4.2.1 does not support pg_lo_import() old API. It's fixed in PHP 4.2.2.<br /><br />BTW, new API will be always available from PHP 4.2.0 to later versions. Older API will be kept long enough, also. <br />ceco at noxis dot net<br />15-May-2002 09:08 <br />it works for me (php-4.2.1)<br /><br />not like this<br /><br />int pg_lo_import ( string pathname [, resource connection])<br /><br />but <br />int pg_lo_import ( resource connection, string pathname )<br /><br />don't know the reason</span></code></div>
  </div>
 </div>
  <div class="note" id="101372">  <div class="votes">
    <div id="Vu101372">
    <a href="/manual/vote-note.php?id=101372&amp;page=function.pg-send-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101372">
    <a href="/manual/vote-note.php?id=101372&amp;page=function.pg-send-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101372" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#101372" class="name">
  <strong class="user"><em>moodsey211 at gmail dot com</em></strong></a><a class="genanchor" href="#101372"> &para;</a><div class="date" title="2010-12-13 01:48"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101372">
<div class="phpcode"><code><span class="html">pg_send_query would not stop your script from executing but it would stop the script from exiting. 
<br />
<br />Example:
<br />
<br /><span class="default">&lt;?php
<br />$con </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="string">'dbname=payroll'</span><span class="keyword">);
<br /></span><span class="default">pg_send_query</span><span class="keyword">(</span><span class="string">'SELECT process_payroll()'</span><span class="keyword">); </span><span class="comment">// Where process_payroll is a super long process
<br /></span><span class="default">?&gt;
<br /></span>
<br />You would still need to wait for the query to finish before the any display would be sent to the browser. And surprisingly, unlike pg_query this script would not generate the Maximum execution time error.</span></code></div>
  </div>
 </div>
  <div class="note" id="35488">  <div class="votes">
    <div id="Vu35488">
    <a href="/manual/vote-note.php?id=35488&amp;page=function.pg-send-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35488">
    <a href="/manual/vote-note.php?id=35488&amp;page=function.pg-send-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35488" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#35488" class="name">
  <strong class="user"><em>Likeyouover others at hotmail dot com</em></strong></a><a class="genanchor" href="#35488"> &para;</a><div class="date" title="2003-09-02 02:29"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35488">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// --------- OPEN CONN ---<br /><br />   </span><span class="default">$conn </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="string">"host='127.0.0.1' dbname='test' user='usertest' password='passtest'"</span><span class="keyword">);<br /><br /></span><span class="comment">// --------- OPEN FILE ---<br /><br />   </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'logo.gif'</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br />   </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">filesize</span><span class="keyword">(</span><span class="string">'logo.gif'</span><span class="keyword">));<br />   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /><br /></span><span class="comment">// --------- CREATE - INSERT OID ---<br /><br />   </span><span class="default">pg_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"begin"</span><span class="keyword">);<br /><br />   </span><span class="default">$oid </span><span class="keyword">= </span><span class="default">pg_locreate</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br /><br />   </span><span class="default">$rs </span><span class="keyword">= </span><span class="default">pg_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">,</span><span class="string">"INSERT INTO test(tipo, images) VALUES('A1', </span><span class="default">$oid</span><span class="string">);"</span><span class="keyword">);<br />   </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">pg_loopen </span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$oid</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);<br /><br />   </span><span class="default">pg_lowrite </span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$buffer</span><span class="keyword">);<br />   </span><span class="default">pg_loclose </span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br /><br />   </span><span class="default">pg_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"commit"</span><span class="keyword">);<br /><br /></span><span class="comment">// --------- OPEN - INSERT OID ---<br /><br />   </span><span class="default">$rs </span><span class="keyword">= </span><span class="default">pg_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"SELECT images FROM test WHERE tipo = 'A1';"</span><span class="keyword">);<br />   </span><span class="default">$row </span><span class="keyword">= </span><span class="default">pg_fetch_row</span><span class="keyword">(</span><span class="default">$rs</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br />   </span><span class="default">pg_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"begin"</span><span class="keyword">);<br />   </span><span class="default">$loid </span><span class="keyword">= </span><span class="default">pg_loopen</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$row</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="string">"r"</span><span class="keyword">);<br /><br />   </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: image/gif"</span><span class="keyword">);<br /><br />   </span><span class="default">pg_loreadall</span><span class="keyword">(</span><span class="default">$loid</span><span class="keyword">);<br />   </span><span class="default">pg_loclose</span><span class="keyword">(</span><span class="default">$loid</span><span class="keyword">);<br /><br />   </span><span class="default">pg_exec </span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"commit"</span><span class="keyword">);<br /><br /></span><span class="comment">// --------- UNLINK OID ---<br /><br />   </span><span class="default">pg_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"begin"</span><span class="keyword">);<br /><br />   </span><span class="default">$loid </span><span class="keyword">= </span><span class="default">$row</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />   </span><span class="default">pg_lounlink</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$loid</span><span class="keyword">);<br /><br />   </span><span class="default">pg_exec </span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"commit"</span><span class="keyword">);<br /><br /></span><span class="comment">// --------- DELETE OID ---<br /><br />   </span><span class="default">pg_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"DELETE FROM test WHERE tipo = 'A1';"</span><span class="keyword">);<br /><br /></span><span class="comment">// --------- CLOSE CONN ---<br /><br />   </span><span class="default">pg_close</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="28182">  <div class="votes">
    <div id="Vu28182">
    <a href="/manual/vote-note.php?id=28182&amp;page=function.pg-send-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28182">
    <a href="/manual/vote-note.php?id=28182&amp;page=function.pg-send-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28182" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#28182" class="name">
  <strong class="user"><em>Ron Howard</em></strong></a><a class="genanchor" href="#28182"> &para;</a><div class="date" title="2003-01-04 07:20"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28182">
<div class="phpcode"><code><span class="html">If there is an error in one of your queries, the queries following it will not get executed, and there will *not* be an error message displayed. The only way I can think of to determine if an SQL error happened is to use pg_trace.<br /><br />Example:<br /><br />pg_send_query($connection,<br />    "SELECT id FROM users;<br />    SELECT * FROM customers;<br />     [INVALID-SQL-STATEMENT];<br />    SELECT name FROM countries;");<br /><br />while ($result = pg_get_result($connection))<br />    $results[] = $result;<br /><br />The $results array will only have two items in it.</span></code></div>
  </div>
 </div>
  <div class="note" id="59202">  <div class="votes">
    <div id="Vu59202">
    <a href="/manual/vote-note.php?id=59202&amp;page=function.pg-send-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59202">
    <a href="/manual/vote-note.php?id=59202&amp;page=function.pg-send-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59202" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#59202" class="name">
  <strong class="user"><em>vincentdephily</em></strong></a><a class="genanchor" href="#59202"> &para;</a><div class="date" title="2005-11-29 05:25"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59202">
<div class="phpcode"><code><span class="html">Note that if you send a query without calling pg_get_result() for the previous one (supposing it has finished and the connection is not busy), the previous query will get discarded.<br /><br />See for yourself (tested on php4.4.0, postgres8.0.4, Linux/FreeBSD) :<br />&lt;?<br />$conn = pg_connect("dbname=template1 host=localhost user=pgsql");<br />if ($conn === FALSE)<br />  exit("Can't connect to db");<br /><br />$q = array();<br />// send some queries<br />foreach (range(0, 500) as $i)<br />  stack_query($q, $conn, "SELECT 'query $i' AS str;");<br />// receive them<br />while (true)<br />  {<br />    $left = stack_query($q, $conn);<br />    echo "$left left... ";<br />    $result = pg_get_result($conn);<br />    if ($left == 0 &amp;&amp; $result === FALSE)<br />      break;<br />    $row = pg_fetch_assoc($result);<br />    // depending on race conditions, you wont get all your original queries here.<br />    echo "got $row[str]\n";<br />  }<br /><br />function stack_query(&amp;$queries, $conn, $sql = FALSE)<br />{<br />  if ($sql !== FALSE)<br />    $queries[] = $sql;<br />  while (count($queries) &amp;&amp; !pg_connection_busy($conn))<br />    pg_send_query($conn, array_shift($queries));<br />  return count($queries) + (pg_connection_busy($conn) ? 1 : 0);<br />}<br />?&gt;<br /><br />You will have to write a higher level of abstraction if you want a "send all queries now, receive them later" behaviour.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pg-send-query&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-send-query.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
