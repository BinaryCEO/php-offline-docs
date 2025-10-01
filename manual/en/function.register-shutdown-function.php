<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: register_shutdown_function - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.register-shutdown-function.php">
 <link rel="shorturl" href="https://www.php.net/register-shutdown-function">
 <link rel="alternate" href="https://www.php.net/register-shutdown-function" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.funchand.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.get-defined-functions.php">
 <link rel="next" href="https://www.php.net/manual/en/function.register-tick-function.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.register-shutdown-function.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.register-shutdown-function.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.register-shutdown-function.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.register-shutdown-function.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.register-shutdown-function.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.register-shutdown-function.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.register-shutdown-function.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.register-shutdown-function.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.register-shutdown-function.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.register-shutdown-function.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.register-shutdown-function.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Register a function for execution on shutdown" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: register_shutdown_function - Manual" />
<meta name="twitter:description" content="Register a function for execution on shutdown" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: register_shutdown_function - Manual" />
<meta itemprop="description" content="Register a function for execution on shutdown" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Register a function for execution on shutdown" />

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
        <a href="function.register-tick-function.php">
          register_tick_function &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.get-defined-functions.php">
          &laquo; get_defined_functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.funchand.php'>Function Handling</a></li>      <li><a href='ref.funchand.php'>Function handling Functions</a></li>      </ul>
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
            <option value='en/function.register-shutdown-function.php' selected="selected">English</option>
            <option value='de/function.register-shutdown-function.php'>German</option>
            <option value='es/function.register-shutdown-function.php'>Spanish</option>
            <option value='fr/function.register-shutdown-function.php'>French</option>
            <option value='it/function.register-shutdown-function.php'>Italian</option>
            <option value='ja/function.register-shutdown-function.php'>Japanese</option>
            <option value='pt_BR/function.register-shutdown-function.php'>Brazilian Portuguese</option>
            <option value='ru/function.register-shutdown-function.php'>Russian</option>
            <option value='tr/function.register-shutdown-function.php'>Turkish</option>
            <option value='uk/function.register-shutdown-function.php'>Ukrainian</option>
            <option value='zh/function.register-shutdown-function.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.register-shutdown-function" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">register_shutdown_function</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">register_shutdown_function</span> &mdash; <span class="dc-title">Register a function for execution on shutdown</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.register-shutdown-function-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>register_shutdown_function</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callback</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$args</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   Registers a <code class="parameter">callback</code> to be executed after script
   execution finishes or <span class="function"><a href="function.exit.php" class="function">exit()</a></span> is called.
  </p>
  <p class="para">
   Multiple calls to <span class="function"><strong>register_shutdown_function()</strong></span> can be
   made, and each will be called in the same order as they were registered.
   If you call <span class="function"><a href="function.exit.php" class="function">exit()</a></span> within one registered shutdown
   function, processing will stop completely and no other registered
   shutdown functions will be called.
  </p>
  <p class="para">
   Shutdown functions may also call <span class="function"><strong>register_shutdown_function()</strong></span>
   themselves to add a shutdown function to the end of the queue.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.register-shutdown-function-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">callback</code></dt>
     <dd>
      <p class="para">
       The shutdown callback to register.
      </p>
      <p class="para">
       The shutdown callbacks are executed as the part of the request, so
       it&#039;s possible to send output from them and access output buffers.
      </p>
     </dd>
    
    
     <dt><code class="parameter">args</code></dt>
     <dd>
      <p class="para">
       It is possible to pass parameters to the shutdown function by passing
       additional parameters.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.register-shutdown-function-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.register-shutdown-function-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5409">
    <p><strong>Example #1 <span class="function"><strong>register_shutdown_function()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">shutdown</span><span style="color: #007700">()<br />{<br />    </span><span style="color: #FF8000">// This is our shutdown function, in <br />    // here we can do any last operations<br />    // before the script is complete.<br /><br />    </span><span style="color: #007700">echo </span><span style="color: #DD0000">'Script executed with success'</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">register_shutdown_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'shutdown'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.register-shutdown-function-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The working directory of the script can change inside the shutdown function
    under some web servers, e.g. Apache.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Shutdown functions will not be executed if the process is killed with a SIGTERM
    or SIGKILL signal. While you cannot intercept a SIGKILL, you can use <span class="function"><a href="function.pcntl-signal.php" class="function">pcntl_signal()</a></span>
    to install a handler for a SIGTERM which uses <span class="function"><a href="function.exit.php" class="function">exit()</a></span> to
    end cleanly.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Shutdown functions run separately from the time tracked by
    <a href="info.configuration.php#ini.max-execution-time" class="link">max_execution_time</a>. That means
    even if a process is terminated for running too long, shutdown functions will still be
    called.  Additionally, if the <code class="literal">max_execution_time</code> runs out while
    a shutdown function is running it will not be terminated.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.register-shutdown-function-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="ini.core.php#ini.auto-append-file" class="link">auto_append_file</a></li>
    <li><span class="function"><a href="function.exit.php" class="function" rel="rdfs-seeAlso">exit()</a> - Terminate the current script with a status code or message</span></li>
    <li><span class="function"><a href="function.fastcgi-finish-request.php" class="function" rel="rdfs-seeAlso">fastcgi_finish_request()</a> - Flushes all response data to the client</span></li>
    <li>The section on <a href="features.connection-handling.php" class="link">connection handling</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/funchand/functions/register-shutdown-function.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.register-shutdown-function%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.register-shutdown-function&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.register-shutdown-function.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="33575">  <div class="votes">
    <div id="Vu33575">
    <a href="/manual/vote-note.php?id=33575&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33575">
    <a href="/manual/vote-note.php?id=33575&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33575" title="89% like this...">
    263
    </div>
  </div>
  <a href="#33575" class="name">
  <strong class="user"><em>jules at sitepointAASASZZ dot com</em></strong></a><a class="genanchor" href="#33575"> &para;</a><div class="date" title="2003-07-01 12:41"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33575">
