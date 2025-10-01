<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SplHeap - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.splheap.php">
 <link rel="shorturl" href="https://www.php.net/splheap">
 <link rel="alternate" href="https://www.php.net/splheap" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.datastructures.php">
 <link rel="prev" href="https://www.php.net/manual/en/splqueue.enqueue.php">
 <link rel="next" href="https://www.php.net/manual/en/splheap.compare.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.splheap.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.splheap.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.splheap.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.splheap.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.splheap.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.splheap.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.splheap.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.splheap.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.splheap.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.splheap.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.splheap.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SplHeap class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SplHeap - Manual" />
<meta name="twitter:description" content="The SplHeap class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SplHeap - Manual" />
<meta itemprop="description" content="The SplHeap class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SplHeap class" />

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
        <a href="splheap.compare.php">
          SplHeap::compare &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="splqueue.enqueue.php">
          &laquo; SplQueue::enqueue        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.spl.php'>SPL</a></li>      <li><a href='spl.datastructures.php'>Datastructures</a></li>      </ul>
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
            <option value='en/class.splheap.php' selected="selected">English</option>
            <option value='de/class.splheap.php'>German</option>
            <option value='es/class.splheap.php'>Spanish</option>
            <option value='fr/class.splheap.php'>French</option>
            <option value='it/class.splheap.php'>Italian</option>
            <option value='ja/class.splheap.php'>Japanese</option>
            <option value='pt_BR/class.splheap.php'>Brazilian Portuguese</option>
            <option value='ru/class.splheap.php'>Russian</option>
            <option value='tr/class.splheap.php'>Turkish</option>
            <option value='uk/class.splheap.php'>Ukrainian</option>
            <option value='zh/class.splheap.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.splheap" class="reference">
 <h1 class="title">The SplHeap class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
 

  <div class="section" id="splheap.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The SplHeap class provides the main functionalities of a Heap.
   </p>
  </div>

 
  <div class="section" id="splheap.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">abstract</span>
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">SplHeap</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.iterator.php" class="interfacename">Iterator</a>,

     <a href="class.countable.php" class="interfacename">Countable</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">protected</span> <span class="methodname"><a href="splheap.compare.php" class="methodname">compare</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value2</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splheap.count.php" class="methodname">count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splheap.current.php" class="methodname">current</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splheap.extract.php" class="methodname">extract</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splheap.insert.php" class="methodname">insert</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splheap.iscorrupted.php" class="methodname">isCorrupted</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splheap.isempty.php" class="methodname">isEmpty</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splheap.key.php" class="methodname">key</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splheap.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splheap.recoverfromcorruption.php" class="methodname">recoverFromCorruption</a></span>(): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splheap.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splheap.top.php" class="methodname">top</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splheap.valid.php" class="methodname">valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>
 
  </div>
 

 
 </div>
 
 
































































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="splheap.compare.php">SplHeap::compare</a> — Compare elements in order to place them correctly in the heap while sifting up</li><li><a href="splheap.count.php">SplHeap::count</a> — Counts the number of elements in the heap</li><li><a href="splheap.current.php">SplHeap::current</a> — Return current node pointed by the iterator</li><li><a href="splheap.extract.php">SplHeap::extract</a> — Extracts a node from top of the heap and sift up</li><li><a href="splheap.insert.php">SplHeap::insert</a> — Inserts an element in the heap by sifting it up</li><li><a href="splheap.iscorrupted.php">SplHeap::isCorrupted</a> — Tells if the heap is in a corrupted state</li><li><a href="splheap.isempty.php">SplHeap::isEmpty</a> — Checks whether the heap is empty</li><li><a href="splheap.key.php">SplHeap::key</a> — Return current node index</li><li><a href="splheap.next.php">SplHeap::next</a> — Move to the next node</li><li><a href="splheap.recoverfromcorruption.php">SplHeap::recoverFromCorruption</a> — Recover from the corrupted state and allow further actions on the heap</li><li><a href="splheap.rewind.php">SplHeap::rewind</a> — Rewind iterator back to the start (no-op)</li><li><a href="splheap.top.php">SplHeap::top</a> — Peeks at the node from the top of the heap</li><li><a href="splheap.valid.php">SplHeap::valid</a> — Check whether the heap contains more nodes</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/splheap.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.splheap%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.splheap&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.splheap.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93930">  <div class="votes">
    <div id="Vu93930">
    <a href="/manual/vote-note.php?id=93930&amp;page=class.splheap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93930">
    <a href="/manual/vote-note.php?id=93930&amp;page=class.splheap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93930" title="84% like this...">
    68
    </div>
  </div>
  <a href="#93930" class="name">
  <strong class="user"><em>Michelangelo van Dam</em></strong></a><a class="genanchor" href="#93930"> &para;</a><div class="date" title="2009-10-06 11:44"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93930">
