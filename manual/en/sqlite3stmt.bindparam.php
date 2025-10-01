<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SQLite3Stmt::bindParam - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/sqlite3stmt.bindparam.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/sqlite3stmt.bindparam.php">
 <link rel="alternate" href="https://www.php.net/manual/en/sqlite3stmt.bindparam.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.sqlite3stmt.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.sqlite3stmt.php">
 <link rel="next" href="https://www.php.net/manual/en/sqlite3stmt.bindvalue.php">

 <link rel="alternate" href="https://www.php.net/manual/en/sqlite3stmt.bindparam.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/sqlite3stmt.bindparam.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/sqlite3stmt.bindparam.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/sqlite3stmt.bindparam.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/sqlite3stmt.bindparam.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/sqlite3stmt.bindparam.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/sqlite3stmt.bindparam.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/sqlite3stmt.bindparam.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/sqlite3stmt.bindparam.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/sqlite3stmt.bindparam.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/sqlite3stmt.bindparam.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binds a parameter to a statement variable" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SQLite3Stmt::bindParam - Manual" />
<meta name="twitter:description" content="Binds a parameter to a statement variable" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SQLite3Stmt::bindParam - Manual" />
<meta itemprop="description" content="Binds a parameter to a statement variable" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binds a parameter to a statement variable" />

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
        <a href="sqlite3stmt.bindvalue.php">
          SQLite3Stmt::bindValue &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.sqlite3stmt.php">
          &laquo; SQLite3Stmt        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.sqlite3.php'>SQLite3</a></li>      <li><a href='class.sqlite3stmt.php'>SQLite3Stmt</a></li>      </ul>
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
            <option value='en/sqlite3stmt.bindparam.php' selected="selected">English</option>
            <option value='de/sqlite3stmt.bindparam.php'>German</option>
            <option value='es/sqlite3stmt.bindparam.php'>Spanish</option>
            <option value='fr/sqlite3stmt.bindparam.php'>French</option>
            <option value='it/sqlite3stmt.bindparam.php'>Italian</option>
            <option value='ja/sqlite3stmt.bindparam.php'>Japanese</option>
            <option value='pt_BR/sqlite3stmt.bindparam.php'>Brazilian Portuguese</option>
            <option value='ru/sqlite3stmt.bindparam.php'>Russian</option>
            <option value='tr/sqlite3stmt.bindparam.php'>Turkish</option>
            <option value='uk/sqlite3stmt.bindparam.php'>Ukrainian</option>
            <option value='zh/sqlite3stmt.bindparam.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="sqlite3stmt.bindparam" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SQLite3Stmt::bindParam</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SQLite3Stmt::bindParam</span> &mdash; <span class="dc-title">Binds a parameter to a statement variable</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-sqlite3stmt.bindparam-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SQLite3Stmt::bindParam</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$param</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&$var</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = <strong><code><a href="sqlite3.constants.php#constant.sqlite3-text">SQLITE3_TEXT</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Binds a parameter to a statement variable.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    Before PHP 7.2.14 and 7.3.0, respectively,
    <span class="methodname"><a href="sqlite3stmt.reset.php" class="methodname">SQLite3Stmt::reset()</a></span> must be called after the first call to
    <span class="methodname"><a href="sqlite3stmt.execute.php" class="methodname">SQLite3Stmt::execute()</a></span> if the bound value should be properly
    updated on following calls to <span class="methodname"><a href="sqlite3stmt.execute.php" class="methodname">SQLite3Stmt::execute()</a></span>.
    If <span class="methodname"><a href="sqlite3stmt.reset.php" class="methodname">SQLite3Stmt::reset()</a></span> is not called, the bound value will
    not change, even if the value assigned to the variable passed to
    <span class="methodname"><strong>SQLite3Stmt::bindParam()</strong></span> has changed, or
    <span class="methodname"><strong>SQLite3Stmt::bindParam()</strong></span> has been called again.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-sqlite3stmt.bindparam-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">param</code></dt>
     <dd>
      <p class="para">
       Either a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> (for named parameters) or an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
       (for positional parameters) identifying the statement variable to which the
       value should be bound.
       If a named parameter does not start with a colon (<code class="literal">:</code>) or an
       at sign (<code class="literal">@</code>), a colon (<code class="literal">:</code>) is automatically preprended.
       Positional parameters start with <code class="literal">1</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">var</code></dt>
     <dd>
      <p class="para">
       The parameter to bind to a statement variable.
      </p>
     </dd>
    
    
     <dt><code class="parameter">type</code></dt>
     <dd>
      <p class="para">
       The data type of the parameter to bind.
       <ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          <strong><code><a href="sqlite3.constants.php#constant.sqlite3-integer">SQLITE3_INTEGER</a></code></strong>: The value is a signed integer,
          stored in 1, 2, 3, 4, 6, or 8 bytes depending on the magnitude of
          the value.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="sqlite3.constants.php#constant.sqlite3-float">SQLITE3_FLOAT</a></code></strong>: The value is a floating point
          value, stored as an 8-byte IEEE floating point number.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="sqlite3.constants.php#constant.sqlite3-text">SQLITE3_TEXT</a></code></strong>: The value is a text string, stored
          using the database encoding (UTF-8, UTF-16BE or UTF-16-LE).
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="sqlite3.constants.php#constant.sqlite3-blob">SQLITE3_BLOB</a></code></strong>: The value is a blob of data, stored
          exactly as it was input.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="sqlite3.constants.php#constant.sqlite3-null">SQLITE3_NULL</a></code></strong>: The value is a NULL value.
         </p>
        </li>
       </ul>
      </p>
      <p class="para">
       As of PHP 7.0.7, if <code class="parameter">type</code> is omitted, it is automatically
       detected from the type of the <code class="parameter">var</code>: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
       and <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> are treated as <strong><code><a href="sqlite3.constants.php#constant.sqlite3-integer">SQLITE3_INTEGER</a></code></strong>,
       <span class="type"><a href="language.types.float.php" class="type float">float</a></span> as <strong><code><a href="sqlite3.constants.php#constant.sqlite3-float">SQLITE3_FLOAT</a></code></strong>, <span class="type"><a href="language.types.null.php" class="type null">null</a></span>
       as <strong><code><a href="sqlite3.constants.php#constant.sqlite3-null">SQLITE3_NULL</a></code></strong> and all others as <strong><code><a href="sqlite3.constants.php#constant.sqlite3-text">SQLITE3_TEXT</a></code></strong>.
       Formerly, if <code class="parameter">type</code> has been omitted, it has defaulted
       to <strong><code><a href="sqlite3.constants.php#constant.sqlite3-text">SQLITE3_TEXT</a></code></strong>.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        If <code class="parameter">var</code> is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, it is always treated as
        <strong><code><a href="sqlite3.constants.php#constant.sqlite3-null">SQLITE3_NULL</a></code></strong>, regardless of the given
        <code class="parameter">type</code>.
       </p>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-sqlite3stmt.bindparam-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the parameter is bound to the statement variable, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-sqlite3stmt.bindparam-changelog">
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
      <td>7.4.0</td>
      <td>
       <code class="parameter">param</code> now also supports the <code class="literal">@param</code>
       notation.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-sqlite3stmt.bindparam-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2145">
    <p><strong>Example #1 <span class="function"><strong>SQLite3Stmt::bindParam()</strong></span> Usage</strong></p>
    <div class="example-contents"><p>
     This example shows how a single prepared statement with a single parameter
     binding can be used to insert multiple rows with different values.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$db </span><span style="color: #007700">= new </span><span style="color: #0000BB">SQLite3</span><span style="color: #007700">(</span><span style="color: #DD0000">':memory:'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE foo (bar TEXT)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO foo VALUES (:bar)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #DD0000">':bar'</span><span style="color: #007700">, </span><span style="color: #0000BB">$bar</span><span style="color: #007700">, </span><span style="color: #0000BB">SQLITE3_TEXT</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">'baz'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$res </span><span style="color: #007700">= </span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT * FROM foo"</span><span style="color: #007700">);<br />while ((</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">$res</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchArray</span><span style="color: #007700">(</span><span style="color: #0000BB">SQLITE3_ASSOC</span><span style="color: #007700">))) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(1) {
  [&quot;bar&quot;]=&gt;
  string(3) &quot;baz&quot;
}
array(1) {
  [&quot;bar&quot;]=&gt;
  string(2) &quot;42&quot;
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-sqlite3stmt.bindparam-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="methodname"><a href="sqlite3stmt.bindvalue.php" class="methodname" rel="rdfs-seeAlso">SQLite3Stmt::bindValue()</a> - Binds the value of a parameter to a statement variable</span></li>
   <li><span class="methodname"><a href="sqlite3.prepare.php" class="methodname" rel="rdfs-seeAlso">SQLite3::prepare()</a> - Prepares an SQL statement for execution</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sqlite3/sqlite3stmt/bindparam.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsqlite3stmt.bindparam%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=sqlite3stmt.bindparam&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sqlite3stmt.bindparam.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115956">  <div class="votes">
    <div id="Vu115956">
    <a href="/manual/vote-note.php?id=115956&amp;page=sqlite3stmt.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115956">
    <a href="/manual/vote-note.php?id=115956&amp;page=sqlite3stmt.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115956" title="56% like this...">
    3
    </div>
  </div>
  <a href="#115956" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#115956"> &para;</a><div class="date" title="2014-10-19 06:31"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115956">
<div class="phpcode"><code><span class="html">Note that this bindParam needs a variable as the second parameter.<br />Use bindValue if you want to bind a value, such an array item.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=sqlite3stmt.bindparam&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sqlite3stmt.bindparam.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.sqlite3stmt.php">SQLite3Stmt</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="sqlite3stmt.bindparam.php" title="bindParam">bindParam</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3stmt.bindvalue.php" title="bindValue">bindValue</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3stmt.clear.php" title="clear">clear</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3stmt.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3stmt.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3stmt.execute.php" title="execute">execute</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3stmt.getsql.php" title="getSQL">getSQL</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3stmt.paramcount.php" title="paramCount">paramCount</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3stmt.readonly.php" title="readOnly">readOnly</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3stmt.reset.php" title="reset">reset</a>
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
