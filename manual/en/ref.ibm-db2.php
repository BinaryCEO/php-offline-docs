<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: IBM DB2 Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.ibm-db2.php">
 <link rel="shorturl" href="https://www.php.net/ibm-db2">
 <link rel="alternate" href="https://www.php.net/ibm-db2" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ibm-db2.php">
 <link rel="prev" href="https://www.php.net/manual/en/ibm-db2.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/function.db2-autocommit.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.ibm-db2.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.ibm-db2.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.ibm-db2.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.ibm-db2.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.ibm-db2.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.ibm-db2.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.ibm-db2.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.ibm-db2.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.ibm-db2.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.ibm-db2.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.ibm-db2.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="IBM DB2 Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: IBM DB2 Functions - Manual" />
<meta name="twitter:description" content="IBM DB2 Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: IBM DB2 Functions - Manual" />
<meta itemprop="description" content="IBM DB2 Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="IBM DB2 Functions" />

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
        <a href="function.db2-autocommit.php">
          db2_autocommit &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ibm-db2.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.ibm-db2.php'>IBM DB2</a></li>      </ul>
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
            <option value='en/ref.ibm-db2.php' selected="selected">English</option>
            <option value='de/ref.ibm-db2.php'>German</option>
            <option value='es/ref.ibm-db2.php'>Spanish</option>
            <option value='fr/ref.ibm-db2.php'>French</option>
            <option value='it/ref.ibm-db2.php'>Italian</option>
            <option value='ja/ref.ibm-db2.php'>Japanese</option>
            <option value='pt_BR/ref.ibm-db2.php'>Brazilian Portuguese</option>
            <option value='ru/ref.ibm-db2.php'>Russian</option>
            <option value='tr/ref.ibm-db2.php'>Turkish</option>
            <option value='uk/ref.ibm-db2.php'>Ukrainian</option>
            <option value='zh/ref.ibm-db2.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.ibm-db2" class="reference">
 <h1 class="title">IBM DB2 Functions</h1>

 



















































































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.db2-autocommit.php">db2_autocommit</a> — Returns or sets the AUTOCOMMIT state for a database connection</li><li><a href="function.db2-bind-param.php">db2_bind_param</a> — Binds a PHP variable to an SQL statement parameter</li><li><a href="function.db2-client-info.php">db2_client_info</a> — Returns an object with properties that describe the DB2 database client</li><li><a href="function.db2-close.php">db2_close</a> — Closes a database connection</li><li><a href="function.db2-column-privileges.php">db2_column_privileges</a> — Returns a result set listing the columns and associated privileges for a table</li><li><a href="function.db2-columns.php">db2_columns</a> — Returns a result set listing the columns and associated metadata for a table</li><li><a href="function.db2-commit.php">db2_commit</a> — Commits a transaction</li><li><a href="function.db2-conn-error.php">db2_conn_error</a> — Returns a string containing the SQLSTATE returned by the last connection attempt</li><li><a href="function.db2-conn-errormsg.php">db2_conn_errormsg</a> — Returns the last connection error message and SQLCODE value</li><li><a href="function.db2-connect.php">db2_connect</a> — Returns a connection to a database</li><li><a href="function.db2-cursor-type.php">db2_cursor_type</a> — Returns the cursor type used by a statement resource</li><li><a href="function.db2-escape-string.php">db2_escape_string</a> — Used to escape certain characters</li><li><a href="function.db2-exec.php">db2_exec</a> — Executes an SQL statement directly</li><li><a href="function.db2-execute.php">db2_execute</a> — Executes a prepared SQL statement</li><li><a href="function.db2-fetch-array.php">db2_fetch_array</a> — Returns an array, indexed by column position, representing a row in a result set</li><li><a href="function.db2-fetch-assoc.php">db2_fetch_assoc</a> — Returns an array, indexed by column name, representing a row in a result set</li><li><a href="function.db2-fetch-both.php">db2_fetch_both</a> — Returns an array, indexed by both column name and position, representing a row in a result set</li><li><a href="function.db2-fetch-object.php">db2_fetch_object</a> — Returns an object with properties representing columns in the fetched row</li><li><a href="function.db2-fetch-row.php">db2_fetch_row</a> — Sets the result set pointer to the next row or requested row</li><li><a href="function.db2-field-display-size.php">db2_field_display_size</a> — Returns the maximum number of bytes required to display a column</li><li><a href="function.db2-field-name.php">db2_field_name</a> — Returns the name of the column in the result set</li><li><a href="function.db2-field-num.php">db2_field_num</a> — Returns the position of the named column in a result set</li><li><a href="function.db2-field-precision.php">db2_field_precision</a> — Returns the precision of the indicated column in a result set</li><li><a href="function.db2-field-scale.php">db2_field_scale</a> — Returns the scale of the indicated column in a result set</li><li><a href="function.db2-field-type.php">db2_field_type</a> — Returns the data type of the indicated column in a result set</li><li><a href="function.db2-field-width.php">db2_field_width</a> — Returns the width of the current value of the indicated column in a result set</li><li><a href="function.db2-foreign-keys.php">db2_foreign_keys</a> — Returns a result set listing the foreign keys for a table</li><li><a href="function.db2-free-result.php">db2_free_result</a> — Frees resources associated with a result set</li><li><a href="function.db2-free-stmt.php">db2_free_stmt</a> — Frees resources associated with the indicated statement resource</li><li><a href="function.db2-get-option.php">db2_get_option</a> — Retrieves an option value for a statement resource or a connection resource</li><li><a href="function.db2-last-insert-id.php">db2_last_insert_id</a> — Returns the auto generated ID of the last insert query that successfully 
  executed on this connection</li><li><a href="function.db2-lob-read.php">db2_lob_read</a> — Gets a user defined size of LOB files with each invocation</li><li><a href="function.db2-next-result.php">db2_next_result</a> — Requests the next result set from a stored procedure</li><li><a href="function.db2-num-fields.php">db2_num_fields</a> — Returns the number of fields contained in a result set</li><li><a href="function.db2-num-rows.php">db2_num_rows</a> — Returns the number of rows affected by an SQL statement</li><li><a href="function.db2-pclose.php">db2_pclose</a> — Closes a persistent database connection</li><li><a href="function.db2-pconnect.php">db2_pconnect</a> — Returns a persistent connection to a database</li><li><a href="function.db2-prepare.php">db2_prepare</a> — Prepares an SQL statement to be executed</li><li><a href="function.db2-primary-keys.php">db2_primary_keys</a> — Returns a result set listing primary keys for a table</li><li><a href="function.db2-procedure-columns.php">db2_procedure_columns</a> — Returns a result set listing stored procedure parameters</li><li><a href="function.db2-procedures.php">db2_procedures</a> — Returns a result set listing the stored procedures registered in a database</li><li><a href="function.db2-result.php">db2_result</a> — Returns a single column from a row in the result set</li><li><a href="function.db2-rollback.php">db2_rollback</a> — Rolls back a transaction</li><li><a href="function.db2-server-info.php">db2_server_info</a> — Returns an object with properties that describe the DB2 database server</li><li><a href="function.db2-set-option.php">db2_set_option</a> — Set options for connection or statement resources</li><li><a href="function.db2-special-columns.php">db2_special_columns</a> — Returns a result set listing the unique row identifier columns for a table</li><li><a href="function.db2-statistics.php">db2_statistics</a> — Returns a result set listing the index and statistics for a table</li><li><a href="function.db2-stmt-error.php">db2_stmt_error</a> — Returns a string containing the SQLSTATE returned by an SQL statement</li><li><a href="function.db2-stmt-errormsg.php">db2_stmt_errormsg</a> — Returns a string containing the last SQL statement error message</li><li><a href="function.db2-table-privileges.php">db2_table_privileges</a> — Returns a result set listing the tables and associated privileges in a database</li><li><a href="function.db2-tables.php">db2_tables</a> — Returns a result set listing the tables and associated metadata in a database</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ibm_db2/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.ibm-db2%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.ibm-db2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.ibm-db2.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114995">  <div class="votes">
    <div id="Vu114995">
    <a href="/manual/vote-note.php?id=114995&amp;page=ref.ibm-db2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114995">
    <a href="/manual/vote-note.php?id=114995&amp;page=ref.ibm-db2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114995" title="61% like this...">
    3
    </div>
  </div>
  <a href="#114995" class="name">
  <strong class="user"><em>igtoth at gmail dot com</em></strong></a><a class="genanchor" href="#114995"> &para;</a><div class="date" title="2014-05-10 02:27"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114995">
