<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pcntl_fork - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pcntl-fork.php">
 <link rel="shorturl" href="https://www.php.net/pcntl-fork">
 <link rel="alternate" href="https://www.php.net/pcntl-fork" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pcntl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pcntl-exec.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pcntl-get-last-error.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pcntl-fork.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pcntl-fork.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pcntl-fork.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pcntl-fork.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pcntl-fork.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pcntl-fork.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pcntl-fork.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pcntl-fork.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pcntl-fork.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pcntl-fork.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pcntl-fork.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Forks the currently running process" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pcntl_fork - Manual" />
<meta name="twitter:description" content="Forks the currently running process" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pcntl_fork - Manual" />
<meta itemprop="description" content="Forks the currently running process" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Forks the currently running process" />

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
        <a href="function.pcntl-get-last-error.php">
          pcntl_get_last_error &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pcntl-exec.php">
          &laquo; pcntl_exec        </a>
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
            <option value='en/function.pcntl-fork.php' selected="selected">English</option>
            <option value='de/function.pcntl-fork.php'>German</option>
            <option value='es/function.pcntl-fork.php'>Spanish</option>
            <option value='fr/function.pcntl-fork.php'>French</option>
            <option value='it/function.pcntl-fork.php'>Italian</option>
            <option value='ja/function.pcntl-fork.php'>Japanese</option>
            <option value='pt_BR/function.pcntl-fork.php'>Brazilian Portuguese</option>
            <option value='ru/function.pcntl-fork.php'>Russian</option>
            <option value='tr/function.pcntl-fork.php'>Turkish</option>
            <option value='uk/function.pcntl-fork.php'>Ukrainian</option>
            <option value='zh/function.pcntl-fork.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pcntl-fork" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pcntl_fork</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_fork</span> &mdash; <span class="dc-title">Forks the currently running process</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.pcntl-fork-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pcntl_fork</strong></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   The <span class="function"><strong>pcntl_fork()</strong></span> function creates a child
   process that differs from the parent process only in its PID and
   PPID. Please see your system&#039;s fork(2) man page for specific details as to
   how fork works on your system.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.pcntl-fork-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pcntl-fork-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   On success, the PID of the child process is returned in the
   parent&#039;s thread of execution, and a 0 is returned in the child&#039;s
   thread of execution.  On failure, a -1 will be returned in the
   parent&#039;s context, no child process will be created, and a PHP
   error is raised.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.pcntl-fork-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3561">
    <p><strong>Example #1 <span class="function"><strong>pcntl_fork()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$pid </span><span style="color: #007700">= </span><span style="color: #0000BB">pcntl_fork</span><span style="color: #007700">();<br />if (</span><span style="color: #0000BB">$pid </span><span style="color: #007700">== -</span><span style="color: #0000BB">1</span><span style="color: #007700">) {<br />     die(</span><span style="color: #DD0000">'could not fork'</span><span style="color: #007700">);<br />} else if (</span><span style="color: #0000BB">$pid</span><span style="color: #007700">) {<br />     </span><span style="color: #FF8000">// we are the parent<br />     </span><span style="color: #0000BB">pcntl_wait</span><span style="color: #007700">(</span><span style="color: #0000BB">$status</span><span style="color: #007700">); </span><span style="color: #FF8000">//Protect against Zombie children<br /></span><span style="color: #007700">} else {<br />     </span><span style="color: #FF8000">// we are the child<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.pcntl-fork-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pcntl-rfork.php" class="function" rel="rdfs-seeAlso">pcntl_rfork()</a> - Manipulates process resources</span></li>
    <li><span class="function"><a href="function.pcntl-waitpid.php" class="function" rel="rdfs-seeAlso">pcntl_waitpid()</a> - Waits on or returns the status of a forked child</span></li>
    <li><span class="function"><a href="function.pcntl-signal.php" class="function" rel="rdfs-seeAlso">pcntl_signal()</a> - Installs a signal handler</span></li>
    <li><span class="function"><a href="function.cli-set-process-title.php" class="function" rel="rdfs-seeAlso">cli_set_process_title()</a> - Sets the process title</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pcntl/functions/pcntl-fork.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pcntl-fork%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pcntl-fork&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pcntl-fork.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">25 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="70721">  <div class="votes">
    <div id="Vu70721">
    <a href="/manual/vote-note.php?id=70721&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70721">
    <a href="/manual/vote-note.php?id=70721&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70721" title="77% like this...">
    25
    </div>
  </div>
  <a href="#70721" class="name">
  <strong class="user"><em>amatsak at chestnutsoftware dot com</em></strong></a><a class="genanchor" href="#70721"> &para;</a><div class="date" title="2006-10-25 02:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70721">
