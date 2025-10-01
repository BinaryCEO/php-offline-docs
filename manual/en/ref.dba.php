<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DBA Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.dba.php">
 <link rel="shorturl" href="https://www.php.net/dba">
 <link rel="alternate" href="https://www.php.net/dba" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.dba.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.dba-connection.php">
 <link rel="next" href="https://www.php.net/manual/en/function.dba-close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.dba.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.dba.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.dba.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.dba.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.dba.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.dba.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.dba.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.dba.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.dba.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.dba.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.dba.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="DBA Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DBA Functions - Manual" />
<meta name="twitter:description" content="DBA Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DBA Functions - Manual" />
<meta itemprop="description" content="DBA Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="DBA Functions" />

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
        <a href="function.dba-close.php">
          dba_close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.dba-connection.php">
          &laquo; Dba\Connection        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.dba.php'>DBA</a></li>      </ul>
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
            <option value='en/ref.dba.php' selected="selected">English</option>
            <option value='de/ref.dba.php'>German</option>
            <option value='es/ref.dba.php'>Spanish</option>
            <option value='fr/ref.dba.php'>French</option>
            <option value='it/ref.dba.php'>Italian</option>
            <option value='ja/ref.dba.php'>Japanese</option>
            <option value='pt_BR/ref.dba.php'>Brazilian Portuguese</option>
            <option value='ru/ref.dba.php'>Russian</option>
            <option value='tr/ref.dba.php'>Turkish</option>
            <option value='uk/ref.dba.php'>Ukrainian</option>
            <option value='zh/ref.dba.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.dba" class="reference">
 <h1 class="title">DBA Functions</h1>














































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.dba-close.php">dba_close</a> — Close a DBA database</li><li><a href="function.dba-delete.php">dba_delete</a> — Delete DBA entry specified by key</li><li><a href="function.dba-exists.php">dba_exists</a> — Check whether key exists</li><li><a href="function.dba-fetch.php">dba_fetch</a> — Fetch data specified by key</li><li><a href="function.dba-firstkey.php">dba_firstkey</a> — Fetch first key</li><li><a href="function.dba-handlers.php">dba_handlers</a> — List all the handlers available</li><li><a href="function.dba-insert.php">dba_insert</a> — Insert entry</li><li><a href="function.dba-key-split.php">dba_key_split</a> — Splits a key in string representation into array representation</li><li><a href="function.dba-list.php">dba_list</a> — List all open database files</li><li><a href="function.dba-nextkey.php">dba_nextkey</a> — Fetch next key</li><li><a href="function.dba-open.php">dba_open</a> — Open database</li><li><a href="function.dba-optimize.php">dba_optimize</a> — Optimize database</li><li><a href="function.dba-popen.php">dba_popen</a> — Open database persistently</li><li><a href="function.dba-replace.php">dba_replace</a> — Replace or insert entry</li><li><a href="function.dba-sync.php">dba_sync</a> — Synchronize database</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dba/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.dba%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.dba&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.dba.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107602">  <div class="votes">
    <div id="Vu107602">
    <a href="/manual/vote-note.php?id=107602&amp;page=ref.dba&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107602">
    <a href="/manual/vote-note.php?id=107602&amp;page=ref.dba&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107602" title="54% like this...">
    1
    </div>
  </div>
  <a href="#107602" class="name">
  <strong class="user"><em>Franz Korntner</em></strong></a><a class="genanchor" href="#107602"> &para;</a><div class="date" title="2012-02-21 09:10"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107602">