<div class="phpcode"><code><span class="html">// IBM DB2 funcitons like MySQL (ODBC based)<br />// "Ighor Toth" &lt;igtoth@gmail.com&gt;<br />// Date: 08/05/2014<br /><br />// usage:<br />// db2_connect(verbose,instance,username,password); -&gt; also reads config file if nothing declared db2.conf.inc.php<br />// db2_query(db2_connect_return,sql)<br />// db2_fetch_array(result);<br />// db2_fetch_object(result);<br />// db2_display_table(db2_connect_return,sql); // select only<br /><br />function db2_connect($verbose = null,$db2name = null,$username = null,$password = null) {<br />    if(!isset($verbose)){<br />        $verbose = TRUE; // TRUE or FALSE, if not set TRUE<br />    }<br />    if(!isset($db2name)){ // NOT DECLARED <br />        include("db2.conf.inc.php"); // CHECK CONFIG FILE<br />        if(!isset($db2name)){<br />            if ($verbose == TRUE){<br />                echo ("DB2 Instance not selected");<br />                exit();<br />            } else {<br />                exit();<br />            }<br />        }<br />    } else if (!isset($username)){<br />        echo ("DB2 Instance username not specified");<br />        exit();    <br />    } <br />    $db2conn = odbc_connect($db2name, $username, $password);<br />    if (($verbose == TRUE) &amp;&amp; ($db2conn == 0)) {<br />        echo("Connection to database failed.");<br />        $sqlerror = odbc_errormsg($db2conn);<br />        echo($sqlerror);<br />    }<br />    return($db2conn);<br />}<br /><br />function db2_query($db2conn,$sql){<br />    $result = odbc_exec($db2conn, $sql);<br />    if ($result == 0) {<br />        echo("QUERY = '$sql' FAILED.&lt;br&gt;\n");<br />        $sqlerror = odbc_errormsg($db2conn);<br />        echo($sqlerror);<br />    } else {<br />        // odbc_result_all prints all of the rows<br />        // for a result set ID as an HTML table<br />        return $result;<br />    }<br />}<br /><br /> function db2_fetch_array($result, $rownumber=null){<br />    $array = array();<br />    if (!($cols = odbc_fetch_into($result, $result_array, $rownumber))) {<br />        return false;<br />    }<br />    for ($i = 1; $i &lt;= $cols; $i++) {<br />        $array[odbc_field_name($result, $i)] = $result_array[$i - 1];<br />    }<br />    return $array;<br />}<br /><br />function db2_fetch_object($result){<br />    if(function_exists("db2_fetch_object")) return db2_fetch_object($result);<br />    $rs = array();<br />    $rs_obj = false;<br />    if( odbc_fetch_into($result, $rs) ){<br />        foreach( $rs as $key=&gt;$value ){<br />            $fkey = odbc_field_name($result, $key+1);<br />            $rs_obj-&gt;$fkey = trim($value);<br />        }<br />    }<br />    return $rs_obj;<br />}<br /><br />function db2_display_table($db2conn,$sql) {<br />    // select all rows from the table<br />    if(!isset($db2conn)||!isset($sql)){<br />        echo("ERROR db2_display_table: Function missing arguments");<br />        exit();<br />    }<br />    $check = explode(" ",$sql);<br />    if($check[0]!="SELECT"){<br />        echo("ERROR db2_display_table: Not SELECT SQL query");<br />    }<br />    if ($db2conn != 0) {<br />        // odbc_exec returns 0 if the statement fails;<br />        // otherwise it returns a result set ID<br />        $result = odbc_exec($db2conn, $sql);<br />        if ($result == 0) {<br />            echo("SELECT statement failed.");<br />            $sqlerror = odbc_errormsg($db2conn);<br />            echo($sqlerror);<br />        } else {<br />            // odbc_result_all prints all of the rows<br />            // for a result set ID as an HTML table<br />            odbc_result_all($result);<br />        }<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="85665">  <div class="votes">
    <div id="Vu85665">
    <a href="/manual/vote-note.php?id=85665&amp;page=ref.ibm-db2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85665">
    <a href="/manual/vote-note.php?id=85665&amp;page=ref.ibm-db2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85665" title="55% like this...">
    1
    </div>
  </div>
  <a href="#85665" class="name">
  <strong class="user"><em>Richard dot Ablewhite at gmail dot com</em></strong></a><a class="genanchor" href="#85665"> &para;</a><div class="date" title="2008-09-11 03:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85665">
