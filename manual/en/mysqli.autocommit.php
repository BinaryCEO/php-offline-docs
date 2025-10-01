<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli::autocommit - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.autocommit.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.autocommit.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.autocommit.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.affected-rows.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.begin-transaction.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.autocommit.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.autocommit.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.autocommit.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.autocommit.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.autocommit.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.autocommit.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.autocommit.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.autocommit.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.autocommit.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.autocommit.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.autocommit.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Turns on or off auto-committing database modifications" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli::autocommit - Manual" />
<meta name="twitter:description" content="Turns on or off auto-committing database modifications" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli::autocommit - Manual" />
<meta itemprop="description" content="Turns on or off auto-committing database modifications" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Turns on or off auto-committing database modifications" />

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
        <a href="mysqli.begin-transaction.php">
          mysqli::begin_transaction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.affected-rows.php">
          &laquo; mysqli::$affected_rows        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      <li><a href='class.mysqli.php'>mysqli</a></li>      </ul>
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
            <option value='en/mysqli.autocommit.php' selected="selected">English</option>
            <option value='de/mysqli.autocommit.php'>German</option>
            <option value='es/mysqli.autocommit.php'>Spanish</option>
            <option value='fr/mysqli.autocommit.php'>French</option>
            <option value='it/mysqli.autocommit.php'>Italian</option>
            <option value='ja/mysqli.autocommit.php'>Japanese</option>
            <option value='pt_BR/mysqli.autocommit.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.autocommit.php'>Russian</option>
            <option value='tr/mysqli.autocommit.php'>Turkish</option>
            <option value='uk/mysqli.autocommit.php'>Ukrainian</option>
            <option value='zh/mysqli.autocommit.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.autocommit" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli::autocommit</h1>
  <h1 class="refname">mysqli_autocommit</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli::autocommit</span> -- <span class="refname">mysqli_autocommit</span> &mdash; <span class="dc-title">Turns on or off auto-committing database modifications</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli.autocommit-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli::autocommit</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$enable</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_autocommit</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli.php" class="type mysqli">mysqli</a></span> <code class="parameter">$mysql</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$enable</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Turns on or off auto-commit mode on queries for the database connection.
  </p>
  <p class="para">
   To determine the current state of autocommit use the SQL command
   <code class="literal">SELECT @@autocommit</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli.autocommit-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">mysql</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli.php" class="classname">mysqli</a></span> object
returned by <span class="function"><a href="function.mysqli-connect.php" class="function">mysqli_connect()</a></span> or <span class="function"><a href="mysqli.init.php" class="function">mysqli_init()</a></span>
</p></dd>
    
     <dt><code class="parameter">enable</code></dt>
     <dd>
      <p class="para">
       Whether to turn on auto-commit or not.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli.autocommit-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-mysqli.autocommit-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If mysqli error reporting is enabled (<strong><code><a href="mysqli.constants.php#constant.mysqli-report-error">MYSQLI_REPORT_ERROR</a></code></strong>) and the requested operation fails,