<div class="phpcode"><code><span class="html">If your script exceeds the maximum execution time, and terminates thusly:<br /><br />Fatal error: Maximum execution time of 20 seconds exceeded in - on line 12<br /><br />The registered shutdown functions will still be executed.<br /><br />I figured it was important that this be made clear!</span></code></div>
  </div>
 </div>
  <div class="note" id="59300">  <div class="votes">
    <div id="Vu59300">
    <a href="/manual/vote-note.php?id=59300&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59300">
    <a href="/manual/vote-note.php?id=59300&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59300" title="90% like this...">
    82
    </div>
  </div>
  <a href="#59300" class="name">
  <strong class="user"><em>http://livejournal.com/~sinde1/</em></strong></a><a class="genanchor" href="#59300"> &para;</a><div class="date" title="2005-12-02 04:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59300">
<div class="phpcode"><code><span class="html">If you want to do something with files in function, that registered in register_shutdown_function(), use ABSOLUTE paths to files instead of relative. Because when script processing is complete current working directory chages to ServerRoot (see httpd.conf)</span></code></div>
  </div>
 </div>
  <div class="note" id="123696">  <div class="votes">
    <div id="Vu123696">
    <a href="/manual/vote-note.php?id=123696&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123696">
    <a href="/manual/vote-note.php?id=123696&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123696" title="75% like this...">
    4
    </div>
  </div>
  <a href="#123696" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#123696"> &para;</a><div class="date" title="2019-03-16 10:08"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123696">
<div class="phpcode"><code><span class="html">warning: in addition to SIGTERM and SIGKILL, the shutdown functions won't run in response to SIGINT either. (observed on php 7.1.16 on windows 7 SP1 x64 + cygwin  and php 7.2.15 on Ubuntu 18.04)</span></code></div>
  </div>
 </div>
  <div class="note" id="100000">  <div class="votes">
    <div id="Vu100000">
    <a href="/manual/vote-note.php?id=100000&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100000">
    <a href="/manual/vote-note.php?id=100000&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100000" title="71% like this...">
    21
    </div>
  </div>
  <a href="#100000" class="name">
  <strong class="user"><em>emanueledelgrande ad email dot it</em></strong></a><a class="genanchor" href="#100000"> &para;</a><div class="date" title="2010-09-19 07:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100000">
