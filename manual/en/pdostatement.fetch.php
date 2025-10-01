<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDOStatement::fetch - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdostatement.fetch.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdostatement.fetch.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.fetch.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pdostatement.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdostatement.execute.php">
 <link rel="next" href="https://www.php.net/manual/en/pdostatement.fetchall.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.fetch.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdostatement.fetch.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdostatement.fetch.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdostatement.fetch.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdostatement.fetch.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdostatement.fetch.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdostatement.fetch.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdostatement.fetch.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdostatement.fetch.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdostatement.fetch.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdostatement.fetch.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetches the next row from a result set" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDOStatement::fetch - Manual" />
<meta name="twitter:description" content="Fetches the next row from a result set" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDOStatement::fetch - Manual" />
<meta itemprop="description" content="Fetches the next row from a result set" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetches the next row from a result set" />

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
        <a href="pdostatement.fetchall.php">
          PDOStatement::fetchAll &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdostatement.execute.php">
          &laquo; PDOStatement::execute        </a>
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
            <option value='en/pdostatement.fetch.php' selected="selected">English</option>
            <option value='de/pdostatement.fetch.php'>German</option>
            <option value='es/pdostatement.fetch.php'>Spanish</option>
            <option value='fr/pdostatement.fetch.php'>French</option>
            <option value='it/pdostatement.fetch.php'>Italian</option>
            <option value='ja/pdostatement.fetch.php'>Japanese</option>
            <option value='pt_BR/pdostatement.fetch.php'>Brazilian Portuguese</option>
            <option value='ru/pdostatement.fetch.php'>Russian</option>
            <option value='tr/pdostatement.fetch.php'>Turkish</option>
            <option value='uk/pdostatement.fetch.php'>Ukrainian</option>
            <option value='zh/pdostatement.fetch.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdostatement.fetch" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">PDOStatement::fetch</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PECL pdo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">PDOStatement::fetch</span> &mdash; <span class="dc-title">
   Fetches the next row from a result set
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-pdostatement.fetch-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>PDOStatement::fetch</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = PDO::FETCH_DEFAULT</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$cursorOrientation</code><span class="initializer"> = PDO::FETCH_ORI_NEXT</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$cursorOffset</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>


  <p class="para rdfs-comment">
   Fetches a row from a result set associated with a PDOStatement object. The
   <code class="parameter">mode</code> parameter determines how PDO returns
   the row.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-pdostatement.fetch-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       Controls how the next row will be returned to the caller. This value
       must be one of the <code class="literal">PDO::FETCH_*</code> constants,
       defaulting to value of <code class="literal">PDO::ATTR_DEFAULT_FETCH_MODE</code>
       (which defaults to <code class="literal">PDO::FETCH_BOTH</code>).
       <ul class="itemizedlist">
        <li class="listitem"><p class="para">
         <code class="literal">PDO::FETCH_ASSOC</code>: returns an array indexed by column
         name as returned in your result set
        </p></li>
        <li class="listitem"><p class="para">
         <code class="literal">PDO::FETCH_BOTH</code> (default): returns an array indexed by
         both column name and 0-indexed column number as returned in your
         result set
        </p></li>
        <li class="listitem"><p class="para">
         <code class="literal">PDO::FETCH_BOUND</code>: returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> and assigns the
         values of the columns in your result set to the PHP variables to which
         they were bound with the <span class="methodname"><a href="pdostatement.bindcolumn.php" class="methodname">PDOStatement::bindColumn()</a></span>
         method
        </p></li>
        <li class="listitem"><p class="para">
         <code class="literal">PDO::FETCH_CLASS</code>: returns a new instance of the
         requested class. The object is initialized by mapping the columns of
         the result set to properties in the class. This occurs before the
         constructor is called, allowing properties to be populated regardless
         of their visibility or whether they are marked as <code class="literal">readonly</code>.
         If a property does not exist in the class, the magic <a href="language.oop5.overloading.php#object.set" class="link">__set()</a>
         method will be invoked if it exists; otherwise, a dynamic public
         property will be created. However, when <strong><code><a href="pdo.constants.php#pdo.constants.fetch-props-late">PDO::FETCH_PROPS_LATE</a></code></strong>
         is also given, the constructor is called <em>before</em>
         the properties are populated. If <code class="parameter">mode</code> includes
         <strong><code><a href="pdo.constants.php#pdo.constants.fetch-classtype">PDO::FETCH_CLASSTYPE</a></code></strong> (e.g.
         <code class="literal">PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE</code>), the name
         of the class is determined from the value of the first column.
        </p></li>
        <li class="listitem"><p class="para">
         <code class="literal">PDO::FETCH_INTO</code>: updates an existing instance
         of the requested class, mapping the columns of the result set to
         named properties in the class
        </p></li>
        <li class="listitem"><p class="para">
         <code class="literal">PDO::FETCH_LAZY</code>: combines
         <code class="literal">PDO::FETCH_BOTH</code> and <code class="literal">PDO::FETCH_OBJ</code>,
         and is returning a <span class="classname"><a href="class.pdorow.php" class="classname">PDORow</a></span> object
         which is creating the object property names as they are accessed.
        </p></li>
        <li class="listitem"><p class="para">
         <code class="literal">PDO::FETCH_NAMED</code>: returns an array with the same
         form as <code class="literal">PDO::FETCH_ASSOC</code>, except that if there are
         multiple columns with the same name, the value referred to by that
         key will be an array of all the values in the row that had that
         column name
        </p></li>
        <li class="listitem"><p class="para">
         <code class="literal">PDO::FETCH_NUM</code>: returns an array indexed by column
         number as returned in your result set, starting at column 0
        </p></li>
        <li class="listitem"><p class="para">
         <code class="literal">PDO::FETCH_OBJ</code>: returns an anonymous object with
         property names that correspond to the column names returned in your
         result set
        </p></li>
        <li class="listitem"><p class="para">
         <code class="literal">PDO::FETCH_PROPS_LATE</code>: when used with
         <code class="literal">PDO::FETCH_CLASS</code>, the constructor of the class is
         called before the properties are assigned from the respective column
         values.
        </p></li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">cursorOrientation</code></dt>
     <dd>
      <p class="para">
       For a PDOStatement object representing a scrollable cursor, this
       value determines which row will be returned to the caller. This value
       must be one of the <code class="literal">PDO::FETCH_ORI_*</code> constants,
       defaulting to <code class="literal">PDO::FETCH_ORI_NEXT</code>. To request a
       scrollable cursor for your PDOStatement object, you must set the
       <code class="literal">PDO::ATTR_CURSOR</code> attribute to
       <code class="literal">PDO::CURSOR_SCROLL</code> when you prepare the SQL
       statement with <span class="methodname"><a href="pdo.prepare.php" class="methodname">PDO::prepare()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">cursorOffset</code></dt>
     <dd>
      <p class="para">
       For a PDOStatement object representing a scrollable cursor for which
       the <code class="parameter">cursorOrientation</code> parameter is set to
       <code class="literal">PDO::FETCH_ORI_ABS</code>, this value specifies the
       absolute number of the row in the result set that shall be fetched.
      </p>
      <p class="para">
       For a PDOStatement object representing a scrollable cursor for which
       the <code class="parameter">cursorOrientation</code> parameter is set to
       <code class="literal">PDO::FETCH_ORI_REL</code>, this value specifies the
       row to fetch relative to the cursor position before
       <span class="methodname"><strong>PDOStatement::fetch()</strong></span> was called.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-pdostatement.fetch-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The return value of this function on success depends on the fetch type. In
   all cases, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned on failure or if there are no more rows.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-pdostatement.fetch-errors">
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


 <div class="refsect1 examples" id="refsect1-pdostatement.fetch-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1164"><p><strong>Example #1 Fetching rows using different fetch styles</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT name, colour FROM fruit"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Exercise PDOStatement::fetch styles */<br /></span><span style="color: #007700">print </span><span style="color: #DD0000">"PDO::FETCH_ASSOC: "</span><span style="color: #007700">;<br />print </span><span style="color: #DD0000">"Return next row as an array indexed by column name\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_ASSOC</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />print </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />print </span><span style="color: #DD0000">"PDO::FETCH_BOTH: "</span><span style="color: #007700">;<br />print </span><span style="color: #DD0000">"Return next row as an array indexed by both column name and number\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_BOTH</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />print </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />print </span><span style="color: #DD0000">"PDO::FETCH_LAZY: "</span><span style="color: #007700">;<br />print </span><span style="color: #DD0000">"Return next row as a PDORow object with column names as properties\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_LAZY</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />print </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />print </span><span style="color: #DD0000">"PDO::FETCH_OBJ: "</span><span style="color: #007700">;<br />print </span><span style="color: #DD0000">"Return next row as an anonymous object with column names as properties\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_OBJ</span><span style="color: #007700">);<br />print </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />print </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">PDO::FETCH_ASSOC: Return next row as an array indexed by column name
