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

 <link rel="canonical" href="https://www.php.net/manual/en/pcntl.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pcntl.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pcntl.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.pcntl.php">
 <link rel="prev" href="https://www.php.net/manual/en/pcntl.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/pcntl.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pcntl.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pcntl.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pcntl.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pcntl.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pcntl.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pcntl.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pcntl.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pcntl.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pcntl.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pcntl.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pcntl.constants.php" hreflang="zh">

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
        <a href="pcntl.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pcntl.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.pcntl.php'>PCNTL</a></li>      </ul>
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
            <option value='en/pcntl.constants.php' selected="selected">English</option>
            <option value='de/pcntl.constants.php'>German</option>
            <option value='es/pcntl.constants.php'>Spanish</option>
            <option value='fr/pcntl.constants.php'>French</option>
            <option value='it/pcntl.constants.php'>Italian</option>
            <option value='ja/pcntl.constants.php'>Japanese</option>
            <option value='pt_BR/pcntl.constants.php'>Brazilian Portuguese</option>
            <option value='ru/pcntl.constants.php'>Russian</option>
            <option value='tr/pcntl.constants.php'>Turkish</option>
            <option value='uk/pcntl.constants.php'>Ukrainian</option>
            <option value='zh/pcntl.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pcntl.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="para">
  The following list of signals are supported by the Process Control
  functions. Please see your systems signal(7) man page for details
  of the default behavior of these signals.
 </p>

 <dl id="pcntl.constants.common">
  <strong class="title">Process Control constants</strong>
  
   <dt id="constant.wnohang">
    <strong><code><a href="pcntl.constants.php#constant.wnohang">WNOHANG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.wuntraced">
    <strong><code><a href="pcntl.constants.php#constant.wuntraced">WUNTRACED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.wcontinued">
    <strong><code><a href="pcntl.constants.php#constant.wcontinued">WCONTINUED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.wexited">
    <strong><code><a href="pcntl.constants.php#constant.wexited">WEXITED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.wstopped">
    <strong><code><a href="pcntl.constants.php#constant.wstopped">WSTOPPED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.wnowait">
    <strong><code><a href="pcntl.constants.php#constant.wnowait">WNOWAIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
 </dl>

 <dl id="pcntl.constants.sig">
  <strong class="title">SIG_* constants</strong>
  
   <dt id="constant.sig-ign">
    <strong><code><a href="pcntl.constants.php#constant.sig-ign">SIG_IGN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sig-dfl">
    <strong><code><a href="pcntl.constants.php#constant.sig-dfl">SIG_DFL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sig-err">
    <strong><code><a href="pcntl.constants.php#constant.sig-err">SIG_ERR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sighup">
    <strong><code><a href="pcntl.constants.php#constant.sighup">SIGHUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.siginfo">
    <strong><code><a href="pcntl.constants.php#constant.siginfo">SIGINFO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigint">
    <strong><code><a href="pcntl.constants.php#constant.sigint">SIGINT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigquit">
    <strong><code><a href="pcntl.constants.php#constant.sigquit">SIGQUIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigill">
    <strong><code><a href="pcntl.constants.php#constant.sigill">SIGILL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigtrap">
    <strong><code><a href="pcntl.constants.php#constant.sigtrap">SIGTRAP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigabrt">
    <strong><code><a href="pcntl.constants.php#constant.sigabrt">SIGABRT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigiot">
    <strong><code><a href="pcntl.constants.php#constant.sigiot">SIGIOT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigbus">
    <strong><code><a href="pcntl.constants.php#constant.sigbus">SIGBUS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigfpe">
    <strong><code><a href="pcntl.constants.php#constant.sigfpe">SIGFPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigkill">
    <strong><code><a href="pcntl.constants.php#constant.sigkill">SIGKILL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigusr1">
    <strong><code><a href="pcntl.constants.php#constant.sigusr1">SIGUSR1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigsegv">
    <strong><code><a href="pcntl.constants.php#constant.sigsegv">SIGSEGV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigusr2">
    <strong><code><a href="pcntl.constants.php#constant.sigusr2">SIGUSR2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigpipe">
    <strong><code><a href="pcntl.constants.php#constant.sigpipe">SIGPIPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigalrm">
    <strong><code><a href="pcntl.constants.php#constant.sigalrm">SIGALRM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigterm">
    <strong><code><a href="pcntl.constants.php#constant.sigterm">SIGTERM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigstkflt">
    <strong><code><a href="pcntl.constants.php#constant.sigstkflt">SIGSTKFLT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigcld">
    <strong><code><a href="pcntl.constants.php#constant.sigcld">SIGCLD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigchld">
    <strong><code><a href="pcntl.constants.php#constant.sigchld">SIGCHLD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigcont">
    <strong><code><a href="pcntl.constants.php#constant.sigcont">SIGCONT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigstop">
    <strong><code><a href="pcntl.constants.php#constant.sigstop">SIGSTOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigtstp">
    <strong><code><a href="pcntl.constants.php#constant.sigtstp">SIGTSTP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigttin">
    <strong><code><a href="pcntl.constants.php#constant.sigttin">SIGTTIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigttou">
    <strong><code><a href="pcntl.constants.php#constant.sigttou">SIGTTOU</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigurg">
    <strong><code><a href="pcntl.constants.php#constant.sigurg">SIGURG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigxcpu">
    <strong><code><a href="pcntl.constants.php#constant.sigxcpu">SIGXCPU</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigxfsz">
    <strong><code><a href="pcntl.constants.php#constant.sigxfsz">SIGXFSZ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigvtalrm">
    <strong><code><a href="pcntl.constants.php#constant.sigvtalrm">SIGVTALRM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigprof">
    <strong><code><a href="pcntl.constants.php#constant.sigprof">SIGPROF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigwinch">
    <strong><code><a href="pcntl.constants.php#constant.sigwinch">SIGWINCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigpoll">
    <strong><code><a href="pcntl.constants.php#constant.sigpoll">SIGPOLL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigio">
    <strong><code><a href="pcntl.constants.php#constant.sigio">SIGIO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigpwr">
    <strong><code><a href="pcntl.constants.php#constant.sigpwr">SIGPWR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigsys">
    <strong><code><a href="pcntl.constants.php#constant.sigsys">SIGSYS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigbaby">
    <strong><code><a href="pcntl.constants.php#constant.sigbaby">SIGBABY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigrtmin">
    <strong><code><a href="pcntl.constants.php#constant.sigrtmin">SIGRTMIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.sigrtmax">
    <strong><code><a href="pcntl.constants.php#constant.sigrtmax">SIGRTMAX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.sig-block">
    <strong><code><a href="pcntl.constants.php#constant.sig-block">SIG_BLOCK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sig-unblock">
    <strong><code><a href="pcntl.constants.php#constant.sig-unblock">SIG_UNBLOCK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sig-setmask">
    <strong><code><a href="pcntl.constants.php#constant.sig-setmask">SIG_SETMASK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.sigckpt">
    <strong><code><a href="pcntl.constants.php#constant.sigckpt">SIGCKPT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Generates/restores a checkpoint.
     Available from PHP 8.4.0 (DragonFlyBSD only).
    </span>
   </dd>
  
  
   <dt id="constant.sigckptexit">
    <strong><code><a href="pcntl.constants.php#constant.sigckptexit">SIGCKPTEXIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Generates/restores a checkpoint and exit.
     Available from PHP 8.4.0 (DragonFlyBSD only).
    </span>
   </dd>
  
 </dl>

 <dl id="pcntl.constants.si">
  <strong class="title">SI_* constants</strong>
  
   <dt id="constant.si-user">
    <strong><code><a href="pcntl.constants.php#constant.si-user">SI_USER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.si-noinfo">
    <strong><code><a href="pcntl.constants.php#constant.si-noinfo">SI_NOINFO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.si-kernel">
    <strong><code><a href="pcntl.constants.php#constant.si-kernel">SI_KERNEL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.si-queue">
    <strong><code><a href="pcntl.constants.php#constant.si-queue">SI_QUEUE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.si-timer">
    <strong><code><a href="pcntl.constants.php#constant.si-timer">SI_TIMER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.si-msggq">
    <strong><code><a href="pcntl.constants.php#constant.si-msggq">SI_MSGGQ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.si-asyncio">
    <strong><code><a href="pcntl.constants.php#constant.si-asyncio">SI_ASYNCIO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.si-sigio">
    <strong><code><a href="pcntl.constants.php#constant.si-sigio">SI_SIGIO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.si-tkill">
    <strong><code><a href="pcntl.constants.php#constant.si-tkill">SI_TKILL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.si-mesgq">
    <strong><code><a href="pcntl.constants.php#constant.si-mesgq">SI_MESGQ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
 </dl>

 <dl id="pcntl.constants.cld">
  <strong class="title">CLD_* constants</strong>
  
   <dt id="constant.cld-exited">
    <strong><code><a href="pcntl.constants.php#constant.cld-exited">CLD_EXITED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.cld-killed">
    <strong><code><a href="pcntl.constants.php#constant.cld-killed">CLD_KILLED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.cld-dumped">
    <strong><code><a href="pcntl.constants.php#constant.cld-dumped">CLD_DUMPED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.cld-trapped">
    <strong><code><a href="pcntl.constants.php#constant.cld-trapped">CLD_TRAPPED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.cld-stopped">
    <strong><code><a href="pcntl.constants.php#constant.cld-stopped">CLD_STOPPED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.cld-continued">
    <strong><code><a href="pcntl.constants.php#constant.cld-continued">CLD_CONTINUED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
 </dl>

 <dl id="pcntl.constants.trap">
  <strong class="title">TRAP_* constants</strong>
  
   <dt id="constant.trap-brkpt">
    <strong><code><a href="pcntl.constants.php#constant.trap-brkpt">TRAP_BRKPT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.trap-trace">
    <strong><code><a href="pcntl.constants.php#constant.trap-trace">TRAP_TRACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
 </dl>

 <dl id="pcntl.constants.poll">
  <strong class="title">POLL_* constants</strong>
  
   <dt id="constant.poll-in">
    <strong><code><a href="pcntl.constants.php#constant.poll-in">POLL_IN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.poll-out">
    <strong><code><a href="pcntl.constants.php#constant.poll-out">POLL_OUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.poll-msg">
    <strong><code><a href="pcntl.constants.php#constant.poll-msg">POLL_MSG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.poll-err">
    <strong><code><a href="pcntl.constants.php#constant.poll-err">POLL_ERR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.poll-pri">
    <strong><code><a href="pcntl.constants.php#constant.poll-pri">POLL_PRI</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.poll-hup">
    <strong><code><a href="pcntl.constants.php#constant.poll-hup">POLL_HUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
 </dl>

 <dl id="pcntl.constants.ill">
  <strong class="title">ILL_* constants</strong>
  
   <dt id="constant.ill-illopc">
    <strong><code><a href="pcntl.constants.php#constant.ill-illopc">ILL_ILLOPC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ill-illopn">
    <strong><code><a href="pcntl.constants.php#constant.ill-illopn">ILL_ILLOPN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ill-illadr">
    <strong><code><a href="pcntl.constants.php#constant.ill-illadr">ILL_ILLADR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ill-illtrp">
    <strong><code><a href="pcntl.constants.php#constant.ill-illtrp">ILL_ILLTRP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ill-prvopc">
    <strong><code><a href="pcntl.constants.php#constant.ill-prvopc">ILL_PRVOPC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ill-prvreg">
    <strong><code><a href="pcntl.constants.php#constant.ill-prvreg">ILL_PRVREG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ill-coproc">
    <strong><code><a href="pcntl.constants.php#constant.ill-coproc">ILL_COPROC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ill-badstk">
    <strong><code><a href="pcntl.constants.php#constant.ill-badstk">ILL_BADSTK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
 </dl>

 <dl id="pcntl.constants.fpe">
  <strong class="title">FPE_* constants</strong>
  
   <dt id="constant.fpe-intdiv">
    <strong><code><a href="pcntl.constants.php#constant.fpe-intdiv">FPE_INTDIV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.fpe-intovf">
    <strong><code><a href="pcntl.constants.php#constant.fpe-intovf">FPE_INTOVF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.fpe-fltdiv">
    <strong><code><a href="pcntl.constants.php#constant.fpe-fltdiv">FPE_FLTDIV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.fpe-fltovf">
    <strong><code><a href="pcntl.constants.php#constant.fpe-fltovf">FPE_FLTOVF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.fpe-fltund">
    <strong><code><a href="pcntl.constants.php#constant.fpe-fltund">FPE_FLTUND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.fpe-fltres">
    <strong><code><a href="pcntl.constants.php#constant.fpe-fltres">FPE_FLTRES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.fpe-fltinv">
    <strong><code><a href="pcntl.constants.php#constant.fpe-fltinv">FPE_FLTINV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.fpe-fltsub">
    <strong><code><a href="pcntl.constants.php#constant.fpe-fltsub">FPE_FLTSUB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
 </dl>

 <dl id="pcntl.constants.segv">
  <strong class="title">SEGV_* constants</strong>
  
   <dt id="constant.segv-maperr">
    <strong><code><a href="pcntl.constants.php#constant.segv-maperr">SEGV_MAPERR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.segv-accerr">
    <strong><code><a href="pcntl.constants.php#constant.segv-accerr">SEGV_ACCERR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
 </dl>

 <dl id="pcntl.constants.bus">
  <strong class="title">BUS_* constants</strong>
  
   <dt id="constant.bus-adraln">
    <strong><code><a href="pcntl.constants.php#constant.bus-adraln">BUS_ADRALN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.bus-adrerr">
    <strong><code><a href="pcntl.constants.php#constant.bus-adrerr">BUS_ADRERR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.bus-objerr">
    <strong><code><a href="pcntl.constants.php#constant.bus-objerr">BUS_OBJERR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
 </dl>

 <dl id="pcntl.constants.clone">
  <strong class="title">CLONE_* constants</strong>
  
   <dt id="constant.clone-newns">
    <strong><code><a href="pcntl.constants.php#constant.clone-newns">CLONE_NEWNS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 7.4.0
    </span>
   </dd>
  
  
   <dt id="constant.clone-newipc">
    <strong><code><a href="pcntl.constants.php#constant.clone-newipc">CLONE_NEWIPC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 7.4.0
    </span>
   </dd>
  
  
   <dt id="constant.clone-newuts">
    <strong><code><a href="pcntl.constants.php#constant.clone-newuts">CLONE_NEWUTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 7.4.0
    </span>
   </dd>
  
  
   <dt id="constant.clone-newnet">
    <strong><code><a href="pcntl.constants.php#constant.clone-newnet">CLONE_NEWNET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 7.4.0
    </span>
   </dd>
  
  
   <dt id="constant.clone-newpid">
    <strong><code><a href="pcntl.constants.php#constant.clone-newpid">CLONE_NEWPID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 7.4.0
    </span>
   </dd>
  
  
   <dt id="constant.clone-newuser">
    <strong><code><a href="pcntl.constants.php#constant.clone-newuser">CLONE_NEWUSER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 7.4.0
    </span>
   </dd>
  
  
   <dt id="constant.clone-newcgroup">
    <strong><code><a href="pcntl.constants.php#constant.clone-newcgroup">CLONE_NEWCGROUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 7.4.0
    </span>
   </dd>
  
 </dl>

 <dl id="pcntl.constants.prio">
  <strong class="title">PRIO_* constants</strong>
  
   <dt id="constant.prio-pgrp">
    <strong><code><a href="pcntl.constants.php#constant.prio-pgrp">PRIO_PGRP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.prio-user">
    <strong><code><a href="pcntl.constants.php#constant.prio-user">PRIO_USER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.prio-process">
    <strong><code><a href="pcntl.constants.php#constant.prio-process">PRIO_PROCESS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.prio-darwin-bg">
    <strong><code><a href="pcntl.constants.php#constant.prio-darwin-bg">PRIO_DARWIN_BG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.1.0.
    </span>
   </dd>
  
  
   <dt id="constant.prio-darwin-thread">
    <strong><code><a href="pcntl.constants.php#constant.prio-darwin-thread">PRIO_DARWIN_THREAD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Available as of PHP 8.1.0.
    </span>
   </dd>
  
 </dl>
 <table id="constant.pcntl-error.constants" class="doctable table">
      <tr>
       <th>Constants</th>
       <th>Description</th>
      </tr>
  <strong class="title">Process Control error constants</strong>
  <tr>
   <td id="constant.pcntl-e2big">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-e2big">PCNTL_E2BIG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Argument list too long
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-eacces">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-eacces">PCNTL_EACCES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Permission denied
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-eagain">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-eagain">PCNTL_EAGAIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Resource temporarily unavailable
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-ecapmode">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-ecapmode">PCNTL_ECAPMODE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     The process attempted an operation not permitted in capability  mode
     while running in capability mode.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-echild">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-echild">PCNTL_ECHILD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     No child processes
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-efault">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-efault">PCNTL_EFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Bad address
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-eintr">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-eintr">PCNTL_EINTR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Interrupted function call
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-einval">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-einval">PCNTL_EINVAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Invalid argument
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-eio">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-eio">PCNTL_EIO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Input/output error
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-eisdir">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-eisdir">PCNTL_EISDIR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Is a directory
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-elibbad">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-elibbad">PCNTL_ELIBBAD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Accessing a corrupted shared library.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-eloop">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-eloop">PCNTL_ELOOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Too many levels of symbolic links
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-emfile">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-emfile">PCNTL_EMFILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Too many open files. Commonly caused by exceeding
     the <code class="literal">RLIMIT_NOFILE</code> resource limit.
     Can also be caused by exceeding the limit specified in
     <var class="filename">/proc/sys/fs/nr_open</var>.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-enametoolong">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-enametoolong">PCNTL_ENAMETOOLONG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Filename too long
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-enfile">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-enfile">PCNTL_ENFILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Too many open files in system.
     On Linux, this is probably a result of encountering
     the <var class="filename">/proc/sys/fs/file-max</var> limit.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-enoent">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-enoent">PCNTL_ENOENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     No such file or directory.
     Typically, this error results when a specified pathname
     does not exist, or one of the components in the directory
     prefix of a pathname does not exist, or the specified
     pathname is a dangling symbolic link.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-enoexec">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-enoexec">PCNTL_ENOEXEC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Exec format error
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-enomem">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-enomem">PCNTL_ENOMEM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Not enough space/cannot allocate memory
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-enospc">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-enospc">PCNTL_ENOSPC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     No space left on device
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-enotdir">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-enotdir">PCNTL_ENOTDIR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Not a directory
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-eperm">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-eperm">PCNTL_EPERM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Operation not permitted
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-esrch">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-esrch">PCNTL_ESRCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     No such process
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-etxtbsy">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-etxtbsy">PCNTL_ETXTBSY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Text file busy
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pcntl-eusers">
    <strong><code><a href="pcntl.constants.php#constant.pcntl-eusers">PCNTL_EUSERS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Too many users
    </span>
   </td>
  </tr>
 </table>
 <dl id="pcntl.constants.fork">
  <strong class="title">FORK_* constants</strong>
  
   <dt id="constant.fork-nosigchld">
    <strong><code><a href="pcntl.constants.php#constant.fork-nosigchld">FORK_NOSIGCHLD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.fork-waitpid">
    <strong><code><a href="pcntl.constants.php#constant.fork-waitpid">FORK_WAITPID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
 </dl>
 <dl id="pcntl.constants.rf">
  <strong class="title">RF* constants</strong>
  
   <dt id="constant.rfcfdg">
    <strong><code><a href="pcntl.constants.php#constant.rfcfdg">RFCFDG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rffdg">
    <strong><code><a href="pcntl.constants.php#constant.rffdg">RFFDG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rflinuxthpn">
    <strong><code><a href="pcntl.constants.php#constant.rflinuxthpn">RFLINUXTHPN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rfnowait">
    <strong><code><a href="pcntl.constants.php#constant.rfnowait">RFNOWAIT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rfproc">
    <strong><code><a href="pcntl.constants.php#constant.rfproc">RFPROC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rfthread">
    <strong><code><a href="pcntl.constants.php#constant.rfthread">RFTHREAD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rftsigzmb">
    <strong><code><a href="pcntl.constants.php#constant.rftsigzmb">RFTSIGZMB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
 </dl>