<div class="phpcode"><code><span class="html">The reason for the MySQL "Lost Connection during query" issue when forking is the fact that the child process inherits the parent's database connection. When the child exits, the connection is closed. If the parent is performing a query at this very moment, it is doing it on an already closed connection, hence the error.
<br />
<br />An easy way to avoid this is to create a new database connection in parent immediately after forking. Don't forget to force a new connection by passing true in the 4th argument of mysql_connect():
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// Create the MySQL connection
<br /></span><span class="default">$db </span><span class="keyword">= </span><span class="default">mysql_connect</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">, </span><span class="default">$username</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">);
<br />
<br /></span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();
<br />             
<br />if ( </span><span class="default">$pid </span><span class="keyword">== -</span><span class="default">1 </span><span class="keyword">) {        
<br />    </span><span class="comment">// Fork failed            
<br />    </span><span class="keyword">exit(</span><span class="default">1</span><span class="keyword">);
<br />} else if ( </span><span class="default">$pid </span><span class="keyword">) {
<br />    </span><span class="comment">// We are the parent
<br />    // Can no longer use $db because it will be closed by the child
<br />    // Instead, make a new MySQL connection for ourselves to work with
<br />    </span><span class="default">$db </span><span class="keyword">= </span><span class="default">mysql_connect</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">, </span><span class="default">$username</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />} else {
<br />    </span><span class="comment">// We are the child
<br />    // Do something with the inherited connection here
<br />    // It will get closed upon exit
<br />    </span><span class="keyword">exit(</span><span class="default">0</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This way, the child will inherit the old connection, will work on it and will close upon exit. The parent won't care, because it will open a new connection for itself immediately after forking.
<br />
<br />Hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="100557">  <div class="votes">
    <div id="Vu100557">
    <a href="/manual/vote-note.php?id=100557&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100557">
    <a href="/manual/vote-note.php?id=100557&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100557" title="71% like this...">
    28
    </div>
  </div>
  <a href="#100557" class="name">
  <strong class="user"><em>sean dot kelly at mediatile dot com</em></strong></a><a class="genanchor" href="#100557"> &para;</a><div class="date" title="2010-10-22 05:36"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100557">
<div class="phpcode"><code><span class="html">"Fatal Error" has always been the bane of my world because there is no way to capture and handle the condition in PHP. My team builds almost everything in PHP in order to leverage our core library of code, so it was of the essence to find a solution for this problem of scripts bombing unrecoverably and us never knowing about it.<br /><br />One of our background automation systems creates a "task queue" of sorts and for each task in the queue, a PHP module is include()ed to handle the task. Sometimes however a poorly behaved module will nuke with a Fatal Error and take out the parent script with it.<br /><br />I decided to try to use pcntl_fork() to isolate the task module from the parent code, and it seems to work: a Fatal Error generated within the module makes the child task bomb, and the waiting parent can simply catch the return code from the child and track/alert us to the problem as needed. <br /><br />Naturally something similar could be done if I wanted to simply exec() the module and check the output, but then I would not have the benefit of the stateful environment that the parent script has so carefully prepared. This allows me to keep the child process within the context of the parent's running environment and not suffer the consequences of Fatal Errors stopping the task queue from continuing to process.<br /><br />Here is fork_n_wait.php for your amusement:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (! </span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'pcntl_fork'</span><span class="keyword">)) die(</span><span class="string">'PCNTL functions not available on this PHP installation'</span><span class="keyword">);<br /><br />for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">5</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) {<br />   switch (</span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">()) {<br />      case -</span><span class="default">1</span><span class="keyword">:<br />         </span><span class="comment">// @fail<br />         </span><span class="keyword">die(</span><span class="string">'Fork failed'</span><span class="keyword">);<br />         break;<br /><br />      case </span><span class="default">0</span><span class="keyword">:<br />         </span><span class="comment">// @child: Include() misbehaving code here<br />         </span><span class="keyword">print </span><span class="string">"FORK: Child #</span><span class="keyword">{</span><span class="default">$x</span><span class="keyword">}</span><span class="string"> preparing to nuke...\n"</span><span class="keyword">;<br />         </span><span class="default">generate_fatal_error</span><span class="keyword">(); </span><span class="comment">// Undefined function<br />         </span><span class="keyword">break;<br /><br />      default:<br />         </span><span class="comment">// @parent<br />         </span><span class="keyword">print </span><span class="string">"FORK: Parent, letting the child run amok...\n"</span><span class="keyword">;<br />         </span><span class="default">pcntl_waitpid</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">);<br />         break;<br />   }<br />}<br /><br />print </span><span class="string">"Done! :^)\n\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Which outputs:<br />php -q fork_n_wait.php<br />FORK: Child #1 preparing to nuke...<br />PHP Fatal error:  Call to undefined function generate_fatal_error() in ~fork_n_wait.php on line 16<br />FORK: Parent, letting the child run amok...<br />FORK: Child #2 preparing to nuke...<br />PHP Fatal error:  Call to undefined function generate_fatal_error() in ~/fork_n_wait.php on line 16<br />FORK: Parent, letting the child run amok...<br />FORK: Child #3 preparing to nuke...<br />PHP Fatal error:  Call to undefined function generate_fatal_error() in ~/fork_n_wait.php on line 16<br />FORK: Parent, letting the child run amok...<br />FORK: Child #4 preparing to nuke...<br />PHP Fatal error:  Call to undefined function generate_fatal_error() in ~/fork_n_wait.php on line 16<br />FORK: Parent, letting the child run amok...<br />Done! :^)</span></code></div>
  </div>
 </div>
  <div class="note" id="110790">  <div class="votes">
    <div id="Vu110790">
    <a href="/manual/vote-note.php?id=110790&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110790">
    <a href="/manual/vote-note.php?id=110790&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110790" title="67% like this...">
    28
    </div>
  </div>
  <a href="#110790" class="name">
  <strong class="user"><em>manishpatel2280 at gmail dot com</em></strong></a><a class="genanchor" href="#110790"> &para;</a><div class="date" title="2012-12-08 06:41"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110790">
<div class="phpcode"><code><span class="html">Its been easy to fork process with pcntl_fork.. but how can we control or process further once all child processes gets completed.. here is the way we can do that...
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">5</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {
<br />        </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();
<br />
<br />        if (!</span><span class="default">$pid</span><span class="keyword">) {
<br />            </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);
<br />            print </span><span class="string">"In child </span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">;
<br />            exit(</span><span class="default">$i</span><span class="keyword">);
<br />        }
<br />    }
<br />
<br />    while (</span><span class="default">pcntl_waitpid</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">) != -</span><span class="default">1</span><span class="keyword">) {
<br />        </span><span class="default">$status </span><span class="keyword">= </span><span class="default">pcntl_wexitstatus</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">);
<br />        echo </span><span class="string">"Child </span><span class="default">$status</span><span class="string"> completed\n"</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115855">  <div class="votes">
    <div id="Vu115855">
    <a href="/manual/vote-note.php?id=115855&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115855">
    <a href="/manual/vote-note.php?id=115855&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115855" title="70% like this...">
    21
    </div>
  </div>
  <a href="#115855" class="name">
  <strong class="user"><em>kenneth at fellowrock dot com</em></strong></a><a class="genanchor" href="#115855"> &para;</a><div class="date" title="2014-10-03 03:20"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115855">
<div class="phpcode"><code><span class="html">I just thought of contributing to this awesome community and hope this can be of use to someone. Although PHP provides threaded options, and multi curl handles that run in parallel, I managed to bash out a solution to run each function as it's own process for non-threaded versions of PHP.<br /><br />Usage:  #!/usr/bin/php<br />Usage: php -f /path/to/file<br /><br />#!/usr/bin/php<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fork_process</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">) <br />{<br />    </span><span class="default">$shared_memory_monitor </span><span class="keyword">= </span><span class="default">shmop_open</span><span class="keyword">(</span><span class="default">ftok</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">)), </span><span class="string">"c"</span><span class="keyword">, </span><span class="default">0644</span><span class="keyword">, </span><span class="default">count</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">[</span><span class="string">'process'</span><span class="keyword">]));<br />    </span><span class="default">$shared_memory_ids </span><span class="keyword">= (object) array();<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">[</span><span class="string">'process'</span><span class="keyword">]); </span><span class="default">$i</span><span class="keyword">++) <br />    {<br />        </span><span class="default">$shared_memory_ids</span><span class="keyword">-&gt;</span><span class="default">$i </span><span class="keyword">= </span><span class="default">shmop_open</span><span class="keyword">(</span><span class="default">ftok</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">)), </span><span class="string">"c"</span><span class="keyword">, </span><span class="default">0644</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">]);<br />    }<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">[</span><span class="string">'process'</span><span class="keyword">]); </span><span class="default">$i</span><span class="keyword">++) <br />    { <br />        </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">(); <br />        if (!</span><span class="default">$pid</span><span class="keyword">) <br />        { <br />            if(</span><span class="default">$i</span><span class="keyword">==</span><span class="default">1</span><span class="keyword">)<br />                </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">100000</span><span class="keyword">);<br />            </span><span class="default">$shared_memory_data </span><span class="keyword">= </span><span class="default">$options</span><span class="keyword">[</span><span class="string">'process'</span><span class="keyword">][</span><span class="default">$i </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">]();<br />            </span><span class="default">shmop_write</span><span class="keyword">(</span><span class="default">$shared_memory_ids</span><span class="keyword">-&gt;</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$shared_memory_data</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />            </span><span class="default">shmop_write</span><span class="keyword">(</span><span class="default">$shared_memory_monitor</span><span class="keyword">, </span><span class="string">"1"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">);<br />            exit(</span><span class="default">$i</span><span class="keyword">); <br />        } <br />    } <br />    while (</span><span class="default">pcntl_waitpid</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">) != -</span><span class="default">1</span><span class="keyword">) <br />    { <br />        if(</span><span class="default">shmop_read</span><span class="keyword">(</span><span class="default">$shared_memory_monitor</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">count</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">[</span><span class="string">'process'</span><span class="keyword">])) == </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"1"</span><span class="keyword">, </span><span class="default">count</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">[</span><span class="string">'process'</span><span class="keyword">])))<br />        {<br />            </span><span class="default">$result </span><span class="keyword">= array();<br />            foreach(</span><span class="default">$shared_memory_ids </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">)<br />            {<br />                </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">] = </span><span class="default">shmop_read</span><span class="keyword">(</span><span class="default">$shared_memory_ids</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">]);<br />                </span><span class="default">shmop_delete</span><span class="keyword">(</span><span class="default">$shared_memory_ids</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">);<br />            }<br />            </span><span class="default">shmop_delete</span><span class="keyword">(</span><span class="default">$shared_memory_monitor</span><span class="keyword">);<br />            </span><span class="default">$options</span><span class="keyword">[</span><span class="string">'callback'</span><span class="keyword">](</span><span class="default">$result</span><span class="keyword">);<br />        }    <br />    } <br />}<br /><br /></span><span class="comment">// Create shared memory block of size 1M for each function.<br /></span><span class="default">$options</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">] = </span><span class="default">pow</span><span class="keyword">(</span><span class="default">1024</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">); <br /><br /></span><span class="comment">// Define 2 functions to run as its own process.<br /></span><span class="default">$options</span><span class="keyword">[</span><span class="string">'process'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] = function()<br />{<br />    </span><span class="comment">// Whatever you need goes here...<br />    // If you need the results, return its value.<br />    // Eg: Long running proccess 1<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    return </span><span class="string">'Hello '</span><span class="keyword">;<br />};<br /></span><span class="default">$options</span><span class="keyword">[</span><span class="string">'process'</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] = function()<br />{<br />    </span><span class="comment">// Whatever you need goes here...<br />    // If you need the results, return its value.<br />    // Eg:<br />    // Eg: Long running proccess 2<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    return </span><span class="string">'World!'</span><span class="keyword">;<br />};<br /></span><span class="default">$options</span><span class="keyword">[</span><span class="string">'callback'</span><span class="keyword">] = function(</span><span class="default">$result</span><span class="keyword">)<br />{<br />    </span><span class="comment">// $results is an array of return values...<br />    // $result[0] for $options['process'][0] &amp;<br />    // $result[1] for $options['process'][1] &amp;<br />    // Eg:<br />    </span><span class="keyword">echo </span><span class="default">$result</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">].</span><span class="default">$result</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">;    <br />};<br /></span><span class="default">fork_process</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />If you'd like to get the results back from a webpage, use exec(). Eg: echo exec('php -f /path/to/file');<br /><br />Continue hacking! :)</span></code></div>
  </div>
 </div>
  <div class="note" id="106860">  <div class="votes">
    <div id="Vu106860">
    <a href="/manual/vote-note.php?id=106860&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106860">
    <a href="/manual/vote-note.php?id=106860&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106860" title="81% like this...">
    7
    </div>
  </div>
  <a href="#106860" class="name">
  <strong class="user"><em>kexianbin at diyism dot com</em></strong></a><a class="genanchor" href="#106860"> &para;</a><div class="date" title="2011-12-12 11:17"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106860">
