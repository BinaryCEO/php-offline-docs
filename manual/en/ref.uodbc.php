<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ODBC Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.uodbc.php">
 <link rel="shorturl" href="https://www.php.net/uodbc">
 <link rel="alternate" href="https://www.php.net/uodbc" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.uodbc.php">
 <link rel="prev" href="https://www.php.net/manual/en/uodbc.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/function.odbc-autocommit.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.uodbc.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.uodbc.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.uodbc.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.uodbc.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.uodbc.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.uodbc.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.uodbc.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.uodbc.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.uodbc.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.uodbc.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.uodbc.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="ODBC Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ODBC Functions - Manual" />
<meta name="twitter:description" content="ODBC Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ODBC Functions - Manual" />
<meta itemprop="description" content="ODBC Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="ODBC Functions" />

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
        <a href="function.odbc-autocommit.php">
          odbc_autocommit &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="uodbc.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.uodbc.php'>ODBC</a></li>      </ul>
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
            <option value='en/ref.uodbc.php' selected="selected">English</option>
            <option value='de/ref.uodbc.php'>German</option>
            <option value='es/ref.uodbc.php'>Spanish</option>
            <option value='fr/ref.uodbc.php'>French</option>
            <option value='it/ref.uodbc.php'>Italian</option>
            <option value='ja/ref.uodbc.php'>Japanese</option>
            <option value='pt_BR/ref.uodbc.php'>Brazilian Portuguese</option>
            <option value='ru/ref.uodbc.php'>Russian</option>
            <option value='tr/ref.uodbc.php'>Turkish</option>
            <option value='uk/ref.uodbc.php'>Ukrainian</option>
            <option value='zh/ref.uodbc.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.uodbc" class="reference">
 <h1 class="title">ODBC Functions</h1>

 
















































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.odbc-autocommit.php">odbc_autocommit</a> — Toggle autocommit behaviour</li><li><a href="function.odbc-binmode.php">odbc_binmode</a> — Handling of binary column data</li><li><a href="function.odbc-close.php">odbc_close</a> — Close an ODBC connection</li><li><a href="function.odbc-close-all.php">odbc_close_all</a> — Close all ODBC connections</li><li><a href="function.odbc-columnprivileges.php">odbc_columnprivileges</a> — Lists columns and associated privileges for the given table</li><li><a href="function.odbc-columns.php">odbc_columns</a> — Lists the column names in specified tables</li><li><a href="function.odbc-commit.php">odbc_commit</a> — Commit an ODBC transaction</li><li><a href="function.odbc-connect.php">odbc_connect</a> — Connect to a datasource</li><li><a href="function.odbc-connection-string-is-quoted.php">odbc_connection_string_is_quoted</a> — Determines if an ODBC connection string value is quoted</li><li><a href="function.odbc-connection-string-quote.php">odbc_connection_string_quote</a> — Quotes an ODBC connection string value</li><li><a href="function.odbc-connection-string-should-quote.php">odbc_connection_string_should_quote</a> — Determines if an ODBC connection string value should be quoted</li><li><a href="function.odbc-cursor.php">odbc_cursor</a> — Get cursorname</li><li><a href="function.odbc-data-source.php">odbc_data_source</a> — Returns information about available DSNs</li><li><a href="function.odbc-do.php">odbc_do</a> — Alias of odbc_exec</li><li><a href="function.odbc-error.php">odbc_error</a> — Get the last error code</li><li><a href="function.odbc-errormsg.php">odbc_errormsg</a> — Get the last error message</li><li><a href="function.odbc-exec.php">odbc_exec</a> — Directly execute an SQL statement</li><li><a href="function.odbc-execute.php">odbc_execute</a> — Execute a prepared statement</li><li><a href="function.odbc-fetch-array.php">odbc_fetch_array</a> — Fetch a result row as an associative array</li><li><a href="function.odbc-fetch-into.php">odbc_fetch_into</a> — Fetch one result row into array</li><li><a href="function.odbc-fetch-object.php">odbc_fetch_object</a> — Fetch a result row as an object</li><li><a href="function.odbc-fetch-row.php">odbc_fetch_row</a> — Fetch a row</li><li><a href="function.odbc-field-len.php">odbc_field_len</a> — Get the length (precision) of a field</li><li><a href="function.odbc-field-name.php">odbc_field_name</a> — Get the columnname</li><li><a href="function.odbc-field-num.php">odbc_field_num</a> — Return column number</li><li><a href="function.odbc-field-precision.php">odbc_field_precision</a> — Alias of odbc_field_len</li><li><a href="function.odbc-field-scale.php">odbc_field_scale</a> — Get the scale of a field</li><li><a href="function.odbc-field-type.php">odbc_field_type</a> — Datatype of a field</li><li><a href="function.odbc-foreignkeys.php">odbc_foreignkeys</a> — Retrieves a list of foreign keys</li><li><a href="function.odbc-free-result.php">odbc_free_result</a> — Free objects associated with a result</li><li><a href="function.odbc-gettypeinfo.php">odbc_gettypeinfo</a> — Retrieves information about data types supported by the data source</li><li><a href="function.odbc-longreadlen.php">odbc_longreadlen</a> — Handling of LONG columns</li><li><a href="function.odbc-next-result.php">odbc_next_result</a> — Checks if multiple results are available</li><li><a href="function.odbc-num-fields.php">odbc_num_fields</a> — Number of columns in a result</li><li><a href="function.odbc-num-rows.php">odbc_num_rows</a> — Number of rows in a result</li><li><a href="function.odbc-pconnect.php">odbc_pconnect</a> — Open a persistent database connection</li><li><a href="function.odbc-prepare.php">odbc_prepare</a> — Prepares a statement for execution</li><li><a href="function.odbc-primarykeys.php">odbc_primarykeys</a> — Gets the primary keys for a table</li><li><a href="function.odbc-procedurecolumns.php">odbc_procedurecolumns</a> — Retrieve information about parameters to procedures</li><li><a href="function.odbc-procedures.php">odbc_procedures</a> — Get the list of procedures stored in a specific data source</li><li><a href="function.odbc-result.php">odbc_result</a> — Get result data</li><li><a href="function.odbc-result-all.php">odbc_result_all</a> — Print result as HTML table</li><li><a href="function.odbc-rollback.php">odbc_rollback</a> — Rollback a transaction</li><li><a href="function.odbc-setoption.php">odbc_setoption</a> — Adjust ODBC settings</li><li><a href="function.odbc-specialcolumns.php">odbc_specialcolumns</a> — Retrieves special columns</li><li><a href="function.odbc-statistics.php">odbc_statistics</a> — Retrieve statistics about a table</li><li><a href="function.odbc-tableprivileges.php">odbc_tableprivileges</a> — Lists tables and the privileges associated with each table</li><li><a href="function.odbc-tables.php">odbc_tables</a> — Get the list of table names stored in a specific data source</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/uodbc/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.uodbc%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.uodbc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.uodbc.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="52561">  <div class="votes">
    <div id="Vu52561">
    <a href="/manual/vote-note.php?id=52561&amp;page=ref.uodbc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52561">
    <a href="/manual/vote-note.php?id=52561&amp;page=ref.uodbc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52561" title="58% like this...">
    2
    </div>
  </div>
  <a href="#52561" class="name">
  <strong class="user"><em>Quickdraw</em></strong></a><a class="genanchor" href="#52561"> &para;</a><div class="date" title="2005-05-05 11:06"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52561">
