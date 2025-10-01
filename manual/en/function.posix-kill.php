<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: posix_kill - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.posix-kill.php">
 <link rel="shorturl" href="https://www.php.net/posix-kill">
 <link rel="alternate" href="https://www.php.net/posix-kill" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.posix.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.posix-isatty.php">
 <link rel="next" href="https://www.php.net/manual/en/function.posix-mkfifo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.posix-kill.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.posix-kill.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.posix-kill.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.posix-kill.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.posix-kill.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.posix-kill.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.posix-kill.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.posix-kill.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.posix-kill.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.posix-kill.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.posix-kill.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Send a signal to a process" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: posix_kill - Manual" />
<meta name="twitter:description" content="Send a signal to a process" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: posix_kill - Manual" />
<meta itemprop="description" content="Send a signal to a process" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Send a signal to a process" />

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
        <a href="function.posix-mkfifo.php">
          posix_mkfifo &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.posix-isatty.php">
          &laquo; posix_isatty        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.posix.php'>POSIX</a></li>      <li><a href='ref.posix.php'>POSIX Functions</a></li>      </ul>
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
            <option value='en/function.posix-kill.php' selected="selected">English</option>
            <option value='de/function.posix-kill.php'>German</option>
            <option value='es/function.posix-kill.php'>Spanish</option>
            <option value='fr/function.posix-kill.php'>French</option>
            <option value='it/function.posix-kill.php'>Italian</option>
            <option value='ja/function.posix-kill.php'>Japanese</option>
            <option value='pt_BR/function.posix-kill.php'>Brazilian Portuguese</option>
            <option value='ru/function.posix-kill.php'>Russian</option>
            <option value='tr/function.posix-kill.php'>Turkish</option>
            <option value='uk/function.posix-kill.php'>Ukrainian</option>
            <option value='zh/function.posix-kill.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.posix-kill" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">posix_kill</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_kill</span> &mdash; <span class="dc-title">Send a signal to a process</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.posix-kill-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>posix_kill</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$process_id</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$signal</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Send the signal <code class="parameter">signal</code> to the process with
   the process identifier <code class="parameter">process_id</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.posix-kill-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">process_id</code></dt>
     <dd>
      <p class="para">
       The process identifier.
      </p>
     </dd>
    
    
     <dt><code class="parameter">signal</code></dt>
     <dd>
      <p class="para">
       One of the <a href="pcntl.constants.php" class="link">PCNTL signals constants</a>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.posix-kill-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.posix-kill-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li>
     The kill(2) manual page of the POSIX system, which contains additional
     information about negative process identifiers, the special pid 0, the
     special pid -1, and the signal number 0.
    </li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/posix/functions/posix-kill.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.posix-kill%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.posix-kill&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.posix-kill.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="49596">  <div class="votes">
    <div id="Vu49596">
    <a href="/manual/vote-note.php?id=49596&amp;page=function.posix-kill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49596">
    <a href="/manual/vote-note.php?id=49596&amp;page=function.posix-kill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49596" title="76% like this...">
    14
    </div>
  </div>
  <a href="#49596" class="name">
  <strong class="user"><em>codeslinger at compsalot dot com</em></strong></a><a class="genanchor" href="#49596"> &para;</a><div class="date" title="2005-02-02 08:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49596">
