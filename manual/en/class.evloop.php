<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: EvLoop - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.evloop.php">
 <link rel="shorturl" href="https://www.php.net/evloop">
 <link rel="alternate" href="https://www.php.net/evloop" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ev.php">
 <link rel="prev" href="https://www.php.net/manual/en/evio.set.php">
 <link rel="next" href="https://www.php.net/manual/en/evloop.backend.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.evloop.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.evloop.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.evloop.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.evloop.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.evloop.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.evloop.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.evloop.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.evloop.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.evloop.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.evloop.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.evloop.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The EvLoop class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: EvLoop - Manual" />
<meta name="twitter:description" content="The EvLoop class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: EvLoop - Manual" />
<meta itemprop="description" content="The EvLoop class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The EvLoop class" />

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
        <a href="evloop.backend.php">
          EvLoop::backend &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="evio.set.php">
          &laquo; EvIo::set        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.ev.php'>Ev</a></li>      </ul>
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
            <option value='en/class.evloop.php' selected="selected">English</option>
            <option value='de/class.evloop.php'>German</option>
            <option value='es/class.evloop.php'>Spanish</option>
            <option value='fr/class.evloop.php'>French</option>
            <option value='it/class.evloop.php'>Italian</option>
            <option value='ja/class.evloop.php'>Japanese</option>
            <option value='pt_BR/class.evloop.php'>Brazilian Portuguese</option>
            <option value='ru/class.evloop.php'>Russian</option>
            <option value='tr/class.evloop.php'>Turkish</option>
            <option value='uk/class.evloop.php'>Ukrainian</option>
            <option value='zh/class.evloop.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.evloop" class="reference">
 <h1 class="title">The EvLoop class</h1>
 
 <div class="partintro"><p class="verinfo">(PECL ev &gt;= 0.2.0)</p>

  <div class="section" id="evloop.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Represents an event loop that is always distinct from the
    <em>default
    loop</em>.
    Unlike the
    <em>default loop</em>,
    it cannot handle
    <span class="classname"><a href="class.evchild.php" class="classname">EvChild</a></span>
    watchers.
   </p>
   <p class="para">
    Having threads we have to create a loop per thread, and use the
    <em>default loop</em>
    in the parent thread.
   </p>
   <p class="para">
    The
    <em>default event loop</em>
    is initialized automatically by
    <em>Ev</em>.
    It is accessible via methods of the
    <span class="classname"><a href="class.ev.php" class="classname">Ev</a></span>
    class, or via
    <span class="methodname"><a href="evloop.defaultloop.php" class="methodname">EvLoop::defaultLoop()</a></span>
    method.
   </p>
  </div>

  <div class="section" id="evloop.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass">
     <strong class="classname"></strong>
    </span>

    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">EvLoop</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
      <var class="varname"><a href="class.evloop.php#evloop.props.data">$<var class="varname">data</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
      <var class="varname"><a href="class.evloop.php#evloop.props.backend">$<var class="varname">backend</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
      <var class="varname"><a href="class.evloop.php#evloop.props.is-default-loop">$<var class="varname">is_default_loop</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
      <var class="varname"><a href="class.evloop.php#evloop.props.iteration">$<var class="varname">iteration</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
      <var class="varname"><a href="class.evloop.php#evloop.props.pending">$<var class="varname">pending</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
      <var class="varname"><a href="class.evloop.php#evloop.props.io-interval">$<var class="varname">io_interval</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
      <var class="varname"><a href="class.evloop.php#evloop.props.timeout-interval">$<var class="varname">timeout_interval</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
      <var class="varname"><a href="class.evloop.php#evloop.props.depth">$<var class="varname">depth</var></a></var>;</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span>
   <span class="methodname"><a href="evloop.construct.php" class="methodname">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code>
   <span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code>
    <span class="initializer"> = NULL</span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$io_interval</code>
    <span class="initializer"> = 0.0</span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$timeout_interval</code>
    <span class="initializer"> = 0.0</span>
   </span><br>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evloop.backend.php" class="methodname">backend</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="methodname"><a href="evloop.check.php" class="methodname">check</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$callback</code>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code>
   <span class="initializer"> = ?</span></span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$priority</code>
   <span class="initializer"> = ?</span></span>): <span class="type"><a href="class.evcheck.php" class="type EvCheck">EvCheck</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="methodname"><a href="evloop.child.php" class="methodname">child</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pid</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$trace</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$callback</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code>
   <span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$priority</code>
   <span class="initializer"> = ?</span></span><br>): <span class="type"><a href="class.evchild.php" class="type EvChild">EvChild</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="evloop.defaultloop.php" class="methodname">defaultLoop</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code>
    <span class="initializer"> = Ev::FLAG_AUTO</span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code>
    <span class="initializer"> = NULL</span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$io_interval</code>
    <span class="initializer"> = 0.</span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$timeout_interval</code>
    <span class="initializer"> = 0.</span>
   </span><br>): <span class="type"><a href="class.evloop.php" class="type EvLoop">EvLoop</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="methodname"><a href="evloop.embed.php" class="methodname">embed</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$other</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$callback</code>
   <span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code>
   <span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$priority</code>
   <span class="initializer"> = ?</span></span><br>): <span class="type"><a href="class.evembed.php" class="type EvEmbed">EvEmbed</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="methodname"><a href="evloop.fork.php" class="methodname">fork</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$priority</code>
    <span class="initializer"> = 0</span>
   </span>): <span class="type"><a href="class.evfork.php" class="type EvFork">EvFork</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="methodname"><a href="evloop.idle.php" class="methodname">idle</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$priority</code>
    <span class="initializer"> = 0</span>
   </span>): <span class="type"><a href="class.evidle.php" class="type EvIdle">EvIdle</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evloop.invokepending.php" class="methodname">invokePending</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="methodname"><a href="evloop.io.php" class="methodname">io</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$fd</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$events</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$priority</code>
    <span class="initializer"> = 0</span>
   </span><br>): <span class="type"><a href="class.evio.php" class="type EvIo">EvIo</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evloop.loopfork.php" class="methodname">loopFork</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evloop.now.php" class="methodname">now</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evloop.nowupdate.php" class="methodname">nowUpdate</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="methodname"><a href="evloop.periodic.php" class="methodname">periodic</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$offset</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$interval</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$priority</code>
    <span class="initializer"> = 0</span>
   </span><br>): <span class="type"><a href="class.evperiodic.php" class="type EvPeriodic">EvPeriodic</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="methodname"><a href="evloop.prepare.php" class="methodname">prepare</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>, <span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$priority</code>
    <span class="initializer"> = 0</span>
   </span>): <span class="type"><a href="class.evprepare.php" class="type EvPrepare">EvPrepare</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evloop.resume.php" class="methodname">resume</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evloop.run.php" class="methodname">run</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code>
    <span class="initializer"> = 0</span>
   </span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="methodname"><a href="evloop.signal.php" class="methodname">signal</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$signum</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$priority</code>
    <span class="initializer"> = 0</span>
   </span><br>): <span class="type"><a href="class.evsignal.php" class="type EvSignal">EvSignal</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="methodname"><a href="evloop.stat.php" class="methodname">stat</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$interval</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$priority</code>
    <span class="initializer"> = 0</span>
   </span><br>): <span class="type"><a href="class.evstat.php" class="type EvStat">EvStat</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evloop.stop.php" class="methodname">stop</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$how</code>
   <span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evloop.suspend.php" class="methodname">suspend</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="methodname"><a href="evloop.timer.php" class="methodname">timer</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$after</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$repeat</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$priority</code>
    <span class="initializer"> = 0</span>
   </span><br>): <span class="type"><a href="class.evtimer.php" class="type EvTimer">EvTimer</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evloop.verify.php" class="methodname">verify</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>

  </div>

  <div class="section" id="evloop.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="evloop.props.data">
      <var class="varname">data</var>
     </dt>
     <dd>
      <p class="para">
       Custom data attached to loop
      </p>
     </dd>
    
    
     <dt id="evloop.props.backend">
      <var class="varname">backend</var>
     </dt>
     <dd>
      <p class="para">
       <em>Readonly</em>.
       The
       <a href="class.ev.php#ev.constants.watcher-backends" class="link">backend flags</a>
       indicating the event backend in use.
      </p>
     </dd>
    
    
     <dt id="evloop.props.is-default-loop">
      <var class="varname">is_default_loop</var>
     </dt>
     <dd>
      <p class="para">
       <em>Readonly</em>.
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if it is the default event loop.
      </p>
     </dd>
    
    
     <dt id="evloop.props.iteration">
      <var class="varname">iteration</var>
     </dt>
     <dd>
      <p class="para">
       The current iteration count of the loop. See
       <span class="methodname"><a href="ev.iteration.php" class="methodname">Ev::iteration()</a></span>
      </p>
     </dd>
    
    
     <dt id="evloop.props.pending">
      <var class="varname">pending</var>
     </dt>
     <dd>
      <p class="para">
       The number of pending watchers.
       <code class="literal">0</code>
       indicates that there are no watchers pending.
      </p>
     </dd>
    
    
     <dt id="evloop.props.io-interval">
      <var class="varname">io_interval</var>
     </dt>
     <dd>
      <p class="para">
       Higher
       <var class="varname">io_interval</var>
       allows
       <em>libev</em>
       to spend more time collecting
       <span class="classname"><a href="class.evio.php" class="classname">EvIo</a></span>
       events, so more events can be handled per iteration, at the cost of
       increasing latency. Timeouts (both
       <span class="classname"><a href="class.evperiodic.php" class="classname">EvPeriodic</a></span>
       and
       <span class="classname"><a href="class.evtimer.php" class="classname">EvTimer</a></span>)
       will not be affected. Setting this to a non-zero value will introduce
       an additional
       <code class="literal">sleep()</code>
       call into most loop iterations. The sleep time ensures that
       <em>libev</em>
       will not poll for
       <span class="classname"><a href="class.evio.php" class="classname">EvIo</a></span>
       events more often than once per this interval, on average. Many
       programs can usually benefit by setting the
       <var class="varname">io_interval</var>
       to a value near
       <code class="literal">0.1</code>,
       which is often enough for interactive servers(not for games). It
       usually doesn&#039;t make much sense to set it to a lower value than
       <code class="literal">0.01</code>,
       as this approaches the timing granularity of most systems.
      </p>
      <p class="para">
       See also
       <a href="http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#FUNCTIONS_CONTROLLING_EVENT_LOOPS" class="link external">&raquo;&nbsp;FUNCTIONS
      CONTROLLING EVENT LOOPS</a>.
      </p>
     </dd>
    
    
     <dt id="evloop.props.timeout-interval">
      <var class="varname">timeout_interval</var>
     </dt>
     <dd>
      <p class="para">
       Higher
       <var class="varname">timeout_interval</var>
       allows
       <em>libev</em>
       to spend more time collecting timeouts, at the expense of increased
       latency/jitter/inexactness(the watcher callback will be called later).
       <span class="classname"><a href="class.evio.php" class="classname">EvIo</a></span>
       watchers will not be affected. Setting this to a non-null value will
       not introduce any overhead in
       <em>libev</em>.
       See also
       <a href="http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#FUNCTIONS_CONTROLLING_EVENT_LOOPS" class="link external">&raquo;&nbsp;FUNCTIONS
      CONTROLLING EVENT LOOPS</a>.
      </p>
     </dd>
    
    
     <dt id="evloop.props.depth">
      <var class="varname">depth</var>
     </dt>
     <dd>
      <p class="para">
       The recursion depth. See
       <span class="methodname"><a href="ev.depth.php" class="methodname">Ev::depth()</a></span>.
      </p>
     </dd>
    
   </dl>
  </div>

 </div>

 



















































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="evloop.backend.php">EvLoop::backend</a> — Returns an integer describing the backend used by libev</li><li><a href="evloop.check.php">EvLoop::check</a> — Creates EvCheck object associated with the current event loop
  instance</li><li><a href="evloop.child.php">EvLoop::child</a> — Creates EvChild object associated with the current event loop</li><li><a href="evloop.construct.php">EvLoop::__construct</a> — Constructs the event loop object</li><li><a href="evloop.defaultloop.php">EvLoop::defaultLoop</a> — Returns or creates the default event loop</li><li><a href="evloop.embed.php">EvLoop::embed</a> — Creates an instance of EvEmbed watcher associated
  with the current EvLoop object</li><li><a href="evloop.fork.php">EvLoop::fork</a> — Creates EvFork watcher object associated with the current event
  loop instance</li><li><a href="evloop.idle.php">EvLoop::idle</a> — Creates EvIdle watcher object associated with the current event
  loop instance</li><li><a href="evloop.invokepending.php">EvLoop::invokePending</a> — Invoke all pending watchers while resetting their pending state</li><li><a href="evloop.io.php">EvLoop::io</a> — Create EvIo watcher object associated with the current event
  loop instance</li><li><a href="evloop.loopfork.php">EvLoop::loopFork</a> — Must be called after a fork</li><li><a href="evloop.now.php">EvLoop::now</a> — Returns the current &quot;event loop time&quot;</li><li><a href="evloop.nowupdate.php">EvLoop::nowUpdate</a> — Establishes the current time by querying the kernel, updating the time
    returned by EvLoop::now in the progress</li><li><a href="evloop.periodic.php">EvLoop::periodic</a> — Creates EvPeriodic watcher object associated with the current
  event loop instance</li><li><a href="evloop.prepare.php">EvLoop::prepare</a> — Creates EvPrepare watcher object associated with the current
  event loop instance</li><li><a href="evloop.resume.php">EvLoop::resume</a> — Resume previously suspended default event loop</li><li><a href="evloop.run.php">EvLoop::run</a> — Begin checking for events and calling callbacks for the loop</li><li><a href="evloop.signal.php">EvLoop::signal</a> — Creates EvSignal watcher object associated with the current
  event loop instance</li><li><a href="evloop.stat.php">EvLoop::stat</a> — Creates EvStat watcher object associated with the current event
  loop instance</li><li><a href="evloop.stop.php">EvLoop::stop</a> — Stops the event loop</li><li><a href="evloop.suspend.php">EvLoop::suspend</a> — Suspend the loop</li><li><a href="evloop.timer.php">EvLoop::timer</a> — Creates EvTimer watcher object associated with the current event
  loop instance</li><li><a href="evloop.verify.php">EvLoop::verify</a> — Performs internal consistency checks(for debugging)</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ev/evloop.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.evloop%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.evloop&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.evloop.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.ev.php">Ev</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.ev.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="ev.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="ev.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ev.watchers.php" title="Watchers">Watchers</a>
                        </li>
                                                <li class="">
                            <a href="ev.watcher-callbacks.php" title="Watcher callbacks">Watcher callbacks</a>
                        </li>
                                                <li class="">
                            <a href="ev.periodic-modes.php" title="Periodic watcher operation modes">Periodic watcher operation modes</a>
                        </li>
                                                <li class="">
                            <a href="class.ev.php" title="Ev">Ev</a>
                        </li>
                                                <li class="">
                            <a href="class.evcheck.php" title="EvCheck">EvCheck</a>
                        </li>
                                                <li class="">
                            <a href="class.evchild.php" title="EvChild">EvChild</a>
                        </li>
                                                <li class="">
                            <a href="class.evembed.php" title="EvEmbed">EvEmbed</a>
                        </li>
                                                <li class="">
                            <a href="class.evfork.php" title="EvFork">EvFork</a>
                        </li>
                                                <li class="">
                            <a href="class.evidle.php" title="EvIdle">EvIdle</a>
                        </li>
                                                <li class="">
                            <a href="class.evio.php" title="EvIo">EvIo</a>
                        </li>
                                                <li class="current">
                            <a href="class.evloop.php" title="EvLoop">EvLoop</a>
                        </li>
                                                <li class="">
                            <a href="class.evperiodic.php" title="EvPeriodic">EvPeriodic</a>
                        </li>
                                                <li class="">
                            <a href="class.evprepare.php" title="EvPrepare">EvPrepare</a>
                        </li>
                                                <li class="">
                            <a href="class.evsignal.php" title="EvSignal">EvSignal</a>
                        </li>
                                                <li class="">
                            <a href="class.evstat.php" title="EvStat">EvStat</a>
                        </li>
                                                <li class="">
                            <a href="class.evtimer.php" title="EvTimer">EvTimer</a>
                        </li>
                                                <li class="">
                            <a href="class.evwatcher.php" title="EvWatcher">EvWatcher</a>
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
