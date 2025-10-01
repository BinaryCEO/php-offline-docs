<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: sqlsrv_prepare - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.sqlsrv-prepare.php">
 <link rel="shorturl" href="https://www.php.net/sqlsrv-prepare">
 <link rel="alternate" href="https://www.php.net/sqlsrv-prepare" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sqlsrv.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.sqlsrv-num-rows.php">
 <link rel="next" href="https://www.php.net/manual/en/function.sqlsrv-query.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.sqlsrv-prepare.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.sqlsrv-prepare.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.sqlsrv-prepare.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.sqlsrv-prepare.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.sqlsrv-prepare.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.sqlsrv-prepare.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.sqlsrv-prepare.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.sqlsrv-prepare.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.sqlsrv-prepare.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.sqlsrv-prepare.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.sqlsrv-prepare.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Prepares a query for execution" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: sqlsrv_prepare - Manual" />
<meta name="twitter:description" content="Prepares a query for execution" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: sqlsrv_prepare - Manual" />
<meta itemprop="description" content="Prepares a query for execution" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Prepares a query for execution" />

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
        <a href="function.sqlsrv-query.php">
          sqlsrv_query &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.sqlsrv-num-rows.php">
          &laquo; sqlsrv_num_rows        </a>
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
            <option value='en/function.sqlsrv-prepare.php' selected="selected">English</option>
            <option value='de/function.sqlsrv-prepare.php'>German</option>
            <option value='es/function.sqlsrv-prepare.php'>Spanish</option>
            <option value='fr/function.sqlsrv-prepare.php'>French</option>
            <option value='it/function.sqlsrv-prepare.php'>Italian</option>
            <option value='ja/function.sqlsrv-prepare.php'>Japanese</option>
            <option value='pt_BR/function.sqlsrv-prepare.php'>Brazilian Portuguese</option>
            <option value='ru/function.sqlsrv-prepare.php'>Russian</option>
            <option value='tr/function.sqlsrv-prepare.php'>Turkish</option>
            <option value='uk/function.sqlsrv-prepare.php'>Ukrainian</option>
            <option value='zh/function.sqlsrv-prepare.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.sqlsrv-prepare" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">sqlsrv_prepare</h1>
  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_prepare</span> &mdash; <span class="dc-title">Prepares a query for execution</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.sqlsrv-prepare-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>sqlsrv_prepare</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$conn</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$sql</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$params</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   Prepares a query for execution. This function is ideal for preparing a query 
   that will be executed multiple times with different parameter values.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.sqlsrv-prepare-parameters">
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
       An array specifying parameter information when executing a parameterized 
       query. Array elements can be any of the following:
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
          The default value is SQLSRV_PARAM_IN.         </td>
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
          or to send stream data in chunks (<strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>). By default, the value is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>. 
          For more information, see <span class="function"><a href="function.sqlsrv-send-stream-data.php" class="function">sqlsrv_send_stream_data()</a></span>.</td>
         </tr>

         <tr>
          <td>Scrollable</td>
          <td>SQLSRV_CURSOR_FORWARD, SQLSRV_CURSOR_STATIC, SQLSRV_CURSOR_DYNAMIC, 
          or SQLSRV_CURSOR_KEYSET</td>
          <td>See <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">&raquo;&nbsp;Specifying a Cursor Type and Selecting Rows</a> 
          in the Microsoft SQLSRV documentation.</td>
         </tr>

        </tbody>
       
      </table>

     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-prepare-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a statement resource on success and <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occurred.
  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-function.sqlsrv-prepare-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2169">
    <p><strong>Example #1 <span class="function"><strong>sqlsrv_prepare()</strong></span> example</strong></p>
    <div class="example-contents"><p>
    This example demonstrates how to prepare a statement with <span class="function"><strong>sqlsrv_prepare()</strong></span> 
    and re-execute it multiple times (with different parameter values) using <span class="function"><a href="function.sqlsrv-execute.php" class="function">sqlsrv_execute()</a></span>.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #0000BB">$serverName</span><span style="color: #007700">, </span><span style="color: #0000BB">$connectionInfo</span><span style="color: #007700">);<br />if( </span><span style="color: #0000BB">$conn </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    die( </span><span style="color: #0000BB">print_r</span><span style="color: #007700">( </span><span style="color: #0000BB">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />}<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE Table_1<br />        SET OrderQty = ?<br />        WHERE SalesOrderID = ?"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Initialize parameters and prepare the statement. <br />// Variables $qty and $id are bound to the statement, $stmt.<br /></span><span style="color: #0000BB">$qty </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$id </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">sqlsrv_prepare</span><span style="color: #007700">( </span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">, array( &amp;</span><span style="color: #0000BB">$qty</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">));<br />if( !</span><span style="color: #0000BB">$stmt </span><span style="color: #007700">) {<br />    die( </span><span style="color: #0000BB">print_r</span><span style="color: #007700">( </span><span style="color: #0000BB">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />}<br /><br /></span><span style="color: #FF8000">// Set up the SalesOrderDetailID and OrderQty information. <br />// This array maps the order ID to order quantity in key=&gt;value pairs.<br /></span><span style="color: #0000BB">$orders </span><span style="color: #007700">= array( </span><span style="color: #0000BB">1</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">20</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">30</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Execute the statement for each order.<br /></span><span style="color: #007700">foreach( </span><span style="color: #0000BB">$orders </span><span style="color: #007700">as </span><span style="color: #0000BB">$id </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$qty</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// Because $id and $qty are bound to $stmt1, their updated<br />    // values are used with each execution of the statement. <br />    </span><span style="color: #007700">if( </span><span style="color: #0000BB">sqlsrv_execute</span><span style="color: #007700">( </span><span style="color: #0000BB">$stmt </span><span style="color: #007700">) === </span><span style="color: #0000BB">false </span><span style="color: #007700">) {<br />          die( </span><span style="color: #0000BB">print_r</span><span style="color: #007700">( </span><span style="color: #0000BB">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.sqlsrv-prepare-notes">
  <h3 class="title">Notes</h3>
  <p class="para">
   When you prepare a statement that uses variables as parameters, the variables 
   are bound to the statement. This means that if you update the values of the 
   variables, the next time you execute the statement it will run with updated 
   parameter values. For statements that you plan to execute only once, use 
   <span class="function"><a href="function.sqlsrv-query.php" class="function">sqlsrv_query()</a></span>.
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.sqlsrv-prepare-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.sqlsrv-execute.php" class="function" rel="rdfs-seeAlso">sqlsrv_execute()</a> - Executes a statement prepared with sqlsrv_prepare</span></li>
    <li><span class="function"><a href="function.sqlsrv-query.php" class="function" rel="rdfs-seeAlso">sqlsrv_query()</a> - Prepares and executes a query</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sqlsrv/functions/sqlsrv-prepare.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.sqlsrv-prepare%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.sqlsrv-prepare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sqlsrv-prepare.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117807">  <div class="votes">
    <div id="Vu117807">
    <a href="/manual/vote-note.php?id=117807&amp;page=function.sqlsrv-prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117807">
    <a href="/manual/vote-note.php?id=117807&amp;page=function.sqlsrv-prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117807" title="61% like this...">
    5
    </div>
  </div>
  <a href="#117807" class="name">
  <strong class="user"><em>tuxedobob</em></strong></a><a class="genanchor" href="#117807"> &para;</a><div class="date" title="2015-08-12 08:54"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117807">