a warning is generated. If, in addition, the mode is set to <strong><code><a href="mysqli.constants.php#constant.mysqli-report-strict">MYSQLI_REPORT_STRICT</a></code></strong>,
a <span class="classname"><a href="class.mysqli-sql-exception.php" class="classname">mysqli_sql_exception</a></span> is thrown instead.</p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli.autocommit-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1576">
   <p><strong>Example #1 <span class="methodname"><strong>mysqli::autocommit()</strong></span> example</strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* Tell mysqli to throw an exception if an error occurs */<br /></span><span style="color: #0000BB">mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* The table engine has to support transactions */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE IF NOT EXISTS language (<br />    Code text NOT NULL,<br />    Speakers int(11) NOT NULL<br />    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Turn autocommit off */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autocommit</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT @@autocommit"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_row</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Autocommit is %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br /><br />try {<br />    </span><span style="color: #FF8000">/* Prepare insert statement */<br />    </span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'INSERT INTO language(Code, Speakers) VALUES (?,?)'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_param</span><span style="color: #007700">(</span><span style="color: #DD0000">'ss'</span><span style="color: #007700">, </span><span style="color: #0000BB">$language_code</span><span style="color: #007700">, </span><span style="color: #0000BB">$native_speakers</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* Insert some values */<br />    </span><span style="color: #0000BB">$language_code </span><span style="color: #007700">= </span><span style="color: #DD0000">'DE'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$native_speakers </span><span style="color: #007700">= </span><span style="color: #0000BB">50_123_456</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">$language_code </span><span style="color: #007700">= </span><span style="color: #DD0000">'FR'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$native_speakers </span><span style="color: #007700">= </span><span style="color: #0000BB">40_546_321</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br />    </span><span style="color: #FF8000">/* Commit the data in the database. This doesn't set autocommit=true */<br />    </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commit</span><span style="color: #007700">();<br />    print </span><span style="color: #DD0000">"Committed 2 rows in the database\n"</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT @@autocommit"</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_row</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Autocommit is %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br /><br />    </span><span style="color: #FF8000">/* Try to insert more values */<br />    </span><span style="color: #0000BB">$language_code </span><span style="color: #007700">= </span><span style="color: #DD0000">'PL'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$native_speakers </span><span style="color: #007700">= </span><span style="color: #0000BB">30_555_444</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">$language_code </span><span style="color: #007700">= </span><span style="color: #DD0000">'DK'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$native_speakers </span><span style="color: #007700">= </span><span style="color: #0000BB">5_222_444</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br />    </span><span style="color: #FF8000">/* Setting autocommit=true will trigger a commit */<br />    </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autocommit</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br />    print </span><span style="color: #DD0000">"Committed 2 row in the database\n"</span><span style="color: #007700">;<br />} catch (</span><span style="color: #0000BB">mysqli_sql_exception $exception</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rollback</span><span style="color: #007700">();<br /><br />    throw </span><span style="color: #0000BB">$exception</span><span style="color: #007700">;<br />}</span></span></code></div>
   </div>

   <div class="example-contents"><p>Procedural style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* Tell mysqli to throw an exception if an error occurs */<br /></span><span style="color: #0000BB">mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* The table engine has to support transactions */<br /></span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">, </span><span style="color: #DD0000">"CREATE TABLE IF NOT EXISTS language (<br />    Code text NOT NULL,<br />    Speakers int(11) NOT NULL<br />    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Turn autocommit off */<br /></span><span style="color: #0000BB">mysqli_autocommit</span><span style="color: #007700">(</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT @@autocommit"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_fetch_row</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Autocommit is %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br /><br />try {<br />    </span><span style="color: #FF8000">/* Prepare insert statement */<br />    </span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">, </span><span style="color: #DD0000">'INSERT INTO language(Code, Speakers) VALUES (?,?)'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">mysqli_stmt_bind_param</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #DD0000">'ss'</span><span style="color: #007700">, </span><span style="color: #0000BB">$language_code</span><span style="color: #007700">, </span><span style="color: #0000BB">$native_speakers</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* Insert some values */<br />    </span><span style="color: #0000BB">$language_code </span><span style="color: #007700">= </span><span style="color: #DD0000">'DE'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$native_speakers </span><span style="color: #007700">= </span><span style="color: #0000BB">50_123_456</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">mysqli_stmt_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$language_code </span><span style="color: #007700">= </span><span style="color: #DD0000">'FR'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$native_speakers </span><span style="color: #007700">= </span><span style="color: #0000BB">40_546_321</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">mysqli_stmt_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* Commit the data in the database. This doesn't set autocommit=true */<br />    </span><span style="color: #0000BB">mysqli_commit</span><span style="color: #007700">(</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">);<br />    print </span><span style="color: #DD0000">"Committed 2 rows in the database\n"</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT @@autocommit"</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_fetch_row</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Autocommit is %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br /><br />    </span><span style="color: #FF8000">/* Try to insert more values */<br />    </span><span style="color: #0000BB">$language_code </span><span style="color: #007700">= </span><span style="color: #DD0000">'PL'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$native_speakers </span><span style="color: #007700">= </span><span style="color: #0000BB">30_555_444</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">mysqli_stmt_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$language_code </span><span style="color: #007700">= </span><span style="color: #DD0000">'DK'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$native_speakers </span><span style="color: #007700">= </span><span style="color: #0000BB">5_222_444</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">mysqli_stmt_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* Setting autocommit=true will trigger a commit */<br />    </span><span style="color: #0000BB">mysqli_autocommit</span><span style="color: #007700">(</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br />    print </span><span style="color: #DD0000">"Committed 2 row in the database\n"</span><span style="color: #007700">;<br />} catch (</span><span style="color: #0000BB">mysqli_sql_exception $exception</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">mysqli_rollback</span><span style="color: #007700">(</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">);<br /><br />    throw </span><span style="color: #0000BB">$exception</span><span style="color: #007700">;<br />}</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Autocommit is 0