Array
(
    [name] =&gt; apple
    [colour] =&gt; red
)

PDO::FETCH_BOTH: Return next row as an array indexed by both column name and number
Array
(
    [name] =&gt; banana
    [0] =&gt; banana
    [colour] =&gt; yellow
    [1] =&gt; yellow
)

PDO::FETCH_LAZY: Return next row as a PDORow object with column names as properties
PDORow Object
(
    [name] =&gt; orange
    [colour] =&gt; orange
)

PDO::FETCH_OBJ: Return next row as an anonymous object with column names as properties
kiwi</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-1165"><p><strong>Example #2 Fetching rows with a scrollable cursor</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">readDataForwards</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbh</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT hand, won, bet FROM mynumbers ORDER BY BET'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">, array(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_CURSOR </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">CURSOR_SCROLL</span><span style="color: #007700">));<br />    </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />    while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_NUM</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_ORI_NEXT</span><span style="color: #007700">)) {<br />        </span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\t" </span><span style="color: #007700">. </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\t" </span><span style="color: #007700">. </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />        print </span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br />    }<br />}<br />function </span><span style="color: #0000BB">readDataBackwards</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbh</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT hand, won, bet FROM mynumbers ORDER BY bet'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">, array(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_CURSOR </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">CURSOR_SCROLL</span><span style="color: #007700">));<br />    </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />    </span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_NUM</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_ORI_LAST</span><span style="color: #007700">);<br />    do {<br />        </span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\t" </span><span style="color: #007700">. </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\t" </span><span style="color: #007700">. </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />        print </span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br />    } while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_NUM</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_ORI_PRIOR</span><span style="color: #007700">));<br />}<br /><br />print </span><span style="color: #DD0000">"Reading forwards:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">readDataForwards</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /><br />print </span><span style="color: #DD0000">"Reading backwards:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">readDataBackwards</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Reading forwards:
21    10    5
16    0     5
19    20    10

Reading backwards:
19    20    10
16    0     5
21    10    5</pre>
</div>
    </div>
   </div>

   <div class="example" id="example-1166"><p><strong>Example #3 Construction order</strong></p>
    <div class="example-contents"><p>
     When objects are fetched via <strong><code><a href="pdo.constants.php#pdo.constants.fetch-class">PDO::FETCH_CLASS</a></code></strong>, the object
     properties are assigned first, and then the constructor of the class is
     invoked. However, when <strong><code><a href="pdo.constants.php#pdo.constants.fetch-props-late">PDO::FETCH_PROPS_LATE</a></code></strong> is also given,
     this order is reversed, i.e. first the constructor is called, and
     afterwards the properties are assigned.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Person<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">()<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tell</span><span style="color: #007700">();<br />    }<br /><br />    public function </span><span style="color: #0000BB">tell</span><span style="color: #007700">()<br />    {<br />        if (isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">)) {<br />            echo </span><span style="color: #DD0000">"I am </span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">}</span><span style="color: #DD0000">.\n"</span><span style="color: #007700">;<br />        } else {<br />            echo </span><span style="color: #DD0000">"I don't have a name yet.\n"</span><span style="color: #007700">;<br />        }<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT * FROM people"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFetchMode</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_CLASS</span><span style="color: #007700">, </span><span style="color: #DD0000">'Person'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$person </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$person</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tell</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFetchMode</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_CLASS</span><span style="color: #007700">|</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_PROPS_LATE</span><span style="color: #007700">, </span><span style="color: #DD0000">'Person'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$person </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$person</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tell</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">I am Alice.
I am Alice.
I don&#039;t have a name yet.
I am Bob.</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-pdostatement.fetch-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="pdo.prepare.php" class="methodname" rel="rdfs-seeAlso">PDO::prepare()</a> - Prepares a statement for execution and returns a statement object</span></li>
    <li><span class="methodname"><a href="pdostatement.execute.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::execute()</a> - Executes a prepared statement</span></li>
    <li><span class="methodname"><a href="pdostatement.fetchall.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::fetchAll()</a> - Fetches the remaining rows from a result set</span></li>
    <li><span class="methodname"><a href="pdostatement.fetchcolumn.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::fetchColumn()</a> - Returns a single column from the next row of a result set</span></li>
    <li><span class="methodname"><a href="pdostatement.fetchobject.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::fetchObject()</a> - Fetches the next row and returns it as an object</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdostatement/fetch.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdostatement.fetch%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdostatement.fetch&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.fetch.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="62536">  <div class="votes">
    <div id="Vu62536">
    <a href="/manual/vote-note.php?id=62536&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62536">
    <a href="/manual/vote-note.php?id=62536&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62536" title="79% like this...">
    89
    </div>
  </div>
  <a href="#62536" class="name">
  <strong class="user"><em>terry at bitsoup dot com</em></strong></a><a class="genanchor" href="#62536"> &para;</a><div class="date" title="2006-03-02 12:46"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62536">
<div class="phpcode"><code><span class="html">WARNING:<br />fetch() does NOT adhere to SQL-92 SQLSTATE standard when dealing with empty datasets.<br /><br />Instead of setting the errorcode class to 20 to indicate "no data found", it returns a class of 00 indicating success, and returns NULL to the caller.<br /><br />This also prevents the exception mechainsm from firing.<br /><br />Programmers will need to explicitly code tests for empty resultsets after any fetch*() instead of relying on the default behavior of the RDBMS.<br /><br />I tried logging this as a bug, but it was dismissed as "working as intended". Just a head's up.</span></code></div>
  </div>
 </div>
  <div class="note" id="113844">  <div class="votes">
    <div id="Vu113844">
    <a href="/manual/vote-note.php?id=113844&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113844">
    <a href="/manual/vote-note.php?id=113844&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113844" title="77% like this...">
    78
    </div>
  </div>
  <a href="#113844" class="name">
  <strong class="user"><em>yarco dot wang at gmail dot com</em></strong></a><a class="genanchor" href="#113844"> &para;</a><div class="date" title="2013-12-07 11:30"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113844">
<div class="phpcode"><code><span class="html">If no record, this function will also return false.<br />I think that is not very good...</span></code></div>
  </div>
 </div>
  <div class="note" id="105277">  <div class="votes">
    <div id="Vu105277">
    <a href="/manual/vote-note.php?id=105277&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105277">
    <a href="/manual/vote-note.php?id=105277&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105277" title="76% like this...">
    37
    </div>
  </div>
  <a href="#105277" class="name">
  <strong class="user"><em>henry at henrysmith dot org</em></strong></a><a class="genanchor" href="#105277"> &para;</a><div class="date" title="2011-08-06 09:24"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105277">
<div class="phpcode"><code><span class="html">Someone's already pointed out that PDO::CURSOR_SCROLL isn't supported by the SQLite driver. It's also worth noting that it's not supported by the MySQL driver either.<br /><br />In fact, if you try to use scrollable cursors with a MySQL statement, the PDO::FETCH_ORI_ABS parameter and the offset given to fetch() will be silently ignored. fetch() will behave as normal, returning rows in the order in which they came out of the database.<br /><br />It's actually pretty confusing behaviour at first. Definitely worth documenting even if only as a user-added note on this page.</span></code></div>
  </div>
 </div>
  <div class="note" id="111362">  <div class="votes">
    <div id="Vu111362">
    <a href="/manual/vote-note.php?id=111362&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111362">
    <a href="/manual/vote-note.php?id=111362&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111362" title="66% like this...">
    26
    </div>
  </div>
  <a href="#111362" class="name">
  <strong class="user"><em>gergo at gergoerdosi dot com</em></strong></a><a class="genanchor" href="#111362"> &para;</a><div class="date" title="2013-02-11 04:07"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111362">
<div class="phpcode"><code><span class="html">When using PDO::FETCH_COLUMN in a while loop, it's not enough to just use the value in the while statement as many examples show:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">while (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_COLUMN</span><span class="keyword">)) {<br />    print </span><span class="default">$row</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />If there are 5 rows with values 1 2 0 4 5, then the while loop above will stop at the third row printing only 1 2. The solution is to either explicitly test for false:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">while ((</span><span class="default">$row </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_COLUMN</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />    print </span><span class="default">$row</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Or use foreach with fetchAll():<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (</span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_COLUMN</span><span class="keyword">) as </span><span class="default">$row</span><span class="keyword">) {<br />    print </span><span class="default">$row</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Both will correctly print 1 2 0 4 5.</span></code></div>
  </div>
 </div>
  <div class="note" id="84495">  <div class="votes">
    <div id="Vu84495">
    <a href="/manual/vote-note.php?id=84495&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84495">
    <a href="/manual/vote-note.php?id=84495&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84495" title="63% like this...">
    19
    </div>
  </div>
  <a href="#84495" class="name">
  <strong class="user"><em>lod</em></strong></a><a class="genanchor" href="#84495"> &para;</a><div class="date" title="2008-07-16 09:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84495">
<div class="phpcode"><code><span class="html">A quick one liner to get the first entry returned.  This is nice for very basic queries.<br /><br /><span class="default">&lt;?php<br />$count </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"select count(*) from table"</span><span class="keyword">)-&gt;</span><span class="default">fetch</span><span class="keyword">());<br /></span><span class="default">?&gt;</span>php</span></code></div>
  </div>
 </div>
  <div class="note" id="101081">  <div class="votes">
    <div id="Vu101081">
    <a href="/manual/vote-note.php?id=101081&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101081">
    <a href="/manual/vote-note.php?id=101081&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101081" title="64% like this...">
    12
    </div>
  </div>
  <a href="#101081" class="name">
  <strong class="user"><em>public at grik dot net</em></strong></a><a class="genanchor" href="#101081"> &para;</a><div class="date" title="2010-11-24 03:10"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101081">
