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

 <link rel="canonical" href="https://www.php.net/manual/en/imap.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/imap.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/imap.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.imap.php">
 <link rel="prev" href="https://www.php.net/manual/en/imap.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.imap.php">

 <link rel="alternate" href="https://www.php.net/manual/en/imap.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/imap.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/imap.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/imap.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/imap.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/imap.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/imap.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/imap.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/imap.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/imap.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/imap.constants.php" hreflang="zh">

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
        <a href="ref.imap.php">
          IMAP Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="imap.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.mail.php'>Mail Related Extensions</a></li>      <li><a href='book.imap.php'>IMAP</a></li>      </ul>
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
            <option value='en/imap.constants.php' selected="selected">English</option>
            <option value='de/imap.constants.php'>German</option>
            <option value='es/imap.constants.php'>Spanish</option>
            <option value='fr/imap.constants.php'>French</option>
            <option value='it/imap.constants.php'>Italian</option>
            <option value='ja/imap.constants.php'>Japanese</option>
            <option value='pt_BR/imap.constants.php'>Brazilian Portuguese</option>
            <option value='ru/imap.constants.php'>Russian</option>
            <option value='tr/imap.constants.php'>Turkish</option>
            <option value='uk/imap.constants.php'>Ukrainian</option>
            <option value='zh/imap.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="imap.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <dl>
  
   <dt id="constant.nil">
    <strong><code><a href="imap.constants.php#constant.nil">NIL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Deprecated as of PHP 8.1.0.
    </span>
   </dd>
  
  
   <dt id="constant.op-debug">
    <strong><code><a href="imap.constants.php#constant.op-debug">OP_DEBUG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.op-readonly">
    <strong><code><a href="imap.constants.php#constant.op-readonly">OP_READONLY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Open mailbox read-only
    </span>
   </dd>
  
  
   <dt id="constant.op-anonymous">
    <strong><code><a href="imap.constants.php#constant.op-anonymous">OP_ANONYMOUS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Don&#039;t use or update a <var class="filename">.newsrc</var> for news 
     (NNTP only)
    </span>
   </dd>
  
  
   <dt id="constant.op-shortcache">
    <strong><code><a href="imap.constants.php#constant.op-shortcache">OP_SHORTCACHE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.op-silent">
    <strong><code><a href="imap.constants.php#constant.op-silent">OP_SILENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.op-prototype">
    <strong><code><a href="imap.constants.php#constant.op-prototype">OP_PROTOTYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.op-halfopen">
    <strong><code><a href="imap.constants.php#constant.op-halfopen">OP_HALFOPEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     For <abbr title="Internet Message Access Protocol">IMAP</abbr> and <abbr title="Network News Transfer Protocol">NNTP</abbr>
     names, open a connection but don&#039;t open a mailbox.
    </span>
   </dd>
  
  
   <dt id="constant.op-expunge">
    <strong><code><a href="imap.constants.php#constant.op-expunge">OP_EXPUNGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.op-secure">
    <strong><code><a href="imap.constants.php#constant.op-secure">OP_SECURE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.cl-expunge">
    <strong><code><a href="imap.constants.php#constant.cl-expunge">CL_EXPUNGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     silently expunge the mailbox before closing when
     calling <span class="function"><a href="function.imap-close.php" class="function">imap_close()</a></span>
    </span>
   </dd>
  
  
   <dt id="constant.ft-uid">
    <strong><code><a href="imap.constants.php#constant.ft-uid">FT_UID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The parameter is a UID
    </span>
   </dd>
  
  
   <dt id="constant.ft-peek">
    <strong><code><a href="imap.constants.php#constant.ft-peek">FT_PEEK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Do not set the \Seen flag if not already set
    </span>
   </dd>
  
  
   <dt id="constant.ft-not">
    <strong><code><a href="imap.constants.php#constant.ft-not">FT_NOT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.ft-internal">
    <strong><code><a href="imap.constants.php#constant.ft-internal">FT_INTERNAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The return string is in internal format, will not canonicalize to CRLF.
    </span>
   </dd>
  
  
   <dt id="constant.ft-prefetchtext">
    <strong><code><a href="imap.constants.php#constant.ft-prefetchtext">FT_PREFETCHTEXT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.st-uid">
    <strong><code><a href="imap.constants.php#constant.st-uid">ST_UID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The sequence argument contains UIDs instead of sequence numbers
    </span>
   </dd>
  
  
   <dt id="constant.st-silent">
    <strong><code><a href="imap.constants.php#constant.st-silent">ST_SILENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.st-set">
    <strong><code><a href="imap.constants.php#constant.st-set">ST_SET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.cp-uid">
    <strong><code><a href="imap.constants.php#constant.cp-uid">CP_UID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     the sequence numbers contain UIDS
    </span>
   </dd>
  
  
   <dt id="constant.cp-move">
    <strong><code><a href="imap.constants.php#constant.cp-move">CP_MOVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Delete the messages from the current mailbox after copying
     with <span class="function"><a href="function.imap-mail-copy.php" class="function">imap_mail_copy()</a></span>
    </span>
   </dd>
  
  
   <dt id="constant.se-uid">
    <strong><code><a href="imap.constants.php#constant.se-uid">SE_UID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Return UIDs instead of sequence numbers
    </span>
   </dd>
  
  
   <dt id="constant.se-free">
    <strong><code><a href="imap.constants.php#constant.se-free">SE_FREE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.se-noprefetch">
    <strong><code><a href="imap.constants.php#constant.se-noprefetch">SE_NOPREFETCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Don&#039;t prefetch searched messages
    </span>
   </dd>
  
  
   <dt id="constant.so-free">
    <strong><code><a href="imap.constants.php#constant.so-free">SO_FREE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.so-noserver">
    <strong><code><a href="imap.constants.php#constant.so-noserver">SO_NOSERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.sa-messages">
    <strong><code><a href="imap.constants.php#constant.sa-messages">SA_MESSAGES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.sa-recent">
    <strong><code><a href="imap.constants.php#constant.sa-recent">SA_RECENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.sa-unseen">
    <strong><code><a href="imap.constants.php#constant.sa-unseen">SA_UNSEEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.sa-uidnext">
    <strong><code><a href="imap.constants.php#constant.sa-uidnext">SA_UIDNEXT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.sa-uidvalidity">
    <strong><code><a href="imap.constants.php#constant.sa-uidvalidity">SA_UIDVALIDITY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.sa-all">
    <strong><code><a href="imap.constants.php#constant.sa-all">SA_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.latt-noinferiors">
    <strong><code><a href="imap.constants.php#constant.latt-noinferiors">LATT_NOINFERIORS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This mailbox has no &quot;children&quot; (there are no
     mailboxes below this one).
    </span>
   </dd>
  
  
   <dt id="constant.latt-noselect">
    <strong><code><a href="imap.constants.php#constant.latt-noselect">LATT_NOSELECT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This is only a container, not a mailbox - you
     cannot open it.
    </span>
   </dd>
  
  
   <dt id="constant.latt-marked">
    <strong><code><a href="imap.constants.php#constant.latt-marked">LATT_MARKED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This mailbox is marked. Only used by UW-IMAPD.
    </span>
   </dd>
  
  
   <dt id="constant.latt-unmarked">
    <strong><code><a href="imap.constants.php#constant.latt-unmarked">LATT_UNMARKED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This mailbox is not marked. Only used by
     UW-IMAPD.
    </span>
   </dd>
  
  
   <dt id="constant.latt-referral">
    <strong><code><a href="imap.constants.php#constant.latt-referral">LATT_REFERRAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This container has a referral to a remote mailbox.
    </span>
   </dd>
  
  
   <dt id="constant.latt-haschildren">
    <strong><code><a href="imap.constants.php#constant.latt-haschildren">LATT_HASCHILDREN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This mailbox has selectable inferiors.
    </span>
   </dd>
  
  
   <dt id="constant.latt-hasnochildren">
    <strong><code><a href="imap.constants.php#constant.latt-hasnochildren">LATT_HASNOCHILDREN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This mailbox has no selectable inferiors.
    </span>
   </dd>
  
  
   <dt id="constant.sortdate">
    <strong><code><a href="imap.constants.php#constant.sortdate">SORTDATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sort criteria for <span class="function"><a href="function.imap-sort.php" class="function">imap_sort()</a></span>:
     message Date
    </span>
   </dd>
  
  
   <dt id="constant.sortarrival">
    <strong><code><a href="imap.constants.php#constant.sortarrival">SORTARRIVAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sort criteria for <span class="function"><a href="function.imap-sort.php" class="function">imap_sort()</a></span>:
     arrival date
    </span>
   </dd>
  
  
   <dt id="constant.sortfrom">
    <strong><code><a href="imap.constants.php#constant.sortfrom">SORTFROM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sort criteria for <span class="function"><a href="function.imap-sort.php" class="function">imap_sort()</a></span>:
     mailbox in first From address
    </span>
   </dd>
  
  
   <dt id="constant.sortsubject">
    <strong><code><a href="imap.constants.php#constant.sortsubject">SORTSUBJECT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sort criteria for <span class="function"><a href="function.imap-sort.php" class="function">imap_sort()</a></span>:
     message subject
    </span>
   </dd>
  
  
   <dt id="constant.sortto">
    <strong><code><a href="imap.constants.php#constant.sortto">SORTTO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sort criteria for <span class="function"><a href="function.imap-sort.php" class="function">imap_sort()</a></span>:
     mailbox in first To address
    </span>
   </dd>
  
  
   <dt id="constant.sortcc">
    <strong><code><a href="imap.constants.php#constant.sortcc">SORTCC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sort criteria for <span class="function"><a href="function.imap-sort.php" class="function">imap_sort()</a></span>:
     mailbox in first cc address
    </span>
   </dd>
  
  
   <dt id="constant.sortsize">
    <strong><code><a href="imap.constants.php#constant.sortsize">SORTSIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sort criteria for <span class="function"><a href="function.imap-sort.php" class="function">imap_sort()</a></span>:
     size of message in octets
    </span>
   </dd>
  
  
   <dt id="constant.typetext">
    <strong><code><a href="imap.constants.php#constant.typetext">TYPETEXT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Primary body type: unformatted text
    </span>
   </dd>
  
  
   <dt id="constant.typemultipart">
    <strong><code><a href="imap.constants.php#constant.typemultipart">TYPEMULTIPART</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Primary body type: multiple part
    </span>
   </dd>
  
  
   <dt id="constant.typemessage">
    <strong><code><a href="imap.constants.php#constant.typemessage">TYPEMESSAGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Primary body type: encapsulated message
    </span>
   </dd>
  
  
   <dt id="constant.typeapplication">
    <strong><code><a href="imap.constants.php#constant.typeapplication">TYPEAPPLICATION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Primary body type: application data
    </span>
   </dd>
  
  
   <dt id="constant.typeaudio">
    <strong><code><a href="imap.constants.php#constant.typeaudio">TYPEAUDIO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Primary body type: audio
    </span>
   </dd>
  
  
   <dt id="constant.typeimage">
    <strong><code><a href="imap.constants.php#constant.typeimage">TYPEIMAGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Primary body type: static image
    </span>
   </dd>
  
  
   <dt id="constant.typevideo">
    <strong><code><a href="imap.constants.php#constant.typevideo">TYPEVIDEO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Primary body type: video
    </span>
   </dd>
  
  
   <dt id="constant.typemodel">
    <strong><code><a href="imap.constants.php#constant.typemodel">TYPEMODEL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Primary body type: model
    </span>
   </dd>
  
  
   <dt id="constant.typeother">
    <strong><code><a href="imap.constants.php#constant.typeother">TYPEOTHER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Primary body type: unknown
    </span>
   </dd>
  
  
   <dt id="constant.enc7bit">
    <strong><code><a href="imap.constants.php#constant.enc7bit">ENC7BIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Body encoding: 7 bit SMTP semantic data
    </span>
   </dd>
  
  
   <dt id="constant.enc8bit">
    <strong><code><a href="imap.constants.php#constant.enc8bit">ENC8BIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Body encoding: 8 bit SMTP semantic data
    </span>
   </dd>
  
  
   <dt id="constant.encbinary">
    <strong><code><a href="imap.constants.php#constant.encbinary">ENCBINARY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Body encoding: 8 bit binary data
    </span>
   </dd>
  
  
   <dt id="constant.encbase64">
    <strong><code><a href="imap.constants.php#constant.encbase64">ENCBASE64</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Body encoding: base-64 encoded data
    </span>
   </dd>
  
  
   <dt id="constant.encquotedprintable">
    <strong><code><a href="imap.constants.php#constant.encquotedprintable">ENCQUOTEDPRINTABLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Body encoding: human-readable 8-as-7 bit data
    </span>
   </dd>
  
  
   <dt id="constant.encother">
    <strong><code><a href="imap.constants.php#constant.encother">ENCOTHER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Body encoding: unknown
    </span>
   </dd>
  
  
   <dt id="constant.imap-opentimeout">
    <strong><code><a href="imap.constants.php#constant.imap-opentimeout">IMAP_OPENTIMEOUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.imap-readtimeout">
    <strong><code><a href="imap.constants.php#constant.imap-readtimeout">IMAP_READTIMEOUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.imap-writetimeout">
    <strong><code><a href="imap.constants.php#constant.imap-writetimeout">IMAP_WRITETIMEOUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.imap-closetimeout">
    <strong><code><a href="imap.constants.php#constant.imap-closetimeout">IMAP_CLOSETIMEOUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="constant.imap-gc-elt">
    <strong><code><a href="imap.constants.php#constant.imap-gc-elt">IMAP_GC_ELT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Garbage collector, clear message cache elements.
    </span>
   </dd>
  
  
   <dt id="constant.imap-gc-env">
    <strong><code><a href="imap.constants.php#constant.imap-gc-env">IMAP_GC_ENV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Garbage collector, clear envelopes and bodies.
    </span>
   </dd>
  
  
   <dt id="constant.imap-gc-texts">
    <strong><code><a href="imap.constants.php#constant.imap-gc-texts">IMAP_GC_TEXTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Garbage collector, clear texts.
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
        <a href="https://github.com/php/doc-en/blob/master/reference/imap/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fimap.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=imap.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imap.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.imap.php">IMAP</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.imap.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="imap.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="imap.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.imap.php" title="IMAP Functions">IMAP Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.imap-connection.php" title="IMAP\Connection">IMAP\Connection</a>
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
