<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: RarEntry - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.rarentry.php">
 <link rel="shorturl" href="https://www.php.net/rarentry">
 <link rel="alternate" href="https://www.php.net/rarentry" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.rar.php">
 <link rel="prev" href="https://www.php.net/manual/en/rararchive.tostring.php">
 <link rel="next" href="https://www.php.net/manual/en/rarentry.extract.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.rarentry.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.rarentry.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.rarentry.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.rarentry.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.rarentry.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.rarentry.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.rarentry.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.rarentry.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.rarentry.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.rarentry.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.rarentry.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The RarEntry class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: RarEntry - Manual" />
<meta name="twitter:description" content="The RarEntry class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: RarEntry - Manual" />
<meta itemprop="description" content="The RarEntry class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The RarEntry class" />

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
        <a href="rarentry.extract.php">
          RarEntry::extract &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="rararchive.tostring.php">
          &laquo; RarArchive::__toString        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.rar.php'>Rar</a></li>      </ul>
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
            <option value='en/class.rarentry.php' selected="selected">English</option>
            <option value='de/class.rarentry.php'>German</option>
            <option value='es/class.rarentry.php'>Spanish</option>
            <option value='fr/class.rarentry.php'>French</option>
            <option value='it/class.rarentry.php'>Italian</option>
            <option value='ja/class.rarentry.php'>Japanese</option>
            <option value='pt_BR/class.rarentry.php'>Brazilian Portuguese</option>
            <option value='ru/class.rarentry.php'>Russian</option>
            <option value='tr/class.rarentry.php'>Turkish</option>
            <option value='uk/class.rarentry.php'>Ukrainian</option>
            <option value='zh/class.rarentry.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.rarentry" class="reference">

 <h1 class="title">The <span class="classname"><a href="class.rarentry.php" class="classname">RarEntry</a></span> class</h1>
 

 <div class="partintro"><p class="verinfo">(PECL rar &gt;= 0.1)</p>


  <div class="section" id="rarentry.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    A RAR entry, representing a directory or a compressed file inside a RAR archive.
   </p>
  </div>


  <div class="section" id="rarentry.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">RarEntry</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.host-msdos"><var class="varname">HOST_MSDOS</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.host-os2"><var class="varname">HOST_OS2</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.host-win32"><var class="varname">HOST_WIN32</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.host-unix"><var class="varname">HOST_UNIX</var></a></var><span class="initializer"> = 3</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.host-macos"><var class="varname">HOST_MACOS</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.host-beos"><var class="varname">HOST_BEOS</var></a></var><span class="initializer"> = 5</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-readonly"><var class="varname">ATTRIBUTE_WIN_READONLY</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-hidden"><var class="varname">ATTRIBUTE_WIN_HIDDEN</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-system"><var class="varname">ATTRIBUTE_WIN_SYSTEM</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-directory"><var class="varname">ATTRIBUTE_WIN_DIRECTORY</var></a></var><span class="initializer"> = 16</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-archive"><var class="varname">ATTRIBUTE_WIN_ARCHIVE</var></a></var><span class="initializer"> = 32</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-device"><var class="varname">ATTRIBUTE_WIN_DEVICE</var></a></var><span class="initializer"> = 64</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-normal"><var class="varname">ATTRIBUTE_WIN_NORMAL</var></a></var><span class="initializer"> = 128</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-temporary"><var class="varname">ATTRIBUTE_WIN_TEMPORARY</var></a></var><span class="initializer"> = 256</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-sparse-file"><var class="varname">ATTRIBUTE_WIN_SPARSE_FILE</var></a></var><span class="initializer"> = 512</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-reparse-point"><var class="varname">ATTRIBUTE_WIN_REPARSE_POINT</var></a></var><span class="initializer"> = 1024</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-compressed"><var class="varname">ATTRIBUTE_WIN_COMPRESSED</var></a></var><span class="initializer"> = 2048</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-offline"><var class="varname">ATTRIBUTE_WIN_OFFLINE</var></a></var><span class="initializer"> = 4096</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-not-content-indexed"><var class="varname">ATTRIBUTE_WIN_NOT_CONTENT_INDEXED</var></a></var><span class="initializer"> = 8192</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-encrypted"><var class="varname">ATTRIBUTE_WIN_ENCRYPTED</var></a></var><span class="initializer"> = 16384</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-win-virtual"><var class="varname">ATTRIBUTE_WIN_VIRTUAL</var></a></var><span class="initializer"> = 65536</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-world-execute"><var class="varname">ATTRIBUTE_UNIX_WORLD_EXECUTE</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-world-write"><var class="varname">ATTRIBUTE_UNIX_WORLD_WRITE</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-world-read"><var class="varname">ATTRIBUTE_UNIX_WORLD_READ</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-group-execute"><var class="varname">ATTRIBUTE_UNIX_GROUP_EXECUTE</var></a></var><span class="initializer"> = 8</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-group-write"><var class="varname">ATTRIBUTE_UNIX_GROUP_WRITE</var></a></var><span class="initializer"> = 16</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-group-read"><var class="varname">ATTRIBUTE_UNIX_GROUP_READ</var></a></var><span class="initializer"> = 32</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-owner-execute"><var class="varname">ATTRIBUTE_UNIX_OWNER_EXECUTE</var></a></var><span class="initializer"> = 64</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-owner-write"><var class="varname">ATTRIBUTE_UNIX_OWNER_WRITE</var></a></var><span class="initializer"> = 128</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-owner-read"><var class="varname">ATTRIBUTE_UNIX_OWNER_READ</var></a></var><span class="initializer"> = 256</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-sticky"><var class="varname">ATTRIBUTE_UNIX_STICKY</var></a></var><span class="initializer"> = 512</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-setgid"><var class="varname">ATTRIBUTE_UNIX_SETGID</var></a></var><span class="initializer"> = 1024</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-setuid"><var class="varname">ATTRIBUTE_UNIX_SETUID</var></a></var><span class="initializer"> = 2048</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet"><var class="varname">ATTRIBUTE_UNIX_FINAL_QUARTET</var></a></var><span class="initializer"> = 61440</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-fifo"><var class="varname">ATTRIBUTE_UNIX_FIFO</var></a></var><span class="initializer"> = 4096</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-char-dev"><var class="varname">ATTRIBUTE_UNIX_CHAR_DEV</var></a></var><span class="initializer"> = 8192</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-directory"><var class="varname">ATTRIBUTE_UNIX_DIRECTORY</var></a></var><span class="initializer"> = 16384</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-block-dev"><var class="varname">ATTRIBUTE_UNIX_BLOCK_DEV</var></a></var><span class="initializer"> = 24576</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-regular-file"><var class="varname">ATTRIBUTE_UNIX_REGULAR_FILE</var></a></var><span class="initializer"> = 32768</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-sym-link"><var class="varname">ATTRIBUTE_UNIX_SYM_LINK</var></a></var><span class="initializer"> = 40960</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.rarentry.php#rarentry.constants.attribute-unix-socket"><var class="varname">ATTRIBUTE_UNIX_SOCKET</var></a></var><span class="initializer"> = 49152</span>;</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
    <span class="modifier">public</span> <span class="methodname"><a href="rarentry.extract.php" class="methodname">extract</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dir</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filepath</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$password</code><span class="initializer"> = NULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$extended_data</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.getattr.php" class="methodname">getAttr</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.getcrc.php" class="methodname">getCrc</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.getfiletime.php" class="methodname">getFileTime</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.gethostos.php" class="methodname">getHostOs</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.getmethod.php" class="methodname">getMethod</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.getname.php" class="methodname">getName</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.getpackedsize.php" class="methodname">getPackedSize</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.getstream.php" class="methodname">getStream</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$password</code><span class="initializer"> = ?</span></span>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.getunpackedsize.php" class="methodname">getUnpackedSize</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.getversion.php" class="methodname">getVersion</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.isdirectory.php" class="methodname">isDirectory</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.isencrypted.php" class="methodname">isEncrypted</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="rarentry.tostring.php" class="methodname">__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

   }</div>


  </div>


  <div class="section" id="rarentry.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>

    
     <dt id="rarentry.constants.host-msdos"><strong><code><a href="class.rarentry.php#rarentry.constants.host-msdos">RarEntry::HOST_MSDOS</a></code></strong></dt>
     <dd>
      <p class="para">If the return value of <span class="methodname"><a href="rarentry.gethostos.php" class="methodname">RarEntry::getHostOs()</a></span> equals this constant, MS-DOS was used to
      add this entry. Use instead of <strong><code><a href="rar.constants.php#constant.rar-host-msdos">RAR_HOST_MSDOS</a></code></strong>.</p>
     </dd>
    

    
     <dt id="rarentry.constants.host-os2"><strong><code><a href="class.rarentry.php#rarentry.constants.host-os2">RarEntry::HOST_OS2</a></code></strong></dt>
     <dd>
      <p class="para">If the return value of <span class="methodname"><a href="rarentry.gethostos.php" class="methodname">RarEntry::getHostOs()</a></span> equals this constant, OS/2 was used to
      add this entry. Intended to replace <strong><code><a href="rar.constants.php#constant.rar-host-os2">RAR_HOST_OS2</a></code></strong>.</p>
     </dd>
    

    
     <dt id="rarentry.constants.host-win32"><strong><code><a href="class.rarentry.php#rarentry.constants.host-win32">RarEntry::HOST_WIN32</a></code></strong></dt>
     <dd>
      <p class="para">If the return value of <span class="methodname"><a href="rarentry.gethostos.php" class="methodname">RarEntry::getHostOs()</a></span> equals this constant, Microsoft Windows was used to
      add this entry. Intended to replace <strong><code><a href="rar.constants.php#constant.rar-host-win32">RAR_HOST_WIN32</a></code></strong>.</p>
     </dd>
    

    
     <dt id="rarentry.constants.host-unix"><strong><code><a href="class.rarentry.php#rarentry.constants.host-unix">RarEntry::HOST_UNIX</a></code></strong></dt>
     <dd>
      <p class="para">If the return value of <span class="methodname"><a href="rarentry.gethostos.php" class="methodname">RarEntry::getHostOs()</a></span> equals this constant, an unspecified UNIX OS was used to
      add this entry. Intended to replace <strong><code><a href="rar.constants.php#constant.rar-host-unix">RAR_HOST_UNIX</a></code></strong>.</p>
     </dd>
    

    
     <dt id="rarentry.constants.host-macos"><strong><code><a href="class.rarentry.php#rarentry.constants.host-macos">RarEntry::HOST_MACOS</a></code></strong></dt>
     <dd>
      <p class="para">If the return value of <span class="methodname"><a href="rarentry.gethostos.php" class="methodname">RarEntry::getHostOs()</a></span> equals this constant, Mac OS was used to
      add this entry.</p>
     </dd>
    

    
     <dt id="rarentry.constants.host-beos"><strong><code><a href="class.rarentry.php#rarentry.constants.host-beos">RarEntry::HOST_BEOS</a></code></strong></dt>
     <dd>
      <p class="para">If the return value of <span class="methodname"><a href="rarentry.gethostos.php" class="methodname">RarEntry::getHostOs()</a></span> equals this constant, BeOS was used to
      add this entry. Intended to replace <strong><code><a href="rar.constants.php#constant.rar-host-beos">RAR_HOST_BEOS</a></code></strong>.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-readonly"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-readonly">RarEntry::ATTRIBUTE_WIN_READONLY</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with a read-only attribute. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-hidden"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-hidden">RarEntry::ATTRIBUTE_WIN_HIDDEN</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with a hidden attribute. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-system"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-system">RarEntry::ATTRIBUTE_WIN_SYSTEM</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with a system attribute. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-directory"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-directory">RarEntry::ATTRIBUTE_WIN_DIRECTORY</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with a directory attribute (entry is a directory). To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows. See also
      <span class="methodname"><a href="rarentry.isdirectory.php" class="methodname">RarEntry::isDirectory()</a></span>, which also works with entries that were not added in WinRAR.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-archive"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-archive">RarEntry::ATTRIBUTE_WIN_ARCHIVE</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with an archive attribute. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-device"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-device">RarEntry::ATTRIBUTE_WIN_DEVICE</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with a device attribute. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-normal"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-normal">RarEntry::ATTRIBUTE_WIN_NORMAL</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with a normal file attribute (entry is NOT a directory). To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows. See also
      <span class="methodname"><a href="rarentry.isdirectory.php" class="methodname">RarEntry::isDirectory()</a></span>, which also works with entries that were not added in WinRAR.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-temporary"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-temporary">RarEntry::ATTRIBUTE_WIN_TEMPORARY</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with a temporary attribute. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-sparse-file"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-sparse-file">RarEntry::ATTRIBUTE_WIN_SPARSE_FILE</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with a sparse file attribute (file is an NTFS sparse file). To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-reparse-point"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-reparse-point">RarEntry::ATTRIBUTE_WIN_REPARSE_POINT</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with a reparse point attribute (entry is an NTFS reparse point, e.g. a
      directory junction or a mount file system). To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-compressed"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-compressed">RarEntry::ATTRIBUTE_WIN_COMPRESSED</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with a compressed attribute (NTFS only). To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-offline"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-offline">RarEntry::ATTRIBUTE_WIN_OFFLINE</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with an offline attribute (entry is offline and not accessible). To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-not-content-indexed"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-not-content-indexed">RarEntry::ATTRIBUTE_WIN_NOT_CONTENT_INDEXED</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with a not content indexed attribute (entry is to be indexed). To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-encrypted"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-encrypted">RarEntry::ATTRIBUTE_WIN_ENCRYPTED</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with an encrypted attribute (NTFS only). To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-win-virtual"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-win-virtual">RarEntry::ATTRIBUTE_WIN_VIRTUAL</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a Windows entry with a virtual attribute. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is Microsoft Windows.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-world-execute"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-world-execute">RarEntry::ATTRIBUTE_UNIX_WORLD_EXECUTE</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a UNIX entry that is world executable. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-world-write"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-world-write">RarEntry::ATTRIBUTE_UNIX_WORLD_WRITE</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a UNIX entry that is world writable. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-world-read"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-world-read">RarEntry::ATTRIBUTE_UNIX_WORLD_READ</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a UNIX entry that is world readable. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-group-execute"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-group-execute">RarEntry::ATTRIBUTE_UNIX_GROUP_EXECUTE</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a UNIX entry that is group executable. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-group-write"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-group-write">RarEntry::ATTRIBUTE_UNIX_GROUP_WRITE</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a UNIX entry that is group writable. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-group-read"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-group-read">RarEntry::ATTRIBUTE_UNIX_GROUP_READ</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a UNIX entry that is group readable. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-owner-execute"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-owner-execute">RarEntry::ATTRIBUTE_UNIX_OWNER_EXECUTE</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a UNIX entry that is owner executable. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-owner-write"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-owner-write">RarEntry::ATTRIBUTE_UNIX_OWNER_WRITE</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a UNIX entry that is owner writable. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-owner-read"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-owner-read">RarEntry::ATTRIBUTE_UNIX_OWNER_READ</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents a UNIX entry that is owner readable. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-sticky"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-sticky">RarEntry::ATTRIBUTE_UNIX_STICKY</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents the UNIX sticky bit. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-setgid"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-setgid">RarEntry::ATTRIBUTE_UNIX_SETGID</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents the UNIX setgid attribute. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-setuid"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-setuid">RarEntry::ATTRIBUTE_UNIX_SETUID</a></code></strong></dt>
     <dd>
      <p class="para">Bit that represents the UNIX setuid attribute. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-final-quartet"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet">RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</a></code></strong></dt>
     <dd>
      <p class="para">Mask to isolate the last four bits (nibble) of UNIX attributes
      (_S_IFMT, the type of file mask). To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX and with the
      constants <a href="class.rarentry.php#rarentry.constants.attribute-unix-fifo" class="link"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-fifo">RarEntry::ATTRIBUTE_UNIX_FIFO</a></code></strong></a>,
      <a href="class.rarentry.php#rarentry.constants.attribute-unix-char-dev" class="link"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-char-dev">RarEntry::ATTRIBUTE_UNIX_CHAR_DEV</a></code></strong></a>,
      <a href="class.rarentry.php#rarentry.constants.attribute-unix-directory" class="link"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-directory">RarEntry::ATTRIBUTE_UNIX_DIRECTORY</a></code></strong></a>,
      <a href="class.rarentry.php#rarentry.constants.attribute-unix-block-dev" class="link"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-block-dev">RarEntry::ATTRIBUTE_UNIX_BLOCK_DEV</a></code></strong></a>,
      <a href="class.rarentry.php#rarentry.constants.attribute-unix-regular-file" class="link"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-regular-file">RarEntry::ATTRIBUTE_UNIX_REGULAR_FILE</a></code></strong></a>,
      <a href="class.rarentry.php#rarentry.constants.attribute-unix-sym-link" class="link"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-sym-link">RarEntry::ATTRIBUTE_UNIX_SYM_LINK</a></code></strong></a> and
      <a href="class.rarentry.php#rarentry.constants.attribute-unix-socket" class="link"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-socket">RarEntry::ATTRIBUTE_UNIX_SOCKET</a></code></strong></a>.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-fifo"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-fifo">RarEntry::ATTRIBUTE_UNIX_FIFO</a></code></strong></dt>
     <dd>
      <p class="para">Unix FIFOs will have attributes whose last four bits have this value. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX and with the
      constant <a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet" class="link">
      <strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet">RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</a></code></strong></a>.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-char-dev"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-char-dev">RarEntry::ATTRIBUTE_UNIX_CHAR_DEV</a></code></strong></dt>
     <dd>
      <p class="para">Unix character devices will have attributes whose last four bits have this value. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX and with the
      constant <a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet" class="link">
      <strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet">RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</a></code></strong></a>.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-directory"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-directory">RarEntry::ATTRIBUTE_UNIX_DIRECTORY</a></code></strong></dt>
     <dd>
      <p class="para">Unix directories will have attributes whose last four bits have this value. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX and with the
      constant <a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet" class="link">
      <strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet">RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</a></code></strong></a>. See also
      <span class="methodname"><a href="rarentry.isdirectory.php" class="methodname">RarEntry::isDirectory()</a></span>, which also works with entries that
      were added in other operating systems.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-block-dev"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-block-dev">RarEntry::ATTRIBUTE_UNIX_BLOCK_DEV</a></code></strong></dt>
     <dd>
      <p class="para">Unix block devices will have attributes whose last four bits have this value. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX and with the
      constant <a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet" class="link">
      <strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet">RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</a></code></strong></a>.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-regular-file"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-regular-file">RarEntry::ATTRIBUTE_UNIX_REGULAR_FILE</a></code></strong></dt>
     <dd>
      <p class="para">Unix regular files (not directories) will have attributes whose last four bits have this value. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX and with the
      constant <a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet" class="link">
      <strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet">RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</a></code></strong></a>. See also
      <span class="methodname"><a href="rarentry.isdirectory.php" class="methodname">RarEntry::isDirectory()</a></span>, which also works with entries that
      were added in other operating systems.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-sym-link"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-sym-link">RarEntry::ATTRIBUTE_UNIX_SYM_LINK</a></code></strong></dt>
     <dd>
      <p class="para">Unix symbolic links will have attributes whose last four bits have this value. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX and with the
      constant <a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet" class="link">
      <strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet">RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</a></code></strong></a>.</p>
     </dd>
    

    
     <dt id="rarentry.constants.attribute-unix-socket"><strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-socket">RarEntry::ATTRIBUTE_UNIX_SOCKET</a></code></strong></dt>
     <dd>
      <p class="para">Unix sockets will have attributes whose last four bits have this value. To be used with
      <span class="methodname"><a href="rarentry.getattr.php" class="methodname">RarEntry::getAttr()</a></span> on entries whose host OS is UNIX and with the
      constant <a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet" class="link">
      <strong><code><a href="class.rarentry.php#rarentry.constants.attribute-unix-final-quartet">RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</a></code></strong></a>.</p>
     </dd>
    

   </dl>
  </div>



 </div>

 
































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="rarentry.extract.php">RarEntry::extract</a> — Extract entry from the archive</li><li><a href="rarentry.getattr.php">RarEntry::getAttr</a> — Get attributes of the entry</li><li><a href="rarentry.getcrc.php">RarEntry::getCrc</a> — Get CRC of the entry</li><li><a href="rarentry.getfiletime.php">RarEntry::getFileTime</a> — Get entry last modification time</li><li><a href="rarentry.gethostos.php">RarEntry::getHostOs</a> — Get entry host OS</li><li><a href="rarentry.getmethod.php">RarEntry::getMethod</a> — Get pack method of the entry</li><li><a href="rarentry.getname.php">RarEntry::getName</a> — Get name of the entry</li><li><a href="rarentry.getpackedsize.php">RarEntry::getPackedSize</a> — Get packed size of the entry</li><li><a href="rarentry.getstream.php">RarEntry::getStream</a> — Get file handler for entry</li><li><a href="rarentry.getunpackedsize.php">RarEntry::getUnpackedSize</a> — Get unpacked size of the entry</li><li><a href="rarentry.getversion.php">RarEntry::getVersion</a> — Get minimum version of RAR program required to unpack the entry</li><li><a href="rarentry.isdirectory.php">RarEntry::isDirectory</a> — Test whether an entry represents a directory</li><li><a href="rarentry.isencrypted.php">RarEntry::isEncrypted</a> — Test whether an entry is encrypted</li><li><a href="rarentry.tostring.php">RarEntry::__toString</a> — Get text representation of entry</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/rar/rarentry.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.rarentry%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.rarentry&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.rarentry.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.rar.php">Rar</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.rar.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="rar.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="rar.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="rar.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.rar.php" title="Rar Functions">Rar Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.rararchive.php" title="RarArchive">RarArchive</a>
                        </li>
                                                <li class="current">
                            <a href="class.rarentry.php" title="RarEntry">RarEntry</a>
                        </li>
                                                <li class="">
                            <a href="class.rarexception.php" title="RarException">RarException</a>
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
