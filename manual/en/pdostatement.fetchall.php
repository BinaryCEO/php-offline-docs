<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDOStatement::fetchAll - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdostatement.fetchall.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdostatement.fetchall.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.fetchall.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pdostatement.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdostatement.fetch.php">
 <link rel="next" href="https://www.php.net/manual/en/pdostatement.fetchcolumn.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.fetchall.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdostatement.fetchall.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdostatement.fetchall.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdostatement.fetchall.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdostatement.fetchall.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdostatement.fetchall.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdostatement.fetchall.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdostatement.fetchall.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdostatement.fetchall.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdostatement.fetchall.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdostatement.fetchall.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetches the remaining rows from a result set" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDOStatement::fetchAll - Manual" />
<meta name="twitter:description" content="Fetches the remaining rows from a result set" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDOStatement::fetchAll - Manual" />
<meta itemprop="description" content="Fetches the remaining rows from a result set" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetches the remaining rows from a result set" />

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
        <a href="pdostatement.fetchcolumn.php">
          PDOStatement::fetchColumn &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdostatement.fetch.php">
          &laquo; PDOStatement::fetch        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      <li><a href='class.pdostatement.php'>PDOStatement</a></li>      </ul>
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
            <option value='en/pdostatement.fetchall.php' selected="selected">English</option>
            <option value='de/pdostatement.fetchall.php'>German</option>
            <option value='es/pdostatement.fetchall.php'>Spanish</option>
            <option value='fr/pdostatement.fetchall.php'>French</option>
            <option value='it/pdostatement.fetchall.php'>Italian</option>
            <option value='ja/pdostatement.fetchall.php'>Japanese</option>
            <option value='pt_BR/pdostatement.fetchall.php'>Brazilian Portuguese</option>
            <option value='ru/pdostatement.fetchall.php'>Russian</option>
            <option value='tr/pdostatement.fetchall.php'>Turkish</option>
            <option value='uk/pdostatement.fetchall.php'>Ukrainian</option>
            <option value='zh/pdostatement.fetchall.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdostatement.fetchall" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">PDOStatement::fetchAll</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PECL pdo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">PDOStatement::fetchAll</span> &mdash; <span class="dc-title">
   Fetches the remaining rows from a result set
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-pdostatement.fetchall-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>PDOStatement::fetchAll</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = PDO::FETCH_DEFAULT</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>


  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><strong>PDOStatement::fetchAll</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = PDO::FETCH_COLUMN</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$column</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>


  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><strong>PDOStatement::fetchAll</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = PDO::FETCH_CLASS</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$constructorArgs</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>


  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><strong>PDOStatement::fetchAll</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = PDO::FETCH_FUNC</span></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-pdostatement.fetchall-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       Controls the contents of the returned array as documented in
       <span class="methodname"><a href="pdostatement.fetch.php" class="methodname">PDOStatement::fetch()</a></span>.
       Defaults to value of <strong><code><a href="pdo.constants.php#pdo.constants.attr-default-fetch-mode">PDO::ATTR_DEFAULT_FETCH_MODE</a></code></strong>
       (which defaults to <strong><code><a href="pdo.constants.php#pdo.constants.fetch-both">PDO::FETCH_BOTH</a></code></strong>)
      </p>
      <p class="para">
       To return an array consisting of all values of a single column from
       the result set, specify <strong><code><a href="pdo.constants.php#pdo.constants.fetch-column">PDO::FETCH_COLUMN</a></code></strong>. You
       can specify which column you want with the
       <code class="parameter">column</code> parameter.
      </p>
      <p class="para">
       To index the resulting array by a certain column&#039;s value (instead of
       consecutive numbers), put this column&#039;s name first in the column
       list in SQL, and use <strong><code><a href="pdo.constants.php#pdo.constants.fetch-unique">PDO::FETCH_UNIQUE</a></code></strong>.
       This column must contain only unique values or some data will be lost.
      </p>
      <p class="para">
       To group results in the form of a 3-dimensional array indexed by values
       of a specified column, put this column&#039;s name first in
       the column list in SQL and use <strong><code><a href="pdo.constants.php#pdo.constants.fetch-group">PDO::FETCH_GROUP</a></code></strong>.
      </p>
      <p class="para">
       To group results in the form of a 2-dimensional array
       use bitwise-OR <strong><code><a href="pdo.constants.php#pdo.constants.fetch-group">PDO::FETCH_GROUP</a></code></strong> with
       <strong><code><a href="pdo.constants.php#pdo.constants.fetch-column">PDO::FETCH_COLUMN</a></code></strong>.
       The results will be grouped by the first column, with the array element&#039;s value
       being a list array of the corresponding entries from the second column.
      </p>
     </dd>
    
   </dl>
   The following are dynamic parameters that are depending on the fetch mode.
   They can&#039;t be used with named parameters.
   <dl>
    
     <dt><code class="parameter">column</code></dt>
     <dd>
      <p class="para">
       Used with <strong><code><a href="pdo.constants.php#pdo.constants.fetch-column">PDO::FETCH_COLUMN</a></code></strong>. Returns the indicated
       0-indexed column.
      </p>
     </dd>
    
    
     <dt><code class="parameter">class</code></dt>
     <dd>
      <p class="para">
       Used with <strong><code><a href="pdo.constants.php#pdo.constants.fetch-class">PDO::FETCH_CLASS</a></code></strong>. Returns instances of the specified
       class, mapping the columns of each row to named properties in the class.
      </p>
     </dd>
    
    
     <dt><code class="parameter">constructorArgs</code></dt>
     <dd>
      <p class="para">
       Arguments of custom class constructor when the <code class="parameter">mode</code> 
       parameter is <strong><code><a href="pdo.constants.php#pdo.constants.fetch-class">PDO::FETCH_CLASS</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">callback</code></dt>
     <dd>
      <p class="para">
       Used with <strong><code><a href="pdo.constants.php#pdo.constants.fetch-func">PDO::FETCH_FUNC</a></code></strong>. Returns the results of calling the
       specified function, using each row&#039;s columns as parameters in the call.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-pdostatement.fetchall-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="methodname"><strong>PDOStatement::fetchAll()</strong></span> returns an array containing
   all of the remaining rows in the result set. The array represents each
   row as either an array of column values or an object with properties
   corresponding to each column name. An empty array is returned if there
   are zero results to fetch.
  </p>
  <p class="para">
   Using this method to fetch large result sets will result in a heavy
   demand on system and possibly network resources. Rather than retrieving
   all of the data and manipulating it in PHP, consider using the database
   server to manipulate the result sets. For example, use the WHERE and
   ORDER BY clauses in SQL to restrict results before retrieving and
   processing them with PHP.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-pdostatement.fetchall-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
