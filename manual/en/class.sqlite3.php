<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SQLite3 - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.sqlite3.php">
 <link rel="shorturl" href="https://www.php.net/sqlite3">
 <link rel="alternate" href="https://www.php.net/sqlite3" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.sqlite3.php">
 <link rel="prev" href="https://www.php.net/manual/en/sqlite3.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/sqlite3.backup.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.sqlite3.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.sqlite3.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.sqlite3.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.sqlite3.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.sqlite3.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.sqlite3.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.sqlite3.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.sqlite3.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.sqlite3.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.sqlite3.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.sqlite3.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SQLite3 class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SQLite3 - Manual" />
<meta name="twitter:description" content="The SQLite3 class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SQLite3 - Manual" />
<meta itemprop="description" content="The SQLite3 class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SQLite3 class" />

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
        <a href="sqlite3.backup.php">
          SQLite3::backup &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="sqlite3.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.sqlite3.php'>SQLite3</a></li>      </ul>
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
            <option value='en/class.sqlite3.php' selected="selected">English</option>
            <option value='de/class.sqlite3.php'>German</option>
            <option value='es/class.sqlite3.php'>Spanish</option>
            <option value='fr/class.sqlite3.php'>French</option>
            <option value='it/class.sqlite3.php'>Italian</option>
            <option value='ja/class.sqlite3.php'>Japanese</option>
            <option value='pt_BR/class.sqlite3.php'>Brazilian Portuguese</option>
            <option value='ru/class.sqlite3.php'>Russian</option>
            <option value='tr/class.sqlite3.php'>Turkish</option>
            <option value='uk/class.sqlite3.php'>Ukrainian</option>
            <option value='zh/class.sqlite3.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.sqlite3" class="reference">
 <h1 class="title">The SQLite3 class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>


  <div class="section" id="sqlite3.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    A class that interfaces SQLite 3 databases.
   </p>
  </div>


  <div class="section" id="sqlite3.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">SQLite3</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.ok"><var class="varname">OK</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.deny"><var class="varname">DENY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.ignore"><var class="varname">IGNORE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.create-index"><var class="varname">CREATE_INDEX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.create-table"><var class="varname">CREATE_TABLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.create-temp-index"><var class="varname">CREATE_TEMP_INDEX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.create-temp-table"><var class="varname">CREATE_TEMP_TABLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.create-temp-trigger"><var class="varname">CREATE_TEMP_TRIGGER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.create-temp-view"><var class="varname">CREATE_TEMP_VIEW</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.create-trigger"><var class="varname">CREATE_TRIGGER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.create-view"><var class="varname">CREATE_VIEW</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.delete"><var class="varname">DELETE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.drop-index"><var class="varname">DROP_INDEX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.drop-table"><var class="varname">DROP_TABLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.drop-temp-index"><var class="varname">DROP_TEMP_INDEX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.drop-temp-table"><var class="varname">DROP_TEMP_TABLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.drop-temp-trigger"><var class="varname">DROP_TEMP_TRIGGER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.drop-temp-view"><var class="varname">DROP_TEMP_VIEW</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.drop-trigger"><var class="varname">DROP_TRIGGER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.drop-view"><var class="varname">DROP_VIEW</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.insert"><var class="varname">INSERT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.pragma"><var class="varname">PRAGMA</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.read"><var class="varname">READ</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.select"><var class="varname">SELECT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.transaction"><var class="varname">TRANSACTION</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.update"><var class="varname">UPDATE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.attach"><var class="varname">ATTACH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.detach"><var class="varname">DETACH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.alter-table"><var class="varname">ALTER_TABLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.reindex"><var class="varname">REINDEX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.analyze"><var class="varname">ANALYZE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.create-vtable"><var class="varname">CREATE_VTABLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.drop-vtable"><var class="varname">DROP_VTABLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.function"><var class="varname">FUNCTION</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.savepoint"><var class="varname">SAVEPOINT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.copy"><var class="varname">COPY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.sqlite3.php#sqlite3.constants.recursive"><var class="varname">RECURSIVE</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="sqlite3.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$encryptionKey</code><span class="initializer"> = &quot;&quot;</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.backup.php" class="methodname">backup</a></span>(<span class="methodparam"><span class="type"><a href="class.sqlite3.php" class="type SQLite3">SQLite3</a></span> <code class="parameter">$destination</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$sourceDatabase</code><span class="initializer"> = &quot;main&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$destinationDatabase</code><span class="initializer"> = &quot;main&quot;</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.busytimeout.php" class="methodname">busyTimeout</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$milliseconds</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.changes.php" class="methodname">changes</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.close.php" class="methodname">close</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.createaggregate.php" class="methodname">createAggregate</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$stepCallback</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$finalCallback</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$argCount</code><span class="initializer"> = -1</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.createcollation.php" class="methodname">createCollation</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.createfunction.php" class="methodname">createFunction</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$argCount</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.enableexceptions.php" class="methodname">enableExceptions</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$enable</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="sqlite3.escapestring.php" class="methodname">escapeString</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.exec.php" class="methodname">exec</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.lasterrorcode.php" class="methodname">lastErrorCode</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.lasterrormsg.php" class="methodname">lastErrorMsg</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.lastinsertrowid.php" class="methodname">lastInsertRowID</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.loadextension.php" class="methodname">loadExtension</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.open.php" class="methodname">open</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$encryptionKey</code><span class="initializer"> = &quot;&quot;</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.openblob.php" class="methodname">openBlob</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$table</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$column</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$rowid</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$database</code><span class="initializer"> = &quot;main&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="sqlite3.constants.php#constant.sqlite3-open-readonly">SQLITE3_OPEN_READONLY</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.prepare.php" class="methodname">prepare</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><span class="type"><a href="class.sqlite3stmt.php" class="type SQLite3Stmt">SQLite3Stmt</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.query.php" class="methodname">query</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><span class="type"><a href="class.sqlite3result.php" class="type SQLite3Result">SQLite3Result</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.querysingle.php" class="methodname">querySingle</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$entireRow</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="sqlite3.setauthorizer.php" class="methodname">setAuthorizer</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="sqlite3.version.php" class="methodname">version</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

   }</div>


  </div>


  <div class="section" id="sqlite3.class.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>
    
     <dt id="sqlite3.constants.ok"><strong><code><a href="class.sqlite3.php#sqlite3.constants.ok">SQLite3::OK</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.deny"><strong><code><a href="class.sqlite3.php#sqlite3.constants.deny">SQLite3::DENY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.ignore"><strong><code><a href="class.sqlite3.php#sqlite3.constants.ignore">SQLite3::IGNORE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.create-index"><strong><code><a href="class.sqlite3.php#sqlite3.constants.create-index">SQLite3::CREATE_INDEX</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.create-table"><strong><code><a href="class.sqlite3.php#sqlite3.constants.create-table">SQLite3::CREATE_TABLE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.create-temp-index"><strong><code><a href="class.sqlite3.php#sqlite3.constants.create-temp-index">SQLite3::CREATE_TEMP_INDEX</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.create-temp-table"><strong><code><a href="class.sqlite3.php#sqlite3.constants.create-temp-table">SQLite3::CREATE_TEMP_TABLE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.create-temp-trigger"><strong><code><a href="class.sqlite3.php#sqlite3.constants.create-temp-trigger">SQLite3::CREATE_TEMP_TRIGGER</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.create-temp-view"><strong><code><a href="class.sqlite3.php#sqlite3.constants.create-temp-view">SQLite3::CREATE_TEMP_VIEW</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.create-trigger"><strong><code><a href="class.sqlite3.php#sqlite3.constants.create-trigger">SQLite3::CREATE_TRIGGER</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.create-view"><strong><code><a href="class.sqlite3.php#sqlite3.constants.create-view">SQLite3::CREATE_VIEW</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.delete"><strong><code><a href="class.sqlite3.php#sqlite3.constants.delete">SQLite3::DELETE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.drop-index"><strong><code><a href="class.sqlite3.php#sqlite3.constants.drop-index">SQLite3::DROP_INDEX</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.drop-table"><strong><code><a href="class.sqlite3.php#sqlite3.constants.drop-table">SQLite3::DROP_TABLE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.drop-temp-index"><strong><code><a href="class.sqlite3.php#sqlite3.constants.drop-temp-index">SQLite3::DROP_TEMP_INDEX</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.drop-temp-table"><strong><code><a href="class.sqlite3.php#sqlite3.constants.drop-temp-table">SQLite3::DROP_TEMP_TABLE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.drop-temp-trigger"><strong><code><a href="class.sqlite3.php#sqlite3.constants.drop-temp-trigger">SQLite3::DROP_TEMP_TRIGGER</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.drop-temp-view"><strong><code><a href="class.sqlite3.php#sqlite3.constants.drop-temp-view">SQLite3::DROP_TEMP_VIEW</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.drop-trigger"><strong><code><a href="class.sqlite3.php#sqlite3.constants.drop-trigger">SQLite3::DROP_TRIGGER</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.drop-view"><strong><code><a href="class.sqlite3.php#sqlite3.constants.drop-view">SQLite3::DROP_VIEW</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.insert"><strong><code><a href="class.sqlite3.php#sqlite3.constants.insert">SQLite3::INSERT</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.pragma"><strong><code><a href="class.sqlite3.php#sqlite3.constants.pragma">SQLite3::PRAGMA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.read"><strong><code><a href="class.sqlite3.php#sqlite3.constants.read">SQLite3::READ</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.select"><strong><code><a href="class.sqlite3.php#sqlite3.constants.select">SQLite3::SELECT</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.transaction"><strong><code><a href="class.sqlite3.php#sqlite3.constants.transaction">SQLite3::TRANSACTION</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.update"><strong><code><a href="class.sqlite3.php#sqlite3.constants.update">SQLite3::UPDATE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.attach"><strong><code><a href="class.sqlite3.php#sqlite3.constants.attach">SQLite3::ATTACH</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.detach"><strong><code><a href="class.sqlite3.php#sqlite3.constants.detach">SQLite3::DETACH</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.alter-table"><strong><code><a href="class.sqlite3.php#sqlite3.constants.alter-table">SQLite3::ALTER_TABLE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.reindex"><strong><code><a href="class.sqlite3.php#sqlite3.constants.reindex">SQLite3::REINDEX</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.analyze"><strong><code><a href="class.sqlite3.php#sqlite3.constants.analyze">SQLite3::ANALYZE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.create-vtable"><strong><code><a href="class.sqlite3.php#sqlite3.constants.create-vtable">SQLite3::CREATE_VTABLE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.drop-vtable"><strong><code><a href="class.sqlite3.php#sqlite3.constants.drop-vtable">SQLite3::DROP_VTABLE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.function"><strong><code><a href="class.sqlite3.php#sqlite3.constants.function">SQLite3::FUNCTION</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.savepoint"><strong><code><a href="class.sqlite3.php#sqlite3.constants.savepoint">SQLite3::SAVEPOINT</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.copy"><strong><code><a href="class.sqlite3.php#sqlite3.constants.copy">SQLite3::COPY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="sqlite3.constants.recursive"><strong><code><a href="class.sqlite3.php#sqlite3.constants.recursive">SQLite3::RECURSIVE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    
   </dl>
  </div>

 </div>

 














































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="sqlite3.backup.php">SQLite3::backup</a> — Backup one database to another database</li><li><a href="sqlite3.busytimeout.php">SQLite3::busyTimeout</a> — Sets the busy connection handler</li><li><a href="sqlite3.changes.php">SQLite3::changes</a> — Returns the number of database rows that were changed (or inserted or
   deleted) by the most recent SQL statement</li><li><a href="sqlite3.close.php">SQLite3::close</a> — Closes the database connection</li><li><a href="sqlite3.construct.php">SQLite3::__construct</a> — Instantiates an SQLite3 object and opens an SQLite 3 database</li><li><a href="sqlite3.createaggregate.php">SQLite3::createAggregate</a> — Registers a PHP function for use as an SQL aggregate function</li><li><a href="sqlite3.createcollation.php">SQLite3::createCollation</a> — Registers a PHP function for use as an SQL collating function</li><li><a href="sqlite3.createfunction.php">SQLite3::createFunction</a> — Registers a PHP function for use as an SQL scalar function</li><li><a href="sqlite3.enableexceptions.php">SQLite3::enableExceptions</a> — Enable throwing exceptions</li><li><a href="sqlite3.escapestring.php">SQLite3::escapeString</a> — Returns a string that has been properly escaped</li><li><a href="sqlite3.exec.php">SQLite3::exec</a> — Executes a result-less query against a given database</li><li><a href="sqlite3.lasterrorcode.php">SQLite3::lastErrorCode</a> — Returns the numeric result code of the most recent failed SQLite request</li><li><a href="sqlite3.lasterrormsg.php">SQLite3::lastErrorMsg</a> — Returns English text describing the most recent failed SQLite request</li><li><a href="sqlite3.lastinsertrowid.php">SQLite3::lastInsertRowID</a> — Returns the row ID of the most recent INSERT into the database</li><li><a href="sqlite3.loadextension.php">SQLite3::loadExtension</a> — Attempts to load an SQLite extension library</li><li><a href="sqlite3.open.php">SQLite3::open</a> — Opens an SQLite database</li><li><a href="sqlite3.openblob.php">SQLite3::openBlob</a> — Opens a stream resource to read a BLOB</li><li><a href="sqlite3.prepare.php">SQLite3::prepare</a> — Prepares an SQL statement for execution</li><li><a href="sqlite3.query.php">SQLite3::query</a> — Executes an SQL query</li><li><a href="sqlite3.querysingle.php">SQLite3::querySingle</a> — Executes a query and returns a single result</li><li><a href="sqlite3.setauthorizer.php">SQLite3::setAuthorizer</a> — Configures a callback to be used as an authorizer to limit what a statement can do</li><li><a href="sqlite3.version.php">SQLite3::version</a> — Returns the SQLite3 library version as a string constant and as a number</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sqlite3/sqlite3.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.sqlite3%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.sqlite3&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.sqlite3.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.sqlite3.php">SQLite3</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.sqlite3.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="sqlite3.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="class.sqlite3.php" title="SQLite3">SQLite3</a>
                        </li>
                                                <li class="">
                            <a href="class.sqlite3exception.php" title="SQLite3Exception">SQLite3Exception</a>
                        </li>
                                                <li class="">
                            <a href="class.sqlite3stmt.php" title="SQLite3Stmt">SQLite3Stmt</a>
                        </li>
                                                <li class="">
                            <a href="class.sqlite3result.php" title="SQLite3Result">SQLite3Result</a>
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