<div class="phpcode"><code><span class="html">To have a good idea what you can do with SplHeap, I created a little example script that will show the rankings of Belgian soccer teams in the Jupiler League.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * A class that extends SplHeap for showing rankings in the Belgian<br /> * soccer tournament JupilerLeague<br /> */<br /></span><span class="keyword">class </span><span class="default">JupilerLeague </span><span class="keyword">extends </span><span class="default">SplHeap <br /></span><span class="keyword">{<br />    </span><span class="comment">/**<br />     * We modify the abstract method compare so we can sort our<br />     * rankings using the values of a given array<br />     */<br />    </span><span class="keyword">public function </span><span class="default">compare</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">)<br />    {<br />        </span><span class="default">$values1 </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">);<br />        </span><span class="default">$values2 </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">);<br />        if (</span><span class="default">$values1</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] === </span><span class="default">$values2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) return </span><span class="default">0</span><span class="keyword">;<br />        return </span><span class="default">$values1</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] &lt; </span><span class="default">$values2</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] ? -</span><span class="default">1 </span><span class="keyword">: </span><span class="default">1</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">// Let's populate our heap here (data of 2009)<br /></span><span class="default">$heap </span><span class="keyword">= new </span><span class="default">JupilerLeague</span><span class="keyword">();<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'AA Gent' </span><span class="keyword">=&gt; </span><span class="default">15</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'Anderlecht' </span><span class="keyword">=&gt; </span><span class="default">20</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'Cercle Brugge' </span><span class="keyword">=&gt; </span><span class="default">11</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'Charleroi' </span><span class="keyword">=&gt; </span><span class="default">12</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'Club Brugge' </span><span class="keyword">=&gt; </span><span class="default">21</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'G. Beerschot' </span><span class="keyword">=&gt; </span><span class="default">15</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'Kortrijk' </span><span class="keyword">=&gt; </span><span class="default">10</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'KV Mechelen' </span><span class="keyword">=&gt; </span><span class="default">18</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'Lokeren' </span><span class="keyword">=&gt; </span><span class="default">10</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'Moeskroen' </span><span class="keyword">=&gt; </span><span class="default">7</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'Racing Genk' </span><span class="keyword">=&gt; </span><span class="default">11</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'Roeselare' </span><span class="keyword">=&gt; </span><span class="default">6</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'Standard' </span><span class="keyword">=&gt; </span><span class="default">20</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'STVV' </span><span class="keyword">=&gt; </span><span class="default">17</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'Westerlo' </span><span class="keyword">=&gt; </span><span class="default">10</span><span class="keyword">));<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(array (</span><span class="string">'Zulte Waregem' </span><span class="keyword">=&gt; </span><span class="default">15</span><span class="keyword">));<br /><br /></span><span class="comment">// For displaying the ranking we move up to the first node<br /></span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">top</span><span class="keyword">();<br /><br /></span><span class="comment">// Then we iterate through each node for displaying the result<br /></span><span class="keyword">while (</span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">()) {<br />  list (</span><span class="default">$team</span><span class="keyword">, </span><span class="default">$score</span><span class="keyword">) = </span><span class="default">each </span><span class="keyword">(</span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">());<br />  echo </span><span class="default">$team </span><span class="keyword">. </span><span class="string">': ' </span><span class="keyword">. </span><span class="default">$score </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />  </span><span class="default">$heap</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;<br /></span><br />This results in the following output:<br />Club Brugge: 21<br />Anderlecht: 20<br />Standard: 20<br />KV Mechelen: 18<br />STVV: 17<br />Zulte Waregem: 15<br />AA Gent: 15<br />G. Beerschot: 15<br />Charleroi: 12<br />Racing Genk: 11<br />Cercle Brugge: 11<br />Kortrijk: 10<br />Lokeren: 10<br />Westerlo: 10<br />Moeskroen: 7<br />Roeselare: 6<br /><br />Hope this example paved the way for more complex implementations of SplHeap.</span></code></div>
  </div>
 </div>
  <div class="note" id="115274">  <div class="votes">
    <div id="Vu115274">
    <a href="/manual/vote-note.php?id=115274&amp;page=class.splheap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115274">
    <a href="/manual/vote-note.php?id=115274&amp;page=class.splheap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115274" title="89% like this...">
    23
    </div>
  </div>
  <a href="#115274" class="name">
  <strong class="user"><em>igorsantos07 at gmail dot com</em></strong></a><a class="genanchor" href="#115274"> &para;</a><div class="date" title="2014-06-26 01:02"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115274">