<div class="phpcode"><code><span class="html">Detecting if another copy of a program is running (*NIX specific)<br /><br />One cute trick, to see if another process is running, is to send it signal 0.  Signal 0 does not actually get sent, but kill will check to see if it is possible to send the signal.  Note that this only works if you have permission to send a signal to that process.<br /><br />A practical use for this technique is to avoid running multiple copies of the same program.  You save the PID to a file in the usual way...   Then during start-up you check the value of the PID file and see if that process currently exists.<br /><br />This is not totally fool-proof.  In rare circumstances it is possible for an unrelated program to have the same recycled PID.  But that other program would most likely not accept signals from your program anyway (unless your program is root).  <br /><br />To make it as reliable as possible, you would want your program to remove it's PID file during shutdown (see register_shutdown_function).  That way, only if your program crashed AND another program happened to use the same PID AND the other program was willing to accept signals from your program, would you get a wrong result.  This would be an exceedingly rare occurrence.  This also assumes that the PID file has not been tampered with (as do all programs that rely on PID files...).  <br /><br />It's also possible to use 'ps x' to detect this, but using kill is much more efficient.<br /><br />Here is the core routine:<br /><br />    $PrevPid = file_get_contents($PathToPidFile);<br /><br />    if(($PrevPid !== FALSE) &amp;&amp; posix_kill(rtrim($PrevPid),0)) {<br />        echo "Error: Server is already running with PID: $PrevPid\n";<br />        exit(-99);<br />    } else {<br />        echo "Starting Server...";<br />    }<br /><br />Hmmm...  if you want total 100% reliability, plus efficiency.  What you could do is to make the initial check using kill.  If it says not running, then you are ready to zoom.  But if kill says already running, then you could use: <br /><br />//You can get the $ProgramName from $argv[0]<br />$Result = shell_exec('ps x | grep "' . $PrevPid . '" | grep "' . $ProgramName . '" | grep -v "grep"');<br /><br />Assuming that your program has permissions to do this.  If you execute that and get back an empty string, then the other program is an imposter using a recycled PID and you are clear to go.  <br /><br />-- Erik</span></code></div>
  </div>
 </div>
  <div class="note" id="126357">  <div class="votes">
    <div id="Vu126357">
    <a href="/manual/vote-note.php?id=126357&amp;page=function.posix-kill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126357">
    <a href="/manual/vote-note.php?id=126357&amp;page=function.posix-kill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126357" title="100% like this...">
    3
    </div>
  </div>
  <a href="#126357" class="name">
  <strong class="user"><em>php at tla-sys dot com</em></strong></a><a class="genanchor" href="#126357"> &para;</a><div class="date" title="2021-08-20 05:56"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126357">
<div class="phpcode"><code><span class="html">Although it appears that posix_kill() is built into all modern versions of PHP, it actually requires the "process" extension.  Otherwise, you get an "undefined function" error when you call it.  You might try this to make your code (more) robust on Linux:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">send_signal</span><span class="keyword">(</span><span class="default">int $pid</span><span class="keyword">, </span><span class="default">int $sig_num</span><span class="keyword">) : </span><span class="default">bool </span><span class="keyword">{<br />    if ( </span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"posix_kill"</span><span class="keyword">) ) return </span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">, </span><span class="default">$sig_num</span><span class="keyword">);<br />    </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"/usr/bin/kill -s </span><span class="default">$sig_num</span><span class="string"> </span><span class="default">$pid</span><span class="string"> 2&gt;&amp;1"</span><span class="keyword">, </span><span class="default">$junk</span><span class="keyword">, </span><span class="default">$return_code</span><span class="keyword">);<br />    return ! </span><span class="default">$return_code</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>Yes, it works right when $sig_num = 0.</span></code></div>
  </div>
 </div>
  <div class="note" id="88184">  <div class="votes">
    <div id="Vu88184">
    <a href="/manual/vote-note.php?id=88184&amp;page=function.posix-kill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88184">
    <a href="/manual/vote-note.php?id=88184&amp;page=function.posix-kill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88184" title="83% like this...">
    4
    </div>
  </div>
  <a href="#88184" class="name">
  <strong class="user"><em>Skippy</em></strong></a><a class="genanchor" href="#88184"> &para;</a><div class="date" title="2009-01-14 02:12"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88184">
