<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: passthru - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.passthru.php">
 <link rel="shorturl" href="https://www.php.net/passthru">
 <link rel="alternate" href="https://www.php.net/passthru" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.exec.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.exec.php">
 <link rel="next" href="https://www.php.net/manual/en/function.proc-close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.passthru.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.passthru.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.passthru.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.passthru.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.passthru.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.passthru.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.passthru.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.passthru.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.passthru.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.passthru.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.passthru.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Execute an external program and display raw output" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: passthru - Manual" />
<meta name="twitter:description" content="Execute an external program and display raw output" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: passthru - Manual" />
<meta itemprop="description" content="Execute an external program and display raw output" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Execute an external program and display raw output" />

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
        <a href="function.proc-close.php">
          proc_close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.exec.php">
          &laquo; exec        </a>
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
            <option value='en/function.passthru.php' selected="selected">English</option>
            <option value='de/function.passthru.php'>German</option>
            <option value='es/function.passthru.php'>Spanish</option>
            <option value='fr/function.passthru.php'>French</option>
            <option value='it/function.passthru.php'>Italian</option>
            <option value='ja/function.passthru.php'>Japanese</option>
            <option value='pt_BR/function.passthru.php'>Brazilian Portuguese</option>
            <option value='ru/function.passthru.php'>Russian</option>
            <option value='tr/function.passthru.php'>Turkish</option>
            <option value='uk/function.passthru.php'>Ukrainian</option>
            <option value='zh/function.passthru.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.passthru" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">passthru</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">passthru</span> &mdash; <span class="dc-title">Execute an external program and display raw output</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.passthru-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>passthru</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$command</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$result_code</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   The <span class="function"><strong>passthru()</strong></span> function is similar to the
   <span class="function"><a href="function.exec.php" class="function">exec()</a></span> function in that it executes a
   <code class="parameter">command</code>. This function
   should be used in place of <span class="function"><a href="function.exec.php" class="function">exec()</a></span> or
   <span class="function"><a href="function.system.php" class="function">system()</a></span> when the output from the Unix command
   is binary data which needs to be passed directly back to the
   browser.  A common use for this is to execute something like the
   pbmplus utilities that can output an image stream directly.  By
   setting the Content-type to <code class="literal">image/gif</code> and
   then calling a pbmplus program to output a gif, you can create
   PHP scripts that output images directly.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.passthru-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">command</code></dt>
     <dd>
      <p class="para">
       The command that will be executed.
      </p>
     </dd>
    
    
     <dt><code class="parameter">result_code</code></dt>
     <dd>
      <p class="para">
       If the <code class="parameter">result_code</code> argument is present, the 
       return status of the Unix command will be placed here.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.passthru-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.passthru-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Will emit an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> if <span class="function"><strong>passthru()</strong></span>
   is unable to execute the <code class="parameter">command</code>.
  </p>
  <p class="para">
   Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if <code class="parameter">command</code>
   is empty or contains null bytes.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.passthru-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.0.0</td>
      <td>
       If <code class="parameter">command</code> is empty or contains null bytes,
       <span class="function"><strong>passthru()</strong></span> now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>.
       Previously it emitted an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> and returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 notes" id="refsect1-function.passthru-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong><p class="para">When allowing user-supplied data to be
passed to this function, use
<span class="function"><a href="function.escapeshellarg.php" class="function">escapeshellarg()</a></span> or <span class="function"><a href="function.escapeshellcmd.php" class="function">escapeshellcmd()</a></span>
to ensure that users cannot trick the system into executing arbitrary
commands.</p></div>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">If a program is started with this function,
in order for it to continue running in the background, the output of the
program must be redirected to a file or another output stream. Failing to do so
will cause PHP to hang until the execution of the program ends.</p></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.passthru-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.exec.php" class="function" rel="rdfs-seeAlso">exec()</a> - Execute an external program</span></li>
    <li><span class="function"><a href="function.system.php" class="function" rel="rdfs-seeAlso">system()</a> - Execute an external program and display the output</span></li>
    <li><span class="function"><a href="function.popen.php" class="function" rel="rdfs-seeAlso">popen()</a> - Opens process file pointer</span></li>
    <li><span class="function"><a href="function.escapeshellcmd.php" class="function" rel="rdfs-seeAlso">escapeshellcmd()</a> - Escape shell metacharacters</span></li>
    <li><a href="language.operators.execution.php" class="link">backtick operator</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/exec/functions/passthru.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.passthru%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.passthru&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.passthru.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">15 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="50540">  <div class="votes">
    <div id="Vu50540">
    <a href="/manual/vote-note.php?id=50540&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50540">
    <a href="/manual/vote-note.php?id=50540&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50540" title="61% like this...">
    17
    </div>
  </div>
  <a href="#50540" class="name">
  <strong class="user"><em>puppy at cyberpuppy dot org</em></strong></a><a class="genanchor" href="#50540"> &para;</a><div class="date" title="2005-03-02 02:50"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50540">
