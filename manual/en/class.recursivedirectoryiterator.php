<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: RecursiveDirectoryIterator - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.recursivedirectoryiterator.php">
 <link rel="shorturl" href="https://www.php.net/recursivedirectoryiterator">
 <link rel="alternate" href="https://www.php.net/recursivedirectoryiterator" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.iterators.php">
 <link rel="prev" href="https://www.php.net/manual/en/recursivecallbackfilteriterator.haschildren.php">
 <link rel="next" href="https://www.php.net/manual/en/recursivedirectoryiterator.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.recursivedirectoryiterator.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.recursivedirectoryiterator.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.recursivedirectoryiterator.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.recursivedirectoryiterator.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.recursivedirectoryiterator.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.recursivedirectoryiterator.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.recursivedirectoryiterator.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.recursivedirectoryiterator.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.recursivedirectoryiterator.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.recursivedirectoryiterator.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.recursivedirectoryiterator.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The RecursiveDirectoryIterator class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: RecursiveDirectoryIterator - Manual" />
<meta name="twitter:description" content="The RecursiveDirectoryIterator class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: RecursiveDirectoryIterator - Manual" />
<meta itemprop="description" content="The RecursiveDirectoryIterator class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The RecursiveDirectoryIterator class" />

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
        <a href="recursivedirectoryiterator.construct.php">
          RecursiveDirectoryIterator::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="recursivecallbackfilteriterator.haschildren.php">
          &laquo; RecursiveCallbackFilterIterator::hasChildren        </a>
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
            <option value='en/class.recursivedirectoryiterator.php' selected="selected">English</option>
            <option value='de/class.recursivedirectoryiterator.php'>German</option>
            <option value='es/class.recursivedirectoryiterator.php'>Spanish</option>
            <option value='fr/class.recursivedirectoryiterator.php'>French</option>
            <option value='it/class.recursivedirectoryiterator.php'>Italian</option>
            <option value='ja/class.recursivedirectoryiterator.php'>Japanese</option>
            <option value='pt_BR/class.recursivedirectoryiterator.php'>Brazilian Portuguese</option>
            <option value='ru/class.recursivedirectoryiterator.php'>Russian</option>
            <option value='tr/class.recursivedirectoryiterator.php'>Turkish</option>
            <option value='uk/class.recursivedirectoryiterator.php'>Ukrainian</option>
            <option value='zh/class.recursivedirectoryiterator.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.recursivedirectoryiterator" class="reference">
 <h1 class="title">The RecursiveDirectoryIterator class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>
 

  <div class="section" id="recursivedirectoryiterator.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The <span class="classname"><strong class="classname">RecursiveDirectoryIterator</strong></span> provides
    an interface for iterating recursively over filesystem directories.
   </p>
  </div>

 
  <div class="section" id="recursivedirectoryiterator.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">RecursiveDirectoryIterator</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.filesystemiterator.php" class="classname">FilesystemIterator</a>
    

    
     <span class="modifier">implements</span>
      <a href="class.recursiveiterator.php" class="interfacename">RecursiveIterator</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.current-mode-mask"><var class="varname">FilesystemIterator::CURRENT_MODE_MASK</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.current-as-pathname"><var class="varname">FilesystemIterator::CURRENT_AS_PATHNAME</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.current-as-fileinfo"><var class="varname">FilesystemIterator::CURRENT_AS_FILEINFO</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.current-as-self"><var class="varname">FilesystemIterator::CURRENT_AS_SELF</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.key-mode-mask"><var class="varname">FilesystemIterator::KEY_MODE_MASK</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.key-as-pathname"><var class="varname">FilesystemIterator::KEY_AS_PATHNAME</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.follow-symlinks"><var class="varname">FilesystemIterator::FOLLOW_SYMLINKS</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.key-as-filename"><var class="varname">FilesystemIterator::KEY_AS_FILENAME</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.new-current-and-key"><var class="varname">FilesystemIterator::NEW_CURRENT_AND_KEY</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.other-mode-mask"><var class="varname">FilesystemIterator::OTHER_MODE_MASK</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.skip-dots"><var class="varname">FilesystemIterator::SKIP_DOTS</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.filesystemiterator.php#filesystemiterator.constants.unix-paths"><var class="varname">FilesystemIterator::UNIX_PATHS</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$directory</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.getchildren.php" class="methodname">getChildren</a></span>(): <span class="type"><a href="class.recursivedirectoryiterator.php" class="type RecursiveDirectoryIterator">RecursiveDirectoryIterator</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.getsubpath.php" class="methodname">getSubPath</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.getsubpathname.php" class="methodname">getSubPathname</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.haschildren.php" class="methodname">hasChildren</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$allowLinks</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.key.php" class="methodname">key</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.current.php" class="methodname">FilesystemIterator::current</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="class.splfileinfo.php" class="type SplFileInfo">SplFileInfo</a></span>|<span class="type"><a href="class.filesystemiterator.php" class="type FilesystemIterator">FilesystemIterator</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.getflags.php" class="methodname">FilesystemIterator::getFlags</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.key.php" class="methodname">FilesystemIterator::key</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.next.php" class="methodname">FilesystemIterator::next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.rewind.php" class="methodname">FilesystemIterator::rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filesystemiterator.setflags.php" class="methodname">FilesystemIterator::setFlags</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

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
 


 </div>
 
 










































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="recursivedirectoryiterator.construct.php">RecursiveDirectoryIterator::__construct</a> — Constructs a RecursiveDirectoryIterator</li><li><a href="recursivedirectoryiterator.getchildren.php">RecursiveDirectoryIterator::getChildren</a> — Returns an iterator for the current entry if it is a directory</li><li><a href="recursivedirectoryiterator.getsubpath.php">RecursiveDirectoryIterator::getSubPath</a> — Get sub path</li><li><a href="recursivedirectoryiterator.getsubpathname.php">RecursiveDirectoryIterator::getSubPathname</a> — Get sub path and name</li><li><a href="recursivedirectoryiterator.haschildren.php">RecursiveDirectoryIterator::hasChildren</a> — Returns whether current entry is a directory and not '.' or '..'</li><li><a href="recursivedirectoryiterator.key.php">RecursiveDirectoryIterator::key</a> — Return path and filename of current dir entry</li><li><a href="recursivedirectoryiterator.next.php">RecursiveDirectoryIterator::next</a> — Move to next entry</li><li><a href="recursivedirectoryiterator.rewind.php">RecursiveDirectoryIterator::rewind</a> — Rewind dir back to the start</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/recursivedirectoryiterator.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.recursivedirectoryiterator%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.recursivedirectoryiterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.recursivedirectoryiterator.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="97228">  <div class="votes">
    <div id="Vu97228">
    <a href="/manual/vote-note.php?id=97228&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97228">
    <a href="/manual/vote-note.php?id=97228&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97228" title="74% like this...">
    110
    </div>
  </div>
  <a href="#97228" class="name">
  <strong class="user"><em>Thriault</em></strong></a><a class="genanchor" href="#97228"> &para;</a><div class="date" title="2010-04-09 12:05"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97228">
