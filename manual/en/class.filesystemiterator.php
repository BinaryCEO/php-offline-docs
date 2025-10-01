<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: FilesystemIterator - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.filesystemiterator.php">
 <link rel="shorturl" href="https://www.php.net/filesystemiterator">
 <link rel="alternate" href="https://www.php.net/filesystemiterator" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.iterators.php">
 <link rel="prev" href="https://www.php.net/manual/en/emptyiterator.valid.php">
 <link rel="next" href="https://www.php.net/manual/en/filesystemiterator.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.filesystemiterator.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.filesystemiterator.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.filesystemiterator.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.filesystemiterator.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.filesystemiterator.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.filesystemiterator.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.filesystemiterator.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.filesystemiterator.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.filesystemiterator.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.filesystemiterator.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.filesystemiterator.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The FilesystemIterator class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: FilesystemIterator - Manual" />
<meta name="twitter:description" content="The FilesystemIterator class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: FilesystemIterator - Manual" />
<meta itemprop="description" content="The FilesystemIterator class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The FilesystemIterator class" />

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
        <a href="filesystemiterator.construct.php">
          FilesystemIterator::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="emptyiterator.valid.php">
          &laquo; EmptyIterator::valid        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='spl.iterators.php'>Iterators</a></li>      </ul>
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
            <option value='en/class.filesystemiterator.php' selected="selected">English</option>
            <option value='de/class.filesystemiterator.php'>German</option>
            <option value='es/class.filesystemiterator.php'>Spanish</option>
            <option value='fr/class.filesystemiterator.php'>French</option>
            <option value='it/class.filesystemiterator.php'>Italian</option>
            <option value='ja/class.filesystemiterator.php'>Japanese</option>
            <option value='pt_BR/class.filesystemiterator.php'>Brazilian Portuguese</option>
            <option value='ru/class.filesystemiterator.php'>Russian</option>
            <option value='tr/class.filesystemiterator.php'>Turkish</option>
            <option value='uk/class.filesystemiterator.php'>Ukrainian</option>
            <option value='zh/class.filesystemiterator.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.filesystemiterator" class="reference">

 <h1 class="title">The FilesystemIterator class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>

  
  <div class="section" id="filesystemiterator.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The Filesystem iterator
   </p>
  </div>
  

  <div class="section" id="filesystemiterator.synopsis">
   <h2 class="title">Class synopsis</h2>

   
   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">FilesystemIterator</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.directoryiterator.php" class="classname">DirectoryIterator</a>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.current-mode-mask"><var class="varname">CURRENT_MODE_MASK</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.current-as-pathname"><var class="varname">CURRENT_AS_PATHNAME</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.current-as-fileinfo"><var class="varname">CURRENT_AS_FILEINFO</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.current-as-self"><var class="varname">CURRENT_AS_SELF</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.key-mode-mask"><var class="varname">KEY_MODE_MASK</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.key-as-pathname"><var class="varname">KEY_AS_PATHNAME</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.follow-symlinks"><var class="varname">FOLLOW_SYMLINKS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.key-as-filename"><var class="varname">KEY_AS_FILENAME</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.new-current-and-key"><var class="varname">NEW_CURRENT_AND_KEY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.other-mode-mask"><var class="varname">OTHER_MODE_MASK</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.skip-dots"><var class="varname">SKIP_DOTS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.unix-paths"><var class="varname">UNIX_PATHS</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$directory</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::SKIP_DOTS</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.current.php" class="methodname">current</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="class.splfileinfo.php" class="type SplFileInfo">SplFileInfo</a></span>|<span class="type"><a href="class.filesystemiterator.php" class="type FilesystemIterator">FilesystemIterator</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.getflags.php" class="methodname">getFlags</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.key.php" class="methodname">key</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.setflags.php" class="methodname">setFlags</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="directoryiterator.current.php" class="methodname">DirectoryIterator::current</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="directoryiterator.getbasename.php" class="methodname">DirectoryIterator::getBasename</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$suffix</code><span class="initializer"> = &quot;&quot;</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="directoryiterator.getextension.php" class="methodname">DirectoryIterator::getExtension</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="directoryiterator.getfilename.php" class="methodname">DirectoryIterator::getFilename</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="directoryiterator.isdot.php" class="methodname">DirectoryIterator::isDot</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="directoryiterator.key.php" class="methodname">DirectoryIterator::key</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="directoryiterator.next.php" class="methodname">DirectoryIterator::next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="directoryiterator.rewind.php" class="methodname">DirectoryIterator::rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="directoryiterator.seek.php" class="methodname">DirectoryIterator::seek</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="directoryiterator.tostring.php" class="methodname">DirectoryIterator::__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="directoryiterator.valid.php" class="methodname">DirectoryIterator::valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getatime.php" class="methodname">SplFileInfo::getATime</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getbasename.php" class="methodname">SplFileInfo::getBasename</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$suffix</code><span class="initializer"> = &quot;&quot;</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getctime.php" class="methodname">SplFileInfo::getCTime</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getextension.php" class="methodname">SplFileInfo::getExtension</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getfileinfo.php" class="methodname">SplFileInfo::getFileInfo</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$class</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="class.splfileinfo.php" class="type SplFileInfo">SplFileInfo</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getfilename.php" class="methodname">SplFileInfo::getFilename</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getgroup.php" class="methodname">SplFileInfo::getGroup</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getinode.php" class="methodname">SplFileInfo::getInode</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getlinktarget.php" class="methodname">SplFileInfo::getLinkTarget</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getmtime.php" class="methodname">SplFileInfo::getMTime</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getowner.php" class="methodname">SplFileInfo::getOwner</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getpath.php" class="methodname">SplFileInfo::getPath</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getpathinfo.php" class="methodname">SplFileInfo::getPathInfo</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$class</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.splfileinfo.php" class="type SplFileInfo">SplFileInfo</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getpathname.php" class="methodname">SplFileInfo::getPathname</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getperms.php" class="methodname">SplFileInfo::getPerms</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getrealpath.php" class="methodname">SplFileInfo::getRealPath</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.getsize.php" class="methodname">SplFileInfo::getSize</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.gettype.php" class="methodname">SplFileInfo::getType</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.isdir.php" class="methodname">SplFileInfo::isDir</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.isexecutable.php" class="methodname">SplFileInfo::isExecutable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.isfile.php" class="methodname">SplFileInfo::isFile</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.islink.php" class="methodname">SplFileInfo::isLink</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.isreadable.php" class="methodname">SplFileInfo::isReadable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.iswritable.php" class="methodname">SplFileInfo::isWritable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.openfile.php" class="methodname">SplFileInfo::openFile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mode</code><span class="initializer"> = &quot;r&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$useIncludePath</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="class.splfileobject.php" class="type SplFileObject">SplFileObject</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.setfileclass.php" class="methodname">SplFileInfo::setFileClass</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code><span class="initializer"> = SplFileObject::class</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.setinfoclass.php" class="methodname">SplFileInfo::setInfoClass</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code><span class="initializer"> = SplFileInfo::class</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfileinfo.tostring.php" class="methodname">SplFileInfo::__toString</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

   }</div>
   

  </div>

  
  <div class="section" id="filesystemiterator.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>
    
     <dt id="filesystemiterator.constants.current-as-pathname"><strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.current-as-pathname">FilesystemIterator::CURRENT_AS_PATHNAME</a></code></strong></dt>
     <dd>
      <p class="para">Makes <span class="methodname"><a href="filesystemiterator.current.php" class="methodname">FilesystemIterator::current()</a></span> return the pathname.</p>
     </dd>
    
    
     <dt id="filesystemiterator.constants.current-as-fileinfo"><strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.current-as-fileinfo">FilesystemIterator::CURRENT_AS_FILEINFO</a></code></strong></dt>
     <dd>
      <p class="para">Makes <span class="methodname"><a href="filesystemiterator.current.php" class="methodname">FilesystemIterator::current()</a></span> return an <span class="classname"><a href="class.splfileinfo.php" class="classname">SplFileInfo</a></span> instance.</p>
     </dd>
    
    
     <dt id="filesystemiterator.constants.current-as-self"><strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.current-as-self">FilesystemIterator::CURRENT_AS_SELF</a></code></strong></dt>
     <dd>
      <p class="para">Makes <span class="methodname"><a href="filesystemiterator.current.php" class="methodname">FilesystemIterator::current()</a></span> return $this (the FilesystemIterator).</p>
     </dd>
    
    
     <dt id="filesystemiterator.constants.current-mode-mask"><strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.current-mode-mask">FilesystemIterator::CURRENT_MODE_MASK</a></code></strong></dt>
     <dd>
      <p class="para">Masks <span class="methodname"><a href="filesystemiterator.current.php" class="methodname">FilesystemIterator::current()</a></span></p>
     </dd>
    
    
     <dt id="filesystemiterator.constants.key-as-pathname"><strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.key-as-pathname">FilesystemIterator::KEY_AS_PATHNAME</a></code></strong></dt>
     <dd>
      <p class="para">Makes <span class="methodname"><a href="filesystemiterator.key.php" class="methodname">FilesystemIterator::key()</a></span> return the pathname.</p>
     </dd>
    
    
     <dt id="filesystemiterator.constants.key-as-filename"><strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.key-as-filename">FilesystemIterator::KEY_AS_FILENAME</a></code></strong></dt>
     <dd>
      <p class="para">Makes <span class="methodname"><a href="filesystemiterator.key.php" class="methodname">FilesystemIterator::key()</a></span> return the filename.</p>
     </dd>
    
    
     <dt id="filesystemiterator.constants.follow-symlinks"><strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.follow-symlinks">FilesystemIterator::FOLLOW_SYMLINKS</a></code></strong></dt>
     <dd>
      <p class="para">Makes <span class="methodname"><a href="recursivedirectoryiterator.haschildren.php" class="methodname">RecursiveDirectoryIterator::hasChildren()</a></span> follow symlinks.</p>
     </dd>
    
    
     <dt id="filesystemiterator.constants.key-mode-mask"><strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.key-mode-mask">FilesystemIterator::KEY_MODE_MASK</a></code></strong></dt>
     <dd>
      <p class="para">Masks <span class="methodname"><a href="filesystemiterator.key.php" class="methodname">FilesystemIterator::key()</a></span></p>
     </dd>
    
    
     <dt id="filesystemiterator.constants.new-current-and-key"><strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.new-current-and-key">FilesystemIterator::NEW_CURRENT_AND_KEY</a></code></strong></dt>
     <dd>
      <p class="para">Same as <code class="literal">FilesystemIterator::KEY_AS_FILENAME | FilesystemIterator::CURRENT_AS_FILEINFO</code>.</p>
     </dd>
    
    
     <dt id="filesystemiterator.constants.other-mode-mask"><strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.other-mode-mask">FilesystemIterator::OTHER_MODE_MASK</a></code></strong></dt>
     <dd>
      <p class="para">Mask used for <span class="methodname"><a href="filesystemiterator.getflags.php" class="methodname">FilesystemIterator::getFlags()</a></span> and <span class="methodname"><a href="filesystemiterator.setflags.php" class="methodname">FilesystemIterator::setFlags()</a></span>.</p>
     </dd>
    
    
     <dt id="filesystemiterator.constants.skip-dots"><strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.skip-dots">FilesystemIterator::SKIP_DOTS</a></code></strong></dt>
     <dd>
      <p class="para">Skips dot files (<code class="literal">.</code> and <code class="literal">..</code>).</p>
     </dd>
    
    
     <dt id="filesystemiterator.constants.unix-paths"><strong><code><a href="class.filesystemiterator.php#filesystemiterator.constants.unix-paths">FilesystemIterator::UNIX_PATHS</a></code></strong></dt>
     <dd>
      <p class="para">
       Makes paths use Unix-style forward slash irrespective of system default.
       Note that the <code class="parameter">path</code> that is passed to the
       constructor is not modified.
      </p>
     </dd>
    
   </dl>
  </div>
  

 </div>

 





































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="filesystemiterator.construct.php">FilesystemIterator::__construct</a> — Constructs a new filesystem iterator</li><li><a href="filesystemiterator.current.php">FilesystemIterator::current</a> — The current file</li><li><a href="filesystemiterator.getflags.php">FilesystemIterator::getFlags</a> — Get the handling flags</li><li><a href="filesystemiterator.key.php">FilesystemIterator::key</a> — Retrieve the key for the current file</li><li><a href="filesystemiterator.next.php">FilesystemIterator::next</a> — Move to the next file</li><li><a href="filesystemiterator.rewind.php">FilesystemIterator::rewind</a> — Rewinds back to the beginning</li><li><a href="filesystemiterator.setflags.php">FilesystemIterator::setFlags</a> — Sets handling flags</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/filesystemiterator.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.filesystemiterator%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.filesystemiterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.filesystemiterator.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114997">  <div class="votes">
    <div id="Vu114997">
    <a href="/manual/vote-note.php?id=114997&amp;page=class.filesystemiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114997">
    <a href="/manual/vote-note.php?id=114997&amp;page=class.filesystemiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114997" title="89% like this...">
    73
    </div>
  </div>
  <a href="#114997" class="name">
  <strong class="user"><em>paul at paulgarvin dot net</em></strong></a><a class="genanchor" href="#114997"> &para;</a><div class="date" title="2014-05-10 03:08"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114997">