<div class="phpcode"><code><span class="html">When fetching an object, the constructor of the class is called after the fields are populated by default.
<br />
<br />PDO::FETCH_PROPS_LATE is used to change the behaviour and make it work as expected - constructor be called _before_ the object fields will be populated with the data.
<br />
<br />sample:
<br />
<br /><span class="default">&lt;?php
<br />$a </span><span class="keyword">= </span><span class="default">$PDO</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'select id from table'</span><span class="keyword">);
<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">setFetchMode</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_CLASS</span><span class="keyword">|</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_PROPS_LATE</span><span class="keyword">, </span><span class="string">'ClassName'</span><span class="keyword">);
<br /></span><span class="default">$obj </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br /><a href="http://bugs.php.net/bug.php?id=53394" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=53394</a></span></code></div>
  </div>
 </div>
  <div class="note" id="95991">  <div class="votes">
    <div id="Vu95991">
    <a href="/manual/vote-note.php?id=95991&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95991">
    <a href="/manual/vote-note.php?id=95991&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95991" title="62% like this...">
    8
    </div>
  </div>
  <a href="#95991" class="name">
  <strong class="user"><em>Typer85 at gmail dot com</em></strong></a><a class="genanchor" href="#95991"> &para;</a><div class="date" title="2010-02-01 03:03"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95991">