<div class="phpcode"><code><span class="html">Regarding swbrown's comment...you need to use an output buffer if you don't want the data displayed.<br /><br />For example:<br />ob_start();<br />passthru("&lt;i&gt;command&lt;/i&gt;");<br />$var = ob_get_contents();<br />ob_end_clean(); //Use this instead of ob_flush()<br /><br />This gets all the output from the command, and exits without sending any data to stdout.</span></code></div>
  </div>
 </div>
  <div class="note" id="79361">  <div class="votes">
    <div id="Vu79361">
    <a href="/manual/vote-note.php?id=79361&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79361">
    <a href="/manual/vote-note.php?id=79361&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79361" title="60% like this...">
    9
    </div>
  </div>
  <a href="#79361" class="name">
  <strong class="user"><em>jo at durchholz dot org</em></strong></a><a class="genanchor" href="#79361"> &para;</a><div class="date" title="2007-11-22 12:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79361">
<div class="phpcode"><code><span class="html">Note to Paul Giblock: the command *is* run through the shell.<br />You can verify this on any Linux system with<br /><br /><span class="default">&lt;?php<br />passthru </span><span class="keyword">(</span><span class="string">'echo $PATH'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />You'll get the content of the PATH environment variable, not the string $PATH.</span></code></div>
  </div>
 </div>
  <div class="note" id="54108">  <div class="votes">
    <div id="Vu54108">
    <a href="/manual/vote-note.php?id=54108&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54108">
    <a href="/manual/vote-note.php?id=54108&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54108" title="54% like this...">
    7
    </div>
  </div>
  <a href="#54108" class="name">
  <strong class="user"><em>igor at bboy dot ru</em></strong></a><a class="genanchor" href="#54108"> &para;</a><div class="date" title="2005-06-23 01:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54108">
<div class="phpcode"><code><span class="html">If you are using passthru() to download files (for dynamically generated content or something outside webserver root) using similar code:<br /><br />header("Content-Type: application/octet-stream");<br />header("Content-Disposition: attachment; filename=\"myfile.zip\"");<br />header("Content-Length: 11111");<br />passthru("cat myfile.zip",$err);<br /><br />and your download goes fine, but subsequent downloads / link clicks are screwed up, with headers and binary data being all over the website, try putting<br /><br />exit();<br /><br />after the passthrough. This will exit the script after the download is done and will not interfere with any future actions.</span></code></div>
  </div>
 </div>
  <div class="note" id="127699">  <div class="votes">
    <div id="Vu127699">
    <a href="/manual/vote-note.php?id=127699&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127699">
    <a href="/manual/vote-note.php?id=127699&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127699" title="53% like this...">
    1
    </div>
  </div>
  <a href="#127699" class="name">
  <strong class="user"><em>divinity76+spam at gmail dot com</em></strong></a><a class="genanchor" href="#127699"> &para;</a><div class="date" title="2022-10-06 04:32"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127699">
<div class="phpcode"><code><span class="html">if you have problems with passthru("docker-compose ...bash") losing interactive shell size information, try using proc_open instead, for some reason docker-compose bash knows the size of the outer terminal when i use use proc_open, but loses that information when i use passthru,<br /><br />eg i replaced<br /><span class="default">&lt;?php<br />passthru</span><span class="keyword">(</span><span class="string">"docker-compose -f docker-compose.yml bash"</span><span class="keyword">,</span><span class="default">$ret</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>with<br /><span class="default">&lt;?php<br />$empty1</span><span class="keyword">=array();<br /></span><span class="default">$empty2</span><span class="keyword">=array();<br /></span><span class="default">$proc</span><span class="keyword">=</span><span class="default">proc_open</span><span class="keyword">(</span><span class="string">"docker-compose -f docker-compose.yml bash"</span><span class="keyword">,</span><span class="default">$empty1</span><span class="keyword">,</span><span class="default">$empty2 </span><span class="keyword">);<br /></span><span class="default">$ret </span><span class="keyword">= </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$proc</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />and suddenly docker-compose bash knew my terminal size :)</span></code></div>
  </div>
 </div>
  <div class="note" id="48174">  <div class="votes">
    <div id="Vu48174">
    <a href="/manual/vote-note.php?id=48174&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48174">
    <a href="/manual/vote-note.php?id=48174&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48174" title="52% like this...">
    1
    </div>
  </div>
  <a href="#48174" class="name">
  <strong class="user"><em>Zak Estrada</em></strong></a><a class="genanchor" href="#48174"> &para;</a><div class="date" title="2004-12-14 08:21"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48174">
<div class="phpcode"><code><span class="html">Remember to use the full path (IE '/usr/local/bin/foo' instead of 'foo') when using passthru, otherwise you'll get an exit code of 127 (command not found).</span></code></div>
  </div>
 </div>
  <div class="note" id="59507">  <div class="votes">
    <div id="Vu59507">
    <a href="/manual/vote-note.php?id=59507&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59507">
    <a href="/manual/vote-note.php?id=59507&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59507" title="52% like this...">
    1
    </div>
  </div>
  <a href="#59507" class="name">
  <strong class="user"><em>Stuart Eve</em></strong></a><a class="genanchor" href="#59507"> &para;</a><div class="date" title="2005-12-08 11:24"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59507">
<div class="phpcode"><code><span class="html">I dunno if anyone else might find this useful, but when I was trying to use the passthru() command on Suse9.3 I was having no success with the command:<br /><br />$command = 'gdal_translate blahahahaha';<br /><br />passthru($command);<br /><br />It only worked once I put:<br /><br />$command = '/usr/bin/local/gdal_translate blalalala';<br /><br />passthru($command);</span></code></div>
  </div>
 </div>
  <div class="note" id="127611">  <div class="votes">
    <div id="Vu127611">
    <a href="/manual/vote-note.php?id=127611&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127611">
    <a href="/manual/vote-note.php?id=127611&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127611" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127611" class="name">
  <strong class="user"><em>mail at dtrasbo dot dk</em></strong></a><a class="genanchor" href="#127611"> &para;</a><div class="date" title="2022-09-12 09:26"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127611">
<div class="phpcode"><code><span class="html">To capture the output of a command in a string without using output buffer functions, use shell_exec()</span></code></div>
  </div>
 </div>
  <div class="note" id="124165">  <div class="votes">
    <div id="Vu124165">
    <a href="/manual/vote-note.php?id=124165&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124165">
    <a href="/manual/vote-note.php?id=124165&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124165" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124165" class="name">
  <strong class="user"><em>tox at novasonica dot com</em></strong></a><a class="genanchor" href="#124165"> &para;</a><div class="date" title="2019-09-03 10:57"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124165">
<div class="phpcode"><code><span class="html">I was trying to implement a system that allows running arbitrary CLI commands with parameters, but I kept running into the issues with user prompts from the command as they would let execution hang. The solution is simple: just use passthru() as it outputs everything and correctly handles user prompts out of the box.</span></code></div>
  </div>
 </div>
  <div class="note" id="101148">  <div class="votes">
    <div id="Vu101148">
    <a href="/manual/vote-note.php?id=101148&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101148">
    <a href="/manual/vote-note.php?id=101148&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101148" title="50% like this...">
    0
    </div>
  </div>
  <a href="#101148" class="name">
  <strong class="user"><em>myselfasunder at gmail dot com dot dfvuks</em></strong></a><a class="genanchor" href="#101148"> &para;</a><div class="date" title="2010-11-29 01:00"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101148">
<div class="phpcode"><code><span class="html">PHP's program-execution commands fail miserably when it comes to STDERR, and the proc_open() command doesn't work all that consistently in non-blocking mode under Windows.<br /><br />This command, although useful, is no different. To form a mechanism that will see/capture both STDOUT and STDERR output, pipe the command to the 'tee' command (which can be found for Windows), and wrap the whole thing in output buffering.<br /><br />Dustin Oprea</span></code></div>
  </div>
 </div>
  <div class="note" id="50759">  <div class="votes">
    <div id="Vu50759">
    <a href="/manual/vote-note.php?id=50759&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50759">
    <a href="/manual/vote-note.php?id=50759&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50759" title="50% like this...">
    0
    </div>
  </div>
  <a href="#50759" class="name">
  <strong class="user"><em>sarel dot w at envent dot co dot za</em></strong></a><a class="genanchor" href="#50759"> &para;</a><div class="date" title="2005-03-08 11:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50759">
<div class="phpcode"><code><span class="html">Zak Estrada<br />14-Dec-2004 11:21 <br />Remember to use the full path (IE '/usr/local/bin/foo' instead of 'foo') when using passthru, otherwise you'll get an exit code of 127 (command not found).<br /><br />Remember, you'll also get this error if your file does not have executable permission.</span></code></div>
  </div>
 </div>
  <div class="note" id="32662">  <div class="votes">
    <div id="Vu32662">
    <a href="/manual/vote-note.php?id=32662&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32662">
    <a href="/manual/vote-note.php?id=32662&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32662" title="50% like this...">
    0
    </div>
  </div>
  <a href="#32662" class="name">
  <strong class="user"><em>swbrown at ucsd dot edu</em></strong></a><a class="genanchor" href="#32662"> &para;</a><div class="date" title="2003-06-03 08:41"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32662">
<div class="phpcode"><code><span class="html">passthru() seems absolutely determined to buffer output no matter what you do, even with ob_implicit_flush().  The solution seems to be to use popen() instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="84773">  <div class="votes">
    <div id="Vu84773">
    <a href="/manual/vote-note.php?id=84773&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84773">
    <a href="/manual/vote-note.php?id=84773&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84773" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#84773" class="name">
  <strong class="user"><em>Chroot</em></strong></a><a class="genanchor" href="#84773"> &para;</a><div class="date" title="2008-07-29 09:48"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84773">
<div class="phpcode"><code><span class="html">If you have chrooted apache and php, you will also want to put /bin/sh into the chrooted environment. Otherwise, the exec() or passthru() will not function properly, and will produce error code 127, file not found.</span></code></div>
  </div>
 </div>
  <div class="note" id="60314">  <div class="votes">
    <div id="Vu60314">
    <a href="/manual/vote-note.php?id=60314&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60314">
    <a href="/manual/vote-note.php?id=60314&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60314" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#60314" class="name">
  <strong class="user"><em>nuker at list dot ru</em></strong></a><a class="genanchor" href="#60314"> &para;</a><div class="date" title="2006-01-03 05:51"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60314">
<div class="phpcode"><code><span class="html">I wrote function, that gets proxy server value from the Internet Explorer (from<br />registry). It was tested in Windows XP Pro<br /><br />(Sorry for my English)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getProxyFromIE</span><span class="keyword">()<br />{<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"reg query \"HKEY_CURRENT_USER\Software\Microsoft"</span><span class="keyword">.<br />        </span><span class="string">"\Windows\CurrentVersion\Internet Settings\" /v ProxyEnable"</span><span class="keyword">,<br />        </span><span class="default">$proxyenable</span><span class="keyword">,</span><span class="default">$proxyenable_status</span><span class="keyword">);<br /><br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"reg query \"HKEY_CURRENT_USER\Software\Microsoft"</span><span class="keyword">.<br />        </span><span class="string">"\Windows\CurrentVersion\Internet Settings\" /v ProxyServer"</span><span class="keyword">,<br />        </span><span class="default">$proxyserver</span><span class="keyword">);<br /><br />        if(</span><span class="default">$proxyenable_status</span><span class="keyword">!=</span><span class="default">0</span><span class="keyword">)<br />        return </span><span class="default">false</span><span class="keyword">; </span><span class="comment">#Can't access the registry! Very very bad...<br />        </span><span class="keyword">else<br />        {<br />        </span><span class="default">$enabled</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$proxyenable</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">],-</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />        if(</span><span class="default">$enabled</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">)<br />        return </span><span class="default">false</span><span class="keyword">;<br />        else<br />        {<br />        </span><span class="default">$proxy</span><span class="keyword">=</span><span class="default">ereg_replace</span><span class="keyword">(</span><span class="string">"^[ \t]{1,10}ProxyServer\tREG_SZ[ \t]{1,20}"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,<br />        </span><span class="default">$proxyserver</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">]);<br /><br />        if(</span><span class="default">ereg</span><span class="keyword">(</span><span class="string">"[\=\;]"</span><span class="keyword">,</span><span class="default">$proxy</span><span class="keyword">))<br />        {<br />             </span><span class="default">$proxy</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">";"</span><span class="keyword">,</span><span class="default">$proxy</span><span class="keyword">);<br />             foreach(</span><span class="default">$proxy </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)<br />             {<br />                   if(</span><span class="default">ereg</span><span class="keyword">(</span><span class="string">"http"</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">))<br />                   {<br />                   </span><span class="default">$proxy</span><span class="keyword">=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"http="</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">);<br />                   break;<br />                   }<br />             }<br />             if(@!</span><span class="default">ereg</span><span class="keyword">(</span><span class="string">"^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\:"</span><span class="keyword">.<br />             </span><span class="string">"[0-9]{1,5}$"</span><span class="keyword">,</span><span class="default">$proxy</span><span class="keyword">))<br />             return </span><span class="default">false</span><span class="keyword">;<br />             else<br />             return </span><span class="default">$proxy</span><span class="keyword">;<br />        }<br />        else<br />        return </span><span class="default">$proxy</span><span class="keyword">;<br />        }<br /><br />        }<br />}<br /></span><span class="default">?&gt;<br /></span>Note, that this function returns FALSE if proxy is disabled in Internet<br />Explorer. This function returns ONLY HTTP proxy server.<br /><br />Usage:<br /><span class="default">&lt;?php<br />$proxy</span><span class="keyword">=</span><span class="default">getProxyFromIE</span><span class="keyword">();<br />if(!</span><span class="default">$proxy</span><span class="keyword">)<br />echo </span><span class="string">"Can't get proxy!"</span><span class="keyword">;<br />else<br />echo </span><span class="default">$proxy</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="18647">  <div class="votes">
    <div id="Vu18647">
    <a href="/manual/vote-note.php?id=18647&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18647">
    <a href="/manual/vote-note.php?id=18647&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18647" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#18647" class="name">
  <strong class="user"><em>kpierre at fit dot edu</em></strong></a><a class="genanchor" href="#18647"> &para;</a><div class="date" title="2002-01-30 07:35"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18647">
<div class="phpcode"><code><span class="html">The documention does not mention that passthru() will only display standard output and not standard error.<br /><br />If you are running a script you can pipe the STDERR to STDOUT by doing <br /><br />exec 2&gt;&amp;1<br /><br />Eg. the script below will actually print something with the passthru() function...<br /><br />#!/bin/sh<br />exec 2&gt;&amp;1<br />ulimit -t 60<br />cat nosuchfile.txt</span></code></div>
  </div>
 </div>
  <div class="note" id="55643">  <div class="votes">
    <div id="Vu55643">
    <a href="/manual/vote-note.php?id=55643&amp;page=function.passthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55643">
    <a href="/manual/vote-note.php?id=55643&amp;page=function.passthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55643" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#55643" class="name">
  <strong class="user"><em>stuartc1 at NOSPAM dot hotmail dot com</em></strong></a><a class="genanchor" href="#55643"> &para;</a><div class="date" title="2005-08-09 07:52"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55643">
<div class="phpcode"><code><span class="html">Thought it might beuseful to note the passthru seems to supress error messages whilst being run in Dos on Windows (test on NT).<br /><br />To show FULL raw output including errors, use system().</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.passthru&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.passthru.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
