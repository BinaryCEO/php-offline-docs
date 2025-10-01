<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli::query - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.query.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.query.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.query.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.prepare.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.real-connect.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.query.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.query.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.query.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.query.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.query.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.query.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.query.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.query.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.query.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.query.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.query.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Performs a query on the database" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli::query - Manual" />
<meta name="twitter:description" content="Performs a query on the database" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli::query - Manual" />
<meta itemprop="description" content="Performs a query on the database" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Performs a query on the database" />

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
        <a href="mysqli.real-connect.php">
          mysqli::real_connect &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.prepare.php">
          &laquo; mysqli::prepare        </a>
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
            <option value='en/mysqli.query.php' selected="selected">English</option>
            <option value='de/mysqli.query.php'>German</option>
            <option value='es/mysqli.query.php'>Spanish</option>
            <option value='fr/mysqli.query.php'>French</option>
            <option value='it/mysqli.query.php'>Italian</option>
            <option value='ja/mysqli.query.php'>Japanese</option>
            <option value='pt_BR/mysqli.query.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.query.php'>Russian</option>
            <option value='tr/mysqli.query.php'>Turkish</option>
            <option value='uk/mysqli.query.php'>Ukrainian</option>
            <option value='zh/mysqli.query.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.query" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli::query</h1>
  <h1 class="refname">mysqli_query</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli::query</span> -- <span class="refname">mysqli_query</span> &mdash; <span class="dc-title">Performs a query on the database</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli.query-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli::query</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$result_mode</code><span class="initializer"> = <strong><code><a href="mysqli.constants.php#constant.mysqli-store-result">MYSQLI_STORE_RESULT</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.mysqli-result.php" class="type mysqli_result">mysqli_result</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_query</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli.php" class="type mysqli">mysqli</a></span> <code class="parameter">$mysql</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$result_mode</code><span class="initializer"> = <strong><code><a href="mysqli.constants.php#constant.mysqli-store-result">MYSQLI_STORE_RESULT</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.mysqli-result.php" class="type mysqli_result">mysqli_result</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>

  <p class="para rdfs-comment">
   Performs a <code class="parameter">query</code> against the database.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
<h1 class="title">Security warning: SQL injection</h1><p class="para">If the query contains any variable
input then <a href="mysqli.quickstart.prepared-statements.php" class="link">parameterized
prepared statements</a> should be used instead. Alternatively, the
data must be properly formatted and all strings must be escaped using
the <span class="function"><a href="mysqli.real-escape-string.php" class="function">mysqli_real_escape_string()</a></span>
function.</p></div>
  <p class="para">
   For non-DML queries (not INSERT, UPDATE or DELETE),
   this function is similar to calling 
   <span class="function"><a href="mysqli.real-query.php" class="function">mysqli_real_query()</a></span> followed by either
   <span class="function"><a href="mysqli.use-result.php" class="function">mysqli_use_result()</a></span> or 
   <span class="function"><a href="mysqli.store-result.php" class="function">mysqli_store_result()</a></span>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    In the case where a statement is passed to
    <span class="function"><strong>mysqli_query()</strong></span> that is longer than
    <code class="literal">max_allowed_packet</code> of the server, the returned
    error codes are different depending on whether you are using MySQL
    Native Driver (<code class="literal">mysqlnd</code>) or MySQL Client Library
    (<code class="literal">libmysqlclient</code>). The behavior is as follows:
   </p>
   <ul class="itemizedlist">
    <li class="listitem">
     <p class="para">
      <code class="literal">mysqlnd</code> on Linux returns an error code of 1153.
      The error message means <q class="quote">got a packet bigger than
      <code class="literal">max_allowed_packet</code> bytes</q>.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <code class="literal">mysqlnd</code> on Windows returns an error code 2006.
      This error message means <q class="quote">server has gone away</q>.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <code class="literal">libmysqlclient</code> on all platforms returns an error code
      2006. This error message means <q class="quote">server has gone
      away</q>.
     </p>
    </li>
   </ul>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli.query-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">mysql</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli.php" class="classname">mysqli</a></span> object
