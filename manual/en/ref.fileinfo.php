<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Fileinfo Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.fileinfo.php">
 <link rel="shorturl" href="https://www.php.net/fileinfo">
 <link rel="alternate" href="https://www.php.net/fileinfo" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.fileinfo.php">
 <link rel="prev" href="https://www.php.net/manual/en/fileinfo.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/function.finfo-buffer.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.fileinfo.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.fileinfo.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.fileinfo.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.fileinfo.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.fileinfo.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.fileinfo.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.fileinfo.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.fileinfo.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.fileinfo.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.fileinfo.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.fileinfo.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fileinfo Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Fileinfo Functions - Manual" />
<meta name="twitter:description" content="Fileinfo Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Fileinfo Functions - Manual" />
<meta itemprop="description" content="Fileinfo Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fileinfo Functions" />

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
        <a href="function.finfo-buffer.php">
          finfo_buffer &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="fileinfo.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.fileinfo.php'>Fileinfo</a></li>      </ul>
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
            <option value='en/ref.fileinfo.php' selected="selected">English</option>
            <option value='de/ref.fileinfo.php'>German</option>
            <option value='es/ref.fileinfo.php'>Spanish</option>
            <option value='fr/ref.fileinfo.php'>French</option>
            <option value='it/ref.fileinfo.php'>Italian</option>
            <option value='ja/ref.fileinfo.php'>Japanese</option>
            <option value='pt_BR/ref.fileinfo.php'>Brazilian Portuguese</option>
            <option value='ru/ref.fileinfo.php'>Russian</option>
            <option value='tr/ref.fileinfo.php'>Turkish</option>
            <option value='uk/ref.fileinfo.php'>Ukrainian</option>
            <option value='zh/ref.fileinfo.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.fileinfo" class="reference">
 <h1 class="title">Fileinfo Functions</h1>

 


































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.finfo-buffer.php">finfo_buffer</a> — Return information about a string buffer</li><li><a href="function.finfo-close.php">finfo_close</a> — Close finfo instance</li><li><a href="function.finfo-file.php">finfo_file</a> — Return information about a file</li><li><a href="function.finfo-open.php">finfo_open</a> — Create a new finfo instance</li><li><a href="function.finfo-set-flags.php">finfo_set_flags</a> — Set libmagic configuration options</li><li><a href="function.mime-content-type.php">mime_content_type</a> — Detect MIME Content-type for a file</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/fileinfo/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.fileinfo%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.fileinfo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.fileinfo.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="79063">  <div class="votes">
    <div id="Vu79063">
    <a href="/manual/vote-note.php?id=79063&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79063">
    <a href="/manual/vote-note.php?id=79063&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79063" title="58% like this...">
    13
    </div>
  </div>
  <a href="#79063" class="name">
  <strong class="user"><em>Paul</em></strong></a><a class="genanchor" href="#79063"> &para;</a><div class="date" title="2007-11-08 08:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79063">
