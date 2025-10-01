<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Program execution Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.exec.php">
 <link rel="shorturl" href="https://www.php.net/exec">
 <link rel="alternate" href="https://www.php.net/exec" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.exec.php">
 <link rel="prev" href="https://www.php.net/manual/en/exec.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/function.escapeshellarg.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.exec.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.exec.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.exec.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.exec.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.exec.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.exec.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.exec.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.exec.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.exec.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.exec.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.exec.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Program execution Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Program execution Functions - Manual" />
<meta name="twitter:description" content="Program execution Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Program execution Functions - Manual" />
<meta itemprop="description" content="Program execution Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Program execution Functions" />

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
        <a href="function.escapeshellarg.php">
          escapeshellarg &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="exec.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.exec.php'>Program execution</a></li>      </ul>
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
            <option value='en/ref.exec.php' selected="selected">English</option>
            <option value='de/ref.exec.php'>German</option>
            <option value='es/ref.exec.php'>Spanish</option>
            <option value='fr/ref.exec.php'>French</option>
            <option value='it/ref.exec.php'>Italian</option>
            <option value='ja/ref.exec.php'>Japanese</option>
            <option value='pt_BR/ref.exec.php'>Brazilian Portuguese</option>
            <option value='ru/ref.exec.php'>Russian</option>
            <option value='tr/ref.exec.php'>Turkish</option>
            <option value='uk/ref.exec.php'>Ukrainian</option>
            <option value='zh/ref.exec.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.exec" class="reference">
  <h1 class="title">Program execution Functions</h1>

  <div class="partintro">

   <div class="section" id="exec.notes">
    <h2 class="title">Notes</h2>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="para">
      Open files with lock (especially open sessions) should be closed before
      executing a program in the background.
     </p>
    </div>
   </div>

   <div class="section" id="exec.seealso">
   <h2 class="title">See Also</h2>
    <p class="para">
     These functions are also closely related to the 
     <a href="language.operators.execution.php" class="link">backtick operator</a>.
    </p>
   </div>

  </div>






































































 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.escapeshellarg.php">escapeshellarg</a> — Escape a string to be used as a shell argument</li><li><a href="function.escapeshellcmd.php">escapeshellcmd</a> — Escape shell metacharacters</li><li><a href="function.exec.php">exec</a> — Execute an external program</li><li><a href="function.passthru.php">passthru</a> — Execute an external program and display raw output</li><li><a href="function.proc-close.php">proc_close</a> — Close a process opened by proc_open and return the exit code of that process</li><li><a href="function.proc-get-status.php">proc_get_status</a> — Get information about a process opened by proc_open</li><li><a href="function.proc-nice.php">proc_nice</a> — Change the priority of the current process</li><li><a href="function.proc-open.php">proc_open</a> — Execute a command and open file pointers for input/output</li><li><a href="function.proc-terminate.php">proc_terminate</a> — Kills a process opened by proc_open</li><li><a href="function.shell-exec.php">shell_exec</a> — Execute command via shell and return the complete output as a string</li><li><a href="function.system.php">system</a> — Execute an external program and display the output</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/exec/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.exec%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.exec.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">33 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="59049">  <div class="votes">
    <div id="Vu59049">
    <a href="/manual/vote-note.php?id=59049&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59049">
    <a href="/manual/vote-note.php?id=59049&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59049" title="70% like this...">
    11
    </div>
  </div>
  <a href="#59049" class="name">
  <strong class="user"><em>valqk at lozenetz dot org</em></strong></a><a class="genanchor" href="#59049"> &para;</a><div class="date" title="2005-11-24 04:05"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59049">
<div class="phpcode"><code><span class="html">If you are chrooting php into enviornment that doesn't have /bin/sh you can't execute any command! Even when you call <br />mail() and it calls sendmail ... well actually sendmail NEVER gets called because /bin/sh is not in the chroot!<br />SO in conclusion: YOU MUST HAVE /bin/sh TO EXECUTE SOMETHING!!!<br />VERY IMPORTNAT!<br />I've lost few days while find this, hope it helps someone!!!</span></code></div>
  </div>
 </div>
  <div class="note" id="46199">  <div class="votes">
    <div id="Vu46199">
    <a href="/manual/vote-note.php?id=46199&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46199">
    <a href="/manual/vote-note.php?id=46199&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46199" title="75% like this...">
    2
    </div>
  </div>
  <a href="#46199" class="name">
  <strong class="user"><em>sam at freepeers dot com</em></strong></a><a class="genanchor" href="#46199"> &para;</a><div class="date" title="2004-10-01 05:51"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46199">
<div class="phpcode"><code><span class="html">To clarify even more about what has been said in the last few posts:<br /><br />"exec", "backticks", "system" and so on will fail on Windows 2003 by default.  <br /><br />You must modify the security on cmd.exe to give the user account IUSR-computername the necessary permissions which are at least read &amp; execute.</span></code></div>
  </div>
 </div>
  <div class="note" id="28851">  <div class="votes">
    <div id="Vu28851">
    <a href="/manual/vote-note.php?id=28851&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28851">
    <a href="/manual/vote-note.php?id=28851&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28851" title="66% like this...">
    1
    </div>
  </div>
  <a href="#28851" class="name">
  <strong class="user"><em>jpgiot at ifrance.com</em></strong></a><a class="genanchor" href="#28851"> &para;</a><div class="date" title="2003-01-25 06:30"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28851">
