<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SplPriorityQueue - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.splpriorityqueue.php">
 <link rel="shorturl" href="https://www.php.net/splpriorityqueue">
 <link rel="alternate" href="https://www.php.net/splpriorityqueue" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.datastructures.php">
 <link rel="prev" href="https://www.php.net/manual/en/splminheap.compare.php">
 <link rel="next" href="https://www.php.net/manual/en/splpriorityqueue.compare.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.splpriorityqueue.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.splpriorityqueue.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.splpriorityqueue.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.splpriorityqueue.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.splpriorityqueue.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.splpriorityqueue.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.splpriorityqueue.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.splpriorityqueue.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.splpriorityqueue.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.splpriorityqueue.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.splpriorityqueue.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SplPriorityQueue class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SplPriorityQueue - Manual" />
<meta name="twitter:description" content="The SplPriorityQueue class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SplPriorityQueue - Manual" />
<meta itemprop="description" content="The SplPriorityQueue class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SplPriorityQueue class" />

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
        <a href="splpriorityqueue.compare.php">
          SplPriorityQueue::compare &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="splminheap.compare.php">
          &laquo; SplMinHeap::compare        </a>
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
            <option value='en/class.splpriorityqueue.php' selected="selected">English</option>
            <option value='de/class.splpriorityqueue.php'>German</option>
            <option value='es/class.splpriorityqueue.php'>Spanish</option>
            <option value='fr/class.splpriorityqueue.php'>French</option>
            <option value='it/class.splpriorityqueue.php'>Italian</option>
            <option value='ja/class.splpriorityqueue.php'>Japanese</option>
            <option value='pt_BR/class.splpriorityqueue.php'>Brazilian Portuguese</option>
            <option value='ru/class.splpriorityqueue.php'>Russian</option>
            <option value='tr/class.splpriorityqueue.php'>Turkish</option>
            <option value='uk/class.splpriorityqueue.php'>Ukrainian</option>
            <option value='zh/class.splpriorityqueue.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.splpriorityqueue" class="reference">
 <h1 class="title">The SplPriorityQueue class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
 

  <div class="section" id="splpriorityqueue.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The SplPriorityQueue class provides the main functionalities of a 
    prioritized queue, implemented using a max heap.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     The order of elements with identical priority is <em>undefined</em>.
     It may differ from the order in which they have been inserted.
    </span>
   </p></blockquote>
  </div>

 
  <div class="section" id="splpriorityqueue.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">SplPriorityQueue</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.iterator.php" class="interfacename">Iterator</a>,

     <a href="class.countable.php" class="interfacename">Countable</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.splpriorityqueue.php#splpriorityqueue.constants.extr-both"><var class="varname">EXTR_BOTH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.splpriorityqueue.php#splpriorityqueue.constants.extr-priority"><var class="varname">EXTR_PRIORITY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.splpriorityqueue.php#splpriorityqueue.constants.extr-data"><var class="varname">EXTR_DATA</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.compare.php" class="methodname">compare</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$priority1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$priority2</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.count.php" class="methodname">count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.current.php" class="methodname">current</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.extract.php" class="methodname">extract</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.getextractflags.php" class="methodname">getExtractFlags</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.insert.php" class="methodname">insert</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$priority</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.iscorrupted.php" class="methodname">isCorrupted</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.isempty.php" class="methodname">isEmpty</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.key.php" class="methodname">key</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.recoverfromcorruption.php" class="methodname">recoverFromCorruption</a></span>(): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.setextractflags.php" class="methodname">setExtractFlags</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.top.php" class="methodname">top</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splpriorityqueue.valid.php" class="methodname">valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>
 
  </div>

  <div class="section" id="splpriorityqueue.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>
    
     <dt id="splpriorityqueue.constants.extr-both"><strong><code><a href="class.splpriorityqueue.php#splpriorityqueue.constants.extr-both">SplPriorityQueue::EXTR_BOTH</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    
    
     <dt id="splpriorityqueue.constants.extr-priority"><strong><code><a href="class.splpriorityqueue.php#splpriorityqueue.constants.extr-priority">SplPriorityQueue::EXTR_PRIORITY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    
    
     <dt id="splpriorityqueue.constants.extr-data"><strong><code><a href="class.splpriorityqueue.php#splpriorityqueue.constants.extr-data">SplPriorityQueue::EXTR_DATA</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    
   </dl>
  </div>
 

 
 </div>
 
 










































































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="splpriorityqueue.compare.php">SplPriorityQueue::compare</a> — Compare priorities in order to place elements correctly in the heap while sifting up</li><li><a href="splpriorityqueue.count.php">SplPriorityQueue::count</a> — Counts the number of elements in the queue</li><li><a href="splpriorityqueue.current.php">SplPriorityQueue::current</a> — Return current node pointed by the iterator</li><li><a href="splpriorityqueue.extract.php">SplPriorityQueue::extract</a> — Extracts a node from top of the heap and sift up</li><li><a href="splpriorityqueue.getextractflags.php">SplPriorityQueue::getExtractFlags</a> — Get the flags of extraction</li><li><a href="splpriorityqueue.insert.php">SplPriorityQueue::insert</a> — Inserts an element in the queue by sifting it up</li><li><a href="splpriorityqueue.iscorrupted.php">SplPriorityQueue::isCorrupted</a> — Tells if the priority queue is in a corrupted state</li><li><a href="splpriorityqueue.isempty.php">SplPriorityQueue::isEmpty</a> — Checks whether the queue is empty</li><li><a href="splpriorityqueue.key.php">SplPriorityQueue::key</a> — Return current node index</li><li><a href="splpriorityqueue.next.php">SplPriorityQueue::next</a> — Move to the next node</li><li><a href="splpriorityqueue.recoverfromcorruption.php">SplPriorityQueue::recoverFromCorruption</a> — Recover from the corrupted state and allow further actions on the queue</li><li><a href="splpriorityqueue.rewind.php">SplPriorityQueue::rewind</a> — Rewind iterator back to the start (no-op)</li><li><a href="splpriorityqueue.setextractflags.php">SplPriorityQueue::setExtractFlags</a> — Sets the mode of extraction</li><li><a href="splpriorityqueue.top.php">SplPriorityQueue::top</a> — Peeks at the node from the top of the queue</li><li><a href="splpriorityqueue.valid.php">SplPriorityQueue::valid</a> — Check whether the queue contains more nodes</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/splpriorityqueue.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.splpriorityqueue%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.splpriorityqueue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.splpriorityqueue.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99146">  <div class="votes">
    <div id="Vu99146">
    <a href="/manual/vote-note.php?id=99146&amp;page=class.splpriorityqueue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99146">
    <a href="/manual/vote-note.php?id=99146&amp;page=class.splpriorityqueue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99146" title="70% like this...">
    20
    </div>
  </div>
  <a href="#99146" class="name">
  <strong class="user"><em>rajatn at rediff dot co dot in</em></strong></a><a class="genanchor" href="#99146"> &para;</a><div class="date" title="2010-07-30 04:29"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99146">