<div class="phpcode"><code><span class="html">A lot of useful services may be delegated to this useful trigger.<br />It is very effective because it is executed at the end of the script but before any object destruction, so all instantiations are still alive.<br /><br />Here's a simple shutdown events manager class which allows to manage either functions or static/dynamic methods, with an indefinite number of arguments without using any reflection, availing on a internal handling through func_get_args() and call_user_func_array() specific functions:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// managing the shutdown callback events:<br /></span><span class="keyword">class </span><span class="default">shutdownScheduler </span><span class="keyword">{<br />    private </span><span class="default">$callbacks</span><span class="keyword">; </span><span class="comment">// array to store user callbacks<br />    <br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callbacks </span><span class="keyword">= array();<br />        </span><span class="default">register_shutdown_function</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'callRegisteredShutdown'</span><span class="keyword">));<br />    }<br />    public function </span><span class="default">registerShutdownEvent</span><span class="keyword">() {<br />        </span><span class="default">$callback </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />        <br />        if (empty(</span><span class="default">$callback</span><span class="keyword">)) {<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'No callback passed to '</span><span class="keyword">.</span><span class="default">__FUNCTION__</span><span class="keyword">.</span><span class="string">' method'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        if (!</span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$callback</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])) {<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Invalid callback passed to the '</span><span class="keyword">.</span><span class="default">__FUNCTION__</span><span class="keyword">.</span><span class="string">' method'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callbacks</span><span class="keyword">[] = </span><span class="default">$callback</span><span class="keyword">;<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">callRegisteredShutdown</span><span class="keyword">() {<br />        foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callbacks </span><span class="keyword">as </span><span class="default">$arguments</span><span class="keyword">) {<br />            </span><span class="default">$callback </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$arguments</span><span class="keyword">);<br />            </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$callback</span><span class="keyword">, </span><span class="default">$arguments</span><span class="keyword">);<br />        }<br />    }<br />    </span><span class="comment">// test methods:<br />    </span><span class="keyword">public function </span><span class="default">dynamicTest</span><span class="keyword">() {<br />        echo </span><span class="string">'_REQUEST array is '</span><span class="keyword">.</span><span class="default">count</span><span class="keyword">(</span><span class="default">$_REQUEST</span><span class="keyword">).</span><span class="string">' elements long.&lt;br /&gt;'</span><span class="keyword">;<br />    }<br />    public static function </span><span class="default">staticTest</span><span class="keyword">() {<br />        echo </span><span class="string">'_SERVER array is '</span><span class="keyword">.</span><span class="default">count</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">).</span><span class="string">' elements long.&lt;br /&gt;'</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />A simple application:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// a generic function<br /></span><span class="keyword">function </span><span class="default">say</span><span class="keyword">(</span><span class="default">$a </span><span class="keyword">= </span><span class="string">'a generic greeting'</span><span class="keyword">, </span><span class="default">$b </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">) {<br />    echo </span><span class="string">"Saying </span><span class="keyword">{</span><span class="default">$a</span><span class="keyword">}</span><span class="string"> </span><span class="keyword">{</span><span class="default">$b</span><span class="keyword">}</span><span class="string">&lt;br /&gt;"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$scheduler </span><span class="keyword">= new </span><span class="default">shutdownScheduler</span><span class="keyword">();<br /><br /></span><span class="comment">// schedule a global scope function:<br /></span><span class="default">$scheduler</span><span class="keyword">-&gt;</span><span class="default">registerShutdownEvent</span><span class="keyword">(</span><span class="string">'say'</span><span class="keyword">, </span><span class="string">'hello!'</span><span class="keyword">);<br /><br /></span><span class="comment">// try to schedule a dyamic method:<br /></span><span class="default">$scheduler</span><span class="keyword">-&gt;</span><span class="default">registerShutdownEvent</span><span class="keyword">(array(</span><span class="default">$scheduler</span><span class="keyword">, </span><span class="string">'dynamicTest'</span><span class="keyword">));<br /></span><span class="comment">// try with a static call:<br /></span><span class="default">$scheduler</span><span class="keyword">-&gt;</span><span class="default">registerShutdownEvent</span><span class="keyword">(</span><span class="string">'scheduler::staticTest'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />It is easy to guess how to extend this example in a more complex context in which user defined functions and methods should be handled according to the priority depending on specific variables.<br /><br />Hope it may help somebody.<br />Happy coding!</span></code></div>
  </div>
 </div>
  <div class="note" id="92657">  <div class="votes">
    <div id="Vu92657">
    <a href="/manual/vote-note.php?id=92657&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92657">
    <a href="/manual/vote-note.php?id=92657&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92657" title="72% like this...">
    13
    </div>
  </div>
  <a href="#92657" class="name">
  <strong class="user"><em>pgl at yoyo dot org</em></strong></a><a class="genanchor" href="#92657"> &para;</a><div class="date" title="2009-08-02 02:25"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92657">
