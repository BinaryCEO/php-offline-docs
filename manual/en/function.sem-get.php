<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: sem_get - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.sem-get.php">
 <link rel="shorturl" href="https://www.php.net/sem-get">
 <link rel="alternate" href="https://www.php.net/sem-get" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.sem-acquire.php">
 <link rel="next" href="https://www.php.net/manual/en/function.sem-release.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.sem-get.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.sem-get.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.sem-get.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.sem-get.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.sem-get.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.sem-get.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.sem-get.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.sem-get.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.sem-get.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.sem-get.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.sem-get.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get a semaphore id" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: sem_get - Manual" />
<meta name="twitter:description" content="Get a semaphore id" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: sem_get - Manual" />
<meta itemprop="description" content="Get a semaphore id" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get a semaphore id" />

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
        <a href="function.sem-release.php">
          sem_release &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.sem-acquire.php">
          &laquo; sem_acquire        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.sem.php'>Semaphore</a></li>      <li><a href='ref.sem.php'>Semaphore Functions</a></li>      </ul>
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
            <option value='en/function.sem-get.php' selected="selected">English</option>
            <option value='de/function.sem-get.php'>German</option>
            <option value='es/function.sem-get.php'>Spanish</option>
            <option value='fr/function.sem-get.php'>French</option>
            <option value='it/function.sem-get.php'>Italian</option>
            <option value='ja/function.sem-get.php'>Japanese</option>
            <option value='pt_BR/function.sem-get.php'>Brazilian Portuguese</option>
            <option value='ru/function.sem-get.php'>Russian</option>
            <option value='tr/function.sem-get.php'>Turkish</option>
            <option value='uk/function.sem-get.php'>Ukrainian</option>
            <option value='zh/function.sem-get.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.sem-get" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">sem_get</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">sem_get</span> &mdash; <span class="dc-title">Get a semaphore id</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.sem-get-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>sem_get</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$key</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$max_acquire</code><span class="initializer"> = 1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$permissions</code><span class="initializer"> = 0666</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$auto_release</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="class.sysvsemaphore.php" class="type SysvSemaphore">SysvSemaphore</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>sem_get()</strong></span> returns an id that can be used to
   access the System V semaphore with the given <code class="parameter">key</code>.
  </p>
  <p class="para">
   A second call to <span class="function"><strong>sem_get()</strong></span> for the same key
   will return a different semaphore identifier, but both
   identifiers access the same underlying semaphore.
  </p>
  <p class="para">
   If <code class="parameter">key</code> is <code class="literal">0</code>, a new private semaphore
   is created for each call to <span class="function"><strong>sem_get()</strong></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.sem-get-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">key</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt><code class="parameter">max_acquire</code></dt>
     <dd>
      <p class="para">
       The number of processes that can acquire the semaphore simultaneously
       is set to <code class="parameter">max_acquire</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">permissions</code></dt>
     <dd>
      <p class="para">
       The semaphore permissions. Actually this value is
       set only if the process finds it is the only process currently
       attached to the semaphore.
      </p>
     </dd>
    
    
     <dt><code class="parameter">auto_release</code></dt>
     <dd>
      <p class="para">
       Specifies if the semaphore should be automatically released on request
       shutdown.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.sem-get-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a positive semaphore identifier on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on
   error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.sem-get-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
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
        On success, this function returns a <span class="classname"><a href="class.sysvsemaphore.php" class="classname">SysvSemaphore</a></span> instance now;
        previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        The type of <code class="parameter">auto_release</code> has been changed from
        <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> to <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
 <div class="refsect1 notes" id="refsect1-function.sem-get-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    When using <span class="function"><strong>sem_get()</strong></span> to access a semaphore created
    outside PHP, note that the semaphore must have been created as a set of 3
    semaphores (for example, by specifying 3 as the <code class="literal">nsems</code>
    parameter when calling the C <code class="literal">semget()</code> function),
    otherwise PHP will be unable to access the semaphore.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.sem-get-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.sem-acquire.php" class="function" rel="rdfs-seeAlso">sem_acquire()</a> - Acquire a semaphore</span></li>
    <li><span class="function"><a href="function.sem-release.php" class="function" rel="rdfs-seeAlso">sem_release()</a> - Release a semaphore</span></li>
    <li><span class="function"><a href="function.ftok.php" class="function" rel="rdfs-seeAlso">ftok()</a> - Convert a pathname and a project identifier to a System V IPC key</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sem/functions/sem-get.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.sem-get%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.sem-get&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sem-get.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125801">  <div class="votes">
    <div id="Vu125801">
    <a href="/manual/vote-note.php?id=125801&amp;page=function.sem-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125801">
    <a href="/manual/vote-note.php?id=125801&amp;page=function.sem-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125801" title="100% like this...">
    5
    </div>
  </div>
  <a href="#125801" class="name">
  <strong class="user"><em>Dan East</em></strong></a><a class="genanchor" href="#125801"> &para;</a><div class="date" title="2021-02-09 01:42"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125801">
