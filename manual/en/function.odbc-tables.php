<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: odbc_tables - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.odbc-tables.php">
 <link rel="shorturl" href="https://www.php.net/odbc-tables">
 <link rel="alternate" href="https://www.php.net/odbc-tables" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.uodbc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.odbc-tableprivileges.php">
 <link rel="next" href="https://www.php.net/manual/en/book.pdo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.odbc-tables.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.odbc-tables.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.odbc-tables.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.odbc-tables.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.odbc-tables.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.odbc-tables.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.odbc-tables.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.odbc-tables.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.odbc-tables.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.odbc-tables.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.odbc-tables.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get the list of table names stored in a specific data source" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: odbc_tables - Manual" />
<meta name="twitter:description" content="Get the list of table names stored in a specific data source" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: odbc_tables - Manual" />
<meta itemprop="description" content="Get the list of table names stored in a specific data source" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get the list of table names stored in a specific data source" />

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
        <a href="book.pdo.php">
          PDO &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.odbc-tableprivileges.php">
          &laquo; odbc_tableprivileges        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.uodbc.php'>ODBC</a></li>      <li><a href='ref.uodbc.php'>ODBC Functions</a></li>      </ul>
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
            <option value='en/function.odbc-tables.php' selected="selected">English</option>
            <option value='de/function.odbc-tables.php'>German</option>
            <option value='es/function.odbc-tables.php'>Spanish</option>
            <option value='fr/function.odbc-tables.php'>French</option>
            <option value='it/function.odbc-tables.php'>Italian</option>
            <option value='ja/function.odbc-tables.php'>Japanese</option>
            <option value='pt_BR/function.odbc-tables.php'>Brazilian Portuguese</option>
            <option value='ru/function.odbc-tables.php'>Russian</option>
            <option value='tr/function.odbc-tables.php'>Turkish</option>
            <option value='uk/function.odbc-tables.php'>Ukrainian</option>
            <option value='zh/function.odbc-tables.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.odbc-tables" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">odbc_tables</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">odbc_tables</span> &mdash; <span class="dc-title">Get the list of table names stored in a specific data source</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.odbc-tables-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>odbc_tables</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type">Odbc\Connection</span> <code class="parameter">$odbc</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$catalog</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$schema</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$table</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$types</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type">Odbc\Result</span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Lists all tables in the requested range.
  </p>
  <p class="para">
   To support enumeration of qualifiers, owners, and table types,
   the following special semantics for the
   <code class="parameter">catalog</code>, <code class="parameter">schema</code>,
   <code class="parameter">table</code>, and
   <code class="parameter">table_type</code> are available:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      If <code class="parameter">catalog</code> is a single percent
      character (%) and <code class="parameter">schema</code> and
      <code class="parameter">table</code> are empty strings, then the result
      set contains a list of valid qualifiers for the data
      source. (All columns except the TABLE_QUALIFIER column contain
      NULLs.)
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      If <code class="parameter">schema</code> is a single percent character
      (%) and <code class="parameter">catalog</code> and
      <code class="parameter">table</code> are empty strings, then the result
      set contains a list of valid owners for the data source. (All
      columns except the TABLE_OWNER column contain
      NULLs.)
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      If <code class="parameter">table_type</code> is a single percent
      character (%) and <code class="parameter">catalog</code>,
      <code class="parameter">schema</code> and <code class="parameter">table</code>
      are empty strings, then the result set contains a list of
      valid table types for the data source. (All columns except the
      TABLE_TYPE column contain NULLs.)
     </span>
    </li>
   </ul>
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.odbc-tables-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">odbc</code></dt>
     <dd>
      <p class="para">The ODBC connection object,
