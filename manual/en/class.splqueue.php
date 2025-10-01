<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SplQueue - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.splqueue.php">
 <link rel="shorturl" href="https://www.php.net/splqueue">
 <link rel="alternate" href="https://www.php.net/splqueue" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.datastructures.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.splstack.php">
 <link rel="next" href="https://www.php.net/manual/en/splqueue.dequeue.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.splqueue.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.splqueue.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.splqueue.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.splqueue.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.splqueue.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.splqueue.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.splqueue.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.splqueue.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.splqueue.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.splqueue.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.splqueue.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SplQueue class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SplQueue - Manual" />
<meta name="twitter:description" content="The SplQueue class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SplQueue - Manual" />
<meta itemprop="description" content="The SplQueue class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SplQueue class" />

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
        <a href="splqueue.dequeue.php">
          SplQueue::dequeue &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.splstack.php">
          &laquo; SplStack        </a>
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
            <option value='en/class.splqueue.php' selected="selected">English</option>
            <option value='de/class.splqueue.php'>German</option>
            <option value='es/class.splqueue.php'>Spanish</option>
            <option value='fr/class.splqueue.php'>French</option>
            <option value='it/class.splqueue.php'>Italian</option>
            <option value='ja/class.splqueue.php'>Japanese</option>
            <option value='pt_BR/class.splqueue.php'>Brazilian Portuguese</option>
            <option value='ru/class.splqueue.php'>Russian</option>
            <option value='tr/class.splqueue.php'>Turkish</option>
            <option value='uk/class.splqueue.php'>Ukrainian</option>
            <option value='zh/class.splqueue.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.splqueue" class="reference">
 <h1 class="title">The SplQueue class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
 

  <div class="section" id="splqueue.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The SplQueue class provides the main functionalities of a queue implemented using a doubly linked list by
    setting the iterator mode to <strong><code><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-fifo">SplDoublyLinkedList::IT_MODE_FIFO</a></code></strong>.
   </p>
  </div>

 
  <div class="section" id="splqueue.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">SplQueue</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.spldoublylinkedlist.php" class="classname">SplDoublyLinkedList</a>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-lifo"><var class="varname">SplDoublyLinkedList::IT_MODE_LIFO</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-fifo"><var class="varname">SplDoublyLinkedList::IT_MODE_FIFO</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-delete"><var class="varname">SplDoublyLinkedList::IT_MODE_DELETE</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-keep"><var class="varname">SplDoublyLinkedList::IT_MODE_KEEP</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="splqueue.dequeue.php" class="methodname">dequeue</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splqueue.enqueue.php" class="methodname">enqueue</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.add.php" class="methodname">SplDoublyLinkedList::add</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.bottom.php" class="methodname">SplDoublyLinkedList::bottom</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.count.php" class="methodname">SplDoublyLinkedList::count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.current.php" class="methodname">SplDoublyLinkedList::current</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.getiteratormode.php" class="methodname">SplDoublyLinkedList::getIteratorMode</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.isempty.php" class="methodname">SplDoublyLinkedList::isEmpty</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.key.php" class="methodname">SplDoublyLinkedList::key</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.next.php" class="methodname">SplDoublyLinkedList::next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.offsetexists.php" class="methodname">SplDoublyLinkedList::offsetExists</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.offsetget.php" class="methodname">SplDoublyLinkedList::offsetGet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.offsetset.php" class="methodname">SplDoublyLinkedList::offsetSet</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.offsetunset.php" class="methodname">SplDoublyLinkedList::offsetUnset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.pop.php" class="methodname">SplDoublyLinkedList::pop</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.prev.php" class="methodname">SplDoublyLinkedList::prev</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.push.php" class="methodname">SplDoublyLinkedList::push</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.rewind.php" class="methodname">SplDoublyLinkedList::rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.serialize.php" class="methodname">SplDoublyLinkedList::serialize</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.setiteratormode.php" class="methodname">SplDoublyLinkedList::setIteratorMode</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.shift.php" class="methodname">SplDoublyLinkedList::shift</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.top.php" class="methodname">SplDoublyLinkedList::top</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.unserialize.php" class="methodname">SplDoublyLinkedList::unserialize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.unshift.php" class="methodname">SplDoublyLinkedList::unshift</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.valid.php" class="methodname">SplDoublyLinkedList::valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>
  </div>



  <div class="section">
   <h2 class="title">Examples</h2>
   <p class="para">
    <div class="example" id="example-3847">
     <p><strong>Example #1 <span class="classname"><strong class="classname">SplQueue</strong></span> example</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$q </span><span style="color: #007700">= new </span><span style="color: #0000BB">SplQueue</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$q</span><span style="color: #007700">[] = </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$q</span><span style="color: #007700">[] = </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$q</span><span style="color: #007700">[] = </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br />foreach (</span><span style="color: #0000BB">$q </span><span style="color: #007700">as </span><span style="color: #0000BB">$elem</span><span style="color: #007700">)  {<br /> echo </span><span style="color: #0000BB">$elem</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
      <div class="cdata"><pre>
