<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SplDoublyLinkedList - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.spldoublylinkedlist.php">
 <link rel="shorturl" href="https://www.php.net/spldoublylinkedlist">
 <link rel="alternate" href="https://www.php.net/spldoublylinkedlist" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.datastructures.php">
 <link rel="prev" href="https://www.php.net/manual/en/spl.datastructures.php">
 <link rel="next" href="https://www.php.net/manual/en/spldoublylinkedlist.add.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.spldoublylinkedlist.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.spldoublylinkedlist.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.spldoublylinkedlist.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.spldoublylinkedlist.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.spldoublylinkedlist.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.spldoublylinkedlist.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.spldoublylinkedlist.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.spldoublylinkedlist.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.spldoublylinkedlist.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.spldoublylinkedlist.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.spldoublylinkedlist.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SplDoublyLinkedList class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SplDoublyLinkedList - Manual" />
<meta name="twitter:description" content="The SplDoublyLinkedList class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SplDoublyLinkedList - Manual" />
<meta itemprop="description" content="The SplDoublyLinkedList class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SplDoublyLinkedList class" />

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
        <a href="spldoublylinkedlist.add.php">
          SplDoublyLinkedList::add &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="spl.datastructures.php">
          &laquo; Datastructures        </a>
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
            <option value='en/class.spldoublylinkedlist.php' selected="selected">English</option>
            <option value='de/class.spldoublylinkedlist.php'>German</option>
            <option value='es/class.spldoublylinkedlist.php'>Spanish</option>
            <option value='fr/class.spldoublylinkedlist.php'>French</option>
            <option value='it/class.spldoublylinkedlist.php'>Italian</option>
            <option value='ja/class.spldoublylinkedlist.php'>Japanese</option>
            <option value='pt_BR/class.spldoublylinkedlist.php'>Brazilian Portuguese</option>
            <option value='ru/class.spldoublylinkedlist.php'>Russian</option>
            <option value='tr/class.spldoublylinkedlist.php'>Turkish</option>
            <option value='uk/class.spldoublylinkedlist.php'>Ukrainian</option>
            <option value='zh/class.spldoublylinkedlist.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.spldoublylinkedlist" class="reference">
 <h1 class="title">The SplDoublyLinkedList class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
 

  <div class="section" id="spldoublylinkedlist.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The SplDoublyLinkedList class provides the main functionalities of a doubly linked list.
   </p>
  </div>

 
  <div class="section" id="spldoublylinkedlist.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">SplDoublyLinkedList</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.iterator.php" class="interfacename">Iterator</a>,

     <a href="class.countable.php" class="interfacename">Countable</a>,

     <a href="class.arrayaccess.php" class="interfacename">ArrayAccess</a>,

     <a href="class.serializable.php" class="interfacename">Serializable</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-lifo"><var class="varname">IT_MODE_LIFO</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-fifo"><var class="varname">IT_MODE_FIFO</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-delete"><var class="varname">IT_MODE_DELETE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-keep"><var class="varname">IT_MODE_KEEP</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.add.php" class="methodname">add</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.bottom.php" class="methodname">bottom</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.count.php" class="methodname">count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.current.php" class="methodname">current</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.getiteratormode.php" class="methodname">getIteratorMode</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.isempty.php" class="methodname">isEmpty</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.key.php" class="methodname">key</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.offsetexists.php" class="methodname">offsetExists</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.offsetget.php" class="methodname">offsetGet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.offsetset.php" class="methodname">offsetSet</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.offsetunset.php" class="methodname">offsetUnset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.pop.php" class="methodname">pop</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.prev.php" class="methodname">prev</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.push.php" class="methodname">push</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.serialize.php" class="methodname">serialize</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.setiteratormode.php" class="methodname">setIteratorMode</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.shift.php" class="methodname">shift</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.top.php" class="methodname">top</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.unserialize.php" class="methodname">unserialize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.unshift.php" class="methodname">unshift</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="spldoublylinkedlist.valid.php" class="methodname">valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>
 
  </div>


  <div class="section" id="spldoublylinkedlist.constants">
   <h2 class="title">Predefined Constants</h2>
   <div class="section" id="spldoublylinkedlist.constants.iteration-direction">
    <h2 class="title">Iteration Direction</h2>
    <dl>

     
      <dt id="spldoublylinkedlist.constants.it-mode-lifo"><strong><code><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-lifo">SplDoublyLinkedList::IT_MODE_LIFO</a></code></strong></dt>
      <dd>
       <p class="para">
        The list will be iterated in a last in, first out order, like a stack.
       </p>
      </dd>
     

     
      <dt id="spldoublylinkedlist.constants.it-mode-fifo"><strong><code><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-fifo">SplDoublyLinkedList::IT_MODE_FIFO</a></code></strong></dt>
      <dd>
       <p class="para">
        The list will be iterated in a first in, first out order, like a queue.
       </p>
      </dd>
     

    </dl>
   </div>

   <div class="section" id="spldoublylinkedlist.constants.iteration-behavior">
    <h2 class="title">Iteration Behavior</h2>
    <dl>

     
      <dt id="spldoublylinkedlist.constants.it-mode-delete"><strong><code><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-delete">SplDoublyLinkedList::IT_MODE_DELETE</a></code></strong></dt>
      <dd>
       <p class="para">
        Iteration will remove the iterated elements.
       </p>
      </dd>
     

     
      <dt id="spldoublylinkedlist.constants.it-mode-keep"><strong><code><a href="class.spldoublylinkedlist.php#spldoublylinkedlist.constants.it-mode-keep">SplDoublyLinkedList::IT_MODE_KEEP</a></code></strong></dt>
      <dd>
       <p class="para">
        Iteration will not remove the iterated elements.
       </p>
      </dd>
     

    </dl>
   </div>
  </div>



 
 </div>
 
 


















































































































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="spldoublylinkedlist.add.php">SplDoublyLinkedList::add</a> — Add/insert a new value at the specified index</li><li><a href="spldoublylinkedlist.bottom.php">SplDoublyLinkedList::bottom</a> — Peeks at the node from the beginning of the doubly linked list</li><li><a href="spldoublylinkedlist.count.php">SplDoublyLinkedList::count</a> — Counts the number of elements in the doubly linked list</li><li><a href="spldoublylinkedlist.current.php">SplDoublyLinkedList::current</a> — Return current array entry</li><li><a href="spldoublylinkedlist.getiteratormode.php">SplDoublyLinkedList::getIteratorMode</a> — Returns the mode of iteration</li><li><a href="spldoublylinkedlist.isempty.php">SplDoublyLinkedList::isEmpty</a> — Checks whether the doubly linked list is empty</li><li><a href="spldoublylinkedlist.key.php">SplDoublyLinkedList::key</a> — Return current node index</li><li><a href="spldoublylinkedlist.next.php">SplDoublyLinkedList::next</a> — Move to next entry</li><li><a href="spldoublylinkedlist.offsetexists.php">SplDoublyLinkedList::offsetExists</a> — Returns whether the requested $index exists</li><li><a href="spldoublylinkedlist.offsetget.php">SplDoublyLinkedList::offsetGet</a> — Returns the value at the specified $index</li><li><a href="spldoublylinkedlist.offsetset.php">SplDoublyLinkedList::offsetSet</a> — Sets the value at the specified $index to $value</li><li><a href="spldoublylinkedlist.offsetunset.php">SplDoublyLinkedList::offsetUnset</a> — Unsets the value at the specified $index</li><li><a href="spldoublylinkedlist.pop.php">SplDoublyLinkedList::pop</a> — Pops a node from the end of the doubly linked list</li><li><a href="spldoublylinkedlist.prev.php">SplDoublyLinkedList::prev</a> — Move to previous entry</li><li><a href="spldoublylinkedlist.push.php">SplDoublyLinkedList::push</a> — Pushes an element at the end of the doubly linked list</li><li><a href="spldoublylinkedlist.rewind.php">SplDoublyLinkedList::rewind</a> — Rewind iterator back to the start</li><li><a href="spldoublylinkedlist.serialize.php">SplDoublyLinkedList::serialize</a> — Serializes the storage</li><li><a href="spldoublylinkedlist.setiteratormode.php">SplDoublyLinkedList::setIteratorMode</a> — Sets the mode of iteration</li><li><a href="spldoublylinkedlist.shift.php">SplDoublyLinkedList::shift</a> — Shifts a node from the beginning of the doubly linked list</li><li><a href="spldoublylinkedlist.top.php">SplDoublyLinkedList::top</a> — Peeks at the node from the end of the doubly linked list</li><li><a href="spldoublylinkedlist.unserialize.php">SplDoublyLinkedList::unserialize</a> — Unserializes the storage</li><li><a href="spldoublylinkedlist.unshift.php">SplDoublyLinkedList::unshift</a> — Prepends the doubly linked list with an element</li><li><a href="spldoublylinkedlist.valid.php">SplDoublyLinkedList::valid</a> — Check whether the doubly linked list contains more nodes</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/spldoublylinkedlist.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.spldoublylinkedlist%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.spldoublylinkedlist&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.spldoublylinkedlist.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112941">  <div class="votes">
    <div id="Vu112941">
    <a href="/manual/vote-note.php?id=112941&amp;page=class.spldoublylinkedlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112941">
    <a href="/manual/vote-note.php?id=112941&amp;page=class.spldoublylinkedlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112941" title="69% like this...">
    62
    </div>
  </div>
  <a href="#112941" class="name">
  <strong class="user"><em>Gilles A</em></strong></a><a class="genanchor" href="#112941"> &para;</a><div class="date" title="2013-08-09 12:19"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112941">