returned by <span class="function"><a href="function.mysqli-connect.php" class="function">mysqli_connect()</a></span> or <span class="function"><a href="mysqli.init.php" class="function">mysqli_init()</a></span>
</p></dd>
    
     <dt><code class="parameter">query</code></dt>
     <dd>
      <p class="para">
       The query string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">result_mode</code></dt>
     <dd>
      <p class="para">
       The result mode can be one of 3 constants indicating how the result will
       be returned from the MySQL server.
      </p>
      <p class="para">
       <strong><code><a href="mysqli.constants.php#constant.mysqli-store-result">MYSQLI_STORE_RESULT</a></code></strong> (default) - returns a
       <span class="classname"><a href="class.mysqli-result.php" class="classname">mysqli_result</a></span> object with buffered result set.
      </p>
      <p class="para">
       <strong><code><a href="mysqli.constants.php#constant.mysqli-use-result">MYSQLI_USE_RESULT</a></code></strong> - returns a
       <span class="classname"><a href="class.mysqli-result.php" class="classname">mysqli_result</a></span> object with unbuffered result set. 
       As long as there are pending records waiting to be fetched, the
       connection line will be busy and all subsequent calls will return error 
       <code class="literal">Commands out of sync</code>. To avoid the error all records 
       must be fetched from the server or the result set must be discarded by
       calling <span class="function"><a href="mysqli-result.free.php" class="function">mysqli_free_result()</a></span>.
      </p>
      <p class="para">
       <strong><code><a href="mysqli.constants.php#constant.mysqli-async">MYSQLI_ASYNC</a></code></strong> (available with mysqlnd) - the query is
       performed asynchronously and no result set is immediately returned.
       <span class="function"><a href="mysqli.poll.php" class="function">mysqli_poll()</a></span> is then used to get results from such
       queries. Used in combination with either
       <strong><code><a href="mysqli.constants.php#constant.mysqli-store-result">MYSQLI_STORE_RESULT</a></code></strong> or
       <strong><code><a href="mysqli.constants.php#constant.mysqli-use-result">MYSQLI_USE_RESULT</a></code></strong> constant.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli.query-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure. For successful queries which produce a result
   set, such as <code class="literal">SELECT, SHOW, DESCRIBE</code> or
   <code class="literal">EXPLAIN</code>, <span class="function"><strong>mysqli_query()</strong></span> will return
   a <span class="classname"><a href="class.mysqli-result.php" class="classname">mysqli_result</a></span> object. For other successful queries,
   <span class="function"><strong>mysqli_query()</strong></span> will
   return <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-mysqli.query-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If mysqli error reporting is enabled (<strong><code><a href="mysqli.constants.php#constant.mysqli-report-error">MYSQLI_REPORT_ERROR</a></code></strong>) and the requested operation fails,
a warning is generated. If, in addition, the mode is set to <strong><code><a href="mysqli.constants.php#constant.mysqli-report-strict">MYSQLI_REPORT_STRICT</a></code></strong>,
a <span class="classname"><a href="class.mysqli-sql-exception.php" class="classname">mysqli_sql_exception</a></span> is thrown instead.</p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli.query-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1609">
   <p><strong>Example #1 <span class="methodname"><strong>mysqli::query()</strong></span> example</strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create table doesn't return a resultset */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TEMPORARY TABLE myCity LIKE City"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Table myCity successfully created.\n"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Select queries return a resultset */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT Name FROM City LIMIT 10"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Select returned %d rows.\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">num_rows</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* If we have to retrieve large amount of data we use MYSQLI_USE_RESULT */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT * FROM City"</span><span style="color: #007700">, </span><span style="color: #0000BB">MYSQLI_USE_RESULT</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Note, that we can't execute any functions which interact with the<br />    server until all records have been fully retrieved or the result<br />    set was closed. All calls will return an 'out of sync' error */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SET @a:='this will not work'"</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <div class="example-contents"><p>Procedural style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create table doesn't return a resultset */<br /></span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"CREATE TEMPORARY TABLE myCity LIKE City"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Table myCity successfully created.\n"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Select queries return a resultset */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT Name FROM City LIMIT 10"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Select returned %d rows.\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">mysqli_num_rows</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">/* If we have to retrieve large amount of data we use MYSQLI_USE_RESULT */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT * FROM City"</span><span style="color: #007700">, </span><span style="color: #0000BB">MYSQLI_USE_RESULT</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Note, that we can't execute any functions which interact with the<br />    server until all records have been fully retrieved or the result<br />    set was closed. All calls will return an 'out of sync' error */<br /></span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"SET @a:='this will not work'"</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Table myCity successfully created.