<div class="phpcode"><code><span class="html">Be careful with your variables once you bind them to a statement with sqlsrv_prepare.<br /><br />Consider the following:<br /><br /><span class="default">&lt;?php<br />$dude </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$time </span><span class="keyword">= new </span><span class="default">DateTime</span><span class="keyword">();<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"INSERT INTO my_table (person, timein) VALUES (?, ?)"</span><span class="keyword">;<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">sqlsrv_prepare</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">, array(&amp;</span><span class="default">$dude</span><span class="keyword">, &amp;</span><span class="default">$time</span><span class="keyword">));<br /><br />...<br /></span><span class="comment">// many lines later<br /><br /></span><span class="keyword">foreach (</span><span class="default">$times </span><span class="keyword">as &amp;</span><span class="default">$time</span><span class="keyword">) {<br />   </span><span class="comment">//do stuff<br /></span><span class="keyword">}<br /><br /></span><span class="comment">// later still...<br /></span><span class="default">$time </span><span class="keyword">= </span><span class="default">$times</span><span class="keyword">[</span><span class="string">'start'</span><span class="keyword">];<br />if( </span><span class="default">sqlsrv_execute</span><span class="keyword">( </span><span class="default">$stmt </span><span class="keyword">) === </span><span class="default">false </span><span class="keyword">) {<br />          die( </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">sqlsrv_errors</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />I did something like this. I prepared a statement at the start, used the variable again in the middle, and then set the value I wanted before running the query.<br /><br />Trouble is, I used the variable as an iterator instead of a simple scalar. This caused PHP to use a different location in memory, and the location it was previously bound to was invalid. So SQL simply inserted a default date/time.<br /><br />Worse, because SQL just inserted a default, it didn't throw any errors, and in trying to debug it, I did something like this:<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">$time</span><span class="keyword">);<br /></span><span class="default">sqlsrv_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br /></span><span class="default">$q </span><span class="keyword">= </span><span class="string">"SELECT * FROM my_table WHERE id=@@IDENTITY"</span><span class="keyword">;<br /></span><span class="default">$r </span><span class="keyword">= </span><span class="default">sqlsrv_query</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$q</span><span class="keyword">);<br /></span><span class="default">$row </span><span class="keyword">= </span><span class="default">sqlsrv_fetch_array</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">); </span><span class="default">$id </span><span class="keyword">= </span><span class="default">$row</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">[</span><span class="string">'time'</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span><br />Having it appear as though you're sending SQL the correct data, and seeing it spitting back something else entirely is absolutely maddening.<br /><br />So if SQL seems to be inserting garbage with prepared statements, MAKE SURE YOU'RE NOT USING THE VARIABLES ANYWHERE ELSE.</span></code></div>
  </div>
 </div>
  <div class="note" id="115353">  <div class="votes">
    <div id="Vu115353">
    <a href="/manual/vote-note.php?id=115353&amp;page=function.sqlsrv-prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115353">
    <a href="/manual/vote-note.php?id=115353&amp;page=function.sqlsrv-prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115353" title="43% like this...">
    -3
    </div>
  </div>
  <a href="#115353" class="name">
  <strong class="user"><em>matt at bigbadweb dot co dot uk</em></strong></a><a class="genanchor" href="#115353"> &para;</a><div class="date" title="2014-07-10 10:07"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115353">
