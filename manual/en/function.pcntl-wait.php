<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pcntl_wait - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pcntl-wait.php">
 <link rel="shorturl" href="https://www.php.net/pcntl-wait">
 <link rel="alternate" href="https://www.php.net/pcntl-wait" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pcntl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pcntl-unshare.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pcntl-waitid.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pcntl-wait.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pcntl-wait.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pcntl-wait.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pcntl-wait.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pcntl-wait.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pcntl-wait.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pcntl-wait.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pcntl-wait.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pcntl-wait.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pcntl-wait.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pcntl-wait.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Waits on or returns the status of a forked child" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pcntl_wait - Manual" />
<meta name="twitter:description" content="Waits on or returns the status of a forked child" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pcntl_wait - Manual" />
<meta itemprop="description" content="Waits on or returns the status of a forked child" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Waits on or returns the status of a forked child" />

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
        <a href="function.pcntl-waitid.php">
          pcntl_waitid &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pcntl-unshare.php">
          &laquo; pcntl_unshare        </a>
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
            <option value='en/function.pcntl-wait.php' selected="selected">English</option>
            <option value='de/function.pcntl-wait.php'>German</option>
            <option value='es/function.pcntl-wait.php'>Spanish</option>
            <option value='fr/function.pcntl-wait.php'>French</option>
            <option value='it/function.pcntl-wait.php'>Italian</option>
            <option value='ja/function.pcntl-wait.php'>Japanese</option>
            <option value='pt_BR/function.pcntl-wait.php'>Brazilian Portuguese</option>
            <option value='ru/function.pcntl-wait.php'>Russian</option>
            <option value='tr/function.pcntl-wait.php'>Turkish</option>
            <option value='uk/function.pcntl-wait.php'>Ukrainian</option>
            <option value='zh/function.pcntl-wait.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pcntl-wait" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pcntl_wait</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wait</span> &mdash; <span class="dc-title">Waits on or returns the status of a forked child</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.pcntl-wait-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pcntl_wait</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$status</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$resource_usage</code><span class="initializer"> = []</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   The wait function suspends execution of the current process until a
   child has exited, or until a signal is delivered whose action is to
   terminate the current process or to call a signal handling function.  If a
   child has already exited by the time of the call (a so-called &quot;zombie&quot;
   process), the function returns immediately.  Any system resources used by
   the child are freed.  Please see your system&#039;s wait(2) man page for
   specific details as to how wait works on your system.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function is equivalent to calling <span class="function"><a href="function.pcntl-waitpid.php" class="function">pcntl_waitpid()</a></span>
    with a <code class="literal">-1</code> <code class="parameter">process_id</code> and no
    <code class="parameter">flags</code>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.pcntl-wait-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">status</code></dt>
     <dd>
      <p class="para">
       <span class="function"><strong>pcntl_wait()</strong></span> will store status information
       in the <code class="parameter">status</code> parameter which can be
       evaluated using the following functions:
       <span class="function"><a href="function.pcntl-wifexited.php" class="function">pcntl_wifexited()</a></span>,
       <span class="function"><a href="function.pcntl-wifstopped.php" class="function">pcntl_wifstopped()</a></span>,
       <span class="function"><a href="function.pcntl-wifsignaled.php" class="function">pcntl_wifsignaled()</a></span>,
       <span class="function"><a href="function.pcntl-wexitstatus.php" class="function">pcntl_wexitstatus()</a></span>,
       <span class="function"><a href="function.pcntl-wtermsig.php" class="function">pcntl_wtermsig()</a></span> and
       <span class="function"><a href="function.pcntl-wstopsig.php" class="function">pcntl_wstopsig()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       If wait3 is available on your system (mostly BSD-style systems), you can
       provide the optional <code class="parameter">flags</code> parameter.  If this
       parameter is not provided, wait will be used for the system call.  If
       wait3 is not available, providing a value for <code class="parameter">flags</code>
       will have no effect. The value of <code class="parameter">flags</code>
       is the value of zero or more of the following two constants
       <code class="literal">OR</code>&#039;ed together:
       <table class="doctable table">
        <caption><strong>Possible values for <code class="parameter">flags</code></strong></caption>
        
         <tbody class="tbody">
          <tr>
           <td><strong><code><a href="pcntl.constants.php#constant.wnohang">WNOHANG</a></code></strong></td>
           <td>
            Return immediately if no child has exited.
           </td>
          </tr>

          <tr>
           <td><strong><code><a href="pcntl.constants.php#constant.wuntraced">WUNTRACED</a></code></strong></td>
           <td>
            Return for children which are stopped, and whose status has
            not been reported.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wait-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>pcntl_wait()</strong></span> returns the process ID of the
   child which exited, -1 on error or zero if WNOHANG was provided as an
   option (on wait3-available systems) and no child was available.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.pcntl-wait-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pcntl-fork.php" class="function" rel="rdfs-seeAlso">pcntl_fork()</a> - Forks the currently running process</span></li>
    <li><span class="function"><a href="function.pcntl-signal.php" class="function" rel="rdfs-seeAlso">pcntl_signal()</a> - Installs a signal handler</span></li>
    <li><span class="function"><a href="function.pcntl-wifexited.php" class="function" rel="rdfs-seeAlso">pcntl_wifexited()</a> - Checks if status code represents a normal exit</span></li>
    <li><span class="function"><a href="function.pcntl-wifstopped.php" class="function" rel="rdfs-seeAlso">pcntl_wifstopped()</a> - Checks whether the child process is currently stopped</span></li>
    <li><span class="function"><a href="function.pcntl-wifsignaled.php" class="function" rel="rdfs-seeAlso">pcntl_wifsignaled()</a> - Checks whether the status code represents a termination due to a signal</span></li>
    <li><span class="function"><a href="function.pcntl-wexitstatus.php" class="function" rel="rdfs-seeAlso">pcntl_wexitstatus()</a> - Returns the return code of a terminated child</span></li>
    <li><span class="function"><a href="function.pcntl-wtermsig.php" class="function" rel="rdfs-seeAlso">pcntl_wtermsig()</a> - Returns the signal which caused the child to terminate</span></li>
    <li><span class="function"><a href="function.pcntl-wstopsig.php" class="function" rel="rdfs-seeAlso">pcntl_wstopsig()</a> - Returns the signal which caused the child to stop</span></li>
    <li><span class="function"><a href="function.pcntl-waitpid.php" class="function" rel="rdfs-seeAlso">pcntl_waitpid()</a> - Waits on or returns the status of a forked child</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pcntl/functions/pcntl-wait.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pcntl-wait%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pcntl-wait&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pcntl-wait.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="62099">  <div class="votes">
    <div id="Vu62099">
    <a href="/manual/vote-note.php?id=62099&amp;page=function.pcntl-wait&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62099">
    <a href="/manual/vote-note.php?id=62099&amp;page=function.pcntl-wait&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62099" title="66% like this...">
    6
    </div>
  </div>
  <a href="#62099" class="name">
  <strong class="user"><em>federico at nextware dot it</em></strong></a><a class="genanchor" href="#62099"> &para;</a><div class="date" title="2006-02-19 04:39"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62099">
