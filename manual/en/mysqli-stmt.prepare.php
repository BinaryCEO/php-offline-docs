<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli_stmt::prepare - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli-stmt.prepare.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli-stmt.prepare.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-stmt.prepare.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli-stmt.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli-stmt.param-count.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli-stmt.reset.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-stmt.prepare.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli-stmt.prepare.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli-stmt.prepare.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli-stmt.prepare.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli-stmt.prepare.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli-stmt.prepare.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli-stmt.prepare.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli-stmt.prepare.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli-stmt.prepare.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli-stmt.prepare.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli-stmt.prepare.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Prepares an SQL statement for execution" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli_stmt::prepare - Manual" />
<meta name="twitter:description" content="Prepares an SQL statement for execution" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli_stmt::prepare - Manual" />
<meta itemprop="description" content="Prepares an SQL statement for execution" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Prepares an SQL statement for execution" />

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
        <a href="mysqli-stmt.reset.php">
          mysqli_stmt::reset &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli-stmt.param-count.php">
          &laquo; mysqli_stmt::$param_count        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      <li><a href='class.mysqli-stmt.php'>mysqli_stmt</a></li>      </ul>
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
            <option value='en/mysqli-stmt.prepare.php' selected="selected">English</option>
            <option value='de/mysqli-stmt.prepare.php'>German</option>
            <option value='es/mysqli-stmt.prepare.php'>Spanish</option>
            <option value='fr/mysqli-stmt.prepare.php'>French</option>
            <option value='it/mysqli-stmt.prepare.php'>Italian</option>
            <option value='ja/mysqli-stmt.prepare.php'>Japanese</option>
            <option value='pt_BR/mysqli-stmt.prepare.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli-stmt.prepare.php'>Russian</option>
            <option value='tr/mysqli-stmt.prepare.php'>Turkish</option>
            <option value='uk/mysqli-stmt.prepare.php'>Ukrainian</option>
            <option value='zh/mysqli-stmt.prepare.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli-stmt.prepare" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli_stmt::prepare</h1>
  <h1 class="refname">mysqli_stmt_prepare</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli_stmt::prepare</span> -- <span class="refname">mysqli_stmt_prepare</span> &mdash; <span class="dc-title">Prepares an SQL statement for execution</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli-stmt.prepare-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli_stmt::prepare</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_stmt_prepare</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli-stmt.php" class="type mysqli_stmt">mysqli_stmt</a></span> <code class="parameter">$statement</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Prepares a statement for execution.
   The query must consist of a single SQL statement.
  </p>
  <p class="para">
   The statement template can contain zero or more question mark
   (<code class="literal">?</code>) parameter markers⁠—also called placeholders.
   The parameter markers must be bound to application variables using
   <span class="function"><a href="mysqli-stmt.bind-param.php" class="function">mysqli_stmt_bind_param()</a></span> before executing the statement.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    In the case where a statement is passed to
    <span class="function"><strong>mysqli_stmt_prepare()</strong></span> that is longer than
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


 <div class="refsect1 parameters" id="refsect1-mysqli-stmt.prepare-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">statement</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli-stmt.php" class="classname">mysqli_stmt</a></span> object
returned by <span class="function"><a href="mysqli.stmt-init.php" class="function">mysqli_stmt_init()</a></span>.</p></dd>
    
     <dt><code class="parameter">query</code></dt>
     <dd>
      <p class="para">
       The query, as a string. It must consist of a single SQL statement.
      </p>
      <p class="para">
       The SQL statement may contain zero or more parameter markers
       represented by question mark (<code class="literal">?</code>) characters
       at the appropriate positions.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 

       <p class="para">
        The markers are legal only in certain places in SQL statements.
        For example, they are permitted in the <code class="literal">VALUES()</code>
        list of an <code class="literal">INSERT</code> statement (to specify column
        values for a row), or in a comparison with a column in a
        <code class="literal">WHERE</code> clause to specify a comparison value.
        However, they are not permitted for identifiers (such as table or
        column names).
       </p>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli-stmt.prepare-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-mysqli-stmt.prepare-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If mysqli error reporting is enabled (<strong><code><a href="mysqli.constants.php#constant.mysqli-report-error">MYSQLI_REPORT_ERROR</a></code></strong>) and the requested operation fails,
