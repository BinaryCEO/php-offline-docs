<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: OCI8 - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.oci8.php">
 <link rel="shorturl" href="https://www.php.net/oci8">
 <link rel="alternate" href="https://www.php.net/oci8" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.database.vendors.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqlnd.plugin.developing.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.oci8.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.oci8.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.oci8.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.oci8.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.oci8.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.oci8.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.oci8.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.oci8.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.oci8.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.oci8.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.oci8.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.oci8.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Oracle OCI8" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: OCI8 - Manual" />
<meta name="twitter:description" content="Oracle OCI8" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: OCI8 - Manual" />
<meta itemprop="description" content="Oracle OCI8" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Oracle OCI8" />

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
        <a href="intro.oci8.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqlnd.plugin.developing.php">
          &laquo; Getting started building a mysqlnd plugin        </a>
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
            <option value='en/book.oci8.php' selected="selected">English</option>
            <option value='de/book.oci8.php'>German</option>
            <option value='es/book.oci8.php'>Spanish</option>
            <option value='fr/book.oci8.php'>French</option>
            <option value='it/book.oci8.php'>Italian</option>
            <option value='ja/book.oci8.php'>Japanese</option>
            <option value='pt_BR/book.oci8.php'>Brazilian Portuguese</option>
            <option value='ru/book.oci8.php'>Russian</option>
            <option value='tr/book.oci8.php'>Turkish</option>
            <option value='uk/book.oci8.php'>Ukrainian</option>
            <option value='zh/book.oci8.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.oci8" class="book">
 
 <h1 class="title">Oracle OCI8</h1>
 
 
 
 
 
 
 







 






 






 






 




 






 






 







 






 




 




 







