<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SPL - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.spl.php">
 <link rel="shorturl" href="https://www.php.net/spl">
 <link rel="alternate" href="https://www.php.net/spl" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.basic.other.php">
 <link rel="prev" href="https://www.php.net/manual/en/seaslog.warning.php">
 <link rel="next" href="https://www.php.net/manual/en/spl.interfaces.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.spl.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.spl.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.spl.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.spl.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.spl.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.spl.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.spl.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.spl.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.spl.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.spl.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.spl.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Standard PHP Library (SPL)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SPL - Manual" />
<meta name="twitter:description" content="Standard PHP Library (SPL)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SPL - Manual" />
<meta itemprop="description" content="Standard PHP Library (SPL)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Standard PHP Library (SPL)" />

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
        <a href="spl.interfaces.php">
          Interfaces &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="seaslog.warning.php">
          &laquo; SeasLog::warning        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      </ul>
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
            <option value='en/book.spl.php' selected="selected">English</option>
            <option value='de/book.spl.php'>German</option>
            <option value='es/book.spl.php'>Spanish</option>
            <option value='fr/book.spl.php'>French</option>
            <option value='it/book.spl.php'>Italian</option>
            <option value='ja/book.spl.php'>Japanese</option>
            <option value='pt_BR/book.spl.php'>Brazilian Portuguese</option>
            <option value='ru/book.spl.php'>Russian</option>
            <option value='tr/book.spl.php'>Turkish</option>
            <option value='uk/book.spl.php'>Ukrainian</option>
            <option value='zh/book.spl.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.spl" class="book">
 
 <h1 class="title">Standard PHP Library (SPL)</h1>
 

 <div id="intro.spl" class="preface">
  <h1 class="title">Introduction</h1>
  <p class="simpara">
   The Standard PHP Library (SPL) extension defines interfaces and classes
   that are meant to solve common problems.
  </p>
  <p class="simpara">
   The extension provides various datastructures, generic exceptions,
   iterators, classes to work with filesystems using an object
   oriented <abbr title="Application Programming Interface">API</abbr>, and utility functions.
  </p>
 </div>

 




 




 




 




 





 