<div class="phpcode"><code><span class="html">In response to Holger's comment about using @@identity:<br /><br />Be carefull. If the table you're inserting into has a trigger that also inserts into another table that has an identity column you'll get the key of that other table! use scope_identity() instead of @@identity</span></code></div>
  </div>
 </div>
  <div class="note" id="62404">  <div class="votes">
    <div id="Vu62404">
    <a href="/manual/vote-note.php?id=62404&amp;page=ref.uodbc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62404">
    <a href="/manual/vote-note.php?id=62404&amp;page=ref.uodbc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62404" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#62404" class="name">
  <strong class="user"><em>sven at ajaxtechforums dot com</em></strong></a><a class="genanchor" href="#62404"> &para;</a><div class="date" title="2006-02-27 03:07"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62404">
<div class="phpcode"><code><span class="html">I found this to be a perfect alternative to the MaxDB special drivers of version 7.5.00. Just weren't that easy to install on *nix. Windows seems fine. Anyway The ODBC is a perfect alternative for connecting the SAPDB/MaxDB towards PHP.<br /><br />Installation guide for the odbc alternative (instead of the MAXDB-php driver) can be found here:<br /><br /><a href="http://maxdb.yapabout.com/viewtopic.php?t=21" rel="nofollow" target="_blank">http://maxdb.yapabout.com/viewtopic.php?t=21</a></span></code></div>
  </div>
 </div>
  <div class="note" id="52534">  <div class="votes">
    <div id="Vu52534">
    <a href="/manual/vote-note.php?id=52534&amp;page=ref.uodbc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52534">
    <a href="/manual/vote-note.php?id=52534&amp;page=ref.uodbc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52534" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#52534" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#52534"> &para;</a><div class="date" title="2005-05-04 08:14"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52534">
