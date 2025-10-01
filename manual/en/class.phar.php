<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Phar - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.phar.php">
 <link rel="shorturl" href="https://www.php.net/phar">
 <link rel="alternate" href="https://www.php.net/phar" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.phar.php">
 <link rel="prev" href="https://www.php.net/manual/en/phar.fileformat.signature.php">
 <link rel="next" href="https://www.php.net/manual/en/phar.addemptydir.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.phar.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.phar.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.phar.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.phar.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.phar.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.phar.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.phar.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.phar.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.phar.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.phar.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.phar.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Phar class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Phar - Manual" />
<meta name="twitter:description" content="The Phar class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Phar - Manual" />
<meta itemprop="description" content="The Phar class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Phar class" />

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
        <a href="phar.addemptydir.php">
          Phar::addEmptyDir &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="phar.fileformat.signature.php">
          &laquo; Phar Signature format        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.phar.php'>Phar</a></li>      </ul>
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
            <option value='en/class.phar.php' selected="selected">English</option>
            <option value='de/class.phar.php'>German</option>
            <option value='es/class.phar.php'>Spanish</option>
            <option value='fr/class.phar.php'>French</option>
            <option value='it/class.phar.php'>Italian</option>
            <option value='ja/class.phar.php'>Japanese</option>
            <option value='pt_BR/class.phar.php'>Brazilian Portuguese</option>
            <option value='ru/class.phar.php'>Russian</option>
            <option value='tr/class.phar.php'>Turkish</option>
            <option value='uk/class.phar.php'>Ukrainian</option>
            <option value='zh/class.phar.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.phar" class="reference">
 <h1 class="title">The Phar class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8, PECL phar &gt;= 1.0.0)</p>
 

  <div class="section" id="phar.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The Phar class provides a high-level interface to accessing and creating
    phar archives.
   </p>
  </div>

 
  <div class="section" id="phar.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">Phar</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.recursivedirectoryiterator.php" class="classname">RecursiveDirectoryIterator</a>
    

    
     <span class="modifier">implements</span>
      <a href="class.countable.php" class="interfacename">Countable</a>,

     <a href="class.arrayaccess.php" class="interfacename">ArrayAccess</a> {</div>

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


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.bz2"><var class="varname">BZ2</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.gz"><var class="varname">GZ</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.none"><var class="varname">NONE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.phar"><var class="varname">PHAR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.tar"><var class="varname">TAR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.zip"><var class="varname">ZIP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.compressed"><var class="varname">COMPRESSED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.php"><var class="varname">PHP</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.phps"><var class="varname">PHPS</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.md5"><var class="varname">MD5</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.openssl"><var class="varname">OPENSSL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.openssl-sha256"><var class="varname">OPENSSL_SHA256</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.openssl-sha512"><var class="varname">OPENSSL_SHA512</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.sha1"><var class="varname">SHA1</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.sha256"><var class="varname">SHA256</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="phar.constants.php#phar.constants.sha512"><var class="varname">SHA512</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="phar.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS</span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$alias</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.addemptydir.php" class="methodname">addEmptyDir</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$directory</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.addfile.php" class="methodname">addFile</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$localName</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.addfromstring.php" class="methodname">addFromString</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$contents</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.apiversion.php" class="methodname">apiVersion</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.buildfromdirectory.php" class="methodname">buildFromDirectory</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$directory</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code><span class="initializer"> = &quot;&quot;</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.buildfromiterator.php" class="methodname">buildFromIterator</a></span>(<span class="methodparam"><span class="type"><a href="class.traversable.php" class="type Traversable">Traversable</a></span> <code class="parameter">$iterator</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$baseDirectory</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.cancompress.php" class="methodname">canCompress</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$compression</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.canwrite.php" class="methodname">canWrite</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.compress.php" class="methodname">compress</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$compression</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$extension</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.phar.php" class="type Phar">Phar</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.compressfiles.php" class="methodname">compressFiles</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$compression</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.converttodata.php" class="methodname">convertToData</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$format</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$compression</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$extension</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.phardata.php" class="type PharData">PharData</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.converttoexecutable.php" class="methodname">convertToExecutable</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$format</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$compression</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$extension</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.phar.php" class="type Phar">Phar</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.copy.php" class="methodname">copy</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$from</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$to</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.count.php" class="methodname">count</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = <strong><code><a href="array.constants.php#constant.count-normal">COUNT_NORMAL</a></code></strong></span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.createdefaultstub.php" class="methodname">createDefaultStub</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$index</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$webIndex</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.decompress.php" class="methodname">decompress</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$extension</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.phar.php" class="type Phar">Phar</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.decompressfiles.php" class="methodname">decompressFiles</a></span>(): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.delmetadata.php" class="methodname">delMetadata</a></span>(): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.delete.php" class="methodname">delete</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.extractto.php" class="methodname">extractTo</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$directory</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$files</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$overwrite</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.getalias.php" class="methodname">getAlias</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.getmetadata.php" class="methodname">getMetadata</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$unserializeOptions</code><span class="initializer"> = []</span></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.getmodified.php" class="methodname">getModified</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.getpath.php" class="methodname">getPath</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.getsignature.php" class="methodname">getSignature</a></span>(): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.getstub.php" class="methodname">getStub</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.getsupportedcompression.php" class="methodname">getSupportedCompression</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.getsupportedsignatures.php" class="methodname">getSupportedSignatures</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.getversion.php" class="methodname">getVersion</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.hasmetadata.php" class="methodname">hasMetadata</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.interceptfilefuncs.php" class="methodname">interceptFileFuncs</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.isbuffering.php" class="methodname">isBuffering</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.iscompressed.php" class="methodname">isCompressed</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.isfileformat.php" class="methodname">isFileFormat</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$format</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.isvalidpharfilename.php" class="methodname">isValidPharFilename</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$executable</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.iswritable.php" class="methodname">isWritable</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.loadphar.php" class="methodname">loadPhar</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$alias</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.mapphar.php" class="methodname">mapPhar</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$alias</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.mount.php" class="methodname">mount</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pharPath</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$externalPath</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.mungserver.php" class="methodname">mungServer</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$variables</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.offsetexists.php" class="methodname">offsetExists</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.offsetget.php" class="methodname">offsetGet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>): <span class="type"><a href="class.splfileinfo.php" class="type SplFileInfo">SplFileInfo</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.offsetset.php" class="methodname">offsetSet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.offsetunset.php" class="methodname">offsetUnset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$localName</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.running.php" class="methodname">running</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$returnPhar</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.setalias.php" class="methodname">setAlias</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$alias</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.setdefaultstub.php" class="methodname">setDefaultStub</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$index</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$webIndex</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.setmetadata.php" class="methodname">setMetadata</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$metadata</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.setsignaturealgorithm.php" class="methodname">setSignatureAlgorithm</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$algo</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$privateKey</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.setstub.php" class="methodname">setStub</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$stub</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code><span class="initializer"> = -1</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.startbuffering.php" class="methodname">startBuffering</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.stopbuffering.php" class="methodname">stopBuffering</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.unlinkarchive.php" class="methodname">unlinkArchive</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="phar.webphar.php" class="methodname">webPhar</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$alias</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$index</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$fileNotFoundScript</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$mimeTypes</code><span class="initializer"> = []</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span></span> <code class="parameter">$rewrite</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

    <div class="destructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="phar.destruct.php" class="methodname">__destruct</a></span>()</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.getchildren.php" class="methodname">RecursiveDirectoryIterator::getChildren</a></span>(): <span class="type"><a href="class.recursivedirectoryiterator.php" class="type RecursiveDirectoryIterator">RecursiveDirectoryIterator</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.getsubpath.php" class="methodname">RecursiveDirectoryIterator::getSubPath</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.getsubpathname.php" class="methodname">RecursiveDirectoryIterator::getSubPathname</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.haschildren.php" class="methodname">RecursiveDirectoryIterator::hasChildren</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$allowLinks</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.key.php" class="methodname">RecursiveDirectoryIterator::key</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.next.php" class="methodname">RecursiveDirectoryIterator::next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursivedirectoryiterator.rewind.php" class="methodname">RecursiveDirectoryIterator::rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

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

  <div class="section">
   <h2 class="title">Changelog</h2>
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.4.0</td>
       <td>
        Added support for the Unix timestamp extension for Zip-based archives.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>
 </div>

 























































































































































































































































































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="phar.addemptydir.php">Phar::addEmptyDir</a> — Add an empty directory to the phar archive</li><li><a href="phar.addfile.php">Phar::addFile</a> — Add a file from the filesystem to the phar archive</li><li><a href="phar.addfromstring.php">Phar::addFromString</a> — Add a file from a string to the phar archive</li><li><a href="phar.apiversion.php">Phar::apiVersion</a> — Returns the api version</li><li><a href="phar.buildfromdirectory.php">Phar::buildFromDirectory</a> — Construct a phar archive from the files within a directory</li><li><a href="phar.buildfromiterator.php">Phar::buildFromIterator</a> — Construct a phar archive from an iterator</li><li><a href="phar.cancompress.php">Phar::canCompress</a> — Returns whether phar extension supports compression using either zlib or bzip2</li><li><a href="phar.canwrite.php">Phar::canWrite</a> — Returns whether phar extension supports writing and creating phars</li><li><a href="phar.compress.php">Phar::compress</a> — Compresses the entire Phar archive using Gzip or Bzip2 compression</li><li><a href="phar.compressfiles.php">Phar::compressFiles</a> — Compresses all files in the current Phar archive</li><li><a href="phar.construct.php">Phar::__construct</a> — Construct a Phar archive object</li><li><a href="phar.converttodata.php">Phar::convertToData</a> — Convert a phar archive to a non-executable tar or zip file</li><li><a href="phar.converttoexecutable.php">Phar::convertToExecutable</a> — Convert a phar archive to another executable phar archive file format</li><li><a href="phar.copy.php">Phar::copy</a> — Copy a file internal to the phar archive to another new file within the phar</li><li><a href="phar.count.php">Phar::count</a> — Returns the number of entries (files) in the Phar archive</li><li><a href="phar.createdefaultstub.php">Phar::createDefaultStub</a> — Create a phar-file format specific stub</li><li><a href="phar.decompress.php">Phar::decompress</a> — Decompresses the entire Phar archive</li><li><a href="phar.decompressfiles.php">Phar::decompressFiles</a> — Decompresses all files in the current Phar archive</li><li><a href="phar.delmetadata.php">Phar::delMetadata</a> — Deletes the global metadata of the phar</li><li><a href="phar.delete.php">Phar::delete</a> — Delete a file within a phar archive</li><li><a href="phar.destruct.php">Phar::__destruct</a> — Destructs a Phar archive object</li><li><a href="phar.extractto.php">Phar::extractTo</a> — Extract the contents of a phar archive to a directory</li><li><a href="phar.getalias.php">Phar::getAlias</a> — Get the alias for Phar</li><li><a href="phar.getmetadata.php">Phar::getMetadata</a> — Returns phar archive meta-data</li><li><a href="phar.getmodified.php">Phar::getModified</a> — Return whether phar was modified</li><li><a href="phar.getpath.php">Phar::getPath</a> — Get the real path to the Phar archive on disk</li><li><a href="phar.getsignature.php">Phar::getSignature</a> — Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive</li><li><a href="phar.getstub.php">Phar::getStub</a> — Return the PHP loader or bootstrap stub of a Phar archive</li><li><a href="phar.getsupportedcompression.php">Phar::getSupportedCompression</a> — Return array of supported compression algorithms</li><li><a href="phar.getsupportedsignatures.php">Phar::getSupportedSignatures</a> — Return array of supported signature types</li><li><a href="phar.getversion.php">Phar::getVersion</a> — Return version info of Phar archive</li><li><a href="phar.hasmetadata.php">Phar::hasMetadata</a> — Returns whether phar has global meta-data</li><li><a href="phar.interceptfilefuncs.php">Phar::interceptFileFuncs</a> — Instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions</li><li><a href="phar.isbuffering.php">Phar::isBuffering</a> — Used to determine whether Phar write operations are being buffered, or are flushing directly to disk</li><li><a href="phar.iscompressed.php">Phar::isCompressed</a> — Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)</li><li><a href="phar.isfileformat.php">Phar::isFileFormat</a> — Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter</li><li><a href="phar.isvalidpharfilename.php">Phar::isValidPharFilename</a> — Returns whether the given filename is a valid phar filename</li><li><a href="phar.iswritable.php">Phar::isWritable</a> — Returns true if the phar archive can be modified</li><li><a href="phar.loadphar.php">Phar::loadPhar</a> — Loads any phar archive with an alias</li><li><a href="phar.mapphar.php">Phar::mapPhar</a> — Reads the currently executed file (a phar) and registers its manifest</li><li><a href="phar.mount.php">Phar::mount</a> — Mount an external path or file to a virtual location within the phar archive</li><li><a href="phar.mungserver.php">Phar::mungServer</a> — Defines a list of up to 4 $_SERVER variables that should be modified for execution</li><li><a href="phar.offsetexists.php">Phar::offsetExists</a> — Determines whether a file exists in the phar</li><li><a href="phar.offsetget.php">Phar::offsetGet</a> — Gets a PharFileInfo object for a specific file</li><li><a href="phar.offsetset.php">Phar::offsetSet</a> — Set the contents of an internal file to those of an external file</li><li><a href="phar.offsetunset.php">Phar::offsetUnset</a> — Remove a file from a phar</li><li><a href="phar.running.php">Phar::running</a> — Returns the full path on disk or full phar URL to the currently executing Phar archive</li><li><a href="phar.setalias.php">Phar::setAlias</a> — Set the alias for the Phar archive</li><li><a href="phar.setdefaultstub.php">Phar::setDefaultStub</a> — Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader</li><li><a href="phar.setmetadata.php">Phar::setMetadata</a> — Sets phar archive meta-data</li><li><a href="phar.setsignaturealgorithm.php">Phar::setSignatureAlgorithm</a> — Set the signature algorithm for a phar and apply it</li><li><a href="phar.setstub.php">Phar::setStub</a> — Used to set the PHP loader or bootstrap stub of a Phar archive</li><li><a href="phar.startbuffering.php">Phar::startBuffering</a> — Start buffering Phar write operations, do not modify the Phar object on disk</li><li><a href="phar.stopbuffering.php">Phar::stopBuffering</a> — Stop buffering write requests to the Phar archive, and save changes to disk</li><li><a href="phar.unlinkarchive.php">Phar::unlinkArchive</a> — Completely remove a phar archive from disk and from memory</li><li><a href="phar.webphar.php">Phar::webPhar</a> — Routes a request from a web browser to an internal file within the phar archive</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/phar/Phar.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.phar%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.phar&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.phar.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.phar.php">Phar</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.phar.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="phar.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="phar.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="phar.using.php" title="Using Phar Archives">Using Phar Archives</a>
                        </li>
                                                <li class="">
                            <a href="phar.creating.php" title="Creating Phar Archives">Creating Phar Archives</a>
                        </li>
                                                <li class="">
                            <a href="phar.fileformat.php" title="What makes a phar a phar and not a tar or a zip?">What makes a phar a phar and not a tar or a zip?</a>
                        </li>
                                                <li class="current">
                            <a href="class.phar.php" title="Phar">Phar</a>
                        </li>
                                                <li class="">
                            <a href="class.phardata.php" title="PharData">PharData</a>
                        </li>
                                                <li class="">
                            <a href="class.pharfileinfo.php" title="PharFileInfo">PharFileInfo</a>
                        </li>
                                                <li class="">
                            <a href="class.pharexception.php" title="PharException">PharException</a>
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
