<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: RecursiveIteratorIterator - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.recursiveiteratoriterator.php">
 <link rel="shorturl" href="https://www.php.net/recursiveiteratoriterator">
 <link rel="alternate" href="https://www.php.net/recursiveiteratoriterator" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.iterators.php">
 <link rel="prev" href="https://www.php.net/manual/en/recursivefilteriterator.haschildren.php">
 <link rel="next" href="https://www.php.net/manual/en/recursiveiteratoriterator.beginchildren.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.recursiveiteratoriterator.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.recursiveiteratoriterator.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.recursiveiteratoriterator.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.recursiveiteratoriterator.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.recursiveiteratoriterator.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.recursiveiteratoriterator.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.recursiveiteratoriterator.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.recursiveiteratoriterator.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.recursiveiteratoriterator.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.recursiveiteratoriterator.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.recursiveiteratoriterator.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The RecursiveIteratorIterator class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: RecursiveIteratorIterator - Manual" />
<meta name="twitter:description" content="The RecursiveIteratorIterator class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: RecursiveIteratorIterator - Manual" />
<meta itemprop="description" content="The RecursiveIteratorIterator class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The RecursiveIteratorIterator class" />

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
        <a href="recursiveiteratoriterator.beginchildren.php">
          RecursiveIteratorIterator::beginChildren &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="recursivefilteriterator.haschildren.php">
          &laquo; RecursiveFilterIterator::hasChildren        </a>
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
            <option value='en/class.recursiveiteratoriterator.php' selected="selected">English</option>
            <option value='de/class.recursiveiteratoriterator.php'>German</option>
            <option value='es/class.recursiveiteratoriterator.php'>Spanish</option>
            <option value='fr/class.recursiveiteratoriterator.php'>French</option>
            <option value='it/class.recursiveiteratoriterator.php'>Italian</option>
            <option value='ja/class.recursiveiteratoriterator.php'>Japanese</option>
            <option value='pt_BR/class.recursiveiteratoriterator.php'>Brazilian Portuguese</option>
            <option value='ru/class.recursiveiteratoriterator.php'>Russian</option>
            <option value='tr/class.recursiveiteratoriterator.php'>Turkish</option>
            <option value='uk/class.recursiveiteratoriterator.php'>Ukrainian</option>
            <option value='zh/class.recursiveiteratoriterator.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.recursiveiteratoriterator" class="reference">
 <h1 class="title">The RecursiveIteratorIterator class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>


  <div class="section" id="recursiveiteratoriterator.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Can be used to iterate through recursive iterators.
   </p>
  </div>


  <div class="section" id="recursiveiteratoriterator.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">RecursiveIteratorIterator</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.outeriterator.php" class="interfacename">OuterIterator</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.recursiveiteratoriterator.php#recursiveiteratoriterator.constants.leaves-only"><var class="varname">LEAVES_ONLY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.recursiveiteratoriterator.php#recursiveiteratoriterator.constants.self-first"><var class="varname">SELF_FIRST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.recursiveiteratoriterator.php#recursiveiteratoriterator.constants.child-first"><var class="varname">CHILD_FIRST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.recursiveiteratoriterator.php#recursiveiteratoriterator.constants.catch-get-child"><var class="varname">CATCH_GET_CHILD</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="class.traversable.php" class="type Traversable">Traversable</a></span> <code class="parameter">$iterator</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = RecursiveIteratorIterator::LEAVES_ONLY</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.beginchildren.php" class="methodname">beginChildren</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.beginiteration.php" class="methodname">beginIteration</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.callgetchildren.php" class="methodname">callGetChildren</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.recursiveiterator.php" class="type RecursiveIterator">RecursiveIterator</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.callhaschildren.php" class="methodname">callHasChildren</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.current.php" class="methodname">current</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.endchildren.php" class="methodname">endChildren</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.enditeration.php" class="methodname">endIteration</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.getdepth.php" class="methodname">getDepth</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.getinneriterator.php" class="methodname">getInnerIterator</a></span>(): <span class="type"><a href="class.recursiveiterator.php" class="type RecursiveIterator">RecursiveIterator</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.getmaxdepth.php" class="methodname">getMaxDepth</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.getsubiterator.php" class="methodname">getSubIterator</a></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$level</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.recursiveiterator.php" class="type RecursiveIterator">RecursiveIterator</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.key.php" class="methodname">key</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.nextelement.php" class="methodname">nextElement</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.setmaxdepth.php" class="methodname">setMaxDepth</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$maxDepth</code><span class="initializer"> = -1</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="recursiveiteratoriterator.valid.php" class="methodname">valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>

  </div>


  <div class="section" id="recursiveiteratoriterator.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>

    
     <dt id="recursiveiteratoriterator.constants.leaves-only"><strong><code><a href="class.recursiveiteratoriterator.php#recursiveiteratoriterator.constants.leaves-only">RecursiveIteratorIterator::LEAVES_ONLY</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="recursiveiteratoriterator.constants.self-first"><strong><code><a href="class.recursiveiteratoriterator.php#recursiveiteratoriterator.constants.self-first">RecursiveIteratorIterator::SELF_FIRST</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="recursiveiteratoriterator.constants.child-first"><strong><code><a href="class.recursiveiteratoriterator.php#recursiveiteratoriterator.constants.child-first">RecursiveIteratorIterator::CHILD_FIRST</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

    
     <dt id="recursiveiteratoriterator.constants.catch-get-child"><strong><code><a href="class.recursiveiteratoriterator.php#recursiveiteratoriterator.constants.catch-get-child">RecursiveIteratorIterator::CATCH_GET_CHILD</a></code></strong></dt>
     <dd>
      <p class="para"/>
     </dd>
    

   </dl>
  </div>


 </div>

 


























































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="recursiveiteratoriterator.beginchildren.php">RecursiveIteratorIterator::beginChildren</a> — Begin children</li><li><a href="recursiveiteratoriterator.beginiteration.php">RecursiveIteratorIterator::beginIteration</a> — Begin Iteration</li><li><a href="recursiveiteratoriterator.callgetchildren.php">RecursiveIteratorIterator::callGetChildren</a> — Get children</li><li><a href="recursiveiteratoriterator.callhaschildren.php">RecursiveIteratorIterator::callHasChildren</a> — Has children</li><li><a href="recursiveiteratoriterator.construct.php">RecursiveIteratorIterator::__construct</a> — Construct a RecursiveIteratorIterator</li><li><a href="recursiveiteratoriterator.current.php">RecursiveIteratorIterator::current</a> — Access the current element value</li><li><a href="recursiveiteratoriterator.endchildren.php">RecursiveIteratorIterator::endChildren</a> — End children</li><li><a href="recursiveiteratoriterator.enditeration.php">RecursiveIteratorIterator::endIteration</a> — End Iteration</li><li><a href="recursiveiteratoriterator.getdepth.php">RecursiveIteratorIterator::getDepth</a> — Get the current depth of the recursive iteration</li><li><a href="recursiveiteratoriterator.getinneriterator.php">RecursiveIteratorIterator::getInnerIterator</a> — Get inner iterator</li><li><a href="recursiveiteratoriterator.getmaxdepth.php">RecursiveIteratorIterator::getMaxDepth</a> — Get max depth</li><li><a href="recursiveiteratoriterator.getsubiterator.php">RecursiveIteratorIterator::getSubIterator</a> — The current active sub iterator</li><li><a href="recursiveiteratoriterator.key.php">RecursiveIteratorIterator::key</a> — Access the current key</li><li><a href="recursiveiteratoriterator.next.php">RecursiveIteratorIterator::next</a> — Move forward to the next element</li><li><a href="recursiveiteratoriterator.nextelement.php">RecursiveIteratorIterator::nextElement</a> — Next element</li><li><a href="recursiveiteratoriterator.rewind.php">RecursiveIteratorIterator::rewind</a> — Rewind the iterator to the first element of the top level inner iterator</li><li><a href="recursiveiteratoriterator.setmaxdepth.php">RecursiveIteratorIterator::setMaxDepth</a> — Set max depth</li><li><a href="recursiveiteratoriterator.valid.php">RecursiveIteratorIterator::valid</a> — Check whether the current position is valid</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/recursiveiteratoriterator.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.recursiveiteratoriterator%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.recursiveiteratoriterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.recursiveiteratoriterator.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120131">  <div class="votes">
    <div id="Vu120131">
    <a href="/manual/vote-note.php?id=120131&amp;page=class.recursiveiteratoriterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120131">
    <a href="/manual/vote-note.php?id=120131&amp;page=class.recursiveiteratoriterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120131" title="90% like this...">
    24
    </div>
  </div>
  <a href="#120131" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#120131"> &para;</a><div class="date" title="2016-11-08 10:15"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120131">
