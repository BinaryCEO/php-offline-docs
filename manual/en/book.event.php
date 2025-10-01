<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Event - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.event.php">
 <link rel="shorturl" href="https://www.php.net/event">
 <link rel="alternate" href="https://www.php.net/event" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.remote.other.php">
 <link rel="prev" href="https://www.php.net/manual/en/curlstringfile.construct.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.event.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.event.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.event.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.event.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.event.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.event.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.event.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.event.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.event.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.event.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.event.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.event.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Event" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Event - Manual" />
<meta name="twitter:description" content="Event" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Event - Manual" />
<meta itemprop="description" content="Event" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Event" />

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
        <a href="intro.event.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="curlstringfile.construct.php">
          &laquo; CURLStringFile::__construct        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      </ul>
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
            <option value='en/book.event.php' selected="selected">English</option>
            <option value='de/book.event.php'>German</option>
            <option value='es/book.event.php'>Spanish</option>
            <option value='fr/book.event.php'>French</option>
            <option value='it/book.event.php'>Italian</option>
            <option value='ja/book.event.php'>Japanese</option>
            <option value='pt_BR/book.event.php'>Brazilian Portuguese</option>
            <option value='ru/book.event.php'>Russian</option>
            <option value='tr/book.event.php'>Turkish</option>
            <option value='uk/book.event.php'>Ukrainian</option>
            <option value='zh/book.event.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.event" class="book">
 
 <h1 class="title">Event</h1>
 
 
 




 




 




 




 




 




 




 




 




 




 




 




 




 




 




 




 




 




 




 





