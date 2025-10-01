<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: sem_acquire - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.sem-acquire.php">
 <link rel="shorturl" href="https://www.php.net/sem-acquire">
 <link rel="alternate" href="https://www.php.net/sem-acquire" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.msg-stat-queue.php">
 <link rel="next" href="https://www.php.net/manual/en/function.sem-get.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.sem-acquire.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.sem-acquire.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.sem-acquire.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.sem-acquire.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.sem-acquire.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.sem-acquire.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.sem-acquire.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.sem-acquire.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.sem-acquire.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.sem-acquire.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.sem-acquire.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Acquire a semaphore" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: sem_acquire - Manual" />
<meta name="twitter:description" content="Acquire a semaphore" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: sem_acquire - Manual" />
<meta itemprop="description" content="Acquire a semaphore" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Acquire a semaphore" />

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
        <a href="function.sem-get.php">
          sem_get &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.msg-stat-queue.php">
          &laquo; msg_stat_queue        </a>
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
            <option value='en/function.sem-acquire.php' selected="selected">English</option>
            <option value='de/function.sem-acquire.php'>German</option>
            <option value='es/function.sem-acquire.php'>Spanish</option>
            <option value='fr/function.sem-acquire.php'>French</option>
            <option value='it/function.sem-acquire.php'>Italian</option>
            <option value='ja/function.sem-acquire.php'>Japanese</option>
            <option value='pt_BR/function.sem-acquire.php'>Brazilian Portuguese</option>
            <option value='ru/function.sem-acquire.php'>Russian</option>
            <option value='tr/function.sem-acquire.php'>Turkish</option>
            <option value='uk/function.sem-acquire.php'>Ukrainian</option>
            <option value='zh/function.sem-acquire.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.sem-acquire" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">sem_acquire</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">sem_acquire</span> &mdash; <span class="dc-title">Acquire a semaphore</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.sem-acquire-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>sem_acquire</strong></span>(<span class="methodparam"><span class="type"><a href="class.sysvsemaphore.php" class="type SysvSemaphore">SysvSemaphore</a></span> <code class="parameter">$semaphore</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$non_blocking</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>sem_acquire()</strong></span> by default blocks (if necessary) until the
   semaphore can be acquired.  A process attempting to acquire a semaphore which
   it has already acquired will block forever if acquiring the semaphore would
   cause its maximum number of semaphore to be exceeded.
  </p>
  <p class="para">
   After processing a request, any semaphores acquired by the process but not
   explicitly released will be released automatically and a warning will be
   generated.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.sem-acquire-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">semaphore</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">semaphore</code> is a semaphore
       obtained from <span class="function"><a href="function.sem-get.php" class="function">sem_get()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">non_blocking</code></dt>
     <dd>
      <p class="para">
       Specifies if the process shouldn&#039;t wait for the semaphore to be acquired.
       If set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the call will return
       <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> immediately if a semaphore cannot be immediately
       acquired.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.sem-acquire-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 
 <div class="refsect1 changelog" id="refsect1-function.sem-acquire-changelog">
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
        <code class="parameter">semaphore</code> expects a <span class="classname"><a href="class.sysvsemaphore.php" class="classname">SysvSemaphore</a></span>
        instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.sem-acquire-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.sem-get.php" class="function" rel="rdfs-seeAlso">sem_get()</a> - Get a semaphore id</span></li>
    <li><span class="function"><a href="function.sem-release.php" class="function" rel="rdfs-seeAlso">sem_release()</a> - Release a semaphore</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sem/functions/sem-acquire.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.sem-acquire%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.sem-acquire&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sem-acquire.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="41527">  <div class="votes">
    <div id="Vu41527">
    <a href="/manual/vote-note.php?id=41527&amp;page=function.sem-acquire&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41527">
    <a href="/manual/vote-note.php?id=41527&amp;page=function.sem-acquire&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41527" title="100% like this...">
    3
    </div>
  </div>
  <a href="#41527" class="name">
  <strong class="user"><em>gladd at trash dot eris dot qinetiq dot com</em></strong></a><a class="genanchor" href="#41527"> &para;</a><div class="date" title="2004-04-13 02:02"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41527">