1
2
3
</pre></div>
     </div>
    </div>
    <div class="example" id="example-3848">
     <p><strong>Example #2 Efficiently handling tasks with <span class="classname"><strong class="classname">SplQueue</strong></span></strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$q </span><span style="color: #007700">= new </span><span style="color: #0000BB">SplQueue</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$q</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setIteratorMode</span><span style="color: #007700">(</span><span style="color: #0000BB">SplQueue</span><span style="color: #007700">::</span><span style="color: #0000BB">IT_MODE_DELETE</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// ... enqueue some tasks on the queue ...<br />// process them<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$q </span><span style="color: #007700">as </span><span style="color: #0000BB">$task</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// ... process $task ...<br />    // add new tasks on the queue<br />    </span><span style="color: #0000BB">$q</span><span style="color: #007700">[] = </span><span style="color: #0000BB">$newTask</span><span style="color: #007700">;<br />    </span><span style="color: #FF8000">// ...<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
 </div>

 










<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="splqueue.dequeue.php">SplQueue::dequeue</a> — Dequeues a node from the queue</li><li><a href="splqueue.enqueue.php">SplQueue::enqueue</a> — Adds an element to the queue</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/splqueue.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.splqueue%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.splqueue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.splqueue.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114336">  <div class="votes">
    <div id="Vu114336">
    <a href="/manual/vote-note.php?id=114336&amp;page=class.splqueue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114336">
    <a href="/manual/vote-note.php?id=114336&amp;page=class.splqueue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114336" title="80% like this...">
    54
    </div>
  </div>
  <a href="#114336" class="name">
  <strong class="user"><em>Manu Manjunath</em></strong></a><a class="genanchor" href="#114336"> &para;</a><div class="date" title="2014-02-10 10:56"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114336">
<div class="phpcode"><code><span class="html">SplQueue inherits from SplDoublyLinkedList. So, objects of SplQueue support methods push() and pop(). But please be advised that if you use push() and pop() methods on a SplQueue object, it behaves like a stack rather than a queue.<br /><br />For example:<br /><br />$q = new SplQueue();<br />$q-&gt;push(1);<br />$q-&gt;push(2);<br />$q-&gt;push(3);<br />$q-&gt;pop();<br />print_r($q);<br /><br />Above code returns:<br /><br />SplQueue Object<br />(<br />    [flags:SplDoublyLinkedList:private] =&gt; 4<br />    [dllist:SplDoublyLinkedList:private] =&gt; Array<br />        (<br />            [0] =&gt; 1<br />            [1] =&gt; 2<br />        )<br />)<br /><br />Note that 3 got popped and *not* 1.<br /><br />So, please make sure that you use only enqueue() and dequeue() methods on a SplQueue object and *not* push() and pop().</span></code></div>
  </div>
 </div>
  <div class="note" id="126085">  <div class="votes">
    <div id="Vu126085">
    <a href="/manual/vote-note.php?id=126085&amp;page=class.splqueue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126085">
    <a href="/manual/vote-note.php?id=126085&amp;page=class.splqueue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126085" title="100% like this...">
    3
    </div>
  </div>
  <a href="#126085" class="name">
  <strong class="user"><em>booleantype at ya dot ru</em></strong></a><a class="genanchor" href="#126085"> &para;</a><div class="date" title="2021-05-18 07:58"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126085">
