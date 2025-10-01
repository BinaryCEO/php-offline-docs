<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: proc_close - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.proc-close.php">
 <link rel="shorturl" href="https://www.php.net/proc-close">
 <link rel="alternate" href="https://www.php.net/proc-close" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.exec.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.passthru.php">
 <link rel="next" href="https://www.php.net/manual/en/function.proc-get-status.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.proc-close.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.proc-close.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.proc-close.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.proc-close.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.proc-close.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.proc-close.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.proc-close.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.proc-close.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.proc-close.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.proc-close.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.proc-close.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Close a process opened by proc_open and return the exit code of that process" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: proc_close - Manual" />
<meta name="twitter:description" content="Close a process opened by proc_open and return the exit code of that process" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: proc_close - Manual" />
<meta itemprop="description" content="Close a process opened by proc_open and return the exit code of that process" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Close a process opened by proc_open and return the exit code of that process" />

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
        <a href="function.proc-get-status.php">
          proc_get_status &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.passthru.php">
          &laquo; passthru        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.exec.php'>Program execution</a></li>      <li><a href='ref.exec.php'>Program execution Functions</a></li>      </ul>
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
            <option value='en/function.proc-close.php' selected="selected">English</option>
            <option value='de/function.proc-close.php'>German</option>
            <option value='es/function.proc-close.php'>Spanish</option>
            <option value='fr/function.proc-close.php'>French</option>
            <option value='it/function.proc-close.php'>Italian</option>
            <option value='ja/function.proc-close.php'>Japanese</option>
            <option value='pt_BR/function.proc-close.php'>Brazilian Portuguese</option>
            <option value='ru/function.proc-close.php'>Russian</option>
            <option value='tr/function.proc-close.php'>Turkish</option>
            <option value='uk/function.proc-close.php'>Ukrainian</option>
            <option value='zh/function.proc-close.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.proc-close" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">proc_close</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">proc_close</span> &mdash; <span class="dc-title">Close a process opened by <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span> and return the exit code of that process</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.proc-close-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>proc_close</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$process</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>proc_close()</strong></span> is similar to <span class="function"><a href="function.pclose.php" class="function">pclose()</a></span>
   except that it only works on processes opened by
   <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span>.
   <span class="function"><strong>proc_close()</strong></span> waits for the process to terminate, and
   returns its exit code.  Open pipes to that process are closed
   when this function is called, in
   order to avoid a deadlock - the child process may not be able to exit
   while the pipes are open.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.proc-close-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">process</code></dt>
     <dd>
      <p class="para">
       The <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> that will
       be closed.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.proc-close-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the termination status of the process that was run. In case of 
   an error then <code class="literal">-1</code> is returned.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
 <p class="para">
  If PHP has been compiled with --enable-sigchild, the return value of this function is undefined.
 </p>
</p></blockquote>

 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/exec/functions/proc-close.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.proc-close%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.proc-close&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.proc-close.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="56798">  <div class="votes">
    <div id="Vu56798">
    <a href="/manual/vote-note.php?id=56798&amp;page=function.proc-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56798">
    <a href="/manual/vote-note.php?id=56798&amp;page=function.proc-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56798" title="84% like this...">
    13
    </div>
  </div>
  <a href="#56798" class="name">
  <strong class="user"><em>oohay251 at yahoo dot com</em></strong></a><a class="genanchor" href="#56798"> &para;</a><div class="date" title="2005-09-15 07:06"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56798">