<div class="phpcode"><code><span class="html">Just to clarify what is meant by "process" above:<br /><br />On the Apache webserver, many PHP requests will be executed within the same process space because it is multithreaded. However, any semaphores got and acquired by a script and not released and removed will still be automatically cleaned up by the PHP interpreter each time the script terminates.<br /><br />Remove any trash before emailing!</span></code></div>
  </div>
 </div>
  <div class="note" id="107487">  <div class="votes">
    <div id="Vu107487">
    <a href="/manual/vote-note.php?id=107487&amp;page=function.sem-acquire&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107487">
    <a href="/manual/vote-note.php?id=107487&amp;page=function.sem-acquire&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107487" title="60% like this...">
    6
    </div>
  </div>
  <a href="#107487" class="name">
  <strong class="user"><em>Pinky</em></strong></a><a class="genanchor" href="#107487"> &para;</a><div class="date" title="2012-02-13 08:29"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107487">
<div class="phpcode"><code><span class="html">sem_acquire() is blocking, meaning that subsequent calls with the same semaphore will block indefinitely until the semaphore is released. This ensures serialization, but it is not very practical if all you want to do is check if you should proceed or not. Unfortunately, PHP does not yet support any method of querying the state of a semaphore in a non-blocking manner.<br /><br />It may seem possible to put together such a mechanism by hand, using shared memory (shm_ functions). However, be warned that it is not trivial and ultimately non-productive. You cannot, for example, simply pick a shared mem var, store the semaphore key and query it. Such an operation would be non-transactional and non-atomic ie. it is possible for two or more parallel processes to manage to read "not locked" from the shared mem var before one of them manages to mark it "locked". You would have to use a (blocking) semaphore to serialize access to the shared mem var, thus recreating the very problem you are trying to solve.<br /><br />In other words, if non-blocking queries are crucial to you, you need to either request that this issue be solved by the PHP designers, or pick another mechanism to do your locking, one that already has this feature.</span></code></div>
  </div>
 </div>
  <div class="note" id="113605">  <div class="votes">
    <div id="Vu113605">
    <a href="/manual/vote-note.php?id=113605&amp;page=function.sem-acquire&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113605">
    <a href="/manual/vote-note.php?id=113605&amp;page=function.sem-acquire&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113605" title="62% like this...">
    2
    </div>
  </div>
  <a href="#113605" class="name">
  <strong class="user"><em>Sander Backus</em></strong></a><a class="genanchor" href="#113605"> &para;</a><div class="date" title="2013-11-04 09:01"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113605">
<div class="phpcode"><code><span class="html">Note that when you reset $sem_identifier the semaphore won't block anymore!<br /><br />This code does NOT work: <br />    $key     = ftok(__FILE__,'m');<br />    $a        = sem_get($key);<br />    sem_acquire($a);<br />    $a = false;<br /><br />while this one does: <br /><br />    $key     = ftok(__FILE__,'m');<br />    $a        = sem_get($key);<br />    sem_acquire($a);<br />    //$a = false;<br /><br />So: use unique var names for your identifier!</span></code></div>
  </div>
 </div>
  <div class="note" id="107292">  <div class="votes">
    <div id="Vu107292">
    <a href="/manual/vote-note.php?id=107292&amp;page=function.sem-acquire&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107292">
    <a href="/manual/vote-note.php?id=107292&amp;page=function.sem-acquire&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107292" title="57% like this...">
    1
    </div>
  </div>
  <a href="#107292" class="name">
  <strong class="user"><em>arjuna w</em></strong></a><a class="genanchor" href="#107292"> &para;</a><div class="date" title="2012-01-28 01:14"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107292">
<div class="phpcode"><code><span class="html">In my tests sem_acquire() is 150 times faster than flock()</span></code></div>
  </div>
 </div>
  <div class="note" id="125342">  <div class="votes">
    <div id="Vu125342">
    <a href="/manual/vote-note.php?id=125342&amp;page=function.sem-acquire&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125342">
    <a href="/manual/vote-note.php?id=125342&amp;page=function.sem-acquire&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125342" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#125342" class="name">
  <strong class="user"><em>Ben</em></strong></a><a class="genanchor" href="#125342"> &para;</a><div class="date" title="2020-09-09 05:50"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125342">