<dl id="pcntl.constants.waitid">
 <strong class="title">First argument to <code class="literal">waitid</code> (<code class="literal">idtype</code>)</strong>
  
   <dt id="constant.p-all">
    <strong><code><a href="pcntl.constants.php#constant.p-all">P_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Select any children.
    </span>
   </dd>
  
  
   <dt id="constant.p-pid">
    <strong><code><a href="pcntl.constants.php#constant.p-pid">P_PID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Select by process ID.
    </span>
   </dd>
  
  
   <dt id="constant.p-pgid">
    <strong><code><a href="pcntl.constants.php#constant.p-pgid">P_PGID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Select by process group ID.
    </span>
   </dd>
  
  
   <dt id="constant.p-pidfd">
    <strong><code><a href="pcntl.constants.php#constant.p-pidfd">P_PIDFD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Select by PID file descriptor.
     Specific to Linux (since Linux 5.4).
    </span>
   </dd>
  
  
   <dt id="constant.p-uid">
    <strong><code><a href="pcntl.constants.php#constant.p-uid">P_UID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Select by effective user ID.
     Specific to NetBSD and FreeBSD.
    </span>
   </dd>
  
  
   <dt id="constant.p-gid">
    <strong><code><a href="pcntl.constants.php#constant.p-gid">P_GID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Select by effective group ID.
     Specific to NetBSD and FreeBSD.
    </span>
   </dd>
  
  
   <dt id="constant.p-sid">
    <strong><code><a href="pcntl.constants.php#constant.p-sid">P_SID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Select by session ID.
     Specific to NetBSD and FreeBSD.
    </span>
   </dd>
  
  
   <dt id="constant.p-jailid">
    <strong><code><a href="pcntl.constants.php#constant.p-jailid">P_JAILID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Select by jail identifier.
     Specific to FreeBSD.
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pcntl/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpcntl.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pcntl.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pcntl.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115603">  <div class="votes">
    <div id="Vu115603">
    <a href="/manual/vote-note.php?id=115603&amp;page=pcntl.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115603">
    <a href="/manual/vote-note.php?id=115603&amp;page=pcntl.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115603" title="70% like this...">
    10
    </div>
  </div>
  <a href="#115603" class="name">
  <strong class="user"><em>coder dot ua at gmail dot com</em></strong></a><a class="genanchor" href="#115603"> &para;</a><div class="date" title="2014-08-23 01:05"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115603">