<div class="phpcode"><code><span class="html">Answer to Manu Manjunath post (#114336).<br /><br />IMO, pop() works as expected.<br /><br />There are 2 main groups of methods:<br /><br />1) pop() &amp; push() are inherited from SplDoublyLinkedList and can be applied to SplStack as well as SplQueue (ie are "faceless"). It isn't about stack or queue; it's just about deleting / adding element to the end of the list;<br /><br />2) the same situation with shift() &amp; unshift(): it is just about adding an element to the beginning of the list, and doesn't matter, if we use it on SplStack or SplQueue.<br /><br />So, yes, $q-&gt;pop(); will remove *last* element from SplQueue $q.<br /><br />But enqueue() &amp; dequeue() *are about* SplQueue. FIFO principle is realized by these methods, which were implemented *exactly* for queue purpose:<br />- enqueue() adds an element to the end of the queue and is alias for "faceless" push() (FI...);<br />- dequeue() removes element from the beginning of the queue and is alias for "faceless" shift() (...FO).<br /><br />If you want to delete *next in line* element from *queue*, use dequeue().<br />If you want to delete *last* element from the list (doesn't matter, if it's queue or stack), use pop().</span></code></div>
  </div>
 </div>
  <div class="note" id="116422">  <div class="votes">
    <div id="Vu116422">
    <a href="/manual/vote-note.php?id=116422&amp;page=class.splqueue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116422">
    <a href="/manual/vote-note.php?id=116422&amp;page=class.splqueue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116422" title="56% like this...">
    2
    </div>
  </div>
  <a href="#116422" class="name">
  <strong class="user"><em>MrStonedOne</em></strong></a><a class="genanchor" href="#116422"> &para;</a><div class="date" title="2014-12-31 04:49"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116422">
<div class="phpcode"><code><span class="html">You can use shift/unshift and push/pop to dequeue/undequeue and queue/unqueue respectively. Really handy for those applications that use sockets where you might not know you can't send data until you attempt to.
<br />
<br />for example, this is a function for an application that will un-dequeue the remainder of the data if socket_write indicated it did not write the entire contents of the provided data.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">processSendQueue</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$sendQueue</span><span class="keyword">) {
<br />    while (!</span><span class="default">$sendQueue</span><span class="keyword">-&gt;</span><span class="default">isEmpty</span><span class="keyword">()) {
<br />                            </span><span class="comment">//shift() is the same as dequeue()
<br />        </span><span class="default">$senditem </span><span class="keyword">= </span><span class="default">$sendQueue</span><span class="keyword">-&gt;</span><span class="default">shift</span><span class="keyword">();
<br />
<br />        </span><span class="comment">//returns the number of bytes written.
<br />        </span><span class="default">$rtn </span><span class="keyword">= </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$senditem</span><span class="keyword">);
<br />        if (</span><span class="default">$rtn </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {
<br />            </span><span class="default">$sendQueue</span><span class="keyword">-&gt;</span><span class="default">unshift</span><span class="keyword">(</span><span class="default">$senditem</span><span class="keyword">);
<br />            throw new </span><span class="default">exception</span><span class="keyword">(</span><span class="string">"send error: " </span><span class="keyword">. </span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">));
<br />            return;
<br />        }
<br />        if (</span><span class="default">$rtn </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$senditem</span><span class="keyword">) {
<br />            </span><span class="default">$sendQueue</span><span class="keyword">-&gt;</span><span class="default">unshift</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$senditem</span><span class="keyword">, </span><span class="default">$rtn</span><span class="keyword">);
<br />            break;
<br />        }
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121366">  <div class="votes">
    <div id="Vu121366">
    <a href="/manual/vote-note.php?id=121366&amp;page=class.splqueue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121366">
    <a href="/manual/vote-note.php?id=121366&amp;page=class.splqueue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121366" title="55% like this...">
    1
    </div>
  </div>
  <a href="#121366" class="name">
  <strong class="user"><em>lincoln dot du dot j at gmail dot com</em></strong></a><a class="genanchor" href="#121366"> &para;</a><div class="date" title="2017-07-12 07:07"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121366">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />  <br />$queue </span><span class="keyword">= new </span><span class="default">SplQueue</span><span class="keyword">();<br /></span><span class="default">$queue</span><span class="keyword">-&gt;</span><span class="default">enqueue</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">);<br /></span><span class="default">$queue</span><span class="keyword">-&gt;</span><span class="default">enqueue</span><span class="keyword">(</span><span class="string">'B'</span><span class="keyword">);<br /></span><span class="default">$queue</span><span class="keyword">-&gt;</span><span class="default">enqueue</span><span class="keyword">(</span><span class="string">'C'</span><span class="keyword">);<br /><br /></span><span class="default">$queue</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">();<br />while(</span><span class="default">$queue</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">()){<br />    echo </span><span class="default">$queue</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">(),</span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="default">$queue</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />}<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$queue</span><span class="keyword">);<br /></span><span class="default">$queue</span><span class="keyword">-&gt;</span><span class="default">dequeue</span><span class="keyword">(); </span><span class="comment">//remove first one<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$queue</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span>Output<br /><br />A<br />B<br />C<br />SplQueue Object<br />(<br />    [flags:SplDoublyLinkedList:private] =&gt; 4<br />    [dllist:SplDoublyLinkedList:private] =&gt; Array<br />        (<br />            [0] =&gt; A<br />            [1] =&gt; B<br />            [2] =&gt; C<br />        )<br /><br />)<br />SplQueue Object<br />(<br />    [flags:SplDoublyLinkedList:private] =&gt; 4<br />    [dllist:SplDoublyLinkedList:private] =&gt; Array<br />        (<br />            [0] =&gt; B<br />            [1] =&gt; C<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="119936">  <div class="votes">
    <div id="Vu119936">
    <a href="/manual/vote-note.php?id=119936&amp;page=class.splqueue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119936">
    <a href="/manual/vote-note.php?id=119936&amp;page=class.splqueue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119936" title="50% like this...">
    0
    </div>
  </div>
  <a href="#119936" class="name">
  <strong class="user"><em>Stingus</em></strong></a><a class="genanchor" href="#119936"> &para;</a><div class="date" title="2016-09-23 10:16"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119936">
<div class="phpcode"><code><span class="html">Take care that SplQueue::valid() is not returning true if the queue has nodes. Use isEmpty() instead:<br /><br />$queue = new SplQueue();<br />$queue-&gt;enqueue('A');<br />$queue-&gt;enqueue('B');<br />$queue-&gt;enqueue('C');<br />var_dump($queue-&gt;valid()); // false<br />var_dump(!$queue-&gt;isEmpty()); // true</span></code></div>
  </div>
 </div>
  <div class="note" id="125869">  <div class="votes">
    <div id="Vu125869">
    <a href="/manual/vote-note.php?id=125869&amp;page=class.splqueue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125869">
    <a href="/manual/vote-note.php?id=125869&amp;page=class.splqueue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125869" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#125869" class="name">
  <strong class="user"><em>mostefa dot medjahed dot pro at gmail dot com</em></strong></a><a class="genanchor" href="#125869"> &para;</a><div class="date" title="2021-03-01 07:13"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125869">
<div class="phpcode"><code><span class="html">As was said before, the push () and pop () methods on a SplQueue object, its behave like a stack rather than a queue.<br /><br />Knowing that the enqueue () and dequeue () methods are respectively aliases of push () and shift () methods, we can also use SplQueue :: push () and SplQueue :: shift () for the same purpose as SplQueue :: enqueue and SplQueue :: dequeue.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.splqueue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.splqueue.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="class.splqueue.php" title="SplQueue">SplQueue</a>
                        </li>
                                                <li class="">
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
