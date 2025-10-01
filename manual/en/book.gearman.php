<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Gearman - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.gearman.php">
 <link rel="shorturl" href="https://www.php.net/gearman">
 <link rel="alternate" href="https://www.php.net/gearman" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.remote.other.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.ftp-connection.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.gearman.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.gearman.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.gearman.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.gearman.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.gearman.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.gearman.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.gearman.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.gearman.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.gearman.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.gearman.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.gearman.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.gearman.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gearman" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Gearman - Manual" />
<meta name="twitter:description" content="Gearman" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Gearman - Manual" />
<meta itemprop="description" content="Gearman" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gearman" />

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
        <a href="intro.gearman.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.ftp-connection.php">
          &laquo; FTP\Connection        </a>
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
            <option value='en/book.gearman.php' selected="selected">English</option>
            <option value='de/book.gearman.php'>German</option>
            <option value='es/book.gearman.php'>Spanish</option>
            <option value='fr/book.gearman.php'>French</option>
            <option value='it/book.gearman.php'>Italian</option>
            <option value='ja/book.gearman.php'>Japanese</option>
            <option value='pt_BR/book.gearman.php'>Brazilian Portuguese</option>
            <option value='ru/book.gearman.php'>Russian</option>
            <option value='tr/book.gearman.php'>Turkish</option>
            <option value='uk/book.gearman.php'>Ukrainian</option>
            <option value='zh/book.gearman.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.gearman" class="book">
 
 <h1 class="title">Gearman</h1>
 

 

 







 







 







 




 




 




 




 