Select returned 10 rows.

Fatal error: Uncaught mysqli_sql_exception: Commands out of sync; you can&#039;t run this command now in...</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli.query-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli.execute-query.php" class="function" rel="rdfs-seeAlso">mysqli_execute_query()</a> - Prepares, binds parameters, and executes SQL statement</span></li>
    <li><span class="function"><a href="mysqli.real-query.php" class="function" rel="rdfs-seeAlso">mysqli_real_query()</a> - Execute an SQL query</span></li>
    <li><span class="function"><a href="mysqli.multi-query.php" class="function" rel="rdfs-seeAlso">mysqli_multi_query()</a> - Performs one or more queries on the database</span></li>
    <li><span class="function"><a href="mysqli.prepare.php" class="function" rel="rdfs-seeAlso">mysqli_prepare()</a> - Prepares an SQL statement for execution</span></li>
    <li><span class="function"><a href="mysqli-result.free.php" class="function" rel="rdfs-seeAlso">mysqli_free_result()</a> - Frees the memory associated with a result</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli/query.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.query%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.query&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.query.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="80821">  <div class="votes">
    <div id="Vu80821">
    <a href="/manual/vote-note.php?id=80821&amp;page=mysqli.query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80821">
    <a href="/manual/vote-note.php?id=80821&amp;page=mysqli.query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80821" title="56% like this...">
    52
    </div>
  </div>
  <a href="#80821" class="name">
  <strong class="user"><em>NUNTIUS</em></strong></a><a class="genanchor" href="#80821"> &para;</a><div class="date" title="2008-02-01 01:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80821">
<div class="phpcode"><code><span class="html">This may or may not be obvious to people but perhaps it will help someone.
<br />
<br />When running joins in SQL you may encounter a problem if you are trying to pull two columns with the same name. mysqli returns the last in the query when called by name. So to get what you need you can use an alias.
<br />
<br />Below I am trying to join a user id with a user role. in the first table (tbl_usr), role is a number and in the second is a  text name (tbl_memrole is a lookup table). If I call them both as role I get the text as it is the last "role" in the query. If I use an alias then I get both as desired as shown below.
<br />
<br /><span class="default">&lt;?php
<br />$sql </span><span class="keyword">= </span><span class="string">"SELECT a.uid, a.role AS roleid, b.role, 
<br />            FROM tbl_usr a
<br />            INNER JOIN tbl_memrole b
<br />            ON a.role = b.id
<br />            "</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">$result </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">)) {
<br />        while(</span><span class="default">$obj </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetch_object</span><span class="keyword">()){
<br />            </span><span class="default">$line</span><span class="keyword">.=</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">uid</span><span class="keyword">;
<br />            </span><span class="default">$line</span><span class="keyword">.=</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">role</span><span class="keyword">;
<br />            </span><span class="default">$line</span><span class="keyword">.=</span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">roleid</span><span class="keyword">;
<br />        }
<br />    }
<br />    </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br />    unset(</span><span class="default">$obj</span><span class="keyword">);
<br />    unset(</span><span class="default">$sql</span><span class="keyword">);
<br />    unset(</span><span class="default">$query</span><span class="keyword">);
<br />    
<br /></span><span class="default">?&gt;
<br /></span>In this situation I guess I could have just renamed the role column in the first table roleid and that would have taken care of it, but it was a learning experience.</span></code></div>
  </div>
 </div>
  <div class="note" id="103422">  <div class="votes">
    <div id="Vu103422">
    <a href="/manual/vote-note.php?id=103422&amp;page=mysqli.query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103422">
    <a href="/manual/vote-note.php?id=103422&amp;page=mysqli.query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103422" title="53% like this...">
    35
    </div>
  </div>
  <a href="#103422" class="name">
  <strong class="user"><em>theyranos at gmail dot com</em></strong></a><a class="genanchor" href="#103422"> &para;</a><div class="date" title="2011-04-12 06:35"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103422">
