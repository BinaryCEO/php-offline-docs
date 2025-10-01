<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: shm_attach - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.shm-attach.php">
 <link rel="shorturl" href="https://www.php.net/shm-attach">
 <link rel="alternate" href="https://www.php.net/shm-attach" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.sem-remove.php">
 <link rel="next" href="https://www.php.net/manual/en/function.shm-detach.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.shm-attach.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.shm-attach.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.shm-attach.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.shm-attach.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.shm-attach.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.shm-attach.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.shm-attach.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.shm-attach.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.shm-attach.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.shm-attach.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.shm-attach.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates or open a shared memory segment" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: shm_attach - Manual" />
<meta name="twitter:description" content="Creates or open a shared memory segment" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: shm_attach - Manual" />
<meta itemprop="description" content="Creates or open a shared memory segment" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates or open a shared memory segment" />

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
        <a href="function.shm-detach.php">
          shm_detach &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.sem-remove.php">
          &laquo; sem_remove        </a>
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
            <option value='en/function.shm-attach.php' selected="selected">English</option>
            <option value='de/function.shm-attach.php'>German</option>
            <option value='es/function.shm-attach.php'>Spanish</option>
            <option value='fr/function.shm-attach.php'>French</option>
            <option value='it/function.shm-attach.php'>Italian</option>
            <option value='ja/function.shm-attach.php'>Japanese</option>
            <option value='pt_BR/function.shm-attach.php'>Brazilian Portuguese</option>
            <option value='ru/function.shm-attach.php'>Russian</option>
            <option value='tr/function.shm-attach.php'>Turkish</option>
            <option value='uk/function.shm-attach.php'>Ukrainian</option>
            <option value='zh/function.shm-attach.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.shm-attach" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">shm_attach</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">shm_attach</span> &mdash; <span class="dc-title">Creates or open a shared memory segment</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.shm-attach-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>shm_attach</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$size</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$permissions</code><span class="initializer"> = 0666</span></span>): <span class="type"><span class="type"><a href="class.sysvsharedmemory.php" class="type SysvSharedMemory">SysvSharedMemory</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>shm_attach()</strong></span> returns an id that can be used to access
   the System V shared memory with the given <code class="parameter">key</code>, the
   first call creates the shared memory segment with 
   <code class="parameter">size</code> and the optional perm-bits 
   <code class="parameter">permissions</code>.
  </p>
  <p class="para">
   A second call to <span class="function"><strong>shm_attach()</strong></span> for the same
   <code class="parameter">key</code> will return a different <span class="classname"><a href="class.sysvsharedmemory.php" class="classname">SysvSharedMemory</a></span>
   instance, but both instances access the same underlying
   shared memory. <code class="parameter">size</code> and
   <code class="parameter">permissions</code> will be ignored.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.shm-attach-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">key</code></dt>
     <dd>
      <p class="para">
       A numeric shared memory segment ID
      </p>
     </dd>
    
    
     <dt><code class="parameter">size</code></dt>
     <dd>
      <p class="para">
       The memory size. If not provided, default to the
       <code class="literal">sysvshm.init_mem</code> in the <var class="filename">php.ini</var>, otherwise 10000
       bytes.
      </p>
     </dd>
    
    
     <dt><code class="parameter">permissions</code></dt>
     <dd>
      <p class="para">
       The optional permission bits. Default to 0666.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.shm-attach-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a <span class="classname"><a href="class.sysvsharedmemory.php" class="classname">SysvSharedMemory</a></span> instance on success,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.shm-attach-changelog">
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
       On success, this function returns an <span class="classname"><a href="class.sysvsharedmemory.php" class="classname">SysvSharedMemory</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">size</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.shm-attach-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.shm-detach.php" class="function" rel="rdfs-seeAlso">shm_detach()</a> - Disconnects from shared memory segment</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sem/functions/shm-attach.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.shm-attach%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.shm-attach&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.shm-attach.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">24 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="72563">  <div class="votes">
    <div id="Vu72563">
    <a href="/manual/vote-note.php?id=72563&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72563">
    <a href="/manual/vote-note.php?id=72563&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72563" title="100% like this...">
    5
    </div>
  </div>
  <a href="#72563" class="name">
  <strong class="user"><em>Uther Pendragon</em></strong></a><a class="genanchor" href="#72563"> &para;</a><div class="date" title="2007-01-24 08:26"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72563">