<div class="phpcode"><code><span class="html">If you would like to get, say, all the *.php files in your project folder, recursively, you could use the following:<br /><br /><span class="default">&lt;?php<br /><br />$Directory </span><span class="keyword">= new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="string">'path/to/project/'</span><span class="keyword">);<br /></span><span class="default">$Iterator </span><span class="keyword">= new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(</span><span class="default">$Directory</span><span class="keyword">);<br /></span><span class="default">$Regex </span><span class="keyword">= new </span><span class="default">RegexIterator</span><span class="keyword">(</span><span class="default">$Iterator</span><span class="keyword">, </span><span class="string">'/^.+\.php$/i'</span><span class="keyword">, </span><span class="default">RecursiveRegexIterator</span><span class="keyword">::</span><span class="default">GET_MATCH</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />$Regex will contain a single index array for each PHP file.</span></code></div>
  </div>
 </div>
  <div class="note" id="114504">  <div class="votes">
    <div id="Vu114504">
    <a href="/manual/vote-note.php?id=114504&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114504">
    <a href="/manual/vote-note.php?id=114504&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114504" title="81% like this...">
    53
    </div>
  </div>
  <a href="#114504" class="name">
  <strong class="user"><em>sun</em></strong></a><a class="genanchor" href="#114504"> &para;</a><div class="date" title="2014-02-28 08:39"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114504">
<div class="phpcode"><code><span class="html">Since I continue to run into implementations across the net that are unintentionally running into this trap — beware:<br /><br />RecursiveDirectoryIterator recurses without limitations into the full filesystem tree.<br /><br />Do NOT do the following, unless you intentionally want to infinitely recurse without limitations:<br /><br /><span class="default">&lt;?php<br />$directory </span><span class="keyword">= new </span><span class="default">\RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br /></span><span class="default">$iterator </span><span class="keyword">= new </span><span class="default">\RecursiveIteratorIterator</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">);<br /></span><span class="default">$files </span><span class="keyword">= array();<br />foreach (</span><span class="default">$iterator </span><span class="keyword">as </span><span class="default">$info</span><span class="keyword">) {<br />  if (...</span><span class="default">custom conditions</span><span class="keyword">...) {<br />    </span><span class="default">$files</span><span class="keyword">[] = </span><span class="default">$info</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">();<br />  }<br />}<br /></span><span class="default">?&gt;<br /></span><br />1. RecursiveDirectoryIterator is just a RecursiveIterator that recurses into its children, until no more children are found.<br /><br />2. The instantiation of RecursiveIteratorIterator causes RecursiveDirectoryIterator to *immediately* recurse infinitely into the entire filesystem tree (starting from the given base path).<br /><br />3. Unnecessary filesystem recursion is slow.  In 90% of all cases, this is not what you want.<br /><br />Remember this simple rule of thumb:<br /><br />→ A RecursiveDirectoryIterator must be FILTERED or you have a solid reason for why it shouldn't.<br /><br />On PHP &lt;5.4, implement the following - your custom conditions move into a proper filter:<br /><br /><span class="default">&lt;?php<br />$directory </span><span class="keyword">= new </span><span class="default">\RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">\FilesystemIterator</span><span class="keyword">::</span><span class="default">FOLLOW_SYMLINKS</span><span class="keyword">);<br /></span><span class="default">$filter </span><span class="keyword">= new </span><span class="default">MyRecursiveFilterIterator</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">);<br /></span><span class="default">$iterator </span><span class="keyword">= new </span><span class="default">\RecursiveIteratorIterator</span><span class="keyword">(</span><span class="default">$filter</span><span class="keyword">);<br /></span><span class="default">$files </span><span class="keyword">= array();<br />foreach (</span><span class="default">$iterator </span><span class="keyword">as </span><span class="default">$info</span><span class="keyword">) {<br />  </span><span class="default">$files</span><span class="keyword">[] = </span><span class="default">$info</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">();<br />}<br /><br />class </span><span class="default">MyRecursiveFilterIterator </span><span class="keyword">extends </span><span class="default">\RecursiveFilterIterator </span><span class="keyword">{<br /><br />  public function </span><span class="default">accept</span><span class="keyword">() {<br />    </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">getFilename</span><span class="keyword">();<br />    </span><span class="comment">// Skip hidden files and directories.<br />    </span><span class="keyword">if (</span><span class="default">$name</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] === </span><span class="string">'.'</span><span class="keyword">) {<br />      return </span><span class="default">FALSE</span><span class="keyword">;<br />    }<br />    if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">isDir</span><span class="keyword">()) {<br />      </span><span class="comment">// Only recurse into intended subdirectories.<br />      </span><span class="keyword">return </span><span class="default">$name </span><span class="keyword">=== </span><span class="string">'wanted_dirname'</span><span class="keyword">;<br />    }<br />    else {<br />      </span><span class="comment">// Only consume files of interest.<br />      </span><span class="keyword">return </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="string">'wanted_filename'</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">;<br />    }<br />  }<br /><br />}<br /></span><span class="default">?&gt;<br /></span><br />On PHP 5.4+, PHP core addressed the slightly cumbersome issue of having to create an entirely new class and you can leverage the new RecursiveCallbackFilterIterator instead:<br /><br /><span class="default">&lt;?php<br />$directory </span><span class="keyword">= new </span><span class="default">\RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">\FilesystemIterator</span><span class="keyword">::</span><span class="default">FOLLOW_SYMLINKS</span><span class="keyword">);<br /></span><span class="default">$filter </span><span class="keyword">= new </span><span class="default">\RecursiveCallbackFilterIterator</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">, function (</span><span class="default">$current</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$iterator</span><span class="keyword">) {<br />  </span><span class="comment">// Skip hidden files and directories.<br />  </span><span class="keyword">if (</span><span class="default">$current</span><span class="keyword">-&gt;</span><span class="default">getFilename</span><span class="keyword">()[</span><span class="default">0</span><span class="keyword">] === </span><span class="string">'.'</span><span class="keyword">) {<br />    return </span><span class="default">FALSE</span><span class="keyword">;<br />  }<br />  if (</span><span class="default">$current</span><span class="keyword">-&gt;</span><span class="default">isDir</span><span class="keyword">()) {<br />    </span><span class="comment">// Only recurse into intended subdirectories.<br />    </span><span class="keyword">return </span><span class="default">$current</span><span class="keyword">-&gt;</span><span class="default">getFilename</span><span class="keyword">() === </span><span class="string">'wanted_dirname'</span><span class="keyword">;<br />  }<br />  else {<br />    </span><span class="comment">// Only consume files of interest.<br />    </span><span class="keyword">return </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">-&gt;</span><span class="default">getFilename</span><span class="keyword">(), </span><span class="string">'wanted_filename'</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">;<br />  }<br />});<br /></span><span class="default">$iterator </span><span class="keyword">= new </span><span class="default">\RecursiveIteratorIterator</span><span class="keyword">(</span><span class="default">$filter</span><span class="keyword">);<br /></span><span class="default">$files </span><span class="keyword">= array();<br />foreach (</span><span class="default">$iterator </span><span class="keyword">as </span><span class="default">$info</span><span class="keyword">) {<br />  </span><span class="default">$files</span><span class="keyword">[] = </span><span class="default">$info</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;<br /></span><br />Have fun!</span></code></div>
  </div>
 </div>
  <div class="note" id="85805">  <div class="votes">
    <div id="Vu85805">
    <a href="/manual/vote-note.php?id=85805&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85805">
    <a href="/manual/vote-note.php?id=85805&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85805" title="77% like this...">
    44
    </div>
  </div>
  <a href="#85805" class="name">
  <strong class="user"><em>alvaro at demogracia dot com</em></strong></a><a class="genanchor" href="#85805"> &para;</a><div class="date" title="2008-09-18 08:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85805">