<div class="phpcode"><code><span class="html">Here is quick note for developers that use the PDO SQLite Driver:<br /><br />The PDO SQLite driver does not support cursors, so using the PDO::CURSOR_SCROLL Attribute, will not work when using the PDO SQLite driver. For example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Assuming $Handle Is a PDO Handle.<br /></span><span class="default">$Statement </span><span class="keyword">= </span><span class="default">$Handle</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">( </span><span class="default">$sqlStatement </span><span class="keyword">, array( </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">ATTR_CURSOR </span><span class="keyword">=&gt; </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">CURSOR_SCROLL </span><span class="keyword">) );<br /><br /></span><span class="default">?&gt;<br /></span><br />What is even worse is that PDO::prepare will NOT throw an Exception when it fails to prepare the query, even when the error mode is set to throw Exceptions, and will instead return a Boolean False!<br /><br />Not only do I consider this a poor design choice, but also its a real shame that this is not documented anywhere in the manual -- in fact the manual is not clear on what Attributes are supported by which drivers and which are not so developers are left to play a classic game of guess.<br /><br />I hope this saves some developers some headaches.<br /><br />Good Luck,</span></code></div>
  </div>
 </div>
  <div class="note" id="124798">  <div class="votes">
    <div id="Vu124798">
    <a href="/manual/vote-note.php?id=124798&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124798">
    <a href="/manual/vote-note.php?id=124798&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124798" title="62% like this...">
    2
    </div>
  </div>
  <a href="#124798" class="name">
  <strong class="user"><em>paulf at quillandmouse dot com</em></strong></a><a class="genanchor" href="#124798"> &para;</a><div class="date" title="2020-03-05 02:12"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124798">
