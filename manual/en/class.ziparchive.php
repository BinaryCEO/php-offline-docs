<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ZipArchive - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.ziparchive.php">
 <link rel="shorturl" href="https://www.php.net/ziparchive">
 <link rel="alternate" href="https://www.php.net/ziparchive" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.zip.php">
 <link rel="prev" href="https://www.php.net/manual/en/zip.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/ziparchive.addemptydir.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.ziparchive.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.ziparchive.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.ziparchive.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.ziparchive.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.ziparchive.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.ziparchive.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.ziparchive.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.ziparchive.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.ziparchive.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.ziparchive.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.ziparchive.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The ZipArchive class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ZipArchive - Manual" />
<meta name="twitter:description" content="The ZipArchive class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ZipArchive - Manual" />
<meta itemprop="description" content="The ZipArchive class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The ZipArchive class" />

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
        <a href="ziparchive.addemptydir.php">
          ZipArchive::addEmptyDir &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="zip.examples.php">
          &laquo; Examples        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.zip.php'>Zip</a></li>      </ul>
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
            <option value='en/class.ziparchive.php' selected="selected">English</option>
            <option value='de/class.ziparchive.php'>German</option>
            <option value='es/class.ziparchive.php'>Spanish</option>
            <option value='fr/class.ziparchive.php'>French</option>
            <option value='it/class.ziparchive.php'>Italian</option>
            <option value='ja/class.ziparchive.php'>Japanese</option>
            <option value='pt_BR/class.ziparchive.php'>Brazilian Portuguese</option>
            <option value='ru/class.ziparchive.php'>Russian</option>
            <option value='tr/class.ziparchive.php'>Turkish</option>
            <option value='uk/class.ziparchive.php'>Ukrainian</option>
            <option value='zh/class.ziparchive.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.ziparchive" class="reference">
 <h1 class="title">The <span class="classname"><a href="class.ziparchive.php" class="classname">ZipArchive</a></span> class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.1.0)</p>
 

  <div class="section" id="ziparchive.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    A file archive, compressed with Zip.
   </p>
  </div>

 
  <div class="section" id="ziparchive.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">ZipArchive</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.countable.php" class="interfacename">Countable</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.create"><var class="varname">CREATE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.excl"><var class="varname">EXCL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.checkcons"><var class="varname">CHECKCONS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.overwrite"><var class="varname">OVERWRITE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.rdonly"><var class="varname">RDONLY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-nocase"><var class="varname">FL_NOCASE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-nodir"><var class="varname">FL_NODIR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-compressed"><var class="varname">FL_COMPRESSED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-unchanged"><var class="varname">FL_UNCHANGED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-recompress"><var class="varname">FL_RECOMPRESS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-encrypted"><var class="varname">FL_ENCRYPTED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-overwrite"><var class="varname">FL_OVERWRITE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-local"><var class="varname">FL_LOCAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-central"><var class="varname">FL_CENTRAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-enc-guess"><var class="varname">FL_ENC_GUESS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-enc-raw"><var class="varname">FL_ENC_RAW</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-enc-strict"><var class="varname">FL_ENC_STRICT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-enc-utf-8"><var class="varname">FL_ENC_UTF_8</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-enc-cp437"><var class="varname">FL_ENC_CP437</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.fl-open-file-now"><var class="varname">FL_OPEN_FILE_NOW</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-default"><var class="varname">CM_DEFAULT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-store"><var class="varname">CM_STORE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-shrink"><var class="varname">CM_SHRINK</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-reduce-1"><var class="varname">CM_REDUCE_1</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-reduce-2"><var class="varname">CM_REDUCE_2</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-reduce-3"><var class="varname">CM_REDUCE_3</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-reduce-4"><var class="varname">CM_REDUCE_4</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-implode"><var class="varname">CM_IMPLODE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-deflate"><var class="varname">CM_DEFLATE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-deflate64"><var class="varname">CM_DEFLATE64</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-pkware-implode"><var class="varname">CM_PKWARE_IMPLODE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-bzip2"><var class="varname">CM_BZIP2</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-lzma"><var class="varname">CM_LZMA</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-lzma2"><var class="varname">CM_LZMA2</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-zstd"><var class="varname">CM_ZSTD</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-xz"><var class="varname">CM_XZ</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-terse"><var class="varname">CM_TERSE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-lz77"><var class="varname">CM_LZ77</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-wavpack"><var class="varname">CM_WAVPACK</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.cm-ppmd"><var class="varname">CM_PPMD</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-ok"><var class="varname">ER_OK</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-multidisk"><var class="varname">ER_MULTIDISK</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-rename"><var class="varname">ER_RENAME</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-close"><var class="varname">ER_CLOSE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-seek"><var class="varname">ER_SEEK</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-read"><var class="varname">ER_READ</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-write"><var class="varname">ER_WRITE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-crc"><var class="varname">ER_CRC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-zipclosed"><var class="varname">ER_ZIPCLOSED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-noent"><var class="varname">ER_NOENT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-exists"><var class="varname">ER_EXISTS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-open"><var class="varname">ER_OPEN</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-tmpopen"><var class="varname">ER_TMPOPEN</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-zlib"><var class="varname">ER_ZLIB</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-memory"><var class="varname">ER_MEMORY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-changed"><var class="varname">ER_CHANGED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-compnotsupp"><var class="varname">ER_COMPNOTSUPP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-eof"><var class="varname">ER_EOF</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-inval"><var class="varname">ER_INVAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-nozip"><var class="varname">ER_NOZIP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-internal"><var class="varname">ER_INTERNAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-incons"><var class="varname">ER_INCONS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-remove"><var class="varname">ER_REMOVE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-deleted"><var class="varname">ER_DELETED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-encrnotsupp"><var class="varname">ER_ENCRNOTSUPP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-rdonly"><var class="varname">ER_RDONLY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-nopasswd"><var class="varname">ER_NOPASSWD</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-wrongpasswd"><var class="varname">ER_WRONGPASSWD</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-opnotsupp"><var class="varname">ER_OPNOTSUPP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-inuse"><var class="varname">ER_INUSE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-tell"><var class="varname">ER_TELL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-compressed-data"><var class="varname">ER_COMPRESSED_DATA</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-cancelled"><var class="varname">ER_CANCELLED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-data-length"><var class="varname">ER_DATA_LENGTH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-not-allowed"><var class="varname">ER_NOT_ALLOWED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.er-truncated-zip"><var class="varname">ER_TRUNCATED_ZIP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.afl-rdonly"><var class="varname">AFL_RDONLY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.afl-is-torrentzip"><var class="varname">AFL_IS_TORRENTZIP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.afl-want-torrentzip"><var class="varname">AFL_WANT_TORRENTZIP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.afl-create-or-keep-file-for-empty-archive"><var class="varname">AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_DOS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_AMIGA</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_OPENVMS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_UNIX</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_VM_CMS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_ATARI_ST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_OS_2</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_MACINTOSH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_Z_SYSTEM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_CPM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_WINDOWS_NTFS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_MVS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_VSE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_ACORN_RISC</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_VFAT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_ALTERNATE_MVS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_BEOS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_TANDEM</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_OS_400</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_OS_X</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.opsys"><var class="varname">OPSYS_DEFAULT</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.em-none"><var class="varname">EM_NONE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.em-trad-pkware"><var class="varname">EM_TRAD_PKWARE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.em-aes-128"><var class="varname">EM_AES_128</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.em-aes-192"><var class="varname">EM_AES_192</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.em-aes-256"><var class="varname">EM_AES_256</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.em-unknown"><var class="varname">EM_UNKNOWN</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.libzip-version"><var class="varname">LIBZIP_VERSION</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.length-to-end"><var class="varname">LENGTH_TO_END</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="zip.constants.php#ziparchive.constants.length-unchecked"><var class="varname">LENGTH_UNCHECKED</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.ziparchive.php#ziparchive.props.lastid">$<var class="varname">lastId</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.ziparchive.php#ziparchive.props.status">$<var class="varname">status</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.ziparchive.php#ziparchive.props.statussys">$<var class="varname">statusSys</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="varname"><a href="class.ziparchive.php#ziparchive.props.numfiles">$<var class="varname">numFiles</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.ziparchive.php#ziparchive.props.filename">$<var class="varname">filename</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">readonly</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="varname"><a href="class.ziparchive.php#ziparchive.props.comment">$<var class="varname">comment</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="ziparchive.addemptydir.php" class="methodname">addEmptyDir</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dirname</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.addfile.php" class="methodname">addFile</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filepath</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$entryname</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$start</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code><span class="initializer"> = ZipArchive::LENGTH_TO_END</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = ZipArchive::FL_OVERWRITE</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.addfromstring.php" class="methodname">addFromString</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$content</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = ZipArchive::FL_OVERWRITE</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.addglob.php" class="methodname">addGlob</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.addpattern.php" class="methodname">addPattern</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code><span class="initializer"> = &quot;.&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.clearerror.php" class="methodname">clearError</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.close.php" class="methodname">close</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.count.php" class="methodname">count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.deleteindex.php" class="methodname">deleteIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.deletename.php" class="methodname">deleteName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.extractto.php" class="methodname">extractTo</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pathto</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$files</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getarchivecomment.php" class="methodname">getArchiveComment</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getarchiveflag.php" class="methodname">getArchiveFlag</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flag</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getcommentindex.php" class="methodname">getCommentIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getcommentname.php" class="methodname">getCommentName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getexternalattributesindex.php" class="methodname">getExternalAttributesIndex</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$opsys</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$attr</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getexternalattributesname.php" class="methodname">getExternalAttributesName</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$opsys</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$attr</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getfromindex.php" class="methodname">getFromIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$len</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getfromname.php" class="methodname">getFromName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$len</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getnameindex.php" class="methodname">getNameIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getstatusstring.php" class="methodname">getStatusString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getstream.php" class="methodname">getStream</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getstreamindex.php" class="methodname">getStreamIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.getstreamname.php" class="methodname">getStreamName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="ziparchive.iscompressionmethoddupported.php" class="methodname">isCompressionMethodSupported</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$method</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$enc</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="ziparchive.isencryptionmethoddupported.php" class="methodname">isEncryptionMethodSupported</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$method</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$enc</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.locatename.php" class="methodname">locateName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.open.php" class="methodname">open</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.registercancelcallback.php" class="methodname">registerCancelCallback</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.registerprogresscallback.php" class="methodname">registerProgressCallback</a></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$rate</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.renameindex.php" class="methodname">renameIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$new_name</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.renamename.php" class="methodname">renameName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$new_name</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.replacefile.php" class="methodname">replaceFile</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filepath</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$start</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code><span class="initializer"> = ZipArchive::LENGTH_TO_END</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setarchivecomment.php" class="methodname">setArchiveComment</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$comment</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setarchiveflag.php" class="methodname">setArchiveFlag</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flag</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setcommentindex.php" class="methodname">setCommentIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$comment</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setcommentname.php" class="methodname">setCommentName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$comment</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setcompressionindex.php" class="methodname">setCompressionIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$method</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$compflags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setcompressionname.php" class="methodname">setCompressionName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$method</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$compflags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setencryptionindex.php" class="methodname">setEncryptionIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$method</code></span>, <span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$password</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setencryptionname.php" class="methodname">setEncryptionName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$method</code></span>, <span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$password</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setexternalattributesindex.php" class="methodname">setExternalAttributesIndex</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$opsys</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$attr</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setexternalattributesname.php" class="methodname">setExternalAttributesName</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$opsys</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$attr</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setmtimeindex.php" class="methodname">setMtimeIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timestamp</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setmtimename.php" class="methodname">setMtimeName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timestamp</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.setpassword.php" class="methodname">setPassword</a></span>(<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$password</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.statindex.php" class="methodname">statIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.statname.php" class="methodname">statName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.unchangeall.php" class="methodname">unchangeAll</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.unchangearchive.php" class="methodname">unchangeArchive</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.unchangeindex.php" class="methodname">unchangeIndex</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="ziparchive.unchangename.php" class="methodname">unchangeName</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>


  </div>


  <div class="section" id="ziparchive.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="ziparchive.props.lastid"><var class="varname">lastId</var></dt>
     <dd>
      <p class="para">Index value of last added entry (file or directory).
      Available as of PHP 8.0.0 and PECL zip 1.18.0.</p>
     </dd>
    
    
     <dt id="ziparchive.props.status"><var class="varname">status</var></dt>
     <dd>
      <p class="para">Status of the Zip Archive.
      Available for closed archive, as of PHP 8.0.0 and PECL zip 1.18.0.</p>
     </dd>
    
    
     <dt id="ziparchive.props.statussys"><var class="varname">statusSys</var></dt>
     <dd>
      <p class="para">System status of the Zip Archive.
      Available for closed archive, as of PHP 8.0.0 and PECL zip 1.18.0.</p>
     </dd>
    
    
     <dt id="ziparchive.props.numfiles"><var class="varname">numFiles</var></dt>
     <dd>
      <p class="para">Number of files in archive</p>
     </dd>
    
    
     <dt id="ziparchive.props.filename"><var class="varname">filename</var></dt>
     <dd>
      <p class="para">File name in the file system</p>
     </dd>
    
    
     <dt id="ziparchive.props.comment"><var class="varname">comment</var></dt>
     <dd>
      <p class="para">Comment for the archive</p>
     </dd>
    
   </dl>
  </div>

 </div>


 




































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="ziparchive.addemptydir.php">ZipArchive::addEmptyDir</a> — Add a new directory</li><li><a href="ziparchive.addfile.php">ZipArchive::addFile</a> — Adds a file to a ZIP archive from the given path</li><li><a href="ziparchive.addfromstring.php">ZipArchive::addFromString</a> — Add a file to a ZIP archive using its contents</li><li><a href="ziparchive.addglob.php">ZipArchive::addGlob</a> — Add files from a directory by glob pattern</li><li><a href="ziparchive.addpattern.php">ZipArchive::addPattern</a> — Add files from a directory by PCRE pattern</li><li><a href="ziparchive.clearerror.php">ZipArchive::clearError</a> — Clear the status error message, system and/or zip messages</li><li><a href="ziparchive.close.php">ZipArchive::close</a> — Close the active archive (opened or newly created)</li><li><a href="ziparchive.count.php">ZipArchive::count</a> — Counts the number of files in the archive</li><li><a href="ziparchive.deleteindex.php">ZipArchive::deleteIndex</a> — Delete an entry in the archive using its index</li><li><a href="ziparchive.deletename.php">ZipArchive::deleteName</a> — Delete an entry in the archive using its name</li><li><a href="ziparchive.extractto.php">ZipArchive::extractTo</a> — Extract the archive contents</li><li><a href="ziparchive.getarchivecomment.php">ZipArchive::getArchiveComment</a> — Returns the Zip archive comment</li><li><a href="ziparchive.getarchiveflag.php">ZipArchive::getArchiveFlag</a> — Returns the value of a Zip archive global flag</li><li><a href="ziparchive.getcommentindex.php">ZipArchive::getCommentIndex</a> — Returns the comment of an entry using the entry index</li><li><a href="ziparchive.getcommentname.php">ZipArchive::getCommentName</a> — Returns the comment of an entry using the entry name</li><li><a href="ziparchive.getexternalattributesindex.php">ZipArchive::getExternalAttributesIndex</a> — Retrieve the external attributes of an entry defined by its index</li><li><a href="ziparchive.getexternalattributesname.php">ZipArchive::getExternalAttributesName</a> — Retrieve the external attributes of an entry defined by its name</li><li><a href="ziparchive.getfromindex.php">ZipArchive::getFromIndex</a> — Returns the entry contents using its index</li><li><a href="ziparchive.getfromname.php">ZipArchive::getFromName</a> — Returns the entry contents using its name</li><li><a href="ziparchive.getnameindex.php">ZipArchive::getNameIndex</a> — Returns the name of an entry using its index</li><li><a href="ziparchive.getstatusstring.php">ZipArchive::getStatusString</a> — Returns the status error message, system and/or zip messages</li><li><a href="ziparchive.getstream.php">ZipArchive::getStream</a> — Get a file handler to the entry defined by its name (read only)</li><li><a href="ziparchive.getstreamindex.php">ZipArchive::getStreamIndex</a> — Get a file handler to the entry defined by its index (read only)</li><li><a href="ziparchive.getstreamname.php">ZipArchive::getStreamName</a> — Get a file handler to the entry defined by its name (read only)</li><li><a href="ziparchive.iscompressionmethoddupported.php">ZipArchive::isCompressionMethodSupported</a> — Check if a compression method is supported by libzip</li><li><a href="ziparchive.isencryptionmethoddupported.php">ZipArchive::isEncryptionMethodSupported</a> — Check if a encryption method is supported by libzip</li><li><a href="ziparchive.locatename.php">ZipArchive::locateName</a> — Returns the index of the entry in the archive</li><li><a href="ziparchive.open.php">ZipArchive::open</a> — Open a ZIP file archive</li><li><a href="ziparchive.registercancelcallback.php">ZipArchive::registerCancelCallback</a> — Register a callback to allow cancellation during archive close.</li><li><a href="ziparchive.registerprogresscallback.php">ZipArchive::registerProgressCallback</a> — Register a callback to provide updates during archive close.</li><li><a href="ziparchive.renameindex.php">ZipArchive::renameIndex</a> — Renames an entry defined by its index</li><li><a href="ziparchive.renamename.php">ZipArchive::renameName</a> — Renames an entry defined by its name</li><li><a href="ziparchive.replacefile.php">ZipArchive::replaceFile</a> — Replace file in ZIP archive with a given path</li><li><a href="ziparchive.setarchivecomment.php">ZipArchive::setArchiveComment</a> — Set the comment of a ZIP archive</li><li><a href="ziparchive.setarchiveflag.php">ZipArchive::setArchiveFlag</a> — Set a global flag of a ZIP archive</li><li><a href="ziparchive.setcommentindex.php">ZipArchive::setCommentIndex</a> — Set the comment of an entry defined by its index</li><li><a href="ziparchive.setcommentname.php">ZipArchive::setCommentName</a> — Set the comment of an entry defined by its name</li><li><a href="ziparchive.setcompressionindex.php">ZipArchive::setCompressionIndex</a> — Set the compression method of an entry defined by its index</li><li><a href="ziparchive.setcompressionname.php">ZipArchive::setCompressionName</a> — Set the compression method of an entry defined by its name</li><li><a href="ziparchive.setencryptionindex.php">ZipArchive::setEncryptionIndex</a> — Set the encryption method of an entry defined by its index</li><li><a href="ziparchive.setencryptionname.php">ZipArchive::setEncryptionName</a> — Set the encryption method of an entry defined by its name</li><li><a href="ziparchive.setexternalattributesindex.php">ZipArchive::setExternalAttributesIndex</a> — Set the external attributes of an entry defined by its index</li><li><a href="ziparchive.setexternalattributesname.php">ZipArchive::setExternalAttributesName</a> — Set the external attributes of an entry defined by its name</li><li><a href="ziparchive.setmtimeindex.php">ZipArchive::setMtimeIndex</a> — Set the modification time of an entry defined by its index</li><li><a href="ziparchive.setmtimename.php">ZipArchive::setMtimeName</a> — Set the modification time of an entry defined by its name</li><li><a href="ziparchive.setpassword.php">ZipArchive::setPassword</a> — Set the password for the active archive</li><li><a href="ziparchive.statindex.php">ZipArchive::statIndex</a> — Get the details of an entry defined by its index</li><li><a href="ziparchive.statname.php">ZipArchive::statName</a> — Get the details of an entry defined by its name</li><li><a href="ziparchive.unchangeall.php">ZipArchive::unchangeAll</a> — Undo all changes done in the archive</li><li><a href="ziparchive.unchangearchive.php">ZipArchive::unchangeArchive</a> — Revert all global changes done in the archive</li><li><a href="ziparchive.unchangeindex.php">ZipArchive::unchangeIndex</a> — Revert all changes done to an entry at the given index</li><li><a href="ziparchive.unchangename.php">ZipArchive::unchangeName</a> — Revert all changes done to an entry with the given name</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/zip/ziparchive.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.ziparchive%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.ziparchive&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.ziparchive.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">15 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110719">  <div class="votes">
    <div id="Vu110719">
    <a href="/manual/vote-note.php?id=110719&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110719">
    <a href="/manual/vote-note.php?id=110719&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110719" title="61% like this...">
    59
    </div>
  </div>
  <a href="#110719" class="name">
  <strong class="user"><em>umbalaconmeogia at NOSPAM dot gmail dot com</em></strong></a><a class="genanchor" href="#110719"> &para;</a><div class="date" title="2012-11-28 03:48"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110719">