<div class="phpcode"><code><span class="html">You definitely need to be careful about using relative paths in after the shutdown function has been called, but the current working directory doesn't (necessarily) get changed to the web server's ServerRoot - I've tested on two different servers and they both have their CWD changed to '/' (which isn't the ServerRoot).
<br />
<br />This demonstrates the behaviour:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">echocwd</span><span class="keyword">() { echo </span><span class="string">'cwd: '</span><span class="keyword">, </span><span class="default">getcwd</span><span class="keyword">(), </span><span class="string">"\n"</span><span class="keyword">; }
<br />
<br /></span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="string">'echocwd'</span><span class="keyword">);
<br /></span><span class="default">echocwd</span><span class="keyword">() and exit;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Outputs:
<br />
<br />cwd: /path/to/my/site/docroot/test
<br />cwd: /
<br />
<br />NB: CLI scripts are unaffected, and keep their CWD as the directory the script was called from.</span></code></div>
  </div>
 </div>
  <div class="note" id="95256">  <div class="votes">
    <div id="Vu95256">
    <a href="/manual/vote-note.php?id=95256&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95256">
    <a href="/manual/vote-note.php?id=95256&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95256" title="69% like this...">
    25
    </div>
  </div>
  <a href="#95256" class="name">
  <strong class="user"><em>ravenswd at gmail dot com</em></strong></a><a class="genanchor" href="#95256"> &para;</a><div class="date" title="2009-12-21 01:43"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95256">
<div class="phpcode"><code><span class="html">You may get the idea to call debug_backtrace or debug_print_backtrace from inside a shutdown function, to trace where a fatal error occurred. Unfortunately, these functions will not work inside a shutdown function.</span></code></div>
  </div>
 </div>
  <div class="note" id="85727">  <div class="votes">
    <div id="Vu85727">
    <a href="/manual/vote-note.php?id=85727&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85727">
    <a href="/manual/vote-note.php?id=85727&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85727" title="68% like this...">
    7
    </div>
  </div>
  <a href="#85727" class="name">
  <strong class="user"><em>RLK</em></strong></a><a class="genanchor" href="#85727"> &para;</a><div class="date" title="2008-09-14 02:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85727">