<div class="phpcode"><code><span class="html">FIFO and LIFO in SplDoublyLinkedList<br /><br />$list = new SplDoublyLinkedList();<br />$list-&gt;push('a');<br />$list-&gt;push('b');<br />$list-&gt;push('c');<br />$list-&gt;push('d');<br /> <br />echo "FIFO (First In First Out) :\n";<br />$list-&gt;setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);<br />for ($list-&gt;rewind(); $list-&gt;valid(); $list-&gt;next()) {<br />    echo $list-&gt;current()."\n";<br />}<br /> <br />Result :<br /><br />// FIFO (First In First Out):<br />// a<br />// b<br />// c<br />// d<br /> <br />echo "LIFO (Last In First Out) :\n";<br />$list-&gt;setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);<br />for ($list-&gt;rewind(); $list-&gt;valid(); $list-&gt;next()) {<br />    echo $list-&gt;current()."\n";<br />}<br /> <br />Result :<br /><br />// LIFO (Last In First Out):<br />// d<br />// c<br />// b<br />// a</span></code></div>
  </div>
 </div>
  <div class="note" id="117287">  <div class="votes">
    <div id="Vu117287">
    <a href="/manual/vote-note.php?id=117287&amp;page=class.spldoublylinkedlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117287">
    <a href="/manual/vote-note.php?id=117287&amp;page=class.spldoublylinkedlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117287" title="72% like this...">
    37
    </div>
  </div>
  <a href="#117287" class="name">
  <strong class="user"><em>Maaz Rehman</em></strong></a><a class="genanchor" href="#117287"> &para;</a><div class="date" title="2015-05-17 06:54"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117287">