Committed 2 rows in the database
Autocommit is 0
Committed 2 row in the database
Autocommit is 0
Committed 2 rows in the database
Autocommit is 0
Committed 2 row in the database</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 notes" id="refsect1-mysqli.autocommit-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function does not work with non transactional table types (like
    MyISAM or ISAM).
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli.autocommit-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli.begin-transaction.php" class="function" rel="rdfs-seeAlso">mysqli_begin_transaction()</a> - Starts a transaction</span></li>
    <li><span class="function"><a href="mysqli.commit.php" class="function" rel="rdfs-seeAlso">mysqli_commit()</a> - Commits the current transaction</span></li>
    <li><span class="function"><a href="mysqli.rollback.php" class="function" rel="rdfs-seeAlso">mysqli_rollback()</a> - Rolls back current transaction</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli/autocommit.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.autocommit%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.autocommit&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.autocommit.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="79103">  <div class="votes">
    <div id="Vu79103">
    <a href="/manual/vote-note.php?id=79103&amp;page=mysqli.autocommit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79103">
    <a href="/manual/vote-note.php?id=79103&amp;page=mysqli.autocommit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79103" title="75% like this...">
    23
    </div>
  </div>
  <a href="#79103" class="name">
  <strong class="user"><em>jcwebb at dicoe dot com</em></strong></a><a class="genanchor" href="#79103"> &para;</a><div class="date" title="2007-11-11 01:03"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79103">
<div class="phpcode"><code><span class="html">Just to be clear, autocommit not only turns on/off transactions, but will also 'commit' any waiting queries.<br /><span class="default">&lt;?php<br />mysqli_autocommit</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">); </span><span class="comment">// turn OFF auto<br /></span><span class="keyword">-</span><span class="default">some query 1</span><span class="keyword">;<br />-</span><span class="default">some query 2</span><span class="keyword">;<br /></span><span class="default">mysqli_commit</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">); </span><span class="comment">// process ALL queries so far<br /></span><span class="keyword">-</span><span class="default">some query 3</span><span class="keyword">;<br />-</span><span class="default">some query 4</span><span class="keyword">;<br /></span><span class="default">mysqli_autocommit</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">); </span><span class="comment">// turn ON auto<br /></span><span class="default">?&gt;<br /></span>All 4 will be processed.</span></code></div>
  </div>
 </div>
  <div class="note" id="75112">  <div class="votes">
    <div id="Vu75112">
    <a href="/manual/vote-note.php?id=75112&amp;page=mysqli.autocommit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75112">
    <a href="/manual/vote-note.php?id=75112&amp;page=mysqli.autocommit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75112" title="76% like this...">
    14
    </div>
  </div>
  <a href="#75112" class="name">
  <strong class="user"><em>Geoffrey Thubron</em></strong></a><a class="genanchor" href="#75112"> &para;</a><div class="date" title="2007-05-12 06:02"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75112">
<div class="phpcode"><code><span class="html">It's worth noting that you can perform transactions without disabling autocommit just using standard sql. "START TRANSACTION;" will start a transaction. "COMMIT;" will commit the results and "ROLLBACK;" will revert to the pre-transaction state.<br /><br />CREATE TABLE and CREATE DATABASE (and probably others) are always commited immediately and your transaction appears to terminate. Thus any commands before and after will be commited, even if a subsequent rollback is attempted.<br /><br />If you are in the middle of a transaction and you call mysqli_close() it appears that you get the funcitonality of an implicit rollback.<br /><br />I can't reproduce the "code bug causes lock" problem outlined below (I always get a successful rollback and the script will run umtine times successfully). Therefore, I would suggest that the problem is fixed in php-5.2.2.</span></code></div>
  </div>
 </div>
  <div class="note" id="73816">  <div class="votes">
    <div id="Vu73816">
    <a href="/manual/vote-note.php?id=73816&amp;page=mysqli.autocommit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73816">
    <a href="/manual/vote-note.php?id=73816&amp;page=mysqli.autocommit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73816" title="56% like this...">
    4
    </div>
  </div>
  <a href="#73816" class="name">
  <strong class="user"><em>Glen</em></strong></a><a class="genanchor" href="#73816"> &para;</a><div class="date" title="2007-03-11 12:22"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73816">