<div class="phpcode"><code><span class="html">FOR WINDOWS USERS<br /><br />i had a look to start command. it's really usefull in fact.<br /><br />this is how i launch a specific Apache SSL server<br /><br /><span class="default">&lt;?php<br />$cmd </span><span class="keyword">= </span><span class="string">"start /D C:\OpenSA\Apache /B Apache.exe -D SSL"</span><span class="keyword">;<br /></span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">,</span><span class="default">$output</span><span class="keyword">,</span><span class="default">$rv</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />/D specify the path where application will be launched (equivalent to cd to path)<br />/B launch application without a console window<br /><br />so to know the exact parameters of start, you could use<br /><br /><span class="default">&lt;?php<br />exec</span><span class="keyword">(</span><span class="string">"start /? &gt; start.txt"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />and you will get the help of start in a file named 'start.txt' in the same place you run the script<br /><br />for WIN 98 you may need to modify a little your command<br /><br />exec("COMMAND.COM /C START program args &gt;NUL");<br /><br />(taken from another post)</span></code></div>
  </div>
 </div>
  <div class="note" id="62249">  <div class="votes">
    <div id="Vu62249">
    <a href="/manual/vote-note.php?id=62249&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62249">
    <a href="/manual/vote-note.php?id=62249&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62249" title="60% like this...">
    2
    </div>
  </div>
  <a href="#62249" class="name">
  <strong class="user"><em>not at any dot com</em></strong></a><a class="genanchor" href="#62249"> &para;</a><div class="date" title="2006-02-23 12:16"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62249">
<div class="phpcode"><code><span class="html">at LAST!  tenacity pays off, days trying every little thing!<br /><br />I didn't want batch files.  I'm trying to use PHP to get rid of batch files.<br /><br />I didn't want to call a file to parse the parameters to call a shell to call a file.  I've got "systems" right now with batches tiered three and five deep.<br /><br />I just wanted to run stuff.<br /><br />CALL, tested on WinXP, will be testing on more OSes right away, in PHP4 and 5, with exec, system, works with popen, and passthru.<br /><br />here is my lame sample function.<br /><br />//  CreateZip<br />    function createzip ($target, $archive)<br />    {   $ziputil = "call \"c:\\Program Files\\7-zip\\7z.exe\"";<br />        $archived = escapeshellarg($archive);<br />        $targeted = escapeshellarg($target);<br /><br />        $shellcommand= $ziputil." a -tzip ".$archived." ".$targeted."\n";<br /><br />  // all of the below are working in Win XP Pro<br />    passthru ($shellcommand);<br />    exec ($shellcommand);<br />    system ($shellcommand);<br />    shell_exec ($shellcommand);<br />    $proc= popen ($shellcommand, "r"); //$proc contains output<br /><br />LONG PATH NAMES WITH SPACES IN THEM ON WINDOWS!<br /><br />all in a big long concatenated command line with multiple quoted-filename parameters<br /><br />shell scripting bliss!</span></code></div>
  </div>
 </div>
  <div class="note" id="43908">  <div class="votes">
    <div id="Vu43908">
    <a href="/manual/vote-note.php?id=43908&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43908">
    <a href="/manual/vote-note.php?id=43908&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43908" title="57% like this...">
    1
    </div>
  </div>
  <a href="#43908" class="name">
  <strong class="user"><em>leaetherstrip at inbox dot ru</em></strong></a><a class="genanchor" href="#43908"> &para;</a><div class="date" title="2004-07-08 02:23"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43908">
<div class="phpcode"><code><span class="html">Note on XP users: XP-Home edition does not allow to set rights directly on files and folders. You should use cacls command-line utility to do this.<br /><br />For example:<br /><br />cacls c:\windows\system32\cmd.exe /E /G IUSR_ADMIN2003:F<br /><br />gives IIS user full access to cmd.exe (potential security hole!), so PHP can fork and execute external programs.</span></code></div>
  </div>
 </div>
  <div class="note" id="42402">  <div class="votes">
    <div id="Vu42402">
    <a href="/manual/vote-note.php?id=42402&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42402">
    <a href="/manual/vote-note.php?id=42402&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42402" title="100% like this...">
    1
    </div>
  </div>
  <a href="#42402" class="name">
  <strong class="user"><em>dotpointer</em></strong></a><a class="genanchor" href="#42402"> &para;</a><div class="date" title="2004-05-14 06:02"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42402">
<div class="phpcode"><code><span class="html">Win32 / PHP 4.3.6...<br /><br />If you plan to start programs on the server that show message boxes (things that require OK from the server-side), or remain (like notepad.exe), and the exec-command seems to go into an deadly loop, then MAYBE your program has started, but you can't see it. Because the web server runs as an system process, and it isn't allowed to interact with the desktop.<br /><br />To solve a part of the problem (to see the programs you execute), in the control panel in Windows, goto Administration-&gt;Services, right-click the server-service, goto Properties and on the second tab (login?) and check the box about allowing the service to interact with the desktop. Click OK. Restart the webserver, and MAKE SURE it is restarted for real (i.e. look in the task manager so the service goes _down_), otherwise the desktop-option won't take.<br /><br />Next phase would be to stop PHP from waiting for the processes to complete (this is what makes PHP "loop"). I solved this by creating a small Delphi-application that took the path to the file I wanted to execute and executed it by the WinExec API, which just starts the childprogram but doesn't wait for it to complete = the program completes and the PHP.exe completes the script. Problem solved!<br /><br />Delphi-snippet:<br />WinExec(PChar(&lt;CMD&gt;),SW_SHOW); // replace &lt;CMD&gt; with the program path.</span></code></div>
  </div>
 </div>
  <div class="note" id="84330">  <div class="votes">
    <div id="Vu84330">
    <a href="/manual/vote-note.php?id=84330&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84330">
    <a href="/manual/vote-note.php?id=84330&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84330" title="50% like this...">
    0
    </div>
  </div>
  <a href="#84330" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#84330"> &para;</a><div class="date" title="2008-07-09 10:34"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84330">