<div class="phpcode"><code><span class="html">/*<br />php doubly link list is an amazing data structure ,doubly means you can traverse forward as well as backward, it can act as a deque(double ended queue) if you want it to,<br />here is how it works <br /><br />*/<br /><br />//instantiating an object of doubly link list<br /><br />$dlist=new SplDoublyLinkedList();<br /><br />//a push inserts data at the end of the list <br />$dlist-&gt;push('hiramariam');<br />$dlist-&gt;push('maaz');<br />$dlist-&gt;push('zafar');<br /><br />/* the list contains<br />hiramariam<br />maaz<br />zafar<br />*/ <br /><br />//while an unshift inserts an object at top of the list<br />$dlist-&gt;unshift(1);<br />$dlist-&gt;unshift(2);<br />$dlist-&gt;unshift(3);<br /><br />/* the list now contains<br />3<br />2<br />1<br />hiramariam<br />maaz<br />zafar<br />*/ <br /><br />//you can delete an item from the bottom of the list by using pop<br />$dlist-&gt;pop();<br /><br />/* the list now contains<br />3<br />2<br />1<br />hiramariam<br />maaz<br /><br />*/ <br />//you can delete an item from the top of the list by using shift()<br />$dlist-&gt;shift();<br /><br />/* the list now contains<br /><br />2<br />1<br />hiramariam<br />maaz<br /><br />*/ <br /><br />/* if you want to replace an item at particular index you can use a method named add , note that if you want to replace an item that does not exist , an exception will be thrown*/<br /><br />$dlist-&gt;add(3 , 2.24);<br /><br />/*<br />to go through the list we use a simple for loop, the rewind() method shown below point to the initials of the list depending on the iterator, a valid() method checks whether a list is still valid or not , meaning it ensures the loop does not go on and on after we reach the last data in the list , and the next() method simply points to the next data in the list.<br /><br />*/<br />for($dlist-&gt;rewind();$dlist-&gt;valid();$dlist-&gt;next()){<br />    <br />    echo $dlist-&gt;current()."&lt;br/&gt;";<br />    }<br />echo "&lt;br/&gt;";<br />/*<br /><br />To traverse backward <br /><br />*/<br />$dlist-&gt;setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);<br />for($dlist-&gt;rewind();$dlist-&gt;valid();$dlist-&gt;next()){<br />    <br />    echo $dlist-&gt;current()."&lt;br/&gt;";;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="121191">  <div class="votes">
    <div id="Vu121191">
    <a href="/manual/vote-note.php?id=121191&amp;page=class.spldoublylinkedlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121191">
    <a href="/manual/vote-note.php?id=121191&amp;page=class.spldoublylinkedlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121191" title="81% like this...">
    7
    </div>
  </div>
  <a href="#121191" class="name">
  <strong class="user"><em>dongchao769390531 at 163 dot com</em></strong></a><a class="genanchor" href="#121191"> &para;</a><div class="date" title="2017-06-06 10:03"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121191">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$splDoubleLinkedList </span><span class="keyword">= new </span><span class="default">SplDoublyLinkedList</span><span class="keyword">();<br /></span><span class="default">$splDoubleLinkedList</span><span class="keyword">-&gt;</span><span class="default">push</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">);<br /></span><span class="default">$splDoubleLinkedList</span><span class="keyword">-&gt;</span><span class="default">push</span><span class="keyword">(</span><span class="string">'3'</span><span class="keyword">);<br /></span><span class="default">$splDoubleLinkedList</span><span class="keyword">-&gt;</span><span class="default">push</span><span class="keyword">(</span><span class="string">'v'</span><span class="keyword">);<br /></span><span class="default">$splDoubleLinkedList</span><span class="keyword">-&gt;</span><span class="default">push</span><span class="keyword">(</span><span class="string">'1'</span><span class="keyword">);<br /></span><span class="default">$splDoubleLinkedList</span><span class="keyword">-&gt;</span><span class="default">push</span><span class="keyword">(</span><span class="string">'p'</span><span class="keyword">);<br /></span><span class="comment">//First of all, we need rewind list<br /></span><span class="default">$splDoubleLinkedList</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">();<br /></span><span class="comment">//Use while, check if the list has valid node<br /></span><span class="keyword">while (</span><span class="default">$splDoubleLinkedList</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">()){<br />    </span><span class="comment">//Print current node's value<br />    </span><span class="keyword">echo </span><span class="default">$splDoubleLinkedList</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="comment">//Turn the cursor to next node<br />    </span><span class="default">$splDoubleLinkedList</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126513">  <div class="votes">
    <div id="Vu126513">
    <a href="/manual/vote-note.php?id=126513&amp;page=class.spldoublylinkedlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126513">
    <a href="/manual/vote-note.php?id=126513&amp;page=class.spldoublylinkedlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126513" title="60% like this...">
    1
    </div>
  </div>
  <a href="#126513" class="name">
  <strong class="user"><em>77931774 at qq dot com</em></strong></a><a class="genanchor" href="#126513"> &para;</a><div class="date" title="2021-10-19 02:11"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126513">