<div class="phpcode"><code><span class="html">I've found that if PHP exits due to a code bug during a transaction, an InnoDB table can remain locked until Apache is restarted.<br /><br />The simple test is to start a transaction by setting $mysqli_obj-&gt;autocommit(false) and executing an insert statement.  Before getting to a $mysqli_obj-&gt;commit statement - have a runtime code bug bomb PHP.  You check the database, no insert happened (you assume a rollback occurred) .. and you go fix the bug, and try again... but this time the script takes about 50 seconds to timeout - the insert statement returning with a “1205 - Lock wait timeout exceeded; try restarting transaction”.  No rollback occurred. And this error will not go away until you restart Apache - for whatever reason, the resources are not released until the process is killed.<br /><br />I found that an ‘exit’, instead of a PHP code bug, will not cause a problem. So there is an auto-rollback mechanism in place - it just fails miserably when PHP dies unexpectantly. Having to restarting apache is a pretty drastic measure to overcome a code bug.<br /><br />To avoid this problem, I use “register_shutdown_function()” when I start a transaction, and set a flag to indicate a transaction is in process (because there is no unregister_shutdown_function()). See below. So the __shutdown_check() routine (I beleive it needs to be public) is called when the script bombs - which is able to invoke the rollback().<br /><br />these are just the relevant bits to give u an idea...<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="keyword">public function </span><span class="default">begin_transaction</span><span class="keyword">() {<br />  </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">mysqli_obj</span><span class="keyword">-&gt;</span><span class="default">autocommit</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">);<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transaction_in_progress </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />  </span><span class="default">register_shutdown_function</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"__shutdown_check"</span><span class="keyword">));<br />}<br /><br />public function </span><span class="default">__shutdown_check</span><span class="keyword">() {<br />  if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transaction_in_progress</span><span class="keyword">) {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">rollback</span><span class="keyword">();<br />  }<br />}<br /><br />public function </span><span class="default">commit</span><span class="keyword">() {<br />  </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">mysqli_obj</span><span class="keyword">-&gt;</span><span class="default">commit</span><span class="keyword">();<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transaction_in_progress </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />}<br /><br />public function </span><span class="default">rollback</span><span class="keyword">() {<br />  </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">mysqli_obj</span><span class="keyword">-&gt;</span><span class="default">rollback</span><span class="keyword">();<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transaction_in_progress </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />True for PHP 5.1.6 + MySQL 5.0.24a.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli.autocommit&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.autocommit.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mysqli.php">mysqli</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli.affected-rows.php" title="$affected_&#8203;rows">$affected_&#8203;rows</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli.autocommit.php" title="autocommit">autocommit</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.begin-transaction.php" title="begin_&#8203;transaction">begin_&#8203;transaction</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.change-user.php" title="change_&#8203;user">change_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.character-set-name.php" title="character_&#8203;set_&#8203;name">character_&#8203;set_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.commit.php" title="commit">commit</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.connect-errno.php" title="$connect_&#8203;errno">$connect_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.connect-error.php" title="$connect_&#8203;error">$connect_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.debug.php" title="debug">debug</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.dump-debug-info.php" title="dump_&#8203;debug_&#8203;info">dump_&#8203;debug_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.errno.php" title="$errno">$errno</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.error.php" title="$error">$error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.error-list.php" title="$error_&#8203;list">$error_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.execute-query.php" title="execute_&#8203;query">execute_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.field-count.php" title="$field_&#8203;count">$field_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-charset.php" title="get_&#8203;charset">get_&#8203;charset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-client-info.php" title="$client_&#8203;info">$client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-client-version.php" title="$client_&#8203;version">$client_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-connection-stats.php" title="get_&#8203;connection_&#8203;stats">get_&#8203;connection_&#8203;stats</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-host-info.php" title="$host_&#8203;info">$host_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-proto-info.php" title="$protocol_&#8203;version">$protocol_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-server-info.php" title="$server_&#8203;info">$server_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-server-version.php" title="$server_&#8203;version">$server_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-warnings.php" title="get_&#8203;warnings">get_&#8203;warnings</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.info.php" title="$info">$info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.insert-id.php" title="$insert_&#8203;id">$insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.more-results.php" title="more_&#8203;results">more_&#8203;results</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.multi-query.php" title="multi_&#8203;query">multi_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.next-result.php" title="next_&#8203;result">next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.options.php" title="options">options</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.poll.php" title="poll">poll</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.prepare.php" title="prepare">prepare</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.query.php" title="query">query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-connect.php" title="real_&#8203;connect">real_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-escape-string.php" title="real_&#8203;escape_&#8203;string">real_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-query.php" title="real_&#8203;query">real_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.reap-async-query.php" title="reap_&#8203;async_&#8203;query">reap_&#8203;async_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.release-savepoint.php" title="release_&#8203;savepoint">release_&#8203;savepoint</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.rollback.php" title="rollback">rollback</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.savepoint.php" title="savepoint">savepoint</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.select-db.php" title="select_&#8203;db">select_&#8203;db</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.set-charset.php" title="set_&#8203;charset">set_&#8203;charset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.sqlstate.php" title="$sqlstate">$sqlstate</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.ssl-set.php" title="ssl_&#8203;set">ssl_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.stmt-init.php" title="stmt_&#8203;init">stmt_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.store-result.php" title="store_&#8203;result">store_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.thread-id.php" title="$thread_&#8203;id">$thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.thread-safe.php" title="thread_&#8203;safe">thread_&#8203;safe</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.use-result.php" title="use_&#8203;result">use_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.warning-count.php" title="$warning_&#8203;count">$warning_&#8203;count</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="mysqli.init.php" title="init">init</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.kill.php" title="kill">kill</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.ping.php" title="ping">ping</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.refresh.php" title="refresh">refresh</a>
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
