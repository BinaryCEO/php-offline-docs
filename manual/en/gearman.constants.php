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

 <link rel="canonical" href="https://www.php.net/manual/en/gearman.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/gearman.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/gearman.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.gearman.php">
 <link rel="prev" href="https://www.php.net/manual/en/gearman.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/gearman.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/gearman.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/gearman.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/gearman.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/gearman.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/gearman.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/gearman.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/gearman.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/gearman.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/gearman.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/gearman.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/gearman.constants.php" hreflang="zh">

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
        <a href="gearman.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="gearman.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.gearman.php'>Gearman</a></li>      </ul>
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
            <option value='en/gearman.constants.php' selected="selected">English</option>
            <option value='de/gearman.constants.php'>German</option>
            <option value='es/gearman.constants.php'>Spanish</option>
            <option value='fr/gearman.constants.php'>French</option>
            <option value='it/gearman.constants.php'>Italian</option>
            <option value='ja/gearman.constants.php'>Japanese</option>
            <option value='pt_BR/gearman.constants.php'>Brazilian Portuguese</option>
            <option value='ru/gearman.constants.php'>Russian</option>
            <option value='tr/gearman.constants.php'>Turkish</option>
            <option value='uk/gearman.constants.php'>Ukrainian</option>
            <option value='zh/gearman.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="gearman.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <p class="para">
  Return values.  Always check <span class="methodname"><a href="gearmanclient.error.php" class="methodname">GearmanClient::error()</a></span> or 
  <span class="methodname"><strong>GearmanWorker()</strong></span> for a string error, as it may contain
  more details:
 </p>
 <p class="para">
  <dl>
   
    <dt id="constant.gearman-success">
     <strong><code><a href="gearman.constants.php#constant.gearman-success">GEARMAN_SUCCESS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Whatever action was taken was successful.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-io-wait">
     <strong><code><a href="gearman.constants.php#constant.gearman-io-wait">GEARMAN_IO_WAIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      When in non-blocking mode, an event is hit that would have blocked.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-errno">
     <strong><code><a href="gearman.constants.php#constant.gearman-errno">GEARMAN_ERRNO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A system error.  Check <span class="methodname"><strong>GearmanClient::errno()</strong></span> or
      <span class="methodname"><strong>GearmanWorker::errno()</strong></span> for the system error code that
      was returned.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-no-active-fds">
     <strong><code><a href="gearman.constants.php#constant.gearman-no-active-fds">GEARMAN_NO_ACTIVE_FDS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      <span class="methodname"><a href="gearmanclient.wait.php" class="methodname">GearmanClient::wait()</a></span> or <span class="methodname"><strong>GearmanWorker()</strong></span> was
      called with no connections.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-unexpected-packet">
     <strong><code><a href="gearman.constants.php#constant.gearman-unexpected-packet">GEARMAN_UNEXPECTED_PACKET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates something going very wrong in gearmand.  Applies only to
      <span class="classname"><a href="class.gearmanworker.php" class="classname">GearmanWorker</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-getaddrinfo">
     <strong><code><a href="gearman.constants.php#constant.gearman-getaddrinfo">GEARMAN_GETADDRINFO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      DNS resolution failed (invalid host, port, etc).
     </span>
    </dd>
   
   
    <dt id="constant.gearman-no-servers">
     <strong><code><a href="gearman.constants.php#constant.gearman-no-servers">GEARMAN_NO_SERVERS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Did not call <span class="methodname"><a href="gearmanclient.addserver.php" class="methodname">GearmanClient::addServer()</a></span> before submitting jobs
      or tasks.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-lost-connection">
     <strong><code><a href="gearman.constants.php#constant.gearman-lost-connection">GEARMAN_LOST_CONNECTION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Lost a connection during a request.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-memory-allocation-failure">
     <strong><code><a href="gearman.constants.php#constant.gearman-memory-allocation-failure">GEARMAN_MEMORY_ALLOCATION_FAILURE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Memory allocation failed (ran out of memory).
     </span>
    </dd>
   
   
    <dt id="constant.gearman-server-error">
     <strong><code><a href="gearman.constants.php#constant.gearman-server-error">GEARMAN_SERVER_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Something went wrong in the Gearman server and it could not handle the
      request gracefully.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-work-data">
     <strong><code><a href="gearman.constants.php#constant.gearman-work-data">GEARMAN_WORK_DATA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Notice return code obtained with <span class="methodname"><a href="gearmanclient.returncode.php" class="methodname">GearmanClient::returnCode()</a></span>
      when using <span class="methodname"><a href="gearmanclient.do.php" class="methodname">GearmanClient::do()</a></span>.  Sent to update the client
      with data from a running job.  A worker uses this when it needs to send updates,
      send partial results, or flush data during long running jobs.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-work-warning">
     <strong><code><a href="gearman.constants.php#constant.gearman-work-warning">GEARMAN_WORK_WARNING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Notice return code obtained with <span class="methodname"><a href="gearmanclient.returncode.php" class="methodname">GearmanClient::returnCode()</a></span>
      when using <span class="methodname"><a href="gearmanclient.do.php" class="methodname">GearmanClient::do()</a></span>.  Updates the client with
      a warning.  The behavior is just like <strong><code><a href="gearman.constants.php#constant.gearman-work-data">GEARMAN_WORK_DATA</a></code></strong>, but
      should be treated as a warning instead of normal response data.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-work-status">
     <strong><code><a href="gearman.constants.php#constant.gearman-work-status">GEARMAN_WORK_STATUS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Notice return code obtained with <span class="methodname"><a href="gearmanclient.returncode.php" class="methodname">GearmanClient::returnCode()</a></span>
      when using <span class="methodname"><a href="gearmanclient.do.php" class="methodname">GearmanClient::do()</a></span>. Sent to update the status
      of a long running job. Use <span class="methodname"><a href="gearmanclient.dostatus.php" class="methodname">GearmanClient::doStatus()</a></span> to obtain
      the percentage complete of the task.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-work-exception">
     <strong><code><a href="gearman.constants.php#constant.gearman-work-exception">GEARMAN_WORK_EXCEPTION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Notice return code obtained with <span class="methodname"><a href="gearmanclient.returncode.php" class="methodname">GearmanClient::returnCode()</a></span>
      when using <span class="methodname"><a href="gearmanclient.do.php" class="methodname">GearmanClient::do()</a></span>. Indicates that a job failed
      with a given exception.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-work-fail">
     <strong><code><a href="gearman.constants.php#constant.gearman-work-fail">GEARMAN_WORK_FAIL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Notice return code obtained with <span class="methodname"><a href="gearmanclient.returncode.php" class="methodname">GearmanClient::returnCode()</a></span>
      when using <span class="methodname"><a href="gearmanclient.do.php" class="methodname">GearmanClient::do()</a></span>. Indicates that the job failed.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-could-not-connect">
     <strong><code><a href="gearman.constants.php#constant.gearman-could-not-connect">GEARMAN_COULD_NOT_CONNECT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Failed to connect to servers.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-invalid-function-name">
     <strong><code><a href="gearman.constants.php#constant.gearman-invalid-function-name">GEARMAN_INVALID_FUNCTION_NAME</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Trying to register a function name of NULL or using the callback interface
      without specifying callbacks.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-invalid-worker-function">
     <strong><code><a href="gearman.constants.php#constant.gearman-invalid-worker-function">GEARMAN_INVALID_WORKER_FUNCTION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Trying to register a function with a NULL callback function.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-no-registered-functions">
     <strong><code><a href="gearman.constants.php#constant.gearman-no-registered-functions">GEARMAN_NO_REGISTERED_FUNCTIONS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      When a worker gets a job for a function it did not register.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-no-jobs">
     <strong><code><a href="gearman.constants.php#constant.gearman-no-jobs">GEARMAN_NO_JOBS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      For a non-blocking worker, when <span class="methodname"><a href="gearmanworker.work.php" class="methodname">GearmanWorker::work()</a></span> does not have
      any active jobs.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-echo-data-corruption">
     <strong><code><a href="gearman.constants.php#constant.gearman-echo-data-corruption">GEARMAN_ECHO_DATA_CORRUPTION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      After <span class="methodname"><a href="gearmanclient.echo.php" class="methodname">GearmanClient::echo()</a></span> or <span class="methodname"><a href="gearmanworker.echo.php" class="methodname">GearmanWorker::echo()</a></span>
      the data returned doesn&#039;t match the data sent.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-need-workload-fn">
     <strong><code><a href="gearman.constants.php#constant.gearman-need-workload-fn">GEARMAN_NEED_WORKLOAD_FN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      When the client opted to stream the workload of a task, but did not
      specify a workload callback function.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-pause">
     <strong><code><a href="gearman.constants.php#constant.gearman-pause">GEARMAN_PAUSE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      For the non-blocking client task interface, can be returned from the task callback
      to &quot;pause&quot; the call and return from <span class="methodname"><a href="gearmanclient.runtasks.php" class="methodname">GearmanClient::runTasks()</a></span>.
      Call <span class="methodname"><a href="gearmanclient.runtasks.php" class="methodname">GearmanClient::runTasks()</a></span> again to continue.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-unknown-state">
     <strong><code><a href="gearman.constants.php#constant.gearman-unknown-state">GEARMAN_UNKNOWN_STATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Internal client/worker state error.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-send-buffer-too-small">
     <strong><code><a href="gearman.constants.php#constant.gearman-send-buffer-too-small">GEARMAN_SEND_BUFFER_TOO_SMALL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Internal error: trying to flush more data in one atomic chunk than is possible
      due to hard-coded buffer sizes.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-timeout">
     <strong><code><a href="gearman.constants.php#constant.gearman-timeout">GEARMAN_TIMEOUT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Hit the timeout limit set by the client/worker.
     </span>
    </dd>
   
  </dl>
 </p>

 <p class="para">
  <span class="classname"><a href="class.gearmanclient.php" class="classname">GearmanClient</a></span> options:
 </p>
 <p class="para">
  <dl>
   
    <dt id="constant.gearman-client-generate-unique">
     <strong><code><a href="gearman.constants.php#constant.gearman-client-generate-unique">GEARMAN_CLIENT_GENERATE_UNIQUE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Generate a unique id (UUID) for each task.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-client-non-blocking">
     <strong><code><a href="gearman.constants.php#constant.gearman-client-non-blocking">GEARMAN_CLIENT_NON_BLOCKING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Run the cient in a non-blocking mode.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-client-unbuffered-result">
     <strong><code><a href="gearman.constants.php#constant.gearman-client-unbuffered-result">GEARMAN_CLIENT_UNBUFFERED_RESULT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Allow the client to read data in chunks rather than have the library
      buffer the entire data result and pass that back.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-client-free-tasks">
     <strong><code><a href="gearman.constants.php#constant.gearman-client-free-tasks">GEARMAN_CLIENT_FREE_TASKS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Automatically free task objects once they are complete.  This is the default
      setting in this extension to prevent memory leaks.
     </span>
    </dd>
   
  </dl>
 </p>

 <p class="para">
  <span class="classname"><a href="class.gearmanworker.php" class="classname">GearmanWorker</a></span> options:
 </p>
 <p class="para">
  <dl>
   
    <dt id="constant.gearman-worker-non-blocking">
     <strong><code><a href="gearman.constants.php#constant.gearman-worker-non-blocking">GEARMAN_WORKER_NON_BLOCKING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Run the worker in non-blocking mode.
     </span>
    </dd>
   
   
    <dt id="constant.gearman-worker-grab-uniq">
     <strong><code><a href="gearman.constants.php#constant.gearman-worker-grab-uniq">GEARMAN_WORKER_GRAB_UNIQ</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Return the client assigned unique ID in addition to the job handle.
     </span>
    </dd>
   
  </dl>
 </p>

 <p class="para">
  Base Gearman configuration:
 </p>
 <p class="para">
  <dl>
   
    <dt id="constant.gearman-default-tcp-host">
     <strong><code><a href="gearman.constants.php#constant.gearman-default-tcp-host">GEARMAN_DEFAULT_TCP_HOST</a></code></strong>
     (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-default-tcp-port">
     <strong><code><a href="gearman.constants.php#constant.gearman-default-tcp-port">GEARMAN_DEFAULT_TCP_PORT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-default-socket-timeout">
     <strong><code><a href="gearman.constants.php#constant.gearman-default-socket-timeout">GEARMAN_DEFAULT_SOCKET_TIMEOUT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-default-socket-send-size">
     <strong><code><a href="gearman.constants.php#constant.gearman-default-socket-send-size">GEARMAN_DEFAULT_SOCKET_SEND_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-default-socket-recv-size">
     <strong><code><a href="gearman.constants.php#constant.gearman-default-socket-recv-size">GEARMAN_DEFAULT_SOCKET_RECV_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-max-error-size">
     <strong><code><a href="gearman.constants.php#constant.gearman-max-error-size">GEARMAN_MAX_ERROR_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-packet-header-size">
     <strong><code><a href="gearman.constants.php#constant.gearman-packet-header-size">GEARMAN_PACKET_HEADER_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-job-handle-size">
     <strong><code><a href="gearman.constants.php#constant.gearman-job-handle-size">GEARMAN_JOB_HANDLE_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-option-size">
     <strong><code><a href="gearman.constants.php#constant.gearman-option-size">GEARMAN_OPTION_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-unique-size">
     <strong><code><a href="gearman.constants.php#constant.gearman-unique-size">GEARMAN_UNIQUE_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-max-command-args">
     <strong><code><a href="gearman.constants.php#constant.gearman-max-command-args">GEARMAN_MAX_COMMAND_ARGS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-args-buffer-size">
     <strong><code><a href="gearman.constants.php#constant.gearman-args-buffer-size">GEARMAN_ARGS_BUFFER_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-send-buffer-size">
     <strong><code><a href="gearman.constants.php#constant.gearman-send-buffer-size">GEARMAN_SEND_BUFFER_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-recv-buffer-size">
     <strong><code><a href="gearman.constants.php#constant.gearman-recv-buffer-size">GEARMAN_RECV_BUFFER_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.gearman-worker-wait-timeout">
     <strong><code><a href="gearman.constants.php#constant.gearman-worker-wait-timeout">GEARMAN_WORKER_WAIT_TIMEOUT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
  </dl>
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gearman/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fgearman.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=gearman.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/gearman.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109774">  <div class="votes">
    <div id="Vu109774">
    <a href="/manual/vote-note.php?id=109774&amp;page=gearman.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109774">
    <a href="/manual/vote-note.php?id=109774&amp;page=gearman.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109774" title="100% like this...">
    7
    </div>
  </div>
  <a href="#109774" class="name">
  <strong class="user"><em>ion dot dulgheru at gmail dot com</em></strong></a><a class="genanchor" href="#109774"> &para;</a><div class="date" title="2012-08-19 01:46"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109774">
<div class="phpcode"><code><span class="html">an update (gearman 0.35):<br /><br />GEARMAN_NO_REGISTERED_FUNCTION = 33<br />GEARMAN_NO_REGISTERED_FUNCTIONS =    34<br />GEARMAN_NO_JOBS = 35<br />GEARMAN_ECHO_DATA_CORRUPTION = 36<br />GEARMAN_NEED_WORKLOAD_FN = 37<br />GEARMAN_PAUSE = 38<br />GEARMAN_UNKNOWN_STATE = 39<br />GEARMAN_PTHREAD = 40<br />GEARMAN_PIPE_EOF     = 41<br />GEARMAN_QUEUE_ERROR    = 42<br />GEARMAN_FLUSH_DATA = 43<br />GEARMAN_SEND_BUFFER_TOO_SMALL = 44<br />GEARMAN_IGNORE_PACKET = 45<br />GEARMAN_UNKNOWN_OPTION = 46<br />GEARMAN_TIMEOUT    = 47<br />GEARMAN_ARGUMENT_TOO_LARGE = 48<br />GEARMAN_MAX_RETURN =    49</span></code></div>
  </div>
 </div>
  <div class="note" id="98433">  <div class="votes">
    <div id="Vu98433">
    <a href="/manual/vote-note.php?id=98433&amp;page=gearman.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98433">
    <a href="/manual/vote-note.php?id=98433&amp;page=gearman.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98433" title="75% like this...">
    4
    </div>
  </div>
  <a href="#98433" class="name">
  <strong class="user"><em>Shane Harter</em></strong></a><a class="genanchor" href="#98433"> &para;</a><div class="date" title="2010-06-15 11:30"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98433">
<div class="phpcode"><code><span class="html">I looked everywhere for for a dump of the values of each of the gearman constants. I ended up in the gearman source. <br /><br />You'll find this useful if you ever just echo the return code. <br /><br />GEARMAN_SUCCESS = 0<br />GEARMAN_IO_WAIT = 1<br />GEARMAN_SHUTDOWN = 2<br />GEARMAN_SHUTDOWN_GRACEFUL = 3<br />GEARMAN_ERRNO = 4<br />GEARMAN_EVENT = 5<br />GEARMAN_TOO_MANY_ARGS = 6<br />GEARMAN_NO_ACTIVE_FDS = 7<br />GEARMAN_INVALID_MAGIC = 8<br />GEARMAN_INVALID_COMMAND = 9<br />GEARMAN_INVALID_PACKET = 10<br />GEARMAN_UNEXPECTED_PACKET = 11<br />GEARMAN_GETADDRINFO = 12<br />GEARMAN_NO_SERVERS = 13<br />GEARMAN_LOST_CONNECTION = 14<br />GEARMAN_MEMORY_ALLOCATION_FAILURE = 15<br />GEARMAN_JOB_EXISTS = 16<br />GEARMAN_JOB_QUEUE_FULL = 17<br />GEARMAN_SERVER_ERROR = 18<br />GEARMAN_WORK_ERROR = 19<br />GEARMAN_WORK_DATA = 20<br />GEARMAN_WORK_WARNING = 21<br />GEARMAN_WORK_STATUS = 22<br />GEARMAN_WORK_EXCEPTION = 23<br />GEARMAN_WORK_FAIL = 24<br />GEARMAN_NOT_CONNECTED = 25<br />GEARMAN_COULD_NOT_CONNECT = 26<br />GEARMAN_SEND_IN_PROGRESS = 27<br />GEARMAN_RECV_IN_PROGRESS = 28<br />GEARMAN_NOT_FLUSHING = 29<br />GEARMAN_DATA_TOO_LARGE = 30<br />GEARMAN_INVALID_FUNCTION_NAME = 31<br />GEARMAN_INVALID_WORKER_FUNCTION = 32<br />GEARMAN_NO_REGISTERED_FUNCTIONS = 33<br />GEARMAN_NO_JOBS = 34<br />GEARMAN_ECHO_DATA_CORRUPTION = 35<br />GEARMAN_NEED_WORKLOAD_FN = 36<br />GEARMAN_PAUSE = 37<br />GEARMAN_UNKNOWN_STATE = 38<br />GEARMAN_PTHREAD = 39<br />GEARMAN_PIPE_EOF = 40<br />GEARMAN_QUEUE_ERROR = 41<br />GEARMAN_FLUSH_DATA = 42<br />GEARMAN_SEND_BUFFER_TOO_SMALL = 43<br />GEARMAN_IGNORE_PACKET = 44<br />GEARMAN_UNKNOWN_OPTION = 45<br />GEARMAN_MAX_RETURN = 46</span></code></div>
  </div>
 </div>
  <div class="note" id="117233">  <div class="votes">
    <div id="Vu117233">
    <a href="/manual/vote-note.php?id=117233&amp;page=gearman.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117233">
    <a href="/manual/vote-note.php?id=117233&amp;page=gearman.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117233" title="100% like this...">
    1
    </div>
  </div>
  <a href="#117233" class="name">
  <strong class="user"><em>michaelhfranze at gmail dot com</em></strong></a><a class="genanchor" href="#117233"> &para;</a><div class="date" title="2015-05-07 10:26"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117233">
<div class="phpcode"><code><span class="html">If you are getting<br /><br />Error 26  GEARMAN_COULD_NOT_CONNECT (integer)<br /><br />and you are running SELinux then you need to set<br /><br />setsetbool -P http_can_network_connect = 1</span></code></div>
  </div>
 </div>
  <div class="note" id="117080">  <div class="votes">
    <div id="Vu117080">
    <a href="/manual/vote-note.php?id=117080&amp;page=gearman.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117080">
    <a href="/manual/vote-note.php?id=117080&amp;page=gearman.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117080" title="100% like this...">
    1
    </div>
  </div>
  <a href="#117080" class="name">
  <strong class="user"><em>y_inaura at hm-solution dot jp</em></strong></a><a class="genanchor" href="#117080"> &para;</a><div class="date" title="2015-04-13 02:02"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117080">
<div class="phpcode"><code><span class="html">retrunCodes is missed from No.33 .<br />I think , Correct retrunCodes are this.<br /><br />GEARMAN_SUCCESS = 0<br />GEARMAN_IO_WAIT = 1<br />GEARMAN_SHUTDOWN = 2<br />GEARMAN_SHUTDOWN_GRACEFUL = 3<br />GEARMAN_ERRNO = 4<br />GEARMAN_EVENT = 5<br />GEARMAN_TOO_MANY_ARGS = 6<br />GEARMAN_NO_ACTIVE_FDS = 7<br />GEARMAN_INVALID_MAGIC = 8<br />GEARMAN_INVALID_COMMAND = 9<br />GEARMAN_INVALID_PACKET = 10<br />GEARMAN_UNEXPECTED_PACKET = 11<br />GEARMAN_GETADDRINFO = 12<br />GEARMAN_NO_SERVERS = 13<br />GEARMAN_LOST_CONNECTION = 14<br />GEARMAN_MEMORY_ALLOCATION_FAILURE = 15<br />GEARMAN_JOB_EXISTS = 16<br />GEARMAN_JOB_QUEUE_FULL = 17<br />GEARMAN_SERVER_ERROR = 18<br />GEARMAN_WORK_ERROR = 19<br />GEARMAN_WORK_DATA = 20<br />GEARMAN_WORK_WARNING = 21<br />GEARMAN_WORK_STATUS = 22<br />GEARMAN_WORK_EXCEPTION = 23<br />GEARMAN_WORK_FAIL = 24<br />GEARMAN_NOT_CONNECTED = 25<br />GEARMAN_COULD_NOT_CONNECT = 26<br />GEARMAN_SEND_IN_PROGRESS = 27<br />GEARMAN_RECV_IN_PROGRESS = 28<br />GEARMAN_NOT_FLUSHING = 29<br />GEARMAN_DATA_TOO_LARGE = 30<br />GEARMAN_INVALID_FUNCTION_NAME = 31<br />GEARMAN_INVALID_WORKER_FUNCTION = 32<br />GEARMAN_NO_REGISTERED_FUNCTIONS = 34<br />GEARMAN_NO_JOBS = 35<br />GEARMAN_ECHO_DATA_CORRUPTION = 36<br />GEARMAN_NEED_WORKLOAD_FN = 37<br />GEARMAN_PAUSE = 38<br />GEARMAN_UNKNOWN_STATE = 39<br />GEARMAN_PTHREAD = 40<br />GEARMAN_PIPE_EOF = 41<br />GEARMAN_QUEUE_ERROR = 42<br />GEARMAN_FLUSH_DATA = 43<br />GEARMAN_SEND_BUFFER_TOO_SMALL = 44<br />GEARMAN_IGNORE_PACKET = 45<br />GEARMAN_UNKNOWN_OPTION = 46<br />GEARMAN_MAX_RETURN = 52</span></code></div>
  </div>
 </div>
  <div class="note" id="127477">  <div class="votes">
    <div id="Vu127477">
    <a href="/manual/vote-note.php?id=127477&amp;page=gearman.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127477">
    <a href="/manual/vote-note.php?id=127477&amp;page=gearman.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127477" title="no votes...">
    0
    </div>
  </div>
  <a href="#127477" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#127477"> &para;</a><div class="date" title="2022-08-10 03:36"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127477">
<div class="phpcode"><code><span class="html">There is an GEARMAN_WORKER_GRAB_JOB_IN_USE constant that allows you to retry a job that has been exited by same or another worker (exited unsuccessfully width code &lt;&gt; 0)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=gearman.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/gearman.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.gearman.php">Gearman</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.gearman.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="gearman.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="gearman.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="gearman.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.gearmanclient.php" title="GearmanClient">GearmanClient</a>
                        </li>
                                                <li class="">
                            <a href="class.gearmanjob.php" title="GearmanJob">GearmanJob</a>
                        </li>
                                                <li class="">
                            <a href="class.gearmantask.php" title="GearmanTask">GearmanTask</a>
                        </li>
                                                <li class="">
                            <a href="class.gearmanworker.php" title="GearmanWorker">GearmanWorker</a>
                        </li>
                                                <li class="">
                            <a href="class.gearmanexception.php" title="GearmanException">GearmanException</a>
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