<ul class="chunklist chunklist_book"><li><a href="intro.gearman.php">Introduction</a></li><li><a href="gearman.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="gearman.requirements.php">Requirements</a></li><li><a href="gearman.installation.php">Installation</a></li></ul></li><li><a href="gearman.constants.php">Predefined Constants</a></li><li><a href="gearman.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="gearman.examples-reverse.php">Basic usage</a></li><li><a href="gearman.examples-reverse-bg.php">Basic Gearman client and worker, background</a></li><li><a href="gearman.examples-reverse-task.php">Basic Gearman client and worker, submitting tasks</a></li></ul></li><li><a href="class.gearmanclient.php">GearmanClient</a> — The GearmanClient class<ul class="chunklist chunklist_book chunklist_children"><li><a href="gearmanclient.addoptions.php">GearmanClient::addOptions</a> — Add client options</li><li><a href="gearmanclient.addserver.php">GearmanClient::addServer</a> — Add a job server to the client</li><li><a href="gearmanclient.addservers.php">GearmanClient::addServers</a> — Add a list of job servers to the client</li><li><a href="gearmanclient.addtask.php">GearmanClient::addTask</a> — Add a task to be run in parallel</li><li><a href="gearmanclient.addtaskbackground.php">GearmanClient::addTaskBackground</a> — Add a background task to be run in parallel</li><li><a href="gearmanclient.addtaskhigh.php">GearmanClient::addTaskHigh</a> — Add a high priority task to run in parallel</li><li><a href="gearmanclient.addtaskhighbackground.php">GearmanClient::addTaskHighBackground</a> — Add a high priority background task to be run in parallel</li><li><a href="gearmanclient.addtasklow.php">GearmanClient::addTaskLow</a> — Add a low priority task to run in parallel</li><li><a href="gearmanclient.addtasklowbackground.php">GearmanClient::addTaskLowBackground</a> — Add a low priority background task to be run in parallel</li><li><a href="gearmanclient.addtaskstatus.php">GearmanClient::addTaskStatus</a> — Add a task to get status</li><li><a href="gearmanclient.clearcallbacks.php">GearmanClient::clearCallbacks</a> — Clear all task callback functions</li><li><a href="gearmanclient.clone.php">GearmanClient::clone</a> — Create a copy of a GearmanClient object</li><li><a href="gearmanclient.construct.php">GearmanClient::__construct</a> — Create a GearmanClient instance</li><li><a href="gearmanclient.context.php">GearmanClient::context</a> — Get the application context</li><li><a href="gearmanclient.data.php">GearmanClient::data</a> — Get the application data (deprecated)</li><li><a href="gearmanclient.do.php">GearmanClient::do</a> — Run a single task and return a result [deprecated]</li><li><a href="gearmanclient.dobackground.php">GearmanClient::doBackground</a> — Run a task in the background</li><li><a href="gearmanclient.dohigh.php">GearmanClient::doHigh</a> — Run a single high priority task</li><li><a href="gearmanclient.dohighbackground.php">GearmanClient::doHighBackground</a> — Run a high priority task in the background</li><li><a href="gearmanclient.dojobhandle.php">GearmanClient::doJobHandle</a> — Get the job handle for the running task</li><li><a href="gearmanclient.dolow.php">GearmanClient::doLow</a> — Run a single low priority task</li><li><a href="gearmanclient.dolowbackground.php">GearmanClient::doLowBackground</a> — Run a low priority task in the background</li><li><a href="gearmanclient.donormal.php">GearmanClient::doNormal</a> — Run a single task and return a result</li><li><a href="gearmanclient.dostatus.php">GearmanClient::doStatus</a> — Get the status for the running task</li><li><a href="gearmanclient.echo.php">GearmanClient::echo</a> — Send data to all job servers to see if they echo it back [deprecated]</li><li><a href="gearmanclient.error.php">GearmanClient::error</a> — Returns an error string for the last error encountered</li><li><a href="gearmanclient.geterrno.php">GearmanClient::getErrno</a> — Get an errno value</li><li><a href="gearmanclient.jobstatus.php">GearmanClient::jobStatus</a> — Get the status of a background job</li><li><a href="gearmanclient.ping.php">GearmanClient::ping</a> — Send data to all job servers to see if they echo it back</li><li><a href="gearmanclient.removeoptions.php">GearmanClient::removeOptions</a> — Remove client options</li><li><a href="gearmanclient.returncode.php">GearmanClient::returnCode</a> — Get the last Gearman return code</li><li><a href="gearmanclient.runtasks.php">GearmanClient::runTasks</a> — Run a list of tasks in parallel</li><li><a href="gearmanclient.setclientcallback.php">GearmanClient::setClientCallback</a> — Callback function when there is a data packet for a task (deprecated)</li><li><a href="gearmanclient.setcompletecallback.php">GearmanClient::setCompleteCallback</a> — Set a function to be called on task completion</li><li><a href="gearmanclient.setcontext.php">GearmanClient::setContext</a> — Set application context</li><li><a href="gearmanclient.setcreatedcallback.php">GearmanClient::setCreatedCallback</a> — Set a callback for when a task is queued</li><li><a href="gearmanclient.setdata.php">GearmanClient::setData</a> — Set application data (deprecated)</li><li><a href="gearmanclient.setdatacallback.php">GearmanClient::setDataCallback</a> — Callback function when there is a data packet for a task</li><li><a href="gearmanclient.setexceptioncallback.php">GearmanClient::setExceptionCallback</a> — Set a callback for worker exceptions</li><li><a href="gearmanclient.setfailcallback.php">GearmanClient::setFailCallback</a> — Set callback for job failure</li><li><a href="gearmanclient.setoptions.php">GearmanClient::setOptions</a> — Set client options</li><li><a href="gearmanclient.setstatuscallback.php">GearmanClient::setStatusCallback</a> — Set a callback for collecting task status</li><li><a href="gearmanclient.settimeout.php">GearmanClient::setTimeout</a> — Set socket I/O activity timeout</li><li><a href="gearmanclient.setwarningcallback.php">GearmanClient::setWarningCallback</a> — Set a callback for worker warnings</li><li><a href="gearmanclient.setworkloadcallback.php">GearmanClient::setWorkloadCallback</a> — Set a callback for accepting incremental data updates</li><li><a href="gearmanclient.timeout.php">GearmanClient::timeout</a> — Get current socket I/O activity timeout value</li><li><a href="gearmanclient.wait.php">GearmanClient::wait</a> — Wait for I/O activity on all connections in a client</li></ul></li><li><a href="class.gearmanjob.php">GearmanJob</a> — The GearmanJob class<ul class="chunklist chunklist_book chunklist_children"><li><a href="gearmanjob.complete.php">GearmanJob::complete</a> — Send the result and complete status (deprecated)</li><li><a href="gearmanjob.construct.php">GearmanJob::__construct</a> — Create a GearmanJob instance</li><li><a href="gearmanjob.data.php">GearmanJob::data</a> — Send data for a running job (deprecated)</li><li><a href="gearmanjob.exception.php">GearmanJob::exception</a> — Send exception for running job (deprecated)</li><li><a href="gearmanjob.fail.php">GearmanJob::fail</a> — Send fail status (deprecated)</li><li><a href="gearmanjob.functionname.php">GearmanJob::functionName</a> — Get function name</li><li><a href="gearmanjob.handle.php">GearmanJob::handle</a> — Get the job handle</li><li><a href="gearmanjob.returncode.php">GearmanJob::returnCode</a> — Get last return code</li><li><a href="gearmanjob.sendcomplete.php">GearmanJob::sendComplete</a> — Send the result and complete status</li><li><a href="gearmanjob.senddata.php">GearmanJob::sendData</a> — Send data for a running job</li><li><a href="gearmanjob.sendexception.php">GearmanJob::sendException</a> — Send exception for running job (exception)</li><li><a href="gearmanjob.sendfail.php">GearmanJob::sendFail</a> — Send fail status</li><li><a href="gearmanjob.sendstatus.php">GearmanJob::sendStatus</a> — Send status</li><li><a href="gearmanjob.sendwarning.php">GearmanJob::sendWarning</a> — Send a warning</li><li><a href="gearmanjob.setreturn.php">GearmanJob::setReturn</a> — Set a return value</li><li><a href="gearmanjob.status.php">GearmanJob::status</a> — Send status (deprecated)</li><li><a href="gearmanjob.unique.php">GearmanJob::unique</a> — Get the unique identifier</li><li><a href="gearmanjob.warning.php">GearmanJob::warning</a> — Send a warning (deprecated)</li><li><a href="gearmanjob.workload.php">GearmanJob::workload</a> — Get workload</li><li><a href="gearmanjob.workloadsize.php">GearmanJob::workloadSize</a> — Get size of work load</li></ul></li><li><a href="class.gearmantask.php">GearmanTask</a> — The GearmanTask class<ul class="chunklist chunklist_book chunklist_children"><li><a href="gearmantask.construct.php">GearmanTask::__construct</a> — Create a GearmanTask instance</li><li><a href="gearmantask.create.php">GearmanTask::create</a> — Create a task (deprecated)</li><li><a href="gearmantask.data.php">GearmanTask::data</a> — Get data returned for a task</li><li><a href="gearmantask.datasize.php">GearmanTask::dataSize</a> — Get the size of returned data</li><li><a href="gearmantask.function.php">GearmanTask::function</a> — Get associated function name (deprecated)</li><li><a href="gearmantask.functionname.php">GearmanTask::functionName</a> — Get associated function name</li><li><a href="gearmantask.isknown.php">GearmanTask::isKnown</a> — Determine if task is known</li><li><a href="gearmantask.isrunning.php">GearmanTask::isRunning</a> — Test whether the task is currently running</li><li><a href="gearmantask.jobhandle.php">GearmanTask::jobHandle</a> — Get the job handle</li><li><a href="gearmantask.recvdata.php">GearmanTask::recvData</a> — Read work or result data into a buffer for a task</li><li><a href="gearmantask.returncode.php">GearmanTask::returnCode</a> — Get the last return code</li><li><a href="gearmantask.senddata.php">GearmanTask::sendData</a> — Send data for a task (deprecated)</li><li><a href="gearmantask.sendworkload.php">GearmanTask::sendWorkload</a> — Send data for a task</li><li><a href="gearmantask.taskdenominator.php">GearmanTask::taskDenominator</a> — Get completion percentage denominator</li><li><a href="gearmantask.tasknumerator.php">GearmanTask::taskNumerator</a> — Get completion percentage numerator</li><li><a href="gearmantask.unique.php">GearmanTask::unique</a> — Get the unique identifier for a task</li><li><a href="gearmantask.uuid.php">GearmanTask::uuid</a> — Get the unique identifier for a task (deprecated)</li></ul></li><li><a href="class.gearmanworker.php">GearmanWorker</a> — The GearmanWorker class<ul class="chunklist chunklist_book chunklist_children"><li><a href="gearmanworker.addfunction.php">GearmanWorker::addFunction</a> — Register and add callback function</li><li><a href="gearmanworker.addoptions.php">GearmanWorker::addOptions</a> — Add worker options</li><li><a href="gearmanworker.addserver.php">GearmanWorker::addServer</a> — Add a job server</li><li><a href="gearmanworker.addservers.php">GearmanWorker::addServers</a> — Add job servers</li><li><a href="gearmanworker.clone.php">GearmanWorker::clone</a> — Create a copy of the worker</li><li><a href="gearmanworker.construct.php">GearmanWorker::__construct</a> — Create a GearmanWorker instance</li><li><a href="gearmanworker.echo.php">GearmanWorker::echo</a> — Test job server response</li><li><a href="gearmanworker.error.php">GearmanWorker::error</a> — Get the last error encountered</li><li><a href="gearmanworker.geterrno.php">GearmanWorker::getErrno</a> — Get errno</li><li><a href="gearmanworker.options.php">GearmanWorker::options</a> — Get worker options</li><li><a href="gearmanworker.register.php">GearmanWorker::register</a> — Register a function with the job server</li><li><a href="gearmanworker.removeoptions.php">GearmanWorker::removeOptions</a> — Remove worker options</li><li><a href="gearmanworker.returncode.php">GearmanWorker::returnCode</a> — Get last Gearman return code</li><li><a href="gearmanworker.setid.php">GearmanWorker::setId</a> — Give the worker an identifier so it can be tracked when asking gearmand for the list of available workers</li><li><a href="gearmanworker.setoptions.php">GearmanWorker::setOptions</a> — Set worker options</li><li><a href="gearmanworker.settimeout.php">GearmanWorker::setTimeout</a> — Set socket I/O activity timeout</li><li><a href="gearmanworker.timeout.php">GearmanWorker::timeout</a> — Get socket I/O activity timeout</li><li><a href="gearmanworker.unregister.php">GearmanWorker::unregister</a> — Unregister a function name with the job servers</li><li><a href="gearmanworker.unregisterall.php">GearmanWorker::unregisterAll</a> — Unregister all function names with the job servers</li><li><a href="gearmanworker.wait.php">GearmanWorker::wait</a> — Wait for activity from one of the job servers</li><li><a href="gearmanworker.work.php">GearmanWorker::work</a> — Wait for and perform jobs</li></ul></li><li><a href="class.gearmanexception.php">GearmanException</a> — The GearmanException class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gearman/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.gearman%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.gearman&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.gearman.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109861">  <div class="votes">
    <div id="Vu109861">
    <a href="/manual/vote-note.php?id=109861&amp;page=book.gearman&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109861">
    <a href="/manual/vote-note.php?id=109861&amp;page=book.gearman&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109861" title="63% like this...">
    3
    </div>
  </div>
  <a href="#109861" class="name">
  <strong class="user"><em>jon dot skarpeteig at gmail dot com</em></strong></a><a class="genanchor" href="#109861"> &para;</a><div class="date" title="2012-08-29 08:26"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109861">
