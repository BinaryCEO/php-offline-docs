<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SNMP - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.snmp.php">
 <link rel="shorturl" href="https://www.php.net/snmp">
 <link rel="alternate" href="https://www.php.net/snmp" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.snmp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.snmpwalkoid.php">
 <link rel="next" href="https://www.php.net/manual/en/snmp.close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.snmp.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.snmp.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.snmp.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.snmp.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.snmp.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.snmp.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.snmp.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.snmp.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.snmp.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.snmp.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.snmp.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SNMP class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SNMP - Manual" />
<meta name="twitter:description" content="The SNMP class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SNMP - Manual" />
<meta itemprop="description" content="The SNMP class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SNMP class" />

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
        <a href="snmp.close.php">
          SNMP::close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.snmpwalkoid.php">
          &laquo; snmpwalkoid        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.snmp.php'>SNMP</a></li>      </ul>
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
            <option value='en/class.snmp.php' selected="selected">English</option>
            <option value='de/class.snmp.php'>German</option>
            <option value='es/class.snmp.php'>Spanish</option>
            <option value='fr/class.snmp.php'>French</option>
            <option value='it/class.snmp.php'>Italian</option>
            <option value='ja/class.snmp.php'>Japanese</option>
            <option value='pt_BR/class.snmp.php'>Brazilian Portuguese</option>
            <option value='ru/class.snmp.php'>Russian</option>
            <option value='tr/class.snmp.php'>Turkish</option>
            <option value='uk/class.snmp.php'>Ukrainian</option>
            <option value='zh/class.snmp.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.snmp" class="reference">
 <h1 class="title">The SNMP class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7, PHP 8)</p>
 

  <div class="section" id="snmp.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Represents <abbr title="Simple Network Management Protocol">SNMP</abbr> session.
   </p>
  </div>

 
  <div class="section" id="snmp.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">SNMP</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.snmp.php#snmp.constants.version-1"><var class="varname">VERSION_1</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.snmp.php#snmp.constants.version-2c"><var class="varname">VERSION_2c</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.snmp.php#snmp.constants.version-2c"><var class="varname">VERSION_2C</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.snmp.php#snmp.constants.version-3"><var class="varname">VERSION_3</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.snmp.php#snmp.constants.errno-noerror"><var class="varname">ERRNO_NOERROR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.snmp.php#snmp.constants.errno-any"><var class="varname">ERRNO_ANY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.snmp.php#snmp.constants.errno-generic"><var class="varname">ERRNO_GENERIC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.snmp.php#snmp.constants.errno-timeout"><var class="varname">ERRNO_TIMEOUT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.snmp.php#snmp.constants.errno-error-in-reply"><var class="varname">ERRNO_ERROR_IN_REPLY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.snmp.php#snmp.constants.errno-oid-not-increasing"><var class="varname">ERRNO_OID_NOT_INCREASING</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.snmp.php#snmp.constants.errno-oid-parsing-error"><var class="varname">ERRNO_OID_PARSING_ERROR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.snmp.php#snmp.constants.errno-multiple-set-queries"><var class="varname">ERRNO_MULTIPLE_SET_QUERIES</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
      <var class="varname"><a href="class.snmp.php#snmp.props.info">$<var class="varname">info</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type">?</span><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span><span class="type"></span></span>
      <var class="varname"><a href="class.snmp.php#snmp.props.max-oids">$<var class="varname">max_oids</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.snmp.php#snmp.props.valueretrieval">$<var class="varname">valueretrieval</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.snmp.php#snmp.props.quick-print">$<var class="varname">quick_print</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.snmp.php#snmp.props.enum-print">$<var class="varname">enum_print</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.snmp.php#snmp.props.oid-output-format">$<var class="varname">oid_output_format</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
      <var class="varname"><a href="class.snmp.php#snmp.props.oid-increasing-check">$<var class="varname">oid_increasing_check</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.snmp.php#snmp.props.exceptions-enabled">$<var class="varname">exceptions_enabled</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="snmp.construct.php" class="methodname">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$version</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$hostname</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$community</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeout</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$retries</code><span class="initializer"> = -1</span></span><br>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="snmp.close.php" class="methodname">close</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="snmp.get.php" class="methodname">get</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$objectId</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$preserveKeys</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="snmp.geterrno.php" class="methodname">getErrno</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="snmp.geterror.php" class="methodname">getError</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="snmp.getnext.php" class="methodname">getnext</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$objectId</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="snmp.set.php" class="methodname">set</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$objectId</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$type</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="snmp.setsecurity.php" class="methodname">setSecurity</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$securityLevel</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$authProtocol</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$authPassphrase</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$privacyProtocol</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$privacyPassphrase</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$contextName</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$contextEngineId</code><span class="initializer"> = &quot;&quot;</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="snmp.walk.php" class="methodname">walk</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$objectId</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$suffixAsKey</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$maxRepetitions</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$nonRepeaters</code><span class="initializer"> = -1</span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

   }</div>
  </div>


  <div class="section" id="snmp.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="snmp.props.max-oids"><var class="varname">max_oids</var></dt>
     <dd>
      <p class="para">Maximum OID per GET/SET/GETBULK request</p>
     </dd>
    
    
     <dt id="snmp.props.valueretrieval"><var class="varname">valueretrieval</var></dt>
     <dd>
      <p class="para">Controls the method how the SNMP values will be returned</p>
      <table class="doctable informaltable">
       
        <tbody class="tbody">
         <tr><td><strong><code><a href="snmp.constants.php#constant.snmp-value-library">SNMP_VALUE_LIBRARY</a></code></strong></td><td>The return values will be as returned by the Net-SNMP library.</td></tr>

         <tr><td><strong><code><a href="snmp.constants.php#constant.snmp-value-plain">SNMP_VALUE_PLAIN</a></code></strong></td><td>The return values will be the plain value without the SNMP type information.</td></tr>

         <tr>
          <td><strong><code><a href="snmp.constants.php#constant.snmp-value-object">SNMP_VALUE_OBJECT</a></code></strong></td><td>
           The return values will be objects with the properties &quot;value&quot; and &quot;type&quot;, where the latter
           is one of the SNMP_OCTET_STR, SNMP_COUNTER etc. constants. The
           way &quot;value&quot; is returned is based on which one of <strong><code><a href="snmp.constants.php#constant.snmp-value-library">SNMP_VALUE_LIBRARY</a></code></strong>,
           <strong><code><a href="snmp.constants.php#constant.snmp-value-plain">SNMP_VALUE_PLAIN</a></code></strong> is set
          </td>
         </tr>

        </tbody>
       
      </table>


     </dd>
    
    
     <dt id="snmp.props.quick-print"><var class="varname">quick_print</var></dt>
     <dd>
      <p class="para">Value of <code class="parameter">quick_print</code> within the NET-<abbr title="Simple Network Management Protocol">SNMP</abbr> library</p>
      <p class="para">
       Sets the value of <code class="parameter">quick_print</code> within the NET-<abbr title="Simple Network Management Protocol">SNMP</abbr> library.  When this
       is set (1), the <abbr title="Simple Network Management Protocol">SNMP</abbr> library will return &#039;quick printed&#039; values.  This
       means that just the value will be printed.  When <code class="parameter">quick_print</code> is not
       enabled (default) the NET-<abbr title="Simple Network Management Protocol">SNMP</abbr> library prints extra information
       including the type of the value (i.e. IpAddress or OID).  Additionally,
       if quick_print is not enabled, the library prints additional hex values
       for all strings of three characters or less.
      </p>
     </dd>
    
    
     <dt id="snmp.props.enum-print"><var class="varname">enum_print</var></dt>
     <dd>
      <p class="para">Controls the way enum values are printed</p>
      <p class="para">
       Parameter toggles if walk/get etc. should automatically lookup enum values
       in the MIB and return them together with their human readable string.
      </p>
     </dd>
    
    
     <dt id="snmp.props.oid-output-format"><var class="varname">oid_output_format</var></dt>
     <dd>
      <p class="para">Controls OID output format</p>
      <table class="doctable table">
       <caption><strong>OID .1.3.6.1.2.1.1.3.0 representation for various
       <var class="varname">oid_output_format</var> values</strong></caption>
       
        <tbody class="tbody">
         <tr><td><strong><code><a href="snmp.constants.php#constant.snmp-oid-output-full">SNMP_OID_OUTPUT_FULL</a></code></strong></td><td>.iso.org.dod.internet.mgmt.mib-2.system.sysUpTime.sysUpTimeInstance</td></tr>

         <tr><td><strong><code><a href="snmp.constants.php#constant.snmp-oid-output-numeric">SNMP_OID_OUTPUT_NUMERIC</a></code></strong></td><td>.1.3.6.1.2.1.1.3.0</td> </tr>

         <tr><td><strong><code><a href="snmp.constants.php#constant.snmp-oid-output-module">SNMP_OID_OUTPUT_MODULE</a></code></strong></td><td>DISMAN-EVENT-MIB::sysUpTimeInstance</td></tr>

         <tr><td><strong><code><a href="snmp.constants.php#constant.snmp-oid-output-suffix">SNMP_OID_OUTPUT_SUFFIX</a></code></strong></td><td>sysUpTimeInstance</td></tr>

         <tr><td><strong><code><a href="snmp.constants.php#constant.snmp-oid-output-ucd">SNMP_OID_OUTPUT_UCD</a></code></strong></td><td>system.sysUpTime.sysUpTimeInstance</td></tr>

         <tr><td><strong><code><a href="snmp.constants.php#constant.snmp-oid-output-none">SNMP_OID_OUTPUT_NONE</a></code></strong></td><td>Undefined</td></tr>

        </tbody>
       
      </table>

     </dd>
    
    
     <dt id="snmp.props.oid-increasing-check"><var class="varname">oid_increasing_check</var></dt>
     <dd>
      <p class="para">Controls disabling check for increasing OID while walking OID tree</p>
      <p class="para">
       Some <abbr title="Simple Network Management Protocol">SNMP</abbr> agents are known for returning OIDs out
       of order but can complete the walk anyway. Other agents return OIDs
       that are out of order and can cause <span class="methodname"><a href="snmp.walk.php" class="methodname">SNMP::walk()</a></span>
       to loop indefinitely until memory limit will be reached.
       PHP SNMP library by default performs OID increasing check and stops
       walking on OID tree when it detects possible loop with issuing warning
       about non-increasing OID faced.
       Set <var class="varname">oid_increasing_check</var> to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> to disable this
       check.
      </p>
     </dd>
    
    
     <dt id="snmp.props.exceptions-enabled"><var class="varname">exceptions_enabled</var></dt>
     <dd>
      <p class="para">
       Controls which failures will raise SNMPException instead of
       warning. Use bitwise OR&#039;ed <strong><code><a href="class.snmp.php#snmp.constants.errno-noerror">SNMP::ERRNO_<span class="replaceable">*</span></a></code></strong> constants.
       By default all SNMP exceptions are disabled.
      </p>
     </dd>
    
    
     <dt id="snmp.props.info"><var class="varname">info</var></dt>
     <dd>
      <p class="para">Read-only property with remote agent configuration: hostname,
      port, default timeout, default retries count</p>
     </dd>
    
   </dl>
  </div>


  
  <div class="section" id="class.snmp.constants">
   <h2 class="title">Predefined Constants</h2>
   <div class="section" id="snmp.constants.error-types">
    <h2 class="title"><abbr title="Simple Network Management Protocol">SNMP</abbr> Error Types</h2>
    <dl>

     
      <dt id="snmp.constants.errno-noerror"><strong><code><a href="class.snmp.php#snmp.constants.errno-noerror">SNMP::ERRNO_NOERROR</a></code></strong></dt>
      <dd>
       <p class="para">No <abbr title="Simple Network Management Protocol">SNMP</abbr>-specific error occurred.</p>
      </dd>
     

     
      <dt id="snmp.constants.errno-generic"><strong><code><a href="class.snmp.php#snmp.constants.errno-generic">SNMP::ERRNO_GENERIC</a></code></strong></dt>
      <dd>
       <p class="para">A generic <abbr title="Simple Network Management Protocol">SNMP</abbr> error occurred.</p>
      </dd>
     

     
      <dt id="snmp.constants.errno-timeout"><strong><code><a href="class.snmp.php#snmp.constants.errno-timeout">SNMP::ERRNO_TIMEOUT</a></code></strong></dt>
      <dd>
       <p class="para">Request to <abbr title="Simple Network Management Protocol">SNMP</abbr> agent timed out.</p>
      </dd>
     

     
      <dt id="snmp.constants.errno-error-in-reply"><strong><code><a href="class.snmp.php#snmp.constants.errno-error-in-reply">SNMP::ERRNO_ERROR_IN_REPLY</a></code></strong></dt>
      <dd>
       <p class="para"><abbr title="Simple Network Management Protocol">SNMP</abbr> agent returned an error in reply.</p>
      </dd>
     

     
      <dt id="snmp.constants.errno-oid-not-increasing"><strong><code><a href="class.snmp.php#snmp.constants.errno-oid-not-increasing">SNMP::ERRNO_OID_NOT_INCREASING</a></code></strong></dt>
      <dd>
       <p class="para">
        <abbr title="Simple Network Management Protocol">SNMP</abbr> agent faced OID cycling reporning
        non-increasing OID while executing (BULK)WALK command.
        This indicates bogus remote <abbr title="Simple Network Management Protocol">SNMP</abbr> agent.
       </p>
      </dd>
     

     
      <dt id="snmp.constants.errno-oid-parsing-error"><strong><code><a href="class.snmp.php#snmp.constants.errno-oid-parsing-error">SNMP::ERRNO_OID_PARSING_ERROR</a></code></strong></dt>
      <dd>
       <p class="para">
        Library failed while parsing OID (and/or type for SET command).
        No queries has been made.
       </p>
      </dd>
     

     
      <dt id="snmp.constants.errno-multiple-set-queries"><strong><code><a href="class.snmp.php#snmp.constants.errno-multiple-set-queries">SNMP::ERRNO_MULTIPLE_SET_QUERIES</a></code></strong></dt>
      <dd>
       <p class="para">
        Library will use multiple queries for SET operation requested.
        That means that operation will be performed in a non-transaction manner 
        and second or subsequent chunks may fail if a type or value failure
        will be faced.
       </p>
      </dd>
     

     
      <dt id="snmp.constants.errno-any"><strong><code><a href="class.snmp.php#snmp.constants.errno-any">SNMP::ERRNO_ANY</a></code></strong></dt>
      <dd>
       <p class="para">
 All SNMP::ERRNO_* codes bitwise OR&#039;ed.
       </p>
      </dd>
     

    </dl>
   </div>
   <div class="section" id="snmp.constants.protocols">
    <h2 class="title"><abbr title="Simple Network Management Protocol">SNMP</abbr> Protocol Versions</h2>
    <dl>

     
      <dt id="snmp.constants.version-1"><strong><code><a href="class.snmp.php#snmp.constants.version-1">SNMP::VERSION_1</a></code></strong></dt>
      <dd>
       <p class="para"/>
      </dd>
     

     
      <dt id="snmp.constants.version-2c"><strong><code><a href="class.snmp.php#snmp.constants.version-2c">SNMP::VERSION_2C</a></code></strong>, <strong><code><a href="class.snmp.php#snmp.constants.version-2c">SNMP::VERSION_2c</a></code></strong></dt>
      <dd>
       <p class="para"/>
      </dd>
     

     
      <dt id="snmp.constants.version-3"><strong><code><a href="class.snmp.php#snmp.constants.version-3">SNMP::VERSION_3</a></code></strong></dt>
      <dd>
       <p class="para"/>
      </dd>
     

    </dl>
   </div>
  </div>
  

 
 </div>
 
 












































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="snmp.close.php">SNMP::close</a> — Close SNMP session</li><li><a href="snmp.construct.php">SNMP::__construct</a> — Creates SNMP instance representing session to remote SNMP agent</li><li><a href="snmp.get.php">SNMP::get</a> — Fetch an SNMP object</li><li><a href="snmp.geterrno.php">SNMP::getErrno</a> — Get last error code</li><li><a href="snmp.geterror.php">SNMP::getError</a> — Get last error message</li><li><a href="snmp.getnext.php">SNMP::getnext</a> — Fetch an SNMP object which
  follows the given object id</li><li><a href="snmp.set.php">SNMP::set</a> — Set the value of an SNMP object</li><li><a href="snmp.setsecurity.php">SNMP::setSecurity</a> — Configures security-related SNMPv3 session parameters</li><li><a href="snmp.walk.php">SNMP::walk</a> — Fetch SNMP object subtree</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/snmp/snmp.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.snmp%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.snmp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.snmp.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125881">  <div class="votes">
    <div id="Vu125881">
    <a href="/manual/vote-note.php?id=125881&amp;page=class.snmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125881">
    <a href="/manual/vote-note.php?id=125881&amp;page=class.snmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125881" title="no votes...">
    0
    </div>
  </div>
  <a href="#125881" class="name">
  <strong class="user"><em>swannie at swannie dot net</em></strong></a><a class="genanchor" href="#125881"> &para;</a><div class="date" title="2021-03-05 06:17"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125881">
