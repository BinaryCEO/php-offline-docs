<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PostgreSQL Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.pgsql.php">
 <link rel="shorturl" href="https://www.php.net/pgsql">
 <link rel="alternate" href="https://www.php.net/pgsql" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.pgsql.php">
 <link rel="prev" href="https://www.php.net/manual/en/pgsql.examples-queries.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pg-affected-rows.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.pgsql.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.pgsql.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.pgsql.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.pgsql.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.pgsql.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.pgsql.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.pgsql.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.pgsql.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.pgsql.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.pgsql.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.pgsql.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="PostgreSQL Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PostgreSQL Functions - Manual" />
<meta name="twitter:description" content="PostgreSQL Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PostgreSQL Functions - Manual" />
<meta itemprop="description" content="PostgreSQL Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="PostgreSQL Functions" />

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
        <a href="function.pg-affected-rows.php">
          pg_affected_rows &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pgsql.examples-queries.php">
          &laquo; Basic usage        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.pgsql.php'>PostgreSQL</a></li>      </ul>
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
            <option value='en/ref.pgsql.php' selected="selected">English</option>
            <option value='de/ref.pgsql.php'>German</option>
            <option value='es/ref.pgsql.php'>Spanish</option>
            <option value='fr/ref.pgsql.php'>French</option>
            <option value='it/ref.pgsql.php'>Italian</option>
            <option value='ja/ref.pgsql.php'>Japanese</option>
            <option value='pt_BR/ref.pgsql.php'>Brazilian Portuguese</option>
            <option value='ru/ref.pgsql.php'>Russian</option>
            <option value='tr/ref.pgsql.php'>Turkish</option>
            <option value='uk/ref.pgsql.php'>Ukrainian</option>
            <option value='zh/ref.pgsql.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.pgsql" class="reference">
 <h1 class="title">PostgreSQL Functions</h1>

 <div class="partintro">
  <div class="section" id="pgsql.notes">
  <h2 class="title">Notes</h2>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Not all functions are supported by all builds. It depends on your
     libpq (The PostgreSQL C client library) version and how libpq is
     compiled. If PHP PostgreSQL extensions are missing, then it is because
     your libpq version does not support them. 
    </p>
   </p></blockquote>  
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Most PostgreSQL functions accept <code class="parameter">connection</code> as
     the optional first parameter. If it is not provided, the last opened
     connection is used. If it doesn&#039;t exist, functions return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
    </p>
   </p></blockquote>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     PostgreSQL automatically folds all identifiers (e.g. table/column names)
     to lower-case values at object creation time and at query time. 
     To force the use of mixed or upper case identifiers, you must escape
     the identifier using double quotes (&quot;&quot;).
    </p>
   </p></blockquote>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     PostgreSQL does not have special commands for fetching database schema
     information (eg. all the tables in the current database).  Instead, there
     is a standard schema named <code class="literal">information_schema</code> in
     PostgreSQL 7.4 and above containing
     system views with all the necessary information, in an easily
     queryable form.  See the <a href="http://www.postgresql.org/docs/current/interactive/" class="link external">&raquo;&nbsp;PostgreSQL Documentation</a>
     for full details.  
    </p>
   </p></blockquote>
  </div>
 </div>































































































































































































































































































































































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.pg-affected-rows.php">pg_affected_rows</a> — Returns number of affected records (tuples)</li><li><a href="function.pg-cancel-query.php">pg_cancel_query</a> — Cancel an asynchronous query</li><li><a href="function.pg-client-encoding.php">pg_client_encoding</a> — Gets the client encoding</li><li><a href="function.pg-close.php">pg_close</a> — Closes a PostgreSQL connection</li><li><a href="function.pg-connect.php">pg_connect</a> — Open a PostgreSQL connection</li><li><a href="function.pg-connect-poll.php">pg_connect_poll</a> — Poll the status of an in-progress asynchronous PostgreSQL connection
   attempt</li><li><a href="function.pg-connection-busy.php">pg_connection_busy</a> — Get connection is busy or not</li><li><a href="function.pg-connection-reset.php">pg_connection_reset</a> — Reset connection (reconnect)</li><li><a href="function.pg-connection-status.php">pg_connection_status</a> — Get connection status</li><li><a href="function.pg-consume-input.php">pg_consume_input</a> — Reads input on the connection</li><li><a href="function.pg-convert.php">pg_convert</a> — Convert associative array values into forms suitable for SQL statements</li><li><a href="function.pg-copy-from.php">pg_copy_from</a> — Insert records into a table from an array</li><li><a href="function.pg-copy-to.php">pg_copy_to</a> — Copy a table to an array</li><li><a href="function.pg-dbname.php">pg_dbname</a> — Get the database name</li><li><a href="function.pg-delete.php">pg_delete</a> — Deletes records</li><li><a href="function.pg-end-copy.php">pg_end_copy</a> — Sync with PostgreSQL backend</li><li><a href="function.pg-escape-bytea.php">pg_escape_bytea</a> — Escape a string for insertion into a bytea field</li><li><a href="function.pg-escape-identifier.php">pg_escape_identifier</a> — Escape a identifier for insertion into a text field</li><li><a href="function.pg-escape-literal.php">pg_escape_literal</a> — Escape a literal for insertion into a text field</li><li><a href="function.pg-escape-string.php">pg_escape_string</a> — Escape a string for query</li><li><a href="function.pg-execute.php">pg_execute</a> — Sends a request to execute a prepared statement with given parameters, and waits for the result</li><li><a href="function.pg-fetch-all.php">pg_fetch_all</a> — Fetches all rows from a result as an array</li><li><a href="function.pg-fetch-all-columns.php">pg_fetch_all_columns</a> — Fetches all rows in a particular result column as an array</li><li><a href="function.pg-fetch-array.php">pg_fetch_array</a> — Fetch a row as an array</li><li><a href="function.pg-fetch-assoc.php">pg_fetch_assoc</a> — Fetch a row as an associative array</li><li><a href="function.pg-fetch-object.php">pg_fetch_object</a> — Fetch a row as an object</li><li><a href="function.pg-fetch-result.php">pg_fetch_result</a> — Returns values from a result instance</li><li><a href="function.pg-fetch-row.php">pg_fetch_row</a> — Get a row as an enumerated array</li><li><a href="function.pg-field-is-null.php">pg_field_is_null</a> — Test if a field is SQL NULL</li><li><a href="function.pg-field-name.php">pg_field_name</a> — Returns the name of a field</li><li><a href="function.pg-field-num.php">pg_field_num</a> — Returns the field number of the named field</li><li><a href="function.pg-field-prtlen.php">pg_field_prtlen</a> — Returns the printed length</li><li><a href="function.pg-field-size.php">pg_field_size</a> — Returns the internal storage size of the named field</li><li><a href="function.pg-field-table.php">pg_field_table</a> — Returns the name or oid of the tables field</li><li><a href="function.pg-field-type.php">pg_field_type</a> — Returns the type name for the corresponding field number</li><li><a href="function.pg-field-type-oid.php">pg_field_type_oid</a> — Returns the type ID (OID) for the corresponding field number</li><li><a href="function.pg-flush.php">pg_flush</a> — Flush outbound query data on the connection</li><li><a href="function.pg-free-result.php">pg_free_result</a> — Free result memory</li><li><a href="function.pg-get-notify.php">pg_get_notify</a> — Gets SQL NOTIFY message</li><li><a href="function.pg-get-pid.php">pg_get_pid</a> — Gets the backend's process ID</li><li><a href="function.pg-get-result.php">pg_get_result</a> — Get asynchronous query result</li><li><a href="function.pg-host.php">pg_host</a> — Returns the host name associated with the connection</li><li><a href="function.pg-insert.php">pg_insert</a> — Insert array into table</li><li><a href="function.pg-last-error.php">pg_last_error</a> — Get the last error message string of a connection</li><li><a href="function.pg-last-notice.php">pg_last_notice</a> — Returns the last notice message from PostgreSQL server</li><li><a href="function.pg-last-oid.php">pg_last_oid</a> — Returns the last row's OID</li><li><a href="function.pg-lo-close.php">pg_lo_close</a> — Close a large object</li><li><a href="function.pg-lo-create.php">pg_lo_create</a> — Create a large object</li><li><a href="function.pg-lo-export.php">pg_lo_export</a> — Export a large object to file</li><li><a href="function.pg-lo-import.php">pg_lo_import</a> — Import a large object from file</li><li><a href="function.pg-lo-open.php">pg_lo_open</a> — Open a large object</li><li><a href="function.pg-lo-read.php">pg_lo_read</a> — Read a large object</li><li><a href="function.pg-lo-read-all.php">pg_lo_read_all</a> — Reads an entire large object and send straight to browser</li><li><a href="function.pg-lo-seek.php">pg_lo_seek</a> — Seeks position within a large object</li><li><a href="function.pg-lo-tell.php">pg_lo_tell</a> — Returns current seek position a of large object</li><li><a href="function.pg-lo-truncate.php">pg_lo_truncate</a> — Truncates a large object</li><li><a href="function.pg-lo-unlink.php">pg_lo_unlink</a> — Delete a large object</li><li><a href="function.pg-lo-write.php">pg_lo_write</a> — Write to a large object</li><li><a href="function.pg-meta-data.php">pg_meta_data</a> — Get meta data for table</li><li><a href="function.pg-num-fields.php">pg_num_fields</a> — Returns the number of fields in a result</li><li><a href="function.pg-num-rows.php">pg_num_rows</a> — Returns the number of rows in a result</li><li><a href="function.pg-options.php">pg_options</a> — Get the options associated with the connection</li><li><a href="function.pg-parameter-status.php">pg_parameter_status</a> — Looks up a current parameter setting of the server</li><li><a href="function.pg-pconnect.php">pg_pconnect</a> — Open a persistent PostgreSQL connection</li><li><a href="function.pg-ping.php">pg_ping</a> — Ping database connection</li><li><a href="function.pg-port.php">pg_port</a> — Return the port number associated with the connection</li><li><a href="function.pg-prepare.php">pg_prepare</a> — Submits a request to the server to create a prepared statement with the
   given parameters, and waits for completion</li><li><a href="function.pg-put-line.php">pg_put_line</a> — Send a NULL-terminated string to PostgreSQL backend</li><li><a href="function.pg-query.php">pg_query</a> — Execute a query</li><li><a href="function.pg-query-params.php">pg_query_params</a> — Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text</li><li><a href="function.pg-result-error.php">pg_result_error</a> — Get error message associated with result</li><li><a href="function.pg-result-error-field.php">pg_result_error_field</a> — Returns an individual field of an error report</li><li><a href="function.pg-result-memory-size.php">pg_result_memory_size</a> — Returns the amount of memory allocated for a query result</li><li><a href="function.pg-result-seek.php">pg_result_seek</a> — Set internal row offset in result instance</li><li><a href="function.pg-result-status.php">pg_result_status</a> — Get status of query result</li><li><a href="function.pg-select.php">pg_select</a> — Select records</li><li><a href="function.pg-send-execute.php">pg_send_execute</a> — Sends a request to execute a prepared statement with given parameters, without waiting for the result(s)</li><li><a href="function.pg-send-prepare.php">pg_send_prepare</a> — Sends a request to create a prepared statement with the given parameters, without waiting for completion</li><li><a href="function.pg-send-query.php">pg_send_query</a> — Sends asynchronous query</li><li><a href="function.pg-send-query-params.php">pg_send_query_params</a> — Submits a command and separate parameters to the server without waiting for the result(s)</li><li><a href="function.pg-set-chunked-rows-size.php">pg_set_chunked_rows_size</a> — Set the query results to be retrieved in chunk mode</li><li><a href="function.pg-set-client-encoding.php">pg_set_client_encoding</a> — Set the client encoding</li><li><a href="function.pg-set-error-context-visibility.php">pg_set_error_context_visibility</a> — Determines the visibility of the context's error messages returned by pg_last_error
   and pg_result_error</li><li><a href="function.pg-set-error-verbosity.php">pg_set_error_verbosity</a> — Determines the verbosity of messages returned by pg_last_error 
   and pg_result_error</li><li><a href="function.pg-socket.php">pg_socket</a> — Get a read only handle to the socket underlying a PostgreSQL connection</li><li><a href="function.pg-trace.php">pg_trace</a> — Enable tracing a PostgreSQL connection</li><li><a href="function.pg-transaction-status.php">pg_transaction_status</a> — Returns the current in-transaction status of the server</li><li><a href="function.pg-tty.php">pg_tty</a> — Return the TTY name associated with the connection</li><li><a href="function.pg-unescape-bytea.php">pg_unescape_bytea</a> — Unescape binary for bytea type</li><li><a href="function.pg-untrace.php">pg_untrace</a> — Disable tracing of a PostgreSQL connection</li><li><a href="function.pg-update.php">pg_update</a> — Update table</li><li><a href="function.pg-version.php">pg_version</a> — Returns an array with client, protocol and server version (when available)</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pgsql/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.pgsql%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.pgsql&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pgsql.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">18 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108639">  <div class="votes">
    <div id="Vu108639">
    <a href="/manual/vote-note.php?id=108639&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108639">
    <a href="/manual/vote-note.php?id=108639&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108639" title="56% like this...">
    6
    </div>
  </div>
  <a href="#108639" class="name">
  <strong class="user"><em>Tony Murray</em></strong></a><a class="genanchor" href="#108639"> &para;</a><div class="date" title="2012-05-13 09:52"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108639">
