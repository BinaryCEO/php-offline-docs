<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pg_query_params - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pg-query-params.php">
 <link rel="shorturl" href="https://www.php.net/pg-query-params">
 <link rel="alternate" href="https://www.php.net/pg-query-params" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pgsql.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pg-query.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pg-result-error.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pg-query-params.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pg-query-params.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pg-query-params.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pg-query-params.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pg-query-params.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pg-query-params.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pg-query-params.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pg-query-params.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pg-query-params.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pg-query-params.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pg-query-params.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pg_query_params - Manual" />
<meta name="twitter:description" content="Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pg_query_params - Manual" />
<meta itemprop="description" content="Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text" />

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
        <a href="function.pg-result-error.php">
          pg_result_error &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pg-query.php">
          &laquo; pg_query        </a>
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
            <option value='en/function.pg-query-params.php' selected="selected">English</option>
            <option value='de/function.pg-query-params.php'>German</option>
            <option value='es/function.pg-query-params.php'>Spanish</option>
            <option value='fr/function.pg-query-params.php'>French</option>
            <option value='it/function.pg-query-params.php'>Italian</option>
            <option value='ja/function.pg-query-params.php'>Japanese</option>
            <option value='pt_BR/function.pg-query-params.php'>Brazilian Portuguese</option>
            <option value='ru/function.pg-query-params.php'>Russian</option>
            <option value='tr/function.pg-query-params.php'>Turkish</option>
            <option value='uk/function.pg-query-params.php'>Ukrainian</option>
            <option value='zh/function.pg-query-params.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pg-query-params" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pg_query_params</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pg_query_params</span> &mdash; <span class="dc-title">Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.pg-query-params-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pg_query_params</strong></span>(<span class="methodparam"><span class="type"><a href="class.pgsql-connection.php" class="type PgSql\Connection">PgSql\Connection</a></span> <code class="parameter">$connection</code><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$params</code></span>): <span class="type"><span class="type"><a href="class.pgsql-result.php" class="type PgSql\Result">PgSql\Result</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
    Submits a command to the server and waits for the result, with the ability 
    to pass parameters separately from the SQL command text.
  </p>
  <p class="para">
    <span class="function"><strong>pg_query_params()</strong></span> is like <span class="function"><a href="function.pg-query.php" class="function">pg_query()</a></span>, 
    but offers additional functionality: parameter 
    values can be specified separately from the command string proper. 
    <span class="function"><strong>pg_query_params()</strong></span> is supported only against PostgreSQL 7.4 or
    higher connections; it will fail when using earlier versions.
  </p>
  <p class="para">
    If parameters are used, they are referred to in the
    <code class="parameter">query</code> string as $1, $2, etc. The same parameter may
    appear more than once in the <code class="parameter">query</code>; the same value
    will be used in that case. <code class="parameter">params</code> specifies the
    actual values of the parameters. A <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> value in this array means the
    corresponding parameter is SQL <code class="literal">NULL</code>.
  </p>
  <p class="para">
    The primary advantage of <span class="function"><strong>pg_query_params()</strong></span> over <span class="function"><a href="function.pg-query.php" class="function">pg_query()</a></span> 
    is that parameter values 
    may be separated from the <code class="parameter">query</code> string, thus avoiding the need for tedious 
    and error-prone quoting and escaping. Unlike <span class="function"><a href="function.pg-query.php" class="function">pg_query()</a></span>, 
    <span class="function"><strong>pg_query_params()</strong></span> allows at 
    most one SQL command in the given string. (There can be semicolons in it, 
    but not more than one nonempty command.)
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.pg-query-params-parameters">
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
    
    
     <dt><code class="parameter">query</code></dt>
     <dd>
      <p class="para">
       The parameterized SQL statement.  Must contain only a single statement.
       (multiple statements separated by semi-colons are not allowed.)  If any parameters 
       are used, they are referred to as $1, $2, etc.
      </p>
      <p class="para">
       User-supplied values should always be passed as parameters, not
       interpolated into the query string, where they form possible
       <a href="security.database.sql-injection.php" class="link"> SQL injection</a>
       attack vectors and introduce bugs when handling data containing quotes.
       If for some reason you cannot use a parameter, ensure that interpolated
       values are <a href="function.pg-escape-string.php" class="link">properly escaped</a>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">params</code></dt>
     <dd>
      <p class="para">
        An array of parameter values to substitute for the $1, $2, etc. placeholders
        in the original prepared query string.  The number of elements in the array
        must match the number of placeholders.
      </p>
      <p class="para">
       Values intended for <code class="literal">bytea</code> fields are not supported as
       parameters. Use <span class="function"><a href="function.pg-escape-bytea.php" class="function">pg_escape_bytea()</a></span> instead, or use the
       large object functions.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pg-query-params-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
    An <span class="classname"><a href="class.pgsql-result.php" class="classname">PgSql\Result</a></span> instance on success,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.pg-query-params-changelog">
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

 
 <div class="refsect1 examples" id="refsect1-function.pg-query-params-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2105">
    <p><strong>Example #1 Using <span class="function"><strong>pg_query_params()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Connect to a database named "mary"<br /></span><span style="color: #0000BB">$dbconn </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"dbname=mary"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Find all shops named Joe's Widgets.  Note that it is not necessary to<br />// escape "Joe's Widgets"<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_query_params</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbconn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SELECT * FROM shops WHERE name = $1'</span><span style="color: #007700">, array(</span><span style="color: #DD0000">"Joe's Widgets"</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Compare against just using pg_query<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_escape_string</span><span style="color: #007700">(</span><span style="color: #DD0000">"Joe's Widgets"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">pg_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbconn</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT * FROM shops WHERE name = '</span><span style="color: #007700">{</span><span style="color: #0000BB">$str</span><span style="color: #007700">}</span><span style="color: #DD0000">'"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.pg-query-params-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pg-query.php" class="function" rel="rdfs-seeAlso">pg_query()</a> - Execute a query</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pgsql/functions/pg-query-params.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pg-query-params%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pg-query-params&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-query-params.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104434">  <div class="votes">
    <div id="Vu104434">
    <a href="/manual/vote-note.php?id=104434&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104434">
    <a href="/manual/vote-note.php?id=104434&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104434" title="66% like this...">
    7
    </div>
  </div>
  <a href="#104434" class="name">
  <strong class="user"><em>victor dot engmark at terreactive dot ch</em></strong></a><a class="genanchor" href="#104434"> &para;</a><div class="date" title="2011-06-15 03:00"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104434">
