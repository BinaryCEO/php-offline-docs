<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli_driver::$report_mode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli-driver.report-mode.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli-driver.report-mode.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-driver.report-mode.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli-driver.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli-driver.embedded-server-start.php">
 <link rel="next" href="https://www.php.net/manual/en/class.mysqli-warning.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-driver.report-mode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli-driver.report-mode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli-driver.report-mode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli-driver.report-mode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli-driver.report-mode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli-driver.report-mode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli-driver.report-mode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli-driver.report-mode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli-driver.report-mode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli-driver.report-mode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli-driver.report-mode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sets mysqli error reporting mode" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli_driver::$report_mode - Manual" />
<meta name="twitter:description" content="Sets mysqli error reporting mode" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli_driver::$report_mode - Manual" />
<meta itemprop="description" content="Sets mysqli error reporting mode" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sets mysqli error reporting mode" />

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
        <a href="class.mysqli-warning.php">
          mysqli_warning &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli-driver.embedded-server-start.php">
          &laquo; mysqli_driver::embedded_server_start        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      <li><a href='class.mysqli-driver.php'>mysqli_driver</a></li>      </ul>
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
            <option value='en/mysqli-driver.report-mode.php' selected="selected">English</option>
            <option value='de/mysqli-driver.report-mode.php'>German</option>
            <option value='es/mysqli-driver.report-mode.php'>Spanish</option>
            <option value='fr/mysqli-driver.report-mode.php'>French</option>
            <option value='it/mysqli-driver.report-mode.php'>Italian</option>
            <option value='ja/mysqli-driver.report-mode.php'>Japanese</option>
            <option value='pt_BR/mysqli-driver.report-mode.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli-driver.report-mode.php'>Russian</option>
            <option value='tr/mysqli-driver.report-mode.php'>Turkish</option>
            <option value='uk/mysqli-driver.report-mode.php'>Ukrainian</option>
            <option value='zh/mysqli-driver.report-mode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli-driver.report-mode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli_driver::$report_mode</h1>
  <h1 class="refname">mysqli_report</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli_driver::$report_mode</span> -- <span class="refname">mysqli_report</span> &mdash; <span class="dc-title">Sets mysqli error reporting mode</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli-driver.report-mode-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="fieldsynopsis">
   <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <var class="varname"><a href="mysqli-driver.report-mode.php">$mysqli_driver-&gt;report_mode</a></var>;</div>

  <p class="para">Procedural style</p>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><a href="function.mysqli-report.php" class="methodname">mysqli_report</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   Depending on the flags, it sets mysqli error reporting mode to exception, warning or none.  
   When set to <strong><code><a href="mysqli.constants.php#constant.mysqli-report-all">MYSQLI_REPORT_ALL</a></code></strong> or <strong><code><a href="mysqli.constants.php#constant.mysqli-report-index">MYSQLI_REPORT_INDEX</a></code></strong> 
   it will also inform about queries that don&#039;t use an index (or use a bad index).
  </p>
  <p class="para">
   As of PHP 8.1.0, the default setting is <code class="literal">MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT</code>.
   Previously, it was <strong><code><a href="mysqli.constants.php#constant.mysqli-report-off">MYSQLI_REPORT_OFF</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli-driver.report-mode-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       <table id="mysqli-driver.report-mode.parameters" class="doctable table">
        <caption><strong>Supported flags</strong></caption>
        
         <thead>
          <tr>
           <th>Name</th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-report-off">MYSQLI_REPORT_OFF</a></code></strong></td>
           <td>Turns reporting off</td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-report-error">MYSQLI_REPORT_ERROR</a></code></strong></td>
           <td>Report errors from mysqli function calls</td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-report-strict">MYSQLI_REPORT_STRICT</a></code></strong></td>
           <td>
            Throw <span class="classname"><a href="class.mysqli-sql-exception.php" class="classname">mysqli_sql_exception</a></span> for errors
            instead of warnings
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-report-index">MYSQLI_REPORT_INDEX</a></code></strong></td>
           <td>Report if no index or bad index was used in a query</td>
          </tr>

          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-report-all">MYSQLI_REPORT_ALL</a></code></strong></td>
           <td>Set all options (report all)</td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli-driver.report-mode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-mysqli-driver.report-mode-changelog">
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
       The default value is now <code class="literal">MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT</code>.
       Previously, it was <strong><code><a href="mysqli.constants.php#constant.mysqli-report-off">MYSQLI_REPORT_OFF</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-mysqli-driver.report-mode-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1678">
   <p><strong>Example #1 Object-oriented style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* activate reporting */<br /></span><span style="color: #0000BB">$driver </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli_driver</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$driver</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">report_mode </span><span style="color: #007700">= </span><span style="color: #0000BB">MYSQLI_REPORT_ALL</span><span style="color: #007700">;<br /><br />try {<br />    </span><span style="color: #FF8000">/* if the connection fails, a mysqli_sql_exception will be thrown */<br />    </span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_db"</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* this query should report an error */<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT Name FROM Nonexistingtable WHERE population &gt; 50000"</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* this query should report a bad index if the column population doesn't have an index */<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT Name FROM City WHERE population &gt; 50000"</span><span style="color: #007700">);<br />} catch (</span><span style="color: #0000BB">mysqli_sql_exception $e</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">error_log</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__toString</span><span style="color: #007700">());<br />}</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-1679">
   <p><strong>Example #2 Procedural style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* activate reporting */<br /></span><span style="color: #0000BB">mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ALL</span><span style="color: #007700">);<br /><br />try {<br />    </span><span style="color: #FF8000">/* if the connection fails, a mysqli_sql_exception will be thrown */<br />    </span><span style="color: #0000BB">$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_db"</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* this query should report an error */<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT Name FROM Nonexistingtable WHERE population &gt; 50000"</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* this query should report a bad index if the column population doesn't have an index */<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT Name FROM City WHERE population &gt; 50000"</span><span style="color: #007700">);<br />} catch (</span><span style="color: #0000BB">mysqli_sql_exception $e</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">error_log</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__toString</span><span style="color: #007700">());<br />}</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-1680">
   <p><strong>Example #3 Error reporting except bad index errors</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* activate reporting */<br /></span><span style="color: #0000BB">mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /><br />try {<br />    </span><span style="color: #FF8000">/* if the connection fails, a mysqli_sql_exception will be thrown */<br />    </span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_db"</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* this query should report an error */<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT Name FROM Nonexistingtable WHERE population &gt; 50000"</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* this WILL NOT report any errors even if index is not available */<br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT Name FROM City WHERE population &gt; 50000"</span><span style="color: #007700">);<br />} catch (</span><span style="color: #0000BB">mysqli_sql_exception $e</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">error_log</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__toString</span><span style="color: #007700">());<br />}</span></span></code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli-driver.report-mode-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="classname"><a href="class.mysqli-sql-exception.php" class="classname">mysqli_sql_exception</a></span></li>
    <li><span class="function"><a href="function.set-exception-handler.php" class="function" rel="rdfs-seeAlso">set_exception_handler()</a> - Sets a user-defined exception handler function</span></li>
    <li><span class="function"><a href="function.error-reporting.php" class="function" rel="rdfs-seeAlso">error_reporting()</a> - Sets which PHP errors are reported</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli_driver/report-mode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli-driver.report-mode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli-driver.report-mode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-driver.report-mode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121234">  <div class="votes">
    <div id="Vu121234">
    <a href="/manual/vote-note.php?id=121234&amp;page=mysqli-driver.report-mode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121234">
    <a href="/manual/vote-note.php?id=121234&amp;page=mysqli-driver.report-mode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121234" title="71% like this...">
    6
    </div>
  </div>
  <a href="#121234" class="name">
  <strong class="user"><em>nineoclick (atsymbol) gmail (dot) com</em></strong></a><a class="genanchor" href="#121234"> &para;</a><div class="date" title="2017-06-16 10:42"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121234">