<div class="phpcode"><code><span class="html">A very useful use case for RecusiveIteratorIterator in combination with RecursiveArrayIterator is to replace array values on a multidimensional array at any level deep.<br /><br />Usually, array_walk_recursive would be used to replace values deep within arrays, but unfortunately this only works when there is a standard key value pair - in other words, array_walk_recursive ONLY VISITS LEAF NODES, NOT arrays.<br /><br />So to get around this, the iterators can be used in this way:<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= [<br />    </span><span class="string">'test' </span><span class="keyword">=&gt; </span><span class="string">'value'</span><span class="keyword">,<br />    </span><span class="string">'level_one' </span><span class="keyword">=&gt; [<br />        </span><span class="string">'level_two' </span><span class="keyword">=&gt; [<br />            </span><span class="string">'level_three' </span><span class="keyword">=&gt; [<br />                </span><span class="string">'replace_this_array' </span><span class="keyword">=&gt; [<br />                    </span><span class="string">'special_key' </span><span class="keyword">=&gt; </span><span class="string">'replacement_value'</span><span class="keyword">,<br />                    </span><span class="string">'key_one' </span><span class="keyword">=&gt; </span><span class="string">'testing'</span><span class="keyword">,<br />                    </span><span class="string">'key_two' </span><span class="keyword">=&gt; </span><span class="string">'value'</span><span class="keyword">,<br />                    </span><span class="string">'four' </span><span class="keyword">=&gt; </span><span class="string">'another value'<br />                </span><span class="keyword">]<br />            ],<br />            </span><span class="string">'ordinary_key' </span><span class="keyword">=&gt; </span><span class="string">'value'<br />        </span><span class="keyword">]<br />    ]<br />];<br /><br /></span><span class="default">$arrayIterator </span><span class="keyword">= new </span><span class="default">\RecursiveArrayIterator</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">$recursiveIterator </span><span class="keyword">= new </span><span class="default">\RecursiveIteratorIterator</span><span class="keyword">(</span><span class="default">$arrayIterator</span><span class="keyword">, </span><span class="default">\RecursiveIteratorIterator</span><span class="keyword">::</span><span class="default">SELF_FIRST</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$recursiveIterator </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) &amp;&amp; </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'special_key'</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)) {<br />        </span><span class="comment">// Here we replace ALL keys with the same value from 'special_key'<br />        </span><span class="default">$replaced </span><span class="keyword">= </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">count</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">), </span><span class="default">$value</span><span class="keyword">[</span><span class="string">'special_key'</span><span class="keyword">]);<br />        </span><span class="default">$value </span><span class="keyword">= </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">), </span><span class="default">$replaced</span><span class="keyword">);<br />        </span><span class="comment">// set a new key<br />        </span><span class="default">$value</span><span class="keyword">[</span><span class="string">'new_key'</span><span class="keyword">] = </span><span class="string">'new value'</span><span class="keyword">;<br /><br />        </span><span class="comment">// Get the current depth and traverse back up the tree, saving the modifications<br />        </span><span class="default">$currentDepth </span><span class="keyword">= </span><span class="default">$recursiveIterator</span><span class="keyword">-&gt;</span><span class="default">getDepth</span><span class="keyword">();<br />        for (</span><span class="default">$subDepth </span><span class="keyword">= </span><span class="default">$currentDepth</span><span class="keyword">; </span><span class="default">$subDepth </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$subDepth</span><span class="keyword">--) {<br />            </span><span class="comment">// Get the current level iterator<br />            </span><span class="default">$subIterator </span><span class="keyword">= </span><span class="default">$recursiveIterator</span><span class="keyword">-&gt;</span><span class="default">getSubIterator</span><span class="keyword">(</span><span class="default">$subDepth</span><span class="keyword">); <br />            </span><span class="comment">// If we are on the level we want to change, use the replacements ($value) other wise set the key to the parent iterators value<br />            </span><span class="default">$subIterator</span><span class="keyword">-&gt;</span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$subIterator</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">(), (</span><span class="default">$subDepth </span><span class="keyword">=== </span><span class="default">$currentDepth </span><span class="keyword">? </span><span class="default">$value </span><span class="keyword">: </span><span class="default">$recursiveIterator</span><span class="keyword">-&gt;</span><span class="default">getSubIterator</span><span class="keyword">((</span><span class="default">$subDepth</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">))-&gt;</span><span class="default">getArrayCopy</span><span class="keyword">())); <br />       }<br />    }<br />}<br />return </span><span class="default">$recursiveIterator</span><span class="keyword">-&gt;</span><span class="default">getArrayCopy</span><span class="keyword">();<br /></span><span class="comment">// return:<br /></span><span class="default">$array </span><span class="keyword">= [<br />    </span><span class="string">'test' </span><span class="keyword">=&gt; </span><span class="string">'value'</span><span class="keyword">,<br />    </span><span class="string">'level_one' </span><span class="keyword">=&gt; [<br />        </span><span class="string">'level_two' </span><span class="keyword">=&gt; [<br />            </span><span class="string">'level_three' </span><span class="keyword">=&gt; [<br />                </span><span class="string">'replace_this_array' </span><span class="keyword">=&gt; [<br />                    </span><span class="string">'special_key' </span><span class="keyword">=&gt; </span><span class="string">'replacement_value'</span><span class="keyword">,<br />                    </span><span class="string">'key_one' </span><span class="keyword">=&gt; </span><span class="string">'replacement_value'</span><span class="keyword">,<br />                    </span><span class="string">'key_two' </span><span class="keyword">=&gt; </span><span class="string">'replacement_value'</span><span class="keyword">,<br />                    </span><span class="string">'four' </span><span class="keyword">=&gt; </span><span class="string">'replacement_value'</span><span class="keyword">,<br />                    </span><span class="string">'new_key' </span><span class="keyword">=&gt; </span><span class="string">'new value'<br />                </span><span class="keyword">]<br />            ],<br />            </span><span class="string">'ordinary_key' </span><span class="keyword">=&gt; </span><span class="string">'value'<br />        </span><span class="keyword">]<br />    ]<br />];<br /></span><span class="default">?&gt;<br /></span><br />The key is in traversing back up the tree to save the changes at that level - simply calling $recursiveIterator-&gt;offsetSet(); will only set a key on the root array.</span></code></div>
  </div>
 </div>
  <div class="note" id="104587">  <div class="votes">
    <div id="Vu104587">
    <a href="/manual/vote-note.php?id=104587&amp;page=class.recursiveiteratoriterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104587">
    <a href="/manual/vote-note.php?id=104587&amp;page=class.recursiveiteratoriterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104587" title="82% like this...">
    11
    </div>
  </div>
  <a href="#104587" class="name">
  <strong class="user"><em>Adil Baig @ AIdezigns</em></strong></a><a class="genanchor" href="#104587"> &para;</a><div class="date" title="2011-06-23 11:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104587">