Emits an error with level <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> if the attribute <strong><code><a href="pdo.constants.php#pdo.constants.attr-errmode">PDO::ATTR_ERRMODE</a></code></strong> is set
to <strong><code><a href="pdo.constants.php#pdo.constants.errmode-warning">PDO::ERRMODE_WARNING</a></code></strong>.
</p>
<p class="para">
Throws a <span class="classname"><a href="class.pdoexception.php" class="classname">PDOException</a></span> if the attribute <strong><code><a href="pdo.constants.php#pdo.constants.attr-errmode">PDO::ATTR_ERRMODE</a></code></strong>
is set to <strong><code><a href="pdo.constants.php#pdo.constants.errmode-exception">PDO::ERRMODE_EXCEPTION</a></code></strong>.
</p>
 </div>


 <div class="refsect1 changelog" id="refsect1-pdostatement.fetchall-changelog">
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
      <td>8.0.0</td>
      <td>
       This method always returns an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> now, while previously <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> may have
       been returned on failure.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-pdostatement.fetchall-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1167"><p><strong>Example #1 Fetch all remaining rows in a result set</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT name, colour FROM fruit"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Fetch all of the remaining rows in the result set */<br /></span><span style="color: #007700">print </span><span style="color: #DD0000">"Fetch all of the remaining rows in the result set:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchAll</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Fetch all of the remaining rows in the result set:
Array
(
    [0] =&gt; Array
        (
            [name] =&gt; apple
            [0] =&gt; apple
            [colour] =&gt; red
            [1] =&gt; red
        )

    [1] =&gt; Array
        (
            [name] =&gt; pear
            [0] =&gt; pear
            [colour] =&gt; green
            [1] =&gt; green
        )

    [2] =&gt; Array
        (
            [name] =&gt; watermelon
            [0] =&gt; watermelon
            [colour] =&gt; pink
            [1] =&gt; pink
        )

)</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-1168"><p><strong>Example #2 Fetching all values of a single column from a result set</strong></p>
    <div class="example-contents"><p>
     The following example demonstrates how to return all of the values of a
     single column from a result set, even though the SQL statement itself
     may return multiple columns per row.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT name, colour FROM fruit"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Fetch all of the values of the first column */<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchAll</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_COLUMN</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array(3)
(
    [0] =&gt;
    string(5) =&gt; apple
    [1] =&gt;
    string(4) =&gt; pear
    [2] =&gt;
    string(10) =&gt; watermelon
)</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-1169"><p><strong>Example #3 Grouping all values by a single column</strong></p>
    <div class="example-contents"><p>
     The following example demonstrates how to return an associative array
     grouped by the values of the specified column in the result set. The
     array contains three keys: values <code class="literal">apple</code> and
     <code class="literal">pear</code> are returned as arrays that contain two
     different colours, while <code class="literal">watermelon</code> is
     returned as an array that contains only one colour.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$insert </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO fruit(name, colour) VALUES (?, ?)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$insert</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">, </span><span style="color: #DD0000">'green'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$insert</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'pear'</span><span style="color: #007700">, </span><span style="color: #DD0000">'yellow'</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT name, colour FROM fruit"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Group values by the first column */<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchAll</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_COLUMN</span><span style="color: #007700">|</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_GROUP</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(3) {
  [&quot;apple&quot;]=&gt;
  array(2) {
    [0]=&gt;
    string(5) &quot;green&quot;
    [1]=&gt;
    string(3) &quot;red&quot;
  }
  [&quot;pear&quot;]=&gt;
  array(2) {
    [0]=&gt;
    string(5) &quot;green&quot;
    [1]=&gt;
    string(6) &quot;yellow&quot;
  }
  [&quot;watermelon&quot;]=&gt;
  array(1) {
    [0]=&gt;
    string(5) &quot;pink&quot;
  }
}</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-1170"><p><strong>Example #4 Instantiating a class for each result</strong></p>
    <div class="example-contents"><p>
     The following example demonstrates the behaviour of the
     <strong><code><a href="pdo.constants.php#pdo.constants.fetch-class">PDO::FETCH_CLASS</a></code></strong> fetch style.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">fruit </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$colour</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT name, colour FROM fruit"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchAll</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_CLASS</span><span style="color: #007700">, </span><span style="color: #DD0000">"fruit"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(3) {
  [0]=&gt;
  object(fruit)#1 (2) {
    [&quot;name&quot;]=&gt;
    string(5) &quot;apple&quot;
    [&quot;colour&quot;]=&gt;
    string(5) &quot;green&quot;
  }
  [1]=&gt;
  object(fruit)#2 (2) {
    [&quot;name&quot;]=&gt;
    string(4) &quot;pear&quot;
    [&quot;colour&quot;]=&gt;
    string(6) &quot;yellow&quot;
  }
  [2]=&gt;
  object(fruit)#3 (2) {
    [&quot;name&quot;]=&gt;
    string(10) &quot;watermelon&quot;
    [&quot;colour&quot;]=&gt;
    string(4) &quot;pink&quot;
  }
  [3]=&gt;
  object(fruit)#4 (2) {
    [&quot;name&quot;]=&gt;
    string(5) &quot;apple&quot;
    [&quot;colour&quot;]=&gt;
    string(3) &quot;red&quot;
  }
  [4]=&gt;
  object(fruit)#5 (2) {
    [&quot;name&quot;]=&gt;
    string(4) &quot;pear&quot;
    [&quot;colour&quot;]=&gt;
    string(5) &quot;green&quot;
  }
}</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-1171"><p><strong>Example #5 Calling a function for each result</strong></p>
    <div class="example-contents"><p>
     The following example demonstrates the behaviour of the
     <strong><code><a href="pdo.constants.php#pdo.constants.fetch-func">PDO::FETCH_FUNC</a></code></strong> fetch style.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">fruit</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">, </span><span style="color: #0000BB">$colour</span><span style="color: #007700">) {<br />    return </span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000">: </span><span style="color: #007700">{</span><span style="color: #0000BB">$colour</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT name, colour FROM fruit"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchAll</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_FUNC</span><span style="color: #007700">, </span><span style="color: #DD0000">"fruit"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(3) {
  [0]=&gt;
  string(12) &quot;apple: green&quot;
  [1]=&gt;
  string(12) &quot;pear: yellow&quot;
  [2]=&gt;
  string(16) &quot;watermelon: pink&quot;
  [3]=&gt;
  string(10) &quot;apple: red&quot;
  [4]=&gt;
  string(11) &quot;pear: green&quot;
}</pre>
</div>
    </div>
   </div>

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-pdostatement.fetchall-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="pdo.query.php" class="methodname" rel="rdfs-seeAlso">PDO::query()</a> - Prepares and executes an SQL statement without placeholders</span></li>
    <li><span class="methodname"><a href="pdostatement.fetch.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::fetch()</a> - Fetches the next row from a result set</span></li>
    <li><span class="methodname"><a href="pdostatement.fetchcolumn.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::fetchColumn()</a> - Returns a single column from the next row of a result set</span></li>
    <li><span class="methodname"><a href="pdo.prepare.php" class="methodname" rel="rdfs-seeAlso">PDO::prepare()</a> - Prepares a statement for execution and returns a statement object</span></li>
    <li><span class="methodname"><a href="pdostatement.setfetchmode.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::setFetchMode()</a> - Set the default fetch mode for this statement</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdostatement/fetchall.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdostatement.fetchall%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdostatement.fetchall&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.fetchall.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120517">  <div class="votes">
    <div id="Vu120517">
    <a href="/manual/vote-note.php?id=120517&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120517">
    <a href="/manual/vote-note.php?id=120517&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120517" title="85% like this...">
    102
    </div>
  </div>
  <a href="#120517" class="name">
  <strong class="user"><em>simplerezo at gmail dot com</em></strong></a><a class="genanchor" href="#120517"> &para;</a><div class="date" title="2017-01-24 02:52"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120517">
