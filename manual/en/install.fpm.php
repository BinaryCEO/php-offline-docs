<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: FastCGI Process Manager (FPM) - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.fpm.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.fpm.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.fpm.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.cloud.digitalocean.php">
 <link rel="next" href="https://www.php.net/manual/en/install.fpm.install.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.fpm.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.fpm.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.fpm.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.fpm.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.fpm.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.fpm.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.fpm.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.fpm.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.fpm.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.fpm.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.fpm.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="FastCGI Process Manager (FPM)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: FastCGI Process Manager (FPM) - Manual" />
<meta name="twitter:description" content="FastCGI Process Manager (FPM)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: FastCGI Process Manager (FPM) - Manual" />
<meta itemprop="description" content="FastCGI Process Manager (FPM)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="FastCGI Process Manager (FPM)" />

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
        <a href="install.fpm.install.php">
          Installation &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.cloud.digitalocean.php">
          &laquo; DigitalOcean        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='install.php'>Installation and Configuration</a></li>      </ul>
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
            <option value='en/install.fpm.php' selected="selected">English</option>
            <option value='de/install.fpm.php'>German</option>
            <option value='es/install.fpm.php'>Spanish</option>
            <option value='fr/install.fpm.php'>French</option>
            <option value='it/install.fpm.php'>Italian</option>
            <option value='ja/install.fpm.php'>Japanese</option>
            <option value='pt_BR/install.fpm.php'>Brazilian Portuguese</option>
            <option value='ru/install.fpm.php'>Russian</option>
            <option value='tr/install.fpm.php'>Turkish</option>
            <option value='uk/install.fpm.php'>Ukrainian</option>
            <option value='zh/install.fpm.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.fpm" class="chapter">
   <h1 class="title">FastCGI Process Manager (FPM)</h1>
<h2>Table of Contents</h2><ul class="chunklist chunklist_chapter"><li><a href="install.fpm.install.php">Installation</a></li><li><a href="install.fpm.configuration.php">Configuration</a></li></ul>

   <p class="para">FPM (FastCGI Process Manager) is