<ul class="chunklist chunklist_book"><li><a href="spl.interfaces.php">Interfaces</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="class.outeriterator.php">OuterIterator</a> — The OuterIterator interface</li><li><a href="class.recursiveiterator.php">RecursiveIterator</a> — The RecursiveIterator interface</li><li><a href="class.seekableiterator.php">SeekableIterator</a> — The SeekableIterator interface</li><li><a href="class.splobserver.php">SplObserver</a> — The SplObserver interface</li><li><a href="class.splsubject.php">SplSubject</a> — The SplSubject interface</li></ul></li><li><a href="spl.datastructures.php">Datastructures</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="class.spldoublylinkedlist.php">SplDoublyLinkedList</a> — The SplDoublyLinkedList class</li><li><a href="class.splstack.php">SplStack</a> — The SplStack class</li><li><a href="class.splqueue.php">SplQueue</a> — The SplQueue class</li><li><a href="class.splheap.php">SplHeap</a> — The SplHeap class</li><li><a href="class.splmaxheap.php">SplMaxHeap</a> — The SplMaxHeap class</li><li><a href="class.splminheap.php">SplMinHeap</a> — The SplMinHeap class</li><li><a href="class.splpriorityqueue.php">SplPriorityQueue</a> — The SplPriorityQueue class</li><li><a href="class.splfixedarray.php">SplFixedArray</a> — The SplFixedArray class</li><li><a href="class.arrayobject.php">ArrayObject</a> — The ArrayObject class</li><li><a href="class.splobjectstorage.php">SplObjectStorage</a> — The SplObjectStorage class</li></ul></li><li><a href="spl.exceptions.php">Exceptions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="class.badfunctioncallexception.php">BadFunctionCallException</a> — The BadFunctionCallException class</li><li><a href="class.badmethodcallexception.php">BadMethodCallException</a> — The BadMethodCallException class</li><li><a href="class.domainexception.php">DomainException</a> — The DomainException class</li><li><a href="class.invalidargumentexception.php">InvalidArgumentException</a> — The InvalidArgumentException class</li><li><a href="class.lengthexception.php">LengthException</a> — The LengthException class</li><li><a href="class.logicexception.php">LogicException</a> — The LogicException class</li><li><a href="class.outofboundsexception.php">OutOfBoundsException</a> — The OutOfBoundsException class</li><li><a href="class.outofrangeexception.php">OutOfRangeException</a> — The OutOfRangeException class</li><li><a href="class.overflowexception.php">OverflowException</a> — The OverflowException class</li><li><a href="class.rangeexception.php">RangeException</a> — The RangeException class</li><li><a href="class.runtimeexception.php">RuntimeException</a> — The RuntimeException class</li><li><a href="class.underflowexception.php">UnderflowException</a> — The UnderflowException class</li><li><a href="class.unexpectedvalueexception.php">UnexpectedValueException</a> — The UnexpectedValueException class</li></ul></li><li><a href="spl.iterators.php">Iterators</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="class.appenditerator.php">AppendIterator</a> — The AppendIterator class</li><li><a href="class.arrayiterator.php">ArrayIterator</a> — The ArrayIterator class</li><li><a href="class.cachingiterator.php">CachingIterator</a> — The CachingIterator class</li><li><a href="class.callbackfilteriterator.php">CallbackFilterIterator</a> — The CallbackFilterIterator class</li><li><a href="class.directoryiterator.php">DirectoryIterator</a> — The DirectoryIterator class</li><li><a href="class.emptyiterator.php">EmptyIterator</a> — The EmptyIterator class</li><li><a href="class.filesystemiterator.php">FilesystemIterator</a> — The FilesystemIterator class</li><li><a href="class.filteriterator.php">FilterIterator</a> — The FilterIterator class</li><li><a href="class.globiterator.php">GlobIterator</a> — The GlobIterator class</li><li><a href="class.infiniteiterator.php">InfiniteIterator</a> — The InfiniteIterator class</li><li><a href="class.iteratoriterator.php">IteratorIterator</a> — The IteratorIterator class</li><li><a href="class.limititerator.php">LimitIterator</a> — The LimitIterator class</li><li><a href="class.multipleiterator.php">MultipleIterator</a> — The MultipleIterator class</li><li><a href="class.norewinditerator.php">NoRewindIterator</a> — The NoRewindIterator class</li><li><a href="class.parentiterator.php">ParentIterator</a> — The ParentIterator class</li><li><a href="class.recursivearrayiterator.php">RecursiveArrayIterator</a> — The RecursiveArrayIterator class</li><li><a href="class.recursivecachingiterator.php">RecursiveCachingIterator</a> — The RecursiveCachingIterator class</li><li><a href="class.recursivecallbackfilteriterator.php">RecursiveCallbackFilterIterator</a> — The RecursiveCallbackFilterIterator class</li><li><a href="class.recursivedirectoryiterator.php">RecursiveDirectoryIterator</a> — The RecursiveDirectoryIterator class</li><li><a href="class.recursivefilteriterator.php">RecursiveFilterIterator</a> — The RecursiveFilterIterator class</li><li><a href="class.recursiveiteratoriterator.php">RecursiveIteratorIterator</a> — The RecursiveIteratorIterator class</li><li><a href="class.recursiveregexiterator.php">RecursiveRegexIterator</a> — The RecursiveRegexIterator class</li><li><a href="class.recursivetreeiterator.php">RecursiveTreeIterator</a> — The RecursiveTreeIterator class</li><li><a href="class.regexiterator.php">RegexIterator</a> — The RegexIterator class</li></ul></li><li><a href="spl.files.php">File Handling</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="class.splfileinfo.php">SplFileInfo</a> — The SplFileInfo class</li><li><a href="class.splfileobject.php">SplFileObject</a> — The SplFileObject class</li><li><a href="class.spltempfileobject.php">SplTempFileObject</a> — The SplTempFileObject class</li></ul></li><li><a href="ref.spl.php">SPL Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.class-implements.php">class_implements</a> — Return the interfaces which are implemented by the given class or interface</li><li><a href="function.class-parents.php">class_parents</a> — Return the parent classes of the given class</li><li><a href="function.class-uses.php">class_uses</a> — Return the traits used by the given class</li><li><a href="function.iterator-apply.php">iterator_apply</a> — Call a function for every element in an iterator</li><li><a href="function.iterator-count.php">iterator_count</a> — Count the elements in an iterator</li><li><a href="function.iterator-to-array.php">iterator_to_array</a> — Copy the iterator into an array</li><li><a href="function.spl-autoload.php">spl_autoload</a> — Default implementation for __autoload()</li><li><a href="function.spl-autoload-call.php">spl_autoload_call</a> — Try all registered __autoload() functions to load the requested class</li><li><a href="function.spl-autoload-extensions.php">spl_autoload_extensions</a> — Register and return default file extensions for spl_autoload</li><li><a href="function.spl-autoload-functions.php">spl_autoload_functions</a> — Return all registered __autoload() functions</li><li><a href="function.spl-autoload-register.php">spl_autoload_register</a> — Register given function as __autoload() implementation</li><li><a href="function.spl-autoload-unregister.php">spl_autoload_unregister</a> — Unregister given function as __autoload() implementation</li><li><a href="function.spl-classes.php">spl_classes</a> — Return available SPL classes</li><li><a href="function.spl-object-hash.php">spl_object_hash</a> — Return hash id for given object</li><li><a href="function.spl-object-id.php">spl_object_id</a> — Return the integer object handle for given object</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.spl%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.spl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.spl.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.basic.other.php">Other Basic Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.geoip.php" title="GeoIP">GeoIP</a>
                        </li>
                                                <li class="">
                            <a href="book.fann.php" title="FANN">FANN</a>
                        </li>
                                                <li class="">
                            <a href="book.igbinary.php" title="Igbinary">Igbinary</a>
                        </li>
                                                <li class="">
                            <a href="book.json.php" title="JSON">JSON</a>
                        </li>
                                                <li class="">
                            <a href="book.simdjson.php" title="Simdjson">Simdjson</a>
                        </li>
                                                <li class="">
                            <a href="book.lua.php" title="Lua">Lua</a>
                        </li>
                                                <li class="">
                            <a href="book.luasandbox.php" title="LuaSandbox">LuaSandbox</a>
                        </li>
                                                <li class="">
                            <a href="book.misc.php" title="Misc.">Misc.</a>
                        </li>
                                                <li class="">
                            <a href="book.random.php" title="Random">Random</a>
                        </li>
                                                <li class="">
                            <a href="book.seaslog.php" title="Seaslog">Seaslog</a>
                        </li>
                                                <li class="current">
                            <a href="book.spl.php" title="SPL">SPL</a>
                        </li>
                                                <li class="">
                            <a href="book.stream.php" title="Streams">Streams</a>
                        </li>
                                                <li class="">
                            <a href="book.swoole.php" title="Swoole">Swoole</a>
                        </li>
                                                <li class="">
                            <a href="book.tidy.php" title="Tidy">Tidy</a>
                        </li>
                                                <li class="">
                            <a href="book.tokenizer.php" title="Tokenizer">Tokenizer</a>
                        </li>
                                                <li class="">
                            <a href="book.url.php" title="URLs">URLs</a>
                        </li>
                                                <li class="">
                            <a href="book.v8js.php" title="V8js">V8js</a>
                        </li>
                                                <li class="">
                            <a href="book.yaml.php" title="Yaml">Yaml</a>
                        </li>
                                                <li class="">
                            <a href="book.yaf.php" title="Yaf">Yaf</a>
                        </li>
                                                <li class="">
                            <a href="book.yaconf.php" title="Yaconf">Yaconf</a>
                        </li>
                                                <li class="">
                            <a href="book.taint.php" title="Taint">Taint</a>
                        </li>
                                                <li class="">
                            <a href="book.ds.php" title="Data Structures">Data Structures</a>
                        </li>
                                                <li class="">
                            <a href="book.var_representation.php" title="var_&#8203;representation">var_&#8203;representation</a>
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
