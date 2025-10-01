<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: shmop_open - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.shmop-open.php">
 <link rel="shorturl" href="https://www.php.net/shmop-open">
 <link rel="alternate" href="https://www.php.net/shmop-open" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.shmop.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.shmop-delete.php">
 <link rel="next" href="https://www.php.net/manual/en/function.shmop-read.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.shmop-open.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.shmop-open.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.shmop-open.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.shmop-open.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.shmop-open.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.shmop-open.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.shmop-open.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.shmop-open.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.shmop-open.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.shmop-open.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.shmop-open.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create or open shared memory block" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: shmop_open - Manual" />
<meta name="twitter:description" content="Create or open shared memory block" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: shmop_open - Manual" />
<meta itemprop="description" content="Create or open shared memory block" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create or open shared memory block" />

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
        <a href="function.shmop-read.php">
          shmop_read &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.shmop-delete.php">
          &laquo; shmop_delete        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.shmop.php'>Shared Memory</a></li>      <li><a href='ref.shmop.php'>Shared Memory Functions</a></li>      </ul>
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
            <option value='en/function.shmop-open.php' selected="selected">English</option>
            <option value='de/function.shmop-open.php'>German</option>
            <option value='es/function.shmop-open.php'>Spanish</option>
            <option value='fr/function.shmop-open.php'>French</option>
            <option value='it/function.shmop-open.php'>Italian</option>
            <option value='ja/function.shmop-open.php'>Japanese</option>
            <option value='pt_BR/function.shmop-open.php'>Brazilian Portuguese</option>
            <option value='ru/function.shmop-open.php'>Russian</option>
            <option value='tr/function.shmop-open.php'>Turkish</option>
            <option value='uk/function.shmop-open.php'>Ukrainian</option>
            <option value='zh/function.shmop-open.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.shmop-open" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">shmop_open</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">shmop_open</span> &mdash; <span class="dc-title">Create or open shared memory block</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.shmop-open-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>shmop_open</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$key</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mode</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$permissions</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$size</code></span><br>): <span class="type"><span class="type"><a href="class.shmop.php" class="type Shmop">Shmop</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>shmop_open()</strong></span> can create or open a shared memory block.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.shmop-open-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">key</code></dt>
     <dd>
      <p class="para">
       System&#039;s id for the shared memory block.
       Can be passed as a decimal or hex.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       The flags that you can use:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          &quot;a&quot; for access (sets SHM_RDONLY for shmat)
          use this flag when you need to open an existing shared memory
          segment for read only
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          &quot;c&quot; for create (sets IPC_CREATE)
          use this flag when you need to create a new shared memory segment
          or if a segment with the same key exists, try to open it for read
          and write
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          &quot;w&quot; for read &amp; write access
          use this flag when you need to read and write to a shared memory
          segment, use this flag in most cases.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          &quot;n&quot; create a new memory segment (sets IPC_CREATE|IPC_EXCL)
          use this flag when you want to create a new shared memory segment
          but if one already exists with the same flag, fail. This is useful
          for security purposes, using this you can prevent race condition
          exploits.
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">permissions</code></dt>
     <dd>
      <p class="para">
       The permissions that you wish to assign to your memory segment, those
       are the same as permission for a file. Permissions need to be passed
       in octal form, like for example <code class="literal">0644</code>
      </p>
     </dd>
    
    
     <dt><code class="parameter">size</code></dt>
     <dd>
      <p class="para">
       The size of the shared memory block you wish to create in bytes
      </p>
     </dd>
    
   </dl>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Note: the 3rd and 4th should be entered as 0 if you are opening an
     existing memory segment.
    </p>
   </p></blockquote>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.shmop-open-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   On success <span class="function"><strong>shmop_open()</strong></span> will return a <span class="classname"><a href="class.shmop.php" class="classname">Shmop</a></span> instance that you can
   use to access the shared memory segment you&#039;ve created. <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is
   returned on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.shmop-open-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If <code class="parameter">mode</code> is invalid, or <code class="parameter">size</code> is less than or equal to zero,
   a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown.
   On other failures, <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.shmop-open-changelog">
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
       On success, this function returns an <span class="classname"><a href="class.shmop.php" class="classname">Shmop</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       If <code class="parameter">mode</code> is invalid, or <code class="parameter">size</code> is less than or equal to zero,
       a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown; previously <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was emitted instead,
       and the function returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.shmop-open-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3646">
    <p><strong>Example #1 Create a new shared memory block</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$shm_key </span><span style="color: #007700">= </span><span style="color: #0000BB">ftok</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">, </span><span style="color: #DD0000">'t'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$shm_id </span><span style="color: #007700">= </span><span style="color: #0000BB">shmop_open</span><span style="color: #007700">(</span><span style="color: #0000BB">$shm_key</span><span style="color: #007700">, </span><span style="color: #DD0000">"c"</span><span style="color: #007700">, </span><span style="color: #0000BB">0644</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   This example opened a shared memory block with a system id returned by
   <span class="function"><a href="function.ftok.php" class="function">ftok()</a></span>.
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.shmop-open-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.shmop-close.php" class="function" rel="rdfs-seeAlso">shmop_close()</a> - Close shared memory block</span></li>
    <li><span class="function"><a href="function.shmop-delete.php" class="function" rel="rdfs-seeAlso">shmop_delete()</a> - Delete shared memory block</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/shmop/functions/shmop-open.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.shmop-open%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.shmop-open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.shmop-open.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119112">  <div class="votes">
    <div id="Vu119112">
    <a href="/manual/vote-note.php?id=119112&amp;page=function.shmop-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119112">
    <a href="/manual/vote-note.php?id=119112&amp;page=function.shmop-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119112" title="72% like this...">
    5
    </div>
  </div>
  <a href="#119112" class="name">
  <strong class="user"><em>kakkau at grr dot la</em></strong></a><a class="genanchor" href="#119112"> &para;</a><div class="date" title="2016-04-04 08:54"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119112">