<div class="phpcode"><code><span class="html">You can't run multiple statements with pg_query_params, but you can still have transaction support without falling back to pg_query:<br /><br /><span class="default">&lt;?php<br />$connection </span><span class="keyword">= </span><span class="default">pg_connect</span><span class="keyword">(</span><span class="string">"host=127.0.0.1 port=5432 dbname=foo user=bar password=baz"</span><span class="keyword">);<br /></span><span class="default">pg_query</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'DROP TABLE IF EXISTS example'</span><span class="keyword">);<br /></span><span class="default">pg_query</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'CREATE TABLE example (col char(1))'</span><span class="keyword">);<br /></span><span class="default">pg_query</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'INSERT INTO example (col) VALUES (\'a\')'</span><span class="keyword">);<br /></span><span class="comment">// 'SELECT col FROM example' in another session returns "a"<br /></span><span class="default">pg_query</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'BEGIN'</span><span class="keyword">);<br /></span><span class="default">pg_query_params</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'UPDATE example SET col = $1'</span><span class="keyword">, array(</span><span class="string">'b'</span><span class="keyword">));<br /></span><span class="comment">// 'SELECT col FROM example' in another session still returns "a"<br /></span><span class="default">pg_query_params</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'UPDATE example SET col = $1'</span><span class="keyword">, array(</span><span class="string">'c'</span><span class="keyword">));<br /></span><span class="comment">// 'SELECT col FROM example' in another session still returns "a"<br /></span><span class="default">pg_query</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'COMMIT'</span><span class="keyword">);<br /></span><span class="comment">// 'SELECT col FROM example' in another session returns "c"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115064">  <div class="votes">
    <div id="Vu115064">
    <a href="/manual/vote-note.php?id=115064&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115064">
    <a href="/manual/vote-note.php?id=115064&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115064" title="69% like this...">
    5
    </div>
  </div>
  <a href="#115064" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#115064"> &para;</a><div class="date" title="2014-05-20 04:53"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115064">
