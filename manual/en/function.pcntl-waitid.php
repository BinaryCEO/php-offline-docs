<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pcntl_waitid - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pcntl-waitid.php">
 <link rel="shorturl" href="https://www.php.net/pcntl-waitid">
 <link rel="alternate" href="https://www.php.net/pcntl-waitid" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pcntl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pcntl-wait.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pcntl-waitpid.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pcntl-waitid.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pcntl-waitid.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pcntl-waitid.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pcntl-waitid.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pcntl-waitid.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pcntl-waitid.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pcntl-waitid.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pcntl-waitid.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pcntl-waitid.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pcntl-waitid.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pcntl-waitid.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Waits for a child process to change state" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pcntl_waitid - Manual" />
<meta name="twitter:description" content="Waits for a child process to change state" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pcntl_waitid - Manual" />
<meta itemprop="description" content="Waits for a child process to change state" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Waits for a child process to change state" />

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
        <a href="function.pcntl-waitpid.php">
          pcntl_waitpid &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pcntl-wait.php">
          &laquo; pcntl_wait        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.pcntl.php'>PCNTL</a></li>      <li><a href='ref.pcntl.php'>PCNTL Functions</a></li>      </ul>
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
            <option value='en/function.pcntl-waitid.php' selected="selected">English</option>
            <option value='de/function.pcntl-waitid.php'>German</option>
            <option value='es/function.pcntl-waitid.php'>Spanish</option>
            <option value='fr/function.pcntl-waitid.php'>French</option>
            <option value='it/function.pcntl-waitid.php'>Italian</option>
            <option value='ja/function.pcntl-waitid.php'>Japanese</option>
            <option value='pt_BR/function.pcntl-waitid.php'>Brazilian Portuguese</option>
            <option value='ru/function.pcntl-waitid.php'>Russian</option>
            <option value='tr/function.pcntl-waitid.php'>Turkish</option>
            <option value='uk/function.pcntl-waitid.php'>Ukrainian</option>
            <option value='zh/function.pcntl-waitid.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pcntl-waitid" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pcntl_waitid</h1>
  <p class="verinfo">(PHP 8 &gt;= 8.4.0)</p><p class="refpurpose"><span class="refname">pcntl_waitid</span> &mdash; <span class="dc-title">Waits for a child process to change state</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.pcntl-waitid-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pcntl_waitid</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$idtype</code><span class="initializer"> = <strong><code><a href="pcntl.constants.php#constant.p-all">P_ALL</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$id</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$info</code><span class="initializer"> = []</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="pcntl.constants.php#constant.wexited">WEXITED</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$resource_usage</code><span class="initializer"> = []</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Obtains status information pertaining to termination, stop, and/or continue
   events in one of the caller&#039;s child processes.
  </p>

  <p class="para">
   Unless <strong><code><a href="pcntl.constants.php#constant.wnohang">WNOHANG</a></code></strong> flag is passed, the calling process will
   become blocked until an error occurs, or status information becomes
   available that satisfies all of the following:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      The status information is from one of the child processes in the set of
      child processes specified by the <code class="parameter">idtype</code> and
      <code class="parameter">id</code> arguments.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      The state change in the status information matches one of the state change
      flags set in the <code class="parameter">flags</code> argument.
     </span>
    </li>
   </ul>
  </p>

  <p class="para">
   If matching status information is available prior to the call to
   <span class="function"><strong>pcntl_waitid()</strong></span>, return shall be immediate. If matching
   status information is available for two or more child processes, the order
   in which their status is reported is unspecified.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This documentation covers the POSIX specification of the
    <code class="literal">waitid</code> function, along with some additional parameters
    specific to implementations on Linux, NetBSD and FreeBSD. Please see your
    system&#039;s <code class="literal">waitid(2)</code> man page for specific details as to
    how <code class="literal">waitid</code> works on your system.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.pcntl-waitid-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">idtype</code></dt>
    <dt><code class="parameter">id</code></dt>
    <dd>
     <span class="simpara">
      The <code class="parameter">idtype</code> and <code class="parameter">id</code> arguments
      are used to specify which children to wait for.
     </span>
     <table class="doctable table">
      <caption><strong>POSIX standard <code class="parameter">idtype</code> and <code class="parameter">id</code> arguments</strong></caption>
      
       <tbody class="tbody">
        <tr>
         <td>If <code class="parameter">idtype</code> is <code class="literal">P_ALL</code></td>
         <td>
          wait for any child process, <code class="parameter">id</code> is ignored.
         </td>
        </tr>

        <tr>
         <td>If <code class="parameter">idtype</code> is <code class="literal">P_PID</code></td>
         <td>
          wait for the child with process ID equal to <code class="parameter">id</code>.
         </td>
        </tr>

        <tr>
         <td>If <code class="parameter">idtype</code> is <code class="literal">P_PGID</code></td>
         <td>
          wait for any child with process group ID equal to <code class="parameter">id</code>.
         </td>
        </tr>

       </tbody>
      
     </table>

     <table class="doctable table">
      <caption><strong>Linux specific <code class="parameter">idtype</code> and <code class="parameter">id</code> arguments</strong></caption>
      
       <tbody class="tbody">
        <tr>
         <td>If <code class="parameter">idtype</code> is <code class="literal">P_PIDFD</code> (since Linux 5.4)</td>
         <td>
          wait for the child referred to by the PID file descriptor specified in
          <code class="parameter">id</code>.
          (See the Linux <code class="literal">pidfd_open(2)</code> man page for further
          information on PID file descriptors.)
         </td>
        </tr>

       </tbody>
      
     </table>

     <table class="doctable table">
      <caption><strong>NetBSD and FreeBSD specific <code class="parameter">idtype</code> and <code class="parameter">id</code> arguments</strong></caption>
      
       <tbody class="tbody">
        <tr>
         <td>
          If <code class="parameter">idtype</code> is <code class="literal">P_UID</code>
         </td>
         <td>
          wait for processes whose effective user ID is equal to
          <code class="parameter">id</code>.
         </td>
        </tr>

        <tr>
         <td>
          If <code class="parameter">idtype</code> is <code class="literal">P_GID</code>
         </td>
         <td>
          wait for processes whose effective group ID is equal to
          <code class="parameter">id</code>.
         </td>
        </tr>

        <tr>
         <td>
          If <code class="parameter">idtype</code> is <code class="literal">P_SID</code>
         </td>
         <td>
          wait for processes whose session ID is equal to
          <code class="parameter">id</code>.
          If the child process started its own session, its session ID will be
          the same as its process ID. Otherwise the session ID of a child
          process will match the caller&#039;s session ID.
         </td>
        </tr>

       </tbody>
      
     </table>

     <table class="doctable table">
      <caption><strong>FreeBSD specific <code class="parameter">idtype</code> and <code class="parameter">id</code> arguments</strong></caption>
      
       <tbody class="tbody">
        <tr>
         <td>
          If <code class="parameter">idtype</code> is <code class="literal">P_JAILID</code>
         </td>
         <td>
          wait for processes within a jail whose jail identifier is equal to
          <code class="parameter">id</code>.
         </td>
        </tr>

       </tbody>
      
     </table>

    </dd>
   
   
    <dt><code class="parameter">info</code></dt>
    <dd>
     <p class="para">
      The <code class="parameter">info</code> parameter is set to an array
      containing information about the signal.
     </p>
     <p class="para">
      <code class="parameter">info</code> array may contain the following keys:
      <ul class="simplelist">
       <li><code class="literal">signo</code>: Signal number</li>
       <li><code class="literal">errno</code>: System error number</li>
       <li><code class="literal">code</code>: Signal code</li>
       <li><code class="literal">status</code>: Exit value or signal</li>
       <li><code class="literal">pid</code>: Sending process ID</li>
       <li><code class="literal">uid</code>: Real user ID of sending process</li>
       <li><code class="literal">utime</code>: User time consumed</li>
       <li><code class="literal">stime</code>: System time consumed</li>
      </ul>
     </p>
    </dd>
   
   
    <dt><code class="parameter">flags</code></dt>
    <dd>
     <p class="para">
      The value of <code class="parameter">flags</code> is the value of zero or more of
      the following constants OR&#039;ed together:
      <table class="doctable table">
       <caption><strong>possible values for <code class="parameter">flags</code></strong></caption>
       
        <tbody class="tbody">
         <tr>
          <td><strong><code><a href="pcntl.constants.php#constant.wcontinued">WCONTINUED</a></code></strong></td>
          <td>
           Status shall be returned for any continued child process whose
           status either has not been reported since it continued from a job
           control stop or has been reported only by calls to
           <span class="function"><strong>pcntl_waitid()</strong></span> with the
           <strong><code><a href="pcntl.constants.php#constant.wnowait">WNOWAIT</a></code></strong> flag set.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="pcntl.constants.php#constant.wexited">WEXITED</a></code></strong></td>
          <td>
           Wait for processes that have exited.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="pcntl.constants.php#constant.wnohang">WNOHANG</a></code></strong></td>
          <td>
           Do not hang if no status is available; return immediately.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="pcntl.constants.php#constant.wnowait">WNOWAIT</a></code></strong></td>
          <td>
           Keep the process whose status is returned in
           <code class="parameter">info</code> in a waitable state. This shall not
           affect the state of the process; the process may be waited for again
           after this call completes.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="pcntl.constants.php#constant.wstopped">WSTOPPED</a></code></strong></td>
          <td>
           Status shall be returned for any child that has stopped upon receipt
           of a signal, and whose status either has not been reported since it
           stopped or has been reported only by calls to
           <span class="function"><strong>pcntl_waitid()</strong></span> with the
           <strong><code><a href="pcntl.constants.php#constant.wnowait">WNOWAIT</a></code></strong> flag set.
          </td>
         </tr>

        </tbody>
       
      </table>

     </p>
    </dd>
   
   
    <dt><code class="parameter">resource_usage</code></dt>
    <dd>
     <p class="para">
      The <code class="parameter">resource_usage</code> parameter is set to an array
      containing resource usage statistics from the child process.

      This is supported either if the wait6 system call is available
      (e.g. on FreeBSD), or on Linux through the raw waitid system call.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pcntl-waitid-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>pcntl_waitid()</strong></span> returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if
   <strong><code><a href="pcntl.constants.php#constant.wnohang">WNOHANG</a></code></strong> was specified and status is not available for
   any process specified by <code class="parameter">idtype</code> and
   <code class="parameter">id</code>.
  </p>

  <p class="para">
   <span class="function"><strong>pcntl_waitid()</strong></span> returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> due to the change of state
   of one of its children.
  </p>

  <p class="para">
   Otherwise, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned and <span class="function"><a href="function.pcntl-get-last-error.php" class="function">pcntl_get_last_error()</a></span>
   can be used to get the <code class="literal">errno</code> error number.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Once an <code class="literal">errno</code> error number has been obtained,
    <span class="function"><a href="function.pcntl-strerror.php" class="function">pcntl_strerror()</a></span> can be used to get the text message
    associated with it.
   </p>
  </p></blockquote>
 </div>


  <div class="refsect1 errors" id="refsect1-function.pcntl-waitid-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <table class="doctable table">
   <caption><strong>Error number (<code class="literal">errno</code>) values</strong></caption>
   
    <tbody class="tbody">
     <tr>
      <td><strong><code>ECHILD</code></strong></td>
      <td>
       The calling process has no existing unwaited-for child processes.
      </td>
     </tr>

     <tr>
      <td><strong><code>EINTR</code></strong></td>
      <td>
       <span class="function"><strong>pcntl_waitid()</strong></span> was interrupted by a signal.
      </td>
     </tr>

     <tr>
      <td><strong><code>EINVAL</code></strong></td>
      <td>
       An invalid value was specified for <code class="parameter">flags</code>, or
       <code class="parameter">idtype</code> and <code class="parameter">id</code> specify an
       invalid set of processes.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.pcntl-waitid-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pcntl-waitpid.php" class="function" rel="rdfs-seeAlso">pcntl_waitpid()</a> - Waits on or returns the status of a forked child</span></li>
    <li><span class="function"><a href="function.pcntl-wait.php" class="function" rel="rdfs-seeAlso">pcntl_wait()</a> - Waits on or returns the status of a forked child</span></li>
    <li><span class="function"><a href="function.pcntl-fork.php" class="function" rel="rdfs-seeAlso">pcntl_fork()</a> - Forks the currently running process</span></li>
    <li><span class="function"><a href="function.pcntl-signal.php" class="function" rel="rdfs-seeAlso">pcntl_signal()</a> - Installs a signal handler</span></li>
    <li><span class="function"><a href="function.pcntl-wifexited.php" class="function" rel="rdfs-seeAlso">pcntl_wifexited()</a> - Checks if status code represents a normal exit</span></li>
    <li><span class="function"><a href="function.pcntl-wifstopped.php" class="function" rel="rdfs-seeAlso">pcntl_wifstopped()</a> - Checks whether the child process is currently stopped</span></li>
    <li><span class="function"><a href="function.pcntl-wifsignaled.php" class="function" rel="rdfs-seeAlso">pcntl_wifsignaled()</a> - Checks whether the status code represents a termination due to a signal</span></li>
    <li><span class="function"><a href="function.pcntl-wexitstatus.php" class="function" rel="rdfs-seeAlso">pcntl_wexitstatus()</a> - Returns the return code of a terminated child</span></li>
    <li><span class="function"><a href="function.pcntl-wtermsig.php" class="function" rel="rdfs-seeAlso">pcntl_wtermsig()</a> - Returns the signal which caused the child to terminate</span></li>
    <li><span class="function"><a href="function.pcntl-wstopsig.php" class="function" rel="rdfs-seeAlso">pcntl_wstopsig()</a> - Returns the signal which caused the child to stop</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pcntl/functions/pcntl-waitid.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pcntl-waitid%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pcntl-waitid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pcntl-waitid.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.pcntl.php">PCNTL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.pcntl-alarm.php" title="pcntl_&#8203;alarm">pcntl_&#8203;alarm</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-async-signals.php" title="pcntl_&#8203;async_&#8203;signals">pcntl_&#8203;async_&#8203;signals</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-errno.php" title="pcntl_&#8203;errno">pcntl_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-exec.php" title="pcntl_&#8203;exec">pcntl_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-fork.php" title="pcntl_&#8203;fork">pcntl_&#8203;fork</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-get-last-error.php" title="pcntl_&#8203;get_&#8203;last_&#8203;error">pcntl_&#8203;get_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-getcpuaffinity.php" title="pcntl_&#8203;getcpuaffinity">pcntl_&#8203;getcpuaffinity</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-getpriority.php" title="pcntl_&#8203;getpriority">pcntl_&#8203;getpriority</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-rfork.php" title="pcntl_&#8203;rfork">pcntl_&#8203;rfork</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-setcpuaffinity.php" title="pcntl_&#8203;setcpuaffinity">pcntl_&#8203;setcpuaffinity</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-setpriority.php" title="pcntl_&#8203;setpriority">pcntl_&#8203;setpriority</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-signal.php" title="pcntl_&#8203;signal">pcntl_&#8203;signal</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-signal-dispatch.php" title="pcntl_&#8203;signal_&#8203;dispatch">pcntl_&#8203;signal_&#8203;dispatch</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-signal-get-handler.php" title="pcntl_&#8203;signal_&#8203;get_&#8203;handler">pcntl_&#8203;signal_&#8203;get_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-sigprocmask.php" title="pcntl_&#8203;sigprocmask">pcntl_&#8203;sigprocmask</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-sigtimedwait.php" title="pcntl_&#8203;sigtimedwait">pcntl_&#8203;sigtimedwait</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-sigwaitinfo.php" title="pcntl_&#8203;sigwaitinfo">pcntl_&#8203;sigwaitinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-strerror.php" title="pcntl_&#8203;strerror">pcntl_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-unshare.php" title="pcntl_&#8203;unshare">pcntl_&#8203;unshare</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wait.php" title="pcntl_&#8203;wait">pcntl_&#8203;wait</a>
                        </li>
                                                <li class="current">
                            <a href="function.pcntl-waitid.php" title="pcntl_&#8203;waitid">pcntl_&#8203;waitid</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-waitpid.php" title="pcntl_&#8203;waitpid">pcntl_&#8203;waitpid</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wexitstatus.php" title="pcntl_&#8203;wexitstatus">pcntl_&#8203;wexitstatus</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wifexited.php" title="pcntl_&#8203;wifexited">pcntl_&#8203;wifexited</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wifsignaled.php" title="pcntl_&#8203;wifsignaled">pcntl_&#8203;wifsignaled</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wifstopped.php" title="pcntl_&#8203;wifstopped">pcntl_&#8203;wifstopped</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wstopsig.php" title="pcntl_&#8203;wstopsig">pcntl_&#8203;wstopsig</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wtermsig.php" title="pcntl_&#8203;wtermsig">pcntl_&#8203;wtermsig</a>
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