<div class="phpcode"><code><span class="html">The cryptic "Couldn't fetch mysqli" error message can mean any number of things, including:<br /><br />1. You're trying to use a database object that you've already closed (as noted by ceo at l-i-e dot com). Reopen your database connection, or find the call to <span class="default">&lt;?php mysqli_close</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">); </span><span class="default">?&gt;</span> or <span class="default">&lt;?php $db</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">(); </span><span class="default">?&gt;</span> and remove it.<br />2. Your MySQLi object has been serialized and unserialized for some reason. Define a wakeup function to re-create your database connection. <a href="http://php.net/__wakeup" rel="nofollow" target="_blank">http://php.net/__wakeup</a> <br />3. Something besides you closed your mysqli connection (in particular, see <a href="http://bugs.php.net/bug.php?id=33772" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=33772</a>)<br />4. You mixed OOP and functional calls to the database object. (So, you have <span class="default">&lt;?php $db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">() </span><span class="default">?&gt;</span> in the same program as <span class="default">&lt;?php mysqli_query</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">) </span><span class="default">?&gt;</span>).</span></code></div>
  </div>
 </div>
  <div class="note" id="102904">  <div class="votes">
    <div id="Vu102904">
    <a href="/manual/vote-note.php?id=102904&amp;page=mysqli.query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102904">
    <a href="/manual/vote-note.php?id=102904&amp;page=mysqli.query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102904" title="52% like this...">
    35
    </div>
  </div>
  <a href="#102904" class="name">
  <strong class="user"><em>petrus.jvr</em></strong></a><a class="genanchor" href="#102904"> &para;</a><div class="date" title="2011-03-14 03:40"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102904">
<div class="phpcode"><code><span class="html">When calling multiple stored procedures, you can run into the following error: "Commands out of sync; you can't run this command now".<br />This can happen even when using the close() function on the result object between calls. <br />To fix the problem, remember to call the next_result() function on the mysqli object after each stored procedure call. See example below:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// New Connection<br /></span><span class="default">$db </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">'localhost'</span><span class="keyword">,</span><span class="string">'user'</span><span class="keyword">,</span><span class="string">'pass'</span><span class="keyword">,</span><span class="string">'database'</span><span class="keyword">);<br /><br /></span><span class="comment">// Check for errors<br /></span><span class="keyword">if(</span><span class="default">mysqli_connect_errno</span><span class="keyword">()){<br /> echo </span><span class="default">mysqli_connect_error</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">// 1st Query<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"call getUsers()"</span><span class="keyword">);<br />if(</span><span class="default">$result</span><span class="keyword">){<br />     </span><span class="comment">// Cycle through results<br />    </span><span class="keyword">while (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetch_object</span><span class="keyword">()){<br />        </span><span class="default">$user_arr</span><span class="keyword">[] = </span><span class="default">$row</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// Free result set<br />    </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />    </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">// 2nd Query<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"call getGroups()"</span><span class="keyword">);<br />if(</span><span class="default">$result</span><span class="keyword">){<br />     </span><span class="comment">// Cycle through results<br />    </span><span class="keyword">while (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetch_object</span><span class="keyword">()){<br />        </span><span class="default">$group_arr</span><span class="keyword">[] = </span><span class="default">$row</span><span class="keyword">;<br />    }<br />     </span><span class="comment">// Free result set<br />     </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />     </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">();<br />}<br />else echo(</span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">);<br /><br /></span><span class="comment">// Close connection<br /></span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127646">  <div class="votes">
    <div id="Vu127646">
    <a href="/manual/vote-note.php?id=127646&amp;page=mysqli.query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127646">
    <a href="/manual/vote-note.php?id=127646&amp;page=mysqli.query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127646" title="57% like this...">
    6
    </div>
  </div>
  <a href="#127646" class="name">
  <strong class="user"><em>xa at sagexa dot com</em></strong></a><a class="genanchor" href="#127646"> &para;</a><div class="date" title="2022-09-16 04:33"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127646">