<div class="phpcode"><code><span class="html">Debugging parameterised queries can be tedious, if you want to paste the query directly into PSQL. Here is a trick that helps:<br /><br /><span class="default">&lt;?php<br />$sql </span><span class="keyword">= </span><span class="string">"SELECT * from table WHERE col_a = $1 and col_b=$2 and col_c=$3"</span><span class="keyword">;<br /></span><span class="default">$params </span><span class="keyword">= array (</span><span class="default">42</span><span class="keyword">, </span><span class="string">"a string"</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">);<br /><br /></span><span class="default">$debug </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">( <br />        </span><span class="string">'/\$(\d+)\b/'</span><span class="keyword">,<br />        function(</span><span class="default">$match</span><span class="keyword">) use (</span><span class="default">$params</span><span class="keyword">) { <br />            </span><span class="default">$key</span><span class="keyword">=(</span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-</span><span class="default">1</span><span class="keyword">); return ( </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])?</span><span class="string">'NULL'</span><span class="keyword">:</span><span class="default">pg_escape_literal</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) ); <br />        },<br />        </span><span class="default">$sql</span><span class="keyword">);<br /><br />echo </span><span class="string">"</span><span class="default">$debug</span><span class="string">"</span><span class="keyword">;<br /></span><span class="comment">//prints:   SELECT * from table WHERE col_a = '42' and col_b='a string' and col_c=NULL<br /></span><span class="default">?&gt;<br /></span><br />This works correctly, except in the (unusual) case where we have a literal $N;  the regexp replaces it where it shouldn't.  For example:<br /><span class="default">&lt;?php<br /></span><span class="comment">//Both  ' ... $1 ... '   and  $1   get replaced; the former is wrong, the latter is right.<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"SELECT 'Your bill is for $1' AS invoice WHERE 7 = $1"</span><span class="keyword">;<br /></span><span class="default">$params </span><span class="keyword">= array(</span><span class="default">7</span><span class="keyword">);<br /></span><span class="comment">//$debug:  SELECT 'Your bill is for $7' AS invoice WHERE 7 = '7'"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95408">  <div class="votes">
    <div id="Vu95408">
    <a href="/manual/vote-note.php?id=95408&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95408">
    <a href="/manual/vote-note.php?id=95408&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95408" title="70% like this...">
    4
    </div>
  </div>
  <a href="#95408" class="name">
  <strong class="user"><em>ac at esilo dot com</em></strong></a><a class="genanchor" href="#95408"> &para;</a><div class="date" title="2010-01-01 10:45"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95408">
<div class="phpcode"><code><span class="html">pg_query and pg_query_params can be combined into a single function.  This also removes the need to construct a parameter array for pg_query_params:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">my_query</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">)
<br />{
<br />  if(</span><span class="default">func_num_args</span><span class="keyword">() == </span><span class="default">2</span><span class="keyword">)
<br />    return </span><span class="default">pg_query</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">);
<br />
<br />  </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();
<br />  </span><span class="default">$params </span><span class="keyword">= </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);
<br />  return </span><span class="default">pg_query_params</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Usage:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/* non-parameterized example */
<br /></span><span class="default">my_query</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"SELECT </span><span class="default">$val1</span><span class="string"> + </span><span class="default">$val2</span><span class="string">"</span><span class="keyword">);
<br />
<br /></span><span class="comment">/* parameterized example */
<br /></span><span class="default">my_query</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"SELECT $1 + $2"</span><span class="keyword">, </span><span class="default">$val1</span><span class="keyword">, </span><span class="default">$val2</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78072">  <div class="votes">
    <div id="Vu78072">
    <a href="/manual/vote-note.php?id=78072&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78072">
    <a href="/manual/vote-note.php?id=78072&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78072" title="75% like this...">
    2
    </div>
  </div>
  <a href="#78072" class="name">
  <strong class="user"><em>jsnell at e-normous dot com</em></strong></a><a class="genanchor" href="#78072"> &para;</a><div class="date" title="2007-09-26 03:57"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom78072">