<div class="phpcode"><code><span class="html">You should see all signals and their codes in your system using: kill -l<br />In my Debian GNU/Linux 7.6 (wheezy):<br /><br /> 1) SIGHUP       2) SIGINT       3) SIGQUIT      4) SIGILL       5) SIGTRAP<br /> 6) SIGABRT      7) SIGBUS       8) SIGFPE       9) SIGKILL     10) SIGUSR1<br />11) SIGSEGV     12) SIGUSR2     13) SIGPIPE     14) SIGALRM     15) SIGTERM<br />16) SIGSTKFLT   17) SIGCHLD     18) SIGCONT     19) SIGSTOP     20) SIGTSTP<br />21) SIGTTIN     22) SIGTTOU     23) SIGURG      24) SIGXCPU     25) SIGXFSZ<br />26) SIGVTALRM   27) SIGPROF     28) SIGWINCH    29) SIGIO       30) SIGPWR<br />31) SIGSYS      34) SIGRTMIN    35) SIGRTMIN+1  36) SIGRTMIN+2  37) SIGRTMIN+3<br />38) SIGRTMIN+4  39) SIGRTMIN+5  40) SIGRTMIN+6  41) SIGRTMIN+7  42) SIGRTMIN+8<br />43) SIGRTMIN+9  44) SIGRTMIN+10 45) SIGRTMIN+11 46) SIGRTMIN+12 47) SIGRTMIN+13<br />48) SIGRTMIN+14 49) SIGRTMIN+15 50) SIGRTMAX-14 51) SIGRTMAX-13 52) SIGRTMAX-12<br />53) SIGRTMAX-11 54) SIGRTMAX-10 55) SIGRTMAX-9  56) SIGRTMAX-8  57) SIGRTMAX-7<br />58) SIGRTMAX-6  59) SIGRTMAX-5  60) SIGRTMAX-4  61) SIGRTMAX-3  62) SIGRTMAX-2<br />63) SIGRTMAX-1  64) SIGRTMAX</span></code></div>
  </div>
 </div>
  <div class="note" id="107072">  <div class="votes">
    <div id="Vu107072">
    <a href="/manual/vote-note.php?id=107072&amp;page=pcntl.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107072">
    <a href="/manual/vote-note.php?id=107072&amp;page=pcntl.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107072" title="64% like this...">
    4
    </div>
  </div>
  <a href="#107072" class="name">
  <strong class="user"><em>eclecticrob at gmail dot com</em></strong></a><a class="genanchor" href="#107072"> &para;</a><div class="date" title="2012-01-04 03:43"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107072">