<div class="phpcode"><code><span class="html">Fork in foreach:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">foreach (</span><span class="default">$tasks </span><span class="keyword">as </span><span class="default">$v</span><span class="keyword">)
<br />        {if ((</span><span class="default">$pid</span><span class="keyword">=</span><span class="default">pcntl_fork</span><span class="keyword">())===-</span><span class="default">1</span><span class="keyword">)
<br />            {</span><span class="comment">//...
<br />             </span><span class="keyword">continue;
<br />            }
<br />         else if (</span><span class="default">$pid</span><span class="keyword">)
<br />              {</span><span class="default">pcntl_wait</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">, </span><span class="default">WNOHANG</span><span class="keyword">); </span><span class="comment">//protect against zombie children, one wait vs one child
<br />              </span><span class="keyword">}
<br />         else if (</span><span class="default">$pid</span><span class="keyword">===</span><span class="default">0</span><span class="keyword">)
<br />              {</span><span class="default">ob_start</span><span class="keyword">();</span><span class="comment">//prevent output to main process
<br />               </span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$pars'</span><span class="keyword">, </span><span class="string">'ob_end_clean();posix_kill(getmypid(), SIGKILL);'</span><span class="keyword">), array());</span><span class="comment">//to kill self before exit();, or else the resource shared with parent will be closed
<br />               //...
<br />               </span><span class="keyword">exit();</span><span class="comment">//avoid foreach loop in child process
<br />              </span><span class="keyword">}
<br />        }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99369">  <div class="votes">
    <div id="Vu99369">
    <a href="/manual/vote-note.php?id=99369&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99369">
    <a href="/manual/vote-note.php?id=99369&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99369" title="70% like this...">
    7
    </div>
  </div>
  <a href="#99369" class="name">
  <strong class="user"><em>KrazyBox</em></strong></a><a class="genanchor" href="#99369"> &para;</a><div class="date" title="2010-08-12 07:33"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99369">
<div class="phpcode"><code><span class="html">There are quite a few questions regarding how file descriptors get handled when processes are forked. <br /><br />Remember that fork() makes a copy of the program, which means all descriptors are copied. Unfortunately, this is a rather bad situation for a PHP program because most descriptors are handled by PHP or a PHP Extension internally.<br /><br />The simple, and probably "proper" way to solve this issue is to fork before hand, there really should be no need to fork at many different points among a program, you would simply fork, and then delegate the work. Use a master/worker hierarchy.<br /><br />For example, if you need to have many processes that use a MySQL Connection, just fork before the connection is made, that way each child has it´s own connection to mysql that it, and it alone, manages.<br /><br />With careful and correct usage, fork() can be an extremely powerful tool.<br /><br />--Please remember to take proper care of your children.</span></code></div>
  </div>
 </div>
  <div class="note" id="118023">  <div class="votes">
    <div id="Vu118023">
    <a href="/manual/vote-note.php?id=118023&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118023">
    <a href="/manual/vote-note.php?id=118023&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118023" title="75% like this...">
    2
    </div>
  </div>
  <a href="#118023" class="name">
  <strong class="user"><em>laurent dot salomon at ymail dot com</em></strong></a><a class="genanchor" href="#118023"> &para;</a><div class="date" title="2015-09-19 11:46"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118023">