<div class="phpcode"><code><span class="html">"In PHP 8.1, the default error handling behavior of the MySQLi extension has changed from silencing errors to throw an Exception on errors. "<br />This is true even for the procedural use of mysqli, i.e. mysqli_query.<br />Hence, using if(!mysqli_query($c, $sql)) [...] is pointless.<br />To disable Exception throwing : mysqli_report(MYSQLI_REPORT_OFF);</span></code></div>
  </div>
 </div>
  <div class="note" id="122800">  <div class="votes">
    <div id="Vu122800">
    <a href="/manual/vote-note.php?id=122800&amp;page=mysqli.query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122800">
    <a href="/manual/vote-note.php?id=122800&amp;page=mysqli.query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122800" title="51% like this...">
    11
    </div>
  </div>
  <a href="#122800" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#122800"> &para;</a><div class="date" title="2018-06-05 11:21"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122800">
<div class="phpcode"><code><span class="html">Here is an example of a clean query into a html table<br /><br />&lt;table&gt;<br />   &lt;tr&gt;<br />     &lt;th&gt;First Name&lt;/th&gt;<br />     &lt;th&gt;Last Name&lt;/th&gt;<br />     &lt;th&gt;City&lt;/th&gt;<br />   &lt;/tr&gt;<br />   <span class="default">&lt;?php </span><span class="keyword">while (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">$myquery</span><span class="keyword">-&gt;</span><span class="default">fetch_assoc</span><span class="keyword">()) { </span><span class="default">?&gt;<br /></span>   &lt;tr&gt;<br />     &lt;td&gt;<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">$row</span><span class="keyword">[</span><span class="string">"firstname"</span><span class="keyword">]; </span><span class="default">?&gt;</span>&lt;/td&gt;<br />     &lt;td&gt;<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">$row</span><span class="keyword">[</span><span class="string">"lastname"</span><span class="keyword">]; </span><span class="default">?&gt;</span>&lt;/td&gt;<br />     &lt;td&gt;<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">$row</span><span class="keyword">[</span><span class="string">"city"</span><span class="keyword">];</span><span class="default">?&gt;</span>&lt;/td&gt;<br />   &lt;/tr&gt;<br />   <span class="default">&lt;?php </span><span class="keyword">} </span><span class="default">?&gt;<br /></span> &lt;/table&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="98535">  <div class="votes">
    <div id="Vu98535">
    <a href="/manual/vote-note.php?id=98535&amp;page=mysqli.query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98535">
    <a href="/manual/vote-note.php?id=98535&amp;page=mysqli.query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98535" title="50% like this...">
    0
    </div>
  </div>
  <a href="#98535" class="name">
  <strong class="user"><em>registrations at jdfoxmicro dot com</em></strong></a><a class="genanchor" href="#98535"> &para;</a><div class="date" title="2010-06-21 04:11"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98535">