<div class="phpcode"><code><span class="html">On OS X, the values of the constants are:<br /><br />SIGHUP = 1<br />SIGINT = 2<br />SIGQUIT = 3<br />SIGILL = 4<br />SIGTRAP = 5<br />SIGABRT = 6<br />SIGIOT = 6<br />SIGBUS = 10<br />SIGFPE = 8<br />SIGUSR1 = 30<br />SIGSEGV = 11<br />SIGUSR2 = 31<br />SIGPIPE = 13<br />SIGALRM = 14<br />SIGTERM = 15<br />SIGSTKFLT not defined <br />SIGCLD not defined <br />SIGCHLD = 20<br />SIGCONT = 19<br />SIGTSTP = 18<br />SIGTTIN = 21<br />SIGTTOU = 22<br />SIGURG = 16<br />SIGXCPU = 24<br />SIGXFSZ = 25<br />SIGVTALRM = 26<br />SIGPROF = 27<br />SIGWINCH = 28<br />SIGPOLL not defined <br />SIGIO = 23<br />SIGPWR not defined <br />SIGSYS = 12<br />SIGBABY = 12<br />SIG_BLOCK = 1<br />SIG_UNBLOCK = 2<br />SIG_SETMASK = 3</span></code></div>
  </div>
 </div>
  <div class="note" id="108305">  <div class="votes">
    <div id="Vu108305">
    <a href="/manual/vote-note.php?id=108305&amp;page=pcntl.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108305">
    <a href="/manual/vote-note.php?id=108305&amp;page=pcntl.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108305" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#108305" class="name">
  <strong class="user"><em>eclecticrob at gmail dot com</em></strong></a><a class="genanchor" href="#108305"> &para;</a><div class="date" title="2012-04-15 10:26"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108305">