<div class="phpcode"><code><span class="html">This a simple multi process application where you can choose 
<br />the maximun process that can run at the same time.
<br />This is useful when you need to limit the fork of process.
<br />When the MAXPROCESS is reached the program wait on pcntl_wait()
<br />
<br /><span class="default">&lt;?php
<br />
<br />DEFINE</span><span class="keyword">(</span><span class="default">MAXPROCESS</span><span class="keyword">,</span><span class="default">25</span><span class="keyword">);
<br />
<br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">100</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){
<br />    </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();
<br />    
<br />    if (</span><span class="default">$pid </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">) {
<br />       die(</span><span class="string">"could not fork"</span><span class="keyword">);
<br />    } elseif (</span><span class="default">$pid</span><span class="keyword">) {
<br />                echo </span><span class="string">"I'm the Parent </span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">;
<br />        </span><span class="default">$execute</span><span class="keyword">++;
<br />        if (</span><span class="default">$execute</span><span class="keyword">&gt;=</span><span class="default">MAXPROCESS</span><span class="keyword">){
<br />            </span><span class="default">pcntl_wait</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">);
<br />            </span><span class="default">$execute</span><span class="keyword">--;
<br />        }
<br />    } else {
<br />       echo </span><span class="string">"I am the child, </span><span class="default">$i</span><span class="string"> pid = </span><span class="default">$pid</span><span class="string"> \n"</span><span class="keyword">;
<br />       </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">));
<br />       echo </span><span class="string">"Bye Bye from </span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">;        
<br />       exit;
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98710">  <div class="votes">
    <div id="Vu98710">
    <a href="/manual/vote-note.php?id=98710&amp;page=function.pcntl-wait&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98710">
    <a href="/manual/vote-note.php?id=98710&amp;page=function.pcntl-wait&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98710" title="80% like this...">
    3
    </div>
  </div>
  <a href="#98710" class="name">
  <strong class="user"><em>duerra at yahoo dot com</em></strong></a><a class="genanchor" href="#98710"> &para;</a><div class="date" title="2010-07-01 06:45"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98710">
<div class="phpcode"><code><span class="html">Using pcntl_fork() can be a little tricky in some situations.  For fast jobs, a child can finish processing before the parent process has executed some code related to the launching of the process.  The parent can receive a signal before it's ready to handle the child process' status.  To handle this scenario, I add an id to a "queue" of processes in the signal handler that need to be cleaned up if the parent process is not yet ready to handle them.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /></span><span class="comment">//A very basic job daemon that you can extend to your needs.  <br /></span><span class="keyword">class </span><span class="default">JobDaemon</span><span class="keyword">{<br /><br />    public </span><span class="default">$maxProcesses </span><span class="keyword">= </span><span class="default">25</span><span class="keyword">;<br />    protected </span><span class="default">$jobsStarted </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; <br />    protected </span><span class="default">$currentJobs </span><span class="keyword">= array();<br />    protected </span><span class="default">$signalQueue</span><span class="keyword">=array();    <br />    protected </span><span class="default">$parentPID</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">(){<br />        echo </span><span class="string">"constructed \n"</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parentPID </span><span class="keyword">= </span><span class="default">getmypid</span><span class="keyword">();<br />        </span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGCHLD</span><span class="keyword">, array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"childSignalHandler"</span><span class="keyword">));<br />    }<br />    <br />    </span><span class="comment">/** <br />    * Run the Daemon<br />    */<br />    </span><span class="keyword">public function </span><span class="default">run</span><span class="keyword">(){<br />        echo </span><span class="string">"Running \n"</span><span class="keyword">;<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">10000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />            </span><span class="default">$jobID </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">10000000000000</span><span class="keyword">);<br />            </span><span class="default">$launched </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">launchJob</span><span class="keyword">(</span><span class="default">$jobID</span><span class="keyword">);<br />        }<br />        <br />        </span><span class="comment">//Wait for child processes to finish before exiting here<br />        </span><span class="keyword">while(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentJobs</span><span class="keyword">)){<br />            echo </span><span class="string">"Waiting for current jobs to finish... \n"</span><span class="keyword">;<br />            </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />        }<br />    }<br />    <br />    </span><span class="comment">/** <br />    * Launch a job from the job queue<br />    */<br />    </span><span class="keyword">protected function </span><span class="default">launchJob</span><span class="keyword">(</span><span class="default">$jobID</span><span class="keyword">){<br />        </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br />        if(</span><span class="default">$pid </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">){<br />            </span><span class="comment">//Problem launching the job<br />            </span><span class="default">error_log</span><span class="keyword">(</span><span class="string">'Could not launch new job, exiting'</span><span class="keyword">);<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        else if (</span><span class="default">$pid</span><span class="keyword">){<br />            </span><span class="comment">// Parent process<br />            // Sometimes you can receive a signal to the childSignalHandler function before this code executes if <br />            // the child script executes quickly enough!<br />            //<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentJobs</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">] = </span><span class="default">$jobID</span><span class="keyword">;<br />            <br />            </span><span class="comment">// In the event that a signal for this pid was caught before we get here, it will be in our signalQueue array<br />            // So let's go ahead and process it now as if we'd just received the signal<br />            </span><span class="keyword">if(isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">signalQueue</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">])){<br />                echo </span><span class="string">"found </span><span class="default">$pid</span><span class="string"> in the signal queue, processing it now \n"</span><span class="keyword">;<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childSignalHandler</span><span class="keyword">(</span><span class="default">SIGCHLD</span><span class="keyword">, </span><span class="default">$pid</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">signalQueue</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">]);<br />                unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">signalQueue</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">]);<br />            }<br />        }<br />        else{<br />            </span><span class="comment">//Forked child, do your deeds.... <br />            </span><span class="default">$exitStatus </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="comment">//Error code if you need to or whatever<br />            </span><span class="keyword">echo </span><span class="string">"Doing something fun in pid "</span><span class="keyword">.</span><span class="default">getmypid</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;<br />            exit(</span><span class="default">$exitStatus</span><span class="keyword">);<br />        }<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />    <br />    public function </span><span class="default">childSignalHandler</span><span class="keyword">(</span><span class="default">$signo</span><span class="keyword">, </span><span class="default">$pid</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">){<br />        <br />        </span><span class="comment">//If no pid is provided, that means we're getting the signal from the system.  Let's figure out<br />        //which child process ended<br />        </span><span class="keyword">if(!</span><span class="default">$pid</span><span class="keyword">){<br />            </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_waitpid</span><span class="keyword">(-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">, </span><span class="default">WNOHANG</span><span class="keyword">);<br />        }<br />        <br />        </span><span class="comment">//Make sure we get all of the exited children<br />        </span><span class="keyword">while(</span><span class="default">$pid </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">){<br />            if(</span><span class="default">$pid </span><span class="keyword">&amp;&amp; isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentJobs</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">])){<br />                </span><span class="default">$exitCode </span><span class="keyword">= </span><span class="default">pcntl_wexitstatus</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">);<br />                if(</span><span class="default">$exitCode </span><span class="keyword">!= </span><span class="default">0</span><span class="keyword">){<br />                    echo </span><span class="string">"</span><span class="default">$pid</span><span class="string"> exited with status "</span><span class="keyword">.</span><span class="default">$exitCode</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />                }<br />                unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentJobs</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">]);<br />            }<br />            else if(</span><span class="default">$pid</span><span class="keyword">){<br />                </span><span class="comment">//Oh no, our job has finished before this parent process could even note that it had been launched!<br />                //Let's make note of it and handle it when the parent process is ready for it<br />                </span><span class="keyword">echo </span><span class="string">"..... Adding </span><span class="default">$pid</span><span class="string"> to the signal queue ..... \n"</span><span class="keyword">;<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">signalQueue</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">] = </span><span class="default">$status</span><span class="keyword">;<br />            }<br />            </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_waitpid</span><span class="keyword">(-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">, </span><span class="default">WNOHANG</span><span class="keyword">);<br />        }<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98450">  <div class="votes">
    <div id="Vu98450">
    <a href="/manual/vote-note.php?id=98450&amp;page=function.pcntl-wait&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98450">
    <a href="/manual/vote-note.php?id=98450&amp;page=function.pcntl-wait&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98450" title="100% like this...">
    2
    </div>
  </div>
  <a href="#98450" class="name">
  <strong class="user"><em>gaylord at 100days dot de</em></strong></a><a class="genanchor" href="#98450"> &para;</a><div class="date" title="2010-06-16 05:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98450">
<div class="phpcode"><code><span class="html">pcntl_wait will not terminate on signals if you have a PHP signal handler activated (pcntl_signal).<br />This is unless the signal handler was activated with 3rd parameter=true.<br /><br />Example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGTERM</span><span class="keyword">, </span><span class="string">"myHandler"</span><span class="keyword">);<br /></span><span class="default">$pid</span><span class="keyword">=</span><span class="default">pcntl_wait</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will not terminate on SIGTERM sent to the process, because "wait" will be restarted after php recieves the signal. The signal handler "myHandler" will not be called unless pcntl_wait terminates for some other reason.<br /><br />Change to:<br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGTERM</span><span class="keyword">, </span><span class="string">"myHandler"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$pid</span><span class="keyword">=</span><span class="default">pcntl_wait</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Now the pcntl_wait terminates when a signal comes in and "myHandler" will be called on SIGTERM. (Make sure to put the wait in a loop though, because it will now not only terminate when a child exits but also when a signal arrives. Test for $pid&gt;0 to detect a exit message from a child)<br />(thanks to Andrey for helping me debugging this)</span></code></div>
  </div>
 </div>
  <div class="note" id="130408">  <div class="votes">
    <div id="Vu130408">
    <a href="/manual/vote-note.php?id=130408&amp;page=function.pcntl-wait&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130408">
    <a href="/manual/vote-note.php?id=130408&amp;page=function.pcntl-wait&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130408" title="no votes...">
    0
    </div>
  </div>
  <a href="#130408" class="name">
  <strong class="user"><em>rudenko at ukraine dot com dot ua</em></strong></a><a class="genanchor" href="#130408"> &para;</a><div class="date" title="2025-07-05 06:36"><strong>2 months ago</strong></div>
  <div class="text" id="Hcom130408">