<div class="phpcode"><code><span class="html">On *nix systems shmop_open is able to create an "infinite" amount of segments when setting $key = 0.<br /><br />After executing the following command twice in an interactive shell<br />php &gt; $res = shmop_open(0,"n",0600,1024);<br /><br />list the memory segments currently present <br />$ ipcs -m<br /><br />------ Shared Memory Segments --------<br />key        shmid      owner      perms      bytes      nattch     status<br />0x00000000 2293762    user       600        1024       0<br />0x00000000 2326531    user       600        1024       0<br /><br />For any integer &lt;&gt; 0 in conjunction with the flag "n" shmop_open works like documented. It fails.</span></code></div>
  </div>
 </div>
  <div class="note" id="39541">  <div class="votes">
    <div id="Vu39541">
    <a href="/manual/vote-note.php?id=39541&amp;page=function.shmop-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39541">
    <a href="/manual/vote-note.php?id=39541&amp;page=function.shmop-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39541" title="66% like this...">
    4
    </div>
  </div>
  <a href="#39541" class="name">
  <strong class="user"><em>daniele_dll at yahoo dot it</em></strong></a><a class="genanchor" href="#39541"> &para;</a><div class="date" title="2004-02-01 01:28"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39541">
<div class="phpcode"><code><span class="html">There is a little ftok function. This function isn't included into php for windows so i've grabbed it directly from linux glibc 2.3.2 source code. I hope that this can be useful.<br />There is the code:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ftok</span><span class="keyword">(</span><span class="default">$pathname</span><span class="keyword">, </span><span class="default">$proj_id</span><span class="keyword">) {<br />    </span><span class="default">$st </span><span class="keyword">= @</span><span class="default">stat</span><span class="keyword">(</span><span class="default">$pathname</span><span class="keyword">);<br />    if (!</span><span class="default">$st</span><span class="keyword">) {<br />        return -</span><span class="default">1</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">$key </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%u"</span><span class="keyword">, ((</span><span class="default">$st</span><span class="keyword">[</span><span class="string">'ino'</span><span class="keyword">] &amp; </span><span class="default">0xffff</span><span class="keyword">) | ((</span><span class="default">$st</span><span class="keyword">[</span><span class="string">'dev'</span><span class="keyword">] &amp; </span><span class="default">0xff</span><span class="keyword">) &lt;&lt; </span><span class="default">16</span><span class="keyword">) | ((</span><span class="default">$proj_id </span><span class="keyword">&amp; </span><span class="default">0xff</span><span class="keyword">) &lt;&lt; </span><span class="default">24</span><span class="keyword">)));<br />    return </span><span class="default">$key</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">ftok</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">"SCRIPT_FILENAME"</span><span class="keyword">], </span><span class="default">250</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />sorry for my english :)</span></code></div>
  </div>
 </div>
  <div class="note" id="48743">  <div class="votes">
    <div id="Vu48743">
    <a href="/manual/vote-note.php?id=48743&amp;page=function.shmop-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48743">
    <a href="/manual/vote-note.php?id=48743&amp;page=function.shmop-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48743" title="60% like this...">
    1
    </div>
  </div>
  <a href="#48743" class="name">
  <strong class="user"><em>Craig Manley</em></strong></a><a class="genanchor" href="#48743"> &para;</a><div class="date" title="2005-01-05 05:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48743">
