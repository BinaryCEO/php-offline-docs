<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pg_insert - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pg-insert.php">
 <link rel="shorturl" href="https://www.php.net/pg-insert">
 <link rel="alternate" href="https://www.php.net/pg-insert" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pgsql.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pg-host.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pg-last-error.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pg-insert.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pg-insert.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pg-insert.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pg-insert.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pg-insert.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pg-insert.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pg-insert.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pg-insert.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pg-insert.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pg-insert.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pg-insert.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Insert array into table" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pg_insert - Manual" />
<meta name="twitter:description" content="Insert array into table" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pg_insert - Manual" />
<meta itemprop="description" content="Insert array into table" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Insert array into table" />

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
        <a href="function.pg-last-error.php">
          pg_last_error &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pg-host.php">
          &laquo; pg_host        </a>
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
            <option value='en/function.pg-insert.php' selected="selected">English</option>
            <option value='de/function.pg-insert.php'>German</option>
            <option value='es/function.pg-insert.php'>Spanish</option>
            <option value='fr/function.pg-insert.php'>French</option>
            <option value='it/function.pg-insert.php'>Italian</option>
            <option value='ja/function.pg-insert.php'>Japanese</option>
            <option value='pt_BR/function.pg-insert.php'>Brazilian Portuguese</option>
            <option value='ru/function.pg-insert.php'>Russian</option>
            <option value='tr/function.pg-insert.php'>Turkish</option>
            <option value='uk/function.pg-insert.php'>Ukrainian</option>
            <option value='zh/function.pg-insert.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pg-insert" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pg_insert</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pg_insert</span> &mdash; <span class="dc-title">
   Insert array into table
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.pg-insert-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pg_insert</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.pgsql-connection.php" class="type PgSql\Connection">PgSql\Connection</a></span> <code class="parameter">$connection</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$table_name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$values</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-exec">PGSQL_DML_EXEC</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="class.pgsql-result.php" class="type PgSql\Result">PgSql\Result</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>pg_insert()</strong></span> inserts the values
   of <code class="parameter">values</code> into the table specified
   by <code class="parameter">table_name</code>.
  </p>
  <p class="para">
   If <code class="parameter">flags</code> is specified,
   <span class="function"><a href="function.pg-convert.php" class="function">pg_convert()</a></span> is applied to
   <code class="parameter">values</code> with the specified flags.
  </p>
  <p class="para">
   By default <span class="function"><strong>pg_insert()</strong></span> passes raw values.
   Values must be escaped or the <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-escape">PGSQL_DML_ESCAPE</a></code></strong> flag
   must be specified in <code class="parameter">flags</code>.
   <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-escape">PGSQL_DML_ESCAPE</a></code></strong> quotes and escapes parameters/identifiers.
   Therefore, table/column names become case sensitive.
  </p>
  <p class="para">
   Note that neither escape nor prepared query can protect LIKE query,
   JSON, Array, Regex, etc. These parameters should be handled
   according to their contexts. i.e. Escape/validate values.
  </p>
 </div>


