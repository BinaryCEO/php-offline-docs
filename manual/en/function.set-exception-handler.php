<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: set_exception_handler - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.set-exception-handler.php">
 <link rel="shorturl" href="https://www.php.net/set-exception-handler">
 <link rel="alternate" href="https://www.php.net/set-exception-handler" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.errorfunc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.set-error-handler.php">
 <link rel="next" href="https://www.php.net/manual/en/function.trigger-error.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.set-exception-handler.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.set-exception-handler.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.set-exception-handler.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.set-exception-handler.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.set-exception-handler.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.set-exception-handler.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.set-exception-handler.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.set-exception-handler.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.set-exception-handler.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.set-exception-handler.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.set-exception-handler.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sets a user-defined exception handler function" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: set_exception_handler - Manual" />
<meta name="twitter:description" content="Sets a user-defined exception handler function" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: set_exception_handler - Manual" />
<meta itemprop="description" content="Sets a user-defined exception handler function" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sets a user-defined exception handler function" />

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
        <a href="function.trigger-error.php">
          trigger_error &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.set-error-handler.php">
          &laquo; set_error_handler        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.errorfunc.php'>Error Handling</a></li>      <li><a href='ref.errorfunc.php'>Error Handling Functions</a></li>      </ul>
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
            <option value='en/function.set-exception-handler.php' selected="selected">English</option>
            <option value='de/function.set-exception-handler.php'>German</option>
            <option value='es/function.set-exception-handler.php'>Spanish</option>
            <option value='fr/function.set-exception-handler.php'>French</option>
            <option value='it/function.set-exception-handler.php'>Italian</option>
            <option value='ja/function.set-exception-handler.php'>Japanese</option>
            <option value='pt_BR/function.set-exception-handler.php'>Brazilian Portuguese</option>
            <option value='ru/function.set-exception-handler.php'>Russian</option>
            <option value='tr/function.set-exception-handler.php'>Turkish</option>
            <option value='uk/function.set-exception-handler.php'>Ukrainian</option>
            <option value='zh/function.set-exception-handler.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.set-exception-handler" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">set_exception_handler</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">set_exception_handler</span> &mdash; <span class="dc-title">
   Sets a user-defined exception handler function 
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.set-exception-handler-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>set_exception_handler</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span></span> <code class="parameter">$callback</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span></span></div>

  <p class="para rdfs-comment">
   Sets the default exception handler if an exception is not caught within a
   try/catch block. Execution will stop after the
   <code class="parameter">callback</code> is called.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.set-exception-handler-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">callback</code></dt>
     <dd>
      <p class="para">
       The function to be called when an uncaught exception occurs.
       This handler function needs to accept one parameter,
       which will be the <span class="classname"><a href="class.throwable.php" class="classname">Throwable</a></span> object that was thrown.
       Both <span class="classname"><a href="class.error.php" class="classname">Error</a></span> and <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span>
       implement the <span class="classname"><a href="class.throwable.php" class="classname">Throwable</a></span> interface.
       This is the handler signature:
      </p>
      <p class="para">
       <div class="methodsynopsis dc-description">
        <span class="methodname"><span class="replaceable">handler</span></span>(<span class="methodparam"><span class="type"><a href="class.throwable.php" class="type Throwable">Throwable</a></span> <code class="parameter">$ex</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

      </p>
      <p class="para">
       <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> may be passed instead, to reset this handler to its default state.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.set-exception-handler-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the previously defined exception handler, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> on error. If
   no previous handler was defined, <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is also returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.set-exception-handler-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-606">
    <p><strong>Example #1 <span class="function"><strong>set_exception_handler()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">exception_handler</span><span style="color: #007700">(</span><span style="color: #0000BB">Throwable $exception</span><span style="color: #007700">) {<br />  echo </span><span style="color: #DD0000">"Uncaught exception: " </span><span style="color: #007700">, </span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">set_exception_handler</span><span style="color: #007700">(</span><span style="color: #DD0000">'exception_handler'</span><span style="color: #007700">);<br /><br />throw new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'Uncaught Exception'</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Not Executed\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.set-exception-handler-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.get-exception-handler.php" class="function" rel="rdfs-seeAlso">get_exception_handler()</a> - Gets the user-defined exception handler function</span></li>
    <li><span class="function"><a href="function.restore-exception-handler.php" class="function" rel="rdfs-seeAlso">restore_exception_handler()</a> - Restores the previously defined exception handler function</span></li>
    <li><span class="function"><a href="function.restore-error-handler.php" class="function" rel="rdfs-seeAlso">restore_error_handler()</a> - Restores the previous error handler function</span></li>
    <li><span class="function"><a href="function.error-reporting.php" class="function" rel="rdfs-seeAlso">error_reporting()</a> - Sets which PHP errors are reported</span></li>
    <li><a href="language.exceptions.php" class="link">Exceptions</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/errorfunc/functions/set-exception-handler.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.set-exception-handler%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.set-exception-handler&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.set-exception-handler.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">18 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="95170">  <div class="votes">
    <div id="Vu95170">
    <a href="/manual/vote-note.php?id=95170&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95170">
    <a href="/manual/vote-note.php?id=95170&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95170" title="77% like this...">
    93
    </div>
  </div>
  <a href="#95170" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#95170"> &para;</a><div class="date" title="2009-12-16 06:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95170">
<div class="phpcode"><code><span class="html">Things you should be aware of:<br /><br />An exception handler handles exceptions that were not caught before. It is the nature of an exception that it discontinues execution of your program - since it declares an exceptional situation in which the program cannot continue (except you catch it).<br /><br />Since it has not been catched your code signals it is not being aware of the situation and cant go on.<br /><br />This implies: returning to the script is simply impossible when the exception handler has already been called, since an uncaught exception is not a notice. use your own debug- or notice-log-system for things like that.<br /><br />Furthermore: While is is still possible to call functions from your script, since the exception handler has already been called exceptions bubbling from that piece of code won't trigger the exception handler again. php will die without leaving any information apart form "uncaught exception with unknown stack frame". So if you call functions from your script, make sure that you catch any exceptions that possibly occur via try..catch inside the exception handler.<br /><br />For those of you who misinterpreted the essential meaning of the exception handler: it's only use is to handle the abortion of your script gracefully, e.g. in a project like facebook or wikipedia: render a nice error page, eventually hiding information which shall not leak into the public (instead you may want to write to your log or mail the sys-admin or stuff like that).<br /><br />In other words: Redirecting all php-errors form an error-handler using exceptions - including notices - is a very dumb idea, if you do not intend having your script aborted everytime you didn't set a variable (for example).<br /><br />my 2 cents.</span></code></div>
  </div>
 </div>
  <div class="note" id="98201">  <div class="votes">
    <div id="Vu98201">
    <a href="/manual/vote-note.php?id=98201&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98201">
    <a href="/manual/vote-note.php?id=98201&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98201" title="72% like this...">
    11
    </div>
  </div>
  <a href="#98201" class="name">
  <strong class="user"><em>pinkgothic at gmail dot com</em></strong></a><a class="genanchor" href="#98201"> &para;</a><div class="date" title="2010-06-01 02:30"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98201">
<div class="phpcode"><code><span class="html">If you're handling sensitive data and you don't want exceptions logging details such as variable contents when you throw them, you may find yourself frustratedly looking for the bits and pieces that make up a normal stack trace output, so you can retain its legibility but just alter a few things. In that case, this may help you:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">exceptionHandler</span><span class="keyword">(</span><span class="default">$exception</span><span class="keyword">) {<br /><br />    </span><span class="comment">// these are our templates<br />    </span><span class="default">$traceline </span><span class="keyword">= </span><span class="string">"#%s %s(%s): %s(%s)"</span><span class="keyword">;<br />    </span><span class="default">$msg </span><span class="keyword">= </span><span class="string">"PHP Fatal error:  Uncaught exception '%s' with message '%s' in %s:%s\nStack trace:\n%s\n  thrown in %s on line %s"</span><span class="keyword">;<br /><br />    </span><span class="comment">// alter your trace as you please, here<br />    </span><span class="default">$trace </span><span class="keyword">= </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getTrace</span><span class="keyword">();<br />    foreach (</span><span class="default">$trace </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$stackPoint</span><span class="keyword">) {<br />        </span><span class="comment">// I'm converting arguments to their type<br />        // (prevents passwords from ever getting logged as anything other than 'string')<br />        </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'args'</span><span class="keyword">] = </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'gettype'</span><span class="keyword">, </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'args'</span><span class="keyword">]);<br />    }<br /><br />    </span><span class="comment">// build your tracelines<br />    </span><span class="default">$result </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$trace </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$stackPoint</span><span class="keyword">) {<br />        </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">sprintf</span><span class="keyword">(<br />            </span><span class="default">$traceline</span><span class="keyword">,<br />            </span><span class="default">$key</span><span class="keyword">,<br />            </span><span class="default">$stackPoint</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">],<br />            </span><span class="default">$stackPoint</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">],<br />            </span><span class="default">$stackPoint</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">],<br />            </span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">, </span><span class="default">$stackPoint</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">])<br />        );<br />    }<br />    </span><span class="comment">// trace always ends with {main}<br />    </span><span class="default">$result</span><span class="keyword">[] = </span><span class="string">'#' </span><span class="keyword">. ++</span><span class="default">$key </span><span class="keyword">. </span><span class="string">' {main}'</span><span class="keyword">;<br /><br />    </span><span class="comment">// write tracelines into main template<br />    </span><span class="default">$msg </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(<br />        </span><span class="default">$msg</span><span class="keyword">,<br />        </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$exception</span><span class="keyword">),<br />        </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">(),<br />        </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getFile</span><span class="keyword">(),<br />        </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getLine</span><span class="keyword">(),<br />        </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">),<br />        </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getFile</span><span class="keyword">(),<br />        </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getLine</span><span class="keyword">()<br />    );<br /><br />    </span><span class="comment">// log or echo as you please<br />    </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />If you're not a fan of sprintf() or the duplicate $exception-&gt;getFile() and $exception-&gt;getLine() calls you can of course replace that as you like - consider this a mere compilation of the parts.</span></code></div>
  </div>
 </div>
  <div class="note" id="73607">  <div class="votes">
    <div id="Vu73607">
    <a href="/manual/vote-note.php?id=73607&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73607">
    <a href="/manual/vote-note.php?id=73607&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73607" title="67% like this...">
    19
    </div>
  </div>
  <a href="#73607" class="name">
  <strong class="user"><em>Glen</em></strong></a><a class="genanchor" href="#73607"> &para;</a><div class="date" title="2007-03-03 12:34"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73607">
<div class="phpcode"><code><span class="html">If you want a class instance to handle the exception, this is how you do it :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">example </span><span class="keyword">{<br />   public function </span><span class="default">__construct</span><span class="keyword">() {<br />       @</span><span class="default">set_exception_handler</span><span class="keyword">(array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'exception_handler'</span><span class="keyword">));<br />       throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'DOH!!'</span><span class="keyword">);<br />   }<br /><br />   public function </span><span class="default">exception_handler</span><span class="keyword">(</span><span class="default">$exception</span><span class="keyword">) {<br />       print </span><span class="string">"Exception Caught: "</span><span class="keyword">. </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() .</span><span class="string">"\n"</span><span class="keyword">;<br />   }<br />}<br /><br /></span><span class="default">$example </span><span class="keyword">= new </span><span class="default">example</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />See the first post (Sean's) for a static example.  As Sean points out, the exception_handler function must be declared public.</span></code></div>
  </div>
 </div>
  <div class="note" id="68712">  <div class="votes">
    <div id="Vu68712">
    <a href="/manual/vote-note.php?id=68712&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68712">
    <a href="/manual/vote-note.php?id=68712&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68712" title="69% like this...">
    13
    </div>
  </div>
  <a href="#68712" class="name">
  <strong class="user"><em>mastabog at hotmail dot com</em></strong></a><a class="genanchor" href="#68712"> &para;</a><div class="date" title="2006-08-08 07:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68712">
<div class="phpcode"><code><span class="html">A behaviour not documented or discussed enough, yet pretty common is that is that if an exception is thrown from the global exception handler then a fatal error occurs (Exception thrown without a stack frame). That is, if you define your own global exception handler by calling set_exception_handler() and you throw an exception from inside it then this fatal error occurs. It is only natural though, as the callback defined by set_exception_handler() is only called on uncaught (unhandled) exceptions so if you throw one from there then you get this fatal error as there is no exception handler left (you override the php internal one by calling set_exception_handler()), hence no stack frame for it.<br /><br />Example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">myExceptionHandler </span><span class="keyword">(</span><span class="default">Exception $ex</span><span class="keyword">)<br />{<br />    throw </span><span class="default">$ex</span><span class="keyword">;<br />}<br /><br /></span><span class="default">set_exception_handler</span><span class="keyword">(</span><span class="string">"myExceptionHandler"</span><span class="keyword">);<br /><br />throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"This should cause a fatal error and this message will be lost"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Will cause a Fatal error: Exception thrown without a stack frame<br /><br />If you skip/comment the set_exception_handler("...") line then the internal PHP global handler will catch the exception and output the exception message and trace (as string) to the browser, allowing you to at least see the exception message.<br /><br />While it is a very good idea to always define your own global exception handler by using the set_exception_handler() function, you should pay attention and never throw an exception from it (or if you do then catch it).<br /><br />Finally, every serious coder should use an IDE with debugging capabilities. Tracking down an error like this becomes a trivial matter by using simple debugging "Step into" commands (I for one recommend Zend IDE v5.2 at the moment of this writing). I have seen numerous messages on the internet with people wondering why this message pops up.<br /><br />Cheers<br /><br />p.s. Other causes for this error which are somehow unrelated to this is when you throw an exception from a destructor (the reasons behind that are similar though, the global handler might no longer exist due to the php engine shutting the page down).</span></code></div>
  </div>
 </div>
  <div class="note" id="125102">  <div class="votes">
    <div id="Vu125102">
    <a href="/manual/vote-note.php?id=125102&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125102">
    <a href="/manual/vote-note.php?id=125102&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125102" title="65% like this...">
    6
    </div>
  </div>
  <a href="#125102" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#125102"> &para;</a><div class="date" title="2020-06-09 04:05"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125102">
<div class="phpcode"><code><span class="html">As of PHP 7.4, an exception thrown within the user-defined shutdown function can be caught by the user-defined exception handler.<br /><br /><span class="default">&lt;?php<br />    set_error_handler</span><span class="keyword">(<br />        function(</span><span class="default">$level</span><span class="keyword">, </span><span class="default">$error</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">){<br />            if(</span><span class="default">0 </span><span class="keyword">=== </span><span class="default">error_reporting</span><span class="keyword">()){<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            throw new </span><span class="default">ErrorException</span><span class="keyword">(</span><span class="default">$error</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">$level</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">);<br />        },<br />        </span><span class="default">E_ALL<br />    </span><span class="keyword">);<br /><br />    </span><span class="default">register_shutdown_function</span><span class="keyword">(function(){<br />        </span><span class="default">$error </span><span class="keyword">= </span><span class="default">error_get_last</span><span class="keyword">();<br />        if(</span><span class="default">$error</span><span class="keyword">){<br />            throw new </span><span class="default">ErrorException</span><span class="keyword">(</span><span class="default">$error</span><span class="keyword">[</span><span class="string">'message'</span><span class="keyword">], -</span><span class="default">1</span><span class="keyword">, </span><span class="default">$error</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">], </span><span class="default">$error</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">], </span><span class="default">$error</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">]);<br />        }<br />    });<br /><br />    </span><span class="default">set_exception_handler</span><span class="keyword">(function(</span><span class="default">$exception</span><span class="keyword">){<br />        </span><span class="comment">// ... more code ...<br />    </span><span class="keyword">});    <br />    <br />    require </span><span class="string">'NotExists.php'</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82512">  <div class="votes">
    <div id="Vu82512">
    <a href="/manual/vote-note.php?id=82512&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82512">
    <a href="/manual/vote-note.php?id=82512&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82512" title="66% like this...">
    5
    </div>
  </div>
  <a href="#82512" class="name">
  <strong class="user"><em>marques at displague dot com</em></strong></a><a class="genanchor" href="#82512"> &para;</a><div class="date" title="2008-04-14 07:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82512">
<div class="phpcode"><code><span class="html">frank,<br /><br />Your exception handler is configured to be the handler for all exceptions, yet if a basic 'Exception' is thrown, your static method will error because 'Exception's do not have 'getException'.  Because of this I don't see a real purpose to making the uncaught handler a class that extends Exception.  <br /><br />I do like the idea of using static methods of a general Exception handling class.  <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">ExceptionHandler </span><span class="keyword">{   <br />    public static function </span><span class="default">printException</span><span class="keyword">(</span><span class="default">Exception $e</span><span class="keyword">)<br />    {<br />        print </span><span class="string">'Uncaught '</span><span class="keyword">.</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">).</span><span class="string">', code: ' </span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getCode</span><span class="keyword">() . </span><span class="string">"&lt;br /&gt;Message: " </span><span class="keyword">. </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">()).</span><span class="string">"\n"</span><span class="keyword">;<br />    }<br />   <br />    public static function </span><span class="default">handleException</span><span class="keyword">(</span><span class="default">Exception $e</span><span class="keyword">)<br />    {<br />         </span><span class="default">self</span><span class="keyword">::</span><span class="default">printException</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">set_exception_handler</span><span class="keyword">(array(</span><span class="string">"ExceptionHandler"</span><span class="keyword">, </span><span class="string">"handleException"</span><span class="keyword">));<br /><br />class </span><span class="default">NewException </span><span class="keyword">extends </span><span class="default">Exception </span><span class="keyword">{}<br />try {<br />  throw new </span><span class="default">NewException</span><span class="keyword">(</span><span class="string">"Catch me once"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />} catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />  </span><span class="default">ExceptionHandler</span><span class="keyword">::</span><span class="default">handleException</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">);<br />}<br /><br />throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Catch me twice"</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Gives:<br />Uncaught NewException, code: 1&lt;br /&gt;Message: Catch me once<br />Uncaught Exception, code: 2&lt;br /&gt;Message: Catch me twice<br /><br />There are much more interesting things that can be done like reformating and optionally displaying or emailing them.  But this class acts a nice container for those functions.</span></code></div>
  </div>
 </div>
  <div class="note" id="115781">  <div class="votes">
    <div id="Vu115781">
    <a href="/manual/vote-note.php?id=115781&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115781">
    <a href="/manual/vote-note.php?id=115781&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115781" title="61% like this...">
    5
    </div>
  </div>
  <a href="#115781" class="name">
  <strong class="user"><em>Josef Spak</em></strong></a><a class="genanchor" href="#115781"> &para;</a><div class="date" title="2014-09-22 10:34"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115781">
<div class="phpcode"><code><span class="html">On GNU/Linux, When an exception handler is called, PHP will end with exit status code 0 instead of 255.<br /><br />You can change the exit status code with an exit() call at the end of your custom error handler.</span></code></div>
  </div>
 </div>
  <div class="note" id="78985">  <div class="votes">
    <div id="Vu78985">
    <a href="/manual/vote-note.php?id=78985&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78985">
    <a href="/manual/vote-note.php?id=78985&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78985" title="63% like this...">
    3
    </div>
  </div>
  <a href="#78985" class="name">
  <strong class="user"><em>frank at netventures dot com dot au</em></strong></a><a class="genanchor" href="#78985"> &para;</a><div class="date" title="2007-11-05 10:10"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78985">
<div class="phpcode"><code><span class="html">Hey all, i've just started to use the exception suite instead of the normal PHP error suite. For those of you looking for an object orientated way to do this without looking down at Glen and Sean's examples (Lesson 1: ALWAYS read the logs!), here you go:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">NewException </span><span class="keyword">extends </span><span class="default">Exception<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">)<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">);<br />    }<br />    <br />    public function </span><span class="default">__toString</span><span class="keyword">()<br />    {<br />        return </span><span class="string">"Code: " </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getCode</span><span class="keyword">() . </span><span class="string">"&lt;br /&gt;Message: " </span><span class="keyword">. </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">());<br />    }<br />    <br />    public function </span><span class="default">getException</span><span class="keyword">()<br />    {<br />        print </span><span class="default">$this</span><span class="keyword">; </span><span class="comment">// This will print the return from the above method __toString()<br />    </span><span class="keyword">}<br />    <br />    public static function </span><span class="default">getStaticException</span><span class="keyword">(</span><span class="default">$exception</span><span class="keyword">)<br />    {<br />         </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getException</span><span class="keyword">(); </span><span class="comment">// $exception is an instance of this class<br />    </span><span class="keyword">}<br />}<br /><br /></span><span class="default">set_exception_handler</span><span class="keyword">(array(</span><span class="string">"NewException"</span><span class="keyword">, </span><span class="string">"getStaticException"</span><span class="keyword">));<br />throw new </span><span class="default">NewException</span><span class="keyword">(</span><span class="string">"Catch me!!!"</span><span class="keyword">, </span><span class="default">69</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Let me know if i'm missing something obvious as I left my glasses at home and I just came back from the Melbourne cup (If I won then I wouldn't be at work still!).</span></code></div>
  </div>
 </div>
  <div class="note" id="64110">  <div class="votes">
    <div id="Vu64110">
    <a href="/manual/vote-note.php?id=64110&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64110">
    <a href="/manual/vote-note.php?id=64110&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64110" title="62% like this...">
    2
    </div>
  </div>
  <a href="#64110" class="name">
  <strong class="user"><em>mc-php-doco at oak dot homeunix dot org</em></strong></a><a class="genanchor" href="#64110"> &para;</a><div class="date" title="2006-04-07 09:41"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64110">
<div class="phpcode"><code><span class="html">This seems not to work when calling the PHP binary with the '-r' flag.<br /><br />For example, if I run it like this:<br /><br />    php -r '<br />      function exception_handler($exception) {<br />        echo "Uncaught exception: " , $exception-&gt;getMessage(), "\n";<br />      }<br /> <br />      set_exception_handler("exception_handler");<br /> <br />      throw new Exception("Uncaught Exception");<br />      echo "Not Executed\n";<br />    '<br /><br />Or if I place it in a file and run it like this:<br /><br />    php -r 'include "./tmp.php";'<br /><br />I get a stack trace instead of having the function 'exception_handler' called.  If run it like this:<br /><br />    php tmp.php<br /><br />It works fine.  <br /><br />(Why run code from '-r'?  Sometimes it's useful to add stuff around the include like calls to microtime for benchmarks, or to include a library and then call a few functions from the library, all in an ad-hoc way without having to create new files.)<br /><br />PHP versions 5.1.2 and 5.0.4.</span></code></div>
  </div>
 </div>
  <div class="note" id="58086">  <div class="votes">
    <div id="Vu58086">
    <a href="/manual/vote-note.php?id=58086&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58086">
    <a href="/manual/vote-note.php?id=58086&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58086" title="60% like this...">
    2
    </div>
  </div>
  <a href="#58086" class="name">
  <strong class="user"><em>sean at seanodonnell dot com</em></strong></a><a class="genanchor" href="#58086"> &para;</a><div class="date" title="2005-10-23 04:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58086">
<div class="phpcode"><code><span class="html">Using the 'set_exception_handler' function within a class, the defined 'exception_handler' method must be declared as 'public' (preferrable 'public static' if you use the "array('example', 'exception_handler')" syntax). 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">example </span><span class="keyword">{
<br />    public function </span><span class="default">__construct</span><span class="keyword">() {
<br />        @</span><span class="default">set_exception_handler</span><span class="keyword">(array(</span><span class="string">'example'</span><span class="keyword">, </span><span class="string">'exception_handler'</span><span class="keyword">));
<br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'DOH!!'</span><span class="keyword">);
<br />    }
<br />
<br />    public static function </span><span class="default">exception_handler</span><span class="keyword">(</span><span class="default">$exception</span><span class="keyword">) {
<br />        print </span><span class="string">"Exception Caught: "</span><span class="keyword">. </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() .</span><span class="string">"\n"</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="default">$example </span><span class="keyword">= new </span><span class="default">example</span><span class="keyword">;
<br />
<br />echo </span><span class="string">"Not Executed\n"</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span> 
<br />
<br />Declaring the 'exception_handler' function as 'private' causes a FATAL ERROR.
<br />
<br />[derick: red. updated statement about static a bit]</span></code></div>
  </div>
 </div>
  <div class="note" id="88082">  <div class="votes">
    <div id="Vu88082">
    <a href="/manual/vote-note.php?id=88082&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88082">
    <a href="/manual/vote-note.php?id=88082&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88082" title="56% like this...">
    3
    </div>
  </div>
  <a href="#88082" class="name">
  <strong class="user"><em>joshua dot boyle-petrie at its dot monash dot edu</em></strong></a><a class="genanchor" href="#88082"> &para;</a><div class="date" title="2009-01-08 11:44"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88082">
<div class="phpcode"><code><span class="html">Thanks to mastabog we know that throwing an exception within the exception handler will trigger a fatal error and a debugging nightmare.  To avoid throwing an exception within there should be easy.<br /><br />However, if you use a custom error handler to convert errors to ErrorExceptions suddenly there are a multitude of new ways to accidentally throw exceptions within the exception handler.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">error_handler</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">)<br />{<br />    if (</span><span class="default">0 </span><span class="keyword">== </span><span class="default">error_reporting</span><span class="keyword">())<br />    {<br />        return;<br />    }<br />    throw new </span><span class="default">ErrorException</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">);<br />}<br />function </span><span class="default">exception_handler</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">)<br />{<br />    </span><span class="comment">// ... normal exception stuff goes here<br />    </span><span class="keyword">print </span><span class="default">$undefined</span><span class="keyword">; </span><span class="comment">// This is the underlying problem<br /></span><span class="keyword">}<br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">"error_handler"</span><span class="keyword">);<br /></span><span class="default">set_exception_handler</span><span class="keyword">(</span><span class="string">"exception_handler"</span><span class="keyword">);<br />throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Just invoking the exception handler"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Output: Fatal error: Exception thrown without a stack frame in Unknown on line 0<br /><br />The best way I have found to avoid this is to wrap up everything in the exception handler in a try/catch block.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">exception_handler</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">)<br />{<br />    try<br />    {<br />        </span><span class="comment">// ... normal exception stuff goes here<br />        </span><span class="keyword">print </span><span class="default">$undefined</span><span class="keyword">; </span><span class="comment">// This is the underlying problem<br />    </span><span class="keyword">}<br />    catch (</span><span class="default">Exception $e</span><span class="keyword">)<br />    {<br />        print </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">).</span><span class="string">" thrown within the exception handler. Message: "</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">().</span><span class="string">" on line "</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getLine</span><span class="keyword">();<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span>Output: ErrorException thrown within the exception handler. Message: Undefined variable: undefined on line 14<br /><br />This speeds up debugging and offers some scalability to any other exceptions accidentally thrown within the exception handler.<br /><br />Another solution is to restore the error handler at the beginning of the exception handler.  While this is a silver bullet in terms of avoiding the ErrorExceptions, debugging messages then rely on the error_reporting() level and the display_errors directive.  Why mention this?  It might be preferable for production code since we care more about hiding errors from users than convenient debugging messages.</span></code></div>
  </div>
 </div>
  <div class="note" id="114582">  <div class="votes">
    <div id="Vu114582">
    <a href="/manual/vote-note.php?id=114582&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114582">
    <a href="/manual/vote-note.php?id=114582&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114582" title="55% like this...">
    2
    </div>
  </div>
  <a href="#114582" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#114582"> &para;</a><div class="date" title="2014-03-08 11:42"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114582">
<div class="phpcode"><code><span class="html">By default the stack trace is pretty unreadable, so you might want to wrap it in &lt;pre&gt; tags. Here I also wrap it in a &lt;div&gt; and set the class 'alert alert-danger' which are CSS classes in the Bootstrap CSS framework to style them red.<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">exception_handler</span><span class="keyword">(</span><span class="default">$exception</span><span class="keyword">) {<br />  echo </span><span class="string">'&lt;div class="alert alert-danger"&gt;'</span><span class="keyword">;<br />  echo </span><span class="string">'&lt;b&gt;Fatal error&lt;/b&gt;:  Uncaught exception \'' </span><span class="keyword">. </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$exception</span><span class="keyword">) . </span><span class="string">'\' with message '</span><span class="keyword">;<br />  echo </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />  echo </span><span class="string">'Stack trace:&lt;pre&gt;' </span><span class="keyword">. </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getTraceAsString</span><span class="keyword">() . </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br />  echo </span><span class="string">'thrown in &lt;b&gt;' </span><span class="keyword">. </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getFile</span><span class="keyword">() . </span><span class="string">'&lt;/b&gt; on line &lt;b&gt;' </span><span class="keyword">. </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getLine</span><span class="keyword">() . </span><span class="string">'&lt;/b&gt;&lt;br&gt;'</span><span class="keyword">;<br />  echo </span><span class="string">'&lt;/div&gt;'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">set_exception_handler</span><span class="keyword">(</span><span class="string">'exception_handler'</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111484">  <div class="votes">
    <div id="Vu111484">
    <a href="/manual/vote-note.php?id=111484&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111484">
    <a href="/manual/vote-note.php?id=111484&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111484" title="54% like this...">
    1
    </div>
  </div>
  <a href="#111484" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#111484"> &para;</a><div class="date" title="2013-02-25 08:51"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111484">
<div class="phpcode"><code><span class="html">As of PHP 5.4.11....
<br />
<br />Instead of:
<br />
<br />Output: Fatal error: Exception thrown without a stack frame in Unknown on line 0
<br />
<br />This snippet:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">error_handler</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">)
<br />{
<br />    if (</span><span class="default">0 </span><span class="keyword">== </span><span class="default">error_reporting</span><span class="keyword">())
<br />    {
<br />        return;
<br />    }
<br />    throw new </span><span class="default">ErrorException</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">);
<br />}
<br />function </span><span class="default">exception_handler</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">)
<br />{
<br />    </span><span class="comment">// ... normal exception stuff goes here
<br />    </span><span class="keyword">print </span><span class="default">$undefined</span><span class="keyword">; </span><span class="comment">// This is the underlying problem
<br /></span><span class="keyword">}
<br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">"error_handler"</span><span class="keyword">);
<br /></span><span class="default">set_exception_handler</span><span class="keyword">(</span><span class="string">"exception_handler"</span><span class="keyword">);
<br />throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Just invoking the exception handler"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Now returns:
<br />
<br />Fatal error: Uncaught exception 'ErrorException' with message 'Undefined variable: undefined' in C:\Apache2\htdocs\error\test.php:13 Stack trace: #0 C:\Apache2\htdocs\error\test.php(13): error_handler(8, 'Undefined varia...', 'C:\Apache2\htdo...', 13, Array) #1 [internal function]: exception_handler(Object(Exception)) #2 {main} thrown in C:\Apache2\htdocs\error\test.php on line 13
<br />
<br />So it appears that exceptions thrown within exception handler now bypass exception handler.</span></code></div>
  </div>
 </div>
  <div class="note" id="130465">  <div class="votes">
    <div id="Vu130465">
    <a href="/manual/vote-note.php?id=130465&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130465">
    <a href="/manual/vote-note.php?id=130465&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130465" title="no votes...">
    0
    </div>
  </div>
  <a href="#130465" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#130465"> &para;</a><div class="date" title="2025-08-30 02:28"><strong>30 days ago</strong></div>
  <div class="text" id="Hcom130465">
<div class="phpcode"><code><span class="html">An error triggered in the exception handler can be handled in the shutdown function using error_get_last(), that error will be taken as a fatal error no matter what level it is originally of.<br /><br />If an exception is thrown in the exception handler, the exception will NOT be handled by the exception handler, instead it will be converted to a fatal error that can be handled by the shutdown function.<br /><br />As of PHP 8.3, an exception thrown in the shutdown function can be caught and handled by the global exception handler.</span></code></div>
  </div>
 </div>
  <div class="note" id="120196">  <div class="votes">
    <div id="Vu120196">
    <a href="/manual/vote-note.php?id=120196&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120196">
    <a href="/manual/vote-note.php?id=120196&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120196" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#120196" class="name">
  <strong class="user"><em>dev at codesatori dot com</em></strong></a><a class="genanchor" href="#120196"> &para;</a><div class="date" title="2016-11-21 03:51"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120196">
<div class="phpcode"><code><span class="html">For those of you wanting to convert PHP errors to ErrorExceptions (useful), but frustrated with the script being halted on every E_NOTICE et al. In your error handler, simply create the ErrorException, and then either throw it (script halted), or pass the object directly (script continues) to your exception handler function.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">const </span><span class="default">EXIT_ON_ALL_PHP_ERRORS </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">; </span><span class="comment">// or true<br /><br /></span><span class="keyword">function </span><span class="default">proc_error</span><span class="keyword">(</span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">) <br />{<br />    </span><span class="default">$e </span><span class="keyword">= new </span><span class="default">ErrorException</span><span class="keyword">(</span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">);<br />    <br />    if (</span><span class="default">EXIT_ON_ALL_PHP_ERRORS</span><span class="keyword">) {<br />        throw </span><span class="default">$e</span><span class="keyword">; </span><span class="comment">// This will halt your script.<br />    </span><span class="keyword">} else {<br />        </span><span class="default">proc_exception</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">); </span><span class="comment">// This will let it continue.<br />    </span><span class="keyword">}<br />}<br /><br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">"proc_error"</span><span class="keyword">);<br /></span><span class="default">set_exception_handler</span><span class="keyword">(</span><span class="string">"proc_exception"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />You could further customize the error severity level (from $errno, match bitmasks with error level constants) at which the script is halted or allowed to continue. The above simply allows passthru for PHP errors' default behavior. <br /><br />If your exception handler is receiving both error ErrorExceptions (with severity level etc.) and other types of uncaught Exceptions, then use a <span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">$e </span><span class="keyword">instanceof </span><span class="default">ErrorException</span><span class="keyword">) { </span><span class="comment">// ... } </span><span class="default">?&gt;</span> condition to deal with the variance. I had to further wrap it into a <span class="default">&lt;?php </span><span class="keyword">try { </span><span class="default">$errno </span><span class="keyword">= </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getSeverity</span><span class="keyword">(); } catch (</span><span class="default">Exception $x</span><span class="keyword">) { </span><span class="default">$errno </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">} ... </span><span class="default">?&gt;</span>, because some EE-s were mysteriously lacking the severity level property (yet to dig in and find out why).</span></code></div>
  </div>
 </div>
  <div class="note" id="121629">  <div class="votes">
    <div id="Vu121629">
    <a href="/manual/vote-note.php?id=121629&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121629">
    <a href="/manual/vote-note.php?id=121629&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121629" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#121629" class="name">
  <strong class="user"><em>klaussantana at gmail dot com</em></strong></a><a class="genanchor" href="#121629"> &para;</a><div class="date" title="2017-09-12 03:44"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121629">
<div class="phpcode"><code><span class="html">Hi everyone. I don't know if it is an old behavior of previous versions, but currently you can set exception and error handlers as private or protected methos, if, only if, you call `set_exception_handler()` or `set_error_handler()` within a context that can access the method.<br /><br />Example:<br />    <span class="default">&lt;?PHP<br />        $Handler </span><span class="keyword">= new class ()<br />        {<br />            public function </span><span class="default">__construct </span><span class="keyword">()<br />            {<br />                </span><span class="default">set_error_handler</span><span class="keyword">([</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'HandleError'</span><span class="keyword">);<br />                </span><span class="default">set_exception_handler</span><span class="keyword">([</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'HandleException'</span><span class="keyword">]);<br />            }<br />            protected function </span><span class="default">HandleError </span><span class="keyword">( </span><span class="default">$Code</span><span class="keyword">, </span><span class="default">$Message</span><span class="keyword">, </span><span class="default">$File </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$Line </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$Context </span><span class="keyword">= [] )<br />            {<br />                </span><span class="comment">// Handle error here.<br />            </span><span class="keyword">}<br />            private function </span><span class="default">HandleException </span><span class="keyword">( </span><span class="default">$Exception </span><span class="keyword">)<br />            {<br />                </span><span class="comment">// Handle exception here.<br />            </span><span class="keyword">}<br />        }<br />    </span><span class="default">?&gt;<br /></span><br />NOTE: these methods must match the callbacks parameters signatures. I put</span></code></div>
  </div>
 </div>
  <div class="note" id="95054">  <div class="votes">
    <div id="Vu95054">
    <a href="/manual/vote-note.php?id=95054&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95054">
    <a href="/manual/vote-note.php?id=95054&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95054" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#95054" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#95054"> &para;</a><div class="date" title="2009-12-10 06:09"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95054">
<div class="phpcode"><code><span class="html">When an uncaught exception is handled, execution does NOT return to the script, but rather (unexpectedly, on my end anyway) terminates.<br /><br />I am using set_error_handler() and set_exception_handler() in conjunction for a system I am currently developing (on v5.3.0 with Xampp). Lets say two E_USER_NOTICES are triggered, the script will die after the first one is processed.<br /><br /><span class="default">&lt;?php<br />    set_exception_handler</span><span class="keyword">( </span><span class="string">'exc_handler' </span><span class="keyword">);<br />    function </span><span class="default">exc_handler</span><span class="keyword">(</span><span class="default">$exception</span><span class="keyword">) {<br />        echo </span><span class="string">"Uncaught exception: " </span><span class="keyword">, </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">(), </span><span class="string">"\n"</span><span class="keyword">;<br />    }<br />    function </span><span class="default">errorone</span><span class="keyword">() {<br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Test 1"</span><span class="keyword">);<br />    }<br />    function </span><span class="default">errortwo</span><span class="keyword">() {<br />        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Test 2"</span><span class="keyword">);<br />    }<br />    function </span><span class="default">test</span><span class="keyword">() {<br />        </span><span class="default">errorone</span><span class="keyword">();<br />        </span><span class="default">errortwo</span><span class="keyword">();<br />    }<br />    </span><span class="default">test</span><span class="keyword">();<br />    </span><span class="default">test</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Instead of printing (as I'd expect) "Uncaught exception: Text 1\nUncaught exception: Text 2\nUncaught exception: Text 1\nUncaught exception: Text 2\n"<br /><br />It is only printed ONCE. I've tried a number of different things, but I can't figure out how to return execution to the script after the EXCEPTION HANDLER has run.<br /><br />If anyone has a solution on how to return execution (hence, allow the script to log uncaught exceptions but continue processing) then PLEASE email me! Thanks!</span></code></div>
  </div>
 </div>
  <div class="note" id="62154">  <div class="votes">
    <div id="Vu62154">
    <a href="/manual/vote-note.php?id=62154&amp;page=function.set-exception-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62154">
    <a href="/manual/vote-note.php?id=62154&amp;page=function.set-exception-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62154" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#62154" class="name">
  <strong class="user"><em>ch at westend dot com</em></strong></a><a class="genanchor" href="#62154"> &para;</a><div class="date" title="2006-02-21 07:06"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62154">
<div class="phpcode"><code><span class="html">It seems that although the Exception contains a backtrace itself, the stack for the debug_backtrace() function is empty when entering an exception handler. This is very inconvinient. See bug #36477.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.set-exception-handler&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.set-exception-handler.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.errorfunc.php">Error Handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.debug-backtrace.php" title="debug_&#8203;backtrace">debug_&#8203;backtrace</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-print-backtrace.php" title="debug_&#8203;print_&#8203;backtrace">debug_&#8203;print_&#8203;backtrace</a>
                        </li>
                                                <li class="">
                            <a href="function.error-clear-last.php" title="error_&#8203;clear_&#8203;last">error_&#8203;clear_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.error-get-last.php" title="error_&#8203;get_&#8203;last">error_&#8203;get_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.error-log.php" title="error_&#8203;log">error_&#8203;log</a>
                        </li>
                                                <li class="">
                            <a href="function.error-reporting.php" title="error_&#8203;reporting">error_&#8203;reporting</a>
                        </li>
                                                <li class="">
                            <a href="function.get-error-handler.php" title="get_&#8203;error_&#8203;handler">get_&#8203;error_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.get-exception-handler.php" title="get_&#8203;exception_&#8203;handler">get_&#8203;exception_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.restore-error-handler.php" title="restore_&#8203;error_&#8203;handler">restore_&#8203;error_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.restore-exception-handler.php" title="restore_&#8203;exception_&#8203;handler">restore_&#8203;exception_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.set-error-handler.php" title="set_&#8203;error_&#8203;handler">set_&#8203;error_&#8203;handler</a>
                        </li>
                                                <li class="current">
                            <a href="function.set-exception-handler.php" title="set_&#8203;exception_&#8203;handler">set_&#8203;exception_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.trigger-error.php" title="trigger_&#8203;error">trigger_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.user-error.php" title="user_&#8203;error">user_&#8203;error</a>
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
