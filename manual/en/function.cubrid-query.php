<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: cubrid_query - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.cubrid-query.php">
 <link rel="shorturl" href="https://www.php.net/cubrid-query">
 <link rel="alternate" href="https://www.php.net/cubrid-query" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/cubridmysql.cubrid.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.cubrid-ping.php">
 <link rel="next" href="https://www.php.net/manual/en/function.cubrid-real-escape-string.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.cubrid-query.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.cubrid-query.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.cubrid-query.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.cubrid-query.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.cubrid-query.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.cubrid-query.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.cubrid-query.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.cubrid-query.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.cubrid-query.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.cubrid-query.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.cubrid-query.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Send a CUBRID query" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: cubrid_query - Manual" />
<meta name="twitter:description" content="Send a CUBRID query" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: cubrid_query - Manual" />
<meta itemprop="description" content="Send a CUBRID query" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Send a CUBRID query" />

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
        <a href="function.cubrid-real-escape-string.php">
          cubrid_real_escape_string &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.cubrid-ping.php">
          &laquo; cubrid_ping        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.cubrid.php'>CUBRID</a></li>      <li><a href='cubridmysql.cubrid.php'>CUBRID MySQL Compatibility Functions</a></li>      </ul>
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
            <option value='en/function.cubrid-query.php' selected="selected">English</option>
            <option value='de/function.cubrid-query.php'>German</option>
            <option value='es/function.cubrid-query.php'>Spanish</option>
            <option value='fr/function.cubrid-query.php'>French</option>
            <option value='it/function.cubrid-query.php'>Italian</option>
            <option value='ja/function.cubrid-query.php'>Japanese</option>
            <option value='pt_BR/function.cubrid-query.php'>Brazilian Portuguese</option>
            <option value='ru/function.cubrid-query.php'>Russian</option>
            <option value='tr/function.cubrid-query.php'>Turkish</option>
            <option value='uk/function.cubrid-query.php'>Ukrainian</option>
            <option value='zh/function.cubrid-query.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.cubrid-query" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">cubrid_query</h1>
  <p class="verinfo">(PECL CUBRID &gt;= 8.3.1)</p><p class="refpurpose"><span class="refname">cubrid_query</span> &mdash; <span class="dc-title">Send a CUBRID query</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.cubrid-query-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>cubrid_query</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$conn_identifier</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>cubrid_query()</strong></span> sends a unique query (multiple queries are not supported) to the 
   currently active database on the server that&#039;s associated with the specified <code class="parameter">conn_identifier</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.cubrid-query-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">query</code></dt>
     <dd>
      <p class="para">
       An SQL query
      </p>
      <p class="para">
       Data inside the query should be <a href="function.cubrid-real-escape-string.php" class="link">properly escaped</a>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">conn_identifier</code></dt>
     <dd>
      <p class="para">
       The CUBRID connection. If the connection identifier is not specified,
       the last connection opened by <span class="function"><a href="function.cubrid-connect.php" class="function">cubrid_connect()</a></span> is
       assumed.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.cubrid-query-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   For SELECT, SHOW, DESCRIBE, EXPLAIN and other statements returning resultset,
   <span class="function"><strong>cubrid_query()</strong></span> returns a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
  <p class="para">
   For other type of SQL statements, INSERT, UPDATE, DELETE, DROP, etc,
   <span class="function"><strong>cubrid_query()</strong></span> returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
  <p class="para">
   The returned result resource should be passed to <span class="function"><a href="function.cubrid-fetch-array.php" class="function">cubrid_fetch_array()</a></span>, and other
   functions for dealing with result tables, to access the returned data.
  </p>
  <p class="para">
   Use <span class="function"><a href="function.cubrid-num-rows.php" class="function">cubrid_num_rows()</a></span> to find out how many rows were returned for a SELECT statement or
   <span class="function"><a href="function.cubrid-affected-rows.php" class="function">cubrid_affected_rows()</a></span> to find out how many rows were affected by a DELETE, INSERT, REPLACE, or UPDATE statement.
  </p>
  <p class="para">
   <span class="function"><strong>cubrid_query()</strong></span> will also fail and return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   if the user does not have permission to access the table(s) referenced by the query.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.cubrid-query-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1302">
    <p><strong>Example #1 Invalid Query</strong></p>
    <div class="example-contents"><p>
     The following query is syntactically invalid, so <span class="function"><strong>cubrid_query()</strong></span> fails and returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">cubrid_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #0000BB">33000</span><span style="color: #007700">, </span><span style="color: #DD0000">'demodb'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">cubrid_query</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT * WHERE 1=1'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$result</span><span style="color: #007700">) {<br />    die(</span><span style="color: #DD0000">'Invalid query: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">cubrid_error</span><span style="color: #007700">());<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1303">
    <p><strong>Example #2 Valid Query</strong></p>
    <div class="example-contents"><p>
     The following query is valid, so <span class="function"><strong>cubrid_query()</strong></span> returns a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// This could be supplied by a user, for example<br /></span><span style="color: #0000BB">$firstname </span><span style="color: #007700">= </span><span style="color: #DD0000">'fred'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$lastname  </span><span style="color: #007700">= </span><span style="color: #DD0000">'fox'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">cubrid_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #0000BB">33000</span><span style="color: #007700">, </span><span style="color: #DD0000">'demodb'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">cubrid_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">,</span><span style="color: #DD0000">"DROP TABLE if exists friends"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">cubrid_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">,</span><span style="color: #DD0000">"create table friends(firstname varchar,lastname varchar,address char(24),age int)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">cubrid_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">,</span><span style="color: #DD0000">"insert into friends values('fred','fox','home-1','20')"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">cubrid_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">,</span><span style="color: #DD0000">"insert into friends values('blue','cat','home-2','21')"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// Formulate Query<br />// This is the best way to perform an SQL query<br />// For more examples, see cubrid_real_escape_string()<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT firstname, lastname, address, age FROM friends WHERE firstname='%s' AND lastname='%s'"</span><span style="color: #007700">,<br /></span><span style="color: #0000BB">cubrid_real_escape_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$firstname</span><span style="color: #007700">),<br /></span><span style="color: #0000BB">cubrid_real_escape_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$lastname</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Perform Query<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">cubrid_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Check result<br />// This shows the actual query sent to CUBRID, and the error. Useful for debugging.<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">$result</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$message  </span><span style="color: #007700">= </span><span style="color: #DD0000">'Invalid query: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">cubrid_error</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$message </span><span style="color: #007700">.= </span><span style="color: #DD0000">'Whole query: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$query</span><span style="color: #007700">;<br />    die(</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Use result<br />// Attempting to print $result won't allow access to information in the resource<br />// One of the cubrid result functions must be used<br />// See also cubrid_result(), cubrid_fetch_array(), cubrid_fetch_row(), etc.<br /></span><span style="color: #007700">while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">cubrid_fetch_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'firstname'</span><span style="color: #007700">];<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'lastname'</span><span style="color: #007700">];<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'address'</span><span style="color: #007700">];<br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'age'</span><span style="color: #007700">];<br />}<br /><br /></span><span style="color: #FF8000">// Free the resources associated with the result set<br />// This is done automatically at the end of the script<br /></span><span style="color: #0000BB">cubrid_free_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.cubrid-query-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.cubrid-connect.php" class="function" rel="rdfs-seeAlso">cubrid_connect()</a> - Open a connection to a CUBRID Server</span></li>
    <li><span class="function"><a href="function.cubrid-error.php" class="function" rel="rdfs-seeAlso">cubrid_error()</a> - Get the error message</span></li>
    <li><span class="function"><a href="function.cubrid-real-escape-string.php" class="function" rel="rdfs-seeAlso">cubrid_real_escape_string()</a> - Escape special characters in a string for use in an SQL statement</span></li>
    <li><span class="function"><a href="function.cubrid-result.php" class="function" rel="rdfs-seeAlso">cubrid_result()</a> - Return the value of a specific field in a specific row</span></li>
    <li><span class="function"><a href="function.cubrid-fetch-assoc.php" class="function" rel="rdfs-seeAlso">cubrid_fetch_assoc()</a> - Return the associative array that corresponds to the fetched row</span></li>
    <li><span class="function"><a href="function.cubrid-unbuffered-query.php" class="function" rel="rdfs-seeAlso">cubrid_unbuffered_query()</a> - Perform a query without fetching the results into memory</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/cubrid/cubridmysql/cubrid-query.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.cubrid-query%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.cubrid-query&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.cubrid-query.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="cubridmysql.cubrid.php">CUBRID MySQL Compatibility Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.cubrid-affected-rows.php" title="cubrid_&#8203;affected_&#8203;rows">cubrid_&#8203;affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-client-encoding.php" title="cubrid_&#8203;client_&#8203;encoding">cubrid_&#8203;client_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-close.php" title="cubrid_&#8203;close">cubrid_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-data-seek.php" title="cubrid_&#8203;data_&#8203;seek">cubrid_&#8203;data_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-db-name.php" title="cubrid_&#8203;db_&#8203;name">cubrid_&#8203;db_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-errno.php" title="cubrid_&#8203;errno">cubrid_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-error.php" title="cubrid_&#8203;error">cubrid_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-fetch-array.php" title="cubrid_&#8203;fetch_&#8203;array">cubrid_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-fetch-assoc.php" title="cubrid_&#8203;fetch_&#8203;assoc">cubrid_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-fetch-field.php" title="cubrid_&#8203;fetch_&#8203;field">cubrid_&#8203;fetch_&#8203;field</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-fetch-lengths.php" title="cubrid_&#8203;fetch_&#8203;lengths">cubrid_&#8203;fetch_&#8203;lengths</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-fetch-object.php" title="cubrid_&#8203;fetch_&#8203;object">cubrid_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-fetch-row.php" title="cubrid_&#8203;fetch_&#8203;row">cubrid_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-field-flags.php" title="cubrid_&#8203;field_&#8203;flags">cubrid_&#8203;field_&#8203;flags</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-field-len.php" title="cubrid_&#8203;field_&#8203;len">cubrid_&#8203;field_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-field-name.php" title="cubrid_&#8203;field_&#8203;name">cubrid_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-field-seek.php" title="cubrid_&#8203;field_&#8203;seek">cubrid_&#8203;field_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-field-table.php" title="cubrid_&#8203;field_&#8203;table">cubrid_&#8203;field_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-field-type.php" title="cubrid_&#8203;field_&#8203;type">cubrid_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-list-dbs.php" title="cubrid_&#8203;list_&#8203;dbs">cubrid_&#8203;list_&#8203;dbs</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-num-fields.php" title="cubrid_&#8203;num_&#8203;fields">cubrid_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-ping.php" title="cubrid_&#8203;ping">cubrid_&#8203;ping</a>
                        </li>
                                                <li class="current">
                            <a href="function.cubrid-query.php" title="cubrid_&#8203;query">cubrid_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-real-escape-string.php" title="cubrid_&#8203;real_&#8203;escape_&#8203;string">cubrid_&#8203;real_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-result.php" title="cubrid_&#8203;result">cubrid_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.cubrid-unbuffered-query.php" title="cubrid_&#8203;unbuffered_&#8203;query">cubrid_&#8203;unbuffered_&#8203;query</a>
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
