<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Introduction - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/intro.pthreads.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/intro.pthreads.php">
 <link rel="alternate" href="https://www.php.net/manual/en/intro.pthreads.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.pthreads.php">
 <link rel="prev" href="https://www.php.net/manual/en/book.pthreads.php">
 <link rel="next" href="https://www.php.net/manual/en/pthreads.setup.php">

 <link rel="alternate" href="https://www.php.net/manual/en/intro.pthreads.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/intro.pthreads.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/intro.pthreads.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/intro.pthreads.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/intro.pthreads.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/intro.pthreads.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/intro.pthreads.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/intro.pthreads.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/intro.pthreads.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/intro.pthreads.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/intro.pthreads.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Introduction" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Introduction - Manual" />
<meta name="twitter:description" content="Introduction" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Introduction - Manual" />
<meta itemprop="description" content="Introduction" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Introduction" />

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
        <a href="pthreads.setup.php">
          Installing/Configuring &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="book.pthreads.php">
          &laquo; pthreads        </a>
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
            <option value='en/intro.pthreads.php' selected="selected">English</option>
            <option value='de/intro.pthreads.php'>German</option>
            <option value='es/intro.pthreads.php'>Spanish</option>
            <option value='fr/intro.pthreads.php'>French</option>
            <option value='it/intro.pthreads.php'>Italian</option>
            <option value='ja/intro.pthreads.php'>Japanese</option>
            <option value='pt_BR/intro.pthreads.php'>Brazilian Portuguese</option>
            <option value='ru/intro.pthreads.php'>Russian</option>
            <option value='tr/intro.pthreads.php'>Turkish</option>
            <option value='uk/intro.pthreads.php'>Ukrainian</option>
            <option value='zh/intro.pthreads.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="intro.pthreads" class="preface">
  <h1 class="title">Introduction</h1>
  <p class="para">
   pthreads is an object-orientated API that provides all of the tools needed
   for multi-threading in PHP. PHP applications can create, read, write,
   execute and synchronize with Threads, Workers and Threaded objects.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    This extension is considered unmaintained and dead.
   </p>
  </div>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="simpara">
    Consider using <a href="book.parallel.php" class="link">parallel</a> instead.
   </p>
  </div>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    The pthreads extension cannot be used in a web server environment.
    Threading in PHP is therefore restricted to CLI-based applications only.
   </p>
  </div>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    pthreads (v3) can only be used with PHP 7.2+: This is due to ZTS
    mode being unsafe in 7.0 and 7.1.
   </p>
  </div>
  <p class="para">
   The <span class="classname"><a href="class.threaded.php" class="classname">Threaded</a></span> class forms the basis of the
   functionality that allows pthreads to operate. It exposes synchronization
   methods and some useful interfaces for the programmer.
  </p>
  <p class="para">
   The <span class="classname"><a href="class.thread.php" class="classname">Thread</a></span> class enables for threads to be created by
   simply extending it and implementing a <code class="literal">run</code> method. Any
   members can be written to and read by any context with a reference to the
   thread. Any context can also execute any public and protected methods. 
   The body of the run method will be executed in a separate thread when the
   <span class="methodname"><a href="thread.start.php" class="methodname">Thread::start()</a></span> method of the implementation is
   called from the context that created it. Only the context that creates a
   thread can start and join it.
  </p>
  <p class="para">
   The <span class="classname"><a href="class.worker.php" class="classname">Worker</a></span> class has a persistent state, and will be
   available from the call to <span class="methodname"><a href="thread.start.php" class="methodname">Thread::start()</a></span> (an
   inherited method) until the object goes out of scope, or is explicitly
   shutdown (via <span class="methodname"><a href="worker.shutdown.php" class="methodname">Worker::shutdown()</a></span>). Any context with a
   reference to the worker object can stack tasks onto the Worker (via 
   <span class="methodname"><a href="worker.stack.php" class="methodname">Worker::stack()</a></span>), where these tasks will be executed
   by the worker in a separate thread. The <code class="literal">run</code> method of a
   worker object will be executed before any objects on the worker&#039;s stack,
   enabling for resources to be initialized that the objects to be executed may
   need.
  </p>
  <p class="para">
   The <span class="classname"><a href="class.pool.php" class="classname">Pool</a></span> class is used to create a group of workers
   to distribute <span class="classname"><a href="class.threaded.php" class="classname">Threaded</a></span> objects amongst them. It is
   the easiest and most efficient way of using multiple threads in PHP
   applications.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    The <span class="classname"><a href="class.pool.php" class="classname">Pool</a></span> class does not extend the
    <span class="classname"><a href="class.threaded.php" class="classname">Threaded</a></span> class, and so pool-based objects are
    considered a normal PHP objects. As such, its instances of it should not be
    shared amongst different contexts.
   </p>
  </div>
  <p class="para">
   The <span class="classname"><a href="class.volatile.php" class="classname">Volatile</a></span> class is new to pthreads v3. It is used
   to denote mutable <span class="classname"><a href="class.threaded.php" class="classname">Threaded</a></span> properties of
   <span class="classname"><a href="class.threaded.php" class="classname">Threaded</a></span> classes (since these are now immutable by
   default). It is also used to store PHP arrays in
   <span class="classname"><a href="class.threaded.php" class="classname">Threaded</a></span> contexts.
  </p>
  <p class="para">
   Synchronization is an important ability when threading. All of the objects
   that pthreads creates have built in synchronization in the (which will be
   familiar to java programmers) form of
   <span class="methodname"><a href="threaded.wait.php" class="methodname">Threaded::wait()</a></span> and
   <span class="methodname"><a href="threaded.notify.php" class="methodname">Threaded::notify()</a></span>. Calling
   <span class="methodname"><a href="threaded.wait.php" class="methodname">Threaded::wait()</a></span> on an object will cause the context
   to wait for another context to call
   <span class="methodname"><a href="threaded.notify.php" class="methodname">Threaded::notify()</a></span> on the same object. This mechanism
   allows for powerful synchronization between <span class="classname"><a href="class.threaded.php" class="classname">Threaded</a></span>
   objects in PHP.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
  <p class="para">
   Any objects that are intended for use in the multi-threaded parts of your
   application should extend <span class="classname"><a href="class.threaded.php" class="classname">Threaded</a></span>.
  </p>
  </div>
  <p class="para">
 Data Storage:
 As a rule of thumb, any data type that can be serialized can be used as a member of a Threaded object, it can be read and written from any context with a reference to the Threaded Object. 
 Not every type of data is stored serially, basic types are stored in their true form. 
 Complex types, Arrays, and Objects that are not Threaded are stored serially; they can be read and written to the Threaded Object from any context with a reference.
 With the exception of Threaded Objects any reference used to set a member of a Threaded Object is separated from the reference in the Threaded Object; 
 the same data can be read directly from the Threaded Object at any time by any context with a reference to the Threaded Object.
  </p>
  <p class="para">
 Static Members:
 When a new context is created ( Thread or Worker ), they are generally copied, but resources and objects with internal state are nullified (for safety reasons). This allows them to function as a kind of thread local storage. For example, upon starting the context, a class whose static members include connection information for a database server, and the connection itself, will only have the simple connection information copied, not the connection. Allowing the new context to initiate a connection in the same way as the context that created it, storing the connection in the same place without affecting the original context.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
  <p class="para">
 When print_r, var_dump and other object debug functions are executed, they do not include recursion protection.
  </p>
  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
 Resources:
 The extensions and functionality that define resources in PHP are completely unprepared for this kind of environment; pthreads makes provisions for Resources to be shared among contexts, however, for most types of resource it should be considered unsafe. Extreme caution and care should be used when sharing resources among contexts.
   </p>
  </p></blockquote>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
 In the environment which pthreads executes, some restrictions and limitations are necessary in order to provide a stable environment.
   </p>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pthreads/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fintro.pthreads%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=intro.pthreads&amp;repo=en&amp;redirect=https://www.php.net/manual/en/intro.pthreads.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124131">  <div class="votes">
    <div id="Vu124131">
    <a href="/manual/vote-note.php?id=124131&amp;page=intro.pthreads&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124131">
    <a href="/manual/vote-note.php?id=124131&amp;page=intro.pthreads&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124131" title="75% like this...">
    27
    </div>
  </div>
  <a href="#124131" class="name">
  <strong class="user"><em>Anon</em></strong></a><a class="genanchor" href="#124131"> &para;</a><div class="date" title="2019-08-23 04:40"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124131">
<div class="phpcode"><code><span class="html">Joe Watkins the creator of pthreads and parallel announced in February this year (2019) that pthreads will no longer be maintained after PHP 7.4 due to architectural flaws.<br /><br />For the future instead of pthread, parallel should be used.<br /><br />Announcement: <br /><a href="https://github.com/krakjoe/pthreads/issues/929#issue-410636734" rel="nofollow" target="_blank">https://github.com/krakjoe/pthreads/issues/929#issue-410636734</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=intro.pthreads&amp;repo=en&amp;redirect=https://www.php.net/manual/en/intro.pthreads.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.pthreads.php">pthreads</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
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
                                                <li class="">
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