<ul class="chunklist chunklist_book"><li><a href="intro.event.php">Introduction</a></li><li><a href="event.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="event.requirements.php">Requirements</a></li><li><a href="event.installation.php">Installation</a></li></ul></li><li><a href="event.examples.php">Examples</a></li><li><a href="event.flags.php">Event flags</a></li><li><a href="event.persistence.php">About event persistence</a></li><li><a href="event.callbacks.php">Event callbacks</a></li><li><a href="event.constructing.signal.events.php">Constructing signal events</a></li><li><a href="class.event.php">Event</a> — The Event class<ul class="chunklist chunklist_book chunklist_children"><li><a href="event.add.php">Event::add</a> — Makes event pending</li><li><a href="event.addsignal.php">Event::addSignal</a> — Alias of Event::add</li><li><a href="event.addtimer.php">Event::addTimer</a> — Alias of Event::add</li><li><a href="event.construct.php">Event::__construct</a> — Constructs Event object</li><li><a href="event.del.php">Event::del</a> — Makes event non-pending</li><li><a href="event.delsignal.php">Event::delSignal</a> — Alias of Event::del</li><li><a href="event.deltimer.php">Event::delTimer</a> — Alias of Event::del</li><li><a href="event.free.php">Event::free</a> — Make event non-pending and free resources allocated for this
  event</li><li><a href="event.getsupportedmethods.php">Event::getSupportedMethods</a> — Returns array with of the names of the methods supported in this version of Libevent</li><li><a href="event.pending.php">Event::pending</a> — Detects whether event is pending or scheduled</li><li><a href="event.set.php">Event::set</a> — Re-configures event</li><li><a href="event.setpriority.php">Event::setPriority</a> — Set event priority</li><li><a href="event.settimer.php">Event::setTimer</a> — Re-configures timer event</li><li><a href="event.signal.php">Event::signal</a> — Constructs signal event object</li><li><a href="event.timer.php">Event::timer</a> — Constructs timer event object</li></ul></li><li><a href="class.eventbase.php">EventBase</a> — The EventBase class<ul class="chunklist chunklist_book chunklist_children"><li><a href="eventbase.construct.php">EventBase::__construct</a> — Constructs EventBase object</li><li><a href="eventbase.dispatch.php">EventBase::dispatch</a> — Dispatch pending events</li><li><a href="eventbase.exit.php">EventBase::exit</a> — Stop dispatching events</li><li><a href="eventbase.free.php">EventBase::free</a> — Free resources allocated for this event base</li><li><a href="eventbase.getfeatures.php">EventBase::getFeatures</a> — Returns bitmask of features supported</li><li><a href="eventbase.getmethod.php">EventBase::getMethod</a> — Returns event method in use</li><li><a href="eventbase.gettimeofdaycached.php">EventBase::getTimeOfDayCached</a> — Returns the current event base time</li><li><a href="eventbase.gotexit.php">EventBase::gotExit</a> — Checks if the event loop was told to exit</li><li><a href="eventbase.gotstop.php">EventBase::gotStop</a> — Checks if the event loop was told to exit</li><li><a href="eventbase.loop.php">EventBase::loop</a> — Dispatch pending events</li><li><a href="eventbase.priorityinit.php">EventBase::priorityInit</a> — Sets number of priorities per event base</li><li><a href="eventbase.reinit.php">EventBase::reInit</a> — Re-initialize event base(after a fork)</li><li><a href="eventbase.stop.php">EventBase::stop</a> — Tells event_base to stop dispatching events</li></ul></li><li><a href="class.eventbuffer.php">EventBuffer</a> — The EventBuffer class<ul class="chunklist chunklist_book chunklist_children"><li><a href="eventbuffer.add.php">EventBuffer::add</a> — Append data to the end of an event buffer</li><li><a href="eventbuffer.addbuffer.php">EventBuffer::addBuffer</a> — Move all data from a buffer provided to the current instance of EventBuffer</li><li><a href="eventbuffer.appendfrom.php">EventBuffer::appendFrom</a> — Moves the specified number of bytes from a source buffer to the
  end of the current buffer</li><li><a href="eventbuffer.construct.php">EventBuffer::__construct</a> — Constructs EventBuffer object</li><li><a href="eventbuffer.copyout.php">EventBuffer::copyout</a> — Copies out specified number of bytes from the front of the buffer</li><li><a href="eventbuffer.drain.php">EventBuffer::drain</a> — Removes specified number of bytes from the front of the buffer
  without copying it anywhere</li><li><a href="eventbuffer.enablelocking.php">EventBuffer::enableLocking</a> — Description</li><li><a href="eventbuffer.expand.php">EventBuffer::expand</a> — Reserves space in buffer</li><li><a href="eventbuffer.freeze.php">EventBuffer::freeze</a> — Prevent calls that modify an event buffer from succeeding</li><li><a href="eventbuffer.lock.php">EventBuffer::lock</a> — Acquires a lock on buffer</li><li><a href="eventbuffer.prepend.php">EventBuffer::prepend</a> — Prepend data to the front of the buffer</li><li><a href="eventbuffer.prependbuffer.php">EventBuffer::prependBuffer</a> — Moves all data from source buffer to the front of current buffer</li><li><a href="eventbuffer.pullup.php">EventBuffer::pullup</a> — Linearizes data within buffer
  and returns it's contents as a string</li><li><a href="eventbuffer.read.php">EventBuffer::read</a> — Read data from an evbuffer and drain the bytes read</li><li><a href="eventbuffer.readfrom.php">EventBuffer::readFrom</a> — Read data from a file onto the end of the buffer</li><li><a href="eventbuffer.readline.php">EventBuffer::readLine</a> — Extracts a line from the front of the buffer</li><li><a href="eventbuffer.search.php">EventBuffer::search</a> — Scans the buffer for an occurrence of a string</li><li><a href="eventbuffer.searcheol.php">EventBuffer::searchEol</a> — Scans the buffer for an occurrence of an end of line</li><li><a href="eventbuffer.substr.php">EventBuffer::substr</a> — Substracts a portion of the buffer data</li><li><a href="eventbuffer.unfreeze.php">EventBuffer::unfreeze</a> — Re-enable calls that modify an event buffer</li><li><a href="eventbuffer.unlock.php">EventBuffer::unlock</a> — Releases lock acquired by EventBuffer::lock</li><li><a href="eventbuffer.write.php">EventBuffer::write</a> — Write contents of the buffer to a file or socket</li></ul></li><li><a href="class.eventbufferevent.php">EventBufferEvent</a> — The EventBufferEvent class<ul class="chunklist chunklist_book chunklist_children"><li><a href="eventbufferevent.close.php">EventBufferEvent::close</a> — Closes file descriptor associated with the current buffer event</li><li><a href="eventbufferevent.connect.php">EventBufferEvent::connect</a> — Connect buffer event's file descriptor to given address or
  UNIX socket</li><li><a href="eventbufferevent.connecthost.php">EventBufferEvent::connectHost</a> — Connects to a hostname with optionally asyncronous DNS resolving</li><li><a href="eventbufferevent.construct.php">EventBufferEvent::__construct</a> — Constructs EventBufferEvent object</li><li><a href="eventbufferevent.createpair.php">EventBufferEvent::createPair</a> — Creates two buffer events connected to each other</li><li><a href="eventbufferevent.disable.php">EventBufferEvent::disable</a> — Disable events read, write, or both on a buffer event</li><li><a href="eventbufferevent.enable.php">EventBufferEvent::enable</a> — Enable events read, write, or both on a buffer event</li><li><a href="eventbufferevent.free.php">EventBufferEvent::free</a> — Free a buffer event</li><li><a href="eventbufferevent.getdnserrorstring.php">EventBufferEvent::getDnsErrorString</a> — Returns string describing the last failed DNS lookup attempt</li><li><a href="eventbufferevent.getenabled.php">EventBufferEvent::getEnabled</a> — Returns bitmask of events currently enabled on the buffer event</li><li><a href="eventbufferevent.getinput.php">EventBufferEvent::getInput</a> — Returns underlying input buffer associated with current buffer
  event</li><li><a href="eventbufferevent.getoutput.php">EventBufferEvent::getOutput</a> — Returns underlying output buffer associated with current buffer
  event</li><li><a href="eventbufferevent.read.php">EventBufferEvent::read</a> — Read buffer's data</li><li><a href="eventbufferevent.readbuffer.php">EventBufferEvent::readBuffer</a> — Drains the entire contents of the input buffer and places them into buf</li><li><a href="eventbufferevent.setcallbacks.php">EventBufferEvent::setCallbacks</a> — Assigns read, write and event(status) callbacks</li><li><a href="eventbufferevent.setpriority.php">EventBufferEvent::setPriority</a> — Assign a priority to a bufferevent</li><li><a href="eventbufferevent.settimeouts.php">EventBufferEvent::setTimeouts</a> — Set the read and write timeout for a buffer event</li><li><a href="eventbufferevent.setwatermark.php">EventBufferEvent::setWatermark</a> — Adjusts read and/or write watermarks</li><li><a href="eventbufferevent.sslerror.php">EventBufferEvent::sslError</a> — Returns most recent OpenSSL error reported on the buffer event</li><li><a href="eventbufferevent.sslfilter.php">EventBufferEvent::sslFilter</a> — Create a new SSL buffer event to send its data over another buffer event</li><li><a href="eventbufferevent.sslgetcipherinfo.php">EventBufferEvent::sslGetCipherInfo</a> — Returns a textual description of the cipher</li><li><a href="eventbufferevent.sslgetciphername.php">EventBufferEvent::sslGetCipherName</a> — Returns the current cipher name of the SSL connection</li><li><a href="eventbufferevent.sslgetcipherversion.php">EventBufferEvent::sslGetCipherVersion</a> — Returns version of cipher used by current SSL connection</li><li><a href="eventbufferevent.sslgetprotocol.php">EventBufferEvent::sslGetProtocol</a> — Returns the name of the protocol used for current SSL connection</li><li><a href="eventbufferevent.sslrenegotiate.php">EventBufferEvent::sslRenegotiate</a> — Tells a bufferevent to begin SSL renegotiation</li><li><a href="eventbufferevent.sslsocket.php">EventBufferEvent::sslSocket</a> — Creates a new SSL buffer event to send its data over an SSL on a socket</li><li><a href="eventbufferevent.write.php">EventBufferEvent::write</a> — Adds data to a buffer event's output buffer</li><li><a href="eventbufferevent.writebuffer.php">EventBufferEvent::writeBuffer</a> — Adds contents of the entire buffer to a buffer event's output
  buffer</li></ul></li><li><a href="eventbufferevent.about.callbacks.php">About buffer event callbacks</a></li><li><a href="class.eventconfig.php">EventConfig</a> — The EventConfig class<ul class="chunklist chunklist_book chunklist_children"><li><a href="eventconfig.avoidmethod.php">EventConfig::avoidMethod</a> — Tells libevent to avoid specific event method</li><li><a href="eventconfig.construct.php">EventConfig::__construct</a> — Constructs EventConfig object</li><li><a href="eventconfig.requirefeatures.php">EventConfig::requireFeatures</a> — Enters a required event method feature that the application demands</li><li><a href="eventconfig.setflags.php">EventConfig::setFlags</a> — Sets one or more flags to configure the eventual EventBase will be initialized</li><li><a href="eventconfig.setmaxdispatchinterval.php">EventConfig::setMaxDispatchInterval</a> — Prevents priority inversion</li></ul></li><li><a href="class.eventdnsbase.php">EventDnsBase</a> — The EventDnsBase class<ul class="chunklist chunklist_book chunklist_children"><li><a href="eventdnsbase.addnameserverip.php">EventDnsBase::addNameserverIp</a> — Adds a nameserver to the DNS base</li><li><a href="eventdnsbase.addsearch.php">EventDnsBase::addSearch</a> — Adds a domain to the list of search domains</li><li><a href="eventdnsbase.clearsearch.php">EventDnsBase::clearSearch</a> — Removes all current search suffixes</li><li><a href="eventdnsbase.construct.php">EventDnsBase::__construct</a> — Constructs EventDnsBase object</li><li><a href="eventdnsbase.countnameservers.php">EventDnsBase::countNameservers</a> — Gets the number of configured nameservers</li><li><a href="eventdnsbase.loadhosts.php">EventDnsBase::loadHosts</a> — Loads a hosts file (in the same format as /etc/hosts) from hosts file</li><li><a href="eventdnsbase.parseresolvconf.php">EventDnsBase::parseResolvConf</a> — Scans the resolv.conf-formatted file</li><li><a href="eventdnsbase.setoption.php">EventDnsBase::setOption</a> — Set the value of a configuration option</li><li><a href="eventdnsbase.setsearchndots.php">EventDnsBase::setSearchNdots</a> — Set the 'ndots' parameter for searches</li></ul></li><li><a href="class.eventhttp.php">EventHttp</a> — The EventHttp class<ul class="chunklist chunklist_book chunklist_children"><li><a href="eventhttp.accept.php">EventHttp::accept</a> — Makes an HTTP server accept connections on the specified socket stream or resource</li><li><a href="eventhttp.addserveralias.php">EventHttp::addServerAlias</a> — Adds a server alias to the HTTP server object</li><li><a href="eventhttp.bind.php">EventHttp::bind</a> — Binds an HTTP server on the specified address and port</li><li><a href="eventhttp.construct.php">EventHttp::__construct</a> — Constructs EventHttp object (the HTTP server)</li><li><a href="eventhttp.removeserveralias.php">EventHttp::removeServerAlias</a> — Removes server alias</li><li><a href="eventhttp.setallowedmethods.php">EventHttp::setAllowedMethods</a> — Sets the what HTTP methods are supported in requests accepted by this server, and passed to user callbacks</li><li><a href="eventhttp.setcallback.php">EventHttp::setCallback</a> — Sets a callback for specified URI</li><li><a href="eventhttp.setdefaultcallback.php">EventHttp::setDefaultCallback</a> — Sets default callback to handle requests that are not caught by specific callbacks</li><li><a href="eventhttp.setmaxbodysize.php">EventHttp::setMaxBodySize</a> — Sets maximum request body size</li><li><a href="eventhttp.setmaxheaderssize.php">EventHttp::setMaxHeadersSize</a> — Sets maximum HTTP header size</li><li><a href="eventhttp.settimeout.php">EventHttp::setTimeout</a> — Sets the timeout for an HTTP request</li></ul></li><li><a href="class.eventhttpconnection.php">EventHttpConnection</a> — The EventHttpConnection class<ul class="chunklist chunklist_book chunklist_children"><li><a href="eventhttpconnection.construct.php">EventHttpConnection::__construct</a> — Constructs EventHttpConnection object</li><li><a href="eventhttpconnection.getbase.php">EventHttpConnection::getBase</a> — Returns event base associated with the connection</li><li><a href="eventhttpconnection.getpeer.php">EventHttpConnection::getPeer</a> — Gets the remote address and port associated with the connection</li><li><a href="eventhttpconnection.makerequest.php">EventHttpConnection::makeRequest</a> — Makes an HTTP request over the specified connection</li><li><a href="eventhttpconnection.setclosecallback.php">EventHttpConnection::setCloseCallback</a> — Set callback for connection close</li><li><a href="eventhttpconnection.setlocaladdress.php">EventHttpConnection::setLocalAddress</a> — Sets the IP address from which HTTP connections are made</li><li><a href="eventhttpconnection.setlocalport.php">EventHttpConnection::setLocalPort</a> — Sets the local port from which connections are made</li><li><a href="eventhttpconnection.setmaxbodysize.php">EventHttpConnection::setMaxBodySize</a> — Sets maximum body size for the connection</li><li><a href="eventhttpconnection.setmaxheaderssize.php">EventHttpConnection::setMaxHeadersSize</a> — Sets maximum header size</li><li><a href="eventhttpconnection.setretries.php">EventHttpConnection::setRetries</a> — Sets the retry limit for the connection</li><li><a href="eventhttpconnection.settimeout.php">EventHttpConnection::setTimeout</a> — Sets the timeout for the connection</li></ul></li><li><a href="class.eventhttprequest.php">EventHttpRequest</a> — The EventHttpRequest class<ul class="chunklist chunklist_book chunklist_children"><li><a href="eventhttprequest.addheader.php">EventHttpRequest::addHeader</a> — Adds an HTTP header to the headers of the request</li><li><a href="eventhttprequest.cancel.php">EventHttpRequest::cancel</a> — Cancels a pending HTTP request</li><li><a href="eventhttprequest.clearheaders.php">EventHttpRequest::clearHeaders</a> — Removes all output headers from the header list of the request</li><li><a href="eventhttprequest.closeconnection.php">EventHttpRequest::closeConnection</a> — Closes associated HTTP connection</li><li><a href="eventhttprequest.construct.php">EventHttpRequest::__construct</a> — Constructs EventHttpRequest object</li><li><a href="eventhttprequest.findheader.php">EventHttpRequest::findHeader</a> — Finds the value belonging a header</li><li><a href="eventhttprequest.free.php">EventHttpRequest::free</a> — Frees the object and removes associated events</li><li><a href="eventhttprequest.getbufferevent.php">EventHttpRequest::getBufferEvent</a> — Returns EventBufferEvent object</li><li><a href="eventhttprequest.getcommand.php">EventHttpRequest::getCommand</a> — Returns the request command(method)</li><li><a href="eventhttprequest.getconnection.php">EventHttpRequest::getConnection</a> — Returns EventHttpConnection object</li><li><a href="eventhttprequest.gethost.php">EventHttpRequest::getHost</a> — Returns the request host</li><li><a href="eventhttprequest.getinputbuffer.php">EventHttpRequest::getInputBuffer</a> — Returns the input buffer</li><li><a href="eventhttprequest.getinputheaders.php">EventHttpRequest::getInputHeaders</a> — Returns associative array of the input headers</li><li><a href="eventhttprequest.getoutputbuffer.php">EventHttpRequest::getOutputBuffer</a> — Returns the output buffer of the request</li><li><a href="eventhttprequest.getoutputheaders.php">EventHttpRequest::getOutputHeaders</a> — Returns associative array of the output headers</li><li><a href="eventhttprequest.getresponsecode.php">EventHttpRequest::getResponseCode</a> — Returns the response code</li><li><a href="eventhttprequest.geturi.php">EventHttpRequest::getUri</a> — Returns the request URI</li><li><a href="eventhttprequest.removeheader.php">EventHttpRequest::removeHeader</a> — Removes an HTTP header from the headers of the request</li><li><a href="eventhttprequest.senderror.php">EventHttpRequest::sendError</a> — Send an HTML error message to the client</li><li><a href="eventhttprequest.sendreply.php">EventHttpRequest::sendReply</a> — Send an HTML reply to the client</li><li><a href="eventhttprequest.sendreplychunk.php">EventHttpRequest::sendReplyChunk</a> — Send another data chunk as part of an ongoing chunked reply</li><li><a href="eventhttprequest.sendreplyend.php">EventHttpRequest::sendReplyEnd</a> — Complete a chunked reply, freeing the request as appropriate</li><li><a href="eventhttprequest.sendreplystart.php">EventHttpRequest::sendReplyStart</a> — Initiate a chunked reply</li></ul></li><li><a href="class.eventlistener.php">EventListener</a> — The EventListener class<ul class="chunklist chunklist_book chunklist_children"><li><a href="eventlistener.construct.php">EventListener::__construct</a> — Creates new connection listener associated with an event base</li><li><a href="eventlistener.disable.php">EventListener::disable</a> — Disables an event connect listener object</li><li><a href="eventlistener.enable.php">EventListener::enable</a> — Enables an event connect listener object</li><li><a href="eventlistener.getbase.php">EventListener::getBase</a> — Returns event base associated with the event listener</li><li><a href="eventlistener.getsocketname.php">EventListener::getSocketName</a> — Retreives the current address to which the
  listener's socket is bound</li><li><a href="eventlistener.setcallback.php">EventListener::setCallback</a> — The setCallback purpose</li><li><a href="eventlistener.seterrorcallback.php">EventListener::setErrorCallback</a> — Set event listener's error callback</li></ul></li><li><a href="class.eventsslcontext.php">EventSslContext</a> — The EventSslContext class<ul class="chunklist chunklist_book chunklist_children"><li><a href="eventsslcontext.construct.php">EventSslContext::__construct</a> — Constructs an OpenSSL context for use with Event classes</li></ul></li><li><a href="class.eventutil.php">EventUtil</a> — The EventUtil class<ul class="chunklist chunklist_book chunklist_children"><li><a href="eventutil.construct.php">EventUtil::__construct</a> — The abstract constructor</li><li><a href="eventutil.getlastsocketerrno.php">EventUtil::getLastSocketErrno</a> — Returns the most recent socket error number</li><li><a href="eventutil.getlastsocketerror.php">EventUtil::getLastSocketError</a> — Returns the most recent socket error</li><li><a href="eventutil.getsocketfd.php">EventUtil::getSocketFd</a> — Returns numeric file descriptor of a socket, or stream</li><li><a href="eventutil.getsocketname.php">EventUtil::getSocketName</a> — Retreives the current address to which the
  socket is bound</li><li><a href="eventutil.setsocketoption.php">EventUtil::setSocketOption</a> — Sets socket options</li><li><a href="eventutil.sslrandpoll.php">EventUtil::sslRandPoll</a> — Generates entropy by means of OpenSSL's RAND_poll()</li></ul></li><li><a href="class.eventexception.php">EventException</a> — The EventException class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/event/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.event%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.event&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.event.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120225">  <div class="votes">
    <div id="Vu120225">
    <a href="/manual/vote-note.php?id=120225&amp;page=book.event&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120225">
    <a href="/manual/vote-note.php?id=120225&amp;page=book.event&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120225" title="55% like this...">
    1
    </div>
  </div>
  <a href="#120225" class="name">
  <strong class="user"><em>grzegorz129 at gmail dot com</em></strong></a><a class="genanchor" href="#120225"> &para;</a><div class="date" title="2016-11-26 09:14"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120225">