<div class="phpcode"><code><span class="html">To: macmaster at pobox dot com:<br /><br />To clear up some new confusion: you said the shm key is 8 bytes long. As far as I know it's 4 bytes (32bits).<br />Check out the output of ipcs on Linux below to see what I mean.<br /><br />------ Shared Memory Segments --------<br />key        shmid      owner      perms      bytes      nattch     status      <br />0x6e6a694d 65538      mijnbel   644        65536      0                       <br />0x326e794d 98307      mijnbel   644        65536      0                       <br />0x62417347 131076     smsklap   644        65536      0</span></code></div>
  </div>
 </div>
  <div class="note" id="122020">  <div class="votes">
    <div id="Vu122020">
    <a href="/manual/vote-note.php?id=122020&amp;page=function.shmop-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122020">
    <a href="/manual/vote-note.php?id=122020&amp;page=function.shmop-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122020" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122020" class="name">
  <strong class="user"><em>kakkau at grr dot la</em></strong></a><a class="genanchor" href="#122020"> &para;</a><div class="date" title="2017-12-14 06:39"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122020">
<div class="phpcode"><code><span class="html">One is not able to reconnect to a segment with key 0. For any other key (e.g. 1) the flags just work fine.<br /><br />php &gt; $soid = shmop_open(0,"n",0600,10);<br />php &gt; $soid = shmop_open(0,"w",0600,10);<br />PHP Warning:  shmop_open(): unable to attach or create shared memory segment 'Invalid argument' in php shell code on line 1<br />PHP Stack trace:<br />PHP   1. {main}() php shell code:0<br />PHP   2. shmop_open(0, 'w', 384, 10) php shell code:1</span></code></div>
  </div>
 </div>
  <div class="note" id="116787">  <div class="votes">
    <div id="Vu116787">
    <a href="/manual/vote-note.php?id=116787&amp;page=function.shmop-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116787">
    <a href="/manual/vote-note.php?id=116787&amp;page=function.shmop-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116787" title="50% like this...">
    0
    </div>
  </div>
  <a href="#116787" class="name">
  <strong class="user"><em>Filippo Fadda</em></strong></a><a class="genanchor" href="#116787"> &para;</a><div class="date" title="2015-02-27 05:37"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116787">