<div class="phpcode"><code><span class="html">quick implementation of SPL Priority Queue:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">PQtest </span><span class="keyword">extends </span><span class="default">SplPriorityQueue
<br /></span><span class="keyword">{
<br />    public function </span><span class="default">compare</span><span class="keyword">(</span><span class="default">$priority1</span><span class="keyword">, </span><span class="default">$priority2</span><span class="keyword">)
<br />    {
<br />        if (</span><span class="default">$priority1 </span><span class="keyword">=== </span><span class="default">$priority2</span><span class="keyword">) return </span><span class="default">0</span><span class="keyword">;
<br />        return </span><span class="default">$priority1 </span><span class="keyword">&lt; </span><span class="default">$priority2 </span><span class="keyword">? -</span><span class="default">1 </span><span class="keyword">: </span><span class="default">1</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="default">$objPQ </span><span class="keyword">= new </span><span class="default">PQtest</span><span class="keyword">();
<br />
<br /></span><span class="default">$objPQ</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);
<br /></span><span class="default">$objPQ</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(</span><span class="string">'B'</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">);
<br /></span><span class="default">$objPQ</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(</span><span class="string">'C'</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">$objPQ</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(</span><span class="string">'D'</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);
<br />
<br />echo </span><span class="string">"COUNT-&gt;"</span><span class="keyword">.</span><span class="default">$objPQ</span><span class="keyword">-&gt;</span><span class="default">count</span><span class="keyword">().</span><span class="string">"&lt;BR&gt;"</span><span class="keyword">;
<br />
<br /></span><span class="comment">//mode of extraction
<br /></span><span class="default">$objPQ</span><span class="keyword">-&gt;</span><span class="default">setExtractFlags</span><span class="keyword">(</span><span class="default">PQtest</span><span class="keyword">::</span><span class="default">EXTR_BOTH</span><span class="keyword">);
<br />
<br /></span><span class="comment">//Go to TOP
<br /></span><span class="default">$objPQ</span><span class="keyword">-&gt;</span><span class="default">top</span><span class="keyword">();
<br />
<br />while(</span><span class="default">$objPQ</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">()){
<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$objPQ</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">());
<br />    echo </span><span class="string">"&lt;BR&gt;"</span><span class="keyword">;
<br />    </span><span class="default">$objPQ</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />output:
<br />
<br />COUNT-&gt;4
<br />Array ( [data] =&gt; B [priority] =&gt; 6 ) 
<br />Array ( [data] =&gt; A [priority] =&gt; 3 ) 
<br />Array ( [data] =&gt; D [priority] =&gt; 2 ) 
<br />Array ( [data] =&gt; C [priority] =&gt; 1 )</span></code></div>
  </div>
 </div>
  <div class="note" id="117527">  <div class="votes">
    <div id="Vu117527">
    <a href="/manual/vote-note.php?id=117527&amp;page=class.splpriorityqueue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117527">
    <a href="/manual/vote-note.php?id=117527&amp;page=class.splpriorityqueue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117527" title="89% like this...">
    15
    </div>
  </div>
  <a href="#117527" class="name">
  <strong class="user"><em>doublecompile at gmail dot com</em></strong></a><a class="genanchor" href="#117527"> &para;</a><div class="date" title="2015-06-24 08:19"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117527">
<div class="phpcode"><code><span class="html">I've used the SplPriorityQueue to determine an HTTP client's preferred MIME types.<br /><br /><span class="default">&lt;?php<br />$queue </span><span class="keyword">= new </span><span class="default">\SplPriorityQueue</span><span class="keyword">();<br />foreach (</span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'#,\s*#'</span><span class="keyword">, </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_ACCEPT'</span><span class="keyword">]) as </span><span class="default">$accept</span><span class="keyword">) {<br />    </span><span class="default">$split </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'#;\s*q=#'</span><span class="keyword">, </span><span class="default">$accept</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">$queue</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(</span><span class="default">$split</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], isset(</span><span class="default">$split</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) ? (float)</span><span class="default">$split</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] : </span><span class="default">1.0</span><span class="keyword">);<br />}<br />foreach (</span><span class="default">$queue </span><span class="keyword">as </span><span class="default">$mime</span><span class="keyword">) {<br />    echo </span><span class="default">$mime</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />My browser sends:<br />Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8<br /><br />And this script outputs:<br />text/html<br />application/xhtml+xml<br />application/xml<br />*/*<br /><br />A better example:<br />Accept: text/html, application/xml,text/css;q=0.4,text/plain; q=0.9, application/json;q=0.8<br /><br />And this script outputs:<br />text/html<br />application/xml<br />text/plain<br />application/json<br />text/css</span></code></div>
  </div>
 </div>
  <div class="note" id="114959">  <div class="votes">
    <div id="Vu114959">
    <a href="/manual/vote-note.php?id=114959&amp;page=class.splpriorityqueue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114959">
    <a href="/manual/vote-note.php?id=114959&amp;page=class.splpriorityqueue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114959" title="92% like this...">
    11
    </div>
  </div>
  <a href="#114959" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#114959"> &para;</a><div class="date" title="2014-05-06 02:10"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114959">
<div class="phpcode"><code><span class="html">For a heap-based priority queue to be at its most effective, the "priority" should be something that can take on a wide range of values (lengths, timestamps, populations). It optimises the tasks of searching the queue for the appropriate place to insert an item (and inserting it); and removing the first item in the list.<br /><br />Items may potentially be inserted into the queue wherever two adjacent items have different priorities. The heap structure is an efficient way of indexing such insertion points when there are many of them distributed throughout the list.<br /><br />If you have a sharply-limited enumeration of possible priority values, then there are very few insertion possible insertion points - one for each priority value. In that situation, one can make the insertion points explicit (and thus eliminate the need to maintain a heap indexing them) by implementing your priority queue as a list of simple queues from which you draw successive items from the highest-priority nonempty queue.</span></code></div>
  </div>
 </div>
  <div class="note" id="114309">  <div class="votes">
    <div id="Vu114309">
    <a href="/manual/vote-note.php?id=114309&amp;page=class.splpriorityqueue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114309">
    <a href="/manual/vote-note.php?id=114309&amp;page=class.splpriorityqueue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114309" title="70% like this...">
    11
    </div>
  </div>
  <a href="#114309" class="name">
  <strong class="user"><em>lsroudi at gmail dot com</em></strong></a><a class="genanchor" href="#114309"> &para;</a><div class="date" title="2014-02-05 06:38"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114309">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Description of PriorityQueue<br /> *<br /> * (c) lsroudi <a href="http://lsroudi.com/" rel="nofollow" target="_blank">http://lsroudi.com/</a> &lt;lsroudi@gmail.com&gt;<br /> * <br /> * For the full copyright and license information, please view the LICENSE<br /> * file that was distributed with this source code.<br /> */<br /></span><span class="keyword">interface </span><span class="default">PriorityLoggerInterface </span><span class="keyword">{<br /><br />    public function </span><span class="default">insert</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$priority</span><span class="keyword">);<br />}<br /><br />class </span><span class="default">PriorityLogger </span><span class="keyword">extends </span><span class="default">SplPriorityQueue </span><span class="keyword">implements </span><span class="default">PriorityLoggerInterface </span><span class="keyword">{<br />    <br />}<br /><br />class </span><span class="default">Logger </span><span class="keyword">{<br /><br />    const </span><span class="default">ERROR </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />    const </span><span class="default">NOTICE </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    const </span><span class="default">WARNING </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /><br />    private </span><span class="default">$priorityLogger</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">PriorityLoggerInterface $priorityLogger</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">priorityLogger </span><span class="keyword">= </span><span class="default">$priorityLogger</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">addMessage</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$priority</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">priorityLogger</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$priority</span><span class="keyword">);<br />    }<br /><br />    public function </span><span class="default">getPriorityLogger</span><span class="keyword">()<br />    {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">priorityLogger</span><span class="keyword">;<br />    }<br /><br />}<br /><br /></span><span class="default">$priorityLogger </span><span class="keyword">= new </span><span class="default">PriorityLogger</span><span class="keyword">();<br /><br /></span><span class="default">$logger </span><span class="keyword">= new </span><span class="default">Logger</span><span class="keyword">(</span><span class="default">$priorityLogger</span><span class="keyword">);<br /></span><span class="default">$logger</span><span class="keyword">-&gt;</span><span class="default">addMessage</span><span class="keyword">(</span><span class="string">'Message with notice type'</span><span class="keyword">, </span><span class="default">Logger</span><span class="keyword">::</span><span class="default">NOTICE</span><span class="keyword">);<br /></span><span class="default">$logger</span><span class="keyword">-&gt;</span><span class="default">addMessage</span><span class="keyword">(</span><span class="string">'Message with warning type'</span><span class="keyword">, </span><span class="default">Logger</span><span class="keyword">::</span><span class="default">WARNING</span><span class="keyword">);<br /></span><span class="default">$logger</span><span class="keyword">-&gt;</span><span class="default">addMessage</span><span class="keyword">(</span><span class="string">'Message with error type'</span><span class="keyword">, </span><span class="default">Logger</span><span class="keyword">::</span><span class="default">ERROR</span><span class="keyword">);<br /><br /></span><span class="default">$priorityLoggerQueue </span><span class="keyword">= </span><span class="default">$logger</span><span class="keyword">-&gt;</span><span class="default">getPriorityLogger</span><span class="keyword">();<br /><br />foreach (</span><span class="default">$priorityLoggerQueue </span><span class="keyword">as </span><span class="default">$queue</span><span class="keyword">){<br />    print </span><span class="default">$queue </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//Résultat<br />//Message with error type<br />//Message with warning type<br />//Message with notice type<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.splpriorityqueue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.splpriorityqueue.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="class.splheap.php" title="SplHeap">SplHeap</a>
                        </li>
                                                <li class="">
                            <a href="class.splmaxheap.php" title="SplMaxHeap">SplMaxHeap</a>
                        </li>
                                                <li class="">
                            <a href="class.splminheap.php" title="SplMinHeap">SplMinHeap</a>
                        </li>
                                                <li class="current">
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
