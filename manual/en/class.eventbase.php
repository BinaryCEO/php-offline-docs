<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: EventBase - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.eventbase.php">
 <link rel="shorturl" href="https://www.php.net/eventbase">
 <link rel="alternate" href="https://www.php.net/eventbase" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.event.php">
 <link rel="prev" href="https://www.php.net/manual/en/event.timer.php">
 <link rel="next" href="https://www.php.net/manual/en/eventbase.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.eventbase.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.eventbase.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.eventbase.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.eventbase.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.eventbase.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.eventbase.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.eventbase.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.eventbase.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.eventbase.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.eventbase.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.eventbase.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The EventBase class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: EventBase - Manual" />
<meta name="twitter:description" content="The EventBase class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: EventBase - Manual" />
<meta itemprop="description" content="The EventBase class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The EventBase class" />

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
        <a href="eventbase.construct.php">
          EventBase::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="event.timer.php">
          &laquo; Event::timer        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.event.php'>Event</a></li>      </ul>
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
            <option value='en/class.eventbase.php' selected="selected">English</option>
            <option value='de/class.eventbase.php'>German</option>
            <option value='es/class.eventbase.php'>Spanish</option>
            <option value='fr/class.eventbase.php'>French</option>
            <option value='it/class.eventbase.php'>Italian</option>
            <option value='ja/class.eventbase.php'>Japanese</option>
            <option value='pt_BR/class.eventbase.php'>Brazilian Portuguese</option>
            <option value='ru/class.eventbase.php'>Russian</option>
            <option value='tr/class.eventbase.php'>Turkish</option>
            <option value='uk/class.eventbase.php'>Ukrainian</option>
            <option value='zh/class.eventbase.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.eventbase" class="reference">
 <h1 class="title">The EventBase class</h1>
 
 <div class="partintro"><p class="verinfo">(PECL event &gt;= 1.2.6-beta)</p>

  <div class="section" id="eventbase.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    <span class="classname"><strong class="classname">EventBase</strong></span>
    class represents libevent&#039;s event base structure. It holds a set of events
    and can poll to determine which events are active.
   </p>
   <p class="para">
    Each event base has a
    <em>method</em>,
    or a
    <em>backend</em>
    that it uses to determine which events are ready. The recognized methods
    are:
    <code class="literal">select</code>,
    <code class="literal">poll</code>,
    <code class="literal">epoll</code>,
    <code class="literal">kqueue</code>,
    <code class="literal">devpoll</code>,
    <code class="literal">evport</code>
    and
    <code class="literal">win32</code>.
   </p>
   <p class="para">
    To configure event base to use, or avoid specific backend
    <span class="classname"><a href="class.eventconfig.php" class="classname">EventConfig</a></span>
    class can be used.
   </p>
   <div class="warning"><strong class="warning">Warning</strong>
    <p class="para">
     Do
     <em>NOT</em>
     destroy the
     <span class="classname"><strong class="classname">EventBase</strong></span>
     object as long as resources of the associated
     <code class="literal">Event</code>
     objects are not released. Otherwise, it will lead to unpredictable
     results!
    </p>
   </div>
  </div>

  <div class="section" id="eventbase.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass">
     <strong class="classname"></strong>
    </span>

    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">EventBase</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbase.php#eventbase.constants.loop-once"><var class="varname">LOOP_ONCE</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbase.php#eventbase.constants.loop-nonblock"><var class="varname">LOOP_NONBLOCK</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbase.php#eventbase.constants.nolock"><var class="varname">NOLOCK</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbase.php#eventbase.constants.startup-iocp"><var class="varname">STARTUP_IOCP</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbase.php#eventbase.constants.no-cache-time"><var class="varname">NO_CACHE_TIME</var></a></var><span class="initializer"> = 8</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.eventbase.php#eventbase.constants.epoll-use-changelist"><var class="varname">EPOLL_USE_CHANGELIST</var></a></var><span class="initializer"> = 16</span>;</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.construct.php" class="methodname">__construct</a></span>(<span class="methodparam">
    
    <span class="type"><a href="class.eventconfig.php" class="type EventConfig">EventConfig</a></span> <code class="parameter">$cfg</code>
   <span class="initializer"> = ?</span></span>)</div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.dispatch.php" class="methodname">dispatch</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.exit.php" class="methodname">exit</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$timeout</code>
   <span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.free.php" class="methodname">free</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.getfeatures.php" class="methodname">getFeatures</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.getmethod.php" class="methodname">getMethod</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.gettimeofdaycached.php" class="methodname">getTimeOfDayCached</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.gotexit.php" class="methodname">gotExit</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.gotstop.php" class="methodname">gotStop</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.loop.php" class="methodname">loop</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code>
   <span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.priorityinit.php" class="methodname">priorityInit</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$n_priorities</code>
   </span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.reinit.php" class="methodname">reInit</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>
   <span class="methodname"><a href="eventbase.stop.php" class="methodname">stop</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>

  </div>

  <div class="section" id="eventbase.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>
    
     <dt id="eventbase.constants.loop-once">
      <strong><code><a href="class.eventbase.php#eventbase.constants.loop-once">EventBase::LOOP_ONCE</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Flag used with
       <span class="methodname"><a href="eventbase.loop.php" class="methodname">EventBase::loop()</a></span>
       method which means: &quot;block until libevent has an active event, then
       exit once all active events have had their callbacks run&quot;.
      </p>
     </dd>
    
    
     <dt id="eventbase.constants.loop-nonblock">
      <strong><code><a href="class.eventbase.php#eventbase.constants.loop-nonblock">EventBase::LOOP_NONBLOCK</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Flag used with
       <span class="methodname"><a href="eventbase.loop.php" class="methodname">EventBase::loop()</a></span>
       method which means: &quot;do not block: see which events are ready now, run
       the callbacks of the highest-priority ones, then exit&quot;.
      </p>
     </dd>
    
    
     <dt id="eventbase.constants.nolock">
      <strong><code><a href="class.eventbase.php#eventbase.constants.nolock">EventBase::NOLOCK</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Configuration flag. Do not allocate a lock for the event base, even if
       we have locking set up&quot;.
      </p>
     </dd>
    
    
     <dt id="eventbase.constants.startup-iocp">
      <strong><code><a href="class.eventbase.php#eventbase.constants.startup-iocp">EventBase::STARTUP_IOCP</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Windows-only configuration flag. Enables the IOCP dispatcher at
       startup.
      </p>
     </dd>
    
    
     <dt id="eventbase.constants.no-cache-time">
      <strong><code><a href="class.eventbase.php#eventbase.constants.no-cache-time">EventBase::NO_CACHE_TIME</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       Configuration flag. Instead of checking the current time every time the
       event loop is ready to run timeout callbacks, check after each timeout
       callback.
      </p>
     </dd>
    
    
     <dt id="eventbase.constants.epoll-use-changelist">
      <strong><code><a href="class.eventbase.php#eventbase.constants.epoll-use-changelist">EventBase::EPOLL_USE_CHANGELIST</a></code></strong>
     </dt>
     <dd>
      <p class="para">
       If we are using the
       <code class="literal">epoll</code>
       backend, this flag says that it is safe to use Libevent&#039;s internal
       change-list code to batch up adds and deletes in order to try to do as
       few syscalls as possible.
      </p>
      <p class="para">
       Setting this flag can make code run faster, but it may trigger a Linux
       bug: it is not safe to use this flag if one has any fds cloned by
       dup(), or its variants. Doing so will produce strange and
       hard-to-diagnose bugs.
      </p>
      <p class="para">
       This flag can also be activated by settnig the
       <code class="literal">EVENT_EPOLL_USE_CHANGELIST</code>
       environment variable.
      </p>
      <p class="para">
       This flag has no effect if one winds up using a backend other than
       <code class="literal">epoll</code>.
      </p>
     </dd>
    
   </dl>
  </div>

 </div>

 

































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="eventbase.construct.php">EventBase::__construct</a> — Constructs EventBase object</li><li><a href="eventbase.dispatch.php">EventBase::dispatch</a> — Dispatch pending events</li><li><a href="eventbase.exit.php">EventBase::exit</a> — Stop dispatching events</li><li><a href="eventbase.free.php">EventBase::free</a> — Free resources allocated for this event base</li><li><a href="eventbase.getfeatures.php">EventBase::getFeatures</a> — Returns bitmask of features supported</li><li><a href="eventbase.getmethod.php">EventBase::getMethod</a> — Returns event method in use</li><li><a href="eventbase.gettimeofdaycached.php">EventBase::getTimeOfDayCached</a> — Returns the current event base time</li><li><a href="eventbase.gotexit.php">EventBase::gotExit</a> — Checks if the event loop was told to exit</li><li><a href="eventbase.gotstop.php">EventBase::gotStop</a> — Checks if the event loop was told to exit</li><li><a href="eventbase.loop.php">EventBase::loop</a> — Dispatch pending events</li><li><a href="eventbase.priorityinit.php">EventBase::priorityInit</a> — Sets number of priorities per event base</li><li><a href="eventbase.reinit.php">EventBase::reInit</a> — Re-initialize event base(after a fork)</li><li><a href="eventbase.stop.php">EventBase::stop</a> — Tells event_base to stop dispatching events</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/event/eventbase.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.eventbase%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.eventbase&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.eventbase.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.event.php">Event</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.event.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="event.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="event.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="event.flags.php" title="Event flags">Event flags</a>
                        </li>
                                                <li class="">
                            <a href="event.persistence.php" title="About event persistence">About event persistence</a>
                        </li>
                                                <li class="">
                            <a href="event.callbacks.php" title="Event callbacks">Event callbacks</a>
                        </li>
                                                <li class="">
                            <a href="event.constructing.signal.events.php" title="Constructing signal events">Constructing signal events</a>
                        </li>
                                                <li class="">
                            <a href="class.event.php" title="Event">Event</a>
                        </li>
                                                <li class="current">
                            <a href="class.eventbase.php" title="EventBase">EventBase</a>
                        </li>
                                                <li class="">
                            <a href="class.eventbuffer.php" title="EventBuffer">EventBuffer</a>
                        </li>
                                                <li class="">
                            <a href="class.eventbufferevent.php" title="EventBufferEvent">EventBufferEvent</a>
                        </li>
                                                <li class="">
                            <a href="eventbufferevent.about.callbacks.php" title="About buffer event callbacks">About buffer event callbacks</a>
                        </li>
                                                <li class="">
                            <a href="class.eventconfig.php" title="EventConfig">EventConfig</a>
                        </li>
                                                <li class="">
                            <a href="class.eventdnsbase.php" title="EventDnsBase">EventDnsBase</a>
                        </li>
                                                <li class="">
                            <a href="class.eventhttp.php" title="EventHttp">EventHttp</a>
                        </li>
                                                <li class="">
                            <a href="class.eventhttpconnection.php" title="EventHttpConnection">EventHttpConnection</a>
                        </li>
                                                <li class="">
                            <a href="class.eventhttprequest.php" title="EventHttpRequest">EventHttpRequest</a>
                        </li>
                                                <li class="">
                            <a href="class.eventlistener.php" title="EventListener">EventListener</a>
                        </li>
                                                <li class="">
                            <a href="class.eventsslcontext.php" title="EventSslContext">EventSslContext</a>
                        </li>
                                                <li class="">
                            <a href="class.eventutil.php" title="EventUtil">EventUtil</a>
                        </li>
                                                <li class="">
                            <a href="class.eventexception.php" title="EventException">EventException</a>
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