<div class="phpcode"><code><span class="html">I found this comment on this page:<br /><br />[begin of quote]<br />Trying to us the following code failed badly with various results: like "unable to fork", "access denied", "empty results", depending on what settings I used, ... even though the same code worked from command line on the server itself.<br /><br />$retstr = exec('nslookup -type=mx myhost.com', $retarr);<br /><br />Instead of nslookup I believe this would apply to most programs from the \system32\ directory.<br /><br />I had to learn that the following finally worked:<br />$retstr = exec('c:\php\safedir\nslookup -type=mx myhost.com', $retarr);<br /><br />... but only under the listed preconditions:<br />1: nslookup.exe is placed (copied) in the directory \php\safedir\<br />2: the directory \php\safedir\ is included in the system PATH environement variable<br />3: the file cmd.exe is placed in \php\ as listed by other notes above<br />4: the directory "c:\php\safedir\" is set in the php.ini setting <br />safe_mode_exec_dir = "c:\php\safedir\"<br />.. maybe set in php-activescript.ini as well, depending on your system setup.<br />5: nslookup is referenced by the full path as otherwise the file from \windows\system32\ will be called. This happend to me with empty result due to missing rights!<br /><br />Hope this helps somebody saving some time and headaches.<br />[end of quote]<br /><br />This is just to complicated. Only two things are needed:<br />1. Specific permissions for the IUSR account for read &amp; execute to the cmd.exe in C:\Windows\System32 directory<br />2. Specific permissions for the IUSR account for read &amp; execute to the command that's needed (example: nslookup.exe in C:\Widnows\System23 directory)<br /><br />With just this two conditions the exec works fine<br /><br />(This is for an IIS server running on a windows platform)</span></code></div>
  </div>
 </div>
  <div class="note" id="81872">  <div class="votes">
    <div id="Vu81872">
    <a href="/manual/vote-note.php?id=81872&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81872">
    <a href="/manual/vote-note.php?id=81872&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81872" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81872" class="name">
  <strong class="user"><em>mosesdinakaran at yahoo dot co dot in</em></strong></a><a class="genanchor" href="#81872"> &para;</a><div class="date" title="2008-03-17 06:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81872">
<div class="phpcode"><code><span class="html">Hi <br /><br />     I had  problem with executing   exec(),shell_exec() (PHP is not running on Safe Mode).<br /><br />     After spending some time I was able to find out that the Problem is  with SELinux enabled in my system. <br /><br />      You can make sure about this by seeing the log  /var/log/messages <br />     So I disabled SELinux and now everything works.<br /><br />     A Temporary  Disable to selinux #&gt; setenforce 0;<br /><br />     Since I felt this is not a good Idea I still went through some sites and find a solution which I felt good.<br /><br />     Fedora's SELinux policy has some booleans - let's see what it has for our apache:<br /># /usr/sbin/getsebool -a | grep httpd<br />allow_httpd_anon_write -- off<br />allow_httpd_mod_auth_pam -- off<br />allow_httpd_sys_script_anon_write -- off<br />httpd_builtin_scripting -- on<br />httpd_can_network_connect -- off<br />httpd_can_network_connect_db -- off<br />httpd_can_network_relay -- off<br />httpd_disable_trans -- off<br />httpd_enable_cgi -- on<br />httpd_enable_ftp_server -- off<br />httpd_enable_homedirs -- on<br />httpd_rotatelogs_disable_trans -- off<br />httpd_ssi_exec --off<br />httpd_suexec_disable_trans -- off<br />httpd_tty_comm -- off<br />httpd_unified -- on<br />  <br />   From the above we can make sure that exec() is not working  because of this httpd_ssi_exec -- off   setting<br />  So I turned it On.<br />   <br />#&gt; setsebool -P httpd_ssi_exec 1;<br />  <br />    Now I was able to see the output of shell_exec('ls -al')<br /><br />Moses</span></code></div>
  </div>
 </div>
  <div class="note" id="80721">  <div class="votes">
    <div id="Vu80721">
    <a href="/manual/vote-note.php?id=80721&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80721">
    <a href="/manual/vote-note.php?id=80721&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80721" title="50% like this...">
    0
    </div>
  </div>
  <a href="#80721" class="name">
  <strong class="user"><em>luko post cz</em></strong></a><a class="genanchor" href="#80721"> &para;</a><div class="date" title="2008-01-29 06:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80721">
<div class="phpcode"><code><span class="html">to lancelot:<br /><br />it's simple exec($my_cmd) on windows executes 'cmd /c $my_cmd'<br />if there are any spaces in $my_cmd you have to put it in doublequotes:<br />cmd /c "$app $target" will work<br /><br />further if there are any spaces in $app and $target they also have to be in doublequotes:<br />cmd /c ""$app" "$target"" <br /><br />therefore enclose your $cmd in two more doublequotes and dont forget to escape slashes \\<br /><br />$cmd = "\"\"C:\\my path with spaces\\targetapp.exe\" \"C:\\mypathnospaces\\targetfile.xxx\"\""; <br /><br />and exec($cmd) will work :)<br />no chdir anymore...</span></code></div>
  </div>
 </div>
  <div class="note" id="80241">  <div class="votes">
    <div id="Vu80241">
    <a href="/manual/vote-note.php?id=80241&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80241">
    <a href="/manual/vote-note.php?id=80241&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80241" title="50% like this...">
    0
    </div>
  </div>
  <a href="#80241" class="name">
  <strong class="user"><em>jakster at gmx dot net</em></strong></a><a class="genanchor" href="#80241"> &para;</a><div class="date" title="2008-01-05 04:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80241">