<div class="phpcode"><code><span class="html">A simple conversion for 1D PostgreSQL array data:<br /><br />// =====<br />//Example #1 (An array of IP addresses):<br /><span class="default">&lt;?php<br />  $pgsqlArr </span><span class="keyword">= </span><span class="string">'{192.168.1.1,10.1.1.1}'</span><span class="keyword">;<br /><br />  </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^{(.*)}$/'</span><span class="keyword">, </span><span class="default">$pgsqlArr</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />  </span><span class="default">$phpArr </span><span class="keyword">= </span><span class="default">str_getcsv</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br />  </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$phpArr</span><span class="keyword">);<br />}<br /></span><span class="comment">// Output:<br />// Array<br />// (<br />//    [0] =&gt; 192.168.1.1<br />//    [1] =&gt; 10.1.1.1<br />// )<br />// =====<br /><br />// =====<br />// Example #2 (An array of strings including spaces and commas):<br /></span><span class="keyword">&lt;?</span><span class="default">php<br />  $pgsqlArr </span><span class="keyword">= </span><span class="string">'{string1,string2,"string,3","string 4"}'</span><span class="keyword">;<br /><br />  </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^{(.*)}$/'</span><span class="keyword">, </span><span class="default">$pgsqlArr</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />  </span><span class="default">$phpArr </span><span class="keyword">= </span><span class="default">str_getcsv</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /><br />  </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$phpArr</span><span class="keyword">);<br />}<br /></span><span class="comment">// Output:<br />// Array<br />// (<br />//    [0] =&gt; string1<br />//    [1] =&gt; string2<br />//    [2] =&gt; string,3<br />//    [3] =&gt; string 4<br />// )<br />// =====</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42679">  <div class="votes">
    <div id="Vu42679">
    <a href="/manual/vote-note.php?id=42679&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42679">
    <a href="/manual/vote-note.php?id=42679&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42679" title="66% like this...">
    3
    </div>
  </div>
  <a href="#42679" class="name">
  <strong class="user"><em>abondi at ijk dot it</em></strong></a><a class="genanchor" href="#42679"> &para;</a><div class="date" title="2004-05-26 05:11"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42679">