see <span class="function"><a href="function.odbc-connect.php" class="function">odbc_connect()</a></span> for details.</p>
     </dd>
    
    
     <dt><code class="parameter">catalog</code></dt>
     <dd>
      <p class="para">
       The catalog (&#039;qualifier&#039; in ODBC 2 parlance).
      </p>
     </dd>
    
    
     <dt><code class="parameter">schema</code></dt>
     <dd>
      <p class="para">
       The schema (&#039;owner&#039; in ODBC 2 parlance).
       This parameter accepts the following search patterns:
<code class="literal">%</code> to match zero or more characters,
and <code class="literal">_</code> to match a single character.
      </p>
     </dd>
    
    
     <dt><code class="parameter">table</code></dt>
     <dd>
      <p class="para">
       The name.
       This parameter accepts the following search patterns:
<code class="literal">%</code> to match zero or more characters,
and <code class="literal">_</code> to match a single character.
      </p>
     </dd>
    
    
     <dt><code class="parameter">types</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">table_type</code> is not an empty string, it
       must contain a list of comma-separated values for the types of
       interest; each value may be enclosed in single quotes (<code class="literal">&#039;</code>) or
       unquoted. For example, <code class="literal">&#039;TABLE&#039;,&#039;VIEW&#039;</code> or <code class="literal">TABLE, VIEW</code>.  If the
       data source does not support a specified table type,
       <span class="function"><strong>odbc_tables()</strong></span> does not return any results for
       that type.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.odbc-tables-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an ODBC result object containing the information
    or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <p class="para">
   The result set has the following columns:
   <ul class="itemizedlist">
    <li class="listitem"><span class="simpara"><code class="literal">TABLE_CAT</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">TABLE_SCHEM</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">TABLE_NAME</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">TABLE_TYPE</code></span></li>
    <li class="listitem"><span class="simpara"><code class="literal">REMARKS</code></span></li>
   </ul>
   Drivers can report additional columns.
  </p>
  <p class="simpara">
   The result set is ordered by <code class="literal">TABLE_TYPE</code>, <code class="literal">TABLE_CAT</code>,
   <code class="literal">TABLE_SCHEM</code> and <code class="literal">TABLE_NAME</code>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.odbc-tables-changelog">
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
 <td>8.4.0</td>
 <td>
  <code class="parameter">odbc</code> expects an <span class="classname"><strong class="classname">Odbc\Connection</strong></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

     <tr>
 <td>8.4.0</td>
 <td>
  This function returns an <span class="classname"><strong class="classname">Odbc\Result</strong></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
 </td>
</tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">schema</code>, <code class="parameter">table</code> and <code class="parameter">types</code>
       are now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.odbc-tables-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="odbc-tables.example.basic">
   <p><strong>Example #1 List Tables in a Catalog</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$dsn</span><span style="color: #007700">, </span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$pass</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$tables </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_tables</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'SalesOrders'</span><span style="color: #007700">, </span><span style="color: #DD0000">'dbo'</span><span style="color: #007700">, </span><span style="color: #DD0000">'%'</span><span style="color: #007700">, </span><span style="color: #DD0000">'TABLE'</span><span style="color: #007700">);<br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_fetch_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$tables</span><span style="color: #007700">))) {<br />    </span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />    break; </span><span style="color: #FF8000">// further rows omitted for brevity<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [TABLE_CAT] =&gt; SalesOrders
    [TABLE_SCHEM] =&gt; dbo
    [TABLE_NAME] =&gt; Orders
    [TABLE_TYPE] =&gt; TABLE
    [REMARKS] =&gt;
)</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.odbc-tables-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.odbc-tableprivileges.php" class="function" rel="rdfs-seeAlso">odbc_tableprivileges()</a> - Lists tables and the privileges associated with each table</span></li>
    <li><span class="function"><a href="function.odbc-columns.php" class="function" rel="rdfs-seeAlso">odbc_columns()</a> - Lists the column names in specified tables</span></li>
    <li><span class="function"><a href="function.odbc-specialcolumns.php" class="function" rel="rdfs-seeAlso">odbc_specialcolumns()</a> - Retrieves special columns</span></li>
    <li><span class="function"><a href="function.odbc-statistics.php" class="function" rel="rdfs-seeAlso">odbc_statistics()</a> - Retrieve statistics about a table</span></li>
    <li><span class="function"><a href="function.odbc-procedures.php" class="function" rel="rdfs-seeAlso">odbc_procedures()</a> - Get the list of procedures stored in a specific data source</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/uodbc/functions/odbc-tables.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.odbc-tables%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.odbc-tables&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-tables.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="11870">  <div class="votes">
    <div id="Vu11870">
    <a href="/manual/vote-note.php?id=11870&amp;page=function.odbc-tables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd11870">
    <a href="/manual/vote-note.php?id=11870&amp;page=function.odbc-tables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V11870" title="100% like this...">
    2
    </div>
  </div>
  <a href="#11870" class="name">
  <strong class="user"><em>liquidicee at hotmail dot com</em></strong></a><a class="genanchor" href="#11870"> &para;</a><div class="date" title="2001-03-10 08:02"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom11870">
<div class="phpcode"><code><span class="html">Here's how to get a list of all the tables in your database.. with an actual example of how its done and how to get the results.. and you don't need to put in schema and all that other crap
<br />
<br /><span class="default">&lt;?php
<br />$conn </span><span class="keyword">= </span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="string">"</span><span class="default">$database</span><span class="string">"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$username</span><span class="string">"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$password</span><span class="string">"</span><span class="keyword">);
<br /></span><span class="default">$tablelist </span><span class="keyword">= </span><span class="default">odbc_tables</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);
<br />while (</span><span class="default">odbc_fetch_row</span><span class="keyword">(</span><span class="default">$tablelist</span><span class="keyword">)) {
<br />if (</span><span class="default">odbc_result</span><span class="keyword">(</span><span class="default">$tablelist</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">) == </span><span class="string">"TABLE"</span><span class="keyword">)
<br />echo </span><span class="default">odbc_result</span><span class="keyword">(</span><span class="default">$tablelist</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">) .</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />to understand what the above is doing,
<br />use odbc_result_all($tablelist); this will show you EVERYTHING returned by odbc_tables() then you can look through it and see better how odbc_tables() works and what exactly it returns in the string to get a better idea on how to deal with it.
<br />it would have saved me alot of time if i would have just taken a look at the full string returned by odbc_tables(), so i suggest you take the minute or two and look... here is an example of how to do it..which would have been helpful for me ;x.
<br />
<br /><span class="default">&lt;?php
<br />$conn </span><span class="keyword">= </span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="string">"</span><span class="default">$database</span><span class="string">"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$username</span><span class="string">"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$password</span><span class="string">"</span><span class="keyword">);
<br /></span><span class="default">$tablelist </span><span class="keyword">= </span><span class="default">odbc_tables</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);
<br />while (</span><span class="default">odbc_fetch_row</span><span class="keyword">(</span><span class="default">$tablelist</span><span class="keyword">)) {
<br />echo </span><span class="default">odbc_result_all</span><span class="keyword">(</span><span class="default">$tablelist</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />hopefully this will help some people.. i have alot more to add about this but no time :(
<br />so again hope this helps.
<br />Liquidice</span></code></div>
  </div>
 </div>
  <div class="note" id="58482">  <div class="votes">
    <div id="Vu58482">
    <a href="/manual/vote-note.php?id=58482&amp;page=function.odbc-tables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58482">
    <a href="/manual/vote-note.php?id=58482&amp;page=function.odbc-tables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58482" title="50% like this...">
    0
    </div>
  </div>
  <a href="#58482" class="name">
  <strong class="user"><em>narcomweb at wanadoo dot fr</em></strong></a><a class="genanchor" href="#58482"> &para;</a><div class="date" title="2005-11-05 09:33"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58482">
<div class="phpcode"><code><span class="html">Here a Code for listing Table names<br /><span class="default">&lt;?php<br />$dbh </span><span class="keyword">= </span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="default">$dsn</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">, </span><span class="default">$pwd</span><span class="keyword">);<br /><br />   </span><span class="default">$result </span><span class="keyword">= </span><span class="default">odbc_tables</span><span class="keyword">(</span><span class="default">$dbh</span><span class="keyword">);<br /><br />   </span><span class="default">$tables </span><span class="keyword">= array();<br />   while (</span><span class="default">odbc_fetch_row</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)){<br />     if(</span><span class="default">odbc_result</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">,</span><span class="string">"TABLE_TYPE"</span><span class="keyword">)==</span><span class="string">"TABLE"</span><span class="keyword">)<br />       echo</span><span class="string">"&lt;br&gt;"</span><span class="keyword">.</span><span class="default">odbc_result</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">,</span><span class="string">"TABLE_NAME"</span><span class="keyword">);<br /><br />   }<br /></span><span class="default">?&gt;<br /></span>You don't have views or System tables with.<br />Only simple tables in your database.</span></code></div>
  </div>
 </div>
  <div class="note" id="40362">  <div class="votes">
    <div id="Vu40362">
    <a href="/manual/vote-note.php?id=40362&amp;page=function.odbc-tables&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40362">
    <a href="/manual/vote-note.php?id=40362&amp;page=function.odbc-tables&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40362" title="50% like this...">
    0
    </div>
  </div>
  <a href="#40362" class="name">
  <strong class="user"><em>iggvopvantoodlwin</em></strong></a><a class="genanchor" href="#40362"> &para;</a><div class="date" title="2004-03-01 07:42"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40362">
<div class="phpcode"><code><span class="html">With regard to the note made on results not working.<br />Test the database with the easy:<br /><br />odbc_result_all(odbc_tables($db));<br /><br />$db is obviously a connected batadase. Then start to experiment:<br /><br />if(!$odbcr=odbc_tables($db,"udb","", "%", "'TABLE'"))<br /><br />"udb" is the DNS - aka 'name of my ODBC database in the Windows ODBC thingamy'. In result_all the full path was shown but I just used the name I assigned; either should work.<br /><br />The second parameter "" is listed by result_all as "TABLE_SCHEM" and all items were "NULL", so I have put "".<br /><br />The third parameter is "%". According to result_all this col is "TABLE_NAME", so I could have put the name of one of my tables, i.e. "Address".<br /><br />In my case I have an Access database setup with several tables. In ODBC I have created a link. Running the all on everything result above shows a set of system tables which I do not need to know about at this point so I look at the result and then build my new table check using the "TABLE" string as the tables I am interested in are listed as "TABLE" under their "TABLE_TYPE" column.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.odbc-tables&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-tables.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.uodbc.php">ODBC Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.odbc-autocommit.php" title="odbc_&#8203;autocommit">odbc_&#8203;autocommit</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-binmode.php" title="odbc_&#8203;binmode">odbc_&#8203;binmode</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-close.php" title="odbc_&#8203;close">odbc_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-close-all.php" title="odbc_&#8203;close_&#8203;all">odbc_&#8203;close_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-columnprivileges.php" title="odbc_&#8203;columnprivileges">odbc_&#8203;columnprivileges</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-columns.php" title="odbc_&#8203;columns">odbc_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-commit.php" title="odbc_&#8203;commit">odbc_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connect.php" title="odbc_&#8203;connect">odbc_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-is-quoted.php" title="odbc_&#8203;connection_&#8203;string_&#8203;is_&#8203;quoted">odbc_&#8203;connection_&#8203;string_&#8203;is_&#8203;quoted</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-quote.php" title="odbc_&#8203;connection_&#8203;string_&#8203;quote">odbc_&#8203;connection_&#8203;string_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-should-quote.php" title="odbc_&#8203;connection_&#8203;string_&#8203;should_&#8203;quote">odbc_&#8203;connection_&#8203;string_&#8203;should_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-cursor.php" title="odbc_&#8203;cursor">odbc_&#8203;cursor</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-data-source.php" title="odbc_&#8203;data_&#8203;source">odbc_&#8203;data_&#8203;source</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-do.php" title="odbc_&#8203;do">odbc_&#8203;do</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-error.php" title="odbc_&#8203;error">odbc_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-errormsg.php" title="odbc_&#8203;errormsg">odbc_&#8203;errormsg</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-exec.php" title="odbc_&#8203;exec">odbc_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-execute.php" title="odbc_&#8203;execute">odbc_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-array.php" title="odbc_&#8203;fetch_&#8203;array">odbc_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-into.php" title="odbc_&#8203;fetch_&#8203;into">odbc_&#8203;fetch_&#8203;into</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-object.php" title="odbc_&#8203;fetch_&#8203;object">odbc_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-row.php" title="odbc_&#8203;fetch_&#8203;row">odbc_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-len.php" title="odbc_&#8203;field_&#8203;len">odbc_&#8203;field_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-name.php" title="odbc_&#8203;field_&#8203;name">odbc_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-num.php" title="odbc_&#8203;field_&#8203;num">odbc_&#8203;field_&#8203;num</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-precision.php" title="odbc_&#8203;field_&#8203;precision">odbc_&#8203;field_&#8203;precision</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-scale.php" title="odbc_&#8203;field_&#8203;scale">odbc_&#8203;field_&#8203;scale</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-type.php" title="odbc_&#8203;field_&#8203;type">odbc_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-foreignkeys.php" title="odbc_&#8203;foreignkeys">odbc_&#8203;foreignkeys</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-free-result.php" title="odbc_&#8203;free_&#8203;result">odbc_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-gettypeinfo.php" title="odbc_&#8203;gettypeinfo">odbc_&#8203;gettypeinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-longreadlen.php" title="odbc_&#8203;longreadlen">odbc_&#8203;longreadlen</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-next-result.php" title="odbc_&#8203;next_&#8203;result">odbc_&#8203;next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-num-fields.php" title="odbc_&#8203;num_&#8203;fields">odbc_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-num-rows.php" title="odbc_&#8203;num_&#8203;rows">odbc_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-pconnect.php" title="odbc_&#8203;pconnect">odbc_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-prepare.php" title="odbc_&#8203;prepare">odbc_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-primarykeys.php" title="odbc_&#8203;primarykeys">odbc_&#8203;primarykeys</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-procedurecolumns.php" title="odbc_&#8203;procedurecolumns">odbc_&#8203;procedurecolumns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-procedures.php" title="odbc_&#8203;procedures">odbc_&#8203;procedures</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-result.php" title="odbc_&#8203;result">odbc_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-result-all.php" title="odbc_&#8203;result_&#8203;all">odbc_&#8203;result_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-rollback.php" title="odbc_&#8203;rollback">odbc_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-setoption.php" title="odbc_&#8203;setoption">odbc_&#8203;setoption</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-specialcolumns.php" title="odbc_&#8203;specialcolumns">odbc_&#8203;specialcolumns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-statistics.php" title="odbc_&#8203;statistics">odbc_&#8203;statistics</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-tableprivileges.php" title="odbc_&#8203;tableprivileges">odbc_&#8203;tableprivileges</a>
                        </li>
                                                <li class="current">
                            <a href="function.odbc-tables.php" title="odbc_&#8203;tables">odbc_&#8203;tables</a>
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