<div class="phpcode"><code><span class="html">If pcntl_wait() hangs and doesn't detect that the child process has exited, you must check if your PHP has the gRPC PECL extension installed. gRPC brake pcntl_wait() checked on all PHP versions from 7.0 to 8.4. And gRPC 1.72.0.</span></code></div>
  </div>
 </div>
  <div class="note" id="98712">  <div class="votes">
    <div id="Vu98712">
    <a href="/manual/vote-note.php?id=98712&amp;page=function.pcntl-wait&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98712">
    <a href="/manual/vote-note.php?id=98712&amp;page=function.pcntl-wait&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98712" title="no votes...">
    0
    </div>
  </div>
  <a href="#98712" class="name">
  <strong class="user"><em>duerra at yahoo dot com</em></strong></a><a class="genanchor" href="#98712"> &para;</a><div class="date" title="2010-07-01 07:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98712">
<div class="phpcode"><code><span class="html">Oops, I stripped just a little much from the job daemon code in the previous comment.  You'll want to add a little line before the -&gt;launchJob() method is called:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">while(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentJobs</span><span class="keyword">) &gt;= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">maxProcesses</span><span class="keyword">){<br />    echo </span><span class="string">"Maximum children allowed, waiting...\n"</span><span class="keyword">;<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">); <br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98534">  <div class="votes">
    <div id="Vu98534">
    <a href="/manual/vote-note.php?id=98534&amp;page=function.pcntl-wait&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98534">
    <a href="/manual/vote-note.php?id=98534&amp;page=function.pcntl-wait&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98534" title="50% like this...">
    0
    </div>
  </div>
  <a href="#98534" class="name">
  <strong class="user"><em>digitalaudiorock at gmail dot com</em></strong></a><a class="genanchor" href="#98534"> &para;</a><div class="date" title="2010-06-21 02:44"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98534">
