<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: odbc_pconnect - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.odbc-pconnect.php">
 <link rel="shorturl" href="https://www.php.net/odbc-pconnect">
 <link rel="alternate" href="https://www.php.net/odbc-pconnect" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.uodbc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.odbc-num-rows.php">
 <link rel="next" href="https://www.php.net/manual/en/function.odbc-prepare.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.odbc-pconnect.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.odbc-pconnect.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.odbc-pconnect.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.odbc-pconnect.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.odbc-pconnect.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.odbc-pconnect.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.odbc-pconnect.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.odbc-pconnect.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.odbc-pconnect.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.odbc-pconnect.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.odbc-pconnect.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Open a persistent database connection" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: odbc_pconnect - Manual" />
<meta name="twitter:description" content="Open a persistent database connection" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: odbc_pconnect - Manual" />
<meta itemprop="description" content="Open a persistent database connection" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Open a persistent database connection" />

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
        <a href="function.odbc-prepare.php">
          odbc_prepare &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.odbc-num-rows.php">
          &laquo; odbc_num_rows        </a>
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
            <option value='en/function.odbc-pconnect.php' selected="selected">English</option>
            <option value='de/function.odbc-pconnect.php'>German</option>
            <option value='es/function.odbc-pconnect.php'>Spanish</option>
            <option value='fr/function.odbc-pconnect.php'>French</option>
            <option value='it/function.odbc-pconnect.php'>Italian</option>
            <option value='ja/function.odbc-pconnect.php'>Japanese</option>
            <option value='pt_BR/function.odbc-pconnect.php'>Brazilian Portuguese</option>
            <option value='ru/function.odbc-pconnect.php'>Russian</option>
            <option value='tr/function.odbc-pconnect.php'>Turkish</option>
            <option value='uk/function.odbc-pconnect.php'>Ukrainian</option>
            <option value='zh/function.odbc-pconnect.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.odbc-pconnect" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">odbc_pconnect</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">odbc_pconnect</span> &mdash; <span class="dc-title">Open a persistent database connection</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.odbc-pconnect-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>odbc_pconnect</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dsn</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$user</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$password</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$cursor_option</code><span class="initializer"> = <strong><code><a href="uodbc.constants.php#constant.sql-cur-use-driver">SQL_CUR_USE_DRIVER</a></code></strong></span></span><br>): <span class="type"><span class="type">Odbc\Connection</span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Opens a persistent database connection.
  </p>
  <p class="para">
   This function is much like
   <span class="function"><a href="function.odbc-connect.php" class="function">odbc_connect()</a></span>, except that the connection is
   not really closed when the script has finished.  Future requests
   for a connection with the same <code class="parameter">dsn</code>,
   <code class="parameter">user</code>, <code class="parameter">password</code>
   combination (via <span class="function"><a href="function.odbc-connect.php" class="function">odbc_connect()</a></span> and
   <span class="function"><strong>odbc_pconnect()</strong></span>) can reuse the persistent
   connection.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.odbc-pconnect-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   See <span class="function"><a href="function.odbc-connect.php" class="function">odbc_connect()</a></span> for details.
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.odbc-pconnect-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an ODBC connection,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.odbc-pconnect-changelog">
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
   This function returns a <span class="classname"><strong class="classname">Odbc\Connection</strong></span> instance now;
   previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
  </td>
 </tr>

     <tr>
  <td>8.4.0</td>
  <td>
   <code class="parameter">user</code> and <code class="parameter">password</code> are now nullable,
   they are now also optional and default to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
  </td>
 </tr>

 <tr>
  <td>8.4.0</td>
  <td>
   Previously, using an empty string for <code class="parameter">password</code> would not include
   <code class="literal">pwd</code> in the generated connection string for <code class="parameter">dsn</code>.
   It is now generated to include a <code class="literal">pwd</code> which has an empty string as its value.
   To restore the previous behaviour <code class="parameter">password</code> can now be set to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
  </td>
 </tr>

 <tr>
  <td>8.4.0</td>
  <td>
   Previously, if <code class="parameter">dsn</code> contained <code class="literal">uid</code> or <code class="literal">pwd</code>
   both <code class="parameter">user</code> and <code class="parameter">password</code> parameters were ignored.
   Now <code class="parameter">user</code> is only ignored if <code class="parameter">dsn</code> contains
   <code class="literal">uid</code>, and <code class="parameter">password</code>  is only ignored if
   <code class="parameter">dsn</code> contains <code class="literal">pwd</code>.
  </td>
 </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 notes" id="refsect1-function.odbc-pconnect-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Persistent connections have no effect if PHP is used as a CGI
    program.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.odbc-pconnect-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.odbc-connect.php" class="function" rel="rdfs-seeAlso">odbc_connect()</a> - Connect to a datasource</span></li>
    <li><a href="features.persistent-connections.php" class="link">Persistent Database Connections</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/uodbc/functions/odbc-pconnect.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.odbc-pconnect%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.odbc-pconnect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-pconnect.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="6018">  <div class="votes">
    <div id="Vu6018">
    <a href="/manual/vote-note.php?id=6018&amp;page=function.odbc-pconnect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd6018">
    <a href="/manual/vote-note.php?id=6018&amp;page=function.odbc-pconnect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V6018" title="60% like this...">
    2
    </div>
  </div>
  <a href="#6018" class="name">
  <strong class="user"><em>etsai at email dot com</em></strong></a><a class="genanchor" href="#6018"> &para;</a><div class="date" title="2000-06-28 09:10"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom6018">