<div class="phpcode"><code><span class="html">There seems to be a lot of good documentation<br />for Linux users compiling PHP with DB2 support,<br />but decent Windows notes are minimal.<br /><br />You do not need to install full DB2 clients to get DB2<br />working with DB2, all you need is the IBM Data<br />Server Driver for ODBC, CLI, and .NET which is only<br />16.1 meg.<br /><br />You can download the driver from here:<br /><br />Direct Link:<br /><a href="ftp://ftp.software.ibm.com/ps/products/db2/fixes2/englsh-us/" rel="nofollow" target="_blank">ftp://ftp.software.ibm.com/ps/products/db2/fixes2/englsh-us/</a><br />db2_v95/dsdriver/fp2/v9.5fp2_nt32_dsdriver_EN.exe<br /><br />Home Page:<br /><a href="http://www-01.ibm.com/support/docview.wss?rs=71&amp;uid=swg21287889" rel="nofollow" target="_blank">http://www-01.ibm.com/support/docview.wss?rs=71&amp;uid=swg21287889</a><br /><br />This includes both the drivers required and the PHP<br />dll php_ibm_db2_5.2.2.dll<br /><br />Once installed the drivers do not setup the correct<br />path environmental variable,<br />so add the following to your path:<br /><br />C:\Program Files\IBM\IBM DATA SERVER DRIVER\bin<br /><br />Once thats done all should work! No massive<br />400meg client downloads required.<br /><br />Whats even better about these drivers is that you<br />dont need to install them,<br />you can simply copy the bin directory to any server,<br />add it to your path and it will just work. <br />This is great for anyone developing PHP-GTK applications,<br />I copy the bin directory into my php-gkt2 directory<br />and execute using the following batch script:<br /><br />path = %PATH%;.\IBM DATA SERVER DRIVER\bin<br />php-win.exe %*<br /><br />This lets me role out lightweight DB2 client desktop<br />apps that dont have to be installed,<br />can just be coppied from PC to PC or ran over a<br />network or from USB stick.<br /><br />As your only installing the client drivers you wont be<br />able to catalog databases,<br />so always use the full connection string. Here is a<br />quick bit of code to get you started:<br /><br />$database = 'databasename';<br />$user = 'user';<br />$password = 'password';<br />$hostname = '127.0.0.1';<br />$port = 50000;<br /><br />$conn_string = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=$database;" .<br />  "HOSTNAME=$hostname;PORT=$port;".<br />  "PROTOCOL=TCPIP;UID=$user;PWD=$password;";<br />$conn = db2_connect($conn_string, '', '');<br /><br />$query = 'SELECT * FROM TABLE';<br />$res = db2_prepare($conn, $query);<br />db2_execute($res);<br /><br />while ($row = db2_fetch_array($res)) {<br />  print_r($row);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="83646">  <div class="votes">
    <div id="Vu83646">
    <a href="/manual/vote-note.php?id=83646&amp;page=ref.ibm-db2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83646">
    <a href="/manual/vote-note.php?id=83646&amp;page=ref.ibm-db2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83646" title="no votes...">
    0
    </div>
  </div>
  <a href="#83646" class="name">
  <strong class="user"><em>Exi</em></strong></a><a class="genanchor" href="#83646"> &para;</a><div class="date" title="2008-06-05 01:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83646">
<div class="phpcode"><code><span class="html">The DB/2 Run-Time-Client can be found here:<br /><a href="http://www-1.ibm.com/support/docview.wss?rs=71&amp;uid=swg21255394" rel="nofollow" target="_blank">http://www-1.ibm.com/support/docview.wss?rs=71&amp;uid=swg21255394</a><br />Select the 'Runtime Client Installable for Windows' further down the page and download it. <br />Clients for other platform (incl. 64-Bit Windows) are also available from that page.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.ibm-db2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.ibm-db2.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.ibm-db2.php">IBM DB2</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.ibm-db2.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="ibm-db2.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="ibm-db2.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="ref.ibm-db2.php" title="IBM DB2 Functions">IBM DB2 Functions</a>
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