<div class="phpcode"><code><span class="html">I was unable to get pcntl_wait or pcntl_waitpid to terminate when I had an active signal handler.  I then noticed the post below from gaylord at 100days dot de, however I'm a little confused by that post as I found the exact opposite to be true.  The default value of the third parameter of pcntl_signal (the restart_syscalls parameter) is true and this seems to cause the wait to continue when the signal arrives.  In order to prevent this I had to expressly set it to false.  That is:<br /><br />pcntl_signal(SIGTERM, 'my_handler_function', false);</span></code></div>
  </div>
 </div>
  <div class="note" id="57932">  <div class="votes">
    <div id="Vu57932">
    <a href="/manual/vote-note.php?id=57932&amp;page=function.pcntl-wait&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57932">
    <a href="/manual/vote-note.php?id=57932&amp;page=function.pcntl-wait&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57932" title="no votes...">
    0
    </div>
  </div>
  <a href="#57932" class="name">
  <strong class="user"><em>thisisroot at gmail dot com</em></strong></a><a class="genanchor" href="#57932"> &para;</a><div class="date" title="2005-10-19 07:14"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57932">
<div class="phpcode"><code><span class="html">Below is a simple example of forking some children and timing the total duration (useful for stress tests).<br /><br /><span class="default">&lt;?php<br /><br />$isParent    </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /></span><span class="default">$children    </span><span class="keyword">= array();<br /></span><span class="default">$start        </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">( </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">/* Fork you!<br /> * (Sorry, I had to)<br /> */<br /></span><span class="default">$ceiling </span><span class="keyword">= </span><span class="default">$CONCURRENCY </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;<br /><br />for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; (( </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$ceiling</span><span class="keyword">) &amp;&amp; ( </span><span class="default">$isParent</span><span class="keyword">)); </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br />    if ( </span><span class="default">$pid </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$isParent </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        <br />    } elseif ( </span><span class="default">$pid </span><span class="keyword">!= -</span><span class="default">1</span><span class="keyword">) {<br />        </span><span class="default">$children</span><span class="keyword">[] = </span><span class="default">$pid</span><span class="keyword">;<br />        <br />    }<br /><br />}<br /><br /></span><span class="comment">/* Process body */<br /></span><span class="keyword">echo </span><span class="string">"Do stuff here\n"</span><span class="keyword">;<br /><br /></span><span class="comment">/* Cleanup */<br /></span><span class="keyword">if ( </span><span class="default">$isParent</span><span class="keyword">) {<br />    </span><span class="default">$status </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    while ( </span><span class="default">count</span><span class="keyword">( </span><span class="default">$children</span><span class="keyword">)) {<br />        </span><span class="default">pcntl_wait</span><span class="keyword">( </span><span class="default">$status</span><span class="keyword">);<br />        </span><span class="default">array_pop</span><span class="keyword">( </span><span class="default">$children</span><span class="keyword">);<br />    }<br />    <br />    echo </span><span class="string">"Completed in " </span><span class="keyword">. ( </span><span class="default">microtime</span><span class="keyword">( </span><span class="default">true</span><span class="keyword">) - </span><span class="default">$start</span><span class="keyword">) . </span><span class="string">" seconds.\n"</span><span class="keyword">;<br />    <br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="63594">  <div class="votes">
    <div id="Vu63594">
    <a href="/manual/vote-note.php?id=63594&amp;page=function.pcntl-wait&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63594">
    <a href="/manual/vote-note.php?id=63594&amp;page=function.pcntl-wait&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63594" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#63594" class="name">
  <strong class="user"><em>thomas dot nicolai at unisg dot ch</em></strong></a><a class="genanchor" href="#63594"> &para;</a><div class="date" title="2006-03-24 11:19"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63594">
<div class="phpcode"><code><span class="html">The code before isnt working for me cause the children are correctly started but not refreshed after they died. So keep in mind to use this instead and use the signal handler to know when a child exits to know when you have to start a new one. I added a few lines to the posting from {andy at cbeyond dot net} cause his post wasnt working for me as well (PHP5.1). Same effect like the one below.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">ticks </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="default">$max</span><span class="keyword">=</span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">$child</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br /><br /></span><span class="comment">// function for signal handler<br /></span><span class="keyword">function </span><span class="default">sig_handler</span><span class="keyword">(</span><span class="default">$signo</span><span class="keyword">) {<br />  global </span><span class="default">$child</span><span class="keyword">;<br />  switch (</span><span class="default">$signo</span><span class="keyword">) {<br />   case </span><span class="default">SIGCHLD</span><span class="keyword">:<br />     echo </span><span class="string">"SIGCHLD received\n"</span><span class="keyword">;<br />     </span><span class="default">$child</span><span class="keyword">--;<br />  }<br />}<br /><br /></span><span class="comment">// install signal handler for dead kids<br /></span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGCHLD</span><span class="keyword">, </span><span class="string">"sig_handler"</span><span class="keyword">);<br /><br />while (</span><span class="default">1</span><span class="keyword">){<br />       </span><span class="default">$child</span><span class="keyword">++;<br />       </span><span class="default">$pid</span><span class="keyword">=</span><span class="default">pcntl_fork</span><span class="keyword">();<br />       <br />       if (</span><span class="default">$pid </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">) {<br />               die(</span><span class="string">"could not fork"</span><span class="keyword">);<br />       } else if (</span><span class="default">$pid</span><span class="keyword">) {<br />               <br />               </span><span class="comment">// we are the parent<br />               </span><span class="keyword">if ( </span><span class="default">$child </span><span class="keyword">&gt;= </span><span class="default">$max </span><span class="keyword">){<br />                   </span><span class="default">pcntl_wait</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">);<br />                   </span><span class="default">$child</span><span class="keyword">++;<br />               }<br />       } else {<br />               </span><span class="comment">// we are the child<br />               </span><span class="keyword">echo </span><span class="string">"\t Starting new child | now we de have </span><span class="default">$child</span><span class="string"> child processes\n"</span><span class="keyword">;<br />               </span><span class="comment">// presumably doing something interesting<br />               </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">));<br />               exit;<br />       }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pcntl-wait&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pcntl-wait.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
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
                                                <li class="current">
                            <a href="function.pcntl-wait.php" title="pcntl_&#8203;wait">pcntl_&#8203;wait</a>
                        </li>
                                                <li class="">
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
