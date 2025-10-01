<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/eio.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/eio.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/eio.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.eio.php">
 <link rel="prev" href="https://www.php.net/manual/en/eio.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/eio.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/eio.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/eio.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/eio.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/eio.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/eio.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/eio.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/eio.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/eio.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/eio.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/eio.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/eio.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="eio.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="eio.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.eio.php'>Eio</a></li>      </ul>
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
            <option value='en/eio.constants.php' selected="selected">English</option>
            <option value='de/eio.constants.php'>German</option>
            <option value='es/eio.constants.php'>Spanish</option>
            <option value='fr/eio.constants.php'>French</option>
            <option value='it/eio.constants.php'>Italian</option>
            <option value='ja/eio.constants.php'>Japanese</option>
            <option value='pt_BR/eio.constants.php'>Brazilian Portuguese</option>
            <option value='ru/eio.constants.php'>Russian</option>
            <option value='tr/eio.constants.php'>Turkish</option>
            <option value='uk/eio.constants.php'>Ukrainian</option>
            <option value='zh/eio.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="eio.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>

 <p class="para">Request priority constants:
  <dl>

   
    <dt id="constant.eio-pri-min">
     <strong><code><a href="eio.constants.php#constant.eio-pri-min">EIO_PRI_MIN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Request minimal prioriry
     </span>
    </dd>
   
   
    <dt id="constant.eio-pri-default">
     <strong><code><a href="eio.constants.php#constant.eio-pri-default">EIO_PRI_DEFAULT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Request default prioriry
     </span>
    </dd>
   
   
    <dt id="constant.eio-pri-max">
     <strong><code><a href="eio.constants.php#constant.eio-pri-max">EIO_PRI_MAX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Request maximal prioriry
     </span>
    </dd>
   
   
  </dl>
 </p>

 <p class="para"><span class="function"><a href="function.eio-seek.php" class="function">eio_seek()</a></span> <code class="parameter">whence</code> argument:
  <dl>
   
    <dt id="constant.eio-seek-set">
     <strong><code><a href="eio.constants.php#constant.eio-seek-set">EIO_SEEK_SET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The offset is set to specified number of bytes(<code class="parameter">offset</code>).
     </span>
    </dd>
   
   
    <dt id="constant.eio-seek-cur">
     <strong><code><a href="eio.constants.php#constant.eio-seek-cur">EIO_SEEK_CUR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The offset is set to its current location plus <code class="parameter">offset</code> bytes.
     </span>
    </dd>
   
   
    <dt id="constant.eio-seek-end">
     <strong><code><a href="eio.constants.php#constant.eio-seek-end">EIO_SEEK_END</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The offset is set to the size of the file plus <code class="parameter">offset</code> bytes.
     </span>
    </dd>
   
  </dl>
 </p>

 <p class="para">
  Flags used with <span class="function"><a href="function.eio-readdir.php" class="function">eio_readdir()</a></span>:
  <dl>


   
    <dt id="constant.eio-readdir-dents">
     <strong><code><a href="eio.constants.php#constant.eio-readdir-dents">EIO_READDIR_DENTS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     <span class="function"><a href="function.eio-readdir.php" class="function">eio_readdir()</a></span> flag. If specified, the result argument of the callback
     becomes an array with the following keys:
     <code class="literal">&#039;names&#039;</code> - array of directory names
     <code class="literal">&#039;dents&#039;</code> - array of <code class="literal">struct eio_dirent</code>-like
     arrays having the following keys each:
     <code class="literal">&#039;name&#039;</code> - the directory name;
     <code class="literal">&#039;type&#039;</code> - one of <em>EIO_DT_*</em>
     constants;
     <code class="literal">&#039;inode&#039;</code> - the inode number, if available, otherwise
     unspecified;
     </span>
    </dd>
   
   
    <dt id="constant.eio-readdir-dirs-first">
     <strong><code><a href="eio.constants.php#constant.eio-readdir-dirs-first">EIO_READDIR_DIRS_FIRST</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     When this flag is specified, the names will be returned in an order
     where likely directories come first, in optimal stat order.
     </span>
    </dd>
   
   
    <dt id="constant.eio-readdir-stat-order">
     <strong><code><a href="eio.constants.php#constant.eio-readdir-stat-order">EIO_READDIR_STAT_ORDER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     When this flag is specified, then the names will be returned in an order
     suitable for <code class="literal">stat</code>&#039;ing each one. When planning to
     <span class="function"><a href="function.stat.php" class="function">stat()</a></span> all files in the given directory, the
     returned order will likely be
     fastest.
     </span>
    </dd>
   
   
    <dt id="constant.eio-readdir-found-unknown">
     <strong><code><a href="eio.constants.php#constant.eio-readdir-found-unknown">EIO_READDIR_FOUND_UNKNOWN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   



   
    <dt id="constant.eio-dt-unknown">
     <strong><code><a href="eio.constants.php#constant.eio-dt-unknown">EIO_DT_UNKNOWN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Unknown node type(very common). Further <span class="function"><a href="function.stat.php" class="function">stat()</a></span> needed.
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-fifo">
     <strong><code><a href="eio.constants.php#constant.eio-dt-fifo">EIO_DT_FIFO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     FIFO node type
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-chr">
     <strong><code><a href="eio.constants.php#constant.eio-dt-chr">EIO_DT_CHR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Node type
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-mpc">
     <strong><code><a href="eio.constants.php#constant.eio-dt-mpc">EIO_DT_MPC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Multiplexed char device (v7+coherent) node type
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-dir">
     <strong><code><a href="eio.constants.php#constant.eio-dt-dir">EIO_DT_DIR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Directory node type
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-nam">
     <strong><code><a href="eio.constants.php#constant.eio-dt-nam">EIO_DT_NAM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Xenix special named file node type
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-blk">
     <strong><code><a href="eio.constants.php#constant.eio-dt-blk">EIO_DT_BLK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Node type
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-mpb">
     <strong><code><a href="eio.constants.php#constant.eio-dt-mpb">EIO_DT_MPB</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Multiplexed block device (v7+coherent)
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-reg">
     <strong><code><a href="eio.constants.php#constant.eio-dt-reg">EIO_DT_REG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Node type
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-nwk">
     <strong><code><a href="eio.constants.php#constant.eio-dt-nwk">EIO_DT_NWK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-cmp">
     <strong><code><a href="eio.constants.php#constant.eio-dt-cmp">EIO_DT_CMP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     HP-UX network special node type
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-lnk">
     <strong><code><a href="eio.constants.php#constant.eio-dt-lnk">EIO_DT_LNK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Link node type
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-sock">
     <strong><code><a href="eio.constants.php#constant.eio-dt-sock">EIO_DT_SOCK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Socket node type
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-door">
     <strong><code><a href="eio.constants.php#constant.eio-dt-door">EIO_DT_DOOR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Solaris door node type
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-wht">
     <strong><code><a href="eio.constants.php#constant.eio-dt-wht">EIO_DT_WHT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Node type
     </span>
    </dd>
   
   
    <dt id="constant.eio-dt-max">
     <strong><code><a href="eio.constants.php#constant.eio-dt-max">EIO_DT_MAX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     Highest node type value
     </span>
    </dd>
   



  </dl>
 </p>
 <p class="para">
  Access modes for <span class="function"><a href="function.eio-open.php" class="function">eio_open()</a></span> <code class="parameter">flags</code>
  argument:
  <dl>


   
    <dt id="constant.eio-o-rdonly">
     <strong><code><a href="eio.constants.php#constant.eio-o-rdonly">EIO_O_RDONLY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-o-wronly">
     <strong><code><a href="eio.constants.php#constant.eio-o-wronly">EIO_O_WRONLY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-o-rdwr">
     <strong><code><a href="eio.constants.php#constant.eio-o-rdwr">EIO_O_RDWR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-o-nonblock">
     <strong><code><a href="eio.constants.php#constant.eio-o-nonblock">EIO_O_NONBLOCK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-o-append">
     <strong><code><a href="eio.constants.php#constant.eio-o-append">EIO_O_APPEND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-o-creat">
     <strong><code><a href="eio.constants.php#constant.eio-o-creat">EIO_O_CREAT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-o-trunc">
     <strong><code><a href="eio.constants.php#constant.eio-o-trunc">EIO_O_TRUNC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-o-excl">
     <strong><code><a href="eio.constants.php#constant.eio-o-excl">EIO_O_EXCL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-o-fsync">
     <strong><code><a href="eio.constants.php#constant.eio-o-fsync">EIO_O_FSYNC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   


  </dl>
 </p>
 <p class="para">
  <code class="parameter">mode</code> argument flags for <span class="function"><a href="function.eio-open.php" class="function">eio_open()</a></span>:
  <dl>


   
    <dt id="constant.eio-s-irusr">
     <strong><code><a href="eio.constants.php#constant.eio-s-irusr">EIO_S_IRUSR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-iwusr">
     <strong><code><a href="eio.constants.php#constant.eio-s-iwusr">EIO_S_IWUSR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-ixusr">
     <strong><code><a href="eio.constants.php#constant.eio-s-ixusr">EIO_S_IXUSR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-irgrp">
     <strong><code><a href="eio.constants.php#constant.eio-s-irgrp">EIO_S_IRGRP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-iwgrp">
     <strong><code><a href="eio.constants.php#constant.eio-s-iwgrp">EIO_S_IWGRP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-ixgrp">
     <strong><code><a href="eio.constants.php#constant.eio-s-ixgrp">EIO_S_IXGRP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-iroth">
     <strong><code><a href="eio.constants.php#constant.eio-s-iroth">EIO_S_IROTH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-iwoth">
     <strong><code><a href="eio.constants.php#constant.eio-s-iwoth">EIO_S_IWOTH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-ixoth">
     <strong><code><a href="eio.constants.php#constant.eio-s-ixoth">EIO_S_IXOTH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-ifreg">
     <strong><code><a href="eio.constants.php#constant.eio-s-ifreg">EIO_S_IFREG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-ifchr">
     <strong><code><a href="eio.constants.php#constant.eio-s-ifchr">EIO_S_IFCHR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-ifblk">
     <strong><code><a href="eio.constants.php#constant.eio-s-ifblk">EIO_S_IFBLK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-ififo">
     <strong><code><a href="eio.constants.php#constant.eio-s-ififo">EIO_S_IFIFO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-s-ifsock">
     <strong><code><a href="eio.constants.php#constant.eio-s-ifsock">EIO_S_IFSOCK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   



  </dl>
 </p>
 <p class="para">
  <span class="function"><a href="function.eio-sync-file-range.php" class="function">eio_sync_file_range()</a></span> flags:
  <dl>


   
    <dt id="constant.eio-sync-file-range-wait-before">
     <strong><code><a href="eio.constants.php#constant.eio-sync-file-range-wait-before">EIO_SYNC_FILE_RANGE_WAIT_BEFORE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-sync-file-range-write">
     <strong><code><a href="eio.constants.php#constant.eio-sync-file-range-write">EIO_SYNC_FILE_RANGE_WRITE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.eio-sync-file-range-wait-after">
     <strong><code><a href="eio.constants.php#constant.eio-sync-file-range-wait-after">EIO_SYNC_FILE_RANGE_WAIT_AFTER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   



  </dl>
 </p>
 <p class="para">
  <span class="function"><a href="function.eio-fallocate.php" class="function">eio_fallocate()</a></span> flags:
  <dl>

   
    <dt id="constant.eio-falloc-fl-keep-size">
     <strong><code><a href="eio.constants.php#constant.eio-falloc-fl-keep-size">EIO_FALLOC_FL_KEEP_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   

  </dl>
 </p>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   <em>EIO_S_I*</em> constants have the same meaning as their
   <em>S_I*</em> POSIX counterparts.
  </p>
 </p></blockquote>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   <em>EIO_SYNC_FILE_*</em> constants have the same meaning as their
   <em>SYNC_FILE_**</em> counterparts.
  </p>
 </p></blockquote>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   <em>EIO_O_*</em> constants have the same meaning as their
   <em>O_*</em> POSIX counterparts.
  </p>
 </p></blockquote>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/eio/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Feio.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=eio.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/eio.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.eio.php">Eio</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.eio.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="eio.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="eio.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="eio.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.eio.php" title="Eio Functions">Eio Functions</a>
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
