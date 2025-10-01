<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Pool - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.pool.php">
 <link rel="shorturl" href="https://www.php.net/pool">
 <link rel="alternate" href="https://www.php.net/pool" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.pthreads.php">
 <link rel="prev" href="https://www.php.net/manual/en/collectable.isgarbage.php">
 <link rel="next" href="https://www.php.net/manual/en/pool.collect.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.pool.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.pool.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.pool.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.pool.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.pool.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.pool.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.pool.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.pool.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.pool.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.pool.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.pool.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Pool class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Pool - Manual" />
<meta name="twitter:description" content="The Pool class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Pool - Manual" />
<meta itemprop="description" content="The Pool class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Pool class" />

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
        <a href="pool.collect.php">
          Pool::collect &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="collectable.isgarbage.php">
          &laquo; Collectable::isGarbage        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.pthreads.php'>pthreads</a></li>      </ul>
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
            <option value='en/class.pool.php' selected="selected">English</option>
            <option value='de/class.pool.php'>German</option>
            <option value='es/class.pool.php'>Spanish</option>
            <option value='fr/class.pool.php'>French</option>
            <option value='it/class.pool.php'>Italian</option>
            <option value='ja/class.pool.php'>Japanese</option>
            <option value='pt_BR/class.pool.php'>Brazilian Portuguese</option>
            <option value='ru/class.pool.php'>Russian</option>
            <option value='tr/class.pool.php'>Turkish</option>
            <option value='uk/class.pool.php'>Ukrainian</option>
            <option value='zh/class.pool.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.pool" class="reference">

 <h1 class="title">The Pool class</h1>
 

 <div class="partintro"><p class="verinfo">(PECL pthreads &gt;= 2.0.0)</p>


  <div class="section" id="pool.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
   A Pool is a container for, and controller of, an adjustable number of Workers.
   </p>
   <p class="para">
   Pooling provides a higher level abstraction of the Worker functionality, including the management of references in the way required by pthreads.
   </p>
  </div>


  <div class="section" id="pool.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">Pool</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.pool.php#pool.props.size">$<var class="varname">size</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">protected</span>
      <var class="varname"><a href="class.pool.php#pool.props.class">$<var class="varname">class</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">protected</span>
      <var class="varname"><a href="class.pool.php#pool.props.workers">$<var class="varname">workers</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">protected</span>
      <var class="varname"><a href="class.pool.php#pool.props.ctor">$<var class="varname">ctor</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">protected</span>
      <var class="varname"><a href="class.pool.php#pool.props.last">$<var class="varname">last</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="pool.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$size</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$class</code><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$ctor</code><span class="initializer"> = ?</span></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pool.collect.php" class="methodname">collect</a></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type Callable">Callable</a></span> <code class="parameter">$collector</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pool.resize.php" class="methodname">resize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$size</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pool.shutdown.php" class="methodname">shutdown</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pool.submit.php" class="methodname">submit</a></span>(<span class="methodparam"><span class="type"><a href="class.threaded.php" class="type Threaded">Threaded</a></span> <code class="parameter">$task</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="pool.submitTo.php" class="methodname">submitTo</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$worker</code></span>, <span class="methodparam"><span class="type"><a href="class.threaded.php" class="type Threaded">Threaded</a></span> <code class="parameter">$task</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

   }</div>


  </div>

  

  <div class="section" id="pool.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="pool.props.size"><var class="varname">size</var></dt>
     <dd>
      <p class="para">maximum number of Workers this Pool can use</p>
     </dd>
    
    
     <dt id="pool.props.class"><var class="varname">class</var></dt>
     <dd>
      <p class="para">the class of the Worker</p>
     </dd>
    
    
     <dt id="pool.props.workers"><var class="varname">workers</var></dt>
     <dd>
      <p class="para">references to Workers</p>
     </dd>
    
    
     <dt id="pool.props.ctor"><var class="varname">ctor</var></dt>
     <dd>
      <p class="para">the arguments for constructor of new Workers</p>
     </dd>
    
    
     <dt id="pool.props.last"><var class="varname">last</var></dt>
     <dd>
      <p class="para">offset in workers of the last Worker used</p>
     </dd>
    
   </dl>
  </div>



 </div>

 










































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="pool.collect.php">Pool::collect</a> — Collect references to completed tasks</li><li><a href="pool.construct.php">Pool::__construct</a> — Creates a new Pool of Workers</li><li><a href="pool.resize.php">Pool::resize</a> — Resize the Pool</li><li><a href="pool.shutdown.php">Pool::shutdown</a> — Shutdown all workers</li><li><a href="pool.submit.php">Pool::submit</a> — Submits an object for execution</li><li><a href="pool.submitTo.php">Pool::submitTo</a> — Submits a task to a specific worker for execution</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pthreads/pool.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.pool%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.pool&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.pool.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125633">  <div class="votes">
    <div id="Vu125633">
    <a href="/manual/vote-note.php?id=125633&amp;page=class.pool&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125633">
    <a href="/manual/vote-note.php?id=125633&amp;page=class.pool&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125633" title="70% like this...">
    4
    </div>
  </div>
  <a href="#125633" class="name">
  <strong class="user"><em>meadowsjared at gmail dot com</em></strong></a><a class="genanchor" href="#125633"> &para;</a><div class="date" title="2020-12-29 05:43"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125633">
