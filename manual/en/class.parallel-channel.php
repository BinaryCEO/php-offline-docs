<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: parallel\Channel - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.parallel-channel.php">
 <link rel="shorturl" href="https://www.php.net/parallel-channel">
 <link rel="alternate" href="https://www.php.net/parallel-channel" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.parallel.php">
 <link rel="prev" href="https://www.php.net/manual/en/parallel-future.value.php">
 <link rel="next" href="https://www.php.net/manual/en/parallel-channel.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.parallel-channel.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.parallel-channel.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.parallel-channel.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.parallel-channel.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.parallel-channel.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.parallel-channel.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.parallel-channel.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.parallel-channel.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.parallel-channel.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.parallel-channel.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.parallel-channel.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The parallel\Channel class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: parallel\Channel - Manual" />
<meta name="twitter:description" content="The parallel\Channel class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: parallel\Channel - Manual" />
<meta itemprop="description" content="The parallel\Channel class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The parallel\Channel class" />

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
        <a href="parallel-channel.construct.php">
          parallel\Channel::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="parallel-future.value.php">
          &laquo; parallel\Future::value        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.parallel.php'>parallel</a></li>      </ul>
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
            <option value='en/class.parallel-channel.php' selected="selected">English</option>
            <option value='de/class.parallel-channel.php'>German</option>
            <option value='es/class.parallel-channel.php'>Spanish</option>
            <option value='fr/class.parallel-channel.php'>French</option>
            <option value='it/class.parallel-channel.php'>Italian</option>
            <option value='ja/class.parallel-channel.php'>Japanese</option>
            <option value='pt_BR/class.parallel-channel.php'>Brazilian Portuguese</option>
            <option value='ru/class.parallel-channel.php'>Russian</option>
            <option value='tr/class.parallel-channel.php'>Turkish</option>
            <option value='uk/class.parallel-channel.php'>Ukrainian</option>
            <option value='zh/class.parallel-channel.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.parallel-channel" class="reference">

 <h1 class="title">The parallel\Channel class</h1>
 

 <div class="partintro"><p class="verinfo">(0.9.0)</p>
  <div class="section">
    <h2 class="title">Unbuffered Channels</h2>
    <p class="para">
     An unbuffered channel will block on calls to <span class="methodname"><a href="parallel-channel.send.php" class="methodname">parallel\Channel::send()</a></span> until there is a receiver, and block on calls to 
     <span class="methodname"><a href="parallel-channel.recv.php" class="methodname">parallel\Channel::recv()</a></span> until there is a sender. This means an unbuffered channel is not only a way to share data among tasks
     but also a simple method of synchronization.
    </p>
    <p class="para">
     An unbuffered channel is the fastest way to share data among tasks, requiring the least copying.
    </p>
  </div>

  <div class="section">
    <h2 class="title">Buffered Channels</h2>
    <p class="para">
     A buffered channel will not block on calls to <span class="methodname"><a href="parallel-channel.send.php" class="methodname">parallel\Channel::send()</a></span> until capacity is reached, calls to 
     <span class="methodname"><a href="parallel-channel.recv.php" class="methodname">parallel\Channel::recv()</a></span> will block until there is data in the buffer.
    </p>
  </div>

  <div class="section">
    <h2 class="title">Closures over Channels</h2>
    <p class="para">
     A powerful feature of parallel channels is that they allow the exchange of closures between tasks (and runtimes).
    </p>
    <p class="para">
     When a closure is sent over a channel the closure is buffered, it doesn&#039;t change the buffering of the channel transmitting the closure, 
     but it does effect the static scope inside the closure: The same closure sent to different runtimes, or the same runtime, 
     will not share their static scope.
    </p>
    <p class="para">
     This means that whenever a closure is executed that was transmitted by a channel, static state will be as it was when the closure was buffered.
    </p>
  </div>

  <div class="section">
   <h2 class="title">Anonymous Channels</h2>
   <p class="para">
    The anonymous channel constructor allows the programmer to avoid assigning names to every channel: parallel will generate a unique name for anonymous
    channels.
   </p>
  </div>

  <div class="section" id="parallel-channel.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">parallel\Channel</strong>
     </span>
     {</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Anonymous Constructor */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="parallel-channel.construct.php" class="methodname">__construct</a></span>()</div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-channel.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$capacity</code></span>)</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Access */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-channel.make.php" class="methodname">make</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type">Channel</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-channel.make.php" class="methodname">make</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$capacity</code></span>): <span class="type">Channel</span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-channel.open.php" class="methodname">open</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type">Channel</span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Sharing */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-channel.recv.php" class="methodname">recv</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-channel.send.php" class="methodname">send</a></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Closing */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-channel.close.php" class="methodname">close</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constant for Infinitely Buffered */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
      <var class="fieldsynopsis_varname"><var class="varname">Infinite</var></var>;</div>


   }</div>


  </div>

 </div>

 






 






 






 






 






 







