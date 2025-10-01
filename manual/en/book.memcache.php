<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Memcache - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.memcache.php">
 <link rel="shorturl" href="https://www.php.net/memcache">
 <link rel="alternate" href="https://www.php.net/memcache" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.remote.other.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.ldap-result-entry.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.memcache.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.memcache.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.memcache.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.memcache.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.memcache.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.memcache.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.memcache.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.memcache.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.memcache.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.memcache.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.memcache.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.memcache.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Memcache" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Memcache - Manual" />
<meta name="twitter:description" content="Memcache" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Memcache - Manual" />
<meta itemprop="description" content="Memcache" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Memcache" />

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
        <a href="intro.memcache.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.ldap-result-entry.php">
          &laquo; LDAP\ResultEntry        </a>
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
            <option value='en/book.memcache.php' selected="selected">English</option>
            <option value='de/book.memcache.php'>German</option>
            <option value='es/book.memcache.php'>Spanish</option>
            <option value='fr/book.memcache.php'>French</option>
            <option value='it/book.memcache.php'>Italian</option>
            <option value='ja/book.memcache.php'>Japanese</option>
            <option value='pt_BR/book.memcache.php'>Brazilian Portuguese</option>
            <option value='ru/book.memcache.php'>Russian</option>
            <option value='tr/book.memcache.php'>Turkish</option>
            <option value='uk/book.memcache.php'>Ukrainian</option>
            <option value='zh/book.memcache.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.memcache" class="book">
 
 <h1 class="title">Memcache</h1>
 
 
 
 
 
 







 





 








 






 








<ul class="chunklist chunklist_book"><li><a href="intro.memcache.php">Introduction</a></li><li><a href="memcache.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="memcache.requirements.php">Requirements</a></li><li><a href="memcache.installation.php">Installation</a></li><li><a href="memcache.ini.php">Runtime Configuration</a></li><li><a href="memcache.resources.php">Resource Types</a></li></ul></li><li><a href="memcache.constants.php">Predefined Constants</a></li><li><a href="memcache.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="memcache.examples-overview.php">Basic usage</a></li></ul></li><li><a href="class.memcache.php">Memcache</a> — The Memcache class<ul class="chunklist chunklist_book chunklist_children"><li><a href="memcache.add.php">Memcache::add</a> — Add an item to the server</li><li><a href="memcache.addserver.php">Memcache::addServer</a> — Add a memcached server to connection pool</li><li><a href="memcache.close.php">Memcache::close</a> — Close memcached server connection</li><li><a href="memcache.connect.php">Memcache::connect</a> — Open memcached server connection</li><li><a href="memcache.decrement.php">Memcache::decrement</a> — Decrement item's value</li><li><a href="memcache.delete.php">Memcache::delete</a> — Delete item from the server</li><li><a href="memcache.flush.php">Memcache::flush</a> — Flush all existing items at the server</li><li><a href="memcache.get.php">Memcache::get</a> — Retrieve item from the server</li><li><a href="memcache.getextendedstats.php">Memcache::getExtendedStats</a> — Get statistics from all servers in pool</li><li><a href="memcache.getserverstatus.php">Memcache::getServerStatus</a> — Returns server status</li><li><a href="memcache.getstats.php">Memcache::getStats</a> — Get statistics of the server</li><li><a href="memcache.getversion.php">Memcache::getVersion</a> — Return version of the server</li><li><a href="memcache.increment.php">Memcache::increment</a> — Increment item's value</li><li><a href="memcache.pconnect.php">Memcache::pconnect</a> — Open memcached server persistent connection</li><li><a href="memcache.replace.php">Memcache::replace</a> — Replace value of the existing item</li><li><a href="memcache.set.php">Memcache::set</a> — Store data at the server</li><li><a href="memcache.setcompressthreshold.php">Memcache::setCompressThreshold</a> — Enable automatic compression of large values</li><li><a href="memcache.setserverparams.php">Memcache::setServerParams</a> — Changes server parameters and status at runtime</li></ul></li><li><a href="ref.memcache.php">Memcache Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.memcache-debug.php">memcache_debug</a> — Turn debug output on/off</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/memcache/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.memcache%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.memcache&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.memcache.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126562">  <div class="votes">
    <div id="Vu126562">
    <a href="/manual/vote-note.php?id=126562&amp;page=book.memcache&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126562">
    <a href="/manual/vote-note.php?id=126562&amp;page=book.memcache&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126562" title="100% like this...">
    4
    </div>
  </div>
  <a href="#126562" class="name">
  <strong class="user"><em>rob4226 at yahoo dot com</em></strong></a><a class="genanchor" href="#126562"> &para;</a><div class="date" title="2021-11-06 06:53"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126562">