<div class="phpcode"><code><span class="html">$list = new SplDoublyLinkedList();<br /><br />for ($i = 0; $i &lt; 2000001; $i++) {<br />    $list-&gt;push($i);<br />}<br /><br />$s = microtime(true);<br /><br />//$res = $list-&gt;offsetGet(2000000);     // spend 7 ms<br />$res = $list-&gt;offsetGet(0);               // spend 0.07 ms<br />var_dump($res);<br /><br />$e = microtime(true);<br /><br />echo ($e - $s) * 1000;</span></code></div>
  </div>
 </div>
  <div class="note" id="128033">  <div class="votes">
    <div id="Vu128033">
    <a href="/manual/vote-note.php?id=128033&amp;page=class.spldoublylinkedlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128033">
    <a href="/manual/vote-note.php?id=128033&amp;page=class.spldoublylinkedlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128033" title="no votes...">
    0
    </div>
  </div>
  <a href="#128033" class="name">
  <strong class="user"><em>Premysl Karbula</em></strong></a><a class="genanchor" href="#128033"> &para;</a><div class="date" title="2022-12-21 01:22"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128033">
<div class="phpcode"><code><span class="html">A function which replaces some portion od doubly linked list (DLL) with items from specified array.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Replace some portion (specified by index and length) of DLL with items<br /> * from the specified replacement array.<br /> */<br /></span><span class="keyword">public function </span><span class="default">dll_splice</span><span class="keyword">(<br />    </span><span class="default">\SplDoublyLinkedList $dll</span><span class="keyword">,<br />    </span><span class="default">int $start</span><span class="keyword">,<br />    </span><span class="default">int $length</span><span class="keyword">,<br />    array </span><span class="default">$replacement</span><span class="keyword">,<br />): </span><span class="default">void </span><span class="keyword">{<br /><br />    if (</span><span class="default">$start </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">|| (</span><span class="default">$start </span><span class="keyword">+ </span><span class="default">$length</span><span class="keyword">) &gt; </span><span class="default">$dll</span><span class="keyword">-&gt;</span><span class="default">count</span><span class="keyword">()) {<br />        throw new </span><span class="default">\OutOfRangeException</span><span class="keyword">(</span><span class="string">"Invalid range for splicing"</span><span class="keyword">);<br />    }<br /><br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$dll</span><span class="keyword">-&gt;</span><span class="default">offsetUnset</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">);<br />    }<br /><br />    foreach (</span><span class="default">$replacement </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">) {<br />        </span><span class="default">$dll</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">, </span><span class="default">$item</span><span class="keyword">);<br />    }<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121364">  <div class="votes">
    <div id="Vu121364">
    <a href="/manual/vote-note.php?id=121364&amp;page=class.spldoublylinkedlist&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121364">
    <a href="/manual/vote-note.php?id=121364&amp;page=class.spldoublylinkedlist&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121364" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#121364" class="name">
  <strong class="user"><em>lincoln dot du dot j at gmail dot com</em></strong></a><a class="genanchor" href="#121364"> &para;</a><div class="date" title="2017-07-12 06:28"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121364">
