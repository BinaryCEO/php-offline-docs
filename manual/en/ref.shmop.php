<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Shared Memory Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.shmop.php">
 <link rel="shorturl" href="https://www.php.net/shmop">
 <link rel="alternate" href="https://www.php.net/shmop" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.shmop.php">
 <link rel="prev" href="https://www.php.net/manual/en/shmop.examples-basic.php">
 <link rel="next" href="https://www.php.net/manual/en/function.shmop-close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.shmop.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.shmop.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.shmop.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.shmop.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.shmop.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.shmop.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.shmop.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.shmop.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.shmop.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.shmop.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.shmop.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Shared Memory Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Shared Memory Functions - Manual" />
<meta name="twitter:description" content="Shared Memory Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Shared Memory Functions - Manual" />
<meta itemprop="description" content="Shared Memory Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Shared Memory Functions" />

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
        <a href="function.shmop-close.php">
          shmop_close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="shmop.examples-basic.php">
          &laquo; Basic usage        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.shmop.php'>Shared Memory</a></li>      </ul>
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
            <option value='en/ref.shmop.php' selected="selected">English</option>
            <option value='de/ref.shmop.php'>German</option>
            <option value='es/ref.shmop.php'>Spanish</option>
            <option value='fr/ref.shmop.php'>French</option>
            <option value='it/ref.shmop.php'>Italian</option>
            <option value='ja/ref.shmop.php'>Japanese</option>
            <option value='pt_BR/ref.shmop.php'>Brazilian Portuguese</option>
            <option value='ru/ref.shmop.php'>Russian</option>
            <option value='tr/ref.shmop.php'>Turkish</option>
            <option value='uk/ref.shmop.php'>Ukrainian</option>
            <option value='zh/ref.shmop.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.shmop" class="reference">
 <h1 class="title">Shared Memory Functions</h1>

 






























<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.shmop-close.php">shmop_close</a> — Close shared memory block</li><li><a href="function.shmop-delete.php">shmop_delete</a> — Delete shared memory block</li><li><a href="function.shmop-open.php">shmop_open</a> — Create or open shared memory block</li><li><a href="function.shmop-read.php">shmop_read</a> — Read data from shared memory block</li><li><a href="function.shmop-size.php">shmop_size</a> — Get size of shared memory block</li><li><a href="function.shmop-write.php">shmop_write</a> — Write data into shared memory block</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/shmop/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.shmop%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.shmop&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.shmop.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="48785">  <div class="votes">
    <div id="Vu48785">
    <a href="/manual/vote-note.php?id=48785&amp;page=ref.shmop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48785">
    <a href="/manual/vote-note.php?id=48785&amp;page=ref.shmop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48785" title="80% like this...">
    12
    </div>
  </div>
  <a href="#48785" class="name">
  <strong class="user"><em>Craig Manley</em></strong></a><a class="genanchor" href="#48785"> &para;</a><div class="date" title="2005-01-06 03:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48785">
<div class="phpcode"><code><span class="html">Since there is no mention of the (lack of) need for locking here, I took a look into the shmop.c extensions code. So correct me if I'm wrong, but the shmop.c extension uses memcpy() to copy strings to and from shared memory without any form of locking, and as far as I know, memcpy() is not atomic.<br /><br />If that's true as I suspect, then these 'easy to use' functions are not so 'easy to use' any more and have to be wrapped in locks (e.g. semaphores, flocks, whatever).</span></code></div>
  </div>
 </div>
  <div class="note" id="61692">  <div class="votes">
    <div id="Vu61692">
    <a href="/manual/vote-note.php?id=61692&amp;page=ref.shmop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61692">
    <a href="/manual/vote-note.php?id=61692&amp;page=ref.shmop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61692" title="63% like this...">
    6
    </div>
  </div>
  <a href="#61692" class="name">
  <strong class="user"><em>joeldg at gmail.com</em></strong></a><a class="genanchor" href="#61692"> &para;</a><div class="date" title="2006-02-09 11:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61692">
