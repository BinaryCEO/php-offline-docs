<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: sqlsrv_query - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.sqlsrv-query.php">
 <link rel="shorturl" href="https://www.php.net/sqlsrv-query">
 <link rel="alternate" href="https://www.php.net/sqlsrv-query" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sqlsrv.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.sqlsrv-prepare.php">
 <link rel="next" href="https://www.php.net/manual/en/function.sqlsrv-rollback.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.sqlsrv-query.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.sqlsrv-query.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.sqlsrv-query.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.sqlsrv-query.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.sqlsrv-query.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.sqlsrv-query.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.sqlsrv-query.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.sqlsrv-query.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.sqlsrv-query.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.sqlsrv-query.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.sqlsrv-query.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Prepares and executes a query" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: sqlsrv_query - Manual" />
<meta name="twitter:description" content="Prepares and executes a query" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: sqlsrv_query - Manual" />
<meta itemprop="description" content="Prepares and executes a query" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Prepares and executes a query" />

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
        <a href="function.sqlsrv-rollback.php">
          sqlsrv_rollback &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.sqlsrv-prepare.php">
          &laquo; sqlsrv_prepare        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.sqlsrv.php'>SQLSRV</a></li>      <li><a href='ref.sqlsrv.php'>SQLSRV Functions</a></li>      </ul>
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
            <option value='en/function.sqlsrv-query.php' selected="selected">English</option>
            <option value='de/function.sqlsrv-query.php'>German</option>
            <option value='es/function.sqlsrv-query.php'>Spanish</option>
            <option value='fr/function.sqlsrv-query.php'>French</option>
            <option value='it/function.sqlsrv-query.php'>Italian</option>
            <option value='ja/function.sqlsrv-query.php'>Japanese</option>
            <option value='pt_BR/function.sqlsrv-query.php'>Brazilian Portuguese</option>
            <option value='ru/function.sqlsrv-query.php'>Russian</option>
            <option value='tr/function.sqlsrv-query.php'>Turkish</option>
            <option value='uk/function.sqlsrv-query.php'>Ukrainian</option>
            <option value='zh/function.sqlsrv-query.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.sqlsrv-query" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">sqlsrv_query</h1>
  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_query</span> &mdash; <span class="dc-title">Prepares and executes a query</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.sqlsrv-query-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>sqlsrv_query</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$conn</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$sql</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$params</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   Prepares and executes a query.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.sqlsrv-query-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">conn</code></dt>
     <dd>
      <p class="para">
       A connection resource returned by <span class="function"><a href="function.sqlsrv-connect.php" class="function">sqlsrv_connect()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">sql</code></dt>
     <dd>
      <p class="para">
       The string that defines the query to be prepared and executed.
      </p>
     </dd>
    
    
     <dt><code class="parameter">params</code></dt>
     <dd>
      <p class="para">
       An array specifying parameter information when executing a parameterized query. 
       Array elements can be any of the following:
       <ul class="simplelist">
        <li>A literal value</li>
        <li>A PHP variable</li>
        <li>An array with this structure: 
        array($value [, $direction [, $phpType [, $sqlType]]])</li>
       </ul>
       The following table describes the elements in the array structure above:
       </p>
       <table class="doctable table">
       <caption><strong>Array structure</strong></caption>
       
        <thead>
         <tr>
          <th>Element</th>
          <th>Description</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td>$value</td>
          <td>A literal value, a PHP variable, or a PHP by-reference variable.</td>
         </tr>

         <tr>
          <td>$direction (optional)</td>
          <td>One of the following SQLSRV constants used to indicate the 
          parameter direction: SQLSRV_PARAM_IN, SQLSRV_PARAM_OUT, SQLSRV_PARAM_INOUT. 
          The default value is SQLSRV_PARAM_IN.</td>
         </tr>

         <tr>
          <td>$phpType (optional)</td>
          <td>A SQLSRV_PHPTYPE_* constant that specifies PHP data type of the 
          returned value.</td>
         </tr>

         <tr>
          <td>$sqlType (optional)</td>
          <td>A SQLSRV_SQLTYPE_* constant that specifies the SQL Server data 
          type of the input value.</td>
         </tr>

        </tbody>
       
      </table>

     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       An array specifying query property options. The supported keys are described 
       in the following table:
      </p>
      <table class="doctable table">
       <caption><strong>Query Options</strong></caption>
       
        <thead>
         <tr>
          <th>Key</th>
          <th>Values</th>
          <th>Description</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td>QueryTimeout</td>
          <td>A positive integer value.</td>
          <td>Sets the query timeout in seconds. By default, the driver will 
          wait indefinitely for results.</td>
         </tr>

         <tr>
          <td>SendStreamParamsAtExec</td>
          <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> (the default is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>)</td>
          <td>Configures the driver to send all stream data at execution (<strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>), 
          or to send stream data in chunks (<strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>). By default, the value is set 
          to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>. For more information, see <span class="function"><a href="function.sqlsrv-send-stream-data.php" class="function">sqlsrv_send_stream_data()</a></span>.</td>
         </tr>

         <tr>
          <td>Scrollable</td>
          <td>SQLSRV_CURSOR_FORWARD, SQLSRV_CURSOR_STATIC, SQLSRV_CURSOR_DYNAMIC, 
          or SQLSRV_CURSOR_KEYSET</td>
          <td>See <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying 
          a Cursor Type and Selecting Rows</a> in the Microsoft SQLSRV documentation.</td>
         </tr>

        </tbody>
       
      </table>

     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-query-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a statement resource on success and <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occurred.
  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-function.sqlsrv-query-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2170">
    <p><strong>Example #1 <span class="function"><strong>sqlsrv_query()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password" </span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #0000BB">$serverName</span><span style="color: #007700">, </span><span style="color: #0000BB">$connectionInfo</span><span style="color: #007700">);<br />if( </span><span style="color: #0000BB">$conn </span><span style="color: #007700">=== </span><span style="color: #0000BB">false </span><span style="color: #007700">) {<br />     die( </span><span style="color: #0000BB">print_r</span><span style="color: #007700">( </span><span style="color: #0000BB">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />}<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO Table_1 (id, data) VALUES (?, ?)"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$params </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"some data"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">, </span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />if( </span><span style="color: #0000BB">$stmt </span><span style="color: #007700">=== </span><span style="color: #0000BB">false </span><span style="color: #007700">) {<br />     die( </span><span style="color: #0000BB">print_r</span><span style="color: #007700">( </span><span style="color: #0000BB">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.sqlsrv-query-notes">
  <h3 class="title">Notes</h3>
  <p class="para">
   For statements that you plan to execute only once, use <span class="function"><strong>sqlsrv_query()</strong></span>. 
   If you intend to re-execute a statement with different parameter values, use 
   the combination of <span class="function"><a href="function.sqlsrv-prepare.php" class="function">sqlsrv_prepare()</a></span> and <span class="function"><a href="function.sqlsrv-execute.php" class="function">sqlsrv_execute()</a></span>.
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.sqlsrv-query-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.sqlsrv-prepare.php" class="function" rel="rdfs-seeAlso">sqlsrv_prepare()</a> - Prepares a query for execution</span></li>
    <li><span class="function"><a href="function.sqlsrv-execute.php" class="function" rel="rdfs-seeAlso">sqlsrv_execute()</a> - Executes a statement prepared with sqlsrv_prepare</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sqlsrv/functions/sqlsrv-query.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.sqlsrv-query%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.sqlsrv-query&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sqlsrv-query.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112287">  <div class="votes">
    <div id="Vu112287">
    <a href="/manual/vote-note.php?id=112287&amp;page=function.sqlsrv-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112287">
    <a href="/manual/vote-note.php?id=112287&amp;page=function.sqlsrv-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112287" title="69% like this...">
    29
    </div>
  </div>
  <a href="#112287" class="name">
  <strong class="user"><em>bill_spam0001 at yahoo dot com</em></strong></a><a class="genanchor" href="#112287"> &para;</a><div class="date" title="2013-05-27 11:32"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112287">