<div class="phpcode"><code><span class="html">Thanks to nono303 on GitHub we can run this PHP extension and memcached on Windows!  This is great for a dev environment to match a production unix server. I am using PHP 8.0 with this memcache extension on a Windows 10 box with a memcached server running on localhost and it is working great.<br /><br />I can't post a link but the dll for this extension is at the repo: nono303/PHP-memcache-dll<br /><br />And the actual memcached server for windows is at the repo: nono303/memcached</span></code></div>
  </div>
 </div>
  <div class="note" id="115666">  <div class="votes">
    <div id="Vu115666">
    <a href="/manual/vote-note.php?id=115666&amp;page=book.memcache&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115666">
    <a href="/manual/vote-note.php?id=115666&amp;page=book.memcache&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115666" title="58% like this...">
    16
    </div>
  </div>
  <a href="#115666" class="name">
  <strong class="user"><em>gabriel dot maybrun at demandmedia dot com</em></strong></a><a class="genanchor" href="#115666"> &para;</a><div class="date" title="2014-09-04 11:58"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115666">
<div class="phpcode"><code><span class="html">GOTCHA: Recently I was tasked with moving from PECL memcache to PECL memcached and ran into a major problem -- memcache and memcached serialize data differently, meaning that data written with one library can't necessarily be read with the other library.<br /><br />For example, If you write an object or an array with memcache, it's interpreted as an integer by memcached.  If you write it with memcached, it's interpreted as a string by memcache.<br /><br />tl;dr - You can't safely switch between memcache and memcached without a either a cache flush or isolated cache environments.<br /><br /><span class="default">&lt;?php<br />$memcache </span><span class="keyword">= new </span><span class="default">Memcache</span><span class="keyword">;<br /></span><span class="default">$memcacheD </span><span class="keyword">= new </span><span class="default">Memcached</span><span class="keyword">;<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">);<br /></span><span class="default">$memcacheD</span><span class="keyword">-&gt;</span><span class="default">addServers</span><span class="keyword">(</span><span class="default">$servers</span><span class="keyword">);<br /><br /></span><span class="default">$checks </span><span class="keyword">= array(<br />    </span><span class="default">123</span><span class="keyword">,<br />    </span><span class="default">4542.32</span><span class="keyword">,<br />    </span><span class="string">'a string'</span><span class="keyword">,<br />    </span><span class="default">true</span><span class="keyword">,<br />    array(</span><span class="default">123</span><span class="keyword">, </span><span class="string">'string'</span><span class="keyword">),<br />    (object)array(</span><span class="string">'key1' </span><span class="keyword">=&gt; </span><span class="string">'value1'</span><span class="keyword">),<br />);<br />foreach (</span><span class="default">$checks </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />    print </span><span class="string">"Checking WRITE with Memcache\n"</span><span class="keyword">;<br />    </span><span class="default">$key </span><span class="keyword">= </span><span class="string">'cachetest' </span><span class="keyword">. </span><span class="default">$i</span><span class="keyword">;<br />    </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />    </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">);<br />    </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br />    </span><span class="default">$valD </span><span class="keyword">= </span><span class="default">$memcacheD</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br />    if (</span><span class="default">$val </span><span class="keyword">!== </span><span class="default">$valD</span><span class="keyword">) {<br />        print </span><span class="string">"Not compatible!"</span><span class="keyword">;<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">compact</span><span class="keyword">(</span><span class="string">'val'</span><span class="keyword">, </span><span class="string">'valD'</span><span class="keyword">));<br />    }<br /><br />    print </span><span class="string">"Checking WRITE with MemcacheD\n"</span><span class="keyword">;<br />    </span><span class="default">$key </span><span class="keyword">= </span><span class="string">'cachetest' </span><span class="keyword">. </span><span class="default">$i</span><span class="keyword">;<br />    </span><span class="default">$memcacheD</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />    </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">);<br />    </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br />    </span><span class="default">$valD </span><span class="keyword">= </span><span class="default">$memcacheD</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br />    if (</span><span class="default">$val </span><span class="keyword">!== </span><span class="default">$valD</span><span class="keyword">) {<br />        print </span><span class="string">"Not compatible!"</span><span class="keyword">;<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">compact</span><span class="keyword">(</span><span class="string">'val'</span><span class="keyword">, </span><span class="string">'valD'</span><span class="keyword">));<br />    }<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121617">  <div class="votes">
    <div id="Vu121617">
    <a href="/manual/vote-note.php?id=121617&amp;page=book.memcache&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121617">
    <a href="/manual/vote-note.php?id=121617&amp;page=book.memcache&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121617" title="61% like this...">
    13
    </div>
  </div>
  <a href="#121617" class="name">
  <strong class="user"><em>xrobau at gmail dot com</em></strong></a><a class="genanchor" href="#121617"> &para;</a><div class="date" title="2017-09-07 01:35"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121617">
<div class="phpcode"><code><span class="html">Note that the Memcache 3.0.8 module DOES NOT WORK WITH PHP 7 (or higher)<br /><br />There is an open bug about this - see <a href="https://bugs.php.net/bug.php?id=72887" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=72887</a> and over 1 year old at time of writing - however, it appears that development of this module has been abandoned and the MemcacheD module is now the only way to access Memcache through PHP.<br /><br />If you are writing a NEW tool, and you want to use Memcache, use the MemcacheD library.  If you are trying to repair an old tool, you'll either have to stick with PHP 5.6, or, spend the time reworking your code to use MemcacheD.</span></code></div>
  </div>
 </div>
  <div class="note" id="122481">  <div class="votes">
    <div id="Vu122481">
    <a href="/manual/vote-note.php?id=122481&amp;page=book.memcache&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122481">
    <a href="/manual/vote-note.php?id=122481&amp;page=book.memcache&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122481" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#122481" class="name">
  <strong class="user"><em>Lajos Veres</em></strong></a><a class="genanchor" href="#122481"> &para;</a><div class="date" title="2018-03-06 05:30"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122481">
<div class="phpcode"><code><span class="html">3.0.8 is not really compatible with PHP 7, but this fork seems to be working:<br /><a href="https://github.com/websupport-sk/pecl-memcache" rel="nofollow" target="_blank">https://github.com/websupport-sk/pecl-memcache</a><br /><br />For new projects, memcacheD sounds safer, but this fork might help to keep  alive some legacy projects.<br /><br />Debian package manager chose this version: <a href="https://github.com/websupport-sk/pecl-memcache/commit/4991c2fff22d00dc81014cc92d2da7077ef4bc86" rel="nofollow" target="_blank">https://github.com/websupport-sk/pecl-memcache/commit/4991c2fff22d00dc81014cc92d2da7077ef4bc86</a><br /><br />Based on this:<br /><a href="http://ppa.launchpad.net/ondrej/php/ubuntu/pool/main/p/php-memcache/" rel="nofollow" target="_blank">http://ppa.launchpad.net/ondrej/php/ubuntu/pool/main/p/php-memcache/</a> <a href="https://packages.debian.org/sid/php/php-memcache" rel="nofollow" target="_blank">https://packages.debian.org/sid/php/php-memcache</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.memcache&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.memcache.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
