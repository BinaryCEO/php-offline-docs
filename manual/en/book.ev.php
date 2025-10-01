<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Ev - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.ev.php">
 <link rel="shorturl" href="https://www.php.net/ev">
 <link rel="alternate" href="https://www.php.net/ev" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.fileprocess.process.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.eio-write.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.ev.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.ev.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.ev.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.ev.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.ev.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.ev.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.ev.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.ev.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.ev.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.ev.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.ev.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.ev.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Ev" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Ev - Manual" />
<meta name="twitter:description" content="Ev" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Ev - Manual" />
<meta itemprop="description" content="Ev" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Ev" />

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
        <a href="intro.ev.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.eio-write.php">
          &laquo; eio_write        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      </ul>
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
            <option value='en/book.ev.php' selected="selected">English</option>
            <option value='de/book.ev.php'>German</option>
            <option value='es/book.ev.php'>Spanish</option>
            <option value='fr/book.ev.php'>French</option>
            <option value='it/book.ev.php'>Italian</option>
            <option value='ja/book.ev.php'>Japanese</option>
            <option value='pt_BR/book.ev.php'>Brazilian Portuguese</option>
            <option value='ru/book.ev.php'>Russian</option>
            <option value='tr/book.ev.php'>Turkish</option>
            <option value='uk/book.ev.php'>Ukrainian</option>
            <option value='zh/book.ev.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.ev" class="book">
 
 <h1 class="title">Ev</h1>
 
 

 




 




 




 




 




 




 




 




 




 




 




 




 




 




 




 




 




 




 