<div class="phpcode"><code><span class="html">I've found another function to mimic the following mysql list tables function (<a href="http://www.php.net/manual/en/function.mysql-list-tables.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.mysql-list-tables.php</a>) that's more useful for my target:<br /><br />function pg_list_tables() {<br />      $sql = "SELECT a.relname AS Name<br />          FROM pg_class a, pg_user b<br />          WHERE ( relkind = 'r') and relname !~ '^pg_' AND relname !~ '^sql_'<br />          AND relname !~ '^xin[vx][0-9]+' AND b.usesysid = a.relowner<br />          AND NOT (EXISTS (SELECT viewname FROM pg_views WHERE viewname=a.relname));";<br />      return(pg_query($conn, $sql));<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="28047">  <div class="votes">
    <div id="Vu28047">
    <a href="/manual/vote-note.php?id=28047&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28047">
    <a href="/manual/vote-note.php?id=28047&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28047" title="55% like this...">
    1
    </div>
  </div>
  <a href="#28047" class="name">
  <strong class="user"><em>daniel at bichara dot com dot br</em></strong></a><a class="genanchor" href="#28047"> &para;</a><div class="date" title="2002-12-30 05:04"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28047">
<div class="phpcode"><code><span class="html">Running RedHat Linux and Apache with suexec enabled you must include pgsql.so on each .php file using dl("pgsql.so") and remove "extension=pgsql.so" from php.ini, otherwise Apache (httpd) will not start.</span></code></div>
  </div>
 </div>
  <div class="note" id="130447">  <div class="votes">
    <div id="Vu130447">
    <a href="/manual/vote-note.php?id=130447&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130447">
    <a href="/manual/vote-note.php?id=130447&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130447" title="no votes...">
    0
    </div>
  </div>
  <a href="#130447" class="name">
  <strong class="user"><em>coder at example dot com</em></strong></a><a class="genanchor" href="#130447"> &para;</a><div class="date" title="2025-08-15 02:18"><strong>1 month ago</strong></div>
  <div class="text" id="Hcom130447">
<div class="phpcode"><code><span class="html">The SQL-standard Information Schema is available in all databases (unless deliberately dropped), and can provide quite a bit of information about the database.<br /><br />For example, a list of all tables can be obtained by querying the Schema's "tables" view:<br /><br />    SELECT table_name FROM information_schema.tables WHERE table_schema='public'<br /><br />If you don't know what the WHERE condition is about then it means you're putting all your tables into the public schema anyway. PostgreSQL's "public" schema is equivalent to SQL Server's "dbo". If you leave the condition off you'll get all the pg_* tables and views from the system catalogue and all of the information schema views as well; you probably don't want those.</span></code></div>
  </div>
 </div>
  <div class="note" id="57709">  <div class="votes">
    <div id="Vu57709">
    <a href="/manual/vote-note.php?id=57709&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57709">
    <a href="/manual/vote-note.php?id=57709&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57709" title="50% like this...">
    0
    </div>
  </div>
  <a href="#57709" class="name">
  <strong class="user"><em>1413 at blargh dot com</em></strong></a><a class="genanchor" href="#57709"> &para;</a><div class="date" title="2005-10-11 05:09"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57709">
<div class="phpcode"><code><span class="html">Here is some quick and dirty code to convert Postgres-returned arrays into PHP arrays.  There's probably a billion bugs, but since I'm only dealing with variable-depth-and-length arrays of integers, it works for my needs.<br /><br />Most notably, any data that might have commas in it won't work right...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">PGArrayToPHPArray</span><span class="keyword">(</span><span class="default">$pgArray</span><span class="keyword">)<br />{<br />  </span><span class="default">$ret </span><span class="keyword">= array();<br />  </span><span class="default">$stack </span><span class="keyword">= array(&amp;</span><span class="default">$ret</span><span class="keyword">);<br />  </span><span class="default">$pgArray </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$pgArray</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br />  </span><span class="default">$pgElements </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="default">$pgArray</span><span class="keyword">);<br />  <br />  </span><span class="default">ArrayDump</span><span class="keyword">(</span><span class="default">$pgElements</span><span class="keyword">);<br /><br />  foreach(</span><span class="default">$pgElements </span><span class="keyword">as </span><span class="default">$elem</span><span class="keyword">)<br />    {<br />      if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$elem</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">) == </span><span class="string">"}"</span><span class="keyword">)<br />        {<br />          </span><span class="default">$elem </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$elem</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">);<br />          </span><span class="default">$newSub </span><span class="keyword">= array();<br />          while(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$elem</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) != </span><span class="string">"{"</span><span class="keyword">)<br />            {<br />              </span><span class="default">$newSub</span><span class="keyword">[] = </span><span class="default">$elem</span><span class="keyword">;<br />              </span><span class="default">$elem </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$ret</span><span class="keyword">);<br />            }<br />          </span><span class="default">$newSub</span><span class="keyword">[] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$elem</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />          </span><span class="default">$ret</span><span class="keyword">[] = </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$newSub</span><span class="keyword">);<br />        }<br />      else<br />        </span><span class="default">$ret</span><span class="keyword">[] = </span><span class="default">$elem</span><span class="keyword">;<br />    }<br />  return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="15521">  <div class="votes">
    <div id="Vu15521">
    <a href="/manual/vote-note.php?id=15521&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd15521">
    <a href="/manual/vote-note.php?id=15521&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V15521" title="50% like this...">
    0
    </div>
  </div>
  <a href="#15521" class="name">
  <strong class="user"><em>saberit at home dot com</em></strong></a><a class="genanchor" href="#15521"> &para;</a><div class="date" title="2001-09-15 02:11"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom15521">
<div class="phpcode"><code><span class="html">I tried compiling PHP from source with PostgreSQL support (./configure --with-pgsql=/usr/local/pgsql) and ran into a bunch of problems when trying to 'make'. The problem was that some of the PostgreSQL headers were not installed by default when I installed PostgreSQL from source. When installing PostgreSQL make sure you 'make install-all-headers' after you 'make install'.</span></code></div>
  </div>
 </div>
  <div class="note" id="53036">  <div class="votes">
    <div id="Vu53036">
    <a href="/manual/vote-note.php?id=53036&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53036">
    <a href="/manual/vote-note.php?id=53036&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53036" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#53036" class="name">
  <strong class="user"><em>WillowCatkin at hotmail dot com</em></strong></a><a class="genanchor" href="#53036"> &para;</a><div class="date" title="2005-05-21 06:43"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53036">
<div class="phpcode"><code><span class="html">There is an example:<br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br /> * Define PostgreSQL database server connect parameters.<br /> */<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'PGHOST'</span><span class="keyword">,</span><span class="string">'10.0.0.218'</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'PGPORT'</span><span class="keyword">,</span><span class="default">5432</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'PGDATABASE'</span><span class="keyword">,</span><span class="string">'example'</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'PGUSER'</span><span class="keyword">, </span><span class="string">'root'</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'PGPASSWORD'</span><span class="keyword">, </span><span class="string">'nopass'</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'PGCLIENTENCODING'</span><span class="keyword">,</span><span class="string">'UNICODE'</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'ERROR_ON_CONNECT_FAILED'</span><span class="keyword">,</span><span class="string">'Sorry, can not connect the database server now!'</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br /> * Merge connect string and connect db server with default parameters.<br /> */<br /></span><span class="default">pg_pconnect</span><span class="keyword">(</span><span class="string">'host=' </span><span class="keyword">. </span><span class="default">PGHOST </span><span class="keyword">. </span><span class="string">' port=' </span><span class="keyword">. </span><span class="default">PGPORT </span><span class="keyword">. </span><span class="string">' dbname=' </span><span class="keyword">. </span><span class="default">PGDATABASE </span><span class="keyword">. </span><span class="string">' user=' </span><span class="keyword">. </span><span class="default">PGUSER </span><span class="keyword">. </span><span class="string">' password=' </span><span class="keyword">. </span><span class="default">PGPASSWORD</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br /> * generate sql statements to call db-server-side stored procedure(or function) <br /> * @parameter    string    $proc        stored procedure name.<br /> * @parameter    array    $paras        parameters, 2 dimensions array.<br /> * @return        string    $sql = 'select "proc"(para1,para2,para3);'<br /> * @example    pg_prepare('userExists',<br /> *                            array(<br /> *                                array('userName','chin','string'),<br /> *                                array('userId','7777','numeric')<br /> *                            )<br /> * )<br /> */<br /></span><span class="keyword">function </span><span class="default">pg_prepare</span><span class="keyword">(</span><span class="default">$proc</span><span class="keyword">, </span><span class="default">$paras</span><span class="keyword">)<br />{<br />    </span><span class="default">$sql </span><span class="keyword">= </span><span class="string">'select "' </span><span class="keyword">. </span><span class="default">$proc </span><span class="keyword">. </span><span class="string">'"('</span><span class="keyword">;<br />    </span><span class="default">$sql </span><span class="keyword">.= </span><span class="default">$paras</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">] == </span><span class="string">'numeric' </span><span class="keyword">? </span><span class="default">$paras</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] : </span><span class="string">"'" </span><span class="keyword">. </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"'"</span><span class="keyword">,</span><span class="string">"''"</span><span class="keyword">,</span><span class="default">$paras</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">]) . </span><span class="string">"'"</span><span class="keyword">;<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$paras</span><span class="keyword">);<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$len</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">++)<br />    {<br />        </span><span class="default">$sql </span><span class="keyword">.= </span><span class="string">','</span><span class="keyword">;<br />        </span><span class="default">$sql </span><span class="keyword">.= </span><span class="default">$paras</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">] == </span><span class="string">'numeric' </span><span class="keyword">? </span><span class="default">$paras</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] : </span><span class="string">"'" </span><span class="keyword">. </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"'"</span><span class="keyword">,</span><span class="string">"''"</span><span class="keyword">,</span><span class="default">$paras</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">]) . </span><span class="string">"'"</span><span class="keyword">;<br />    }<br />    </span><span class="default">$sql </span><span class="keyword">.= </span><span class="string">');'</span><span class="keyword">;<br />    return </span><span class="default">$sql</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="43751">  <div class="votes">
    <div id="Vu43751">
    <a href="/manual/vote-note.php?id=43751&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43751">
    <a href="/manual/vote-note.php?id=43751&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43751" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#43751" class="name">
  <strong class="user"><em>74012 dot 2773 at compuserve dot com</em></strong></a><a class="genanchor" href="#43751"> &para;</a><div class="date" title="2004-07-01 09:35"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43751">