<div class="phpcode"><code><span class="html">While Michelangelo Van Dam example (<a href="http://br2.php.net/manual/en/class.splheap.php#93930" rel="nofollow" target="_blank">http://br2.php.net/manual/en/class.splheap.php#93930</a>) is a great demonstration of what can be done with SplHeap, this implementation is exactly what SplPriorityQueue does - based on SplMaxHeap. If you're planning to copy that snippet, go no further! There's a SPL class that does exactly what you want :)</span></code></div>
  </div>
 </div>
  <div class="note" id="119449">  <div class="votes">
    <div id="Vu119449">
    <a href="/manual/vote-note.php?id=119449&amp;page=class.splheap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119449">
    <a href="/manual/vote-note.php?id=119449&amp;page=class.splheap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119449" title="66% like this...">
    6
    </div>
  </div>
  <a href="#119449" class="name">
  <strong class="user"><em>Anthony</em></strong></a><a class="genanchor" href="#119449"> &para;</a><div class="date" title="2016-06-08 12:15"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119449">
<div class="phpcode"><code><span class="html">If you wish to build a true tree based heap, you can do so as follows (implemented with SplMinHeap, but could be SplMaxHeap if you wish for the opposite order of items):<br /><br />The stucture that we're trying to represent:<br /><br />         1<br />         |<br />+-----+--+--+-----+<br />|     |     |     |<br />2     3     4     5<br />|     |           |<br />+   +-+-+         +<br />|   |   |         |<br />7   6   8         9<br />                  |<br />                +-+-+<br />                |   |<br />               10   11<br /><br /><span class="default">&lt;?php<br />$h </span><span class="keyword">= new </span><span class="default">SplMinHeap</span><span class="keyword">();<br /><br /></span><span class="comment">// [parent, child]<br /></span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">([</span><span class="default">9</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">]);<br /></span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">([</span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">]);<br /></span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">([</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">]);<br /></span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">([</span><span class="default">1</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">]);<br /></span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">([</span><span class="default">1</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">]);<br /></span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">([</span><span class="default">1</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">]);<br /></span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">([</span><span class="default">3</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">]);<br /></span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">([</span><span class="default">2</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">]);<br /></span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">([</span><span class="default">3</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">]);<br /></span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">([</span><span class="default">5</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">]);<br /></span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">([</span><span class="default">9</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">]);<br /><br />for (</span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">top</span><span class="keyword">(); </span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">(); </span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">()) {<br />    list(</span><span class="default">$parentId</span><span class="keyword">, </span><span class="default">$myId</span><span class="keyword">) = </span><span class="default">$h</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">();<br />    echo </span><span class="string">"</span><span class="default">$myId</span><span class="string"> (</span><span class="default">$parentId</span><span class="string">)\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />As you iterate over the heap, the return data will be read as if you're reading a book; ie left to right, top to bottom. It will NOT follow the relationships.<br /><br />So, the above code will output the following:<br /><br />1 (0)<br />2 (1)<br />3 (1)<br />4 (1)<br />5 (1)<br />7 (2)<br />6 (3)<br />8 (3)<br />9 (5)<br />10 (9)<br />11 (9)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.splheap&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.splheap.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="spl.datastructures.php">Datastructures</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="class.spldoublylinkedlist.php" title="SplDoublyLinkedList">SplDoublyLinkedList</a>
                        </li>
                                                <li class="">
                            <a href="class.splstack.php" title="SplStack">SplStack</a>
                        </li>
                                                <li class="">
                            <a href="class.splqueue.php" title="SplQueue">SplQueue</a>
                        </li>
                                                <li class="current">
                            <a href="class.splheap.php" title="SplHeap">SplHeap</a>
                        </li>
                                                <li class="">
                            <a href="class.splmaxheap.php" title="SplMaxHeap">SplMaxHeap</a>
                        </li>
                                                <li class="">
                            <a href="class.splminheap.php" title="SplMinHeap">SplMinHeap</a>
                        </li>
                                                <li class="">
                            <a href="class.splpriorityqueue.php" title="SplPriorityQueue">SplPriorityQueue</a>
                        </li>
                                                <li class="">
                            <a href="class.splfixedarray.php" title="SplFixedArray">SplFixedArray</a>
                        </li>
                                                <li class="">
                            <a href="class.arrayobject.php" title="ArrayObject">ArrayObject</a>
                        </li>
                                                <li class="">
                            <a href="class.splobjectstorage.php" title="SplObjectStorage">SplObjectStorage</a>
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