<div class="phpcode"><code><span class="html">The following constants are defined for cursortype:
<br /> - SQL_CUR_USE_IF_NEEDED 
<br /> - SQL_CUR_USE_ODBC 
<br /> - SQL_CUR_USE_DRIVER 
<br /> - SQL_CUR_DEFAULT 
<br />
<br />With some ODBC drivers, executing a complex stored procedure may fail with an error similar to: "Cannot open a cursor on a stored procedure that has anything other than a single select statement in it". Using SQL_CUR_USE_ODBC may avoid that error. Also, some drivers don't support the optional row_number parameter in odbc_fetch_row(). SQL_CUR_USE_ODBC might help in that case, too.</span></code></div>
  </div>
 </div>
  <div class="note" id="7686">  <div class="votes">
    <div id="Vu7686">
    <a href="/manual/vote-note.php?id=7686&amp;page=function.odbc-pconnect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd7686">
    <a href="/manual/vote-note.php?id=7686&amp;page=function.odbc-pconnect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V7686" title="50% like this...">
    0
    </div>
  </div>
  <a href="#7686" class="name">
  <strong class="user"><em>wls at wwco dot com</em></strong></a><a class="genanchor" href="#7686"> &para;</a><div class="date" title="2000-08-11 07:44"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom7686">
<div class="phpcode"><code><span class="html">I found that using  odbc_close($odbchandle)  on a connection opened by odbc_pconnect() causes a warning "not a valid ODBC-Link resource".  So you can't just change odbc_connect() to odbc_pconnect() and expect things to work without warning messages.  However, you can use odbc_close_all() and not get a warning.</span></code></div>
  </div>
 </div>
  <div class="note" id="10668">  <div class="votes">
    <div id="Vu10668">
    <a href="/manual/vote-note.php?id=10668&amp;page=function.odbc-pconnect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10668">
    <a href="/manual/vote-note.php?id=10668&amp;page=function.odbc-pconnect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10668" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#10668" class="name">
  <strong class="user"><em>j_schrab at execpc dot com</em></strong></a><a class="genanchor" href="#10668"> &para;</a><div class="date" title="2001-01-16 09:41"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10668">
<div class="phpcode"><code><span class="html">Ok, learning time.  As I was told by the PHP-DevTeam...
<br />
<br />
<br />Multiple connections are supported, but when you try to connect with exactly the same parameters, an existing
<br />connection will be reused, leading to the behaviour you see.
<br />
<br />You can simply omit the calls to odbc_close() since
<br />connections get closed on script termination anyway or better:
<br />Consider making your connection id a global variable or pass
<br />it to your functions.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.odbc-pconnect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-pconnect.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
