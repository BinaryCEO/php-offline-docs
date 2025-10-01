<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Memcached - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.memcached.php">
 <link rel="shorturl" href="https://www.php.net/memcached">
 <link rel="alternate" href="https://www.php.net/memcached" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.remote.other.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.memcache-debug.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.memcached.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.memcached.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.memcached.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.memcached.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.memcached.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.memcached.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.memcached.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.memcached.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.memcached.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.memcached.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.memcached.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.memcached.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Memcached" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Memcached - Manual" />
<meta name="twitter:description" content="Memcached" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Memcached - Manual" />
<meta itemprop="description" content="Memcached" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Memcached" />

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
        <a href="intro.memcached.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.memcache-debug.php">
          &laquo; memcache_debug        </a>
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
            <option value='en/book.memcached.php' selected="selected">English</option>
            <option value='de/book.memcached.php'>German</option>
            <option value='es/book.memcached.php'>Spanish</option>
            <option value='fr/book.memcached.php'>French</option>
            <option value='it/book.memcached.php'>Italian</option>
            <option value='ja/book.memcached.php'>Japanese</option>
            <option value='pt_BR/book.memcached.php'>Brazilian Portuguese</option>
            <option value='ru/book.memcached.php'>Russian</option>
            <option value='tr/book.memcached.php'>Turkish</option>
            <option value='uk/book.memcached.php'>Ukrainian</option>
            <option value='zh/book.memcached.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.memcached" class="book">
 
 <h1 class="title">Memcached</h1>
 

 

 







 







 







 






 






 




 