<div class="phpcode"><code><span class="html">I searched for the solution of why odbc connection of a network remote drive under Windows + Apache 2.0.X, cannot give the query, but seems no one provides the solution.<br /><br />In fact, it is very simple.<br />Go to Control Panal -&gt; Services;<br />Find and double click "Apache2";<br />In the page of "Log On", choose Log on as "This account" and give an account in the web server system which have the right to control the network remote drive;<br />Finally, restart Apache, and that's it.</span></code></div>
  </div>
 </div>
  <div class="note" id="37126">  <div class="votes">
    <div id="Vu37126">
    <a href="/manual/vote-note.php?id=37126&amp;page=ref.uodbc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37126">
    <a href="/manual/vote-note.php?id=37126&amp;page=ref.uodbc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37126" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#37126" class="name">
  <strong class="user"><em>vbwebprofi at gmx dot de</em></strong></a><a class="genanchor" href="#37126"> &para;</a><div class="date" title="2003-11-04 04:31"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37126">
<div class="phpcode"><code><span class="html">On my search for a function to retriew the NewID of an inserted row wich has an autoincrement I found this solution like the mysql_insert_id for an ODBC connection to MS-Access :<br /><br />&lt;?<br />// make your connection below<br />$Connection = odbc_connect(...);<br />$Result = odbc_exec($Connection, "select @@identity");<br />$NewID = odbc_result($Result, 1);<br />odbc_free_result($Result);<br /><br />// make here all what you want with the NewID<br /><br />odbc_close($Connection);<br />?&gt;<br /><br />In my mind this should also work with MS-SQL-Server and with Sybase - via ODBC and direct (mssql_.../sybase_...).<br /><br />HTH ...<br /><br />Regards<br /><br />Holger</span></code></div>
  </div>
 </div>
  <div class="note" id="49312">  <div class="votes">
    <div id="Vu49312">
    <a href="/manual/vote-note.php?id=49312&amp;page=ref.uodbc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49312">
    <a href="/manual/vote-note.php?id=49312&amp;page=ref.uodbc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49312" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#49312" class="name">
  <strong class="user"><em>denials at gmail dot com</em></strong></a><a class="genanchor" href="#49312"> &para;</a><div class="date" title="2005-01-23 03:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49312">
<div class="phpcode"><code><span class="html">Ever wonder why you're experiencing really slow data retrieval times using IBM DB2 Universal Database for Linux, UNIX, and Windows? The default cursor type used by Unified ODBC is not supported by DB2, so it gets downgraded to a forward-only cursor -- and that negotiation occurs with every row fetch.<br /><br />One way to force your PHP applications to use forward-only cursors is to modify your DB2 client configuration with a handy CLI patch2 setting value of 6:<br /><br />$ db2 UPDATE CLI CONFIGURATION FOR SECTION dbname USING patch2 6<br /><br />You have to update this client setting on the same machine on which you are running the PHP application. This works on Windows operating systems as well as on Linux &amp; UNIX operating systems.<br /><br />I ran a few basic benchmarks (fetch 10,000 rows consisting of 3 INTEGER columns from a remote database server) and concluded that this setting can make a major difference to your application speed:<br /><br />Without CLI patch2 setting: ~22 seconds<br />With CLI patch2 setting: ~ 1.75 seconds<br /><br />Note that the drawback of using this patch setting (or any other method of using forward-only cursors) makes odbc_num_rows() always return "-1" for the number of rows affected by a SELECT statement.</span></code></div>
  </div>
 </div>
  <div class="note" id="40297">  <div class="votes">
    <div id="Vu40297">
    <a href="/manual/vote-note.php?id=40297&amp;page=ref.uodbc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40297">
    <a href="/manual/vote-note.php?id=40297&amp;page=ref.uodbc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40297" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#40297" class="name">
  <strong class="user"><em>pascals at NOSPAM dot pobox dot com</em></strong></a><a class="genanchor" href="#40297"> &para;</a><div class="date" title="2004-02-27 03:15"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40297">
<div class="phpcode"><code><span class="html">If the bundled ODBC library stumbles on some field formats (like some REAL from Pervasive.SQL), have a look at <a href="http://odbtp.sourceforge.net/." rel="nofollow" target="_blank">http://odbtp.sourceforge.net/.</a><br /><br />After many headaches, I have adoped odbtp: it's a very solid library and best of all it's not tied to a particular OS.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.uodbc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.uodbc.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.uodbc.php">ODBC</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.uodbc.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="uodbc.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="uodbc.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="ref.uodbc.php" title="ODBC Functions">ODBC Functions</a>
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
