<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pg_escape_bytea - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pg-escape-bytea.php">
 <link rel="shorturl" href="https://www.php.net/pg-escape-bytea">
 <link rel="alternate" href="https://www.php.net/pg-escape-bytea" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pgsql.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pg-end-copy.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pg-escape-identifier.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pg-escape-bytea.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pg-escape-bytea.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pg-escape-bytea.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pg-escape-bytea.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pg-escape-bytea.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pg-escape-bytea.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pg-escape-bytea.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pg-escape-bytea.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pg-escape-bytea.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pg-escape-bytea.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pg-escape-bytea.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Escape a string for insertion into a bytea field" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pg_escape_bytea - Manual" />
<meta name="twitter:description" content="Escape a string for insertion into a bytea field" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pg_escape_bytea - Manual" />
<meta itemprop="description" content="Escape a string for insertion into a bytea field" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Escape a string for insertion into a bytea field" />

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
        <a href="function.pg-escape-identifier.php">
          pg_escape_identifier &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pg-end-copy.php">
          &laquo; pg_end_copy        </a>
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
            <option value='en/function.pg-escape-bytea.php' selected="selected">English</option>
            <option value='de/function.pg-escape-bytea.php'>German</option>
            <option value='es/function.pg-escape-bytea.php'>Spanish</option>
            <option value='fr/function.pg-escape-bytea.php'>French</option>
            <option value='it/function.pg-escape-bytea.php'>Italian</option>
            <option value='ja/function.pg-escape-bytea.php'>Japanese</option>
            <option value='pt_BR/function.pg-escape-bytea.php'>Brazilian Portuguese</option>
            <option value='ru/function.pg-escape-bytea.php'>Russian</option>
            <option value='tr/function.pg-escape-bytea.php'>Turkish</option>
            <option value='uk/function.pg-escape-bytea.php'>Ukrainian</option>
            <option value='zh/function.pg-escape-bytea.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pg-escape-bytea" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pg_escape_bytea</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pg_escape_bytea</span> &mdash; <span class="dc-title">
   Escape a string for insertion into a bytea field
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.pg-escape-bytea-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pg_escape_bytea</strong></span>(<span class="methodparam"><span class="type"><a href="class.pgsql-connection.php" class="type PgSql\Connection">PgSql\Connection</a></span> <code class="parameter">$connection</code><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>pg_escape_bytea()</strong></span> escapes string for
   bytea datatype.  It returns escaped string.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    When you <code class="literal">SELECT</code> a bytea type, PostgreSQL returns octal byte values
    prefixed with &#039;\&#039; (e.g. \032). Users are supposed to convert back to
    binary format manually.
   </p>
   <p class="para">
    This function requires PostgreSQL 7.2 or later. With PostgreSQL
    7.2.0 and 7.2.1, bytea values must be cast when you enable
    multi-byte support. i.e. <code class="literal">INSERT INTO test_table (image)
    VALUES (&#039;$image_escaped&#039;::bytea);</code> PostgreSQL 7.2.2 or
    later does not need a cast. The exception is when the client and backend
    character encoding does not match, and there may be multi-byte
    stream error. User must then cast to bytea to avoid this error.
   </p>
  </p></blockquote>
 </div>


<div class="refsect1 parameters" id="refsect1-function.pg-escape-bytea-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">connection</code></dt>
     <dd>
      <p class="para">An <span class="classname"><a href="class.pgsql-connection.php" class="classname">PgSql\Connection</a></span> instance.
When <code class="parameter">connection</code> is unspecified, the default connection is used.
The default connection is the last connection made by <span class="function"><a href="function.pg-connect.php" class="function">pg_connect()</a></span>
or <span class="function"><a href="function.pg-pconnect.php" class="function">pg_pconnect()</a></span>.
<div class="warning"><strong class="warning">Warning</strong><p class="simpara">As of PHP 8.1.0, using the default connection is deprecated.</p></div></p>
     </dd>
    
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       A <span class="type"><a href="language.types.string.php" class="type string">string</a></span> containing text or binary data to be inserted into a bytea
       column.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pg-escape-bytea-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A <span class="type"><a href="language.types.string.php" class="type string">string</a></span> containing the escaped data.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.pg-escape-bytea-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.pg-escape-bytea-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2052">
    <p><strong>Example #1 <span class="function"><strong>pg_escape_bytea()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php <br />  </span><span style="color: #FF8000">// Connect to the database<br />  </span><span style="color: #0000BB">$dbconn </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'dbname=foo'</span><span style="color: #007700">);<br />  <br />  </span><span style="color: #FF8000">// Read in a binary file<br />  </span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'image1.jpg'</span><span style="color: #007700">);<br />  <br />  </span><span style="color: #FF8000">// Escape the binary data<br />  </span><span style="color: #0000BB">$escaped </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_escape_bytea</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />  <br />  </span><span style="color: #FF8000">// Insert it into the database<br />  </span><span style="color: #0000BB">pg_query</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO gallery (name, data) VALUES ('Pine trees', '</span><span style="color: #007700">{</span><span style="color: #0000BB">$escaped</span><span style="color: #007700">}</span><span style="color: #DD0000">')"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.pg-escape-bytea-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pg-unescape-bytea.php" class="function" rel="rdfs-seeAlso">pg_unescape_bytea()</a> - Unescape binary for bytea type</span></li>
    <li><span class="function"><a href="function.pg-escape-string.php" class="function" rel="rdfs-seeAlso">pg_escape_string()</a> - Escape a string for query</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pgsql/functions/pg-escape-bytea.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pg-escape-bytea%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pg-escape-bytea&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-escape-bytea.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="89036">  <div class="votes">
    <div id="Vu89036">
    <a href="/manual/vote-note.php?id=89036&amp;page=function.pg-escape-bytea&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89036">
    <a href="/manual/vote-note.php?id=89036&amp;page=function.pg-escape-bytea&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89036" title="90% like this...">
    9
    </div>
  </div>
  <a href="#89036" class="name">
  <strong class="user"><em>ynzhang from lakeheadu of ca</em></strong></a><a class="genanchor" href="#89036"> &para;</a><div class="date" title="2009-02-18 01:44"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89036">
<div class="phpcode"><code><span class="html">The reason pg_unescape_bytea() do not exactly reproduce the binary data created by pg_escape_bytea() is because the backslash \ and single quote ' are double escaped by the pg_escape_bytea() function. This will lead to image seems corrupted when retrieve from the bytea field. The proper way to escape&amp;unescape a binary string into a PG bytea field as follow:
<br />
<br /><span class="default">&lt;?php
<br />$escaped_data </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"\\\\"</span><span class="keyword">, </span><span class="string">"''"</span><span class="keyword">), array(</span><span class="string">"\\"</span><span class="keyword">, </span><span class="string">"'"</span><span class="keyword">), </span><span class="default">pg_escape_bytea</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">));
<br /></span><span class="comment">/* and later unescape the escaped data from the bytea field with following to get the original binary data */
<br />
<br /></span><span class="default">$original_data </span><span class="keyword">= </span><span class="default">pg_unescape_bytea</span><span class="keyword">(</span><span class="default">$escaped_data</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />more details at: <a href="http://archives.postgresql.org/pgsql-php/2007-02/msg00014.php" rel="nofollow" target="_blank">http://archives.postgresql.org/pgsql-php/2007-02/msg00014.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="121388">  <div class="votes">
    <div id="Vu121388">
    <a href="/manual/vote-note.php?id=121388&amp;page=function.pg-escape-bytea&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121388">
    <a href="/manual/vote-note.php?id=121388&amp;page=function.pg-escape-bytea&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121388" title="75% like this...">
    6
    </div>
  </div>
  <a href="#121388" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#121388"> &para;</a><div class="date" title="2017-07-17 02:56"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121388">
<div class="phpcode"><code><span class="html">PostgreSQL 9.0 introduced a new hexadecimal-based representation for bytea data that is preferred over the escaping mechanism implemented by this function.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">pg_escape_byteahex</span><span class="keyword">(</span><span class="default">$binary</span><span class="keyword">)<br />{<br />    return </span><span class="string">"E'\\\\x"</span><span class="keyword">.</span><span class="default">bin2hex</span><span class="keyword">(</span><span class="default">$binary</span><span class="keyword">).</span><span class="string">"'"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98792">  <div class="votes">
    <div id="Vu98792">
    <a href="/manual/vote-note.php?id=98792&amp;page=function.pg-escape-bytea&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98792">
    <a href="/manual/vote-note.php?id=98792&amp;page=function.pg-escape-bytea&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98792" title="60% like this...">
    4
    </div>
  </div>
  <a href="#98792" class="name">
  <strong class="user"><em>Mike-RaWare</em></strong></a><a class="genanchor" href="#98792"> &para;</a><div class="date" title="2010-07-08 02:03"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98792">
<div class="phpcode"><code><span class="html">To prevent any problems with encoding you could use hexadecimal or base64 input to save and retrieve data to the database:<br /><br /><span class="default">&lt;?php <br />  </span><span class="comment">// Connect to the database<br />  </span><span class="default">$dbconn </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">( </span><span class="string">'dbname=foo' </span><span class="keyword">);<br />  <br />  </span><span class="comment">// Read in a binary file<br />  </span><span class="default">$data </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">( </span><span class="string">'image1.jpg' </span><span class="keyword">);<br />  <br />  </span><span class="comment">// Escape the binary data<br />  </span><span class="default">$escaped </span><span class="keyword">= </span><span class="default">bin2hex</span><span class="keyword">( </span><span class="default">$data </span><span class="keyword">);<br />  <br />  </span><span class="comment">// Insert it into the database<br />  </span><span class="default">pg_query</span><span class="keyword">( </span><span class="string">"INSERT INTO gallery (name, data) VALUES ('Pine trees', decode('</span><span class="keyword">{</span><span class="default">$escaped</span><span class="keyword">}</span><span class="string">' , 'hex'))" </span><span class="keyword">);<br /><br />  </span><span class="comment">// Get the bytea data<br />  </span><span class="default">$res </span><span class="keyword">= </span><span class="default">pg_query</span><span class="keyword">(</span><span class="string">"SELECT encode(data, 'base64') AS data FROM gallery WHERE name='Pine trees'"</span><span class="keyword">);  <br />  </span><span class="default">$raw </span><span class="keyword">= </span><span class="default">pg_fetch_result</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">, </span><span class="string">'data'</span><span class="keyword">);<br />  <br />  </span><span class="comment">// Convert to binary and send to the browser<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: image/jpeg'</span><span class="keyword">);<br />  echo </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$raw</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129681">  <div class="votes">
    <div id="Vu129681">
    <a href="/manual/vote-note.php?id=129681&amp;page=function.pg-escape-bytea&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129681">
    <a href="/manual/vote-note.php?id=129681&amp;page=function.pg-escape-bytea&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129681" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129681" class="name">
  <strong class="user"><em>tabflo at gmx dot at</em></strong></a><a class="genanchor" href="#129681"> &para;</a><div class="date" title="2024-07-31 07:25"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129681">
<div class="phpcode"><code><span class="html">this method des the same as pg_escape_bytea have fun with it:<br /><br />public function escape_bytea($data) {<br />        $escaped = '';<br /><br />        for ($i = 0; $i &lt; strlen($data); $i++) {<br />            $char = $data[$i];<br />            $ascii = ord($char);<br /><br />            $escaped.= ($ascii &lt; 32 || $ascii &gt; 126 ? sprintf('\\%03o', $ascii) : ($char == '\\' ? '\\\\' : $char) );<br />        }<br />        return $escaped;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="34831">  <div class="votes">
    <div id="Vu34831">
    <a href="/manual/vote-note.php?id=34831&amp;page=function.pg-escape-bytea&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34831">
    <a href="/manual/vote-note.php?id=34831&amp;page=function.pg-escape-bytea&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34831" title="100% like this...">
    1
    </div>
  </div>
  <a href="#34831" class="name">
  <strong class="user"><em>Mocha</em></strong></a><a class="genanchor" href="#34831"> &para;</a><div class="date" title="2003-08-07 05:20"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34831">
<div class="phpcode"><code><span class="html">to unescape_bytea use stripcslashes(). If you need to escape bytea and don't have pg_escape_bytea() function then use:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">escByteA</span><span class="keyword">(</span><span class="default">$binData</span><span class="keyword">) {
<br />  </span><span class="comment">/**
<br />   * \134 = 92 = backslash, \000 = 00 = NULL, \047 = 39 = Single Quote
<br />   *
<br />   * str_replace() replaces the searches array in order. Therefore, we must
<br />   * process the 'backslash' character first. If we process it last, it'll
<br />   * replace all the escaped backslashes from the other searches that came
<br />   * before.
<br />   */
<br />  </span><span class="default">$search </span><span class="keyword">= array(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">92</span><span class="keyword">), </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">), </span><span class="default">chr</span><span class="keyword">(</span><span class="default">39</span><span class="keyword">));
<br />  </span><span class="default">$replace </span><span class="keyword">= array(</span><span class="string">'\\\134'</span><span class="keyword">, </span><span class="string">'\\\000'</span><span class="keyword">, </span><span class="string">'\\\047'</span><span class="keyword">);
<br />  </span><span class="default">$binData </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$search</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$binData</span><span class="keyword">);
<br />  return </span><span class="default">$binData</span><span class="keyword">;
<br />  </span><span class="comment">//echo "&lt;pre&gt;$binData&lt;/pre&gt;";
<br />  //exit;
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114615">  <div class="votes">
    <div id="Vu114615">
    <a href="/manual/vote-note.php?id=114615&amp;page=function.pg-escape-bytea&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114615">
    <a href="/manual/vote-note.php?id=114615&amp;page=function.pg-escape-bytea&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114615" title="50% like this...">
    0
    </div>
  </div>
  <a href="#114615" class="name">
  <strong class="user"><em>Michael</em></strong></a><a class="genanchor" href="#114615"> &para;</a><div class="date" title="2014-03-12 03:10"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114615">
<div class="phpcode"><code><span class="html">using  pg_escape_bytea without 'E' escape tag<br /><span class="default">&lt;?php <br />  </span><span class="comment">// Die Binärdaten maskieren<br />  </span><span class="default">$escaped </span><span class="keyword">= </span><span class="default">pg_escape_bytea</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br />  </span><span class="comment">// und in die Datenbank einfügen (falsch/wrong)<br />  </span><span class="default">pg_query</span><span class="keyword">(</span><span class="string">"INSERT INTO gallery (name, data) VALUES ('Pine trees', E'</span><span class="default">$escaped</span><span class="string">')"</span><span class="keyword">);<br /><br />  </span><span class="comment">// und in die Datenbank einfügen (richtig/right)<br />  </span><span class="default">pg_query</span><span class="keyword">(</span><span class="string">"INSERT INTO gallery (name, data) VALUES ('Pine trees', '</span><span class="default">$escaped</span><span class="string">')"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92294">  <div class="votes">
    <div id="Vu92294">
    <a href="/manual/vote-note.php?id=92294&amp;page=function.pg-escape-bytea&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92294">
    <a href="/manual/vote-note.php?id=92294&amp;page=function.pg-escape-bytea&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92294" title="no votes...">
    0
    </div>
  </div>
  <a href="#92294" class="name">
  <strong class="user"><em>gglockner AT NOSPAMdwaffler DOT com</em></strong></a><a class="genanchor" href="#92294"> &para;</a><div class="date" title="2009-07-17 02:13"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92294">
<div class="phpcode"><code><span class="html">If you're getting errors about nonstandard use of \\ in a string literal, then you need to escape the encoded bytea as follows:
<br />
<br /><span class="default">&lt;?php
<br />$escaped </span><span class="keyword">= </span><span class="default">pg_escape_bytea</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);
<br /></span><span class="default">pg_query</span><span class="keyword">(</span><span class="string">"INSERT INTO gallery (name, data) VALUES ('Pine trees', E'</span><span class="default">$escaped</span><span class="string">'::bytea)"</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="24476">  <div class="votes">
    <div id="Vu24476">
    <a href="/manual/vote-note.php?id=24476&amp;page=function.pg-escape-bytea&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24476">
    <a href="/manual/vote-note.php?id=24476&amp;page=function.pg-escape-bytea&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24476" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#24476" class="name">
  <strong class="user"><em>php at tobias dot olsson dot be</em></strong></a><a class="genanchor" href="#24476"> &para;</a><div class="date" title="2002-08-17 09:56"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24476">
<div class="phpcode"><code><span class="html">if you need to change back bytea from the db to normal data, this will do that:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">pg_unescape_bytea</span><span class="keyword">(</span><span class="default">$bytea</span><span class="keyword">) {
<br />return eval(</span><span class="string">"return \""</span><span class="keyword">.</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'$'</span><span class="keyword">, </span><span class="string">'\\$'</span><span class="keyword">, </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'"'</span><span class="keyword">, </span><span class="string">'\\"'</span><span class="keyword">, </span><span class="default">$bytea</span><span class="keyword">)).</span><span class="string">"\";"</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">// use like this
<br /></span><span class="default">$rs </span><span class="keyword">= </span><span class="default">pg_query</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"SELECT image from images LIMIT 1"</span><span class="keyword">);
<br /></span><span class="default">$image </span><span class="keyword">= </span><span class="default">pg_unescape_bytea</span><span class="keyword">(</span><span class="default">pg_fetch_result</span><span class="keyword">(</span><span class="default">$rs</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />/Tobias</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pg-escape-bytea&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-escape-bytea.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