<div class="phpcode"><code><span class="html">Unfortunately there's no manager in the pecl extension. If you want to make use of admin features, check out: <a href="http://pear.php.net/package/Net_Gearman" rel="nofollow" target="_blank">http://pear.php.net/package/Net_Gearman</a> which implements the administrative protocol in Manager.php as defined in: <a href="http://gearman.org/?id=protocol" rel="nofollow" target="_blank">http://gearman.org/?id=protocol</a></span></code></div>
  </div>
 </div>
  <div class="note" id="112025">  <div class="votes">
    <div id="Vu112025">
    <a href="/manual/vote-note.php?id=112025&amp;page=book.gearman&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112025">
    <a href="/manual/vote-note.php?id=112025&amp;page=book.gearman&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112025" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#112025" class="name">
  <strong class="user"><em>spacewalker2002 at ukr dot net</em></strong></a><a class="genanchor" href="#112025"> &para;</a><div class="date" title="2013-04-23 11:34"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112025">
<div class="phpcode"><code><span class="html">You can use this syntax:<br /><br /><span class="default">&lt;?php<br />   $worker </span><span class="keyword">= new </span><span class="default">GearmanWorker</span><span class="keyword">();<br />   </span><span class="default">$worker</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">();<br />   </span><span class="default">$worker</span><span class="keyword">-&gt;</span><span class="default">addFunction</span><span class="keyword">(new </span><span class="default">MyClass</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">), </span><span class="string">'myMethod'</span><span class="keyword">);<br /><br />class </span><span class="default">MyClass<br /></span><span class="keyword">{<br />   public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">)<br />   {<br />       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">test </span><span class="keyword">= </span><span class="default">$test</span><span class="keyword">;<br />   }<br /><br />   public function </span><span class="default">myMethod</span><span class="keyword">(</span><span class="default">GearmanJob $job</span><span class="keyword">)<br />   {<br />      </span><span class="comment">// you can access to $this-&gt;test;<br />   </span><span class="keyword">}<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112030">  <div class="votes">
    <div id="Vu112030">
    <a href="/manual/vote-note.php?id=112030&amp;page=book.gearman&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112030">
    <a href="/manual/vote-note.php?id=112030&amp;page=book.gearman&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112030" title="40% like this...">
    -5
    </div>
  </div>
  <a href="#112030" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#112030"> &para;</a><div class="date" title="2013-04-24 10:54"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112030">
<div class="phpcode"><code><span class="html">For my previous comment:<br /><br />this line:<br /><span class="default">&lt;?php<br />$worker</span><span class="keyword">-&gt;</span><span class="default">addFunction</span><span class="keyword">(new </span><span class="default">MyClass</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">), </span><span class="string">'myMethod'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />change to:<br /><br /><span class="default">&lt;?php<br />$worker</span><span class="keyword">-&gt;</span><span class="default">addFunction</span><span class="keyword">(</span><span class="default">$taskName</span><span class="keyword">, array(new </span><span class="default">MyClass</span><span class="keyword">(), </span><span class="string">'myMethod'</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.gearman&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.gearman.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.remote.other.php">Other Services</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.curl.php" title="cURL">cURL</a>
                        </li>
                                                <li class="">
                            <a href="book.event.php" title="Event">Event</a>
                        </li>
                                                <li class="">
                            <a href="book.ftp.php" title="FTP">FTP</a>
                        </li>
                                                <li class="current">
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
