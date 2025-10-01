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

 <link rel="canonical" href="https://www.php.net/manual/en/com.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/com.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/com.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.com.php">
 <link rel="prev" href="https://www.php.net/manual/en/com.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/com.error-handling.php">

 <link rel="alternate" href="https://www.php.net/manual/en/com.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/com.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/com.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/com.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/com.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/com.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/com.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/com.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/com.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/com.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/com.constants.php" hreflang="zh">

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
        <a href="com.error-handling.php">
          Errors and error handling &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="com.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.windows.php'>Windows Only Extensions</a></li>      <li><a href='book.com.php'>COM</a></li>      </ul>
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
            <option value='en/com.constants.php' selected="selected">English</option>
            <option value='de/com.constants.php'>German</option>
            <option value='es/com.constants.php'>Spanish</option>
            <option value='fr/com.constants.php'>French</option>
            <option value='it/com.constants.php'>Italian</option>
            <option value='ja/com.constants.php'>Japanese</option>
            <option value='pt_BR/com.constants.php'>Brazilian Portuguese</option>
            <option value='ru/com.constants.php'>Russian</option>
            <option value='tr/com.constants.php'>Turkish</option>
            <option value='uk/com.constants.php'>Ukrainian</option>
            <option value='zh/com.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="com.constants" class="chapter">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <dl>
  
   <dt id="constant.clsctx-inproc-server">
    <strong><code><a href="com.constants.php#constant.clsctx-inproc-server">CLSCTX_INPROC_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The code that creates and manages objects of this class is
     a DLL that runs in the same process as the caller of the
     function specifying the class context.
    </span>
   </dd>
  
  
   <dt id="constant.clsctx-inproc-handler">
    <strong><code><a href="com.constants.php#constant.clsctx-inproc-handler">CLSCTX_INPROC_HANDLER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The code that manages objects of this class is an in-process
     handler. This is a DLL that runs in the client process and
     implements client-side structures of this class when instances
     of the class are accessed remotely.
    </span>
   </dd>
  
  
   <dt id="constant.clsctx-local-server">
    <strong><code><a href="com.constants.php#constant.clsctx-local-server">CLSCTX_LOCAL_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The EXE code that creates and manages objects of this class runs on
     same machine but is loaded in a separate process space.
    </span>
   </dd>
  
  
   <dt id="constant.clsctx-remote-server">
    <strong><code><a href="com.constants.php#constant.clsctx-remote-server">CLSCTX_REMOTE_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A remote context. The code that creates and manages objects of this
     class is run on a different computer.
    </span>
   </dd>
  
  
   <dt id="constant.clsctx-server">
    <strong><code><a href="com.constants.php#constant.clsctx-server">CLSCTX_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates server code, whether in-process, local, or remote. This
     definition ORs <strong><code><a href="com.constants.php#constant.clsctx-inproc-server">CLSCTX_INPROC_SERVER</a></code></strong>,
     <strong><code><a href="com.constants.php#constant.clsctx-local-server">CLSCTX_LOCAL_SERVER</a></code></strong>, and
     <strong><code><a href="com.constants.php#constant.clsctx-remote-server">CLSCTX_REMOTE_SERVER</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.clsctx-all">
    <strong><code><a href="com.constants.php#constant.clsctx-all">CLSCTX_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates all class contexts. This definition ORs
     <strong><code><a href="com.constants.php#constant.clsctx-inproc-handler">CLSCTX_INPROC_HANDLER</a></code></strong> and
     <strong><code><a href="com.constants.php#constant.clsctx-server">CLSCTX_SERVER</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.vt-null">
    <strong><code><a href="com.constants.php#constant.vt-null">VT_NULL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     NULL pointer reference.
    </span>
   </dd>
  
  
   <dt id="constant.vt-empty">
    <strong><code><a href="com.constants.php#constant.vt-empty">VT_EMPTY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A property with a type indicator of <strong><code><a href="com.constants.php#constant.vt-empty">VT_EMPTY</a></code></strong> has
     no data associated with it; that is, the size of the value is zero.
    </span>
   </dd>
  
  
   <dt id="constant.vt-int">
    <strong><code><a href="com.constants.php#constant.vt-int">VT_INT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     4-byte signed integer value (equivalent to
     <strong><code><a href="com.constants.php#constant.vt-i4">VT_I4</a></code></strong>).
    </span>
   </dd>
  
  
   <dt id="constant.vt-i1">
    <strong><code><a href="com.constants.php#constant.vt-i1">VT_I1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     1-byte signed integer.
    </span>
   </dd>
  
  
   <dt id="constant.vt-i2">
    <strong><code><a href="com.constants.php#constant.vt-i2">VT_I2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Two bytes representing a 2-byte signed integer value.
    </span>
   </dd>
  
  
   <dt id="constant.vt-i4">
    <strong><code><a href="com.constants.php#constant.vt-i4">VT_I4</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     4-byte signed integer value.
    </span>
   </dd>
  
  
   <dt id="constant.vt-i8">
    <strong><code><a href="com.constants.php#constant.vt-i8">VT_I8</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     8-byte signed integer value.
    </span>
    <span class="simpara">
     Only on x64.
    </span>
   </dd>
  
  
   <dt id="constant.vt-uint">
    <strong><code><a href="com.constants.php#constant.vt-uint">VT_UINT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     4-byte unsigned integer (equivalent to
     <strong><code><a href="com.constants.php#constant.vt-ui4">VT_UI4</a></code></strong>).
    </span>
   </dd>
  
  
   <dt id="constant.vt-ui1">
    <strong><code><a href="com.constants.php#constant.vt-ui1">VT_UI1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     1-byte unsigned integer.
    </span>
   </dd>
  
  
   <dt id="constant.vt-ui2">
    <strong><code><a href="com.constants.php#constant.vt-ui2">VT_UI2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     2-byte unsigned integer.
    </span>
   </dd>
  
  
   <dt id="constant.vt-ui4">
    <strong><code><a href="com.constants.php#constant.vt-ui4">VT_UI4</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     4-byte unsigned integer.
    </span>
   </dd>
  
  
   <dt id="constant.vt-ui8">
    <strong><code><a href="com.constants.php#constant.vt-ui8">VT_UI8</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     8-byte unsigned integer.
    </span>
    <span class="simpara">
     x64 only
    </span>
   </dd>
  
  
   <dt id="constant.vt-r4">
    <strong><code><a href="com.constants.php#constant.vt-r4">VT_R4</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     32-bit IEEE floating point value.
    </span>
   </dd>
  
  
   <dt id="constant.vt-r8">
    <strong><code><a href="com.constants.php#constant.vt-r8">VT_R8</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     64-bit IEEE floating point value.
    </span>
   </dd>
  
  
   <dt id="constant.vt-bool">
    <strong><code><a href="com.constants.php#constant.vt-bool">VT_BOOL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Boolean value.
    </span>
   </dd>
  
  
   <dt id="constant.vt-error">
    <strong><code><a href="com.constants.php#constant.vt-error">VT_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Error code; containing the status code associated with the
     error.
    </span>
   </dd>
  
  
   <dt id="constant.vt-cy">
    <strong><code><a href="com.constants.php#constant.vt-cy">VT_CY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     8-byte two&#039;s complement integer (scaled by 10,000).
    </span>
   </dd>
  
  
   <dt id="constant.vt-date">
    <strong><code><a href="com.constants.php#constant.vt-date">VT_DATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A 64-bit floating point number representing the number of days
     (not seconds) since <code class="literal">December 31, 1899</code>.
     For example, <code class="literal">January 1, 1900</code> is <code class="literal">2.0</code>,
     <code class="literal">January 2, 1900</code> is <code class="literal">3.0</code>, etc.
     This is stored in the same representation as <strong><code><a href="com.constants.php#constant.vt-r8">VT_R8</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.vt-bstr">
    <strong><code><a href="com.constants.php#constant.vt-bstr">VT_BSTR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Pointer to a null-terminated Unicode string.
    </span>
   </dd>
  
  
   <dt id="constant.vt-decimal">
    <strong><code><a href="com.constants.php#constant.vt-decimal">VT_DECIMAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A decimal structure.
    </span>
   </dd>
  
  
   <dt id="constant.vt-unknown">
    <strong><code><a href="com.constants.php#constant.vt-unknown">VT_UNKNOWN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A pointer to an object that implements the IUnknown interface.
    </span>
   </dd>
  
  
   <dt id="constant.vt-dispatch">
    <strong><code><a href="com.constants.php#constant.vt-dispatch">VT_DISPATCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A pointer to a pointer to an object was specified.
    </span>
   </dd>
  
  
   <dt id="constant.vt-variant">
    <strong><code><a href="com.constants.php#constant.vt-variant">VT_VARIANT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A type indicator followed by the corresponding value.
     <strong><code><a href="com.constants.php#constant.vt-variant">VT_VARIANT</a></code></strong> can be used only with
     <strong><code><a href="com.constants.php#constant.vt-byref">VT_BYREF</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.vt-array">
    <strong><code><a href="com.constants.php#constant.vt-array">VT_ARRAY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     If the type indicator is combined with
     <strong><code><a href="com.constants.php#constant.vt-array">VT_ARRAY</a></code></strong> by an OR operator, the value is a pointer to a
     <code class="literal">SAFEARRAY</code>. <strong><code><a href="com.constants.php#constant.vt-array">VT_ARRAY</a></code></strong>
     can use the OR with the following data types: <strong><code><a href="com.constants.php#constant.vt-i1">VT_I1</a></code></strong>,
     <strong><code><a href="com.constants.php#constant.vt-ui1">VT_UI1</a></code></strong>, <strong><code><a href="com.constants.php#constant.vt-i2">VT_I2</a></code></strong>, <strong><code><a href="com.constants.php#constant.vt-ui2">VT_UI2</a></code></strong>,
     <strong><code><a href="com.constants.php#constant.vt-i4">VT_I4</a></code></strong>, <strong><code><a href="com.constants.php#constant.vt-ui4">VT_UI4</a></code></strong>, <strong><code><a href="com.constants.php#constant.vt-int">VT_INT</a></code></strong>,
     <strong><code><a href="com.constants.php#constant.vt-uint">VT_UINT</a></code></strong>, <strong><code><a href="com.constants.php#constant.vt-r4">VT_R4</a></code></strong>, <strong><code><a href="com.constants.php#constant.vt-r8">VT_R8</a></code></strong>,
     <strong><code><a href="com.constants.php#constant.vt-bool">VT_BOOL</a></code></strong>, <strong><code><a href="com.constants.php#constant.vt-decimal">VT_DECIMAL</a></code></strong>, <strong><code><a href="com.constants.php#constant.vt-error">VT_ERROR</a></code></strong>,
     <strong><code><a href="com.constants.php#constant.vt-cy">VT_CY</a></code></strong>, <strong><code><a href="com.constants.php#constant.vt-date">VT_DATE</a></code></strong>, <strong><code><a href="com.constants.php#constant.vt-bstr">VT_BSTR</a></code></strong>,
     <strong><code><a href="com.constants.php#constant.vt-dispatch">VT_DISPATCH</a></code></strong>, <strong><code><a href="com.constants.php#constant.vt-unknown">VT_UNKNOWN</a></code></strong> and
     <strong><code><a href="com.constants.php#constant.vt-variant">VT_VARIANT</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.vt-byref">
    <strong><code><a href="com.constants.php#constant.vt-byref">VT_BYREF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     If the type indicator is combined with <strong><code><a href="com.constants.php#constant.vt-byref">VT_BYREF</a></code></strong>
     by an OR operator, the value is a reference. Reference types are
     interpreted as a reference to data, similar to the reference type in
     C++.
    </span>
   </dd>
  
  
   <dt id="constant.cp-acp">
    <strong><code><a href="com.constants.php#constant.cp-acp">CP_ACP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Default to ANSI code page.
    </span>
   </dd>
  
  
   <dt id="constant.cp-maccp">
    <strong><code><a href="com.constants.php#constant.cp-maccp">CP_MACCP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Macintosh code page.
    </span>
   </dd>
  
  
   <dt id="constant.cp-oemcp">
    <strong><code><a href="com.constants.php#constant.cp-oemcp">CP_OEMCP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Default to OEM code page.
    </span>
   </dd>
  
  
   <dt id="constant.cp-utf7">
    <strong><code><a href="com.constants.php#constant.cp-utf7">CP_UTF7</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Unicode (UTF-7).
    </span>
   </dd>
  
  
   <dt id="constant.cp-utf8">
    <strong><code><a href="com.constants.php#constant.cp-utf8">CP_UTF8</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Unicode (UTF-8).
    </span>
   </dd>
  
  
   <dt id="constant.cp-symbol">
    <strong><code><a href="com.constants.php#constant.cp-symbol">CP_SYMBOL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     <code class="literal">SYMBOL</code> translations.
    </span>
   </dd>
  
  
   <dt id="constant.cp-thread-acp">
    <strong><code><a href="com.constants.php#constant.cp-thread-acp">CP_THREAD_ACP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Current thread&#039;s ANSI code page
    </span>
   </dd>
  
  
   <dt id="constant.varcmp-lt">
    <strong><code><a href="com.constants.php#constant.varcmp-lt">VARCMP_LT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The left <code class="literal">bstr</code> is less than right
     <code class="literal">bstr</code>.
    </span>
   </dd>
  
  
   <dt id="constant.varcmp-eq">
    <strong><code><a href="com.constants.php#constant.varcmp-eq">VARCMP_EQ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The two parameters are equal.
    </span>
   </dd>
  
  
   <dt id="constant.varcmp-gt">
    <strong><code><a href="com.constants.php#constant.varcmp-gt">VARCMP_GT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The left <code class="literal">bstr</code> is greater than right
     <code class="literal">bstr</code>.
    </span>
   </dd>
  
  
   <dt id="constant.varcmp-null">
    <strong><code><a href="com.constants.php#constant.varcmp-null">VARCMP_NULL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Either expression is NULL.
    </span>
   </dd>
  
  
   <dt id="constant.norm-ignorecase">
    <strong><code><a href="com.constants.php#constant.norm-ignorecase">NORM_IGNORECASE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Ignore case sensitivity.
    </span>
   </dd>
  
  
   <dt id="constant.norm-ignorenonspace">
    <strong><code><a href="com.constants.php#constant.norm-ignorenonspace">NORM_IGNORENONSPACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Ignore nonspacing characters.
    </span>
   </dd>
  
  
   <dt id="constant.norm-ignoresymbols">
    <strong><code><a href="com.constants.php#constant.norm-ignoresymbols">NORM_IGNORESYMBOLS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Ignore symbols.
    </span>
   </dd>
  
  
   <dt id="constant.norm-ignorewidth">
    <strong><code><a href="com.constants.php#constant.norm-ignorewidth">NORM_IGNOREWIDTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Ignore string width.
    </span>
   </dd>
  
  
   <dt id="constant.norm-ignorekanatype">
    <strong><code><a href="com.constants.php#constant.norm-ignorekanatype">NORM_IGNOREKANATYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Ignore Kana type.
    </span>
   </dd>
  
  
   <dt id="constant.norm-ignorekashida">
    <strong><code><a href="com.constants.php#constant.norm-ignorekashida">NORM_IGNOREKASHIDA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Ignore Arabic kashida characters.
    </span>
    <span class="simpara">
     Availability is dependent upon under lying library.
    </span>
   </dd>
  
  
   <dt id="constant.disp-e-divbyzero">
    <strong><code><a href="com.constants.php#constant.disp-e-divbyzero">DISP_E_DIVBYZERO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A return error that indicates a divide by zero error.
    </span>
   </dd>
  
  
   <dt id="constant.disp-e-overflow">
    <strong><code><a href="com.constants.php#constant.disp-e-overflow">DISP_E_OVERFLOW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     An error that indicates that a value could not be coerced to
     its expected representation.
    </span>
   </dd>
  
  
   <dt id="constant.disp-e-badindex">
    <strong><code><a href="com.constants.php#constant.disp-e-badindex">DISP_E_BADINDEX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     An error that indicates that an array index does not exist.
    </span>
   </dd>
  
  
   <dt id="constant.disp-e-paramnotfound">
    <strong><code><a href="com.constants.php#constant.disp-e-paramnotfound">DISP_E_PARAMNOTFOUND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A return value that indicates that one of the parameter IDs
     does not correspond to a parameter on the method.
    </span>
   </dd>
  
  
   <dt id="constant.mk-e-unavailable">
    <strong><code><a href="com.constants.php#constant.mk-e-unavailable">MK_E_UNAVAILABLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     iMoniker COM status code, return on errors where the function call
     failed due to unavailability.
    </span>
   </dd>
  
  
   <dt id="constant.locale-neutral">
    <strong><code><a href="com.constants.php#constant.locale-neutral">LOCALE_NEUTRAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The neutral locale. This constant is generally not used when calling NLS APIs.
     Instead, use LOCALE_SYSTEM_DEFAULT.
    </span>
   </dd>
  
  
   <dt id="constant.locale-system-default">
    <strong><code><a href="com.constants.php#constant.locale-system-default">LOCALE_SYSTEM_DEFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The default locale for the operating system.
    </span>
   </dd>
  
 </dl>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/com/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcom.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=com.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/com.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.com.php">COM</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.com.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="com.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="com.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="com.error-handling.php" title="Errors and error handling">Errors and error handling</a>
                        </li>
                                                <li class="">
                            <a href="com.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.com.php" title="com">com</a>
                        </li>
                                                <li class="">
                            <a href="class.dotnet.php" title="dotnet">dotnet</a>
                        </li>
                                                <li class="">
                            <a href="class.variant.php" title="variant">variant</a>
                        </li>
                                                <li class="">
                            <a href="class.compersisthelper.php" title="COMPersistHelper">COMPersistHelper</a>
                        </li>
                                                <li class="">
                            <a href="class.com-exception.php" title="com_&#8203;exception">com_&#8203;exception</a>
                        </li>
                                                <li class="">
                            <a href="class.com-safearray-proxy.php" title="com_&#8203;safearray_&#8203;proxy">com_&#8203;safearray_&#8203;proxy</a>
                        </li>
                                                <li class="">
                            <a href="ref.com.php" title="COM Functions">COM Functions</a>
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
