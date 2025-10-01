<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pthreads - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.pthreads.php">
 <link rel="shorturl" href="https://www.php.net/pthreads">
 <link rel="alternate" href="https://www.php.net/pthreads" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.fileprocess.process.php">
 <link rel="prev" href="https://www.php.net/manual/en/parallel-sync.invoke.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.pthreads.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.pthreads.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.pthreads.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.pthreads.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.pthreads.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.pthreads.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.pthreads.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.pthreads.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.pthreads.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.pthreads.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.pthreads.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.pthreads.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="pthreads" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pthreads - Manual" />
<meta name="twitter:description" content="pthreads" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pthreads - Manual" />
<meta itemprop="description" content="pthreads" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="pthreads" />

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
        <a href="intro.pthreads.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="parallel-sync.invoke.php">
          &laquo; parallel\Sync::__invoke        </a>
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
            <option value='en/book.pthreads.php' selected="selected">English</option>
            <option value='de/book.pthreads.php'>German</option>
            <option value='es/book.pthreads.php'>Spanish</option>
            <option value='fr/book.pthreads.php'>French</option>
            <option value='it/book.pthreads.php'>Italian</option>
            <option value='ja/book.pthreads.php'>Japanese</option>
            <option value='pt_BR/book.pthreads.php'>Brazilian Portuguese</option>
            <option value='ru/book.pthreads.php'>Russian</option>
            <option value='tr/book.pthreads.php'>Turkish</option>
            <option value='uk/book.pthreads.php'>Ukrainian</option>
            <option value='zh/book.pthreads.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.pthreads" class="book">
 
 <h1 class="title">pthreads</h1>
 

 
 
 






 






 






 






 






 






 






 







<ul class="chunklist chunklist_book"><li><a href="intro.pthreads.php">Introduction</a></li><li><a href="pthreads.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="pthreads.requirements.php">Requirements</a></li><li><a href="pthreads.installation.php">Installation</a></li></ul></li><li><a href="pthreads.constants.php">Predefined Constants</a></li><li><a href="class.threaded.php">Threaded</a> — The Threaded class<ul class="chunklist chunklist_book chunklist_children"><li><a href="threaded.chunk.php">Threaded::chunk</a> — Manipulation</li><li><a href="threaded.count.php">Threaded::count</a> — Manipulation</li><li><a href="threaded.extend.php">Threaded::extend</a> — Runtime Manipulation</li><li><a href="thread.isrunning.php">Threaded::isRunning</a> — State Detection</li><li><a href="threaded.isterminated.php">Threaded::isTerminated</a> — State Detection</li><li><a href="threaded.merge.php">Threaded::merge</a> — Manipulation</li><li><a href="threaded.notify.php">Threaded::notify</a> — Synchronization</li><li><a href="threaded.notifyone.php">Threaded::notifyOne</a> — Synchronization</li><li><a href="threaded.pop.php">Threaded::pop</a> — Manipulation</li><li><a href="threaded.run.php">Threaded::run</a> — Execution</li><li><a href="threaded.shift.php">Threaded::shift</a> — Manipulation</li><li><a href="threaded.synchronized.php">Threaded::synchronized</a> — Synchronization</li><li><a href="threaded.wait.php">Threaded::wait</a> — Synchronization</li></ul></li><li><a href="class.thread.php">Thread</a> — The Thread class<ul class="chunklist chunklist_book chunklist_children"><li><a href="thread.getcreatorid.php">Thread::getCreatorId</a> — Identification</li><li><a href="thread.getcurrentthread.php">Thread::getCurrentThread</a> — Identification</li><li><a href="thread.getcurrentthreadid.php">Thread::getCurrentThreadId</a> — Identification</li><li><a href="thread.getthreadid.php">Thread::getThreadId</a> — Identification</li><li><a href="thread.isjoined.php">Thread::isJoined</a> — State Detection</li><li><a href="thread.isstarted.php">Thread::isStarted</a> — State Detection</li><li><a href="thread.join.php">Thread::join</a> — Synchronization</li><li><a href="thread.start.php">Thread::start</a> — Execution</li></ul></li><li><a href="class.worker.php">Worker</a> — The Worker class<ul class="chunklist chunklist_book chunklist_children"><li><a href="worker.collect.php">Worker::collect</a> — Collect references to completed tasks</li><li><a href="worker.getstacked.php">Worker::getStacked</a> — Gets the remaining stack size</li><li><a href="worker.isshutdown.php">Worker::isShutdown</a> — State Detection</li><li><a href="worker.shutdown.php">Worker::shutdown</a> — Shutdown the worker</li><li><a href="worker.stack.php">Worker::stack</a> — Stacking work</li><li><a href="worker.unstack.php">Worker::unstack</a> — Unstacking work</li></ul></li><li><a href="class.collectable.php">Collectable</a> — The Collectable interface<ul class="chunklist chunklist_book chunklist_children"><li><a href="collectable.isgarbage.php">Collectable::isGarbage</a> — Determine whether an object has been marked as garbage</li></ul></li><li><a href="class.pool.php">Pool</a> — The Pool class<ul class="chunklist chunklist_book chunklist_children"><li><a href="pool.collect.php">Pool::collect</a> — Collect references to completed tasks</li><li><a href="pool.construct.php">Pool::__construct</a> — Creates a new Pool of Workers</li><li><a href="pool.resize.php">Pool::resize</a> — Resize the Pool</li><li><a href="pool.shutdown.php">Pool::shutdown</a> — Shutdown all workers</li><li><a href="pool.submit.php">Pool::submit</a> — Submits an object for execution</li><li><a href="pool.submitTo.php">Pool::submitTo</a> — Submits a task to a specific worker for execution</li></ul></li><li><a href="class.volatile.php">Volatile</a> — The Volatile class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pthreads/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.pthreads%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.pthreads&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.pthreads.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121173">  <div class="votes">
    <div id="Vu121173">
    <a href="/manual/vote-note.php?id=121173&amp;page=book.pthreads&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121173">
    <a href="/manual/vote-note.php?id=121173&amp;page=book.pthreads&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121173" title="79% like this...">
    28
    </div>
  </div>
  <a href="#121173" class="name">
  <strong class="user"><em>anonymous at example dot com</em></strong></a><a class="genanchor" href="#121173"> &para;</a><div class="date" title="2017-06-02 03:19"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121173">