a warning is generated. If, in addition, the mode is set to <strong><code><a href="mysqli.constants.php#constant.mysqli-report-strict">MYSQLI_REPORT_STRICT</a></code></strong>,
a <span class="classname"><a href="class.mysqli-sql-exception.php" class="classname">mysqli_sql_exception</a></span> is thrown instead.</p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli-stmt.prepare-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1644">
   <p><strong>Example #1 <span class="methodname"><strong>mysqli_stmt::prepare()</strong></span> example</strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$city </span><span style="color: #007700">= </span><span style="color: #DD0000">"Amersfoort"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* create a prepared statement */<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stmt_init</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT District FROM City WHERE Name=?"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* bind parameters for markers */<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_param</span><span style="color: #007700">(</span><span style="color: #DD0000">"s"</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* execute query */<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* bind result variables */<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$district</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* fetch value */<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s is in district %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">, </span><span style="color: #0000BB">$district</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <div class="example-contents"><p>Procedural style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$city </span><span style="color: #007700">= </span><span style="color: #DD0000">"Amersfoort"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* create a prepared statement */<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_stmt_init</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">mysqli_stmt_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT District FROM City WHERE Name=?"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* bind parameters for markers */<br /></span><span style="color: #0000BB">mysqli_stmt_bind_param</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #DD0000">"s"</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* execute query */<br /></span><span style="color: #0000BB">mysqli_stmt_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* bind result variables */<br /></span><span style="color: #0000BB">mysqli_stmt_bind_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">$district</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* fetch value */<br /></span><span style="color: #0000BB">mysqli_stmt_fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s is in district %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">, </span><span style="color: #0000BB">$district</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Amersfoort is in district Utrecht</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli-stmt.prepare-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli.stmt-init.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_init()</a> - Initializes a statement and returns an object for use with mysqli_stmt_prepare</span></li>
    <li><span class="function"><a href="mysqli-stmt.execute.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_execute()</a> - Executes a prepared statement</span></li>
    <li><span class="function"><a href="mysqli-stmt.fetch.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_fetch()</a> - Fetch results from a prepared statement into the bound variables</span></li>
    <li><span class="function"><a href="mysqli-stmt.bind-param.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_bind_param()</a> - Binds variables to a prepared statement as parameters</span></li>
    <li><span class="function"><a href="mysqli-stmt.bind-result.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_bind_result()</a> - Binds variables to a prepared statement for result storage</span></li>
    <li><span class="function"><a href="mysqli-stmt.get-result.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_get_result()</a> - Gets a result set from a prepared statement as a mysqli_result object</span></li>
    <li><span class="function"><a href="mysqli-stmt.close.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_close()</a> - Closes a prepared statement</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli_stmt/prepare.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli-stmt.prepare%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli-stmt.prepare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-stmt.prepare.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108023">  <div class="votes">
    <div id="Vu108023">
    <a href="/manual/vote-note.php?id=108023&amp;page=mysqli-stmt.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108023">
    <a href="/manual/vote-note.php?id=108023&amp;page=mysqli-stmt.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108023" title="81% like this...">
    21
    </div>
  </div>
  <a href="#108023" class="name">
  <strong class="user"><em>logos-php at kith dot org</em></strong></a><a class="genanchor" href="#108023"> &para;</a><div class="date" title="2012-03-23 07:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108023">
<div class="phpcode"><code><span class="html">Note that if you're using a question mark as a placeholder for a string value, you don't surround it with quotation marks in the MySQL query.<br /><br />For example, do this:<br /><br />mysqli_stmt_prepare($stmt, "SELECT * FROM foo WHERE foo.Date &gt; ?");<br /><br />Do not do this:<br /><br />mysqli_stmt_prepare($stmt, "SELECT * FROM foo WHERE foo.Date &gt; '?'");<br /><br />If you put quotation marks around a question mark in the query, then PHP doesn't recognize the question mark as a placeholder, and then when you try to use mysqli_stmt_bind_param(), it gives an error to the effect that you have the wrong number of parameters.<br /><br />The lack of quotation marks around a string placeholder is implicit in the official example on this page, but it's not explicitly stated in the docs, and I had trouble figuring it out, so figured it was worth posting.</span></code></div>
  </div>
 </div>
  <div class="note" id="108038">  <div class="votes">
    <div id="Vu108038">
    <a href="/manual/vote-note.php?id=108038&amp;page=mysqli-stmt.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108038">
    <a href="/manual/vote-note.php?id=108038&amp;page=mysqli-stmt.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108038" title="81% like this...">
    7
    </div>
  </div>
  <a href="#108038" class="name">
  <strong class="user"><em>logos-php at kith dot orgpp</em></strong></a><a class="genanchor" href="#108038"> &para;</a><div class="date" title="2012-03-23 05:34"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108038">