<div class="phpcode"><code><span class="html">The results of this function seem to be of dubious quality.<br /><br />eg<br />1)  a Word doc returns:<br />'application/msword application/msword'<br />...ok not too bad, but why does it come back twice?<br /><br />2)  a PHP file comes back as:<br />'text/x-c++; charset=us-ascii'<br />My test file started with '&lt;?php' so not ambiguous really. And where does it get the charset assumption from?<br /><br />3)  a text doc that starts with the letters 'GIF' comes back as:<br />'image/gif'<br />(just like in DanielWalker's example for the unix 'file' command)<br /><br />I had better results using the PEAR 'MIME_Type' package. It gave proper answers for 1 &amp; 3 and identified the PHP file as 'text/plain' which is probably better than a false match for C++<br /><br />Both finfo_file and MIME_Type correctly identified my other two test files which were a windows exe renamed with .doc extension, and a PDF also renamed with .doc extension.</span></code></div>
  </div>
 </div>
  <div class="note" id="122833">  <div class="votes">
    <div id="Vu122833">
    <a href="/manual/vote-note.php?id=122833&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122833">
    <a href="/manual/vote-note.php?id=122833&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122833" title="66% like this...">
    8
    </div>
  </div>
  <a href="#122833" class="name">
  <strong class="user"><em>ccbsschucko at gmail dot com</em></strong></a><a class="genanchor" href="#122833"> &para;</a><div class="date" title="2018-06-14 11:45"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122833">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    </span><span class="keyword">class </span><span class="default">FileInfoTool </span><span class="keyword">{<br /><br />        </span><span class="comment">/**<br />        * @var str =&gt; $file = caminho para o arquivo (ABSOLUTO OU RELATIVO)<br />        * @var arr =&gt; $file_info = array contendo as informações obtidas do arquivo informado<br />        */<br />        </span><span class="keyword">private </span><span class="default">$file</span><span class="keyword">;<br />        private </span><span class="default">$file_info</span><span class="keyword">;<br /><br />        </span><span class="comment">/**<br />        * @param str =&gt; $file = caminho para o arquivo (ABSOLUTO OU RELATIVO)<br />        */<br />        </span><span class="keyword">public function </span><span class="default">get_file</span><span class="keyword">(</span><span class="default">string $file</span><span class="keyword">){<br />            </span><span class="default">clearstatcache</span><span class="keyword">();<br />            </span><span class="default">$file </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'/'</span><span class="keyword">, </span><span class="string">'\\'</span><span class="keyword">), array(</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">), </span><span class="default">$file</span><span class="keyword">);<br />            if(!</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) &amp;&amp; !</span><span class="default">is_executable</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) &amp;&amp; !</span><span class="default">is_readable</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)){<br />                throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'O arquivo informado não foi encontrado!'</span><span class="keyword">);<br />            }<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file </span><span class="keyword">= </span><span class="default">$file</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">set_file_info</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">);<br />            return </span><span class="default">$this</span><span class="keyword">;<br />        }<br /><br />        </span><span class="comment">/**<br />        * @param str =&gt; $index = se for informado um indice é retornada uma informação específica do arquivo<br />        */<br />        </span><span class="keyword">public function </span><span class="default">get_info</span><span class="keyword">(</span><span class="default">$index </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">){<br />            if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_file_is_called</span><span class="keyword">()){<br />                if(</span><span class="default">$index </span><span class="keyword">=== </span><span class="string">''</span><span class="keyword">){<br />                    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">;<br />                }<br />                if(</span><span class="default">$index </span><span class="keyword">!= </span><span class="string">''</span><span class="keyword">){<br />                    if(!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$index</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">)){<br />                        throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'A informação requisitada não foi encontrada!'</span><span class="keyword">);                    <br />                    }<br />                    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">;<br />                }<br />            }<br />        }<br /><br />        </span><span class="comment">/**<br />        * @todo verifica se o método get_file() foi utilizado para informar o caminho do arquivo<br />        */<br />        </span><span class="keyword">private function </span><span class="default">get_file_is_called</span><span class="keyword">(){<br />            if(!</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">){<br />                throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'Nenhum arquivo foi fornecido para análise. Utilize o método get_file() para isso!'</span><span class="keyword">);<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br /><br />        </span><span class="comment">/**<br />        * @todo preencher a array com as infos do arquivo<br />        */<br />        </span><span class="keyword">private function </span><span class="default">set_file_info</span><span class="keyword">(){<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info </span><span class="keyword">= array();<br />            </span><span class="default">$pathinfo </span><span class="keyword">= </span><span class="default">pathinfo</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">);<br />            </span><span class="default">$stat </span><span class="keyword">= </span><span class="default">stat</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'realpath'</span><span class="keyword">] = </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'dirname'</span><span class="keyword">] = </span><span class="default">$pathinfo</span><span class="keyword">[</span><span class="string">'dirname'</span><span class="keyword">];<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'basename'</span><span class="keyword">] = </span><span class="default">$pathinfo</span><span class="keyword">[</span><span class="string">'basename'</span><span class="keyword">];<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'filename'</span><span class="keyword">] = </span><span class="default">$pathinfo</span><span class="keyword">[</span><span class="string">'filename'</span><span class="keyword">];<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'extension'</span><span class="keyword">] = </span><span class="default">$pathinfo</span><span class="keyword">[</span><span class="string">'extension'</span><span class="keyword">];<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'mime'</span><span class="keyword">] = </span><span class="default">finfo_file</span><span class="keyword">(</span><span class="default">finfo_open</span><span class="keyword">(</span><span class="default">FILEINFO_MIME_TYPE</span><span class="keyword">), </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'encoding'</span><span class="keyword">] = </span><span class="default">finfo_file</span><span class="keyword">(</span><span class="default">finfo_open</span><span class="keyword">(</span><span class="default">FILEINFO_MIME_ENCODING</span><span class="keyword">), </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">] = </span><span class="default">$stat</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">];<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'size_string'</span><span class="keyword">] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">format_bytes</span><span class="keyword">(</span><span class="default">$stat</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">]);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'atime'</span><span class="keyword">] = </span><span class="default">$stat</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">];<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'mtime'</span><span class="keyword">] = </span><span class="default">$stat</span><span class="keyword">[</span><span class="default">9</span><span class="keyword">];<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'permission'</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%o'</span><span class="keyword">, </span><span class="default">fileperms</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">)), -</span><span class="default">4</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_info</span><span class="keyword">[</span><span class="string">'fileowner'</span><span class="keyword">] = </span><span class="default">getenv</span><span class="keyword">(</span><span class="string">'USERNAME'</span><span class="keyword">);<br />        }<br /><br />        </span><span class="comment">/**<br />        * @param int =&gt; $size = valor em bytes a ser formatado<br />        */<br />        </span><span class="keyword">private function </span><span class="default">format_bytes</span><span class="keyword">(</span><span class="default">int $size</span><span class="keyword">){<br />            </span><span class="default">$base </span><span class="keyword">= </span><span class="default">log</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br />            </span><span class="default">$suffixes </span><span class="keyword">= array(</span><span class="string">''</span><span class="keyword">, </span><span class="string">'KB'</span><span class="keyword">, </span><span class="string">'MB'</span><span class="keyword">, </span><span class="string">'GB'</span><span class="keyword">, </span><span class="string">'TB'</span><span class="keyword">);   <br />            return </span><span class="default">round</span><span class="keyword">(</span><span class="default">pow</span><span class="keyword">(</span><span class="default">1024</span><span class="keyword">, </span><span class="default">$base</span><span class="keyword">-</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$base</span><span class="keyword">)), </span><span class="default">2</span><span class="keyword">).</span><span class="string">''</span><span class="keyword">.</span><span class="default">$suffixes</span><span class="keyword">[</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$base</span><span class="keyword">)];<br />        }<br />    }<br /><br />    </span><span class="default">var_dump</span><span class="keyword">((new </span><span class="default">FileInfoTool</span><span class="keyword">)-&gt;</span><span class="default">get_file</span><span class="keyword">(</span><span class="string">'sitemap.xml'</span><span class="keyword">)-&gt;</span><span class="default">get_info</span><span class="keyword">());<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77588">  <div class="votes">
    <div id="Vu77588">
    <a href="/manual/vote-note.php?id=77588&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77588">
    <a href="/manual/vote-note.php?id=77588&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77588" title="66% like this...">
    2
    </div>
  </div>
  <a href="#77588" class="name">
  <strong class="user"><em>jon at cybus dot co dot uk</em></strong></a><a class="genanchor" href="#77588"> &para;</a><div class="date" title="2007-09-04 07:58"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77588">