<ul class="chunklist chunklist_book"><li><a href="intro.memcached.php">Introduction</a></li><li><a href="memcached.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="memcached.requirements.php">Requirements</a></li><li><a href="memcached.installation.php">Installation</a></li><li><a href="memcached.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="memcached.constants.php">Predefined Constants</a></li><li><a href="memcached.expiration.php">Expiration Times</a></li><li><a href="memcached.callbacks.php">Callbacks</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="memcached.callbacks.result.php">Result callbacks</a></li><li><a href="memcached.callbacks.read-through.php">Read-through cache callbacks</a></li></ul></li><li><a href="memcached.sessions.php">Sessions support</a></li><li><a href="class.memcached.php">Memcached</a> — The Memcached class<ul class="chunklist chunklist_book chunklist_children"><li><a href="memcached.add.php">Memcached::add</a> — Add an item under a new key</li><li><a href="memcached.addbykey.php">Memcached::addByKey</a> — Add an item under a new key on a specific server</li><li><a href="memcached.addserver.php">Memcached::addServer</a> — Add a server to the server pool</li><li><a href="memcached.addservers.php">Memcached::addServers</a> — Add multiple servers to the server pool</li><li><a href="memcached.append.php">Memcached::append</a> — Append data to an existing item</li><li><a href="memcached.appendbykey.php">Memcached::appendByKey</a> — Append data to an existing item on a specific server</li><li><a href="memcached.cas.php">Memcached::cas</a> — Compare and swap an item</li><li><a href="memcached.casbykey.php">Memcached::casByKey</a> — Compare and swap an item on a specific server</li><li><a href="memcached.construct.php">Memcached::__construct</a> — Create a Memcached instance</li><li><a href="memcached.decrement.php">Memcached::decrement</a> — Decrement numeric item's value</li><li><a href="memcached.decrementbykey.php">Memcached::decrementByKey</a> — Decrement numeric item's value, stored on a specific server</li><li><a href="memcached.delete.php">Memcached::delete</a> — Delete an item</li><li><a href="memcached.deletebykey.php">Memcached::deleteByKey</a> — Delete an item from a specific server</li><li><a href="memcached.deletemulti.php">Memcached::deleteMulti</a> — Delete multiple items</li><li><a href="memcached.deletemultibykey.php">Memcached::deleteMultiByKey</a> — Delete multiple items from a specific server</li><li><a href="memcached.fetch.php">Memcached::fetch</a> — Fetch the next result</li><li><a href="memcached.fetchall.php">Memcached::fetchAll</a> — Fetch all the remaining results</li><li><a href="memcached.flush.php">Memcached::flush</a> — Invalidate all items in the cache</li><li><a href="memcached.get.php">Memcached::get</a> — Retrieve an item</li><li><a href="memcached.getallkeys.php">Memcached::getAllKeys</a> — Gets the keys stored on all the servers</li><li><a href="memcached.getbykey.php">Memcached::getByKey</a> — Retrieve an item from a specific server</li><li><a href="memcached.getdelayed.php">Memcached::getDelayed</a> — Request multiple items</li><li><a href="memcached.getdelayedbykey.php">Memcached::getDelayedByKey</a> — Request multiple items from a specific server</li><li><a href="memcached.getmulti.php">Memcached::getMulti</a> — Retrieve multiple items</li><li><a href="memcached.getmultibykey.php">Memcached::getMultiByKey</a> — Retrieve multiple items from a specific server</li><li><a href="memcached.getoption.php">Memcached::getOption</a> — Retrieve a Memcached option value</li><li><a href="memcached.getresultcode.php">Memcached::getResultCode</a> — Return the result code of the last operation</li><li><a href="memcached.getresultmessage.php">Memcached::getResultMessage</a> — Return the message describing the result of the last operation</li><li><a href="memcached.getserverbykey.php">Memcached::getServerByKey</a> — Map a key to a server</li><li><a href="memcached.getserverlist.php">Memcached::getServerList</a> — Get the list of the servers in the pool</li><li><a href="memcached.getstats.php">Memcached::getStats</a> — Get server pool statistics</li><li><a href="memcached.getversion.php">Memcached::getVersion</a> — Get server pool version info</li><li><a href="memcached.increment.php">Memcached::increment</a> — Increment numeric item's value</li><li><a href="memcached.incrementbykey.php">Memcached::incrementByKey</a> — Increment numeric item's value, stored on a specific server</li><li><a href="memcached.ispersistent.php">Memcached::isPersistent</a> — Check if a persitent connection to memcache is being used</li><li><a href="memcached.ispristine.php">Memcached::isPristine</a> — Check if the instance was recently created</li><li><a href="memcached.prepend.php">Memcached::prepend</a> — Prepend data to an existing item</li><li><a href="memcached.prependbykey.php">Memcached::prependByKey</a> — Prepend data to an existing item on a specific server</li><li><a href="memcached.quit.php">Memcached::quit</a> — Close any open connections</li><li><a href="memcached.replace.php">Memcached::replace</a> — Replace the item under an existing key</li><li><a href="memcached.replacebykey.php">Memcached::replaceByKey</a> — Replace the item under an existing key on a specific server</li><li><a href="memcached.resetserverlist.php">Memcached::resetServerList</a> — Clears all servers from the server list</li><li><a href="memcached.set.php">Memcached::set</a> — Store an item</li><li><a href="memcached.setbykey.php">Memcached::setByKey</a> — Store an item on a specific server</li><li><a href="memcached.setencodingkey.php">Memcached::setEncodingKey</a> — Set AES encryption key for data in Memcached</li><li><a href="memcached.setmulti.php">Memcached::setMulti</a> — Store multiple items</li><li><a href="memcached.setmultibykey.php">Memcached::setMultiByKey</a> — Store multiple items on a specific server</li><li><a href="memcached.setoption.php">Memcached::setOption</a> — Set a Memcached option</li><li><a href="memcached.setoptions.php">Memcached::setOptions</a> — Set Memcached options</li><li><a href="memcached.setsaslauthdata.php">Memcached::setSaslAuthData</a> — Set the credentials to use for authentication</li><li><a href="memcached.touch.php">Memcached::touch</a> — Set a new expiration on an item</li><li><a href="memcached.touchbykey.php">Memcached::touchByKey</a> — Set a new expiration on an item on a specific server</li></ul></li><li><a href="class.memcachedexception.php">MemcachedException</a> — The MemcachedException class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/memcached/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.memcached%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.memcached&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.memcached.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104099">  <div class="votes">
    <div id="Vu104099">
    <a href="/manual/vote-note.php?id=104099&amp;page=book.memcached&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104099">
    <a href="/manual/vote-note.php?id=104099&amp;page=book.memcached&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104099" title="82% like this...">
    173
    </div>
  </div>
  <a href="#104099" class="name">
  <strong class="user"><em>joelhy</em></strong></a><a class="genanchor" href="#104099"> &para;</a><div class="date" title="2011-05-22 08:27"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104099">