<div class="phpcode"><code><span class="html">Stubs / headers for this library are available in IDE-agnostic format on GitHub: <a href="https://github.com/kiler129/pecl-event-stubs" rel="nofollow" target="_blank">https://github.com/kiler129/pecl-event-stubs</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.event&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.event.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.remote.other.php">Other Services</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.curl.php" title="cURL">cURL</a>
                        </li>
                                                <li class="current">
                            <a href="book.event.php" title="Event">Event</a>
                        </li>
                                                <li class="">
                            <a href="book.ftp.php" title="FTP">FTP</a>
                        </li>
                                                <li class="">
                            <a href="book.gearman.php" title="Gearman">Gearman</a>
                        </li>
                                                <li class="">
                            <a href="book.ldap.php" title="LDAP">LDAP</a>
                        </li>
                                                <li class="">
                            <a href="book.memcache.php" title="Memcache">Memcache</a>
                        </li>
                                                <li class="">
                            <a href="book.memcached.php" title="Memcached">Memcached</a>
                        </li>
                                                <li class="">
                            <a href="book.mqseries.php" title="mqseries">mqseries</a>
                        </li>
                                                <li class="">
                            <a href="book.network.php" title="Network">Network</a>
                        </li>
                                                <li class="">
                            <a href="book.rrd.php" title="RRD">RRD</a>
                        </li>
                                                <li class="">
                            <a href="book.scoutapm.php" title="ScoutAPM">ScoutAPM</a>
                        </li>
                                                <li class="">
                            <a href="book.snmp.php" title="SNMP">SNMP</a>
                        </li>
                                                <li class="">
                            <a href="book.sockets.php" title="Sockets">Sockets</a>
                        </li>
                                                <li class="">
                            <a href="book.ssh2.php" title="SSH2">SSH2</a>
                        </li>
                                                <li class="">
                            <a href="book.stomp.php" title="Stomp">Stomp</a>
                        </li>
                                                <li class="">
                            <a href="book.svm.php" title="SVM">SVM</a>
                        </li>
                                                <li class="">
                            <a href="book.svn.php" title="SVN">SVN</a>
                        </li>
                                                <li class="">
                            <a href="book.tcpwrap.php" title="TCP">TCP</a>
                        </li>
                                                <li class="">
                            <a href="book.varnish.php" title="Varnish">Varnish</a>
                        </li>
                                                <li class="">
                            <a href="book.yaz.php" title="YAZ">YAZ</a>
                        </li>
                                                <li class="">
                            <a href="book.zmq.php" title="0MQ messaging">0MQ messaging</a>
                        </li>
                                                <li class="">
                            <a href="book.zookeeper.php" title="ZooKeeper">ZooKeeper</a>
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