<div class="phpcode"><code><span class="html">I still don't understand why FETCH_KEY_PAIR is not documented here (<a href="http://php.net/manual/fr/pdo.constants.php" rel="nofollow" target="_blank">http://php.net/manual/fr/pdo.constants.php</a>), because it could be very useful!<br /><br /><span class="default">&lt;?php<br />  var_dump</span><span class="keyword">(</span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'select id, name from table'</span><span class="keyword">)-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_KEY_PAIR</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />This will display:<br />array(2) {<br />  [2]=&gt;<br />  string(10) "name2"<br />  [5]=&gt;<br />  string(10) "name5"<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="116347">  <div class="votes">
    <div id="Vu116347">
    <a href="/manual/vote-note.php?id=116347&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116347">
    <a href="/manual/vote-note.php?id=116347&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116347" title="74% like this...">
    53
    </div>
  </div>
  <a href="#116347" class="name">
  <strong class="user"><em>dyukemedia at gmail dot com</em></strong></a><a class="genanchor" href="#116347"> &para;</a><div class="date" title="2014-12-16 12:15"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116347">
<div class="phpcode"><code><span class="html">Getting foreach to play nicely with some data from PDO FetchAll()<br />I was not understanding to use the $value part of the foreach properly, I hope this helps someone else.<br />Example:<br /><span class="default">&lt;?php <br />$stmt </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT title, FMarticle_id FROM articles WHERE domain_name =:domain_name'</span><span class="keyword">);<br />            </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="string">':domain_name'</span><span class="keyword">, </span><span class="default">$domain</span><span class="keyword">);<br />            </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />            </span><span class="default">$article_list </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>which gives:<br /><br />array (size=2)<br />  0 =&gt; <br />    array (size=2)<br />      'title' =&gt; string 'About Cats Really Long title for the article' (length=44)<br />      'FMarticle_id' =&gt; string '7CAEBB15-6784-3A41-909A-1B6D12667499' (length=36)<br />  1 =&gt; <br />    array (size=2)<br />      'title' =&gt; string 'another cat story' (length=17)<br />      'FMarticle_id' =&gt; string '0BB86A06-2A79-3145-8A02-ECF6EA5C405C' (length=36)<br /><br />Then use:<br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (</span><span class="default">$article_list </span><span class="keyword">as </span><span class="default">$row </span><span class="keyword">=&gt; </span><span class="default">$link</span><span class="keyword">) {<br />  echo  </span><span class="string">'&lt;a href="'</span><span class="keyword">.  </span><span class="default">$link</span><span class="keyword">[</span><span class="string">'FMarticle_id'</span><span class="keyword">].</span><span class="string">'"&gt;' </span><span class="keyword">. </span><span class="default">$link</span><span class="keyword">[</span><span class="string">'title'</span><span class="keyword">]. </span><span class="string">'&lt;/a&gt;&lt;/br&gt;'</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97973">  <div class="votes">
    <div id="Vu97973">
    <a href="/manual/vote-note.php?id=97973&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97973">
    <a href="/manual/vote-note.php?id=97973&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97973" title="74% like this...">
    37
    </div>
  </div>
  <a href="#97973" class="name">
  <strong class="user"><em>esw at pixeloution dot removeme dot com</em></strong></a><a class="genanchor" href="#97973"> &para;</a><div class="date" title="2010-05-18 09:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97973">