<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="parallel-channel.construct.php">parallel\Channel::__construct</a> — Channel Construction</li><li><a href="parallel-channel.make.php">parallel\Channel::make</a> — Access</li><li><a href="parallel-channel.open.php">parallel\Channel::open</a> — Access</li><li><a href="parallel-channel.recv.php">parallel\Channel::recv</a> — Sharing</li><li><a href="parallel-channel.send.php">parallel\Channel::send</a> — Sharing</li><li><a href="parallel-channel.close.php">parallel\Channel::close</a> — Closing</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/parallel/parallel.channel.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.parallel-channel%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.parallel-channel&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.parallel-channel.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124623">  <div class="votes">
    <div id="Vu124623">
    <a href="/manual/vote-note.php?id=124623&amp;page=class.parallel-channel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124623">
    <a href="/manual/vote-note.php?id=124623&amp;page=class.parallel-channel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124623" title="85% like this...">
    5
    </div>
  </div>
  <a href="#124623" class="name">
  <strong class="user"><em>hdvianna</em></strong></a><a class="genanchor" href="#124623"> &para;</a><div class="date" title="2020-01-16 06:00"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124623">
<div class="phpcode"><code><span class="html">This is an example of using a channel to produce data for consumers. In this example, the producer Runtime instance will send the time in seconds in which the consumers shall sleep.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">use </span><span class="default">parallel</span><span class="keyword">\{</span><span class="default">Runtime</span><span class="keyword">, </span><span class="default">Channel</span><span class="keyword">};<br /><br /></span><span class="default">main</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">);<br /><br />function </span><span class="default">main</span><span class="keyword">(array </span><span class="default">$argv</span><span class="keyword">)<br />{<br />    if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">) !== </span><span class="default">3</span><span class="keyword">) {<br />        echo </span><span class="string">"Type: hello-parallel.php &lt;number-of-tasks&gt; &lt;maximum-time-of-sleep (in seconds)&gt;" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />        echo </span><span class="string">"Example: hello-parallel.php 5 3" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />        die;<br />    } else {<br />        </span><span class="default">$numberOfTasks </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />        </span><span class="default">$maximumTimeOfSleep </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />        </span><span class="default">$t1 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">parallelize</span><span class="keyword">(</span><span class="default">$numberOfTasks</span><span class="keyword">, </span><span class="default">$maximumTimeOfSleep</span><span class="keyword">);<br />        </span><span class="default">$endTime </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$t1</span><span class="keyword">;<br />        echo </span><span class="default">PHP_EOL</span><span class="keyword">.</span><span class="string">"Finished </span><span class="default">$numberOfTasks</span><span class="string"> task(s) in </span><span class="keyword">{</span><span class="default">$endTime</span><span class="keyword">}</span><span class="string">s"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />}<br /><br />function </span><span class="default">parallelize</span><span class="keyword">(</span><span class="default">int $numberOfTasks</span><span class="keyword">, </span><span class="default">int $maximumTimeOfSleep</span><span class="keyword">)<br />{<br />    </span><span class="default">$channel </span><span class="keyword">= new </span><span class="default">Channel</span><span class="keyword">();<br /><br />    </span><span class="default">$taskIds </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(function () use (</span><span class="default">$maximumTimeOfSleep</span><span class="keyword">) {<br />        return </span><span class="default">$id </span><span class="keyword">= </span><span class="default">uniqid</span><span class="keyword">(</span><span class="string">"task::"</span><span class="keyword">);<br />    }, </span><span class="default">range</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$numberOfTasks </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">));<br /><br />    </span><span class="default">$timesToSleep </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(function () use (</span><span class="default">$maximumTimeOfSleep</span><span class="keyword">) {<br />        return </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$maximumTimeOfSleep</span><span class="keyword">);<br />    }, </span><span class="default">$taskIds</span><span class="keyword">);<br /><br />    </span><span class="default">$producer </span><span class="keyword">= new </span><span class="default">Runtime</span><span class="keyword">();<br />    </span><span class="default">$producerFuture </span><span class="keyword">= </span><span class="default">$producer</span><span class="keyword">-&gt;</span><span class="default">run</span><span class="keyword">(function (</span><span class="default">Channel $channel</span><span class="keyword">, array </span><span class="default">$timesToSleep</span><span class="keyword">) {<br />        foreach (</span><span class="default">$timesToSleep </span><span class="keyword">as </span><span class="default">$timeToSleep</span><span class="keyword">) {<br />            </span><span class="default">$channel</span><span class="keyword">-&gt;</span><span class="default">send</span><span class="keyword">(</span><span class="default">$timeToSleep</span><span class="keyword">);<br />        }<br />    }, [</span><span class="default">$channel</span><span class="keyword">, </span><span class="default">$timesToSleep</span><span class="keyword">]);<br /><br />    </span><span class="default">$consumerFutures </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(function (</span><span class="default">string $id</span><span class="keyword">) use (</span><span class="default">$channel</span><span class="keyword">) {<br />        </span><span class="default">$runtime </span><span class="keyword">= new </span><span class="default">Runtime</span><span class="keyword">();<br />        return </span><span class="default">$runtime</span><span class="keyword">-&gt;</span><span class="default">run</span><span class="keyword">(function (</span><span class="default">string $id</span><span class="keyword">, </span><span class="default">Channel $channel</span><span class="keyword">) {<br />            </span><span class="default">$timeToSleep </span><span class="keyword">= </span><span class="default">$channel</span><span class="keyword">-&gt;</span><span class="default">recv</span><span class="keyword">();<br />            echo </span><span class="string">"Hello from </span><span class="default">$id</span><span class="string">. I will sleep for </span><span class="default">$timeToSleep</span><span class="string"> second(s)."</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />            </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$timeToSleep</span><span class="keyword">);<br />            echo </span><span class="string">"</span><span class="default">$id</span><span class="string"> slept for </span><span class="default">$timeToSleep</span><span class="string"> second(s)."</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />            return </span><span class="default">$timeToSleep</span><span class="keyword">;<br />        }, [</span><span class="default">$id</span><span class="keyword">, </span><span class="default">$channel</span><span class="keyword">]);<br />    }, </span><span class="default">$taskIds</span><span class="keyword">);<br /><br />    </span><span class="default">wait</span><span class="keyword">(</span><span class="default">$consumerFutures</span><span class="keyword">);<br />    </span><span class="default">wait</span><span class="keyword">([</span><span class="default">$producerFuture</span><span class="keyword">]);<br />}<br /><br />function </span><span class="default">wait</span><span class="keyword">(array </span><span class="default">$futures</span><span class="keyword">)<br />{<br />    return </span><span class="default">array_map</span><span class="keyword">(function (</span><span class="default">$future</span><span class="keyword">) {<br />        return </span><span class="default">$future</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">();<br />    }, </span><span class="default">$futures</span><span class="keyword">);<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124208">  <div class="votes">
    <div id="Vu124208">
    <a href="/manual/vote-note.php?id=124208&amp;page=class.parallel-channel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124208">
    <a href="/manual/vote-note.php?id=124208&amp;page=class.parallel-channel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124208" title="62% like this...">
    2
    </div>
  </div>
  <a href="#124208" class="name">
  <strong class="user"><em>rustysun</em></strong></a><a class="genanchor" href="#124208"> &para;</a><div class="date" title="2019-09-18 10:28"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124208">