<div class="phpcode"><code><span class="html">I wrote a php memcache back in 2003 as a sort of proof of concept
<br />it is use on a few machines for doing heavy page load caching...
<br />it works very well.
<br />Following are some of the core functions I made 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">###############################################
<br />#### shared mem functions
<br />/*
<br />    for debugging these
<br />        use `ipcs` to view current memory
<br />        use `ipcrm -m {shmid}` to remove
<br />        on some systems use `ipcclean` to clean up unused memory if you
<br />        don't want to do it by hand
<br />*/
<br />###############################################
<br />    </span><span class="keyword">function </span><span class="default">get_key</span><span class="keyword">(</span><span class="default">$fsize</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">){
<br />        if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">TMPDIR</span><span class="keyword">.</span><span class="default">TMPPRE</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">)){
<br />            </span><span class="default">touch</span><span class="keyword">(</span><span class="default">TMPDIR</span><span class="keyword">.</span><span class="default">TMPPRE</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">);
<br />        }
<br />        </span><span class="default">$shmkey </span><span class="keyword">= @</span><span class="default">shmop_open</span><span class="keyword">(</span><span class="default">ftok</span><span class="keyword">(</span><span class="default">TMPDIR</span><span class="keyword">.</span><span class="default">TMPPRE</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'R'</span><span class="keyword">), </span><span class="string">"c"</span><span class="keyword">, </span><span class="default">0644</span><span class="keyword">, </span><span class="default">$fsize</span><span class="keyword">);
<br />        if(!</span><span class="default">$shmkey</span><span class="keyword">) {
<br />                return </span><span class="default">false</span><span class="keyword">;
<br />        }else{
<br />            return </span><span class="default">$shmkey</span><span class="keyword">;
<br />        }</span><span class="comment">//fi
<br />    </span><span class="keyword">}
<br />    function </span><span class="default">writemem</span><span class="keyword">(</span><span class="default">$fdata</span><span class="keyword">, </span><span class="default">$shmkey</span><span class="keyword">){
<br />        if(</span><span class="default">MEMCOMPRESS </span><span class="keyword">&amp;&amp; </span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'gzcompress'</span><span class="keyword">)){
<br />            </span><span class="default">$fdata </span><span class="keyword">= @</span><span class="default">gzcompress</span><span class="keyword">(</span><span class="default">$fdata</span><span class="keyword">, </span><span class="default">MEMCOMPRESSLVL</span><span class="keyword">);
<br />        }
<br />        </span><span class="default">$fsize </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$fdata</span><span class="keyword">);
<br />        </span><span class="default">$shm_bytes_written </span><span class="keyword">= </span><span class="default">shmop_write</span><span class="keyword">(</span><span class="default">$shmkey</span><span class="keyword">, </span><span class="default">$fdata</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br />        </span><span class="default">updatestats</span><span class="keyword">(</span><span class="default">$shm_bytes_written</span><span class="keyword">, </span><span class="string">"add"</span><span class="keyword">);
<br />        if(</span><span class="default">$shm_bytes_written </span><span class="keyword">!= </span><span class="default">$fsize</span><span class="keyword">) {
<br />                return </span><span class="default">false</span><span class="keyword">;
<br />        }else{
<br />            return </span><span class="default">$shm_bytes_written</span><span class="keyword">;
<br />        }</span><span class="comment">//fi
<br />    </span><span class="keyword">}
<br />    function </span><span class="default">readmem</span><span class="keyword">(</span><span class="default">$shmkey</span><span class="keyword">, </span><span class="default">$shm_size</span><span class="keyword">){
<br />        </span><span class="default">$my_string </span><span class="keyword">= @</span><span class="default">shmop_read</span><span class="keyword">(</span><span class="default">$shmkey</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$shm_size</span><span class="keyword">);
<br />        if(</span><span class="default">MEMCOMPRESS </span><span class="keyword">&amp;&amp; </span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'gzuncompress'</span><span class="keyword">)){
<br />            </span><span class="default">$my_string </span><span class="keyword">= @</span><span class="default">gzuncompress</span><span class="keyword">(</span><span class="default">$my_string</span><span class="keyword">);
<br />        }
<br />        if(!</span><span class="default">$my_string</span><span class="keyword">) {
<br />                return </span><span class="default">false</span><span class="keyword">;
<br />        }else{
<br />            return </span><span class="default">$my_string</span><span class="keyword">;
<br />        }</span><span class="comment">//fi
<br />    </span><span class="keyword">}
<br />    function </span><span class="default">deletemem</span><span class="keyword">(</span><span class="default">$shmkey</span><span class="keyword">){
<br />        </span><span class="default">$size </span><span class="keyword">= @</span><span class="default">shmop_size</span><span class="keyword">(</span><span class="default">$shmkey</span><span class="keyword">);
<br />        if(</span><span class="default">$size </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">){ </span><span class="default">updatestats</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="string">"del"</span><span class="keyword">); }
<br />        if(!@</span><span class="default">shmop_delete</span><span class="keyword">(</span><span class="default">$shmkey</span><span class="keyword">)) {
<br />            @</span><span class="default">shmop_close</span><span class="keyword">(</span><span class="default">$shmkey</span><span class="keyword">);
<br />                return </span><span class="default">false</span><span class="keyword">;
<br />        }else{
<br />            @</span><span class="default">shmop_close</span><span class="keyword">(</span><span class="default">$shmkey</span><span class="keyword">);
<br />            return </span><span class="default">true</span><span class="keyword">;
<br />        }
<br />    }
<br />    function </span><span class="default">closemem</span><span class="keyword">(</span><span class="default">$shmkey</span><span class="keyword">){
<br />        if(!</span><span class="default">shmop_close</span><span class="keyword">(</span><span class="default">$shmkey</span><span class="keyword">)) {
<br />                return </span><span class="default">false</span><span class="keyword">;
<br />        }else{
<br />            return </span><span class="default">true</span><span class="keyword">;
<br />        }
<br />    }
<br />    function </span><span class="default">iskey</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">){
<br />        if(</span><span class="default">$ret </span><span class="keyword">= </span><span class="default">get_key</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">)){
<br />            return </span><span class="default">$ret</span><span class="keyword">;
<br />        }else{
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />    }
<br /></span><span class="comment">################################################
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61242">  <div class="votes">
    <div id="Vu61242">
    <a href="/manual/vote-note.php?id=61242&amp;page=ref.shmop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61242">
    <a href="/manual/vote-note.php?id=61242&amp;page=ref.shmop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61242" title="71% like this...">
    3
    </div>
  </div>
  <a href="#61242" class="name">
  <strong class="user"><em>Roy &lt;roy AT enhost.com&gt;</em></strong></a><a class="genanchor" href="#61242"> &para;</a><div class="date" title="2006-01-28 09:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61242">
<div class="phpcode"><code><span class="html">I have written a script to highlight the superiority of shared memory storage.
<br />Although it doesn't use the shmop function, the underlying concept is similar.
<br />'/shm_dir/' is a tmpfs directory, which is based on shared memory, that I have mounted on the server.
<br />
<br />Below is the result on an Intel Pentium VI 2.8 server:
<br />
<br />IO test on 1000 files
<br />IO Result of Regular Directory : 0.079015016555786
<br />IO Result of Shared Memory Directory : 0.047761917114258
<br />
<br />IO test on 10000 files
<br />IO Result of Regular Directory : 3.7090260982513
<br />IO Result of Shared Memory Directory : 0.46256303787231
<br />
<br />IO test on 40000 files
<br />IO Result of Regular Directory : 117.35703110695 seconds
<br />IO Result of Shared Memory Directory : 2.6221358776093 seconds
<br />
<br />The difference is not very apparent nor convincing at 100 files.
<br />But when we step it up a level to 10000 and 40000 files, it becomes pretty obvious that Shared Memory is a better contender.
<br />
<br />Script courtesy of <a href="http://www.enhost.com" rel="nofollow" target="_blank">http://www.enhost.com</a>
<br />
<br /><span class="default">&lt;?php
<br />set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Your regular directory. Make sure it is write enabled
<br /></span><span class="default">$setting</span><span class="keyword">[</span><span class="string">'regular_dir'</span><span class="keyword">] =  </span><span class="string">'/home/user/regular_directory/'</span><span class="keyword">;    
<br />
<br /></span><span class="comment">// Your shared memory directory. 
<br /></span><span class="default">$setting</span><span class="keyword">[</span><span class="string">'shm_dir'</span><span class="keyword">] =  </span><span class="string">'/shm_dir/'</span><span class="keyword">;    
<br />
<br /></span><span class="comment">// Number of files to read and write
<br /></span><span class="default">$setting</span><span class="keyword">[</span><span class="string">'files'</span><span class="keyword">] =  </span><span class="default">40000</span><span class="keyword">;                    
<br />
<br />function </span><span class="default">IO_Test</span><span class="keyword">(</span><span class="default">$mode</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$starttime </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">()+</span><span class="default">microtime</span><span class="keyword">();
<br />
<br />    global </span><span class="default">$setting</span><span class="keyword">;
<br />
<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt; </span><span class="default">$setting</span><span class="keyword">[</span><span class="string">'files'</span><span class="keyword">] ;</span><span class="default">$i</span><span class="keyword">++)
<br />        {
<br />            </span><span class="default">$filename </span><span class="keyword">= </span><span class="default">$setting</span><span class="keyword">[</span><span class="default">$mode</span><span class="keyword">].</span><span class="string">'test'</span><span class="keyword">.</span><span class="default">$i</span><span class="keyword">.</span><span class="string">'.txt'</span><span class="keyword">;
<br />            </span><span class="default">$content </span><span class="keyword">= </span><span class="string">"Just a random content"</span><span class="keyword">;
<br />        
<br />                </span><span class="comment">// Just some error detection
<br />               </span><span class="keyword">if (!</span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">'w+'</span><span class="keyword">)) 
<br />               {
<br />                     echo </span><span class="string">"Can't open the file "</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">;
<br />                     exit;
<br />               }
<br />            
<br />               if (</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$content </span><span class="keyword">) === </span><span class="default">FALSE</span><span class="keyword">) 
<br />               {
<br />                   echo </span><span class="string">"Can't write to file : "</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">;
<br />                   exit;
<br />               }
<br />              
<br />               </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />            
<br />            </span><span class="comment">// Read Test
<br />            </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);
<br />    
<br />        }
<br />
<br />   </span><span class="default">$endtime </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">()+</span><span class="default">microtime</span><span class="keyword">(); 
<br />   
<br />   </span><span class="default">$totaltime </span><span class="keyword">= (</span><span class="default">$endtime </span><span class="keyword">- </span><span class="default">$starttime</span><span class="keyword">); 
<br />   
<br />   return </span><span class="default">$totaltime</span><span class="keyword">;
<br />
<br />}
<br />
<br />echo </span><span class="string">'&lt;b&gt;IO test on '</span><span class="keyword">.</span><span class="default">$setting</span><span class="keyword">[</span><span class="string">'files'</span><span class="keyword">]. </span><span class="string">' files&lt;/b&gt;&lt;br&gt;'</span><span class="keyword">;
<br />echo </span><span class="string">'IO Result of &lt;b&gt;Regular&lt;/b&gt; Directory : '</span><span class="keyword">.</span><span class="default">IO_Test</span><span class="keyword">(</span><span class="string">'regular_dir'</span><span class="keyword">)   .</span><span class="string">' seconds&lt;br&gt;'</span><span class="keyword">;
<br />echo </span><span class="string">'IO Result of &lt;b&gt;Shared Memory&lt;/b&gt; Directory : '</span><span class="keyword">.</span><span class="default">IO_Test</span><span class="keyword">(</span><span class="string">'shm_dir'</span><span class="keyword">)       .</span><span class="string">' seconds&lt;br&gt;'</span><span class="keyword">;
<br />
<br /></span><span class="comment">/* Removal of files to avoid underestimation
<br />#
<br />#         Failure to remove files will result in inaccurate benchmark
<br />#         as it will result in the IO_Test function not re-creating the existing files 
<br />*/ 
<br />    </span><span class="keyword">foreach ( </span><span class="default">glob</span><span class="keyword">(</span><span class="default">$setting</span><span class="keyword">[</span><span class="string">'regular_dir'</span><span class="keyword">].</span><span class="string">"*.txt"</span><span class="keyword">) as </span><span class="default">$filename</span><span class="keyword">) {
<br />       </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);</span><span class="default">$cnt </span><span class="keyword">++;
<br />    }
<br />    foreach ( </span><span class="default">glob</span><span class="keyword">(</span><span class="default">$setting</span><span class="keyword">[</span><span class="string">'shm_dir'</span><span class="keyword">].</span><span class="string">"*.txt"</span><span class="keyword">) as </span><span class="default">$filename</span><span class="keyword">) {
<br />       </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);</span><span class="default">$cnt </span><span class="keyword">++;
<br />    }
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57184">  <div class="votes">
    <div id="Vu57184">
    <a href="/manual/vote-note.php?id=57184&amp;page=ref.shmop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57184">
    <a href="/manual/vote-note.php?id=57184&amp;page=ref.shmop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57184" title="62% like this...">
    2
    </div>
  </div>
  <a href="#57184" class="name">
  <strong class="user"><em>hackie at prohost dot org</em></strong></a><a class="genanchor" href="#57184"> &para;</a><div class="date" title="2005-09-26 09:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57184">