<ul class="chunklist chunklist_book"><li><a href="intro.ev.php">Introduction</a></li><li><a href="ev.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ev.requirements.php">Requirements</a></li><li><a href="ev.installation.php">Installation</a></li></ul></li><li><a href="ev.examples.php">Examples</a></li><li><a href="ev.watchers.php">Watchers</a></li><li><a href="ev.watcher-callbacks.php">Watcher callbacks</a></li><li><a href="ev.periodic-modes.php">Periodic watcher operation modes</a></li><li><a href="class.ev.php">Ev</a> — The Ev class<ul class="chunklist chunklist_book chunklist_children"><li><a href="ev.backend.php">Ev::backend</a> — Returns an integer describing the backend used by libev</li><li><a href="ev.depth.php">Ev::depth</a> — Returns recursion depth</li><li><a href="ev.embeddablebackends.php">Ev::embeddableBackends</a> — Returns the set of backends that are embeddable in other event loops</li><li><a href="ev.feedsignal.php">Ev::feedSignal</a> — Feed a signal event info Ev</li><li><a href="ev.feedsignalevent.php">Ev::feedSignalEvent</a> — Feed signal event into the default loop</li><li><a href="ev.iteration.php">Ev::iteration</a> — Return the number of times the default event loop has polled for new
  events</li><li><a href="ev.now.php">Ev::now</a> — Returns the time when the last iteration of the default event
  loop has started</li><li><a href="ev.nowupdate.php">Ev::nowUpdate</a> — Establishes the current time by querying the kernel, updating the time
    returned by Ev::now in the progress</li><li><a href="ev.recommendedbackends.php">Ev::recommendedBackends</a> — Returns a bit mask of recommended backends for current
  platform</li><li><a href="ev.resume.php">Ev::resume</a> — Resume previously suspended default event loop</li><li><a href="ev.run.php">Ev::run</a> — Begin checking for events and calling callbacks for the default
  loop</li><li><a href="ev.sleep.php">Ev::sleep</a> — Block the process for the given number of seconds</li><li><a href="ev.stop.php">Ev::stop</a> — Stops the default event loop</li><li><a href="ev.supportedbackends.php">Ev::supportedBackends</a> — Returns the set of backends supported by current libev
  configuration</li><li><a href="ev.suspend.php">Ev::suspend</a> — Suspend the default event loop</li><li><a href="ev.time.php">Ev::time</a> — Returns the current time in fractional seconds since the epoch</li><li><a href="ev.verify.php">Ev::verify</a> — Performs internal consistency checks(for debugging)</li></ul></li><li><a href="class.evcheck.php">EvCheck</a> — The EvCheck class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evcheck.construct.php">EvCheck::__construct</a> — Constructs the EvCheck watcher object</li><li><a href="evcheck.createstopped.php">EvCheck::createStopped</a> — Create instance of a stopped EvCheck watcher</li></ul></li><li><a href="class.evchild.php">EvChild</a> — The EvChild class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evchild.construct.php">EvChild::__construct</a> — Constructs the EvChild watcher object</li><li><a href="evchild.createstopped.php">EvChild::createStopped</a> — Create instance of a stopped EvCheck watcher</li><li><a href="evchild.set.php">EvChild::set</a> — Configures the watcher</li></ul></li><li><a href="class.evembed.php">EvEmbed</a> — The EvEmbed class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evembed.construct.php">EvEmbed::__construct</a> — Constructs the EvEmbed object</li><li><a href="evembed.createstopped.php">EvEmbed::createStopped</a> — Create stopped EvEmbed watcher object</li><li><a href="evembed.set.php">EvEmbed::set</a> — Configures the watcher</li><li><a href="evembed.sweep.php">EvEmbed::sweep</a> — Make a single, non-blocking sweep over the embedded loop</li></ul></li><li><a href="class.evfork.php">EvFork</a> — The EvFork class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evfork.construct.php">EvFork::__construct</a> — Constructs the EvFork watcher object</li><li><a href="evfork.createstopped.php">EvFork::createStopped</a> — Creates a stopped instance of EvFork watcher class</li></ul></li><li><a href="class.evidle.php">EvIdle</a> — The EvIdle class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evidle.construct.php">EvIdle::__construct</a> — Constructs the EvIdle watcher object</li><li><a href="evidle.createstopped.php">EvIdle::createStopped</a> — Creates instance of a stopped EvIdle watcher object</li></ul></li><li><a href="class.evio.php">EvIo</a> — The EvIo class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evio.construct.php">EvIo::__construct</a> — Constructs EvIo watcher object</li><li><a href="evio.createstopped.php">EvIo::createStopped</a> — Create stopped EvIo watcher object</li><li><a href="evio.set.php">EvIo::set</a> — Configures the watcher</li></ul></li><li><a href="class.evloop.php">EvLoop</a> — The EvLoop class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evloop.backend.php">EvLoop::backend</a> — Returns an integer describing the backend used by libev</li><li><a href="evloop.check.php">EvLoop::check</a> — Creates EvCheck object associated with the current event loop
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
  loop instance</li><li><a href="evloop.verify.php">EvLoop::verify</a> — Performs internal consistency checks(for debugging)</li></ul></li><li><a href="class.evperiodic.php">EvPeriodic</a> — The EvPeriodic class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evperiodic.again.php">EvPeriodic::again</a> — Simply stops and restarts the periodic watcher again</li><li><a href="evperiodic.at.php">EvPeriodic::at</a> — Returns the absolute time that this
  watcher is supposed to trigger next</li><li><a href="evperiodic.construct.php">EvPeriodic::__construct</a> — Constructs EvPeriodic watcher object</li><li><a href="evperiodic.createstopped.php">EvPeriodic::createStopped</a> — Create a stopped EvPeriodic watcher</li><li><a href="evperiodic.set.php">EvPeriodic::set</a> — Configures the watcher</li></ul></li><li><a href="class.evprepare.php">EvPrepare</a> — The EvPrepare class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evprepare.construct.php">EvPrepare::__construct</a> — Constructs EvPrepare watcher object</li><li><a href="evprepare.createstopped.php">EvPrepare::createStopped</a> — Creates a stopped instance of EvPrepare watcher</li></ul></li><li><a href="class.evsignal.php">EvSignal</a> — The EvSignal class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evsignal.construct.php">EvSignal::__construct</a> — Constructs EvSignal watcher object</li><li><a href="evsignal.createstopped.php">EvSignal::createStopped</a> — Create stopped EvSignal watcher object</li><li><a href="evsignal.set.php">EvSignal::set</a> — Configures the watcher</li></ul></li><li><a href="class.evstat.php">EvStat</a> — The EvStat class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evstat.attr.php">EvStat::attr</a> — Returns the values most recently detected by Ev</li><li><a href="evstat.construct.php">EvStat::__construct</a> — Constructs EvStat watcher object</li><li><a href="evstat.createstopped.php">EvStat::createStopped</a> — Create a stopped EvStat watcher object</li><li><a href="evstat.prev.php">EvStat::prev</a> — Returns the previous set of values returned by EvStat::attr</li><li><a href="evstat.set.php">EvStat::set</a> — Configures the watcher</li><li><a href="evstat.stat.php">EvStat::stat</a> — Initiates the stat call</li></ul></li><li><a href="class.evtimer.php">EvTimer</a> — The EvTimer class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evtimer.again.php">EvTimer::again</a> — Restarts the timer watcher</li><li><a href="evtimer.construct.php">EvTimer::__construct</a> — Constructs an EvTimer watcher object</li><li><a href="evtimer.createstopped.php">EvTimer::createStopped</a> — Creates EvTimer stopped watcher object</li><li><a href="evtimer.set.php">EvTimer::set</a> — Configures the watcher</li></ul></li><li><a href="class.evwatcher.php">EvWatcher</a> — The EvWatcher class<ul class="chunklist chunklist_book chunklist_children"><li><a href="evwatcher.clear.php">EvWatcher::clear</a> — Clear watcher pending status</li><li><a href="evwatcher.construct.php">EvWatcher::__construct</a> — Abstract constructor of a watcher object</li><li><a href="evwatcher.feed.php">EvWatcher::feed</a> — Feeds the given revents set into the event loop</li><li><a href="evwatcher.getloop.php">EvWatcher::getLoop</a> — Returns the loop responsible for the watcher</li><li><a href="evwatcher.invoke.php">EvWatcher::invoke</a> — Invokes the watcher callback with the given received events bit
  mask</li><li><a href="evwatcher.keepalive.php">EvWatcher::keepalive</a> — Configures whether to keep the loop from returning</li><li><a href="evwatcher.setcallback.php">EvWatcher::setCallback</a> — Sets new callback for the watcher</li><li><a href="evwatcher.start.php">EvWatcher::start</a> — Starts the watcher</li><li><a href="evwatcher.stop.php">EvWatcher::stop</a> — Stops the watcher</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ev/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.ev%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.ev&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.ev.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.fileprocess.process.php">Process Control Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.eio.php" title="Eio">Eio</a>
                        </li>
                                                <li class="current">
                            <a href="book.ev.php" title="Ev">Ev</a>
                        </li>
                                                <li class="">
                            <a href="book.expect.php" title="Expect">Expect</a>
                        </li>
                                                <li class="">
                            <a href="book.pcntl.php" title="PCNTL">PCNTL</a>
                        </li>
                                                <li class="">
                            <a href="book.posix.php" title="POSIX">POSIX</a>
                        </li>
                                                <li class="">
                            <a href="book.exec.php" title="Program execution">Program execution</a>
                        </li>
                                                <li class="">
                            <a href="book.parallel.php" title="parallel">parallel</a>
                        </li>
                                                <li class="">
                            <a href="book.pthreads.php" title="pthreads">pthreads</a>
                        </li>
                                                <li class="">
                            <a href="book.sem.php" title="Semaphore">Semaphore</a>
                        </li>
                                                <li class="">
                            <a href="book.shmop.php" title="Shared Memory">Shared Memory</a>
                        </li>
                                                <li class="">
                            <a href="book.sync.php" title="Sync">Sync</a>
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