<div class="phpcode"><code><span class="html">A very important thing to note about \RecursiveIteratorIterator is that it returns a flattened array when used with the iterator_to_array function. Ex:
<br />
<br /><span class="default">&lt;?php
<br />$arr </span><span class="keyword">= array(</span><span class="string">'Zero'</span><span class="keyword">, </span><span class="string">'name'</span><span class="keyword">=&gt;</span><span class="string">'Adil'</span><span class="keyword">, </span><span class="string">'address' </span><span class="keyword">=&gt; array( </span><span class="string">'city'</span><span class="keyword">=&gt;</span><span class="string">'Dubai'</span><span class="keyword">, </span><span class="string">'tel' </span><span class="keyword">=&gt; array(</span><span class="string">'int' </span><span class="keyword">=&gt; </span><span class="default">971</span><span class="keyword">, </span><span class="string">'tel'</span><span class="keyword">=&gt;</span><span class="default">12345487</span><span class="keyword">)), </span><span class="string">'' </span><span class="keyword">=&gt; </span><span class="string">'nothing'</span><span class="keyword">);
<br />
<br /></span><span class="default">$iterator </span><span class="keyword">= new </span><span class="default">\RecursiveIteratorIterator</span><span class="keyword">(new </span><span class="default">\RecursiveArrayIterator</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">));
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">iterator_to_array</span><span class="keyword">(</span><span class="default">$iterator</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />This code will return :
<br />
<br />array(6) {
<br />  [0]=&gt;
<br />  string(4) "Zero"
<br />  ["name"]=&gt;
<br />  string(4) "Adil"
<br />  ["city"]=&gt;
<br />  string(5) "Dubai"
<br />  ["int"]=&gt;
<br />  int(91)
<br />  ["tel"]=&gt;
<br />  int(12345487)
<br />  [""]=&gt;
<br />  string(7) "nothing"
<br />}
<br />
<br />To get the non-flattened proper array use the getArrayCopy() method, like so :
<br />
<br />$iterator-&gt;getArrayCopy()
<br />
<br />This will return
<br />
<br />array(4) {
<br />  [0]=&gt;
<br />  string(4) "Zero"
<br />  ["name"]=&gt;
<br />  string(4) "Adil"
<br />  ["address"]=&gt;
<br />  array(2) {
<br />    ["city"]=&gt;
<br />    string(5) "Dubai"
<br />    ["tel"]=&gt;
<br />    array(2) {
<br />      ["int"]=&gt;
<br />      int(91)
<br />      ["tel"]=&gt;
<br />      int(12345487)
<br />    }
<br />  }
<br />  [""]=&gt;
<br />  string(7) "nothing"
<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="97642">  <div class="votes">
    <div id="Vu97642">
    <a href="/manual/vote-note.php?id=97642&amp;page=class.recursiveiteratoriterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97642">
    <a href="/manual/vote-note.php?id=97642&amp;page=class.recursiveiteratoriterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97642" title="82% like this...">
    11
    </div>
  </div>
  <a href="#97642" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#97642"> &para;</a><div class="date" title="2010-04-29 09:57"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97642">
<div class="phpcode"><code><span class="html">This example demonstrates using the getDepth() method with a RecursiveArrayIterator.<br /><br /><span class="default">&lt;?php<br />$tree </span><span class="keyword">= array();<br /></span><span class="default">$tree</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">2</span><span class="keyword">][</span><span class="default">3</span><span class="keyword">] = </span><span class="string">'lemon'</span><span class="keyword">;<br /></span><span class="default">$tree</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">4</span><span class="keyword">] = </span><span class="string">'melon'</span><span class="keyword">;<br /></span><span class="default">$tree</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">3</span><span class="keyword">] = </span><span class="string">'orange'</span><span class="keyword">;<br /></span><span class="default">$tree</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">5</span><span class="keyword">] = </span><span class="string">'grape'</span><span class="keyword">;<br /></span><span class="default">$tree</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="string">'pineapple'</span><span class="keyword">;<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$tree</span><span class="keyword">);<br /> <br /></span><span class="default">$arrayiter </span><span class="keyword">= new </span><span class="default">RecursiveArrayIterator</span><span class="keyword">(</span><span class="default">$tree</span><span class="keyword">);<br /></span><span class="default">$iteriter </span><span class="keyword">= new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(</span><span class="default">$arrayiter</span><span class="keyword">);<br /> <br />foreach (</span><span class="default">$iteriter </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />  </span><span class="default">$d </span><span class="keyword">= </span><span class="default">$iteriter</span><span class="keyword">-&gt;</span><span class="default">getDepth</span><span class="keyword">();<br />  echo </span><span class="string">"depth=</span><span class="default">$d</span><span class="string"> k=</span><span class="default">$key</span><span class="string"> v=</span><span class="default">$value</span><span class="string">\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />The output of this would be:<br /><br />Array<br />(<br />    [1] =&gt; Array<br />        (<br />            [2] =&gt; Array<br />                (<br />                    [3] =&gt; lemon<br />                )<br /><br />            [4] =&gt; melon<br />        )<br /><br />    [2] =&gt; Array<br />        (<br />            [3] =&gt; orange<br />            [5] =&gt; grape<br />        )<br /><br />    [3] =&gt; pineapple<br />)<br /><br />depth=2 k=3 v=lemon<br />depth=1 k=4 v=melon<br />depth=1 k=3 v=orange<br />depth=1 k=5 v=grape<br />depth=0 k=3 v=pineapple</span></code></div>
  </div>
 </div>
  <div class="note" id="91519">  <div class="votes">
    <div id="Vu91519">
    <a href="/manual/vote-note.php?id=91519&amp;page=class.recursiveiteratoriterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91519">
    <a href="/manual/vote-note.php?id=91519&amp;page=class.recursiveiteratoriterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91519" title="75% like this...">
    14
    </div>
  </div>
  <a href="#91519" class="name">
  <strong class="user"><em>Michiel Brandenburg</em></strong></a><a class="genanchor" href="#91519"> &para;</a><div class="date" title="2009-06-14 04:40"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91519">
<div class="phpcode"><code><span class="html">You can use this to quickly find all the files (recursively) in a certain directory. This beats maintaining a stack yourself.<br /><span class="default">&lt;?php<br />$directory </span><span class="keyword">= </span><span class="string">"/tmp/"</span><span class="keyword">;<br /></span><span class="default">$fileSPLObjects </span><span class="keyword">=  new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(<br />                new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$directory</span><span class="keyword">),<br />                </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">::</span><span class="default">CHILD_FIRST<br />            </span><span class="keyword">);<br />try {<br />    foreach( </span><span class="default">$fileSPLObjects </span><span class="keyword">as </span><span class="default">$fullFileName </span><span class="keyword">=&gt; </span><span class="default">$fileSPLObject </span><span class="keyword">) {<br />        print </span><span class="default">$fullFileName </span><span class="keyword">. </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$fileSPLObject</span><span class="keyword">-&gt;</span><span class="default">getFilename</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">;<br />    }<br />}<br />catch (</span><span class="default">UnexpectedValueException $e</span><span class="keyword">) {<br />    </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Directory [%s] contained a directory we can not recurse into"</span><span class="keyword">, </span><span class="default">$directory</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span>Note: if there is a directory contained within the directory you are searching in that you have no access to read an UnexpectedValueException will be thrown (leaving you with an empty list).<br />Note: objects returned are SPLFileObjects</span></code></div>
  </div>
 </div>
  <div class="note" id="115192">  <div class="votes">
    <div id="Vu115192">
    <a href="/manual/vote-note.php?id=115192&amp;page=class.recursiveiteratoriterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115192">
    <a href="/manual/vote-note.php?id=115192&amp;page=class.recursiveiteratoriterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115192" title="78% like this...">
    8
    </div>
  </div>
  <a href="#115192" class="name">
  <strong class="user"><em>gerry at king-foo dot be</em></strong></a><a class="genanchor" href="#115192"> &para;</a><div class="date" title="2014-06-11 12:44"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115192">
<div class="phpcode"><code><span class="html">Carefull when using iterator_to_array(). Because it flattens down your subiterators, elements with the same keys will overwrite eachother.<br /><br />For example:<br /><br /><span class="default">&lt;?php<br /><br />$iterator </span><span class="keyword">= new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(<br />    new </span><span class="default">RecursiveArrayIterator</span><span class="keyword">([<br />        [</span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">],<br />        [</span><span class="string">'baz'</span><span class="keyword">, </span><span class="string">'qux'</span><span class="keyword">]<br />    ])<br />);<br /><br />foreach (</span><span class="default">$iterator </span><span class="keyword">as </span><span class="default">$element</span><span class="keyword">) {<br />    echo </span><span class="default">$element</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This will output all 4 elements as expected:<br /><br />string(3) "foo"<br />string(3) "bar"<br />string(3) "baz"<br />string(3) "qux"<br /><br />While doing:<br /><br /><span class="default">&lt;?php<br /><br />var_dump</span><span class="keyword">(</span><span class="default">iterator_to_array</span><span class="keyword">(</span><span class="default">$iterator</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />will output an array with only the last 2 elements:<br /><br />array(2) {<br />  [0]=&gt;<br />  string(3) "baz"<br />  [1]=&gt;<br />  string(3) "qux"<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="101710">  <div class="votes">
    <div id="Vu101710">
    <a href="/manual/vote-note.php?id=101710&amp;page=class.recursiveiteratoriterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101710">
    <a href="/manual/vote-note.php?id=101710&amp;page=class.recursiveiteratoriterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101710" title="71% like this...">
    6
    </div>
  </div>
  <a href="#101710" class="name">
  <strong class="user"><em>Tom</em></strong></a><a class="genanchor" href="#101710"> &para;</a><div class="date" title="2011-01-06 01:35"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101710">
<div class="phpcode"><code><span class="html">This class operates on a tree of elements, which is build by nesting recursive iterators into one another.<br /><br />Thus you might say it is an iterator over iterators. While traversing those, the class pushes the iterators on a stack while traversing down to a leaf and removes them from the stack while going back up.</span></code></div>
  </div>
 </div>
  <div class="note" id="113031">  <div class="votes">
    <div id="Vu113031">
    <a href="/manual/vote-note.php?id=113031&amp;page=class.recursiveiteratoriterator&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113031">
    <a href="/manual/vote-note.php?id=113031&amp;page=class.recursiveiteratoriterator&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113031" title="63% like this...">
    3
    </div>
  </div>
  <a href="#113031" class="name">
  <strong class="user"><em>fengdingbo at gmail dot com</em></strong></a><a class="genanchor" href="#113031"> &para;</a><div class="date" title="2013-08-21 02:18"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113031">
<div class="phpcode"><code><span class="html">if you want traversal directory。<br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="string">"./"</span><span class="keyword">)) as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">)<br />{<br />    echo </span><span class="default">$key</span><span class="keyword">,</span><span class="string">"=&gt;"</span><span class="keyword">,</span><span class="default">$val</span><span class="keyword">,</span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.recursiveiteratoriterator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.recursiveiteratoriterator.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="class.recursivedirectoryiterator.php" title="RecursiveDirectoryIterator">RecursiveDirectoryIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.recursivefilteriterator.php" title="RecursiveFilterIterator">RecursiveFilterIterator</a>
                        </li>
                                                <li class="current">
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