<div class="phpcode"><code><span class="html">In order to check the outcome of posix_kill() you can use posix_get_last_error(), which will return 0 (zero) in case of success and a non-zero error code otherwise. Use the number returned by posix_get_last_error() as a parameter to posix_strerror() to get a human-readable error message corresponding to that error code.<br /><br />Please note that a non-zero code from posix_get_last_error() does NOT mean that the pid doesn't exist; it only means that posix_kill() ran into trouble signalling that process. For example, the pid may exist but the process is owned by a user other than the one you use to run the code, and you're not root; in which case you'll get an error saying you're not allowed to signal that process (operation not permitted).<br /><br />Accordingly, the code posted by Jille earlier is WRONG. According to the POSIX spec (see errno.h on your system), EPERM means "operation not permitted". This should NOT be taken as indication that the pid doesn't exist, it merely means that posix_kill() couldn't signal that process. If anything, it should be a hint that a process with that pid IS running.<br /><br />errno.h constant names definitions:<br /><a href="http://www.opengroup.org/onlinepubs/009695399/basedefs/errno.h.html" rel="nofollow" target="_blank">http://www.opengroup.org/onlinepubs/009695399/basedefs/errno.h.html</a><br /><br />Unfortunately, PHP does not currently define constants with these names (such as EPERM, ENOENT, ESRCH etc.) A non-complete subset is defined for socket operations (SOCKET_EPERM for example), but it doesn't hold all the possible POSIX error constants; ESRCH for instance is of particular interest for posix_kill(), but SOCKET_ESRCH doesn't exist, because it means "no such process" and doesn't make sense for sockets.<br /><br />Solutions:<br />* Have PHP devs define these constants in a future PHP version.<br />* Look-up errno.h on your system and define your own constants. You can use a script to parse errno.h and either define the constants on the fly or generate, once, the PHP code to define them.<br /><br />Please be advised, however, that relying on a specific errno.h is not portable. Different systems may have different numeric values for these constants. That's why PHP should be defining the constants at compilation time and the code should be able to rely on the constant names; only the names are portable, not the actual values.</span></code></div>
  </div>
 </div>
  <div class="note" id="27758">  <div class="votes">
    <div id="Vu27758">
    <a href="/manual/vote-note.php?id=27758&amp;page=function.posix-kill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27758">
    <a href="/manual/vote-note.php?id=27758&amp;page=function.posix-kill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27758" title="83% like this...">
    4
    </div>
  </div>
  <a href="#27758" class="name">
  <strong class="user"><em>gid at gifpaste dot net</em></strong></a><a class="genanchor" href="#27758"> &para;</a><div class="date" title="2002-12-17 04:26"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27758">