<div class="phpcode"><code><span class="html">When inserting into a pg column of type bool, you cannot supply a PHP type of bool.  You must instead use a string "t" or "f". PHP attempts to change boolean values supplied as parameters to strings, and then attempts to use a blank string for false.<br /><br />Example of Failure:<br />pg_query_params('insert into table1 (bool_column) values ($1)', array(false));<br /><br />Works:<br />pg_query_params('insert into lookup_permissions (system) values ($1)', array(false ? 't' : 'f'));</span></code></div>
  </div>
 </div>
  <div class="note" id="71912">  <div class="votes">
    <div id="Vu71912">
    <a href="/manual/vote-note.php?id=71912&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71912">
    <a href="/manual/vote-note.php?id=71912&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71912" title="57% like this...">
    5
    </div>
  </div>
  <a href="#71912" class="name">
  <strong class="user"><em>dt309 at f2s dot com</em></strong></a><a class="genanchor" href="#71912"> &para;</a><div class="date" title="2006-12-22 12:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71912">
<div class="phpcode"><code><span class="html">If you need to provide multiple possible values for a field in a select query, then the following will help.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Assume that $values[] is an array containing the values you are interested in.<br /></span><span class="default">$values </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">);<br /><br /></span><span class="comment">// To select a variable number of arguments using pg_query() you can use:<br /></span><span class="default">$valuelist </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">, </span><span class="default">$values</span><span class="keyword">);<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">"SELECT * FROM table1 WHERE col1 IN (</span><span class="default">$valuelist</span><span class="string">)"</span><span class="keyword">;<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">pg_query</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">)<br />    or die(</span><span class="default">pg_last_error</span><span class="keyword">());<br /><br /></span><span class="comment">// You may therefore assume that the following will work.<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">'SELECT * FROM table1 WHERE col1 IN ($1)'</span><span class="keyword">;<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">pg_query_params</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">, array(</span><span class="default">$valuelist</span><span class="keyword">))<br />    or die(</span><span class="default">pg_last_error</span><span class="keyword">());<br /></span><span class="comment">// Produces error message: 'ERROR: invalid input syntax for integer'<br />// It only works when a SINGLE value specified.<br /><br />// Instead you must use the following approach:<br /></span><span class="default">$valuelist </span><span class="keyword">= </span><span class="string">'{' </span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">, </span><span class="default">$values </span><span class="keyword">. </span><span class="string">'}'<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">'SELECT * FROM table1 WHERE col1 = ANY ($1)'</span><span class="keyword">;<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">pg_query_params</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">, array(</span><span class="default">$valuelist</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />The error produced in this example is generated by PostGreSQL.<br /><br />The last method works by creating a SQL array containing the desired values. 'IN (...)' and ' = ANY (...)' are equivalent, but ANY is for working with arrays, and IN is for working with simple lists.</span></code></div>
  </div>
 </div>
  <div class="note" id="110467">  <div class="votes">
    <div id="Vu110467">
    <a href="/manual/vote-note.php?id=110467&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110467">
    <a href="/manual/vote-note.php?id=110467&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110467" title="60% like this...">
    1
    </div>
  </div>
  <a href="#110467" class="name">
  <strong class="user"><em>peter dot kehl+nospam at gmail dot com</em></strong></a><a class="genanchor" href="#110467"> &para;</a><div class="date" title="2012-10-24 09:39"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110467">
<div class="phpcode"><code><span class="html">Third parameter $params of pg_query_params() ignores nay part of the string values after a zero byte character - PHP "\0" or chr(0). That may be a result of serialize().
<br />
<br />See <a href="https://bugs.php.net/bug.php?id=63344" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=63344</a></span></code></div>
  </div>
 </div>
  <div class="note" id="108335">  <div class="votes">
    <div id="Vu108335">
    <a href="/manual/vote-note.php?id=108335&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108335">
    <a href="/manual/vote-note.php?id=108335&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108335" title="100% like this...">
    1
    </div>
  </div>
  <a href="#108335" class="name">
  <strong class="user"><em>alec at smecher dot bc dot ca</em></strong></a><a class="genanchor" href="#108335"> &para;</a><div class="date" title="2012-04-18 03:17"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108335">