<div class="refsect1 parameters" id="refsect1-function.pg-insert-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">connection</code></dt>
     <dd>
      <p class="para">An <span class="classname"><a href="class.pgsql-connection.php" class="classname">PgSql\Connection</a></span> instance.</p>
     </dd>
    
    
     <dt><code class="parameter">table_name</code></dt>
     <dd>
      <p class="para">
       Name of the table into which to insert rows.  The table <code class="parameter">table_name</code> must at least
       have as many columns as <code class="parameter">values</code> has elements.
      </p>
     </dd>
    
    
     <dt><code class="parameter">values</code></dt>
     <dd>
      <p class="para">
       An <span class="type"><a href="language.types.array.php" class="type array">array</a></span> whose keys are field names in the table <code class="parameter">table_name</code>,
       and whose values are the values of those fields that are to be inserted.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       Any number of <strong><code>PGSQL_CONV_OPTS</code></strong>,
       <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-no-conv">PGSQL_DML_NO_CONV</a></code></strong>,
       <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-escape">PGSQL_DML_ESCAPE</a></code></strong>,
       <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-exec">PGSQL_DML_EXEC</a></code></strong>,
       <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-async">PGSQL_DML_ASYNC</a></code></strong> or
       <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-string">PGSQL_DML_STRING</a></code></strong> combined. If <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-string">PGSQL_DML_STRING</a></code></strong> is part of the
       <code class="parameter">flags</code> then query string is returned. When <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-no-conv">PGSQL_DML_NO_CONV</a></code></strong>
       or <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-escape">PGSQL_DML_ESCAPE</a></code></strong> is set, it does not call <span class="function"><a href="function.pg-convert.php" class="function">pg_convert()</a></span> internally.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pg-insert-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.. Or returns a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> on success if <strong><code><a href="pgsql.constants.php#constant.pgsql-dml-string">PGSQL_DML_STRING</a></code></strong> is passed
   via <code class="parameter">flags</code>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.pg-insert-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown when the specified table is invalid.
  </p>
  <p class="para">
   A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> or <span class="classname"><a href="class.typeerror.php" class="classname">TypeError</a></span> is thrown
   when the value or type of field does not match properly with a PostgreSQL&#039;s type.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.pg-insert-changelog">
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
      <td>8.3.0</td>
      <td>
       Now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> error when the specified table is invalid;
       previously an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was emitted.
      </td>
     </tr>

     <tr>
      <td>8.3.0</td>
      <td>
       Now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> or <span class="classname"><a href="class.typeerror.php" class="classname">TypeError</a></span> error
       when the value or type of field does not match properly with a PostgreSQL&#039;s type;
       previously an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was emitted.
      </td>
     </tr>

     <tr>
 <td>8.1.0</td>
 <td>
  Returns an <span class="classname"><a href="class.pgsql-result.php" class="classname">PgSql\Result</a></span> instance now;
  previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
 </td>
</tr>

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

 
 <div class="refsect1 examples" id="refsect1-function.pg-insert-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2077">
    <p><strong>Example #1 <span class="function"><strong>pg_insert()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php <br />  $dbconn </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'dbname=foo'</span><span style="color: #007700">);<br />  </span><span style="color: #FF8000">// This is safe somewhat, since all values are escaped.<br />  // However PostgreSQL supports JSON/Array. These are not<br />  // safe by neither escape nor prepared query.<br />  </span><span style="color: #0000BB">$res </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_insert</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbconn</span><span style="color: #007700">, </span><span style="color: #DD0000">'post_log'</span><span style="color: #007700">, </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">, </span><span style="color: #0000BB">PGSQL_DML_ESCAPE</span><span style="color: #007700">);<br />  if (</span><span style="color: #0000BB">$res</span><span style="color: #007700">) {<br />      echo </span><span style="color: #DD0000">"POST data is successfully logged\n"</span><span style="color: #007700">;<br />  } else {<br />      echo </span><span style="color: #DD0000">"User must have sent wrong inputs\n"</span><span style="color: #007700">;<br />  }<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.pg-insert-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pg-convert.php" class="function" rel="rdfs-seeAlso">pg_convert()</a> - Convert associative array values into forms suitable for SQL statements</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pgsql/functions/pg-insert.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pg-insert%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pg-insert&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-insert.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="39250">  <div class="votes">
    <div id="Vu39250">
    <a href="/manual/vote-note.php?id=39250&amp;page=function.pg-insert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39250">
    <a href="/manual/vote-note.php?id=39250&amp;page=function.pg-insert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39250" title="61% like this...">
    6
    </div>
  </div>
  <a href="#39250" class="name">
  <strong class="user"><em>shane at treesandthings dot com</em></strong></a><a class="genanchor" href="#39250"> &para;</a><div class="date" title="2004-01-21 08:04"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39250">