<div class="phpcode"><code><span class="html">Note that the default permissions parameter is octal!  Thus the default of 0666 is NOT the same as 666, or 0x666.<br /><br />If you specify the permission as decimal 666 then you end up with permissions that prevent the semaphore from being read.  The symptom is that you can only sem_get it once, and subsequent sem_get will fail (until you ipcrm or sem_remove it and delete it entirely).<br /><br />Thus these are all equivalent to the default:<br />sem_get ( 123, 1, 0666) <br />sem_get ( 123, 1, 438) <br />sem_get ( 123, 1, 0x1b6)<br /><br />Most PHP developers (myself included) work with octal numbers so infrequently that the number 0666 can easily be mistaken as 666 or maybe 0x666.</span></code></div>
  </div>
 </div>
  <div class="note" id="103136">  <div class="votes">
    <div id="Vu103136">
    <a href="/manual/vote-note.php?id=103136&amp;page=function.sem-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103136">
    <a href="/manual/vote-note.php?id=103136&amp;page=function.sem-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103136" title="76% like this...">
    13
    </div>
  </div>
  <a href="#103136" class="name">
  <strong class="user"><em>soger</em></strong></a><a class="genanchor" href="#103136"> &para;</a><div class="date" title="2011-03-28 08:20"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103136">
<div class="phpcode"><code><span class="html">Actually it looks like the semaphore is automatically released not on request shutdown but when the variable you store it's resource ID is freed. That is a very big difference.</span></code></div>
  </div>
 </div>
  <div class="note" id="119114">  <div class="votes">
    <div id="Vu119114">
    <a href="/manual/vote-note.php?id=119114&amp;page=function.sem-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119114">
    <a href="/manual/vote-note.php?id=119114&amp;page=function.sem-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119114" title="87% like this...">
    6
    </div>
  </div>
  <a href="#119114" class="name">
  <strong class="user"><em>kakkau at grr dot la</em></strong></a><a class="genanchor" href="#119114"> &para;</a><div class="date" title="2016-04-04 09:19"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119114">
<div class="phpcode"><code><span class="html">It is possible to create an "infinite" amount of semaphores when setting $key = 0.<br /><br />Run sem_get multiple times<br />php &gt; sem_get(0,0);<br /><br />and check the output of<br />$ ipcs -s<br /><br />------ Semaphore Arrays --------<br />key        semid      owner      perms      nsems     <br />0x00000000 1277952    user       666        3         <br />0x00000000 1310721    user       666        3<br /><br />As you can see there were multiple semaphores set up with key 0.<br />For any other integer sem_get works as expected. It returns another resource id pointing to the semaphore previously created and does not create another semaphore.</span></code></div>
  </div>
 </div>
  <div class="note" id="118174">  <div class="votes">
    <div id="Vu118174">
    <a href="/manual/vote-note.php?id=118174&amp;page=function.sem-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118174">
    <a href="/manual/vote-note.php?id=118174&amp;page=function.sem-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118174" title="60% like this...">
    1
    </div>
  </div>
  <a href="#118174" class="name">
  <strong class="user"><em>kakkau at grr dot la</em></strong></a><a class="genanchor" href="#118174"> &para;</a><div class="date" title="2015-10-20 09:35"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118174">