<div class="phpcode"><code><span class="html">To fork a process I use the following code<br /><br /><span class="default">&lt;?php<br /><br />fclose</span><span class="keyword">(</span><span class="default">STDOUT</span><span class="keyword">);   </span><span class="comment">//Close all output or it WON'T work<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">STDERR</span><span class="keyword">);<br /><br />if(</span><span class="default">pcntl_fork</span><span class="keyword">()) {<br />    exit;            </span><span class="comment">//Return to the caller<br /></span><span class="keyword">}<br /><br /></span><span class="comment">//Code to run in the background<br /><br /></span><span class="default">pcntl_exec</span><span class="keyword">(</span><span class="string">"/usr/bin/php"</span><span class="keyword">,Array(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'argv'</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">]));<br /><br /></span><span class="default">?&gt;<br /></span><br />I call this script from my website with<br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">fork</span><span class="keyword">(</span><span class="default">$script</span><span class="keyword">){        </span><span class="comment">//run a forked php script relative to the document root. NO OUTPUT IS DISPLAYED!<br />    </span><span class="keyword">global </span><span class="default">$config</span><span class="keyword">;<br />    </span><span class="default">$cmd </span><span class="keyword">= </span><span class="string">"/usr/bin/php \"" </span><span class="keyword">. </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SCRIPT_FILENAME'</span><span class="keyword">]) . </span><span class="string">"/includes/forked/forkHelper.php\" \"" </span><span class="keyword">. </span><span class="default">$script </span><span class="keyword">. </span><span class="string">"\""</span><span class="keyword">;<br />    </span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75270">  <div class="votes">
    <div id="Vu75270">
    <a href="/manual/vote-note.php?id=75270&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75270">
    <a href="/manual/vote-note.php?id=75270&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75270" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75270" class="name">
  <strong class="user"><em>steve dot robinson at frogneck dot com</em></strong></a><a class="genanchor" href="#75270"> &para;</a><div class="date" title="2007-05-21 07:46"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75270">
<div class="phpcode"><code><span class="html">If you are trying to use exec to run a cgi and output the contents via a php file, headers need to be seperated from the content and output seperately.<br /><br />Also, at least in the case of the cgi I was attempting to execute, line feeds were missing, and some javascript didn't work as a result, so you may have to add line feeds back into the resulting output.  Here is the code I used to output my cgi properly...<br /><br /><span class="default">&lt;?PHP<br />putenv</span><span class="keyword">(</span><span class="string">'REQUEST_METHOD=GET'</span><span class="keyword">);<br /><br /></span><span class="comment">// to get your parameters passed into the cgi..<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'QUERY_STRING=' </span><span class="keyword">. </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'QUERY_STRING'</span><span class="keyword">]);<br /><br /></span><span class="comment">//you will know you are past the header when you<br />//hit a blank line ('')<br /></span><span class="default">$inheader</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;<br />foreach(</span><span class="default">$output </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">){<br />        if(</span><span class="default">$val</span><span class="keyword">==</span><span class="string">''</span><span class="keyword">)<br />                </span><span class="default">$inheader</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;  <br />        if(</span><span class="default">$inheader</span><span class="keyword">)<br />                </span><span class="default">header</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br />        else<br />                echo(</span><span class="default">$val </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">); </span><span class="comment">// output contents<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="74897">  <div class="votes">
    <div id="Vu74897">
    <a href="/manual/vote-note.php?id=74897&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74897">
    <a href="/manual/vote-note.php?id=74897&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74897" title="50% like this...">
    0
    </div>
  </div>
  <a href="#74897" class="name">
  <strong class="user"><em>php at fendy dot org</em></strong></a><a class="genanchor" href="#74897"> &para;</a><div class="date" title="2007-05-02 05:51"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74897">
<div class="phpcode"><code><span class="html">Scheduling WinXP tasks with schtasks.exe and using PHP to execute the command, may sometime fail to work.<br /><br />This is because, Apache does not have the privilege to access some of the System Files when placing the scheduling. The way I'd do: is by creating a normal user account and assign Apache service to logon as that account.<br /><br />Open the 'services.msc' in the 'Run' window, look for Apache in the listing, right click and get to 'Properties'. Click at the second tab 'Log On' and fill in the 'This account' fields.<br /><br />Of course, Apache needs to be installed as Service during its first setup.<br /><br />Hope this helps anyone.<br /><br />Fendy Ahmad</span></code></div>
  </div>
 </div>
  <div class="note" id="72675">  <div class="votes">
    <div id="Vu72675">
    <a href="/manual/vote-note.php?id=72675&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72675">
    <a href="/manual/vote-note.php?id=72675&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72675" title="50% like this...">
    0
    </div>
  </div>
  <a href="#72675" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#72675"> &para;</a><div class="date" title="2007-01-29 08:16"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72675">
<div class="phpcode"><code><span class="html">it seams to me the best way would be to copy cmd.exe to a secure directory somewhere under your web directory, add it to the windows path and then call it from there using system commands. It seams as though that would get arround any security holes</span></code></div>
  </div>
 </div>
  <div class="note" id="71630">  <div class="votes">
    <div id="Vu71630">
    <a href="/manual/vote-note.php?id=71630&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71630">
    <a href="/manual/vote-note.php?id=71630&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71630" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71630" class="name">
  <strong class="user"><em>Matt-kun</em></strong></a><a class="genanchor" href="#71630"> &para;</a><div class="date" title="2006-12-08 10:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71630">