<div class="phpcode"><code><span class="html">Returns SQL statement, slight improvement on the code from 'rorezende at hotmail dot com'.  This version adds bool values correctly.It also checks to make sure there is actually a value in the array before including it in the sql statement. (ie: null values or empty strings won't be added to the sql statement)<br /><br /><span class="default">&lt;?PHP<br /></span><span class="keyword">function </span><span class="default">db_build_insert</span><span class="keyword">(</span><span class="default">$table</span><span class="keyword">,</span><span class="default">$array</span><span class="keyword">)<br />{<br /><br />   </span><span class="default">$str </span><span class="keyword">= </span><span class="string">"insert into </span><span class="default">$table</span><span class="string"> "</span><span class="keyword">;<br />   </span><span class="default">$strn </span><span class="keyword">= </span><span class="string">"("</span><span class="keyword">;<br />   </span><span class="default">$strv </span><span class="keyword">= </span><span class="string">" VALUES ("</span><span class="keyword">;<br />   while(list(</span><span class="default">$name</span><span class="keyword">,</span><span class="default">$value</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) {<br /><br />       if(</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />                </span><span class="default">$strn </span><span class="keyword">.= </span><span class="string">"</span><span class="default">$name</span><span class="string">,"</span><span class="keyword">;<br />                </span><span class="default">$strv </span><span class="keyword">.= (</span><span class="default">$value </span><span class="keyword">? </span><span class="string">"true"</span><span class="keyword">:</span><span class="string">"false"</span><span class="keyword">) . </span><span class="string">","</span><span class="keyword">;<br />                continue;<br />        };<br /><br />       if(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />                </span><span class="default">$strn </span><span class="keyword">.= </span><span class="string">"</span><span class="default">$name</span><span class="string">,"</span><span class="keyword">;<br />                </span><span class="default">$strv </span><span class="keyword">.= </span><span class="string">"'</span><span class="default">$value</span><span class="string">',"</span><span class="keyword">;<br />                continue;<br />        }<br />       if (!</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) and (</span><span class="default">$value </span><span class="keyword">!= </span><span class="string">""</span><span class="keyword">)) {<br />                </span><span class="default">$strn </span><span class="keyword">.= </span><span class="string">"</span><span class="default">$name</span><span class="string">,"</span><span class="keyword">;<br />                </span><span class="default">$strv </span><span class="keyword">.= </span><span class="string">"</span><span class="default">$value</span><span class="string">,"</span><span class="keyword">;<br />                continue;<br />       }<br />   }<br />   </span><span class="default">$strn</span><span class="keyword">[</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$strn</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">] = </span><span class="string">')'</span><span class="keyword">;<br />   </span><span class="default">$strv</span><span class="keyword">[</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$strv</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">] = </span><span class="string">')'</span><span class="keyword">;<br />   </span><span class="default">$str </span><span class="keyword">.= </span><span class="default">$strn </span><span class="keyword">. </span><span class="default">$strv</span><span class="keyword">;<br />   return </span><span class="default">$str</span><span class="keyword">;<br /><br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49978">  <div class="votes">
    <div id="Vu49978">
    <a href="/manual/vote-note.php?id=49978&amp;page=function.pg-insert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49978">
    <a href="/manual/vote-note.php?id=49978&amp;page=function.pg-insert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49978" title="60% like this...">
    1
    </div>
  </div>
  <a href="#49978" class="name">
  <strong class="user"><em>skippy at zuavra dot net</em></strong></a><a class="genanchor" href="#49978"> &para;</a><div class="date" title="2005-02-14 07:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49978">
<div class="phpcode"><code><span class="html">Beware of the following: pg_insert() and pg_update() are adding slashes to all character-like fields they work with. This makes them SQL injection super-safe, but there are unwanted consequences, as follows:<br /><br />If you have a regular setup with magic_quotes_gcp=On, and you use pg_insert() or pg_update(), you will end up with fields that look as if you used addslashes() twice. To solve this, you can use stripslashes() on the data just before using it with pg_insert() or pg_update().<br /><br />There's another alternative, which seems better to me. Why make yourself crazy all over the code, adding slashes, stripping slashes, worrying whether magic_quotes_gpc is on or off and so on and so forth? Why do this, when the only place you actually need those slashes is right when you push the data into the database?<br /><br />So why not get rid of your addslashes() and stripslashes() from all over your code, and turn magic_quotes_gcp off. As long as you always use pg_insert() and pg_update() to do your DB work, you're SQL-injection safe AND slash-headache free.</span></code></div>
  </div>
 </div>
  <div class="note" id="78102">  <div class="votes">
    <div id="Vu78102">
    <a href="/manual/vote-note.php?id=78102&amp;page=function.pg-insert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78102">
    <a href="/manual/vote-note.php?id=78102&amp;page=function.pg-insert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78102" title="57% like this...">
    1
    </div>
  </div>
  <a href="#78102" class="name">
  <strong class="user"><em>jsnell at e-normous dot com</em></strong></a><a class="genanchor" href="#78102"> &para;</a><div class="date" title="2007-09-27 12:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom78102">