<div class="phpcode"><code><span class="html">Interestingly enough, when you use fetchAll, the constructor for your object is called AFTER the properties are assigned. For example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">person </span><span class="keyword">{<br />    public </span><span class="default">$name</span><span class="keyword">;<br /><br />    function </span><span class="default">__construct</span><span class="keyword">() {<br />       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">. </span><span class="string">" is my name."</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment"># set up select from a database here with PDO<br /></span><span class="default">$obj </span><span class="keyword">= </span><span class="default">$STH</span><span class="keyword">-&gt;</span><span class="default">fetchALL</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_CLASS</span><span class="keyword">, </span><span class="string">'person'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Will result in ' is my name' being appended to all the name columns. However if you call it slightly differently:<br /><br /><span class="default">&lt;?php<br />$obj </span><span class="keyword">= </span><span class="default">$obj </span><span class="keyword">= </span><span class="default">$STH</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_CLASS </span><span class="keyword">| </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_PROPS_LATE</span><span class="keyword">, </span><span class="string">'person'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Then the constructor will be called before properties are assigned. I can't find this documented anywhere, so I thought it would be nice to add a note here.</span></code></div>
  </div>
 </div>
  <div class="note" id="90692">  <div class="votes">
    <div id="Vu90692">
    <a href="/manual/vote-note.php?id=90692&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90692">
    <a href="/manual/vote-note.php?id=90692&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90692" title="75% like this...">
    22
    </div>
  </div>
  <a href="#90692" class="name">
  <strong class="user"><em>Daniel Hofmann</em></strong></a><a class="genanchor" href="#90692"> &para;</a><div class="date" title="2009-05-05 12:21"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90692">
<div class="phpcode"><code><span class="html">PLEASE BE AWARE: If you do an OUTER LEFT JOIN and set PDO FetchALL to PDO::FETCH_ASSOC, any primary key you used in the OUTER LEFT JOIN will be set to a blank if there are no records returned in the JOIN.<br /><br />For example:<br /><span class="default">&lt;?php<br /></span><span class="comment">//query the product table and join to the image table and return any images, if we have any, for each product<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"SELECT * FROM product, image<br />LEFT OUTER JOIN image ON (product.product_id = image.product_id)"</span><span class="keyword">;<br /><br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The resulting array will look something like this:<br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [product_id] =&gt; <br />            [notes] =&gt; "this product..."<br />            [brand] =&gt; "Best Yet"<br />            ...<br /><br />The fix is to simply specify your field names in the SELECT clause instead of using the * as a wild card, or, you can also specify the field in addition to the *. The following example returns the product_id field correctly:<br /><br /><span class="default">&lt;?php<br />$sql </span><span class="keyword">= </span><span class="string">"SELECT *, product.product_id FROM product, image<br />LEFT OUTER JOIN image ON (product.product_id = image.product_id)"</span><span class="keyword">;<br /><br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The resulting array will look something like this:<br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [product_id] =&gt; 3<br />            [notes] =&gt; "this product..."<br />            [brand] =&gt; "Best Yet"<br />            ...</span></code></div>
  </div>
 </div>
  <div class="note" id="104609">  <div class="votes">
    <div id="Vu104609">
    <a href="/manual/vote-note.php?id=104609&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104609">
    <a href="/manual/vote-note.php?id=104609&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104609" title="71% like this...">
    20
    </div>
  </div>
  <a href="#104609" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#104609"> &para;</a><div class="date" title="2011-06-25 02:10"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104609">
<div class="phpcode"><code><span class="html">Note that fetchAll() can be extremely memory inefficient for large data sets. My memory limit was set to 160 MB this is what happened when I tried:
<br />
<br /><span class="default">&lt;?php
<br />$arr </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">();
<br /></span><span class="comment">// Fatal error: Allowed memory size of 16777216 bytes exhausted
<br /></span><span class="default">?&gt;
<br /></span>
<br />If you are going to loop through the output array of fetchAll(), instead use fetch() to minimize memory usage as follows:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">while (</span><span class="default">$arr </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()) {
<br />    echo </span><span class="default">round</span><span class="keyword">(</span><span class="default">memory_get_usage</span><span class="keyword">() / (</span><span class="default">1024</span><span class="keyword">*</span><span class="default">1024</span><span class="keyword">),</span><span class="default">3</span><span class="keyword">) .</span><span class="string">' MB&lt;br /&gt;'</span><span class="keyword">;
<br />    </span><span class="comment">// do_other_stuff();
<br /></span><span class="keyword">}
<br /></span><span class="comment">// Last line for the same query shows only 28.973 MB usage
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114253">  <div class="votes">
    <div id="Vu114253">
    <a href="/manual/vote-note.php?id=114253&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114253">
    <a href="/manual/vote-note.php?id=114253&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114253" title="73% like this...">
    11
    </div>
  </div>
  <a href="#114253" class="name">
  <strong class="user"><em>michael dot arnauts at gmail dot com</em></strong></a><a class="genanchor" href="#114253"> &para;</a><div class="date" title="2014-01-29 03:59"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114253">
<div class="phpcode"><code><span class="html">If you want to use PDO::FETCH_CLASS but don't like that all the values are of the type string, you can always use the __construct function of the class specified to convert them to a different type.<br /><br />Another way is using mysqlnd, but it seems I had to recompile PHP for that.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Cdr </span><span class="keyword">{<br />    public </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">// int<br />    </span><span class="keyword">public </span><span class="default">$b</span><span class="keyword">; </span><span class="comment">// float<br />    </span><span class="keyword">public </span><span class="default">$c</span><span class="keyword">; </span><span class="comment">// string<br />    <br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">b</span><span class="keyword">);<br />    }<br />     <br />}<br /><br /></span><span class="comment">// ...<br /></span><span class="default">$arrCdrs </span><span class="keyword">= </span><span class="default">$objSqlStatement</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_CLASS</span><span class="keyword">, </span><span class="string">'Cdr'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117980">  <div class="votes">
    <div id="Vu117980">
    <a href="/manual/vote-note.php?id=117980&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117980">
    <a href="/manual/vote-note.php?id=117980&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117980" title="71% like this...">
    6
    </div>
  </div>
  <a href="#117980" class="name">
  <strong class="user"><em>info at yuriblanc dot it</em></strong></a><a class="genanchor" href="#117980"> &para;</a><div class="date" title="2015-09-14 12:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117980">