<div class="phpcode"><code><span class="html">In this example, it shows how to use a pool to get an array of results, using pThreads v3.2.1 and php 7.3.23<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">TestWork </span><span class="keyword">extends </span><span class="default">Threaded </span><span class="keyword">{<br /></span><span class="comment">//updated version that works with pThreads v3.2.1 and php 7.3.23<br />    </span><span class="keyword">protected </span><span class="default">$complete</span><span class="keyword">;<br />    </span><span class="comment">//$pData is the data sent to your worker thread to do it's job.<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$pData</span><span class="keyword">) {<br />        </span><span class="comment">//transfer all the variables to local variables<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">testData </span><span class="keyword">= </span><span class="default">$pData</span><span class="keyword">;<br />    }<br />    </span><span class="comment">//This is where all of your work will be done.<br />    </span><span class="keyword">public function </span><span class="default">run</span><span class="keyword">() {<br />        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">2000000</span><span class="keyword">); </span><span class="comment">//sleep 2 seconds to simulate a large job<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">isDone</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">ExamplePool </span><span class="keyword">extends </span><span class="default">Pool </span><span class="keyword">{<br />    public </span><span class="default">$data </span><span class="keyword">= array(); </span><span class="comment">// used to return data after we're done<br />    </span><span class="keyword">private </span><span class="default">$numTasks </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="comment">// counter used to know when we're done<br />    /**<br />     * override the submit function from the parent<br />     * to keep track of our jobs<br />     */<br />    </span><span class="keyword">public function </span><span class="default">submit</span><span class="keyword">(</span><span class="default">Threaded $task</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numTasks</span><span class="keyword">++;<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">submit</span><span class="keyword">(</span><span class="default">$task</span><span class="keyword">);<br />    }<br />    </span><span class="comment">/**<br />     * used to wait until all workers are done<br />     */<br />    </span><span class="keyword">public function </span><span class="default">process</span><span class="keyword">() {<br />        </span><span class="comment">// Run this loop as long as we have<br />        // jobs in the pool<br />        </span><span class="keyword">while (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">) &lt; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numTasks</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">collect</span><span class="keyword">(function (</span><span class="default">TestWork $task</span><span class="keyword">) {<br />                </span><span class="comment">// If a task was marked as done, collect its results<br />                </span><span class="keyword">if (</span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">isDone</span><span class="keyword">()) {<br />                    </span><span class="default">$tmpObj </span><span class="keyword">= new </span><span class="default">stdclass</span><span class="keyword">();<br />                    </span><span class="default">$tmpObj</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">complete</span><span class="keyword">;<br />                    </span><span class="comment">//this is how you get your completed data back out [accessed by $pool-&gt;process()]<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[] = </span><span class="default">$tmpObj</span><span class="keyword">;<br />                }<br />                return </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">isDone</span><span class="keyword">();<br />            });<br />        }<br />        </span><span class="comment">// All jobs are done<br />        // we can shutdown the pool<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shutdown</span><span class="keyword">();<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$pool </span><span class="keyword">= new </span><span class="default">ExamplePool</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">$testData </span><span class="keyword">= </span><span class="string">'asdf'</span><span class="keyword">;<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">5</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">submit</span><span class="keyword">(new </span><span class="default">TestWork</span><span class="keyword">(</span><span class="default">$testData</span><span class="keyword">));<br />}<br /></span><span class="default">$retArr </span><span class="keyword">= </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">process</span><span class="keyword">(); </span><span class="comment">//get all of the results<br /></span><span class="keyword">echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$retArr</span><span class="keyword">); </span><span class="comment">//return the array of results (and maybe errors)<br /></span><span class="keyword">echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118996">  <div class="votes">
    <div id="Vu118996">
    <a href="/manual/vote-note.php?id=118996&amp;page=class.pool&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118996">
    <a href="/manual/vote-note.php?id=118996&amp;page=class.pool&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118996" title="60% like this...">
    6
    </div>
  </div>
  <a href="#118996" class="name">
  <strong class="user"><em>meadowsjared at gmail dot com</em></strong></a><a class="genanchor" href="#118996"> &para;</a><div class="date" title="2016-03-14 07:16"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118996">