<div class="phpcode"><code><span class="html">To get v1.0.4 working on my Ubuntu Feisty system, I had to do the following. It's probably the same on Debian.<br /><br />* apt-get install libmagic1-dev<br />* pecl install Fileinfo<br />* Add "extension=fileinfo.so" to php.ini (/etc/php5/{cli,cgi}/php.ini)<br />* ln -s /usr/share/file/magic /etc/magic.mime</span></code></div>
  </div>
 </div>
  <div class="note" id="83973">  <div class="votes">
    <div id="Vu83973">
    <a href="/manual/vote-note.php?id=83973&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83973">
    <a href="/manual/vote-note.php?id=83973&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83973" title="58% like this...">
    3
    </div>
  </div>
  <a href="#83973" class="name">
  <strong class="user"><em>Terren Suydam</em></strong></a><a class="genanchor" href="#83973"> &para;</a><div class="date" title="2008-06-20 11:00"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83973">
<div class="phpcode"><code><span class="html">If finfo_file() returns a mime type that also includes a character set definition (separated by a semi-colon), like:<br /><br />text/plain; charset=us-ascii<br /><br />Then you'll probably want to leave the charset definition in with the mime type, particularly if you're using the resulting string in an HTTP Content-Length header. The HTTP standard specifically allows for this, see:<br /><br /><a href="http://www.w3.org/International/O-HTTP-charset" rel="nofollow" target="_blank">http://www.w3.org/International/O-HTTP-charset</a><br /><br />It seemed as if some of the previous commenters were trying to remove the charset.</span></code></div>
  </div>
 </div>
  <div class="note" id="85348">  <div class="votes">
    <div id="Vu85348">
    <a href="/manual/vote-note.php?id=85348&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85348">
    <a href="/manual/vote-note.php?id=85348&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85348" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#85348" class="name">
  <strong class="user"><em>Evermorian</em></strong></a><a class="genanchor" href="#85348"> &para;</a><div class="date" title="2008-08-26 05:03"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85348">