<div class="phpcode"><code><span class="html">Contrary to the the note that "headers are always sent" and some of the comments below - You CAN use header() inside of a shutdown function as you would anywhere else; when headers_sent() is false. You can do custom fatal handling this way:<br /><br /><span class="default">&lt;?php<br />ini_set</span><span class="keyword">(</span><span class="string">'display_errors'</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="string">'shutdown'</span><span class="keyword">);<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">method</span><span class="keyword">();<br /><br />function </span><span class="default">shutdown</span><span class="keyword">()<br />{<br />  if(!</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$e </span><span class="keyword">= </span><span class="default">error_get_last</span><span class="keyword">()))<br />  {<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'content-type: text/plain'</span><span class="keyword">);<br />    print </span><span class="string">"this is not html:\n\n"</span><span class="keyword">. </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">);<br />  }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="63104">  <div class="votes">
    <div id="Vu63104">
    <a href="/manual/vote-note.php?id=63104&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63104">
    <a href="/manual/vote-note.php?id=63104&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63104" title="64% like this...">
    5
    </div>
  </div>
  <a href="#63104" class="name">
  <strong class="user"><em>dweingart at pobox dot com</em></strong></a><a class="genanchor" href="#63104"> &para;</a><div class="date" title="2006-03-13 08:53"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63104">
<div class="phpcode"><code><span class="html">I have discovered a change in behavior from PHP 5.0.4 to PHP 5.1.2 when using a shutdown function in conjunction with an output buffering callback.<br /><br />In PHP 5.0.4 (and earlier versions I believe) the shutdown function is called after the output buffering callback.<br /><br />In PHP 5.1.2 (not sure when the change occurred) the shutdown function is called before the output buffering callback.<br /><br />Test code:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ob_callback</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">) {<br />    </span><span class="default">$buf </span><span class="keyword">.= </span><span class="string">'&lt;li&gt;' </span><span class="keyword">. </span><span class="default">__FUNCTION__ </span><span class="keyword">.</span><span class="string">'&lt;/li&gt;'</span><span class="keyword">;<br />    return </span><span class="default">$buf</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">shutdown_func</span><span class="keyword">() {<br />    echo </span><span class="string">'&lt;li&gt;' </span><span class="keyword">. </span><span class="default">__FUNCTION__ </span><span class="keyword">.</span><span class="string">'&lt;/li&gt;'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">ob_start</span><span class="keyword">(</span><span class="string">'ob_callback'</span><span class="keyword">);<br /></span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="string">'shutdown_func'</span><span class="keyword">);<br />echo </span><span class="string">'&lt;ol&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />PHP 5.0.4:<br /><br />1. ob_callback<br />2. shutdown_func<br /><br />PHP 5.1.2:<br /><br />1. shutdown_func<br />2. ob_callback</span></code></div>
  </div>
 </div>
  <div class="note" id="97447">  <div class="votes">
    <div id="Vu97447">
    <a href="/manual/vote-note.php?id=97447&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97447">
    <a href="/manual/vote-note.php?id=97447&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97447" title="63% like this...">
    3
    </div>
  </div>
  <a href="#97447" class="name">
  <strong class="user"><em>jawsper at aximax dot nl</em></strong></a><a class="genanchor" href="#97447"> &para;</a><div class="date" title="2010-04-20 05:21"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97447">
<div class="phpcode"><code><span class="html">Something found out during testing:<br /><br />the ini auto_append_file will be included BEFORE the registered function(s) will be called.</span></code></div>
  </div>
 </div>
  <div class="note" id="108212">  <div class="votes">
    <div id="Vu108212">
    <a href="/manual/vote-note.php?id=108212&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108212">
    <a href="/manual/vote-note.php?id=108212&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108212" title="62% like this...">
    9
    </div>
  </div>
  <a href="#108212" class="name">
  <strong class="user"><em>alexyam at live dot com</em></strong></a><a class="genanchor" href="#108212"> &para;</a><div class="date" title="2012-04-08 03:50"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108212">
<div class="phpcode"><code><span class="html">When using php-fpm, fastcgi_finish_request() should be used instead of register_shutdown_function() and exit()<br /><br />For example, under nginx and php-fpm 5.3+, this will make browsers wait 10 seconds to show output:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">echo </span><span class="string">"You have to wait 10 seconds to see this.&lt;br&gt;"</span><span class="keyword">;<br />    </span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="string">'shutdown'</span><span class="keyword">);<br />    exit;<br />    function </span><span class="default">shutdown</span><span class="keyword">(){<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">);<br />        echo </span><span class="string">"Because exit() doesn't terminate php-fpm calls immediately.&lt;br&gt;"</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />This doesn't:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">echo </span><span class="string">"You can see this from the browser immediately.&lt;br&gt;"</span><span class="keyword">;<br />    </span><span class="default">fastcgi_finish_request</span><span class="keyword">();<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">);<br />    echo </span><span class="string">"You can't see this form the browser."</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61185">  <div class="votes">
    <div id="Vu61185">
    <a href="/manual/vote-note.php?id=61185&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61185">
    <a href="/manual/vote-note.php?id=61185&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61185" title="57% like this...">
    1
    </div>
  </div>
  <a href="#61185" class="name">
  <strong class="user"><em>kenneth dot kalmer at gmail dot com</em></strong></a><a class="genanchor" href="#61185"> &para;</a><div class="date" title="2006-01-27 09:26"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61185">
