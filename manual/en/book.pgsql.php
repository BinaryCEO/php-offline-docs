<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PostgreSQL - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.pgsql.php">
 <link rel="shorturl" href="https://www.php.net/pgsql">
 <link rel="alternate" href="https://www.php.net/pgsql" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.database.vendors.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ociwritetemporarylob.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.pgsql.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.pgsql.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.pgsql.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.pgsql.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.pgsql.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.pgsql.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.pgsql.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.pgsql.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.pgsql.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.pgsql.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.pgsql.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.pgsql.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="PostgreSQL" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PostgreSQL - Manual" />
<meta name="twitter:description" content="PostgreSQL" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PostgreSQL - Manual" />
<meta itemprop="description" content="PostgreSQL" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="PostgreSQL" />

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
        <a href="intro.pgsql.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ociwritetemporarylob.php">
          &laquo; ociwritetemporarylob        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      </ul>
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
            <option value='en/book.pgsql.php' selected="selected">English</option>
            <option value='de/book.pgsql.php'>German</option>
            <option value='es/book.pgsql.php'>Spanish</option>
            <option value='fr/book.pgsql.php'>French</option>
            <option value='it/book.pgsql.php'>Italian</option>
            <option value='ja/book.pgsql.php'>Japanese</option>
            <option value='pt_BR/book.pgsql.php'>Brazilian Portuguese</option>
            <option value='ru/book.pgsql.php'>Russian</option>
            <option value='tr/book.pgsql.php'>Turkish</option>
            <option value='uk/book.pgsql.php'>Ukrainian</option>
            <option value='zh/book.pgsql.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.pgsql" class="book">
 
 <h1 class="title">PostgreSQL</h1>
 
 
 
 
 
 







 




 







 






 



 



 