<div class="phpcode"><code><span class="html">If you need schema support, this function will do something similar to pg_insert:<br /><br />function pg_insert_with_schema($connection, $table, $updates) <br />{<br /> $schema = 'public';<br /> if (strpos($table, '.') !== false)<br />    list($schema, $table) = explode('.', $table);<br /><br />    if (count($updates) == 0) {<br />        $sql = "INSERT INTO $schema.\"$table\" DEFAULT VALUES";<br />            return pg_query($sql);<br />        } else {<br /> $sql = "INSERT INTO $schema.\"$table\" ";<br />            <br /> $sql .= '("';<br /> $sql .= join('", "', array_keys($updates));<br /> $sql .= '")';<br /><br /> $sql .= ' values (';<br /> for($i = 0; $i &lt; count($updates); $i++)<br />   $sql .= ($i != 0? ', ':'').'$'.($i+1);<br /> $sql .= ')';<br /> return pg_query_params($connection, $sql, array_values($updates));<br /> }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="106899">  <div class="votes">
    <div id="Vu106899">
    <a href="/manual/vote-note.php?id=106899&amp;page=function.pg-insert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106899">
    <a href="/manual/vote-note.php?id=106899&amp;page=function.pg-insert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106899" title="55% like this...">
    1
    </div>
  </div>
  <a href="#106899" class="name">
  <strong class="user"><em>phpuser at ego dot gen dot nz</em></strong></a><a class="genanchor" href="#106899"> &para;</a><div class="date" title="2011-12-16 09:12"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106899">
<div class="phpcode"><code><span class="html">This function cannot be used to insert a record with only default values - i.e. with an assoc_array of array()</span></code></div>
  </div>
 </div>
  <div class="note" id="126336">  <div class="votes">
    <div id="Vu126336">
    <a href="/manual/vote-note.php?id=126336&amp;page=function.pg-insert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126336">
    <a href="/manual/vote-note.php?id=126336&amp;page=function.pg-insert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126336" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126336" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126336"> &para;</a><div class="date" title="2021-08-12 04:56"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126336">
<div class="phpcode"><code><span class="html">$Result = pg_query_params($db,'INSERT INTO table1 (a, b, c) VALUES ($1,$2,$3) RETURNING *', array('1','2','3');<br />$Row = pg_fetch_assoc($Result);<br />pg_insert($db, 'table2', $Row);<br /><br />pg_insert fail silently if one or more fields on table2 have different names than on table1</span></code></div>
  </div>
 </div>
  <div class="note" id="42613">  <div class="votes">
    <div id="Vu42613">
    <a href="/manual/vote-note.php?id=42613&amp;page=function.pg-insert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42613">
    <a href="/manual/vote-note.php?id=42613&amp;page=function.pg-insert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42613" title="50% like this...">
    0
    </div>
  </div>
  <a href="#42613" class="name">
  <strong class="user"><em>mina86 at tlen dot pl</em></strong></a><a class="genanchor" href="#42613"> &para;</a><div class="date" title="2004-05-23 06:24"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42613">
<div class="phpcode"><code><span class="html">Next version :) My version checks whether value is bool, null, string or numeric and if one of the values is not function returns false if not. null values are inserted as NULL, bool as true or false and strings are add-shlashed before adding to query string. Note, that this function is not safe. SQL injection is possible with column names if you use $_POST or something similar as a $array.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">db_build_insert</span><span class="keyword">(</span><span class="default">$table</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">) {<br />  if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)===</span><span class="default">0</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />  </span><span class="default">$columns </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />  </span><span class="default">$values </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />  unset(</span><span class="default">$array</span><span class="keyword">);<br /><br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$c </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">); </span><span class="default">$i$c</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {<br />    if (</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">])) {<br />      </span><span class="default">$values</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$values</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]?</span><span class="string">'true'</span><span class="keyword">:</span><span class="string">'false'</span><span class="keyword">;<br />    } elseif (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">])) {<br />      </span><span class="default">$values</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="string">'NULL'</span><span class="keyword">;<br />    } elseif (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">])) {<br />      </span><span class="default">$values</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="string">"'" </span><span class="keyword">. </span><span class="default">addslashes</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) . </span><span class="string">"'"</span><span class="keyword">;<br />    } elseif (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">])) {<br />      return </span><span class="default">false</span><span class="keyword">;<br />    }<br />  }<br /><br />  return </span><span class="string">"INSERT INTO </span><span class="default">$table</span><span class="string"> (</span><span class="default">$column_quote</span><span class="string">" </span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">, </span><span class="default">$columns</span><span class="keyword">) .<br />    </span><span class="string">") VALUES (" </span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">, </span><span class="default">$values</span><span class="keyword">) . </span><span class="string">")"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70444">  <div class="votes">
    <div id="Vu70444">
    <a href="/manual/vote-note.php?id=70444&amp;page=function.pg-insert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70444">
    <a href="/manual/vote-note.php?id=70444&amp;page=function.pg-insert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70444" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#70444" class="name">
  <strong class="user"><em>excalibur at nospam dot icehouse dot net</em></strong></a><a class="genanchor" href="#70444"> &para;</a><div class="date" title="2006-10-16 08:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70444">
