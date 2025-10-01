<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: sqlsrv_execute - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.sqlsrv-execute.php">
 <link rel="shorturl" href="https://www.php.net/sqlsrv-execute">
 <link rel="alternate" href="https://www.php.net/sqlsrv-execute" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sqlsrv.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.sqlsrv-errors.php">
 <link rel="next" href="https://www.php.net/manual/en/function.sqlsrv-fetch.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.sqlsrv-execute.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.sqlsrv-execute.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.sqlsrv-execute.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.sqlsrv-execute.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.sqlsrv-execute.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.sqlsrv-execute.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.sqlsrv-execute.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.sqlsrv-execute.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.sqlsrv-execute.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.sqlsrv-execute.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.sqlsrv-execute.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Executes a statement prepared with sqlsrv_prepare" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: sqlsrv_execute - Manual" />
<meta name="twitter:description" content="Executes a statement prepared with sqlsrv_prepare" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: sqlsrv_execute - Manual" />
<meta itemprop="description" content="Executes a statement prepared with sqlsrv_prepare" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Executes a statement prepared with sqlsrv_prepare" />

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
        <a href="function.sqlsrv-fetch.php">
          sqlsrv_fetch &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.sqlsrv-errors.php">
          &laquo; sqlsrv_errors        </a>
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
            <option value='en/function.sqlsrv-execute.php' selected="selected">English</option>
            <option value='de/function.sqlsrv-execute.php'>German</option>
            <option value='es/function.sqlsrv-execute.php'>Spanish</option>
            <option value='fr/function.sqlsrv-execute.php'>French</option>
            <option value='it/function.sqlsrv-execute.php'>Italian</option>
            <option value='ja/function.sqlsrv-execute.php'>Japanese</option>
            <option value='pt_BR/function.sqlsrv-execute.php'>Brazilian Portuguese</option>
            <option value='ru/function.sqlsrv-execute.php'>Russian</option>
            <option value='tr/function.sqlsrv-execute.php'>Turkish</option>
            <option value='uk/function.sqlsrv-execute.php'>Ukrainian</option>
            <option value='zh/function.sqlsrv-execute.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.sqlsrv-execute" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">sqlsrv_execute</h1>
  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_execute</span> &mdash; <span class="dc-title">Executes a statement prepared with <span class="function"><a href="function.sqlsrv-prepare.php" class="function">sqlsrv_prepare()</a></span></span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.sqlsrv-execute-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>sqlsrv_execute</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stmt</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Executes a statement prepared with <span class="function"><a href="function.sqlsrv-prepare.php" class="function">sqlsrv_prepare()</a></span>. This 
   function is ideal for executing a prepared statement multiple times with 
   different parameter values.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.sqlsrv-execute-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">stmt</code></dt>
     <dd>
      <p class="para">
       A statement resource returned by <span class="function"><a href="function.sqlsrv-prepare.php" class="function">sqlsrv_prepare()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-execute-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-function.sqlsrv-execute-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2157">
    <p><strong>Example #1 <span class="function"><strong>sqlsrv_execute()</strong></span> example</strong></p>
    <div class="example-contents"><p>
    This example demonstrates how to prepare a statement with 
    <span class="function"><a href="function.sqlsrv-prepare.php" class="function">sqlsrv_prepare()</a></span> and re-execute it multiple times (with 
    different parameter values) using <span class="function"><strong>sqlsrv_execute()</strong></span>.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #0000BB">$serverName</span><span style="color: #007700">, </span><span style="color: #0000BB">$connectionInfo</span><span style="color: #007700">);<br />if( </span><span style="color: #0000BB">$conn </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    die( </span><span style="color: #0000BB">print_r</span><span style="color: #007700">( </span><span style="color: #0000BB">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />}<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE Table_1<br />        SET OrderQty = ?<br />        WHERE SalesOrderID = ?"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Initialize parameters and prepare the statement. <br />// Variables $qty and $id are bound to the statement, $stmt.<br /></span><span style="color: #0000BB">$qty </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$id </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">sqlsrv_prepare</span><span style="color: #007700">( </span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$sql</span><span style="color: #007700">, array( &amp;</span><span style="color: #0000BB">$qty</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">));<br />if( !</span><span style="color: #0000BB">$stmt </span><span style="color: #007700">) {<br />    die( </span><span style="color: #0000BB">print_r</span><span style="color: #007700">( </span><span style="color: #0000BB">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />}<br /><br /></span><span style="color: #FF8000">// Set up the SalesOrderDetailID and OrderQty information. <br />// This array maps the order ID to order quantity in key=&gt;value pairs.<br /></span><span style="color: #0000BB">$orders </span><span style="color: #007700">= array( </span><span style="color: #0000BB">1</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">20</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">30</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Execute the statement for each order.<br /></span><span style="color: #007700">foreach( </span><span style="color: #0000BB">$orders </span><span style="color: #007700">as </span><span style="color: #0000BB">$id </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$qty</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// Because $id and $qty are bound to $stmt1, their updated<br />    // values are used with each execution of the statement. <br />    </span><span style="color: #007700">if( </span><span style="color: #0000BB">sqlsrv_execute</span><span style="color: #007700">( </span><span style="color: #0000BB">$stmt </span><span style="color: #007700">) === </span><span style="color: #0000BB">false </span><span style="color: #007700">) {<br />          die( </span><span style="color: #0000BB">print_r</span><span style="color: #007700">( </span><span style="color: #0000BB">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.sqlsrv-execute-notes">
  <h3 class="title">Notes</h3>
  <p class="para">
   When you prepare a statement that uses variables as parameters, the variables 
   are bound to the statement. This means that if you update the values of the 
   variables, the next time you execute the statement it will run with updated 
   parameter values. For statements that you plan to execute only once, use 
   <span class="function"><a href="function.sqlsrv-query.php" class="function">sqlsrv_query()</a></span>.
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.sqlsrv-execute-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.sqlsrv-prepare.php" class="function" rel="rdfs-seeAlso">sqlsrv_prepare()</a> - Prepares a query for execution</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sqlsrv/functions/sqlsrv-execute.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.sqlsrv-execute%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.sqlsrv-execute&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sqlsrv-execute.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118934">  <div class="votes">
    <div id="Vu118934">
    <a href="/manual/vote-note.php?id=118934&amp;page=function.sqlsrv-execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118934">
    <a href="/manual/vote-note.php?id=118934&amp;page=function.sqlsrv-execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118934" title="58% like this...">
    9
    </div>
  </div>
  <a href="#118934" class="name">
  <strong class="user"><em>tuxedobob</em></strong></a><a class="genanchor" href="#118934"> &para;</a><div class="date" title="2016-03-01 04:53"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118934">