<div class="phpcode"><code><span class="html">Please note, when using the collect function, it's important that you extend the pool class so you can keep checking for finished threads until they're all done.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">TestWork </span><span class="keyword">extends </span><span class="default">Threaded </span><span class="keyword">{<br />    protected </span><span class="default">$complete</span><span class="keyword">;<br />    </span><span class="comment">//$pData is the data sent to your worker thread to do it's job.<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$pData</span><span class="keyword">){<br />        </span><span class="comment">//transfer all the variables to local variables<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">testData </span><span class="keyword">= </span><span class="default">$pData</span><span class="keyword">;<br />    }<br />    </span><span class="comment">//This is where all of your work will be done.<br />    </span><span class="keyword">public function </span><span class="default">run</span><span class="keyword">(){<br />        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">2000000</span><span class="keyword">); </span><span class="comment">//sleep 2 seconds to simulate a large job<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">isGarbage</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">ExamplePool </span><span class="keyword">extends </span><span class="default">Pool<br /></span><span class="keyword">{<br />    public </span><span class="default">$data </span><span class="keyword">= array();<br />    public function </span><span class="default">process</span><span class="keyword">()<br />    {<br />        </span><span class="comment">// Run this loop as long as we have<br />        // jobs in the pool<br />        </span><span class="keyword">while (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">work</span><span class="keyword">)) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">collect</span><span class="keyword">(function (</span><span class="default">TestWork $task</span><span class="keyword">) {<br />                </span><span class="comment">// If a task was marked as done<br />                // collect its results<br />                </span><span class="keyword">if (</span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">isGarbage</span><span class="keyword">()) {<br />                    </span><span class="default">$tmpObj </span><span class="keyword">= new </span><span class="default">stdclass</span><span class="keyword">();<br />                    </span><span class="default">$tmpObj</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">complete</span><span class="keyword">;<br />                    </span><span class="comment">//this is how you get your completed data back out [accessed by $pool-&gt;process()]<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[] = </span><span class="default">$tmpObj</span><span class="keyword">;<br />                }<br />                return </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">isGarbage</span><span class="keyword">();<br />            });<br />        }<br />        </span><span class="comment">// All jobs are done<br />        // we can shutdown the pool<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shutdown</span><span class="keyword">();<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$pool </span><span class="keyword">= new </span><span class="default">ExamplePool</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">$testData </span><span class="keyword">= </span><span class="string">'asdf'</span><span class="keyword">;<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">5</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">submit</span><span class="keyword">(new </span><span class="default">TestWork</span><span class="keyword">(</span><span class="default">$testData</span><span class="keyword">));<br />}<br /></span><span class="default">$retArr </span><span class="keyword">= </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">process</span><span class="keyword">(); </span><span class="comment">//get all of the results<br /></span><span class="keyword">echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$retArr</span><span class="keyword">); </span><span class="comment">//return the array of results (and maybe errors)<br /></span><span class="keyword">echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116980">  <div class="votes">
    <div id="Vu116980">
    <a href="/manual/vote-note.php?id=116980&amp;page=class.pool&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116980">
    <a href="/manual/vote-note.php?id=116980&amp;page=class.pool&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116980" title="52% like this...">
    2
    </div>
  </div>
  <a href="#116980" class="name">
  <strong class="user"><em>olavk</em></strong></a><a class="genanchor" href="#116980"> &para;</a><div class="date" title="2015-03-30 01:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116980">