a primary PHP FastCGI implementation containing some features (mostly) useful for heavy-loaded sites.
</p>
   <p class="para">
    These features include:
    <ul class="itemizedlist">
     <li class="listitem">
      <p class="para">
       advanced process management with graceful stop/start;
      </p>
     </li>
     <li class="listitem">
      <p class="para">
       pools that give ability to start workers with different
       uid/gid/chroot/environment, listening on different ports and using
       different php.ini (replaces safe_mode);
      </p>
     </li>
     <li class="listitem">
      <p class="para">
       configurable stdout and stderr logging;
      </p>
     </li>
     <li class="listitem">
      <p class="para">
       emergency restart in case of accidental opcode cache destruction;
      </p>
     </li>
     <li class="listitem">
      <p class="para">
       accelerated upload support;
      </p>
     </li>
     <li class="listitem">
      <p class="para">
       &quot;slowlog&quot; - logging scripts (not just their names, but their PHP
       backtraces too, using ptrace and similar things to read remote
       process&#039; execute_data) that are executed unusually slow;
      </p>
     </li>
     <li class="listitem">
      <p class="para">
       <span class="function"><a href="function.fastcgi-finish-request.php" class="function">fastcgi_finish_request()</a></span> - special function to finish
       request and flush all data while continuing to do something
       time-consuming (video converting, stats processing etc.);
      </p>
     </li>
     <li class="listitem">
      <p class="para">
       dynamic/ondemand/static child spawning;
      </p>
     </li>
     <li class="listitem">
      <p class="para">
       basic and extended status info (similar to Apache mod_status) with
       various formats like json, xml and openmetrics supported;
      </p>
     </li>
     <li class="listitem">
      <p class="para">
       php.ini-based config file. 
      </p>
     </li>
    </ul>
   </p>
   
   

  



   

  



  </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/fpm/index.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.fpm%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.fpm&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.fpm.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="123758">  <div class="votes">
    <div id="Vu123758">
    <a href="/manual/vote-note.php?id=123758&amp;page=install.fpm&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123758">
    <a href="/manual/vote-note.php?id=123758&amp;page=install.fpm&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123758" title="66% like this...">
    22
    </div>
  </div>
  <a href="#123758" class="name">
  <strong class="user"><em>info at f1-outsourcing dot eu</em></strong></a><a class="genanchor" href="#123758"> &para;</a><div class="date" title="2019-04-08 10:22"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123758">
<div class="phpcode"><code><span class="html">It looks like the php-fpm daemon is not able to use its groups it is running with.<br /><br /><a href="https://bugs.php.net/bug.php?id=77837" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=77837</a></span></code></div>
  </div>
 </div>
  <div class="note" id="121890">  <div class="votes">
    <div id="Vu121890">
    <a href="/manual/vote-note.php?id=121890&amp;page=install.fpm&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121890">
    <a href="/manual/vote-note.php?id=121890&amp;page=install.fpm&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121890" title="57% like this...">
    20
    </div>
  </div>
  <a href="#121890" class="name">
  <strong class="user"><em>ganlvtech at qq dot com</em></strong></a><a class="genanchor" href="#121890"> &para;</a><div class="date" title="2017-11-21 09:23"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121890">
<div class="phpcode"><code><span class="html">php-fpm is not avaliable on Windows, but you can use IIS or Apache as the "fastcgi process manager".<br /><br />If you have to use Nginx, here is a solution. Nginx provides a load balancing module. We can distribute the request to different php-cgi.exe process.<br /><br />&lt;<a href="http://nginx.org/en/docs/http/load_balancing.html&gt;" rel="nofollow" target="_blank">http://nginx.org/en/docs/http/load_balancing.html&gt;</a><br />&lt;<a href="http://nginx.org/en/docs/http/ngx_http_upstream_module.html&gt;" rel="nofollow" target="_blank">http://nginx.org/en/docs/http/ngx_http_upstream_module.html&gt;</a><br /><br />This is the origin nginx conf.<br />```<br />location ~ \.php$ {<br />    try_files  $uri = 404;<br />    fastcgi_pass  127.0.0.1:9000;<br />    fastcgi_index  index.php;<br />    include  fastcgi.conf;<br />}<br />```<br /><br />You can replace it by<br />```<br />upstream php {<br />    server  127.0.0.1:9000;<br />    server  127.0.0.1:9001;<br />    server  127.0.0.1:9002;<br />    server  127.0.0.1:9003;<br />}<br /><br />location ~ \.php$ {<br />    try_files  $uri = 404;<br />    fastcgi_pass  php;<br />    fastcgi_index  index.php;<br />    include  fastcgi.conf;<br />}<br />```<br /><br />CAUTION!!<br /><br />php-cgi.exe process will die after several requests, so you have to restart the php-cgi.exe manually to keep a process listening the port.<br /><br />DON'T USE THIS SOLUTION IN PRODUCTION!!</span></code></div>
  </div>
 </div>
  <div class="note" id="101366">  <div class="votes">
    <div id="Vu101366">
    <a href="/manual/vote-note.php?id=101366&amp;page=install.fpm&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101366">
    <a href="/manual/vote-note.php?id=101366&amp;page=install.fpm&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101366" title="52% like this...">
    22
    </div>
  </div>
  <a href="#101366" class="name">
  <strong class="user"><em>robin at robinwinslow dot co dot uk</em></strong></a><a class="genanchor" href="#101366"> &para;</a><div class="date" title="2010-12-12 10:05"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101366">
<div class="phpcode"><code><span class="html">Init script setup<br />===<br /><br />You will probably want to create an init script for your new php-fpm. Fortunately, PHP 5.3.3 provides one for you, which you should copy to your init directory and change permissions:<br /><br />$ cp &lt;php-5.3.3-source-dir&gt;/sapi/fpm/init.d.php-fpm.in /etc/init.d/php-fpm<br />$ chmod 755 /etc/init.d/php-fpm<br /><br />It requires a certain amount of setup. First of all, make sure your php-fpm.conf file is set up to  create a PID file when php-fpm starts. E.g.:<br />----<br />pid = /var/run/php-fpm.pid<br />----<br />(also make sure your php-fpm user has permission to create this file).<br /><br />Now open up your new init script (/etc/init.d/php-fpm) and set the variables at the top to their relevant values. E.g.:<br />---<br />prefix=<br />exec_prefix=<br />php_fpm_BIN=/sbin/php-fpm<br />php_fpm_CONF=/etc/php-fpm.conf<br />php_fpm_PID=/var/run/php-fpm.pid<br />---<br /><br />Your init script is now ready. You should now be able to start, stop and reload php-fpm:<br /><br />$ /etc/init.d/php-fpm start<br />$ /etc/init.d/php-fpm stop<br />$ /etc/init.d/php-fpm reload<br /><br />The one remaining thing you may wish to do is to add your new php-fpm init script to system start-up. E.g. in CentOS:<br /><br />$ /sbin/chkconfig php-fpm on<br /><br />===========<br /><br />Disclaimer: Although I did just do this on my own server about 20 mins ago, everything I've written here is off the top of my head, so it may not be 100% correct. Also, allow for differences in system setup. Some understanding of what you are doing is assumed.</span></code></div>
  </div>
 </div>
  <div class="note" id="104691">  <div class="votes">
    <div id="Vu104691">
    <a href="/manual/vote-note.php?id=104691&amp;page=install.fpm&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104691">
    <a href="/manual/vote-note.php?id=104691&amp;page=install.fpm&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104691" title="56% like this...">
    20
    </div>
  </div>
  <a href="#104691" class="name">
  <strong class="user"><em>joel k</em></strong></a><a class="genanchor" href="#104691"> &para;</a><div class="date" title="2011-06-30 12:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104691">
<div class="phpcode"><code><span class="html">the fpm process supports the USER2 signal, which is used to reload the config file.<br /><br />kill -USR2 [pid]<br /><br />should do the trick.</span></code></div>
  </div>
 </div>
  <div class="note" id="115045">  <div class="votes">
    <div id="Vu115045">
    <a href="/manual/vote-note.php?id=115045&amp;page=install.fpm&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115045">
    <a href="/manual/vote-note.php?id=115045&amp;page=install.fpm&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115045" title="58% like this...">
    18
    </div>
  </div>
  <a href="#115045" class="name">
  <strong class="user"><em>dreamcat4 at gmail dot com</em></strong></a><a class="genanchor" href="#115045"> &para;</a><div class="date" title="2014-05-16 03:17"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115045">
<div class="phpcode"><code><span class="html">Doesn't work? Enable logging!<br /><br />The php-fpm.log file is a great place to fault-find errors and get to the bottom of a problem. But be sure to enable logging for your specific worker pool. Or you won't see anything!<br /><br />Example:<br /><br />To enable error logging for the default [www] worker pool, add this line in the [www] section of your php-fpm.conf:<br /><br />[www]<br />catch_workers_output = yes</span></code></div>
  </div>
 </div>
  <div class="note" id="121725">  <div class="votes">
    <div id="Vu121725">
    <a href="/manual/vote-note.php?id=121725&amp;page=install.fpm&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121725">
    <a href="/manual/vote-note.php?id=121725&amp;page=install.fpm&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121725" title="59% like this...">
    13
    </div>
  </div>
  <a href="#121725" class="name">
  <strong class="user"><em>user at NOSPAM dot example dot com</em></strong></a><a class="genanchor" href="#121725"> &para;</a><div class="date" title="2017-10-04 06:15"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121725">
<div class="phpcode"><code><span class="html">It is important to note that FPM is not built with the windows binaries.  Many of the guides you may find online rely on php-cgi.exe.  Unfortunately they call it FPM but this is incorrect!<br /><br />The executable php-cgi.exe that is bundled with the windows binaries is a FastCGI interface but it is *not* FPM (Fastcgi Process Manager).  php-cgi.exe does not have multi-threading or concurrent request support, nor support for any of the FPM configuration options.<br /><br />The only solid information I've gathered into why FPM is not available is a bug report explaining that FPM is built around fork(), which is not natively available on windows (<a href="https://bugs.php.net/bug.php?id=62447" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=62447</a>).</span></code></div>
  </div>
 </div>
  <div class="note" id="122457">  <div class="votes">
    <div id="Vu122457">
    <a href="/manual/vote-note.php?id=122457&amp;page=install.fpm&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122457">
    <a href="/manual/vote-note.php?id=122457&amp;page=install.fpm&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122457" title="57% like this...">
    10
    </div>
  </div>
  <a href="#122457" class="name">
  <strong class="user"><em>ikrabbe dot ask at gmail dot com</em></strong></a><a class="genanchor" href="#122457"> &para;</a><div class="date" title="2018-02-28 11:45"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122457">
<div class="phpcode"><code><span class="html">I'm very unhappy with the way php-fpm handles requests.<br />There isn't even some SCRIPT_FILENAME in the RFC for CGI, an that's the only standard I found to handle the requests.<br /><br />Actually what you are doing with PATH_TRANSLATED is supposed to translate to the path, which is broken by media wikis, as they use the PATH_INFO to find the ressource, not some script.<br /><br />In the original CGI context, the PATH_INFO is passed to the CGI binary to specify some ressource argument. So actually<br /><br />    SCRIPT_NAME  ~ argv0<br />    PATH_INFO      ~ argv1<br /><br />in command context.<br /><br />Conclusion: We should rewrite php-fpm to obey the rfc3875 CGI standard.<br />Having SCRIPT_NAME pointing to /something.php, must translate to <br /><br />    CWD/something.php<br /><br />CWD is the working directory where php-fpm is started (or configured to change to).<br /><br />In case of chroot CWD = "".<br /><br />In any case the SCRIPT_NAME php script can be found with ./SCRIPT_NAME, from the CWD. So the undocumented not standardized SCRIPT_FILENAME should vanish! It breaks the CGI standard.</span></code></div>
  </div>
 </div>
  <div class="note" id="112045">  <div class="votes">
    <div id="Vu112045">
    <a href="/manual/vote-note.php?id=112045&amp;page=install.fpm&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112045">
    <a href="/manual/vote-note.php?id=112045&amp;page=install.fpm&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112045" title="53% like this...">
    12
    </div>
  </div>
  <a href="#112045" class="name">
  <strong class="user"><em>kokushibyou at gmail dot com</em></strong></a><a class="genanchor" href="#112045"> &para;</a><div class="date" title="2013-04-25 10:04"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112045">
<div class="phpcode"><code><span class="html">PHP-FPM is FAST - but be wary of using it while your code base is stored on NFS - under average load your NFS server will feel some serious strain. I have yet to find a work around for this bug: <a href="https://bugs.php.net/bug.php?id=52312" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=52312</a></span></code></div>
  </div>
 </div>
  <div class="note" id="128948">  <div class="votes">
    <div id="Vu128948">
    <a href="/manual/vote-note.php?id=128948&amp;page=install.fpm&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128948">
    <a href="/manual/vote-note.php?id=128948&amp;page=install.fpm&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128948" title="60% like this...">
    2
    </div>
  </div>
  <a href="#128948" class="name">
  <strong class="user"><em>&amp;#34;atesin&amp;#34; at the free google mail service</em></strong></a><a class="genanchor" href="#128948"> &para;</a><div class="date" title="2023-10-13 03:04"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128948">
<div class="phpcode"><code><span class="html">in response to "ikrabbe dot ask at gmail dot com" about SCRIPT_NAME and PATH_INFO being empty, this could be related...<br /><br />while configuring php-fpm with nginx in debian (actually raspberry pi), a comment line in .conf grabbed my attention<br /><br />there is a "feature" (that looks more like a bug) reported about 10 years ago in <a href="http://trac.nginx.org/nginx/ticket/321" rel="nofollow" target="_blank">http://trac.nginx.org/nginx/ticket/321</a> ... in which "try_files" could reset the contents of $fastcgi_script_name and $fastcgi_path_info ... this is a workaround mentioned in forums by user "zakaria"<br /><br /><span class="default">&lt;?php </span><span class="comment">/* not actual php code but nginx .conf */<br /></span><span class="default">location </span><span class="keyword">~ [^/]\.</span><span class="default">php</span><span class="keyword">(/|$)<br />{<br /></span><span class="default">fastcgi_split_path_info </span><span class="keyword">^(.+?\.</span><span class="default">php</span><span class="keyword">)(/.*)$;<br /></span><span class="comment"># Save the $fastcgi_path_info before try_files clear it<br /></span><span class="default">set $path_info $fastcgi_path_info</span><span class="keyword">;<br /></span><span class="default">fastcgi_param PATH_INFO $path_info</span><span class="keyword">;<br /></span><span class="default">try_files $fastcgi_script_name </span><span class="keyword">=</span><span class="default">404</span><span class="keyword">;<br /><br /></span><span class="default">fastcgi_pass unix</span><span class="keyword">:/var/</span><span class="default">run</span><span class="keyword">/</span><span class="default">php5</span><span class="keyword">-</span><span class="default">fpm</span><span class="keyword">.</span><span class="default">sock</span><span class="keyword">;<br /></span><span class="default">fastcgi_index index</span><span class="keyword">.</span><span class="default">php</span><span class="keyword">;<br />include </span><span class="default">fastcgi_params</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128604">  <div class="votes">
    <div id="Vu128604">
    <a href="/manual/vote-note.php?id=128604&amp;page=install.fpm&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128604">
    <a href="/manual/vote-note.php?id=128604&amp;page=install.fpm&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128604" title="53% like this...">
    1
    </div>
  </div>
  <a href="#128604" class="name">
  <strong class="user"><em>jpmkn.iki.fi</em></strong></a><a class="genanchor" href="#128604"> &para;</a><div class="date" title="2023-06-11 09:56"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128604">
<div class="phpcode"><code><span class="html">@ ikrabbe you might want to look at mod_rewrite to address the environment variable variation(!) between cgi and cli php.</span></code></div>
  </div>
 </div>
  <div class="note" id="128950">  <div class="votes">
    <div id="Vu128950">
    <a href="/manual/vote-note.php?id=128950&amp;page=install.fpm&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128950">
    <a href="/manual/vote-note.php?id=128950&amp;page=install.fpm&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128950" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128950" class="name">
  <strong class="user"><em>&amp;#34;atesin&amp;#34; at the free google mail service</em></strong></a><a class="genanchor" href="#128950"> &para;</a><div class="date" title="2023-10-13 03:13"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128950">
<div class="phpcode"><code><span class="html">in response to "dreamcat4 at gmail dot com" about enabling logs in php-fpm<br /><br />i *hate* going blind, so enabling logs is generally the first thing i do...<br /><br />by doing dreamcat4 suggestion, logs got enabled but mixed with php process logs ... instead doing that and to isolate logs from [www] worker pool in its own file, these directives worked for me in "www" worker .ini file (you have to set directories and permissions before)<br /><br />php_admin_flag[log_errors] = on<br />php_admin_value[error_log] = /var/log/php-fpm/www-error.log</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=install.fpm&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.fpm.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="install.php">Installation and Configuration</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="install.general.php" title="General Installation Considerations">General Installation Considerations</a>
                        </li>
                                                <li class="">
                            <a href="install.unix.php" title="Installation on Unix systems">Installation on Unix systems</a>
                        </li>
                                                <li class="">
                            <a href="install.macosx.php" title="Installation on macOS">Installation on macOS</a>
                        </li>
                                                <li class="">
                            <a href="install.windows.php" title="Installation on Windows systems">Installation on Windows systems</a>
                        </li>
                                                <li class="">
                            <a href="install.cloud.php" title="Installation on Cloud Computing platforms">Installation on Cloud Computing platforms</a>
                        </li>
                                                <li class="current">
                            <a href="install.fpm.php" title="FastCGI Process Manager (FPM)">FastCGI Process Manager (FPM)</a>
                        </li>
                                                <li class="">
                            <a href="install.pecl.php" title="Installation of PECL extensions">Installation of PECL extensions</a>
                        </li>
                                                <li class="">
                            <a href="install.composer.intro.php" title="Introduction to Composer">Introduction to Composer</a>
                        </li>
                                                <li class="">
                            <a href="install.pie.intro.php" title="Introduction to PIE">Introduction to PIE</a>
                        </li>
                                                <li class="">
                            <a href="configuration.php" title="Runtime Configuration">Runtime Configuration</a>
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