<div class="phpcode"><code><span class="html">an example used unbuffered channel.<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">use </span><span class="default">parallel</span><span class="keyword">\{</span><span class="default">Channel</span><span class="keyword">,</span><span class="default">Runtime</span><span class="keyword">};<br /><br /></span><span class="default">$sum</span><span class="keyword">=function(array </span><span class="default">$a</span><span class="keyword">, </span><span class="default">Channel $ch</span><span class="keyword">) {<br />    </span><span class="default">$sum</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    foreach (</span><span class="default">$a </span><span class="keyword">as </span><span class="default">$v</span><span class="keyword">) {<br />        </span><span class="default">$sum</span><span class="keyword">+=</span><span class="default">$v</span><span class="keyword">;<br />    }<br />    </span><span class="default">$ch</span><span class="keyword">-&gt;</span><span class="default">send</span><span class="keyword">(</span><span class="default">$sum</span><span class="keyword">);<br />};<br />try {<br />    </span><span class="default">$a</span><span class="keyword">=[</span><span class="default">7</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">];<br />    </span><span class="comment">//unbuffered channel<br />    </span><span class="default">$runtime</span><span class="keyword">=new </span><span class="default">Runtime</span><span class="keyword">;<br />    </span><span class="default">$ch2</span><span class="keyword">=new </span><span class="default">Channel</span><span class="keyword">;<br />    </span><span class="default">$runtime</span><span class="keyword">-&gt;</span><span class="default">run</span><span class="keyword">(</span><span class="default">$sum</span><span class="keyword">, [</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$num</span><span class="keyword">), </span><span class="default">$ch2</span><span class="keyword">]);<br />    </span><span class="default">$runtime</span><span class="keyword">-&gt;</span><span class="default">run</span><span class="keyword">(</span><span class="default">$sum</span><span class="keyword">, [</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$num</span><span class="keyword">), </span><span class="default">$ch2</span><span class="keyword">]);<br />    </span><span class="comment">//receive from channel<br />    </span><span class="default">$x</span><span class="keyword">=</span><span class="default">$ch2</span><span class="keyword">-&gt;</span><span class="default">recv</span><span class="keyword">();<br />    </span><span class="default">$y</span><span class="keyword">=</span><span class="default">$ch2</span><span class="keyword">-&gt;</span><span class="default">recv</span><span class="keyword">();<br />    </span><span class="default">$ch2</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />    echo </span><span class="string">"\nch2:"</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="string">"\t"</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="string">"\t"</span><span class="keyword">, </span><span class="default">$x </span><span class="keyword">+ </span><span class="default">$y</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">;<br />} catch(</span><span class="default">Error $err</span><span class="keyword">) {<br />    echo </span><span class="string">"\nError:"</span><span class="keyword">, </span><span class="default">$err</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />} catch(</span><span class="default">Exception $e</span><span class="keyword">) {<br />    echo </span><span class="string">"\nException:"</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">//output<br />//ch2:18  23      41</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126409">  <div class="votes">
    <div id="Vu126409">
    <a href="/manual/vote-note.php?id=126409&amp;page=class.parallel-channel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126409">
    <a href="/manual/vote-note.php?id=126409&amp;page=class.parallel-channel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126409" title="100% like this...">
    2
    </div>
  </div>
  <a href="#126409" class="name">
  <strong class="user"><em>gam6itko</em></strong></a><a class="genanchor" href="#126409"> &para;</a><div class="date" title="2021-09-10 01:59"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126409">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// the very weird way to calculate factorial ^_^<br />// we create one thread and synching them with buffered channel<br />// at fact only one thread is executing at the time <br /><br /></span><span class="keyword">use </span><span class="default">parallel</span><span class="keyword">\{</span><span class="default">Channel</span><span class="keyword">, </span><span class="default">Future</span><span class="keyword">, </span><span class="default">Runtime</span><span class="keyword">};<br /><br />for (</span><span class="default">$n </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$n </span><span class="keyword">&lt;= </span><span class="default">10</span><span class="keyword">; </span><span class="default">$n</span><span class="keyword">++) {<br />    echo </span><span class="string">"!</span><span class="default">$n</span><span class="string"> = " </span><span class="keyword">. </span><span class="default">factorial</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br /> * Creates $n threads.<br /> */<br /></span><span class="keyword">function </span><span class="default">factorial</span><span class="keyword">(</span><span class="default">int $n</span><span class="keyword">): </span><span class="default">int<br /></span><span class="keyword">{<br />    </span><span class="comment">// buffered channel - using for sync threads ^_^<br />    </span><span class="default">$channel </span><span class="keyword">= new </span><span class="default">Channel</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$futureList </span><span class="keyword">= [];<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$n</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$runtime </span><span class="keyword">= new </span><span class="default">Runtime</span><span class="keyword">();<br />        </span><span class="default">$futureList</span><span class="keyword">[] = </span><span class="default">$runtime</span><span class="keyword">-&gt;</span><span class="default">run</span><span class="keyword">(<br />            static function (</span><span class="default">Channel $channel</span><span class="keyword">, </span><span class="default">$multiplier</span><span class="keyword">): </span><span class="default">void </span><span class="keyword">{<br />                </span><span class="default">$f </span><span class="keyword">= </span><span class="default">$channel</span><span class="keyword">-&gt;</span><span class="default">recv</span><span class="keyword">();<br />                </span><span class="default">$channel</span><span class="keyword">-&gt;</span><span class="default">send</span><span class="keyword">(</span><span class="default">$f </span><span class="keyword">* </span><span class="default">$multiplier</span><span class="keyword">);<br />            },<br />            [</span><span class="default">$channel</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">]<br />        );<br />    }<br /><br />    </span><span class="default">$channel</span><span class="keyword">-&gt;</span><span class="default">send</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /><br />    </span><span class="comment">// waiting until all threads are done<br />    </span><span class="keyword">do {<br />        </span><span class="default">$allDone </span><span class="keyword">= </span><span class="default">array_reduce</span><span class="keyword">(<br />            </span><span class="default">$futureList</span><span class="keyword">,<br />            function (</span><span class="default">bool $c</span><span class="keyword">, </span><span class="default">Future $future</span><span class="keyword">): </span><span class="default">bool </span><span class="keyword">{<br /><br />                return </span><span class="default">$c </span><span class="keyword">&amp;&amp; </span><span class="default">$future</span><span class="keyword">-&gt;</span><span class="default">done</span><span class="keyword">();<br />            },<br />            </span><span class="default">true<br />        </span><span class="keyword">);<br />    } while (</span><span class="default">false </span><span class="keyword">=== </span><span class="default">$allDone</span><span class="keyword">);<br /><br />    return </span><span class="default">$channel</span><span class="keyword">-&gt;</span><span class="default">recv</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">// output:<br />// !0 = 1<br />// !1 = 1<br />// !2 = 2<br />// !3 = 6<br />// !4 = 24<br />// !5 = 120<br />// !6 = 720<br />// !7 = 5040<br />// !8 = 40320<br />// !9 = 362880<br />// !10 = 3628800</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124204">  <div class="votes">
    <div id="Vu124204">
    <a href="/manual/vote-note.php?id=124204&amp;page=class.parallel-channel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124204">
    <a href="/manual/vote-note.php?id=124204&amp;page=class.parallel-channel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124204" title="100% like this...">
    1
    </div>
  </div>
  <a href="#124204" class="name">
  <strong class="user"><em>rustysun</em></strong></a><a class="genanchor" href="#124204"> &para;</a><div class="date" title="2019-09-18 04:08"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124204">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">parallel\Channel</span><span class="keyword">;<br /><br />function </span><span class="default">sum</span><span class="keyword">(array </span><span class="default">$a</span><span class="keyword">, </span><span class="default">Channel $ch</span><span class="keyword">) {<br />    </span><span class="default">$sum</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    foreach (</span><span class="default">$a </span><span class="keyword">as </span><span class="default">$v</span><span class="keyword">) {<br />        </span><span class="default">$sum</span><span class="keyword">+=</span><span class="default">$v</span><span class="keyword">;<br />    }<br />    </span><span class="default">$ch</span><span class="keyword">-&gt;</span><span class="default">send</span><span class="keyword">(</span><span class="default">$sum</span><span class="keyword">);<br />}<br /><br />try {<br />    </span><span class="default">$a</span><span class="keyword">=[</span><span class="default">7</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">];<br />    </span><span class="default">$ch1</span><span class="keyword">=</span><span class="default">Channel</span><span class="keyword">::</span><span class="default">make</span><span class="keyword">(</span><span class="string">'sum'</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />    </span><span class="default">$ch2</span><span class="keyword">=new </span><span class="default">Channel</span><span class="keyword">;<br />    </span><span class="default">$num</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">;<br />    </span><span class="default">sum</span><span class="keyword">(</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$num</span><span class="keyword">), </span><span class="default">$ch1</span><span class="keyword">);<br />    </span><span class="default">sum</span><span class="keyword">(</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$num</span><span class="keyword">), </span><span class="default">$ch1</span><span class="keyword">);<br /><br />    </span><span class="comment">//receive from channel<br />    </span><span class="default">$x</span><span class="keyword">=</span><span class="default">$ch1</span><span class="keyword">-&gt;</span><span class="default">recv</span><span class="keyword">();<br />    </span><span class="default">$y</span><span class="keyword">=</span><span class="default">$ch1</span><span class="keyword">-&gt;</span><span class="default">recv</span><span class="keyword">();<br />    </span><span class="default">$ch1</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />    echo </span><span class="string">"\nch1:"</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="string">"\t"</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="string">"\t"</span><span class="keyword">, </span><span class="default">$x </span><span class="keyword">+ </span><span class="default">$y</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">;<br />} catch(</span><span class="default">Error $err</span><span class="keyword">) {<br />    echo </span><span class="string">"\nError:"</span><span class="keyword">, </span><span class="default">$err</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />} catch(</span><span class="default">Exception $e</span><span class="keyword">) {<br />    echo </span><span class="string">"\nException:"</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129711">  <div class="votes">
    <div id="Vu129711">
    <a href="/manual/vote-note.php?id=129711&amp;page=class.parallel-channel&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129711">
    <a href="/manual/vote-note.php?id=129711&amp;page=class.parallel-channel&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129711" title="no votes...">
    0
    </div>
  </div>
  <a href="#129711" class="name">
  <strong class="user"><em>thierry at pielo dot net</em></strong></a><a class="genanchor" href="#129711"> &para;</a><div class="date" title="2024-08-19 07:40"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129711">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Bzz reloaded!<br /> * Run two simple tasks in parallel and synchronize them with a channel<br /> * <br /> * parallel\Channel(int $capacity): Buffered channel<br /> * Creates a buffered channel for communication between tasks<br /> * @ref <a href="https://www.php.net/manual/en/class.parallel-channel.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/class.parallel-channel.php</a><br /> */<br /><br /> </span><span class="keyword">echo </span><span class="string">"zzz... " </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="comment">// Create new buffered channel<br /></span><span class="default">$channel </span><span class="keyword">= new </span><span class="default">\parallel\Channel</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br /><br /></span><span class="default">\parallel\run</span><span class="keyword">(<br />    function(</span><span class="default">$channel</span><span class="keyword">) {<br />        </span><span class="default">$snaps_count </span><span class="keyword">= </span><span class="default">rand </span><span class="keyword">(</span><span class="default">8</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">);<br />        echo </span><span class="string">"Number of snaps: </span><span class="default">$snaps_count</span><span class="string">" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />        for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$snaps_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />            </span><span class="default">$other_sleep_time </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);<br />            </span><span class="default">$my_sleep_time </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />            echo </span><span class="string">"Send sleep time to buffer" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />            </span><span class="default">$start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />            </span><span class="default">$channel</span><span class="keyword">-&gt;</span><span class="default">send</span><span class="keyword">(</span><span class="default">$other_sleep_time</span><span class="keyword">);<br />            </span><span class="default">$wait_time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$start</span><span class="keyword">;<br />            if (</span><span class="default">$wait_time </span><span class="keyword">&gt; </span><span class="default">.1</span><span class="keyword">) {<br />                echo </span><span class="string">"Buffer was full. I waited " </span><span class="keyword">. </span><span class="default">round</span><span class="keyword">(</span><span class="default">$wait_time</span><span class="keyword">) . </span><span class="string">"s" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />            }<br />            echo </span><span class="string">"I sleep for </span><span class="keyword">{</span><span class="default">$my_sleep_time</span><span class="keyword">}</span><span class="string">s" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />            </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$my_sleep_time</span><span class="keyword">);<br />        }<br />        echo </span><span class="string">"I finished sleeping. Closing channel" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />        </span><span class="default">$channel</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />    },<br />    [</span><span class="default">$channel</span><span class="keyword">]<br />);<br /><br /></span><span class="default">\parallel\run</span><span class="keyword">(<br />    function(</span><span class="default">$channel</span><span class="keyword">) {<br />        try {<br />            while(</span><span class="default">true</span><span class="keyword">) {<br />                </span><span class="default">$my_sleep_time </span><span class="keyword">= </span><span class="default">$channel</span><span class="keyword">-&gt;</span><span class="default">recv</span><span class="keyword">();<br />                echo </span><span class="string">"Other sleeps for </span><span class="keyword">{</span><span class="default">$my_sleep_time</span><span class="keyword">}</span><span class="string">s" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />                </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$my_sleep_time</span><span class="keyword">);<br />            }<br />        } catch(</span><span class="default">\parallel\Channel\Error\Closed $e</span><span class="keyword">) {<br />            echo </span><span class="string">"Channel is closed. Other die."</span><span class="keyword">;<br />            die;<br />        }<br />    },<br />    [</span><span class="default">$channel</span><span class="keyword">]<br />);</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.parallel-channel&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.parallel-channel.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.parallel.php">parallel</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.parallel.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="parallel.setup.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="philosophy.parallel.php" title="Philosophy">Philosophy</a>
                        </li>
                                                <li class="">
                            <a href="functional.parallel.php" title="Functional API">Functional API</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-runtime.php" title="parallel\Runtime">parallel\Runtime</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-future.php" title="parallel\Future">parallel\Future</a>
                        </li>
                                                <li class="current">
                            <a href="class.parallel-channel.php" title="parallel\Channel">parallel\Channel</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-events.php" title="parallel\Events">parallel\Events</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-events-input.php" title="parallel\Events\Input">parallel\Events\Input</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-events-event.php" title="parallel\Events\Event">parallel\Events\Event</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-events-event-type.php" title="parallel\Events\Event\Type">parallel\Events\Event\Type</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-sync.php" title="parallel\Sync">parallel\Sync</a>
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