<div class="phpcode"><code><span class="html">Something missing in the doc.<br />If for instance you try to fetchAll(PDO::CLASS, "Class") it sometimes return an array of objects with NULL values, but the count of objects fetched correspond to table rows.<br /><br />In this way works fine:<br />fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Class");<br /><br />For example<br /><br />$stm = $pdo-&gt;prepare("SELECT * FROM Fruit");<br />$stm-&gt;execute();<br />$stm-&gt;fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Fruit");</span></code></div>
  </div>
 </div>
  <div class="note" id="80164">  <div class="votes">
    <div id="Vu80164">
    <a href="/manual/vote-note.php?id=80164&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80164">
    <a href="/manual/vote-note.php?id=80164&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80164" title="63% like this...">
    21
    </div>
  </div>
  <a href="#80164" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#80164"> &para;</a><div class="date" title="2008-01-01 11:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80164">
<div class="phpcode"><code><span class="html">If no rows have been returned, fetchAll returns an empty array.</span></code></div>
  </div>
 </div>
  <div class="note" id="128008">  <div class="votes">
    <div id="Vu128008">
    <a href="/manual/vote-note.php?id=128008&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128008">
    <a href="/manual/vote-note.php?id=128008&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128008" title="66% like this...">
    1
    </div>
  </div>
  <a href="#128008" class="name">
  <strong class="user"><em>shaunc</em></strong></a><a class="genanchor" href="#128008"> &para;</a><div class="date" title="2022-12-11 12:14"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128008">
<div class="phpcode"><code><span class="html">Note that \PDO::FETCH_DEFAULT was not introduced until PHP 8.0.7 and 8.1.0. It will throw an undefined constant error in earlier versions.</span></code></div>
  </div>
 </div>
  <div class="note" id="120642">  <div class="votes">
    <div id="Vu120642">
    <a href="/manual/vote-note.php?id=120642&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120642">
    <a href="/manual/vote-note.php?id=120642&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120642" title="66% like this...">
    3
    </div>
  </div>
  <a href="#120642" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#120642"> &para;</a><div class="date" title="2017-02-14 11:24"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120642">
<div class="phpcode"><code><span class="html">Be careful when using PDO::FETCH_COLUMN with PDO::FETCH_GROUP. By default, results are grouped by first column (index 0) and second column (index 1) is returned. But, if you provide fetch argument, it wouldn't affect returned column, but grouping column. If grouping column is set explicitly , first columns is returned instead of second.<br /><br /><span class="default">&lt;?php<br />$insert </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"INSERT INTO people(id, gender) VALUES (?, ?)"</span><span class="keyword">);<br /></span><span class="default">$insert</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="string">'2'</span><span class="keyword">, </span><span class="string">'female'</span><span class="keyword">));<br /></span><span class="default">$insert</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="string">'3'</span><span class="keyword">, </span><span class="string">'female'</span><span class="keyword">));<br /></span><span class="default">$insert</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="string">'4'</span><span class="keyword">, </span><span class="string">'female'</span><span class="keyword">));<br /></span><span class="default">$insert</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="string">'5'</span><span class="keyword">, </span><span class="string">'male'</span><span class="keyword">));<br /></span><span class="default">$insert</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="string">'6'</span><span class="keyword">, </span><span class="string">'male'</span><span class="keyword">));<br /><br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT gender, id FROM people"</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /><br /></span><span class="comment">/* Group values by the first column */<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_COLUMN</span><span class="keyword">|</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_GROUP</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span>Returns:<br /><span class="default">&lt;?php<br /></span><span class="keyword">array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">)<br />  </span><span class="string">'female' </span><span class="keyword">=&gt; <br />    array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">)<br />      </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'2' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />      </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'3' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />      </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'4' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />  </span><span class="string">'male' </span><span class="keyword">=&gt; <br />    array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">)<br />      </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'5' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />      </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'6' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br />But, <br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_COLUMN</span><span class="keyword">|</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_GROUP</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span>returns:<br /><span class="default">&lt;?php <br /></span><span class="keyword">array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">)<br />  </span><span class="string">'female' </span><span class="keyword">=&gt; <br />    array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">)<br />      </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'female' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />      </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'female' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />      </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'female' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />  </span><span class="string">'male' </span><span class="keyword">=&gt; <br />    array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">)<br />      </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'male' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />      </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'male' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span>and <br /><span class="default">&lt;?php <br />var_dump</span><span class="keyword">(</span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_COLUMN</span><span class="keyword">|</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_GROUP</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span>returns<br /><span class="default">&lt;?php<br /></span><span class="keyword">array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">5</span><span class="keyword">)<br />  </span><span class="default">2 </span><span class="keyword">=&gt; <br />    array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />      </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'female' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />  </span><span class="default">3 </span><span class="keyword">=&gt; <br />    array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />      </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'female' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />  </span><span class="default">4 </span><span class="keyword">=&gt; <br />    array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />      </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'female' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />  </span><span class="default">5 </span><span class="keyword">=&gt; <br />    array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />      </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'male' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />  </span><span class="default">6 </span><span class="keyword">=&gt; <br />    array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />      </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'male' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br />First column is retuned and grouping is done by provided column index.</span></code></div>
  </div>
 </div>
  <div class="note" id="122665">  <div class="votes">
    <div id="Vu122665">
    <a href="/manual/vote-note.php?id=122665&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122665">
    <a href="/manual/vote-note.php?id=122665&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122665" title="66% like this...">
    1
    </div>
  </div>
  <a href="#122665" class="name">
  <strong class="user"><em>rudigerw at hotmail dot com</em></strong></a><a class="genanchor" href="#122665"> &para;</a><div class="date" title="2018-04-26 09:36"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122665">