<div class="phpcode"><code><span class="html">It's not the job of the shmop extension to provide locking, there are many locking schemes avalible, if you need some sort of atomic operations choose a locking scheme that suits you and use it.</span></code></div>
  </div>
 </div>
  <div class="note" id="23616">  <div class="votes">
    <div id="Vu23616">
    <a href="/manual/vote-note.php?id=23616&amp;page=ref.shmop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23616">
    <a href="/manual/vote-note.php?id=23616&amp;page=ref.shmop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23616" title="60% like this...">
    1
    </div>
  </div>
  <a href="#23616" class="name">
  <strong class="user"><em>stoimenov at email dot com</em></strong></a><a class="genanchor" href="#23616"> &para;</a><div class="date" title="2002-07-23 05:18"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23616">
<div class="phpcode"><code><span class="html">Windows does support shared memory through memory mapped file. Check the following functions for details:<br /><br /> * CreateFileMapping<br /> * MapViewOfFile</span></code></div>
  </div>
 </div>
  <div class="note" id="129891">  <div class="votes">
    <div id="Vu129891">
    <a href="/manual/vote-note.php?id=129891&amp;page=ref.shmop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129891">
    <a href="/manual/vote-note.php?id=129891&amp;page=ref.shmop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129891" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129891" class="name">
  <strong class="user"><em>eddeeboo at gmail dot com</em></strong></a><a class="genanchor" href="#129891"> &para;</a><div class="date" title="2024-11-30 02:33"><strong>9 months ago</strong></div>
  <div class="text" id="Hcom129891">