<div class="phpcode"><code><span class="html">I performed two tests on the register_shutdown_function() to see under what conditions it was called, and if a can call a static method from a class. Here are the results:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Tests the shutdown function being able to call a static methods<br /> */<br /></span><span class="keyword">class </span><span class="default">Shutdown<br /></span><span class="keyword">{<br />    public static function </span><span class="default">Method </span><span class="keyword">(</span><span class="default">$mixed </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// we need absolute<br />        </span><span class="default">$ap </span><span class="keyword">= </span><span class="default">dirname </span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">);<br />        </span><span class="default">$mixed </span><span class="keyword">= </span><span class="default">time </span><span class="keyword">() . </span><span class="string">" - </span><span class="default">$mixed</span><span class="string">\n"</span><span class="keyword">;<br />        </span><span class="default">file_put_contents </span><span class="keyword">(</span><span class="string">"</span><span class="default">$ap</span><span class="string">/shutdown.log"</span><span class="keyword">, </span><span class="default">$mixed</span><span class="keyword">, </span><span class="default">FILE_APPEND</span><span class="keyword">);<br />    }<br />}<br /></span><span class="comment">// 3. Throw an exception<br /></span><span class="default">register_shutdown_function </span><span class="keyword">(array (</span><span class="string">'Shutdown'</span><span class="keyword">, </span><span class="string">'Method'</span><span class="keyword">), </span><span class="string">'throw'</span><span class="keyword">);<br />throw new </span><span class="default">Exception </span><span class="keyword">(</span><span class="string">'bla bla'</span><span class="keyword">);<br /><br /></span><span class="comment">// 2. Use the exit command<br />//register_shutdown_function (array ('Shutdown', 'Method'), 'exit');<br />//exit ('exiting here...')<br /><br />// 1. Exit normally<br />//register_shutdown_function (array ('Shutdown', 'Method'));<br /></span><span class="default">?&gt;<br /></span><br />To test simply leave one of the three test lines uncommented and execute. Executing bottom-up yielded:<br /><br />1138382480 - 0<br />1138382503 - exit<br />1138382564 - throw<br /><br />HTH</span></code></div>
  </div>
 </div>
  <div class="note" id="40815">  <div class="votes">
    <div id="Vu40815">
    <a href="/manual/vote-note.php?id=40815&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40815">
    <a href="/manual/vote-note.php?id=40815&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40815" title="53% like this...">
    1
    </div>
  </div>
  <a href="#40815" class="name">
  <strong class="user"><em>sts at mail dot xubion dot hu</em></strong></a><a class="genanchor" href="#40815"> &para;</a><div class="date" title="2004-03-15 02:56"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40815">
<div class="phpcode"><code><span class="html">If you need the old (&lt;4.1) behavior of register_shutdown_function you can achieve the same with "Connection: close" and "Content-Length: xxxx" headers if you know the exact size of the sent data (which can be easily caught with output buffering).<br />An example:<br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">"Connection: close"</span><span class="keyword">);<br /></span><span class="default">ob_start</span><span class="keyword">();<br /></span><span class="default">phpinfo</span><span class="keyword">();<br /></span><span class="default">$size</span><span class="keyword">=</span><span class="default">ob_get_length</span><span class="keyword">(); <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: </span><span class="default">$size</span><span class="string">"</span><span class="keyword">);<br /></span><span class="default">ob_end_flush</span><span class="keyword">();<br /></span><span class="default">flush</span><span class="keyword">();<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">13</span><span class="keyword">);<br /></span><span class="default">error_log</span><span class="keyword">(</span><span class="string">"do something in the background"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The same will work with registered functions.<br />According to http spec, browsers should close the connection when they got the amount of data specified in Content-Length header. At least it works fine for me in IE6 and Opera7.</span></code></div>
  </div>
 </div>
  <div class="note" id="129024">  <div class="votes">
    <div id="Vu129024">
    <a href="/manual/vote-note.php?id=129024&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129024">
    <a href="/manual/vote-note.php?id=129024&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129024" title="100% like this...">
    2
    </div>
  </div>
  <a href="#129024" class="name">
  <strong class="user"><em>josh at joshstrange dot com</em></strong></a><a class="genanchor" href="#129024"> &para;</a><div class="date" title="2023-11-09 04:27"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129024">
<div class="phpcode"><code><span class="html">&gt; Shutdown functions run separately from the time tracked by max_execution_time. That means even if a process is terminated for running too long, shutdown functions will still be called. Additionally, if the max_execution_time runs out while a shutdown function is running it will not be terminated.<br /><br />This does not appear to be true in our testing, specifically "Additionally, if the max_execution_time runs out while a shutdown function is running it will not be terminated".  For example:<br /><br /><span class="default">&lt;?php<br />set_time_limit</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);<br /><br /></span><span class="default">register_shutdown_function</span><span class="keyword">(function() {<br />    </span><span class="default">$start </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">40</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        echo </span><span class="string">"Run 1: </span><span class="default">$i</span><span class="string">\n"</span><span class="keyword">;<br />        while(</span><span class="default">1</span><span class="keyword">) {<br />            </span><span class="default">$elapsed </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">() - </span><span class="default">$start</span><span class="keyword">;<br />            if(</span><span class="default">$elapsed </span><span class="keyword">&gt; </span><span class="default">$i</span><span class="keyword">) {<br />                break;<br />            }<br />        }<br />    }<br />});<br /><br /></span><span class="default">?&gt;<br /></span><br />This will print out:<br /><br />Run 1: 0<br />Run 1: 1<br />Run 1: 2<br />Run 1: 3<br />Run 1: 4<br />Run 1: 5<br /><br />Then it will die with:<br /><br />Execution took longer than 5 seconds, sent SIGTERM and terminated<br /><br />If you register multiple shutdown functions and an earlier one exceeds the execution time the later ones will _not_ be run. <br /><br />If you need your shutdowns to have unlimited time (like the docs suggest it works) one solution might be to register a shutdown function like this early in your code:<br /><br /><span class="default">&lt;?php<br />register_shutdown_function</span><span class="keyword">(function() {<br />    </span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />});<br /></span><span class="default">?&gt;<br /></span><br />So that you give yourself unlimited time in your subsequent shutdown functions.<br /><br />See an example here: <a href="https://www.tehplayground.com/wJLtMi3Z5c1sTi9Y" rel="nofollow" target="_blank">https://www.tehplayground.com/wJLtMi3Z5c1sTi9Y</a> (Note, 5 seconds is the max you can set on this website. If you remove the first shutdown function you it will be killed after 3 seconds).</span></code></div>
  </div>
 </div>
  <div class="note" id="120620">  <div class="votes">
    <div id="Vu120620">
    <a href="/manual/vote-note.php?id=120620&amp;page=function.register-shutdown-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120620">
    <a href="/manual/vote-note.php?id=120620&amp;page=function.register-shutdown-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120620" title="100% like this...">
    2
    </div>
  </div>
  <a href="#120620" class="name">
  <strong class="user"><em>raat1979 at gmail dot com</em></strong></a><a class="genanchor" href="#120620"> &para;</a><div class="date" title="2017-02-08 07:31"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120620">
