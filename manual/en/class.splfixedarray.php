<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SplFixedArray - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.splfixedarray.php">
 <link rel="shorturl" href="https://www.php.net/splfixedarray">
 <link rel="alternate" href="https://www.php.net/splfixedarray" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/spl.datastructures.php">
 <link rel="prev" href="https://www.php.net/manual/en/splpriorityqueue.valid.php">
 <link rel="next" href="https://www.php.net/manual/en/splfixedarray.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.splfixedarray.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.splfixedarray.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.splfixedarray.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.splfixedarray.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.splfixedarray.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.splfixedarray.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.splfixedarray.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.splfixedarray.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.splfixedarray.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.splfixedarray.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.splfixedarray.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SplFixedArray class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SplFixedArray - Manual" />
<meta name="twitter:description" content="The SplFixedArray class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SplFixedArray - Manual" />
<meta itemprop="description" content="The SplFixedArray class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SplFixedArray class" />

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
        <a href="splfixedarray.construct.php">
          SplFixedArray::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="splpriorityqueue.valid.php">
          &laquo; SplPriorityQueue::valid        </a>
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
            <option value='en/class.splfixedarray.php' selected="selected">English</option>
            <option value='de/class.splfixedarray.php'>German</option>
            <option value='es/class.splfixedarray.php'>Spanish</option>
            <option value='fr/class.splfixedarray.php'>French</option>
            <option value='it/class.splfixedarray.php'>Italian</option>
            <option value='ja/class.splfixedarray.php'>Japanese</option>
            <option value='pt_BR/class.splfixedarray.php'>Brazilian Portuguese</option>
            <option value='ru/class.splfixedarray.php'>Russian</option>
            <option value='tr/class.splfixedarray.php'>Turkish</option>
            <option value='uk/class.splfixedarray.php'>Ukrainian</option>
            <option value='zh/class.splfixedarray.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.splfixedarray" class="reference">
 <h1 class="title">The SplFixedArray class</h1>
 
 
 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p>
 

  <div class="section" id="splfixedarray.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The SplFixedArray class provides the main functionalities of array. The 
    main difference between a SplFixedArray and a normal PHP array is that 
    the SplFixedArray must be resized manually and allows only integers within 
    the range as indexes. The advantage is that it uses less memory than
    a standard <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
   </p>
  </div>

 
  <div class="section" id="splfixedarray.synopsis">
   <h2 class="title">Class synopsis</h2>
 

   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">SplFixedArray</strong></strong>
    

    
     <span class="modifier">implements</span>
      <a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a>,

     <a href="class.arrayaccess.php" class="interfacename">ArrayAccess</a>,

     <a href="class.countable.php" class="interfacename">Countable</a>,

     <a href="class.jsonserializable.php" class="interfacename">JsonSerializable</a> {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$size</code><span class="initializer"> = 0</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.count.php" class="methodname">count</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.current.php" class="methodname">current</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="splfixedarray.fromarray.php" class="methodname">fromArray</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$preserveKeys</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="class.splfixedarray.php" class="type SplFixedArray">SplFixedArray</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.getiterator.php" class="methodname">getIterator</a></span>(): <span class="type"><a href="class.iterator.php" class="type Iterator">Iterator</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.getsize.php" class="methodname">getSize</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.jsonserialize.php" class="methodname">jsonSerialize</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.key.php" class="methodname">key</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.next.php" class="methodname">next</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.offsetexists.php" class="methodname">offsetExists</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.offsetget.php" class="methodname">offsetGet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.offsetset.php" class="methodname">offsetSet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.offsetunset.php" class="methodname">offsetUnset</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.rewind.php" class="methodname">rewind</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.serialize.php" class="methodname">__serialize</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.setsize.php" class="methodname">setSize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$size</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.toarray.php" class="methodname">toArray</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.unserialize.php" class="methodname">__unserialize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$data</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.valid.php" class="methodname">valid</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="attribute"><a href="class.deprecated.php">#[\Deprecated]</a> </span><br>
   <span class="modifier">public</span> <span class="methodname"><a href="splfixedarray.wakeup.php" class="methodname">__wakeup</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

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
       <td>8.2.0</td>
       <td>
        The <span class="methodname"><a href="splfixedarray.serialize.php" class="methodname">SplFixedArray::__serialize()</a></span> and
        <span class="methodname"><a href="splfixedarray.unserialize.php" class="methodname">SplFixedArray::__unserialize()</a></span>
        magic methods have been added to <span class="classname"><strong class="classname">SplFixedArray</strong></span>.
       </td>
      </tr>

      <tr>
       <td>8.1.0</td>
       <td>
        <span class="classname"><strong class="classname">SplFixedArray</strong></span> implements
        <span class="interfacename"><a href="class.jsonserializable.php" class="interfacename">JsonSerializable</a></span> now.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <span class="classname"><strong class="classname">SplFixedArray</strong></span> implements
        <span class="interfacename"><a href="class.iteratoraggregate.php" class="interfacename">IteratorAggregate</a></span> now.
        Previously, <span class="interfacename"><a href="class.iterator.php" class="interfacename">Iterator</a></span> was implemented instead.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>


  <div class="section" id="splfixedarray.examples">
   <h2 class="title">Examples</h2>
   <p class="para">
    <div class="example" id="example-3849">
     <p><strong>Example #1 <span class="classname"><strong class="classname">SplFixedArray</strong></span> usage example</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Initialize the array with a fixed length<br /></span><span style="color: #0000BB">$array </span><span style="color: #007700">= new </span><span style="color: #0000BB">SplFixedArray</span><span style="color: #007700">(</span><span style="color: #0000BB">5</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] = </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">] = </span><span style="color: #DD0000">"foo"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]); </span><span style="color: #FF8000">// NULL<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]); </span><span style="color: #FF8000">// int(2)<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #DD0000">"4"</span><span style="color: #007700">]); </span><span style="color: #FF8000">// string(3) "foo"<br /><br />// Increase the size of the array to 10<br /></span><span style="color: #0000BB">$array</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setSize</span><span style="color: #007700">(</span><span style="color: #0000BB">10</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">9</span><span style="color: #007700">] = </span><span style="color: #DD0000">"asdf"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Shrink the array to a size of 2<br /></span><span style="color: #0000BB">$array</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setSize</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The following lines throw a RuntimeException: Index invalid or out of range<br /></span><span style="color: #007700">try {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #DD0000">"non-numeric"</span><span style="color: #007700">]);<br />} catch(</span><span style="color: #0000BB">RuntimeException $re</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"RuntimeException: "</span><span style="color: #007700">.</span><span style="color: #0000BB">$re</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br />try {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">[-</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />} catch(</span><span style="color: #0000BB">RuntimeException $re</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"RuntimeException: "</span><span style="color: #007700">.</span><span style="color: #0000BB">$re</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br />try {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">]);<br />} catch(</span><span style="color: #0000BB">RuntimeException $re</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"RuntimeException: "</span><span style="color: #007700">.</span><span style="color: #0000BB">$re</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
NULL
int(2)
string(3) &quot;foo&quot;
RuntimeException: Index invalid or out of range
RuntimeException: Index invalid or out of range
RuntimeException: Index invalid or out of range
</pre></div>
     </div>
    </div>
   </p>
  </div>

 

 
 </div>
 
 






































































































 
<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="splfixedarray.construct.php">SplFixedArray::__construct</a> — Constructs a new fixed array</li><li><a href="splfixedarray.count.php">SplFixedArray::count</a> — Returns the size of the array</li><li><a href="splfixedarray.current.php">SplFixedArray::current</a> — Return current array entry</li><li><a href="splfixedarray.fromarray.php">SplFixedArray::fromArray</a> — Import a PHP array in a SplFixedArray instance</li><li><a href="splfixedarray.getiterator.php">SplFixedArray::getIterator</a> — Retrieve the iterator to go through the array</li><li><a href="splfixedarray.getsize.php">SplFixedArray::getSize</a> — Gets the size of the array</li><li><a href="splfixedarray.jsonserialize.php">SplFixedArray::jsonSerialize</a> — Returns a representation that can be converted to JSON</li><li><a href="splfixedarray.key.php">SplFixedArray::key</a> — Return current array index</li><li><a href="splfixedarray.next.php">SplFixedArray::next</a> — Move to next entry</li><li><a href="splfixedarray.offsetexists.php">SplFixedArray::offsetExists</a> — Returns whether the requested index exists</li><li><a href="splfixedarray.offsetget.php">SplFixedArray::offsetGet</a> — Returns the value at the specified index</li><li><a href="splfixedarray.offsetset.php">SplFixedArray::offsetSet</a> — Sets a new value at a specified index</li><li><a href="splfixedarray.offsetunset.php">SplFixedArray::offsetUnset</a> — Unsets the value at the specified $index</li><li><a href="splfixedarray.rewind.php">SplFixedArray::rewind</a> — Rewind iterator back to the start</li><li><a href="splfixedarray.serialize.php">SplFixedArray::__serialize</a> — Serializes the SplFixedArray object</li><li><a href="splfixedarray.setsize.php">SplFixedArray::setSize</a> — Change the size of an array</li><li><a href="splfixedarray.toarray.php">SplFixedArray::toArray</a> — Returns a PHP array from the fixed array</li><li><a href="splfixedarray.unserialize.php">SplFixedArray::__unserialize</a> — Deserializes the data parameter into an SplFixedArray object</li><li><a href="splfixedarray.valid.php">SplFixedArray::valid</a> — Check whether the array contains more elements</li><li><a href="splfixedarray.wakeup.php">SplFixedArray::__wakeup</a> — Reinitialises the array after being unserialised</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/spl/splfixedarray.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.splfixedarray%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.splfixedarray&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.splfixedarray.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110612">  <div class="votes">
    <div id="Vu110612">
    <a href="/manual/vote-note.php?id=110612&amp;page=class.splfixedarray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110612">
    <a href="/manual/vote-note.php?id=110612&amp;page=class.splfixedarray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110612" title="86% like this...">
    53
    </div>
  </div>
  <a href="#110612" class="name">
  <strong class="user"><em>artaxerxes</em></strong></a><a class="genanchor" href="#110612"> &para;</a><div class="date" title="2012-11-13 04:41"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110612">
<div class="phpcode"><code><span class="html">As the documentation says, SplFixedArray is meant to be *faster* than array. Do not blindly believe other people's benchmarks, and beextra careful with the user comments on php.net. For instance, nairbv's benchmark code is completely wrong. Among other errors, it intends to increase the size of the arrays, but always initialize a 20 elements SplFixedArray.<br /><br />On a PHP 5.4 64 bits linux server, I found SplFixedArray to be always faster than array().<br />* small data (1,000):<br />    * write: SplFixedArray is 15 % faster<br />    * read:  SplFixedArray is  5 % faster<br />* larger data (512,000):<br />    * write: SplFixedArray is 33 % faster<br />    * read:  SplFixedArray is 10 % faster</span></code></div>
  </div>
 </div>
  <div class="note" id="124555">  <div class="votes">
    <div id="Vu124555">
    <a href="/manual/vote-note.php?id=124555&amp;page=class.splfixedarray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124555">
    <a href="/manual/vote-note.php?id=124555&amp;page=class.splfixedarray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124555" title="100% like this...">
    9
    </div>
  </div>
  <a href="#124555" class="name">
  <strong class="user"><em>herhor67 at interia dot pl</em></strong></a><a class="genanchor" href="#124555"> &para;</a><div class="date" title="2019-12-31 06:23"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124555">
<div class="phpcode"><code><span class="html">Memory usage for arrays of 1132766 ints (data derived from some 1kx1k img):<br />Regular:  76453160B (67.5B/int)<br />SplFixed: 18898744B (16.7B/int)<br /><br />In my application, SFA uses 75% less RAM, which is a life-saver.<br /><br />Speed comparison:<br />Regular: 449ms<br />SplFixed (resized before every element): 791ms<br />SplFixed (fully preallocated): 392ms<br />SplFixed (preall-d to 1M and then resized): 547ms<br /><br />Pros and cons:<br />+ much more efficient RAM-wise<br />+ a bit faster if max size is known<br />~ a bit slower if max size is only approximated<br />- much slower if max size is not known<br />- cannot be used with most array functions<br /><br />To sum up:<br />SplFixedArray is a very good choice for storing giant amount of data, though only as long as you at least roughly know the size and can work without array functions.</span></code></div>
  </div>
 </div>
  <div class="note" id="92214">  <div class="votes">
    <div id="Vu92214">
    <a href="/manual/vote-note.php?id=92214&amp;page=class.splfixedarray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92214">
    <a href="/manual/vote-note.php?id=92214&amp;page=class.splfixedarray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92214" title="82% like this...">
    22
    </div>
  </div>
  <a href="#92214" class="name">
  <strong class="user"><em>chrisstocktonaz at gmail dot com</em></strong></a><a class="genanchor" href="#92214"> &para;</a><div class="date" title="2009-07-14 11:07"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92214">
<div class="phpcode"><code><span class="html">Note, that this is considerably faster and should be used when the size of the array is known. Here are some very basic bench marks:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">for(</span><span class="default">$size </span><span class="keyword">= </span><span class="default">1000</span><span class="keyword">; </span><span class="default">$size </span><span class="keyword">&lt; </span><span class="default">50000000</span><span class="keyword">; </span><span class="default">$size </span><span class="keyword">*= </span><span class="default">2</span><span class="keyword">) {
<br />    echo </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="string">"Testing size: </span><span class="default">$size</span><span class="string">" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;
<br />    for(</span><span class="default">$s </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">), </span><span class="default">$container </span><span class="keyword">= Array(), </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$size</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) </span><span class="default">$container</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">NULL</span><span class="keyword">;
<br />    echo </span><span class="string">"Array(): " </span><span class="keyword">. (</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$s</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;
<br />
<br />    for(</span><span class="default">$s </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">), </span><span class="default">$container </span><span class="keyword">= new </span><span class="default">SplFixedArray</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">), </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$size</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) </span><span class="default">$container</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">NULL</span><span class="keyword">;
<br />    echo </span><span class="string">"SplArray(): " </span><span class="keyword">. (</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$s</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />OUTPUT
<br />Testing size: 1000
<br />Array(): 0.00046396255493164
<br />SplArray(): 0.00023293495178223
<br />
<br />Testing size: 2000
<br />Array(): 0.00057101249694824
<br />SplArray(): 0.0003058910369873
<br />
<br />Testing size: 4000
<br />Array(): 0.0015869140625
<br />SplArray(): 0.00086307525634766
<br />
<br />Testing size: 8000
<br />Array(): 0.0024251937866211
<br />SplArray(): 0.00211501121521
<br />
<br />Testing size: 16000
<br />Array(): 0.0057680606842041
<br />SplArray(): 0.0041120052337646
<br />
<br />Testing size: 32000
<br />Array(): 0.011334896087646
<br />SplArray(): 0.007631778717041
<br />
<br />Testing size: 64000
<br />Array(): 0.021990060806274
<br />SplArray(): 0.013560056686401
<br />
<br />Testing size: 128000
<br />Array(): 0.053267002105713
<br />SplArray(): 0.030976057052612
<br />
<br />Testing size: 256000
<br />Array(): 0.10280108451843
<br />SplArray(): 0.056283950805664
<br />
<br />Testing size: 512000
<br />Array(): 0.20657992362976
<br />SplArray(): 0.11510300636292
<br />
<br />Testing size: 1024000
<br />Array(): 0.4138810634613
<br />SplArray(): 0.21826505661011
<br />
<br />Testing size: 2048000
<br />Array(): 0.85640096664429
<br />SplArray(): 0.46247816085815
<br />
<br />Testing size: 4096000
<br />Array(): 1.7242450714111
<br />SplArray(): 0.95304894447327
<br />
<br />Testing size: 8192000
<br />Array(): 3.448086977005
<br />SplArray(): 1.96746301651</span></code></div>
  </div>
 </div>
  <div class="note" id="100916">  <div class="votes">
    <div id="Vu100916">
    <a href="/manual/vote-note.php?id=100916&amp;page=class.splfixedarray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100916">
    <a href="/manual/vote-note.php?id=100916&amp;page=class.splfixedarray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100916" title="68% like this...">
    12
    </div>
  </div>
  <a href="#100916" class="name">
  <strong class="user"><em>alex dot andrienko at gmail dot com</em></strong></a><a class="genanchor" href="#100916"> &para;</a><div class="date" title="2010-11-15 02:13"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100916">
<div class="phpcode"><code><span class="html">Memory footprint of splFixedArray is about 37% of a regular "array" of the same size. <br />I was hoping for more, but that's also significant, and that's where you should expect to see difference, not in "performance".</span></code></div>
  </div>
 </div>
  <div class="note" id="122240">  <div class="votes">
    <div id="Vu122240">
    <a href="/manual/vote-note.php?id=122240&amp;page=class.splfixedarray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122240">
    <a href="/manual/vote-note.php?id=122240&amp;page=class.splfixedarray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122240" title="66% like this...">
    4
    </div>
  </div>
  <a href="#122240" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#122240"> &para;</a><div class="date" title="2018-01-08 01:04"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122240">
<div class="phpcode"><code><span class="html">getSize() and count() return the same value</span></code></div>
  </div>
 </div>
  <div class="note" id="128211">  <div class="votes">
    <div id="Vu128211">
    <a href="/manual/vote-note.php?id=128211&amp;page=class.splfixedarray&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128211">
    <a href="/manual/vote-note.php?id=128211&amp;page=class.splfixedarray&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128211" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128211" class="name">
  <strong class="user"><em>CK</em></strong></a><a class="genanchor" href="#128211"> &para;</a><div class="date" title="2023-02-12 01:51"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128211">
<div class="phpcode"><code><span class="html">Be warned that SplFixedArray does not provide all of the main functionalities of array. For example, it does not support array_slice. SplFixedArray should be far more efficient at supporting such array operations than normal arrays (since it should be simply a contiguous slice). Check that all your main array functions are really supported before trying to use SplFixedArray instead of array. With JIT in PHP8, some loops to polyfill these are perhaps now realistic, but still not as fast as native functions.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.splfixedarray&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.splfixedarray.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="class.splpriorityqueue.php" title="SplPriorityQueue">SplPriorityQueue</a>
                        </li>
                                                <li class="current">
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