<div class="phpcode"><code><span class="html">Turns out you can't directly use a prepared statement for a query that has a placeholder in an IN() clause.<br /><br />There are ways around that (such as constructing a string that consists of n question marks separated by commas, then using that set of placeholders in the IN() clause), but you can't just say IN (?).<br /><br />This is a MySQL restriction rather than a PHP restriction, but it's not really documented in the MySQL docs either, so I figured it was worth mentioning here.<br /><br />(Btw, turns out someone else had previously posted the info that I put in my previous comment, about not using quotation marks. Sorry for the repeat; not sure how I missed the earlier comment.)</span></code></div>
  </div>
 </div>
  <div class="note" id="90436">  <div class="votes">
    <div id="Vu90436">
    <a href="/manual/vote-note.php?id=90436&amp;page=mysqli-stmt.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90436">
    <a href="/manual/vote-note.php?id=90436&amp;page=mysqli-stmt.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90436" title="66% like this...">
    2
    </div>
  </div>
  <a href="#90436" class="name">
  <strong class="user"><em>ndungi at gmail dot com</em></strong></a><a class="genanchor" href="#90436"> &para;</a><div class="date" title="2009-04-22 02:25"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90436">
<div class="phpcode"><code><span class="html">The `prepare` , `bind_param`, `bind_result`, `fetch` result, `close` stmt cycle can be tedious at times. Here is an object that does all the mysqli mumbo jumbo for you when all you want is a select leaving you to the bare essential `preparedSelect` on a prepared stmt. The method returns the result set as a 2D associative array with the `select`ed columns as keys. I havent done sufficient error-checking and it also may have some bugs. Help debug and improve on it. <br /><br />I used the bible.sql db from <a href="http://www.biblesql.net/sites/biblesql.net/files/bible.mysql.gz." rel="nofollow" target="_blank">http://www.biblesql.net/sites/biblesql.net/files/bible.mysql.gz.</a><br /><br />Baraka tele!<br /><br />============================<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">DB<br /></span><span class="keyword">{<br />    public </span><span class="default">$connection</span><span class="keyword">;<br />    <br />    </span><span class="comment">#establish db connection<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">=</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">=</span><span class="string">"user"</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">, </span><span class="default">$db</span><span class="keyword">=</span><span class="string">"bible"</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">, </span><span class="default">$db</span><span class="keyword">);<br />                  <br />        if(</span><span class="default">mysqli_connect_errno</span><span class="keyword">())<br />        {<br />            echo(</span><span class="string">"Database connect Error : " <br />            </span><span class="keyword">. </span><span class="default">mysqli_connect_error</span><span class="keyword">(</span><span class="default">$mysqli</span><span class="keyword">));<br />        }    <br />    }<br />    <br />    </span><span class="comment">#store mysqli object<br />    </span><span class="keyword">public function </span><span class="default">connect</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">#run a prepared query<br />    </span><span class="keyword">public function </span><span class="default">runPreparedQuery</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">, </span><span class="default">$params_r</span><span class="keyword">)<br />    {<br />        </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">bindParameters</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="default">$params_r</span><span class="keyword">);<br /><br />        if (</span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">()) {<br />            return </span><span class="default">$stmt</span><span class="keyword">;<br />        } else {<br />            echo(</span><span class="string">"Error in </span><span class="default">$statement</span><span class="string">: " <br />                      </span><span class="keyword">. </span><span class="default">mysqli_error</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">));<br />            return </span><span class="default">0</span><span class="keyword">;<br />        }<br />        <br />    }<br /><br /> </span><span class="comment"># To run a select statement with bound parameters and bound results. <br /> # Returns an associative array two dimensional array which u can easily  <br /> # manipulate with array functions.<br /> <br />    </span><span class="keyword">public function </span><span class="default">preparedSelect</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">, </span><span class="default">$bind_params_r</span><span class="keyword">)<br />    {<br />        </span><span class="default">$select </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">runPreparedQuery</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">, </span><span class="default">$bind_params_r</span><span class="keyword">);<br />        </span><span class="default">$fields_r </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fetchFields</span><span class="keyword">(</span><span class="default">$select</span><span class="keyword">);<br />        <br />        foreach (</span><span class="default">$fields_r </span><span class="keyword">as </span><span class="default">$field</span><span class="keyword">) {<br />            </span><span class="default">$bind_result_r</span><span class="keyword">[] = &amp;${</span><span class="default">$field</span><span class="keyword">};<br />        } <br />        <br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">bindResult</span><span class="keyword">(</span><span class="default">$select</span><span class="keyword">, </span><span class="default">$bind_result_r</span><span class="keyword">);<br />        <br />        </span><span class="default">$result_r </span><span class="keyword">= array();<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        while (</span><span class="default">$select</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()) {<br />            foreach (</span><span class="default">$fields_r </span><span class="keyword">as </span><span class="default">$field</span><span class="keyword">) {<br />                </span><span class="default">$result_r</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$field</span><span class="keyword">] = $</span><span class="default">$field</span><span class="keyword">;<br />            }<br />            </span><span class="default">$i</span><span class="keyword">++;<br />        }<br />        </span><span class="default">$select</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />        return </span><span class="default">$result_r</span><span class="keyword">;    <br />    }<br />    <br />    <br />    </span><span class="comment">#takes in array of bind parameters and binds them to result of <br />    #executed prepared stmt<br />    <br />    </span><span class="keyword">private function </span><span class="default">bindParameters</span><span class="keyword">(&amp;</span><span class="default">$obj</span><span class="keyword">, &amp;</span><span class="default">$bind_params_r</span><span class="keyword">)<br />    {<br />        </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$obj</span><span class="keyword">, </span><span class="string">"bind_param"</span><span class="keyword">), </span><span class="default">$bind_params_r</span><span class="keyword">);<br />    }<br />    <br />    private function </span><span class="default">bindResult</span><span class="keyword">(&amp;</span><span class="default">$obj</span><span class="keyword">, &amp;</span><span class="default">$bind_result_r</span><span class="keyword">)<br />    {<br />        </span><span class="default">call_user_func_array</span><span class="keyword">(array(</span><span class="default">$obj</span><span class="keyword">, </span><span class="string">"bind_result"</span><span class="keyword">), </span><span class="default">$bind_result_r</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="comment">#returns a list of the selected field names<br />    <br />    </span><span class="keyword">private function </span><span class="default">fetchFields</span><span class="keyword">(</span><span class="default">$selectStmt</span><span class="keyword">)<br />    {<br />        </span><span class="default">$metadata </span><span class="keyword">= </span><span class="default">$selectStmt</span><span class="keyword">-&gt;</span><span class="default">result_metadata</span><span class="keyword">();<br />        </span><span class="default">$fields_r </span><span class="keyword">= array();<br />        while (</span><span class="default">$field </span><span class="keyword">= </span><span class="default">$metadata</span><span class="keyword">-&gt;</span><span class="default">fetch_field</span><span class="keyword">()) {<br />            </span><span class="default">$fields_r</span><span class="keyword">[] = </span><span class="default">$field</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">;<br />        }<br /><br />        return </span><span class="default">$fields_r</span><span class="keyword">;<br />    }<br />}<br /></span><span class="comment">#end of class<br /> <br />#An example of the DB class in use<br /><br /></span><span class="default">$DB </span><span class="keyword">= new </span><span class="default">DB</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="string">"root"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="string">"bible"</span><span class="keyword">);<br /></span><span class="default">$var </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">; <br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">"SELECT abbr, name from books where id &gt; ?" </span><span class="keyword">;<br /></span><span class="default">$bound_params_r </span><span class="keyword">= array(</span><span class="string">"i"</span><span class="keyword">, </span><span class="default">$var</span><span class="keyword">);<br /><br /></span><span class="default">$result_r </span><span class="keyword">= </span><span class="default">$DB</span><span class="keyword">-&gt;</span><span class="default">preparedSelect</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">, </span><span class="default">$bound_params_r</span><span class="keyword">);<br /><br /></span><span class="comment">#loop thru result array and display result<br /><br /></span><span class="keyword">foreach (</span><span class="default">$result_r </span><span class="keyword">as </span><span class="default">$result</span><span class="keyword">) {<br />    echo </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'abbr'</span><span class="keyword">] . </span><span class="string">" : " </span><span class="keyword">. </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">] . </span><span class="string">"&lt;br/&gt;" </span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83873">  <div class="votes">
    <div id="Vu83873">
    <a href="/manual/vote-note.php?id=83873&amp;page=mysqli-stmt.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83873">
    <a href="/manual/vote-note.php?id=83873&amp;page=mysqli-stmt.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83873" title="62% like this...">
    2
    </div>
  </div>
  <a href="#83873" class="name">
  <strong class="user"><em>kontakt at arthur minus schiwon dot de</em></strong></a><a class="genanchor" href="#83873"> &para;</a><div class="date" title="2008-06-16 07:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83873">