<div class="phpcode"><code><span class="html">For those that want to kill everything matching a certain pattern (ala killall in for linux), try something like this.  Note that this is a good idea to do something like this for cross platform compatilibity, instead of executing killall, because killall for other UNIXes does just that, kills EVERYTHING.  :)<br /><br />function killall($match) {<br />    if($match=='') return 'no pattern specified';<br />    $match = escapeshellarg($match);<br />    exec("ps x|grep $match|grep -v grep|awk '{print $1}'", $output, $ret);<br />    if($ret) return 'you need ps, grep, and awk installed for this to work';<br />    while(list(,$t) = each($output)) {<br />        if(preg_match('/^([0-9]+)/', $t, $r)) {<br />            system('kill '. $r[1], $k);<br />            if(!$k) $killed = 1;<br />        }<br />    }<br />    if($killed) {<br />        return '';<br />    } else {<br />        return "$match: no process killed";<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="117225">  <div class="votes">
    <div id="Vu117225">
    <a href="/manual/vote-note.php?id=117225&amp;page=function.posix-kill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117225">
    <a href="/manual/vote-note.php?id=117225&amp;page=function.posix-kill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117225" title="71% like this...">
    6
    </div>
  </div>
  <a href="#117225" class="name">
  <strong class="user"><em>Martin</em></strong></a><a class="genanchor" href="#117225"> &para;</a><div class="date" title="2015-05-05 05:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117225">
<div class="phpcode"><code><span class="html">Warning!<br /><br />The $sig parameter cannot be one of the PCNTL signals constants if you are running your script from the browser (ie. as an apache process). Strangely it does seem to allow the constants to be used from the command line ("php -r ...") but if your script is running from within apache then calling posix_kill($pid, SIGINT) will return FALSE (and posix_get_last_error() will return 0).</span></code></div>
  </div>
 </div>
  <div class="note" id="118228">  <div class="votes">
    <div id="Vu118228">
    <a href="/manual/vote-note.php?id=118228&amp;page=function.posix-kill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118228">
    <a href="/manual/vote-note.php?id=118228&amp;page=function.posix-kill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118228" title="66% like this...">
    1
    </div>
  </div>
  <a href="#118228" class="name">
  <strong class="user"><em>eddi13</em></strong></a><a class="genanchor" href="#118228"> &para;</a><div class="date" title="2015-10-29 09:36"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118228">
<div class="phpcode"><code><span class="html">check whether the process is running. windows-linux<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">isRunning</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">) {<br />        </span><span class="default">$isRunning </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        if(</span><span class="default">strncasecmp</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">, </span><span class="string">"win"</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$out </span><span class="keyword">= [];<br />            </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"TASKLIST /FO LIST /FI \"PID eq </span><span class="default">$pid</span><span class="string">\""</span><span class="keyword">, </span><span class="default">$out</span><span class="keyword">);<br />            if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">) {<br />                </span><span class="default">$isRunning </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />            }<br />        }<br />        elseif(</span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$prevPid</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">)) {<br />            </span><span class="default">$isRunning </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$isRunning</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115035">  <div class="votes">
    <div id="Vu115035">
    <a href="/manual/vote-note.php?id=115035&amp;page=function.posix-kill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115035">
    <a href="/manual/vote-note.php?id=115035&amp;page=function.posix-kill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115035" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115035" class="name">
  <strong class="user"><em>Mauro</em></strong></a><a class="genanchor" href="#115035"> &para;</a><div class="date" title="2014-05-15 01:47"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115035">
<div class="phpcode"><code><span class="html">Posix_kill is not so reliable (it seems it always deliver the signal - even 0 to a no existing process - and doesn't generate an error).<br />I found this way to check the existence of a process, using /proc:<br /><br />if(!file_exists("/proc/$pid/cmdline"<br /><br />obviously check the permissions .</span></code></div>
  </div>
 </div>
  <div class="note" id="81977">  <div class="votes">
    <div id="Vu81977">
    <a href="/manual/vote-note.php?id=81977&amp;page=function.posix-kill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81977">
    <a href="/manual/vote-note.php?id=81977&amp;page=function.posix-kill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81977" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81977" class="name">
  <strong class="user"><em>Jacques Manukyan</em></strong></a><a class="genanchor" href="#81977"> &para;</a><div class="date" title="2008-03-21 06:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81977">
<div class="phpcode"><code><span class="html">Keep in mind that you can only send kill signals to processes owned by your UID.<br /><br />If you are running your program as root, then you can send kill signals to all processes.</span></code></div>
  </div>
 </div>
  <div class="note" id="102846">  <div class="votes">
    <div id="Vu102846">
    <a href="/manual/vote-note.php?id=102846&amp;page=function.posix-kill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102846">
    <a href="/manual/vote-note.php?id=102846&amp;page=function.posix-kill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102846" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#102846" class="name">
  <strong class="user"><em>unsure at tactileint dot com</em></strong></a><a class="genanchor" href="#102846"> &para;</a><div class="date" title="2011-03-09 04:36"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102846">
<div class="phpcode"><code><span class="html">Just like the error codes (EPERM, EEXIST, etc), signal numbers are different on different platforms.  EG on macos, SIGCONT is 19; on Linux SIGSTOP is 19.  Big difference.<br /><br />If you have PCNTL compiled in, you can use the constants like SIGCONT; i trust they're all correct.<br /><br />If not, look in /usr/include/signal.h; these days its tons of ifdef mumbo jumbo but you can go to /usr/include/bits or /usr/include/sys or something and look for files named sig*.h; one of them will list them for you.</span></code></div>
  </div>
 </div>
  <div class="note" id="102094">  <div class="votes">
    <div id="Vu102094">
    <a href="/manual/vote-note.php?id=102094&amp;page=function.posix-kill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102094">
    <a href="/manual/vote-note.php?id=102094&amp;page=function.posix-kill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102094" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#102094" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#102094"> &para;</a><div class="date" title="2011-01-26 03:27"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102094">
<div class="phpcode"><code><span class="html">here is a process kill function for windows:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">win_kill</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">){
<br />    </span><span class="default">$wmi</span><span class="keyword">=new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"winmgmts:{impersonationLevel=impersonate}!\\\\.\\root\\cimv2"</span><span class="keyword">);
<br />    </span><span class="default">$procs</span><span class="keyword">=</span><span class="default">$wmi</span><span class="keyword">-&gt;</span><span class="default">ExecQuery</span><span class="keyword">(</span><span class="string">"SELECT * FROM Win32_Process WHERE ProcessId='"</span><span class="keyword">.</span><span class="default">$pid</span><span class="keyword">.</span><span class="string">"'"</span><span class="keyword">);
<br />    foreach(</span><span class="default">$procs </span><span class="keyword">as </span><span class="default">$proc</span><span class="keyword">)
<br />      </span><span class="default">$proc</span><span class="keyword">-&gt;</span><span class="default">Terminate</span><span class="keyword">();
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87828">  <div class="votes">
    <div id="Vu87828">
    <a href="/manual/vote-note.php?id=87828&amp;page=function.posix-kill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87828">
    <a href="/manual/vote-note.php?id=87828&amp;page=function.posix-kill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87828" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#87828" class="name">
  <strong class="user"><em>regis dot fr dot php dot net at tornad dot net</em></strong></a><a class="genanchor" href="#87828"> &para;</a><div class="date" title="2008-12-24 07:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87828">
<div class="phpcode"><code><span class="html">A little recursive function to kill a process and his childs.
<br />it works fine for me and I don't have find something else to do it.
<br />It's a mix of various scripts I've found.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">killProcessAndChilds</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">,</span><span class="default">$signal</span><span class="keyword">) {
<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"ps -ef| awk '\$3 == '</span><span class="default">$pid</span><span class="string">' { print  \$2 }'"</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">, </span><span class="default">$ret</span><span class="keyword">);
<br />        if(</span><span class="default">$ret</span><span class="keyword">) return </span><span class="string">'you need ps, grep, and awk'</span><span class="keyword">;
<br />        while(list(,</span><span class="default">$t</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">)) {
<br />            if ( </span><span class="default">$t </span><span class="keyword">!= </span><span class="default">$pid </span><span class="keyword">) {
<br />                </span><span class="default">killProcessAndChilds</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">,</span><span class="default">$signal</span><span class="keyword">);
<br />            }
<br />        }
<br />        </span><span class="comment">//echo "killing ".$pid."\n";
<br />        </span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">);
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82560">  <div class="votes">
    <div id="Vu82560">
    <a href="/manual/vote-note.php?id=82560&amp;page=function.posix-kill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82560">
    <a href="/manual/vote-note.php?id=82560&amp;page=function.posix-kill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82560" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#82560" class="name">
  <strong class="user"><em>Jille at mydevnull dot quis dot cx</em></strong></a><a class="genanchor" href="#82560"> &para;</a><div class="date" title="2008-04-16 06:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82560">
<div class="phpcode"><code><span class="html">If you want to test whether processes owned by other users are running, you can use:<br /><br /><span class="default">&lt;?php<br />  $running</span><span class="keyword">=</span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />  if(</span><span class="default">posix_get_last_error</span><span class="keyword">()==</span><span class="default">1</span><span class="keyword">) </span><span class="comment">/* EPERM */<br />    </span><span class="default">$running</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />If the process is owned by somebody else (and you're not root), you will get an EPERM.<br />On my system (FreeBSD) this is defined to 1.<br /><br />You should test what the value of EPERM is on your system.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.posix-kill&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.posix-kill.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.posix.php">POSIX Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.posix-access.php" title="posix_&#8203;access">posix_&#8203;access</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-ctermid.php" title="posix_&#8203;ctermid">posix_&#8203;ctermid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-eaccess.php" title="posix_&#8203;eaccess">posix_&#8203;eaccess</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-errno.php" title="posix_&#8203;errno">posix_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-fpathconf.php" title="posix_&#8203;fpathconf">posix_&#8203;fpathconf</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-get-last-error.php" title="posix_&#8203;get_&#8203;last_&#8203;error">posix_&#8203;get_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getcwd.php" title="posix_&#8203;getcwd">posix_&#8203;getcwd</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getegid.php" title="posix_&#8203;getegid">posix_&#8203;getegid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-geteuid.php" title="posix_&#8203;geteuid">posix_&#8203;geteuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getgid.php" title="posix_&#8203;getgid">posix_&#8203;getgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getgrgid.php" title="posix_&#8203;getgrgid">posix_&#8203;getgrgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getgrnam.php" title="posix_&#8203;getgrnam">posix_&#8203;getgrnam</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getgroups.php" title="posix_&#8203;getgroups">posix_&#8203;getgroups</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getlogin.php" title="posix_&#8203;getlogin">posix_&#8203;getlogin</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpgid.php" title="posix_&#8203;getpgid">posix_&#8203;getpgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpgrp.php" title="posix_&#8203;getpgrp">posix_&#8203;getpgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpid.php" title="posix_&#8203;getpid">posix_&#8203;getpid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getppid.php" title="posix_&#8203;getppid">posix_&#8203;getppid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpwnam.php" title="posix_&#8203;getpwnam">posix_&#8203;getpwnam</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpwuid.php" title="posix_&#8203;getpwuid">posix_&#8203;getpwuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getrlimit.php" title="posix_&#8203;getrlimit">posix_&#8203;getrlimit</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getsid.php" title="posix_&#8203;getsid">posix_&#8203;getsid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getuid.php" title="posix_&#8203;getuid">posix_&#8203;getuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-initgroups.php" title="posix_&#8203;initgroups">posix_&#8203;initgroups</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-isatty.php" title="posix_&#8203;isatty">posix_&#8203;isatty</a>
                        </li>
                                                <li class="current">
                            <a href="function.posix-kill.php" title="posix_&#8203;kill">posix_&#8203;kill</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-mkfifo.php" title="posix_&#8203;mkfifo">posix_&#8203;mkfifo</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-mknod.php" title="posix_&#8203;mknod">posix_&#8203;mknod</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-pathconf.php" title="posix_&#8203;pathconf">posix_&#8203;pathconf</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setegid.php" title="posix_&#8203;setegid">posix_&#8203;setegid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-seteuid.php" title="posix_&#8203;seteuid">posix_&#8203;seteuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setgid.php" title="posix_&#8203;setgid">posix_&#8203;setgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setpgid.php" title="posix_&#8203;setpgid">posix_&#8203;setpgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setrlimit.php" title="posix_&#8203;setrlimit">posix_&#8203;setrlimit</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setsid.php" title="posix_&#8203;setsid">posix_&#8203;setsid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setuid.php" title="posix_&#8203;setuid">posix_&#8203;setuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-strerror.php" title="posix_&#8203;strerror">posix_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-sysconf.php" title="posix_&#8203;sysconf">posix_&#8203;sysconf</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-times.php" title="posix_&#8203;times">posix_&#8203;times</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-ttyname.php" title="posix_&#8203;ttyname">posix_&#8203;ttyname</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-uname.php" title="posix_&#8203;uname">posix_&#8203;uname</a>
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