<div class="phpcode"><code><span class="html">I like to save the query itself in a log file, so that I don't have to worry about whether the site is live.
<br />
<br />For example, I might have a global function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">UpdateLog </span><span class="keyword">( </span><span class="default">$string </span><span class="keyword">, </span><span class="default">$logfile </span><span class="keyword">)  {
<br />   </span><span class="default">$fh </span><span class="keyword">= </span><span class="default">fopen </span><span class="keyword">( </span><span class="default">$logfile </span><span class="keyword">, </span><span class="string">'a' </span><span class="keyword">);
<br />   </span><span class="default">$fwrite </span><span class="keyword">( </span><span class="default">$fh </span><span class="keyword">, </span><span class="default">strftime </span><span class="keyword">(</span><span class="string">'%F %T %z'</span><span class="keyword">).</span><span class="string">" "</span><span class="keyword">.</span><span class="default">$string</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;
<br />   </span><span class="default">fclose </span><span class="keyword">( </span><span class="default">$fh </span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Then in my mysql function error trapper, something like this:
<br />
<br /><span class="default">&lt;?php
<br />   $error_msg </span><span class="keyword">= </span><span class="string">"Database error in [page].php / "</span><span class="keyword">;
<br />   </span><span class="default">$error_msg </span><span class="keyword">.= </span><span class="default">mysqli_error </span><span class="keyword">( </span><span class="default">$link </span><span class="keyword">).</span><span class="string">" / "</span><span class="keyword">;
<br />   </span><span class="default">$error_msg </span><span class="keyword">.= </span><span class="default">$query</span><span class="keyword">;
<br />   </span><span class="default">UpdateLog </span><span class="keyword">( </span><span class="default">$error_msg </span><span class="keyword">, </span><span class="default">DB_ERROR_LOG_FILE </span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />I also include the remote IP, user agent, etc., but I left it out of these code samples.  And have it e-mail me when an error is caught, too.
<br />
<br />Jeff</span></code></div>
  </div>
 </div>
  <div class="note" id="60473">  <div class="votes">
    <div id="Vu60473">
    <a href="/manual/vote-note.php?id=60473&amp;page=mysqli.query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60473">
    <a href="/manual/vote-note.php?id=60473&amp;page=mysqli.query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60473" title="50% like this...">
    0
    </div>
  </div>
  <a href="#60473" class="name">
  <strong class="user"><em>Beeners</em></strong></a><a class="genanchor" href="#60473"> &para;</a><div class="date" title="2006-01-08 12:16"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60473">
<div class="phpcode"><code><span class="html">Stored Procedures.<br /><br />Use mysqli_query to call a stored procedure that returns a result set. <br /><br />Here is a short example:<br /><br /><span class="default">&lt;?php<br />$mysqli </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="default">DBURI</span><span class="keyword">,</span><span class="default">DBUSER</span><span class="keyword">,</span><span class="default">DBPASS</span><span class="keyword">,</span><span class="default">DBNAME</span><span class="keyword">);<br />if (</span><span class="default">mysqli_connect_errno</span><span class="keyword">()) <br />{<br />  </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Connection failed: %s\n"</span><span class="keyword">, </span><span class="default">mysqli_connect_error</span><span class="keyword">());<br />  exit();<br />}<br /><br /></span><span class="default">$SQL </span><span class="keyword">= </span><span class="string">"CALL my_procedure(</span><span class="default">$something</span><span class="string">)"</span><span class="keyword">;<br />if ( (</span><span class="default">$result </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$SQL</span><span class="keyword">))===</span><span class="default">false </span><span class="keyword">)<br />{<br />  </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Invalid query: %s\nWhole query: %s\n"</span><span class="keyword">, </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">, </span><span class="default">$SQL</span><span class="keyword">);<br />  exit();<br />}<br /><br />while (</span><span class="default">$myrow </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetch_array</span><span class="keyword">(</span><span class="default">MYSQLI_ASSOC</span><span class="keyword">))<br />{<br />  </span><span class="default">$aValue</span><span class="keyword">[]=</span><span class="default">$myrow</span><span class="keyword">[</span><span class="string">"a"</span><span class="keyword">];<br />  </span><span class="default">$bValue</span><span class="keyword">[]=</span><span class="default">$myrow</span><span class="keyword">[</span><span class="string">"b"</span><span class="keyword">];<br />}<br /></span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>I hope this saves someone some time.</span></code></div>
  </div>
 </div>
  <div class="note" id="85367">  <div class="votes">
    <div id="Vu85367">
    <a href="/manual/vote-note.php?id=85367&amp;page=mysqli.query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85367">
    <a href="/manual/vote-note.php?id=85367&amp;page=mysqli.query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85367" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#85367" class="name">
  <strong class="user"><em>ceo at l-i-e dot com</em></strong></a><a class="genanchor" href="#85367"> &para;</a><div class="date" title="2008-08-27 07:51"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85367">
<div class="phpcode"><code><span class="html">Translation:<br />"Couldn't fetch mysqli"<br /><br />You closed your connection and are trying to use it again.<br /><br />It has taken me DAYS to figure out what this obscure error message means...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli.query&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.query.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mysqli.php">mysqli</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli.affected-rows.php" title="$affected_&#8203;rows">$affected_&#8203;rows</a>
                        </li>
                                                <li class="">
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
                                                <li class="current">
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