<div class="phpcode"><code><span class="html">If you wrap the placeholders with quotation marks you will experience warnings like "Number of variables doesn't match number of parameters in prepared statement" (at least with INSERT Statements).</span></code></div>
  </div>
 </div>
  <div class="note" id="57563">  <div class="votes">
    <div id="Vu57563">
    <a href="/manual/vote-note.php?id=57563&amp;page=mysqli-stmt.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57563">
    <a href="/manual/vote-note.php?id=57563&amp;page=mysqli-stmt.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57563" title="60% like this...">
    2
    </div>
  </div>
  <a href="#57563" class="name">
  <strong class="user"><em>andrey at php dot net</em></strong></a><a class="genanchor" href="#57563"> &para;</a><div class="date" title="2005-10-07 05:35"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57563">
<div class="phpcode"><code><span class="html">If you select LOBs use the following order of execution or you risk mysqli allocating more memory that actually used
<br />
<br />1)prepare()
<br />2)execute()
<br />3)store_result()
<br />4)bind_result()
<br />
<br />If you skip 3) or exchange 3) and 4) then mysqli will allocate memory for the maximal length of the column which is 255 for tinyblob, 64k for blob(still ok), 16MByte for MEDIUMBLOB - quite a lot and 4G for LONGBLOB (good if you have so much memory). Queries which use this order a bit slower when there is a LOB but this is the price of not having memory exhaustion in seconds.</span></code></div>
  </div>
 </div>
  <div class="note" id="83224">  <div class="votes">
    <div id="Vu83224">
    <a href="/manual/vote-note.php?id=83224&amp;page=mysqli-stmt.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83224">
    <a href="/manual/vote-note.php?id=83224&amp;page=mysqli-stmt.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83224" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83224" class="name">
  <strong class="user"><em>mhradek AT gmail.com</em></strong></a><a class="genanchor" href="#83224"> &para;</a><div class="date" title="2008-05-15 04:06"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83224">
