<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: EvSignal - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.evsignal.php">
 <link rel="shorturl" href="https://www.php.net/evsignal">
 <link rel="alternate" href="https://www.php.net/evsignal" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ev.php">
 <link rel="prev" href="https://www.php.net/manual/en/evprepare.createstopped.php">
 <link rel="next" href="https://www.php.net/manual/en/evsignal.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.evsignal.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.evsignal.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.evsignal.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.evsignal.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.evsignal.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.evsignal.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.evsignal.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.evsignal.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.evsignal.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.evsignal.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.evsignal.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The EvSignal class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: EvSignal - Manual" />
<meta name="twitter:description" content="The EvSignal class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: EvSignal - Manual" />
<meta itemprop="description" content="The EvSignal class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The EvSignal class" />

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
        <a href="evsignal.construct.php">
          EvSignal::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="evprepare.createstopped.php">
          &laquo; EvPrepare::createStopped        </a>
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
            <option value='en/class.evsignal.php' selected="selected">English</option>
            <option value='de/class.evsignal.php'>German</option>
            <option value='es/class.evsignal.php'>Spanish</option>
            <option value='fr/class.evsignal.php'>French</option>
            <option value='it/class.evsignal.php'>Italian</option>
            <option value='ja/class.evsignal.php'>Japanese</option>
            <option value='pt_BR/class.evsignal.php'>Brazilian Portuguese</option>
            <option value='ru/class.evsignal.php'>Russian</option>
            <option value='tr/class.evsignal.php'>Turkish</option>
            <option value='uk/class.evsignal.php'>Ukrainian</option>
            <option value='zh/class.evsignal.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.evsignal" class="reference">
 <h1 class="title">The EvSignal class</h1>
 
 <div class="partintro"><p class="verinfo">(PECL ev &gt;= 0.2.0)</p>

  <div class="section" id="evsignal.intro">
   <h2 class="title">Introduction</h2>
  <p class="para">
    <span class="classname"><strong class="classname">EvSignal</strong></span>
    watchers will trigger an event when the process receives a specific signal
    one or more times. Even though signals are very asynchronous,
    <em>libev</em>
    will try its best to deliver signals synchronously, i.e. as part of the
    normal event processing, like any other event.
   </p>
   <p class="para">
    There is no limit for the number of watchers for the same signal, but only
    within the same loop, i.e. one can watch for
    <strong><code><a href="pcntl.constants.php#constant.sigint">SIGINT</a></code></strong>
    in the default loop and for
    <strong><code><a href="pcntl.constants.php#constant.sigio">SIGIO</a></code></strong>
    in another loop, but it is not allowed to watch for
    <strong><code><a href="pcntl.constants.php#constant.sigint">SIGINT</a></code></strong>
    in both the default loop and another loop at the same time. At the moment,
    <strong><code><a href="pcntl.constants.php#constant.sigchld">SIGCHLD</a></code></strong>
    is permanently tied to the default loop.
   </p>
   <p class="para">
    If possible and supported,
    <em>libev</em>
    will install its handlers with
    <code class="literal">SA_RESTART</code>
    (or equivalent) behaviour enabled, so system calls should not be unduly
    interrupted. In case of a problem with system calls getting interrupted by
    signals, all the signals can be blocked in an
    <span class="classname"><a href="class.evcheck.php" class="classname">EvCheck</a></span>
    watcher and unblocked in a
    <span class="classname"><a href="class.evprepare.php" class="classname">EvPrepare</a></span>
    watcher.
   </p>
  </div>

  <div class="section" id="evsignal.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass">
     <strong class="classname"></strong>
    </span>

    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">class</span> <strong class="classname">EvSignal</strong>
     </span>
     <span class="ooclass">
      <span class="modifier">extends</span>
       <a href="class.evwatcher.php" class="classname">EvWatcher</a>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
      <var class="varname"><a href="class.evsignal.php#evsignal.props.signum">$<var class="varname">signum</var></a></var>;</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited properties */</div>
    <div class="fieldsynopsis"><span class="modifier">public</span>
      <var class="varname"><a href="class.evwatcher.php#evwatcher.props.is-active">$<var class="varname">is_active</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
      <var class="varname"><a href="class.evwatcher.php#evwatcher.props.data">$<var class="varname">data</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
      <var class="varname"><a href="class.evwatcher.php#evwatcher.props.is-pending">$<var class="varname">is_pending</var></a></var>;</div>
<div class="fieldsynopsis"><span class="modifier">public</span>
      <var class="varname"><a href="class.evwatcher.php#evwatcher.props.priority">$<var class="varname">priority</var></a></var>;</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span>
   <span class="methodname"><a href="evsignal.construct.php" class="methodname">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$signum</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code>
    <span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$priority</code>
    <span class="initializer"> = 0</span>
   </span><br>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="evsignal.createstopped.php" class="methodname">createStopped</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam">
    
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
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evsignal.set.php" class="methodname">set</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$signum</code>
   </span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evwatcher.clear.php" class="methodname">EvWatcher::clear</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evwatcher.feed.php" class="methodname">EvWatcher::feed</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$revents</code>
   </span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evwatcher.getloop.php" class="methodname">EvWatcher::getLoop</a></span>(): <span class="type"><a href="class.evloop.php" class="type EvLoop">EvLoop</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evwatcher.invoke.php" class="methodname">EvWatcher::invoke</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$revents</code>
   </span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evwatcher.keepalive.php" class="methodname">EvWatcher::keepalive</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$value</code>
   <span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evwatcher.setcallback.php" class="methodname">EvWatcher::setCallback</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code>
   </span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evwatcher.start.php" class="methodname">EvWatcher::start</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="evwatcher.stop.php" class="methodname">EvWatcher::stop</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>

  </div>

  <div class="section" id="evsignal.props">
   <h2 class="title">Properties</h2>
   <dl>
    
     <dt id="evsignal.props.signum">
      <var class="varname">signum</var>
     </dt>
     <dd>
      <p class="para">
       Signal number. See the constants exported by
       <em>pcntl</em>
       extension. See also
       <code class="literal">signal(7)</code>
       man page.
      </p>
     </dd>
    
   </dl>
  </div>

 </div>

 















<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="evsignal.construct.php">EvSignal::__construct</a> — Constructs EvSignal watcher object</li><li><a href="evsignal.createstopped.php">EvSignal::createStopped</a> — Create stopped EvSignal watcher object</li><li><a href="evsignal.set.php">EvSignal::set</a> — Configures the watcher</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ev/evsignal.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.evsignal%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.evsignal&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.evsignal.php">＋<small>add a note</small></a></span>
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
                                                <li class="">
                            <a href="class.evloop.php" title="EvLoop">EvLoop</a>
                        </li>
                                                <li class="">
                            <a href="class.evperiodic.php" title="EvPeriodic">EvPeriodic</a>
                        </li>
                                                <li class="">
                            <a href="class.evprepare.php" title="EvPrepare">EvPrepare</a>
                        </li>
                                                <li class="current">
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