<div class="phpcode"><code><span class="html">Example of how to formally specify the params, AND get output.<br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Setup connection<br /></span><span class="default">$serverName </span><span class="keyword">= </span><span class="string">"serverName\sqlexpress"</span><span class="keyword">;<br /></span><span class="default">$connectionInfo </span><span class="keyword">= array( </span><span class="string">"Database"</span><span class="keyword">=&gt;</span><span class="string">"dbName"</span><span class="keyword">, </span><span class="string">"UID"</span><span class="keyword">=&gt;</span><span class="string">"username"</span><span class="keyword">, </span><span class="string">"PWD"</span><span class="keyword">=&gt;</span><span class="string">"password"</span><span class="keyword">);<br /></span><span class="default">$conn </span><span class="keyword">= </span><span class="default">sqlsrv_connect</span><span class="keyword">( </span><span class="default">$serverName</span><span class="keyword">, </span><span class="default">$connectionInfo</span><span class="keyword">);<br />if( </span><span class="default">$conn </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />  die( </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">sqlsrv_errors</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">));<br />}<br /><br /></span><span class="comment">// specify params - MUST be a variable that can be passed by reference!<br /></span><span class="default">$myparams</span><span class="keyword">[</span><span class="string">'Item_ID'</span><span class="keyword">] = </span><span class="default">intval</span><span class="keyword">(-</span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$myparams</span><span class="keyword">[</span><span class="string">'Item_Name'</span><span class="keyword">] = </span><span class="string">"Foo"</span><span class="keyword">;<br /><br /></span><span class="comment">// Set up the proc params array - be sure to pass the param by reference<br /></span><span class="default">$procedure_params </span><span class="keyword">= array(<br /> array(&amp;</span><span class="default">$myparams</span><span class="keyword">[</span><span class="string">'Item_ID'</span><span class="keyword">], </span><span class="default">SQLSRV_PARAM_OUT</span><span class="keyword">),<br /> array(&amp;</span><span class="default">$myparams</span><span class="keyword">[</span><span class="string">'Item_Name'</span><span class="keyword">], </span><span class="default">SQLSRV_PARAM_OUT</span><span class="keyword">)<br />);<br /><br /></span><span class="comment">// EXEC the procedure, {call stp_Create_Item (@Item_ID = ?, @Item_Name = ?)} seems to fail with various errors in my experiments<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"EXEC stp_Create_Item @Item_ID = ?, @Item_Name = ?"</span><span class="keyword">;<br /><br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">sqlsrv_prepare</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">, </span><span class="default">$procedure_params</span><span class="keyword">);<br /><br />if( !</span><span class="default">$stmt </span><span class="keyword">) {<br /> die( </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">sqlsrv_errors</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">));<br />}<br /><br />if(</span><span class="default">sqlsrv_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">)){<br />  while(</span><span class="default">$res </span><span class="keyword">= </span><span class="default">sqlsrv_next_result</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">)){<br />    </span><span class="comment">// make sure all result sets are stepped through, since the output params may not be set until this happens<br />  </span><span class="keyword">}<br />  </span><span class="comment">// Output params are now set,<br />  </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">);<br />  </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$myparams</span><span class="keyword">);<br />}else{<br />  die( </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">sqlsrv_errors</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.sqlsrv-prepare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sqlsrv-prepare.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.sqlsrv-prepare.php" title="sqlsrv_&#8203;prepare">sqlsrv_&#8203;prepare</a>
                        </li>
                                                <li class="">
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
