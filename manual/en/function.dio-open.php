<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: dio_open - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.dio-open.php">
 <link rel="shorturl" href="https://www.php.net/dio-open">
 <link rel="alternate" href="https://www.php.net/dio-open" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.dio.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.dio-fcntl.php">
 <link rel="next" href="https://www.php.net/manual/en/function.dio-read.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.dio-open.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.dio-open.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.dio-open.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.dio-open.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.dio-open.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.dio-open.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.dio-open.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.dio-open.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.dio-open.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.dio-open.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.dio-open.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Opens a file (creating it if necessary) at a lower level than the
   C library input/ouput stream functions allow" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: dio_open - Manual" />
<meta name="twitter:description" content="Opens a file (creating it if necessary) at a lower level than the
   C library input/ouput stream functions allow" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: dio_open - Manual" />
<meta itemprop="description" content="Opens a file (creating it if necessary) at a lower level than the
   C library input/ouput stream functions allow" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Opens a file (creating it if necessary) at a lower level than the
   C library input/ouput stream functions allow" />

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
        <a href="function.dio-read.php">
          dio_read &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.dio-fcntl.php">
          &laquo; dio_fcntl        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.dio.php'>Direct IO</a></li>      <li><a href='ref.dio.php'>Direct IO Functions</a></li>      </ul>
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
            <option value='en/function.dio-open.php' selected="selected">English</option>
            <option value='de/function.dio-open.php'>German</option>
            <option value='es/function.dio-open.php'>Spanish</option>
            <option value='fr/function.dio-open.php'>French</option>
            <option value='it/function.dio-open.php'>Italian</option>
            <option value='ja/function.dio-open.php'>Japanese</option>
            <option value='pt_BR/function.dio-open.php'>Brazilian Portuguese</option>
            <option value='ru/function.dio-open.php'>Russian</option>
            <option value='tr/function.dio-open.php'>Turkish</option>
            <option value='uk/function.dio-open.php'>Ukrainian</option>
            <option value='zh/function.dio-open.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.dio-open" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">dio_open</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5 &lt; 5.1.0)</p><p class="refpurpose"><span class="refname">dio_open</span> &mdash; <span class="dc-title">
   Opens a file (creating it if necessary) at a lower level than the
   C library input/ouput stream functions allow
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.dio-open-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>dio_open</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>dio_open()</strong></span> opens a file and returns a new file
   descriptor for it.  
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.dio-open-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The pathname of the file to open.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">flags</code> parameter is a bitwise-ORed
       value comprising flags from the following list. This value
       <em>must</em> include one of
       <strong><code><a href="dio.constants.php#constant.o-rdonly">O_RDONLY</a></code></strong>, <strong><code><a href="dio.constants.php#constant.o-wronly">O_WRONLY</a></code></strong>,
       or <strong><code><a href="dio.constants.php#constant.o-rdwr">O_RDWR</a></code></strong>. Additionally, it may include
       any combination of the other flags from this list.
       <ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          <strong><code><a href="dio.constants.php#constant.o-rdonly">O_RDONLY</a></code></strong> - opens the file for read access.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="dio.constants.php#constant.o-wronly">O_WRONLY</a></code></strong> - opens the file for write access.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="dio.constants.php#constant.o-rdwr">O_RDWR</a></code></strong> - opens the file for both reading and
          writing.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="dio.constants.php#constant.o-creat">O_CREAT</a></code></strong> - creates the file, if it doesn&#039;t
          already exist.
         </p>
        </li> 
        <li class="listitem">
         <p class="para">
          <strong><code><a href="dio.constants.php#constant.o-excl">O_EXCL</a></code></strong> - if both <strong><code><a href="dio.constants.php#constant.o-creat">O_CREAT</a></code></strong>
          and <strong><code><a href="dio.constants.php#constant.o-excl">O_EXCL</a></code></strong> are set and the file already
          exists, <span class="function"><strong>dio_open()</strong></span> will fail.
         </p>
        </li> 
        <li class="listitem">
         <p class="para">
          <strong><code><a href="dio.constants.php#constant.o-trunc">O_TRUNC</a></code></strong> - if the file exists and is opened 
          for write access, the file will be truncated to zero length.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="dio.constants.php#constant.o-append">O_APPEND</a></code></strong> - write operations write data at the
          end of the file.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="dio.constants.php#constant.o-nonblock">O_NONBLOCK</a></code></strong> - sets non blocking mode.
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="dio.constants.php#constant.o-noctty">O_NOCTTY</a></code></strong> - prevent the OS from
          assigning the opened file as the process&#039;s controlling
          terminal when opening a TTY device file.
         </p>
        </li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">flags</code> contains
       <strong><code><a href="dio.constants.php#constant.o-creat">O_CREAT</a></code></strong>, <code class="parameter">mode</code> will
       set the permissions of the file (creation
       permissions). <code class="parameter">mode</code> is required for
       correct operation when <strong><code><a href="dio.constants.php#constant.o-creat">O_CREAT</a></code></strong> is
       specified in <code class="parameter">flags</code> and is ignored
       otherwise.
      </p>
      <p class="para">
       The actual permissions assigned to the created file will be
       affected by the process&#039;s <em>umask</em> setting as
       per usual.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.dio-open-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A file descriptor or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.dio-open-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-2316">
   <p><strong>Example #1 Opening a file descriptor</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$fd </span><span style="color: #007700">= </span><span style="color: #0000BB">dio_open</span><span style="color: #007700">(</span><span style="color: #DD0000">'/dev/ttyS0'</span><span style="color: #007700">, </span><span style="color: #0000BB">O_RDWR </span><span style="color: #007700">| </span><span style="color: #0000BB">O_NOCTTY </span><span style="color: #007700">| </span><span style="color: #0000BB">O_NONBLOCK</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">dio_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$fd</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>    
 </div>

 <div class="refsect1 seealso" id="refsect1-function.dio-open-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.dio-close.php" class="function" rel="rdfs-seeAlso">dio_close()</a> - Closes the file descriptor given by fd</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dio/functions/dio-open.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.dio-open%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.dio-open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dio-open.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="49317">  <div class="votes">
    <div id="Vu49317">
    <a href="/manual/vote-note.php?id=49317&amp;page=function.dio-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49317">
    <a href="/manual/vote-note.php?id=49317&amp;page=function.dio-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49317" title="66% like this...">
    4
    </div>
  </div>
  <a href="#49317" class="name">
  <strong class="user"><em>j at pureftpd dot org</em></strong></a><a class="genanchor" href="#49317"> &para;</a><div class="date" title="2005-01-23 04:13"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49317">