<ul class="chunklist chunklist_book"><li><a href="intro.pgsql.php">Introduction</a></li><li><a href="pgsql.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="pgsql.requirements.php">Requirements</a></li><li><a href="pgsql.installation.php">Installation</a></li><li><a href="pgsql.configuration.php">Runtime Configuration</a></li><li><a href="pgsql.resources.php">Resource Types</a></li></ul></li><li><a href="pgsql.constants.php">Predefined Constants</a></li><li><a href="pgsql.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="pgsql.examples-basic.php">Basic usage</a></li><li><a href="pgsql.examples-queries.php">Basic usage</a></li></ul></li><li><a href="ref.pgsql.php">PostgreSQL Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.pg-affected-rows.php">pg_affected_rows</a> — Returns number of affected records (tuples)</li><li><a href="function.pg-cancel-query.php">pg_cancel_query</a> — Cancel an asynchronous query</li><li><a href="function.pg-client-encoding.php">pg_client_encoding</a> — Gets the client encoding</li><li><a href="function.pg-close.php">pg_close</a> — Closes a PostgreSQL connection</li><li><a href="function.pg-connect.php">pg_connect</a> — Open a PostgreSQL connection</li><li><a href="function.pg-connect-poll.php">pg_connect_poll</a> — Poll the status of an in-progress asynchronous PostgreSQL connection
   attempt</li><li><a href="function.pg-connection-busy.php">pg_connection_busy</a> — Get connection is busy or not</li><li><a href="function.pg-connection-reset.php">pg_connection_reset</a> — Reset connection (reconnect)</li><li><a href="function.pg-connection-status.php">pg_connection_status</a> — Get connection status</li><li><a href="function.pg-consume-input.php">pg_consume_input</a> — Reads input on the connection</li><li><a href="function.pg-convert.php">pg_convert</a> — Convert associative array values into forms suitable for SQL statements</li><li><a href="function.pg-copy-from.php">pg_copy_from</a> — Insert records into a table from an array</li><li><a href="function.pg-copy-to.php">pg_copy_to</a> — Copy a table to an array</li><li><a href="function.pg-dbname.php">pg_dbname</a> — Get the database name</li><li><a href="function.pg-delete.php">pg_delete</a> — Deletes records</li><li><a href="function.pg-end-copy.php">pg_end_copy</a> — Sync with PostgreSQL backend</li><li><a href="function.pg-escape-bytea.php">pg_escape_bytea</a> — Escape a string for insertion into a bytea field</li><li><a href="function.pg-escape-identifier.php">pg_escape_identifier</a> — Escape a identifier for insertion into a text field</li><li><a href="function.pg-escape-literal.php">pg_escape_literal</a> — Escape a literal for insertion into a text field</li><li><a href="function.pg-escape-string.php">pg_escape_string</a> — Escape a string for query</li><li><a href="function.pg-execute.php">pg_execute</a> — Sends a request to execute a prepared statement with given parameters, and waits for the result</li><li><a href="function.pg-fetch-all.php">pg_fetch_all</a> — Fetches all rows from a result as an array</li><li><a href="function.pg-fetch-all-columns.php">pg_fetch_all_columns</a> — Fetches all rows in a particular result column as an array</li><li><a href="function.pg-fetch-array.php">pg_fetch_array</a> — Fetch a row as an array</li><li><a href="function.pg-fetch-assoc.php">pg_fetch_assoc</a> — Fetch a row as an associative array</li><li><a href="function.pg-fetch-object.php">pg_fetch_object</a> — Fetch a row as an object</li><li><a href="function.pg-fetch-result.php">pg_fetch_result</a> — Returns values from a result instance</li><li><a href="function.pg-fetch-row.php">pg_fetch_row</a> — Get a row as an enumerated array</li><li><a href="function.pg-field-is-null.php">pg_field_is_null</a> — Test if a field is SQL NULL</li><li><a href="function.pg-field-name.php">pg_field_name</a> — Returns the name of a field</li><li><a href="function.pg-field-num.php">pg_field_num</a> — Returns the field number of the named field</li><li><a href="function.pg-field-prtlen.php">pg_field_prtlen</a> — Returns the printed length</li><li><a href="function.pg-field-size.php">pg_field_size</a> — Returns the internal storage size of the named field</li><li><a href="function.pg-field-table.php">pg_field_table</a> — Returns the name or oid of the tables field</li><li><a href="function.pg-field-type.php">pg_field_type</a> — Returns the type name for the corresponding field number</li><li><a href="function.pg-field-type-oid.php">pg_field_type_oid</a> — Returns the type ID (OID) for the corresponding field number</li><li><a href="function.pg-flush.php">pg_flush</a> — Flush outbound query data on the connection</li><li><a href="function.pg-free-result.php">pg_free_result</a> — Free result memory</li><li><a href="function.pg-get-notify.php">pg_get_notify</a> — Gets SQL NOTIFY message</li><li><a href="function.pg-get-pid.php">pg_get_pid</a> — Gets the backend's process ID</li><li><a href="function.pg-get-result.php">pg_get_result</a> — Get asynchronous query result</li><li><a href="function.pg-host.php">pg_host</a> — Returns the host name associated with the connection</li><li><a href="function.pg-insert.php">pg_insert</a> — Insert array into table</li><li><a href="function.pg-last-error.php">pg_last_error</a> — Get the last error message string of a connection</li><li><a href="function.pg-last-notice.php">pg_last_notice</a> — Returns the last notice message from PostgreSQL server</li><li><a href="function.pg-last-oid.php">pg_last_oid</a> — Returns the last row's OID</li><li><a href="function.pg-lo-close.php">pg_lo_close</a> — Close a large object</li><li><a href="function.pg-lo-create.php">pg_lo_create</a> — Create a large object</li><li><a href="function.pg-lo-export.php">pg_lo_export</a> — Export a large object to file</li><li><a href="function.pg-lo-import.php">pg_lo_import</a> — Import a large object from file</li><li><a href="function.pg-lo-open.php">pg_lo_open</a> — Open a large object</li><li><a href="function.pg-lo-read.php">pg_lo_read</a> — Read a large object</li><li><a href="function.pg-lo-read-all.php">pg_lo_read_all</a> — Reads an entire large object and send straight to browser</li><li><a href="function.pg-lo-seek.php">pg_lo_seek</a> — Seeks position within a large object</li><li><a href="function.pg-lo-tell.php">pg_lo_tell</a> — Returns current seek position a of large object</li><li><a href="function.pg-lo-truncate.php">pg_lo_truncate</a> — Truncates a large object</li><li><a href="function.pg-lo-unlink.php">pg_lo_unlink</a> — Delete a large object</li><li><a href="function.pg-lo-write.php">pg_lo_write</a> — Write to a large object</li><li><a href="function.pg-meta-data.php">pg_meta_data</a> — Get meta data for table</li><li><a href="function.pg-num-fields.php">pg_num_fields</a> — Returns the number of fields in a result</li><li><a href="function.pg-num-rows.php">pg_num_rows</a> — Returns the number of rows in a result</li><li><a href="function.pg-options.php">pg_options</a> — Get the options associated with the connection</li><li><a href="function.pg-parameter-status.php">pg_parameter_status</a> — Looks up a current parameter setting of the server</li><li><a href="function.pg-pconnect.php">pg_pconnect</a> — Open a persistent PostgreSQL connection</li><li><a href="function.pg-ping.php">pg_ping</a> — Ping database connection</li><li><a href="function.pg-port.php">pg_port</a> — Return the port number associated with the connection</li><li><a href="function.pg-prepare.php">pg_prepare</a> — Submits a request to the server to create a prepared statement with the
   given parameters, and waits for completion</li><li><a href="function.pg-put-line.php">pg_put_line</a> — Send a NULL-terminated string to PostgreSQL backend</li><li><a href="function.pg-query.php">pg_query</a> — Execute a query</li><li><a href="function.pg-query-params.php">pg_query_params</a> — Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text</li><li><a href="function.pg-result-error.php">pg_result_error</a> — Get error message associated with result</li><li><a href="function.pg-result-error-field.php">pg_result_error_field</a> — Returns an individual field of an error report</li><li><a href="function.pg-result-memory-size.php">pg_result_memory_size</a> — Returns the amount of memory allocated for a query result</li><li><a href="function.pg-result-seek.php">pg_result_seek</a> — Set internal row offset in result instance</li><li><a href="function.pg-result-status.php">pg_result_status</a> — Get status of query result</li><li><a href="function.pg-select.php">pg_select</a> — Select records</li><li><a href="function.pg-send-execute.php">pg_send_execute</a> — Sends a request to execute a prepared statement with given parameters, without waiting for the result(s)</li><li><a href="function.pg-send-prepare.php">pg_send_prepare</a> — Sends a request to create a prepared statement with the given parameters, without waiting for completion</li><li><a href="function.pg-send-query.php">pg_send_query</a> — Sends asynchronous query</li><li><a href="function.pg-send-query-params.php">pg_send_query_params</a> — Submits a command and separate parameters to the server without waiting for the result(s)</li><li><a href="function.pg-set-chunked-rows-size.php">pg_set_chunked_rows_size</a> — Set the query results to be retrieved in chunk mode</li><li><a href="function.pg-set-client-encoding.php">pg_set_client_encoding</a> — Set the client encoding</li><li><a href="function.pg-set-error-context-visibility.php">pg_set_error_context_visibility</a> — Determines the visibility of the context's error messages returned by pg_last_error
   and pg_result_error</li><li><a href="function.pg-set-error-verbosity.php">pg_set_error_verbosity</a> — Determines the verbosity of messages returned by pg_last_error 
   and pg_result_error</li><li><a href="function.pg-socket.php">pg_socket</a> — Get a read only handle to the socket underlying a PostgreSQL connection</li><li><a href="function.pg-trace.php">pg_trace</a> — Enable tracing a PostgreSQL connection</li><li><a href="function.pg-transaction-status.php">pg_transaction_status</a> — Returns the current in-transaction status of the server</li><li><a href="function.pg-tty.php">pg_tty</a> — Return the TTY name associated with the connection</li><li><a href="function.pg-unescape-bytea.php">pg_unescape_bytea</a> — Unescape binary for bytea type</li><li><a href="function.pg-untrace.php">pg_untrace</a> — Disable tracing of a PostgreSQL connection</li><li><a href="function.pg-update.php">pg_update</a> — Update table</li><li><a href="function.pg-version.php">pg_version</a> — Returns an array with client, protocol and server version (when available)</li></ul></li><li><a href="class.pgsql-connection.php">PgSql\Connection</a> — The PgSql\Connection class</li><li><a href="class.pgsql-result.php">PgSql\Result</a> — The PgSql\Result class</li><li><a href="class.pgsql-lob.php">PgSql\Lob</a> — The PgSql\Lob class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pgsql/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.pgsql%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.pgsql&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.pgsql.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.database.vendors.php">Vendor Specific Database Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.cubrid.php" title="CUBRID">CUBRID</a>
                        </li>
                                                <li class="">
                            <a href="book.dbase.php" title="dBase">dBase</a>
                        </li>
                                                <li class="">
                            <a href="book.ibase.php" title="Firebird/InterBase">Firebird/InterBase</a>
                        </li>
                                                <li class="">
                            <a href="book.ibm-db2.php" title="IBM DB2">IBM DB2</a>
                        </li>
                                                <li class="">
                            <a href="book.mongodb.php" title="MongoDB">MongoDB</a>
                        </li>
                                                <li class="">
                            <a href="set.mysqlinfo.php" title="MySQL">MySQL</a>
                        </li>
                                                <li class="">
                            <a href="book.oci8.php" title="OCI8">OCI8</a>
                        </li>
                                                <li class="current">
                            <a href="book.pgsql.php" title="PostgreSQL">PostgreSQL</a>
                        </li>
                                                <li class="">
                            <a href="book.sqlite3.php" title="SQLite3">SQLite3</a>
                        </li>
                                                <li class="">
                            <a href="book.sqlsrv.php" title="SQLSRV">SQLSRV</a>
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