<div class="phpcode"><code><span class="html">Zip a folder (include itself).
<br />Usage:
<br />  HZip::zipDir('/path/to/sourceDir', '/path/to/out.zip');
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">HZip
<br /></span><span class="keyword">{
<br />  </span><span class="comment">/**
<br />   * Add files and sub-directories in a folder to zip file.
<br />   * @param string $folder
<br />   * @param ZipArchive $zipFile
<br />   * @param int $exclusiveLength Number of text to be exclusived from the file path.
<br />   */
<br />  </span><span class="keyword">private static function </span><span class="default">folderToZip</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">, &amp;</span><span class="default">$zipFile</span><span class="keyword">, </span><span class="default">$exclusiveLength</span><span class="keyword">) {
<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">);
<br />    while (</span><span class="default">false </span><span class="keyword">!== </span><span class="default">$f </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) {
<br />      if (</span><span class="default">$f </span><span class="keyword">!= </span><span class="string">'.' </span><span class="keyword">&amp;&amp; </span><span class="default">$f </span><span class="keyword">!= </span><span class="string">'..'</span><span class="keyword">) {
<br />        </span><span class="default">$filePath </span><span class="keyword">= </span><span class="string">"</span><span class="default">$folder</span><span class="string">/</span><span class="default">$f</span><span class="string">"</span><span class="keyword">;
<br />        </span><span class="comment">// Remove prefix from file path before add to zip.
<br />        </span><span class="default">$localPath </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$filePath</span><span class="keyword">, </span><span class="default">$exclusiveLength</span><span class="keyword">);
<br />        if (</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$filePath</span><span class="keyword">)) {
<br />          </span><span class="default">$zipFile</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$filePath</span><span class="keyword">, </span><span class="default">$localPath</span><span class="keyword">);
<br />        } elseif (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$filePath</span><span class="keyword">)) {
<br />          </span><span class="comment">// Add sub-directory.
<br />          </span><span class="default">$zipFile</span><span class="keyword">-&gt;</span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">$localPath</span><span class="keyword">);
<br />          </span><span class="default">self</span><span class="keyword">::</span><span class="default">folderToZip</span><span class="keyword">(</span><span class="default">$filePath</span><span class="keyword">, </span><span class="default">$zipFile</span><span class="keyword">, </span><span class="default">$exclusiveLength</span><span class="keyword">);
<br />        }
<br />      }
<br />    }
<br />    </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />  }
<br />
<br />  </span><span class="comment">/**
<br />   * Zip a folder (include itself).
<br />   * Usage:
<br />   *   HZip::zipDir('/path/to/sourceDir', '/path/to/out.zip');
<br />   *
<br />   * @param string $sourcePath Path of directory to be zip.
<br />   * @param string $outZipPath Path of output zip file.
<br />   */
<br />  </span><span class="keyword">public static function </span><span class="default">zipDir</span><span class="keyword">(</span><span class="default">$sourcePath</span><span class="keyword">, </span><span class="default">$outZipPath</span><span class="keyword">)
<br />  {
<br />    </span><span class="default">$pathInfo </span><span class="keyword">= </span><span class="default">pathInfo</span><span class="keyword">(</span><span class="default">$sourcePath</span><span class="keyword">);
<br />    </span><span class="default">$parentPath </span><span class="keyword">= </span><span class="default">$pathInfo</span><span class="keyword">[</span><span class="string">'dirname'</span><span class="keyword">];
<br />    </span><span class="default">$dirName </span><span class="keyword">= </span><span class="default">$pathInfo</span><span class="keyword">[</span><span class="string">'basename'</span><span class="keyword">];
<br />
<br />    </span><span class="default">$z </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();
<br />    </span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$outZipPath</span><span class="keyword">, </span><span class="default">ZIPARCHIVE</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">);
<br />    </span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">$dirName</span><span class="keyword">);
<br />    </span><span class="default">self</span><span class="keyword">::</span><span class="default">folderToZip</span><span class="keyword">(</span><span class="default">$sourcePath</span><span class="keyword">, </span><span class="default">$z</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="string">"</span><span class="default">$parentPath</span><span class="string">/"</span><span class="keyword">));
<br />    </span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br />  }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118392">  <div class="votes">
    <div id="Vu118392">
    <a href="/manual/vote-note.php?id=118392&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118392">
    <a href="/manual/vote-note.php?id=118392&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118392" title="66% like this...">
    18
    </div>
  </div>
  <a href="#118392" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#118392"> &para;</a><div class="date" title="2015-11-28 06:14"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118392">
