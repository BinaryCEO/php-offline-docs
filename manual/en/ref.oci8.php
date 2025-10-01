<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: OCI8 Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.oci8.php">
 <link rel="shorturl" href="https://www.php.net/oci8">
 <link rel="alternate" href="https://www.php.net/oci8" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.oci8.php">
 <link rel="prev" href="https://www.php.net/manual/en/oci8.datatypes.php">
 <link rel="next" href="https://www.php.net/manual/en/function.oci-bind-array-by-name.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.oci8.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.oci8.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.oci8.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.oci8.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.oci8.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.oci8.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.oci8.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.oci8.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.oci8.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.oci8.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.oci8.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="OCI8 Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: OCI8 Functions - Manual" />
<meta name="twitter:description" content="OCI8 Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: OCI8 Functions - Manual" />
<meta itemprop="description" content="OCI8 Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="OCI8 Functions" />

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
        <a href="function.oci-bind-array-by-name.php">
          oci_bind_array_by_name &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="oci8.datatypes.php">
          &laquo; Supported Datatypes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.oci8.php'>OCI8</a></li>      </ul>
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
            <option value='en/ref.oci8.php' selected="selected">English</option>
            <option value='de/ref.oci8.php'>German</option>
            <option value='es/ref.oci8.php'>Spanish</option>
            <option value='fr/ref.oci8.php'>French</option>
            <option value='it/ref.oci8.php'>Italian</option>
            <option value='ja/ref.oci8.php'>Japanese</option>
            <option value='pt_BR/ref.oci8.php'>Brazilian Portuguese</option>
            <option value='ru/ref.oci8.php'>Russian</option>
            <option value='tr/ref.oci8.php'>Turkish</option>
            <option value='uk/ref.oci8.php'>Ukrainian</option>
            <option value='zh/ref.oci8.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.oci8" class="reference">
  <h1 class="title">OCI8 Functions</h1>

  















































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.oci-bind-array-by-name.php">oci_bind_array_by_name</a> — Binds a PHP array to an Oracle PL/SQL array parameter</li><li><a href="function.oci-bind-by-name.php">oci_bind_by_name</a> — Binds a PHP variable to an Oracle placeholder</li><li><a href="function.oci-cancel.php">oci_cancel</a> — Cancels reading from cursor</li><li><a href="function.oci-client-version.php">oci_client_version</a> — Returns the Oracle client library version</li><li><a href="function.oci-close.php">oci_close</a> — Closes an Oracle connection</li><li><a href="function.oci-commit.php">oci_commit</a> — Commits the outstanding database transaction</li><li><a href="function.oci-connect.php">oci_connect</a> — Connect to an Oracle database</li><li><a href="function.oci-define-by-name.php">oci_define_by_name</a> — Associates a PHP variable with a column for query fetches</li><li><a href="function.oci-error.php">oci_error</a> — Returns the last error found</li><li><a href="function.oci-execute.php">oci_execute</a> — Executes a statement</li><li><a href="function.oci-fetch.php">oci_fetch</a> — Fetches the next row from a query into internal buffers</li><li><a href="function.oci-fetch-all.php">oci_fetch_all</a> — Fetches multiple rows from a query into a two-dimensional array</li><li><a href="function.oci-fetch-array.php">oci_fetch_array</a> — Returns the next row from a query as an associative or numeric array</li><li><a href="function.oci-fetch-assoc.php">oci_fetch_assoc</a> — Returns the next row from a query as an associative array</li><li><a href="function.oci-fetch-object.php">oci_fetch_object</a> — Returns the next row from a query as an object</li><li><a href="function.oci-fetch-row.php">oci_fetch_row</a> — Returns the next row from a query as a numeric array</li><li><a href="function.oci-field-is-null.php">oci_field_is_null</a> — Checks if a field in the currently fetched row is null</li><li><a href="function.oci-field-name.php">oci_field_name</a> — Returns the name of a field from the statement</li><li><a href="function.oci-field-precision.php">oci_field_precision</a> — Tell the precision of a field</li><li><a href="function.oci-field-scale.php">oci_field_scale</a> — Tell the scale of the field</li><li><a href="function.oci-field-size.php">oci_field_size</a> — Returns field's size</li><li><a href="function.oci-field-type.php">oci_field_type</a> — Returns a field's data type name</li><li><a href="function.oci-field-type-raw.php">oci_field_type_raw</a> — Tell the raw Oracle data type of the field</li><li><a href="function.oci-free-descriptor.php">oci_free_descriptor</a> — Frees a descriptor</li><li><a href="function.oci-free-statement.php">oci_free_statement</a> — Frees all resources associated with statement or cursor</li><li><a href="function.oci-get-implicit-resultset.php">oci_get_implicit_resultset</a> — Returns the next child statement resource from a parent statement resource that has Oracle Database Implicit Result Sets</li><li><a href="function.oci-lob-copy.php">oci_lob_copy</a> — Copies large object</li><li><a href="function.oci-lob-is-equal.php">oci_lob_is_equal</a> — Compares two LOB/FILE locators for equality</li><li><a href="function.oci-new-collection.php">oci_new_collection</a> — Allocates new collection object</li><li><a href="function.oci-new-connect.php">oci_new_connect</a> — Connect to the Oracle server using a unique connection</li><li><a href="function.oci-new-cursor.php">oci_new_cursor</a> — Allocates and returns a new cursor (statement handle)</li><li><a href="function.oci-new-descriptor.php">oci_new_descriptor</a> — Initializes a new empty LOB or FILE descriptor</li><li><a href="function.oci-num-fields.php">oci_num_fields</a> — Returns the number of result columns in a statement</li><li><a href="function.oci-num-rows.php">oci_num_rows</a> — Returns number of rows affected during statement execution</li><li><a href="function.oci-parse.php">oci_parse</a> — Prepares an Oracle statement for execution</li><li><a href="function.oci-password-change.php">oci_password_change</a> — Changes password of Oracle's user</li><li><a href="function.oci-pconnect.php">oci_pconnect</a> — Connect to an Oracle database using a persistent connection</li><li><a href="function.oci-register-taf-callback.php">oci_register_taf_callback</a> — Register a user-defined callback function for Oracle Database TAF</li><li><a href="function.oci-result.php">oci_result</a> — Returns field's value from the fetched row</li><li><a href="function.oci-rollback.php">oci_rollback</a> — Rolls back the outstanding database transaction</li><li><a href="function.oci-server-version.php">oci_server_version</a> — Returns the Oracle Database version</li><li><a href="function.oci-set-action.php">oci_set_action</a> — Sets the action name</li><li><a href="function.oci-set-call-timout.php">oci_set_call_timeout</a> — Sets a millisecond timeout for database calls</li><li><a href="function.oci-set-client-identifier.php">oci_set_client_identifier</a> — Sets the client identifier</li><li><a href="function.oci-set-client-info.php">oci_set_client_info</a> — Sets the client information</li><li><a href="function.oci-set-db-operation.php">oci_set_db_operation</a> — Sets the database operation</li><li><a href="function.oci-set-edition.php">oci_set_edition</a> — Sets the database edition</li><li><a href="function.oci-set-module-name.php">oci_set_module_name</a> — Sets the module name</li><li><a href="function.oci-set-prefetch.php">oci_set_prefetch</a> — Sets number of rows to be prefetched by queries</li><li><a href="function.oci-set-prefetch-lob.php">oci_set_prefetch_lob</a> — Sets the amount of data prefetched for each CLOB or BLOB.</li><li><a href="function.oci-statement-type.php">oci_statement_type</a> — Returns the type of a statement</li><li><a href="function.oci-unregister-taf-callback.php">oci_unregister_taf_callback</a> — Unregister a user-defined callback function for Oracle Database TAF</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/oci8/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.oci8%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.oci8&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.oci8.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="67051">  <div class="votes">
    <div id="Vu67051">
    <a href="/manual/vote-note.php?id=67051&amp;page=ref.oci8&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67051">
    <a href="/manual/vote-note.php?id=67051&amp;page=ref.oci8&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67051" title="51% like this...">
    1
    </div>
  </div>
  <a href="#67051" class="name">
  <strong class="user"><em>Javi Ros</em></strong></a><a class="genanchor" href="#67051"> &para;</a><div class="date" title="2006-06-02 07:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67051">