<div class="phpcode"><code><span class="html">I was blown away that you can actually combine PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE | PDO::FETCH_UNIQUE, because both PDO::FETCH_CLASSTYPE and PDO::FETCH_UNIQUE say they will use the first column, but it turns out PDO::FETCH_CLASSTYPE goes first and then PDO::FETCH_UNIQUE will use the next column. This way you can create an associative array of objects, with one of the table columns as key. For example a query such as<br /><br /> 'SELECT Class, Id, t.* FROM subscriptions_tbl t'<br /><br />might give you this result:<br /><br />Array<br />(<br />    [20481086] =&gt; WConsumerSubscription Object<br />        (<br />            [Variant] =&gt; 2<br />            [_Expiration:WSubscriptionModel:private] =&gt; DateTime Object<br />                (<br />                    [date] =&gt; 2018-08-08 00:00:00.000000<br />                    [timezone_type] =&gt; 3<br />                    [timezone] =&gt; UTC<br />                )<br /><br />            [Notes] =&gt; <br />            [Id] =&gt; 20481086<br />            [_Deleted:protected] =&gt; 0<br />            [_VersionNo:protected] =&gt; 2<br />            [ContactId] =&gt; <br />            [ConsumerId] =&gt; 2<br />        )<br /><br />    [21878324] =&gt; WAdminSubscription Object<br />        (<br />            [Variant] =&gt; <br />            [_Expiration:WSubscriptionModel:private] =&gt; <br />            [Notes] =&gt; <br />            [Id] =&gt; 21878324<br />            [_Deleted:protected] =&gt; 0<br />            [_VersionNo:protected] =&gt; 1<br />            [ContactId] =&gt; <br />        )<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="104740">  <div class="votes">
    <div id="Vu104740">
    <a href="/manual/vote-note.php?id=104740&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104740">
    <a href="/manual/vote-note.php?id=104740&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104740" title="64% like this...">
    5
    </div>
  </div>
  <a href="#104740" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#104740"> &para;</a><div class="date" title="2011-07-04 04:48"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104740">
<div class="phpcode"><code><span class="html">If you use the PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE flags to map columns to object properties, fetchAll() will use any __set() method your object has when carrying out the mapping.</span></code></div>
  </div>
 </div>
  <div class="note" id="94236">  <div class="votes">
    <div id="Vu94236">
    <a href="/manual/vote-note.php?id=94236&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94236">
    <a href="/manual/vote-note.php?id=94236&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94236" title="63% like this...">
    3
    </div>
  </div>
  <a href="#94236" class="name">
  <strong class="user"><em>mxrgus</em></strong></a><a class="genanchor" href="#94236"> &para;</a><div class="date" title="2009-10-23 04:22"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94236">
<div class="phpcode"><code><span class="html">In method body:<br /><br />return $pstmt-&gt;fetchAll() or die("bad");<br /><br />will not return correct value, but "1" instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="70480">  <div class="votes">
    <div id="Vu70480">
    <a href="/manual/vote-note.php?id=70480&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70480">
    <a href="/manual/vote-note.php?id=70480&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70480" title="60% like this...">
    3
    </div>
  </div>
  <a href="#70480" class="name">
  <strong class="user"><em>stas at metalinfo dot ru</em></strong></a><a class="genanchor" href="#70480"> &para;</a><div class="date" title="2006-10-18 06:37"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70480">
<div class="phpcode"><code><span class="html">Note, that you can use PDO::FETCH_COLUMN|PDO::FETCH_GROUP pair only while selecting two columns, not like DB_common::getAssoc(), when grouping is set to true.</span></code></div>
  </div>
 </div>
  <div class="note" id="83750">  <div class="votes">
    <div id="Vu83750">
    <a href="/manual/vote-note.php?id=83750&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83750">
    <a href="/manual/vote-note.php?id=83750&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83750" title="56% like this...">
    6
    </div>
  </div>
  <a href="#83750" class="name">
  <strong class="user"><em>harlequin2 at gmx dot de</em></strong></a><a class="genanchor" href="#83750"> &para;</a><div class="date" title="2008-06-10 05:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83750">
<div class="phpcode"><code><span class="html">There is also another fetch mode supported on Oracle and MSSQL: <br />PDO::FETCH_ASSOC<br /><br />&gt; fetches only column names and omits the numeric index.<br /><br />If you would like to return all columns from an sql statement with column keys as table headers, it's as simple as this:<br /><br /><span class="default">&lt;?php<br />$dbh </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="string">"DS"</span><span class="keyword">, </span><span class="string">"USERNAME"</span><span class="keyword">, </span><span class="string">"PASSWORD"</span><span class="keyword">);<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT * FROM tablename"</span><span class="keyword">);<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$arrValues </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC</span><span class="keyword">);<br /></span><span class="comment">// open the table<br /></span><span class="keyword">print </span><span class="string">"&lt;table wdith=\"100%\"&gt;\n"</span><span class="keyword">;<br />print </span><span class="string">"&lt;tr&gt;\n"</span><span class="keyword">;<br /></span><span class="comment">// add the table headers<br /></span><span class="keyword">foreach (</span><span class="default">$arrValues</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$useless</span><span class="keyword">){<br />    print </span><span class="string">"&lt;th&gt;</span><span class="default">$key</span><span class="string">&lt;/th&gt;"</span><span class="keyword">;<br />}<br />print </span><span class="string">"&lt;/tr&gt;"</span><span class="keyword">;<br /></span><span class="comment">// display data<br /></span><span class="keyword">foreach (</span><span class="default">$arrValues </span><span class="keyword">as </span><span class="default">$row</span><span class="keyword">){<br />    print </span><span class="string">"&lt;tr&gt;"</span><span class="keyword">;<br />    foreach (</span><span class="default">$row </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">){<br />        print </span><span class="string">"&lt;td&gt;</span><span class="default">$val</span><span class="string">&lt;/td&gt;"</span><span class="keyword">;<br />    }<br />    print </span><span class="string">"&lt;/tr&gt;\n"</span><span class="keyword">;<br />}<br /></span><span class="comment">// close the table<br /></span><span class="keyword">print </span><span class="string">"&lt;/table&gt;\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116870">  <div class="votes">
    <div id="Vu116870">
    <a href="/manual/vote-note.php?id=116870&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116870">
    <a href="/manual/vote-note.php?id=116870&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116870" title="52% like this...">
    1
    </div>
  </div>
  <a href="#116870" class="name">
  <strong class="user"><em>akira at etnforum dot com</em></strong></a><a class="genanchor" href="#116870"> &para;</a><div class="date" title="2015-03-13 07:41"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116870">
<div class="phpcode"><code><span class="html">There may be some user who needs to upgrade their MySQL class to PDO class. The way of fetching results were changed from while loop into a foreach loop. For the people who wish to fetch the results in a while loop, here is a simple trick.<br /><br /><span class="default">&lt;?php<br /><br />$db </span><span class="keyword">= new </span><span class="default">DB</span><span class="keyword">();<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT * FROM CPUCategory"</span><span class="keyword">);<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />The Output will be:<br />array(2) {<br />    [0]=&gt; array(2) {<br />        ["ccatid"]=&gt; int(1)<br />        ["ccatname"]=&gt; string(5) "Intel"<br />    }<br />    [1]=&gt; array(2) {<br />        ["ccatid"]=&gt; int(2) <br />        ["ccatname"]=&gt; string(3) "AMD"<br />    }<br />}<br /><br />Never look like the output of old function.<br />[ORIGINAL STYLE] mysql_fetch_array($query)<br />[   MYSQL CLASS] $db-&gt;fetch_array($query)<br /><br />And you may give up.<br />But there is a simple way to use while loop to fetch the results.<br /><br /><span class="default">&lt;?php<br /><br />$db </span><span class="keyword">= new </span><span class="default">DB</span><span class="keyword">();<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT * FROM CPUCategory"</span><span class="keyword">);<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">();<br /></span><span class="default">$row </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /></span><span class="comment">// If you need to fetch them now, put it in a while loop just like below:<br />// while($row = array_shift($result)) { ... }<br />    <br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />The Output will be in a single array with while loop returns TRUE:<br />array(2) {<br />    ["ccatid"]=&gt; int(1)<br />    ["ccatname"]=&gt; string(5) "Intel"<br />}<br /><br />So after fetching this row, while loop runs again and fetch the next row until all row has fetched, then the while loop will return false. (Just like the old function did)<br /><br />When you need to upgrade to PDO class, not much code needs to be modified and remember.</span></code></div>
  </div>
 </div>
  <div class="note" id="98359">  <div class="votes">
    <div id="Vu98359">
    <a href="/manual/vote-note.php?id=98359&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98359">
    <a href="/manual/vote-note.php?id=98359&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98359" title="52% like this...">
    1
    </div>
  </div>
  <a href="#98359" class="name">
  <strong class="user"><em>Dennis</em></strong></a><a class="genanchor" href="#98359"> &para;</a><div class="date" title="2010-06-10 08:51"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98359">