<div class="phpcode"><code><span class="html">Despite the fact that reads from and writes to the shared memory are not atomic, reading and writing just ONE byte is always atomic. This can be very useful if your application frequently reads and rarely writes "small" chunks of data (~10-15 bytes). You can avoid using any kind of locks by signing your data by 8-bit checksum (like CRC-8). This is an effective and reliable way to ensure that your data is not corrupted. The redundancy is naturally 8 bits.</span></code></div>
  </div>
 </div>
  <div class="note" id="122703">  <div class="votes">
    <div id="Vu122703">
    <a href="/manual/vote-note.php?id=122703&amp;page=ref.shmop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122703">
    <a href="/manual/vote-note.php?id=122703&amp;page=ref.shmop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122703" title="100% like this...">
    1
    </div>
  </div>
  <a href="#122703" class="name">
  <strong class="user"><em>Arikania</em></strong></a><a class="genanchor" href="#122703"> &para;</a><div class="date" title="2018-05-06 04:11"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122703">
<div class="phpcode"><code><span class="html">The shmop implementation as described in this help page is acttually merely a ramdisk / tmpfs that exists only within php, and even only on the linux servers. Or am I missing something?<br /><br />On windows, the very same functionality can easily be achieved by creating such disk.<br /><br />In fact, on my own server, I do use a tmpfs disk instead of the - as it appears to me - limited shmop feature.<br /><br />Why not implement a $_SHARED or $_MUTUAL SuperGlobal in which we can create variables at will, and that is shared by all connections?<br /><br />This would greatly improve performance of many PHP applications, and could save a lot of burden on server memory. Especially if those variables could be classes containing functions.<br /><br />You could implement that it is up to the programmer to guard atomicity.<br /><br />Such superglobal would be feasible on windows servers as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="10592">  <div class="votes">
    <div id="Vu10592">
    <a href="/manual/vote-note.php?id=10592&amp;page=ref.shmop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10592">
    <a href="/manual/vote-note.php?id=10592&amp;page=ref.shmop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10592" title="100% like this...">
    1
    </div>
  </div>
  <a href="#10592" class="name">
  <strong class="user"><em>rei at prohost dot org</em></strong></a><a class="genanchor" href="#10592"> &para;</a><div class="date" title="2001-01-11 03:16"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10592">