<div class="phpcode"><code><span class="html">With PHP 5.6+, you may come up with theses errors.<br /><br />Warning: Unknown: Cannot destroy the zip context in Unknown on line 0<br /><br />Warning: ZipArchive::close(): Can't remove file: No such file or directory in xxxx.php on line xx<br /><br />Examples<br /><br />Warning: Unknown: Cannot destroy the zip context in Unknown on line 0<br /><br /><span class="default">&lt;?php         <br />    $za </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />    </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'51-n.com.zip'</span><span class="keyword">,</span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">|</span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">OVERWRITE</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Warning: ZipArchive::close(): Can't remove file: No such file or directory in xxxx.php on line xx<br /><br /><span class="default">&lt;?php         <br />    $za </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />    </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'51-n.com.zip'</span><span class="keyword">,</span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">|</span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">OVERWRITE</span><span class="keyword">);<br />    </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />It happens when the zip archive is empty.<br />Your zip archive will not be saved on disk unless it has at least one file. What's more, when ZipArchive::OVERWRITE is applied, if there exists a file with the same name, it will be removed after ZipArchive::open() is called.<br /><br />So, don't forget to put at least one file to your zip archive.<br /><br /><span class="default">&lt;?php         <br />    $za </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />    </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'51-n.com.zip'</span><span class="keyword">,</span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">|</span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">OVERWRITE</span><span class="keyword">);<br />    </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">addFromString</span><span class="keyword">(</span><span class="string">'wuxiancheng.cn.txt'</span><span class="keyword">,</span><span class="string">'yes'</span><span class="keyword">);<br />    </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128559">  <div class="votes">
    <div id="Vu128559">
    <a href="/manual/vote-note.php?id=128559&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128559">
    <a href="/manual/vote-note.php?id=128559&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128559" title="66% like this...">
    2
    </div>
  </div>
  <a href="#128559" class="name">
  <strong class="user"><em>theking2(at)king.ma</em></strong></a><a class="genanchor" href="#128559"> &para;</a><div class="date" title="2023-05-20 05:00"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128559">