<div class="phpcode"><code><span class="html">If you're used to working with sqlsrv_query, you're probably used to the following flow:<br /><br /><span class="default">&lt;?php<br />$query </span><span class="keyword">= </span><span class="string">"SELECT * FROM mytable WHERE id=?"</span><span class="keyword">;<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">sqlsrv_query</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">, array(</span><span class="default">$myID</span><span class="keyword">));<br /></span><span class="default">$row </span><span class="keyword">= </span><span class="default">sqlsrv_fetch_array</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Given that, you might think the following works:<br /><br /><span class="default">&lt;?php<br />$myID </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">"SELECT * FROM mytable WHERE id=?"</span><span class="keyword">;<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">sqlsrv_prepare</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">, array(&amp;</span><span class="default">$myID</span><span class="keyword">));<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">sqlsrv_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br /></span><span class="default">$row </span><span class="keyword">= </span><span class="default">sqlsrv_fetch_array</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />It doesn't. The reason is that sqlsrv_execute, as noted above, returns true or false on success or failure, respectively. The variable that has your result is actually $stmt. Change the last row to <br /><br /><span class="default">&lt;?php<br />$row </span><span class="keyword">= </span><span class="default">sqlsrv_fetch_array</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />and it works as expected.</span></code></div>
  </div>
 </div>
  <div class="note" id="122276">  <div class="votes">
    <div id="Vu122276">
    <a href="/manual/vote-note.php?id=122276&amp;page=function.sqlsrv-execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122276">
    <a href="/manual/vote-note.php?id=122276&amp;page=function.sqlsrv-execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122276" title="66% like this...">
    3
    </div>
  </div>
  <a href="#122276" class="name">
  <strong class="user"><em>vavra at 602 dot cz</em></strong></a><a class="genanchor" href="#122276"> &para;</a><div class="date" title="2018-01-17 08:48"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122276">