<div class="phpcode"><code><span class="html">For those confuse about the memcached extension and the memcache extension, the short story is that both of them are clients of memcached server, and the memcached extension offer more features than the memcache extension.</span></code></div>
  </div>
 </div>
  <div class="note" id="115667">  <div class="votes">
    <div id="Vu115667">
    <a href="/manual/vote-note.php?id=115667&amp;page=book.memcached&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115667">
    <a href="/manual/vote-note.php?id=115667&amp;page=book.memcached&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115667" title="69% like this...">
    23
    </div>
  </div>
  <a href="#115667" class="name">
  <strong class="user"><em>gabriel dot maybrun at demandmedia dot com</em></strong></a><a class="genanchor" href="#115667"> &para;</a><div class="date" title="2014-09-04 11:59"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115667">
<div class="phpcode"><code><span class="html">GOTCHA: Recently I was tasked with moving from PECL memcache to PECL memcached and ran into a major problem -- memcache and memcached serialize data differently, meaning that data written with one library can't necessarily be read with the other library.<br /><br />For example, If you write an object or an array with memcache, it's interpreted as an integer by memcached.  If you write it with memcached, it's interpreted as a string by memcache.<br /><br />tl;dr - You can't safely switch between memcache and memcached without a either a cache flush or isolated cache environments.<br /><br /><span class="default">&lt;?php<br />$memcache </span><span class="keyword">= new </span><span class="default">Memcache</span><span class="keyword">;<br /></span><span class="default">$memcacheD </span><span class="keyword">= new </span><span class="default">Memcached</span><span class="keyword">;<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">);<br /></span><span class="default">$memcacheD</span><span class="keyword">-&gt;</span><span class="default">addServers</span><span class="keyword">(</span><span class="default">$servers</span><span class="keyword">);<br /><br /></span><span class="default">$checks </span><span class="keyword">= array(<br />    </span><span class="default">123</span><span class="keyword">,<br />    </span><span class="default">4542.32</span><span class="keyword">,<br />    </span><span class="string">'a string'</span><span class="keyword">,<br />    </span><span class="default">true</span><span class="keyword">,<br />    array(</span><span class="default">123</span><span class="keyword">, </span><span class="string">'string'</span><span class="keyword">),<br />    (object)array(</span><span class="string">'key1' </span><span class="keyword">=&gt; </span><span class="string">'value1'</span><span class="keyword">),<br />);<br />foreach (</span><span class="default">$checks </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />    print </span><span class="string">"Checking WRITE with Memcache\n"</span><span class="keyword">;<br />    </span><span class="default">$key </span><span class="keyword">= </span><span class="string">'cachetest' </span><span class="keyword">. </span><span class="default">$i</span><span class="keyword">;<br />    </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />    </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">);<br />    </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br />    </span><span class="default">$valD </span><span class="keyword">= </span><span class="default">$memcacheD</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br />    if (</span><span class="default">$val </span><span class="keyword">!== </span><span class="default">$valD</span><span class="keyword">) {<br />        print </span><span class="string">"Not compatible!"</span><span class="keyword">;<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">compact</span><span class="keyword">(</span><span class="string">'val'</span><span class="keyword">, </span><span class="string">'valD'</span><span class="keyword">));<br />    }<br /><br />    print </span><span class="string">"Checking WRITE with MemcacheD\n"</span><span class="keyword">;<br />    </span><span class="default">$key </span><span class="keyword">= </span><span class="string">'cachetest' </span><span class="keyword">. </span><span class="default">$i</span><span class="keyword">;<br />    </span><span class="default">$memcacheD</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />    </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">);<br />    </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br />    </span><span class="default">$valD </span><span class="keyword">= </span><span class="default">$memcacheD</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br />    if (</span><span class="default">$val </span><span class="keyword">!== </span><span class="default">$valD</span><span class="keyword">) {<br />        print </span><span class="string">"Not compatible!"</span><span class="keyword">;<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">compact</span><span class="keyword">(</span><span class="string">'val'</span><span class="keyword">, </span><span class="string">'valD'</span><span class="keyword">));<br />    }<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125576">  <div class="votes">
    <div id="Vu125576">
    <a href="/manual/vote-note.php?id=125576&amp;page=book.memcached&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125576">
    <a href="/manual/vote-note.php?id=125576&amp;page=book.memcached&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125576" title="53% like this...">
    1
    </div>
  </div>
  <a href="#125576" class="name">
  <strong class="user"><em>Moradnejad</em></strong></a><a class="genanchor" href="#125576"> &para;</a><div class="date" title="2020-12-07 12:54"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125576">
<div class="phpcode"><code><span class="html">## Installing Memcached on Ubuntu<br /><br />To install Memcached on Ubuntu, go to terminal and type the following commands −<br /><br />$sudo apt-get update<br />$sudo apt-get install memcached<br /><br />## Confirming Memcached Installation<br /><br />To confirm if Memcached is installed or not, you need to run the command given below. This command shows that Memcached is running on the default port 11211.<br /><br />$ps aux | grep memcached<br /><br />To run Memcached server on a different port, execute the command given below. This command starts the server on the TCP port 11111 and listens on the UDP port 11111 as a daemon process.<br /><br />$memcached -p 11111 -U 11111 -u user -d<br /><br />You can run multiple instances of Memcached server through a single installation.</span></code></div>
  </div>
 </div>
  <div class="note" id="110988">  <div class="votes">
    <div id="Vu110988">
    <a href="/manual/vote-note.php?id=110988&amp;page=book.memcached&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110988">
    <a href="/manual/vote-note.php?id=110988&amp;page=book.memcached&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110988" title="50% like this...">
    0
    </div>
  </div>
  <a href="#110988" class="name">
  <strong class="user"><em>davidt</em></strong></a><a class="genanchor" href="#110988"> &para;</a><div class="date" title="2013-01-03 01:14"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110988">
<div class="phpcode"><code><span class="html">The module also supports SASL authentication, it just isn't documented sadly. You'll need to run the following code:<br /><br /><span class="default">&lt;?php<br />$m </span><span class="keyword">= new </span><span class="default">Memcached</span><span class="keyword">();<br /></span><span class="default">$m</span><span class="keyword">-&gt;</span><span class="default">setOption</span><span class="keyword">(</span><span class="default">Memcached</span><span class="keyword">::</span><span class="default">OPT_BINARY_PROTOCOL</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$m</span><span class="keyword">-&gt;</span><span class="default">setSaslAuthData</span><span class="keyword">(</span><span class="string">"user-1"</span><span class="keyword">, </span><span class="string">"pass"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />You need to enable the "memcached.use_sasl = 1" ini option for memcached in the php.ini file.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.memcached&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.memcached.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="book.gearman.php" title="Gearman">Gearman</a>
                        </li>
                                                <li class="">
                            <a href="book.ldap.php" title="LDAP">LDAP</a>
                        </li>
                                                <li class="">
                            <a href="book.memcache.php" title="Memcache">Memcache</a>
                        </li>
                                                <li class="current">
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