<div class="phpcode"><code><span class="html">$a = new SplDoublyLinkedList;<br />$arr=[1,2,3,4,5,6,7,8,9];<br />for($i=0;$i&lt;count($arr);$i++){<br />    $a-&gt;add($i,$arr[$i]);<br />}<br /><br />$a-&gt;push(11); //push method<br />$a-&gt;add(10,12); //add method must with index<br />$a-&gt;shift(); //remove array first value<br />$a-&gt;unshift(1); //add first value<br /><br />$a-&gt;rewind(); //initial from first <br /><br />echo "SplDoublyLinkedList array last/top value " .  $a-&gt;top() ." \n";<br />echo "SplDoublyLinkedList array count value " .  $a-&gt;count() ." \n";<br />echo "SplDoublyLinkedList array first/top value " . $a-&gt;bottom() . " \n\n";<br /><br />while($a-&gt;valid()){ //check with valid method<br />    echo 'key ', $a-&gt;key(), ' value ', $a-&gt;current(),"\n"; //key and current method use here<br />    $a-&gt;next(); //next method use here<br />}<br /><br />$a-&gt;pop(); //remove array last value<br />print_r($a);<br />$s=$a-&gt;serialize();<br />echo $s;<br /><br />//Output<br />SplDoublyLinkedList array last/top value 12 <br />SplDoublyLinkedList array count value 11 <br />SplDoublyLinkedList array first/top value 1 <br /><br />key 0 value 1<br />key 1 value 2<br />key 2 value 3<br />key 3 value 4<br />key 4 value 5<br />key 5 value 6<br />key 6 value 7<br />key 7 value 8<br />key 8 value 9<br />key 9 value 11<br />key 10 value 12<br />SplDoublyLinkedList Object<br />(<br />    [flags:SplDoublyLinkedList:private] =&gt; 0<br />    [dllist:SplDoublyLinkedList:private] =&gt; Array<br />        (<br />            [0] =&gt; 1<br />            [1] =&gt; 2<br />            [2] =&gt; 3<br />            [3] =&gt; 4<br />            [4] =&gt; 5<br />            [5] =&gt; 6<br />            [6] =&gt; 7<br />            [7] =&gt; 8<br />            [8] =&gt; 9<br />            [9] =&gt; 11<br />        )<br /><br />)<br />i:0;:i:1;:i:2;:i:3;:i:4;:i:5;:i:6;:i:7;:i:8;:i:9;:i:11;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.spldoublylinkedlist&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.spldoublylinkedlist.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="spl.datastructures.php">Datastructures</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
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