<div class="phpcode"><code><span class="html">Simple example with Collectable (basically Thread meant for Pool) and Pool<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">job </span><span class="keyword">extends </span><span class="default">Collectable </span><span class="keyword">{<br />  public </span><span class="default">$val</span><span class="keyword">;<br /><br />  public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">){<br />    </span><span class="comment">// init some properties<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">val </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />  }<br />  public function </span><span class="default">run</span><span class="keyword">(){<br />    </span><span class="comment">// do some work<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">val </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">val </span><span class="keyword">. </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'<a href="http://www.example.com/" rel="nofollow" target="_blank">http://www.example.com/</a>'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setGarbage</span><span class="keyword">();<br />  }<br />}<br /><br /></span><span class="comment">// At most 3 threads will work at once<br /></span><span class="default">$p </span><span class="keyword">= new </span><span class="default">Pool</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">);<br /><br /></span><span class="default">$tasks </span><span class="keyword">= array(<br />  new </span><span class="default">job</span><span class="keyword">(</span><span class="string">'0'</span><span class="keyword">),<br />  new </span><span class="default">job</span><span class="keyword">(</span><span class="string">'1'</span><span class="keyword">),<br />  new </span><span class="default">job</span><span class="keyword">(</span><span class="string">'2'</span><span class="keyword">),<br />  new </span><span class="default">job</span><span class="keyword">(</span><span class="string">'3'</span><span class="keyword">),<br />  new </span><span class="default">job</span><span class="keyword">(</span><span class="string">'4'</span><span class="keyword">),<br />  new </span><span class="default">job</span><span class="keyword">(</span><span class="string">'5'</span><span class="keyword">),<br />  new </span><span class="default">job</span><span class="keyword">(</span><span class="string">'6'</span><span class="keyword">),<br />  new </span><span class="default">job</span><span class="keyword">(</span><span class="string">'7'</span><span class="keyword">),<br />  new </span><span class="default">job</span><span class="keyword">(</span><span class="string">'8'</span><span class="keyword">),<br />  new </span><span class="default">job</span><span class="keyword">(</span><span class="string">'9'</span><span class="keyword">),<br />  new </span><span class="default">job</span><span class="keyword">(</span><span class="string">'10'</span><span class="keyword">),<br />);<br /></span><span class="comment">// Add tasks to pool queue<br /></span><span class="keyword">foreach (</span><span class="default">$tasks </span><span class="keyword">as </span><span class="default">$task</span><span class="keyword">) {<br />  </span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">submit</span><span class="keyword">(</span><span class="default">$task</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// shutdown will wait for current queue to be completed<br /></span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">shutdown</span><span class="keyword">();<br /></span><span class="comment">// garbage collection check / read results<br /></span><span class="default">$p</span><span class="keyword">-&gt;</span><span class="default">collect</span><span class="keyword">(function(</span><span class="default">$checkingTask</span><span class="keyword">){<br />  echo </span><span class="default">$checkingTask</span><span class="keyword">-&gt;</span><span class="default">val</span><span class="keyword">;<br />  return </span><span class="default">$checkingTask</span><span class="keyword">-&gt;</span><span class="default">isGarbage</span><span class="keyword">();<br />});<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115118">  <div class="votes">
    <div id="Vu115118">
    <a href="/manual/vote-note.php?id=115118&amp;page=class.pool&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115118">
    <a href="/manual/vote-note.php?id=115118&amp;page=class.pool&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115118" title="45% like this...">
    -5
    </div>
  </div>
  <a href="#115118" class="name">
  <strong class="user"><em>fajan</em></strong></a><a class="genanchor" href="#115118"> &para;</a><div class="date" title="2014-05-28 01:18"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115118">
<div class="phpcode"><code><span class="html">Example class to demonstrate usage of Pool/Worker mechanism, also to show a few tricks &amp; hints ;)<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Config </span><span class="keyword">extends </span><span class="default">Threaded</span><span class="keyword">{    </span><span class="comment">// shared global object<br />    </span><span class="keyword">protected </span><span class="default">$val</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$val2</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    protected function </span><span class="default">inc</span><span class="keyword">(){++</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">val</span><span class="keyword">;}    </span><span class="comment">// protected synchronizes by-object<br />    </span><span class="keyword">public function </span><span class="default">inc2</span><span class="keyword">(){++</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">val2</span><span class="keyword">;}    </span><span class="comment">// no synchronization<br /></span><span class="keyword">}<br />class </span><span class="default">WorkerClass </span><span class="keyword">extends </span><span class="default">Worker</span><span class="keyword">{<br />    protected static </span><span class="default">$worker_id_next </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />    protected </span><span class="default">$worker_id</span><span class="keyword">;<br />    protected </span><span class="default">$config</span><span class="keyword">;<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$config</span><span class="keyword">){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">worker_id </span><span class="keyword">= ++static::</span><span class="default">$worker_id_next</span><span class="keyword">;    </span><span class="comment">// static members are not avalable in thread but are in 'main thread'<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">config </span><span class="keyword">= </span><span class="default">$config</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">run</span><span class="keyword">(){<br />        global </span><span class="default">$config</span><span class="keyword">;<br />        </span><span class="default">$config </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">config</span><span class="keyword">;    </span><span class="comment">// NOTE: setting by reference WON'T work<br />        </span><span class="keyword">global </span><span class="default">$worker_id</span><span class="keyword">;<br />        </span><span class="default">$worker_id </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">worker_id</span><span class="keyword">;<br />        echo </span><span class="string">"working context </span><span class="keyword">{</span><span class="default">$worker_id</span><span class="keyword">}</span><span class="string"> is created!\n"</span><span class="keyword">;<br />        </span><span class="comment">//$this-&gt;say_config();    // globally synchronized function.<br />    </span><span class="keyword">}<br />    protected function </span><span class="default">say_config</span><span class="keyword">(){    </span><span class="comment">// 'protected' is synchronized by-object so WON'T work between multiple instances<br />        </span><span class="keyword">global </span><span class="default">$config</span><span class="keyword">;        </span><span class="comment">// you can use the shared $config object as synchronization source.<br />        </span><span class="default">$config</span><span class="keyword">-&gt;</span><span class="default">synchronized</span><span class="keyword">(function() use (&amp;</span><span class="default">$config</span><span class="keyword">){    </span><span class="comment">// NOTE: you can use Closures here, but if you attach a Closure to a Threaded object it will be destroyed as can't be serialized<br />            </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$config</span><span class="keyword">);<br />        });<br />    }<br />}<br />class </span><span class="default">Task </span><span class="keyword">extends </span><span class="default">Stackable</span><span class="keyword">{    </span><span class="comment">// Stackable still exists, it's just somehow dissappeared from docs (probably by mistake). See older version's docs for more details.<br />    </span><span class="keyword">protected </span><span class="default">$set</span><span class="keyword">;<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$set</span><span class="keyword">){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">set </span><span class="keyword">= </span><span class="default">$set</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">run</span><span class="keyword">(){<br />        global </span><span class="default">$worker_id</span><span class="keyword">;<br />        echo </span><span class="string">"task is running in </span><span class="keyword">{</span><span class="default">$worker_id</span><span class="keyword">}</span><span class="string">!\n"</span><span class="keyword">;<br />        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">100</span><span class="keyword">)*</span><span class="default">100</span><span class="keyword">);<br />        </span><span class="default">$config </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getConfig</span><span class="keyword">();<br />        </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$config</span><span class="keyword">-&gt;</span><span class="default">arr</span><span class="keyword">-&gt;</span><span class="default">shift</span><span class="keyword">();<br />        </span><span class="default">$config</span><span class="keyword">-&gt;</span><span class="default">arr</span><span class="keyword">[] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">;<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">){<br />            </span><span class="default">$config</span><span class="keyword">-&gt;</span><span class="default">inc</span><span class="keyword">();<br />            </span><span class="default">$config</span><span class="keyword">-&gt;</span><span class="default">inc2</span><span class="keyword">();<br />        }<br />    }<br />    public function </span><span class="default">getConfig</span><span class="keyword">(){<br />        global </span><span class="default">$config</span><span class="keyword">;    </span><span class="comment">// WorkerClass set this on thread's scope, can be reused by Tasks for additional asynch data source. (ie: connection pool or taskqueue to demultiplexer)<br />        </span><span class="keyword">return </span><span class="default">$config</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$config </span><span class="keyword">= new </span><span class="default">Config</span><span class="keyword">;<br /></span><span class="default">$config</span><span class="keyword">-&gt;</span><span class="default">arr </span><span class="keyword">= new </span><span class="default">\Threaded</span><span class="keyword">();<br /></span><span class="default">$config</span><span class="keyword">-&gt;</span><span class="default">arr</span><span class="keyword">-&gt;</span><span class="default">merge</span><span class="keyword">(array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">));<br />class </span><span class="default">PoolClass </span><span class="keyword">extends </span><span class="default">Pool</span><span class="keyword">{<br />    public function </span><span class="default">worker_list</span><span class="keyword">(){<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">workers </span><span class="keyword">!== </span><span class="default">null</span><span class="keyword">)<br />            return </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">workers</span><span class="keyword">);<br />        return </span><span class="default">null</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$pool </span><span class="keyword">= new </span><span class="default">PoolClass</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">, </span><span class="string">'WorkerClass'</span><span class="keyword">, [</span><span class="default">$config</span><span class="keyword">] );<br /></span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">worker_list</span><span class="keyword">();<br /></span><span class="comment">//$pool-&gt;submitTo(0,new Task(-10));    // submitTo DOES NOT try to create worker<br /><br /></span><span class="default">$spammed_id </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">100</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">){    </span><span class="comment">// add some jobs<br />    </span><span class="keyword">if (</span><span class="default">$spammed_id </span><span class="keyword">== -</span><span class="default">1 </span><span class="keyword">&amp;&amp; (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">worker_list</span><span class="keyword">())!= </span><span class="default">null </span><span class="keyword">&amp;&amp; @</span><span class="default">$x</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]){<br />        </span><span class="default">$spammed_id </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />        echo </span><span class="string">"spamming worker </span><span class="keyword">{</span><span class="default">$spammed_id</span><span class="keyword">}</span><span class="string"> with lots of tasks from now on\n"</span><span class="keyword">;<br />    }<br />    if (</span><span class="default">$spammed_id </span><span class="keyword">!= -</span><span class="default">1 </span><span class="keyword">&amp;&amp; (</span><span class="default">$i </span><span class="keyword">% </span><span class="default">5</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">)    </span><span class="comment">// every 5th job is routed to one worker, so it has 20% of the total jobs (with 3 workers it should do ~33%, not it has (33+20)%, so only delegate to worker if you plan to do balancing as well... )<br />        </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">submitTo</span><span class="keyword">(</span><span class="default">$spammed_id</span><span class="keyword">,new </span><span class="default">Task</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">*</span><span class="default">$i</span><span class="keyword">));    <br />    else<br />        </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">submit</span><span class="keyword">(new </span><span class="default">Task</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">*</span><span class="default">$i</span><span class="keyword">));<br />}<br /></span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">shutdown</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$config</span><span class="keyword">); </span><span class="comment">// "val" is exactly 100000, "val2" is probably a bit less<br />// also: if you disable the spammer, you'll that the order of the "arr" is random.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.pool&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.pool.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.pthreads.php">pthreads</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.pthreads.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="pthreads.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="pthreads.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="class.threaded.php" title="Threaded">Threaded</a>
                        </li>
                                                <li class="">
                            <a href="class.thread.php" title="Thread">Thread</a>
                        </li>
                                                <li class="">
                            <a href="class.worker.php" title="Worker">Worker</a>
                        </li>
                                                <li class="">
                            <a href="class.collectable.php" title="Collectable">Collectable</a>
                        </li>
                                                <li class="current">
                            <a href="class.pool.php" title="Pool">Pool</a>
                        </li>
                                                <li class="">
                            <a href="class.volatile.php" title="Volatile">Volatile</a>
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