<div class="phpcode"><code><span class="html">for just a list of tables, this works with postgresql-7.2.1:<br /><br />function pg_list_tables($db) {<br />    $sql = "select relname from pg_stat_user_tables order by relname;";<br />    return pg_query($db, $sql);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="18749">  <div class="votes">
    <div id="Vu18749">
    <a href="/manual/vote-note.php?id=18749&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18749">
    <a href="/manual/vote-note.php?id=18749&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18749" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#18749" class="name">
  <strong class="user"><em>mystran at wasteland dot pp dot htv dot fi</em></strong></a><a class="genanchor" href="#18749"> &para;</a><div class="date" title="2002-02-03 07:46"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18749">
<div class="phpcode"><code><span class="html">Nice to know fact that I didn't find documented here.
<br />
<br />PHP will return values of PostgreSQL boolean datatype as single character strings "t" and "f", not PHP true and false.
<br />
<br />[Editor's Note]
<br />'t' or 'f' is valid boolean expression for PostgreSQL.
<br />
<br />All values from PostgreSQL are strings, since PostgreSQL integer, float may be much larger than PHP's native int, double can handle. PostgreSQL array is not supported.</span></code></div>
  </div>
 </div>
  <div class="note" id="27265">  <div class="votes">
    <div id="Vu27265">
    <a href="/manual/vote-note.php?id=27265&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27265">
    <a href="/manual/vote-note.php?id=27265&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27265" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#27265" class="name">
  <strong class="user"><em>anonymous at unknown dot com</em></strong></a><a class="genanchor" href="#27265"> &para;</a><div class="date" title="2002-11-29 09:50"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27265">
<div class="phpcode"><code><span class="html">I just wanted to add to my previous post I've got the system up and running.<br />Environment: Windows XP, Apache 1.3.23, Php 4.3 RC2, PostGreSQL beta4 native windows build<br /><br />Installation was fairly easy: <br />1. read the readme.txt<br />2. edit the setenv.bat as described in readme<br />3. run 'initdb'<br />    all execs are in /bin<br />    help is accessed like &lt;command&gt; --help<br />4. Start the psql deamon - you may want to create a batch file like<br />    'D:\postgres_beta4\bin\postmaster -h localhost -D D:/postgres_beta4/data'<br /><br />    --deamon should be up and running now--<br /><br />You can login into a shell from a console like<br />    'psql -h localhost -d &lt;username&gt;'<br /><br />You must load the postgresql extension by editing the php.ini and restarting apache in order to access psql with php.<br /><br />And one final not: when running<br />    $dbconn = pg_connect ("host=localhost port=5432 dbname=$dbname user=$user");<br />remember that $user and or $dbname is CASESENSITIVE.<br /><br />Oh yeah, I created the data dir manually - don't know whether that was necessary<br /><br />Grtz Vargo</span></code></div>
  </div>
 </div>
  <div class="note" id="70596">  <div class="votes">
    <div id="Vu70596">
    <a href="/manual/vote-note.php?id=70596&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70596">
    <a href="/manual/vote-note.php?id=70596&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70596" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#70596" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#70596"> &para;</a><div class="date" title="2006-10-20 10:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70596">
<div class="phpcode"><code><span class="html">Lots of advice on stored procedures didn't work for me.  This did:<br /><br /><span class="default">&lt;?php<br />$response </span><span class="keyword">= </span><span class="default">pg_query</span><span class="keyword">( </span><span class="default">$connection</span><span class="keyword">, </span><span class="string">"BEGIN; DECLARE s CURSOR FOR SELECT get_consumer('harry'); FETCH ALL IN s; END;" </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />..where harry looks like this:<br /><br />CREATE OR REPLACE FUNCTION get_consumer( varchar )<br />RETURNS refcursor<br />AS '<br />DECLARE<br />  _name          ALIAS FOR $1;<br />  r              refcursor;<br />BEGIN<br />  OPEN r FOR SELECT name FROM consumer<br />  WHERE<br />    consumer.name = _name<br />  ;<br />  RETURN r;<br />END<br />' LANGUAGE 'plpgsql';</span></code></div>
  </div>
 </div>
  <div class="note" id="53559">  <div class="votes">
    <div id="Vu53559">
    <a href="/manual/vote-note.php?id=53559&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53559">
    <a href="/manual/vote-note.php?id=53559&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53559" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#53559" class="name">
  <strong class="user"><em>anis_wn at gawab dot com</em></strong></a><a class="genanchor" href="#53559"> &para;</a><div class="date" title="2005-06-05 09:45"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53559">
<div class="phpcode"><code><span class="html">Setting up PostgreSQL for higher security PHP connection.<br /><br />Case:<br />We want to connect to PostgreSQL database using username and password supplied by webuser at login time.<br /><br />Fact (Linux):<br />Apache (perhaps other servers, too) running the server as (default to) apache user account. So if you connect to PostgreSQL using default user, apache will be assingned for it. If you hard code the user and password in your PHP script, you'll loose security restriction from PostgreSQL.<br /><br />Solution:<br />(You are assumed to have enough privilege to do these things, though)<br />1. Edit pg_hba.conf to have the line like the one below<br />    host    db_Name    [web_server_ip_address] [ip_address_mask] md5<br />2. Add to you script the login page that submits username and password.<br />3. Use those information to login to PostgreSQL like these...<br />&lt;?<br />    $conn = "host=$DBHost port=$DBPort dbname=$DBName ".<br />            "user='{$_POST['dbUsername']}' password='{$_POST['dbPassword']}'";<br />    $db = pg_connect ($conn);<br />[your other codes go here...]<br />?&gt;<br />4. You must add users in PostgreSQL properly.<br />5. For your convenience, you can store the username and password to $_SESSION variable.<br /><br />Good luck.<br />Anis WN</span></code></div>
  </div>
 </div>
  <div class="note" id="46209">  <div class="votes">
    <div id="Vu46209">
    <a href="/manual/vote-note.php?id=46209&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46209">
    <a href="/manual/vote-note.php?id=46209&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46209" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#46209" class="name">
  <strong class="user"><em>adaml at mimuw edu pl</em></strong></a><a class="genanchor" href="#46209"> &para;</a><div class="date" title="2004-10-02 06:07"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46209">
<div class="phpcode"><code><span class="html">Yes, PHP does support stored procedures<br />You have to add "select" before the name of the <br />procedure, just like that:<br /><br />$result = pg_querry($conn, "SELECT procedure_x($aa)");<br /><br />if a procedure returns a cursor you do something like that:<br /><br />$result = pg_query($conn, "SELECT procedure_x('rcursor'); FETCH ALL IN rcursor");</span></code></div>
  </div>
 </div>
  <div class="note" id="13904">  <div class="votes">
    <div id="Vu13904">
    <a href="/manual/vote-note.php?id=13904&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13904">
    <a href="/manual/vote-note.php?id=13904&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13904" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#13904" class="name">
  <strong class="user"><em>hubert at hubertmuller dot com</em></strong></a><a class="genanchor" href="#13904"> &para;</a><div class="date" title="2001-07-09 04:36"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13904">
<div class="phpcode"><code><span class="html">The best way to find the separated list of tables, sequences, keys etc is:
<br />
<br />SELECT relname FROM pg_class WHERE relkind='&lt;value&gt;' AND relname !~ '^pg_';
<br />
<br />&lt;value&gt; takes:
<br />i for keys,
<br />r for relations,
<br />S for sequences
<br />
<br />Note that all tables names that begins with 'pg_' are PostgreSQL internal tables (this explain why I use AND relname !~ '^pg_' condition).</span></code></div>
  </div>
 </div>
  <div class="note" id="12467">  <div class="votes">
    <div id="Vu12467">
    <a href="/manual/vote-note.php?id=12467&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12467">
    <a href="/manual/vote-note.php?id=12467&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12467" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#12467" class="name">
  <strong class="user"><em>!spamcraig at ahdore dot com</em></strong></a><a class="genanchor" href="#12467"> &para;</a><div class="date" title="2001-04-15 01:11"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12467">
<div class="phpcode"><code><span class="html">If you want to extract data from select statements, you need to store the result index, and then apply pg_result to that value. Basically, do this
<br />
<br />$resultIdx = pg_query ($database, "select * from tablename");
<br />$mySelect = pg_fetch_result($resultIdx, 0, 0);  // gets column 0 of tuple 0
<br />echo("My select: [".$mySelect."]");
<br />
<br />I'm new to php and had to do some fiddling around to work this out. It's reasonably elementary, but not demonstrated by the examples on these pages. Hopefully it will come in useful to someone else.</span></code></div>
  </div>
 </div>
  <div class="note" id="4113">  <div class="votes">
    <div id="Vu4113">
    <a href="/manual/vote-note.php?id=4113&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd4113">
    <a href="/manual/vote-note.php?id=4113&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V4113" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#4113" class="name">
  <strong class="user"><em>bleach at chek dot com</em></strong></a><a class="genanchor" href="#4113"> &para;</a><div class="date" title="2000-03-02 12:36"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom4113">
<div class="phpcode"><code><span class="html">If you want to see all the objects in a database, you can find that information in the pg_class table. &lt;BR&gt;
<br />SELECT * FROM pg_class;&lt;BR&gt;
<br />Now this is going to be kind of long and complex, to see how psql command handles the \d and other things. use the syntax.  psql -E &lt;Database&gt;, ie psql -E mydatabase &lt;BR&gt;
<br />What this will do is show the SQL command used for everything. So when you type a \d or something, it shows the SQL query used for the result.</span></code></div>
  </div>
 </div>
  <div class="note" id="13660">  <div class="votes">
    <div id="Vu13660">
    <a href="/manual/vote-note.php?id=13660&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13660">
    <a href="/manual/vote-note.php?id=13660&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13660" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#13660" class="name">
  <strong class="user"><em>passion at monkey dot org</em></strong></a><a class="genanchor" href="#13660"> &para;</a><div class="date" title="2001-06-27 06:53"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13660">
<div class="phpcode"><code><span class="html">I've tried to mimic the following mysql database connection functions for postgres. 
<br /><a href="http://www.php.net/manual/en/function.mysql-list-dbs.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.mysql-list-dbs.php</a>
<br /><a href="http://www.php.net/manual/en/function.mysql-list-tables.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.mysql-list-tables.php</a>
<br />
<br />These are assuming that you're passing in $link as the result from pg_connect:
<br />
<br />function pg_list_dbs($link)
<br />{  
<br />    $sql = 'SELECT datname FROM pg_database';
<br />    return (pg_query($link, $sql));
<br />}  
<br />
<br />function pg_list_tables($link)
<br />{  
<br />    $sql = "SELECT relname FROM pg_class WHERE relname !~ '^pg_'";
<br />    return (pg_query($link, $sql));
<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="58660">  <div class="votes">
    <div id="Vu58660">
    <a href="/manual/vote-note.php?id=58660&amp;page=ref.pgsql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58660">
    <a href="/manual/vote-note.php?id=58660&amp;page=ref.pgsql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58660" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#58660" class="name">
  <strong class="user"><em>Chris KL</em></strong></a><a class="genanchor" href="#58660"> &para;</a><div class="date" title="2005-11-10 05:17"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58660">
<div class="phpcode"><code><span class="html">Here is a better array parser for PHP.  It will work with 1-d arrays only.  Unlike the example below it will work in all cases.<br /><br />    /**<br />     * Change a db array into a PHP array<br />     * @param $arr String representing the DB array<br />     * @return A PHP array<br />     */<br />    function phpArray($dbarr) {<br />        // Take off the first and last characters (the braces)<br />        $arr = substr($dbarr, 1, strlen($dbarr) - 2);<br /><br />        // Pick out array entries by carefully parsing.  This is necessary in order<br />        // to cope with double quotes and commas, etc.<br />        $elements = array();<br />        $i = $j = 0;        <br />        $in_quotes = false;<br />        while ($i &lt; strlen($arr)) {<br />            // If current char is a double quote and it's not escaped, then<br />            // enter quoted bit<br />            $char = substr($arr, $i, 1);<br />            if ($char == '"' &amp;&amp; ($i == 0 || substr($arr, $i - 1, 1) != '\\')) <br />                $in_quotes = !$in_quotes;<br />            elseif ($char == ',' &amp;&amp; !$in_quotes) {<br />                // Add text so far to the array<br />                $elements[] = substr($arr, $j, $i - $j);<br />                $j = $i + 1;<br />            }<br />            $i++;<br />        }<br />        // Add final text to the array<br />        $elements[] = substr($arr, $j);<br /><br />        // Do one further loop over the elements array to remote double quoting<br />        // and escaping of double quotes and backslashes<br />        for ($i = 0; $i &lt; sizeof($elements); $i++) {<br />            $v = $elements[$i];<br />            if (strpos($v, '"') === 0) {<br />                $v = substr($v, 1, strlen($v) - 2);<br />                $v = str_replace('\\"', '"', $v);<br />                $v = str_replace('\\\\', '\\', $v);<br />                $elements[$i] = $v;<br />            }<br />        }<br /><br />        return $elements;<br />    }</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.pgsql&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pgsql.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.pgsql.php">PostgreSQL</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.pgsql.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="pgsql.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="pgsql.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="pgsql.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="ref.pgsql.php" title="PostgreSQL Functions">PostgreSQL Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.pgsql-connection.php" title="PgSql\Connection">PgSql\Connection</a>
                        </li>
                                                <li class="">
                            <a href="class.pgsql-result.php" title="PgSql\Result">PgSql\Result</a>
                        </li>
                                                <li class="">
                            <a href="class.pgsql-lob.php" title="PgSql\Lob">PgSql\Lob</a>
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
