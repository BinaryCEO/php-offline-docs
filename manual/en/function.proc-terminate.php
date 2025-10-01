<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: proc_terminate - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.proc-terminate.php">
 <link rel="shorturl" href="https://www.php.net/proc-terminate">
 <link rel="alternate" href="https://www.php.net/proc-terminate" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.exec.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.proc-open.php">
 <link rel="next" href="https://www.php.net/manual/en/function.shell-exec.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.proc-terminate.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.proc-terminate.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.proc-terminate.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.proc-terminate.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.proc-terminate.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.proc-terminate.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.proc-terminate.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.proc-terminate.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.proc-terminate.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.proc-terminate.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.proc-terminate.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Kills a process opened by proc_open" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: proc_terminate - Manual" />
<meta name="twitter:description" content="Kills a process opened by proc_open" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: proc_terminate - Manual" />
<meta itemprop="description" content="Kills a process opened by proc_open" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Kills a process opened by proc_open" />

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
        <a href="function.shell-exec.php">
          shell_exec &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.proc-open.php">
          &laquo; proc_open        </a>
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
            <option value='en/function.proc-terminate.php' selected="selected">English</option>
            <option value='de/function.proc-terminate.php'>German</option>
            <option value='es/function.proc-terminate.php'>Spanish</option>
            <option value='fr/function.proc-terminate.php'>French</option>
            <option value='it/function.proc-terminate.php'>Italian</option>
            <option value='ja/function.proc-terminate.php'>Japanese</option>
            <option value='pt_BR/function.proc-terminate.php'>Brazilian Portuguese</option>
            <option value='ru/function.proc-terminate.php'>Russian</option>
            <option value='tr/function.proc-terminate.php'>Turkish</option>
            <option value='uk/function.proc-terminate.php'>Ukrainian</option>
            <option value='zh/function.proc-terminate.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.proc-terminate" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">proc_terminate</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">proc_terminate</span> &mdash; <span class="dc-title">Kills a process opened by proc_open</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.proc-terminate-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>proc_terminate</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$process</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$signal</code><span class="initializer"> = 15</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Signals a <code class="parameter">process</code> (created using
   <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span>) that it should terminate.
   <span class="function"><strong>proc_terminate()</strong></span> returns immediately and does not wait
   for the process to terminate.
  </p>
  <p class="para">
   <span class="function"><strong>proc_terminate()</strong></span> allows you terminate the process and
   continue with other tasks.  You may poll the process (to see if it has
   stopped yet) by using the <span class="function"><a href="function.proc-get-status.php" class="function">proc_get_status()</a></span> function.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.proc-terminate-parameters">
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
    
    
     <dt><code class="parameter">signal</code></dt>
     <dd>
      <p class="para">
       This optional parameter is only useful on <abbr title="Portable Operating System Interface">POSIX</abbr>
       operating systems; you may specify a signal to send to the process
       using the <code class="literal">kill(2)</code> system call.  The default is
       <code class="literal">SIGTERM</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.proc-terminate-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the termination status of the process that was run.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.proc-terminate-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.proc-open.php" class="function" rel="rdfs-seeAlso">proc_open()</a> - Execute a command and open file pointers for input/output</span></li>
    <li><span class="function"><a href="function.proc-close.php" class="function" rel="rdfs-seeAlso">proc_close()</a> - Close a process opened by proc_open and return the exit code of that process</span></li>
    <li><span class="function"><a href="function.proc-get-status.php" class="function" rel="rdfs-seeAlso">proc_get_status()</a> - Get information about a process opened by proc_open</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/exec/functions/proc-terminate.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.proc-terminate%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.proc-terminate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.proc-terminate.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113502">  <div class="votes">
    <div id="Vu113502">
    <a href="/manual/vote-note.php?id=113502&amp;page=function.proc-terminate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113502">
    <a href="/manual/vote-note.php?id=113502&amp;page=function.proc-terminate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113502" title="100% like this...">
    20
    </div>
  </div>
  <a href="#113502" class="name">
  <strong class="user"><em>csh dot spam at me dot com</em></strong></a><a class="genanchor" href="#113502"> &para;</a><div class="date" title="2013-10-20 09:55"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113502">
<div class="phpcode"><code><span class="html">/bin/sh -c CMD will fork sh and then exec CMD.<br />/bin/sh -c exec CMD will NOT fork and only executes CMD.<br /><br />Therefore, you can get rid of this hack by prefixing your command to "exec bla bla bla".</span></code></div>
  </div>
 </div>
  <div class="note" id="81353">  <div class="votes">
    <div id="Vu81353">
    <a href="/manual/vote-note.php?id=81353&amp;page=function.proc-terminate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81353">
    <a href="/manual/vote-note.php?id=81353&amp;page=function.proc-terminate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81353" title="85% like this...">
    24
    </div>
  </div>
  <a href="#81353" class="name">
  <strong class="user"><em>jerhee at ucsd dot edu</em></strong></a><a class="genanchor" href="#81353"> &para;</a><div class="date" title="2008-02-23 08:08"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81353">