<div class="phpcode"><code><span class="html">The following exemple works with php5.6 and apcu. This was tested on debian 7 and Ubuntu 14.04.2 LTS.<br /><br />Here is a proposition of a simple Job class which execute a task list upon a item queue with shared memory capability :<br /><br />class Job<br />{<br />    const<br />        CACHE_PREFIX = 'SHM/',<br />        WORKER_NUMBER = 10;<br /><br />    private<br />        $_queues = [],<br />        $_tasks = [],<br />        $_pids = [],<br />        $_workerNumber,<br />        $_cacheHandler,<br />        $_prefix,<br />        $_id;<br /><br />    public function __construct(array $queue, $workerNumber = self::WORKER_NUMBER)<br />    {<br />        $count = count($queue);<br /><br />        $length = ceil($count / $workerNumber);<br /><br />        $this-&gt;_queues = array_chunk($queue, $length);<br /><br />        $this-&gt;setWorkerNumber($workerNumber);<br /><br />        $this-&gt;_prefix = self::CACHE_PREFIX . microtime(true) . '/';<br />    }<br /><br />    public function setWorkerNumber($workerNumber)<br />    {<br />        $this-&gt;_workerNumber = $workerNumber;<br />    }<br /><br />    public function __get($key)<br />    {<br />        return apc_fetch($this-&gt;_prefix . $key);<br />    }<br /><br />    public function __set($key, $value)<br />    {<br />        apc_store($this-&gt;_prefix . $key, $value);<br />    }<br /><br />    public function add(Closure $task)<br />    {<br />        $this-&gt;_tasks[] = $task-&gt;bindTo($this, $this);<br /><br />        return $this;<br />    }<br /><br />    public function run(Closure $task = null)<br />    {<br />        if (isset($task))<br />        {<br />            $this-&gt;add($task);<br />        }<br /><br />        $i = 0;<br /><br />        do<br />        {<br />            $queue = $this-&gt;_queues[$i++];<br /><br />            $pid = pcntl_fork();<br /><br />            $this-&gt;_id = $i;<br /><br />            if ($pid === -1)<br />            {<br />                die("can't fork !");<br />            }<br />            elseif ($pid !== 0) // main<br />            {<br />                $this-&gt;_pids[$pid] = $pid;<br />            }<br />            else // child<br />            {<br />                foreach($this-&gt;_tasks as $task)<br />                {<br />                    $task($queue);<br />                }<br /><br />                exit(0);<br />            }<br />        }<br />        while($i &lt; $this-&gt;_workerNumber);<br /><br />        do // main<br />        {<br />            $pid = pcntl_wait($status);<br /><br />            unset($this-&gt;_pids[$pid]);<br />        }<br />        while(count($this-&gt;_pids));<br />    }<br />}<br /><br />$driver = new mysqli(':host', ':user', ':pwd', ':db');<br /><br />$query = 'SELECT * FROM :table LIMIT :n';<br /><br />if (false !== ($res = $driver-&gt;query($query)))<br />{<br />    $resultSet = [];<br /><br />    while($row = mysqli_fetch_assoc($res))<br />    {<br />        $resultSet[] = $row;<br />    }<br /><br />    $job = new Job($resultSet);<br /><br />    $job-&gt;test = [];<br /><br />    $job-&gt;run(function($queue = [])<br />    {<br />        // task<br /><br />        foreach($queue as $value)<br />        {<br />            $test = $this-&gt;test;<br /><br />            $value['workedId'] = $this-&gt;_id;<br /><br />            // ...<br /><br />            $test[] = $value;<br /><br />            $this-&gt;test = $test;<br />        }<br />    });<br /><br />    print_r($job-&gt;test);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="94338">  <div class="votes">
    <div id="Vu94338">
    <a href="/manual/vote-note.php?id=94338&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94338">
    <a href="/manual/vote-note.php?id=94338&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94338" title="61% like this...">
    11
    </div>
  </div>
  <a href="#94338" class="name">
  <strong class="user"><em>Tony</em></strong></a><a class="genanchor" href="#94338"> &para;</a><div class="date" title="2009-10-29 03:05"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94338">
<div class="phpcode"><code><span class="html">If you want to execute some code after your php page has been returned to the user. Try something like this -
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">index</span><span class="keyword">()
<br />{
<br />        function </span><span class="default">shutdown</span><span class="keyword">() {
<br />            </span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">posix_getpid</span><span class="keyword">(), </span><span class="default">SIGHUP</span><span class="keyword">);
<br />        }
<br />
<br />        </span><span class="comment">// Do some initial processing
<br />
<br />        </span><span class="keyword">echo(</span><span class="string">"Hello World"</span><span class="keyword">);
<br />
<br />        </span><span class="comment">// Switch over to daemon mode.
<br />
<br />        </span><span class="keyword">if (</span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">())
<br />            return;     </span><span class="comment">// Parent
<br />
<br />        </span><span class="default">ob_end_clean</span><span class="keyword">(); </span><span class="comment">// Discard the output buffer and close
<br />
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">);  </span><span class="comment">// Close all of the standard
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">STDOUT</span><span class="keyword">); </span><span class="comment">// file descriptors as we
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">STDERR</span><span class="keyword">); </span><span class="comment">// are running as a daemon.
<br />
<br />        </span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="string">'shutdown'</span><span class="keyword">);
<br />
<br />        if (</span><span class="default">posix_setsid</span><span class="keyword">() &lt; </span><span class="default">0</span><span class="keyword">)
<br />            return;
<br />
<br />        if (</span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">())
<br />            return;     </span><span class="comment">// Parent
<br />
<br />        // Now running as a daemon. This process will even survive
<br />        // an apachectl stop.
<br />
<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">);
<br />
<br />        </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"/tmp/sdf123"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);
<br />        </span><span class="default">fprintf</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"PID = %s\n"</span><span class="keyword">, </span><span class="default">posix_getpid</span><span class="keyword">());
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />
<br />        return;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127790">  <div class="votes">
    <div id="Vu127790">
    <a href="/manual/vote-note.php?id=127790&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127790">
    <a href="/manual/vote-note.php?id=127790&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127790" title="66% like this...">
    1
    </div>
  </div>
  <a href="#127790" class="name">
  <strong class="user"><em>qu4qu426com123 at gmail dot com</em></strong></a><a class="genanchor" href="#127790"> &para;</a><div class="date" title="2022-10-21 06:40"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127790">
<div class="phpcode"><code><span class="html">Simple solution if you want to reading result from child process into the parent thread that based on socket.<br />Hope this can be of use to someone.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fork_process</span><span class="keyword">(...</span><span class="default">$callbacks</span><span class="keyword">)<br />{<br />    </span><span class="default">$callbackSocket </span><span class="keyword">= [];<br />    </span><span class="default">$callbacks </span><span class="keyword">= </span><span class="default">array_filter</span><span class="keyword">(</span><span class="default">$callbacks</span><span class="keyword">, function (</span><span class="default">$callback</span><span class="keyword">) {<br />        return </span><span class="default">$callback </span><span class="keyword">instanceof </span><span class="default">\Closure</span><span class="keyword">;<br />    });<br />    </span><span class="comment">/* On Windows need to use AF_INET */<br />    </span><span class="default">$domain </span><span class="keyword">= (</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)) == </span><span class="string">'WIN' </span><span class="keyword">? </span><span class="default">AF_INET </span><span class="keyword">: </span><span class="default">AF_UNIX</span><span class="keyword">);<br />    </span><span class="default">$pids </span><span class="keyword">= [];<br />    foreach (</span><span class="default">$callbacks </span><span class="keyword">as </span><span class="default">$index </span><span class="keyword">=&gt; </span><span class="default">$callback</span><span class="keyword">) {<br />        </span><span class="default">$setUpCallbackSocket </span><span class="keyword">= </span><span class="default">socket_create_pair</span><span class="keyword">(</span><span class="default">$domain</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$callbackSocket</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]);<br />        if (!</span><span class="default">$setUpCallbackSocket</span><span class="keyword">) {<br />            throw new </span><span class="default">\Exception</span><span class="keyword">(<br />                </span><span class="string">"socket_create_pair failed. Reason: " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">()),<br />                </span><span class="default">1<br />            </span><span class="keyword">);<br />        }<br />        </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br />        if (</span><span class="default">$pid </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />            try {<br />                </span><span class="default">$returnValue </span><span class="keyword">= </span><span class="default">$callback</span><span class="keyword">();<br />                </span><span class="comment">// Declare $sendingData end of line , prevent socket_read hangs<br />                </span><span class="default">$sendingData </span><span class="keyword">= </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$returnValue</span><span class="keyword">) . </span><span class="string">"\0\r\n"</span><span class="keyword">;<br />                </span><span class="default">$bufferLength </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$sendingData</span><span class="keyword">, </span><span class="string">'8bit'</span><span class="keyword">);<br />                </span><span class="comment">// If not declare $bufferLength, it is silently truncated to the length of SO_SNDBUF<br />                // @see <a href="https://www.php.net/manual/en/function.socket-write.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.socket-write.php</a><br />                // @see <a href="https://www.php.net/manual/en/function.socket-get-option.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.socket-get-option.php</a><br />                </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$callbackSocket</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">], </span><span class="default">$sendingData</span><span class="keyword">, </span><span class="default">$bufferLength</span><span class="keyword">);<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$callbackSocket</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]);<br />            } finally {<br />                </span><span class="comment">// Explicity kill process, or else the resource shared with parent will be closed<br />                </span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">getmypid</span><span class="keyword">(), </span><span class="default">SIGTERM</span><span class="keyword">);<br />                exit();<br />            }<br />        } else {<br />            </span><span class="default">$pids</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">] = </span><span class="default">$pid</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="default">$results </span><span class="keyword">= [];<br />    foreach (</span><span class="default">$pids </span><span class="keyword">as </span><span class="default">$index </span><span class="keyword">=&gt; </span><span class="default">$pid</span><span class="keyword">) {<br />        </span><span class="default">pcntl_waitpid</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">);<br />        </span><span class="default">$msg </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />        while (</span><span class="default">$resp </span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$callbackSocket</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">], </span><span class="default">102400</span><span class="keyword">)) {<br />            </span><span class="default">$msg </span><span class="keyword">.= </span><span class="default">$resp</span><span class="keyword">;<br />            </span><span class="comment">// prevent socket_read hangs<br />            </span><span class="keyword">if (</span><span class="default">$msg</span><span class="keyword">[-</span><span class="default">1</span><span class="keyword">] === </span><span class="string">"\n" </span><span class="keyword">&amp;&amp; </span><span class="default">$msg</span><span class="keyword">[-</span><span class="default">2</span><span class="keyword">] === </span><span class="string">"\r" </span><span class="keyword">&amp;&amp; </span><span class="default">$msg</span><span class="keyword">[-</span><span class="default">3</span><span class="keyword">] === </span><span class="string">"\0"</span><span class="keyword">) {<br />                break;<br />            }<br />        }<br />        </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$callbackSocket</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">]);<br />        </span><span class="default">$results</span><span class="keyword">[] = </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">));<br />    }<br />    return </span><span class="default">$results</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$resp </span><span class="keyword">= </span><span class="default">fork_process</span><span class="keyword">(<br />    function () {<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />        return </span><span class="string">'first'</span><span class="keyword">;<br />    },<br />    function () {<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br />        return </span><span class="string">'second'</span><span class="keyword">;<br />    },<br />);<br />echo (</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$time</span><span class="keyword">);<br /></span><span class="comment">// 2.0448851585388<br /></span><span class="keyword">echo </span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$resp</span><span class="keyword">);<br /></span><span class="comment">// first second<br /></span><span class="default">?&gt;<br /></span>Inspired by <a href="https://stackoverflow.com/questions/8707339/sharing-variables-between-child-processes-in-php" rel="nofollow" target="_blank">https://stackoverflow.com/questions/8707339/sharing-variables-between-child-processes-in-php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="98711">  <div class="votes">
    <div id="Vu98711">
    <a href="/manual/vote-note.php?id=98711&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98711">
    <a href="/manual/vote-note.php?id=98711&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98711" title="57% like this...">
    3
    </div>
  </div>
  <a href="#98711" class="name">
  <strong class="user"><em>duerra at yahoo dot com</em></strong></a><a class="genanchor" href="#98711"> &para;</a><div class="date" title="2010-07-01 07:06"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98711">
<div class="phpcode"><code><span class="html">Using pcntl_fork() can be a little tricky in some situations.  For fast jobs, a child can finish processing before the parent process has executed some code related to the launching of the process.  The parent can receive a signal before it's ready to handle the child process' status.  To handle this scenario, I add an id to a "queue" of processes in the signal handler that need to be cleaned up if the parent process is not yet ready to handle them.  
<br />
<br />I am including a stripped down version of a job daemon that should get a person on the right track. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">declare(</span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);
<br /></span><span class="comment">//A very basic job daemon that you can extend to your needs. 
<br /></span><span class="keyword">class </span><span class="default">JobDaemon</span><span class="keyword">{
<br />
<br />    public </span><span class="default">$maxProcesses </span><span class="keyword">= </span><span class="default">25</span><span class="keyword">;
<br />    protected </span><span class="default">$jobsStarted </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    protected </span><span class="default">$currentJobs </span><span class="keyword">= array();
<br />    protected </span><span class="default">$signalQueue</span><span class="keyword">=array();   
<br />    protected </span><span class="default">$parentPID</span><span class="keyword">;
<br />   
<br />    public function </span><span class="default">__construct</span><span class="keyword">(){
<br />        echo </span><span class="string">"constructed \n"</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parentPID </span><span class="keyword">= </span><span class="default">getmypid</span><span class="keyword">();
<br />        </span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGCHLD</span><span class="keyword">, array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"childSignalHandler"</span><span class="keyword">));
<br />    }
<br />   
<br />    </span><span class="comment">/**
<br />    * Run the Daemon
<br />    */
<br />    </span><span class="keyword">public function </span><span class="default">run</span><span class="keyword">(){
<br />        echo </span><span class="string">"Running \n"</span><span class="keyword">;
<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">10000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){
<br />            </span><span class="default">$jobID </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">10000000000000</span><span class="keyword">);
<br />
<br />            while(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentJobs</span><span class="keyword">) &gt;= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">maxProcesses</span><span class="keyword">){
<br />               echo </span><span class="string">"Maximum children allowed, waiting...\n"</span><span class="keyword">;
<br />               </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">); 
<br />            }
<br />
<br />            </span><span class="default">$launched </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">launchJob</span><span class="keyword">(</span><span class="default">$jobID</span><span class="keyword">);
<br />        }
<br />       
<br />        </span><span class="comment">//Wait for child processes to finish before exiting here
<br />        </span><span class="keyword">while(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentJobs</span><span class="keyword">)){
<br />            echo </span><span class="string">"Waiting for current jobs to finish... \n"</span><span class="keyword">;
<br />            </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);
<br />        }
<br />    }
<br />   
<br />    </span><span class="comment">/**
<br />    * Launch a job from the job queue
<br />    */
<br />    </span><span class="keyword">protected function </span><span class="default">launchJob</span><span class="keyword">(</span><span class="default">$jobID</span><span class="keyword">){
<br />        </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();
<br />        if(</span><span class="default">$pid </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">){
<br />            </span><span class="comment">//Problem launching the job
<br />            </span><span class="default">error_log</span><span class="keyword">(</span><span class="string">'Could not launch new job, exiting'</span><span class="keyword">);
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />        else if (</span><span class="default">$pid</span><span class="keyword">){
<br />            </span><span class="comment">// Parent process
<br />            // Sometimes you can receive a signal to the childSignalHandler function before this code executes if
<br />            // the child script executes quickly enough!
<br />            //
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentJobs</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">] = </span><span class="default">$jobID</span><span class="keyword">;
<br />           
<br />            </span><span class="comment">// In the event that a signal for this pid was caught before we get here, it will be in our signalQueue array
<br />            // So let's go ahead and process it now as if we'd just received the signal
<br />            </span><span class="keyword">if(isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">signalQueue</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">])){
<br />                echo </span><span class="string">"found </span><span class="default">$pid</span><span class="string"> in the signal queue, processing it now \n"</span><span class="keyword">;
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childSignalHandler</span><span class="keyword">(</span><span class="default">SIGCHLD</span><span class="keyword">, </span><span class="default">$pid</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">signalQueue</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">]);
<br />                unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">signalQueue</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">]);
<br />            }
<br />        }
<br />        else{
<br />            </span><span class="comment">//Forked child, do your deeds....
<br />            </span><span class="default">$exitStatus </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="comment">//Error code if you need to or whatever
<br />            </span><span class="keyword">echo </span><span class="string">"Doing something fun in pid "</span><span class="keyword">.</span><span class="default">getmypid</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;
<br />            exit(</span><span class="default">$exitStatus</span><span class="keyword">);
<br />        }
<br />        return </span><span class="default">true</span><span class="keyword">;
<br />    }
<br />   
<br />    public function </span><span class="default">childSignalHandler</span><span class="keyword">(</span><span class="default">$signo</span><span class="keyword">, </span><span class="default">$pid</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">){
<br />       
<br />        </span><span class="comment">//If no pid is provided, that means we're getting the signal from the system.  Let's figure out
<br />        //which child process ended
<br />        </span><span class="keyword">if(!</span><span class="default">$pid</span><span class="keyword">){
<br />            </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_waitpid</span><span class="keyword">(-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">, </span><span class="default">WNOHANG</span><span class="keyword">);
<br />        }
<br />       
<br />        </span><span class="comment">//Make sure we get all of the exited children
<br />        </span><span class="keyword">while(</span><span class="default">$pid </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">){
<br />            if(</span><span class="default">$pid </span><span class="keyword">&amp;&amp; isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentJobs</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">])){
<br />                </span><span class="default">$exitCode </span><span class="keyword">= </span><span class="default">pcntl_wexitstatus</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">);
<br />                if(</span><span class="default">$exitCode </span><span class="keyword">!= </span><span class="default">0</span><span class="keyword">){
<br />                    echo </span><span class="string">"</span><span class="default">$pid</span><span class="string"> exited with status "</span><span class="keyword">.</span><span class="default">$exitCode</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;
<br />                }
<br />                unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">currentJobs</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">]);
<br />            }
<br />            else if(</span><span class="default">$pid</span><span class="keyword">){
<br />                </span><span class="comment">//Oh no, our job has finished before this parent process could even note that it had been launched!
<br />                //Let's make note of it and handle it when the parent process is ready for it
<br />                </span><span class="keyword">echo </span><span class="string">"..... Adding </span><span class="default">$pid</span><span class="string"> to the signal queue ..... \n"</span><span class="keyword">;
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">signalQueue</span><span class="keyword">[</span><span class="default">$pid</span><span class="keyword">] = </span><span class="default">$status</span><span class="keyword">;
<br />            }
<br />            </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_waitpid</span><span class="keyword">(-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">, </span><span class="default">WNOHANG</span><span class="keyword">);
<br />        }
<br />        return </span><span class="default">true</span><span class="keyword">;
<br />    }
<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99350">  <div class="votes">
    <div id="Vu99350">
    <a href="/manual/vote-note.php?id=99350&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99350">
    <a href="/manual/vote-note.php?id=99350&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99350" title="56% like this...">
    2
    </div>
  </div>
  <a href="#99350" class="name">
  <strong class="user"><em>somebody</em></strong></a><a class="genanchor" href="#99350"> &para;</a><div class="date" title="2010-08-12 03:46"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99350">