<div class="phpcode"><code><span class="html">Since there aren't seperate functions for CREATING and ATTACHING shared memory (a mistake in my opinion), you might want to do some testing to check whether you've created it or not, as you may not want the slave of a master/slave pair to ever create the shared memory.<br /><br />One way you can test this is by having your slave set the size to something small, then testing the size by putting a variable too large to fit, e.g.:<br /><br />function get_shmem() {<br />     return shm_attach(ftok('somefile.txt', 'T'), 100, 0644);<br />}<br /><br />$shm = get_shmem();<br /><br />while (!@shm_put_var($shm, 1, str_repeat('.....', 20))) {<br />     shm_remove($shm); <br />     sleep(1);<br />     //we created it, so we'll remove it and sleep to wait for the master to create it, then try again.<br />     $shm = get_shmem();<br />}<br />shm_remove_var($shm, 1);<br />//here we know the shared memory was already created, because we could put a variable in bigger than the size requested.<br /><br />Another way you can handle it is to have all programs initialize the shared memory with the same parameters... I had a problem with this when my clients starting too fast and created the shmem without passing a memsize value, so it was defaulting to 10k which was too small.</span></code></div>
  </div>
 </div>
  <div class="note" id="114894">  <div class="votes">
    <div id="Vu114894">
    <a href="/manual/vote-note.php?id=114894&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114894">
    <a href="/manual/vote-note.php?id=114894&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114894" title="75% like this...">
    8
    </div>
  </div>
  <a href="#114894" class="name">
  <strong class="user"><em>novayear # hotmail ; com</em></strong></a><a class="genanchor" href="#114894"> &para;</a><div class="date" title="2014-04-21 08:13"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114894">
<div class="phpcode"><code><span class="html">small shm class..<br />example usage:<br />$shx= new shmSmart;<br />$shx-&gt;put("key_name_apple","key_val_peach"); //set example..<br />$shx-&gt;put("key name alternative array",array(1=&gt;"banana","apricot","blablabla"=&gt;array("new-blaala"))); //set array example..<br />echo  $shx-&gt;get("key_name_apple"); // get example key value.<br />$shx-&gt;del("key_name_apple"); // delete key<br />unset($shx); // free memory in php..<br /><br />class shmSmart{<br />  public $shm;            //holds shared memory resource<br />  public function __construct(){<br />    if(function_exists("shm_attach")===FALSE){<br />      die("\nYour PHP configuration needs adjustment. See: <a href="http://us2.php.net/manual/en/shmop.setup.php." rel="nofollow" target="_blank">http://us2.php.net/manual/en/shmop.setup.php.</a> To enable the System V shared memory support compile PHP with the option --enable-sysvshm.");<br />    }  <br />    $this-&gt;attach();    //create resources (shared memory)<br />  }<br />  public function attach(){<br />    $this-&gt;shm=shm_attach(0x701da13b,33554432);    //allocate shared memory<br />  }<br />  public function dettach(){<br />    return shm_detach($this-&gt;shm);    //allocate shared memory<br />  }<br />  public function remove(){<br />    return shm_remove($this-&gt;shm);    //dallocate shared memory<br />  }<br />  public function put($key,$var) {<br />    return shm_put_var($this-&gt;shm,$this-&gt;shm_key($key),$var);    //store var <br />  }<br />  public function get($key){<br />    if($this-&gt;has($key)){<br />      return shm_get_var($this-&gt;shm,$this-&gt;shm_key($key));  //get var<br />    }else{<br />      return false;    <br />    }        <br />  }<br />  public function del($key){<br />    if($this-&gt;has($key)){<br />      return shm_remove_var($this-&gt;shm,$this-&gt;shm_key($key)); // delete var<br />    }else{<br />      return false;    <br />    }        <br />  }<br />  public function has($key){<br />    if(shm_has_var($this-&gt;shm,$this-&gt;shm_key($key))){ // check is isset<br />      return true;        <br />    }else{<br />      return false;        <br />    }<br />  }<br />  public function shm_key($val){ // enable all world langs and chars !<br />    return preg_replace("/[^0-9]/","",(preg_replace("/[^0-9]/","",md5($val))/35676248)/619876); // text to number system.<br />  }<br />  public function __wakeup() {<br />    $this-&gt;attach();<br />  }<br />  public function __destruct() {<br />    $this-&gt;dettach();<br />    unset($this);<br />  }    <br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="73744">  <div class="votes">
    <div id="Vu73744">
    <a href="/manual/vote-note.php?id=73744&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73744">
    <a href="/manual/vote-note.php?id=73744&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73744" title="100% like this...">
    3
    </div>
  </div>
  <a href="#73744" class="name">
  <strong class="user"><em>Uther Pendragon</em></strong></a><a class="genanchor" href="#73744"> &para;</a><div class="date" title="2007-03-08 09:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73744">
<div class="phpcode"><code><span class="html">As a follow-up to my last post regarding shm_attach and its limit capability for knowing how it was created....<br /><br />for more control, use the shmop_* series of functions, as they have finer grained control than these.<br /><br />and by the way:  the SHMOP functions SHOULD BE listed under "see also" for all the SHM* wrapper functions (I assume they are wrappers to the SHMOP* functions).</span></code></div>
  </div>
 </div>
  <div class="note" id="671">  <div class="votes">
    <div id="Vu671">
    <a href="/manual/vote-note.php?id=671&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd671">
    <a href="/manual/vote-note.php?id=671&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V671" title="100% like this...">
    3
    </div>
  </div>
  <a href="#671" class="name">
  <strong class="user"><em>h dot raaf at i-k-c dot net</em></strong></a><a class="genanchor" href="#671"> &para;</a><div class="date" title="1999-03-25 05:40"><strong>26 years ago</strong></div>
  <div class="text" id="Hcom671">
<div class="phpcode"><code><span class="html">Notice that 'int key' for shared-memory is shared with the keys used for semaphores. So you get in trouble when you use the same key value for semaphores and shared memory!</span></code></div>
  </div>
 </div>
  <div class="note" id="103285">  <div class="votes">
    <div id="Vu103285">
    <a href="/manual/vote-note.php?id=103285&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103285">
    <a href="/manual/vote-note.php?id=103285&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103285" title="60% like this...">
    2
    </div>
  </div>
  <a href="#103285" class="name">
  <strong class="user"><em>nathanbruer at gmail dot com</em></strong></a><a class="genanchor" href="#103285"> &para;</a><div class="date" title="2011-04-05 01:21"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103285">
<div class="phpcode"><code><span class="html">I was playing around with these functions and made a class in the process. This will of course be slower than accessing a variable locally, but gives the ability to store variables in a shared environment and gives many running scripts the understanding that it should access them from the shared area. This should also auto destroy the shared memory area once no more scripts have a link to the data (when all scripts use this class).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">SharedMemory</span><span class="keyword">{<br />    private </span><span class="default">$nameToKey </span><span class="keyword">= array();<br />    private </span><span class="default">$key</span><span class="keyword">;<br />    private </span><span class="default">$id</span><span class="keyword">;<br />    function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$key </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">){<br />        if(</span><span class="default">$key </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">){<br />            </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">tempnam</span><span class="keyword">(</span><span class="string">'/tmp'</span><span class="keyword">, </span><span class="string">'PHP'</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key </span><span class="keyword">= </span><span class="default">ftok</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">= </span><span class="default">shm_attach</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">nameToKey</span><span class="keyword">[] = </span><span class="string">''</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">nameToKey</span><span class="keyword">[] = </span><span class="string">''</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">updateMemoryVarList</span><span class="keyword">();<br />            </span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        }else{<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key </span><span class="keyword">= </span><span class="default">$key</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">= </span><span class="default">sem_get</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">refreshMemoryVarList</span><span class="keyword">();<br />            </span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">);<br />        }<br />        if(!</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">)<br />            die(</span><span class="string">'Unable to create shared memory segment'</span><span class="keyword">);<br />    }<br />    function </span><span class="default">__sleep</span><span class="keyword">(){<br />        </span><span class="default">shm_detach</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">);<br />    }<br />    function </span><span class="default">__destruct</span><span class="keyword">(){<br />        if(</span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">){<br />            </span><span class="comment">// I am the last listener so kill shared memory space<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">remove</span><span class="keyword">();<br />        }else{<br />            </span><span class="default">shm_detach</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">);<br />            </span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">);<br />        }<br />    }<br />    function </span><span class="default">__wakeup</span><span class="keyword">(){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id </span><span class="keyword">= </span><span class="default">sem_get</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">);<br />        </span><span class="default">shm_attach</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">refreshMemoryVarList</span><span class="keyword">();<br />        </span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) + </span><span class="default">1</span><span class="keyword">);<br />    }<br />    function </span><span class="default">getKey</span><span class="keyword">(){<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key</span><span class="keyword">;<br />    }<br />    function </span><span class="default">remove</span><span class="keyword">(){<br />        </span><span class="default">shm_remove</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">);<br />    }<br />    function </span><span class="default">refreshMemoryVarList</span><span class="keyword">(){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">nameToKey </span><span class="keyword">= </span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />    }<br />    function </span><span class="default">updateMemoryVarList</span><span class="keyword">(){<br />        </span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">nameToKey</span><span class="keyword">);<br />    }<br />    function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">){<br />        if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">nameToKey</span><span class="keyword">)){<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">refreshMemoryVarList</span><span class="keyword">();<br />        }<br />        return </span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">nameToKey</span><span class="keyword">));<br />    }<br />    function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">){<br />        if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">nameToKey</span><span class="keyword">)){<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">refreshMemoryVarList</span><span class="keyword">();<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">nameToKey</span><span class="keyword">[] = </span><span class="default">$var</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">updateMemoryVarList</span><span class="keyword">();<br />        }<br />        </span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">nameToKey</span><span class="keyword">), </span><span class="default">$val</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="comment">// Example<br /></span><span class="default">$sharedMem </span><span class="keyword">= new </span><span class="default">SharedMemory</span><span class="keyword">();<br /></span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br />if(</span><span class="default">$pid</span><span class="keyword">){<br />    </span><span class="comment">//parent<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    echo </span><span class="string">"Parent Says: " </span><span class="keyword">. </span><span class="default">$sharedMem</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">"Parent Changed to 0\n"</span><span class="keyword">;<br />    </span><span class="default">$sharedMem</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="comment">//Parent just changed it to 0<br />    </span><span class="keyword">echo </span><span class="string">"Parent Says: " </span><span class="keyword">. </span><span class="default">$sharedMem</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br />    </span><span class="comment">// Parent think's it's 0, but child has changed it to 1<br />    </span><span class="keyword">echo </span><span class="string">"Parent Says: " </span><span class="keyword">. </span><span class="default">$sharedMem</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />}else{<br />    </span><span class="comment">//child<br />    </span><span class="default">$sharedMem</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />    echo </span><span class="string">"Child Changed to 2\n"</span><span class="keyword">;<br />    </span><span class="comment">// Should be 2 as child just set it to 2<br />    </span><span class="keyword">echo </span><span class="string">"Child Says: " </span><span class="keyword">. </span><span class="default">$sharedMem</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br />    </span><span class="comment">// Child think's it's 2, but the parent set it to 0.<br />    </span><span class="keyword">echo </span><span class="string">"Child Says: " </span><span class="keyword">. </span><span class="default">$sharedMem</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="string">"Child Added 1\n"</span><span class="keyword">;<br />    </span><span class="default">$sharedMem</span><span class="keyword">-&gt;</span><span class="default">a</span><span class="keyword">++;<br />    echo </span><span class="string">"Child Says: " </span><span class="keyword">. </span><span class="default">$sharedMem</span><span class="keyword">-&gt;</span><span class="default">a </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114711">  <div class="votes">
    <div id="Vu114711">
    <a href="/manual/vote-note.php?id=114711&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114711">
    <a href="/manual/vote-note.php?id=114711&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114711" title="100% like this...">
    2
    </div>
  </div>
  <a href="#114711" class="name">
  <strong class="user"><em>Daniel Knecht</em></strong></a><a class="genanchor" href="#114711"> &para;</a><div class="date" title="2014-03-27 11:30"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114711">
<div class="phpcode"><code><span class="html">If you get an error like "PHP Warning:  shm_attach(): failed for key 0x61040bb5: Cannot allocate memory" then you might need to tweak your shared memory configuration.<br /><br />To see your system values, enter "sysctl kern.sysv."<br />Important values are kern.sysv.shmmax and kern.sysv.shmall:<br />* kern.sysv.shmmax is the max number of bytes one shared memory segment may have<br />* kern.sysv.shmall is the max number of memory pages all shared memory segments together can consume<br />One memory page is 4096 bytes, meaning that if you set kern.sysv.shmmax to 1073741824 (1GB) then kern.sysv.shmall must be at least 262144 to be able to allocate a one GB memory segment (since 262144 * 4096 = 1073741824).<br /><br />tl;dr The default values on some systems are very low and then it is not enough to only increase kern.sysv.shmmax - also kern.sysv.shmall needs to be increased accordingly!</span></code></div>
  </div>
 </div>
  <div class="note" id="1589">  <div class="votes">
    <div id="Vu1589">
    <a href="/manual/vote-note.php?id=1589&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd1589">
    <a href="/manual/vote-note.php?id=1589&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V1589" title="100% like this...">
    2
    </div>
  </div>
  <a href="#1589" class="name">
  <strong class="user"><em>webmaster at mail dot communityconnect dot com</em></strong></a><a class="genanchor" href="#1589"> &para;</a><div class="date" title="1999-09-10 01:50"><strong>26 years ago</strong></div>
  <div class="text" id="Hcom1589">
<div class="phpcode"><code><span class="html">With Sun Solaris 2.x, the MAXIMUM shared memory value allowed is 1,048,576.  The maximum allowed value can be determined using the command /usr/sbin/sysdef.  On Linux, there does not seem to be any system enforced maximum size.  To change the maximum allowed size on Solaris 2.x, use set shmsys:shminfo_shmmax=[new value].</span></code></div>
  </div>
 </div>
  <div class="note" id="85085">  <div class="votes">
    <div id="Vu85085">
    <a href="/manual/vote-note.php?id=85085&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85085">
    <a href="/manual/vote-note.php?id=85085&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85085" title="100% like this...">
    1
    </div>
  </div>
  <a href="#85085" class="name">
  <strong class="user"><em>zeppelinux at comcast dot net</em></strong></a><a class="genanchor" href="#85085"> &para;</a><div class="date" title="2008-08-14 12:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85085">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br />
<br /></span><span class="comment">//how to calculate the  minimum $memsize required to store the variable $foo where $foo='foobar'.
<br />
<br />// when shm_attach() is called for the first time, PHP writes a header to the beginning of the shared memory. 
<br /></span><span class="default">$shmHeaderSize </span><span class="keyword">= (</span><span class="default">PHP_INT_SIZE </span><span class="keyword">* </span><span class="default">4</span><span class="keyword">) + </span><span class="default">8</span><span class="keyword">;
<br />
<br /></span><span class="comment">// when shm_put_var() is called, the variable is serialized and a small header is placed in front of it before it is written to shared memory.
<br /></span><span class="default">$shmVarSize </span><span class="keyword">= (((</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">))+ (</span><span class="default">4 </span><span class="keyword">* </span><span class="default">PHP_INT_SIZE</span><span class="keyword">)) /</span><span class="default">4 </span><span class="keyword">) * </span><span class="default">4 </span><span class="keyword">) + </span><span class="default">4</span><span class="keyword">;
<br />
<br /></span><span class="comment">// now add the two together to get the total memory required. Of course, if you are storing more than one variable then you dont need to add $shmHeaderSize for each variable, only add it once.
<br /></span><span class="default">$memsize </span><span class="keyword">= </span><span class="default">$shmHeaderSize </span><span class="keyword">+ </span><span class="default">$shmVarSize</span><span class="keyword">;
<br />
<br /></span><span class="comment">//this will give you just enough memory to store the one variable using shm_put_var().
<br /></span><span class="default">$shm_id </span><span class="keyword">= </span><span class="default">shm_attach </span><span class="keyword">( </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$memsize</span><span class="keyword">, </span><span class="default">0666 </span><span class="keyword">) ;
<br /></span><span class="default">shm_put_var  </span><span class="keyword">( </span><span class="default">$shm_id  </span><span class="keyword">, </span><span class="default">$variable_key  </span><span class="keyword">, </span><span class="default">$foo  </span><span class="keyword">);
<br />
<br /></span><span class="default">any attempt to store another variable will result in a </span><span class="string">'not enough memory' </span><span class="default">error</span><span class="keyword">.
<br /></span><span class="default">Be aware that </span><span class="keyword">if </span><span class="default">you change the contents of $foo to a larger value </span><span class="keyword">and </span><span class="default">then you </span><span class="keyword">try </span><span class="default">to write it to shared memory again using shm_put_var</span><span class="keyword">(), </span><span class="default">then you will get a </span><span class="string">'not enough memory' </span><span class="default">error</span><span class="keyword">. </span><span class="default">In this </span><span class="keyword">case, </span><span class="default">you will have to resize your shared memory segment </span><span class="keyword">and </span><span class="default">then write the </span><span class="keyword">new </span><span class="default">value</span><span class="keyword">.
<br />
<br />If </span><span class="default">you are only storing variables that contain a single integer value</span><span class="keyword">, </span><span class="default">then you can avoid having to resize by always allocating the largest amount of memory that is required to store an int</span><span class="keyword">, </span><span class="default">which should be</span><span class="keyword">:
<br /></span><span class="default">$shmIntVarSize </span><span class="keyword">= (((</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">serialize</span><span class="keyword">(</span><span class="default">PHP_INT_MAX</span><span class="keyword">))+ (</span><span class="default">4 </span><span class="keyword">* </span><span class="default">PHP_INT_SIZE</span><span class="keyword">)) /</span><span class="default">4 </span><span class="keyword">) * </span><span class="default">4 </span><span class="keyword">) + </span><span class="default">4</span><span class="keyword">;
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80354">  <div class="votes">
    <div id="Vu80354">
    <a href="/manual/vote-note.php?id=80354&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80354">
    <a href="/manual/vote-note.php?id=80354&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80354" title="100% like this...">
    1
    </div>
  </div>
  <a href="#80354" class="name">
  <strong class="user"><em>hetii at poczta dot onet dot pl</em></strong></a><a class="genanchor" href="#80354"> &para;</a><div class="date" title="2008-01-11 05:18"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80354">
<div class="phpcode"><code><span class="html">Hi :)<br />I write small class for build bright message between my application.<br /><br />&lt;?<br />class Bright_Message<br />{<br /><br />var $bright;<br />var $SHM_KEY;<br />var $my_pid;<br /><br />        function Bright_Message($SHM_KEY=null)<br />        {<br />                $this-&gt;my_pid = getmypid();//Get own pid<br />                if (is_null($SHM_KEY)) $this-&gt;SHM_KEY = '123123123';<br />                $this-&gt;bright = shm_attach($this-&gt;SHM_KEY, 1024, 0666);<br />                $this-&gt;one_instance();<br />        }<br /><br />        function get_msg($id,$remove=true)<br />        {<br />                if(@$msg=shm_get_var($this-&gt;bright,$id))<br />                {<br />                   if ($remove) @shm_remove_var($this-&gt;bright,$id);<br />                   return $msg;<br />                } else return false;<br />        }<br /><br />        function snd_msg($id,$msg)<br />        {<br />                @shm_put_var($this-&gt;bright,$id,$msg);<br />                return true;<br />        }<br /><br />        function one_instance()<br />        {<br />                $SHM_PID = $this-&gt;get_msg(1,false);<br />                if((strpos(exec('ps p'.$SHM_PID),$_SERVER['SCRIPT_FILENAME'])) === false)<br />                $this-&gt;snd_msg(1,$this-&gt;my_pid); else<br />                {<br />                        echo "This program exists on pid: $SHM_PID\r\n\r\n";<br />                        exit;<br />                }<br />        }<br /><br />}<br />?&gt;<br /><br />send.php:<br />&lt;?<br />include "bridge_message.class.php";<br />$shm = new Bright_Message();<br />$shm-&gt;snd_msg(2,'this is my simple message');<br />?&gt;<br /><br />receive.php:<br />&lt;?<br />include "bridge_message.class.php";<br />$shm = new Bright_Message();<br />$msg = get_msg(2);<br />echo print_r($msg,1);<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="76888">  <div class="votes">
    <div id="Vu76888">
    <a href="/manual/vote-note.php?id=76888&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76888">
    <a href="/manual/vote-note.php?id=76888&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76888" title="100% like this...">
    1
    </div>
  </div>
  <a href="#76888" class="name">
  <strong class="user"><em>jpeter1978 at yahoo dot com</em></strong></a><a class="genanchor" href="#76888"> &para;</a><div class="date" title="2007-08-03 03:35"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76888">
<div class="phpcode"><code><span class="html">I tried all the suggestions above for getting the object size (in bytes) for $memsize, but they didn't work universally for the two types of objects I tried (string and array of strings).<br /><br />After doing some googling and experimenting, I've found the following magic formula:<br /><br />$memsize = ( strlen( serialize( $object ) ) + 44 ) * 2;<br /><br />I found this in someone else's code, so I can't explain it.</span></code></div>
  </div>
 </div>
  <div class="note" id="70935">  <div class="votes">
    <div id="Vu70935">
    <a href="/manual/vote-note.php?id=70935&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70935">
    <a href="/manual/vote-note.php?id=70935&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70935" title="100% like this...">
    1
    </div>
  </div>
  <a href="#70935" class="name">
  <strong class="user"><em>Katzenmeier</em></strong></a><a class="genanchor" href="#70935"> &para;</a><div class="date" title="2006-11-04 03:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70935">
<div class="phpcode"><code><span class="html">The limit for one SHM block seems to be 32 MB, but you can split your data in several SHM blocks if you need to. The total SHM limit seems to be about 8 GB.<br /><br />I'm not sure whether this is true for all configurations.</span></code></div>
  </div>
 </div>
  <div class="note" id="62266">  <div class="votes">
    <div id="Vu62266">
    <a href="/manual/vote-note.php?id=62266&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62266">
    <a href="/manual/vote-note.php?id=62266&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62266" title="100% like this...">
    1
    </div>
  </div>
  <a href="#62266" class="name">
  <strong class="user"><em>muytoloco at yahoo dot com dot br</em></strong></a><a class="genanchor" href="#62266"> &para;</a><div class="date" title="2006-02-23 09:33"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62266">
<div class="phpcode"><code><span class="html">If one process make a shm_attach to one inexistent memory area, this area will be created under the same priviliegies of the script running user. If another process will try to create or acces the same area, runnig by other user with different privileges of the first user, an error will occur.</span></code></div>
  </div>
 </div>
  <div class="note" id="51342">  <div class="votes">
    <div id="Vu51342">
    <a href="/manual/vote-note.php?id=51342&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51342">
    <a href="/manual/vote-note.php?id=51342&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51342" title="100% like this...">
    1
    </div>
  </div>
  <a href="#51342" class="name">
  <strong class="user"><em>rch at todo dot com dot uy</em></strong></a><a class="genanchor" href="#51342"> &para;</a><div class="date" title="2005-03-28 04:17"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51342">
<div class="phpcode"><code><span class="html">Cecil, the key of a var is an integer (not the name ). You can put multiples vars in the same share.<br /><br />#!/usr/local/bin/php -q<br /><span class="default">&lt;?PHP<br /><br />$SHM_KEY </span><span class="keyword">= </span><span class="default">ftok</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">( </span><span class="default">4 </span><span class="keyword">) ); <br /><br /></span><span class="default">$data </span><span class="keyword">=  </span><span class="default">shm_attach</span><span class="keyword">(</span><span class="default">$SHM_KEY</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">0666</span><span class="keyword">);<br /><br /></span><span class="default">$test1 </span><span class="keyword">= array(</span><span class="string">"hello"</span><span class="keyword">,</span><span class="string">"world"</span><span class="keyword">,</span><span class="string">"1"</span><span class="keyword">,</span><span class="string">"2"</span><span class="keyword">,</span><span class="string">"3"</span><span class="keyword">);<br /></span><span class="default">$test2 </span><span class="keyword">= array(</span><span class="string">"hello"</span><span class="keyword">,</span><span class="string">"world"</span><span class="keyword">,</span><span class="string">"4"</span><span class="keyword">,</span><span class="string">"5"</span><span class="keyword">,</span><span class="string">"6"</span><span class="keyword">);<br /></span><span class="default">$test3 </span><span class="keyword">= array(</span><span class="string">"hello"</span><span class="keyword">,</span><span class="string">"world"</span><span class="keyword">,</span><span class="string">"7"</span><span class="keyword">,</span><span class="string">"8"</span><span class="keyword">,</span><span class="string">"9"</span><span class="keyword">);<br /><br /></span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$test1</span><span class="keyword">);<br /></span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">,</span><span class="default">$test2</span><span class="keyword">);<br /></span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">,</span><span class="default">$test3</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">));<br /><br /></span><span class="default">shm_detach</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="41878">  <div class="votes">
    <div id="Vu41878">
    <a href="/manual/vote-note.php?id=41878&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41878">
    <a href="/manual/vote-note.php?id=41878&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41878" title="100% like this...">
    1
    </div>
  </div>
  <a href="#41878" class="name">
  <strong class="user"><em>andreyKEINSPAM at php dot net</em></strong></a><a class="genanchor" href="#41878"> &para;</a><div class="date" title="2004-04-24 09:31"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41878">
<div class="phpcode"><code><span class="html">As far as I see from the sources of ext/sysvshm, it's not needed to  do  arithmetic (bit) OR (|) of "perm" with  IPC_CREAT (and IPC_EXCL). The extension will do it for you. It tries to attach to the memory segment and if the try did not succeed it tries to attach but with flags set to user_flag | IPC_CREAT | IPC_EXCL.<br />The exact code (shm_flag is the third param to the function) :<br />if ((shm_id = shmget(shm_key, 0, 0)) &lt; 0) {<br />      if (shm_size &lt; sizeof(sysvshm_chunk_head)) {<br />            php_error_docref(NULL TSRMLS_CC, E_WARNING, "failed for key 0x%x: memorysize too small", shm_key);<br />            efree(shm_list_ptr);<br />            RETURN_FALSE;<br />      }<br />      if ((shm_id = shmget(shm_key, shm_size, shm_flag | IPC_CREAT | IPC_EXCL)) &lt; 0) {<br />            php_error_docref(NULL TSRMLS_CC, E_WARNING, "failed for key 0x%x: %s", shm_key, strerror(errno));<br />             efree(shm_list_ptr);<br />             RETURN_FALSE;<br />     }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="40886">  <div class="votes">
    <div id="Vu40886">
    <a href="/manual/vote-note.php?id=40886&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40886">
    <a href="/manual/vote-note.php?id=40886&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40886" title="100% like this...">
    1
    </div>
  </div>
  <a href="#40886" class="name">
  <strong class="user"><em>Cecil</em></strong></a><a class="genanchor" href="#40886"> &para;</a><div class="date" title="2004-03-18 12:37"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40886">
<div class="phpcode"><code><span class="html">Here is an example of how to use one shared memory block to store multiple variables or arrays.. unfortunetly in order to store more than ONE variable, you have to use sem_get() multiple times.. same goes for shm_attach(), shm_put_var() and shm_get_var()<br /><br />#!/usr/local/bin/php -q<br /><span class="default">&lt;?PHP<br /></span><span class="comment">// test.php<br /><br /></span><span class="default">$SHM_KEY </span><span class="keyword">= </span><span class="default">ftok</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">,</span><span class="string">'A'</span><span class="keyword">);<br /><br /></span><span class="default">$shmid  </span><span class="keyword">= </span><span class="default">sem_get</span><span class="keyword">(</span><span class="default">$SHM_KEY</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">0644 </span><span class="keyword">| </span><span class="default">IPC_CREAT</span><span class="keyword">);<br /></span><span class="default">$shmid2 </span><span class="keyword">= </span><span class="default">sem_get</span><span class="keyword">(</span><span class="default">$SHM_KEY</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">0644 </span><span class="keyword">| </span><span class="default">IPC_CREAT</span><span class="keyword">);<br /></span><span class="default">$shmid3 </span><span class="keyword">= </span><span class="default">sem_get</span><span class="keyword">(</span><span class="default">$SHM_KEY</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">0644 </span><span class="keyword">| </span><span class="default">IPC_CREAT</span><span class="keyword">);<br /><br /></span><span class="default">$data </span><span class="keyword">=  </span><span class="default">shm_attach</span><span class="keyword">(</span><span class="default">$shmid</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">$data2 </span><span class="keyword">= </span><span class="default">shm_attach</span><span class="keyword">(</span><span class="default">$shmid2</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">$data3 </span><span class="keyword">= </span><span class="default">shm_attach</span><span class="keyword">(</span><span class="default">$shmid3</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br /><br /></span><span class="default">$test </span><span class="keyword">= array(</span><span class="string">"hello"</span><span class="keyword">,</span><span class="string">"world"</span><span class="keyword">,</span><span class="string">"1"</span><span class="keyword">,</span><span class="string">"2"</span><span class="keyword">,</span><span class="string">"3"</span><span class="keyword">);<br /></span><span class="default">$test2 </span><span class="keyword">= array(</span><span class="string">"hello"</span><span class="keyword">,</span><span class="string">"world"</span><span class="keyword">,</span><span class="string">"4"</span><span class="keyword">,</span><span class="string">"5"</span><span class="keyword">,</span><span class="string">"6"</span><span class="keyword">);<br /></span><span class="default">$test3 </span><span class="keyword">= array(</span><span class="string">"hello"</span><span class="keyword">,</span><span class="string">"world"</span><span class="keyword">,</span><span class="string">"7"</span><span class="keyword">,</span><span class="string">"8"</span><span class="keyword">,</span><span class="string">"9"</span><span class="keyword">);<br /><br /></span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$inmem</span><span class="keyword">,</span><span class="default">$test</span><span class="keyword">);<br /></span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$data2</span><span class="keyword">,</span><span class="default">$inmem2</span><span class="keyword">,</span><span class="default">$test2</span><span class="keyword">);<br /></span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$data3</span><span class="keyword">,</span><span class="default">$inmem3</span><span class="keyword">,</span><span class="default">$test3</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$inmem</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$data2</span><span class="keyword">,</span><span class="default">$inmem2</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$data3</span><span class="keyword">,</span><span class="default">$inmem3</span><span class="keyword">));<br /><br /></span><span class="default">shm_detach</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">shm_detach</span><span class="keyword">(</span><span class="default">$data2</span><span class="keyword">);<br /></span><span class="default">shm_detach</span><span class="keyword">(</span><span class="default">$data2</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />to REALLY test it.. create a second script like so and run it..<br /><br />#!/usr/local/bin/php -q<br /><span class="default">&lt;?PHP<br /></span><span class="comment">// test2.php<br /><br /></span><span class="default">$SHM_KEY </span><span class="keyword">= </span><span class="default">ftok</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">,</span><span class="string">'A'</span><span class="keyword">);<br /><br /></span><span class="default">$shmid  </span><span class="keyword">= </span><span class="default">sem_get</span><span class="keyword">(</span><span class="default">$SHM_KEY</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">0644 </span><span class="keyword">| </span><span class="default">IPC_CREAT</span><span class="keyword">);<br /></span><span class="default">$shmid2 </span><span class="keyword">= </span><span class="default">sem_get</span><span class="keyword">(</span><span class="default">$SHM_KEY</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">0644 </span><span class="keyword">| </span><span class="default">IPC_CREAT</span><span class="keyword">);<br /></span><span class="default">$shmid3 </span><span class="keyword">= </span><span class="default">sem_get</span><span class="keyword">(</span><span class="default">$SHM_KEY</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">0644 </span><span class="keyword">| </span><span class="default">IPC_CREAT</span><span class="keyword">);<br /><br /></span><span class="default">$data </span><span class="keyword">=  </span><span class="default">shm_attach</span><span class="keyword">(</span><span class="default">$shmid</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">$data2 </span><span class="keyword">= </span><span class="default">shm_attach</span><span class="keyword">(</span><span class="default">$shmid2</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">$data3 </span><span class="keyword">= </span><span class="default">shm_attach</span><span class="keyword">(</span><span class="default">$shmid3</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$inmem</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$data2</span><span class="keyword">,</span><span class="default">$inmem2</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$data3</span><span class="keyword">,</span><span class="default">$inmem3</span><span class="keyword">));<br /><br /></span><span class="default">shm_detach</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">shm_detach</span><span class="keyword">(</span><span class="default">$data2</span><span class="keyword">);<br /></span><span class="default">shm_detach</span><span class="keyword">(</span><span class="default">$data2</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />As you can see, test2.php doesn't insert anything into shared memory.. yet it pulls out 3 totally different arrays already stored..<br /><br />Hope that helps.. took me a bit to get it right.. everyone seems to have their own idea of how shm should be used. lol.<br /><br />BTW, not sure how the ftok works to be honest, cause I didn't change the __FILE__ to match the file path of test.php or anything.. I would think that the file path out have to be the exact same to work correctly.. oh well, it worked as-is! haha..<br /><br />- Cecil</span></code></div>
  </div>
 </div>
  <div class="note" id="564">  <div class="votes">
    <div id="Vu564">
    <a href="/manual/vote-note.php?id=564&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd564">
    <a href="/manual/vote-note.php?id=564&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V564" title="100% like this...">
    1
    </div>
  </div>
  <a href="#564" class="name">
  <strong class="user"><em>eric at superstats dot com</em></strong></a><a class="genanchor" href="#564"> &para;</a><div class="date" title="1999-02-12 07:04"><strong>26 years ago</strong></div>
  <div class="text" id="Hcom564">
<div class="phpcode"><code><span class="html">Objects are stored serialized in shm_put_var, so to find a value for memsize, you can use strlen(serialize($object_to_store_in_shm)).</span></code></div>
  </div>
 </div>
  <div class="note" id="122385">  <div class="votes">
    <div id="Vu122385">
    <a href="/manual/vote-note.php?id=122385&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122385">
    <a href="/manual/vote-note.php?id=122385&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122385" title="no votes...">
    0
    </div>
  </div>
  <a href="#122385" class="name">
  <strong class="user"><em>bobhairgrove</em></strong></a><a class="genanchor" href="#122385"> &para;</a><div class="date" title="2018-02-13 07:40"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122385">
<div class="phpcode"><code><span class="html">Under the "Notes" section, it is stated that one can cast the resource ID returned by shm_attach() to an integer as of PHP 5.3.0; however, this will NOT be the same integer as the shmid value which is returned from the native SysV function shmget() on Linux (as I was hoping it might be). The integer returned by casting is merely the ID number of the resource, which is totally useless outside of the context of these functions, AFAICT.<br /><br />To verify this, one can allocate a memory block with shm_attach() (or shmop_open()), print out the resource returned and compare it to the value in the "shmid" column when running "ipcs" in a terminal on Linux (or some other *nix OS).</span></code></div>
  </div>
 </div>
  <div class="note" id="99235">  <div class="votes">
    <div id="Vu99235">
    <a href="/manual/vote-note.php?id=99235&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99235">
    <a href="/manual/vote-note.php?id=99235&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99235" title="50% like this...">
    0
    </div>
  </div>
  <a href="#99235" class="name">
  <strong class="user"><em>somepay at gmail dot com</em></strong></a><a class="genanchor" href="#99235"> &para;</a><div class="date" title="2010-08-05 03:07"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99235">
<div class="phpcode"><code><span class="html">In my log I have found string<br />"shm_attach(): failed for key 0x366f: No space left on device" <br />But have not found any suggestion for this at php.net and at google.<br /><br />So question was how to make free memory used by shm_attach .<br />At first to view (Linux)  how many segments allocated, use <br />:~# ipcs -mu<br />then<br />limits<br />:~# ipcs -ml<br /><br />to remove segment use:<br />:~# ipcrm -m [shmid]<br /><br />otherwise you can reboot server, or launch sh script based on commands above.<br /><br />To avoid troubles with "No space left on device" ALWAYS use <br />shm_remove() &amp; shm_detach() after call shm_attach().</span></code></div>
  </div>
 </div>
  <div class="note" id="12087">  <div class="votes">
    <div id="Vu12087">
    <a href="/manual/vote-note.php?id=12087&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12087">
    <a href="/manual/vote-note.php?id=12087&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12087" title="50% like this...">
    0
    </div>
  </div>
  <a href="#12087" class="name">
  <strong class="user"><em>koester at x-itec dot de</em></strong></a><a class="genanchor" href="#12087"> &para;</a><div class="date" title="2001-03-21 12:41"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12087">
<div class="phpcode"><code><span class="html">4194304 means 4 MB and NOT 4 GB for shared memory on FreeBSD. You can increase the shared memory at runtime if you like.</span></code></div>
  </div>
 </div>
  <div class="note" id="106169">  <div class="votes">
    <div id="Vu106169">
    <a href="/manual/vote-note.php?id=106169&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106169">
    <a href="/manual/vote-note.php?id=106169&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106169" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#106169" class="name">
  <strong class="user"><em>info at tristat dot org</em></strong></a><a class="genanchor" href="#106169"> &para;</a><div class="date" title="2011-10-15 05:07"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106169">
<div class="phpcode"><code><span class="html">You might expect the SHM functions to be significantly faster than building variables from MySQL operations. Unfortunately this is not the case regarding large multidimensional arrays. I've tested write, read, update and delete operations with with a two dimensional associative array directly with SHM and in comparison with a class using MySQL and a class using SHMOP functions (with mostly offset-accurate serialization). Both classes generated the same array as stored with SHM. Unlike SHMOP the performance of SHM decreases considerably with larger arrays. At 2000 instructions with an $array[$row][$key] of 200 rows and 5 keys even MySql is faster than SHM.This might be due to the fact, that SHM deals with any kind of arrays and makes internal use the PHPs powerful serialize() function.</span></code></div>
  </div>
 </div>
  <div class="note" id="89228">  <div class="votes">
    <div id="Vu89228">
    <a href="/manual/vote-note.php?id=89228&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89228">
    <a href="/manual/vote-note.php?id=89228&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89228" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#89228" class="name">
  <strong class="user"><em>pail dot luo at gmail dot com</em></strong></a><a class="genanchor" href="#89228"> &para;</a><div class="date" title="2009-02-26 06:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89228">
<div class="phpcode"><code><span class="html">A simple Sample to introduce SHM.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if ( </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">)&lt;</span><span class="default">2 </span><span class="keyword">) {
<br />        echo </span><span class="string">"Usage: </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string"> send|recv|rem|dele ID [msg] \n\n" </span><span class="keyword">;
<br />        echo </span><span class="string">"   EX: </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string"> send 1 \"This is no 1\" \n" </span><span class="keyword">;
<br />        echo </span><span class="string">"       </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string"> recv 1 \n" </span><span class="keyword">;
<br />        echo </span><span class="string">"       </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string"> rem 1 \n" </span><span class="keyword">;
<br />        echo </span><span class="string">"       </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]</span><span class="string"> dele \n" </span><span class="keyword">;
<br />        exit;
<br />}
<br />
<br /></span><span class="comment">// $SHMKey = ftok(__FILE__, "Z");
<br /></span><span class="default">$SHMKey </span><span class="keyword">= </span><span class="string">"123456" </span><span class="keyword">;
<br />
<br /></span><span class="comment">## Create/Open a shm
<br /></span><span class="default">$seg </span><span class="keyword">= </span><span class="default">shm_attach</span><span class="keyword">( </span><span class="default">$SHMKey</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">0666 </span><span class="keyword">) ;
<br />
<br />switch ( </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] ) {
<br />    case </span><span class="string">"send"</span><span class="keyword">:
<br />        </span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$seg</span><span class="keyword">, </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]);
<br />        echo </span><span class="string">"send msg done...\n" </span><span class="keyword">;
<br />        break;
<br />        
<br />    case </span><span class="string">"recv"</span><span class="keyword">:
<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$seg</span><span class="keyword">, </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);
<br />        echo </span><span class="default">$data </span><span class="keyword">. </span><span class="string">"\n" </span><span class="keyword">;
<br />        break;
<br />    
<br />    case </span><span class="string">"rem"</span><span class="keyword">:
<br />        </span><span class="default">shm_remove_var</span><span class="keyword">(</span><span class="default">$seg</span><span class="keyword">, </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);
<br />        break;
<br />
<br />    case </span><span class="string">"dele"</span><span class="keyword">:
<br />        </span><span class="default">shm_remove</span><span class="keyword">(</span><span class="default">$seg</span><span class="keyword">);
<br />        break;
<br />    
<br />    case </span><span class="string">"dele2"</span><span class="keyword">:
<br />        `</span><span class="string">/usr/bin/ipcrm -M 123456</span><span class="keyword">`;
<br />        break;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85800">  <div class="votes">
    <div id="Vu85800">
    <a href="/manual/vote-note.php?id=85800&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85800">
    <a href="/manual/vote-note.php?id=85800&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85800" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#85800" class="name">
  <strong class="user"><em>nkatz at yahooo dot com</em></strong></a><a class="genanchor" href="#85800"> &para;</a><div class="date" title="2008-09-18 05:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85800">
<div class="phpcode"><code><span class="html">Responding to jpeter1978 at yahoo dot com ... Assuming a character is typically two bytes, the size of a serialized variable (incl array or obj) is 2 * its strlen().  The 44 is 4 more than the 24 + 16 = 40 suggested by php at cytrax dot de plus 4 bytes for worst case 4-byte alignment.  So this is probably a reliable formula if you are too lazy to align it using something similar to zeppelinux at comcast dot net as in:<br /><br />($strlen($serialized_array_or_obj) /4 ) * 4 ) + 40;<br /><br />The zeppelinux formula would use 20 (for 4-byte integer cpu) or 36 (for 64-bit or 8-byte cpu) for the ending constant so 40 or 44 is probably just achieving header padding but it certainly can't hurt.</span></code></div>
  </div>
 </div>
  <div class="note" id="18327">  <div class="votes">
    <div id="Vu18327">
    <a href="/manual/vote-note.php?id=18327&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18327">
    <a href="/manual/vote-note.php?id=18327&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18327" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#18327" class="name">
  <strong class="user"><em>php at cytrax dot de</em></strong></a><a class="genanchor" href="#18327"> &para;</a><div class="date" title="2002-01-18 08:36"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18327">
<div class="phpcode"><code><span class="html">The memsize needed for shared memory (tested on linux system) can be calculated with:<br /><br />For each varialbe you want to store: 24 Bytes<br />+ serialized var-size (see below) alligned by 4 Bytes<br />+ 16 Bytes<br /><br />For a update of a var with the same key, the memory for the old var will be needed extra.</span></code></div>
  </div>
 </div>
  <div class="note" id="10892">  <div class="votes">
    <div id="Vu10892">
    <a href="/manual/vote-note.php?id=10892&amp;page=function.shm-attach&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10892">
    <a href="/manual/vote-note.php?id=10892&amp;page=function.shm-attach&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10892" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#10892" class="name">
  <strong class="user"><em>lew at persiankitty dot com</em></strong></a><a class="genanchor" href="#10892"> &para;</a><div class="date" title="2001-01-25 04:30"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10892">
<div class="phpcode"><code><span class="html">Finding out shared memory kernel settings in FreeBSD:
<br />
<br />sys1# sysctl -a | grep -i SHM
<br />
<br />kern.ipc.shmmax: 4194304
<br />kern.ipc.shmmin: 1
<br />kern.ipc.shmmni: 96
<br />kern.ipc.shmseg: 64
<br />kern.ipc.shmall: 1024
<br />kern.ipc.shm_use_phys: 0
<br />
<br />Shows us that we can allocate a total of 4GB (wow) of shared memory, etc...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.shm-attach&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.shm-attach.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.sem-get.php" title="sem_&#8203;get">sem_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-release.php" title="sem_&#8203;release">sem_&#8203;release</a>
                        </li>
                                                <li class="">
                            <a href="function.sem-remove.php" title="sem_&#8203;remove">sem_&#8203;remove</a>
                        </li>
                                                <li class="current">
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