<div class="phpcode"><code><span class="html">The idea behind SHMOP is an easy to use shared memory interface, 
<br />without any additional headers added to the shared memory segment 
<br />or requiring any special special controls to access the shared memory
<br />segment outside of PHP. SHMOP borrows its api from C's api to shm,
<br />which makes it very easy to use, because it treats shared memory, like C, as    
<br />a file of sorts. This makes it very easy to use even for novices, due to this  
<br />functionality. Most importantly SHMOP uses shm segments to store raw data,
<br />which means you don't need to worry about matching headers, etc... when you are
<br />using C, perl or other programming languages to open/create/read/write shm segments
<br />that were create or are going to be used by PHP. In this it differs from
<br />sysvshm, who's shm interface uses a specialized header, which resides inside
<br />the shared memory segment this adds an unnecessary level of difficulty when
<br />you want to access php shm from external programs.
<br />Also, from my personal tests in Linux 2.2/2.4 and FreeBSD 3.3 SHMOP is about
<br />20% faster then sysvshm, mostly due to fact it does not need to parse the
<br />specialized header and stores the data in raw form.</span></code></div>
  </div>
 </div>
  <div class="note" id="10590">  <div class="votes">
    <div id="Vu10590">
    <a href="/manual/vote-note.php?id=10590&amp;page=ref.shmop&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10590">
    <a href="/manual/vote-note.php?id=10590&amp;page=ref.shmop&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10590" title="50% like this...">
    0
    </div>
  </div>
  <a href="#10590" class="name">
  <strong class="user"><em>slavapl at mailandnews dot com</em></strong></a><a class="genanchor" href="#10590"> &para;</a><div class="date" title="2001-01-11 03:02"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10590">
<div class="phpcode"><code><span class="html">What you need to realise is that sysvshm is extremly php oriented in it's ability, it's quite a kludge interfacing other NON PHP utilities with it. For example have you tried using sysvshm to read an shm segment NOT created by php? It's not possible, because sysvshm uses a proprietry format, in essense it can ONLY be used within PHP unless of course you take time to figure out this format. 
<br />So basically, the purpose of shmop is to provide a symple interface to shared memory that can be used with OTHER NON php shm creators. 
<br />
<br />Hope this clears it up.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.shmop&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.shmop.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.shmop.php">Shared Memory</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.shmop.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="shmop.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="shmop.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="ref.shmop.php" title="Shared Memory Functions">Shared Memory Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.shmop.php" title="Shmop">Shmop</a>
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
