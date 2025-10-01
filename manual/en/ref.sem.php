<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Semaphore Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.sem.php">
 <link rel="shorturl" href="https://www.php.net/sem">
 <link rel="alternate" href="https://www.php.net/sem" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.sem.php">
 <link rel="prev" href="https://www.php.net/manual/en/sem.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ftok.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.sem.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.sem.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.sem.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.sem.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.sem.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.sem.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.sem.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.sem.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.sem.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.sem.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.sem.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Semaphore Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Semaphore Functions - Manual" />
<meta name="twitter:description" content="Semaphore Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Semaphore Functions - Manual" />
<meta itemprop="description" content="Semaphore Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Semaphore Functions" />

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
        <a href="function.ftok.php">
          ftok &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="sem.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.sem.php'>Semaphore</a></li>      </ul>
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
            <option value='en/ref.sem.php' selected="selected">English</option>
            <option value='de/ref.sem.php'>German</option>
            <option value='es/ref.sem.php'>Spanish</option>
            <option value='fr/ref.sem.php'>French</option>
            <option value='it/ref.sem.php'>Italian</option>
            <option value='ja/ref.sem.php'>Japanese</option>
            <option value='pt_BR/ref.sem.php'>Brazilian Portuguese</option>
            <option value='ru/ref.sem.php'>Russian</option>
            <option value='tr/ref.sem.php'>Turkish</option>
            <option value='uk/ref.sem.php'>Ukrainian</option>
            <option value='zh/ref.sem.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.sem" class="reference">
 <h1 class="title">Semaphore Functions</h1>

 
































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.ftok.php">ftok</a> — Convert a pathname and a project identifier to a System V IPC key</li><li><a href="function.msg-get-queue.php">msg_get_queue</a> — Create or attach to a message queue</li><li><a href="function.msg-queue-exists.php">msg_queue_exists</a> — Check whether a message queue exists</li><li><a href="function.msg-receive.php">msg_receive</a> — Receive a message from a message queue</li><li><a href="function.msg-remove-queue.php">msg_remove_queue</a> — Destroy a message queue</li><li><a href="function.msg-send.php">msg_send</a> — Send a message to a message queue</li><li><a href="function.msg-set-queue.php">msg_set_queue</a> — Set information in the message queue data structure</li><li><a href="function.msg-stat-queue.php">msg_stat_queue</a> — Returns information from the message queue data structure</li><li><a href="function.sem-acquire.php">sem_acquire</a> — Acquire a semaphore</li><li><a href="function.sem-get.php">sem_get</a> — Get a semaphore id</li><li><a href="function.sem-release.php">sem_release</a> — Release a semaphore</li><li><a href="function.sem-remove.php">sem_remove</a> — Remove a semaphore</li><li><a href="function.shm-attach.php">shm_attach</a> — Creates or open a shared memory segment</li><li><a href="function.shm-detach.php">shm_detach</a> — Disconnects from shared memory segment</li><li><a href="function.shm-get-var.php">shm_get_var</a> — Returns a variable from shared memory</li><li><a href="function.shm-has-var.php">shm_has_var</a> — Check whether a specific entry exists</li><li><a href="function.shm-put-var.php">shm_put_var</a> — Inserts or updates a variable in shared memory</li><li><a href="function.shm-remove.php">shm_remove</a> — Removes shared memory from Unix systems</li><li><a href="function.shm-remove-var.php">shm_remove_var</a> — Removes a variable from shared memory</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sem/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.sem%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.sem&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.sem.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="22553">  <div class="votes">
    <div id="Vu22553">
    <a href="/manual/vote-note.php?id=22553&amp;page=ref.sem&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22553">
    <a href="/manual/vote-note.php?id=22553&amp;page=ref.sem&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22553" title="70% like this...">
    12
    </div>
  </div>
  <a href="#22553" class="name">
  <strong class="user"><em>elran70 at hotmail dot com</em></strong></a><a class="genanchor" href="#22553"> &para;</a><div class="date" title="2002-06-22 10:54"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22553">