<div class="phpcode"><code><span class="html">A modern way to zip a folder recursivly is using the DirectoryIterator. I use this little class:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MakeZip<br /></span><span class="keyword">{<br />  private </span><span class="default">ZipArchive $zipArchive</span><span class="keyword">;<br />  private </span><span class="default">int $startPathLength</span><span class="keyword">; </span><span class="comment">// chars to remove from the start for the stored entity<br /><br />  </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(<br />    </span><span class="default">string $zipArchivename</span><span class="keyword">,<br />    public readonly </span><span class="default">string $startPath</span><span class="keyword">,<br />    public readonly </span><span class="default">mixed $convert_function</span><span class="keyword">,<br />  )<br />  {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">zipArchive </span><span class="keyword">= new </span><span class="default">\ZipArchive</span><span class="keyword">;<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">zipArchive</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$zipArchivename</span><span class="keyword">, </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">startPathLength </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">startPath</span><span class="keyword">);<br /><br />    </span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">zipDir</span><span class="keyword">(</span><span class="default">$startPath</span><span class="keyword">);<br />  }<br />  public function </span><span class="default">__destruct</span><span class="keyword">()<br />  {<br />    </span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">zipArchive</span><span class="keyword">-&gt; </span><span class="default">close</span><span class="keyword">();<br />  }<br /><br />  </span><span class="comment">/**<br />   * Add files and sub-directories in a folder to zip file.<br />   * @param string $folder<br />   * @param ZipArchive $zipFile<br />   * @param int $exclusiveLength Number of text to be exclusived from the file path.<br />   */<br />  </span><span class="keyword">private function </span><span class="default">zipDir</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">)<br />  {<br />    echo </span><span class="default">$folder </span><span class="keyword">. </span><span class="string">'&lt;br&gt;' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    foreach (new </span><span class="default">\DirectoryIterator</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">) as </span><span class="default">$f</span><span class="keyword">) {<br />      if (</span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">isDot</span><span class="keyword">())<br />        continue; </span><span class="comment">//skip . ..<br />      </span><span class="keyword">if (</span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">isDir</span><span class="keyword">()) {<br />        if( </span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">getExtension</span><span class="keyword">() === </span><span class="string">'git'</span><span class="keyword">) continue; </span><span class="comment">// skip .git folder<br />        </span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">zipArchive</span><span class="keyword">-&gt; </span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">());<br />        </span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">zipDir</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">());<br /><br />        continue;<br />      }<br />      if (</span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">isFile</span><span class="keyword">()) {<br />        if (</span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">getBasename</span><span class="keyword">() === </span><span class="default">basename</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">)) continue; </span><span class="comment">// skip self <br />        </span><span class="keyword">if (</span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">getExtension</span><span class="keyword">() === </span><span class="string">'zip'</span><span class="keyword">) continue; </span><span class="comment">// skip ZIP files<br /><br />        </span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">zipArchive </span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">-&gt; </span><span class="default">getPathname</span><span class="keyword">(), </span><span class="default">$this</span><span class="keyword">-&gt; </span><span class="default">startPathLength</span><span class="keyword">) ); </span><span class="comment">// remove './'<br /><br />        </span><span class="keyword">continue;<br />      }<br /><br />    }<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Which can be used thusly:<br /><span class="default">&lt;?php<br />  $host </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">, </span><span class="string">'_'</span><span class="keyword">, </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">]);<br />  </span><span class="default">$date </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'Ymd-His'</span><span class="keyword">);<br /><br />  </span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">\MakeZip</span><span class="keyword">(</span><span class="string">"./archiv-</span><span class="default">$host</span><span class="string">-</span><span class="default">$date</span><span class="string">.zip"</span><span class="keyword">, </span><span class="string">'./'</span><span class="keyword">, </span><span class="default">$convert_function</span><span class="keyword">);<br />  unset(</span><span class="default">$zip</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Add encryption or other features in the constructor.</span></code></div>
  </div>
 </div>
  <div class="note" id="112195">  <div class="votes">
    <div id="Vu112195">
    <a href="/manual/vote-note.php?id=112195&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112195">
    <a href="/manual/vote-note.php?id=112195&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112195" title="64% like this...">
    8
    </div>
  </div>
  <a href="#112195" class="name">
  <strong class="user"><em>AshleyDambra at live dot com</em></strong></a><a class="genanchor" href="#112195"> &para;</a><div class="date" title="2013-05-16 08:23"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112195">
<div class="phpcode"><code><span class="html">Simple class xZip to zip big folders into multiple parts and unzip multi zip files at once.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">xZip </span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">() {}<br />    private function </span><span class="default">_rglobRead</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, &amp;</span><span class="default">$array </span><span class="keyword">= array()) {<br />        if (!</span><span class="default">$source </span><span class="keyword">|| </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">) == </span><span class="string">""</span><span class="keyword">) {<br />            </span><span class="default">$source </span><span class="keyword">= </span><span class="string">"."</span><span class="keyword">;<br />        }<br />        foreach ((array) </span><span class="default">glob</span><span class="keyword">(</span><span class="default">$source </span><span class="keyword">. </span><span class="string">"/*/"</span><span class="keyword">) as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_rglobRead</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"//"</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">), </span><span class="default">$array</span><span class="keyword">);<br />        }<br />    <br />        foreach ((array) </span><span class="default">glob</span><span class="keyword">(</span><span class="default">$source </span><span class="keyword">. </span><span class="string">"*.*"</span><span class="keyword">) as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"//"</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />        }<br />    }<br />    private function </span><span class="default">_zip</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$part</span><span class="keyword">, </span><span class="default">$destination</span><span class="keyword">) {<br />        </span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />        @</span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, </span><span class="default">0777</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    <br />        if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"//"</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">, </span><span class="string">"</span><span class="keyword">{</span><span class="default">$destination</span><span class="keyword">}</span><span class="string">/partz</span><span class="keyword">{</span><span class="default">$part</span><span class="keyword">}</span><span class="string">.zip"</span><span class="keyword">), </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">)) {<br />            foreach ((array) </span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />                </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"../"</span><span class="keyword">, </span><span class="string">"./"</span><span class="keyword">), </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">));<br />            }<br />            </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />        }<br />    }<br />    public function </span><span class="default">zip</span><span class="keyword">(</span><span class="default">$limit </span><span class="keyword">= </span><span class="default">500</span><span class="keyword">, </span><span class="default">$source </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$destination </span><span class="keyword">= </span><span class="string">"./"</span><span class="keyword">) {<br />        if (!</span><span class="default">$destination </span><span class="keyword">|| </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">) == </span><span class="string">""</span><span class="keyword">) {<br />            </span><span class="default">$destination </span><span class="keyword">= </span><span class="string">"./"</span><span class="keyword">;<br />        }<br />    <br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_rglobRead</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">);<br />        </span><span class="default">$maxinput </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />        </span><span class="default">$splitinto </span><span class="keyword">= ((</span><span class="default">$maxinput </span><span class="keyword">/ </span><span class="default">$limit</span><span class="keyword">) &gt; </span><span class="default">round</span><span class="keyword">(</span><span class="default">$maxinput </span><span class="keyword">/ </span><span class="default">$limit</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)) ? </span><span class="default">round</span><span class="keyword">(</span><span class="default">$maxinput </span><span class="keyword">/ </span><span class="default">$limit</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">) + </span><span class="default">1 </span><span class="keyword">: </span><span class="default">round</span><span class="keyword">(</span><span class="default">$maxinput </span><span class="keyword">/ </span><span class="default">$limit</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />    <br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$splitinto</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">++) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_zip</span><span class="keyword">(</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, (</span><span class="default">$i </span><span class="keyword">* </span><span class="default">$limit</span><span class="keyword">), </span><span class="default">$limit</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">), </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$destination</span><span class="keyword">);<br />        }<br />        <br />        unset(</span><span class="default">$input</span><span class="keyword">);<br />        return;<br />    }<br />    public function </span><span class="default">unzip</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">$destination</span><span class="keyword">) {<br />        @</span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, </span><span class="default">0777</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    <br />        foreach ((array) </span><span class="default">glob</span><span class="keyword">(</span><span class="default">$source </span><span class="keyword">. </span><span class="string">"/*.zip"</span><span class="keyword">) as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            </span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />            if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"//"</span><span class="keyword">, </span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)) === </span><span class="default">true</span><span class="keyword">) {<br />                </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">extractTo</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">);<br />                </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />            }<br />        }<br />    }<br />    <br />    public function </span><span class="default">__destruct</span><span class="keyword">() {}<br />}<br /><br /></span><span class="comment">//$zip = new xZip;<br />//$zip-&gt;zip(500, "images/", "images_zip/");<br />//$zip-&gt;unzip("images_zip/", "images/");<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116345">  <div class="votes">
    <div id="Vu116345">
    <a href="/manual/vote-note.php?id=116345&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116345">
    <a href="/manual/vote-note.php?id=116345&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116345" title="57% like this...">
    14
    </div>
  </div>
  <a href="#116345" class="name">
  <strong class="user"><em>ebestwebmaster at gmail dot com</em></strong></a><a class="genanchor" href="#116345"> &para;</a><div class="date" title="2014-12-16 11:46"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116345">
<div class="phpcode"><code><span class="html">A way of zipping files and downloading them thereafter:<br /><span class="default">&lt;?php<br /><br /> $files </span><span class="keyword">= array(</span><span class="string">'image.jpeg'</span><span class="keyword">,</span><span class="string">'text.txt'</span><span class="keyword">,</span><span class="string">'music.wav'</span><span class="keyword">);<br /></span><span class="default">$zipname </span><span class="keyword">= </span><span class="string">'enter_any_name_for_the_zipped_file.zip'</span><span class="keyword">;<br /></span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$zipname</span><span class="keyword">, </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">);<br />foreach (</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">) {<br />  </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />}<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /><br /></span><span class="comment">///Then download the zipped file.<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: application/zip'</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-disposition: attachment; filename='</span><span class="keyword">.</span><span class="default">$zipname</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Length: ' </span><span class="keyword">. </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$zipname</span><span class="keyword">));<br /></span><span class="default">readfile</span><span class="keyword">(</span><span class="default">$zipname</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105312">  <div class="votes">
    <div id="Vu105312">
    <a href="/manual/vote-note.php?id=105312&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105312">
    <a href="/manual/vote-note.php?id=105312&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105312" title="61% like this...">
    10
    </div>
  </div>
  <a href="#105312" class="name">
  <strong class="user"><em>Jerry dot Saravia at emc dot com</em></strong></a><a class="genanchor" href="#105312"> &para;</a><div class="date" title="2011-08-08 01:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105312">
<div class="phpcode"><code><span class="html">The following code can be used to get a list of all the file names in a zip file.
<br />
<br /><span class="default">&lt;?php
<br />$za </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();
<br />
<br /></span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'theZip.zip'</span><span class="keyword">);
<br />
<br />for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ ){
<br />    </span><span class="default">$stat </span><span class="keyword">= </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">statIndex</span><span class="keyword">( </span><span class="default">$i </span><span class="keyword">);
<br />    </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">basename</span><span class="keyword">( </span><span class="default">$stat</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">] ) . </span><span class="default">PHP_EOL </span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108601">  <div class="votes">
    <div id="Vu108601">
    <a href="/manual/vote-note.php?id=108601&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108601">
    <a href="/manual/vote-note.php?id=108601&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108601" title="60% like this...">
    8
    </div>
  </div>
  <a href="#108601" class="name">
  <strong class="user"><em>bruno dot vibert at bonobox dot fr</em></strong></a><a class="genanchor" href="#108601"> &para;</a><div class="date" title="2012-05-09 08:21"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108601">
<div class="phpcode"><code><span class="html">There is a usefull function to get the ZipArchive status as a human readable string :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ZipStatusString</span><span class="keyword">( </span><span class="default">$status </span><span class="keyword">)<br />{<br />    switch( (int) </span><span class="default">$status </span><span class="keyword">)<br />    {<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_OK           </span><span class="keyword">: return </span><span class="string">'N No error'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_MULTIDISK    </span><span class="keyword">: return </span><span class="string">'N Multi-disk zip archives not supported'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_RENAME       </span><span class="keyword">: return </span><span class="string">'S Renaming temporary file failed'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_CLOSE        </span><span class="keyword">: return </span><span class="string">'S Closing zip archive failed'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_SEEK         </span><span class="keyword">: return </span><span class="string">'S Seek error'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_READ         </span><span class="keyword">: return </span><span class="string">'S Read error'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_WRITE        </span><span class="keyword">: return </span><span class="string">'S Write error'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_CRC          </span><span class="keyword">: return </span><span class="string">'N CRC error'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_ZIPCLOSED    </span><span class="keyword">: return </span><span class="string">'N Containing zip archive was closed'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_NOENT        </span><span class="keyword">: return </span><span class="string">'N No such file'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_EXISTS       </span><span class="keyword">: return </span><span class="string">'N File already exists'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_OPEN         </span><span class="keyword">: return </span><span class="string">'S Can\'t open file'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_TMPOPEN      </span><span class="keyword">: return </span><span class="string">'S Failure to create temporary file'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_ZLIB         </span><span class="keyword">: return </span><span class="string">'Z Zlib error'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_MEMORY       </span><span class="keyword">: return </span><span class="string">'N Malloc failure'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_CHANGED      </span><span class="keyword">: return </span><span class="string">'N Entry has been changed'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_COMPNOTSUPP  </span><span class="keyword">: return </span><span class="string">'N Compression method not supported'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_EOF          </span><span class="keyword">: return </span><span class="string">'N Premature EOF'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_INVAL        </span><span class="keyword">: return </span><span class="string">'N Invalid argument'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_NOZIP        </span><span class="keyword">: return </span><span class="string">'N Not a zip archive'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_INTERNAL     </span><span class="keyword">: return </span><span class="string">'N Internal error'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_INCONS       </span><span class="keyword">: return </span><span class="string">'N Zip archive inconsistent'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_REMOVE       </span><span class="keyword">: return </span><span class="string">'S Can\'t remove file'</span><span class="keyword">;<br />        case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_DELETED      </span><span class="keyword">: return </span><span class="string">'N Entry has been deleted'</span><span class="keyword">;<br />        <br />        default: return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'Unknown status %s'</span><span class="keyword">, </span><span class="default">$status </span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106062">  <div class="votes">
    <div id="Vu106062">
    <a href="/manual/vote-note.php?id=106062&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106062">
    <a href="/manual/vote-note.php?id=106062&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106062" title="62% like this...">
    4
    </div>
  </div>
  <a href="#106062" class="name">
  <strong class="user"><em>webmaster at sebastiangrinke dot info</em></strong></a><a class="genanchor" href="#106062"> &para;</a><div class="date" title="2011-10-06 01:30"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106062">
<div class="phpcode"><code><span class="html">Here is a simple function which zips folders with all sub folders or only a simple file... the $data var can be a string or an array...
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">public function </span><span class="default">un_zip</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$arcpf</span><span class="keyword">,</span><span class="default">$mode</span><span class="keyword">=</span><span class="string">'zip'</span><span class="keyword">,</span><span class="default">$obj</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">){
<br />        </span><span class="default">$absoluterpfad </span><span class="keyword">= </span><span class="string">'YOUR_BASE_PATH'</span><span class="keyword">;
<br />        </span><span class="default">$arcpf </span><span class="keyword">= </span><span class="default">$absoluterpfad</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">.</span><span class="default">$arcpf</span><span class="keyword">;
<br />        if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">)==</span><span class="default">false</span><span class="keyword">){
<br />             </span><span class="default">$archiv </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();
<br />             </span><span class="default">$archiv</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$arcpf</span><span class="keyword">,</span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">);
<br />        }else{</span><span class="default">$archiv </span><span class="keyword">=&amp; </span><span class="default">$obj</span><span class="keyword">;}
<br />        if(</span><span class="default">$mode</span><span class="keyword">==</span><span class="string">'zip'</span><span class="keyword">){
<br />           if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)==</span><span class="default">true</span><span class="keyword">){
<br />                 foreach(</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$dtmp</span><span class="keyword">){
<br />                     </span><span class="default">$archiv </span><span class="keyword">=&amp; </span><span class="default">un_zip</span><span class="keyword">(</span><span class="default">$dtmp</span><span class="keyword">,</span><span class="default">$arcpf</span><span class="keyword">,</span><span class="string">'zip'</span><span class="keyword">,&amp;</span><span class="default">$archiv</span><span class="keyword">);
<br />                 }
<br />           }else{
<br />            if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)==</span><span class="default">true</span><span class="keyword">){
<br />                    </span><span class="default">$archiv</span><span class="keyword">-&gt;</span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$absoluterpfad</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">));
<br />                  </span><span class="default">$files </span><span class="keyword">= </span><span class="default">scandir</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);
<br />               </span><span class="default">$bad </span><span class="keyword">= array(</span><span class="string">'.'</span><span class="keyword">,</span><span class="string">'..'</span><span class="keyword">);
<br />               </span><span class="default">$files </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">,</span><span class="default">$bad</span><span class="keyword">);
<br />               foreach(</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$ftmp</span><span class="keyword">){
<br />                   if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">.</span><span class="default">$ftmp</span><span class="keyword">)==</span><span class="default">true</span><span class="keyword">){
<br />                        </span><span class="default">$archiv</span><span class="keyword">-&gt;</span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$absoluterpfad</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$ftmp</span><span class="keyword">));
<br />                        </span><span class="default">$archiv </span><span class="keyword">=&amp; </span><span class="default">un_zip</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">.</span><span class="default">$ftmp</span><span class="keyword">,</span><span class="default">$arcpf</span><span class="keyword">,</span><span class="string">'zip'</span><span class="keyword">,&amp;</span><span class="default">$archiv</span><span class="keyword">);
<br />                   }elseif(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">.</span><span class="default">$ftmp</span><span class="keyword">)==</span><span class="default">true</span><span class="keyword">){
<br />                    </span><span class="default">$archiv</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">.</span><span class="default">$ftmp</span><span class="keyword">,</span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$absoluterpfad</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$ftmp</span><span class="keyword">));
<br />                   }
<br />                 }
<br />            }elseif(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)==</span><span class="default">true</span><span class="keyword">){</span><span class="default">$archiv</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$absoluterpfad</span><span class="keyword">.</span><span class="default">DS</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">));}
<br />           }
<br />        }
<br />        if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">)==</span><span class="default">false</span><span class="keyword">){</span><span class="default">$archiv</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();}
<br />        else{return </span><span class="default">$archiv</span><span class="keyword">;}
<br />        if(</span><span class="default">$mode</span><span class="keyword">==</span><span class="string">'unzip'</span><span class="keyword">){</span><span class="default">$archiv</span><span class="keyword">-&gt;</span><span class="default">extractTo</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);}
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116937">  <div class="votes">
    <div id="Vu116937">
    <a href="/manual/vote-note.php?id=116937&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116937">
    <a href="/manual/vote-note.php?id=116937&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116937" title="60% like this...">
    5
    </div>
  </div>
  <a href="#116937" class="name">
  <strong class="user"><em>nick at fullfatthings dot com</em></strong></a><a class="genanchor" href="#116937"> &para;</a><div class="date" title="2015-03-24 02:59"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116937">
<div class="phpcode"><code><span class="html">There is a limit withing PHP 5.3.3 (which seems to have been addressed in later versions; 5.3.29 seems ok on a different server).<br /><br />If you try to open a zip file with more than 65,535 files in it (in my case it had 237,942 files) then you cannot access the later files. The numFiles property only reports the first 65k files.</span></code></div>
  </div>
 </div>
  <div class="note" id="98441">  <div class="votes">
    <div id="Vu98441">
    <a href="/manual/vote-note.php?id=98441&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98441">
    <a href="/manual/vote-note.php?id=98441&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98441" title="60% like this...">
    3
    </div>
  </div>
  <a href="#98441" class="name">
  <strong class="user"><em>hardcorevenom at gmx dot com</em></strong></a><a class="genanchor" href="#98441"> &para;</a><div class="date" title="2010-06-15 03:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98441">
<div class="phpcode"><code><span class="html">Read a file from an archive to a variable.<br />A warning is printed automatically in case of a CRC32 mismatch, which we capture, so we can print our own error message.<br /><br /><span class="default">&lt;?php<br />$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();<br />if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'archive.zip'</span><span class="keyword">)) {<br />  </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">getStream</span><span class="keyword">(</span><span class="string">'myfile.txt'</span><span class="keyword">); </span><span class="comment">//file inside archive<br />  </span><span class="keyword">if(!</span><span class="default">$fp</span><span class="keyword">)<br />    die(</span><span class="string">"Error: can't get stream to zipped file"</span><span class="keyword">);<br />  </span><span class="default">$stat </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">statName</span><span class="keyword">(</span><span class="string">'myfile.txt'</span><span class="keyword">);<br /><br />  </span><span class="default">$buf </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">; </span><span class="comment">//file buffer<br />  </span><span class="default">ob_start</span><span class="keyword">(); </span><span class="comment">//to capture CRC error message<br />    </span><span class="keyword">while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {<br />      </span><span class="default">$buf </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">2048</span><span class="keyword">); </span><span class="comment">//reading more than 2156 bytes seems to disable internal CRC32 verification (bug?)<br />    </span><span class="keyword">}<br />    </span><span class="default">$s </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br />  </span><span class="default">ob_end_clean</span><span class="keyword">();<br />  if(</span><span class="default">stripos</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="string">"CRC error"</span><span class="keyword">) != </span><span class="default">FALSE</span><span class="keyword">){<br />    echo </span><span class="string">'CRC32 mismatch, current '</span><span class="keyword">;<br />    </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%08X"</span><span class="keyword">, </span><span class="default">crc32</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">)); </span><span class="comment">//current CRC<br />    </span><span class="keyword">echo </span><span class="string">', expected '</span><span class="keyword">;<br />    </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%08X"</span><span class="keyword">, </span><span class="default">$stat</span><span class="keyword">[</span><span class="string">'crc'</span><span class="keyword">]); </span><span class="comment">//expected CRC<br />  </span><span class="keyword">}<br /><br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />  </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />  </span><span class="comment">//Done, unpacked file is stored in $buf<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />To create a corrupt file, change a byte in a zip file using a hex editor.</span></code></div>
  </div>
 </div>
  <div class="note" id="109618">  <div class="votes">
    <div id="Vu109618">
    <a href="/manual/vote-note.php?id=109618&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109618">
    <a href="/manual/vote-note.php?id=109618&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109618" title="55% like this...">
    4
    </div>
  </div>
  <a href="#109618" class="name">
  <strong class="user"><em>niklas dot schumi at NOSPAM dot googlemail dot com</em></strong></a><a class="genanchor" href="#109618"> &para;</a><div class="date" title="2012-08-02 10:44"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109618">
<div class="phpcode"><code><span class="html">Hi there.<br />I just wrote a little function to zip a whole folder while maintaining the dir-structure. I hope it might help someone.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">folderToZip</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">, &amp;</span><span class="default">$zipFile</span><span class="keyword">, </span><span class="default">$subfolder </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    if (</span><span class="default">$zipFile </span><span class="keyword">== </span><span class="default">null</span><span class="keyword">) {<br />        </span><span class="comment">// no resource given, exit<br />        </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// we check if $folder has a slash at its end, if not, we append one<br />    </span><span class="default">$folder </span><span class="keyword">.= </span><span class="default">end</span><span class="keyword">(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">)) == </span><span class="string">"/" </span><span class="keyword">? </span><span class="string">"" </span><span class="keyword">: </span><span class="string">"/"</span><span class="keyword">;<br />    </span><span class="default">$subfolder </span><span class="keyword">.= </span><span class="default">end</span><span class="keyword">(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$subfolder</span><span class="keyword">)) == </span><span class="string">"/" </span><span class="keyword">? </span><span class="string">"" </span><span class="keyword">: </span><span class="string">"/"</span><span class="keyword">;<br />    </span><span class="comment">// we start by going through all files in $folder<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">);<br />    while (</span><span class="default">$f </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) {<br />        if (</span><span class="default">$f </span><span class="keyword">!= </span><span class="string">"." </span><span class="keyword">&amp;&amp; </span><span class="default">$f </span><span class="keyword">!= </span><span class="string">".."</span><span class="keyword">) {<br />            if (</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$folder </span><span class="keyword">. </span><span class="default">$f</span><span class="keyword">)) {<br />                </span><span class="comment">// if we find a file, store it<br />                // if we have a subfolder, store it there<br />                </span><span class="keyword">if (</span><span class="default">$subfolder </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">)<br />                    </span><span class="default">$zipFile</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$folder </span><span class="keyword">. </span><span class="default">$f</span><span class="keyword">, </span><span class="default">$subfolder </span><span class="keyword">. </span><span class="default">$f</span><span class="keyword">);<br />                else<br />                    </span><span class="default">$zipFile</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$folder </span><span class="keyword">. </span><span class="default">$f</span><span class="keyword">);<br />            } elseif (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$folder </span><span class="keyword">. </span><span class="default">$f</span><span class="keyword">)) {<br />                </span><span class="comment">// if we find a folder, create a folder in the zip <br />                </span><span class="default">$zipFile</span><span class="keyword">-&gt;</span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);<br />                </span><span class="comment">// and call the function again<br />                </span><span class="default">folderToZip</span><span class="keyword">(</span><span class="default">$folder </span><span class="keyword">. </span><span class="default">$f</span><span class="keyword">, </span><span class="default">$zipFile</span><span class="keyword">, </span><span class="default">$f</span><span class="keyword">);<br />            }<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Use it like this:<br /><span class="default">&lt;?php<br />$z </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();<br /></span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">"test.zip"</span><span class="keyword">, </span><span class="default">ZIPARCHIVE</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">);<br /></span><span class="default">folderToZip</span><span class="keyword">(</span><span class="string">"storeThisFolder"</span><span class="keyword">, </span><span class="default">$z</span><span class="keyword">);<br /></span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Have a good day!</span></code></div>
  </div>
 </div>
  <div class="note" id="109406">  <div class="votes">
    <div id="Vu109406">
    <a href="/manual/vote-note.php?id=109406&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109406">
    <a href="/manual/vote-note.php?id=109406&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109406" title="53% like this...">
    2
    </div>
  </div>
  <a href="#109406" class="name">
  <strong class="user"><em>panique at web dot de</em></strong></a><a class="genanchor" href="#109406"> &para;</a><div class="date" title="2012-07-14 11:21"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109406">
<div class="phpcode"><code><span class="html">Important: Due to the natural file size limit of 4GB (~3,6GB to be correct) of zip files, this class will generate corrupt files of the result is larger than 4 GB. Using tar.gz is a proper alternative.</span></code></div>
  </div>
 </div>
  <div class="note" id="118272">  <div class="votes">
    <div id="Vu118272">
    <a href="/manual/vote-note.php?id=118272&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118272">
    <a href="/manual/vote-note.php?id=118272&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118272" title="50% like this...">
    0
    </div>
  </div>
  <a href="#118272" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#118272"> &para;</a><div class="date" title="2015-11-06 08:58"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118272">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    </span><span class="comment">//use bzip2 + ZipArchive to reduce file size of your zip archives.<br />    </span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'i.zip'</span><span class="keyword">,</span><span class="default">ZIPARCHIVE</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">|</span><span class="default">ZIPARCHIVE</span><span class="keyword">::</span><span class="default">OVERWRITE</span><span class="keyword">);<br />    </span><span class="default">$file</span><span class="keyword">=</span><span class="string">'wuxiancheng.cn.sql'</span><span class="keyword">;<br />    </span><span class="default">$bzFilename </span><span class="keyword">= </span><span class="default">$file</span><span class="keyword">.</span><span class="string">'.bz2'</span><span class="keyword">;<br />    </span><span class="default">$sql </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    </span><span class="default">$sql </span><span class="keyword">= </span><span class="default">bzcompress</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">);<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFromString</span><span class="keyword">(</span><span class="default">$bzFilename</span><span class="keyword">,</span><span class="default">$sql</span><span class="keyword">);<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">setArchiveComment</span><span class="keyword">(</span><span class="string">'zipped on '</span><span class="keyword">.</span><span class="default">date</span><span class="keyword">(</span><span class="string">'Y-M-d'</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114158">  <div class="votes">
    <div id="Vu114158">
    <a href="/manual/vote-note.php?id=114158&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114158">
    <a href="/manual/vote-note.php?id=114158&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114158" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#114158" class="name">
  <strong class="user"><em>piotr dot stop dot spam at gmail dot com</em></strong></a><a class="genanchor" href="#114158"> &para;</a><div class="date" title="2014-01-17 04:58"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114158">
<div class="phpcode"><code><span class="html">You can check general purpose flag to test if the zip file is encrypted. Example function below.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Check if the file is encrypted<br /> * <br /> * Notice: if file doesn't exists or cannot be opened, function<br /> * also return false.<br /> * <br /> * @param string $pathToArchive<br /> * @return boolean return true if file is encrypted<br /> */<br /></span><span class="keyword">function </span><span class="default">isEncryptedZip</span><span class="keyword">( </span><span class="default">$pathToArchive </span><span class="keyword">) {<br />    </span><span class="default">$fp </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">( </span><span class="default">$pathToArchive</span><span class="keyword">, </span><span class="string">'r' </span><span class="keyword">);<br />    </span><span class="default">$encrypted </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    if ( </span><span class="default">$fp </span><span class="keyword">&amp;&amp; </span><span class="default">fseek</span><span class="keyword">( </span><span class="default">$fp</span><span class="keyword">, </span><span class="default">6 </span><span class="keyword">) == </span><span class="default">0 </span><span class="keyword">) {<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">( </span><span class="default">$fp</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">);<br />        if ( </span><span class="default">false </span><span class="keyword">!== </span><span class="default">$string </span><span class="keyword">) {<br />            </span><span class="default">$data </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">"vgeneral"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />            </span><span class="default">$encrypted </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">[ </span><span class="string">'general' </span><span class="keyword">] &amp; </span><span class="default">0x01 </span><span class="keyword">? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">;<br />        }<br />        </span><span class="default">fclose</span><span class="keyword">( </span><span class="default">$fp </span><span class="keyword">);<br />    }<br />    return </span><span class="default">$encrypted</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100268">  <div class="votes">
    <div id="Vu100268">
    <a href="/manual/vote-note.php?id=100268&amp;page=class.ziparchive&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100268">
    <a href="/manual/vote-note.php?id=100268&amp;page=class.ziparchive&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100268" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#100268" class="name">
  <strong class="user"><em>h-fate at gmx dot net</em></strong></a><a class="genanchor" href="#100268"> &para;</a><div class="date" title="2010-10-05 04:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100268">
<div class="phpcode"><code><span class="html">Be wary that there are several algorithms to generate a zip file. I found that Office OpenXML files created with ZipArchive are not recognized by Excel 2007, for example.<br /><br />You have to use a different class to zip in this case, such as PclZip.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.ziparchive&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.ziparchive.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.zip.php">Zip</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.zip.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="zip.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="zip.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="zip.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="class.ziparchive.php" title="ZipArchive">ZipArchive</a>
                        </li>
                                                <li class="">
                            <a href="ref.zip.php" title="Zip Functions">Zip Functions</a>
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