<div class="phpcode"><code><span class="html">Usage example:<br /><br /><span class="default">&lt;?php<br /><br />$path </span><span class="keyword">= </span><span class="default">realpath</span><span class="keyword">(</span><span class="string">'/etc'</span><span class="keyword">);<br /><br /></span><span class="default">$objects </span><span class="keyword">= new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">), </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">::</span><span class="default">SELF_FIRST</span><span class="keyword">);<br />foreach(</span><span class="default">$objects </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$object</span><span class="keyword">){<br />    echo </span><span class="string">"</span><span class="default">$name</span><span class="string">\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This prints a list of all files and directories under $path (including $path ifself). If you want to omit directories, remove the RecursiveIteratorIterator::SELF_FIRST part.</span></code></div>
  </div>
 </div>
  <div class="note" id="120971">  <div class="votes">
    <div id="Vu120971">
    <a href="/manual/vote-note.php?id=120971&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120971">
    <a href="/manual/vote-note.php?id=120971&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120971" title="78% like this...">
    8
    </div>
  </div>
  <a href="#120971" class="name">
  <strong class="user"><em>TDP</em></strong></a><a class="genanchor" href="#120971"> &para;</a><div class="date" title="2017-04-12 02:25"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120971">
<div class="phpcode"><code><span class="html">There are differences between Windows and Linux about the order of the files.<br /><br /><span class="default">&lt;?php<br />$it </span><span class="keyword">= new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(<br />    new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">( </span><span class="string">'path/to/dir' </span><span class="keyword">)<br />    </span><span class="comment">//, does not matter the flag<br />    </span><span class="keyword">);<br />...<br /></span><span class="default">?&gt;<br /></span><br />On Windows, you will get the files ordered by name. On Linux they are not ordered.</span></code></div>
  </div>
 </div>
  <div class="note" id="101654">  <div class="votes">
    <div id="Vu101654">
    <a href="/manual/vote-note.php?id=101654&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101654">
    <a href="/manual/vote-note.php?id=101654&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101654" title="75% like this...">
    10
    </div>
  </div>
  <a href="#101654" class="name">
  <strong class="user"><em>antennen</em></strong></a><a class="genanchor" href="#101654"> &para;</a><div class="date" title="2011-01-02 09:40"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101654">
<div class="phpcode"><code><span class="html">If you use RecursiveDirectoryIterator with RecursiveIteratorIterator and run into UnexpectedValueException you may use this little hack to ignore those directories, such as lost+found on linux.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">IgnorantRecursiveDirectoryIterator </span><span class="keyword">extends </span><span class="default">RecursiveDirectoryIterator </span><span class="keyword">{
<br />    function </span><span class="default">getChildren</span><span class="keyword">() {
<br />        try {
<br />            return new </span><span class="default">IgnorantRecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">());
<br />        } catch(</span><span class="default">UnexpectedValueException $e</span><span class="keyword">) {
<br />            return new </span><span class="default">RecursiveArrayIterator</span><span class="keyword">(array());
<br />        }
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Use just like the normal RecursiveDirectoryIterator.</span></code></div>
  </div>
 </div>
  <div class="note" id="111142">  <div class="votes">
    <div id="Vu111142">
    <a href="/manual/vote-note.php?id=111142&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111142">
    <a href="/manual/vote-note.php?id=111142&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111142" title="70% like this...">
    18
    </div>
  </div>
  <a href="#111142" class="name">
  <strong class="user"><em>catinahat at cool dot fr dot nf</em></strong></a><a class="genanchor" href="#111142"> &para;</a><div class="date" title="2013-01-19 12:44"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111142">
<div class="phpcode"><code><span class="html">If you need to convert a nested directory tree into a multidimensional array, use this code:
<br />
<br /><span class="default">&lt;?php
<br />$ritit </span><span class="keyword">= new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$startpath</span><span class="keyword">), </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">::</span><span class="default">CHILD_FIRST</span><span class="keyword">);
<br /></span><span class="default">$r </span><span class="keyword">= array();
<br />foreach (</span><span class="default">$ritit </span><span class="keyword">as </span><span class="default">$splFileInfo</span><span class="keyword">) {
<br />   </span><span class="default">$path </span><span class="keyword">= </span><span class="default">$splFileInfo</span><span class="keyword">-&gt;</span><span class="default">isDir</span><span class="keyword">()
<br />         ? array(</span><span class="default">$splFileInfo</span><span class="keyword">-&gt;</span><span class="default">getFilename</span><span class="keyword">() =&gt; array())
<br />         : array(</span><span class="default">$splFileInfo</span><span class="keyword">-&gt;</span><span class="default">getFilename</span><span class="keyword">());
<br />
<br />   for (</span><span class="default">$depth </span><span class="keyword">= </span><span class="default">$ritit</span><span class="keyword">-&gt;</span><span class="default">getDepth</span><span class="keyword">() - </span><span class="default">1</span><span class="keyword">; </span><span class="default">$depth </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$depth</span><span class="keyword">--) {
<br />       </span><span class="default">$path </span><span class="keyword">= array(</span><span class="default">$ritit</span><span class="keyword">-&gt;</span><span class="default">getSubIterator</span><span class="keyword">(</span><span class="default">$depth</span><span class="keyword">)-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">getFilename</span><span class="keyword">() =&gt; </span><span class="default">$path</span><span class="keyword">);
<br />   }
<br />   </span><span class="default">$r </span><span class="keyword">= </span><span class="default">array_merge_recursive</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118695">  <div class="votes">
    <div id="Vu118695">
    <a href="/manual/vote-note.php?id=118695&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118695">
    <a href="/manual/vote-note.php?id=118695&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118695" title="71% like this...">
    6
    </div>
  </div>
  <a href="#118695" class="name">
  <strong class="user"><em>alexandrebr at gmail dot com</em></strong></a><a class="genanchor" href="#118695"> &para;</a><div class="date" title="2016-01-20 02:50"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118695">
<div class="phpcode"><code><span class="html">I tried to use RecursiveDirectoryIterator to dump all files (and theirs properties, such as size/is_link/is_dir/mtime/perms/owner/group) from a large directory (~400.000 files), filtering some specific wanted files/folders.<br /><br />Using RecursiveDirectoryIterator and SplFileInfo, dump was taking about 50 seconds to perform, but it was working.<br /><br />However, to improve performance, I decided to make another version of the same script, using only direct file functions, such as "readdir", "filesize", "filemtime", etc.., and adding recursivity myself (if(is_dir($path)) doRecursivity($path);<br /><br />After running it, script went from ~50s to only ~20s to complete (On Linux CentOS 7, SSD 300IPs).<br /><br />Strangely, on Windows 7, Sata3 (with exactly same files [mirrored]) the time went from ~63s to ~57s.<br /><br />I believe that this payload is due to the OO approach of SPL, which runs lots of unnecessary extra code to perform the same tasks with more reliability, while direct file funcions are more like alias to C corresponding functions, and thereover, must faster.<br /><br />So, if you're dealing with a large amount of files, using RecursiveDirectoryIterator is probably not the way to go.</span></code></div>
  </div>
 </div>
  <div class="note" id="92233">  <div class="votes">
    <div id="Vu92233">
    <a href="/manual/vote-note.php?id=92233&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92233">
    <a href="/manual/vote-note.php?id=92233&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92233" title="72% like this...">
    5
    </div>
  </div>
  <a href="#92233" class="name">
  <strong class="user"><em>megar</em></strong></a><a class="genanchor" href="#92233"> &para;</a><div class="date" title="2009-07-15 01:57"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92233">
<div class="phpcode"><code><span class="html">Usage example:<br />To see all the files, and count the space usage:<br /><br /><span class="default">&lt;?php<br />$ite</span><span class="keyword">=new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="string">"/path/"</span><span class="keyword">);<br /><br /></span><span class="default">$bytestotal</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$nbfiles</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />foreach (new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(</span><span class="default">$ite</span><span class="keyword">) as </span><span class="default">$filename</span><span class="keyword">=&gt;</span><span class="default">$cur</span><span class="keyword">) {<br />    </span><span class="default">$filesize</span><span class="keyword">=</span><span class="default">$cur</span><span class="keyword">-&gt;</span><span class="default">getSize</span><span class="keyword">();<br />    </span><span class="default">$bytestotal</span><span class="keyword">+=</span><span class="default">$filesize</span><span class="keyword">;<br />    </span><span class="default">$nbfiles</span><span class="keyword">++;<br />    echo </span><span class="string">"</span><span class="default">$filename</span><span class="string"> =&gt; </span><span class="default">$filesize</span><span class="string">\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$bytestotal</span><span class="keyword">=</span><span class="default">number_format</span><span class="keyword">(</span><span class="default">$bytestotal</span><span class="keyword">);<br />echo </span><span class="string">"Total: </span><span class="default">$nbfiles</span><span class="string"> files, </span><span class="default">$bytestotal</span><span class="string"> bytes\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123777">  <div class="votes">
    <div id="Vu123777">
    <a href="/manual/vote-note.php?id=123777&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123777">
    <a href="/manual/vote-note.php?id=123777&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123777" title="66% like this...">
    2
    </div>
  </div>
  <a href="#123777" class="name">
  <strong class="user"><em>dev_zakaria at outlook dot com</em></strong></a><a class="genanchor" href="#123777"> &para;</a><div class="date" title="2019-04-15 03:50"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123777">
<div class="phpcode"><code><span class="html">if you want to show the all files from all directories you have to follow it- <br /><br />$dir = new RecursiveDirectoryIterator(getcwd());<br />$files = new RecursiveIteratorIterator($dir);<br /><br />foreach($files as $file){<br />   echo $file-&gt;getFileName();<br />   echo PHP_EOL; // for new line<br />}<br /><br />Now, if you want to show the full path, then follow this- <br /><br />$dir = new RecursiveDirectoryIterator(getcwd());<br />$files = new RecursiveIteratorIterator($dir);<br /><br />foreach($files as $file){<br />   echo $file-&gt;getPath().$file-&gt;getFileName();<br />   echo PHP_EOL;<br />}<br /><br />If you want to skip the dots, you need to change the first line with this-<br />$dir = new RecursiveDirectoryIterator(getcwd(), RecursiveDirectoryIterator::SKIP_DOTS);</span></code></div>
  </div>
 </div>
  <div class="note" id="107503">  <div class="votes">
    <div id="Vu107503">
    <a href="/manual/vote-note.php?id=107503&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107503">
    <a href="/manual/vote-note.php?id=107503&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107503" title="65% like this...">
    6
    </div>
  </div>
  <a href="#107503" class="name">
  <strong class="user"><em>Josh Heidenreich</em></strong></a><a class="genanchor" href="#107503"> &para;</a><div class="date" title="2012-02-14 03:51"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107503">
<div class="phpcode"><code><span class="html">The returned object is an iterator of SplFileInfo objects.</span></code></div>
  </div>
 </div>
  <div class="note" id="116969">  <div class="votes">
    <div id="Vu116969">
    <a href="/manual/vote-note.php?id=116969&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116969">
    <a href="/manual/vote-note.php?id=116969&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116969" title="63% like this...">
    3
    </div>
  </div>
  <a href="#116969" class="name">
  <strong class="user"><em>flobee</em></strong></a><a class="genanchor" href="#116969"> &para;</a><div class="date" title="2015-03-29 02:58"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116969">
<div class="phpcode"><code><span class="html">In this doc page i see things for to hide hidden files  (also for opendir() or readdir() .... this should be mentiond all there <br /><span class="default">&lt;?php<br /></span><span class="comment">// not hidden but on most OS systems Win, *nix, OSX..<br /></span><span class="keyword">if (</span><span class="default">$file </span><span class="keyword">== </span><span class="string">'.' </span><span class="keyword">|| </span><span class="default">$file </span><span class="keyword">== </span><span class="string">'..'</span><span class="keyword">) { <br />     </span><span class="comment">// "." current dir info, <br />     // ".." dir above info,<br />          </span><span class="keyword">continue; <br /></span><span class="default">?&gt;<br /></span>or<br /><span class="default">&lt;?php<br /></span><span class="keyword">if </span><span class="default">$name</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] === </span><span class="string">'.' </span><span class="comment">// NOT OK FOLKS<br /></span><span class="default">?&gt;<br /></span>Think: <br />"... and then came Polly.avi" is the title of the Movi. What do you do then?<br /><br />Windows does it different with hidden files than unix based systems.<br /><br />For unix based systems  something like this should work:<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^(\.\w+|\.$|\.\.$)/i'</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">)) {<br /></span><span class="comment">/* is hidden:<br />    .<br />    ..<br />    .dir<br />    .file<br />*/<br /></span><span class="keyword">}<br /></span><span class="comment">// must be ok: "..some thing", "... some thing"<br /></span><span class="default">?&gt;<br /></span><br />I know you do it (if $name[0] === '.' ) because it is much faster. But it is NOT correct and some day you miss things like me today :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="127006">  <div class="votes">
    <div id="Vu127006">
    <a href="/manual/vote-note.php?id=127006&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127006">
    <a href="/manual/vote-note.php?id=127006&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127006" title="100% like this...">
    2
    </div>
  </div>
  <a href="#127006" class="name">
  <strong class="user"><em>divinity76+spam at gmail dot com</em></strong></a><a class="genanchor" href="#127006"> &para;</a><div class="date" title="2022-04-23 08:29"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127006">
<div class="phpcode"><code><span class="html">if you just want a plain array, recursively, of all files (not directories), try<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/** <br /> * returns a plain string array of path to all files in a directory, and subdirectories,<br /> * but does not return directories themselves. (meaning if a directory is empty, it will not be included at all)<br /> * <br /> * @param string $dir<br /> * @param bool $realpath<br /> * @throws UnexpectedValueException if $dir is not readable/does not exists<br /> * @return string[] files<br /> */<br /></span><span class="keyword">function </span><span class="default">get_file_list_recursively</span><span class="keyword">(</span><span class="default">string $dir</span><span class="keyword">, </span><span class="default">bool $realpath </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">): array<br />{<br />    </span><span class="default">$files </span><span class="keyword">= array();<br />    </span><span class="default">$files </span><span class="keyword">= [];<br />    foreach ((new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">::</span><span class="default">SKIP_DOTS</span><span class="keyword">))) as </span><span class="default">$file</span><span class="keyword">) {<br />        </span><span class="comment">/** @var SplFileInfo $file */<br />        </span><span class="keyword">if (</span><span class="default">$realpath</span><span class="keyword">) {<br />            </span><span class="default">$files</span><span class="keyword">[] = </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">getRealPath</span><span class="keyword">();<br />        } else {<br />            </span><span class="default">$files</span><span class="keyword">[] = </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">getPathname</span><span class="keyword">();<br />        }<br />    }<br />    return </span><span class="default">$files</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />sample return:<br /><span class="default">&lt;?php<br /></span><span class="keyword">array (<br />  </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'/home/hans/scraping/1650518081RESULTS.txt'</span><span class="keyword">,<br />  </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'/home/hans/scraping/1650518121RESULTS.txt'</span><span class="keyword">,<br />  </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'/home/hans/scraping/1650518679RESULTS.txt'</span><span class="keyword">,<br />  </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="string">'/home/hans/scraping/1650518780RESULTS.txt'</span><span class="keyword">,<br />  </span><span class="default">4 </span><span class="keyword">=&gt; </span><span class="string">'/home/hans/scraping/1650522198RESULTS.txt'</span><span class="keyword">,<br />  </span><span class="default">5 </span><span class="keyword">=&gt; </span><span class="string">'/home/hans/scraping/1650522927RESULTS.txt'</span><span class="keyword">,<br />  </span><span class="default">6 </span><span class="keyword">=&gt; </span><span class="string">'/home/hans/scraping/1650525391RESULTS.txt'</span><span class="keyword">,<br />  </span><span class="default">7 </span><span class="keyword">=&gt; </span><span class="string">'/home/hans/scraping/check_cache.php'</span><span class="keyword">,<br />  </span><span class="default">8 </span><span class="keyword">=&gt; </span><span class="string">'/home/hans/scraping/foo/bar.txt'</span><span class="keyword">,<br />  </span><span class="default">9 </span><span class="keyword">=&gt; </span><span class="string">'/home/hans/scraping/foobar.txt'</span><span class="keyword">,<br />  </span><span class="default">10 </span><span class="keyword">=&gt; </span><span class="string">'/home/hans/scraping/GoodProxyDaemon.php'</span><span class="keyword">,<br />);<br /></span><span class="default">?&gt;<br /></span><br />(note to editor, if you can find a better sample return, feel absolutely free to overwrite the one above)</span></code></div>
  </div>
 </div>
  <div class="note" id="130236">  <div class="votes">
    <div id="Vu130236">
    <a href="/manual/vote-note.php?id=130236&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130236">
    <a href="/manual/vote-note.php?id=130236&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130236" title="no votes...">
    0
    </div>
  </div>
  <a href="#130236" class="name">
  <strong class="user"><em>vrana at php dot net</em></strong></a><a class="genanchor" href="#130236"> &para;</a><div class="date" title="2025-04-09 02:08"><strong>5 months ago</strong></div>
  <div class="text" id="Hcom130236">
<div class="phpcode"><code><span class="html">The simplest recursive glob:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">rglob</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">) {<br />    yield from </span><span class="default">glob</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">);<br />    foreach (</span><span class="default">glob</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">) . </span><span class="string">"/*"</span><span class="keyword">, </span><span class="default">GLOB_ONLYDIR</span><span class="keyword">) as </span><span class="default">$dir</span><span class="keyword">) {<br />        yield from </span><span class="default">rglob</span><span class="keyword">(</span><span class="string">"</span><span class="default">$dir</span><span class="string">/" </span><span class="keyword">. </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">));<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124182">  <div class="votes">
    <div id="Vu124182">
    <a href="/manual/vote-note.php?id=124182&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124182">
    <a href="/manual/vote-note.php?id=124182&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124182" title="no votes...">
    0
    </div>
  </div>
  <a href="#124182" class="name">
  <strong class="user"><em>dxvargas</em></strong></a><a class="genanchor" href="#124182"> &para;</a><div class="date" title="2019-09-09 08:54"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124182">
<div class="phpcode"><code><span class="html">When using the option FilesystemIterator::FOLLOW_SYMLINKS if there is a symlink to an upper directory there is a loop so we end up with repeated directories.<br />For example (having a -&gt; ../ ):<br /><br />/c<br />/c/..<br />/c/a<br />/c/a/c<br />/c/a/c/..<br />/c/a/c/a<br />/c/a/c/a/c<br />... (up to 40 x /c/a )<br />/c/a/c/a/..<br />/c/a/c/a/.<br />/c/a/c/.<br />/c/a/..<br />/c/a/.<br />/c/.<br />/..<br />/.<br /><br />Apparently there is a limit to avoid having an infinite loop. I don't know documentation for this.<br /><br />It would be interesting to have an option to allow following symlinks without loops.</span></code></div>
  </div>
 </div>
  <div class="note" id="113936">  <div class="votes">
    <div id="Vu113936">
    <a href="/manual/vote-note.php?id=113936&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113936">
    <a href="/manual/vote-note.php?id=113936&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113936" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#113936" class="name">
  <strong class="user"><em>Edward Rudd</em></strong></a><a class="genanchor" href="#113936"> &para;</a><div class="date" title="2013-12-18 04:11"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113936">
<div class="phpcode"><code><span class="html">(related to the post about exceptions in getChildren().<br /><br />instead of subclassing you can simply use the CATCH_GET_CHILD flag for RecursiveIteratorIterator<br /><br />new RecursiveIteratorIterator($diriter, RecursiveIteratorIterator::CATCH_GET_CHILD);</span></code></div>
  </div>
 </div>
  <div class="note" id="124116">  <div class="votes">
    <div id="Vu124116">
    <a href="/manual/vote-note.php?id=124116&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124116">
    <a href="/manual/vote-note.php?id=124116&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124116" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#124116" class="name">
  <strong class="user"><em>flaurora_sonora</em></strong></a><a class="genanchor" href="#124116"> &para;</a><div class="date" title="2019-08-15 11:30"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124116">
<div class="phpcode"><code><span class="html">Do not waste your time with this. I have included a function below that accomplishes the same thing more simply. If you want to do regex while iterating you can pass the regex into the recursive function as a parameter.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">recursive_read</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">, </span><span class="default">$entries_array </span><span class="keyword">= array()) {<br />    if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">)) {<br />        </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">);<br />        while(</span><span class="default">FALSE </span><span class="keyword">!== (</span><span class="default">$entry </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">))) {<br />            if(</span><span class="default">$entry </span><span class="keyword">== </span><span class="string">'.' </span><span class="keyword">|| </span><span class="default">$entry </span><span class="keyword">== </span><span class="string">'..'</span><span class="keyword">) {<br />                continue;<br />            }<br />            </span><span class="default">$Entry </span><span class="keyword">= </span><span class="default">$directory </span><span class="keyword">. </span><span class="default">DS </span><span class="keyword">. </span><span class="default">$entry</span><span class="keyword">;<br />            if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$Entry</span><span class="keyword">)) {<br />                </span><span class="default">$entries_array </span><span class="keyword">= </span><span class="default">recursive_read</span><span class="keyword">(</span><span class="default">$Entry</span><span class="keyword">, </span><span class="default">$entries_array</span><span class="keyword">);<br />            } else {<br />                </span><span class="default">$entries_array</span><span class="keyword">[] = </span><span class="default">$Entry</span><span class="keyword">;<br />            }<br />        }<br />        </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$entries_array</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113667">  <div class="votes">
    <div id="Vu113667">
    <a href="/manual/vote-note.php?id=113667&amp;page=class.recursivedirectoryiterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113667">
    <a href="/manual/vote-note.php?id=113667&amp;page=class.recursivedirectoryiterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113667" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#113667" class="name">
  <strong class="user"><em>dblanchard1 at bbox dot fr</em></strong></a><a class="genanchor" href="#113667"> &para;</a><div class="date" title="2013-11-13 09:07"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113667">
<div class="phpcode"><code><span class="html">If you want to copy all files recursively from a source directory to some destination  :<br /><br />    $directory = new RecursiveDirectoryIterator("./source_path/");<br /><br />    foreach (new RecursiveIteratorIterator($directory) as $filename=&gt;$current) {<br />            <br />            $src = $current-&gt;getPathName();<br />            $dest = "./destination_path/" . $current-&gt;getFileName();<br />            <br />            echo "copy " .  $src . " =&gt; " . $dest  . "\n";<br />            <br />            copy($src, $dest);<br />     }<br /><br />I hope it can help someone because when I looked for this solution I had to transform another example to get it.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.recursivedirectoryiterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.recursivedirectoryiterator.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