<div class="phpcode"><code><span class="html">Just a simple note to help people get rid of some headaches.<br /><br />when using:<br />&lt;?<br />       $filepath = "the path of the file";<br />       exec("program -command $filepath ");<br />       fopen($filepath,rw);<br />?&gt;<br /><br />Make sure you use  "\ " ( \ space) for the Linux\unix path and just " " space for fopen. These are both very basic things that you wouldn't normally think to cause a problem, but when you try to pass slashes to fopen it either breaks or even better works incorrectly =D. And vise versa for any programs that use "\ " for spaces in file paths/names.<br /><br />I ran into this problem when using &lt;? exec(" cp $path "); ?&gt; and &lt;? fopen("$path"); ?&gt;. To fix it I used str_replace(" ","\ ",$path); and str_replace("\ ", " ",$path); <br /><br />*Note this is alot of sudo code, and there are faster more effecient ways of doing the same operations, but I thought this might help those who were going crazy over filepaths =D.</span></code></div>
  </div>
 </div>
  <div class="note" id="66971">  <div class="votes">
    <div id="Vu66971">
    <a href="/manual/vote-note.php?id=66971&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66971">
    <a href="/manual/vote-note.php?id=66971&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66971" title="50% like this...">
    0
    </div>
  </div>
  <a href="#66971" class="name">
  <strong class="user"><em>judas dot iscariote at gmail dot com</em></strong></a><a class="genanchor" href="#66971"> &para;</a><div class="date" title="2006-06-01 12:19"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66971">
<div class="phpcode"><code><span class="html">This functions are generally considered harmful,without proper input validation procedures are as worse as eval().<br /><br />If what you are trying to do is possible using other mechanism, ** do it that way, even if it takes more time **.<br /><br />Do not cry or blame PHP if your server gets "owned" due to a missing escapeshell*** in your code , you have been warned.</span></code></div>
  </div>
 </div>
  <div class="note" id="58218">  <div class="votes">
    <div id="Vu58218">
    <a href="/manual/vote-note.php?id=58218&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58218">
    <a href="/manual/vote-note.php?id=58218&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58218" title="50% like this...">
    0
    </div>
  </div>
  <a href="#58218" class="name">
  <strong class="user"><em>manokan at manokan dot net</em></strong></a><a class="genanchor" href="#58218"> &para;</a><div class="date" title="2005-10-27 03:01"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58218">
<div class="phpcode"><code><span class="html">Even more on the "unable to fork" error.<br /><br />It was driving me crazy! I did check that the permissions were set for the IUSR_[server] account to read &amp; exec cmd.exe. Yet still it failed. It wasn't until I got desperate that I happened to look in "special permissions." (Click the advanced tab underneath the regular list of permissions.) There I found that  somehow the IUSR_[server] account had a special permission DENYING access! Of course deny overrides everything else.<br /><br />This was a newly set up install of XP pro. It must be the default of something (I'd guess IIS) to set this deny permission just to make our lives miserable.</span></code></div>
  </div>
 </div>
  <div class="note" id="57295">  <div class="votes">
    <div id="Vu57295">
    <a href="/manual/vote-note.php?id=57295&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57295">
    <a href="/manual/vote-note.php?id=57295&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57295" title="50% like this...">
    0
    </div>
  </div>
  <a href="#57295" class="name">
  <strong class="user"><em>abhilashp at clariontechnologies dot co dot in</em></strong></a><a class="genanchor" href="#57295"> &para;</a><div class="date" title="2005-09-29 09:58"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57295">
<div class="phpcode"><code><span class="html">I faced the problem of putting a shell script as a backgroud process using both exec() and system() commands on a FreeBSD Server with PHP 4.4.0<br /><br />I tried all the above mentioned methods but couldnt succeded, then i coded this script and am sure will work on all Linux flavors... See if ot helps you all guys...<br /><br />I Put my Shell Script in the variable $ExecCommand<br /><br />and used the proc_close and proc_open functions the code is as follows :<br /><br />proc_close (proc_open ($ExecCommand,array(),$somefun));<br /><br />After the above line the rest of the usual  php script continues....<br /><br />Hope it helps you guys..</span></code></div>
  </div>
 </div>
  <div class="note" id="49152">  <div class="votes">
    <div id="Vu49152">
    <a href="/manual/vote-note.php?id=49152&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49152">
    <a href="/manual/vote-note.php?id=49152&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49152" title="50% like this...">
    0
    </div>
  </div>
  <a href="#49152" class="name">
  <strong class="user"><em>margus at kohv dot com</em></strong></a><a class="genanchor" href="#49152"> &para;</a><div class="date" title="2005-01-18 03:10"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49152">
