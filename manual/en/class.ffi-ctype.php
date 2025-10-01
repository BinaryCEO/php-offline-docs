<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: FFI\CType - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.ffi-ctype.php">
 <link rel="shorturl" href="https://www.php.net/ffi-ctype">
 <link rel="alternate" href="https://www.php.net/ffi-ctype" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ffi.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.ffi-cdata.php">
 <link rel="next" href="https://www.php.net/manual/en/ffi-ctype.getalignment.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.ffi-ctype.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.ffi-ctype.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.ffi-ctype.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.ffi-ctype.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.ffi-ctype.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.ffi-ctype.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.ffi-ctype.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.ffi-ctype.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.ffi-ctype.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.ffi-ctype.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.ffi-ctype.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="C Type Handles" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: FFI\CType - Manual" />
<meta name="twitter:description" content="C Type Handles" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: FFI\CType - Manual" />
<meta itemprop="description" content="C Type Handles" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="C Type Handles" />

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
        <a href="ffi-ctype.getalignment.php">
          FFI\CType::getAlignment &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.ffi-cdata.php">
          &laquo; FFI\CData        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.ffi.php'>FFI</a></li>      </ul>
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
            <option value='en/class.ffi-ctype.php' selected="selected">English</option>
            <option value='de/class.ffi-ctype.php'>German</option>
            <option value='es/class.ffi-ctype.php'>Spanish</option>
            <option value='fr/class.ffi-ctype.php'>French</option>
            <option value='it/class.ffi-ctype.php'>Italian</option>
            <option value='ja/class.ffi-ctype.php'>Japanese</option>
            <option value='pt_BR/class.ffi-ctype.php'>Brazilian Portuguese</option>
            <option value='ru/class.ffi-ctype.php'>Russian</option>
            <option value='tr/class.ffi-ctype.php'>Turkish</option>
            <option value='uk/class.ffi-ctype.php'>Ukrainian</option>
            <option value='zh/class.ffi-ctype.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.ffi-ctype" class="reference">

 <h1 class="title">C Type Handles</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p>


  <div class="section" id="ffi-ctype.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="ffi-ctype.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">final</span>
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">FFI\CType</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-void"><var class="varname">TYPE_VOID</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-float"><var class="varname">TYPE_FLOAT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-double"><var class="varname">TYPE_DOUBLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-longdouble"><var class="varname">TYPE_LONGDOUBLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-uint8"><var class="varname">TYPE_UINT8</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-sint8"><var class="varname">TYPE_SINT8</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-uint16"><var class="varname">TYPE_UINT16</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-sint16"><var class="varname">TYPE_SINT16</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-uint32"><var class="varname">TYPE_UINT32</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-sint32"><var class="varname">TYPE_SINT32</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-uint64"><var class="varname">TYPE_UINT64</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-sint64"><var class="varname">TYPE_SINT64</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-enum"><var class="varname">TYPE_ENUM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-bool"><var class="varname">TYPE_BOOL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-char"><var class="varname">TYPE_CHAR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-pointer"><var class="varname">TYPE_POINTER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-func"><var class="varname">TYPE_FUNC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-array"><var class="varname">TYPE_ARRAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.type-struct"><var class="varname">TYPE_STRUCT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-const"><var class="varname">ATTR_CONST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-incomplete-tag"><var class="varname">ATTR_INCOMPLETE_TAG</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-variadic"><var class="varname">ATTR_VARIADIC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-incomplete-array"><var class="varname">ATTR_INCOMPLETE_ARRAY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-vla"><var class="varname">ATTR_VLA</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-union"><var class="varname">ATTR_UNION</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-packed"><var class="varname">ATTR_PACKED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-ms-struct"><var class="varname">ATTR_MS_STRUCT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-gcc-struct"><var class="varname">ATTR_GCC_STRUCT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-default"><var class="varname">ABI_DEFAULT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-cdecl"><var class="varname">ABI_CDECL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-fastcall"><var class="varname">ABI_FASTCALL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-thiscall"><var class="varname">ABI_THISCALL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-stdcall"><var class="varname">ABI_STDCALL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-pascal"><var class="varname">ABI_PASCAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-register"><var class="varname">ABI_REGISTER</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-ms"><var class="varname">ABI_MS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-sysv"><var class="varname">ABI_SYSV</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-vectorcall"><var class="varname">ABI_VECTORCALL</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getalignment.php" class="methodname">getAlignment</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getarrayelementtype.php" class="methodname">getArrayElementType</a></span>(): <span class="type"><a href="class.ffi-ctype.php" class="type FFI\CType">FFI\CType</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getarraylength.php" class="methodname">getArrayLength</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getattributes.php" class="methodname">getAttributes</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getenumkind.php" class="methodname">getEnumKind</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getfuncabi.php" class="methodname">getFuncABI</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getfuncparametercount.php" class="methodname">getFuncParameterCount</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getfuncparametertype.php" class="methodname">getFuncParameterType</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="class.ffi-ctype.php" class="type FFI\CType">FFI\CType</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getfuncreturntype.php" class="methodname">getFuncReturnType</a></span>(): <span class="type"><a href="class.ffi-ctype.php" class="type FFI\CType">FFI\CType</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getkind.php" class="methodname">getKind</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getname.php" class="methodname">getName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getpointertype.php" class="methodname">getPointerType</a></span>(): <span class="type"><a href="class.ffi-ctype.php" class="type FFI\CType">FFI\CType</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getsize.php" class="methodname">getSize</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getstructfieldnames.php" class="methodname">getStructFieldNames</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getstructfieldoffset.php" class="methodname">getStructFieldOffset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ffi-ctype.getstructfieldtype.php" class="methodname">getStructFieldType</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="class.ffi-ctype.php" class="type FFI\CType">FFI\CType</a></span></div>

   }</div>


  </div>

  <div class="section" id="ffi-ctype.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>
    
     <dt id="ffi-ctype.constants.type-void"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-void">FFI\CType::TYPE_VOID</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-float"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-float">FFI\CType::TYPE_FLOAT</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-double"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-double">FFI\CType::TYPE_DOUBLE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-longdouble"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-longdouble">FFI\CType::TYPE_LONGDOUBLE</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-uint8"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-uint8">FFI\CType::TYPE_UINT8</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-sint8"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-sint8">FFI\CType::TYPE_SINT8</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-uint16"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-uint16">FFI\CType::TYPE_UINT16</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-sint16"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-sint16">FFI\CType::TYPE_SINT16</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-uint32"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-uint32">FFI\CType::TYPE_UINT32</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-sint32"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-sint32">FFI\CType::TYPE_SINT32</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-uint64"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-uint64">FFI\CType::TYPE_UINT64</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-sint64"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-sint64">FFI\CType::TYPE_SINT64</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-enum"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-enum">FFI\CType::TYPE_ENUM</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-bool"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-bool">FFI\CType::TYPE_BOOL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-char"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-char">FFI\CType::TYPE_CHAR</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-pointer"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-pointer">FFI\CType::TYPE_POINTER</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-func"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-func">FFI\CType::TYPE_FUNC</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-array"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-array">FFI\CType::TYPE_ARRAY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.type-struct"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.type-struct">FFI\CType::TYPE_STRUCT</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.attr-const"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-const">FFI\CType::ATTR_CONST</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.attr-incomplete-tag"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-incomplete-tag">FFI\CType::ATTR_INCOMPLETE_TAG</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.attr-variadic"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-variadic">FFI\CType::ATTR_VARIADIC</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.attr-incomplete-array"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-incomplete-array">FFI\CType::ATTR_INCOMPLETE_ARRAY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.attr-vla"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-vla">FFI\CType::ATTR_VLA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.attr-union"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-union">FFI\CType::ATTR_UNION</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.attr-packed"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-packed">FFI\CType::ATTR_PACKED</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.attr-ms-struct"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-ms-struct">FFI\CType::ATTR_MS_STRUCT</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.attr-gcc-struct"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.attr-gcc-struct">FFI\CType::ATTR_GCC_STRUCT</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.abi-default"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-default">FFI\CType::ABI_DEFAULT</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.abi-cdecl"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-cdecl">FFI\CType::ABI_CDECL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.abi-fastcall"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-fastcall">FFI\CType::ABI_FASTCALL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.abi-thiscall"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-thiscall">FFI\CType::ABI_THISCALL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.abi-stdcall"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-stdcall">FFI\CType::ABI_STDCALL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.abi-pascal"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-pascal">FFI\CType::ABI_PASCAL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.abi-register"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-register">FFI\CType::ABI_REGISTER</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.abi-ms"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-ms">FFI\CType::ABI_MS</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.abi-sysv"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-sysv">FFI\CType::ABI_SYSV</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="ffi-ctype.constants.abi-vectorcall"><strong><code><a href="class.ffi-ctype.php#ffi-ctype.constants.abi-vectorcall">FFI\CType::ABI_VECTORCALL</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    
   </dl>
  </div>

 </div>

 
































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="ffi-ctype.getalignment.php">FFI\CType::getAlignment</a> — Description</li><li><a href="ffi-ctype.getarrayelementtype.php">FFI\CType::getArrayElementType</a> — Description</li><li><a href="ffi-ctype.getarraylength.php">FFI\CType::getArrayLength</a> — Description</li><li><a href="ffi-ctype.getattributes.php">FFI\CType::getAttributes</a> — Description</li><li><a href="ffi-ctype.getenumkind.php">FFI\CType::getEnumKind</a> — Description</li><li><a href="ffi-ctype.getfuncabi.php">FFI\CType::getFuncABI</a> — Description</li><li><a href="ffi-ctype.getfuncparametercount.php">FFI\CType::getFuncParameterCount</a> — Retrieve the count of parameters of a function type</li><li><a href="ffi-ctype.getfuncparametertype.php">FFI\CType::getFuncParameterType</a> — Retrieve the type of a function parameter</li><li><a href="ffi-ctype.getfuncreturntype.php">FFI\CType::getFuncReturnType</a> — Description</li><li><a href="ffi-ctype.getkind.php">FFI\CType::getKind</a> — Description</li><li><a href="ffi-ctype.getname.php">FFI\CType::getName</a> — Description</li><li><a href="ffi-ctype.getpointertype.php">FFI\CType::getPointerType</a> — Description</li><li><a href="ffi-ctype.getsize.php">FFI\CType::getSize</a> — Description</li><li><a href="ffi-ctype.getstructfieldnames.php">FFI\CType::getStructFieldNames</a> — Description</li><li><a href="ffi-ctype.getstructfieldoffset.php">FFI\CType::getStructFieldOffset</a> — Description</li><li><a href="ffi-ctype.getstructfieldtype.php">FFI\CType::getStructFieldType</a> — Description</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ffi/ffi.ctype.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.ffi-ctype%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.ffi-ctype&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.ffi-ctype.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124564">  <div class="votes">
    <div id="Vu124564">
    <a href="/manual/vote-note.php?id=124564&amp;page=class.ffi-ctype&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124564">
    <a href="/manual/vote-note.php?id=124564&amp;page=class.ffi-ctype&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124564" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124564" class="name">
  <strong class="user"><em>scorninpc at php dot net</em></strong></a><a class="genanchor" href="#124564"> &para;</a><div class="date" title="2020-01-03 09:33"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124564">
<div class="phpcode"><code><span class="html">You can compare CTypes if you want to know if the type are correct<br /><br />\FFI::typeof(\FFI::addr($a)) == \FFI::typeof(\FFI::new("void *"))<br /><br />CType need some methods, like equal() or toString(), but .....</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.ffi-ctype&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.ffi-ctype.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.ffi.php">FFI</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.ffi.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="ffi.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="ffi.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.ffi.php" title="FFI">FFI</a>
                        </li>
                                                <li class="">
                            <a href="class.ffi-cdata.php" title="FFI\CData">FFI\CData</a>
                        </li>
                                                <li class="current">
                            <a href="class.ffi-ctype.php" title="FFI\CType">FFI\CType</a>
                        </li>
                                                <li class="">
                            <a href="class.ffi-exception.php" title="FFI\Exception">FFI\Exception</a>
                        </li>
                                                <li class="">
                            <a href="class.ffi-parserexception.php" title="FFI\ParserException">FFI\ParserException</a>
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