<div class="phpcode"><code><span class="html">You may be wondering, like I did, what is the difference between this class and DirectoryIterator?<br /><br />When you iteterate using DirectoryIterator each "value" returned is the same DirectoryIterator object. The internal state is changed so when you call isDir(), getPathname(), etc the correct information is returned. If you were to ask for a key when iterating you will get an integer index value.<br /><br />FilesystemIterator (and RecursiveDirectoryIterator) on the other hand returns a new, different SplFileInfo object for each iteration step. The key is the full pathname of the file. This is by default. You can change what is returned for the key or value using the "flags" arguement to the constructor.</span></code></div>
  </div>
 </div>
  <div class="note" id="126262">  <div class="votes">
    <div id="Vu126262">
    <a href="/manual/vote-note.php?id=126262&amp;page=class.filesystemiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126262">
    <a href="/manual/vote-note.php?id=126262&amp;page=class.filesystemiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126262" title="87% like this...">
    12
    </div>
  </div>
  <a href="#126262" class="name">
  <strong class="user"><em>blackout at drunkenlords dot com</em></strong></a><a class="genanchor" href="#126262"> &para;</a><div class="date" title="2021-07-22 06:20"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126262">
<div class="phpcode"><code><span class="html">Here's a great little drop in replacement for FilesystemIterator I wrote to easily Iterate your filesystem, including:<br /><br />* Sorting - using ArrayIterator<br />* Regex Matching - using RegexIterator<br />* Limiting - using LimitIterator<br /><br />It's fully chainable<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Sort by filemtime<br /></span><span class="default">$files </span><span class="keyword">= (new </span><span class="default">AdvancedFilesystemIterator</span><span class="keyword">(</span><span class="string">'/path/to/files'</span><span class="keyword">))-&gt;</span><span class="default">sortByMTime</span><span class="keyword">();<br /><br /></span><span class="comment">// Sort by filemtime -&gt; Limit output to 10<br /></span><span class="default">$files </span><span class="keyword">= (new </span><span class="default">AdvancedFilesystemIterator</span><span class="keyword">(</span><span class="string">'/path/to/files'</span><span class="keyword">))-&gt;</span><span class="default">sortByMTime</span><span class="keyword">()-&gt;</span><span class="default">limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br /><br /></span><span class="comment">// Sort by filemtime -&gt; Only get CSV files -&gt; Limit to 10<br /></span><span class="default">$files </span><span class="keyword">= (new </span><span class="default">AdvancedFilesystemIterator</span><span class="keyword">(</span><span class="string">'/path/to/files'</span><span class="keyword">))-&gt;</span><span class="default">sortByMTime</span><span class="keyword">()-&gt;</span><span class="default">match</span><span class="keyword">(</span><span class="string">'/csv$/'</span><span class="keyword">)-&gt;</span><span class="default">limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br /><br /></span><span class="comment">// Sort by filemtime -&gt; Only get CSV files -&gt; Limit to 10 -&gt; and back to sorting by Filename<br /></span><span class="default">$files </span><span class="keyword">= (new </span><span class="default">AdvancedFilesystemIterator</span><span class="keyword">(</span><span class="string">'/path/to/files'</span><span class="keyword">))-&gt;</span><span class="default">sortByMTime</span><span class="keyword">()-&gt;</span><span class="default">match</span><span class="keyword">(</span><span class="string">'/csv$/'</span><span class="keyword">)-&gt;</span><span class="default">limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">)-&gt;</span><span class="default">sortByFilename</span><span class="keyword">();<br /><br /></span><span class="comment">// Sort by any of SplFileInfo's get*() methods i.e. Owner, CTime, Basename, ATime, Perms, Type, isFile, anything<br /></span><span class="default">$files </span><span class="keyword">= (new </span><span class="default">AdvancedFilesystemIterator</span><span class="keyword">(</span><span class="string">'/path/to/files'</span><span class="keyword">))-&gt;</span><span class="default">sortByOwner</span><span class="keyword">();<br /><br /></span><span class="comment">// Foreach<br /></span><span class="keyword">foreach ((new </span><span class="default">AdvancedFilesystemIterator</span><span class="keyword">(</span><span class="string">'/path/to/files'</span><span class="keyword">))-&gt;</span><span class="default">sortByMTime</span><span class="keyword">()-&gt;</span><span class="default">match</span><span class="keyword">(</span><span class="string">'/csv$/'</span><span class="keyword">)-&gt;</span><span class="default">limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">) AS </span><span class="default">$file</span><span class="keyword">)<br />{<br />    print </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">getFilename</span><span class="keyword">() . </span><span class="string">"&lt;br&gt;\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// The Class<br /></span><span class="keyword">class </span><span class="default">AdvancedFilesystemIterator </span><span class="keyword">extends </span><span class="default">ArrayIterator<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">string $path</span><span class="keyword">, </span><span class="default">int $flags </span><span class="keyword">= </span><span class="default">FilesystemIterator</span><span class="keyword">::</span><span class="default">KEY_AS_PATHNAME </span><span class="keyword">| </span><span class="default">FilesystemIterator</span><span class="keyword">::</span><span class="default">CURRENT_AS_FILEINFO </span><span class="keyword">| </span><span class="default">FilesystemIterator</span><span class="keyword">::</span><span class="default">SKIP_DOTS</span><span class="keyword">)<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">iterator_to_array</span><span class="keyword">(new </span><span class="default">FilesystemIterator</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">)));<br />    }<br /><br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">string $name</span><span class="keyword">, array </span><span class="default">$arguments</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^sortBy(.*)/'</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">)) return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sort</span><span class="keyword">(</span><span class="string">'get' </span><span class="keyword">. </span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />        throw new </span><span class="default">MemberAccessException</span><span class="keyword">(</span><span class="string">'Method ' </span><span class="keyword">. </span><span class="default">$methodName </span><span class="keyword">. </span><span class="string">' not exists'</span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">sort</span><span class="keyword">(</span><span class="default">$method</span><span class="keyword">)<br />    {<br />        if (!</span><span class="default">method_exists</span><span class="keyword">(</span><span class="string">'SplFileInfo'</span><span class="keyword">, </span><span class="default">$method</span><span class="keyword">)) throw new </span><span class="default">InvalidArgumentException</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'Method "%s" does not exist in SplFileInfo'</span><span class="keyword">, </span><span class="default">$method</span><span class="keyword">));<br /><br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">uasort</span><span class="keyword">(function(</span><span class="default">SplFileInfo $a</span><span class="keyword">, </span><span class="default">SplFileInfo $b</span><span class="keyword">) use (</span><span class="default">$method</span><span class="keyword">) { return (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">()) ? </span><span class="default">strnatcmp</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">(), </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">()) : </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">() - </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">$method</span><span class="keyword">()); });<br /><br />        return </span><span class="default">$this</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">limit</span><span class="keyword">(</span><span class="default">int $offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">int $limit </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">)<br />    {<br />        return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">iterator_to_array</span><span class="keyword">(new </span><span class="default">LimitIterator</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$limit</span><span class="keyword">))) ?? </span><span class="default">$this</span><span class="keyword">;<br />    }<br /><br />    public function match(</span><span class="default">string $regex</span><span class="keyword">, </span><span class="default">int $mode </span><span class="keyword">= </span><span class="default">RegexIterator</span><span class="keyword">::MATCH, </span><span class="default">int $flags </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">int $preg_flags </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />    {<br />        return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">iterator_to_array</span><span class="keyword">(new </span><span class="default">RegexIterator</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$regex</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">, </span><span class="default">$preg_flags</span><span class="keyword">))) ?? </span><span class="default">$this</span><span class="keyword">;<br />    }<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118114">  <div class="votes">
    <div id="Vu118114">
    <a href="/manual/vote-note.php?id=118114&amp;page=class.filesystemiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118114">
    <a href="/manual/vote-note.php?id=118114&amp;page=class.filesystemiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118114" title="54% like this...">
    4
    </div>
  </div>
  <a href="#118114" class="name">
  <strong class="user"><em>thedilab at gmail dot com</em></strong></a><a class="genanchor" href="#118114"> &para;</a><div class="date" title="2015-10-06 03:13"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118114">