<ul class="chunklist chunklist_book"><li><a href="intro.oci8.php">Introduction</a></li><li><a href="oci8.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="oci8.requirements.php">Requirements</a></li><li><a href="oci8.installation.php">Installation</a></li><li><a href="oci8.test.php">Testing</a></li><li><a href="oci8.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="oci8.constants.php">Predefined Constants</a></li><li><a href="oci8.examples.php">Examples</a></li><li><a href="oci8.connection.php">OCI8 Connection Handling and Connection Pooling</a></li><li><a href="oci8.fan.php">OCI8 Fast Application Notification (FAN) Support</a></li><li><a href="oci8.taf.php">OCI8 Transparent Application Failover (TAF) Support</a></li><li><a href="oci8.dtrace.php">OCI8 and DTrace Dynamic Tracing</a></li><li><a href="oci8.datatypes.php">Supported Datatypes</a></li><li><a href="ref.oci8.php">OCI8 Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.oci-bind-array-by-name.php">oci_bind_array_by_name</a> — Binds a PHP array to an Oracle PL/SQL array parameter</li><li><a href="function.oci-bind-by-name.php">oci_bind_by_name</a> — Binds a PHP variable to an Oracle placeholder</li><li><a href="function.oci-cancel.php">oci_cancel</a> — Cancels reading from cursor</li><li><a href="function.oci-client-version.php">oci_client_version</a> — Returns the Oracle client library version</li><li><a href="function.oci-close.php">oci_close</a> — Closes an Oracle connection</li><li><a href="function.oci-commit.php">oci_commit</a> — Commits the outstanding database transaction</li><li><a href="function.oci-connect.php">oci_connect</a> — Connect to an Oracle database</li><li><a href="function.oci-define-by-name.php">oci_define_by_name</a> — Associates a PHP variable with a column for query fetches</li><li><a href="function.oci-error.php">oci_error</a> — Returns the last error found</li><li><a href="function.oci-execute.php">oci_execute</a> — Executes a statement</li><li><a href="function.oci-fetch.php">oci_fetch</a> — Fetches the next row from a query into internal buffers</li><li><a href="function.oci-fetch-all.php">oci_fetch_all</a> — Fetches multiple rows from a query into a two-dimensional array</li><li><a href="function.oci-fetch-array.php">oci_fetch_array</a> — Returns the next row from a query as an associative or numeric array</li><li><a href="function.oci-fetch-assoc.php">oci_fetch_assoc</a> — Returns the next row from a query as an associative array</li><li><a href="function.oci-fetch-object.php">oci_fetch_object</a> — Returns the next row from a query as an object</li><li><a href="function.oci-fetch-row.php">oci_fetch_row</a> — Returns the next row from a query as a numeric array</li><li><a href="function.oci-field-is-null.php">oci_field_is_null</a> — Checks if a field in the currently fetched row is null</li><li><a href="function.oci-field-name.php">oci_field_name</a> — Returns the name of a field from the statement</li><li><a href="function.oci-field-precision.php">oci_field_precision</a> — Tell the precision of a field</li><li><a href="function.oci-field-scale.php">oci_field_scale</a> — Tell the scale of the field</li><li><a href="function.oci-field-size.php">oci_field_size</a> — Returns field's size</li><li><a href="function.oci-field-type.php">oci_field_type</a> — Returns a field's data type name</li><li><a href="function.oci-field-type-raw.php">oci_field_type_raw</a> — Tell the raw Oracle data type of the field</li><li><a href="function.oci-free-descriptor.php">oci_free_descriptor</a> — Frees a descriptor</li><li><a href="function.oci-free-statement.php">oci_free_statement</a> — Frees all resources associated with statement or cursor</li><li><a href="function.oci-get-implicit-resultset.php">oci_get_implicit_resultset</a> — Returns the next child statement resource from a parent statement resource that has Oracle Database Implicit Result Sets</li><li><a href="function.oci-lob-copy.php">oci_lob_copy</a> — Copies large object</li><li><a href="function.oci-lob-is-equal.php">oci_lob_is_equal</a> — Compares two LOB/FILE locators for equality</li><li><a href="function.oci-new-collection.php">oci_new_collection</a> — Allocates new collection object</li><li><a href="function.oci-new-connect.php">oci_new_connect</a> — Connect to the Oracle server using a unique connection</li><li><a href="function.oci-new-cursor.php">oci_new_cursor</a> — Allocates and returns a new cursor (statement handle)</li><li><a href="function.oci-new-descriptor.php">oci_new_descriptor</a> — Initializes a new empty LOB or FILE descriptor</li><li><a href="function.oci-num-fields.php">oci_num_fields</a> — Returns the number of result columns in a statement</li><li><a href="function.oci-num-rows.php">oci_num_rows</a> — Returns number of rows affected during statement execution</li><li><a href="function.oci-parse.php">oci_parse</a> — Prepares an Oracle statement for execution</li><li><a href="function.oci-password-change.php">oci_password_change</a> — Changes password of Oracle's user</li><li><a href="function.oci-pconnect.php">oci_pconnect</a> — Connect to an Oracle database using a persistent connection</li><li><a href="function.oci-register-taf-callback.php">oci_register_taf_callback</a> — Register a user-defined callback function for Oracle Database TAF</li><li><a href="function.oci-result.php">oci_result</a> — Returns field's value from the fetched row</li><li><a href="function.oci-rollback.php">oci_rollback</a> — Rolls back the outstanding database transaction</li><li><a href="function.oci-server-version.php">oci_server_version</a> — Returns the Oracle Database version</li><li><a href="function.oci-set-action.php">oci_set_action</a> — Sets the action name</li><li><a href="function.oci-set-call-timout.php">oci_set_call_timeout</a> — Sets a millisecond timeout for database calls</li><li><a href="function.oci-set-client-identifier.php">oci_set_client_identifier</a> — Sets the client identifier</li><li><a href="function.oci-set-client-info.php">oci_set_client_info</a> — Sets the client information</li><li><a href="function.oci-set-db-operation.php">oci_set_db_operation</a> — Sets the database operation</li><li><a href="function.oci-set-edition.php">oci_set_edition</a> — Sets the database edition</li><li><a href="function.oci-set-module-name.php">oci_set_module_name</a> — Sets the module name</li><li><a href="function.oci-set-prefetch.php">oci_set_prefetch</a> — Sets number of rows to be prefetched by queries</li><li><a href="function.oci-set-prefetch-lob.php">oci_set_prefetch_lob</a> — Sets the amount of data prefetched for each CLOB or BLOB.</li><li><a href="function.oci-statement-type.php">oci_statement_type</a> — Returns the type of a statement</li><li><a href="function.oci-unregister-taf-callback.php">oci_unregister_taf_callback</a> — Unregister a user-defined callback function for Oracle Database TAF</li></ul></li><li><a href="class.ocicollection.php">OCICollection</a> — The OCICollection class<ul class="chunklist chunklist_book chunklist_children"><li><a href="ocicollection.append.php">OCICollection::append</a> — Appends element to the collection</li><li><a href="ocicollection.assign.php">OCICollection::assign</a> — Assigns a value to the collection from another existing collection</li><li><a href="ocicollection.assignelem.php">OCICollection::assignElem</a> — Assigns a value to the element of the collection</li><li><a href="ocicollection.free.php">OCICollection::free</a> — Frees the resources associated with the collection object</li><li><a href="ocicollection.getelem.php">OCICollection::getElem</a> — Returns value of the element</li><li><a href="ocicollection.max.php">OCICollection::max</a> — Returns the maximum number of elements in the collection</li><li><a href="ocicollection.size.php">OCICollection::size</a> — Returns size of the collection</li><li><a href="ocicollection.trim.php">OCICollection::trim</a> — Trims elements from the end of the collection</li></ul></li><li><a href="class.ocilob.php">OCILob</a> — The OCILob class<ul class="chunklist chunklist_book chunklist_children"><li><a href="ocilob.append.php">OCILob::append</a> — Appends data from the large object to another large object</li><li><a href="ocilob.close.php">OCILob::close</a> — Closes LOB descriptor</li><li><a href="ocilob.eof.php">OCILob::eof</a> — Tests for end-of-file on a large object's descriptor</li><li><a href="ocilob.erase.php">OCILob::erase</a> — Erases a specified portion of the internal LOB data</li><li><a href="ocilob.export.php">OCILob::export</a> — Exports LOB's contents to a file</li><li><a href="ocilob.flush.php">OCILob::flush</a> — Flushes/writes buffer of the LOB to the server</li><li><a href="ocilob.free.php">OCILob::free</a> — Frees resources associated with the LOB descriptor</li><li><a href="ocilob.getbuffering.php">OCILob::getBuffering</a> — Returns current state of buffering for the large object</li><li><a href="ocilob.import.php">OCILob::import</a> — Imports file data to the LOB</li><li><a href="ocilob.load.php">OCILob::load</a> — Returns large object's contents</li><li><a href="ocilob.read.php">OCILob::read</a> — Reads part of the large object</li><li><a href="ocilob.rewind.php">OCILob::rewind</a> — Moves the internal pointer to the beginning of the large object</li><li><a href="ocilob.save.php">OCILob::save</a> — Saves data to the large object</li><li><a href="ocilob.savefile.php">OCILob::saveFile</a> — Alias of OCILob::import</li><li><a href="ocilob.seek.php">OCILob::seek</a> — Sets the internal pointer of the large object</li><li><a href="ocilob.setbuffering.php">OCILob::setBuffering</a> — Changes current state of buffering for the large object</li><li><a href="ocilob.size.php">OCILob::size</a> — Returns size of large object</li><li><a href="ocilob.tell.php">OCILob::tell</a> — Returns the current position of internal pointer of large object</li><li><a href="ocilob.truncate.php">OCILob::truncate</a> — Truncates large object</li><li><a href="ocilob.write.php">OCILob::write</a> — Writes data to the large object</li><li><a href="ocilob.writetemporary.php">OCILob::writeTemporary</a> — Writes a temporary large object</li><li><a href="ocilob.writetofile.php">OCILob::writeToFile</a> — Alias of OCILob::export</li></ul></li><li><a href="oldaliases.oci8.php">OCI8 Obsolete Aliases and Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.oci-internal-debug.php">oci_internal_debug</a> — Enables or disables internal debug output</li><li><a href="function.ocibindbyname.php">ocibindbyname</a> — Alias of oci_bind_by_name</li><li><a href="function.ocicancel.php">ocicancel</a> — Alias of oci_cancel</li><li><a href="function.ocicloselob.php">ocicloselob</a> — Alias of OCILob::close</li><li><a href="function.ocicollappend.php">ocicollappend</a> — Alias of OCICollection::append</li><li><a href="function.ocicollassign.php">ocicollassign</a> — Alias of OCICollection::assign</li><li><a href="function.ocicollassignelem.php">ocicollassignelem</a> — Alias of OCICollection::assignElem</li><li><a href="function.ocicollgetelem.php">ocicollgetelem</a> — Alias of OCICollection::getElem</li><li><a href="function.ocicollmax.php">ocicollmax</a> — Alias of OCICollection::max</li><li><a href="function.ocicollsize.php">ocicollsize</a> — Alias of OCICollection::size</li><li><a href="function.ocicolltrim.php">ocicolltrim</a> — Alias of OCICollection::trim</li><li><a href="function.ocicolumnisnull.php">ocicolumnisnull</a> — Alias of oci_field_is_null</li><li><a href="function.ocicolumnname.php">ocicolumnname</a> — Alias of oci_field_name</li><li><a href="function.ocicolumnprecision.php">ocicolumnprecision</a> — Alias of oci_field_precision</li><li><a href="function.ocicolumnscale.php">ocicolumnscale</a> — Alias of oci_field_scale</li><li><a href="function.ocicolumnsize.php">ocicolumnsize</a> — Alias of oci_field_size</li><li><a href="function.ocicolumntype.php">ocicolumntype</a> — Alias of oci_field_type</li><li><a href="function.ocicolumntyperaw.php">ocicolumntyperaw</a> — Alias of oci_field_type_raw</li><li><a href="function.ocicommit.php">ocicommit</a> — Alias of oci_commit</li><li><a href="function.ocidefinebyname.php">ocidefinebyname</a> — Alias of oci_define_by_name</li><li><a href="function.ocierror.php">ocierror</a> — Alias of oci_error</li><li><a href="function.ociexecute.php">ociexecute</a> — Alias of oci_execute</li><li><a href="function.ocifetch.php">ocifetch</a> — Alias of oci_fetch</li><li><a href="function.ocifetchinto.php">ocifetchinto</a> — Obsolete variant of oci_fetch_array, oci_fetch_object,
   oci_fetch_assoc and
   oci_fetch_row</li><li><a href="function.ocifetchstatement.php">ocifetchstatement</a> — Alias of oci_fetch_all</li><li><a href="function.ocifreecollection.php">ocifreecollection</a> — Alias of OCICollection::free</li><li><a href="function.ocifreecursor.php">ocifreecursor</a> — Alias of oci_free_statement</li><li><a href="function.ocifreedesc.php">ocifreedesc</a> — Alias of OCILob::free</li><li><a href="function.ocifreestatement.php">ocifreestatement</a> — Alias of oci_free_statement</li><li><a href="function.ociinternaldebug.php">ociinternaldebug</a> — Alias of oci_internal_debug</li><li><a href="function.ociloadlob.php">ociloadlob</a> — Alias of OCILob::load</li><li><a href="function.ocilogoff.php">ocilogoff</a> — Alias of oci_close</li><li><a href="function.ocilogon.php">ocilogon</a> — Alias of oci_connect</li><li><a href="function.ocinewcollection.php">ocinewcollection</a> — Alias of oci_new_collection</li><li><a href="function.ocinewcursor.php">ocinewcursor</a> — Alias of oci_new_cursor</li><li><a href="function.ocinewdescriptor.php">ocinewdescriptor</a> — Alias of oci_new_descriptor</li><li><a href="function.ocinlogon.php">ocinlogon</a> — Alias of oci_new_connect</li><li><a href="function.ocinumcols.php">ocinumcols</a> — Alias of oci_num_fields</li><li><a href="function.ociparse.php">ociparse</a> — Alias of oci_parse</li><li><a href="function.ociplogon.php">ociplogon</a> — Alias of oci_pconnect</li><li><a href="function.ociresult.php">ociresult</a> — Alias of oci_result</li><li><a href="function.ocirollback.php">ocirollback</a> — Alias of oci_rollback</li><li><a href="function.ocirowcount.php">ocirowcount</a> — Alias of oci_num_rows</li><li><a href="function.ocisavelob.php">ocisavelob</a> — Alias of OCILob::save</li><li><a href="function.ocisavelobfile.php">ocisavelobfile</a> — Alias of OCILob::import</li><li><a href="function.ociserverversion.php">ociserverversion</a> — Alias of oci_server_version</li><li><a href="function.ocisetprefetch.php">ocisetprefetch</a> — Alias of oci_set_prefetch</li><li><a href="function.ocistatementtype.php">ocistatementtype</a> — Alias of oci_statement_type</li><li><a href="function.ociwritelobtofile.php">ociwritelobtofile</a> — Alias of OCILob::export</li><li><a href="function.ociwritetemporarylob.php">ociwritetemporarylob</a> — Alias of OCILob::writeTemporary</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/oci8/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.oci8%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.oci8&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.oci8.php">＋<small>add a note</small></a></span>
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
                                                <li class="current">
                            <a href="book.oci8.php" title="OCI8">OCI8</a>
                        </li>
                                                <li class="">
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