<div class="phpcode"><code><span class="html">I wanted to set the exit code for a CLI application from a shutdown function by using a class property, <br /><br />Unfortunataly (as per manual)  "If you call exit() within one registered shutdown function, processing will stop completely and no other registered shutdown functions will be called."  <br /><br />As a result if I call exit in my shutdown function I will break other shutdown functions (like one that logs fatal errors to syslog)  <br /><br />However! (as per manual)  "Multiple calls to register_shutdown_function() can be made, and each will be called in the same order as they were registered."<br /><br />As luck would have it you are also able to register a shutdown function from within a shutdown function (at least in PHP 7.0.15 and 5.6.30) <br /><br />in other words if you register a shutdown function inside a shutdown function it is appended to the shutdown function queue.<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">class </span><span class="default">SomeApplication</span><span class="keyword">{<br />    private </span><span class="default">$exitCode </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        <br />    public function </span><span class="default">__construct</span><span class="keyword">(){<br />        </span><span class="default">register_shutdown_function</span><span class="keyword">(function(){<br />        echo </span><span class="string">"some registered shutdown function"</span><span class="keyword">;<br />            </span><span class="default">register_shutdown_function</span><span class="keyword">(function(){<br />                echo </span><span class="string">"last registered shutdown function"</span><span class="keyword">;<br />                </span><span class="comment">// one might even consider another register shutdown_function if one expects other shutdown functions to do the same...  <br />                </span><span class="keyword">exit(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">exitCode </span><span class="keyword">=== </span><span class="default">null </span><span class="keyword">? </span><span class="default">0 </span><span class="keyword">: </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">exitCode</span><span class="keyword">);<br />            });<br />        });<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.register-shutdown-function&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.register-shutdown-function.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.funchand.php">Function handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.call-user-func.php" title="call_&#8203;user_&#8203;func">call_&#8203;user_&#8203;func</a>
                        </li>
                                                <li class="">
                            <a href="function.call-user-func-array.php" title="call_&#8203;user_&#8203;func_&#8203;array">call_&#8203;user_&#8203;func_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.forward-static-call.php" title="forward_&#8203;static_&#8203;call">forward_&#8203;static_&#8203;call</a>
                        </li>
                                                <li class="">
                            <a href="function.forward-static-call-array.php" title="forward_&#8203;static_&#8203;call_&#8203;array">forward_&#8203;static_&#8203;call_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.func-get-arg.php" title="func_&#8203;get_&#8203;arg">func_&#8203;get_&#8203;arg</a>
                        </li>
                                                <li class="">
                            <a href="function.func-get-args.php" title="func_&#8203;get_&#8203;args">func_&#8203;get_&#8203;args</a>
                        </li>
                                                <li class="">
                            <a href="function.func-num-args.php" title="func_&#8203;num_&#8203;args">func_&#8203;num_&#8203;args</a>
                        </li>
                                                <li class="">
                            <a href="function.function-exists.php" title="function_&#8203;exists">function_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-functions.php" title="get_&#8203;defined_&#8203;functions">get_&#8203;defined_&#8203;functions</a>
                        </li>
                                                <li class="current">
                            <a href="function.register-shutdown-function.php" title="register_&#8203;shutdown_&#8203;function">register_&#8203;shutdown_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.register-tick-function.php" title="register_&#8203;tick_&#8203;function">register_&#8203;tick_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.unregister-tick-function.php" title="unregister_&#8203;tick_&#8203;function">unregister_&#8203;tick_&#8203;function</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.create-function.php" title="create_&#8203;function">create_&#8203;function</a>
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