<div class="phpcode"><code><span class="html">Please note that dio_open()/dio_write()/dio_close() is *faster* than fopen()/fwrite()/fclose() for files.<br /><br />fwrite() has to manage a 8k buffer, while dio_write() just issue a single write(). The end result is less system calls and less memory access.<br /><br />Also, giving the full size to write() as with dio_write() let filesystems properly use preallocation in order to avoid fragmentation.</span></code></div>
  </div>
 </div>
  <div class="note" id="96534">  <div class="votes">
    <div id="Vu96534">
    <a href="/manual/vote-note.php?id=96534&amp;page=function.dio-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96534">
    <a href="/manual/vote-note.php?id=96534&amp;page=function.dio-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96534" title="58% like this...">
    2
    </div>
  </div>
  <a href="#96534" class="name">
  <strong class="user"><em>Marius Karthaus</em></strong></a><a class="genanchor" href="#96534"> &para;</a><div class="date" title="2010-03-03 12:02"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96534">
<div class="phpcode"><code><span class="html">One of the prominent reasons to use direct IO, is for it's ability to do actual direct IO, bypassing the operating system cache and getting the data from the disk directly.  <br />The flag to do that (O_DIRECT) is missing from the documentation above. Maybe for good reasons, because this type of IO only works on blockdevices, not on files, and should only be used if you are **really** sure what you are doing.</span></code></div>
  </div>
 </div>
  <div class="note" id="108210">  <div class="votes">
    <div id="Vu108210">
    <a href="/manual/vote-note.php?id=108210&amp;page=function.dio-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108210">
    <a href="/manual/vote-note.php?id=108210&amp;page=function.dio-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108210" title="50% like this...">
    0
    </div>
  </div>
  <a href="#108210" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#108210"> &para;</a><div class="date" title="2012-04-08 02:12"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108210">
<div class="phpcode"><code><span class="html">"The prominent reason" to use direct I/O is when your application provides its own cache feature, so you won't do double caching</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.dio-open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.dio-open.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.dio.php">Direct IO Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.dio-close.php" title="dio_&#8203;close">dio_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.dio-fcntl.php" title="dio_&#8203;fcntl">dio_&#8203;fcntl</a>
                        </li>
                                                <li class="current">
                            <a href="function.dio-open.php" title="dio_&#8203;open">dio_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.dio-read.php" title="dio_&#8203;read">dio_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.dio-seek.php" title="dio_&#8203;seek">dio_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.dio-stat.php" title="dio_&#8203;stat">dio_&#8203;stat</a>
                        </li>
                                                <li class="">
                            <a href="function.dio-tcsetattr.php" title="dio_&#8203;tcsetattr">dio_&#8203;tcsetattr</a>
                        </li>
                                                <li class="">
                            <a href="function.dio-truncate.php" title="dio_&#8203;truncate">dio_&#8203;truncate</a>
                        </li>
                                                <li class="">
                            <a href="function.dio-write.php" title="dio_&#8203;write">dio_&#8203;write</a>
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