<div class="phpcode"><code><span class="html">Today at work I isolated a problem I was having with this function to how I was formatting the date.  I was assigning the date in my code as follows:<br /><br />$today = date( "Ymd" ); // ISO 8601<br /><br />This format is acceptable to PostgreSQL, as verified by their documentation and buy tests using psql.  However, to make it work in my code, I had to make the following change:<br /><br />$today = date( "Y-m-d" ); // also ISO 8601 format</span></code></div>
  </div>
 </div>
  <div class="note" id="34121">  <div class="votes">
    <div id="Vu34121">
    <a href="/manual/vote-note.php?id=34121&amp;page=function.pg-insert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34121">
    <a href="/manual/vote-note.php?id=34121&amp;page=function.pg-insert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34121" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#34121" class="name">
  <strong class="user"><em>rorezende at hotmail dot com</em></strong></a><a class="genanchor" href="#34121"> &para;</a><div class="date" title="2003-07-16 11:49"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34121">
<div class="phpcode"><code><span class="html">Time is money, then I write a function similar to pg_insert in PHP (only output sql statement) :<br /><br />   function db_mount_insert($table,$array) {<br /><br />    $str = "insert into $table (";<br />    while(list($name,$value) = each($array)) {        <br />        $str .= "$name,";        <br />    }<br />    $str[strlen($str)-1] = ')';<br />    $str .= " values (";<br />    reset($array);<br />    while(list($name,$value) = each($array)) {        <br />        if(is_string($value))<br />            $str .= "'$value',";<br />        else<br />            $str .= "$value,";<br />    }<br />    $str[strlen($str)-1] = ')';<br />    $str .= ";"    ;<br />    <br />    return $str;<br /><br />   }</span></code></div>
  </div>
 </div>
  <div class="note" id="65697">  <div class="votes">
    <div id="Vu65697">
    <a href="/manual/vote-note.php?id=65697&amp;page=function.pg-insert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65697">
    <a href="/manual/vote-note.php?id=65697&amp;page=function.pg-insert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65697" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#65697" class="name">
  <strong class="user"><em>ANDYCHR17 at HOTMAIL dot COM</em></strong></a><a class="genanchor" href="#65697"> &para;</a><div class="date" title="2006-05-05 02:50"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65697">
<div class="phpcode"><code><span class="html">Had a few issues while trying to run this in PHP 4.4.0:<br /><br />- I could not get it to work with column names that are SQL reserved words (example: desc, order). I was forced to change the column names in order to use the function. I could not put the column names in quotes, because that caused pg_convert() to fail.<br /><br />- Function was returning false until I passed the PGSQL_DML_EXEC option.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pg-insert&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-insert.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