<div class="phpcode"><code><span class="html">Samlpe code for using most of the functions here:<br /><br />    $MEMSIZE    =   512;//  size of shared memory to allocate<br />    $SEMKEY     =   1;  //  Semaphore key<br />    $SHMKEY     =   2;  //  Shared memory key<br /><br />    echo "Start.\n";<br />    // Get semaphore<br />    $sem_id = sem_get($SEMKEY, 1);<br />    if ($sem_id === false)<br />    {<br />        echo "Fail to get semaphore";<br />        exit;<br />    }<br />    else<br />        echo "Got semaphore $sem_id.\n";<br /><br />    // Accuire semaphore<br />    if (! sem_acquire($sem_id))<br />    {<br />        echo "Fail to aquire semaphore $sem_id.\n";<br />        sem_remove($sem_id);<br />        exit;<br />    }<br />    else<br />        echo "Success aquire semaphore $sem_id.\n";<br /><br />    $shm_id =   shm_attach($SHMKEY, $MEMSIZE);<br />    if ($shm_id === false)<br />    {<br />        echo "Fail to attach shared memory.\n";<br />        sem_remove($sem_id);<br />        exit;<br />    }<br />    else<br />        echo "Success to attach shared memory : $shm_id.\n";<br /><br />    // Write variable 1<br />    if (!shm_put_var($shm_id, 1, "Variable 1"))<br />    {<br />        echo "Fail to put var 1 on shared memory $shm_id.\n";<br />        sem_remove($sem_id);<br />        shm_remove ($shm_id);<br />        exit;<br />    }<br />    else<br />        echo "Write var1 to shared memory.\n";<br /><br />    // Write variable 2<br />    if (!shm_put_var($shm_id, 2, "Variable 2"))<br />    {<br />        echo "Fail to put var 2 on shared memory $shm_id.\n";<br />        sem_remove($sem_id);<br />        shm_remove ($shm_id);<br />        exit;<br />    }<br />    else<br />        echo "Write var2 to shared memory.\n";<br /><br />    // Read variable 1<br />    $var1   =   shm_get_var ($shm_id, 1);<br />    if ($var1 === false)<br />    {<br />        echo "Fail to retrive Var 1 from Shared memory $shm_id, return value=$var1.\n";<br />    }<br />    else<br />        echo "Read var1=$var1.\n";<br /><br />    // Read variable 1<br />    $var2   =   shm_get_var ($shm_id, 2);<br />    if ($var1 === false)<br />    {<br />        echo "Fail to retrive Var 2 from Shared memory $shm_id, return value=$var2.\n";<br />    }<br />    else<br />        echo "Read var2=$var2.\n";<br /><br />    // Release semaphore<br />    if (!sem_release($sem_id))<br />        echo "Fail to release $sem_id semaphore.\n";<br />    else<br />        echo "Semaphore $sem_id released.\n";<br /><br />    // remove shared memory segmant from SysV<br />    if (shm_remove ($shm_id))<br />        echo "Shared memory successfully removed from SysV.\n";<br />    else<br />        echo "Fail to remove $shm_id shared memory from SysV.\n";<br /><br />    // Remove semaphore<br />    if (sem_remove($sem_id))<br />        echo "semaphore removed successfully from SysV.\n";<br />    else<br />        echo "Fail to remove $sem_id semaphore from SysV.\n";<br />    echo "End.\n";</span></code></div>
  </div>
 </div>
  <div class="note" id="71164">  <div class="votes">
    <div id="Vu71164">
    <a href="/manual/vote-note.php?id=71164&amp;page=ref.sem&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71164">
    <a href="/manual/vote-note.php?id=71164&amp;page=ref.sem&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71164" title="80% like this...">
    3
    </div>
  </div>
  <a href="#71164" class="name">
  <strong class="user"><em>hekkwan at gmail dot com</em></strong></a><a class="genanchor" href="#71164"> &para;</a><div class="date" title="2006-11-14 06:15"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71164">
<div class="phpcode"><code><span class="html">I have been trying to get a php console script and a C application to use a common semaphore for a while. I just got it working, so I thought Id paste the code here incase anyone needs to do this, however, this is not the place for long code examples<br /><br />I used c code from the php implementation to set up the semaphore set and then mimic the way the php interpreter implements a mutext type locking scheme, using a common semop call.<br /><br />One has to do the process in the same way as its done in the php implementation, otherwise you run the risk of the php interpreter resetting the semaphore set for you.<br /><br />The basic idea is.<br />1) sem_get - use a three semaphore set<br />1.1) increment the first sem<br />1.2) check the usage count (sem 3), if only one, set the max_attach using sem 2 for mutex behaviour to sem 3 <br />2) decrement sem 1<br />3) for locking / unlocking use the first semaphore, but always call the above from your c-code.<br /><br />If you want a copy of my code, email me and I'll happily send it to you !</span></code></div>
  </div>
 </div>
  <div class="note" id="67065">  <div class="votes">
    <div id="Vu67065">
    <a href="/manual/vote-note.php?id=67065&amp;page=ref.sem&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67065">
    <a href="/manual/vote-note.php?id=67065&amp;page=ref.sem&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67065" title="80% like this...">
    3
    </div>
  </div>
  <a href="#67065" class="name">
  <strong class="user"><em>chrissavery at removeme dot gmail dot com</em></strong></a><a class="genanchor" href="#67065"> &para;</a><div class="date" title="2006-06-02 01:18"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67065">
<div class="phpcode"><code><span class="html">I was confused by two things that caused strange behaviour in my use of semaphores with php scripts running under apache.<br /><br />Often enough page requests will end up being filled by the same process as other simultaneous requests. So semaphores will block when you may not have expected.<br /><br />Also note that sem_remove() will remove it for all processes, not just the calling one. So you have to be sure that the last process running removes the semaphore and none before. I thought there was some failures occurring when my child processes were dropping out with errors.<br /><br />So you can't just use get, acquire, release, remove in one script that will be hit by a web user. (1) They may end up in the same process and will wait on the other, and (2) the first one to finish will destroy the semaphore for others.<br /><br />I left out the remove call, and it works ok, but I still wonder if the semaphore is removed by php when the last script that did a get finishes? Also creating a child process to do the work using proc_open works to ensure seperate processes but to be careful you would want to limit the number somehow as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="36812">  <div class="votes">
    <div id="Vu36812">
    <a href="/manual/vote-note.php?id=36812&amp;page=ref.sem&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36812">
    <a href="/manual/vote-note.php?id=36812&amp;page=ref.sem&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36812" title="100% like this...">
    1
    </div>
  </div>
  <a href="#36812" class="name">
  <strong class="user"><em>hcuevas at galenicom dot com</em></strong></a><a class="genanchor" href="#36812"> &para;</a><div class="date" title="2003-10-23 07:49"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36812">