<div class="phpcode"><code><span class="html">Note that due to your locale's number formatting settings, you may not be able to pass a numeric value in as a parameter and have it arrive in PostgreSQL still a number.<br /><br />If your system locale uses "," as a decimal separator, the following will result in a database error:<br /><br />pg_query_params($conn, 'SELECT $1::numeric', array(3.5));<br /><br />For this to work, it's necessary to manually convert 3.5 to a string using e.g. number_format.<br /><br />(I filed this as bug #46408, but apparently it's expected behavior.)</span></code></div>
  </div>
 </div>
  <div class="note" id="91083">  <div class="votes">
    <div id="Vu91083">
    <a href="/manual/vote-note.php?id=91083&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91083">
    <a href="/manual/vote-note.php?id=91083&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91083" title="100% like this...">
    1
    </div>
  </div>
  <a href="#91083" class="name">
  <strong class="user"><em>strata_ranger at hotmail dot com</em></strong></a><a class="genanchor" href="#91083"> &para;</a><div class="date" title="2009-05-24 09:03"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91083">
<div class="phpcode"><code><span class="html">Regarding boolean values, just typecast them as (integer) when passing them in your query -- '0' and '1' are perfectly acceptable literals for SQL boolean input:<br /><br />- <a href="http://www.postgresql.org/docs/8.2/interactive/datatype-boolean.html" rel="nofollow" target="_blank">http://www.postgresql.org/docs/8.2/interactive/datatype-boolean.html</a><br /><br />It is also safe to write your paramerized query in double-quotes, which allows you to mix constant values and placeholders in your query without having to worry about how whether PHP will attempt to substitute any variables in your parameterized string.<br /><br />Of course this also means that unlike PHP's double-quoted string syntax, you CAN include literal $1, $2, etc. inside SQL strings, e.g:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Works ($1 is a placeholder, $2 is meant literally)<br /></span><span class="default">pg_query_params</span><span class="keyword">(</span><span class="string">"INSERT INTO foo (col1, col2) VALUES ($1, 'costs $2')"</span><span class="keyword">, Array(</span><span class="default">$data1</span><span class="keyword">));<br /><br /></span><span class="comment">// Throws an E_WARNING (passing too many parameters)<br /></span><span class="default">pg_query_params</span><span class="keyword">(</span><span class="string">"INSERT INTO foo (col1, col2) VALUES ($1, 'costs $2')"</span><span class="keyword">, Array(</span><span class="default">$data1</span><span class="keyword">, </span><span class="default">$data2</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70129">  <div class="votes">
    <div id="Vu70129">
    <a href="/manual/vote-note.php?id=70129&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70129">
    <a href="/manual/vote-note.php?id=70129&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70129" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#70129" class="name">
  <strong class="user"><em>mledford</em></strong></a><a class="genanchor" href="#70129"> &para;</a><div class="date" title="2006-10-04 08:18"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70129">
<div class="phpcode"><code><span class="html">If you are trying to replicate the function pg_query_params, you might also want to support NULL values. While is_int returns true for a NULL value, the formatting for the SQL.<br /><br />function pg_query_params( $db, $query, $parameters ) {<br />    // Escape parameters as required &amp; build parameters for callback function<br />    global $pg_query_params__parameters;<br />    foreach( $parameters as $k=&gt;$v ) {<br />        if ( is_null($v) ) {<br />            $parameters[$k] = 'NULL';<br />        } else {<br />            $parameters[$k] = ( is_int( $v ) ? $v : "'".pg_escape_string( $v )."'" );<br />        }<br />    }<br />    $pg_query_params__parameters = $parameters;<br />        <br />    // Call using pg_query<br />    return pg_query( $db, preg_replace_callback( '/\$([0-9]+)/', 'pg_query_params__callback', $query));<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="69364">  <div class="votes">
    <div id="Vu69364">
    <a href="/manual/vote-note.php?id=69364&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69364">
    <a href="/manual/vote-note.php?id=69364&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69364" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#69364" class="name">
  <strong class="user"><em>cc+php at c2se dot com</em></strong></a><a class="genanchor" href="#69364"> &para;</a><div class="date" title="2006-09-02 05:17"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69364">
<div class="phpcode"><code><span class="html">This is a useful function for preventing SQL injection attacks, so, for those of us who are not yet able to upgrade to PHP5.1, here is a replacement function which works similarly on older versions of PHP...<br /><br /><span class="default">&lt;?php   </span><span class="comment"># Parameterised query implementation for Postgresql and older versions of PHP<br /><br />        </span><span class="keyword">if( !</span><span class="default">function_exists</span><span class="keyword">( </span><span class="string">'pg_query_params' </span><span class="keyword">) ) {<br /><br />                function </span><span class="default">pg_query_params__callback</span><span class="keyword">( </span><span class="default">$at </span><span class="keyword">) {<br />                        global </span><span class="default">$pg_query_params__parameters</span><span class="keyword">;<br />                        return </span><span class="default">$pg_query_params__parameters</span><span class="keyword">[ </span><span class="default">$at</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-</span><span class="default">1 </span><span class="keyword">];<br />                }<br /><br />                function </span><span class="default">pg_query_params</span><span class="keyword">( </span><span class="default">$db</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">, </span><span class="default">$parameters </span><span class="keyword">) {<br /><br />                        </span><span class="comment">// Escape parameters as required &amp; build parameters for callback function<br />                        </span><span class="keyword">global </span><span class="default">$pg_query_params__parameters</span><span class="keyword">;<br />                        foreach( </span><span class="default">$parameters </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v </span><span class="keyword">)<br />                                </span><span class="default">$parameters</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = ( </span><span class="default">is_int</span><span class="keyword">( </span><span class="default">$v </span><span class="keyword">) ? </span><span class="default">$v </span><span class="keyword">: </span><span class="string">"'"</span><span class="keyword">.</span><span class="default">pg_escape_string</span><span class="keyword">( </span><span class="default">$v </span><span class="keyword">).</span><span class="string">"'" </span><span class="keyword">);<br />                        </span><span class="default">$pg_query_params__parameters </span><span class="keyword">= </span><span class="default">$parameters</span><span class="keyword">;<br /><br />                        </span><span class="comment">// Call using pg_query<br />                        </span><span class="keyword">return </span><span class="default">pg_query</span><span class="keyword">( </span><span class="default">$db</span><span class="keyword">, </span><span class="default">preg_replace_callback</span><span class="keyword">( </span><span class="string">'/\$([0-9]+)/'</span><span class="keyword">, </span><span class="string">'pg_query_params__callback'</span><span class="keyword">, </span><span class="default">$query </span><span class="keyword">) );<br /><br />                }<br />        }<br /><br />        </span><span class="comment">// Example: pg_query_params( $db_resource, "SELECT * FROM table WHERE col1=$1 AND col2=$2", array( 42, "It's ok" ) );<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120740">  <div class="votes">
    <div id="Vu120740">
    <a href="/manual/vote-note.php?id=120740&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120740">
    <a href="/manual/vote-note.php?id=120740&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120740" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#120740" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#120740"> &para;</a><div class="date" title="2017-03-04 05:52"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120740">
<div class="phpcode"><code><span class="html">If one of the parameters is an array,  (eg. array of ints being passed to a stored procedure),   it must be denoted as a set within the array,  not php array notation.  <br /><br />eg:  var_dump output  of 2 parms an integer and array of int<br />aaa is: Array<br />(<br />    [0] =&gt; 1<br />    [1] =&gt; {2,3}<br />)<br /><br />you do not want:<br /><br />bbb is: Array<br />(<br />    [0] =&gt; 1<br />    [1] =&gt; Array<br />        (<br />            [0] =&gt; 2<br />            [1] =&gt; 3<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="115062">  <div class="votes">
    <div id="Vu115062">
    <a href="/manual/vote-note.php?id=115062&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115062">
    <a href="/manual/vote-note.php?id=115062&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115062" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#115062" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#115062"> &para;</a><div class="date" title="2014-05-20 04:20"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115062">
<div class="phpcode"><code><span class="html">pg_query_params() *does* accept NULLs.  They will automatically be transformed, correctly, into SQL NULL. Thus, for example:<br /><br /><span class="default">&lt;?php<br />$sql </span><span class="keyword">= </span><span class="string">"UPDATE tbl_example SET column_a = $1, column_b=$2"</span><span class="keyword">;<br /></span><span class="default">$params </span><span class="keyword">= array(</span><span class="default">NULL</span><span class="keyword">,  </span><span class="default">42</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">pg_params </span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">);<br /><br /></span><span class="comment">//is equivalent to:<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">pg_query </span><span class="keyword">(</span><span class="string">"UPDATE tbl_example SET column_a = NULL column_b  = '42')"</span><span class="keyword">;<br /><br /></span><span class="comment">//and not, as one might fear,  either of these (incorrect) things:<br />// ... column_a = ''      ...<br />// ... column_a = 'NULL'  ...<br /></span><span class="default">?&gt;<br /></span><br />Note that you can use NULLs this way in an UPDATE or INSERT statement, but NOT in a WHERE clause. This isn't a restriction of pg_query_params(), but rather it is a consquence of the SQL language.<br />So, if you want a query of the type:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//depending on data,  the where-test parameter may or may not be NULL<br />//the following is WRONG for $1.<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"SELECT * from  tbl_example WHERE column_a = $1 and column_b = $2"</span><span class="keyword">;<br /></span><span class="default">$params </span><span class="keyword">= array(</span><span class="default">NULL</span><span class="keyword">,  </span><span class="default">42</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">pg_params </span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will fail as invalid SQL:  because you should use "= 42" but "IS NULL".  The solution is to use the SQL construct "IS [NOT] DISTINCT FROM".  <br /><br /><span class="default">&lt;?php<br />$sql </span><span class="keyword">= </span><span class="string">"SELECT ... WHERE column IS NOT DISTINCT FROM $1"<br /></span><span class="default">$params </span><span class="keyword">= array (</span><span class="default">42</span><span class="keyword">);    </span><span class="comment">//this works, the same as  "where column = 42"<br /></span><span class="default">$params </span><span class="keyword">= array (</span><span class="default">NULL</span><span class="keyword">);  </span><span class="comment">//this works, the same as "where column is null"<br /></span><span class="default">?&gt;<br /></span><br />(Aside: though this is annoying, the behaviour is correct. There is a postgresql compatibility option "transform_null_equals", but it won't help you here, even though you might expect it to.)</span></code></div>
  </div>
 </div>
  <div class="note" id="115063">  <div class="votes">
    <div id="Vu115063">
    <a href="/manual/vote-note.php?id=115063&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115063">
    <a href="/manual/vote-note.php?id=115063&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115063" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#115063" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#115063"> &para;</a><div class="date" title="2014-05-20 04:35"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115063">
<div class="phpcode"><code><span class="html">A note on type-juggling of booleans:<br />pg_query_params() and friends do seamless, automatic conversion between PHP-NULL and SQL-NULL and back again, where appropriate.<br />Hoever, everything else goes in (and comes out) as a string.<br />The following approach may be helpful when handling boolean fields:<br /><br /><span class="default">&lt;?php<br />$sql </span><span class="keyword">= </span><span class="string">" ... "</span><span class="keyword">;<br /></span><span class="default">$params </span><span class="keyword">= array (</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /><br /></span><span class="comment">//Convert booleans to 'true' and 'false'.  [NULLS are already handled].<br /></span><span class="keyword">foreach (</span><span class="default">$params </span><span class="keyword">as &amp;</span><span class="default">$value</span><span class="keyword">){<br />    if (</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)){<br />        </span><span class="default">$value </span><span class="keyword">= (</span><span class="default">$value</span><span class="keyword">) ? </span><span class="string">'true'</span><span class="keyword">:</span><span class="string">'false'</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">//Now do the query:<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">pg_query_params </span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">);<br /></span><span class="default">$row </span><span class="keyword">= </span><span class="default">pg_fetch_assoc </span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">)  </span><span class="comment">//first row<br /><br />//For booleans, convert 't' and 'f' back to true and false. Check the column type so we don't accidentally convert the wrong thing.<br /></span><span class="keyword">foreach (</span><span class="default">$row </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; &amp;</span><span class="default">$value</span><span class="keyword">){ <br />    </span><span class="default">$type </span><span class="keyword">= </span><span class="default">pg_field_type</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">,</span><span class="default">pg_field_num</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">));<br />    if (</span><span class="default">$type </span><span class="keyword">== </span><span class="string">'bool'</span><span class="keyword">){<br />        </span><span class="default">$value </span><span class="keyword">= (</span><span class="default">$value </span><span class="keyword">== </span><span class="string">'t'</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="comment">//$row[] now contains booleans, NULLS, and strings.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115076">  <div class="votes">
    <div id="Vu115076">
    <a href="/manual/vote-note.php?id=115076&amp;page=function.pg-query-params&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115076">
    <a href="/manual/vote-note.php?id=115076&amp;page=function.pg-query-params&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115076" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#115076" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#115076"> &para;</a><div class="date" title="2014-05-23 02:55"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115076">
<div class="phpcode"><code><span class="html">For a parameterised date, the value NOW() is not allowed (it gets turned into a literal string and makes postgres choke),  however 'now'<br />is allowed as a parameter, and has the same effect.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pg-query-params&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pg-query-params.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