<div class="phpcode"><code><span class="html">Hopefully this helps someone else out because this was driving be bonkers for a good two hours.  It looks like valueretrieval and enum_print work together in a way that I wasn't expecting, and after re-reading may be by design but I'm not sure.  If you can't get enums to print, this might be why.<br /><br /><span class="default">&lt;?php<br /> $snmp </span><span class="keyword">= new </span><span class="default">SNMP</span><span class="keyword">(</span><span class="default">SNMP</span><span class="keyword">::</span><span class="default">VERSION_2C</span><span class="keyword">,</span><span class="string">'192.168.1.9'</span><span class="keyword">,</span><span class="string">'test'</span><span class="keyword">);<br /> </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">oid_output_format </span><span class="keyword">= </span><span class="default">SNMP_OID_OUTPUT_SUFFIX</span><span class="keyword">;<br /> </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">valueretrieval </span><span class="keyword">= </span><span class="default">SNMP_VALUE_PLAIN</span><span class="keyword">;<br /> </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">enum_print </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /> echo </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="string">'IF-MIB::ifOperStatus.10110'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br /> </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">enum_print </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /> echo </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="string">'IF-MIB::ifOperStatus.10110'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br /> </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">quick_print </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /> echo </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="string">'IF-MIB::ifOperStatus.10110'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br /> </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">valueretrieval </span><span class="keyword">= </span><span class="default">SNMP_VALUE_LIBRARY</span><span class="keyword">;<br /> echo </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="string">'IF-MIB::ifOperStatus.10110'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br /> </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">enum_print </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /> echo </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="string">'IF-MIB::ifOperStatus.10110'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Output:<br />1<br />1<br />1<br />1<br />up</span></code></div>
  </div>
 </div>
  <div class="note" id="118946">  <div class="votes">
    <div id="Vu118946">
    <a href="/manual/vote-note.php?id=118946&amp;page=class.snmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118946">
    <a href="/manual/vote-note.php?id=118946&amp;page=class.snmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118946" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#118946" class="name">
  <strong class="user"><em>madjev1990 at gmail dot com</em></strong></a><a class="genanchor" href="#118946"> &para;</a><div class="date" title="2016-03-04 10:13"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118946">