<div class="phpcode"><code><span class="html">Here are some notes regarding PHP pThreads v3 that I have gathered:<br />-namespace: It does not understand namespaces. <br />-globals: It won't serialize GLOBALS at all! And will not register new ones.<br />-classes: It registers new classes okay.<br />-functions: Will not register ANY functions - they must all be in static classes. It does understand PHP native functions. <br />-consts: previous constants will transfer over. Don't make any new ones thou!<br />-pThreads only work in CLI - of course!<br />-If a thread crashes it automatically gets recreated.<br />-In order to 'force kill' any thread the parent must be killed. Or wait until all other tasks queued are complete and then terminate.<br />-Anything registered in a pThread does not seem to join the main thread ... which is good!<br />-pThreads seem to be very powerful on multi-core environments, just need to be careful on system resources... it can and will lock up a system if mis-configured.<br />-Finally, finding help for PHP pThreads is slim to none... especially v3!<br /><br />Good luck!</span></code></div>
  </div>
 </div>
  <div class="note" id="125640">  <div class="votes">
    <div id="Vu125640">
    <a href="/manual/vote-note.php?id=125640&amp;page=book.pthreads&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125640">
    <a href="/manual/vote-note.php?id=125640&amp;page=book.pthreads&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125640" title="72% like this...">
    8
    </div>
  </div>
  <a href="#125640" class="name">
  <strong class="user"><em>meadowsjared at gmail dot com</em></strong></a><a class="genanchor" href="#125640"> &para;</a><div class="date" title="2020-12-29 04:49"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125640">