<div class="phpcode"><code><span class="html">you should be _very_ careful with using fork in scripts beyond academic examples,
<br />or rather just avoid it alltogether, unless you are very aware of it's limitations.
<br />
<br />the problem is that it just forks the whole php process, including not only
<br />the state of the script, but also the internal state of any extensions loaded.
<br />this means that all memory is copied, but all file descriptors are shared among
<br />the parent and child processes.
<br />and that can cause major havoc if some extension internally maintains
<br />file descriptors.
<br />the primary example is ofcourse mysql, but this could be any extensions that
<br />maintains open files or network sockets.
<br />also, just reopening your connection in the parent or child isn't a safe
<br />method, because when the old connection resource is destroyed, the extension
<br />might not just close it, but for example send a request to the server to log
<br />off, making the connection unusable.
<br />this happens with mysql for example, when php exits - in the following script the query will always fail with "MySQL server has gone away":
<br />
<br /><span class="default">&lt;?php
<br />mysql_connect</span><span class="keyword">(</span><span class="comment">/* enter a working server here maybe? */</span><span class="keyword">);
<br />if(</span><span class="default">pcntl_fork</span><span class="keyword">()) die(); </span><span class="comment">// fork a child and have the parent terminate
<br />//if(pcntl_fork()) posix_kill(getmypid(),9); // works, but very ugly
<br /></span><span class="default">$r</span><span class="keyword">=</span><span class="default">mysql_query</span><span class="keyword">(</span><span class="string">"select 1;"</span><span class="keyword">);
<br />if(!</span><span class="default">$r</span><span class="keyword">)die(</span><span class="default">mysql_error</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>(it was suggested that processes kill themselves with SIGKILL to avoid any cleanup on shutdown)
<br />
<br />(the only save way would be to close all connections and reopen them after the fork, and even that might not be possible if an extension keeps one open internally)
<br />
<br />for a nice demonstration of the havoc fork can create, try the below script.
<br />it opens a mysql connection, then forks, and runs queries from both parent and child,
<br />verifying that it receives the correct result.
<br />run it (on the cli preferably) a few times, and you will find various possible
<br />results:
<br />- very often is just hangs and doesn't output anything anymore
<br />- also very often, the server closes the connection, probably because it
<br />  receives interleaved requests it can't process.
<br />- sometimes one process gets the result of the OTHER processes'
<br />  query! (because both send their queries down the same socket,
<br />  and it's pure luck who gets the reply)
<br />
<br /><span class="default">&lt;?php
<br />mysql_connect</span><span class="keyword">(</span><span class="comment">/* enter a working server here maybe? */</span><span class="keyword">);
<br /></span><span class="default">$f</span><span class="keyword">=</span><span class="default">pcntl_fork</span><span class="keyword">();
<br />while(</span><span class="default">true</span><span class="keyword">){
<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">)/</span><span class="default">100</span><span class="keyword">);
<br />    </span><span class="default">$r</span><span class="keyword">=</span><span class="default">mysql_query</span><span class="keyword">(</span><span class="string">"select </span><span class="default">$f</span><span class="string">;"</span><span class="keyword">);
<br />    if(!</span><span class="default">$r</span><span class="keyword">)die(</span><span class="default">$f</span><span class="keyword">.</span><span class="string">": "</span><span class="keyword">.</span><span class="default">mysql_error</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">);
<br />    list(</span><span class="default">$x</span><span class="keyword">)=</span><span class="default">mysql_fetch_array</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);
<br />    echo (</span><span class="default">$f</span><span class="keyword">)?</span><span class="string">"."</span><span class="keyword">:</span><span class="string">"-"</span><span class="keyword">;
<br />    if(</span><span class="default">$x</span><span class="keyword">!=</span><span class="default">$f</span><span class="keyword">) echo (</span><span class="default">$f</span><span class="keyword">.</span><span class="string">": fail: </span><span class="default">$x</span><span class="string">!=</span><span class="default">$f</span><span class="string">\n "</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49949">  <div class="votes">
    <div id="Vu49949">
    <a href="/manual/vote-note.php?id=49949&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49949">
    <a href="/manual/vote-note.php?id=49949&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49949" title="53% like this...">
    4
    </div>
  </div>
  <a href="#49949" class="name">
  <strong class="user"><em>arnold at helderhosting dot nl</em></strong></a><a class="genanchor" href="#49949"> &para;</a><div class="date" title="2005-02-13 07:12"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49949">
<div class="phpcode"><code><span class="html">It is not possible to use the function 'pcntl_fork' when PHP is used as Apache module. You can only use pcntl_fork in CGI mode or from command-line.<br /><br />Using this function will result in: 'Fatal error: Call to undefined function: pcntl_fork()'</span></code></div>
  </div>
 </div>
  <div class="note" id="122973">  <div class="votes">
    <div id="Vu122973">
    <a href="/manual/vote-note.php?id=122973&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122973">
    <a href="/manual/vote-note.php?id=122973&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122973" title="100% like this...">
    2
    </div>
  </div>
  <a href="#122973" class="name">
  <strong class="user"><em>simon dot riget at gmail dot com</em></strong></a><a class="genanchor" href="#122973"> &para;</a><div class="date" title="2018-07-23 08:43"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122973">
<div class="phpcode"><code><span class="html">Be aware that pcntl_fork may return NULL (not -1) if the function is disabled in php.ini.<br /><span class="default">&lt;?php<br />    $pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br />    if ( </span><span class="default">$pid </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$pid </span><span class="keyword">=== </span><span class="default">null </span><span class="keyword">)<br />        die (</span><span class="string">"Unable to fork process"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116674">  <div class="votes">
    <div id="Vu116674">
    <a href="/manual/vote-note.php?id=116674&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116674">
    <a href="/manual/vote-note.php?id=116674&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116674" title="50% like this...">
    0
    </div>
  </div>
  <a href="#116674" class="name">
  <strong class="user"><em>jrm456 at speed dot 1s dot fr</em></strong></a><a class="genanchor" href="#116674"> &para;</a><div class="date" title="2015-02-09 03:39"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116674">
<div class="phpcode"><code><span class="html">Workaround to pcntl_fork() not being usable when PHP is run as an Apache module<br /><br />function background_job($program, $args)<br />{<br />    # The following doesn't work when running PHP as an apache module<br />    /*<br />    $pid = pcntl_fork();<br />    pcntl_signal(SIGCHLD, SIG_IGN);<br /><br />    if ($pid == 0)<br />    {<br />        posix_setsid();<br />        pcntl_exec($program, $args, $_ENV);<br />        exit(0);<br />    }<br />    */<br /><br />    # Workaround<br />    $args = join(' ', array_map('escapeshellarg', $args));<br />    exec("$program $args 2&gt;/dev/null &gt;&amp;- /dev/null &amp;");<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="128227">  <div class="votes">
    <div id="Vu128227">
    <a href="/manual/vote-note.php?id=128227&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128227">
    <a href="/manual/vote-note.php?id=128227&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128227" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#128227" class="name">
  <strong class="user"><em>cyrus at hirvi dot com</em></strong></a><a class="genanchor" href="#128227"> &para;</a><div class="date" title="2023-02-18 02:46"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128227">
<div class="phpcode"><code><span class="html">Here is an APCu alternative (instead of shared memory) function of fork_process by `kenneth at fellowrock dot com` <a href="https://www.php.net/manual/en/function.pcntl-fork.php#115855" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.pcntl-fork.php#115855</a><br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// usage<br /></span><span class="default">$namespace </span><span class="keyword">= </span><span class="string">'some_namespace'</span><span class="keyword">;<br /></span><span class="default">$processes </span><span class="keyword">= [<br />    function () {<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />        return </span><span class="string">'Hello'</span><span class="keyword">;<br />    },<br />    function () {<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />        return </span><span class="string">' world!'</span><span class="keyword">;<br />    },<br />];<br /></span><span class="default">$callback </span><span class="keyword">= function (</span><span class="default">$result</span><span class="keyword">) {<br />    echo </span><span class="default">$result</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] . </span><span class="default">$result</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />};<br /></span><span class="default">threadize</span><span class="keyword">(</span><span class="default">$namespace</span><span class="keyword">, </span><span class="default">$processes</span><span class="keyword">, </span><span class="default">$callback</span><span class="keyword">);<br /><br />function </span><span class="default">threadize</span><span class="keyword">(</span><span class="default">string $namespace</span><span class="keyword">, </span><span class="default">$processes</span><span class="keyword">, callable </span><span class="default">$callback</span><span class="keyword">)<br />{<br />    </span><span class="default">apcu_store</span><span class="keyword">(</span><span class="default">$namespace </span><span class="keyword">. </span><span class="string">'_monitor'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">86400 </span><span class="keyword">* </span><span class="default">3</span><span class="keyword">);<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$processes</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br />        if (!</span><span class="default">$pid</span><span class="keyword">) {<br />            if (</span><span class="default">$i </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) {<br />                </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">100000</span><span class="keyword">);<br />            }<br />            </span><span class="default">apcu_store</span><span class="keyword">(</span><span class="default">$namespace </span><span class="keyword">. </span><span class="string">'_process_result_' </span><span class="keyword">. </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$processes</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">](), </span><span class="default">86400 </span><span class="keyword">* </span><span class="default">3</span><span class="keyword">);<br />            </span><span class="default">apcu_inc</span><span class="keyword">(</span><span class="default">$namespace </span><span class="keyword">. </span><span class="string">'_monitor'</span><span class="keyword">);<br />            exit(</span><span class="default">0</span><span class="keyword">);<br />        }<br />    }<br />    while (</span><span class="default">pcntl_waitpid</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">) != -</span><span class="default">1</span><span class="keyword">) {<br />        if (</span><span class="default">apcu_fetch</span><span class="keyword">(</span><span class="default">$namespace </span><span class="keyword">. </span><span class="string">'_monitor'</span><span class="keyword">) === </span><span class="default">count</span><span class="keyword">(</span><span class="default">$processes</span><span class="keyword">)) {<br />            </span><span class="default">$result </span><span class="keyword">= [];<br />            for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$processes</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />                </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">apcu_fetch</span><span class="keyword">(</span><span class="default">$namespace </span><span class="keyword">. </span><span class="string">'_process_result_' </span><span class="keyword">. </span><span class="default">$i</span><span class="keyword">);<br />                </span><span class="default">apcu_delete</span><span class="keyword">(</span><span class="default">$namespace </span><span class="keyword">. </span><span class="string">'_process_result_' </span><span class="keyword">. </span><span class="default">$i</span><span class="keyword">);<br />            }<br />            </span><span class="default">$callback</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br />            </span><span class="default">apcu_delete</span><span class="keyword">(</span><span class="default">$namespace </span><span class="keyword">. </span><span class="string">'_monitor'</span><span class="keyword">);<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114319">  <div class="votes">
    <div id="Vu114319">
    <a href="/manual/vote-note.php?id=114319&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114319">
    <a href="/manual/vote-note.php?id=114319&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114319" title="50% like this...">
    0
    </div>
  </div>
  <a href="#114319" class="name">
  <strong class="user"><em>John Nicholls</em></strong></a><a class="genanchor" href="#114319"> &para;</a><div class="date" title="2014-02-06 09:52"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114319">
<div class="phpcode"><code><span class="html">The notes on <a href="http://php.net/manual/en/function.posix-setsid.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.posix-setsid.php</a> describe how you can avoid accruing countless zombie processes by a simple call to posix_setsid() when a child starts.</span></code></div>
  </div>
 </div>
  <div class="note" id="126991">  <div class="votes">
    <div id="Vu126991">
    <a href="/manual/vote-note.php?id=126991&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126991">
    <a href="/manual/vote-note.php?id=126991&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126991" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#126991" class="name">
  <strong class="user"><em>williamdes at wdes dot fr</em></strong></a><a class="genanchor" href="#126991"> &para;</a><div class="date" title="2022-04-17 02:53"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126991">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">declare(</span><span class="default">strict_types </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="comment">/**<br />  * Helper method to execute a task<br />  */<br /></span><span class="keyword">function </span><span class="default">execute_task</span><span class="keyword">(</span><span class="default">int $task_id</span><span class="keyword">): </span><span class="default">void<br /></span><span class="keyword">{<br />    echo </span><span class="string">'Starting task: ' </span><span class="keyword">. </span><span class="default">$task_id </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />    </span><span class="comment">// Simulate doing actual work with sleep()<br />    </span><span class="default">$execution_time </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$execution_time</span><span class="keyword">);<br /><br />    echo </span><span class="string">"Completed task: </span><span class="keyword">${</span><span class="default">task_id</span><span class="keyword">}</span><span class="string">. Took </span><span class="keyword">${</span><span class="default">execution_time</span><span class="keyword">}</span><span class="string"> seconds.\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br />  * Builds a list of tasks<br />  */<br /></span><span class="keyword">function </span><span class="default">generator</span><span class="keyword">(): </span><span class="default">Generator<br /></span><span class="keyword">{<br />    </span><span class="default">$item_count </span><span class="keyword">= </span><span class="default">50</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$item_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        yield </span><span class="default">$i</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">/**<br />  * Starts the work<br />  */<br /></span><span class="keyword">function </span><span class="default">launch</span><span class="keyword">(): </span><span class="default">void<br /></span><span class="keyword">{<br />    </span><span class="default">$processCount </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$status       </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    echo </span><span class="string">'Running as pid: ' </span><span class="keyword">. </span><span class="default">getmypid</span><span class="keyword">() . </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />    </span><span class="default">$taskList </span><span class="keyword">= </span><span class="default">generator</span><span class="keyword">();<br />    do {<br />        echo </span><span class="string">'Still tasks to do' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />        if (</span><span class="default">$processCount </span><span class="keyword">&gt;= </span><span class="default">5</span><span class="keyword">) {<br />            echo </span><span class="string">'Waiting, currently running: ' </span><span class="keyword">. </span><span class="default">$processCount </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />            </span><span class="default">pcntl_wait</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">);<br />            </span><span class="default">$processCount</span><span class="keyword">--;<br />            continue;<br />        }<br /><br />        echo </span><span class="string">'Tasks running: ' </span><span class="keyword">. </span><span class="default">$processCount </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />        </span><span class="default">$task </span><span class="keyword">= </span><span class="default">$taskList</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">();<br />        </span><span class="default">$taskList</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />        </span><span class="default">$processCount</span><span class="keyword">++;<br /><br />        </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br /><br />        if (</span><span class="default">$pid </span><span class="keyword">=== -</span><span class="default">1</span><span class="keyword">) {<br />            exit(</span><span class="string">'Error forking...' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">);<br />        }<br /><br />        if (</span><span class="default">$pid </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$processList</span><span class="keyword">[] = </span><span class="default">getmypid</span><span class="keyword">();<br />            echo </span><span class="string">'Running task as pid: ' </span><span class="keyword">. </span><span class="default">getmypid</span><span class="keyword">() . </span><span class="default">PHP_EOL</span><span class="keyword">;<br />            </span><span class="default">execute_task</span><span class="keyword">(</span><span class="default">$task</span><span class="keyword">);<br />            exit();<br />        }<br />    } while (</span><span class="default">$taskList</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">());<br /><br />    </span><span class="default">$waitForChildrenToFinish </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    while (</span><span class="default">$waitForChildrenToFinish</span><span class="keyword">) {<br />        </span><span class="comment">// This while loop holds the parent process until all the child threads<br />        // are complete - at which point the script continues to execute.<br />        </span><span class="keyword">if (</span><span class="default">pcntl_waitpid</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">) === -</span><span class="default">1</span><span class="keyword">) {<br />            echo </span><span class="string">'parallel execution is complete' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />            </span><span class="default">$waitForChildrenToFinish </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br /><br />    </span><span class="comment">// Code to run after all tasks are processed<br /></span><span class="keyword">}<br /><br /></span><span class="default">launch</span><span class="keyword">();</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106600">  <div class="votes">
    <div id="Vu106600">
    <a href="/manual/vote-note.php?id=106600&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106600">
    <a href="/manual/vote-note.php?id=106600&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106600" title="50% like this...">
    0
    </div>
  </div>
  <a href="#106600" class="name">
  <strong class="user"><em>nmmm at nmmm dot nu</em></strong></a><a class="genanchor" href="#106600"> &para;</a><div class="date" title="2011-11-21 10:57"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106600">
<div class="phpcode"><code><span class="html">It was driving me crazy that the script was killed couple of hours after I logged out, even I started it as:<br /><br />php server.php &gt;&amp; logfile.txt<br /><br />looks like PHP somehow interact with standard input, even I do not used it.<br /><br />Solution was to start it with nohup:<br /><br />nohup php server.php &gt;&amp; logfile.txt<br /><br />or to do demonize / run as demon (e.g. fork() and close file descriptors)</span></code></div>
  </div>
 </div>
  <div class="note" id="98844">  <div class="votes">
    <div id="Vu98844">
    <a href="/manual/vote-note.php?id=98844&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98844">
    <a href="/manual/vote-note.php?id=98844&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98844" title="50% like this...">
    0
    </div>
  </div>
  <a href="#98844" class="name">
  <strong class="user"><em>iulian</em></strong></a><a class="genanchor" href="#98844"> &para;</a><div class="date" title="2010-07-10 11:58"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98844">
<div class="phpcode"><code><span class="html">When using fork to run multiple children processes on a single job queue using mysql, I used mysql_affected_rows() to prevent collisions between workers:
<br />
<br />First I find a "free" job:
<br />SELECT job_id FROM queue WHERE status="free"
<br />
<br />Then I update the queue:
<br />UPDATE queue SET worker_id={$worker_id} WHERE job_id={$job_id}
<br />
<br />Then I see if the row was changed
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if(</span><span class="default">mysql_affected_rows</span><span class="keyword">() == </span><span class="default">0</span><span class="keyword">)
<br />{
<br /></span><span class="comment">//the row hasn't changed, so it must mean that another worker has claimed the job, so I go back to the "find a free job" query
<br /></span><span class="keyword">}
<br />else
<br />{
<br /></span><span class="comment">//do the job
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93089">  <div class="votes">
    <div id="Vu93089">
    <a href="/manual/vote-note.php?id=93089&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93089">
    <a href="/manual/vote-note.php?id=93089&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93089" title="50% like this...">
    0
    </div>
  </div>
  <a href="#93089" class="name">
  <strong class="user"><em>drrota at us dot ibm dot com</em></strong></a><a class="genanchor" href="#93089"> &para;</a><div class="date" title="2009-08-22 03:47"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93089">
<div class="phpcode"><code><span class="html">I was able to get around the problem of not being able to run fork and exec from Apache php.<br /><br />I got around this by calling the system 'at' command on Linux.  "at run something now".  and you have to set atrun -s in a crontab file (to run every minute) to insure that things get kicked off quickly even if there is a heavy load on the machine.<br /><br />If you're the only one running batch jobs on a linux box, this works.</span></code></div>
  </div>
 </div>
  <div class="note" id="25492">  <div class="votes">
    <div id="Vu25492">
    <a href="/manual/vote-note.php?id=25492&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25492">
    <a href="/manual/vote-note.php?id=25492&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25492" title="50% like this...">
    0
    </div>
  </div>
  <a href="#25492" class="name">
  <strong class="user"><em>ben at gelbnet dot com</em></strong></a><a class="genanchor" href="#25492"> &para;</a><div class="date" title="2002-09-25 03:54"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25492">
<div class="phpcode"><code><span class="html">I was writing a shell script to get input from a user, however, I needed my script to time out after a certain number of seconds if the user didn't enter enough data. The code below descibes the method I used. It's a little hairy but it does work.
<br />
<br />-Ben
<br />
<br />#!/home/ben/php/bin/php -q
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//GLOBALS
<br /></span><span class="default">$RETURN_CHAR </span><span class="keyword">= </span><span class="string">"\n"</span><span class="keyword">;
<br /></span><span class="default">$TIMEOUT </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">; </span><span class="comment">//number of seconds to timeout on input
<br /></span><span class="default">$PID </span><span class="keyword">= </span><span class="default">getmypid</span><span class="keyword">();
<br /></span><span class="default">$CHILD_PID </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />
<br /></span><span class="comment">//Make sure program execution doesn't time out
<br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);
<br />
<br />function </span><span class="default">set_timeout</span><span class="keyword">() {
<br />global </span><span class="default">$PID</span><span class="keyword">;
<br />global </span><span class="default">$CHILD_PID</span><span class="keyword">;
<br />global </span><span class="default">$TIMEOUT</span><span class="keyword">;
<br />
<br /></span><span class="default">$CHILD_PID </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();
<br />if(</span><span class="default">$CHILD_PID </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {
<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$TIMEOUT</span><span class="keyword">);
<br /></span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">$PID</span><span class="keyword">, </span><span class="default">SIGTERM</span><span class="keyword">);
<br />exit;
<br />}
<br />}
<br />
<br />function </span><span class="default">clear_timeout</span><span class="keyword">() {
<br />global </span><span class="default">$CHILD_PID</span><span class="keyword">;
<br /></span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">$CHILD_PID</span><span class="keyword">, </span><span class="default">SIGTERM</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">// read_data()
<br />// gets a line of data from STDIN and returns it
<br /></span><span class="keyword">function </span><span class="default">read_data</span><span class="keyword">() {
<br />
<br /></span><span class="default">$in </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"php://stdin"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);
<br /></span><span class="default">set_timeout</span><span class="keyword">();
<br /></span><span class="default">$in_string </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">);
<br /></span><span class="default">clear_timeout</span><span class="keyword">();
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">);
<br />return </span><span class="default">$in_string</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">// write_data($outstring)
<br />// writes data to STDOUT
<br /></span><span class="keyword">function </span><span class="default">write_data</span><span class="keyword">(</span><span class="default">$outstring</span><span class="keyword">) {
<br /></span><span class="default">$out </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"php://stdout"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);
<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">, </span><span class="default">$outstring</span><span class="keyword">);
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">);
<br />}
<br />
<br />while(</span><span class="default">1</span><span class="keyword">) {
<br /></span><span class="default">write_data</span><span class="keyword">(</span><span class="string">"say something-&gt;"</span><span class="keyword">);
<br /></span><span class="default">$input </span><span class="keyword">= </span><span class="default">read_data</span><span class="keyword">();
<br /></span><span class="default">write_data</span><span class="keyword">(</span><span class="default">$RETURN_CHAR</span><span class="keyword">.</span><span class="default">$input</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79439">  <div class="votes">
    <div id="Vu79439">
    <a href="/manual/vote-note.php?id=79439&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79439">
    <a href="/manual/vote-note.php?id=79439&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79439" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#79439" class="name">
  <strong class="user"><em>kentmussell at mindspring dot com</em></strong></a><a class="genanchor" href="#79439"> &para;</a><div class="date" title="2007-11-27 10:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79439">
<div class="phpcode"><code><span class="html">Here is an interesting script I wrote.  It demonstrates how pcntl_fork() might be used as a useful tool.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* This script serves the purpose of testing an algorithm designed to:<br />a.) Compare password hashes, or try passwords efficiently where the time to try a single password is 10 seconds.  <br />b.) Spawn threads to work simultaneously on comparing hashes.<br />c.) Restrict the number of threads open at a time.  <br />*/<br />//checks for divisibility<br /></span><span class="keyword">function </span><span class="default">divby</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">,</span><span class="default">$den</span><span class="keyword">) {<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$num</span><span class="keyword">/</span><span class="default">$den</span><span class="keyword">;<br />    </span><span class="default">$result2 </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br />    if (</span><span class="default">$result </span><span class="keyword">== </span><span class="default">$result2</span><span class="keyword">) {<br />        return </span><span class="default">true</span><span class="keyword">;<br />        }<br />    else {<br />        return </span><span class="default">false</span><span class="keyword">; <br />        }<br />    }<br /></span><span class="comment">//checks whether a period of time fits into 2 second intervals occuring every 10 seconds.  Interval may increase or decrease in size to use more or less memory.  <br /></span><span class="keyword">function </span><span class="default">goodTime</span><span class="keyword">(</span><span class="default">$elapsed</span><span class="keyword">) {<br />    </span><span class="default">$num </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$elapsed</span><span class="keyword">);<br />    </span><span class="default">$num </span><span class="keyword">= </span><span class="default">$num</span><span class="keyword">/</span><span class="default">12</span><span class="keyword">;<br />    </span><span class="default">$min </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">);<br />    </span><span class="default">$min </span><span class="keyword">= </span><span class="default">12</span><span class="keyword">*</span><span class="default">$min</span><span class="keyword">;<br />    </span><span class="default">$max </span><span class="keyword">= </span><span class="default">$min</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">;<br />    if (</span><span class="default">$elapsed </span><span class="keyword">&gt;= </span><span class="default">$min </span><span class="keyword">&amp;&amp; </span><span class="default">$elapsed </span><span class="keyword">&lt;= </span><span class="default">$max</span><span class="keyword">) {<br />        return </span><span class="string">"yes"</span><span class="keyword">;<br />        }<br />    else {<br />        return </span><span class="string">"no"</span><span class="keyword">;<br />        }<br />    }<br /><br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">30</span><span class="keyword">; </span><span class="comment">//number of child threads<br /></span><span class="default">$pid </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="comment">//needed to create first thread<br /></span><span class="default">$xpass </span><span class="keyword">= </span><span class="default">md5</span><span class="keyword">(</span><span class="string">'29'</span><span class="keyword">);</span><span class="comment">//hash to crack<br /></span><span class="default">$time </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="comment">//parent spawns $x children.<br /></span><span class="keyword">while (</span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$x</span><span class="keyword">) {<br />    if (</span><span class="default">file_exists</span><span class="keyword">(</span><span class="string">'childcall.txt'</span><span class="keyword">)) {<br />        </span><span class="default">unlink</span><span class="keyword">(</span><span class="string">'childcall.txt'</span><span class="keyword">);<br />        exit;<br />        }<br />    </span><span class="default">$elapsed </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">()-</span><span class="default">$time</span><span class="keyword">;<br />    </span><span class="comment">//children are only spawned during intervals occuring every 10 seconds leaving enough time for the previous batch of children to finish their task.<br />    </span><span class="keyword">if (</span><span class="default">goodTime</span><span class="keyword">(</span><span class="default">$elapsed</span><span class="keyword">)==</span><span class="string">"yes"</span><span class="keyword">) {    <br />        </span><span class="comment">//Are we the parent?<br />        </span><span class="keyword">if (</span><span class="default">$pid </span><span class="keyword">!= </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="comment">//Give birth to a child.  <br />            </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br />            </span><span class="comment">//create a record of how many children have been birthed.<br />            </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$i</span><span class="keyword">;<br />            </span><span class="default">$time2 </span><span class="keyword">= </span><span class="default">$elapsed</span><span class="keyword">;<br />            }<br />        </span><span class="comment">//escort children out of the loop.<br />        </span><span class="keyword">if (</span><span class="default">$pid </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$x</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />            }<br />        </span><span class="default">$i</span><span class="keyword">++;<br />        }<br />    }<br /></span><span class="comment">//parent waits for children to finish playing. <br /></span><span class="keyword">if (</span><span class="default">$pid</span><span class="keyword">) {<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    while (!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="string">'childcall.txt'</span><span class="keyword">)) {<br />        </span><span class="comment">//wait<br />        </span><span class="keyword">}<br />    </span><span class="default">unlink</span><span class="keyword">(</span><span class="string">'childcall.txt'</span><span class="keyword">);<br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">()+</span><span class="default">2</span><span class="keyword">;<br />    while (</span><span class="default">time</span><span class="keyword">()&lt;</span><span class="default">$time</span><span class="keyword">) {<br />        </span><span class="comment">//wait<br />        </span><span class="keyword">}<br />    exit;<br />    }<br /></span><span class="comment">//children take turns finding the highest array value, and changing it to 0<br /></span><span class="default">rsort</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="default">max</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$time </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">()+</span><span class="default">10</span><span class="keyword">;<br /></span><span class="comment">//simulate delay<br /></span><span class="keyword">while (</span><span class="default">time</span><span class="keyword">() &lt; </span><span class="default">$time</span><span class="keyword">) {<br />    </span><span class="comment">//wait<br />    </span><span class="keyword">}<br /></span><span class="comment">//compare the high array value hash to the hash we are looking to crack.<br /></span><span class="keyword">if (</span><span class="default">md5</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) == </span><span class="default">$xpass</span><span class="keyword">) {<br />    echo </span><span class="string">"</span><span class="default">$value</span><span class="string"> \n"</span><span class="keyword">;<br />    }<br />if (</span><span class="default">$value </span><span class="keyword">== </span><span class="default">$x </span><span class="keyword">|| </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) == </span><span class="default">$xpass</span><span class="keyword">) {<br />    </span><span class="default">$file </span><span class="keyword">= </span><span class="string">"childcall.txt"</span><span class="keyword">;<br />    </span><span class="default">$content </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="default">$contents</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94708">  <div class="votes">
    <div id="Vu94708">
    <a href="/manual/vote-note.php?id=94708&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94708">
    <a href="/manual/vote-note.php?id=94708&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94708" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#94708" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#94708"> &para;</a><div class="date" title="2009-11-19 10:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94708">
<div class="phpcode"><code><span class="html">With regards to the database connection, one could deal with this using kill 9 or a sleep, the real problem is if two threads make a database query at the same time, PHP starts having random database errors that are not necessarily clear as to what the problem is.<br /><br />You should create a separate link per thread.</span></code></div>
  </div>
 </div>
  <div class="note" id="93466">  <div class="votes">
    <div id="Vu93466">
    <a href="/manual/vote-note.php?id=93466&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93466">
    <a href="/manual/vote-note.php?id=93466&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93466" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#93466" class="name">
  <strong class="user"><em>php at mx dot magic-lamp dot org</em></strong></a><a class="genanchor" href="#93466"> &para;</a><div class="date" title="2009-09-11 01:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93466">
<div class="phpcode"><code><span class="html">A workaround for the MySQL "Lost Connection during query", or any other object related problems caused by children exiting is to force the child to kill -9 itself, thus avoiding any cleanup.  Sure - it's not too elegant, but it does work.<br /><br /><span class="default">&lt;?php<br />$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br />if ( </span><span class="default">$pid </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">) {<br />    </span><span class="comment">// This is the child process.  Do something here.<br />    // Instead of calling exit(), we use posix_kill()<br />    </span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">getmypid</span><span class="keyword">(),</span><span class="default">9</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Watch out that you don't spawn too many processes though as this creates its own problems.</span></code></div>
  </div>
 </div>
  <div class="note" id="69198">  <div class="votes">
    <div id="Vu69198">
    <a href="/manual/vote-note.php?id=69198&amp;page=function.pcntl-fork&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69198">
    <a href="/manual/vote-note.php?id=69198&amp;page=function.pcntl-fork&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69198" title="35% like this...">
    -5
    </div>
  </div>
  <a href="#69198" class="name">
  <strong class="user"><em>xuecan at google dot com</em></strong></a><a class="genanchor" href="#69198"> &para;</a><div class="date" title="2006-08-26 09:59"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69198">
<div class="phpcode"><code><span class="html">I think this simple code can help understand how fork works:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">echo </span><span class="string">"posix_getpid()="</span><span class="keyword">.</span><span class="default">posix_getpid</span><span class="keyword">().</span><span class="string">", posix_getppid()="</span><span class="keyword">.</span><span class="default">posix_getppid</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;
<br />
<br /></span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();
<br />if (</span><span class="default">$pid </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">) die(</span><span class="string">"could not fork"</span><span class="keyword">);
<br />if (</span><span class="default">$pid</span><span class="keyword">) {
<br />    echo </span><span class="string">"pid="</span><span class="keyword">.</span><span class="default">$pid</span><span class="keyword">.</span><span class="string">", posix_getpid()="</span><span class="keyword">.</span><span class="default">posix_getpid</span><span class="keyword">().</span><span class="string">", posix_getppid()="</span><span class="keyword">.</span><span class="default">posix_getppid</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;
<br />} else {
<br />    echo </span><span class="string">"pid="</span><span class="keyword">.</span><span class="default">$pid</span><span class="keyword">.</span><span class="string">", posix_getpid()="</span><span class="keyword">.</span><span class="default">posix_getpid</span><span class="keyword">().</span><span class="string">", posix_getppid()="</span><span class="keyword">.</span><span class="default">posix_getppid</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pcntl-fork&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pcntl-fork.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