<div class="phpcode"><code><span class="html">Part of my diploma thesis was to create web interface to command device via SNMP. So I create my own level of abstraction over SNMP class:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Snmp library which add one level of abstraction to snmp native library.<br /> * It adds functionality to work with module PicoIP.With this library you can:<br /> * 1.Activate/deactive defined pin;<br /> * 2.Get status of all pins.<br /> * <br /> * When make an instance you should pass to the constructor key word which will<br /> * make the library create an object with necessary properetis and access permissions.<br /> * <br /> * Private properties set some of configurations:<br /> * Host is IP address of the divece which we will command.<br /> * Two passwords are set for reading and writing.<br /> * Version of snmp protocol that we will use is version 1.<br /> * <br /> * @author Radoslav Madjev<br /> * @year 2016<br /> * @version 1.0 beta<br /> * <br /> * <br /> */<br /></span><span class="keyword">class </span><span class="default">snmp_lib </span><span class="keyword">{<br /><br />    private </span><span class="default">$snmpInstance</span><span class="keyword">;<br />    private </span><span class="default">$VERSION </span><span class="keyword">= </span><span class="default">SNMP</span><span class="keyword">::</span><span class="default">VERSION_1</span><span class="keyword">;<br />    private </span><span class="default">$HOST </span><span class="keyword">= </span><span class="string">'192.168.0.150'</span><span class="keyword">;<br />    private </span><span class="default">$passwordRead </span><span class="keyword">= </span><span class="string">'000000000000'</span><span class="keyword">;<br />    private </span><span class="default">$passwordWrite </span><span class="keyword">= </span><span class="string">'private'</span><span class="keyword">;<br />    private </span><span class="default">$releys </span><span class="keyword">= array(</span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'1.3.6.1.4.1.19865.1.2.1.1.0'</span><span class="keyword">,<br />        </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'1.3.6.1.4.1.19865.1.2.1.2.0'</span><span class="keyword">);<br />    private </span><span class="default">$allPorts </span><span class="keyword">= array(</span><span class="string">'3' </span><span class="keyword">=&gt; </span><span class="string">'1.3.6.1.4.1.19865.1.2.1.33.0'</span><span class="keyword">,<br />        </span><span class="string">'5' </span><span class="keyword">=&gt; </span><span class="string">'1.3.6.1.4.1.19865.1.2.2.33.0'</span><span class="keyword">);<br /><br />    </span><span class="comment">/**<br />     * Create instance of SNMP native class, based on actions that we will<br />     * perform.<br />     * <br />     * @param string $action<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$action</span><span class="keyword">) {<br />        if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$action</span><span class="keyword">, array(</span><span class="string">'read'</span><span class="keyword">, </span><span class="string">'write'</span><span class="keyword">))) {<br />            if (</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$action</span><span class="keyword">, </span><span class="string">'read'</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">) {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_read</span><span class="keyword">();<br />            } else {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_write</span><span class="keyword">();<br />            }<br />        }<br />    }<br /><br />    </span><span class="comment">/**<br />     * Create instance with reading permissions.<br />     */<br />    </span><span class="keyword">private function </span><span class="default">_read</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">snmpInstance </span><span class="keyword">= new </span><span class="default">SNMP</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">VERSION</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">HOST</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">passwordRead</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * Create instance with writing permissions.<br />     */<br />    </span><span class="keyword">private function </span><span class="default">_write</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">snmpInstance </span><span class="keyword">= new </span><span class="default">SNMP</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">VERSION</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">HOST</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">passwordWrite</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * Close snmp session.<br />     * <br />     * @return boolean<br />     */<br />    </span><span class="keyword">public function </span><span class="default">closeSession</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">snmpInstance</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />    }<br /><br />    </span><span class="comment">/**<br />     * Set integer 1 as value of defined pin.<br />     */<br />    </span><span class="keyword">public function </span><span class="default">activate</span><span class="keyword">(</span><span class="default">$relay</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">snmpInstance</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">releys</span><span class="keyword">[</span><span class="default">$relay</span><span class="keyword">], </span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'1'</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * Set integer 0 as value of defined pin.<br />     */<br />    </span><span class="keyword">public function </span><span class="default">deactivate</span><span class="keyword">(</span><span class="default">$relay</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">snmpInstance</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">releys</span><span class="keyword">[</span><span class="default">$relay</span><span class="keyword">], </span><span class="string">'i'</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * Get pin status of all ports of the module.<br />     * <br />     * @return array<br />     */<br />    </span><span class="keyword">public function </span><span class="default">getAllPortsStatus</span><span class="keyword">() {<br />        </span><span class="default">$allPins </span><span class="keyword">= array();<br />        foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">allPorts </span><span class="keyword">as </span><span class="default">$number </span><span class="keyword">=&gt; </span><span class="default">$port</span><span class="keyword">) {<br />            </span><span class="comment">//get active pins as 8-bit integer of defined port<br />            </span><span class="default">$getbits </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">snmpInstance</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">$port</span><span class="keyword">);<br />            </span><span class="default">$bits </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'INTEGER: '</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$getbits</span><span class="keyword">);<br />            </span><span class="comment">//get pins status<br />            </span><span class="default">$pinsStatus </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_getActivePins</span><span class="keyword">(</span><span class="default">$bits</span><span class="keyword">);<br />            </span><span class="default">$allPins</span><span class="keyword">[</span><span class="default">$number</span><span class="keyword">] = </span><span class="default">$pinsStatus</span><span class="keyword">;<br />        }<br /><br />        return </span><span class="default">$allPins</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />     * Make bitwise operation which will determine,<br />     * which are active pins.<br />     * <br />     * @param int $bits<br />     * @return array<br />     */<br />    </span><span class="keyword">private function </span><span class="default">_getActivePins</span><span class="keyword">(</span><span class="default">$bits</span><span class="keyword">) {<br /><br />        </span><span class="default">$bitMapping </span><span class="keyword">= array(<br />            </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,<br />            </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">,<br />            </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">,<br />            </span><span class="default">4 </span><span class="keyword">=&gt; </span><span class="default">8</span><span class="keyword">,<br />            </span><span class="default">5 </span><span class="keyword">=&gt; </span><span class="default">16</span><span class="keyword">,<br />            </span><span class="default">6 </span><span class="keyword">=&gt; </span><span class="default">32</span><span class="keyword">,<br />            </span><span class="default">7 </span><span class="keyword">=&gt; </span><span class="default">64</span><span class="keyword">,<br />            </span><span class="default">8 </span><span class="keyword">=&gt; </span><span class="default">128<br />        </span><span class="keyword">);<br /><br />        </span><span class="default">$pinsStatus </span><span class="keyword">= array();<br /><br />        foreach (</span><span class="default">$bitMapping </span><span class="keyword">as </span><span class="default">$int </span><span class="keyword">=&gt; </span><span class="default">$bit</span><span class="keyword">) {<br />            if ((</span><span class="default">$bits </span><span class="keyword">&amp; </span><span class="default">$bit</span><span class="keyword">) == </span><span class="default">$bit</span><span class="keyword">) {<br />                </span><span class="default">$pinsStatus</span><span class="keyword">[</span><span class="default">$int</span><span class="keyword">] = </span><span class="default">true</span><span class="keyword">;<br />                continue;<br />            }<br />            </span><span class="default">$pinsStatus</span><span class="keyword">[</span><span class="default">$int</span><span class="keyword">] = </span><span class="default">false</span><span class="keyword">;<br />        }<br /><br />        return </span><span class="default">$pinsStatus</span><span class="keyword">;<br />    }<br /><br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />I have one module that receive SNMP request and send a command to relays. Also these are example scripts that use this lib:<br />Turn on script:<br /><span class="default">&lt;?php<br /></span><span class="keyword">require_once </span><span class="string">'snmp_lib.php'</span><span class="keyword">;<br /><br /></span><span class="default">$snmp </span><span class="keyword">= new </span><span class="default">snmp_lib</span><span class="keyword">(</span><span class="string">'write'</span><span class="keyword">);<br /></span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">activate</span><span class="keyword">(</span><span class="default">$getRelayNumber</span><span class="keyword">);<br /></span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">closeSession</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Turn off script:<br /><span class="default">&lt;?php<br /></span><span class="keyword">require_once </span><span class="string">'snmp_lib.php'</span><span class="keyword">;<br /><br /></span><span class="default">$snmp </span><span class="keyword">= new </span><span class="default">snmp_lib</span><span class="keyword">(</span><span class="string">'write'</span><span class="keyword">);<br /></span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">deactivate</span><span class="keyword">(</span><span class="default">$getRelayNumber</span><span class="keyword">);<br /></span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">closeSession</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Script that get all ports status:<br /><span class="default">&lt;?php<br /></span><span class="keyword">require_once </span><span class="string">'snmp_lib.php'</span><span class="keyword">;<br /><br /></span><span class="default">$snmp </span><span class="keyword">= new </span><span class="default">snmp_lib</span><span class="keyword">(</span><span class="string">'read'</span><span class="keyword">);<br /></span><span class="default">$getActive </span><span class="keyword">= </span><span class="default">$snmp</span><span class="keyword">-&gt;</span><span class="default">getAllPortsStatus</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.snmp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.snmp.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.snmp.php">SNMP</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.snmp.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="snmp.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="snmp.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.snmp.php" title="SNMP Functions">SNMP Functions</a>
                        </li>
                                                <li class="current">
                            <a href="class.snmp.php" title="SNMP">SNMP</a>
                        </li>
                                                <li class="">
                            <a href="class.snmpexception.php" title="SNMPException">SNMPException</a>
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