<div class="phpcode"><code><span class="html">A particularly helpful adaptation of this function and the call_user_func_array function:<br /><br />// $params is sent as array($val=&gt;'i', $val=&gt;'d', etc...)<br /><br />function db_stmt_bind_params($stmt, $params)<br />{ <br />    $funcArg[] = $stmt; <br />    foreach($params as $val=&gt;$type)<br />    { <br />        $funcArg['type'] .= $type; <br />        $funcArg[] = $val; <br />    } <br />    return call_user_func_array('mysqli_stmt_bind_param', $funcArgs); <br />} <br /><br />Thanks to 'sned' for the code.</span></code></div>
  </div>
 </div>
  <div class="note" id="75534">  <div class="votes">
    <div id="Vu75534">
    <a href="/manual/vote-note.php?id=75534&amp;page=mysqli-stmt.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75534">
    <a href="/manual/vote-note.php?id=75534&amp;page=mysqli-stmt.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75534" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75534" class="name">
  <strong class="user"><em>st dot john dot johnson at gmail dot com</em></strong></a><a class="genanchor" href="#75534"> &para;</a><div class="date" title="2007-06-04 08:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75534">
<div class="phpcode"><code><span class="html">In reference to what lachlan76 said before, stored procedures CAN be executed through prepared statements as long as you tell the DB to move to the next result before executing again.
<br />
<br />Example (Five calls to a stored procedure):
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">5</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {
<br />  </span><span class="default">$statement </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">stmt_init</span><span class="keyword">();
<br />  </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"CALL some_procedure( ? )"</span><span class="keyword">);
<br />
<br />  </span><span class="comment">// Bind, execute, and bind.
<br />  </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">"i"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />  </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();
<br />  </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">bind_result</span><span class="keyword">(</span><span class="default">$results</span><span class="keyword">);
<br />
<br />  while(</span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()) {
<br />    </span><span class="comment">// Do what you want with your results.
<br />  </span><span class="keyword">}
<br />
<br />  </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br />
<br />  </span><span class="comment">// Now move the mysqli connection to a new result.
<br />  </span><span class="keyword">while(</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">()) { }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />If you include the last statement, this code should execute without the nasty "Commands out of sync" error.</span></code></div>
  </div>
 </div>
  <div class="note" id="80426">  <div class="votes">
    <div id="Vu80426">
    <a href="/manual/vote-note.php?id=80426&amp;page=mysqli-stmt.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80426">
    <a href="/manual/vote-note.php?id=80426&amp;page=mysqli-stmt.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80426" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#80426" class="name">
  <strong class="user"><em>lukaszNOSPAMPLEASE at epas dot pl</em></strong></a><a class="genanchor" href="#80426"> &para;</a><div class="date" title="2008-01-15 07:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80426">
<div class="phpcode"><code><span class="html">i've got some bad news for you guys if you haven't found out already.
<br />the trick with mysqli_next_result() only prevents having the connection dropped after a stored procedure call.
<br />apparently you can bind parameters for a prepared stored procedure call, but you'll get messed up records from mysqli_stmt_fetch() after mysqli_stmt_bind_result(), at least when the stored procedure itself contains a prepared statement.
<br />a way to avoid data corruption could be specifying the CLIENT_MULTI_STATEMENTS flag in mysqli_real_connect(), if it wasn't disabled entirely (for security reasons, as they say). another option is to use mysqli_multi_query(), but then you can't bind at all.</span></code></div>
  </div>
 </div>
  <div class="note" id="71439">  <div class="votes">
    <div id="Vu71439">
    <a href="/manual/vote-note.php?id=71439&amp;page=mysqli-stmt.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71439">
    <a href="/manual/vote-note.php?id=71439&amp;page=mysqli-stmt.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71439" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#71439" class="name">
  <strong class="user"><em>lachlan76 at gmail dot com</em></strong></a><a class="genanchor" href="#71439"> &para;</a><div class="date" title="2006-11-28 08:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71439">
<div class="phpcode"><code><span class="html">Do not try to use a stored procedure through a prepared statement.
<br />
<br />Example:
<br />
<br /><span class="default">&lt;?php
<br />$statement </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">stmt_init</span><span class="keyword">();
<br /></span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"CALL some_procedure()"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />If you attempt to do this, it will fail by dropping the connection during the next query.  Use mysqli_multi_query instead.
<br />
<br />Example:
<br />
<br /><span class="default">&lt;?php
<br />$mysqli</span><span class="keyword">-&gt;</span><span class="default">multi_query</span><span class="keyword">(</span><span class="string">"CALL some_procedure()"</span><span class="keyword">);
<br />do
<br />{
<br />  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">();
<br />
<br />   </span><span class="comment">// Do your processing work here  
<br />  
<br />  </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();
<br />} while(</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">());
<br /></span><span class="default">?&gt;
<br /></span>
<br />This means that you cannot bind parameters or results, however.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli-stmt.prepare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-stmt.prepare.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mysqli-stmt.php">mysqli_stmt</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli-stmt.affected-rows.php" title="$affected_&#8203;rows">$affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.attr-get.php" title="attr_&#8203;get">attr_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.attr-set.php" title="attr_&#8203;set">attr_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.bind-param.php" title="bind_&#8203;param">bind_&#8203;param</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.bind-result.php" title="bind_&#8203;result">bind_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.data-seek.php" title="data_&#8203;seek">data_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.errno.php" title="$errno">$errno</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.error.php" title="$error">$error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.error-list.php" title="$error_&#8203;list">$error_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.execute.php" title="execute">execute</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.fetch.php" title="fetch">fetch</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.field-count.php" title="$field_&#8203;count">$field_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.free-result.php" title="free_&#8203;result">free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.get-result.php" title="get_&#8203;result">get_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.get-warnings.php" title="get_&#8203;warnings">get_&#8203;warnings</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.insert-id.php" title="$insert_&#8203;id">$insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.more-results.php" title="more_&#8203;results">more_&#8203;results</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.next-result.php" title="next_&#8203;result">next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.num-rows.php" title="$num_&#8203;rows">$num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.param-count.php" title="$param_&#8203;count">$param_&#8203;count</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli-stmt.prepare.php" title="prepare">prepare</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.reset.php" title="reset">reset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.result-metadata.php" title="result_&#8203;metadata">result_&#8203;metadata</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.send-long-data.php" title="send_&#8203;long_&#8203;data">send_&#8203;long_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.sqlstate.php" title="$sqlstate">$sqlstate</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-stmt.store-result.php" title="store_&#8203;result">store_&#8203;result</a>
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