<div class="phpcode"><code><span class="html">If you are getting an error while attempting to execute your query, and the output of sqlsrv_errors(SQLSRV_ERR_ERRORS) is this:<br /><br />SQLSTATE: IMSSP<br />code: -14<br />message: An invalid parameter was passed to sqlsrv_query.<br /><br />You have failed to pass a valid parameter to sqlsrv_query itself, which could be one of three parameters:<br />Connection: a valid handled for a SQL Server Connection<br />Query: a valid string containing your query, with placeholders for parameters:"(?)" <br />Parameters: An Array containing the values for your query parameters.  (optional, but much match the number of placeholders in your Query.<br /><br />I could not find any information about this error, and it turned out to be a missing connection parameter. In my case I found I had typed "$connn" instead of "$conn" in the code: <br />if ($stmt=sqlsrv_query($conn, $sql, $params)) { ...<br /><br />While this seems like a total "noobie" thing to do, the fact of the matter is there is very little information about this SQL Server Error message itself. So, the plain meaning of SQLSTATE "IMSSP", CODE "-14" is that you provided no valid connection object to your sqlsrv_query function.<br /><br />This message may appear baffling, especially if you have several occurrences of sqlsrv_query on a page, and you may have added a new occurrence after you closed your connection.<br /><br />Since I wasted an enormous amount of time tracing the normal channels, I thought referencing this error here would provide some help. In was hung up on "parameter" and was thinking it was a bad parameter object, and overlooked passing an undefined connection object to sqlsrv_query</span></code></div>
  </div>
 </div>
  <div class="note" id="122275">  <div class="votes">
    <div id="Vu122275">
    <a href="/manual/vote-note.php?id=122275&amp;page=function.sqlsrv-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122275">
    <a href="/manual/vote-note.php?id=122275&amp;page=function.sqlsrv-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122275" title="80% like this...">
    15
    </div>
  </div>
  <a href="#122275" class="name">
  <strong class="user"><em>vavra at 602 dot cz</em></strong></a><a class="genanchor" href="#122275"> &para;</a><div class="date" title="2018-01-17 08:47"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122275">
<div class="phpcode"><code><span class="html">Attention!<br /> If the sql contains INSERT, UPDATE or DELETE statements, the number of affected rows must be consumed. The sqlsrv_query returns a sql cursor that must be read to finish the transaction, if the result is non false. This same is valid for sqlsrv_execute. In this case the cursor must be also read using the prepared statement handle $smt.<br /><br />Another solution is to place SET NOCOUNT ON at the top of the sqlsrv statement and all called procedures, functions and triggers.<br /><br />We've practically observed it with sql statement with 500 inserts but only 368 was inserted without false returned. Prefixing by SET NOCOUNT ON or reading a cursor all rows were inserted.<br /><br />See Processing Results (ODBC): <a href="https://docs.microsoft.com/en-us/sql/relational-databases/native-client-odbc-results/processing-results-odbc" rel="nofollow" target="_blank">https://docs.microsoft.com/en-us/sql/relational-databases/native-client-odbc-results/processing-results-odbc</a> Each INSERT, UPDATE, and DELETE statement returns a result set containing only the number of rows affected by the modification. This count is made available when application calls SQLRowCount. ODBC 3.x applications must either call SQLRowCount to retrieve the result set or SQLMoreResults to cancel it. When an application executes a batch or stored procedure containing multiple INSERT, UPDATE, or DELETE statements, the result set from each modification statement must be processed using SQLRowCount or cancelled using SQLMoreResults. These counts can be cancelled by including a SET NOCOUNT ON statement in the batch or stored procedure.</span></code></div>
  </div>
 </div>
  <div class="note" id="107703">  <div class="votes">
    <div id="Vu107703">
    <a href="/manual/vote-note.php?id=107703&amp;page=function.sqlsrv-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107703">
    <a href="/manual/vote-note.php?id=107703&amp;page=function.sqlsrv-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107703" title="55% like this...">
    3
    </div>
  </div>
  <a href="#107703" class="name">
  <strong class="user"><em>bill_spam0001 at yahoo dot com</em></strong></a><a class="genanchor" href="#107703"> &para;</a><div class="date" title="2012-02-27 08:42"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107703">
<div class="phpcode"><code><span class="html">Tip: It may seem obvious, but you need to trim your strings down to fit in the database field you are saving them to via a parametrized query or a stored procedure. (IE: only submit up to 20 characters to a VARCHAR(20) database field). If you send a larger string to the query then it can handle, you will get an error.<br /><br />When cleaning up your strings, you will most likely find yourself using the php substr() function. This function will return, as documented, a boolean FALSE value when presented with an empty string. Not minding this boolean FALSE value will cause "0" to be saved in your database tables instead of an empty string.<br /><br />Since trimming your input is also important, the simple and intuitive solution for this is to trim your substr() output, which will consistently supply and empty string, not boolean FALSE.<br /><br />So this will always work: <br /><span class="default">&lt;?php <br /></span><span class="comment">//trim last returns our empty string as a data type of string<br /></span><span class="default">$address_line_2 </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'addr2'</span><span class="keyword">]),</span><span class="default">0</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">));<br /><br />echo </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$address_line_2</span><span class="keyword">);  </span><span class="comment">//outputs string<br /><br />//executing a database query will save "" in field tblAddressBook.addr2<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"update tblAddressBook set name=(?), addr1=(?), addr2=(?),..."<br /></span><span class="default">$params </span><span class="keyword">= array(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$address_line_1</span><span class="keyword">, </span><span class="default">$address_line_2</span><span class="keyword">, ...)<br /></span><span class="default">$sql_srv_query</span><span class="keyword">(</span><span class="default">$db_conn</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span>This second way will give seemingly unexpected data in your database.<br /><span class="default">&lt;?php <br /></span><span class="comment">//if the result of trimming our post variable is "" (empty), substr() will return FALSE<br /></span><span class="default">$address_line_2 </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'addr2'</span><span class="keyword">])),</span><span class="default">0</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">);<br /><br /></span><span class="comment">//$address_line_2 actually === FALSE, not ""<br /></span><span class="keyword">echo </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$address_line_2</span><span class="keyword">);  </span><span class="comment">//outputs boolean<br /><br />//executing a database query will save "0" in field tblAddressBook.addr2<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"update tblAddressBook set name=(?), addr1=(?), addr2=(?),..."<br /></span><span class="default">$params </span><span class="keyword">= array(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$address_line_1</span><span class="keyword">, </span><span class="default">$address_line_2</span><span class="keyword">, ...)<br /></span><span class="default">$sql_srv_query</span><span class="keyword">(</span><span class="default">$db_conn</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />You can also cast the type as a string using, <br />which will cast the boolean false back to the expected Empty String. <br /><span class="default">&lt;?php <br /><br />$address_line_2 </span><span class="keyword">= (string)</span><span class="default">substr</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'addr2'</span><span class="keyword">])),</span><span class="default">0</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">); <br /><br />echo </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$address_line_2</span><span class="keyword">);  </span><span class="comment">//outputs string<br /><br />//executing a database query will save "" in field tblAddressBook.addr2<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"update tblAddressBook set name=(?), addr1=(?), addr2=(?),..."<br /></span><span class="default">$params </span><span class="keyword">= array(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$address_line_1</span><span class="keyword">, </span><span class="default">$address_line_2</span><span class="keyword">, ...)<br /></span><span class="default">$sql_srv_query</span><span class="keyword">(</span><span class="default">$db_conn</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />I didn't notice this behavior until switching to IIS7, PHP 5.3.8 and SQL Server 2008.  But the behavior also is exhibited with IIS7, PHP 5.2 and SQL Server 2008.</span></code></div>
  </div>
 </div>
  <div class="note" id="110609">  <div class="votes">
    <div id="Vu110609">
    <a href="/manual/vote-note.php?id=110609&amp;page=function.sqlsrv-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110609">
    <a href="/manual/vote-note.php?id=110609&amp;page=function.sqlsrv-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110609" title="54% like this...">
    2
    </div>
  </div>
  <a href="#110609" class="name">
  <strong class="user"><em>oleg at mastak dot fi</em></strong></a><a class="genanchor" href="#110609"> &para;</a><div class="date" title="2012-11-12 07:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110609">
<div class="phpcode"><code><span class="html">If you hit an error "[Microsoft][ODBC Driver Manager] Invalid cursor state " when you specify valid Scrollable cursor, please check following bug report:<br /><br /><a href="https://bugs.php.net/bug.php?id=63498" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=63498</a><br /><br />There is currently a bug that requires options Scrollable to be specified before QueryTimeout in corresponding array.</span></code></div>
  </div>
 </div>
  <div class="note" id="123109">  <div class="votes">
    <div id="Vu123109">
    <a href="/manual/vote-note.php?id=123109&amp;page=function.sqlsrv-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123109">
    <a href="/manual/vote-note.php?id=123109&amp;page=function.sqlsrv-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123109" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#123109" class="name">
  <strong class="user"><em>anon at example dot com</em></strong></a><a class="genanchor" href="#123109"> &para;</a><div class="date" title="2018-09-05 09:57"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123109">
<div class="phpcode"><code><span class="html">Note that you can get multiple results when executing a single query, for example:<br /><br />    <span class="default">&lt;?php<br />    $stmt </span><span class="keyword">= </span><span class="default">sqlsrv_query</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"use dbname; select 1"</span><span class="keyword">);<br />    </span><span class="default">?&gt;<br /></span><br />Running the same query in tsql or management studio works as expected. However, with sqlsrv_* functions, this gives you two result sets -- one for the "use" and one for the "select".<br /><br />    <span class="default">&lt;?php<br />    </span><span class="comment">// Advance the result pointer from "use" to "select"<br />    </span><span class="default">sqlsrv_next_result</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br /><br />    </span><span class="comment">// Now you can read the "1"<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">sqlsrv_fetch_array</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">));<br />    </span><span class="default">?&gt;<br /></span><br />For a complex query that begins by creating/populating temporary tables, you will need to advance the result pointer past such statements to get data from the final select statement. In older PHP versions (using FreeTDS-based mssql connectivity at least), you'd get only the last result so didn't need to take this into account.</span></code></div>
  </div>
 </div>
  <div class="note" id="124805">  <div class="votes">
    <div id="Vu124805">
    <a href="/manual/vote-note.php?id=124805&amp;page=function.sqlsrv-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124805">
    <a href="/manual/vote-note.php?id=124805&amp;page=function.sqlsrv-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124805" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#124805" class="name">
  <strong class="user"><em>erikpsundberg at gmail dot com</em></strong></a><a class="genanchor" href="#124805"> &para;</a><div class="date" title="2020-03-08 06:24"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124805">
<div class="phpcode"><code><span class="html">2 Working Example<br /><br />print "&lt;h1&gt;SQL Query non PDO&lt;/h1&gt;";<br />print "&lt;h2&gt;Connection&lt;/h2&gt;";<br />$connectionInfo = array( "Database"=&gt;$sql_database, "UID"=&gt;$sql_username, "PWD"=&gt;$sql_password );<br />$conn = sqlsrv_connect( $sql_server, $connectionInfo);<br /><br />if( $conn === false ) {<br />     die( print_r( sqlsrv_errors(), true));<br />} else {<br />    print "Good DB Connection: $conn&lt;br&gt;";<br />}<br /><br />print "&lt;h2&gt;Query Example 1 | Fetching by Associate Array&lt;/h2&gt;";<br />$sql = "SELECT username, active FROM users WHERE username = '$username'";<br />print "SQL: $sql\n";<br />$result = sqlsrv_query($conn, $sql);<br />if($result === false) {<br />    die(print_r(sqlsrv_errors(), true));<br />}<br />#Fetching Data by array<br />while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {<br />    print_r($row);<br />}<br /><br />print_line();<br />print "&lt;h2&gt;Query Example 2 | injection protection | Fetching by Object&lt;/h2&gt;";<br />$sql = "SELECT username, active FROM users WHERE username = ?";<br />print "SQL: $sql\n";<br />$result = sqlsrv_query($conn, $sql, array($username));<br />if($result === false) {<br />    die(print_r(sqlsrv_errors(), true));<br />}<br />#Fetching Data by object<br />while($row = sqlsrv_fetch_object($result)) {<br />    print_r($row);<br />}<br /><br />--------------------------------------------------<br />Result<br /><br />Connection<br />Good DB Connection: Resource id #2<br />Query Example 1 | Fetching by Associate Array<br />SQL: SELECT username, active FROM users WHERE username = 'admin'<br />Array<br />(<br />    [username] =&gt; admin<br />    [active] =&gt; 1<br />)<br />######################################################################<br />Query Example 2 | injection protection | Fetching by Object<br />SQL: SELECT username, active FROM users WHERE username = ?<br />stdClass Object<br />(<br />    [username] =&gt; admin<br />    [active] =&gt; 1<br />)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.sqlsrv-query&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sqlsrv-query.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.sqlsrv.php">SQLSRV Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.sqlsrv-begin-transaction.php" title="sqlsrv_&#8203;begin_&#8203;transaction">sqlsrv_&#8203;begin_&#8203;transaction</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-cancel.php" title="sqlsrv_&#8203;cancel">sqlsrv_&#8203;cancel</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-client-info.php" title="sqlsrv_&#8203;client_&#8203;info">sqlsrv_&#8203;client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-close.php" title="sqlsrv_&#8203;close">sqlsrv_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-commit.php" title="sqlsrv_&#8203;commit">sqlsrv_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-configure.php" title="sqlsrv_&#8203;configure">sqlsrv_&#8203;configure</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-connect.php" title="sqlsrv_&#8203;connect">sqlsrv_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-errors.php" title="sqlsrv_&#8203;errors">sqlsrv_&#8203;errors</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-execute.php" title="sqlsrv_&#8203;execute">sqlsrv_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-fetch.php" title="sqlsrv_&#8203;fetch">sqlsrv_&#8203;fetch</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-fetch-array.php" title="sqlsrv_&#8203;fetch_&#8203;array">sqlsrv_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-fetch-object.php" title="sqlsrv_&#8203;fetch_&#8203;object">sqlsrv_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-field-metadata.php" title="sqlsrv_&#8203;field_&#8203;metadata">sqlsrv_&#8203;field_&#8203;metadata</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-free-stmt.php" title="sqlsrv_&#8203;free_&#8203;stmt">sqlsrv_&#8203;free_&#8203;stmt</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-get-config.php" title="sqlsrv_&#8203;get_&#8203;config">sqlsrv_&#8203;get_&#8203;config</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-get-field.php" title="sqlsrv_&#8203;get_&#8203;field">sqlsrv_&#8203;get_&#8203;field</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-has-rows.php" title="sqlsrv_&#8203;has_&#8203;rows">sqlsrv_&#8203;has_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-next-result.php" title="sqlsrv_&#8203;next_&#8203;result">sqlsrv_&#8203;next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-num-fields.php" title="sqlsrv_&#8203;num_&#8203;fields">sqlsrv_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-num-rows.php" title="sqlsrv_&#8203;num_&#8203;rows">sqlsrv_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-prepare.php" title="sqlsrv_&#8203;prepare">sqlsrv_&#8203;prepare</a>
                        </li>
                                                <li class="current">
                            <a href="function.sqlsrv-query.php" title="sqlsrv_&#8203;query">sqlsrv_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-rollback.php" title="sqlsrv_&#8203;rollback">sqlsrv_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-rows-affected.php" title="sqlsrv_&#8203;rows_&#8203;affected">sqlsrv_&#8203;rows_&#8203;affected</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-send-stream-data.php" title="sqlsrv_&#8203;send_&#8203;stream_&#8203;data">sqlsrv_&#8203;send_&#8203;stream_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.sqlsrv-server-info.php" title="sqlsrv_&#8203;server_&#8203;info">sqlsrv_&#8203;server_&#8203;info</a>
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