<div class="phpcode"><code><span class="html">Seems not clear but flags *could be combined*, as per other flags.<br />For example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment"># wannabe noticed about all errors except those about indexes<br /></span><span class="default">$driver </span><span class="keyword">= new </span><span class="default">mysqli_driver</span><span class="keyword">();<br /></span><span class="default">$driver</span><span class="keyword">-&gt;</span><span class="default">report_mode </span><span class="keyword">= </span><span class="default">MYSQLI_REPORT_ALL </span><span class="keyword">&amp; ~</span><span class="default">MYSQLI_REPORT_INDEX</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130122">  <div class="votes">
    <div id="Vu130122">
    <a href="/manual/vote-note.php?id=130122&amp;page=mysqli-driver.report-mode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130122">
    <a href="/manual/vote-note.php?id=130122&amp;page=mysqli-driver.report-mode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130122" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#130122" class="name">
  <strong class="user"><em>theking2 at king dot ma</em></strong></a><a class="genanchor" href="#130122"> &para;</a><div class="date" title="2025-03-08 01:32"><strong>6 months ago</strong></div>
  <div class="text" id="Hcom130122">
<div class="phpcode"><code><span class="html">Example #1 will now report a depricated warning:<br /><br />"The mysqli_driver class is an instance of the monostate pattern, i.e. there is only one driver which can be accessed though an arbitrary amount of mysqli_driver instances."<br /><br />To set the error mode of the mysql driver do use <br /><br /><span class="default">&lt;?php<br />mysqli_report</span><span class="keyword">(</span><span class="default">MYSQLI_REPORT_ERROR </span><span class="keyword">| </span><span class="default">MYSQLI_REPORT_STRICT</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli-driver.report-mode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-driver.report-mode.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mysqli-driver.php">mysqli_driver</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli-driver.embedded-server-end.php" title="embedded_&#8203;server_&#8203;end">embedded_&#8203;server_&#8203;end</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-driver.embedded-server-start.php" title="embedded_&#8203;server_&#8203;start">embedded_&#8203;server_&#8203;start</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli-driver.report-mode.php" title="$report_&#8203;mode">$report_&#8203;mode</a>
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
