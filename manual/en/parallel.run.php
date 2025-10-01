<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: parallel\run - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/parallel.run.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/parallel.run.php">
 <link rel="alternate" href="https://www.php.net/manual/en/parallel.run.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/functional.parallel.php">
 <link rel="prev" href="https://www.php.net/manual/en/parallel.bootstrap.php">
 <link rel="next" href="https://www.php.net/manual/en/class.parallel-runtime.php">

 <link rel="alternate" href="https://www.php.net/manual/en/parallel.run.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/parallel.run.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/parallel.run.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/parallel.run.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/parallel.run.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/parallel.run.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/parallel.run.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/parallel.run.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/parallel.run.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/parallel.run.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/parallel.run.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Execution" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: parallel\run - Manual" />
<meta name="twitter:description" content="Execution" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: parallel\run - Manual" />
<meta itemprop="description" content="Execution" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Execution" />

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
        <a href="class.parallel-runtime.php">
          parallel\Runtime &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="parallel.bootstrap.php">
          &laquo; parallel\bootstrap        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.parallel.php'>parallel</a></li>      <li><a href='functional.parallel.php'>Functional API</a></li>      </ul>
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
            <option value='en/parallel.run.php' selected="selected">English</option>
            <option value='de/parallel.run.php'>German</option>
            <option value='es/parallel.run.php'>Spanish</option>
            <option value='fr/parallel.run.php'>French</option>
            <option value='it/parallel.run.php'>Italian</option>
            <option value='ja/parallel.run.php'>Japanese</option>
            <option value='pt_BR/parallel.run.php'>Brazilian Portuguese</option>
            <option value='ru/parallel.run.php'>Russian</option>
            <option value='tr/parallel.run.php'>Turkish</option>
            <option value='uk/parallel.run.php'>Ukrainian</option>
            <option value='zh/parallel.run.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="parallel.run" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">parallel\run</h1>
  <p class="verinfo">(1.0.0)</p><p class="refpurpose"><span class="refname">parallel\run</span> &mdash; <span class="dc-title">Execution</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-parallel.run-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>parallel\run</strong></span>(<span class="methodparam"><span class="type"><a href="class.closure.php" class="type Closure">Closure</a></span> <code class="parameter">$task</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type">Future</span></span></div>

  <p class="para rdfs-comment">
   Shall schedule <code class="parameter">task</code> for execution in parallel.
  </p>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>parallel\run</strong></span>(<span class="methodparam"><span class="type"><a href="class.closure.php" class="type Closure">Closure</a></span> <code class="parameter">$task</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$argv</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type">Future</span></span></div>

  <p class="para rdfs-comment">
   Shall schedule <code class="parameter">task</code> for execution in parallel, passing <code class="parameter">argv</code> at execution time.
  </p>
 </div>


 <div class="refsect1 scheduling-characteristics" id="refsect1-parallel.run-scheduling-characteristics">
  <h3 class="title">Automatic Scheduling</h3>
  <p class="para">
   If a <span class="classname"><a href="class.parallel-runtime.php" class="classname">\parallel\Runtime</a></span> internally created and cached by a previous call to <span class="function"><strong>parallel\run()</strong></span> is idle, 
   it will be used to execute the task. If no <span class="classname"><a href="class.parallel-runtime.php" class="classname">\parallel\Runtime</a></span> is idle parallel will create and cache a 
   <span class="classname"><a href="class.parallel-runtime.php" class="classname">\parallel\Runtime</a></span>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="classname"><a href="class.parallel-runtime.php" class="classname">\parallel\Runtime</a></span> objects created by the programmer are not used for automatic scheduling.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-parallel.run-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">task</code></dt>
    <dd>
     <p class="para">
      A <span class="classname"><a href="class.closure.php" class="classname">Closure</a></span> with specific characteristics.
     </p>
    </dd>
   
   
    <dt><code class="parameter">argv</code></dt>
    <dd>
     <p class="para">
      An <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of arguments with specific characteristics to be passed to <code class="parameter">task</code> at execution time.
     </p>
    </dd>
   
  </dl>
 </div>

 <div class="refsect1 closure-characteristics" id="refsect1-parallel.run-closure-characteristics">
 <h3 class="title">Task Characteristics</h3>
 <p class="para">
  Closures scheduled for parallel execution must not:
  <ul class="simplelist">
   <li>accept or return by reference</li>
   <li>accept or return internal objects (see notes)</li>
   <li>execute a limited set of instructions</li>
  </ul>
 </p>
 <p class="para">
  Instructions prohibited in Closures intended for parallel execution are:
  <ul class="simplelist">
   <li>yield</li>
   <li>use by-reference</li>
   <li>declare class</li>
   <li>declare named function</li>
  </ul>
 </p>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   Nested closures may yield or use by-reference, but must not contain class or named function declarations.
  </p>
 </p></blockquote>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   No instructions are prohibited in the files which the task may include.
  </p>
 </p></blockquote>
 </div>

 <div class="refsect1 argv-characteristics" id="refsect1-parallel.run-argv-characteristics">
 <h3 class="title">Arguments Characteristics</h3>
 <p class="para">
  Arguments must not:
  <ul class="simplelist">
   <li>contain references</li>
   <li>contain resources</li>
   <li>contain internal objects (see notes)</li>
  </ul>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    In the case of file stream resources, the resource will be cast to the file descriptor and passed as <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> where possible, this is unsupported on Windows.
   </p>
  </p></blockquote>
 </p>
 </div>

 <div class="refsect1 object-characteristics" id="refsect1-parallel.run-object-characteristics">
  <h3 class="title">Internal Objects Notes</h3>
  <p class="para">
   Internal objects generally use a custom structure which cannot be copied by value safely, PHP currently lacks the mechanics to do this (without serialization) 
   and so only objects that do not use a custom structure may be shared.
  </p>
  <p class="para">
   Some internal objects do not use a custom structure, for example <span class="classname"><a href="class.parallel-events-event.php" class="classname">parallel\Events\Event</a></span> and so may be shared.
  </p>
  <p class="para">
   Closures are a special kind of internal object and support being copied by value, and so may be shared.
  </p>
  <p class="para">
   Channels are central to writing parallel code and support concurrent access and execution by necessity, and so may be shared.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    A user class that extends an internal class may use a custom structure as defined by the internal class, in which case they cannot be copied by value safely, 
    and so may not be shared.
   </p>
  </div>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-parallel.run-returnvalues">
  <h3 class="title">Return Values</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    The return <span class="type"><a href="class.parallel-future.php" class="type parallel\Future">parallel\Future</a></span> must not be ignored when the task contains a return or throw statement.
   </p>
  </div>
 </div>

 <div class="refsect1 exceptions" id="refsect1-parallel.run-exceptions">
  <h3 class="title">Exceptions</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Shall throw <span class="type">parallel\Runtime\Error\Closed</span> if <span class="type"><a href="class.parallel-runtime.php" class="type parallel\Runtime">parallel\Runtime</a></span> was closed.
   </p>
  </div>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Shall throw <span class="type">parallel\Runtime\Error\IllegalFunction</span> if <code class="parameter">task</code> is a closure created from an internal function.
   </p>
  </div>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Shall throw <span class="type">parallel\Runtime\Error\IllegalInstruction</span> if <code class="parameter">task</code> contains illegal instructions.
   </p>
  </div>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Shall throw <span class="type">parallel\Runtime\Error\IllegalParameter</span> if <code class="parameter">task</code> accepts or <code class="parameter">argv</code> contains illegal variables.
   </p>
  </div>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Shall throw <span class="type">parallel\Runtime\Error\IllegalReturn</span> if <code class="parameter">task</code> returns illegally.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-parallel.run-seealso">
   <h3 class="title">See Also</h3>
   <ul class="simplelist">
    <li><a href="parallel-runtime.run.php" class="xref">parallel\Runtime::run</a></li>
   </ul>
  </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/parallel/functions/parallel.run.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fparallel.run%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=parallel.run&amp;repo=en&amp;redirect=https://www.php.net/manual/en/parallel.run.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124742">  <div class="votes">
    <div id="Vu124742">
    <a href="/manual/vote-note.php?id=124742&amp;page=parallel.run&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124742">
    <a href="/manual/vote-note.php?id=124742&amp;page=parallel.run&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124742" title="90% like this...">
    24
    </div>
  </div>
  <a href="#124742" class="name">
  <strong class="user"><em>john_2885 at yahoo dot com</em></strong></a><a class="genanchor" href="#124742"> &para;</a><div class="date" title="2020-02-20 05:35"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124742">
<div class="phpcode"><code><span class="html">Here's a more substantial example of how to use the run functional API.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*********************************************<br /> * Sample parallel functional API<br /> * <br /> * Scenario<br /> * -------------------------------------------<br /> * Given a large number of rows of<br /> * data to process, divide the work amongst<br /> * a set of workers.  Each worker is responsible<br /> * for finishing their assigned task.<br /> * <br /> * In the code below, assume we have arbitrary <br /> * start and end IDs (rows) - we will try to<br /> * divide the number of IDs (rows) evenly<br /> * across 8 workers.  The workers will get the<br /> * following batches to process to completion:<br /> *<br /> * Total number of IDs (rows): 1371129<br /> * Each worker will get 171392 IDs to process<br /> *<br /> * Worker 1: IDs from 11001 to 182393<br /> * Worker 2: IDs from 182393 to 353785<br /> * Worker 3: IDs from 353785 to 525177<br /> * Worker 4: IDs from 525177 to 696569<br /> * Worker 5: IDs from 696569 to 867961<br /> * Worker 6: IDs from 867961 to 1039353<br /> * Worker 7: IDs from 1039353 to 1210745<br /> * Worker 8: IDs from 1210745 to 1382130<br /> *<br /> * Each worker then processes 5000 rows at a time<br /> * until they are done with their assigned work<br /> *<br /> *********************************************/<br /><br /></span><span class="keyword">use </span><span class="default">\parallel</span><span class="keyword">\{</span><span class="default">Runtime</span><span class="keyword">, </span><span class="default">Future</span><span class="keyword">, </span><span class="default">Channel</span><span class="keyword">, </span><span class="default">Events</span><span class="keyword">};<br /><br /></span><span class="default">$minId </span><span class="keyword">= </span><span class="default">11001</span><span class="keyword">;<br /></span><span class="default">$maxId </span><span class="keyword">= </span><span class="default">1382130</span><span class="keyword">;<br /></span><span class="default">$workers </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">;<br /></span><span class="default">$totalIds </span><span class="keyword">= </span><span class="default">$maxId </span><span class="keyword">- </span><span class="default">$minId</span><span class="keyword">;<br /></span><span class="comment">// Try to divide IDs evenly across the number of workers<br /></span><span class="default">$batchSize </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$totalIds </span><span class="keyword">/ </span><span class="default">$workers</span><span class="keyword">);<br /></span><span class="comment">// The last batch gets whatever is left over<br /></span><span class="default">$lastBatch </span><span class="keyword">= </span><span class="default">$totalIds </span><span class="keyword">% </span><span class="default">$batchSize</span><span class="keyword">;<br /></span><span class="comment">// The number of IDs (rows) to divide the overall<br />// task into sub-batches <br /></span><span class="default">$rowsToFetch </span><span class="keyword">= </span><span class="default">5000</span><span class="keyword">;<br /><br />print </span><span class="string">"Total IDs: " </span><span class="keyword">. </span><span class="default">$totalIds </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="string">"Batch Size: " </span><span class="keyword">. </span><span class="default">$batchSize </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="string">"Last Batch: " </span><span class="keyword">. </span><span class="default">$lastBatch </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">$producer </span><span class="keyword">= function(</span><span class="default">int $worker</span><span class="keyword">, </span><span class="default">int $startId</span><span class="keyword">, </span><span class="default">int $endId</span><span class="keyword">, </span><span class="default">int $fetchSize</span><span class="keyword">) {<br />    </span><span class="default">$tempMinId </span><span class="keyword">= </span><span class="default">$startId</span><span class="keyword">;<br />    </span><span class="default">$tempMaxId </span><span class="keyword">= </span><span class="default">$tempMinId </span><span class="keyword">+ </span><span class="default">$fetchSize</span><span class="keyword">;<br />    </span><span class="default">$fetchCount </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    <br />    print </span><span class="string">"Worker " </span><span class="keyword">. </span><span class="default">$worker </span><span class="keyword">. </span><span class="string">" working on IDs from " </span><span class="keyword">. </span><span class="default">$startId </span><span class="keyword">. </span><span class="string">" to " </span><span class="keyword">. </span><span class="default">$endId </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    <br />    while(</span><span class="default">$tempMinId </span><span class="keyword">&lt; </span><span class="default">$endId</span><span class="keyword">) {<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$tempMinId</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$tempMaxId</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />            </span><span class="default">$usleep </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">500000</span><span class="keyword">, </span><span class="default">1000000</span><span class="keyword">);<br />            </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">$usleep</span><span class="keyword">);<br />            print </span><span class="string">"Worker " </span><span class="keyword">. </span><span class="default">$worker </span><span class="keyword">.  </span><span class="string">" finished batch " </span><span class="keyword">. </span><span class="default">$fetchCount </span><span class="keyword">. </span><span class="string">" from ID " </span><span class="keyword">. </span><span class="default">$tempMinId </span><span class="keyword">. </span><span class="string">" to " </span><span class="keyword">. </span><span class="default">$tempMaxId </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />            </span><span class="comment">// Need to explicitly break out of the for loop once complete or else it will forever process only the first sub-batch<br />            </span><span class="keyword">break;<br />        }<br />        <br />        </span><span class="comment">// Now we move on to the next sub-batch for this worker<br />        </span><span class="default">$tempMinId </span><span class="keyword">= </span><span class="default">$tempMaxId</span><span class="keyword">;<br />        </span><span class="default">$tempMaxId </span><span class="keyword">= </span><span class="default">$tempMinId </span><span class="keyword">+ </span><span class="default">$fetchSize</span><span class="keyword">;<br />        if(</span><span class="default">$tempMaxId </span><span class="keyword">&gt; </span><span class="default">$endId</span><span class="keyword">) {<br />            </span><span class="default">$tempMaxId </span><span class="keyword">= </span><span class="default">$endId</span><span class="keyword">;<br />        }<br />        </span><span class="comment">// Introduce some timing randomness<br />        </span><span class="default">$sleep </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">);<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$sleep</span><span class="keyword">);<br />        </span><span class="default">$fetchCount</span><span class="keyword">++;<br />    }<br />    <br />    </span><span class="comment">// This worker has completed their entire batch<br />    </span><span class="keyword">print </span><span class="string">"Worker " </span><span class="keyword">. </span><span class="default">$worker </span><span class="keyword">.  </span><span class="string">" finished\n"</span><span class="keyword">;<br />    <br />};<br /><br /></span><span class="comment">// Create our workers and have them start working on their task<br />// In this case, it's a set of 171392 IDs to process<br /></span><span class="keyword">for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$workers</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$startId </span><span class="keyword">= </span><span class="default">$minId </span><span class="keyword">+ (</span><span class="default">$i </span><span class="keyword">* </span><span class="default">$batchSize</span><span class="keyword">);<br />    </span><span class="default">$endId </span><span class="keyword">= </span><span class="default">$startId </span><span class="keyword">+ </span><span class="default">$batchSize</span><span class="keyword">;<br />    if(</span><span class="default">$i </span><span class="keyword">== (</span><span class="default">$workers </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">)) {<br />        </span><span class="default">$endId </span><span class="keyword">= </span><span class="default">$maxId</span><span class="keyword">;<br />    }<br />    </span><span class="default">\parallel\run</span><span class="keyword">(</span><span class="default">$producer</span><span class="keyword">, array((</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">), </span><span class="default">$startId</span><span class="keyword">, </span><span class="default">$endId</span><span class="keyword">, </span><span class="default">$rowsToFetch</span><span class="keyword">));<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125792">  <div class="votes">
    <div id="Vu125792">
    <a href="/manual/vote-note.php?id=125792&amp;page=parallel.run&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125792">
    <a href="/manual/vote-note.php?id=125792&amp;page=parallel.run&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125792" title="90% like this...">
    9
    </div>
  </div>
  <a href="#125792" class="name">
  <strong class="user"><em>anonymous user</em></strong></a><a class="genanchor" href="#125792"> &para;</a><div class="date" title="2021-02-07 02:49"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125792">
<div class="phpcode"><code><span class="html">Although function declaration is not allowed inside thread exec code, include is allowed. So if we want to declare a function, we could write another file that contain the function and include it.<br /># main.php<br /><span class="default">&lt;?php<br />$runtime </span><span class="keyword">= new </span><span class="default">parallel\Runtime </span><span class="keyword">();<br /></span><span class="default">$future </span><span class="keyword">= </span><span class="default">$runtime</span><span class="keyword">-&gt;</span><span class="default">run </span><span class="keyword">( function () {<br />    </span><span class="default">$future </span><span class="keyword">= </span><span class="default">$runtime</span><span class="keyword">-&gt;</span><span class="default">run </span><span class="keyword">( function () {<br />        include </span><span class="string">"included.php"</span><span class="keyword">;<br />        return </span><span class="default">add </span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />    }, [ ] );<br />echo </span><span class="default">$future</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">();<br /></span><span class="comment"># output: 4<br /># included.php<br /></span><span class="keyword">&lt;?</span><span class="default">php<br /></span><span class="keyword">function </span><span class="default">add</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">){<br />    return </span><span class="default">$a </span><span class="keyword">+ </span><span class="default">$b</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126581">  <div class="votes">
    <div id="Vu126581">
    <a href="/manual/vote-note.php?id=126581&amp;page=parallel.run&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126581">
    <a href="/manual/vote-note.php?id=126581&amp;page=parallel.run&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126581" title="66% like this...">
    3
    </div>
  </div>
  <a href="#126581" class="name">
  <strong class="user"><em>Thierry Kauffmann</em></strong></a><a class="genanchor" href="#126581"> &para;</a><div class="date" title="2021-11-12 10:07"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126581">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Sample parralel functional API<br /> * using a generator instead of a static list of items to process<br /> * <br /> * Items to process in parallel come from a generator<br /> * It could be anything : e.g fetch a mysql array, a DirectoryIterator...<br /> * Thus the number of items to process in parallel is NOT known in advance<br /> * <br /> * This algorithm attributes items to each parallel thread dynamically<br /> * As soon as a thread has finished working<br /> * It is assigned a new item to process<br /> * until all items are processed (generator closes)<br /> * <br /> * In this example we process 50 items in 5 parallel threads<br /> * It produces output in this form (output changes at each run) :<br /> * <br /> * ThreadId: 1 =&gt; Item: 1 (Start)<br /> * ThreadId: 2 =&gt; Item: 2 (Start)<br /> * ThreadId: 3 =&gt; Item: 3 (Start)<br /> * ThreadId: 4 =&gt; Item: 4 (Start)<br /> * ThreadId: 5 =&gt; Item: 5 (Start)<br /> * ThreadId: 5 =&gt; Item: 5 Sleep: 3s (End)<br /> * ThreadId: 5 =&gt; Item: 6 (Start)<br /> * ThreadId: 3 =&gt; Item: 3 Sleep: 4s (End)<br /> * ThreadId: 3 =&gt; Item: 7 (Start)<br /> * ThreadId: 2 =&gt; Item: 2 Sleep: 6s (End)<br /> * ThreadId: 2 =&gt; Item: 8 (Start)<br /> * ...<br /> * ThreadId: 4 =&gt; Item: 44 Sleep: 6s (End)<br /> * ThreadId: 4 =&gt; Item: 49 (Start)<br /> * ThreadId: 3 =&gt; Item: 46 Sleep: 5s (End)<br /> * ThreadId: 3 =&gt; Item: 50 (Start)<br /> * ThreadId: 2 =&gt; Item: 43 Sleep: 9s (End)<br /> * Destroy ThreadId: 2<br /> * ThreadId: 1 =&gt; Item: 47 Sleep: 5s (End)<br /> * Destroy ThreadId: 1<br /> * ThreadId: 4 =&gt; Item: 49 Sleep: 7s (End)<br /> * Destroy ThreadId: 4<br /> * ThreadId: 5 =&gt; Item: 48 Sleep: 10s (End)<br /> * Destroy ThreadId: 5<br /> * ThreadId: 3 =&gt; Item: 50 Sleep: 10s (End)<br /> * Destroy ThreadId: 3<br /> */<br /><br /></span><span class="keyword">use </span><span class="default">\parallel</span><span class="keyword">\{</span><span class="default">Runtime</span><span class="keyword">, </span><span class="default">Future</span><span class="keyword">, </span><span class="default">Channel</span><span class="keyword">, </span><span class="default">Events</span><span class="keyword">};<br /><br /></span><span class="comment">// Generate list of items to process with a generator<br /></span><span class="keyword">function </span><span class="default">generator</span><span class="keyword">(</span><span class="default">int $item_count</span><span class="keyword">) {<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$item_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        yield </span><span class="default">$i</span><span class="keyword">;<br />    }<br />}<br /><br />function </span><span class="default">testConcurrency</span><span class="keyword">(</span><span class="default">int $concurrency</span><span class="keyword">, </span><span class="default">int $item_count</span><span class="keyword">) {<br /><br />    </span><span class="default">$generator </span><span class="keyword">= </span><span class="default">generator</span><span class="keyword">(</span><span class="default">$item_count</span><span class="keyword">);<br /><br />    </span><span class="comment">// Function executing in each thread. Have a snap for a random time for example !<br />    </span><span class="default">$producer </span><span class="keyword">= function (</span><span class="default">int $item_id</span><span class="keyword">) {<br />        </span><span class="default">$seconds </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$seconds</span><span class="keyword">);<br />        return [</span><span class="string">'item_id' </span><span class="keyword">=&gt; </span><span class="default">$item_id</span><span class="keyword">, </span><span class="string">'sleep_seconds' </span><span class="keyword">=&gt; </span><span class="default">$seconds</span><span class="keyword">];<br />    };<br /><br />    </span><span class="comment">// Fill up threads with initial 'inactive' state<br />    </span><span class="default">$threads </span><span class="keyword">= </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$concurrency</span><span class="keyword">, [</span><span class="string">'is_active' </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">]);<br /><br />    while (</span><span class="default">true</span><span class="keyword">) {<br />        </span><span class="comment">// Loop through threads until all threads are finished<br />        </span><span class="keyword">foreach (</span><span class="default">$threads </span><span class="keyword">as </span><span class="default">$thread_id </span><span class="keyword">=&gt; </span><span class="default">$thread</span><span class="keyword">) {<br />            if (!</span><span class="default">$thread</span><span class="keyword">[</span><span class="string">'is_active'</span><span class="keyword">] and </span><span class="default">$generator</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">()) {<br />                </span><span class="comment">// Thread is inactive and generator still has values : run something in the thread<br />                </span><span class="default">$item_id </span><span class="keyword">= </span><span class="default">$generator</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">();<br />                </span><span class="default">$threads</span><span class="keyword">[</span><span class="default">$thread_id</span><span class="keyword">][</span><span class="string">'run'</span><span class="keyword">] = </span><span class="default">\parallel\run</span><span class="keyword">(</span><span class="default">$producer</span><span class="keyword">, [</span><span class="default">$item_id</span><span class="keyword">]);<br />                echo </span><span class="string">"ThreadId: </span><span class="default">$thread_id</span><span class="string"> =&gt; Item: </span><span class="default">$item_id</span><span class="string"> (Start)\n"</span><span class="keyword">;<br />                </span><span class="default">$threads</span><span class="keyword">[</span><span class="default">$thread_id</span><span class="keyword">][</span><span class="string">'is_active'</span><span class="keyword">] = </span><span class="default">true</span><span class="keyword">;<br />                </span><span class="default">$generator</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />            } elseif (!isset(</span><span class="default">$threads</span><span class="keyword">[</span><span class="default">$thread_id</span><span class="keyword">][</span><span class="string">'run'</span><span class="keyword">])) {<br />                </span><span class="comment">// Destroy supplementary threads in case generator closes sooner than number of threads<br />                </span><span class="keyword">echo </span><span class="string">"Destroy ThreadId: </span><span class="default">$thread_id</span><span class="string">\n"</span><span class="keyword">;<br />                unset(</span><span class="default">$threads</span><span class="keyword">[</span><span class="default">$thread_id</span><span class="keyword">]);<br />            } elseif (</span><span class="default">$threads</span><span class="keyword">[</span><span class="default">$thread_id</span><span class="keyword">][</span><span class="string">'run'</span><span class="keyword">]-&gt;</span><span class="default">done</span><span class="keyword">()) {<br />                </span><span class="comment">// Thread finished. Get results<br />                </span><span class="default">$item </span><span class="keyword">= </span><span class="default">$threads</span><span class="keyword">[</span><span class="default">$thread_id</span><span class="keyword">][</span><span class="string">'run'</span><span class="keyword">]-&gt;</span><span class="default">value</span><span class="keyword">();<br />                echo </span><span class="string">"ThreadId: </span><span class="default">$thread_id</span><span class="string"> =&gt; Item: </span><span class="keyword">{</span><span class="default">$item</span><span class="keyword">[</span><span class="string">'item_id'</span><span class="keyword">]}</span><span class="string"> Sleep: </span><span class="keyword">{</span><span class="default">$item</span><span class="keyword">[</span><span class="string">'sleep_seconds'</span><span class="keyword">]}</span><span class="string">s (End)\n"</span><span class="keyword">;<br /><br />                if (!</span><span class="default">$generator</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">()) {<br />                    </span><span class="comment">// Generator is closed then destroy thread<br />                    </span><span class="keyword">echo </span><span class="string">"Destroy ThreadId: </span><span class="default">$thread_id</span><span class="string">\n"</span><span class="keyword">;<br />                    unset(</span><span class="default">$threads</span><span class="keyword">[</span><span class="default">$thread_id</span><span class="keyword">]);<br />                } else {<br />                    </span><span class="comment">// Thread is ready to run again<br />                    </span><span class="default">$threads</span><span class="keyword">[</span><span class="default">$thread_id</span><span class="keyword">][</span><span class="string">'is_active'</span><span class="keyword">] = </span><span class="default">false</span><span class="keyword">;<br />                }<br />            }<br />        }<br /><br />        </span><span class="comment">// Escape loop when all threads are destroyed<br />        </span><span class="keyword">if (empty(</span><span class="default">$threads</span><span class="keyword">)) break;<br />    }<br />}<br /><br /></span><span class="default">$concurrency </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">$item_count </span><span class="keyword">= </span><span class="default">50</span><span class="keyword">;<br /><br /></span><span class="default">testConcurrency</span><span class="keyword">(</span><span class="default">$concurrency</span><span class="keyword">, </span><span class="default">$item_count</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=parallel.run&amp;repo=en&amp;redirect=https://www.php.net/manual/en/parallel.run.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="functional.parallel.php">Functional API</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="parallel.bootstrap.php" title="parallel\bootstrap">parallel\bootstrap</a>
                        </li>
                                                <li class="current">
                            <a href="parallel.run.php" title="parallel\run">parallel\run</a>
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
