<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: parallel\Events - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.parallel-events.php">
 <link rel="shorturl" href="https://www.php.net/parallel-events">
 <link rel="alternate" href="https://www.php.net/parallel-events" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.parallel.php">
 <link rel="prev" href="https://www.php.net/manual/en/parallel-channel.close.php">
 <link rel="next" href="https://www.php.net/manual/en/parallel-events.setblocking.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.parallel-events.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.parallel-events.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.parallel-events.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.parallel-events.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.parallel-events.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.parallel-events.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.parallel-events.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.parallel-events.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.parallel-events.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.parallel-events.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.parallel-events.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The parallel\Events class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: parallel\Events - Manual" />
<meta name="twitter:description" content="The parallel\Events class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: parallel\Events - Manual" />
<meta itemprop="description" content="The parallel\Events class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The parallel\Events class" />

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
        <a href="parallel-events.setblocking.php">
          parallel\Events::setBlocking &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="parallel-channel.close.php">
          &laquo; parallel\Channel::close        </a>
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
            <option value='en/class.parallel-events.php' selected="selected">English</option>
            <option value='de/class.parallel-events.php'>German</option>
            <option value='es/class.parallel-events.php'>Spanish</option>
            <option value='fr/class.parallel-events.php'>French</option>
            <option value='it/class.parallel-events.php'>Italian</option>
            <option value='ja/class.parallel-events.php'>Japanese</option>
            <option value='pt_BR/class.parallel-events.php'>Brazilian Portuguese</option>
            <option value='ru/class.parallel-events.php'>Russian</option>
            <option value='tr/class.parallel-events.php'>Turkish</option>
            <option value='uk/class.parallel-events.php'>Ukrainian</option>
            <option value='zh/class.parallel-events.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.parallel-events" class="reference">

 <h1 class="title">The parallel\Events class</h1>
 

 <div class="partintro"><p class="verinfo">(0.9.0)</p>
  <div class="section">
    <h2 class="title">The Event Loop</h2>
    <p class="para">
     The Event loop monitors the state of sets of futures and or channels (targets) in order to perform read (<span class="methodname"><a href="parallel-future.value.php" class="methodname">parallel\Future::value()</a></span>, <span class="methodname"><a href="parallel-channel.recv.php" class="methodname">parallel\Channel::recv()</a></span>) and write (<span class="methodname"><a href="parallel-channel.send.php" class="methodname">parallel\Channel::send()</a></span>) operations as the targets become available and the operations may be performed without blocking the event loop.
    </p>
  </div>
  <div class="section" id="parallel-events.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">parallel\Events</strong>
     </span>
     <span class="oointerface"><span class="modifier">implements</span> 
       <a href="class.countable.php" class="interfacename">Countable</a></span><span class="oointerface">,  <a href="class.traversable.php" class="interfacename">Traversable</a></span> {</div>

   
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Input */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="parallel-events.setinput.php" class="methodname">setInput</a></span>(<span class="methodparam"><span class="type">Input</span> <code class="parameter">$input</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Targets */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-events.addchannel.php" class="methodname">addChannel</a></span>(<span class="methodparam"><span class="type"><a href="class.parallel-channel.php" class="type parallel\Channel">parallel\Channel</a></span> <code class="parameter">$channel</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-events.addfuture.php" class="methodname">addFuture</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="class.parallel-future.php" class="type parallel\Future">parallel\Future</a></span> <code class="parameter">$future</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-events.remove.php" class="methodname">remove</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$target</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Behaviour */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-events.setblocking.php" class="methodname">setBlocking</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$blocking</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-events.settimeout.php" class="methodname">setTimeout</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeout</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Polling */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-events.poll.php" class="methodname">poll</a></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.parallel-events-event.php" class="type parallel\Events\Event">parallel\Events\Event</a></span></span></div>

   }</div>


  </div>

 </div>

  






  






  






  






  






  






  







<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="parallel-events.setblocking.php">parallel\Events::setBlocking</a> — Behaviour</li><li><a href="parallel-events.settimeout.php">parallel\Events::setTimeout</a> — Behaviour</li><li><a href="parallel-events.setinput.php">parallel\Events::setInput</a> — Input</li><li><a href="parallel-events.addchannel.php">parallel\Events::addChannel</a> — Targets</li><li><a href="parallel-events.addfuture.php">parallel\Events::addFuture</a> — Targets</li><li><a href="parallel-events.remove.php">parallel\Events::remove</a> — Targets</li><li><a href="parallel-events.poll.php">parallel\Events::poll</a> — Polling</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/parallel/parallel.events.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.parallel-events%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.parallel-events&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.parallel-events.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124528">  <div class="votes">
    <div id="Vu124528">
    <a href="/manual/vote-note.php?id=124528&amp;page=class.parallel-events&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124528">
    <a href="/manual/vote-note.php?id=124528&amp;page=class.parallel-events&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124528" title="82% like this...">
    15
    </div>
  </div>
  <a href="#124528" class="name">
  <strong class="user"><em>s dot laufer at homegear dot email</em></strong></a><a class="genanchor" href="#124528"> &para;</a><div class="date" title="2019-12-22 03:02"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124528">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br />Example showing the usage of events.<br /><br />The documentation still is very thin, so I'm not sure, the example is the best solution. But it works.<br />*/<br /></span><span class="keyword">use </span><span class="default">parallel</span><span class="keyword">\{</span><span class="default">Channel</span><span class="keyword">,</span><span class="default">Runtime</span><span class="keyword">,</span><span class="default">Events</span><span class="keyword">,</span><span class="default">Events\Event</span><span class="keyword">};<br /><br /></span><span class="default">$myThread </span><span class="keyword">= function(</span><span class="default">Channel $channel</span><span class="keyword">) {<br />    </span><span class="default">$events </span><span class="keyword">= new </span><span class="default">Events</span><span class="keyword">();<br />    </span><span class="default">$events</span><span class="keyword">-&gt;</span><span class="default">addChannel</span><span class="keyword">(</span><span class="default">$channel</span><span class="keyword">);<br />    </span><span class="comment">//$events-&gt;setBlocking(false); //Uncomment to don't block on Events::poll()<br />    </span><span class="default">$events</span><span class="keyword">-&gt;</span><span class="default">setTimeout</span><span class="keyword">(</span><span class="default">1000000</span><span class="keyword">); </span><span class="comment">//Comment when not blocking<br /><br />    </span><span class="keyword">while(</span><span class="default">true</span><span class="keyword">)<br />    {<br />        </span><span class="comment">/*<br />        ...<br />        Your code.<br />        ...<br />        */<br /><br />        //Read all available events<br />        </span><span class="keyword">try<br />        {<br />            </span><span class="default">$event </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />            do<br />            {<br />                </span><span class="default">$event </span><span class="keyword">= </span><span class="default">$events</span><span class="keyword">-&gt;</span><span class="default">poll</span><span class="keyword">(); </span><span class="comment">//Returns non-null if there is an event<br />                </span><span class="keyword">if(</span><span class="default">$event </span><span class="keyword">&amp;&amp; </span><span class="default">$event</span><span class="keyword">-&gt;</span><span class="default">source </span><span class="keyword">== </span><span class="string">'myChannel'</span><span class="keyword">)<br />                {<br />                    </span><span class="comment">//It seems, the target gets deleted after returning an event,<br />                    //so add it again.<br />                    </span><span class="default">$events</span><span class="keyword">-&gt;</span><span class="default">addChannel</span><span class="keyword">(</span><span class="default">$channel</span><span class="keyword">);<br />                    if(</span><span class="default">$event</span><span class="keyword">-&gt;</span><span class="default">type </span><span class="keyword">== </span><span class="default">Event\Type</span><span class="keyword">::</span><span class="default">Read</span><span class="keyword">)<br />                    {<br />                        if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$event</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">) &amp;&amp; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$event</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">)<br />                        {<br />                            if(</span><span class="default">$event</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">] == </span><span class="string">'stop'</span><span class="keyword">)<br />                            {<br />                                echo </span><span class="string">'Stopping thread'</span><span class="keyword">;<br />                                return; </span><span class="comment">//Stop<br />                            </span><span class="keyword">}<br />                            else<br />                            {<br />                                echo </span><span class="string">'Event: '</span><span class="keyword">.</span><span class="default">$event</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">].</span><span class="string">' =&gt; '</span><span class="keyword">.</span><span class="default">$event</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">].</span><span class="default">PHP_EOL</span><span class="keyword">;<br />                            }<br />                        }<br />                    }<br />                    else if(</span><span class="default">$event</span><span class="keyword">-&gt;</span><span class="default">type </span><span class="keyword">== </span><span class="default">Event\Type</span><span class="keyword">::</span><span class="default">Close</span><span class="keyword">) return; </span><span class="comment">//Stop<br />                </span><span class="keyword">}<br />            }<br />            while(</span><span class="default">$event</span><span class="keyword">);<br />        }<br />        catch(</span><span class="default">Events\Error\Timeout $ex</span><span class="keyword">)<br />        {<br />            </span><span class="comment">//Timeout<br />            </span><span class="keyword">echo </span><span class="string">'Timeout'</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />        }<br />    }<br />};<br /><br />class </span><span class="default">MyClass </span><span class="keyword">{<br />    private </span><span class="default">$runtime</span><span class="keyword">;<br />    private </span><span class="default">$future</span><span class="keyword">;<br />    private </span><span class="default">$channel</span><span class="keyword">;<br /><br />    public function </span><span class="default">start</span><span class="keyword">() {<br />        </span><span class="comment">//Create runtime<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">runtime </span><span class="keyword">= new </span><span class="default">Runtime</span><span class="keyword">();<br /><br />        </span><span class="comment">//Create buffered channel.<br />        //Buffered channels don't block on Channel::send().<br />        //Note that target names need to be unique within the process.<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">channel </span><span class="keyword">= </span><span class="default">Channel</span><span class="keyword">::</span><span class="default">make</span><span class="keyword">(</span><span class="string">'myChannel'</span><span class="keyword">, </span><span class="default">Channel</span><span class="keyword">::</span><span class="default">Infinite</span><span class="keyword">);<br /><br />        global </span><span class="default">$myThread</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">future </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">runtime</span><span class="keyword">-&gt;</span><span class="default">run</span><span class="keyword">(</span><span class="default">$myThread</span><span class="keyword">, [</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">channel</span><span class="keyword">]);<br />    }<br /><br />    public function </span><span class="default">stop</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">channel</span><span class="keyword">-&gt;</span><span class="default">send</span><span class="keyword">([</span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'stop'</span><span class="keyword">, </span><span class="string">'value' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">]);<br /><br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">future</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">(); </span><span class="comment">//Wait for thread to finish<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">channel</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />    }<br /><br />    public function </span><span class="default">emit</span><span class="keyword">(</span><span class="default">string $name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">channel</span><span class="keyword">-&gt;</span><span class="default">send</span><span class="keyword">([</span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="default">$name</span><span class="keyword">, </span><span class="string">'value' </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">]);<br />    }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">MyClass</span><span class="keyword">();<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">start</span><span class="keyword">();<br /><br />for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">5</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />{<br />    </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">emit</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">0.5</span><span class="keyword">);<br />}<br /><br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br /><br />for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />{<br />    </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">emit</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">0.5</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">stop</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126416">  <div class="votes">
    <div id="Vu126416">
    <a href="/manual/vote-note.php?id=126416&amp;page=class.parallel-events&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126416">
    <a href="/manual/vote-note.php?id=126416&amp;page=class.parallel-events&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126416" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126416" class="name">
  <strong class="user"><em>gam6itko</em></strong></a><a class="genanchor" href="#126416"> &para;</a><div class="date" title="2021-09-11 03:28"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126416">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// this example shows how Events handle Future events<br /><br /></span><span class="keyword">use </span><span class="default">parallel</span><span class="keyword">\{</span><span class="default">Events</span><span class="keyword">, </span><span class="default">Events\Event</span><span class="keyword">, </span><span class="default">Runtime</span><span class="keyword">};<br /><br /></span><span class="default">$events </span><span class="keyword">= new </span><span class="default">Events</span><span class="keyword">();<br /><br /></span><span class="default">$runtime </span><span class="keyword">= new </span><span class="default">Runtime</span><span class="keyword">();<br /><br /></span><span class="comment">//Read (type: 1)<br /></span><span class="default">$future </span><span class="keyword">= </span><span class="default">$runtime</span><span class="keyword">-&gt;</span><span class="default">run</span><span class="keyword">(<br />    static function (</span><span class="default">string $name</span><span class="keyword">) {<br />        return </span><span class="string">"Future#</span><span class="default">$name</span><span class="string"> result"</span><span class="keyword">;<br />    },<br />    [</span><span class="string">'Read'</span><span class="keyword">]<br />);<br /></span><span class="default">$events</span><span class="keyword">-&gt;</span><span class="default">addFuture</span><span class="keyword">(</span><span class="string">"Future#Read"</span><span class="keyword">, </span><span class="default">$future</span><span class="keyword">);<br /><br /></span><span class="comment">//Cancel  (type: 4)<br /></span><span class="default">$future </span><span class="keyword">= </span><span class="default">$runtime</span><span class="keyword">-&gt;</span><span class="default">run</span><span class="keyword">(<br />    static function (</span><span class="default">string $name</span><span class="keyword">) {<br />        throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">"Exception#</span><span class="default">$name</span><span class="string">"</span><span class="keyword">);<br />    },<br />    [</span><span class="string">'Cancel'</span><span class="keyword">]<br />);<br /></span><span class="default">$events</span><span class="keyword">-&gt;</span><span class="default">addFuture</span><span class="keyword">(</span><span class="string">"Future#Cancel"</span><span class="keyword">, </span><span class="default">$future</span><span class="keyword">);<br /><br /></span><span class="comment">//Kill  (type: 5)<br /></span><span class="default">$future </span><span class="keyword">= </span><span class="default">$runtime</span><span class="keyword">-&gt;</span><span class="default">run</span><span class="keyword">(<br />    static function () {<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">100000</span><span class="keyword">);<br />    },<br />    []<br />);<br /></span><span class="default">$events</span><span class="keyword">-&gt;</span><span class="default">addFuture</span><span class="keyword">(</span><span class="string">"Future#Kill"</span><span class="keyword">, </span><span class="default">$future</span><span class="keyword">);<br /></span><span class="default">$future</span><span class="keyword">-&gt;</span><span class="default">cancel</span><span class="keyword">(); </span><span class="comment">//kill it<br /><br />//Error  (type: 6)<br /></span><span class="default">$future </span><span class="keyword">= </span><span class="default">$runtime</span><span class="keyword">-&gt;</span><span class="default">run</span><span class="keyword">(<br />    static function () {<br />        </span><span class="default">$memoryEater </span><span class="keyword">= [];<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        while (++</span><span class="default">$i</span><span class="keyword">) {<br />            </span><span class="default">$memoryEater</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />        }<br />    }<br />);<br /></span><span class="default">$events</span><span class="keyword">-&gt;</span><span class="default">addFuture</span><span class="keyword">(</span><span class="string">"Future#Error"</span><span class="keyword">, </span><span class="default">$future</span><span class="keyword">);<br /><br /></span><span class="comment">// reading events<br /><br />/** @var Event $event */<br /></span><span class="keyword">foreach (</span><span class="default">$events </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$event</span><span class="keyword">) {<br />    echo </span><span class="default">str_pad</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="string">'='</span><span class="keyword">) . </span><span class="string">" EVENT_</span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">;<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$event</span><span class="keyword">);<br />    echo </span><span class="string">"\n"</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126457">  <div class="votes">
    <div id="Vu126457">
    <a href="/manual/vote-note.php?id=126457&amp;page=class.parallel-events&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126457">
    <a href="/manual/vote-note.php?id=126457&amp;page=class.parallel-events&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126457" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126457" class="name">
  <strong class="user"><em>gam6itko</em></strong></a><a class="genanchor" href="#126457"> &para;</a><div class="date" title="2021-09-25 07:24"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126457">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// example below shows how to stop child thread from main thread<br /><br /></span><span class="keyword">use </span><span class="default">parallel</span><span class="keyword">\{</span><span class="default">Channel</span><span class="keyword">, </span><span class="default">Events</span><span class="keyword">, </span><span class="default">Events\Event\Type</span><span class="keyword">, </span><span class="default">Runtime</span><span class="keyword">};<br /><br /></span><span class="default">$fnThread </span><span class="keyword">= static function (</span><span class="default">Channel $channel</span><span class="keyword">) {<br />    </span><span class="default">$events </span><span class="keyword">= new </span><span class="default">Events</span><span class="keyword">();<br />    </span><span class="default">$events</span><span class="keyword">-&gt;</span><span class="default">addChannel</span><span class="keyword">(</span><span class="default">$channel</span><span class="keyword">);<br />    </span><span class="default">$events</span><span class="keyword">-&gt;</span><span class="default">setBlocking</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">); </span><span class="comment">// don't block on Events::poll()<br /><br />    </span><span class="keyword">while (</span><span class="default">true</span><span class="keyword">) {<br />        if (</span><span class="default">$event </span><span class="keyword">= </span><span class="default">$events</span><span class="keyword">-&gt;</span><span class="default">poll</span><span class="keyword">()) {<br />            </span><span class="comment">//It seems, the target gets deleted after returning an event, so add it again.<br />            </span><span class="default">$events</span><span class="keyword">-&gt;</span><span class="default">addChannel</span><span class="keyword">(</span><span class="default">$channel</span><span class="keyword">);<br /><br />            if (</span><span class="default">Type</span><span class="keyword">::</span><span class="default">Read </span><span class="keyword">=== </span><span class="default">$event</span><span class="keyword">-&gt;</span><span class="default">type</span><span class="keyword">) {<br />                echo </span><span class="string">"- received value: "</span><span class="keyword">.</span><span class="default">$event</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />            } elseif (</span><span class="default">Type</span><span class="keyword">::</span><span class="default">Close </span><span class="keyword">=== </span><span class="default">$event</span><span class="keyword">-&gt;</span><span class="default">type</span><span class="keyword">) {<br />                echo </span><span class="string">"- receiving close event"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />                return </span><span class="string">"i'm done"</span><span class="keyword">;<br />            }<br /><br />        }<br />        echo </span><span class="string">"-\n"</span><span class="keyword">;<br />        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">500_000</span><span class="keyword">);<br />    }<br />};<br /><br /></span><span class="comment">// main thread<br /></span><span class="default">$runtime </span><span class="keyword">= new </span><span class="default">Runtime</span><span class="keyword">();<br /></span><span class="default">$channel </span><span class="keyword">= new </span><span class="default">Channel</span><span class="keyword">();<br /></span><span class="default">$future </span><span class="keyword">= </span><span class="default">$runtime</span><span class="keyword">-&gt;</span><span class="default">run</span><span class="keyword">(</span><span class="default">$fnThread</span><span class="keyword">, [</span><span class="default">$channel</span><span class="keyword">]);<br /><br /></span><span class="default">$channel</span><span class="keyword">-&gt;</span><span class="default">send</span><span class="keyword">(</span><span class="string">'message1'</span><span class="keyword">);<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$channel</span><span class="keyword">-&gt;</span><span class="default">send</span><span class="keyword">(</span><span class="string">'message2'</span><span class="keyword">);<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br /><br />echo </span><span class="string">"closing channel\n"</span><span class="keyword">;<br /></span><span class="default">$channel</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />echo </span><span class="string">"future said: "</span><span class="keyword">.</span><span class="default">$future</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">();<br />echo </span><span class="default">PHP_EOL</span><span class="keyword">;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.parallel-events&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.parallel-events.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="class.parallel-channel.php" title="parallel\Channel">parallel\Channel</a>
                        </li>
                                                <li class="current">
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