<div class="phpcode"><code><span class="html">I recently had to use semaphores to avoid running an update of a database concurrently.<br /><br />For testing it I used two browser windows (chrome) on the same Desktop.<br /><br />In this case semaphores did not work as expected.<br />Also flock on a file did not work as expected.<br /><br />Running the script from command line did work as expected.<br /><br />As soon as I used two different browsers, one on my desktop another within a virutal machine, it works like expected.<br /><br />Hope that helps anybody avoiding strange debugging sessions on this topic...</span></code></div>
  </div>
 </div>
  <div class="note" id="116666">  <div class="votes">
    <div id="Vu116666">
    <a href="/manual/vote-note.php?id=116666&amp;page=function.sem-acquire&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116666">
    <a href="/manual/vote-note.php?id=116666&amp;page=function.sem-acquire&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116666" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#116666" class="name">
  <strong class="user"><em>anatoliy at ukhvanovy dot name</em></strong></a><a class="genanchor" href="#116666"> &para;</a><div class="date" title="2015-02-06 09:25"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116666">
<div class="phpcode"><code><span class="html">If you need non-blocking semaphores, here is an example how you may implement it. Use a shared memory variable to mark whether or not a lock exists and then use a semaphore around operations against that variable. I'll call my shared variable as 'token'.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">$resourceSemaphore </span><span class="keyword">= </span><span class="default">sem_get</span><span class="keyword">(</span><span class="default">7</span><span class="keyword">);<br /></span><span class="default">$tokenSemaphore </span><span class="keyword">= </span><span class="default">sem_get</span><span class="keyword">(</span><span class="default">8</span><span class="keyword">);<br /></span><span class="default">$tokenValue </span><span class="keyword">= </span><span class="default">shm_attach</span><span class="keyword">(</span><span class="default">9</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /><br />function </span><span class="default">myEcho</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">) {<br />    echo </span><span class="default">microtime</span><span class="keyword">() . </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$v </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// sem_remove($resourceSemaphore);<br />// sem_remove($tokenSemaphore);<br />// exit();<br /><br /></span><span class="keyword">function </span><span class="default">try_lock</span><span class="keyword">() {<br />    global </span><span class="default">$resourceSemaphore</span><span class="keyword">, </span><span class="default">$tokenSemaphore</span><span class="keyword">, </span><span class="default">$tokenValue</span><span class="keyword">;<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'begin try_lock()'</span><span class="keyword">);<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'acquire token semaphore'</span><span class="keyword">);<br />    </span><span class="default">sem_acquire</span><span class="keyword">(</span><span class="default">$tokenSemaphore</span><span class="keyword">);<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'    token semaphore acquired'</span><span class="keyword">);<br />    </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$tokenValue</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">);<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'    token value: ' </span><span class="keyword">. </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />    </span><span class="default">$exit </span><span class="keyword">= </span><span class="default">$tmp</span><span class="keyword">;<br />    if (!</span><span class="default">$exit</span><span class="keyword">) {<br />        </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$tokenValue</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$tokenValue</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">);<br />        </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'    token new value: ' </span><span class="keyword">. </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />    }<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'release token semaphore'</span><span class="keyword">);<br />    </span><span class="default">sem_release</span><span class="keyword">(</span><span class="default">$tokenSemaphore</span><span class="keyword">);<br />    if (</span><span class="default">$exit</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'acquire resource semaphore'</span><span class="keyword">);<br />    </span><span class="default">sem_acquire</span><span class="keyword">(</span><span class="default">$resourceSemaphore</span><span class="keyword">);<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'    resource semaphore acquired'</span><span class="keyword">);<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">release</span><span class="keyword">() {<br />    global </span><span class="default">$resourceSemaphore</span><span class="keyword">, </span><span class="default">$tokenSemaphore</span><span class="keyword">, </span><span class="default">$tokenValue</span><span class="keyword">;<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'release resource semaphore'</span><span class="keyword">);<br />    </span><span class="default">sem_release</span><span class="keyword">(</span><span class="default">$resourceSemaphore</span><span class="keyword">);<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'acquire token semaphore'</span><span class="keyword">);<br />    </span><span class="default">sem_acquire</span><span class="keyword">(</span><span class="default">$tokenSemaphore</span><span class="keyword">);<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'    token semaphore acquired'</span><span class="keyword">);<br />    </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$tokenValue</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">);<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'    token value: ' </span><span class="keyword">. </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />    </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">shm_put_var</span><span class="keyword">(</span><span class="default">$tokenValue</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br />    </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">shm_get_var</span><span class="keyword">(</span><span class="default">$tokenValue</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">);<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'    token new value: ' </span><span class="keyword">. </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'release token semaphore'</span><span class="keyword">);<br />    </span><span class="default">sem_release</span><span class="keyword">(</span><span class="default">$tokenSemaphore</span><span class="keyword">);<br />}<br /><br />for (</span><span class="default">$triesLeft </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">; </span><span class="default">$triesLeft </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; !</span><span class="default">try_lock</span><span class="keyword">(); </span><span class="default">$triesLeft</span><span class="keyword">--) {<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'failed to acquire resource'</span><span class="keyword">);<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'wait for 1 sec'</span><span class="keyword">);<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'try again'</span><span class="keyword">);<br />}<br /></span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'    access the resource for 4 sec'</span><span class="keyword">);<br /></span><span class="comment">//paste here your code, accessing your resource<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">release</span><span class="keyword">();<br /></span><span class="default">myEcho</span><span class="keyword">(</span><span class="string">'the end'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>When I execute this script in two parallel instances, I get the following output:<br />-------(first instance)----------------------------------------<br />... 482 begin try_lock()<br />... 482 acquire token semaphore<br />... 482     token semaphore acquired<br />... 482     token value: false<br />... 482     token new value: true<br />... 482 release token semaphore<br />... 482 acquire resource semaphore<br />... 482     resource semaphore acquired<br />... 482     access the resource for 4 sec<br />... 486 release resource semaphore<br />... 486 acquire token semaphore<br />... 486     token semaphore acquired<br />... 486     token value: true<br />... 486     token new value: false<br />... 486 release token semaphore<br />... 486 the end<br />-------(second instance)----------------------------------------<br />... 485 begin try_lock()<br />... 485 acquire token semaphore<br />... 485     token semaphore acquired<br />... 485     token value: true<br />... 485 release token semaphore<br />... 485 failed to acquire resource<br />... 485 wait for 1 sec<br />... <br />... 486 wait for 1 sec<br />... 487 try again<br />... 487 begin try_lock()<br />... 487 acquire token semaphore<br />... 487     token semaphore acquired<br />... 487     token value: false<br />... 487     token new value: true<br />... 487 release token semaphore<br />... 487 acquire resource semaphore<br />... 487     resource semaphore acquired<br />... 487     access the resource for 4 sec<br />... 491 release resource semaphore<br />... 491 acquire token semaphore<br />... 491     token semaphore acquired<br />... 491     token value: true<br />... 491     token new value: false<br />... 491 release token semaphore<br />... 491 the end</span></code></div>
  </div>
 </div>
  <div class="note" id="116663">  <div class="votes">
    <div id="Vu116663">
    <a href="/manual/vote-note.php?id=116663&amp;page=function.sem-acquire&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116663">
    <a href="/manual/vote-note.php?id=116663&amp;page=function.sem-acquire&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116663" title="0% like this...">
    -5
    </div>
  </div>
  <a href="#116663" class="name">
  <strong class="user"><em>anatoliy at ukhvanovy dot name</em></strong></a><a class="genanchor" href="#116663"> &para;</a><div class="date" title="2015-02-06 05:33"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116663">
<div class="phpcode"><code><span class="html">Unfortunately, PHP does not currently support non-blocking semaphores.<br /><br />If something like this is necessary you can utilize semaphores together with shared memory to create your own non-blocking lock mechanisms.<br /><br />Use a shared memory variable to mark whether or not a lock exists and then use a semaphore around operations against that variable.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.sem-acquire&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sem-acquire.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