<div class="phpcode"><code><span class="html">As explained in <a href="http://bugs.php.net/bug.php?id=39992," rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=39992,</a> proc_terminate() leaves children of the child process running. In my application, these children often have infinite loops, so I need a sure way to kill processes created with proc_open(). When I call proc_terminate(), the /bin/sh process is killed, but the child with the infinite loop is left running. <br /><br />Until proc_terminate() gets fixed, I would not recommend using it. Instead, my solution is to:<br />1) call proc_get_status() to get the parent pid (ppid) of the process I want to kill. <br />2) use ps to get all pids that have that ppid as their parent pid<br />3) use posix_kill() to send the SIGKILL (9) signal to each of those child pids<br />4) call proc_close() on process resource<br /><br /><span class="default">&lt;?php<br />$descriptorspec </span><span class="keyword">= array(<br /></span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">),  </span><span class="comment">// stdin is a pipe that the child will read from<br /></span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">),  </span><span class="comment">// stdout is a pipe that the child will write to<br /></span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">)   </span><span class="comment">// stderr is a pipe the child will write to<br /></span><span class="keyword">);<br /></span><span class="default">$process </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="string">'bad_program'</span><span class="keyword">, </span><span class="default">$descriptorspec</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">);<br />if(!</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">)) {<br />    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'bad_program could not be started.'</span><span class="keyword">);<br />}<br /></span><span class="comment">//pass some input to the program<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$lots_of_data</span><span class="keyword">);<br /></span><span class="comment">//close stdin. By closing stdin, the program should exit<br />//after it finishes processing the input<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br /><br /></span><span class="comment">//do some other stuff ... the process will probably still be running<br />//if we check on it right away<br /><br /></span><span class="default">$status </span><span class="keyword">= </span><span class="default">proc_get_status</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">);<br />if(</span><span class="default">$status</span><span class="keyword">[</span><span class="string">'running'</span><span class="keyword">] == </span><span class="default">true</span><span class="keyword">) { </span><span class="comment">//process ran too long, kill it<br />    //close all pipes that are still open<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]); </span><span class="comment">//stdout<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]); </span><span class="comment">//stderr<br />    //get the parent pid of the process we want to kill<br />    </span><span class="default">$ppid </span><span class="keyword">= </span><span class="default">$status</span><span class="keyword">[</span><span class="string">'pid'</span><span class="keyword">];<br />    </span><span class="comment">//use ps to get all the children of this process, and kill them<br />    </span><span class="default">$pids </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/\s+/'</span><span class="keyword">, `</span><span class="string">ps -o pid --no-heading --ppid </span><span class="default">$ppid</span><span class="keyword">`);<br />    foreach(</span><span class="default">$pids </span><span class="keyword">as </span><span class="default">$pid</span><span class="keyword">) {<br />        if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">)) {<br />            echo </span><span class="string">"Killing </span><span class="default">$pid</span><span class="string">\n"</span><span class="keyword">;<br />            </span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">); </span><span class="comment">//9 is the SIGKILL signal<br />        </span><span class="keyword">}<br />    }<br />        <br />    </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113918">  <div class="votes">
    <div id="Vu113918">
    <a href="/manual/vote-note.php?id=113918&amp;page=function.proc-terminate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113918">
    <a href="/manual/vote-note.php?id=113918&amp;page=function.proc-terminate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113918" title="87% like this...">
    6
    </div>
  </div>
  <a href="#113918" class="name">
  <strong class="user"><em>v dot denegin at yahoo dot com</em></strong></a><a class="genanchor" href="#113918"> &para;</a><div class="date" title="2013-12-17 03:47"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113918">
<div class="phpcode"><code><span class="html">on Windows platform proc_terminate() does not kill sub-processes that are not handling kill signals. It happens even if you call xxx.exe and call proc_terminate() the process will remain active.<br /><br />The solution is instead of calling proc_terminate() is to call the user-defined kill() function (already win/unix optimized)<br />After that need to close all pipes and execute proc_close().<br /><br />function kill($pid){ <br />    return stripos(php_uname('s'), 'win')&gt;-1  ? exec("taskkill /F /T /PID $pid") : exec("kill -9 $pid");<br />}<br /><br />function killall($pids) { <br />    $os=stripos(php_uname('s'), 'win')&gt;-1;<br />    ($_=implode($os?' /PID ':' ',$pids)) or ($_=$pids);<br />    return preg_match('/success|close/', $os ? exec("taskkill /F /T /PID $_") : exec("kill -9 $_"));<br />}<br /><br />Example:<br /><br />$pstatus = proc_get_status($resource);<br />$PID = $pstatus['pid'];<br /><br />// other commands<br /><br />kill($PID); // instead of proc_terminate($resource);<br />fclose($pipes[0]); <br />fclose($pipes[1]); <br />fclose($pipes[2]);<br />proc_close($resource);</span></code></div>
  </div>
 </div>
  <div class="note" id="125729">  <div class="votes">
    <div id="Vu125729">
    <a href="/manual/vote-note.php?id=125729&amp;page=function.proc-terminate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125729">
    <a href="/manual/vote-note.php?id=125729&amp;page=function.proc-terminate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125729" title="100% like this...">
    2
    </div>
  </div>
  <a href="#125729" class="name">
  <strong class="user"><em>smcbride at msn dot com</em></strong></a><a class="genanchor" href="#125729"> &para;</a><div class="date" title="2021-01-27 05:35"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125729">
<div class="phpcode"><code><span class="html">Just a small note so people don't have to look elsewhere<br /><br />To get the list of processes or find a process by name, use<br />$proclist = shell_exec('ps -elF') for linux<br />$proclist = shell_exec('tasklist') for windows<br /><br />After that, you can use php normal parsing functions to get the pid</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.proc-terminate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.proc-terminate.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