<div class="phpcode"><code><span class="html">A prior poster indicated that this function returns a NULL when there are no results. This is not true. This function returns an empty array. fetchAll() returns the same.<br /><br />Also, the documentation specifies what happens on "failure", but doesn't indicate what constitutes a "failure". A "failure" could be where the function returns no results; that is, the query "failed". However, a "failure" is apparently a situation where the PDO error functions would reveal a "failure", as in illegal SQL syntax, or a query on a table which doesn't exist, etc. An empty result is not a "failure". Maybe that's obvious to everyone else, but it wasn't to me.</span></code></div>
  </div>
 </div>
  <div class="note" id="78794">  <div class="votes">
    <div id="Vu78794">
    <a href="/manual/vote-note.php?id=78794&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78794">
    <a href="/manual/vote-note.php?id=78794&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78794" title="60% like this...">
    10
    </div>
  </div>
  <a href="#78794" class="name">
  <strong class="user"><em>Gerard van Beek</em></strong></a><a class="genanchor" href="#78794"> &para;</a><div class="date" title="2007-10-28 01:42"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78794">
<div class="phpcode"><code><span class="html">If you to use a new instance of a class for a record you can use:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">include_once(</span><span class="string">"user.class"</span><span class="keyword">);<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT * FROM user WHERE id = 1"</span><span class="keyword">);<br /><br /></span><span class="comment">/* create instance automatically */<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">setFetchMode</span><span class="keyword">( </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_CLASS</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$user </span><span class="keyword">= </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">( </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_CLASS </span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">closeCursor</span><span class="keyword">();<br />print (</span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">);<br /><br /></span><span class="comment">/* or create an instance yourself and use it */<br /></span><span class="default">$user</span><span class="keyword">= new </span><span class="default">user</span><span class="keyword">();<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">setFetchMode</span><span class="keyword">( </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_INTO</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$user</span><span class="keyword">= </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">( </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_INTO </span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">closeCursor</span><span class="keyword">();<br />print (</span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114458">  <div class="votes">
    <div id="Vu114458">
    <a href="/manual/vote-note.php?id=114458&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114458">
    <a href="/manual/vote-note.php?id=114458&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114458" title="57% like this...">
    3
    </div>
  </div>
  <a href="#114458" class="name">
  <strong class="user"><em>lenz_kappov at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#114458"> &para;</a><div class="date" title="2014-02-23 10:30"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114458">
<div class="phpcode"><code><span class="html">Because MySQL does not currently support the use of cursors, the $cursor_offset feature cannot work when using PDO to access a MySQL database.<br /><br />If you are tring to arbitrarily access a specific record or group of records in a MySQL database recordset, you might want to consider using the LIMIT clause of the SELECT statement to achieve this e.g. LIMIT 5,3 to return just the 6th,7th &amp; 8th records - 3 records starting at index 5 (which is the 6th record).</span></code></div>
  </div>
 </div>
  <div class="note" id="59056">  <div class="votes">
    <div id="Vu59056">
    <a href="/manual/vote-note.php?id=59056&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59056">
    <a href="/manual/vote-note.php?id=59056&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59056" title="57% like this...">
    4
    </div>
  </div>
  <a href="#59056" class="name">
  <strong class="user"><em>fh at ez dot no</em></strong></a><a class="genanchor" href="#59056"> &para;</a><div class="date" title="2005-11-24 11:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59056">
<div class="phpcode"><code><span class="html">If you want to use PDO::FETCH_CLASS you need to set it up with setFetchMode first like so:<br />        $stmt-&gt;setFetchMode( PDO::FETCH_CLASS, 'classType', array( 'parameters to constructor' );<br />        $object = $stmt-&gt;fetch( PDO::FETCH_CLASS );<br />If you ommit this PHP will segfault.</span></code></div>
  </div>
 </div>
  <div class="note" id="59057">  <div class="votes">
    <div id="Vu59057">
    <a href="/manual/vote-note.php?id=59057&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59057">
    <a href="/manual/vote-note.php?id=59057&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59057" title="57% like this...">
    3
    </div>
  </div>
  <a href="#59057" class="name">
  <strong class="user"><em>fh at ez dot no</em></strong></a><a class="genanchor" href="#59057"> &para;</a><div class="date" title="2005-11-25 12:13"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59057">
<div class="phpcode"><code><span class="html">I can also add that the constructor is run _after_ the data is set on the object if yo use PDO::FETCH_CLASS.</span></code></div>
  </div>
 </div>
  <div class="note" id="119145">  <div class="votes">
    <div id="Vu119145">
    <a href="/manual/vote-note.php?id=119145&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119145">
    <a href="/manual/vote-note.php?id=119145&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119145" title="53% like this...">
    1
    </div>
  </div>
  <a href="#119145" class="name">
  <strong class="user"><em>Black Knight</em></strong></a><a class="genanchor" href="#119145"> &para;</a><div class="date" title="2016-04-11 02:16"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119145">
<div class="phpcode"><code><span class="html">this is just On reminder note about Second parameter -cursor_oriantation-<br /><br />PDO::FETCH_ORI_NEXT :-<br />Fetch the next row in the result set. Valid only for scrollable cursors.<br /><br />PDO::FETCH_ORI_PRIOR :-<br />Fetch the previous row in the result set. Valid only for scrollable cursors.<br /><br />PDO::FETCH_ORI_FIRST :-<br />Fetch the first row in the result set. Valid only for scrollable cursors.<br /><br />PDO::FETCH_ORI_LAST :-<br />Fetch the last row in the result set. Valid only for scrollable cursors.<br /><br />PDO::FETCH_ORI_ABS :-<br />Fetch the requested row by row number from the result set. Valid only for scrollable cursors.<br /><br />PDO::FETCH_ORI_REL :- <br />Fetch the requested row by relative position from the current position of the cursor in the result set. Valid only for scrollable cursors.</span></code></div>
  </div>
 </div>
  <div class="note" id="124641">  <div class="votes">
    <div id="Vu124641">
    <a href="/manual/vote-note.php?id=124641&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124641">
    <a href="/manual/vote-note.php?id=124641&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124641" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124641" class="name">
  <strong class="user"><em>Drew</em></strong></a><a class="genanchor" href="#124641"> &para;</a><div class="date" title="2020-01-23 02:42"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124641">
<div class="phpcode"><code><span class="html">When using a PDOStatement with the fetch mode set to FETCH_CLASS, fetch will return false if no rows were found.</span></code></div>
  </div>
 </div>
  <div class="note" id="74262">  <div class="votes">
    <div id="Vu74262">
    <a href="/manual/vote-note.php?id=74262&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74262">
    <a href="/manual/vote-note.php?id=74262&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74262" title="51% like this...">
    1
    </div>
  </div>
  <a href="#74262" class="name">
  <strong class="user"><em>marcini</em></strong></a><a class="genanchor" href="#74262"> &para;</a><div class="date" title="2007-04-02 04:41"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74262">
<div class="phpcode"><code><span class="html">Be careful with fetch() when you use prepared statements and MySQL (I don`t know how it is with other databases). Fetch won`t close cursor and won`t let you send any other query, even if your result set has only one row, . <br />If you use $statement-&gt;fetch(), you will also have to use $statement-&gt;closeCursor() afterwards, to be albe to execute another query.<br />Alternatively you can use $statement-&gt;fetchAll() without $statement-&gt;closeCursor().</span></code></div>
  </div>
 </div>
  <div class="note" id="105682">  <div class="votes">
    <div id="Vu105682">
    <a href="/manual/vote-note.php?id=105682&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105682">
    <a href="/manual/vote-note.php?id=105682&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105682" title="48% like this...">
    -2
    </div>
  </div>
  <a href="#105682" class="name">
  <strong class="user"><em>Alex</em></strong></a><a class="genanchor" href="#105682"> &para;</a><div class="date" title="2011-09-07 02:32"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105682">
<div class="phpcode"><code><span class="html">It seems that if you do a $statement-&gt;query() with an INSERT statement and after that a $statement-&gt;fetch() you will get an exception saying: SQLSTATE[HY000]: General error.</span></code></div>
  </div>
 </div>
  <div class="note" id="84321">  <div class="votes">
    <div id="Vu84321">
    <a href="/manual/vote-note.php?id=84321&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84321">
    <a href="/manual/vote-note.php?id=84321&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84321" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#84321" class="name">
  <strong class="user"><em>lozitskiys at gmail dot com</em></strong></a><a class="genanchor" href="#84321"> &para;</a><div class="date" title="2008-07-09 05:21"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84321">
<div class="phpcode"><code><span class="html">I spent some hours trying to find out how to manipulate with BLOB fields using PDO.<br /><br />Remember that you can't retreive BLOB data using something like this :<br /><br /><span class="default">&lt;?php<br />$sql </span><span class="keyword">= </span><span class="string">'SELECT * FROM sometable LIMIT 1'</span><span class="keyword">;<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC</span><span class="keyword">);<br /></span><span class="default">$row </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">();<br /><br /></span><span class="default">$myFile </span><span class="keyword">= </span><span class="default">$row</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span><br />Instead of this you should try following approach:<br /><br /><span class="default">&lt;?php<br />$sql </span><span class="keyword">= </span><span class="string">"SELECT mime, file FROM sometable LIMIT 1"</span><span class="keyword">; <br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">); <br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(); <br /><br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindColumn</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$mime</span><span class="keyword">,); <br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindColumn</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_LOB</span><span class="keyword">); <br /><br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">(); <br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: '</span><span class="keyword">.</span><span class="default">$mime</span><span class="keyword">);<br />print </span><span class="default">$file</span><span class="keyword">; <br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109304">  <div class="votes">
    <div id="Vu109304">
    <a href="/manual/vote-note.php?id=109304&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109304">
    <a href="/manual/vote-note.php?id=109304&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109304" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#109304" class="name">
  <strong class="user"><em>sumariva at gmail dot com</em></strong></a><a class="genanchor" href="#109304"> &para;</a><div class="date" title="2012-07-04 04:17"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109304">
<div class="phpcode"><code><span class="html">I could use PDO::FETCH_COLUMN to retrieve the first column from result.<br />$ps-&gt;fetch( PDO::FETCH_COLUMN );<br />Worked on Postgresql with PHP 5.3.10.</span></code></div>
  </div>
 </div>
  <div class="note" id="58021">  <div class="votes">
    <div id="Vu58021">
    <a href="/manual/vote-note.php?id=58021&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58021">
    <a href="/manual/vote-note.php?id=58021&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58021" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#58021" class="name">
  <strong class="user"><em>aledmb at gmail dot com</em></strong></a><a class="genanchor" href="#58021"> &para;</a><div class="date" title="2005-10-21 10:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58021">
<div class="phpcode"><code><span class="html">note that fetch constants are not included in the PDO class for PHP versions prior to 5.1</span></code></div>
  </div>
 </div>
  <div class="note" id="82846">  <div class="votes">
    <div id="Vu82846">
    <a href="/manual/vote-note.php?id=82846&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82846">
    <a href="/manual/vote-note.php?id=82846&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82846" title="42% like this...">
    -4
    </div>
  </div>
  <a href="#82846" class="name">
  <strong class="user"><em>josh</em></strong></a><a class="genanchor" href="#82846"> &para;</a><div class="date" title="2008-04-29 12:02"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82846">
<div class="phpcode"><code><span class="html">Note that PDO::ATTR_STRINGIFY_FETCHES will NOT work for the MySQL driver. MySQL will always return strings because that is the behaviour of the core mysql PHP extension. See <a href="http://bugs.php.net/bug.php?id=44341" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=44341</a></span></code></div>
  </div>
 </div>
  <div class="note" id="115769">  <div class="votes">
    <div id="Vu115769">
    <a href="/manual/vote-note.php?id=115769&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115769">
    <a href="/manual/vote-note.php?id=115769&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115769" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#115769" class="name">
  <strong class="user"><em>tastro</em></strong></a><a class="genanchor" href="#115769"> &para;</a><div class="date" title="2014-09-19 12:41"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115769">
<div class="phpcode"><code><span class="html">Note that this way, the "fetch mode" will get "overwritten", and PDO::FETCH_PROPS_LATE won't be applied:<br /><br /><span class="default">&lt;?php<br />$sth </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT * FROM user WHERE id = 1"</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">setFetchMode</span><span class="keyword">( </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_CLASS</span><span class="keyword">|</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_PROPS_LATE</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$user </span><span class="keyword">= </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">( </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_CLASS </span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">closeCursor</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Instead, you should leave the parameter area for the fetch() method empty, like this (if you want to set the fetch mode with the setFetchMode() method):<br /><br /><span class="default">&lt;?php<br />$sth </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT * FROM user WHERE id = 1"</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">setFetchMode</span><span class="keyword">( </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_CLASS</span><span class="keyword">|</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_PROPS_LATE</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$user </span><span class="keyword">= </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">();<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">closeCursor</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119093">  <div class="votes">
    <div id="Vu119093">
    <a href="/manual/vote-note.php?id=119093&amp;page=pdostatement.fetch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119093">
    <a href="/manual/vote-note.php?id=119093&amp;page=pdostatement.fetch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119093" title="37% like this...">
    -4
    </div>
  </div>
  <a href="#119093" class="name">
  <strong class="user"><em>tim at kooky dot org</em></strong></a><a class="genanchor" href="#119093"> &para;</a><div class="date" title="2016-03-31 12:21"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119093">
<div class="phpcode"><code><span class="html">Be careful when using PDO::FETCH_LAZY.  It adds an additional field called queryString.  I'm not sure if this a bug or not. I'm using version 5.6.17 in Debian Jessie.<br /><br />Query:  'select 1,2,3'<br /><br />$row=$smt-&gt;fetch(PDO::FETCH_OBJ);<br />var_dump($row);<br /><br />object(stdClass)#6 (3) {<br />  ["1"]=&gt;<br />  string(1) "1"<br />  ["2"]=&gt;<br />  string(1) "2"<br />  ["3"]=&gt;<br />  string(1) "3"<br />}<br /><br />$row=$smt-&gt;fetch(PDO::FETCH_LAZY);<br />var_dump($row);<br /><br />object(PDORow)#3 (4) {<br />  ["queryString"]=&gt;<br />  string(12) "select 1,2,3"<br />  ["1"]=&gt;<br />  string(1) "1"<br />  ["2"]=&gt;<br />  string(1) "2"<br />  ["3"]=&gt;<br />  string(1) "3"<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdostatement.fetch&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.fetch.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="pdostatement.fetch.php" title="fetch">fetch</a>
                        </li>
                                                <li class="">
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