<div class="phpcode"><code><span class="html">Don't use semaphores to serialize access to an undefined number of resources. There is no way (yet) to know before locking if a semaphore is already locked, thus not being able to fully release the semaphore and occupying a semaphore resource for an undefined time. <br /><br />A possible solution is to build a shared mem pool and store there the current number of locks for a semaphore id. <br /><br />Cheers,<br />Horaci Cuevas</span></code></div>
  </div>
 </div>
  <div class="note" id="30891">  <div class="votes">
    <div id="Vu30891">
    <a href="/manual/vote-note.php?id=30891&amp;page=ref.sem&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30891">
    <a href="/manual/vote-note.php?id=30891&amp;page=ref.sem&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30891" title="100% like this...">
    1
    </div>
  </div>
  <a href="#30891" class="name">
  <strong class="user"><em>Roman Laptev &lt;tmp at laptev dot org&gt;</em></strong></a><a class="genanchor" href="#30891"> &para;</a><div class="date" title="2003-04-02 06:50"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30891">
<div class="phpcode"><code><span class="html">If you going to work with semaphore, which was created by some external program, you can try the following code for this program (C example):<br /><br />#define SVSEM_MODE (SEM_R | SEM_A | SEM_R&gt;&gt;3 | SEM_R&gt;&gt;6) /* 0644 */<br />#define PHP_SEM_NEED_NUMBER 3<br /><br />/*.......*/<br />int semid, semflag = SVSEM_MODE | IPC_CREAT | IPC_EXCL;<br />struct sembuf semptr;<br />union semun semopts;<br />/*.......*/<br />if( (semid = semget(sempath, PHP_SEM_NEED_NUMBER, semflag)) &gt;= 0 ) {<br />  semopts.val = 1; /* initial value for sem */<br />  if( semctl( semid, 0, SETVAL, semopts) &lt; 0 ) {/*error*/}<br />  if( semctl( semid, 1, SETVAL, semopts) &lt; 0 ) {/*error*/}<br />  /* PHP wanna zero for its own semget at third sem.<br />   * look at ./PHP_SOURCE_PATH/ext/sysvsem/sysvsem.c<br />   */<br />  semopts.val = 0;<br />  if( semctl( semid, 2, SETVAL, semopts) &lt; 0 ) {/*error*/}<br />}<br />else if(errno == EEXIST) { /* connect only  */<br />  if( (semid = semget(sempath, PHP_SEM_NEED_NUMBER, SVSEM_MODE | IPC_CREAT)) &lt; 0 ) {/*error*/}<br />}<br />else {/*error*/}<br /><br />/*.......*/<br />/* If you want acquire the sem */<br />  semptr.sem_num = 0;<br />  semptr.sem_op = -1; /* lock it */<br />  semptr.sem_flg = SEM_UNDO;<br />  while( semop(semid, &amp;semptr, 1) &lt; 0 ) {/*error*/}<br />/*.......*/<br /><br />Thanks,<br />Roma</span></code></div>
  </div>
 </div>
  <div class="note" id="8614">  <div class="votes">
    <div id="Vu8614">
    <a href="/manual/vote-note.php?id=8614&amp;page=ref.sem&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd8614">
    <a href="/manual/vote-note.php?id=8614&amp;page=ref.sem&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V8614" title="50% like this...">
    0
    </div>
  </div>
  <a href="#8614" class="name">
  <strong class="user"><em>php at stolt dot de</em></strong></a><a class="genanchor" href="#8614"> &para;</a><div class="date" title="2000-09-20 11:58"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom8614">
<div class="phpcode"><code><span class="html">The integer keys for sem_get() and shm_attach() have to be systemwide unique. There is no method to ensure that no other process on the system will use your specific key (security! and possible malfunction). Also shared memory is very seldom used there are possibilities for conflicts! To see the used id's you can use the program 'ipcs' (at least under SuseLinux;) ). Thanks Christian C.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.sem&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.sem.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.sem.php">Semaphore</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.sem.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="sem.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="sem.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="ref.sem.php" title="Semaphore Functions">Semaphore Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.sysvmessagequeue.php" title="SysvMessageQueue">SysvMessageQueue</a>
                        </li>
                                                <li class="">
                            <a href="class.sysvsemaphore.php" title="SysvSemaphore">SysvSemaphore</a>
                        </li>
                                                <li class="">
                            <a href="class.sysvsharedmemory.php" title="SysvSharedMemory">SysvSharedMemory</a>
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