<div class="phpcode"><code><span class="html">For those that encounter strange behavior in using sem_acquire() on resources generated by sem_get(). Have a look at  sem_get()'s 4th parameter auto_release. It allows multiple acquisitions through reassignments to resource variables.<br /><br />./multi.acquire.php<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Sem </span><span class="keyword">{<br />  private </span><span class="default">$key </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />  private </span><span class="default">$res </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />  public function </span><span class="default">__construct</span><span class="keyword">() {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key </span><span class="keyword">= </span><span class="default">ftok</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">,</span><span class="string">"."</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">set_res</span><span class="keyword">();<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">acquire</span><span class="keyword">();<br />  }<br />  public function </span><span class="default">set_res</span><span class="keyword">() {<br />    </span><span class="comment">// 4th parameter auto_released is 1 by default<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">res </span><span class="keyword">= </span><span class="default">sem_get</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">0600</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />  }<br />  public function </span><span class="default">acquire</span><span class="keyword">() {<br />    echo </span><span class="string">"acquired='"</span><span class="keyword">.</span><span class="default">sem_acquire</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">res</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">).</span><span class="string">"'\n"</span><span class="keyword">;<br />  }<br />}<br /><br /></span><span class="default">$s </span><span class="keyword">= new </span><span class="default">Sem</span><span class="keyword">();<br /></span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">set_res</span><span class="keyword">();<br /></span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">acquire</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />$ php multi.acquire.php<br />acquired='1'<br />acquired='1'<br /><br />To avoid reacquiring by default set sem_get()'s parameter auto_release to 0 or check if your resource variable is already set, e.g. by using is_null().</span></code></div>
  </div>
 </div>
  <div class="note" id="105537">  <div class="votes">
    <div id="Vu105537">
    <a href="/manual/vote-note.php?id=105537&amp;page=function.sem-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105537">
    <a href="/manual/vote-note.php?id=105537&amp;page=function.sem-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105537" title="100% like this...">
    1
    </div>
  </div>
  <a href="#105537" class="name">
  <strong class="user"><em>Michael Z.</em></strong></a><a class="genanchor" href="#105537"> &para;</a><div class="date" title="2011-08-25 06:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105537">
<div class="phpcode"><code><span class="html">Watch out when you use fileinode() to get a unique semaphore key (as suggested in some comment on this or a related function) in conjunction with version control software: It seems, for example, SVN will change the inode. Using such a file will leave you with your mutex not working reliably and your system's semaphore pool being filled until further attempts to get a semaphore will fail. Use ipcs and ipcrm commands from linux-util-ng (on most distros probably) to examine/fix related problems.</span></code></div>
  </div>
 </div>
  <div class="note" id="69249">  <div class="votes">
    <div id="Vu69249">
    <a href="/manual/vote-note.php?id=69249&amp;page=function.sem-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69249">
    <a href="/manual/vote-note.php?id=69249&amp;page=function.sem-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69249" title="100% like this...">
    1
    </div>
  </div>
  <a href="#69249" class="name">
  <strong class="user"><em>neofutur</em></strong></a><a class="genanchor" href="#69249"> &para;</a><div class="date" title="2006-08-28 12:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69249">
<div class="phpcode"><code><span class="html">with gentoo php5 you will need to add the USE flag :<br />sysvipc<br /><br />see :<br /> <a href="http://forums.gentoo.org/viewtopic-t-464175-highlight-semget+php.html" rel="nofollow" target="_blank">http://forums.gentoo.org/viewtopic-t-464175-highlight-semget+php.html</a><br /><br />and also :<br /> <a href="http://overlays.gentoo.org/proj/php/" rel="nofollow" target="_blank">http://overlays.gentoo.org/proj/php/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="31741">  <div class="votes">
    <div id="Vu31741">
    <a href="/manual/vote-note.php?id=31741&amp;page=function.sem-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31741">
    <a href="/manual/vote-note.php?id=31741&amp;page=function.sem-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31741" title="50% like this...">
    0
    </div>
  </div>
  <a href="#31741" class="name">
  <strong class="user"><em>joeldg at listbid.com</em></strong></a><a class="genanchor" href="#31741"> &para;</a><div class="date" title="2003-05-02 12:36"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31741">
<div class="phpcode"><code><span class="html">&lt;?<br />// thanks to<br />// <a href="http://www.ecst.csuchico.edu/~beej/guide/ipc/shmem.html" rel="nofollow" target="_blank">http://www.ecst.csuchico.edu/~beej/guide/ipc/shmem.html</a><br />$SHM_KEY = ftok("/home/joeldg/homeymail/shmtest.php", 'R');<br />$shmid = sem_get($SHM_KEY, 1024, 0644 | IPC_CREAT);<br />$data = shm_attach($shmid, 1024);<br /><br />$data = "test";<br />printf("shared contents: %s\n", $data);<br /><br />shm_detach($data);<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="31756">  <div class="votes">
    <div id="Vu31756">
    <a href="/manual/vote-note.php?id=31756&amp;page=function.sem-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31756">
    <a href="/manual/vote-note.php?id=31756&amp;page=function.sem-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31756" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#31756" class="name">
  <strong class="user"><em>joeldg AT listbid.com</em></strong></a><a class="genanchor" href="#31756"> &para;</a><div class="date" title="2003-05-02 11:39"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31756">