<div class="phpcode"><code><span class="html">Here are the translate of some functions from ORA to OCI:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">Ora_Logon</span><span class="keyword">(</span><span class="default">$usuario</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">)
<br />{
<br />        </span><span class="default">$con </span><span class="keyword">= </span><span class="default">oci_connect</span><span class="keyword">(</span><span class="default">$usuario</span><span class="keyword">,</span><span class="default">$password</span><span class="keyword">);
<br />        return </span><span class="default">$con</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">Ora_Open</span><span class="keyword">(</span><span class="default">$conexion</span><span class="keyword">) {
<br />        </span><span class="default">$cursor</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]=</span><span class="default">$conexion</span><span class="keyword">;
<br />        return </span><span class="default">$cursor</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">Ora_Parse</span><span class="keyword">(&amp;</span><span class="default">$cursor</span><span class="keyword">, </span><span class="default">$consulta</span><span class="keyword">) {
<br />        </span><span class="default">$cursor</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="default">oci_parse</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$consulta</span><span class="keyword">);
<br />        return </span><span class="default">$cursor</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">Ora_Exec</span><span class="keyword">(&amp;</span><span class="default">$cursor</span><span class="keyword">) {
<br />        </span><span class="default">oci_execute</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />        </span><span class="default">$cursor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]=</span><span class="default">1</span><span class="keyword">;
<br />        return </span><span class="default">$cursor</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">Ora_Fetch</span><span class="keyword">(&amp;</span><span class="default">$cursor</span><span class="keyword">)
<br />{
<br />        if (</span><span class="default">$cursor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] == </span><span class="default">1</span><span class="keyword">) </span><span class="default">$cursor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">;
<br />        return </span><span class="default">oci_fetch</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />}
<br />
<br />function </span><span class="default">Ora_GetColumn</span><span class="keyword">(&amp;</span><span class="default">$cursor</span><span class="keyword">, </span><span class="default">$indice</span><span class="keyword">)
<br />{
<br />        if (</span><span class="default">$cursor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] == </span><span class="default">1</span><span class="keyword">) {
<br />                </span><span class="default">Ora_Fetch</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">);
<br />                </span><span class="default">$cursor</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]=</span><span class="default">0</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">$valor </span><span class="keyword">= </span><span class="default">oci_result</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">$indice</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);
<br />        return </span><span class="default">$valor</span><span class="keyword">;
<br />}
<br />
<br />function </span><span class="default">Ora_Close</span><span class="keyword">(&amp;</span><span class="default">$cursor</span><span class="keyword">)
<br />{
<br />        unset(</span><span class="default">$cursor</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />}
<br />
<br />function </span><span class="default">Ora_Logoff</span><span class="keyword">(</span><span class="default">$conexion</span><span class="keyword">) {
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68362">  <div class="votes">
    <div id="Vu68362">
    <a href="/manual/vote-note.php?id=68362&amp;page=ref.oci8&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68362">
    <a href="/manual/vote-note.php?id=68362&amp;page=ref.oci8&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68362" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#68362" class="name">
  <strong class="user"><em>greatval &lt;wow&gt; gmail &lt;dot&gt; com</em></strong></a><a class="genanchor" href="#68362"> &para;</a><div class="date" title="2006-07-24 09:30"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68362">
<div class="phpcode"><code><span class="html">For use PHPv5 functions in PHPv4 i use simple script:
<br /><span class="default">&lt;?php
<br />$funcs</span><span class="keyword">=array(
<br />        </span><span class="string">'oci_connect'</span><span class="keyword">=&gt;</span><span class="string">'OCILogon'</span><span class="keyword">,
<br />        </span><span class="string">'oci_parse'</span><span class="keyword">=&gt;</span><span class="string">'OCIParse'</span><span class="keyword">,
<br />        </span><span class="string">'oci_execute'</span><span class="keyword">=&gt;</span><span class="string">'OCIExecute'</span><span class="keyword">,
<br />        </span><span class="string">'oci_fetch'</span><span class="keyword">=&gt;</span><span class="string">'OCIFetch'</span><span class="keyword">,
<br />        </span><span class="string">'oci_num_fields'</span><span class="keyword">=&gt;</span><span class="string">'OCINumCols'</span><span class="keyword">,
<br />        </span><span class="string">'oci_field_name'</span><span class="keyword">=&gt;</span><span class="string">'OCIColumnName'</span><span class="keyword">,
<br />        </span><span class="string">'oci_result'</span><span class="keyword">=&gt;</span><span class="string">'OCIResult'</span><span class="keyword">,
<br />        </span><span class="string">'oci_free_statement'</span><span class="keyword">=&gt;</span><span class="string">'OCIFreeStatement'</span><span class="keyword">,
<br />);
<br /></span><span class="comment">// yoy can add yours pairs of funcs.
<br />
<br /></span><span class="keyword">foreach (</span><span class="default">$funcs </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">)
<br />    {
<br />        if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">))
<br />            {
<br />                </span><span class="default">$arg_string</span><span class="keyword">=</span><span class="string">'$p0'</span><span class="keyword">;
<br />                for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">20</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {
<br />                    </span><span class="default">$arg_string</span><span class="keyword">.=</span><span class="string">',$p'</span><span class="keyword">.</span><span class="default">$i</span><span class="keyword">;
<br />                }
<br />                eval (</span><span class="string">'function '</span><span class="keyword">.</span><span class="default">$k</span><span class="keyword">.</span><span class="string">' () {
<br />                        list('</span><span class="keyword">.</span><span class="default">$arg_string</span><span class="keyword">.</span><span class="string">')=func_get_args();
<br />                        return '</span><span class="keyword">.</span><span class="default">$v</span><span class="keyword">.</span><span class="string">'('</span><span class="keyword">.</span><span class="default">$arg_string</span><span class="keyword">.</span><span class="string">');
<br />                        }
<br />                '</span><span class="keyword">);
<br />            }
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />simple, but it work. :-)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.oci8&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.oci8.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.oci8.php">OCI8</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.oci8.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="oci8.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="oci8.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="oci8.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="oci8.connection.php" title="OCI8 Connection Handling and Connection Pooling">OCI8 Connection Handling and Connection Pooling</a>
                        </li>
                                                <li class="">
                            <a href="oci8.fan.php" title="OCI8 Fast Application Notification (FAN) Support">OCI8 Fast Application Notification (FAN) Support</a>
                        </li>
                                                <li class="">
                            <a href="oci8.taf.php" title="OCI8 Transparent Application Failover (TAF) Support">OCI8 Transparent Application Failover (TAF) Support</a>
                        </li>
                                                <li class="">
                            <a href="oci8.dtrace.php" title="OCI8 and DTrace Dynamic Tracing">OCI8 and DTrace Dynamic Tracing</a>
                        </li>
                                                <li class="">
                            <a href="oci8.datatypes.php" title="Supported Datatypes">Supported Datatypes</a>
                        </li>
                                                <li class="current">
                            <a href="ref.oci8.php" title="OCI8 Functions">OCI8 Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.ocicollection.php" title="OCICollection">OCICollection</a>
                        </li>
                                                <li class="">
                            <a href="class.ocilob.php" title="OCILob">OCILob</a>
                        </li>
                                                <li class="">
                            <a href="oldaliases.oci8.php" title="OCI8 Obsolete Aliases and Functions">OCI8 Obsolete Aliases and Functions</a>
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