<div class="phpcode"><code><span class="html">From various Internet posts and recent experience, I have observed that you cannot rely on proc_close returning the accurate return code of the child process. The return code also depends on wether or not you read from the stdout/stderr pipes, as my example shows. I work around this by writing the exit code to an additional file descriptor.<br /><br />&lt;?<br />$descriptorspec = array(<br />       0 =&gt; array('pipe', 'r'),  // stdin is a pipe that the child will read from<br />       1 =&gt; array('pipe', 'w'),  // stdout is a pipe that the child will write to<br />       2 =&gt; array('pipe', 'w'), // stderr is a pipe that the child will write to<br />    );<br />    $proc = @proc_open("/bin/ls -l /etc/passwd", $descriptorspec, $pipes);<br />    fclose($pipes[0]);<br />    $output = array();<br />    while (!feof($pipes[1])) array_push($output, rtrim(fgets($pipes[1],1024),"\n"));<br />    fclose($pipes[1]);<br />    while (!feof($pipes[2])) array_push($output, rtrim(fgets($pipes[2],1024),"\n"));<br />    fclose($pipes[2]);<br />    $exit=proc_close($proc);<br />    print_r($output);<br />    echo "exitcode $exit\n\n";<br /><br />$descriptorspec = array(<br />       0 =&gt; array('pipe', 'r'),  // stdin is a pipe that the child will read from<br />       1 =&gt; array('pipe', 'w'),  // stdout is a pipe that the child will write to<br />       2 =&gt; array('pipe', 'w'), // stderr is a pipe that the child will write to<br />    );<br />    $proc = @proc_open("/bin/ls -l /etc/passwd", $descriptorspec, $pipes);<br />    fclose($pipes[0]);<br />    fclose($pipes[1]);<br />    fclose($pipes[2]);<br />    $exit=proc_close($proc);<br />    echo "exitcode $exit\n\n";<br /><br />$descriptorspec = array(<br />       0 =&gt; array('pipe', 'r'),  // stdin is a pipe that the child will read from<br />       1 =&gt; array('pipe', 'w'),  // stdout is a pipe that the child will write to<br />       2 =&gt; array('pipe', 'w'), // stderr is a pipe that the child will write to<br />       3 =&gt; array('pipe', 'w'), // stderr is a pipe that the child will write to<br />    );<br />    $proc = @proc_open("/bin/ls -l /etc/passwd;echo $? &gt;&amp;3", $descriptorspec, $pipes);<br />    fclose($pipes[0]);<br />    $output = array();<br />    //comment next line to get correct exicode<br />    while (!feof($pipes[1])) array_push($output, rtrim(fgets($pipes[1],1024),"\n"));<br />    fclose($pipes[1]);<br />    while (!feof($pipes[2])) array_push($output, rtrim(fgets($pipes[2],1024),"\n"));<br />    fclose($pipes[2]);<br />    if (!feof($pipes[3])) $output['exitcode']=rtrim(fgets($pipes[3],5),"\n");<br />    fclose($pipes[3]);<br />    proc_close($proc);<br />    print_r($output);<br />?&gt;<br /><br />Outputs on my system:<br /><br />Array<br />(<br />    [0] =&gt; -rw-r--r--  1 root root 1460 2005-09-02 09:52 /etc/passwd<br />    [1] =&gt;<br />    [2] =&gt;<br />)<br />exitcode -1<br /><br />exitcode 1<br /><br />Array<br />(<br />    [0] =&gt; -rw-r--r--  1 root root 1460 2005-09-02 09:52 /etc/passwd<br />    [1] =&gt;<br />    [2] =&gt;<br />    [exitcode] =&gt; 0<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="117934">  <div class="votes">
    <div id="Vu117934">
    <a href="/manual/vote-note.php?id=117934&amp;page=function.proc-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117934">
    <a href="/manual/vote-note.php?id=117934&amp;page=function.proc-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117934" title="84% like this...">
    9
    </div>
  </div>
  <a href="#117934" class="name">
  <strong class="user"><em>Uwe Ohse</em></strong></a><a class="genanchor" href="#117934"> &para;</a><div class="date" title="2015-09-03 11:12"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117934">
<div class="phpcode"><code><span class="html">Regarding: "Returns the termination status of the process that was run. In case of an error then -1 is returned."<br /><br />This is, at best, misleading. It returns:<br />* -1 on error,<br />* WEXITSTATUS(status) if WIFEXITED(status) is true, or <br />* status if WIFEXITED(status) is false,<br />where status is the status parameter of waitpid().<br /><br />This makes it impossible to differentiate between a relatively normal exit or a termination by signal, and reduces the value of the proc_close return code to a binary one (ok / something broke).<br /><br />This can be seen in proc_open_rsrc_dtor() in ext/standard/proc_open.c (PHP 5.4.44, 5.6.12).</span></code></div>
  </div>
 </div>
  <div class="note" id="78306">  <div class="votes">
    <div id="Vu78306">
    <a href="/manual/vote-note.php?id=78306&amp;page=function.proc-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78306">
    <a href="/manual/vote-note.php?id=78306&amp;page=function.proc-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78306" title="60% like this...">
    1
    </div>
  </div>
  <a href="#78306" class="name">
  <strong class="user"><em>ashnazg at php dot net</em></strong></a><a class="genanchor" href="#78306"> &para;</a><div class="date" title="2007-10-05 02:25"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78306">
<div class="phpcode"><code><span class="html">It seems that if you configured --enable-sigchild when you compiled PHP (which from my reading is required for you to use Oracle stuff), then return codes from proc_close() cannot be trusted.<br /><br />Using proc_open's Example 1998's code on versions I have of PHP4 (4.4.7) and PHP5 (5.2.4), the return code is always "-1".  This is also the only return code I can cause by running other shell commands whether they succeed or fail.<br /><br />I don't see this caveat mentioned anywhere except on this old bug report -- <a href="http://bugs.php.net/bug.php?id=29123" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=29123</a></span></code></div>
  </div>
 </div>
  <div class="note" id="35382">  <div class="votes">
    <div id="Vu35382">
    <a href="/manual/vote-note.php?id=35382&amp;page=function.proc-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35382">
    <a href="/manual/vote-note.php?id=35382&amp;page=function.proc-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35382" title="60% like this...">
    1
    </div>
  </div>
  <a href="#35382" class="name">
  <strong class="user"><em>sergey1369 at narod dot ru</em></strong></a><a class="genanchor" href="#35382"> &para;</a><div class="date" title="2003-08-29 03:16"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35382">
<div class="phpcode"><code><span class="html">Under PHP/4.3.3RC2, in case of two processes <br />these function may hangs. Work around is not use <br />proc_close, or put it after all fcloses done. <br /><br />For example, this code hangs.<br /><br />$ph1 = proc_open("cat",<br /> array(0=&gt;array("pipe","r"),1=&gt;array("pipe","w")),<br /> $pipes1);<br />$ph2 = proc_open("cat",<br /> array(0=&gt;array("pipe","r"),1=&gt;array("pipe","w")),<br /> $pipes2);<br /><br />fclose($pipes1[0]); fclose($pipes1[1]); proc_close($ph1);<br />fclose($pipes2[0]); fclose($pipes2[1]); proc_close($ph2);<br /><br />This code worked for me:<br /><br />$ph1 = proc_open("cat",<br /> array(0=&gt;array("pipe","r"),1=&gt;array("pipe","w")),<br /> $pipes1);<br />$ph2 = proc_open("cat",<br /> array(0=&gt;array("pipe","r"),1=&gt;array("pipe","w")),<br /> $pipes2);<br /><br />fclose($pipes1[0]); fclose($pipes1[1]); <br />fclose($pipes2[0]); fclose($pipes2[1]); <br />proc_close($ph1); proc_close($ph2);</span></code></div>
  </div>
 </div>
  <div class="note" id="83622">  <div class="votes">
    <div id="Vu83622">
    <a href="/manual/vote-note.php?id=83622&amp;page=function.proc-close&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83622">
    <a href="/manual/vote-note.php?id=83622&amp;page=function.proc-close&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83622" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83622" class="name">
  <strong class="user"><em>morrisdavidd at gmail dot com</em></strong></a><a class="genanchor" href="#83622"> &para;</a><div class="date" title="2008-06-04 04:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83622">
<div class="phpcode"><code><span class="html">Consider the following pseudo code:<br /><br />$SOME_PROCESS = proc_open(/* something here */);<br />...<br />$status = proc_get_status($SOME_PROCESS);<br />...<br />$exitCode = proc_close($SOME_PROCESS);<br /><br />If the external program has exited on its own before the call to proc_get_status, then $exitCode == -1<br /><br />So consider using:<br />$actualExitCode = ($status["running"] ? $exitCode : $status["exitcode"] );</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.proc-close&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.proc-close.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.exec.php">Program execution Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.escapeshellarg.php" title="escapeshellarg">escapeshellarg</a>
                        </li>
                                                <li class="">
                            <a href="function.escapeshellcmd.php" title="escapeshellcmd">escapeshellcmd</a>
                        </li>
                                                <li class="">
                            <a href="function.exec.php" title="exec">exec</a>
                        </li>
                                                <li class="">
                            <a href="function.passthru.php" title="passthru">passthru</a>
                        </li>
                                                <li class="current">
                            <a href="function.proc-close.php" title="proc_&#8203;close">proc_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-get-status.php" title="proc_&#8203;get_&#8203;status">proc_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-nice.php" title="proc_&#8203;nice">proc_&#8203;nice</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-open.php" title="proc_&#8203;open">proc_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-terminate.php" title="proc_&#8203;terminate">proc_&#8203;terminate</a>
                        </li>
                                                <li class="">
                            <a href="function.shell-exec.php" title="shell_&#8203;exec">shell_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.system.php" title="system">system</a>
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