<div class="phpcode"><code><span class="html">In response to the suggestion from "jon at cybus" below to symlink /usr/share/file/magic to /etc/magic.mime, note that this causes other problems (in Debian Etch, anyway).  It breaks the -i functionality of the file command, causing it to return the human-readable string instead of the MIME type.  It also results in finfo doing the same.<br /><br />So, it is probably better to actually specify the path to the magic file correctly when instantiating your finfo object:<br /><br /><span class="default">&lt;?php<br />$fi </span><span class="keyword">= new </span><span class="default">finfo</span><span class="keyword">(</span><span class="default">FILEINFO_MIME</span><span class="keyword">,</span><span class="string">'/usr/share/file/magic'</span><span class="keyword">);<br /></span><span class="default">$mime_type </span><span class="keyword">= </span><span class="default">$fi</span><span class="keyword">-&gt;</span><span class="default">buffer</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Of course, you still end up with something that cannot tell the difference between a Word document and an Excel spreadsheet.</span></code></div>
  </div>
 </div>
  <div class="note" id="72785">  <div class="votes">
    <div id="Vu72785">
    <a href="/manual/vote-note.php?id=72785&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72785">
    <a href="/manual/vote-note.php?id=72785&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72785" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#72785" class="name">
  <strong class="user"><em>szotsaki at gmail dot com</em></strong></a><a class="genanchor" href="#72785"> &para;</a><div class="date" title="2007-02-01 11:12"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72785">