<div class="phpcode"><code><span class="html">Heh, actually the above comment I added is not technically correct, it was more of an idea to display the function.<br /><br />$SHM_KEY = ftok("/home/joeldg/homeymail/shmtest.php", 'R');<br />$shmid = sem_get($SHM_KEY, 1024, 0644 | IPC_CREAT);<br />$data = shm_attach($shmid, 1024);<br />// we now have our shm segment<br /><br />// lets place a variable in there<br />shm_put_var ($data, $inmem, "test");<br />// now lets get it back. we could be in a forked process and still have<br />// access to this variable.<br />printf("shared contents: %s\n", shm_get_var($data, $inmem));<br /><br />shm_detach($data);</span></code></div>
  </div>
 </div>
  <div class="note" id="76000">  <div class="votes">
    <div id="Vu76000">
    <a href="/manual/vote-note.php?id=76000&amp;page=function.sem-get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76000">
    <a href="/manual/vote-note.php?id=76000&amp;page=function.sem-get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76000" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#76000" class="name">
  <strong class="user"><em>ein at anti-logic dot com</em></strong></a><a class="genanchor" href="#76000"> &para;</a><div class="date" title="2007-06-26 04:21"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76000">
<div class="phpcode"><code><span class="html">Be aware that there is no way to ensure that you have exclusive access to a lock, despite setting max_acquire=1.<br /><br />In example,<br />&lt;?<br />$fp = sem_get(fileinode('lock_file', 100);<br />sem_acquire($fp);<br /><br />$fp2 = sem_get(fileinode('lock_file', 1);<br />sem_acquire($fp2);<br />?&gt;<br /><br />This will not block on the second sem_aquire.  Therefore, if you have functions or processes that utilize shared locks (&gt;1 max_acquire) you will still need to provide a seperate lock mechanism (ie flock) for write access, making the sem_ functions useless.<br /><br />Some more info, in flock, each reference to the lock file has it's own options (can be shared exclusive blocking non blocking etc), but apparently php's sem functions only support these options per semaphore, not per semaphore-reference.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.sem-get&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sem-get.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.sem.php">Semaphore Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ftok.php" title="ftok">ftok</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-get-queue.php" title="msg_&#8203;get_&#8203;queue">msg_&#8203;get_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-queue-exists.php" title="msg_&#8203;queue_&#8203;exists">msg_&#8203;queue_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-receive.php" title="msg_&#8203;receive">msg_&#8203;receive</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-remove-queue.php" title="msg_&#8203;remove_&#8203;queue">msg_&#8203;remove_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-send.php" title="msg_&#8203;send">msg_&#8203;send</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-set-queue.php" title="msg_&#8203;set_&#8203;queue">msg_&#8203;set_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.msg-stat-queue.php" title="msg_&#8203;stat_&#8203;queue">msg_&#8203;stat_&#8203;queue</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-acquire.php" title="sem_&#8203;acquire">sem_&#8203;acquire</a>
                        </li>
                                                <li class="current">
                            <a href="function.sem-get.php" title="sem_&#8203;get">sem_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-release.php" title="sem_&#8203;release">sem_&#8203;release</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-remove.php" title="sem_&#8203;remove">sem_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-attach.php" title="shm_&#8203;attach">shm_&#8203;attach</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-detach.php" title="shm_&#8203;detach">shm_&#8203;detach</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-get-var.php" title="shm_&#8203;get_&#8203;var">shm_&#8203;get_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-has-var.php" title="shm_&#8203;has_&#8203;var">shm_&#8203;has_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-put-var.php" title="shm_&#8203;put_&#8203;var">shm_&#8203;put_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-remove.php" title="shm_&#8203;remove">shm_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.shm-remove-var.php" title="shm_&#8203;remove_&#8203;var">shm_&#8203;remove_&#8203;var</a>
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