<div class="phpcode"><code><span class="html">Error:<br />SQLSTATE[HY000]: General error: 2014 Cannot execute queries while other unbuffered queries are active. Consider using PDOStatement::fetchAll(). Alternatively, if your code is only ever going to run against mysql, you may enable query buffering by setting the PDO::MYSQL_ATTR_USE_BUFFERED_QUERY attribute.<br /><br />If you're using something like:<br /><br />while ($row = $query-&gt;fetchObject()) {<br />    [...]<br />}<br /><br />try using this instead:<br /><br />$rows = $query-&gt;fetchAll(PDO::FETCH_CLASS, 'ArrayObject');<br /><br />foreach ($rows as $row) {<br />    [...]<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="130118">  <div class="votes">
    <div id="Vu130118">
    <a href="/manual/vote-note.php?id=130118&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130118">
    <a href="/manual/vote-note.php?id=130118&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130118" title="no votes...">
    0
    </div>
  </div>
  <a href="#130118" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#130118"> &para;</a><div class="date" title="2025-03-05 03:31"><strong>6 months ago</strong></div>
  <div class="text" id="Hcom130118">
<div class="phpcode"><code><span class="html">It's important to note that PDO::FETCH_CLASS does not behave the way you would intuitively expect. Intuitively, you might expect that it either does not call the constructor at all and sets the properties "magically", or that it simply calls the constructor with the data from the database. Both assumptions are incorrect. It *does* call the constructor, but *not* with data from the database; it uses "magic" to set the properties. This can result in problems.<br /><br />For example, one might intuitively expect code like this to work, perhaps as a starting point for doing Domain-Driven Design without a full-fat ORM. (It doesn't.)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">final class </span><span class="default">Example</span><span class="keyword">{<br />    private static ?</span><span class="default">PDO $pdo</span><span class="keyword">;<br /><br />    private function </span><span class="default">__construct</span><span class="keyword">(<br />        public readonly </span><span class="default">int $id</span><span class="keyword">,<br />        public readonly </span><span class="default">string $val1</span><span class="keyword">,<br />        public readonly ?</span><span class="default">string $val2</span><span class="keyword">,<br />    ){}<br /><br />    public static function </span><span class="default">init</span><span class="keyword">(</span><span class="default">PDO $pdo</span><span class="keyword">){<br />        static::</span><span class="default">$pdo </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">;<br />        static::</span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">(</span><span class="string">"<br />            CREATE TABLE IF NOT EXISTS example (<br />                id INT AUTO_INCREMENT PRIMARY KEY,<br />                val1 TEXT NULL,<br />                val2 TEXT NOT NULL<br />            )<br />        "</span><span class="keyword">);<br />    }<br /><br />    public static function </span><span class="default">create</span><span class="keyword">(</span><span class="default">string $val1</span><span class="keyword">, ?</span><span class="default">string $val2</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">){<br />        if (!isset(static::</span><span class="default">$pdo</span><span class="keyword">)) throw new </span><span class="default">RuntimeException</span><span class="keyword">(</span><span class="string">'Not yet initialized'</span><span class="keyword">);<br />        </span><span class="default">$query </span><span class="keyword">= static::</span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"<br />            INSERT INTO example<br />            (val1, val2)<br />            VALUES<br />            (?, ?)<br />        "</span><span class="keyword">);<br />        </span><span class="default">$query</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">([</span><span class="default">$val1</span><span class="keyword">, </span><span class="default">$val2</span><span class="keyword">]);<br />        return static::</span><span class="default">fetch</span><span class="keyword">(static::</span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">lastInsertId</span><span class="keyword">());<br />    }<br /><br />    public static function </span><span class="default">fetch</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">){<br />        if (!isset(static::</span><span class="default">$pdo</span><span class="keyword">)) throw new </span><span class="default">RuntimeException</span><span class="keyword">(</span><span class="string">'Not yet initialized'</span><span class="keyword">);<br />        </span><span class="default">$query </span><span class="keyword">= static::</span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT * FROM example WHERE id = ?"</span><span class="keyword">);<br />        </span><span class="default">$query</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">([</span><span class="default">$id</span><span class="keyword">]);<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$query</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_CLASS</span><span class="keyword">, </span><span class="string">'Example'</span><span class="keyword">);<br />        if (!empty(</span><span class="default">$result</span><span class="keyword">)) return </span><span class="default">$result</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />For a pattern like this to work, you'll instead need to do one of the following:<br /><br />1. Use PDO::FETCH_FUNC instead of PDO::FETCH_CLASS, and pass it an anonymous function that calls the constructor.<br />2. Have a constructor that does nothing, and use the create() method to set properties directly. This would require removing the readonly modifier (though you could use PHP's new asymmetric visibility instead to achieve a similar effect). This also means that you can no longer actually use the constructor to fully construct an object (which, depending on your needs, may or may not be an acceptable compromise). You'll need a private constructor to avoid having partially-constructed objects floating around.<br />3. Use PDO::FETCH_ASSOC instead of PDO::FETCH_CLASS, then use ReflectionClass::newInstanceWithoutConstructor(), ReflectionObject::getProperty(), and ReflectionProperty::setValue() to implement "magical" class construction yourself.<br />4. Give up and use Doctrine or some other ORM.<br /><br />There is, unfortunately, no solution that doesn't either have some compromise, require writing boilerplate code, or require adding a dependency to your project.</span></code></div>
  </div>
 </div>
  <div class="note" id="126195">  <div class="votes">
    <div id="Vu126195">
    <a href="/manual/vote-note.php?id=126195&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126195">
    <a href="/manual/vote-note.php?id=126195&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126195" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126195" class="name">
  <strong class="user"><em>php at erikthiart dot com</em></strong></a><a class="genanchor" href="#126195"> &para;</a><div class="date" title="2021-06-25 11:21"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126195">
