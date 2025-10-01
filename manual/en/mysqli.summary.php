<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: The MySQLi Extension Function Summary - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.summary.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.summary.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.summary.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.mysqli.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.notes.php">
 <link rel="next" href="https://www.php.net/manual/en/class.mysqli.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.summary.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.summary.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.summary.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.summary.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.summary.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.summary.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.summary.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.summary.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.summary.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.summary.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.summary.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The MySQLi Extension Function Summary" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: The MySQLi Extension Function Summary - Manual" />
<meta name="twitter:description" content="The MySQLi Extension Function Summary" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: The MySQLi Extension Function Summary - Manual" />
<meta itemprop="description" content="The MySQLi Extension Function Summary" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The MySQLi Extension Function Summary" />

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
        <a href="class.mysqli.php">
          mysqli &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.notes.php">
          &laquo; Notes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      </ul>
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
            <option value='en/mysqli.summary.php' selected="selected">English</option>
            <option value='de/mysqli.summary.php'>German</option>
            <option value='es/mysqli.summary.php'>Spanish</option>
            <option value='fr/mysqli.summary.php'>French</option>
            <option value='it/mysqli.summary.php'>Italian</option>
            <option value='ja/mysqli.summary.php'>Japanese</option>
            <option value='pt_BR/mysqli.summary.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.summary.php'>Russian</option>
            <option value='tr/mysqli.summary.php'>Turkish</option>
            <option value='uk/mysqli.summary.php'>Ukrainian</option>
            <option value='zh/mysqli.summary.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.summary" class="chapter">

 <h1 class="title">The MySQLi Extension Function Summary</h1>


 <table id="mysqli.summary.classtable" class="doctable table">
  <caption><strong>Summary of <span class="classname"><a href="class.mysqli.php" class="classname">mysqli</a></span> methods</strong></caption>
  
   <thead>
    <tr>
     <th>mysqli Class</th>
    </tr>

    <tr>
     <th>OOP Interface</th>
     <th>Procedural Interface</th>
     <th>Alias (Do not use)</th>
     <th>Description</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr>
     <td><strong>Properties</strong></td>
    </tr>

    <tr>
     <td><a href="mysqli.affected-rows.php" class="link">$mysqli::affected_rows</a></td>
     <td><span class="function"><a href="mysqli.affected-rows.php" class="function">mysqli_affected_rows()</a></span></td>
     <td>N/A</td>
     <td>Gets the number of affected rows in a previous MySQL operation</td>
    </tr>

    <tr>
     <td><a href="mysqli.get-client-info.php" class="link">$mysqli::client_info</a></td>
     <td><span class="function"><a href="mysqli.get-client-info.php" class="function">mysqli_get_client_info()</a></span></td>
     <td>N/A</td>
     <td>Returns the MySQL client version as a string</td>
    </tr>

    <tr>
     <td><a href="mysqli.get-client-version.php" class="link">$mysqli::client_version</a></td>
     <td><span class="function"><a href="mysqli.get-client-version.php" class="function">mysqli_get_client_version()</a></span></td>
     <td>N/A</td>
     <td>Returns MySQL client version info as an integer</td>    </tr>

    <tr>
     <td><a href="mysqli.connect-errno.php" class="link">$mysqli::connect_errno</a></td>
     <td><span class="function"><a href="mysqli.connect-errno.php" class="function">mysqli_connect_errno()</a></span></td>
     <td>N/A</td>
     <td>Returns the error code from last connect call</td>
    </tr>

    <tr>
     <td><a href="mysqli.connect-error.php" class="link">$mysqli::connect_error</a></td>
     <td><span class="function"><a href="mysqli.connect-error.php" class="function">mysqli_connect_error()</a></span></td>
     <td>N/A</td>
     <td>Returns a string description of the last connect error</td>
    </tr>

    <tr>
     <td><a href="mysqli.errno.php" class="link">$mysqli::errno</a></td>
     <td><span class="function"><a href="mysqli.errno.php" class="function">mysqli_errno()</a></span></td>
     <td>N/A</td>
     <td>Returns the error code for the most recent function call</td>
    </tr>

    <tr>
     <td><a href="mysqli.error.php" class="link">$mysqli::error</a></td>
     <td><span class="function"><a href="mysqli.error.php" class="function">mysqli_error()</a></span></td>
     <td>N/A</td>
     <td>Returns a string description of the last error</td>
    </tr>

    <tr>
     <td><a href="mysqli.field-count.php" class="link">$mysqli::field_count</a></td>
     <td><span class="function"><a href="mysqli.field-count.php" class="function">mysqli_field_count()</a></span></td>
     <td>N/A</td>
     <td>Returns the number of columns for the most recent query</td>
    </tr>

    <tr>
     <td><a href="mysqli.get-host-info.php" class="link">$mysqli::host_info</a></td>
     <td><span class="function"><a href="mysqli.get-host-info.php" class="function">mysqli_get_host_info()</a></span></td>
     <td>N/A</td>
     <td>Returns a string representing the type of connection used</td>
    </tr>

    <tr>
     <td><a href="mysqli.get-proto-info.php" class="link">$mysqli::protocol_version</a></td>
     <td><span class="function"><a href="mysqli.get-proto-info.php" class="function">mysqli_get_proto_info()</a></span></td>
     <td>N/A</td>
     <td>Returns the version of the MySQL protocol used</td>
    </tr>

    <tr>
     <td><a href="mysqli.get-server-info.php" class="link">$mysqli::server_info</a></td>
     <td><span class="function"><a href="mysqli.get-server-info.php" class="function">mysqli_get_server_info()</a></span></td>
     <td>N/A</td>
     <td>Returns the version of the MySQL server</td>
    </tr>

    <tr>
     <td><a href="mysqli.get-server-version.php" class="link">$mysqli::server_version</a></td>
     <td><span class="function"><a href="mysqli.get-server-version.php" class="function">mysqli_get_server_version()</a></span></td>
     <td>N/A</td>
     <td>Returns the version of the MySQL server as an integer</td>
    </tr>

    <tr>
     <td><a href="mysqli.info.php" class="link">$mysqli::info</a></td>
     <td><span class="function"><a href="mysqli.info.php" class="function">mysqli_info()</a></span></td>
     <td>N/A</td>
     <td>Retrieves information about the most recently executed query</td>
    </tr>

    <tr>
     <td><a href="mysqli.insert-id.php" class="link">$mysqli::insert_id</a></td>
     <td><span class="function"><a href="mysqli.insert-id.php" class="function">mysqli_insert_id()</a></span></td>
     <td>N/A</td>
     <td>Returns the auto generated id used in the last query</td>
    </tr>

    <tr>
     <td><a href="mysqli.sqlstate.php" class="link">$mysqli::sqlstate</a></td>
     <td><span class="function"><a href="mysqli.sqlstate.php" class="function">mysqli_sqlstate()</a></span></td>
     <td>N/A</td>
     <td>Returns the SQLSTATE error from previous MySQL operation</td>
    </tr>

    <tr>
     <td><a href="mysqli.warning-count.php" class="link">$mysqli::warning_count</a></td>
     <td><span class="function"><a href="mysqli.warning-count.php" class="function">mysqli_warning_count()</a></span></td>
     <td>N/A</td>
     <td>Returns the number of warnings from the last query for the given link</td>
    </tr>

    <tr>
     <td><strong>Methods</strong></td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.autocommit.php" class="methodname">mysqli::autocommit()</a></span></td>
     <td><span class="function"><a href="mysqli.autocommit.php" class="function">mysqli_autocommit()</a></span></td>
     <td>N/A</td>
     <td>Turns on or off auto-committing database modifications</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.change-user.php" class="methodname">mysqli::change_user()</a></span></td>
     <td><span class="function"><a href="mysqli.change-user.php" class="function">mysqli_change_user()</a></span></td>
     <td>N/A</td>
     <td>Changes the user of the specified database connection</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.character-set-name.php" class="methodname">mysqli::character_set_name()</a></span></td>
     <td><span class="function"><a href="mysqli.character-set-name.php" class="function">mysqli_character_set_name()</a></span></td>
     <td>N/A</td>
     <td>Returns the default character set for the database connection</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.close.php" class="methodname">mysqli::close()</a></span></td>
     <td><span class="function"><a href="mysqli.close.php" class="function">mysqli_close()</a></span></td>
     <td>N/A</td>
     <td>Closes a previously opened database connection</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.commit.php" class="methodname">mysqli::commit()</a></span></td>
     <td><span class="function"><a href="mysqli.commit.php" class="function">mysqli_commit()</a></span></td>
     <td>N/A</td>
     <td>Commits the current transaction</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.construct.php" class="methodname">mysqli::__construct()</a></span></td>
     <td><span class="function"><a href="function.mysqli-connect.php" class="function">mysqli_connect()</a></span></td>
     <td>N/A</td>
     <td>Open a new connection to the MySQL server [Note: static (i.e. class)
      method]</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.debug.php" class="methodname">mysqli::debug()</a></span></td>
     <td><span class="function"><a href="mysqli.debug.php" class="function">mysqli_debug()</a></span></td>
     <td>N/A</td>
     <td>Performs debugging operations</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.dump-debug-info.php" class="methodname">mysqli::dump_debug_info()</a></span></td>
     <td><span class="function"><a href="mysqli.dump-debug-info.php" class="function">mysqli_dump_debug_info()</a></span></td>
     <td>N/A</td>
     <td>Dump debugging information into the log</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.get-charset.php" class="methodname">mysqli::get_charset()</a></span></td>
     <td><span class="function"><a href="mysqli.get-charset.php" class="function">mysqli_get_charset()</a></span></td>
     <td>N/A</td>
     <td>Returns a character set object</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.get-connection-stats.php" class="methodname">mysqli::get_connection_stats()</a></span></td>
     <td><span class="function"><a href="mysqli.get-connection-stats.php" class="function">mysqli_get_connection_stats()</a></span></td>
     <td>N/A</td>
     <td>Returns client connection statistics. Available only with <a href="book.mysqlnd.php" class="link">mysqlnd</a>.</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.get-client-info.php" class="methodname">mysqli::get_client_info()</a></span></td>
     <td><span class="function"><a href="mysqli.get-client-info.php" class="function">mysqli_get_client_info()</a></span></td>
     <td>N/A</td>
     <td>Returns the MySQL client version as a string</td>
    </tr>

    <tr>
     <td>N/A</td>
     <td><span class="function"><a href="function.mysqli-get-client-stats.php" class="function">mysqli_get_client_stats()</a></span></td>
     <td>N/A</td>
     <td>Returns client per-process statistics. Available only with <a href="book.mysqlnd.php" class="link">mysqlnd</a>.</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.get-server-info.php" class="methodname">mysqli::get_server_info()</a></span></td>
     <td><span class="function"><a href="mysqli.get-server-info.php" class="function">mysqli_get_server_info()</a></span></td>
     <td>N/A</td>
     <td>Returns a string representing the version of the MySQL server that the MySQLi extension is connected to</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.get-warnings.php" class="methodname">mysqli::get_warnings()</a></span></td>
     <td><span class="function"><a href="mysqli.get-warnings.php" class="function">mysqli_get_warnings()</a></span></td>
     <td>N/A</td>
     <td>NOT DOCUMENTED</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.init.php" class="methodname">mysqli::init()</a></span></td>
     <td><span class="function"><a href="mysqli.init.php" class="function">mysqli_init()</a></span></td>
     <td>N/A</td>
     <td>Initializes MySQLi and returns an object for use with
      mysqli_real_connect.</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.kill.php" class="methodname">mysqli::kill()</a></span></td>
     <td><span class="function"><a href="mysqli.kill.php" class="function">mysqli_kill()</a></span></td>
     <td>N/A</td>
     <td>Asks the server to kill a MySQL thread</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.more-results.php" class="methodname">mysqli::more_results()</a></span></td>
     <td><span class="function"><a href="mysqli.more-results.php" class="function">mysqli_more_results()</a></span></td>
     <td>N/A</td>
     <td>Check if there are any more query results from a multi query</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.multi-query.php" class="methodname">mysqli::multi_query()</a></span></td>
     <td><span class="function"><a href="mysqli.multi-query.php" class="function">mysqli_multi_query()</a></span></td>
     <td>N/A</td>
     <td>Performs a query on the database</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.next-result.php" class="methodname">mysqli::next_result()</a></span></td>
     <td><span class="function"><a href="mysqli.next-result.php" class="function">mysqli_next_result()</a></span></td>
     <td>N/A</td>
     <td>Prepare next result from multi_query</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.options.php" class="methodname">mysqli::options()</a></span></td>
     <td><span class="function"><a href="mysqli.options.php" class="function">mysqli_options()</a></span></td>
     <td><span class="function"><a href="function.mysqli-set-opt.php" class="function">mysqli_set_opt()</a></span></td>
     <td>Set options</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.ping.php" class="methodname">mysqli::ping()</a></span></td>
     <td><span class="function"><a href="mysqli.ping.php" class="function">mysqli_ping()</a></span></td>
     <td>N/A</td>
     <td>Pings a server connection, or tries to reconnect if the connection has
      gone down</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.prepare.php" class="methodname">mysqli::prepare()</a></span></td>
     <td><span class="function"><a href="mysqli.prepare.php" class="function">mysqli_prepare()</a></span></td>
     <td>N/A</td>
     <td>Prepare an SQL statement for execution</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.query.php" class="methodname">mysqli::query()</a></span></td>
     <td><span class="function"><a href="mysqli.query.php" class="function">mysqli_query()</a></span></td>
     <td>N/A</td>
     <td>Performs a query on the database</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.real-connect.php" class="methodname">mysqli::real_connect()</a></span></td>
     <td><span class="function"><a href="mysqli.real-connect.php" class="function">mysqli_real_connect()</a></span></td>
     <td>N/A</td>
     <td>Opens a connection to a mysql server</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.real-escape-string.php" class="methodname">mysqli::real_escape_string()</a></span>,
      <span class="methodname"><a href="function.mysqli-escape-string.php" class="methodname">mysqli::escape_string()</a></span></td>
     <td><span class="function"><a href="mysqli.real-escape-string.php" class="function">mysqli_real_escape_string()</a></span></td>
     <td><span class="function"><a href="function.mysqli-escape-string.php" class="function">mysqli_escape_string()</a></span></td>
     <td>Escapes special characters in a string for use in an SQL statement,
      taking into account the current charset of the connection</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.real-query.php" class="methodname">mysqli::real_query()</a></span></td>
     <td><span class="function"><a href="mysqli.real-query.php" class="function">mysqli_real_query()</a></span></td>
     <td>N/A</td>
     <td>Execute an SQL query</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.refresh.php" class="methodname">mysqli::refresh()</a></span></td>
     <td><span class="function"><a href="mysqli.refresh.php" class="function">mysqli_refresh()</a></span></td>
     <td>N/A</td>
     <td>Flushes tables or caches, or resets the replication server information</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.rollback.php" class="methodname">mysqli::rollback()</a></span></td>
     <td><span class="function"><a href="mysqli.rollback.php" class="function">mysqli_rollback()</a></span></td>
     <td>N/A</td>
     <td>Rolls back current transaction</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.select-db.php" class="methodname">mysqli::select_db()</a></span></td>
     <td><span class="function"><a href="mysqli.select-db.php" class="function">mysqli_select_db()</a></span></td>
     <td>N/A</td>
     <td>Selects the default database for database queries</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.set-charset.php" class="methodname">mysqli::set_charset()</a></span></td>
     <td><span class="function"><a href="mysqli.set-charset.php" class="function">mysqli_set_charset()</a></span></td>
     <td>N/A</td>
     <td>Sets the default client character set</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.ssl-set.php" class="methodname">mysqli::ssl_set()</a></span></td>
     <td><span class="function"><a href="mysqli.ssl-set.php" class="function">mysqli_ssl_set()</a></span></td>
     <td>N/A</td>
     <td>Used for establishing secure connections using SSL</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.stat.php" class="methodname">mysqli::stat()</a></span></td>
     <td><span class="function"><a href="mysqli.stat.php" class="function">mysqli_stat()</a></span></td>
     <td>N/A</td>
     <td>Gets the current system status</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.stmt-init.php" class="methodname">mysqli::stmt_init()</a></span></td>
     <td><span class="function"><a href="mysqli.stmt-init.php" class="function">mysqli_stmt_init()</a></span></td>
     <td>N/A</td>
     <td>Initializes a statement and returns an object for use with
      mysqli_stmt_prepare</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.store-result.php" class="methodname">mysqli::store_result()</a></span></td>
     <td><span class="function"><a href="mysqli.store-result.php" class="function">mysqli_store_result()</a></span></td>
     <td>N/A</td>
     <td>Transfers a result set from the last query</td>
    </tr>

    <tr>
     <td><span class="methodname"><strong>mysqli::thread_id()</strong></span></td>
     <td><span class="function"><a href="mysqli.thread-id.php" class="function">mysqli_thread_id()</a></span></td>
     <td>N/A</td>
     <td>Returns the thread ID for the current connection</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.thread-safe.php" class="methodname">mysqli::thread_safe()</a></span></td>
     <td><span class="function"><a href="mysqli.thread-safe.php" class="function">mysqli_thread_safe()</a></span></td>
     <td>N/A</td>
     <td>Returns whether thread safety is given or not</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli.use-result.php" class="methodname">mysqli::use_result()</a></span></td>
     <td><span class="function"><a href="mysqli.use-result.php" class="function">mysqli_use_result()</a></span></td>
     <td>N/A</td>
     <td>Initiate a result set retrieval</td>
    </tr>

   </tbody>
  
 </table>


 <table id="mysqli.summary.methods" class="doctable table">
  <caption><strong>Summary of <span class="classname"><a href="class.mysqli-stmt.php" class="classname">mysqli_stmt</a></span> methods</strong></caption>
  
   <thead>
    <tr>
     <th>MySQL_STMT</th>
    </tr>

    <tr>
     <th>OOP Interface</th>
     <th>Procedural Interface</th>
     <th>Alias (Do not use)</th>
     <th>Description</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr>
     <td><strong>Properties</strong></td>
    </tr>

    <tr>
     <td><a href="mysqli-stmt.affected-rows.php" class="link">$mysqli_stmt::affected_rows</a></td>
     <td><span class="function"><a href="mysqli-stmt.affected-rows.php" class="function">mysqli_stmt_affected_rows()</a></span></td>
     <td>N/A</td>
     <td>Returns the total number of rows changed, deleted, or inserted by the
      last executed statement</td>
    </tr>

    <tr>
     <td><a href="mysqli-stmt.errno.php" class="link">$mysqli_stmt::errno</a></td>
     <td><span class="function"><a href="mysqli-stmt.errno.php" class="function">mysqli_stmt_errno()</a></span></td>
     <td>N/A</td>
     <td>Returns the error code for the most recent statement call</td>
    </tr>

    <tr>
     <td><a href="mysqli-stmt.error.php" class="link">$mysqli_stmt::error</a></td>
     <td><span class="function"><a href="mysqli-stmt.error.php" class="function">mysqli_stmt_error()</a></span></td>
     <td>N/A</td>
     <td>Returns a string description for last statement error</td>
    </tr>

    <tr>
     <td><a href="mysqli-stmt.field-count.php" class="link">$mysqli_stmt::field_count</a></td>
     <td><span class="function"><a href="mysqli-stmt.field-count.php" class="function">mysqli_stmt_field_count()</a></span></td>
     <td>N/A</td>
     <td>Returns the number of field in the given statement - not documented</td>
    </tr>

    <tr>
     <td><a href="mysqli-stmt.insert-id.php" class="link">$mysqli_stmt::insert_id</a></td>
     <td><span class="function"><a href="mysqli-stmt.insert-id.php" class="function">mysqli_stmt_insert_id()</a></span></td>
     <td>N/A</td>
     <td>Get the ID generated from the previous INSERT operation</td>
    </tr>

    <tr>
     <td><a href="mysqli-stmt.num-rows.php" class="link">$mysqli_stmt::num_rows</a></td>
     <td><span class="function"><a href="mysqli-stmt.num-rows.php" class="function">mysqli_stmt_num_rows()</a></span></td>
     <td>N/A</td>
     <td>Return the number of rows in statements result set</td>
    </tr>

    <tr>
     <td><a href="mysqli-stmt.param-count.php" class="link">$mysqli_stmt::param_count</a></td>
     <td><span class="function"><a href="mysqli-stmt.param-count.php" class="function">mysqli_stmt_param_count()</a></span></td>
     <td>N/A</td>
     <td>Returns the number of parameter for the given statement</td>
    </tr>

    <tr>
     <td><a href="mysqli-stmt.sqlstate.php" class="link">$mysqli_stmt::sqlstate</a></td>
     <td><span class="function"><a href="mysqli-stmt.sqlstate.php" class="function">mysqli_stmt_sqlstate()</a></span></td>
     <td>N/A</td>
     <td>Returns SQLSTATE error from previous statement operation</td>
    </tr>

    <tr>
     <td><strong>Methods</strong></td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.attr-get.php" class="methodname">mysqli_stmt::attr_get()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.attr-get.php" class="function">mysqli_stmt_attr_get()</a></span></td>
     <td>N/A</td>
     <td>Used to get the current value of a statement attribute</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.attr-set.php" class="methodname">mysqli_stmt::attr_set()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.attr-set.php" class="function">mysqli_stmt_attr_set()</a></span></td>
     <td>N/A</td>
     <td>Used to modify the behavior of a prepared statement</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.bind-param.php" class="methodname">mysqli_stmt::bind_param()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.bind-param.php" class="function">mysqli_stmt_bind_param()</a></span></td>
     <td>N/A</td>
     <td>Binds variables to a prepared statement as parameters</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.bind-result.php" class="methodname">mysqli_stmt::bind_result()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.bind-result.php" class="function">mysqli_stmt_bind_result()</a></span></td>
     <td>N/A</td>
     <td>Binds variables to a prepared statement for result storage</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.close.php" class="methodname">mysqli_stmt::close()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.close.php" class="function">mysqli_stmt_close()</a></span></td>
     <td>N/A</td>
     <td>Closes a prepared statement</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.data-seek.php" class="methodname">mysqli_stmt::data_seek()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.data-seek.php" class="function">mysqli_stmt_data_seek()</a></span></td>
     <td>N/A</td>
     <td>Seeks to an arbitrary row in statement result set</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.execute.php" class="methodname">mysqli_stmt::execute()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.execute.php" class="function">mysqli_stmt_execute()</a></span></td>
     <td><span class="function"><a href="function.mysqli-execute.php" class="function">mysqli_execute()</a></span></td>
     <td>Executes a prepared Query</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.fetch.php" class="methodname">mysqli_stmt::fetch()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.fetch.php" class="function">mysqli_stmt_fetch()</a></span></td>
     <td>N/A</td>
     <td>Fetch results from a prepared statement into the bound variables</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.free-result.php" class="methodname">mysqli_stmt::free_result()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.free-result.php" class="function">mysqli_stmt_free_result()</a></span></td>
     <td>N/A</td>
     <td>Frees stored result memory for the given statement handle</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.get-result.php" class="methodname">mysqli_stmt::get_result()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.get-result.php" class="function">mysqli_stmt_get_result()</a></span></td>
     <td>N/A</td>
     <td>Gets a result set from a prepared statement. Available only with <a href="book.mysqlnd.php" class="link">mysqlnd</a>.</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.get-warnings.php" class="methodname">mysqli_stmt::get_warnings()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.get-warnings.php" class="function">mysqli_stmt_get_warnings()</a></span></td>
     <td>N/A</td>
     <td>NOT DOCUMENTED</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.more-results.php" class="methodname">mysqli_stmt::more_results()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.more-results.php" class="function">mysqli_stmt_more_results()</a></span></td>
     <td>N/A</td>
     <td>Checks if there are more query results from a multiple query</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.next-result.php" class="methodname">mysqli_stmt::next_result()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.next-result.php" class="function">mysqli_stmt_next_result()</a></span></td>
     <td>N/A</td>
     <td>Reads the next result from a multiple query</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.num-rows.php" class="methodname">mysqli_stmt::num_rows()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.num-rows.php" class="function">mysqli_stmt_num_rows()</a></span></td>
     <td>N/A</td>
     <td>See also property <a href="mysqli-stmt.num-rows.php" class="link">$mysqli_stmt::num_rows</a></td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.prepare.php" class="methodname">mysqli_stmt::prepare()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.prepare.php" class="function">mysqli_stmt_prepare()</a></span></td>
     <td>N/A</td>
     <td>Prepare an SQL statement for execution</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.reset.php" class="methodname">mysqli_stmt::reset()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.reset.php" class="function">mysqli_stmt_reset()</a></span></td>
     <td>N/A</td>
     <td>Resets a prepared statement</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.result-metadata.php" class="methodname">mysqli_stmt::result_metadata()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.result-metadata.php" class="function">mysqli_stmt_result_metadata()</a></span></td>
     <td>N/A</td>
     <td>Returns result set metadata from a prepared statement</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.send-long-data.php" class="methodname">mysqli_stmt::send_long_data()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.send-long-data.php" class="function">mysqli_stmt_send_long_data()</a></span></td>
     <td>N/A</td>
     <td>Send data in blocks</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-stmt.store-result.php" class="methodname">mysqli_stmt::store_result()</a></span></td>
     <td><span class="function"><a href="mysqli-stmt.store-result.php" class="function">mysqli_stmt_store_result()</a></span></td>
     <td>N/A</td>
     <td>Transfers a result set from a prepared statement</td>
    </tr>

   </tbody>
  
 </table>


 <table id="mysqli.summary.resultmethods" class="doctable table">
  <caption><strong>Summary of <span class="classname"><a href="class.mysqli-result.php" class="classname">mysqli_result</a></span> methods</strong></caption>
  
   <thead>
    <tr>
     <th>mysqli_result</th>
    </tr>

    <tr>
     <th>OOP Interface</th>
     <th>Procedural Interface</th>
     <th>Alias (Do not use)</th>
     <th>Description</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr>
     <td><strong>Properties</strong></td>
    </tr>

    <tr>
     <td><a href="mysqli-result.current-field.php" class="link">$mysqli_result::current_field</a></td>
     <td><span class="function"><a href="mysqli-result.current-field.php" class="function">mysqli_field_tell()</a></span></td>
     <td>N/A</td>
     <td>Get current field offset of a result pointer</td>
    </tr>

    <tr>
     <td><a href="mysqli-result.field-count.php" class="link">$mysqli_result::field_count</a></td>
     <td><span class="function"><a href="mysqli-result.field-count.php" class="function">mysqli_num_fields()</a></span></td>
     <td>N/A</td>
     <td>Get the number of fields in a result</td>
    </tr>

    <tr>
     <td><a href="mysqli-result.lengths.php" class="link">$mysqli_result::lengths</a></td>
     <td><span class="function"><a href="mysqli-result.lengths.php" class="function">mysqli_fetch_lengths()</a></span></td>
     <td>N/A</td>
     <td>Returns the lengths of the columns of the current row in the result set</td>
    </tr>

    <tr>
     <td><a href="mysqli-result.num-rows.php" class="link">$mysqli_result::num_rows</a></td>
     <td><span class="function"><a href="mysqli-result.num-rows.php" class="function">mysqli_num_rows()</a></span></td>
     <td>N/A</td>
     <td>Gets the number of rows in a result</td>
    </tr>

    <tr>
     <td><strong>Methods</strong></td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-result.data-seek.php" class="methodname">mysqli_result::data_seek()</a></span></td>
     <td><span class="function"><a href="mysqli-result.data-seek.php" class="function">mysqli_data_seek()</a></span></td>
     <td>N/A</td>
     <td>Adjusts the result pointer to an arbitrary row in the result</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-result.fetch-all.php" class="methodname">mysqli_result::fetch_all()</a></span></td>
     <td><span class="function"><a href="mysqli-result.fetch-all.php" class="function">mysqli_fetch_all()</a></span></td>
     <td>N/A</td>
     <td>Fetches all result rows and returns the result set as an associative array, a numeric array, or both. Available only with <a href="book.mysqlnd.php" class="link">mysqlnd</a>.</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-result.fetch-array.php" class="methodname">mysqli_result::fetch_array()</a></span></td>
     <td><span class="function"><a href="mysqli-result.fetch-array.php" class="function">mysqli_fetch_array()</a></span></td>
     <td>N/A</td>
     <td>Fetch a result row as an associative, a numeric array, or both</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-result.fetch-assoc.php" class="methodname">mysqli_result::fetch_assoc()</a></span></td>
     <td><span class="function"><a href="mysqli-result.fetch-assoc.php" class="function">mysqli_fetch_assoc()</a></span></td>
     <td>N/A</td>
     <td>Fetch a result row as an associative array</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-result.fetch-column.php" class="methodname">mysqli_result::fetch_column()</a></span></td>
     <td><span class="function"><a href="mysqli-result.fetch-column.php" class="function">mysqli_fetch_column()</a></span></td>
     <td>N/A</td>
     <td>Fetch a single column from the next row of a result set</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-result.fetch-field-direct.php" class="methodname">mysqli_result::fetch_field_direct()</a></span></td>
     <td><span class="function"><a href="mysqli-result.fetch-field-direct.php" class="function">mysqli_fetch_field_direct()</a></span></td>
     <td>N/A</td>
     <td>Fetch meta-data for a single field</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-result.fetch-field.php" class="methodname">mysqli_result::fetch_field()</a></span></td>
     <td><span class="function"><a href="mysqli-result.fetch-field.php" class="function">mysqli_fetch_field()</a></span></td>
     <td>N/A</td>
     <td>Returns the next field in the result set</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-result.fetch-fields.php" class="methodname">mysqli_result::fetch_fields()</a></span></td>
     <td><span class="function"><a href="mysqli-result.fetch-fields.php" class="function">mysqli_fetch_fields()</a></span></td>
     <td>N/A</td>
     <td>Returns an array of objects representing the fields in a result set</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-result.fetch-object.php" class="methodname">mysqli_result::fetch_object()</a></span></td>
     <td><span class="function"><a href="mysqli-result.fetch-object.php" class="function">mysqli_fetch_object()</a></span></td>
     <td>N/A</td>
     <td>Returns the current row of a result set as an object</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-result.fetch-row.php" class="methodname">mysqli_result::fetch_row()</a></span></td>
     <td><span class="function"><a href="mysqli-result.fetch-row.php" class="function">mysqli_fetch_row()</a></span></td>
     <td>N/A</td>
     <td>Get a result row as an enumerated array</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-result.field-seek.php" class="methodname">mysqli_result::field_seek()</a></span></td>
     <td><span class="function"><a href="mysqli-result.field-seek.php" class="function">mysqli_field_seek()</a></span></td>
     <td>N/A</td>
     <td>Set result pointer to a specified field offset</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-result.free.php" class="methodname">mysqli_result::free()</a></span>,
      <a href="mysqli-result.free.php" class="link">mysqli_result::close</a>,
      <a href="mysqli-result.free.php" class="link">mysqli_result::free_result</a></td>
     <td><span class="function"><a href="mysqli-result.free.php" class="function">mysqli_free_result()</a></span></td>
     <td>N/A</td>
     <td>Frees the memory associated with a result</td>
    </tr>

   </tbody>
  
 </table>


 <table id="mysqli.summary.drivermethods" class="doctable table">
  <caption><strong>Summary of <span class="classname"><a href="class.mysqli-driver.php" class="classname">mysqli_driver</a></span> methods</strong></caption>
  
   <thead>
    <tr>
     <th>MySQL_Driver</th>
    </tr>

    <tr>
     <th>OOP Interface</th>
     <th>Procedural Interface</th>
     <th>Alias (Do not use)</th>
     <th>Description</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr>
     <td><strong>Properties</strong></td>
    </tr>

    <tr>
     <td><a href="mysqli-driver.report-mode.php" class="link">$mysqli_driver::mysqli_report</a></td>
     <td><span class="function"><a href="function.mysqli-report.php" class="function">mysqli_report()</a></span></td>
     <td>N/A</td>
     <td>Sets mysqli error reporting mode</td>
    </tr>

    <tr>
     <td><strong>Methods</strong></td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-driver.embedded-server-end.php" class="methodname">mysqli_driver::embedded_server_end()</a></span></td>
     <td><span class="function"><a href="mysqli-driver.embedded-server-end.php" class="function">mysqli_embedded_server_end()</a></span></td>
     <td>N/A</td>
     <td>NOT DOCUMENTED</td>
    </tr>

    <tr>
     <td><span class="methodname"><a href="mysqli-driver.embedded-server-start.php" class="methodname">mysqli_driver::embedded_server_start()</a></span></td>
     <td><span class="function"><a href="mysqli-driver.embedded-server-start.php" class="function">mysqli_embedded_server_start()</a></span></td>
     <td>N/A</td>
     <td>NOT DOCUMENTED</td>
    </tr>

   </tbody>
  
 </table>


 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   Alias functions are provided for backward compatibility purposes
   only. Do not use them in new projects.
  </p>
 </p></blockquote>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/summary.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.summary%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.summary&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.summary.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.mysqli.php">MySQLi</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.mysqli.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.overview.php" title="Overview">Overview</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.php" title="Quick start guide">Quick start guide</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.persistconns.php" title="The mysqli Extension and Persistent Connections">The mysqli Extension and Persistent Connections</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.notes.php" title="Notes">Notes</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli.summary.php" title="The MySQLi Extension Function Summary">The MySQLi Extension Function Summary</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli.php" title="mysqli">mysqli</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-stmt.php" title="mysqli_&#8203;stmt">mysqli_&#8203;stmt</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-result.php" title="mysqli_&#8203;result">mysqli_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-driver.php" title="mysqli_&#8203;driver">mysqli_&#8203;driver</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-warning.php" title="mysqli_&#8203;warning">mysqli_&#8203;warning</a>
                        </li>
                                                <li class="">
                            <a href="class.mysqli-sql-exception.php" title="mysqli_&#8203;sql_&#8203;exception">mysqli_&#8203;sql_&#8203;exception</a>
                        </li>
                                                <li class="">
                            <a href="ref.mysqli.php" title="Aliases and deprecated Mysqli Functions">Aliases and deprecated Mysqli Functions</a>
                        </li>
                                                <li class="">
                            <a href="changelog.mysqli.php" title="Changelog">Changelog</a>
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