<div class="phpcode"><code><span class="html">DirectoryIterator returns virtual directories "." and ".." in a loop.<br />But FilesystemIterator ignores them.</span></code></div>
  </div>
 </div>
  <div class="note" id="129650">  <div class="votes">
    <div id="Vu129650">
    <a href="/manual/vote-note.php?id=129650&amp;page=class.filesystemiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129650">
    <a href="/manual/vote-note.php?id=129650&amp;page=class.filesystemiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129650" title="100% like this...">
    2
    </div>
  </div>
  <a href="#129650" class="name">
  <strong class="user"><em>spamblocker1@yahoo</em></strong></a><a class="genanchor" href="#129650"> &para;</a><div class="date" title="2024-07-11 09:27"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129650">
<div class="phpcode"><code><span class="html">Here's the difference between DirectoryIterator and FileSystemIterator.<br /><br />FileSystemIterator extends DirectoryIterator, inheriting all of it's functionalities, but extending it with additional options and features:<br /><br />- Additional flags and options (e.g., FileSystemIterator::SKIP_DOTS to skip . and .. entries).<br />- Offers more control and flexibility over the iteration process.<br />- Suitable for more complex directory traversal requirements where additional control is needed.<br /><br />So if you just need the contents of a directory, use DirectoryIterator.<br /><br />If you need to do directory traversal, use FileSystemIterator.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.filesystemiterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.filesystemiterator.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="spl.iterators.php">Iterators</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.appenditerator.php" title="AppendIterator">AppendIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.arrayiterator.php" title="ArrayIterator">ArrayIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.cachingiterator.php" title="CachingIterator">CachingIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.callbackfilteriterator.php" title="CallbackFilterIterator">CallbackFilterIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.directoryiterator.php" title="DirectoryIterator">DirectoryIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.emptyiterator.php" title="EmptyIterator">EmptyIterator</a>
                        </li>
                                                <li class="current">
                            <a href="class.filesystemiterator.php" title="FilesystemIterator">FilesystemIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.filteriterator.php" title="FilterIterator">FilterIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.globiterator.php" title="GlobIterator">GlobIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.infiniteiterator.php" title="InfiniteIterator">InfiniteIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.iteratoriterator.php" title="IteratorIterator">IteratorIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.limititerator.php" title="LimitIterator">LimitIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.multipleiterator.php" title="MultipleIterator">MultipleIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.norewinditerator.php" title="NoRewindIterator">NoRewindIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.parentiterator.php" title="ParentIterator">ParentIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivearrayiterator.php" title="RecursiveArrayIterator">RecursiveArrayIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivecachingiterator.php" title="RecursiveCachingIterator">RecursiveCachingIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivecallbackfilteriterator.php" title="RecursiveCallbackFilterIterator">RecursiveCallbackFilterIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivedirectoryiterator.php" title="RecursiveDirectoryIterator">RecursiveDirectoryIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivefilteriterator.php" title="RecursiveFilterIterator">RecursiveFilterIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursiveiteratoriterator.php" title="RecursiveIteratorIterator">RecursiveIteratorIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursiveregexiterator.php" title="RecursiveRegexIterator">RecursiveRegexIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivetreeiterator.php" title="RecursiveTreeIterator">RecursiveTreeIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.regexiterator.php" title="RegexIterator">RegexIterator</a>
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