<div class="phpcode"><code><span class="html">I am adding this here as I don’t seem to find any clear and easy to find examples and explanations of PDO::FETCH_GROUP and how it works by means of an example.<br /><br />I find this to be one of the most useful modes available in fetchAll() when you need to work with any form of grouping.<br /><br />In essence, PDO can group results into nested arrays, based on the first field selected.<br /><br />Example<br /><br /><span class="default">&lt;?php<br /><br />$data </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'SELECT sex, name, car FROM users'</span><span class="keyword">)-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_GROUP</span><span class="keyword">);<br /><br /></span><span class="comment">/* array (<br />  'male' =&gt; array ( 0 =&gt; <br />    array (<br />      'name' =&gt; 'John',<br />      'car' =&gt; 'Toyota',<br />    ),<br />    1 =&gt; array (<br />      'name' =&gt; 'Mike',<br />      'car' =&gt; 'Ford',<br />    ),<br />  ),<br />  'female' =&gt; array (<br />    0 =&gt; array (<br />      'name' =&gt; 'Mary',<br />      'car' =&gt; 'Mazda',<br />    ),<br />    1 =&gt; array (<br />      'name' =&gt; 'Kathy',<br />      'car' =&gt; 'Mazda',<br />    ),<br />  ),<br />) */<br /><br /></span><span class="default">?&gt;<br /></span><br />Tip: If you need to group the data by something other than the first field then you can do it like this as well<br /><br /><span class="default">&lt;?php<br />SELECT sex</span><span class="keyword">, </span><span class="default">users</span><span class="keyword">.* </span><span class="default">FROM users<br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124093">  <div class="votes">
    <div id="Vu124093">
    <a href="/manual/vote-note.php?id=124093&amp;page=pdostatement.fetchall&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124093">
    <a href="/manual/vote-note.php?id=124093&amp;page=pdostatement.fetchall&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124093" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124093" class="name">
  <strong class="user"><em>Leonardo Costa linux at linuxmanbr dot com dot br</em></strong></a><a class="genanchor" href="#124093"> &para;</a><div class="date" title="2019-08-05 09:08"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124093">
<div class="phpcode"><code><span class="html">Method with Return object (PHP 7.2)<br /><br />class MySql {<br /><br />public function __construct()<br />        {<br />            parent::__construct();<br />            <br />            try{<br /><br />    <br />                <br />                $options = array<br />                (<br />                    PDO::MYSQL_ATTR_INIT_COMMAND =&gt; "SET NAMES UTF8"<br />                );<br />                <br />                $this-&gt;pdo = new PDO('mysql:host=127.0.0.1;dbname=testuser','dbtest', 'xxxxxxx',$options);<br />                $this-&gt;pdo-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br />                <br />            }catch(PDOException $e) {<br />                print "Error!: " . $e-&gt;getMessage() . "&lt;br/&gt;";<br />                die();<br />            }<br />        }<br />        <br />        public function selectAll(string $sql)<br />        {<br />            $conn = $this-&gt;pdo-&gt;query($sql);<br />            return $conn-&gt;fetchAll(PDO::FETCH_OBJ);<br />        }<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdostatement.fetchall&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.fetchall.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.pdostatement.php">PDOStatement</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="pdostatement.bindcolumn.php" title="bindColumn">bindColumn</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.bindparam.php" title="bindParam">bindParam</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.bindvalue.php" title="bindValue">bindValue</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.closecursor.php" title="closeCursor">closeCursor</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.columncount.php" title="columnCount">columnCount</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.debugdumpparams.php" title="debugDumpParams">debugDumpParams</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.errorcode.php" title="errorCode">errorCode</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.errorinfo.php" title="errorInfo">errorInfo</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.execute.php" title="execute">execute</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.fetch.php" title="fetch">fetch</a>
                        </li>
                                                <li class="current">
                            <a href="pdostatement.fetchall.php" title="fetchAll">fetchAll</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.fetchcolumn.php" title="fetchColumn">fetchColumn</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.fetchobject.php" title="fetchObject">fetchObject</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.getattribute.php" title="getAttribute">getAttribute</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.getcolumnmeta.php" title="getColumnMeta">getColumnMeta</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.getiterator.php" title="getIterator">getIterator</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.nextrowset.php" title="nextRowset">nextRowset</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.rowcount.php" title="rowCount">rowCount</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.setattribute.php" title="setAttribute">setAttribute</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.setfetchmode.php" title="setFetchMode">setFetchMode</a>
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