<div class="phpcode"><code><span class="html">If you need a 'download data' button that automatically fires up a spreadsheet (like Excel), find that fputcsv() isn't working as expected, that none of the installed DBA database engines create a spreadsheet that can be opened, and that XLS generating components are just too heavy weight, then this might just hit the spot:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// simple table to present<br /></span><span class="default">$data </span><span class="keyword">= array(<br />    array(</span><span class="string">'col1'</span><span class="keyword">,</span><span class="string">'col2'</span><span class="keyword">),<br />    array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">),<br />    array(</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">)<br />);<br /><br /></span><span class="comment">// pretend content (which is XML) is XLS native<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Pragma: public"</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Expires: 0"</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Cache-Control: must-revalidate, post-check=0, pre-check=0"</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Cache-Control: private"</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: application/vnd.ms-excel"</span><span class="keyword">); <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: attachment; filename=\"sheet.xls\";" </span><span class="keyword">);<br /><br /></span><span class="comment">// construct skeleton<br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'utf-8'</span><span class="keyword">);<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">preserveSpaces </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// optional<br /></span><span class="default">$n </span><span class="keyword">= new </span><span class="default">DOMProcessingInstruction</span><span class="keyword">(</span><span class="string">'mso-application'</span><span class="keyword">, </span><span class="string">'progid="Excel.Sheet"'</span><span class="keyword">);<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">);<br /><br /></span><span class="default">$workbook </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">DOMElement</span><span class="keyword">(</span><span class="string">'Workbook'</span><span class="keyword">));<br /></span><span class="default">$workbook</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'xmlns'</span><span class="keyword">,</span><span class="string">'urn:schemas-microsoft-com:office:spreadsheet'</span><span class="keyword">);<br /></span><span class="default">$workbook</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'xmlns:o'</span><span class="keyword">,</span><span class="string">'urn:schemas-microsoft-com:office:office'</span><span class="keyword">);<br /></span><span class="default">$workbook</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'xmlns:x'</span><span class="keyword">,</span><span class="string">'urn:schemas-microsoft-com:office:excel'</span><span class="keyword">);<br /></span><span class="default">$workbook</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'xmlns:ss'</span><span class="keyword">,</span><span class="string">'xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet'</span><span class="keyword">);<br /></span><span class="default">$workbook</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'xmlns:html'</span><span class="keyword">,</span><span class="string">'<a href="http://www.w3.org/TR/REC-html40" rel="nofollow" target="_blank">http://www.w3.org/TR/REC-html40</a>'</span><span class="keyword">);<br /><br /></span><span class="default">$styles </span><span class="keyword">= </span><span class="default">$workbook</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">DOMElement</span><span class="keyword">(</span><span class="string">'Styles'</span><span class="keyword">));<br /></span><span class="default">$style </span><span class="keyword">= </span><span class="default">$styles</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">DOMElement</span><span class="keyword">(</span><span class="string">'Style'</span><span class="keyword">));<br /></span><span class="default">$style</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'ss:ID'</span><span class="keyword">,</span><span class="string">'Default'</span><span class="keyword">);<br /></span><span class="default">$worksheet </span><span class="keyword">= </span><span class="default">$workbook</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">DOMElement</span><span class="keyword">(</span><span class="string">'Worksheet'</span><span class="keyword">));<br /></span><span class="default">$worksheet</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'ss:Name'</span><span class="keyword">,</span><span class="string">'sheet1'</span><span class="keyword">);<br /></span><span class="default">$xmltable </span><span class="keyword">= </span><span class="default">$worksheet</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">DOMElement</span><span class="keyword">(</span><span class="string">'Table'</span><span class="keyword">));<br /><br /></span><span class="comment">// populate with data<br /></span><span class="keyword">foreach (</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$datarow</span><span class="keyword">) {<br />    </span><span class="default">$xmlrow </span><span class="keyword">= </span><span class="default">$xmltable</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">DOMElement</span><span class="keyword">(</span><span class="string">'Row'</span><span class="keyword">));<br />    foreach (</span><span class="default">$datarow </span><span class="keyword">as </span><span class="default">$datacell</span><span class="keyword">) {<br />        </span><span class="default">$xmlcell </span><span class="keyword">= </span><span class="default">$xmlrow</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">DOMElement</span><span class="keyword">(</span><span class="string">'Cell'</span><span class="keyword">));<br />        </span><span class="default">$xmldata </span><span class="keyword">= </span><span class="default">$xmlcell</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(new </span><span class="default">DOMElement</span><span class="keyword">(</span><span class="string">'Data'</span><span class="keyword">, </span><span class="default">$datacell</span><span class="keyword">));<br />        </span><span class="default">$xmldata</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="string">'ss:Type'</span><span class="keyword">, </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$datacell</span><span class="keyword">) ? </span><span class="string">'Number' </span><span class="keyword">: </span><span class="string">'String'</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="comment">// display and quit<br /></span><span class="keyword">echo </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="40871">  <div class="votes">
    <div id="Vu40871">
    <a href="/manual/vote-note.php?id=40871&amp;page=ref.dba&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40871">
    <a href="/manual/vote-note.php?id=40871&amp;page=ref.dba&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40871" title="no votes...">
    0
    </div>
  </div>
  <a href="#40871" class="name">
  <strong class="user"><em>kevinphpdotnet at stormtide dot ca</em></strong></a><a class="genanchor" href="#40871"> &para;</a><div class="date" title="2004-03-17 11:10"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40871">
<div class="phpcode"><code><span class="html">When using db4 on redhat 7.3 you may get signal 11s on the apache child processes. The installation test scripts will report that db4 is working correctly as the cli will not sig 11 out. The solution is to check to see if mod_rewrite is installed with apache, if it is either dereference it from libdb.so.3 or build apache without mod rewrite. Once this is done you will no longer have your child processes dying out and db4 will work. If you do not get a sig 11 after dba_open just ignore this comment.</span></code></div>
  </div>
 </div>
  <div class="note" id="1965">  <div class="votes">
    <div id="Vu1965">
    <a href="/manual/vote-note.php?id=1965&amp;page=ref.dba&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd1965">
    <a href="/manual/vote-note.php?id=1965&amp;page=ref.dba&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V1965" title="no votes...">
    0
    </div>
  </div>
  <a href="#1965" class="name">
  <strong class="user"><em>djm at web dot us dot uu dot net</em></strong></a><a class="genanchor" href="#1965"> &para;</a><div class="date" title="1999-10-17 03:28"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom1965">
<div class="phpcode"><code><span class="html">With db2, you need to call dba_sync() to get the data written to disk; the examples are missing this.  db2 uses
<br />the BTREE file format, not the more common HASH.
<br />BTREE is faster, though, in my tests, so it's a good
<br />choice.</span></code></div>
  </div>
 </div>
  <div class="note" id="70393">  <div class="votes">
    <div id="Vu70393">
    <a href="/manual/vote-note.php?id=70393&amp;page=ref.dba&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70393">
    <a href="/manual/vote-note.php?id=70393&amp;page=ref.dba&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70393" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#70393" class="name">
  <strong class="user"><em>doppelbauer at gmail dot com</em></strong></a><a class="genanchor" href="#70393"> &para;</a><div class="date" title="2006-10-14 07:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70393">
<div class="phpcode"><code><span class="html">Benchmark test:<br /><br /><a href="http://qdbm.sourceforge.net/benchmark.pdf" rel="nofollow" target="_blank">http://qdbm.sourceforge.net/benchmark.pdf</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.dba&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.dba.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.dba.php">DBA</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.dba.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="dba.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="dba.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="dba.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.dba-connection.php" title="Dba\Connection">Dba\Connection</a>
                        </li>
                                                <li class="current">
                            <a href="ref.dba.php" title="DBA Functions">DBA Functions</a>
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