<div class="phpcode"><code><span class="html">In this example, it shows how to use a threaded with a pool to get an array of results, using pThreads v3.2.1 and php 7.3.23<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">TestWork </span><span class="keyword">extends </span><span class="default">Threaded </span><span class="keyword">{<br /></span><span class="comment">//updated version that works with pThreads v3.2.1 and php 7.3.23<br />    </span><span class="keyword">protected </span><span class="default">$complete</span><span class="keyword">;<br />    </span><span class="comment">//$pData is the data sent to your worker thread to do it's job.<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$pData</span><span class="keyword">) {<br />        </span><span class="comment">//transfer all the variables to local variables<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">testData </span><span class="keyword">= </span><span class="default">$pData</span><span class="keyword">;<br />    }<br />    </span><span class="comment">//This is where all of your work will be done.<br />    </span><span class="keyword">public function </span><span class="default">run</span><span class="keyword">() {<br />        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">2000000</span><span class="keyword">); </span><span class="comment">//sleep 2 seconds to simulate a large job<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">isDone</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">complete</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">ExamplePool </span><span class="keyword">extends </span><span class="default">Pool </span><span class="keyword">{<br />    public </span><span class="default">$data </span><span class="keyword">= array(); </span><span class="comment">// used to return data after we're done<br />    </span><span class="keyword">private </span><span class="default">$numTasks </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="comment">// counter used to know when we're done<br />    /**<br />     * override the submit function from the parent<br />     * to keep track of our jobs<br />     */<br />    </span><span class="keyword">public function </span><span class="default">submit</span><span class="keyword">(</span><span class="default">Threaded $task</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numTasks</span><span class="keyword">++;<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">submit</span><span class="keyword">(</span><span class="default">$task</span><span class="keyword">);<br />    }<br />    </span><span class="comment">/**<br />     * used to wait until all workers are done<br />     */<br />    </span><span class="keyword">public function </span><span class="default">process</span><span class="keyword">() {<br />        </span><span class="comment">// Run this loop as long as we have<br />        // jobs in the pool<br />        </span><span class="keyword">while (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">) &lt; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numTasks</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">collect</span><span class="keyword">(function (</span><span class="default">TestWork $task</span><span class="keyword">) {<br />                </span><span class="comment">// If a task was marked as done<br />                // collect its results<br />                </span><span class="keyword">if (</span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">isDone</span><span class="keyword">()) {<br />                    </span><span class="default">$tmpObj </span><span class="keyword">= new </span><span class="default">stdclass</span><span class="keyword">();<br />                    </span><span class="default">$tmpObj</span><span class="keyword">-&gt;</span><span class="default">complete </span><span class="keyword">= </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">complete</span><span class="keyword">;<br />                    </span><span class="comment">//this is how you get your completed data back out [accessed by $pool-&gt;process()]<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[] = </span><span class="default">$tmpObj</span><span class="keyword">;<br />                }<br />                return </span><span class="default">$task</span><span class="keyword">-&gt;</span><span class="default">isDone</span><span class="keyword">();<br />            });<br />        }<br />        </span><span class="comment">// All jobs are done<br />        // we can shutdown the pool<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shutdown</span><span class="keyword">();<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$pool </span><span class="keyword">= new </span><span class="default">ExamplePool</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">$testData </span><span class="keyword">= </span><span class="string">'asdf'</span><span class="keyword">;<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">5</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">submit</span><span class="keyword">(new </span><span class="default">TestWork</span><span class="keyword">(</span><span class="default">$testData</span><span class="keyword">));<br />}<br /></span><span class="default">$retArr </span><span class="keyword">= </span><span class="default">$pool</span><span class="keyword">-&gt;</span><span class="default">process</span><span class="keyword">(); </span><span class="comment">//get all of the results<br /></span><span class="keyword">echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$retArr</span><span class="keyword">); </span><span class="comment">//return the array of results (and maybe errors)<br /></span><span class="keyword">echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114457">  <div class="votes">
    <div id="Vu114457">
    <a href="/manual/vote-note.php?id=114457&amp;page=book.pthreads&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114457">
    <a href="/manual/vote-note.php?id=114457&amp;page=book.pthreads&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114457" title="55% like this...">
    10
    </div>
  </div>
  <a href="#114457" class="name">
  <strong class="user"><em>jasonrlester at yahoo dot com</em></strong></a><a class="genanchor" href="#114457"> &para;</a><div class="date" title="2014-02-23 12:08"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114457">
<div class="phpcode"><code><span class="html">Note that this extension *is* a high level implementation of POSIX threads, including on Windows (which is why pthreadsV*.dll is required)</span></code></div>
  </div>
 </div>
  <div class="note" id="115576">  <div class="votes">
    <div id="Vu115576">
    <a href="/manual/vote-note.php?id=115576&amp;page=book.pthreads&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115576">
    <a href="/manual/vote-note.php?id=115576&amp;page=book.pthreads&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115576" title="57% like this...">
    6
    </div>
  </div>
  <a href="#115576" class="name">
  <strong class="user"><em>admin at deosnet dot com</em></strong></a><a class="genanchor" href="#115576"> &para;</a><div class="date" title="2014-08-19 10:01"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115576">
<div class="phpcode"><code><span class="html">Hello,<br /><br />WARNING : When using Stackable objects in callable functions by your Threads, you must be very careful if you use it as an array. Indeed, if you do not copy your Stackable "array" in a local variable, the execution time can drop drastically !<br /><br />Also, if you want to modify an array() in a function, you will also store in a local variable in order that your array is in a thread-safe context.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.pthreads&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.pthreads.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.fileprocess.process.php">Process Control Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.eio.php" title="Eio">Eio</a>
                        </li>
                                                <li class="">
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
                                                <li class="current">
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