<div class="phpcode"><code><span class="html">On RedHat, the values of the constants are:<br /><br />Signal SIGHUP = 1<br />Signal SIGINT = 2<br />Signal SIGQUIT = 3<br />Signal SIGILL = 4<br />Signal SIGTRAP = 5<br />Signal SIGABRT = 6<br />Signal SIGIOT = 6<br />Signal SIGBUS = 7<br />Signal SIGFPE = 8<br />Signal SIGUSR1 = 10<br />Signal SIGSEGV = 11<br />Signal SIGUSR2 = 12<br />Signal SIGPIPE = 13<br />Signal SIGALRM = 14<br />Signal SIGTERM = 15<br />Signal SIGSTKFLT = 16<br />Signal SIGCLD = 17<br />Signal SIGCHLD = 17<br />Signal SIGCONT = 18<br />Signal SIGTSTP = 20<br />Signal SIGTTIN = 21<br />Signal SIGTTOU = 22<br />Signal SIGURG = 23<br />Signal SIGXCPU = 24<br />Signal SIGXFSZ = 25<br />Signal SIGVTALRM = 26<br />Signal SIGPROF = 27<br />Signal SIGWINCH = 28<br />Signal SIGPOLL = 29<br />Signal SIGIO = 29<br />Signal SIGPWR = 30<br />Signal SIGSYS = 31<br />Signal SIGBABY = 31<br />Signal SIG_BLOCK = 0<br />Signal SIG_UNBLOCK = 1<br />Signal SIG_SETMASK = 2</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pcntl.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pcntl.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.pcntl.php">PCNTL</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.pcntl.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="pcntl.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="pcntl.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="pcntl.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="enum.pcntl-qosclass.php" title="Pcntl\QosClass">Pcntl\QosClass</a>
                        </li>
                                                <li class="">
                            <a href="ref.pcntl.php" title="PCNTL Functions">PCNTL Functions</a>
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