<div class="phpcode"><code><span class="html">Well, I had this issue when I wanted to start an indefinitely running PERL script from PHP. Somehow I could not make the PHP script to return after executing the PERL script. So finally I came to following solution:<br /><br />PHP file<br />-------------------<br /><span class="default">&lt;?php<br />exec</span><span class="keyword">(</span><span class="string">"perl /home/chatserver.pl &gt; /dev/null"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>-------------------<br />This script will be run over HTTP.<br /><br />PERL file<br />-------------------<br />#!/usr/bin/perl<br />fork and exit 1;<br /><br /># normal code here...<br />-------------------<br /><br />Hopefully it helps someone :)<br />Margus</span></code></div>
  </div>
 </div>
  <div class="note" id="48859">  <div class="votes">
    <div id="Vu48859">
    <a href="/manual/vote-note.php?id=48859&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48859">
    <a href="/manual/vote-note.php?id=48859&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48859" title="50% like this...">
    0
    </div>
  </div>
  <a href="#48859" class="name">
  <strong class="user"><em>sean @T keenio - dot - com</em></strong></a><a class="genanchor" href="#48859"> &para;</a><div class="date" title="2005-01-09 11:35"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48859">
<div class="phpcode"><code><span class="html">Just to clarify, background shell exec()ing is not the same as a fork() under Unix. It would be useful if PHP supported fork() like Perl and other scripting languages do. Simply exec()'ing a process and sending it to the background is not the same. <br /><br />A true fork() copies the current environment and duplicates the running script so that there are two instances, one child, one parent. The child and parent can determine which copy they are and then take separate courses of execution paths based on that. Often one copy will perform some "busy work" while the other returns to normal execution. But no matter what, both functions live within the same code rather than a separate, external program. exec()ing can not do this for you.</span></code></div>
  </div>
 </div>
  <div class="note" id="40997">  <div class="votes">
    <div id="Vu40997">
    <a href="/manual/vote-note.php?id=40997&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40997">
    <a href="/manual/vote-note.php?id=40997&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40997" title="50% like this...">
    0
    </div>
  </div>
  <a href="#40997" class="name">
  <strong class="user"><em>vosechu at roman-fleuve dot com</em></strong></a><a class="genanchor" href="#40997"> &para;</a><div class="date" title="2004-03-25 06:35"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40997">
<div class="phpcode"><code><span class="html">Quick chart that helped me immensely (Best (+) / worst (o) of each command) and when to use each (w).<br /><br />| exec(string cmd, [array cmd_output, [int cmd_exit_status]])<br />+- Second (optional) argument holds an array containing the output line by line.<br />+- Third (optional) argument holds the exit status of the executed program.<br />w- When the output of a command is only important to the program.<br /><br />| system(string cmd, [int cmd_exit_status])<br />+- Echos ascii output straight to browser (only stdout; stderr must be redirected by putting 2&gt;&amp;1 after the command to see errors).<br />+- Second (optional) argument holds the exit status of the executed program.<br />w- When the output of a command is important to the user.<br /><br />The more I go over my notes the less I care for the last two functions. <br />Shell_exec() = exec() + implode() - exit codes. <br />And while neccessary to be able to pipe binary through php, most people will never use passthru<br /><br />| passthru(string cmd, [int cmd_exit_status])<br />+- Echos binary output directly to browser window.<br />+- Second (optional) argument holds the exit status of the executed program.<br />w- When the output of a command is binary. <br /><br />| shell_exec(string cmd) &lt;-- minimal features to maintain sync with normal use of backticks. <br />+- Returns full output as a string instead of directly to the browser (only stdout; stderr must be redirected).<br />o- No way to check exit status (Should use system() with both stderr and stdout redirected to /dev/null to get the exit code).</span></code></div>
  </div>
 </div>
  <div class="note" id="39264">  <div class="votes">
    <div id="Vu39264">
    <a href="/manual/vote-note.php?id=39264&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39264">
    <a href="/manual/vote-note.php?id=39264&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39264" title="50% like this...">
    0
    </div>
  </div>
  <a href="#39264" class="name">
  <strong class="user"><em>ferchland at computer-kontor dot de</em></strong></a><a class="genanchor" href="#39264"> &para;</a><div class="date" title="2004-01-22 08:24"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39264">
<div class="phpcode"><code><span class="html">I tried to fork a GUI-process on WinNT, Apache 2, PHP4.<br />I saw the new process (notepad.exe) in the Task-Managers process-list, but no Notepad-Window anywhere!<br />After activating the checkbox "Interactive with Desktop allowed" in Services-&gt;Apache everthing works with a simple command<br />exec("start c:\\winnt\\notepad.exe");</span></code></div>
  </div>
 </div>
  <div class="note" id="35910">  <div class="votes">
    <div id="Vu35910">
    <a href="/manual/vote-note.php?id=35910&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35910">
    <a href="/manual/vote-note.php?id=35910&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35910" title="50% like this...">
    0
    </div>
  </div>
  <a href="#35910" class="name">
  <strong class="user"><em>dens at dodgeball dot com</em></strong></a><a class="genanchor" href="#35910"> &para;</a><div class="date" title="2003-09-18 03:41"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35910">
<div class="phpcode"><code><span class="html">I was stuck for about an hour and a half last night trying to get Perl to pass back values to my PHP script after running an exec() command.<br /><br />Since my Perl script was using STDOUT (after being passed command lines variables), I expected the variables used in my .pl script to be accessible in PHP, no questions asked.<br /><br />Of course, this wasn't working and I finally figured it out with the help of a friend (Shawn = superstar):  you need to echo the exec() command in order to get the values back into PHP.  <br /><br />Since I was returning multiple values, I added pipe delimiters in my .pl script and then used PHP to parse the string to retreive my data into different variables.<br /><br />Check it out:<br /><br />#hit the .pl script with the data<br />$mydata = exec("script.pl 'command line args' ");<br />exec("exit(0)"); <br />    <br />#parse the value that comes back from the .pl script<br />list($strA, $strB) = split ('[|]', $mydata);<br />echo "valueA: " . $strA."&lt;br&gt;";<br />echo "valueB: " . $strB."&lt;br&gt;";<br /><br />Woo-hoo!<br />/d</span></code></div>
  </div>
 </div>
  <div class="note" id="34515">  <div class="votes">
    <div id="Vu34515">
    <a href="/manual/vote-note.php?id=34515&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34515">
    <a href="/manual/vote-note.php?id=34515&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34515" title="50% like this...">
    0
    </div>
  </div>
  <a href="#34515" class="name">
  <strong class="user"><em>software at yvanrodrigues dot com</em></strong></a><a class="genanchor" href="#34515"> &para;</a><div class="date" title="2003-07-29 02:55"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34515">
<div class="phpcode"><code><span class="html">MORE ON THE UNABLE TO FORK MESSAGES IN WINDOWS:<br /><br />I would like to confirm that this issue relates to permissions on %SYSTEMROOT%\SYSTEM32. The user (usually the anonymous login) must have execute permissions on cmd.exe<br /><br />This is unlike most other programming languages. For example, in C the spawn and exec functions do not try to open a shell, they create the new process directly. PHP creates the new process via cmd.exe (or command.com) much like the C system() function. This is good for those of you who are trying to run batch files but this is very ineffecient for running other .exe files.<br /><br />I feel uneasy about lifting permissions in my system32 directory but you can get around this by copying cmd.exe to your PHP directory. Windows will look there first and if it is not there it will check the path. Note: I mean the directory where php.exe is, not your script directory.<br /><br />I have confirmed this by running filemon.exe while trying to execute a script, and you can see it trying to start the cmd.exe process.</span></code></div>
  </div>
 </div>
  <div class="note" id="28253">  <div class="votes">
    <div id="Vu28253">
    <a href="/manual/vote-note.php?id=28253&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28253">
    <a href="/manual/vote-note.php?id=28253&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28253" title="50% like this...">
    0
    </div>
  </div>
  <a href="#28253" class="name">
  <strong class="user"><em>qscripts at lycos dot nl</em></strong></a><a class="genanchor" href="#28253"> &para;</a><div class="date" title="2003-01-07 05:45"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28253">
<div class="phpcode"><code><span class="html">Why not using the "start" utility, provided with every version of Windows to start processes in the background on Windows machines? For example :<br /><br />exec("start song.mp3");<br /><br />Which will cause the default handeling application for .MP3 file types to start playing the selected song..</span></code></div>
  </div>
 </div>
  <div class="note" id="24302">  <div class="votes">
    <div id="Vu24302">
    <a href="/manual/vote-note.php?id=24302&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24302">
    <a href="/manual/vote-note.php?id=24302&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24302" title="50% like this...">
    0
    </div>
  </div>
  <a href="#24302" class="name">
  <strong class="user"><em>kop at meme dot com</em></strong></a><a class="genanchor" href="#24302"> &para;</a><div class="date" title="2002-08-12 02:52"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24302">
<div class="phpcode"><code><span class="html">AFICT, the standard Unix Apache configuration causes an rare problem when running a job in the background. The MaxRequestsPerChild directive causes the child to terminate after 1000 requests, any background processes associated with the child will die with the child unless they are started with the "nohup" command.  Thus, the proper way to start a job in the background is to use:<br /><br />exec('nohup my-command &gt; /dev/null 2&gt;&amp;1 &amp;')</span></code></div>
  </div>
 </div>
  <div class="note" id="23258">  <div class="votes">
    <div id="Vu23258">
    <a href="/manual/vote-note.php?id=23258&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23258">
    <a href="/manual/vote-note.php?id=23258&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23258" title="50% like this...">
    0
    </div>
  </div>
  <a href="#23258" class="name">
  <strong class="user"><em>ramirosuarez at fibertel dot com dot ar</em></strong></a><a class="genanchor" href="#23258"> &para;</a><div class="date" title="2002-07-12 08:58"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23258">
<div class="phpcode"><code><span class="html">For Windows Users:<br /><br />Keep in mind that a lot of UNABLE TO FORK Errors are the result of insufficient permissions. <br /><br />CMD.EXE, TEMP Directory (or whatever you specified in php.ini), and all the directories that you use to upload o manipulate your files need to have Write privileges? usually user USER.<br /><br />This will be useful for all the people who use GD Libraries or other programs that manipulate graphic images.</span></code></div>
  </div>
 </div>
  <div class="note" id="22798">  <div class="votes">
    <div id="Vu22798">
    <a href="/manual/vote-note.php?id=22798&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22798">
    <a href="/manual/vote-note.php?id=22798&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22798" title="50% like this...">
    0
    </div>
  </div>
  <a href="#22798" class="name">
  <strong class="user"><em>GCMXZPJPDJER at spammotel dot com</em></strong></a><a class="genanchor" href="#22798"> &para;</a><div class="date" title="2002-06-30 12:41"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22798">
<div class="phpcode"><code><span class="html">to execute a script in background from php you don't need to use mikehup or other tools. just do:<br /><br />`/usr/bin/php -q foobar.php &gt;/dev/null 2&gt;&amp;1 &amp;`;<br /><br />mat</span></code></div>
  </div>
 </div>
  <div class="note" id="18713">  <div class="votes">
    <div id="Vu18713">
    <a href="/manual/vote-note.php?id=18713&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18713">
    <a href="/manual/vote-note.php?id=18713&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18713" title="50% like this...">
    0
    </div>
  </div>
  <a href="#18713" class="name">
  <strong class="user"><em>daniel dot hopp at godot dot de</em></strong></a><a class="genanchor" href="#18713"> &para;</a><div class="date" title="2002-02-01 11:25"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18713">
<div class="phpcode"><code><span class="html">Re: session_write_close()<br /><br />To launch a background process within a session, I recommend<br />to use a start-stop-daemon and ship parameters via ENV.<br /><br />Example:<br />----------------------------------------<br /><span class="default">&lt;?php<br />  </span><span class="comment">// Within a session..<br />  </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"/some/where/launch.sh 300"</span><span class="keyword">);<br />  </span><span class="comment">// ..finished immediately.<br /></span><span class="default">?&gt;<br /></span><br />----------------------------------------<br />#!/bin/bash<br /># /some/where/launch.sh<br />T=$1<br />export T<br />DAEMON=/some/where/runme.pl<br />start-stop-daemon --start --quiet --background --exec $DAEMON<br /><br />----------------------------------------<br />#!/usr/bin/perl<br /># /some/where/runme.pl<br />my $t = $ENV{'T'};<br />sleep($t);<br /><br />----------------------------------------</span></code></div>
  </div>
 </div>
  <div class="note" id="125460">  <div class="votes">
    <div id="Vu125460">
    <a href="/manual/vote-note.php?id=125460&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125460">
    <a href="/manual/vote-note.php?id=125460&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125460" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#125460" class="name">
  <strong class="user"><em>onkelfilemon at gmail dot com</em></strong></a><a class="genanchor" href="#125460"> &para;</a><div class="date" title="2020-10-25 01:24"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125460">
<div class="phpcode"><code><span class="html">Note that `popen` is also a program execution function, which for some reason is not listed here.</span></code></div>
  </div>
 </div>
  <div class="note" id="64534">  <div class="votes">
    <div id="Vu64534">
    <a href="/manual/vote-note.php?id=64534&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64534">
    <a href="/manual/vote-note.php?id=64534&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64534" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#64534" class="name">
  <strong class="user"><em>manokan at manokan dot net</em></strong></a><a class="genanchor" href="#64534"> &para;</a><div class="date" title="2006-04-17 10:09"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64534">
<div class="phpcode"><code><span class="html">Lets make it even clearer, about the "unable to fork" error in exec().<br /><br />By default Windows XP sets all permissions for cmd.exe for the temporary internet user account (IUSER-[computername]) to DENY. That overrides everthing.<br /><br />You must modify the security on cmd.exe to give the IUSER-computername account at least read &amp; execute and remove the DENY.</span></code></div>
  </div>
 </div>
  <div class="note" id="49383">  <div class="votes">
    <div id="Vu49383">
    <a href="/manual/vote-note.php?id=49383&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49383">
    <a href="/manual/vote-note.php?id=49383&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49383" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#49383" class="name">
  <strong class="user"><em>Shaun</em></strong></a><a class="genanchor" href="#49383"> &para;</a><div class="date" title="2005-01-26 01:53"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49383">
<div class="phpcode"><code><span class="html">Trying to use 'exec' to run a helper executable on Win2K3 (and I'm told this also happens on Win2K) from a PHP script running on IIS, failed to invoke the executable.<br /><br />Running the same PHP script on Win2K using Apache to serve the page calling the same helper executable worked.<br /><br />Solution: On Win2K3 (and probably Win2K), give the IIS IUSR_xxxxx guest user Read &amp; Execute permissions to Cmd.exe found in the System32 folder under Windows root directory. <br /><br />This one had me confused longer than it should have! Hope this saves others from the same fate!</span></code></div>
  </div>
 </div>
  <div class="note" id="33352">  <div class="votes">
    <div id="Vu33352">
    <a href="/manual/vote-note.php?id=33352&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33352">
    <a href="/manual/vote-note.php?id=33352&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33352" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#33352" class="name">
  <strong class="user"><em>kristof_jebens at hotmail dot com</em></strong></a><a class="genanchor" href="#33352"> &para;</a><div class="date" title="2003-06-23 02:23"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33352">
<div class="phpcode"><code><span class="html">For WIN2K Server users running Apache 1.3.22 who are unable to run an executable...<br /><br />exec('c:\\WINNT\\system32\\cmd.exe /c START c:\\file.exe');<br /><br />this is the only way it worked for me.<br />Hope that helps</span></code></div>
  </div>
 </div>
  <div class="note" id="22675">  <div class="votes">
    <div id="Vu22675">
    <a href="/manual/vote-note.php?id=22675&amp;page=ref.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22675">
    <a href="/manual/vote-note.php?id=22675&amp;page=ref.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22675" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#22675" class="name">
  <strong class="user"><em>deschampsbest at noos dot fr</em></strong></a><a class="genanchor" href="#22675"> &para;</a><div class="date" title="2002-06-26 01:05"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22675">
<div class="phpcode"><code><span class="html">I needed to know when a group of background tasks, which had been launched with a call to system, had terminated.<br />I could not find a function to call, so I created a little function.<br /><br />It basically loops on the existance of a string in the results returned by the command ps.<br /><br />All my commands, which run in background have the pid returned by posix_getpid in them.<br /><br />I am able to launch many background task and effectively wait for them all to finish.<br /><br />Before this, I would basically would sleep for N seconds.<br /><br />I apologise if a well known or better method exist.<br /><br />Thanks,<br />The New Bee<br />===============<br />===============<br /><br />function wait_until_termination ($id, $duration){<br />                $i = 0;<br />                do {<br />                        $i += 1;<br /><br />                        $cnt = `ps -auxww |<br />                                grep $id |<br />                                grep -v grep |<br />                                awk '{print $2}' |<br />                                grep -v $id|<br />                                wc -l` ;<br /><br />                        if ($cnt &gt; 0) {<br />                                sleep ($duration);<br />                        }<br /><br />                } while ($cnt != 0);<br /><br />                echo ("wait_until_termination (PID: $id, SEC: $duration) : LOOPS<br />:$i&lt;BR&gt;");<br />        }</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.exec.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.exec.php">Program execution</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.exec.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="exec.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="ref.exec.php" title="Program execution Functions">Program execution Functions</a>
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