<div class="phpcode"><code><span class="html">Attention!<br /> If the sql contains INSERT, UPDATE or DELETE statements, the number of affected rows must be consumed. The sqlsrv_query returns a sql cursor that must be read to finish the transaction, if the result is non false. This same is valid for sqlsrv_execute. In this case the cursor must be also read using the prepared statement handle $smt.<br /><br />Another solution is to place SET NOCOUNT ON at the top of the sqlsrv statement and all called procedures, functions and triggers.<br /><br />We've practically observed it with sql statement with 500 inserts but only 368 was inserted without false returned. Prefixing by SET NOCOUNT ON or reading a cursor all rows were inserted.<br /><br />See Processing Results (ODBC): <a href="https://docs.microsoft.com/en-us/sql/relational-databases/native-client-odbc-results/processing-results-odbc" rel="nofollow" target="_blank">https://docs.microsoft.com/en-us/sql/relational-databases/native-client-odbc-results/processing-results-odbc</a> Each INSERT, UPDATE, and DELETE statement returns a result set containing only the number of rows affected by the modification. This count is made available when application calls SQLRowCount. ODBC 3.x applications must either call SQLRowCount to retrieve the result set or SQLMoreResults to cancel it. When an application executes a batch or stored procedure containing multiple INSERT, UPDATE, or DELETE statements, the result set from each modification statement must be processed using SQLRowCount or cancelled using SQLMoreResults. These counts can be cancelled by including a SET NOCOUNT ON statement in the batch or stored procedure.</span></code></div>
  </div>
 </div>
  <div class="note" id="124804">  <div class="votes">
    <div id="Vu124804">
    <a href="/manual/vote-note.php?id=124804&amp;page=function.sqlsrv-execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124804">
    <a href="/manual/vote-note.php?id=124804&amp;page=function.sqlsrv-execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124804" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124804" class="name">
  <strong class="user"><em>esundberg at nitelusa dot com</em></strong></a><a class="genanchor" href="#124804"> &para;</a><div class="date" title="2020-03-08 06:22"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124804">
<div class="phpcode"><code><span class="html">Working PDO Prepare and Execute Example<br /><br />Code<br />----------------------------------------<br />print "&lt;h1&gt;PDO Example&lt;/h1&gt;";<br /><br />print "&lt;h2&gt;PDO Connection&lt;/h2&gt;";<br />try {<br />    $pdo = new PDO("sqlsrv:server=$sql_server;Database=$sql_database",$sql_username,$sql_password,['ReturnDatesAsStrings'=&gt;true]);<br />    $pdo-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br />} catch(PDOException $e) {<br />    echo "Connection failed: " . $e-&gt;getMessage();<br />    die("Database Connection Error");<br />    <br />}<br /><br />print "&lt;h2&gt;Check for PDO Connection&lt;/h2&gt;";<br />if($pdo === false) {<br />    print "No DB Connection&lt;br&gt;";<br />} else {<br />    print "Good DB Connection&lt;br&gt;";<br />}<br /><br />print "&lt;h2&gt;PDO Query Example 1 with SQL Injection&lt;/h2&gt;";<br />print "I Personally prefer pdo due to binding of paramaters by name.&lt;br&gt;";<br />$sql = "SELECT username, active FROM users WHERE username = :username";<br />print "SQL: $sql\n";<br />$stmt = $pdo-&gt;prepare($sql);<br />$stmt-&gt;bindParam(':username', $username);<br />$stmt-&gt;execute();<br />while($r = $stmt-&gt;fetch(PDO::FETCH_OBJ)) {<br />    print_r($r);<br />}<br /><br />------------------------------------------------------<br />PDO Example<br />PDO Connection<br />Check for PDO Connection<br />Good DB Connection<br />PDO Query Example 1 with SQL Injection<br />I Personally prefer pdo due to binding of paramaters by name.<br />SQL: SELECT username, active FROM users WHERE username = :username<br />stdClass Object<br />(<br />    [username] =&gt; admin<br />    [active] =&gt; 1<br />)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.sqlsrv-execute&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sqlsrv-execute.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
