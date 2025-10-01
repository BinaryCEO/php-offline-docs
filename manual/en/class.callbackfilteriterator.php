<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: CallbackFilterIterator - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.callbackfilteriterator.php">
 <link rel="shorturl" href="https://www.php.net/callbackfilteriterator">
 <link rel="alternate" href="https://www.php.net/callbackfilteriterator" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.iterators.php">
 <link rel="prev" href="https://www.php.net/manual/en/cachingiterator.valid.php">
 <link rel="next" href="https://www.php.net/manual/en/callbackfilteriterator.accept.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.callbackfilteriterator.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.callbackfilteriterator.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.callbackfilteriterator.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.callbackfilteriterator.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.callbackfilteriterator.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.callbackfilteriterator.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.callbackfilteriterator.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.callbackfilteriterator.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.callbackfilteriterator.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.callbackfilteriterator.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.callbackfilteriterator.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The CallbackFilterIterator class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: CallbackFilterIterator - Manual" />
<meta name="twitter:description" content="The CallbackFilterIterator class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: CallbackFilterIterator - Manual" />
<meta itemprop="description" content="The CallbackFilterIterator class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The CallbackFilterIterator class" />

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
        <a href="callbackfilteriterator.accept.php">
          CallbackFilterIterator::accept &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="cachingiterator.valid.php">
          &laquo; CachingIterator::valid        </a>
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
            <option value='en/class.callbackfilteriterator.php' selected="selected">English</option>
            <option value='de/class.callbackfilteriterator.php'>German</option>
            <option value='es/class.callbackfilteriterator.php'>Spanish</option>
            <option value='fr/class.callbackfilteriterator.php'>French</option>
            <option value='it/class.callbackfilteriterator.php'>Italian</option>
            <option value='ja/class.callbackfilteriterator.php'>Japanese</option>
            <option value='pt_BR/class.callbackfilteriterator.php'>Brazilian Portuguese</option>
            <option value='ru/class.callbackfilteriterator.php'>Russian</option>
            <option value='tr/class.callbackfilteriterator.php'>Turkish</option>
            <option value='uk/class.callbackfilteriterator.php'>Ukrainian</option>
            <option value='zh/class.callbackfilteriterator.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.callbackfilteriterator" class="reference">

 <h1 class="title">The CallbackFilterIterator class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7, PHP 8)</p>


  <div class="section" id="callbackfilteriterator.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="callbackfilteriterator.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">CallbackFilterIterator</strong></strong>
    

    
     <span class="modifier">extends</span>
      <a href="class.filteriterator.php" class="classname">FilterIterator</a>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="callbackfilteriterator.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="class.iterator.php" class="type Iterator">Iterator</a></span> <code class="parameter">$iterator</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="callbackfilteriterator.accept.php" class="methodname">accept</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filteriterator.accept.php" class="methodname">FilterIterator::accept</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filteriterator.current.php" class="methodname">FilterIterator::current</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filteriterator.key.php" class="methodname">FilterIterator::key</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filteriterator.next.php" class="methodname">FilterIterator::next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filteriterator.rewind.php" class="methodname">FilterIterator::rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="filteriterator.valid.php" class="methodname">FilterIterator::valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="iteratoriterator.current.php" class="methodname">IteratorIterator::current</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="iteratoriterator.getinneriterator.php" class="methodname">IteratorIterator::getInnerIterator</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.iterator.php" class="type Iterator">Iterator</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="iteratoriterator.key.php" class="methodname">IteratorIterator::key</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="iteratoriterator.next.php" class="methodname">IteratorIterator::next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="iteratoriterator.rewind.php" class="methodname">IteratorIterator::rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="iteratoriterator.valid.php" class="methodname">IteratorIterator::valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>


  </div>

  
  <div class="section" id="callbackfilteriterator.examples">
   <h2 class="title">Examples</h2>
   <p class="para">
    The callback should accept up to three arguments:
    the current item, the current key and the iterator, respectively.
   </p>
   <div class="example" id="callbackfilteriterator.examples.args">
    <p><strong>Example #1 Available callback arguments</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/**<br /> * Callback for CallbackFilterIterator<br /> *<br /> * @param $current   Current item's value<br /> * @param $key       Current item's key<br /> * @param $iterator  Iterator being filtered<br /> * @return boolean   TRUE to accept the current item, FALSE otherwise<br /> */<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">my_callback</span><span style="color: #007700">(</span><span style="color: #0000BB">$current</span><span style="color: #007700">, </span><span style="color: #0000BB">$key</span><span style="color: #007700">, </span><span style="color: #0000BB">$iterator</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// Your filtering code here<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <p class="para">
    Any <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> may be used; such as a string containing a
    function name, an array for a method, or an anonymous function.
   </p>
   <div class="example" id="callbackfilteriterator.examples.basic">
    <p><strong>Example #2 Callback basic examples</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$dir </span><span style="color: #007700">= new </span><span style="color: #0000BB">FilesystemIterator</span><span style="color: #007700">(</span><span style="color: #0000BB">__DIR__</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Filter large files ( &gt; 100MB)<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">is_large_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$current</span><span style="color: #007700">) {<br />    return </span><span style="color: #0000BB">$current</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isFile</span><span style="color: #007700">() &amp;&amp; </span><span style="color: #0000BB">$current</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSize</span><span style="color: #007700">() &gt; </span><span style="color: #0000BB">104857600</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">$large_files </span><span style="color: #007700">= new </span><span style="color: #0000BB">CallbackFilterIterator</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">, </span><span style="color: #DD0000">'is_large_file'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Filter directories<br /></span><span style="color: #0000BB">$files </span><span style="color: #007700">= new </span><span style="color: #0000BB">CallbackFilterIterator</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$current</span><span style="color: #007700">, </span><span style="color: #0000BB">$key</span><span style="color: #007700">, </span><span style="color: #0000BB">$iterator</span><span style="color: #007700">) {<br />    return </span><span style="color: #0000BB">$current</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isDir</span><span style="color: #007700">() &amp;&amp; ! </span><span style="color: #0000BB">$iterator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isDot</span><span style="color: #007700">();<br />});<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>
  


 </div>

 










<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="callbackfilteriterator.accept.php">CallbackFilterIterator::accept</a> — Calls the callback with the current value, the current key and the inner iterator as arguments</li><li><a href="callbackfilteriterator.construct.php">CallbackFilterIterator::__construct</a> — Create a filtered iterator from another iterator</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/callbackfilteriterator.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.callbackfilteriterator%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.callbackfilteriterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.callbackfilteriterator.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
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
                                                <li class="current">
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