<div class="phpcode"><code><span class="html">I am about to write how installed this package.<br /><br />First of all, I tried with "pear install fileinfo" - as the manual says.<br />But the pear command said that 'Package "Fileinfo" is not valid,<br />install failed'.<br /><br />Then the "pear install pecl/fileinfo" was a better way. But at that time the "phpize" command was missing.<br />I installed that (on openSUSE distributions it is in the php5-devel, but I think you can find it in your distro's corresponding php-devel package).<br /><br />After that you may install "re2c" (I did). It's homepage is: <a href="http://sourceforge.net/projects/re2c" rel="nofollow" target="_blank">http://sourceforge.net/projects/re2c</a><br /><br />Copy the magic file of Apache (usually in /etc/apache2) into the following directory: /usr/locale/share/file/ or /usr/share/file/<br /><br />Then you have to install "libmagic-dev". If you have Debian based system you can simply install it with apt.<br />But if you have an rpm based system (like me), you have to download the following package: <a href="http://packages.debian.org/unstable/libdevel/libmagic-dev" rel="nofollow" target="_blank">http://packages.debian.org/unstable/libdevel/libmagic-dev</a><br />It contains the files we need. <br />So, download the file, browse it with Midnight Commander (mc) (you have to apt and dpkg be installed) and simply extract (so copy) the /usr folder (it is inside the CONTENTS folder) of the .deb package to the root folder.<br /><br />And now give the "pear install pecl/fileinfo" command another try :)<br /><br />Ps: Don't forget to check whether the script has wrote the following line into the php.ini (on openSUSE: /etc/php5/apache2): extension=fileinfo.so<br /><br />I hope, I could help.</span></code></div>
  </div>
 </div>
  <div class="note" id="73924">  <div class="votes">
    <div id="Vu73924">
    <a href="/manual/vote-note.php?id=73924&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73924">
    <a href="/manual/vote-note.php?id=73924&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73924" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#73924" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#73924"> &para;</a><div class="date" title="2007-03-15 12:54"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73924">
<div class="phpcode"><code><span class="html">PHP Warning:  finfo::finfo(): Failed to load magic database at '/etc/magic'
<br />PHP Warning:  finfo::file(): The invalid fileinfo object
<br />
<br />These errors can be rectified by copying your magic database (depending on your distro, this file can be anywhere, on debian it's in /usr/share/file/magic) to /etc/magic.mime
<br />
<br />libmagic automatically appends the .mime to the end of the filename, so PHP incorrectly reports the path it was looking for.
<br />
<br />The same applies for:
<br />PHP Warning:  finfo::finfo(): Failed to load magic database at '/etc/magic.mime'
<br />
<br />Unfortunately users will have to call the magic file /etc/magic.mime.mime in this case.</span></code></div>
  </div>
 </div>
  <div class="note" id="67988">  <div class="votes">
    <div id="Vu67988">
    <a href="/manual/vote-note.php?id=67988&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67988">
    <a href="/manual/vote-note.php?id=67988&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67988" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#67988" class="name">
  <strong class="user"><em>jausions at php dot net</em></strong></a><a class="genanchor" href="#67988"> &para;</a><div class="date" title="2006-07-08 12:26"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67988">
<div class="phpcode"><code><span class="html">For Windows users:<br /><br />1. Go to <a href="http://pecl4win.php.net/" rel="nofollow" target="_blank">http://pecl4win.php.net/</a> to get the php_fileinfo.dll if your PHP installation didn't come with it, and you haven't installed the Extensions package.<br /><br />2. Then make sure you have extension=php_fileinfo.dll somewhere in your php.ini<br /><br />3. Restart your web server.</span></code></div>
  </div>
 </div>
  <div class="note" id="87767">  <div class="votes">
    <div id="Vu87767">
    <a href="/manual/vote-note.php?id=87767&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87767">
    <a href="/manual/vote-note.php?id=87767&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87767" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#87767" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#87767"> &para;</a><div class="date" title="2008-12-20 01:09"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87767">
<div class="phpcode"><code><span class="html">As of PHP 5.3, Fileinfo is shipped with the main distribution and enabled by default. The extension is no longer maintained in PECL.</span></code></div>
  </div>
 </div>
  <div class="note" id="72264">  <div class="votes">
    <div id="Vu72264">
    <a href="/manual/vote-note.php?id=72264&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72264">
    <a href="/manual/vote-note.php?id=72264&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72264" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#72264" class="name">
  <strong class="user"><em>motin at demomusic dot nu</em></strong></a><a class="genanchor" href="#72264"> &para;</a><div class="date" title="2007-01-09 05:34"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72264">
<div class="phpcode"><code><span class="html">I had a real headache trying to install this package through pear/pecl. Ran into what looks like this bug: <a href="http://pecl.php.net/bugs/bug.php?id=7673" rel="nofollow" target="_blank">http://pecl.php.net/bugs/bug.php?id=7673</a> (phpize fails)<br /><br />I found downloading the package manually and running ./configure helped show what the problem is:<br /><br />...<br />checking for fileinfo support... yes, shared<br />checking for magic files in default path... not found<br />configure: error: Please reinstall the libmagic distribution<br />&lt;quit&gt;<br /><br />I though this was because of a missing magic-database like magic.mime but examining the configure-script, magic.h is searched for. <br /><br />Problem for me was that include/magic.h was not found. After some googling about where to find magic.h led me to the dead<br />simple solution:<br /><br />apt-get install libmagic-dev<br /><br />This does NOT solve the original installation bug strangely enough, but allows for manual installation:<br /><br />1. Find the url to the latest version of fileinfo from <a href="http://pecl.php.net/package/Fileinfo" rel="nofollow" target="_blank">http://pecl.php.net/package/Fileinfo</a> (atm: <a href="http://pecl.php.net/get/Fileinfo-1.0.4.tgz" rel="nofollow" target="_blank">http://pecl.php.net/get/Fileinfo-1.0.4.tgz</a>)<br /><br />2. Download, compile and install<br />wget <a href="http://pecl.php.net/get/Fileinfo-1.0.4.tgz" rel="nofollow" target="_blank">http://pecl.php.net/get/Fileinfo-1.0.4.tgz</a><br />gunzip Fileinfo-1.0.4.tgz<br />tar -xvf Fileinfo-1.0.4.tar<br />cd fileinfo-1.0.4<br />./configure<br />make<br />make install<br /><br />3. Add extension=fileinfo.so in your php.ini file<br /><br />4. Restart Apache</span></code></div>
  </div>
 </div>
  <div class="note" id="100824">  <div class="votes">
    <div id="Vu100824">
    <a href="/manual/vote-note.php?id=100824&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100824">
    <a href="/manual/vote-note.php?id=100824&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100824" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#100824" class="name">
  <strong class="user"><em>bostjan at a2o dot si</em></strong></a><a class="genanchor" href="#100824"> &para;</a><div class="date" title="2010-11-09 05:58"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100824">
<div class="phpcode"><code><span class="html">'Failed to load magic database at...' <br /><br />This error message may be caused by incompatibilities between library and database. Check your database by trying to compile it with file command, like this:<br /><br />cd /etc/magic<br />file -C -m magic<br />file -C -m magic.mime<br /><br />b.</span></code></div>
  </div>
 </div>
  <div class="note" id="73329">  <div class="votes">
    <div id="Vu73329">
    <a href="/manual/vote-note.php?id=73329&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73329">
    <a href="/manual/vote-note.php?id=73329&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73329" title="33% like this...">
    -5
    </div>
  </div>
  <a href="#73329" class="name">
  <strong class="user"><em>Alexey</em></strong></a><a class="genanchor" href="#73329"> &para;</a><div class="date" title="2007-02-18 06:39"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73329">
<div class="phpcode"><code><span class="html">Well, it is hard to install and use this extension. There is better alternative - use lunux comand "file". For  insturctions - "man file" from linux shell.<br /><br />&lt;?<br />echo system("file -i -b file.pdf");<br />?&gt;<br /><br />application/pdf</span></code></div>
  </div>
 </div>
  <div class="note" id="95406">  <div class="votes">
    <div id="Vu95406">
    <a href="/manual/vote-note.php?id=95406&amp;page=ref.fileinfo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95406">
    <a href="/manual/vote-note.php?id=95406&amp;page=ref.fileinfo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95406" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#95406" class="name">
  <strong class="user"><em>nessi at nessi dot ch</em></strong></a><a class="genanchor" href="#95406"> &para;</a><div class="date" title="2010-01-01 04:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95406">
<div class="phpcode"><code><span class="html">For opensuse, you will just need to install the file-devel to solve the Problem with<br />checking for magic files in default path... not found<br />configure: error: Please reinstall the libmagic distribution<br /><br />zypper install file-devel</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.fileinfo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.fileinfo.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.fileinfo.php">Fileinfo</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.fileinfo.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="fileinfo.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="fileinfo.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="ref.fileinfo.php" title="Fileinfo Functions">Fileinfo Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.finfo.php" title="finfo">finfo</a>
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