<div class="phpcode"><code><span class="html">I'm having the same issue affecting XP and described below, on Mac OS X Lion.<br /><br />To solve it, use before 'a' flag, then 'n'. Avoid 'c' flag.<br /><br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= </span><span class="string">'Hello World'</span><span class="keyword">;<br /><br /></span><span class="default">shm_key </span><span class="keyword">= </span><span class="default">ftok</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PHP_SELF'</span><span class="keyword">]);<br /><br />if (@</span><span class="default">$shm_id </span><span class="keyword">= </span><span class="default">shmop_open</span><span class="keyword">(</span><span class="default">$shm_key</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">, </span><span class="default">0644</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">))<br />  </span><span class="default">shmop_delete</span><span class="keyword">(</span><span class="default">$shm_id</span><span class="keyword">);<br /><br /></span><span class="default">$shm_id </span><span class="keyword">= </span><span class="default">shmop_open</span><span class="keyword">(</span><span class="default">$shm_key</span><span class="keyword">, </span><span class="string">'n'</span><span class="keyword">, </span><span class="default">0644</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">));<br /><br />if (</span><span class="default">$shmId</span><span class="keyword">) {<br />  </span><span class="default">shmop_write</span><span class="keyword">(</span><span class="default">$shmId</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />  </span><span class="default">shmop_close</span><span class="keyword">(</span><span class="default">$shmId</span><span class="keyword">);<br />}<br />else<br />  throw new </span><span class="default">RuntimeException</span><span class="keyword">(</span><span class="string">"Couldn't create shared memory segment."</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113542">  <div class="votes">
    <div id="Vu113542">
    <a href="/manual/vote-note.php?id=113542&amp;page=function.shmop-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113542">
    <a href="/manual/vote-note.php?id=113542&amp;page=function.shmop-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113542" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113542" class="name">
  <strong class="user"><em>thanks at forthefish dot com</em></strong></a><a class="genanchor" href="#113542"> &para;</a><div class="date" title="2013-10-28 06:24"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113542">
<div class="phpcode"><code><span class="html">These shared memory functions are kind of silly on Windows where sem_get() and friends nor any sort of synchronization object is available (as of PHP 5.5.5) to perform proper locking prior to access.  A core PHP dev needs to write some wrappers for sem_get() for Windows as they did for shmop to really round out this feature.<br /><br />The implementation of shmop for Windows is pretty slick - the author basically ported variations of POSIX functions to Windows equivalent prototypes.</span></code></div>
  </div>
 </div>
  <div class="note" id="79430">  <div class="votes">
    <div id="Vu79430">
    <a href="/manual/vote-note.php?id=79430&amp;page=function.shmop-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79430">
    <a href="/manual/vote-note.php?id=79430&amp;page=function.shmop-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79430" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79430" class="name">
  <strong class="user"><em>erelsgl at gmail dot com</em></strong></a><a class="genanchor" href="#79430"> &para;</a><div class="date" title="2007-11-27 03:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79430">
<div class="phpcode"><code><span class="html">=== Checking if a shared memory exists ===<br />The solution provided by Mitchell_Shnier at ieee dot orgZ doesn't work on my computer - I get a warning "Invalid flag ac".<br /><br />In order to check if a shared-memory exists, you just have to open it with the "a" or "w" flag, while hiding the warnings using the "@" operator:<br /><span class="default">&lt;?php<br /></span><span class="keyword">@</span><span class="default">$shid </span><span class="keyword">= </span><span class="default">shmop_open</span><span class="keyword">(</span><span class="default">$systemId</span><span class="keyword">, </span><span class="string">"a"</span><span class="keyword">, </span><span class="default">0666</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />if (!empty(</span><span class="default">$shid</span><span class="keyword">)) {<br />            ... </span><span class="default">shared memory exists<br /></span><span class="keyword">} else {<br />            ... </span><span class="default">shared memory doesn</span><span class="string">'t exist<br />}<br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="35361">  <div class="votes">
    <div id="Vu35361">
    <a href="/manual/vote-note.php?id=35361&amp;page=function.shmop-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35361">
    <a href="/manual/vote-note.php?id=35361&amp;page=function.shmop-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35361" title="50% like this...">
    0
    </div>
  </div>
  <a href="#35361" class="name">
  <strong class="user"><em>Chris Petersen</em></strong></a><a class="genanchor" href="#35361"> &para;</a><div class="date" title="2003-08-28 11:18"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35361">
<div class="phpcode"><code><span class="html">Be warned that if you try to shmop_open with a key set to zero, shmop_open will seemingly work, and you can write to it, but you will not be able to read from it or delete it.  If you're not careful, you can continue doing this - creating more and more shared memory blocks at "zero" until eventually you WILL start getting errors saying that php can't access or create the shared memory block, and you will have to restart your machine to free up all of those "zero" blocks.</span></code></div>
  </div>
 </div>
  <div class="note" id="118007">  <div class="votes">
    <div id="Vu118007">
    <a href="/manual/vote-note.php?id=118007&amp;page=function.shmop-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118007">
    <a href="/manual/vote-note.php?id=118007&amp;page=function.shmop-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118007" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#118007" class="name">
  <strong class="user"><em>Colin Paterson</em></strong></a><a class="genanchor" href="#118007"> &para;</a><div class="date" title="2015-09-17 08:14"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118007">
<div class="phpcode"><code><span class="html">If you are running your main script as say user "root" but need to open a Shared Memory Segment as another user (from your main script) such as say "www-data" then this works:<br /><br />exec("sudo -u www-data php -r 'shmop_open(0xee4, "c", 0770, 100);'"); //Create Shared Memory segment as USER www-data<br /><br />$SharedMemorySegment = shmop_open(0xee4, "c", 0770, 100); <br />        if (!$SharedMemorySegment) {<br />            echo "Couldn't create shared memory segment\n";<br />        }</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.shmop-open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.shmop-open.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.shmop.php">Shared Memory Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.shmop-close.php" title="shmop_&#8203;close">shmop_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.shmop-delete.php" title="shmop_&#8203;delete">shmop_&#8203;delete</a>
                        </li>
                                                <li class="current">
                            <a href="function.shmop-open.php" title="shmop_&#8203;open">shmop_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.shmop-read.php" title="shmop_&#8203;read">shmop_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.shmop-size.php" title="shmop_&#8203;size">shmop_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.shmop-write.php" title="shmop_&#8203;write">shmop_&#8203;write</a>
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
